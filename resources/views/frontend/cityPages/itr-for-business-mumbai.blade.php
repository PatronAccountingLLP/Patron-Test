
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ITR for Business in Mumbai - ITR-3, ITR-4 & 44AD</title>
    <meta name="description" content="CA-assisted business ITR filing in Mumbai. ITR-3, ITR-4, ITR-5, ITR-6 for proprietors, firms, LLPs, companies. Tax audit, presumptive scheme. Call +91 945 945 6700.">
    <link rel="canonical" href="/itr-for-business/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Business in Mumbai - ITR-3, ITR-4 & 44AD">
    <meta property="og:description" content="CA-assisted business ITR filing in Mumbai. ITR-3, ITR-4, ITR-5, ITR-6 for proprietors, firms, LLPs, companies. Tax audit, presumptive scheme. Call +91 945 945 6700.">
    <meta property="og:url" content="/itr-for-business/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Business in Mumbai - ITR-3, ITR-4 & 44AD">
    <meta name="twitter:description" content="CA-assisted business ITR filing in Mumbai. ITR-3, ITR-4, ITR-5, ITR-6 for proprietors, firms, LLPs, companies. Tax audit, presumptive scheme. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR for Business in Mumbai",
      "description": "CA-assisted business ITR filing in Mumbai. ITR-3, ITR-4, ITR-5, ITR-6 for proprietors, firms, LLPs, companies. Tax audit, presumptive scheme. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/itr-for-business/mumbai",
      "serviceType": "ITR for Business in Mumbai",
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
        "url": "https://www.patronaccounting.com/itr-for-business/mumbai",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "3",
          "maxPrice": "5000",
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
          "name": "ITR for Business: Expert CA Filing",
          "item": "https://www.patronaccounting.com/itr-for-business"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ITR for Business in Mumbai",
          "item": "https://www.patronaccounting.com/itr-for-business/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which IT office handles business ITR in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Business ITRs are filed electronically on incometax.gov.in and processed centrally by CPC Bengaluru. The jurisdictional Assessing Officer (based on PAN zone) handles scrutiny assessments and demand notices for Mumbai businesses. Tax audit reports are also uploaded on the portal. No physical filing is required. Patron handles all electronic filings and coordinates with the jurisdictional AO for Mumbai business clients."
          }
        },
        {
          "@type": "Question",
          "name": "Which ITR form should my business file?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sole proprietors and individuals with business income file ITR-3 (regular) or ITR-4 (presumptive under 44AD/44ADA). Partnership firms and LLPs file ITR-5. Companies file ITR-6. The form depends on entity type, turnover, and whether presumptive taxation is opted. Filing the wrong form results in a defective return notice under Section 139(9). Patron determines the correct form during initial assessment."
          }
        },
        {
          "@type": "Question",
          "name": "What is presumptive taxation and who can use it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Presumptive taxation under Sections 44AD (business) and 44ADA (professionals) allows small businesses to declare profit at prescribed rates without maintaining detailed books. Section 44AD: 8% of turnover (6% for digital) for businesses with turnover up to Rs 3 crore (if 95%+ digital). Section 44ADA: 50% of receipts for professionals with receipts up to Rs 75 lakh. File ITR-4. Not available for companies or LLPs. Ideal for Mumbai's small traders at Dadar and professionals at Fort."
          }
        },
        {
          "@type": "Question",
          "name": "When is tax audit required for Mumbai businesses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tax audit under Section 44AB is required when business turnover exceeds Rs 1 crore (Rs 10 crore if 95%+ receipts are digital), or professional gross receipts exceed Rs 50 lakh. Also required if a presumptive filer declares profit below prescribed rates. The audit report (Form 3CA/3CB-3CD) must be uploaded by 30 September. ITR due date extends to 31 October for audit cases. Patron coordinates tax audits for all Mumbai businesses."
          }
        },
        {
          "@type": "Question",
          "name": "What is the due date for business ITR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For businesses not requiring audit: 31 July. For businesses requiring tax audit (Section 44AB): 31 October. For companies with international transactions requiring transfer pricing report: 30 November. Late filing attracts Rs 5,000 fee under Section 234F (Rs 1,000 if income below Rs 5 lakh) plus interest under 234A/234B. Timely filing is essential to carry forward business losses."
          }
        },
        {
          "@type": "Question",
          "name": "Should I choose New Tax Regime or Old Regime for business?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The New Tax Regime under Section 115BAC is default. Business owners wanting Old Regime must file Form 10-IEA before the ITR due date – and this choice is irrevocable for the FY (unlike salaried individuals). Old Regime allows deductions (80C, 80D, HRA, business expenses). New Regime offers lower rates but fewer deductions. Patron computes tax under both regimes before recommending."
          }
        },
        {
          "@type": "Question",
          "name": "Can a loss-making Mumbai startup file business ITR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, and it is essential. Filing ITR even with losses ensures: loss carry-forward for set-off against future profits (business loss for 8 years, unabsorbed depreciation indefinitely), compliance for funding due diligence, and clean director records. Many Powai startups with pre-revenue operations must file ITR-6 declaring the loss for carry-forward benefit. Quick Answers Business ITR kab file karna hota hai? Non-audit: 31 July. Audit cases: 31 October. Transfer pricing: 30 November. Late filing pe Rs 5,000 fee lagti hai. Kaunsa ITR form use kare? Proprietor: ITR-3 ya ITR-4. Firm/LLP: ITR-5. Company: ITR-6. Presumptive (44AD/44ADA) ke liye ITR-4. Wrong form se Section 139(9) defective return notice aata hai. Tax audit kab zaruri hai? Turnover Rs 1 crore se zyada (Rs 10 crore if 95%+ digital). Professional receipts Rs 50 lakh se zyada. 44AD/44ADA mein prescribed rate se kam profit declare kiya toh bhi audit lagega."
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
                        ITR for Business in Mumbai: File the Right Form, Maximise Deductions, Stay Compliant
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Proprietors/Freelancers:</span> ITR-3 (regular) or ITR-4 Sugam (presumptive under 44AD/44ADA)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Firms &amp; LLPs:</span> ITR-5 | Companies: ITR-6 | Tax audit coordination included</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Presumptive Limits:</span> Section 44AD: Rs 3 crore (digital 95%+) | Section 44ADA: Rs 75 lakh</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> 31 July (non-audit) | 31 October (audit cases) | Late fee Rs 5,000</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office at Marine Lines or get started online &ndash; 10,000+ businesses served with 4.9&#9733; Google rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Business%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ITR for Business',
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
    'ctaText'    => 'Get your business ITR filed by a CA team that handles every entity type &ndash; ITR-3, ITR-4, ITR-5, and ITR-6.',
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
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Compare</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for Business in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Business Services at a Glance</strong></p>
                    <p>Every business in Mumbai &ndash; whether a sole proprietorship at Dadar, a startup Pvt Ltd at Powai, an LLP at Fort, a manufacturing company at Andheri MIDC, or a listed corporation at BKC &ndash; must file an income tax return reporting business income, deductions, and tax payable. The ITR form depends on the business structure and turnover: ITR-3 for individuals/HUFs with regular business income, ITR-4 (Sugam) for presumptive taxation under Sections 44AD/44ADA/44AE, ITR-5 for firms and LLPs, and ITR-6 for companies. Mumbai files the highest volume of business ITRs in India.</p>
                </div>
                <p>Mumbai's business landscape generates the highest ITR filing volumes in India. BKC and Nariman Point house corporate headquarters filing ITR-6 with complex transfer pricing, international transactions, and multi-subsidiary consolidation. Powai and Andheri are home to thousands of startups &ndash; Pvt Ltd companies filing ITR-6 and sole proprietors filing ITR-3 or ITR-4. Fort and Marine Lines host CA firms, law practices, and consultancies filing ITR-3/4 (professionals) and ITR-5 (LLPs). Dadar and Bhuleshwar's trading community files ITR-3/4 for proprietorship businesses. Andheri MIDC and Thane-Belapur manufacturers file ITR-6 (companies) or ITR-5 (firms) with tax audit reports. Learn more about <a href="/itr-for-business">ITR for Business across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines provides complete business ITR filing &ndash; from ITR form selection and presumptive vs regular scheme advisory to books preparation, tax audit coordination, advance tax planning, and e-filing on the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">income tax portal</a> for every business structure in Mumbai.</p>
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
                <h2 class="section-title">What Is ITR for Business?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ITR for business is the annual income tax return filed by business entities and individuals earning business or professional income, reporting total income, allowable deductions, tax liability, and advance tax/TDS credits to the Income Tax Department under the Income Tax Act.</p>
                    <p>Business ITR filing differs fundamentally from salaried ITR filing. Business entities must maintain books of accounts (unless under presumptive taxation), compute profit under 'Profits and Gains from Business or Profession', claim business deductions (depreciation, rent, salaries, utilities, professional fees), account for advance tax payments, and potentially undergo tax audit if turnover exceeds prescribed limits. The ITR form varies by entity type: individuals use ITR-3 or ITR-4, firms and LLPs use ITR-5, and companies use ITR-6.</p>
                    <p>For Mumbai businesses, ITR complexity scales with size and structure. A Dadar trader with Rs 50 lakh turnover can file ITR-4 under presumptive taxation (44AD) with minimal documentation &ndash; declaring 8% of turnover as profit. A Powai startup Pvt Ltd with Rs 5 crore revenue must file ITR-6 with audited financial statements, detailed P&amp;L, balance sheet, and tax audit report. A Fort CA firm with Rs 40 lakh receipts files ITR-4 under Section 44ADA (50% of receipts as profit). A BKC multinational subsidiary files ITR-6 with transfer pricing documentation and international transaction disclosures.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Business:</strong></p>
                    <ul>
                        <li><strong>ITR-3:</strong> For individuals/HUFs with business or professional income maintaining regular books of accounts</li>
                        <li><strong>ITR-4 (Sugam):</strong> Presumptive income return under Sections 44AD (business: 8%/6%), 44ADA (professionals: 50%), 44AE (transport)</li>
                        <li><strong>ITR-5:</strong> For partnership firms, LLPs, AOPs, and BOIs</li>
                        <li><strong>ITR-6:</strong> For companies except those claiming Section 11 exemption</li>
                        <li><strong>Section 44AB:</strong> Tax audit when turnover exceeds Rs 1 crore (Rs 10 crore if digital receipts 95%+)</li>
                        <li><strong>Section 115BAC:</strong> New Tax Regime (default); opt-out via Form 10-IEA (irrevocable for FY for business income)</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Business</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA-Assisted</span>
                        <strong>Business ITR Filing</strong>
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
            <h2 class="section-title">Which Mumbai Businesses Must File Business ITR?</h2>
            <div class="content-text">
                
                <p><strong>Sole proprietors and traders at Dadar, Bhuleshwar, and Fort</strong> &ndash; Individual business owners running trading, retail, or service businesses. File ITR-3 (if maintaining regular books) or ITR-4 (if eligible for presumptive taxation under 44AD with turnover up to Rs 3 crore). Mumbai's trading community at Bhuleshwar and Dadar has the largest concentration of ITR-4 filers.</p>
                <p><strong>Startup Pvt Ltd companies at Powai, Andheri, and Lower Parel</strong> &ndash; Companies registered under the Companies Act must file ITR-6 regardless of turnover or profitability. Even loss-making startups must file ITR-6 reporting the loss for carry-forward. Tax audit required if turnover exceeds Rs 1 crore (Rs 10 crore with 95%+ digital receipts). Businesses may also need <a href="/private-limited-company-compliance">Private Limited Company Compliance</a> services.</p>
                <p><strong>CA firms, law practices, and consultants at Fort and Marine Lines</strong> &ndash; Professionals earning business income file ITR-3 (regular) or ITR-4 under Section 44ADA (presumptive &ndash; 50% of receipts as profit, up to Rs 75 lakh). Mumbai has the highest concentration of professional ITR filers in India.</p>
                <p><strong>Partnership firms and LLPs at Fort and BKC</strong> &ndash; File ITR-5 with firm income computation, partner remuneration and interest under Section 40(b) limits. From FY 2025-26, Section 194T TDS on partner payments adds reconciliation requirements. <a href="/pvt-llp-compliance">LLP Compliance</a> is also essential for these entities.</p>
                <p><strong>Manufacturing companies at Andheri MIDC and Thane-Belapur</strong> &ndash; Companies filing ITR-6 with depreciation schedules, inventory valuation, GST reconciliation, and tax audit reports. Require <a href="/statutory-audit">Statutory Audit</a> and tax audit coordination.</p>
                <p><strong>BKC/Nariman Point MNC subsidiaries</strong> &ndash; Filing ITR-6 with transfer pricing reports (Section 92E), international transaction disclosures, and BEPS compliance. Due date: 30 November for transfer pricing cases.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Business ITR Filing Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ITR Form Selection &amp; Tax Advisory</td><td>Correct form determination (ITR-3/4/5/6) based on entity type, turnover, income structure. Presumptive vs regular and New vs Old Tax Regime analysis for Mumbai businesses</td></tr>
                        <tr><td>Books of Accounts Preparation</td><td>P&amp;L account, balance sheet, and supporting schedules from Tally, Zoho Books, QuickBooks, or manual ledgers used by Mumbai businesses</td></tr>
                        <tr><td>Presumptive Income Computation</td><td>44AD (8%/6% of turnover) and 44ADA (50% of receipts) computation and ITR-4 preparation for Dadar traders and Fort professionals</td></tr>
                        <tr><td>Tax Audit Coordination (S44AB)</td><td>CA audit report (Form 3CA/3CB-3CD) coordination and portal upload by 30 September for businesses exceeding turnover thresholds</td></tr>
                        <tr><td>Advance Tax Planning</td><td>Quarterly computation (15 Jun, 15 Sep, 15 Dec, 15 Mar) to avoid interest under Section 234B/234C for fluctuating Mumbai business income</td></tr>
                        <tr><td>Company ITR-6 Preparation</td><td>Comprehensive ITR-6 with P&amp;L, balance sheet, depreciation, MAT/AMT (S115JB), Schedule SH/AL. Transfer pricing for BKC MNC subsidiaries</td></tr>
                        <tr><td>LLP/Firm ITR-5 Preparation</td><td>Firm income computation, partner remuneration/interest (Section 40(b) limits), S194T TDS reconciliation, partner income allocation</td></tr>
                        <tr><td>Loss Carry-Forward Advisory</td><td>Timely filing to preserve business loss carry-forward (8 years) and unabsorbed depreciation (indefinitely) for Powai startups</td></tr>

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
            <h2 class="section-title">Business ITR Filing Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's Mumbai team follows a structured 6-step process. All filings are electronic on incometax.gov.in &ndash; no physical submission required. Our Marine Lines office handles everything digitally.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Determine ITR Form &amp; Tax Regime</h3>
        <p class="step-description">Identify the correct form: ITR-3, ITR-4, ITR-5, or ITR-6 based on entity type and turnover. For FY 2025-26, the New Tax Regime is default. Business owners wanting Old Regime must file Form 10-IEA before the due date (irrevocable for the FY).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form selection advisory</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Regime comparison</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Form Selected</span><span class="step-number-large">01</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Finalise Books &amp; Financial Statements</h3>
        <p class="step-description">Prepare or finalise P&amp;L account and balance sheet from accounting records. For presumptive filers (ITR-4), no detailed books required &ndash; only turnover and profit declaration. For ITR-3/5/6 filers, complete books with depreciation, debtors/creditors, loans, and investments.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tally/Zoho integration</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Financials prepared</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="18" y1="25" x2="48" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="73" y1="25" x2="103" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Books Ready</span><span class="step-number-large">02</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Complete Tax Audit (if applicable)</h3>
        <p class="step-description">If turnover exceeds Rs 1 crore (Rs 10 crore with 95%+ digital receipts), get tax audit done by a CA. Audit report (Form 3CA-3CD or 3CB-3CD) uploaded on the income tax portal by 30 September. Patron coordinates tax audit with the statutory auditor for Mumbai companies.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit coordinated</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Report uploaded</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M75 55l15 15" stroke="#14365F" stroke-width="3" stroke-linecap="round"/><path d="M50 40l7 7 14-14" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Audit Done</span><span class="step-number-large">03</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Compute Tax Liability &amp; Reconcile Credits</h3>
        <p class="step-description">Compute total business income after deductions. Apply tax rates (slab for individuals, 30% for firms/LLPs, 22%/25%/30% for companies). Set off losses, credit advance tax and TDS from Form 26AS/AIS. For BKC corporates, compute MAT under Section 115JB.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS/advance tax credited</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Net tax computed</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="42" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="75" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="45" y="46" font-size="10" fill="#14365F" text-anchor="middle" font-family="Arial">&#8377;</text><text x="75" y="46" font-size="10" fill="#10B981" text-anchor="middle" font-family="Arial">&#10003;</text></svg></div><span class="illustration-label">Tax Computed</span><span class="step-number-large">04</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">File ITR on incometax.gov.in</h3>
        <p class="step-description">Log in to the e-filing portal. Select the applicable ITR form. Fill all schedules: business income, deductions, tax computation, TDS details, advance tax, and balance sheet/P&amp;L. Validate and submit using DSC (mandatory for companies) or Aadhaar OTP/EVC.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed before deadline</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Acknowledgment received</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><rect x="35" y="40" width="40" height="8" rx="3" fill="#14365F" opacity="0.15"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">ITR Filed</span><span class="step-number-large">05</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">E-Verify &amp; Respond to Processing</h3>
        <p class="step-description">E-verify the ITR within 30 days using Aadhaar OTP, net banking, or DSC. CPC Bengaluru processes the return and issues intimation under Section 143(1). If demand notice or refund adjustment is issued, respond within 30 days. Patron provides scrutiny representation for Mumbai businesses.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-verified</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CPC intimation handled</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">06</span></div></div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Business ITR Filing in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>PAN and Aadhaar:</strong> Business owner's PAN (linked with Aadhaar). Company/LLP PAN for entity-level filing</li>
                    <li><strong>Financial Statements:</strong> Audited or management P&amp;L and balance sheet for the FY. Not required for presumptive filers (ITR-4)</li>
                    <li><strong>Bank Statements:</strong> All business bank accounts for the FY, reconciled with books of accounts</li>
                    <li><strong>GST Returns:</strong> GSTR-3B and GSTR-1 for turnover reconciliation. GST turnover must match ITR declared turnover</li>
                    <li><strong>TDS Certificates:</strong> Form 16A from clients who deducted TDS. Form 26AS/AIS for TDS/TCS credit reconciliation</li>
                    <li><strong>Investment and Deduction Proofs:</strong> Section 80C (PPF, ELSS, LIC), 80D (medical insurance), 24(b) (home loan interest) for individuals</li>
                    <li><strong>Tax Audit Report:</strong> Form 3CA-3CD or 3CB-3CD if tax audit is applicable. Uploaded on portal before 30 September</li>
                    <li><strong>Transfer Pricing Report:</strong> Form 3CEB for companies with international transactions exceeding Rs 1 crore (BKC MNC subsidiaries)</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> Businesses with both online and offline revenue streams (e-commerce + retail, SaaS + consulting) must correctly bifurcate digital vs non-digital receipts to determine the applicable presumptive threshold (Rs 3 crore vs Rs 2 crore) and tax audit limit (Rs 10 crore vs Rs 1 crore). Patron analyses payment gateway reports, bank statements, and POS data for correct classification.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Business ITR Filing in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>ITR Form Selection Confusion</td><td>Wrong form results in defective return notice under Section 139(9). Powai founders with salary + freelance income need ITR-3, not ITR-4</td><td>Systematic entity-type and income analysis; correct form determination before filing</td></tr>
                        <tr><td>New Tax Regime Lock-In</td><td>Form 10-IEA opt-out is irrevocable for FY for business income &ndash; unlike salaried individuals who switch annually</td><td>Dual-regime tax computation before decision; Old vs New comparison report for each client</td></tr>
                        <tr><td>Presumptive Opt-Out Lock (5 Years)</td><td>Exceeding Rs 3 crore triggers 5-year regular filing lock-out; catches growing e-commerce sellers at Andheri</td><td>Turnover monitoring; proactive advisory when approaching threshold</td></tr>
                        <tr><td>GST-ITR Turnover Mismatch</td><td>CPC Bengaluru flags discrepancies between ITR and GSTR-1/3B; timing differences and exempt supplies cause mismatches</td><td>Pre-filing GST-ITR turnover reconciliation for all Mumbai business clients</td></tr>
                        <tr><td>Tax Audit Threshold Uncertainty</td><td>Determining 95% digital receipts for Rs 10 crore limit requires payment mode analysis (UPI/card vs cash)</td><td>Payment gateway, bank, and POS data analysis for correct threshold determination</td></tr>

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
            <h2 class="section-title">Business ITR Filing Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR Filing (Government)</td><td>Nil &ndash; no fee on incometax.gov.in</td></tr>
                        <tr><td>Late Fee (Section 234F)</td><td>Rs 5,000 (Rs 1,000 if income &lt; Rs 5 lakh)</td></tr>
                        <tr><td>Interest &ndash; Late Payment (234B)</td><td>1% per month on shortfall if advance tax &lt; 90% of assessed tax</td></tr>
                        <tr><td>Tax Audit (Section 44AB)</td><td>Rs 25,000 &ndash; Rs 1,50,000+ (CA fees based on turnover)</td></tr>
                        <tr><td>Patron Fee &ndash; ITR-4 Presumptive</td><td>Starting Rs 3,000</td></tr>
                        <tr><td>Patron Fee &ndash; ITR-3 Regular</td><td>Starting Rs 5,000</td></tr>
                        <tr><td>Patron Fee &ndash; ITR-5 Firm/LLP</td><td>Starting Rs 7,000</td></tr>
                        <tr><td>Patron Fee &ndash; ITR-6 Company</td><td>Starting Rs 10,000</td></tr>
                        <tr><td>Patron &ndash; Accounting + ITR Bundle</td><td>Starting Rs 8,000/month (year-round books + annual ITR)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Business consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Business%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Business ITR Filing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Advance Tax &ndash; Q1 (15%)</td><td>15 June</td></tr>
                        <tr><td>Advance Tax &ndash; Q2 (45% cumulative)</td><td>15 September</td></tr>
                        <tr><td>Advance Tax &ndash; Q3 (75% cumulative)</td><td>15 December</td></tr>
                        <tr><td>Advance Tax &ndash; Q4 (100%)</td><td>15 March</td></tr>
                        <tr><td>Tax Audit Report Upload</td><td>30 September</td></tr>
                        <tr><td>Transfer Pricing Report</td><td>31 October</td></tr>
                        <tr><td>ITR Filing (Non-Audit)</td><td>31 July</td></tr>
                        <tr><td>ITR Filing (Audit Cases)</td><td>31 October</td></tr>
                        <tr><td>ITR Filing (Transfer Pricing)</td><td>30 November</td></tr>
                        <tr><td>Belated/Revised Return</td><td>31 December</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Patron files 15 days before each statutory deadline</strong> to allow buffer for portal issues and client review.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Business ITR in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Mumbai Office at Marine Lines</h3><p class="feature-text">Walk-in consultations for ITR form selection, tax regime advisory, and business ITR preparation. Central location for BKC, Powai, Fort, Dadar, and Andheri businesses.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">All Entity Types Covered</h3><p class="feature-text">ITR-3, ITR-4, ITR-5, and ITR-6 for every Mumbai business structure. One team handles holding company + LLP + founder returns with consistent data.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Year-Round Accounting Integration</h3><p class="feature-text">Monthly books flow directly into annual ITR. Financial statements, TDS reconciliation, and GST-ITR turnover matching aligned throughout the year.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Tax Audit Coordination</h3><p class="feature-text">Both tax audit (Section 44AB) and statutory audit (Companies Act) coordinated for Mumbai companies with consistent financial data and timely uploads.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Mumbai Businesses</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Patron handles ITR for our Pvt Ltd company and both partners' personal returns. The GST-ITR reconciliation catches every mismatch before filing.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; Founder, SaaS Startup, Powai</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving businesses with ITR and tax compliance across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Form Selector for Mumbai Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Business Type</th><th>ITR Form</th><th>Tax Audit?</th><th>Mumbai Example</th></tr></thead>
                    <tbody>
                        <tr><td>Sole proprietor (turnover &lt; Rs 3 cr, digital 95%+)</td><td>ITR-4 (44AD)</td><td>No (if profit &ge; 8%/6%)</td><td>Dadar retailer, Bhuleshwar wholesaler</td></tr>
                        <tr><td>Sole proprietor (turnover &gt; Rs 3 cr)</td><td>ITR-3</td><td>Yes (if &gt; Rs 10 cr digital / Rs 1 cr)</td><td>Andheri e-commerce seller</td></tr>
                        <tr><td>Professional (receipts &lt; Rs 75 lakh, digital 95%+)</td><td>ITR-4 (44ADA)</td><td>No (if profit &ge; 50%)</td><td>Fort CA, Marine Lines lawyer</td></tr>
                        <tr><td>Partnership firm</td><td>ITR-5</td><td>If turnover &gt; threshold</td><td>Bhuleshwar trading firm</td></tr>
                        <tr><td>LLP</td><td>ITR-5</td><td>If turnover &gt; threshold</td><td>Fort consulting LLP</td></tr>
                        <tr><td>Pvt Ltd / Public Ltd company</td><td>ITR-6</td><td>Always (statutory + tax)</td><td>Powai startup, BKC MNC subsidiary</td></tr>

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
                
                <p>Explore related services for your business:</p>
                <ul>
                    <li><a href="/itr-for-business">ITR for Business (India Overview)</a> &ndash; National-level business ITR filing services</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> &ndash; Individual and business ITR filing across India</li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> &ndash; Annual compliance for Pvt Ltd companies</li>
                    <li><a href="/pvt-llp-compliance">LLP Compliance</a> &ndash; Annual filing and compliance for LLPs</li>
                    <li><a href="/statutory-audit">Statutory Audit Services</a> &ndash; Audit under Companies Act 2013</li>
                    <li><a href="/accounting-services">Accounting Services</a> &ndash; Year-round bookkeeping and financial reporting</li>
                    <li><a href="/gst-returns">GST Returns</a> &ndash; Monthly/quarterly GST return filing</li>
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
            <h2 class="section-title">Legal &amp; Compliance Framework for Business ITR</h2>
            <div class="content-text">
                
                <p><strong>Governing Legislation:</strong> Income Tax Act, 1961 (IT Act, 2025 effective 01.04.2026)</p>
                <ul>
                    <li><strong>Section 44AD:</strong> Presumptive taxation for business &ndash; 8% of turnover (6% for digital receipts); turnover up to Rs 3 crore (digital 95%+)</li>
                    <li><strong>Section 44ADA:</strong> Presumptive taxation for professionals &ndash; 50% of gross receipts; up to Rs 75 lakh (digital 95%+)</li>
                    <li><strong>Section 44AB:</strong> Tax audit when turnover exceeds Rs 1 crore (Rs 10 crore if digital 95%+)</li>
                    <li><strong>Section 115BAC:</strong> New Tax Regime (default for all taxpayers; opt-out via Form 10-IEA)</li>
                    <li><strong>Section 115BAA:</strong> Concessional 22% corporate tax rate (companies opting in)</li>
                    <li><strong>Section 139(1):</strong> Due dates &ndash; 31 July (non-audit), 31 October (audit), 30 November (transfer pricing)</li>
                    <li><strong>Section 234F:</strong> Late filing fee &ndash; Rs 5,000 (Rs 1,000 if income &lt; Rs 5 lakh)</li>
                    <li><strong>Section 234B/234C:</strong> Interest on advance tax shortfall and deferment</li>
                    <li><strong>Section 40(b):</strong> Limits on partner remuneration and interest deduction (firms/LLPs)</li>
                    <li><strong>Section 92E:</strong> Transfer pricing audit (Form 3CEB) for international transactions</li>
                </ul>
                <p><strong>CPC Bengaluru:</strong> Centralised Processing Centre for ITR processing and intimation under Section 143(1).</p>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; ITR for Business in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about business ITR forms, presumptive taxation, tax audit, due dates, and more for Mumbai businesses.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Business',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which IT office handles business ITR in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Business ITRs are filed electronically on incometax.gov.in and processed centrally by CPC Bengaluru. The jurisdictional Assessing Officer (based on PAN zone) handles scrutiny assessments and demand notices for Mumbai businesses. Tax audit reports are also uploaded on the portal. No physical filing is required. Patron handles all electronic filings and coordinates with the jurisdictional AO for Mumbai business clients.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which ITR form should my business file?</h3>
                        <div class="faq-expanded__a"><p>Sole proprietors and individuals with business income file ITR-3 (regular) or ITR-4 (presumptive under 44AD/44ADA). Partnership firms and LLPs file ITR-5. Companies file ITR-6. The form depends on entity type, turnover, and whether presumptive taxation is opted. Filing the wrong form results in a defective return notice under Section 139(9). Patron determines the correct form during initial assessment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is presumptive taxation and who can use it?</h3>
                        <div class="faq-expanded__a"><p>Presumptive taxation under Sections 44AD (business) and 44ADA (professionals) allows small businesses to declare profit at prescribed rates without maintaining detailed books. Section 44AD: 8% of turnover (6% for digital) for businesses with turnover up to Rs 3 crore (if 95%+ digital). Section 44ADA: 50% of receipts for professionals with receipts up to Rs 75 lakh. File ITR-4. Not available for companies or LLPs. Ideal for Mumbai's small traders at Dadar and professionals at Fort.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">When is tax audit required for Mumbai businesses?</h3>
                        <div class="faq-expanded__a"><p>Tax audit under Section 44AB is required when business turnover exceeds Rs 1 crore (Rs 10 crore if 95%+ receipts are digital), or professional gross receipts exceed Rs 50 lakh. Also required if a presumptive filer declares profit below prescribed rates. The audit report (Form 3CA/3CB-3CD) must be uploaded by 30 September. ITR due date extends to 31 October for audit cases. Patron coordinates tax audits for all Mumbai businesses.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the due date for business ITR?</h3>
                        <div class="faq-expanded__a"><p>For businesses not requiring audit: 31 July. For businesses requiring tax audit (Section 44AB): 31 October. For companies with international transactions requiring transfer pricing report: 30 November. Late filing attracts Rs 5,000 fee under Section 234F (Rs 1,000 if income below Rs 5 lakh) plus interest under 234A/234B. Timely filing is essential to carry forward business losses.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Should I choose New Tax Regime or Old Regime for business?</h3>
                        <div class="faq-expanded__a"><p>The New Tax Regime under Section 115BAC is default. Business owners wanting Old Regime must file Form 10-IEA before the ITR due date &ndash; and this choice is irrevocable for the FY (unlike salaried individuals). Old Regime allows deductions (80C, 80D, HRA, business expenses). New Regime offers lower rates but fewer deductions. Patron computes tax under both regimes before recommending.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a loss-making Mumbai startup file business ITR?</h3>
                        <div class="faq-expanded__a"><p>Yes, and it is essential. Filing ITR even with losses ensures: loss carry-forward for set-off against future profits (business loss for 8 years, unabsorbed depreciation indefinitely), compliance for funding due diligence, and clean director records. Many Powai startups with pre-revenue operations must file ITR-6 declaring the loss for carry-forward benefit.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Business ITR kab file karna hota hai?</strong> Non-audit: 31 July. Audit cases: 31 October. Transfer pricing: 30 November. Late filing pe Rs 5,000 fee lagti hai.</p>
                <p><strong>Kaunsa ITR form use kare?</strong> Proprietor: ITR-3 ya ITR-4. Firm/LLP: ITR-5. Company: ITR-6. Presumptive (44AD/44ADA) ke liye ITR-4. Wrong form se Section 139(9) defective return notice aata hai.</p>
                <p><strong>Tax audit kab zaruri hai?</strong> Turnover Rs 1 crore se zyada (Rs 10 crore if 95%+ digital). Professional receipts Rs 50 lakh se zyada. 44AD/44ADA mein prescribed rate se kam profit declare kiya toh bhi audit lagega.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss Business ITR Deadlines &ndash; File on Time</h2>
            <div class="content-text">
                
                <p>Missing the 31 July or 31 October deadline triggers Section 234F late fee (Rs 5,000), interest under Section 234A (1% per month), and critically, loss of the right to carry forward business losses. A Mumbai startup that incurred Rs 50 lakh losses but filed late cannot carry forward those losses &ndash; losing potential tax savings of Rs 15+ lakh in future years. The Income Tax Act, 2025 (effective 01.04.2026) introduces additional compliance requirements.</p>
                <p><strong>Get your business ITR filed accurately &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Business%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get CA-Assisted Business ITR Filing in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">ITR filing for business in Mumbai covers the full range of entity types &ndash; from Dadar traders filing ITR-4 under presumptive taxation to Powai startup companies filing ITR-6, from Fort CA practitioners under Section 44ADA to BKC MNC subsidiaries with transfer pricing reports, from Andheri MIDC manufacturers to partnership firms at Bhuleshwar.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines provides complete business ITR compliance &ndash; from ITR form selection and presumptive vs regular advisory to year-round books preparation, tax audit coordination, advance tax planning, and e-filing for every entity type.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers accurate, timely business ITR filing across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Business%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ITR for Business Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting serves businesses in major cities with local office presence and jurisdictional expertise.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">ITR for Business in Other Cities</div>
                        <div class="pa-block-sub">Professional business ITR filing available across India</div>
                        <div class="pa-city-grid">
                            <a href="/itr-for-business/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/itr-for-business/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/itr-for-business/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end tax and compliance support</div>
                        <div class="pa-cross-grid">
                            <a href="/income-tax-return/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/private-limited-company-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
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
            <p>This content is reviewed quarterly to ensure accuracy of ITR forms, due dates, presumptive limits, and tax audit thresholds. Freshness Tier: 1. Income Tax Act, 2025 effective 01.04.2026.</p>
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
