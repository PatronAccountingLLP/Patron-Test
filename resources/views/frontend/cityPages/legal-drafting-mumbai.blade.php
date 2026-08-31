
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
    <title>Legal Drafting in Mumbai – Contracts, Agreements &amp; MOU</title>
    <meta name="description" content="CA and CS-assisted legal drafting in Mumbai. Contracts, NDA, SHA, MOU, employment, lease, corporate agreements. Maharashtra stamp duty. Call +91 945 945 6700.">
    <link rel="canonical" href="/legal-drafting/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Legal Drafting in Mumbai – Contracts, Agreements &amp; MOU">
    <meta property="og:description" content="CA and CS-assisted legal drafting in Mumbai. Contracts, NDA, SHA, MOU, employment, lease, corporate agreements. Maharashtra stamp duty. Call +91 945 945 6700.">
    <meta property="og:url" content="/legal-drafting/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Legal Drafting in Mumbai – Contracts, Agreements &amp; MOU">
    <meta name="twitter:description" content="CA and CS-assisted legal drafting in Mumbai. Contracts, NDA, SHA, MOU, employment, lease, corporate agreements. Maharashtra stamp duty. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Legal Drafting Services in Mumbai",
      "description": "CA and CS-assisted legal drafting in Mumbai. Contracts, NDA, SHA, MOU, employment, lease, corporate agreements. Maharashtra stamp duty. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/legal-drafting/mumbai",
      "serviceType": "Legal Drafting Services in Mumbai",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai"
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
        "url": "https://www.patronaccounting.com/legal-drafting/mumbai",
        "price": "3000"
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
          "name": "Legal Drafting Service",
          "item": "https://www.patronaccounting.com/legal-drafting"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Legal Drafting Services in Mumbai",
          "item": "https://www.patronaccounting.com/legal-drafting/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What legal drafting services are available in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "20+ document types: corporate (SHA, MOA, resolutions), commercial (MSA, SLA, vendor), startup (SHA, ESOP, NDA, investment), employment (contracts, offer letters), real estate (leave and licence, lease, sale), technology (SaaS, licensing, privacy), and dispute (notices, settlements). All by CA and CS professionals with tax and compliance alignment."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between drafting and vetting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Drafting: creating new document from scratch based on client requirements. Vetting: examining counterparty-drafted document to identify unfavourable terms, missing protections, and legal risks with redline comments. Patron provides both. Most Mumbai VC fundraising involves vetting investor-drafted SHA and term sheets."
          }
        },
        {
          "@type": "Question",
          "name": "What documents need stamp duty in Maharashtra?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most agreements need stamp duty. Key rates: leave and licence (11 months) Rs 100-500, sale agreement 5-6% of consideration, partnership deed Rs 500, POA Rs 500, NDA/employment Rs 100-200. Insufficient stamp paper renders documents inadmissible in court. Maharashtra e-stamping via GRAS portal is preferred."
          }
        },
        {
          "@type": "Question",
          "name": "What is a shareholders agreement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Contract between shareholders governing: board composition, reserved matters (veto), share transfer restrictions (ROFR), anti-dilution, drag-along/tag-along, information rights, exit provisions (IPO, sale), founder vesting, non-compete, dispute resolution. Most critical document for Powai startups after incorporation."
          }
        },
        {
          "@type": "Question",
          "name": "Can agreements be executed digitally?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, for most contracts under IT Act Section 5 - electronic signatures have same validity as wet signatures. Exceptions: negotiable instruments, powers of attorney, trusts, wills, and documents requiring Sub-Registrar registration (need physical presence). Patron facilitates digital execution for eligible Mumbai agreements."
          }
        },
        {
          "@type": "Question",
          "name": "How much does legal drafting cost in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Simple agreements (NDA, MOU) from Rs 3,000. Employment packages from Rs 8,000. SHA from Rs 15,000. Investment agreements from Rs 15,000. Startup packages from Rs 30,000. Fixed-fee pricing, typically 30-50% lower than standalone Mumbai law firms due to integrated CA+CS approach."
          }
        },
        {
          "@type": "Question",
          "name": "Which agreements need registration in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mandatory registration: property sale deeds, lease deeds exceeding 11 months, gift deeds for immovable property. Leave and licence (11-month Mumbai standard) does not legally require registration but is recommended. Most commercial contracts (MSA, NDA, SHA) do not require registration."
          }
        },
        {
          "@type": "Question",
          "name": "What is included in a startup document package?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SHA with investor/founder provisions, ESOP Scheme with grant letter template, NDA (mutual and one-way), Employment Agreement template for key hires, Consultancy Agreement for advisors, Investment Agreement framework. All internally consistent. SHA aligns with investment agreement. ESOP aligns with Companies Act. Delivered in 15-20 working days."
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
                        Legal Drafting Services in Mumbai: Contracts, Agreements, and Corporate Documentation by CA and CS Professionals
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Corporate:</span> SHA, MOA/AOA, Board Resolutions, JV Agreement, Partnership Deed &ndash; Companies Act aligned</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Commercial:</span> MSA, SLA, Vendor/Supplier, Distribution, Franchise, Consultancy &ndash; GST and TDS integrated</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Startup Package:</span> SHA + ESOP Scheme + NDA + Investment Agreement + Employment &ndash; internally consistent bundle</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Real Estate:</span> Leave and Licence (Mumbai 11-month), Lease Deed, Sale Agreement &ndash; Maharashtra stamp duty and e-stamping</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Integrated CA + CS drafting &ndash; 10,000+ businesses served with 4.9&#9733; Google rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20legal%20drafting%20services%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Legal Drafting',
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
                    <p>Get your agreements drafted by a CA &amp; CS team that integrates tax, compliance, and Maharashtra stamp duty into every document.</p>
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
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Stamp Duty</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Drafting Services in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Legal Drafting Services at a Glance</strong></p>
                    <p>Legal drafting is the precise preparation of written legal documents that create, modify, or terminate rights and obligations between parties. Mumbai businesses need professionally drafted contracts covering: corporate agreements (SHA, MOA, resolutions), commercial contracts (MSA, SLA, vendor), startup documents (SHA, ESOP, NDA, investment), employment (contracts, offer letters, NDA), real estate (leave and licence, lease, sale), technology (SaaS, licensing, privacy), and cross-border agreements (FEMA-compliant). Patron's integrated CA + CS approach ensures every document is aligned with GST, TDS, Companies Act, FEMA, and Maharashtra stamp duty &ndash; not just legal validity.</p>
                </div>
                <p>Mumbai's diverse business landscape generates unique drafting needs: Powai startups need SHA + ESOP + NDA + investment agreement as internally consistent bundles. BKC corporates need large-value MSAs with multi-year terms and GST/TDS clauses. Nariman Point M&amp;A transactions need SPA + BTA documentation. Andheri media companies need production and talent agreements. All Mumbai real estate uses the standard 11-month leave and licence format with Maharashtra stamp duty. Learn more about <a href="/legal-drafting">Legal Drafting across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines provides integrated CA + CS legal drafting: custom agreement drafting, agreement vetting/review, Maharashtra e-stamping coordination, Sub-Registrar registration support, and post-drafting ROC/RBI filings. For ongoing compliance, see <a href="/private-limited-company-compliance">Private Limited Company Compliance</a>.</p>
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
                <h2 class="section-title">What Is Legal Drafting?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Legal drafting is the precise art of preparing written legal documents that create, modify, or terminate rights and obligations between parties. A well-drafted document is clear, unambiguous, legally enforceable, and aligned with the applicable laws of the jurisdiction.</p>
                    <p>Under the Indian Contract Act, 1872, a valid contract requires: offer, acceptance, consideration, free consent of parties competent to contract, and a lawful object. Legal drafting translates business intent into these legal elements, adding protective clauses (indemnity, limitation of liability, termination, dispute resolution, confidentiality, force majeure) that anticipate potential issues. For <a href="/trademark-registration">Trademark Registration</a>, IP clauses in contracts are critical.</p>
                    <p>For Mumbai businesses, legal drafting must additionally address: Maharashtra stamp duty (varies by document type), registration requirements (mandatory for property transactions, leases &gt; 11 months), jurisdiction clauses (Bombay High Court or Mumbai arbitration), and sector-specific regulations (RBI for financial contracts, SEBI for securities, DPDP Act for data). Patron's integrated CA + CS approach ensures every document has tax, compliance, and regulatory alignment.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Legal Drafting:</strong></p>
                    <ul>
                        <li><strong>Indian Contract Act, 1872:</strong> Valid contracts require offer, acceptance, consideration, free consent, competent parties, lawful object</li>
                        <li><strong>Shareholders Agreement (SHA):</strong> Governs board rights, transfer restrictions, anti-dilution, exit provisions, dispute resolution</li>
                        <li><strong>Maharashtra Stamp Duty:</strong> State stamp duty varies by document type &ndash; e-stamping via GRAS portal preferred</li>
                        <li><strong>Leave and Licence:</strong> Standard Mumbai 11-month rental agreement under Maharashtra Rent Control Act</li>
                        <li><strong>Section 27, Indian Contract Act:</strong> Non-compete clauses void; non-solicitation enforceable in India</li>
                        <li><strong>IT Act Section 5:</strong> Electronic signatures have same legal validity as wet signatures (with specific exclusions)</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Legal Drafting</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA &amp; CS Drafted</span>
                        <strong>Legal Documents</strong>
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
            <h2 class="section-title">Who Needs Legal Drafting Services in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Startups at Powai and Andheri</strong> &ndash; Founders' agreement, SHA (governance, exit, anti-dilution), ESOP scheme, NDA, investment agreement, convertible note terms, employment agreements for key hires. Patron provides a startup document package covering all critical agreements.</p>
                <p><strong>Corporates at BKC and Nariman Point</strong> &ndash; MSA, SLA, vendor/supplier contracts, distribution, franchise, JV agreements. Cross-border contracts requiring FEMA compliance and arbitration clauses. Patron drafts with GST, TDS, and international trade law alignment.</p>
                <p><strong>M&amp;A at Nariman Point and Fort</strong> &ndash; Term sheets, SPA, BTA, asset purchase, merger scheme documentation. Integrated with Companies Act filings and tax planning. See <a href="/issue-of-shares">Issue of Shares</a> for related allotment compliance.</p>
                <p><strong>Real estate across Mumbai</strong> &ndash; Leave and licence (11-month standard), lease deeds (&gt; 11 months, registered), sale agreements, development agreements. Maharashtra stamp duty computed and Sub-Registrar coordination provided.</p>
                <p><strong>Media and entertainment at Andheri and Film City</strong> &ndash; Production, talent, distribution, music licensing, OTT platform, and brand endorsement contracts.</p>
                <p><strong>Technology companies at Powai, Andheri, BKC</strong> &ndash; SaaS agreements, software development contracts, API licensing, data processing (DPDP Act), privacy policies, terms of service.</p>
                <p><strong>All Mumbai businesses</strong> &ndash; Employment agreements (Maharashtra Shops Act compliant), consultancy, NDA, power of attorney, partnership deeds. Every business relationship benefits from professional drafting.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Drafting Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Custom Agreement Drafting</td><td>New agreements from scratch: clear definitions, detailed obligations, payment terms with GST/TDS, confidentiality, indemnity, termination, dispute resolution (arbitration or Bombay High Court), force majeure, compliance with sector regulations</td></tr>
                        <tr><td>Agreement Vetting &amp; Review</td><td>Third-party drafted document review: unfavourable terms, hidden liabilities, missing protections, ambiguous language, stamp duty gaps, regulatory non-compliance. Detailed redline markup with recommendations. Critical for Powai startups vetting investor SHA</td></tr>
                        <tr><td>Shareholders Agreement (SHA)</td><td>Board composition, reserved matters (veto), share transfer restrictions (ROFR), anti-dilution, drag-along/tag-along, exit provisions, founder vesting, non-solicitation, arbitration (SIAC/Mumbai seat). Balances founder control with investor protection</td></tr>
                        <tr><td>ESOP Scheme &amp; Grant Letters</td><td>Board/shareholder approved scheme, individual grants, 4-year vesting with 1-year cliff, exercise terms, trust deed. Tax advisory: perquisite tax at exercise (S17(2)), capital gains at sale. Companies Act Section 62(1)(b) aligned</td></tr>
                        <tr><td>Commercial Contracts (MSA, SLA)</td><td>Scope, service levels, payment with GST/TDS, IP ownership, data protection, liability caps, indemnity, termination, transition assistance. For BKC IT services, consulting, outsourcing</td></tr>
                        <tr><td>Employment &amp; HR Documents</td><td>Maharashtra Shops Act compliant: working hours, leave, termination notice, gratuity, PT Rs 2,500/year, EPF/ESIC. NDA, non-solicitation (non-compete unenforceable under S27), IP assignment, garden leave</td></tr>
                        <tr><td>Leave and Licence (Mumbai 11-month)</td><td>Standard Mumbai format: correct Maharashtra e-stamping, security deposit, maintenance, lock-in, renewal, landlord PAN for HRA. Sub-Registrar registration (optional but recommended)</td></tr>
                        <tr><td>Cross-Border Agreements</td><td>FEMA-compliant foreign exchange provisions, governing law selection, ICC/SIAC arbitration or Bombay High Court, currency terms, data transfer (DPDP Act). For BKC MNCs and Powai startups with foreign investors</td></tr>

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
            <h2 class="section-title">Legal Drafting Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron delivers standard documents in 2-7 working days and complex agreements (SHA, investment) in 10-20 working days. Every document includes tax, compliance, and Maharashtra stamp duty alignment.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Requirement Understanding</h3><p class="step-description">Detailed discussion: business context, parties involved, commercial terms, risk concerns, regulatory considerations. For Powai startup SHA: cap table, investor rights, founder concerns, board structure, exit expectations. CA+CS team identifies tax and compliance implications to reflect in the agreement.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Requirements captured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax implications identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 55l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Brief Ready</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Structure &amp; Strategy</h3><p class="step-description">Determine optimal document structure, key clauses, and legal strategy. For complex documents (SHA, JV, M&amp;A), Patron prepares a term sheet or clause outline for client approval before full drafting. For Mumbai real estate: correct document type (leave and licence vs lease), stamp duty category, registration requirement.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Structure approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Strategy aligned</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Planned</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Professional Drafting</h3><p class="step-description">CA and CS team drafts with: precise definitions, clear obligations, protective clauses, tax/compliance alignment (GST, TDS, FEMA, Companies Act), Maharashtra stamp duty provisions, and dispute resolution framework. Plain English drafting. 3-7 working days (standard) or 7-15 working days (complex SHA, M&amp;A).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Draft delivered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance integrated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="18" y1="25" x2="48" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="73" y1="25" x2="103" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Drafted</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Review &amp; Negotiation Support</h3><p class="step-description">Client reviews draft. Patron incorporates changes and assists with counterparty negotiations. For investor-drafted SHA/term sheets: redline comments and negotiation talking points for Mumbai startup founders. For commercial contracts: participation in negotiation calls or meetings.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Changes incorporated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Negotiation supported</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Finalised</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Execution &amp; Compliance</h3><p class="step-description">Finalise document. Arrange Maharashtra e-stamping (stamp duty). Coordinate execution (wet signatures or e-signatures under IT Act). Sub-Registrar registration where required. File consequential forms with ROC (MGT-14, PAS-3) or RBI (FC-GPR) if applicable. Patron ensures full compliance.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-stamped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Executed &amp; filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">05</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Covered &ndash; Comprehensive List</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Corporate:</strong> SHA, MOA/AOA alteration, Board Resolutions, EGM Resolutions, Partnership Deed, LLP Agreement, JV Agreement</li>
                    <li><strong>Investment:</strong> Term Sheet, Subscription Agreement, SPA, Convertible Note, SAFE, Investment Agreement</li>
                    <li><strong>Commercial:</strong> MSA, SLA, Vendor/Supplier Contract, Distribution, Franchise, Consultancy, Retainer</li>
                    <li><strong>Employment/HR:</strong> Employment Contract, Offer Letter, NDA, Non-Compete/Non-Solicitation, ESOP Scheme, Separation Agreement</li>
                    <li><strong>Real Estate:</strong> Leave and Licence (11-month), Lease Deed, Sale Agreement, Development Agreement, Construction Contract</li>
                    <li><strong>Technology:</strong> SaaS Agreement, Software Development, API Licensing, Privacy Policy, Terms of Service, Data Processing Agreement</li>
                    <li><strong>Media/Entertainment:</strong> Production, Talent, Distribution, Music Licensing, OTT, Brand Endorsement</li>
                    <li><strong>Finance:</strong> Loan Agreement, Pledge, Hypothecation, Personal/Corporate Guarantee, ECB Agreement</li>
                    <li><strong>IP:</strong> Trademark Licence, Copyright Assignment, Technology Transfer, IP Assignment, Brand Licensing</li>
                    <li><strong>Dispute:</strong> Legal Notice (Section 80 CPC), Demand Notice, Cease and Desist, Settlement Agreement</li>
                    <li><strong>Others:</strong> Power of Attorney, Gift Deed, Will, Family Settlement, Indemnity Bond, Affidavit</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Legal Drafting in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Using Generic Online Templates</td><td>Templates are jurisdiction-agnostic: no Maharashtra stamp duty, no Mumbai Sub-Registrar requirements, no GST/TDS/FEMA clauses, no Bombay High Court jurisdiction. Generic NDAs may not protect trade secrets under Indian IP law</td><td>Every document custom-drafted for Mumbai jurisdiction with Maharashtra stamp duty, GST/TDS, Bombay HC jurisdiction, and sector-specific regulations built in</td></tr>
                        <tr><td>Tax-Legal Misalignment</td><td>Standalone law firms draft without GST implications (reverse charge, input credit), TDS provisions (Section 194J/194C rates), or income tax structuring. Creates compliance gaps discovered during audit</td><td>Integrated CA+CS drafting: GST SAC codes, TDS sections, income tax implications in every contract clause. Tax and legal aligned from draft stage</td></tr>
                        <tr><td>Stamp Duty Non-Compliance</td><td>Agreements on insufficient stamp paper are inadmissible in court. Many Mumbai businesses underpay stamp duty or use physical stamp paper instead of e-stamping</td><td>Maharashtra stamp duty computed for every document type. E-stamping via GRAS portal arranged. Court-admissible documents guaranteed</td></tr>
                        <tr><td>Non-Compete Clause Enforceability</td><td>Indian law (Section 27, Contract Act) renders post-employment non-compete clauses void. Many contracts include unenforceable non-competes giving false security</td><td>Non-solicitation (enforceable) drafted instead of non-compete. Garden leave provisions where appropriate. IP assignment clauses for protection</td></tr>
                        <tr><td>Cross-Border Complexity</td><td>International contracts require governing law selection, dispute venue (ICC/SIAC vs foreign courts), FEMA compliance for payments, withholding tax under DTAA, and data transfer provisions</td><td>Cross-border agreements with all regulatory dimensions addressed: FEMA, governing law, arbitration, withholding tax, data transfer (DPDP Act)</td></tr>

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
            <h2 class="section-title">Legal Drafting Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Maharashtra Stamp Duty &ndash; Leave and Licence (11 months)</td><td>Rs 100-500 (based on rent and deposit; e-stamping)</td></tr>
                        <tr><td>Maharashtra Stamp Duty &ndash; Sale Agreement</td><td>5-6% of consideration value (plus 1% registration fee)</td></tr>
                        <tr><td>Maharashtra Stamp Duty &ndash; Partnership Deed / POA</td><td>Rs 500 (fixed duty)</td></tr>
                        <tr><td>Patron Fee &ndash; Simple Agreement (NDA, MOU, Consultancy)</td><td>Starting Rs 3,000</td></tr>
                        <tr><td>Patron Fee &ndash; Employment Agreement Package (5 templates)</td><td>Starting Rs 8,000 (offer + contract + NDA + IP + separation)</td></tr>
                        <tr><td>Patron Fee &ndash; Leave and Licence (Mumbai)</td><td>Starting Rs 3,000 (drafting + e-stamping + execution)</td></tr>
                        <tr><td>Patron Fee &ndash; Shareholders Agreement</td><td>Starting Rs 15,000 (comprehensive SHA with negotiation support)</td></tr>
                        <tr><td>Patron Fee &ndash; MSA / Commercial Contract</td><td>Starting Rs 8,000 (customised with GST/TDS clauses)</td></tr>
                        <tr><td>Patron Fee &ndash; Startup Document Package</td><td>Starting Rs 30,000 (SHA + ESOP + NDA + Employment + Investment bundle)</td></tr>
                        <tr><td>Patron Fee &ndash; Agreement Vetting / Review</td><td>Starting Rs 5,000 (detailed redline with recommendations)</td></tr>
                        <tr><td>Patron Fee &ndash; Cross-Border Agreement</td><td>Starting Rs 15,000 (FEMA + governing law + arbitration + tax)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Legal Drafting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20legal%20drafting%20services%20in%20Mumbai.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Drafting Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Simple Agreement (NDA, MOU, Consultancy)</td><td>Drafting: 2-3 days | Review: 1-2 rounds | Total: 3-5 working days</td></tr>
                        <tr><td>Employment Agreement / Offer Letter</td><td>Drafting: 2-3 days | Review: 1-2 rounds | Total: 3-5 working days</td></tr>
                        <tr><td>Leave and Licence (Mumbai 11-month)</td><td>Drafting: 1-2 days | Review: 1 round | Total: 2-3 working days</td></tr>
                        <tr><td>MSA / Commercial Contract</td><td>Drafting: 3-5 days | Review: 2-3 rounds | Total: 5-10 working days</td></tr>
                        <tr><td>Shareholders Agreement (SHA)</td><td>Drafting: 5-7 days | Review: 3-5 rounds (with investor) | Total: 10-20 working days</td></tr>
                        <tr><td>Investment Agreement (VC round)</td><td>Drafting: 5-7 days | Review: 3-5 rounds | Total: 10-20 working days</td></tr>
                        <tr><td>Cross-Border Agreement</td><td>Drafting: 5-10 days | Review: 3-5 rounds | Total: 10-25 working days</td></tr>
                        <tr><td>Agreement Vetting / Review</td><td>Review: 2-3 days | Feedback: 1-2 rounds | Total: 3-5 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Legal drafting delays directly delay business transactions.</strong> A startup needs the SHA before closing a VC round. A corporate needs the MSA before vendor engagement. A property buyer needs the sale agreement before registration. Patron's 2-7 day standard turnaround ensures Mumbai businesses meet commercial deadlines without compromising legal quality.</p>

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
            <h2 class="section-title">Why Choose Patron for Legal Drafting in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Integrated CA + CS + Legal</h3><p class="feature-text">Every agreement aligned with GST (SAC codes, invoice requirements), TDS (section, rate, threshold), Companies Act (SHA with articles, statutory filings), FEMA, and Maharashtra stamp duty. No drafting-compliance mismatches.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Mumbai Business Context</h3><p class="feature-text">Leave and licence as standard rental (not lease deeds). BKC corporate MSA requirements. Powai startup fundraising documentation. Nariman Point M&amp;A. Andheri media contracts. Every document reflects Mumbai practices.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">20+ Document Types</h3><p class="feature-text">From simple NDAs and offer letters to complex SHA and cross-border JV contracts. Full spectrum coverage eliminates the need for multiple specialists for different document types.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Startup Document Package</h3><p class="feature-text">SHA + ESOP + NDA + Employment + Investment Agreement &ndash; all drafted together for internal consistency. SHA aligns with investment agreement. ESOP aligns with Companies Act and tax law. One engagement, one team.</p></article>
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
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Patron drafted our SHA, ESOP scheme, and all employment agreements as one package. The SHA clauses perfectly aligned with the investment agreement and our cap table. Our previous lawyer drafted in isolation and we had contradictions across documents.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; Co-Founder, Healthtech Startup, Powai</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving businesses with legal drafting, corporate compliance, and advisory services.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Maharashtra Stamp Duty Guide for Mumbai Agreements</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Document Type</th><th>Maharashtra Stamp Duty</th><th>Registration Required?</th><th>Notes</th></tr></thead>
                    <tbody>
                        <tr><td>Leave and Licence (11 months)</td><td>Rs 100-500</td><td>Optional (recommended)</td><td>Mumbai standard rental format</td></tr>
                        <tr><td>Lease Deed (&gt; 11 months)</td><td>% of annual rent (slab)</td><td>Mandatory</td><td>Must be registered with Sub-Registrar</td></tr>
                        <tr><td>Sale Agreement (property)</td><td>5-6% of consideration</td><td>Mandatory</td><td>Plus 1% registration fee</td></tr>
                        <tr><td>Partnership Deed</td><td>Rs 500</td><td>Optional</td><td>Recommended for evidence</td></tr>
                        <tr><td>Power of Attorney (General)</td><td>Rs 500</td><td>Optional</td><td>Recommended for evidence</td></tr>
                        <tr><td>NDA / Confidentiality</td><td>Rs 100-500</td><td>Not required</td><td>On stamp paper or e-stamped</td></tr>
                        <tr><td>Employment Agreement</td><td>Rs 100-200</td><td>Not required</td><td>On stamp paper or e-stamped</td></tr>
                        <tr><td>MSA / Commercial Contract</td><td>Rs 100-500</td><td>Not required</td><td>Higher if consideration specified</td></tr>
                        <tr><td>SHA</td><td>Rs 100-500</td><td>Not required</td><td>Separate from Companies Act filings</td></tr>
                        <tr><td>Gift Deed (immovable)</td><td>3% of property value</td><td>Mandatory</td><td>Family exemptions may apply</td></tr>
                        <tr><td>Loan Agreement</td><td>0.1-0.5% of loan amount</td><td>Not mandatory</td><td>Recommended for evidence</td></tr>

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
                    <li><a href="/legal-drafting">Legal Drafting Service (India Overview)</a></li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a></li>
                    <li><a href="/trademark-registration">Trademark Registration</a></li>
                    <li><a href="/issue-of-shares">Issue of Shares</a></li>
                    <li><a href="/fdi-compliance">FDI Compliance</a></li>
                    <li><a href="/accounting-services">Accounting Services</a></li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a></li>
                    <li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a></li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal &amp; Compliance Framework for Legal Drafting</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Indian Contract Act, 1872:</strong> Valid contract requirements &ndash; offer, acceptance, consideration, free consent, competent parties</li>
                    <li><strong>Specific Relief Act, 1963:</strong> Contract enforcement and remedies for breach</li>
                    <li><strong>Maharashtra Stamp Act:</strong> Stamp duty on agreements &ndash; rates vary by document type and consideration</li>
                    <li><strong>Registration Act, 1908:</strong> Mandatory registration for property documents, leases &gt; 11 months</li>
                    <li><strong>Companies Act, 2013:</strong> Corporate documents &ndash; SHA, MOA/AOA, resolutions, ESOP schemes</li>
                    <li><strong>IT Act, 2000:</strong> E-signatures, digital contracts, electronic records validity</li>
                    <li><strong>FEMA, 1999:</strong> Cross-border agreements, foreign exchange provisions</li>
                    <li><strong>Arbitration Act, 1996:</strong> Arbitration clauses, institutional arbitration (SIAC, ICC, MCIA)</li>
                    <li><strong>DPDP Act, 2023:</strong> Data processing agreements, privacy policies, consent mechanisms</li>
                    <li><strong>Maharashtra Shops Act:</strong> Employment terms specific to Mumbai</li>
                    <li><strong>Section 27, Contract Act:</strong> Restraint of trade void &ndash; non-compete unenforceable, non-solicitation enforceable</li>
                </ul>
                <p><strong>E-Stamping:</strong> Maharashtra GRAS portal for stamp duty payment | <strong>Bombay High Court:</strong> <a href="https://bombayhighcourt.nic.in" target="_blank" rel="noopener">bombayhighcourt.nic.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; Legal Drafting in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about drafting vs vetting, stamp duty, SHA, digital execution, costs, registration, and startup packages for Mumbai businesses.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Legal Drafting',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What legal drafting services are available in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>20+ document types: corporate (SHA, MOA, resolutions), commercial (MSA, SLA, vendor), startup (SHA, ESOP, NDA, investment), employment (contracts, offer letters), real estate (leave and licence, lease, sale), technology (SaaS, licensing, privacy), and dispute (notices, settlements). All by CA and CS professionals with tax and compliance alignment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between drafting and vetting?</h3>
                        <div class="faq-expanded__a"><p>Drafting: creating new document from scratch based on client requirements. Vetting (review): examining counterparty-drafted document to identify unfavourable terms, missing protections, and legal risks with redline comments and recommendations. Patron provides both. Most Mumbai VC fundraising involves vetting investor-drafted SHA and term sheets.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What documents need stamp duty in Maharashtra?</h3>
                        <div class="faq-expanded__a"><p>Most agreements need stamp duty. Key rates: leave and licence (11 months) Rs 100-500, sale agreement 5-6% of consideration, partnership deed Rs 500, POA Rs 500, NDA/employment Rs 100-200. Insufficient stamp paper renders documents inadmissible in court. E-stamping via GRAS portal is preferred. Patron computes and arranges e-stamping.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is a shareholders agreement?</h3>
                        <div class="faq-expanded__a"><p>Contract between shareholders governing: board composition, reserved matters (veto rights), share transfer restrictions (ROFR, pre-emptive), anti-dilution, drag-along/tag-along, information rights, exit provisions (IPO, sale, buyback), founder vesting, non-compete/non-solicitation, dispute resolution. Most critical document for Powai startups. Patron drafts with Companies Act, FEMA, and tax alignment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can agreements be executed digitally?</h3>
                        <div class="faq-expanded__a"><p>Yes, for most contracts under IT Act Section 5 &ndash; electronic signatures have same validity as wet signatures. Exceptions: negotiable instruments, powers of attorney, trusts, wills, and documents requiring Sub-Registrar registration (need physical presence). Patron facilitates digital execution for eligible Mumbai agreements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How much does legal drafting cost in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Simple agreements (NDA, MOU) from Rs 3,000. Employment packages from Rs 8,000. SHA from Rs 15,000. Investment agreements from Rs 15,000. Startup packages from Rs 30,000. Fixed-fee pricing, typically 30-50% lower than standalone Mumbai law firms due to integrated CA+CS approach.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Which agreements need registration in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Mandatory with Sub-Registrar: property sale deeds, lease deeds exceeding 11 months, gift deeds for immovable property. Leave and licence (11-month Mumbai standard) does not legally require registration but is recommended. Most commercial contracts (MSA, NDA, SHA) do not require registration. Patron advises on requirements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is included in a startup document package?</h3>
                        <div class="faq-expanded__a"><p>SHA with investor/founder provisions, ESOP Scheme with grant letter, NDA (mutual and one-way), Employment Agreement template (key hires), Consultancy Agreement (advisors), Investment Agreement framework. All internally consistent &ndash; SHA aligns with investment agreement, ESOP aligns with Companies Act. Delivered in 15-20 working days.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Agreement draft karana hai toh kya kare?</strong> Patron ko call karo (945 945 6700). Apna requirement batao &ndash; NDA, SHA, MSA, employment, lease, jo bhi ho. 2-7 din mein draft milega. Maharashtra stamp duty Patron calculate karega aur e-stamping arrange karega.</p>
                <p><strong>Online template use kar sakte hain kya?</strong> Kar sakte ho lekin risky hai. Templates mein Maharashtra stamp duty, GST/TDS clauses, FEMA provisions, Mumbai Shops Act compliance nahi hoti. Court mein inadmissible ho sakta hai agar stamp duty galat ho. Patron se custom draft karvao &ndash; Rs 3,000 se shuru.</p>
                <p><strong>SHA mein kya hona chahiye?</strong> Board composition, reserved matters (veto rights), share transfer restrictions, anti-dilution, drag-along/tag-along, exit provisions, founder vesting, information rights, dispute resolution. Patron SHA + investment agreement + ESOP ek saath draft karta hai for consistency.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Operate Without Proper Agreements &ndash; Get Professional Drafting</h2>
            <div class="content-text">
                
                <p>A Powai startup closing a VC round needs SHA within 2-3 weeks. A BKC corporate onboarding a vendor needs the MSA before work begins. A Mumbai employee needs the employment agreement before start date. A property buyer needs the sale agreement before registration. Delays in legal drafting directly delay business transactions. Patron delivers standard documents in 2-7 days and complex agreements in 10-20 days.</p>
                <p><strong>Get your agreements drafted today &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20legal%20drafting%20services%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Integrated Legal Drafting in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Legal drafting in Mumbai covers every type of business document &ndash; from SHA and ESOP for Powai startups to MSA and SLA for BKC corporates, from leave and licence with Mumbai-specific clauses to cross-border JV with FEMA compliance, from M&amp;A documentation to production agreements for Andheri entertainment companies.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines provides integrated CA + CS legal drafting &ndash; where every agreement is aligned with tax (GST, TDS), compliance (Companies Act, FEMA, EPF/ESIC), and Maharashtra-specific requirements (stamp duty, Shops Act, Sub-Registrar registration) &ndash; covering 20+ document types with fixed-fee transparency.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers professionally drafted, legally enforceable agreements across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20legal%20drafting%20services%20in%20Mumbai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Legal Drafting Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides integrated CA + CS legal drafting in major cities with state-specific stamp duty and compliance expertise.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">Legal Drafting Services in Other Cities</div>
                        <div class="pa-block-sub">Professional agreement drafting across India</div>
                        <div class="pa-city-grid">
                            <a href="/legal-drafting/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/legal-drafting/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/legal-drafting/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end corporate and compliance support</div>
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
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed bi-annually for accuracy of Indian Contract Act provisions, Maharashtra stamp duty rates, and regulatory requirements. Freshness Tier: 2.</p>
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
