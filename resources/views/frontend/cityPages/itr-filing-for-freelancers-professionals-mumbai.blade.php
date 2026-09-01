
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ITR for Freelancers in Mumbai - 44ADA, ITR-4 & TDS</title>
    <meta name="description" content="CA-assisted ITR filing for professionals and freelancers in Mumbai. 44ADA, 44AD, ITR-3, ITR-4, expenses, GST. Fort, Powai, BKC. Call +91 945 945 6700.">
    <link rel="canonical" href="/itr-filing-for-freelancers-professionals/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Freelancers in Mumbai - 44ADA, ITR-4 & TDS">
    <meta property="og:description" content="CA-assisted ITR filing for professionals and freelancers in Mumbai. 44ADA, 44AD, ITR-3, ITR-4, expenses, GST. Fort, Powai, BKC. Call +91 945 945 6700.">
    <meta property="og:url" content="/itr-filing-for-freelancers-professionals/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Freelancers in Mumbai - 44ADA, ITR-4 & TDS">
    <meta name="twitter:description" content="CA-assisted ITR filing for professionals and freelancers in Mumbai. 44ADA, 44AD, ITR-3, ITR-4, expenses, GST. Fort, Powai, BKC. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR for Freelancers in Mumbai - 44ADA, ITR-4 & TDS",
      "description": "CA-assisted ITR filing for professionals and freelancers in Mumbai. 44ADA, 44AD, ITR-3, ITR-4, expenses, GST. Fort, Powai, BKC. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/itr-filing-for-freelancers-professionals/mumbai",
      "serviceType": "ITR for Freelancers in Mumbai - 44ADA, ITR-4 & TDS",
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
        "url": "https://www.patronaccounting.com/itr-filing-for-freelancers-professionals/mumbai",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "2",
          "maxPrice": "75",
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
          "name": "ITR for Freelancers & Professionals - 44ADA, ITR-4 & TDS",
          "item": "https://www.patronaccounting.com/itr-for-professionals"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ITR for Freelancers in Mumbai - 44ADA, ITR-4 & TDS",
          "item": "https://www.patronaccounting.com/itr-filing-for-freelancers-professionals/mumbai"
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
                        ITR for Professionals and Freelancers in Mumbai: Choose the Right Form, Claim Every Deduction
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 44ADA:</span> 50% of gross receipts as profit | Specified professions | Up to Rs 50 lakh (Rs 75 lakh digital 95%+)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 44AD:</span> 6%/8% of turnover as profit | Business income | Up to Rs 2 crore (Rs 3 crore digital 95%+)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>ITR Form:</span> ITR-3 (regular with books) or ITR-4 (presumptive under 44ADA/44AD)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax Audit:</span> Gross receipts &gt; Rs 50 lakh for professionals (Section 44AB) | TDS 194J 10%</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20professional%2Ffreelancer%20ITR%20filing%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ITR for Professionals &amp; Freelancers',
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
    'ctaText'    => 'Get your professional ITR filed by a CA team that handles 44ADA vs 44AD optimisation, foreign income, and profession-specific expenses.',
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
            <a href="#comparison-section" class="toc-btn">44ADA vs 44AD</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for Professionals &amp; Freelancers in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Professionals &amp; Freelancers Services at a Glance</strong></p>
                    <p>Every professional and freelancer in Mumbai earning income through professional services, consulting, freelance contracts, or self-employment must file an Income Tax Return reporting this income under 'Profits and Gains from Business or Profession'. Mumbai is India's professional services capital &ndash; Fort and Marine Lines house the country's densest cluster of CAs, lawyers, and tax consultants; Powai and Andheri host thousands of IT and software freelancers serving global clients; BKC is home to management consulting practices; and Bandra and Kala Ghoda have architects and interior designers. The choice between Section 44ADA (50% presumptive), Section 44AD (6%/8% presumptive), and regular ITR-3 (actual books) depends on the profession type, gross receipts, and actual expense ratio.</p>
                </div>
                <p>Mumbai's professional ecosystem is India's most diverse and highest-earning. Fort and Marine Lines house thousands of Chartered Accountants and Company Secretaries. Nariman Point and Fort are home to senior lawyers earning through the Bombay High Court. Powai and Andheri have India's highest concentration of IT freelancers working via Upwork, Toptal, and direct contracts. BKC management consultants advise Fortune 500 companies. Bandra and Kala Ghoda architects design Mumbai's skyline. Learn more about <a href="/itr-for-professionals">ITR for Professionals &amp; Freelancers across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines provides complete professional and freelancer ITR filing &ndash; from 44ADA vs 44AD vs regular regime analysis to expense deduction optimisation, TDS reconciliation with Form 26AS, foreign income reporting, <a href="/gst-registration/mumbai">GST registration in Mumbai</a> and filing, and e-filing on the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">income tax portal</a> for every professional category.</p>
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
                <h2 class="section-title">What Is Professional/Freelance Income Under Income Tax?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Professional and freelance income is classified under 'Profits and Gains from Business or Profession' (PGBP) in the Income Tax Act, encompassing all earnings from providing professional services, consulting, freelance contracts, and self-employment activities. This income is taxed at applicable slab rates after deducting allowable business expenses.</p>
                    <p>The Income Tax Act distinguishes between 'specified professions' (listed under Section 44AA(1) read with Rule 6F) and general business activity. Specified professions include legal, medical, engineering, accountancy, technical consultancy, interior decoration, architecture, and any profession notified by the government. This distinction matters because specified professionals can use Section 44ADA (50% of receipts as profit), while those in general business use Section 44AD (6%/8% of turnover). Filing <a href="/income-tax-return">Income Tax Return</a> correctly requires choosing the right scheme.</p>
                    <p>For Mumbai professionals, the classification determines the ITR form, presumptive scheme eligibility, and tax audit threshold. A Fort CA earning Rs 40 lakh uses 44ADA (50% = Rs 20 lakh taxable). A Powai IT freelancer earning Rs 30 lakh from Upwork may use 44AD (6% = Rs 1.8 lakh taxable if digital). A BKC management consultant earning Rs 80 lakh must file ITR-3 with books and potentially undergo tax audit. Patron analyses each situation to determine the optimal regime.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Professionals &amp; Freelancers:</strong></p>
                    <ul>
                        <li><strong>Section 44ADA:</strong> Presumptive taxation for specified professions &ndash; 50% of gross receipts as profit, up to Rs 50 lakh (Rs 75 lakh digital 95%+)</li>
                        <li><strong>Section 44AD:</strong> Presumptive taxation for business &ndash; 6%/8% of turnover as profit, up to Rs 2 crore (Rs 3 crore digital 95%+)</li>
                        <li><strong>Specified Professions:</strong> Legal, medical, engineering, accountancy, technical consultancy, interior decoration, architecture (Section 44AA(1)/Rule 6F)</li>
                        <li><strong>Section 194J:</strong> 10% TDS on professional fees and technical service fees paid by clients</li>
                        <li><strong>PGBP:</strong> Profits and Gains from Business or Profession &ndash; income head for all professional/freelance income</li>
                        <li><strong>LUT:</strong> Letter of Undertaking for GST zero-rated export of services by freelancers serving foreign clients</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Professionals &amp; Freelancers</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA-Assisted</span>
                        <strong>Professional ITR Filing</strong>
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
            <h2 class="section-title">Which Mumbai Professionals and Freelancers Must File ITR?</h2>
            <div class="content-text">
                
                <p><strong>Chartered Accountants and tax professionals at Fort and Marine Lines</strong> &ndash; CAs, CSs, and tax practitioners. Specified profession under 44ADA. Gross receipts up to Rs 50 lakh (Rs 75 lakh digital): ITR-4 with 50% profit. Above threshold: ITR-3 with books and audit. TDS under Section 194J (10%).</p>
                <p><strong>Lawyers and advocates at Fort and Nariman Point</strong> &ndash; Legal professionals at Bombay High Court and tribunals. Specified profession under 44ADA. Senior advocates with Rs 50+ lakh receipts may require tax audit. Income from retainers, consultation fees, appearance fees.</p>
                <p><strong>IT consultants and software freelancers at Powai, Andheri, and BKC</strong> &ndash; Developers, designers, DevOps engineers working via Upwork, Toptal, Fiverr, or direct contracts. Foreign income in USD/EUR. Classification as business (44AD) or profession (44ADA if 'technical consultancy') is debated. Most earn Rs 15-60 lakh annually. <a href="/accounting-services">Accounting Services</a> support year-round bookkeeping for high-earning freelancers.</p>
                <p><strong>Management and strategy consultants at BKC and Nariman Point</strong> &ndash; Technical consultancy qualifies for 44ADA. Fees from BKC MNCs attract 194J TDS at 10%.</p>
                <p><strong>Architects and interior designers at Bandra, Kala Ghoda, and Lower Parel</strong> &ndash; Both specified professions under Rule 6F. 44ADA applicable. Project-based income with significant deductible expenses (software, travel, site visits).</p>
                <p><strong>Doctors and medical professionals at Dadar, Bandra, and South Mumbai</strong> &ndash; Specified profession under 44ADA. Income from private practice, hospital consulting, and diagnostic centre partnerships.</p>
                <p><strong>Salaried professionals with side freelance income at BKC and Nariman Point</strong> &ndash; Must file ITR-3 (not ITR-1). Salary under Schedule S, freelance under Schedule BP. Cannot use ITR-4 if salary exceeds limits.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Professional &amp; Freelancer ITR Filing Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>3-Way Regime Comparison</td><td>Tax computed under 44ADA (50%), 44AD (6%/8%), and regular ITR-3 with actual expenses. Lowest option recommended for each Mumbai professional</td></tr>
                        <tr><td>Specified Profession Eligibility</td><td>Verifying Rule 6F eligibility for 44ADA. Analysing if activity qualifies as specified profession or general business for correct section selection</td></tr>
                        <tr><td>Foreign Income Handling</td><td>Upwork/Toptal/Fiverr income: RBI TT buying rate conversion, platform commission treatment, FIRC reconciliation, DTAA relief, GST zero-rating with LUT</td></tr>
                        <tr><td>TDS Reconciliation (194J/194C)</td><td>Matching TDS from Indian clients with Form 26AS/AIS. Verifying each client TAN and TDS amount. Missing credits identified before filing</td></tr>
                        <tr><td>Expense Deduction Optimisation</td><td>Profession-specific deductions: AutoCAD/Revit (architects), LexisNexis (lawyers), AWS/cloud (IT freelancers), CPE costs (CAs), medical equipment (doctors)</td></tr>
                        <tr><td>Financial Statement Preparation</td><td>P&amp;L Account, Balance Sheet, and depreciation schedule for ITR-3 filers. Books from Tally/Zoho for regular-regime Mumbai professionals</td></tr>
                        <tr><td>GST Registration &amp; Filing</td><td>Proactive registration when turnover crosses Rs 20 lakh. LUT for export services. 18% GST on invoices. Monthly/quarterly GSTR-1/3B</td></tr>
                        <tr><td>Salaried + Freelance Combined ITR</td><td>Combined ITR-3 with salary (Schedule S) and freelance (Schedule BP). Correct regime choice with Form 10-IEA for business income earners</td></tr>

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
            <h2 class="section-title">Professional &amp; Freelancer ITR Filing Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's Mumbai team follows a structured 6-step process. All filings are electronic on incometax.gov.in. Our Marine Lines office provides free regime comparison for Mumbai professionals.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Compile All Income &amp; Verify Profession Status</h3><p class="step-description">Gather client invoices, platform reports (Upwork/Toptal/Fiverr), bank statements, TDS certificates. Determine if activity is a specified profession under Rule 6F (CAs, lawyers, doctors, architects, technical consultants) or general business (IT freelancing, writing, marketing).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Income compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Profession verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="45" x2="80" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="85" cy="60" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 60l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Income Ready</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Identify Deductible Expenses</h3><p class="step-description">Review profession-specific expenses: office rent, software (Adobe, AutoCAD, AWS), internet, phone, laptop depreciation, travel for clients, professional books, CPE/CLE, staff salaries, insurance, CA fees, marketing. For Powai IT freelancers, cloud infrastructure and SaaS tools are significant deductions.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Expenses documented</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Depreciation computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="18" y1="25" x2="48" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="73" y1="25" x2="103" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Expenses Ready</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Choose Optimal Regime (44ADA / 44AD / Regular)</h3><p class="step-description">Compute tax under all applicable options. Specified professionals (Fort CAs, lawyers): 44ADA declares 50% profit. IT freelancers at Powai (non-specified business): 44AD declares 6% profit (digital) &ndash; dramatically lower. High-expense professionals: regular ITR-3 may be cheapest. Patron models all three scenarios.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3 regimes modelled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Lowest tax identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="42" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="60" cy="42" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="85" cy="42" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><path d="M80 42l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Regime Selected</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Prepare Financials or Declare Presumptive</h3><p class="step-description">For ITR-4 (presumptive): declare gross receipts and profit %. No books needed. For ITR-3 (regular): prepare P&amp;L, Balance Sheet, and depreciation schedule. If audit required (receipts &gt; Rs 50L/75L), coordinate Form 3CB-3CD. Patron prepares all financial statements.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Financials prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit coordinated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Statements Ready</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File ITR-3 or ITR-4 on Portal</h3><p class="step-description">Populate PGBP schedule. Claim TDS credits from Form 26AS. Apply chosen tax regime (New or Old &ndash; Form 10-IEA required to opt out of New Regime for business income, irrevocable). Patron files by 15 July (non-audit) or 15 October (audit) for Mumbai professionals.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PGBP populated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed before deadline</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><rect x="35" y="40" width="40" height="8" rx="3" fill="#14365F" opacity="0.15"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">ITR Filed</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">E-Verify, Pay Advance Tax &amp; Monitor</h3><p class="step-description">E-verify within 30 days. Presumptive: single advance tax instalment by 15 March. Regular: quarterly instalments. Maintain invoices, contracts, bank statements, and expense receipts for 7 years. CPC processes return. Patron handles post-filing responses.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Advance tax paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Records maintained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Professional/Freelancer ITR in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Client Invoices and Fee Records:</strong> All invoices issued during the FY. Retainer agreements, project contracts, engagement letters</li>
                    <li><strong>Bank Statements:</strong> All accounts receiving professional income. FIRC for international payments</li>
                    <li><strong>Platform Earnings Reports:</strong> Upwork, Toptal, Fiverr, or other marketplace reports</li>
                    <li><strong>TDS Certificates / Form 26AS:</strong> Form 16A from clients who deducted TDS under 194J or 194C</li>
                    <li><strong>Expense Documentation:</strong> Office rent, software subscriptions, internet, phone, travel, equipment invoices (for depreciation), staff salary, professional books, insurance</li>
                    <li><strong>GST Records:</strong> GSTIN, GSTR-3B returns, GST invoices. LUT certificate for export services</li>
                    <li><strong>Previous Year ITR:</strong> For carry-forward loss verification and books continuity</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> Powai IT freelancers working for US/EU clients via Upwork receive payments after platform commission (20% for first $500, then 10%/5%). The gross income for ITR is the bank-credited amount (post-commission). Under 44AD/44ADA presumptive, declare the bank-credited amount as gross receipts. Patron clarifies this for all Mumbai freelancers using international platforms.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Professional/Freelancer ITR in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>44ADA vs 44AD Classification Confusion</td><td>Many Mumbai freelancers incorrectly use 44ADA (50%) when their activity is not a specified profession. IT freelancer writing code may be 'technical consultancy' (debated). Freelance writer/marketer may not qualify</td><td>Precise service analysis for Rule 6F eligibility. Correct section applied. Conservative approach to avoid scrutiny</td></tr>
                        <tr><td>50% Profit Under 44ADA Too High</td><td>For Fort CAs with Rs 40L receipts and Rs 25L expenses, 44ADA taxable = Rs 20L. Under ITR-3 with books: Rs 15L. But Powai IT freelancer on 44AD (6%): Rs 1.8L taxable on Rs 30L &ndash; far cheaper</td><td>3-way tax modelling: 44ADA, 44AD, and regular ITR-3 with actual expenses computed for each client</td></tr>
                        <tr><td>Foreign Income Currency Conversion</td><td>Correct rate is RBI TT buying rate on date of bank credit. Google/Upwork/PayPal rates may differ. Wrong conversion triggers demand notices</td><td>RBI rate application and platform report to bank credit reconciliation</td></tr>
                        <tr><td>Salaried + Freelance Dual Income</td><td>BKC professionals with salary + freelance need ITR-3 (not ITR-1). Cannot use ITR-4 if salary exceeds limits. Form 10-IEA required for regime opt-out, irrevocable for FY</td><td>Combined ITR-3 with correct schedule segregation and regime handling</td></tr>
                        <tr><td>GST Threshold for Growing Freelancers</td><td>Crossing Rs 20 lakh triggers mandatory registration. Many unaware mid-year. Export service freelancers need GST + LUT even below threshold</td><td>Proactive turnover monitoring. GST registration and LUT for export services triggered before threshold</td></tr>

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
            <h2 class="section-title">Professional/Freelancer ITR Filing Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Income Tax</td><td>Applicable slab rates under PGBP head (New or Old Regime)</td></tr>
                        <tr><td>TDS &ndash; Professional Fees (194J)</td><td>10% deducted by Indian clients (credit in ITR)</td></tr>
                        <tr><td>TDS &ndash; Contractor (194C)</td><td>1% (individual) / 2% (others)</td></tr>
                        <tr><td>GST (if applicable)</td><td>18% on professional services if turnover &gt; Rs 20 lakh</td></tr>
                        <tr><td>Tax Audit Fee</td><td>Rs 10,000 &ndash; Rs 30,000 (if receipts &gt; Rs 50L/75L)</td></tr>
                        <tr><td>Late Fee (Section 234F)</td><td>Rs 5,000 (Rs 1,000 if income &lt; Rs 5 lakh)</td></tr>
                        <tr><td>Patron Fee &ndash; Presumptive ITR-4 (up to Rs 50L)</td><td>Starting Rs 3,000</td></tr>
                        <tr><td>Patron Fee &ndash; Regular ITR-3</td><td>Starting Rs 5,000 (books + P&amp;L + BS + expenses)</td></tr>
                        <tr><td>Patron Fee &ndash; ITR-3 with Tax Audit</td><td>Starting Rs 12,000</td></tr>
                        <tr><td>Patron Fee &ndash; Foreign Income Freelancer</td><td>Starting Rs 5,000 (currency + platform reconciliation)</td></tr>
                        <tr><td>Patron Fee &ndash; Salaried + Freelance Combined</td><td>Starting Rs 5,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Professionals &amp; Freelancers consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20professional%2Ffreelancer%20ITR%20filing%20in%20Mumbai.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Professional/Freelancer ITR Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Advance Tax &ndash; Q1 (15%)</td><td>15 June (regular filers)</td></tr>
                        <tr><td>Advance Tax &ndash; Q2 (45%)</td><td>15 September</td></tr>
                        <tr><td>Advance Tax &ndash; Q3 (75%)</td><td>15 December</td></tr>
                        <tr><td>Advance Tax &ndash; Q4 / Presumptive Single</td><td>15 March (100% regular | single instalment presumptive)</td></tr>
                        <tr><td>Tax Audit Report (if applicable)</td><td>30 September &ndash; Form 3CB-3CD on portal</td></tr>
                        <tr><td>ITR Filing (Non-Audit)</td><td>31 July &ndash; most individual professionals</td></tr>
                        <tr><td>ITR Filing (Audit Cases)</td><td>31 October &ndash; professionals with receipts &gt; Rs 50L</td></tr>
                        <tr><td>GST Returns</td><td>Monthly/Quarterly (if registered)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Patron files 15 days before each deadline</strong> for Mumbai professionals. Presumptive filers have a simpler advance tax obligation &ndash; single instalment by 15 March instead of quarterly.</p>

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
            <h2 class="section-title">Why Choose Patron for Professional ITR in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Mumbai Office at Marine Lines</h3><p class="feature-text">Walk-in for professional tax planning, regime comparison, and ITR filing. Located at the heart of Mumbai's professional district, minutes from Fort CA chambers and Nariman Point law offices.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">3-Way Regime Optimisation</h3><p class="feature-text">Tax computed under 44ADA, 44AD, AND regular ITR-3 for each client. Powai IT freelancer on 44AD (6%) saves lakhs compared to 44ADA (50%). We don't default &ndash; we optimise.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Foreign Freelance Income Expertise</h3><p class="feature-text">Upwork/Toptal/Fiverr income: RBI TT rate conversion, FIRC reconciliation, DTAA claims, and GST zero-rating with LUT for Mumbai's thousands of IT freelancers.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Profession-Specific Expenses</h3><p class="feature-text">AutoCAD/Revit for Bandra architects, LexisNexis for Fort lawyers, CPE for Marine Lines CAs, AWS/cloud for Powai IT freelancers. Creator-specific deductions that generic CAs miss.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Mumbai Professionals</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Patron showed me that 44AD at 6% was Rs 8 lakh cheaper in tax than 44ADA at 50% for my IT consulting income. Nobody else even mentioned 44AD as an option.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; IT Freelancer, Powai</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving professionals and freelancers with ITR compliance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">44ADA vs 44AD vs Regular: Comparison for Mumbai Professionals</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Section 44ADA (Profession)</th><th>Section 44AD (Business)</th><th>Regular (ITR-3 with Books)</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility</td><td>Specified professions (CA, lawyer, doctor, architect, technical consultant)</td><td>Any business (IT freelancing, writing, marketing, trading)</td><td>All professionals and freelancers</td></tr>
                        <tr><td>Receipt/Turnover Limit</td><td>Rs 50 lakh (Rs 75 lakh if digital 95%+)</td><td>Rs 2 crore (Rs 3 crore if digital 95%+)</td><td>No limit</td></tr>
                        <tr><td>Deemed Profit</td><td>50% of gross receipts</td><td>8% (6% for digital receipts)</td><td>Actual profit (receipts minus expenses)</td></tr>
                        <tr><td>Books of Accounts</td><td>Not required</td><td>Not required</td><td>Mandatory</td></tr>
                        <tr><td>Tax Audit</td><td>Not required if profit &ge; 50%</td><td>Not required if profit &ge; 6%/8%</td><td>Required if receipts &gt; Rs 50L (profession) / Rs 1 cr (business)</td></tr>
                        <tr><td>Advance Tax</td><td>Single instalment by 15 March</td><td>Single instalment by 15 March</td><td>4 quarterly instalments</td></tr>
                        <tr><td>Best For (Mumbai)</td><td>Fort CAs, Nariman Point lawyers, Bandra architects, Dadar doctors</td><td>Powai IT freelancers, Andheri content writers, digital marketers</td><td>High-expense professionals, receipts &gt; limits, salaried + freelance</td></tr>

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
                    <li><a href="/itr-for-professionals">ITR for Professionals &amp; Freelancers (India Overview)</a></li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a></li>
                    <li><a href="/gst-registration">GST Registration</a> &ndash; For freelancers crossing Rs 20 lakh</li>
                    <li><a href="/accounting-services">Accounting Services</a> &ndash; Year-round bookkeeping</li>
                    <li><a href="/gst-returns-for-freelancers">GST Returns for Freelancers</a></li>
                    <li><a href="/statutory-audit">Statutory Audit Services</a></li>
                    <li><a href="/tds-return-filing-24q">TDS Return Filing</a></li>
                    <li><a href="/trademark-registration">Trademark Registration</a></li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal &amp; Compliance Framework for Professional/Freelancer Taxation</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 44AA:</strong> Books of accounts mandatory if income &gt; Rs 2.5 lakh or gross receipts &gt; Rs 25 lakh</li>
                    <li><strong>Section 44ADA:</strong> Presumptive for specified professions &ndash; 50% of receipts, up to Rs 50 lakh (Rs 75 lakh digital)</li>
                    <li><strong>Section 44AD:</strong> Presumptive for business &ndash; 6%/8% of turnover, up to Rs 2 crore (Rs 3 crore digital)</li>
                    <li><strong>Section 44AB:</strong> Tax audit &ndash; professionals: receipts &gt; Rs 50 lakh; business: turnover &gt; Rs 1 crore (Rs 10 crore digital)</li>
                    <li><strong>Section 194J:</strong> 10% TDS on professional fees and technical service fees</li>
                    <li><strong>Section 194C:</strong> 1% (individual) / 2% (others) TDS on contractor payments</li>
                    <li><strong>Rule 6F:</strong> Specified professions &ndash; legal, medical, engineering, accountancy, technical consultancy, interior decoration, architecture</li>
                    <li><strong>GST:</strong> 18% on professional services if turnover &gt; Rs 20 lakh. LUT for export services</li>
                    <li><strong>Advance Tax:</strong> Quarterly if &gt; Rs 10,000. Single instalment by 15 March for presumptive</li>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; ITR for Professionals &amp; Freelancers in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about 44ADA vs 44AD, ITR forms, tax audit, foreign income, GST, and deductions for Mumbai professionals.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Professionals &amp; Freelancers',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which IT office handles professional ITR in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Filed electronically on incometax.gov.in, processed by CPC Bengaluru. AIS captures professional fee payments and TDS data under Sections 194J and 194C. Jurisdictional AO handles scrutiny based on PAN zone. No physical filing required. Patron handles all electronic filings for Mumbai professional clients.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which ITR form should professionals and freelancers use?</h3>
                        <div class="faq-expanded__a"><p>ITR-4 for presumptive filing (44ADA for specified professions or 44AD for business). ITR-3 for regular filing with books when actual expenses exceed presumptive deemed profit, or when receipts exceed limits, or salaried professionals with side freelance income. Patron determines the optimal form for each Mumbai professional.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is Section 44ADA and who qualifies?</h3>
                        <div class="faq-expanded__a"><p>Section 44ADA allows specified professionals to declare 50% of gross receipts as taxable profit without maintaining books or audit. Specified professions: legal, medical, engineering, accountancy, technical consultancy, interior decoration, architecture, and government-notified. Gross receipts up to Rs 50 lakh (Rs 75 lakh if digital 95%+). IT freelancers, writers, and marketers may not qualify.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can IT freelancers use Section 44AD instead of 44ADA?</h3>
                        <div class="faq-expanded__a"><p>Yes, often resulting in significantly lower tax. 44AD allows declaring 6% of digital turnover as profit for businesses up to Rs 3 crore. An IT freelancer at Powai earning Rs 25 lakh declares just Rs 1.5 lakh taxable under 44AD, compared to Rs 12.5 lakh under 44ADA. However, requires classifying the activity as business rather than profession. Patron analyses the nature of services.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">When is tax audit required for professionals?</h3>
                        <div class="faq-expanded__a"><p>For specified professions: tax audit under Section 44AB(b) if gross receipts exceed Rs 50 lakh (Rs 75 lakh if cash receipts 5% or less). If 44ADA opted but profit declared below 50%, audit also required. For business under 44AD: audit if turnover exceeds Rs 1 crore (Rs 10 crore digital 95%+). Most Mumbai freelancers under Rs 50 lakh need no audit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is foreign freelance income from Upwork or Toptal taxed?</h3>
                        <div class="faq-expanded__a"><p>Foreign freelance income is fully taxable in India for residents. Income reported in INR converted at RBI TT buying rate on date of bank credit. Platform commissions deductible as business expense under ITR-3 or included in gross receipts under presumptive. No TDS by foreign platforms, so full tax self-assessed. GST registration may be required for export services with LUT for zero-rating.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do freelancers need GST registration?</h3>
                        <div class="faq-expanded__a"><p>Yes if annual turnover exceeds Rs 20 lakh (Rs 10 lakh special states). GST rate 18% on professional services. For freelancers exporting services to foreign clients (Upwork, Toptal, direct contracts), GST registration recommended even below threshold to claim LUT for zero-rated export supply. Mumbai agencies increasingly require GSTIN on invoices.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Freelancer ka ITR kaise file kare?</strong> ITR-4 (presumptive 44ADA ya 44AD) ya ITR-3 (regular books ke saath). Profession code check karo: specified profession (CA, lawyer, doctor) ke liye 44ADA (50% profit). IT freelancer ke liye 44AD (6% digital) bhi option hai. Patron teeno compute karke cheapest recommend karega.</p>
                <p><strong>44ADA aur 44AD mein kya fark hai?</strong> 44ADA: specified professions ke liye, 50% profit declare karo, Rs 50 lakh tak. 44AD: business ke liye, 6%/8% profit declare karo, Rs 3 crore tak. IT freelancer agar business mein classify ho toh 44AD se bahut kam tax lagta hai.</p>
                <p><strong>Foreign income (Upwork/Toptal) kaise report kare?</strong> RBI TT buying rate pe INR mein convert karo. PGBP mein report karo. 44AD/44ADA mein bank credit amount gross receipts hai. TDS nahi kata foreign client se, toh poora tax self-assess karo. GST mein LUT se zero-rated export declare karo.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Overpay &ndash; Choose the Right ITR Scheme for Your Profession</h2>
            <div class="content-text">
                
                <p>Professional and freelancer ITR must be filed by 31 July (non-audit) or 31 October (audit cases). Selecting the wrong presumptive scheme (44ADA vs 44AD) can mean overpaying tax by lakhs &ndash; a Powai IT freelancer on 44ADA (50%) pays Rs 8+ lakh more than on 44AD (6%). The Income Tax Department has comprehensive visibility through AIS data (194J/194C TDS), bank transaction monitoring, and GST cross-verification.</p>
                <p><strong>File your professional ITR with the right scheme &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20professional%2Ffreelancer%20ITR%20filing%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get CA-Assisted Professional &amp; Freelancer ITR Filing in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">ITR filing for professionals and freelancers in Mumbai spans the city's diverse professional landscape &ndash; from Fort CAs and Nariman Point lawyers using 44ADA to Powai IT freelancers benefiting from 44AD's dramatically lower 6% rate, from BKC management consultants requiring regular ITR-3 to Bandra architects and Dadar doctors under presumptive taxation.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines provides complete professional ITR filing &ndash; 3-way regime comparison, specified profession eligibility analysis, books preparation, tax audit coordination, foreign income handling, TDS reconciliation, GST registration, and e-filing for every type of professional and freelancer.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers tax-optimised professional ITR filing across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20professional%2Ffreelancer%20ITR%20filing%20in%20Mumbai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Professional &amp; Freelancer ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting serves professionals and freelancers in major cities with local office presence and tax regime expertise.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">ITR for Professionals &amp; Freelancers in Other Cities</div>
                        <div class="pa-block-sub">Professional and freelancer ITR filing across India</div>
                        <div class="pa-city-grid">
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/itr-filing-for-freelancers-professionals/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/itr-filing-for-freelancers-professionals/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end tax and compliance for professionals</div>
                        <div class="pa-cross-grid">
                            <a href="/income-tax-return/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/private-limited-company-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
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
            <p>This content is reviewed quarterly for accuracy of presumptive limits, tax audit thresholds, and GST requirements for professionals and freelancers. Freshness Tier: 1.</p>
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
