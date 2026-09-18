@extends('layouts.service-app')

@section('meta')
    <title>Importer GSTAT Appeal - IGST Valuation | Patron</title>
    <meta name="description" content="GSTAT appeal for importers facing IGST valuation disputes, Customs-GST interface issues, and anti-dumping duty stacking. 10% pre-deposit. Patron Accounting.">
    <link rel="canonical" href="/gstat-appeal-importers">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Importer GSTAT Appeal - IGST Valuation | Patron">
    <meta property="og:description" content="GSTAT appeal for importers facing IGST valuation disputes, Customs-GST interface issues, and anti-dumping duty stacking. 10% pre-deposit. Patron Accounting.">
    <meta property="og:url" content="/gstat-appeal-importers">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta property="og:locale" content="en_IN">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Importer GSTAT Appeal - IGST Valuation | Patron">
    <meta name="twitter:description" content="GSTAT appeal for importers facing IGST valuation disputes, Customs-GST interface issues, and anti-dumping duty stacking. 10% pre-deposit. Patron Accounting.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Importer GSTAT Appeal IGST Valuation Disputes",
          "description": "GSTAT appeal for importers facing IGST valuation disputes, Customs-GST interface issues, and anti-dumping duty stacking. 10% pre-deposit. Patron Accounting.",
          "url": "https://www.patronaccounting.com/gstat-appeal-importers",
          "serviceType": "Importer GSTAT Appeal IGST Valuation Disputes",
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
            "url": "https://www.patronaccounting.com/gstat-appeal-importers",
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
              "name": "Importer GSTAT Appeal IGST Valuation Disputes",
              "item": "https://www.patronaccounting.com/gstat-appeal-importers"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the pre-deposit for a GSTAT appeal on import IGST valuation?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The pre-deposit under Section 112(8) is 10% of the disputed IGST , capped at Rs 20 crore CGST. For import IGST disputes, the disputed amount is the additional IGST arising from customs valuation reassessment. Payment triggers automatic stay under Section 112(9)."
              }
            },
            {
              "@type": "Question",
              "name": "What is the time limit to file a GSTAT appeal?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "3 months from date of communication under Section 112(1). Condonation up to 1 additional month under Section 112(2). For orders before 1 April 2026, deadline extends to 30 June 2026 ."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I miss the deadline?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Beyond 4 months the tribunal remedy is permanently lost. The only recourse is a writ petition under Article 226 ."
              }
            },
            {
              "@type": "Question",
              "name": "Can I get stay of recovery after filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes - Section 112(9) provides automatic stay once the appeal is admitted with confirmed pre-deposit. This protects importer working capital during proceedings."
              }
            },
            {
              "@type": "Question",
              "name": "How does customs valuation affect IGST on imports?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "IGST under Section 3(7) Customs Tariff Act is levied on assessable value plus customs duties. When customs reassesses value upward, IGST increases proportionally, creating the demand that can be challenged at GSTAT."
              }
            },
            {
              "@type": "Question",
              "name": "What is anti-dumping duty and IGST stacking?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "When anti-dumping duty under Section 9A CTA is added to the IGST computation base, IGST is levied on the anti-dumping duty itself - creating a cascading effect that significantly increases total import cost."
              }
            },
            {
              "@type": "Question",
              "name": "Can Bill of Entry amendments affect IGST liability?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Amendments under Section 149 Customs Act 1962 can change assessable value, classification, or duty rates, directly impacting IGST. Disputes from such amendments are appealable to GSTAT after first appeal."
              }
            },
            {
              "@type": "Question",
              "name": "Is transfer pricing adjustment a ground for IGST dispute?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. When customs adjusts transaction value based on transfer pricing rules under Rule 12 CVR 2007 for related party imports, the resulting IGST increase can be challenged at GSTAT through the GST appellate route."
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
                        GSTAT Appeal: Importers: Resolve Conflicting GST Rulings at GSTAT
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Dispute Types:</span> IGST on imports valuation disputes and Customs-GST interface on integrated tax computation</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Pre-Deposit:</span> 10% pre-deposit at GSTAT stage under Section 112(8) CGST Act - capped at Rs 20 crore</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deadline:</span> 3-month appeal deadline from order date under Section 112(1) CGST Act 2017</p>
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
                        <a href="mailto:sales@patronaccounting.com?subject=GSTAT%20Importer%20IGST%20Valuation%20Appeal%20-%20Enquiry&body=Hello%2C%20I%20just%20visited%20your%20GSTAT%20Appeal%20Importers%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GSTAT%20Appeal%20Importers%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GSTAT Appeal: Importers',
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
    'ctaText'    => '10,000+ Businesses Served | 4.9 Google Rating | GSTAT Appeal Support by Patron Accounting',
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
                        <a class="toc-btn" href="#overview-section">Overview</a>
            <a class="toc-btn" href="#what-section">Import IGST Disputes</a>
            <a class="toc-btn" href="#who-section">Who Should File</a>
            <a class="toc-btn" href="#services-section">Our Services</a>
            <a class="toc-btn" href="#procedure-section">7-Step Process</a>
            <a class="toc-btn" href="#documents-section">Documents</a>
            <a class="toc-btn" href="#fees-section">Pre-Deposit &amp; Fees</a>
            <a class="toc-btn" href="#benefits-section">Why Patron</a>
            <a class="toc-btn" href="#comparison-section">GSTAT vs HC Writ</a>
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
                <h2 class="section-title">GSTAT Appeal for Importers - Overview</h2>
            <div class="highlight-box" style="background:var(--orange-lighter);border-left:4px solid var(--orange);padding:20px 24px;border-radius:var(--radius-md);margin-bottom:24px;"><p style="margin:0;font-size:15px;line-height:1.7;"><strong>TL;DR:</strong> 1. File GSTAT appeal within <strong>3 months</strong> under Section 112(1) CGST Act. 2. Pay <strong>10% pre-deposit</strong> on disputed IGST amount under Section 112(8) - capped at Rs 20 crore. 3. Contact Patron Accounting for <strong>IGST on imports and customs valuation dispute</strong> representation.</p></div>
            <div class="table-responsive-wrapper" style="margin-bottom:24px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
                <tr><td>Industry Focus</td><td>IGST on imports valuation (Section 3(7) CTA), Customs-GST interface, anti-dumping duty stacking, Bill of Entry disputes</td></tr>
                <tr><td>Pre-Deposit</td><td>10% of disputed IGST under S.112(8) - capped at Rs 20 crore CGST</td></tr>
                <tr><td>Time Limit</td><td>3 months from order communication under S.112(1)</td></tr>
                <tr><td>Stay of Recovery</td><td>Automatic under S.112(9) on filing with pre-deposit</td></tr>
                <tr><td>Filing Portal</td><td>efiling.gstat.gov.in via Form GST APL-05</td></tr>
                <tr><td>Backlog Deadline</td><td>30 June 2026 for pre-1 April 2026 orders</td></tr>
            </tbody></table></div>
            <p>Importers facing IGST valuation disputes arising from customs reassessment, anti-dumping duty and IGST stacking, or Bill of Entry amendment issues now have a dedicated appellate remedy through GSTAT. <strong>GSTAT appeal for importer IGST disputes</strong> under <strong>Section 112 CGST Act 2017</strong> requires specialist representation combining knowledge of customs valuation under <strong>Section 3(7) Customs Tariff Act</strong> with tribunal litigation strategy. Patron Accounting provides this through our <a href="/gstat-appeal-filing">GSTAT practice</a>.</p>
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
                <h2 class="section-title">What Is a GSTAT Appeal for Import IGST Valuation Disputes?</h2>
                <div class="highlight-box" style="background:var(--blue-lighter);border-radius:var(--radius-md);padding:20px 24px;margin-bottom:20px;"><p style="margin:0;"><strong>Definition:</strong> An import IGST valuation dispute arises when the customs authorities reassess the value of imported goods under <strong>Section 3(7) of the Customs Tariff Act 1975</strong>, resulting in additional IGST liability that the importer challenges as incorrect - whether due to valuation methodology, anti-dumping duty inclusion, or Bill of Entry amendment.</p></div>
                <p>When the first appellate authority under Section 107 CGST Act upholds an IGST demand arising from customs valuation reassessment, the importer may file a second appeal before GSTAT under <strong>Section 112 CGST Act 2017</strong> within 3 months of the order.</p>
                <p><strong>GSTAT vs Commissioner (Appeals):</strong> GSTAT, unlike the Commissioner (Appeals), is a judicial body - its orders carry the force of a court decree, making it the first genuinely independent forum for resolving import IGST valuation disputes in the GST appellate hierarchy.</p>
                <div class="highlight-box" style="background:#f0fdf4;border-radius:var(--radius-md);padding:16px 20px;margin-top:20px;"><p style="margin:0;font-size:14px;"><strong>Key Terms:</strong></p><ul style="margin-top:8px;">
                    <li><strong>IGST on Imports</strong> - Levied under Section 3(7) Customs Tariff Act on assessable value plus duties</li>
                    <li><strong>Customs Valuation</strong> - Assessable value under Customs Valuation Rules 2007</li>
                    <li><strong>Anti-Dumping Duty</strong> - Additional duty under Section 9A CTA included in IGST base</li>
                    <li><strong>Bill of Entry</strong> - Import declaration under Section 46 Customs Act 1962</li>
                    <li><strong>Pre-Deposit</strong> - 10% of disputed IGST under Section 112(8), capped at Rs 20 crore</li>
                </ul></div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder" style="background:linear-gradient(135deg,#f0f4ff 0%,#e8f4f8 100%);border-radius:var(--radius-lg);padding:32px;text-align:center;min-height:360px;display:flex;flex-direction:column;align-items:center;justify-content:center;">
                    <svg viewBox="0 0 300 220" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;max-width:280px;margin-bottom:16px;">
                        <rect x="85" y="5" width="130" height="40" rx="8" fill="#14365F"/><text x="150" y="22" text-anchor="middle" font-size="10" font-weight="700" fill="#fff">Import Business</text><text x="150" y="36" text-anchor="middle" font-size="7" fill="rgba(255,255,255,0.8)">S.3(7) CTA + S.5(1) IGST</text>
                        <rect x="10" y="70" width="85" height="35" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="52" y="85" text-anchor="middle" font-size="8" font-weight="600" fill="#C05E10">Customs Valuation</text><text x="52" y="97" text-anchor="middle" font-size="7" fill="#666">CVR 2007</text>
                        <rect x="107" y="70" width="85" height="35" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="150" y="85" text-anchor="middle" font-size="8" font-weight="600" fill="#C05E10">Anti-Dumping</text><text x="150" y="97" text-anchor="middle" font-size="7" fill="#666">S.9A CTA</text>
                        <rect x="205" y="70" width="85" height="35" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="247" y="85" text-anchor="middle" font-size="8" font-weight="600" fill="#C05E10">BoE Amendment</text><text x="247" y="97" text-anchor="middle" font-size="7" fill="#666">S.149 CA</text>
                        <text x="150" y="130" text-anchor="middle" font-size="18" fill="#E53E3E">&#x26A0;</text><text x="150" y="145" text-anchor="middle" font-size="8" font-weight="600" fill="#E53E3E">IGST Demand Dispute</text>
                        <rect x="50" y="160" width="200" height="35" rx="8" fill="#14365F"/><text x="150" y="175" text-anchor="middle" font-size="9" font-weight="700" fill="#fff">GSTAT Appeal - Section 112</text><text x="150" y="188" text-anchor="middle" font-size="7" fill="rgba(255,255,255,0.8)">10% Pre-deposit | 3-Month Deadline | Auto Stay</text>
                        <line x1="52" y1="45" x2="52" y2="70" stroke="#F5A623" stroke-width="1.5"/><line x1="150" y1="45" x2="150" y2="70" stroke="#F5A623" stroke-width="1.5"/><line x1="247" y1="45" x2="247" y2="70" stroke="#F5A623" stroke-width="1.5"/>
                        <line x1="150" y1="145" x2="150" y2="160" stroke="#14365F" stroke-width="2"/>
                    </svg>
                    <span class="illustration-badge" style="display:inline-block;background:var(--orange);color:#fff;padding:6px 16px;border-radius:50px;font-size:12px;font-weight:700;">Import IGST Dispute Types Leading to GSTAT Appeal</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO NEEDS THIS -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Who Should File a GSTAT Appeal for Import IGST Disputes</h2>
                <p>Importers of goods, manufacturing importers, trading houses, and multinational companies with import operations that have received an adverse order from the Commissioner (Appeals) under <strong>Section 107 CGST Act</strong> should consider filing a GSTAT appeal. Common triggers include:</p>
                <ul><li><strong>IGST on imports valuation demands</strong> - Customs reassessment of assessable value under Section 3(7) CTA</li><li><strong>Anti-dumping duty and IGST stacking</strong> - IGST levied on anti-dumping duty creating cascading effect</li><li><strong>Bill of Entry amendment disputes</strong> - Value or classification changes under Section 149 Customs Act</li><li><strong>Transfer pricing adjustments on imports</strong> - Related party valuation under CVR 2007 Rule 12</li><li><strong>Classification disputes affecting IGST rate</strong> - Incorrect HSN classification on imported goods</li></ul>
                <p>Under <strong>Section 112(1)</strong>, the appeal must be filed within <strong>3 months</strong>. For orders before 1 April 2026, importers may file until <strong>30 June 2026</strong>.</p>
            </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">6 GSTAT Services for Import IGST and Valuation Disputes</h2>
                <div class="table-responsive-wrapper"><table><thead><tr><th>Service</th><th>What We Do</th></tr></thead><tbody>
                    <tr><td>Import IGST Dispute Assessment</td><td>Analyse the IGST valuation demand, identify grounds of appeal based on customs valuation methodology, and calculate pre-deposit under Section 112(8)</td></tr>
                    <tr><td>Grounds of Appeal for Customs-GST Interface</td><td>Structure legal arguments on Section 3(7) CTA computation, anti-dumping duty inclusion, Bill of Entry value, and transfer pricing adjustments</td></tr>
                    <tr><td>Form GST APL-05 E-Filing</td><td>Complete electronic filing on <a href="https://efiling.gstat.gov.in" target="_blank" rel="noopener">efiling.gstat.gov.in</a> with customs documentation and supporting evidence</td></tr>
                    <tr><td>Stay of Recovery Under Section 112(9)</td><td>Secure automatic stay against recovery of additional IGST demand during appeal proceedings</td></tr>
                    <tr><td>Hearing Representation</td><td>Advocate representation before all 31 State Benches and the Principal Bench at New Delhi</td></tr>
                    <tr><td>High Court Writ Under Article 226</td><td>Alternative remedy where GSTAT appeal window has expired or jurisdictional issues arise</td></tr>
                </tbody></table></div>
            </div>
    </div>
</section>

<!-- SECTION 7: STEP-BY-STEP PROCESS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> Our Process</span>
            <h2 class="section-title" style="margin-bottom:8px;">7 Steps to File a GSTAT Appeal for Import IGST Valuation Disputes</h2>
            <p style="color:var(--text-muted);font-size:15px;">Our end-to-end process for importer GSTAT appeals under Section 112</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Review Impugned Order</h3><p class="step-description">Obtain the first appellate order relating to IGST valuation demand, customs reassessment, or anti-dumping duty stacking dispute.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Expert guidance</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance ensured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="30" x2="85" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="42" x2="75" y2="42" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Order Reviewed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card" style="direction:rtl"><div class="step-content" style="direction:ltr"><span class="step-badge">Step 2</span><h3 class="step-title">Calculate Pre-Deposit</h3><p class="step-description">Compute 10% of disputed IGST under Section 112(8), verify Rs 20 crore cap, account for Section 107(6) amount already paid.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Expert guidance</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance ensured</span></div></div><div class="step-visual" style="direction:ltr"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="20" height="15" rx="2" fill="#F5A623" opacity="0.3"/><rect x="60" y="25" width="20" height="15" rx="2" fill="#F5A623" opacity="0.3"/><rect x="35" y="45" width="20" height="15" rx="2" fill="#14365F" opacity="0.2"/><rect x="60" y="45" width="20" height="15" rx="2" fill="#14365F" opacity="0.2"/></svg></div><span class="illustration-label">Pre-Deposit Computed</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Pay Pre-Deposit</h3><p class="step-description">Pay via GST portal challan or Bharatkosh and obtain payment proof.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Expert guidance</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance ensured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="20" width="80" height="50" rx="8" fill="#E8F5E9" stroke="#1B7A3A" stroke-width="1.5"/><circle cx="50" cy="45" r="12" fill="none" stroke="#1B7A3A" stroke-width="1.5"/><text x="50" y="49" text-anchor="middle" font-size="12" font-weight="700" fill="#1B7A3A">&#8377;</text></svg></div><span class="illustration-label">Payment Made</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card" style="direction:rtl"><div class="step-content" style="direction:ltr"><span class="step-badge">Step 4</span><h3 class="step-title">Prepare Grounds of Appeal</h3><p class="step-description">Draft grounds focusing on customs valuation errors, Section 3(7) CTA computation, anti-dumping duty inclusion analysis, and HC judgments.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Expert guidance</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance ensured</span></div></div><div class="step-visual" style="direction:ltr"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="34" x2="80" y2="34" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="44" x2="75" y2="44" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Grounds Drafted</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Prepare Offline Utility JSON</h3><p class="step-description">Download GSTAT offline utility, pre-fill appeal details, generate JSON file for upload.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Expert guidance</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance ensured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="45" text-anchor="middle" font-size="11" font-weight="700" fill="#14365F">{}</text><text x="60" y="60" text-anchor="middle" font-size="7" fill="#666">JSON</text></svg></div><span class="illustration-label">JSON Prepared</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card" style="direction:rtl"><div class="step-content" style="direction:ltr"><span class="step-badge">Step 6</span><h3 class="step-title">File Form GST APL-05</h3><p class="step-description">File on efiling.gstat.gov.in within 3-month limitation. Upload customs documents (PDF, max 50 MB), digitally sign.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Expert guidance</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance ensured</span></div></div><div class="step-visual" style="direction:ltr"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="4" fill="#14365F"/><rect x="30" y="18" width="60" height="38" rx="2" fill="#F0F4F8"/><line x1="40" y1="28" x2="78" y2="28" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="40" y1="36" x2="70" y2="36" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Appeal Filed</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Receive Filing Number</h3><p class="step-description">Filing number via SMS and email. Serve notice on respondent. Apply for stay under Section 112(9).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Expert guidance</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance ensured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="20" width="80" height="50" rx="8" fill="#E8F5E9" stroke="#1B7A3A" stroke-width="1.5"/><path d="M45 45l10 10 20-20" stroke="#1B7A3A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Hearing Ready</span><span class="step-number-large">07</span></div></div></div>

        </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Importer GSTAT Appeal Document Checklist</h2>
                <ul><li>Certified copy of impugned order from Commissioner (Appeals)</li><li>Original customs assessment/reassessment order</li><li>Form GST APL-01 and Form GST APL-03 from first appeal stage</li><li>Challan of pre-deposit payment under <strong>Section 112(8)</strong></li><li>Grounds of appeal with specific IGST valuation dispute details</li><li>Power of attorney or vakalatnama</li><li><strong>Bill of Entry</strong> and customs duty computation worksheets</li><li>Anti-dumping duty notifications and IGST computation workpapers</li><li>Customs valuation assessment orders and related party transaction evidence</li><li>Transfer pricing documentation (for related party imports)</li><li>Supporting CBIC circulars and HC/SC judgments on customs valuation</li><li>GSTIN and tax liability statements</li></ul>
                <p style="margin-top:16px;">Download checklist - email <a href="mailto:sales@patronaccounting.com">sales@patronaccounting.com</a> or call <a href="tel:+919459456700">+91 945 945 6700</a>.</p>
            </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">4 Common Challenges in Importer GSTAT Appeals</h2>
                <h3>Customs Valuation Reassessment Leading to IGST Demand</h3><p>When customs authorities reassess the transaction value upward under the Customs Valuation Rules 2007, the IGST liability under <strong>Section 3(7) Customs Tariff Act</strong> increases proportionally. In our experience, these reassessments often rely on contemporaneous import data without adequately considering the specific terms of the transaction.</p>
                <h3>Anti-Dumping Duty and IGST Stacking</h3><p>When anti-dumping duty under <strong>Section 9A CTA</strong> is added to the assessable value for IGST computation, it creates a cascading effect. Subham Jhunjhunwala notes that many importers are unaware that IGST is levied on the anti-dumping duty itself, significantly increasing the total import cost and creating disputes on the correct computation methodology.</p>
                <h3>Bill of Entry Amendment Disputes</h3><p>Amendments to Bill of Entry under <strong>Section 149 Customs Act 1962</strong> can change the assessable value, classification, or duty rates, directly impacting IGST liability. These amendments often occur after clearance, creating retrospective demand situations.</p>
                <h3>Transfer Pricing Adjustments on Related Party Imports</h3><p>When customs authorities adjust transaction value based on transfer pricing rules under <strong>Rule 12 of Customs Valuation Rules 2007</strong> for related party imports, the resulting IGST increase can be substantial - particularly for multinational companies with significant intra-group trade.</p>
                <div class="highlight-box" style="background:var(--blue-lighter);border-radius:var(--radius-md);padding:20px 24px;margin-top:24px;"><p style="margin:0;font-size:14px;"><strong>Illustrative Scenario:</strong> An import trading company with annual imports of approximately Rs 300 crore received a customs valuation reassessment resulting in an additional IGST demand of Rs 1.5 crore. The Commissioner (Appeals) upheld the demand partially at Rs 1.2 crore. Patron Accounting's GSTAT team calculated the pre-deposit at Rs 12 lakh (10% of Rs 1.2 crore disputed IGST), prepared detailed grounds challenging the valuation methodology, and filed Form GST APL-05 within the limitation period - resulting in admission with automatic stay under Section 112(9), protecting Rs 1.08 crore of working capital.</p></div>
            </div>
    </div>
</section>

<!-- SECTION 10: FEES + TIMELINE -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Pre-Deposit and Engagement Terms for Import IGST Disputes</h2>
                <div class="table-responsive-wrapper"><table class="table-amount"><thead><tr><th>Component</th><th>Amount (Rs)</th><th>Basis</th></tr></thead><tbody>
                    <tr><td>IGST valuation demand</td><td>1,50,00,000</td><td>Customs reassessment from Commissioner Appeals</td></tr>
                    <tr><td>Of which: disputed IGST</td><td>1,20,00,000</td><td>IGST component of customs valuation demand</td></tr>
                    <tr><td>Pre-deposit S.107(6) - already paid</td><td><strong>12,00,000</strong></td><td>10% of disputed IGST</td></tr>
                    <tr><td>Pre-deposit S.112(8) - payable now</td><td><strong>12,00,000</strong></td><td>10% additional</td></tr>
                    <tr><td>Total deposited both stages</td><td><strong>24,00,000</strong></td><td>20% of disputed IGST</td></tr>
                    <tr><td>Balance - stayed under S.112(9)</td><td><strong>1,26,00,000</strong></td><td>Automatic stay</td></tr>
                </tbody></table></div>
                <p style="font-size:13px;color:var(--text-muted);margin:12px 0;"><em>Illustrative figures. Finance Act 2024 caps S.112(8) pre-deposit at Rs 20 crore CGST.</em></p>
                <div class="table-responsive-wrapper" style="margin-top:16px;"><table class="table-amount"><thead><tr><th>Fee</th><th>Amount</th></tr></thead><tbody>
                    <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 24,999 (Exl GST and Govt. Charges)</td></tr>
                </tbody></table></div>
                <p style="font-size:13px;color:var(--text-muted);margin-top:12px;"><em>All fees listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on volume and complexity of work.</em></p>
                <div style="background:var(--orange-lighter);border-radius:var(--radius-md);padding:20px 24px;margin-top:24px;text-align:center;">
                    <p style="margin:0 0 12px 0;font-weight:700;color:var(--blue);font-size:16px;">Calculate Your Pre-Deposit - Speak to Our GSTAT Team</p>
                    <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
                        <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:12px 24px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:14px;text-decoration:none;">&#128222; Call +91 945 945 6700</a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GSTAT%20Appeal%20Importers%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:12px 24px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:14px;text-decoration:none;" rel="noopener">&#128172; WhatsApp Us</a>
                    </div></div>
            </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS / WHY PATRON -->
<section class="content-section" id="benefits-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Why Choose Patron Accounting for Importer GSTAT Appeals</h2>
                <div class="features-grid">
                    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Customs &amp; GST Compliance Support</h3><p>Subham Jhunjhunwala, working with the firm's CA and CS team, provides unique depth for IGST on imports and customs valuation disputes.</p></div>
                    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Firm-Backed Support</h3><p>Backed by Patron Accounting's ICAI and ICSI registered CA and CS team.</p></div>
                    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3>10,000+ Businesses Served</h3><p>4.9 Google rating, 15+ years. Pan-India GSTAT representation across Principal and State Benches.</p></div>
                    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pan-India Import Coverage</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Serving importers in Mumbai (trading hub), Chennai (auto/pharma), Delhi (Customs HQ), Pune (manufacturing).</p></div>
                </div>
            </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section" id="social-proof-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Trusted by Importers Across India</h2>
                <div class="stats-proof-row" style="display:flex;gap:24px;flex-wrap:wrap;margin-bottom:24px;"><div style="font-size:14px;"><strong style="font-size:24px;color:var(--blue);">10,000+</strong><br>Businesses Served</div><div style="font-size:14px;"><strong style="font-size:24px;color:var(--orange);">4.9</strong><br>Google Rating</div><div style="font-size:14px;"><strong style="font-size:24px;color:var(--blue);">15+</strong><br>Years Experience</div></div>
                <blockquote style="border-left:4px solid var(--orange);padding-left:20px;margin:20px 0;font-style:italic;color:var(--text-secondary);">"Patron Accounting's GSTAT team understood our IGST valuation exposure immediately. Subham Jhunjhunwala's expertise in Customs and GST was exactly what we needed for our anti-dumping duty dispute." - CFO, Import Trading Company</blockquote>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron Accounting provides GSTAT representation for importers across all benches - including Mumbai (trading hub), Chennai (auto/pharma imports), New Delhi (DGFT/Customs HQ), and Pune (manufacturing imports).</p>
            </div>
    </div>
</section>

<!-- SECTION 13: COMPARISON TABLE -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">GSTAT Appeal vs High Court Writ for Import IGST Disputes</h2>
                <div class="table-responsive-wrapper"><table class="table-comparison"><thead><tr><th>Feature</th><th>GSTAT Appeal (S.112)</th><th>HC Writ (Art.226)</th><th>SC SLP</th></tr></thead><tbody>
                    <tr><td>When to Use</td><td>Adverse order on IGST valuation/customs interface within 3 months</td><td>Jurisdictional error, natural justice violation, GSTAT time-barred</td><td>After HC final order</td></tr>
                    <tr><td>Pre-Deposit</td><td>10% under S.112(8)</td><td>No pre-deposit</td><td>No pre-deposit</td></tr>
                    <tr><td>Timeline</td><td>Variable - bench dependent</td><td>6-18 months</td><td>12-36 months</td></tr>
                    <tr><td>Key Point</td><td>Primary remedy - exhaust before writ</td><td>Not a substitute for GSTAT</td><td>Last resort</td></tr>
                </tbody></table></div>
                <p style="margin-top:16px;">A GSTAT appeal under <strong>Section 112</strong> is the appropriate remedy for import IGST disputes where the first appellate authority has passed an order on merits - unlike a High Court writ under <strong>Article 226</strong>, which lies only for jurisdictional errors or where the GSTAT remedy is time-barred beyond 4 months.</p>
            </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->
<section class="content-section" id="related-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Related Services</h2>
                <p>Patron Accounting offers comprehensive GST and customs support for importers:</p>
                <ul><li><a href="/gstat-appeal-filing">GSTAT Appeal Filing Services in India</a> - National hub</li><li><a href="/gstat-pre-deposit-calculation">GSTAT Pre-Deposit Calculation and Advisory</a></li><li><a href="/gst-returns">GST Return Filing Services</a></li><li><a href="/gst-notice">GST Notice Response Services</a></li><li><a href="/gst-registration">GST Registration Services</a></li></ul>
            </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK / STATUTORY REFERENCE -->
<section class="content-section" id="legal-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">GSTAT Legal Framework for Import IGST Valuation Disputes</h2>
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Section / Reference</th><th>Key Requirement</th></tr></thead><tbody>
                    <tr><td>GSTAT Constitution</td><td>Section 109 CGST Act 2017</td><td>Tribunal constituted by Central Government</td></tr>
                    <tr><td>Appeal to GSTAT</td><td><a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Section 112(1) CGST Act</a></td><td>3 months from order communication</td></tr>
                    <tr><td>Pre-Deposit</td><td>Section 112(8) CGST Act</td><td>10% of disputed tax - cap Rs 20 crore CGST</td></tr>
                    <tr><td>Stay of Recovery</td><td>Section 112(9) CGST Act</td><td>Automatic on filing with pre-deposit</td></tr>
                    <tr><td>IGST on Imports</td><td><a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">Section 3(7) Customs Tariff Act 1975</a></td><td>IGST on assessable value plus duties</td></tr>
                    <tr><td>IGST Levy on Imports</td><td>Section 5(1) IGST Act 2017</td><td>IGST on goods imported into India</td></tr>
                    <tr><td>Import Valuation</td><td>Section 2(10) IGST Act</td><td>Value of imported goods for IGST purposes</td></tr>
                    <tr><td>Anti-Dumping Duty</td><td>Section 9A Customs Tariff Act</td><td>Additional duty included in IGST computation base</td></tr>
                    <tr><td>Bill of Entry</td><td>Section 46 Customs Act 1962</td><td>Import declaration with assessable value</td></tr>
                    <tr><td>BoE Amendment</td><td>Section 149 Customs Act 1962</td><td>Amendment affecting assessable value and IGST</td></tr>
                    <tr><td>Customs Valuation</td><td>Customs Valuation Rules 2007</td><td>Determination of assessable value for imports</td></tr>
                    <tr><td>E-filing Portal</td><td><a href="https://efiling.gstat.gov.in" target="_blank" rel="noopener">efiling.gstat.gov.in</a></td><td>Form GST APL-05 for all GSTAT appeals</td></tr>
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
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GSTAT Appeal: Importers',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the pre-deposit for a GSTAT appeal on import IGST valuation?</h3>
                        <div class="faq-expanded__a"><p>The pre-deposit under <strong>Section 112(8)</strong> is <strong>10% of the disputed IGST</strong>, capped at Rs 20 crore CGST. For import IGST disputes, the disputed amount is the additional IGST arising from customs valuation reassessment. Payment triggers automatic stay under Section 112(9).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the time limit to file a GSTAT appeal?</h3>
                        <div class="faq-expanded__a"><p><strong>3 months</strong> from date of communication under Section 112(1). Condonation up to 1 additional month under Section 112(2). For orders before 1 April 2026, deadline extends to <strong>30 June 2026</strong>.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What happens if I miss the deadline?</h3>
                        <div class="faq-expanded__a"><p>Beyond 4 months the tribunal remedy is permanently lost. The only recourse is a <strong>writ petition under Article 226</strong>.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I get stay of recovery after filing?</h3>
                        <div class="faq-expanded__a"><p>Yes - <strong>Section 112(9)</strong> provides automatic stay once the appeal is admitted with confirmed pre-deposit. This protects importer working capital during proceedings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How does customs valuation affect IGST on imports?</h3>
                        <div class="faq-expanded__a"><p>IGST under <strong>Section 3(7) Customs Tariff Act</strong> is levied on assessable value plus customs duties. When customs reassesses value upward, IGST increases proportionally, creating the demand that can be challenged at GSTAT.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is anti-dumping duty and IGST stacking?</h3>
                        <div class="faq-expanded__a"><p>When anti-dumping duty under <strong>Section 9A CTA</strong> is added to the IGST computation base, IGST is levied on the anti-dumping duty itself - creating a cascading effect that significantly increases total import cost.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can Bill of Entry amendments affect IGST liability?</h3>
                        <div class="faq-expanded__a"><p>Yes. Amendments under <strong>Section 149 Customs Act 1962</strong> can change assessable value, classification, or duty rates, directly impacting IGST. Disputes from such amendments are appealable to GSTAT after first appeal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is transfer pricing adjustment a ground for IGST dispute?</h3>
                        <div class="faq-expanded__a"><p>Yes. When customs adjusts transaction value based on transfer pricing rules under <strong>Rule 12 CVR 2007</strong> for related party imports, the resulting IGST increase can be challenged at GSTAT through the GST appellate route.</p></div>
                    </div>
                </div>
            </div>

            
        <div class="highlight-box" style="background:var(--blue-lighter);border-radius:var(--radius-md);padding:24px;margin-top:32px;">
    <h3 style="color:var(--blue);margin-bottom:16px;">Quick Answers</h3>
    <div class="qa-grid" style="display:grid;grid-template-columns:repeat(2,1fr);gap:16px;">
        <div><strong>GSTAT pre-deposit percentage?</strong><br><span style="color:var(--text-secondary);font-size:14px;">10% of disputed IGST under Section 112(8), capped at Rs 20 crore CGST.</span></div>
        <div><strong>GSTAT appeal deadline?</strong><br><span style="color:var(--text-secondary);font-size:14px;">3 months from order under Section 112(1). Max 4 months with condonation.</span></div>
        <div><strong>How does customs valuation affect IGST?</strong><br><span style="color:var(--text-secondary);font-size:14px;">IGST under S.3(7) CTA is levied on assessable value plus duties. Higher value = higher IGST.</span></div>
        <div><strong>Is stay of recovery automatic?</strong><br><span style="color:var(--text-secondary);font-size:14px;">Yes - Section 112(9) auto stay on filing with pre-deposit.</span></div>
        <div><strong>Which form for GSTAT appeal?</strong><br><span style="color:var(--text-secondary);font-size:14px;">Form GST APL-05 on efiling.gstat.gov.in.</span></div>
        <div><strong>What is anti-dumping IGST stacking?</strong><br><span style="color:var(--text-secondary);font-size:14px;">IGST levied on anti-dumping duty under S.9A CTA - cascading effect increasing import cost.</span></div>
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
                <h2 style="color:var(--orange);font-weight:800;">3-Month GSTAT Deadline for Import IGST Disputes - Act Now</h2>
                <div class="highlight-box" style="background:#fff;border:2px solid var(--orange);border-radius:var(--radius-md);padding:20px 24px;margin-bottom:20px;"><p style="margin:0;font-weight:700;color:var(--blue);">GSTAT appeals must be filed within 3 months of order communication under Section 112(1). Condonation up to 1 additional month. Beyond 4 months, the tribunal remedy is permanently lost for your import IGST valuation dispute.</p></div>
                <p><strong>Contact us:</strong> <a href="tel:+919459456700">+91 945 945 6700</a> | <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GSTAT%20Appeal%20Importers%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp Us</a></p>
            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section conclusion-dark" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">The 3-Month GSTAT Deadline Is Running - Contact Us for Import IGST Disputes</h2>
            <div class="content-text" style="text-align:left;">
                <p>GSTAT appeal for importer IGST and valuation disputes under Section 112 CGST Act 2017 provides the dedicated judicial forum that importers need - a specialist tribunal to review and reverse adverse orders on IGST valuation demands, anti-dumping duty stacking, Bill of Entry amendment disputes, and transfer pricing adjustments that directly impact import costs and cash flow.</p>
                <p>Patron Accounting's GSTAT practice is supported by Subham Jhunjhunwala, CA Finalist and Accounting &amp; Tax Professional, working alongside the firm's CA and CS team on every GSTAT engagement. The 3-month limitation period and 10% pre-deposit make timely expert action essential.</p>
            <div class="conclusion-cta-row" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GSTAT%20Appeal%20Importers%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=GSTAT%20Importer%20IGST%20Valuation%20Appeal%20-%20Enquiry&body=Hello%2C%20I%20just%20visited%20your%20GSTAT%20Appeal%20Importers%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p>This page is reviewed every 3 months or when triggered by: Changes to IGST on imports provisions, customs valuation rules, anti-dumping duty notifications, Finance Act amendments to Section 112, GSTAT portal changes, significant HC/SC judgments on import IGST disputes, or changes to Customs-GST interface provisions.</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
