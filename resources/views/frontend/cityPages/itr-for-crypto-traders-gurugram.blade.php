
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
    <title>ITR for Crypto Income Gurugram - 115BBH, 30% & VDA</title>
    <meta name="description" content="CA-assisted crypto ITR filing in Gurugram. 30% VDA tax, 1% TDS, Schedule VDA, multi-exchange reconciliation. Serving Cyber City, Golf Course Road crypto traders. Call +91 945 945 6700.">
    <link rel="canonical" href="/itr-for-crypto-traders/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Crypto Income Gurugram - 115BBH, 30% & VDA">
    <meta property="og:description" content="CA-assisted crypto ITR filing in Gurugram. 30% VDA tax, 1% TDS, Schedule VDA, multi-exchange reconciliation. Serving Cyber City, Golf Course Road crypto traders. Call +91 945 945 6700.">
    <meta property="og:url" content="/itr-for-crypto-traders/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Crypto Income Gurugram - 115BBH, 30% & VDA">
    <meta name="twitter:description" content="CA-assisted crypto ITR filing in Gurugram. 30% VDA tax, 1% TDS, Schedule VDA, multi-exchange reconciliation. Serving Cyber City, Golf Course Road crypto traders. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR for Crypto Traders in Gurugram",
      "description": "CA-assisted crypto ITR filing in Gurugram. 30% VDA tax, 1% TDS, Schedule VDA, multi-exchange reconciliation. Serving Cyber City, Golf Course Road crypto traders. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/itr-for-crypto-traders/gurugram",
      "serviceType": "ITR for Crypto Traders in Gurugram",
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
          "name": "ITR for Crypto Traders: CA Filing",
          "item": "https://www.patronaccounting.com/itr-for-crypto-traders"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ITR for Crypto Traders in Gurugram",
          "item": "https://www.patronaccounting.com/itr-for-crypto-traders/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How is crypto taxed in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Profits from selling, swapping, or spending cryptocurrency are taxed at a flat 30% under Section 115BBH, plus applicable surcharge and 4% cess. Only the cost of acquisition is deductible. No other expenses are allowed. Losses from one crypto cannot offset gains from another. A 1% TDS under Section 194S is deducted by Indian exchanges. All transactions must be reported in Schedule VDA."
          }
        },
        {
          "@type": "Question",
          "name": "Which ITR form should Gurugram crypto traders use?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If you treat crypto as a capital asset (occasional trading/investing), use ITR-2 with Schedule VDA. If you treat crypto as business income (frequent trading), use ITR-3 with Schedule VDA. Either way, the tax rate is 30% under Section 115BBH. Do not use ITR-1 (no VDA support) or ITR-4 (presumptive taxation cannot apply to VDA). Most Gurugram salaried professionals with crypto use ITR-2."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of crypto ITR filing in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Professional fees start from Rs 5,000 for traders with fewer than 100 transactions, Rs 8,000-12,000 for 100-500 trades, and Rs 15,000-25,000 for high-volume traders with 500+ trades across multiple exchanges. Multi-exchange consolidation and 194S reconciliation are included. Government filing fees are nil."
          }
        },
        {
          "@type": "Question",
          "name": "Can I set off crypto losses against gains?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Under Section 115BBH, losses from one Virtual Digital Asset cannot be set off against gains from another VDA or against any other income (salary, business, rental, capital gains from stocks). VDA losses also cannot be carried forward. Each profitable crypto transaction is taxed independently at 30%."
          }
        },
        {
          "@type": "Question",
          "name": "Are crypto-to-crypto swaps taxable?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Exchanging one cryptocurrency for another (e.g., ETH to BTC) is a taxable transfer under Section 115BBH. The gain is computed as the INR fair market value of the crypto received minus the cost of acquisition of the crypto given up. Both parties in a swap are treated as buyer and seller, and TDS under 194S applies."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I do not report crypto income?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Income Tax Department receives VDA transaction data from Indian exchanges via 194S TDS. Unreported income triggers under-reporting penalty (50-200% of tax), late filing fee (Rs 5,000), interest under Section 234A/B/C, and potential prosecution. New penalties from April 2026 include Rs 200/day for missing VDA statements and Rs 50,000 for inaccurate reporting."
          }
        },
        {
          "@type": "Question",
          "name": "How do I claim 194S TDS credit on crypto?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TDS deducted by Indian exchanges under Section 194S appears in your Form 26AS. When filing ITR-2 or ITR-3, the portal auto-fetches 194S credits. Verify that the sale consideration in Schedule VDA matches or exceeds the gross receipts in 26AS. If there is a mismatch, the return may be flagged as defective. Patron reconciles 26AS with exchange data before filing."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need to pay advance tax on crypto gains?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, if your total tax liability (including crypto) exceeds Rs 10,000 in a financial year after TDS credits. Advance tax must be paid in quarterly instalments (15 Jun, 15 Sep, 15 Dec, 15 Mar). Failure attracts interest under Section 234B at 1% per month on shortfall and Section 234C at 1% per month on quarterly deferment. Quick Answers Crypto par kitna tax lagta hai? Flat 30% + surcharge + 4% cess. Effective rate 31.2% ya usse zyada. Kya crypto loss adjust ho sakta hai? Nahi. Ek crypto ka loss doosre crypto ke profit se adjust nahi hota. Kisi bhi income se nahi hota. Crypto ka ITR kaunse form mein file hota hai? ITR-2 (capital gains) ya ITR-3 (business income). Schedule VDA mandatory hai."
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
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
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
                        ITR for Crypto Traders in Gurugram: VDA Tax Filing by CA Experts
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax Rate:</span> Flat 30% on crypto gains under Section 115BBH + surcharge + 4% cess</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>TDS:</span> 1% on VDA transfers under Section 194S (deducted by exchanges)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>No Loss Set-Off:</span> Crypto losses CANNOT be offset against other crypto gains or any other income</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>ITR Form:</span> ITR-2 (capital gains) or ITR-3 (business income) with Schedule VDA</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Crypto ITR filed for traders with 10 to 10,000+ trades. Serving Gurugram IT professionals, investors, and Web3 founders.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20crypto%20ITR%20filing%20in%20Gurugram.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - ITR for Crypto Traders in Gurugram',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'itr-for-crypto-traders/gurugram', 'label' => 'ITR for Crypto Traders in Gurugram', 'selected' => true, 'disabled' => false],
                            ['value' => 'income-tax-return/gurugram', 'label' => 'Income Tax Return Filing in Gurugram', 'selected' => false, 'disabled' => false],
                            ['value' => 'itr-for-capital-gains/gurugram', 'label' => 'ITR for Capital Gains in Gurugram', 'selected' => false, 'disabled' => false],
                            ['value' => 'itr-filing-for-salary/gurugram', 'label' => 'ITR for Salary in Gurugram', 'selected' => false, 'disabled' => false],
                            ['value' => 'itr-for-business/gurugram', 'label' => 'ITR for Business in Gurugram', 'selected' => false, 'disabled' => false],
                            ['value' => 'tax-planning-services/gurugram', 'label' => 'Tax Planning in Gurugram', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-notice/gurugram', 'label' => 'Income Tax Notice in Gurugram', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Had 800+ trades across CoinDCX and Binance. Patron consolidated everything, filled Schedule VDA, and filed my ITR in 5 days. The 26AS reconciliation alone saved me from a defective return notice.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RV</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rohit Verma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">IT Professional, DLF Cyber City</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Did not know crypto-to-crypto swaps were taxable. Patron computed my swap gains which I had completely missed, and ensured I filed correctly before any notice came. Eye-opening experience.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arjun Joshi</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Young Professional, Gurugram</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">My P2P trades on WazirX had no TDS trail. Patron created complete documentation with bank proofs and wallet records, then filed my ITR with proper Schedule VDA entries. Very thorough approach.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">KP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Kartik Patel</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trader, Sohna Road</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">NFT sales, staking income, and regular crypto trading - Patron handled all three categories correctly under Section 115BBH and 56(2)(x). First time I felt confident about my crypto tax filing.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Meera Sharma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Web3 Founder, Golf Course Road</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The no-loss-set-off rule hit me hard this year. Patron at least made sure every profitable transaction was accurately reported and all TDS credits were claimed. Professional and transparent service.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Deepak Gupta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">BFSI Employee, DLF Cyber Hub</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Crypto ITR filing with multi-exchange consolidation, Schedule VDA, and expert guidance from Gurugram.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">Crypto Tax Rules</a>
            <a href="#who-section" class="toc-btn">194S TDS</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Crypto Tax Filing in Gurugram: Section 115BBH Compliance for VDA Traders</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Crypto Traders in Gurugram Services at a Glance</strong></p>
                    <p>Every crypto trader and investor in Gurugram must report Virtual Digital Asset (VDA) income in their ITR using Schedule VDA. Profits from selling, swapping, or spending cryptocurrency are taxed at a flat 30% under Section 115BBH, with only the cost of acquisition deductible - no trading fees, no internet costs, no other expenses. Losses from one crypto asset cannot be set off against gains from another. A 1% TDS under Section 194S is deducted by Indian exchanges on every sell transaction. From April 2026, the VDA definition explicitly includes 'crypto-asset', and new penalties (Rs 200/day for missing statements, Rs 50,000 for inaccurate reporting) apply.</p>
                </div>
                <p>Gurugram has one of the highest concentrations of crypto traders in NCR. IT professionals in DLF Cyber City, BFSI employees along Golf Course Road, startup founders on Sohna Road, and young professionals across the city actively trade on Indian exchanges (CoinDCX, WazirX) and international platforms (Binance, Bybit). The city's tech-savvy, high-income demographic makes crypto adoption particularly strong in the 25-40 age group. For a comprehensive overview of crypto taxation across India, refer to our <a href="/itr-for-crypto-traders">ITR for Crypto Traders</a> national guide.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Tax Rate</td><td>Flat 30% on profits + applicable surcharge + 4% cess (effective 31.2%+)</td></tr>
                        <tr><td>Deduction Allowed</td><td>Only cost of acquisition (purchase price)</td></tr>
                        <tr><td>Loss Set-Off</td><td>NOT allowed - not against other crypto, not against any other income</td></tr>
                        <tr><td>TDS</td><td>1% under Section 194S on VDA transfers (Rs 50,000 threshold for specified persons)</td></tr>
                        <tr><td>ITR Form</td><td>ITR-2 (capital gains) or ITR-3 (business income)</td></tr>
                        <tr><td>Reporting</td><td>Schedule VDA - line-by-line transaction reporting mandatory</td></tr>
                        <tr><td>Due Date</td><td>31 July 2026 (non-audit) | 31 August 2026 (ITR-4 filers use ITR-2/3 instead)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Haryana does not levy Professional Tax, meaning crypto traders who are salaried employees in Gurugram have a relatively straightforward tax stack: salary income (slab rates) + crypto income (flat 30% under Section 115BBH) + TDS credits. However, the complexity lies in consolidating trades across multiple exchanges, correctly computing gain on each transaction, reconciling 194S TDS credits in Form 26AS, and accurately filling Schedule VDA in the ITR.</p>
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
                <h2 class="section-title">How Is Crypto Taxed in India?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Cryptocurrency and all Virtual Digital Assets (VDAs) - including Bitcoin, Ethereum, Solana, meme coins, exchange tokens, NFTs, and DeFi tokens - are taxed under <strong>Section 115BBH</strong> of the Income Tax Act at a flat rate of 30% on profits from transfer. This rate applies regardless of holding period (no LTCG/STCG distinction), regardless of whether the income is classified as capital gains or business income. On top of the 30%, applicable surcharge and 4% cess are levied, making the effective rate 31.2% or higher for most Gurugram traders.</p>
                    <p><strong>What is deductible:</strong> Only the cost of acquisition (the purchase price of the crypto sold) can be deducted from the sale price. No other expenses are allowed - not exchange trading fees, not gas fees, not internet costs, not hardware wallet costs. This is explicitly provided in the statute. Learn more about <a href="/income-tax-return">Income Tax Return filing</a> for comprehensive ITR guidance.</p>
                    <p><strong>What is NOT allowed:</strong> Losses from one VDA cannot be set off against gains from another VDA. If you gain Rs 5 lakh on Bitcoin but lose Rs 4 lakh on Ethereum, you pay 30% tax on the full Rs 5 lakh Bitcoin profit. The Ethereum loss cannot reduce your tax. VDA losses also cannot be carried forward to future years. Each profitable transaction is taxed independently.</p>
                    <p><strong>Crypto-to-crypto trades are taxable:</strong> Swapping one cryptocurrency for another (e.g., ETH to BTC) is a taxable transfer. The gain is computed as: fair market value of the crypto received (in INR) minus the cost of acquisition of the crypto given up. This catches many Gurugram traders off guard - they assume swaps are not taxable because no INR was involved. After filing crypto income, you may also need <a href="/itr-for-capital-gains">ITR for Capital Gains</a> guidance for equity and property investments.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Crypto Traders in Gurugram:</strong></p>
                    <p><strong>VDA (Virtual Digital Asset):</strong> Defined under Section 2(47A) - includes cryptocurrency, NFTs, DeFi tokens, and from April 2026 explicitly 'crypto-asset'.</p>
                    <p><strong>Section 115BBH:</strong> Flat 30% tax on income from transfer of VDA. No deductions except cost of acquisition.</p>
                    <p><strong>Section 194S:</strong> 1% TDS on consideration paid for VDA transfers - deducted by Indian exchanges.</p>
                    <p><strong>Schedule VDA:</strong> Mandatory line-by-line transaction reporting schedule in ITR-2/ITR-3 for all VDA transactions.</p>
                    <p><strong>FIFO:</strong> First In, First Out methodology used to match sell transactions against purchase lots for gain computation.</p>
                    <p><strong>No Loss Set-Off:</strong> VDA losses cannot offset other VDA gains or any other income. Each profitable transaction is taxed independently.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Crypto Traders in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Crypto VDA Tax</span>
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
            <h2 class="section-title">1% TDS on Crypto (Section 194S) - What Gurugram Traders Must Know</h2>
            <div class="content-text">
                
                <p>Section 194S requires 1% TDS on the consideration paid for the transfer of any VDA. This is a transaction-level withholding tax designed to create a compliance trail. For Gurugram traders using Indian exchanges (CoinDCX, WazirX, Mudrex), the exchange automatically deducts 1% TDS on every sell order and deposits it with the government against the trader's PAN.</p>
                <p><strong>TDS thresholds:</strong> For 'specified persons' (individuals/HUFs not in business or with turnover under Rs 1 crore), TDS applies only if total VDA transactions exceed Rs 50,000 in a financial year. For all other persons, the threshold is Rs 10,000. Most retail crypto traders in Gurugram fall in the Rs 50,000 threshold category.</p>
                <p><strong>P2P trading TDS responsibility:</strong> In peer-to-peer transactions (e.g., selling USDT for INR directly via Binance P2P or WazirX P2P), the buyer is technically responsible for deducting 1% TDS. In practice, most P2P traders in Gurugram do not deduct TDS, creating non-compliance risk. The seller should insist on TDS deduction or report the transaction carefully in Schedule VDA, ensuring 26AS reconciliation.</p>
                <p><strong>International exchanges:</strong> Trades on international platforms (Binance, Bybit, OKX) do not have automatic 194S TDS deduction. Gurugram traders using these platforms must self-assess and ensure their crypto income is correctly reported in Schedule VDA. The absence of 194S TDS does not eliminate the 30% tax obligation.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Crypto ITR Filing Services in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-Exchange Trade Consolidation</td><td>Downloading and consolidating trade history from CoinDCX, WazirX, Binance, Bybit using FIFO methodology for gain computation</td></tr>
                        <tr><td>Schedule VDA Preparation</td><td>Line-by-line transaction reporting in Schedule VDA within ITR-2/ITR-3 with date, cost, sale consideration, and net gain per transaction</td></tr>
                        <tr><td>Section 194S TDS Reconciliation</td><td>Matching 1% TDS deducted by Indian exchanges against Form 26AS credits, preventing defective return notices under Section 139(9)</td></tr>
                        <tr><td>Crypto-to-Crypto Gain Computation</td><td>Computing INR fair market value at the time of each swap, calculating gain on disposed crypto, and establishing cost basis for acquired crypto</td></tr>
                        <tr><td>NFT and DeFi Income Classification</td><td>Classifying NFT sale income, staking rewards, yield farming returns, and airdrop/mining income under Section 115BBH or 56(2)(x)</td></tr>
                        <tr><td>P2P Transaction Documentation</td><td>Creating audit-ready documentation trail for peer-to-peer crypto transactions including bank transfer proofs and 194S compliance evidence</td></tr>
                        <tr><td>Advance Tax Computation</td><td>Quarterly advance tax computation for crypto traders with gains exceeding Rs 10,000 in tax liability to avoid Section 234B/C interest</td></tr>
                        <tr><td>Gift and Airdrop Tax Treatment</td><td>Computing tax on received crypto gifts under Section 56(2)(x) and establishing cost basis for future transfers</td></tr>

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
            <h2 class="section-title">Crypto ITR Filing Process in Gurugram</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team follows a structured 6-step process for accurate crypto ITR filing including multi-exchange consolidation, FIFO gain computation, and Schedule VDA preparation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Consolidate All Exchange and Wallet Data</h3><p class="step-description">Download complete trade history from every exchange used during the financial year: CoinDCX, WazirX, Binance, Bybit, Coinbase. Include P2P transactions, crypto-to-crypto swaps, NFT sales, staking rewards, and airdrop receipts. For Gurugram traders using 3-4 exchanges, this consolidation is the most time-consuming step.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All exchanges consolidated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>P2P + swaps included</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">Data Consolidated</span><span class="step-number-large">01</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Compute Gain on Each Transaction</h3><p class="step-description">For every sell or swap transaction, calculate: Gain = Sale Consideration (INR) minus Cost of Acquisition (INR). Use FIFO methodology. For crypto-to-crypto swaps, determine INR fair market value at the time. Only cost of acquisition is deductible - no trading fees, no gas fees.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FIFO applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Per-transaction gain</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="45" font-size="14" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">30%</text></svg></div><span class="illustration-label">Gains Computed</span><span class="step-number-large">02</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Reconcile Form 26AS for Section 194S TDS</h3><p class="step-description">Download Form 26AS from the income tax portal. Check that every 194S TDS entry from Indian exchanges matches your trade records. The total sale consideration in Schedule VDA must not be less than 26AS gross receipts - otherwise CPC may flag the return as defective under Section 139(9).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>26AS matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS credits verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="65" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="60" cy="40" r="8" fill="none" stroke="#25D366" stroke-width="1.5"/><path d="M57 40l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">TDS Reconciled</span><span class="step-number-large">03</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Select Correct ITR Form</h3><p class="step-description">If you have only salary + crypto gains (capital gains), use ITR-2. If you are a high-frequency trader treating crypto as business income, use ITR-3. Do NOT use ITR-1 (no VDA support) or ITR-4 (presumptive taxation cannot be used for VDA). For Gurugram IT professionals with salary + crypto, ITR-2 is the most common choice.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR-2 or ITR-3</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Never ITR-1/ITR-4</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="25" width="25" height="30" rx="4" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.2"/><rect x="65" y="25" width="25" height="30" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><text x="43" y="44" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">ITR-2</text><text x="78" y="44" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">ITR-3</text></svg></div><span class="illustration-label">Form Selected</span><span class="step-number-large">04</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Fill Schedule VDA</h3><p class="step-description">In the ITR form, navigate to Schedule VDA. Enter each transaction line-by-line: type of VDA, date of acquisition, date of transfer, head of income, cost of acquisition, sale consideration, and resulting income. If you had 500+ trades, this requires systematic data preparation. Patron uses crypto tax software integration to automate Schedule VDA population.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Line-by-line entry</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Software-assisted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="25" y="33" width="50" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="25" y="44" width="60" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="25" y="55" width="40" height="6" rx="2" fill="#14365F" opacity="0.15"/></svg></div><span class="illustration-label">Schedule VDA Ready</span><span class="step-number-large">05</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Compute Final Tax and File</h3><p class="step-description">The portal auto-calculates 30% tax on total VDA income. Verify advance tax payments and 194S TDS credits are correctly applied. Pay any self-assessment tax due. Submit the ITR with DSC or EVC and e-verify within 30 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>30% tax verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Filing Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Crypto ITR Filing in Gurugram</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Exchange Trade History</strong> - CSV/Excel export from every exchange used: CoinDCX, WazirX, Binance, Bybit, Coinbase. Must include date, type, crypto asset, quantity, price, and fees.</li>
                    <li><strong>Wallet Transfer Records</strong> - On-chain transaction history for deposits, withdrawals, and transfers between wallets.</li>
                    <li><strong>Form 26AS</strong> - TDS credit statement showing Section 194S deductions by Indian exchanges.</li>
                    <li><strong>AIS (Annual Information Statement)</strong> - Cross-verification of VDA transaction data reported by exchanges.</li>
                    <li><strong>Bank Statements</strong> - Showing INR deposits to and withdrawals from crypto exchanges for trade verification.</li>
                    <li><strong>P2P Transaction Records</strong> - Screenshots or records of P2P trades including bank transfer confirmations and crypto release proofs.</li>
                    <li><strong>Airdrop/Staking/Mining Records</strong> - Documentation of crypto received without purchase, for cost basis and income classification.</li>
                </ul>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Gurugram-specific tip:</strong> IT professionals in DLF Cyber City who trade on 3-4 exchanges should use crypto tax software (CoinTracker, Koinly, or ClearTax Crypto) to consolidate trade history before approaching a CA. Manual consolidation for 1,000+ trades across multiple platforms is error-prone and delays filing.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Crypto ITR Filing Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>No Loss Set-Off Creates Unexpected Tax Bills</td><td>Rs 5L Bitcoin profit + Rs 4L altcoin loss = tax on full Rs 5L</td><td>Upfront education on 115BBH rules, tax projection before filing, no surprises at filing time</td></tr>
                        <tr><td>Multi-Exchange Consolidation</td><td>Different CSV formats, time zones, naming conventions across 3-4 exchanges</td><td>Software-assisted consolidation using crypto tax tools, systematic FIFO computation, automated Schedule VDA</td></tr>
                        <tr><td>194S TDS vs 26AS Mismatch</td><td>Defective return notice under Section 139(9) if Schedule VDA < 26AS</td><td>Pre-filing 26AS reconciliation ensuring sale consideration matches or exceeds 26AS gross receipts</td></tr>
                        <tr><td>P2P Trading Non-Compliance</td><td>Buyer not deducting 194S TDS creates compliance gap</td><td>P2P documentation trail with bank proofs, wallet records, and 194S compliance guidance</td></tr>
                        <tr><td>International Exchange Reporting Gap</td><td>No automatic 194S on Binance/Bybit creates self-reporting burden</td><td>Complete international exchange trade reporting in Schedule VDA with INR conversion at transaction date</td></tr>

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
            <h2 class="section-title">Crypto ITR Filing Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-2/3 with Schedule VDA (< 100 trades)</td><td>Starting from INR 5,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ITR-2/3 with Schedule VDA (100-500 trades)</td><td>Starting from INR 8,000-12,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ITR-2/3 with Schedule VDA (500+ trades)</td><td>Starting from INR 15,000-25,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Multi-Exchange Consolidation</td><td>Starting from INR 3,000-5,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>194S TDS Reconciliation</td><td>Starting from INR 2,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 2,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Government Filing Fees</td><td>Nil</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Crypto Traders in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20crypto%20ITR%20filing%20in%20Gurugram.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Crypto ITR Filing Timeline 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Advance Tax Q1</td><td>15 June 2026 - 15% of estimated crypto tax</td></tr>
                        <tr><td>Advance Tax Q2</td><td>15 September 2026 - 45% cumulative</td></tr>
                        <tr><td>ITR-2/ITR-3 Filing (non-audit)</td><td>31 July 2026 - most Gurugram crypto traders</td></tr>
                        <tr><td>ITR-3 Filing (business + audit)</td><td>30 September 2026 - high-frequency traders</td></tr>
                        <tr><td>Advance Tax Q3</td><td>15 December 2026 - 75% cumulative</td></tr>
                        <tr><td>Advance Tax Q4</td><td>15 March 2027 - 100% cumulative</td></tr>
                        <tr><td>Belated Return</td><td>31 December 2026 - with Rs 5,000 late fee</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> From April 2026, new penalties apply: Rs 200/day for missing VDA transaction statements and Rs 50,000 for inaccurate reporting. The Income Tax Department receives exchange-level transaction data. Schedule VDA requires line-by-line reporting. File accurately and on time.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Crypto ITR in Gurugram?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram Office Presence</h3><p class="feature-text">Patron operates from Golf Course Extension Road - serving Gurugram's tech-savvy crypto trading community across Cyber City, Golf Course Road, Sohna Road, and beyond.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div><h3 class="feature-title">Crypto Tax Expertise</h3><p class="feature-text">Deep understanding of VDA taxation under Section 115BBH, crypto-to-crypto computation, NFT/DeFi classification, P2P TDS obligations, and multi-exchange consolidation.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Technology Integration</h3><p class="feature-text">Crypto tax software integration to consolidate trade data from multiple exchanges, compute FIFO gains, and auto-populate Schedule VDA for high-volume traders.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">7-Day Turnaround</h3><p class="feature-text">ITR filed within 7 working days of receiving complete exchange data. 194S reconciliation completed within 3 days. Advance tax computed quarterly for active traders.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">10 to 10,000+ Trades</h3><p class="feature-text">Whether you have a small crypto portfolio or are a high-volume day trader, our team handles Schedule VDA for any transaction volume with accuracy.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">26AS Pre-Filing Check</h3><p class="feature-text">Complete 194S TDS reconciliation against Form 26AS before filing to prevent defective return notices under Section 139(9).</p></article>
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
                <blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">"I had 800+ trades across CoinDCX and Binance. Patron consolidated everything, filled Schedule VDA, and filed my ITR in 5 days. The 26AS reconciliation alone saved me from a defective return notice."</p>
                    <p style="font-weight:700;font-size:14px;margin:0;">- IT Professional, DLF Cyber City</p>
                </blockquote>
                <blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">"I did not know crypto-to-crypto swaps were taxable. Patron computed my swap gains, which I had completely missed, and ensured I filed correctly before any notice came."</p>
                    <p style="font-weight:700;font-size:14px;margin:0;">- Young Professional, Gurugram</p>
                </blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting vs Local CA Firms for Crypto ITR in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical Local CA</th></tr></thead>
                    <tbody>
                        <tr><td>Crypto Expertise</td><td>Dedicated VDA tax team with exchange integration</td><td>Limited or no crypto experience</td></tr>
                        <tr><td>Trade Consolidation</td><td>Software-assisted multi-exchange consolidation</td><td>Manual CSV processing</td></tr>
                        <tr><td>Schedule VDA</td><td>Auto-populated from consolidated data</td><td>Manual entry, error-prone</td></tr>
                        <tr><td>P2P Compliance</td><td>Documentation and TDS guidance</td><td>Unaware of P2P obligations</td></tr>
                        <tr><td>Pricing</td><td>From Rs 5,000 (< 100 trades)</td><td>Rs 3,000-5,000 but limited scope</td></tr>
                        <tr><td>Track Record</td><td>10,000+ businesses, 50,000+ docs</td><td>50-200 clients, no crypto niche</td></tr>

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
            <h2 class="section-title">Related Services for Crypto ITR Filing</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/itr-for-crypto-traders">ITR for Crypto Traders (National)</a> - Broader overview of crypto taxation across India</li>
                    <li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a> - Comprehensive ITR filing for all income types</li>
                    <li><a href="/itr-for-capital-gains">ITR for Capital Gains</a> - For combined equity + crypto portfolios</li>
                    <li><a href="/itr-for-salary">ITR for Salary</a> - For salaried employees with crypto side income</li>
                    <li><a href="/itr-for-business">ITR for Business</a> - For traders treating crypto as business income</li>
                    <li><a href="/tds-return-filing-24q">TDS Return Filing</a> - For businesses deducting 194S on VDA</li>
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
                
                <p><strong>Governing Law:</strong> Income Tax Act, 1961 | Finance Act, 2022 (VDA regime) | Finance Act, 2025 (crypto-asset definition expansion from April 2026)</p>
                <p><strong>Key Sections:</strong> 2(47A) (VDA definition) | 115BBH (30% tax on VDA transfer) | 194S (1% TDS on VDA transfer) | 56(2)(x) (gift/airdrop taxation) | 139(9) (defective return for Schedule VDA mismatch)</p>
                <p><strong>ITR Forms:</strong> ITR-2 (Schedule VDA for capital gains treatment) | ITR-3 (Schedule VDA for business treatment)</p>
                <p><strong>Portal:</strong> <a href="https://incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> | Form 26AS/AIS for 194S credit verification</p>
                <p><strong>Penalties (from April 2026):</strong></p>
                <p><strong>Missing VDA transaction statement:</strong> Rs 200 per day of default.</p>
                <p><strong>Inaccurate VDA reporting:</strong> Rs 50,000 fixed penalty.</p>
                <p><strong>Under-reporting income (Section 270A):</strong> 50-200% of tax payable.</p>
                <p><strong>Late filing (Section 234F):</strong> Rs 5,000 (Rs 1,000 if income < Rs 5 lakh).</p>
                <p><strong>Advance tax default (Section 234B/C):</strong> 1% per month interest.</p>
                <p><strong>Haryana State Context:</strong> Haryana does not levy Professional Tax. For Gurugram crypto traders who are salaried, the total tax profile is: salary income (slab rates) + VDA income (flat 30% under 115BBH) + TDS credits (194S from exchanges + salary TDS). No additional state tax layer applies.</p>

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
                    <h2 class="faq-expanded__title">FAQs - ITR for Crypto Traders in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about crypto taxation, Schedule VDA, 194S TDS, and filing deadlines for Gurugram crypto traders.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Gurugram', 'enquiryService' => 'ITR for Crypto Traders in Gurugram'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How is crypto taxed in India?</h3>
                        <div class="faq-expanded__a"><p>Profits from selling, swapping, or spending cryptocurrency are taxed at a flat 30% under Section 115BBH, plus applicable surcharge and 4% cess. Only the cost of acquisition is deductible. No other expenses are allowed. Losses from one crypto cannot offset gains from another. A 1% TDS under Section 194S is deducted by Indian exchanges. All transactions must be reported in Schedule VDA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which ITR form should Gurugram crypto traders use?</h3>
                        <div class="faq-expanded__a"><p>If you treat crypto as a capital asset (occasional trading/investing), use ITR-2 with Schedule VDA. If you treat crypto as business income (frequent trading), use ITR-3 with Schedule VDA. Either way, the tax rate is 30% under Section 115BBH. Do not use ITR-1 (no VDA support) or ITR-4 (presumptive taxation cannot apply to VDA). Most Gurugram salaried professionals with crypto use ITR-2.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the cost of crypto ITR filing in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Professional fees start from Rs 5,000 for traders with fewer than 100 transactions, Rs 8,000-12,000 for 100-500 trades, and Rs 15,000-25,000 for high-volume traders with 500+ trades across multiple exchanges. Multi-exchange consolidation and 194S reconciliation are included. Government filing fees are nil.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I set off crypto losses against gains?</h3>
                        <div class="faq-expanded__a"><p>No. Under Section 115BBH, losses from one Virtual Digital Asset cannot be set off against gains from another VDA or against any other income (salary, business, rental, capital gains from stocks). VDA losses also cannot be carried forward. Each profitable crypto transaction is taxed independently at 30%.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Are crypto-to-crypto swaps taxable?</h3>
                        <div class="faq-expanded__a"><p>Yes. Exchanging one cryptocurrency for another (e.g., ETH to BTC) is a taxable transfer under Section 115BBH. The gain is computed as the INR fair market value of the crypto received minus the cost of acquisition of the crypto given up. Both parties in a swap are treated as buyer and seller, and TDS under 194S applies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if I do not report crypto income?</h3>
                        <div class="faq-expanded__a"><p>The Income Tax Department receives VDA transaction data from Indian exchanges via 194S TDS. Unreported income triggers under-reporting penalty (50-200% of tax), late filing fee (Rs 5,000), interest under Section 234A/B/C, and potential prosecution. New penalties from April 2026 include Rs 200/day for missing VDA statements and Rs 50,000 for inaccurate reporting.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How do I claim 194S TDS credit on crypto?</h3>
                        <div class="faq-expanded__a"><p>TDS deducted by Indian exchanges under Section 194S appears in your Form 26AS. When filing ITR-2 or ITR-3, the portal auto-fetches 194S credits. Verify that the sale consideration in Schedule VDA matches or exceeds the gross receipts in 26AS. If there is a mismatch, the return may be flagged as defective. Patron reconciles 26AS with exchange data before filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do I need to pay advance tax on crypto gains?</h3>
                        <div class="faq-expanded__a"><p>Yes, if your total tax liability (including crypto) exceeds Rs 10,000 in a financial year after TDS credits. Advance tax must be paid in quarterly instalments (15 Jun, 15 Sep, 15 Dec, 15 Mar). Failure attracts interest under Section 234B at 1% per month on shortfall and Section 234C at 1% per month on quarterly deferment.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Crypto par kitna tax lagta hai?</strong> Flat 30% + surcharge + 4% cess. Effective rate 31.2% ya usse zyada.</p>
                <p><strong>Kya crypto loss adjust ho sakta hai?</strong> Nahi. Ek crypto ka loss doosre crypto ke profit se adjust nahi hota. Kisi bhi income se nahi hota.</p>
                <p><strong>Crypto ka ITR kaunse form mein file hota hai?</strong> ITR-2 (capital gains) ya ITR-3 (business income). Schedule VDA mandatory hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Crypto ITR Accurately - New Penalties from April 2026</h2>
            <div class="content-text">
                
                <p>From April 2026, 'crypto-asset' is explicitly added to the VDA definition under the Income Tax Act, 2025. New penalties of Rs 200/day for missing transaction statements and Rs 50,000 for inaccurate reporting apply. The Income Tax Department receives exchange-level transaction data via 194S TDS and enhanced AIS. Schedule VDA requires line-by-line reporting. 26AS mismatch triggers defective return notices. File accurately, reconcile every exchange, and report every swap, sell, and spend transaction.</p>
                <p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20crypto%20ITR%20filing%20in%20Gurugram." target="_blank">WhatsApp us</a> for a free consultation.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Crypto ITR Filing in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">ITR filing for crypto traders in Gurugram requires accurate transaction-level reporting in Schedule VDA, correct 194S TDS reconciliation, and understanding of the strict no-loss-set-off regime under Section 115BBH. Whether you are an IT professional in DLF Cyber City with a small crypto portfolio or a high-volume trader using multiple exchanges, every sale, swap, and spend is a taxable event.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road provides CA-assisted crypto ITR filing including multi-exchange consolidation, Schedule VDA preparation, 194S reconciliation, advance tax computation, and NFT/DeFi income classification.</p>
                <p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted crypto tax compliance partner for traders across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20crypto%20ITR%20filing%20in%20Gurugram.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Crypto%20ITR%20Filing%20Gurugram&body=Hi%2C%20I%20need%20help%20with%20crypto%20ITR%20filing%20in%20Gurugram." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ITR for Crypto Traders - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert crypto ITR filing services across major Indian cities</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">City-Wise Crypto ITR Filing</div>
                <div class="pa-block-sub">Select your city for localised crypto ITR services</div>
                <div class="pa-city-grid">
                    <a href="/itr-for-crypto-traders/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-crypto-traders/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-crypto-traders/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Gurugram</div>
                <div class="pa-block-sub">End-to-end tax and compliance support in Gurugram</div>
                <div class="pa-cross-grid">
                    <a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-for-capital-gains/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Capital Gains</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-filing-for-salary/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Salary</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-for-business/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/tds-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/tax-planning-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning Services</div><div class="pa-card-sub">Gurugram</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on ITR for Crypto Traders in Gurugram is reviewed quarterly by our CA team. VDA tax rules, 194S TDS provisions, and Schedule VDA requirements are verified against the latest Finance Act and CBDT notifications. The information reflects FY 2025-26 (AY 2026-27) rules including April 2026 changes.</p>
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
