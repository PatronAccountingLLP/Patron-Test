
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>POSH Compliance in Mumbai - ICC Formation & Training</title>
    <meta name="description" content="POSH compliance service in Mumbai. IC constitution, POSH policy, employee training, annual report, Board Report disclosures. POSH Act 2013. CA-led. Call +91 945 945 6700.">
    <link rel="canonical" href="/posh-compliance-services/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="POSH Compliance in Mumbai - ICC Formation & Training">
    <meta property="og:description" content="POSH compliance service in Mumbai. IC constitution, POSH policy, employee training, annual report, Board Report disclosures. POSH Act 2013. CA-led. Call +91 945 945 6700.">
    <meta property="og:url" content="/posh-compliance-services/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="POSH Compliance in Mumbai - ICC Formation & Training">
    <meta name="twitter:description" content="POSH compliance service in Mumbai. IC constitution, POSH policy, employee training, annual report, Board Report disclosures. POSH Act 2013. CA-led. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "POSH Compliance in Mumbai - ICC Formation & Training",
      "description": "POSH compliance service in Mumbai. IC constitution, POSH policy, employee training, annual report, Board Report disclosures. POSH Act 2013. CA-led. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/posh-compliance-services/mumbai",
      "serviceType": "POSH Compliance in Mumbai - ICC Formation & Training",
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
        "url": "https://www.patronaccounting.com/posh-compliance-services/mumbai",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "50000",
          "maxPrice": "300000",
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
          "name": "POSH Compliance Services - ICC Formation, Policy & Training",
          "item": "https://www.patronaccounting.com/posh-compliance-services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "POSH Compliance in Mumbai - ICC Formation & Training",
          "item": "https://www.patronaccounting.com/posh-compliance-services/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is POSH compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "POSH compliance is the complete set of employer obligations under the Sexual Harassment of Women at Workplace Act 2013. Requires every workplace with 10 or more employees to constitute Internal Committee, draft and disseminate POSH policy, conduct employee awareness training, provide IC member training, display penal consequences, treat sexual harassment as misconduct, file annual reports to District Officer, and from 2025 include detailed POSH disclosures in Board Report. Non-compliance fine up to Rs 50,000 first offence Rs 1,00,000 repeat and licence cancellation."
          }
        },
        {
          "@type": "Question",
          "name": "Which organisations must comply with the POSH Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Every workplace with 10 or more employees without any exception for sector size or ownership type. Includes private companies LLPs partnerships proprietorships startups MNCs government offices NGOs hospitals schools colleges restaurants hotels factories construction sites film production retail stores BPOs banks and co-working spaces. In Mumbai every corporate office in BKC every IT company in Powai every factory in Thane-Belapur every restaurant with 10 plus staff every hospital and school must comply."
          }
        },
        {
          "@type": "Question",
          "name": "How to constitute an Internal Committee?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IC composition per Section 4: Presiding Officer must be senior-level woman employee at that workplace. At least 2 employee members preferably committed to women cause or with social work legal experience. One external member from NGO or person familiar with sexual harassment issues. At least 50 percent of total members must be women. Maximum 3-year tenure. Separate IC at each office or branch with 10 plus employees. Patron helps identify members and provides external members from its panel."
          }
        },
        {
          "@type": "Question",
          "name": "What are the employer duties under the POSH Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 19 lists comprehensive duties: provide safe working environment, display penal consequences at conspicuous places, organise workshops and awareness programmes regularly, provide necessary facilities to IC, assist in securing attendance of respondent and witnesses, treat sexual harassment as misconduct under service rules, monitor timely IC report submission, file annual report to District Officer. From 2025 include detailed POSH disclosures in Board Report. Listed companies additional SEBI LODR disclosure."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for POSH non-compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 26 first offence fine up to Rs 50,000. Repeat offence fine up to Rs 1,00,000 PLUS court may order cancellation or non-renewal of licence or registration. 2025 Board Report Amendment adds up to Rs 3,00,000 penalty for non-disclosure in Directors Report. SEBI can impose additional penalties on listed companies. Beyond legal penalties reputational damage through public Board Report disclosures, employee attrition, hiring difficulty, investor concerns, and civil liability if harassment occurs without IC."
          }
        },
        {
          "@type": "Question",
          "name": "Does the POSH Act apply to remote and WFH employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Workplace definition under POSH Act is broad including any place visited by employee during course of employment. Post-pandemic with Mumbai IT sector widely adopting hybrid and remote work the workplace extends to home offices, virtual meetings on Zoom Teams and Google Meet, messaging platforms like Slack WhatsApp and email, and any digital interaction during employment. Harassment via text inappropriate video call comments or sharing inappropriate content on work platforms all fall within scope. Patron drafts policies covering digital and remote harassment."
          }
        }
      ]
    }
  ]
}</script>
@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
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
                        POSH Compliance Service in Mumbai: IC Constitution, Policy Drafting, Employee Training, Inquiry Support, and Annual Reporting Under the POSH Act 2013
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applies To:</span> EVERY workplace with 10+ employees - corporates, startups, factories, restaurants, hospitals, schools, NGOs. No sector exemption</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>IC Composition:</span> Presiding Officer (senior woman) + 2 employee members + 1 external member (NGO/legal). 50% women. 3-year tenure. Separate IC per office</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Key Obligations:</span> IC constitution | POSH policy | Employee training | IC member training | Annual report to District Officer | Board Report disclosures (2025)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> Rs 50,000 first offence | Rs 1,00,000 repeat + licence cancellation | Rs 3,00,000 Board Report non-disclosure</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=POSH%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20POSH%20compliance.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20POSH%20compliance%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'POSH Compliance',
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
    'ctaText'    => 'From BKC corporates to Powai startups to Thane factories to Goregaon film production - Mumbai\'s employers trust Patron for POSH compliance.',
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
            <a href="#comparison-section" class="toc-btn">Checklist</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">POSH Compliance Service in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - POSH Compliance Services at a Glance</strong></p>
                    <p>POSH Act 2013 = EVERY workplace with 10+ employees must: constitute IC (Presiding Officer + 2 employees + 1 external; 50% women; 3-year tenure; separate per office), draft policy, train employees, file annual report to District Officer, and (from 2025) disclose in Board Report. Penalty: Rs 50,000 first, Rs 1,00,000 repeat + licence cancellation. Mumbai = India's largest corporate workforce. BKC has 100+ MNC offices. 80,000+ restaurants. All must comply.</p>
                </div>
                <p>Mumbai's POSH landscape is uniquely complex - India's largest corporate workforce, IT corridor, entertainment industry under scrutiny, 80,000+ restaurants, and the 2025 Board Report Amendment making compliance publicly visible. Learn more about <a href="/posh-compliance-services">POSH compliance across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>POSH Act 2013 + SH Rules 2013 + Companies (Accounts) Second Amendment Rules 2025 + SEBI LODR</td></tr>
                        <tr><td>Applicability</td><td>Every workplace with 10+ employees - private, public, startup, factory, restaurant, hospital, school</td></tr>
                        <tr><td>IC Composition</td><td>Presiding Officer (senior woman) + 2 employee members + 1 external. 50% women. 3-year tenure</td></tr>
                        <tr><td>Inquiry</td><td>Complaint: 3 months. Inquiry: 90 days. Employer action: 60 days. IC has civil court powers</td></tr>
                        <tr><td>Annual Report</td><td>Rule 14: filed with District Officer Mumbai. Complaint stats for each calendar year</td></tr>
                        <tr><td>2025 Board Report</td><td>Complaints received/resolved/pending >90 days + gender composition. Rs 3,00,000 non-disclosure penalty</td></tr>
                        <tr><td>Penalties</td><td>Rs 50,000 first | Rs 1,00,000 repeat + licence cancellation | Rs 3,00,000 Board Report</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>POSH integrates with broader employer compliance. Patron combines with <a href="#">company registration</a>, <a href="/payroll-services/mumbai">payroll services</a>, <a href="/esic-registration/mumbai">ESIC</a>, <a href="#">EPF</a>, and <a href="#">Professional Tax</a>.</p>
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
                <h2 class="section-title">What Is POSH Compliance?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>POSH compliance is the complete set of employer obligations under the Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act 2013 - ensuring a safe, harassment-free workplace through prevention (policy + training), prohibition (IC + procedures), and redressal (inquiry + action).</p>
                    <p>'Workplace' is broadly defined: office, client sites, travel, WFH, digital platforms. 'Employee' includes ALL categories: permanent, contract, temporary, intern, daily-wage. Sexual harassment includes physical, verbal, non-verbal, and digital conduct.</p>
                    <p>Compliance is NOT optional. 10+ employees = mandatory. A Mumbai startup with 10 has the same obligations as a BKC MNC with 10,000. Learn more at <a href="/posh-compliance-services">our national POSH practice</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for POSH Compliance:</strong></p>
                    <ul>
                        <li><strong>10-Employee Trigger:</strong> EVERY workplace with 10+ employees. No sector exemption. Startups, restaurants, factories, hospitals - all covered.</li>
                        <li><strong>IC = Internal Committee:</strong> Presiding Officer (senior woman) + 2 employees + 1 external. 50% women. 3-year tenure. SEPARATE IC per office with 10+.</li>
                        <li><strong>2025 Board Report:</strong> Complaint stats + pending >90 days + gender composition now in Directors' Report. Public visibility. Rs 3,00,000 penalty.</li>
                        <li><strong>90-Day Inquiry:</strong> Complaint within 3 months. Inquiry completed in 90 days. Employer acts within 60 days. IC has civil court powers.</li>
                        <li><strong>Digital/Remote Coverage:</strong> WFH, video calls, messaging apps, emails - all within POSH scope. Critical for Mumbai's post-pandemic IT sector.</li>
                        <li><strong>Rs 50,000/1,00,000 Penalty:</strong> First offence. Repeat + licence cancellation. Beyond fines: reputational damage now public via Board Report.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">POSH Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Workplace</span>
                        <strong>POSH Safe</strong>
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
            <h2 class="section-title">Who Needs POSH Compliance in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Corporates (BKC, Nariman Point, Lower Parel, Worli):</strong> Banks, MNCs, consulting firms. 100s of employees, multiple offices. Separate IC per location. <a href="#">Company registration</a> with compliance.</p>
                <p><strong>IT/BPO (Powai, Andheri, Malad):</strong> Mixed-gender workforces. Client contracts mandate POSH certification. Remote/WFH harassment policy critical. <a href="/payroll-services/mumbai">Payroll services</a> integration.</p>
                <p><strong>Manufacturing (Thane-Belapur, Andheri MIDC):</strong> Shop floor + office staff both covered. Blue-collar and white-collar POSH. <a href="/esic-registration/mumbai">ESIC</a> + <a href="#">EPF</a> integrated.</p>
                <p><strong>Restaurants, Film, Healthcare, Education:</strong> 80,000+ restaurants with 10+ staff. Goregaon Film City under scrutiny. Hospitals with large female workforce. Schools with student protection. <a href="#">Professional Tax</a>.</p>
                <p><strong>Startups (Powai, BKC):</strong> Crossed 10 employees without realising POSH applies. 'We're a family' culture doesn't exempt from law. IC must be constituted NOW.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">POSH Compliance Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>IC Constitution Advisory</td><td>Presiding Officer identification, employee member selection, external member from Patron panel. 50% women, 3-year tenure. Multi-location: separate IC per office with 10+. BKC + Powai + Andheri = 3 ICs</td></tr>
                        <tr><td>POSH Policy Drafting</td><td>Customised to industry and work environment. Physical + digital harassment. Complaint procedure, inquiry process, confidentiality, non-retaliation. Remote/WFH coverage for IT sector</td></tr>
                        <tr><td>Employee Awareness Training</td><td>All employees including contract/temporary/intern. English/Hindi/Marathi. In-person + virtual. Manager/supervisor specific training. Attendance records and completion certificates</td></tr>
                        <tr><td>IC Member Certification Training</td><td>Legal provisions, complaint handling, conciliation, inquiry procedure, report writing, confidentiality. Case studies and role-play. Annual refresher training scheduled</td></tr>
                        <tr><td>Complaint Handling and Inquiry Support</td><td>Complaint registration, conciliation (S.10), inquiry management (S.11), 90-day timeline monitoring, evidence management, report drafting, recommendations. Procedurally sound and legally defensible</td></tr>
                        <tr><td>Annual Report Filing (Rule 14)</td><td>Report to District Officer Mumbai for each calendar year. Complaint stats: received, resolved, pending. Nature of action taken. Patron prepares and coordinates filing</td></tr>
                        <tr><td>Board Report Disclosures (2025)</td><td>Companies (Accounts) Second Amendment Rules 2025: complaints received/resolved/pending >90 days, gender composition (female/male/transgender). Data collection framework + disclosure text. Rs 3,00,000 penalty for non-disclosure</td></tr>
                        <tr><td>Integrated Employer Compliance</td><td>POSH + <a href="/esic-registration/mumbai">ESIC</a> + <a href="#">EPF</a> + <a href="#">PT</a> + <a href="/payroll-services/mumbai">payroll</a>. POSH integrated with HR policies and service rules. Not in a silo</td></tr>

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
            <h2 class="section-title">How POSH Compliance Works in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 7-step process covers complete POSH compliance - from compliance audit through IC constitution, policy drafting, employee training, workplace display, annual reporting, to ongoing compliance management.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Compliance Audit</h3>
        <p class="step-description">Patron audits current POSH status: IC constituted? Composition correct (50% women, external member)? Policy in place? Training conducted and documented? Annual reports filed? Board Report disclosures done? Gaps identified with action plan. Walk-in at Marine Lines.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IC status checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Policy reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Training records audited</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AUDIT</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">IC? Policy?</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Training? Reports?</text></svg></div>
            <span class="illustration-label">Gaps Identified</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">IC Constitution</h3>
        <p class="step-description">Identify Presiding Officer (senior woman employee), select 2+ employee members, source external member from Patron's POSH-certified panel. Issue constitution order. Multi-location: separate IC at each office with 10+ employees. BKC + Powai + Andheri = 3 separate ICs.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PO appointed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>External member provided</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Multi-location ICs set</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">IC CONSTITUTE</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">PO + 2 Emp + 1 Ext</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">50% Women</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">3-Year Tenure</text></svg></div>
            <span class="illustration-label">IC Constituted</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">POSH Policy Drafting</h3>
        <p class="step-description">Customised anti-sexual harassment policy: definition of harassment (physical + digital), scope (office + WFH + travel + digital platforms), complaint procedure, inquiry process, interim measures, disciplinary framework, false complaint provisions, confidentiality, non-retaliation. Widely disseminated.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Policy drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Digital coverage included</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All employees notified</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">POLICY</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Physical + Digital</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Customised</text></svg></div>
            <span class="illustration-label">Policy Active</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Employee and IC Training</h3>
        <p class="step-description">All-employee awareness sessions (what is harassment, how to report, IC contacts). Manager/supervisor training (recognising, responding). IC member certification (legal provisions, inquiry procedure, case studies). English/Hindi/Marathi. In-person + virtual. Documented.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All employees trained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IC members certified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Attendance documented</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TRAIN</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">All Employees</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">IC Members</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Eng/Hindi/Marathi</text></svg></div>
            <span class="illustration-label">Team Trained</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Workplace Display</h3>
        <p class="step-description">Penal consequences of sexual harassment displayed at conspicuous places: reception, canteen, notice boards, digital screens. IC member names and contact details displayed. Complaint submission process visible to all employees.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Posters displayed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IC contacts visible</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Process accessible</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DISPLAY</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Penal Consequences</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">IC Contact Info</text></svg></div>
            <span class="illustration-label">Workplace Ready</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Annual Report and Board Report</h3>
        <p class="step-description">Annual report to District Officer Mumbai (Rule 14): complaint stats for calendar year. Board Report disclosures (2025 Amendment): complaints received/resolved/pending >90 days + gender composition. SEBI LODR for listed companies. Patron prepares all documents.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 14 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board Report text ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SEBI LODR compliant</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REPORT</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Rule 14 Annual</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Board Report 2025</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">SEBI LODR</text></svg></div>
            <span class="illustration-label">Reports Filed</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Ongoing Compliance Management</h3>
        <p class="step-description">Annual training refresh for all employees and new joiners. IC tenure monitoring (3-year reconstitution). Complaint handling support as needed. Annual report filing. Board Report text update. Policy review and updation for legal changes. Continuous obligation.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual refresh done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IC tenure tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Policy kept current</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">COMPLIANT</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Ongoing</text></svg></div>
            <span class="illustration-label">Continuously Compliant</span>
            <span class="step-number-large">07</span>
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
            <h2 class="section-title">Documents Required for POSH Compliance</h2>
            <div class="content-text">
                
                <ul><li><strong>Employee List:</strong> All categories (permanent, contract, temporary, intern, daily-wage) per location to verify 10+ threshold.</li><li><strong>Organisation Structure:</strong> Org chart to identify senior woman employee for Presiding Officer.</li><li><strong>Office/Branch List:</strong> All locations requiring separate ICs (each with 10+ employees).</li><li><strong>Existing POSH Policy:</strong> For gap analysis against Act requirements (Patron reviews and updates or drafts fresh).</li><li><strong>Previous IC Orders:</strong> Verify composition, tenure, external member compliance.</li><li><strong>Previous Annual Reports:</strong> Verify past Rule 14 filing compliance.</li><li><strong>Previous Board Reports:</strong> Verify POSH disclosure compliance (2025 Amendment: detailed disclosure required from FY 2025-26).</li><li><strong>Training Records:</strong> Attendance records, session details, completion certificates.</li><li><strong>Service Rules / HR Policy:</strong> To integrate sexual harassment as misconduct (S.19(g)).</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>2025 Board Report NOW Public:</strong> Every company's Directors' Report must disclose complaint statistics and gender composition. Shareholders, investors, auditors, and the public can see whether you're compliant. Non-disclosure penalty: up to Rs 3,00,000. This makes POSH non-compliance visible beyond just regulatory risk - it's now a transparency and governance issue.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common POSH Compliance Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-Location IC</td><td>BKC + Powai + Andheri + Thane offices. Each with 10+ employees needs SEPARATE IC. One head office IC doesn't cover branches</td><td>IC constituted at every location. Coordinated policy, training, and reporting. Multi-location management as single engagement</td></tr>
                        <tr><td>External Member Not Found</td><td>IC requires 1 external member from NGO or legal expert. Many companies skip this. IC without external member is improperly constituted and inquiries legally challengeable</td><td>Patron provides qualified external members from POSH-certified panel. Immediate availability. Compliant IC composition</td></tr>
                        <tr><td>Startups Unaware</td><td>Powai/BKC startups cross 10 employees without realising POSH obligations triggered. 'We're a family' doesn't exempt from law</td><td>POSH applicability proactively assessed for all client companies. IC constituted immediately upon crossing 10 threshold</td></tr>
                        <tr><td>Training Not Documented</td><td>One session at inception, never repeated. New joiners untrained. IC members lack specialised training. No attendance records</td><td>Annual training with full documentation. New joiner sessions. IC member certification with case studies. Records maintained for annual report</td></tr>
                        <tr><td>2025 Board Report Not Prepared</td><td>Expanded POSH disclosures caught companies off-guard. Complaint tracking, 90-day monitoring, gender headcount not systematically collected</td><td>Data collection framework established. Complaint tracking system. Gender headcount process. Disclosure text prepared for Board Report. Rs 3,00,000 penalty prevented</td></tr>

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
            <h2 class="section-title">POSH Compliance Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>IC Constitution + Policy Drafting</td><td>Rs 15,000 - Rs 40,000 (single location)</td></tr>
                        <tr><td>Multi-Location IC Setup</td><td>Rs 10,000 - Rs 25,000 per additional location</td></tr>
                        <tr><td>Employee Awareness Training</td><td>Rs 15,000 - Rs 40,000 per session</td></tr>
                        <tr><td>IC Member Certification Training</td><td>Rs 20,000 - Rs 50,000</td></tr>
                        <tr><td>External Member Retainer</td><td>Rs 10,000 - Rs 25,000/year</td></tr>
                        <tr><td>Annual Report + Board Report</td><td>Rs 10,000 - Rs 30,000</td></tr>
                        <tr><td>Comprehensive Annual Package</td><td>Rs 50,000 - Rs 1,50,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free POSH Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20POSH%20compliance%20service%20in%20Mumbai.%20Please%20share%20pricing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">POSH Compliance Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Compliance Audit</td><td>1-2 days</td></tr>
                        <tr><td>IC Constitution</td><td>3-7 days</td></tr>
                        <tr><td>Policy Drafting</td><td>5-10 days</td></tr>
                        <tr><td>Employee Training</td><td>1-3 days per session</td></tr>
                        <tr><td>IC Member Training</td><td>1-2 days</td></tr>
                        <tr><td>Workplace Display Setup</td><td>1-2 days</td></tr>
                        <tr><td>Total Initial Setup</td><td>2-4 weeks</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Walk-in at Patron's Marine Lines, Mumbai office. Annual report filed with District Officer Mumbai. Multi-location IC setup for companies across BKC/Powai/Andheri/Thane/Lower Parel. The 2025 Board Report Amendment has made non-compliance publicly visible - every Directors' Report must now disclose POSH statistics. Complete POSH setup in 2-4 weeks. Ongoing compliance is annual: training refresh, IC reconstitution (3-year), reports, Board Report text.</p>

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
            <h2 class="section-title">Why Choose Patron for POSH Compliance in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Complete POSH Lifecycle</h3><p>IC constitution (+ external member from our panel), policy, employee training, IC training, annual report, Board Report (2025), inquiry support, and IC tenure management. Not just IC and policy.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Multi-Location Expertise</h3><p>Separate ICs across BKC, Powai, Andheri, Lower Parel, Thane. Consistent policy, location-specific training, centralised reporting. Mumbai companies with 3-10+ offices served.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>2025 Board Report Ready</h3><p>Data collection framework, complaint tracking, 90-day monitoring, gender headcount, disclosure text for Directors' Report. Rs 3,00,000 penalty prevented. Already integrated.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Integrated Employer Compliance</h3><p>POSH + <a href="/esic-registration/mumbai">ESIC</a> + <a href="#">EPF</a> + <a href="#">PT</a> + <a href="/payroll-services/mumbai">payroll</a>. Not in a silo. 10,000+ businesses, 4.9 rating.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Employers Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Four offices: Pune, Mumbai, Delhi, Gurugram. Serving corporates, IT companies, manufacturers, restaurants, film production, healthcare, education, and startups across Mumbai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">POSH Compliance Checklist</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Obligation</th><th>Section/Rule</th><th>Penalty for Non-Compliance</th></tr></thead>
                    <tbody>
                        <tr><td>IC constituted at each location 10+</td><td>S.4</td><td>Rs 50,000 first; Rs 1,00,000 repeat; licence cancellation</td></tr>
                        <tr><td>POSH policy drafted and disseminated</td><td>S.19 + Rule 13</td><td>S.26 penalty</td></tr>
                        <tr><td>Employee awareness training</td><td>S.19(c)</td><td>S.26 penalty</td></tr>
                        <tr><td>IC member training</td><td>S.19(d)</td><td>Inquiry procedural risk</td></tr>
                        <tr><td>Penal consequences displayed</td><td>S.19(b)</td><td>S.26 penalty</td></tr>
                        <tr><td>Annual report to District Officer</td><td>Rule 14</td><td>S.26 penalty</td></tr>
                        <tr><td>Board Report POSH disclosure</td><td>Companies Rules 2025</td><td>Up to Rs 3,00,000</td></tr>

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
            <h2 class="section-title">Related Services for Mumbai Employers</h2>
            <div class="content-text">
                
                <p>Mumbai employers managing POSH compliance often need:</p>
                <ul><li><a href="/posh-compliance-services">POSH Compliance (India)</a> - National overview.</li>
                    <li><a href="#">Company Registration in Mumbai</a> - Business entity.</li>
                    <li><a href="/payroll-services/mumbai">Payroll Services in Mumbai</a> - Complete payroll.</li>
                    <li><a href="/esic-registration/mumbai">ESIC Registration in Mumbai</a> - Employee insurance.</li>
                    <li><a href="#">EPF Registration in Mumbai</a> - Provident fund.</li>
                    <li><a href="#">Professional Tax in Mumbai</a> - Maharashtra PT.</li>
                    <li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a> - Tax compliance.</li>
                    <li><a href="/trademark-registration/mumbai">Trademark Registration in Mumbai</a> - Brand protection.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for POSH Compliance</h2>
            <div class="content-text">
                
                <p><strong>POSH Act 2013 - Section 4 (IC):</strong></p>
                <ul><li>Every employer 10+ employees shall constitute IC. PO + 2 employees + 1 external. 50% women. 3-year tenure. Separate per location.</li></ul>
                <p style="margin-top:16px;"><strong>Section 19 (Employer Duties):</strong></p>
                <ul><li>Safe workplace, display penalties, awareness programmes, IC facilities, misconduct in service rules, annual report monitoring.</li></ul>
                <p style="margin-top:16px;"><strong>Section 26 (Penalties):</strong></p>
                <ul><li>Rs 50,000 first. Rs 1,00,000 repeat + licence cancellation. Rs 3,00,000 Board Report non-disclosure (2025 Amendment).</li></ul>
                <p style="margin-top:16px;"><strong>2025 Board Report Amendment:</strong> Companies (Accounts) Second Amendment Rules 2025 (14 July 2025): complaint stats + pending >90 days + gender composition in Directors' Report.</p>
                <p style="margin-top:16px;"><strong>Portals:</strong> <a href="https://indiacode.nic.in" target="_blank" rel="noopener">India Code</a> | <a href="https://wcd.nic.in" target="_blank" rel="noopener">WCD</a> | <a href="https://mca.gov.in" target="_blank" rel="noopener">MCA</a> | <a href="https://sebi.gov.in" target="_blank" rel="noopener">SEBI</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: POSH Compliance in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about POSH compliance, who must comply, IC constitution, employer duties, penalties, 2025 Board Report requirements, and remote work coverage for Mumbai workplaces.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'POSH Compliance',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is POSH compliance?</h3>
                        <div class="faq-expanded__a"><p>POSH compliance is the complete set of employer obligations under the Sexual Harassment of Women at Workplace Act 2013. Requires every workplace with 10 or more employees to constitute Internal Committee, draft and disseminate POSH policy, conduct employee awareness training, provide IC member training, display penal consequences, treat sexual harassment as misconduct, file annual reports to District Officer, and from 2025 include detailed POSH disclosures in Board Report. Non-compliance fine up to Rs 50,000 first offence Rs 1,00,000 repeat and licence cancellation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which organisations must comply with the POSH Act?</h3>
                        <div class="faq-expanded__a"><p>Every workplace with 10 or more employees without any exception for sector size or ownership type. Includes private companies LLPs partnerships proprietorships startups MNCs government offices NGOs hospitals schools colleges restaurants hotels factories construction sites film production retail stores BPOs banks and co-working spaces. In Mumbai every corporate office in BKC every IT company in Powai every factory in Thane-Belapur every restaurant with 10 plus staff every hospital and school must comply.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How to constitute an Internal Committee?</h3>
                        <div class="faq-expanded__a"><p>IC composition per Section 4: Presiding Officer must be senior-level woman employee at that workplace. At least 2 employee members preferably committed to women cause or with social work legal experience. One external member from NGO or person familiar with sexual harassment issues. At least 50 percent of total members must be women. Maximum 3-year tenure. Separate IC at each office or branch with 10 plus employees. Patron helps identify members and provides external members from its panel.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are the employer duties under the POSH Act?</h3>
                        <div class="faq-expanded__a"><p>Section 19 lists comprehensive duties: provide safe working environment, display penal consequences at conspicuous places, organise workshops and awareness programmes regularly, provide necessary facilities to IC, assist in securing attendance of respondent and witnesses, treat sexual harassment as misconduct under service rules, monitor timely IC report submission, file annual report to District Officer. From 2025 include detailed POSH disclosures in Board Report. Listed companies additional SEBI LODR disclosure.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for POSH non-compliance?</h3>
                        <div class="faq-expanded__a"><p>Section 26 first offence fine up to Rs 50,000. Repeat offence fine up to Rs 1,00,000 PLUS court may order cancellation or non-renewal of licence or registration. 2025 Board Report Amendment adds up to Rs 3,00,000 penalty for non-disclosure in Directors Report. SEBI can impose additional penalties on listed companies. Beyond legal penalties reputational damage through public Board Report disclosures, employee attrition, hiring difficulty, investor concerns, and civil liability if harassment occurs without IC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Does the POSH Act apply to remote and WFH employees?</h3>
                        <div class="faq-expanded__a"><p>Yes. Workplace definition under POSH Act is broad including any place visited by employee during course of employment. Post-pandemic with Mumbai IT sector widely adopting hybrid and remote work the workplace extends to home offices, virtual meetings on Zoom Teams and Google Meet, messaging platforms like Slack WhatsApp and email, and any digital interaction during employment. Harassment via text inappropriate video call comments or sharing inappropriate content on work platforms all fall within scope. Patron drafts policies covering digital and remote harassment.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>POSH compliance kya hai?</strong> Har workplace jisme 10+ employees hain - unhe IC banana padta hai, policy banana padta hai, training deni padti hai, annual report file karna padta hai. 2025 se Board Report mein bhi POSH details likhni padti hain. Penalty: Rs 50,000 first, Rs 1,00,000 repeat + licence cancel. Mumbai mein har company ko comply karna padta hai.</p>
                <p><strong>IC mein kaun hona chahiye?</strong> Presiding Officer (senior woman), 2 employee members, 1 external member (NGO/legal). 50% women. 3 saal tenure. Agar company ke 3 offices hain toh TEENO mein alag IC. Patron external member bhi provide karta hai.</p>
                <p><strong>Remote/WFH employees pe POSH apply hota hai?</strong> HAAN. Workplace definition broad hai - home office, Zoom call, WhatsApp, email sab included. Inappropriate comment video call pe ya message pe = POSH scope mein. Policy mein digital harassment cover hona chahiye.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">2025 Board Report Has Made Non-Compliance PUBLIC</h2>
            <div class="content-text">
                
                <p>Every company's Directors' Report must now disclose POSH complaint statistics and gender composition. Shareholders, investors, auditors can see if you're compliant. No IC at your Mumbai office = violation visible to the world. Rs 50,000 first offence. Rs 1,00,000 + licence cancellation repeat. Rs 3,00,000 Board Report non-disclosure. If a complaint is filed with no IC = goes to District Officer, your non-compliance on government record. Act NOW.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20POSH%20compliance%20in%20Mumbai.%20Please%20share%20details." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Make Your Mumbai Workplace POSH Compliant</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">POSH compliance is mandatory for every Mumbai workplace with 10+ employees. The 2025 Board Report Amendment has elevated it from back-office compliance to public disclosure. IC constitution, policy, training, annual report, and Board Report disclosures are all required.</p>
                <p style="color:rgba(255,255,255,0.9);">Mumbai is India's largest corporate workforce: BKC (100+ MNC offices), Powai/Andheri IT (thousands of companies), 80,000+ restaurants, Film City, manufacturing, healthcare, education - all must comply. Separate IC at each office with 10+.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron delivers compliance audit, IC constitution (+ external member), policy drafting, employee and IC training, annual report, Board Report text, and inquiry support from Marine Lines. 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20POSH%20compliance%20service%20in%20Mumbai.%20Please%20share%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=POSH%20Compliance%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20POSH%20compliance%20service%20in%20Mumbai.%0A%0APlease%20share%20details.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">POSH Compliance Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides POSH compliance and employer compliance services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">POSH compliance and workplace safety</div>
                <div class="pa-city-grid">
                    <a href="/posh-compliance-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/posh-compliance-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/posh-compliance-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">End-to-end employer compliance</div>
                <div class="pa-cross-grid">
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/payroll-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/esic-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EPF Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Professional Tax</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
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
            <p>This page covers POSH compliance service in Mumbai. Content reviewed half-yearly (Freshness Tier 2) reflecting 2025 Board Report rules, SEBI updates, judicial developments, and MCA notifications.</p>
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
