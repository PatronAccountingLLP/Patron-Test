

@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>Professional Tax Return in Pune – Filing, Slabs &amp; Rates</title>
    <meta name="description" content="CA-assisted professional tax return filing in Pune. PTRC monthly and annual returns on mahagst.gov.in. Updated Feb 2026 due dates. Serving Hinjewadi, Kharadi, MIDC. Call +91 945 945 6700.">
    <link rel="canonical" href="/pt-returns/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Professional Tax Return in Pune – Filing, Slabs &amp; Rates">
    <meta property="og:description" content="CA-assisted professional tax return filing in Pune. PTRC monthly and annual returns on mahagst.gov.in. Updated Feb 2026 due dates. Serving Hinjewadi, Kharadi, MIDC. Call +91 945 945 6700.">
    <meta property="og:url" content="/pt-returns/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Professional Tax Return in Pune – Filing, Slabs &amp; Rates">
    <meta name="twitter:description" content="CA-assisted professional tax return filing in Pune. PTRC monthly and annual returns on mahagst.gov.in. Updated Feb 2026 due dates. Serving Hinjewadi, Kharadi, MIDC. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
   <script type="application/ld+json">
    [
    {"@context":"https://schema.org","@type":"AccountingService","@id":"https://www.patronaccounting.com/#office-pune","name":"Patron Accounting LLP - Pune Office","telephone":"+919459456700","url":"https://www.patronaccounting.com/","address":{"@type":"PostalAddress","streetAddress":"RTC Silver, Wagholi","addressLocality":"Pune","addressRegion":"Maharashtra","postalCode":"412207","addressCountry":"IN"},"geo":{"@type":"GeoCoordinates","latitude":"18.5793","longitude":"73.9826"},"openingHoursSpecification":[{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"opens":"10:00","closes":"19:00"}],"parentOrganization":{"@id":"https://www.patronaccounting.com/#organization"}},

    {"@context":"https://schema.org","@type":"Service","@id":"https://www.patronaccounting.com/pt-returns/pune/#service","name":"PT Returns in Pune","description":"Professional tax return filing for employers and professionals in Pune. Includes monthly and annual PTRC Form III-B filing on mahagst.gov.in, PTEC annual payment management, slab-wise PT calculation, Feb 2026 amendment compliance, director PTEC tracking, and mismatch notice resolution for Pune businesses.","provider":{"@id":"https://www.patronaccounting.com/#organization"},"areaServed":{"@type":"City","name":"Pune","sameAs":"https://en.wikipedia.org/wiki/Pune"},"serviceType":"Professional Tax Return Filing","url":"https://www.patronaccounting.com/pt-returns/pune"},

    {"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.patronaccounting.com/"},{"@type":"ListItem","position":2,"name":"PT Returns","item":"https://www.patronaccounting.com/pt-returns"},{"@type":"ListItem","position":3,"name":"PT Returns in Pune","item":"https://www.patronaccounting.com/pt-returns/pune"}]},

    {"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is the due date for PT return in Pune?","acceptedAnswer":{"@type":"Answer","text":"Monthly PTRC returns are due by the 15th of the following month. Annual PTRC returns are due by 15th March. PTEC payment is due by 15th June. These dates follow the February 2026 amendment to Rule 11(3)."}},{"@type":"Question","name":"What is the difference between PTRC and PTEC?","acceptedAnswer":{"@type":"Answer","text":"PTRC is for employers deducting PT from employee salaries. It requires Form III-B return filing. PTEC is for companies, directors, partners, and self-employed professionals paying their own PT of Rs 2,500 annually. No return filing for PTEC."}},{"@type":"Question","name":"Are women employees exempt from PT in Maharashtra?","acceptedAnswer":{"@type":"Answer","text":"Women earning up to Rs 25,000 gross per month are exempt since April 2023. Women above Rs 25,000 pay Rs 200/month (Rs 300 in Feb) same as male employees above Rs 10,000."}},{"@type":"Question","name":"What is the penalty for late PT return filing?","acceptedAnswer":{"@type":"Answer","text":"Rs 1,000 per late return (Rs 200 if within 30 days). Interest at 1.25% per month for individuals and 2% per month for employers on unpaid tax. Late registration attracts Rs 5 per day."}}]},

    {"@context":"https://schema.org","@type":"WebPage","@id":"https://www.patronaccounting.com/pt-returns/pune","name":"PT Returns in Pune 2026 | Professional Tax Filing | Patron Accounting","description":"CA-assisted professional tax return filing in Pune. PTRC monthly and annual returns on mahagst.gov.in. Updated Feb 2026 due dates. Serving Hinjewadi, Kharadi, MIDC. Call +91 945 945 6700.","url":"https://www.patronaccounting.com/pt-returns/pune","inLanguage":"en-IN","isPartOf":{"@id":"https://www.patronaccounting.com/#website"},"author":{"@id":"https://www.patronaccounting.com/#team"}},

    {"@context":"https://schema.org","@type":"ProfessionalService","@id":"https://www.patronaccounting.com/#organization-rating","name":"Patron Accounting LLP","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"500","bestRating":"5","worstRating":"1"}},

    {"@context":"https://schema.org","@type":"Claim","claimReviewed":"Maharashtra PT Act 1975 requires employers to deduct professional tax from salaries per slab rates and file returns in Form III-B on mahagst.gov.in; Feb 2026 amendment to Rule 11(3) shifts all due dates to 15th; max PT Rs 2,500/year per Article 276; women up to Rs 25,000 exempt from April 2023","appearance":{"@type":"WebPage","url":"https://www.mahagst.gov.in"}},

    {"@context":"https://schema.org","@type":"HowTo","@id":"https://www.patronaccounting.com/pt-returns/pune/#howto","name":"How to File PT Returns in Pune","step":[{"@type":"HowToStep","position":1,"name":"Prepare Salary Register","text":"Compile month-wise salary details for all employees. Apply Maharashtra PT slab to calculate PT deductible per employee."},{"@type":"HowToStep","position":2,"name":"Calculate Total Liability and Verify Periodicity","text":"Sum PT deducted. Verify monthly or annual filing based on previous year liability of Rs 1 lakh threshold."},{"@type":"HowToStep","position":3,"name":"Pay Tax via GRAS Portal","text":"Generate challan Form MTR-6 on GRAS portal. Pay via net banking or card before the return due date."},{"@type":"HowToStep","position":4,"name":"File Form III-B on mahagst.gov.in","text":"Log in with PTRC credentials. Enter salary paid, employee count, PT deducted, and challan details. Submit return."},{"@type":"HowToStep","position":5,"name":"Submit by 15th","text":"Monthly returns due by 15th of following month. Annual returns by 15th March. Per Feb 2026 Rule 11(3) amendment."},{"@type":"HowToStep","position":6,"name":"Reconcile and Maintain Records","text":"Reconcile PT deductions with Income Tax salary figures. Maintain records for minimum 6 years."}]}
    ]
    </script>
    
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
                        PT Returns in Pune - File Professional Tax Returns on Time
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Employee salary register, PTRC number, challan Form MTR-6, PAN</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> No government fee for return filing | Professional fee Rs 500 - Rs 3,000 per filing</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All employers with PTRC and self-employed professionals with PTEC in Pune</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> PTRC Monthly: 15th of following month | PTRC Annual: 15th March | PTEC: 15th June</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PT%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'PT Returns in Pune',
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
    'ctaText'    => 'From IT companies to manufacturing units, Pune employers trust Patron for PT compliance and payroll services.',
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
            <a href="#what-section" class="toc-btn">What is PT Return</a>
            <a href="#who-section" class="toc-btn">Who Must File</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#process-section" class="toc-btn">Filing Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Due Dates</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">PTRC vs PTEC</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PT Returns in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - PT Returns in Pune Services at a Glance</strong></p>
                    <p>Every employer in Pune holding a PTRC (Professional Tax Registration Certificate) must file PT returns on mahagst.gov.in in Form III-B. Employers with PT liability of Rs 1 lakh or more in the previous year file monthly returns by the 15th of the following month. Employers with liability below Rs 1 lakh file an annual return by 15th March. Self-employed professionals and entities pay Rs 2,500 annually under PTEC by 15th June. The maximum professional tax per employee is Rs 2,500 per year. Women employees earning up to Rs 25,000 gross per month are exempt.</p>
                </div>
                <p>Pune is Maharashtra's second-largest employment hub after Mumbai, with over 5 lakh IT professionals in the Hinjewadi-Kharadi-Magarpatta corridor, a massive manufacturing workforce across <strong>MIDC Bhosari, Chakan, and Ranjangaon</strong>, and a thriving startup ecosystem in <strong>Baner, Aundh, and Kharadi</strong>. Every employer is required to obtain PTRC, deduct professional tax from employee salaries per the Maharashtra PT slab, and file returns with the Maharashtra GST Department (Pune Division) on mahagst.gov.in. In February 2026, the Maharashtra government amended Rule 11(3), advancing all due dates from the last day of the month to the 15th day. Learn more about <a href="/pt-returns">PT Returns across India</a>.</p>
                <p>Self-employed professionals - CAs, doctors, lawyers, consultants, and startup founders/directors - must hold PTEC and pay Rs 2,500 annually. Whether you are an HR manager at a Hinjewadi IT firm processing PTRC returns for 500 employees, a manufacturing unit at MIDC Bhosari with shift workers, or a solo professional at Koregaon Park, understanding your PT return obligations and the new due date structure is essential. After PT compliance, businesses benefit from Payroll Processing and <a href="/accounting-services">Accounting Services</a>.</p>
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
                <h2 class="section-title">What Are PT Returns</h2>
                <div class="content-text what-is-definition">
                    
                    <p>PT returns (Professional Tax returns) are periodic filings by employers on the Maharashtra GST Department portal (mahagst.gov.in) in Form III-B, declaring the salaries and wages paid to employees, the professional tax deducted from each employee as per the Maharashtra PT slab, and the total tax deposited to the state government under the Maharashtra State Tax on Professions, Trades, Callings and Employments Act, 1975.</p>
