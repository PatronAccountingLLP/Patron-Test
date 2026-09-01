
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Gratuity Calculation in Pune - Formula & 5-Year Rule</title>
    <meta name="description" content="CA-assisted gratuity calculation and compliance in Pune. Formula 15/26, new labour code 50% wage rule, fixed-term eligibility, Ind AS 19 valuation. Serving Hinjewadi, Kharadi IT firms. Call +91 945 945 6700.">
    <link rel="canonical" href="/gratuity-calculation-compliance/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Gratuity Calculation in Pune - Formula & 5-Year Rule">
    <meta property="og:description" content="CA-assisted gratuity calculation and compliance in Pune. Formula 15/26, new labour code 50% wage rule, fixed-term eligibility, Ind AS 19 valuation. Serving Hinjewadi, Kharadi IT firms. Call +91 945 945 6700.">
    <meta property="og:url" content="/gratuity-calculation-compliance/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gratuity Calculation in Pune - Formula & 5-Year Rule">
    <meta name="twitter:description" content="CA-assisted gratuity calculation and compliance in Pune. Formula 15/26, new labour code 50% wage rule, fixed-term eligibility, Ind AS 19 valuation. Serving Hinjewadi, Kharadi IT firms. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Gratuity Calculation in Pune - Formula & 5-Year Rule",
      "description": "CA-assisted gratuity calculation and compliance in Pune. Formula 15/26, new labour code 50% wage rule, fixed-term eligibility, Ind AS 19 valuation. Serving Hinjewadi, Kharadi IT firms. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gratuity-calculation-compliance/pune",
      "serviceType": "Gratuity Calculation in Pune - Formula & 5-Year Rule",
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
        "url": "https://www.patronaccounting.com/gratuity-calculation-compliance/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "20",
          "maxPrice": "20000",
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
          "name": "Gratuity Calculation Compliance",
          "item": "https://www.patronaccounting.com/gratuity-calculation-compliance"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Gratuity Calculation in Pune - Formula & 5-Year Rule",
          "item": "https://www.patronaccounting.com/gratuity-calculation-compliance/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which authority handles gratuity disputes in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For central sphere establishments in Pune, the Assistant Labour Commissioner (Central), Shram Bhawan, Pune serves as the Controlling Authority under Section 7. For state sphere establishments, the Labour Commissioner, Maharashtra (Pune Division). Appeals go to the Deputy Chief Labour Commissioner (Central), Mumbai. Patron represents Pune employers before both authorities."
          }
        },
        {
          "@type": "Question",
          "name": "How is gratuity calculated under the new labour code?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The formula remains: Gratuity = Last Drawn Wages x 15/26 x Completed Years of Service. The key change is the wage definition - under Code on Wages 2019 (effective November 2025), wages must be at least 50% of total CTC. If a Pune IT employee's CTC is Rs 12 lakh with basic at only Rs 3.6 lakh (30%), the allowances exceeding 50% are deemed wages - increasing the base to Rs 6 lakh. Maximum Rs 20 lakh."
          }
        },
        {
          "@type": "Question",
          "name": "Are fixed-term employees eligible for gratuity in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under the Social Security Code, 2020 (effective 21 November 2025), fixed-term employees are eligible for pro-rata gratuity after 1 year of continuous service (240+ working days). This is a significant change from the previous 5-year rule. Pune IT companies and manufacturers using fixed-term contracts must now provision from the first year of employment."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for not paying gratuity in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 9: making a false statement to avoid payment - 6 months imprisonment + Rs 10,000 fine. Contravening the Act - 3-12 months imprisonment + Rs 20,000 fine. Non-payment of gratuity - imprisonment up to 2 years + Rs 20,000 fine. Insurance premium default - Rs 10,000 + Rs 1,000/day. The Controlling Authority in Pune can recover unpaid gratuity with compound interest via Collector."
          }
        },
        {
          "@type": "Question",
          "name": "Is gratuity taxable in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For employees covered under the Act, gratuity up to Rs 20 lakh is exempt under Section 10(10) of the Income Tax Act. Any excess is taxable as salary income. Government employees receive full exemption. Employers can claim gratuity payments as a business deduction under Section 36(1)(v) if paid through an approved gratuity fund."
          }
        },
        {
          "@type": "Question",
          "name": "Do Pune startups need to comply with gratuity rules?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, once a Pune startup has employed 10 or more persons at any point during the preceding 12 months. Once applicable, it continues even if headcount drops below 10. Many startups in Baner, Koregaon Park and Viman Nagar cross this threshold without establishing compliance, creating exposure when employees resign after 5 years."
          }
        },
        {
          "@type": "Question",
          "name": "How does the new labour code affect Pune IT company financials?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Social Security Code 2020 (effective November 2025) requires recognizing increased gratuity liability as Past Service Cost in March 31, 2026 financial statements. Under Ind AS 19, the entire increase is recognized immediately in P&L. Under AS 15, split between vested and non-vested. Companies must obtain fresh actuarial valuations reflecting the new 50% wage definition."
          }
        },
        {
          "@type": "Question",
          "name": "Can gratuity be forfeited by a Pune employer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, but only under Section 4(6) - if the employee's termination is for misconduct involving riotous or violent behaviour, or any act that caused damage or loss to the employer's property. The forfeiture must follow proper procedural safeguards. Partial forfeiture to the extent of damage/loss is permissible. Patron advises on legally compliant forfeiture procedures."
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
                        Gratuity Calculations & Compliance in Pune: Expert CA-Assisted Advisory
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Formula:</span> Gratuity = Last Drawn Wages x 15/26 x Completed Years of Service</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>New Labour Code:</span> Fixed-term employees eligible after 1 year; wages must be at least 50% of CTC (Nov 2025)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Maximum Limit:</span> Rs 20 lakh (tax-exempt under Section 10(10) of Income Tax Act)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> Imprisonment up to 2 years + fine up to Rs 20,000 for non-payment (Section 9)</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Gratuity%20Compliance%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Gratuity Compliance in Pune',
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
    'ctaText'    => 'Get expert gratuity compliance for your Pune IT or manufacturing business today.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is Gratuity</a><a href="#who-section" class="toc-btn">Who Needs Compliance</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Deadlines</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Compliance Matrix</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Gratuity Calculations & Compliance in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Gratuity Compliance in Pune Services at a Glance</strong></p>
                    <p>Gratuity is a statutory retirement benefit governed by the Payment of Gratuity Act, 1972 (now subsumed into the Social Security Code, 2020, effective 21 November 2025). Every Pune employer with 10+ employees must pay gratuity to workers who completed 5 years of continuous service. The new codes expanded eligibility to fixed-term employees after 1 year and mandated that wages for gratuity must constitute at least 50% of total CTC - significantly impacting Pune's IT companies in Hinjewadi and Kharadi and manufacturing units in Pimpri-Chinchwad and Chakan MIDC.</p>
                </div>
                <p>Pune is home to over 800 IT companies in Hinjewadi IT Park, Kharadi, and Rajiv Gandhi Infotech Park, alongside one of India's largest manufacturing corridors in Pimpri-Chinchwad, Chakan MIDC and Ranjangaon MIDC. The Social Security Code, 2020 from 21 November 2025 has created an urgent compliance overhaul. IT companies must restructure CTC to ensure the 50% wage rule, while manufacturing units with fixed-term workforces must account for 1-year gratuity eligibility. Learn more about <a href="/gratuity-calculation-and-compliance-services">Gratuity Compliance across India</a>.</p>
                <p>The Assistant Labour Commissioner (Central), Pune serves as the Controlling Authority for central sphere establishments, while the Labour Commissioner, Maharashtra (Pune Division) handles state sphere. Pune companies preparing March 31, 2026 financial statements must also account for increased gratuity liability as Past Service Cost under Ind AS 19/AS 15. For related services, see <a href="/payroll-services/pune">Payroll Services in Pune</a> and <a href="https://labour.gov.in" target="_blank" rel="noopener">Ministry of Labour</a>.</p>
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
                <h2 class="section-title">What Is Gratuity Under Indian Law?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Gratuity is a statutory lump-sum payment made by an employer to an employee in recognition of continuous, meritorious service. Originally governed by the Payment of Gratuity Act, 1972, gratuity provisions are now incorporated into the Social Security Code, 2020, effective 21 November 2025. The Act applies to every establishment employing 10 or more persons.</p><p>The formula for covered employees: <strong>Gratuity = Last Drawn Wages x 15/26 x Completed Years of Service</strong>. "Last Drawn Wages" means basic + DA + retaining allowance. Under the new codes, wages must be at least <strong>50% of total remuneration</strong> - if allowances exceed 50%, the excess is deemed wages. Tenure exceeding 6 months in the final year is rounded up.</p><p>For Pune's IT sector in Hinjewadi and Kharadi, where CTC structures often allocate only 30-40% as basic salary, the 50% wage rule substantially increases the gratuity base. Related: <a href="/gst-returns/pune">GST Returns in Pune</a> and <a href="#">HR Compliance</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Gratuity Compliance in Pune:</strong></p>
                    <ul><li><strong>15/26 Formula:</strong> Gratuity = Last Drawn Wages x 15/26 x Completed Years of Service</li><li><strong>50% Wage Rule:</strong> Wages must be at least 50% of total CTC under Code on Wages 2019</li><li><strong>Social Security Code 2020:</strong> Consolidated code effective 21 November 2025 covering gratuity</li><li><strong>Ind AS 19:</strong> Accounting standard requiring actuarial valuation of gratuity as defined benefit</li><li><strong>Past Service Cost:</strong> Increased liability from Nov 2025 code changes, recognized in P&L</li><li><strong>Section 4A:</strong> Compulsory insurance - employer must insure gratuity with LIC or approved fund</li></ul>

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
                            <!-- GRT tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GRT</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Gratuity Compliance in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>15/26 Formula</span>
                        <strong>50% Wage Rule (Nov 2025)</strong>
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
            <h2 class="section-title">Who Needs Gratuity Compliance in Pune?</h2>
            <div class="content-text">
                
                <p><strong>IT Companies (Hinjewadi, Kharadi, Magarpatta):</strong> Over 800 IT firms must restructure CTC to meet the 50% wage rule. Companies in Rajiv Gandhi Infotech Park SEZ and EON Free Zone Kharadi with permanent and fixed-term employees must provision for dual-track gratuity. Related: <a href="#">Company Registration in Pune</a>.</p><p><strong>Manufacturing Units (Pimpri-Chinchwad, Chakan, Ranjangaon):</strong> Classic 5-year eligibility for permanent workers plus new 1-year rule for fixed-term employees impacts project-based manufacturing contracts.</p><p><strong>Startups and SMEs (Baner, Koregaon Park, Viman Nagar):</strong> Once the 10-employee threshold is crossed, the Act applies permanently even if headcount drops. Many startups are unaware.</p><p><strong>Contract Labour and Principal Employers:</strong> Following the Bombay HC IIT Bombay ruling, principal employers exercising control over contract workers may be held liable for gratuity. Significant for Hinjewadi IT Park and Pimpri-Chinchwad manufacturing plants.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Gratuity Compliance Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Gratuity Calculation and Advisory</td><td>Computing gratuity liability for permanent and fixed-term employees using 15/26 formula under current and new wage definitions.</td></tr><tr><td>CTC Restructuring for 50% Wage Rule</td><td>Redesigning compensation structures for Pune IT companies to ensure wages constitute 50% of total CTC under Social Security Code 2020.</td></tr><tr><td>Actuarial Valuation (Ind AS 19 / AS 15)</td><td>Annual actuarial valuation of gratuity liability including Past Service Cost recognition for Nov 2025 code changes. Coordinated with empaneled actuaries.</td></tr><tr><td>Gratuity Trust/Fund Setup + LIC Enrollment</td><td>Establishing approved gratuity funds, trust deeds under Rule 103, and LIC Group Gratuity scheme management. Linked with <a href="/statutory-audit">Statutory Audit</a> and <a href="/accounting-services">Accounting Services</a>.</td></tr><tr><td>Fixed-Term + Claim Processing</td><td>Pro-rata gratuity computation for fixed-term employees (1-year eligibility) and Form I claim processing upon superannuation, resignation, death or disablement.</td></tr><tr><td>Controlling Authority Representation</td><td>Representing Pune employers before ALC (Central) or Labour Commissioner Maharashtra in Section 7 disputes. Compliance audit, forfeiture advisory, and <a href="/tax-planning-services">Tax Planning</a> on gratuity payouts.</td></tr>

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
            <h2 class="section-title">Gratuity Compliance Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Pune CA team manages the full gratuity compliance lifecycle - from applicability assessment to actuarial valuation and claim processing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Applicability and Employee Classification</h3><p class="step-description">Verify whether your Pune establishment employs 10+ persons. Once applicable, the Act continues permanently. Classify employees: permanent (5-year eligibility), fixed-term (1-year under new code), contract (assess employer control per Bombay HC rulings). For IT companies in Hinjewadi and Kharadi with mixed workforce structures, Patron maps every employee category to the correct gratuity stream.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Threshold verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Employees classified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">10+</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Employees</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Applicability</text></svg></div><span class="illustration-label">Applicable</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Restructure Wages to Meet 50% CTC Rule</h3><p class="step-description">Under Code on Wages 2019 and Social Security Code 2020 (effective Nov 2025), wages must be at least 50% of total CTC. If allowances exceed 50%, the excess is deemed wages. For Pune IT companies where basic was 30-40% of CTC, this means restructuring or accepting higher gratuity liability. Patron models multiple scenarios to optimize take-home pay impact vs gratuity cost increase.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CTC modelled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Wage rule compliant</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">50%</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">of CTC = Wages</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Restructure</text></svg></div><span class="illustration-label">Restructured</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compute Gratuity Liability for All Eligible Employees</h3><p class="step-description">Apply: Gratuity = Last Drawn Wages x 15/26 x Completed Years. For fixed-term with 1+ year: pro-rata basis. Round up tenure exceeding 6 months. Cap at Rs 20 lakh (excess is ex-gratia). For Pimpri-Chinchwad factories: straightforward basic + DA computation. For IT companies: use new wage base (minimum 50% of CTC). Patron computes total workforce liability.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Formula applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Total liability computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Wages x</text><text x="60" y="36" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">15/26</text><text x="60" y="50" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">x Years</text></svg></div><span class="illustration-label">Computed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Arrange Compulsory Insurance or Establish Gratuity Fund</h3><p class="step-description">Under Section 4A, every employer must obtain gratuity insurance from LIC or approved insurer, or establish an approved gratuity fund/trust. Choose between LIC Group Gratuity Scheme (premium-based) or Employer-Managed Approved Trust (Rule 103, IT Rules). Patron assists with LIC enrollment, trust deed preparation and annual contribution computation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LIC enrolled / Trust created</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Premium/contribution set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LIC</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">or Trust Fund</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Section 4A</text></svg></div><span class="illustration-label">Insured</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Maintain Records, Nominations and Compliance Notices</h3><p class="step-description">Maintain gratuity register with all eligible employees. Collect Form F nominations upon joining, verify within 30 days. Display notice with authorized officer name. File Form A (notice of opening) with Controlling Authority. The ALC (Central), Pune is the Controlling Authority for central sphere establishments in Pune district.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Register maintained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Nominations collected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="35" height="8" rx="3" fill="#F5A623" opacity="0.3"/><text x="42" y="21" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Form F</text><rect x="25" y="30" width="35" height="8" rx="3" fill="#E8712C" opacity="0.2"/><text x="42" y="36" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Register</text><rect x="25" y="45" width="35" height="8" rx="3" fill="#14365F" opacity="0.1"/><text x="42" y="51" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Notice</text></svg></div><span class="illustration-label">Compliant</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Process Claims Within 30 Days and Conduct Actuarial Valuation</h3><p class="step-description">When eligible (superannuation, resignation after 5yr/1yr, death, disablement), compute and notify within 15 days, pay within 30 days. Delay attracts simple interest. For financial statements, conduct actuarial valuation under Ind AS 19/AS 15. For March 2026 statements, recognize increased liability from Nov 2025 changes as Past Service Cost in P&L. Patron coordinates with empaneled actuaries.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Claims processed in 30 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Ind AS 19 valuation done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M55 30l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="78" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Pay + Valuation</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Gratuity Compliance in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>Form A (Notice of Opening):</strong> Filed with Controlling Authority when establishment becomes covered.</li><li><strong>Form F (Nomination):</strong> Employee nomination form; collected upon joining; verified within 30 days.</li><li><strong>Form I (Gratuity Claim):</strong> Filed by employee/nominee to claim gratuity upon eligibility.</li><li><strong>Form L (Notice of Determination):</strong> Employer's notice specifying gratuity amount payable.</li><li><strong>Employee Service Records:</strong> Joining date, designation, salary history, breaks in service.</li><li><strong>Salary Registers / CTC Breakdowns:</strong> To verify wage base under 50% rule.</li><li><strong>LIC Group Gratuity Policy / Trust Deed:</strong> For compulsory insurance under Section 4A.</li><li><strong>Actuarial Valuation Report:</strong> Annual under Ind AS 19/AS 15 with liability, plan assets and Past Service Cost.</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> For IT companies in Hinjewadi with employees on multiple CTC structures (pre-Nov 2025 and post-Nov 2025), maintain two salary datasets for the actuary to separately quantify the Past Service Cost impact from the new wage definition.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Gratuity Compliance Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>50% Wage Rule CTC Restructuring</td><td>Hinjewadi IT companies with basic at 30-35% of CTC face substantial gratuity liability increase</td><td>Patron models both restructuring paths to find optimal balance for each client</td></tr><tr><td>Fixed-Term Employee Gratuity After 1 Year</td><td>IT companies and Chakan MIDC units using fixed-term contracts must now provision from year one</td><td>Patron tracks all fixed-term employees and computes pro-rata gratuity from day one</td></tr><tr><td>Past Service Cost (Ind AS 19)</td><td>March 2026 financials require recognizing increased liability from Nov 2025 changes - many companies haven't valued yet</td><td>Patron coordinates fresh actuarial valuations reflecting new wage definition for year-end reporting</td></tr><tr><td>Contract Worker Gratuity Liability</td><td>Bombay HC ruling: principal employers exercising control over contract workers may be liable</td><td>Patron assesses actual supervision/control to determine principal employer exposure</td></tr>

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
            <h2 class="section-title">Gratuity Compliance Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Gratuity Calculation (up to 50 employees)</td><td>Patron Rs 5,000-15,000 (annual)</td></tr><tr><td>Gratuity Calculation (51-500 employees)</td><td>Patron Rs 15,000-50,000 (annual + monthly tracking)</td></tr><tr><td>CTC Restructuring Advisory (50% wage rule)</td><td>Patron Rs 25,000-75,000 per company</td></tr><tr><td>Actuarial Valuation (Ind AS 19/AS 15)</td><td>Patron Rs 15,000-50,000 (annual)</td></tr><tr><td>Gratuity Trust/Fund Setup</td><td>Patron Rs 25,000-75,000 (one-time)</td></tr><tr><td>LIC Group Gratuity Enrollment</td><td>Patron Rs 10,000-25,000 (one-time)</td></tr><tr><td>Controlling Authority Representation</td><td>Patron Rs 15,000-50,000 per dispute</td></tr><tr><td>Gratuity Compliance Audit</td><td>Patron Rs 10,000-30,000 (annual)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Gratuity Compliance in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Gratuity%20Compliance%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Gratuity Compliance Deadlines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Gratuity Payment to Employee</td><td>Within 30 days of becoming due</td></tr><tr><td>Notice to Employee (Form L)</td><td>Within 15 days of claim receipt</td></tr><tr><td>Nomination Verification (Form F)</td><td>Within 30 days of receipt</td></tr><tr><td>Form A (Notice of Opening)</td><td>Within 30 days of becoming covered</td></tr><tr><td>Appeal against CA Order (Form O)</td><td>Within 60 days of order</td></tr><tr><td>Application to CA (Form N)</td><td>Within 90 days of cause of action</td></tr><tr><td>Actuarial Valuation (Ind AS 19)</td><td>Balance sheet date (31 March)</td></tr><tr><td>CTC Restructuring</td><td>By 21 Nov 2025 (code effective date)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> The Controlling Authority for central sphere establishments is the Assistant Labour Commissioner (Central), Shram Bhawan, Pune. For state sphere: Labour Commissioner, Maharashtra (Pune Division). Patron handles all filings and representations from its Wagholi office. March 31, 2026 financial statements require fresh actuarial valuations reflecting the new wage definition.</p>

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
            <h2 class="section-title">Why Choose Patron for Gratuity Compliance in Pune?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office + Dual Sector</h3><p class="feature-text">RTC Silver, Wagholi - serving both IT (Hinjewadi, Kharadi, Magarpatta) and manufacturing (Pimpri-Chinchwad, Chakan, Ranjangaon) from a single point.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">New Labour Code Ready</h3><p class="feature-text">CTC restructuring and gratuity liability re-computation already implemented for clients post-November 2025, including Past Service Cost for March 2026 financials.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Actuarial Network</h3><p class="feature-text">Empaneled actuaries for Ind AS 19/AS 15 gratuity valuations ensuring seamless year-end reporting for audit-ready financials.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Controlling Authority Representation</h3><p class="feature-text">Direct representation before ALC (Central) Pune and Labour Commissioner Maharashtra in Section 7 gratuity disputes.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Patron's payroll team handles 200+ employees without a single error. Gratuity, PF, ESI - everything is always compliant." - HR Head, IT Company, Pune</blockquote><p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves IT companies and manufacturers across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Gratuity Compliance Matrix</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Scenario</th><th>Eligibility</th><th>New Code Impact</th></tr></thead>
                    <tbody>
                        <tr><td>Permanent Employee (5+ yrs)</td><td>5 years continuous service</td><td>Wages now min 50% of CTC</td></tr><tr><td>Fixed-Term Employee (1+ yr)</td><td>1 year continuous service (new)</td><td>New eligibility from Nov 2025</td></tr><tr><td>Seasonal Employee</td><td>Per season</td><td>7 days' wages per season (unchanged)</td></tr><tr><td>Death/Disablement</td><td>No minimum service required</td><td>Payable to nominee (unchanged)</td></tr><tr><td>4 yrs 240 days (Court ruling)</td><td>Eligible per Madras HC</td><td>Strengthened by new code</td></tr><tr><td>Contract Worker (Principal Emp)</td><td>If employer exercises control</td><td>Bombay HC: principal employer may be liable</td></tr><tr><td>Piece-Rate Worker</td><td>5 years / 1 year (fixed-term)</td><td>Avg wages of last 3 months applies</td></tr>

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
                
                <p>For Pune businesses needing related payroll and compliance services:</p><ul><li><a href="/payroll-services/pune">Payroll Services in Pune</a></li><li><a href="/esic-calculation-compliance/pune">ESIC Compliance in Pune</a></li><li><a href="#">PF (Provident Fund) Compliance</a></li><li><a href="/statutory-audit">Statutory Audit</a></li><li><a href="/accounting-services">Accounting Services</a></li><li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Gratuity</h2>
            <div class="content-text">
                
                <p><strong>Payment of Gratuity Act, 1972 / Social Security Code, 2020:</strong> Gratuity payable on termination after continuous service. SSC effective 21 November 2025.</p><p><strong>Section 4(1):</strong> Payable on superannuation, retirement, resignation, death or disablement after 5 years (waived for death/disablement).</p><p><strong>Section 4(2):</strong> 15 days' wages per completed year. Maximum Rs 20 lakh.</p><p><strong>Section 4(6):</strong> Forfeiture for misconduct involving riotous/violent behaviour or damage/loss to employer property.</p><p><strong>Section 4A:</strong> Compulsory insurance with LIC or approved insurer, or approved gratuity fund.</p><p><strong>Section 7:</strong> Determination by employer within 15 days; payment within 30 days. Disputes to Controlling Authority.</p><p><strong>Section 9:</strong> Penalties: false statement 6 months + Rs 10,000; contravention 3-12 months + Rs 20,000; non-payment up to 2 years + Rs 20,000.</p><p><strong>Code on Wages 2019:</strong> Wages must be 50%+ of total CTC. Directly affects gratuity base.</p><p><strong>Section 10(10) IT Act:</strong> Rs 20 lakh exemption. Government employees fully exempt.</p><p><strong>Ind AS 19 / AS 15:</strong> Actuarial valuation required. Nov 2025 changes = Past Service Cost.</p><p><strong>Controlling Authority Pune:</strong> ALC (Central), Shram Bhawan, Pune (central sphere). Labour Commissioner Maharashtra - Pune Division (state sphere). Appellate: DCLC (Central), Mumbai.</p><p><strong>Portal:</strong> <a href="https://labour.gov.in" target="_blank" rel="noopener">Ministry of Labour - labour.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - Gratuity Calculations & Compliance in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about gratuity compliance in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Gratuity Compliance in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which authority handles gratuity disputes in Pune?</h3>
                        <div class="faq-expanded__a"><p>For central sphere establishments in Pune, the Assistant Labour Commissioner (Central), Shram Bhawan, Pune serves as the Controlling Authority under Section 7. For state sphere establishments, the Labour Commissioner, Maharashtra (Pune Division). Appeals go to the Deputy Chief Labour Commissioner (Central), Mumbai. Patron represents Pune employers before both authorities.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How is gratuity calculated under the new labour code?</h3>
                        <div class="faq-expanded__a"><p>The formula remains: Gratuity = Last Drawn Wages x 15/26 x Completed Years of Service. The key change is the wage definition - under Code on Wages 2019 (effective November 2025), wages must be at least 50% of total CTC. If a Pune IT employee's CTC is Rs 12 lakh with basic at only Rs 3.6 lakh (30%), the allowances exceeding 50% are deemed wages - increasing the base to Rs 6 lakh. Maximum Rs 20 lakh.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Are fixed-term employees eligible for gratuity in Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under the Social Security Code, 2020 (effective 21 November 2025), fixed-term employees are eligible for pro-rata gratuity after 1 year of continuous service (240+ working days). This is a significant change from the previous 5-year rule. Pune IT companies and manufacturers using fixed-term contracts must now provision from the first year of employment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for not paying gratuity in Pune?</h3>
                        <div class="faq-expanded__a"><p>Under Section 9: making a false statement to avoid payment - 6 months imprisonment + Rs 10,000 fine. Contravening the Act - 3-12 months imprisonment + Rs 20,000 fine. Non-payment of gratuity - imprisonment up to 2 years + Rs 20,000 fine. Insurance premium default - Rs 10,000 + Rs 1,000/day. The Controlling Authority in Pune can recover unpaid gratuity with compound interest via Collector.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is gratuity taxable in Pune?</h3>
                        <div class="faq-expanded__a"><p>For employees covered under the Act, gratuity up to Rs 20 lakh is exempt under Section 10(10) of the Income Tax Act. Any excess is taxable as salary income. Government employees receive full exemption. Employers can claim gratuity payments as a business deduction under Section 36(1)(v) if paid through an approved gratuity fund.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do Pune startups need to comply with gratuity rules?</h3>
                        <div class="faq-expanded__a"><p>Yes, once a Pune startup has employed 10 or more persons at any point during the preceding 12 months. Once applicable, it continues even if headcount drops below 10. Many startups in Baner, Koregaon Park and Viman Nagar cross this threshold without establishing compliance, creating exposure when employees resign after 5 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How does the new labour code affect Pune IT company financials?</h3>
                        <div class="faq-expanded__a"><p>The Social Security Code 2020 (effective November 2025) requires recognizing increased gratuity liability as Past Service Cost in March 31, 2026 financial statements. Under Ind AS 19, the entire increase is recognized immediately in P&L. Under AS 15, split between vested and non-vested. Companies must obtain fresh actuarial valuations reflecting the new 50% wage definition.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can gratuity be forfeited by a Pune employer?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only under Section 4(6) - if the employee's termination is for misconduct involving riotous or violent behaviour, or any act that caused damage or loss to the employer's property. The forfeiture must follow proper procedural safeguards. Partial forfeiture to the extent of damage/loss is permissible. Patron advises on legally compliant forfeiture procedures.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Gratuity kaise calculate hoti hai?</strong> Gratuity = Last Drawn Wages x 15/26 x Completed Years. Wages include basic + DA; must be minimum 50% of CTC under new code. Max Rs 20 lakh.</p><p><strong>Pune mein gratuity ka compliance kaise karein?</strong> 10+ employees hone par Act applicable. Permanent: 5 saal baad eligible. Fixed-term: 1 saal baad (new code). Patron Pune office se sab manage karta hai.</p><p><strong>November 2025 mein kya badla?</strong> Fixed-term employees 1 saal baad eligible. Wages must be 50% of CTC. Ind AS 19 Past Service Cost recognition required in March 2026 financials.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Social Security Code 2020 Is Live - Is Your Gratuity Compliance Ready?</h2>
            <div class="content-text">
                
                <p>The Social Security Code, 2020 took effect on <strong>21 November 2025</strong>. Pune employers must have restructured CTC to meet the <strong>50% wage rule</strong> and updated provisions for fixed-term employees eligible after <strong>1 year</strong>. Companies preparing <strong>March 31, 2026 financial statements</strong> must recognize increased liability as Past Service Cost. The <strong>30-day payment deadline</strong> continues; delay attracts interest and potential imprisonment up to 2 years. LIC compulsory insurance under Section 4A is immediately enforceable.</p><p><strong>Get gratuity compliant now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Gratuity%20Compliance%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>. Free compliance assessment.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Gratuity Compliance Right in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Gratuity compliance in Pune spans a complex landscape - from the Payment of Gratuity Act 1972 to the transformative Social Security Code 2020. Whether you operate from Hinjewadi IT Park with hundreds of salaried employees requiring CTC restructuring, or from Chakan MIDC with factory workers and fixed-term staff eligible after 1 year, accurate computation and timely payment are non-negotiable.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi provides end-to-end gratuity services - computation, CTC restructuring, actuarial valuation, LIC enrollment, controlling authority representation, and Ind AS 19 impact assessment.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With 15+ years payroll and labour law practice, 10,000+ businesses served and a 4.9 Google rating, Patron serves both IT and manufacturing sectors across Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Gratuity%20Compliance%20in%20Pune.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Gratuity%20Compliance%20in%20Pune&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20gratuity%20compliance%20services%20in%20Pune.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Gratuity Compliance Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert gratuity calculation and compliance in all major cities</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gratuity-calculation-compliance/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end payroll and employer compliance in Pune</div><div class="pa-cross-grid"><a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/esic-calculation-compliance/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Compliance</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-returns/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect Social Security Code rule-making, wage definition changes, gratuity limit revisions and Controlling Authority procedural updates. Last review: March 2026. Next review: September 2026.</p>
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
