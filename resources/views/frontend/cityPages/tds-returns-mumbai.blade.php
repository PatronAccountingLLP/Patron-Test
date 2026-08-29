
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
    <title>TDS Returns in Mumbai - 24Q, 26Q, 27Q & 27EQ Guide</title>
    <meta name="description" content="CA-assisted TDS return filing in Mumbai. 24Q salary, 26Q non-salary, 27Q NRI, 27EQ TCS. TRACES corrections, Form 16/16A. Serving BKC, Powai, MIDC. Call +91 945 945 6700.">
    <link rel="canonical" href="/tds-returns/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="TDS Returns in Mumbai - 24Q, 26Q, 27Q & 27EQ Guide">
    <meta property="og:description" content="CA-assisted TDS return filing in Mumbai. 24Q salary, 26Q non-salary, 27Q NRI, 27EQ TCS. TRACES corrections, Form 16/16A. Serving BKC, Powai, MIDC. Call +91 945 945 6700.">
    <meta property="og:url" content="/tds-returns/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TDS Returns in Mumbai - 24Q, 26Q, 27Q & 27EQ Guide">
    <meta name="twitter:description" content="CA-assisted TDS return filing in Mumbai. 24Q salary, 26Q non-salary, 27Q NRI, 27EQ TCS. TRACES corrections, Form 16/16A. Serving BKC, Powai, MIDC. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "TDS Returns in Mumbai - 24Q, 26Q, 27Q & 27EQ Guide",
      "description": "CA-assisted TDS return filing in Mumbai. 24Q salary, 26Q non-salary, 27Q NRI, 27EQ TCS. TRACES corrections, Form 16/16A. Serving BKC, Powai, MIDC. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/tds-returns/mumbai",
      "serviceType": "TDS Returns in Mumbai - 24Q, 26Q, 27Q & 27EQ Guide",
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
        "url": "https://www.patronaccounting.com/tds-returns/mumbai",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "10",
          "maxPrice": "200",
          "priceCurrency": "INR"
        }
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
          "name": "Tds Returns",
          "item": "https://www.patronaccounting.com/tds-returns"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "TDS Returns in Mumbai - 24Q, 26Q, 27Q & 27EQ Guide",
          "item": "https://www.patronaccounting.com/tds-returns/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which IT office handles TDS returns in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TDS returns are filed electronically on the TIN-NSDL Protean portal and processed centrally by CPC-TDS at Vaishali Ghaziabad. No physical filing at any Mumbai IT office is required. TDS demand notices and assessments are handled by the jurisdictional Assessing Officer based on the deductor TAN zone. TRACES portal is used for corrections and certificate generation."
          }
        },
        {
          "@type": "Question",
          "name": "What are the different TDS return forms?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Four primary forms. 24Q for salary TDS Section 192. 26Q for non-salary TDS to residents Sections 193 to 194T. 27Q for payments to NRIs and foreign entities Section 195. 27EQ for Tax Collected at Source Section 206C. Additionally event-based forms include 26QB for property TDS 26QC for rent TDS by individuals and 26QD. Mumbai businesses typically file 24Q plus 26Q at minimum each quarter."
          }
        },
        {
          "@type": "Question",
          "name": "What is the due date for TDS returns?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For Forms 24Q 26Q and 27Q: Q1 April to June by 31 July, Q2 July to September by 31 October, Q3 October to December by 31 January, Q4 January to March by 31 May. For Form 27EQ TCS: Q1 by 15 July Q2 by 15 October Q3 by 15 January Q4 by 15 May. Monthly TDS deposit by 7th of following month. March TDS by 30 April."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late TDS return filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 234E late fee of Rs 200 per day from due date until filing capped at total TDS amount. Section 271H penalty of Rs 10,000 to Rs 1,00,000. Interest under Section 201(1A) at 1.5 percent per month on late deposit and 1 percent per month on non-deduction. Section 40(a)(ia) disallows 30 percent of expense if TDS not deducted or deposited."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 194T and how does it affect Mumbai firms?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 194T effective from 1 April 2025 requires partnership firms and LLPs to deduct TDS at 10 percent on salary remuneration commission bonus and interest paid to partners exceeding Rs 20,000 per year. This is a new compliance obligation for Mumbai CA firms law firms and consultancy LLPs at Fort and Marine Lines. These payments are reported in Form 26Q each quarter."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Form 16 and Form 16A?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 16 is the annual TDS certificate for salary income issued after Q4 24Q by 15 June. It has Part A from TRACES and Part B from salary computation. Form 16A is the quarterly TDS certificate for non-salary income issued after each 26Q or 27Q within 15 days of filing. Landlords consultants and contractors receive Form 16A from their payers."
          }
        },
        {
          "@type": "Question",
          "name": "Is TAN mandatory for filing TDS returns?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes TAN Tax Deduction Account Number is mandatory for all deductors filing regular TDS returns 24Q 26Q 27Q 27EQ. TAN is obtained through Form 49B on the NSDL portal. For event-based forms like 26QB and 26QC TAN is not mandatory as PAN is used instead. Every Mumbai business deducting TDS must obtain TAN within one month."
          }
        },
        {
          "@type": "Question",
          "name": "Can errors in filed TDS returns be corrected?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes correction statements are filed via the TRACES portal. Download the consolidated TDS file for the relevant quarter and form. Prepare correction using NSDL RPU with types C1 for deductor details C2 for challan corrections C3 for deductee corrections C4 for adding salary details and C5 for adding new challans or deductees. Multiple correction rounds are allowed."
          }
        }
      ]
    }
  ]
}</script>
@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column - right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) - Plan 3.1
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
           TOC NAVIGATION - Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot - Plan 3.2 */
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
                        TDS Returns Filing in Mumbai: 24Q, 26Q, 27Q, and 27EQ - Complete Quarterly Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>24Q + 26Q:</span> 24Q: Salary TDS (S.192). 26Q: Non-salary TDS to residents - rent (194I), professional fees (194J), contractor (194C), partner payments (194T)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>27Q + 27EQ:</span> 27Q: TDS on NRI/foreign payments (S.195) with DTAA treaty rates. 27EQ: TCS on scrap, timber, minerals (S.206C)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Dates:</span> Q1: 31 Jul | Q2: 31 Oct | Q3: 31 Jan | Q4: 31 May (27EQ: 15th). TDS deposit by 7th monthly. Challan 281</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalties:</span> Late fee Rs 200/day (S.234E). Penalty Rs 10K-1L (S.271H). Interest 1.5%/month late deposit. 30% expense disallowance S.40(a)(ia)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=TDS%20Returns%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20TDS%20filing.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20TDS%20return%20filing%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - TDS Returns',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'tds-returns/mumbai', 'label' => 'TDS Returns Mumbai', 'selected' => true, 'disabled' => false],
                            ['value' => 'tds-return-filing', 'label' => 'TDS Return Filing (24Q)', 'selected' => false, 'disabled' => false],
                            ['value' => 'payroll-services', 'label' => 'Payroll Services', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return', 'label' => 'Income Tax Return', 'selected' => false, 'disabled' => false],
                            ['value' => 'llp-compliance', 'label' => 'LLP Compliance', 'selected' => false, 'disabled' => false],
                            ['value' => 'accounting-services', 'label' => 'Accounting Services', 'selected' => false, 'disabled' => false],
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
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Patron handles all our TDS forms - 24Q, 26Q, and 27Q - every quarter for our BKC office. The DTAA rate application for 27Q foreign parent payments is always accurate. Form 16 and 16A generated on time every cycle. Zero demand notices in 4 years.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arjun Shah</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, MNC, BKC</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Powai IT company filing 24Q for 800 employees plus 26Q for 150 vendor payments quarterly. Patron extracts from Zoho, prepares all forms, and files within 10 days. S.194T partner TDS for our advisory LLP also handled seamlessly.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Kapoor</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">VP Finance, IT Company, Powai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">MIDC manufacturer with 24Q (salaries), 26Q (contractors), and 27EQ (TCS on scrap). Patron coordinates all three forms from one data extraction. Challan allocation across forms is always clean. No disallowance risk.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Desai</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Manufacturing, MIDC</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#6366F1;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Neha Mehta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Startup Founder, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Excellent service for company registration and compliance. The team is very responsive and handles everything end to end.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SA</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sunny Ashpal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Demandify Media</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 months ago</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>From BKC MNCs filing 24Q+26Q+27Q to Powai IT with complex CTCs to Fort firms implementing S.194T to MIDC manufacturers with TCS - Mumbai's businesses trust Patron for TDS.</p>
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
            <a href="#what-section" class="toc-btn">What Are TDS Returns</a>
            <a href="#who-section" class="toc-btn">Who Files</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Costs</a>
            <a href="#timeline-section" class="toc-btn">Due Dates</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">All TDS Forms</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TDS Returns Filing in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - TDS Returns Services at a Glance</strong></p>
                    <p>All 4 TDS forms: 24Q (salary), 26Q (non-salary), 27Q (NRI/foreign), 27EQ (TCS). Due: Q1 31 Jul, Q2 31 Oct, Q3 31 Jan, Q4 31 May. 27EQ: 15th. TDS deposit by 7th. Late fee Rs 200/day. Penalty Rs 10K-1L. 30% expense disallowance. S.194T partner TDS from FY 2025-26. DTAA treaty rates for 27Q. Mumbai = India's highest TDS volume city.</p>
                </div>
                <p>Mumbai generates the highest TDS filing volumes in India. BKC BFSI, Powai IT, BKC MNCs (foreign payments), Andheri MIDC (manufacturing + TCS), Fort/Marine Lines professional firms. Most businesses file 2-3 forms per quarter.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Form</th><th>TDS/TCS On</th><th>Due Date</th></tr></thead>
                    <tbody>
                        <tr><td>24Q</td><td>Salary (S.192)</td><td>31 Jul/Oct/Jan/May</td></tr>
                        <tr><td>26Q</td><td>Non-salary residents (194A-194T)</td><td>31 Jul/Oct/Jan/May</td></tr>
                        <tr><td>27Q</td><td>NRI/foreign (S.195, DTAA)</td><td>31 Jul/Oct/Jan/May</td></tr>
                        <tr><td>27EQ</td><td>TCS (S.206C)</td><td>15 Jul/Oct/Jan/May</td></tr>
                        <tr><td>26QB</td><td>Property purchase (S.194IA)</td><td>30 days from month-end</td></tr>
                        <tr><td>Certificates</td><td>Form 16 (annual) | Form 16A (quarterly)</td><td>15 Jun | 15 days from due</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Patron handles all four forms from Marine Lines. Related: <a href="/tds-return-filing-24q">TDS return filing (24Q/Form 16)</a>, <a href="/payroll-services">payroll services</a>, <a href="/income-tax-return">income tax return</a>, <a href="/accounting-services">accounting services</a>.</p>
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
                <h2 class="section-title">What Are TDS Returns?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>TDS returns are quarterly statements filed electronically by deductors reporting all Tax Deducted at Source and Tax Collected at Source, enabling the government to track collections and credit deductees' Form 26AS for income tax filing.</p>
                    <p>Four primary forms: 24Q (salary S.192), 26Q (non-salary 193-194T), 27Q (NRI/foreign S.195), 27EQ (TCS S.206C). Plus event-based: 26QB (property), 26QC (rent), 26QD.</p>
                    <p>Filed on TIN-NSDL/Protean. Certificates via <a href="https://tdscpc.gov.in" target="_blank" rel="noopener">TRACES</a>. Related: <a href="/tds-return-filing-24q">TDS return filing (24Q)</a>, <a href="/income-tax-return">income tax return</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for TDS Returns:</strong></p>
                    <ul>
                        <li><strong>24Q:</strong> Salary TDS (S.192). Annexure I (all quarters) + Annexure II (Q4 = full-year salary). Generates Form 16. New/Old Regime handling.</li>
                        <li><strong>26Q:</strong> Non-salary residents. Rent (194I), professional (194J), contractor (194C), commission (194H), partner (194T from FY 2025-26). Form 16A quarterly.</li>
                        <li><strong>27Q:</strong> NRI/foreign (S.195). DTAA treaty rates. Tax Residency Certificate verification. BKC MNC royalty, technical fees, ECB interest.</li>
                        <li><strong>S.194T (FY 2025-26):</strong> NEW - 10% TDS on partner salary/remuneration/commission/bonus/interest > Rs 20,000. Affects all Mumbai LLPs and firms.</li>
                        <li><strong>S.40(a)(ia):</strong> 30% expense disallowed if TDS not deducted/deposited. Rs 5 Cr contractor fees = Rs 1.5 Cr disallowance. Critical for Mumbai corporates.</li>
                        <li><strong>TRACES:</strong> tdscpc.gov.in. Form 16/16A download, C1-C5 corrections, challan verification, Form 26AS credit tracking across all forms.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TDS Returns</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>TDS</span>
                        <strong>Filed</strong>
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
            <h2 class="section-title">Which Mumbai Businesses File TDS Returns?</h2>
            <div class="content-text">
                
                <p><strong>BFSI (BKC, Nariman Point):</strong> All 4 forms. 24Q (thousands of employees), 26Q (rent, professional, contractor), 27Q (foreign parent remittances), 27EQ. Largest TDS volumes. <a href="/payroll-services">Payroll services</a>.</p>
                <p><strong>IT/ITES (Powai, Andheri):</strong> 24Q (complex CTC) + 26Q (subcontractors, freelancers, rent). NRI directors = 27Q. <a href="/tds-return-filing-24q">TDS return filing (24Q)</a>.</p>
                <p><strong>MNCs (BKC, Nariman Point):</strong> Heavy 27Q: royalty, technical fees, ECB interest to foreign parent. DTAA treaty rates critical. <a href="/accounting-services">Accounting services</a>.</p>
                <p><strong>Manufacturing (MIDC, Thane-Belapur):</strong> 24Q + 26Q (contractor, transporter) + 27EQ (TCS on scrap). <a href="/private-limited-company-compliance">Company compliance</a>.</p>
                <p><strong>Professional Firms (Fort, Marine Lines):</strong> 26Q for rent + professional fees. S.194T partner TDS from FY 2025-26. <a href="/pvt-llp-compliance">LLP compliance</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TDS Return Filing Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly TDS Computation</td><td>All sections: salary (192), interest (194A), contractor (194C), commission (194H), rent (194I), professional (194J), partner (194T), NRI (195). Each transaction mapped to correct section and rate</td></tr>
                        <tr><td>24Q Salary Returns</td><td>Quarterly with Annexure I + Q4 Annexure II. New/Old Regime. Form 16 generation. Detailed on <a href="/tds-return-filing-24q">dedicated 24Q/Form 16 page</a></td></tr>
                        <tr><td>26Q Non-Salary Returns</td><td>Resident payments: rent, professional, contractor, commission, interest, S.194T partner payments. 100-500 transactions/quarter from Tally/Zoho/QuickBooks. Form 16A generation</td></tr>
                        <tr><td>27Q NRI/Foreign Returns</td><td>S.195 payments with DTAA treaty rate application (India-US, UK, Singapore, Mauritius). Tax Residency Certificate verification. For BKC MNC royalty, technical fees, ECB interest</td></tr>
                        <tr><td>27EQ TCS Returns</td><td>Tax Collected at Source on scrap, timber, minerals, motor vehicles (S.206C). For MIDC/Thane manufacturers. Filed by 15th (earlier than TDS forms). Form 27D certificate</td></tr>
                        <tr><td>Form 16/16A Generation</td><td>Form 16 (annual, from 24Q Q4) by 15 June. Form 16A (quarterly, from 26Q/27Q) within 15 days. Bulk generation via TRACES. Distribution to all deductees</td></tr>
                        <tr><td>TRACES Corrections</td><td>C1-C5 corrections across all forms. Consolidated file download, RPU correction, FVU validation, re-upload. Multiple rounds handled. Within 5 working days</td></tr>
                        <tr><td>S.194T Implementation</td><td>NEW FY 2025-26: partner payment TDS at 10% on salary/remuneration/commission/bonus/interest > Rs 20K. For Fort/Marine Lines CA/law firms and LLPs. Captured in 26Q</td></tr>

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
            <h2 class="section-title">TDS Return Filing Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers complete TDS compliance across all four forms - from correct rate identification through monthly deposit, quarterly preparation, filing, certificate generation, to reconciliation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Deduct TDS at Correct Rate and Section</h3>
        <p class="step-description">Map every payment to correct section: salary (192), contractor (194C 1%/2%), professional (194J 10%), rent (194I 2%/10%), NRI (195 20%/DTAA), partner (194T 10%). Patron maps all payment types during initial setup for Mumbai clients.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All sections mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rates verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DTAA checked (27Q)</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DEDUCT</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Correct Section</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Correct Rate</text></svg></div>
            <span class="illustration-label">Rates Set</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Deposit TDS by 7th of Following Month</h3>
        <p class="step-description">Pay via Challan 281 on income tax portal. Consolidate all sections into single monthly deposit. Verify BSR code and CIN. March TDS by 30 April. Patron deposits by 5th - 2-day buffer for Mumbai clients.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Challan 281 paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>BSR verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All sections consolidated</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DEPOSIT</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Challan 281</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">By 7th Monthly</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">All Sections</text></svg></div>
            <span class="illustration-label">Deposited</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Prepare Quarterly Returns Using NSDL RPU</h3>
        <p class="step-description">Compile data for each applicable form (24Q/26Q/27Q/27EQ). Use NSDL RPU and validate with FVU. Single data extraction for all forms within 7 days of quarter end. 27Q: DTAA rates verified. 26Q: S.194T partner TDS included.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>24Q+26Q+27Q prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FVU validated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DTAA rates applied</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PREPARE</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">24Q+26Q+27Q</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">NSDL RPU/FVU</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">7 Days Post-Qtr</text></svg></div>
            <span class="illustration-label">Returns Ready</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">File on TIN-NSDL/Protean Portal</h3>
        <p class="step-description">Upload all validated files using employer TAN and digital signature. 27EQ by 15th (earlier deadline). Download Form 27A acknowledgment per form. Patron files within 10 days of quarter end for Mumbai clients.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All forms uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>27A downloaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>20-day buffer</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FILE</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">TIN-NSDL Portal</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">All Forms Filed</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">10 Days Early</text></svg></div>
            <span class="illustration-label">Filed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Generate and Issue TDS Certificates</h3>
        <p class="step-description">Form 16 (annual, from 24Q Q4) by 15 June via TRACES. Form 16A (quarterly, from 26Q/27Q) within 15 days of filing. Form 27D (from 27EQ). Patron generates in bulk and distributes to all deductees.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16A quarterly</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All certificates distributed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CERTIFICATES</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Form 16 + 16A</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">TRACES Bulk</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Distributed</text></svg></div>
            <span class="illustration-label">Certificates Issued</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Reconcile, Correct, and Respond to Notices</h3>
        <p class="step-description">Match filed data with accounting records and deductees' Form 26AS. File TRACES C1-C5 corrections for any discrepancies. Respond to CPC-TDS demand notices. Maintain records 7+ years. Patron performs quarterly reconciliation.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>26AS verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Corrections filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Records maintained</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">RECONCILED</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">26AS Verified</text></svg></div>
            <span class="illustration-label">Compliant</span>
            <span class="step-number-large">06</span>
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
            <h2 class="section-title">Documents Required for TDS Return Filing</h2>
            <div class="content-text">
                
                <ul><li><strong>TAN Certificate:</strong> Active Tax Deduction Account Number.</li><li><strong>PAN of All Deductees:</strong> Employees, contractors, landlords, professionals, NRIs. Invalid = 20% TDS.</li><li><strong>Payment Records:</strong> Invoice-wise: date, amount, payee, section, rate, TDS.</li><li><strong>Challan 281 Receipts:</strong> Monthly deposits with BSR code, CIN, date, amount per section.</li><li><strong>Tax Residency Certificate (27Q):</strong> For NRI/foreign deductees claiming DTAA rates.</li><li><strong>Investment Declarations (24Q):</strong> S.80C/80D/HRA/LTA and regime choice.</li><li><strong>Lower/Nil Deduction Certificates:</strong> S.197 certificates for reduced TDS rates.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai Tip:</strong> Businesses paying rent to multiple landlords (BKC/Nariman Point offices, Andheri coworking, Powai serviced offices) must verify each landlord's PAN and classify rent as 194I(a) (land/building 2%) or 194I(b) (plant/machinery 10%). Serviced office agreements bundling rent with services require careful bifurcation. Patron analyses rent agreements for correct TDS.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common TDS Return Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Multiple Forms Per Quarter</td><td>Most Mumbai businesses file 2-3 forms (24Q+26Q+27Q). Separate data, challan allocation, deductee universe per form. No double-counting of challans</td><td>Unified TDS workflow: single data extraction for all forms. Challan allocation tracked across forms. No duplication. All filed within 10 days of quarter end</td></tr>
                        <tr><td>Section 194T Partner TDS</td><td>NEW FY 2025-26: LLPs and firms must deduct 10% on partner payments > Rs 20K. Mumbai CA/law firms at Fort adapting accounting and TDS systems</td><td>S.194T implemented in TDS workflow. Partner payments captured in 26Q. Correct section reporting. All Mumbai firm clients updated</td></tr>
                        <tr><td>DTAA Treaty Rates (27Q)</td><td>BKC MNCs paying foreign parent: 90+ DTAAs with different rates. Wrong rate = excess (payee complaint) or short deduction (demand notice). TRC verification mandatory</td><td>DTAA rate matrix maintained for common Mumbai MNC payment corridors. TRC verification per payment. Correct treaty rate in 27Q. Zero excess or short deduction</td></tr>
                        <tr><td>High-Volume 26Q (BKC)</td><td>200-500 vendor payments per quarter. Each deductee row must match challan. PAN validation, section code, challan mapping errors common. Post-filing demand notices</td><td>Automated data extraction from Tally/Zoho/QuickBooks. Pre-upload PAN validation. Section code verification. Challan mapping cross-checked before filing</td></tr>
                        <tr><td>30% Expense Disallowance</td><td>S.40(a)(ia): TDS not deducted/deposited = 30% expense disallowed. Rs 5 Cr contractor fees = Rs 1.5 Cr disallowance inflating taxable income significantly</td><td>Monthly TDS compliance ensures zero disallowance risk. All payments tracked to correct section. Deposit by 5th. Returns filed within 10 days. Complete protection</td></tr>

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
            <h2 class="section-title">TDS Return Filing Costs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Return Filing (Govt)</td><td>Nil</td></tr>
                        <tr><td>Late Fee (S.234E)</td><td>Rs 200/day (capped at TDS)</td></tr>
                        <tr><td>Penalty (S.271H)</td><td>Rs 10,000 to Rs 1,00,000</td></tr>
                        <tr><td>Expense Disallowance</td><td>30% of payment (S.40(a)(ia))</td></tr>
                        <tr><td>Patron: Single Form/Qtr</td><td>Starting Rs 2,000/quarter</td></tr>
                        <tr><td>Patron: Multi-Form Bundle</td><td>Starting Rs 5,000/quarter</td></tr>
                        <tr><td>Patron: Monthly TDS + Returns</td><td>Starting Rs 5,000/month</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free TDS Returns consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20TDS%20compliance%20in%20Mumbai.%20Please%20help." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TDS Return Filing Due Dates</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly TDS Deposit</td><td>7th of following month (March by 30 Apr)</td></tr>
                        <tr><td>24Q/26Q/27Q Quarterly</td><td>31 Jul | 31 Oct | 31 Jan | 31 May</td></tr>
                        <tr><td>27EQ TCS Quarterly</td><td>15 Jul | 15 Oct | 15 Jan | 15 May</td></tr>
                        <tr><td>Form 16 (Salary)</td><td>15 June (annual)</td></tr>
                        <tr><td>Form 16A (Non-Salary)</td><td>15 days from TDS return due date</td></tr>
                        <tr><td>26QB Property TDS</td><td>30 days from month-end of deduction</td></tr>
                        <tr><td>Patron Buffer</td><td>All forms within 10 days of quarter end</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> No discretionary extensions. S.234E Rs 200/day automatic. S.271H Rs 10K-1L additional. Late deposit 1.5%/month interest. S.40(a)(ia) 30% expense disallowance if TDS not deducted/deposited. For Rs 50L quarterly TDS, 10 days delay = Rs 2,000 late fee + potential Rs 1L penalty. Patron files all forms within 10 days of quarter end.</p>

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
            <h2 class="section-title">Why Choose Patron for TDS Returns in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>All-Forms Expertise</h3><p>24Q + 26Q + 27Q + 27EQ + 26QB/26QC unified. Single data extraction. Consistent challan allocation. No duplication across forms. S.194T partner TDS implemented.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>DTAA + NRI Expertise</h3><p>27Q with correct treaty rates from 90+ DTAAs. TRC verification. BKC MNC royalty, technical fees, ECB interest. Zero excess or short deduction.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Zero Disallowance Risk</h3><p>Monthly compliance ensures S.40(a)(ia) 30% expense disallowance never triggers. All payments tracked. Deposit by 5th. Returns filed 10 days early.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>10,000+ Businesses Served</h3><p>Comprehensive TDS expertise across all forms and sections. BKC BFSI, Powai IT, MIDC manufacturing, Fort firms. 4.9 rating, 15+ years, 4 offices.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram. All-forms TDS expertise. DTAA treaty rates. S.194T implemented. Unified quarterly compliance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TDS Return Forms for Mumbai Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Form</th><th>TDS/TCS On</th><th>Certificate</th></tr></thead>
                    <tbody>
                        <tr><td>24Q</td><td>Salary (S.192)</td><td>Form 16 (annual)</td></tr>
                        <tr><td>26Q</td><td>Non-salary residents (194A-194T)</td><td>Form 16A (quarterly)</td></tr>
                        <tr><td>27Q</td><td>NRI/foreign (S.195, DTAA)</td><td>Form 16A (quarterly)</td></tr>
                        <tr><td>27EQ</td><td>TCS (S.206C)</td><td>Form 27D</td></tr>
                        <tr><td>26QB</td><td>Property purchase (S.194IA)</td><td>Form 16B</td></tr>
                        <tr><td>26QC</td><td>Rent by individual (S.194IB)</td><td>Form 16C</td></tr>

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
                
                <p>Mumbai businesses filing TDS returns often need:</p>
                <ul><li><a href="/tds-return-filing-24q">TDS Return Filing (24Q/Form 16)</a> - Salary TDS detail.</li>
                    <li><a href="/payroll-services">Payroll Services</a> - Monthly payroll.</li>
                    <li><a href="/income-tax-return">Income Tax Return</a> - Personal/business ITR.</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Books and financials.</li>
                    <li><a href="/pvt-llp-compliance">LLP Compliance</a> - S.194T partner TDS.</li>
                    <li><a href="/statutory-audit">Statutory Audit</a> - Annual audit.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for TDS Returns</h2>
            <div class="content-text">
                
                <p><strong>Income Tax Act, 1961:</strong></p>
                <ul><li>S.192-206C: TDS/TCS sections. S.200(3): Quarterly filing. S.203: Certificates. S.194T: Partner TDS (FY 2025-26). S.195: NRI payments. S.206AB: Higher rate for non-filers.</li></ul>
                <p style="margin-top:16px;"><strong>Penalties:</strong></p>
                <ul><li>S.234E: Rs 200/day. S.271H: Rs 10K-1L. S.201(1A): 1%/1.5% interest. S.40(a)(ia): 30% disallowance. S.272A(2)(g): Rs 100/day late certificate.</li></ul>
                <p style="margin-top:16px;"><strong>Filing:</strong></p>
                <ul><li>NSDL RPU/FVU for preparation. TIN-NSDL/Protean for upload. TRACES for corrections and certificates. CPC-TDS for processing.</li></ul>
                <p style="margin-top:16px;"><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Portal</a> | <a href="https://tdscpc.gov.in" target="_blank" rel="noopener">TRACES</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: TDS Returns in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about IT office, TDS forms, due dates, penalties, Section 194T, Form 16 vs 16A, TAN requirement, and corrections for Mumbai businesses filing all TDS return forms.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Mumbai', 'enquiryService' => 'TDS Returns in Mumbai'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which IT office handles TDS returns in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>TDS returns are filed electronically on the TIN-NSDL Protean portal and processed centrally by CPC-TDS at Vaishali Ghaziabad. No physical filing at any Mumbai IT office is required. TDS demand notices and assessments are handled by the jurisdictional Assessing Officer based on the deductor TAN zone. TRACES portal is used for corrections and certificate generation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the different TDS return forms?</h3>
                        <div class="faq-expanded__a"><p>Four primary forms. 24Q for salary TDS Section 192. 26Q for non-salary TDS to residents Sections 193 to 194T. 27Q for payments to NRIs and foreign entities Section 195. 27EQ for Tax Collected at Source Section 206C. Additionally event-based forms include 26QB for property TDS 26QC for rent TDS by individuals and 26QD. Mumbai businesses typically file 24Q plus 26Q at minimum each quarter.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the due date for TDS returns?</h3>
                        <div class="faq-expanded__a"><p>For Forms 24Q 26Q and 27Q: Q1 April to June by 31 July, Q2 July to September by 31 October, Q3 October to December by 31 January, Q4 January to March by 31 May. For Form 27EQ TCS: Q1 by 15 July Q2 by 15 October Q3 by 15 January Q4 by 15 May. Monthly TDS deposit by 7th of following month. March TDS by 30 April.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for late TDS return filing?</h3>
                        <div class="faq-expanded__a"><p>Section 234E late fee of Rs 200 per day from due date until filing capped at total TDS amount. Section 271H penalty of Rs 10,000 to Rs 1,00,000. Interest under Section 201(1A) at 1.5 percent per month on late deposit and 1 percent per month on non-deduction. Section 40(a)(ia) disallows 30 percent of expense if TDS not deducted or deposited.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is Section 194T and how does it affect Mumbai firms?</h3>
                        <div class="faq-expanded__a"><p>Section 194T effective from 1 April 2025 requires partnership firms and LLPs to deduct TDS at 10 percent on salary remuneration commission bonus and interest paid to partners exceeding Rs 20,000 per year. This is a new compliance obligation for Mumbai CA firms law firms and consultancy LLPs at Fort and Marine Lines. These payments are reported in Form 26Q each quarter.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between Form 16 and Form 16A?</h3>
                        <div class="faq-expanded__a"><p>Form 16 is the annual TDS certificate for salary income issued after Q4 24Q by 15 June. It has Part A from TRACES and Part B from salary computation. Form 16A is the quarterly TDS certificate for non-salary income issued after each 26Q or 27Q within 15 days of filing. Landlords consultants and contractors receive Form 16A from their payers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is TAN mandatory for filing TDS returns?</h3>
                        <div class="faq-expanded__a"><p>Yes TAN Tax Deduction Account Number is mandatory for all deductors filing regular TDS returns 24Q 26Q 27Q 27EQ. TAN is obtained through Form 49B on the NSDL portal. For event-based forms like 26QB and 26QC TAN is not mandatory as PAN is used instead. Every Mumbai business deducting TDS must obtain TAN within one month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can errors in filed TDS returns be corrected?</h3>
                        <div class="faq-expanded__a"><p>Yes correction statements are filed via the TRACES portal. Download the consolidated TDS file for the relevant quarter and form. Prepare correction using NSDL RPU with types C1 for deductor details C2 for challan corrections C3 for deductee corrections C4 for adding salary details and C5 for adding new challans or deductees. Multiple correction rounds are allowed.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>TDS return kab file karna hota hai?</strong> 24Q/26Q/27Q: Q1 31 Jul, Q2 31 Oct, Q3 31 Jan, Q4 31 May. 27EQ: 15th. Monthly deposit 7th tak.</p>
                <p><strong>24Q 26Q 27Q mein kya fark hai?</strong> 24Q: salary. 26Q: non-salary (rent, professional, contractor, partner S.194T). 27Q: NRI/foreign. 27EQ: TCS.</p>
                <p><strong>Late filing pe kya hota hai?</strong> Rs 200/day (S.234E). Rs 10K-1L penalty (S.271H). 1.5%/month interest. 30% expense disallowance S.40(a)(ia).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Every Form Every Quarter - 30% Disallowance Is Real</h2>
            <div class="content-text">
                
                <p>S.40(a)(ia) disallows 30% of expense if TDS not deducted/deposited. Rs 5 Cr contractor fees = Rs 1.5 Cr disallowance. S.234E Rs 200/day automatic. S.271H Rs 10K-1L penalty. CPC-TDS runs automated matching. Form 26AS discrepancies flagged instantly. Mumbai's massive TDS volumes demand precision across all forms every quarter.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20TDS%20return%20filing%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">All Forms, Every Quarter, Zero Penalties</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">TDS returns in Mumbai span all four forms: 24Q salary for BKC BFSI, 26Q non-salary for contractors and professionals (plus S.194T partner TDS), 27Q for MNC foreign payments with DTAA rates, 27EQ TCS for manufacturers. Most businesses file 2-3 forms quarterly.</p>
                <p style="color:rgba(255,255,255,0.9);">30% expense disallowance (S.40(a)(ia)) makes TDS compliance critical for taxable income. Rs 200/day late fee, Rs 10K-1L penalty, 1.5%/month interest on delayed deposits. TRACES corrections for errors.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron provides unified all-forms TDS from Marine Lines: monthly computation, quarterly filing within 10 days, DTAA expertise, S.194T implementation, Form 16/16A generation, corrections, and demand notice response. 10,000+ businesses, 4.9 rating, 15+ years.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20TDS%20compliance%20in%20Mumbai.%20Please%20help." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=TDS%20Returns%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20TDS%20return%20filing%20in%20Mumbai.%0A%0APlease%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">TDS Returns Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides comprehensive TDS return filing across all forms in major cities.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">TDS compliance all forms</div>
                <div class="pa-city-grid">
                    <a href="/tds-returns/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/tds-returns/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/tds-returns/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">Tax and compliance</div>
                <div class="pa-cross-grid">
                    <a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Filing (24Q)</div><div class="pa-card-sub">Salary TDS</div></div></a>
                    <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/pvt-llp-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page covers TDS returns filing (all forms) in Mumbai. Content reviewed quarterly (Freshness Tier 1) as IT Act amendments, new sections, and due date changes evolve.</p>
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
    // CONFIGURATION - Update these values
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
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
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
        // Static cards already rendered - init Slick immediately
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

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');

    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
