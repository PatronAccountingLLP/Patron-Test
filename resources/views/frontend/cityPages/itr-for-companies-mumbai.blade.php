
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
    <title>ITR Filing for Companies Mumbai - ITR-6, MAT & AMT</title>
    <meta name="description" content="CA-assisted ITR-6 filing for companies in Mumbai. Pvt Ltd, public, OPC, MNC. Section 115BAA, MAT, transfer pricing, tax audit. Call +91 945 945 6700.">
    <link rel="canonical" href="/itr-for-companies/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR Filing for Companies Mumbai - ITR-6, MAT & AMT">
    <meta property="og:description" content="CA-assisted ITR-6 filing for companies in Mumbai. Pvt Ltd, public, OPC, MNC. Section 115BAA, MAT, transfer pricing, tax audit. Call +91 945 945 6700.">
    <meta property="og:url" content="/itr-for-companies/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR Filing for Companies Mumbai - ITR-6, MAT & AMT">
    <meta name="twitter:description" content="CA-assisted ITR-6 filing for companies in Mumbai. Pvt Ltd, public, OPC, MNC. Section 115BAA, MAT, transfer pricing, tax audit. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR for Companies in Mumbai",
      "description": "CA-assisted ITR-6 filing for companies in Mumbai. Pvt Ltd, public, OPC, MNC. Section 115BAA, MAT, transfer pricing, tax audit. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/itr-for-companies/mumbai",
      "serviceType": "ITR for Companies in Mumbai",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
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
          "name": "ITR for Companies: Expert CA Filing",
          "item": "https://www.patronaccounting.com/itr-for-companies"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ITR for Companies in Mumbai",
          "item": "https://www.patronaccounting.com/itr-for-companies/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which IT office handles company ITR in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-6 is filed electronically on incometax.gov.in and processed by CPC Bengaluru. The jurisdictional Assessing Officer (based on company PAN zone) handles scrutiny and assessment. For transfer pricing cases, the Commissioner (International Tax) Mumbai handles assessment. Tax audit reports are uploaded on the same portal. No physical filing is accepted for companies. Patron files ITR-6 digitally for all Mumbai company clients."
          }
        },
        {
          "@type": "Question",
          "name": "What is the due date for company ITR-6 filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For companies requiring audit (virtually all companies): 31 October. For companies with international transactions requiring transfer pricing report (Form 3CEB): 30 November. Tax audit report must be uploaded by 30 September. Late filing attracts Rs 5,000 fee (Section 234F) plus 1% per month interest on unpaid tax (Section 234A). Belated return can be filed until 31 December."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 115BAA and should my company opt for it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 115BAA offers a concessional 22% tax rate (25.17% effective) for domestic companies that forgo all exemptions and deductions (except depreciation). Companies must file Form 10-IC before the ITR due date. The election is irrevocable. For Mumbai Pvt Ltd companies without significant exemptions (80IA, 10AA, additional depreciation), 115BAA typically results in lower tax. Patron models both scenarios before recommending."
          }
        },
        {
          "@type": "Question",
          "name": "Is tax audit mandatory for all companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. All companies registered under the Companies Act must have their accounts audited (statutory audit). The statutory audit report in Form 3CA-3CD satisfies the tax audit requirement under Section 44AB. The report must be uploaded on the income tax portal by 30 September. Patron coordinates both statutory and tax audit for Mumbai companies."
          }
        },
        {
          "@type": "Question",
          "name": "What is MAT and when does it apply?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Minimum Alternate Tax (MAT) under Section 115JB applies when a company's regular tax liability is less than 15% of its book profit. The company pays the higher of regular tax or MAT. The excess MAT paid becomes credit carry-forwardable for 15 years. Common for Mumbai holding companies and investment vehicles with high book profits but low taxable income."
          }
        },
        {
          "@type": "Question",
          "name": "Can a loss-making Mumbai company skip ITR-6 filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Every company must file ITR-6 regardless of profit or loss. Filing preserves business loss carry-forward (8 years) and unabsorbed depreciation (indefinitely). For Powai startups with accumulated losses, missing one year permanently forfeits that year's loss carry-forward. ROC compliance (AOC-4, MGT-7) also requires the same audited financials."
          }
        },
        {
          "@type": "Question",
          "name": "Can a company file ITR-6 without DSC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Companies must file ITR-6 using a Digital Signature Certificate only. Unlike individuals who can use Aadhaar OTP or EVC, companies have no alternative verification method. A valid Class 2 or 3 DSC of the authorised signatory must be registered on the income tax portal. Patron ensures DSC registration and validity before filing season. Quick Answers Company ka ITR kab file karna hota hai? 31 October (audit cases – virtually all companies). 30 November (transfer pricing cases – MNC subsidiaries). Tax audit report 30 September tak upload karna hota hai. Late fee Rs 5,000. Kaunsa form use hota hai company ke liye? ITR-6. DSC se file karna mandatory hai. Physical filing allowed nahi hai. Section 11 charitable companies ITR-7 file karti hain. 115BAA kya hai aur kab opt kare? 22% concessional rate (25.17% effective). Form 10-IC file karo. Saare exemptions chhodne padte hain. Irrevocable hai. Agar significant exemptions claim karne hain toh default 30% better ho sakta hai."
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
                        ITR for Companies in Mumbai: ITR-6 Filing with Tax Audit, MAT, and Corporate Tax Compliance
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">24 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form:</span> ITR-6 for all companies (except Section 11 charitable trusts) &ndash; DSC mandatory</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Corporate Tax Rates:</span> 22% (Section 115BAA) | 25% (Section 115BAB new manufacturing) | 30% (default)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>MAT:</span> 15% under Section 115JB (if regular tax &lt; MAT) &ndash; credit carry-forward 15 years</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> 31 October (audit) | 30 November (transfer pricing) | Tax audit by 30 September</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office at Marine Lines &ndash; 10,000+ businesses served with 4.9&#9733; Google rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20company%20ITR-6%20filing%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - ITR for Companies',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'itr-for-companies/mumbai', 'label' => 'ITR for Companies in Mumbai', 'selected' => true, 'disabled' => false],
                            ['value' => 'private-limited-company-registration/mumbai', 'label' => 'Pvt Ltd Registration in Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return/mumbai', 'label' => 'Income Tax Return Filing in Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration/mumbai', 'label' => 'GST Registration in Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'startup-registration/mumbai', 'label' => 'Startup Registration in Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-registration/mumbai', 'label' => 'Trademark Registration in Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'payroll-services/mumbai', 'label' => 'Payroll Services in Mumbai', 'selected' => false, 'disabled' => false],
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
        
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get your company ITR-6 filed by a CA team that handles Pvt Ltd, MNC, startup, and manufacturing companies.</p>
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
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Tax Rates</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for Companies in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Companies Services at a Glance</strong></p>
                    <p>Every company registered under the Companies Act in Mumbai must file ITR-6 annually on the income tax e-filing portal using a Digital Signature Certificate (DSC). Mumbai hosts India's highest concentration of registered companies &ndash; from BKC multinational subsidiaries with transfer pricing obligations to Powai startup Pvt Ltd companies with accumulated losses, from Andheri MIDC manufacturing companies claiming Section 115BAB concessional rates to Nariman Point holding companies managing investment income. ITR-6 is the most comprehensive ITR form, requiring detailed financial statements, tax computation, and multiple schedules covering every income head.</p>
                </div>
                <p>Mumbai's corporate landscape is extraordinarily diverse. BKC houses India headquarters of global banks, consulting firms, and technology companies filing ITR-6 with Schedule TP (transfer pricing) and Form 3CEB for international transactions. Powai and Andheri are home to thousands of startup Pvt Ltd companies &ndash; many loss-making in early years but needing ITR-6 filing to carry forward losses for investor due diligence. Nariman Point and Fort host holding companies, NBFCs with complex income streams. Andheri MIDC and Thane-Belapur house manufacturing companies claiming Section 115BAB rates. Learn more about <a href="/itr-for-companies">ITR for Companies across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines provides complete ITR-6 filing for all company types &ndash; from financial statement preparation and tax computation to statutory and tax audit coordination, MAT computation, transfer pricing compliance, advance tax planning, and e-filing with DSC on the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">income tax portal</a>.</p>
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
                <h2 class="section-title">What Is ITR-6 for Companies?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ITR-6 is the income tax return form prescribed for all companies registered under the Companies Act, 2013 (or the earlier Companies Act, 1956), except companies claiming exemption under Section 11 (income from property held for charitable or religious purposes, which file ITR-7).</p>
                    <p>ITR-6 is the most comprehensive ITR form in the Indian tax system. It requires detailed disclosure of: Part A-BS (Balance Sheet as per Ind AS or Schedule III), Part A-P&amp;L (Profit and Loss Account), Part A-Manufacturing/Trading Account, Part B-TI (Total Income computation), Part B-TTI (Tax payable computation), and over 30 schedules covering depreciation (Schedule DEP), capital gains (Schedule CG), international transactions (Schedule TP), MAT computation (Schedule MAT), brought-forward losses (Schedule CFL), assets/liabilities (Schedule AL), shareholding (Schedule SH), and more.</p>
                    <p>For Mumbai companies, ITR-6 preparation involves coordinating multiple compliance streams. The statutory audit produces audited financials that feed into Part A-BS and Part A-P&amp;L. The tax audit produces Form 3CA-3CD. The transfer pricing audit produces Form 3CEB. The ROC annual filing (AOC-4) uses the same audited financials. Patron integrates all these compliance streams into a unified ITR-6 preparation for Mumbai companies. <a href="/private-limited-company-compliance">Private Limited Company Compliance</a> and <a href="/statutory-audit">Statutory Audit</a> are closely linked services.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Companies:</strong></p>
                    <ul>
                        <li><strong>ITR-6:</strong> Income tax return for all companies except Section 11 charitable trusts &ndash; filed electronically with DSC only</li>
                        <li><strong>Section 115BAA:</strong> Concessional 22% corporate tax (25.17% effective) &ndash; forgo all exemptions, Form 10-IC, irrevocable</li>
                        <li><strong>Section 115BAB:</strong> 15% rate (17.16% effective) for new manufacturing companies incorporated after 01.10.2019</li>
                        <li><strong>MAT (Section 115JB):</strong> Minimum Alternate Tax at 15% of book profit &ndash; credit carry-forward for 15 years</li>
                        <li><strong>Form 3CA-3CD:</strong> Tax audit report for companies audited under Companies Act</li>
                        <li><strong>Form 3CEB:</strong> Transfer pricing report for international/specified domestic transactions</li>
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
                            <!-- APL-05 tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">APL-05</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Companies</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA-Managed</span>
                        <strong>Company ITR-6 Filing</strong>
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
            <h2 class="section-title">Which Mumbai Companies Must File ITR-6?</h2>
            <div class="content-text">
                
                <p><strong>MNC subsidiaries at BKC and Nariman Point</strong> &ndash; Indian subsidiaries of global corporations filing ITR-6 with Schedule TP (transfer pricing), Form 3CEB, and international transaction disclosures. Due date: 30 November for TP cases. The most complex ITR-6 filings in Mumbai.</p>
                <p><strong>Startup Pvt Ltd companies at Powai, Andheri, and Lower Parel</strong> &ndash; Angel/VC funded startups. Many loss-making in early years but needing ITR-6 to carry forward losses (8 years) and unabsorbed depreciation (indefinitely). Section 79 restricts loss carry-forward if shareholding changes by more than 49% (relaxed for eligible startups). <a href="/private-limited-company-compliance">Pvt Ltd Company Compliance</a> is essential alongside ITR-6.</p>
                <p><strong>Manufacturing companies at Andheri MIDC and Thane-Belapur</strong> &ndash; Companies claiming Section 115BAB (15% concessional rate) for new manufacturing. Depreciation on plant/machinery, R&amp;D deduction under Section 35, and employment generation deduction are key ITR-6 considerations.</p>
                <p><strong>Holding and investment companies at Nariman Point and Fort</strong> &ndash; Companies with income from dividends (taxable post-2020), capital gains, and interest. MAT computation under Section 115JB is often the binding constraint.</p>
                <p><strong>NBFCs and fintech at BKC and Lower Parel</strong> &ndash; Complex revenue recognition, provisioning, NPA treatment. RBI guidelines may differ from IT Act treatment. NPA provisioning under Section 36(1)(viia).</p>
                <p><strong>Listed companies (BSE/NSE headquartered)</strong> &ndash; ITR-6 with additional listed-entity disclosures. Buyback tax treatment (post October 2024). Investor relations require timely filing.</p>
                <p><strong>One Person Companies (OPCs)</strong> &ndash; Solo-founder companies filing ITR-6 (not ITR-3/4). Same requirements as Pvt Ltd but simpler financials.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company ITR-6 Filing Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Financial Statement Preparation</td><td>Balance Sheet and P&amp;L in Ind AS or Schedule III format. Tally/Zoho integration for startups; finance team coordination for BKC corporates</td></tr>
                        <tr><td>Tax Computation &amp; Regime Optimisation</td><td>Computing tax under 115BAA (22%), 115BAB (15%), and default (30%). Recommending lowest effective rate for each Mumbai company</td></tr>
                        <tr><td>MAT Computation (Section 115JB)</td><td>Book profit computation, MAT vs regular tax comparison, MAT credit tracking and carry-forward for 15 years</td></tr>
                        <tr><td>Statutory &amp; Tax Audit Coordination</td><td>Both audits produce reports feeding into ITR-6. Ensuring data consistency across statutory audit (AOC-4) and tax audit (Form 3CA-3CD)</td></tr>
                        <tr><td>Transfer Pricing (Form 3CEB)</td><td>TP documentation, Form 3CEB preparation, Schedule TP in ITR-6, and assessment support for BKC MNC subsidiaries</td></tr>
                        <tr><td>Advance Tax Planning</td><td>Quarterly computation (15 Jun, 15 Sep, 15 Dec, 15 Mar) for fluctuating Mumbai company revenue. Section 234B/234C interest minimisation</td></tr>
                        <tr><td>Loss Carry-Forward &amp; Set-Off</td><td>Business loss (8 years), unabsorbed depreciation (indefinitely). Section 79 shareholding verification for Powai startup funding rounds</td></tr>
                        <tr><td>ROC-ITR Dual Compliance</td><td>Same audited financials for both AOC-4 (ROC) and ITR-6 (IT). Ensuring turnover, profit, and BS figures match across filings</td></tr>

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
            <h2 class="section-title">Company ITR-6 Filing Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's Mumbai team follows a structured 6-step process. ITR-6 is filed exclusively online with DSC. Our Marine Lines office handles all filings digitally.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Finalise Audited Financial Statements</h3><p class="step-description">Complete the statutory audit and obtain the auditor's report. Prepare Balance Sheet, P&amp;L, Cash Flow Statement, and Notes in Ind AS or Schedule III format. For Powai startups, Patron prepares financials within 30 days of year-end. For BKC corporates, Patron coordinates with the in-house finance team.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit completed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Financials signed</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="45" x2="80" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="85" cy="60" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M79 60l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Statements Ready</span><span class="step-number-large">01</span></div></div>
</div><div class="step-card">
    <div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Upload Tax Audit Report by 30 September</h3><p class="step-description">The statutory auditor prepares Form 3CA-3CD. Upload on income tax portal by 30 September. For companies with transfer pricing, Form 3CEB uploaded by 31 October. Patron coordinates the audit timeline to ensure both reports are uploaded within deadline.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 3CA-3CD uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3CEB if applicable</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><rect x="35" y="40" width="40" height="8" rx="3" fill="#14365F" opacity="0.15"/><path d="M75 55l-5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Audit Uploaded</span><span class="step-number-large">02</span></div></div>
</div><div class="step-card">
    <div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compute Tax Under Optimal Regime</h3><p class="step-description">Compute taxable income after all adjustments. Apply chosen rate: 115BAA (25.17% effective), 115BAB (17.16%), or default (30%+). Compute MAT under Section 115JB. Pay higher of regular tax or MAT. Patron computes under all three regime options for each Mumbai company.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3 regimes modelled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MAT computed</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="42" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="60" cy="42" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="80" cy="42" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><path d="M75 42l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Tax Optimised</span><span class="step-number-large">03</span></div></div>
</div><div class="step-card">
    <div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Reconcile TDS/TCS Credits and Advance Tax</h3><p class="step-description">Download Form 26AS and AIS from portal. Reconcile TDS/TCS credits with company records. Verify 4 quarterly advance tax deposits. Compute net tax payable or refund. For BKC companies with TDS from 50-100 clients, Patron reconciles every credit line.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>26AS reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Advance tax verified</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 22v20l14 8" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/><circle cx="60" cy="42" r="3" fill="#14365F"/><circle cx="95" cy="20" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M89 20l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Credits Matched</span><span class="step-number-large">04</span></div></div>
</div><div class="step-card">
    <div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Prepare ITR-6 Schedules and File with DSC</h3><p class="step-description">Populate all 30+ schedules: Part A-BS, Part A-P&amp;L, Schedule BP, DEP, CG, OS, MAT, CFL, SH, AL, TP (if applicable). Validate using offline utility. File electronically with company's DSC. Patron files by 15 October (audit) or 15 November (TP) for Mumbai companies.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>30+ schedules populated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC signed and filed</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="18" y1="25" x2="48" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="73" y1="25" x2="103" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">ITR-6 Filed</span><span class="step-number-large">05</span></div></div>
</div><div class="step-card">
    <div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Monitor CPC Processing</h3><p class="step-description">ITR-6 filed with DSC is auto-verified. CPC Bengaluru processes and issues intimation under Section 143(1). If demand notice is issued (MAT credit, TDS mismatch, depreciation disallowance), respond within 30 days. Patron provides scrutiny representation for Mumbai companies.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auto-verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CPC intimation handled</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Company ITR-6 in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Company PAN and DSC:</strong> Company PAN registered with IT Department. Valid Class 2/3 DSC of authorised signatory (director/CS)</li>
                    <li><strong>Audited Financial Statements:</strong> Balance Sheet, P&amp;L, Cash Flow, Notes per Ind AS or Schedule III, signed by Board and statutory auditor</li>
                    <li><strong>Tax Audit Report:</strong> Form 3CA-3CD signed by statutory/tax auditor, uploaded on income tax portal</li>
                    <li><strong>Transfer Pricing Report (if applicable):</strong> Form 3CEB with transaction-wise international/specified domestic transaction details</li>
                    <li><strong>TDS/TCS Certificates:</strong> Form 16A from all TDS-deducting clients. Form 26AS/AIS for credit reconciliation</li>
                    <li><strong>Advance Tax Challans:</strong> Quarterly payment receipts with CIN and BSR code</li>
                    <li><strong>Board Resolutions:</strong> For tax regime election (115BAA/115BAB), dividend declaration, and ITR signing authority</li>
                    <li><strong>Form 10-IC/10-ID:</strong> For Section 115BAA (Form 10-IC) or 115BAB (Form 10-ID) opt-in, filed before ITR due date</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> BKC MNC subsidiaries with related-party transactions exceeding Rs 1 crore must file Form 3CEB and maintain TP documentation. The TP study should use the most appropriate method (CUP, TNMM, PSM) based on comparable data. Patron prepares TP documentation and Form 3CEB for Mumbai companies with international transactions.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Company ITR-6 Filing in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Tax Regime Selection (115BAA vs 115BAB vs Default)</td><td>Irrevocable choice between three regimes. 115BAA forfeits all exemptions. Startups with losses may benefit from default rate initially</td><td>Three-scenario tax modelling for each company; regime recommendation with break-even analysis</td></tr>
                        <tr><td>MAT Credit Tracking</td><td>Nariman Point holding companies accumulate years of MAT credits. Multi-year tracking and Schedule MAT accuracy critical</td><td>Multi-year MAT credit register; correct Schedule MAT in ITR-6; CPC credit verification</td></tr>
                        <tr><td>Transfer Pricing Scrutiny (BKC MNCs)</td><td>Royalties, management fees, intercompany loans commonly challenged by Commissioner (International Tax) Mumbai</td><td>Comprehensive TP documentation, Form 3CEB, Schedule TP preparation, and assessment representation</td></tr>
                        <tr><td>Loss-Making Startup Compliance</td><td>Section 79 restricts loss carry-forward if &gt;49% shareholding changes during fundraising. Missing one year forfeits losses permanently</td><td>Section 79 shareholding analysis; startup proviso application; annual ITR-6 even when loss-making</td></tr>
                        <tr><td>Ind AS vs Schedule III Format</td><td>Companies meeting Ind AS thresholds must use Ind AS financials. ITR-6 has separate Part A-BS sections. Wrong format causes fundamental errors</td><td>Correct accounting standard determination; Ind AS/Schedule III aligned ITR-6 preparation</td></tr>

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
            <h2 class="section-title">Company ITR Filing Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-6 Filing (Government)</td><td>Nil &ndash; no fee on incometax.gov.in</td></tr>
                        <tr><td>Corporate Tax (Section 115BAA)</td><td>25.17% effective (22% + 10% surcharge + 4% cess)</td></tr>
                        <tr><td>Corporate Tax (Section 115BAB)</td><td>17.16% effective (15% + 10% surcharge + 4% cess)</td></tr>
                        <tr><td>Corporate Tax (Default, turnover &lt; Rs 400 cr)</td><td>~26% effective (25% + surcharge + cess)</td></tr>
                        <tr><td>MAT (Section 115JB)</td><td>15% of book profit (~15.6% effective)</td></tr>
                        <tr><td>Late Fee (Section 234F)</td><td>Rs 5,000</td></tr>
                        <tr><td>Patron Fee &ndash; Pvt Ltd/OPC ITR-6</td><td>Starting Rs 10,000</td></tr>
                        <tr><td>Patron Fee &ndash; Company ITR-6 with Audit</td><td>Starting Rs 15,000 (including tax audit coordination)</td></tr>
                        <tr><td>Patron Fee &ndash; MNC ITR-6 + TP</td><td>Custom quote (transfer pricing + Form 3CEB + ITR-6)</td></tr>
                        <tr><td>Patron &ndash; Accounting + Audit + ITR Bundle</td><td>Starting Rs 15,000/month (year-round books + audit + ITR-6)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Companies consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20company%20ITR-6%20filing%20in%20Mumbai.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company ITR Filing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Advance Tax &ndash; Q1 (15%)</td><td>15 June</td></tr>
                        <tr><td>Advance Tax &ndash; Q2 (45%)</td><td>15 September</td></tr>
                        <tr><td>Advance Tax &ndash; Q3 (75%)</td><td>15 December</td></tr>
                        <tr><td>Advance Tax &ndash; Q4 (100%)</td><td>15 March</td></tr>
                        <tr><td>Tax Audit Report (Form 3CA-3CD)</td><td>30 September &ndash; mandatory for all companies</td></tr>
                        <tr><td>TP Report (Form 3CEB)</td><td>31 October &ndash; MNC subsidiaries with international transactions</td></tr>
                        <tr><td>ITR-6 Filing (Audit Cases)</td><td>31 October &ndash; most Mumbai companies</td></tr>
                        <tr><td>ITR-6 Filing (Transfer Pricing)</td><td>30 November &ndash; MNC subsidiaries with Form 3CEB</td></tr>
                        <tr><td>Form 10-IC/10-ID (Regime Election)</td><td>Before ITR due date &ndash; irrevocable</td></tr>
                        <tr><td>Belated/Revised Return</td><td>31 December</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Patron files 15 days before each statutory deadline</strong> for Mumbai companies, providing buffer for portal issues, client review, and last-minute adjustments.</p>

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
            <h2 class="section-title">Why Choose Patron for Company ITR in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Mumbai Office at Marine Lines</h3><p class="feature-text">Walk-in for company tax computation, regime selection, and ITR-6 filing. Central location for BKC MNCs, Powai startups, Nariman Point holding companies, MIDC manufacturers.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">All Company Types Covered</h3><p class="feature-text">ITR-6 for Pvt Ltd, public, OPC, Section 8, foreign companies, NBFCs. From Rs 10 lakh startup to Rs 500 crore MNC subsidiary &ndash; full spectrum coverage.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Integrated Compliance</h3><p class="feature-text">Accounting + statutory audit + tax audit + ROC filing + ITR-6 as one seamless workflow. Data flows consistently, eliminating discrepancies that trigger scrutiny.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Transfer Pricing &amp; International Tax</h3><p class="feature-text">TP documentation, Form 3CEB, Schedule TP with ALP determination. Assessment proceedings and MAP assistance for BKC MNC subsidiaries.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Mumbai Companies</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Patron files ITR-6 for our three group companies in Mumbai. The statutory-tax audit-ROC-ITR integration ensures zero data discrepancies across all filings.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; CFO, Manufacturing Group, MIDC</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving companies with ITR-6 and corporate tax compliance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Corporate Tax Rate Comparison for Mumbai Companies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Regime</th><th>Section</th><th>Effective Rate</th><th>Best For (Mumbai)</th></tr></thead>
                    <tbody>
                        <tr><td>Concessional (No Exemptions)</td><td>115BAA</td><td>25.17% (22% + surcharge + cess)</td><td>Powai startups (profitable), BKC services companies with minimal exemptions</td></tr>
                        <tr><td>New Manufacturing</td><td>115BAB</td><td>17.16% (15% + surcharge + cess)</td><td>MIDC/Thane new manufacturing units incorporated after 01.10.2019</td></tr>
                        <tr><td>Default (Full Exemptions)</td><td>Regular</td><td>~34.94% (30% + surcharge + cess, turnover &gt; Rs 400 cr)</td><td>Companies with significant 80IA/80IB/10AA/additional depreciation</td></tr>
                        <tr><td>Default (Small Company)</td><td>Regular</td><td>~26% (25% + surcharge + cess, turnover &lt; Rs 400 cr)</td><td>Small Mumbai Pvt Ltd with material deductions</td></tr>
                        <tr><td>MAT (Minimum Floor)</td><td>115JB</td><td>~15.6% of book profit</td><td>Nariman Point holding companies with high book profits</td></tr>

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
                
                <p>Explore related services for your company:</p>
                <ul>
                    <li><a href="/itr-for-companies">ITR for Companies (India Overview)</a> &ndash; National-level company ITR-6 filing</li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> &ndash; Annual ROC compliance for Pvt Ltd</li>
                    <li><a href="/statutory-audit">Statutory Audit Services</a> &ndash; Audit under Companies Act 2013</li>
                    <li><a href="/accounting-services">Accounting Services</a> &ndash; Year-round bookkeeping and financial reporting</li>
                    <li><a href="/roc-notice">ROC Notice</a> &ndash; Handling MCA/ROC compliance notices</li>
                    <li><a href="/tds-return-filing-24q">TDS Return Filing</a> &ndash; Quarterly TDS compliance</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a></li>
                    <li><a href="/gst-returns">GST Returns</a></li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal &amp; Compliance Framework for Company ITR</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 139(1):</strong> Due date for company ITR: 31 October (audit), 30 November (TP)</li>
                    <li><strong>Section 44AB:</strong> Tax audit mandatory for all companies under Companies Act audit mandate</li>
                    <li><strong>Section 115BAA:</strong> Concessional 22% rate (Form 10-IC, irrevocable)</li>
                    <li><strong>Section 115BAB:</strong> 15% rate for new manufacturing companies (Form 10-ID)</li>
                    <li><strong>Section 115JB:</strong> MAT at 15% of book profit; credit carry-forward 15 years</li>
                    <li><strong>Section 92E:</strong> Transfer pricing audit for international/specified domestic transactions (Form 3CEB)</li>
                    <li><strong>Section 79:</strong> Loss carry-forward restricted if &gt;49% shareholding change (startup proviso available)</li>
                    <li><strong>Section 234F:</strong> Late filing fee Rs 5,000</li>
                    <li><strong>Section 234A/234B/234C:</strong> Interest on late filing, late advance tax, and deferment</li>
                    <li><strong>ITR-6 Filing:</strong> Electronic only with DSC. No physical/EVC filing for companies</li>
                    <li><strong>CPC Bengaluru:</strong> Processes ITR-6 and issues Section 143(1) intimation</li>
                </ul>
                <p><strong>Filing Portal:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; ITR for Companies in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about ITR-6, corporate tax rates, MAT, tax audit, DSC requirements, and more for Mumbai companies.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Mumbai', 'enquiryService' => 'ITR for Companies in Mumbai'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which IT office handles company ITR in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>ITR-6 is filed electronically on incometax.gov.in and processed by CPC Bengaluru. The jurisdictional Assessing Officer (based on company PAN zone) handles scrutiny and assessment. For transfer pricing cases, the Commissioner (International Tax) Mumbai handles assessment. Tax audit reports are uploaded on the same portal. No physical filing is accepted for companies. Patron files ITR-6 digitally for all Mumbai company clients.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for company ITR-6 filing?</h3>
                        <div class="faq-expanded__a"><p>For companies requiring audit (virtually all companies): 31 October. For companies with international transactions requiring transfer pricing report (Form 3CEB): 30 November. Tax audit report must be uploaded by 30 September. Late filing attracts Rs 5,000 fee (Section 234F) plus 1% per month interest on unpaid tax (Section 234A). Belated return can be filed until 31 December.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is Section 115BAA and should my company opt for it?</h3>
                        <div class="faq-expanded__a"><p>Section 115BAA offers a concessional 22% tax rate (25.17% effective) for domestic companies that forgo all exemptions and deductions (except depreciation). Companies must file Form 10-IC before the ITR due date. The election is irrevocable. For Mumbai Pvt Ltd companies without significant exemptions (80IA, 10AA, additional depreciation), 115BAA typically results in lower tax. Patron models both scenarios before recommending.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is tax audit mandatory for all companies?</h3>
                        <div class="faq-expanded__a"><p>Yes. All companies registered under the Companies Act must have their accounts audited (statutory audit). The statutory audit report in Form 3CA-3CD satisfies the tax audit requirement under Section 44AB. The report must be uploaded on the income tax portal by 30 September. Patron coordinates both statutory and tax audit for Mumbai companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is MAT and when does it apply?</h3>
                        <div class="faq-expanded__a"><p>Minimum Alternate Tax (MAT) under Section 115JB applies when a company's regular tax liability is less than 15% of its book profit. The company pays the higher of regular tax or MAT. The excess MAT paid becomes credit carry-forwardable for 15 years. Common for Mumbai holding companies and investment vehicles with high book profits but low taxable income.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a loss-making Mumbai company skip ITR-6 filing?</h3>
                        <div class="faq-expanded__a"><p>No. Every company must file ITR-6 regardless of profit or loss. Filing preserves business loss carry-forward (8 years) and unabsorbed depreciation (indefinitely). For Powai startups with accumulated losses, missing one year permanently forfeits that year's loss carry-forward. ROC compliance (AOC-4, MGT-7) also requires the same audited financials.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a company file ITR-6 without DSC?</h3>
                        <div class="faq-expanded__a"><p>No. Companies must file ITR-6 using a Digital Signature Certificate only. Unlike individuals who can use Aadhaar OTP or EVC, companies have no alternative verification method. A valid Class 2 or 3 DSC of the authorised signatory must be registered on the income tax portal. Patron ensures DSC registration and validity before filing season.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Company ka ITR kab file karna hota hai?</strong> 31 October (audit cases &ndash; virtually all companies). 30 November (transfer pricing cases &ndash; MNC subsidiaries). Tax audit report 30 September tak upload karna hota hai. Late fee Rs 5,000.</p>
                <p><strong>Kaunsa form use hota hai company ke liye?</strong> ITR-6. DSC se file karna mandatory hai. Physical filing allowed nahi hai. Section 11 charitable companies ITR-7 file karti hain.</p>
                <p><strong>115BAA kya hai aur kab opt kare?</strong> 22% concessional rate (25.17% effective). Form 10-IC file karo. Saare exemptions chhodne padte hain. Irrevocable hai. Agar significant exemptions claim karne hain toh default 30% better ho sakta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss Company ITR-6 Deadlines</h2>
            <div class="content-text">
                
                <p>Tax audit report must be uploaded by 30 September &ndash; missing this blocks ITR-6 filing. ITR-6 is due by 31 October (30 November for TP). Late filing triggers Rs 5,000 fee, 1%/month interest, and loss carry-forward restrictions. A Powai startup with Rs 2 crore accumulated losses that misses the deadline loses the entire year's losses permanently.</p>
                <p><strong>Get your company ITR-6 filed accurately &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20company%20ITR-6%20filing%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get CA-Managed Company ITR-6 Filing in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">ITR-6 filing for companies in Mumbai spans the full corporate spectrum &ndash; from BKC MNC subsidiaries with transfer pricing to Powai startups carrying forward losses, from MIDC manufacturers claiming 115BAB rates to Nariman Point holding companies managing MAT credits, from BSE/NSE listed companies to One Person Companies.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines provides integrated company ITR-6 compliance &ndash; from year-round accounting to statutory and tax audit coordination, corporate tax regime optimisation, MAT computation, transfer pricing, advance tax planning, and e-filing with DSC.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers accurate, timely company ITR-6 filing across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20company%20ITR-6%20filing%20in%20Mumbai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Company ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting serves companies in major cities with local office presence and corporate tax expertise.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">ITR for Companies in Other Cities</div>
                        <div class="pa-block-sub">Professional company ITR-6 filing across India</div>
                        <div class="pa-city-grid">
                            <a href="/itr-for-companies/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/itr-for-companies/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/itr-for-companies/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end corporate compliance</div>
                        <div class="pa-cross-grid">
                            <a href="/private-limited-company-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/income-tax-return/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/startup-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/payroll-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Mumbai</div></div></a>
                        </div>
                    </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed quarterly for accuracy of corporate tax rates, ITR-6 schedules, and filing deadlines. Freshness Tier: 1. IT Act 2025 effective 01.04.2026.</p>
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
