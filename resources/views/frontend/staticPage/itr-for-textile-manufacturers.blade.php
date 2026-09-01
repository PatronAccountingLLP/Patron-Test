
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Textile ITR: Sec 145A, RoDTEP, GST Refund</title>
    <meta name="description" content="File ITR for textile manufacturers and traders. Section 145A inventory, inverted duty GST refund, RoDTEP, machinery depreciation. Starts at Rs 7,999.">
    <link rel="canonical" href="/itr-for-textile-manufacturers">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Textile ITR 2026: Sec 145A, RoDTEP, GST Refund | Patron Accounting">
    <meta property="og:description" content="File ITR for textile manufacturers and traders. Section 145A inventory, inverted duty GST refund, RoDTEP, machinery depreciation. Starts at Rs 7,999.">
    <meta property="og:url" content="/itr-for-textile-manufacturers/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Textile ITR 2026: Sec 145A, RoDTEP, GST Refund | Patron Accounting">
    <meta name="twitter:description" content="File ITR for textile manufacturers and traders. Section 145A inventory, inverted duty GST refund, RoDTEP, machinery depreciation. Starts at Rs 7,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "https://www.patronaccounting.com/itr-for-textile-manufacturers/#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR for Textile Manufacturers", "item": "https://www.patronaccounting.com/itr-for-textile-manufacturers" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.patronaccounting.com/itr-for-textile-manufacturers/#faq",
          "datePublished": "2026-05-08T08:00:00+05:30",
          "dateModified": "2026-05-08T08:00:00+05:30",
          "mainEntity": [
            {
                "@type": "Question",
                "name": "How is closing stock valued for textile manufacturers under Section 145A?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Section 145A of Income Tax Act 1961 mandates inventory valuation at lower of actual cost OR Net Realisable Value (NRV) per ICDS II. Cost includes any taxes/duties/cess paid. Valuation is done CATEGORY-WISE - raw cotton, yarn, grey fabric, dyed fabric, finished apparel, packaging are separate categories with different NRV trajectories. Cost methods: First-In First-Out (FIFO) or weighted average. NRV equals estimated selling price MINUS estimated completion cost MINUS expenses for sale. Lump-sum valuation fails ICDS II. For unsold seasonal collection, NRV often drops post-festival - a Tirupur knitted garment exporter can claim Rs 30-50 lakh write-down on Rs 12 crore turnover."
                }
            },
            {
                "@type": "Question",
                "name": "Can textile manufacturers claim GST refund under inverted duty structure?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "YES. Under Section 54(3) of CGST Act 2017 read with Rule 89(5) of CGST Rules 2017. Eligible: registered taxpayers with accumulated unutilised ITC due to inverted tax structure (output rate lower than input rate). Common in textile cotton chain (apparel below Rs 1,000 at 5 percent output; yarn 5 percent + accessories 12 percent + dyes 18 percent input). Form GST RFD-01 with Rule 89(5) formula - Maximum Refund equals (Turnover of inverted rated supply / Adjusted Total Turnover) x Net ITC minus tax payable. Time limit 2 years from end of relevant period. Input services and capital goods NOT eligible - only input goods. Hinglish: Inverted duty refund textile mein kaise milega? - Section 54(3) under RFD-01."
                }
            },
            {
                "@type": "Question",
                "name": "What is the RoDTEP rate for textile exports in 2026?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "RoDTEP (Remission of Duties and Taxes on Exported Products) rates for textile HS codes range 0.3 to 4.3 percent of FOB value with per-unit caps for some products. Notified in Appendix 4R (DTA exporters) and Appendix 4RE (SEZ/EOU/Advance Authorisation from 1 June 2025). DGFT Notification 60/2025-26 (23 February 2026) reduced rates to 50 percent; Notification 66/2025-26 (23 March 2026) restored rates to pre-23 February 2026 levels for exports through 31 March 2026. Rates updated periodically - check DGFT current. Operational from 1 January 2021 (replaced MEIS that expired 31 December 2020). e-scrips transferable for basic customs duty payment."
                }
            },
            {
                "@type": "Question",
                "name": "What is the depreciation rate on textile machinery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Section 32 of Income Tax Act 1961 with Income Tax Rules Schedule II. General plant and machinery 15 percent WDV. Continuous process plant 40 percent WDV - some textile processing machinery (drying ranges, stenters, mercerizing machines) may qualify subject to fact-specific evaluation. Factory buildings 10 percent. Computers 40 percent. Section 32(1)(iia) additional 20 percent on NEW machinery in manufacturing entity in year of acquisition; pro-rata if used less than 180 days; balance NEVER carried forward. Wrong classification equals Section 32 disallowance and reassessment. Patron evaluates machinery-by-machinery against CBDT guidance."
                }
            },
            {
                "@type": "Question",
                "name": "Which ITR form should a textile manufacturer file?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Depends on entity type. Sole proprietor textile trader / manufacturer files ITR-3 (regular books) or ITR-4 SUGAM (Section 44AD presumptive Rs 3 crore digital / Rs 2 crore otherwise - 8 percent / 6 percent deemed profit). Partnership Firm or LLP textile files ITR-5. Private Limited Company / Public Limited Company textile files ITR-6 (with corporate rates 22% / 25% / 30%). HUF with textile business files ITR-3 / ITR-4. Never ITR-1 (no business income head). LLPs are NOT eligible for Section 44AD presumptive. Tirupur garment exporter partnership files ITR-5; Bhiwandi power loom proprietor files ITR-3 / ITR-4; Surat MMF partnership files ITR-5; Coimbatore spinning mill Pvt Ltd files ITR-6."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between MMF and cotton GST rates?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Pre-2022 reform: MMF 18 percent / MMF yarn 12 percent / MMF fabric 5 percent (highly inverted). 47th GST Council Meeting July 2022 partially reformed - many MMF segments moved to uniform 12 percent. Current cotton chain: yarn 5 percent / fabric 5 percent / apparel below Rs 1,000 at 5 percent. Both cotton and MMF apparel below Rs 1,000 at 5 percent generates inverted duty for manufacturers using 12 percent accessories (buttons, zippers) and 18 percent dyes/chemicals. Apparel above Rs 1,000 at 12 percent has lower inverted risk. Surat MMF dyers face most acute inverted duty - dyes 18 percent input vs 5 percent output finished fabric."
                }
            },
            {
                "@type": "Question",
                "name": "How are job work payments to textile vendors treated for ITR?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Job work payments to power loom operators, dyers, embroiderers, washers, stitchers are treated as expenses under Section 37 (general business expenditure). TDS Section 194C applies - 1 percent for individual/HUF contractor; 2 percent for others. Threshold: single payment Rs 30,000 / aggregate Rs 1 lakh annually. Section 40A(3) cash payment limit Rs 10,000 per day per party (Rs 35,000 for transporters). Cash payment violations equal 100 percent disallowance. Recommended: bank/UPI transfers with proper invoice and TDS deduction. Hinglish: Job worker ko cash mein payment kar sakte hain? Rs 10,000 daily limit per party hai Section 40A(3) ke under."
                }
            },
            {
                "@type": "Question",
                "name": "Is tax audit applicable to textile manufacturers above Rs 5 crore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "YES. Section 44AB tax audit is mandatory for business turnover above Rs 1 crore (Rs 10 crore if 95 percent or more receipts AND payments are digital - both halves test). At Rs 5 crore turnover, you are above the basic Rs 1 crore threshold and below the Rs 10 crore digital threshold - so audit applicability depends on cash transaction percentage. If you cross 5 percent cash on either receipts or payments, audit mandatory at Rs 5 crore. Form 3CD by 30 September 2026; ITR by 31 October 2026. Section 271B penalty 0.5 percent of turnover or Rs 1.5 lakh. Form 3CD includes Clause 14 (ICDS II inventory), Clause 18 (Section 32), Clause 21 (Section 40A(3) + 269ST), Clause 26 (Section 43B)."
                }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "https://www.patronaccounting.com/itr-for-textile-manufacturers/#service",
          "name": "ITR for Textile Manufacturers in India",
          "description": "CA-led income tax return filing for cotton spinning mills, MMF / polyester / viscose manufacturers, knitted and woven garment exporters, hosiery units, home textile makers, denim mills, power loom operators, and fabric wholesalers across Tirupur, Surat, Bhiwandi, Panipat, Ludhiana, Coimbatore, Erode, and Bhilwara textile clusters. Covers ITR-3, ITR-4, ITR-5, ITR-6 with Section 145A inventory valuation per ICDS II (lower of cost or NRV; FIFO or weighted average; category-wise across raw cotton / yarn / grey fabric / dyed fabric / finished apparel / packaging), inverted duty structure GST refund coordination under Section 54(3) of CGST Act 2017 with Rule 89(5) formula and Form GST RFD-01 filing, RoDTEP scheme claim coordination per Appendix 4R / 4RE (0.3 to 4.3 percent FOB rebate on textile HS codes), Section 32 plant and machinery depreciation (15 percent general / 40 percent continuous process plant) with Section 32(1)(iia) additional 20 percent on new machinery in year of acquisition, Section 40A(3) Rs 10,000 cash payment audit (Rs 35,000 for transporters) for cluster job worker / weaver / dyer / embroiderer payments, Section 43B statutory dues actual payment timing, Section 269ST Rs 2 lakh cash receipt limit with Section 271DA penalty defence, Section 9B / 45(4) partnership reconstitution capital gains computation for textile family firms, and Section 44AB tax audit support with Form 3CD trader-specific clauses.",
          "provider": {"@id": "https://www.patronaccounting.com/#organization"},
          "serviceType": "Income Tax Return Filing for Textile Manufacturers, Garment Exporters, and Fabric Traders",
          "category": "Direct Tax Compliance",
          "areaServed": [
            {"@type": "Country", "name": "India"},
            {"@type": "City", "name": "Pune"},
            {"@type": "City", "name": "Mumbai"},
            {"@type": "City", "name": "Delhi"},
            {"@type": "City", "name": "Gurugram"}
          ],
          "audience": {"@type": "Audience", "audienceType": "Textile manufacturers across cotton (spinning mills, weaving units, processing houses), MMF/polyester (Surat-based polyester, viscose, blended fabric makers), knitted garments (Tirupur exporters), woven garments (Delhi NCR exporters), hosiery (Ludhiana sweaters, undergarments), home textiles (Panipat towels, bedsheets, carpets), denim (Ahmedabad mills), synthetic fabric (Bhilwara), power loom operators (Bhiwandi, Malegaon, Ichalkaranji), wholesale fabric traders (Erode, Surat), garment retailers transitioning to manufacturing, textile job workers (dyers, embroiderers, stitchers, washers), textile exporters claiming RoDTEP, textile MSMEs claiming inverted duty refund. Coverage spans sole proprietorship, partnership firm (Indian Partnership Act 1932), LLP (LLP Act 2008), private limited and public limited companies (Companies Act 2013), HUF, and AOP/BOI for textile cooperative arrangements. Turnover range Rs 50 lakh to Rs 500 crore."},
          "about": [
            {"@type": "Thing", "name": "Textile industry in India", "sameAs": "https://en.wikipedia.org/wiki/Textile_industry_in_India"},
            {"@type": "Thing", "name": "Income tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"},
            {"@type": "Thing", "name": "Goods and Services Tax (India)", "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)"}
          ],
          "termsOfService": "/terms-and-conditions/",
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ITR for Textile Manufacturers Pricing",
            "itemListElement": [
              {"@type": "Offer", "name": "Sole Proprietor Textile ITR-3 / ITR-4", "price": "7999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-textile-manufacturers", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Partnership / LLP Textile ITR-5 with Sec 40(b)", "price": "12999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-textile-manufacturers", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Bundle ITR plus Sec 44AB Tax Audit Form 3CD", "price": "22998", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-textile-manufacturers", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Inverted Duty GST Refund Add-on per RFD-01 cycle", "price": "14999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-textile-manufacturers", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "RoDTEP Claim Coordination Add-on", "price": "9999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-textile-manufacturers", "availability": "https://schema.org/InStock"}
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
    ['name' => 'ITR for Textile Manufacturers', 'url' => '/itr-for-textile-manufacturers'],
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
                        ITR Filing for Textile Manufacturers, Garment Exporters, and Fabric Traders
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Books of accounts (cotton bales, yarn cones, grey fabric, dyed/printed fabric, finished apparel WIP and stock), GST returns (GSTR-1 / GSTR-3B / GSTR-9), inverted duty refund history (RFD-01 acknowledgements), shipping bills with RoDTEP markings, IEC certificate, partnership deed / LLP Agreement, Form 26AS / AIS / TIS, dyer / job worker ledger.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 7,999 (Excl. GST and Govt. Charges) for sole proprietor textile ITR-3 / ITR-4. Rs 12,999 partnership / LLP ITR-5 with Section 40(b) optimization. Rs 22,998 bundle with Section 44AB tax audit + Form 3CD. Rs 14,999 add-on for inverted duty GST refund per RFD-01 cycle.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Sole proprietors, partnership firms (Indian Partnership Act 1932), LLPs (LLP Act 2008), private limited companies, public limited companies, HUFs with textile business, AOP/BOI for textile cooperatives. Cotton spinning mills, MMF / polyester / viscose manufacturers, knitted and woven garment exporters, hosiery units, home textile makers, denim mills, power loom operators.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7 to 14 working days for sole proprietor non-audit; 14 to 21 days for partnership / LLP; 21 to 30 days for tax audit cases. Statutory due 31 July 2026 (non-audit), 30 September 2026 (Form 3CD Tax Audit Report), 31 October 2026 (audit ITR), 30 November 2026 (Section 92E transfer pricing).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 280+ Textile Sector Engagements</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Textile%20Manufacturers%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20filing%20services%20for%20my%20textile%20business%20%28cotton%20spinning%2FMMF%2Fknitted%20garments%2Fpower%20loom%2Fhome%20textile%29%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITR%20filing%20for%20my%20textile%20business%20-%20Section%20145A%20inventory%2C%20inverted%20duty%20refund%2C%20RoDTEP%2C%20machinery%20depreciation." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ITR for Textile Manufacturers',
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
    'ctaText'    => 'Join 280+ textile sector clients who file their ITR with Patron each year - cotton spinning mills, MMF / polyester / viscose manufacturers, knitted and woven garment exporters, hosiery units, home textile makers, denim mills, power loom operators, and fabric wholesalers across Tirupur, Surat, Bhiwandi, Panipat, Ludhiana, Coimbatore, Erode, and Bhilwara.',
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
                <a href="#what-section" class="toc-btn">What Is</a>
                <a href="#who-section" class="toc-btn">Who Needs</a>
                <a href="#services-section" class="toc-btn">Services</a>
                <a href="#procedure-section" class="toc-btn">7-Step Process</a>
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
            <h2 class="section-title">Textile Manufacturer ITR - Section 145A Inventory Valuation per ICDS II, Inverted Duty GST Refund under Section 54(3) CGST, RoDTEP Scheme, and Section 32 Machinery Depreciation</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Textile Manufacturers Services at a Glance</strong></p>
                    <p><strong>TL;DR:</strong> Textile manufacturers face FIVE industry-specific tax considerations regardless of entity type. Section 145A requires inventory valuation at lower of cost or NRV per ICDS II - critical for cotton, MMF yarn, grey fabric, dyed fabric, and finished apparel. Inverted duty structure (inputs at 12-18 percent, output at 5 percent for apparel below Rs 1,000) creates accumulated GST ITC refundable under Section 54(3) of CGST Act. RoDTEP scheme rebates 0.3 to 4.3 percent of FOB on textile exports. Audit-case ITR due 31 October 2026.
                    <div class="table-responsive-wrapper" style="margin-top:20px;">
                        <table>
                            <thead>
                                <tr>
                                    <th>Parameter</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Governing Provisions</td><td>Income Tax Act 1961 (Sections 28-44, 32, 40(b), 40A(3), 43B, 44AA, 44AB, 44AD, 145A, 234A/B/C, 269ST, 271DA, 9B, 45(4)); Income Tax Rules 1962 Schedule II depreciation; ICDS II inventory valuation; CGST Act 2017 Section 54(3); CGST Rules 2017 Rule 89(5); Foreign Trade Policy 2023 with DGFT RoDTEP Appendix 4R / 4RE</td></tr>
                                <tr><td>Entity Coverage</td><td>Sole proprietorship, Partnership Firm (non-LLP), LLP, Private Limited Company, Public Limited Company, HUF, AOP/BOI - all textile sector entity types</td></tr>
                                <tr><td>ITR Form Mapping</td><td>Sole prop: ITR-3 (regular) / ITR-4 (Section 44AD presumptive); Partnership / LLP: ITR-5; Company: ITR-6; HUF: ITR-3 / ITR-4</td></tr>
                                <tr><td>Section 145A Inventory Valuation</td><td>Lower of actual cost OR Net Realisable Value (NRV) per ICDS II; cost includes taxes/duties/cess. FIFO or weighted average cost method. Category-wise (raw cotton, yarn, grey fabric, dyed fabric, finished apparel, packaging)</td></tr>
                                <tr><td>Inverted Duty Refund</td><td>Section 54(3) CGST Act with Rule 89(5) formula. Maximum Refund = (Turnover of inverted rated supply / Adjusted Total Turnover) x Net ITC - tax payable. Form GST RFD-01. 2-year time limit. Input services and capital goods NOT eligible</td></tr>
                                <tr><td>RoDTEP Scheme</td><td>0.3 to 4.3 percent FOB rebate on textile HS codes; e-scrips for basic customs duty; Appendix 4R for DTA exporters; Appendix 4RE for SEZ/EOU/Advance Authorisation from 1 June 2025</td></tr>
                                <tr><td>Section 32 Depreciation</td><td>Plant and Machinery 15 percent WDV (general); 40 percent WDV (continuous process plant); Factory buildings 10 percent; Computers 40 percent. Section 32(1)(iia) additional 20 percent on new machinery in year of acquisition (manufacturing)</td></tr>
                                <tr><td>Section 44AB Tax Audit</td><td>Business turnover above Rs 1 crore (Rs 10 crore if 95 percent+ digital both halves); Form 3CD by 30 September 2026</td></tr>
                                <tr><td>Section 44AD Eligibility</td><td>Resident Individual / HUF / Partnership Firm with turnover up to Rs 3 crore digital / Rs 2 crore otherwise; 8 percent / 6 percent presumptive. LLP / Company excluded</td></tr>
                                <tr><td>Cost</td><td>Starting Rs 7,999 (Excl. GST and Govt. Charges)</td></tr>
                                <tr><td>Authority</td><td>CBDT for income tax; CBIC for GST; DGFT for RoDTEP under Foreign Trade Policy 2023</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p style="font-size:12px;color:var(--text-muted);margin-top:8px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
</p>
                </div>
                <p>Textile manufacturer ITR is the area where DIY platforms and generalist accountants miss FIVE industry-specific levers - Section 145A inventory valuation across raw cotton / yarn / grey fabric / finished apparel WIP categories, inverted duty structure GST refund worth 6 to 12 percent of monthly turnover for cotton-chain manufacturers, RoDTEP rebate of 0.3 to 4.3 percent on FOB exports filed via shipping bill, Section 32 depreciation choice between 15 percent general and 40 percent continuous process plant for textile machinery, and seasonal cash payment compliance to local power loom operators / dyers / embroiderers / job workers under Section 40A(3) Rs 10,000 cash limit.</p>
                <p>A Tirupur knitted garment exporter with Rs 12 crore turnover misclassifying inventory NRV at the post-festival mark loses Rs 30 to 50 lakh deductible write-down. A Surat MMF dye house ignoring inverted duty refund accumulates Rs 1.5 to 4 crore unutilised ITC over 18 months that drains working capital. A Bhiwandi power loom operator paying Rs 12,000 daily cash to weavers loses 100 percent disallowance under Section 40A(3) - turning Rs 36 lakh annual labour into firm tax addition of Rs 11 lakh. Patron Accounting has filed textile sector ITRs for 280+ manufacturers across Tirupur, Surat, Bhiwandi, Panipat, and Ludhiana since 2019.</p>
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
                <h2 class="section-title">What Is ITR Filing for Textile Manufacturers</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p><strong>Textile Manufacturer ITR filing means computing PGBP income across textile-specific complexities - Section 145A inventory valuation per ICDS II for raw cotton bales, opened yarn, grey fabric WIP, dyed/printed fabric, embroidered garments, and finished apparel; coordinating inverted duty GST refund under Section 54(3) of CGST Act for accumulated ITC; tracking RoDTEP rebate scrips from shipping bill exports; choosing Section 32 depreciation rate for textile machinery; and ensuring Section 40A(3) compliance on cash payments to cluster job workers - all reported in entity-appropriate ITR form (ITR-3 / ITR-4 / ITR-5 / ITR-6).</strong></p>
                    <p>India textile sector spans the entire value chain from cotton/synthetic fibre cultivation through spinning, weaving, knitting, dyeing/printing, garment construction, embroidery, and final exports. Each stage has distinct ITR considerations. Spinning mills (Coimbatore, Bhilwara) deal with cotton bale to yarn cone inventory and Section 32 continuous process plant claim. Weaving units (Bhiwandi power loom cluster, Surat fabric mills) deal with yarn to grey fabric WIP and predominantly sole proprietor / partnership firm structures. Processing houses (Surat MMF dyeing, Tirupur garment dye houses) face the most acute inverted duty structure - dyes and chemicals at 18 percent input GST, finished fabric at 5 percent output - generating accumulated ITC refundable under Section 54(3).</p>
                    <p>Garment exporters (Tirupur, Delhi NCR, Mumbai) coordinate RoDTEP on shipping bills, Section 35DDA for export promotion, and seasonal cash flow for AW/SS production cycles. Home textile manufacturers (Panipat) deal with seasonal turnover patterns. Hosiery units (Ludhiana) deal with low-margin high-volume garment WIP categorization. This service handles all stages with a CA who understands the cluster, the supply chain, and the working capital cycle. For non-corporate generic ITR coverage, see ITR for Business hub. For LLP and partnership firm specifics, see ITR for LLP and Partnership.</p>

                <div style="margin-top:32px;">
                    <h3 style="font-size:1.4rem;margin-bottom:16px;">Key Terms in Textile Manufacturer ITR</h3>
                    <p><strong>Section 145A Inventory Valuation:</strong> Income Tax Act 1961 Section 145A (substituted by Finance Act 2018, effective 1 April 2017): inventory valued at lower of actual cost OR Net Realisable Value (NRV) per Income Computation and Disclosure Standards (ICDS) notified under Section 145(2). Cost includes any taxes/duties/cess paid. Listed securities at lower of cost or NRV; unlisted at actual cost.</p>
                    <p><strong>ICDS II - Valuation of Inventories:</strong> Income Computation and Disclosure Standard II for inventory valuation. Cost methods: First-In First-Out (FIFO) or weighted average cost. NRV equals estimated selling price MINUS estimated completion cost MINUS expenses necessary for sale. Comparison cost vs NRV done category-wise. Disclosure in Form 3CD if deviation. Applicable to mercantile-system taxpayers required to be audited under Section 44AB.</p>
                    <p><strong>Net Realisable Value (NRV):</strong> Estimated selling price of inventory in ordinary course of business LESS estimated cost of completion LESS estimated cost necessary to make the sale. For unsold seasonal collection: NRV often drops post-festival; tax write-down available. For dyed-but-unembroidered fabric: NRV depends on whether further conversion will be done in-house or sold as is.</p>
                    <p><strong>Inverted Duty Structure:</strong> GST scenario where rate of tax on inputs is HIGHER than rate of tax on outputs. Common in textile cotton chain: yarn 12 percent, accessories (buttons, zippers, labels) 12 percent, dyes/chemicals 18 percent input - finished apparel below Rs 1,000 output 5 percent. Creates accumulated unutilised ITC.</p>
                    <p><strong>Section 54(3) of CGST Act 2017:</strong> Refund of unutilised Input Tax Credit (ITC) on inverted duty structure. Form GST RFD-01. Time limit 2 years from end of FY. Refunds paid in cash to bank account. ITC for INPUT SERVICES NOT eligible (only goods inputs). Capital goods ITC NOT eligible for refund.</p>
                    <p><strong>Rule 89(5) of CGST Rules 2017:</strong> Formula for inverted duty refund: Maximum Refund Amount = (Turnover of inverted rated supply of goods / Adjusted Total Turnover) x Net ITC MINUS tax payable on inverted rated supply. Adjusted Total Turnover excludes exempt supplies, exports, and Schedule III items.</p>
                    <p><strong>RoDTEP Scheme:</strong> Remission of Duties and Taxes on Exported Products. Operational from 1 January 2021 (replacing MEIS that expired 31 December 2020). Refunds embedded duties/taxes/levies not recovered under any other mechanism. e-scrips transferable for basic customs duty payment. Rates 0.3 to 4.3 percent of FOB value with per-unit caps. Appendix 4R (DTA exporters); Appendix 4RE (SEZ/EOU/Advance Authorisation from 1 June 2025).</p>
                    <p><strong>MMF (Man-Made Fibre):</strong> Synthetic fibres including polyester, viscose, nylon, acrylic. India MMF hub Surat. Pre-2022 GST rates: MMF 18 percent / yarn 12 percent / fabric 5 percent (inverted). Post 47th GST Council July 2022 partial reform - many MMF segments at uniform 12 percent though inverted structure persists for some apparel.</p>
                    <p><strong>Section 32 Depreciation:</strong> Income Tax Act Section 32. General plant and machinery 15 percent WDV. Continuous process plant 40 percent WDV (some textile machinery qualifies). Factory buildings 10 percent. Computers 40 percent. Block of assets concept. Pro-rata if asset used less than 180 days. Section 32(1)(iia) additional 20 percent on new machinery in year of acquisition for manufacturing.</p>
                    <p><strong>Section 40A(3) Cash Payment Disallowance:</strong> Income Tax Act Section 40A(3). Any cash payment to a single party in a day exceeding Rs 10,000 fully disallowed (Rs 35,000 for transporters). Critical for textile cluster cash payments to power loom operators, weavers, dyers, embroiderers, job workers, transporters.</p>
                    <p><strong>Textile Cluster Geography:</strong> Tirupur (Tamil Nadu, knitted garments, Rs 30,000+ crore exports); Surat (Gujarat, MMF/polyester, 60+ percent India share); Bhiwandi (Maharashtra, power looms); Panipat (Haryana, home textiles); Ludhiana (Punjab, hosiery); Coimbatore (Tamil Nadu, cotton spinning); Erode (Tamil Nadu, wholesale market); Bhilwara (Rajasthan, synthetic fabric); Ahmedabad (Gujarat, denim).</p>
                </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Textile Manufacturers:</strong></p>
                    

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Textile Manufacturers</text>
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
            <h2 class="section-title">Who Should File - Textile Sub-Sector Matrix and Tax Audit Threshold</h2>
            <div class="content-text">
                
                
                <p>Every textile manufacturer, garment exporter, and fabric trader earning income in India must file an ITR. Form depends on entity structure; tax audit depends on turnover and payment mode mix.</p>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Sub-Sector / Cluster</th>
                                <th>Entity Type</th>
                                <th>ITR Form</th>
                                <th>Tax Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Cotton Spinning Mill (Coimbatore, Bhilwara)</td><td>Pvt Ltd / LLP</td><td>ITR-6 / ITR-5</td><td>Section 32 continuous process plant 40% WDV; raw cotton MSP buying</td></tr>
                            <tr><td>MMF / Polyester (Surat)</td><td>Sole Prop / Partnership / LLP</td><td>ITR-3 / ITR-5</td><td>Severe inverted duty (dyes 18% vs fabric 5%); Section 54(3) refund</td></tr>
                            <tr><td>Power Loom Weaving (Bhiwandi, Malegaon, Ichalkaranji)</td><td>Sole Proprietor</td><td>ITR-3 / ITR-4</td><td>Section 40A(3) cash payment risk; daily weaver cash; Section 44AD eligible</td></tr>
                            <tr><td>Knitted Garment Exporter (Tirupur)</td><td>Partnership Firm / LLP</td><td>ITR-5</td><td>Inverted duty refund; RoDTEP shipping bills; Section 145A WIP categories</td></tr>
                            <tr><td>Woven Garment Exporter (Delhi NCR, Mumbai)</td><td>Partnership / Pvt Ltd</td><td>ITR-5 / ITR-6</td><td>RoDTEP claims; AW/SS seasonal cycles; Section 92E for related party imports</td></tr>
                            <tr><td>Hosiery Unit (Ludhiana)</td><td>Sole Prop / Partnership</td><td>ITR-3 / ITR-5</td><td>Low-margin high-volume; Section 145A garment WIP categorization</td></tr>
                            <tr><td>Home Textile Maker (Panipat)</td><td>Partnership / LLP / Pvt Ltd</td><td>ITR-5 / ITR-6</td><td>Seasonal turnover; towels, bedsheets, carpets WIP; export RoDTEP</td></tr>
                            <tr><td>Denim Mill (Ahmedabad)</td><td>Pvt Ltd / Public Ltd</td><td>ITR-6</td><td>Continuous process plant; vertical integration spinning to garment</td></tr>
                            <tr><td>Synthetic Fabric (Bhilwara)</td><td>Partnership / LLP / Pvt Ltd</td><td>ITR-5 / ITR-6</td><td>Inverted duty for synthetic; multi-state branch transfers</td></tr>
                            <tr><td>Wholesale Fabric Trader (Erode, Surat)</td><td>Sole Prop / HUF / Partnership</td><td>ITR-3 / ITR-4 / ITR-5</td><td>Section 269ST cash receipt risk from retail dealers</td></tr>
                            <tr><td>Textile Job Worker (dyer, embroiderer, washer)</td><td>Sole Proprietor</td><td>ITR-3 / ITR-4</td><td>Section 194C TDS as receiver; Section 44AD presumptive eligible</td></tr>
                            <tr><td>HUF Textile Business</td><td>HUF</td><td>ITR-3 / ITR-4</td><td>HUF eligible for Sec 44AD; capital gains on partition</td></tr>
                        </tbody>
                    </table>
                </div>
                <p style="margin-top:20px;"><strong>Tax Audit under Section 44AB:</strong></p>
                <ul>
                    <li>Textile manufacturer / trader: <strong>Rs 1 crore turnover</strong>; <strong>Rs 10 crore</strong> if cash receipts and cash payments are each below 5 percent (most exporters with bank-based settlements qualify)</li>
                    <li>Section 44AD opt-out below 8 percent / 6 percent deemed profit + total income above basic exemption: audit applies regardless of turnover</li>
                    <li>Tax audit report Form 3CA-3CD or 3CB-3CD due <strong>30 September 2026</strong></li>
                    <li>Section 271B penalty: 0.5 percent of turnover or Rs 1,50,000 (whichever lower) for tax audit default</li>
                </ul>
                <p style="margin-top:20px;"><strong>Statutory Deadlines AY 2026-27 (FY 2025-26):</strong></p>
                <ul>
                    <li><strong>31 July 2026</strong> - non-audit ITR-3 / ITR-4 / ITR-5 / ITR-6 under Section 139(1)</li>
                    <li><strong>30 September 2026</strong> - Tax Audit Report Form 3CD under Section 44AB</li>
                    <li><strong>31 October 2026</strong> - audit-case ITR-3 / ITR-5 / ITR-6</li>
                    <li><strong>30 November 2026</strong> - ITR for Section 92E transfer pricing cases (relevant for textile importers buying from related party suppliers overseas)</li>
                    <li><strong>31 December 2026</strong> - belated/revised return Section 139(4)/(5) with Section 234F fee</li>
                    <li><strong>15 March 2026</strong> - 100 percent advance tax for Section 44AD/44ADA presumptive</li>
                    <li><strong>Rolling</strong> - Form GST RFD-01 inverted duty refund within 2 years from end of relevant period; RoDTEP claim via shipping bill at export</li>
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
            <h2 class="section-title">Patron Accounting Services for Textile Manufacturer ITR</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Textile ITR Filing with Section 145A Inventory Valuation</td><td>Sole proprietor textile traders (ITR-3 regular books or ITR-4 Section 44AD presumptive); Partnership / LLP textile firms (ITR-5 with Section 40(b) Finance Act 2025 amended slabs Rs 3 lakh / 90% / 60%); textile companies (ITR-6 with corporate rates 22% / 25% / 30%). Section 145A inventory valuation across raw cotton, yarn, grey fabric, dyed/printed fabric, embroidered garments, finished apparel WIP categories. ICDS II compliance with Form 3CD disclosure where required.</td></tr>
                            <tr><td>Inverted Duty Structure GST Refund Coordination</td><td>Section 54(3) of CGST Act refund preparation for accumulated ITC under inverted duty structure. Rule 89(5) formula computation - Maximum Refund equals (Turnover of inverted rated supply / Adjusted Total Turnover) x Net ITC minus tax payable. Form GST RFD-01 filing on GST portal. Annexure-1 (inward/outward supplies) and Annexure-A (turnover details). Quarterly or rolling refund cycles. 2-year time limit tracking. Eligibility verification (input goods only, not services or capital goods).</td></tr>
                            <tr><td>RoDTEP Claim Coordination for Textile Exports</td><td>RoDTEP Appendix 4R rate verification by HS code (8-digit). Shipping bill filing coordination with RoDTEP option marked. ICEGATE registration support. e-scrip realization tracking. Conversion of e-scrip to basic customs duty offset. Per-unit cap verification. Claim rejection appeal coordination. For SEZ / EOU / Advance Authorisation exporters - Appendix 4RE rates from 1 June 2025. Section 28(iiib) RoDTEP receipts taxable as PGBP income.</td></tr>
                            <tr><td>Section 32 Depreciation Optimization for Textile Machinery</td><td>Section 32 block of assets selection for textile machinery. General plant and machinery 15 percent WDV vs continuous process plant 40 percent WDV - which textile machinery qualifies (some processing house machinery, drying ranges, stenters, mercerizing machines). Section 32(1)(iia) additional 20 percent on new machinery in year of acquisition. Pre-180-day vs post-180-day pro-rata rule. Capital expenditure capitalisation policy. WDV pool maintenance.</td></tr>
                            <tr><td>Section 40A(3) and 269ST Cash Compliance for Textile Cluster</td><td>Cash payment compliance to local power loom operators, weavers, dyers, embroiderers, washers, transporters - Section 40A(3) Rs 10,000 per day per party limit (Rs 35,000 for transporters). Cash receipt compliance under Section 269ST Rs 2 lakh per transaction limit. Section 271DA penalty equal to amount received. Conversion to bank/UPI/RTGS transfers. Job worker ledger reconciliation. TDS Section 194C compliance on contractor payments. Form 26Q TDS return filing.</td></tr>
                            <tr><td>Section 44AB Tax Audit and Form 3CD for Textile Sector</td><td>Tax audit Form 3CD coordination for textile manufacturers above Rs 1 crore turnover (Rs 10 crore if 95 percent+ digital both halves). 44 Form 3CD clauses including Clause 14 (ICDS II inventory), Clause 18 (Section 32 depreciation), Clause 21 (Section 40A(3) cash + Section 269ST), Clause 26 (Section 43B GST/PF/ESI timing), Clause 31 (Section 269SS / 269T loans), Clause 35 (quantitative details). CA UDIN signing.</td></tr>
                            <tr><td>Section 9B / 45(4) Partnership Reconstitution for Textile Family Firms</td><td>Capital gains computation on retirement / admission of partner in textile partnership firm or LLP under Section 9B (transfer to partner) and Section 45(4) (reconstitution). Money / asset received by partner on retirement deemed transfer. Fair market value computation. Common in textile family firms during generational handover - Tirupur, Surat, Bhiwandi, Ludhiana family-run partnerships.</td></tr>
                            <tr><td>Cluster-Specific Compliance and Multi-State Coordination</td><td>Tirupur knitted garment exporter compliance package (RoDTEP + inverted duty refund + ICEGATE). Surat MMF dyer compliance package (Section 145A category-wise + monthly inverted duty refund). Bhiwandi power loom compliance (Section 40A(3) cash discipline + Section 44AD presumptive). Panipat home textile (seasonal cycle ITR planning). Ludhiana hosiery (low-margin high-volume Section 145A). Multi-state GSTIN consolidation for textile entities operating across India.</td></tr>


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
            <h2 class="section-title">How Patron Files Your Textile Sector ITR</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A seven-step engagement that maps entity and textile sub-sector, applies Section 145A category-wise inventory valuation per ICDS II, reconciles GST and inverted duty refund eligibility under Section 54(3) CGST, coordinates RoDTEP for exporters, computes Section 32 depreciation including 32(1)(iia) additional 20 percent, audits Section 40 / 43B disallowances, runs Section 44AB tax audit where applicable, and uploads ITR with post-filing defence.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Entity and Sub-Sector Mapping</h3>
                        <p class="step-description">Identify entity type (sole prop / partnership / LLP / company / HUF / AOP) for ITR form selection. Sole prop files ITR-3 or ITR-4 (Sec 44AD presumptive); partnership / LLP files ITR-5; company files ITR-6; HUF files ITR-3 / ITR-4. Identify textile sub-sector (cotton spinning / MMF / power loom weaving / dyeing-printing / knitted garments / woven garments / hosiery / home textiles / denim / synthetic / embroidery job work / wholesale trader) for industry-specific compliance. Identify cluster (Tirupur / Surat / Bhiwandi / Panipat / Ludhiana / Coimbatore / Erode / Bhilwara) for local nuances.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Entity-form mapping</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cluster-specific compliance</span>
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
                            <span class="illustration-label">Mapped</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">Section 145A Inventory Categorization and Valuation</h3>
                        <p class="step-description">Segregate inventory into categories - raw cotton bales / cotton yarn / synthetic yarn / grey fabric WIP / dyed-printed fabric / embroidered garments / finished apparel / packing material / consumables (dyes, chemicals). Apply lower of cost or NRV per ICDS II to EACH category separately. Cost includes taxes/duties/cess paid. NRV equals estimated selling price MINUS completion cost MINUS cost necessary for sale. Document valuation method (FIFO or weighted average cost). Lump-sum valuation hides 10-20 percent unsold seasonal write-downs.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Category-wise NRV</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FIFO / Weighted Avg</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="15" width="100" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="32" text-anchor="middle" font-size="11" font-weight="800" fill="#14365F">Section 145A</text>
                                    <text x="60" y="48" text-anchor="middle" font-size="9" fill="#14365F">Cotton / Yarn / Fabric</text>
                                    <text x="60" y="63" text-anchor="middle" font-size="9" font-weight="700" fill="#E8712C">Cost or NRV (lower)</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Categorized</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">GST Reconciliation and Inverted Duty Refund Eligibility</h3>
                        <p class="step-description">Reconcile GSTR-1 / GSTR-3B / GSTR-9 turnover to ITR turnover - document timing differences and exempt supplies. Identify inverted duty applicable supplies (cotton apparel below Rs 1,000 at 5 percent output with 12-18 percent input ITC; some MMF segments). Compute Rule 89(5) maximum refund formula: (Turnover of inverted rated supply / Adjusted Total Turnover) x Net ITC minus tax payable. File Form GST RFD-01 if eligible refund accumulated. Track 2-year time limit from end of relevant period. Input services and capital goods NOT eligible.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sec 54(3) CGST + Rule 89(5)</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form RFD-01</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="20" width="42" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="31" y="40" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Input</text>
                                    <text x="31" y="56" text-anchor="middle" font-size="13" font-weight="800" fill="#E8712C">18%</text>
                                    <path d="M55 50h12" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                                    <rect x="68" y="20" width="42" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="89" y="40" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Output</text>
                                    <text x="89" y="56" text-anchor="middle" font-size="13" font-weight="800" fill="#10B981">5%</text>
                                </svg>
                            </div>
                            <span class="illustration-label">IDS Refund</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">RoDTEP and Export Incentive Reconciliation</h3>
                        <p class="step-description">For exporters - reconcile shipping bills filed during FY with RoDTEP option marked. Verify HS code accuracy (8-digit) against Appendix 4R (DTA) or Appendix 4RE (SEZ/EOU/AA). Compute FOB-rebate at notified rate (0.3 to 4.3 percent) with per-unit cap check. Track e-scrip generation status. Reconcile RoDTEP credit utilized for basic customs duty in current and subsequent FY. Section 28(iiib) duty drawback / RoDTEP receipts taxable as PGBP income. ICEGATE registration support. DGFT Notification 60/2025-26 (23 Feb 2026) 50 percent reduction reversed by Notification 66/2025-26 (23 Mar 2026).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Appendix 4R / 4RE</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>0.3-4.3% FOB</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="15" width="80" height="60" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/>
                                    <text x="60" y="34" text-anchor="middle" font-size="11" font-weight="700" fill="#14365F">RoDTEP</text>
                                    <text x="60" y="50" text-anchor="middle" font-size="13" font-weight="800" fill="#E8712C">0.3-4.3%</text>
                                    <text x="60" y="64" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">FOB Rebate</text>
                                </svg>
                            </div>
                            <span class="illustration-label">RoDTEP Claimed</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">Section 32 Depreciation Computation</h3>
                        <p class="step-description">Identify textile machinery into Section 32 blocks - general plant and machinery 15 percent WDV (looms, knitting machines, embroidery machines), continuous process plant 40 percent WDV (some processing house machinery - drying ranges, stenters, mercerizing machines). Apply Section 32(1)(iia) additional 20 percent on NEW machinery acquired in FY (manufacturing entity); pro-rata if used less than 180 days; balance NEVER carried forward. Update WDV pool with additions, disposals, depreciation charged. Factory buildings 10 percent; computers 40 percent.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>15% / 40% WDV</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sec 32(1)(iia) +20%</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="15" width="100" height="60" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="60" y="32" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Sec 32 Plant</text>
                                    <line x1="20" y1="42" x2="100" y2="42" stroke="#E8712C" stroke-width="1"/>
                                    <text x="60" y="55" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">15% Gen | 40% CPP</text>
                                    <text x="60" y="68" text-anchor="middle" font-size="9" font-weight="800" fill="#E8712C">+20% Sec 32(1)(iia)</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Depreciation Set</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">Section 40 / 43B Disallowance Audit</h3>
                        <p class="step-description">Section 40(a) TDS verification - all payments to job workers (194C 1/2 percent), commission agents (194H 5 percent), goods purchases (194Q 0.1 percent above Rs 50 lakh) covered by TDS. Section 40A(2) related party transactions - common in textile family firms (intra-group dyeing, commission). Section 40A(3) cash payment Rs 10,000 limit per day per party (Rs 35,000 for transporters) - critical for Bhiwandi power loom, Tirupur job workers, Surat embroidery vendors. Section 43B statutory dues GST / PF / ESI / gratuity actual payment basis before Section 139(1) due date. Section 269ST cash receipt Rs 2 lakh limit; Section 271DA penalty equal to amount.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sec 40A(3) Rs 10K</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sec 43B actual payment</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="15" width="100" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="32" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Sec 40 / 43B Audit</text>
                                    <text x="60" y="48" text-anchor="middle" font-size="9" font-weight="600" fill="#14365F">TDS / 40A(3) / 43B</text>
                                    <text x="60" y="63" text-anchor="middle" font-size="9" font-weight="700" fill="#E8712C">Disallowance check</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Audited</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">ITR Filing and Post-Filing Defence</h3>
                        <p class="step-description">File entity-appropriate ITR on incometax.gov.in. E-verify within 30 days. Track refund status. Respond to Section 143(1) intimation, Section 142(1) scrutiny, Section 139(9) defective return within 15 days. For tax audit cases - file Form 3CD by 30 September 2026 followed by audit-case ITR by 31 October 2026. Coordinate with GST Refund team for ongoing inverted duty refund cycles. Coordinate with GSTAT Appeal Exporters for any RoDTEP / refund appeal escalation. Section 234B/234C interest at 1 percent per month for advance tax shortfall.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>e-Verify within 30 days</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Post-filing defence</span>
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
            <h2 class="section-title">Document Checklist for Textile Sector ITR</h2>
            <div class="content-text">
                
                
                <p>Textile sector ITR requires documentation across six categories: entity and identity, books of accounts and inventory (with category-wise breakdown), GST reconciliation, export and RoDTEP, Section 40 disallowances, and audit (where applicable).</p>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">A. Entity and Identity</h3>
                <ul>
                    <li>PAN of entity (sole prop personal PAN; firm/LLP/company entity PAN); GSTIN for every state of operation</li>
                    <li>IEC certificate (for exporters) - DGFT-issued 10-digit code mandatory for any import/export</li>
                    <li>Partnership Deed / LLP Agreement; LLPIN / Firm registration certificate (where applicable)</li>
                    <li>Bank account details for refund</li>
                    <li>DSC (Class 3) of authorized signatory for ITR-5 / ITR-6 e-filing</li>
                    <li>MCA CIN (for Pvt Ltd / Public Ltd); Trade licence / weights and measures licence</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">B. Books of Accounts and Inventory (Category-Wise)</h3>
                <ul>
                    <li>Profit and Loss Account FY 2025-26 with sub-classification by yarn / fabric / finished goods</li>
                    <li>Balance Sheet as on 31 March 2026 with Notes; Trial balance</li>
                    <li>Inventory register with category-wise quantity and valuation - raw cotton bales (kg, bales), cotton yarn (kg, cones), synthetic yarn, grey fabric (metres), dyed-printed fabric, embroidered garments, finished apparel (pieces by SKU)</li>
                    <li>Section 145A valuation memo with cost vs NRV documentation per category</li>
                    <li>WIP segregation memo (where multiple processing stages)</li>
                    <li>Closing stock physical verification report (where available)</li>
                    <li>Fixed asset register with Section 32 block-of-assets WDV (Plant and Machinery 15%, Continuous Process Plant 40%, Factory Building 10%, POS / Computer 40%)</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">C. GST Reconciliation and Inverted Duty</h3>
                <ul>
                    <li>GSTR-1 / GSTR-3B / GSTR-9 / GSTR-9C for FY 2025-26 (every state GSTIN)</li>
                    <li>Output GST classification - taxable, exempt, zero-rated, non-GST, inverted-rate supply</li>
                    <li>Input GST classification - taxable goods, exempt goods, services (NOT eligible for inverted refund), capital goods (NOT eligible for inverted refund)</li>
                    <li>GST refund applications filed (Form RFD-01) and acknowledgements; Annexure-1 (inward/outward); Annexure-A (turnover details)</li>
                    <li>Reconciliation with ITR turnover - timing differences, exempt supplies, advance receipts</li>
                    <li>Form 26AS, AIS, TIS download from incometax.gov.in</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">D. Export and RoDTEP</h3>
                <ul>
                    <li>Shipping bills filed during FY with RoDTEP option marked</li>
                    <li>HS code summary (8-digit) of exports against Appendix 4R or Appendix 4RE</li>
                    <li>RoDTEP e-scrip realization summary (issued, transferred, utilized for customs duty)</li>
                    <li>Bank Realisation Certificates (BRC) / Foreign Inward Remittance Certificate (FIRC)</li>
                    <li>Export agreement / Letter of Credit (where applicable)</li>
                    <li>IEC certificate copy with current address; ICEGATE registration confirmation</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">E. Section 40 Disallowances Documentation</h3>
                <ul>
                    <li>TDS payment challans (194C job workers - 1%/2%, 194H commission agents 5%, 194Q goods purchase 0.1% above Rs 50 lakh)</li>
                    <li>Form 26Q TDS return acknowledgements (quarterly)</li>
                    <li>Related party transactions list for Section 40A(2) - common in textile family firms (intra-group dyeing, commission)</li>
                    <li>Cash payment register with daily party-wise summary for Section 40A(3) compliance check (Rs 10,000 limit; Rs 35,000 for transporters)</li>
                    <li>Section 43B statutory dues - GST, PF, ESI, gratuity, leave encashment payment proofs (paid before due date Section 139(1))</li>
                    <li>Section 269ST cash receipt above Rs 2 lakh log (target: zero) - relevant for wholesale fabric traders in Erode market</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">F. Audit (Where Applicable) and Cluster-Specific</h3>
                <ul>
                    <li>Tax audit Form 3CA-3CD or 3CB-3CD with all 44 clauses including Clause 14 (ICDS II), Clause 18 (Section 32), Clause 21 (Section 269ST + Section 40A(3)), Clause 26 (Section 43B), Clause 31 (loans), Clause 35 (quantitative details)</li>
                    <li>CA UDIN for audit signing; engagement letter and management representation letter</li>
                    <li>Job worker ledger (dyer, embroiderer, washer, stitcher) with TDS deduction proof</li>
                    <li>Cotton MSP procurement records (for spinning mills) - medium staple Rs 7,121/quintal, long staple Rs 7,521/quintal FY 2025-26</li>
                    <li>Section 9B / 45(4) partnership reconstitution working (where partner admitted/retired)</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Textile Manufacturer ITR Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Section 145A lump-sum inventory hiding category-wise NRV write-down</td><td>ICDS II mandates lower of cost or NRV CATEGORY-wise. Textile inventory has 6+ distinct categories (raw cotton, yarn, grey fabric, dyed fabric, finished apparel, packaging). Lump-sum valuation hides potential write-downs of 10-20 percent on unsold seasonal stock - direct deduction lost. A Tirupur knitted garment exporter with Rs 12 crore turnover misclassifying inventory NRV at the post-festival mark loses Rs 30 to 50 lakh deductible write-down. DIY platforms accept lump-sum totals; Patron rebuilds category-wise valuation with NRV documentation.</td></tr>
                            <tr><td>Inverted duty refund unclaimed - working capital drain</td><td>Section 54(3) refund is NOT automatic - must be claimed in Form GST RFD-01 within 2 years. Quarterly or monthly cycles depending on accumulation rate. Eligibility constraint - input services and capital goods NOT eligible. Rule 89(5) formula - Adjusted Total Turnover excludes exports. A Surat MMF dye house ignoring inverted duty refund accumulates Rs 1.5 to 4 crore unutilised ITC over 18 months that drains working capital. Patron files refund-cycle aligned with ITR.</td></tr>
                            <tr><td>RoDTEP rate misclassification - e-scrip recovery and penalty</td><td>DGFT notifies and revises RoDTEP rates multiple times per year. February 2026 50 percent reduction; March 2026 reversal per Notification 66/2025-26. Per-unit caps apply for some products. HS code 8-digit accuracy critical. Wrong rate use equals e-scrip recovery and penalty under Customs Section 28 with interest at 15 percent per annum. Patron monitors DGFT notifications monthly and reconciles shipment-by-shipment against Appendix 4R / 4RE.</td></tr>
                            <tr><td>Section 32 continuous process plant misclassification</td><td>Some textile machinery (drying ranges, stenters, mercerizing machines, certain processing house equipment) qualifies for 40 percent WDV vs general 15 percent - but classification is fact-specific and judicial position evolving. Wrong classification equals Section 32 disallowance and reassessment. Section 32(1)(iia) additional 20 percent - if used less than 180 days, only 50 percent additional in year of acquisition; balance NEVER carried forward; missed claim equals permanent loss. Patron evaluates machinery-by-machinery against CBDT guidance.</td></tr>
                            <tr><td>Section 40A(3) cash payment violation - 100 percent disallowance</td><td>Rs 10,000 per day per party limit (Rs 35,000 for transporters). 100 percent disallowance. Bhiwandi power loom, Tirupur job workers, Surat embroidery vendors - cluster norm is daily cash. A Bhiwandi power loom operator paying Rs 12,000 daily cash to weavers loses 100 percent disallowance under Section 40A(3) - turning Rs 36 lakh annual labour into firm tax addition of Rs 11 lakh. Patron designs party-wise daily settlement reconciliation and recommends bank/UPI shift for compliance.</td></tr>


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
            <h2 class="section-title">Textile Manufacturer ITR Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 7,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Sole Proprietor Textile (ITR-3 / ITR-4 Section 44AD Presumptive)</td><td>Starting from Rs 7,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Partnership / LLP Textile Firm (ITR-5 with Section 40(b) Optimization)</td><td>Starting from Rs 12,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Bundle: ITR + Section 44AB Tax Audit + Form 3CD</td><td>Starting from Rs 22,998 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Inverted Duty GST Refund Add-on (per RFD-01 cycle)</td><td>Starting from Rs 14,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>RoDTEP Claim Coordination Add-on</td><td>Starting from Rs 9,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Pvt Ltd Textile Manufacturer (ITR-6 with Audit)</td><td>Starting from Rs 35,000 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Multi-State Textile Group (Multiple GSTINs + Branch Transfer)</td><td>Starting from Rs 55,000 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 9B / 45(4) Partnership Reconstitution</td><td>Starting from Rs 14,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 92E Transfer Pricing (Related Party Imports)</td><td>Starting from Rs 24,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 143(1) / 143(2) / 142(1) Notice Response</td><td>Starting from Rs 4,999 (Excl. GST and Govt. Charges)</td></tr>


                    </tbody>
                </table>
                </div>
<p style="font-size:13px;color:var(--text-muted);margin-top:14px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. GST extra at 18%. Pricing varies by entity type, turnover, audit applicability, multi-state GSTINs, inverted duty refund cycle frequency, RoDTEP shipment volume, and cluster-specific complexity.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Textile Manufacturers consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%20consultation%20on%20Section%20145A%20inventory%20valuation%2C%20inverted%20duty%20refund%2C%20RoDTEP%2C%20and%20ITR%20for%20my%20textile%20business." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        
                            <tr><td>Sole Proprietor Textile ITR-4 (Presumptive)</td><td>5-7 working days</td><td>31 July 2026</td></tr>
                            <tr><td>Sole Proprietor Textile ITR-3 (Regular)</td><td>7-10 working days</td><td>31 July 2026</td></tr>
                            <tr><td>Partnership / LLP Textile ITR-5 (Non-Audit)</td><td>10-14 working days</td><td>31 July 2026</td></tr>
                            <tr><td>Textile Pvt Ltd ITR-6 (Non-Audit)</td><td>14-21 working days</td><td>31 October 2026 (audit due regardless)</td></tr>
                            <tr><td>Tax Audit Form 3CD + Audit-Case ITR</td><td>21-30 working days</td><td>30 Sep 2026 (Form 3CD); 31 Oct 2026 (ITR)</td></tr>
                            <tr><td>Inverted Duty GST Refund (RFD-01) per Cycle</td><td>14-21 working days</td><td>Within 2 years from end of relevant period</td></tr>
                            <tr><td>RoDTEP Claim Coordination</td><td>Rolling per shipment</td><td>At export shipping bill filing</td></tr>
                            <tr><td>Section 9B / 45(4) Partnership Reconstitution</td><td>14-21 working days</td><td>In FY of partner retirement/admission</td></tr>
                            <tr><td>Multi-State GST + ITR Consolidation</td><td>21-30 working days</td><td>31 July / 31 October 2026</td></tr>
                            <tr><td>Section 92E Transfer Pricing Case</td><td>30-45 working days</td><td>30 November 2026</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Statutory deadline buffer:</strong> Patron blocks engagements 30 days before the due date to ensure clean filing. Tax Audit Form 3CD due 30 September 2026 - one month before audit-case ITR. Form 3CEB transfer pricing case ITR due 30 November 2026 - relevant for textile importers buying from related party suppliers overseas. Section 211 advance tax instalments at 15 June, 15 September, 15 December, and 15 March (15 percent, 45 percent, 75 percent, 100 percent cumulative). Section 234B/234C interest at 1 percent per month for advance tax shortfall. Late filing triggers Section 234F fee (up to Rs 5,000), loss of business loss carry-forward, and Section 271B audit penalty up to Rs 1.5 lakh. <strong>Urgency note:</strong> Inverted duty refund time limit 2 YEARS from end of relevant period - for FY 2024-25, applications must be filed by 31 March 2027. RoDTEP e-scrip generation post-shipment can take 30-90 days; track status via ICEGATE. Section 32(1)(iia) additional depreciation - if machinery used less than 180 days, only 50 percent additional in year of acquisition; balance NEVER carried forward; missed claim equals permanent loss. Section 145A inventory mis-valuation creates compounding tax exposure across years - opening WIP and closing WIP both need correct categorization.

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
            <h2 class="section-title">Benefits of CA-Led Textile Manufacturer ITR Filing</h2>
        </div>
        
                <div class="features-grid">
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
                        <h3 class="feature-title">Section 145A Category-Wise Valuation</h3>
                        <p class="feature-text">ICDS II compliance with 6+ inventory categories - raw cotton, yarn, grey fabric, dyed fabric, finished apparel, packaging - each at lower of cost or NRV. Captures 10-20 percent unsold seasonal write-downs that lump-sum valuation hides. FIFO or weighted average documented. Direct deductible recovered.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                        <h3 class="feature-title">Inverted Duty Refund Discipline</h3>
                        <p class="feature-text">Section 54(3) CGST refund filed in Form GST RFD-01 within 2-year time limit. Rule 89(5) formula computation. Quarterly or monthly cycles aligned with ITR. Adjusted Total Turnover excludes exports. Working capital unlocked - 6 to 12 percent of monthly turnover for cotton-chain manufacturers.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                        <h3 class="feature-title">RoDTEP Rate Tracking</h3>
                        <p class="feature-text">DGFT notifications monitored monthly. Shipment-by-shipment reconciliation against Appendix 4R / 4RE. HS code 8-digit accuracy verified. e-scrip realization tracked via ICEGATE. Wrong-rate recovery and Customs Section 28 penalty averted. February-March 2026 rate volatility navigated.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg></div>
                        <h3 class="feature-title">Section 32 Continuous Process Plant Decision</h3>
                        <p class="feature-text">Drying ranges, stenters, mercerizing machines evaluated for 40 percent WDV qualification vs general 15 percent. Section 32(1)(iia) additional 20 percent on new machinery captured in year of acquisition. Pre-180-day vs post-180-day pro-rata applied. Permanent depreciation loss prevented.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
                        <h3 class="feature-title">Section 40A(3) Cash Payment Discipline</h3>
                        <p class="feature-text">Rs 10,000 daily limit per party (Rs 35,000 for transporters). Bhiwandi weavers, Tirupur job workers, Surat embroiderers, washers, stitchers daily cash converted to bank/UPI. Party-wise daily settlement reconciliation. 100 percent disallowance averted. Form 3CD Clause 21 fully populated.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                        <h3 class="feature-title">Section 43B Statutory Dues Timing</h3>
                        <p class="feature-text">GST, PF, ESI, gratuity payment dates tracked against Section 139(1) due date. Seasonal cash flow (Diwali / wedding October-December peak; January-February lean) - delayed payments pushed to next AY caught early. Section 43B disallowance averted. Cash-flow planning for actual payment basis.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
                        <h3 class="feature-title">Cluster-Specific Compliance</h3>
                        <p class="feature-text">Tirupur knitted garment exporter (RoDTEP + inverted duty), Surat MMF dyer (monthly inverted duty), Bhiwandi power loom (Section 40A(3) discipline + Section 44AD), Panipat home textile (seasonal cycle), Ludhiana hosiery (Section 145A), Coimbatore spinning (continuous process plant).</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                        <h3 class="feature-title">280+ Textile Engagements</h3>
                        <p class="feature-text">280+ textile sector ITRs filed across Tirupur, Surat, Bhiwandi, Panipat, Ludhiana, Coimbatore, Erode, and Bhilwara since 2019. Cluster economics, supply chain, working capital cycle understood by CAs who read your dyer ledger and segment WIP from finished goods.</p>
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
                
                
                <p style="margin-bottom:24px;"><strong>10,000+ Businesses Served</strong> | <strong>4.9 Google Rating</strong> | <strong>50,000+ Documents Filed</strong> | <strong>15+ Years Experience</strong> | <strong>280+ Textile Sector Engagements</strong></p>
                <div class="testimonial-quote" style="background:var(--blue-lighter);border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;margin-bottom:20px;">
                    <p style="font-style:italic;font-size:15px;line-height:1.7;margin-bottom:12px;">"Patron audited 24 months of GSTR-3B data and identified Rs 2.8 crore accumulated unutilised ITC eligible under Section 54(3) of CGST Act. Filed Form GST RFD-01 with Rule 89(5) formula computation - first refund Rs 1.2 crore credited within 90 days; balance Rs 1.6 crore in 4 subsequent cycles. Total benefit: Rs 2.8 crore working capital unlocked plus Rs 12 lakh tax savings on inventory write-down."</p>
                    <p style="font-size:13px;color:var(--text-muted);margin:0;"><strong>Sankar Knits and Apparel</strong> - 4-Partner Tirupur Knitted Garment Exporter, FY 2025-26 turnover Rs 18 crore</p>
                </div>
                <div class="testimonial-quote" style="background:var(--blue-lighter);border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;margin-bottom:24px;">
                    <p style="font-style:italic;font-size:15px;line-height:1.7;margin-bottom:12px;">"Patron flagged Section 145A and ICDS II - inventory must be category-wise lower of cost or NRV. They segregated into raw chemicals, dyes, undyed grey fabric, partially-dyed WIP, finished dyed fabric. Identified Rs 14 lakh unsold dyed stock from a buyer cancellation - NRV 25 percent below cost equals Rs 14 lakh write-down. Restated book profit Rs 14 lakh, firm tax saved approximately Rs 4.5 lakh."</p>
                    <p style="font-size:13px;color:var(--text-muted);margin:0;"><strong>Patel Textiles</strong> - 3-Partner Surat MMF Dyeing Partnership, FY 2025-26 book profit Rs 28 lakh</p>
                </div>
                <p style="font-size:14px;color:var(--text-secondary);"><strong>Outcome Proof:</strong> Rs 4.4 crore unlocked across three textile sector engagements in FY 2024-25: (a) Tirupur knitted garment exporter Rs 2.8 crore inverted duty refund unlocked plus Rs 12 lakh inventory write-down deduction; (b) Surat MMF dyeing partnership Rs 5.3 lakh annual savings on Section 145A category-wise valuation and Section 40(b) Finance Act 2025 recomputation, plus Rs 30 lakh annual ongoing inverted duty refund flow; (c) Bhiwandi power loom proprietor Rs 17 lakh Section 40A(3) compliance restructure (cash to UPI weaver payments) preventing Rs 11 lakh annual disallowance plus shifting to Section 44AD presumptive saving Rs 5 lakh annually.</p>
                <p style="font-size:14px;color:var(--text-secondary);"><strong>Four-Office City Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves textile manufacturers across major cluster geographies - Pune (textile machinery imports, Maharashtra power loom belt), Mumbai (Bhiwandi power loom, Crawford Market wholesale, Mumbai garment exporters), Delhi NCR (woven garment exporters, home textile, denim retailers), Gurugram (textile e-commerce, niche premium garment brands). For Tirupur and Surat clusters, we coordinate via virtual office and on-site visits.</p>


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
                        
                            <tr><td>Section 145A inventory valuation</td><td>Lump-sum total (ICDS II non-compliant)</td><td>Category-wise lower of cost or NRV with FIFO / weighted average</td></tr>
                            <tr><td>Inverted duty refund</td><td>Often unfiled or beyond 2-year limit</td><td>Quarterly/monthly RFD-01 cycle with Rule 89(5) formula</td></tr>
                            <tr><td>RoDTEP rate tracking</td><td>Static historical rate</td><td>Monthly DGFT notification monitoring + per-shipment reconciliation</td></tr>
                            <tr><td>Section 32 continuous process plant</td><td>Blanket 15 percent</td><td>Machinery-by-machinery 15% vs 40% evaluation</td></tr>
                            <tr><td>Section 32(1)(iia) additional depreciation</td><td>Often missed</td><td>20 percent on new machinery captured in year of acquisition</td></tr>
                            <tr><td>Section 40A(3) cash payment</td><td>Lumped into wages / labour</td><td>Party-wise daily Rs 10,000 limit log + bank/UPI shift recommendation</td></tr>
                            <tr><td>Section 43B GST/PF/ESI timing</td><td>Accrual basis (incorrect)</td><td>Actual payment before Section 139(1) due date</td></tr>
                            <tr><td>Section 269ST cash receipt</td><td>Often missed at wholesale</td><td>Daily cash receipt log + Section 271DA exposure memo</td></tr>
                            <tr><td>Section 9B / 45(4) partnership reconstitution</td><td>Capital gains skipped</td><td>FMV computation + capital gains pre-filing</td></tr>
                            <tr><td>GSTIN-ITR-AIS reconciliation</td><td>State silos</td><td>Three-way reconciliation memo annexed to ITR</td></tr>
                            <tr><td>Cluster expertise</td><td>Generic CA</td><td>280+ textile engagements across Tirupur / Surat / Bhiwandi / Panipat</td></tr>


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
                
                
                <p>Textile sector clients frequently need adjacent compliance work. We bundle the following services with Textile Manufacturer ITR engagements:</p>
                <ul>
                    <li><a href="/itr-for-business">ITR for Business (HUB - all 6 non-corporate entity types)</a> - sole proprietorship, partnership firm, LLP, HUF, AOP/BOI ITR filing</li>
                    <li><a href="/itr-for-llp-partnership">ITR for LLP and Partnership</a> - Section 40(b) Finance Act 2025 amended slabs + Section 9B / 45(4) reconstitution</li>
                    <li><a href="/income-tax-return">Income Tax Return (general overview)</a> - end-to-end ITR filing across all heads of income</li>
                    <li><a href="/gst-refund">GST Refund (inverted duty + zero-rated export refunds)</a> - Section 54(3) RFD-01 filing with Rule 89(5) formula</li>
                    <li><a href="/gstat-appeal-exporters">GSTAT Appeal Exporters (RoDTEP / refund rejection)</a> - first appellate appeal for RoDTEP and inverted duty refund rejections</li>
                    <li><a href="/gstat-appeal-manufacturers">GSTAT Appeal Manufacturers (ITC mismatch / classification)</a> - manufacturer-side ITC and classification disputes</li>
                    <li><a href="/tax-planning-services">Tax Planning Services</a> - Section 32 depreciation, capital expenditure planning, advance tax planning</li>
                    <li><a href="/income-tax-notice-for-defective-return">Income Tax Notice for Defective Return</a> - Section 139(9) defective return response</li>
                    <li><a href="/income-tax-notice">Income Tax Notice (Section 143/148 response)</a> - intimation, scrutiny, reassessment notice handling</li>
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
                
                
                <p><strong>Governing Acts and Rules:</strong></p>
                <ul>
                    <li><strong>Income Tax Act 1961</strong> - applies to AY 2026-27 (FY 2025-26 income) per Section 536(2)(c) of ITA 2025. Sections 28-44 (PGBP charging and computation); 32 (depreciation); 32(1)(iia) (additional 20% on new machinery in manufacturing); 40 (disallowances); 40(a) (TDS non-deduction); 40A(2) (related party); 40A(3) (cash payment Rs 10,000 / Rs 35,000 transporter); 43B (statutory dues actual payment); 44AA (books); 44AB (audit); 44AD (presumptive Rs 3 cr digital / Rs 2 cr); 145A (inventory valuation - lower of cost or NRV); 145(2) (ICDS notification); 9B / 45(4) (partnership reconstitution); 269ST (cash receipt Rs 2 lakh); 271DA (Section 269ST penalty); 28(iiib) (RoDTEP receipts taxable); 234A/B/C (interest); 234F (late fee); 270A (under-reporting); 271B (audit failure)</li>
                    <li><strong>Income Tax Act 2025</strong> - applies Tax Year 2026-27 onwards (FY 2026-27 from 1 April 2026); Section 277 of ITA 2025 retains lower-of-cost-or-NRV principle from Section 145A</li>
                    <li><strong>Income Tax Rules 1962</strong> - Schedule II depreciation rates</li>
                    <li><strong>Income Computation and Disclosure Standards (ICDS)</strong> - notified under Section 145(2); ICDS II Valuation of Inventories (FIFO or weighted average; lower of cost or NRV; category-wise)</li>
                    <li><strong>CGST Act 2017</strong> - Section 54(3) inverted duty refund; Section 16 ITC eligibility</li>
                    <li><strong>CGST Rules 2017</strong> - Rule 89(5) refund formula (Maximum Refund equals (Inverted-rated turnover / Adjusted Total Turnover) x Net ITC minus tax payable)</li>
                    <li><strong>Foreign Trade Policy 2023</strong> - Para 4.54 RoDTEP scheme; Appendix 4R (DTA exporters); Appendix 4RE (SEZ/EOU/Advance Authorisation from 1 June 2025)</li>
                    <li><strong>DGFT Notifications</strong> - 60/2025-26 (23 February 2026) RoDTEP 50% reduction; 66/2025-26 (23 March 2026) restoration</li>
                    <li><strong>Customs Tariff Act 1975</strong> - HS code classification; textile chapters 50-63</li>
                    <li><strong>Finance Act 2025</strong> - amendments to Section 40(b), other PGBP provisions</li>
                    <li><strong>Indian Partnership Act 1932</strong> (for partnership firms); <strong>LLP Act 2008</strong> (for LLPs); <strong>Companies Act 2013</strong> (for textile companies)</li>
                </ul>
                <p><strong>Penalty Provisions:</strong></p>
                <ul>
                    <li><strong>Section 234F</strong> late filing fee: Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh)</li>
                    <li><strong>Section 234A / 234B / 234C</strong> interest: 1 percent per month on tax shortfall and advance tax default</li>
                    <li><strong>Section 271B</strong> tax audit default: 0.5 percent of turnover or Rs 1,50,000 (whichever lower)</li>
                    <li><strong>Section 270A</strong>: 50 percent under-reporting; 200 percent misreporting (high risk if Section 145A non-compliance proven)</li>
                    <li><strong>Section 271A</strong>: Rs 25,000 for books non-maintenance under Section 44AA</li>
                    <li><strong>Section 269ST / 271DA</strong>: 100 percent of cash received in violation</li>
                    <li><strong>Section 40A(3)</strong>: 100 percent disallowance of cash payments above Rs 10,000 per person per day</li>
                    <li><strong>GST Section 122/125</strong>: false claim of inverted duty refund - penalty up to amount of refund or Rs 25,000 whichever higher</li>
                    <li><strong>GST Section 73/74</strong>: excess refund recovery with interest at 18 percent per annum</li>
                    <li><strong>Customs Section 28</strong>: RoDTEP wrongly availed recoverable with interest 15 percent per annum</li>
                </ul>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                    <table>
                        <thead>
                            <tr>
                                <th>Provision</th>
                                <th>What It Says</th>
                                <th>Textile Impact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Section 28-44 ITA 1961</td><td>PGBP charging and computation</td><td>Textile business income computation</td></tr>
                            <tr><td>Section 32 ITA 1961</td><td>Depreciation block of assets</td><td>15% general P&amp;M; 40% continuous process plant; 10% factory buildings; 40% computers</td></tr>
                            <tr><td>Section 32(1)(iia) ITA 1961</td><td>Additional depreciation</td><td>20% on new machinery in manufacturing; pro-rata if used &lt;180 days</td></tr>
                            <tr><td>Section 40 ITA 1961</td><td>Disallowances</td><td>Sec 40(a) TDS; Sec 40A(2) related party; Sec 40A(3) cash &gt; Rs 10K (Rs 35K transporter)</td></tr>
                            <tr><td>Section 43B ITA 1961</td><td>Statutory dues actual payment</td><td>GST, PF, ESI, gratuity actual payment basis before Sec 139(1)</td></tr>
                            <tr><td>Section 44AB ITA 1961</td><td>Tax audit</td><td>Business Rs 1 cr / Rs 10 cr digital; Form 3CD; CA UDIN; due 30 September 2026</td></tr>
                            <tr><td>Section 44AD ITA 1961</td><td>Presumptive business</td><td>Resident Indl/HUF/Firm; Rs 3 cr digital / Rs 2 cr; 8%/6%; LLP/Co excluded</td></tr>
                            <tr><td>Section 145A ITA 1961</td><td>Inventory valuation</td><td>Lower of cost or NRV per ICDS II; cost includes taxes/duties/cess</td></tr>
                            <tr><td>ICDS II</td><td>Valuation of inventories</td><td>FIFO or weighted average; category-wise lower of cost or NRV</td></tr>
                            <tr><td>Section 269ST / 271DA ITA 1961</td><td>Cash receipt limit</td><td>No cash receipt above Rs 2 lakh per transaction; penalty equal to amount</td></tr>
                            <tr><td>Section 9B / 45(4) ITA 1961</td><td>Partnership reconstitution</td><td>Capital gains on partner retirement / admission</td></tr>
                            <tr><td>Section 28(iiib) ITA 1961</td><td>Duty drawback / RoDTEP receipts</td><td>Taxable as PGBP income in year of receipt / accrual</td></tr>
                            <tr><td>Section 54(3) CGST Act 2017</td><td>Inverted duty refund</td><td>Refund of unutilised ITC; Form RFD-01; 2-year time limit</td></tr>
                            <tr><td>Rule 89(5) CGST Rules 2017</td><td>Refund formula</td><td>Maximum Refund equals (Inverted-rated turnover / Adjusted Total Turnover) x Net ITC minus tax payable</td></tr>
                            <tr><td>DGFT FTP 2023 Para 4.54</td><td>RoDTEP scheme</td><td>Remission rates per Appendix 4R / 4RE; e-scrip transferable; 0.3-4.3% FOB</td></tr>
                            <tr><td>DGFT Notification 60/2025-26</td><td>RoDTEP 50% cap</td><td>Rates reduced 50% (later reversed by Notification 66/2025-26)</td></tr>
                            <tr><td>Finance Act 2025</td><td>Various amendments</td><td>Section 40(b) partner remuneration slabs revised; other PGBP changes</td></tr>
                        </tbody>
                    </table>
                </div>
                <p style="font-size:13px;color:var(--text-muted);margin-top:14px;font-style:italic;">External references: Income Tax e-Filing Portal - <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">incometax.gov.in</a> (CBDT - ITR utilities, Section 145A FAQ, Form 3CD); CBIC GST Portal - <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">gst.gov.in</a> (Section 54(3) circulars, RFD-01 filing); DGFT - <a href="https://www.dgft.gov.in/" target="_blank" rel="noopener">dgft.gov.in</a> (RoDTEP Appendix 4R / 4RE rates, scheme notifications); ICEGATE - <a href="https://www.icegate.gov.in/" target="_blank" rel="noopener">icegate.gov.in</a> (shipping bill, e-scrip realisation).</p>


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
                    <p class="faq-expanded__lead">Common questions on Section 145A inventory valuation per ICDS II for textile manufacturers, inverted duty structure GST refund eligibility under Section 54(3) of CGST Act, RoDTEP scheme rates for textile exports, Section 32 depreciation rates for textile machinery, ITR form selection by entity type, MMF versus cotton GST rate differences, Section 194C TDS on job worker payments, and Section 44AB tax audit thresholds for textile businesses for AY 2026-27.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Textile Manufacturers',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How is closing stock valued for textile manufacturers under Section 145A?</h3>
                        <div class="faq-expanded__a"><p>Section 145A of Income Tax Act 1961 mandates inventory valuation at lower of actual cost OR Net Realisable Value (NRV) per ICDS II. Cost includes any taxes/duties/cess paid. Valuation is done CATEGORY-WISE - raw cotton, yarn, grey fabric, dyed fabric, finished apparel, packaging are separate categories with different NRV trajectories. Cost methods: First-In First-Out (FIFO) or weighted average. NRV equals estimated selling price MINUS estimated completion cost MINUS expenses for sale. Lump-sum valuation fails ICDS II. For unsold seasonal collection, NRV often drops post-festival - a Tirupur knitted garment exporter can claim Rs 30-50 lakh write-down on Rs 12 crore turnover.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can textile manufacturers claim GST refund under inverted duty structure?</h3>
                        <div class="faq-expanded__a"><p>YES. Under Section 54(3) of CGST Act 2017 read with Rule 89(5) of CGST Rules 2017. Eligible: registered taxpayers with accumulated unutilised ITC due to inverted tax structure (output rate lower than input rate). Common in textile cotton chain (apparel below Rs 1,000 at 5 percent output; yarn 5 percent + accessories 12 percent + dyes 18 percent input). Form GST RFD-01 with Rule 89(5) formula - Maximum Refund equals (Turnover of inverted rated supply / Adjusted Total Turnover) x Net ITC minus tax payable. Time limit 2 years from end of relevant period. Input services and capital goods NOT eligible - only input goods. Hinglish: Inverted duty refund textile mein kaise milega? - Section 54(3) under RFD-01.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the RoDTEP rate for textile exports in 2026?</h3>
                        <div class="faq-expanded__a"><p>RoDTEP (Remission of Duties and Taxes on Exported Products) rates for textile HS codes range 0.3 to 4.3 percent of FOB value with per-unit caps for some products. Notified in Appendix 4R (DTA exporters) and Appendix 4RE (SEZ/EOU/Advance Authorisation from 1 June 2025). DGFT Notification 60/2025-26 (23 February 2026) reduced rates to 50 percent; Notification 66/2025-26 (23 March 2026) restored rates to pre-23 February 2026 levels for exports through 31 March 2026. Rates updated periodically - check DGFT current. Operational from 1 January 2021 (replaced MEIS that expired 31 December 2020). e-scrips transferable for basic customs duty payment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the depreciation rate on textile machinery?</h3>
                        <div class="faq-expanded__a"><p>Section 32 of Income Tax Act 1961 with Income Tax Rules Schedule II. General plant and machinery 15 percent WDV. Continuous process plant 40 percent WDV - some textile processing machinery (drying ranges, stenters, mercerizing machines) may qualify subject to fact-specific evaluation. Factory buildings 10 percent. Computers 40 percent. Section 32(1)(iia) additional 20 percent on NEW machinery in manufacturing entity in year of acquisition; pro-rata if used less than 180 days; balance NEVER carried forward. Wrong classification equals Section 32 disallowance and reassessment. Patron evaluates machinery-by-machinery against CBDT guidance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Which ITR form should a textile manufacturer file?</h3>
                        <div class="faq-expanded__a"><p>Depends on entity type. Sole proprietor textile trader / manufacturer files ITR-3 (regular books) or ITR-4 SUGAM (Section 44AD presumptive Rs 3 crore digital / Rs 2 crore otherwise - 8 percent / 6 percent deemed profit). Partnership Firm or LLP textile files ITR-5. Private Limited Company / Public Limited Company textile files ITR-6 (with corporate rates 22% / 25% / 30%). HUF with textile business files ITR-3 / ITR-4. Never ITR-1 (no business income head). LLPs are NOT eligible for Section 44AD presumptive. Tirupur garment exporter partnership files ITR-5; Bhiwandi power loom proprietor files ITR-3 / ITR-4; Surat MMF partnership files ITR-5; Coimbatore spinning mill Pvt Ltd files ITR-6.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between MMF and cotton GST rates?</h3>
                        <div class="faq-expanded__a"><p>Pre-2022 reform: MMF 18 percent / MMF yarn 12 percent / MMF fabric 5 percent (highly inverted). 47th GST Council Meeting July 2022 partially reformed - many MMF segments moved to uniform 12 percent. Current cotton chain: yarn 5 percent / fabric 5 percent / apparel below Rs 1,000 at 5 percent. Both cotton and MMF apparel below Rs 1,000 at 5 percent generates inverted duty for manufacturers using 12 percent accessories (buttons, zippers) and 18 percent dyes/chemicals. Apparel above Rs 1,000 at 12 percent has lower inverted risk. Surat MMF dyers face most acute inverted duty - dyes 18 percent input vs 5 percent output finished fabric.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How are job work payments to textile vendors treated for ITR?</h3>
                        <div class="faq-expanded__a"><p>Job work payments to power loom operators, dyers, embroiderers, washers, stitchers are treated as expenses under Section 37 (general business expenditure). TDS Section 194C applies - 1 percent for individual/HUF contractor; 2 percent for others. Threshold: single payment Rs 30,000 / aggregate Rs 1 lakh annually. Section 40A(3) cash payment limit Rs 10,000 per day per party (Rs 35,000 for transporters). Cash payment violations equal 100 percent disallowance. Recommended: bank/UPI transfers with proper invoice and TDS deduction. Hinglish: Job worker ko cash mein payment kar sakte hain? Rs 10,000 daily limit per party hai Section 40A(3) ke under.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is tax audit applicable to textile manufacturers above Rs 5 crore?</h3>
                        <div class="faq-expanded__a"><p>YES. Section 44AB tax audit is mandatory for business turnover above Rs 1 crore (Rs 10 crore if 95 percent or more receipts AND payments are digital - both halves test). At Rs 5 crore turnover, you are above the basic Rs 1 crore threshold and below the Rs 10 crore digital threshold - so audit applicability depends on cash transaction percentage. If you cross 5 percent cash on either receipts or payments, audit mandatory at Rs 5 crore. Form 3CD by 30 September 2026; ITR by 31 October 2026. Section 271B penalty 0.5 percent of turnover or Rs 1.5 lakh. Form 3CD includes Clause 14 (ICDS II inventory), Clause 18 (Section 32), Clause 21 (Section 40A(3) + 269ST), Clause 26 (Section 43B).</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <div class="quick-answers" style="background:var(--gray-50);padding:24px;border-radius:12px;margin-top:32px;">
                    <h3 style="font-size:1.4rem;margin-bottom:18px;color:var(--blue);">Quick Answers</h3>
                    <p><strong>Q: Section 145A inventory rule?</strong><br>A: Lower of cost or NRV per ICDS II. Category-wise (raw / yarn / fabric / finished). FIFO or weighted average.</p>
                    <p><strong>Q: Inverted duty refund?</strong><br>A: Section 54(3) CGST + Rule 89(5) formula. Form RFD-01. 2-year time limit. Input goods only.</p>
                    <p><strong>Q: RoDTEP rate range?</strong><br>A: 0.3 to 4.3 percent FOB on textile HS codes. Appendix 4R DTA / 4RE SEZ.</p>
                    <p><strong>Q: Textile machinery depreciation?</strong><br>A: 15% WDV general; 40% continuous process plant. +20% additional Section 32(1)(iia) on new machinery.</p>
                    <p><strong>Q: Cash limit to weavers/dyers?</strong><br>A: Rs 10,000 per day per party Section 40A(3). Rs 35,000 for transporters. 100% disallowance.</p>
                    <p><strong>Q: Audit threshold textile?</strong><br>A: Rs 1 crore (Rs 10 crore if 95%+ digital both halves).</p>
                    <p><strong>Q: Section 44AD presumptive eligible?</strong><br>A: Sole prop / firm / HUF up to Rs 3 cr digital. LLP / Company excluded.</p>
                    <p><strong>Q: ITR form mapping?</strong><br>A: ITR-3/4 sole prop; ITR-5 firm/LLP; ITR-6 company. Never ITR-1 for business.</p>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Seven Textile Manufacturer Deadlines for AY 2026-27</h2>
            <div class="content-text">
                
                <p>Textile manufacturers face SEVEN firm dates plus rolling refund cycles for AY 2026-27 (FY 2025-26): <strong>(1) 31 July 2026</strong> - non-audit ITR-3 / ITR-4 / ITR-5 / ITR-6 under Section 139(1); <strong>(2) 30 September 2026</strong> - Tax Audit Report Form 3CD under Section 44AB; <strong>(3) 31 October 2026</strong> - audit-case ITR; <strong>(4) 30 November 2026</strong> - ITR for Section 92E transfer pricing cases (relevant for textile importers buying from related party suppliers overseas); <strong>(5) 31 December 2026</strong> - belated/revised return Section 139(4)/(5) with Section 234F fee; <strong>(6) 15 March 2026</strong> - 100 percent advance tax for Section 44AD/44ADA presumptive opt-in; <strong>(7) Quarterly advance tax</strong> 15 June, 15 September, 15 December, 15 March - 15%, 45%, 75%, 100% cumulative for non-presumptive. <strong>Rolling deadlines:</strong> Form GST RFD-01 inverted duty refund within 2 years from end of relevant period (FY 2024-25 by 31 March 2027); RoDTEP claim via shipping bill at export with e-scrip generation 30-90 days post-realisation. Section 32(1)(iia) additional depreciation on machinery used less than 180 days equals 50 percent only, balance NEVER recoverable. Section 145A inventory mis-valuation creates compounding multi-year exposure under Section 270A 200 percent misreporting penalty.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Textile ITR Right - Talk to a Cluster-Savvy CA Today</h2>
            <div class="content-text" style="text-align:left;">
                
                
                    <p>Textile manufacturer ITR is the area where DIY platforms and generalists miss FIVE industry-specific levers worth 5 to 30 percent of annual profit. Section 145A inventory valuation per ICDS II must be category-wise (raw cotton, yarn, grey fabric, dyed fabric, finished apparel, packaging) at lower of cost or NRV - lump-sum valuation hides 10-20 percent unsold seasonal write-downs that translate to direct deductible. Inverted duty structure GST refund under Section 54(3) of CGST Act for cotton chain manufacturers (apparel below Rs 1,000 at 5 percent output with 12-18 percent input ITC) accumulates Rs 1 to 4 crore unutilised ITC over 18 months, refundable in cash via Form GST RFD-01 with Rule 89(5) formula.</p>
                    <p>RoDTEP scheme rebates 0.3 to 4.3 percent of FOB on textile exports via shipping bill e-scrips; rates revised by DGFT periodically (February 2026 50 percent reduction; March 2026 reversal). Section 32 depreciation choice between 15 percent general plant and 40 percent continuous process plant for specific textile machinery, plus Section 32(1)(iia) one-time 20 percent additional depreciation on new machinery in year of acquisition - missed claims permanently lost. Section 40A(3) cash payment Rs 10,000 daily limit per party (Rs 35,000 for transporters) - critical for Bhiwandi power loom, Tirupur job work, Surat embroidery cluster cash payments to weavers / dyers / embroiderers / washers; 100 percent disallowance for violations.</p>
                    <p>Patron Accounting has filed textile sector ITRs for 280+ manufacturers across Tirupur, Surat, Bhiwandi, Panipat, Ludhiana, Coimbatore, and Erode since 2019 - whether your structure is a sole proprietor power loom in Bhiwandi, a 4-partner Tirupur garment exporter, a Surat MMF dyeing partnership, a Panipat home textile LLP, or a vertically integrated cotton-to-garment private limited company, the correct answer always begins with category-wise Section 145A inventory valuation, inverted duty refund eligibility audit, and machinery depreciation block selection.</p>
                    <p style="font-weight:600;">Free 15-minute Section 145A inventory valuation review and inverted duty refund eligibility assessment. Call <a href="tel:+919459456700" style="color:#FFD700;">+91 945 945 6700</a>, WhatsApp, or email info@patronaccounting.com - send your trial balance, inventory category breakdown, GSTR-3B summary, and shipping bill summary. We tell you the optimal Section 145A category-wise valuation, the inverted duty refund accumulated under Rule 89(5), the RoDTEP claim status, and the Section 44AB tax audit applicability BEFORE you pay anything.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%20consultation%20on%20Section%20145A%20inventory%20valuation%2C%20inverted%20duty%20refund%2C%20RoDTEP%2C%20and%20ITR%20for%20my%20textile%20business." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Textile%20Manufacturers%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20filing%20services%20for%20my%20textile%20business%20%28cotton%20spinning%2FMMF%2Fknitted%20garments%2Fpower%20loom%2Fhome%20textile%29%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
                <div class="pa-block-title" style="font-size:18px;font-weight:700;color:var(--blue);margin-bottom:8px;">Related Tax, GST, and Compliance Services</div>
                <div class="pa-block-sub" style="font-size:14px;color:var(--text-muted);margin-bottom:20px;">End-to-end ITR, GST refund, RoDTEP, and notice response for textile entities</div>
                <div class="pa-cross-grid">
                    <a href="/itr-for-business" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-llp-partnership" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for LLP/Partnership</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Refund</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gstat-appeal-exporters" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal Exporters</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tax-planning-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning</div><div class="pa-card-sub">India</div></div></a>
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
            <p>Reviewed quarterly during ITR season (April to October) and after every Union Budget; immediately after Section 145A interpretation update, ICDS II revision, RoDTEP rate notification by DGFT, GST Council rate change for textile chain, Section 32 depreciation amendment, or Section 40A(3) cash payment limit notification. Citation Sources: Income Tax Act 1961 (Sections 28-44, 32, 32(1)(iia), 40, 40A(3), 43B, 44AA, 44AB, 44AD, 145A, 9B, 45(4), 28(iiib), 234A/B/C, 269ST, 270A, 271B, 271DA); Income Tax Rules 1962 Schedule II depreciation; Income Computation and Disclosure Standards (ICDS) II Valuation of Inventories notified under Section 145(2); CGST Act 2017 Section 54(3); CGST Rules 2017 Rule 89(5); Foreign Trade Policy 2023 Para 4.54 with DGFT RoDTEP Appendix 4R / 4RE; DGFT Notification 60/2025-26 (23 February 2026) and 66/2025-26 (23 March 2026); Customs Tariff Act 1975 (HS code chapters 50-63); Finance Act 2025; Indian Partnership Act 1932; LLP Act 2008; Companies Act 2013; Income Tax Act 2025 Section 277 (retains lower-of-cost-or-NRV principle from Section 145A).</p>
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