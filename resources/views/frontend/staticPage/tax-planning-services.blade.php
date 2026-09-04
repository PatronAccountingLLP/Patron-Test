
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Tax Planning Services - Deductions, Exemptions & 80C India</title>
    <meta name="description" content="Expert CA-assisted tax planning for salaried employees, businesses, and professionals in India 2026. Covers 80C, NPS, HRA, and advance tax. From Rs. 2,499.">
    <link rel="canonical" href="/tax-planning-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Tax Planning Services - Deductions, Exemptions & 80C India">
    <meta property="og:description" content="Expert CA-assisted tax planning for salaried employees, businesses, and professionals in India 2026. Covers 80C, NPS, HRA, and advance tax. From Rs. 2,499.">
    <meta property="og:url" content="/tax-planning-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tax Planning Services - Deductions, Exemptions & 80C India">
    <meta name="twitter:description" content="Expert CA-assisted tax planning for salaried employees, businesses, and professionals in India 2026. Covers 80C, NPS, HRA, and advance tax. From Rs. 2,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Tax Planning India: Save Income Tax Legally",
          "description": "Expert CA-assisted tax planning for salaried employees, businesses, and professionals in India 2026. Covers 80C, NPS, HRA, and advance tax. From Rs. 2,499.",
          "url": "https://www.patronaccounting.com/tax-planning-services",
          "serviceType": "Tax Planning India: Save Income Tax Legally",
          "areaServed": {
            "@type": "Country",
            "name": "India"
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
            "url": "https://www.patronaccounting.com/tax-planning-services",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "20000",
              "maxPrice": "150000",
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
              "name": "Tax Planning India: Save Income Tax Legally",
              "item": "https://www.patronaccounting.com/tax-planning-services"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is tax planning and how is it different from tax evasion?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Tax planning is the legal process of using deductions, exemptions, and reliefs explicitly provided in the Income Tax Act to reduce your tax liability. Tax evasion is illegal concealment of income or falsification of records - a criminal offence. Tax avoidance (using artificial loopholes) can attract GAAR provisions under Sections 95-102."
              }
            },
            {
              "@type": "Question",
              "name": "Which is better - new tax regime or old tax regime in FY 2025-26?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "New regime is better with low deductions - income up to Rs. 12.75 lakh is effectively tax-free for salaried (after Rs. 75,000 standard deduction and Section 87A rebate). Old regime wins when you have substantial HRA, Section 24(b) home loan interest, 80C, and 80D. Break-even is approximately Rs. 3.75-4.5 lakh in total deductions for income around Rs. 15-20 lakh."
              }
            },
            {
              "@type": "Question",
              "name": "What is the maximum tax I can save under the old regime?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Total deductions of Rs. 5-10 lakh are achievable for high earners in metro cities: Section 80C Rs. 1.5 lakh, NPS under 80CCD(1B) Rs. 50,000, Section 80D Rs. 25,000 to Rs. 1 lakh, home loan interest Section 24(b) Rs. 2 lakh, and HRA exemption (variable, Rs. 2-6 lakh in metros). Combined, these significantly reduce the effective tax rate."
              }
            },
            {
              "@type": "Question",
              "name": "When should I start tax planning for FY 2025-26?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "April is the ideal time. Early planning allows you to inform your employer of the tax regime, start monthly ELSS SIPs under 80C rather than a March lump sum, schedule advance tax instalments correctly, and renegotiate CTC components like employer NPS contribution. Last-minute March planning leads to suboptimal investments and advance tax interest."
              }
            },
            {
              "@type": "Question",
              "name": "Can a business owner use the same tax planning strategies as a salaried employee?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Business owners (proprietors) can use Section 80C and Chapter VI-A deductions under the old regime like salaried employees. Additionally, they plan around legitimate expense deductions under Section 37, depreciation under Section 32, advance tax quarterly scheduling, and presumptive taxation under Section 44AD (up to Rs. 3 crore turnover)."
              }
            },
            {
              "@type": "Question",
              "name": "What is the tax planning benefit of NPS over other 80C instruments?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "NPS offers two deduction layers: self-contribution within Rs. 1.5 lakh 80C limit under 80CCD(1), plus an additional Rs. 50,000 under 80CCD(1B) exclusively for NPS - over and above the 80C cap. Total potential deduction: Rs. 2 lakh through NPS alone. For 30% slab, this translates to Rs. 60,000+ annual tax saving. Employer NPS under 80CCD(2) is also available under the new regime."
              }
            },
            {
              "@type": "Question",
              "name": "Is an HUF useful for tax planning even for a small family?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, an HUF can benefit even a family of two if they have ancestral or inherited property or investment income. The HUF gets its own basic exemption limit and 80C limit separate from the karta's individual income. Annual tax saving of Rs. 30,000 to Rs. 1,00,000+ depending on applicable slab. However, HUFs must have genuine HUF property and cannot split salary income. Quick Answers Q: Tax bachane ke tarike India mein kya hain? Section 80C (PPF, ELSS, LIC), 80D (health insurance), NPS, HRA exemption, home loan interest - yeh sab legal tarike hain tax bachane ke. Patron Accounting ka CA aapke numbers ke hisaab se personalised plan banata hai. Q: Purana ya naya tax regime kaun sa better hai? Agar aapke paas HRA + home loan + 80C + 80D total Rs. 3.75-4.5 lakh se zyada deductions hain to purana regime better hai. Nahi to naya regime mein Rs. 12.75 lakh tak zero tax hai. Q: Salary pe tax kaise bachaye 2026? Step 1: Regime comparison karein. Step 2: Employer se NPS contribution badhwayein. Step 3: ELSS SIP April se start karein. Step 4: Health insurance aur home loan interest claim karein."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
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
                        Tax Planning in India: Reduce Your Tax Legally and Strategically
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">20 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Old vs New Regime Comparison:</span> Computed with your actual numbers - not assumptions - to pick the regime that saves you more</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Year-Round Tax Advisory:</span> Tax planning starts in April, not March - proactive deduction identification and advance tax scheduling</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>All Taxpayer Types Covered:</span> Salaried, business, professional, HUF, NRI, capital gains - personalised planning for each</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>5,000+ Tax Plans Delivered:</span> Clients typically save Rs. 20,000 to Rs. 1,50,000+ per year through proactive tax planning</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">5,000+ personalised tax plans delivered - average saving Rs. 20,000 to Rs. 1,50,000+ per year</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Tax%20Planning%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Tax Planning',
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
    'ctaText'    => 'Join 5,000+ clients who saved tax with Patron Accounting',
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
            <a href="#overview-section" class="toc-btn">What is Tax Planning?</a>
<a href="#who-section" class="toc-btn">Salaried Planning</a>
<a href="#services-section" class="toc-btn">Deductions Checklist</a>
<a href="#procedure-section" class="toc-btn">Our Process</a>
<a href="#documents-section" class="toc-btn">Business Planning</a>
<a href="#fees-section" class="toc-btn">Fees</a>
<a href="#timeline-section" class="toc-btn">Calendar</a>
<a href="#benefits-section" class="toc-btn">Why Us</a>
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
            <h2 class="section-title">What is Tax Planning?</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Tax Planning Services at a Glance</strong></p>
                    <p><p>Tax planning is the process of analysing your financial situation and structuring your income, investments, and expenses in a way that legally minimises your income tax liability. It is not tax evasion - tax planning is entirely lawful, explicitly encouraged by the Income Tax Act through dozens of deductions and exemptions, and widely practised by individuals, families, and businesses across India.</p>
<p>For FY 2025-26 (AY 2026-27), the single most important tax planning decision for most Indians is the choice of tax regime: the new tax regime under Section 115BAC (the default) offers lower slab rates and a higher rebate, while the old regime offers a richer menu of deductions including HRA, Section 80C, and home loan interest. Getting this choice right - based on your actual numbers, not assumptions - is where strategic tax planning begins.</p></p>
                </div>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Question</th><th>Quick Answer</th></tr></thead><tbody>
<tr><td>What is tax planning?</td><td>Legal process of using deductions, exemptions, and reliefs under the Income Tax Act to minimise tax. Distinct from tax evasion (illegal) and tax avoidance (grey area under GAAR).</td></tr>
<tr><td>New regime vs old regime?</td><td>New regime better with low deductions. Old regime wins with HRA + home loan + 80C + 80D totalling Rs. 3.75-4.5 lakh+. Always compute both.</td></tr>
<tr><td>Maximum saving under 80C?</td><td>Rs. 1,50,000/year (old regime only). PPF, ELSS, LIC, EPF, home loan principal, tuition fees. Additional Rs. 50,000 under 80CCD(1B) for NPS.</td></tr>
<tr><td>Tax saving options in new regime?</td><td>Standard deduction Rs. 75,000 (salaried); Employer NPS under 80CCD(2) up to 14% of basic; family pension deduction Rs. 25,000.</td></tr>
<tr><td>When to start tax planning?</td><td>April (start of FY). Enables ELSS SIPs, advance tax scheduling, CTC restructuring, and avoids March lump-sum investing.</td></tr>
<tr><td>What is advance tax?</td><td>Tax paid in quarterly instalments (15 Jun 15%, 15 Sep 45%, 15 Dec 75%, 15 Mar 100%). Required if tax liability exceeds Rs. 10,000 after TDS.</td></tr>
<tr><td>Businesses vs salaried planning?</td><td>Salaried: regime choice, CTC, exemptions, Chapter VI-A. Business: expense deductions (Section 37), depreciation (Section 32), advance tax, presumptive taxation (44AD/44ADA).</td></tr>
</tbody></table></div></p>
                <p><p>Patron Accounting provides personalised, year-round CA-assisted tax planning - not just return filing - helping salaried employees, business owners, professionals, and HUFs legally save the maximum possible tax while remaining fully compliant with the Income Tax Act.</p></p>
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
                <h2 class="section-title">Tax Planning vs Tax Avoidance vs Tax Evasion</h2>
                <div class="content-text what-is-definition">
                    
                    <p>These three terms are frequently confused but are legally and ethically distinct:</p>
<div class="table-responsive-wrapper"><table><thead><tr><th>Term</th><th>Definition</th><th>Legality</th><th>Examples</th></tr></thead><tbody>
<tr><td>Tax Planning</td><td>Using provisions explicitly provided in the Income Tax Act - deductions, exemptions, reliefs - to reduce tax liability</td><td>100% Legal and encouraged</td><td>Investing in PPF under 80C, claiming HRA exemption, choosing beneficial tax regime, using Section 44ADA presumptive scheme</td></tr>
<tr><td>Tax Avoidance</td><td>Arranging transactions in artificial ways to exploit technical loopholes not intended by the legislature</td><td>Technically legal but risky; GAAR may apply</td><td>Circular transactions solely to shift income; artificial loss booking to offset income</td></tr>
<tr><td>Tax Evasion</td><td>Illegally concealing income, falsifying records, claiming fake deductions to avoid tax</td><td>Illegal - criminal offence</td><td>Not reporting cash income, fake 80C investments, falsifying purchase invoices, suppressing turnover</td></tr>
</tbody></table></div>
<p><strong>GAAR (Sections 95-102 of the Income Tax Act)</strong> empowers tax authorities to recharacterise or disregard transactions that lack commercial substance and exist solely for tax benefits. All tax planning recommended by Patron Accounting is within the framework of legitimate deductions and exemptions explicitly provided by the legislature.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Tax Planning:</strong></p>
                    <ul>
<li><strong>Section 80C:</strong> Deduction up to Rs. 1,50,000 for investments in PPF, ELSS, LIC premium, EPF, home loan principal, tuition fees, NSC, Sukanya Samriddhi, 5-year tax-saving FD (old regime only).</li>
<li><strong>Section 80CCD(1B):</strong> Additional Rs. 50,000 deduction for NPS Tier 1 self-contribution, over and above the Rs. 1.5 lakh 80C limit (old regime only).</li>
<li><strong>Section 115BAC:</strong> The new tax regime - default from AY 2024-25. Lower slab rates but limited deductions. Income up to Rs. 12.75 lakh effectively tax-free for salaried.</li>
<li><strong>Section 44AD/44ADA:</strong> Presumptive taxation scheme for small businesses (44AD - up to Rs. 3 crore) and professionals (44ADA - up to Rs. 75 lakh). Simplified compliance with deemed profit rates.</li>
<li><strong>Advance Tax:</strong> Tax paid in quarterly instalments during the FY. Due dates: 15 June (15%), 15 September (45%), 15 December (75%), 15 March (100%). Interest under Sections 234B/234C for missed payments.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Tax Planning</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA-Assisted</span>
                        <strong>Tax Planning</strong>
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
            <h2 class="section-title">Tax Planning for Salaried Employees: Regime Selection Guide</h2>
            <div class="content-text">
                
                <p>For most salaried Indians, FY 2025-26 tax planning begins with one question: <strong>new tax regime or old tax regime?</strong> New regime is the default. Salaried individuals without business income can switch between regimes every year when filing ITR.</p>
<div class="table-responsive-wrapper"><table><thead><tr><th>Your Profile</th><th>Recommended Regime</th><th>Rationale</th></tr></thead><tbody>
<tr><td>Salary up to Rs. 12.75 lakh, no large deductions</td><td><strong>New regime</strong></td><td>Section 87A rebate makes tax zero after standard deduction. No planning needed.</td></tr>
<tr><td>Salary Rs. 12.75L to Rs. 15L, modest deductions</td><td><strong>New regime likely better</strong></td><td>Smoothed slab rates outweigh modest old regime deductions for most.</td></tr>
<tr><td>Salary Rs. 15L to Rs. 25L, paying rent in metro + home loan + full 80C + 80D</td><td><strong>Old regime likely better</strong></td><td>HRA + Section 24(b) + 80C + 80D can sum to Rs. 5-8 lakh, significantly reducing taxable income.</td></tr>
<tr><td>Salary above Rs. 25L, large metro HRA + high home loan interest</td><td><strong>Old regime better in most cases</strong></td><td>Total deductions typically exceed Rs. 7-9 lakh; old regime reduces taxable base substantially.</td></tr>
<tr><td>Senior citizen retiree on pension, no rent, no home loan</td><td><strong>New regime better</strong></td><td>No HRA, no home loan. New regime's higher basic exemption and simpler slabs are superior.</td></tr>
</tbody></table></div>
<p>Patron Accounting provides personalised regime comparison for every salaried and professional client. Explore: <a href="/itr-for-salary">ITR Filing for Salary Income</a> | <a href="/itr-for-business">ITR for Business Income</a> | <a href="/itr-for-capital-gains">ITR for Capital Gains</a></p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Key Deductions Under the Old Regime: Complete Tax Planning Checklist</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Section 80C (PPF, ELSS, LIC, EPF, home loan principal, tuition fees)</td><td>Rs. 1,50,000 per year. Start ELSS SIPs in April to avoid March lump-sum.</td></tr>
<tr><td>Section 80CCD(1B) - Additional NPS Contribution</td><td>Rs. 50,000 over and above 80C limit. One of the best tax-saving instruments for high earners.</td></tr>
<tr><td>Section 80D - Health Insurance Premium</td><td>Rs. 25,000 self + Rs. 25,000/50,000 parents. Buy in Q1 for full-year coverage.</td></tr>
<tr><td>Section 24(b) - Home Loan Interest</td><td>Rs. 2,00,000 on self-occupied property. Obtain interest certificate from lender before March.</td></tr>
<tr><td>Section 10(13A) - HRA Exemption</td><td>Least of: actual HRA, 50%/40% basic+DA, or rent minus 10% basic+DA. Maintain monthly rent receipts.</td></tr>
<tr><td>Section 10(5) - LTA</td><td>Actual travel cost (economy air/rail); 2 journeys in 4-year block. Collect boarding passes and tickets.</td></tr>
<tr><td>Section 80E - Education Loan Interest</td><td>No upper limit; 8 years maximum. For self, spouse, children, or ward.</td></tr>
<tr><td>Section 80G - Charitable Donations</td><td>100% or 50% of donation; some with 10% income cap. Verify 80G registration of donee.</td></tr>
<tr><td>Section 80TTA/80TTB - Savings/Deposit Interest</td><td>Rs. 10,000 (below 60 years) / Rs. 50,000 (senior citizens) deduction on interest income.</td></tr>

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
            <h2 class="section-title">How Patron Accounting Delivers Your Tax Plan: 7-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team provides end-to-end tax planning - from income review and regime comparison to advance tax scheduling and year-end ITR filing. Every step is personalised to your income profile.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Income and Tax Profile Review</h3>
        <p class="step-description">We review your salary structure (CTC breakup, Form 16, employer NPS details), business financials, investment portfolio, insurance coverage, home loan certificate, and other income sources. This takes 30-45 minutes with a dedicated CA.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Complete income mapping</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 30-45 min CA session</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><line x1="30" y1="60" x2="90" y2="60" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div><span class="illustration-label">Profile Review</span><span class="step-number-large">01</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Old Regime vs New Regime Comparison</h3>
        <p class="step-description">For salaried and professional clients, we compute tax liability under both regimes using your actual numbers. We present a clear comparison showing exact tax payable under each and the break-even deduction point for your income level.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Actual-number computation</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Break-even analysis</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="20" width="45" height="50" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><rect x="65" y="20" width="45" height="50" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><text x="32" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OLD</text><text x="87" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NEW</text><circle cx="87" cy="58" r="7" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M83 58l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Regime Compared</span><span class="step-number-large">02</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Deduction Optimisation Plan</h3>
        <p class="step-description">We identify every applicable deduction and exemption - checking for any you are currently missing or under-claiming. We prepare a prioritised list of tax-saving actions (80C, 80D, NPS, HRA, home loan, LTA, 80G) ranked by tax impact.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Every deduction identified</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Ranked by tax impact</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="24" x2="90" y2="24" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="38" x2="75" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="50" x2="80" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="62" x2="65" y2="62" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div><span class="illustration-label">Plan Ready</span><span class="step-number-large">03</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">CTC Restructuring Recommendations</h3>
        <p class="step-description">For salaried clients, we identify components that can be enhanced in CTC negotiation with employer - employer NPS contribution (up to 14% of basic), meal allowance, telephone reimbursement - to reduce taxable salary without reducing take-home pay.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Employer NPS optimisation</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Same take-home, less tax</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="28" width="35" height="8" rx="3" fill="#F5A623" opacity="0.6"/><rect x="25" y="42" width="50" height="8" rx="3" fill="#25D366" opacity="0.6"/><rect x="25" y="56" width="25" height="8" rx="3" fill="#14365F" opacity="0.2"/><path d="M80 35L90 45L80 55" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">CTC Optimised</span><span class="step-number-large">04</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Advance Tax Schedule</h3>
        <p class="step-description">For business clients and professionals, we prepare a full-year advance tax calendar based on projected income. We proactively remind you 2 weeks before each due date (15 June, 15 September, 15 December, 15 March) with the computed amount.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Quarterly reminders</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Zero interest penalties</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="10" width="80" height="16" rx="5" fill="#14365F"/><text x="60" y="22" font-size="8" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">CALENDAR</text><rect x="30" y="35" width="15" height="10" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><rect x="52" y="35" width="15" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="74" y="35" width="15" height="10" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><rect x="30" y="52" width="15" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/></svg></div><span class="illustration-label">Tax Calendar</span><span class="step-number-large">05</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Investment Guidance (Goal-Based)</h3>
        <p class="step-description">We provide instrument-neutral guidance on where to invest within each deduction section - PPF vs ELSS for 80C, NPS Tier 1 vs balanced fund for retirement. Recommendations based on your goals, not commissions.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Goal-based recommendations</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> No commission bias</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="25" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M50 50L58 35L68 45L78 30" stroke="#14365F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="78" cy="30" r="4" fill="#F5A623"/></svg></div><span class="illustration-label">Goals Mapped</span><span class="step-number-large">06</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Year-End Review and ITR Filing</h3>
        <p class="step-description">In March-April, we review whether the plan was executed correctly, handle any year-end corrections, and prepare your ITR with all deductions optimally claimed. All investment proofs are compiled and documented.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Execution review</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR filing included</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="28" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M46 45l8 8 20-20" stroke="#25D366" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Plan Complete</span><span class="step-number-large">07</span></div></div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tax Planning for Business Owners and Professionals</h2>
            <div class="content-text">
                
                <p><strong>Legitimate Business Expense Deductions (Section 37)</strong></p>
<ul>
<li>Rent, repairs, maintenance of business premises - deductible in full for business use</li>
<li>Salaries, wages, staff welfare - all employer-paid compensation including PF, ESI, gratuity</li>
<li>Depreciation under Section 32 - computers 40%, office equipment 15%, furniture 10%, vehicles 15%</li>
<li>Interest on business loans - fully deductible if used for business purposes</li>
<li>Professional fees, CA fees, legal charges paid for business purposes</li>
<li>Advertisement, marketing, and sales promotion expenses</li>
</ul>
<p><strong>Presumptive Taxation - The Tax Planning Simplifier</strong></p>
<ul>
<li><strong>Section 44AD (Businesses):</strong> Turnover up to Rs. 3 crore (95% digital) / Rs. 2 crore otherwise. Deemed income: 8% of turnover (6% if 95%+ digital receipts). 5-year continuity rule applies.</li>
<li><strong>Section 44ADA (Professionals):</strong> Gross receipts up to Rs. 75 lakh (95% digital) / Rs. 50 lakh otherwise. Deemed income: 50% of gross receipts. No lock-in period - opt in/out each year.</li>
</ul>
<p><strong>Advance Tax Planning</strong> - Due dates: 15% by 15 June, 45% by 15 September, 75% by 15 December, 100% by 15 March. Missing instalments attracts interest under Sections 234B and 234C at 1% per month. For presumptive taxpayers: 100% due in single instalment by 15 March.</p>
<p>Explore: <a href="/itr-for-business">ITR for Business</a> | <a href="/itr-for-professionals">ITR for Professionals</a> | <a href="/tax-audit">Tax Audit Services</a></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Tax Planning Mistakes to Avoid</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Starting tax planning in March</td><td>Forced lump-sum investments, missed CTC restructuring, advance tax interest</td><td>Year-round planning starting April with monthly action items</td></tr>
<tr><td>Investing in 80C under new regime</td><td>Rs. 1.5 lakh invested with zero tax benefit since 80C not available in new regime</td><td>Regime comparison computed first before any investment recommendation</td></tr>
<tr><td>Claiming HRA + home loan incorrectly</td><td>Both claimable only if different cities or property is let out - incorrect claims attract scrutiny</td><td>CA verifies eligibility before claiming both simultaneously</td></tr>
<tr><td>Missing advance tax instalments</td><td>Interest under 234B/234C at 1% per month - can add Rs. 5,000-50,000+ to tax bill</td><td>Quarterly advance tax calendar with proactive reminders 2 weeks before due date</td></tr>
<tr><td>Ignoring surcharge thresholds for high earners</td><td>10-25% surcharge on total tax for income above Rs. 50 lakh - significant marginal impact</td><td>Surcharge planning for incomes near threshold to manage total income optimally</td></tr>
<tr><td>Not claiming Section 54 on property sale</td><td>Full LTCG taxable at 12.5% when reinvestment exemption could have eliminated tax entirely</td><td>Section 54/54EC analysis included for property sellers and HNI clients</td></tr>

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
            <h2 class="section-title">Tax Planning Service Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Individual Tax Plan (Salaried - Regime Comparison + Deduction Plan)</td><td>Rs. 2,499 onwards</td></tr>
<tr><td>Business Tax Plan (Advance Tax + Expense Optimisation + ITR)</td><td>Rs. 4,999 onwards</td></tr>
<tr><td>Professional/Freelancer Tax Plan (44ADA Analysis + Regime + ITR)</td><td>Rs. 3,499 onwards</td></tr>
<tr><td>HUF Setup and Annual Tax Plan</td><td>Rs. 4,999 onwards</td></tr>
<tr><td>Capital Gains Tax Planning (Equity Harvesting + Section 54/54EC)</td><td>Rs. 2,999 onwards</td></tr>
<tr><td>Comprehensive Tax Plan (All of above combined)</td><td>Rs. 7,499 onwards</td></tr>
<tr><td><strong>Patron Accounting Professional Fees</strong></td><td><strong>Starting from INR 2,499 (Exl GST and Govt. Charges)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Tax Planning consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Tax%20Planning%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tax Planning Calendar: What to Do Every Quarter</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Q1 (Apr-Jun): Start of FY</td><td>Inform employer of regime choice. Start ELSS SIPs. Pay advance tax 1st instalment by 15 June. Obtain previous year Form 16.</td></tr>
<tr><td>Q2 (Jul-Sep): ITR Season</td><td>File previous FY ITR by 31 July. Review income vs advance tax estimate. Pay 2nd instalment by 15 Sep. Consider LTCG harvesting.</td></tr>
<tr><td>Q3 (Oct-Dec): Mid-Year Review</td><td>Pay 3rd advance tax by 15 Dec. Plan charitable donations under 80G. Book capital losses for tax loss harvesting. Ensure PPF deposit made.</td></tr>
<tr><td>Q4 (Jan-Mar): Year-End</td><td>Pay 4th advance tax by 15 Mar. Submit investment proofs to employer. Make final NPS/80C investments. Obtain home loan certificate.</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Key Point:</strong> Presumptive taxpayers (Sections 44AD/44ADA) pay 100% advance tax in a single instalment by 15 March. Non-presumptive taxpayers follow the quarterly schedule. Senior citizens without business income are exempt from advance tax.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Tax Planning?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div><h3 class="feature-title">Regime Comparison Included</h3><p class="feature-text">Every salaried and professional client gets old vs new regime computation with actual numbers - never assumptions.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><h3 class="feature-title">Year-Round Planning</h3><p class="feature-text">Tax planning starts in April, not March. We identify deductions at the start so you have time to act on them.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div><h3 class="feature-title">Advance Tax Management</h3><p class="feature-text">Calendar, computation, and proactive pre-due-date reminders for business and professional clients.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg></div><h3 class="feature-title">CTC Restructuring Guidance</h3><p class="feature-text">Identify CTC components to reduce taxable salary without reducing take-home - employer NPS, meal allowance, reimbursements.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 100 7h5a3.5 3.5 0 110 7H6"/></svg></div><h3 class="feature-title">Capital Gains Tax Planning</h3><p class="feature-text">Equity LTCG harvesting, Section 54 property reinvestment, and 54EC bond analysis for HNI and property sellers.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Transparent Fees From Rs. 2,499</h3><p class="feature-text">Full-year tax plan with ITR filing included. No hidden charges. Fixed fee quoted upfront before work begins.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Tax Planning by Numbers</h2>
            <div class="content-text">
                
                <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:24px;text-align:center;padding:24px 0;">
<div><p style="font-size:32px;font-weight:800;color:var(--blue);margin-bottom:4px;">5,000+</p><p style="font-size:14px;color:var(--text-muted);">Tax Plans Delivered</p></div>
<div><p style="font-size:32px;font-weight:800;color:var(--orange);margin-bottom:4px;">4.9/5</p><p style="font-size:14px;color:var(--text-muted);">Google Rating</p></div>
<div><p style="font-size:32px;font-weight:800;color:var(--blue);margin-bottom:4px;">Rs. 20K-1.5L+</p><p style="font-size:14px;color:var(--text-muted);">Average Annual Saving</p></div>
<div><p style="font-size:32px;font-weight:800;color:var(--orange);margin-bottom:4px;">100%</p><p style="font-size:14px;color:var(--text-muted);">Advance Tax Compliance</p></div>
</div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tax Planning: Patron Accounting vs Self-Managed vs Generic Portals</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Patron Accounting</th><th>Self-Managed</th><th>Generic Tax Portals</th></tr></thead>
                    <tbody>
                        <tr><td>Old vs new regime comparison</td><td><strong>Yes - computed with actual numbers</strong></td><td>Possible with calculators</td><td>Available on paid plans</td></tr>
<tr><td>CTC restructuring guidance</td><td><strong>Yes - CA-led NPS, allowances</strong></td><td>Not typically available</td><td>Not available</td></tr>
<tr><td>Advance tax calendar and reminders</td><td><strong>Yes - proactive per-quarter</strong></td><td>Self-managed</td><td>Some portals offer reminders</td></tr>
<tr><td>Capital gains tax planning</td><td><strong>Yes - harvesting, 54/54EC analysis</strong></td><td>Complex for most users</td><td>Basic tools; no personalised advice</td></tr>
<tr><td>HUF setup and planning</td><td><strong>Yes - full setup and annual planning</strong></td><td>Requires specialist</td><td>Not available</td></tr>
<tr><td>Year-round CA access</td><td><strong>Yes - included in plan</strong></td><td>Not available</td><td>Charged per query</td></tr>
<tr><td>Starting Price</td><td><strong>From Rs. 2,499</strong></td><td>Free (with risk of errors)</td><td>Rs. 499 to Rs. 4,999+</td></tr>

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
            <h2 class="section-title">Related Income Tax and Compliance Services</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a> - Complete ITR filing for all forms ITR-1 to ITR-7</li>
<li><a href="/itr-for-salary">ITR Filing for Salary Income</a> - Specialised ITR-1 filing with Form 16 processing</li>
<li><a href="/itr-for-business">ITR for Business Income</a> - ITR-3/ITR-4 with profit computation</li>
<li><a href="/itr-for-capital-gains">ITR for Capital Gains</a> - ITR-2 covering equity, mutual funds, property gains</li>
<li><a href="/tax-audit">Tax Audit Services</a> - Section 44AB audit for businesses above threshold</li>
<li><a href="/tds-return-filing-24q">TDS Return Filing</a> - Quarterly TDS returns with Form 16/16A generation</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Capital Gains Tax Planning Strategies</h2>
            <div class="content-text">
                
                <p>Capital gains from sale of equity shares, mutual funds, property, and other assets are taxed at special rates. Strategic timing and structuring of sales can significantly reduce capital gains tax:</p>
<ul>
<li><strong>LTCG Harvesting:</strong> The Rs. 1.25 lakh annual LTCG exemption under Section 112A resets every financial year. Selling and repurchasing equity to book LTCG within the exemption limit reduces your cost base at zero tax cost.</li>
<li><strong>Holding Period Planning:</strong> Hold equity 12+ months to convert 20% STCG (Section 111A) to 12.5% LTCG (Section 112A). Hold property 24+ months for LTCG treatment at 12.5%.</li>
<li><strong>Section 54 Exemption:</strong> Capital gains from residential house sale are fully exempt if reinvested in another house within 1 year before or 2 years after sale. CGAS can park funds if new property is not yet identified.</li>
<li><strong>Section 54EC:</strong> LTCG from any long-term asset is exempt if invested in specified bonds (NHAI, REC, PFC, IRFC) within 6 months of sale. Lock-in 5 years; maximum Rs. 50 lakh per year.</li>
<li><strong>Loss Set-Off:</strong> Capital losses can offset capital gains of the same year. Unabsorbed losses carry forward for 8 years - only if ITR is filed by original due date.</li>
</ul>
<p>Authoritative source: <a href="https://www.incometaxindia.gov.in" target="_blank" rel="noopener">Central Board of Direct Taxes - incometaxindia.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions About Tax Planning</h2>
                    <p class="faq-expanded__lead">Expert answers to the most common tax planning questions for FY 2025-26 (AY 2026-27).</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Tax Planning',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is tax planning and how is it different from tax evasion?</h3>
                        <div class="faq-expanded__a"><p>Tax planning is the legal process of using deductions, exemptions, and reliefs explicitly provided in the Income Tax Act to reduce your tax liability. Tax evasion is illegal concealment of income or falsification of records - a criminal offence. Tax avoidance (using artificial loopholes) can attract GAAR provisions under Sections 95-102.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which is better - new tax regime or old tax regime in FY 2025-26?</h3>
                        <div class="faq-expanded__a"><p>New regime is better with low deductions - income up to Rs. 12.75 lakh is effectively tax-free for salaried (after Rs. 75,000 standard deduction and Section 87A rebate). Old regime wins when you have substantial HRA, Section 24(b) home loan interest, 80C, and 80D. Break-even is approximately Rs. 3.75-4.5 lakh in total deductions for income around Rs. 15-20 lakh.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the maximum tax I can save under the old regime?</h3>
                        <div class="faq-expanded__a"><p>Total deductions of Rs. 5-10 lakh are achievable for high earners in metro cities: Section 80C Rs. 1.5 lakh, NPS under 80CCD(1B) Rs. 50,000, Section 80D Rs. 25,000 to Rs. 1 lakh, home loan interest Section 24(b) Rs. 2 lakh, and HRA exemption (variable, Rs. 2-6 lakh in metros). Combined, these significantly reduce the effective tax rate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">When should I start tax planning for FY 2025-26?</h3>
                        <div class="faq-expanded__a"><p>April is the ideal time. Early planning allows you to inform your employer of the tax regime, start monthly ELSS SIPs under 80C rather than a March lump sum, schedule advance tax instalments correctly, and renegotiate CTC components like employer NPS contribution. Last-minute March planning leads to suboptimal investments and advance tax interest.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a business owner use the same tax planning strategies as a salaried employee?</h3>
                        <div class="faq-expanded__a"><p>Business owners (proprietors) can use Section 80C and Chapter VI-A deductions under the old regime like salaried employees. Additionally, they plan around legitimate expense deductions under Section 37, depreciation under Section 32, advance tax quarterly scheduling, and presumptive taxation under Section 44AD (up to Rs. 3 crore turnover).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the tax planning benefit of NPS over other 80C instruments?</h3>
                        <div class="faq-expanded__a"><p>NPS offers two deduction layers: self-contribution within Rs. 1.5 lakh 80C limit under 80CCD(1), plus an additional Rs. 50,000 under 80CCD(1B) exclusively for NPS - over and above the 80C cap. Total potential deduction: Rs. 2 lakh through NPS alone. For 30% slab, this translates to Rs. 60,000+ annual tax saving. Employer NPS under 80CCD(2) is also available under the new regime.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is an HUF useful for tax planning even for a small family?</h3>
                        <div class="faq-expanded__a"><p>Yes, an HUF can benefit even a family of two if they have ancestral or inherited property or investment income. The HUF gets its own basic exemption limit and 80C limit separate from the karta's individual income. Annual tax saving of Rs. 30,000 to Rs. 1,00,000+ depending on applicable slab. However, HUFs must have genuine HUF property and cannot split salary income.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Tax bachane ke tarike India mein kya hain?</strong> Section 80C (PPF, ELSS, LIC), 80D (health insurance), NPS, HRA exemption, home loan interest - yeh sab legal tarike hain tax bachane ke. Patron Accounting ka CA aapke numbers ke hisaab se personalised plan banata hai.</p>
<p><strong>Q: Purana ya naya tax regime kaun sa better hai?</strong> Agar aapke paas HRA + home loan + 80C + 80D total Rs. 3.75-4.5 lakh se zyada deductions hain to purana regime better hai. Nahi to naya regime mein Rs. 12.75 lakh tak zero tax hai.</p>
<p><strong>Q: Salary pe tax kaise bachaye 2026?</strong> Step 1: Regime comparison karein. Step 2: Employer se NPS contribution badhwayein. Step 3: ELSS SIP April se start karein. Step 4: Health insurance aur home loan interest claim karein.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Start Your FY 2025-26 Tax Plan Now - Do Not Wait Until March</h2>
            <div class="content-text">
                
                <p>Tax planning done in April saves significantly more than tax planning done in March. Early planning enables <strong>ELSS SIP averaging</strong>, <strong>advance tax compliance</strong> (avoid 1% monthly interest under Sections 234B/234C), <strong>CTC restructuring</strong> with your employer, and <strong>full-year NPS contributions</strong>.</p>
<p><strong>Book your personalised tax plan today:</strong> Share your Form 16 or business financials with our CA team. We will compute your optimal regime, identify every applicable deduction, and prepare a full-year action plan. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Tax%20Planning%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Plan Your Taxes Strategically - Save Every Rupee Legally</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Tax planning is not a last-minute March activity - it is a year-round strategic process that can save you Rs. 20,000 to Rs. 1,50,000+ per year when done correctly. Whether you are choosing between the old and new regime, optimising CTC with your employer, managing advance tax, or structuring capital gains - every decision impacts your final tax bill.</p>
<p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's CA and CS team delivers personalised tax planning for salaried employees, business owners, professionals, and HUFs. From regime comparison to deduction optimisation to year-end ITR filing - your dedicated CA handles everything. Starting from Rs. 2,499 with transparent pricing and no hidden charges.</p>
<p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Join 5,000+ clients who trust Patron Accounting for their tax planning. 4.9/5 Google rating. Book your free consultation today.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Tax%20Planning%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Tax%20Planning%20Services&body=Hello%2C%20I%20just%20visited%20your%20Tax%20Planning%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Tax Planning Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert CA-assisted tax planning in major cities. Select your city for localised tax advisory.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-city-grid">
        <a href="/tax-planning-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/tax-planning-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/tax-planning-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/tax-planning-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">End-to-end support for Tax Planning</div>
    <div class="pa-cross-grid">
        <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR Filing</div><div class="pa-card-sub">India</div></div></a>
        <a href="/itr-for-salary" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Salary</div><div class="pa-card-sub">India</div></div></a>
        <a href="/itr-for-business" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">India</div></div></a>
        <a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Capital Gains</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 20 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 20 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers income tax planning strategies for FY 2025-26 (AY 2026-27). Tax slabs, deduction limits, and advance tax dates are based on the Finance Act 2025. Budget 2026 changes apply from FY 2026-27. Verify current rules at incometaxindia.gov.in.</p>
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
