
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Gratuity Calculation in Mumbai - Formula & 5-Year Rule</title>
    <meta name="description" content="CA-assisted gratuity calculation and compliance in Mumbai. Payment of Gratuity Act, new labour codes, fixed-term eligibility. Serving BKC, Powai, MIDC. Call +91 945 945 6700.">
    <link rel="canonical" href="/gratuity-calculations-compliance/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Gratuity Calculation in Mumbai - Formula & 5-Year Rule">
    <meta property="og:description" content="CA-assisted gratuity calculation and compliance in Mumbai. Payment of Gratuity Act, new labour codes, fixed-term eligibility. Serving BKC, Powai, MIDC. Call +91 945 945 6700.">
    <meta property="og:url" content="/gratuity-calculations-compliance/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gratuity Calculation in Mumbai - Formula & 5-Year Rule">
    <meta name="twitter:description" content="CA-assisted gratuity calculation and compliance in Mumbai. Payment of Gratuity Act, new labour codes, fixed-term eligibility. Serving BKC, Powai, MIDC. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Gratuity Calculation in Mumbai - Formula & 5-Year Rule",
      "description": "CA-assisted gratuity calculation and compliance in Mumbai. Payment of Gratuity Act, new labour codes, fixed-term eligibility. Serving BKC, Powai, MIDC. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gratuity-calculations-compliance/mumbai",
      "serviceType": "Gratuity Calculation in Mumbai - Formula & 5-Year Rule",
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
        "url": "https://www.patronaccounting.com/gratuity-calculations-compliance/mumbai",
        "price": "20"
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
          "name": "Gratuity Calculations Compliance",
          "item": "https://www.patronaccounting.com/gratuity-calculations-compliance"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Gratuity Calculation in Mumbai - Formula & 5-Year Rule",
          "item": "https://www.patronaccounting.com/gratuity-calculations-compliance/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles gratuity complaints in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Controlling Authority under the Payment of Gratuity Act in Mumbai is the Assistant Labour Commissioner ALC at the Office of the Labour Commissioner Worli Mumbai. Employees can file Form I with the ALC for gratuity payment disputes. The ALC adjudicates disputes and can direct the employer to pay within a specified period. Patron represents Mumbai employers before the ALC at Worli."
          }
        },
        {
          "@type": "Question",
          "name": "How is gratuity calculated in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Gratuity for Act-covered employees is calculated using Gratuity equals 15 times Last Drawn Salary times Completed Years of Service divided by 26. Last drawn salary includes basic pay and dearness allowance. Under the new labour codes effective 21 November 2025 wages must be at least 50 percent of total CTC. Service years exceeding 6 months in the final year are rounded up. Maximum cap is Rs 20 lakh."
          }
        },
        {
          "@type": "Question",
          "name": "Are fixed-term employees in Mumbai eligible for gratuity?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes under the Social Security Code 2020 effective 21 November 2025 fixed-term employees become eligible for gratuity after 1 year of continuous service. This is a significant change from the previous 5-year requirement. The calculation formula remains the same. Mumbai IT companies at Powai and construction firms with large fixed-term workforces must now provision and pay gratuity for these employees."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if an employer in Mumbai delays gratuity payment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If gratuity is not paid within 30 days of becoming payable the employer must pay interest at 10 percent per annum on the delayed amount. The employee can file a complaint with the ALC at Worli Mumbai. Under Section 9 non-payment can attract a penalty of up to Rs 10,000 or imprisonment of up to 6 months. Patron ensures Mumbai clients pay within the 30-day window."
          }
        },
        {
          "@type": "Question",
          "name": "Is gratuity taxable in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Gratuity is tax-exempt up to Rs 20 lakh for private sector employees covered under the Payment of Gratuity Act. Any amount exceeding Rs 20 lakh is taxable as income from salaries at the employee applicable slab rate. For government employees gratuity is fully exempt. The Rs 20 lakh exemption limit was increased from Rs 10 lakh via notification in 2019."
          }
        },
        {
          "@type": "Question",
          "name": "What is the impact of new labour codes on gratuity in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Social Security Code 2020 effective 21 November 2025 makes three key changes. Fixed-term employees eligible after 1 year instead of 5 years. Wages for gratuity must be at least 50 percent of total CTC. Unified wage definition standardises the gratuity base. For Mumbai employers this means higher liabilities salary restructuring and updated provisioning."
          }
        },
        {
          "@type": "Question",
          "name": "Do establishments with less than 10 employees need to pay gratuity?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Payment of Gratuity Act applies to establishments with 10 or more employees. Establishments with fewer than 10 are not legally required under the Act. However many Mumbai employers voluntarily provide gratuity through employment contracts or company policy. If offered contractually it becomes a binding obligation even for smaller establishments."
          }
        },
        {
          "@type": "Question",
          "name": "Can an employee forfeit gratuity in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Gratuity can be forfeited wholly or partially under Section 4(6) if service is terminated for riotous or disorderly conduct or violence against the employer or property or for moral turpitude committed during employment. Simple resignation or poor performance does not allow forfeiture. The Controlling Authority at Worli adjudicates forfeiture disputes."
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
                        Gratuity Calculations & Compliance in Mumbai: Compute, Provision, and Pay Correctly
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Formula:</span> Gratuity = (15 x Last Drawn Salary x Years of Service) / 26. Last drawn = basic + DA. Wages must be >= 50% of CTC under new codes</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> 5 years continuous service (permanent). 1 year for fixed-term employees under Social Security Code 2020 (effective 21 Nov 2025)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Maximum:</span> Rs 20 lakh tax-exempt cap for private sector. Above this = ex-gratia, fully taxable. Payment within 30 days; delay = 10% p.a. interest</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>New Codes:</span> Effective 21 November 2025: wages >= 50% of CTC for gratuity base. Fixed-term 1-year eligibility. Salary restructuring required</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Gratuity%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Gratuity%20Calculations%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Gratuity%20Calculations%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Gratuity Compliance',
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
    'ctaText'    => 'From BKC banking institutions to Powai IT firms to Andheri MIDC manufacturers to Bandra hospitality chains - Mumbai\'s employers trust Patron for gratuity compliance.',
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
            <a href="#what-section" class="toc-btn">What Is Gratuity</a>
            <a href="#who-section" class="toc-btn">Who Complies</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Costs</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Eligibility</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Gratuity Compliance in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Gratuity Compliance Services at a Glance</strong></p>
                    <p>Formula: (15 x Last Drawn Salary x Years) / 26. Eligibility: 5 years permanent, 1 year fixed-term (new code). Max Rs 20 lakh tax-exempt. Pay within 30 days (10% interest on delay). New labour codes (21 Nov 2025): wages >= 50% CTC. Mumbai = India's largest private workforce. BKC BFSI long-tenure. Powai IT fixed-term. MIDC factory. ALC Worli.</p>
                </div>
                <p>Mumbai is India's largest private sector employment hub. BKC and Nariman Point house BFSI with thousands of long-tenure employees. Powai and Andheri have IT/ITES with fixed-term workforces. Andheri MIDC and Thane-Belapur employ factory workers. Hospitality across Bandra, Colaba, BKC.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Formula (Act)</td><td>(15 x Last Drawn Salary x Years) / 26</td></tr>
                        <tr><td>Eligibility (Permanent)</td><td>5 years continuous service (4 yrs 240 days may qualify)</td></tr>
                        <tr><td>Eligibility (Fixed-Term)</td><td>1 year (Social Security Code 2020, effective 21 Nov 2025)</td></tr>
                        <tr><td>Maximum Cap</td><td>Rs 20 lakh (tax-exempt). Above = ex-gratia, taxable</td></tr>
                        <tr><td>Payment</td><td>Within 30 days of becoming payable. Delay = 10% p.a.</td></tr>
                        <tr><td>New Code Impact</td><td>Wages >= 50% of CTC for gratuity base. Restructuring needed</td></tr>
                        <tr><td>Authority</td><td>ALC (Assistant Labour Commissioner), Worli, Mumbai</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Patron's Marine Lines office handles end-to-end gratuity compliance. Related: <a href="/payroll-services">payroll services</a>, <a href="/esic-calculation-and-compliance-services">ESIC compliance</a>, <a href="/pf-registration">PF registration</a>, <a href="/accounting-services">accounting services</a>.</p>
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
                    
                    <p>Gratuity is a statutory terminal benefit paid by an employer to an employee as recognition of long-term service, calculated at the rate of 15 days' wages for each completed year of service, payable upon retirement, resignation, superannuation, death, or disablement under the Payment of Gratuity Act, 1972.</p>
                    <p>Applies to establishments with 10+ employees. Social Security Code 2020 (effective 21 Nov 2025) introduces 1-year eligibility for fixed-term employees and mandates wages >= 50% of CTC as the gratuity base.</p>
                    <p>ALC at Worli handles disputes. More at <a href="https://clc.gov.in" target="_blank" rel="noopener">clc.gov.in</a>. Related: <a href="/payroll-services">payroll services</a>, <a href="/pf-registration">PF registration</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Gratuity Compliance:</strong></p>
                    <ul>
                        <li><strong>Formula:</strong> (15 x Last Drawn Salary x Completed Years) / 26. Last drawn = basic + DA. Round up if > 6 months in final year. Max Rs 20 lakh.</li>
                        <li><strong>5-Year Service:</strong> Minimum for permanent employees. 4 years 240 days may qualify per judicial interpretation. Not required for death/disablement.</li>
                        <li><strong>1-Year Fixed-Term:</strong> Social Security Code 2020 (21 Nov 2025). Pro-rata gratuity. Major impact for Powai IT and construction sectors.</li>
                        <li><strong>50% Wage Rule:</strong> Code on Wages 2019. Wages must be >= 50% of total CTC. Increases gratuity base for BKC BFSI with 30-40% basic pay structures.</li>
                        <li><strong>30-Day Payment:</strong> Must pay within 30 days of exit. Delay = 10% p.a. interest. Non-payment = Rs 10,000 fine or 6 months imprisonment (Section 9).</li>
                        <li><strong>ALC Worli:</strong> Controlling Authority for Mumbai. Form I filing. Dispute adjudication. Penalty enforcement. Patron represents employers.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Gratuity Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Gratuity</span>
                        <strong>Paid</strong>
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
            <h2 class="section-title">Which Mumbai Employers Must Comply?</h2>
            <div class="content-text">
                
                <p><strong>BFSI (BKC, Nariman Point):</strong> Long-tenure employees. Largest gratuity liabilities. 50% wage restructuring increases base by 25-50%. <a href="/payroll-services">Payroll services</a>.</p>
                <p><strong>IT/ITES (Powai, Andheri):</strong> Fixed-term employees now eligible after 1 year. High attrition. New provisioning requirements for contract staff. <a href="/pf-registration">PF registration</a>.</p>
                <p><strong>Manufacturing (Andheri MIDC, Thane-Belapur):</strong> Factory workers covered since inception. 5+ years service. Revised wage base increases calculation. <a href="/esic-calculation-and-compliance-services">ESIC compliance</a>.</p>
                <p><strong>Hospitality + Retail (Bandra, Colaba, BKC):</strong> Seasonal/contract staff now eligible at 1 year. Hotels, restaurants, event management, retail chains. <a href="/shop-act-registration">Shop Act</a>.</p>
                <p><strong>Any Establishment (10+ Employees):</strong> Including construction, media, education, NGOs, professional firms. Maharashtra Shops & Establishments Act extends coverage. <a href="/private-limited-company-compliance">Company compliance</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Gratuity Compliance Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Gratuity Calculation</td><td>Statutory formula computation per employee. Basic + DA wage base verification. 50% CTC compliance check under new codes. For BKC BFSI with complex CTC structures, each component mapped to determine correct wage base</td></tr>
                        <tr><td>Annual Provisioning</td><td>Actuarial valuation (Ind AS 19 / AS 15) or simplified computation for financial statements. Defined benefit plan reporting. Discount rates, salary growth, attrition assumptions. Coordinated with statutory audit</td></tr>
                        <tr><td>Salary Restructuring</td><td>CTC analysis to ensure wages >= 50% of total remuneration under new labour codes. Impact on take-home pay, PF contributions, and gratuity liability. For Mumbai employers with 30-40% basic structures</td></tr>
                        <tr><td>Payment Processing</td><td>Exit gratuity computation within full-and-final settlement. Service year verification. Payment within 30-day statutory window. For Powai IT with frequent exits, integrated into F&F workflow</td></tr>
                        <tr><td>Form I Filing</td><td>Filing gratuity payment details with ALC at Worli, Mumbai. Confirms compliance. Protects against future employee disputes. Per-exit or batch filing for high-volume employers</td></tr>
                        <tr><td>Fixed-Term Employee Tracking</td><td>Systematic tracking of fixed-term employee tenure for 1-year gratuity trigger under Social Security Code 2020. Proactive identification before exit. For IT and construction companies</td></tr>
                        <tr><td>Gratuity Trust/Insurance Advisory</td><td>Establishing gratuity trust fund or group gratuity insurance (LIC/ICICI/SBI Life). Tax-deductible contributions under Section 36(1)(v) Income Tax Act. For large Mumbai employers</td></tr>
                        <tr><td>Dispute Representation</td><td>Before ALC Worli for employee gratuity complaints. Employer reply preparation, document compilation, hearing attendance. End-to-end dispute management for Mumbai employers</td></tr>

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
            <h2 class="section-title">Gratuity Compliance Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers complete gratuity compliance from applicability determination through wage verification, formula calculation, payment, Form I filing, to annual provisioning.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Determine Applicability and Employee Eligibility</h3>
        <p class="step-description">Verify 10+ employees (Act coverage). Identify eligible: permanent with 5+ years continuous service, fixed-term with 1+ year (Social Security Code 2020 from 21 Nov 2025). For Powai IT with high attrition, track each employee's join date and service status. Patron offers free compliance assessment at Marine Lines.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10+ employee check</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Permanent/fixed-term mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Death/disablement = no minimum</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CHECK</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">10+ Employees</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">5yr / 1yr Eligible</text></svg></div>
            <span class="illustration-label">Assessed</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Verify Wage Base for Calculation</h3>
        <p class="step-description">Confirm 'last drawn salary' (basic + DA) per eligible employee. Under new codes, verify wages >= 50% of total CTC. If not, excess allowances above 50% are deemed wages. For BKC BFSI with heavy allowance structures (HRA, special allowance), this may increase gratuity base by 25-50%.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Basic + DA confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>50% CTC rule checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Wage base determined</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">WAGE BASE</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Basic + DA</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">>= 50% CTC</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">New Code Check</text></svg></div>
            <span class="illustration-label">Wage Base Set</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Calculate Gratuity Using Statutory Formula</h3>
        <p class="step-description">Apply: (15 x Last Drawn Salary x Completed Years) / 26. Round up if final year > 6 months (e.g., 7y 8m = 8 years). Cap at Rs 20 lakh. Non-Act covered: divide by 30 instead of 26. Cross-verify with payroll data. Patron runs computation per exiting employee.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Formula applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Years rounded correctly</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 20L cap checked</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CALCULATE</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">15 x Salary x Yrs</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">Divided by 26</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Max Rs 20L</text></svg></div>
            <span class="illustration-label">Calculated</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Process Gratuity Payment Within 30 Days</h3>
        <p class="step-description">On exit (resignation, retirement, death, disablement): pay within 30 days of becoming payable. Delay = 10% p.a. interest. For Powai IT with monthly exit batches, Patron integrates into full-and-final settlement workflow alongside PF, leave encashment, notice period.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>30-day window tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Payment processed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>F&F integrated</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAY</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Within 30 Days</text><text x="60" y="55" font-size="5" fill="#E8712C" font-weight="500" text-anchor="middle" font-family="Arial">Delay = 10% Int</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">F&F Integrated</text></svg></div>
            <span class="illustration-label">Paid</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">File Form I with Controlling Authority</h3>
        <p class="step-description">Submit gratuity payment details to ALC at Worli, Mumbai. Includes: employee details, service period, last drawn salary, gratuity amount, and payment date. Confirms compliance. Protects against future disputes from former employees.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form I prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed with ALC Worli</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance confirmed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FORM I</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">ALC Worli</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Filed After Pay</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Dispute Protection</text></svg></div>
            <span class="illustration-label">Filed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Maintain Records and Provision for Future Liability</h3>
        <p class="step-description">Maintain gratuity register: employee-wise join date, salary progression, service years, estimated liability. Provision in financial statements (Ind AS 19 / AS 15 actuarial valuation). Review annually. Coordinate disclosure with statutory audit for BKC corporates.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Register maintained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Actuarial valuation done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual review completed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">PROVISIONED</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Annually Reviewed</text></svg></div>
            <span class="illustration-label">Provisioned</span>
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
            <h2 class="section-title">Documents Required for Gratuity Compliance</h2>
            <div class="content-text">
                
                <ul><li><strong>Employee Master Data:</strong> Join date, designation, employment type (permanent/fixed-term), exit date.</li><li><strong>Salary Records:</strong> Monthly payslips with basic, DA, total CTC breakup. Historical data for provisioning.</li><li><strong>Attendance/Service Records:</strong> Proof of continuous service. Leave records, break-in-service details, 5-year/1-year completion.</li><li><strong>Exit Documentation:</strong> Resignation letter, acceptance, last working day, or death/disablement certificate.</li><li><strong>Form I:</strong> Gratuity application filed with ALC Worli for payment confirmation or dispute.</li><li><strong>Form F (Nomination):</strong> Employee's gratuity beneficiary nomination under Section 6.</li><li><strong>Actuarial Report:</strong> For Ind AS 19 / AS 15 financial statement disclosure. From registered actuary.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai Tip:</strong> Employees transferred between branches across Maharashtra (BKC to Thane and back) do not restart the 5-year clock. Service at all branches within the same employer counts as continuous service. Patron consolidates multi-branch records for accurate computation.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Gratuity Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>50% Wage Restructuring</td><td>BKC BFSI and Powai IT had basic at 30-40% of CTC. New code mandates wages >= 50%. Restructuring increases gratuity base by 25-50%. Impacts take-home pay, PF, and ESI simultaneously</td><td>Complete CTC analysis. Wage restructuring advisory. Impact modelling on gratuity, PF, ESI, and take-home. Phased implementation guidance for Mumbai employers</td></tr>
                        <tr><td>Fixed-Term 1-Year Tracking</td><td>Powai IT and construction companies lack systems for fixed-term tenure tracking. 1-year trigger missed at exit. ALC Worli disputes from former employees</td><td>Systematic fixed-term employee tracking. Automatic gratuity trigger at 1-year mark. Exit computation included in F&F. Proactive compliance prevents disputes</td></tr>
                        <tr><td>Death/Disablement Exception</td><td>5-year minimum does not apply for death or permanent disablement. Mumbai employers occasionally deny gratuity to families of deceased < 5-year employees</td><td>Clear policy guidance. Death/disablement gratuity calculated and paid promptly to nominee. Form F nomination maintained. ALC compliance confirmed</td></tr>
                        <tr><td>30-Day Payment Delay</td><td>F&F disputes (notice recovery, laptop, loan) delay gratuity beyond 30 days. 10% interest accrues. Employee complaints at ALC Worli</td><td>Gratuity payment separated from F&F disputes. 30-day window tracked. Interest-free payment ensured. Other settlements processed independently</td></tr>
                        <tr><td>Ind AS 19 Actuarial Complexity</td><td>BKC corporates: defined benefit plan with actuarial assumptions. New code changes (higher wage, 1-year FT) require assumption updates. Significant liability changes in financials</td><td>Actuarial coordination with updated assumptions. Discount rate, salary growth, attrition recalibrated. Seamless integration with statutory audit disclosure</td></tr>

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
            <h2 class="section-title">Gratuity Compliance Costs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Gratuity (Employer to Employee)</td><td>As per formula (max Rs 20 lakh)</td></tr>
                        <tr><td>Interest on Delay</td><td>10% p.a. (if beyond 30 days)</td></tr>
                        <tr><td>Non-Compliance Penalty</td><td>Up to Rs 10,000 or 6 months imprisonment</td></tr>
                        <tr><td>Patron: Per-Exit Computation</td><td>Starting Rs 2,000/employee</td></tr>
                        <tr><td>Patron: Monthly Compliance</td><td>Starting Rs 3,000/month</td></tr>
                        <tr><td>Patron: Salary Restructuring</td><td>Starting Rs 15,000 one-time</td></tr>
                        <tr><td>Patron: Dispute Representation</td><td>Starting Rs 10,000/case</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Gratuity Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Gratuity%20Calculations%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Gratuity Compliance Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Employee becomes eligible</td><td>5 years (permanent) or 1 year (fixed-term)</td></tr>
                        <tr><td>Employee exits</td><td>Calculate gratuity immediately</td></tr>
                        <tr><td>Payment to employee</td><td>Within 30 days (10% interest if delayed)</td></tr>
                        <tr><td>Form I to ALC Worli</td><td>After payment</td></tr>
                        <tr><td>Form F (Nomination)</td><td>At joining / annually</td></tr>
                        <tr><td>Annual provisioning</td><td>Year-end (actuarial or simplified)</td></tr>
                        <tr><td>Salary restructuring</td><td>Ongoing from Nov 2025</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> New labour codes effective 21 November 2025 have expanded gratuity obligations. Fixed-term employees qualify at 1 year. Wages must be 50%+ of CTC. Delayed payment = 10% interest + Section 9 penalties. ALC Worli actively adjudicates complaints. For BKC/Powai/MIDC employers with large workforces, the financial impact can be 25-50% increase in gratuity liabilities.</p>

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
            <h2 class="section-title">Why Choose Patron for Gratuity Compliance in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>New Labour Code Expertise</h3><p>Social Security Code 2020 impact advisory since 21 Nov 2025. Salary restructuring, fixed-term provisioning, actuarial coordination for revised wage definition. BKC, Powai, MIDC employers served.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Payroll Integration</h3><p>Gratuity computation integrated into monthly payroll and full-and-final settlement. PF, leave encashment, notice period processed alongside gratuity. 30-day payment window tracked.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>ALC Worli Coordination</h3><p>Form I filing with Assistant Labour Commissioner. Dispute representation during hearings. Familiarity with Mumbai labour administration. Employer reply preparation and evidence compilation.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>10,000+ Businesses Served</h3><p>Payroll and labour law expertise. BKC BFSI, Powai IT, MIDC manufacturing, hospitality across Mumbai. 4.9 rating, 15+ years, 4 offices.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Employers Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram. Payroll, gratuity, and labour law compliance for employers of all sizes.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Gratuity Eligibility by Employment Type</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Employment Type</th><th>Minimum Service</th><th>Formula</th></tr></thead>
                    <tbody>
                        <tr><td>Permanent (Act-Covered)</td><td>5 years continuous</td><td>(15 x Salary x Years) / 26</td></tr>
                        <tr><td>Fixed-Term (New Code)</td><td>1 year continuous</td><td>(15 x Salary x Years) / 26</td></tr>
                        <tr><td>Non-Act Establishment</td><td>5 years continuous</td><td>(15 x Salary x Years) / 30</td></tr>
                        <tr><td>Death/Disablement</td><td>No minimum</td><td>(15 x Salary x Years) / 26</td></tr>
                        <tr><td>Seasonal Worker</td><td>Per season</td><td>7 days' wages per season</td></tr>

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
                
                <p>Mumbai employers managing gratuity often need:</p>
                <ul><li><a href="/payroll-services">Payroll Services</a> - Monthly payroll processing.</li>
                    <li><a href="/esic-calculation-and-compliance-services">ESIC Compliance</a> - Employee insurance.</li>
                    <li><a href="/pf-registration">PF Registration</a> - Provident fund compliance.</li>
                    <li><a href="#">Professional Tax</a> - Maharashtra PT.</li>
                    <li><a href="/statutory-audit">Statutory Audit</a> - Annual audit.</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Books and financials.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Gratuity</h2>
            <div class="content-text">
                
                <p><strong>Payment of Gratuity Act, 1972:</strong></p>
                <ul><li>S.4(1): Payable after 5 years. S.4(1) Proviso: Death/disablement = no minimum. S.4(3): Rs 20 lakh cap. S.4(2): 30-day payment. S.9: Penalty.</li></ul>
                <p style="margin-top:16px;"><strong>Social Security Code, 2020 (21 Nov 2025):</strong></p>
                <ul><li>Fixed-term: 1 year eligibility. Wages >= 50% of CTC. Unified wage definition.</li></ul>
                <p style="margin-top:16px;"><strong>Tax:</strong></p>
                <ul><li>Rs 20 lakh exempt (private sector). Above = taxable. Government = fully exempt. S.36(1)(v) trust deduction.</li></ul>
                <p style="margin-top:16px;"><strong>Mumbai:</strong> ALC at Worli. Maharashtra S&E Act extends coverage. <a href="https://clc.gov.in" target="_blank" rel="noopener">CLC India</a> | <a href="https://mahakamgar.maharashtra.gov.in" target="_blank" rel="noopener">Maharashtra Labour</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: Gratuity Compliance in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about gratuity complaints office, calculation formula, fixed-term eligibility, delayed payment, tax treatment, new labour code impact, small establishments, and forfeiture.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Gratuity Compliance',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles gratuity complaints in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>The Controlling Authority under the Payment of Gratuity Act in Mumbai is the Assistant Labour Commissioner ALC at the Office of the Labour Commissioner Worli Mumbai. Employees can file Form I with the ALC for gratuity payment disputes. The ALC adjudicates disputes and can direct the employer to pay within a specified period. Patron represents Mumbai employers before the ALC at Worli.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How is gratuity calculated in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Gratuity for Act-covered employees is calculated using Gratuity equals 15 times Last Drawn Salary times Completed Years of Service divided by 26. Last drawn salary includes basic pay and dearness allowance. Under the new labour codes effective 21 November 2025 wages must be at least 50 percent of total CTC. Service years exceeding 6 months in the final year are rounded up. Maximum cap is Rs 20 lakh.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Are fixed-term employees in Mumbai eligible for gratuity?</h3>
                        <div class="faq-expanded__a"><p>Yes under the Social Security Code 2020 effective 21 November 2025 fixed-term employees become eligible for gratuity after 1 year of continuous service. This is a significant change from the previous 5-year requirement. The calculation formula remains the same. Mumbai IT companies at Powai and construction firms with large fixed-term workforces must now provision and pay gratuity for these employees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens if an employer in Mumbai delays gratuity payment?</h3>
                        <div class="faq-expanded__a"><p>If gratuity is not paid within 30 days of becoming payable the employer must pay interest at 10 percent per annum on the delayed amount. The employee can file a complaint with the ALC at Worli Mumbai. Under Section 9 non-payment can attract a penalty of up to Rs 10,000 or imprisonment of up to 6 months. Patron ensures Mumbai clients pay within the 30-day window.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is gratuity taxable in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Gratuity is tax-exempt up to Rs 20 lakh for private sector employees covered under the Payment of Gratuity Act. Any amount exceeding Rs 20 lakh is taxable as income from salaries at the employee applicable slab rate. For government employees gratuity is fully exempt. The Rs 20 lakh exemption limit was increased from Rs 10 lakh via notification in 2019.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the impact of new labour codes on gratuity in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>The Social Security Code 2020 effective 21 November 2025 makes three key changes. Fixed-term employees eligible after 1 year instead of 5 years. Wages for gratuity must be at least 50 percent of total CTC. Unified wage definition standardises the gratuity base. For Mumbai employers this means higher liabilities salary restructuring and updated provisioning.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do establishments with less than 10 employees need to pay gratuity?</h3>
                        <div class="faq-expanded__a"><p>The Payment of Gratuity Act applies to establishments with 10 or more employees. Establishments with fewer than 10 are not legally required under the Act. However many Mumbai employers voluntarily provide gratuity through employment contracts or company policy. If offered contractually it becomes a binding obligation even for smaller establishments.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can an employee forfeit gratuity in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Gratuity can be forfeited wholly or partially under Section 4(6) if service is terminated for riotous or disorderly conduct or violence against the employer or property or for moral turpitude committed during employment. Simple resignation or poor performance does not allow forfeiture. The Controlling Authority at Worli adjudicates forfeiture disputes.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Gratuity ka formula kya hai?</strong> (15 x Last Drawn Salary x Years of Service) / 26. Basic + DA = last drawn. 6 months se zyada serve kiya toh upar round hota hai. Max Rs 20 lakh tax-free.</p>
                <p><strong>Fixed-term employee ko kab milegi?</strong> 1 saal continuous service ke baad (21 November 2025 se). Pehle 5 saal lagta tha.</p>
                <p><strong>Employer ne nahi di toh kya kare?</strong> ALC Worli mein Form I file karo. 30 din mein nahi mili toh 10% interest. Non-payment pe Rs 10,000 fine ya 6 months jail.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">New Labour Codes Are Live - Comply Now</h2>
            <div class="content-text">
                
                <p>Social Security Code 2020 effective 21 November 2025 has expanded gratuity obligations. Fixed-term employees eligible at 1 year. Wages must be 50%+ of CTC. Mumbai employers who have not restructured face non-compliance with gratuity AND PF. Delayed payment = 10% interest + Section 9 penalties. ALC Worli actively adjudicates. For BKC BFSI and Powai IT, liability increase can be 25-50%. Act now.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Gratuity%20Calculations%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Compute, Provision, Pay - Stay Compliant</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Gratuity compliance in Mumbai spans BKC banking professionals with 12-year tenure to Powai IT fixed-term developers qualifying at 1 year to MIDC factory workers with 20 years service. New labour codes have expanded eligibility and increased computation bases.</p>
                <p style="color:rgba(255,255,255,0.9);">Formula: (15 x Salary x Years) / 26. Max Rs 20 lakh. Pay within 30 days. Wages >= 50% CTC. Fixed-term = 1 year. ALC Worli enforces. 10% interest on delay. Section 9 penalties for non-payment.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron provides calculation, provisioning, salary restructuring, payment processing, Form I filing, actuarial coordination, and dispute representation from Marine Lines. 10,000+ businesses, 4.9 rating, 15+ years.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Gratuity%20Calculations%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Gratuity%20Compliance%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Gratuity%20Calculations%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides gratuity calculation and compliance services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">Gratuity and payroll compliance</div>
                <div class="pa-city-grid">
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/gratuity-calculation-and-compliance-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">Payroll and labour compliance</div>
                <div class="pa-cross-grid">
                    <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esic-calculation-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/pf-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Professional Tax</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page covers gratuity calculations and compliance in Mumbai. Content reviewed quarterly (Freshness Tier 1) as new labour code rules and notifications evolve.</p>
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
