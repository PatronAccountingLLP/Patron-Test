

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Gratuity Calculation & Compliance - Rules, Formula & Payout</title>
    <meta name="description" content="Gratuity calculation using 15/26 formula under Payment of Gratuity Act. Compliance, actuarial valuation, and payout services from Rs 4,999. New Labour Code updates.">
    <link rel="canonical" href="/gratuity-calculation-and-compliance-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Gratuity Calculation & Compliance - Rules, Formula & Payout">
    <meta property="og:description" content="Gratuity calculation using 15/26 formula under Payment of Gratuity Act. Compliance, actuarial valuation, and payout services from Rs 4,999. New Labour Code updates.">
    <meta property="og:url" content="/gratuity-calculation-and-compliance-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gratuity Calculation & Compliance - Rules, Formula & Payout">
    <meta name="twitter:description" content="Gratuity calculation using 15/26 formula under Payment of Gratuity Act. Compliance, actuarial valuation, and payout services from Rs 4,999. New Labour Code updates.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Gratuity Calculation: Formula and Rules",
          "description": "Gratuity calculation using 15/26 formula under Payment of Gratuity Act. Compliance, actuarial valuation, and payout services from Rs 4,999. New Labour Code updates.",
          "url": "https://www.patronaccounting.com/gratuity-calculation-and-compliance-services",
          "serviceType": "Gratuity Calculation: Formula and Rules",
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
            "url": "https://www.patronaccounting.com/gratuity-calculation-and-compliance-services",
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
              "name": "Gratuity Calculation: Formula and Rules",
              "item": "https://www.patronaccounting.com/gratuity-calculation-and-compliance-services"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How is gratuity calculated for private sector employees?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For employees covered under the Payment of Gratuity Act: Gratuity = (15 x Last Drawn Salary x Completed Years of Service) / 26. Last Drawn Salary means Basic Pay + DA only. For non-covered employees, the divisor is 30. If service in the final year exceeds 6 months, it rounds up to the next full year. Maximum tax-free limit: Rs 20 lakh lifetime."
              }
            },
            {
              "@type": "Question",
              "name": "Is gratuity payable before completing 5 years of service?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For permanent employees, 5 years of continuous service is the minimum. However, this is completely waived for death or disablement. Under the Social Security Code 2020 (effective 21 November 2025), fixed-term employees qualify after just 1 year. Courts have also treated 4 years and 240 days as equivalent to 5 years in certain judgments."
              }
            },
            {
              "@type": "Question",
              "name": "What is the maximum tax-free gratuity for private employees?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rs 20 lakh over the entire working lifetime under Section 10(10)(ii) of the Income Tax Act. Any amount exceeding this is taxable as income from salary. Government employees receive fully tax-exempt gratuity with no upper limit. The Rs 20 lakh limit was last revised effective 29 March 2018."
              }
            },
            {
              "@type": "Question",
              "name": "Can an employer forfeit gratuity?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, but only under Section 4(6) of the Payment of Gratuity Act. Gratuity can be forfeited wholly or partially if the employee was terminated for riotous or disorderly conduct, violence against any person, or any act constituting a moral turpitude offence. The employer must have a termination order specifying the grounds."
              }
            },
            {
              "@type": "Question",
              "name": "What is actuarial valuation for gratuity and who needs it?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Actuarial valuation is a mathematical estimate of the present value of future gratuity obligations using discount rates, salary growth, attrition, and mortality assumptions. Companies under Ind AS must carry actuarial valuations under Ind AS 19 (Employee Benefits). Companies under old GAAP follow AS 15. This is mandatory for all companies covered by these standards."
              }
            },
            {
              "@type": "Question",
              "name": "What changed for gratuity under the new Labour Code?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Social Security Code 2020 (effective 21 November 2025) introduced two major changes: (1) fixed-term employees now qualify after 1 year (previously 5), and (2) at least 50% of total remuneration must qualify as wages for gratuity calculation. Both changes significantly increase employer liabilities and may require salary restructuring."
              }
            },
            {
              "@type": "Question",
              "name": "Gratuity kaise calculate hota hai aur kitne saal baad milta hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Gratuity ka formula hai: (15 x Basic Salary + DA x Service ke saal) / 26. Yeh tab milta hai jab aapne ek hi employer ke saath kam se kam 5 saal ki continuous service puri ki ho. Naye Labour Code ke tahat fixed-term employees ko sirf 1 saal ke baad gratuity milegi. Maximum Rs 20 lakh tak tax-free hai. Patron Accounting - +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if the employer delays gratuity payment?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 7(3A), if gratuity is not paid within 30 days, the employer must pay simple interest at 10% p.a. from the date payable until actual payment. Persistent non-payment can result in criminal prosecution with imprisonment up to 2 years under Section 9. The Controlling Authority can order payment with interest on employee complaint. Quick Answers Q: Gratuity formula? A: (15 x Basic+DA x Years) / 26 for covered; /30 for non-covered. Q: Minimum service? A: 5 years permanent; 1 year fixed-term (new code); waived for death/disability. Q: Tax-free limit? A: Rs 20 lakh lifetime cap for private employees. Q: Payment deadline? A: 30 days from date of becoming due. Q: Interest on delay? A: 10% p.a. simple interest under Section 7(3A)."
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
                        Gratuity Calculation and Compliance Services
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">11 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Formula:</span> Gratuity = (15 x Last Drawn Salary x Completed Years) / 26 (covered employees). Last Drawn Salary = Basic + DA only.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> 5 years continuous service (permanent). 1 year for fixed-term under Social Security Code 2020 (effective 21 Nov 2025). Waived for death/disablement.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax-Free Limit:</span> Rs 20 lakh lifetime cap (private sector) under Section 10(10)(ii) IT Act. Government employees: fully exempt, no limit.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Payment:</span> Employer must pay within 30 days (Section 7). Delay: 10% p.a. interest. Non-payment: imprisonment up to 2 years (Section 9).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ employers served. 1,200+ actuarial valuations. 4.9 Google Rating. 15+ years of practice.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Gratuity%20Compliance%20Enquiry&body=Hello%2C%20I%20just%20visited%20your%20Gratuity%20Compliance%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Gratuity%20Compliance%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Gratuity Compliance',
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
    'ctaText'    => 'Gratuity calculation, actuarial valuation, and compliance from Rs 4,999. New Labour Code transition support included.',
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
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is Gratuity</a>
            <a href="#who-section" class="toc-btn">Who Must Comply</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">DIY vs Professional</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Gratuity Calculation and Compliance - Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Gratuity Compliance Services at a Glance</strong></p>
                    <p>Gratuity is calculated as (15 x Last Drawn Basic + DA x Years of Service) / 26 for Act-covered employees. Eligibility: 5 years continuous service (1 year for fixed-term under new Labour Code). Maximum tax-free: Rs 20 lakh. Employer must pay within 30 days. Social Security Code 2020 effective 21 November 2025 expands eligibility and restructures wage definitions.</p>
                </div>
                <p>Gratuity is both a statutory obligation and a valuable retirement benefit. Getting the calculation wrong - using CTC instead of Basic + DA, miscounting service years, or ignoring fixed-term eligibility - exposes employers to disputes and employees to underpayment. Companies under Ind AS must carry actuarial valuations on their balance sheet, making accurate computation a financial reporting requirement, not just an HR exercise.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Formula (Covered)</td><td>(15 x Last Drawn Salary x Years) / 26</td></tr>
<tr><td>Formula (Not Covered)</td><td>(15 x Last Drawn Salary x Years) / 30</td></tr>
<tr><td>Eligibility - Permanent</td><td>5 years continuous service</td></tr>
<tr><td>Eligibility - Fixed-Term</td><td>1 year (Social Security Code 2020, w.e.f. 21 Nov 2025)</td></tr>
<tr><td>Tax-Free Limit (Private)</td><td>Rs 20 lakh lifetime cap - Section 10(10)(ii) IT Act</td></tr>
<tr><td>Payment Deadline</td><td>Within 30 days of becoming due (Section 7)</td></tr>
<tr><td>Starting Price</td><td>Rs 4,999 per engagement (Patron Accounting)</td></tr>
</tbody></table></div></p>
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
                <h2 class="section-title">What Is Gratuity?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Gratuity</strong> is a lump-sum monetary benefit paid by an employer to an employee as a reward for long-term service, governed by the <strong>Payment of Gratuity Act, 1972</strong>, and now the <strong>Social Security Code, 2020</strong>.</p>
<p>The Act applies to every factory, mine, oilfield, plantation, port, railway company, shop, or establishment employing <strong>10 or more persons</strong>. The amount is computed based on last drawn wages (Basic + DA) and completed years of service using the statutory <strong>15/26 formula</strong>. It becomes payable on superannuation, retirement, resignation, death, or disablement.</p>
<p>Once applicable, the Act continues even if employee count drops below 10. The employer must pay within 30 days, with <strong>10% p.a. interest</strong> on delays and <strong>imprisonment up to 2 years</strong> for non-payment (Section 9).</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Gratuity Compliance:</strong></p>
                    <p><strong>Last Drawn Salary:</strong> Basic Pay + DA only. HRA, conveyance, bonus excluded. Under SSC 2020, wages must be at least 50% of total remuneration.</p>
<p><strong>15/26 Formula:</strong> 15 = half a month's salary; 26 = working days (excluding Sundays). Non-covered establishments use divisor 30.</p>
<p><strong>Continuous Service (Section 2A):</strong> 240 days worked in a year (190 days for 5-day week/mines/seasonal).</p>
<p><strong>Actuarial Valuation:</strong> Present value estimate of future gratuity liability under Ind AS 19/AS 15. Uses discount rates, attrition, mortality tables.</p>
<p><strong>Forfeiture (Section 4(6)):</strong> Gratuity may be forfeited for riotous conduct, violence, or moral turpitude offences only.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Gratuity Compliance -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Gratuity</text>
                            <!-- Formula card -->
                            <rect x="40" y="48" width="120" height="30" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="100" y="60" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">(15 x Salary x Years)</text>
                            <text x="100" y="73" font-size="8" fill="#F5A623" font-weight="800" text-anchor="middle" font-family="Arial">/ 26</text>
                            <!-- Rs 20L badge -->
                            <rect x="55" y="88" width="40" height="18" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                            <text x="75" y="100" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Rs 20L</text>
                            <!-- 30 Days badge -->
                            <rect x="105" y="88" width="45" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="127" y="100" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">30 Days</text>
                            <!-- Labels -->
                            <rect x="35" y="115" width="55" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="62" y="125" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Act 1972</text>
                            <rect x="100" y="115" width="60" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="130" y="125" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">SSC 2020</text>
                            <!-- Check -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Payment of Gratuity Act</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Gratuity Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Gratuity Act, 1972</span>
                        <strong>15/26 Formula | Rs 20L Limit</strong>
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
            <h2 class="section-title">Who Must Comply with Gratuity Law?</h2>
            <div class="content-text">
                
                <p><strong>Employers Covered:</strong></p>
<ul>
<li>Every factory, mine, oilfield, plantation, port, and railway company</li>
<li>Every shop or establishment employing <strong>10 or more persons</strong> on any day in the preceding 12 months</li>
<li>Once applicable, continues even if headcount falls below 10</li>
</ul>
<p><strong>Employee Eligibility:</strong></p>
<ul>
<li><strong>Permanent:</strong> 5 years continuous service (Section 4(1))</li>
<li><strong>Fixed-Term:</strong> 1 year (Social Security Code 2020, effective 21 Nov 2025)</li>
<li><strong>Death/Disablement:</strong> Minimum service requirement waived entirely</li>
<li><strong>4 years 8 months (240+ days):</strong> Courts have treated as 5 years in multiple judgments</li>
</ul>
<p><strong>Payable When:</strong> Superannuation, resignation (after min service), retirement, death (to nominee), disablement.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 Gratuity Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Gratuity Calculation</td><td>Accurate 15/26 computation with correct salary components (Basic + DA), service year rounding (6-month rule), and Rs 20 lakh tax-free limit checks.</td></tr>
<tr><td>Actuarial Valuation (Ind AS 19 / AS 15)</td><td>Professional actuarial assessment using projected unit credit method with mortality tables, attrition rates, salary growth, and discount rates for balance sheet reporting.</td></tr>
<tr><td>Gratuity Trust Setup</td><td>Establishing a gratuity trust fund, Income Tax department registration, and ongoing fund management advisory.</td></tr>
<tr><td>Compliance Advisory</td><td>Ensuring compliance with the Act including nomination forms (Form F), annual returns (Form L by 31 January), and record-keeping requirements.</td></tr>
<tr><td>Payout Processing</td><td>Final gratuity computation, TDS deduction (if exceeds Rs 20 lakh), and timely disbursement within the 30-day statutory window.</td></tr>
<tr><td>New Labour Code Transition</td><td>Impact assessment of Social Security Code 2020 on gratuity liability - fixed-term employee eligibility (1 year) and 50% wage rule restructuring.</td></tr>

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
            <h2 class="section-title">7-Step Gratuity Compliance Procedure for Employers</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles end-to-end gratuity compliance - from applicability assessment and Form F collection to actuarial valuation and Form L annual return filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Applicability</h3><p class="step-description">Verify if the establishment employs 10 or more persons on any day in the preceding 12 months. Once applicable, the Act continues even if headcount drops below 10 (Section 1(3), Payment of Gratuity Act, 1972).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Applicability confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Threshold checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="22" width="70" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="57" y="31" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">10+ Employees</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Collect Nomination Forms (Form F)</h3><p class="step-description">Every employee must submit Form F within 30 days of completing 1 year of service. Nominations can be modified by submitting a fresh Form F (Section 6, Payment of Gratuity Act).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form F collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Nominees recorded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="24" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form F</text><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 55l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Collected</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Maintain Service Records</h3><p class="step-description">Track continuous service dates, salary revisions (Basic + DA), and breaks in service for all employees. Records must be maintained for at least 3 years after exit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Records maintained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Basic+DA tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Tracked</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Calculate Gratuity on Separation</h3><p class="step-description">Apply the 15/26 formula using last drawn Basic + DA and completed years of service. Round up if final year exceeds 6 months. Check against Rs 20 lakh tax-free limit (Section 10(10)(ii), IT Act).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Formula applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Limit checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">15/26</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Calculated</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Deduct TDS if Applicable</h3><p class="step-description">If gratuity exceeds the Rs 20 lakh tax-free limit, deduct TDS on the excess amount per the employee's income tax slab. Issue Form 16 with gratuity details.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 16 issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 20L Limit</text><rect x="35" y="45" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="54" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">TDS Done</text></svg></div><span class="illustration-label">TDS Done</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Pay Within 30 Days</h3><p class="step-description">Employer must determine and pay gratuity within 30 days of it becoming due. Delay attracts 10% p.a. simple interest from the date payable (Section 7(3A)). Non-payment: imprisonment up to 2 years.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Paid on time</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Interest avoided</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="33" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">30 Days</text><rect x="35" y="45" width="50" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="56" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">10% Interest</text></svg></div><span class="illustration-label">Paid</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File Annual Return (Form L)</h3><p class="step-description">Employers covered under the Act must file annual return Form L with the Controlling Authority by 31 January each year, containing details of employees who left and gratuity paid during the preceding year.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form L filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 31 Jan deadline met</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Form L</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">31 JAN</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Return Filed</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Gratuity Compliance</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Employee joining records</strong> and appointment letters</li>
<li><strong>Salary registers</strong> (Basic + DA breakup for each month)</li>
<li><strong>Attendance and leave records</strong> (for continuous service verification)</li>
<li><strong>Form F</strong> (nomination forms) for all employees</li>
<li><strong>Separation/resignation/termination letters</strong></li>
<li><strong>Previous gratuity payment records</strong></li>
<li><strong>Actuarial valuation report</strong> (for Ind AS 19 / AS 15 reporting)</li>
<li><strong>Form I</strong> (employee's application for gratuity payment)</li>
<li><strong>Form L</strong> (employer's annual return to Controlling Authority)</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common Gratuity Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Salary Component Confusion</td><td>Employers calculate on gross salary or CTC instead of Basic + DA. Leads to overpayment or disputes</td><td>Strictly use Basic + DA only. Under the new Labour Code's 50% wage rule, restructure salary to ensure wages are at least 50% of total remuneration.</td></tr>
<tr><td>Service Year Disputes</td><td>Employees leaving at 4 years 10 months claim 5-year eligibility. Courts have treated 4 years + 240 days as 5 years</td><td>Apply the 240-day rule consistently. Document service periods precisely. Track attendance records meticulously.</td></tr>
<tr><td>Fixed-Term Liability (New Code)</td><td>Social Security Code 2020 (21 Nov 2025) makes fixed-term employees eligible after 1 year, dramatically increasing liability</td><td>Re-assess gratuity provisions, update actuarial valuations, and account for increased liability as past service cost under Ind AS 19.</td></tr>
<tr><td>Outdated Actuarial Assumptions</td><td>Companies under Ind AS use outdated discount rates, attrition, and salary projections for actuarial valuations</td><td>Engage qualified actuaries annually with updated discount rates, attrition assumptions, and salary escalation projections.</td></tr>

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
            <h2 class="section-title">Gratuity Service Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Gratuity Calculation (up to 50 employees)</td><td class="table-amount">Rs 4,999 per batch</td></tr>
<tr><td>Actuarial Valuation - up to 100 employees</td><td class="table-amount">Rs 9,999</td></tr>
<tr><td>Actuarial Valuation - 100 to 500 employees</td><td class="table-amount">Rs 14,999</td></tr>
<tr><td>Actuarial Valuation - 500+ employees</td><td class="table-amount">Custom quote</td></tr>
<tr><td>Gratuity Trust Setup Advisory</td><td class="table-amount">Rs 24,999</td></tr>
<tr><td>Annual Compliance (Form L + records + advisory)</td><td class="table-amount">Rs 7,999/year</td></tr>
<tr><td>New Labour Code Impact Assessment</td><td class="table-amount">Rs 9,999</td></tr>
<tr><td>Complete Package (calc + valuation + compliance)</td><td class="table-amount">Rs 19,999/year</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Gratuity Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Gratuity%20Compliance%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Gratuity Service Timelines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Gratuity calculation (per employee batch)</td><td>1-2 working days</td></tr>
<tr><td>Actuarial valuation report</td><td>5-7 working days</td></tr>
<tr><td>Gratuity trust setup</td><td>30-45 days</td></tr>
<tr><td>Annual return (Form L) preparation</td><td>2-3 working days</td></tr>
<tr><td>New Labour Code impact assessment</td><td>3-5 working days</td></tr>
<tr><td>Employee payout processing</td><td>Within 30-day statutory window</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Employer must pay gratuity within 30 days of it becoming due. Delay attracts 10% p.a. simple interest (Section 7(3A)). Annual return Form L must be filed by 31 January. The Social Security Code 2020 (effective 21 Nov 2025) requires immediate re-assessment of gratuity provisions for fixed-term employees.</p>

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
            <h2 class="section-title">Benefits of Professional Gratuity Services</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Legal Compliance</h3><p class="feature-text">Accurate calculation prevents disputes, forfeiture challenges, and interest liability for delayed payment under Section 7(3A). Form L filed by 31 January.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Correct Financial Reporting</h3><p class="feature-text">Actuarial valuations under Ind AS 19 ensure your balance sheet reflects true gratuity liability. Zero audit qualifications on our valuations.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">New Code Readiness</h3><p class="feature-text">Proactive assessment of Social Security Code 2020 impact on fixed-term employees prevents surprise liability recognition and salary restructuring.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Tax Optimization</h3><p class="feature-text">Correct TDS treatment and Rs 20 lakh exemption computation ensures no excess tax on employees or penalties on employers.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Dispute Prevention</h3><p class="feature-text">Proper documentation, nomination forms (Form F), and service records create a defensible compliance trail if claims are contested.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Employers Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>500+ Employers Served</strong> from 10-employee shops to 5,000+ manufacturing units.</p>
<p><strong>1,200+ Actuarial Valuations</strong> across Ind AS 19 and AS 15 frameworks.</p>
<p><strong>4.9 Google Rating</strong> based on verified reviews.</p>
<p><strong>15+ Years of Practice.</strong></p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional Gratuity Management</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY / In-House</th><th>Professional (Patron Accounting)</th></tr></thead>
                    <tbody>
                        <tr><td>Formula Accuracy</td><td>Risk of wrong salary base (CTC vs Basic+DA)</td><td>Strict 15/26 with correct components</td></tr>
<tr><td>Service Year Counting</td><td>Manual errors in rounding</td><td>Automated with 240-day rule</td></tr>
<tr><td>Actuarial Valuation</td><td>Often skipped or generic template</td><td>Ind AS 19 compliant with current assumptions</td></tr>
<tr><td>Labour Code Readiness</td><td>Reactive when notices arrive</td><td>Proactive assessment and transition plan</td></tr>
<tr><td>Annual Return Filing</td><td>Often missed</td><td>Form L filed by 31 January deadline</td></tr>
<tr><td>Cost</td><td>Internal HR time + risk</td><td>Rs 4,999 onwards per engagement</td></tr>

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
            <h2 class="section-title">Related Payroll and Compliance Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/payroll-services">Payroll Services</a></strong> - End-to-end payroll management.</li>
<li><strong><a href="/esic-calculation-and-compliance-services">ESIC Compliance</a></strong> - ESI calculation and returns.</li>
<li><strong><a href="/pf-registration">PF Registration</a></strong> - PF registration and compliance.</li>
<li><strong><a href="/actuarial-valuation-services-for-employee-benefits">Actuarial Valuation</a></strong> - Ind AS 19 / AS 15 valuation for all employee benefits.</li>
<li><strong><a href="#">Professional Tax</a></strong> - PT calculation and compliance.</li>
<li><strong><a href="/private-limited-company-compliance">Pvt Ltd Compliance</a></strong> - Annual ROC and statutory compliance.</li>
</ul>

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
                
                <p><strong>Governing Law:</strong> <a href="https://clc.gov.in/clc/acts-rules/payment-gratuity-act" target="_blank" rel="noopener">Payment of Gratuity Act, 1972</a>; Social Security Code, 2020 (effective 21 Nov 2025).</p>
<p><strong>Key Provisions:</strong></p>
<ul>
<li><strong>Section 4(1):</strong> Gratuity payable after 5 years continuous service (permanent).</li>
<li><strong>Section 4(6):</strong> Forfeiture for misconduct (violence, moral turpitude).</li>
<li><strong>Section 7:</strong> Must pay within 30 days. Interest at 10% p.a. on delay.</li>
<li><strong>Section 9:</strong> Non-payment: imprisonment up to 2 years or Rs 20,000 fine or both.</li>
<li><strong>Section 10(10)(ii) IT Act:</strong> Tax-free limit Rs 20 lakh (private). Govt: fully exempt.</li>
<li><strong>Ind AS 19 / AS 15:</strong> Mandatory actuarial valuation for financial reporting.</li>
<li><strong>SSC 2020:</strong> Fixed-term eligible after 1 year. 50% wage rule for salary restructuring.</li>
</ul>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Gratuity</h2>
                    <p class="faq-expanded__lead">Answers about gratuity formula, eligibility, tax-free limit, forfeiture, actuarial valuation, new Labour Code, and payment deadlines.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Gratuity Compliance',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How is gratuity calculated for private sector employees?</h3>
                        <div class="faq-expanded__a"><p>For employees covered under the Payment of Gratuity Act: Gratuity = (15 x Last Drawn Salary x Completed Years of Service) / 26. Last Drawn Salary means Basic Pay + DA only. For non-covered employees, the divisor is 30. If service in the final year exceeds 6 months, it rounds up to the next full year. Maximum tax-free limit: Rs 20 lakh lifetime.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is gratuity payable before completing 5 years of service?</h3>
                        <div class="faq-expanded__a"><p>For permanent employees, 5 years of continuous service is the minimum. However, this is completely waived for death or disablement. Under the Social Security Code 2020 (effective 21 November 2025), fixed-term employees qualify after just 1 year. Courts have also treated 4 years and 240 days as equivalent to 5 years in certain judgments.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the maximum tax-free gratuity for private employees?</h3>
                        <div class="faq-expanded__a"><p>Rs 20 lakh over the entire working lifetime under Section 10(10)(ii) of the Income Tax Act. Any amount exceeding this is taxable as income from salary. Government employees receive fully tax-exempt gratuity with no upper limit. The Rs 20 lakh limit was last revised effective 29 March 2018.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can an employer forfeit gratuity?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only under Section 4(6) of the Payment of Gratuity Act. Gratuity can be forfeited wholly or partially if the employee was terminated for riotous or disorderly conduct, violence against any person, or any act constituting a moral turpitude offence. The employer must have a termination order specifying the grounds.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is actuarial valuation for gratuity and who needs it?</h3>
                        <div class="faq-expanded__a"><p>Actuarial valuation is a mathematical estimate of the present value of future gratuity obligations using discount rates, salary growth, attrition, and mortality assumptions. Companies under Ind AS must carry actuarial valuations under Ind AS 19 (Employee Benefits). Companies under old GAAP follow AS 15. This is mandatory for all companies covered by these standards.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What changed for gratuity under the new Labour Code?</h3>
                        <div class="faq-expanded__a"><p>Social Security Code 2020 (effective 21 November 2025) introduced two major changes: (1) fixed-term employees now qualify after 1 year (previously 5), and (2) at least 50% of total remuneration must qualify as wages for gratuity calculation. Both changes significantly increase employer liabilities and may require salary restructuring.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Gratuity kaise calculate hota hai aur kitne saal baad milta hai?</h3>
                        <div class="faq-expanded__a"><p>Gratuity ka formula hai: (15 x Basic Salary + DA x Service ke saal) / 26. Yeh tab milta hai jab aapne ek hi employer ke saath kam se kam 5 saal ki continuous service puri ki ho. Naye Labour Code ke tahat fixed-term employees ko sirf 1 saal ke baad gratuity milegi. Maximum Rs 20 lakh tak tax-free hai. Patron Accounting - +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if the employer delays gratuity payment?</h3>
                        <div class="faq-expanded__a"><p>Under Section 7(3A), if gratuity is not paid within 30 days, the employer must pay simple interest at 10% p.a. from the date payable until actual payment. Persistent non-payment can result in criminal prosecution with imprisonment up to 2 years under Section 9. The Controlling Authority can order payment with interest on employee complaint.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Gratuity formula?</strong> A: (15 x Basic+DA x Years) / 26 for covered; /30 for non-covered.</p>
<p><strong>Q: Minimum service?</strong> A: 5 years permanent; 1 year fixed-term (new code); waived for death/disability.</p>
<p><strong>Q: Tax-free limit?</strong> A: Rs 20 lakh lifetime cap for private employees.</p>
<p><strong>Q: Payment deadline?</strong> A: 30 days from date of becoming due.</p>
<p><strong>Q: Interest on delay?</strong> A: 10% p.a. simple interest under Section 7(3A).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">New Labour Code Effective - Reassess Your Gratuity Liability Now</h2>
            <div class="content-text">
                
                <p>The Social Security Code 2020 (effective 21 November 2025) has expanded gratuity eligibility to fixed-term employees after just 1 year of service. The 50% wage rule may require salary component restructuring. Companies that have not re-assessed their gratuity provisions face surprise liability recognition.</p>
<p>Employers must pay within 30 days of separation. Delay attracts 10% p.a. interest. Non-payment: imprisonment up to 2 years. Annual return Form L due by 31 January.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Gratuity%20Compliance%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free assessment.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Secure Your Gratuity Compliance Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Gratuity compliance sits at the intersection of labour law, tax planning, and financial reporting. The Payment of Gratuity Act mandates the 15/26 formula, 30-day payment, and proper record-keeping.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">The Social Security Code 2020 (21 November 2025) has expanded eligibility to fixed-term employees after 1 year, significantly increasing liabilities. Companies under Ind AS must carry actuarial valuations reflecting these changes.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting: 500+ employers. 1,200+ actuarial valuations. Offices in Pune, Mumbai, Delhi, and Gurugram. Starting from Rs 4,999.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Gratuity%20Compliance%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Gratuity%20Compliance&body=Hello%2C%20I%20just%20visited%20your%20Gratuity%20Compliance%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Gratuity Compliance Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert gratuity calculation, actuarial valuation, and compliance management for employers across India.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/gratuity-calculation-and-compliance-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gratuity-calculation-and-compliance-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gratuity-calculation-and-compliance-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/gratuity-calculation-and-compliance-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete payroll and compliance</div><div class="pa-cross-grid"><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/esic-calculation-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Compliance</div><div class="pa-card-sub">India</div></div></a><a href="/pf-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">India</div></div></a><a href="/actuarial-valuation-services-for-employee-benefits" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Actuarial Valuation</div><div class="pa-card-sub">India</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Professional Tax</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Content aligned with Payment of Gratuity Act 1972, Social Security Code 2020, and Ind AS 19. Next review: November 2026.</p>
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
