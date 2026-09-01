
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Copyright for Artistic Work in Delhi - Logos & Paintings</title>
    <meta name="description" content="CA-assisted Copyright for Artistic Work in Delhi. Paintings, photos, logos, designs. No quality test. TM-60 for logos. Rs 500. Call +91 945 945 6700.">
    <link rel="canonical" href="/copyright-registration-for-artistic-work/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Copyright for Artistic Work in Delhi - Logos & Paintings">
    <meta property="og:description" content="CA-assisted Copyright for Artistic Work in Delhi. Paintings, photos, logos, designs. No quality test. TM-60 for logos. Rs 500. Call +91 945 945 6700.">
    <meta property="og:url" content="/copyright-registration-for-artistic-work/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copyright for Artistic Work in Delhi - Logos & Paintings">
    <meta name="twitter:description" content="CA-assisted Copyright for Artistic Work in Delhi. Paintings, photos, logos, designs. No quality test. TM-60 for logos. Rs 500. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Copyright for Artistic Work in Delhi - Logos & Paintings",
      "description": "CA-assisted Copyright for Artistic Work in Delhi. Paintings, photos, logos, designs. No quality test. TM-60 for logos. Rs 500. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/copyright-registration-for-artistic-work/delhi",
      "serviceType": "Copyright for Artistic Work in Delhi - Logos & Paintings",
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
          "name": "Copyright for Artistic Work - Painting, Sculpture & Design",
          "item": "https://www.patronaccounting.com/copyright-registration-for-artistic-work"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Copyright for Artistic Work in Delhi - Logos & Paintings",
          "item": "https://www.patronaccounting.com/copyright-registration-for-artistic-work/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Where to register artistic work copyright?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Copyright Office, Boudhik Sampada Bhawan, Dwarka, New Delhi 110078. Online at copyright.gov.in. Rs 500/work. Diary number immediate. Physical filing available. Patron Rohini manages both."
          }
        },
        {
          "@type": "Question",
          "name": "Is there an artistic quality test?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. S.2(c)(i): 'whether or not possessing artistic quality.' Simple product label = master painting = same category. Only requirement: originality (not copied + some creative expression)."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need TM-60 for logo copyright?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes — MANDATORY under Rule 70(6) if artistic work used/capable of being used on goods/services. CGPDTM at Dwarka issues TM-60. Filing without = #1 Delhi discrepancy cause. Patron coordinates before Form XIV."
          }
        },
        {
          "@type": "Question",
          "name": "How long does artistic copyright last?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Art (not photos): Life + 60 years (S.22). Photos: 60 years from publication (S.25). Anonymous: 60 years from first publication. No renewal — fixed term."
          }
        },
        {
          "@type": "Question",
          "name": "Can commissioned photos be copyrighted by photographer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Default: NO. S.17(b): commissioner = first owner for photos taken for valuable consideration. Photographer retains only if written agreement says so. Patron drafts retention clauses."
          }
        },
        {
          "@type": "Question",
          "name": "What about Designs Act for textile patterns?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Critical: >50 industrial reproductions = excluded from copyright. Designs Act 2000 only."
          }
        },
        {
          "@type": "Question",
          "name": "Can AI-generated art be copyrighted?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Purely AI-generated (prompt only) = NO (DHC Rupendra Kashyap: human authorship required). AI as tool with extensive human direction/modification/selection = potentially yes. Patron advises workflow documentation."
          }
        },
        {
          "@type": "Question",
          "name": "What is freedom of panorama in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "S.52(s)(t): photographing/publishing public buildings + outdoor sculptures = not infringement. Delhi photographers receiving notices for monument photos can cite these sections + S.60 remedy."
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
                        Copyright for Artistic Work in Delhi: Paintings, Photos, Logos & Designs — Rs 500
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Covers:</span> Paintings, sculptures, drawings, photos, engravings, architecture, craft — S.2(c) Copyright Act 1957</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>No Quality Test:</span> Even simple logo or diagram qualifies — S.2(c)(i): "whether or not possessing artistic quality"</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>TM-60 MANDATORY:</span> Trademark Search Certificate required if artistic work is used on goods/services — most missed step</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Diary number same day; certificate 4-8 months (no objection); 12-24 months (if objected)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Artistic work copyright for Delhi artists, photographers, designers, and craft artisans.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20artistic%20work%20copyright%20in%20Delhi." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Artistic Work Copyright in Delhi',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Challenges</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Copyright vs Design vs TM</a><a href="#fees-section" class="toc-btn">Pricing</a><a href="#timeline-section" class="toc-btn">Why Patron</a><a href="#benefits-section" class="toc-btn">Quality</a><a href="#comparison-section" class="toc-btn">Patron vs Others</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Artistic Work Copyright in Delhi: No Quality Test, TM-60 Critical</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Artistic Work Copyright in Delhi Services at a Glance</strong></p>
                    <p>Artistic work copyright = registration of visual creations under S.2(c) Copyright Act 1957. Covers: paintings, sculptures, drawings (diagrams/maps/charts/plans), engravings, photographs, architecture, artistic craftsmanship. NO artistic quality test (S.2(c)(i)). TM-60 MANDATORY if used on goods (Rule 70(6)). Designs Act check: >50 industrial reproductions = Designs Act only. Rs 500/work. Diary number same day. Certificate 4-8 months. Life + 60 years (art). Photos: 60 years from publication.</p>
                </div>
                <p>Delhi is India's most important artistic creation hub outside Mumbai. For a comprehensive overview, see our <a href="/copyright-registration-for-artistic-work">Copyright for Artistic Work</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>S.2(c) Types</td><td>Paintings, sculptures, drawings (diagrams/maps/charts/plans), engravings, photographs, architecture, artistic craftsmanship</td></tr><tr><td>Quality Test</td><td>NONE. S.2(c)(i): "whether or not possessing artistic quality." Simple logo = master painting = same category</td></tr><tr><td>TM-60</td><td>MANDATORY for logos/brand art used on goods (Rule 70(6)). Most common Delhi discrepancy cause. Obtain BEFORE Form XIV</td></tr><tr><td>Designs Act</td><td>If applied to article >50 times industrially = excluded from copyright. Designs Act 2000 only. Affidavit needed if <50</td></tr><tr><td>Duration</td><td>Art: Life + 60 years (S.22). Photos: 60 years from publication (S.25). No renewal</td></tr></tbody></table></div><p</p>
                <p>NGMA Jaipur House. India Habitat Centre Lodhi Road (200+ exhibitions/year). Hauz Khas Village (Delhi Art Gallery DAG 1993). Delhi College of Art (oldest fine arts). CP ad agencies/brand studios. Lajpat Nagar textile/craft designs. Copyright Office + CGPDTM both at Dwarka = TM-60 + Form XIV single workflow. AI art: human authorship required (DHC Rupendra Kashyap). Freedom of panorama S.52(s)(t). Patron Rohini = TM-60 + Designs Act + Form XIV.</p>
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
                <h2 class="section-title">What Is Copyright for Artistic Work?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Definition:</strong> Registration of original visual creations under S.2(c) Copyright Act 1957 at Copyright Office Dwarka. Covers paintings, sculptures, drawings, photos, engravings, architecture, artistic craftsmanship. No artistic quality required.</p><p><strong>Auto + registration:</strong> Copyright auto-exists from creation (S.13). Registration = prima facie evidence. Enables Delhi HC infringement suit + customs enforcement.</p><p><strong>TM-60 = critical:</strong> If artistic work used/capable of being used on goods/services → TM-60 from CGPDTM MANDATORY before Form XIV. Most commonly missed step. Absence = discrepancy letter.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Artistic Work Copyright in Delhi:</strong></p>
                    <p><strong>S.2(c):</strong> (i) paintings, sculptures, drawings, engravings, photos — no quality test; (ii) architecture; (iii) any artistic craftsmanship.</p><p><strong>TM-60 (Rule 70(6)):</strong> Trademark search certificate from CGPDTM. MANDATORY if art used on goods. CGPDTM + Copyright Office both at Dwarka = single workflow advantage.</p><p><strong>Designs Act 50-Rule:</strong> >50 industrial reproductions = excluded from copyright. Designs Act 2000 only. <50 = copyright + affidavit.</p><p><strong>S.17(b) Photographs:</strong> Commissioned photos: commissioner = first owner (not photographer). Written agreement needed to retain photographer's copyright.</p><p><strong>Freedom of Panorama S.52(s)(t):</strong> Public buildings, outdoor sculptures = free to photograph/publish without permission.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Artistic Work Copyright in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Artistic</span>
                        <strong>No Quality Test</strong>
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
            <h2 class="section-title">Who Needs Artistic Work Copyright in Delhi</h2>
            <div class="content-text">
                
                <p><strong>Hauz Khas Gallery Artists:</strong> DAG, commercial galleries, artist studios. Paintings/prints sold + internationally licensed. Registration = standing for Delhi HC infringement suit + customs enforcement against reproductions.</p><p><strong>Delhi College of Art Graduates:</strong> Digital illustrations, logo designs, brand identities. Early-career: no contractual protections. Copyright = primary tool to preserve ownership vs clients who claim commissioned work.</p><p><strong>India Habitat Centre Exhibitors:</strong> 200+ art events/year. Licensing to hospitality/corporate. Registered certificate = proof corporations require for licensing agreements.</p><p><strong>Lajpat Nagar Textile/Craft:</strong> Fabric prints, embroidery patterns, block designs. S.2(c)(iii) artistic craftsmanship. Reproduced by large manufacturers without credit. Copyright protects (if <50 industrial reproductions).</p><p><strong>CP Agencies/Brand Studios:</strong> Logos, packaging art, campaign visuals. TM-60 + Form XIV for full IP. Both copyright + trademark = strongest protection.</p>

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
                        <tr><td>Missing TM-60 (#1 Delhi Discrepancy)</td><td>Logo/brand art filed without TM-60. 'Capable of being used on goods' triggers Rule 70(6). Discrepancy letter + 30-day reply + 3-6 months delay. Patron identifies TM-60 at intake, obtains BEFORE Form XIV</td></tr><tr><td>Designs Act Conflict (50-Rule)</td><td>Lajpat Nagar textile patterns applied >50 times industrially = copyright excluded. Only Designs Act. <50 = copyright available + affidavit needed. Patron assesses production volume at intake</td></tr><tr><td>Commissioned Photos (S.17(b))</td><td>Photographer paid for shoot: commissioner = first owner (not photographer). Without copyright retention clause = photographer loses rights. Patron drafts photography contracts</td></tr><tr><td>AI-Generated Art (DHC Rupendra Kashyap)</td><td>AI images without significant human creative input = ineligible. AI as tool (extensive direction/modification/selection) = claimable. Patron advises AI-assisted workflow documentation</td></tr><tr><td>Freedom of Panorama Misunderstanding</td><td>Delhi photographers receive notices for public building/monument photos. S.52(s)(t) = exempt. Groundless threat = S.60 remedy per DHC Feb 2026 TV9 ruling</td></tr>

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
            <h2 class="section-title">Artistic Work Copyright in Delhi - 5 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">TM-60 + Form XIV coordinated from Patron's Rohini office.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1-2</span><h3 class="step-title">Assess Work + TM-60 + Designs Act</h3><p class="step-description">Classify: painting/sculpture/drawing/photo/architecture/craft under S.2(c). Two critical checks: (1) Used on goods? → TM-60 from CGPDTM MANDATORY. (2) Registered as design or >50 industrial reproductions? → Designs Act only. CGPDTM + Copyright Office both at Dwarka. TM-60 takes 2-4 weeks. Patron initiates before Form XIV.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TM-60 initiated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="6" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">ART</text></svg></div><span class="illustration-label">Checked</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Form XIV + Upload</h3><p class="step-description">Form XIV: Statement of Particulars + Further Particulars. Medium (oil/watercolour/digital/photo/sculpture). Published status. TM-60 attached. Designs Act affidavit if applicable. Artwork uploaded: png/jpg/pdf <5MB. Rs 500 online. Diary number immediate. Post acknowledgement to Dwarka.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Diary number</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">XIV</text></svg></div><span class="illustration-label">Same Day</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4-5</span><h3 class="step-title">Objection + Certificate</h3><p class="step-description">30-day objection window. Examiner scrutiny. If discrepancy (most common: missing TM-60) → 30-day reply. Patron monitors + responds. Certificate (Extract from Register) 4-8 months (clean) or 12-24 months (contested). Berne Convention: 181 countries. Post-registration: licensing, customs recordal, Delhi HC enforcement.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Examined</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Protected</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th><th>Notes</th></tr></thead><tbody><tr><td>Form XIV</td><td>Application</td><td>Statement of Particulars + Further Particulars</td></tr><tr><td>Artwork File</td><td>Copyright subject</td><td>png/jpg/pdf <5MB. Sculptures: multiple angle photos</td></tr><tr><td>TM-60 Certificate</td><td>Logo/brand art on goods</td><td>MANDATORY under Rule 70(6). Obtain BEFORE Form XIV</td></tr><tr><td>Designs Act Affidavit</td><td>If <50 reproductions</td><td>Confirms not applied industrially >50 times</td></tr><tr><td>PAN + Aadhaar / COI</td><td>Applicant identity</td><td>Individual or company</td></tr><tr><td>NOC from Author</td><td>If applicant ≠ artist</td><td>Commissioned work or assignment</td></tr><tr><td>POA</td><td>If Patron filing</td><td>Authorised representative</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Delhi tip:</strong> CGPDTM (TM-60) + Copyright Office both at Boudhik Sampada Bhawan Dwarka = single trip/workflow. TM-60 takes 2-4 weeks. Patron initiates TM-60 and prepares Form XIV simultaneously. See <a href="/copyright-registration">Copyright Registration</a> for all 6 work categories.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright vs Design Registration vs Trademark</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Protects</td><td>Copyright: Original artistic expression</td><td>Design: Shape/pattern applied industrially. TM: Brand names/logos as identifiers</td></tr><tr><td>Best for Delhi</td><td>Hauz Khas painters, photographers, CP ad creative, Lajpat Nagar craft (<50)</td><td>Design: Lajpat Nagar/Okhla patterns >50. TM: Brand logos as commercial identifiers</td></tr><tr><td>Fee</td><td>Copyright: Rs 500/work</td><td>Design: Rs 1,000/design. TM: Rs 4,500/class</td></tr><tr><td>Duration</td><td>Copyright: Life + 60 years (no renewal)</td><td>Design: 10 years (renewable by 5). TM: 10 years (renewable indefinitely)</td></tr><tr><td>Registration Required?</td><td>Copyright: No (auto); registration = evidence</td><td>Design: Not mandatory but essential. TM: Registration = stronger protection</td></tr>

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
            <h2 class="section-title">Artistic Work Copyright Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Copyright Registration (Form XIV)</td><td>Rs 500 govt + From Rs 3,999 professional | Includes Form XIV prep, filing, Diary No. tracking</td></tr><tr><td>TM-60 Coordination (CGPDTM)</td><td>Govt TM search fee + From Rs 2,000 | MANDATORY for logos/brand art on goods</td></tr><tr><td>Designs Act Affidavit</td><td>NIL govt + From Rs 1,500 | For craft patterns <50 reproductions</td></tr><tr><td>Full Package (TM-60 + Form XIV + Filing)</td><td>Rs 500 + TM fees + From Rs 5,999 | End-to-end: assessment, TM-60, Form XIV, objection monitoring</td></tr><tr><td>Objection Reply</td><td>NIL govt + From Rs 2,999 | Within 30-day deadline; case law + evidence</td></tr><tr><td>Annual Portfolio Management</td><td>From Rs 3,999/year | Multiple works; status monitoring; licensing advisory</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Artistic Work Copyright in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20artistic%20work%20copyright%20in%20Delhi." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Choose Patron for Artistic Copyright in Delhi?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>TM-60 at Intake (Not After Discrepancy)</td><td>Proactive: identifies TM-60 requirement at intake for ALL logo/brand art. CGPDTM + Copyright Office both Dwarka = single workflow. Prevents #1 Delhi discrepancy cause</td></tr><tr><td>Designs Act Conflict Assessment</td><td>50-time industrial reproduction threshold checked. Craft/textile patterns: copyright vs Designs Act routing. Standard intake, not afterthought</td></tr><tr><td>AI Art Advisory (DHC Rupendra Kashyap)</td><td>Human authorship documentation for AI-assisted works. Workflow structuring for copyright eligibility. Not addressed by any Delhi competitor</td></tr><tr><td>Hauz Khas / Delhi College of Art Segments</td><td>Fine artists vs commercial designers = different frameworks. Licensing vs enforcement-focused. Commissioned work S.17(b) photographer advisory</td></tr><tr><td>From Rs 500 | Life + 60 Years</td><td>No renewal. Berne Convention 181 countries. Full package from Rs 5,999. Walk-in Rohini. Physical filing at Copyright Office Dwarka</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> TM-60 takes 2-4 weeks. Start now — cannot file Form XIV without TM-60 for logos/brand art. Designs Act: >50 industrial reproductions = copyright excluded. AI art: document human creative process in 2026 before standards tighten. Registration = enforcement power at Delhi HC. From Rs 500.</p>

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
            <h2 class="section-title">Patron vs Other Delhi IP Consultants</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Patron: TM-60 Proactive</h3><p class="feature-text">Identified at intake for all logo/brand art. CGPDTM coordination before Form XIV. Prevents #1 Delhi discrepancy cause entirely.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Others: After Discrepancy</h3><p class="feature-text">TM-60 missed or identified only after Copyright Office rejects. 3-6 months delay. Single-route copyright filing without Designs Act check.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Patron: AI Art Advisory</h3><p class="feature-text">DHC Rupendra Kashyap precedent. Human authorship documentation. AI-assisted workflow structuring. Not addressed by any Delhi competitor.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Patron: Dwarka Physical</h3><p class="feature-text">CGPDTM + Copyright Office both at Boudhik Sampada Bhawan Dwarka. Physical filing + hearing attendance. Online-only platforms can't replicate.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Hauz Khas gallery artist. 12 paintings registered. TM-60 for logo on merchandise. All certificates received in 5 months. Now licensing to hospitality group."</p><p style="font-weight:700;font-size:14px;margin:0;">- Artist, Hauz Khas Village</p></blockquote>

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
                    <thead><tr><th>Factor</th><th>Patron</th><th>Other Delhi Consultants / Online</th></tr></thead>
                    <tbody>
                        <tr><td>TM-60 Identification</td><td>Proactive at intake for all logo/brand art</td><td>Often missed; identified after discrepancy</td></tr><tr><td>Designs Act Assessment</td><td>Standard intake check; 50-rule evaluated</td><td>Rarely assessed; single-route only</td></tr><tr><td>AI-Generated Art</td><td>DHC Rupendra Kashyap advisory</td><td>Not addressed</td></tr><tr><td>Physical Filing Dwarka</td><td>CGPDTM + Copyright Office in person</td><td>Online-only; postal delays</td></tr><tr><td>S.52(s)(t) Panorama</td><td>Available; combined with S.60 protection</td><td>Not addressed</td></tr><tr><td>Segment-Specific</td><td>Fine art vs commercial vs craft frameworks</td><td>Generic one-size-fits-all</td></tr>

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
                
                <ul><li><a href="/copyright-registration-for-artistic-work">Artistic Work Copyright (National)</a></li><li><a href="/copyright-registration">Copyright Registration</a></li><li><a href="/brand-copyright-registration">Brand Copyright Registration</a></li><li><a href="/trademark-registration">Trademark Registration</a></li><li><a href="#">Design Registration</a></li></ul>

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
                
                <p><strong>S.2(c):</strong> Artistic work = paintings, sculptures, drawings, engravings, photos (no quality test S.2(c)(i)), architecture, artistic craftsmanship.</p><p><strong>Rule 70(6):</strong> TM-60 MANDATORY for artistic work used on goods. CGPDTM issues Form TM-60. Most common Delhi discrepancy cause.</p><p><strong>Designs Act 2000:</strong> >50 industrial reproductions = excluded from copyright. Only Designs Act. <50 = copyright with affidavit.</p><p><strong>S.17(b):</strong> Commissioned photos/paintings: commissioner = first owner. Written agreement needed for artist to retain. Critical for Delhi photographers.</p><p><strong>S.22/S.25:</strong> Art: Life + 60 years. Photos: 60 years from publication.</p><p><strong>S.52(s)(t):</strong> Freedom of panorama for public buildings + outdoor sculptures. DHC Rupendra Kashyap: AI art needs human authorship.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Artistic Work Copyright in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about artistic copyright, TM-60, Designs Act, photos, and AI art in Delhi.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Artistic Work Copyright in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Where to register artistic work copyright?</h3>
                        <div class="faq-expanded__a"><p>Copyright Office, Boudhik Sampada Bhawan, Dwarka, New Delhi 110078. Online at copyright.gov.in. Rs 500/work. Diary number immediate. Physical filing available. Patron Rohini manages both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is there an artistic quality test?</h3>
                        <div class="faq-expanded__a"><p>No. S.2(c)(i): 'whether or not possessing artistic quality.' Simple product label = master painting = same category. Only requirement: originality (not copied + some creative expression).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Do I need TM-60 for logo copyright?</h3>
                        <div class="faq-expanded__a"><p>Yes — MANDATORY under Rule 70(6) if artistic work used/capable of being used on goods/services. CGPDTM at Dwarka issues TM-60. Filing without = #1 Delhi discrepancy cause. Patron coordinates before Form XIV.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does artistic copyright last?</h3>
                        <div class="faq-expanded__a"><p>Art (not photos): Life + 60 years (S.22). Photos: 60 years from publication (S.25). Anonymous: 60 years from first publication. No renewal — fixed term.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can commissioned photos be copyrighted by photographer?</h3>
                        <div class="faq-expanded__a"><p>Default: NO. S.17(b): commissioner = first owner for photos taken for valuable consideration. Photographer retains only if written agreement says so. Patron drafts retention clauses.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What about Designs Act for textile patterns?</h3>
                        <div class="faq-expanded__a"><p>Critical: >50 industrial reproductions = excluded from copyright. Designs Act 2000 only. <50 reproductions = copyright available + affidavit confirming <50. Patron assesses production volume at intake.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can AI-generated art be copyrighted?</h3>
                        <div class="faq-expanded__a"><p>Purely AI-generated (prompt only) = NO (DHC Rupendra Kashyap: human authorship required). AI as tool with extensive human direction/modification/selection = potentially yes. Patron advises workflow documentation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is freedom of panorama in Delhi?</h3>
                        <div class="faq-expanded__a"><p>S.52(s)(t): photographing/publishing public buildings + outdoor sculptures = not infringement. Delhi photographers receiving notices for monument photos can cite these sections + S.60 remedy.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Delhi mein artistic work copyright kaise karo?</strong> S.2(c) ke under Form XIV copyright.gov.in par file karo. Logo/brand art ke liye pehle TM-60 CGPDTM Dwarka se lo. Rs 500/work.</p><p><strong>Simple diagram copyright ho sakta hai?</strong> Haan. S.2(c)(i): 'artistic quality' zaroori nahi. Simple sketch bhi qualify karta hai agar original hai.</p><p><strong>Textile pattern copyright ho sakta hai?</strong> Haan agar 50 se kam baar industrially reproduce kiya hai. 50+ = Designs Act 2000 se protect karo.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TM-60 Takes 2-4 Weeks — Start Today</h2>
            <div class="content-text">
                
                <p>TM-60 from CGPDTM takes 2-4 weeks. Cannot file Form XIV without TM-60 for logos/brand art. Designs Act: >50 industrial reproductions = copyright excluded. AI art: document human creative process NOW before standards tighten. Registration = enforcement at Delhi HC. From Rs 500.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20artistic%20work%20copyright%20in%20Delhi." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your Artistic Work Copyright in Delhi</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Artistic copyright in Delhi demands TM-60 coordination (logos), Designs Act assessment (craft patterns), and AI authorship advisory — procedural expertise beyond standard copyright filing.</p><p style="color:rgba(255,255,255,0.85);">Patron's Rohini office provides end-to-end S.2(c) copyright — TM-60 + CGPDTM coordination, Form XIV at Copyright Office Dwarka, discrepancy reply, and certificate delivery — for Hauz Khas artists, Delhi College of Art graduates, CP designers, and Lajpat Nagar craft artisans.</p><p style="color:rgba(255,255,255,0.85);">With 15+ years IP practice and unique Dwarka proximity (CGPDTM + Copyright Office), Patron is Delhi's most comprehensive artistic copyright service.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20artistic%20work%20copyright%20in%20Delhi." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Artistic%20Work%20Copyright%20Delhi&body=Hi%2C%20I%20need%20artistic%20work%20copyright%20in%20Delhi." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Artistic Work Copyright - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Artistic work copyright registration across major Indian cities</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Artistic Copyright</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/copyright-registration-for-artistic-work/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/copyright-registration-for-artistic-work/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/copyright-registration-for-artistic-work/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">Copyright & IP</div><div class="pa-cross-grid"><a href="/copyright-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/brand-copyright-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Brand Copyright</div><div class="pa-card-sub">Delhi</div></div></a><a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Design Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/copyright-assignment/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Assignment</div><div class="pa-card-sub">Delhi</div></div></a><a href="/copyright-objection/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Objection</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed bi-annually. Copyright Act 1957 S.2(c), Copyright Rules 2013 Rule 70(6), TM-60, Designs Act 2000, and Delhi HC artistic work precedents are verified.</p>
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
