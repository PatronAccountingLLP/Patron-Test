
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>TDS Return Filing (24Q) Mumbai - Salary TDS & Form 16</title>
    <meta name="description" content="CA-assisted TDS return filing (Form 24Q/Form 16) in Mumbai. Quarterly 24Q, salary TDS compliance, TRACES corrections. Serving BKC, Powai, MIDC. Call +91 945 945 6700.">
    <link rel="canonical" href="/tds-return-filing/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="TDS Return Filing (24Q) Mumbai - Salary TDS & Form 16">
    <meta property="og:description" content="CA-assisted TDS return filing (Form 24Q/Form 16) in Mumbai. Quarterly 24Q, salary TDS compliance, TRACES corrections. Serving BKC, Powai, MIDC. Call +91 945 945 6700.">
    <meta property="og:url" content="/tds-return-filing/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TDS Return Filing (24Q) Mumbai - Salary TDS & Form 16">
    <meta name="twitter:description" content="CA-assisted TDS return filing (Form 24Q/Form 16) in Mumbai. Quarterly 24Q, salary TDS compliance, TRACES corrections. Serving BKC, Powai, MIDC. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "TDS Return Filing 24Q/Form 16 Mumbai",
      "description": "CA-assisted TDS return filing (Form 24Q/Form 16) in Mumbai. Quarterly 24Q, salary TDS compliance, TRACES corrections. Serving BKC, Powai, MIDC. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/tds-return-filing/mumbai",
      "serviceType": "TDS Return Filing 24Q/Form 16 Mumbai",
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
        "url": "https://www.patronaccounting.com/tds-return-filing/mumbai",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "200",
          "maxPrice": "10000",
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
          "name": "TDS Return Filing",
          "item": "https://www.patronaccounting.com/tds-return-filing"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "TDS Return Filing 24Q/Form 16 Mumbai",
          "item": "https://www.patronaccounting.com/tds-return-filing/mumbai"
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
            "text": "Form 24Q is filed electronically on the TIN-NSDL Protean portal and processed centrally by CPC-TDS at Vaishali Ghaziabad. No filing with any local Mumbai IT office is required. TDS demand notices and assessments are handled by the jurisdictional Assessing Officer based on the employer TAN and PAN zone in Mumbai. Form 16 is generated from the TRACES portal tdscpc.gov.in."
          }
        },
        {
          "@type": "Question",
          "name": "What is the due date for filing Form 24Q?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 24Q must be filed quarterly. Q1 April to June by 31 July. Q2 July to September by 31 October. Q3 October to December by 31 January. Q4 January to March by 31 May. Q4 includes Annexure II with full-year salary details that generate Form 16. Late filing attracts Rs 200 per day under Section 234E capped at total TDS plus penalty of Rs 10,000 to Rs 1,00,000 under Section 271H."
          }
        },
        {
          "@type": "Question",
          "name": "When should Form 16 be issued to employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 16 must be issued by the employer to each employee within 15 days of the Q4 Form 24Q filing date. Since Q4 24Q is due by 31 May Form 16 must be issued by 15 June. For employees who resign mid-year the employer should issue Form 16 after the relevant quarter 24Q is filed. Late issuance attracts Rs 100 per day per certificate under Section 272A(2)(g)."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late TDS return filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 234E imposes a late fee of Rs 200 per day of delay capped at the total TDS amount reported in the return. Section 271H imposes a penalty of Rs 10,000 to Rs 1,00,000 for late filing or providing incorrect information. Additionally interest at 1.5 percent per month applies if TDS is deposited late from date of deduction to date of deposit."
          }
        },
        {
          "@type": "Question",
          "name": "Is electronic filing of 24Q mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes electronic filing is mandatory for all companies government deductors employers with 20 or more deductees in any quarter and entities whose accounts are subject to tax audit. Virtually all Mumbai employers with salaried staff fall under these criteria. The 24Q file is prepared using NSDL RPU validated through FVU and uploaded on the TIN-NSDL Protean portal."
          }
        },
        {
          "@type": "Question",
          "name": "What is TRACES and how is it used?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TRACES TDS Reconciliation Analysis and Correction Enabling System at tdscpc.gov.in is the portal used by employers to download Form 16 Part A view processed 24Q data file correction statements verify challan status and track TDS compliance. After filing 24Q Mumbai employers use TRACES to generate bulk Form 16 and verify employee Form 26AS reflects correct TDS credits."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if employee PAN is missing in 24Q?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If a valid PAN is not provided for an employee TDS must be deducted at the higher rate of 20 percent instead of the applicable slab rate under Section 206AA. The 24Q must still include the deductee row with the remark that PAN is not available. This results in higher TDS for the employee and potential refund claims during ITR filing."
          }
        },
        {
          "@type": "Question",
          "name": "Can errors in filed 24Q be corrected?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes correction statements can be filed on the TRACES portal. Download the consolidated 24Q file for the relevant quarter from TRACES. Prepare the correction using NSDL RPU with types C1 for deductor details C2 for challan corrections C3 for deductee PAN or amount corrections C5 for adding new challans or deductees. Validate with FVU and upload on TIN-NSDL portal. Quick Answers 24Q kab file karna hota hai? Q1: 31 Jul, Q2: 31 Oct, Q3: 31 Jan, Q4: 31 May. Q4 mein Annexure II (poore saal ka salary breakup) bhi file hota hai. Late pe Rs 200/day fee. Form 16 kab milta hai? 15 June tak. Q4 24Q file hone ke 15 din mein. Late dene pe Rs 100/day per certificate penalty. TDS deposit kab karna hota hai? Har month ki 7 tarikh tak Challan 281 se. March ka TDS 30 April tak. Late pe 1.5%/month interest."
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
                        TDS Return Filing (24Q / Form 16) in Mumbai: Quarterly Compliance for Every Employer
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form 24Q:</span> Quarterly TDS return for salary under Section 192. Filed on TIN-NSDL/Protean portal. Q4 includes Annexure II with full-year salary breakup</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Dates:</span> Q1: 31 July | Q2: 31 October | Q3: 31 January | Q4: 31 May. Monthly TDS deposit by 7th via Challan 281</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form 16:</span> TDS certificate issued to employees by 15 June (within 15 days of Q4 24Q filing). Part A from TRACES + Part B from Annexure II</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalties:</span> Late fee: Rs 200/day (S.234E, capped at TDS). Penalty: Rs 10,000-1,00,000 (S.271H). Late deposit: 1.5%/month interest</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=TDS%20Filing%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20TDS%20filing.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20TDS%20return%20filing%20(24Q)%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'TDS Return Filing',
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
            <a href="#what-section" class="toc-btn">What Is 24Q</a>
            <a href="#who-section" class="toc-btn">Who Files</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Costs</a>
            <a href="#timeline-section" class="toc-btn">Due Dates</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Annexure I vs II</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TDS Return Filing in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - TDS Return Filing Services at a Glance</strong></p>
                    <p>Form 24Q: quarterly salary TDS return. Q1: 31 Jul, Q2: 31 Oct, Q3: 31 Jan, Q4: 31 May (with Annexure II). Form 16 by 15 June. TDS deposit by 7th monthly (Challan 281). Late fee Rs 200/day (S.234E). Penalty Rs 10K-1L (S.271H). New vs Old Regime handling. NSDL RPU/FVU. TRACES for Form 16 + corrections. Mumbai = India's largest employer base.</p>
                </div>
                <p>Mumbai is India's largest private sector employment hub, generating the highest volume of salary TDS returns. BKC BFSI, Powai IT, Andheri MIDC, hospitality, media - every employer deducting TDS from salary files Form 24Q quarterly.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Form 24Q</td><td>Quarterly salary TDS return under Section 192</td></tr>
                        <tr><td>Due Dates</td><td>Q1: 31 Jul | Q2: 31 Oct | Q3: 31 Jan | Q4: 31 May</td></tr>
                        <tr><td>Form 16</td><td>TDS certificate by 15 June. Part A (TRACES) + Part B (Annexure II)</td></tr>
                        <tr><td>TDS Deposit</td><td>By 7th of following month via Challan 281. March by 30 April</td></tr>
                        <tr><td>Late Fee</td><td>S.234E: Rs 200/day (capped at TDS amount)</td></tr>
                        <tr><td>Penalty</td><td>S.271H: Rs 10,000 to Rs 1,00,000</td></tr>
                        <tr><td>Portal</td><td>TIN-NSDL/Protean (filing) | TRACES (Form 16, corrections)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Patron's Marine Lines office handles complete TDS compliance. Related: <a href="/tds-return-filing-24q">TDS return filing</a>, <a href="/payroll-services">payroll services</a>, <a href="/income-tax-return">income tax return</a>, <a href="#">professional tax</a>.</p>
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
                <h2 class="section-title">What Is Form 24Q and Form 16?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Form 24Q is a quarterly statement filed by employers reporting TDS deducted from employee salaries under Section 192. Annexure I (all quarters): deductor, challan, deductee details. Annexure II (Q4 only): full-year salary breakup per employee.</p>
                    <p>Form 16 is the TDS certificate: Part A (from TRACES - quarter-wise TDS) + Part B (from Annexure II - salary computation). Employees use Form 16 to file income tax returns. Due by 15 June.</p>
                    <p>Filed on TIN-NSDL/Protean portal. Form 16 from <a href="https://tdscpc.gov.in" target="_blank" rel="noopener">TRACES</a>. Related: <a href="/tds-return-filing-24q">TDS return filing</a>, <a href="/income-tax-return">income tax return</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for TDS Return Filing:</strong></p>
                    <ul>
                        <li><strong>24Q Annexure I:</strong> All 4 quarters. Deductor/challan/deductee details. PAN, TDS amount, BSR code, deposit date. Errors = short credit in Form 26AS.</li>
                        <li><strong>24Q Annexure II:</strong> Q4 only. Full-year salary: gross, HRA, LTA, exemptions, S.80C/80D deductions, taxable income, tax computed. Generates Form 16 Part B.</li>
                        <li><strong>Form 16:</strong> Part A (TRACES: quarter-wise TDS) + Part B (Annexure II: salary computation). By 15 June. Late = Rs 100/day per certificate.</li>
                        <li><strong>S.234E:</strong> Rs 200/day late fee for delayed 24Q. Capped at total TDS amount. Automatic - no discretionary waiver.</li>
                        <li><strong>New vs Old Regime:</strong> S.115BAC default from FY 2023-24. Employee declares regime. TDS computed accordingly. Both reported in Annexure II.</li>
                        <li><strong>TRACES:</strong> tdscpc.gov.in. Form 16 Part A download, corrections (C1-C5), challan verification, 26AS credit tracking.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TDS Return Filing</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>24Q</span>
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
            <h2 class="section-title">Which Mumbai Employers File Form 24Q?</h2>
            <div class="content-text">
                
                <p><strong>BFSI (BKC, Nariman Point):</strong> Thousands of employees. Complex compensation: ESOPs, variable pay, expatriate allowances. Bulk 24Q quarterly. <a href="/payroll-services">Payroll services</a>.</p>
                <p><strong>IT/ITES (Powai, Andheri):</strong> Complex CTC: variable pay, retention bonuses, ESOPs, perquisites. New vs Old Regime handling. High mid-year attrition = Form 12B collection. <a href="/income-tax-return">Income tax return</a>.</p>
                <p><strong>Manufacturing (Andheri MIDC, Thane-Belapur):</strong> Mix of management (higher TDS) and workers (often below exemption). Correct classification essential. <a href="/pf-registration">PF registration</a>.</p>
                <p><strong>Media/Entertainment (Film City, Andheri):</strong> Project-based compensation. Irregular salary patterns. Retainer fees for on-payroll talent. <a href="/accounting-services">Accounting services</a>.</p>
                <p><strong>Any Employer Deducting Salary TDS:</strong> Startups, NGOs, education, healthcare, retail, professional firms. Electronic 24Q mandatory for 20+ deductees. <a href="/private-limited-company-compliance">Company compliance</a>.</p>

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
                        <tr><td>Monthly TDS Computation</td><td>Per-employee calculation based on declared regime (New S.115BAC/Old), investment declarations, salary structure, slab rates. BKC BFSI ESOPs and variable pay adjusted monthly. Integrated with payroll</td></tr>
                        <tr><td>Quarterly 24Q Preparation</td><td>Annexure I: deductor, challan BSR/CIN, deductee PAN/TDS. NSDL RPU preparation + FVU validation. For 100-5,000+ employees from payroll exports. Filed within 10 days of quarter end</td></tr>
                        <tr><td>Q4 Annexure II</td><td>Full-year salary breakup per employee: gross, exemptions (HRA/LTA), deductions (80C/80D/24b), taxable income, tax. 12 months payroll reconciled. Generates Form 16 Part B. Most critical filing</td></tr>
                        <tr><td>Form 16 Generation</td><td>Part A bulk download from TRACES. Part B from Annexure II. Merged and distributed to all employees by first week of June - 10 days ahead of 15 June deadline. Secure email/HR portal distribution</td></tr>
                        <tr><td>TRACES Corrections</td><td>C1-C5 correction statements for PAN mismatch, TDS amount errors, challan discrepancies. Consolidated file download, RPU correction, FVU validation, re-upload. Within 5 working days</td></tr>
                        <tr><td>TDS Challan Management</td><td>Monthly Challan 281 deposit by 5th (2-day buffer). BSR code verification. Multi-branch challan consolidation for BKC HQ + Thane + Navi Mumbai locations</td></tr>
                        <tr><td>New/Old Regime Handling</td><td>Per-employee regime classification. S.115BAC default with opt-out tracking. TDS computed regime-wise. Annexure II correctly reports both regimes for Mumbai employers with mixed declarations</td></tr>
                        <tr><td>TDS Demand Notice Response</td><td>Representation before Assessing Officer for short deduction, late deposit interest. Portal response. CPC-TDS coordination. Demand rectification for Mumbai employers</td></tr>

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
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers complete TDS compliance from monthly computation through challan deposit, 24Q preparation, filing, Form 16 generation, to corrections.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Compute Monthly TDS for Each Employee</h3>
        <p class="step-description">Calculate TDS based on estimated annual income, declared regime (New S.115BAC/Old), investment proofs (80C, 80D, HRA, LTA), and slab rates. Deduct from monthly salary. For BKC BFSI with ESOPs/variable pay, Patron recomputes monthly based on actuals.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Regime classified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Slab applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Proofs processed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">COMPUTE</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Per Employee</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">New/Old Regime</text></svg></div>
            <span class="illustration-label">Computed</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Deposit TDS by 7th of Following Month</h3>
        <p class="step-description">Pay via Challan 281 on income tax e-payment portal. Verify BSR code, CIN, amount. March TDS by 30 April. Patron processes deposits by 5th - 2-day buffer. Multi-branch challans consolidated for Mumbai employers.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Challan 281 paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>BSR verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2-day buffer</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DEPOSIT</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Challan 281</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">By 5th Monthly</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">BSR Verified</text></svg></div>
            <span class="illustration-label">Deposited</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Prepare Form 24Q Using RPU/FVU</h3>
        <p class="step-description">Compile employee data and challan details. Use NSDL RPU to prepare 24Q file. Run FVU for validation (PAN, challan, amount checks). Q4: include Annexure II with full-year salary breakup. Patron generates 24Q from payroll exports.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RPU prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FVU validated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annexure II (Q4)</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PREPARE 24Q</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">NSDL RPU</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">FVU Validated</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Annexure II (Q4)</text></svg></div>
            <span class="illustration-label">24Q Ready</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">File 24Q on TIN-NSDL/Protean Portal</h3>
        <p class="step-description">Upload validated file using employer TAN and digital signature. Download Form 27A acknowledgment. Patron files within 10 days of quarter end - 20+ day buffer before statutory deadline.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>27A downloaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>20-day buffer</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FILE 24Q</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">TIN-NSDL Portal</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">10 Days Early</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Form 27A Saved</text></svg></div>
            <span class="illustration-label">Filed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Generate and Issue Form 16 (After Q4)</h3>
        <p class="step-description">After CPC-TDS processes Q4 24Q: download Form 16 Part A from TRACES in bulk. Prepare Part B from Annexure II data. Merge Part A + Part B. Issue to each employee by 15 June. Patron distributes by first week of June.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Part A downloaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Part B merged</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Distributed early</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FORM 16</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Part A + Part B</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">By 1st Week Jun</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Distributed</text></svg></div>
            <span class="illustration-label">Form 16 Issued</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">File Corrections and Maintain Records</h3>
        <p class="step-description">If errors found: download consolidated file from TRACES, prepare C1-C5 corrections via RPU, validate, upload. Maintain salary records, investment proofs, challans, 24Q data for 7+ years. Patron handles end-of-year reconciliation.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Corrections filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Records maintained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>7-year retention</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">COMPLIANT</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">7-Year Records</text></svg></div>
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
                
                <ul><li><strong>TAN:</strong> Tax Deduction Account Number registered with Income Tax Department.</li><li><strong>Employee PAN:</strong> Valid PAN for every employee. Invalid = TDS at 20% (S.206AA).</li><li><strong>Monthly Payroll Data:</strong> Employee-wise salary breakup: basic, HRA, special allowance, LTA, bonus, perquisites.</li><li><strong>Investment Declarations/Proofs:</strong> S.80C (PPF, ELSS), 80D (medical), 80E (education loan), 24(b) (home loan). Proofs collected January.</li><li><strong>Challan 281 Receipts:</strong> Monthly TDS deposit with BSR code, CIN, date, amount.</li><li><strong>Previous Quarter 24Q:</strong> Token number for continuity across quarters.</li><li><strong>DSC:</strong> Digital Signature Certificate for electronic filing.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai Tip:</strong> Employees who changed jobs mid-year (common in BKC BFSI and Powai IT) must submit Form 12B declaring previous employer income and TDS. This data goes into current employer TDS computation and Q4 Annexure II. Missing Form 12B = incorrect TDS and Form 16 discrepancies. Patron collects Form 12B at onboarding.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common TDS Filing Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>New vs Old Regime Mix</td><td>S.115BAC default from FY 2023-24. 500-5,000 employee employers with both regimes. Errors in regime classification = wrong TDS, incorrect Form 16, employee grievances during ITR</td><td>Per-employee regime tracking. TDS computed regime-wise. Annexure II correctly reports both. Regime declarations verified at onboarding and January investment proof cycle</td></tr>
                        <tr><td>Complex CTC (BKC/Powai)</td><td>ESOPs (perquisite on exercise), variable pay (taxed in payment quarter), retention bonuses, car perquisites, flexible benefits. Each has specific TDS treatment</td><td>Component-wise TDS computation. ESOP perquisite value calculated at exercise. Variable pay adjusted quarterly. Full reconciliation in Q4 Annexure II</td></tr>
                        <tr><td>Mid-Year Job Changes</td><td>High attrition = thousands change jobs. Form 12B (previous employer income) must be collected and incorporated. Missing data = TDS shortfall for employee</td><td>Form 12B collected at onboarding. Previous employer income incorporated into TDS. Combined income reported in Annexure II. Form 16 reflects total FY income</td></tr>
                        <tr><td>Bulk Form 16 Generation</td><td>1,000-10,000+ employees by 15 June. TRACES portal congestion in May-June. Part B requires 12-month payroll reconciliation. Distribution to resigned employees tracked</td><td>Bulk Part A download from TRACES. Part B from reconciled Annexure II. Merged and distributed by first week June - 10 days early. Resigned employee tracking included</td></tr>
                        <tr><td>Challan Mismatches</td><td>Multi-branch employers: BKC HQ + Thane + Navi Mumbai use different challans. Mismatches = short credit in Form 26AS = demand notices to employees</td><td>Multi-branch challan consolidation. BSR code cross-verification before 24Q. TRACES correction for mismatches. Form 26AS credits verified quarterly</td></tr>

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
                        <tr><td>24Q Filing (Govt)</td><td>Nil</td></tr>
                        <tr><td>Late Fee (S.234E)</td><td>Rs 200/day (capped at TDS)</td></tr>
                        <tr><td>Penalty (S.271H)</td><td>Rs 10,000 to Rs 1,00,000</td></tr>
                        <tr><td>Late Deposit Interest</td><td>1.5%/month</td></tr>
                        <tr><td>Patron: 24Q Quarterly</td><td>Starting Rs 2,000/quarter</td></tr>
                        <tr><td>Patron: Q4 + Annexure II</td><td>Starting Rs 5,000</td></tr>
                        <tr><td>Patron: Payroll + TDS Bundle</td><td>Starting Rs 5,000/month</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free TDS Return Filing consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20TDS%20compliance%20in%20Mumbai.%20Please%20help." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Q1 24Q (Apr-Jun)</td><td>31 July</td></tr>
                        <tr><td>Q2 24Q (Jul-Sep)</td><td>31 October</td></tr>
                        <tr><td>Q3 24Q (Oct-Dec)</td><td>31 January</td></tr>
                        <tr><td>Q4 24Q (Jan-Mar)</td><td>31 May (with Annexure II)</td></tr>
                        <tr><td>Form 16 Issuance</td><td>15 June (within 15 days of Q4)</td></tr>
                        <tr><td>Patron Buffer</td><td>24Q within 10 days of quarter end</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> No discretionary extensions for 24Q. Late fee Rs 200/day is automatic (S.234E). Penalty Rs 10K-1L additional (S.271H). Late Form 16 = Rs 100/day per certificate - for 5,000 employees, Rs 5 lakh per day. Challan deposit by 7th non-negotiable. Patron files 24Q within 10 days of quarter end and issues Form 16 by first week of June.</p>

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
            <h2 class="section-title">Why Choose Patron for TDS Filing in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Payroll-Integrated TDS</h3><p>Monthly TDS flows from payroll. Zero manual data entry. Regime classification, investment proofs, slab computation automated. 24Q generated from payroll exports.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Bulk 24Q + Form 16</h3><p>500-5,000+ employee processing. NSDL RPU automated. Form 16 Part A + Part B merged in bulk. Distributed by first week of June - 10 days early. Zero employee complaints.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>TRACES Correction Expertise</h3><p>C1-C5 corrections for PAN mismatch, TDS errors, challan discrepancies. Consolidated file download, RPU correction, FVU validation. Within 5 working days.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>20-Day Advance Filing</h3><p>24Q filed within 10 days of quarter end. Zero late fees. 10,000+ businesses, 4.9 rating, 15+ years, 4 offices across India.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Employers Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram. Payroll-integrated TDS compliance. NSDL RPU + TRACES expertise for employers of all sizes.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Annexure I vs Annexure II in Form 24Q</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>Annexure I</th><th>Annexure II</th></tr></thead>
                    <tbody>
                        <tr><td>Filing</td><td>All 4 quarters</td><td>Q4 only (Jan-Mar)</td></tr>
                        <tr><td>Content</td><td>Deductor, challan, employee TDS</td><td>Full-year salary breakup per employee</td></tr>
                        <tr><td>Key Data</td><td>PAN, TDS, BSR code, deposit date</td><td>Gross salary, exemptions, 80C/80D, taxable income</td></tr>
                        <tr><td>Purpose</td><td>Report quarterly TDS deduction/deposit</td><td>Enable Form 16 Part B generation</td></tr>
                        <tr><td>Error Impact</td><td>Short credit in Form 26AS</td><td>Incorrect Form 16; employee ITR issues</td></tr>
                        <tr><td>Mumbai Scale</td><td>5,000 rows per quarter (BKC bank)</td><td>5,000 full-year computations in Q4</td></tr>

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
                
                <p>Mumbai employers filing TDS returns often need:</p>
                <ul><li><a href="/tds-return-filing-24q">TDS Return Filing</a> - National guide.</li>
                    <li><a href="/payroll-services">Payroll Services</a> - Monthly payroll.</li>
                    <li><a href="/income-tax-return">Income Tax Return</a> - Personal/business ITR.</li>
                    <li><a href="#">Professional Tax</a> - Maharashtra PT.</li>
                    <li><a href="/pf-registration">PF Registration</a> - Provident fund.</li>
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
                <ul><li>S.192: TDS on salary. S.200(3): Quarterly 24Q. S.203: Form 16 certificate. S.115BAC: New Tax Regime default. S.206AA: 20% TDS without PAN.</li></ul>
                <p style="margin-top:16px;"><strong>Penalties:</strong></p>
                <ul><li>S.234E: Rs 200/day late fee (capped at TDS). S.271H: Rs 10K-1L penalty. S.201: 1.5%/month interest on late deposit. S.272A(2)(g): Rs 100/day late Form 16.</li></ul>
                <p style="margin-top:16px;"><strong>Due Dates:</strong></p>
                <ul><li>Q1: 31 Jul | Q2: 31 Oct | Q3: 31 Jan | Q4: 31 May. Form 16: 15 Jun. TDS deposit: 7th monthly.</li></ul>
                <p style="margin-top:16px;"><strong>Portals:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax</a> | <a href="https://tdscpc.gov.in" target="_blank" rel="noopener">TRACES</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: TDS Return Filing in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about IT office, 24Q due dates, Form 16 issuance, late penalties, electronic filing, TRACES portal, missing PAN, and 24Q corrections for Mumbai employers.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'TDS Return Filing',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which IT office handles TDS returns in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Form 24Q is filed electronically on the TIN-NSDL Protean portal and processed centrally by CPC-TDS at Vaishali Ghaziabad. No filing with any local Mumbai IT office is required. TDS demand notices and assessments are handled by the jurisdictional Assessing Officer based on the employer TAN and PAN zone in Mumbai. Form 16 is generated from the TRACES portal tdscpc.gov.in.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for filing Form 24Q?</h3>
                        <div class="faq-expanded__a"><p>Form 24Q must be filed quarterly. Q1 April to June by 31 July. Q2 July to September by 31 October. Q3 October to December by 31 January. Q4 January to March by 31 May. Q4 includes Annexure II with full-year salary details that generate Form 16. Late filing attracts Rs 200 per day under Section 234E capped at total TDS plus penalty of Rs 10,000 to Rs 1,00,000 under Section 271H.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">When should Form 16 be issued to employees?</h3>
                        <div class="faq-expanded__a"><p>Form 16 must be issued by the employer to each employee within 15 days of the Q4 Form 24Q filing date. Since Q4 24Q is due by 31 May Form 16 must be issued by 15 June. For employees who resign mid-year the employer should issue Form 16 after the relevant quarter 24Q is filed. Late issuance attracts Rs 100 per day per certificate under Section 272A(2)(g).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for late TDS return filing?</h3>
                        <div class="faq-expanded__a"><p>Section 234E imposes a late fee of Rs 200 per day of delay capped at the total TDS amount reported in the return. Section 271H imposes a penalty of Rs 10,000 to Rs 1,00,000 for late filing or providing incorrect information. Additionally interest at 1.5 percent per month applies if TDS is deposited late from date of deduction to date of deposit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is electronic filing of 24Q mandatory?</h3>
                        <div class="faq-expanded__a"><p>Yes electronic filing is mandatory for all companies government deductors employers with 20 or more deductees in any quarter and entities whose accounts are subject to tax audit. Virtually all Mumbai employers with salaried staff fall under these criteria. The 24Q file is prepared using NSDL RPU validated through FVU and uploaded on the TIN-NSDL Protean portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is TRACES and how is it used?</h3>
                        <div class="faq-expanded__a"><p>TRACES TDS Reconciliation Analysis and Correction Enabling System at tdscpc.gov.in is the portal used by employers to download Form 16 Part A view processed 24Q data file correction statements verify challan status and track TDS compliance. After filing 24Q Mumbai employers use TRACES to generate bulk Form 16 and verify employee Form 26AS reflects correct TDS credits.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What happens if employee PAN is missing in 24Q?</h3>
                        <div class="faq-expanded__a"><p>If a valid PAN is not provided for an employee TDS must be deducted at the higher rate of 20 percent instead of the applicable slab rate under Section 206AA. The 24Q must still include the deductee row with the remark that PAN is not available. This results in higher TDS for the employee and potential refund claims during ITR filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can errors in filed 24Q be corrected?</h3>
                        <div class="faq-expanded__a"><p>Yes correction statements can be filed on the TRACES portal. Download the consolidated 24Q file for the relevant quarter from TRACES. Prepare the correction using NSDL RPU with types C1 for deductor details C2 for challan corrections C3 for deductee PAN or amount corrections C5 for adding new challans or deductees. Validate with FVU and upload on TIN-NSDL portal.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>24Q kab file karna hota hai?</strong> Q1: 31 Jul, Q2: 31 Oct, Q3: 31 Jan, Q4: 31 May. Q4 mein Annexure II (poore saal ka salary breakup) bhi file hota hai. Late pe Rs 200/day fee.</p>
                <p><strong>Form 16 kab milta hai?</strong> 15 June tak. Q4 24Q file hone ke 15 din mein. Late dene pe Rs 100/day per certificate penalty.</p>
                <p><strong>TDS deposit kab karna hota hai?</strong> Har month ki 7 tarikh tak Challan 281 se. March ka TDS 30 April tak. Late pe 1.5%/month interest.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Every Quarter - Rs 200/Day Penalty Is Automatic</h2>
            <div class="content-text">
                
                <p>No discretionary extensions for 24Q. S.234E late fee (Rs 200/day) is automatic. S.271H penalty Rs 10K-1L additional. Late Form 16 = Rs 100/day per certificate (5,000 employees = Rs 5 lakh/day). Incorrect 24Q = wrong Form 26AS credits = demand notices to employees = employer reputation damage. Mumbai's massive employer base makes accurate, timely TDS compliance essential.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20TDS%20return%20filing%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Compute, File, Issue Form 16 - Every Quarter</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">TDS return filing (24Q/Form 16) in Mumbai is quarterly compliance for every employer. BKC BFSI with thousands of employees, Powai IT with complex CTCs, MIDC manufacturing with mixed salary levels - accuracy and timeliness directly impact employee Form 16 quality and 26AS credits.</p>
                <p style="color:rgba(255,255,255,0.9);">Annexure II (Q4) is the most critical filing - full-year salary breakup generating Form 16. New vs Old Regime handling. ESOP/variable pay computation. Form 12B for job changers. TRACES corrections for errors.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron provides payroll-integrated TDS, 20-day advance filing, bulk Form 16 by first week June, TRACES corrections, and demand notice response from Marine Lines. 10,000+ businesses, 4.9 rating, 15+ years.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20TDS%20compliance%20in%20Mumbai.%20Please%20help." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=TDS%20Return%20Filing%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20TDS%20return%20filing%20in%20Mumbai.%0A%0APlease%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">TDS Return Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides TDS return filing services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">TDS and payroll compliance</div>
                <div class="pa-city-grid">
                    <a href="/tds-return-filing/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/tds-return-filing/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/tds-return-filing/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">Payroll and tax compliance</div>
                <div class="pa-cross-grid">
                    <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Professional Tax</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/pf-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page covers TDS return filing (24Q/Form 16) in Mumbai. Content reviewed quarterly (Freshness Tier 1) as IT Act amendments, due date extensions, and tax regime rules evolve.</p>
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
