
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
    <title>ITR for Crypto Income - Section 115BBH, Schedule VDA & 30%</title>
    <meta name="description" content="File ITR for crypto traders in India. 30% VDA tax under Section 115BBH, 1% TDS under Section 194S. CA-assisted Schedule VDA filing from Rs. 1,499.">
    <link rel="canonical" href="/itr-for-crypto-traders">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Crypto Income - Section 115BBH, Schedule VDA & 30%">
    <meta property="og:description" content="File ITR for crypto traders in India. 30% VDA tax under Section 115BBH, 1% TDS under Section 194S. CA-assisted Schedule VDA filing from Rs. 1,499.">
    <meta property="og:url" content="/itr-for-crypto-traders">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Crypto Income - Section 115BBH, Schedule VDA & 30%">
    <meta name="twitter:description" content="File ITR for crypto traders in India. 30% VDA tax under Section 115BBH, 1% TDS under Section 194S. CA-assisted Schedule VDA filing from Rs. 1,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "ITR for Crypto Traders: CA Filing",
          "description": "File ITR for crypto traders in India. 30% VDA tax under Section 115BBH, 1% TDS under Section 194S. CA-assisted Schedule VDA filing from Rs. 1,499.",
          "url": "https://www.patronaccounting.com/itr-for-crypto-traders",
          "serviceType": "ITR for Crypto Traders: CA Filing",
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
            "url": "https://www.patronaccounting.com/itr-for-crypto-traders",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "1499",
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
            { "@type": "ListItem", "position": 3, "name": "ITR for Crypto Traders", "item": "https://www.patronaccounting.com/itr-for-crypto-traders" }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which ITR form should I use for crypto trading income?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Use ITR-2 if you treat crypto as investment (capital gains) with no business income. Use ITR-3 for high-frequency traders or those with other business/professional income. ITR-1 and ITR-4 cannot be used for any VDA income - filing with these results in defective return notice. Both ITR-2 and ITR-3 include Schedule VDA for per-transaction disclosure. Tax rate is 30% in both cases under Section 115BBH."
              }
            },
            {
              "@type": "Question",
              "name": "How much tax do I pay on cryptocurrency gains in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 115BBH: 30% flat on all VDA income + 4% Health and Education Cess = 31.2% minimum. Surcharge applies above Rs 50 lakh total income. Only original purchase price (cost of acquisition) is deductible - exchange fees, gas fees, and trading commissions are excluded. Budget 2026-27 confirmed no change. Section 87A rebate is NOT applicable to 115BBH income."
              }
            },
            {
              "@type": "Question",
              "name": "Can I set off cryptocurrency losses against salary or other income?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Section 115BBH explicitly prohibits setting off VDA losses against any other income head - including salary, business, house property, or capital gains from shares. You cannot even set off losses from one crypto against gains from another crypto in the same year. VDA losses also cannot be carried forward. Lost Rs 3 lakh on ETH but gained Rs 5 lakh on BTC? You pay 30% on the full Rs 5 lakh."
              }
            },
            {
              "@type": "Question",
              "name": "What is TDS on crypto and how do I claim it back?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 194S (effective July 2022), exchanges deduct 1% TDS on total sale consideration (not just profit) when annual VDA transactions exceed Rs 50,000 (specified persons) or Rs 10,000 (others). This appears in Form 26AS and AIS. When filing ITR, declare as tax credit against 30% liability. If TDS exceeds actual tax, the excess is refunded. TDS is an advance payment, not extra charge."
              }
            },
            {
              "@type": "Question",
              "name": "Do I need to report crypto on Binance or Coinbase in my Indian ITR?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Indian residents are taxed on global income. All crypto trades on Binance, Coinbase, KuCoin, OKX, or any offshore exchange must be reported in Schedule VDA. If foreign holdings exceed Rs 5 lakh, Schedule FA (Foreign Assets) is also required. Non-disclosure attracts Black Money Act penalties. India is adopting OECD CARF by April 2027 - offshore crypto will become automatically visible to the ITD."
              }
            },
            {
              "@type": "Question",
              "name": "Crypto ka ITR kaise bhare aur Schedule VDA mein kya fill karna hota hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ITR-2 ya ITR-3 file karni hoti hai. Schedule VDA mein har ek trade ka alag entry: coin ka naam, purchase date, sale date, purchase price (INR), sale price (INR), aur 1% TDS. Aggregated total accept nahi hogi - portal individually validate karta hai. Tax 30% flat hota hai Section 115BBH ke under. TDS credit Form 26AS se claim hoti hai. Patron Accounting poori filing handle karta hai. Call: +91 945 945 6700. Quick Answers Q: Crypto tax rate India 2026? A: 30% flat (Section 115BBH) + 4% cess = 31.2% minimum. No deductions except cost. No 87A rebate. Budget 2026-27 confirmed no change. Q: Is crypto-to-crypto swap taxable? A: Yes - every swap is a separate VDA transfer taxed at 30% on INR gain at time of swap. Q: TDS threshold for crypto? A: 1% (Section 194S). Rs 50,000/year (specified persons). Rs 10,000/year (others). Q: Can exchange fees be deducted? A: No - only cost of acquisition. Exchange fees, gas fees, brokerage all excluded. Q: Section 87A rebate on crypto? A: NOT applicable to Section 115BBH income. Incorrectly claiming creates tax demand."
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
    ['name' => 'ITR for Crypto Traders', 'url' => '/itr-for-crypto-traders'],
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
                        ITR for Crypto Traders - Expert CA Filing for Bitcoin, Ethereum and VDA Income India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>30% Flat Tax:</span> VDA income taxed at 30% under Section 115BBH + 4% cess = 31.2% minimum. No deductions except cost of acquisition. No loss set-off. No carry-forward. No Section 87A rebate.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>1% TDS (Sec 194S):</span> Exchanges deduct 1% TDS on transfers exceeding Rs 50,000/year (specified persons) or Rs 10,000 (others). Claimable as tax credit in ITR against 30% liability.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Schedule VDA:</span> Transaction-by-transaction disclosure mandatory in ITR-2/ITR-3. Aggregated entries rejected. Date, VDA type, cost, sale value, TDS for each trade individually.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> From Rs 1,499 (up to 50 transactions). Multi-exchange from Rs 2,499. DeFi/NFTs from Rs 3,999. NRI from Rs 4,999. Due date: 31 July 2026.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">5,000+ clients annually. 4.9/5 Google Rating. 1,200+ reviews. CoinDCX, WazirX, Binance, KuCoin, Coinbase supported.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Crypto%20ITR%20Enquiry&body=Hello%2C%0A%0AI%20need%20crypto%20ITR%20filing.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20file%20ITR%20for%20Crypto.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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


                                        @include('partials.lead-form', [
                        'deal' => 'Website Enquiry - Crypto ITR',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'itr-for-crypto-traders', 'label' => 'Crypto ITR', 'selected' => true, 'disabled' => false],
                            ['value' => 'income-tax-return', 'label' => 'Income Tax Return', 'selected' => false, 'disabled' => false],
                            ['value' => 'itr-for-capital-gains', 'label' => 'Capital Gains ITR', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-notice', 'label' => 'Income Tax Notice', 'selected' => false, 'disabled' => false],
                            ['value' => 'tax-planning', 'label' => 'Tax Planning', 'selected' => false, 'disabled' => false],
                            ['value' => 'itr-for-property-sale', 'label' => 'Property Sale ITR', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron took minimum time to calculate everything from the details I provided. Very impressed with the accuracy. The CA was extremely responsive and handled my 150+ trades across CoinDCX and Binance with perfect Schedule VDA entries.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Crypto Investor, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Seamless experience with Patron team on ITR filing. Had crypto trades across WazirX, Binance, and some DeFi staking. They correctly classified staking under Schedule OS and sales under VDA. Highly professional.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha Patel</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">DeFi Trader, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As an NRI trading on Coinbase and KuCoin, I needed Schedule FA disclosure alongside Schedule VDA. Patron handled both perfectly, reconciled my AIS (which only showed Indian exchange data), and filed everything well before the July deadline.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arun Mehra</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">NRI Crypto Trader, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Had over 300 transactions including NFT sales and crypto-to-crypto swaps. Self-filing was impossible. Patron consolidated everything from 4 exchanges, computed each swap at INR FMV, and the Schedule VDA was accepted without any portal validation errors.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Joshi</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">NFT and Crypto Trader, Hyderabad</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Received a Section 143(2) notice for undisclosed crypto income from the previous year. Patron Accounting helped file an ITR-U (updated return), computed the additional tax correctly, and handled the entire notice response. The AIS reconciliation they now do before every filing gives me complete peace of mind.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Khanna</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Bitcoin Investor, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>File your crypto ITR with expert CA help. Schedule VDA, AIS reconciliation, TDS matching from Rs 1,499.</p>
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
            <a href="#who-section" class="toc-btn">Who Must File</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">9-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why CA Help</a>
            <a href="#comparison-section" class="toc-btn">DIY vs CA</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for Crypto Traders - Guide for FY 2025-26</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Crypto ITR Services at a Glance</strong></p>
                    <p>30% flat tax on all VDA income under Section 115BBH + 4% cess = 31.2% minimum. 1% TDS under Section 194S (Rs 50,000 threshold). No loss set-off or carry-forward. Schedule VDA requires transaction-by-transaction entry. ITR-2 (investors) or ITR-3 (traders). Due: 31 July 2026. Budget 2026-27 confirmed no rate change. 44,000+ notices issued. CARF by April 2027.</p>
                </div>
                <p>Every Indian resident who bought, sold, swapped, or earned cryptocurrency during FY 2025-26 must report under Schedule VDA. India's VDA tax framework (Finance Act 2022) imposes 30% flat tax with no deductions beyond cost of acquisition. Budget 2026-27 confirmed no change but introduced stricter penalties. The ITD has already detected Rs 888.82 crore in undisclosed VDAs and issued 44,000+ notices. Accurate, transaction-level filing is essential.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Tax Rate (Section 115BBH)</td><td>30% flat + 4% cess = 31.2% minimum; surcharge above Rs 50 lakh</td></tr>
<tr><td>TDS (Section 194S)</td><td>1% on sale consideration; Rs 50,000/year threshold (specified); Rs 10,000 (others)</td></tr>
<tr><td>Loss Set-Off</td><td>NOT permitted - VDA losses cannot offset any income or be carried forward</td></tr>
<tr><td>ITR Form</td><td>ITR-2 (investors); ITR-3 (traders with business income); ITR-1/4 not allowed</td></tr>
<tr><td>Reporting</td><td>Schedule VDA - mandatory per-transaction entry; aggregated entries rejected</td></tr>
<tr><td>Due Date AY 2026-27</td><td>31 July 2026 for non-audit individuals and HUF</td></tr>
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
                <h2 class="section-title">What Is ITR for Crypto Traders?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>ITR for crypto traders</strong> is the process of reporting income from the sale, swap, or disposal of Virtual Digital Assets - including Bitcoin, Ethereum, and NFTs - in the Income Tax Return under <strong>Section 115BBH of the Income Tax Act, 1961</strong>, using <strong>Schedule VDA</strong>.</p>
<p>The 30% flat tax applies regardless of holding period. No deductions are allowed beyond cost of acquisition - exchange fees, gas fees, and brokerage are excluded. Losses from one VDA cannot even offset gains from another VDA. Budget 2026-27 confirmed no change to rates but introduced stricter penalties effective April 2026.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Crypto ITR:</strong></p>
                    <p><strong>VDA (Section 2(47A)):</strong> All cryptocurrencies (Bitcoin, Ethereum, altcoins), NFTs, stablecoins, and DeFi tokens. Introduced Finance Act 2022.</p>
<p><strong>Section 115BBH:</strong> 30% flat tax on VDA transfers. No deductions except cost of acquisition. No loss set-off. No carry-forward. No Section 87A rebate.</p>
<p><strong>Section 194S:</strong> 1% TDS on VDA transfers. Threshold Rs 50,000/year (specified persons) or Rs 10,000 (others). TDS = credit against 30% liability.</p>
<p><strong>Schedule VDA:</strong> ITR section for per-transaction crypto disclosure. Fields: VDA type, dates, sale consideration, cost, TDS. Aggregated entries rejected.</p>
<p><strong>CARF:</strong> OECD Crypto-Asset Reporting Framework. India targeting April 2027 adoption - automatic cross-border data sharing on offshore crypto.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Crypto ITR -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Crypto ITR</text>
                            <!-- Bitcoin symbol -->
                            <circle cx="65" cy="68" r="22" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <text x="65" y="62" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BTC</text>
                            <text x="65" y="76" font-size="8" fill="#F5A623" font-weight="800" text-anchor="middle" font-family="Arial">30%</text>
                            <!-- Schedule VDA card -->
                            <rect x="100" y="50" width="55" height="18" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                            <text x="127" y="62" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Sch VDA</text>
                            <!-- TDS badge -->
                            <rect x="100" y="72" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="127" y="84" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">1% TDS 194S</text>
                            <!-- Labels -->
                            <rect x="35" y="100" width="55" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="62" y="110" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 115BBH</text>
                            <rect x="100" y="100" width="60" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="130" y="110" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">No Set-Off</text>
                            <!-- Check -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Income Tax Act, 1961</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Crypto ITR</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Income Tax Act, 1961</span>
                        <strong>Sec 115BBH | 30% VDA Tax</strong>
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
            <h2 class="section-title">Who Must File ITR as a Crypto Trader?</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Sold/transferred crypto</strong> on Indian (CoinDCX, WazirX, CoinSwitch) or international exchanges (Binance, KuCoin, Coinbase, OKX)</li>
<li><strong>Crypto-to-crypto swaps</strong> - each swap is a separate taxable VDA transfer at INR FMV on swap date</li>
<li><strong>Spent crypto for goods/services</strong> - treated as VDA transfer at current INR FMV</li>
<li><strong>Staking rewards, airdrops, mining income</strong> - taxable at slab rates on receipt; subsequent sale at 30% (115BBH)</li>
<li><strong>Crypto gifts exceeding Rs 50,000</strong> from non-relative - taxable under Section 56(2)(x)</li>
<li><strong>NFT sales</strong> - classified as VDA under Section 2(47A), taxed at 30%</li>
<li><strong>P2P (peer-to-peer) trades</strong> - buyer responsible for 1% TDS under Section 194S</li>
<li><strong>Offshore exchange holdings</strong> as Indian resident - global income taxable; Schedule FA may apply</li>
</ul>
<div class="table-responsive-wrapper"><table><thead><tr><th>Transaction Type</th><th>Tax Treatment</th><th>ITR Schedule</th></tr></thead><tbody>
<tr><td>Spot sale on exchange</td><td>30% flat (115BBH) on sale minus cost of acquisition</td><td>Schedule VDA (per transaction)</td></tr>
<tr><td>Crypto-to-crypto swap</td><td>30% at INR FMV; each swap = separate event</td><td>Schedule VDA (one per swap)</td></tr>
<tr><td>Staking/airdrops</td><td>Slab rates on receipt (OS); 30% on subsequent sale</td><td>Schedule OS then Schedule VDA</td></tr>
<tr><td>Crypto gift (> Rs 50K)</td><td>FMV taxable at slab rates - Section 56(2)(x)</td><td>Schedule OS</td></tr>
<tr><td>NFT sale</td><td>30% flat (115BBH)</td><td>Schedule VDA</td></tr>
<tr><td>Offshore exchange</td><td>Same 30%; Schedule FA for holdings > Rs 5 lakh</td><td>Schedule VDA + Schedule FA</td></tr>
</tbody></table></div>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 Crypto Trader ITR Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-Exchange Data Consolidation</td><td>CSV/API import from CoinDCX, WazirX, CoinSwitch, Binance, KuCoin, Coinbase, OKX, and DeFi wallets into a single verified INR transaction ledger.</td></tr>
<tr><td>Schedule VDA Preparation</td><td>Every trade individually entered with VDA type, acquisition date, transfer date, sale consideration, cost of acquisition, and TDS under Section 194S. Aggregated entries rejected.</td></tr>
<tr><td>AIS Pre-Filing Reconciliation</td><td>Mandatory cross-check of exchange-reported AIS data against transaction records before ITR submission. Eliminates mismatch notice risk.</td></tr>
<tr><td>1% TDS Reconciliation (Section 194S)</td><td>Form 26AS TDS entries matched against each transaction to ensure full tax credit claimed against 30% liability.</td></tr>
<tr><td>Staking, Mining, Airdrop Classification</td><td>Income correctly split: Schedule OS (slab rate on receipt) and Schedule VDA (30% on future sale). FMV on receipt = future cost of acquisition.</td></tr>
<tr><td>P2P and Offshore Compliance</td><td>Identification of buyer TDS obligations in P2P trades. Schedule FA foreign asset disclosure for offshore holdings above Rs 5 lakh. CARF readiness.</td></tr>

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
            <h2 class="section-title">9-Step Crypto ITR Filing Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team handles the complete process - from multi-exchange consolidation and AIS reconciliation to Schedule VDA preparation and e-verified ITR filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Collect Transaction Records</h3><p class="step-description">Download capital gains/P&L reports from every exchange (CoinDCX, WazirX, CoinSwitch, Binance, KuCoin). Collect DeFi wallet history and P2P trade records for FY 2025-26.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Exchange data received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> P2P records collected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 55l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Collected</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Download AIS from IT Portal</h3><p class="step-description">Annual Information Statement from incometax.gov.in captures all exchange-reported VDA transactions under Section 194S - shows what the IT Department already knows about your crypto activity.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AIS downloaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Exchange data visible</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AIS</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Downloaded</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compute Taxable Income Per Transaction</h3><p class="step-description">Section 115BBH: Taxable Income = Sale Consideration (INR) minus Cost of Acquisition (INR). No other deduction permitted. Exchange fees, gas costs, and brokerage are excluded.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Gains computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Cost verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="55" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="57" y="33" font-size="7" fill="#F5A623" font-weight="800" text-anchor="middle" font-family="Arial">30%</text><rect x="35" y="45" width="45" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="57" y="54" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Computed</text></svg></div><span class="illustration-label">Computed</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Classify Staking and Airdrop Income</h3><p class="step-description">Determine INR fair market value on date of receipt. Taxable as income from other sources (Schedule OS) at slab rates. FMV on receipt = cost of acquisition for future sale under 115BBH.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Staking classified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FMV determined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="20" width="35" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="29" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sch OS</text><rect x="60" y="20" width="35" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="77" y="29" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Sch VDA</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Classified</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Reconcile 1% TDS (Section 194S)</h3><p class="step-description">Verify in Form 26AS that TDS deducted by exchanges matches transaction records. Total TDS is a credit against final 30% tax liability, not an additional cost.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 26AS matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS credits verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">1% TDS 194S</text><rect x="35" y="45" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="54" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Credit Claimed</text></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Select Correct ITR Form</h3><p class="step-description">ITR-2 for investors (capital gains, no business income). ITR-3 for high-frequency traders with business income. ITR-1 and ITR-4 cannot be used for any VDA income - results in defective return notice.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> VDA schedule ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="20" width="35" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="37" y="29" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">ITR-2</text><rect x="60" y="20" width="35" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="77" y="29" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-3</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Selected</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Complete Schedule VDA</h3><p class="step-description">Enter each transaction individually: VDA type (Bitcoin, Ethereum, NFT), acquisition date, transfer date, sale consideration, cost of acquisition, and TDS deducted. Lump-sum entries are rejected by the portal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Schedule VDA filled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Per-trade entry done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><text x="60" y="21" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">Schedule VDA</text><line x1="25" y1="30" x2="90" y2="30" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="25" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><rect x="30" y="55" width="50" height="10" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.6"/><text x="55" y="63" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">FILLED</text></svg></div><span class="illustration-label">Filled</span><span class="step-number-large">07</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Compute Tax and Pay Balance</h3><p class="step-description">30% on total VDA income + surcharge (if applicable) + 4% cess. Deduct TDS credit and advance tax. Pay remaining as self-assessment tax. Section 87A rebate NOT applicable to 115BBH income.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tax computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Self-assessment paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">30% + Cess</text><rect x="35" y="45" width="50" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">TAX PAID</text></svg></div><span class="illustration-label">Paid</span><span class="step-number-large">08</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 9</span><h3 class="step-title">Submit ITR and E-Verify</h3><p class="step-description">File ITR-2 or ITR-3 on incometax.gov.in and e-verify within 30 days using Aadhaar OTP, net banking, or digital signature to complete the filing process.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> E-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">CRYPTO ITR</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">FILED</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">09</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Crypto ITR Filing</h2>
            <div class="content-text">
                
                <p><strong>From Indian Exchanges (CoinDCX, WazirX, CoinSwitch, Zebpay):</strong></p>
<ul>
<li>Annual Capital Gains or P&L report (PDF and CSV) for FY 2025-26</li>
<li>TDS certificate/summary showing Section 194S deductions</li>
<li>Complete trade history CSV (spot, futures, swap transactions)</li>
</ul>
<p><strong>From International Exchanges (Binance, Coinbase, KuCoin, OKX):</strong></p>
<ul>
<li>Full transaction history CSV (April 1 to March 31, 2026)</li>
<li>Wallet-level history for MetaMask, Ledger, or other DeFi wallets</li>
</ul>
<p><strong>From Income Tax Portal:</strong></p>
<ul>
<li><strong>AIS</strong> (Annual Information Statement) showing exchange-reported VDA data</li>
<li><strong>Form 26AS</strong> to verify all Section 194S TDS credits</li>
</ul>
<p><strong>For Staking/Mining/Airdrops:</strong> Date and INR FMV of each token received (exchange history or CoinGecko data).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 Common Crypto ITR Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Hundreds of Transactions Across Exchanges</td><td>Multiple exchanges, DeFi wallets, P2P trades creating a fragmented transaction history</td><td>Exchange API and CSV consolidation merges all trades from CoinDCX, WazirX, Binance, KuCoin, and DeFi wallets into one verified INR ledger.</td></tr>
<tr><td>Crypto-to-Crypto Swaps</td><td>Each swap creates a separate taxable event at INR FMV; commonly computed incorrectly as single net gain</td><td>Each swap individually computed at INR fair market value on the transaction date with separate Schedule VDA entries.</td></tr>
<tr><td>AIS Mismatch Notices</td><td>AIS shows exchange-reported transactions the trader forgot or did not report in ITR. ITD issued 44,000+ notices</td><td>Pre-filing AIS reconciliation identifies every gap and resolves discrepancies before submission.</td></tr>
<tr><td>P2P TDS Obligations</td><td>Buyer in P2P trades must deduct 1% TDS under Section 194S; obligation commonly unknown; non-compliance triggers notices</td><td>All P2P transactions identified. TDS obligations quantified. Advance tax adjustment filed where TDS was missed.</td></tr>
<tr><td>Offshore Exchange Non-Disclosure</td><td>Binance, Coinbase, KuCoin trades commonly omitted from ITR. High penalty risk under Black Money Act</td><td>Full Schedule VDA and Schedule FA disclosure for all foreign platform trades. Critical before CARF adoption April 2027.</td></tr>
<tr><td>Staking/Airdrop Misclassification</td><td>Income on receipt wrongly reported under Schedule VDA instead of Schedule OS at slab rates</td><td>Receipt taxed at slab rates (OS). Future sale taxed at 30% (VDA). Correct dual-schedule classification.</td></tr>

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
            <h2 class="section-title">Crypto Trader ITR Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Crypto-only ITR - up to 50 transactions (ITR-2)</td><td class="table-amount">Starting Rs 1,499</td></tr>
<tr><td>Multi-exchange 50-200 transactions</td><td class="table-amount">Starting Rs 2,499</td></tr>
<tr><td>200+ transactions, DeFi, staking, NFTs</td><td class="table-amount">Starting Rs 3,999</td></tr>
<tr><td>Crypto + salary/capital gains combined ITR-2</td><td class="table-amount">Starting Rs 2,999</td></tr>
<tr><td>Crypto as business income (ITR-3)</td><td class="table-amount">Starting Rs 3,499</td></tr>
<tr><td>NRI crypto ITR - offshore, Schedule FA</td><td class="table-amount">Starting Rs 4,999</td></tr>
<tr><td>AIS mismatch resolution / ITR-U for prior years</td><td class="table-amount">Based on CA assessment</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Crypto ITR consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20crypto%20ITR%20filing.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Crypto ITR Filing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Single exchange, up to 50 trades</td><td>2-3 working days</td></tr>
<tr><td>Multi-exchange, up to 200 transactions</td><td>3-5 working days</td></tr>
<tr><td>Complex (DeFi, wallets, staking, NFTs)</td><td>5-8 working days</td></tr>
<tr><td>NRI with offshore exchanges and Schedule FA</td><td>7-10 working days</td></tr>
<tr><td>AIS mismatch resolution (additional)</td><td>1-3 working days</td></tr>
<tr><td>CPC processing after filing</td><td>1-10 months (case dependent)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Key Deadlines:</strong> 31 July 2026 - ITR due date. 31 December 2026 - belated return with Rs 5,000 late fee (Section 234F). Advance tax due quarterly (15 Jun, 15 Sep, 15 Dec, 15 Mar) if annual tax exceeds Rs 10,000. P2P TDS: buyers deposit by 7th of following month. April 2026 - new penalty framework for exchanges. April 2027 - CARF adoption target (offshore crypto auto-reported).</p>

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
            <h2 class="section-title">Why Professional CA Filing Matters for Crypto</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Per-Transaction Schedule VDA</h3><p class="feature-text">Self-filers commonly enter aggregated totals which are rejected. Each trade must be entered individually. Our team automates this from exchange data.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">AIS Reconciliation</h3><p class="feature-text">ITD detected Rs 888.82 crore undisclosed VDAs and issued 44,000+ notices. AIS-ITR mismatch triggers automatic scrutiny. We reconcile before filing.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Section 87A Correctly Excluded</h3><p class="feature-text">30% Section 115BBH tax is NOT eligible for Section 87A rebate. Incorrectly claiming it creates a tax demand. Our CAs ensure correct computation.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Staking/Airdrop Classification</h3><p class="feature-text">Receipt taxed at slab rates under Schedule OS. Future sale at 30% under Schedule VDA. Mixing these triggers ITD processing flags.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Offshore Exchange Disclosure</h3><p class="feature-text">Indian residents must report global crypto. CARF adoption by April 2027 makes offshore holdings visible. Schedule VDA + Schedule FA included.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Crypto Traders Choose Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>5,000+ Clients Annually</strong> across India and international NRI clients.</p>
<p><strong>4.9/5 Google Rating</strong> from 1,200+ verified reviews.</p>
<p><strong>Dedicated VDA Compliance Team</strong> with expertise in Schedule VDA, multi-exchange consolidation, and AIS reconciliation.</p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Hyderabad.</p>
<p><strong>Exchanges Supported:</strong> CoinDCX, WazirX, CoinSwitch, Zebpay, Binance, KuCoin, Coinbase, OKX, and 50+ via CSV.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Filing vs Patron Accounting - Crypto ITR</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Filing</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Schedule VDA Entry</td><td>Manual per-trade - error-prone for 100+ trades</td><td>Automated import from exchange APIs and CSV</td></tr>
<tr><td>AIS Reconciliation</td><td>Often skipped - leading cause of notices</td><td>Mandatory pre-filing step; all gaps resolved</td></tr>
<tr><td>Crypto-to-Crypto Swaps</td><td>Frequently computed incorrectly</td><td>Each swap at INR FMV per transaction date</td></tr>
<tr><td>Staking/Airdrop Classification</td><td>Commonly misclassified under VDA</td><td>Correctly split: OS (receipt) + VDA (sale)</td></tr>
<tr><td>P2P TDS (Section 194S)</td><td>Buyer obligations often unknown</td><td>Identified; advance tax adjustment filed</td></tr>
<tr><td>Section 87A Rebate</td><td>Incorrectly applied - creates demand</td><td>Correctly excluded from 115BBH income</td></tr>
<tr><td>Offshore Disclosure</td><td>Commonly omitted - Black Money Act risk</td><td>Full Schedule VDA + FA for all foreign trades</td></tr>

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
            <h2 class="section-title">Related Tax Filing Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/income-tax-return">Income Tax Return Filing</a></strong> - Complete ITR for salary, house property, and business income alongside crypto.</li>
<li><strong><a href="/itr-for-capital-gains">ITR for Capital Gains</a></strong> - Equity, MF, and property capital gains alongside crypto VDA income.</li>
<li><strong><a href="/income-tax-notice">Income Tax Notice Response</a></strong> - Expert CA support for Section 143(2) scrutiny or tax demand for undisclosed crypto.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Crypto Tax India</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act, 1961</a>; Finance Act 2022; Budget 2026-27.</p>
<p><strong>Key Provisions:</strong></p>
<ul>
<li><strong>Section 2(47A):</strong> VDA definition - all cryptocurrencies, NFTs, stablecoins, DeFi tokens.</li>
<li><strong>Section 115BBH:</strong> 30% flat tax. No deductions except cost of acquisition. No loss set-off. No carry-forward. No Section 87A rebate.</li>
<li><strong>Section 194S:</strong> 1% TDS. Rs 50,000 threshold (specified). Rs 10,000 (others). Credit against 30% liability.</li>
<li><strong>Section 56(2)(x):</strong> Crypto gifts > Rs 50,000 from non-relative taxable at slab rates.</li>
<li><strong>Section 234F:</strong> Late fee Rs 5,000 after 31 July 2026.</li>
<li><strong>Section 270A:</strong> Under-reporting penalty 50-200% of tax evaded (effective April 2026).</li>
<li><strong>New Penalties (April 2026):</strong> Rs 200/day for non-furnishing VDA statements. Rs 50,000 for inaccurate reporting.</li>
</ul>
<p><strong>CARF:</strong> India targeting OECD Crypto-Asset Reporting Framework by April 2027 - offshore crypto auto-reported.</p>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Crypto ITR India</h2>
                    <p class="faq-expanded__lead">Answers about ITR form, 30% tax rate, loss set-off, TDS, offshore exchanges, Schedule VDA, and staking income.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Crypto ITR India'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should I use for crypto trading income?</h3>
                        <div class="faq-expanded__a"><p>Use ITR-2 if you treat crypto as investment (capital gains) with no business income. Use ITR-3 for high-frequency traders or those with other business/professional income. ITR-1 and ITR-4 cannot be used for any VDA income - filing with these results in defective return notice. Both ITR-2 and ITR-3 include Schedule VDA for per-transaction disclosure. Tax rate is 30% in both cases under Section 115BBH.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much tax do I pay on cryptocurrency gains in India?</h3>
                        <div class="faq-expanded__a"><p>Under Section 115BBH: 30% flat on all VDA income + 4% Health and Education Cess = 31.2% minimum. Surcharge applies above Rs 50 lakh total income. Only original purchase price (cost of acquisition) is deductible - exchange fees, gas fees, and trading commissions are excluded. Budget 2026-27 confirmed no change. Section 87A rebate is NOT applicable to 115BBH income.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can I set off cryptocurrency losses against salary or other income?</h3>
                        <div class="faq-expanded__a"><p>No. Section 115BBH explicitly prohibits setting off VDA losses against any other income head - including salary, business, house property, or capital gains from shares. You cannot even set off losses from one crypto against gains from another crypto in the same year. VDA losses also cannot be carried forward. Lost Rs 3 lakh on ETH but gained Rs 5 lakh on BTC? You pay 30% on the full Rs 5 lakh.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is TDS on crypto and how do I claim it back?</h3>
                        <div class="faq-expanded__a"><p>Under Section 194S (effective July 2022), exchanges deduct 1% TDS on total sale consideration (not just profit) when annual VDA transactions exceed Rs 50,000 (specified persons) or Rs 10,000 (others). This appears in Form 26AS and AIS. When filing ITR, declare as tax credit against 30% liability. If TDS exceeds actual tax, the excess is refunded. TDS is an advance payment, not extra charge.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Do I need to report crypto on Binance or Coinbase in my Indian ITR?</h3>
                        <div class="faq-expanded__a"><p>Yes. Indian residents are taxed on global income. All crypto trades on Binance, Coinbase, KuCoin, OKX, or any offshore exchange must be reported in Schedule VDA. If foreign holdings exceed Rs 5 lakh, Schedule FA (Foreign Assets) is also required. Non-disclosure attracts Black Money Act penalties. India is adopting OECD CARF by April 2027 - offshore crypto will become automatically visible to the ITD.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Crypto ka ITR kaise bhare aur Schedule VDA mein kya fill karna hota hai?</h3>
                        <div class="faq-expanded__a"><p>ITR-2 ya ITR-3 file karni hoti hai. Schedule VDA mein har ek trade ka alag entry: coin ka naam, purchase date, sale date, purchase price (INR), sale price (INR), aur 1% TDS. Aggregated total accept nahi hogi - portal individually validate karta hai. Tax 30% flat hota hai Section 115BBH ke under. TDS credit Form 26AS se claim hoti hai. Patron Accounting poori filing handle karta hai. Call: +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Crypto tax rate India 2026?</strong> A: 30% flat (Section 115BBH) + 4% cess = 31.2% minimum. No deductions except cost. No 87A rebate. Budget 2026-27 confirmed no change.</p>
<p><strong>Q: Is crypto-to-crypto swap taxable?</strong> A: Yes - every swap is a separate VDA transfer taxed at 30% on INR gain at time of swap.</p>
<p><strong>Q: TDS threshold for crypto?</strong> A: 1% (Section 194S). Rs 50,000/year (specified persons). Rs 10,000/year (others).</p>
<p><strong>Q: Can exchange fees be deducted?</strong> A: No - only cost of acquisition. Exchange fees, gas fees, brokerage all excluded.</p>
<p><strong>Q: Section 87A rebate on crypto?</strong> A: NOT applicable to Section 115BBH income. Incorrectly claiming creates tax demand.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">44,000+ Crypto Notices Already Issued - File Correctly</h2>
            <div class="content-text">
                
                <p>The Income Tax Department has detected Rs 888.82 crore in undisclosed VDAs and issued 44,000+ notices. AIS-ITR mismatches trigger automatic scrutiny under Section 143(2). Section 270A under-reporting penalty: 50-200% of tax evaded. New penalty framework effective April 2026.</p>
<p>India is adopting the OECD Crypto-Asset Reporting Framework (CARF) by April 2027 - offshore exchange holdings on Binance, Coinbase, and KuCoin will become automatically visible to Indian tax authorities.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20crypto%20ITR%20filing.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Crypto ITR with Expert CA Help</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Crypto ITR filing is among the most technically demanding compliance tasks - 30% flat tax, no loss set-off, per-transaction Schedule VDA, and 1% TDS reconciliation create real risk for self-filers.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">The ITD is actively using AIS, exchange TDS, and blockchain analytics. Over Rs 888.82 crore in undisclosed VDAs detected. CARF adoption by April 2027 makes offshore holdings visible. Full disclosure is essential now.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting: 5,000+ clients. 4.9/5 Google Rating. All major exchanges supported. From Rs 1,499.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20crypto%20ITR%20filing.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Crypto%20ITR&body=Hello%2C%0A%0AI%20need%20crypto%20ITR%20filing.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Crypto ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert CA-assisted crypto ITR filing with Schedule VDA, AIS reconciliation, and multi-exchange consolidation.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/itr-for-crypto-traders/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/itr-for-crypto-traders/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/itr-for-crypto-traders/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Tax filing and notice response</div><div class="pa-cross-grid"><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a><a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Capital Gains ITR</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Notice</div><div class="pa-card-sub">India</div></div></a><a href="/itr-for-property-sale" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Property Sale</div><div class="pa-card-sub">India</div></div></a><a href="/tax-planning-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning</div><div class="pa-card-sub">India</div></div></a><a href="/tds-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Returns</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 01 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">01 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> On Union Budget 2027 or June 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers crypto ITR for FY 2025-26 (AY 2026-27). Rates per Finance Act 2022, confirmed Budget 2026-27. CARF adoption targeted April 2027. Next review: Budget 2027.</p>
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