<p><strong>PTRC (Professional Tax Registration Certificate)</strong> - Required for every employer who pays salary or wages. The employer deducts PT from employee salaries each month and deposits it to the state. The employer files periodic returns in Form III-B on mahagst.gov.in.</p>
<p><strong>PTEC (Professional Tax Enrollment Certificate)</strong> - Required for self-employed professionals, companies, LLPs, directors, and partners to pay their own PT. PTEC requires annual payment of Rs 2,500 per certificate - no return filing, only payment. One PTEC suffices regardless of multiple directorships.</p>
<p><strong>Maharashtra PT Slab Rates (Male):</strong> Up to Rs 7,500: Nil | Rs 7,501-Rs 10,000: Rs 175/month | Above Rs 10,000: Rs 200/month (Rs 300 in February).</p>
<p><strong>Maharashtra PT Slab Rates (Female):</strong> Up to Rs 25,000: Nil (exemption from April 2023) | Above Rs 25,000: Rs 200/month (Rs 300 in February). Total annual PT per employee is capped at Rs 2,500.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for PT Returns in Pune:</strong></p>
                    <p><strong>PTRC:</strong> Professional Tax Registration Certificate - for employers deducting PT from employee salaries. Requires Form III-B return filing.</p>
<p><strong>PTEC:</strong> Professional Tax Enrollment Certificate - for companies, directors, partners, and self-employed professionals. Rs 2,500 annual payment, no return filing.</p>
<p><strong>Form III-B:</strong> Electronic PT return form filed on mahagst.gov.in by employers with PTRC.</p>
<p><strong>Form MTR-6:</strong> Payment challan generated via GRAS portal for depositing PT to the state government.</p>
<p><strong>Feb 2026 Amendment:</strong> Rule 11(3) amended - all due dates shifted from month-end to the 15th day.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PT Returns in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Max PT/Year</span>
                        <strong>Rs 2,500 Per Employee</strong>
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
            <h2 class="section-title">Who Needs to File PT Returns in Pune</h2>
            <div class="content-text">
                
                <p><strong>Employers with PTRC (All Business Types)</strong> - Every employer in Pune who pays salary or wages must obtain PTRC within 30 days and file periodic PT returns. This covers private limited companies, LLPs, partnership firms, proprietorships, trusts, and societies. In Pune, this includes IT companies at Hinjewadi and Kharadi, manufacturing units at MIDC Bhosari and Chakan, and service firms at Baner and Koregaon Park. See Professional Tax Registration in Pune for new registrations.</p>
