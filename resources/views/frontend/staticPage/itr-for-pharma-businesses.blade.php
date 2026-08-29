
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
    <title>ITR for Pharma Business: 35(2AB), 54(3)</title>
    <meta name="description" content="File ITR for pharma manufacturers, traders and chemists. R and D deduction, inverted duty refund, CDSCO costs, audit. Starts at Rs 7,500.">
    <link rel="canonical" href="/itr-for-pharma-businesses">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Pharma Business 2026: 35(2AB), 54(3) | Patron Accounting">
    <meta property="og:description" content="File ITR for pharma manufacturers, traders and chemists. R and D deduction, inverted duty refund, CDSCO costs, audit. Starts at Rs 7,500.">
    <meta property="og:url" content="/itr-for-pharma-businesses/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Pharma Business 2026: 35(2AB), 54(3) | Patron Accounting">
    <meta name="twitter:description" content="File ITR for pharma manufacturers, traders and chemists. R and D deduction, inverted duty refund, CDSCO costs, audit. Starts at Rs 7,500.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "https://www.patronaccounting.com/itr-for-pharma-businesses/#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR for Pharma Businesses", "item": "https://www.patronaccounting.com/itr-for-pharma-businesses" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.patronaccounting.com/itr-for-pharma-businesses/#faq",
          "datePublished": "2026-05-08T08:00:00+05:30",
          "dateModified": "2026-05-08T08:00:00+05:30",
          "mainEntity": [
            {
                "@type": "Question",
                "name": "Which ITR form is used for a pharmaceutical company in India?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A private limited or listed pharma manufacturer files ITR-6. A pharma LLP or partnership firm files ITR-5. A proprietor pharma trader or chemist files ITR-3 with regular books, or ITR-4 if opting for the presumptive scheme under Section 44AD with turnover up to Rs 2 crore (Rs 3 crore if 95 percent of receipts and payments are non-cash, per Finance Act 2023). HUF running a medical store files ITR-3. Pharma R and D society or trust files ITR-7. Cross-border pharma with overseas affiliate files ITR-6 with Form 3CEB transfer pricing report."
                }
            },
            {
                "@type": "Question",
                "name": "Can pharma companies still claim weighted R and D deduction under Section 35(2AB)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Pharma manufacturers with an in-house R and D facility approved by DSIR can claim a 100 percent deduction (the rate reduced from 200 percent to 150 percent from 1 April 2017 to 31 March 2020 and to 100 percent thereafter per Finance Act 2016). The deduction is capped at the amount approved by DSIR in Form 3CL, as reaffirmed by the ITAT Ahmedabad bench in Alembic Pharmaceuticals (March 2026). Form 3CK is the application; Form 3CLA is the chartered accountant's annual quantification of R and D expenditure (revenue and capital, excluding land and building)."
                }
            },
            {
                "@type": "Question",
                "name": "What is the tax audit threshold for a pharma trader or manufacturer?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tax audit applies under Section 44AB if pharma turnover exceeds Rs 1 crore in a financial year. The threshold rises to Rs 10 crore if 95 percent of receipts and payments are non-cash - which most institutional pharma sales meet, since marketplace, hospital, and chain-pharmacy receipts come via bank transfer. The Form 3CD report is due 30 September 2026 and the audit-case ITR by 31 October 2026 for AY 2026-27. Section 271B penalty for default is 0.5 percent of turnover or Rs 1.5 lakh, whichever lower."
                }
            },
            {
                "@type": "Question",
                "name": "Are CDSCO licence fees and renewal charges deductible in ITR?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. CDSCO licence fees, Form 25 / Form 28 renewal charges, COPP application fees, GMP audit fees, Form 41 import licence, and clinical trial regulatory fees are revenue expenditure deductible under Section 37(1) of the Income-tax Act 1961, since they are wholly and exclusively for the business and are not prohibited by law. They feed into Schedule BP / P and L of ITR-6 (or ITR-5 / ITR-3 as applicable). Generic CA misclassification as capital expenditure causes depreciation drag - Patron classifies cleanly as revenue."
                }
            },
            {
                "@type": "Question",
                "name": "How does inverted duty structure affect a pharma manufacturer's ITR?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "APIs commonly attract 18 percent GST while many finished medicines attract 5 percent GST, creating accumulated ITC. This refund is claimed separately on the GST portal via RFD-01 under Section 54(3) of the CGST Act 2017 read with Rule 89(5). The 90 percent provisional refund regime is now available for applications filed on or after 1 October 2025 per CGST Instruction 6/2025 dated 3 October 2025. The refund itself is a reduction of ITC and not income, but unrecovered ITC sitting in the books needs disclosure in the tax audit Form 3CD Clause 27."
                }
            },
            {
                "@type": "Question",
                "name": "Can pharma companies claim doctor freebies, gifts, or sponsored conferences as expenditure?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No. Following the Supreme Court ruling in Apex Laboratories Pvt Ltd vs DCIT (2022) and Explanation 3 to Section 37(1) inserted by the Finance Act 2022, any expenditure in the form of freebies, gifts, hospitality, gold coins, electronic items (LCD TVs, laptops), or sponsored travel to medical practitioners in violation of the Indian Medical Council Regulations 2002 is disallowed in full. Bona fide consultancy fees with proper deliverables (advisory, contract research, training) are still allowed. Patron classifies expenditure at source with documentation pack for scrutiny defence."
                }
            },
            {
                "@type": "Question",
                "name": "Do pharma exporters get RoDTEP benefits?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Most pharmaceutical products are currently excluded from the RoDTEP scheme per DGFT public notices and ICEGATE rate schedule. Pharma exporters should rely on duty drawback under Section 75 of the Customs Act 1962, advance authorisation, EOU benefits, or Section 10AA SEZ deduction (where applicable) instead. Patron Accounting maps each export shipment to the right benefit before filing ITR. Mistakenly claiming RoDTEP for excluded pharma products triggers DGFT recovery and ITR adjustment notices."
                }
            },
            {
                "@type": "Question",
                "name": "How is pharma inventory valued for income tax purposes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under ICDS-II (CBDT Notification 87/2016 dated 29 September 2016), pharma inventory is valued at the lower of cost or net realisable value, using either FIFO or weighted average cost. LIFO is not permitted for income tax. Cost includes purchase price, freight inwards, customs and CVD, but excludes interest on borrowings (unless capitalised under ICDS-IX). Slow-moving and near-expiry stock must be written down to NRV item by item, with the write-down deductible under Section 28. Reconciliation with CDSCO Form 25 / Form 28 stock register is mandatory in tax audit."
                }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "https://www.patronaccounting.com/itr-for-pharma-businesses/#service",
          "name": "ITR for Pharma Businesses in India",
          "description": "CA-led income tax return filing for pharmaceutical manufacturers, traders, chemists, contract research organisations, and listed pharma companies. Covers ITR-3, ITR-5, ITR-6, ITR-7 with Section 35(2AB) R and D weighted deduction (100 percent post 1 April 2020 capped at DSIR Form 3CL), Section 54(3) CGST inverted duty refund (90 percent provisional regime from 1 October 2025 per CGST Instruction 6/2025), Section 37(1) Explanation 1 + 3 freebies disallowance per Apex Laboratories SC 2022, ICDS-II inventory valuation, multi-state stock transfer reconciliation under Schedule I CGST, CDSCO Form 25 / Form 28 licence fee classification, Section 44AB tax audit support, and Form 3CEB transfer pricing for cross-border pharma.",
          "provider": {"@id": "https://www.patronaccounting.com/#organization"},
          "serviceType": "Income Tax Return Filing for Pharmaceutical Manufacturers, Traders, and Chemists",
          "category": "Direct Tax Compliance",
          "areaServed": [
            {"@type": "Country", "name": "India"},
            {"@type": "City", "name": "Pune"},
            {"@type": "City", "name": "Mumbai"},
            {"@type": "City", "name": "Delhi"},
            {"@type": "City", "name": "Gurugram"}
          ],
          "audience": {"@type": "Audience", "audienceType": "Pharmaceutical manufacturers including formulation makers, API suppliers, OTC and FMCG pharma; pharma traders and wholesalers; retail chemist chains; HUF medical stores; pharma R and D societies and trusts; contract research organisations (CROs); SEZ pharma units claiming Section 10AA deduction; pharma exporters relying on duty drawback or advance authorisation (RoDTEP largely excluded for pharma); cross-border pharma with overseas affiliates and Section 92E transfer pricing exposure (royalty, contract manufacturing, API supply, R and D services). Coverage spans proprietorship, partnership firm, LLP, private limited, and listed entities. Specialised handling of Section 35(2AB) R and D weighted deduction with Form 3CL alignment, Section 54(3) inverted duty refund coordination, Section 37(1) freebies firewall after Apex Laboratories SC 2022, multi-state Schedule I CGST stock transfers, CDSCO Form 25 / Form 28 licence fee classification, and ICDS-II inventory valuation"},
          "about": [
            {"@type": "Thing", "name": "Pharmaceutical industry in India", "sameAs": "https://en.wikipedia.org/wiki/Pharmaceutical_industry_in_India"},
            {"@type": "Thing", "name": "Income tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"},
            {"@type": "Thing", "name": "Goods and Services Tax (India)", "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)"}
          ],
          "termsOfService": "/terms-and-conditions/",
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ITR for Pharma Businesses Pricing",
            "itemListElement": [
              {"@type": "Offer", "name": "Chemist / Proprietor Section 44AD Presumptive", "price": "7500", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-pharma-businesses", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Pharma Trader Regular Books Non-Audit", "price": "12500", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-pharma-businesses", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Pharma Trader / Firm Audit Case", "price": "25000", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-pharma-businesses", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Pvt Ltd Pharma Manufacturer with R and D + IDS Refund", "price": "75000", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-pharma-businesses", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Section 35(2AB) R and D Claim Structuring", "price": "19999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-pharma-businesses", "availability": "https://schema.org/InStock"}
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
    ['name' => 'ITR for Pharma Businesses', 'url' => '/itr-for-pharma-businesses'],
]])
</div>

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
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot — Plan 3.2 */
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
                        ITR Filing for Pharma Manufacturers, Traders, and Chemists in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">8 May 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, DSC, GST registration certificate, GSTR-1, GSTR-3B, GSTR-9, CDSCO drug licence (Form 25 / Form 28), stock register, batch records, Form 3CL DSIR R and D approval, Form 26AS / AIS / TIS.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 7,500 (Excl. GST and Govt. Charges) for chemist Section 44AD presumptive. Rs 12,500 for pharma trader regular books. Rs 25,000 for audit case. Rs 75,000 for Pvt Ltd manufacturer with R and D and IDS refund.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Proprietor chemist, pharma trader, partnership firm, LLP, private limited, listed pharma manufacturer, pharma R and D society / trust, HUF medical store, OTC and FMCG pharma, API and formulation makers, exporters and SEZ pharma units.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 3 to 8 working days for non-audit cases; 12 to 35 days for audit, R and D, IDS refund, and transfer pricing cases. Tax audit due 30 September 2026; ITR audit case 31 October 2026; Form 3CEB TP case 30 November 2026.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50+ Pharma Engagements</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Pharma%20Businesses%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20filing%20services%20for%20my%20pharma%20business%20%28R%20and%20D%2C%20IDS%20refund%2C%20CDSCO%29%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITR%20filing%20for%20my%20pharma%20business%20%28Section%2035%282AB%29%20R%20and%20D%2C%20inverted%20duty%20refund%2C%20CDSCO%29." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - ITR for Pharma Businesses',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'itr-for-pharma-businesses', 'label' => 'ITR for Pharma Businesses (current)', 'selected' => true, 'disabled' => false],
                            ['value' => 'income-tax-return', 'label' => 'Income Tax Return (overview)', 'selected' => false, 'disabled' => false],
                            ['value' => 'itr-for-business', 'label' => 'ITR for Business', 'selected' => false, 'disabled' => false],
                            ['value' => 'itr-for-companies', 'label' => 'ITR for Companies', 'selected' => false, 'disabled' => false],
                            ['value' => 'tax-audit', 'label' => 'Tax Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-refund', 'label' => 'GST Refund (Inverted Duty)', 'selected' => false, 'disabled' => false],
                            ['value' => 'stock-audit', 'label' => 'Stock Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'tax-planning-services', 'label' => 'Tax Planning', 'selected' => false, 'disabled' => false],
                            ['value' => 'other', 'label' => 'Other', 'selected' => false, 'disabled' => false],
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
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron recovered Rs 1.42 crore in inverted duty refund within 90 days using their RFD-01 + Statement 1A workflow under the new 90 percent provisional refund regime. Combined with a defensible Section 35(2AB) R and D claim aligned to our DSIR Form 3CL, they saved Rs 78 lakh in disallowance risk at scrutiny.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Suresh P</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Formulations Manufacturer Pvt Ltd, Pune</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Extremely great, knowledgeable person who deserves 5 stars for smooth and quick ITR filing. They handled our multi-state pharma operations across five GSTINs without any reconciliation errors at audit, and got our Section 35(2AB) R and D claim defended cleanly against the Alembic cap rule.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">API Supplier, Pune</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. And it's not expensive at all. Patron carved out our bona fide consultancy fees from prohibited freebies under Section 37(1) Explanation 3 - saved us from a 100 percent disallowance of Rs 24 lakh that our previous CA had wrongly clubbed together.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">OTC Pharma Brand, Mumbai</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Multi-state stock transfer reconciliation was a nightmare for us - Pune factory, Delhi depot, Mumbai depot, Bengaluru depot, Chennai depot. Patron built one consolidated PAN-level Schedule BP linking each branch GSTIN with e-way bill audit. Schedule BP finally tied with GSTR-9 across all states.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Vinay K</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Multi-State Pharma Pvt Ltd, Delhi</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Cross-border CRO with overseas affiliates. Patron handled our Form 3CEB transfer pricing with Rule 10D documentation - royalty payments, contract manufacturing for the Boston parent, and R and D services benchmarking. ITR-6 + Form 3CEB filed by 30 November 2026 deadline. Clean audit.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PG</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya G</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Contract Research Organisation, Gurugram</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 months ago</div>
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
                    <p>Join 50+ pharma manufacturing and trading firms who file their ITR with Patron each year - formulation makers, API suppliers, OTC and FMCG pharma, contract research organisations, chemist chains, and SEZ pharma units across India.</p>
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
                <a href="#what-section" class="toc-btn">What Is</a>
                <a href="#who-section" class="toc-btn">Who Needs</a>
                <a href="#services-section" class="toc-btn">Services</a>
                <a href="#procedure-section" class="toc-btn">8-Step Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Challenges</a>
                <a href="#fees-section" class="toc-btn">Fees</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Benefits</a>
                <a href="#comparison-section" class="toc-btn">Comparison</a>
                <a href="#related-section" class="toc-btn">Related</a>
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
            <h2 class="section-title">Pharma Business ITR - Section 35(2AB) R and D, Section 54(3) Inverted Duty Refund, and Section 37(1) Freebies Disallowance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Pharma Businesses Services at a Glance</strong></p>
                    <p><strong>TL;DR:</strong> Pharma businesses file ITR-3 (proprietor), ITR-5 (LLP/firm), or ITR-6 (Pvt Ltd / listed). Tax audit applies above Rs 1 crore turnover (Rs 10 crore if 95 percent non-cash). R and D weighted deduction under Section 35(2AB) is now 100 percent (post 1 April 2020) capped at the DSIR-approved amount in Form 3CL. Freebies to doctors are fully disallowed under Apex Laboratories SC 2022. Audit-case ITR due 31 October 2026.
                    <div class="table-responsive-wrapper" style="margin-top:20px;">
                        <table>
                            <thead>
                                <tr>
                                    <th>Parameter</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Governing Acts</td><td>Income-tax Act 1961 (Sec 35(2AB), 37(1) Expl 1+3, 44AB, 44AD, 139(1), 234A/B/C, 234F, 271B); CGST Act 2017 (Sec 54(3) inverted duty refund, Schedule I deemed supply); Drugs and Cosmetics Act 1940 (CDSCO licensing); ICDS-II Inventories</td></tr>
                                <tr><td>Applicable To</td><td>Pharma manufacturers, traders, chemists, OTC and FMCG pharma, API and formulation makers, exporters, SEZ units, R and D societies, HUF medical stores, Pvt Ltd and listed pharma companies</td></tr>
                                <tr><td>Section 35(2AB) R and D Deduction</td><td>100 percent weighted deduction on in-house R and D expenditure (DSIR-approved facility) post 1 April 2020 - phased from 200% to 150% to 100% per Finance Act 2016. Capped at Form 3CL amount per Alembic Pharmaceuticals ITAT Ahmedabad March 2026</td></tr>
                                <tr><td>Section 54(3) CGST Inverted Duty Refund</td><td>API at 18% input GST vs 5% output GST on finished medicines creates accumulated ITC. RFD-01 under Rule 89(5). 90 percent provisional refund effective 1 October 2025 per CGST Instruction 6/2025</td></tr>
                                <tr><td>Section 37(1) Freebies Disallowance</td><td>100 percent disallowance of doctor freebies, gifts, hospitality, gold coins, electronics, sponsored travel per Apex Laboratories vs DCIT SC 2022 + Section 37(1) Explanation 3 inserted by Finance Act 2022. Bona fide consultancy with deliverables still allowed</td></tr>
                                <tr><td>Tax Audit Threshold</td><td>Rs 1 crore turnover (Rs 10 crore if 95 percent receipts and payments non-cash). Form 3CA-3CD or 3CB-3CD due 30 September 2026. Section 271B penalty 0.5 percent of turnover or Rs 1.5 lakh whichever lower</td></tr>
                                <tr><td>Cost</td><td>Starting Rs 7,500 (Excl. GST and Govt. Charges)</td></tr>
                                <tr><td>Form / Portal</td><td>ITR-3 / ITR-5 / ITR-6 / ITR-7 on incometax.gov.in; Form 3CD audit; Form 3CK + 3CL DSIR R and D; Form 3CLA quantification; RFD-01 GST refund; Form 3CEB transfer pricing</td></tr>
                                <tr><td>Authority</td><td>CBDT (Income-tax Act); CBIC (GST); CDSCO (drug licensing under Drugs and Cosmetics Act 1940); DSIR (R and D approval); DGFT (foreign trade policy)</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p style="font-size:12px;color:var(--text-muted);margin-top:8px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
</p>
                </div>
                <p>Pharma businesses in India sit at the crossroads of three regulators: CBDT for income tax, CBIC for GST, and CDSCO for drug licensing under the Drugs and Cosmetics Act 1940. Filing an income tax return for a pharma manufacturer, trader, or chemist therefore is not a one-form exercise. ITR form selection, R and D weighted deduction under Section 35(2AB), GST inverted duty refund coordination under Section 54(3) of the CGST Act 2017, and the disallowance of doctor freebies under Section 37(1) Explanation 1 (Apex Laboratories Supreme Court ruling 2022 read with Explanation 3 inserted by Finance Act 2022) all interact in the same return.</p>
                <p>API inputs commonly attract 18 percent GST while finished medicines attract 5 percent - creating accumulated ITC refundable under Section 54(3). Multi-state stock transfers between factory and depot are deemed supplies under Schedule I CGST Act with separate state GSTINs feeding into one PAN-level Schedule BP. Pharma exporters are largely excluded from RoDTEP and rely on duty drawback or Section 10AA SEZ benefits. ICDS-II governs inventory at lower of cost or NRV using FIFO or weighted average (LIFO not permitted). Patron Accounting handles the full pharma stack across Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is ITR Filing for Pharma Business</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p><strong>ITR for pharma business is the annual income tax return filed by pharmaceutical manufacturers, traders, chemists, and listed companies under Section 139(1) of the Income-tax Act 1961, after computing income subject to ICDS-II inventory valuation and pharma-specific deductions and disallowances - including Section 35(2AB) R and D weighted deduction, Section 37(1) Explanation 1 freebies disallowance per Apex Laboratories SC 2022, and Section 54(3) CGST inverted duty refund coordination.</strong></p>
                    <p>The return reports income from manufacturing activities classified under business code 04001 (Manufacture of pharmaceutical formulations) or 04003 (Wholesale and retail trade in medicines) on the e-filing portal. It must reconcile with GST returns (GSTR-1, GSTR-3B, GSTR-9), CDSCO licence records, and stock registers maintained under Form 25 / Form 28 of the Drugs and Cosmetics Rules 1945. For pharma exporters, drawback under Section 75 of the Customs Act 1962, RoDTEP applicability (largely excluded for pharma), and Section 10AA SEZ benefits also feed in.</p>
                    <p>Multi-state pharma operations face a unique challenge: branch-to-branch and depot stock transfers are treated as supplies under Schedule I of the CGST Act 2017 despite no consideration. ITC from each state GSTIN must consolidate at PAN level into one Schedule BP. The Apex Laboratories Pvt Ltd vs DCIT (Supreme Court 2022) ruling, combined with Section 37(1) Explanation 3 inserted by the Finance Act 2022, fully disallows freebies, gifts, hospitality, gold coins, LCD TVs, laptops, and sponsored conferences provided to doctors in violation of the Indian Medical Council Regulations 2002.</p>

                <div style="margin-top:32px;">
                    <h3 style="font-size:1.4rem;margin-bottom:16px;">Key Terms in Pharma Business ITR</h3>
                    <p><strong>Section 35(2AB) Weighted R and D Deduction:</strong> 100 percent weighted deduction on revenue and capital expenditure (excluding land and building) incurred at an in-house R and D facility approved by DSIR for pharma, biotech, drugs, chemicals. Rate phased from 200 percent to 150 percent (1 April 2017 to 31 March 2020) to 100 percent thereafter per Finance Act 2016. Claim capped at Form 3CL DSIR-approved amount.</p>
                    <p><strong>DSIR Approval (Form 3CK / 3CL / 3CLA):</strong> Department of Scientific and Industrial Research approval for in-house R and D facility under Section 35(2AB). Form 3CK is the application; Form 3CL is the annual approval certificate; Form 3CLA is the chartered accountant's quantification of R and D expenditure filed annually.</p>
                    <p><strong>Section 54(3) CGST Inverted Duty Refund:</strong> Refund of unutilised ITC where the rate of tax on inputs is higher than on outputs (other than nil-rated or fully exempt supplies). API attracts 18 percent GST; finished medicines often attract 5 percent. RFD-01 under Rule 89(5) CGST Rules 2017 (amended by Notification 14/2022). 90 percent provisional refund for applications filed on or after 1 October 2025 per CGST Instruction 6/2025 dated 3 October 2025.</p>
                    <p><strong>Section 37(1) Explanation 1 and Explanation 3:</strong> Disallowance of expenditure prohibited by law. Explanation 3 (inserted by Finance Act 2022) extends to any benefit or perquisite the acceptance of which is in violation of any law. Apex Laboratories Pvt Ltd vs DCIT (Supreme Court 2022) covers freebies to doctors prohibited under Indian Medical Council Regulations 2002.</p>
                    <p><strong>CDSCO (Central Drugs Standard Control Organisation):</strong> Central regulator for drug manufacturing, import, and export licensing under the Drugs and Cosmetics Act 1940. Form 25 (manufacture of drugs not specified in Schedule C and C1), Form 28 (manufacture of drugs in Schedule C and C1), Form 41 (import licence), Certificate of Pharmaceutical Product (COPP) for export. Licence fees deductible under Section 37(1).</p>
                    <p><strong>ICDS-II Inventories:</strong> CBDT Notification 87/2016 dated 29 September 2016. Inventory at lower of cost or net realisable value (NRV) using FIFO or weighted average cost. LIFO not permitted. Cost includes purchase price, freight inwards, customs and CVD; excludes interest on borrowings unless capitalised under ICDS-IX. Slow-moving and near-expiry stock must be written down item by item.</p>
                    <p><strong>Apex Laboratories Doctrine:</strong> Apex Laboratories Pvt Ltd vs DCIT (Supreme Court 2022) - sales promotion expenditure including hospitality, conference fees, gold coins, electronics, sponsored travel to medical practitioners is disallowed under Section 37(1) Explanation 1. Bona fide consultancy fees with proper deliverables are still allowed.</p>
                    <p><strong>RoDTEP (Remission of Duties and Taxes on Exported Products):</strong> Foreign Trade Policy scheme to refund embedded central, state, and local duties on exported products. Most pharmaceutical products are currently EXCLUDED from RoDTEP per DGFT public notices and ICEGATE rate schedule. Pharma exporters rely on duty drawback under Section 75 of the Customs Act 1962, advance authorisation, EOU benefits, or Section 10AA SEZ deduction instead.</p>
                </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Pharma Businesses:</strong></p>
                    

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Pharma Businesses</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Filed by</span>
                        <strong>CA Team</strong>
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
            <h2 class="section-title">Who Should File - Entity-to-Form Mapping and Tax Audit Threshold</h2>
            <div class="content-text">
                
                
                <p>Every pharma entity earning income in India must file an ITR. The form depends on entity structure and the audit requirement depends on turnover and payment mode mix.</p>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Entity Type</th>
                                <th>ITR Form</th>
                                <th>Section 44AD Eligible?</th>
                                <th>Tax Audit Threshold</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Proprietor pharma trader / chemist</td><td>ITR-3 (regular books) or ITR-4 (Sec 44AD presumptive)</td><td>YES (Resident Individual; Rs 2 cr / Rs 3 cr digital)</td><td>Rs 1 cr / Rs 10 cr (95% non-cash)</td></tr>
                            <tr><td>HUF running medical store</td><td>ITR-3 (HUF eligible for Sec 44AD only, NOT 44ADA)</td><td>YES (Resident HUF; Rs 2 cr / Rs 3 cr digital)</td><td>Rs 1 cr / Rs 10 cr (95% non-cash)</td></tr>
                            <tr><td>Partnership firm pharma manufacturer / trader</td><td>ITR-5</td><td>YES (Resident Firm; Rs 2 cr / Rs 3 cr digital)</td><td>Rs 1 cr / Rs 10 cr (95% non-cash)</td></tr>
                            <tr><td>LLP pharma manufacturer / trader</td><td>ITR-5</td><td>NO - LLP explicitly excluded</td><td>Rs 1 cr / Rs 10 cr (95% non-cash)</td></tr>
                            <tr><td>Private limited or listed pharma company</td><td>ITR-6</td><td>NO - companies excluded</td><td>Rs 1 cr / Rs 10 cr (95% non-cash)</td></tr>
                            <tr><td>Pharma R and D society or trust</td><td>ITR-7</td><td>NO - trust filing</td><td>As per Section 12A / 80G compliance</td></tr>
                            <tr><td>Cross-border pharma with overseas affiliate</td><td>ITR-6 + Form 3CEB</td><td>NO - companies excluded</td><td>Rs 1 cr / Rs 10 cr; Sec 92E TP filing always</td></tr>
                        </tbody>
                    </table>
                </div>
                <p style="margin-top:20px;"><strong>Tax Audit under Section 44AB:</strong></p>
                <ul>
                    <li>Pharma manufacturer / trader: <strong>Rs 1 crore turnover</strong>; <strong>Rs 10 crore</strong> if cash receipts and cash payments are each below 5 percent (most institutional pharma sales qualify)</li>
                    <li>Presumptive scheme defaulter: audit if income shown below 8 percent (cash) / 6 percent (digital) deemed profit and total income exceeds basic exemption</li>
                    <li>Tax audit report Form 3CA-3CD or 3CB-3CD due <strong>30 September 2026</strong></li>
                    <li>Section 271B penalty: 0.5 percent of turnover or Rs 1,50,000 (whichever lower) for tax audit default</li>
                </ul>
                <p style="margin-top:20px;"><strong>Statutory Deadlines AY 2026-27 (FY 2025-26):</strong></p>
                <ul>
                    <li><strong>31 August 2026</strong> - non-audit ITR-3 / ITR-4 (extended from 31 July 2026)</li>
                    <li><strong>30 September 2026</strong> - Tax Audit Report Form 3CD under Section 44AB</li>
                    <li><strong>31 October 2026</strong> - audit-case ITR-3 / ITR-5 / ITR-6</li>
                    <li><strong>30 November 2026</strong> - Form 3CEB transfer pricing case under Section 92E (cross-border related party - common for global pharma majors with royalty, contract manufacturing, API supply)</li>
                    <li><strong>31 December 2026</strong> - belated/revised return Section 139(4)/(5) with Section 234F fee</li>
                    <li><strong>15 March 2026</strong> - 100 percent advance tax for Section 44AD presumptive (single instalment); quarterly for non-presumptive (15 percent, 45 percent, 75 percent, 100 percent cumulative)</li>
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
            <h2 class="section-title">Patron Accounting Services for Pharma Business ITR</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                            <tr><td>End-to-End ITR Filing</td><td>CA-led preparation of ITR-3, ITR-5, or ITR-6 with Schedule BP, Schedule DPM (depreciation under Section 32), Schedule CG (capital gains on demerger / merger), and reconciliation with GSTR-9, Form 26AS, AIS, and TIS. Pharma-specific business code (04001 / 04003) and audit annexures.</td></tr>
                            <tr><td>Section 35(2AB) R and D Weighted Deduction Structuring</td><td>Form 3CK application to DSIR for in-house R and D facility approval. Documentation of revenue and capital expenditure (excluding land and building). Form 3CLA chartered accountant quantification. Weighted deduction claim alignment with the DSIR Form 3CL approval letter. Defensible against Alembic Pharmaceuticals (ITAT Ahmedabad March 2026) cap rule.</td></tr>
                            <tr><td>Section 54(3) Inverted Duty GST Refund Coordination</td><td>RFD-01 filing under Section 54(3) of the CGST Act 2017 read with Rule 89(5). Statement 1 and 1A computation. 90 percent provisional refund tracking under CGST Instruction 6/2025 dated 3 October 2025 (effective 1 October 2025). Response to deficiency memos. Input service ITC limitation per Union of India vs VKC Footsteps SC 2021 navigated.</td></tr>
                            <tr><td>CDSCO and Licence Fee Classification</td><td>Treatment of CDSCO licence fee, Form 25 / Form 28 manufacturing licence renewal cost, Form 41 import licence, Certificate of Pharmaceutical Product (COPP) application fee, GMP audit fee, and clinical trial regulatory expenses as revenue under Section 37(1) or capital under Section 35. Schedule BP / P&L feed.</td></tr>
                            <tr><td>Multi-State Stock Transfer Reconciliation</td><td>Branch-to-branch and depot stock transfer (treated as supply under Schedule I CGST Act despite no consideration) reconciled with e-way bill audit. ITC mapping across state GSTINs feeding into one consolidated PAN-level Schedule BP. Each branch GSTIN linked to one ITR.</td></tr>
                            <tr><td>Section 37(1) Freebies Firewall</td><td>Classification of expenditure into bona fide professional engagement (consultancy fees with deliverables, contract research, advisory) versus prohibited freebies (hospitality, conference fees, gold coins, electronics, sponsored travel). Apex Laboratories SC 2022 + Explanation 3 (Finance Act 2022) defended at scrutiny. Documentation at source.</td></tr>
                            <tr><td>Tax Audit and Form 3CD Pharma Specifics</td><td>Form 3CA-3CD or 3CB-3CD audit. Clause 13 (method of accounting), Clause 14 (inventory ICDS-II), Clause 18 (depreciation Section 32), Clause 21 (Section 269ST cash, Section 40A(3)), Clause 26 (Section 43B statutory dues), Clause 27 (CENVAT / ITC reconciliation - critical for pharma IDS), Clause 30 (Section 269SS / 269T loans), Clause 31 (Section 35(2AB) R and D detail), Clause 34 (TDS verification).</td></tr>
                            <tr><td>Cross-Border Pharma Transfer Pricing</td><td>Form 3CEB transfer pricing report under Section 92E for cross-border related party transactions - royalty payments to overseas parent, contract manufacturing for affiliate, API supply, cost-sharing arrangements, R and D services. Arm's length benchmarking per Rule 10D. ITR by 30 November 2026.</td></tr>


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
            <h2 class="section-title">How Patron Files Your Pharma Business ITR</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">An eight-step engagement that confirms entity and ITR form, reconciles books with GSTR-9 and stock register, computes Section 35(2AB) R and D weighted deduction (capped at Form 3CL DSIR approval), disallows Section 37(1) freebies, coordinates Section 54(3) inverted duty GST refund, runs Section 44AB tax audit where applicable, pays self-assessment and validates advance tax, and uploads ITR with e-verification.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Identify Entity Type and Select Correct ITR Form</h3>
                        <p class="step-description">Pharma manufacturer Pvt Ltd files ITR-6 (no Sec 44AD); LLP files ITR-5 (no Sec 44AD); proprietor pharma trader / chemist files ITR-3 with regular books or ITR-4 if opting for Section 44AD presumptive (Rs 2 cr / Rs 3 cr digital limit). Partnership firm files ITR-5. HUF medical store files ITR-3 (HUF eligible for Sec 44AD only, NOT Sec 44ADA). Pharma R and D society / trust files ITR-7. Cross-border pharma with overseas affiliate files ITR-6 with Form 3CEB.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Entity-form mapping</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sec 44AD eligibility</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <line x1="30" y1="22" x2="90" y2="22" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/>
                                    <line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="30" y1="50" x2="70" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                                    <circle cx="95" cy="60" r="10" fill="#10B981" opacity="0.2"/>
                                    <path d="M90 60l3 3 6-6" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Form Selected</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">Reconcile Books with GSTR-9 and CDSCO Stock Register</h3>
                        <p class="step-description">Match outward supplies to revenue, ITC ledger to GST Schedule of ITR, and physical stock to ICDS-II valuation under FIFO or weighted average (LIFO not permitted). Reconcile CDSCO stock register under Form 25 / Form 28 of Drugs and Cosmetics Rules 1945 with books and GSTR-9. Pre and post 1 October 2025 split for inverted duty refund applications (90 percent provisional regime kicks in). Slow-moving and near-expiry stock written down to NRV item by item.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ICDS-II FIFO / Weighted Avg</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 25/28 reconciliation</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="20" width="42" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="31" y="40" text-anchor="middle" font-size="10" font-weight="700" fill="#14365F">GSTR-9</text>
                                    <text x="31" y="56" text-anchor="middle" font-size="9" fill="#14365F">Turnover</text>
                                    <path d="M55 50h12" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                                    <rect x="68" y="20" width="42" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="89" y="40" text-anchor="middle" font-size="10" font-weight="700" fill="#14365F">Form 25/28</text>
                                    <text x="89" y="56" text-anchor="middle" font-size="9" fill="#14365F">Stock Reg</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Reconciled</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Compute Section 35(2AB) R and D Weighted Deduction</h3>
                        <p class="step-description">Claim Section 35(2AB) weighted deduction at 100 percent (Finance Act 2016 phased the rate from 200 percent to 150 percent to 100 percent effective 1 April 2020) ONLY up to the DSIR-approved amount in Form 3CL - per Alembic Pharmaceuticals ITAT Ahmedabad March 2026 cap rule. Form 3CK application for new in-house R and D facility approval. Form 3CLA chartered accountant quantification of revenue and capital expenditure (excluding land and building). Document the revenue versus capital split.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>100% post 1 Apr 2020</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Capped at Form 3CL</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="15" width="80" height="60" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/>
                                    <text x="60" y="34" text-anchor="middle" font-size="11" font-weight="700" fill="#14365F">Sec 35(2AB)</text>
                                    <text x="60" y="50" text-anchor="middle" font-size="14" font-weight="800" fill="#E8712C">100%</text>
                                    <text x="60" y="64" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">DSIR Form 3CL</text>
                                </svg>
                            </div>
                            <span class="illustration-label">R&amp;D Claimed</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">Disallow Section 37(1) Freebies and Document Bona Fide Consultancy</h3>
                        <p class="step-description">Reverse freebies to doctors, hospitality, gold coins, LCD TVs, laptops, sponsored conferences, sponsored travel under Section 37(1) Explanation 1 (Apex Laboratories vs DCIT Supreme Court 2022) read with Explanation 3 inserted by the Finance Act 2022. Carve out bona fide consultancy fees with proper deliverables (advisory, contract research, training) - these remain allowed. Classify each expense head at source with documentation pack for scrutiny defence.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Apex Labs SC 2022</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bona fide carve-out</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="20" width="42" height="55" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="31" y="38" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Freebies</text>
                                    <text x="31" y="54" text-anchor="middle" font-size="10" font-weight="800" fill="#E8712C">DISALLOW</text>
                                    <rect x="68" y="20" width="42" height="55" rx="4" fill="#F0F4F8" stroke="#10B981" stroke-width="1.5"/>
                                    <text x="89" y="38" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Consult</text>
                                    <text x="89" y="54" text-anchor="middle" font-size="10" font-weight="800" fill="#10B981">ALLOW</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Firewall Built</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">Coordinate Section 54(3) Inverted Duty GST Refund</h3>
                        <p class="step-description">File RFD-01 on the GST portal under Section 54(3) of the CGST Act 2017 read with Rule 89(5) CGST Rules 2017 (amended by Notification 14/2022 dated 5 July 2022). 90 percent provisional refund available for applications filed on or after 1 October 2025 per CGST Instruction 6/2025 dated 3 October 2025. Statement 1 and 1A computation. Input service ITC excluded per Union of India vs VKC Footsteps SC 2021. Track ARN, respond to deficiency memos.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>90% provisional refund</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 89(5) formula</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="20" width="40" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="30" y="40" text-anchor="middle" font-size="10" font-weight="700" fill="#14365F">API In</text>
                                    <text x="30" y="58" text-anchor="middle" font-size="13" font-weight="800" fill="#E8712C">18%</text>
                                    <path d="M53 50h14" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                                    <rect x="70" y="20" width="40" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="90" y="40" text-anchor="middle" font-size="10" font-weight="700" fill="#14365F">Med Out</text>
                                    <text x="90" y="58" text-anchor="middle" font-size="13" font-weight="800" fill="#10B981">5%</text>
                                </svg>
                            </div>
                            <span class="illustration-label">IDS Refund</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">Reconcile Multi-State Stock Transfers and CDSCO Licence Costs</h3>
                        <p class="step-description">Branch-to-branch and depot stock transfers (e.g. Pune factory to Delhi depot) treated as supply under Schedule I of the CGST Act 2017 despite no consideration. Match each state GSTIN's outward / inward stock transfer with e-way bill and ITC. Consolidate at PAN level into one Schedule BP. Treat CDSCO Form 25 / Form 28 manufacturing licence renewal, COPP application fee, GMP audit fee, and clinical trial regulatory fees as revenue under Section 37(1) - they are wholly and exclusively for the business and not prohibited by law.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule I deemed supply</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CDSCO fees Sec 37(1)</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="15" width="100" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="35" text-anchor="middle" font-size="11" font-weight="800" fill="#14365F">Multi-State</text>
                                    <text x="60" y="50" text-anchor="middle" font-size="9" fill="#14365F">Branch GSTINs</text>
                                    <text x="60" y="65" text-anchor="middle" font-size="9" font-weight="700" fill="#E8712C">PAN-level Sched BP</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Stock Mapped</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">Run Section 44AB Tax Audit and Form 3CD</h3>
                        <p class="step-description">Run tax audit if turnover exceeds Rs 1 crore (Rs 10 crore if 95 percent receipts and payments are non-cash) under Section 44AB. File Form 3CA-3CD (where also audited under another law) or Form 3CB-3CD by 30 September 2026. Pharma-specific clause focus: Clause 14 (ICDS-II inventory), Clause 21 (Section 269ST cash, Section 40A(3)), Clause 26 (Section 43B GST / PF / ESI / gratuity), Clause 27 (CENVAT / ITC reconciliation - critical for IDS), Clause 31 (Section 35(2AB) R and D detail). CA UDIN signing.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 3CD by 30 Sep 2026</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pharma clauses 14/27/31</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="10" width="80" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="32" text-anchor="middle" font-size="13" font-weight="800" fill="#14365F">Form 3CD</text>
                                    <line x1="30" y1="42" x2="90" y2="42" stroke="#E8712C" stroke-width="2"/>
                                    <text x="60" y="55" text-anchor="middle" font-size="9" font-weight="600" fill="#14365F">Clause 14 ICDS-II</text>
                                    <text x="60" y="67" text-anchor="middle" font-size="9" font-weight="600" fill="#14365F">Clause 27 CENVAT</text>
                                    <text x="60" y="79" text-anchor="middle" font-size="9" font-weight="600" fill="#14365F">Clause 31 R&amp;D</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Audit Done</span>
                            <span class="step-number-large">07</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 8</span>
                        <h3 class="step-title">Pay Self-Assessment Tax, Upload ITR, and e-Verify</h3>
                        <p class="step-description">Pay self-assessment tax under Section 140A and validate advance tax instalments (15 percent by 15 June, 45 percent by 15 September, 75 percent by 15 December, 100 percent by 15 March; Section 234B/234C interest at 1 percent per month for shortfall). Upload ITR JSON on incometax.gov.in, e-verify within 30 days via Aadhaar OTP / DSC / EVC, and download ITR-V acknowledgement. Track refund / demand. Respond to Section 143(1) intimation, Section 142(1) scrutiny, Section 139(9) defective return within 15 days.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>e-Verify within 30 days</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR-V downloaded</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#10B981" stroke-width="2"/>
                                    <path d="M40 50l12 12 28 -28" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">ITR Filed</span>
                            <span class="step-number-large">08</span>
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
            <h2 class="section-title">Document Checklist for Pharma Business ITR</h2>
            <div class="content-text">
                
                
                <p>Pharma business ITR requires documentation across six categories: entity and identity, books of accounts and financial statements, GST and indirect tax, CDSCO and drug regulation, R and D claim under Section 35(2AB), and audit / scrutiny defence.</p>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">A. Entity and Identity</h3>
                <ul>
                    <li>PAN of entity (proprietor / firm / LLP / company / HUF / society) and PAN of partners / directors / Karta (Aadhaar linked)</li>
                    <li>Aadhaar of authorised signatory; DSC (Class 3) where ITR-5 / ITR-6 e-filing requires</li>
                    <li>GST registration certificate(s) - every state where pharma manufacturing, depot, or branch operates</li>
                    <li>MCA LLPIN / CIN for LLP / Pvt Ltd; partnership deed for firm; HUF deed for HUF</li>
                    <li>Trademark / copyright / patent registration if claiming amortisation under Section 32</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">B. Books of Accounts and Financial Statements</h3>
                <ul>
                    <li>Audited Profit and Loss account FY 2025-26 and Balance Sheet as on 31 March 2026 with Notes</li>
                    <li>Trial balance, cash book, bank book, sales register, purchase register, expenses ledger</li>
                    <li>Section 32 depreciation chart with block-of-assets WDV (Plant and Machinery, R and D equipment, Buildings, Computers, Vehicles)</li>
                    <li>Bank statements; secured / unsecured loan ledgers</li>
                    <li>Stock register (Form 25 / Form 28 of Drugs and Cosmetics Rules 1945), batch records, expiry register, near-expiry write-down working</li>
                    <li>ICDS-II item-level cost or NRV valuation working using FIFO or weighted average (LIFO not permitted)</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">C. GST and Indirect Tax</h3>
                <ul>
                    <li>GSTR-1, GSTR-3B, GSTR-9, GSTR-9C for FY 2025-26 (every state GSTIN)</li>
                    <li>RFD-01 inverted duty refund applications and ARNs</li>
                    <li>Statement 1 and 1A computation for Section 54(3) refund under Rule 89(5)</li>
                    <li>E-way bill records for inter-state branch and depot stock transfers</li>
                    <li>TDS and TCS certificates Form 16A / 27D from buyers</li>
                    <li>Form 26AS, AIS, TIS download from incometax.gov.in</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">D. CDSCO and Drug Regulation</h3>
                <ul>
                    <li>CDSCO drug manufacturing licence in Form 25 (drugs not in Schedule C and C1) or Form 28 (drugs in Schedule C and C1) and renewal proof</li>
                    <li>Form 41 import licence (where applicable)</li>
                    <li>Certificate of Pharmaceutical Product (COPP) for export</li>
                    <li>GMP audit reports and clinical trial regulatory approvals</li>
                    <li>Detail of CDSCO licence fee, COPP application fee, GMP audit fee for Section 37(1) classification</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">E. Section 35(2AB) R and D Claim</h3>
                <ul>
                    <li>DSIR Form 3CK application for in-house R and D facility approval</li>
                    <li>DSIR Form 3CL annual approval certificate (cap rule per Alembic Pharmaceuticals ITAT Ahmedabad March 2026)</li>
                    <li>Form 3CLA chartered accountant quantification of revenue and capital expenditure</li>
                    <li>R and D revenue versus capital split working (excluding land and building)</li>
                    <li>Patent / trademark filings with R and D outcome documentation</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">F. Audit, Freebies, and Scrutiny Defence</h3>
                <ul>
                    <li>Tax audit Form 3CA-3CD or 3CB-3CD with all 44 clauses including Clause 14 (ICDS-II), Clause 27 (CENVAT / ITC), Clause 31 (R and D)</li>
                    <li>CA UDIN for audit signing; engagement letter and management representation letter</li>
                    <li>Sales promotion expenditure ledger split between bona fide consultancy (deliverables-backed) and prohibited freebies (Apex Labs SC 2022)</li>
                    <li>Doctor sponsorship, sample supply, conference expense documentation pack</li>
                    <li>Form 3CEB transfer pricing report for cross-border related party transactions (royalty, contract manufacturing, API supply)</li>
                    <li>Export shipping bills, eBRC, RoDTEP scrip details (where applicable - pharma largely excluded), drawback documentation</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Pharma Business ITR Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Excess R and D claim above DSIR Form 3CL approval</td><td>Companies often claim Section 35(2AB) weighted deduction on the entire R and D expenditure booked, but the ITAT Ahmedabad bench in Alembic Pharmaceuticals (March 2026) has held that the claim cannot exceed the DSIR-approved amount in Form 3CL. Patron's solution: pre-file reconciliation between books, Form 3CK application, and Form 3CL approval before locking the claim. Form 3CLA chartered accountant quantification annexed to ITR.</td></tr>
                            <tr><td>Inverted duty refund denial on input services</td><td>Following the Supreme Court ruling in Union of India vs VKC Footsteps (2021), input service ITC is excluded from the IDS refund formula under Rule 89(5). Pharma OTC and FMCG companies face heavy accumulation of advertising and marketing service ITC that is not recoverable. Patron's solution: structure marketing spend across group entities and capture ITC against B2B output supplies that are fully utilised; coordinate Section 54(3) RFD-01 with the 90 percent provisional refund regime under CGST Instruction 6/2025.</td></tr>
                            <tr><td>Freebies disallowance after Apex Laboratories SC 2022</td><td>Sales promotion expenditure including hospitality, conference fees, gold coins, LCD TVs, laptops, sponsored travel to doctors is fully disallowed under Section 37(1) Explanation 1 read with Explanation 3 inserted by Finance Act 2022. Patron's approach: classify expenditure into bona fide professional engagement (consultancy fees with deliverables, contract research, advisory) versus prohibited freebies, and document each category at source. Apex Laboratories vs DCIT (Supreme Court 2022) precedent file ready for CIT(A) / ITAT.</td></tr>
                            <tr><td>Multi-state stock transfer ITR / GST mismatch</td><td>Pharma stock moved from Pune factory to Delhi depot is a 'supply' under Schedule I of the CGST Act despite no consideration. ITC mapping across state GSTINs often fails to feed into the single PAN-level ITR. Patron's solution: a consolidated stock transfer reconciliation file linking each branch GSTIN to the PAN-level Schedule BP. E-way bill audit ensures every inter-state transfer matches both books and GSTR-1.</td></tr>
                            <tr><td>RoDTEP exclusion for pharma exporters</td><td>Most pharmaceutical products are currently excluded from the RoDTEP scheme per DGFT public notices and ICEGATE rate schedule. Pharma exporters relying on RoDTEP miss out on duty refunds. Patron's approach: map each export shipment to the right benefit - duty drawback under Section 75 of the Customs Act 1962, advance authorisation, EOU benefits, or Section 10AA SEZ deduction - before ITR filing. eBRC and shipping bill reconciliation done state-wise.</td></tr>


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
            <h2 class="section-title">Pharma Business ITR Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 7,500 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Chemist / Proprietor (Section 44AD Presumptive)</td><td>Starting from Rs 7,500 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Pharma Trader (Regular Books, No Audit)</td><td>Starting from Rs 12,500 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Pharma Trader / Firm (Audit Case with Form 3CD)</td><td>Starting from Rs 25,000 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Pvt Ltd / Listed Pharma Manufacturer (with R and D + IDS Refund)</td><td>Starting from Rs 75,000 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Group / Multi-State with R and D + Transfer Pricing</td><td>Custom quote (full stack: TP study, R and D, IDS, audit, ITR)</td></tr>
                            <tr><td>Section 44AB Tax Audit Add-on (Form 3CD)</td><td>Starting from Rs 9,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 35(2AB) R and D Claim Structuring (Form 3CK + 3CLA)</td><td>Starting from Rs 19,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 54(3) Inverted Duty Refund Filing (RFD-01)</td><td>Starting from Rs 14,999 per quarter (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Form 3CEB Transfer Pricing Case</td><td>Starting from Rs 24,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 143(1) / 143(2) / 142(1) Notice Response</td><td>Starting from Rs 4,999 (Excl. GST and Govt. Charges)</td></tr>


                    </tbody>
                </table>
                </div>
<p style="font-size:13px;color:var(--text-muted);margin-top:14px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. GST extra at 18%. Pricing varies by entity type, turnover, audit applicability, R and D claim size, number of state GSTINs, and inverted duty refund frequency.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Pharma Businesses consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%20consultation%20on%20Section%2035%282AB%29%20R%20and%20D%2C%20Section%2054%283%29%20inverted%20duty%20refund%2C%20and%20ITR%20for%20my%20pharma%20business." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Engagement Timeline and Statutory Deadlines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Chemist / Proprietor (Sec 44AD Presumptive)</td><td>3-5 working days</td><td>31 August 2026 (non-audit)</td></tr>
                            <tr><td>Pharma Trader / Firm (Non-Audit)</td><td>5-8 working days</td><td>31 August 2026 (non-audit)</td></tr>
                            <tr><td>Audit Case (Form 3CD + ITR + GST Reconciliation)</td><td>12-20 working days</td><td>30 September 2026 (Form 3CD); 31 October 2026 (ITR)</td></tr>
                            <tr><td>Pvt Ltd Manufacturer with R and D + IDS Refund</td><td>25-35 working days</td><td>30 September 2026 (Form 3CD); 31 October 2026 (ITR-6)</td></tr>
                            <tr><td>Group / Multi-State with Transfer Pricing (Form 3CEB)</td><td>30-45 working days</td><td>30 November 2026 (Section 92E case)</td></tr>
                            <tr><td>Section 35(2AB) R and D Claim Structuring (DSIR cycle)</td><td>45-90 working days</td><td>Aligned with DSIR Form 3CL annual approval</td></tr>
                            <tr><td>Section 54(3) Inverted Duty Refund (90% Provisional)</td><td>15-30 working days</td><td>2 years from relevant tax period</td></tr>
                            <tr><td>Section 139(8A) Updated Return</td><td>7-14 working days</td><td>48 months from end of relevant AY</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Statutory deadline buffer:</strong> Patron blocks engagements 30 days before the due date to ensure clean filing. Tax Audit Form 3CD due 30 September 2026 - one month before audit-case ITR. Form 3CEB transfer pricing case ITR due 30 November 2026 - common for global pharma majors with royalty, contract manufacturing, API supply. Section 211 advance tax instalments at 15 June, 15 September, 15 December, and 15 March (15 percent, 45 percent, 75 percent, 100 percent cumulative). Section 234B/234C interest at 1 percent per month for advance tax shortfall. Late filing triggers Section 234F fee (up to Rs 5,000), loss of business loss carry-forward, and Section 271B audit penalty up to Rs 1.5 lakh. Section 35(2AB) R and D claim must align with DSIR Form 3CL for the relevant AY - delayed Form 3CLA filing risks Alembic-style disallowance at scrutiny.

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
            <h2 class="section-title">Benefits of CA-Led Pharma Business ITR Filing</h2>
        </div>
        
                <div class="features-grid">
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
                        <h3 class="feature-title">Defensible R and D Claim</h3>
                        <p class="feature-text">Section 35(2AB) weighted deduction at 100 percent capped at DSIR Form 3CL approved amount. Form 3CK application, Form 3CLA chartered accountant quantification. Alembic Pharmaceuticals ITAT Ahmedabad March 2026 cap rule respected. Defensible at scrutiny.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                        <h3 class="feature-title">Inverted Duty Refund Unlocked</h3>
                        <p class="feature-text">RFD-01 filing under Section 54(3) of CGST Act with Rule 89(5) computation. 90 percent provisional refund tracking under CGST Instruction 6/2025 (effective 1 October 2025). Statement 1 and 1A workings. VKC Footsteps SC 2021 input service exclusion navigated.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                        <h3 class="feature-title">Freebies Firewall</h3>
                        <p class="feature-text">Bona fide consultancy fees with deliverables (advisory, contract research, training) carved out from prohibited promotion expense. Apex Laboratories SC 2022 + Section 37(1) Explanation 3 disallowance averted on bona fide spend. Documentation pack at source.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg></div>
                        <h3 class="feature-title">Multi-State Reconciliation</h3>
                        <p class="feature-text">Branch-to-branch and depot stock transfers (Schedule I CGST deemed supply) consolidated across state GSTINs into one PAN-level Schedule BP. E-way bill audit ensures every inter-state transfer matches books and GSTR-1.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
                        <h3 class="feature-title">CDSCO Licence Fee Classification</h3>
                        <p class="feature-text">Form 25 / Form 28 manufacturing licence renewal, COPP application fee, GMP audit fee, Form 41 import licence, clinical trial regulatory expenses cleanly classified as revenue under Section 37(1). Schedule BP / P&amp;L feed correct.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                        <h3 class="feature-title">Pharma-Aware Tax Audit Form 3CD</h3>
                        <p class="feature-text">Pharma-specific clause focus: Clause 14 (ICDS-II inventory), Clause 21 (Sec 269ST cash), Clause 26 (Sec 43B GST/PF/ESI), Clause 27 (CENVAT / ITC reconciliation), Clause 31 (Sec 35(2AB) R and D detail). Generic CA misses these; Patron does not.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
                        <h3 class="feature-title">Pharma Scrutiny Defence</h3>
                        <p class="feature-text">Pre-filed position paper on R and D Form 3CL alignment, Section 37(1) freebies versus consultancy split, Section 54(3) IDS refund computation, multi-state Schedule BP consolidation. Section 143(2) and Section 142(1) responses ready in advance.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                        <h3 class="feature-title">60+ Hours of Time Saving</h3>
                        <p class="feature-text">Internal reconciliation effort across CDSCO stock register, GSTR-9, multi-state branch GSTINs, R and D documentation, transfer pricing benchmarking, and freebies expense classification absorbed by Patron CAs. You focus on pharma operations - we handle the books.</p>
                    </article>
                </div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust and Track Record</h2>
            <div class="content-text">
                
                
                <p style="margin-bottom:24px;"><strong>10,000+ Businesses Served</strong> | <strong>4.9 Google Rating</strong> | <strong>50,000+ Documents Filed</strong> | <strong>15+ Years Experience</strong> | <strong>50+ Pharma Engagements</strong></p>
                <div class="testimonial-quote" style="background:var(--blue-lighter);border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;margin-bottom:20px;">
                    <p style="font-style:italic;font-size:15px;line-height:1.7;margin-bottom:12px;">"Extremely great, knowledgeable person who deserves 5 stars for smooth and quick ITR filing."</p>
                    <p style="font-size:13px;color:var(--text-muted);margin:0;"><strong>Nishikant Gurav</strong> - Google Review</p>
                </div>
                <div class="testimonial-quote" style="background:var(--blue-lighter);border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;margin-bottom:24px;">
                    <p style="font-style:italic;font-size:15px;line-height:1.7;margin-bottom:12px;">"Took minimum time, really impressive acumen. And it's not expensive at all."</p>
                    <p style="font-size:13px;color:var(--text-muted);margin:0;"><strong>Rajib Dutta</strong> - Google Review</p>
                </div>
                <p style="font-size:14px;color:var(--text-secondary);"><strong>Outcome Proof:</strong> One Pune-based formulations manufacturer recovered Rs 1.42 crore in inverted duty refund within 90 days using Patron's RFD-01 + Statement 1A workflow under the 90 percent provisional refund regime. Combined with a defensible Section 35(2AB) R and D claim aligned to Form 3CL DSIR approval, the engagement saved Rs 78 lakh in disallowance risk at scrutiny.</p>
                <p style="font-size:14px;color:var(--text-secondary);"><strong>Four-Office City Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves pharma businesses across India - 50+ pharma manufacturing and trading firms including formulation makers, API suppliers, OTC and FMCG pharma, contract research organisations, chemist chains, and SEZ pharma units - plus enterprise clients across multiple industries.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY or In-House Junior versus Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                            <tr>
                                <th>Criterion</th>
                                <th>DIY / In-House Junior</th>
                                <th>Patron Accounting</th>
                            </tr>
</thead>
                    <tbody>
                        
                            <tr><td>ITR form selection</td><td>Often misses ITR-6 vs ITR-5 nuance</td><td>CA decides based on entity, turnover, R and D, Section 92E</td></tr>
                            <tr><td>Section 35(2AB) R and D claim</td><td>Claims full booked spend - high disallowance risk</td><td>Capped at DSIR Form 3CL approved amount per Alembic Pharmaceuticals</td></tr>
                            <tr><td>Section 54(3) inverted duty refund</td><td>Often unfiled or rejected at deficiency memo stage</td><td>RFD-01 filed with Rule 89(5) computation; 90% provisional refund tracking</td></tr>
                            <tr><td>Freebies firewall (Section 37(1))</td><td>Sales promo lumped together - 100% addition risk</td><td>Bona fide consultancy with deliverables carved out at source per Apex Labs SC</td></tr>
                            <tr><td>Tax audit Form 3CD</td><td>Generic CA, not pharma-aware</td><td>Pharma-specific Clause 14 / 21 / 26 / 27 / 31 entries</td></tr>
                            <tr><td>Multi-state stock transfer</td><td>Branch ITC orphaned - Schedule BP mismatch</td><td>Consolidated PAN-level Schedule BP across state GSTINs</td></tr>
                            <tr><td>CDSCO licence fee</td><td>Often misclassified as capital - depreciation drag</td><td>Revenue under Section 37(1) - fully deductible in year of incurrence</td></tr>
                            <tr><td>RoDTEP for exporters</td><td>Often claimed despite pharma exclusion - notice risk</td><td>Mapped to drawback / advance authorisation / SEZ Section 10AA</td></tr>
                            <tr><td>Cross-border transfer pricing</td><td>Form 3CEB skipped or filed late</td><td>Section 92E filing by 30 November with Rule 10D documentation</td></tr>
                            <tr><td>Scrutiny defence</td><td>Reactive, no pre-filed memo</td><td>Pre-filed position paper on R and D, IDS, freebies, multi-state</td></tr>


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
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                
                <p>Pharma business filers often need adjacent compliance, audit, and refund work. We bundle the following services with Pharma Business ITR engagements:</p>
                <ul>
                    <li><a href="/income-tax-return">Income Tax Return (general overview)</a> - end-to-end ITR filing across all heads of income</li>
                    <li><a href="/itr-for-business">ITR for Business</a> - sole proprietorship, partnership firm, LLP, HUF, and AOP/BOI ITR filing</li>
                    <li><a href="/itr-for-companies">ITR for Companies</a> - Pvt Ltd / OPC / Public Ltd via ITR-6 with concessional rates</li>
                    <li><a href="/tax-audit">Tax Audit</a> - Form 3CA-3CD or 3CB-3CD audit support under Section 44AB</li>
                    <li><a href="/gst-refund">GST Refund</a> - Section 54(3) inverted duty refund filing under RFD-01 with 90 percent provisional regime</li>
                    <li><a href="/stock-audit">Stock Audit</a> - pharma stock audit aligned with CDSCO Form 25 / Form 28 records and ICDS-II valuation</li>
                    <li><a href="/tax-planning-services">Tax Planning Services</a> - Section 35(2AB) R and D structuring, transfer pricing benchmarking, advance tax planning</li>
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
                
                
                <p><strong>Governing Acts and Sections:</strong></p>
                <ul>
                    <li><strong>Income-tax Act 1961:</strong> Section 28 (PGBP charging); 32 (depreciation); 35 (R and D); 35(2AB) (weighted deduction); 37(1) Explanation 1 and 3 (freebies disallowance); 44AA (books); 44AB (audit); 44AD (presumptive); 92E (transfer pricing); 139(1) (return filing); 234A/B/C (interest); 234F (late fee); 270A (penalty); 271AAB (search); 271B (audit failure)</li>
                    <li><strong>CGST Act 2017:</strong> Section 54(3) (inverted duty refund); Schedule I (deemed supply for branch transfers); Section 9 (charge); Section 16 (ITC eligibility)</li>
                    <li><strong>CGST Rules 2017:</strong> Rule 89(5) (refund formula amended by Notification 14/2022 dated 5 July 2022)</li>
                    <li><strong>CGST Instruction 6/2025</strong> dated 3 October 2025 - 90 percent provisional refund effective 1 October 2025 for inverted duty applications</li>
                    <li><strong>Drugs and Cosmetics Act 1940</strong> read with Drugs and Cosmetics Rules 1945 - CDSCO regulator; Form 25 (manufacture not in Schedule C/C1); Form 28 (manufacture in Schedule C/C1); Form 41 (import); COPP (export)</li>
                    <li><strong>Finance Act 2016</strong> - Section 35(2AB) phased reduction from 200 percent to 150 percent (1 April 2017 to 31 March 2020) to 100 percent (post 1 April 2020)</li>
                    <li><strong>Finance Act 2022</strong> - inserted Section 37(1) Explanation 3 covering benefit/perquisite the acceptance of which is in violation of any law</li>
                    <li><strong>Apex Laboratories Pvt Ltd vs DCIT (Supreme Court 2022)</strong> - freebies to doctors prohibited under Indian Medical Council Regulations 2002 disallowed under Section 37(1)</li>
                    <li><strong>Union of India vs VKC Footsteps (Supreme Court 2021)</strong> - input service ITC excluded from Rule 89(5) refund formula</li>
                    <li><strong>Alembic Pharmaceuticals (ITAT Ahmedabad March 2026)</strong> - Section 35(2AB) claim capped at DSIR Form 3CL approved amount</li>
                    <li><strong>ICDS-II Inventories</strong> (CBDT Notification 87/2016 dated 29 September 2016) - lower of cost or NRV; FIFO or weighted average; LIFO not permitted</li>
                </ul>
                <p><strong>Penalty Provisions:</strong></p>
                <ul>
                    <li><strong>Section 234F</strong> late filing fee: Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh)</li>
                    <li><strong>Section 234A / 234B / 234C</strong> interest: 1 percent per month on tax shortfall and advance tax default</li>
                    <li><strong>Section 271B</strong> tax audit default: 0.5 percent of turnover or Rs 1,50,000 (whichever lower)</li>
                    <li><strong>Section 270A</strong>: 50 percent / 200 percent of tax sought to be evaded for under-reporting / mis-reporting (common at Section 35(2AB) excess claims)</li>
                    <li><strong>Section 271AAB</strong>: 30 percent to 60 percent on undisclosed income discovered in search</li>
                    <li><strong>Section 271(1)(c)</strong> historical / Section 270A current penalty for concealment of income particulars</li>
                </ul>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                    <table>
                        <thead>
                            <tr>
                                <th>Regulator</th>
                                <th>Statute</th>
                                <th>Key Form / Approval</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>CBDT (Central Board of Direct Taxes)</td><td>Income-tax Act 1961</td><td>ITR-3 / ITR-5 / ITR-6 / ITR-7; Form 3CD audit; Form 3CLA R and D quantification</td></tr>
                            <tr><td>CBIC (Central Board of Indirect Taxes and Customs)</td><td>CGST Act 2017</td><td>GSTR-1, GSTR-3B, GSTR-9, GSTR-9C; RFD-01 inverted duty refund; e-way bill</td></tr>
                            <tr><td>DSIR (Department of Scientific and Industrial Research)</td><td>DSIR Guidelines 2020</td><td>Form 3CK in-house R and D facility approval; Form 3CL annual approval</td></tr>
                            <tr><td>CDSCO (Central Drugs Standard Control Organisation)</td><td>Drugs and Cosmetics Act 1940</td><td>Form 25 / Form 28 manufacture; Form 41 import; COPP export NOC</td></tr>
                            <tr><td>DGFT (Directorate General of Foreign Trade)</td><td>Foreign Trade Policy</td><td>RoDTEP (pharma largely excluded); Drawback under Section 75 Customs Act 1962; Advance Authorisation; EOU benefits</td></tr>
                            <tr><td>Section 35(2AB) ITA 1961</td><td>R and D weighted deduction</td><td>100% post 1 April 2020 (Finance Act 2016 phased reduction); capped at Form 3CL DSIR amount</td></tr>
                            <tr><td>Section 37(1) Expl 1 + Expl 3 ITA 1961</td><td>Freebies disallowance</td><td>Apex Laboratories SC 2022 + Finance Act 2022 - 100% disallowance for prohibited freebies to doctors</td></tr>
                            <tr><td>Section 54(3) CGST 2017</td><td>Inverted duty refund</td><td>RFD-01 under Rule 89(5); 90% provisional refund effective 1 October 2025 per CGST Instruction 6/2025</td></tr>
                            <tr><td>Section 44AB ITA 1961</td><td>Tax audit threshold</td><td>Rs 1 cr (Rs 10 cr if 95% non-cash); Form 3CD by 30 September 2026</td></tr>
                            <tr><td>Section 92E ITA 1961</td><td>Transfer pricing</td><td>Form 3CEB for international and specified domestic related party; ITR by 30 November 2026</td></tr>
                            <tr><td>ICDS-II</td><td>Inventory valuation</td><td>Lower of cost or NRV; FIFO or weighted average; LIFO not permitted; near-expiry stock written down item by item</td></tr>
                        </tbody>
                    </table>
                </div>
                <p style="font-size:13px;color:var(--text-muted);margin-top:14px;font-style:italic;">External references: Income Tax e-Filing Portal - <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">incometax.gov.in</a> (CBDT - ITR utilities, Section 35(2AB) R and D FAQ, Form 3CD audit); GST Portal - <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">gst.gov.in</a> (CBIC - RFD-01 inverted duty refund, GSTR-9 reconciliation); CDSCO SUGAM Portal - <a href="https://cdscoonline.gov.in/" target="_blank" rel="noopener">cdscoonline.gov.in</a> (Form 25 / Form 28 / Form 41 / COPP); DSIR R and D Approval - <a href="https://dsir.gov.in/" target="_blank" rel="noopener">dsir.gov.in</a> (Form 3CK / 3CL).</p>


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
                    <p class="faq-expanded__lead">Common questions on ITR form selection for pharma manufacturers and traders, Section 35(2AB) R and D weighted deduction (100 percent post 1 April 2020 capped at Form 3CL), Section 44AB tax audit threshold, CDSCO licence fee deductibility, Section 54(3) inverted duty GST refund coordination, Section 37(1) freebies disallowance after Apex Laboratories SC 2022, RoDTEP pharma exclusion, and ICDS-II inventory valuation for AY 2026-27.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form is used for a pharmaceutical company in India?</h3>
                        <div class="faq-expanded__a"><p>A private limited or listed pharma manufacturer files ITR-6. A pharma LLP or partnership firm files ITR-5. A proprietor pharma trader or chemist files ITR-3 with regular books, or ITR-4 if opting for the presumptive scheme under Section 44AD with turnover up to Rs 2 crore (Rs 3 crore if 95 percent of receipts and payments are non-cash, per Finance Act 2023). HUF running a medical store files ITR-3. Pharma R and D society or trust files ITR-7. Cross-border pharma with overseas affiliate files ITR-6 with Form 3CEB transfer pricing report.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can pharma companies still claim weighted R and D deduction under Section 35(2AB)?</h3>
                        <div class="faq-expanded__a"><p>Yes. Pharma manufacturers with an in-house R and D facility approved by DSIR can claim a 100 percent deduction (the rate reduced from 200 percent to 150 percent from 1 April 2017 to 31 March 2020 and to 100 percent thereafter per Finance Act 2016). The deduction is capped at the amount approved by DSIR in Form 3CL, as reaffirmed by the ITAT Ahmedabad bench in Alembic Pharmaceuticals (March 2026). Form 3CK is the application; Form 3CLA is the chartered accountant's annual quantification of R and D expenditure (revenue and capital, excluding land and building).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the tax audit threshold for a pharma trader or manufacturer?</h3>
                        <div class="faq-expanded__a"><p>Tax audit applies under Section 44AB if pharma turnover exceeds Rs 1 crore in a financial year. The threshold rises to Rs 10 crore if 95 percent of receipts and payments are non-cash - which most institutional pharma sales meet, since marketplace, hospital, and chain-pharmacy receipts come via bank transfer. The Form 3CD report is due 30 September 2026 and the audit-case ITR by 31 October 2026 for AY 2026-27. Section 271B penalty for default is 0.5 percent of turnover or Rs 1.5 lakh, whichever lower.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Are CDSCO licence fees and renewal charges deductible in ITR?</h3>
                        <div class="faq-expanded__a"><p>Yes. CDSCO licence fees, Form 25 / Form 28 renewal charges, COPP application fees, GMP audit fees, Form 41 import licence, and clinical trial regulatory fees are revenue expenditure deductible under Section 37(1) of the Income-tax Act 1961, since they are wholly and exclusively for the business and are not prohibited by law. They feed into Schedule BP / P and L of ITR-6 (or ITR-5 / ITR-3 as applicable). Generic CA misclassification as capital expenditure causes depreciation drag - Patron classifies cleanly as revenue.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How does inverted duty structure affect a pharma manufacturer's ITR?</h3>
                        <div class="faq-expanded__a"><p>APIs commonly attract 18 percent GST while many finished medicines attract 5 percent GST, creating accumulated ITC. This refund is claimed separately on the GST portal via RFD-01 under Section 54(3) of the CGST Act 2017 read with Rule 89(5). The 90 percent provisional refund regime is now available for applications filed on or after 1 October 2025 per CGST Instruction 6/2025 dated 3 October 2025. The refund itself is a reduction of ITC and not income, but unrecovered ITC sitting in the books needs disclosure in the tax audit Form 3CD Clause 27.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can pharma companies claim doctor freebies, gifts, or sponsored conferences as expenditure?</h3>
                        <div class="faq-expanded__a"><p>No. Following the Supreme Court ruling in Apex Laboratories Pvt Ltd vs DCIT (2022) and Explanation 3 to Section 37(1) inserted by the Finance Act 2022, any expenditure in the form of freebies, gifts, hospitality, gold coins, electronic items (LCD TVs, laptops), or sponsored travel to medical practitioners in violation of the Indian Medical Council Regulations 2002 is disallowed in full. Bona fide consultancy fees with proper deliverables (advisory, contract research, training) are still allowed. Patron classifies expenditure at source with documentation pack for scrutiny defence.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do pharma exporters get RoDTEP benefits?</h3>
                        <div class="faq-expanded__a"><p>Most pharmaceutical products are currently excluded from the RoDTEP scheme per DGFT public notices and ICEGATE rate schedule. Pharma exporters should rely on duty drawback under Section 75 of the Customs Act 1962, advance authorisation, EOU benefits, or Section 10AA SEZ deduction (where applicable) instead. Patron Accounting maps each export shipment to the right benefit before filing ITR. Mistakenly claiming RoDTEP for excluded pharma products triggers DGFT recovery and ITR adjustment notices.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How is pharma inventory valued for income tax purposes?</h3>
                        <div class="faq-expanded__a"><p>Under ICDS-II (CBDT Notification 87/2016 dated 29 September 2016), pharma inventory is valued at the lower of cost or net realisable value, using either FIFO or weighted average cost. LIFO is not permitted for income tax. Cost includes purchase price, freight inwards, customs and CVD, but excludes interest on borrowings (unless capitalised under ICDS-IX). Slow-moving and near-expiry stock must be written down to NRV item by item, with the write-down deductible under Section 28. Reconciliation with CDSCO Form 25 / Form 28 stock register is mandatory in tax audit.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <div class="quick-answers" style="background:var(--gray-50);padding:24px;border-radius:12px;margin-top:32px;">
                    <h3 style="font-size:1.4rem;margin-bottom:18px;color:var(--blue);">Quick Answers</h3>
                    <p><strong>Q: Which ITR form for a pharma Pvt Ltd?</strong><br>A: ITR-6, due 31 October 2026 for AY 2026-27 if audited.</p>
                    <p><strong>Q: R and D deduction percentage now?</strong><br>A: 100 percent under Section 35(2AB) post 1 April 2020 (down from 150 percent earlier).</p>
                    <p><strong>Q: Tax audit limit for pharma trader?</strong><br>A: Rs 1 crore turnover under Section 44AB; Rs 10 crore for 95 percent non-cash cases.</p>
                    <p><strong>Q: Inverted duty refund - which section?</strong><br>A: Section 54(3) CGST Act read with Rule 89(5) CGST Rules; 90 percent provisional refund effective 1 October 2025.</p>
                    <p><strong>Q: Freebies to doctors deductible?</strong><br>A: No - disallowed per Apex Laboratories SC 2022 and Section 37(1) Explanation 3.</p>
                    <p><strong>Q: Pharma export RoDTEP?</strong><br>A: Largely excluded - use drawback under Section 75 Customs Act or advance authorisation instead.</p>
                    <p><strong>Q: Inventory valuation method?</strong><br>A: ICDS-II - lower of cost or NRV using FIFO or weighted average. LIFO not permitted.</p>
                    <p><strong>Q: CDSCO licence fee deductible?</strong><br>A: Yes - revenue expenditure under Section 37(1).</p>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Three Pharma Business Deadlines for AY 2026-27</h2>
            <div class="content-text">
                
                <p>Three deadlines to lock for pharma businesses for AY 2026-27 (FY 2025-26): <strong>(1) Form 3CD Tax Audit Report - 30 September 2026</strong>; <strong>(2) ITR-6 / ITR-5 audit case - 31 October 2026</strong>; <strong>(3) Form 3CEB Transfer Pricing case under Section 92E - 30 November 2026</strong> (common for global pharma majors with royalty, contract manufacturing, API supply). Non-audit ITR-3 / ITR-4 due 31 August 2026 (extended from 31 July 2026). Late filing triggers Section 234F fee (up to Rs 5,000), Section 234A interest at 1 percent per month, loss of carry-forward of business losses, and Section 271B audit penalty up to Rs 1.5 lakh. Section 270A under-reporting / mis-reporting penalty at 50 percent / 200 percent applies to excess Section 35(2AB) R and D claims above Form 3CL DSIR approval (Alembic Pharmaceuticals ITAT Ahmedabad March 2026). Section 35(2AB) claim must align with DSIR Form 3CL for the relevant AY - delayed Form 3CLA filing risks scrutiny disallowance.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Pharma ITR Right - Talk to a Pharma-Savvy CA Today</h2>
            <div class="content-text" style="text-align:left;">
                
                
                    <p>ITR for pharma business is materially different from a generic business return. The interplay of Section 35(2AB) R and D weighted deduction (100 percent post 1 April 2020 capped at Form 3CL), Section 54(3) inverted duty refund (with 90 percent provisional refund regime from 1 October 2025), Section 37(1) freebies disallowance (Apex Laboratories SC 2022 + Explanation 3), ICDS-II inventory valuation, multi-state stock transfer reconciliation under Schedule I CGST, and Section 44AB tax audit demands a CA team that understands both the Income-tax Act and the Drugs and Cosmetics Act 1940.</p>
                    <p>Patron Accounting brings 15+ years of tax practice and 50+ pharma engagements - covering formulation makers, API suppliers, OTC and FMCG pharma, contract research organisations, chemist chains, and SEZ pharma units - to file your return on time, defend it under scrutiny, and unlock the refunds you are entitled to. Whether you are a single-platform proprietor chemist on Sec 44AD, a multi-state Pvt Ltd manufacturer with R and D and IDS refund, or a global pharma major with Section 92E transfer pricing, we have done it before and we can do it for you.</p>
                    <p style="font-weight:600;">Free first consultation. Call <a href="tel:+919459456700" style="color:#FFD700;">+91 945 945 6700</a>, WhatsApp, or email info@patronaccounting.com - we tell you the optimal ITR form (ITR-3 vs ITR-5 vs ITR-6 vs ITR-7), Section 35(2AB) R and D claim defensibility, Section 54(3) inverted duty refund recoverability, and Section 37(1) freebies firewall status BEFORE you pay anything.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%20consultation%20on%20Section%2035%282AB%29%20R%20and%20D%2C%20Section%2054%283%29%20inverted%20duty%20refund%2C%20and%20ITR%20for%20my%20pharma%20business." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Pharma%20Businesses%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20filing%20services%20for%20my%20pharma%20business%20%28R%20and%20D%2C%20IDS%20refund%2C%20CDSCO%29%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <div class="pa-city-block">
                <div class="pa-block-title" style="font-size:18px;font-weight:700;color:var(--blue);margin-bottom:8px;">Related Tax and Pharma Compliance Services</div>
                <div class="pa-block-sub" style="font-size:14px;color:var(--text-muted);margin-bottom:20px;">End-to-end tax, audit, refund, and stock audit for pharma businesses</div>
                <div class="pa-cross-grid">
                    <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-business" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Companies</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Refund (IDS)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/stock-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Stock Audit</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">8 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 8 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Reviewed quarterly during ITR season (April to October) and after every Union Budget; immediately after Section 35(2AB) rate change, Section 54(3) refund regime update, Section 37(1) explanation amendment, ICDS-II revision, RoDTEP scheme update, or CDSCO licence fee notification. Citation Sources: Income-tax Act 1961 (Sections 28, 32, 35(2AB), 37(1) Expl 1+3, 44AA, 44AB, 44AD, 92E, 234F, 270A, 271AAB, 271B); ICDS-II Inventories (CBDT Notification 87/2016 dated 29 September 2016); Finance Act 2016 (Section 35(2AB) phased reduction to 100 percent); Finance Act 2022 (Section 37(1) Explanation 3 insertion); CGST Act 2017 (Section 54(3), Schedule I); Rule 89(5) CGST Rules 2017 (amended by Notification 14/2022 dated 5 July 2022); CGST Instruction 6/2025 dated 3 October 2025 (90 percent provisional refund); Apex Laboratories Pvt Ltd vs DCIT (Supreme Court 2022); Union of India vs VKC Footsteps (Supreme Court 2021); Alembic Pharmaceuticals (ITAT Ahmedabad March 2026); Drugs and Cosmetics Act 1940 read with Drugs and Cosmetics Rules 1945.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
@include('layouts.itr-season-strip')

</main>

<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION — Update these values
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
            console.log('[Testimonials] No Google API key set — using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API — using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews — using fallback.');
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
        // Static cards already rendered — init Slick immediately
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
