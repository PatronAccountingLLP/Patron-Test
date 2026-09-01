@extends('layouts.service-app')
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@section('meta')
    <title>LLP Registration Online in Kolkata – Process, Fees</title>
    <meta name="description" content="CA-assisted LLP registration in Kolkata. LLP Act 2008, RoC Kolkata Nizam Palace, FiLLiP filing, LLP Agreement. Rs 7,499. Call +91 945 945 6700.">
    <link rel="canonical" href="/llp-incorporation/kolkata">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="LLP Registration Online in Kolkata – Process, Fees">
    <meta property="og:description" content="LLP registration Kolkata. RoC Nizam Palace. Rs 7,499. 10-15 days. Call +91 945 945 6700.">
    <meta property="og:url" content="/llp-incorporation/kolkata">
    <meta property="og:type" content="website"><meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "LLP Registration in Kolkata",
          "description": "CA-assisted LLP registration in Kolkata. LLP Act 2008, RoC Kolkata Nizam Palace, FiLLiP filing, LLP Agreement. Rs 7,499. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/llp-incorporation/kolkata",
          "serviceType": "LLP Registration in Kolkata",
          "areaServed": {
            "@type": "City",
            "name": "Kolkata"
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
            "url": "https://www.patronaccounting.com/llp-incorporation/kolkata",
            "price": "7499"
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
              "name": "LLP Registration",
              "item": "https://www.patronaccounting.com/llp-incorporation"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "LLP Kolkata",
              "item": "https://www.patronaccounting.com/llp-incorporation/kolkata"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which RoC handles Kolkata LLP?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "RoC Kolkata at Nizam Palace 234/4 AJC Bose Road. Incorporation processed by CRC online."
              }
            },
            {
              "@type": "Question",
              "name": "Can LLP be done online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes 100% online via MCA portal. CA handles DSC name FiLLiP Agreement and compliance."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Starting Rs 7,499 all-inclusive. DSC name FiLLiP Agreement stamp duty and CA fee."
              }
            },
            {
              "@type": "Question",
              "name": "How long does it take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "10-15 working days. DSC 1-2 days. Name 2-3 days. CRC 5-7 days. Agreement 2-3 days."
              }
            },
            {
              "@type": "Question",
              "name": "Can I use home address?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes residential address allowed. Utility bill and NOC from owner required."
              }
            },
            {
              "@type": "Question",
              "name": "Is minimum capital needed?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No minimum. Even Rs 1,000 per partner sufficient. MCA fee Rs 500 for up to Rs 1 lakh."
              }
            },
            {
              "@type": "Question",
              "name": "Can NRI be partner?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes but at least one designated partner must be Indian resident (120 days in India)."
              }
            },
            {
              "@type": "Question",
              "name": "Annual compliances?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 8 by Oct 30. Form 11 by May 30. ITR-5 by Jul 31. Audit only if turnover above Rs 40 lakh. Late fee Rs 100/day no cap."
              }
            }
          ]
        }
      ]
    }
