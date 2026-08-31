
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
    <title>Patent Registration in Pune - Filing, Fees & Examination</title>
    <meta name="description" content="File patent in Pune. Provisional and complete specification. Prior art search. IT, pharma, auto, startups. 20-year protection. CA-assisted. Call +91 945 945 6700.">
    <link rel="canonical" href="/patent-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Patent Registration in Pune - Filing, Fees & Examination">
    <meta property="og:description" content="File patent in Pune. Provisional and complete specification. Prior art search. IT, pharma, auto, startups. 20-year protection. CA-assisted. Call +91 945 945 6700.">
    <meta property="og:url" content="/patent-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Patent Registration in Pune - Filing, Fees & Examination">
    <meta name="twitter:description" content="File patent in Pune. Provisional and complete specification. Prior art search. IT, pharma, auto, startups. 20-year protection. CA-assisted. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Patent Registration in Pune",
      "description": "File patent in Pune. Provisional and complete specification. Prior art search. IT, pharma, auto, startups. 20-year protection. CA-assisted. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/patent-registration/pune",
      "serviceType": "Patent Registration in Pune",
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
        "url": "https://www.patronaccounting.com/patent-registration/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "1600",
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
          "name": "Patent Registration in India: Process, Fees and Guide",
          "item": "https://www.patronaccounting.com/patent-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Patent Registration in Pune",
          "item": "https://www.patronaccounting.com/patent-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which Patent Office has jurisdiction over Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Indian Patent Office Mumbai Branch at Boudhik Sampada Bhavan, Antop Hill, Mumbai. Covers Maharashtra including Pune. All applications filed electronically through ipindiaonline.gov.in. No physical visit required. Patron Pune office handles entire process from Wagholi."
          }
        },
        {
          "@type": "Question",
          "name": "Can I file a patent application online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Indian Patent Office accepts e-filing through ipindiaonline.gov.in. All forms submitted electronically with digital signatures. E-filing offers fee discount. Patron manages complete e-filing from Wagholi including specification drafting and examination response."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of patent registration in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government filing fee Rs 1,600 for individuals and startups via e-filing. Professional fees Rs 25,000 for provisional to Rs 1,50,000 for complex complete specification. Total filing to grant Rs 80,000 to 3,00,000. Startups get 80 percent reduction on all government fees."
          }
        },
        {
          "@type": "Question",
          "name": "How long does patent registration take in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Total from filing to grant typically 2 to 5 years. Provisional 2 to 4 weeks preparation. Complete within 12 months. Publication at 18 months. Examination within 48 months. Startups can get expedited examination. Patent valid for 20 years from filing."
          }
        },
        {
          "@type": "Question",
          "name": "Can software be patented in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 3(k) excludes computer programmes per se. But software inventions producing technical effects beyond the programme can be patented. AI medical diagnosis, IoT architectures, ML manufacturing methods are patentable with correct claims drafting. Patron navigates Section 3(k) for Pune IT companies."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed for patent filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 1 Application, Form 2 Specification with description claims drawings abstract, Form 3 Statement regarding foreign filings, Form 5 Declaration of Inventorship, Form 26 Agent authorisation, Form 28 Startup declaration. Priority documents for convention and PCT applications."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between provisional and complete patent?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Provisional secures priority date when invention is under development. No claims required. Complete provides full disclosure with claims defining protection scope. Complete must be filed within 12 months of provisional per Section 9. Failure means application deemed abandoned."
          }
        },
        {
          "@type": "Question",
          "name": "How long is a patent valid in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "20 years from filing date under Section 53 of the Patents Act. Annual renewal required from 3rd year with progressive fees. Non-payment causes patent to lapse. Lapsed patents can be restored within 18 months via Form 15 with penalty fee. Quick Answers Pune mein patent file karne mein kitna kharcha aata hai? Government fee Rs 1,600 (individual/startup e-filing). Professional Rs 25,000 se start (provisional). Complete Rs 50,000-1,50,000. Total Rs 80,000-3,00,000. Startup ko 80% discount milta hai. Kya software ko India mein patent mil sakta hai? Section 3(k) computer programme per se exclude karta hai. Par technical effect aata hai toh patent mil sakta hai - AI medical diagnosis, IoT system. Claims drafting bahut important hai. Patent kitne saal ke liye valid hota hai? 20 saal filing date se (Section 53). 3rd year se har saal renewal fee. Fee nahi di toh lapse. 18 mahine mein restore kar sakte hain."
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
                        Patent Registration in Pune: IT, Pharma, Automotive, Startups, and Manufacturing Innovations
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">18 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Form 1 (Application), Form 2 (Specification), Form 3 (Statement), Form 5 (Inventorship), Form 26 (Agent), Form 28 (Startup declaration), priority documents</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 25,000 professional fees. Government fee Rs 1,600 (individual/startup e-filing). Startups get 80% fee reduction with Form 28</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any true and first inventor or assignee. Individuals, startups, small entities, and large entities. Indian and foreign applicants. Section 6, Patents Act 1970</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Provisional: 2-4 weeks. Complete: within 12 months. Publication: 18 months. Grant: 2-5 years. Patent term: 20 years from filing</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Pune office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Patent%20Registration%20in%20Pune&body=Hello%20Patron%2C%0A%0AI%20want%20to%20file%20a%20patent.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20patent%20registration%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Patent Registration',
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
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Patron drafted our AI patent specification with perfect Section 3(k) navigation. The claims focused on the technical effect of our medical diagnostic system, not the algorithm. Granted on first examination without amendments.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Kulkarni</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CTO, AI Startup, Hinjewadi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">We almost lost novelty by presenting at a conference. Patron filed our provisional in 48 hours before the presentation. The priority date was secured and the complete spec followed within 12 months. Now granted.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Shah</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Researcher, IISER Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Our forging process patent was drafted with broad enough claims to block competitor workarounds but specific enough to survive FER. Patron understood our manufacturing context from the start.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rahul Joshi</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Engineering Company, PCMC</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">As a pharma startup, we needed Section 3(d) compliance for our new drug formulation. Patron structured the specification with comparative efficacy data that the examiner accepted without objection.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#6366F1;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha Deshmukh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, Biotech Startup, Hadapsar</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Excellent service for company registration and compliance. The team is very responsive and handles everything end to end.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SA</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sunny Ashpal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Demandify Media</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 months ago</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>From AI startups in Hinjewadi to pharma firms in Hadapsar to manufacturers in PCMC - Pune innovators trust Patron for patent registration.</p>
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
            <a href="#comparison-section" class="toc-btn">Patent vs TM vs CR</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patent Registration in Pune: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Patent Registration Services at a Glance</strong></p>
                    <p>A patent grants exclusive rights for 20 years from filing (Section 53, Patents Act 1970). The invention must be novel, involve an inventive step, and be industrially applicable (Section 2(1)(j)). Pune falls under the Mumbai Patent Office jurisdiction. Filing can be provisional (to secure priority) or complete. Startups get 80% fee reduction. Grant takes 2-5 years. Section 3 exclusions (3(k) software, 3(d) pharma) require careful navigation.</p>
                </div>
                <p>Pune is one of India's most innovation-dense cities. The Hinjewadi IT corridor generates AI, ML, cloud, and IoT inventions requiring Section 3(k) navigation. Pharma/biotech (Serum Institute, NCL, IISER) files hundreds of applications. Automotive (Tata Motors, Bajaj Auto) patents EV and powertrain tech. Learn more about <a href="/patent-registration">patent registration across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Patents Act 1970 (amended 2005); Patents Rules 2003 (amended 2024); PCT; Paris Convention</td></tr>
                        <tr><td>Patentability</td><td>Novel + Inventive step + Industrial applicability. Must not fall under Section 3/4</td></tr>
                        <tr><td>Patent Term</td><td>20 years from filing date (Section 53). Annual renewal from 3rd year</td></tr>
                        <tr><td>Key Deadlines</td><td>Provisional to complete: 12 months. Publication: 18 months. Examination: 48 months. FER: 6+3 months</td></tr>
                        <tr><td>Fee Categories</td><td>Individual/Startup: Rs 1,600. Small entity: Rs 4,000. Large: Rs 8,000 (e-filing). 80% startup discount</td></tr>
                        <tr><td>Jurisdiction</td><td>Indian Patent Office, Mumbai Branch (Maharashtra). E-filing: ipindiaonline.gov.in</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Despite innovation density, many Pune inventors - startup founders, academic researchers, small manufacturers - do not file patents due to perceived cost and complexity. Others file without professional specification drafting, resulting in weak claims. Patron's Pune office provides end-to-end patent services from prior art search through specification drafting to grant and 20-year renewal, with deep understanding of Pune's sector-specific patentability challenges.</p>
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
                <h2 class="section-title">What Is Patent Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Patent registration is the legal process of obtaining exclusive rights from the Indian Patent Office to prevent others from making, using, selling, or importing a patented invention in India for 20 years from filing, as governed by the Patents Act, 1970.</p>
                    <p>An invention must satisfy three criteria: novelty (not in prior art), inventive step (non-obvious technical advance - Section 2(1)(ja)), and industrial applicability. Section 3 lists 26 non-patentable categories - most relevant for Pune: Section 3(k) computer programmes per se and Section 3(d) new forms of known substances without enhanced efficacy.</p>
                    <p>The process involves filing (provisional or complete), publication (18 months), examination request (48 months), FER response, opposition management, and grant. Post-grant, annual renewal maintains the patent for 20 years. Patron provides <a href="/patent-registration">patent registration</a> with sector-specific claims drafting for Pune innovators.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Patent Registration:</strong></p>
                    <ul>
                        <li><strong>Section 2(1)(j):</strong> Invention = new product or process + inventive step + industrial applicability.</li>
                        <li><strong>Section 3(k):</strong> Computer programmes per se excluded. Software with technical effect beyond the programme is patentable.</li>
                        <li><strong>Section 3(d):</strong> New forms of known substances excluded unless enhanced efficacy demonstrated. Critical for pharma.</li>
                        <li><strong>Provisional Specification:</strong> Secures priority date. Complete must follow within 12 months (Section 9) or application abandoned.</li>
                        <li><strong>FER:</strong> First Examination Report - examiner objections. Response within 6+3 months. Make-or-break stage for grant.</li>
                        <li><strong>Section 53:</strong> Patent term = 20 years from filing. Annual renewal from 3rd year. Non-payment = lapse.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Patent Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Patent</span>
                        <strong>Pune Innovation</strong>
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
            <h2 class="section-title">Who Needs Patent Registration in Pune?</h2>
            <div class="content-text">
                
                <p><strong>IT and Software Companies (Hinjewadi, Kharadi, Magarpatta):</strong> AI, ML, IoT, cloud, enterprise software. Section 3(k) requires technical effect beyond programme per se. Patron navigates the boundary for every Pune IT patent. <a href="#">Company registration</a> with IP strategy from Day 1.</p>
                <p><strong>Pharma and Biotech (Serum Institute, Lupin, Emcure, NCL, IISER):</strong> Drug formulations, biologics, chemical processes. Section 3(d) requires enhanced efficacy evidence. Comparative data essential for grant.</p>
                <p><strong>Automotive (Tata Motors, Bajaj Auto, Force Motors, Mercedes R&D):</strong> EV technologies, powertrain, advanced manufacturing. Product and process patents. Patent activity surging with EV transition.</p>
                <p><strong>Startups and Academic Researchers:</strong> Venture Center, SciTech Park, COEP BHAU incubators. 80% fee reduction with Form 28. File provisional before public disclosure - no grace period under Indian law. <a href="#">Startup India registration</a> unlocks fee benefits.</p>
                <p><strong>Engineering and Manufacturing (PCMC, Chakan):</strong> Bharat Forge, Thermax, Kirloskar, MSMEs. Process patents protect manufacturing innovations from reverse-engineering.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patent Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Patentability Analysis</td><td>Novelty, inventive step, industrial applicability evaluation. Section 3(k) software and Section 3(d) pharma analysis. Go/no-go recommendation</td></tr>
                        <tr><td>Prior Art Search</td><td>Global search: InPASS, PATENTSCOPE, Espacenet, USPTO, Google Patents, non-patent literature. Search report with patentability opinion</td></tr>
                        <tr><td>Provisional Specification + Filing</td><td>Drafting provisional to secure priority date. Forms 1, 2, 3, 5, 26, 28 filed with Mumbai Patent Office via e-filing</td></tr>
                        <tr><td>Complete Specification + Filing</td><td>Full description, embodiments, drawings, claims, abstract. Claims for broadest defensible protection. Within 12 months of provisional</td></tr>
                        <tr><td>Examination Request + FER Response</td><td>Form 18 within 48 months. FER analysis, objection handling, claim amendments, technical arguments within 6+3 months. Make-or-break stage</td></tr>
                        <tr><td>Opposition Management</td><td>Pre-grant (Section 25(1)) and post-grant (Section 25(2)) opposition defence. Evidence, counter-statements, hearing representation</td></tr>
                        <tr><td>Grant Procurement + Certificate</td><td>Tracking to grant under Section 43. Patent published in Patent Journal. Certificate issued</td></tr>
                        <tr><td>Annual Renewal (20 years)</td><td>Progressive renewal fees from 3rd year. Deadline tracking. Non-payment = lapse. Patron manages entire 20-year term</td></tr>

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
            <h2 class="section-title">How to Register a Patent from Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 8-step process covers the complete patent lifecycle - from invention disclosure through prior art search, provisional filing, complete specification, publication, examination, FER response, and grant with 20-year renewal.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Invention Disclosure and Patentability Analysis</h3>
        <p class="step-description">Meet Patron at Wagholi or contact online. Provide invention details - what it does, how it works, what problem it solves. Patron conducts patentability analysis: novelty, inventive step, industrial applicability. Section 3 exclusion check - Section 3(k) for software, Section 3(d) for pharma.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Novelty assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inventive step evaluated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 3 exclusions checked</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ANALYSE</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="6" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Novel?</text><text x="60" y="65" font-size="6" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Inventive? S.3?</text></svg></div>
            <span class="illustration-label">Patentability Confirmed</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Prior Art Search</h3>
        <p class="step-description">Comprehensive search across InPASS, WIPO PATENTSCOPE, Espacenet, USPTO, Google Patents, and non-patent literature (research papers, product disclosures). Search report identifies closest prior art and assesses likelihood of grant. If overlap found, claims may need narrowing or invention modification.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Global databases searched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Non-patent literature checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Patentability opinion delivered</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEARCH</text><text x="38" y="50" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">InPASS</text><text x="60" y="50" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">WIPO</text><text x="82" y="50" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">EPO</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">USPTO + Literature</text></svg></div>
            <span class="illustration-label">Prior Art Clear</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Provisional Specification Filing</h3>
        <p class="step-description">Patron drafts and files provisional specification to secure priority date - critical for startups demonstrating at events or researchers about to publish. Forms 1, 2, 3, 5, 26, 28 filed with Mumbai Patent Office via e-filing. Government fee Rs 1,600 for individual/startup. Priority date established.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Priority date secured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Forms filed with Mumbai PO</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 1,600 startup fee applied</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PROVISIONAL</text><line x1="30" y1="36" x2="90" y2="36" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="52" font-size="6" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Priority Date</text><text x="60" y="65" font-size="5" fill="#E8712C" font-weight="500" text-anchor="middle" font-family="Arial">Rs 1,600 Startup</text></svg></div>
            <span class="illustration-label">Provisional Filed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Complete Specification Drafting and Filing</h3>
        <p class="step-description">Full specification with detailed description, embodiments, drawings, claims, and abstract. Claims drafted for broadest defensible protection. Must be filed within 12 months of provisional (Section 9(1)). If deadline missed, application deemed abandoned and priority date lost permanently.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Claims for max protection</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Drawings and embodiments</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed within 12-month deadline</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="26" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">COMPLETE SPEC</text><rect x="25" y="34" width="28" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="57" y="34" width="28" height="12" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><text x="39" y="43" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Claims</text><text x="71" y="43" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Draw</text><text x="60" y="62" font-size="5" fill="#E8712C" font-weight="500" text-anchor="middle" font-family="Arial">Within 12 Months</text></svg></div>
            <span class="illustration-label">Complete Spec Filed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Publication, Examination Request, and FER Response</h3>
        <p class="step-description">Application published at 18 months (Section 11A). Form 18 filed for examination within 48 months (Section 11B). Examiner issues FER with objections. Patron analyses, prepares detailed response addressing each objection, amends claims if necessary. Response within 6+3 months. Make-or-break stage.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Published at 18 months</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Examination requested</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FER objections resolved</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">18m</text><text x="60" y="48" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Publish</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">+ Exam Request 48m</text></svg></div>
            <span class="illustration-label">Examination Cleared</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Grant, Certificate, and 20-Year Renewal</h3>
        <p class="step-description">If all objections resolved and no opposition pending, Controller grants patent (Section 43). Patent published in Patent Journal. Certificate issued. Annual renewal from 3rd year maintains patent for full 20-year term. Patron tracks deadlines and ensures timely payment.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Patent granted Section 43</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>20-year renewal managed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FER</text><line x1="30" y1="36" x2="90" y2="36" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="52" font-size="6" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">6+3 Months</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Objections + Claims</text></svg></div>
            <span class="illustration-label">Patent Granted</span>
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
            <h2 class="section-title">Documents Required for Patent Registration in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>Form 1 - Application:</strong> Applicant details, title, category (individual/startup/small/other), inventor name and address.</li><li><strong>Form 2 - Specification:</strong> Technical description, drawings, claims (complete spec), abstract (max 150 words). Defines protection scope.</li><li><strong>Form 3 - Statement and Undertaking:</strong> Declaration regarding foreign patent applications. Updated within 6 months of new foreign filing.</li><li><strong>Form 5 - Declaration of Inventorship:</strong> Filed with complete specification identifying true and first inventor(s).</li><li><strong>Form 26 - Agent Authorisation:</strong> Required if filed through patent agent or advocate.</li><li><strong>Form 28 - Startup/Small Entity:</strong> For 80% fee reduction. Startups registered under Startup India and DPIIT.</li><li><strong>Priority Documents:</strong> For convention or PCT national phase applications.</li><li><strong>Proof of Right:</strong> Assignment deed if applicant is not the inventor.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Pune Startup Tip:</strong> Many startups do not file Form 28 and pay large entity fees. Patron ensures all eligible Pune startups claim the 80% fee reduction - saving Rs 6,400 on filing fee alone for a single application.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Patent Registration Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Section 3(k) - Software Patentability</td><td>Computer programmes per se excluded; IT companies unsure if their invention qualifies</td><td>Claims drafted as technical system/method with tangible result. Technical effect emphasised, not the programme. Section 3(k) navigated for every Pune IT patent</td></tr>
                        <tr><td>Section 3(d) - Pharma Enhanced Efficacy</td><td>New forms without comparative efficacy data get rejected; crores invested in R&D wasted</td><td>Specifications structured with bioavailability studies, stability data, and therapeutic improvement evidence meeting Section 3(d) threshold</td></tr>
                        <tr><td>Novelty Destroyed by Public Disclosure</td><td>Demo at TiE Pune, investor pitch, conference paper before filing = unpatentable permanently</td><td>Provisional filed before any public disclosure. Indian law has no grace period. Patron advises file-first-disclose-later</td></tr>
                        <tr><td>12-Month Provisional Deadline Missed</td><td>Startup files provisional, gets absorbed in product development, misses complete spec deadline = abandoned</td><td>Deadline tracking with multiple reminders. Patron ensures no Pune client loses priority date</td></tr>
                        <tr><td>Weak Specifications and Narrow Claims</td><td>Self-filed patents describe invention but claim too narrowly; competitors design around easily</td><td>Claims balanced for maximum defensible breadth with adequate specification support. Professional drafting essential</td></tr>

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
            <h2 class="section-title">Patent Registration Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Prior Art Search</td><td>Rs 10,000 - Rs 25,000</td></tr>
                        <tr><td>Provisional Specification + Filing</td><td>Rs 25,000 - Rs 50,000</td></tr>
                        <tr><td>Complete Specification + Filing</td><td>Rs 50,000 - Rs 1,50,000</td></tr>
                        <tr><td>Government Fee - Filing (e-filing)</td><td>Rs 1,600 / 4,000 / 8,000 (individual-startup / small / large)</td></tr>
                        <tr><td>Examination Request (Form 18)</td><td>Rs 4,000 / 10,000 / 20,000 (govt fee by category)</td></tr>
                        <tr><td>FER Response</td><td>Rs 25,000 - Rs 75,000</td></tr>
                        <tr><td>Annual Renewal (progressive)</td><td>Rs 800 - Rs 16,000/year (startup rates available)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Patent Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20file%20a%20patent%20from%20Pune.%20Please%20share%20pricing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patent Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Patentability Analysis + Prior Art Search</td><td>Pre-filing (2-4 weeks)</td></tr>
                        <tr><td>Provisional Specification Filing</td><td>Week 0 (priority date established)</td></tr>
                        <tr><td>Complete Specification Filing</td><td>Within 12 months of provisional</td></tr>
                        <tr><td>Publication in Patent Journal</td><td>18 months from filing/priority</td></tr>
                        <tr><td>Examination Request (Form 18)</td><td>Within 48 months of filing/priority</td></tr>
                        <tr><td>FER + Response + Grant</td><td>2-5 years from filing (total)</td></tr>
                        <tr><td>Annual Renewal</td><td>3rd year onwards for 20 years</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Pune falls under Mumbai Patent Office jurisdiction. All filings via ipindiaonline.gov.in - no Mumbai visit required. Startups with Form 28 can request expedited examination (Form 18A). The patent term is 20 years from filing date. Patron's Wagholi office handles the complete process locally for IT companies, pharma firms, automotive manufacturers, and startups across Pune.</p>

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
            <h2 class="section-title">Why Choose Patron for Patent Registration in Pune</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office Presence</h3><p>RTC Silver, Wagholi - walk-in for IT companies from Hinjewadi, pharma from Hadapsar, automotive from PCMC, startups, and academics from SPPU/COEP/IISER.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Sector-Specific Expertise</h3><p>Section 3(k) for software (technical effect analysis). Section 3(d) for pharma (enhanced efficacy). Mechanical/process patents for automotive and manufacturing. Cross-sector patent depth.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Startup Fee Optimisation</h3><p>80% fee reduction via Form 28. Expedited examination via Form 18A. <a href="#">Startup India registration</a> verified. Saving Rs 6,400+ on filing alone.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>End-to-End + 20-Year Renewal</h3><p>Prior art search to specification to FER response to opposition to grant to renewal. 10,000+ businesses, 4.9 Google rating, ISO 9001:2015.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and hundreds of Pune-based companies for registration, compliance, and IP advisory.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patent vs Trademark vs Copyright</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>Patent</th><th>Trademark</th><th>Copyright</th></tr></thead>
                    <tbody>
                        <tr><td>Protects</td><td>Inventions - products and processes</td><td>Brand names, logos, slogans</td><td>Creative expressions - literary, artistic, musical</td></tr>
                        <tr><td>Requirement</td><td>Novel, inventive step, industrial applicability</td><td>Distinctive, not deceptively similar</td><td>Original, fixed in tangible form</td></tr>
                        <tr><td>Registration</td><td>Mandatory for protection</td><td>Recommended</td><td>Optional (automatic upon creation)</td></tr>
                        <tr><td>Term</td><td>20 years from filing</td><td>10 years (renewable)</td><td>Lifetime + 60 years</td></tr>
                        <tr><td>Cost</td><td>Rs 1,600-8,000 govt filing</td><td>Rs 4,500/class</td><td>Rs 500-5,000/work</td></tr>
                        <tr><td>Common in Pune</td><td>Software systems, drug formulations, mechanical innovations</td><td>Brand names, logos, packaging</td><td>Software code, content, designs, music</td></tr>

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
            <h2 class="section-title">Related Services for Pune Innovators</h2>
            <div class="content-text">
                
                <p>Patent applicants in Pune often need complementary services:</p>
                <ul><li><a href="/patent-registration">Patent Registration (India)</a> - National overview.</li>
                    <li><a href="/trademark-registration/pune">Trademark Registration in Pune</a> - Protect brand alongside invention.</li>
                    <li><a href="/copyright-registration-for-literary-work/pune">Copyright for Literary Work in Pune</a> - Protect software code and documentation.</li>
                    <li><a href="#">Company Registration in Pune</a> - Incorporate with IP strategy.</li>
                    <li><a href="#">Startup India Registration</a> - Unlock 80% patent fee reduction.</li>
                    <li><a href="#">Income Tax Filing in Pune</a> - Patent income reporting.</li>
                    <li><a href="/gst-registration">GST Registration</a> - For manufacturing and services.</li>
                    <li><a href="#">MSME Registration</a> - Small entity fee benefits.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Patent Registration</h2>
            <div class="content-text">
                
                <p><strong>Key Provisions:</strong></p>
                <ul><li><strong>Section 2(1)(j):</strong> Invention = new product or process + inventive step + industrial applicability.</li>
                    <li><strong>Section 3:</strong> 26 non-patentable categories. Key: <strong>3(k)</strong> computer programmes per se; <strong>3(d)</strong> new forms without enhanced efficacy; 3(e) mere admixture.</li>
                    <li><strong>Section 9:</strong> Provisional to complete within <strong>12 months</strong>. Missed = abandoned.</li>
                    <li><strong>Section 11A:</strong> Publication at <strong>18 months</strong>. Early publication via Form 9.</li>
                    <li><strong>Section 11B:</strong> Examination request within <strong>48 months</strong>. Without = treated as withdrawn.</li>
                    <li><strong>Section 25:</strong> Pre-grant (25(1)) and post-grant (25(2)) opposition.</li>
                    <li><strong>Section 43:</strong> Grant when application in order.</li>
                    <li><strong>Section 53:</strong> <strong>20 years</strong> from filing. Annual renewal from 3rd year.</li></ul>
                <p style="margin-top:16px;"><strong>Startup Benefits:</strong></p>
                <ul><li>Form 28: <strong>80% fee reduction</strong> on all government fees</li>
                    <li>Form 18A: <strong>Expedited examination</strong> - faster grant timeline</li></ul>
                <p style="margin-top:16px;"><strong>External Authority:</strong> <a href="https://ipindia.gov.in/" target="_blank" rel="noopener">Indian Patent Office</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: Patent Registration in Pune</h2>
                    <p class="faq-expanded__lead">Get answers about patent filing, costs, timelines, software patentability, documents, provisional vs complete, and patent validity for Pune inventors and companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Patent Registration',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which Patent Office has jurisdiction over Pune?</h3>
                        <div class="faq-expanded__a"><p>Indian Patent Office Mumbai Branch at Boudhik Sampada Bhavan, Antop Hill, Mumbai. Covers Maharashtra including Pune. All applications filed electronically through ipindiaonline.gov.in. No physical visit required. Patron Pune office handles entire process from Wagholi.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I file a patent application online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Indian Patent Office accepts e-filing through ipindiaonline.gov.in. All forms submitted electronically with digital signatures. E-filing offers fee discount. Patron manages complete e-filing from Wagholi including specification drafting and examination response.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the cost of patent registration in Pune?</h3>
                        <div class="faq-expanded__a"><p>Government filing fee Rs 1,600 for individuals and startups via e-filing. Professional fees Rs 25,000 for provisional to Rs 1,50,000 for complex complete specification. Total filing to grant Rs 80,000 to 3,00,000. Startups get 80 percent reduction on all government fees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does patent registration take in India?</h3>
                        <div class="faq-expanded__a"><p>Total from filing to grant typically 2 to 5 years. Provisional 2 to 4 weeks preparation. Complete within 12 months. Publication at 18 months. Examination within 48 months. Startups can get expedited examination. Patent valid for 20 years from filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can software be patented in India?</h3>
                        <div class="faq-expanded__a"><p>Section 3(k) excludes computer programmes per se. But software inventions producing technical effects beyond the programme can be patented. AI medical diagnosis, IoT architectures, ML manufacturing methods are patentable with correct claims drafting. Patron navigates Section 3(k) for Pune IT companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What documents are needed for patent filing?</h3>
                        <div class="faq-expanded__a"><p>Form 1 Application, Form 2 Specification with description claims drawings abstract, Form 3 Statement regarding foreign filings, Form 5 Declaration of Inventorship, Form 26 Agent authorisation, Form 28 Startup declaration. Priority documents for convention and PCT applications.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the difference between provisional and complete patent?</h3>
                        <div class="faq-expanded__a"><p>Provisional secures priority date when invention is under development. No claims required. Complete provides full disclosure with claims defining protection scope. Complete must be filed within 12 months of provisional per Section 9. Failure means application deemed abandoned.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How long is a patent valid in India?</h3>
                        <div class="faq-expanded__a"><p>20 years from filing date under Section 53 of the Patents Act. Annual renewal required from 3rd year with progressive fees. Non-payment causes patent to lapse. Lapsed patents can be restored within 18 months via Form 15 with penalty fee.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Pune mein patent file karne mein kitna kharcha aata hai?</strong> Government fee Rs 1,600 (individual/startup e-filing). Professional Rs 25,000 se start (provisional). Complete Rs 50,000-1,50,000. Total Rs 80,000-3,00,000. Startup ko 80% discount milta hai.</p>
                <p><strong>Kya software ko India mein patent mil sakta hai?</strong> Section 3(k) computer programme per se exclude karta hai. Par technical effect aata hai toh patent mil sakta hai - AI medical diagnosis, IoT system. Claims drafting bahut important hai.</p>
                <p><strong>Patent kitne saal ke liye valid hota hai?</strong> 20 saal filing date se (Section 53). 3rd year se har saal renewal fee. Fee nahi di toh lapse. 18 mahine mein restore kar sakte hain.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Public Disclosure = Novelty Destroyed. File Before You Demo</h2>
            <div class="content-text">
                
                <p>A Hinjewadi startup demos at a tech conference without a provisional - novelty destroyed permanently. A pharma company invests crores but files without Section 3(d) evidence - rejected. A COEP researcher publishes before filing - public domain forever. A manufacturer's process is reverse-engineered with no patent. A missed 12-month deadline loses the priority date. For Pune innovators, a provisional costs Rs 1,600 (startup), secures 12 months of priority, and begins 20-year protection.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20patent%20registration%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Patent Registration in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Patent registration in Pune serves one of India's most innovation-dense ecosystems - AI and software in the IT corridor, drug formulations in pharma, EV technology in automotive, advanced materials in manufacturing, and breakthrough research in academia. The Patents Act provides 20-year protection but Section 3 exclusions, strict novelty, and multiple deadlines demand professional navigation.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Pune office at RTC Silver, Wagholi delivers comprehensive patent services - patentability analysis, prior art search, specification drafting with sector-specific claims, Patent Office filing, FER response, opposition management, and 20-year renewal tracking.</p>
                <p style="color:rgba(255,255,255,0.9);">With 15+ years, 10,000+ businesses, ISO 9001:2015, and a team of CAs, CSs, and compliance professionals, Patron ensures your invention is properly searched, professionally drafted, strategically filed, and effectively prosecuted from Pune to patent grant.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20file%20a%20patent%20from%20Pune.%20Please%20share%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Patent%20Registration%20in%20Pune&body=Hello%20Patron%2C%0A%0AI%20need%20patent%20registration%20in%20Pune.%0A%0APlease%20share%20details.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Patent Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides patent registration and prosecution services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">Patent registration and prosecution</div>
                <div class="pa-city-grid">
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/patent-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/patent-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/patent-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Pune</div>
                <div class="pa-block-sub">End-to-end IP and business protection</div>
                <div class="pa-cross-grid">
                    <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/statutory-audit/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers patent registration in Pune. Content reviewed annually (Freshness Tier 1) reflecting Patents Rules amendments, fee schedule updates, and Patent Office procedural changes.</p>
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
