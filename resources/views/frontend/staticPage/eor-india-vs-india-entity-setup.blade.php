@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>EOR vs Pvt Ltd India: Decision Framework</title>
    <meta name="description" content="When to choose EOR vs setting up an Indian Pvt Ltd? Decision tree by team size, time horizon, and India strategy. Patron Accounting LLP offers both.">
    <link rel="canonical" href="/eor-india-vs-india-entity-setup">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="EOR vs Pvt Ltd India 2026: Decision Framework | Patron">
    <meta property="og:description" content="When to choose EOR vs setting up an Indian Pvt Ltd? Decision tree by team size, time horizon, and India strategy. Patron Accounting LLP offers both.">
    <meta property="og:url" content="/eor-india-vs-india-entity-setup">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="EOR vs Pvt Ltd India 2026: Decision Framework | Patron">
    <meta name="twitter:description" content="When to choose EOR vs setting up an Indian Pvt Ltd? Decision tree by team size, time horizon, and India strategy. Patron Accounting LLP offers both.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "https://www.patronaccounting.com/eor-india-vs-india-entity-setup#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://www.patronaccounting.com/services" },
            { "@type": "ListItem", "position": 3, "name": "EOR vs Pvt Ltd India - Decision Framework", "item": "https://www.patronaccounting.com/eor-india-vs-india-entity-setup" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.patronaccounting.com/eor-india-vs-india-entity-setup#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "When should I switch from EOR to setting up an Indian entity?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Industry consensus places the EOR-to-entity transition at 15 to 25 employees in India. The exact threshold depends on the EOR tier - higher-priced platforms like G-P or Deel push the crossover earlier (around 10 to 15 employees). Time horizon matters too. If you expect 20+ employees within 18 months, start incorporation paperwork now since it takes 4 to 6 weeks. If your team will stay below 10 long-term, stay on EOR."
              }
            },
            {
              "@type": "Question",
              "name": "How much does it cost to set up an Indian Pvt Ltd subsidiary?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Total one-time setup cost typically runs USD 12,000 to USD 18,000 covering MCA SPICe+ incorporation, PAN, TAN, GST registration, EPFO and ESIC registrations, DSC, DIN, registered office set-up, and FEMA filing for capital remittance. Annual ongoing compliance runs USD 6,000 to USD 12,000 covering CA fees, statutory audit (Section 143 Companies Act), ROC filings (MGT-7, AOC-4), transfer pricing (Form 3CEB), and Virtual CFO support. Higher-complexity operations trend toward the upper end."
              }
            },
            {
              "@type": "Question",
              "name": "Is EOR cheaper than a subsidiary in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Only at very small headcounts. At 5 employees on a mid-tier USD 400 PEPM EOR, you pay approximately USD 24,000 per year in platform fees alone - close to the USD 18,000 to USD 28,000 first-year cost of an entity. By 10 employees, EOR costs USD 48,000 per year vs entity at USD 28,000 Year 1 and USD 10,000 ongoing - entity wins decisively. By 25 employees, entity saves USD 90,000+ per year. EOR-cheaper holds only for 1-5 employees."
              }
            },
            {
              "@type": "Question",
              "name": "Can I use EOR forever in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Technically yes, but it stops making financial sense above 15 to 25 employees. Beyond that headcount, EOR fees compound linearly while entity overhead stays largely fixed. Strategically, EOR forever also forecloses several India options: you cannot invoice Indian customers in INR, raise Indian VC/PE funding, issue clean ESOPs to Indian employees, or build IP that needs to vest in an Indian entity. For sustained India operations, an entity becomes the cleaner answer."
              }
            },
            {
              "@type": "Question",
              "name": "What are the statutory thresholds that force entity setup in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Multiple statutory triggers reshape the EOR vs entity calculus as headcount grows. The Employees State Insurance Act 1948 applies at 10+ employees in notified states. The Payment of Gratuity Act 1972 applies at 10+ employees with 5-year vesting. The EPF Act 1952 makes PF mandatory at 20+ employees. International related-party transactions exceeding Rs 1 crore per year trigger Form 3CEB under Section 92E IT Act. Permanent Establishment risk under Section 9 IT Act applies to foreign parents."
              }
            },
            {
              "@type": "Question",
              "name": "How long does it take to set up an Indian subsidiary?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Incorporation via the MCA SPICe+ form typically takes 4 to 6 weeks from engagement-letter signing to Certificate of Incorporation. Full operational set-up including PAN, TAN, GST registration, EPFO and ESIC registrations, state professional tax enrolment, Digital Signature Certificates, Director Identification Numbers, registered office, Indian bank account opening, and first payroll cycle takes 60 to 75 days end-to-end. The bottleneck is usually bank account opening (banks require physical KYC of foreign directors) and statutory registrations."
              }
            },
            {
              "@type": "Question",
              "name": "Should I start with EOR and transition to entity, or set up entity from day one?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Start with EOR and transition to entity unless you have high confidence in your headcount and time horizon. The hybrid path saves money in three scenarios: uncertain market commitment (you might exit before hitting 10 employees), uncertain team-growth pace (you might stay smaller than projected), and immediate hiring urgency (you cannot wait 60 to 75 days for entity setup). Set up entity from day one if you are confident you will be at 25+ employees within 12 months."
              }
            },
            {
              "@type": "Question",
              "name": "What are the hidden costs of running an Indian subsidiary?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Beyond CA and statutory audit fees (USD 6,000 to USD 12,000 per year), foreign-owned subsidiaries face additional cost layers. Transfer pricing compliance for international related-party transactions adds USD 5,000 to USD 15,000 per year in professional fees. US-headquartered companies face Forms 5471 and 926 reporting requirements and potential GILTI tax exposure. Operational-attention cost is real but rarely modelled. Exit cost is often forgotten - subsidiary strike-off under Companies Act 2013 takes 3 to 4.5 years for full closure."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "https://www.patronaccounting.com/eor-india-vs-india-entity-setup#service",
          "name": "EOR vs Pvt Ltd India Decision Framework and Execution",
          "description": "Patron Accounting LLP provides CA-led decision-framework advisory and execution for foreign employers choosing between Employer of Record and Indian Pvt Ltd subsidiary setup. Coverage includes three-factor decision mapping (team size, time horizon, India strategy), cost-crossover analysis at 5-50 employees, statutory trigger thresholds (PF 20+, ESI 10+, Gratuity 10+, transfer pricing Rs 1 crore), Permanent Establishment risk diagnosis under Section 9 IT Act 1961, and execution of either Path A (EOR-equivalent partnership) or Path B (Pvt Ltd subsidiary under Companies Act 2013).",
          "serviceType": "EOR vs Indian Subsidiary Decision Framework and Execution",
          "provider": { "@id": "https://www.patronaccounting.com/#organization" },
          "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
          "about": [
            { "@type": "Thing", "name": "Employer of Record", "sameAs": "https://en.wikipedia.org/wiki/Employer_of_record" },
            { "@type": "Thing", "name": "Subsidiary", "sameAs": "https://en.wikipedia.org/wiki/Subsidiary" },
            { "@type": "Thing", "name": "Permanent establishment", "sameAs": "https://en.wikipedia.org/wiki/Permanent_establishment" },
            { "@type": "Thing", "name": "Foreign direct investment in India", "sameAs": "https://en.wikipedia.org/wiki/Foreign_direct_investment_in_India" }
          ],
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.patronaccounting.com/eor-india-vs-india-entity-setup",
            "datePublished": "2026-05-07T08:00:00+05:30"
            
          }
        }
      ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-4.css') }}?v=1">