<p><strong>Monthly Filers (PT Liability >= Rs 1 Lakh)</strong> - Employers with previous year PT liability of Rs 1,00,000 or more file monthly returns. Most Hinjewadi IT companies, large manufacturing units at MIDC, and multi-branch businesses in Pune fall into this category.</p>
<p><strong>Annual Filers (PT Liability < Rs 1 Lakh)</strong> - Employers with previous year PT liability below Rs 1,00,000 file a single annual return. Small businesses and startups with fewer than 40 employees typically qualify. Note: first-year PTRC holders must file monthly regardless of liability.</p>
<p><strong>Self-Employed Professionals with PTEC</strong> - CAs, doctors, lawyers, architects, consultants, and engineers practising in Pune must hold PTEC and pay Rs 2,500 annually by 15th June. No return filing required - only payment.</p>
<p><strong>Companies, LLPs, and Directors/Partners</strong> - Every company and LLP needs entity PTEC (Rs 2,500/year). Each director must hold individual PTEC (Rs 2,500/year) regardless of salary. Partners of LLPs/firms need individual PTEC. This is a common compliance gap for Pune startups at Baner and Kharadi.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PT Return Filing Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly PTRC Return Filing</td><td>End-to-end monthly PT return filing including salary compilation, slab calculation, Form III-B preparation, and portal submission by the 15th</td></tr>
<tr><td>Annual PTRC Return Filing</td><td>Annual PT return for smaller Pune employers with previous year liability below Rs 1 lakh, due by 15th March</td></tr>
<tr><td>PTEC Annual Payment Management</td><td>PTEC payment processing for companies, LLPs, directors, partners, and professionals via GRAS portal by 15th June</td></tr>
<tr><td>First-Year PTRC Compliance</td><td>Mandatory monthly filing for newly registered employers regardless of total liability</td></tr>
<tr><td>PT Slab Reconciliation and Audit Support</td><td>Reconciliation of PT deductions with salary expenses in Income Tax returns; mismatch notice support</td></tr>
<tr><td>PT Registration (PTRC + PTEC)</td><td>New registration filing on mahagst.gov.in within 30 days of employing staff (PTRC) or commencing profession (PTEC)</td></tr>

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
            <h2 class="section-title">PT Return Filing Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">6-step guide for professional tax compliance with Patron Accounting</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Prepare Employee Salary Register</h3><p class="step-description">Compile the salary register for all employees for the return period. For each employee, determine the gross monthly salary. Apply the Maharashtra PT slab: Nil for gross salary up to Rs 7,500 (male) or Rs 25,000 (female), Rs 175 for Rs 7,501-Rs 10,000 (male), and Rs 200 for salary above Rs 10,000 (Rs 300 in February). For Hinjewadi IT companies with 100+ employees, Patron integrates with payroll software exports.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Slab Application</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Women Exemption Check</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="36" x2="80" y2="36" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="48" x2="70" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="60" x2="60" y2="60" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Register Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Calculate Total PT Liability and Verify Periodicity</h3><p class="step-description">Sum the PT deducted from all employees for the period. Verify filing periodicity: if previous year total PT liability was Rs 1,00,000 or more, file monthly. If below Rs 1,00,000, file annually. The Maharashtra GST Department publishes a periodicity list at mahagst.gov.in each year. First-year PTRC holders always file monthly regardless of liability.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Monthly vs Annual</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Periodicity Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="30" r="8" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="45" y="34" text-anchor="middle" fill="#E8712C" font-size="10" font-weight="bold">%</text><rect x="30" y="50" width="60" height="15" rx="4" fill="#10B981" opacity="0.15"/><line x1="30" y1="57" x2="75" y2="57" stroke="#10B981" stroke-width="2"/></svg></div><span class="illustration-label">Liability Computed</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Generate Challan and Pay Tax via GRAS Portal</h3><p class="step-description">Log in to the GRAS portal or use the Pay Your Taxes tab on mahagst.gov.in. Select PTRC, enter registration number, financial year, and period. Generate challan Form MTR-6. Pay via net banking, debit/credit card, or NEFT/RTGS. Save the payment acknowledgement. Payment must be completed before the return due date.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MTR-6 Challan</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Online Payment</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="39" text-anchor="middle" fill="#E8712C" font-size="10" font-weight="bold">Rs</text><rect x="30" y="55" width="60" height="8" rx="3" fill="#10B981" opacity="0.15"/><line x1="30" y1="59" x2="70" y2="59" stroke="#10B981" stroke-width="2"/></svg></div><span class="illustration-label">Tax Deposited</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Form III-B on mahagst.gov.in</h3><p class="step-description">Log in with PTRC credentials. Navigate to Returns > File PT Return. Select the return period. Enter total salary paid, number of employees, PT deducted, and challan details. Upload the return. For Pune employers with high employee counts, ensure the employee count and salary figures match payroll records exactly - the Maharashtra GST Department flags mismatches.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form III-B Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="8" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><rect x="30" y="32" width="60" height="8" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><rect x="30" y="46" width="30" height="8" rx="2" fill="#E8712C"/></svg></div><span class="illustration-label">Return Uploaded</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Submit by the 15th (Monthly) or 15th March (Annual)</h3><p class="step-description">Following the February 2026 amendment to Rule 11(3), monthly PTRC returns are due by the 15th of the month following the salary month. Annual returns are due by 15th March. The old due dates of last day of month and 31st March are superseded. Missing the 15th triggers Rs 1,000 late filing penalty plus interest.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>New 15th Deadline</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Feb 2026 Amendment</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#FEF4EE" stroke="#10B981" stroke-width="2"/><path d="M52 42l5 5 11-11" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Filed on Time</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Reconcile and Maintain Records</h3><p class="step-description">After filing, reconcile PT deductions with your payroll records and Income Tax salary expenses. The Maharashtra GST Department has increased mismatch notices where PTRC returns do not match salary expenses in Income Tax filings. Maintain all salary registers, challans, and return acknowledgements for minimum 6 years.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IT-PT Reconciliation</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>6-Year Records</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 10L95 30V55C95 75 60 90 60 90S25 75 25 55V30L60 10Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 50l8 8 16-16" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Compliance Secured</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for PT Return Filing in Pune</h2>
            <div class="content-text">
                
                <p><strong>PTRC Registration Certificate:</strong> Valid Professional Tax Registration Certificate from mahagst.gov.in with TIN number.</p>
