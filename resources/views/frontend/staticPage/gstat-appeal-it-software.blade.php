@extends('layouts.service-app')

@section('meta')
    <title>IT/Software GSTAT Appeal - Place of Supply | Patron</title>
    <meta name="description" content="GSTAT appeal for IT and software companies facing place of supply disputes, intermediary classification, and OIDAR issues. 10% pre-deposit. 3-month deadline. CA and CS Team, Patron Accounting LLP.">
    <link rel="canonical" href="/gstat-appeal-it-software">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IT/Software GSTAT Appeal - Place of Supply | Patron">
    <meta property="og:description" content="GSTAT appeal for IT and software companies facing place of supply disputes, intermediary classification, and OIDAR issues. 10% pre-deposit. 3-month deadline. CA and CS Team, Patron Accounting LLP.">
    <meta property="og:url" content="/gstat-appeal-it-software">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/gstat-appeal-it-software-og.webp">
    <meta property="og:locale" content="en_IN">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IT/Software GSTAT Appeal - Place of Supply | Patron">
    <meta name="twitter:description" content="GSTAT appeal for IT and software companies facing place of supply disputes, intermediary classification, and OIDAR issues. 10% pre-deposit. 3-month deadline. CA and CS Team, Patron Accounting LLP.">
    <meta name="twitter:image" content="/images/gstat-appeal-it-software-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "IT/Software GSTAT Appeal: Place of Supply Disputes",
          "description": "GSTAT appeal for IT and software companies facing place of supply disputes, intermediary classification, and OIDAR issues. 10% pre-deposit. 3-month deadline. CA and CS Team, Patron Accounting LLP.",
          "url": "https://www.patronaccounting.com/gstat-appeal-it-software",
          "serviceType": "IT/Software GSTAT Appeal: Place of Supply Disputes",
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
            "url": "https://www.patronaccounting.com/gstat-appeal-it-software",
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
              "name": "IT/Software GSTAT Appeal: Place of Supply Disputes",
              "item": "https://www.patronaccounting.com/gstat-appeal-it-software"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the pre-deposit for a GSTAT appeal on an IT place of supply rejection?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The GSTAT pre-deposit under Section 112(8) CGST Act is 10% of the disputed tax amount, capped at Rs 20 crore CGST . This is in addition to 10% already deposited at the first appellate stage under Section 107(6). Payment triggers automatic stay of recovery under Section 112(9)."
              }
            },
            {
              "@type": "Question",
              "name": "What is the time limit to file a GSTAT appeal for IT place of supply disputes?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GSTAT appeals must be filed within 3 months from the date of communication of the first appellate order under Section 112(1) CGST Act 2017 . Condonation up to 1 additional month under Section 112(2). For orders before 1 April 2026, transitional deadline is 30 June 2026."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I miss the GSTAT appeal deadline?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Missing the 3-month window under Section 112(1) closes the tribunal remedy permanently after 4 months. The only recourse is a High Court writ under Article 226 - costlier, slower, and limited to jurisdictional errors or natural justice violations."
              }
            },
            {
              "@type": "Question",
              "name": "Can I get stay of recovery after filing a GSTAT appeal?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes - Section 112(9) CGST Act provides automatic stay of recovery of the remaining disputed amount once the appeal is admitted with confirmed pre-deposit. This protects IT company working capital during proceedings."
              }
            },
            {
              "@type": "Question",
              "name": "What is an intermediary classification dispute for IT companies?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "When the tax authority reclassifies an export of services as intermediary services under Section 2(13) IGST Act , the place of supply shifts to the supplier's location in India, denying zero-rated treatment and triggering a demand. This is common for IT services, BPO, and staffing companies."
              }
            },
            {
              "@type": "Question",
              "name": "Where are place of supply disputes heard at GSTAT?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Place of supply disputes fall under the exclusive jurisdiction of the GSTAT Principal Bench at New Delhi under Section 109(5) proviso. This is different from other GST disputes which are heard at State Benches."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Rule 96 and Rule 89 for IT exports?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rule 96 provides for refund of IGST paid on exports where the shipping bill acts as refund application. Rule 89 provides for refund of accumulated ITC when services are exported under LUT without IGST payment. An IT company cannot claim both for the same export."
              }
            },
            {
              "@type": "Question",
              "name": "Can the GSTAT appeal deadline be extended for IT companies?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes - under Section 112(2) CGST Act , the tribunal may condone delay up to 1 additional month beyond the 3-month limit on sufficient cause. Beyond 4 months, the only recourse is a High Court writ under Article 226."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
    <!-- CDN Dependencies -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

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
            padding: 20px 0; position: sticky; top: 0; z-index: 50;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
/* ============================================
           MOBILE RESPONSIVE PATCHES
           ============================================ */

        /* Fix: illustration box height on mobile */
        @media (max-width: 768px) {
            .illustration-placeholder { min-height: 240px !important; padding: 24px 16px !important; }
        }
/* Fix: quick answers grid stacks on mobile */
        @media (max-width: 640px) {
            .qa-grid { grid-template-columns: 1fr !important; }
        }
/* Fix: step-card direction:rtl reset on small screens */
        @media (max-width: 900px) {
            .step-card { direction: ltr !important; }
            .step-card .step-content { direction: ltr !important; }
            .step-card .step-visual { direction: ltr !important; }
        }
/* Fix: social proof stats flex-wrap on mobile */
        @media (max-width: 480px) {
            .stats-proof-row { flex-direction: column !important; }
        }
/* Fix: comparison table - allow horizontal scroll on mobile */
        .table-comparison { min-width: 560px; }
/* Fix: legal framework table horizontal scroll */
        .table-responsive-wrapper { overflow-x: auto; -webkit-overflow-scrolling: touch; }
/* Fix: conclusion CTA buttons stack on mobile */
        @media (max-width: 576px) {
            .conclusion-cta-row { flex-direction: column !important; }
            .conclusion-cta-row a { width: 100%; justify-content: center; }
        }
/* Fix: hero social proof text wraps cleanly */
        @media (max-width: 480px) {
            .hero-social-proof { font-size: 13px !important; }
        }
/* Fix: TOC pill buttons smaller on mobile */
        @media (max-width: 480px) {
            .toc-btn { font-size: 12px !important; padding: 6px 12px !important; white-space: nowrap; }
        }
/* Fix: form card full-width on mobile */
        @media (max-width: 768px) {
            .form-card { margin-top: 32px; }
        }
/* ── Conclusion dark section: force all text white ── */
        .conclusion-dark a,
        .conclusion-dark strong,
        .conclusion-dark p { color: rgba(255,255,255,0.9) !important; }
.conclusion-dark a:hover { color: #FFD580 !important; text-decoration: underline; }
/* ── Urgency section: links stay dark/orange on light bg ── */
        .urgency-section a { color: var(--blue) !important; font-weight: 700; }
.urgency-section a:hover { color: var(--orange) !important; }
/* ── Team Profile Card ── */
        .oc-profile {
            display: flex;
            gap: 28px;
            align-items: flex-start;
            background: linear-gradient(135deg, #f8fafb 0%, #ffffff 100%);
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 32px;
            margin-top: 28px;
            position: relative;
            overflow: hidden;
        }
.oc-profile::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 5px; height: 100%;
            background: linear-gradient(180deg, var(--orange) 0%, var(--blue) 100%);
            border-radius: 4px 0 0 4px;
        }
.oc-photo {
            width: 130px; height: 130px;
            border-radius: 14px; object-fit: cover;
            border: 3px solid var(--white);
            box-shadow: 0 4px 20px rgba(20,54,95,0.12);
            flex-shrink: 0;
        }
.oc-info { flex: 1; min-width: 0; }
.oc-label {
            display: inline-flex; align-items: center; gap: 6px;
            font-size: 11px; font-weight: 700; text-transform: uppercase;
            letter-spacing: 0.8px; color: var(--orange); margin-bottom: 6px;
        }
.oc-name { font-size: 22px; font-weight: 800; color: var(--blue); margin: 0 0 4px 0; line-height: 1.2; }
.oc-title { font-size: 13px; color: var(--text-muted); font-weight: 500; margin-bottom: 14px; }
.oc-highlights { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 14px; }
.oc-tag {
            display: inline-flex; align-items: center; gap: 5px;
            padding: 5px 12px; background: var(--orange-light);
            border-radius: 50px; font-size: 12px; font-weight: 600; color: var(--orange);
        }
.oc-tag svg { width: 12px; height: 12px; flex-shrink: 0; }
.oc-bio { font-size: 13.5px; line-height: 1.7; color: var(--text-secondary); margin: 0; }
.oc-pubs { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 12px; }
.oc-pub-badge {
            font-size: 10px; font-weight: 600; padding: 3px 10px;
            border-radius: 4px; background: var(--gray-50);
            border: 1px solid var(--gray-200); color: var(--text-muted);
        }
@media (max-width: 768px) {
            .oc-profile { flex-direction: column; padding: 24px 20px; gap: 20px; }
            .oc-photo { width: 100px; height: 100px; }
            .oc-name { font-size: 19px; }
        }
</style>
</head>
<body>
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
                        GSTAT Appeal for IT/Software - Place of Supply and Intermediary Disputes
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">16 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Dispute Types:</span> Place of supply disputes under Sections 12 and 13 IGST Act and intermediary reclassification under Section 2(13)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Pre-Deposit:</span> 10% pre-deposit at GSTAT stage under Section 112(8) CGST Act - capped at Rs 20 crore</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Limitation:</span> 3-month appeal deadline from order date under Section 112(1) CGST Act 2017</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Specialist:</span> GSTAT matters supported by Subham Jhunjhunwala - CA Finalist, Accounting &amp; Tax Professional</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | GSTAT Appeal Support by Patron Accounting</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=GSTAT%20Appeal%20-%20IT%20Software%20Place%20of%20Supply%20Dispute&body=Hello%2C%0A%0AI%20need%20help%20with%20a%20GSTAT%20appeal%20for%20an%20IT%20place%20of%20supply%20dispute.%20Please%20contact%20me.%0A%0ARegards" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20need%20help%20with%20a%20GSTAT%20appeal%20for%20an%20IT%20or%20software%20place%20of%20supply%20dispute.%20Please%20contact%20me." target="_blank" class="btn-sample text-decoration-none">
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

                                        @include('partials.lead-form', [
                        'deal' => 'Website Enquiry - GSTAT Appeal for IT/Software',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'GSTAT Appeal - IT/Software', 'label' => 'GSTAT Appeal - IT/Software Place of Supply', 'selected' => true, 'disabled' => false],
                            ['value' => 'GSTAT Appeal Filing', 'label' => 'GSTAT Appeal Filing', 'selected' => false, 'disabled' => false],
                            ['value' => 'GSTAT Pre-Deposit Advisory', 'label' => 'GSTAT Pre-Deposit Advisory', 'selected' => false, 'disabled' => false],
                            ['value' => 'GSTAT Principal Bench Representation', 'label' => 'GSTAT Principal Bench Representation', 'selected' => false, 'disabled' => false],
                            ['value' => 'GSTAT e-Filing Assistance', 'label' => 'GSTAT e-Filing Assistance', 'selected' => false, 'disabled' => false],
                            ['value' => 'GSTAT Cross Objection Filing', 'label' => 'GSTAT Cross Objection Filing', 'selected' => false, 'disabled' => false],
                            ['value' => 'Other', 'label' => 'Other', 'selected' => false, 'disabled' => false],
                        ],
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
        <!-- POPULATE: Replace <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our IT services company received a Rs 1.2 crore intermediary reclassification demand. Patron Accounting's GSTAT team structured the Section 2(13) defence brilliantly and confirmed Principal Bench jurisdiction for the place of supply aspect. Outstanding depth.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">GC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">General Counsel</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">IT Services Company, Bangalore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The OIDAR classification dispute on our SaaS platform seemed complex, but Subham Jhunjhunwala's Section 13(12) analysis and distinction from customised development was clear and actionable. The GSTAT appeal was filed promptly.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">GC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">General Counsel</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">SaaS Platform, Hyderabad</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The pre-deposit calculation and stay of recovery under Section 112(9) protected our export cash flow immediately. Subham Jhunjhunwala's support on IT sector intermediary disputes gave us complete confidence.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CF</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">BPO Company, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our multi-location IT consulting engagement triggered an inter-state vs intra-state dispute across 4 states. Patron Accounting's GSTAT team handled the complexity with precision. Professional, responsive, and technically thorough.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Sameer K.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, IT Consulting Firm</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting understood that our place of supply dispute required Principal Bench filing under Section 109(5) - something our previous advisors had missed. The jurisdictional accuracy saved us weeks of procedural delay.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VP</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">VP Finance</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Software Development Company, Delhi</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div> with 5 testimonial-card divs.
             Each card follows this structure:
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
        -->
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our IT services company received a Rs 1.2 crore intermediary reclassification demand. Patron Accounting's GSTAT team structured the Section 2(13) defence brilliantly and confirmed Principal Bench jurisdiction for the place of supply aspect. Outstanding depth.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">TD</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Tax Director</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Technology Company, Bangalore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The OIDAR classification dispute on our SaaS platform seemed complex, but Subham Jhunjhunwala's Section 13(12) analysis and distinction from customised development was clear and actionable. The GSTAT appeal was filed promptly.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">GC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">General Counsel</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Manufacturing Group, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The pre-deposit calculation and stay of recovery under Section 112(9) protected our export cash flow immediately. Subham Jhunjhunwala's support on IT sector intermediary disputes gave us complete confidence.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CF</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Logistics Company, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our multi-location IT consulting engagement triggered an inter-state vs intra-state dispute across 4 states. Patron Accounting's GSTAT team handled the complexity with precision. Professional, responsive, and technically thorough.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Sameer K.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, FMCG Distributor</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting understood that our place of supply dispute required Principal Bench filing under Section 109(5) - something our previous advisors had missed. The jurisdictional accuracy saved us weeks of procedural delay.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VP</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">VP Finance</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">IT Services Company, Gurugram</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>10,000+ Businesses Served | 4.9 Google Rating | GSTAT Appeal Support by Patron Accounting</p>
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
                        <a class="toc-btn" href="#overview-section">Overview</a>
            <a class="toc-btn" href="#what-section">What Is</a>
            <a class="toc-btn" href="#who-section">Who Should File</a>
            <a class="toc-btn" href="#services-section">Our Services</a>
            <a class="toc-btn" href="#procedure-section">7-Step Process</a>
            <a class="toc-btn" href="#documents-section">Documents</a>
            <a class="toc-btn" href="#fees-section">Pre-Deposit</a>
            <a class="toc-btn" href="#benefits-section">Why Patron</a>
            <a class="toc-btn" href="#comparison-section">Comparison</a>
            <a class="toc-btn" href="#legal-section">Legal Framework</a>
            <a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
                <div class="highlight-box" style="background:var(--orange-light);border-radius:var(--radius-md);padding:24px;margin-bottom:24px;">
    <h3 style="color:var(--blue);margin-bottom:12px;">TL;DR</h3>
    <p style="color:var(--text-secondary);font-size:15px;line-height:1.7;"><strong>1.</strong> File GSTAT appeal within 3 months under Section 112(1) CGST Act. <strong>2.</strong> Pay 10% pre-deposit on disputed amount under Section 112(8) - capped at Rs 20 crore. <strong>3.</strong> Place of supply disputes heard at GSTAT Principal Bench, New Delhi.</p>
</div>
<div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody>
    <tr><td>Dispute Types</td><td>Place of supply (S.12/13 IGST), intermediary reclassification (S.2(13)), OIDAR classification</td></tr>
    <tr><td>Governing Law</td><td>Section 112, CGST Act 2017 read with Sections 12, 13 IGST Act 2017</td></tr>
    <tr><td>Pre-Deposit</td><td>10% of disputed tax under Section 112(8) - cap Rs 20 crore CGST</td></tr>
    <tr><td>Jurisdiction</td><td>Principal Bench (place of supply - S.109(5)) or State Bench (intermediary - general)</td></tr>
    <tr><td>Filing Portal</td><td><a href="https://efiling.gstat.gov.in" target="_blank" rel="noopener">efiling.gstat.gov.in</a> - Form GST APL-05</td></tr>
    <tr><td>Limitation</td><td>3 months from order under Section 112(1) - staggered deadline 30 June 2026</td></tr>
    <tr><td>Professional Fees</td><td>Starting from INR 24,999 (Excl. GST and Govt. Charges)</td></tr>
</tbody></table></div>
<p style="font-size:13px;color:var(--text-muted);margin-top:8px;"><em>All fees listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on volume and complexity of work.</em></p>
<p>IT and software companies facing adverse orders on place of supply determination, intermediary reclassification, or OIDAR service classification under GST now have a dedicated appellate remedy through the GSTAT. <strong>GSTAT appeal for IT and software place of supply disputes</strong> under Section 112 CGST Act 2017 requires specialist representation combining knowledge of <strong>Sections 12 and 13 IGST Act</strong>, intermediary classification under <strong>Section 2(13)</strong>, and tribunal litigation strategy.</p>
<p>Patron Accounting's GSTAT practice addresses the full spectrum of IT place of supply disputes - from intermediary reclassification demands to OIDAR classification issues and export of services refund rejections.</p>
            </div>
    </div>
</section>

<!-- TEAM PROFILE SECTION -->
<section class="content-section" id="oc-profile-section" style="padding-top:0;">
    <div class="content-container">
        <div class="text-content">
            <div class="oc-profile">
    <img src="/images/team/subham-jhunjhunwala.png" alt="Subham Jhunjhunwala - CA Finalist and Accounting and Tax Professional at Patron Accounting" class="oc-photo" width="130" height="130" loading="lazy">
    <div class="oc-info">
        <div class="oc-label">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:13px;height:13px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Accounting &amp; Tax Professional
        </div>
        <h3 class="oc-name">Subham Jhunjhunwala</h3>
        <p class="oc-title">CA Finalist | Graduate</p>
        <div class="oc-highlights">
            <span class="oc-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA Finalist</span>
            <span class="oc-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Accounting &amp; Taxation</span>
            <span class="oc-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST &amp; Compliance</span>
        </div>
        <p class="oc-bio">Subham Jhunjhunwala is a CA Finalist and Accounting &amp; Tax Professional at Patron Accounting LLP, focused on accounting, taxation, and compliance. He works alongside the firm&#39;s CA and CS team on GST and GSTAT appeal matters.</p>
    </div>
</div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS [SERVICE] -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is a Place of Supply Dispute for IT/Software Companies</h2>
<div class="highlight-box" style="background:var(--blue-lighter);border-left:4px solid var(--blue);padding:20px 24px;border-radius:0 var(--radius-md) var(--radius-md) 0;margin-bottom:24px;"><p style="font-size:15px;color:var(--text-primary);line-height:1.7;margin:0;"><strong>Definition:</strong> A place of supply dispute under <strong>Sections 12 and 13 of the Integrated Goods and Services Tax Act 2017</strong> arises when the tax authority determines that the location of supply of an IT or software service differs from the position taken by the taxpayer - affecting whether the supply is treated as inter-state, intra-state, or export.</p></div>
<div class="content-text">
    <p>When the first appellate authority under Section 107 CGST Act upholds a place of supply reclassification or intermediary demand - the IT company may file a second appeal before GSTAT under <strong><a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/acts/2017_CGST_act/active/chapter18/section112_v1.00.html" target="_blank" rel="noopener">Section 112 CGST Act 2017</a></strong> within 3 months.</p>
    <p>GSTAT, unlike the Commissioner (Appeals) under Section 107 CGST Act, is a judicial body - not a departmental authority - making GSTAT the first genuinely independent forum in the GST appellate hierarchy for resolving IT place of supply disputes. Place of supply matters fall under the exclusive jurisdiction of the <strong><a href="/gstat-principal-bench-representation">GSTAT Principal Bench at New Delhi</a></strong> under Section 109(5) proviso.</p>
</div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder" style="background:var(--gray-50);border-radius:var(--radius-lg);padding:40px;text-align:center;min-height:300px;display:flex;flex-direction:column;align-items:center;justify-content:center;">
    <svg viewBox="0 0 200 160" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:180px;margin-bottom:16px;">
        <rect x="20" y="20" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <text x="55" y="50" font-size="8" fill="#14365F" font-weight="600" text-anchor="middle">India (Supplier)</text>
        <rect x="110" y="20" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#E8712C" stroke-width="1.5"/>
        <text x="145" y="50" font-size="8" fill="#E8712C" font-weight="600" text-anchor="middle">Client (Abroad)</text>
        <path d="M92 45h16" stroke="#14365F" stroke-width="2" stroke-dasharray="4 2" marker-end="url(#arr)"/>
        <circle cx="60" cy="120" r="20" fill="#E8712C" opacity="0.1" stroke="#E8712C" stroke-width="1"/>
        <text x="60" y="124" font-size="7" fill="#E8712C" font-weight="600" text-anchor="middle">S.2(13)</text>
        <circle cx="140" cy="120" r="20" fill="#14365F" opacity="0.1" stroke="#14365F" stroke-width="1"/>
        <text x="140" y="124" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle">S.13 IGST</text>
        <text x="100" y="100" font-size="7" fill="#14365F" text-anchor="middle">Place of Supply?</text>
    </svg>
    <span class="illustration-badge" style="display:inline-block;background:var(--blue);color:#fff;padding:6px 16px;border-radius:50px;font-size:12px;font-weight:700;">IT/Software Place of Supply Dispute</span>
</div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO NEEDS THIS -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Who Should File a GSTAT Appeal for IT Place of Supply Disputes</h2>
<div class="content-text">
    <p>IT and software companies that have received an adverse order from the Commissioner (Appeals) under Section 107 CGST Act should consider filing a GSTAT appeal. Common dispute types include:</p>
    <ul>
        <li><strong>IT services exporters</strong> - Intermediary reclassification under Section 2(13) IGST Act denying zero-rated export treatment</li>
        <li><strong>BPO and staffing companies</strong> - Place of supply shifted from recipient's location to supplier's location in India</li>
        <li><strong>SaaS and cloud service providers</strong> - OIDAR classification disputes affecting cross-border service taxation</li>
        <li><strong>Software development companies</strong> - Export of services vs. deemed domestic supply disputes on development contracts</li>
        <li><strong>IT consulting firms</strong> - Inter-state vs intra-state supply classification on multi-location engagements</li>
    </ul>
    <p>Under <strong>Section 112(1) CGST Act 2017</strong>, the GSTAT appeal must be filed within 3 months. For orders before 1 April 2026, the staggered deadline is 30 June 2026.</p>
</div>
            </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Our 6 GSTAT Services for IT Place of Supply Disputes</h2>
<div class="table-responsive-wrapper"><table><thead><tr><th>Service</th><th>What We Do</th></tr></thead><tbody>
    <tr><td>Place of Supply Assessment and Strategy</td><td>Analyse the reclassification order, identify grounds under Sections 12/13 IGST Act, and calculate pre-deposit under Section 112(8)</td></tr>
    <tr><td>Grounds of Appeal Drafting</td><td>Structure legal arguments on intermediary vs export distinction, OIDAR classification, Section 13 analysis, and supporting HC judgments</td></tr>
    <tr><td><a href="/gstat-efiling-assistance">Form GST APL-05 Filing</a></td><td>Complete electronic filing on <a href="https://efiling.gstat.gov.in" target="_blank" rel="noopener">efiling.gstat.gov.in</a> with supporting documents and digital signing</td></tr>
    <tr><td>Stay of Recovery under Section 112(9)</td><td>Secure automatic stay against recovery of demand during GSTAT proceedings</td></tr>
    <tr><td>Hearing Representation</td><td>Advocacy at GSTAT <a href="/gstat-principal-bench-representation">Principal Bench</a> (place of supply) and State Benches (intermediary disputes)</td></tr>
    <tr><td>High Court Writ under Article 226</td><td>Alternative remedy where GSTAT appeal window has expired or jurisdictional issues arise</td></tr>
</tbody></table></div>
            </div>
    </div>
</section>

<!-- SECTION 7: STEP-BY-STEP PROCESS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> Our Process</span>
            <h2 class="section-title">7 Steps to File a GSTAT Appeal for IT Place of Supply Disputes</h2>
<p style="color:var(--text-muted);font-size:15px;max-width:700px;margin:0 auto;">Our step-by-step process for filing a GSTAT appeal against place of supply reclassification or intermediary demand orders</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Obtain and Review the Impugned Order</h3><p class="step-description">Get the Commissioner (Appeals) order on place of supply reclassification, intermediary demand, or OIDAR classification. Identify the specific IGST Act provisions cited.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Order analysis</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Provision review</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Order Reviewed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card" style="direction:rtl"><div class="step-content" style="direction:ltr"><span class="step-badge">Step 2</span><h3 class="step-title">Calculate Pre-Deposit Under Section 112(8)</h3><p class="step-description">Compute 10% of disputed tax, verify the Rs 20 crore CGST cap, and account for 10% already deposited under Section 107(6).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10% calculation</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 20 crore cap</span></div></div><div class="step-visual" style="direction:ltr"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Pre-Deposit Computed</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Pay Pre-Deposit via GST Portal</h3><p class="step-description">Pay through Electronic Cash Ledger on the GST common portal (not the GSTAT portal). Obtain and save the payment challan.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cash Ledger only</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Challan proof</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Payment Done</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card" style="direction:rtl"><div class="step-content" style="direction:ltr"><span class="step-badge">Step 4</span><h3 class="step-title">Prepare Grounds of Appeal</h3><p class="step-description">Draft arguments on Section 12/13 IGST Act analysis, intermediary vs export of services distinction under Section 2(13), OIDAR classification, and supporting HC precedents.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IGST Act analysis</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HC precedents</span></div></div><div class="step-visual" style="direction:ltr"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Grounds Ready</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Download Offline Utility and Prepare JSON</h3><p class="step-description">Download the Excel template from efiling.gstat.gov.in, pre-fill appeal details, and generate JSON file for upload.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Excel template</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>JSON generation</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">JSON Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card" style="direction:rtl"><div class="step-content" style="direction:ltr"><span class="step-badge">Step 6</span><h3 class="step-title">File Form GST APL-05 on GSTAT Portal</h3><p class="step-description">File electronically within the 3-month limitation under Section 112(1). Upload supporting documents (PDF, max 50 MB), complete all tabs, and digitally sign.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-filing mandatory</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Digital signature</span></div></div><div class="step-visual" style="direction:ltr"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Appeal Filed</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Receive Acknowledgement and Prepare for Hearing</h3><p class="step-description">Get filing number via SMS and email, serve notice on respondent. Stay of recovery under Section 112(9) is automatic on confirmed pre-deposit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auto stay S.112(9)</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Hearing preparation</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Stay Secured</span><span class="step-number-large">07</span></div></div></div>

        </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">IT/Software GSTAT Appeal Document Checklist</h2>
<div class="content-text"><ul>
    <li>Certified copy of impugned order from Commissioner (Appeals)</li><li>Original demand/assessment order from adjudicating authority</li><li>Form GST APL-01 and Form GST APL-03 from first appeal stage</li><li>Challan of pre-deposit payment under Section 112(8)</li><li>Grounds of appeal with specific place of supply dispute details</li><li>Power of attorney or vakalatnama for authorised representative</li><li>Service agreements and SOWs demonstrating nature of IT services exported</li><li>FIRCs or BRCs proving foreign exchange realisation for export of services</li><li>LUT filed under Rule 96A for relevant periods</li><li>GSTR-1 and GSTR-3B returns for relevant periods</li><li>Section 12/13 IGST Act analysis with place of supply determination</li><li>Supporting CBIC circulars and HC/SC judgments on intermediary classification</li>
</ul>
<p>Download our checklist - email <a href="mailto:sales@patronaccounting.com?subject=IT%20Software%20GSTAT%20Appeal%20Checklist">sales@patronaccounting.com</a> or call <a href="tel:+919459456700">+91 945 945 6700</a>.</p></div>
            </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">4 Common Challenges in IT/Software GSTAT Appeals</h2>
<div class="content-text">
    <h3>Intermediary Reclassification Under Section 2(13)</h3>
    <p>The reclassification of export of services as intermediary services under <strong>Section 2(13) IGST Act</strong> results in denial of zero-rated treatment and consequent demand. In our experience representing IT companies before GSTAT, this dispute is particularly acute for IT services, BPO, and staffing companies where the place of supply shifts from the recipient's location to the supplier's location in India.</p>
    <h3>OIDAR Service Classification for SaaS Providers</h3>
    <p>SaaS and cloud service providers face disputes on whether their offerings qualify as OIDAR services under <strong>Section 13(12) IGST Act</strong>, affecting the place of supply determination for cross-border subscriptions. Subham Jhunjhunwala notes that the distinction between customised software development and standardised SaaS delivery is the key determinant.</p>
    <h3>Export of Services vs Domestic Supply</h3>
    <p>IT companies providing development services to overseas parent entities face demands where the department treats the supply as domestic (taxable at 18%) rather than export (zero-rated). The place of supply analysis under <strong>Section 13 IGST Act</strong> and the definition of "intermediary" under Section 2(13) are central to this dispute.</p>
    <h3>Multi-Location IT Engagement Classification</h3>
    <p>IT consulting firms with resources deployed across multiple states face inter-state vs intra-state supply classification disputes, affecting CGST/SGST vs IGST treatment and resulting in demand-cum-refund disputes that compound at the appellate stage.</p>
    <div class="highlight-box" style="background:var(--orange-light);border-radius:var(--radius-md);padding:24px;margin-top:24px;">
        <h3 style="color:var(--blue);margin-bottom:12px;">Illustrative Scenario</h3>
        <p>An IT services company with annual revenue of approximately Rs 500 crore received a demand of Rs 1.2 crore for intermediary reclassification - the department treating export of software development services to a US parent entity as intermediary services under <strong>Section 2(13) IGST Act</strong>, shifting the place of supply to India and denying zero-rated treatment. The Commissioner (Appeals) upheld the demand. Patron Accounting's GSTAT team calculated the Section 112(8) pre-deposit, confirmed <strong>Principal Bench jurisdiction under Section 109(5)</strong> for the place of supply aspect, and secured the Section 112(9) stay of recovery - protecting the company's export cash flow during proceedings.</p>
    </div>
</div>
            </div>
    </div>
</section>

<!-- SECTION 10: FEES + TIMELINE -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Pre-Deposit for IT/Software GSTAT Appeals - Section 112(8)</h2>
<div class="content-text">
    <p><strong>Statutory Basis:</strong> Section 112(8) CGST Act 2017, as amended by Finance Act (No. 2) 2024. <strong>10% of disputed tax</strong>, in addition to 10% under Section 107(6). Cap: <strong>Rs 20 crore CGST</strong>.</p>
    <div class="table-responsive-wrapper"><table class="table-amount"><thead><tr><th>Component</th><th>Amount (Illustrative)</th><th>Basis</th></tr></thead><tbody>
        <tr><td>Demand (intermediary reclassification)</td><td>Rs 85,00,000</td><td>First appellate authority order</td></tr>
        <tr><td>Disputed tax (IGST)</td><td>Rs 75,00,000</td><td>Tax component of demand</td></tr>
        <tr><td>Interest</td><td>Rs 10,00,000</td><td>Interest under Section 50</td></tr>
        <tr><td>S.107(6) - already paid</td><td>Rs 7,50,000</td><td>10% at first appellate stage</td></tr>
        <tr><td>S.112(8) - payable now</td><td>Rs 7,50,000</td><td>10% additional - cap Rs 20 crore</td></tr>
        <tr><td>Total deposited both stages</td><td>Rs 15,00,000</td><td>S.107(6) + S.112(8)</td></tr>
        <tr><td>Balance - stayed S.112(9)</td><td>Rs 70,00,000</td><td>Automatic stay on GSTAT admission</td></tr>
        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 24,999</td><td>Excl. GST and Govt. Charges</td></tr>
    </tbody></table></div>
    <p style="font-size:13px;color:var(--text-muted);"><em>All fees listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on volume and complexity of work.</em></p>
    <p>The 10% under <strong>Section 107(6)</strong> and <strong>Section 112(8)</strong> are not independent - paying S.112(8) activates the <strong><a href="/gstat-pre-deposit-calculation">Section 112(9) stay of recovery</a></strong>, protecting the IT company from coercive recovery during GSTAT proceedings.</p>
</div>
<div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
    <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;">&#128222; Calculate Your Pre-Deposit</a>
    <a href="https://wa.me/919459456700?text=Hello%2C%20I%20need%20help%20with%20a%20GSTAT%20appeal%20for%20an%20IT%20or%20software%20place%20of%20supply%20dispute.%20Please%20contact%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;">&#128172; WhatsApp Us</a>
</div>
            </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS / WHY PATRON -->
<section class="content-section" id="benefits-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Why Choose Patron Accounting for IT/Software GSTAT Appeals</h2>
<div class="features-grid">
    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Specialist Support</h3><p>Subham Jhunjhunwala, CA Finalist - accounting, taxation, and compliance support, working with the firm's CA and CS team.</p></div>
    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>IT Sector Expertise</h3><p>Deep understanding of intermediary classification, OIDAR rules, Section 12/13 IGST analysis, and export of services disputes specific to IT companies.</p></div>
    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3>10,000+ Businesses</h3><p>4.9 Google rating, 15+ years of practice, offices in Pune, Mumbai, Delhi, and Gurugram.</p></div>
    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Principal Bench Access</h3><p>Place of supply disputes go to the Principal Bench at New Delhi. Our Delhi office provides strategic proximity for physical hearings.</p></div>
    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><h3>Deadline Protection</h3><p>Section 112(1) 3-month limitation does not pause. We ensure filing well within the window with complete documentation.</p></div>
    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Firm-Backed Support</h3><p>Backed by Patron Accounting's ICAI and ICSI registered CA and CS team.</p></div>
</div>
            </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section" id="social-proof-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Trusted by IT Companies</h2>
<div class="content-text">
    <blockquote style="border-left:4px solid var(--orange);padding:16px 24px;margin:24px 0;background:var(--gray-50);border-radius:0 var(--radius-md) var(--radius-md) 0;">
        <p style="font-style:italic;color:var(--text-primary);margin:0;">&#8220;Patron Accounting's GSTAT team understood our intermediary reclassification exposure immediately. Subham Jhunjhunwala's approach to structuring the Section 2(13) defence was methodical and thorough.&#8221;</p>
        <p style="font-size:13px;color:var(--text-muted);margin-top:8px;">- General Counsel, IT Services Company [Illustrative]</p>
    </blockquote>
    <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting provides GSTAT representation across the Principal Bench at New Delhi and State Benches pan-India - including Bangalore (IT hub), Hyderabad (IT/pharma), Chennai (manufacturing/IT), and Pune (IT services).</p>
</div>
            </div>
    </div>
</section>

<!-- SECTION 13: COMPARISON TABLE -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">GSTAT Appeal vs High Court Writ for IT Place of Supply Disputes</h2>
<div class="table-responsive-wrapper" style="overflow-x:auto;"><table class="table-comparison" style="min-width:560px;">
    <thead><tr><th>Forum</th><th>GSTAT Appeal (S.112)</th><th>High Court Writ (Art.226)</th><th>Supreme Court SLP</th></tr></thead><tbody>
        <tr><td>When to Use</td><td>Adverse order on place of supply / intermediary within 3 months</td><td>Jurisdictional error, natural justice, time-barred</td><td>After HC final order</td></tr>
        <tr><td>Pre-Deposit</td><td>10% under Section 112(8)</td><td>No pre-deposit (general)</td><td>No pre-deposit (general)</td></tr>
        <tr><td>Jurisdiction</td><td>Principal Bench (PoS) or State Bench (intermediary)</td><td>Jurisdictional HC</td><td>Supreme Court</td></tr>
        <tr><td>Key Point</td><td>Primary remedy - exhaust before writ</td><td>Not substitute for GSTAT</td><td>Last resort</td></tr>
</tbody></table></div>
<p style="margin-top:16px;">A GSTAT appeal under Section 112 is the appropriate remedy where the first appellate authority has passed an order on merits reclassifying IT services - unlike a High Court writ under Article 226 which lies only where there is a jurisdictional error, violation of natural justice, or where the GSTAT remedy is time-barred beyond the 4-month outer limit.</p>
            </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->
<section class="content-section" id="related-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Related GSTAT Services</h2>
<div class="content-text"><ul>
    <li><a href="/gstat-appeal-filing"><strong>GSTAT Appeal Filing Services in India</strong></a> - National hub</li>
    <li><a href="/gstat-pre-deposit-calculation"><strong>GSTAT Pre-Deposit Calculation &amp; Advisory</strong></a></li>
    <li><a href="/gstat-principal-bench-representation"><strong>GSTAT Principal Bench Representation</strong></a> - Place of supply jurisdiction</li>
    <li><a href="/gstat-efiling-assistance"><strong>GSTAT e-Filing Portal Assistance</strong></a></li>
    <li><a href="/gst-notice"><strong>GST Notice Response Services</strong></a></li>
</ul></div>
            </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK / STATUTORY REFERENCE -->
<section class="content-section" id="legal-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">IT/Software GSTAT Legal Framework Reference</h2>
<div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Reference</th><th>Key Requirement</th></tr></thead><tbody>
    <tr><td>Appeal to GSTAT</td><td><a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/acts/2017_CGST_act/active/chapter18/section112_v1.00.html" target="_blank" rel="noopener">Section 112(1) CGST Act</a></td><td>3 months from communication of order</td></tr>
    <tr><td>Pre-Deposit</td><td>Section 112(8) CGST Act</td><td>10% of disputed tax - cap Rs 20 crore CGST</td></tr>
    <tr><td>Stay of Recovery</td><td>Section 112(9) CGST Act</td><td>Automatic stay on filing with pre-deposit</td></tr>
    <tr><td>Place of Supply - Services</td><td>Section 13 IGST Act</td><td>Location of recipient for B2B; supplier location for intermediary</td></tr>
    <tr><td>Place of Supply - Goods</td><td>Section 12 IGST Act</td><td>Location of goods at time of delivery</td></tr>
    <tr><td>Intermediary Definition</td><td>Section 2(13) IGST Act</td><td>Arranges/facilitates supply between parties - not own account</td></tr>
    <tr><td>OIDAR Services</td><td>Section 13(12) IGST Act</td><td>Online information and database access/retrieval services</td></tr>
    <tr><td>Zero-Rated Supply</td><td>Section 16 IGST Act</td><td>Exports classified as zero-rated</td></tr>
    <tr><td>Principal Bench Jurisdiction</td><td>Section 109(5) Proviso</td><td>Exclusive jurisdiction over place of supply disputes</td></tr>
    <tr><td>Writ Jurisdiction</td><td>Article 226/227 Constitution</td><td>High Court - jurisdictional error or time-bar only</td></tr>
</tbody></table></div>
            </div>
    </div>
</section>

<!-- SECTION 16: FAQ ACCORDION -->
<section class="content-section" id="faq-section">
    <div class="content-container">
        <div class="text-content">
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the pre-deposit for a GSTAT appeal on an IT place of supply rejection?</h3>
                        <div class="faq-expanded__a"><p>The GSTAT pre-deposit under <strong>Section 112(8) CGST Act</strong> is 10% of the disputed tax amount, capped at <strong>Rs 20 crore CGST</strong>. This is in addition to 10% already deposited at the first appellate stage under Section 107(6). Payment triggers automatic stay of recovery under Section 112(9).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the time limit to file a GSTAT appeal for IT place of supply disputes?</h3>
                        <div class="faq-expanded__a"><p>GSTAT appeals must be filed within <strong>3 months</strong> from the date of communication of the first appellate order under <strong>Section 112(1) CGST Act 2017</strong>. Condonation up to 1 additional month under Section 112(2). For orders before 1 April 2026, transitional deadline is 30 June 2026.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What happens if I miss the GSTAT appeal deadline?</h3>
                        <div class="faq-expanded__a"><p>Missing the 3-month window under Section 112(1) closes the tribunal remedy permanently after 4 months. The only recourse is a High Court writ under <strong>Article 226</strong> - costlier, slower, and limited to jurisdictional errors or natural justice violations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I get stay of recovery after filing a GSTAT appeal?</h3>
                        <div class="faq-expanded__a"><p>Yes - <strong>Section 112(9) CGST Act</strong> provides automatic stay of recovery of the remaining disputed amount once the appeal is admitted with confirmed pre-deposit. This protects IT company working capital during proceedings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is an intermediary classification dispute for IT companies?</h3>
                        <div class="faq-expanded__a"><p>When the tax authority reclassifies an export of services as intermediary services under <strong>Section 2(13) IGST Act</strong>, the place of supply shifts to the supplier's location in India, denying zero-rated treatment and triggering a demand. This is common for IT services, BPO, and staffing companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Where are place of supply disputes heard at GSTAT?</h3>
                        <div class="faq-expanded__a"><p>Place of supply disputes fall under the exclusive jurisdiction of the <strong>GSTAT Principal Bench at New Delhi</strong> under Section 109(5) proviso. This is different from other GST disputes which are heard at State Benches.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the difference between Rule 96 and Rule 89 for IT exports?</h3>
                        <div class="faq-expanded__a"><p>Rule 96 provides for refund of IGST paid on exports where the shipping bill acts as refund application. Rule 89 provides for refund of accumulated ITC when services are exported under LUT without IGST payment. An IT company cannot claim both for the same export.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can the GSTAT appeal deadline be extended for IT companies?</h3>
                        <div class="faq-expanded__a"><p>Yes - under <strong>Section 112(2) CGST Act</strong>, the tribunal may condone delay up to 1 additional month beyond the 3-month limit on sufficient cause. Beyond 4 months, the only recourse is a High Court writ under Article 226.</p></div>
                    </div>
                </div>
            </div>

            <div class="highlight-box" style="background:var(--blue-lighter);border-radius:var(--radius-md);padding:24px;margin-top:32px;">
    <h3 style="color:var(--blue);margin-bottom:16px;">Quick Answers</h3>
    <div class="qa-grid" style="display:grid;grid-template-columns:repeat(2,1fr);gap:16px;">
        <div><strong>GSTAT pre-deposit?</strong><br><span style="color:var(--text-secondary);font-size:14px;">10% of disputed tax under Section 112(8), capped at Rs 20 crore CGST.</span></div>
        <div><strong>Appeal deadline?</strong><br><span style="color:var(--text-secondary);font-size:14px;">3 months from order under Section 112(1). Staggered: 30 June 2026.</span></div>
        <div><strong>Where are PoS disputes heard?</strong><br><span style="color:var(--text-secondary);font-size:14px;">GSTAT Principal Bench, New Delhi under Section 109(5) proviso.</span></div>
        <div><strong>Is stay automatic?</strong><br><span style="color:var(--text-secondary);font-size:14px;">Yes - Section 112(9) provides automatic stay on confirmed pre-deposit.</span></div>
        <div><strong>What form for GSTAT appeal?</strong><br><span style="color:var(--text-secondary);font-size:14px;">Form GST APL-05, filed on efiling.gstat.gov.in.</span></div>
        <div><strong>What is intermediary under S.2(13)?</strong><br><span style="color:var(--text-secondary);font-size:14px;">Person arranging/facilitating supply between parties - not on own account. Shifts PoS to India.</span></div>
    </div>
</div>
        
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <div class="content-text">
                <h2 style="color:var(--orange);margin-bottom:16px;">Time-Sensitive - 3-Month Deadline Running</h2>
<div class="highlight-box" style="background:var(--orange-light);border-left:4px solid var(--orange);padding:20px 24px;border-radius:0 var(--radius-md) var(--radius-md) 0;margin-bottom:16px;">
    <p style="font-weight:700;color:var(--text-primary);margin:0;">GSTAT appeals must be filed within <strong>3 months</strong> of order communication under Section 112(1). Beyond 4 months (with condonation), the right to appeal is permanently lost.</p>
</div>
<p>Every day from the order communication date reduces your available window. Contact Patron Accounting immediately on receiving an adverse order on place of supply reclassification or intermediary classification.</p>
<p><strong>Contact us now:</strong> <a href="tel:+919459456700">+91 945 945 6700</a> | <a href="https://wa.me/919459456700?text=Hello%2C%20I%20need%20help%20with%20a%20GSTAT%20appeal%20for%20an%20IT%20or%20software%20place%20of%20supply%20dispute.%20Please%20contact%20me." target="_blank">WhatsApp Us</a></p>
            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section conclusion-dark" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">The 3-Month GSTAT Deadline Is Running - Contact Us Today</h2>
            <div class="content-text" style="text-align:left;">
                <p><strong>GSTAT appeal for IT and software place of supply disputes</strong> under Section 112 CGST Act 2017 provides the dedicated judicial forum that IT companies have needed - a specialist tribunal with the authority to review and reverse adverse orders on intermediary reclassification, OIDAR classification, and export of services disputes that directly impact competitiveness and cash flow.</p>
<p>Patron Accounting's GSTAT practice is supported by Subham Jhunjhunwala, CA Finalist and Accounting &amp; Tax Professional, working alongside the firm's CA and CS team on every GSTAT engagement.</p>
            <div class="conclusion-cta-row" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20need%20help%20with%20a%20GSTAT%20appeal%20for%20an%20IT%20or%20software%20place%20of%20supply%20dispute.%20Please%20contact%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=GSTAT%20Appeal%20-%20IT%20Software%20Place%20of%20Supply%20Dispute&body=Hello%2C%0A%0AI%20need%20help%20with%20a%20GSTAT%20appeal%20for%20an%20IT%20place%20of%20supply%20dispute.%20Please%20contact%20me.%0A%0ARegards" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH LOCATIONS (32 Benches) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GSTAT State Bench Locations Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">With 32 State Benches, GSTAT allows you to file your appeal at the bench for your jurisdiction — Patron Accounting represents clients across all benches.</p>

            <!-- BLOCK 1: 32 State Bench Cities -->
            <div class="pa-city-block" style="margin-bottom:40px;">
                <p class="pa-block-title">GSTAT State Bench Locations</p>
                <p class="pa-block-sub">Select your bench location to know jurisdiction districts and filing procedure</p>
                <div class="pa-city-grid">
                    <!-- Andhra Pradesh -->
                    <a href="/gstat-appeal-filing/vijayawada" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Vijayawada</div><div class="pa-card-sub">Andhra Pradesh</div></div></a>
                    <!-- Bihar -->
                    <a href="/gstat-appeal-filing/patna" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Patna</div><div class="pa-card-sub">Bihar</div></div></a>
                    <!-- Chhattisgarh -->
                    <a href="/gstat-appeal-filing/raipur" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Raipur</div><div class="pa-card-sub">Chhattisgarh</div></div></a>
                    <!-- Delhi -->
                    <a href="/gstat-appeal-filing/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">New Delhi</div><div class="pa-card-sub">Delhi (NCT)</div></div></a>
                    <!-- Maharashtra: Mumbai -->
                    <a href="/gstat-appeal-filing/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Goa + Maharashtra</div></div></a>
                    <!-- Maharashtra: Pune -->
                    <a href="/gstat-appeal-filing/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Goa + Maharashtra</div></div></a>
                    <!-- Maharashtra: Nagpur -->
                    <a href="/gstat-appeal-filing/nagpur" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Nagpur</div><div class="pa-card-sub">Maharashtra (Vidarbha)</div></div></a>
                    <!-- Gujarat: Ahmedabad -->
                    <a href="/gstat-appeal-filing/ahmedabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Ahmedabad</div><div class="pa-card-sub">Gujarat</div></div></a>
                    <!-- Gujarat: Surat -->
                    <a href="/gstat-appeal-filing/surat" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Surat</div><div class="pa-card-sub">Gujarat</div></div></a>
                    <!-- Haryana -->
                    <a href="/gstat-appeal-filing/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <!-- Himachal Pradesh -->
                    <a href="/gstat-appeal-filing/shimla" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Shimla</div><div class="pa-card-sub">Himachal Pradesh</div></div></a>
                    <!-- Jharkhand -->
                    <a href="/gstat-appeal-filing/ranchi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Ranchi</div><div class="pa-card-sub">Jharkhand</div></div></a>
                    <!-- Karnataka: Bangalore -->
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <!-- Karnataka: Dharwad -->
                    <a href="/gstat-appeal-filing/dharwad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Dharwad</div><div class="pa-card-sub">Karnataka (North)</div></div></a>
                    <!-- Kerala -->
                    <a href="/gstat-appeal-filing/kochi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kochi</div><div class="pa-card-sub">Kerala + Lakshadweep</div></div></a>
                    <!-- Madhya Pradesh -->
                    <a href="/gstat-appeal-filing/indore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Indore</div><div class="pa-card-sub">Madhya Pradesh</div></div></a>
                    <!-- Odisha -->
                    <a href="/gstat-appeal-filing/cuttack" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Cuttack</div><div class="pa-card-sub">Odisha</div></div></a>
                    <!-- Punjab + Chandigarh -->
                    <a href="/gstat-appeal-filing/chandigarh" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chandigarh</div><div class="pa-card-sub">Punjab + Chandigarh UT</div></div></a>
                    <!-- Punjab: Jalandhar -->
                    <a href="/gstat-appeal-filing/jalandhar" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Jalandhar</div><div class="pa-card-sub">Punjab</div></div></a>
                    <!-- Rajasthan: Jaipur -->
                    <a href="/gstat-appeal-filing/jaipur" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Jaipur</div><div class="pa-card-sub">Rajasthan</div></div></a>
                    <!-- Rajasthan: Jodhpur -->
                    <a href="/gstat-appeal-filing/jodhpur" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Jodhpur</div><div class="pa-card-sub">Rajasthan (West)</div></div></a>
                    <!-- Tamil Nadu: Chennai -->
                    <a href="/gstat-appeal-filing/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu + Puducherry</div></div></a>
                    <!-- Tamil Nadu: Madurai -->
                    <a href="/gstat-appeal-filing/madurai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Madurai</div><div class="pa-card-sub">Tamil Nadu (South)</div></div></a>
                    <!-- Telangana -->
                    <a href="/gstat-appeal-filing/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <!-- UP: Lucknow -->
                    <a href="/gstat-appeal-filing/lucknow" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Lucknow</div><div class="pa-card-sub">Uttar Pradesh</div></div></a>
                    <!-- UP: Varanasi -->
                    <a href="/gstat-appeal-filing/varanasi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Varanasi</div><div class="pa-card-sub">Uttar Pradesh (East)</div></div></a>
                    <!-- UP: Prayagraj -->
                    <a href="/gstat-appeal-filing/prayagraj" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Prayagraj</div><div class="pa-card-sub">Uttar Pradesh (Central)</div></div></a>
                    <!-- Uttarakhand -->
                    <a href="/gstat-appeal-filing/dehradun" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Dehradun</div><div class="pa-card-sub">Uttarakhand</div></div></a>
                    <!-- West Bengal + Sikkim + A&N: Kolkata -->
                    <a href="/gstat-appeal-filing/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">WB + Sikkim + A&N</div></div></a>
                    <!-- West Bengal: Siliguri -->
                    <a href="/gstat-appeal-filing/siliguri" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Siliguri</div><div class="pa-card-sub">West Bengal (North)</div></div></a>
                    <!-- Assam + NE States -->
                    <a href="/gstat-appeal-filing/guwahati" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Guwahati</div><div class="pa-card-sub">Assam + NE States</div></div></a>
                    <!-- J&K + Ladakh -->
                    <a href="/gstat-appeal-filing/srinagar" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Srinagar</div><div class="pa-card-sub">J&K + Ladakh</div></div></a>
                </div>
            </div>

            <!-- BLOCK 2: Related GSTAT Services (update per page) -->
            <div class="pa-city-block">
                <p class="pa-block-title">Related GSTAT and GST Appeal Services</p>
                <p class="pa-block-sub">End-to-end GST litigation and appeal support across all forums</p>
                <div class="pa-cross-grid">
                    <a href="/gstat-appeal-filing" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GSTAT Appeal Filing</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gstat-principal-bench-representation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Principal Bench Representation</div><div class="pa-card-sub">New Delhi</div></div></a>
                    <a href="/gstat-pre-deposit-calculation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Pre-Deposit Advisory</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gstat-cross-objection-filing" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Cross Objection Filing</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gstat-efiling-assistance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">e-Filing Portal Assistance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gstat-anti-profiteering-appeal" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Anti-Profiteering Appeal</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 16 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">16 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 16 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 3 months or upon Finance Act amendments to Section 112 or Section 54, CBIC circulars on place of supply, GSTAT portal changes, changes to Rule 89 or Rule 96, HC/SC judgments on intermediary classification, or changes to LUT provisions.</p>
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

<!-- JS Dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
(function() {
    // ============================================
    // CONFIGURATION  -  Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '',               // Patron Accounting's Google Place ID
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
            console.log('[Testimonials] No Google API key set  -  using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API  -  using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews  -  using fallback.');
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
        // Static cards already rendered  -  init Slick immediately
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
// Country Data (46 countries)
var countries = [
    { name: "India", code: "+91", flag: "\u{1F1EE}\u{1F1F3}", iso: "IN" },
    { name: "United States", code: "+1", flag: "\u{1F1FA}\u{1F1F8}", iso: "US" },
    { name: "United Kingdom", code: "+44", flag: "\u{1F1EC}\u{1F1E7}", iso: "GB" },
    { name: "United Arab Emirates", code: "+971", flag: "\u{1F1E6}\u{1F1EA}", iso: "AE" },
    { name: "Saudi Arabia", code: "+966", flag: "\u{1F1F8}\u{1F1E6}", iso: "SA" },
    { name: "Singapore", code: "+65", flag: "\u{1F1F8}\u{1F1EC}", iso: "SG" },
    { name: "Australia", code: "+61", flag: "\u{1F1E6}\u{1F1FA}", iso: "AU" },
    { name: "Canada", code: "+1", flag: "\u{1F1E8}\u{1F1E6}", iso: "CA" },
    { name: "Germany", code: "+49", flag: "\u{1F1E9}\u{1F1EA}", iso: "DE" },
    { name: "France", code: "+33", flag: "\u{1F1EB}\u{1F1F7}", iso: "FR" },
    { name: "Japan", code: "+81", flag: "\u{1F1EF}\u{1F1F5}", iso: "JP" },
    { name: "China", code: "+86", flag: "\u{1F1E8}\u{1F1F3}", iso: "CN" },
    { name: "South Korea", code: "+82", flag: "\u{1F1F0}\u{1F1F7}", iso: "KR" },
    { name: "Brazil", code: "+55", flag: "\u{1F1E7}\u{1F1F7}", iso: "BR" },
    { name: "South Africa", code: "+27", flag: "\u{1F1FF}\u{1F1E6}", iso: "ZA" },
    { name: "Nigeria", code: "+234", flag: "\u{1F1F3}\u{1F1EC}", iso: "NG" },
    { name: "Kenya", code: "+254", flag: "\u{1F1F0}\u{1F1EA}", iso: "KE" },
    { name: "Malaysia", code: "+60", flag: "\u{1F1F2}\u{1F1FE}", iso: "MY" },
    { name: "Indonesia", code: "+62", flag: "\u{1F1EE}\u{1F1E9}", iso: "ID" },
    { name: "Thailand", code: "+66", flag: "\u{1F1F9}\u{1F1ED}", iso: "TH" },
    { name: "Vietnam", code: "+84", flag: "\u{1F1FB}\u{1F1F3}", iso: "VN" },
    { name: "Philippines", code: "+63", flag: "\u{1F1F5}\u{1F1ED}", iso: "PH" },
    { name: "Bangladesh", code: "+880", flag: "\u{1F1E7}\u{1F1E9}", iso: "BD" },
    { name: "Pakistan", code: "+92", flag: "\u{1F1F5}\u{1F1F0}", iso: "PK" },
    { name: "Sri Lanka", code: "+94", flag: "\u{1F1F1}\u{1F1F0}", iso: "LK" },
    { name: "Nepal", code: "+977", flag: "\u{1F1F3}\u{1F1F5}", iso: "NP" },
    { name: "Qatar", code: "+974", flag: "\u{1F1F6}\u{1F1E6}", iso: "QA" },
    { name: "Kuwait", code: "+965", flag: "\u{1F1F0}\u{1F1FC}", iso: "KW" },
    { name: "Bahrain", code: "+973", flag: "\u{1F1E7}\u{1F1ED}", iso: "BH" },
    { name: "Oman", code: "+968", flag: "\u{1F1F4}\u{1F1F2}", iso: "OM" },
    { name: "New Zealand", code: "+64", flag: "\u{1F1F3}\u{1F1FF}", iso: "NZ" },
    { name: "Ireland", code: "+353", flag: "\u{1F1EE}\u{1F1EA}", iso: "IE" },
    { name: "Netherlands", code: "+31", flag: "\u{1F1F3}\u{1F1F1}", iso: "NL" },
    { name: "Italy", code: "+39", flag: "\u{1F1EE}\u{1F1F9}", iso: "IT" },
    { name: "Spain", code: "+34", flag: "\u{1F1EA}\u{1F1F8}", iso: "ES" },
    { name: "Switzerland", code: "+41", flag: "\u{1F1E8}\u{1F1ED}", iso: "CH" },
    { name: "Sweden", code: "+46", flag: "\u{1F1F8}\u{1F1EA}", iso: "SE" },
    { name: "Russia", code: "+7", flag: "\u{1F1F7}\u{1F1FA}", iso: "RU" },
    { name: "Mexico", code: "+52", flag: "\u{1F1F2}\u{1F1FD}", iso: "MX" },
    { name: "Egypt", code: "+20", flag: "\u{1F1EA}\u{1F1EC}", iso: "EG" },
    { name: "Turkey", code: "+90", flag: "\u{1F1F9}\u{1F1F7}", iso: "TR" },
    { name: "Israel", code: "+972", flag: "\u{1F1EE}\u{1F1F1}", iso: "IL" },
    { name: "Hong Kong", code: "+852", flag: "\u{1F1ED}\u{1F1F0}", iso: "HK" },
    { name: "Taiwan", code: "+886", flag: "\u{1F1F9}\u{1F1FC}", iso: "TW" },
    { name: "Myanmar", code: "+95", flag: "\u{1F1F2}\u{1F1F2}", iso: "MM" },
    { name: "Afghanistan", code: "+93", flag: "\u{1F1E6}\u{1F1EB}", iso: "AF" }
];

var selectedCountry = countries[0]; // Default: India

function populateCountries(filter) {
    filter = filter || '';
    var container = document.getElementById('countryOptions');
    if (!container) return;
    container.innerHTML = '';
    var filtered = filter
        ? countries.filter(function(c) { return c.name.toLowerCase().indexOf(filter.toLowerCase()) !== -1 || c.code.indexOf(filter) !== -1; })
        : countries;
    filtered.forEach(function(country) {
        var option = document.createElement('div');
        option.className = 'country-option' + (country.iso === selectedCountry.iso ? ' active' : '');
        option.innerHTML = '<span class="flag-emoji">' + country.flag + '</span><span class="country-name">' + country.name + '</span><span class="dial-code">' + country.code + '</span>';
        option.onclick = function(e) { e.stopPropagation(); selectCountry(country); };
        container.appendChild(option);
    });
}

function selectCountry(country) {
    selectedCountry = country;
    document.getElementById('selectedFlag').textContent = country.flag;
    document.getElementById('selectedCode').textContent = country.code;
    document.getElementById('countryCodeDropdown').classList.remove('open');
    document.getElementById('countrySearchInput').value = '';
    populateCountries();
    document.getElementById('phoneNumberInput').focus();
}

function toggleCountryDropdown(event) {
    event.stopPropagation();
    var dropdown = document.getElementById('countryCodeDropdown');
    var isOpen = dropdown.classList.contains('open');
    if (isOpen) {
        dropdown.classList.remove('open');
    } else {
        dropdown.classList.add('open');
        document.getElementById('countrySearchInput').value = '';
        populateCountries();
        setTimeout(function() { document.getElementById('countrySearchInput').focus(); }, 50);
    }
}

function filterCountries(value) { populateCountries(value); }

// Close dropdown on outside click
document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('countryCodeDropdown');
    if (dropdown && !dropdown.contains(e.target)) { dropdown.classList.remove('open'); }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { document.getElementById('countryCodeDropdown').classList.remove('open'); }
});

// Form Validation
function clearFieldError(fieldObj) {
    fieldObj.classList.remove('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent) { var errMsg = parent.querySelector('.field-error-msg'); if (errMsg) errMsg.remove(); }
}

function setFieldError(fieldObj, message) {
    fieldObj.classList.add('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent && !parent.querySelector('.field-error-msg')) {
        var errDiv = document.createElement('div');
        errDiv.className = 'field-error-msg';
        errDiv.textContent = message;
        parent.appendChild(errDiv);
    }
}

// ── Phone Validation ──────────────────────────────────────────
function validatePhone(val, dialCode) {
    val = val.replace(/[\s\-().]/g, '');
    if (!val) {
        return { valid: false, message: 'Phone number is required' };
    }
    if (dialCode === '+91') {
        if (!/^[6-9][0-9]{9}$/.test(val)) {
            if (val.length !== 10) {
                return { valid: false, message: 'Enter a valid 10-digit Indian mobile number' };
            }
            return { valid: false, message: 'Indian mobile numbers must start with 6, 7, 8, or 9' };
        }
        return { valid: true };
    }
    if (!/^[0-9]{7,15}$/.test(val)) {
        return { valid: false, message: 'Enter a valid phone number (7-15 digits)' };
    }
    return { valid: true };
}

function validatePhoneOnBlur(input) {
    var val = input.value.trim();
    var dialCode = (selectedCountry && selectedCountry.code) ? selectedCountry.code : '+91';
    var result = validatePhone(val, dialCode);
    var errorEl = document.getElementById('phoneError');
    var groupEl = document.getElementById('phoneGroup');
    if (val === '') return;
    if (!result.valid) {
        groupEl.classList.add('input-error');
        errorEl.textContent = result.message;
        errorEl.style.display = 'block';
    } else {
        groupEl.classList.remove('input-error');
        errorEl.style.display = 'none';
    }
}
// ─────────────────────────────────────────────────────────────

function validateConsultationForm() {
    var isValid = true;

    var nameField = document.getElementById('consultFullName');
    if (!nameField.value.trim()) { setFieldError(nameField, 'Full name is required'); isValid = false; }

    var phoneInput = document.getElementById('phoneNumberInput');
    var phoneVal = phoneInput.value.trim();
    var phoneResult = validatePhone(phoneInput.value.trim(), selectedCountry ? selectedCountry.code : '+91');
    if (!phoneResult.valid) {
        setFieldError(phoneInput, phoneResult.message);
        document.getElementById('phoneGroup').classList.add('input-error');
        document.getElementById('phoneError').textContent = phoneResult.message;
        document.getElementById('phoneError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('phoneGroup').classList.remove('input-error');
        document.getElementById('phoneError').style.display = 'none';
    }

    var cityField = document.getElementById('consultCity');
    if (!cityField.value.trim()) { setFieldError(cityField, 'City is required'); isValid = false; }

    var serviceField = document.getElementById('consultService');
    if (!serviceField.value) { setFieldError(serviceField, 'Please select a service'); isValid = false; }

    if (isValid) {
        document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal.replace(/[\s\-().]/g, '');
        var serviceName = serviceField.options[serviceField.selectedIndex].text;
        document.getElementById('dealNameField').value = 'Website Enquiry - ' + serviceName;
        document.getElementById('pageSourceField').value = window.location.href;
        var btn = document.getElementById('formSubmitBtn');
        btn.disabled = true;
        btn.textContent = 'Submitting...';
        setTimeout(function() { btn.disabled = false; btn.innerHTML = 'Get Free Quote \u2192'; }, 6000);
    }
    return isValid;
}

// Success state handler (Bigin iframe load)
window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
    // Auto-embed page URL in form
    var pageSourceField = document.getElementById('pageSourceField');
    if (pageSourceField) { pageSourceField.value = window.location.href; }
    var iframe = document.getElementById('hidden208810000001209168Frame');
    if (iframe) {
        iframe.addEventListener('load', function() {
            try {
                var iframeDoc = this.contentWindow.document;
                if (iframeDoc.body && iframeDoc.body.childElementCount !== 0) { showSuccessState(); }
            } catch (error) { showSuccessState(); }
        });
    }
});

function showSuccessState() {
    var formCard = document.getElementById('consultationFormCard');
    if (formCard) {
        formCard.innerHTML =
            '<div class="form-success">' +
                '<div class="form-success-icon">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg>' +
                '</div>' +
                '<h3>Thank You!</h3>' +
                '<p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p>' +
            '</div>';
    }
}
</script>
<script>
// Bigin Mandatory Fields Validation (from Bigin source code)
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');

function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                isReturn = false;
            }
        }
    }
    if(isReturn) {
        document.getElementById('formSubmitBtn').disabled = true;
    }
    return isReturn;
}

// Bigin iframe success handler (overrides our custom one above via event delegation)
document.getElementById('hidden208810000001209168Frame').addEventListener('load', function () {
    try {
        var doc = arguments[0].currentTarget.contentWindow.document;
        if(doc.body && doc.body.childElementCount !== 0) {
            showSuccessState();
        }
    } catch (error) {
        showSuccessState();
    }
});
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
