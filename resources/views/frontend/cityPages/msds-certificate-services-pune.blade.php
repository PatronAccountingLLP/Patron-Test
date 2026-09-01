
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
    <title>MSDS Certificate in Pune - Material Safety Data Sheet</title>
    <meta name="description" content="MSDS/SDS certificate services in Pune. GHS-compliant 16-section drafting, hazard classification, DG/HAZMAT, export customs documentation. Auto, pharma, chemical manufacturers. Serving MIDC, Chakan. Call +91 945 945 6700.">
    <link rel="canonical" href="/msds-certificate-services/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="MSDS Certificate in Pune - Material Safety Data Sheet">
    <meta property="og:description" content="MSDS/SDS certificate services in Pune. GHS-compliant 16-section drafting, hazard classification, DG/HAZMAT, export customs documentation. Auto, pharma, chemical manufacturers. Serving MIDC, Chakan. Call +91 945 945 6700.">
    <meta property="og:url" content="/msds-certificate-services/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="MSDS Certificate in Pune - Material Safety Data Sheet">
    <meta name="twitter:description" content="MSDS/SDS certificate services in Pune. GHS-compliant 16-section drafting, hazard classification, DG/HAZMAT, export customs documentation. Auto, pharma, chemical manufacturers. Serving MIDC, Chakan. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "MSDS Certificate Services in Pune",
      "description": "MSDS/SDS certificate services in Pune. GHS-compliant 16-section drafting, hazard classification, DG/HAZMAT, export customs documentation. Auto, pharma, chemical manufacturers. Serving MIDC, Chakan. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/msds-certificate-services/pune",
      "serviceType": "MSDS Certificate Services in Pune",
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
          "name": "MSDS Certificate Services in India",
          "item": "https://www.patronaccounting.com/msds-certificate-services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "MSDS Certificate Services in Pune",
          "item": "https://www.patronaccounting.com/msds-certificate-services/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is an MSDS certificate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "MSDS (Material Safety Data Sheet), now called SDS (Safety Data Sheet), is a comprehensive safety document covering a chemical product's composition, hazards, safe handling, storage, first-aid, firefighting, disposal, and transport classification. Follows GHS 16-section format. Required for manufacturers, importers, and exporters of chemicals and hazardous materials. Primary document for workplace safety and customs clearance."
          }
        },
        {
          "@type": "Question",
          "name": "Who needs MSDS certificate in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Manufacturers of chemicals, paints, coatings, lubricants, adhesives, pharmaceuticals, agrochemicals, essential oils, and any product with hazardous substances. Exporters (mandatory for customs clearance globally). Importers (CMSR India compliance). In Pune: auto component manufacturers (Chakan/Pimpri-Chinchwad), pharma/API (Kurkumbh/Ranjangaon), agrochemical firms, paint manufacturers, essential oil exporters."
          }
        },
        {
          "@type": "Question",
          "name": "What are the 16 sections of an SDS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GHS standardized: (1) Identification, (2) Hazard Identification, (3) Composition, (4) First-Aid, (5) Firefighting, (6) Accidental Release, (7) Handling/Storage, (8) Exposure Controls/PPE, (9) Physical/Chemical Properties, (10) Stability, (11) Toxicology, (12) Ecology, (13) Disposal, (14) Transport, (15) Regulatory, (16) Other. Sections 1-8 for immediate safety; 9-11 technical; 12-15 environmental/transport/regulatory."
          }
        },
        {
          "@type": "Question",
          "name": "Is MSDS mandatory in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, for specific categories. CMSR requires SDS for Schedule II substances in Schedule IX format. MSIHC Rules 1989 require safety data sheets for hazardous chemical facilities. For exports, MSDS mandatory for customs clearance in virtually all countries. For imports, customs may require MSDS for chemical shipment clearance. Practically all companies handling chemicals need MSDS."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between MSDS and SDS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "MSDS is the older format with no standardized sections - varied by country and manufacturer. SDS is the current international standard under GHS with standardized 16-section format uniform across 72+ countries including India, US, EU, Canada, Japan. Terms used interchangeably but SDS is technically correct under current global standards."
          }
        },
        {
          "@type": "Question",
          "name": "How long is MSDS valid?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Typically 1-3 years depending on product type and destination country. Must be updated immediately when: new hazard information available, product formulation changes, regulatory requirements change, or new toxicological/ecological data published. Revision date and version number in Section 16. Patron provides revision reminders for all Pune clients."
          }
        },
        {
          "@type": "Question",
          "name": "What is GHS classification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GHS (Globally Harmonized System) categorizes chemical hazards into physical (flammability, explosivity, oxidizing), health (acute toxicity, carcinogenicity, mutagenicity, reproductive toxicity), and environmental (aquatic toxicity). Each class has categories. Classification determines pictograms, signal word, and H/P statements on SDS and label."
          }
        },
        {
          "@type": "Question",
          "name": "How to get MSDS certificate in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Provide complete product information (composition, CAS numbers, concentrations, properties, toxicological data). Patron performs GHS classification, prepares 16-section SDS, assigns DG/HAZMAT classification if applicable. Standard turnaround 15-21 working days. Express 7-10 days. Patron handles from Wagholi office for all Pune industries. Quick Answers What is MSDS? Material Safety Data Sheet (now SDS under GHS) - 16-section safety document for chemical products covering hazards, handling, storage, first-aid, transport, disposal. Required for manufacturers, importers, exporters. Valid 1-3 years. Pune mein MSDS kaise banwayein? Product ki chemical composition, CAS numbers, aur toxicological data dein. GHS classification hogi, 16-section SDS draft hoga, DG classification agar zaroorat ho. 15-21 din mein ready. Patron Pune office se handle karta hai. Is MSDS mandatory for export? Yes - virtually all countries require MSDS/SDS for customs clearance of chemical products. Without MSDS, shipments may be held or rejected at destination port."
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
                        MSDS Certificate Services in Pune: Expert GHS-Compliant Safety Data Sheet Preparation
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>MSDS/SDS:</span> Material Safety Data Sheet - 16-section safety document for chemical products under GHS standards</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Who Needs It:</span> Manufacturers, importers, exporters, traders of chemicals, hazardous materials, pharma, cosmetics, paints, lubricants, agrochemicals</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Compliance:</span> GHS (Globally Harmonized System), OSHA, REACH (EU), CMSR India, WHMIS (Canada), BIS standards</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Validity:</span> 1-3 years; must be updated when new hazard information is available</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Visit our Pune office or get started online</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20MSDS%20certificate%20services%20in%20Pune.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'MSDS Certificate in Pune',
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We export automotive adhesives to 8 countries. Patron prepared GHS-compliant SDS for each product with country-specific variants for US, EU, and Gulf markets. Our shipments from JNCH Nhava Sheva now clear customs without any MSDS-related holds. The DG classification for our flammable products was spot-on.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Shah</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Auto Chemicals, Chakan</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our API exports were delayed twice due to incomplete MSDS documentation. Patron prepared comprehensive SDS with full toxicological data, OELs, and CMR classification. The FDA and EMA buyers accepted the documentation immediately. We now get MSDS prepared 4 weeks before any new product export.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PA</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Dr. Priya Agarwal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">QA Head, Pharma Mfg, Kurkumbh</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We manufacture 45 products across industrial paints, primers, and coatings. Patron handled the entire bulk MSDS package - GHS classification for every formulation, separate SDS for each product variant, and VOC data for EU Directive compliance. The version control system ensures we always have current documentation.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Kapoor</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">MD, Paints Manufacturer, Pimpri-Chinchwad</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our essential oil exports to EU required REACH-compliant SDS with allergen declarations per IFRA guidelines. Patron prepared SDS covering flash point classification, skin sensitization data, and EU CLP requirements. The IFRA allergen section alone would have taken us months to prepare in-house. Professional work.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sanjay Mehta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, Essential Oils, Pune-Shirwal</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>GHS-compliant MSDS/SDS preparation with hazard classification, DG/HAZMAT, and country-specific adaptation for Pune manufacturers and exporters.</p>
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is MSDS</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">16 Sections</a><a href="#challenges-section" class="toc-btn">By Industry</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">MSDS vs SDS vs COA</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">MSDS Certificate Services in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - MSDS Certificate in Pune Services at a Glance</strong></p>
                    <p>An <strong>MSDS (Material Safety Data Sheet)</strong> - now standardized as <strong>SDS</strong> under <strong>GHS</strong> - is a comprehensive 16-section safety document for chemical products. Required for manufacturers, importers, exporters of chemicals, pharma, paints, agrochemicals, essential oils. <strong>CMSR India</strong> mandates SDS for Schedule II substances. Mandatory for <strong>export customs clearance</strong> globally. Valid <strong>1-3 years</strong>.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Full Form</td><td>Material Safety Data Sheet (MSDS) / Safety Data Sheet (SDS)</td></tr><tr><td>Standard Format</td><td>16 sections under GHS (Globally Harmonized System)</td></tr><tr><td>Required For</td><td>Chemicals, hazardous materials, pharma, cosmetics, paints, lubricants, agrochemicals</td></tr><tr><td>Indian Regulation</td><td>CMSR (Chemicals Management and Safety Rules) - Schedule IX format</td></tr><tr><td>International</td><td>GHS, OSHA (US), REACH (EU), WHMIS (Canada), ADR (transport)</td></tr><tr><td>Validity</td><td>1-3 years; update when new hazard data available</td></tr><tr><td>Key Use</td><td>Workplace safety, customs clearance, transport, regulatory compliance</td></tr></tbody></table></div></p>
                </div>
                <p>Pune is a major industrial hub generating significant MSDS demand. <strong>Auto component manufacturers in Chakan and Pimpri-Chinchwad</strong> export paints, lubricants, adhesives. <strong>Pharma/API manufacturers in Kurkumbh and Ranjangaon</strong> export hazardous intermediates. <strong>Agrochemical companies in MIDC Ranjangaon</strong> manufacture pesticides and fertilizers. <strong>Essential oil companies in Pune-Shirwal</strong> export globally. Learn more about <a href="/msds-certificate-services">MSDS Certificate Services across India</a>.</p>
                <p>Patron's Wagholi, Pune office provides end-to-end MSDS/SDS services - GHS classification, 16-section drafting, DG/HAZMAT, country-specific adaptation, and export documentation. Also see <a href="#">Import Export Code (IEC)</a> and <a href="/gst-registration/pune">GST Registration in Pune</a>.</p>
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
                <h2 class="section-title">What Is an MSDS/SDS Certificate</h2>
                <div class="content-text what-is-definition">
                    
                    <p>An <strong>MSDS (Material Safety Data Sheet)</strong>, now standardized as <strong>SDS (Safety Data Sheet)</strong> under <strong>GHS</strong>, is a comprehensive technical document communicating critical safety information about a chemical substance or product. It covers <strong>16 sections</strong>: identification, hazards, composition, first-aid, firefighting, accidental release, handling/storage, exposure controls, physical/chemical properties, stability, toxicology, ecology, disposal, transport, regulatory, and other information.</p><p>The MSDS/SDS requires expertise in <strong>GHS hazard classification, toxicology, pictogram assignment, UN transport classification (DG/HAZMAT), and country-specific regulations</strong>. In India, <strong>CMSR</strong> mandates SDS for Schedule II substances in Schedule IX format. For Pune manufacturers and exporters, it enables workplace safety, regulatory compliance (GHS, CMSR, OSHA, REACH, WHMIS), and customs clearance at JNCH Nhava Sheva.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for MSDS Certificate in Pune:</strong></p>
                    <p><strong>GHS:</strong> Globally Harmonized System for classification and labelling of chemicals. 16-section SDS format. 72+ countries adopted. India adopted through CMSR.</p><p><strong>CMSR India:</strong> Chemicals Management and Safety Rules. Schedule II substances require SDS in Schedule IX format. Downstream user communication mandatory.</p><p><strong>DG/HAZMAT:</strong> Dangerous Goods transport classification: UN number, shipping name, packing group, hazard class. IATA (air), IMDG (sea), ADR (road).</p><p><strong>GHS Pictograms:</strong> Diamond-shaped red-bordered symbols: flame, skull, exclamation mark, corrosion, health hazard, environment. Assigned based on hazard classification.</p><p><strong>Validity:</strong> 1-3 years. Mandatory update on formulation change, new hazard data, or regulatory change. Version control required.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">MSDS Certificate in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>GHS 16-Section</span>
                        <strong>MSDS/SDS</strong>
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
            <h2 class="section-title">Who Needs MSDS Certificate in Pune</h2>
            <div class="content-text">
                
                <p><strong>Auto Component Manufacturers (Chakan, Pimpri-Chinchwad, Talegaon):</strong> Pune's largest automotive cluster. Paints, lubricants, adhesives, coolants, cleaning chemicals, surface treatment chemicals. GHS-compliant SDS for export to US (OSHA), EU (REACH/CLP), Japan, Middle East. OEMs mandate MSDS from tier-1/tier-2 suppliers.</p><p><strong>Pharmaceutical &amp; API Manufacturers (Kurkumbh, Ranjangaon):</strong> APIs and drug intermediates classified as hazardous chemicals. Export to US FDA, EMA, WHO-GMP markets requires comprehensive MSDS. Toxicological data, exposure limits, transport classification.</p><p><strong>Agrochemical Companies (MIDC Ranjangaon):</strong> Pesticides, insecticides, herbicides, fungicides, fertilizers. Strictest MSDS requirements globally. LD50/LC50, environmental fate, EPA/CLP/APVMA classification per destination.</p><p><strong>Paints &amp; Coatings (Pimpri-Chinchwad, Bhosari):</strong> Industrial paints, automotive coatings, printing inks. VOCs, heavy metals, solvents. Separate SDS per product variant.</p><p><strong>Essential Oils &amp; Fragrances (Pune-Shirwal):</strong> Peppermint, lemongrass, eucalyptus, sandalwood. Allergen information, flash point, IFRA compliance. EU REACH guidelines.</p><p><strong>Chemical Importers (All Pune):</strong> MSDS from foreign supplier required for CMSR compliance. Customs at JNCH Nhava Sheva requires MSDS for hazardous goods clearance.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">10 MSDS Certificate Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>MSDS/SDS Drafting (16-Section GHS)</td><td>Complete Safety Data Sheet: all 16 sections covering identification through regulatory information. Multi-language SDS for different export markets.</td></tr><tr><td>GHS Hazard Classification</td><td>Physical hazards (flammable, explosive, oxidizing), health hazards (toxicity, carcinogenicity, mutagenicity), environmental hazards (aquatic toxicity). Pictograms, signal words, H/P statements.</td></tr><tr><td>DG/HAZMAT Classification</td><td>UN number, proper shipping name, packing group, transport hazard class. IATA (air), IMDG (sea), ADR (road EU), Indian Motor Vehicles Act compliance.</td></tr><tr><td>GHS Label Design</td><td>Product identifier, supplier info, GHS pictograms (diamond-shaped), signal word (Danger/Warning), hazard statements, precautionary statements. Multi-market variants.</td></tr><tr><td>Country-Specific SDS Adaptation</td><td>OSHA HCS (US), REACH/CLP (EU), WHMIS 2015 (Canada), Safe Work Australia, Japan ISHL, GCC (Gulf). Language, regulatory references, exposure limits matched.</td></tr><tr><td>CMSR India Compliance</td><td>Schedule IX format SDS. Schedule II substance notification. Downstream user communication. For both manufacturers and importers of chemicals in Pune.</td></tr><tr><td>Export Documentation Support</td><td>MSDS + COA + Packing List + Invoice + IEC. Coordination with customs brokers at JNCH Nhava Sheva for smooth chemical export clearance.</td></tr><tr><td>MSDS Review and Update</td><td>Existing MSDS accuracy and regulatory compliance review. Update on formulation change or new hazard data. Version control and revision tracking.</td></tr><tr><td>Product Assessment and Data Collection</td><td>Chemical composition, CAS numbers, concentrations, physical/chemical properties, toxicological data (LD50, LC50, NOAEL), environmental data. Working with R&amp;D teams.</td></tr><tr><td>MSDS Training for Employees</td><td>On-site training: reading/interpreting MSDS, emergency procedures, PPE requirements, spill response, regulatory obligations. For factory and warehouse staff.</td></tr>

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
            <h2 class="section-title">6-Step MSDS Certificate Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">MSDS prepared by Patron's compliance team. Export clearance via JNCH Nhava Sheva. MPCB (environmental). DISH Maharashtra (workplace safety). DGFT (IEC/export). Patron coordinates from Wagholi office.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Product Assessment and Information Collection</h3><p class="step-description">Gather chemical composition (ingredients, CAS numbers, concentrations), physical/chemical properties (flash point, pH, density), toxicological data (LD50, sensitization, chronic effects), ecological data (aquatic toxicity, biodegradability). For Chakan auto manufacturers: R&D team coordination. For Kurkumbh pharma: API synthesis route and impurity profile.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Composition documented</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tox data collected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="55" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 55l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">GHS Hazard Classification</h3><p class="step-description">Classify under GHS criteria: physical hazards (flammable, explosive, oxidizing), health hazards (acute toxicity categories 1-5, carcinogenicity, mutagenicity), environmental hazards (aquatic toxicity). Assign pictograms, signal word (Danger/Warning), H-codes, P-codes. Mixture classification using cut-off/concentration limits.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Hazards classified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pictograms assigned</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GHS Classification</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Physical + Health + Env</text><text x="60" y="62" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Hazards Classified</text></svg></div><span class="illustration-label">Classified</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Prepare 16-Section SDS Document</h3><p class="step-description">Draft complete GHS SDS: Sections 1-3 (identification, hazards, composition), Sections 4-8 (first-aid, firefighting, handling, PPE), Section 9 (physical properties), Sections 10-11 (stability, toxicology), Sections 12-13 (ecology, disposal), Section 14 (transport - UN number, IATA/IMDG), Sections 15-16 (regulatory, revision). English primary; translations as needed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>16 sections drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Transport data included</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">16-Section SDS</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">GHS Compliant Draft</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">SDS Complete</text></svg></div><span class="illustration-label">Drafted</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">DG/HAZMAT Transport Classification</h3><p class="step-description">For Dangerous Goods: UN number, proper shipping name, transport hazard class (1-9), packing group (I/II/III). IATA DGR (air), IMDG Code (sea - critical for JNCH Nhava Sheva exports), ADR (road EU), Indian Motor Vehicles Act. Dangerous Goods Declaration prepared. Common for auto, pharma, and agrochem products from Pune.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UN number assigned</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Packing group determined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DG/HAZMAT</text><rect x="25" y="30" width="70" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="43" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">UN No + Class + PG</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Transport Ready</text></svg></div><span class="illustration-label">Classified</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Country-Specific Adaptation and Review</h3><p class="step-description">OSHA PELs + ACGIH TLVs for US. REACH/CLP Annex II for EU. WHMIS 2015 for Canada. Country-specific regulatory status. For Pune manufacturers exporting to multiple markets (US + EU + Middle East + SE Asia), multiple SDS versions prepared. All regulatory references verified current.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Multi-market SDS ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Regulations verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Multi-Market</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">US + EU + Gulf + Asia</text><text x="60" y="58" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">OSHA | REACH | WHMIS | GCC</text></svg></div><span class="illustration-label">Adapted</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Finalize, Issue, and Maintain</h3><p class="step-description">Version number, revision date, prepared by, company authorization. Physical + PDF format. Part of export documentation (MSDS + COA + packing list + invoice + IEC). Version control maintained. Update on formulation change, new hazard data, or regulatory change. Validity 1-3 years. Patron provides revision reminders.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MSDS issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Version control active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Issued</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">v1.0 | Valid 1-3 Years</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">MSDS Complete</text></svg></div><span class="illustration-label">Issued</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The 16 Sections of GHS-Compliant SDS</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Section</th><th>Title</th><th>Key Information</th></tr></thead><tbody><tr><td>1</td><td>Identification</td><td>Product identifier, supplier details, recommended use, emergency contact</td></tr><tr><td>2</td><td>Hazard Identification</td><td>GHS classification, pictograms, signal word, H/P statements</td></tr><tr><td>3</td><td>Composition/Ingredients</td><td>Chemical identity, CAS numbers, concentration ranges</td></tr><tr><td>4</td><td>First-Aid Measures</td><td>Inhalation, ingestion, skin/eye contact, symptoms, notes to physician</td></tr><tr><td>5</td><td>Firefighting Measures</td><td>Extinguishing media, specific hazards, protective equipment</td></tr><tr><td>6</td><td>Accidental Release</td><td>Personal precautions, containment, cleanup methods</td></tr><tr><td>7</td><td>Handling and Storage</td><td>Safe handling, storage conditions, incompatibilities</td></tr><tr><td>8</td><td>Exposure Controls/PPE</td><td>OELs, engineering controls, respiratory/hand/eye/skin protection</td></tr><tr><td>9</td><td>Physical/Chemical Properties</td><td>Appearance, odour, pH, boiling point, flash point, density, solubility</td></tr><tr><td>10</td><td>Stability and Reactivity</td><td>Stability, hazardous reactions, conditions to avoid, decomposition</td></tr><tr><td>11</td><td>Toxicological Information</td><td>Routes of exposure, acute/chronic effects, LD50/LC50, carcinogenicity</td></tr><tr><td>12</td><td>Ecological Information</td><td>Aquatic toxicity, biodegradability, bioaccumulation, soil mobility</td></tr><tr><td>13</td><td>Disposal Considerations</td><td>Waste treatment, disposal methods, contaminated packaging</td></tr><tr><td>14</td><td>Transport Information</td><td>UN number, shipping name, hazard class, packing group, IATA/IMDG</td></tr><tr><td>15</td><td>Regulatory Information</td><td>Country-specific regulations, listed substances, restrictions</td></tr><tr><td>16</td><td>Other Information</td><td>Revision date, version number, abbreviations, references</td></tr></tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">MSDS Requirements by Pune Industry</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Automotive Chemicals (Chakan, Pimpri-Chinchwad)</td><td>Paints/coatings (VOC, flammability, isocyanates), lubricants (petroleum base), adhesives (epoxy, polyurethane), coolants (ethylene glycol), cleaning chemicals (solvents).</td><td>Flash point classification, VOC data for EU compliance, isocyanate exposure limits, DG classification for flammable liquids.</td></tr><tr><td>Pharmaceuticals &amp; APIs (Kurkumbh, Ranjangaon)</td><td>APIs (acute toxicity, reproductive, mutagenicity), drug intermediates (solvents, reactive chemicals), excipients.</td><td>Occupational Exposure Limits for potent compounds, CMR Category 1/2 classification, controlled substance regulations, cold chain transport.</td></tr><tr><td>Agrochemicals (MIDC Ranjangaon)</td><td>Pesticides (LD50 acute oral/dermal, aquatic toxicity), herbicides (selective toxicity), fertilizers (oxidizer classification for ammonium nitrate).</td><td>EPA toxicity category (US), CLP classification (EU), WHO hazard classification, environmental fate data.</td></tr><tr><td>Paints &amp; Coatings (Pimpri-Chinchwad, Bhosari)</td><td>Solvent-based (flammable, VOC, respiratory sensitizers), water-based (lower hazard), industrial (epoxy, zinc primers with heavy metals).</td><td>VOC regulations (EU Directive 2004/42/EC), GHS mixture classification, DG transport for flammable coatings.</td></tr><tr><td>Essential Oils (Pune-Shirwal)</td><td>Natural oils (terpene content, allergens, flash point), synthetic fragrances (sensitizers, irritants).</td><td>IFRA compliance (allergen declaration), EU CLP skin sensitization, flash point for transport, REACH registration for EU.</td></tr>

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
            <h2 class="section-title">MSDS Certificate Fees in Pune - 2026 Schedule</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>MSDS/SDS Drafting (Single Product)</td><td>Rs 4,500 - Rs 15,000 (16-section GHS; standard chemicals)</td></tr><tr><td>MSDS for Mixtures/Formulations</td><td>Rs 8,000 - Rs 25,000 (multi-ingredient GHS classification)</td></tr><tr><td>GHS Hazard Classification</td><td>Rs 3,000 - Rs 10,000 (classification + pictograms + H/P)</td></tr><tr><td>DG/HAZMAT Classification</td><td>Rs 3,000 - Rs 10,000 (UN number, hazard class, packing group)</td></tr><tr><td>GHS Label Design</td><td>Rs 2,000 - Rs 8,000 (per product; GHS-compliant label)</td></tr><tr><td>Country-Specific SDS Adaptation</td><td>Rs 3,000 - Rs 10,000 (per country variant: US/EU/Canada/Gulf)</td></tr><tr><td>MSDS Review and Update</td><td>Rs 2,000 - Rs 8,000 (existing SDS review + revision)</td></tr><tr><td>Bulk MSDS Package (10+ Products)</td><td>Rs 35,000 - Rs 1,50,000 (volume pricing for product portfolios)</td></tr><tr><td>Export Documentation Package</td><td>Rs 10,000 - Rs 30,000 (MSDS + COA + customs documentation)</td></tr><tr><td>MSDS Training (On-Site)</td><td>Rs 15,000 - Rs 30,000 (half-day/full-day for factory staff)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free MSDS Certificate in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20MSDS%20certificate%20in%20Pune.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">MSDS Certificate Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Product Information Collection</td><td>Day 1-3</td></tr><tr><td>GHS Hazard Classification</td><td>Day 3-5</td></tr><tr><td>16-Section SDS Drafting</td><td>Day 5-10</td></tr><tr><td>DG/HAZMAT Classification (if applicable)</td><td>Day 5-7</td></tr><tr><td>Internal Review and Quality Check</td><td>Day 10-12</td></tr><tr><td>Client Review and Feedback</td><td>Day 12-14</td></tr><tr><td><strong>Finalization and Issuance</strong></td><td><strong>Day 14-15</strong></td></tr><tr><td>Country-Specific Adaptation (if needed)</td><td>Day 15-20</td></tr><tr><td>GHS Label Design (if requested)</td><td>Day 15-18</td></tr><tr><td>Export Documentation Package</td><td>Day 18-21</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Standard turnaround: 15-21 working days.</strong> Express service available for urgent export shipments (7-10 days with additional fee). Fees depend on product complexity, number of ingredients, toxicological data availability, and number of destination country variants required.</p>

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
            <h2 class="section-title">Why Choose Patron for MSDS Certificate in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Industry Expertise</h3><p class="feature-text">Automotive chemicals (Chakan/Pimpri-Chinchwad), pharma/API (Kurkumbh/Ranjangaon), agrochemicals, paints/coatings, essential oils. Deep understanding of Pune's manufacturing MSDS requirements.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">Multi-Market SDS Capability</h3><p class="feature-text">US (OSHA HCS), EU (REACH/CLP), Canada (WHMIS), Gulf, Southeast Asia, Africa, Latin America. Country-specific SDS variants from a single engagement for Pune exporters.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">GHS Classification Accuracy</h3><p class="feature-text">Correct GHS classification is the foundation of a valid MSDS. Expert application of GHS criteria for pure substances and complex mixtures. Correct pictograms, signal words, and H/P statements.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Integrated Export Support</h3><p class="feature-text">MSDS + IEC + GST registration + export invoicing + customs documentation. Single-window solution for JNCH Nhava Sheva clearance. RTC Silver, Wagholi, Pune office.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Including auto component manufacturers, pharma/API companies, agrochemical firms, paint manufacturers, and essential oil exporters across Pune. Offices in Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">MSDS vs SDS vs COA Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>MSDS</th><th>SDS (GHS)</th><th>COA</th></tr></thead>
                    <tbody>
                        <tr><td>Full Form</td><td>Material Safety Data Sheet</td><td>Safety Data Sheet</td><td>Certificate of Analysis</td></tr><tr><td>Standard</td><td>OSHA HCS (pre-2012)</td><td>GHS (internationally harmonized)</td><td>Laboratory testing standards</td></tr><tr><td>Format</td><td>Varied (no fixed sections)</td><td>Standardized 16 sections</td><td>Lab report format</td></tr><tr><td>Content</td><td>Safety and hazard information</td><td>Same + standardized classification</td><td>Quality/purity test results</td></tr><tr><td>Purpose</td><td>Workplace safety + compliance</td><td>Global safety + trade compliance</td><td>Product quality verification</td></tr><tr><td>Who Issues</td><td>Manufacturer/supplier</td><td>Manufacturer/supplier (GHS-trained)</td><td>Testing laboratory</td></tr><tr><td>Status</td><td>Being replaced by SDS globally</td><td>Current international standard</td><td>Independent document</td></tr>

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
            <h2 class="section-title">Related Export and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="#">Import Export Code (IEC)</a> - Required for all exporters/importers</li><li><a href="/gst-registration/pune">GST Registration in Pune</a> - For manufacturing businesses</li><li><a href="/trademark-registration/pune">Trademark Registration in Pune</a> - Product branding protection</li><li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a></li><li><a href="/fdi-compliance/pune">FDI Compliance in Pune</a> - For foreign-invested manufacturers</li><li><a href="/accounting-services">Accounting Services</a> - Ongoing bookkeeping</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Regulatory Framework</h2>
            <div class="content-text">
                
                <p><strong>GHS:</strong> UN-developed system for standardized classification and labelling. 16-section SDS format. 72+ countries. India adopted through CMSR.</p><p><strong>CMSR India:</strong> Schedule II substances and hazardous chemicals require SDS in Schedule IX format. Downstream user communication mandatory. Articles with Schedule II substances above 1% w/w also require SDS.</p><p><strong>MSIHC Rules 1989:</strong> Occupiers handling hazardous chemicals must maintain safety data sheets. Every container must be clearly labelled.</p><p><strong>OSHA HCS (US):</strong> 16-section GHS format mandatory since June 2015. PELs must be included.</p><p><strong>REACH/CLP (EU):</strong> SDS per Annex II of REACH. CLP Regulation for classification. Extended SDS with exposure scenarios.</p><p><strong>Authorities:</strong> <a href="https://dgft.gov.in" target="_blank" rel="noopener">DGFT</a> (IEC/export) | JNCH Nhava Sheva (customs) | MPCB (environment) | DISH Maharashtra (workplace safety) | BIS (Indian Standards)</p>

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
                    <h2 class="faq-expanded__title">FAQs - MSDS Certificate Services in Pune</h2>
                    <p class="faq-expanded__lead">Answers to common questions about MSDS/SDS certificates. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'MSDS Certificate in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is an MSDS certificate?</h3>
                        <div class="faq-expanded__a"><p>MSDS (Material Safety Data Sheet), now called SDS (Safety Data Sheet), is a comprehensive safety document covering a chemical product's composition, hazards, safe handling, storage, first-aid, firefighting, disposal, and transport classification. Follows GHS 16-section format. Required for manufacturers, importers, and exporters of chemicals and hazardous materials. Primary document for workplace safety and customs clearance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who needs MSDS certificate in Pune?</h3>
                        <div class="faq-expanded__a"><p>Manufacturers of chemicals, paints, coatings, lubricants, adhesives, pharmaceuticals, agrochemicals, essential oils, and any product with hazardous substances. Exporters (mandatory for customs clearance globally). Importers (CMSR India compliance). In Pune: auto component manufacturers (Chakan/Pimpri-Chinchwad), pharma/API (Kurkumbh/Ranjangaon), agrochemical firms, paint manufacturers, essential oil exporters.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What are the 16 sections of an SDS?</h3>
                        <div class="faq-expanded__a"><p>GHS standardized: (1) Identification, (2) Hazard Identification, (3) Composition, (4) First-Aid, (5) Firefighting, (6) Accidental Release, (7) Handling/Storage, (8) Exposure Controls/PPE, (9) Physical/Chemical Properties, (10) Stability, (11) Toxicology, (12) Ecology, (13) Disposal, (14) Transport, (15) Regulatory, (16) Other. Sections 1-8 for immediate safety; 9-11 technical; 12-15 environmental/transport/regulatory.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is MSDS mandatory in India?</h3>
                        <div class="faq-expanded__a"><p>Yes, for specific categories. CMSR requires SDS for Schedule II substances in Schedule IX format. MSIHC Rules 1989 require safety data sheets for hazardous chemical facilities. For exports, MSDS mandatory for customs clearance in virtually all countries. For imports, customs may require MSDS for chemical shipment clearance. Practically all companies handling chemicals need MSDS.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between MSDS and SDS?</h3>
                        <div class="faq-expanded__a"><p>MSDS is the older format with no standardized sections - varied by country and manufacturer. SDS is the current international standard under GHS with standardized 16-section format uniform across 72+ countries including India, US, EU, Canada, Japan. Terms used interchangeably but SDS is technically correct under current global standards.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long is MSDS valid?</h3>
                        <div class="faq-expanded__a"><p>Typically 1-3 years depending on product type and destination country. Must be updated immediately when: new hazard information available, product formulation changes, regulatory requirements change, or new toxicological/ecological data published. Revision date and version number in Section 16. Patron provides revision reminders for all Pune clients.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is GHS classification?</h3>
                        <div class="faq-expanded__a"><p>GHS (Globally Harmonized System) categorizes chemical hazards into physical (flammability, explosivity, oxidizing), health (acute toxicity, carcinogenicity, mutagenicity, reproductive toxicity), and environmental (aquatic toxicity). Each class has categories. Classification determines pictograms, signal word, and H/P statements on SDS and label.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How to get MSDS certificate in Pune?</h3>
                        <div class="faq-expanded__a"><p>Provide complete product information (composition, CAS numbers, concentrations, properties, toxicological data). Patron performs GHS classification, prepares 16-section SDS, assigns DG/HAZMAT classification if applicable. Standard turnaround 15-21 working days. Express 7-10 days. Patron handles from Wagholi office for all Pune industries.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is MSDS?</strong> Material Safety Data Sheet (now SDS under GHS) - 16-section safety document for chemical products covering hazards, handling, storage, first-aid, transport, disposal. Required for manufacturers, importers, exporters. Valid 1-3 years.</p><p><strong>Pune mein MSDS kaise banwayein?</strong> Product ki chemical composition, CAS numbers, aur toxicological data dein. GHS classification hogi, 16-section SDS draft hoga, DG classification agar zaroorat ho. 15-21 din mein ready. Patron Pune office se handle karta hai.</p><p><strong>Is MSDS mandatory for export?</strong> Yes - virtually all countries require MSDS/SDS for customs clearance of chemical products. Without MSDS, shipments may be held or rejected at destination port.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">No MSDS = Shipment Held at Customs</h2>
            <div class="content-text">
                
                <p>Export shipments cannot clear customs without MSDS. Missing, outdated, or non-compliant MSDS means shipment held at destination port - impacting delivery timelines, buyer relationships, and cash flow. For Pune auto manufacturers with JIT contracts: delayed shipment triggers penalty clauses. For pharma exporters: regulatory rejection leads to product quarantine. New product launches need MSDS 3-4 weeks before planned export. Formulation changes invalidate existing SDS immediately.</p><p><strong>Start MSDS preparation today. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20MSDS%20certificate%20in%20Pune." target="_blank" rel="noopener">WhatsApp us</a>. 15-21 days standard; 7-10 days express.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Your Chemical Products, Safety-Documented for Global Markets</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">MSDS certificate services in Pune serve the city's manufacturing ecosystem - automotive chemicals in Chakan and Pimpri-Chinchwad, pharma intermediates in Kurkumbh and Ranjangaon, agrochemicals, paints and coatings, and essential oils from the Pune-Shirwal belt. GHS-compliant 16-section SDS enables workplace safety, regulatory compliance with CMSR, OSHA, REACH, WHMIS, and smooth customs clearance for exports through JNCH Nhava Sheva.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting, Wagholi, Pune. End-to-end MSDS/SDS: GHS classification, 16-section drafting, DG/HAZMAT, country-specific adaptation, export documentation. 10,000+ businesses, 15+ years, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20MSDS%20certificate%20in%20Pune.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20MSDS%20Certificate%20Pune&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20MSDS%20certificate%20services%20in%20Pune.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">MSDS Certificate Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers MSDS/SDS certificate services in 8 major cities.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/msds-certificate-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/msds-certificate-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/msds-certificate-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">Export and compliance support</div><div class="pa-cross-grid"><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/fdi-compliance/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-returns/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR Filing</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually (Freshness Tier 2) to reflect GHS updates, CMSR amendments, regulatory changes in destination countries, and new classification criteria. Next review: September 2026.</p>
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
    // CONFIGURATION — Update these values
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
            console.log('[Testimonials] No Google API key set — using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API — using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews — using fallback.');
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
        // Static cards already rendered — init Slick immediately
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
