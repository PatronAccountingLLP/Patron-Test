@extends('layouts.service-app')

@section('meta')
    <title>Healthcare GSTAT Appeal - GST Exemption | Patron</title>
    <meta name="description" content="GSTAT appeal for healthcare ITC reversal disputes under Section 17(5) CGST Act. 10% pre-deposit, 3-month deadline. CA-led appeal support. Patron Accounting.">
    <link rel="canonical" href="/gstat-appeal-healthcare">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Healthcare GSTAT Appeal - GST Exemption | Patron">
    <meta property="og:description" content="GSTAT appeal for healthcare ITC reversal disputes under Section 17(5) CGST Act. 10% pre-deposit, 3-month deadline. CA-led appeal support. Patron Accounting.">
    <meta property="og:url" content="/gstat-appeal-healthcare">
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
    <meta name="twitter:title" content="Healthcare GSTAT Appeal - GST Exemption | Patron">
    <meta name="twitter:description" content="GSTAT appeal for healthcare ITC reversal disputes under Section 17(5) CGST Act. 10% pre-deposit, 3-month deadline. CA-led appeal support. Patron Accounting.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Healthcare GSTAT Appeal: GST Exemption Disputes",
          "description": "GSTAT appeal for healthcare ITC reversal disputes under Section 17(5) CGST Act. 10% pre-deposit, 3-month deadline. CA-led appeal support. Patron Accounting.",
          "url": "https://www.patronaccounting.com/gstat-appeal-healthcare",
          "serviceType": "Healthcare GSTAT Appeal: GST Exemption Disputes",
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
            "url": "https://www.patronaccounting.com/gstat-appeal-healthcare",
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
              "name": "Healthcare GSTAT Appeal: GST Exemption Disputes",
              "item": "https://www.patronaccounting.com/gstat-appeal-healthcare"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the pre-deposit for a GSTAT appeal on healthcare exemption rejection?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The pre-deposit is 10% of the remaining disputed tax under Section 112(8) CGST Act, capped at Rs 20 crore CGST per Finance Act 2024. This is in addition to 10% already paid under Section 107(6). Total across both stages equals 20% of disputed tax."
              }
            },
            {
              "@type": "Question",
              "name": "What is the time limit to file a GSTAT appeal?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "3 months from communication of the first appellate order under Section 112(1) CGST Act 2017 . Condonation up to 1 additional month under Section 112(2). For orders before 1 April 2026, staggered deadline is 30 June 2026."
              }
            },
            {
              "@type": "Question",
              "name": "Can the GSTAT appeal deadline be extended beyond 4 months?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No - under Section 112(2) CGST Act , the tribunal may condone delay up to 1 additional month beyond the 3-month limit. Beyond 4 months total, the right to appeal is permanently lost. Only a High Court writ under Article 226 remains."
              }
            },
            {
              "@type": "Question",
              "name": "Are medicines supplied to in-patients exempt from GST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes - the AAR Tamil Nadu in Maha Critical Speciality Division (2025) ruled that medicines and consumables for in-patients constitute composite supply of healthcare services , exempt under Entry 74 of Notification 12/2017-CT(R). CBIC Circular No. 32/06/2018-GST confirms this treatment."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I miss the GSTAT appeal deadline?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Missing the 3-month deadline under Section 112(1) - even by a single day beyond the 4-month outer limit - means permanently losing the tribunal remedy. The demand becomes final, with only a High Court writ under Article 226 remaining."
              }
            },
            {
              "@type": "Question",
              "name": "Can pharmaceutical companies claim ITC on free drug samples?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Currently, ITC on free drug samples must be reversed under Section 17(5)(h) CGST Act . The GST Council was reported considering a clarification to allow ITC on professional samples. Until official notification, the reversal obligation remains."
              }
            },
            {
              "@type": "Question",
              "name": "What is the inverted duty issue for pharma manufacturers?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "APIs and raw materials attract 18% GST while finished medicines are at 5%, causing ITC accumulation. Refund claims under Section 54(3) CGST Act are frequently contested, with multiple High Courts ruling in favour of allowing refund."
              }
            },
            {
              "@type": "Question",
              "name": "Can I get stay of recovery after filing a GSTAT appeal?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes - under Section 112(9) CGST Act , recovery of the balance disputed amount is automatically stayed during the GSTAT appeal once pre-deposit under Section 112(8) is confirmed. This protects working capital from coercive recovery."
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
                        GSTAT Appeal for Healthcare - GST Exemption Disputes in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Dispute Types:</span> Healthcare exemption denial under Notification 12/2017-CT(R), drug classification, and pharma ITC disputes</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Pre-Deposit:</span> 10% of remaining disputed tax under Section 112(8) CGST Act - capped at Rs 20 crore</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Limitation:</span> 3-month deadline from order date under Section 112(1) CGST Act 2017</p>
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
                        <a href="mailto:sales@patronaccounting.com?subject=GSTAT%20Appeal%20-%20Healthcare%20GST%20Exemption%20Dispute&body=Hello%2C%0A%0AI%20need%20help%20with%20a%20GSTAT%20appeal%20for%20a%20healthcare%20GST%20exemption%20dispute.%20Please%20contact%20me.%0A%0ARegards" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20need%20help%20with%20a%20GSTAT%20appeal%20for%20a%20healthcare%20GST%20exemption%20dispute.%20Please%20contact%20me." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GSTAT Appeal for Healthcare',
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
    <p style="color:var(--text-secondary);font-size:15px;line-height:1.7;"><strong>1.</strong> Identify healthcare exemption denial or drug classification dispute from first appellate order. <strong>2.</strong> Pay 10% pre-deposit under Section 112(8) - capped at Rs 20 crore. <strong>3.</strong> File Form GST APL-05 on GSTAT portal within 3 months of order date.</p>
</div>
<div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody>
    <tr><td>Dispute Types</td><td>Healthcare exemption (Notification 12/2017 Entry 74), drug classification, composite supply, pharma ITC</td></tr>
    <tr><td>Governing Law</td><td>Section 112, CGST Act 2017 read with Notification 12/2017-CT(R)</td></tr>
    <tr><td>Pre-Deposit</td><td>10% of disputed tax under Section 112(8) - cap Rs 20 crore CGST</td></tr>
    <tr><td>Limitation</td><td>3 months from order under Section 112(1) - staggered deadline 30 June 2026</td></tr>
    <tr><td>Filing Portal</td><td><a href="https://efiling.gstat.gov.in" target="_blank" rel="noopener">efiling.gstat.gov.in</a> - Form GST APL-05</td></tr>
    <tr><td>Stay of Recovery</td><td>Automatic under Section 112(9) on filing with pre-deposit</td></tr>
    <tr><td>Professional Fees</td><td>Starting from INR 24,999 (Excl. GST and Govt. Charges)</td></tr>
</tbody></table></div>
<p style="font-size:13px;color:var(--text-muted);margin-top:8px;"><em>All fees listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on volume and complexity of work.</em></p>
<p>Healthcare institutions facing GST exemption denial, drug classification disputes, or pharmaceutical ITC reversal demands now have a dedicated appellate remedy through the GSTAT. <strong>GSTAT appeal for healthcare GST exemption disputes</strong> under Section 112 CGST Act 2017 requires specialist representation combining knowledge of <strong>Notification 12/2017-CT(R) Entry 74</strong> boundaries, composite supply classification, and pharma ITC provisions with tribunal litigation strategy.</p>
<p>Patron Accounting's GSTAT practice addresses the full spectrum of healthcare exemption disputes - from in-patient composite supply classification to drug vs. cosmetic HSN code disputes and inverted duty structure refund denials.</p>
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
                <h2 class="section-title">What Is a Healthcare GST Exemption Dispute</h2>
<div class="highlight-box" style="background:var(--blue-lighter);border-left:4px solid var(--blue);padding:20px 24px;border-radius:0 var(--radius-md) var(--radius-md) 0;margin-bottom:24px;"><p style="font-size:15px;color:var(--text-primary);line-height:1.7;margin:0;"><strong>Definition:</strong> A healthcare exemption dispute under GST arises when a clinical establishment, hospital, diagnostic centre, or pharmaceutical company contests the denial of GST exemption claimed under <strong>Notification No. 12/2017-CT(R) Entry 74</strong> on healthcare services, or faces demands on services classified as falling outside the exemption boundary.</p></div>
<div class="content-text">
    <p>Under <strong>Notification No. 12/2017-Central Tax (Rate)</strong> dated 28 June 2017, <strong>Entry 74</strong>, healthcare services provided by a clinical establishment, an authorised medical practitioner, or para-medics are exempt from GST. However, the boundary between exempt healthcare services and taxable ancillary services is frequently disputed. Drug vs. cosmetic classification disputes, ITC reversal on free samples under <strong>Section 17(5)(h) CGST Act</strong>, and inverted duty structure refund denials on pharmaceutical inputs are among the most common healthcare sector disputes reaching the appellate stage.</p>
    <p>GSTAT, unlike the Commissioner (Appeals) under <strong><a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/acts/2017_CGST_act/active/chapter18/section112_v1.00.html" target="_blank" rel="noopener">Section 107 CGST Act</a></strong>, is a judicial body - not a departmental authority - making GSTAT the first genuinely independent forum in the GST appellate hierarchy for hospitals and pharmaceutical companies contesting exemption boundary disputes.</p>
</div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder" style="background:var(--gray-50);border-radius:var(--radius-lg);padding:40px;text-align:center;min-height:300px;display:flex;flex-direction:column;align-items:center;justify-content:center;">
    <svg viewBox="0 0 200 160" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:180px;margin-bottom:16px;">
        <rect x="40" y="10" width="120" height="80" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <path d="M80 30h40M100 30v40" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/>
        <circle cx="100" cy="50" r="15" fill="none" stroke="#14365F" stroke-width="1" opacity="0.2"/>
        <circle cx="50" cy="130" r="22" fill="#E8712C" opacity="0.1" stroke="#E8712C" stroke-width="1"/>
        <text x="50" y="134" font-size="7" fill="#E8712C" font-weight="600" text-anchor="middle">Entry 74</text>
        <circle cx="150" cy="130" r="22" fill="#14365F" opacity="0.1" stroke="#14365F" stroke-width="1"/>
        <text x="150" y="134" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle">Taxable</text>
        <line x1="72" y1="130" x2="128" y2="130" stroke="#14365F" stroke-width="1" stroke-dasharray="4 2"/>
    </svg>
    <span class="illustration-badge" style="display:inline-block;background:var(--blue);color:#fff;padding:6px 16px;border-radius:50px;font-size:12px;font-weight:700;">Healthcare GST Exemption Boundary</span>
</div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO NEEDS THIS -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Who Should File a GSTAT Appeal for Healthcare GST Disputes</h2>
<div class="content-text">
    <p>Healthcare entities that have received an adverse order from the Commissioner (Appeals) under Section 107 CGST Act should consider filing a GSTAT appeal. Common dispute types include:</p>
    <ul>
        <li><strong>Hospitals and clinical establishments</strong> - Denial of exemption under Entry 74 of Notification 12/2017-CT(R), composite supply disputes on in-patient medicines and consumables</li>
        <li><strong>Pharmaceutical companies</strong> - Drug vs. cosmetic classification disputes (Chapter 30 vs. Chapter 33), ITC reversal on free samples under Section 17(5)(h), inverted duty structure refund denials</li>
        <li><strong>Diagnostic centres and pathology labs</strong> - Healthcare service exemption boundary disputes, outsourced testing classification</li>
        <li><strong>Medical device manufacturers</strong> - HSN classification disputes, ITC on capital goods used in exempt healthcare</li>
        <li><strong>Pharmacy chains</strong> - In-patient vs. out-patient supply classification, composite vs. mixed supply treatment</li>
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
                <h2 class="section-title">Our 6 GSTAT Services for Healthcare GST Disputes</h2>
<div class="table-responsive-wrapper"><table><thead><tr><th>Service</th><th>What We Do</th></tr></thead><tbody>
    <tr><td>Healthcare Exemption Assessment</td><td>Analysis of exemption denial under Notification 12/2017-CT(R) Entry 74 and calculation of exact pre-deposit under Section 112(8)</td></tr>
    <tr><td>Grounds of Appeal and Filing</td><td>Comprehensive grounds addressing composite supply classification, drug HSN code, free sample ITC reversal, and electronic filing on <a href="https://efiling.gstat.gov.in" target="_blank" rel="noopener">GSTAT portal</a></td></tr>
    <tr><td>Stay of Recovery under Section 112(9)</td><td>Securing automatic stay of recovery of remaining disputed amount during GSTAT proceedings</td></tr>
    <tr><td>Hearing Representation</td><td>Advocacy before Principal Bench and all 31 State Benches by the Patron team led by Subham Jhunjhunwala</td></tr>
    <tr><td>Drug Classification and Pharma ITC Strategy</td><td>Specialist advisory on HSN classification (Ch.30 vs. Ch.33), composite supply arguments, and inverted duty refund strategy</td></tr>
    <tr><td>High Court Writ under Article 226</td><td>Alternative remedy where GSTAT appeal window has expired or jurisdictional issues arise for healthcare disputes</td></tr>
</tbody></table></div>
            </div>
    </div>
</section>

<!-- SECTION 7: STEP-BY-STEP PROCESS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> Our Process</span>
            <h2 class="section-title">7 Steps to File a GSTAT Appeal for Healthcare GST Disputes</h2>
<p style="color:var(--text-muted);font-size:15px;max-width:700px;margin:0 auto;">Our step-by-step process for filing a GSTAT appeal against healthcare exemption denial or classification orders</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Obtain and Review the Appellate Order</h3><p class="step-description">Get the certified copy of the Commissioner (Appeals) order. Review the specific exemption denial provisions - Entry 74 applicability, composite supply classification, or drug HSN code dispute.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Order analysis</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Provision review</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Order Reviewed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card" style="direction:rtl"><div class="step-content" style="direction:ltr"><span class="step-badge">Step 2</span><h3 class="step-title">Assess Grounds and Calculate Pre-Deposit</h3><p class="step-description">Identify appealable grounds and compute 10% of disputed tax under Section 112(8) - verify the Rs 20 crore cap and account for 10% already paid under Section 107(6).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10% calculation</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 20 crore cap</span></div></div><div class="step-visual" style="direction:ltr"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Pre-Deposit Computed</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Pay Pre-Deposit via GST Portal</h3><p class="step-description">Pay through Electronic Cash Ledger on the GST common portal. Obtain payment challan as proof for GSTAT filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cash Ledger only</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Challan proof</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Payment Done</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card" style="direction:rtl"><div class="step-content" style="direction:ltr"><span class="step-badge">Step 4</span><h3 class="step-title">Prepare Grounds of Appeal</h3><p class="step-description">Draft comprehensive grounds on Entry 74 exemption boundary, CBIC Circular No. 32/06/2018-GST (composite supply), drug classification evidence, and supporting HC precedents.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Entry 74 arguments</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CBIC circulars</span></div></div><div class="step-visual" style="direction:ltr"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Grounds Ready</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File Form GST APL-05 on GSTAT Portal</h3><p class="step-description">Complete offline utility, upload all documents in PDF on efiling.gstat.gov.in, and digitally sign within the 3-month limitation under Section 112(1).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-filing mandatory</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Digital signature</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Appeal Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card" style="direction:rtl"><div class="step-content" style="direction:ltr"><span class="step-badge">Step 6</span><h3 class="step-title">Serve Notice on Respondent</h3><p class="step-description">Serve notice of appeal on the jurisdictional tax authority and obtain GSTAT case number and acknowledgement via SMS and email.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notice served</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Case number</span></div></div><div class="step-visual" style="direction:ltr"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Notice Complete</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Attend Hearing and Secure Stay</h3><p class="step-description">Appear at admission hearing before the relevant GSTAT bench. Stay of recovery under Section 112(9) is automatic on confirmed pre-deposit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auto stay S.112(9)</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Hearing prep</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Stay Secured</span><span class="step-number-large">07</span></div></div></div>

        </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Healthcare GSTAT Appeal Document Checklist</h2>
<div class="content-text"><ul>
    <li>Certified copy of impugned order from Commissioner (Appeals)</li>
    <li>Original assessment/demand order from adjudicating authority</li>
    <li>Form GST APL-01 and Form GST APL-03 from first appeal stage</li>
    <li>Challan of pre-deposit payment under Section 112(8)</li>
    <li>Grounds of appeal with specific healthcare exemption dispute details</li>
    <li>Power of attorney or vakalatnama for authorised representative</li>
    <li>Notification 12/2017-CT(R) exemption analysis and composite supply classification workpapers</li>
    <li>Clinical establishment registration, CDSCO drug registration, and HSN classification documentation</li>
    <li>Drug licence, pharmacopeia references, and FSSAI registration (if classification dispute)</li>
    <li>In-patient records and billing data (for composite supply disputes)</li>
    <li>Supporting CBIC circulars (Circular No. 32/06/2018-GST) and HC/SC judgments</li>
</ul>
<p>Download our checklist - email <a href="mailto:sales@patronaccounting.com?subject=Healthcare%20GSTAT%20Appeal%20Checklist">sales@patronaccounting.com</a> or call <a href="tel:+919459456700">+91 945 945 6700</a>.</p></div>
            </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">4 Common Challenges in Healthcare GSTAT Appeals</h2>
<div class="content-text">
    <h3>In-Patient Composite Healthcare Supply Denial</h3>
    <p>Tax authorities frequently demand GST on medicines, implants, and consumables supplied to in-patients, treating them as separate taxable supplies rather than part of exempt composite healthcare. The AAR ruling in Maha Critical Speciality Division (2025) and <strong>CBIC Circular No. 32/06/2018-GST</strong> strongly support treating in-patient supplies as exempt composite supply under Entry 74.</p>
    <h3>Drug vs. Cosmetic Classification Disputes</h3>
    <p>Authorities frequently classify pharmaceutical products as cosmetics (18% GST) rather than medicaments (5% GST) based on HSN code interpretation under Chapter 30 vs. Chapter 33. Subham Jhunjhunwala notes that the dominant-purpose test - where a product's therapeutic claim supported by CDSCO registration should determine classification - is the key argument.</p>
    <h3>ITC Reversal on Free Drug Samples Under Section 17(5)(h)</h3>
    <p>Pharmaceutical companies face mandatory ITC reversal on free drug samples distributed to doctors. The GST Council's potential clarification to allow ITC on professional drug samples represents a significant development that may reshape this dispute category.</p>
    <h3>Inverted Duty Structure Refund Denial</h3>
    <p>Pharma manufacturers face inverted duty structures where APIs attract 18% GST while finished medicines are at 5%, causing ITC accumulation. Refund claims under Section 54(3) are frequently denied, though multiple High Courts have ruled in favour of taxpayers.</p>
    <div class="highlight-box" style="background:var(--orange-light);border-radius:var(--radius-md);padding:24px;margin-top:24px;">
        <h3 style="color:var(--blue);margin-bottom:12px;">Illustrative Scenario</h3>
        <p>A multi-speciality hospital chain with annual turnover of approximately Rs 300 crore received a demand of Rs 2.8 crore for GST on medicines and consumables supplied to in-patients, which the hospital had treated as exempt composite healthcare supply under <strong>Notification 12/2017-CT(R) Entry 74</strong>. The Commissioner (Appeals) upheld the demand. Patron Accounting's GSTAT team calculated the Section 112(8) pre-deposit and applied for stay of recovery under Section 112(9) - resulting in admission of the appeal with automatic stay, protecting working capital of over Rs 2.2 crore during proceedings.</p>
    </div>
</div>
            </div>
    </div>
</section>

<!-- SECTION 10: FEES + TIMELINE -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Pre-Deposit for Healthcare GSTAT Appeals - Section 112(8)</h2>
<div class="content-text">
    <p><strong>Statutory Basis:</strong> Section 112(8) CGST Act 2017, as amended by Finance (No. 2) Act, 2024. <strong>10% of disputed tax</strong>, in addition to 10% under Section 107(6). Cap: <strong>Rs 20 crore CGST</strong>.</p>
    <div class="table-responsive-wrapper"><table class="table-amount"><thead><tr><th>Component</th><th>Amount (Illustrative)</th><th>Basis</th></tr></thead><tbody>
        <tr><td>Total demand order</td><td>Rs 1,00,00,000</td><td>First appellate authority order</td></tr>
        <tr><td>Disputed tax (exemption denial)</td><td>Rs 80,00,000</td><td>Healthcare exemption denial / drug classification</td></tr>
        <tr><td>Interest + penalty</td><td>Rs 20,00,000</td><td>Interest under Section 50 + penalty</td></tr>
        <tr><td>S.107(6) - already paid</td><td>Rs 8,00,000</td><td>10% at first appellate stage</td></tr>
        <tr><td>S.112(8) - payable now</td><td>Rs 8,00,000</td><td>10% additional - cap Rs 20 crore</td></tr>
        <tr><td>Total deposited both stages</td><td>Rs 16,00,000</td><td>S.107(6) + S.112(8)</td></tr>
        <tr><td>Balance - stayed S.112(9)</td><td>Rs 84,00,000</td><td>Automatic stay on GSTAT admission</td></tr>
        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 24,999</td><td>Excl. GST and Govt. Charges</td></tr>
    </tbody></table></div>
    <p style="font-size:13px;color:var(--text-muted);"><em>All fees listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on volume and complexity of work.</em></p>
    <p>The 10% under <strong>Section 107(6)</strong> and the 10% under <strong>Section 112(8)</strong> are not independent - paying S.112(8) activates the <strong><a href="/gstat-pre-deposit-calculation">Section 112(9) stay of recovery</a></strong>, protecting the hospital or pharma company from coercive recovery during GSTAT proceedings.</p>
</div>
<div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
    <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;">&#128222; Calculate Your Pre-Deposit</a>
    <a href="https://wa.me/919459456700?text=Hello%2C%20I%20need%20help%20with%20a%20GSTAT%20appeal%20for%20a%20healthcare%20GST%20exemption%20dispute.%20Please%20contact%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;" rel="noopener">&#128172; WhatsApp Us</a>
</div>
            </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS / WHY PATRON -->
<section class="content-section" id="benefits-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Why Choose Patron Accounting for Healthcare GSTAT Appeals</h2>
<div class="features-grid">
    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Specialist Support</h3><p>Subham Jhunjhunwala, CA Finalist - accounting, taxation, and compliance support, working with the firm's CA and CS team.</p></div>
    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Healthcare Sector Focus</h3><p>Deep understanding of Notification 12/2017 Entry 74 boundaries, composite supply classification, drug HSN codes, and pharma ITC provisions.</p></div>
    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3>10,000+ Businesses</h3><p>4.9 Google rating, 15+ years of practice, offices in Pune, Mumbai, Delhi, and Gurugram.</p></div>
    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><h3>Deadline Protection</h3><p>Section 112(1) 3-month limitation does not pause. We ensure filing well within the window with complete documentation.</p></div>
    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pan-India Coverage</h3><p>Healthcare GSTAT appeals across Mumbai, Bangalore, Hyderabad, Chennai, and Delhi - all major healthcare industry jurisdictions.</p></div>
    <div class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Firm-Backed Support</h3><p>Backed by Patron Accounting's ICAI and ICSI registered CA and CS team.</p></div>
</div>
            </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section" id="social-proof-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Trusted by Healthcare Institutions</h2>
<div class="content-text">
    <blockquote style="border-left:4px solid var(--orange);padding:16px 24px;margin:24px 0;background:var(--gray-50);border-radius:0 var(--radius-md) var(--radius-md) 0;">
        <p style="font-style:italic;color:var(--text-primary);margin:0;">&#8220;The pre-deposit calculation saved us from depositing excess working capital. Patron Accounting's GSTAT team understood our healthcare exemption exposure immediately and structured the appeal methodically.&#8221;</p>
        <p style="font-size:13px;color:var(--text-muted);margin-top:8px;">- Finance Controller, Hospital Chain [Illustrative]</p>
    </blockquote>
    <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting provides GSTAT representation across the Principal Bench at New Delhi and State Benches including Mumbai, Bangalore, Hyderabad, and Chennai - covering all major healthcare and pharmaceutical industry jurisdictions.</p>
</div>
            </div>
    </div>
</section>

<!-- SECTION 13: COMPARISON TABLE -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">GSTAT Appeal vs High Court Writ for Healthcare GST Disputes</h2>
<div class="table-responsive-wrapper" style="overflow-x:auto;"><table class="table-comparison" style="min-width:560px;">
    <thead><tr><th>Forum</th><th>GSTAT Appeal (S.112)</th><th>High Court Writ (Art.226)</th><th>Supreme Court SLP</th></tr></thead><tbody>
        <tr><td>When to Use</td><td>Adverse order on exemption denial within 3 months</td><td>Jurisdictional error, natural justice, time-barred</td><td>After HC final order</td></tr>
        <tr><td>Pre-Deposit</td><td>10% under Section 112(8)</td><td>No pre-deposit (general)</td><td>No pre-deposit (general)</td></tr>
        <tr><td>Timeline</td><td>Variable - bench dependent</td><td>6-18 months</td><td>12-36 months</td></tr>
        <tr><td>Key Point</td><td>Primary remedy - exhaust before writ</td><td>Not substitute for GSTAT</td><td>Last resort</td></tr>
</tbody></table></div>
<p style="margin-top:16px;">A GSTAT appeal under Section 112 is the appropriate remedy where the first appellate authority has passed an order on merits rejecting a healthcare exemption claim - unlike a High Court writ under <strong>Article 226</strong> which lies only where there is a jurisdictional error, violation of natural justice, or where the GSTAT remedy is time-barred beyond the 4-month outer limit.</p>
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
    <li><a href="/gst-registration"><strong>GST Registration Services</strong></a></li>
    <li><a href="/gst-returns"><strong>GST Returns Filing</strong></a></li>
    <li><a href="/gst-notice"><strong>GST Notice Response Services</strong></a></li>
</ul></div>
            </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK / STATUTORY REFERENCE -->
<section class="content-section" id="legal-section">
    <div class="content-container">
        <div class="text-content">
                <h2 class="section-title">Healthcare GSTAT Legal Framework Reference</h2>
<div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Reference</th><th>Key Requirement</th></tr></thead><tbody>
    <tr><td>GSTAT Constitution</td><td>Section 109 CGST Act 2017</td><td>Tribunal constituted by Central Government</td></tr>
    <tr><td>Appeal to GSTAT</td><td><a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/acts/2017_CGST_act/active/chapter18/section112_v1.00.html" target="_blank" rel="noopener">Section 112(1) CGST Act</a></td><td>3 months from communication of order</td></tr>
    <tr><td>Pre-Deposit</td><td>Section 112(8) CGST Act</td><td>10% of disputed tax - cap Rs 20 crore CGST</td></tr>
    <tr><td>Stay of Recovery</td><td>Section 112(9) CGST Act</td><td>Automatic stay on filing with pre-deposit</td></tr>
    <tr><td>Healthcare Exemption</td><td>Notification 12/2017-CT(R) Entry 74</td><td>Healthcare services by clinical establishments, practitioners, para-medics</td></tr>
    <tr><td>Composite Supply</td><td>Section 2(30) CGST Act + <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a> Circular 32/06/2018</td><td>In-patient medicines as part of composite healthcare</td></tr>
    <tr><td>Free Samples ITC</td><td>Section 17(5)(h) CGST Act</td><td>ITC reversal on goods given as gifts/free samples</td></tr>
    <tr><td>Inverted Duty Refund</td><td>Section 54(3)(ii) CGST Act</td><td>ITC accumulation refund where input rate exceeds output rate</td></tr>
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
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GSTAT Appeal for Healthcare',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the pre-deposit for a GSTAT appeal on healthcare exemption rejection?</h3>
                        <div class="faq-expanded__a"><p>The pre-deposit is <strong>10% of the remaining disputed tax</strong> under Section 112(8) CGST Act, capped at <strong>Rs 20 crore CGST</strong> per Finance Act 2024. This is in addition to 10% already paid under Section 107(6). Total across both stages equals 20% of disputed tax.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the time limit to file a GSTAT appeal?</h3>
                        <div class="faq-expanded__a"><p>3 months from communication of the first appellate order under <strong>Section 112(1) CGST Act 2017</strong>. Condonation up to 1 additional month under Section 112(2). For orders before 1 April 2026, staggered deadline is 30 June 2026.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can the GSTAT appeal deadline be extended beyond 4 months?</h3>
                        <div class="faq-expanded__a"><p>No - under <strong>Section 112(2) CGST Act</strong>, the tribunal may condone delay up to 1 additional month beyond the 3-month limit. Beyond 4 months total, the right to appeal is permanently lost. Only a High Court writ under Article 226 remains.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Are medicines supplied to in-patients exempt from GST?</h3>
                        <div class="faq-expanded__a"><p>Yes - the AAR Tamil Nadu in Maha Critical Speciality Division (2025) ruled that medicines and consumables for in-patients constitute <strong>composite supply of healthcare services</strong>, exempt under Entry 74 of Notification 12/2017-CT(R). <strong>CBIC Circular No. 32/06/2018-GST</strong> confirms this treatment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if I miss the GSTAT appeal deadline?</h3>
                        <div class="faq-expanded__a"><p>Missing the 3-month deadline under Section 112(1) - even by a single day beyond the 4-month outer limit - means permanently losing the tribunal remedy. The demand becomes final, with only a <strong>High Court writ under Article 226</strong> remaining.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can pharmaceutical companies claim ITC on free drug samples?</h3>
                        <div class="faq-expanded__a"><p>Currently, ITC on free drug samples must be reversed under <strong>Section 17(5)(h) CGST Act</strong>. The GST Council was reported considering a clarification to allow ITC on professional samples. Until official notification, the reversal obligation remains.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the inverted duty issue for pharma manufacturers?</h3>
                        <div class="faq-expanded__a"><p>APIs and raw materials attract 18% GST while finished medicines are at 5%, causing ITC accumulation. Refund claims under <strong>Section 54(3) CGST Act</strong> are frequently contested, with multiple High Courts ruling in favour of allowing refund.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I get stay of recovery after filing a GSTAT appeal?</h3>
                        <div class="faq-expanded__a"><p>Yes - under <strong>Section 112(9) CGST Act</strong>, recovery of the balance disputed amount is automatically stayed during the GSTAT appeal once pre-deposit under Section 112(8) is confirmed. This protects working capital from coercive recovery.</p></div>
                    </div>
                </div>
            </div>

            <div class="highlight-box" style="background:var(--blue-lighter);border-radius:var(--radius-md);padding:24px;margin-top:32px;">
    <h3 style="color:var(--blue);margin-bottom:16px;">Quick Answers</h3>
    <div class="qa-grid" style="display:grid;grid-template-columns:repeat(2,1fr);gap:16px;">
        <div><strong>Pre-deposit percentage?</strong><br><span style="color:var(--text-secondary);font-size:14px;">10% of disputed tax under Section 112(8), capped at Rs 20 crore CGST.</span></div>
        <div><strong>Appeal deadline?</strong><br><span style="color:var(--text-secondary);font-size:14px;">3 months from order under Section 112(1). Staggered: 30 June 2026.</span></div>
        <div><strong>Is stay automatic?</strong><br><span style="color:var(--text-secondary);font-size:14px;">Yes - Section 112(9) provides automatic stay on confirmed pre-deposit.</span></div>
        <div><strong>In-patient medicines exempt?</strong><br><span style="color:var(--text-secondary);font-size:14px;">Yes - composite supply under Entry 74, per CBIC Circular 32/06/2018.</span></div>
        <div><strong>Which bench for healthcare?</strong><br><span style="color:var(--text-secondary);font-size:14px;">State Bench in your jurisdiction. Mumbai, Bangalore, Hyderabad, Chennai handle most healthcare cases.</span></div>
        <div><strong>GSTAT vs High Court?</strong><br><span style="color:var(--text-secondary);font-size:14px;">GSTAT is primary remedy. HC writ only for jurisdictional errors or when GSTAT is time-barred.</span></div>
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
<p>Every day from the order communication date reduces your available window. Contact Patron Accounting immediately on receiving an adverse order from the first appellate authority relating to healthcare GST exemption or drug classification.</p>
<p><strong>Contact us now:</strong> <a href="tel:+919459456700">+91 945 945 6700</a> | <a href="https://wa.me/919459456700?text=Hello%2C%20I%20need%20help%20with%20a%20GSTAT%20appeal%20for%20a%20healthcare%20GST%20exemption%20dispute.%20Please%20contact%20me." target="_blank" rel="noopener">WhatsApp Us</a></p>
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
                <p>Healthcare institutions facing GST exemption denial, drug classification disputes, or pharmaceutical ITC reversal demands have a significant opportunity to challenge adverse orders before the GSTAT - the highest fact-finding authority in GST litigation. <strong>GSTAT appeal for healthcare GST exemption disputes</strong> under Section 112 CGST Act 2017 requires precise pre-deposit calculation, careful assessment of the specific exemption provisions at issue, and timely filing within the 3-month limitation.</p>
<p>Patron Accounting's GSTAT practice is supported by Subham Jhunjhunwala, CA Finalist and Accounting &amp; Tax Professional, working alongside the firm's CA and CS team on every GSTAT engagement.</p>
            <div class="conclusion-cta-row" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20need%20help%20with%20a%20GSTAT%20appeal%20for%20a%20healthcare%20GST%20exemption%20dispute.%20Please%20contact%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=GSTAT%20Appeal%20-%20Healthcare%20GST%20Exemption%20Dispute&body=Hello%2C%0A%0AI%20need%20help%20with%20a%20GSTAT%20appeal%20for%20a%20healthcare%20GST%20exemption%20dispute.%20Please%20contact%20me.%0A%0ARegards" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p>This page is reviewed every 3 months or upon Finance Act amendments to Section 112, CBIC circulars on healthcare exemption, changes to Notification 12/2017-CT(R), HC/SC judgments on composite supply classification, drug classification rulings, or pharma ITC clarifications.</p>
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
