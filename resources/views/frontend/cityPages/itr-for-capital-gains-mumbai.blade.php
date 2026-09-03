
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ITR for Capital Gains in Mumbai - STCG, LTCG & ITR-2</title>
    <meta name="description" content="CA-assisted ITR filing for capital gains in Mumbai. Property LTCG, share STCG, MF gains, Section 54 exemptions. Serving South Mumbai, BKC, Powai. Call +91 945 945 6700.">
    <link rel="canonical" href="/itr-for-capital-gains/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Capital Gains in Mumbai - STCG, LTCG & ITR-2">
    <meta property="og:description" content="CA-assisted ITR filing for capital gains in Mumbai. Property LTCG, share STCG, MF gains, Section 54 exemptions. Serving South Mumbai, BKC, Powai. Call +91 945 945 6700.">
    <meta property="og:url" content="/itr-for-capital-gains/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Capital Gains in Mumbai - STCG, LTCG & ITR-2">
    <meta name="twitter:description" content="CA-assisted ITR filing for capital gains in Mumbai. Property LTCG, share STCG, MF gains, Section 54 exemptions. Serving South Mumbai, BKC, Powai. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR for Capital Gains in Mumbai",
      "description": "CA-assisted ITR filing for capital gains in Mumbai. Property LTCG, share STCG, MF gains, Section 54 exemptions. Serving South Mumbai, BKC, Powai. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/itr-for-capital-gains/mumbai",
      "serviceType": "ITR for Capital Gains in Mumbai",
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
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "availability": "https://schema.org/InStock",
        "url": "https://www.patronaccounting.com/itr-for-capital-gains/mumbai",
        "price": "1"
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
          "name": "ITR for Capital Gains: CA Assisted",
          "item": "https://www.patronaccounting.com/itr-for-capital-gains"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ITR for Capital Gains in Mumbai",
          "item": "https://www.patronaccounting.com/itr-for-capital-gains/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which IT office handles capital gains ITR in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Capital gains ITR is filed electronically on incometax.gov.in and processed by CPC Bengaluru. The jurisdictional Assessing Officer (based on PAN zone) handles scrutiny for Mumbai taxpayers. Property sale TDS (Form 26QB) is filed by the buyer separately. Capital Gains Account Scheme deposits are made at specified bank branches in Mumbai (SBI, BOI, PNB). No physical filing required."
          }
        },
        {
          "@type": "Question",
          "name": "What is the LTCG tax rate on property in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For property acquired before 23 July 2024 and sold after: taxpayer can choose between 12.5% without indexation or 20% with indexation (whichever results in lower tax). For property acquired on or after 23 July 2024: 12.5% without indexation only. STCG (held less than 24 months) is taxed at slab rates. For long-held Mumbai properties (10+ years), the indexation option typically results in significantly lower tax. Patron computes both options for every eligible sale."
          }
        },
        {
          "@type": "Question",
          "name": "What exemptions can I claim on property sale capital gains?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Three key exemptions: Section 54 (reinvest LTCG in new house within 1 year before or 2 years after sale, or construct within 3 years, cap Rs 10 crore). Section 54EC (invest in NHAI/REC bonds within 6 months, cap Rs 50 lakh). Section 54F (reinvest net sale consideration of any long-term asset in new house). If reinvestment not completed before ITR due date (31 July), deposit in a Capital Gains Account Scheme at a specified bank."
          }
        },
        {
          "@type": "Question",
          "name": "Which ITR form should I use for capital gains?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-2 for individuals and HUFs with capital gains (most common). ITR-3 if you also have business/professional income. ITR-1 or ITR-4 can be used if your only capital gain is LTCG under Section 112A up to Rs 1.25 lakh. Companies use ITR-6. All forms require Schedule CG for capital gains reporting with pre/post 23 July 2024 bifurcation."
          }
        },
        {
          "@type": "Question",
          "name": "Is indexation still available for property capital gains?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only for property (land and buildings) acquired before 23 July 2024. The taxpayer can choose: 12.5% LTCG without indexation or 20% LTCG with indexation, and apply whichever results in lower tax. For property acquired on or after 23 July 2024, indexation is not available. For all other assets (shares, MF, gold), indexation has been removed from 23 July 2024 onwards."
          }
        },
        {
          "@type": "Question",
          "name": "How is capital gains on shares reported in ITR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "STCG on listed equity (STT-paid): reported in Schedule CG under Section 111A, taxed at 20%. LTCG on listed equity: reported in Schedule 112A with ISIN-wise details for each scrip. Exemption of Rs 1.25 lakh on LTCG under Section 112A. For Mumbai traders with 500+ transactions, Patron processes broker CSV exports for bulk Schedule 112A population."
          }
        },
        {
          "@type": "Question",
          "name": "Do NRIs need to file ITR for Mumbai property sale?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NRIs selling Mumbai property must file ITR-2 reporting the capital gain, claiming exemptions (Section 54/54EC/54F), and reconciling TDS (12.5% for LTCG, 30% for STCG deducted by buyer). Most NRIs have excess TDS and need ITR for refund. NRIs can obtain a lower/nil deduction certificate under Section 197 before the sale to reduce upfront TDS. Quick Answers Property bechne pe kitna tax lagta hai Mumbai mein? LTCG: 12.5% (without indexation) ya 20% (with indexation, agar property 23 July 2024 se pehle li thi). STCG (24 months se kam hold kiya): slab rate. Section 54 mein naya ghar khareed ke exemption le sakte ho (cap Rs 10 crore). Shares pe capital gains kaise report kare? STCG: Section 111A mein 20% tax. LTCG: Schedule 112A mein ISIN-wise report karo. Rs 1.25 lakh tak exemption. Broker statement se data lo. NRI ko Mumbai property bechne pe ITR file karna padta hai kya? Haan. ITR-2 file karo, TDS credit lo, Section 54/54EC exemption claim karo. Excess TDS ka refund milega. Section 197 se pehle hi TDS kam karwa sakte ho."
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
                        ITR for Capital Gains in Mumbai: Report Property, Shares, and MF Gains Correctly
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>LTCG Tax Rate:</span> 12.5% on all assets (post 23 July 2024) | Exemption Rs 1.25 lakh on listed equity (Section 112A)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>STCG Tax Rate:</span> 20% on listed equity (STT-paid) | Slab rates on other assets</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Property LTCG:</span> 12.5% without indexation OR 20% with indexation (if acquired before 23 July 2024)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Exemptions:</span> Section 54 (house to house), 54EC (bonds), 54F (any asset to house)</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Capital%20Gains%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ITR for Capital Gains',
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
    'ctaText'    => 'Get your capital gains ITR filed by a CA team that handles property, shares, MF, and ESOP taxation.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Tax Rates</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Exemptions</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for Capital Gains in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Capital Gains Services at a Glance</strong></p>
                    <p>ITR filing for capital gains in Mumbai covers income from selling capital assets &ndash; property (the most common and highest-value in Mumbai), listed and unlisted shares, mutual funds, gold, and other investments. Mumbai generates the highest capital gains tax volumes in India: the city has the highest property values per square foot, is home to BSE and NSE (India's stock exchanges), has the largest mutual fund investor base by AUM, and houses thousands of NRIs with Mumbai property portfolios. The Budget 2024 changes (effective 23 July 2024) introduced a uniform 12.5% LTCG rate, removed indexation for most assets (with an option for pre-23 July property), and raised STCG on listed equity to 20%.</p>
                </div>
                <p>Mumbai's capital gains landscape is uniquely complex. A Worli flat sold for Rs 5 crore generates LTCG that requires careful computation of the pre/post 23 July 2024 indexation option. A Dalal Street trader with 500 equity transactions needs STCG/LTCG bifurcation with Section 112A Schedule reporting. A Powai startup founder exercising ESOPs faces perquisite taxation at exercise plus capital gains at sale. An NRI selling a Bandra apartment faces 12.5% LTCG (or 20% with indexation for pre-July 2024 acquisition) plus TDS at source that must be reconciled. Learn more about <a href="/itr-for-capital-gains">ITR for Capital Gains across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines handles complete capital gains ITR filing &ndash; from asset-wise computation and Schedule CG preparation to Section 54/54EC/54F exemption claims, Capital Gains Account Scheme deposits, pre/post 23 July 2024 bifurcation, NRI property sale TDS reconciliation, and e-filing on the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">income tax portal</a> for every asset class in Mumbai.</p>
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
                <h2 class="section-title">What Are Capital Gains Under Income Tax?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Capital gains are profits arising from the transfer (sale, exchange, or relinquishment) of a capital asset, taxable under Section 45 of the Income Tax Act. Capital assets include property, shares, mutual funds, gold, bonds, and any other asset (excluding personal effects, agricultural land, and specified bonds).</p>
                    <p>Capital gains are classified based on holding period. Short-Term Capital Gains (STCG) arise when an asset is held for less than the specified period (12 months for listed equity/equity MF; 24 months for property, unlisted shares, gold, debt MF). Long-Term Capital Gains (LTCG) arise when held beyond these periods. Post Budget 2024 (effective 23 July 2024), LTCG is taxed at a uniform 12.5% across all asset classes. STCG on listed equity (STT-paid) is taxed at 20%; on other assets, at applicable slab rates.</p>
                    <p>For Mumbai, capital gains ITR filing involves three critical dimensions. First, correct classification of each asset as STCG or LTCG based on holding period. Second, application of the correct tax rate &ndash; which now depends on whether the transaction occurred before or after 23 July 2024. Third, claiming exemptions under Sections 54, 54EC, 54F where reinvestment conditions are met. The ITR forms now require Schedule CG with separate reporting for pre/post 23 July 2024 transactions.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Capital Gains:</strong></p>
                    <ul>
                        <li><strong>LTCG (Long-Term Capital Gains):</strong> Profit from sale of asset held beyond specified period &ndash; 12 months (listed equity), 24 months (property, unlisted shares, gold)</li>
                        <li><strong>STCG (Short-Term Capital Gains):</strong> Profit from sale of asset held less than the specified period</li>
                        <li><strong>Section 112A:</strong> LTCG tax on listed equity/equity MF at 12.5% with Rs 1.25 lakh annual exemption</li>
                        <li><strong>Section 54:</strong> Exemption on house property LTCG reinvested in new house (cap Rs 10 crore)</li>
                        <li><strong>Schedule CG:</strong> Mandatory capital gains schedule in ITR with pre/post 23 July 2024 bifurcation</li>
                        <li><strong>CGAS:</strong> Capital Gains Account Scheme &ndash; deposit exempt amount when reinvestment not completed before ITR due date</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Capital Gains</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA-Assisted</span>
                        <strong>Capital Gains ITR</strong>
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
            <h2 class="section-title">Who Must File Capital Gains ITR in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Property sellers across Mumbai</strong> &ndash; Anyone selling immovable property in Mumbai. Given property values (Rs 15,000&ndash;1,00,000+ per sq ft), virtually every sale generates significant capital gains. South Mumbai, BKC, Bandra, Worli, and Juhu properties yield the highest LTCG. TDS at 1% deducted by buyer (Section 194IA) for transactions above Rs 50 lakh requires ITR filing for credit reconciliation.</p>
                <p><strong>Stock market investors and traders at Dalal Street and Nariman Point</strong> &ndash; Mumbai is home to BSE and NSE. Active traders with hundreds of equity transactions must report each as STCG or LTCG. LTCG on listed equity above Rs 1.25 lakh is taxed at 12.5% (Section 112A). STCG at 20% (Section 111A). Filing <a href="/income-tax-return">Income Tax Return</a> is mandatory for all investors with capital gains.</p>
                <p><strong>Mutual fund investors across Mumbai</strong> &ndash; Mumbai has the highest MF investor base in India by AUM. Equity MF redemptions after 12 months are LTCG (12.5% above Rs 1.25 lakh). Debt MF purchased after 1 April 2023 are always treated as STCG regardless of holding period (taxed at slab rates).</p>
                <p><strong>Startup founders and ESOP holders at Powai and Andheri</strong> &ndash; Founders selling unlisted shares or employees exercising ESOPs face dual taxation: perquisite tax at exercise (Section 17(2)) and capital gains on sale. Unlisted share holding period is 24 months for LTCG.</p>
                <p><strong>NRIs selling Mumbai property</strong> &ndash; Non-resident Indians selling property in Bandra, Juhu, Powai, or South Mumbai face LTCG at 12.5% (or 20% with indexation for pre-23 July 2024 acquisition). TDS deducted by buyer at 12.5% (LTCG) or 30% (STCG for NRIs). Must file ITR to claim Section 54/54EC exemptions and TDS refund.</p>
                <p><strong>Gold and jewellery sellers at Zaveri Bazaar and Dadar</strong> &ndash; Gold held for more than 24 months qualifies for LTCG at 12.5%. Inherited gold uses cost to previous owner as acquisition cost. Mumbai's significant gold market generates frequent capital gains ITR requirements.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Capital Gains ITR Filing Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Asset-Wise CG Computation</td><td>Separate computation for property, listed equity, MF, unlisted shares, gold, bonds with correct holding period classification and tax rates</td></tr>
                        <tr><td>Pre/Post 23 July 2024 Analysis</td><td>Dual computation for assets acquired before 23 July 2024 &ndash; indexation vs non-indexation option, applying lower tax for Mumbai property sellers</td></tr>
                        <tr><td>Schedule CG &amp; 112A Preparation</td><td>Complete Schedule CG population with asset-wise details. Schedule 112A with ISIN-wise data for 500+ equity transactions from multiple brokers</td></tr>
                        <tr><td>Section 54/54EC/54F Exemptions</td><td>Exemption computation, reinvestment tracking, CGAS deposit coordination before ITR due date for Mumbai property sellers</td></tr>
                        <tr><td>NRI Property Sale ITR</td><td>Section 197 lower deduction certificate, LTCG computation with exemptions, TDS reconciliation, and refund processing for NRI Mumbai property sales</td></tr>
                        <tr><td>ESOP Exit Taxation</td><td>Dual-stage computation &ndash; perquisite tax at exercise + capital gains at sale for Powai startup founders and employees</td></tr>
                        <tr><td>Loss Set-Off &amp; Carry-Forward</td><td>Strategic loss harvesting advisory, STCL/LTCL set-off rules, and 8-year carry-forward in ITR for Mumbai investors</td></tr>
                        <tr><td>Advance Tax on Capital Gains</td><td>Quarter-wise advance tax computation and deposit for property sales and large equity gains to avoid Section 234C interest</td></tr>

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
            <h2 class="section-title">Capital Gains ITR Filing Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's Mumbai team follows a structured 6-step process for capital gains ITR. All filings are electronic on incometax.gov.in. Our Marine Lines office handles everything digitally.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Identify All Capital Gains Transactions</h3><p class="step-description">Compile a complete list of all asset sales during the FY: property (sale deed date), shares (broker statements from Zerodha, Groww, ICICI Direct), mutual funds (AMC capital gain statements), gold, bonds, and other assets. Patron consolidates statements from all platforms for Mumbai investors.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Multi-broker consolidation</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Complete asset inventory</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="45" x2="80" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="55" x2="70" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Assets Listed</span><span class="step-number-large">01</span></div></div>
</div>
<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Classify Each Transaction as STCG or LTCG</h3><p class="step-description">Apply holding periods: listed equity 12 months, property/unlisted shares 24 months, debt MF (post April 2023) always STCG. For transactions spanning 23 July 2024, determine whether pre-July or post-July rates apply based on transfer date.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Holding period verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pre/post July bifurcation</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="20" y1="28" x2="100" y2="28" stroke="#14365F" stroke-width="1"/><line x1="55" y1="28" x2="55" y2="78" stroke="#14365F" stroke-width="1"/><rect x="28" y="34" width="20" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="63" y="34" width="28" height="8" rx="2" fill="#10B981" opacity="0.3"/><text x="38" y="58" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial">STCG</text><text x="77" y="58" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial">LTCG</text></svg></div><span class="illustration-label">Classified</span><span class="step-number-large">02</span></div></div>
</div>
<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compute Capital Gains with Correct Tax Rate</h3><p class="step-description">For each transaction: compute sale consideration, deduct cost of acquisition (with indexation option for property acquired before 23 July 2024), deduct improvement costs and transfer expenses. Apply LTCG 12.5% (or 20% with indexation for pre-July property), STCG 20% (listed equity) or slab rates. Patron computes both indexation options for eligible Mumbai property.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Dual computation for property</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Lower tax applied</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="42" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="75" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><path d="M69 42l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">CG Computed</span><span class="step-number-large">03</span></div></div>
</div>
<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Claim Exemptions Under Sections 54/54EC/54F</h3><p class="step-description">If reinvesting capital gains: compute exemption under applicable section. Section 54: house to house (cap Rs 10 crore). Section 54EC: NHAI/REC bonds within 6 months (cap Rs 50 lakh). Section 54F: any long-term asset proceeds to house. If reinvestment not complete before ITR due date, deposit in Capital Gains Account Scheme.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Exemption structured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CGAS coordinated</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Exemptions Claimed</span><span class="step-number-large">04</span></div></div>
</div>
<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Prepare Schedule CG &amp; File ITR-2/ITR-3</h3><p class="step-description">Populate Schedule CG with asset-wise details: property (Section 54 computation), equity (Schedule 112A with ISIN-wise data), MF, gold, and other assets. Bifurcate pre/post 23 July 2024 transactions. File ITR-2 (without business income) or ITR-3 (with business income) on incometax.gov.in. Patron files by 15 July for Mumbai clients.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule CG populated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed before deadline</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><rect x="35" y="40" width="40" height="8" rx="3" fill="#14365F" opacity="0.15"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">ITR Filed</span><span class="step-number-large">05</span></div></div>
</div>
<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Pay Advance Tax, E-Verify &amp; Respond</h3><p class="step-description">Ensure advance tax is paid in the quarter of the capital gain event. E-verify the ITR within 30 days using Aadhaar OTP, net banking, or DSC. CPC Bengaluru processes and issues intimation under Section 143(1). If demand notice arises (common for property TDS mismatch), respond within 30 days.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Advance tax deposited</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-verified</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M50 72l10-5 10 5 10-5 10 5" stroke="#F5A623" stroke-width="2" fill="none"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Capital Gains ITR in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Property Sale:</strong> Sale deed (registered), purchase deed, stamp duty receipt, cost of improvement bills, broker commission, TDS certificate (Form 16B from buyer), reinvestment proof or CGAS deposit receipt</li>
                    <li><strong>Listed Equity:</strong> Capital gain statement from each broker (Zerodha, Groww, ICICI Direct), Form 26AS for STT and TDS credits, contract notes for significant transactions</li>
                    <li><strong>Mutual Funds:</strong> Capital gain statement from each AMC or consolidated statement from CAMS/KFintech, Form 26AS for TDS credits on debt MF</li>
                    <li><strong>Unlisted Shares / ESOPs:</strong> ESOP grant letter, exercise details, FMV report, sale agreement, share transfer documentation</li>
                    <li><strong>Gold / Jewellery:</strong> Purchase invoice or inheritance documentation, valuation report (if inherited), sale invoice</li>
                    <li><strong>Section 54/54EC/54F Proof:</strong> New property purchase deed, NHAI/REC bond certificate, CGAS passbook</li>
                    <li><strong>Form 26AS / AIS:</strong> Annual Information Statement from income tax portal for TDS/TCS credit reconciliation</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> Mumbai property transactions frequently involve multiple payment installments spanning two financial years. Capital gains are taxable in the year of transfer (registration date). If a BKC flat was agreed in FY 2024-25 but registered in FY 2025-26, the capital gain is reportable in FY 2025-26 ITR. Patron verifies registration dates and payment schedules for correct reporting.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Capital Gains ITR in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Pre/Post 23 July Indexation Decision</td><td>Long-held Mumbai properties (10-20+ years) may benefit from 20% with indexation despite higher rate; recent properties may benefit from 12.5% flat</td><td>Dual computation under both options for every eligible property; lower tax applied automatically</td></tr>
                        <tr><td>High-Volume Equity Schedule 112A</td><td>Active Dalal Street traders with 500-1,000+ transactions; broker statements sometimes have cost basis errors</td><td>Broker CSV bulk processing with contract note reconciliation before Schedule 112A population</td></tr>
                        <tr><td>NRI Property Sale TDS Mismatch</td><td>NRI sellers face TDS at 12.5%/30% without considering exemptions; excess TDS requires ITR filing for refund</td><td>Section 197 lower deduction certificate obtained before sale; ITR-2 with TDS refund processing</td></tr>
                        <tr><td>Startup ESOP Exit Dual Taxation</td><td>Perquisite tax at exercise + capital gains at sale; holding period from exercise date not grant date</td><td>Two-stage computation with exercise timing advisory for Powai startup employees</td></tr>
                        <tr><td>CGAS Deposit Before Due Date</td><td>Failure to deposit in Capital Gains Account Scheme before 31 July invalidates Section 54/54F exemption</td><td>CGAS account opening and deposit coordination before ITR due date for all Mumbai property sellers</td></tr>

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
            <h2 class="section-title">Capital Gains ITR Filing Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR Filing (Government)</td><td>Nil &ndash; no fee on incometax.gov.in</td></tr>
                        <tr><td>LTCG Tax</td><td>12.5% on all assets post 23 July 2024 (above exemption limit)</td></tr>
                        <tr><td>STCG Tax (Listed Equity)</td><td>20% (STT-paid transactions)</td></tr>
                        <tr><td>Section 112A Exemption</td><td>Rs 1.25 lakh annual exemption on listed equity/equity MF LTCG</td></tr>
                        <tr><td>Late Fee (Section 234F)</td><td>Rs 5,000 (Rs 1,000 if income &lt; Rs 5 lakh)</td></tr>
                        <tr><td>Patron Fee &ndash; Equity/MF CG + ITR</td><td>Starting Rs 3,000</td></tr>
                        <tr><td>Patron Fee &ndash; Property CG + ITR</td><td>Starting Rs 5,000 (computation + exemption + CGAS + filing)</td></tr>
                        <tr><td>Patron Fee &ndash; Multi-Asset CG + ITR</td><td>Starting Rs 7,000 (property + equity + MF combined)</td></tr>
                        <tr><td>Patron Fee &ndash; NRI Property CG</td><td>Starting Rs 10,000 (S197 certificate + LTCG + TDS refund)</td></tr>
                        <tr><td>Patron Fee &ndash; ESOP CG</td><td>Starting Rs 5,000 (dual taxation computation + filing)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Capital Gains consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Capital%20Gains%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Capital Gains Tax Rate Table (Post Budget 2024)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Listed Equity Shares</td><td>LTCG 12.5% (above Rs 1.25L) | STCG 20% | Hold: 12 months</td></tr>
                        <tr><td>Equity-Oriented MF</td><td>LTCG 12.5% (above Rs 1.25L) | STCG 20% | Hold: 12 months</td></tr>
                        <tr><td>Property (pre-23 Jul 2024)</td><td>LTCG 12.5% OR 20% with indexation | STCG slab | Hold: 24 months</td></tr>
                        <tr><td>Property (post-23 Jul 2024)</td><td>LTCG 12.5% (no indexation) | STCG slab | Hold: 24 months</td></tr>
                        <tr><td>Unlisted Shares</td><td>LTCG 12.5% | STCG slab | Hold: 24 months</td></tr>
                        <tr><td>Gold / Jewellery</td><td>LTCG 12.5% | STCG slab | Hold: 24 months</td></tr>
                        <tr><td>Debt MF (post 1 Apr 2023)</td><td>Always STCG at slab rates regardless of holding period</td></tr>
                        <tr><td>Bonds / Debentures</td><td>LTCG 12.5% | Hold: 12m (listed) / 24m (unlisted)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Key:</strong> All rates effective post 23 July 2024 (Budget 2024). Pre-July transactions use previous rates. Property acquired before 23 July 2024 has indexation option. Section 112A exemption of Rs 1.25 lakh applies only to listed equity and equity MF LTCG.</p>

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
            <h2 class="section-title">Why Choose Patron for Capital Gains ITR in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Mumbai Office at Marine Lines</h3><p class="feature-text">Walk-in for property CG computation, exemption planning, Schedule 112A preparation. Central location for South Mumbai property sellers, Dalal Street traders, BKC investors, Powai founders.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Multi-Asset CG Expertise</h3><p class="feature-text">Property (with indexation option), listed equity (500+ scrip Schedule 112A), MF, unlisted shares (ESOP dual taxation), gold, and bonds &ndash; all asset classes in one ITR.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Pre/Post 23 July Dual Computation</h3><p class="feature-text">Both indexation and non-indexation options computed for pre-July 2024 Mumbai property. Lower tax applied automatically &ndash; critical for long-held properties saving lakhs in tax.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">NRI Property Sale Specialisation</h3><p class="feature-text">Section 197 lower deduction certificates before sale, LTCG with exemption claims, ITR-2, TDS refund processing. Hundreds of NRI Mumbai property ITRs handled.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Mumbai Investors</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Patron saved me Rs 8 lakh in tax on my Worli flat sale by correctly applying the indexation option and Section 54 exemption.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; Property Seller, Mumbai</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving individuals and businesses with capital gains ITR.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Capital Gains Exemptions for Mumbai Property Sellers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Section</th><th>Exemption</th><th>Condition</th><th>Maximum</th></tr></thead>
                    <tbody>
                        <tr><td>54</td><td>LTCG on house property reinvested in new house</td><td>Purchase within 1 yr before / 2 yrs after sale OR construct within 3 yrs</td><td>Rs 10 crore (cap from Budget 2023)</td></tr>
                        <tr><td>54EC</td><td>LTCG invested in NHAI/REC bonds</td><td>Within 6 months of sale</td><td>Rs 50 lakh</td></tr>
                        <tr><td>54F</td><td>LTCG from any long-term asset reinvested in house</td><td>Purchase within 1 yr before / 2 yrs after OR construct within 3 yrs</td><td>Full net consideration</td></tr>
                        <tr><td>CGAS</td><td>Deposit in Capital Gains Account if reinvestment not complete before ITR due date</td><td>Before 31 July (ITR due date)</td><td>As per exemption claimed</td></tr>

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
                
                <p>Explore related services:</p>
                <ul>
                    <li><a href="/itr-for-capital-gains">ITR for Capital Gains (India Overview)</a> &ndash; National-level capital gains ITR filing</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> &ndash; Individual and business ITR filing across India</li>
                    <li><a href="/itr-for-business">ITR for Business</a> &ndash; Business income tax return for all entity types</li>
                    <li><a href="/accounting-services">Accounting Services</a> &ndash; Year-round bookkeeping and financial reporting</li>
                    <li><a href="/statutory-audit">Statutory Audit Services</a> &ndash; Audit under Companies Act 2013</li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a></li>
                    <li><a href="/tds-return-filing-24q">TDS Return Filing</a> &ndash; Quarterly TDS compliance</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal &amp; Compliance Framework for Capital Gains ITR</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 45:</strong> Charging section for capital gains &ndash; profits from transfer of capital assets</li>
                    <li><strong>Section 111A:</strong> STCG on listed equity/equity MF (STT-paid) &ndash; 20%</li>
                    <li><strong>Section 112:</strong> LTCG on assets other than those under 112A &ndash; 12.5%</li>
                    <li><strong>Section 112A:</strong> LTCG on listed equity/equity MF &ndash; 12.5% above Rs 1.25 lakh exemption</li>
                    <li><strong>Section 54:</strong> Exemption on house property LTCG reinvested in new house (cap Rs 10 crore)</li>
                    <li><strong>Section 54EC:</strong> Exemption for LTCG invested in NHAI/REC bonds (cap Rs 50 lakh)</li>
                    <li><strong>Section 54F:</strong> Exemption for LTCG from any asset reinvested in house property</li>
                    <li><strong>Section 50AA:</strong> Specified mutual funds (&gt;65% debt) treated as STCG regardless of holding</li>
                    <li><strong>Budget 2024 Changes (23 July 2024):</strong> Uniform 12.5% LTCG; STCG equity 20%; indexation removed (option for pre-July property)</li>
                    <li><strong>Section 194IA:</strong> TDS 1% on property sale above Rs 50 lakh (buyer deducts)</li>
                    <li><strong>Capital Gains Account Scheme 1988:</strong> Deposit in specified bank for pending reinvestment</li>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; ITR for Capital Gains in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about capital gains tax rates, exemptions, indexation, ITR forms, NRI property sales, and more for Mumbai.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Capital Gains',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which IT office handles capital gains ITR in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Capital gains ITR is filed electronically on incometax.gov.in and processed by CPC Bengaluru. The jurisdictional Assessing Officer (based on PAN zone) handles scrutiny for Mumbai taxpayers. Property sale TDS (Form 26QB) is filed by the buyer separately. Capital Gains Account Scheme deposits are made at specified bank branches in Mumbai (SBI, BOI, PNB). No physical filing required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the LTCG tax rate on property in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>For property acquired before 23 July 2024 and sold after: taxpayer can choose between 12.5% without indexation or 20% with indexation (whichever results in lower tax). For property acquired on or after 23 July 2024: 12.5% without indexation only. STCG (held less than 24 months) is taxed at slab rates. For long-held Mumbai properties (10+ years), the indexation option typically results in significantly lower tax. Patron computes both options for every eligible sale.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What exemptions can I claim on property sale capital gains?</h3>
                        <div class="faq-expanded__a"><p>Three key exemptions: Section 54 (reinvest LTCG in new house within 1 year before or 2 years after sale, or construct within 3 years, cap Rs 10 crore). Section 54EC (invest in NHAI/REC bonds within 6 months, cap Rs 50 lakh). Section 54F (reinvest net sale consideration of any long-term asset in new house). If reinvestment not completed before ITR due date (31 July), deposit in a Capital Gains Account Scheme at a specified bank.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Which ITR form should I use for capital gains?</h3>
                        <div class="faq-expanded__a"><p>ITR-2 for individuals and HUFs with capital gains (most common). ITR-3 if you also have business/professional income. ITR-1 or ITR-4 can be used if your only capital gain is LTCG under Section 112A up to Rs 1.25 lakh. Companies use ITR-6. All forms require Schedule CG for capital gains reporting with pre/post 23 July 2024 bifurcation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is indexation still available for property capital gains?</h3>
                        <div class="faq-expanded__a"><p>Only for property (land and buildings) acquired before 23 July 2024. The taxpayer can choose: 12.5% LTCG without indexation or 20% LTCG with indexation, and apply whichever results in lower tax. For property acquired on or after 23 July 2024, indexation is not available. For all other assets (shares, MF, gold), indexation has been removed from 23 July 2024 onwards.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is capital gains on shares reported in ITR?</h3>
                        <div class="faq-expanded__a"><p>STCG on listed equity (STT-paid): reported in Schedule CG under Section 111A, taxed at 20%. LTCG on listed equity: reported in Schedule 112A with ISIN-wise details for each scrip. Exemption of Rs 1.25 lakh on LTCG under Section 112A. For Mumbai traders with 500+ transactions, Patron processes broker CSV exports for bulk Schedule 112A population.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do NRIs need to file ITR for Mumbai property sale?</h3>
                        <div class="faq-expanded__a"><p>Yes. NRIs selling Mumbai property must file ITR-2 reporting the capital gain, claiming exemptions (Section 54/54EC/54F), and reconciling TDS (12.5% for LTCG, 30% for STCG deducted by buyer). Most NRIs have excess TDS and need ITR for refund. NRIs can obtain a lower/nil deduction certificate under Section 197 before the sale to reduce upfront TDS.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Property bechne pe kitna tax lagta hai Mumbai mein?</strong> LTCG: 12.5% (without indexation) ya 20% (with indexation, agar property 23 July 2024 se pehle li thi). STCG (24 months se kam hold kiya): slab rate. Section 54 mein naya ghar khareed ke exemption le sakte ho (cap Rs 10 crore).</p>
                <p><strong>Shares pe capital gains kaise report kare?</strong> STCG: Section 111A mein 20% tax. LTCG: Schedule 112A mein ISIN-wise report karo. Rs 1.25 lakh tak exemption. Broker statement se data lo.</p>
                <p><strong>NRI ko Mumbai property bechne pe ITR file karna padta hai kya?</strong> Haan. ITR-2 file karo, TDS credit lo, Section 54/54EC exemption claim karo. Excess TDS ka refund milega. Section 197 se pehle hi TDS kam karwa sakte ho.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss Your Capital Gains ITR Deadline</h2>
            <div class="content-text">
                
                <p>Capital gains ITR must be filed by 31 July (non-audit) or 31 October (audit cases). Missing the due date means: Section 54/54EC/54F exemptions may be disallowed if CGAS deposit is not made before the deadline, capital losses cannot be carried forward, and late filing fee of Rs 5,000 applies. For Mumbai property sellers with LTCG of Rs 50 lakh&ndash;5 crore, the tax impact of missing an exemption claim can be Rs 6&ndash;60 lakh.</p>
                <p><strong>Get your capital gains ITR filed correctly &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Capital%20Gains%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get CA-Assisted Capital Gains ITR Filing in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">ITR filing for capital gains in Mumbai encompasses the city's most valuable asset transactions &ndash; from multi-crore South Mumbai and BKC property sales to Dalal Street equity trading, from Powai startup ESOP exits to NRI property liquidation, from mutual fund redemptions to Zaveri Bazaar gold sales.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines provides complete capital gains ITR filing &ndash; from multi-asset computation and pre/post 23 July 2024 dual analysis to Section 54/54EC/54F exemption structuring, Capital Gains Account Scheme coordination, NRI property TDS management, and Schedule 112A bulk processing.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers accurate, tax-optimised capital gains ITR filing across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Capital%20Gains%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Capital Gains ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting serves investors and property sellers in major cities with local office presence.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">ITR for Capital Gains in Other Cities</div>
                        <div class="pa-block-sub">Professional capital gains ITR filing available across India</div>
                        <div class="pa-city-grid">
                            <a href="/itr-for-capital-gains/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/itr-for-capital-gains/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/itr-for-capital-gains/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end tax and investment compliance</div>
                        <div class="pa-cross-grid">
                            <a href="/income-tax-return/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/itr-for-business/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/private-limited-company-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/startup-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
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
            <p>This content is reviewed quarterly for accuracy of capital gains tax rates, exemptions, and ITR form requirements. Freshness Tier: 1. Budget 2024 changes effective 23 July 2024.</p>
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