</script>

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
                        LLP Registration in Kolkata: CA-Assisted Incorporation with Full Compliance
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">08 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents::</span> PAN, Aadhaar, address proof, registered office proof</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees::</span> Starting Rs 7,499 all-inclusive | Timeline: 10-15 working days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility::</span> Min 2 partners, 1 Indian resident | No minimum capital</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Authority::</span> RoC Kolkata, Nizam Palace, AJC Bose Road | LLP Act, 2008</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20registration%20in%20Kolkata.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'LLP Registration',
                                            'city'     => 'Kolkata',
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
    'ctaText'    => 'Kolkata entrepreneurs trust Patron for LLP registration, Agreement drafting, and annual compliance.',
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
<a href="#what-section" class="toc-btn">What Is LLP</a>
<a href="#who-section" class="toc-btn">Who Needs It</a>
<a href="#services-section" class="toc-btn">Services</a>
<a href="#procedure-section" class="toc-btn">Process</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Challenges</a>
<a href="#fees-section" class="toc-btn">Fees</a>
<a href="#timeline-section" class="toc-btn">Timeline</a>
<a href="#benefits-section" class="toc-btn">Why Patron</a>
<a href="#comparison-section" class="toc-btn">LLP vs Pvt Ltd</a>
<a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Registration in Kolkata: Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - LLP Registration Services at a Glance</strong></p>
                    <p>LLP registration in Kolkata incorporates a Limited Liability Partnership under the LLP Act, 2008 through the MCA portal. Certificate of Incorporation issued by CRC, registered under RoC Kolkata at Nizam Palace. No minimum capital. Fewer compliances than Pvt Ltd. No mandatory audit below Rs 40L turnover / Rs 25L contribution. PAN and TAN allotted with COI.</p>
                </div>
                <p>Kolkata's business ecosystem - from IT startups in Salt Lake Sector V to professional firms along Dalhousie Square and traders in Burrabazar - increasingly prefers LLP for limited liability with flexibility. RoC Kolkata at Nizam Palace processes all filings for West Bengal. Learn more about <a href="/llp-incorporation">LLP Registration across India</a>.</p>
                <p>Unlike Pvt Ltd, LLP has no minimum capital, fewer annual compliances, and optional audit. For Kolkata CA firms, legal practices, IT consultancies, and trading partnerships, LLP is the most cost-effective path to limited liability. Same CA handles <a href="/gst-registration/kolkata">GST</a>, <a href="/income-tax-return/kolkata">ITR</a>, and <a href="/zoho-books-accounting">Zoho Books accounting</a>.</p>
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
                <h2 class="section-title">What Is LLP Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>LLP registration is the process of incorporating a Limited Liability Partnership as a separate legal entity under the LLP Act, 2008 by filing FiLLiP form with MCA and obtaining a Certificate of Incorporation.</p>
<p>An LLP is a body corporate under Section 3. Perpetual succession, can own property, sue and be sued. Partners' liability limited to agreed contribution. Minimum 2 designated partners, at least 1 Indian resident (120 days in India).</p>
<p>For Kolkata: IT professionals in Salt Lake forming consulting ventures, CA/law firms along Dalhousie, Burrabazar traders upgrading from unregistered partnerships, and NRIs investing in Kolkata's economy all benefit from LLP structure.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for LLP Registration:</strong></p>
                    <ul>
<li><strong>LLP Act, 2008:</strong> Governing law for Limited Liability Partnerships in India</li>
<li><strong>FiLLiP:</strong> Form for Incorporation of LLP filed on MCA portal</li>
<li><strong>RUN-LLP:</strong> Name reservation service on MCA (Rs 200 fee)</li>
<li><strong>DPIN:</strong> Designated Partner Identification Number (via FiLLiP)</li>
<li><strong>Form 3:</strong> LLP Agreement filing within 30 days of COI</li>
<li><strong>RoC Kolkata:</strong> Nizam Palace, 234/4 AJC Bose Road</li>
<li><strong>Form 8:</strong> Statement of Account and Solvency (due Oct 30)</li>
<li><strong>Form 11:</strong> Annual Return (due May 30)</li>
</ul>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- LLP/Partnership illustration -->
                            <rect x="30" y="35" width="140" height="95" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Certificate -->
                            <rect x="55" y="45" width="90" height="60" rx="6" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="55" y="45" width="90" height="16" rx="6" fill="#14365F"/>
                            <text x="100" y="57" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP</text>
                            <!-- Partner icons -->
                            <circle cx="80" cy="80" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="80" y="84" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">P1</text>
                            <circle cx="120" cy="80" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="120" y="84" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">P2</text>
                            <!-- Shield -->
                            <text x="100" y="100" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LIMITED LIABILITY</text>
                            <!-- Tag -->
                            <rect x="30" y="112" width="55" height="14" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="57" y="122" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP ACT 2008</text>
                            <!-- Label -->
                            <text x="100" y="150" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>LLP Act, 2008</span>
                        <strong>LLP Registration</strong>
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
            <h2 class="section-title">Who Needs LLP Registration in Kolkata?</h2>
            <div class="content-text">
                
                <p><strong>IT Consultancies (Salt Lake / New Town):</strong> 2-5 partner firms. Low compliance, no mandatory audit below Rs 40L turnover. Flexible profit-sharing under LLP Agreement.</p>
