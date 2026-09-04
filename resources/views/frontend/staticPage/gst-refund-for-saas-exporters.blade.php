@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush







@section('meta')
    <title>GST Refund for SaaS Exporters — Section 16 IGST and LUT</title>
    <meta name="description" content="GST refund for Indian SaaS exporters via Section 16 IGST Act, LUT route, Rule 89 ITC formula and FIRC reconciliation. CA-led. Starts at Rs 9,999.">
    <link rel="canonical" href="/gst-refund-for-saas-exporters">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Refund for SaaS Exporters — Section 16 IGST and LUT">
    <meta property="og:description" content="GST refund for Indian SaaS exporters via Section 16 IGST Act, LUT route, Rule 89 ITC formula and FIRC reconciliation. CA-led. Starts at Rs 9,999.">
    <meta property="og:url" content="/gst-refund-for-saas-exporters/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund for SaaS Exporters — Section 16 IGST and LUT">
    <meta name="twitter:description" content="GST refund for Indian SaaS exporters via Section 16 IGST Act, LUT route, Rule 89 ITC formula and FIRC reconciliation. CA-led. Starts at Rs 9,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/gst-refund-for-saas-exporters/#breadcrumb",
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
          "name": "GST Refund",
          "item": "https://www.patronaccounting.com/gst-refund/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Refund for SaaS Exporters",
          "item": "https://www.patronaccounting.com/gst-refund-for-saas-exporters/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/gst-refund-for-saas-exporters/#faq",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How does an Indian SaaS company claim GST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An Indian SaaS company files Form GST RFD-01 on gst.gov.in under the category 'Refund of ITC on export of services without payment of tax'. The application must satisfy the 5-condition test under Section 2(6) IGST Act, be supported by Statement 2 with invoice-FIRC pairing under Rule 89(2)(c), and use the Rule 89(4) formula to compute the refund amount. From October 2025, CBIC Instruction 6/2025 extends 90 percent provisional refund within 7 days of acknowledgement."
          }
        },
        {
          "@type": "Question",
          "name": "Is GST applicable on SaaS exports from India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Export of services is a zero-rated supply under Section 16 IGST Act 2017. Where the SaaS company files an active LUT in Form GST RFD-11, no IGST is charged on the export invoice and accumulated ITC is refunded. Where LUT is not filed, IGST is charged upfront and refund is claimed under Section 54 CGST Act. GSTIN registration is mandatory once aggregate turnover crosses Rs 20 lakh under Section 22 CGST Act."
          }
        },
        {
          "@type": "Question",
          "name": "SaaS exporter ka GST refund kaise milega? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Pehle GSTIN aur LUT chahiye. Phir har export invoice pe 5-condition test apply karna jo Section 2(6) IGST Act ke under hai - supplier India me, recipient bahar, place of supply bahar, convertible foreign exchange me payment, aur dono distinct establishments na ho. Ye sab pura ho to RFD-01 file karein with Statement 2, FIRC ya FIRA ke saath. Refund 60 din ke andar mil jaata hai aur 90 percent provisional 7 din me."
          }
        },
        {
          "@type": "Question",
          "name": "What is FIRC and is it mandatory for SaaS refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FIRC stands for Foreign Inward Remittance Certificate, issued by the AD bank or PA-CB authorised aggregator confirming receipt of payment in convertible foreign exchange. Rule 89(2)(c) CGST Rules makes FIRC, BRC, or equivalent bank certificate mandatory documentary evidence in Statement 2 of Form GST RFD-01. Where the SaaS company receives payment via Stripe, Razorpay International, or Cashfree, the equivalent FIRA or payment advice serves the purpose."
          }
        },
        {
          "@type": "Question",
          "name": "Can SaaS exporters use Stripe for international payments and claim GST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Stripe is a globally licensed payment platform; Indian SaaS users receive payment advice from Standard Chartered Bank along with monthly Stripe Connect statements. These documents serve as FIRC equivalents under Rule 89(2)(c). However, post the RBI PA-CB Master Direction of October 2023, Stripe operates without a direct PA-CB licence in India, so many Indian SaaS exporters now use PA-CB authorised alternatives like Razorpay International, Cashfree, or Skydo for compliance certainty."
          }
        },
        {
          "@type": "Question",
          "name": "What is the place of supply for SaaS services to a foreign customer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For most B2B SaaS supplied to a foreign customer, place of supply is the location of the recipient under Section 13(2) of the IGST Act 2017. Where the SaaS company operates as an intermediary under Section 13(8)(b), place of supply shifts to the supplier's location, defeating the export classification. CBIC Circular 159/15/2021-GST clarifies the principal-to-principal test which most SaaS contracts satisfy."
          }
        },
        {
          "@type": "Question",
          "name": "How often can a SaaS company file GST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form GST RFD-01 can be filed monthly so long as GSTR-1 and GSTR-3B for the relevant period have been filed and FIRC evidence is in hand. A monthly cycle is the working-capital optimal route for SaaS companies billing monthly subscriptions. Quarterly cycles suit quarterly-billed SaaS, and annual cycles work for upfront annual contracts. The 2-year limitation under Section 54(1) CGST Act runs from the relevant date."
          }
        },
        {
          "@type": "Question",
          "name": "Razorpay International ka FIRC kaisa hota hai aur GST refund me kya use hai? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Razorpay International apne PA-CB licence ke base par har export payment ke liye automated FIRC generate karta hai jo email me aata hai aur dashboard se download kiya jaa sakta hai. Iska reference number, remitter details, currency, exchange rate, aur purpose code Rule 89(2)(c) ke under valid hai. GST refund me Statement 2 me invoice-FIRC pair karna hota hai jo Razorpay automatically reconcile karke deta hai."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between LUT route and IGST-paid route for SaaS exports?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "LUT route - SaaS company files Form RFD-11 LUT, charges no IGST on export invoice, accumulates ITC, and claims refund of accumulated ITC under Rule 89(4) formula. IGST-paid route - SaaS company pays IGST on the export invoice and claims refund of tax paid under Section 54. LUT route preserves working capital; IGST-paid route is simpler operationally. Both lead to the same eventual recovery; the difference is timing of the cash."
          }
        },
        {
          "@type": "Question",
          "name": "Are subscription cancellations and refunds to foreign customers a GST issue?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, indirectly. Where an Indian SaaS company refunds a foreign customer, the FX outflow reduces realised export turnover for the period. If the original invoice has been included in a refund claim, a credit note must be issued under Section 34 CGST Act, GSTR-1 amended, and the refund claim adjusted. Where the customer cancels mid-cycle, deferred-revenue reversal applies. We track these adjustments invoice by invoice in the monthly cycle."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/gst-refund-for-saas-exporters/#service",
      "name": "GST Refund for SaaS Exporters",
      "description": "End-to-end GST refund filing for Indian SaaS companies and IT/ITES service exporters under Section 16 IGST Act zero-rated framework, including LUT-based refund of accumulated ITC under Rule 89, IGST-paid refund under Section 54, FIRC reconciliation across Stripe, Razorpay International, Cashfree, and direct AD-bank settlements, and place-of-supply opinion under Section 13.",
      "serviceType": "Tax Refund and Service Export Compliance",
      "provider": {
        "@id": "https://www.patronaccounting.com/#organization"
      },
      "areaServed": "India"
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
.toc-pill {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 10px 18px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 600;
            color: var(--text-secondary); background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: 50px;
            cursor: pointer; transition: all 0.25s ease; white-space: nowrap; text-decoration: none;
        }
.toc-pill:hover { border-color: var(--orange); color: var(--orange); background: var(--orange-lighter); }
.toc-pill.active { background: var(--orange); border-color: var(--orange); color: var(--white); }
.toc-pill.active:hover { background: var(--orange-dark); border-color: var(--orange-dark); }
/* Process Evidence Screenshot - Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
</style>
<main>

<!-- BREADCRUMB -->
<div role="navigation" aria-label="Breadcrumb" style="background:var(--gray-50);border-bottom:1px solid var(--gray-200);padding:10px 16px;">
    <div style="max-width:1320px;margin:0 auto;">
        <ol style="display:flex;align-items:center;gap:8px;list-style:none;padding:0;margin:0;font-size:13px;font-family:'Barlow',sans-serif;">
            <li style="display:flex;align-items:center;gap:8px;">
                <a href="/" style="color:var(--text-muted);text-decoration:none;font-weight:500;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;vertical-align:middle;margin-right:2px;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    Home
                </a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg>
            </li>
            <li style="display:flex;align-items:center;gap:8px;">
                <a href="/gst-refund" style="color:var(--text-muted);text-decoration:none;font-weight:500;">GST Refund</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg>
            </li>
            <li><span style="color:var(--orange);font-weight:600;">GST Refund for SaaS Exporters Services</span></li>
        </ol>
    </div>
</div>

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
                        GST Refund for SaaS Exporters in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA &amp; CS Team · Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">11 May 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> GSTIN, IEC, LUT (Form RFD-11), FIRC or FIRA, customer contract, Stripe or Razorpay statement.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> SaaS refund filing starts at Rs 9,999 plus GST per claim cycle (single tax period, up to 50 invoices).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Indian SaaS company billing foreign customers in convertible foreign exchange, satisfying Section 2(6) IGST Act 5-condition test.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Provisional 90 percent refund within 7 days under Section 54(6); final order within 60 days.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20for%20Saas%20Exporters%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Refund for SaaS Exporters',
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
    'ctaText'    => 'From bootstrapped SaaS startups to scaling platforms, we handle monthly RFD-01 cycles, FIRC reconciliation, and place-of-supply opinions for service exporters across India.',
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
                        <a href="#overview-section" class="toc-pill">Overview</a>
            <a href="#what-section" class="toc-pill">What Is It</a>
            <a href="#who-section" class="toc-pill">Who Needs It</a>
            <a href="#services-section" class="toc-pill">Our Services</a>
            <a href="#procedure-section" class="toc-pill">Procedure</a>
            <a href="#documents-section" class="toc-pill">Documents</a>
            <a href="#fees-section" class="toc-pill">Fees</a>
            <a href="#timeline-section" class="toc-pill">Timeline</a>
            <a href="#benefits-section" class="toc-pill">Benefits</a>
            <a href="#comparison-section" class="toc-pill">Comparison</a>
            <a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Refund for SaaS Exporters Services at a Glance</strong></p>
                    <p>Indian SaaS companies billing foreign customers qualify as service exporters under Section 2(6) of the IGST Act 2017 if all five conditions are met. Export of services is a zero-rated supply under Section 16 IGST Act. Refund of accumulated input tax credit is claimed in Form GST RFD-01 with Statement 2 under Rule 89(2)(c), supported by FIRC, FIRA, or PA-CB acknowledgement from the payment aggregator.</p>
                    <div class="table-responsive-wrapper" style="margin-top:16px;">
                    <table>
                        <thead><tr><th>Quick Reference</th><th>Details</th></tr></thead>
                        <tbody>
                            <tr><td><strong>Governing Acts</strong></td><td>IGST Act 2017 (Sections 2(6), 13, 16), CGST Act 2017 (Section 54), CGST Rules 2017 (Rule 89)</td></tr>
                            <tr><td><strong>Applicable To</strong></td><td>Indian SaaS, IT/ITES, and digital service exporters earning in convertible foreign exchange</td></tr>
                            <tr><td><strong>Refund Routes</strong></td><td>LUT route (Rule 89, accumulated ITC) or pay IGST and claim refund (Section 54)</td></tr>
                            <tr><td><strong>Patron Fees</strong></td><td>Starting Rs 9,999 per refund cycle plus GST; LUT filing Rs 4,999</td></tr>
                            <tr><td><strong>Penalty for Non-Realisation in 9 Months</strong></td><td>Refund eligibility lapses; ITC reversal exposure under Rule 96B for IGST-paid route</td></tr>
                            <tr><td><strong>Form / Portal</strong></td><td>Form GST RFD-01 plus RFD-11 LUT on <a href="https://tutorial.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a></td></tr>
                            <tr><td><strong>Authority</strong></td><td>Jurisdictional GST Refund Officer plus AD bank for FIRC issuance</td></tr>
                        </tbody>
                    </table>
                    </div>
                    <p style="display:none;"></p>
                </div>
                <p>GST refund for SaaS exporters is the recovery of accumulated input tax credit or integrated tax paid by an Indian SaaS company on its export of subscription, licence, or platform services. Under Section 16 of the IGST Act 2017, export of services is a zero-rated supply, with refund claimable in Form GST RFD-01 either as accumulated ITC (LUT route under Rule 89) or as IGST paid (Section 54 route). The refund cycle is typically monthly or quarterly, aligned to the SaaS billing rhythm - annual upfront contracts, quarterly subscriptions, or monthly recurring charges.</p>
                <p>Patron Accounting LLP has filed service-export refund cycles for B2B SaaS, vertical SaaS, and IT/ITES platforms from FY 2018-19 onwards across Stripe, Razorpay International, Cashfree, and direct AD bank settlements. With offices in Pune, Mumbai, Delhi, and Gurugram, our CA and CS team manages LUT renewals, monthly RFD-01 cycles, FIRC reconciliation, and place-of-supply opinions for service exporters across India.</p>
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
                <h2 class="section-title">What Is GST Refund for SaaS Exporters?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST refund for SaaS exporters is the statutory recovery of unutilised input tax credit on inputs and input services consumed by an Indian SaaS company in providing subscription, licence, or platform services to recipients located outside India. The refund flows from <strong>Section 16(3) of the IGST Act 2017</strong> read with <strong>Section 54 of the CGST Act 2017</strong> and <strong>Rule 89 of the CGST Rules 2017</strong>.</p>
                    <p>An export of service is defined under Section 2(6) IGST Act and requires five cumulative conditions: supplier in India, recipient outside India, place of supply outside India, payment in convertible foreign exchange (or INR where permitted by RBI), and supplier-recipient not merely establishments of distinct persons under Explanation 1 to Section 8.</p>
                    <p>Where the SaaS exporter operates under an active Letter of Undertaking (Form RFD-11), no IGST is charged on the export invoice and accumulated ITC is refunded under the Rule 89(4) formula. The alternative IGST-paid route under Section 54 lets the exporter pay IGST upfront and claim refund of the tax paid.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Refund for SaaS Exporters:</strong></p>
                    <ul style="margin-bottom:0;">
                        <li><strong>Export of Services:</strong> 5-condition test under Section 2(6) IGST Act 2017 - all five must be satisfied invoice by invoice.</li>
                        <li><strong>Zero-Rated Supply:</strong> Supply on which GST is charged at 0 percent but full ITC remains available, defined under Section 16(1) IGST Act.</li>
                        <li><strong>LUT (Form RFD-11):</strong> Letter of Undertaking under Rule 96A allowing zero-rated supply without IGST payment; valid for one financial year.</li>
                        <li><strong>Rule 89(2)(c):</strong> Statement requirement under CGST Rules - invoices and FIRC or BRC for service exports filed as Statement 2 in RFD-01.</li>
                        <li><strong>Rule 89(4):</strong> Formula for computing refund of accumulated ITC - Turnover of zero-rated supply x Net ITC / Adjusted Total Turnover.</li>
                        <li><strong>FIRC / FIRA:</strong> Foreign Inward Remittance Certificate or Advice - issued by AD bank or PA-CB authorised aggregator as proof of FX receipt.</li>
                        <li><strong>PA-CB:</strong> Payment Aggregator-Cross Border framework under RBI Master Direction (October 2023) replacing the older OPGSP regime.</li>
                        <li><strong>Place of Supply (Section 13):</strong> For most B2B services to overseas customers, location of recipient under Section 13(2) IGST Act.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Refund for SaaS Exporters</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Zero-Rated Supply</span>
                        <strong>Section 16 IGST Act</strong>
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
            <h2 class="section-title">Who Needs GST Refund Services for SaaS Exports?</h2>
            <div class="content-text">
                
                <p>Any Indian entity earning subscription, licence, or platform revenue from foreign customers and accumulating ITC on cloud infrastructure, software licences, professional services, and marketing spend qualifies for refund. The service applies whether billing flows through a payment aggregator like Stripe or Razorpay International or directly to an AD bank account.</p>
                <ul>
                    <li>B2B SaaS startups billing US, EU, APAC customers in USD, EUR, GBP, or AUD via Stripe.</li>
                    <li>Vertical SaaS platforms (legal-tech, fintech, HR-tech, edtech) with subscription or tiered pricing models.</li>
                    <li>IT/ITES service exporters using Razorpay International, Cashfree, BillDesk, or direct SWIFT settlement.</li>
                    <li>Indian developers and agencies on Upwork, Toptal, or direct-contract platforms with FIRC trail.</li>
                    <li>API and platform-as-a-service providers with usage-based billing and recurring annual contracts.</li>
                    <li>Merchant of Record route users (Paddle, Lemon Squeezy) where MoR resells to global end-customers.</li>
                </ul>
                <p><strong>Threshold and pre-condition:</strong> GSTIN registration is mandatory the moment aggregate turnover crosses Rs 20 lakh under Section 22 CGST Act. Even below threshold, voluntary registration is recommended once exports start, to access ITC refund. If the SaaS entity is not yet registered, complete <a href="/gst-registration">GST registration</a> before the first export invoice. The LUT in Form GST RFD-11 must be active for every financial year; without it the supplier must pay IGST upfront and claim refund through the Section 54 route.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Services for SaaS Exporters</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>LUT Filing (Form RFD-11)</strong></td><td>Annual LUT preparation, witness arrangement, online furnishing on gst.gov.in, ARN tracking. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Service-Export Refund Filing</strong></td><td>Form RFD-01 with Statement 2 reconciliation between GSTR-1 Table 6A, GSTR-3B Table 3.1(b), invoices, and FIRC. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>FIRC / FIRA Reconciliation</strong></td><td>Stripe payment-advice, Razorpay International FIRC, Cashfree FIRA, and AD-bank certificates matched at invoice level. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Subscription Billing Mapping</strong></td><td>Monthly, quarterly, and annual subscription revenue mapped to refund cycles; deferred-revenue treatment. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Place of Supply Opinion</strong></td><td>Section 13 IGST Act analysis to defend export classification against intermediary-services exposure. <span class="badge-addon">Add-on</span></td></tr>
                        <tr><td><strong>Section 54 IGST-Paid Route</strong></td><td>Where the SaaS entity opted to pay IGST, refund of tax paid on outward supplies under Section 54. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Deficiency Memo (RFD-03) Handling</strong></td><td>Drafting of replies to deficiency memos with document re-submission and officer co-ordination. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>RFD-06 Order Follow-Up</strong></td><td>Tracking of final refund order in RFD-06 plus PFMS credit verification in your bank. <span class="badge-included">Included</span></td></tr>

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
        <div class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">Step-by-Step SaaS Refund Procedure (8 Steps)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The SaaS-export refund cycle runs through eight sequential steps. Each step is anchored to a specific section, rule, or notification under Indian GST law.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Confirm Export-of-Service Classification</h3>
                    <p class="step-description">Confirm export-of-service classification under Section 2(6) IGST Act on a per-invoice basis. Watch the intermediary-services trap - Section 13(8) read with the proviso to Section 13(8)(b) is the most common rejection ground for SaaS refund claims.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 2(6) IGST Act 5-condition test</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Place of supply opinion under Section 13</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div>
                        <span class="illustration-label">Classification</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Validate Active LUT (Form RFD-11)</h3>
                    <p class="step-description">Validate active LUT in Form GST RFD-11 for the financial year under Rule 96A. If absent, the SaaS entity must pay IGST upfront and file refund under the Section 54 IGST-paid route. LUT validity is one financial year and must be renewed every April.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 96A LUT validity check</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual renewal tracker</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 10L25 22v25c0 18 14 32 35 38 21-6 35-20 35-38V22L60 10z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 50l8 8 16-18" stroke="#F5A623" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></div>
                        <span class="illustration-label">LUT Active</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Issue Tax Invoice with Export Declaration</h3>
                    <p class="step-description">Issue tax invoice with the export declaration: 'SUPPLY MEANT FOR EXPORT UNDER LUT WITHOUT PAYMENT OF IGST' per Rule 46 read with the second proviso to Rule 46. Invoice must carry customer's address, currency, and FX equivalent in INR.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 46 export declaration</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Currency and FX equivalent</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="80" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="33" y="22" width="54" height="6" fill="#F5A623" rx="1"/><line x1="33" y1="40" x2="87" y2="40" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><line x1="33" y1="52" x2="80" y2="52" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><line x1="33" y1="64" x2="75" y2="64" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><line x1="33" y1="76" x2="87" y2="76" stroke="#E8712C" stroke-width="2"/></svg></div>
                        <span class="illustration-label">Invoice Ready</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Reconcile Customer Payment with FIRC / FIRA</h3>
                    <p class="step-description">Reconcile customer payment with FIRC, FIRA, or PA-CB acknowledgement. Stripe issues 'payment advice' from Standard Chartered; Razorpay International issues FIRC monthly; Cashfree issues FIRA per transaction under Rule 89(2)(c) CGST Rules.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stripe-Standard Chartered FIRA mapping</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 89(2)(c) FIRC evidence</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="40" cy="50" r="20" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><circle cx="80" cy="50" r="20" fill="#FFF" stroke="#F5A623" stroke-width="1.5"/><path d="M55 42l10 8-10 8" stroke="#E8712C" stroke-width="2.5" fill="none" stroke-linecap="round"/><text x="40" y="55" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">$</text><text x="80" y="55" font-size="10" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">&#8377;</text></svg></div>
                        <span class="illustration-label">FIRC Mapped</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">File GSTR-1 and GSTR-3B for the Period</h3>
                    <p class="step-description">File GSTR-1 reflecting service exports in Table 6A; file GSTR-3B with Table 3.1(b) for zero-rated outward supplies per Rule 89(2)(g) CGST Rules. These returns anchor every refund claim and must reconcile to Statement 2 at invoice level.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-1 Table 6A reporting</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-3B Table 3.1(b) match</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="55" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><path d="M68 15v15h15" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="45" x2="70" y2="45" stroke="#F5A623" stroke-width="2.5"/><line x1="35" y1="56" x2="65" y2="56" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><line x1="35" y1="66" x2="68" y2="66" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><circle cx="85" cy="65" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M79 65l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></div>
                        <span class="illustration-label">Returns Filed</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Submit Form GST RFD-01 with Statement 2</h3>
                    <p class="step-description">Submit Form GST RFD-01 on gst.gov.in selecting 'Refund of ITC on export of services without payment of tax'. Attach Statement 2 with invoice-wise FIRC details under Rule 89(2)(c). The system auto-populates from GSTR-1 Table 6A.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-01 portal submission</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Statement 2 invoice-FIRC pairing</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="35" width="70" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 15v45M48 27l12-12 12 12" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></div>
                        <span class="illustration-label">RFD-01 Filed</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Compute Refund Under Rule 89(4) Formula</h3>
                    <p class="step-description">Compute the refund amount under Rule 89(4) formula: Turnover of zero-rated supply x Net ITC / Adjusted Total Turnover. Net ITC excludes capital goods ITC. The system auto-populates Statement 2; cross-check before submission to prevent rejection.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 89(4) formula application</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Net ITC excluding capital goods</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="10" width="60" height="80" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="36" y="18" width="48" height="14" rx="2" fill="#F0F4F8"/><text x="80" y="29" font-size="10" fill="#E8712C" font-weight="700" text-anchor="end" font-family="Arial">89(4)</text><rect x="36" y="40" width="10" height="10" rx="1" fill="#F5A623"/><rect x="50" y="40" width="10" height="10" rx="1" fill="#F5A623"/><rect x="64" y="40" width="10" height="10" rx="1" fill="#14365F"/><rect x="36" y="55" width="10" height="10" rx="1" fill="#F5A623"/><rect x="50" y="55" width="10" height="10" rx="1" fill="#F5A623"/><rect x="64" y="55" width="10" height="10" rx="1" fill="#14365F"/><rect x="36" y="70" width="38" height="10" rx="1" fill="#E8712C"/></svg></div>
                        <span class="illustration-label">Amount Computed</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Receive Provisional 90 Percent Refund</h3>
                    <p class="step-description">Receive provisional 90 percent refund within 7 days of Acknowledgement RFD-02 and the balance after document scrutiny. From October 2025, CBIC Instruction 6/2025 extended 90 percent provisional refund to all eligible categories per Section 54(6) CGST Act and Rule 91 CGST Rules.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 54(6) provisional refund</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CBIC Instruction 6/2025 coverage</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="25" width="80" height="50" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="50" r="14" fill="#FFF" stroke="#25D366" stroke-width="1.5"/><text x="60" y="55" font-size="14" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">&#8377;</text><circle cx="32" cy="38" r="4" fill="#25D366" opacity="0.6"/><circle cx="88" cy="62" r="4" fill="#25D366" opacity="0.6"/></svg></div>
                        <span class="illustration-label">Refund Received</span>
                        <span class="step-number-large">08</span>
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
            <h2 class="section-title">Document Checklist for SaaS GST Refund</h2>
            <div class="content-text">
                
                <p>Keep the following documents ready before filing each RFD-01 cycle. Patron Accounting maintains a digital document vault per client to ensure nothing slips between refund cycles.</p>
                <ul>
                    <li>GSTIN certificate of the SaaS entity.</li>
                    <li>Active LUT acknowledgement in Form GST RFD-11 for the financial year.</li>
                    <li>Importer-Exporter Code certificate where applicable. New SaaS companies can complete <a href="/iec-registration">IEC registration</a> before opening international payment accounts.</li>
                    <li>Customer subscription agreement or master service agreement showing recipient outside India.</li>
                    <li>Tax invoice carrying the export declaration as required by Rule 46 CGST Rules.</li>
                    <li>FIRC, FIRA, or PA-CB acknowledgement - Stripe payment advice from Standard Chartered, Razorpay International FIRC, Cashfree FIRA, or AD bank BRC.</li>
                    <li>AD-code declaration from the SaaS entity's bank (one-time submission per refund officer).</li>
                    <li>GSTR-1 (Table 6A) plus GSTR-3B (Table 3.1(b)) for the refund period.</li>
                    <li>GSTR-2A or GSTR-2B for the period to substantiate ITC claimed.</li>
                    <li>Statement 2 under Rule 89(2)(c) - invoice and FIRC details list.</li>
                    <li>CA certificate in Annexure 2 of RFD-01 where the refund amount exceeds Rs 2 lakh.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>FIRC missing for Stripe payouts at invoice level</strong></td><td>We map Stripe payment advice (Standard Chartered) to invoice batches using Stripe Connect statements and obtain AD-bank consolidated certificates per refund cycle.</td></tr>
                        <tr><td><strong>Place of supply challenged as intermediary services under Section 13(8)(b)</strong></td><td>We prepare a place-of-supply opinion under Section 13(2) IGST Act citing customer contract clauses, principal-to-principal billing, and CBIC Circular 159/15/2021-GST.</td></tr>
                        <tr><td><strong>Subscription revenue recognition mismatch with FX realisation</strong></td><td>We tag each invoice with billing-cycle, accrual date, and FX realisation date; refund is filed only when the 9-month FEMA window is comfortably satisfied.</td></tr>
                        <tr><td><strong>Merchant of Record route (Paddle / Lemon Squeezy) confusion</strong></td><td>We map MoR contracts to confirm the Indian SaaS sells to the MoR (foreign entity); MoR collects end-customer tax; FIRC from MoR is sufficient for Indian export classification.</td></tr>
                        <tr><td><strong>Refund rejection citing intermediary classification</strong></td><td>We file appeal under Section 107 CGST Act and, where required, escalate to GSTAT via the <a href="/gstat-appeal-it-software">GSTAT appeal for IT and software</a> service track.</td></tr>

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
            <h2 class="section-title">Fees for SaaS GST Refund Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Government Fee (RFD-01 filing)</strong></td><td class="table-amount">Nil (no statutory portal fee)</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees - GST Refund</strong></td><td class="table-amount">Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td><strong>LUT Filing (Form RFD-11)</strong></td><td class="table-amount">Rs 4,999 plus GST (annual, valid for one financial year)</td></tr>
                        <tr><td><strong>Single SaaS Refund Cycle (RFD-01)</strong></td><td class="table-amount">Rs 9,999 plus GST (up to 50 invoices, single tax period)</td></tr>
                        <tr><td><strong>Quarterly Refund (3 months)</strong></td><td class="table-amount">Rs 24,999 plus GST (subscription-aligned, up to 200 invoices)</td></tr>
                        <tr><td><strong>Monthly Retainer</strong></td><td class="table-amount">Rs 19,999 plus GST per month (unlimited invoices, deficiency memo handling)</td></tr>
                        <tr><td><strong>Annual SaaS Refund Retainer</strong></td><td class="table-amount">Rs 1,79,999 plus GST (12-month coverage, both routes, full FIRC reconciliation)</td></tr>
                        <tr><td><strong>Place of Supply Opinion (add-on)</strong></td><td class="table-amount">Rs 14,999 plus GST (Section 13 IGST Act analysis with case law)</td></tr>
                        <tr><td colspan="2" style="background:var(--orange-lighter);font-size:13px;color:var(--text-muted);"><em>All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. Government fees are payable separately at actuals.</em></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Refund for SaaS Exporters consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20for%20Saas%20Exporters%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long the Refund Takes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Provisional refund (90%)</strong></td><td>7 days from RFD-02 acknowledgement</td><td>Section 54(6) plus Rule 91</td></tr>
                        <tr><td><strong>Document scrutiny by officer</strong></td><td>15 to 30 days</td><td>Section 54(7)</td></tr>
                        <tr><td><strong>Final order in RFD-06</strong></td><td>60 days from RFD-01 filing</td><td>Section 54(7) statutory ceiling</td></tr>
                        <tr><td><strong>Interest on delay</strong></td><td>6 percent per annum from 61st day</td><td>Section 56 CGST Act</td></tr>
                        <tr><td><strong>FX realisation deadline (FEMA)</strong></td><td>9 months from invoice date</td><td>RBI Master Direction on Export of Goods and Services</td></tr>
                        <tr><td><strong>Steady-state monthly cycle</strong></td><td>30 to 45 days end-to-end</td><td>Once process is stabilised</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Working capital tip:</strong> Once your monthly refund cycle is stabilised, Section 54(6) provisional refund of 90 percent lands within 7 days of RFD-02 acknowledgement - usually under 10 days from filing. The remaining 10 percent follows the final RFD-06 order within 60 days. This is the single biggest cash-flow benefit Indian SaaS exporters get from professional refund management.

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
            <h2 class="section-title">Benefits of Engaging Patron Accounting</h2>
        </div>
                <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3 class="feature-title">Working Capital in 7 Days</h3>
                <p class="feature-description">Working capital recovered within 7 days through provisional 90 percent refund mechanism under Section 54(6) and Rule 91 CGST Rules. CBIC Instruction 6/2025 makes this standard for SaaS exporters from October 2025.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3 class="feature-title">Invoice-Level FIRC Reconciliation</h3>
                <p class="feature-description">FIRC reconciliation across Stripe, Razorpay International, Cashfree, and direct AD bank settled at invoice granularity - no batched approximations that trigger deficiency memos under Rule 90.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">Place-of-Supply Opinion Defence</h3>
                <p class="feature-description">Place-of-supply opinion under Section 13(2) neutralises the intermediary-services exposure under Section 13(8)(b) that triggers most rejections for SaaS exporters. CBIC Circular 159/15/2021-GST anchors our defence.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3 class="feature-title">Subscription-Cycle Aligned Filing</h3>
                <p class="feature-description">Refund cycles aligned to SaaS billing rhythm - monthly cycles for monthly bills, quarterly for quarterly invoices, annual for annual upfront contracts. Your cash flow matches your billing cycle.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="8.5" cy="7" r="4"/><polyline points="17 11 19 13 23 9"/></svg></div>
                <h3 class="feature-title">CA-Certified Annexure 2</h3>
                <p class="feature-description">Refunds above Rs 2 lakh require CA certificate in Annexure 2 of RFD-01. Our in-house CA team signs the certificate at no additional cost on retainer arrangements - eliminating a common bottleneck.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg></div>
                <h3 class="feature-title">Deficiency Memo Handling</h3>
                <p class="feature-description">RFD-03 deficiency memos handled within 7 days of receipt - drafting replies, gathering documents, co-ordinating with the refund officer, and preventing rejection orders that block working capital indefinitely.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Indian SaaS Exporters Trust Us</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</strong></p>
                <p><strong>Outcome proof:</strong> A Bengaluru-based B2B SaaS startup recovered Rs 2.4 crore across 24 monthly cycles between FY 2023-24 and FY 2025-26, with provisional 90 percent refund landing within 8 days of each filing. Total deficiency memos in 24 cycles - zero.</p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and growing SaaS startups across India. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Comparison - 3 Settlement Routes for SaaS Exporters</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Route A - Direct AD Bank</th><th>Route B - Payment Aggregator</th><th>Route C - Merchant of Record</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Route Mechanics</strong></td><td>Direct invoicing to foreign customer, payment via SWIFT to AD bank</td><td>Subscription billing via Stripe, Razorpay International, Cashfree (PA-CB aggregator)</td><td>Sale to Merchant of Record (Paddle, Lemon Squeezy) who resells to end-customers</td></tr>
                        <tr><td><strong>FX Proof Document</strong></td><td>BRC or FIRC issued by AD bank under FEMA Master Direction</td><td>FIRC, FIRA, or payment advice from PA-CB authorised aggregator</td><td>FIRC from MoR's payment to Indian SaaS entity</td></tr>
                        <tr><td><strong>GST Treatment</strong></td><td>Export of services under Section 2(6) IGST Act if 5 conditions met</td><td>Export of services under Section 2(6) IGST Act if 5 conditions met</td><td>Export of services to MoR (foreign entity) - same treatment</td></tr>
                        <tr><td><strong>End-Customer Tax</strong></td><td>SaaS entity's responsibility to determine</td><td>SaaS entity's responsibility to determine</td><td>MoR collects all end-customer tax (US sales tax, EU VAT)</td></tr>
                        <tr><td><strong>FX Markup / Fees</strong></td><td>Bank-driven, typically 0.25 to 1 percent</td><td>Aggregator-driven, typically 1 to 4 percent</td><td>MoR markup typically 5 to 10 percent on revenue</td></tr>
                        <tr><td><strong>Refund Doc Complexity</strong></td><td>Lower - one BRC per realisation</td><td>Moderate - invoice-FIRC matching across many payments</td><td>Lower - single FIRC from MoR per cycle</td></tr>
                        <tr><td><strong>Best For</strong></td><td>Larger contracts, high-value B2B SaaS</td><td>B2B and B2C SaaS with high volume, lower ticket sizes</td><td>Smaller SaaS startups wanting tax simplification</td></tr>

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
            <h2 class="section-title">Partner Services for SaaS Exporters</h2>
            <div class="content-text">
                
                <p>SaaS GST refund work rarely sits in isolation. Most SaaS exporters need adjacent compliance running in parallel:</p>
                <ul>
                    <li><a href="/gst-refund">GST refund (general)</a> - for refund types beyond service exports such as inverted duty, deemed exports, or excess balance.</li>
                    <li><a href="/gst-returns">GST return filing</a> - monthly GSTR-1 and GSTR-3B that anchor every refund claim.</li>
                    <li><a href="/gst-annual-returns">GST annual return filing</a> - GSTR-9 reconciliation that ties together all monthly SaaS refunds.</li>
                    <li><a href="/gst-audit">GST audit support</a> - for SaaS exporters above the prescribed turnover threshold.</li>
                    <li><a href="/iec-registration">IEC registration</a> - required for some payment aggregator onboarding and direct SWIFT settlement.</li>
                    <li><a href="/gstat-appeal-it-software">GSTAT appeal for IT and software</a> - when a refund order is rejected on place-of-supply or intermediary-services grounds.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework (India)</h2>
            <div class="content-text">
                
                <p>Under <strong>Section 2(6) of the IGST Act 2017</strong>, a supply of services qualifies as export of services only when all five conditions are met cumulatively: the supplier is located in India, the recipient is located outside India, the place of supply is outside India, payment is received in convertible foreign exchange (or INR where permitted by RBI), and the supplier and recipient are not merely establishments of distinct persons under Explanation 1 to Section 8.</p>
                <p>Place of supply for SaaS services is determined under <strong>Section 13 of the IGST Act</strong>. The general B2B rule under Section 13(2) is location of recipient. Section 13(8) covers specific services where place of supply is location of supplier - including intermediary services under Section 13(8)(b), which is the most common rejection ground for SaaS refund claims. CBIC Circular 159/15/2021-GST clarifies the principal-to-principal test for IT and back-office sector.</p>
                <p>Under <strong>Section 16 of the IGST Act</strong>, export of services is a zero-rated supply with refund available either as accumulated ITC under LUT (Rule 89(4) formula) or as IGST paid (Section 54). Rule 89(2)(c) requires Statement 2 with invoice-wise FIRC details. From 8 October 2024, Rule 96(10) was omitted by Notification 20/2024-Central Tax, removing earlier restrictions on combining concessional supplies with IGST refund.</p>
                <p><strong>Penalty exposure:</strong> refund rejection plus deficiency memo under Rule 90 where FIRC, place-of-supply opinion, or Statement 2 is incomplete. Failure to realise export proceeds within 9 months of invoice date attracts ITC reversal under Rule 96B for the IGST-paid route, plus FEMA exposure under Section 8 of FEMA. Wrong classification of an export as intermediary services may attract demand under Section 73 or Section 74 CGST Act with penalty up to 100 percent of tax.</p>
                <p><strong>Payment aggregator framework:</strong> from 31 October 2023, the RBI's Master Direction on Cross-Border Payment Aggregators replaces the older OPGSP regime. Three categories - PA-CB-E (export-only), PA-CB-I (import-only), and PA-CB-E and I (both) - apply. Net worth requirement is Rs 15 crore at application rising to Rs 25 crore by 31 March 2026. Authorised PA-CB entities as of January 2026 include Razorpay, Cashfree, BillDesk, Amazon Pay, PayU, Worldline, and Adyen India.</p>
                <p><strong>Government references:</strong> <a href="https://cbic-gst.gov.in" target="_blank" rel="noopener">CBIC GST portal</a>, <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">indiacode.nic.in (IGST Act and CGST Act)</a>, <a href="https://www.rbi.org.in" target="_blank" rel="noopener">RBI Master Direction on Cross-Border Payments</a>, and <a href="https://tutorial.gst.gov.in" target="_blank" rel="noopener">GST portal RFD-01 user guide</a>.</p>

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
                    <p class="faq-expanded__lead">Plain-English answers to the most common questions Indian SaaS exporters ask about GST refund - including Hinglish variants for founders comfortable in mixed language.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Refund for SaaS Exporters',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How does an Indian SaaS company claim GST refund?</h3>
                        <div class="faq-expanded__a"><p>An Indian SaaS company files Form GST RFD-01 on gst.gov.in under the category 'Refund of ITC on export of services without payment of tax'. The application must satisfy the 5-condition test under Section 2(6) IGST Act, be supported by Statement 2 with invoice-FIRC pairing under Rule 89(2)(c), and use the Rule 89(4) formula to compute the refund amount. From October 2025, CBIC Instruction 6/2025 extends 90 percent provisional refund within 7 days of acknowledgement.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is GST applicable on SaaS exports from India?</h3>
                        <div class="faq-expanded__a"><p>Export of services is a zero-rated supply under Section 16 IGST Act 2017. Where the SaaS company files an active LUT in Form GST RFD-11, no IGST is charged on the export invoice and accumulated ITC is refunded. Where LUT is not filed, IGST is charged upfront and refund is claimed under Section 54 CGST Act. GSTIN registration is mandatory once aggregate turnover crosses Rs 20 lakh under Section 22 CGST Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">SaaS exporter ka GST refund kaise milega? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Pehle GSTIN aur LUT chahiye. Phir har export invoice pe 5-condition test apply karna jo Section 2(6) IGST Act ke under hai - supplier India me, recipient bahar, place of supply bahar, convertible foreign exchange me payment, aur dono distinct establishments na ho. Ye sab pura ho to RFD-01 file karein with Statement 2, FIRC ya FIRA ke saath. Refund 60 din ke andar mil jaata hai aur 90 percent provisional 7 din me.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is FIRC and is it mandatory for SaaS refund?</h3>
                        <div class="faq-expanded__a"><p>FIRC stands for Foreign Inward Remittance Certificate, issued by the AD bank or PA-CB authorised aggregator confirming receipt of payment in convertible foreign exchange. Rule 89(2)(c) CGST Rules makes FIRC, BRC, or equivalent bank certificate mandatory documentary evidence in Statement 2 of Form GST RFD-01. Where the SaaS company receives payment via Stripe, Razorpay International, or Cashfree, the equivalent FIRA or payment advice serves the purpose.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can SaaS exporters use Stripe for international payments and claim GST refund?</h3>
                        <div class="faq-expanded__a"><p>Yes. Stripe is a globally licensed payment platform; Indian SaaS users receive payment advice from Standard Chartered Bank along with monthly Stripe Connect statements. These documents serve as FIRC equivalents under Rule 89(2)(c). However, post the RBI PA-CB Master Direction of October 2023, Stripe operates without a direct PA-CB licence in India, so many Indian SaaS exporters now use PA-CB authorised alternatives like Razorpay International, Cashfree, or Skydo for compliance certainty.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the place of supply for SaaS services to a foreign customer?</h3>
                        <div class="faq-expanded__a"><p>For most B2B SaaS supplied to a foreign customer, place of supply is the location of the recipient under Section 13(2) of the IGST Act 2017. Where the SaaS company operates as an intermediary under Section 13(8)(b), place of supply shifts to the supplier's location, defeating the export classification. CBIC Circular 159/15/2021-GST clarifies the principal-to-principal test which most SaaS contracts satisfy.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How often can a SaaS company file GST refund?</h3>
                        <div class="faq-expanded__a"><p>Form GST RFD-01 can be filed monthly so long as GSTR-1 and GSTR-3B for the relevant period have been filed and FIRC evidence is in hand. A monthly cycle is the working-capital optimal route for SaaS companies billing monthly subscriptions. Quarterly cycles suit quarterly-billed SaaS, and annual cycles work for upfront annual contracts. The 2-year limitation under Section 54(1) CGST Act runs from the relevant date.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Razorpay International ka FIRC kaisa hota hai aur GST refund me kya use hai? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Razorpay International apne PA-CB licence ke base par har export payment ke liye automated FIRC generate karta hai jo email me aata hai aur dashboard se download kiya jaa sakta hai. Iska reference number, remitter details, currency, exchange rate, aur purpose code Rule 89(2)(c) ke under valid hai. GST refund me Statement 2 me invoice-FIRC pair karna hota hai jo Razorpay automatically reconcile karke deta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">What is the difference between LUT route and IGST-paid route for SaaS exports?</h3>
                        <div class="faq-expanded__a"><p>LUT route - SaaS company files Form RFD-11 LUT, charges no IGST on export invoice, accumulates ITC, and claims refund of accumulated ITC under Rule 89(4) formula. IGST-paid route - SaaS company pays IGST on the export invoice and claims refund of tax paid under Section 54. LUT route preserves working capital; IGST-paid route is simpler operationally. Both lead to the same eventual recovery; the difference is timing of the cash.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Are subscription cancellations and refunds to foreign customers a GST issue?</h3>
                        <div class="faq-expanded__a"><p>Yes, indirectly. Where an Indian SaaS company refunds a foreign customer, the FX outflow reduces realised export turnover for the period. If the original invoice has been included in a refund claim, a credit note must be issued under Section 34 CGST Act, GSTR-1 amended, and the refund claim adjusted. Where the customer cancels mid-cycle, deferred-revenue reversal applies. We track these adjustments invoice by invoice in the monthly cycle.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul style="margin-bottom:0;">
                    <li><strong>Which Section defines export of services?</strong> Section 2(6) of the IGST Act 2017 - 5 cumulative conditions.</li>
                    <li><strong>Which form is used for SaaS refund?</strong> Form GST RFD-01 with Statement 2 under Rule 89(2)(c).</li>
                    <li><strong>Where do I report SaaS exports in GSTR-1?</strong> Table 6A of GSTR-1, mirrored in Table 3.1(b) of GSTR-3B.</li>
                    <li><strong>What is the time limit for SaaS refund?</strong> 2 years from the relevant date under Section 54(1) CGST Act.</li>
                    <li><strong>Is Stripe FIRA acceptable proof?</strong> Yes - Stripe payment advice from Standard Chartered serves as FIRC equivalent under Rule 89(2)(c).</li>
                    <li><strong>FX realisation deadline?</strong> 9 months from invoice date per RBI Master Direction on Export of Goods and Services.</li>
                    <li><strong>INR-only export allowed from any country?</strong> Only Nepal and Bhutan, via Notification 27/2023-IT dated 31 July 2023.</li>
                    <li><strong>Provisional refund percentage?</strong> 90 percent under Section 54(6) within 7 days of RFD-02 acknowledgement.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Three Clocks Are Running - Do Not Miss Them</h2>
            <div class="content-text">
                
                <p>Three statutory clocks run together for every SaaS export invoice:</p>
                <ol>
                    <li><strong>9-month FX realisation window</strong> under the RBI FEMA Master Direction on Export of Goods and Services. Miss it without RBI extension and refund eligibility lapses; ITC reversal under Rule 96B applies to the IGST-paid route.</li>
                    <li><strong>2-year refund limitation</strong> under Section 54(1) of the CGST Act 2017, counted from the relevant date. Once the window closes, your accumulated ITC is gone.</li>
                    <li><strong>Annual LUT validity</strong> under Rule 96A - every financial year. Miss the renewal and the next invoice attracts upfront IGST, blocking working capital until the Section 54 route refund processes.</li>
                </ol>
                <p>Past these points, refund eligibility lapses or processing stalls indefinitely. Patron Accounting tracks all three clocks for every retainer client.</p>
                <p><strong>Get your SaaS refund cycle set up today - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20for%20Saas%20Exporters%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. Free 15-minute eligibility call.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Recover Every Rupee of SaaS Export ITC</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF;">GST refund for SaaS exporters is the difference between recovering ITC every month in step with subscription billing and watching it pile up across quarters. Section 2(6) of the IGST Act, Section 13 place-of-supply rules, and Rule 89 of the CGST Rules together set up a zero-rated framework that rewards meticulous reconciliation across customer contracts, invoice declarations, FIRC evidence, and Statement 2 filings.</p>
                <p style="color:#FFFFFF;">Patron Accounting LLP's CA and CS team handles the end-to-end SaaS refund stack - LUT renewal, Stripe and Razorpay FIRC reconciliation, monthly RFD-01 cycle setup, place-of-supply opinion drafting, and deficiency memo handling. With offices in Pune, Mumbai, Delhi, and Gurugram and a national client base of 10,000-plus businesses, we are equipped to manage refund cycles for SaaS exporters of every size from bootstrapped startups to scaling platforms.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20for%20Saas%20Exporters%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20GST%20Refund%20for%20SaaS%20Exporters%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20GST%20Refund%20for%20SaaS%20Exporters%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Adjacent Services You May Need</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Most SaaS exporters run these services in parallel with the monthly refund cycle. End-to-end CA support across all of them.</p>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for SaaS exporters across the GST and IEC stack</div>
                <div class="pa-cross-grid">
                    <a href="/gst-refund" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path d="M9 12l2 2 4-4"/></svg></div><div><div class="pa-card-title">GST Refund (General)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11l3 3L22 4M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">GST Returns Filing</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-annual-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div><div><div class="pa-card-title">GST Annual Returns</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/iec-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gstat-appeal-it-software" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal - IT and Software</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div><div><div class="pa-card-title">GST Notice Response</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 8 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team · Patron Accounting LLP</p>
            <p>This page is reviewed every quarter (Tier 1 freshness - GST keyword class). Review triggers include GST Council decisions, CBIC notifications affecting Section 13 place-of-supply or Rule 89, RBI Master Direction amendments to the PA-CB framework, new High Court rulings on intermediary services, and changes to FIRC requirements post CBIC Instruction 6/2025.</p>
        </div>
    </div>
</section>

@include('layouts.itr-season-strip')


</main>




<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
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
    var tocBtns = Array.prototype.slice.call(document.querySelectorAll('.toc-pill'));
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




