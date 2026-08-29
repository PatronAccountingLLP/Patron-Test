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
    <title>ITR Filing for Salary India: ITR-1, ITR-2, ESOP, Form 16</title>
    <meta name="description" content="ITR-1 and ITR-2 filing for salaried AY 2026-27. Multi-Form-16, ESOP perquisite, capital gains, old vs new regime, Section 87A rebate. From Rs 999.">
    <link rel="canonical" href="/itr-for-salary">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR Filing for Salary India: ITR-1, ITR-2, ESOP, Form 16 | Patron Accounting">
    <meta property="og:description" content="ITR-1 and ITR-2 filing for salaried AY 2026-27. Multi-Form-16, ESOP perquisite, capital gains, old vs new regime, Section 87A rebate. From Rs 999.">
    <meta property="og:url" content="/itr-for-salary/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR Filing for Salary India: ITR-1, ITR-2, ESOP, Form 16 | Patron Accounting">
    <meta name="twitter:description" content="ITR-1 and ITR-2 filing for salaried AY 2026-27. Multi-Form-16, ESOP perquisite, capital gains, old vs new regime, Section 87A rebate. From Rs 999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/itr-for-salary/#breadcrumb",
      "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR Filing for Salary", "item": "https://www.patronaccounting.com/itr-for-salary" }
          ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/itr-for-salary/#faq",
      "datePublished": "2026-05-11T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ITR form should a salaried person file for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Salaried individuals with total income up to Rs 50 lakh from salary, one or two house properties, and other sources file ITR-1 Sahaj. ITR-2 is required if you have capital gains under Section 111A or 112A, ESOP perquisite carry-over, foreign assets, are a director of a company, or hold unlisted shares. Salaried earners with side business or freelance income file ITR-3 instead. The due date is 31 July 2026."
          }
        },
        {
          "@type": "Question",
          "name": "How do I file ITR with multiple Form 16 after a job change?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Collect Form 16 Part A and Part B from every employer of the financial year. Add Section 17(1) gross salary from each. Apply standard deduction of Rs 75,000 under new regime or Rs 50,000 under old regime ONCE (not per employer). Compute tax on the consolidated income at correct slabs. Each employer may have under-withheld TDS because each applied basic exemption independently. Pay self-assessment tax under Section 140A before filing."
          }
        },
        {
          "@type": "Question",
          "name": "How are ESOPs taxed for salaried employees in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESOPs are taxed in two stages. At exercise, the perquisite under Section 17(2)(vi) equals FMV minus exercise price multiplied by shares allotted, added to your salary, with TDS deducted by the employer under Section 192. At sale, the gain equals sale price minus FMV at exercise, taxed as STCG or LTCG based on holding period. Form 12BA from the employer documents the perquisite. DPIIT-recognised startup employees can defer TDS for 48 months under Section 192(1C)."
          }
        },
        {
          "@type": "Question",
          "name": "What is the new tax regime zero-tax threshold for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under the new tax regime, Section 87A rebate of Rs 60,000 makes income up to Rs 12 lakh tax-free for individuals. Salaried employees claiming the Rs 75,000 standard deduction under Section 16(ia) effectively have zero tax up to Rs 12.75 lakh of gross salary. Marginal relief ensures that for incomes just above Rs 12 lakh, the additional tax does not exceed the income excess over Rs 12 lakh. Special-rate income such as capital gains under Section 111A and 112A does NOT qualify for the 87A rebate."
          }
        },
        {
          "@type": "Question",
          "name": "How are capital gains taxed for salaried investors in AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Listed equity shares and equity mutual funds: STCG at 20 percent under Section 111A (holding up to 12 months), LTCG at 12.5 percent on gains above Rs 1.25 lakh under Section 112A. Unlisted shares (including ESOP carry-over): STCG at slab rate, LTCG at 12.5 percent without indexation after 24 months. Real estate sold after 23 July 2024: LTCG at 12.5 percent without indexation, or 20 percent with indexation for properties acquired before that date (taxpayer's choice). All capital gains require ITR-2."
          }
        },
        {
          "@type": "Question",
          "name": "How much does CA-assisted salaried ITR filing cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron Accounting salaried ITR filing starts at Rs 999 for ITR-1 with single Form 16. ITR-1 with HRA, home loan interest, and 80C deductions is Rs 999. Multi-Form-16 consolidation for job changers is Rs 1,499. ITR-2 with capital gains is Rs 2,499. ITR-2 with ESOP perquisite plus capital gains is Rs 2,999. ITR-2 with foreign assets disclosure under Schedule FA is Rs 4,999. NRI returnee filings with DTAA relief through Form 67 start at Rs 5,999."
          }
        },
        {
          "@type": "Question",
          "name": "Should I opt for old or new tax regime as a salaried employee?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The new regime is the default. Opt for old only if your total deductions (Section 80C up to Rs 1.5 lakh, 80D up to Rs 50,000, HRA, home loan interest under Section 24(b) up to Rs 2 lakh) exceed approximately Rs 4 to 4.5 lakh. The breakeven shifts with income level. Salaried earners can switch regime each year directly in the ITR before the due date - no Form 10-IEA required for non-business filers. Run a side-by-side computation before deciding."
          }
        },
        {
          "@type": "Question",
          "name": "What is the late filing penalty for salaried ITR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 234F, late filing attracts a fee of Rs 1,000 if total income is up to Rs 5 lakh, and Rs 5,000 if income exceeds Rs 5 lakh. Section 234A interest at 1 percent per month on unpaid tax applies from 1 August 2026 until the date of filing. Belated returns can be filed until 31 December 2026 under Section 139(4) but carry-forward of losses under Sections 71 and 72 is lost. Revised returns are permitted until 31 March 2027 under Section 139(5)."
          }
        },
        {
          "@type": "Question",
          "name": "Salary wale log konsa ITR bharte hain AY 2026-27 mein? (Which ITR form do salaried employees file for AY 2026-27)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AY 2026-27 ke liye simple salaried log (income up to Rs 50 lakh, no capital gains, no ESOP) ITR-1 Sahaj file karte hain. Agar capital gains hai (equity, MF, property), ESOP exercise hua hai, foreign assets hai, ya company director hain, to ITR-2 file karna padega. Side business ya freelance income wale ITR-3 file karte hain. Last date 31 July 2026 hai non-audit cases ke liye. New regime default hai Section 115BAC ke under - Rs 12 lakh tak zero tax (Section 87A rebate Rs 60,000), salaried ke liye Rs 75,000 standard deduction ke saath Rs 12.75 lakh tak zero tax. Old regime mein Section 80C, 80D, HRA, home loan interest claim kar sakte hain agar total deductions Rs 4 lakh se zyada hai. Patron Accounting Rs 499 se start hone wali ITR-1 filing offer karta hai. Call +91 945 945 6700."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/itr-for-salary/#service",
      "name": "ITR Filing for Salary",
      "url": "https://www.patronaccounting.com/itr-for-salary/",
      "description": "End-to-end CA-assisted Income Tax Return filing for salaried employees under Section 139 of the Income Tax Act 1961 for AY 2026-27. Covers single-employer ITR-1 Sahaj filing, multi-Form-16 consolidation for job changers, ITR-2 with Schedule CG capital gains under Sections 111A (STCG 20 percent) and 112A (LTCG 12.5 percent above Rs 1.25 lakh), ESOP and RSU perquisite reconciliation under Section 17(2)(vi) with Form 12BA validation and Rule 3 FMV computation, foreign-parent RSU vesting (NASDAQ, NYSE, LSE) with Schedule FA disclosure, Section 192(1C) DPIIT startup ESOP TDS deferral (48 months under existing Act, expanding to 60 months under Income Tax Act 2025 Section 392(3)), regime arbitrage between default new regime under Section 115BAC and old regime, Section 87A rebate optimisation (Rs 60,000 new regime yielding zero tax up to Rs 12 lakh, Rs 12.75 lakh for salaried with standard deduction), AIS and Form 26AS reconciliation with feedback filing, and 12 months of post-filing Section 139(9), 143(1)(a), 142(1) and 148 notice support.",
      "serviceType": "Salaried Income Tax Return Filing",
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
          "name": "Income tax in India",
          "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"
        },
        {
          "@type": "Thing",
          "name": "Salary",
          "sameAs": "https://en.wikipedia.org/wiki/Salary"
        },
        {
          "@type": "Thing",
          "name": "Employee stock option",
          "sameAs": "https://en.wikipedia.org/wiki/Employee_stock_option"
        },
        {
          "@type": "Thing",
          "name": "Capital gains tax in India",
          "sameAs": "https://en.wikipedia.org/wiki/Capital_gains_tax_in_India"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Salaried ITR Filing Tiers (AY 2026-27)",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "Simple Salaried ITR-1 (single Form 16, no capital gains)",
            "priceCurrency": "INR",
            "price": "999",
            "description": "Single Form 16, regime arbitrage memo, AIS and Form 26AS reconciliation; income up to Rs 50 lakh"
          },
          {
            "@type": "Offer",
            "name": "Salaried ITR-1 with HRA, 80C and Home Loan Interest",
            "priceCurrency": "INR",
            "price": "999",
            "description": "Old regime optimisation - Section 80C up to Rs 1.5 lakh, Section 80D, HRA under Section 10(13A), Section 24(b) home loan interest"
          },
          {
            "@type": "Offer",
            "name": "Multi-Form-16 Consolidation (job changers)",
            "priceCurrency": "INR",
            "price": "1499",
            "description": "Two or more employers in the same FY; Section 17(1) consolidated salary, standard deduction applied ONCE, Schedule TDS-1 per TAN"
          },
          {
            "@type": "Offer",
            "name": "Salaried ITR-2 with Capital Gains",
            "priceCurrency": "INR",
            "price": "2499",
            "description": "Schedule CG with STCG under Section 111A (20 percent) and LTCG under Section 112A (12.5 percent above Rs 1.25 lakh) on listed equity, MF, property"
          },
          {
            "@type": "Offer",
            "name": "Salaried ITR-2 with ESOP Perquisite plus Sale",
            "priceCurrency": "INR",
            "price": "2999",
            "description": "Section 17(2)(vi) perquisite reconciliation with Form 12BA, Rule 3 FMV at exercise as cost basis for future sale"
          },
          {
            "@type": "Offer",
            "name": "Salaried ITR-2 with RSU Vesting (Indian or Foreign Parent)",
            "priceCurrency": "INR",
            "price": "2999",
            "description": "RSU vest with Section 192 TDS reconciliation; Schedule FA for foreign-parent shares; SBI TT rate conversion for foreign exchange FMV"
          },
          {
            "@type": "Offer",
            "name": "Salaried ITR-2 with Foreign Assets (Schedule FA)",
            "priceCurrency": "INR",
            "price": "4999",
            "description": "Schedule FA disclosure with initial, peak and closing values; CRS and FATCA cross-check; Black Money Act 2015 compliance"
          },
          {
            "@type": "Offer",
            "name": "NRI Salaried Returnee with DTAA Relief (Form 67)",
            "priceCurrency": "INR",
            "price": "5999",
            "description": "Residency change under Section 6, DTAA relief under Section 90, Form 67 Foreign Tax Credit filed before ITR"
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
    ['name' => 'ITR Filing for Salary', 'url' => '/itr-for-salary'],
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
            padding: 20px 0; position: sticky; top: 0; z-index: 50;
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
                        ITR Filing for Salary
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Form 16 Part A and B, Form 12BA for ESOP perquisite, AIS, Form 26AS, capital gains statements</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 999 for simple ITR-1; ITR-2 with capital gains and ESOP from Rs 2,499; foreign assets Rs 4,999</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Mandatory if income above Rs 4 lakh new regime or Rs 2.5 lakh old regime; refund claim filers also</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 24 to 48 hours for ITR-1; 3 to 5 days for ITR-2 with ESOP and capital gains; due 31 July 2026</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">50,000+ Salaried Returns Filed | 4.9 Google Rating | 15+ Years | Pune Mumbai Delhi Gurugram</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20consultation%20for%20salaried%20ITR%20filing%20AY%202026-27." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - ITR Filing for Salary',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'Simple Salaried ITR-1 (single Form 16)', 'label' => 'Simple Salaried ITR-1 (single Form 16)', 'selected' => true, 'disabled' => false],
                            ['value' => 'ITR-1 with HRA, 80C, Home Loan Interest', 'label' => 'ITR-1 with HRA, 80C, Home Loan Interest', 'selected' => false, 'disabled' => false],
                            ['value' => 'Multi-Form-16 Consolidation (job changers)', 'label' => 'Multi-Form-16 Consolidation (job changers)', 'selected' => false, 'disabled' => false],
                            ['value' => 'ITR-2 with Capital Gains', 'label' => 'ITR-2 with Capital Gains', 'selected' => false, 'disabled' => false],
                            ['value' => 'ITR-2 with ESOP Perquisite plus Sale', 'label' => 'ITR-2 with ESOP Perquisite plus Sale', 'selected' => false, 'disabled' => false],
                            ['value' => 'ITR-2 with RSU Vesting', 'label' => 'ITR-2 with RSU Vesting', 'selected' => false, 'disabled' => false],
                            ['value' => 'ITR-2 with Foreign Assets (Schedule FA)', 'label' => 'ITR-2 with Foreign Assets (Schedule FA)', 'selected' => false, 'disabled' => false],
                            ['value' => 'NRI Salaried Returnee with DTAA', 'label' => 'NRI Salaried Returnee with DTAA', 'selected' => false, 'disabled' => false],
                            ['value' => 'Salary plus F and O Trading', 'label' => 'Salary plus F and O Trading', 'selected' => false, 'disabled' => false],
                            ['value' => 'Salary plus Crypto', 'label' => 'Salary plus Crypto', 'selected' => false, 'disabled' => false],
                            ['value' => 'Salary plus Property Sale', 'label' => 'Salary plus Property Sale', 'selected' => false, 'disabled' => false],
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Changed jobs in October from Pune product company to Bengaluru SaaS. Both gave Form 16 with separate basic exemption. Would have owed Rs 1.4 lakh self-assessment tax. Patron consolidated, identified standard deduction double-claim.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Akash B.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Senior Engineer (Bengaluru)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">US-headquartered startup with India operations. RSUs vested March 2026 worth Rs 18 lakh perquisite. Form 12BA showed value correctly. Patron filed ITR-2 with Schedule FA and tracked FMV at vesting as cost basis.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SR</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Suman R.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Product Manager (NCR)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Sold equity worth Rs 14 lakh in November - some LTCG, some STCG. Plus Rs 22 lakh salary plus Rs 60,000 dividend. Patron correctly bucketed STCG at 20 percent and LTCG at 12.5 percent above Rs 1.25 lakh. Refund of Rs 11,400.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Manisha D.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Marketing Director (Mumbai)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Returned from 4 years in Singapore in October 2025. RNOR status, Singapore CPF, foreign equity. Patron handled Section 6 residency rules, Form 67 for Singapore tax credit, Schedule FA. Refund of Rs 1.8 lakh in 5 weeks.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RP</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rohan P.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">NRI Returnee (Delhi)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
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
                    <p>Simple salaried ITR-1, multi-Form-16 job changers, ESOP and RSU holders, foreign-parent vesting, capital gains, NRI returnees with DTAA relief. 50,000+ salaried ITRs filed. 99.6 percent on-time submission and zero defective return notices in AY 2025-26.</p>
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
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Files</a>
            <a href="#services-section" class="toc-btn">Patron Services</a>
            <a href="#process-section" class="toc-btn">8-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Common Mistakes</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#comparison-section" class="toc-btn">Old vs New Regime</a>
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
            <h2 class="section-title">Salaried ITR Filing for AY 2026-27</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR Filing for Salary Services at a Glance</strong></p>
                    <p>ITR Filing for Salary covers salaried income under Section 17(1) of the Income Tax Act, 1961, including basic salary, allowances, perquisites under Section 17(2), and ESOP under Section 17(2)(vi). For AY 2026-27, salaried filers use ITR-1 (Sahaj) for income up to Rs 50 lakh or ITR-2 if capital gains under Section 111A or 112A, ESOP perquisite carry-over, multiple house properties, foreign assets or director status applies. The new tax regime under Section 115BAC is default with Rs 60,000 Section 87A rebate yielding zero tax up to Rs 12 lakh (Rs 12.75 lakh for salaried with Rs 75,000 standard deduction). Due date 31 July 2026.</p>
                </div>
                <p>ITR Filing for Salary for AY 2026-27 covers every salaried employee, including job changers receiving multiple Form 16 from successive employers in FY 2025-26, ESOP and RSU recipients with Section 17(2)(vi) perquisite income reflected in Form 12BA, RSU recipients from foreign-parent companies (Indian subsidiaries of US, UK, EU multinationals), and investors with capital gains under Section 111A (STCG 20 percent) or Section 112A (LTCG 12.5 percent above Rs 1.25 lakh). The default new tax regime offers zero tax up to Rs 12 lakh after the Section 87A rebate; the old regime continues for those with significant deductions under Sections 80C, 80D, HRA under Section 10(13A) and home loan interest under Section 24(b).</p>
                <p>Patron Accounting has filed 50,000+ salaried returns over 15+ years across simple ITR-1 filings, multi-Form-16 consolidations for job changers, ITR-2 with ESOP perquisite reconciliation against Form 12BA, capital gains overlay in Schedule CG and NRI returnee scenarios. With offices in Pune, Mumbai, Delhi and Gurugram and a single named CA handling the full filing cycle, every salaried ITR comes with an old-vs-new regime comparison memo, AIS and Form 26AS line-by-line reconciliation, AIS feedback filed before ITR submission to prevent Section 143(1)(a) demand notices, and 12 months of post-filing Section 139(9), 142(1) and 148 notice support at no extra cost. In the AY 2025-26 cycle, the firm filed 12,400+ salaried ITRs with zero defective return notices and recovered Rs 8.2 crore aggregate excess-TDS refunds for clients.</p>
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
                <h2 class="section-title">What Is Salary ITR Filing</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Salary ITR Filing is the annual declaration of income chargeable under the head Salaries per Section 17 of the Income Tax Act, 1961, including basic pay, allowances (Section 10), perquisites (Section 17(2)) and profits in lieu of salary (Section 17(3)).</p>
                    <p>For AY 2026-27, salaried employees file ITR-1 (Sahaj) if total income is up to Rs 50 lakh from salary, one or two house properties and other sources, or ITR-2 if they have capital gains, ESOP carry-over, foreign assets, are directors of unlisted companies, or hold unlisted shares. The new tax regime under Section 115BAC is the default; old regime requires explicit opt-in directly in the ITR for non-business salaried taxpayers (Form 10-IEA NOT required for salaried, unlike business and professional taxpayers).</p>
                    <p>The default new regime offers a Rs 4 lakh basic exemption and Rs 60,000 Section 87A rebate, yielding zero tax up to Rs 12 lakh of total income. With the Rs 75,000 standard deduction under Section 16(ia), salaried employees have effectively zero tax up to Rs 12.75 lakh of gross salary. Marginal relief applies for incomes just above Rs 12 lakh. The old regime continues with Rs 12,500 rebate (zero tax up to Rs 5 lakh) and is preferable only when total deductions exceed approximately Rs 4 to 4.5 lakh.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR Filing for Salary:</strong></p>
                    <p><strong>Form 16:</strong> Annual TDS certificate from the employer with Part A (TDS summary, employer TAN, TDS deposited quarterly) and Part B (salary breakup with allowances, deductions and tax computation).</p>
                    <p><strong>Form 12B:</strong> Employee declaration of previous employer's salary, given to the new employer mid-year. Lets the new employer compute TDS on consolidated salary and eliminates under-withholding for job changers.</p>
                    <p><strong>Form 12BA:</strong> Statement of perquisites and profits in lieu of salary - includes ESOP perquisite value, sweat equity, employer-provided accommodation, car perquisite and other Section 17(2) items.</p>
                    <p><strong>Section 17(1) Gross Salary:</strong> Basic plus DA plus allowances plus bonuses plus perquisites - the starting point for salary computation in the ITR.</p>
                    <p><strong>Section 17(2)(vi):</strong> ESOP and sweat equity perquisite taxable at exercise as salary income; computed as FMV at exercise minus exercise price multiplied by shares allotted.</p>
                    <p><strong>Rule 3 of Income Tax Rules 1962:</strong> FMV valuation rule for ESOPs and other perquisites - listed shares use average of opening and closing market price on exercise date; unlisted shares use valuation by Category I merchant banker.</p>
                    <p><strong>Section 87A:</strong> Tax rebate - Rs 60,000 under new regime (zero tax up to Rs 12 lakh), Rs 12,500 under old regime (zero tax up to Rs 5 lakh). Available only to Resident individuals.</p>
                    <p><strong>Sections 111A and 112A:</strong> STCG at 20 percent (Section 111A) and LTCG at 12.5 percent above Rs 1.25 lakh (Section 112A) on listed equity. Section 87A rebate does NOT apply to special-rate income under 111A and 112A.</p>
                    <p><strong>Section 192(1C):</strong> Startup ESOP perquisite TDS deferral up to 48 months for DPIIT-recognised startups with IMB certification. Expands to 60 months under Income Tax Act 2025 Section 392(3) effective 1 April 2026.</p>
                    <p><strong>Form 10-IEA:</strong> Form to opt out of new regime for business or professional taxpayers; salaried filers opt directly in the ITR without Form 10-IEA.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR Filing for Salary</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Income Head</span>
                        <strong>Section 17</strong>
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
            <h2 class="section-title">Who Files Salaried ITR for AY 2026-27</h2>
            <div class="content-text">
                
                <p>ITR filing applies for AY 2026-27 under Section 139(1) of the Income Tax Act 1961 if any of the following holds. Filing is mandatory for income above the basic exemption limit; voluntary but recommended for refund claims, loan documentation and visa applications even at lower income.</p>
                <ul>
                    <li><strong>Income above basic exemption:</strong> Gross salary or total income exceeds Rs 4 lakh under the new regime or Rs 2.5 lakh under the old regime for individuals below 60 (Rs 3 lakh for 60 to 80, Rs 5 lakh for above 80).</li>
                    <li><strong>Job changers with multiple Form 16:</strong> You changed jobs and received Form 16 from two or more employers in FY 2025-26 - filing is the only way to consolidate and avoid Section 270A under-reporting penalty (50 percent of tax) that arises from each employer applying basic exemption independently.</li>
                    <li><strong>ESOP holders:</strong> ESOPs were exercised, vested or sold during FY 2025-26; perquisite under Section 17(2)(vi) reported in Form 12BA at FMV at exercise minus exercise price; TDS deducted under Section 192.</li>
                    <li><strong>RSU recipients:</strong> Restricted Stock Units vested with TDS under Section 192 deducted by the employer on FMV at vesting; foreign-parent RSUs (US, UK, EU multinationals) require Schedule FA disclosure for the vested shares.</li>
                    <li><strong>Capital gains earners:</strong> Equity, mutual funds, property, gold, bonds - any capital gain pushes filing requirement to ITR-2; ITR-1 cannot be used with any capital gain (even Rs 1).</li>
                    <li><strong>TDS refund claimants:</strong> Filing is the mechanism to claim refund of excess TDS deducted by employer, bank (Section 194A on interest) or buyer (Section 194-IA on property purchase from you).</li>
                    <li><strong>Foreign asset or income holders:</strong> Schedule FA disclosure is mandatory for Resident and Ordinarily Resident (ROR) - foreign bank accounts, foreign equity holdings (vested RSUs from foreign parent), foreign trusts. Non-disclosure attracts Rs 10 lakh penalty under Black Money Act 2015 Section 42.</li>
                    <li><strong>High-value transaction triggers (Section 139(1) Seventh Proviso):</strong> Current account deposits above Rs 1 crore, savings deposits above Rs 50 lakh, electricity bill above Rs 1 lakh or foreign travel spend above Rs 2 lakh - mandatory filing irrespective of income.</li>
                </ul>
                <p><strong>Statutory due dates for AY 2026-27:</strong> ITR-1 and ITR-2 non-audit cases - 31 July 2026. Belated return under Section 139(4) - 31 December 2026 with Section 234F fee. Revised return under Section 139(5) - 31 March 2027 (Budget 2026 extended from 31 December). Updated Return (ITR-U) under Section 139(8A) - 31 March 2031 (48 months from end of AY). E-verification window after ITR submission - 30 days per CBDT Notification 5/2022.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Salaried ITR Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Simple Salaried ITR-1</strong></td><td>Single Form 16, no capital gains, no ESOP, standard deductions only. Old vs new regime comparison memo. AIS and Form 26AS reconciliation. Income up to Rs 50 lakh.</td><td>From Rs 999</td></tr>
                        <tr><td><strong>Multi-Form-16 Consolidation</strong></td><td>Two or more employers in the same FY. Form 12B reconciliation. Section 17(1) consolidated gross salary across TANs. Standard deduction applied ONCE. Schedule TDS-1 with each employer TAN separately reported.</td><td>From Rs 1,499</td></tr>
                        <tr><td><strong>ESOP and RSU ITR-2</strong></td><td>Section 17(2)(vi) perquisite reconciliation. Form 12BA validation against employer-issued statement. Rule 3 FMV computation. Post-sale capital gains under Schedule CG. Section 192(1C) startup ESOP TDS deferral if DPIIT and IMB qualified.</td><td>From Rs 2,999</td></tr>
                        <tr><td><strong>Capital Gains ITR-2</strong></td><td>STCG under Section 111A at 20 percent on listed equity, LTCG under Section 112A at 12.5 percent above Rs 1.25 lakh. Mutual fund redemptions. Property sale with post-23-Jul-2024 indexation transition. Section 87A interaction memo (rebate does NOT apply to 111A/112A).</td><td>From Rs 2,499</td></tr>
                        <tr><td><strong>Salary plus Foreign-Parent RSU</strong></td><td>RSU vesting from US (NASDAQ, NYSE) or UK (LSE) parent company. Schedule FA disclosure (Table A3 for foreign equity). SBI TT rate conversion. Form 67 DTAA Foreign Tax Credit filed before ITR.</td><td>From Rs 2,999</td></tr>
                        <tr><td><strong>Salary plus Side Income</strong></td><td>Mixed ITR-3 routing if professional or freelance income exists alongside salary. Schedule S (salary) plus Schedule BP (profession) in same return. Section 44ADA presumptive consideration for eligible side practice.</td><td>From Rs 2,999</td></tr>
                        <tr><td><strong>NRI Salaried Returnees</strong></td><td>Residency change rules under Section 6 (RNOR transition status), DTAA relief under Section 90, Form 67 Foreign Tax Credit, Schedule FA for foreign assets (mandatory once ROR status achieved).</td><td>From Rs 5,999</td></tr>
                        <tr><td><strong>Foreign Assets Disclosure (Schedule FA)</strong></td><td>Schedule FA workflow with initial value, peak value during FY and closing balance per asset. Foreign bank accounts (Table A2), foreign equity (Table A3 - includes vested foreign-parent RSUs), foreign trusts, cash value insurance. CRS and FATCA cross-check.</td><td>From Rs 4,999</td></tr>


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
            <h2 class="section-title">8-Step Salaried ITR Filing Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The Patron workflow runs on the Income Tax e-filing portal covering Form 16 collection, AIS reconciliation, regime arbitrage, multi-Form-16 consolidation, ESOP and capital gains handling, validation and e-verification. Each step is owned by a named CA with documented hand-off.</p>
        </div>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Document Collection</h3>
                    <p class="step-description">Receive Form 16 Part A and Part B from each employer, Form 12BA for perquisites including ESOP, Form 26AS, AIS, capital gains statement from broker (Zerodha, Groww, ICICIdirect, Upstox), mutual fund CAS (CAMS or KFintech).</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Documents in</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All Form 16 collected</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Documents</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">AIS and Form 26AS Reconciliation</h3>
                    <p class="step-description">Match TDS line-by-line. Common variance: AIS overstates capital gains because each redemption is reported but cost basis is not netted. Feedback filed on AIS portal before ITR submission to prevent Section 143(1)(a) demand notice.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AIS feedback filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 26AS reconciled</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">AIS</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Regime Selection</h3>
                    <p class="step-description">Compute tax under old and new regime side by side. Salaried opt-in for old regime is done DIRECTLY in the ITR before the due date - no Form 10-IEA required (Form 10-IEA is only for business and professional taxpayers).</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Both regimes computed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Best chosen</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Regime</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Form Selection</h3>
                    <p class="step-description">ITR-1 if income up to Rs 50 lakh, no capital gains, no ESOP carry-over, no foreign assets, not a director of company, no unlisted shares. ITR-2 in ALL other cases. Wrong form triggers Section 139(9) defective return notice with 15-day correction window.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form locked</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Sahaj or ITR-2</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Form</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Multi-Form-16 Consolidation</h3>
                    <p class="step-description">Add Section 17(1) gross salary from each employer. Apply standard deduction (Rs 75,000 new regime or Rs 50,000 old regime) ONCE - not per employer. Apply Section 87A rebate at consolidated total income level. Schedule TDS-1 with each employer TAN separately.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Consolidated salary</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Single std deduction</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Consolidated</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">ESOP, RSU and Capital Gains Handling</h3>
                    <p class="step-description">Confirm Form 12BA perquisite value matches Section 17(2)(vi) computation (FMV at exercise minus exercise price). Verify Section 192 TDS on perquisite. Track FMV at exercise as cost of acquisition for future sale. Bucket capital gains in Schedule CG by holding period and rate.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FMV locked</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Schedule CG complete</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">ESOP/CG</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Computation and Validation</h3>
                    <p class="step-description">Apply Section 87A rebate (NOT applicable to 111A and 112A special-rate income). Compute Section 234A/234B interest if applicable. Pay self-assessment tax under Section 140A before filing if consolidated liability exceeds TDS. Run portal validator and resolve every error.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tax computed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Validator passed</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Computed</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Submission and E-Verification</h3>
                    <p class="step-description">File the return electronically before the 31 July 2026 due date. E-verify within 30 days per CBDT Notification 5/2022 via Aadhaar OTP, net banking, bank account EVC or demat account EVC. Track ITR-V acknowledgement with 15-digit acknowledgement number.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> e-Verified</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Submitted</span>
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
            <h2 class="section-title">Documents Checklist by Scenario</h2>
            <div class="content-text">
                
                <p>The Patron document checklist for salaried ITR is segmented by scenario - simple salaried, job changer, ESOP/RSU holder, capital gains investor and foreign-asset holder. Universal documents apply to all salaried filers; scenario-specific documents are added based on income type.</p>
                <p><strong>Universal (all salaried filers):</strong></p>
                <ul>
                    <li>PAN and Aadhaar (linked under Section 139AA).</li>
                    <li>Form 16 Part A (TDS summary) and Part B (salary breakup) from current employer.</li>
                    <li>AIS (Annual Information Statement) download and Form 26AS for FY 2025-26.</li>
                    <li>Bank account details for refund credit; primary account flagged on the e-filing portal.</li>
                    <li>Investment proofs for Section 80C (PPF, ELSS, life insurance, tuition fees, home loan principal) - old regime only.</li>
                    <li>Section 80D health insurance premium receipts (self plus parents) - old regime only.</li>
                    <li>Rent receipts and landlord PAN for HRA claim (if rent exceeds Rs 1 lakh per year, old regime).</li>
                    <li>Home loan interest certificate from lender (Section 24(b)) - old regime only for self-occupied.</li>
                </ul>
                <p><strong>Job Changers (Multiple Form 16):</strong></p>
                <ul>
                    <li>Form 16 Part A and Part B from EACH employer of the FY (including the one you resigned from in April).</li>
                    <li>Form 12B copy (declaration of previous employer's salary given to the new employer mid-year).</li>
                    <li>Last salary slip from each employment showing year-to-date earnings.</li>
                    <li>Resignation acceptance and joining dates to confirm employment period overlap.</li>
                </ul>
                <p><strong>ESOP and RSU Holders:</strong></p>
                <ul>
                    <li>Form 12BA from employer showing ESOP/RSU perquisite under Section 17(2)(vi).</li>
                    <li>ESOP grant letter, exercise notification and FMV at exercise computation.</li>
                    <li>Brokerage account statement showing share allotment and any post-exercise sales.</li>
                    <li>For foreign-parent RSUs: stock plan administrator statement (Fidelity, E-Trade, Morgan Stanley, Charles Schwab); SBI TT buying rate on each vesting date.</li>
                </ul>
                <p><strong>Capital Gains Investors:</strong></p>
                <ul>
                    <li>Broker capital gains statement (Zerodha, Groww, ICICIdirect, Upstox) with STCG and LTCG bucketed.</li>
                    <li>Mutual fund consolidated account statement (CAMS, KFintech).</li>
                    <li>Property sale deed, purchase deed, registration receipts; valuation report if claiming 1 April 2001 FMV cost basis.</li>
                    <li>Section 54, 54EC, 54F reinvestment proofs (purchase deed for replacement property, NHAI/REC bond certificate).</li>
                </ul>
                <p><strong>Foreign Asset Holders (Schedule FA Mandatory for ROR):</strong></p>
                <ul>
                    <li>Foreign bank account statements with peak value and closing balance per FY.</li>
                    <li>Foreign equity holdings (vested RSUs from foreign parent) - shareholder statement from plan administrator.</li>
                    <li>Form 67 working sheet for Foreign Tax Credit under Section 90 read with Rule 128 (filed BEFORE ITR submission).</li>
                    <li>Foreign country tax certificates (US Form 1042-S, UK SA302, etc.).</li>
                </ul>
                <p><strong>Key Outputs You Receive:</strong> Filed ITR-1 or ITR-2 acknowledgement with e-verification confirmation. Old vs new regime comparison memo with chosen regime justification. AIS, Form 26AS and Form 16 reconciliation with variance notes. ESOP perquisite worksheet (Form 12BA validation) tying exercise FMV to cost of acquisition for future sale. Capital gains schedule (Schedule CG) with STCG and LTCG bucketing and Section 87A applicability memo. Multi-Form-16 consolidation sheet showing TDS by TAN.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Salaried ITR Mistakes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>AIS overstates capital gains - each redemption reported, cost basis not netted</strong></td><td>AIS picks up each broker-reported capital gain transaction at sale value but does not net cost of acquisition. Filing the ITR with broker P and L numbers triggers a Section 143(1)(a) demand notice from CPC Bangalore because the AIS shows higher gain than the ITR.</td><td>Patron files AIS feedback before ITR submission, reconciling broker P and L to AIS line items with cost basis netted. Zero adverse 143(1)(a) intimations in AY 2025-26 cohort.</td></tr>
                        <tr><td><strong>Job changer files ITR-1 with only the latest Form 16</strong></td><td>An employee who changed jobs in October files using only the new employer's Form 16, leaving the prior employer's salary undeclared. The prior employer's TDS was filed but the income was not declared - Section 143(1)(a) demand notice arrives with Section 270A under-reporting penalty exposure at 50 percent of tax.</td><td>Patron collects Form 16 from EVERY employer of the FY and consolidates Section 17(1) gross salary across TANs. Schedule TDS-1 reports each employer TAN separately.</td></tr>
                        <tr><td><strong>ESOP perquisite in Form 12BA but ITR-1 filed instead of ITR-2</strong></td><td>The employee files ITR-1 because salary is the dominant income; the Form 12BA perquisite slips through. ITR-1 with ESOP perquisite is a defective return under Section 139(9) - notice arrives within 60 to 90 days of filing with a 15-day correction window.</td><td>Patron auto-routes ESOP holders to ITR-2 from day one. Form 12BA reconciled line-by-line; Schedule CG ready for post-exercise sales.</td></tr>
                        <tr><td><strong>Regime opt-out missed by salaried with Rs 1.5 lakh+ Section 80C investments</strong></td><td>The portal defaults to new regime. A taxpayer with Rs 1.5 lakh PPF plus Rs 50,000 health insurance plus Rs 1 lakh HRA plus Rs 2 lakh home loan interest pays more tax under the new regime by Rs 30,000 to Rs 75,000 depending on salary level.</td><td>Patron runs a regime comparison memo every year. Old regime stays beneficial when 80C plus 80D plus HRA plus 24(b) deductions cumulatively exceed approximately Rs 3.5 to 4 lakh - the breakeven shifts with salary level.</td></tr>
                        <tr><td><strong>Section 87A claimed against capital gains (Section 111A/112A)</strong></td><td>Section 87A rebate does NOT apply to special-rate income under Sections 111A (STCG) and 112A (LTCG). A taxpayer with Rs 11.8 lakh salary plus Rs 1 lakh LTCG who expects zero tax under 87A is surprised by 12.5 percent LTCG on Rs 25,000 above the Rs 1.25 lakh exemption.</td><td>Patron Section 87A interaction memo explicitly walks through which income heads qualify and which do not. Special-rate income separated in Schedule CG before rebate application.</td></tr>
                        <tr><td><strong>ESOP unlisted holding period misclassified as 12 months</strong></td><td>ESOP shares are unlisted for the holding period test UNTIL the employer is listed - 24-month threshold applies, not 12 months. Many ESOP holders mis-classify and pay 20 percent STCG when LTCG at 12.5 percent would apply with a 24-month hold.</td><td>Patron tracks listing status at the date of sale. Pre-listing ESOPs use 24-month threshold; post-listing ESOPs use 12-month threshold from date of allotment (not date of grant).</td></tr>
                        <tr><td><strong>Foreign-parent RSU Schedule FA omission (Black Money Act risk)</strong></td><td>Resident Ordinarily Resident (ROR) employees of Indian subsidiaries of US/UK/EU multinationals frequently miss Schedule FA disclosure for vested RSUs held in the US/UK brokerage account. Non-disclosure attracts Rs 10 lakh penalty under Black Money Act 2015 Section 42 plus prosecution up to 10 years.</td><td>Patron Schedule FA workflow captures initial value (acquisition cost in INR at vesting), peak value during FY and closing balance for each foreign-parent share holding. CRS and FATCA data cross-checked.</td></tr>
                        <tr><td><strong>LTCG up to Rs 1.25 lakh not reported in Schedule CG</strong></td><td>Listed equity LTCG up to Rs 1.25 lakh is exempt under Section 112A but MUST still be reported in Schedule CG. Filing without reporting (because it is exempt) triggers a Section 139(9) defective return notice.</td><td>Patron reports all LTCG in Schedule CG regardless of exempt status. The Rs 1.25 lakh exemption is applied at the rebate computation stage, not by omitting from reporting.</td></tr>


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
            <h2 class="section-title">Salaried ITR Filing Fees (AY 2026-27)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Simple salaried, single Form 16, no capital gains</td><td>ITR-1 Sahaj with Form 16 review, AIS and Form 26AS reconciliation, regime arbitrage memo</td><td class="table-amount">Rs 999</td></tr>
                        <tr><td>Salaried with HRA, home loan interest, 80C investments</td><td>ITR-1 with old regime optimisation - Section 80C up to Rs 1.5 lakh, 80D, HRA, 24(b) home loan interest</td><td class="table-amount">Rs 999</td></tr>
                        <tr><td>Multi-Form-16 (2+ employers in same FY)</td><td>Consolidation across employer TANs; Section 17(1) gross salary, standard deduction applied ONCE; Schedule TDS-1 per TAN</td><td class="table-amount">Rs 1,499</td></tr>
                        <tr><td>Salaried with capital gains (equity, MF, property)</td><td>ITR-2 with Schedule CG; STCG under Section 111A at 20 percent; LTCG under Section 112A at 12.5 percent above Rs 1.25 lakh</td><td class="table-amount">Rs 2,499</td></tr>
                        <tr><td>Salaried with ESOP perquisite plus capital gains on sale</td><td>ITR-2 with Section 17(2)(vi) reconciliation against Form 12BA; Rule 3 FMV at exercise as cost basis for post-sale gains</td><td class="table-amount">Rs 2,999</td></tr>
                        <tr><td>Salaried with RSU vesting (Indian or foreign-parent)</td><td>ITR-2 with Section 192 TDS reconciliation on vesting perquisite; Schedule FA for foreign-parent shares; SBI TT rate conversion</td><td class="table-amount">Rs 2,999</td></tr>
                        <tr><td>Salaried with foreign assets (Schedule FA)</td><td>ITR-2 with full Schedule FA disclosure - foreign bank, foreign equity, foreign trusts; CRS and FATCA cross-check</td><td class="table-amount">Rs 4,999</td></tr>
                        <tr><td>NRI salaried returnee with DTAA relief (Form 67)</td><td>ITR-2 with residency change rules under Section 6; Form 67 Foreign Tax Credit filed BEFORE ITR; Schedule FA for foreign assets</td><td class="table-amount">Rs 5,999</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees</strong></td><td>Standard starting price for simple ITR-1; notice response under Sections 143(1)(a), 139(9), 142(1), 148 and 143(2) included for 12 months on every filing</td><td class="table-amount"><strong>Starting from INR 999 (Excl. GST and Govt. Charges)</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;"><strong>Disclaimer:</strong> All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR Filing for Salary consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20salaried%20ITR%20filing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Simple ITR-1 (single Form 16, no capital gains)</td><td class="table-amount">24 to 48 hours</td></tr>
                        <tr><td>Multi-Form-16 consolidation</td><td class="table-amount">2 to 3 working days</td></tr>
                        <tr><td>ITR-2 with capital gains and ESOP</td><td class="table-amount">3 to 5 working days</td></tr>
                        <tr><td>ITR-2 with foreign assets and DTAA relief</td><td class="table-amount">5 to 7 working days</td></tr>
                        <tr><td>NRI returnee with Form 67 and Schedule FA</td><td class="table-amount">5 to 7 working days</td></tr>
                        <tr><td>Refund processing by CPC Bangalore post e-verification</td><td class="table-amount">7 to 45 days</td></tr>
                        <tr><td><strong>Statutory Deadlines AY 2026-27</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>ITR-1 and ITR-2 non-audit cases</td><td class="table-amount">31 July 2026</td></tr>
                        <tr><td>E-verification window per CBDT Notification 5/2022</td><td class="table-amount">30 days from filing</td></tr>
                        <tr><td>Belated return under Section 139(4) with Section 234F fee</td><td class="table-amount">31 December 2026</td></tr>
                        <tr><td>Revised return under Section 139(5)</td><td class="table-amount">31 March 2027</td></tr>
                        <tr><td>Updated Return (ITR-U) under Section 139(8A)</td><td class="table-amount">31 March 2031</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    With the 31 July 2026 due date, engage Patron Accounting by 15 July 2026 to avoid portal congestion in the last fortnight. Job changers and ESOP holders should engage by 30 June 2026 to allow Form 16 collection from multiple employers and Form 12BA reconciliation. Late filing triggers Section 234F fee up to Rs 5,000 plus Section 234A interest at 1 percent per month from 1 August 2026. Belated returns under Section 139(4) forfeit business and capital loss carry-forward rights under Sections 71, 72 and 74 - only house property loss carry-forward survives.

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
            <h2 class="section-title">Why CA-Assisted Salaried Filing</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><h3>Old vs New Regime Memo</h3><p>Side-by-side tax computation with breakeven analysis. Salaried opt-in for old regime done directly in the ITR without Form 10-IEA. Documented decision rationale retained for scrutiny defence.</p></article>
    <article class="feature-card"><h3>Multi-Form-16 Consolidation Protection</h3><p>Section 17(1) gross salary consolidated across all employer TANs. Standard deduction applied ONCE under Section 16(ia). Prevents Section 270A under-reporting penalty at 50 percent of tax.</p></article>
    <article class="feature-card"><h3>ESOP and RSU Reconciliation</h3><p>Form 12BA validated against Section 17(2)(vi) computation. Rule 3 FMV at exercise locked as cost basis for future sale. Section 192(1C) DPIIT startup deferral verified against IMB status.</p></article>
    <article class="feature-card"><h3>Capital Gains in Schedule CG</h3><p>STCG and LTCG correctly bucketed by asset class, holding period and applicable rate. Section 87A interaction memo clarifies which income heads qualify for the rebate.</p></article>
    <article class="feature-card"><h3>AIS Feedback Pre-Submission</h3><p>Line-by-line AIS variance report. Feedback filed for incorrect entries (overstated capital gains, mis-classified dividends) before ITR submission. Reduces Section 143(1)(a) demand notice rate to near-zero.</p></article>
    <article class="feature-card"><h3>12 Months Notice Support Included</h3><p>Section 139(9) defective return, Section 143(1)(a) demand from CPC, Section 142(1) inquiry, Section 148 reassessment - all covered by named CA partner for 12 months post-filing at no extra cost.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 50,000+ Salaried Filers Across India</h2>
            <div class="content-text">
                
                <p><strong>50,000+ Salaried Returns Filed | 4.9 Google Rating | 15+ Years in Practice | Pune Mumbai Delhi Gurugram</strong></p>
                <p>I changed jobs in October from a Pune product company to a Bengaluru SaaS firm. Both employers gave me Form 16 with separate basic exemption applied. I would have owed Rs 1.4 lakh as self-assessment tax. Patron consolidated both Form 16s, identified the standard deduction double-claim, and computed the actual liability. Filed by 25 July 2025 with full reconciliation. - Senior Engineer, Bengaluru.</p>
                <p>My employer is a US-headquartered startup with India operations. RSUs vested in March 2026 worth Rs 18 lakh perquisite. Form 12BA showed the value correctly. Patron filed ITR-2 with Schedule FA for the foreign-parent shares and tracked FMV at vesting as cost basis. Zero defective return notices. - Product Manager, NCR.</p>
                <p>I sold equity worth Rs 14 lakh in November 2025 - some LTCG, some STCG. Plus Rs 22 lakh salary plus Rs 60,000 dividend. Patron correctly bucketed STCG under 111A at 20 percent and LTCG under 112A above the Rs 1.25 lakh exemption at 12.5 percent. Got a refund of Rs 11,400 from excess TDS. - Marketing Director, Mumbai.</p>
                <p><strong>Outcome Proof:</strong> Across the AY 2025-26 cycle, Patron filed 12,400+ salaried ITRs with zero defective return notices under Section 139(9), 99.6 percent on-time submission, and Rs 8.2 crore aggregate excess-TDS refunds recovered for clients.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves salaried clients across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Old Regime vs New Regime - Salaried Decision Matrix</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>New Tax Regime (Default for AY 2026-27)</th>
                            <th>Old Tax Regime (Opt-In Directly in ITR)</th>
                        </tr>
</thead>
                    <tbody>
                        
                        <tr><td><strong>Basic Exemption Limit</strong></td><td>Rs 4 lakh for all individuals</td><td>Rs 2.5 lakh below 60, Rs 3 lakh for 60 to 80, Rs 5 lakh for above 80</td></tr>
                        <tr><td><strong>Standard Deduction (Section 16(ia))</strong></td><td>Rs 75,000</td><td>Rs 50,000</td></tr>
                        <tr><td><strong>Section 87A Rebate</strong></td><td>Rs 60,000 (zero tax up to Rs 12 lakh; Rs 12.75 lakh for salaried with standard deduction)</td><td>Rs 12,500 (zero tax up to Rs 5 lakh)</td></tr>
                        <tr><td><strong>Tax Slab Structure</strong></td><td>7 slabs - 0/5/10/15/20/25/30 percent</td><td>4 slabs - 0/5/20/30 percent</td></tr>
                        <tr><td><strong>Top Slab Entry (30 percent)</strong></td><td>Above Rs 24 lakh</td><td>Above Rs 10 lakh</td></tr>
                        <tr><td><strong>Section 80C (PPF, ELSS, life insurance)</strong></td><td>NOT allowed (except 80CCD(2) employer NPS)</td><td>Up to Rs 1.5 lakh allowed</td></tr>
                        <tr><td><strong>Section 80D (Health Insurance)</strong></td><td>NOT allowed</td><td>Rs 25,000 self plus Rs 50,000 senior parents</td></tr>
                        <tr><td><strong>HRA Exemption (Section 10(13A))</strong></td><td>NOT allowed</td><td>Full HRA under three-formula lower</td></tr>
                        <tr><td><strong>Home Loan Interest Section 24(b)</strong></td><td>Self-occupied NOT allowed; let-out full</td><td>Self-occupied up to Rs 2 lakh; let-out full</td></tr>
                        <tr><td><strong>Form 10-IEA Requirement (Salaried)</strong></td><td>NOT required - salaried can switch each year directly in the ITR before due date</td><td>NOT required for salaried - direct in-ITR opt-in (Form 10-IEA is only for business and professional taxpayers)</td></tr>
                        <tr><td><strong>Best For (Salaried)</strong></td><td>Low or no deductions; ESOP and RSU recipients; freelancers without home loan; salary up to Rs 20 lakh with minimal claims</td><td>Total deductions (80C + 80D + HRA + 24(b)) exceeding approximately Rs 4 to 4.5 lakh; established Section 80C maxed + HRA + home loan</td></tr>
                        <tr><td><strong>Breakeven Rule of Thumb (Rs 15 lakh salary)</strong></td><td>Wins if total deductions below Rs 4 lakh</td><td>Wins if total deductions above Rs 4 to 4.5 lakh</td></tr>


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
                    <li><strong><a href="/income-tax-return/">Income Tax Return Filing Master Hub</a></strong> - hub-and-spoke routing across all 7 ITR forms and 14 sub-services including individual, business, professional, capital gains, F and O, crypto, NRI and company filings.</li>
                    <li><strong><a href="/itr-for-fno-trader/">ITR for F and O Traders</a></strong> - for salaried employees with F and O trading on the side; F and O is non-speculative business income under Explanation 2 to Section 28, routed through ITR-3 with set-off rules under Section 70.</li>
                    <li><strong><a href="/itr-for-property-sale/">ITR for Property Sale</a></strong> - Section 54, 54EC, 54F reinvestment exemption planning; indexation transition for properties acquired before 23 July 2024 (taxpayer's choice of 12.5 percent without indexation or 20 percent with indexation).</li>
                    <li><strong><a href="/itr-for-crypto-traders/">ITR for Crypto Traders</a></strong> - 30 percent flat tax under Section 115BBH on VDA gains, 1 percent TDS under Section 194S; Schedule VDA disclosure per coin.</li>
                    <li><strong><a href="/itr-for-capital-gains/">ITR for Capital Gains</a></strong> - comprehensive treatment of STCG and LTCG across all asset classes including equity, mutual funds, property, gold and bonds.</li>
                    <li><strong><a href="/tax-planning-services/">Tax Planning Services</a></strong> - structure salary components and investments before year-end for next year's filing; regime arbitrage memo, Section 80C maximisation, NPS Section 80CCD planning.</li>
                    <li><strong><a href="/income-tax-notice/">Income Tax Notice Response</a></strong> - Section 143(1)(a) intimation, Section 139(9) defective return, Section 142(1) inquiry, Section 148 reassessment, faceless assessment under Section 144B.</li>
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
                    <li><strong>Income Tax Act, 1961</strong> - governing statute for AY 2026-27 salaried returns. The new Income Tax Act 2025 applies to FY 2026-27 income (Tax Year 2026-27 returns due in 2027). <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department e-filing portal</a>.</li>
                    <li><strong>Section 15</strong> - Salary chargeable to tax on due basis or receipt basis whichever is earlier.</li>
                    <li><strong>Section 16</strong> - Deductions from salary - standard deduction Section 16(ia), entertainment allowance Section 16(ii), professional tax Section 16(iii).</li>
                    <li><strong>Section 17(1)</strong> - Definition of salary (basic, DA, allowances, bonus, perquisites) - the starting point for ITR computation.</li>
                    <li><strong>Section 17(2)</strong> - Perquisites - includes ESOP/sweat equity perquisite under Section 17(2)(vi).</li>
                    <li><strong>Section 17(2)(vi)</strong> - ESOP and sweat equity perquisite at exercise; computed as FMV minus exercise price multiplied by shares.</li>
                    <li><strong>Section 17(3)</strong> - Profits in lieu of salary - severance, terminal benefits, gratuity portion above exemption limits.</li>
                    <li><strong>Rule 3 of Income Tax Rules 1962</strong> - FMV valuation methodology for ESOPs and other perquisites; listed shares use average of opening and closing market price on exercise date; unlisted shares use Category I merchant banker valuation.</li>
                    <li><strong>Section 80C</strong> - Up to Rs 1.5 lakh deduction (PPF, ELSS, life insurance, principal repayment, ULIP, tuition fees) - old regime only.</li>
                    <li><strong>Section 80D</strong> - Health insurance premium - Rs 25,000 self plus Rs 50,000 for senior parents (old regime only).</li>
                    <li><strong>Section 80CCD(2)</strong> - Employer NPS contribution - allowed in BOTH old and new regimes.</li>
                    <li><strong>Section 87A</strong> - Rebate Rs 60,000 new regime, Rs 12,500 old regime; Resident individuals only; non-refundable; not available against Section 111A/112A income.</li>
                    <li><strong>Section 115BAC</strong> - New tax regime (default for non-business taxpayers from AY 2024-25 onwards).</li>
                    <li><strong>Section 111A</strong> - STCG on listed equity at 20 percent (post Budget 2024).</li>
                    <li><strong>Section 112A</strong> - LTCG on listed equity at 12.5 percent above Rs 1.25 lakh (post Budget 2024).</li>
                    <li><strong>Section 112</strong> - LTCG on unlisted shares, debt mutual funds, gold, jewellery, real estate at 12.5 percent without indexation (post 23 July 2024).</li>
                    <li><strong>Section 24(b)</strong> - Home loan interest deduction up to Rs 2 lakh self-occupied (old regime only); let-out full deduction in both regimes.</li>
                    <li><strong>Section 10(13A)</strong> - HRA exemption under three-formula lower (old regime only).</li>
                    <li><strong>Section 192</strong> - TDS on salary by employer on average rates.</li>
                    <li><strong>Section 192(1C)</strong> - Startup ESOP perquisite TDS deferral up to 48 months for DPIIT-recognised startups with IMB certification; expands to 60 months under Income Tax Act 2025 Section 392(3).</li>
                    <li><strong>Section 139(1)</strong> - Mandatory return filing for income above basic exemption.</li>
                    <li><strong>Section 139(4)</strong> - Belated return until 31 December 2026 for AY 2026-27 with Section 234F fee.</li>
                    <li><strong>Section 139(5)</strong> - Revised return until 31 March 2027 for AY 2026-27.</li>
                    <li><strong>Section 139(8A)</strong> - Updated Return (ITR-U) within 48 months from end of AY; until 31 March 2031 for AY 2026-27.</li>
                    <li><strong>Section 139(9)</strong> - Defective return notice; respond within 15 days.</li>
                    <li><strong>Section 139AA</strong> - Mandatory PAN-Aadhaar linkage.</li>
                    <li><strong>Section 140A</strong> - Self-assessment tax payment before ITR filing where TDS is insufficient.</li>
                    <li><strong>Section 234F</strong> - Late filing fee Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh).</li>
                    <li><strong>Section 234A</strong> - Interest at 1 percent per month on unpaid tax from due date.</li>
                    <li><strong>Section 234B and 234C</strong> - Interest for advance tax default at 1 percent per month each.</li>
                    <li><strong>Section 270A</strong> - Under-reporting penalty at 50 percent of tax; 200 percent for mis-reporting.</li>
                    <li><strong>Section 271AAC</strong> - 60 percent on under-declared income from undisclosed sources.</li>
                    <li><strong>Section 90 and 91 read with Rule 128</strong> - DTAA relief and unilateral foreign tax credit; Form 67 filed BEFORE ITR submission.</li>
                    <li><strong>Section 6</strong> - Residency rules; Resident, RNOR, NRI classification - critical for NRI returnees.</li>
                    <li><strong>Black Money (Undisclosed Foreign Income and Assets) Act 2015 Section 42</strong> - Rs 10 lakh penalty for undisclosed foreign assets in Schedule FA.</li>
                    <li><strong>CBDT Notification 5/2022 dated 29 July 2022</strong> - 30-day e-verification window.</li>
                    <li><strong>Central Board of Direct Taxes (CBDT)</strong> - <a href="https://incometaxindia.gov.in/Pages/communications/notifications.aspx" target="_blank" rel="noopener">CBDT Notifications</a>.</li>
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
                    <p class="faq-expanded__lead">Long-tail answers on salaried ITR filing for AY 2026-27 - form selection between ITR-1 and ITR-2, multi-Form-16 consolidation for job changers, ESOP and RSU taxation, new regime zero-tax threshold under Section 87A, capital gains under Sections 111A and 112A, fees, regime selection between old and new, and late filing penalty under Section 234F.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should a salaried person file for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>Salaried individuals with total income up to Rs 50 lakh from salary, one or two house properties, and other sources file ITR-1 Sahaj. ITR-2 is required if you have capital gains under Section 111A or 112A, ESOP perquisite carry-over, foreign assets, are a director of a company, or hold unlisted shares. Salaried earners with side business or freelance income file ITR-3 instead. The due date is 31 July 2026.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How do I file ITR with multiple Form 16 after a job change?</h3>
                        <div class="faq-expanded__a"><p>Collect Form 16 Part A and Part B from every employer of the financial year. Add Section 17(1) gross salary from each. Apply standard deduction of Rs 75,000 under new regime or Rs 50,000 under old regime ONCE (not per employer). Compute tax on the consolidated income at correct slabs. Each employer may have under-withheld TDS because each applied basic exemption independently. Pay self-assessment tax under Section 140A before filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How are ESOPs taxed for salaried employees in India?</h3>
                        <div class="faq-expanded__a"><p>ESOPs are taxed in two stages. At exercise, the perquisite under Section 17(2)(vi) equals FMV minus exercise price multiplied by shares allotted, added to your salary, with TDS deducted by the employer under Section 192. At sale, the gain equals sale price minus FMV at exercise, taxed as STCG or LTCG based on holding period. Form 12BA from the employer documents the perquisite. DPIIT-recognised startup employees can defer TDS for 48 months under Section 192(1C).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the new tax regime zero-tax threshold for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>Under the new tax regime, Section 87A rebate of Rs 60,000 makes income up to Rs 12 lakh tax-free for individuals. Salaried employees claiming the Rs 75,000 standard deduction under Section 16(ia) effectively have zero tax up to Rs 12.75 lakh of gross salary. Marginal relief ensures that for incomes just above Rs 12 lakh, the additional tax does not exceed the income excess over Rs 12 lakh. Special-rate income such as capital gains under Section 111A and 112A does NOT qualify for the 87A rebate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How are capital gains taxed for salaried investors in AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>Listed equity shares and equity mutual funds: STCG at 20 percent under Section 111A (holding up to 12 months), LTCG at 12.5 percent on gains above Rs 1.25 lakh under Section 112A. Unlisted shares (including ESOP carry-over): STCG at slab rate, LTCG at 12.5 percent without indexation after 24 months. Real estate sold after 23 July 2024: LTCG at 12.5 percent without indexation, or 20 percent with indexation for properties acquired before that date (taxpayer's choice). All capital gains require ITR-2.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How much does CA-assisted salaried ITR filing cost?</h3>
                        <div class="faq-expanded__a"><p>Patron Accounting salaried ITR filing starts at Rs 999 for ITR-1 with single Form 16. ITR-1 with HRA, home loan interest, and 80C deductions is Rs 999. Multi-Form-16 consolidation for job changers is Rs 1,499. ITR-2 with capital gains is Rs 2,499. ITR-2 with ESOP perquisite plus capital gains is Rs 2,999. ITR-2 with foreign assets disclosure under Schedule FA is Rs 4,999. NRI returnee filings with DTAA relief through Form 67 start at Rs 5,999.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Should I opt for old or new tax regime as a salaried employee?</h3>
                        <div class="faq-expanded__a"><p>The new regime is the default. Opt for old only if your total deductions (Section 80C up to Rs 1.5 lakh, 80D up to Rs 50,000, HRA, home loan interest under Section 24(b) up to Rs 2 lakh) exceed approximately Rs 4 to 4.5 lakh. The breakeven shifts with income level. Salaried earners can switch regime each year directly in the ITR before the due date - no Form 10-IEA required for non-business filers. Run a side-by-side computation before deciding.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the late filing penalty for salaried ITR?</h3>
                        <div class="faq-expanded__a"><p>Under Section 234F, late filing attracts a fee of Rs 1,000 if total income is up to Rs 5 lakh, and Rs 5,000 if income exceeds Rs 5 lakh. Section 234A interest at 1 percent per month on unpaid tax applies from 1 August 2026 until the date of filing. Belated returns can be filed until 31 December 2026 under Section 139(4) but carry-forward of losses under Sections 71 and 72 is lost. Revised returns are permitted until 31 March 2027 under Section 139(5).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">Salary wale log konsa ITR bharte hain AY 2026-27 mein? (Which ITR form do salaried employees file for AY 2026-27)</h3>
                        <div class="faq-expanded__a"><p>AY 2026-27 ke liye simple salaried log (income up to Rs 50 lakh, no capital gains, no ESOP) ITR-1 Sahaj file karte hain. Agar capital gains hai (equity, MF, property), ESOP exercise hua hai, foreign assets hai, ya company director hain, to ITR-2 file karna padega. Side business ya freelance income wale ITR-3 file karte hain. Last date 31 July 2026 hai non-audit cases ke liye. New regime default hai Section 115BAC ke under - Rs 12 lakh tak zero tax (Section 87A rebate Rs 60,000), salaried ke liye Rs 75,000 standard deduction ke saath Rs 12.75 lakh tak zero tax. Old regime mein Section 80C, 80D, HRA, home loan interest claim kar sakte hain agar total deductions Rs 4 lakh se zyada hai. Patron Accounting Rs 499 se start hone wali ITR-1 filing offer karta hai. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>When is salaried ITR due for AY 2026-27?</strong> 31 July 2026 for ITR-1 and ITR-2 non-audit cases.</li>
                    <li><strong>What is the zero-tax salary under the new regime?</strong> Rs 12.75 lakh of gross salary - Rs 4 lakh basic exemption plus Rs 75,000 standard deduction plus Rs 60,000 Section 87A rebate.</li>
                    <li><strong>How is ESOP perquisite valued?</strong> FMV at exercise minus exercise price, multiplied by shares exercised. FMV for listed shares is the average of opening and closing market price on exercise date under Rule 3.</li>
                    <li><strong>What is the LTCG rate on equity for AY 2026-27?</strong> 12.5 percent on gains above Rs 1.25 lakh under Section 112A, for listed equity held more than 12 months.</li>
                    <li><strong>What is the STCG rate on equity for AY 2026-27?</strong> 20 percent under Section 111A for listed equity held up to 12 months (post Budget 2024).</li>
                    <li><strong>Does Section 87A rebate apply to capital gains?</strong> No - the rebate does NOT apply to special-rate income under Sections 111A and 112A.</li>
                    <li><strong>Can salaried switch regimes each year?</strong> Yes - salaried can switch directly in the ITR each year before the due date without Form 10-IEA.</li>
                    <li><strong>What is the e-verification window?</strong> 30 days from filing per CBDT Notification 5/2022 - else ITR treated as invalid.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AY 2026-27 Salaried ITR Countdown - Engage by 15 July 2026</h2>
            <div class="content-text">
                
                Statutory due date is 31 July 2026 for ITR-1 and ITR-2 non-audit salaried cases. Late filing triggers Section 234F fee up to Rs 5,000 plus Section 234A interest at 1 percent per month from 1 August 2026. Belated returns under Section 139(4) forfeit capital loss carry-forward under Section 74 and business loss carry-forward under Section 72. Job changers should collect Form 16 from every employer by 30 June 2026 to avoid last-week document chasing. Engage Patron Accounting by 15 July 2026 to lock in regime selection, validate multi-Form-16 consolidation and reconcile ESOP perquisite with Form 12BA. <strong>Call +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free 20-minute scoping call - we respond within 2 hours.

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron for AY 2026-27 Salaried ITR Filing</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>ITR Filing for Salary in AY 2026-27 covers single-employer simple ITR-1 returns, job-changer multi-Form-16 consolidations under Section 17(1), ESOP and RSU perquisite reconciliations under Section 17(2)(vi) with Form 12BA validation, and capital gains overlay in Schedule CG across equity (Sections 111A and 112A), mutual funds, property and bonds. Regime selection between default new and opt-in old, AIS reconciliation before submission, and Form 12BA validation are decisions that affect tax liability by tens of thousands of rupees per year and remain the most under-served pain point for salaried Indians.</p>
                <p>Patron Accounting has filed 50,000+ salaried ITRs over 15+ years, with offices in Pune, Mumbai, Delhi and Gurugram and a single named CA owning the full filing cycle. In the AY 2025-26 cycle, the firm filed 12,400+ salaried ITRs with zero defective return notices under Section 139(9), 99.6 percent on-time submission, and recovered Rs 8.2 crore aggregate excess-TDS refunds for clients.</p>
                <p>Ready to file your AY 2026-27 salaried ITR? <strong>Call CA Sundaram Gupta at +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free consultation. We respond within 2 hours during business hours.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20salaried%20ITR%20filing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Salaried ITR filing is delivered remotely from our Pune, Mumbai, Delhi and Gurugram offices to salaried clients across India. The Income Tax e-filing portal is national; registered office location does not constrain the engagement. Explore the master ITR hub and adjacent compliance services below.</p>
            
            
            <div class="pa-cross-block">
                <h3 class="pa-cross-title">Related Patron Services</h3>
                <div class="pa-cross-grid">
                    <a href="/income-tax-return/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR Filing Master Hub</strong><span>All 7 ITR forms; 14 sub-services</span></div>
                    </a>
                    <a href="/itr-for-capital-gains/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Capital Gains</strong><span>Equity, MF, Section 111A, 112A</span></div>
                    </a>
                    <a href="/itr-for-property-sale/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Property Sale</strong><span>Section 54, 54EC, 54F reinvestment</span></div>
                    </a>
                    <a href="/itr-for-fno-trader/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for F and O Traders</strong><span>Salary plus F and O business income</span></div>
                    </a>
                    <a href="/itr-for-crypto-traders/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Crypto Traders</strong><span>Section 115BBH 30 percent flat tax</span></div>
                    </a>
                    <a href="/tax-planning-services/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Tax Planning Services</strong><span>Pre-year-end regime arbitrage</span></div>
                    </a>
                    <a href="/income-tax-notice/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Income Tax Notice Response</strong><span>139(9), 143(1)(a), 142(1), 148</span></div>
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
            <p>Tier 1 quarterly review plus post-Budget and post-CBDT notification refresh. Triggers for review: Finance Act amendments affecting regime slabs or Section 87A rebate, capital gains rate changes under Sections 111A and 112A, ESOP rule changes under Section 17(2)(vi) and Rule 3, CBDT notifications on ITR-1 and ITR-2 schema, AIS and TIS feature changes, Section 192(1C) DPIIT startup ESOP TDS deferral window changes (48 months under existing Act, 60 months under Income Tax Act 2025), new Income Tax Act 2025 transitional rules for Tax Year 2026-27, Schedule FA reporting expansions and Section 234F/234A interest rate changes. Sources: Income Tax Department portal (incometax.gov.in), CBDT notifications (incometaxindia.gov.in), Finance Act 2026 and ICAI Direct Tax Committee publications.</p>
        </div>
    </div>
</section>

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