<p><strong>CA/CS/Law Firms (Dalhousie / Park Street):</strong> ICAI/ICSI allow LLP for practices. Limited liability for professional negligence claims. Multi-partner profit-sharing.</p>
<p><strong>Trading Partnerships (Burrabazar):</strong> Upgrade from unregistered partnership. Limited liability on trade credit - critical for high-value commodity and textile trade.</p>
<p><strong>Export Ventures (Netaji Subhas Dock):</strong> Separate legal entity for IEC registration. NRI partner allowed. Cross-border commodity trade with limited liability.</p>
<p><strong>Manufacturing JVs (Taratala / Howrah):</strong> Joint ventures with foreign investment possible (government route for specified sectors). LLP Agreement defines contribution and management.</p>
<p><strong>Startups (New Town):</strong> Cost-effective entity with limited liability. No minimum capital. Scale to Pvt Ltd later when raising institutional funding.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>DSC for 2 Partners</td><td>Class 3 Digital Signature Certificate. Electronic issuance in 1-2 days. Required for all MCA filings</td></tr>
<tr><td>DPIN/DIN Application</td><td>Designated Partner Identification Number via FiLLiP form. Verified against existing DIN records</td></tr>
<tr><td>Name Reservation (RUN-LLP)</td><td>Up to 2 name options. Checked against companies, LLPs, trademarks. MCA fee Rs 200</td></tr>
<tr><td>FiLLiP Filing (Incorporation)</td><td>Partner details, Kolkata registered office, contribution details. MCA fee Rs 500 (up to Rs 1L contribution)</td></tr>
<tr><td>LLP Agreement Drafting + Form 3</td><td>Custom agreement: partner roles, profit-sharing, capital, management. Stamped per WB rates. Filed within 30 days</td></tr>
<tr><td>PAN and TAN</td><td>Allotted with Certificate of Incorporation by CRC. No separate application</td></tr>
<tr><td>Certificate of Incorporation</td><td>Issued by CRC with LLPIN, date, and RoC Kolkata registration</td></tr>
<tr><td>Post-Incorporation Advisory</td><td>Bank account, GST registration, WB Shop Act (if applicable), annual compliance calendar (Form 8, 11, ITR-5)</td></tr>

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
            <h2 class="section-title">LLP Registration Process in Kolkata</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From DSC issuance to name reservation, FiLLiP filing, COI, and LLP Agreement - here's how Patron incorporates your Kolkata LLP.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Obtain Digital Signature Certificate (DSC)</h3><p class="step-description">Class 3 DSC for each designated partner from government-approved CA. Electronic issuance in 1-2 days. Required for digitally signing FiLLiP and all MCA filings. No physical visit needed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DSC issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> E-signed ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DSC</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">CLASS 3</text><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">ISSUED</text></svg></div><span class="illustration-label">DSC Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Reserve LLP Name (RUN-LLP)</h3><p class="step-description">Up to 2 proposed names filed on MCA portal. Checked against existing companies, LLPs, trademarks. Rs 200 MCA fee. CRC processes in 2-3 days. CA ensures MCA naming guidelines compliance.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Name approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> No conflicts</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">RUN-LLP</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NAME</text><circle cx="85" cy="58" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 58l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Name Reserved</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File FiLLiP Form for Incorporation</h3><p class="step-description">Partner details (PAN, Aadhaar, DPIN), Kolkata registered office address (verified with utility bill + NOC), capital contribution. MCA fee Rs 500 (up to Rs 1L). CA pre-verifies all documents.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FiLLiP filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Documents verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FiLLiP</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">MCA PORTAL</text><text x="60" y="56" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">FILED</text></svg></div><span class="illustration-label">Filed with MCA</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Receive Certificate of Incorporation</h3><p class="step-description">CRC issues COI with LLPIN, PAN, TAN. LLP is now a separate legal entity under RoC Kolkata, Nizam Palace. Typically 5-7 working days from FiLLiP filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> COI issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAN + TAN allotted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">COI</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLPIN</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">PAN + TAN</text></svg></div><span class="illustration-label">LLP Incorporated</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Draft and File LLP Agreement (Form 3)</h3><p class="step-description">Custom agreement: partner rights, duties, profit-sharing, capital, management. Stamped per WB stamp duty rates. Signed by all partners. Filed within 30 days of COI. Penalty up to Rs 5L if late.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Agreement drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 3 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">AGREEMENT</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">FORM 3</text><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">WB STAMPED</text></svg></div><span class="illustration-label">Agreement Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Post-Incorporation Setup</h3><p class="step-description">Bank account opening in Kolkata (SBI/HDFC/PNB). GST registration if applicable. WB Shop Act registration. Compliance calendar set: Form 8 (Oct 30), Form 11 (May 30), ITR-5 (Jul 31).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bank account</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">BANK</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST</text><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">OPERATIONAL</text></svg></div><span class="illustration-label">Fully Operational</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <ul>