<p><strong>Employee Salary Register:</strong> Month-wise salary details for all employees showing gross salary, PT slab, and PT deducted.</p>
<p><strong>Challan Form MTR-6:</strong> Payment challan generated from GRAS portal with transaction reference number.</p>
<p><strong>PAN of Employer:</strong> PAN card of the business entity or proprietor.</p>
<p><strong>Employee PAN/Aadhaar List:</strong> For large employers, employee identification details for audit purposes.</p>
<p><strong>Previous Period Returns:</strong> Earlier Form III-B filings for reconciliation and periodicity verification.</p>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-Specific Tip:</strong> Pune IT companies at Hinjewadi and Kharadi with employees across multiple states should note that PT is deducted based on the state of employment, not the employer's registered office state. Employees working from Pune office locations fall under Maharashtra PT slabs. Remote employees in other states follow that state's PT rules.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges for PT Return Filing in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>February 2026 Due Date Shift Not Updated</td><td>Hinjewadi IT companies still using old month-end dates, risking late filing penalties of Rs 1,000/return</td><td>Immediate compliance calendar update to 15th-day deadlines per amended Rule 11(3); automated reminders</td></tr>
<tr><td>Women Employee Exemption Misapplied</td><td>Some employers treat all women as exempt; women above Rs 25,000 are fully taxable at Rs 200/month</td><td>Slab-accurate computation with Rs 25,000 threshold check for each female employee monthly</td></tr>
<tr><td>First-Year Monthly Filing Missed</td><td>Startups at Baner/Kharadi assume annual filing based on low headcount; miss monthly deadlines</td><td>Mandatory monthly filing from registration date for entire first financial year regardless of liability</td></tr>
<tr><td>Director PTEC Not Obtained</td><td>Startup founders serving as directors without salary miss individual PTEC obligation; Rs 5/day penalty</td><td>Director-wise PTEC tracking with annual payment by 15th June; separate from entity PTEC</td></tr>
<tr><td>PTRC-Income Tax Salary Mismatch</td><td>Different salary definitions for PT vs IT trigger automated department mismatch notices</td><td>Consistent salary figures verified across PT, Income Tax, and PF returns before filing</td></tr>

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
            <h2 class="section-title">PT Return Filing Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (PT Returns)</td><td>Starting from INR 999/mo (Exl GST and Govt. Charges)</td></tr>