@endpush
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
                        EOR vs Pvt Ltd India - The CA-Led Decision Framework
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>EOR Cost:</span> USD 99 to USD 1,000+ per employee per month depending on vendor tier. Linear scaling with headcount</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Pvt Ltd Setup:</span> USD 12,000 to USD 18,000 one-time setup. USD 6,000 to USD 12,000 annual compliance overhead</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Cost Crossover:</span> Industry consensus places EOR-to-entity transition at 15 to 25 employees in India</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Patron's Role:</span> CA-led firm offering both EOR-equivalent services and full Indian Pvt Ltd setup. We advise on the right path, then execute it</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Offices in Pune, Mumbai, Delhi, Gurugram | Patron Accounting LLP since 2019</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Eor%20India%20vs%20India%20Entity%20Setup%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'EOR vs Pvt Ltd India',
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
    'ctaText'    => 'Trusted by founders, CFOs, and HR heads across the US, UK, EU, Singapore, and Australia for vendor-neutral CA-led decisions on EOR vs Indian Pvt Ltd subsidiary setup, with execution under either Path A or Path B.',
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
            <a href="#what-section" class="toc-btn">What Is the Decision</a>
            <a href="#who-section" class="toc-btn">Three-Factor Decision Tree</a>
            <a href="#services-section" class="toc-btn">Patron's Dual Service Model</a>
            <a href="#procedure-section" class="toc-btn">Decision + Execution Process</a>
            <a href="#documents-section" class="toc-btn">Documents Checklist</a>
            <a href="#challenges-section" class="toc-btn">Decision Pitfalls</a>
            <a href="#fees-section" class="toc-btn">Cost Crossover Analysis</a>
            <a href="#timeline-section" class="toc-btn">Time Taken</a>
            <a href="#benefits-section" class="toc-btn">Why CA-Led</a>
            <a href="#comparison-section" class="toc-btn">EOR vs Pvt Ltd Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">EOR vs Pvt Ltd India: A Decision Framework, Not a Product Comparison</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - EOR vs Pvt Ltd India Services at a Glance</strong></p>
                    <p>Use an Employer of Record for India hiring when you have under 10 employees, a time horizon under 12 months, or are testing the market. Set up an Indian Pvt Ltd subsidiary when you cross 15 to 25 employees, plan multi-year operations, need local invoicing or Indian funding, or face transfer pricing exposure. The hybrid path - start with EOR, transition to entity at 15+ headcount - saves the most companies the most money. Patron Accounting LLP offers both services under one CA-led engagement.</p>
                </div>
                <p>This page is the decision framework for one of the most consequential choices a foreign employer makes when hiring in India. Patron Accounting LLP is unusual in this space: as a CA-led firm, we offer both EOR-equivalent partnership services and full Pvt Ltd subsidiary setup. We earn revenue either way, which means we can give you the honest answer rather than the answer that sells our preferred product.</p>
                <p>Patron Accounting LLP brings CA-led India compliance with offices in Pune, Mumbai, Delhi, and Gurugram. Foreign employers headquartered in the United States, the United Kingdom, the European Union, Singapore, and Australia rely on us for vendor-neutral decision advisory - we earn revenue on Path A (EOR-equivalent partnership) and Path B (Pvt Ltd subsidiary) equally, so the recommendation reflects your situation rather than our preferred product.</p>
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
                <h2 class="section-title">What Is the EOR vs Pvt Ltd India Decision?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>The EOR vs Pvt Ltd India decision is the choice every foreign employer makes when hiring in India - whether to use a third-party Employer of Record that becomes the legal employer, or to set up an Indian Private Limited subsidiary and become the direct employer.</p>
<p>Each path has distinct cost economics, statutory implications, strategic positioning, and exit characteristics. The decision is not binary: many companies use a hybrid path - starting with EOR for the first 6 to 18 months, then transitioning to a subsidiary once headcount and time horizon justify the fixed compliance overhead.</p>
<p>The right answer depends on three primary factors: team size, time horizon, and India strategy.</p>
<h3 style="color:var(--blue);margin-top:24px;">Quick-Reference Summary Table</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Parameter</th><th>Employer of Record (EOR)</th><th>Indian Pvt Ltd Subsidiary</th></tr></thead>
  <tbody>
    <tr><td>Setup Cost</td><td>Zero. No incorporation. Hiring begins in 48 hours to 7 days</td><td>USD 12,000 to USD 18,000 one-time. 4 to 6 weeks to incorporate</td></tr>
    <tr><td>Per-Employee Cost</td><td>USD 99 to USD 1,000+ per month depending on vendor. Linear scaling</td><td>Negligible per-employee platform fee. Statutory contributions same as EOR</td></tr>
    <tr><td>Annual Overhead</td><td>Already in PEPM fee. No separate compliance cost</td><td>USD 6,000 to USD 12,000 for CA, ROC, audit, transfer pricing</td></tr>
    <tr><td>Best For Headcount</td><td>1 to 10 employees. EOR math wins below this threshold</td><td>15+ employees long term. Entity math wins above this threshold</td></tr>
    <tr><td>Time Horizon Fit</td><td>Under 12 months. Market test. Pilot project. Short-term contract</td><td>24+ months. Long-term operation. GCC. Multi-year strategy</td></tr>
    <tr><td>Strategic Fit</td><td>Hire global talent without committing to India infrastructure</td><td>Build a permanent India presence; invoice Indian customers; raise Indian funding</td></tr>
    <tr><td>Exit Cost</td><td>Days. Notice to EOR; employee offboarding through their entity</td><td>3 to 4.5 years for full strike-off under Companies Act 2013</td></tr>
  </tbody>