<li><strong>PAN:</strong> Of all designated partners</li>
<li><strong>Aadhaar:</strong> Of all designated partners (OTP verification)</li>
<li><strong>Address Proof:</strong> Passport/Voter ID/Driving Licence of partners</li>
<li><strong>Photograph:</strong> Passport-size photo of all partners</li>
<li><strong>Registered Office Proof:</strong> Utility bill (electricity/water/gas) + NOC from owner for Kolkata address</li>
<li><strong>Rent Agreement:</strong> If registered office is rented property in Kolkata</li>
</ul>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Kolkata-Specific Tip:</strong> Many Salt Lake and New Town startups register LLPs from residential addresses - legally permitted. Ensure utility bill matches exact address format (flat number, building name, pin code). Mismatched documents cause CRC queries. Patron's CA verifies every document before filing.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Name Rejection by CRC</td><td>Names similar to existing companies/LLPs/trademarks rejected</td><td>Patron runs pre-filing search on MCA + TMR to minimise rejection</td></tr>
<tr><td>Registered Office Address Issues</td><td>Incorrect pin codes, missing flat numbers, mismatched utility bills</td><td>CA verifies every address document before FiLLiP filing</td></tr>
<tr><td>LLP Agreement Stamp Duty Confusion</td><td>WB stamp duty varies by contribution amount</td><td>Patron calculates exact WB stamp duty and ensures proper stamping</td></tr>
<tr><td>DPIN/DIN Duplication</td><td>Partners with existing DIN cause CRC delays</td><td>CA verifies DIN records on MCA portal before filing</td></tr>
<tr><td>Post-Incorporation Compliance Missed</td><td>Form 8 (Oct 30) and Form 11 (May 30) missed = Rs 100/day penalty no cap</td><td>Patron includes compliance calendar with auto-reminders from Day 1</td></tr>

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
            <h2 class="section-title">LLP Registration Fees in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>RUN-LLP (Name Reservation)</td><td>Rs 200 MCA fee | Up to 2 name options</td></tr>
<tr><td>DSC (2 Partners)</td><td>Rs 1,600-3,000 | Rs 800-1,500 per partner</td></tr>
<tr><td>FiLLiP Filing (MCA Fee)</td><td>Rs 500-5,000 | Rs 500 for contribution up to Rs 1 lakh</td></tr>
<tr><td>Form 3 Filing (LLP Agreement)</td><td>Rs 500-5,000 MCA fee | Based on contribution amount</td></tr>
<tr><td>Stamp Duty (West Bengal)</td><td>Rs 500-2,000 | On LLP Agreement per WB rates</td></tr>
<tr><td>PAN and TAN</td><td>Rs 131 | Allotted with COI (Rs 66 each)</td></tr>
<tr><td>Professional Fee (Patron CA)</td><td>Rs 4,000-8,000 | Drafting, filing, verification, post-incorp advisory</td></tr>
<tr><td>Total Estimated Cost</td><td>Rs 7,499-20,000+ | Varies by capital and partner count</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free LLP Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20registration%20in%20Kolkata.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>DSC Issuance (2 Partners)</td><td>Day 1-2 (electronic, no physical visit)</td></tr>
<tr><td>RUN-LLP Name Reservation</td><td>Day 2-4 (CRC processes in 2-3 days)</td></tr>
<tr><td>FiLLiP Form Filing</td><td>Day 4-5 (filed after name approval)</td></tr>
<tr><td>CRC Processing + COI</td><td>Day 5-12 (5-7 working days, PAN/TAN allotted)</td></tr>
<tr><td>LLP Agreement + Form 3</td><td>Day 12-15 (must file within 30 days of COI)</td></tr>
<tr><td>Bank Account + GST</td><td>Day 15-20 (using COI + PAN + Agreement)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Kolkata Processing Note:</strong> Entire LLP registration is 100% online through MCA portal. No physical visit to RoC Kolkata Nizam Palace or any government office. Patron handles all filings, CRC queries, and post-incorporation setup remotely.</p>

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
            <h2 class="section-title">Why Choose Patron for LLP in Kolkata?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>CA-Managed, Not Template-Based</h3><p>Custom LLP Agreement drafted by CA for your Kolkata business. Not a generic template. Stamped per WB rates. Post-incorporation compliance included.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>RoC Kolkata Expertise</h3><p>Experienced with Nizam Palace filing procedures, WB stamp duty, CRC query resolution. Local compliance, national platform.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-state LLPs with partners across cities get coordinated registration.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>All-Inclusive from Rs 7,499</h3><p>DSC, name, FiLLiP, Agreement, stamp duty, PAN, TAN, and post-incorporation advisory. No hidden charges. No add-on pricing.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Kolkata Entrepreneurs</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;color:var(--text-primary);margin-bottom:8px;">"Patron registered our IT consulting LLP from Salt Lake in 12 days. Custom Agreement with detailed profit-sharing. GST registration done same week. Now they manage our annual compliance too."</p><p style="font-weight:700;color:var(--blue);margin:0;">- IT Consultancy, Salt Lake Sector V</p></blockquote>
