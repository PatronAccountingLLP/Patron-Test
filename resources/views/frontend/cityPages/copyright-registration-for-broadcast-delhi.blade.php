
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Copyright for Broadcast Rights in Delhi - TV, Radio & OTT</title>
    <meta name="description" content="CA-assisted Copyright for Broadcast in Delhi. Section 37 rights filed online. Serving Connaught Place, Nehru Place, Okhla. Call +91 945 945 6700.">
    <link rel="canonical" href="/copyright-registration-for-broadcast/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Copyright for Broadcast Rights in Delhi - TV, Radio & OTT">
    <meta property="og:description" content="CA-assisted Copyright for Broadcast in Delhi. Section 37 rights filed online. Serving Connaught Place, Nehru Place, Okhla. Call +91 945 945 6700.">
    <meta property="og:url" content="/copyright-registration-for-broadcast/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copyright for Broadcast Rights in Delhi - TV, Radio & OTT">
    <meta name="twitter:description" content="CA-assisted Copyright for Broadcast in Delhi. Section 37 rights filed online. Serving Connaught Place, Nehru Place, Okhla. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Copyright for Broadcast Rights in Delhi - TV, Radio & OTT",
      "description": "CA-assisted Copyright for Broadcast in Delhi. Section 37 rights filed online. Serving Connaught Place, Nehru Place, Okhla. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/copyright-registration-for-broadcast/delhi",
      "serviceType": "Copyright for Broadcast Rights in Delhi - TV, Radio & OTT",
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
        "url": "https://www.patronaccounting.com/copyright-registration-for-broadcast/delhi",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "500",
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
          "name": "Copyright for Broadcast Rights - TV, Radio & Streaming",
          "item": "https://www.patronaccounting.com/copyright-registration-for-broadcast"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Copyright for Broadcast Rights in Delhi - TV, Radio & OTT",
          "item": "https://www.patronaccounting.com/copyright-registration-for-broadcast/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which Copyright Office handles broadcast copyright?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Copyright Office, Boudhik Sampada Bhawan, Dwarka Sector 14, New Delhi 110075. Sole Copyright Office in India. Walk-in access for Delhi applicants. Same-day diary number for physical submissions."
          }
        },
        {
          "@type": "Question",
          "name": "Can I register broadcast copyright online?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes at copyright.gov.in. E-filing: 1-3 days for diary number. Physical at Dwarka (2:30 PM+): same-day diary number. Delhi applicants have both options."
          }
        },
        {
          "@type": "Question",
          "name": "What is the fee for broadcast copyright?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 2,000 (sound recording), Rs 5,000 (cinematographic film), Rs 500 (literary/artistic). Second Schedule Copyright Rules 2013. Patron professional from Rs 4,999 all-inclusive."
          }
        },
        {
          "@type": "Question",
          "name": "How long does broadcast copyright take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "30-day mandatory wait + 1-3 months examiner review = 3-6 months typical. Contested: up to 12 months. Delhi in-person hearings can expedite."
          }
        },
        {
          "@type": "Question",
          "name": "What is S.37 broadcast reproduction right?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Special right over broadcast signals — distinct from content copyright. 25 years from year following first broadcast. Protects against rebroadcasting, recording, selling recordings without permission."
          }
        },
        {
          "@type": "Question",
          "name": "Is registration mandatory for broadcasters?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not mandatory (S.13 auto-subsistence). But practically indispensable for Delhi HC infringement claims, S.31D royalty participation, and signal piracy enforcement via S.63."
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
                        Copyright for Broadcast in Delhi: Section 37 Rights for TV, Radio & Digital Media
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">06 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Rights:</span> Broadcast Reproduction Right under Section 37 — valid 25 years from first broadcast</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fee:</span> Rs 2,000 (sound recording) | Rs 5,000 (cinematographic film) | Rs 500 (literary/artistic)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Authority:</span> Copyright Office, Boudhik Sampada Bhawan, Dwarka, New Delhi — India's only Copyright Office</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 30-day mandatory wait + 3-12 months for certificate; diary number same day</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Broadcast copyright for Delhi TV channels, radio stations, OTT platforms, and media production houses.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20broadcast%20copyright%20in%20Delhi." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Broadcast Copyright in Delhi',
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
    'ctaText'    => 'Broadcast copyright with Section 31D advisory, signal piracy enforcement, and Delhi HC royalty support.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Challenges</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">DIY vs Professional</a><a href="#fees-section" class="toc-btn">Pricing</a><a href="#timeline-section" class="toc-btn">Why Patron</a><a href="#benefits-section" class="toc-btn">Quality</a><a href="#comparison-section" class="toc-btn">Patron vs Others</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Broadcast Copyright in Delhi: Section 37 + Section 31D</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Broadcast Copyright in Delhi Services at a Glance</strong></p>
                    <p>Broadcast copyright = S.37 broadcast reproduction right under Copyright Act 1957 Chapter VIII. 25 years from first broadcast. Independent of underlying content copyright. S.31D statutory licence for broadcasting published works (royalties via Delhi HC IP Division). Copyright Office at Dwarka = only in India. Rs 2,000 (sound) / Rs 5,000 (film). Diary number same day. 3-12 months. DD National + 400+ news channels + FM radio + OTT. Delhi HC IP Division = S.31D royalty disputes.</p>
                </div>
                <p>Delhi houses India's largest concentration of broadcasters and the only Copyright Office. For a comprehensive overview, see our <a href="/copyright-registration-for-broadcast">Copyright for Broadcast</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing</td><td>Copyright Act 1957 Chapter VIII (S.37-39A). S.31D statutory licence (2012 Amendment)</td></tr><tr><td>Key Right</td><td>Broadcast Reproduction Right S.37. 25 years from calendar year following first broadcast</td></tr><tr><td>Fee</td><td>Rs 2,000 (sound recording) | Rs 5,000 (film) | Rs 500 (literary/artistic)</td></tr><tr><td>S.31D</td><td>Statutory licence to broadcast published works. Royalty rates fixed by Delhi HC IP Division</td></tr><tr><td>Authority</td><td>Copyright Office, Boudhik Sampada Bhawan, Dwarka Sector 14. Form XIV. 3-12 months</td></tr></tbody></table></div><p</p>
                <p>DD National at Mandi House. 400+ news channels at CP/Nehru Place/Okhla. All India Radio Broadcasting House. Private FM radio. OTT/digital from Saket/Aerocity/Rohini. Delhi HC IP Division = S.31D royalty rate-setting + dynamic injunctions vs signal pirates (Star India v Magicwin 2024). Tips v Wynk (Bombay HC): S.31D doesn't cover on-demand streaming. Patron Rohini = 30 min from Copyright Office Dwarka.</p>
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
                <h2 class="section-title">What Is Copyright for Broadcast?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Definition:</strong> Legal protection under S.37 Copyright Act 1957 giving broadcasting organisations exclusive rights over broadcast signals — independent of copyright in underlying content. Known as broadcast reproduction right. 25 years from first broadcast year.</p><p><strong>Covers:</strong> All radio and television transmissions (S.2(dd)). Protects against signal piracy, unauthorised rebroadcasting, and commercial exploitation without consent.</p><p><strong>S.31D:</strong> Statutory licence regime (2012 Amendment) — broadcasters may broadcast published works upon notice + royalties at rates fixed by Delhi HC IP Division. Does NOT cover on-demand internet streaming (Tips v Wynk, Bombay HC 2019).</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Broadcast Copyright in Delhi:</strong></p>
                    <p><strong>S.37 Broadcast Reproduction Right:</strong> Exclusive right over broadcast signals. 25 years. Protects against rebroadcasting, recording, charging audiences, selling/renting recordings.</p><p><strong>S.31D Statutory Licence:</strong> Broadcasters can broadcast published works upon notice + royalties. Delhi HC IP Division fixes rates. Not for on-demand streaming.</p><p><strong>S.2(dd) Broadcast:</strong> Communication to public by wireless diffusion or wire, including rebroadcast.</p><p><strong>S.63 Penalties:</strong> First infringement: min 6 months + Rs 50K. Repeat: min 1 year + Rs 1L. Delhi HC grants dynamic injunctions vs pirate sites.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Broadcast Copyright in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Broadcast</span>
                        <strong>Section 37</strong>
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
            <h2 class="section-title">Who Needs Broadcast Copyright in Delhi</h2>
            <div class="content-text">
                
                <p><strong>TV Broadcasters (CP/Aerocity/Okhla):</strong> 400+ news channels. S.37 protection for live + recorded transmissions. Signal piracy enforcement via Delhi HC injunctions.</p><p><strong>Radio (AIR + Private FM):</strong> All India Radio Broadcasting House. Private FM serving NCR. S.31D statutory licences for sound recordings. Copyright Office filings for royalty negotiations.</p><p><strong>Film/TV Production (Noida Film City/Rohini):</strong> Licensing content to OTT/satellite. Broadcast copyright for distribution rights. Dual-layer protection (signal + content).</p><p><strong>Digital/OTT (Nehru Place/Saket):</strong> Prima facie evidence for Delhi HC IP Division infringement actions. Signal piracy + unauthorised streaming enforcement. S.31D ambiguity post-Tips v Wynk.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Signal Piracy in Delhi NCR</td><td>Dense cable network + UP/Haryana borders = endemic signal theft. Unauthorised cable operators. Registered copyright = basis for Delhi HC S.55 injunctions</td></tr><tr><td>S.31D Royalty Disputes at Delhi HC</td><td>FM radio + TV broadcasters face contentious rate-setting at Delhi HC IP Division. Without registered copyright, cannot effectively participate in royalty determinations</td></tr><tr><td>Dual-Layer Protection Gap</td><td>Broadcast S.37 right in signal ≠ underlying content copyright. Nehru Place media companies fail to register both. Exposed in multi-defendant Delhi HC cases</td></tr><tr><td>OTT/Digital Ambiguity Post-Tips v Wynk</td><td>S.31D doesn't cover on-demand internet streaming (Bombay HC 2019). Delhi OTT platforms must rely on direct licensing, not statutory licences</td></tr>

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
            <h2 class="section-title">Broadcast Copyright in Delhi - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Form XIV at Copyright Office Dwarka, managed from Patron's Rohini office.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1-2</span><h3 class="step-title">Classify + Form XIV</h3><p class="step-description">Identify category: TV signal, radio, cinematographic film, sound recording. Prepare two soft copies. Form XIV with Statement of Particulars + Further Particulars on copyright.gov.in. Delhi applicants can consult Copyright Office Dwarka before filing to confirm classification.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Classified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="6" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">S.37</text></svg></div><span class="illustration-label">Ready</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3-4</span><h3 class="step-title">File + Diary Number + 30-Day Wait</h3><p class="step-description">Physical at Dwarka counter (2:30 PM+, same-day diary number) or e-filing on copyright.gov.in (1-3 days). Pay Rs 2,000 (sound) / Rs 5,000 (film). 30-day mandatory waiting period begins. Third parties may raise objections. Patron monitors all correspondence.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Diary number</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">30d</text></svg></div><span class="illustration-label">Wait</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5-6</span><h3 class="step-title">Examination + Certificate</h3><p class="step-description">Copyright Examiner reviews (1-3 months post-wait). Reply to discrepancies within 30 days. Delhi applicants attend in-person hearings at Dwarka. Certificate (Extract from Register) issued. Total 3-12 months. S.37 protection: 25 years from first broadcast year. S.31D royalty participation enabled.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Examined</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Protected</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th><th>Notes</th></tr></thead><tbody><tr><td>Form XIV (SOP + SoFP)</td><td>Application</td><td>One per work, from copyright.gov.in</td></tr><tr><td>Two Soft Copies of Work</td><td>Broadcast content</td><td>JPEG/JPG/GIF/MP4 as applicable</td></tr><tr><td>PAN + Aadhaar / Passport</td><td>Identity</td><td>Applicant identity + address</td></tr><tr><td>Power of Attorney</td><td>If filing through Patron</td><td>Signed by applicant</td></tr><tr><td>NOC from Author/Publisher</td><td>If applicant ≠ author</td><td>Separate NOCs if multiple stakeholders</td></tr><tr><td>Deed of Assignment</td><td>Film with multiple stakeholders</td><td>Mandatory for cinematographic films</td></tr><tr><td>COI (Company)</td><td>Corporate applicants</td><td>TV channels, production houses</td></tr><tr><td>TM-60 Certificate</td><td>If work used on goods</td><td>From Trademark Office</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Delhi tip:</strong> Physical counter at Boudhik Sampada Bhawan Dwarka (2:30 PM+) = same-day diary number. E-filing = 1-3 days. Delhi applicants have unique in-person access. See <a href="/copyright-registration">Copyright Registration</a> for all 6 categories.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Form XIV</td><td>DIY: Risk of incorrect SOP/SoFP → rejection</td><td>Patron: CA/CS prepared, verified before submission</td></tr><tr><td>Copyright Office</td><td>DIY: In-person visit, counter timing constraints</td><td>Patron: Handles all interactions at Dwarka</td></tr><tr><td>Objection Handling</td><td>DIY: Client responds independently within 30 days</td><td>Patron: Drafts + files replies with IP oversight</td></tr><tr><td>S.31D Advisory</td><td>DIY: Separate legal engagement needed</td><td>Patron: Bundled advisory for broadcast licensing</td></tr><tr><td>Cost</td><td>DIY: Rs 500-5,000 govt only</td><td>Patron: From Rs 4,999 all-inclusive (govt + professional)</td></tr>

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
            <h2 class="section-title">Broadcast Copyright Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Sound Recording</td><td>Rs 2,000 govt + From Rs 4,999 professional | 3-6 months</td></tr><tr><td>Cinematographic Film</td><td>Rs 5,000 govt + From Rs 7,999 professional | 6-12 months</td></tr><tr><td>Literary / Artistic Work</td><td>Rs 500 govt + From Rs 3,999 professional | 2-4 months</td></tr><tr><td>Certified Copy / Extract</td><td>Rs 500 per copy | 5-7 working days</td></tr><tr><td>Particulars Change (Broadcast)</td><td>Rs 2,000 govt + From Rs 2,499 professional | 30-60 days</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Broadcast Copyright in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20broadcast%20copyright%20in%20Delhi." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Choose Patron for Broadcast Copyright in Delhi?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Rohini-Dwarka Corridor</td><td>30 minutes from Copyright Office. In-person submissions, same-day diary numbers, examiner hearings. Unavailable to online-only platforms</td></tr><tr><td>Delhi HC IP Division Awareness</td><td>S.31D royalty rate monitoring. Dynamic injunctions (Star India v Magicwin 2024). Tips v Wynk implications for OTT</td></tr><tr><td>Broadcast Sector Familiarity</td><td>DD National/Prasar Bharati. Private FM licensing. Ministry of I&B framework. Dual-layer signal + content protection</td></tr><tr><td>3-Day Form XIV Turnaround</td><td>Complete documents → Form XIV filed within 3 working days. Diary number tracked. Objection windows monitored proactively</td></tr><tr><td>From Rs 4,999</td><td>Sound Rs 4,999 | Film Rs 7,999 | Literary Rs 3,999. All-inclusive. S.31D advisory included. No hidden charges</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> S.37 broadcast reproduction right runs only 25 years. Delay in registration = losing evidentiary basis for full-term infringement claims. S.63: Rs 50K min fine + 6 months min imprisonment. Signal piracy in Delhi NCR endemic. Register now.</p>

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
            <h2 class="section-title">Patron vs Local IP Consultants</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Patron: In-Person Dwarka</h3><p class="feature-text">Rohini → Dwarka 30 min. Same-day diary numbers. Counter submissions. Examiner hearings attended. Physical follow-up capability.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Others: Outsourced</h3><p class="feature-text">Most outsource to freelancers. 5-15 day turnaround. No S.31D advisory. Add-on charges for objection replies. Limited broadcast sector knowledge.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Patron: S.31D Advisory</h3><p class="feature-text">Statutory licence compliance bundled. Delhi HC IP Division royalty order monitoring. Tips v Wynk OTT implications covered.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Patron: 3-Day Filing</h3><p class="feature-text">Complete docs → Form XIV filed in 3 working days. Diary number tracked. Objection windows monitored. Fixed upfront pricing.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Patron sorted our broadcast copyright filing with the Delhi Copyright Office in under a week. The CA team knew exactly which category and handled the examiner's query without us even knowing."</p><p style="font-weight:700;font-size:14px;margin:0;">- Director, News Production Company, Delhi</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Others Detailed</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron</th><th>Typical Delhi IP Consultant</th></tr></thead>
                    <tbody>
                        <tr><td>Form XIV Turnaround</td><td>3 working days from complete docs</td><td>5-15 working days</td></tr><tr><td>Copyright Office</td><td>In-person Rohini-Dwarka corridor</td><td>Varies; most outsource</td></tr><tr><td>S.31D Advisory</td><td>CA + CS team with IP experience</td><td>Often limited to registration only</td></tr><tr><td>Pricing</td><td>Fixed fee, no hidden charges</td><td>Often add-on for objection replies</td></tr><tr><td>Track Record</td><td>10,000+ clients, 4.9 Google rating</td><td>Typically 50-200 reviews</td></tr><tr><td>Delhi HC IP Awareness</td><td>Active monitoring of royalty orders</td><td>Rarely covered</td></tr>

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
                
                <ul><li><a href="/copyright-registration-for-broadcast">Broadcast Copyright (National)</a></li><li><a href="/copyright-registration">Copyright Registration</a></li><li><a href="/trademark-registration">Trademark Registration</a></li><li><a href="/brand-copyright-registration">Brand Copyright</a></li><li><a href="/copyright-objection">Copyright Objection</a></li></ul>

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
                
                <p><strong>S.37:</strong> Broadcast reproduction right. 25 years from year following first broadcast. Exclusive rights over signal independent of content copyright.</p><p><strong>S.31D:</strong> Statutory licence for broadcasting published works. Notice + royalties at Delhi HC-fixed rates. NOT for on-demand streaming (Tips v Wynk 2019).</p><p><strong>S.2(dd):</strong> Broadcast = communication to public by wireless or wire, including rebroadcast.</p><p><strong>S.63:</strong> First infringement: min 6 months + Rs 50K. Repeat: min 1 year + Rs 1L. Dynamic injunctions (Star India v Magicwin 2024).</p><p><strong>Copyright Rules 2013:</strong> Rule 31 for S.31D procedures. Rules 70-78 for registration. Second Schedule for fees.</p><p><strong>Delhi:</strong> Copyright Office Dwarka = only in India. Delhi HC IP Division = S.31D royalty disputes. No PT (UT).</p>

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
                    <h2 class="faq-expanded__title">FAQs - Broadcast Copyright in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about broadcast copyright, Section 37, statutory licence, and registration in Delhi.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Broadcast Copyright in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which Copyright Office handles broadcast copyright?</h3>
                        <div class="faq-expanded__a"><p>Copyright Office, Boudhik Sampada Bhawan, Dwarka Sector 14, New Delhi 110075. Sole Copyright Office in India. Walk-in access for Delhi applicants. Same-day diary number for physical submissions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I register broadcast copyright online?</h3>
                        <div class="faq-expanded__a"><p>Yes at copyright.gov.in. E-filing: 1-3 days for diary number. Physical at Dwarka (2:30 PM+): same-day diary number. Delhi applicants have both options.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the fee for broadcast copyright?</h3>
                        <div class="faq-expanded__a"><p>Rs 2,000 (sound recording), Rs 5,000 (cinematographic film), Rs 500 (literary/artistic). Second Schedule Copyright Rules 2013. Patron professional from Rs 4,999 all-inclusive.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does broadcast copyright take?</h3>
                        <div class="faq-expanded__a"><p>30-day mandatory wait + 1-3 months examiner review = 3-6 months typical. Contested: up to 12 months. Delhi in-person hearings can expedite.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is S.37 broadcast reproduction right?</h3>
                        <div class="faq-expanded__a"><p>Special right over broadcast signals — distinct from content copyright. 25 years from year following first broadcast. Protects against rebroadcasting, recording, selling recordings without permission.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is registration mandatory for broadcasters?</h3>
                        <div class="faq-expanded__a"><p>Not mandatory (S.13 auto-subsistence). But practically indispensable for Delhi HC infringement claims, S.31D royalty participation, and signal piracy enforcement via S.63.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>S.37 protection kitne saal ka hai?</strong> 25 years from the calendar year following first broadcast. 2026 broadcast = protected through 31 Dec 2051.</p><p><strong>S.31D kya hai?</strong> Statutory licence for broadcasting published works. Notice + royalties at Delhi HC-fixed rates. On-demand streaming covered nahi hai (Tips v Wynk).</p><p><strong>Delhi mein broadcast copyright kaise file karein?</strong> copyright.gov.in par Form XIV file karo ya Dwarka Copyright Office counter par physically submit karo.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">S.37 = Only 25 Years — Register Now</h2>
            <div class="content-text">
                
                <p>Broadcast reproduction right runs only 25 years from first broadcast. Delay = losing evidentiary basis for full-term infringement claims. S.63: Rs 50K min + 6 months min imprisonment. Signal piracy endemic in Delhi NCR cable network. S.31D royalty participation needs registered copyright. From Rs 4,999.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20broadcast%20copyright%20in%20Delhi." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your Broadcast Copyright in Delhi</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Broadcast copyright in Delhi is commercially critical for TV channels, radio stations, production houses, and digital media companies operating in India's broadcast capital.</p><p style="color:rgba(255,255,255,0.85);">Delhi's unique position: only Copyright Office (Dwarka) + most active IP court (Delhi HC). S.37 + S.31D + S.45 = comprehensive framework for protecting and monetising broadcasts.</p><p style="color:rgba(255,255,255,0.85);">Patron's Rohini office provides end-to-end broadcast copyright — Form XIV to in-person Copyright Office coordination and S.31D advisory — backed by 15+ years serving Delhi NCR media.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20broadcast%20copyright%20in%20Delhi." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Broadcast%20Copyright%20Delhi&body=Hi%2C%20I%20need%20broadcast%20copyright%20in%20Delhi." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Broadcast Copyright - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Broadcast copyright registration across major Indian cities</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Broadcast Copyright</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/copyright-registration-for-broadcast/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/copyright-registration-for-broadcast/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/copyright-registration-for-broadcast/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">Copyright & IP</div><div class="pa-cross-grid"><a href="/copyright-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/copyright-registration-for-artistic-work/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Artistic Work Copyright</div><div class="pa-card-sub">Delhi</div></div></a><a href="/copyright-objection/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Objection</div><div class="pa-card-sub">Delhi</div></div></a><a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/brand-copyright-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Brand Copyright</div><div class="pa-card-sub">Delhi</div></div></a><a href="/copyright-assignment/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Assignment</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed bi-annually. Copyright Act 1957 Chapter VIII (S.37-39A), S.31D statutory licence, Copyright Rules 2013, and Delhi HC IP Division precedents are verified.</p>
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