<tr><td>Monthly PTRC Return (up to 50 employees)</td><td>Rs 500 - Rs 1,000/month (Govt fee: Nil)</td></tr>
<tr><td>Monthly PTRC Return (50-200 employees)</td><td>Rs 1,000 - Rs 2,000/month</td></tr>
<tr><td>Monthly PTRC Return (200+ employees)</td><td>Rs 2,000 - Rs 3,000/month</td></tr>
<tr><td>Annual PTRC Return</td><td>Rs 1,500 - Rs 3,000</td></tr>
<tr><td>PTEC Annual Payment (per certificate)</td><td>Rs 2,500 (govt tax) + Rs 500-Rs 1,000 (advisory)</td></tr>
<tr><td>PTRC + PTEC New Registration</td><td>Rs 1,500 - Rs 3,000</td></tr>
<tr><td>PT Reconciliation / Mismatch Notice Support</td><td>Rs 3,000 - Rs 5,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free PT Returns in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PT%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PT Return Filing Due Dates (Post-Feb 2026 Amendment)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>PTRC Monthly Return</td><td>15th of following month (if previous year PT liability >= Rs 1,00,000)</td></tr>
<tr><td>PTRC Annual Return</td><td>15th March (if previous year PT liability < Rs 1,00,000)</td></tr>
<tr><td>PTRC First-Year Return</td><td>15th of following month (mandatory monthly in first year regardless of liability)</td></tr>
<tr><td>PTEC Payment (Enrolled before 15th May)</td><td>15th June (Rs 2,500 per certificate)</td></tr>
<tr><td>PTEC Payment (Enrolled after 15th May)</td><td>Within 30 days of enrolment (first year only)</td></tr>
<tr><td>Revised Return</td><td>Within 6 months of year-end or before assessment notice, whichever is earlier</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>CRITICAL UPDATE:</strong> The Maharashtra PT (Amendment) Rules, 2026 (Notification dated 28 February 2026) amended Rule 11(3). All references to '31st March', 'last date of month', '31st May', and '30th June' are replaced with '15th March', '15th day', '15th May', and '15th June' respectively. These new due dates are effective immediately. Patron's Pune office has updated all client compliance calendars accordingly.</p>

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
            <h2 class="section-title">Why Choose Patron for PT Returns in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office at Wagholi</h3><p>Walk-in consultations at RTC Silver, Wagholi - 30 minutes from Hinjewadi, Kharadi, MIDC Bhosari, Baner, and Pimpri-Chinchwad covering all major employment zones.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Feb 2026 Amendment Compliance</h3><p>We have immediately updated all client compliance calendars to the new 15th-day due dates. No Patron client will miss a deadline due to the amendment.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3>Employer-Scale Expertise</h3><p>From 5-employee startups to 5,000-employee IT companies. We handle monthly PTRC returns for employers of all sizes, integrating with payroll software exports.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3>PTRC + PTEC End-to-End</h3><p>Single-point management of employer PTRC returns and entity/director/partner PTEC payments. Common for Pune startups and LLPs where founders wear multiple hats.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune Employers</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