<p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Kolkata through a digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP vs Pvt Ltd vs Partnership Firm</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>LLP</th><th>Pvt Ltd Company</th><th>Partnership Firm</th></tr></thead>
                    <tbody>
                        <tr><td>Liability</td><td>Limited to contribution</td><td>Limited to share capital</td><td>Unlimited - personal assets at risk</td></tr>
<tr><td>Legal Entity</td><td>Separate legal entity</td><td>Separate legal entity</td><td>Not separate from partners</td></tr>
<tr><td>Minimum Members</td><td>2 partners</td><td>2 directors + 2 shareholders</td><td>2 partners</td></tr>
<tr><td>Capital Requirement</td><td>No minimum</td><td>No minimum (stamp duty on authorised capital)</td><td>No minimum</td></tr>
<tr><td>Compliance Burden</td><td>Low - Form 8, 11, ITR-5 annually</td><td>High - AGM, board meetings, auditor, annual return</td><td>Very low - ITR only</td></tr>
<tr><td>Audit Requirement</td><td>Optional (below Rs 40L turnover / Rs 25L contribution)</td><td>Mandatory</td><td>Not applicable</td></tr>
<tr><td>Best For</td><td>Professionals, consultants, small ventures</td><td>Funded startups, larger businesses</td><td>Very small businesses (not recommended)</td></tr>

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
                
                <ul>
<li><a href="/llp-incorporation">LLP Registration in India</a> - National LLP services</li>
<li><a href="/gst-registration/kolkata">GST Registration in Kolkata</a> - Post-incorporation GST</li>
<li><a href="/private-limited-company-registration/kolkata">Pvt Ltd Registration in Kolkata</a> - Company formation</li>
<li><a href="/trademark-registration/kolkata">Trademark Registration in Kolkata</a> - Brand protection</li>
<li><a href="/accounting-services">Accounting Services</a> - Bookkeeping</li>
<li><a href="/startup-registration">Startup Registration</a> - DPIIT recognition</li>
</ul>

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
                
                <ul>