</table>
</div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for EOR vs Pvt Ltd India:</strong></p>
                    <ul>
  <li><strong>EOR (Employer of Record):</strong> A third-party organisation that becomes the legal employer for your worker in India and assumes liability for payroll, statutory contributions, and labour-law compliance. You retain operational control; they hold legal employer responsibility.</li>
  <li><strong>Pvt Ltd (Indian Private Limited Subsidiary):</strong> A wholly-owned Indian company incorporated under the Companies Act 2013 by your foreign parent. Your subsidiary becomes the direct employer of your India team and carries all statutory responsibilities.</li>
  <li><strong>Cost Crossover:</strong> The headcount at which fully-loaded EOR fees exceed fixed entity overhead plus per-employee statutory costs. Industry consensus: 15 to 25 employees in India.</li>
  <li><strong>Permanent Establishment (PE) Risk:</strong> The risk under Section 9 IT Act and applicable tax treaties that your foreign parent's India operations create a 'fixed place of business' that triggers Indian corporate tax (25 to 30 percent) on attributable profits.</li>
  <li><strong>Hybrid Path:</strong> The pattern of starting with EOR for early hiring, then incorporating an Indian subsidiary once headcount, time horizon, and strategy justify the transition. Typically the most cost-effective approach for foreign employers building 15+ person India teams.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">EOR vs Pvt Ltd India</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Three-Factor Decision</span>
                        <strong>Team Size + Time Horizon + India Strategy</strong>
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
            <h2 class="section-title">The Decision Tree - Three Primary Factors</h2>
            <div class="content-text">
                
                <p>The right India hiring path depends on three factors. Map your situation against each, then choose accordingly.</p>

<h3 style="color:var(--blue);margin-top:24px;">Factor 1 - Team Size</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>India Headcount</th><th>Recommendation</th></tr></thead>
  <tbody>
    <tr><td>1 to 5</td><td>EOR almost always wins. Setup cost of an entity is not amortisable across this small a base. Hire fast, validate the market.</td></tr>
    <tr><td>5 to 10</td><td>EOR still wins on math. Begin entity planning if you are confident headcount will cross 15 within 12 months.</td></tr>
    <tr><td>10 to 20</td><td>Transition zone. Run a side-by-side annual cost model. Most companies migrate to entity in this band.</td></tr>
    <tr><td>20 to 50</td><td>Entity wins on cost. PF mandatory threshold (20+) crossed; transfer pricing likely already triggered. Migrate.</td></tr>
    <tr><td>50+</td><td>Entity is the only sensible answer. EOR fees at this scale waste meaningful annual budget.</td></tr>
  </tbody>
</table>
</div>

<h3 style="color:var(--blue);margin-top:24px;">Factor 2 - Time Horizon</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Time Horizon</th><th>Recommendation</th></tr></thead>
  <tbody>
    <tr><td>Under 12 months</td><td>EOR. Market test, pilot project, short-term contract, or uncertain commitment all favour the lower-risk path.</td></tr>
    <tr><td>12 to 24 months</td><td>Hybrid path. Start with EOR for speed; plan entity incorporation in parallel. Migrate at month 9 to 12.</td></tr>
    <tr><td>24+ months</td><td>Entity from day one is often correct. EOR fees compound; entity fixed costs amortise across the operating window.</td></tr>
  </tbody>
</table>
</div>

<h3 style="color:var(--blue);margin-top:24px;">Factor 3 - India Strategy</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Strategic Goal</th><th>Recommendation</th></tr></thead>
  <tbody>
    <tr><td>Test the India market</td><td>EOR. Stay flexible. Validate before committing capital.</td></tr>
    <tr><td>Service delivery to global parent (no India revenue)</td><td>Either path works. Lean entity if headcount grows; lean EOR if it stays small.</td></tr>
    <tr><td>Global Capability Center (GCC)</td><td>Entity required. GCC strategy implies long-term presence and meaningful scale.</td></tr>
    <tr><td>Sell to Indian customers</td><td>Entity required. INR invoicing, GST registration, and Indian bank account demand a local company.</td></tr>
    <tr><td>Raise Indian VC/PE funding</td><td>Entity required. Indian institutional investors fund Indian companies, not EOR-staffed teams.</td></tr>
    <tr><td>Issue ESOPs to Indian employees</td><td>Entity strongly preferred. Cross-border ESOPs trigger ITR exposure and FEMA reporting; cleaner under an Indian subsidiary.</td></tr>
    <tr><td>IP that needs Indian valuation</td><td>Entity required. Cost-plus model under transfer pricing requires entity counterparty.</td></tr>
    <tr><td>Government tender bidding</td><td>Entity required. Most Indian government and PSU tenders mandate an Indian-incorporated bidder.</td></tr>
  </tbody>
</table>
</div>