<p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses across India. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves businesses across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PTRC vs PTEC - Comparison for Pune Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>PTRC (Registration Certificate)</th><th>PTEC (Enrolment Certificate)</th></tr></thead>
                    <tbody>
                        <tr><td>Who Needs It</td><td>Employers paying salary/wages</td><td>Companies, LLPs, directors, partners, self-employed professionals</td></tr>
<tr><td>Purpose</td><td>Deduct PT from employees and deposit to government</td><td>Pay own professional tax</td></tr>
<tr><td>Tax Amount</td><td>As per salary slab (Rs 175/Rs 200/Rs 300 per employee)</td><td>Rs 2,500 flat per certificate per year</td></tr>
<tr><td>Return Filing</td><td>Yes - Form III-B (monthly or annual)</td><td>No return filing - payment only</td></tr>
<tr><td>Due Date</td><td>15th of following month (monthly) / 15th March (annual)</td><td>15th June annually</td></tr>
<tr><td>Penalty (Late)</td><td>Rs 1,000 per return</td><td>Rs 5/day late enrolment + 1.25% interest on late payment</td></tr>
<tr><td>Example</td><td>Hinjewadi IT company with 200 employees</td><td>CA at Koregaon Park; Director of Pvt Ltd at Baner</td></tr>

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
            <h2 class="section-title">Related Services for Pune Employers</h2>
            <div class="content-text">
                
                <p>Pune employers managing PT compliance often need complementary services:</p>