<li>LLP Act, 2008 (Sections 3, 7, 11, 23, 34, 35)</li>
<li>RoC Kolkata - Nizam Palace, 234/4 AJC Bose Road, Kolkata 700020</li>
<li>CRC (Central Registration Centre) for incorporation</li>
<li>MCA Portal: mca.gov.in | LLP Forms: llp.mca.gov.in</li>
<li>Key Forms: RUN-LLP, FiLLiP, Form 3, Form 8 (Oct 30), Form 11 (May 30)</li>
<li>WB Stamp Duty on LLP Agreement per Indian Stamp Act</li>
<li>Audit only if turnover > Rs 40L or contribution > Rs 25L</li>
</ul>
<p><strong>Penalties:</strong> Late Form 8/11: Rs 100/day/form (no cap) | Non-filing 2 years: struck off (Section 75) | Late Form 3: up to Rs 5 lakh (Section 23(4))</p>
<p><strong>Authority:</strong> <a href="https://mca.gov.in" target="_blank" rel="noopener">MCA</a> | RoC Kolkata | <a href="https://wbregistration.gov.in" target="_blank" rel="noopener">WB Registration (e-stamping)</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - LLP Registration in Kolkata</h2>
                    <p class="faq-expanded__lead">Common questions about LLP incorporation, RoC Kolkata, fees, timeline, NRI partners, and annual compliances.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'LLP Registration',
                        'city'     => 'Kolkata',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which RoC handles LLP registration in Kolkata?</h3>
                        <div class="faq-expanded__a"><p>RoC Kolkata at Nizam Palace, 234/4 AJC Bose Road. Incorporation processed by CRC online. Patron files all forms through MCA portal mapped to RoC Kolkata jurisdiction.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can LLP be registered online from Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Yes, 100% online through MCA portal. CA handles DSC, name, FiLLiP, LLP Agreement, and post-incorporation compliance. No physical visit to any office.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is LLP registration fee in Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Starting Rs 7,499 all-inclusive. Covers DSC, name (Rs 200), FiLLiP (Rs 500), LLP Agreement, WB stamp duty, PAN/TAN, and CA professional fee. Varies by capital and partner count.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does LLP registration take?</h3>
                        <div class="faq-expanded__a"><p>10-15 working days. DSC 1-2 days, name 2-3 days, CRC processing 5-7 days, LLP Agreement 2-3 days. Depends on MCA speed and document completeness.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can I use home address for LLP in Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Yes, residential address permitted. Utility bill matching exact address format and NOC from owner required. Salt Lake and New Town startups commonly register from home.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is minimum capital needed for LLP?</h3>
                        <div class="faq-expanded__a"><p>No minimum. Even Rs 1,000 per partner is sufficient. MCA fee Rs 500 for contribution up to Rs 1 lakh. Partners must make some contribution (monetary or in kind).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can NRI become LLP partner?</h3>
                        <div class="faq-expanded__a"><p>Yes. NRIs and foreign nationals can be partners. But at least one designated partner must be Indian resident (120+ days in India preceding FY). Passport notarised and apostilled.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What are annual LLP compliances?</h3>
                        <div class="faq-expanded__a"><p>Form 8 (Statement of Account) by October 30. Form 11 (Annual Return) by May 30. ITR-5 by July 31. Audit only if turnover > Rs 40L or contribution > Rs 25L. Late fee Rs 100/day no cap.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>LLP kya hota hai?</strong> Limited Liability Partnership - sabhi partners ki liability contribution tak limited. LLP Act, 2008 ke under registered. Separate legal entity.</p>
<p><strong>Kolkata mein LLP kaise register karein?</strong> Patron se call karein +91 945 945 6700. CA DSC, name, FiLLiP, Agreement sab handle karta hai. 100% online.</p>
<p><strong>Kitna time lagta hai?</strong> 10-15 working days. DSC 1-2 din, name 2-3 din, CRC 5-7 din.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Wait - Register Your LLP Today</h2>
            <div class="content-text">
                
                <p>LLP Agreement (Form 3) must be filed within 30 days of COI - penalty up to Rs 5 lakh if late. Annual returns carry Rs 100/day/form penalty with no cap. Non-filing for 2 years = struck off. Starting early ensures all deadlines are met and your Kolkata LLP begins with zero compliance gaps.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with LLP Registration in Kolkata</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">LLP registration in Kolkata provides a separate legal entity with limited liability under the LLP Act, 2008. The entire process is online through MCA, processed by CRC, and registered under RoC Kolkata at Nizam Palace.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Kolkata businesses across Salt Lake, New Town, Dalhousie, Burrabazar, and Taratala benefit from LLP for professional practices, IT consultancies, trading partnerships, and export ventures.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20registration%20in%20Kolkata.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20LLP%20Registration&body=Hello%20Patron%20Team%2C%0AI%20need%20LLP%20registration%20in%20Kolkata.%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">LLP Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">CA-assisted LLP registration in 8 cities. Select your city.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/llp-incorporation/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/llp-incorporation/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/llp-incorporation/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
<a href="/llp-incorporation/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="/llp-incorporation/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
<a href="/llp-incorporation/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
<a href="/llp-incorporation/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services in Kolkata</div><div class="pa-block-sub">End-to-end business registration and compliance</div><div class="pa-cross-grid"><a href="/gst-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/private-limited-company-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/trademark-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/income-tax-return/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/payroll-services/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Kolkata</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content covers LLP registration in Kolkata including LLP Act 2008, RoC Kolkata Nizam Palace, FiLLiP, LLP Agreement, WB stamp duty, and annual compliance. Reviewed semi-annually. Freshness Tier 2.</p>
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