<p style="margin-top:20px;"><strong>Decision logic:</strong> If any of the three factors strongly indicates entity, set up an entity. If all three lean EOR, use EOR. If the picture is mixed - which is the most common case - use the hybrid path. Patron's CA team helps you map your situation across all three factors during the discovery call.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron's Dual Service Model - We Offer Both Paths</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Path A - EOR-Equivalent Partnership</td><td>Patron acts as your India compliance partner running on top of an existing EOR shell or as your direct payroll and statutory advisor. Monthly payroll processing in INR, TDS deduction under Section 192 IT Act, EPF 12 percent, ESI 3.25 percent, gratuity accrual, professional tax, leave and attendance.</td></tr>
                        <tr><td>Path A - Statutory Filings + Compliant Contracts</td><td>Form 24Q, ECR for PF, ESI returns, professional tax, Form 16 issuance, GST returns where applicable. Compliant offer letters under each state's Shops and Establishments Act with India-appropriate IP, confidentiality, and notice clauses. CA-signed Form 15CB on outbound remittances and transfer pricing certificates where applicable.</td></tr>
                        <tr><td>Path A - Designed to Migrate</td><td>If your headcount or strategy crosses the entity threshold, the same Patron team handles incorporation - no vendor switch. Engagement letter scope includes future migration support so the transition is operationally smooth at month 9-12 or whenever headcount triggers cross.</td></tr>
                        <tr><td>Path B - Pvt Ltd Incorporation</td><td>MCA SPICe+ incorporation: Private Limited or LLP under the Companies Act 2013. Name approval, MOA/AOA drafting, director KYC. Statutory registrations: PAN, TAN, GST (where applicable), EPFO, ESIC, state professional tax, Shops and Establishments registration.</td></tr>
                        <tr><td>Path B - FDI Compliance + Bank Account</td><td>Initial paid-up capital remittance under FEMA 1999, FC-GPR filing within 30 days of FDI inflow, Annual Performance Report. Indian bank account opening, Digital Signature Certificates (DSC), Director Identification Numbers (DIN). FIRC from receiving Indian bank.</td></tr>
                        <tr><td>Path B - Ongoing Compliance + Year 1 Audit</td><td>Statutory audit (Section 143 Companies Act 2013), MGT-7 annual return, AOC-4 financials, transfer pricing (Form 3CEB), GST audit, Virtual CFO. End-to-end ownership: same CA practice from incorporation through year-3 audit. No vendor handoffs.</td></tr>

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
            <h2 class="section-title">How Patron Helps You Decide and Execute (6 Sequential Steps)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron's decision-and-execution workflow is vendor-neutral - we earn revenue on Path A and Path B equally. Every step cites the relevant Act or Section. Legal Verification: Income Tax Act 1961, EPF Act 1952, ESI Act 1948, Payment of Gratuity Act 1972, Companies Act 2013, and FEMA 1999.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Discovery Call (Free 30 minutes)</h3>
        <p class="step-description">Understand your India hiring goal, headcount projection, target cities, role profiles, time horizon, and strategic context. Map across the three decision factors.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3 factors mapped</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Headcount</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Strategy</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="100" height="70" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="32" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="32" y="44" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">SIZE</text><circle cx="60" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="44" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">TIME</text><circle cx="88" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="88" y="44" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">STRAT</text><line x1="20" y1="60" x2="100" y2="60" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="20" y1="72" x2="92" y2="72" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Decision Mapped</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Decision Recommendation</h3>
        <p class="step-description">Patron issues a written recommendation - EOR partnership, subsidiary setup, or hybrid path - with cost-comparison numbers specific to your headcount and timeline.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Written rec</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cost numbers</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Path A/B/Hybrid</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="5" width="80" height="90" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="20" x2="90" y2="20" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="61" x2="75" y2="61" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="74" x2="80" y2="74" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Path Chosen</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Engagement Letter</h3>
        <p class="step-description">Patron issues a fixed-scope engagement letter signed by a Chartered Accountant. Pricing is itemised by service line for the chosen path.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA signed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fixed scope</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Itemised price</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="32" font-size="10" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">ENGAGEMENT</text><line x1="22" y1="42" x2="98" y2="42" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="52" x2="92" y2="52" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="62" x2="85" y2="62" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="92" cy="78" r="8" fill="#25D366"/><path d="M88 78 L91 81 L96 75" stroke="#fff" stroke-width="2" stroke-linecap="round" fill="none"/></svg>
            </div>
            <span class="illustration-label">Letter Signed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Execution: Path A or Path B</h3>
        <p class="step-description">Path A engagement begins immediately; Path B subsidiary incorporation begins within 7 days of engagement-letter signing via MCA SPICe+ form (4 to 6 weeks to certificate).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Path A immediate</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Path B 7 days</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SPICe+</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="35" y="42" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Path A</text><rect x="65" y="20" width="40" height="55" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="42" font-size="8" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">Path B</text><line x1="20" y1="55" x2="50" y2="55" stroke="#14365F" stroke-width="1.5"/><line x1="70" y1="55" x2="100" y2="55" stroke="#E8712C" stroke-width="1.5"/></svg>
            </div>
            <span class="illustration-label">Execution Live</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Compliance Calendar</h3>
        <p class="step-description">Whether Path A or Path B, monthly TDS by the 7th, PF and ESI by the 15th, quarterly Form 24Q, annual Form 16 by 15 June.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Monthly TDS/PF</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Quarterly 24Q</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual Form 16</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="35" y="39" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">PF</text><circle cx="60" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="39" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">TDS</text><circle cx="85" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="39" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">24Q</text><line x1="22" y1="58" x2="98" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="68" x2="92" y2="68" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="78" x2="85" y2="78" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Steady State</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Quarterly Review and Migration</h3>
        <p class="step-description">Re-evaluate the path quarterly. If headcount or strategy crosses thresholds, recommend transition. The same CA team handles the migration from Path A to Path B.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Quarterly check</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Threshold trigger</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Same CA team</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="32" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="50" r="22" fill="none" stroke="#E8712C" stroke-width="1.5" stroke-dasharray="3 2"/><line x1="60" y1="40" x2="60" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="60" y1="50" x2="70" y2="56" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><circle cx="60" cy="50" r="2" fill="#14365F"/></svg>
            </div>
            <span class="illustration-label">Migration Ready</span>
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
            <h2 class="section-title">Documents Checklist for Each Path</h2>
            <div class="content-text">
                
                <h3 style="color:var(--blue);margin-top:8px;">For EOR Partnership Path (Path A)</h3>
<ul>
  <li>Foreign parent company details - registration certificate, address, contact.</li>
  <li>Existing India hiring targets - role profiles, target cities, projected start dates.</li>
  <li>Existing EOR shell relationship (if any) - vendor name, contract terms.</li>
  <li>India payroll software preference - Zoho, Greytip, or Patron-managed.</li>
  <li>Bank account for INR-denominated invoicing (Indian bank account in foreign company name where used).</li>
