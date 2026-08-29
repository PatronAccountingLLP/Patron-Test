
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
    <title>ITR for Companies Gurugram - ITR-6, MAT & AMT</title>
    <meta name="description" content="CA-assisted ITR-6 filing for companies in Gurugram. Section 115BAA/115BAB, MAT, statutory audit, transfer pricing. Serving Cyber City, Manesar, Golf Course Road. Call +91 945 945 6700.">
    <link rel="canonical" href="/itr-for-companies/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Companies Gurugram - ITR-6, MAT & AMT">
    <meta property="og:description" content="CA-assisted ITR-6 filing for companies in Gurugram. Section 115BAA/115BAB, MAT, statutory audit, transfer pricing. Serving Cyber City, Manesar, Golf Course Road. Call +91 945 945 6700.">
    <meta property="og:url" content="/itr-for-companies/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Companies Gurugram - ITR-6, MAT & AMT">
    <meta name="twitter:description" content="CA-assisted ITR-6 filing for companies in Gurugram. Section 115BAA/115BAB, MAT, statutory audit, transfer pricing. Serving Cyber City, Manesar, Golf Course Road. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR for Companies in Gurugram",
      "description": "CA-assisted ITR-6 filing for companies in Gurugram. Section 115BAA/115BAB, MAT, statutory audit, transfer pricing. Serving Cyber City, Manesar, Golf Course Road. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/itr-for-companies/gurugram",
      "serviceType": "ITR for Companies in Gurugram",
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
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "availability": "https://schema.org/InStock",
        "url": "https://www.patronaccounting.com/itr-for-companies/gurugram",
        "price": "400"
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
          "name": "ITR for Companies: Expert CA Filing",
          "item": "https://www.patronaccounting.com/itr-for-companies"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ITR for Companies in Gurugram",
          "item": "https://www.patronaccounting.com/itr-for-companies/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ITR form should a Gurugram company file?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "All companies registered under the Companies Act (Pvt Ltd, OPC, Public Ltd, Section 8) file ITR-6. The only exception is companies claiming Section 11 exemption for charitable/religious income, which file ITR-7. LLPs and partnership firms file ITR-5, not ITR-6. Patron Accounting's Gurugram office files ITR-6 for all company types."
          }
        },
        {
          "@type": "Question",
          "name": "What is the due date for company ITR in 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For AY 2026-27: companies subject to audit (which includes virtually all companies) must file by 30 September 2026. Companies with transfer pricing obligations file by 30 November 2026. The tax audit report (Form 3CA-3CD) must also be filed by 30 September. Patron's Gurugram team completes filing by 25 September."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of company ITR-6 filing in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Professional fees for ITR-6 filing in Gurugram start from Rs 10,000 for standard filings up to Rs 1,00,000 for MNC subsidiaries with transfer pricing. ITR-6 with tax audit starts from Rs 25,000. Dormant company nil ITR-6 starts from Rs 5,000. Government filing fees are nil."
          }
        },
        {
          "@type": "Question",
          "name": "Should my Gurugram company opt for Section 115BAA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 115BAA (effective 25.17%) is beneficial for companies that do not rely on deductions like Section 80-IAC, 80-JJAA, additional depreciation, or SEZ benefits. It is irrevocable once elected by filing Form 10-IC. Gurugram startups with DPIIT registration should evaluate 80-IAC vs 115BAA before deciding. Patron Accounting provides a detailed cost-benefit analysis."
          }
        },
        {
          "@type": "Question",
          "name": "Can a dormant Gurugram company file nil ITR-6?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every company must file ITR-6 annually regardless of activity. A dormant company with nil turnover and nil profit files a nil ITR-6 with zero income, zero tax, and basic balance sheet disclosures. Non-filing attracts Rs 5,000 late fee under Section 234F and may trigger ROC compliance issues."
          }
        },
        {
          "@type": "Question",
          "name": "Is MAT applicable if my company opts for 115BAA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Companies that elect Section 115BAA or Section 115BAB are exempt from Minimum Alternate Tax (MAT) under Section 115JB. However, any accumulated MAT credits from prior years when the company was on the standard regime become permanently unusable. This is a significant financial consideration."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if a Gurugram company does not file ITR-6?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Non-filing triggers late fee under Section 234F (Rs 5,000), interest under Section 234A (1% per month on unpaid tax), loss carry-forward forfeiture, potential prosecution under Section 276CC for wilful default, and cross-verification alerts between the Income Tax Department and MCA. Directors of non-compliant companies face scrutiny during personal ITR processing."
          }
        },
        {
          "@type": "Question",
          "name": "Is statutory audit needed before filing ITR-6?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every company under the Companies Act, 2013 must get its accounts audited by a qualified Chartered Accountant. The audited financial statements form the basis of the ITR-6 computation. The statutory audit must be completed before the ITR filing deadline (30 September for most companies). Tax audit under Section 44AB is additionally required for companies exceeding the turnover threshold. Quick Answers Company ka ITR form kaun sa hai? Sab companies ITR-6 file karti hain. LLP aur partnership firm ITR-5 file karti hain. Company ITR ki due date kya hai? 30 September 2026 (audit cases). Transfer pricing wali companies ke liye 30 November 2026. 115BAA se tax kitna kam hota hai? Standard 30% ke jagah 22% + 10% surcharge + 4% cess = effective 25.17%. Lekin deductions nahi mil sakti."
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
                        ITR for Companies in Gurugram: ITR-6 Filing with Tax Regime Advisory
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form:</span> ITR-6 for all companies (except Section 11 charitable trusts)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax Rates:</span> 22% (Section 115BAA) | 25% (turnover < Rs 400 Cr) | 15% (new manufacturing - 115BAB) | 30% (others)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> 30 September 2026 (audit cases) | 30 November 2026 (transfer pricing)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>MAT:</span> 15% on book profits (exempt for 115BAA/115BAB companies)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">ITR-6 filed for 2,000+ companies annually. Trusted by Gurugram IT firms, manufacturers, and MNC subsidiaries.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20company%20ITR-6%20filing%20in%20Gurugram.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - ITR for Companies in Gurugram',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'itr-for-companies/gurugram', 'label' => 'ITR for Companies in Gurugram', 'selected' => true, 'disabled' => false],
                            ['value' => 'income-tax-return/gurugram', 'label' => 'Income Tax Return Filing in Gurugram', 'selected' => false, 'disabled' => false],
                            ['value' => 'itr-for-business/gurugram', 'label' => 'ITR for Business in Gurugram', 'selected' => false, 'disabled' => false],
                            ['value' => 'tax-planning-services/gurugram', 'label' => 'Tax Planning in Gurugram', 'selected' => false, 'disabled' => false],
                            ['value' => 'itr-for-capital-gains/gurugram', 'label' => 'ITR for Capital Gains in Gurugram', 'selected' => false, 'disabled' => false],
                            ['value' => 'itr-filing-for-salary/gurugram', 'label' => 'ITR for Salary in Gurugram', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's CA team ran a detailed 115BAA vs 80-IAC analysis for us. The model showed we would save Rs 18 lakh over 5 years by staying on the standard regime. That single piece of advice was invaluable.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arun Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, Startup, Golf Course Road</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our company ITR-6, tax audit, ROC filing, and TDS returns are all handled by Patron. Zero notices in 4 years of filing. Very reliable team for manufacturing compliance.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Sinha</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Manufacturing Co., IMT Manesar</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As an MNC subsidiary, our ITR-6 involves transfer pricing, Form 3CEB, and intercompany reconciliation. Patron's in-house TP team handles it all without outsourcing. Filed 5 days early every year.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Menon</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, MNC Subsidiary, NH-48</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Had a dormant company that hadn't filed ITR for 2 years. Patron filed all pending ITR-6 returns, resolved the ROC compliance issues, and got us back on track without prosecution.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VT</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Taneja</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, OPC, Sohna Road</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron identified a GST-ITR turnover mismatch before filing and documented the legitimate differences. This prevented what would have been an automated mismatch notice from CPC. Proactive team.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Suresh Gupta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, IT Company, DLF Cyber City</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Company ITR-6 filing with tax regime advisory, audit coordination, and expert guidance from Gurugram.</p>
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
            <a href="#what-section" class="toc-btn">What Is ITR-6</a>
            <a href="#who-section" class="toc-btn">Tax Regime</a>
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
            <h2 class="section-title">Company ITR Filing in Gurugram: ITR-6, Tax Regime, and Compliance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Companies in Gurugram Services at a Glance</strong></p>
                    <p>Every company registered under the Companies Act - whether Pvt Ltd, OPC, Public Ltd, or Section 8 - must file ITR-6 annually, regardless of profit, loss, or activity. The corporate tax rate depends on the regime elected: 22% under Section 115BAA (effective 25.17% with surcharge and cess), 15% under Section 115BAB for new manufacturing companies (effective 17.16%), or 25-30% under the standard regime. Companies opting for 115BAA/115BAB are exempt from MAT but cannot claim most deductions. Filing requires statutory audit, DSC authentication, and submission on incometax.gov.in. The due date for AY 2026-27 is 30 September 2026 (30 November for transfer pricing cases).</p>
                </div>
                <p>Gurugram is home to an estimated 50,000+ registered companies across every sector. DLF Cyber City houses IT and BPO companies ranging from startup-stage to multinational subsidiaries with thousands of employees. IMT Manesar and Udyog Vihar form a dense manufacturing corridor with automotive, consumer goods, and electronics companies. Golf Course Road and NH-48 are corporate headquarters for BFSI, consulting, and technology firms. Sohna Road's startup ecosystem includes hundreds of DPIIT-registered companies evaluating the critical choice between Section 80-IAC tax holiday and Section 115BAA's concessional rate. For a comprehensive overview of company ITR filing across India, refer to our <a href="/itr-for-companies">ITR for Companies</a> national guide.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>ITR Form</td><td>ITR-6 (all companies except Section 11)</td></tr>
                        <tr><td>Filing Mode</td><td>Electronic only, with DSC (Digital Signature Certificate)</td></tr>
                        <tr><td>Statutory Audit</td><td>Mandatory for all companies under Companies Act 2013</td></tr>
                        <tr><td>Tax Audit</td><td>Under Section 44AB if turnover exceeds threshold</td></tr>
                        <tr><td>Due Date</td><td>30 Sep 2026 (audit) | 30 Nov 2026 (transfer pricing)</td></tr>
                        <tr><td>Tax Rate</td><td>22% (115BAA) | 25% (turnover < Rs 400 Cr) | 15% (115BAB) | 30% (standard)</td></tr>
                        <tr><td>MAT</td><td>15% on book profits (exempt for 115BAA/115BAB)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Haryana does not levy Professional Tax or any state-level corporate tax, making ITR-6 filing under the Income Tax Act the primary direct tax obligation for every Gurugram company. With CBDT notifying ITR forms for AY 2026-27 on 30 March 2026, and the Income Tax Act, 2025 restructuring provisions from April 2026, companies must file accurately for FY 2025-26 while preparing for the new framework.</p>
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
                <h2 class="section-title">What Is ITR-6 and Who Must File It?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ITR-6 is the income tax return form prescribed for all companies registered under the Companies Act, 2013 (or the earlier Companies Act, 1956), except those claiming exemption under Section 11 for charitable or religious purposes. It is the most comprehensive ITR form, requiring detailed disclosure of income from all sources, balance sheet, profit and loss account, tax computation, MAT calculation, related party transactions, and regime election.</p>
                    <p><strong>Every company in Gurugram must file ITR-6</strong>, including: private limited companies in DLF Cyber City and Golf Course Road, one person companies (OPCs) on Sohna Road, public limited companies, Section 8 (non-profit) companies not claiming Section 11, wholly-owned subsidiaries of foreign MNCs on NH-48, and dormant companies with nil turnover. Filing is mandatory regardless of profit, loss, or operational status. Learn more about <a href="/income-tax-return">Income Tax Return filing</a> for all entity types.</p>
                    <p>ITR-6 must be filed electronically on <a href="https://incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> and authenticated using a valid Digital Signature Certificate (DSC) of the authorised signatory (typically the managing director or director authorised by the board). EVC (Electronic Verification Code) is not available for companies - DSC is the only authentication method. After filing, companies should also ensure <a href="/statutory-audit">Statutory Audit</a> compliance under the Companies Act.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Companies in Gurugram:</strong></p>
                    <p><strong>ITR-6:</strong> Income tax return form for all companies except those claiming Section 11 exemption.</p>
                    <p><strong>Section 115BAA:</strong> Concessional corporate tax at 22% (effective 25.17%) - irrevocable once elected via Form 10-IC.</p>
                    <p><strong>Section 115BAB:</strong> 15% rate (effective 17.16%) for new manufacturing companies incorporated after 1 Oct 2019.</p>
                    <p><strong>MAT (Section 115JB):</strong> Minimum Alternate Tax at 15% on book profits - exempt for 115BAA/115BAB companies.</p>
                    <p><strong>Form 10-IC:</strong> Mandatory form for electing Section 115BAA, must be filed on or before ITR due date.</p>
                    <p><strong>DSC:</strong> Digital Signature Certificate - the only authentication method for company ITR-6 filing.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Companies in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Company ITR-6</span>
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
            <h2 class="section-title">Tax Regime Selection for Gurugram Companies</h2>
            <div class="content-text">
                
                <p>The most critical decision in ITR-6 filing is the tax regime election. Gurugram companies have three primary options, each with distinct rate structures, deduction eligibility, and MAT implications. This decision is often <strong>irrevocable</strong> and must be evaluated with professional guidance before the ITR filing deadline.</p>
                <p><strong>Section 115BAA (22% concessional rate):</strong> Effective rate 25.17% (including 10% surcharge and 4% cess). Available to all domestic companies. Requires filing Form 10-IC on or before the ITR due date. Once elected, it cannot be withdrawn in subsequent years. Companies cannot claim most deductions (Section 80-IAC, 80-IB, 80-JJAA, additional depreciation under 32(1)(iia), etc.) and are exempt from MAT. Accumulated MAT credits become unusable. This is the most popular choice for Gurugram IT companies in DLF Cyber City that do not have significant deduction claims.</p>
                <p><strong>Section 115BAB (15% new manufacturing):</strong> Effective rate 17.16%. Available only to domestic companies incorporated on or after 1 October 2019 that commence manufacturing by 31 March 2024. Requires Form 10-ID. Cannot claim most deductions. Exempt from MAT. Relevant for Gurugram manufacturing companies in IMT Manesar and Udyog Vihar that meet the incorporation and commencement criteria.</p>
                <p><strong>Standard regime (25%/30%):</strong> Companies with turnover up to Rs 400 crore in FY 2017-18 pay 25%; others pay 30%. MAT at 15% on book profits applies if regular tax liability falls below MAT threshold. MAT credit can be carried forward for 15 years. This is beneficial for companies with significant Section 80-IAC startup benefits, SEZ deductions, or large depreciation claims.</p>
                <p><strong>The 115BAA vs 80-IAC decision for Gurugram startups:</strong> DPIIT-registered startups on Sohna Road and Golf Course Road must choose between Section 80-IAC (100% profit deduction for 3 of first 10 years) under the standard regime and Section 115BAA (22% flat rate with no deductions). If the startup expects high profits during the 80-IAC holiday period, the standard regime with 80-IAC may yield lower effective tax. Once 115BAA is elected, the startup cannot claim 80-IAC in future years. This is a one-time, irrevocable decision requiring detailed financial modelling.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company ITR Filing Services in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-6 Preparation and Filing</td><td>Complete income tax return preparation for Gurugram companies including income computation from all sources, balance sheet scheduling, P&L analysis, tax computation under the elected regime, and DSC-authenticated submission on incometax.gov.in</td></tr>
                        <tr><td>Tax Regime Advisory (115BAA / 115BAB / Standard)</td><td>Cost-benefit analysis comparing Section 115BAA (22%), Section 115BAB (15%), and the standard regime (25%/30%) based on the company's specific deduction profile, MAT position, and profit trajectory. Includes Form 10-IC/10-ID filing</td></tr>
                        <tr><td>MAT Computation and Credit Management</td><td>Minimum Alternate Tax calculation at 15% on book profits for companies under the standard regime. MAT credit tracking and carry-forward optimisation for up to 15 assessment years</td></tr>
                        <tr><td>Statutory and Tax Audit Coordination</td><td>Ensuring the statutory audit under Companies Act 2013 and tax audit under Section 44AB are completed before the ITR filing deadline</td></tr>
                        <tr><td>Transfer Pricing Documentation (MNC)</td><td>TP study, Form 3CEB filing, and master/local file preparation for Gurugram MNC subsidiaries with international transactions under Section 92</td></tr>
                        <tr><td>Advance Tax Planning and Payment</td><td>Quarterly advance tax computation (15 Jun, 15 Sep, 15 Dec, 15 Mar) ensuring 90%+ payment to avoid Section 234B/C interest</td></tr>
                        <tr><td>26AS/AIS Reconciliation</td><td>Matching TDS credits, advance tax, and financial transaction data against the company's ITR-6 to prevent CPC mismatches</td></tr>
                        <tr><td>Loss Carry-Forward and Set-Off</td><td>Ensuring business losses, capital losses, and unabsorbed depreciation are correctly reported for carry-forward, subject to the shareholding continuity rule under Section 79</td></tr>

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
            <h2 class="section-title">ITR-6 Filing Process for Gurugram Companies</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team follows a structured 6-step process to ensure accurate ITR-6 filing, optimal tax regime selection, and timely submission for Gurugram companies.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Complete Statutory Audit and Tax Audit</h3><p class="step-description">Every company must get its accounts audited under the Companies Act, 2013 before filing ITR-6. If turnover exceeds the Section 44AB threshold, a tax audit (Form 3CA-3CD) is also required. Both must be completed before 30 September 2026. Gurugram IT companies in DLF Cyber City should begin audit preparation by June-July.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Companies Act audit</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 3CA-3CD</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><circle cx="85" cy="60" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M80 60l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Audit Complete</span><span class="step-number-large">01</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Select Tax Regime and File Form 10-IC/10-ID</h3><p class="step-description">If the company elects Section 115BAA, file Form 10-IC on or before the ITR due date. For Section 115BAB, file Form 10-ID. Missing these forms results in the company being taxed at the standard higher rate. The election is irrevocable for 115BAA. For Gurugram startups evaluating 80-IAC vs 115BAA, complete the financial modelling before deciding.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>115BAA/115BAB election</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 10-IC filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="37" r="12" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5"/><circle cx="75" cy="37" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="45" y="41" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">22%</text><text x="75" y="41" font-size="8" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">15%</text><text x="60" y="88" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGIME ELECTED</text></svg></div><span class="illustration-label">Regime Selected</span><span class="step-number-large">02</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compute Taxable Income Under Elected Regime</h3><p class="step-description">Calculate total income from business, capital gains, house property, and other sources. Apply deductions (only under standard regime). Compute MAT under Section 115JB if on the standard regime. Calculate advance tax liability and reconcile against quarterly payments.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Income computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MAT calculated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="14" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">&#8377;</text><line x1="35" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="90" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TAX COMPUTED</text></svg></div><span class="illustration-label">Tax Computed</span><span class="step-number-large">03</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Reconcile TDS, Advance Tax, and Self-Assessment Tax</h3><p class="step-description">Download Form 26AS and AIS from the income tax portal. Match every TDS credit, advance tax challan, and self-assessment tax payment against the ITR-6 computation. Mismatches between 26AS and ITR-6 are the primary trigger for CPC processing delays and demand notices.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>26AS matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AIS reconciled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="55" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="65" y="15" width="45" height="55" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><path d="M55 42h10" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/><circle cx="60" cy="42" r="8" fill="none" stroke="#25D366" stroke-width="1.5"/><path d="M57 42l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/><text x="60" y="90" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RECONCILED</text></svg></div><span class="illustration-label">Credits Matched</span><span class="step-number-large">04</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Prepare and File ITR-6 on incometax.gov.in</h3><p class="step-description">Using the ITR-6 utility or CA software, prepare the complete return including all schedules (Schedule BP, CG, OS, MAT, ESR, SH, TP, AL, GST). Upload on incometax.gov.in and authenticate with the director's DSC. The portal generates an acknowledgement with verification number.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC authenticated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR-6 submitted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="90" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-6 FILED</text></svg></div><span class="illustration-label">Filing Complete</span><span class="step-number-large">05</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Post-Filing Compliance</h3><p class="step-description">After filing, monitor the CPC processing status. Respond to any deficiency notice under Section 139(9) within 15 days. If a refund is due, track it on the portal. Ensure the ROC annual filings (AOC-4, MGT-7) are also completed as ROC and IT data are now cross-verified by MCA and the Income Tax Department.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CPC tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROC synced</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 10L100 85H20Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 55l5 5 12-12" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="95" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">COMPLIANT</text></svg></div><span class="illustration-label">All Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Company ITR-6 Filing in Gurugram</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Company PAN Card</strong> - PAN of the company (not the directors' personal PAN).</li>
                    <li><strong>Audited Financial Statements</strong> - Balance sheet, P&L, cash flow statement, notes to accounts signed by the auditor and directors.</li>
                    <li><strong>Tax Audit Report (3CA-3CD)</strong> - If applicable based on turnover threshold.</li>
                    <li><strong>Form 26AS and AIS</strong> - TDS credit statement and Annual Information Statement for reconciliation.</li>
                    <li><strong>Advance Tax Challans</strong> - Receipts of quarterly advance tax payments with BSR code and challan details.</li>
                    <li><strong>Form 10-IC / 10-ID</strong> - If electing Section 115BAA or 115BAB.</li>
                    <li><strong>Board Resolution</strong> - Authorising the director to sign and file the ITR-6 with DSC.</li>
                    <li><strong>Director's Active DSC</strong> - Digital Signature Certificate of the authorised signatory (must be valid and registered on the portal).</li>
                    <li><strong>Transfer Pricing Report (Form 3CEB)</strong> - For companies with international transactions exceeding Rs 1 crore.</li>
                    <li><strong>ROC Filing Receipts</strong> - AOC-4 and MGT-7 filing receipts for cross-verification.</li>
                </ul>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Gurugram-specific tip:</strong> Many Gurugram companies have directors who are NRIs or foreign nationals (common in MNC subsidiaries). Ensure the director signing the ITR-6 has an active Indian DSC registered on incometax.gov.in. Foreign DSCs are not accepted. If no India-based director is available, appoint an authorised representative under Section 140.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Company ITR Filing Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Irrevocable 115BAA Election Without Analysis</td><td>Companies lose deductions like 80-IAC, 80-JJAA permanently</td><td>Detailed cost-benefit model comparing all three regimes before election. We run a 5-year projection for every Gurugram company</td></tr>
                        <tr><td>MAT Credit Loss on Regime Switch</td><td>Rs 10-50 lakh in accumulated MAT credits lost permanently</td><td>MAT credit impact analysis factored into the regime decision before Form 10-IC filing</td></tr>
                        <tr><td>GST-ITR Turnover Mismatch</td><td>Automated mismatch notices from cross-verification</td><td>Complete GSTR-9 vs ITR-6 turnover reconciliation with documented explanations for legitimate differences</td></tr>
                        <tr><td>Director Salary Disallowance</td><td>Expense disallowed without proper board resolution</td><td>Review of director remuneration compliance with Companies Act Section 197 before ITR filing</td></tr>
                        <tr><td>DSC Expiry Before Filing Deadline</td><td>Cannot authenticate ITR-6 without valid DSC</td><td>DSC validity check initiated by mid-August; renewal processed 4-6 weeks before the September deadline</td></tr>

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
            <h2 class="section-title">Company ITR Filing Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-6 Filing (Standard)</td><td>Starting from INR 10,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ITR-6 + Tax Audit</td><td>Starting from INR 25,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ITR-6 + Tax Audit + Transfer Pricing (MNC)</td><td>Starting from INR 50,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Tax Regime Advisory (115BAA/115BAB)</td><td>Starting from INR 5,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>MAT Computation + Credit Analysis</td><td>Starting from INR 5,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Dormant Company NIL ITR-6</td><td>Starting from INR 5,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 3,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Government Filing Fees</td><td>Nil</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Companies in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20company%20ITR-6%20filing%20in%20Gurugram.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company ITR Filing Timeline - AY 2026-27</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Advance Tax - Q1 (15%)</td><td>15 June 2026</td></tr>
                        <tr><td>Advance Tax - Q2 (45% cumulative)</td><td>15 September 2026</td></tr>
                        <tr><td>Statutory Audit Completion</td><td>Before ITR filing - Companies Act mandatory</td></tr>
                        <tr><td>Tax Audit Report (3CA-3CD)</td><td>30 September 2026</td></tr>
                        <tr><td>Form 10-IC/10-ID (regime election)</td><td>With ITR-6 - before ITR due date</td></tr>
                        <tr><td>ITR-6 Filing (audit cases)</td><td>30 September 2026 - most Gurugram companies</td></tr>
                        <tr><td>ITR-6 Filing (transfer pricing)</td><td>30 November 2026 - MNC subsidiaries</td></tr>
                        <tr><td>Advance Tax - Q3 (75% cumulative)</td><td>15 December 2026</td></tr>
                        <tr><td>Advance Tax - Q4 (100%)</td><td>15 March 2027</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> The 115BAA/115BAB election via Form 10-IC/10-ID is irrevocable. Get professional analysis before deciding. Late ITR-6 filing costs Rs 5,000 + interest + loss carry-forward forfeiture. DSC must be active and registered. Start audit preparation by July.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Company ITR in Gurugram?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram Office Presence</h3><p class="feature-text">Patron operates from Golf Course Extension Road - at the crossroads of Cyber City IT, Manesar manufacturing, and Golf Course Road corporate headquarters.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div><h3 class="feature-title">Tax Regime Advisory</h3><p class="feature-text">Detailed cost-benefit model comparing 115BAA, 115BAB, and standard regime. 5-year financial projection for every Gurugram company before the irrevocable Form 10-IC decision.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">2,000+ Company ITRs Annually</h3><p class="feature-text">Filing ITR-6 for Pvt Ltd, OPC, public companies, Section 8 companies, MNC subsidiaries, and dormant entities across all sectors in Gurugram.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Integrated Compliance</h3><p class="feature-text">ITR-6 as part of a comprehensive package including statutory audit, tax audit, TDS returns, GST returns, ROC filings (AOC-4, MGT-7), and transfer pricing documentation.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Filed 5 Days Early</h3><p class="feature-text">ITR-6 filed by 25 September (5 days before deadline). Transfer pricing ITR-6 filed by 25 November. No last-day filing stress.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">MNC Transfer Pricing</h3><p class="feature-text">In-house TP team for Golf Course Road and NH-48 MNC subsidiaries. Form 3CEB, master file, local file, and integrated ITR-6 filing by the November deadline.</p></article>
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
                    <p style="font-style:italic;margin-bottom:8px;">"Patron's CA team ran a detailed 115BAA vs 80-IAC analysis for us. The model showed we would save Rs 18 lakh over 5 years by staying on the standard regime with our startup deduction. That single piece of advice paid for years of their fees."</p>
                    <p style="font-weight:700;font-size:14px;margin:0;">- Founder, Startup, Golf Course Road</p>
                </blockquote>
                <blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">"Our company ITR-6, tax audit, ROC filing, and TDS returns are all handled by Patron. Zero notices in 4 years of filing."</p>
                    <p style="font-weight:700;font-size:14px;margin:0;">- Director, Manufacturing Company, IMT Manesar</p>
                </blockquote>
                <p><strong>4-Office Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves companies across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting vs Local CA Firms in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical Local CA</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-6 Expertise</td><td>Dedicated corporate tax team with regime advisory</td><td>Basic ITR-6 filing</td></tr>
                        <tr><td>Tax Regime Analysis</td><td>115BAA/115BAB/Standard cost-benefit model</td><td>Files whatever client requests</td></tr>
                        <tr><td>Transfer Pricing</td><td>In-house TP team for MNC subsidiaries</td><td>Outsources or declines</td></tr>
                        <tr><td>Turnaround</td><td>ITR-6 filed by 25 Sep (5 days early)</td><td>Often last-day filing</td></tr>
                        <tr><td>Pricing</td><td>From Rs 10,000 (standard) to Rs 1,00,000 (MNC+TP)</td><td>Variable</td></tr>
                        <tr><td>Track Record</td><td>10,000+ businesses, 50,000+ docs</td><td>50-200 clients</td></tr>

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
            <h2 class="section-title">Related Services for Company ITR Filing</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/itr-for-companies">ITR for Companies (National)</a> - Broader overview of company ITR-6 filing across India</li>
                    <li><a href="/statutory-audit">Statutory Audit Service</a> - Companies Act statutory audit - mandatory before ITR-6</li>
                    <li><a href="/tax-audit">Tax Audit Service</a> - Section 44AB tax audit for companies exceeding turnover threshold</li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - Annual compliance package for Pvt Ltd companies</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing services for all entity types</li>
                    <li><a href="/tds-return-filing-24q">TDS Return Filing</a> - Quarterly TDS compliance for companies</li>
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
                
                <p><strong>Governing Acts:</strong> Income Tax Act, 1961 (FY 2025-26) | Income Tax Act, 2025 (from FY 2026-27) | Companies Act, 2013 (statutory audit)</p>
                <p><strong>Key Sections:</strong> 115BAA (22% concessional) | 115BAB (15% manufacturing) | 115JB (MAT at 15%) | 44AB (tax audit) | 92 (transfer pricing) | 139(1) (filing obligation) | 234A/B/C (interest) | 234F (late filing fee) | 271B (tax audit penalty)</p>
                <p><strong>Forms:</strong> ITR-6 | Form 10-IC (115BAA election) | Form 10-ID (115BAB election) | Form 3CA-3CD (tax audit) | Form 3CEB (TP certification)</p>
                <p><strong>Portal:</strong> <a href="https://incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> | TRACES <a href="https://tdscpc.gov.in" target="_blank" rel="noopener">tdscpc.gov.in</a></p>
                <p><strong>Penalties:</strong></p>
                <p><strong>Late filing (Section 234F):</strong> Rs 5,000 (Rs 1,000 if income < Rs 5 lakh).</p>
                <p><strong>Late filing interest (Section 234A):</strong> 1% per month on tax due from due date to filing date.</p>
                <p><strong>Advance tax default (Section 234B):</strong> 1% per month if advance tax < 90% of assessed tax.</p>
                <p><strong>Tax audit penalty (Section 271B):</strong> 0.5% of turnover or Rs 1,50,000, whichever is less.</p>
                <p><strong>TP penalty (Section 271G):</strong> 2% of international transaction value for non-maintenance of documentation.</p>
                <p><strong>Haryana State Context:</strong> Haryana does not levy Professional Tax or state corporate tax. ITR-6 under the Income Tax Act is the sole direct tax return for Gurugram companies. Cross-verification between ITR-6, ROC filings (AOC-4), and GST returns (GSTR-9) is now automated - ensuring consistency across all three is essential.</p>

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
                    <h2 class="faq-expanded__title">FAQs - ITR for Companies in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about company ITR-6 filing, tax regime selection, MAT, and compliance deadlines for Gurugram companies.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Gurugram', 'enquiryService' => 'ITR for Companies in Gurugram'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should a Gurugram company file?</h3>
                        <div class="faq-expanded__a"><p>All companies registered under the Companies Act (Pvt Ltd, OPC, Public Ltd, Section 8) file ITR-6. The only exception is companies claiming Section 11 exemption for charitable/religious income, which file ITR-7. LLPs and partnership firms file ITR-5, not ITR-6. Patron Accounting's Gurugram office files ITR-6 for all company types.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for company ITR in 2026?</h3>
                        <div class="faq-expanded__a"><p>For AY 2026-27: companies subject to audit (which includes virtually all companies) must file by 30 September 2026. Companies with transfer pricing obligations file by 30 November 2026. The tax audit report (Form 3CA-3CD) must also be filed by 30 September. Patron's Gurugram team completes filing by 25 September.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the cost of company ITR-6 filing in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Professional fees for ITR-6 filing in Gurugram start from Rs 10,000 for standard filings up to Rs 1,00,000 for MNC subsidiaries with transfer pricing. ITR-6 with tax audit starts from Rs 25,000. Dormant company nil ITR-6 starts from Rs 5,000. Government filing fees are nil.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Should my Gurugram company opt for Section 115BAA?</h3>
                        <div class="faq-expanded__a"><p>Section 115BAA (effective 25.17%) is beneficial for companies that do not rely on deductions like Section 80-IAC, 80-JJAA, additional depreciation, or SEZ benefits. It is irrevocable once elected by filing Form 10-IC. Gurugram startups with DPIIT registration should evaluate 80-IAC vs 115BAA before deciding. Patron Accounting provides a detailed cost-benefit analysis.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a dormant Gurugram company file nil ITR-6?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every company must file ITR-6 annually regardless of activity. A dormant company with nil turnover and nil profit files a nil ITR-6 with zero income, zero tax, and basic balance sheet disclosures. Non-filing attracts Rs 5,000 late fee under Section 234F and may trigger ROC compliance issues.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is MAT applicable if my company opts for 115BAA?</h3>
                        <div class="faq-expanded__a"><p>No. Companies that elect Section 115BAA or Section 115BAB are exempt from Minimum Alternate Tax (MAT) under Section 115JB. However, any accumulated MAT credits from prior years when the company was on the standard regime become permanently unusable. This is a significant financial consideration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What happens if a Gurugram company does not file ITR-6?</h3>
                        <div class="faq-expanded__a"><p>Non-filing triggers late fee under Section 234F (Rs 5,000), interest under Section 234A (1% per month on unpaid tax), loss carry-forward forfeiture, potential prosecution under Section 276CC for wilful default, and cross-verification alerts between the Income Tax Department and MCA. Directors of non-compliant companies face scrutiny during personal ITR processing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is statutory audit needed before filing ITR-6?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every company under the Companies Act, 2013 must get its accounts audited by a qualified Chartered Accountant. The audited financial statements form the basis of the ITR-6 computation. The statutory audit must be completed before the ITR filing deadline (30 September for most companies). Tax audit under Section 44AB is additionally required for companies exceeding the turnover threshold.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Company ka ITR form kaun sa hai?</strong> Sab companies ITR-6 file karti hain. LLP aur partnership firm ITR-5 file karti hain.</p>
                <p><strong>Company ITR ki due date kya hai?</strong> 30 September 2026 (audit cases). Transfer pricing wali companies ke liye 30 November 2026.</p>
                <p><strong>115BAA se tax kitna kam hota hai?</strong> Standard 30% ke jagah 22% + 10% surcharge + 4% cess = effective 25.17%. Lekin deductions nahi mil sakti.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Start Company ITR Preparation Now - 30 September 2026 Deadline</h2>
            <div class="content-text">
                
                <p>CBDT has notified AY 2026-27 ITR forms. The company ITR-6 filing deadline is 30 September 2026. Statutory and tax audits must be completed before this date. The 115BAA/115BAB regime election via Form 10-IC/10-ID is irrevocable - get professional analysis before deciding. Late filing costs Rs 5,000 + interest + loss carry-forward forfeiture. DSC must be active and registered. GST-ITR turnover reconciliation is cross-verified automatically. Advance tax Q1 (15 June) is approaching.</p>
                <p><strong>Start preparation now. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20company%20ITR-6%20filing%20in%20Gurugram." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Company ITR-6 Filing in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">ITR-6 filing for companies in Gurugram is a comprehensive annual compliance exercise requiring statutory audit, tax regime election, MAT computation, advance tax reconciliation, and DSC-authenticated submission. From IT companies in DLF Cyber City choosing Section 115BAA to manufacturing firms in IMT Manesar evaluating Section 115BAB, and startups on Sohna Road weighing Section 80-IAC against concessional rates, the tax regime decision is the most impactful choice a Gurugram company makes each year.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road provides CA-assisted ITR-6 filing including tax regime advisory, statutory and tax audit coordination, transfer pricing documentation, MAT analysis, advance tax computation, and post-filing compliance management.</p>
                <p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted corporate tax compliance partner for companies across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20company%20ITR-6%20filing%20in%20Gurugram.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Company%20ITR-6%20Filing%20Gurugram&body=Hi%2C%20I%20need%20help%20with%20company%20ITR-6%20filing%20in%20Gurugram." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ITR for Companies - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert company ITR-6 filing services across major Indian cities</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">City-Wise Company ITR Filing</div>
                <div class="pa-block-sub">Select your city for localised company ITR-6 services</div>
                <div class="pa-city-grid">
                    <a href="/itr-for-companies/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-companies/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-companies/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Gurugram</div>
                <div class="pa-block-sub">End-to-end corporate compliance support in Gurugram</div>
                <div class="pa-cross-grid">
                    <a href="/statutory-audit/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/private-limited-company-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Compliance</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/tax-audit/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit Service</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/tds-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a>
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
            <p>This page on ITR for Companies in Gurugram is reviewed quarterly by our CA team for accuracy. Corporate tax rates, ITR-6 form rules, and regime election provisions are verified against the latest Finance Act and CBDT notifications. The information reflects FY 2025-26 (AY 2026-27) rules.</p>
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
