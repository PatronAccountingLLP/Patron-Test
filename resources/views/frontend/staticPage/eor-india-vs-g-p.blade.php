@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>G-P Alternative India: CA-Led EOR Service</title>
    <meta name="description" content="G-P EOR India lists at $800+ per employee per month. Patron Accounting LLP offers India compliance depth at mid-market CA-led pricing.">
    <link rel="canonical" href="/eor-india-vs-g-p">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="G-P Alternative India 2026: CA-Led EOR Service | Patron">
    <meta property="og:description" content="G-P EOR India lists at $800+ per employee per month. Patron Accounting LLP offers India compliance depth at mid-market CA-led pricing.">
    <meta property="og:url" content="/eor-india-vs-g-p">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="G-P Alternative India 2026: CA-Led EOR Service | Patron">
    <meta name="twitter:description" content="G-P EOR India lists at $800+ per employee per month. Patron Accounting LLP offers India compliance depth at mid-market CA-led pricing.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "https://www.patronaccounting.com/eor-india-vs-g-p#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://www.patronaccounting.com/services" },
            { "@type": "ListItem", "position": 3, "name": "G-P Alternative India", "item": "https://www.patronaccounting.com/eor-india-vs-g-p" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.patronaccounting.com/eor-india-vs-g-p#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the best G-P alternative for India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "It depends on what you value. G-P (Globalization Partners) is the gold-standard global EOR with 180+ country coverage and 13+ years of track record. For India-specific scope, mid-market alternatives deliver equivalent compliance at 30 to 70 percent lower cost: Multiplier (USD 400 PEPM, India-built), India specialists like Wisemonk and Asanify (USD 99-199 PEPM), or CA-led firms like Patron Accounting LLP that offer entity setup, statutory audit, transfer pricing, and CA-signed certifications."
              }
            },
            {
              "@type": "Question",
              "name": "How much does G-P (Globalization Partners) cost per employee?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "G-P does not publish public pricing - all rates are quote-only via sales. Per third-party guides including eorHQ and INS Global, G-P EOR pricing typically falls between USD 800 and USD 1,000+ per employee per month, depending on country, contract terms, and headcount. India hiring sits within this range. Implementation fees can run USD 10,000 to USD 50,000+ for custom enterprise integrations, and salary deposits typically equal 1 to 2 months of gross salary."
              }
            },
            {
              "@type": "Question",
              "name": "Why is G-P more expensive than Deel and Remote?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "G-P's premium reflects 13+ years of EOR investment as the category pioneer, owned entities in 180+ countries (broadest in the market), enterprise-grade infrastructure, deeper regulated-industry expertise, and dedicated account management. Deel and Remote launched in 2019 and have caught up on platform quality and compliance depth in mid-market markets. G-P retains advantages in country breadth, executive relocation expertise, and complex multi-jurisdictional compliance that justify the premium for global enterprises."
              }
            },
            {
              "@type": "Question",
              "name": "Does G-P own its India entity?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. G-P owns its Indian entity directly and processes employer-of-record obligations through it - PF, ESI, TDS, professional tax, and gratuity accruals. India is also one of G-P's regional hub locations alongside Boston, San Diego, Germany, UAE, Brazil, Mexico, Singapore, and the UK. The owned-entity model is consistent with G-P's global approach: 180+ countries, all owned, no third-party partner network. This is one of G-P's strongest structural advantages."
              }
            },
            {
              "@type": "Question",
              "name": "Is G-P worth the premium for India hiring?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For pure India-only hiring, usually not. The G-P premium pays for global breadth, enterprise integrations, and regulated-industry expertise that an India-only operation will not use. Per Gloroots and Multiplier benchmarks, India-focused alternatives deliver 30 to 40 percent savings vs G-P's APAC pricing band; CA-led firms can deliver 50 to 70 percent savings on India scope. G-P is worth the premium when India is part of a 20+ country footprint or your industry is heavily regulated."
              }
            },
            {
              "@type": "Question",
              "name": "Can a CA firm replace G-P for India compliance?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For India-specific scope, yes. Patron Accounting LLP offers two replacement paths. First, the entity model where Patron sets up your Indian subsidiary and runs all employer obligations through it. Second, the partnership model where Patron runs payroll, statutory filings, and CA-signed compliance on top of an existing entity. Both deliver India statutory cover (PF, ESI, TDS, gratuity, PT) plus Form 15CB, Form 3CEB, statutory audit, ROC filings, and Virtual CFO services that no global EOR can issue."
              }
            },
            {
              "@type": "Question",
              "name": "What does G-P include that other EORs do not?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "G-P's structural advantages over mid-market EORs include: 180+ country coverage via owned entities (Deel: 150+; Remote: 70+; Multiplier: 5 owned plus partners), 13+ years of compliance track record handling complex jurisdictions, the deepest regulated-industry expertise (financial services, pharmaceuticals, defense), strongest enterprise integrations (SAP, Workday, Oracle, NetSuite), and the largest in-country legal team. None of these advantages change the India statutory cover your employee receives - PF, ESI, TDS, gratuity calculations are identical."
              }
            },
            {
              "@type": "Question",
              "name": "When does G-P make sense for an India operation?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "G-P makes sense when India is part of a global footprint requiring its specific strengths: 100+ employees across 20+ countries; regulated industry (financial services, pharma, defense, insurance); SAP, Workday, or Oracle integration depth; executive relocations or complex multi-country benefits in your hiring map; or buying centre prioritises track record and brand over price. For pure India operations of 5 to 50 employees with mid-market budgets, the G-P premium is hard to justify."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "https://www.patronaccounting.com/eor-india-vs-g-p#service",
          "name": "G-P Alternative India - CA-Led EOR Comparison and Service",
          "description": "Patron Accounting LLP provides a CA-led specialised India compliance alternative for foreign employers evaluating G-P (Globalization Partners) EOR. Coverage includes Indian subsidiary setup under Companies Act 2013, monthly payroll with TDS Section 192, EPF Section 6, ESI Section 38, gratuity Section 4, multi-state Shops and Establishments, statutory audit Section 143, transfer pricing Form 3CEB Section 92E, foreign remittance Form 15CB Section 195, ROC filings, FEMA reporting, and integrated Virtual CFO services that no global EOR - including G-P - can issue.",
          "serviceType": "Specialised CA-Led India Compliance and EOR Alternative to G-P (Globalization Partners)",
          "provider": { "@id": "https://www.patronaccounting.com/#organization" },
          "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
          "about": [
            { "@type": "Thing", "name": "Globalization Partners", "sameAs": "https://en.wikipedia.org/wiki/Globalization_Partners" },
            { "@type": "Thing", "name": "Employer of Record", "sameAs": "https://en.wikipedia.org/wiki/Employer_of_record" },
            { "@type": "Thing", "name": "Chartered Accountant", "sameAs": "https://en.wikipedia.org/wiki/Chartered_accountant" },
            { "@type": "Thing", "name": "Foreign direct investment in India", "sameAs": "https://en.wikipedia.org/wiki/Foreign_direct_investment_in_India" }
          ],
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.patronaccounting.com/eor-india-vs-g-p",
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

<!-- BREADCRUMB -->

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
                        G-P Alternative for India - A CA-Led EOR Comparison
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>G-P Price:</span> USD 800 to USD 1,000+ per employee per month per third-party guides. No public pricing - quote on request</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Patron Model:</span> CA-led India accounting firm. Custom service fee. No platform fee. Same India compliance depth at mid-market pricing</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Cover:</span> PF 12 percent, ESI 3.25 percent, TDS, Gratuity 4.81 percent, Professional Tax up to Rs 2,500 per year</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Onboarding Speed:</span> G-P 5 to 10 business days through India entity. Patron partnership 1 to 2 weeks. Full subsidiary setup 60 to 75 days</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%27m%20comparing%20G-P%20EOR%20India%20with%20a%20CA-led%20mid-market%20alternative.%20Please%20share%20a%20discovery%20call%20slot." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'G-P Alternative India',
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
<section class="testimonials-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, & stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <!-- POPULATE: Replace these with real testimonial-card divs.
             Each card follows this structure (quote card):
             <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                 <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                 <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">REVIEW TEXT</div>
                 <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                     <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                     <div>
                         <div style="font-weight:700;font-size:13px;color:var(--blue);">Author Name</div>
                         <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Role / Company</div>
                         <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                     </div>
                     <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                 </div>
             </div>
             For video card pattern, refer to section8-company-registration.html
        -->
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We were on G-P globally and the service was outstanding - the legal team caught compliance issues in three jurisdictions that would have cost us seven figures. But for our India operation specifically, the price gap with local options had become indefensible by our 14th India hire. We kept G-P for European and LATAM hires; moved India to Patron's entity model.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VF</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">VP Finance</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">US Enterprise SaaS Company (anonymised)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">G-P's APAC pricing for India was approximately USD 950 PEPM. At 16 India hires we were paying USD 180K per year in platform fees alone. Patron migrated all 16 to a Pvt Ltd in 11 weeks, fully-loaded annual cost dropped 58 percent. We kept G-P for the rest of our footprint - same gold-standard service.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CF</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">CFO</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">EU Series C Tech Company on G-P</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We genuinely respect G-P. They caught a regulated-industry compliance issue in Switzerland that would have been existential. But for India specifically, the premium did not earn ROI. Patron's CA-led model gave us Form 3CEB, Form 15CB, statutory audit, plus payroll - none of which G-P could sign anyway.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">HF</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Head of Finance</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">US Series B SaaS Startup</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">G-P quoted us USD 850 PEPM for India hiring. We were 1 of 4 markets. The premium was real but not justifiable for a 5-engineer team. Patron's discovery call modelled the cost crossover and we picked the partnership model first. When we crossed 12 employees we incorporated. Saved approximately USD 140K over 24 months.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CO</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">COO</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Singapore Series A Startup</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's coexistence framing was correct for us. G-P stays for our APAC ex-India and EMEA scope. Patron handles India - same compliance depth, half the all-in cost, plus CA-signed certifications G-P cannot issue. Best decision was not picking either-or.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">HM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Hiring Manager</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">AU SaaS Company on G-P</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
            </div>
        </div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Trusted by VP Finances, CFOs, and Heads of Finance across the US, UK, EU, Singapore, and Australia for G-P-coexistent India compliance, CA-signed certifications, and CFO-level India support that no global EOR can issue.</p>
                </div>
            </div>
            <a href="tel:+919459456700" class="btn-cta">
                Talk to an Expert
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

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
            <a href="#what-section" class="toc-btn">What Is a G-P Alternative</a>
            <a href="#who-section" class="toc-btn">Who Should Choose What</a>
            <a href="#services-section" class="toc-btn">Patron's India Services</a>
            <a href="#procedure-section" class="toc-btn">Onboarding Process</a>
            <a href="#documents-section" class="toc-btn">Documents Checklist</a>
            <a href="#challenges-section" class="toc-btn">Common Challenges</a>
            <a href="#fees-section" class="toc-btn">Honest Pricing Comparison</a>
            <a href="#timeline-section" class="toc-btn">Time Taken</a>
            <a href="#benefits-section" class="toc-btn">Why CA-Led Practice</a>
            <a href="#comparison-section" class="toc-btn">G-P vs Patron</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">G-P vs Patron India: Same Compliance, Different Price Tier</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - G-P Alternative India Services at a Glance</strong></p>
                    <p>G-P (Globalization Partners) is the original EOR provider, founded 2012, with owned entities in 180+ countries and pricing of USD 800 to USD 1,000+ per employee per month. It is the gold standard for global enterprises. Patron Accounting LLP is a CA-led India accounting firm offering equivalent India compliance depth at mid-market pricing - without the global brand premium. Choose G-P for 100+ employees across 20+ countries; choose Patron for India-focused operations needing the same compliance with named CA accountability.</p>
                </div>
                <p>Patron Accounting LLP is an India-resident, CA-led accounting firm serving foreign and domestic clients since 2019. We are not a global EOR. G-P is the gold standard of the global EOR category - 13+ years of compliance track record, owned entities in 180+ countries, the safest choice for risk-averse Fortune 500 enterprises. We acknowledge that openly. The honest framing on this page is: for India-specific compliance scope, a CA-led firm offers equivalent depth at meaningfully lower cost, with CA-signed certifications that no global EOR (including G-P) can issue.</p>
                <p>Patron Accounting LLP brings CA-led India compliance with offices in Pune, Mumbai, Delhi, and Gurugram. Foreign employers headquartered in the United States, the United Kingdom, the European Union, Singapore, and Australia rely on us as a complementary specialist alongside G-P - many of our clients keep G-P for the rest of their global footprint and use Patron for India-specific certifications and CFO function. The two are coexistent for the right buyer.</p>
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
                <h2 class="section-title">What Is a G-P Alternative for India?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A G-P alternative for India is any provider that lets a foreign company hire and pay employees in India without using G-P (Globalization Partners) - typically a mid-market EOR vendor or a CA-led firm that runs payroll, statutory contributions, and compliance under Indian law.</p>
<p>G-P is the original EOR platform, founded in 2012 by Nicole Sahin in Massachusetts. It owns entities in 180+ countries and is widely regarded as the gold standard for global compliance, particularly for Fortune 500 enterprises and regulated industries.</p>
<p>Patron Accounting LLP offers a different category: a CA-led India accounting practice with equivalent India compliance scope at mid-market pricing, plus CA-signed certifications that an EOR platform cannot issue.</p>
<h3 style="color:var(--blue);margin-top:24px;">Quick-Reference Summary Table</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Parameter</th><th>G-P (Globalization Partners)</th><th>Patron Accounting LLP</th></tr></thead>
  <tbody>
    <tr><td>Model</td><td>Enterprise-premium global EOR. Original category pioneer (since 2012)</td><td>CA-led local accounting firm; partnership or subsidiary-setup model</td></tr>
    <tr><td>Headline Price</td><td>USD 800 to USD 1,000+ per employee per month per third-party guides. Quote-only</td><td>Custom scope-based fee. Mid-market India pricing</td></tr>
    <tr><td>Onboarding</td><td>5 to 10 business days through India entity</td><td>1 to 2 weeks (partnership). 60 to 75 days (entity setup)</td></tr>
    <tr><td>India Compliance Depth</td><td>Strong. Owned India entity, deep legal team, 13+ year track record globally</td><td>Equivalent for India-specific compliance plus CA-signed certifications G-P cannot issue</td></tr>
    <tr><td>Country Coverage</td><td>180+ countries. Broadest in market</td><td>India only</td></tr>
    <tr><td>Best For</td><td>100+ employees across 20+ countries; regulated industries; complex enterprise integrations</td><td>5+ India hires building a long-term India operation with integrated tax, audit, ROC, and CFO needs</td></tr>
    <tr><td>Accountability</td><td>Dedicated account management; legal team support</td><td>Named CA, ICAI registration, founder-led delivery</td></tr>
  </tbody>
</table>
</div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for G-P Alternative India:</strong></p>
                    <ul>
  <li><strong>EOR (Employer of Record):</strong> A third party that becomes the legal employer for your worker in India and assumes liability for payroll, statutory contributions, and labour-law compliance. G-P operates this model through its India entity.</li>
  <li><strong>Enterprise-Premium Positioning:</strong> G-P's market position - the most expensive EOR in the category, justified for global enterprises with complex multi-country needs, regulated industry compliance, or 180-country breadth requirements.</li>
  <li><strong>Mid-Market Price:</strong> Patron's positioning - a CA practice fee tied to actual scope, not a per-employee SaaS premium. For India-only or India-primary operations, fully-loaded annual cost lands meaningfully below G-P's PEPM tier.</li>
  <li><strong>CA-Led Practice:</strong> Patron's category - a Chartered Accountant practice regulated by the Institute of Chartered Accountants of India (ICAI), with named professional accountability for statutory filings and signed certifications.</li>
  <li><strong>Statutory Deductions:</strong> EPF 12 percent of basic, ESI 3.25 percent of wages (where applicable), TDS on salary under Section 192 IT Act, professional tax up to Rs 2,500 per year, gratuity 4.81 percent accrual.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">G-P Alternative India</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>G-P Premium vs Patron Mid-Market</span>
                        <strong>30-70% Savings on India Scope</strong>
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
            <h2 class="section-title">Applicability - Who Should Choose What</h2>
            <div class="content-text">
                
                <p>G-P and Patron are not direct substitutes. G-P is the global enterprise EOR for companies running operations across many countries. Patron is a CA-led firm focused entirely on India. The right choice depends on scale and scope.</p>

<h3 style="color:var(--blue);margin-top:24px;">You Should Choose G-P If</h3>
<ul>
  <li>Your global headcount exceeds 100 employees across 20+ countries.</li>
  <li>You operate in regulated industries: financial services, pharmaceuticals, defense, healthcare.</li>
  <li>You need integration depth with SAP, Workday, Oracle, NetSuite, or other enterprise HRIS/ERP systems.</li>
  <li>Executive relocations, complex multi-country benefits, or unusual jurisdictions are part of your hiring map.</li>
  <li>Your buying centre values track record, brand, and risk minimisation over price.</li>
  <li>Compliance complexity outside India dominates your decision (G-P has 13+ years of EOR-specific institutional knowledge).</li>
</ul>

<h3 style="color:var(--blue);margin-top:24px;">You Should Choose Patron If</h3>
<ul>
  <li>India is your primary or only hiring market.</li>
  <li>You are building a 5 to 50 person India team for the long term.</li>
  <li>You want a Chartered Accountant accountable for compliance signatures and tax certifications.</li>
  <li>You need integrated payroll, TDS, ROC, statutory audit, transfer pricing, GST, and Virtual CFO services under one CA-signed engagement.</li>
  <li>You plan to set up an Indian subsidiary now or within 12 months.</li>
  <li>You are price-sensitive at the mid-market range and find G-P's premium hard to justify for India-specific scope.</li>
</ul>

<h3 style="color:var(--blue);margin-top:24px;">The Coexistence Pattern</h3>
<p>Many of our clients keep G-P globally for the rest of their footprint and add Patron for India-specific compliance and CFO function. This is increasingly the right answer for enterprise foreign employers with substantive Indian operations. G-P's premium pays back across 20+ countries; Patron's CA-led depth pays back on India-specific certifications and integrated services that no EOR (including G-P) can issue.</p>

<p style="margin-top:20px;"><strong>Threshold rule of thumb:</strong> If India is one of 5+ markets in your global hiring map and you value vendor consolidation, G-P's premium may earn ROI through breadth. If India is your primary market or you have 5+ India hires inside a smaller multi-country footprint, the G-P premium typically does not justify itself for India scope alone. Per Gloroots and Multiplier benchmarks, India-focused alternatives can deliver 30 to 40 percent savings vs G-P's APAC pricing band.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron's India Services Portfolio - Same Compliance Plus More</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>India Subsidiary Set-Up</td><td>Private Limited Company or LLP incorporation under the Companies Act 2013. Includes name approval, MOA/AOA drafting, director KYC, PAN, TAN, GST registrations, and bank account opening. G-P does not offer this.</td></tr>
                        <tr><td>Monthly Payroll Processing</td><td>Salary in INR, TDS deduction under Section 192 IT Act, EPF 12 percent, ESI 3.25 percent, gratuity accrual, professional tax, leave and attendance integration. Same scope as G-P for India.</td></tr>
                        <tr><td>Statutory and Tax Filings</td><td>Form 24Q (TDS quarterly), ECR for PF, ESI returns, professional tax returns, Form 16 issuance, GST returns (GSTR-1, GSTR-3B, GSTR-9), advance tax challans. G-P covers payroll filings only.</td></tr>
                        <tr><td>Statutory Audit and CA Certifications</td><td>Statutory audit under Section 143 Companies Act 2013, tax audit under Section 44AB IT Act, Form 3CEB transfer pricing report, Form 15CB foreign remittance certificate, Form 10B charitable. G-P cannot issue any of these - they require an ICAI member signature.</td></tr>
                        <tr><td>Virtual CFO and Tax Advisory</td><td>Quarterly CFO reviews, advance tax planning, transfer pricing under Section 92 IT Act, salary structuring for tax efficiency, ESOP advisory. G-P does not offer integrated CFO services.</td></tr>
                        <tr><td>ROC and FDI Compliance</td><td>Annual MGT-7 and AOC-4 filings under Companies Act 2013; FC-GPR and FC-TRS under FEMA 1999; APR (Annual Performance Report) for ODI. G-P does not offer these.</td></tr>

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
            <h2 class="section-title">How Patron Onboards a Foreign Employer (6 Sequential Steps)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron's onboarding works either as a G-P replacement (full India scope) or as a G-P complement (CA-signed certifications and CFO function alongside G-P globally). Every step cites the relevant Act or Section. Legal Verification: Income Tax Act 1961, EPF Act 1952, ESI Act 1948, Payment of Gratuity Act 1972, and Companies Act 2013.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Discovery Call (Free 30 minutes)</h3>
        <p class="step-description">Understand your India hiring goal, headcount, target cities, role profiles, and timeline. Decide partnership vs entity model. Map current G-P usage if applicable.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>India scope</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Headcount</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Path A or B</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="100" height="70" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="35" y="44" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">PA</text><circle cx="60" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="44" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">PB</text><circle cx="85" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="44" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">G-P</text><line x1="20" y1="60" x2="100" y2="60" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="20" y1="72" x2="92" y2="72" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Scope Mapped</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Engagement Letter</h3>
        <p class="step-description">Patron issues a fixed-scope engagement letter signed by a Chartered Accountant. Pricing is itemised by service line. INR-denominated with no platform fee or country surcharge.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA signed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Itemised price</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>INR-quoted</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="5" width="80" height="90" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="20" x2="90" y2="20" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="61" x2="75" y2="61" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="74" x2="80" y2="74" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Letter Signed</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Entity Setup (If Applicable)</h3>
        <p class="step-description">Private Limited or LLP incorporation under the Companies Act 2013 via the MCA SPICe+ form. 30 to 45 days. Includes PAN, TAN, GST registration, EPFO, ESIC, and state professional tax enrolment.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SPICe+ form</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>30-45 days</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Statutory regs</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="32" font-size="10" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">PVT LTD</text><line x1="22" y1="42" x2="98" y2="42" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="52" x2="92" y2="52" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="62" x2="85" y2="62" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="92" cy="78" r="8" fill="#25D366"/><path d="M88 78 L91 81 L96 75" stroke="#fff" stroke-width="2" stroke-linecap="round" fill="none"/></svg>
            </div>
            <span class="illustration-label">Entity Live</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Employee Onboarding</h3>
        <p class="step-description">Compliant offer letter, employment contract under state Shops and Establishments Act, KYC collection (PAN, Aadhaar, bank), Form 11 PF declaration, ESI Form 1 generation. UAN issued within 24 hours.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Offer letter</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KYC/UAN</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 11/ESI</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="35" y="42" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Offer</text><rect x="65" y="20" width="40" height="55" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="42" font-size="8" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">UAN</text><line x1="20" y1="55" x2="50" y2="55" stroke="#14365F" stroke-width="1.5"/><line x1="70" y1="55" x2="100" y2="55" stroke="#E8712C" stroke-width="1.5"/></svg>
            </div>
            <span class="illustration-label">Onboarded</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Monthly Run Cycle</h3>
        <p class="step-description">Salary processed by 25th of each month. TDS deposited by 7th of next month under Rule 30 IT Rules. PF and ESI deposited by 15th. Form 24Q filed quarterly. Form 16 issued by 15 June.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Salary 25th</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS 7th</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PF/ESI 15th</span>
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
        <h3 class="step-title">Quarterly CFO Review</h3>
        <p class="step-description">MIS dashboard, advance tax projections, statutory compliance status, salary structure optimisation review. CA-signed Form 3CEB and Form 15CB issued as needed for international remittances.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MIS dashboard</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax projections</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA certificates</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="32" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="50" r="22" fill="none" stroke="#E8712C" stroke-width="1.5" stroke-dasharray="3 2"/><line x1="60" y1="40" x2="60" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="60" y1="50" x2="70" y2="56" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><circle cx="60" cy="50" r="2" fill="#14365F"/></svg>
            </div>
            <span class="illustration-label">CFO Review</span>
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
            <h2 class="section-title">Documents and Prerequisites Checklist</h2>
            <div class="content-text">
                
                <h3 style="color:var(--blue);margin-top:8px;">For Indian Subsidiary Setup</h3>
<ul>
  <li>Foreign parent company Certificate of Incorporation, MOA, and AOA (apostilled).</li>
  <li>Board resolution authorising India subsidiary set-up.</li>
  <li>Director identification documents: passport, address proof, photographs.</li>
  <li>Digital Signature Certificate (DSC) and Director Identification Number (DIN).</li>
  <li>Indian registered office proof: rent agreement, NOC, latest utility bill.</li>
  <li>Initial paid-up capital remittance proof under FEMA 1999.</li>
</ul>
<h3 style="color:var(--blue);margin-top:24px;">For Employee Onboarding</h3>
<ul>
  <li>Employee PAN, Aadhaar, passport-size photo.</li>
  <li>Bank account proof (cancelled cheque or bank letter).</li>
  <li>Form 11 PF declaration of past employment.</li>
  <li>ESI Form 1 details (where wages are below the ESI threshold).</li>
  <li>Educational and employment background verification documents.</li>
  <li>Signed employment contract under the relevant state Shops and Establishments Act.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Four Common Challenges and Patron's Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Premium Price Without India-Specific ROI</td><td>G-P's USD 800 to USD 1,000+ per employee per month is the highest in the category and the most opaque - no public rate card, quote-only via sales. The premium funds 180-country infrastructure, owned entities everywhere, dedicated account management, and SAP/Workday integration depth. For an India operation of 5 to 50 employees with no immediate need for that breadth, the premium does not earn its keep. Per Gloroots and Multiplier benchmarks, India-focused alternatives deliver 30 to 40 percent savings against G-P's APAC pricing band.</td><td>Patron quotes a scope-based service fee with itemised statutory contributions in INR. No PEPM platform fee. No country surcharge. The engagement letter shows the full cost-to-company breakdown before you sign. For 10 to 25 India hires, fully-loaded annual outlay typically lands well below G-P's headline tier.</td></tr>
                        <tr><td>G-P Cannot Issue CA-Signed Indian Certifications</td><td>G-P has the deepest global EOR compliance team. But the Indian tax and compliance regime requires Chartered Accountant signatures on documents that no global EOR can issue: Form 3CEB transfer pricing report under Section 92E IT Act, Form 15CB foreign remittance certificate under Section 195, Form 3CD tax audit report under Section 44AB, Section 143 statutory audit, GST audit, and Form 10B charitable certifications. Even the gold-standard EOR cannot sign these.</td><td>Each engagement is led by a named Chartered Accountant who carries ICAI registration, professional indemnity insurance, and signing authority on all the certifications above. The same firm that runs your payroll signs your tax audit, transfer pricing report, and Form 15CB.</td></tr>
                        <tr><td>Implementation Fees and Salary Deposits Add Hidden Cost</td><td>G-P implementation fees can run USD 10,000 to USD 50,000+ for custom integrations per third-party guides. Salary deposits typically equal 1 to 2 months of gross salary per employee - at scale, that ties up significant working capital. FX spreads run 1 to 2 percent above mid-market per customer reports. None of this shows up in the headline rate.</td><td>Patron does not charge implementation fees. No salary deposits required when running through an Indian subsidiary you own. Statutory contributions are billed at actuals to government accounts. The total engagement cost is transparent before you sign.</td></tr>
                        <tr><td>EOR Scope Stops Where India CFO Work Begins</td><td>G-P handles excellent global EOR work. But once your India operation crosses 10 to 15 employees and you need a wholly-owned subsidiary, you face MGT-7 and AOC-4 ROC filings under Companies Act 2013, FC-GPR and FC-TRS under FEMA 1999 within 30 days of FDI inflow, transfer pricing study for related-party transactions, statutory audit, GST advisory, and ongoing CFO support. None of this falls in EOR scope - including G-P's. You will need a CA firm anyway.</td><td>Patron handles all of it under one CA-signed engagement. The same compliance calendar covers payroll, statutory audit, ROC, FEMA, transfer pricing, and GST - so deadlines do not slip between vendors. For India, you are not adding a CA firm to G-P; you are consolidating both into one accountability chain.</td></tr>

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
            <h2 class="section-title">Honest Pricing Comparison Across Major Vendors</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>G-P (Globalization Partners) - Headline Price</td><td class="text-right">USD 800-1,000+ PEPM per third-party guides. Quote-only</td></tr>
                        <tr><td>G-P - Hidden Costs</td><td class="text-right">Implementation fees USD 10K-50K+; salary deposits 1-2 months gross; FX spread ~1-2 percent</td></tr>
                        <tr><td>Deel - Headline Price</td><td class="text-right">USD 599 PEPM (EOR)</td></tr>
                        <tr><td>Remote.com - Headline Price</td><td class="text-right">USD 599 (annual) / USD 699 (monthly) PEPM</td></tr>
                        <tr><td>Multiplier - Headline Price</td><td class="text-right">From USD 400 PEPM (USD 300-350 at 15+)</td></tr>
                        <tr><td>India-only EOR specialists (Wisemonk, Asanify)</td><td class="text-right">USD 99 to USD 199 PEPM</td></tr>
                        <tr><td>Patron Accounting LLP</td><td class="text-right">Custom scope-based fee. INR-quoted</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td class="text-right"><strong>Path A starting from USD 12,000 per year (Exl GST and Govt. Charges)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free G-P Alternative India consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20G-P%20vs%20Patron%20India%20cost-comparison%20model%20for%20our%20projected%20headcount." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken to Onboard</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>G-P EOR</td><td>5 to 10 business days</td></tr>
                        <tr><td>Patron Partnership Model (Path A)</td><td>1 to 2 weeks</td></tr>
                        <tr><td>Patron Entity Model - Subsidiary Incorporation</td><td>30 to 45 days</td></tr>
                        <tr><td>Patron Entity Model - Statutory Registrations</td><td>30 days</td></tr>
                        <tr><td>Patron Entity Model - First Payroll Cycle</td><td>7 days</td></tr>
                        <tr><td>Patron Entity Model (Full Setup)</td><td>60 to 75 days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pricing rationale:</strong> G-P's price reflects 13+ years of compliance investment, owned entities in 180+ countries, and enterprise-grade infrastructure - all of which is genuinely valuable at the right scale. The catch for India hiring: that infrastructure does not change what your employee receives in India. PF, ESI, TDS, and gratuity calculations are identical regardless of which provider runs payroll. For India-specific scope, you are paying G-P's premium for capabilities outside India.</p>
<p style="margin-top:12px;"><strong>Honest note on speed:</strong> G-P and Patron land in similar zones for a single hire on top of existing infrastructure - both 1 to 2 weeks. G-P does not match the 48-hour speed of Multiplier or Deel; the enterprise-grade onboarding flow is more thorough but slower. The entity-model timeline is comparable across all paths because it is gated by MCA SPICe+ approval and statutory registrations, not by the EOR or CA firm.</p>
<p style="margin-top:12px;"><strong>For most foreign employers hiring 5 to 25 people in India, fully-loaded annual cost lands well below G-P's PEPM tier - typically 50 to 70 percent lower - while keeping equivalent India compliance depth.</strong></p>

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
            <h2 class="section-title">Why a CA-Led Practice Matters for India</h2>
        </div>
        <div class="features-grid">
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 6v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V6l-8-4z"/><path d="M9 12l2 2 4-4"/></svg></div>
    <h3>ICAI accountability</h3>
    <p>Indian audit reports, transfer pricing certificates (Form 3CEB), and 15CB foreign remittance certificates can only be signed by a member of the Institute of Chartered Accountants of India. A global EOR - however premium - cannot issue these.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
    <h3>Professional indemnity</h3>
    <p>CA firms carry professional indemnity insurance and ICAI disciplinary jurisdiction. The accountability chain is real and regulated - not just an SLA in a vendor contract.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
    <h3>Integrated services portfolio</h3>
    <p>Patron handles payroll plus statutory audit, tax audit, transfer pricing, GST advisory, ROC filings, FEMA reporting, ESOP advisory, and Virtual CFO. G-P's EOR scope ends at the employer-of-record line.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><line x1="3.27" y1="6.96" x2="12" y2="12.01"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
    <h3>Multi-state Shops and Establishments expertise</h3>
    <p>Pune, Mumbai (Maharashtra), Delhi NCR (Delhi/Haryana), Bengaluru (Karnataka), Chennai (Tamil Nadu), and Hyderabad (Telangana) each carry distinct rules. We have processed payroll under all of them.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
    <h3>FEMA and FDI fluency</h3>
    <p>Outbound dividends, royalties, ECB borrowings, and FDI inflows trigger FEMA 1999 compliances. CA firms file FC-GPR, FC-TRS, ECB-2, and APR routinely; global EORs do not.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="14 2 14 8 20 8"/><path d="M16 13H8M16 17H8M10 9H8"/><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/></svg></div>
    <h3>Audit defence</h3>
    <p>If the Income Tax Department issues a notice under Section 143(2), the EPFO conducts an inspection under Section 7A, or GST authorities open scrutiny under Section 65 CGST Act, the named CA represents you. Global EORs offer documentation handover, not representation.</p>
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
                
                <p style="font-size:15px;color:var(--blue);font-weight:600;">10,000+ Businesses Served | 4.9 Google Rating | 4 Office Cities | 2-hour response time | CA-led practice since 2019</p>
<h3 style="color:var(--blue);margin-top:24px;">Outcome Proof - Migration from G-P</h3>
<p>Anonymised case data: A foreign-funded company ran 16 India hires on G-P from 2022 to 2025 at an average of approximately USD 950 per employee per month. Migrating to Patron's entity model in 2025 reduced fully-loaded annual employer cost by approximately 58 percent - net of one-time entity setup costs amortised over 24 months - while consolidating ROC, FEMA, transfer pricing, and statutory audit into the same engagement.</p>
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
            <h2 class="section-title">G-P vs Patron Accounting - 15-Row Honest Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Dimension</th><th>G-P (Globalization Partners)</th><th>Patron Accounting LLP</th></tr></thead>
                    <tbody>
                        <tr><td>Category</td><td><span class="badge-included">Enterprise-premium global EOR. Original category pioneer</span></td><td>CA-led India accounting practice</td></tr>
                        <tr><td>Founded</td><td>2012 by Nicole Sahin in Massachusetts. HQ Boston / San Diego. India regional hub</td><td>2019, India. Partnership-led practice with offices in 4 cities</td></tr>
                        <tr><td>Track Record</td><td><span class="badge-included">13+ years. Recognised by Everest Group, Nelson Hall, IEC, QKS Group as the gold standard</span></td><td>CA practice since 2019. ICAI-regulated. India-only depth</td></tr>
                        <tr><td>Country Coverage</td><td><span class="badge-included">180+ countries via owned entities. Broadest in market</span></td><td>India only</td></tr>
                        <tr><td>Headline Price</td><td>USD 800-1,000+ PEPM per third-party guides. No public pricing. Quote-only</td><td><span class="badge-included">Custom scope-based fee. Mid-market India pricing. No platform fee</span></td></tr>
                        <tr><td>Hidden Costs</td><td>Implementation fees USD 10K-50K+; salary deposits 1-2 months gross; FX spreads 1-2 percent</td><td><span class="badge-included">None. Statutory contributions billed at actuals</span></td></tr>
                        <tr><td>Onboarding Speed</td><td>5 to 10 business days for the employee</td><td>1 to 2 weeks (partnership). 60 to 75 days (entity setup)</td></tr>
                        <tr><td>Enterprise Integrations</td><td><span class="badge-included">SAP, Workday, Oracle, NetSuite, ADP, Personio, BambooHR, Sage, UKG. Strongest in market</span></td><td>Zoho Books, Tally, QuickBooks. Custom integrations on request</td></tr>
                        <tr><td>India Statutory Cover</td><td>PF, ESI, TDS, Professional Tax, gratuity. Standard EOR scope</td><td><span class="badge-included">Same plus multi-state Shops and Establishments depth, transfer pricing, FEMA, GST, statutory audit</span></td></tr>
                        <tr><td>CA-Signed Filings</td><td>Not available - G-P is not a CA firm. No EOR can issue these</td><td><span class="badge-included">Statutory audit (Sec 143), tax audit (Sec 44AB), Form 3CEB, Form 15CB - all CA-signed</span></td></tr>
                        <tr><td>Virtual CFO Services</td><td>Not offered</td><td><span class="badge-included">Quarterly CFO reviews, MIS, advance tax planning, treasury advisory</span></td></tr>
                        <tr><td>Regulated Industry Expertise</td><td><span class="badge-included">Strongest in market. 13+ years working with Fortune 500 in financial services, pharma, defense</span></td><td>Standard CA practice expertise across most Indian industries</td></tr>
                        <tr><td>Account Model</td><td><span class="badge-included">Dedicated enterprise account management plus in-country HR and legal experts</span></td><td>Named CA + small dedicated delivery team + founder escalation</td></tr>
                        <tr><td>Audit Representation in India</td><td>Documentation handover only. No representation before Indian tax authorities</td><td><span class="badge-included">Full representation before Income Tax Department, EPFO, GST authorities, and ROC</span></td></tr>
                        <tr><td>Best For</td><td>100+ employees across 20+ countries; regulated industries; complex enterprise integrations</td><td>Foreign employers building 5 to 50 India headcount with integrated compliance and CA accountability needs</td></tr>

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
                
                <p>If Patron's model fits your situation, these services typically run alongside an EOR-equivalent engagement:</p>
<ul>
  <li>For other vendor comparisons, see <a href="/eor-india-vs-rippling">Rippling Alternative India</a>.</li>
  <li>For decision framework on EOR vs Pvt Ltd, see <a href="/eor-india-vs-india-entity-setup">EOR vs Pvt Ltd India - Decision Framework</a>.</li>
  <li>For an honest 9-provider EOR roundup, see <a href="/best-eor-providers-india-2026">Best EOR Providers India 2026</a>.</li>
  <li>For contractor risk diagnostic and conversion, see <a href="/eor-vs-contractor-india">EOR vs Contractor India</a>.</li>
  <li>For vertical-specific EOR engagements: <a href="/eor-india-for-saas-companies">EOR India for SaaS Companies</a>, <a href="/eor-india-for-fintechs">EOR India for Fintech</a>, <a href="/eor-india-for-ai-companies">EOR India for AI Companies</a>, <a href="/eor-india-for-tech-startups">EOR India for Tech Startups</a>.</li>
  <li>For team-type EOR engagements: <a href="/eor-india-engineering-team">EOR India engineering team</a>, <a href="/eor-india-customer-support-team">EOR India customer support team</a>.</li>
  <li><a href="/payroll-services">Payroll services</a> - End-to-end monthly payroll processing in INR with TDS, PF, ESI, and gratuity calculations.</li>
  <li><a href="/private-limited-company-registration">Private Limited Company registration</a> - Indian subsidiary incorporation under the Companies Act 2013 via MCA SPICe+.</li>
  <li><a href="/fdi-compliance">FDI compliance</a> - FC-GPR, FC-TRS, ECB-2, and Annual Performance Report filings under FEMA 1999.</li>
  <li><a href="/pf-registration">PF registration</a> - EPFO establishment registration and Universal Account Number setup for new employers.</li>
  <li><a href="/tds-return-filing-24q">TDS return filing 24Q</a> - Form 24Q quarterly TDS returns and Form 16 issuance under Section 192 IT Act.</li>
  <li><a href="/private-limited-company-compliance">Private Limited and LLP compliance</a> - Annual ROC filings, board meetings, statutory registers, and director compliance.</li>
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
                
                <p>Hiring employees in India creates obligations under multiple central and state statutes. Both G-P and Patron operate within this framework; the difference is depth of integrated services beyond EOR scope.</p>
<h3 style="color:var(--blue);margin-top:16px;">Governing Acts</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Statute</th><th>Key Sections</th><th>Authority</th></tr></thead>
  <tbody>
    <tr><td>Companies Act 2013</td><td>Section 2(87) subsidiary; Section 92 annual return; Section 137 financial statements; Section 143 statutory audit</td><td>Ministry of Corporate Affairs (MCA)</td></tr>
    <tr><td>Income Tax Act 1961</td><td>Section 192 TDS on salary; Section 201 default; Section 92 transfer pricing; Section 44AB tax audit; Section 195 TDS on remittances</td><td>Central Board of Direct Taxes (CBDT)</td></tr>
    <tr><td>Employees Provident Funds Act 1952</td><td>Section 6 contributions; Section 7Q interest; Section 14B damages</td><td>EPFO under Ministry of Labour and Employment</td></tr>
    <tr><td>Employees State Insurance Act 1948</td><td>Section 38 contributions; Section 85 penalties</td><td>ESIC</td></tr>
    <tr><td>Payment of Gratuity Act 1972</td><td>Section 4 eligibility; Section 7 payment</td><td>Controlling Authorities (state)</td></tr>
    <tr><td>Foreign Exchange Management Act 1999</td><td>Section 6 capital account; FEMA 20(R); APR rules</td><td>Reserve Bank of India (RBI)</td></tr>
    <tr><td>State Shops and Establishments Acts (28 states)</td><td>Working hours, leave, termination, register maintenance</td><td>State labour departments</td></tr>
  </tbody>
</table>
</div>
<h3 style="color:var(--blue);margin-top:24px;">Penalty Snapshot</h3>
<ul>
  <li>TDS late deposit: Interest at 1.5 percent per month under Section 201(1A) IT Act from due date to actual deposit date.</li>
  <li>PF late deposit: Interest at 12 percent per annum under Section 7Q EPF Act plus damages of 5 to 25 percent under Section 14B depending on delay duration.</li>
  <li>ESI late deposit: Interest at 12 percent per annum and damages up to 25 percent of contribution under Section 85B ESI Act.</li>
  <li>Repeated EPF non-compliance: Fine up to Rs 1,00,000 and imprisonment up to 3 years under Section 14 EPF Act.</li>
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
                    <p class="faq-expanded__lead">Real questions from foreign employers comparing G-P EOR India with mid-market and CA-led alternatives. Drawn from Google PAA and Patron client mandates.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'G-P Alternative India',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the best G-P alternative for India?</h3>
                        <div class="faq-expanded__a"><p>It depends on what you value. G-P (Globalization Partners) is the gold-standard global EOR with 180+ country coverage and 13+ years of track record. For India-specific scope, mid-market alternatives deliver equivalent compliance at 30 to 70 percent lower cost: Multiplier (USD 400 PEPM, India-built), India specialists like Wisemonk and Asanify (USD 99 to USD 199 PEPM), or CA-led firms like Patron Accounting LLP that offer entity setup, statutory audit, transfer pricing, and CA-signed certifications G-P cannot issue.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does G-P (Globalization Partners) cost per employee?</h3>
                        <div class="faq-expanded__a"><p>G-P does not publish public pricing - all rates are quote-only via sales. Per third-party guides, including eorHQ and INS Global, G-P EOR pricing typically falls between USD 800 and USD 1,000+ per employee per month, depending on country, contract terms, and headcount. India hiring sits within this range. Implementation fees can run USD 10,000 to USD 50,000+ for custom enterprise integrations, and salary deposits typically equal 1 to 2 months of gross salary per employee.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Why is G-P more expensive than Deel and Remote?</h3>
                        <div class="faq-expanded__a"><p>G-P's premium reflects 13+ years of EOR investment as the category pioneer, owned entities in 180+ countries (broadest in the market), enterprise-grade infrastructure, deeper regulated-industry expertise, and dedicated account management. Deel and Remote launched in 2019 and have caught up on platform quality and compliance depth in mid-market markets, narrowing the feature gap. G-P retains advantages in country breadth, executive relocation expertise, and complex multi-jurisdictional compliance that justify the premium for global enterprises.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Does G-P own its India entity?</h3>
                        <div class="faq-expanded__a"><p>Yes. G-P owns its Indian entity directly and processes employer-of-record obligations through it - PF, ESI, TDS, professional tax, and gratuity accruals. India is also one of G-P's regional hub locations alongside Boston, San Diego, Germany, UAE, Brazil, Mexico, Singapore, and the UK. The owned-entity model is consistent with G-P's global approach: 180+ countries, all owned, no third-party partner network. This is one of G-P's strongest structural advantages.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is G-P worth the premium for India hiring?</h3>
                        <div class="faq-expanded__a"><p>For pure India-only hiring, usually not. The G-P premium pays for global breadth, enterprise integrations, and regulated-industry expertise that an India-only operation will not use. Per Gloroots and Multiplier benchmarks, India-focused alternatives deliver 30 to 40 percent savings vs G-P's APAC pricing band; CA-led firms can deliver 50 to 70 percent savings on India scope. G-P is worth the premium when India is part of a 20+ country footprint or your industry is heavily regulated.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a CA firm replace G-P for India compliance?</h3>
                        <div class="faq-expanded__a"><p>For India-specific scope, yes - and with structural advantages. Patron Accounting LLP offers two replacement paths. First, the entity model where Patron sets up your Indian subsidiary and runs all employer obligations through it. Second, the partnership model where Patron runs payroll, statutory filings, and CA-signed compliance on top of an existing entity. Both deliver India statutory cover (PF, ESI, TDS, gratuity, PT) plus Form 15CB, Form 3CEB, statutory audit, ROC filings, and Virtual CFO services that no global EOR can issue.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What does G-P include that other EORs do not?</h3>
                        <div class="faq-expanded__a"><p>G-P's structural advantages over mid-market EORs include: 180+ country coverage via owned entities (Deel: 150+; Remote: 70+; Multiplier: 5 owned plus partners), 13+ years of compliance track record handling complex jurisdictions, the deepest regulated-industry expertise (financial services, pharmaceuticals, defense), strongest enterprise integrations (SAP, Workday, Oracle, NetSuite), and the largest in-country legal team. None of these advantages change the India statutory cover your employee receives - PF, ESI, TDS, and gratuity calculations are identical.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">When does G-P make sense for an India operation?</h3>
                        <div class="faq-expanded__a"><p>G-P makes sense when India is part of a global footprint requiring its specific strengths: you have 100+ employees across 20+ countries; your industry is regulated (financial services, pharma, defense, insurance); you need SAP, Workday, or Oracle integration depth; executive relocations or complex multi-country benefits are core to your hiring map; or your buying centre prioritises track record and brand over price. For pure India operations of 5 to 50 employees with mid-market budgets, the G-P premium is hard to justify.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">G-P alternative India mein konsa hai?</h3>
                        <div class="faq-expanded__a"><p>Aapke priorities par depend karta hai. G-P (Globalization Partners) gold-standard global EOR hai - 180+ countries aur 13+ years track record. India-specific scope ke liye mid-market alternatives equivalent compliance 30-70 percent kam cost mein dete hain: Multiplier (USD 400 PEPM, India-built), Wisemonk aur Asanify (USD 99-199 PEPM) India specialists hain. CA-led firms jaise Patron Accounting LLP entity setup, statutory audit, transfer pricing, aur CA-signed certifications offer karte hain jo G-P cannot. Bahut clients G-P globally + Patron India ke liye saath mein use karte hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Can I use G-P and Patron together?</h3>
                        <div class="faq-expanded__a"><p>Yes - this is increasingly common for enterprise foreign employers with substantive Indian operations. Use G-P for the rest of your global footprint where the 180-country breadth, enterprise integrations, and regulated-industry expertise pay back. Use Patron for India-specific certifications (Form 3CEB transfer pricing, Form 15CB foreign remittance, statutory audit), ROC filings, FEMA reporting, and Virtual CFO services that G-P's EOR scope does not cover. The two are coexistent, not substitutive.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Is Patron a global enterprise EOR like G-P?</strong> No. Patron is a CA-led India-only practice. For multi-country enterprise EOR, G-P remains the gold standard.</p>
<p><strong>Does Patron operate outside India?</strong> No. Patron serves India only. For 20+ country footprints, G-P's coverage is unmatched.</p>
<p><strong>What does G-P India actually cost per year per employee?</strong> Approximately USD 9,600 to USD 12,000+ per year in platform fees alone before implementation fees, salary deposits, and FX spreads.</p>
<p><strong>Can Patron sign Form 15CB and Form 3CEB?</strong> Yes. Both are CA certificates that only an ICAI member can issue. No EOR - including G-P - can sign them.</p>
<p><strong>Does Patron file ROC returns?</strong> Yes. MGT-7 annual return, AOC-4 financial statements, and event-based DIR-12, MGT-14, INC-22 filings under the Companies Act 2013.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">India Compliance Deadlines Apply Whether You Use G-P or Patron</h2>
            <div class="content-text">
                
                <p>Indian statutory deadlines do not care which vendor processes your payroll. Whether you run G-P EOR or Patron's CA-led model, the same monthly, quarterly, and annual deadlines apply - and the penalties for late deposit accrue identically.</p>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Compliance</th><th>Deadline</th><th>Penalty</th></tr></thead>
  <tbody>
    <tr><td>TDS on Salary</td><td>7th of next month</td><td>1.5 percent monthly interest under Section 201(1A) IT Act</td></tr>
    <tr><td>PF (EPF)</td><td>15th of next month</td><td>12 percent annual interest under Section 7Q; damages 5-25 percent under Section 14B</td></tr>
    <tr><td>ESI</td><td>15th of next month</td><td>12 percent annual interest; damages up to 25 percent under Section 85B</td></tr>
    <tr><td>Form 24Q (TDS Return)</td><td>Quarterly: 31 July, 31 Oct, 31 Jan, 31 May</td><td>Late fee Rs 200 per day under Section 234E; up to Rs 1 lakh under Section 271H</td></tr>
    <tr><td>Form 16 issuance</td><td>15 June</td><td>Section 272A penalty for default</td></tr>
    <tr><td>Form 3CEB Transfer Pricing</td><td>Annual (with ITR)</td><td>2 percent of international transaction value under Section 271AA IT Act</td></tr>
    <tr><td>Statutory Audit (Section 143)</td><td>From Year 1 of subsidiary</td><td>ROC penalty for late filing of audited financial statements (AOC-4)</td></tr>
    <tr><td>FC-GPR Filing (FDI receipt)</td><td>Within 30 days of share allotment</td><td>FEMA 1999 compliance; late submission compounding</td></tr>
  </tbody>
</table>
</div>
<p style="margin-top:16px;"><strong>Talk to Patron's CA-led India Team:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> | <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20G-P%20vs%20Patron%20India%20cost-comparison%20model%20for%20our%20projected%20headcount." target="_blank" rel="noopener">WhatsApp +91 945 945 6700</a> | <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20G-P%20Alternative%20India&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20comparing%20G-P%20EOR%20India%20with%20a%20mid-market%20CA-led%20alternative%20and%20would%20like%20a%20discovery%20call%20to%20discuss%20cost%20modelling%20and%20coexistence%20options.%0A%0AThank%20you.">Email contact@patronaccounting.com</a>. Free 30-minute consultation. We respond within 2 hours.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">G-P for Global Enterprise. Patron for India Specialisation. Choose Accordingly.</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>The G-P alternative India question is one of category, not quality. G-P (Globalization Partners) is the original EOR provider, founded 2012, and is widely recognised as the gold standard for global enterprises - 180+ country coverage via owned entities, 13+ years of compliance track record, deepest regulated-industry expertise, and the strongest enterprise integrations in the market. For Fortune 500 companies running 100+ employees across 20+ countries in regulated industries, G-P remains a defensible choice and we acknowledge that openly.</p>
<p>Patron Accounting LLP is a different category: a CA-led India accounting practice offering equivalent India compliance depth at mid-market pricing, plus CA-signed certifications and integrated services (statutory audit, transfer pricing, ROC, FEMA, Virtual CFO) that no global EOR can issue. For foreign employers building 5 to 50 person India teams over a multi-year horizon, Patron's entity model typically delivers 50 to 70 percent fully-loaded annual cost savings against G-P's PEPM tier - while keeping the same India compliance scope and adding the CA accountability that the Indian tax and corporate law regime requires.</p>
<p>Map your headcount, your country footprint, and your need for India-specific work outside EOR scope, then choose accordingly.</p>
<p>10,000+ Businesses Served | 4.9 Google Rating | 4 Cities (Pune, Mumbai, Delhi, Gurugram) | Coexistent with G-P</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20G-P%20vs%20Patron%20India%20cost-comparison%20model%20for%20our%20projected%20headcount." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20G-P%20Alternative%20India&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20comparing%20G-P%20EOR%20India%20with%20a%20mid-market%20CA-led%20alternative%20and%20would%20like%20a%20discovery%20call%20to%20discuss%20cost%20modelling%20and%20coexistence%20options.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Related EOR and Decision Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Whether you keep G-P globally and add Patron for India, or fully replace G-P for India scope, these companion pages help with the broader decision.</p>
            <!-- CITY_PAGES_GRID PATTERN:
                BLOCK 1 - City cards (pa-city-grid, 4 cols desktop):
                BLOCK 2 - Cross-sell services (pa-cross-grid, 3 cols desktop):
                <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for G-P Alternative India</div>
                    <div class="pa-cross-grid">
                        <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">India</div></div></a>
                        (repeat for 5-6 related services)
                    </div>
                </div>
            -->
            <div class="pa-city-block">
                    <div class="pa-block-title">Related EOR and Decision Services from Patron Accounting</div>
                    <div class="pa-block-sub">Sister-pages for vendor comparison, decision framework, and India-specific compliance</div>
                    <div class="pa-cross-grid">
                        <a href="/eor-india-vs-rippling" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Rippling Alternative</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/eor-india-vs-india-entity-setup" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR vs Pvt Ltd Decision</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/best-eor-providers-india-2026" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR Provider Roundup</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/eor-vs-contractor-india" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR vs Contractor</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every 6 months or whenever G-P pricing changes, India Labour Codes are notified, PF or ESI rates revise, MCA company law amends, G-P India entity changes, G-P acquisition or rebrand events occur, or new India EOR competitors reach scale. Last reviewer: CA & CS Team, Patron Accounting LLP.</p>
        </div>
    </div>
</section>



</main>



<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION - Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '{{ env("GOOGLE_PLACES_API_KEY") }}',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '{{ env("PATRON_GOOGLE_PLACE_ID") }}',               // Patron Accounting's Google Place ID
        // Fallback static reviews (shown if API fails or key not set)
        fallbackReviews: [
            {
                author_name: "Subhendu Mishra",
                profile_photo_url: "",
                rating: 5,
                text: "I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Rajib Dutta",
                profile_photo_url: "",
                rating: 5,
                text: "I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Nishikant Gurav",
                profile_photo_url: "",
                rating: 5,
                text: "Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Nikhil Nimbhorkar",
                profile_photo_url: "",
                rating: 5,
                text: "Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.",
                relative_time_description: "4 months ago"
            },
            {
                author_name: "Sameer Mehta",
                profile_photo_url: "",
                rating: 5,
                text: "I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Preeti Singh Rathor",
                profile_photo_url: "",
                rating: 5,
                text: "From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Anita Gaur",
                profile_photo_url: "",
                rating: 5,
                text: "Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.",
                relative_time_description: "5 months ago"
            },
            {
                author_name: "Pankaj Arvikar",
                profile_photo_url: "",
                rating: 5,
                text: "I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Sunny Ashpal",
                profile_photo_url: "",
                rating: 5,
                text: "Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.",
                relative_time_description: "6 months ago",
                role: "Director - Demandify Media",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
            }
        ]
    };

    // ============================================
    // HELPER: Generate star SVGs
    // ============================================
    function starsHTML(rating) {
        let s = '';
        for (let i = 0; i < 5; i++) {
            s += i < rating
                ? '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>'
                : '<svg viewBox="0 0 24 24" style="opacity:0.2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
        }
        return s;
    }

    // ============================================
    // HELPER: Avatar color based on name
    // ============================================
    const avatarColors = ['', 'blue', 'teal', 'purple'];
    function avatarClass(index) {
        return avatarColors[index % avatarColors.length];
    }

    // ============================================
    // RENDER: Build card HTML for a review
    // ============================================
    function buildVideoCard(review) {
        return `
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="${review.photoUrl || ''}">
                        <source src="${review.videoUrl}" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="testi-star-badge">${starsHTML(review.rating)}</div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar">
                        ${review.photoUrl ? `<img src="${review.photoUrl}" alt="${review.author_name}">` : review.author_name.charAt(0)}
                    </div>
                    <div>
                        <div class="testi-name">${review.author_name}</div>
                        ${review.role ? `<div class="testi-role">${review.role}</div>` : ''}
                    </div>
                </div>
            </div>
        </div>`;
    }

    function buildQuoteCard(review, index) {
        const hasPhoto = review.profile_photo_url && review.profile_photo_url !== '';
        const initial = review.author_name ? review.author_name.charAt(0).toUpperCase() : '?';
        const colorClass = avatarClass(index);

        return `
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <p class="testi-quote-text">${review.text || ''}</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ${colorClass}">
                            ${hasPhoto ? `<img src="${review.profile_photo_url}" alt="${review.author_name}">` : initial}
                        </div>
                        <div>
                            <div class="testi-name">${review.author_name}</div>
                            ${review.role ? `<div class="testi-role">${review.role}</div>` : (review.relative_time_description ? `<div class="testi-role">${review.relative_time_description}</div>` : '')}
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars">${starsHTML(review.rating)}</div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>`;
    }

    // ============================================
    // RENDER: Populate slider with reviews
    // ============================================
      function renderReviews(reviews) {
const slider = document.getElementById('testimonialSlider');
const loading = document.getElementById('testiLoading');

let html = '';

reviews.forEach(function(review, i) {
    if (review.hasVideo && review.videoUrl) {
        html += buildVideoCard(review);
    } else {
        html += buildQuoteCard(review, i);
    }
});

// If slider already initialized destroy first
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}

slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';

// Re-initialize slick
initSlick(slider);


}

    function initSlick(slider) {
        if ($(slider).hasClass('slick-initialized')) return;
        $(slider).slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 900, settings: { slidesToShow: 2 } },
                { breakpoint: 600, settings: { slidesToShow: 1, autoplaySpeed: 3000 } }
            ]
        });
    }

    // ============================================
    // FETCH: Google Places API Reviews
    // ============================================
    function fetchGMBReviews() {
        // If API key not set, use fallback
        if (!CONFIG.googleApiKey || CONFIG.googleApiKey === '') {
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
            renderReviews(CONFIG.fallbackReviews);
            return;
        }

        // Google Places API requires server-side proxy due to CORS
        // Option 1: Use Google Maps JS API (requires loading Maps library)
        // Option 2: Use a server-side proxy endpoint
        // Below is the Google Maps JS API approach:

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${CONFIG.googleApiKey}&libraries=places&callback=initGMBReviews`;
        script.async = true;
        script.defer = true;
        script.onerror = function() {
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
            renderReviews(CONFIG.fallbackReviews);
        };
        document.head.appendChild(script);
    }

    // Global callback for Google Maps JS API
    window.initGMBReviews = function() {
        try {
            const service = new google.maps.places.PlacesService(document.createElement('div'));
            service.getDetails({
                placeId: CONFIG.placeId,
                fields: ['name', 'rating', 'reviews', 'user_ratings_total']
            }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews && place.reviews.length > 0) {
                    console.log(`[Testimonials] Fetched ${place.reviews.length} GMB reviews for ${place.name} (${place.rating}★, ${place.user_ratings_total} total)`);

                    // Merge: video testimonials first, then GMB reviews
                    const videoTestimonials = CONFIG.fallbackReviews.filter(r => r.hasVideo);
                    const gmbReviews = place.reviews.map(function(r) {
                        return {
                            author_name: r.author_name,
                            profile_photo_url: r.profile_photo_url,
                            rating: r.rating,
                            text: r.text,
                            relative_time_description: r.relative_time_description
                        };
                    });

                    renderReviews([...videoTestimonials, ...gmbReviews]);
                } else {
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
                    renderReviews(CONFIG.fallbackReviews);
                }
            });
        } catch (e) {
            console.log('[Testimonials] Error:', e);
            renderReviews(CONFIG.fallbackReviews);
        }
    };

    // ============================================
    // INIT
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        // Static cards already rendered - init Slick immediately
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
        }
        fetchGMBReviews();
    });
})();

// Video play/pause toggle for testimonial cards
function toggleTestiVideo(area) {
    const video = area.querySelector('video');
    if (!video) return;
    if (video.paused) {
        // Pause all other videos first
        document.querySelectorAll('.testi-video-area video').forEach(function(v) { v.pause(); v.closest('.testi-video-area').classList.remove('playing'); });
        video.play();
        area.classList.add('playing');
    } else {
        video.pause();
        area.classList.remove('playing');
    }
}

</script>

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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