</ul>
<h3 style="color:var(--blue);margin-top:24px;">For Pvt Ltd Subsidiary Setup (Path B)</h3>
<ul>
  <li>Foreign parent Certificate of Incorporation, MOA, and AOA (apostilled).</li>
  <li>Board resolution authorising India subsidiary set-up.</li>
  <li>Director identification documents - passport, address proof, photographs.</li>
  <li>Digital Signature Certificate (DSC) and Director Identification Number (DIN) - we obtain these.</li>
  <li>Indian registered office proof - rent agreement, NOC, latest utility bill.</li>
  <li>Initial paid-up capital remittance proof under FEMA 1999.</li>
  <li>Foreign Inward Remittance Certificate (FIRC) from the receiving Indian bank.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Four Common Decision Pitfalls and How Patron Avoids Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Choosing EOR Beyond the Cost Crossover</td><td>Companies stick with EOR past 20 to 25 employees because the operational simplicity is comfortable. At that scale, EOR fees of USD 400 to USD 1,000 per employee per month become USD 96,000 to USD 240,000 per year of platform fees alone - significantly exceeding the USD 6,000 to USD 12,000 annual cost of running a subsidiary's CA, audit, and ROC compliance.</td><td>Patron runs a quarterly cost review on every engagement past 12 months. When EOR fees exceed projected entity overhead, we recommend migration with a written cost projection. We do not penalise the migration - the same Patron team executes both paths.</td></tr>
                        <tr><td>Setting Up an Entity Too Early</td><td>Founders excited about India presence often incorporate a Pvt Ltd before they have 5 employees. The annual fixed cost of statutory audit, ROC filings, transfer pricing, FEMA compliance, and CA fees does not amortise across 3 to 5 employees. Worse, if the team does not grow as planned, exit takes 3 to 4.5 years for full strike-off.</td><td>Patron's discovery call builds a 24-month headcount projection before recommending entity setup. If projected steady-state is below 10 employees, we recommend Path A and revisit quarterly. The same Patron team executes Path A first and Path B later when triggers cross.</td></tr>
                        <tr><td>Ignoring Permanent Establishment Risk on EOR</td><td>EOR is often sold as 'no Indian tax exposure for the parent'. Reality: if your foreign parent has employees performing core business activities in India under fixed contractual arrangements, Section 9 IT Act and applicable tax treaties may still trigger Permanent Establishment - meaning Indian corporate tax (25 to 30 percent) on attributable profits. EOR shifts the employer relationship; it does not always eliminate PE risk.</td><td>Patron's CA team flags PE-triggering scenarios during the discovery call - long-term contracts, dedicated India teams, Indian customer-facing roles. Where PE risk is real, we recommend entity setup as the cleaner answer rather than relying on EOR to neutralise tax exposure.</td></tr>
                        <tr><td>Underestimating Statutory Trigger Thresholds</td><td>Foreign employers assume Indian compliance is uniform regardless of headcount. Reality: ESI applies at 10+ employees in notified states; the Gratuity Act applies at 10+; PF becomes mandatory at 20+; transfer pricing kicks in at Rs 1 crore (USD 108K) of related-party transactions per year. Hitting any of these thresholds while on EOR may trigger compliance gaps that the EOR does not fully address.</td><td>Patron's compliance calendar tracks all statutory trigger thresholds. When your team approaches 10, 15, or 20 employees, we proactively flag the next compliance set that activates and recommend the right path - either expanded EOR scope under Path A or migration to Path B.</td></tr>

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
            <h2 class="section-title">Cost Crossover Analysis - Annual Cost Comparison by Headcount</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>5 employees - EOR Annual Cost (mid-tier USD 400 PEPM)</td><td class="text-right">USD 24,000</td></tr>
                        <tr><td>5 employees - Indian Pvt Ltd Annual Cost</td><td class="text-right">USD 27,000 Year 1; USD 9,000 Year 2+</td></tr>
                        <tr><td>10 employees - EOR Annual Cost</td><td class="text-right">USD 48,000</td></tr>
                        <tr><td>10 employees - Indian Pvt Ltd Annual Cost</td><td class="text-right">USD 28,000 Year 1; USD 10,000 Year 2+</td></tr>
                        <tr><td>15 employees - EOR Annual Cost</td><td class="text-right">USD 72,000</td></tr>
                        <tr><td>15 employees - Indian Pvt Ltd Annual Cost</td><td class="text-right">USD 29,000 Year 1 - Entity wins decisively</td></tr>
                        <tr><td>25 employees - EOR Annual Cost</td><td class="text-right">USD 120,000</td></tr>
                        <tr><td>25 employees - Indian Pvt Ltd Annual Cost</td><td class="text-right">USD 30,000 Year 1 - Entity saves USD 90,000+</td></tr>
                        <tr><td>50 employees - EOR Annual Cost</td><td class="text-right">USD 240,000</td></tr>
                        <tr><td>50 employees - Indian Pvt Ltd Annual Cost</td><td class="text-right">USD 32,000 Year 1 - Entity saves USD 200,000+</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td class="text-right"><strong>Path A starting from USD 10,000 per year (Exl GST and Govt. Charges)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free EOR vs Pvt Ltd India consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Eor%20India%20vs%20India%20Entity%20Setup%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken for Each Path</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>EOR through external vendor (Multiplier)</td><td>48 hours</td></tr>
                        <tr><td>EOR through external vendor (Deel / Remote)</td><td>3 to 5 days</td></tr>
                        <tr><td>EOR through external vendor (G-P)</td><td>5 to 10 days</td></tr>
                        <tr><td>Patron Partnership Model (Path A)</td><td>1 to 2 weeks</td></tr>
                        <tr><td>Pvt Ltd Incorporation (MCA SPICe+)</td><td>4 to 6 weeks</td></tr>
                        <tr><td>Pvt Ltd First Hire (Full Setup)</td><td>60 to 75 days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Cost crossover takeaway:</strong> Even at 5 employees the entity model wins by Year 2. By 10 employees, entity wins from Year 1. The EOR-cheaper assumption only holds for very small teams (1 to 5) on short horizons (under 12 months) where the operational simplicity premium is worth paying. Numbers above use mid-tier EOR PEPM (USD 400, e.g. Multiplier-tier) - higher tiers (Deel, Remote, G-P) push the crossover even earlier.</p>
<p style="margin-top:12px;"><strong>Honest framing on speed:</strong> If you need someone hired in India in 48 hours, only an external EOR delivers that. Patron's partnership model lands at 1-2 weeks, the entity model at 60-75 days. Speed is genuinely the EOR's advantage; cost and integration are entity advantages. The hybrid path captures both - speed via EOR for the first hire, then long-term cost economics via entity migration once the team stabilises.</p>
<p style="margin-top:12px;"><strong>Caveats to the model:</strong> Entity costs include CA fees, statutory audit, ROC filings, and standard transfer pricing compliance. They exclude Permanent Establishment-triggered tax exposure savings (which favour entity further), one-time international restructuring costs, and the operational-attention burden of managing a subsidiary internally.</p>

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
            <h2 class="section-title">Why a CA-Led Decision Framework Matters</h2>
        </div>
        <div class="features-grid">
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 6v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V6l-8-4z"/><path d="M9 12l2 2 4-4"/></svg></div>
    <h3>Vendor neutrality</h3>
    <p>Patron earns revenue on both paths. EOR vendors push EOR; corporate-services firms push subsidiary setup. A CA-led firm with both services has financial alignment with whichever path actually fits your situation.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
    <h3>Statutory expertise</h3>
    <p>Indian compliance has multiple trigger thresholds (ESI 10, Gratuity 10, PF 20, TP 1 crore) that affect when entity setup becomes mandatory or strongly preferred. CA practices know these natively.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><line x1="3.27" y1="6.96" x2="12" y2="12.01"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
    <h3>PE risk diagnosis</h3>
    <p>Permanent Establishment risk under Section 9 IT Act and tax treaties is a complex tax-treaty question. EOR vendors often gloss over it; CAs assess it with the parent-company tax counsel.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
    <h3>Cost modelling rigour</h3>
    <p>CA practices have run hundreds of EOR vs Entity cost models. The fully-loaded numbers (statutory audit, transfer pricing, ROC, GST, Virtual CFO) are not marketing math - they reflect what India compliance actually costs.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
    <h3>Migration capability</h3>
    <p>If the right answer is start-with-EOR-then-migrate, Patron handles the migration. No vendor switch when the team crosses 15 employees - the same Patron CA who advised you executes the incorporation.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="14 2 14 8 20 8"/><path d="M16 13H8M16 17H8M10 9H8"/><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/></svg></div>
    <h3>Audit and certification authority</h3>
    <p>Once you have a Pvt Ltd, you need a Chartered Accountant for statutory audit (Section 143), tax audit (Section 44AB), Form 3CEB transfer pricing, and Form 15CB foreign remittance certificates. Starting with a CA practice means no vendor introduction later.</p>
  </div>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Social Proof and Trust Signals</h2>
            <div class="content-text">
                
                <p style="font-size:15px;color:var(--blue);font-weight:600;">10,000+ Businesses Served | 4.9 Google Rating | 4 Office Cities | Both Paths (EOR + Entity setup) | CA-led practice since 2019</p>