<ul style="list-style:disc;padding-left:20px;"><li style="margin-bottom:12px;padding:8px 0;"><a href="/pt-returns" style="font-weight:600;">PT Returns in India</a> - National professional tax return filing services</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/income-tax-return">Income Tax Return</a> - ITR filing with PT deduction reconciliation</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/accounting-services">Accounting Services</a> - Year-round bookkeeping including PT records</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for PT Returns</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> Maharashtra State Tax on Professions, Trades, Callings and Employments Act, 1975.</p>
<p><strong>Constitutional Basis:</strong> Article 276 of the Constitution of India - caps state-level PT at Rs 2,500 per person per year.</p>
<p><strong>Amended By:</strong> Maharashtra PT (Amendment) Rules, 2026 (Notification dated 28 February 2026) - Rule 11(3) amended. Due dates shifted to 15th day.</p>
<p><strong>Filing Form:</strong> Form III-B (electronic return) filed on <a href="https://www.mahagst.gov.in" target="_blank" rel="noopener">mahagst.gov.in</a>.</p>
<p><strong>Payment Challan:</strong> Form MTR-6 via <a href="https://gras.mahakosh.gov.in" target="_blank" rel="noopener">GRAS portal</a>.</p>
<p><strong>Periodicity:</strong> Previous year PT liability >= Rs 1,00,000 = monthly. Below Rs 1,00,000 = annual. First year = always monthly.</p>
<p><strong>PT Period:</strong> March to February (not April to March). Annual return covers 1 March to 28/29 February.</p>
<p><strong>Penalties:</strong> Late registration: Rs 5/day. Late return: Rs 1,000/return (Rs 200 if within 30 days). Late payment: interest 1.25%/month (individuals) / 2%/month (employers). Non-payment: 10% penalty.</p>
<p><strong>Exemptions:</strong> Senior citizens (65+); parents of physically challenged children; persons with 40%+ disability; women employees earning up to Rs 25,000 gross/month (from April 2023).</p>
<p><strong>Income Tax Deduction:</strong> PT paid is deductible under Section 16(iii) of IT Act (old regime only). Not available under new tax regime.</p>
<p><strong>Jurisdictional Authority:</strong> Joint Commissioner of Sales Tax (PT), Pune Division; Maharashtra GST Department (mahagst.gov.in).</p>

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
                    <h2 class="faq-expanded__title">FAQs - PT Returns in Pune</h2>
                    <p class="faq-expanded__lead">Common questions about professional tax return filing, due dates, slab rates, and PTRC/PTEC compliance in Pune</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'PT Returns in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the due date for PT return in Pune?</h3>
                        <div class="faq-expanded__a"><p>Following the February 2026 amendment to Rule 11(3), monthly PTRC returns are due by the 15th of the following month. Annual PTRC returns are due by 15th March. PTEC payment is due by 15th June. These revised dates supersede all previous due dates. Pune employers must update their compliance calendars accordingly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between PTRC and PTEC?</h3>
                        <div class="faq-expanded__a"><p>PTRC is for employers who deduct PT from employee salaries and deposit it to the Maharashtra government. It requires periodic return filing in Form III-B. PTEC is for self-employed professionals, companies, LLPs, directors, and partners to pay their own PT of Rs 2,500 annually - no return filing, only payment. Most Pune businesses need both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Are women employees exempt from PT in Maharashtra?</h3>
                        <div class="faq-expanded__a"><p>Since April 2023, women employees earning up to Rs 25,000 gross salary per month are exempt from professional tax. Women earning above Rs 25,000 per month are taxable at Rs 200/month (Rs 300 in February). In Pune's IT sector where most female professionals earn above Rs 25,000, the exemption applies only to lower-salaried women employees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for late PT return filing?</h3>
                        <div class="faq-expanded__a"><p>Late filing attracts Rs 1,000 per return (Rs 200 if filed within 30 days of due date). Late payment attracts interest at 1.25% per month for individuals and 2% per month for employers. A 10% penalty applies on non-payment. Late registration attracts Rs 5 per day. These penalties compound for employers missing multiple monthly returns.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Do startup directors need to pay PT even without salary?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Entry 5 of the Maharashtra PT Schedule, every director of a company registered in Maharashtra must hold individual PTEC and pay Rs 2,500 annually, regardless of whether they draw salary. This is separate from the company's own PTEC. For Pune startups where founders serve as directors without salary, each director needs PTEC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can PT paid be claimed as income tax deduction?</h3>
                        <div class="faq-expanded__a"><p>Yes, under the old income tax regime. Professional tax paid by an employee is deductible from salary income under Section 16(iii) of the Income Tax Act, up to Rs 2,500. This deduction is not available under the new tax regime (Section 115BAC). Employers must mention PT deducted in the employee's Form 16.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>PT return ki due date kya hai Pune mein?</strong> Monthly PTRC: har mahine 15 tarikh tak. Annual PTRC: 15 March tak. PTEC: 15 June tak. Ye naye dates February 2026 ke amendment ke baad lagu hain.</p>
