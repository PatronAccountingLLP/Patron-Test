
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>NGO Registration in Delhi - Trust, Society & Section 8 Co.</title>
    <meta name="description" content="CA-assisted NGO registration in Delhi. Trust, Society or Section 8 Company with 12A, 80G and FCRA. Serving ITO, Civil Lines, Saket NGOs. Call +91 945 945 6700.">
    <link rel="canonical" href="/ngo-registration/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="NGO Registration in Delhi - Trust, Society & Section 8 Co.">
    <meta property="og:description" content="CA-assisted NGO registration in Delhi. Trust, Society or Section 8 Company with 12A, 80G and FCRA. Serving ITO, Civil Lines, Saket NGOs. Call +91 945 945 6700.">
    <meta property="og:url" content="/ngo-registration/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NGO Registration in Delhi - Trust, Society & Section 8 Co.">
    <meta name="twitter:description" content="CA-assisted NGO registration in Delhi. Trust, Society or Section 8 Company with 12A, 80G and FCRA. Serving ITO, Civil Lines, Saket NGOs. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "NGO Registration in Delhi",
      "description": "CA-assisted NGO registration in Delhi. Trust, Society or Section 8 Company with 12A, 80G and FCRA. Serving ITO, Civil Lines, Saket NGOs. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/ngo-registration/delhi",
      "serviceType": "NGO Registration in Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi",
        "containedInPlace": {
          "@type": "State",
          "name": "Delhi"
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
        "url": "https://www.patronaccounting.com/ngo-registration/delhi",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "6999",
          "maxPrice": "9499",
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
          "name": "NGO Registration in India: Trust, Society & Section 8",
          "item": "https://www.patronaccounting.com/ngo-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "NGO Registration in Delhi",
          "item": "https://www.patronaccounting.com/ngo-registration/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which registrar handles NGO registration in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trusts: Sub-Registrar office in the relevant Delhi district. Societies: Registrar of Societies at East District office under Societies Registration Act, 1860 as amended by Delhi Act 26 of 1983. Section 8 Companies: RoC NCT of Delhi & Haryana at 4th Floor, IFCI Tower, 61 Nehru Place. Patron files with all three authorities."
          }
        },
        {
          "@type": "Question",
          "name": "How much does NGO registration cost in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trust: starting from INR 6,999 (including deed drafting, stamp paper, Sub-Registrar filing). Society: Rs 7,999-12,999 (including MOA, affidavits, Registrar fees). Section 8: Rs 9,499-14,999 (including DSC, DIN, SPICe+, RoC Delhi). 12A+80G bundle: Rs 5,000-8,000. Call +91 945 945 6700 for a quote."
          }
        },
        {
          "@type": "Question",
          "name": "How long does NGO registration take in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trust: 15-20 working days. Society: 20-25 working days (subject to Registrar verification). Section 8 Company: 10-15 working days (MCA portal + RoC Delhi). Delays occur if documents are incomplete or names rejected. Patron's pre-screening minimises rejection risk."
          }
        },
        {
          "@type": "Question",
          "name": "What is 12A and 80G registration for Delhi NGOs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "12A registration exempts the NGO's income from taxation. 80G enables donors to claim 50% tax deduction on donations. Both filed with Commissioner of Income Tax, Delhi. Critical for Delhi NGOs seeking individual and corporate donations. Patron files both simultaneously post-registration."
          }
        },
        {
          "@type": "Question",
          "name": "Can a Delhi NGO receive foreign donations?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, but only after FCRA registration under FCRA 2010 from Ministry of Home Affairs. NGO must have 3 years operational history and Rs 15 lakh activity expenditure. FCRA Division at CGO Complex, ITO, New Delhi gives Delhi NGOs proximity advantage. FCRA bank account required at SBI, 11 Parliament Street."
          }
        },
        {
          "@type": "Question",
          "name": "How many members are needed for NGO registration in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trust: minimum 2 trustees. Society: minimum 7 members from different families. Section 8 Company: minimum 2 directors (at least 1 Indian resident) and 2 shareholders. Patron advises on the optimal member composition for your specific charitable objectives. Quick Answers NGO registration kya hai? NGO registration ek legal process hai jismein aap Trust, Society ya Section 8 Company ke roop mein ek non-profit organisation bana sakte hain. Delhi mein Rs 6,999 se shuru. Delhi mein NGO ke liye kitne members chahiye? Trust ke liye 2 trustees, Society ke liye 7 members (alag-alag families se) aur Section 8 Company ke liye 2 directors chahiye. 12A aur 80G kya hota hai? 12A se NGO ki income tax-free hoti hai. 80G se donors ko unke donation pe 50% tax deduction milta hai. Dono Income Tax Department, Delhi se milte hain."
          }
        }
      ]
    }
  ]
}</script>
@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column  -  right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T)  -  Plan 3.1
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
           TOC NAVIGATION  -  Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
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
                        NGO Registration in Delhi: CA-Assisted Trust, Society and Section 8 Incorporation
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">13 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, address proof of members, registered office proof, trust deed/MOA/AOA, DSC (for Section 8)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from INR 6,999 for trust registration; Rs 9,499 for Section 8 Company in Delhi</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Trust: min 2 trustees | Society: min 7 members | Section 8: min 2 directors</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Trust: 15-20 days | Society: 20-25 days | Section 8: 10-15 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Trusted by Delhi NGOs across ITO, Civil Lines and Saket</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20NGO%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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

                    <iframe name='hidden208810000001209168Frame' id='hidden208810000001209168Frame' style='display:none;' src='about:blank'></iframe>

                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'NGO Registration in Delhi',
                                            'city'     => 'Delhi',
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
    'ctaText'    => 'Get expert CA-assisted NGO registration in Delhi with end-to-end support from structure advisory to 12A/80G/FCRA compliance.',
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
            <a href="#what-section" class="toc-btn">What Is NGO Reg</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Trust vs Society</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Registration in Delhi - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - NGO Registration in Delhi Services at a Glance</strong></p>
                    <p>NGO registration in Delhi creates a legally recognised non-profit entity - as a Trust under the Indian Trusts Act, 1882, a Society under the Societies Registration Act, 1860, or a Section 8 Company under the Companies Act, 2013. Delhi has the highest concentration of registered NGOs in India, with over 90,000 organisations working across education, healthcare, women's empowerment, child welfare and environment. Post-registration, NGOs apply for 12A and 80G certificates under the Income Tax Act for tax exemption and donor tax benefits, and FCRA registration under the Foreign Contribution Regulation Act, 2010 for receiving foreign donations.</p>
                </div>
                <p>Delhi is India's non-profit capital. The city's unique position as the seat of the central government, headquarters of major corporate CSR divisions, and home to international donor agencies makes it the most active hub for NGO activity in the country. From education-focused organisations in Vasant Kunj and Saket to healthcare NGOs near the AIIMS-Safdarjung corridor, religious trusts in Chandni Chowk and environmental groups across South Delhi, the city's non-profit ecosystem spans every sector. Learn more about <a href="/ngo-registration">NGO Registration across India</a>.</p>
                <p>The registration process depends on the chosen structure. Trusts are registered with the Sub-Registrar under the Indian Trusts Act, 1882. Societies are registered with the Registrar of Societies at the district level under the Societies Registration Act, 1860, as amended by Delhi Act 26 of 1983. Section 8 Companies are incorporated through RoC NCT of Delhi & Haryana at Nehru Place. Post-registration, NGOs need <a href="/income-tax-return">12A and 80G registration</a> with the Income Tax Department and <a href="/statutory-audit">Statutory Audit</a> for compliance.</p>
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
                <h2 class="section-title">What Is NGO Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>NGO registration is the legal process of incorporating a non-governmental organisation as a recognised entity under Indian law - either as a Trust, Society or Section 8 Company - to pursue charitable, educational, religious or social welfare objectives without profit distribution.</p>
                    <p>A registered NGO gains legal identity to open bank accounts, receive donations, apply for government grants, access CSR funding from corporates, and claim tax exemptions under Income Tax Act Sections 12A and 80G. Without registration, an organisation cannot issue tax-deductible donation receipts, receive foreign contributions under FCRA, or participate in government welfare schemes.</p>
                    <p>For Delhi's non-profit community - where organisations range from grassroots groups in Rohini and Dwarka serving local communities to large-scale NGOs headquartered near ITO and Connaught Place working on national policy - registration is the foundational step that provides legal standing, financial transparency and donor credibility. Delhi's proximity to central government ministries, the FCRA division of the Ministry of Home Affairs, and major CSR foundations makes formal registration especially valuable.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for NGO Registration in Delhi:</strong></p>
                    <p><strong>Trust:</strong> Non-profit entity under the Indian Trusts Act, 1882. Requires minimum 2 trustees. Trust deed on Delhi stamp paper. Registered with Sub-Registrar.</p>
                    <p><strong>Society:</strong> Non-profit entity under Societies Registration Act, 1860 (Delhi Act 26 of 1983). Minimum 7 members from different families. Registered with Registrar of Societies, East District Delhi.</p>
                    <p><strong>Section 8 Company:</strong> Non-profit company under Companies Act, 2013 Section 8. Minimum 2 directors. Incorporated through RoC Delhi at Nehru Place. Highest credibility structure.</p>
                    <p><strong>12A Registration:</strong> Income Tax exemption for the NGO's income. Provisional (3 years) or regular (5 years). Filed with Commissioner of Income Tax, Delhi.</p>
                    <p><strong>80G Registration:</strong> Enables donors to claim 50% tax deduction on donations. Critical for attracting Delhi's corporate and individual donor base.</p>
                    <p><strong>FCRA:</strong> Foreign Contribution Regulation Act, 2010. Registration required for receiving foreign donations. FCRA Division at CGO Complex, ITO, New Delhi.</p>
                    <p><strong>Delhi Stamp Act:</strong> Trust deeds executed in Delhi must be on stamp paper at rates prescribed under the Delhi Stamp Act.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NGO Registration in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Trusts Act 1882</span>
                        <strong>NGO Registered</strong>
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
            <h2 class="section-title">Who Needs NGO Registration in Delhi?</h2>
            <div class="content-text">
                
                <p><strong>Education-Focused Organisations:</strong> Organisations running schools, tuition centres, skill development programmes and scholarship funds in areas like Vasant Kunj, Saket, Rohini and Dwarka need formal NGO registration to access government education grants, CSR funding from Delhi-based corporates, and tax-exempt status for donor contributions.</p>
                <p><strong>Healthcare and Disability Welfare:</strong> Healthcare organisations operating near the AIIMS, Safdarjung Hospital and RML Hospital corridor in South and Central Delhi require NGO registration. Additionally, Section 51 registration under the Rights of Persons with Disabilities Act, 2016 may be needed.</p>
                <p><strong>Religious and Charitable Trusts:</strong> Religious and charitable trusts managing temples, gurudwaras, mosques, churches and dharamshalas across Chandni Chowk, Karol Bagh, Old Delhi and Mehrauli register as Trusts under the Indian Trusts Act, 1882. Trust registration is the simplest structure - needing only 2 trustees.</p>
                <p><strong>Social Welfare Societies:</strong> Societies focused on women's empowerment, child protection, environmental conservation, cultural promotion and sports development register under the Societies Registration Act, 1860. Societies need minimum 7 members. This structure suits organisations planning democratic governance with a general body and elected managing committee.</p>
                <p><strong>Professional and Large-Scale Non-Profits:</strong> Professional NGOs that require formal corporate governance, foreign donors' confidence and structured audit trails register as <a href="/section8-company-registration">Section 8 Companies</a> through RoC Delhi at Nehru Place. Section 8 is preferred by NGOs seeking FCRA registration, institutional CSR partnerships and international grant funding.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Services Included in NGO Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>NGO Structure Advisory</td><td>Personalised consultation to determine whether Trust, Society or Section 8 Company is the best structure for your Delhi-based charitable objectives, funding plans and governance requirements.</td></tr>
                        <tr><td>Trust Registration</td><td>Trust deed drafting with objects clause, trustee details and powers. Execution on Delhi stamp paper at applicable rates under Delhi Stamp Act. Registration with Sub-Registrar office. PAN application.</td></tr>
                        <tr><td>Society Registration</td><td>MOA and Rules & Regulations drafting. Affidavits in prescribed format. Filing with Registrar of Societies (East District, Delhi) under Societies Registration Act, 1860 as amended by Delhi Act 26 of 1983.</td></tr>
                        <tr><td>Section 8 Company Registration</td><td>DSC procurement, DIN application, name approval, SPICe+ filing with RoC Delhi at Nehru Place, MOA and AOA drafting, Section 8 licence application, Certificate of Incorporation with PAN and TAN.</td></tr>
                        <tr><td>12A Registration (Tax Exemption)</td><td>Application under Section 12A of Income Tax Act for exemption of NGO's income. Filed with Commissioner of Income Tax, Delhi. Valid for 5 years (provisional) or perpetual (regular).</td></tr>
                        <tr><td>80G Registration (Donor Tax Benefit)</td><td>Application under Section 80G enabling donors to claim 50% tax deduction on donations. Filed with IT Department, Delhi. Critical for attracting Delhi's corporate and individual donor base.</td></tr>
                        <tr><td>FCRA Registration</td><td>Application under FCRA 2010 with Ministry of Home Affairs for receiving foreign donations. FCRA Division at CGO Complex, ITO, New Delhi - locational advantage for Delhi NGOs. Also see <a href="/gst-registration/delhi">GST Registration in Delhi</a> if applicable.</td></tr>
                        <tr><td>Annual Compliance Setup</td><td>Filing calendar for society annual returns, trust annual accounts, Section 8 ROC filings (AOC-4, MGT-7), 12A/80G renewal tracking and FCRA annual return (Form FC-4).</td></tr>

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
            <h2 class="section-title">How NGO Registration Works in Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">End-to-end NGO registration for Delhi non-profits - from structure advisory and document drafting to registration filing, 12A/80G application and FCRA registration. Patron's Delhi office in Rohini coordinates all authorities.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Choose the Right NGO Structure</h3><p class="step-description">Patron's Delhi CA team assesses your charitable objectives, expected funding sources, governance preferences and long-term plans. Trust is simplest for grassroots work. Society suits democratic organisations with 7+ members. Section 8 offers highest credibility for FCRA, CSR and international grants.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Structure recommended</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Funding plan assessed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="25" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="32" y="42" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="bold">Trust</text><rect x="48" y="10" width="25" height="55" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="60" y="42" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="bold">Society</text><rect x="76" y="10" width="25" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="88" y="42" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="bold">Sec 8</text></svg></div><span class="illustration-label">Type Selected</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Draft Governing Documents</h3><p class="step-description">For Trust: trust deed specifying name, objects, trustee details and powers, printed on Delhi stamp paper. For Society: MOA and Rules & Regulations covering objects, membership, governing body. For Section 8: MOA and AOA with restricted objects clause for charitable purposes.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Delhi stamp paper</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Obtain DSC and DIN (Section 8 Only)</h3><p class="step-description">For Section 8 Companies, DSCs are procured for all proposed directors (minimum 2). DINs applied through MCA portal. Completed within 2-3 days. Trusts and Societies do not require DSCs or DINs. PAN, Aadhaar, address proof and photographs compiled for all structures.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC procured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIN applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="35" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="45" y="39" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial">DSC</text><circle cx="75" cy="35" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="75" y="39" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial">DIN</text></svg></div><span class="illustration-label">IDs Secured</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Registration with Delhi Authority</h3><p class="step-description">Trust: executed deed presented at Sub-Registrar office. Society: complete application filed with Registrar of Societies, East District Delhi. Section 8: SPICe+ filed electronically with RoC NCT of Delhi & Haryana at Nehru Place along with Section 8 licence application.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed with authority</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Zone-specific routing</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="30" y="35" width="40" height="6" rx="2" fill="#14365F" opacity="0.15"/><path d="M60 65L55 75L65 75Z" fill="#10B981"/><rect x="50" y="75" width="20" height="5" rx="2" fill="#10B981" opacity="0.5"/></svg></div><span class="illustration-label">App Submitted</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive Registration Certificate and PAN</h3><p class="step-description">Trust: Sub-Registrar stamps and returns registered deed. Society: Registrar issues certificate under Societies Registration Act. Section 8: RoC Delhi issues Certificate of Incorporation with CIN, PAN and TAN simultaneously. PAN applied separately for Trusts and Societies. NGO is now a legal entity.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bank account opened</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M54 30l4 4 8-8" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><rect x="35" y="50" width="50" height="8" rx="2" fill="#F5A623" opacity="0.3"/><path d="M55 75L60 68L65 75Z" fill="#F5A623"/></svg></div><span class="illustration-label">NGO Registered</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Apply for 12A, 80G and FCRA Registration</h3><p class="step-description">Patron files 12A with Commissioner of Income Tax, Delhi for tax exemption. 80G filed simultaneously for donor tax benefits. For NGOs planning foreign donations, FCRA registration applied with MHA at CGO Complex, ITO, New Delhi - a significant advantage for Delhi NGOs.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>12A + 80G filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FCRA advisory</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="40" height="30" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="35" y="28" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="bold">12A</text><rect x="65" y="10" width="40" height="30" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="85" y="28" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="bold">80G</text><rect x="35" y="50" width="50" height="30" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="60" y="68" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="bold">FCRA</text></svg></div><span class="illustration-label">Tax Exempt</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for NGO Registration in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>PAN Card of All Members/Trustees/Directors:</strong> Self-attested copy for identity verification.</li>
                    <li><strong>Aadhaar Card of All Members:</strong> Self-attested copy for address verification.</li>
                    <li><strong>Address Proof:</strong> Passport, Voter ID or Driving Licence for all members/trustees/directors.</li>
                    <li><strong>Passport-Size Photographs:</strong> Recent photographs with white background for all members.</li>
                    <li><strong>Registered Office Proof:</strong> Utility bill (electricity/water, not older than 2 months) of proposed Delhi office. Rent agreement and NOC from property owner if rented.</li>
                    <li><strong>Trust Deed (for Trust):</strong> Executed on Delhi stamp paper at applicable stamp duty under Delhi Stamp Act. Contains name, objects, trustee details and powers.</li>
                    <li><strong>MOA and Rules & Regulations (for Society):</strong> 2 copies each. Signed by all 7+ founding members. Includes objects, governing body structure and bye-laws.</li>
                    <li><strong>MOA and AOA (for Section 8):</strong> Drafted with restricted objects clause. Filed electronically through MCA portal.</li>
                    <li><strong>Affidavits (for Society):</strong> Prescribed format on Rs 10 non-judicial stamp paper - declaration by President/Secretary. Attested by Oath Commissioner or Notary Public.</li>
                    <li><strong>Cover Letter (for Society):</strong> Addressed to Registrar of Societies (East), Delhi, containing purpose and objectives.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Delhi-specific tip:</strong> For societies with registered offices in co-working spaces or shared offices in Connaught Place or ITO, the NOC must be from the actual property owner (not the co-working operator) along with a utility bill in the owner's name.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in NGO Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Trust vs Society vs Section 8 Confusion</td><td>First-time founders struggle to choose - each has different compliance, cost and governance implications</td><td>Patron provides structured comparison based on objectives, funding plans and governance preferences</td></tr>
                        <tr><td>Society Registration Delays</td><td>Incomplete documentation causes rejections and resubmission cycles at Registrar of Societies, Delhi</td><td>Patron pre-screens all documents against Registrar's checklist before filing</td></tr>
                        <tr><td>12A and 80G Application Rejections</td><td>Mismatch between objects clause and activities, incomplete financials</td><td>Patron ensures objects clause precisely aligned with IT Act requirements before filing</td></tr>
                        <tr><td>FCRA Registration Complexity</td><td>Requires 3 years operational history and Rs 15 lakh activity expenditure - premature applications rejected</td><td>Patron advises on FCRA timing and handles complete FC-3A application when NGO meets eligibility</td></tr>

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
            <h2 class="section-title">NGO Registration Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Registration</td><td class="table-amount">Starting from INR 6,999 (Exl GST and Govt. Charges) | Timeline: 15-20 working days</td></tr>
                        <tr><td>Society Registration</td><td class="table-amount">Rs 7,999 - Rs 12,999 | Timeline: 20-25 working days</td></tr>
                        <tr><td>Section 8 Company</td><td class="table-amount">Rs 9,499 - Rs 14,999 | Timeline: 10-15 working days</td></tr>
                        <tr><td>12A Registration (Tax Exemption)</td><td class="table-amount">Rs 3,000 - Rs 5,000 | IT Dept: 30-60 days</td></tr>
                        <tr><td>80G Registration (Donor Tax Benefit)</td><td class="table-amount">Rs 3,000 - Rs 5,000 | IT Dept: 30-60 days</td></tr>
                        <tr><td>FCRA Registration</td><td class="table-amount">Rs 15,000 - Rs 25,000 | MHA: 90-120 days</td></tr>
                        <tr><td>12A + 80G Bundle</td><td class="table-amount">Rs 5,000 - Rs 8,000 | Filed simultaneously</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free NGO Registration in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20NGO%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for NGO Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Drafting</td><td>Trust: 3-5 days | Society: 5-7 days | Section 8: 5-7 days</td></tr>
                        <tr><td>Stamp Paper/DSC</td><td>Trust: 1-2 days | Society: 1-2 days | Section 8: 2-3 days (DSC + DIN)</td></tr>
                        <tr><td>Filing with Authority</td><td>1 day for all structures</td></tr>
                        <tr><td>Authority Processing</td><td>Trust: 10-15 days | Society: 15-20 days | Section 8: 7-10 days (RoC Delhi)</td></tr>
                        <tr><td>Certificate Issuance</td><td>Trust: same day as processing | Society: post-verification | Section 8: digital from RoC</td></tr>
                        <tr><td>PAN Application</td><td>Trust/Society: 3-5 days (separate) | Section 8: simultaneous with COI</td></tr>
                        <tr><td>Total</td><td>Trust: 15-20 days | Society: 20-25 days | Section 8: 10-15 days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Delhi Processing Note:</strong> Patron's Delhi office in Rohini coordinates all registrations - Sub-Registrar for trusts, Registrar of Societies for societies, and RoC Delhi at Nehru Place for Section 8 companies. Walk-in consultations available. The FCRA Division at CGO Complex, ITO is locally accessible for Delhi NGOs, giving them a faster processing advantage over non-Delhi organisations.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for NGO Registration in Delhi</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Delhi Office at Rohini</h3><p>In-person consultations for NGO founders. Document collection, stamp paper procurement and registration filings coordinated on-site for all Delhi zones.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>CA and CS Expertise for All Three Structures</h3><p>Qualified CAs and Company Secretaries handle Trust deeds, Society MOAs and Section 8 incorporations. Same team manages 12A, 80G and FCRA applications.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Integrated Post-Registration Services</h3><p>Ongoing compliance - annual trust accounts, society annual returns, Section 8 ROC filings, 12A/80G renewal tracking, FCRA annual return and statutory audit from same team.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3>Delhi CSR Ecosystem Access</h3><p>Patron advises Delhi NGOs on CSR funding opportunities from NCR corporates, government grant applications and donor engagement. Proximity to FCRA Division at ITO ensures faster follow-up.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves Delhi NGOs with both in-person and online registration support. Our Delhi CA team at Rohini has helped hundreds of trusts, societies and Section 8 companies complete registration and secure 12A, 80G and FCRA approvals.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust vs Society vs Section 8 Company for Delhi NGOs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Trust</th><th>Society</th><th>Section 8 Company</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Indian Trusts Act, 1882</td><td>Societies Reg. Act, 1860 (Delhi Act 26/1983)</td><td>Companies Act, 2013 Section 8</td></tr>
                        <tr><td>Minimum Members</td><td>2 trustees</td><td>7 members (different families)</td><td>2 directors + 2 shareholders</td></tr>
                        <tr><td>Registration Authority</td><td>Sub-Registrar, Delhi</td><td>Registrar of Societies, East District Delhi</td><td>RoC NCT Delhi & Haryana, Nehru Place</td></tr>
                        <tr><td>Formation Document</td><td>Trust Deed (Delhi stamp paper)</td><td>MOA + Rules & Regulations</td><td>MOA + AOA (electronic filing)</td></tr>
                        <tr><td>Governance</td><td>Trustee-managed; less democratic</td><td>General Body + Managing Committee (democratic)</td><td>Board of Directors (corporate governance)</td></tr>
                        <tr><td>FCRA Eligibility</td><td>Yes (after 3 years)</td><td>Yes (after 3 years)</td><td>Yes (after 3 years) - preferred by foreign donors</td></tr>
                        <tr><td>Cost (Patron)</td><td>Rs 6,999 - Rs 7,999</td><td>Rs 7,999 - Rs 12,999</td><td>Rs 9,499 - Rs 14,999</td></tr>
                        <tr><td>Best For</td><td>Religious trusts, family charities, small welfare</td><td>Education, culture, sports, community organisations</td><td>Large-scale NGOs, foreign-funded, institutional partnerships</td></tr>

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
            <h2 class="section-title">Related Services for Delhi NGOs</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/ngo-registration">NGO Registration in India</a> - Parent service covering all NGO registration types across India</li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - For-profit company incorporation through RoC Delhi</li>
                    <li><a href="/gst-registration">GST Registration</a> - GST compliance for NGOs with taxable supplies</li>
                    <li><a href="/statutory-audit">Statutory Audit Service</a> - Mandatory annual audit for 12A-registered NGOs and Section 8 companies</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing for NGOs and charitable organisations</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Bookkeeping and accounting for Delhi NGOs</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for NGO Registration</h2>
            <div class="content-text">
                
                <p><strong>Indian Trusts Act, 1882:</strong> Governs private and public charitable trusts. Trust deed must specify objects, trustee details, powers and beneficiaries. Registration with Sub-Registrar provides legal standing in Delhi.</p>
                <p><strong>Societies Registration Act, 1860 (Delhi Act 26 of 1983):</strong> Governs societies in Delhi. Requires minimum 7 members. Registration with Registrar of Societies at district level. Annual return of member list to be filed. Source: <a href="https://dmeast.delhi.gov.in/departments/registrar-of-societies-firms/" target="_blank" rel="noopener">dmeast.delhi.gov.in</a>.</p>
                <p><strong>Companies Act, 2013 - Section 8:</strong> Governs non-profit companies. Section 8 licence issued by Central Government. Profits applied towards objects only. Annual compliance: AOC-4, MGT-7, statutory audit, AGM. Non-filing attracts Rs 100 per day per form penalty.</p>
                <p><strong>Income Tax Act - Section 12A:</strong> Registration exempts NGO's income from taxation. Provisional (3 years), regular (5 years renewable). Filed with Commissioner of Income Tax, Delhi.</p>
                <p><strong>Income Tax Act - Section 80G:</strong> Registration enables donors to claim 50% deduction. Critical for Delhi NGOs seeking individual and corporate donations.</p>
                <p><strong>Foreign Contribution Regulation Act, 2010:</strong> Governs foreign donation receipt. FCRA registration requires 3 years existence and Rs 15 lakh activity expenditure. FCRA Division at CGO Complex, ITO, New Delhi. Annual return Form FC-4 by 31 December. FCRA bank account at SBI, Main Branch, 11 Parliament Street, New Delhi.</p>
                <p><strong>Delhi Stamp Act:</strong> Trust deeds executed in Delhi require stamp paper at prescribed rates. E-stamping available through SHCIL.</p>

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
                    <h2 class="faq-expanded__title">FAQs - NGO Registration in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about NGO registration for Delhi non-profits answered by our CA team</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'NGO Registration in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which registrar handles NGO registration in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Trusts: Sub-Registrar office in the relevant Delhi district. Societies: Registrar of Societies at East District office under Societies Registration Act, 1860 as amended by Delhi Act 26 of 1983. Section 8 Companies: RoC NCT of Delhi & Haryana at 4th Floor, IFCI Tower, 61 Nehru Place. Patron files with all three authorities.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does NGO registration cost in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Trust: starting from INR 6,999 (including deed drafting, stamp paper, Sub-Registrar filing). Society: Rs 7,999-12,999 (including MOA, affidavits, Registrar fees). Section 8: Rs 9,499-14,999 (including DSC, DIN, SPICe+, RoC Delhi). 12A+80G bundle: Rs 5,000-8,000. Call +91 945 945 6700 for a quote.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does NGO registration take in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Trust: 15-20 working days. Society: 20-25 working days (subject to Registrar verification). Section 8 Company: 10-15 working days (MCA portal + RoC Delhi). Delays occur if documents are incomplete or names rejected. Patron's pre-screening minimises rejection risk.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is 12A and 80G registration for Delhi NGOs?</h3>
                        <div class="faq-expanded__a"><p>12A registration exempts the NGO's income from taxation. 80G enables donors to claim 50% tax deduction on donations. Both filed with Commissioner of Income Tax, Delhi. Critical for Delhi NGOs seeking individual and corporate donations. Patron files both simultaneously post-registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a Delhi NGO receive foreign donations?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only after FCRA registration under FCRA 2010 from Ministry of Home Affairs. NGO must have 3 years operational history and Rs 15 lakh activity expenditure. FCRA Division at CGO Complex, ITO, New Delhi gives Delhi NGOs proximity advantage. FCRA bank account required at SBI, 11 Parliament Street.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How many members are needed for NGO registration in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Trust: minimum 2 trustees. Society: minimum 7 members from different families. Section 8 Company: minimum 2 directors (at least 1 Indian resident) and 2 shareholders. Patron advises on the optimal member composition for your specific charitable objectives.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>NGO registration kya hai?</strong> NGO registration ek legal process hai jismein aap Trust, Society ya Section 8 Company ke roop mein ek non-profit organisation bana sakte hain. Delhi mein Rs 6,999 se shuru.</p>
                <p><strong>Delhi mein NGO ke liye kitne members chahiye?</strong> Trust ke liye 2 trustees, Society ke liye 7 members (alag-alag families se) aur Section 8 Company ke liye 2 directors chahiye.</p>
                <p><strong>12A aur 80G kya hota hai?</strong> 12A se NGO ki income tax-free hoti hai. 80G se donors ko unke donation pe 50% tax deduction milta hai. Dono Income Tax Department, Delhi se milte hain.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay - Register Your Delhi NGO Now</h2>
            <div class="content-text">
                
                <p>Operating a charitable organisation in Delhi without formal registration means no legal identity, no tax exemption under Section 12A, no donor tax benefit under Section 80G, no access to CSR funding and no eligibility for government grants. Unregistered organisations cannot open designated bank accounts or issue tax-deductible donation receipts.</p>
                <p>For FCRA registration, the 3-year operational history requirement means every month of delay in initial registration pushes FCRA eligibility further. Section 8 Companies that fail to file annual returns face Rs 100 per day per form penalty and risk director DIN deactivation. <strong>Register your NGO now to establish legal standing and begin building the operational track record required for institutional funding.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get NGO Registration in Delhi - Start Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">NGO registration in Delhi provides the legal foundation for charitable, educational, healthcare and social welfare organisations to operate with credibility, receive tax-exempt donations and access institutional funding. Delhi's position as India's non-profit capital - with proximity to the FCRA Division, central government ministries and major corporate CSR headquarters - makes formal registration especially valuable.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Delhi office in Rohini provides end-to-end CA-assisted NGO registration across all three structures - Trust, Society and Section 8 Company. Our integrated approach covers registration, 12A/80G certification, FCRA advisory and ongoing annual compliance from a single CA team.</p>
                <p style="color:rgba(255,255,255,0.9);">For Delhi social entrepreneurs evaluating NGO registration, Patron offers a free consultation to assess your objectives, recommend the right structure, estimate costs and provide a transparent timeline for incorporation.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20NGO%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NGO%20Registration%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20NGO%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">NGO Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides NGO registration services for non-profits in major cities across India. Select your city below.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/ngo-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/ngo-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/ngo-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <a href="/ngo-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="/ngo-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <a href="/ngo-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                    <a href="/ngo-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end non-profit compliance in Delhi</div>
                <div class="pa-cross-grid">
                    <a href="/section8-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/80g-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">12A and 80G Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on NGO Registration in Delhi is reviewed quarterly by our CA & CS team. Content accuracy is verified against the latest Income Tax rules, FCRA amendments and Registrar of Societies Delhi requirements. Freshness Tier 2.</p>
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






<!-- ============================================
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
     ============================================ -->


<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->

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