<h3 style="color:var(--blue);margin-top:24px;">Outcome Proof</h3>
<p>Anonymised case data: A foreign-funded SaaS company asked Patron to set up an Indian subsidiary in early 2024 with 4 India hires planned. Patron's discovery call identified that the 24-month headcount projection was 5 to 8 employees - well below the entity-favourable threshold. Patron recommended Path A (partnership over an external EOR shell) for 12 to 18 months. By month 14, the company had grown to 16 India employees with a confirmed multi-year roadmap. Patron then executed Path B incorporation and migrated all 16 employees in 75 days. Total saved by NOT incorporating early: approximately USD 22,000 in unnecessary Year 1 fixed compliance costs.</p>
<h3 style="color:var(--blue);margin-top:24px;">Client Logos</h3>
<p>Hyundai | Asian Paints | Bridgestone | (subset of clients across foreign and domestic engagements)</p>
<p style="margin-top:16px;font-size:14px;color:var(--text-muted);"><em>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting LLP serves businesses across India - both in-person and remotely.</em></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">EOR vs Indian Pvt Ltd - 15-Row Honest Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Dimension</th><th>Employer of Record (EOR)</th><th>Indian Pvt Ltd Subsidiary</th></tr></thead>
                    <tbody>
                        <tr><td>Legal Employer</td><td>EOR vendor (third party)</td><td>Your Indian subsidiary (you)</td></tr>
                        <tr><td>Setup Cost</td><td>Zero. No incorporation required</td><td>USD 12,000 to USD 18,000 one-time</td></tr>
                        <tr><td>Setup Timeline</td><td><span class="badge-included">Hire live in 48 hours to 7 business days</span></td><td>4 to 6 weeks for incorporation; 60 to 75 days fully operational</td></tr>
                        <tr><td>Per-Employee Cost</td><td>USD 99 to USD 1,000+ per month. Linear scaling</td><td><span class="badge-included">Negligible per-employee. Statutory contributions same as EOR</span></td></tr>
                        <tr><td>Annual Compliance Cost</td><td>Bundled into PEPM fee</td><td>USD 6,000 to USD 12,000 (CA, audit, ROC, transfer pricing)</td></tr>
                        <tr><td>Headcount Sweet Spot</td><td>1 to 10 employees</td><td><span class="badge-included">15+ employees long term</span></td></tr>
                        <tr><td>Time Horizon Sweet Spot</td><td>Under 12 months. Market test or pilot</td><td><span class="badge-included">24+ months. Long-term India operation</span></td></tr>
                        <tr><td>Indian Bank Account</td><td>Not available - EOR vendor handles all funds</td><td><span class="badge-included">Yes - subsidiary opens its own corporate bank account</span></td></tr>
                        <tr><td>Sell to Indian Customers</td><td>Not possible - no INR invoicing capability</td><td><span class="badge-included">Yes - GST registration enables INR invoicing</span></td></tr>
                        <tr><td>Raise Indian Funding</td><td>Not available - Indian VC/PE funds Indian companies</td><td><span class="badge-included">Yes - subsidiary can raise from Indian institutional investors</span></td></tr>
                        <tr><td>Issue ESOPs</td><td>Possible via parent-company plan but tax/FEMA-complex</td><td><span class="badge-included">Cleaner via subsidiary ESOP plan under Section 17(2)(vi) IT Act</span></td></tr>
                        <tr><td>Permanent Establishment Risk</td><td>Reduced but not eliminated. Still requires assessment</td><td><span class="badge-included">Cleanly resolved - subsidiary is the Indian taxpayer</span></td></tr>
                        <tr><td>Statutory Audit</td><td>Not applicable to your foreign parent</td><td>Mandatory under Section 143 Companies Act 2013 from Year 1</td></tr>
                        <tr><td>Transfer Pricing</td><td>Not applicable to EOR-employed staff</td><td>Form 3CEB required if international RPTs exceed Rs 1 crore</td></tr>
                        <tr><td>Exit Cost</td><td><span class="badge-included">Days. Notice to vendor; offboarding through their entity</span></td><td>3 to 4.5 years for full strike-off under Companies Act 2013</td></tr>

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
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                <p>Whether you choose EOR partnership (Path A) or Pvt Ltd setup (Path B), these are the underlying Patron services that execute your decision:</p>
<ul>
  <li>If you have not yet selected an EOR vendor, see our 9-provider roundup at <a href="/best-eor-providers-india-2026">Best EOR Providers India 2026</a>.</li>
  <li>If you currently have Indian contractors and need conversion to compliant employment, see <a href="/eor-vs-contractor-india">EOR vs Contractor India</a>.</li>
  <li>For vertical-specific EOR engagements: <a href="/eor-india-for-saas-companies">EOR India for SaaS Companies</a>, <a href="/eor-india-for-fintechs">EOR India for Fintech</a>, <a href="/eor-india-for-ai-companies">EOR India for AI Companies</a>, <a href="/eor-india-for-tech-startups">EOR India for Tech Startups</a>.</li>
  <li>For team-type EOR engagements, see <a href="/eor-india-engineering-team">EOR India engineering team</a> and <a href="/eor-india-customer-support-team">EOR India customer support team</a>.</li>
  <li><a href="/payroll-services">Payroll services</a> - End-to-end monthly payroll processing in INR with TDS, PF, ESI, and gratuity calculations. Core to both paths.</li>
  <li><a href="/private-limited-company-registration">Private Limited Company registration</a> - Indian Pvt Ltd subsidiary incorporation under the Companies Act 2013 via MCA SPICe+. Path B execution.</li>
  <li><a href="/fdi-compliance">FDI compliance</a> - FC-GPR, FC-TRS, ECB-2, and Annual Performance Report filings under FEMA 1999. Required for Path B with foreign parent.</li>
  <li><a href="/pf-registration">PF registration</a> - EPFO establishment registration and Universal Account Number setup. Mandatory at 20+ employees.</li>
  <li><a href="/tds-return-filing-24q">TDS return filing 24Q</a> - Form 24Q quarterly TDS returns and Form 16 issuance under Section 192 IT Act. Both paths.</li>
  <li><a href="/private-limited-company-compliance">Private Limited and LLP compliance</a> - Annual ROC filings, board meetings, statutory registers, director compliance. Required for Path B.</li>
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
                
                <p>Hiring employees in India creates obligations under multiple central and state statutes. The decision between EOR and Pvt Ltd does not eliminate these - it shifts who bears them.</p>
<h3 style="color:var(--blue);margin-top:16px;">Governing Acts</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Statute</th><th>Key Sections</th><th>Authority</th></tr></thead>
  <tbody>
    <tr><td>Companies Act 2013</td><td>Section 2(87) subsidiary; Section 92 annual return; Section 137 financial statements; Section 143 statutory audit</td><td>Ministry of Corporate Affairs (MCA)</td></tr>
    <tr><td>Income Tax Act 1961</td><td>Section 9 PE definition; Section 92 transfer pricing; Section 192 TDS on salary; Section 195 TDS on remittances; Section 44AB tax audit</td><td>Central Board of Direct Taxes (CBDT)</td></tr>
    <tr><td>Employees Provident Funds Act 1952</td><td>Section 1(3) applicability at 20+ employees; Section 6 contributions; Section 7Q interest; Section 14B damages</td><td>EPFO under Ministry of Labour and Employment</td></tr>
    <tr><td>Employees State Insurance Act 1948</td><td>Section 2(12) factory/establishment definition; applicability at 10+ employees in notified states</td><td>ESIC</td></tr>
    <tr><td>Payment of Gratuity Act 1972</td><td>Section 1(3) applicability at 10+ employees; Section 4 eligibility after 5 years</td><td>Controlling Authorities (state)</td></tr>
    <tr><td>Foreign Exchange Management Act 1999</td><td>Section 6 capital account; FEMA 20(R) FDI rules; APR reporting</td><td>Reserve Bank of India (RBI)</td></tr>
  </tbody>
