

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
    <title>GST Audit Services India - GSTR-9C, Reconciliation & Process</title>
    <meta name="description" content="Expert GST audit services in India. We handle GSTR-9C reconciliation, departmental audit (Sec 65), ITC verification. Starting at INR 9,999.">
    <link rel="canonical" href="/gst-audit">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Audit Services India - GSTR-9C, Reconciliation & Process">
    <meta property="og:description" content="Expert GST audit services in India. We handle GSTR-9C reconciliation, departmental audit (Sec 65), ITC verification. Starting at INR 9,999.">
    <meta property="og:url" content="/gst-audit">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Audit Services India - GSTR-9C, Reconciliation & Process">
    <meta name="twitter:description" content="Expert GST audit services in India. We handle GSTR-9C reconciliation, departmental audit (Sec 65), ITC verification. Starting at INR 9,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "GST Audit Services in India Guide",
          "description": "Expert GST audit services in India. We handle GSTR-9C reconciliation, departmental audit (Sec 65), ITC verification. Starting at INR 9,999.",
          "url": "https://www.patronaccounting.com/gst-audit",
          "serviceType": "GST Audit Services in India Guide",
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
            "url": "https://www.patronaccounting.com/gst-audit",
            "price": "5"
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
              "name": "GST Audit Services in India Guide",
              "item": "https://www.patronaccounting.com/gst-audit"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is GST audit and who needs to undergo it in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST audit is the examination of a registered taxpayer's records, returns, and documents under the CGST Act, 2017 to verify correctness of turnover, taxes paid, ITC availed, and refunds claimed [Section 2(13)]. All businesses with aggregate turnover above INR 5 crore must file GSTR-9C (self-certified reconciliation statement) by 31 December following the financial year. Any registered person may also face a departmental audit under Section 65 regardless of turnover."
              }
            },
            {
              "@type": "Question",
              "name": "What is the turnover limit for GSTR-9C filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The GSTR-9C filing threshold is aggregate turnover above INR 5 crore in a financial year (CBIC Notification No. 29/2021 dated 30 July 2021, effective from FY 2020-21). This is computed on an all-India PAN basis - all GSTINs under the same PAN are clubbed. GSTR-9 (annual return) is mandatory for turnover above INR 2 crore; optional below INR 2 crore per Notification 15/2025 for FY 2024-25."
              }
            },
            {
              "@type": "Question",
              "name": "Is CA certification required for GSTR-9C?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. From FY 2020-21 onwards, GSTR-9C is self-certified by the taxpayer. The Finance Act, 2021 amended Section 35(5) of the CGST Act to remove the mandatory CA/CMA certification requirement. Previously (up to FY 2019-20), businesses with turnover above INR 2 crore required CA or Cost Accountant certification. However, professional representation remains critical for departmental audits."
              }
            },
            {
              "@type": "Question",
              "name": "What happens during a Section 65 departmental GST audit?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 65, the Commissioner issues Form GST ADT-01 at least 15 working days before audit commencement. The audit covers GST records for up to 5 financial years (Rule 101 CGST Rules). It must be completed within 3 months, extendable by 6 months. Within 30 days of conclusion, the officer communicates findings in Form GST ADT-02. If tax is found short-paid or ITC wrongly availed, proceedings under Section 73 or 74 may be initiated."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not filing GSTR-9C?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "There is no specific penalty prescribed for GSTR-9C non-filing. The general penalty under Section 125 of CGST Act may apply - up to INR 25,000 for CGST and INR 25,000 for SGST (INR 50,000 total). Additionally, GSTR-9C late filing attracts a late fee of INR 200 per day (INR 100 CGST + INR 100 SGST), capped at 0.5% of the taxpayer's turnover in the state."
              }
            },
            {
              "@type": "Question",
              "name": "What documents should I prepare before a GST audit?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Key documents include: all GST returns (GSTR-1, GSTR-3B, GSTR-9), GSTR-2B auto-drafted statements, purchase and sales registers, ITC ledgers, audited financial statements, bank statements, stock records, e-way bill logs, and any prior GST notices or orders. For departmental audits, trial balance and cost audit/income tax audit reports may also be required under Section 65(5) of CGST Act."
              }
            },
            {
              "@type": "Question",
              "name": "Kya GST audit sirf badi companies ke liye hoti hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Nahi. GSTR-9C filing turnover above INR 5 crore wale businesses ke liye mandatory hai. Lekin Section 65 ke under departmental audit kisi bhi registered taxpayer par ho sakta hai - chahe turnover chhota ho ya bada. Department ise risk-based parameters par select karta hai, jaise ITC mismatch, return filing irregularities, ya industry-specific risks. Quick Answers What is GST audit? Examination of a taxpayer's GST records, returns, and documents to verify accuracy of turnover, ITC availed, taxes paid, and refunds claimed under the CGST Act, 2017. Who files GSTR-9C? All GST-registered regular taxpayers with aggregate annual turnover exceeding INR 5 crore must self-certify and file GSTR-9C, per CBIC Notification 29/2021. Is GSTR-9C mandatory? Yes, for turnover above INR 5 crore. Must be filed by 31 December following the relevant FY along with GSTR-9 and audited accounts. What is Section 65 audit? Section 65 of CGST Act authorizes the Commissioner to audit any registered taxpayer. ADT-01 notice given at least 15 working days in advance; audit completes in 3-9 months. GST audit penalty amount? General penalty under Section 125 is up to INR 25,000 (CGST) and INR 25,000 (SGST). Late filing of GSTR-9C attracts INR 200/day capped at 0.5% of turnover."
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
                        GST Audit Services in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">20 April 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>GSTR-9C Self-Certified Reconciliation</strong>:</span> For businesses with aggregate turnover above INR 5 crore (per CGST Act, Section 44 read with CBIC Notification 29/2021) - end-to-end preparation and filing.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Section 65 Departmental Audit Representation</strong>:</span> Full support from ADT-01 notice receipt to final ADT-02 findings - document compilation, officer coordination, reply drafting, and demand prevention.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>ITC Verification and Reconciliation</strong>:</span> GSTR-1 vs GSTR-3B vs GSTR-2B reconciliation, blocked credit identification under Section 17(5), and HSN-SAC classification review.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Pan-India CA Team</strong>:</span> Offices in Pune, Mumbai, Bangalore, and Delhi - 1,000+ GST audits completed. Expert representation for all GST audit types.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Patron Accounting LLP | 1,000+ GST Audits | 15+ Years Experience | 4.8/5 Rating | Pune, Mumbai, Bangalore, Delhi</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Audit&body=Hello%2C%0AI%20need%20a%20GST%20Audit.%0APlease%20contact%20me.%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20Audit%20services%20for%20my%20business.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - GST Audit',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'gst-audit', 'label' => 'GST Audit / GSTR-9C', 'selected' => true, 'disabled' => false],
                            ['value' => 'gst-returns', 'label' => 'GST Returns Filing', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration', 'label' => 'GST Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-notice', 'label' => 'GST Notice Response', 'selected' => false, 'disabled' => false],
                            ['value' => 'tax-audit', 'label' => 'Tax Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'statutory-audit', 'label' => 'Statutory Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'other', 'label' => 'Other', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting handled our GSTR-9C for three GSTINs seamlessly. Their reconciliation report caught INR 1.2 lakh in excess ITC we had missed - saving us from a potential demand.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Anil Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Manufacturing, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">When we received an ADT-01 notice for Section 65 audit, Patron's team stepped in within 24 hours and managed the entire process. Zero demand raised at conclusion.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Menon</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, IT Services, Bangalore</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Professional, thorough, and always reachable. Their GST compliance health check identified issues with our RCM calculations that we had been getting wrong for 2 years.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rahul Gupta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, E-commerce, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Multiple GSTINs across 4 states - Patron prepared all GSTR-9C forms consistently and on time. Their ITC reconciliation was the most thorough we have seen.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha Deshmukh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Manager, FMCG, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's CA team helped us file DRC-03 for a short-payment we discovered during GSTR-9C preparation. Saved us from interest under Section 50. Highly recommended.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vijay Joshi</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Proprietor, Trading, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get expert GST Audit support - GSTR-9C reconciliation, departmental audit representation, ITC verification. Starting at INR 9,999.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Applicability</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">7-Step Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">DIY vs CA</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Audit Services in India - Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Audit Services at a Glance</strong></p>
                    <p>GST audit is the systematic examination of a registered taxpayer's records, returns, and financial documents to verify turnover, ITC availed, tax paid, and compliance with the CGST Act, 2017. GSTR-9C is self-certified (not CA-certified) from FY 2020-21 onwards per Finance Act 2021. Mandatory for aggregate turnover above INR 5 crore. Departmental audit under Section 65 can target any taxpayer. Penalty up to INR 25,000 under Section 125. Patron Accounting starting at INR 9,999 (Exl GST and Govt. Charges).</p>
                </div>
                <p>Whether your business is facing a routine GSTR-9C filing, a Section 65 departmental audit notice (Form GST ADT-01), or a Section 66 special audit direction, Patron Accounting's experienced CA team provides end-to-end support - from ITC reconciliation to final filing and post-audit representation.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Key Detail</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Governing Act</strong></td><td>CGST Act, 2017 - Sections 44, 65, 66 read with Rules 80, 101, 102</td></tr>
                        <tr><td><strong>Who Files GSTR-9C</strong></td><td>Businesses with aggregate turnover above INR 5 crore (FY 2020-21 onwards)</td></tr>
                        <tr><td><strong>GSTR-9 Filing</strong></td><td>Mandatory for turnover above INR 2 crore; optional below INR 2 crore (FY 2024-25)</td></tr>
                        <tr><td><strong>GSTR-9C Due Date</strong></td><td>31 December of the following financial year (e.g., 31 Dec 2025 for FY 2024-25)</td></tr>
                        <tr><td><strong>Departmental Audit (Sec 65)</strong></td><td>Commissioner-directed; 15 working days' notice in ADT-01; completed in 3-9 months</td></tr>
                        <tr><td><strong>Special Audit (Sec 66)</strong></td><td>Directed by Asst. Commissioner with Commissioner approval; CA/CMA conducts; 90-180 days</td></tr>
                        <tr><td><strong>Penalty</strong></td><td>General penalty up to INR 25,000 under Section 125 of CGST Act</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>With evolving compliance requirements - including the shift from CA-certified audit to self-certified GSTR-9C under Finance Act 2021 - businesses need expert support to avoid notices, demands, and penalties. GST audit kya hoti hai aur kaise hoti hai? Patron Accounting ki CA team se sampark karein - GSTR-9C reconciliation se lekar departmental audit representation tak, hum sab handle karte hain.</p>
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
                <h2 class="section-title">What is GST Audit?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>GST Audit</strong> is the examination of records, returns, and documents maintained or furnished by a registered taxpayer under the CGST Act, 2017, to verify the correctness of turnover declared, taxes paid, refunds claimed, and Input Tax Credit availed - as defined under Section 2(13) of the CGST Act, 2017.</p>
                    <p>Until FY 2019-20, Section 35(5) required businesses with aggregate turnover exceeding INR 2 crore to get accounts audited by a CA/CMA and submit GSTR-9C certified by that professional. From FY 2020-21 onwards, the Finance Act 2021 removed mandatory CA/CMA certification. GSTR-9C is now self-certified by taxpayers with turnover above INR 5 crore (per CBIC Notification No. 29/2021 dated 30 July 2021). However, departmental and special audits by tax authorities continue under Sections 65 and 66.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Audit:</strong></p>
                    <p><strong>GSTR-9:</strong> Annual GST return consolidating all monthly/quarterly returns (GSTR-1, GSTR-3B) for a financial year. Mandatory for turnover above INR 2 crore.</p>
                    <p><strong>GSTR-9C:</strong> Annual reconciliation statement (formerly audit form). Self-certified by taxpayer for turnover above INR 5 crore. Reconciles GSTR-9 data with audited financial statements.</p>
                    <p><strong>Aggregate Turnover:</strong> PAN-level, all-India aggregate of all taxable, exempt, and export supplies excluding GST. All GSTINs under the same PAN are clubbed together.</p>
                    <p><strong>ITC (Input Tax Credit):</strong> Tax credit on inward supplies eligible for set-off against output GST liability. Central to audit scrutiny - incorrect claim attracts demand and reversal.</p>
                    <p><strong>ADT-01:</strong> Notice form issued to registered person at least 15 working days before a Section 65 departmental audit.</p>
                    <p><strong>ADT-02:</strong> Final findings form communicated to taxpayer within 30 days of audit conclusion under Section 65(6).</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- GST filing/reconciliation document -->
                            <rect x="30" y="15" width="140" height="115" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="22" rx="8" fill="#14365F"/>
                            <rect x="30" y="29" width="140" height="8" fill="#14365F"/>
                            <text x="100" y="30" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">GSTR-9C RECONCILIATION</text>
                            <line x1="100" y1="45" x2="100" y2="115" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <text x="65" y="55" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">GSTR-9</text>
                            <text x="135" y="55" font-size="7" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">AUDITED A/C</text>
                            <line x1="45" y1="62" x2="90" y2="62" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                            <line x1="110" y1="62" x2="155" y2="62" stroke="#E8712C" stroke-width="1" opacity="0.2"/>
                            <line x1="45" y1="72" x2="85" y2="72" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                            <line x1="110" y1="72" x2="150" y2="72" stroke="#E8712C" stroke-width="1" opacity="0.2"/>
                            <rect x="45" y="82" width="110" height="16" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                            <text x="100" y="93" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">ITC RECONCILED</text>
                            <rect x="55" y="104" width="90" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="100" y="114" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Section 44 CGST Act</text>
                            <circle cx="165" cy="25" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M159 25l4 4 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Self-Certified + Filed</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CGST Act</span>
                        <strong>GSTR-9C Reconciliation</strong>
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
            <h2 class="section-title">GST Audit Applicability - Who Needs It?</h2>
            <div class="content-text">
                
                <p><strong>GSTR-9C (Self-Certified Reconciliation Statement)</strong></p>
                <ul>
                    <li>Applicable to all regular GST-registered taxpayers with aggregate turnover above INR 5 crore in a financial year</li>
                    <li>Not applicable to Composition scheme taxpayers, OIDAR service providers, foreign airlines</li>
                    <li>Due Date: 31 December following the relevant FY (e.g., FY 2024-25 due by 31 December 2025) [Section 44 CGST Act]</li>
                    <li>Self-certified - CA/CMA certification no longer mandatory from FY 2020-21 onwards</li>
                </ul>
                <p style="margin-top:16px;"><strong>Section 65 - Departmental Audit</strong></p>
                <ul>
                    <li>Applicable to any GST-registered person - no turnover threshold; selected based on risk parameters</li>
                    <li>Minimum 15 working days prior notice in Form GST ADT-01 [Section 65(3)]</li>
                    <li>Scope covers previous 5 years of financial records (Rule 101 CGST Rules)</li>
                    <li>Must be completed within 3 months, extendable by 6 months [Section 65(4)]</li>
                </ul>
                <p style="margin-top:16px;"><strong>Section 66 - Special Audit</strong></p>
                <ul>
                    <li>Directed by Assistant Commissioner with prior Commissioner approval to a nominated CA/CMA</li>
                    <li>Triggered by undervaluation, excess ITC claim, or complexity requiring specialist examination</li>
                    <li>90 days for completion, extendable to 180 days [Section 66 CGST Act]</li>
                </ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting GST Audit Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>GSTR-9C Preparation and Filing</strong></td><td>End-to-end preparation of the annual reconciliation statement - reconciling GSTR-9 with audited accounts, identifying discrepancies, self-certifying for submission</td></tr>
                        <tr><td><strong>GSTR-9 Annual Return Filing</strong></td><td>Comprehensive preparation consolidating all GSTR-1, GSTR-3B, and GSTR-2B data with HSN-SAC summary and ITC details</td></tr>
                        <tr><td><strong>ITC Reconciliation and Verification</strong></td><td>Detailed reconciliation of ITC in GSTR-3B against GSTR-2B, ineligible ITC identification, reversal computations</td></tr>
                        <tr><td><strong>Section 65 Departmental Audit Representation</strong></td><td>Full support from ADT-01 notice to ADT-02 findings - document compilation, officer coordination, reply drafting</td></tr>
                        <tr><td><strong>Section 66 Special Audit Assistance</strong></td><td>Expert assistance during special audits - record organization, CA/CMA coordination, response to findings</td></tr>
                        <tr><td><strong>GST Compliance Health Check</strong></td><td>Pre-audit review of all GST returns, ITC claims, exemptions, e-way bills, and records to identify issues</td></tr>

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
            <h2 class="section-title">GST Audit Procedure - 7-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team follows a structured 7-step process for every GST audit engagement - from initial assessment to GSTR-9C filing and post-audit support.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Initial Assessment and Scope Definition</h3><p class="step-description">We review your GST registration, business category, aggregate turnover (all-India PAN basis), and GSTIN details. We determine applicability of GSTR-9C, GSTR-9, and any pending departmental notices.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Applicability confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scope defined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="30" height="6" rx="2" fill="#F5A623"/><line x1="30" y1="34" x2="90" y2="34" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="44" x2="85" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><circle cx="80" cy="55" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M76 55l3 3 5-5" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Document Collection</h3><p class="step-description">We collect all GST returns (GSTR-1, GSTR-3B, GSTR-9), purchase and sales registers, ITC ledgers, stock records, audited financial statements, e-way bill logs, and any prior GST notices.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All returns collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Financial statements received</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="45" height="58" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="60" y="18" width="45" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><line x1="25" y1="22" x2="50" y2="22" stroke="#14365F" stroke-width="2" opacity="0.4"/><line x1="25" y1="34" x2="45" y2="34" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="70" y1="32" x2="95" y2="32" stroke="#E8712C" stroke-width="2" opacity="0.4"/><line x1="70" y1="44" x2="90" y2="44" stroke="#E8712C" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Collected</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">ITC and Turnover Reconciliation</h3><p class="step-description">We reconcile ITC claimed in GSTR-3B against auto-populated GSTR-2B, identify blocked credits under Section 17(5), and reconcile turnover across GSTR-1, GSTR-3B, and audited accounts.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITC reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Turnover verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="60" y1="10" x2="60" y2="70" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="35" y="28" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">GSTR-3B</text><text x="85" y="28" font-size="7" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">GSTR-2B</text><rect x="20" y="40" width="80" height="16" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="60" y="51" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">ITC MATCHED</text></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">HSN/SAC Classification and Rate Verification</h3><p class="step-description">We verify correct HSN/SAC codes on outward and inward supplies, confirm tax rate applied on each supply category, and flag any rate mismatch that could attract demand under Section 73 or 74.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> HSN/SAC codes verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rate mismatches flagged</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">HSN / SAC</text><line x1="25" y1="34" x2="95" y2="34" stroke="#14365F" stroke-width="1" opacity="0.3"/><rect x="25" y="40" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="40" y="49" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">5%</text><rect x="60" y="40" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="75" y="49" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">18%</text><path d="M35 60l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><path d="M70 60l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Classified</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Discrepancy Identification and Resolution</h3><p class="step-description">All discrepancies between GSTR-9 and audited financials are documented. Where short-payment is found, we compute additional liability and arrange payment via DRC-03 before filing GSTR-9C.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Discrepancies documented</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DRC-03 payment arranged</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">DISCREPANCY</text><line x1="25" y1="32" x2="95" y2="32" stroke="#14365F" stroke-width="1" opacity="0.3"/><path d="M40 42l20 0" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><path d="M50 38l0 8" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><rect x="25" y="52" width="70" height="16" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="60" y="63" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">DRC-03 PAYMENT</text></svg></div><span class="illustration-label">Resolved</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">GSTR-9C Preparation and Self-Certification</h3><p class="step-description">We prepare the complete GSTR-9C reconciliation statement as per Section 44 of CGST Act. The statement is prepared per GSTIN and self-certified by the authorized signatory of the taxpayer.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTR-9C prepared per GSTIN</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Self-certified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">GSTR-9C</text><line x1="30" y1="32" x2="90" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="42" x2="80" y2="42" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="30" y1="50" x2="75" y2="50" stroke="#14365F" stroke-width="1" opacity="0.2"/><circle cx="60" cy="60" r="6" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M57 60l2 2 4-4" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Prepared</span><span class="step-number-large">06</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Filing and Post-Filing Support</h3><p class="step-description">We file GSTR-9C on the GST portal along with GSTR-9 and audited accounts. We provide post-filing support for queries, scrutiny notices (ASMT-10), and any demand notices arising from the audit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed on GST portal</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Post-filing support available</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="34" x2="80" y2="34" stroke="#14365F" stroke-width="1" opacity="0.3"/><rect x="35" y="42" width="50" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="52" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">GST PORTAL</text><circle cx="95" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M91 15l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">07</span></div></div></div>
            <div class="highlight-box" style="margin-top:32px;"><p><strong>Legal Verification Gate:</strong> All thresholds and timelines cited above are verified against CGST Act, 2017 provisions and current CBIC notifications as of March 2026.</p></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Audit</h2>
            <div class="content-text">
                
                <p><strong>GST Returns</strong></p>
                <ul><li>GSTR-1 (monthly/quarterly) for all periods under review</li><li>GSTR-3B (monthly/quarterly) for all periods under review</li><li>GSTR-9 annual return (if already filed)</li><li>GSTR-9C reconciliation statement (if previously filed)</li><li>GSTR-2B auto-drafted statements for all months</li></ul>
                <p style="margin-top:16px;"><strong>Financial Records</strong></p>
                <ul><li>Audited annual financial statements (Balance Sheet, P&L, Notes to Accounts)</li><li>Books of accounts - purchase register, sales register, expense ledgers</li><li>Bank statements for the audit period</li><li>Trial balance and ledger summaries</li></ul>
                <p style="margin-top:16px;"><strong>GST-Specific Records</strong></p>
                <ul><li>ITC register - availed, reversed, and re-availed by month</li><li>E-way bill log for supplies above INR 50,000 value [Rule 138 CGST Rules]</li><li>Stock register and inventory records</li><li>RCM (Reverse Charge Mechanism) liability register</li><li>Export invoices, shipping bills, and LUT/bond (if applicable)</li><li>HSN/SAC-wise outward supply summary</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common GST Audit Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>ITC Mismatch Between GSTR-3B and GSTR-2B</strong></td><td>Demand and interest under Section 50 CGST Act</td><td>Month-wise reconciliation, eligible/ineligible credit identification, correct reversal structuring to prevent demand</td></tr>
                        <tr><td><strong>Turnover Reporting Discrepancy</strong></td><td>Major audit trigger - differences between GSTR-1, GSTR-3B, and audited financials</td><td>Three-way reconciliation, reasons documented (credit notes, advances, cancellations) in Part II of GSTR-9C</td></tr>
                        <tr><td><strong>Section 65 Departmental Audit Notice</strong></td><td>ADT-01 notice - stress and potential demand</td><td>Immediate review of scope, document compilation, expert representation to ensure factual findings and minimized demands</td></tr>
                        <tr><td><strong>Short Payment Discovered Late</strong></td><td>Demand under Section 73 (non-fraud) or 74 (fraud)</td><td>Voluntary payment via DRC-03 before audit to reduce interest and avoid penalties</td></tr>

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
            <h2 class="section-title">GST Audit Fees in India - 2026 Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - GSTR-9C (Single GSTIN, Turnover INR 5-10 crore)</td><td class="table-amount">Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>GSTR-9C (Single GSTIN, Turnover INR 10-50 crore)</td><td class="table-amount">Starting at INR 7,999 per GSTIN</td></tr>
                        <tr><td>GSTR-9C (Turnover above INR 50 crore)</td><td class="table-amount">Custom pricing - contact us</td></tr>
                        <tr><td>GSTR-9 Annual Return Filing (standalone)</td><td class="table-amount">Starting at INR 2,499</td></tr>
                        <tr><td>GST Compliance Health Check</td><td class="table-amount">Starting at INR 3,999</td></tr>
                        <tr><td>Section 65 Departmental Audit Representation</td><td class="table-amount">Starting at INR 9,999 per year under audit</td></tr>
                        <tr><td>Multiple GSTIN (same PAN)</td><td class="table-amount">Discounted bundled pricing available</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20GST%20Audit.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Audit Timeline - How Long Does It Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9C (Standard - single GSTIN, clean records)</td><td>7-14 working days from document collection</td></tr>
                        <tr><td>GSTR-9C (Complex - multiple GSTINs, export transactions)</td><td>15-25 working days</td></tr>
                        <tr><td>Section 65 Departmental Audit (ADT-01 to ADT-02)</td><td>3 months; extendable by 6 months [Section 65(4) CGST Act]</td></tr>
                        <tr><td>Section 66 Special Audit (ADT-03 to report)</td><td>90 days; extendable by 90 days [Section 66 CGST Act]</td></tr>
                        <tr><td>GST Compliance Health Check</td><td>5-7 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Deadline Alert:</strong> GSTR-9C for FY 2024-25 is due by 31 December 2025. Late filing attracts INR 200/day (INR 100 CGST + INR 100 SGST), capped at 0.5% of state-wise turnover. Engage early to avoid last-minute rush and errors.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for GST Audit?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Avoid Costly Demands</h3><p>Accurate reconciliation prevents short-payment detection during departmental audit, which can trigger demand + 18% interest under Section 50 of CGST Act.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Proactive ITC Optimization</h3><p>Our team identifies eligible ITC that may have been missed, improving cash flow and reducing GST liability for your business.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><h3>Audit-Ready Documentation</h3><p>Organized records, reconciliation schedules, and workings ensure you are prepared for any tax authority scrutiny at any time.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Expert Representation</h3><p>Experienced CA team handles Section 65 departmental audits professionally, reducing the risk of adverse findings and inflated demands.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Year-Round Support</h3><p>Beyond the audit, we help establish systems for monthly reconciliation, on-time filings, and compliance management throughout the year.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Penalty Prevention</h3><p>Identifying discrepancies before GSTR-9C filing and resolving via DRC-03 voluntary payment eliminates penalty risk under Section 125.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">1,000+ GST Audits Completed Across India</h2>
            <div class="content-text">
                
                <p><strong>Patron Accounting LLP</strong> | 4.8/5 Rating | 200+ Reviews | 1,000+ GST Audits | 15+ Years Experience | Offices: Pune, Mumbai, Bangalore, Delhi</p>
                <div class="highlight-box" style="margin-top:16px;"><p>"Patron Accounting handled our GSTR-9C for three GSTINs seamlessly. Their reconciliation report caught INR 1.2 lakh in excess ITC we had missed." - <strong>CFO, Manufacturing Company, Pune</strong></p></div>
                <div class="highlight-box" style="margin-top:12px;"><p>"When we received an ADT-01 notice, Patron's team stepped in within 24 hours and managed the entire audit. Zero demand raised." - <strong>Director, IT Services Company, Bangalore</strong></p></div>
                <div class="highlight-box" style="margin-top:12px;"><p>"Professional, thorough, and always reachable. Their GST health check saved us from a potential penalty." - <strong>Founder, E-commerce Business, Mumbai</strong></p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Filing vs Professional GST Audit Support</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Filing</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td><strong>ITC Reconciliation Accuracy</strong></td><td>Manual, error-prone</td><td>Multi-layer verification using reconciliation tools</td></tr>
                        <tr><td><strong>GSTR-9C Preparation Time</strong></td><td>2-4 weeks (internal team)</td><td>7-14 working days</td></tr>
                        <tr><td><strong>Section 65 Audit Handling</strong></td><td>Internal staff, no legal expertise</td><td>Experienced CA representation from notice to closure</td></tr>
                        <tr><td><strong>Risk of Demand/Penalty</strong></td><td>High - errors often discovered post-filing</td><td>Low - discrepancies resolved before filing</td></tr>
                        <tr><td><strong>Cost</strong></td><td>Staff time + opportunity cost</td><td>Starting at INR 9,999 - clear ROI</td></tr>
                        <tr><td><strong>Post-Audit Support</strong></td><td>Limited</td><td>Available year-round for follow-up notices</td></tr>

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
            <h2 class="section-title">Related GST and Audit Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/gst-returns">GST Returns Filing</a> - accurate monthly/quarterly GSTR-1 and GSTR-3B filing to minimize reconciliation issues at audit time</li>
                    <li><a href="/gst-registration">GST Registration</a> - new business GST registration, amendment, and cancellation</li>
                    <li><a href="/gst-notice">GST Notice Response</a> - expert handling of ASMT-10, SCN, and demand notices from GST department</li>
                    <li><a href="/tax-audit">Tax Audit Service</a> - Income Tax Act audit under Section 44AB for businesses above turnover threshold</li>
                    <li><a href="/statutory-audit">Statutory Audit Service</a> - Companies Act, 2013 audit for private limited companies and LLPs</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for GST Audit in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Legal Provision</th><th>Relevance to GST Audit</th></tr></thead><tbody>
                        <tr><td><strong>Section 2(13) CGST Act, 2017</strong></td><td>Definition of GST Audit - examination of records, returns, and documents to verify compliance.</td></tr>
                        <tr><td><strong>Section 35(5) CGST Act (amended)</strong></td><td>Mandatory CA/CMA audit removed from FY 2020-21 via Finance Act, 2021. GSTR-9C now self-certified.</td></tr>
                        <tr><td><strong>Section 44 CGST Act</strong></td><td>Annual return and reconciliation. GSTR-9C to be filed with GSTR-9 for turnover above INR 5 crore.</td></tr>
                        <tr><td><strong>Section 65 CGST Act</strong></td><td>Departmental audit by tax authorities. 15 working days' notice. 3-month completion, extendable by 6 months. Source: <a href="https://taxinformation.cbic.gov.in" target="_blank" rel="noopener">CBIC</a></td></tr>
                        <tr><td><strong>Section 66 CGST Act</strong></td><td>Special audit directed by Asst. Commissioner with Commissioner approval. CA/CMA nominated. 90-180 days.</td></tr>
                        <tr><td><strong>Section 73 CGST Act</strong></td><td>Demand for tax not paid/short paid (non-fraud). 3-year limitation. 10% penalty or INR 10,000.</td></tr>
                        <tr><td><strong>Section 74 CGST Act</strong></td><td>Demand involving fraud/wilful misstatement/suppression. 5-year limitation. 100% penalty.</td></tr>
                        <tr><td><strong>Section 125 CGST Act</strong></td><td>General penalty - INR 25,000 maximum (CGST/SGST) for non-compliance where no specific penalty prescribed.</td></tr>
                        <tr><td><strong>CBIC Notification 29/2021 - CT</strong></td><td>Effective 1 August 2021 - Section 35(5) CA/CMA certification removed. GSTR-9C self-certification for turnover above INR 5 crore. Source: <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a></td></tr>
                </tbody></table></div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - GST Audit in India</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about GST audit, GSTR-9C filing, Section 65 departmental audit, penalties, and compliance requirements.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'GST Audit in India'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is GST audit and who needs to undergo it in India?</h3>
                        <div class="faq-expanded__a"><p>GST audit is the examination of a registered taxpayer's records, returns, and documents under the CGST Act, 2017 to verify correctness of turnover, taxes paid, ITC availed, and refunds claimed [Section 2(13)]. All businesses with aggregate turnover above INR 5 crore must file GSTR-9C (self-certified reconciliation statement) by 31 December following the financial year. Any registered person may also face a departmental audit under Section 65 regardless of turnover.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the turnover limit for GSTR-9C filing?</h3>
                        <div class="faq-expanded__a"><p>The GSTR-9C filing threshold is aggregate turnover above INR 5 crore in a financial year (CBIC Notification No. 29/2021 dated 30 July 2021, effective from FY 2020-21). This is computed on an all-India PAN basis - all GSTINs under the same PAN are clubbed. GSTR-9 (annual return) is mandatory for turnover above INR 2 crore; optional below INR 2 crore per Notification 15/2025 for FY 2024-25.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is CA certification required for GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>No. From FY 2020-21 onwards, GSTR-9C is self-certified by the taxpayer. The Finance Act, 2021 amended Section 35(5) of the CGST Act to remove the mandatory CA/CMA certification requirement. Previously (up to FY 2019-20), businesses with turnover above INR 2 crore required CA or Cost Accountant certification. However, professional representation remains critical for departmental audits.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens during a Section 65 departmental GST audit?</h3>
                        <div class="faq-expanded__a"><p>Under Section 65, the Commissioner issues Form GST ADT-01 at least 15 working days before audit commencement. The audit covers GST records for up to 5 financial years (Rule 101 CGST Rules). It must be completed within 3 months, extendable by 6 months. Within 30 days of conclusion, the officer communicates findings in Form GST ADT-02. If tax is found short-paid or ITC wrongly availed, proceedings under Section 73 or 74 may be initiated.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for not filing GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>There is no specific penalty prescribed for GSTR-9C non-filing. The general penalty under Section 125 of CGST Act may apply - up to INR 25,000 for CGST and INR 25,000 for SGST (INR 50,000 total). Additionally, GSTR-9C late filing attracts a late fee of INR 200 per day (INR 100 CGST + INR 100 SGST), capped at 0.5% of the taxpayer's turnover in the state.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What documents should I prepare before a GST audit?</h3>
                        <div class="faq-expanded__a"><p>Key documents include: all GST returns (GSTR-1, GSTR-3B, GSTR-9), GSTR-2B auto-drafted statements, purchase and sales registers, ITC ledgers, audited financial statements, bank statements, stock records, e-way bill logs, and any prior GST notices or orders. For departmental audits, trial balance and cost audit/income tax audit reports may also be required under Section 65(5) of CGST Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Kya GST audit sirf badi companies ke liye hoti hai?</h3>
                        <div class="faq-expanded__a"><p>Nahi. GSTR-9C filing turnover above INR 5 crore wale businesses ke liye mandatory hai. Lekin Section 65 ke under departmental audit kisi bhi registered taxpayer par ho sakta hai - chahe turnover chhota ho ya bada. Department ise risk-based parameters par select karta hai, jaise ITC mismatch, return filing irregularities, ya industry-specific risks.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is GST audit?</strong> Examination of a taxpayer's GST records, returns, and documents to verify accuracy of turnover, ITC availed, taxes paid, and refunds claimed under the CGST Act, 2017.</p>
                <p><strong>Who files GSTR-9C?</strong> All GST-registered regular taxpayers with aggregate annual turnover exceeding INR 5 crore must self-certify and file GSTR-9C, per CBIC Notification 29/2021.</p>
                <p><strong>Is GSTR-9C mandatory?</strong> Yes, for turnover above INR 5 crore. Must be filed by 31 December following the relevant FY along with GSTR-9 and audited accounts.</p>
                <p><strong>What is Section 65 audit?</strong> Section 65 of CGST Act authorizes the Commissioner to audit any registered taxpayer. ADT-01 notice given at least 15 working days in advance; audit completes in 3-9 months.</p>
                <p><strong>GST audit penalty amount?</strong> General penalty under Section 125 is up to INR 25,000 (CGST) and INR 25,000 (SGST). Late filing of GSTR-9C attracts INR 200/day capped at 0.5% of turnover.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GSTR-9C for FY 2024-25 is Due by 31 December 2025</h2>
            <div class="content-text">
                
                <p><strong>Late filing attracts INR 200/day (INR 100 CGST + INR 100 SGST), capped at 0.5% of state-wise turnover. Do not miss the deadline.</strong></p>
                <ul>
                    <li><strong>GSTR-9C due date:</strong> 31 December 2025 for FY 2024-25 [Section 44, CGST Act]</li>
                    <li><strong>Late fee:</strong> INR 200 per day, maximum 0.5% of state-wise turnover</li>
                    <li><strong>Short-payment discovered:</strong> Pay via DRC-03 before filing to avoid 18% interest under Section 50</li>
                    <li><strong>Section 65 notice received:</strong> Respond immediately - audit must complete within 3 months of commencement</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your GST Audit Engagement Today - Free Consultation</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">GST audit - whether through mandatory GSTR-9C self-certification, a Section 65 departmental audit, or a Section 66 special audit - is a critical compliance obligation that directly impacts your tax liability, ITC position, and standing with the GST department. An unresolved discrepancy between GSTR-9 and audited accounts can trigger demand notices, interest under Section 50, and penalties under Sections 73, 74, or 125.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's experienced CA team provides structured, thorough GST audit support - from GSTR-9C preparation and ITC reconciliation to full departmental audit representation. Our offices in Pune, Mumbai, Bangalore, and Delhi serve businesses across India.</p>
                <p style="color:rgba(255,255,255,0.9);"><strong>Starting at INR 9,999 (Exl GST and Govt. Charges) | GSTR-9C + ITC Reconciliation | Section 65 Representation | Pan-India</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20GST%20Audit.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Audit%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20GST%20Audit%20services.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Audit Services - Available in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides expert GST Audit services including GSTR-9C reconciliation and departmental audit representation across major cities in India.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/gst-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/gst-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related GST and Compliance Services</div><div class="pa-block-sub">End-to-end GST compliance and audit support for your business</div><div class="pa-cross-grid"><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns Filing</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/gst-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice Response</div><div class="pa-card-sub">India</div></div></a><a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit Service</div><div class="pa-card-sub">India</div></div></a><a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit Service</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers GST Audit Services in India including GSTR-9C reconciliation, Section 65 departmental audit, and Section 66 special audit. Content is reviewed annually. All regulatory references verified against CGST Act provisions and CBIC notifications as of March 2026.</p>
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

<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
     ============================================ -->
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

<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->
<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

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
