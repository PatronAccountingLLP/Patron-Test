
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>Copyright for Broadcast in Mumbai - TV, Radio & OTT</title>
    <meta name="description" content="Copyright for broadcast in Mumbai. S.37 broadcast reproduction right, 25-year protection, signal piracy enforcement, S.31D statutory licence, content licensing. CA-led. Call +91 945 945 6700.">
    <link rel="canonical" href="/copyright-registration-for-broadcast/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Copyright for Broadcast in Mumbai - TV, Radio & OTT">
    <meta property="og:description" content="Copyright for broadcast in Mumbai. S.37 broadcast reproduction right, 25-year protection, signal piracy enforcement, S.31D statutory licence, content licensing. CA-led. Call +91 945 945 6700.">
    <meta property="og:url" content="/copyright-registration-for-broadcast/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copyright for Broadcast in Mumbai - TV, Radio & OTT">
    <meta name="twitter:description" content="Copyright for broadcast in Mumbai. S.37 broadcast reproduction right, 25-year protection, signal piracy enforcement, S.31D statutory licence, content licensing. CA-led. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Copyright for Broadcast in Mumbai - TV, Radio & OTT",
      "description": "Copyright for broadcast in Mumbai. S.37 broadcast reproduction right, 25-year protection, signal piracy enforcement, S.31D statutory licence, content licensing. CA-led. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/copyright-registration-for-broadcast/mumbai",
      "serviceType": "Copyright for Broadcast in Mumbai - TV, Radio & OTT",
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
          "name": "Copyright for Broadcast in Mumbai - TV, Radio & OTT",
          "item": "https://www.patronaccounting.com/copyright-registration-for-broadcast/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is broadcast reproduction right under the Copyright Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Broadcast reproduction right is a special neighbouring right under Section 37 of Copyright Act 1957 protecting the broadcast signal not the underlying content. Gives broadcaster exclusive rights to rebroadcast, cause broadcast to be seen or heard by public on payment, make sound or visual recordings, reproduce and sell such recordings. Automatic right from broadcast date. No registration required. Independent of content copyright. 25-year protection."
          }
        },
        {
          "@type": "Question",
          "name": "How long does broadcast copyright last in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Broadcast reproduction right under Section 37(2) subsists for 25 years from the beginning of the calendar year following the year of broadcast. For example broadcast in 2026 is protected until 31 December 2051. Shorter than content copyright at lifetime plus 60 years and shorter than performer rights at 50 years. All three layers coexist in a single broadcast each with own duration."
          }
        },
        {
          "@type": "Question",
          "name": "What acts constitute infringement of broadcast rights?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 37(3) without broadcaster licence: rebroadcasting the broadcast, causing broadcast to be heard or seen by public on payment of charges, making any sound or visual recording, reproducing such recordings, and selling or renting such recordings commercially. Subject to Section 39 exceptions for private use, teaching, research, fair dealing for criticism review reporting, and judicial proceedings."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between broadcast copyright and content copyright?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Broadcast reproduction right S.37 protects the broadcast signal and belongs to broadcasting organisation for 25 years. Content copyright S.13/14 protects the underlying programme film music script and belongs to author or producer for lifetime plus 60 years or 60 years for films and recordings. These are independent rights. Broadcaster may own signal right but not content copyright. Both can be independently enforced."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 31D statutory licence for broadcasting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 31D allows broadcasting organisations to communicate copyrighted works to public by broadcast by giving prior notice to copyright owner and paying royalties at rate fixed by Appellate Board. Relevant for radio broadcasters playing copyrighted music and TV channels using background music. Ensures broadcasters can access content while copyright owners receive fair compensation."
          }
        },
        {
          "@type": "Question",
          "name": "Can OTT platforms claim broadcast reproduction right?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Legally debated in India. Section 2(dd) defines broadcast as communication by wireless diffusion or by wire which could include internet streaming. For OTT simulcast of TV broadcast there is stronger argument for S.37 protection. For OTT-exclusive on-demand content S.37 likely does not apply but content is protected under S.13 copyright. Courts have not conclusively settled this question."
          }
        }
      ]
    }
  ]
}</script>
@endsection

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
                        Copyright for Broadcast in Mumbai: Broadcast Reproduction Right Protection, Content Licensing, Anti-Piracy Enforcement, and Statutory Licence Advisory
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Covers:</span> TV broadcast rights, radio broadcast rights, satellite transmission, cable retransmission, digital/OTT simulcast, rebroadcast protection, signal piracy enforcement</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Key Provision:</span> Section 37 Copyright Act 1957 - Broadcast Reproduction Right (neighbouring right - 25 years from broadcast)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Three Layers:</span> Signal copyright (S.37 - 25 yrs) + Content copyright (S.13 - lifetime+60 yrs) + Performer rights (S.38 - 50 yrs) - three separate protectable layers</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Broadcast right is automatic from broadcast date; documentation/enforcement services: 3-15 working days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Broadcast%20Rights%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Copyright%20Registration%20for%20Broadcast%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20Registration%20for%20Broadcast%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Broadcast Copyright',
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
    'ctaText'    => 'From TV networks in BKC to radio stations across Mumbai to sports broadcasters - Mumbai\'s broadcasting industry trusts Patron for broadcast copyright services.',
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
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Three Layers</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright for Broadcast in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Broadcast Copyright Services at a Glance</strong></p>
                    <p>Broadcast reproduction right (S.37) protects the broadcast signal for 25 years - distinct from content copyright (S.13) and performer rights (S.38). Three independent layers. S.37 is automatic, no registration needed. Broadcaster has exclusive rights to rebroadcast, record, reproduce, and sell. S.31D: statutory licence for music. S.39A: enables assignment, licensing, enforcement. Mumbai = India's broadcasting capital: Star, Zee, Sony, Viacom18, Times Network, AIR, radio networks.</p>
                </div>
                <p>Mumbai is India's broadcasting capital. Star India/Disney+Hotstar (BKC), Zee Entertainment (Worli), Sony (Andheri), Viacom18/JioCinema (BKC), Times Network (Lower Parel), NDTV, Republic, All India Radio, Radio Mirchi, Red FM. Learn more about <a href="/copyright-registration-for-broadcast">broadcast copyright across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Copyright Act 1957 Chapter VIII (S.37-39A); S.2(dd); S.31D; Cable TV Networks Act 1995</td></tr>
                        <tr><td>Three Layers</td><td>Signal (S.37 - 25 yrs) + Content (S.13 - lifetime+60 yrs) + Performer (S.38 - 50 yrs)</td></tr>
                        <tr><td>S.37 Rights</td><td>Rebroadcast, public display on payment, make recordings, reproduce, sell/rent</td></tr>
                        <tr><td>S.31D</td><td>Statutory licence: prior notice + Appellate Board royalty rates for broadcast music</td></tr>
                        <tr><td>Registration</td><td>Not mandatory - broadcast right is automatic from date of broadcast</td></tr>
                        <tr><td>Enforcement</td><td>Bombay HC IP Division (injunctions), Mumbai Police Cyber Cell (signal piracy), S.63 criminal</td></tr>
                        <tr><td>Key Threat</td><td>Signal piracy: unauthorized rebroadcast, online streaming, cable retransmission</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Signal piracy during live events (IPL, cricket) demands real-time enforcement through Bombay HC injunctions and platform takedowns. Patron integrates broadcast rights with <a href="/copyright-registration/mumbai">copyright registration</a>, <a href="/copyright-assignment/mumbai">assignment</a>, and <a href="/copyright-disclaimer/mumbai">disclaimers</a>.</p>
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
                <h2 class="section-title">What Is Broadcast Reproduction Right?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Broadcast reproduction right is a special neighbouring right under Section 37 of the Copyright Act 1957, protecting the broadcast signal itself for 25 years from the year of broadcast - distinct from the copyright in the underlying content being broadcast.</p>
                    <p>S.2(dd): broadcast = communication to public by wireless diffusion or by wire. S.37(3) exclusive rights: rebroadcast, public display on payment, make recordings, reproduce, sell/rent. Any person doing these without licence infringes (subject to S.39 exceptions). S.39A makes assignment, licensing, and enforcement provisions applicable.</p>
                    <p><strong>Critical distinction:</strong> broadcast right protects the SIGNAL, not the CONTENT. A cricket match broadcast has three layers: the match (no copyright in facts), the production (S.13 cinematograph film copyright), and the signal (S.37). Learn more at <a href="/copyright-registration-for-broadcast">our national broadcast practice</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Broadcast Copyright:</strong></p>
                    <ul>
                        <li><strong>S.37 Broadcast Right:</strong> 25-year automatic neighbouring right. Protects signal, not content. No registration needed.</li>
                        <li><strong>Three Layers:</strong> Signal (S.37, 25 yrs) + Content (S.13, lifetime+60 yrs) + Performer (S.38, 50 yrs). Independent rights.</li>
                        <li><strong>S.31D Statutory Licence:</strong> Broadcasting organisation can use works by giving notice + paying Appellate Board royalties.</li>
                        <li><strong>S.39A:</strong> Assignment (S.18/19), licensing (S.30), and enforcement (S.55/63) applicable to broadcast rights.</li>
                        <li><strong>Signal Piracy:</strong> Unauthorized rebroadcast, cable retransmission, online streaming. Biggest threat. Time-critical enforcement.</li>
                        <li><strong>S.39 Exceptions:</strong> Private use, teaching/research, fair dealing for criticism/review/reporting, judicial proceedings.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Broadcast Copyright</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>TV</span>
                        <strong>Broadcast IP</strong>
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
            <h2 class="section-title">Who Needs Broadcast Copyright Services in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Major TV Networks (Star BKC, Zee Worli, Sony Andheri, Viacom18 BKC):</strong> Protecting broadcast signals from unauthorized rebroadcast and piracy. <a href="/copyright-registration/mumbai">Copyright registration</a> for produced content alongside S.37.</p>
                <p><strong>Sports Broadcasting (Star Sports, JioCinema, Sony Sports):</strong> Highest-value broadcast rights (IPL, ICC cricket). Real-time anti-piracy enforcement critical. Bombay HC urgent injunctions for live events.</p>
                <p><strong>Radio Broadcasters (AIR, Radio Mirchi, Red FM, Big FM):</strong> S.31D statutory licence compliance for copyrighted music. FM and online simulcast signal protection. <a href="/copyright-disclaimer/mumbai">Copyright disclaimers</a> for broadcast content.</p>
                <p><strong>Cable/DTH Operators and OTT Platforms:</strong> Carriage agreements, retransmission rights, S.37 compliance. OTT simulcast vs on-demand rights distinction. <a href="/trademark-registration/mumbai">Trademark</a> for network branding.</p>
                <p><strong>Content Production Houses (Film City Goregaon):</strong> Licensing content for broadcast with clear three-layer rights. <a href="/copyright-assignment/mumbai">Copyright assignment</a> deeds for content transfer.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Broadcast Copyright Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Broadcast Right Documentation</td><td>Broadcast logs (date, time, content, transmission), ownership chain, internal archiving policies. Essential for enforcement even though S.37 is automatic</td></tr>
                        <tr><td>Content Licensing for Broadcast</td><td>Comprehensive agreements covering all three layers: content copyright (S.13), performer rights (S.38), music licences (IPRS/PPL), and broadcast reproduction right (S.37) provisions</td></tr>
                        <tr><td>S.31D Statutory Licence Compliance</td><td>Prior notice to copyright owner, royalty rate determination per Appellate Board, payment documentation. Prevents broadcast from becoming unlicensed</td></tr>
                        <tr><td>Broadcast Right Assignment/Licensing</td><td>S.39A makes S.18/19/30 applicable. Assignment deeds and licensing agreements for broadcast rights. Territory, duration, exclusivity, platform specifications</td></tr>
                        <tr><td>Anti-Piracy Enforcement</td><td>Cease and desist, Bombay HC IP Division injunctions (urgent for live events), S.63 criminal complaints, Mumbai Police Cyber Cell coordination, platform takedowns (YouTube, Telegram, social media)</td></tr>
                        <tr><td>OTT/Digital Broadcast Advisory</td><td>Does simulcast attract S.37? On-demand vs linear streaming rights. IT Intermediary Guidelines 2021. Telecommunications Act 2023 implications</td></tr>
                        <tr><td>Cable/DTH Compliance</td><td>Cable TV Networks Act 1995 compliance. TRAI New Tariff Order. Carriage fee agreements. Unauthorized retransmission enforcement</td></tr>
                        <tr><td>Integrated IP Protection</td><td><a href="/copyright-registration/mumbai">Registration</a> + <a href="/copyright-assignment/mumbai">assignment</a> + <a href="/copyright-disclaimer/mumbai">disclaimers</a> + enforcement. Complete broadcast IP lifecycle</td></tr>

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
            <h2 class="section-title">How Broadcast Copyright Protection Works in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers complete broadcast copyright - from rights assessment through documentation, licensing, S.31D compliance, anti-piracy framework, to ongoing enforcement for India's broadcasting capital.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Broadcast Rights Assessment</h3>
        <p class="step-description">CA/legal analyses: broadcasting entity type (TV, radio, cable, DTH, OTT), content being broadcast (own production, licensed, live events), rights across three layers (S.37 signal, S.13 content, S.38 performer), and piracy threats (unauthorized rebroadcast, online streaming, cable retransmission). Walk-in at Marine Lines.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Three layers mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Entity type assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Piracy threats identified</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ASSESS</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">3 Layers</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Signal+Content+Perf</text></svg></div>
            <span class="illustration-label">Assessment Done</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Rights Documentation</h3>
        <p class="step-description">Broadcast logs prepared (date, time, content, transmission details). Ownership chain documented. Content licensing agreements reviewed/drafted. Performer consents (S.38) verified. Music licences (IPRS/PPL) confirmed. All three layers documented for enforcement readiness.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Broadcast logs created</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Ownership chain clear</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Music licences confirmed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DOCUMENT</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Broadcast Logs</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Ownership Chain</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Music Licences</text></svg></div>
            <span class="illustration-label">Documentation Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Licensing and Assignment Agreements</h3>
        <p class="step-description">Content acquisition: comprehensive broadcast licence covering all rights layers (content S.13 + performer S.38 + signal S.37), territory, duration, platforms (TV/digital/radio), exclusivity. Rights monetisation: sublicensing, cable/DTH carriage, digital distribution. All S.19-compliant via S.39A.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All layers licensed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>S.19 compliant via S.39A</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Territory/platform specified</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LICENCE</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Content + Signal</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">Performer Consent</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">S.19 via S.39A</text></svg></div>
            <span class="illustration-label">Agreements Executed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">S.31D Statutory Licence Compliance</h3>
        <p class="step-description">For broadcasters using copyrighted music/works: prior notice to copyright owner, royalty payment at Appellate Board rates, compliance documentation. Particularly relevant for radio and TV background music. Prevents broadcast from becoming unlicensed.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notice given to owners</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Royalty rates applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance documented</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">S.31D</text><text x="60" y="48" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Statutory Licence</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Notice + Royalty</text></svg></div>
            <span class="illustration-label">S.31D Compliant</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Anti-Piracy Framework</h3>
        <p class="step-description">Monitoring setup for signal piracy detection (unauthorized streams, cable piracy, satellite theft). Cease and desist templates. Bombay HC injunction strategy for live events (John Doe orders). Mumbai Police Cyber Cell coordination. Platform takedown procedures (YouTube, Telegram, social media).</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Monitoring active</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HC injunction strategy ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Takedown procedures set</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ANTI-PIRACY</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Bombay HC</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Cyber Cell</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Takedowns</text></svg></div>
            <span class="illustration-label">Anti-Piracy Active</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Enforcement and Ongoing Protection</h3>
        <p class="step-description">Active enforcement: cease and desist served, Bombay HC applications for urgent injunctions (live sports/events), S.63 criminal complaints, platform takedowns. Ongoing: rights documentation updated, licensing renewed, anti-piracy monitoring continued.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notices served</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Injunctions obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Ongoing monitoring</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="16" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="68" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">PROTECTED</text></svg></div>
            <span class="illustration-label">Broadcast Protected</span>
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
            <h2 class="section-title">Documents for Broadcast Copyright</h2>
            <div class="content-text">
                
                <ul><li><strong>Broadcast Log:</strong> Date, time, channel, content details, transmission records - evidence of broadcast for S.37 enforcement.</li><li><strong>Broadcasting Licence (MIB):</strong> Government licence for TV/radio/cable operation.</li><li><strong>Content Licensing Agreement:</strong> Agreement showing acquisition of content for broadcast with all three rights layers.</li><li><strong>Performer Consent (S.38):</strong> Releases from performers in broadcast content.</li><li><strong>Music Licence (IPRS/PPL):</strong> Synchronisation and mechanical licences for broadcast music.</li><li><strong>S.31D Notice and Royalty Records:</strong> If using statutory licence: notice plus payment proof.</li><li><strong>Signal Encryption Records:</strong> Proof of conditional access system for encrypted broadcasts.</li><li><strong>Piracy Evidence:</strong> Screenshots, recordings, URLs of unauthorized streams/rebroadcasts.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Three Independent Layers:</strong> Signal (S.37 - broadcasting organisation), Content (S.13 - author/producer/assignee), and Performer (S.38 - performer). Each layer has different owner, duration, and evidence requirements. All three must be documented for comprehensive protection.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Broadcast Copyright Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Signal vs Content Confusion</td><td>Broadcasters document content copyright (S.13) but not broadcast signal right (S.37). Two separate rights with different durations and enforcement</td><td>Both layers documented and enforced independently. Two causes of action against cable retransmission piracy</td></tr>
                        <tr><td>Live Event Signal Piracy (IPL/Cricket)</td><td>Unauthorized streaming on websites, Telegram, social media during live matches. Revenue loss every minute. Post-event injunction is useless</td><td>Pre-event Bombay HC injunctions (John Doe orders). Real-time monitoring. Immediate platform takedowns. Mumbai Police coordination</td></tr>
                        <tr><td>OTT Broadcast Right Ambiguity</td><td>Does OTT simulcast qualify for S.37? S.2(dd) includes 'by wire' but traditionally means TV/radio. On-demand content likely not S.37</td><td>Correct rights framework advised per content type. Simulcast vs on-demand distinction. S.13 protection for non-S.37 content</td></tr>
                        <tr><td>Cable Unauthorized Retransmission</td><td>Mumbai's vast cable network has compliance gaps. Both S.37 and Cable TV Act violation. TRAI NTO carriage fee issues</td><td>Enforcement through both copyright (S.37/55/63) and Cable TV Act. TRAI compliance advisory. Carriage agreement drafting</td></tr>
                        <tr><td>S.31D Non-Compliance</td><td>Radio/TV channels unclear on statutory licence procedure, notice requirements, royalty rates. Non-compliance = unlicensed broadcast</td><td>Complete S.31D compliance: notice preparation, royalty rate determination, payment documentation, ongoing tracking</td></tr>

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
            <h2 class="section-title">Broadcast Copyright Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Broadcast Right Documentation</td><td>Rs 10,000 - Rs 25,000</td></tr>
                        <tr><td>Content Licensing Agreement</td><td>Rs 15,000 - Rs 40,000</td></tr>
                        <tr><td>S.31D Statutory Licence Compliance</td><td>Rs 15,000 - Rs 30,000</td></tr>
                        <tr><td>Anti-Piracy (Cease and Desist)</td><td>Rs 10,000 - Rs 25,000</td></tr>
                        <tr><td>Bombay HC Injunction Advisory</td><td>Rs 25,000 - Rs 75,000+</td></tr>
                        <tr><td>Online Takedown Campaign</td><td>Rs 10,000 - Rs 20,000</td></tr>
                        <tr><td>Comprehensive Package</td><td>Rs 50,000 - Rs 1,50,000+</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Broadcast Copyright consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20Registration%20for%20Broadcast%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Broadcast Copyright Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Broadcast Rights Assessment</td><td>1-2 days</td></tr>
                        <tr><td>Rights Documentation</td><td>3-7 days</td></tr>
                        <tr><td>Licensing Agreement Drafting</td><td>5-15 days</td></tr>
                        <tr><td>S.31D Compliance Setup</td><td>3-7 days</td></tr>
                        <tr><td>Anti-Piracy Framework</td><td>3-5 days</td></tr>
                        <tr><td>Bombay HC Injunction (Urgent)</td><td>1-3 days</td></tr>
                        <tr><td>Ongoing Enforcement</td><td>Continuous</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Walk-in at Patron's Marine Lines, Mumbai office - at the centre of India's broadcasting ecosystem. Broadcast right is automatic from broadcast date (no registration needed). Live event enforcement (IPL, cricket) requires pre-event preparation: Bombay HC John Doe orders, monitoring setup, takedown procedures. Speed is everything in broadcast piracy.</p>

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
            <h2 class="section-title">Why Choose Patron for Broadcast Copyright in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Three-Layer Rights Expertise</h3><p>Signal (S.37), Content (S.13), Performer (S.38) - all three independently protectable layers handled. Most IP firms address only content copyright, leaving signal and performer unprotected.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Mumbai Broadcasting Ecosystem</h3><p>Marine Lines office at the centre: Star/Disney+ (BKC), Zee (Worli), Sony (Andheri), Viacom18 (BKC), Times Network (Lower Parel), AIR, radio networks. Industry knowledge of how rights flow.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Anti-Piracy Enforcement</h3><p>Pre-event Bombay HC injunctions (John Doe orders), real-time monitoring, immediate takedowns, S.63 criminal via Mumbai Police Cyber Cell. Speed is everything for live events.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>S.31D + Content Licensing Bundled</h3><p>Statutory licence compliance + comprehensive content licensing covering all rights layers + ongoing enforcement. 10,000+ businesses, 4.9 rating, 15+ years. Four offices.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Broadcasters Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Four offices: Pune, Mumbai, Delhi, Gurugram. Serving TV networks, radio broadcasters, cable operators, DTH providers, OTT platforms, and content production houses across Mumbai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Broadcast Copyright - Three Layers Compared</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Layer</th><th>Legal Basis</th><th>Protects</th><th>Duration</th></tr></thead>
                    <tbody>
                        <tr><td>Broadcast Signal</td><td>S.37 (neighbouring right)</td><td>The transmission signal itself</td><td>25 years from broadcast</td></tr>
                        <tr><td>Content Copyright</td><td>S.13/S.14 (copyright)</td><td>Programme, film, music, script</td><td>Lifetime+60 yrs / 60 yrs (films)</td></tr>
                        <tr><td>Performer's Right</td><td>S.38 (performer's right)</td><td>Live performance in broadcast</td><td>50 years from performance</td></tr>
                        <tr><td colspan="4" style="font-style:italic;">All three layers are independent - different owners, durations, and enforcement mechanisms. All coexist in a single broadcast.</td></tr>

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
            <h2 class="section-title">Related Services for Mumbai Broadcasters</h2>
            <div class="content-text">
                
                <p>Mumbai broadcasters often need complementary services:</p>
                <ul><li><a href="/copyright-registration-for-broadcast">Broadcast Copyright (India)</a> - National overview.</li>
                    <li><a href="/copyright-registration/mumbai">Copyright Registration in Mumbai</a> - Register produced content (S.13).</li>
                    <li><a href="/copyright-assignment/mumbai">Copyright Assignment in Mumbai</a> - Transfer/acquire content rights.</li>
                    <li><a href="/copyright-disclaimer/mumbai">Copyright Disclaimer in Mumbai</a> - Broadcast ownership notices.</li>
                    <li><a href="/copyright-objection/mumbai">Copyright Objection in Mumbai</a> - Defend against challenges.</li>
                    <li><a href="/trademark-registration/mumbai">Trademark Registration in Mumbai</a> - Network branding.</li>
                    <li><a href="/patent-registration">Patent Registration</a> - Broadcast technology.</li>
                    <li><a href="#">Company Registration</a> - Broadcasting entity setup.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Broadcast Copyright</h2>
            <div class="content-text">
                
                <p><strong>Section 37 - Broadcast Reproduction Right:</strong></p>
                <ul><li>S.37(1): Every broadcasting organisation has broadcast reproduction right.</li>
                    <li>S.37(2): 25 years from calendar year following broadcast.</li>
                    <li>S.37(3): Exclusive rights - rebroadcast, public display, recording, reproduction, sale/rent.</li></ul>
                <p style="margin-top:16px;"><strong>Section 2(dd) - Broadcast:</strong></p>
                <ul><li>Communication to public by wireless diffusion (signs, sounds, visual images) or by wire, including rebroadcast.</li></ul>
                <p style="margin-top:16px;"><strong>Section 39/39A - Exceptions and Application:</strong></p>
                <ul><li>S.39: Private use, teaching, fair dealing, judicial. S.39A: Makes S.18/19/30/55/63 applicable to broadcast rights.</li></ul>
                <p style="margin-top:16px;"><strong>Section 31D - Statutory Licence:</strong></p>
                <ul><li>Broadcaster can use works by giving notice + paying Appellate Board royalties.</li></ul>
                <p style="margin-top:16px;"><strong>Key Cases:</strong> Fortune Films v. Dev Anand (Bombay HC). Star India v. Piyush Agarwal (signal piracy). ESPN v. Global Broadcast News (sports rights).</p>
                <p style="margin-top:16px;"><strong>Portals:</strong> <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office</a> | <a href="https://trai.gov.in" target="_blank" rel="noopener">TRAI</a> | <a href="https://mib.gov.in" target="_blank" rel="noopener">MIB</a> | <a href="https://bombayhighcourt.nic.in" target="_blank" rel="noopener">Bombay HC</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: Copyright for Broadcast in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about broadcast reproduction right, duration, infringement, signal vs content copyright, statutory licence, and OTT platform rights for Mumbai broadcasters.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Broadcast Copyright',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is broadcast reproduction right under the Copyright Act?</h3>
                        <div class="faq-expanded__a"><p>Broadcast reproduction right is a special neighbouring right under Section 37 of Copyright Act 1957 protecting the broadcast signal not the underlying content. Gives broadcaster exclusive rights to rebroadcast, cause broadcast to be seen or heard by public on payment, make sound or visual recordings, reproduce and sell such recordings. Automatic right from broadcast date. No registration required. Independent of content copyright. 25-year protection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How long does broadcast copyright last in India?</h3>
                        <div class="faq-expanded__a"><p>Broadcast reproduction right under Section 37(2) subsists for 25 years from the beginning of the calendar year following the year of broadcast. For example broadcast in 2026 is protected until 31 December 2051. Shorter than content copyright at lifetime plus 60 years and shorter than performer rights at 50 years. All three layers coexist in a single broadcast each with own duration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What acts constitute infringement of broadcast rights?</h3>
                        <div class="faq-expanded__a"><p>Under Section 37(3) without broadcaster licence: rebroadcasting the broadcast, causing broadcast to be heard or seen by public on payment of charges, making any sound or visual recording, reproducing such recordings, and selling or renting such recordings commercially. Subject to Section 39 exceptions for private use, teaching, research, fair dealing for criticism review reporting, and judicial proceedings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between broadcast copyright and content copyright?</h3>
                        <div class="faq-expanded__a"><p>Broadcast reproduction right S.37 protects the broadcast signal and belongs to broadcasting organisation for 25 years. Content copyright S.13/14 protects the underlying programme film music script and belongs to author or producer for lifetime plus 60 years or 60 years for films and recordings. These are independent rights. Broadcaster may own signal right but not content copyright. Both can be independently enforced.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is Section 31D statutory licence for broadcasting?</h3>
                        <div class="faq-expanded__a"><p>Section 31D allows broadcasting organisations to communicate copyrighted works to public by broadcast by giving prior notice to copyright owner and paying royalties at rate fixed by Appellate Board. Relevant for radio broadcasters playing copyrighted music and TV channels using background music. Ensures broadcasters can access content while copyright owners receive fair compensation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can OTT platforms claim broadcast reproduction right?</h3>
                        <div class="faq-expanded__a"><p>Legally debated in India. Section 2(dd) defines broadcast as communication by wireless diffusion or by wire which could include internet streaming. For OTT simulcast of TV broadcast there is stronger argument for S.37 protection. For OTT-exclusive on-demand content S.37 likely does not apply but content is protected under S.13 copyright. Courts have not conclusively settled this question.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Broadcast reproduction right kya hai?</strong> Har broadcasting organisation (TV, radio) ko S.37 ke under signal protect karne ka right milta hai - 25 saal. Content se alag hai yeh. Agar koi bina permission rebroadcast kare, recording kare, ya sell kare toh infringement. Automatic right - registration nahi chahiye.</p>
                <p><strong>Mumbai mein kyun important hai?</strong> Star, Zee, Sony, Viacom18, Times Network, AIR, Radio Mirchi sab Mumbai se operate karte hain. IPL cricket ka broadcast yahan se manage hota hai. Signal piracy sabse bada threat - Bombay HC se urgent injunction mil sakta hai.</p>
                <p><strong>Teen layers kya hain?</strong> (1) Signal - S.37 - broadcaster ka - 25 saal. (2) Content - S.13 - programme/film ka - lifetime+60 saal. (3) Performer - S.38 - actor/singer ka - 50 saal. Teen alag owners, teen alag enforcement. Patron teeno handle karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Every Hour of Unprotected Broadcast = Revenue Lost to Piracy</h2>
            <div class="content-text">
                
                <p>Unauthorized rebroadcast ongoing? Revenue loss every minute - especially live sports. Cable retransmitting without licence? Both S.37 and Cable TV Act violated. Online piracy spreading on Telegram within minutes of broadcast? Pre-event injunction essential. S.31D non-compliant? Broadcast is unlicensed. Contact Patron today for broadcast copyright documentation and enforcement.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20Registration%20for%20Broadcast%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Protect Your Broadcast Rights in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Broadcast copyright protects India's most commercially valuable IP asset - the broadcast signal - through Section 37's 25-year neighbouring right. Mumbai houses every major network, making broadcast documentation and anti-piracy enforcement critical business operations.</p>
                <p style="color:rgba(255,255,255,0.9);">The three-layer framework (signal S.37 + content S.13 + performer S.38) requires specialised handling. Signal piracy during live events demands real-time enforcement through Bombay HC injunctions and platform takedowns.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron delivers comprehensive broadcast copyright services - documentation, licensing, S.31D compliance, and aggressive enforcement - from Marine Lines at the heart of India's broadcasting ecosystem. 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20Registration%20for%20Broadcast%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Broadcast%20Copyright%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Copyright%20Registration%20for%20Broadcast%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Broadcast Copyright Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides broadcast copyright and anti-piracy services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">Broadcast copyright and signal protection</div>
                <div class="pa-city-grid">
                    <a href="/copyright-registration-for-broadcast/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/copyright-registration-for-broadcast/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/copyright-registration-for-broadcast/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">End-to-end IP and broadcast compliance</div>
                <div class="pa-cross-grid">
                    <a href="/copyright-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/copyright-assignment/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Assignment</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/copyright-disclaimer/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Disclaimer</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/copyright-objection/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Objection</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers copyright for broadcast in Mumbai. Content reviewed half-yearly (Freshness Tier 2) reflecting broadcasting regulations, TRAI orders, OTT rules, and digital platform enforcement developments.</p>
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
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