</table>
</div>
<h3 style="color:var(--blue);margin-top:24px;">Penalty Snapshot</h3>
<ul>
  <li>PE-triggered Indian corporate tax: 25 to 30 percent of attributable profits if Permanent Establishment is established under Section 9 IT Act and applicable tax treaties.</li>
  <li>TDS late deposit: Interest at 1.5 percent per month under Section 201(1A) IT Act.</li>
  <li>PF late deposit: Interest at 12 percent per annum under Section 7Q EPF Act plus damages of 5 to 25 percent under Section 14B.</li>
  <li>ESI late deposit: Interest at 12 percent per annum and damages up to 25 percent under Section 85B ESI Act.</li>
  <li>ROC late filing: Rs 100 per day per form with no maximum cap under Section 403 Companies Act 2013.</li>
  <li>Transfer pricing non-compliance: 2 percent of value of international transactions under Section 271AA IT Act for failure to maintain documentation.</li>
</ul>
<p style="margin-top:16px;">Authoritative reference: Statutory text available at <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">India Code (Ministry of Law and Justice)</a>. EPF compliance reference at <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">EPFO</a>. Income tax filings at <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">Income Tax Department</a>.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Real questions from foreign founders, CFOs, and HR heads choosing between EOR and Indian Pvt Ltd. Drawn from Google PAA and Patron client mandates.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'EOR vs Pvt Ltd India',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">When should I switch from EOR to setting up an Indian entity?</h3>
                        <div class="faq-expanded__a"><p>Industry consensus places the EOR-to-entity transition at 15 to 25 employees in India. The exact threshold depends on the EOR tier you use - higher-priced platforms like G-P or Deel push the crossover earlier (around 10 to 15 employees) because their PEPM fees compound faster. Time horizon matters too. If you expect 20+ employees within 18 months, start incorporation paperwork now since it takes 4 to 6 weeks. If your team will stay below 10 long-term, stay on EOR.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does it cost to set up an Indian Pvt Ltd subsidiary?</h3>
                        <div class="faq-expanded__a"><p>Total one-time setup cost typically runs USD 12,000 to USD 18,000 covering MCA SPICe+ incorporation, PAN, TAN, GST registration, EPFO and ESIC registrations, DSC, DIN, registered office set-up, and FEMA filing for capital remittance. Annual ongoing compliance runs USD 6,000 to USD 12,000 covering CA fees, statutory audit (Section 143 Companies Act), ROC filings (MGT-7, AOC-4), transfer pricing (Form 3CEB if applicable), and Virtual CFO support. Higher-complexity operations (multi-state, related-party-transaction-heavy) trend toward the upper end.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is EOR cheaper than a subsidiary in India?</h3>
                        <div class="faq-expanded__a"><p>Only at very small headcounts. At 5 employees on a mid-tier USD 400 PEPM EOR, you pay approximately USD 24,000 per year in platform fees alone - close to the USD 18,000 to USD 28,000 first-year cost of an entity. By 10 employees, EOR costs USD 48,000 per year vs entity at approximately USD 28,000 in Year 1 and USD 10,000 ongoing - entity wins decisively. By 25 employees, EOR runs USD 120,000 vs entity USD 30,000 - entity saves USD 90,000+ per year. The EOR-cheaper assumption only holds for 1 to 5 employees on horizons under 12 months.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I use EOR forever in India?</h3>
                        <div class="faq-expanded__a"><p>Technically yes, but it stops making financial sense above 15 to 25 employees. Beyond that headcount, EOR fees compound linearly while entity overhead stays largely fixed. Strategically, EOR forever also forecloses several India options: you cannot invoice Indian customers in INR, raise Indian VC/PE funding, issue clean ESOPs to Indian employees, or build IP that needs to vest in an Indian entity. For sustained India operations, an entity becomes the cleaner answer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What are the statutory thresholds that force entity setup in India?</h3>
                        <div class="faq-expanded__a"><p>Multiple statutory triggers reshape the EOR vs entity calculus as headcount grows. The Employees State Insurance Act 1948 applies at 10+ employees in notified states. The Payment of Gratuity Act 1972 applies at 10+ employees with 5-year vesting. The EPF Act 1952 makes PF mandatory at 20+ employees. International related-party transactions exceeding Rs 1 crore (USD 108,700) per year trigger Form 3CEB transfer pricing documentation under Section 92E IT Act. Permanent Establishment risk under Section 9 IT Act applies whenever your foreign parent has a fixed place of business in India.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long does it take to set up an Indian subsidiary?</h3>
                        <div class="faq-expanded__a"><p>Incorporation via the MCA SPICe+ form typically takes 4 to 6 weeks from engagement-letter signing to Certificate of Incorporation. Full operational set-up including PAN, TAN, GST registration, EPFO and ESIC registrations, state professional tax enrolment, Digital Signature Certificates, Director Identification Numbers, registered office, Indian bank account opening, and first payroll cycle takes 60 to 75 days end-to-end. The bottleneck is usually bank account opening (banks require physical KYC of foreign directors) and statutory registrations that have their own SLA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Should I start with EOR and transition to entity, or set up entity from day one?</h3>
                        <div class="faq-expanded__a"><p>Start with EOR and transition to entity unless you have high confidence in your headcount and time horizon. The hybrid path saves money in three scenarios: uncertain market commitment (you might exit before hitting 10 employees), uncertain team-growth pace (you might stay smaller than projected), and immediate hiring urgency (you cannot wait 60 to 75 days for entity setup). Set up entity from day one if your strategic case requires it (selling to Indian customers, raising Indian funding, GCC strategy with 50+ projected headcount) or if you are confident you will be at 25+ employees within 12 months.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What are the hidden costs of running an Indian subsidiary?</h3>
                        <div class="faq-expanded__a"><p>Beyond CA and statutory audit fees (USD 6,000 to USD 12,000 per year), foreign-owned subsidiaries face additional cost layers. Transfer pricing compliance for international related-party transactions adds USD 5,000 to USD 15,000 per year in professional fees. US-headquartered companies face Forms 5471 and 926 reporting requirements and potential GILTI tax exposure. Operational-attention cost is real but rarely modelled - someone in your finance team owns the Indian entity relationship monthly. Exit cost is often forgotten - subsidiary strike-off under Companies Act 2013 takes 3 to 4.5 years for full closure.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">EOR ya Pvt Ltd India mein kya behtar hai?</h3>
                        <div class="faq-expanded__a"><p>Aapke headcount, time horizon, aur strategy par depend karta hai. Agar 1-10 employees hain, 12 mahine se kam ka horizon hai, ya market test kar rahe hain - EOR best hai. Agar 15+ employees plan karte hain ya multi-year operation hai - Pvt Ltd subsidiary banayein. Agar Indian customers ko bechna hai, Indian VC/PE funding chahiye, ya GCC strategy hai - subsidiary mandatory hai. Hybrid path (pehle EOR, baad mein subsidiary) most companies ke liye sabse paisa bachata hai. Patron Accounting LLP dono paths offer karta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Can I migrate from EOR to entity mid-year?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron handles employee migration from external EOR to your new Pvt Ltd typically in 30 to 60 days post-incorporation. The mechanics: clean termination from the EOR vendor, re-engagement under the new subsidiary on the same effective date with no break in employment, statutory enrolment under PF/ESI/gratuity carried forward, salary structure preserved, and IP-assignment continuity ensured. The same Patron CA team that ran your Path A engagement executes the migration - no vendor switch, no loss of compliance history.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Does Patron offer both EOR-equivalent services and entity setup?</strong> Yes. Patron is a CA-led firm with revenue alignment to both paths. We advise honestly because we earn either way.</p>
