
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
    <title>ESIC Registration in Mumbai - Process, Threshold & Wages</title>
    <meta name="description" content="ESIC registration in Mumbai. ESI Act 1948, 10+ employees, Rs 21,000 wage ceiling, employer 3.25% + employee 0.75%, ESIC portal, Pehchan card, 6 benefits. CA-led. Call +91 945 945 6700.">
    <link rel="canonical" href="/esic-registration/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESIC Registration in Mumbai - Process, Threshold & Wages">
    <meta property="og:description" content="ESIC registration in Mumbai. ESI Act 1948, 10+ employees, Rs 21,000 wage ceiling, employer 3.25% + employee 0.75%, ESIC portal, Pehchan card, 6 benefits. CA-led. Call +91 945 945 6700.">
    <meta property="og:url" content="/esic-registration/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESIC Registration in Mumbai - Process, Threshold & Wages">
    <meta name="twitter:description" content="ESIC registration in Mumbai. ESI Act 1948, 10+ employees, Rs 21,000 wage ceiling, employer 3.25% + employee 0.75%, ESIC portal, Pehchan card, 6 benefits. CA-led. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ESIC Registration in Mumbai",
      "description": "ESIC registration in Mumbai. ESI Act 1948, 10+ employees, Rs 21,000 wage ceiling, employer 3.25% + employee 0.75%, ESIC portal, Pehchan card, 6 benefits. CA-led. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/esic-registration/mumbai",
      "serviceType": "ESIC Registration in Mumbai",
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
        "url": "https://www.patronaccounting.com/esic-registration/mumbai",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "15000",
          "maxPrice": "25000",
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
          "name": "ESIC Registration in India: Process, Benefits and Fees",
          "item": "https://www.patronaccounting.com/esic-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ESIC Registration in Mumbai",
          "item": "https://www.patronaccounting.com/esic-registration/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is ESIC registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESIC registration is the mandatory process of enrolling an establishment with Employees State Insurance Corporation under ESI Act 1948. Applies to establishments employing 10 or more persons where employees earn up to Rs 21,000 per month. Registration creates obligation to contribute 3.25 percent employer plus 0.75 percent employee of gross wages. Covered employees and families receive medical care sickness benefit maternity benefit disablement benefit dependents benefit funeral expenses and unemployment allowance."
          }
        },
        {
          "@type": "Question",
          "name": "Who needs ESIC registration in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Every establishment in Mumbai employing 10 or more persons on any single day in preceding 12 months where any employee earns up to Rs 21,000 per month gross wages. Maharashtra extends coverage to factories shops hotels restaurants cinemas road transport newspapers educational institutions medical institutions and private security agencies. Covers most Mumbai restaurants with 10 plus staff, IT companies, manufacturing units, retail stores, construction companies, security agencies, hospitals, and schools."
          }
        },
        {
          "@type": "Question",
          "name": "What is the ESI contribution rate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Employer contribution 3.25 percent of gross wages per covered employee. Employee contribution 0.75 percent deducted from salary. Total 4 percent of gross wages. Employees earning daily average up to Rs 176 exempt from their contribution but employer still pays 3.25 percent. Deposited by 15th of month following wage month. Late deposit attracts 12 percent per annum simple interest. Rates effective since July 2019."
          }
        },
        {
          "@type": "Question",
          "name": "What is the employee wage ceiling for ESI coverage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 21,000 per month gross wages and Rs 25,000 for persons with disabilities. Only employees earning at or below this ceiling are covered. Gross wages for ESI includes basic salary dearness allowance house rent allowance city compensatory allowance overtime and regular allowances. Excludes annual bonus retrenchment compensation and leave encashment. Ceiling last revised January 2017 from Rs 15,000."
          }
        },
        {
          "@type": "Question",
          "name": "What are the benefits of ESI for employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Six statutory benefits: (1) Medical care for employee and family at ESI hospitals dispensaries and empanelled hospitals from day one. (2) Sickness benefit 70 percent wages up to 91 days. (3) Maternity benefit 100 percent wages up to 26 weeks. (4) Disablement benefit 90 percent wages temporary or permanent lifelong. (5) Dependents benefit 90 percent wages lifelong if employee dies from work injury. (6) Funeral expenses Rs 15,000. Plus unemployment allowance 50 percent wages up to 24 months."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if an employer does not register under ESI?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Severe consequences: penalty under S.85B up to Rs 5,000 per day for continuing non-compliance. Liability for all past contributions from date of applicability plus 12 percent per annum interest on delayed amounts. Prosecution under S.85 with imprisonment up to 1 year. Employer liable for medical expenses ESI would have covered. SPREE 2025 amnesty closed 31 January 2026. Unregistered employers now face full financial exposure. Quick Answers ESIC registration kisko karni padti hai? Agar pichle 12 mahine mein kisi bhi EK din 10+ log kaam kiye aur koi bhi Rs 21,000/month tak kamata hai - toh MANDATORY. Mumbai mein: restaurants (10+ staff), IT companies, factories, retail, construction, security - sab ko. Maharashtra mein shops, hotels, restaurants, schools, hospitals, security agencies sab cover hain. Ek baar cover = hamesha cover. ESI ka contribution kitna? Employer: 3.25%. Employee: 0.75% (salary se katega). Total: 4%. Rs 18,000 salary pe: employee ka Rs 135, employer ka Rs 585 = Rs 720/month per person. 15 tareekh tak deposit karo. Late pe 12% interest. ESI mein kya milta hai employees ko? Bahut kuch! Free medical (employee + family, day one se), bimari pe 70% salary (91 din), maternity 100% salary (26 weeks), disability pe 90% salary, death pe family ko 90% lifelong, funeral Rs 15,000. Sirf 0.75% mein itna sab!"
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
                        ESIC Registration in Mumbai: CA-Led Employer Registration, Employee Enrollment, Contribution Management, and Compliance Under the ESI Act 1948
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Who Must Register:</span> Establishments employing 10+ persons (any single day in preceding 12 months) with employees earning up to Rs 21,000/month (Rs 25,000 for PwD)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Contribution:</span> Employer 3.25% + Employee 0.75% = Total 4% of gross wages. Deposit by 15th of following month</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Benefits:</span> Medical care (employee + family), sickness (70%, 91 days), maternity (100%, 26 weeks), disablement (90%), dependents (90%), funeral (Rs 15,000)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Key Rule:</span> Once-covered-always-covered - coverage continues even if headcount falls below 10</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=ESIC%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20ESIC%20Registration%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESIC%20Registration%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESIC Registration',
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
    'ctaText'    => 'From restaurant chains to IT companies to manufacturing units - Mumbai\'s employers trust Patron for ESIC registration and compliance.',
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
            <a href="#comparison-section" class="toc-btn">Contribution</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Registration in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESIC Registration Services at a Glance</strong></p>
                    <p>ESIC registration = mandatory for 10+ employees (any single day) where any earn up to Rs 21,000/month. Employer 3.25% + Employee 0.75% = 4% total. Deposit by 15th monthly. Once-covered-always-covered. 6 benefits: medical, sickness, maternity, disablement, dependents, funeral + unemployment allowance. Maharashtra: shops, hotels, restaurants, schools, security all covered 10+. Mumbai = India's largest ESI city (40 lakh insured, 2.33 lakh units).</p>
                </div>
                <p>Mumbai is India's largest ESI city. Maharashtra leads with 40 lakh insured persons across 2.33 lakh units. 80,000+ restaurants, IT/BPO companies, manufacturing, retail, construction, security - all with 10+ employees must register. Learn more about <a href="/esic-registration">ESIC registration across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>ESI Act 1948; ESI (Central) Rules 1950; Code on Social Security 2020 (effective Nov 2025)</td></tr>
                        <tr><td>Threshold</td><td>10+ employees on ANY single day in preceding 12 months. Once covered = always covered</td></tr>
                        <tr><td>Wage Ceiling</td><td>Rs 21,000/month gross wages (Rs 25,000 PwD). Only employees below ceiling covered</td></tr>
                        <tr><td>Contribution</td><td>Employer 3.25% + Employee 0.75% = 4%. Deposit by 15th monthly. Late = 12% interest</td></tr>
                        <tr><td>Benefits</td><td>Medical + Sickness (70%) + Maternity (100%, 26 wks) + Disablement (90%) + Dependents (90%) + Funeral</td></tr>
                        <tr><td>Registration</td><td>esic.gov.in (Form 01). 17-digit employer code. Employee IP number within 10 days</td></tr>
                        <tr><td>Non-Compliance</td><td>Rs 5,000/day penalty + 12% interest + prosecution. SPREE amnesty CLOSED (31 Jan 2026)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>ESIC registration almost always coincides with EPF and Professional Tax. Patron integrates with <a href="#">EPF registration</a>, <a href="#">Professional Tax</a>, <a href="/payroll-services/mumbai">payroll services</a>, and <a href="#">company registration</a>.</p>
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
                <h2 class="section-title">What Is ESIC Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESIC registration is the mandatory process of enrolling an establishment with the Employees' State Insurance Corporation under the ESI Act 1948, enabling comprehensive social security (medical, sickness, maternity, disablement, death, unemployment) for eligible employees and their families.</p>
                    <p>Two levels: (1) Employer registration - establishment gets 17-digit code, triggers contribution obligation. (2) Employee enrollment - each eligible employee gets IP number + e-Pehchan card for ESI medical facilities. Within 10 days of joining.</p>
                    <p>10-employee threshold triggered on ANY single day. Once covered = ALWAYS covered (even if headcount drops below 10). Maharashtra extends coverage to shops, hotels, restaurants, educational, medical, security 10+. Learn more at <a href="/esic-registration">our national ESIC practice</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESIC Registration:</strong></p>
                    <ul>
                        <li><strong>10-Employee Threshold:</strong> ANY single day in preceding 12 months. Not average. Not permanent only. One day at 10 = covered. Once covered = always covered.</li>
                        <li><strong>Rs 21,000 Ceiling:</strong> Gross wages (basic+DA+HRA+CCA+overtime). Above ceiling = exempt. Below = mandatorily covered. Rs 25,000 for PwD.</li>
                        <li><strong>4% Contribution:</strong> Employer 3.25% + Employee 0.75%. Deposit by 15th of following month. Late = 12% interest per annum.</li>
                        <li><strong>6 Benefits:</strong> Medical (day one, family), sickness (70%), maternity (100%, 26 wks), disablement (90%), dependents (90%, lifelong), funeral (Rs 15,000).</li>
                        <li><strong>Maharashtra Extension:</strong> Shops, hotels, restaurants, cinemas, transport, newspapers, educational, medical, security - all 10+ covered.</li>
                        <li><strong>SPREE Closed:</strong> Amnesty ended 31 Jan 2026. Unregistered employers now face full backdated exposure + penalties.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESIC Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Labour</span>
                        <strong>ESI Coverage</strong>
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
            <h2 class="section-title">Who Needs ESIC Registration in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Restaurants and Hotels (80,000+ in Mumbai):</strong> Any with 10+ staff (kitchen, service, housekeeping). Most workers below Rs 21,000. ESIC inspectors actively target this sector. <a href="/gst-registration/mumbai">GST registration</a> for food compliance.</p>
                <p><strong>IT/BPO Companies (Powai, Andheri, BKC):</strong> Entry-level developers, support staff, BPO agents earning up to Rs 21,000. Even if senior staff exempt, support staff covered. <a href="#">Company registration</a> with ESI compliance.</p>
                <p><strong>Manufacturing (Thane-Belapur, Andheri MIDC):</strong> Factory workers, machine operators, helpers below Rs 21,000. <a href="#">EPF registration</a> alongside ESIC.</p>
                <p><strong>Security Agencies, Retail, Construction:</strong> Guards (Rs 15,000-21,000 range), sales staff, labourers - all ESI-eligible. <a href="#">Professional Tax</a> integrated.</p>
                <p><strong>MCA-Incorporated Companies (post 23.02.2020):</strong> Auto-registered with ESIC but must still generate sub-codes and employee IP numbers. <a href="/payroll-services/mumbai">Payroll services</a> for ongoing compliance.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Applicability Assessment</td><td>10+ employees any day? Any below Rs 21,000? Factory or extended category? Once-covered-always-covered? Auto-registered via MCA? Historical headcount analysis from payroll records</td></tr>
                        <tr><td>Employer Registration (Form 01)</td><td>File on esic.gov.in: establishment details, director/partner details (Aadhaar, PAN), employee count, bank details. 17-digit employer code issued within 1-3 days</td></tr>
                        <tr><td>Sub-Code for Branches</td><td>Each branch/office/warehouse/sales office needs separate sub-code. BKC office + Powai dev centre + Bhiwandi warehouse = 3 codes. Linked to main employer code</td></tr>
                        <tr><td>Employee Enrollment (IP Numbers)</td><td>Within 10 days of joining: Aadhaar + family details on ESIC portal. IP number generated. e-Pehchan card for medical access. Bulk enrollment for large workforces</td></tr>
                        <tr><td>Monthly Contribution Management</td><td>Calculate employer 3.25% + employee 0.75% per covered employee. Generate challan on ESIC portal. Deposit by 15th. Late = 12% interest. Patron manages monthly cycle</td></tr>
                        <tr><td>Half-Yearly Return (Form 01-A)</td><td>Filed by 12 May (Oct-Mar) and 11 Nov (Apr-Sep). Employee details + contribution confirmation. Patron prepares and files</td></tr>
                        <tr><td>Inspection Coordination</td><td>ESIC Regional Office Maharashtra (Prabhadevi) inspections. Register maintenance (Form 6, Form 11). Wage records, attendance, contribution receipts ready. Zero penalties</td></tr>
                        <tr><td>Integrated Employer Compliance</td><td>ESIC + <a href="#">EPF</a> + <a href="#">Professional Tax</a> + <a href="/payroll-services/mumbai">payroll</a>. Consistent employee data across all portals</td></tr>

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
            <h2 class="section-title">How ESIC Registration Works in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 7-step process covers the complete ESIC lifecycle - from applicability assessment through employer registration, sub-codes, employee enrollment, monthly contributions, half-yearly returns, to ongoing compliance management.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Applicability Assessment</h3>
        <p class="step-description">CA determines: 10+ employees on any day in preceding 12 months? Any earning up to Rs 21,000? Factory or extended category (shop, hotel, restaurant, educational, medical, security)? Once-covered-always-covered applicable? Auto-registered via MCA (post 23.02.2020)? Walk-in at Marine Lines.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Headcount analysed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Wage ceiling verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Category confirmed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ASSESS</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">10+ Employees?</text><text x="60" y="65" font-size="5" fill="#E8712C" font-weight="500" text-anchor="middle" font-family="Arial">Below Rs 21,000?</text></svg></div>
            <span class="illustration-label">Applicable</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Employer Registration (Form 01)</h3>
        <p class="step-description">File Form 01 on esic.gov.in: establishment details (name, address, type), proprietor/partner/director details (Aadhaar, PAN), employee count, date of applicability, bank details. 17-digit employer code issued within 1-3 days. Must register within 15 days of becoming applicable.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 01 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>17-digit code issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registration active</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FORM 01</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">esic.gov.in</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">17-Digit Code</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">1-3 Days</text></svg></div>
            <span class="illustration-label">Employer Registered</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Sub-Code for Branch Offices</h3>
        <p class="step-description">Each branch, sales office, warehouse, or additional premises requires separate sub-code linked to main employer code. BKC + Powai + Bhiwandi + Nariman Point = four codes. Without sub-codes, branch employees cannot access ESI facilities in their area.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All branches mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sub-codes registered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Area coverage correct</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SUB-CODES</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Per Branch</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Linked to Main</text></svg></div>
            <span class="illustration-label">Branches Covered</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Employee Enrollment (IP Numbers)</h3>
        <p class="step-description">Within 10 days of each eligible employee joining: enroll on ESIC portal with Aadhaar + family details (spouse, children, dependent parents). IP (Insured Person) number generated. e-Pehchan card process initiated. Bulk enrollment available for large workforces.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Enrolled within 10 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IP numbers generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>e-Pehchan initiated</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ENROLL</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">IP Number</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">e-Pehchan Card</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Within 10 Days</text></svg></div>
            <span class="illustration-label">Employees Enrolled</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Monthly Contribution Deposit</h3>
        <p class="step-description">Calculate employer 3.25% + employee 0.75% on gross wages of each covered employee. Generate challan on ESIC portal. Deposit total by 15th of following month (online payment). Late deposit: 12% per annum interest. Patron manages the monthly cycle.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Contribution calculated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Challan generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deposited by 15th</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CONTRIBUTE</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">3.25% + 0.75%</text><text x="60" y="55" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">By 15th Monthly</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Online Challan</text></svg></div>
            <span class="illustration-label">Monthly Compliant</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Half-Yearly Return (Form 01-A)</h3>
        <p class="step-description">File by 12 May (for Oct-Mar contribution period) and 11 November (for Apr-Sep period). Confirms employee details, contribution amounts, and compliance declarations. Patron prepares and files both returns for all client establishments.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 01-A filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deadlines met</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RETURN 01-A</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">12 May / 11 Nov</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Half-Yearly</text></svg></div>
            <span class="illustration-label">Returns Filed</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Ongoing Compliance Management</h3>
        <p class="step-description">New employee enrollment (within 10 days), monthly contribution deposits (by 15th), half-yearly returns, accident reporting (within 24 hours), inspection readiness (registers, wage records, attendance), annual wage review for ceiling verification. Continuous obligation.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>New enrollments tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Monthly deposits managed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inspection ready</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">COMPLIANT</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Ongoing</text></svg></div>
            <span class="illustration-label">Fully Compliant</span>
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
            <h2 class="section-title">Documents Required for ESIC Registration</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN of Entity:</strong> Company PAN / LLP PAN / Firm PAN + Aadhaar/PAN of all directors/partners/proprietor.</li><li><strong>Business Registration:</strong> Certificate of Incorporation (CIN), LLP Certificate, Partnership Deed, Gumasta, GST Certificate.</li><li><strong>Address Proof:</strong> Rent agreement, utility bill, property documents of establishment.</li><li><strong>Bank Details:</strong> Cancelled cheque or bank statement of establishment account.</li><li><strong>Employee Information:</strong> List of all employees with wages, date of joining, Aadhaar (for IP number generation).</li><li><strong>Wage Records:</strong> Wage register / salary slips showing gross wages (for ceiling verification).</li><li><strong>Employee Family Details:</strong> Spouse, children, dependent parents for medical coverage and e-Pehchan card.</li><li><strong>Employee Photographs:</strong> For e-Pehchan card issuance.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>SPREE 2025 Amnesty CLOSED:</strong> The amnesty window (penalty-free registration for unregistered employers) ended 31 January 2026. Unregistered employers now face: backdated contributions from date of applicability, 12% per annum interest, up to Rs 5,000/day penalty, and prosecution. Register immediately to minimise exposure. Every month of delay increases liability.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common ESIC Registration Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>10-Employee Threshold Miscounted</td><td>Threshold is ANY single day (not average). Peak seasons (Diwali retail, monsoon construction, festivals restaurants) push above 10 temporarily. One day = covered for year. Once covered = always covered</td><td>Historical headcount analysis from payroll records. Exact date of applicability determined. Once-covered-always-covered explained. No surprises during inspection</td></tr>
                        <tr><td>Rs 21,000 Wage Ceiling Misunderstood</td><td>Wages includes HRA, CCA, overtime - not just basic. Many employers exclude these, incorrectly exempting employees who should be covered</td><td>Gross wages calculated per ESI definition for each employee. Correct coverage determination. No inspection liability for miscalculation</td></tr>
                        <tr><td>Restaurants Not Registering</td><td>80,000+ Mumbai restaurants with 10+ staff. Many unregistered - rotating staff, part-time, cash payments. ESIC inspectors actively target. Rs 5,000/day penalty</td><td>Restaurant establishments registered. All eligible employees enrolled. Monthly compliance managed. Inspection readiness ensured</td></tr>
                        <tr><td>Auto-Registration Not Followed Up</td><td>MCA-incorporated companies (post 23.02.2020) auto-registered but still need sub-codes, employee enrollment, contributions, returns. Many assume auto = full compliance</td><td>Post-auto-registration steps completed: sub-codes generated, employees enrolled, first contribution deposited, compliance cycle established</td></tr>
                        <tr><td>Contribution Deposit Delayed</td><td>15th of following month is a hard deadline. Late = 12% interest per annum. Chronic delay = prosecution. Manual payroll processes often miss</td><td>Monthly contribution calendar managed. Challan generated automatically. Deposit tracked. Zero late payments. <a href="/payroll-services/mumbai">Payroll</a> integration</td></tr>

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
            <h2 class="section-title">ESIC Registration Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ESIC Employer Registration</td><td>FREE (no government fee)</td></tr>
                        <tr><td>Monthly Contribution</td><td>4% of gross wages (3.25% employer + 0.75% employee)</td></tr>
                        <tr><td>Patron: Registration + First Month</td><td>Rs 5,000 - Rs 15,000</td></tr>
                        <tr><td>Patron: Monthly Compliance</td><td>Rs 3,000 - Rs 10,000/month</td></tr>
                        <tr><td>Patron: Half-Yearly Return</td><td>Rs 3,000 - Rs 5,000 per return</td></tr>
                        <tr><td>Late Deposit Interest</td><td>12% per annum (simple interest)</td></tr>
                        <tr><td>Non-Registration Penalty</td><td>Up to Rs 5,000/day + prosecution</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESIC Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESIC%20Registration%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Applicability Assessment</td><td>1 day</td></tr>
                        <tr><td>Employer Registration (Form 01)</td><td>1-3 days</td></tr>
                        <tr><td>Sub-Code for Branches</td><td>2-5 days</td></tr>
                        <tr><td>Employee Enrollment (IP Numbers)</td><td>Within 10 days of joining</td></tr>
                        <tr><td>First Contribution Deposit</td><td>By 15th of following month</td></tr>
                        <tr><td>e-Pehchan Card</td><td>2-4 weeks after enrollment</td></tr>
                        <tr><td>Ongoing</td><td>Monthly contributions + half-yearly returns</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Walk-in at Patron's Marine Lines, Mumbai office. ESIC Regional Office Maharashtra at Prabhadevi, Mumbai 400025. ESIC portal at esic.gov.in. ESIC hospitals: Andheri (K.K. Nagar), Worli, Model Hospital Marol. SPREE 2025 amnesty has CLOSED - unregistered employers face full backdated liability. Register immediately. Every month of delay increases financial exposure by contributions + 12% interest + penalties.</p>

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
            <h2 class="section-title">Why Choose Patron for ESIC Registration in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Complete ESIC Lifecycle</h3><p>Not just registration - entire lifecycle: applicability, Form 01, sub-codes, employee enrollment, monthly contributions, half-yearly returns, inspection prep, accident reporting, benefit guidance.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>10-Employee Threshold Expertise</h3><p>Historical payroll analysis determines exact applicability date. Once-covered-always-covered explained. Seasonal/temporary workers included. No inspection surprises.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Mumbai Industry Knowledge</h3><p>Restaurants (rotating staff), IT (mix of exempt and covered), manufacturing (shift/overtime), construction (project workers), security (multi-site deployment). Each has unique ESI challenges.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>EPF + ESIC + PT Integrated</h3><p>ESIC + <a href="#">EPF</a> + <a href="#">Professional Tax</a> + <a href="/payroll-services/mumbai">payroll</a>. Consistent data. No duplication. 10,000+ businesses, 4.9 rating.</p></article>
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
                <p>Four offices: Pune, Mumbai, Delhi, Gurugram. Serving restaurants, IT companies, manufacturers, retail chains, construction companies, security agencies, and startups across Mumbai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESI Contribution Calculation</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Component</th><th>Rate</th><th>Example (Rs 18,000/month)</th></tr></thead>
                    <tbody>
                        <tr><td>Employee Contribution</td><td>0.75% of gross wages</td><td>Rs 135/month</td></tr>
                        <tr><td>Employer Contribution</td><td>3.25% of gross wages</td><td>Rs 585/month</td></tr>
                        <tr><td>Total Contribution</td><td>4.00% of gross wages</td><td>Rs 720/month per employee</td></tr>
                        <tr><td>10 Employees Total</td><td>-</td><td>Rs 7,200/month</td></tr>
                        <tr><td>Annual Total (10 employees)</td><td>-</td><td>Rs 86,400/year</td></tr>
                        <tr><td>Deposit Deadline</td><td>By 15th of following month</td><td>March wages by 15 April</td></tr>
                        <tr><td>Late Interest</td><td>12% per annum (simple)</td><td>On delayed amount</td></tr>

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
                
                <p>Mumbai employers registering ESIC often need:</p>
                <ul><li><a href="/esic-registration">ESIC Registration (India)</a> - National overview.</li>
                    <li><a href="#">EPF Registration in Mumbai</a> - Provident fund (20+ employees).</li>
                    <li><a href="#">Professional Tax in Mumbai</a> - Maharashtra PTRC/PTEC.</li>
                    <li><a href="/payroll-services/mumbai">Payroll Services in Mumbai</a> - Complete payroll management.</li>
                    <li><a href="#">Company Registration in Mumbai</a> - Business entity.</li>
                    <li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a> - Tax compliance.</li>
                    <li><a href="/trademark-registration/mumbai">Trademark Registration in Mumbai</a> - Brand protection.</li>
                    <li><a href="/gst-registration">GST Registration (India)</a> - National GST.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for ESIC Registration</h2>
            <div class="content-text">
                
                <p><strong>ESI Act 1948 - Section 1(5):</strong></p>
                <ul><li>Applies to 10+ employees. Maharashtra extends to shops, hotels, restaurants, educational, medical, security. Once covered = always covered.</li></ul>
                <p style="margin-top:16px;"><strong>Section 2(9) - Wage Ceiling:</strong></p>
                <ul><li>Rs 21,000/month gross (Rs 25,000 PwD). Includes basic, DA, HRA, CCA, overtime. Excludes bonus, retrenchment, leave encashment.</li></ul>
                <p style="margin-top:16px;"><strong>Contribution (3.25% + 0.75%):</strong></p>
                <ul><li>Total 4%. Deposit by 15th monthly. Late = 12% interest. Employees up to Rs 176/day exempt from their 0.75%.</li></ul>
                <p style="margin-top:16px;"><strong>S.38-56 Benefits:</strong> Medical (day one), sickness (70%, 91 days), maternity (100%, 26 weeks), disablement (90%), dependents (90%, lifelong), funeral (Rs 15,000).</p>
                <p style="margin-top:16px;"><strong>S.85B Penalty:</strong> Up to Rs 5,000/day. Prosecution under S.85. 12% interest on delayed contributions.</p>
                <p style="margin-top:16px;"><strong>Portals:</strong> <a href="https://esic.gov.in" target="_blank" rel="noopener">ESIC</a> | <a href="https://romaharashtra.esic.gov.in" target="_blank" rel="noopener">ESIC Maharashtra</a> | <a href="https://shramsuvidha.gov.in" target="_blank" rel="noopener">Shram Suvidha</a> | <a href="https://indiacode.nic.in" target="_blank" rel="noopener">India Code</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: ESIC Registration in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about ESIC registration, who needs it in Mumbai, contribution rates, wage ceiling, employee benefits, and non-compliance consequences.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESIC Registration',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is ESIC registration?</h3>
                        <div class="faq-expanded__a"><p>ESIC registration is the mandatory process of enrolling an establishment with Employees State Insurance Corporation under ESI Act 1948. Applies to establishments employing 10 or more persons where employees earn up to Rs 21,000 per month. Registration creates obligation to contribute 3.25 percent employer plus 0.75 percent employee of gross wages. Covered employees and families receive medical care sickness benefit maternity benefit disablement benefit dependents benefit funeral expenses and unemployment allowance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who needs ESIC registration in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Every establishment in Mumbai employing 10 or more persons on any single day in preceding 12 months where any employee earns up to Rs 21,000 per month gross wages. Maharashtra extends coverage to factories shops hotels restaurants cinemas road transport newspapers educational institutions medical institutions and private security agencies. Covers most Mumbai restaurants with 10 plus staff, IT companies, manufacturing units, retail stores, construction companies, security agencies, hospitals, and schools.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the ESI contribution rate?</h3>
                        <div class="faq-expanded__a"><p>Employer contribution 3.25 percent of gross wages per covered employee. Employee contribution 0.75 percent deducted from salary. Total 4 percent of gross wages. Employees earning daily average up to Rs 176 exempt from their contribution but employer still pays 3.25 percent. Deposited by 15th of month following wage month. Late deposit attracts 12 percent per annum simple interest. Rates effective since July 2019.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the employee wage ceiling for ESI coverage?</h3>
                        <div class="faq-expanded__a"><p>Rs 21,000 per month gross wages and Rs 25,000 for persons with disabilities. Only employees earning at or below this ceiling are covered. Gross wages for ESI includes basic salary dearness allowance house rent allowance city compensatory allowance overtime and regular allowances. Excludes annual bonus retrenchment compensation and leave encashment. Ceiling last revised January 2017 from Rs 15,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What are the benefits of ESI for employees?</h3>
                        <div class="faq-expanded__a"><p>Six statutory benefits: (1) Medical care for employee and family at ESI hospitals dispensaries and empanelled hospitals from day one. (2) Sickness benefit 70 percent wages up to 91 days. (3) Maternity benefit 100 percent wages up to 26 weeks. (4) Disablement benefit 90 percent wages temporary or permanent lifelong. (5) Dependents benefit 90 percent wages lifelong if employee dies from work injury. (6) Funeral expenses Rs 15,000. Plus unemployment allowance 50 percent wages up to 24 months.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if an employer does not register under ESI?</h3>
                        <div class="faq-expanded__a"><p>Severe consequences: penalty under S.85B up to Rs 5,000 per day for continuing non-compliance. Liability for all past contributions from date of applicability plus 12 percent per annum interest on delayed amounts. Prosecution under S.85 with imprisonment up to 1 year. Employer liable for medical expenses ESI would have covered. SPREE 2025 amnesty closed 31 January 2026. Unregistered employers now face full financial exposure.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>ESIC registration kisko karni padti hai?</strong> Agar pichle 12 mahine mein kisi bhi EK din 10+ log kaam kiye aur koi bhi Rs 21,000/month tak kamata hai - toh MANDATORY. Mumbai mein: restaurants (10+ staff), IT companies, factories, retail, construction, security - sab ko. Maharashtra mein shops, hotels, restaurants, schools, hospitals, security agencies sab cover hain. Ek baar cover = hamesha cover.</p>
                <p><strong>ESI ka contribution kitna?</strong> Employer: 3.25%. Employee: 0.75% (salary se katega). Total: 4%. Rs 18,000 salary pe: employee ka Rs 135, employer ka Rs 585 = Rs 720/month per person. 15 tareekh tak deposit karo. Late pe 12% interest.</p>
                <p><strong>ESI mein kya milta hai employees ko?</strong> Bahut kuch! Free medical (employee + family, day one se), bimari pe 70% salary (91 din), maternity 100% salary (26 weeks), disability pe 90% salary, death pe family ko 90% lifelong, funeral Rs 15,000. Sirf 0.75% mein itna sab!</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">SPREE Amnesty is CLOSED - Register Now</h2>
            <div class="content-text">
                
                <p>SPREE 2025 ended 31 January 2026. Unregistered employers now face: backdated contributions from date of applicability (potentially years), 12% per annum interest, up to Rs 5,000/day penalty, prosecution risk. ESIC inspectors actively target Mumbai restaurants, construction, security. Every month of delay increases exposure. Once-covered-always-covered means you cannot escape liability.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESIC%20Registration%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your Establishment with ESIC Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">ESIC registration is mandatory for Mumbai establishments with 10+ employees where any earn up to Rs 21,000/month. Once-covered-always-covered makes this a permanent obligation. Maharashtra extends coverage to shops, hotels, restaurants, schools, hospitals, and security agencies.</p>
                <p style="color:rgba(255,255,255,0.9);">The 4% contribution (3.25% employer + 0.75% employee) funds comprehensive social security: medical care, sickness, maternity, disablement, dependents, funeral, and unemployment benefits. SPREE amnesty has closed - full exposure for unregistered employers.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron delivers complete ESIC lifecycle: applicability assessment, registration, sub-codes, employee enrollment, monthly contributions, half-yearly returns, and inspection prep from Marine Lines. 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESIC%20Registration%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=ESIC%20Registration%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20ESIC%20Registration%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESIC Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides ESIC registration and employer compliance services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">ESIC registration and employer compliance</div>
                <div class="pa-city-grid">
                    <a href="/esic-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/esic-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/esic-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">End-to-end employer compliance</div>
                <div class="pa-cross-grid">
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EPF Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Professional Tax</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/payroll-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
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
            <p>This page covers ESIC registration in Mumbai. Content reviewed half-yearly (Freshness Tier 2) reflecting Code on Social Security 2020 implementation, wage ceiling revisions, and SPREE extensions.</p>
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
