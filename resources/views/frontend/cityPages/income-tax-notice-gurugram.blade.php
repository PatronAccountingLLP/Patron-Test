
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Income Tax Notice Gurugram - 143(1), 139(9) & Reply</title>
    <meta name="description" content="CA-assisted income tax notice response in Gurugram. Scrutiny 143(2), demand 156, AIS mismatch, defective return 139(9), faceless assessment. Call +91 945 945 6700.">
    <link rel="canonical" href="/income-tax-notice/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Notice Gurugram - 143(1), 139(9) & Reply">
    <meta property="og:description" content="CA-assisted income tax notice response in Gurugram. Scrutiny 143(2), demand 156, AIS mismatch, defective return 139(9), faceless assessment. Call +91 945 945 6700.">
    <meta property="og:url" content="/income-tax-notice/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Notice Gurugram - 143(1), 139(9) & Reply">
    <meta name="twitter:description" content="CA-assisted income tax notice response in Gurugram. Scrutiny 143(2), demand 156, AIS mismatch, defective return 139(9), faceless assessment. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Income Tax Notice Response in Gurugram",
      "description": "CA-assisted income tax notice response in Gurugram. Scrutiny 143(2), demand 156, AIS mismatch, defective return 139(9), faceless assessment. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/income-tax-notice/gurugram",
      "serviceType": "Income Tax Notice Response in Gurugram",
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
          "name": "Income Tax Notice Response: CA Help",
          "item": "https://www.patronaccounting.com/income-tax-notice"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Income Tax Notice Response in Gurugram",
          "item": "https://www.patronaccounting.com/income-tax-notice/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Why did I receive an income tax notice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Common reasons: AIS-ITR mismatch (bank interest, dividends, property sale not reported), wrong ITR form, excessive deduction claims, non-filing despite taxable income, high-value transactions without matching income, TDS shortfall from multiple employers, or random scrutiny selection under CASS."
          }
        },
        {
          "@type": "Question",
          "name": "How to check income tax notice online?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Log in to incometax.gov.in with your PAN. Navigate to 'Pending Actions' > 'e-Proceedings' to see active notices. Verify the DIN (Document Identification Number) on any notice received via email. Only notices visible on the portal are genuine. Do not click links in unsolicited SMS or emails."
          }
        },
        {
          "@type": "Question",
          "name": "What is a 143(1) intimation notice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 143(1) intimation is an auto-generated communication from CPC Bengaluru after processing your ITR. It may show no mismatch, adjustments made, or tax demand. It is NOT a scrutiny notice. If adjustments are incorrect, file a rectification under Section 154 within 30 days."
          }
        },
        {
          "@type": "Question",
          "name": "What is scrutiny notice 143(2)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A 143(2) notice means your ITR is selected for detailed scrutiny by an Assessing Officer. Can be limited or complete scrutiny. All proceedings are faceless under Section 144B. You must provide documentary evidence for all claims. Only 1-2% of ITRs are selected. Professional CA representation is strongly recommended."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I do not respond?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For 139(9): return treated as invalid. For 142(1): penalty Rs 10,000 and best judgment assessment. For 143(2): ex-parte assessment under Section 144 with maximum demand. For 156: enforced collection including bank attachment. Non-response always results in worse outcomes."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a CA for income tax notice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For simple 139(9) and 143(1) notices, a CA ensures correct rectification. For 143(2) scrutiny, 148 reassessment, and 156 demand, professional CA representation is essential. The response requires structured legal arguments, evidence compilation, and strategic positioning."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of notice response in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Fees start from Rs 2,000 for defective return correction up to Rs 50,000 for complete scrutiny representation. Demand notice resolution is Rs 5,000-15,000. CIT(A) appeal starts from Rs 15,000. Emergency consultations available for deadline-critical notices."
          }
        },
        {
          "@type": "Question",
          "name": "Can a CA respond on my behalf?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under faceless assessment (Section 144B), a CA can be authorised to respond to all notices and represent through the entire assessment process via the e-Proceedings portal. No physical appearance is required. Patron Accounting handles all notice responses electronically on behalf of clients. Quick Answers Income tax notice aaye toh kya karein? Pehle incometax.gov.in portal par login karke verify karo. Notice section aur deadline note karo. Jaldi se jaldi CA se contact karo. Ignore mat karo. 143(1) aur 143(2) mein kya farak hai? 143(1) auto-processed intimation hai (CPC se). 143(2) scrutiny notice hai (Assessing Officer se). 143(2) bahut serious hai - poora documentation chahiye. Notice ka jawab kitne din mein dena hota hai? 139(9): 15 din. 143(1): 30 din. 143(2): notice mein likha hoga. 156: 30 din. Deadline miss mat karo."
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
                        Income Tax Notice Response in Gurugram: CA-Assisted Resolution
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Notice Types:</span> 143(1) Intimation | 143(2) Scrutiny | 148 Reassessment | 139(9) Defective Return | 156 Demand</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Response:</span> All notices require timely response via incometax.gov.in e-Proceedings portal</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Faceless Assessment:</span> Section 144B - all assessment communication is online, no physical appearance</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Consequences:</span> Non-response leads to best judgment assessment, penalty up to 200% of tax, prosecution</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Hundreds of income tax notices resolved for Gurugram taxpayers. Expert representation in scrutiny, reassessment, and demand proceedings.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20an%20income%20tax%20notice%20in%20Gurugram.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Income Tax Notice Response in Gurugram',
                                            'city'     => 'Gurugram',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Notice Types</a><a href="#who-section" class="toc-btn">AIS Triggers</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Response Process</a><a href="#documents-section" class="toc-btn">Deadlines</a><a href="#challenges-section" class="toc-btn">Common Triggers</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Deadlines</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Income Tax Notice in Gurugram: Types, Response, and CA Representation</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Income Tax Notice Response in Gurugram Services at a Glance</strong></p>
                    <p>Receiving an income tax notice is not always a cause for alarm - but ignoring it always is. The Income Tax Department issues notices for various reasons: auto-processed intimation (143(1)), defective return correction (139(9)), scrutiny selection (143(2)), income escaping assessment (148), and tax demand (156). With AIS now capturing salary, bank interest, dividends, property transactions, and capital gains, the Department detects mismatches automatically. Every notice has a specific deadline and response requirement. Non-response can lead to ex-parte assessment, penalty, and prosecution.</p>
                </div>
                <p>Gurugram's 2+ million salaried professionals, thousands of property transactions, and large freelancer/business community make it one of the highest notice-volume cities in NCR. Common triggers include AIS-ITR mismatch, wrong ITR form (ITR-1 instead of ITR-2 despite ESOP/capital gains), unreported property sale capital gains, and non-filing by NRIs. For a comprehensive overview of notice types across India, refer to our <a href="/income-tax-notice">Income Tax Notice</a> national guide.</p>
                <div class="table-responsive-wrapper"><table><thead><tr><th>Section</th><th>Notice Type</th><th>Trigger</th><th>Response Deadline</th><th>Severity</th></tr></thead><tbody>
                        <tr><td>139(9)</td><td>Defective Return</td><td>Missing info, wrong form</td><td>15 days</td><td>Low</td></tr>
                        <tr><td>143(1)</td><td>Intimation</td><td>Auto-processed adjustments</td><td>30 days</td><td>Low-Medium</td></tr>
                        <tr><td>143(2)</td><td>Scrutiny Assessment</td><td>Return selected for examination</td><td>15-30 days</td><td>High</td></tr>
                        <tr><td>148/148A</td><td>Reassessment</td><td>Income escaped assessment</td><td>3 months</td><td>High</td></tr>
                        <tr><td>156</td><td>Demand Notice</td><td>Tax, interest, or penalty due</td><td>30 days</td><td>High</td></tr>
                        <tr><td>245</td><td>Refund Adjustment</td><td>Refund adjusted against prior demand</td><td>30 days</td><td>Medium</td></tr>
                    </tbody></table></div><p</p>
                <p>Haryana does not levy Professional Tax, so all income tax notices for Gurugram taxpayers originate from the central Income Tax Department. Faceless assessment under Section 144B means all communication is electronic via the incometax.gov.in e-Proceedings portal - no physical visit to any Income Tax Office is required. This makes CA representation seamless; Patron Accounting's Gurugram office responds to notices on behalf of clients entirely online.</p>
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
                <h2 class="section-title">Types of Income Tax Notices Explained</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Section 139(9): Defective Return Notice</strong> - Issued when the filed ITR has errors: missing information, incorrect form (e.g., ITR-1 instead of ITR-2), incomplete schedules. <strong>Response: Rectify within 15 days</strong> or return is treated as invalid. Common in Gurugram when IT professionals with ESOP income file ITR-1 instead of ITR-2. Learn more about <a href="/income-tax-return">Income Tax Return filing</a>.</p>
                    <p><strong>Section 143(1): Intimation Notice</strong> - Auto-generated by CPC Bengaluru after ITR processing. May show no mismatch, adjustments made, or tax demand. <strong>Response: 30 days.</strong> File Section 154 rectification if adjustments are incorrect. Most common notice for Gurugram salaried employees.</p>
                    <p><strong>Section 143(2): Scrutiny Assessment</strong> - Most significant notice. ITR selected for detailed examination through CASS risk parameters. Can be limited or complete scrutiny. All proceedings faceless under Section 144B. <strong>Requires comprehensive documentation.</strong> Only 1-2% of ITRs are selected. You may also need <a href="/tax-audit">Tax Audit</a> assistance.</p>
                    <p><strong>Section 148/148A: Reassessment</strong> - Issued when AO believes income escaped assessment. Preceded by 148A show-cause. Can be issued within 3-10 years. Common for unreported property sale capital gains or foreign income.</p>
                    <p><strong>Section 156: Demand Notice</strong> - Tax, interest, or penalty determined payable. <strong>Response: 30 days - pay or file appeal.</strong> Includes advance tax defaults and TDS shortfalls.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Income Tax Notice Response in Gurugram:</strong></p>
                    <p><strong>Section 144B:</strong> Faceless assessment - all scrutiny/reassessment communication online, no physical appearance required.</p>
                    <p><strong>AIS (Annual Information Statement):</strong> Captures salary, bank interest, dividends, property transactions, capital gains - basis for automatic mismatch detection.</p>
                    <p><strong>CASS:</strong> Computer Assisted Scrutiny Selection - algorithm-based selection of ITRs for scrutiny based on risk parameters.</p>
                    <p><strong>Section 154:</strong> Rectification request against 143(1) intimation to correct wrong CPC adjustments.</p>
                    <p><strong>Section 270A:</strong> Penalty for underreporting (50% of tax) or misreporting (200% of tax) income.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Income Tax Notice Response in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Tax Notice</span>
                        <strong>Gurugram Response</strong>
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
            <h2 class="section-title">AIS Mismatch - The Most Common Notice Trigger for Gurugram</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>AIS Data Source</th><th>Common Mismatch</th><th>ITR Impact</th><th>Gurugram Context</th></tr></thead><tbody>
                        <tr><td>Salary / Form 16</td><td>Multiple employer TDS not consolidated</td><td>143(1) demand for TDS shortfall</td><td>Job changers in Cyber City</td></tr>
                        <tr><td>Bank Interest (SB + FD)</td><td>Interest from 3-5 banks not declared</td><td>143(1) adjustment adding interest</td><td>Employees with multiple bank accounts</td></tr>
                        <tr><td>Dividends</td><td>Dividend from equity/MF not reported</td><td>143(1) adjustment</td><td>Investors in Gurugram</td></tr>
                        <tr><td>Property (194IA)</td><td>Sale consideration in AIS, no Schedule CG</td><td>142(1) / 143(2) notice</td><td>Golf Course Road, DLF property sellers</td></tr>
                        <tr><td>Capital Gains (broker)</td><td>ESOP/equity sale not in ITR</td><td>139(9) or 143(2)</td><td>IT professionals with ESOPs</td></tr>
                        <tr><td>Foreign Remittance</td><td>Foreign income not declared</td><td>148A / 148 notice</td><td>NRIs, Upwork freelancers</td></tr>
                        <tr><td>High-Value Transactions</td><td>Cash deposits, luxury purchases not matching income</td><td>143(2) scrutiny</td><td>High-net-worth Gurugram residents</td></tr>
                    </tbody></table></div>
                <p><strong>Prevention is better than response:</strong> Filing an accurate ITR with all AIS-reported income prevents most notices. Patron Accounting reconciles AIS data against every Gurugram client's ITR before filing, eliminating mismatches at source.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Income Tax Notice Resolution Services in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>143(1) Intimation Analysis + Rectification</td><td>Reviewing CPC adjustments, identifying incorrect disallowances, and filing Section 154 rectification to reverse wrong demands</td></tr>
                        <tr><td>139(9) Defective Return Correction</td><td>Identifying the defect, preparing corrected return with missing schedules, and resubmitting within 15-day deadline</td></tr>
                        <tr><td>143(2) Scrutiny Representation</td><td>Complete faceless assessment representation under Section 144B: structured responses, evidence compilation, e-Proceedings filing through final order</td></tr>
                        <tr><td>148/148A Reassessment Defence</td><td>Show-cause reply under 148A with factual and legal arguments, objections filing, and reassessment proceeding representation</td></tr>
                        <tr><td>156 Demand Notice Resolution</td><td>Analysing demand computation, identifying errors, filing rectification or appeal, and requesting stay of demand</td></tr>
                        <tr><td>AIS Mismatch Resolution</td><td>Reconciling AIS/TIS data with ITR, identifying mismatch sources (bank interest, dividends, property), filing corrective responses</td></tr>
                        <tr><td>Penalty Appeal and Reduction</td><td>Representation before CIT(A) / ITAT against penalties under Section 270A, 234F, and 271(1)(b)</td></tr>
                        <tr><td>NRI Notice Handling</td><td>Responding to notices for NRI property sellers including TDS credit mismatch, Section 195 discrepancies, and non-filing notices</td></tr>

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
            <h2 class="section-title">How to Respond to an Income Tax Notice</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team follows a structured 6-step process for timely and accurate notice response including verification, documentation, and e-Proceedings submission.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Verify the Notice is Genuine</h3><p class="step-description">Log in to incometax.gov.in. Navigate to 'Pending Actions' > 'e-Proceedings'. Genuine notices appear here. Cross-check the DIN (Document Identification Number). Do not respond to SMS/email links without portal verification. Scam notices are common.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIN checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="none" stroke="#E8712C" stroke-width="2"/><path d="M55 35l3 3 7-7" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Notice Verified</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Read and Identify the Issue</h3><p class="step-description">Identify the section (139(9), 143(1), 143(2), 148, 156, 245). Note the specific issue, demand amount, and response deadline. Each notice type requires a different response strategy.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deadline noted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">Issue Identified</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Gather Documentation</h3><p class="step-description">Collect ITR acknowledgement, Form 16/130, Form 26AS/AIS, bank statements, investment proofs, property documents, capital gains statements, and any other records addressing the specific issue.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Evidence compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Records ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="65" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="60" cy="40" r="8" fill="none" stroke="#25D366" stroke-width="1.5"/><path d="M57 40l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Compiled</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Prepare the Response</h3><p class="step-description">For 139(9): rectify and resubmit ITR. For 143(1): file Section 154 rectification. For 143(2): prepare detailed written reply with supporting documents. For 148A: draft legal show-cause reply. For 156: verify demand and pay or appeal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Reply drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Arguments structured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="11" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">REPLY</text></svg></div><span class="illustration-label">Response Ready</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File Response on Portal</h3><p class="step-description">Submit through e-Proceedings section of incometax.gov.in. Upload reply and supporting documents within the deadline. Keep acknowledgement receipt. For scrutiny, multiple rounds of response may be required.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed electronically</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Receipt saved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Response Filed</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Track and Follow Up</h3><p class="step-description">Monitor case status on portal. For 143(2) scrutiny, AO must pass assessment order within 12 months from end of AY. If the order creates a demand, evaluate whether to accept, pay, or file appeal before CIT(A) within 30 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Status tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Order reviewed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 10L100 85H20Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 55l5 5 12-12" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Case Closed</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Notice Response Deadlines - Do Not Miss</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Notice Section</th><th>Response Deadline</th><th>Consequence of Non-Response</th></tr></thead><tbody>
                    <tr><td>139(9) Defective Return</td><td>15 days from notice</td><td>Return treated as invalid (never filed)</td></tr>
                    <tr><td>143(1) Intimation</td><td>30 days</td><td>Adjustments become final, demand enforceable</td></tr>
                    <tr><td>142(1) Inquiry</td><td>As specified in notice</td><td>Penalty Rs 10,000; best judgment assessment</td></tr>
                    <tr><td>143(2) Scrutiny</td><td>15-30 days typically</td><td>Best judgment assessment under Section 144; adverse order</td></tr>
                    <tr><td>148 Reassessment</td><td>3 months from notice</td><td>Return deemed unfiled; ex-parte assessment</td></tr>
                    <tr><td>156 Demand</td><td>30 days</td><td>Enforced collection; bank attachment</td></tr>
                    <tr><td>245 Refund Adjustment</td><td>30 days</td><td>Refund automatically adjusted against demand</td></tr>
                    </tbody></table></div>
                <div class="highlight-box" style="margin-top:20px;"><p><strong>CRITICAL:</strong> Missing a notice deadline converts a manageable compliance issue into an enforced demand with penalties. Every day of delay increases the risk. Contact a CA immediately upon receiving any notice. Patron Accounting's Gurugram office offers emergency same-day consultations for deadline-critical notices.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Notice Triggers for Gurugram Taxpayers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>AIS-ITR Income Mismatch</td><td>Bank interest, dividends, property not reported in ITR</td><td>Pre-filing AIS reconciliation matching every entry against ITR before submission</td></tr>
                        <tr><td>Wrong ITR Form</td><td>ITR-1 filed despite ESOP/capital gains triggers 139(9)</td><td>Correct form identification (ITR-2 for capital gains) and resubmission within 15 days</td></tr>
                        <tr><td>Unreported Property Sale</td><td>194IA TDS in 26AS without matching Schedule CG</td><td>Complete capital gains computation with 12.5%/20% comparison and exemption claims</td></tr>
                        <tr><td>Multiple Employer TDS Gap</td><td>Combined income in higher slab creates shortfall</td><td>Correct multi-employer consolidation with slab recomputation and self-assessment tax</td></tr>
                        <tr><td>Non-Filing by NRIs</td><td>NRI assumes no filing needed if TDS was deducted</td><td>Return filing with TDS credit claim, DTAA benefits, and demand reversal</td></tr>

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
            <h2 class="section-title">Income Tax Notice Response Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>139(9) Defective Return Correction</td><td>Starting from INR 2,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>143(1) Intimation Review + Rectification</td><td>Starting from INR 2,000-5,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>143(2) Scrutiny - Limited</td><td>Starting from INR 10,000-25,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>143(2) Scrutiny - Complete</td><td>Starting from INR 25,000-50,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>148/148A Reassessment Defence</td><td>Starting from INR 15,000-50,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Government Filing Fees</td><td>Nil</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Income Tax Notice Response in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20an%20income%20tax%20notice%20in%20Gurugram.%20Please%20help." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Notice Response and Assessment Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>139(9) Defective Return</td><td>15 days from notice - rectify and resubmit</td></tr>
                        <tr><td>143(1) Intimation</td><td>30 days - accept or file Section 154 rectification</td></tr>
                        <tr><td>143(2) Scrutiny Response</td><td>15-30 days as specified - provide documentation</td></tr>
                        <tr><td>148A Show Cause</td><td>As specified - submit objections</td></tr>
                        <tr><td>156 Demand Notice</td><td>30 days - pay or file appeal</td></tr>
                        <tr><td>Assessment Order (143(2))</td><td>Within 12 months from end of AY</td></tr>
                        <tr><td>CIT(A) Appeal</td><td>30 days from assessment order</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Every notice has a non-negotiable deadline. Non-response triggers ex-parte assessment, penalties up to 200% of tax, and potential prosecution. CA representation under faceless assessment is seamless and electronic. Act immediately upon receiving any notice.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Notice Response in Gurugram?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram Office</h3><p class="feature-text">Golf Course Extension Road - walk-in consultations available for urgent notice matters. Emergency same-day consultations for deadline-critical notices.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">All Notice Types</h3><p class="feature-text">139(9) defective returns, 143(1) rectifications, 143(2) scrutiny, 148 reassessment, 156 demand, and CIT(A) appeals. Hundreds of notices resolved for Gurugram taxpayers.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div><h3 class="feature-title">Faceless Assessment</h3><p class="feature-text">Optimised for Section 144B e-Proceedings portal. Structured responses, document uploads, and case tracking entirely through the electronic assessment workflow.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Fast Turnaround</h3><p class="feature-text">Defective return corrected within 3 working days. 143(1) rectification within 5 days. Scrutiny response within 10 days. Emergency same-day consultations available.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">AIS Resolution</h3><p class="feature-text">Systematic mismatch identification and rectification. Pre-filing AIS reconciliation prevents notices. Post-notice AIS correction resolves existing mismatches.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Appeal Expertise</h3><p class="feature-text">CIT(A) and ITAT representation for penalty reduction and adverse assessment orders. Complete appeal lifecycle management from filing to final order.</p></article>
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
                <blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Received a 143(2) scrutiny notice for property sale capital gains. Patron prepared the complete response, uploaded all documents, and represented me through 4 rounds of queries. Assessment closed with zero additional demand."</p><p style="font-weight:700;font-size:14px;margin:0;">- Property Seller, Golf Course Road</p></blockquote>
                <blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Got a 143(1) demand for Rs 1.8 lakh because my bank FD interest was not declared. Patron filed revised return and 154 rectification. Demand reversed within 45 days. Total fee was Rs 5,000."</p><p style="font-weight:700;font-size:14px;margin:0;">- IT Professional, DLF Cyber City</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Self-Response / Local CA for Notice Handling</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Self-Response / Local CA</th></tr></thead>
                    <tbody>
                        <tr><td>Notice Expertise</td><td>Dedicated team, all sections handled</td><td>Limited experience, may misinterpret</td></tr>
                        <tr><td>Faceless Assessment</td><td>Optimised for e-Proceedings portal</td><td>Unfamiliar with electronic workflow</td></tr>
                        <tr><td>Scrutiny Representation</td><td>Complete cycle: response, evidence, follow-up, order review</td><td>Ad-hoc responses, missed follow-ups</td></tr>
                        <tr><td>AIS Resolution</td><td>Systematic mismatch identification</td><td>Manual checking, misses entries</td></tr>
                        <tr><td>Pricing</td><td>From Rs 2,000 (simple) to Rs 50,000 (scrutiny)</td><td>Variable</td></tr>
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
            <h2 class="section-title">Related Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/income-tax-notice">Income Tax Notice (National)</a> - Broader overview across India</li><li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a> - Prevent notices with accurate ITR filing</li><li><a href="/tax-audit">Tax Audit</a> - Section 44AB audit for businesses</li><li><a href="/itr-for-property-sale">ITR for Property Sale</a> - Capital gains computation</li><li><a href="/itr-for-salary">ITR for Salary</a> - Salary ITR filing</li></ul>

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
                
                <p><strong>Governing Law:</strong> Income Tax Act, 1961 (transitioning to Income Tax Act, 2025) | Faceless Assessment: Section 144B</p>
                <p><strong>Key Notice Sections:</strong> 139(9) (defective) | 142(1) (inquiry) | 143(1) (intimation) | 143(2) (scrutiny) | 144 (best judgment) | 144B (faceless) | 148/148A (reassessment) | 156 (demand) | 245 (refund adjustment) | 270A (underreporting penalty)</p>
                <p><strong>Penalty Framework:</strong> Section 270A: 50% (underreported) / 200% (misreported). Section 234F: Rs 5,000 late filing. Section 271(1)(b): Rs 10,000 non-compliance.</p>
                <p><strong>Appeal Hierarchy:</strong> CIT(A) (30 days) > ITAT > High Court > Supreme Court</p>
                <p><strong>Portal:</strong> <a href="https://incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> (e-Proceedings section)</p>
                <p><strong>Haryana/Gurugram Context:</strong> Gurugram falls under Principal Commissioner of Income Tax, Gurugram. All scrutiny is through NaFAC (Delhi) under Section 144B. No physical appearance required. Haryana does not levy Professional Tax.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Income Tax Notice in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about income tax notices, response procedures, and CA representation for Gurugram taxpayers.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Income Tax Notice Response in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Why did I receive an income tax notice?</h3>
                        <div class="faq-expanded__a"><p>Common reasons: AIS-ITR mismatch (bank interest, dividends, property sale not reported), wrong ITR form, excessive deduction claims, non-filing despite taxable income, high-value transactions without matching income, TDS shortfall from multiple employers, or random scrutiny selection under CASS.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to check income tax notice online?</h3>
                        <div class="faq-expanded__a"><p>Log in to incometax.gov.in with your PAN. Navigate to 'Pending Actions' > 'e-Proceedings' to see active notices. Verify the DIN (Document Identification Number) on any notice received via email. Only notices visible on the portal are genuine. Do not click links in unsolicited SMS or emails.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is a 143(1) intimation notice?</h3>
                        <div class="faq-expanded__a"><p>Section 143(1) intimation is an auto-generated communication from CPC Bengaluru after processing your ITR. It may show no mismatch, adjustments made, or tax demand. It is NOT a scrutiny notice. If adjustments are incorrect, file a rectification under Section 154 within 30 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is scrutiny notice 143(2)?</h3>
                        <div class="faq-expanded__a"><p>A 143(2) notice means your ITR is selected for detailed scrutiny by an Assessing Officer. Can be limited or complete scrutiny. All proceedings are faceless under Section 144B. You must provide documentary evidence for all claims. Only 1-2% of ITRs are selected. Professional CA representation is strongly recommended.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if I do not respond?</h3>
                        <div class="faq-expanded__a"><p>For 139(9): return treated as invalid. For 142(1): penalty Rs 10,000 and best judgment assessment. For 143(2): ex-parte assessment under Section 144 with maximum demand. For 156: enforced collection including bank attachment. Non-response always results in worse outcomes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do I need a CA for income tax notice?</h3>
                        <div class="faq-expanded__a"><p>For simple 139(9) and 143(1) notices, a CA ensures correct rectification. For 143(2) scrutiny, 148 reassessment, and 156 demand, professional CA representation is essential. The response requires structured legal arguments, evidence compilation, and strategic positioning.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the cost of notice response in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Fees start from Rs 2,000 for defective return correction up to Rs 50,000 for complete scrutiny representation. Demand notice resolution is Rs 5,000-15,000. CIT(A) appeal starts from Rs 15,000. Emergency consultations available for deadline-critical notices.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can a CA respond on my behalf?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under faceless assessment (Section 144B), a CA can be authorised to respond to all notices and represent through the entire assessment process via the e-Proceedings portal. No physical appearance is required. Patron Accounting handles all notice responses electronically on behalf of clients.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Income tax notice aaye toh kya karein?</strong> Pehle incometax.gov.in portal par login karke verify karo. Notice section aur deadline note karo. Jaldi se jaldi CA se contact karo. Ignore mat karo.</p>
                <p><strong>143(1) aur 143(2) mein kya farak hai?</strong> 143(1) auto-processed intimation hai (CPC se). 143(2) scrutiny notice hai (Assessing Officer se). 143(2) bahut serious hai - poora documentation chahiye.</p>
                <p><strong>Notice ka jawab kitne din mein dena hota hai?</strong> 139(9): 15 din. 143(1): 30 din. 143(2): notice mein likha hoga. 156: 30 din. Deadline miss mat karo.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Received a Notice? Every Day of Delay Increases Risk</h2>
            <div class="content-text">
                
                <p>Income tax notices have strict deadlines: 15 days for defective returns, 30 days for demand notices. Non-response triggers ex-parte assessment, penalties up to 200%, and prosecution. AIS now captures all income sources - mismatches are automatically detectable. Faceless assessment under 144B means all responses are electronic. CA representation is available without any physical visit.</p>
                <p><strong>Act immediately. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20an%20income%20tax%20notice%20in%20Gurugram.%20Please%20help." target="_blank">WhatsApp us</a> now.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Income Tax Notice Resolution in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Income tax notice response in Gurugram requires prompt action, accurate documentation, and professional representation. Whether you received a 143(1) intimation, a 139(9) defective return notice, a 143(2) scrutiny, or a 148 reassessment, every notice has a defined response window and specific compliance requirement.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road provides CA-assisted notice response including 143(1) rectification, 139(9) correction, 143(2) scrutiny representation, 148 reassessment defence, 156 demand resolution, AIS mismatch fixing, and CIT(A) appeals.</p>
                <p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted income tax notice resolution partner for taxpayers across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20an%20income%20tax%20notice%20in%20Gurugram.%20Please%20help." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Income%20Tax%20Notice%20Gurugram&body=Hi%2C%20I%20received%20an%20income%20tax%20notice.%20Please%20help." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Income Tax Notice Response - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert notice response services across major Indian cities</p>
   
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Notice Response</div><div class="pa-block-sub">Select your city for localised notice response services</div><div class="pa-city-grid">
                    <a href="/income-tax-notice/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/income-tax-notice/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/income-tax-notice/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                </div></div>
            <div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end tax compliance support in Gurugram</div><div class="pa-cross-grid">
                    <a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-filing-for-salary/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Salary</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-for-property-sale/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Property Sale</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-for-business/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/tax-planning-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning Services</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a>
                </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on Income Tax Notice Response in Gurugram is reviewed quarterly. Notice sections, faceless assessment rules, and penalty provisions are verified against the latest CBDT circulars.</p>
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
