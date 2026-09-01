
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Issue of Shares in Pune - PAS-3, Private Placement & ROC</title>
    <meta name="description" content="CA and CS assisted issue of shares for Pune companies. Rights issue, private placement, preferential allotment, bonus, ESOP. PAS-3, valuation, ROC filing. Startup funding rounds. Call +91 945 945 6700.">
    <link rel="canonical" href="/issue-of-shares/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Issue of Shares in Pune - PAS-3, Private Placement & ROC">
    <meta property="og:description" content="CA and CS assisted issue of shares for Pune companies. Rights issue, private placement, preferential allotment, bonus, ESOP. PAS-3, valuation, ROC filing. Startup funding rounds. Call +91 945 945 6700.">
    <meta property="og:url" content="/issue-of-shares/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Issue of Shares in Pune - PAS-3, Private Placement & ROC">
    <meta name="twitter:description" content="CA and CS assisted issue of shares for Pune companies. Rights issue, private placement, preferential allotment, bonus, ESOP. PAS-3, valuation, ROC filing. Startup funding rounds. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Issue of Shares in Pune | Allotment & Filing",
      "description": "CA and CS assisted issue of shares for Pune companies. Rights issue, private placement, preferential allotment, bonus, ESOP. PAS-3, valuation, ROC filing. Startup funding rounds. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/issue-of-shares/pune",
      "serviceType": "Issue of Shares in Pune | Allotment & Filing",
      "areaServed": {
        "@type": "City",
        "name": "Pune",
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
        "url": "https://www.patronaccounting.com/issue-of-shares/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "5000",
          "maxPrice": "30000",
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
          "name": "Issue of Shares: Rights, Bonus and Private",
          "item": "https://www.patronaccounting.com/issue-of-shares"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Issue of Shares in Pune | Allotment & Filing",
          "item": "https://www.patronaccounting.com/issue-of-shares/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to issue shares in a Pune private limited company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Verify authorised capital is sufficient (increase via SH-7 if needed). Choose method: rights for existing shareholders (board resolution) or preferential/PP for new investors (special resolution + valuation). Issue offer letter. Receive application money. Allot within 60 days via board resolution. File PAS-3 with ROC Pune within 30 days. Issue share certificates within 60 days. For FDI, file FC-GPR with RBI."
          }
        },
        {
          "@type": "Question",
          "name": "Is a valuation report required for all share issues?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. A valuation from a registered valuer is required only for preferential allotments (Section 62(1)(c)) and private placements (Section 42) to persons other than existing shareholders. Not required for rights issues (proportional to existing holders) or bonus issues (free from reserves). The valuation justifies price per share and is critical for startup funding rounds."
          }
        },
        {
          "@type": "Question",
          "name": "What is the deadline for filing PAS-3 after allotment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form PAS-3 must be filed with ROC within 30 days of allotment. For private placements, the company cannot utilise allotment money until PAS-3 is filed. Late filing attracts additional ROC fees. PAS-3 must be pre-certified by a practising CA, CS or CMA for companies other than OPC and small companies."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if shares are not allotted within 60 days?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The company must refund the entire application money within 15 days after the 60-day period. If refund is not made within these 15 days, interest at 12% per annum applies from the 60th day. Additionally, amounts may be treated as deposits under Acceptance of Deposits Rules, triggering further compliance requirements."
          }
        },
        {
          "@type": "Question",
          "name": "Can a Pune startup issue CCPS to investors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. CCPS are the most common instrument for startup funding. Issued via preferential allotment under Section 62(1)(c), requiring special resolution, valuation report, and Section 42 compliance. Upon conversion trigger (next round or specified date), CCPS convert to equity requiring board resolution, PAS-3 filing and updated share certificates."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for issuing shares without proper compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Non-compliance with Section 42 (private placement) is severe: subscription money classified as deposit requiring immediate refund with interest. Non-compliance with Section 62 attracts Section 450 penalties: Rs 10,000 plus Rs 1,000/day continuing default (max Rs 2,00,000). Allotment without sufficient authorised capital renders the allotment void. Quick Answers Shares kaise issue karte hain? Authorised capital check > Valuation (agar new investor) > Board ya EGM resolution > Offer letter > Application money lo > 60 din mein allot karo > PAS-3 file karo 30 din mein > Share certificate 60 din mein do. Startup funding mein kaunsa method? Preferential allotment S.62(1)(c) + S.42 private placement procedure. Special resolution + valuation + PAS-4 + PAS-3. Kitna time lagta hai? Rights: 7-15 din. PP/Preferential: 15-30 din. Allotment 60 din ke andar."
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
                        Issue of Shares in Pune: Allot, File, and Stay Compliant
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Board resolution, special resolution (if applicable), valuation report, PAS-4 offer letter, PAS-3 return of allotment, share certificates</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> ROC filing fee (PAS-3) + Stamp duty on share certificates + Professional fee Rs 5,000 - Rs 30,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All Pvt Ltd, OPC, and public companies in Pune with sufficient authorised capital</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7-15 days (rights) | 15-30 days (private placement/preferential) | Allotment within 60 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Issue%20of%20Shares%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Issue of Shares in Pune',
                                            'city'     => 'Pune',
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
    'ctaText'    => 'Get expert share issuance for your Pune company today.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">5 Methods</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Decision Matrix</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Issue of Shares in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Issue of Shares in Pune Services at a Glance</strong></p>
                    <p>Issue of shares is how a company allots new shares to shareholders or investors, increasing paid-up capital. Five methods under Companies Act: (1) Rights Issue S.62(1)(a) - to existing shareholders, (2) Private Placement S.42 - to up to 200 persons, (3) Preferential Allotment S.62(1)(c) - to select persons at determined price, (4) Bonus Issue S.63 - free shares from reserves, (5) ESOP S.62(1)(b) - to employees. Valuation mandatory for preferential/PP. Allot within 60 days, PAS-3 within 30 days, share certificates within 60 days. Authorised capital must be sufficient - increase via SH-7 if needed.</p>
                </div>
                <p>Pune's thriving startup ecosystem drives high share issuance volume. Baner and Kharadi startups raise angel/VC funding via preferential allotment. Hinjewadi IT subsidiaries receive parent equity infusions. MIDC manufacturers issue shares for expansion. Tech companies create ESOP pools. Profitable companies issue bonus shares. Learn more about <a href="/issue-of-shares">Issue of Shares across India</a>.</p>
                <p>Every issuance requires authorised capital verification, the right resolution, allotment within 60 days, PAS-3 with ROC Pune within 30 days, and share certificates within 60 days. File on <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA portal (mca.gov.in)</a>. Related: <a href="/change-in-authorised-capital/pune">Change in Authorised Capital in Pune</a> and <a href="#">Share Allotment</a>.</p>
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
                <h2 class="section-title">Types of Share Issuance</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Rights Issue (S.62(1)(a)):</strong> Proportional offer to existing shareholders. Board Resolution only. No valuation. LOO 3 days before opening. 15-30 day offer period. Simplest method for promoter capital infusion.</p><p><strong>Private Placement (S.42):</strong> To up to 200 identified persons/year. Special Resolution. PAS-4 offer letter. Application money in separate bank account. Allot within 60 days. Funds utilisable only after PAS-3. Primary method for startup fundraising.</p><p><strong>Preferential Allotment (S.62(1)(c)):</strong> Equity or convertible securities (CCPS/CCDs) to select persons. Special Resolution. Valuation report mandatory. Used for startup VC/angel rounds. Related: <a href="/itr-for-companies/pune">ITR for Companies in Pune</a>.</p><p><strong>Bonus (S.63):</strong> Free shares from reserves. No cash outflow. <strong>ESOP (S.62(1)(b)):</strong> Options to employees with minimum 1-year vesting. Related: <a href="/accounting-services">Accounting Services</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Issue of Shares in Pune:</strong></p>
                    <ul><li><strong>PAS-3:</strong> Return of allotment. Filed with ROC within 30 days. Pre-certified by CA/CS/CMA.</li><li><strong>PAS-4:</strong> Private Placement Offer Letter. Serially numbered to each identified person.</li><li><strong>60-Day Rule:</strong> Shares must be allotted within 60 days of receiving money. Refund with 12% interest if missed.</li><li><strong>Valuation:</strong> Mandatory for preferential/PP. IBBI-registered valuer. DCF/NAV method.</li><li><strong>CCPS:</strong> Compulsorily Convertible Preference Shares - most common startup funding instrument.</li><li><strong>FC-GPR:</strong> RBI form filed within 30 days for shares issued to foreign investors (FDI).</li></ul>

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
                            <!-- SHR tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SHR</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Issue of Shares in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>PAS-3 + PAS-4</span>
                        <strong>Rights | PP | Preferential | ESOP</strong>
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
            <h2 class="section-title">Who Needs Share Issuance Services in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Startups Raising Funding (Baner, Kharadi):</strong> Angel, seed, Series A/B rounds. SHA/SSA specifies shares, price, class. Each round triggers preferential allotment. Related: <a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a>.</p><p><strong>IT Subsidiaries (Hinjewadi):</strong> Foreign/Indian parent investing equity. Rights or preferential allotment. FEMA compliance for foreign parent (FC-GPR). Related: <a href="/fdi-compliance/pune">FDI Compliance in Pune</a>.</p><p><strong>Manufacturing Companies (MIDC Bhosari, Chakan):</strong> Promoters investing expansion capital. Rights issue simplest. Related: <a href="#">Annual ROC Filing in Pune</a>.</p><p><strong>ESOP + CCPS Conversion + Bonus:</strong> Tech companies granting options. Converting instruments to equity. Profitable companies distributing reserves. Related: <a href="/roc-notice/pune">ROC Notice in Pune</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Share Issuance Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>End-to-End Share Allotment</td><td>Authorised capital check, SH-7 if needed, board/special resolution, valuation coordination, PAS-4, allotment, PAS-3 filing with ROC Pune, share certificate issuance, statutory register updates.</td></tr><tr><td>Startup Funding Round Execution</td><td>SHA/SSA review, authorised capital increase, EGM resolutions, PAS-4, share application processing, allotment within 60 days, PAS-3, share certificates, investor onboarding. Related: <a href="/change-in-authorised-capital/pune">Authorised Capital Change in Pune</a>.</td></tr><tr><td>Valuation + CCPS/CCD Conversion</td><td>IBBI-registered valuer coordination for FMV report. Processing of CCPS/CCD conversion: board resolution, equity allotment, PAS-3, updated cap table.</td></tr><tr><td>ESOP Implementation</td><td>Scheme design, special resolution, grant letters, vesting schedule, exercise processing, allotment, PAS-3, perquisite tax advisory.</td></tr><tr><td>FEMA Compliance for FDI</td><td>Pricing compliance (DCF valuation), FC-GPR filing with RBI FIRMS within 30 days. Related: <a href="#">LLP Registration in Pune</a> and <a href="/accounting-services">Accounting Services</a>.</td></tr>

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
            <h2 class="section-title">How to Issue Shares in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Pune CA+CS team manages the complete share issuance - from authorised capital check to share certificate delivery and FEMA compliance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Check Authorised Capital</h3><p class="step-description">Verify that Clause V of MOA has sufficient authorised capital for the new shares. If the proposed allotment exceeds authorised capital, file SH-7 with ROC Pune to increase first. Patron verifies MCA master data and computes the required increase for every Pune company.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Authorised capital verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SH-7 filed if needed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Clause V</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Auth Capital</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Verify / SH-7</text></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Obtain Valuation Report (If Required)</h3><p class="step-description">For preferential allotments and private placements to external investors, obtain valuation from IBBI-registered valuer using DCF, NAV or comparable methods. Not required for rights or bonus issues. For Pune startups, the SHA/SSA valuation must match the registered valuer's report.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Valuation obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Price per share justified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FMV</text><text x="60" y="38" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">DCF / NAV</text><text x="60" y="52" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">IBBI Valuer</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Valuation</text></svg></div><span class="illustration-label">Valued</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Pass Resolution and File MGT-14</h3><p class="step-description">Rights issue: Board Resolution only. Private placement/preferential/ESOP: Special Resolution at EGM (75% majority). SR for PP valid 12 months. Issue 21-day EGM notice (shorter with 95% consent). File MGT-14 with ROC within 30 days of special resolution.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MGT-14 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="8" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="32" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Board</text><text x="32" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Res.</text><rect x="65" y="8" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="87" y="28" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Special</text><text x="87" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">75%</text><text x="60" y="80" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Pass Resolution</text></svg></div><span class="illustration-label">Resolved</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Issue Offer Letter and Receive Application Money</h3><p class="step-description">Private placement: send PAS-4 to identified persons within 30 days of recording names. Receive money only through banking channels. Deposit in separate bank account. Rights issue: send LOO at least 3 days before. For startup funding: coordinate with investor for wire per SHA/SSA.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAS-4/LOO issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Application money received</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAS-4</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Offer Letter</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Send to Investors</text></svg></div><span class="illustration-label">Offered</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Allot Shares Within 60 Days</h3><p class="step-description">Board Meeting to approve allotment specifying shares, class, price, allottees and consideration. Must be within 60 days of receiving application money. If missed, refund within 15 days with 12% interest. Update Register of Members and statutory registers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Allotment completed within 60 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Statutory registers updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Allot</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Within 60 days</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Board Approves</text></svg></div><span class="illustration-label">Allotted</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File PAS-3, Issue Share Certificates, FC-GPR</h3><p class="step-description">File PAS-3 with ROC Pune within 30 days of allotment. Pre-certified by CA/CS/CMA. For PP, funds utilisable only after PAS-3. Issue share certificates within 60 days. Pay Maharashtra stamp duty. For FDI, file FC-GPR with RBI within 30 days. Patron delivers certificates and updated registers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAS-3 filed within 30 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Share certificates issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAS-3</text><text x="60" y="38" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">30 days</text><text x="60" y="52" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ROC Pune</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">File Return</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Share Issuance in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>Board Resolution:</strong> Approving allotment with shares, price, allottees.</li><li><strong>Special Resolution (If Applicable):</strong> For PP/preferential/ESOP. Certified true copy.</li><li><strong>Valuation Report:</strong> From IBBI-registered valuer for preferential/PP. DCF/NAV.</li><li><strong>Private Placement Offer Letter (PAS-4):</strong> Serially numbered to each identified person.</li><li><strong>Share Application Forms:</strong> From each subscriber with PAN, address, payment details.</li><li><strong>Form PAS-3:</strong> Return of allotment with ROC within 30 days. CA/CS/CMA certified.</li><li><strong>Form MGT-14:</strong> Filed within 30 days of special resolution.</li><li><strong>Share Certificates:</strong> Issued within 60 days. Maharashtra stamp duty paid.</li><li><strong>SHA/SSA:</strong> Shareholders/Share Subscription Agreement for startup funding.</li><li><strong>Form FC-GPR:</strong> RBI filing within 30 days for allotment to foreign investors.</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> Maharashtra stamp duty on share certificates applies. Ensure registered office state reflects Maharashtra on MCA master data. For Baner/Kharadi startup funding, coordinate PAS-3 timing with investor's SHA conditions precedent.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Share Issuance in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Authorised Capital Not Increased</td><td>Startups allot shares beyond authorised capital - allotment is void, unravels funding round</td><td>Patron verifies authorised capital as Step 1 and files SH-7 before allotment</td></tr><tr><td>60-Day Allotment Deadline Missed</td><td>Application money received but allotment delayed - must refund with 12% interest</td><td>Patron tracks the 60-day window from receipt date and schedules board meeting proactively</td></tr><tr><td>Valuation Report Not Obtained</td><td>Shares issued at SHA price without formal valuation - compliance gap surfaces in next round due diligence</td><td>Patron coordinates valuation as part of every preferential/PP transaction</td></tr><tr><td>Rights vs Preferential Confusion</td><td>Shares to existing promoters at premium: wrong method chosen creates compliance issues</td><td>Patron identifies the correct issuance method based on recipient, price and instrument type</td></tr>

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
            <h2 class="section-title">Share Issuance Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Rights Issue (Existing Shareholders)</td><td>Patron Rs 5,000-10,000 + govt fees</td></tr><tr><td>Private Placement / Preferential</td><td>Patron Rs 10,000-25,000 + govt fees</td></tr><tr><td>Startup Funding Round (End-to-End)</td><td>Patron Rs 15,000-30,000 + govt fees</td></tr><tr><td>Bonus Issue</td><td>Patron Rs 5,000-10,000 + govt fees</td></tr><tr><td>ESOP Design + Implementation</td><td>Patron Rs 20,000-50,000</td></tr><tr><td>CCPS/CCD Conversion</td><td>Patron Rs 8,000-15,000</td></tr><tr><td>FEMA Compliance (FC-GPR)</td><td>Patron Rs 5,000-15,000</td></tr><tr><td>Valuation Report</td><td>Rs 5,000-25,000 (registered valuer)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Issue of Shares in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Issue%20of%20Shares%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Share Issuance Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Authorised capital check/increase</td><td>Day 1-7 (if SH-7 needed)</td></tr><tr><td>Valuation report</td><td>Day 1-10 (preferential/PP only)</td></tr><tr><td>Resolution (Board or EGM)</td><td>Board: Day 1 | EGM: Day 22-25</td></tr><tr><td>Offer letter (PAS-4 / LOO)</td><td>Within 30 days of recording (PP) | 3 days before (rights)</td></tr><tr><td>Allotment (Board Meeting)</td><td>Within 60 days of receipt</td></tr><tr><td>PAS-3 filing with ROC</td><td>Within 30 days of allotment</td></tr><tr><td>Share certificates</td><td>Within 60 days of allotment</td></tr><tr><td>FC-GPR (FDI cases)</td><td>Within 30 days of allotment</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> All ROC filings online via mca.gov.in. PAS-3 filed with ROC Pune (PMT Building, Shivajinagar). For private placements, funds utilisable only after PAS-3 is filed - late filing delays deployment. Patron's Pune office manages the complete process from RTC Silver, Wagholi.</p>

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
            <h2 class="section-title">Why Choose Patron for Share Issuance in Pune?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office + ROC Proximity</h3><p class="feature-text">RTC Silver, Wagholi - 40 minutes from Baner, Kharadi, Hinjewadi, MIDC and ROC Pune at PMT Building.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">Startup Funding Expertise</h3><p class="feature-text">Executed angel through Series B rounds for Baner and Kharadi startups. Coordinate with investor counsel, registered valuers and RBI for FEMA.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">CA + CS Combined Team</h3><p class="feature-text">Share issuance needs valuation (CA), corporate secretarial filings (CS), and tax advisory (CA for perquisite/capital gains). All three in-house.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Pre-Certified PAS-3</h3><p class="feature-text">Our practising CA/CS pre-certifies PAS-3, ensuring faster ROC processing and no resubmissions.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Our GST filing is always on time since we moved to Patron. The CA team knows their stuff cold." - CFO, Manufacturing, Maharashtra</blockquote><p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves companies across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Rights vs Private Placement vs Preferential - Decision Matrix</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Rights Issue</th><th>Private Placement</th><th>Preferential Allotment</th></tr></thead>
                    <tbody>
                        <tr><td>Who Gets Shares</td><td>Existing shareholders only</td><td>Up to 200 identified persons</td><td>Select persons (investors/promoters)</td></tr><tr><td>Resolution</td><td>Board Resolution</td><td>Special Resolution</td><td>Special Resolution</td></tr><tr><td>Valuation</td><td>Not required</td><td>Required</td><td>Required</td></tr><tr><td>Offer Letter</td><td>LOO (3 days before)</td><td>PAS-4 (mandatory)</td><td>PAS-4 (mandatory)</td></tr><tr><td>Fund Utilisation</td><td>Immediate after allotment</td><td>Only after PAS-3 filed</td><td>Only after PAS-3 filed</td></tr><tr><td>Typical Pune Use</td><td>Promoter infusing own capital</td><td>Startup raising from VC/angel</td><td>Startup issuing CCPS to investor</td></tr><tr><td>Complexity / Cost</td><td>Low (Rs 5K-10K)</td><td>High (Rs 10K-25K)</td><td>High (Rs 10K-25K)</td></tr>

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
                
                <p>For Pune companies needing related corporate compliance:</p><ul><li><a href="/issue-of-shares">Issue of Shares (India)</a></li><li><a href="#">Share Allotment</a></li><li><a href="/change-in-authorised-capital/pune">Change in Authorised Capital in Pune</a></li><li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a></li><li><a href="#">Annual ROC Filing in Pune</a></li><li><a href="/accounting-services">Accounting Services</a></li></ul>

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
                
                <p><strong>Section 62(1)(a) Rights Issue:</strong> Proportional to existing shareholders. Board Resolution. LOO 3 days before. Open 15-30 days (7 with 90% consent Pvt Ltd).</p><p><strong>Section 42 Private Placement:</strong> Special Resolution (valid 12 months). Max 200 persons/year. PAS-4. Separate bank account. Allot 60 days. Funds after PAS-3 only.</p><p><strong>Section 62(1)(c) Preferential:</strong> Special Resolution. Valuation mandatory. S.42 procedures apply. CCPS/CCDs covered.</p><p><strong>Section 63 Bonus:</strong> From free reserves/securities premium. No default on deposits/debentures. Board + OR/SR per AOA.</p><p><strong>Section 62(1)(b) ESOP:</strong> Special Resolution. Min 1-year vesting. Rule 12 Share Capital Rules.</p><p><strong>PAS-3:</strong> Within 30 days. Pre-certified CA/CS/CMA. <strong>Share Certificates:</strong> Within 60 days. Maharashtra stamp duty.</p><p><strong>FEMA (FDI):</strong> DCF valuation. FC-GPR within 30 days on <a href="https://firms.rbi.org.in" target="_blank" rel="noopener">RBI FIRMS</a>.</p><p><strong>Penalties:</strong> S.42 non-compliance: deposit classification + refund. S.62 non-compliance: Rs 10,000 + Rs 1,000/day. Void allotment beyond authorised capital.</p><p><strong>ROC Pune:</strong> PMT Building, Shivajinagar, Pune 411005. <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a>.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Issue of Shares in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about share issuance in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Issue of Shares in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to issue shares in a Pune private limited company?</h3>
                        <div class="faq-expanded__a"><p>Verify authorised capital is sufficient (increase via SH-7 if needed). Choose method: rights for existing shareholders (board resolution) or preferential/PP for new investors (special resolution + valuation). Issue offer letter. Receive application money. Allot within 60 days via board resolution. File PAS-3 with ROC Pune within 30 days. Issue share certificates within 60 days. For FDI, file FC-GPR with RBI.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is a valuation report required for all share issues?</h3>
                        <div class="faq-expanded__a"><p>No. A valuation from a registered valuer is required only for preferential allotments (Section 62(1)(c)) and private placements (Section 42) to persons other than existing shareholders. Not required for rights issues (proportional to existing holders) or bonus issues (free from reserves). The valuation justifies price per share and is critical for startup funding rounds.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the deadline for filing PAS-3 after allotment?</h3>
                        <div class="faq-expanded__a"><p>Form PAS-3 must be filed with ROC within 30 days of allotment. For private placements, the company cannot utilise allotment money until PAS-3 is filed. Late filing attracts additional ROC fees. PAS-3 must be pre-certified by a practising CA, CS or CMA for companies other than OPC and small companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens if shares are not allotted within 60 days?</h3>
                        <div class="faq-expanded__a"><p>The company must refund the entire application money within 15 days after the 60-day period. If refund is not made within these 15 days, interest at 12% per annum applies from the 60th day. Additionally, amounts may be treated as deposits under Acceptance of Deposits Rules, triggering further compliance requirements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a Pune startup issue CCPS to investors?</h3>
                        <div class="faq-expanded__a"><p>Yes. CCPS are the most common instrument for startup funding. Issued via preferential allotment under Section 62(1)(c), requiring special resolution, valuation report, and Section 42 compliance. Upon conversion trigger (next round or specified date), CCPS convert to equity requiring board resolution, PAS-3 filing and updated share certificates.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the penalty for issuing shares without proper compliance?</h3>
                        <div class="faq-expanded__a"><p>Non-compliance with Section 42 (private placement) is severe: subscription money classified as deposit requiring immediate refund with interest. Non-compliance with Section 62 attracts Section 450 penalties: Rs 10,000 plus Rs 1,000/day continuing default (max Rs 2,00,000). Allotment without sufficient authorised capital renders the allotment void.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Shares kaise issue karte hain?</strong> Authorised capital check > Valuation (agar new investor) > Board ya EGM resolution > Offer letter > Application money lo > 60 din mein allot karo > PAS-3 file karo 30 din mein > Share certificate 60 din mein do.</p><p><strong>Startup funding mein kaunsa method?</strong> Preferential allotment S.62(1)(c) + S.42 private placement procedure. Special resolution + valuation + PAS-4 + PAS-3.</p><p><strong>Kitna time lagta hai?</strong> Rights: 7-15 din. PP/Preferential: 15-30 din. Allotment 60 din ke andar.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Closing a Funding Round? Issue Shares Compliantly</h2>
            <div class="content-text">
                
                <p>Until shares are allotted and PAS-3 filed, funds from private placements <strong>cannot be legally utilised</strong>. A 60-day delay triggers <strong>mandatory refund with 12% interest</strong>. Late PAS-3 delays fund deployment. For FDI, missed 30-day FC-GPR triggers <strong>RBI compounding</strong>. Professional fee (Rs 5,000-30,000) is negligible vs a voided allotment or deposit classification.</p><p><strong>Issue shares now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Issue%20of%20Shares%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>. Free consultation.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Issue Shares in Pune - Every Method, Fully Compliant</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Issue of shares is the fundamental mechanism by which Pune companies raise capital - whether from existing shareholders via rights issue, from new investors via preferential allotment, from employees via ESOP, or from reserves via bonus issue. Each has specific requirements: the right resolution, valuation, offer letter, allotment within 60 days, PAS-3 within 30 days, and certificates within 60 days.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi provides dedicated share issuance services - from authorised capital increase to valuation, resolution management, PAS-3 filing, certificates and FEMA compliance.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With 15+ years experience, 10,000+ businesses served and a 4.9 Google rating, Patron is a trusted CA and CS firm across Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Issue%20of%20Shares%20in%20Pune.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Issue%20of%20Shares%20in%20Pune&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20share%20issuance%20services%20in%20Pune.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Issue of Shares Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert share issuance services in all major cities</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/issue-of-shares/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/issue-of-shares/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/issue-of-shares/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end corporate compliance in Pune</div><div class="pa-cross-grid"><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/change-in-authorised-capital/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Authorised Capital Change</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual ROC Filing</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-returns/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect MCA form changes, Companies Act rule updates and valuation requirement amendments. Last review: March 2026. Next review: September 2026.</p>
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