<p><strong>What headcount triggers PF mandatory?</strong> 20+ employees under Section 1(3) of the EPF Act 1952.</p>
<p><strong>What headcount triggers ESI?</strong> 10+ employees in notified states under the ESI Act 1948.</p>
<p><strong>What is the transfer pricing threshold?</strong> Rs 1 crore (USD 108,700) of international related-party transactions per financial year triggers Form 3CEB filing under Section 92E IT Act.</p>
<p><strong>Can I migrate from EOR to entity mid-year?</strong> Yes. Patron handles employee migration from external EOR to your new Pvt Ltd typically in 30 to 60 days post-incorporation.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Trigger Thresholds and Compliance Deadlines</h2>
            <div class="content-text">
                
                <p>Several Indian statutory thresholds reshape the EOR vs entity decision as your team grows. Hitting any of these forces a compliance set that EOR may not fully address. Plan ahead - thresholds compound over time.</p>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Threshold / Compliance</th><th>Trigger Point</th><th>Implication</th></tr></thead>
  <tbody>
    <tr><td>ESI mandatory</td><td>10+ employees in notified states</td><td>Employer 3.25% + Employee 0.75% of wages under ESI Act 1948</td></tr>
    <tr><td>Gratuity Act applicability</td><td>10+ employees</td><td>4.81 percent accrual; vests after 5 years under Gratuity Act 1972</td></tr>
    <tr><td>PF mandatory</td><td>20+ employees</td><td>Employer + Employee 12% each on basic under Section 6 EPF Act 1952</td></tr>
    <tr><td>Transfer pricing (Form 3CEB)</td><td>International RPTs &gt; Rs 1 crore (USD 108,700) per year</td><td>Form 3CEB filing under Section 92E IT Act; documentation under Section 92D</td></tr>
    <tr><td>Permanent Establishment risk</td><td>Fixed place of business in India</td><td>25 to 30 percent of attributable profits under Section 9 IT Act</td></tr>
    <tr><td>Statutory audit (Section 143)</td><td>From Year 1 of subsidiary</td><td>Mandatory under Companies Act 2013; ICAI member signature required</td></tr>
    <tr><td>FC-GPR Filing (FDI receipt)</td><td>Within 30 days of share allotment</td><td>FEMA 1999 compliance; late submission compounding</td></tr>
    <tr><td>ROC late filing</td><td>Continuous</td><td>Rs 100 per day per form with no maximum cap under Section 403 Companies Act 2013</td></tr>
  </tbody>
</table>
</div>
<p style="margin-top:16px;"><strong>Talk to Patron's CA-led Decision Team:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> | <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Eor%20India%20vs%20India%20Entity%20Setup%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp +91 945 945 6700</a> | <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20EOR%20vs%20Pvt%20Ltd%20India%20Decision&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20choosing%20between%20EOR%20and%20Indian%20Pvt%20Ltd%20setup%20and%20would%20like%20a%20discovery%20call%20with%20cost-comparison%20modelling%20across%20both%20paths.%0A%0AThank%20you.">Email contact@patronaccounting.com</a>. Free 30-minute discovery call. We model EOR vs Entity for your specific scenario.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Map Three Factors. Pick a Path. Migrate When Triggers Cross.</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>The EOR vs Pvt Ltd India decision is not a contest between two products competing for your business - it is a decision framework where one path fits better at one stage of your India journey and the other fits better at a later stage. EOR wins clearly when your team is small (1 to 10 employees), your time horizon is short (under 12 months), or your India strategy is exploratory. An Indian Pvt Ltd subsidiary wins clearly when your team is large (15+ employees long term), your time horizon is multi-year, or your India strategy involves selling to Indian customers, raising Indian funding, building a Global Capability Center, or anchoring IP in India.</p>
<p>The hybrid path - start with EOR, transition to entity at 15+ headcount - saves the most companies the most money because it captures EOR's speed in the early stage and the entity model's economics in the steady state.</p>
<p>Patron Accounting LLP is unusual in this space: as a CA-led firm offering both partnership-model EOR-equivalent services and full Pvt Ltd subsidiary setup, we earn revenue on whichever path is right for you. That is structural alignment with honest advice.</p>
<p>10,000+ Businesses Served | 4.9 Google Rating | 4 Cities (Pune, Mumbai, Delhi, Gurugram) | Both Paths (EOR + Entity setup)</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Eor%20India%20vs%20India%20Entity%20Setup%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20EOR%20vs%20Pvt%20Ltd%20India%20Decision&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20choosing%20between%20EOR%20and%20Indian%20Pvt%20Ltd%20setup%20and%20would%20like%20a%20discovery%20call%20with%20cost-comparison%20modelling%20across%20both%20paths.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Related EOR and Entity Services for Decision and Execution</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Once you have decided on a path, these companion pages help with vendor selection, contractor cleanup, vertical hiring, and Pvt Ltd execution.</p>
            <!-- CITY_PAGES_GRID PATTERN:
                BLOCK 1 - City cards (pa-city-grid, 4 cols desktop):
                BLOCK 2 - Cross-sell services (pa-cross-grid, 3 cols desktop):
                <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for EOR vs Pvt Ltd India</div>
                    <div class="pa-cross-grid">
                        <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">India</div></div></a>
                        (repeat for 5-6 related services)
                    </div>
                </div>
            -->
            <div class="pa-city-block">
                    <div class="pa-block-title">Related EOR and Entity Services from Patron Accounting</div>
                    <div class="pa-block-sub">Sister-pages for vendor selection, contractor conversion, and Pvt Ltd execution</div>
                    <div class="pa-cross-grid">
                        <a href="/best-eor-providers-india-2026" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR Provider Roundup</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/eor-vs-contractor-india" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR vs Contractor</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/eor-india-for-tech-startups" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR for Tech Startups</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/fdi-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 07 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 07 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months or whenever EOR vendor pricing changes materially, India Labour Codes are notified, PF or ESI rates revise, MCA company law amends, transfer pricing thresholds revise, FEMA rules change, or new EOR or subsidiary cost benchmarks emerge. Last reviewer: CA & CS Team, Patron Accounting LLP.</p>
        </div>
    </div>
</section>



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