<p><strong>Kitna professional tax katna padta hai?</strong> Male: Rs 7,500 se kam salary pe Nil, Rs 10,000+ pe Rs 200/month (Feb mein Rs 300). Female: Rs 25,000 se kam pe Nil, upar Rs 200/month. Max Rs 2,500/year per employee.</p>
<p><strong>Kya directors ko bhi PT dena padta hai?</strong> Haan, har director ko individually PTEC lena padta hai aur Rs 2,500/year dena padta hai - chahe salary le rahe ho ya nahi.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Do Not Miss the New 15th-Day PT Deadline</h2>
            <div class="content-text">
                
                <p>The February 2026 amendment to Rule 11(3) has moved all Maharashtra PT due dates forward by 15-16 days - from month-end to the <strong>15th</strong>. For Pune employers who have been filing on the last day of the month for years, this means an immediate calendar adjustment. Missing the 15th triggers <strong>Rs 1,000 per return</strong> in late filing penalty plus 2% monthly interest on unpaid tax.</p>
<p><strong>For a Hinjewadi IT company filing 12 monthly returns, a single year of missed deadlines accumulates Rs 12,000 in penalties alone - before interest. The cost of professional PT return filing (Rs 500-3,000/month) is a fraction of the penalty exposure.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert PT Return Filing Support in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Professional tax return filing in Pune is a mandatory state-level compliance obligation for every employer and self-employed professional operating in Maharashtra. With the February 2026 amendment advancing all due dates to the 15th, Pune employers must immediately recalibrate their compliance schedules.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Patron Accounting's Pune office at RTC Silver, Wagholi provides dedicated PT compliance packages - from monthly PTRC Form III-B filing to PTEC payment management, registration support, and mismatch notice resolution.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">With 15+ years of experience, 10,000+ businesses served, and a 4.9 Google rating, Patron Accounting LLP is a trusted CA and CS firm for employer compliance across Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PT%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20PT%20Returns%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20PT%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">PT Return Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides professional tax return filing services in 4 major cities.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
        <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
        <a href="/pt-returns/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/pt-returns/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
        <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end employer compliance for Pune businesses</div><div class="pa-cross-grid">
        <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/llp-incorporation/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a>
    </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> April 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on PT Returns in Pune is reviewed monthly. Content covers Maharashtra PT Act 1975, February 2026 amendment to Rule 11(3), Form III-B filing on mahagst.gov.in, PTRC/PTEC compliance, PT slab rates, women employee exemption (Rs 25,000 from April 2023), and Maharashtra GST Department Pune Division jurisdiction. Freshness Tier 1.</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
