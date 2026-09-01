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
    <title>GST Refund for SEZ Units and DTA Suppliers in India</title>
    <meta name="description" content="GST refund for SEZ units and DTA suppliers via zero-rated supply under Section 16 IGST Act and Rule 89 — monthly cycle, CA-led. Starts at Rs 11,999.">
    <link rel="canonical" href="/gst-refund-for-sez-units">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Refund for SEZ Units and DTA Suppliers in India">
    <meta property="og:description" content="GST refund for SEZ units and DTA suppliers via zero-rated supply under Section 16 IGST Act and Rule 89 — monthly cycle, CA-led. Starts at Rs 11,999.">
    <meta property="og:url" content="/gst-refund-for-sez-units/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund for SEZ Units and DTA Suppliers in India">
    <meta name="twitter:description" content="GST refund for SEZ units and DTA suppliers via zero-rated supply under Section 16 IGST Act and Rule 89 — monthly cycle, CA-led. Starts at Rs 11,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/gst-refund-for-sez-units/#breadcrumb",
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
          "name": "GST Refund for SEZ Units",
          "item": "https://www.patronaccounting.com/gst-refund-for-sez-units/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/gst-refund-for-sez-units/#faq",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is zero-rated supply to a SEZ unit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 16 of the IGST Act 2017, supply of goods or services to a Special Economic Zone unit or developer for authorised operations is treated as a zero-rated supply alongside physical exports out of India. The supplier charges no GST when exporting under a Letter of Undertaking, or pays IGST and claims refund. From 1 October 2023, Section 16(1)(b) requires that the supply be for authorised operations as defined under Section 2(c) of the SEZ Act 2005."
          }
        },
        {
          "@type": "Question",
          "name": "Who can claim GST refund - the SEZ unit or the DTA supplier?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Either party can claim under Form GST RFD-01, but never both for the same invoice. Where the supplier files, the second proviso to Rule 89(1) requires endorsement by the specified officer of the SEZ confirming receipt of goods or services for authorised operations. The SEZ unit must also furnish a declaration under Rule 89(2)(f) that it has not availed ITC of the tax paid by the supplier."
          }
        },
        {
          "@type": "Question",
          "name": "SEZ ka GST refund kaise milega? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Do raaste hain: pehla, LUT file karke bina IGST diye SEZ ko supply karna aur Rule 89 ke under accumulated ITC ka refund Form RFD-01 me Statement 4 ke saath claim karna; doosra, IGST pay karke SEZ ko supply karna aur tax paid ka refund Statement 5 ke saath claim karna. Specified officer ka endorsement aur Rule 89(2)(f) ki declaration dono cases me zaroori hai. GSTR-1 Table 6B me reporting karna hai, Table 6A me nahi."
          }
        },
        {
          "@type": "Question",
          "name": "Is endorsement by the specified officer mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes - the second proviso to Rule 89(1) read with Rule 30 of the SEZ Rules 2006 requires endorsement evidence from the specified officer for both goods and services supplies to a SEZ. For services, the endorsement is operationalised through the DTA Service Procurement Form on the SEZ Online portal from October 2019. Per the Madras High Court ruling, endorsement was not mandated under GST law for goods supplies up to 30 September 2023; it is mandatory thereafter."
          }
        },
        {
          "@type": "Question",
          "name": "What is Rule 89(2)(f) of the CGST Rules?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 89(2)(f) of the CGST Rules 2017 requires the refund applicant who supplies to a SEZ unit or developer to furnish a declaration that the SEZ unit or developer has not availed input tax credit of the tax paid by the supplier. Without this declaration in the prescribed form, the refund application is liable to deficiency memo under Rule 90 of the CGST Rules. The declaration is filed as part of Annexure I of Form GST RFD-01."
          }
        },
        {
          "@type": "Question",
          "name": "Can a SEZ supplier file refund every month?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Form GST RFD-01 can be filed monthly so long as the supplier has filed GSTR-1 and GSTR-3B for the relevant period and possesses specified-officer endorsement and the Rule 89(2)(f) declaration. A monthly cycle is the working-capital optimal route for IT, pharma, and engineering DTA suppliers with high ITC accumulation. From October 2025, CBIC Instruction 6/2025 makes 90 percent provisional refund available within 7 days for eligible SEZ refund claims."
          }
        },
        {
          "@type": "Question",
          "name": "Where in GSTR-1 are SEZ supplies reported?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SEZ supplies are reported in Table 6B of GSTR-1, separately for 'with payment of IGST' and 'without payment of tax (LUT)' categories. Reporting in Table 6A is reserved for exports outside India and is a common error that causes refund rejection. The amount in Table 6B must match the zero-rated outward supply figure in Table 3.1(b) of GSTR-3B for the same period."
          }
        },
        {
          "@type": "Question",
          "name": "Does an SEZ unit need separate GST registration from its DTA operations?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Rule 8 of the CGST Rules 2017 read with the proviso to Section 25(2) of the CGST Act mandates that an SEZ unit be treated as a distinct vertical from any DTA unit of the same legal entity in the same state. Two separate GSTINs are therefore required, with separate returns, separate LUTs, and separate refund applications. Failure to register separately causes registration cancellation risk under Section 29 CGST Act."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between SEZ refund and EOU refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An SEZ is deemed outside customs territory; supplies into an SEZ from DTA are zero-rated under Section 16 IGST Act. An EOU operates within Indian customs territory; supplies from DTA to an EOU are deemed exports under Section 147 CGST Act and Notification 48/2017-CT. SEZ refunds use Statement 4 or Statement 5; EOU deemed-export refunds use Statement 5B with supplier-or-recipient option."
          }
        },
        {
          "@type": "Question",
          "name": "Specified officer endorsement DSPF kya hai aur kaise milta hai? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DSPF matlab DTA Service Procurement Form, jo October 2019 se SEZ Online (NDML) portal par activate hai. SEZ unit isme service invoices upload karta hai, payment proof aur LUT number lagata hai. Phir Authorised Officer ya Specified Officer review karke approve karta hai aur DTA supplier ko email me acknowledgement bhejta hai jo refund claim ke liye proof ban jaata hai."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/gst-refund-for-sez-units/#service",
      "name": "GST Refund for SEZ Units",
      "description": "End-to-end GST refund filing for SEZ units, SEZ developers, and DTA suppliers in India under Section 16 IGST Act zero-rated framework, including LUT-based refund of accumulated ITC under Rule 89, IGST-paid refund under Section 54, specified-officer endorsement coordination via SEZ Online DSPF, and monthly RFD-01 cycle setup.",
      "serviceType": "Tax Refund and SEZ Compliance Service",
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
                <a href="/gst-refund/" style="color:var(--text-muted);text-decoration:none;font-weight:500;">GST Refund</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg>
            </li>
            <li><span style="color:var(--orange);font-weight:600;">GST Refund for SEZ Units Services</span></li>
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
                        GST Refund for SEZ Units in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Letter of Approval, LUT, GSTIN, specified-officer endorsement, GSTR-1 Table 6B, BRC for outbound exports.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> SEZ refund filing starts at Rs 11,999 plus GST per claim cycle (single tax period, up to 25 invoices).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> SEZ unit, SEZ developer, or DTA supplier making zero-rated supplies for authorised operations under Section 16 IGST Act.</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20refund%20for%20my%20SEZ%20unit%20or%20DTA%20supply.%20Please%20share%20a%20free%20quote." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Refund for SEZ Units',
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting recovered Rs 42 lakh in stuck ITC refunds across 3 GSTINs for our SEZ export unit. Their GSTR-1 Table 6B reconciliation caught mismatches we had missed for 2 quarters. The 90 percent provisional refund came through within 8 days of filing.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PS</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Sharma</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, IT/ITES SEZ Unit</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a DTA supplier to multiple SEZ units under LUT, we needed monthly refund claims to maintain cash flow. Patron Accounting set up a monthly retainer, handles DSPF endorsement, files RFD-01 every cycle, and resolves deficiency memos. Our cycle has gone from 90-plus days to under 30 days.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RA</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Rohit Agarwal</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Head, DTA Supplier to SEZ</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">After Section 16(1)(b) was amended for authorised operations from 1 October 2023, our refund applications kept getting deficiency memos. The Patron team mapped every service line to our LoA and obtained DC clarification - we have been refund-clean for 6 cycles since.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Arjun Kapoor</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Biotech SEZ Unit</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We were reporting SEZ supplies in Table 6A instead of Table 6B and the refund was rejected outright. Patron not only corrected GSTR-1 via amendment but also re-filed RFD-01 within the Section 54(1) 2-year window. Recovery: Rs 1.8 crore that we had written off.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VG</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Gupta</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Director, Engineering SEZ</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
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
                    <p>From DTA suppliers to IT/ITES, biotech, manufacturing, and service-sector SEZ units, we handle monthly RFD-01 cycles, DSPF endorsement, and refund rejection appeals across India.</p>
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
                    <p><strong>&#128204; TL;DR - GST Refund for SEZ Units Services at a Glance</strong></p>
                    <p>Supplies of goods or services to a SEZ unit or SEZ developer for authorised operations are zero-rated under Section 16 of the IGST Act 2017. Either the DTA supplier or the SEZ unit can claim refund through Form GST RFD-01 - the supplier under LUT (refund of accumulated ITC) or with payment of IGST (refund of tax paid). Endorsement by the specified officer under Rule 30 of SEZ Rules 2006 is mandatory for service supplies from 1 October 2023.</p>
                    <div class="table-responsive-wrapper" style="margin-top:16px;">
                    <table>
                        <thead><tr><th>Quick Reference</th><th>Details</th></tr></thead>
                        <tbody>
                            <tr><td><strong>Governing Acts</strong></td><td>IGST Act 2017 (Section 16), CGST Act 2017 (Section 54), SEZ Act 2005 (Section 26), SEZ Rules 2006 (Rule 30)</td></tr>
                            <tr><td><strong>Applicable To</strong></td><td>SEZ units, SEZ developers, and DTA suppliers making zero-rated supplies for authorised operations</td></tr>
                            <tr><td><strong>Refund Routes</strong></td><td>LUT route (Rule 89, accumulated ITC) or IGST-paid route (Section 54, tax paid)</td></tr>
                            <tr><td><strong>Patron Fees</strong></td><td>Starting Rs 11,999 per refund cycle plus GST; LUT filing Rs 4,999</td></tr>
                            <tr><td><strong>Penalty for Non-Endorsement</strong></td><td>Refund rejection plus deficiency memo under Rule 90; ITC reversal exposure for supplier</td></tr>
                            <tr><td><strong>Form / Portal</strong></td><td>Form GST RFD-01 on <a href="https://tutorial.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a> plus DSPF on <a href="https://www.sezonline-ndml.com" target="_blank" rel="noopener">SEZ Online (NDML)</a></td></tr>
                            <tr><td><strong>Authority</strong></td><td>Jurisdictional GST Refund Officer plus Specified Officer of the SEZ under SEZ Rules 2006</td></tr>
                        </tbody>
                    </table>
                    </div>
                    <p style="display:none;"></p>
                </div>
                <p>GST refund for SEZ units is the recovery of accumulated input tax credit or integrated tax paid on transactions that qualify as zero-rated supply under Section 16 of the IGST Act 2017 read with Section 26 of the SEZ Act 2005. The refund flows through Form GST RFD-01 on the GST portal and is filed either by the DTA supplier of goods or services or by the SEZ unit or developer that received them. Two parallel routes apply: zero-rated supply under a Letter of Undertaking with refund of accumulated ITC, or zero-rated supply on payment of IGST with refund of the tax paid.</p>
                <p>Patron Accounting LLP has filed monthly SEZ refund cycles for IT/ITES, biotech, manufacturing, and service-sector SEZ units across Pune, Mumbai, Delhi, and Gurugram since the GST rollout on 1 July 2017. Our CA and CS team handles LUT renewals, specified-officer endorsement via DSPF, monthly RFD-01 cycles, Rule 89(2)(f) declarations, and RFD-06 follow-up.</p>
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
                <h2 class="section-title">What Is GST Refund for SEZ Units?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST refund for SEZ units is the statutory recovery of unutilised input tax credit or integrated tax paid on supplies treated as zero-rated under the GST regime when made to a Special Economic Zone unit or developer. The legal basis is <strong>Section 16 of the IGST Act 2017</strong>, which classifies any supply of goods or services to an SEZ unit or developer for authorised operations as a zero-rated supply, alongside physical exports out of India.</p>
                    <p>Procedural mechanics are anchored in <strong>Section 54 of the CGST Act 2017</strong> and <strong>Rule 89 of the CGST Rules 2017</strong>, while the SEZ-side conditions flow from <strong>Section 26 of the SEZ Act 2005</strong> and <strong>Rule 30 of the SEZ Rules 2006</strong>. Section 16(1)(b) was amended by the Finance Act 2021 to add the qualifier 'for authorised operations', operationalised through Notification 1/2023-Integrated Tax with effect from 1 October 2023.</p>
                    <p>The framework applies to two distinct actors. The DTA supplier sells goods or services to a SEZ unit and recovers either accumulated ITC (under LUT) or IGST paid. The SEZ unit itself files refund where it has paid IGST that should have been zero-rated, or where it has accumulated ITC on its own export operations from the Zone.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Refund for SEZ Units:</strong></p>
                    <ul style="margin-bottom:0;">
                        <li><strong>SEZ Unit / Developer:</strong> An entity holding a Letter of Approval under the SEZ Act 2005 to operate within or to develop a notified Special Economic Zone.</li>
                        <li><strong>Authorised Operations:</strong> Operations approved under Section 4(2) and Section 15(9) of the SEZ Act 2005 - added to Section 16 IGST Act with effect from 1 October 2023.</li>
                        <li><strong>Zero-Rated Supply:</strong> Supply on which GST is charged at 0 percent but full ITC remains available, defined under Section 16(1) IGST Act.</li>
                        <li><strong>LUT (Form RFD-11):</strong> Letter of Undertaking under Rule 96A allowing zero-rated supply without IGST payment; valid for one financial year.</li>
                        <li><strong>Rule 89(2)(e):</strong> Statement requirement under CGST Rules - invoice statement plus evidence of endorsement by specified officer for SEZ goods or services supplies.</li>
                        <li><strong>Rule 89(2)(f):</strong> Declaration that the SEZ unit or SEZ developer has not availed input tax credit of the tax paid by the supplier.</li>
                        <li><strong>Specified Officer / Authorised Officer:</strong> Officer defined under Rule 2 of SEZ Rules 2006 who endorses receipt of goods or services for authorised operations.</li>
                        <li><strong>DSPF:</strong> DTA Service Procurement Form - online module on SEZ Online (NDML) operational from October 2019 for service-invoice endorsement.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Refund for SEZ Units</text>
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
            <h2 class="section-title">Who Needs SEZ GST Refund Services?</h2>
            <div class="content-text">
                
                <p>The service applies to two distinct actors under the same zero-rated framework. The DTA supplier sells goods or services to a SEZ unit and recovers either accumulated ITC (under LUT) or IGST paid. The SEZ unit itself files refund where it has paid IGST that should have been zero-rated, or where it has accumulated ITC on its own export operations.</p>
                <ul>
                    <li>DTA suppliers of goods or services to any SEZ unit or developer for authorised operations.</li>
                    <li>SEZ units exporting finished goods or services and accumulating ITC on inputs and input services.</li>
                    <li>SEZ developers procuring construction materials, plant, and services from DTA suppliers under Section 26 SEZ Act.</li>
                    <li>IT and ITES SEZ units with high input service ITC (telecom, software licences, professional services).</li>
                    <li>Biotech, pharma, and engineering SEZ units with high input goods ITC and capital-goods purchases.</li>
                    <li>Free Trade Warehousing Zone (FTWZ) operators where the FTWZ is located within a notified SEZ.</li>
                </ul>
                <p><strong>Threshold and pre-condition:</strong> separate GSTIN registration is mandatory for the SEZ unit even if the same legal entity also operates in DTA in the same state, as required by Rule 8 of the CGST Rules 2017 read with the proviso to Section 25(2) of the CGST Act. If the unit has not yet registered, complete <a href="/gst-registration/">GST registration</a> before the first inward or outward supply. The unit must also maintain LUT validity in Form GST RFD-11 for every financial year to avoid IGST cash outflow on outward supplies.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Services for SEZ Stakeholders</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>LUT Filing (Form RFD-11)</strong></td><td>Annual LUT preparation for DTA suppliers and SEZ units, witness arrangement, online furnishing on gst.gov.in. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>DTA-Supplier Refund (LUT Route)</strong></td><td>RFD-01 filing under Rule 89 with Statement 4 reconciliation; specified-officer endorsement coordination through DSPF. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>DTA-Supplier Refund (IGST Paid)</strong></td><td>Refund of IGST paid on SEZ supplies under Section 54; reconciliation with GSTR-1 Table 6B and GSTR-3B Table 3.1(b). <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>SEZ Unit Outbound Refund</strong></td><td>Refund of accumulated ITC where the SEZ unit exports goods or services from the Zone under LUT. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Specified-Officer Endorsement</strong></td><td>End-to-end DSPF coordination, LoA mapping, authorised-operations matching, follow-ups with DC office. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Monthly Refund Cycle Setup</strong></td><td>Process map, ERP tagging, internal SLA between operations and finance, quarterly retainer with deficiency-memo handling. <span class="badge-addon">Add-on</span></td></tr>
                        <tr><td><strong>Rule 89(2)(f) Declaration</strong></td><td>Annexure I declaration drafted and routed to SEZ unit director or authorised signatory for sign-off. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Deficiency Memo (RFD-03) Handling</strong></td><td>Drafting of replies to deficiency memos with document re-submission and officer co-ordination. <span class="badge-included">Included</span></td></tr>

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
            <h2 class="section-title">Step-by-Step SEZ Refund Procedure (8 Steps)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The SEZ refund pipeline runs through eight sequential steps. Each step is anchored to a specific section, rule, or notification under Indian law.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Confirm LoA and LUT Validity</h3>
                    <p class="step-description">Confirm SEZ unit Letter of Approval and LUT validity: LoA from the Development Commissioner under Section 15 SEZ Act 2005, and LUT in Form GST RFD-11 valid for the current financial year per Rule 96A CGST Rules.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LoA under Section 15 SEZ Act 2005</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LUT validity under Rule 96A</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><circle cx="80" cy="56" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M76 56l3 3 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round" fill="none"/></svg></div>
                        <span class="illustration-label">LoA + LUT Active</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Choose Route - LUT vs IGST-Paid</h3>
                    <p class="step-description">Choose route: zero-rated supply under LUT (no IGST upfront, refund accumulated ITC) or zero-rated supply with payment of IGST (claim refund of tax paid). Both options flow from Section 16(3) IGST Act.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 16(3) IGST Act dual route</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Working capital optimisation</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="6" fill="#14365F"/><path d="M60 44L30 25" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><path d="M60 44L90 25" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><rect x="15" y="10" width="30" height="20" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="30" y="24" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LUT</text><rect x="75" y="10" width="30" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="90" y="24" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">IGST</text><path d="M60 56v20" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><rect x="40" y="75" width="40" height="14" rx="3" fill="#FFE0B2"/><text x="60" y="86" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RFD-01</text></svg></div>
                        <span class="illustration-label">Route Selected</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Issue Invoice with SEZ Declaration</h3>
                    <p class="step-description">Issue tax invoice with SEZ declaration: 'SUPPLY MEANT FOR SEZ UNIT OR SEZ DEVELOPER FOR AUTHORISED OPERATIONS UNDER LUT WITHOUT PAYMENT OF IGST' or the 'with payment' equivalent, per Rule 46 CGST Rules.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 46 SEZ invoice declaration</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Authorised operations tagged</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="80" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="33" y="22" width="54" height="6" fill="#F5A623" rx="1"/><line x1="33" y1="40" x2="87" y2="40" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><text x="60" y="56" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEZ AUTHORISED OPS</text><line x1="33" y1="64" x2="75" y2="64" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><line x1="33" y1="76" x2="87" y2="76" stroke="#E8712C" stroke-width="2"/></svg></div>
                        <span class="illustration-label">Invoice Issued</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Obtain Specified-Officer Endorsement</h3>
                    <p class="step-description">For goods, the SEZ Online entry plus Bill of Entry endorsement; for services, the DSPF flow on SEZ Online from 1 October 2023 onwards under Rule 30(4) SEZ Rules 2006 read with the second proviso to Rule 89(1) CGST Rules.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 30(4) SEZ Rules endorsement</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSPF service approval</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="55" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><line x1="28" y1="32" x2="65" y2="32" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><line x1="28" y1="45" x2="62" y2="45" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><circle cx="85" cy="50" r="20" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/><path d="M75 50l8 8 14-14" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/><text x="85" y="80" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSPF</text></svg></div>
                        <span class="illustration-label">DSPF Endorsed</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">File GSTR-1 Table 6B and GSTR-3B</h3>
                    <p class="step-description">File GSTR-1 reflecting SEZ supplies in Table 6B (NOT Table 6A which is for exports outside India); file GSTR-3B with Table 3.1(b) for zero-rated outward supplies per Rule 89(2)(g) CGST Rules.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-1 Table 6B reporting</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-3B Table 3.1(b) match</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="55" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><path d="M68 15v15h15" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="50" y="48" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Table 6B</text><line x1="35" y1="56" x2="65" y2="56" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><line x1="35" y1="66" x2="68" y2="66" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><circle cx="85" cy="65" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M79 65l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></div>
                        <span class="illustration-label">Returns Filed</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Submit Form GST RFD-01</h3>
                    <p class="step-description">Submit Form GST RFD-01 on gst.gov.in selecting the correct refund category: 'on account of supplies made to SEZ unit or SEZ developer (without payment of tax)' for the LUT route, or 'with payment of tax' for the IGST-paid route.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-01 portal submission</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Correct refund category selected</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="35" width="70" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 15v45M48 27l12-12 12 12" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/><text x="60" y="65" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RFD-01</text></svg></div>
                        <span class="illustration-label">RFD-01 Filed</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Attach Route-Specific Statements</h3>
                    <p class="step-description">Attach the route-specific statements and declarations: Statement 4 with invoice details for the LUT route; Statement 5 plus shipping bill or BoE for the IGST-paid route. Furnish the Rule 89(2)(f) declaration that the SEZ unit has not availed ITC of the tax paid.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Statement 4 or Statement 5</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 89(2)(f) declaration</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="40" height="60" rx="3" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="40" y="28" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Stmt 4</text><line x1="26" y1="38" x2="54" y2="38" stroke="#14365F" stroke-width="1" opacity="0.4"/><line x1="26" y1="48" x2="52" y2="48" stroke="#14365F" stroke-width="1" opacity="0.4"/><line x1="26" y1="58" x2="54" y2="58" stroke="#14365F" stroke-width="1" opacity="0.4"/><rect x="65" y="20" width="40" height="60" rx="3" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="85" y="38" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Stmt 5</text><line x1="71" y1="48" x2="99" y2="48" stroke="#14365F" stroke-width="1" opacity="0.4"/><line x1="71" y1="58" x2="97" y2="58" stroke="#14365F" stroke-width="1" opacity="0.4"/><line x1="71" y1="68" x2="99" y2="68" stroke="#14365F" stroke-width="1" opacity="0.4"/></svg></div>
                        <span class="illustration-label">Statements Attached</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Receive Provisional 90 Percent Refund</h3>
                    <p class="step-description">Receive provisional 90 percent refund within 7 days of Acknowledgement RFD-02 and the balance after document scrutiny. From October 2025, CBIC Instruction 6/2025 extended the 90 percent provisional refund mechanism to all eligible refund categories per Section 54(6) CGST Act and Rule 91 CGST Rules.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 54(6) provisional refund</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CBIC Instruction 6/2025 coverage</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="25" width="80" height="50" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="50" r="14" fill="#FFF" stroke="#25D366" stroke-width="1.5"/><text x="60" y="55" font-size="14" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">&#8377;</text><circle cx="32" cy="38" r="4" fill="#25D366" opacity="0.6"/><circle cx="88" cy="62" r="4" fill="#25D366" opacity="0.6"/><text x="60" y="92" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">90% in 7 days</text></svg></div>
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
            <h2 class="section-title">Document Checklist for SEZ GST Refund</h2>
            <div class="content-text">
                
                <p>Keep the following documents ready before filing each RFD-01 cycle. Patron Accounting maintains a digital document vault per client to ensure nothing slips between refund cycles.</p>
                <ul>
                    <li>Separate GSTIN certificate for the SEZ unit (or DTA-side GSTIN of the supplier).</li>
                    <li>Letter of Approval from Development Commissioner with current validity.</li>
                    <li>Active LUT acknowledgement in Form GST RFD-11 for the financial year.</li>
                    <li>Tax invoice carrying SEZ declaration as required by Rule 46 CGST Rules.</li>
                    <li>Specified-officer endorsement - SEZ Online goods entry or DSPF service approval.</li>
                    <li>Bill of Entry or shipping bill where applicable.</li>
                    <li>BRC or e-BRC for outbound exports from the SEZ realised within the FEMA window.</li>
                    <li>Importer-Exporter Code certificate where the SEZ unit imports directly. New units can complete <a href="/iec-registration/">IEC registration</a> before the first import.</li>
                    <li>GSTR-1 (Table 6B for SEZ supplies) plus GSTR-3B (Table 3.1(b)) for the refund period.</li>
                    <li>Rule 89(2)(f) declaration that the SEZ unit has not availed ITC of the tax paid.</li>
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
                                                <tr><td><strong>Specified-officer endorsement delay on DSPF</strong></td><td>We pre-fill DSPF with LUT number, invoice payment trail, and authorised-operations mapping; coordinate weekly with DC office and chase queries within 24 hours.</td></tr>
                        <tr><td><strong>Refund rejected because GSTR-1 used Table 6A instead of Table 6B</strong></td><td>We reconcile every SEZ invoice and shift the reporting to Table 6B via GSTR-1 amendment in the next return period; refile RFD-01 within the 2-year Section 54(1) window.</td></tr>
                        <tr><td><strong>Authorised-operations mismatch flagged by SEZ officer</strong></td><td>We map every service line to the SEZ unit's approved list of services in the LoA and obtain a one-time clarification letter from the DC office if needed.</td></tr>
                        <tr><td><strong>Rule 89(2)(f) declaration rejected as not signed by SEZ unit</strong></td><td>We arrange a fresh declaration on the SEZ unit's letterhead with director or authorised signatory sign-off, attached as Annexure I to RFD-01.</td></tr>
                        <tr><td><strong>SEZ unit and DTA unit treated as one GSTIN</strong></td><td>We split the registration under Rule 8 CGST Rules with the proviso to Section 25(2); the SEZ vertical becomes a distinct GSTIN, separate returns, separate LUT, separate refund applications.</td></tr>

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
            <h2 class="section-title">Fees for SEZ GST Refund Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Government Fee (RFD-01 filing)</strong></td><td class="table-amount">Nil (no statutory portal fee)</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees - GST Refund</strong></td><td class="table-amount">Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td><strong>LUT Filing (Form RFD-11)</strong></td><td class="table-amount">Rs 4,999 plus GST (annual, valid for one financial year)</td></tr>
                        <tr><td><strong>Single SEZ Refund Cycle (RFD-01)</strong></td><td class="table-amount">Rs 11,999 plus GST (up to 25 invoices, single tax period)</td></tr>
                        <tr><td><strong>Bulk SEZ Refund (multi-month)</strong></td><td class="table-amount">Rs 27,999 plus GST (up to 100 invoices, three-month window)</td></tr>
                        <tr><td><strong>Monthly Retainer</strong></td><td class="table-amount">Rs 24,999 plus GST per month (unlimited invoices, deficiency memo handling, DSPF coordination)</td></tr>
                        <tr><td><strong>Annual SEZ Refund Retainer</strong></td><td class="table-amount">Rs 1,99,999 plus GST (12-month coverage, both routes, full DSPF coordination)</td></tr>
                        <tr><td><strong>DSPF Endorsement Standalone Support</strong></td><td class="table-amount">Rs 9,999 plus GST per quarter (endorsement-only mandate without refund filing)</td></tr>
                        <tr><td colspan="2" style="background:var(--orange-lighter);font-size:13px;color:var(--text-muted);"><em>All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. Government fees are payable separately at actuals.</em></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Refund for SEZ Units consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20discuss%20SEZ%20GST%20refund%20filing%20with%20Patron%20Accounting." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long the SEZ Refund Takes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Provisional refund (90%)</strong></td><td>7 days from RFD-02 acknowledgement</td><td>Section 54(6) plus Rule 91</td></tr>
                        <tr><td><strong>Document scrutiny by officer</strong></td><td>15 to 30 days</td><td>Section 54(7)</td></tr>
                        <tr><td><strong>Final order in RFD-06</strong></td><td>60 days from RFD-01 filing</td><td>Section 54(7) statutory ceiling</td></tr>
                        <tr><td><strong>Interest on delay</strong></td><td>6 percent per annum from 61st day</td><td>Section 56 CGST Act</td></tr>
                        <tr><td><strong>Specified-officer DSPF endorsement</strong></td><td>5 to 15 days post-submission</td><td>SEZ Rule 30 read with DSPF SOP</td></tr>
                        <tr><td><strong>Monthly cycle steady-state</strong></td><td>30 to 45 days end-to-end</td><td>Once process is stabilised</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Working capital tip:</strong> Once your monthly refund cycle is stabilised, Section 54(6) provisional refund of 90 percent lands within 7 days of RFD-02 acknowledgement - usually under 10 days from filing. The remaining 10 percent follows the final RFD-06 order within 60 days. This is the single biggest cash-flow benefit DTA suppliers and SEZ units get from professional refund management.

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
                <p class="feature-description">Working capital recovered within 7 days through provisional 90 percent refund mechanism under Section 54(6) and Rule 91 CGST Rules. CBIC Instruction 6/2025 makes this standard for SEZ refunds from October 2025.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                <h3 class="feature-title">DSPF Endorsement Compressed</h3>
                <p class="feature-description">Specified-officer endorsement turnaround compressed by 30 to 60 percent through DSPF pre-fill and follow-up SOPs. We chase DC office queries within 24 hours and keep the LoA-to-invoice mapping current.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3 class="feature-title">Table 6B Reconciliation</h3>
                <p class="feature-description">Risk of refund rejection cut sharply by reconciling GSTR-1 Table 6B with GSTR-3B Table 3.1(b) at invoice level. Common Table 6A error eliminated. Every SEZ invoice tagged at the source.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3 class="feature-title">Section 16(1)(b) Compliance</h3>
                <p class="feature-description">Direct access to a CA-led team experienced in handling the Section 16(1)(b) amendment effective 1 October 2023 - the authorised-operations gate that now governs every SEZ supply refund.</p>
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
            <h2 class="section-title">Why Indian SEZ Units Trust Us</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</strong></p>
                <p><strong>Outcome proof:</strong> A Bengaluru-based IT/ITES SEZ unit recovered Rs 5.7 crore across 14 monthly refund cycles between FY 2024-25 and FY 2025-26 through the LUT route, with provisional 90 percent refund hitting within 8 days each cycle. Total deficiency memos in 14 cycles - one (resolved within 5 days).</p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and growing SEZ units across India. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Comparison - LUT Route vs IGST-Paid Route for SEZ Supplies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Route A - LUT (without IGST)</th><th>Route B - IGST-Paid</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Trigger Event</strong></td><td>DTA supplier or SEZ unit makes zero-rated supply under LUT without paying IGST</td><td>DTA supplier or SEZ unit makes zero-rated supply on payment of IGST</td></tr>
                        <tr><td><strong>Working Capital Impact</strong></td><td>Best - no IGST outflow upfront</td><td>Higher - IGST funded for 7 to 60 days until refund</td></tr>
                        <tr><td><strong>Statement Filed</strong></td><td>Statement 4 (LUT-based supplies)</td><td>Statement 5 (with payment of tax)</td></tr>
                        <tr><td><strong>RFD-01 Category</strong></td><td>Refund on account of supplies made to SEZ unit or developer (without payment of tax)</td><td>Refund on account of supplies made to SEZ unit or developer (with payment of tax)</td></tr>
                        <tr><td><strong>Refund Quantum</strong></td><td>Accumulated unutilised ITC computed under Rule 89(4) formula</td><td>Full IGST paid on the SEZ invoice</td></tr>
                        <tr><td><strong>Provisional 90 percent</strong></td><td>Within 7 days under Section 54(6)</td><td>Within 7 days under Section 54(6)</td></tr>
                        <tr><td><strong>Endorsement Required</strong></td><td>Yes - specified officer under Rule 30 SEZ Rules and second proviso to Rule 89(1)</td><td>Yes - specified officer under Rule 30 SEZ Rules and second proviso to Rule 89(1)</td></tr>
                        <tr><td><strong>Best For</strong></td><td>Steady-state DTA suppliers with high input ITC accumulation</td><td>Suppliers with low ITC accumulation or cash-flow tolerance</td></tr>

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
            <h2 class="section-title">Partner Services for SEZ Stakeholders</h2>
            <div class="content-text">
                
                <p>SEZ refund work rarely sits in isolation. Most SEZ units and DTA suppliers need adjacent compliance running in parallel:</p>
                <ul>
                    <li><a href="/gst-refund/">GST refund (general)</a> - for refund types beyond SEZ such as inverted duty, deemed exports, or excess balance.</li>
                    <li><a href="/gst-returns-for-sez/">GST returns for SEZ</a> - monthly GSTR-1 (Table 6B) and GSTR-3B filing is the gateway to any SEZ refund.</li>
                    <li><a href="/gst-annual-returns/">GST annual return filing</a> - GSTR-9 reconciliation that ties together all monthly SEZ refunds.</li>
                    <li><a href="/gst-audit/">GST audit support</a> - for SEZ units above the prescribed turnover threshold.</li>
                    <li><a href="/iec-registration/">IEC registration</a> - Importer-Exporter Code is mandatory for direct imports by SEZ units.</li>
                    <li><a href="/gstat-appeal-exporters/">GSTAT appeal for exporters</a> - when a SEZ refund order is rejected, appeal lies before the GST Appellate Tribunal.</li>
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
                
                <p>Under <strong>Section 16 of the IGST Act 2017</strong>, supply of goods or services to a SEZ unit or developer for authorised operations is a zero-rated supply, with refund available either as IGST paid on outward supply or as accumulated ITC under LUT in line with Section 16(3). Section 16(1)(b) was amended by the Finance Act 2021 to add the qualifier 'for authorised operations', operationalised through Notification 1/2023-Integrated Tax dated 31 July 2023 with effect from 1 October 2023.</p>
                <p><strong>Section 26 of the SEZ Act 2005</strong> grants SEZ units and developers exemption from any duties or taxes on goods or services procured from DTA for authorised operations. Rule 30 of the SEZ Rules 2006 prescribes the procedural framework for such procurement and the endorsement obligation. Rule 30(4) requires the specified officer to endorse the receipt of goods or services for authorised operations, which becomes documentary proof for the refund applicant.</p>
                <p><strong>Section 54 of the CGST Act 2017</strong> read with Rule 89 of the CGST Rules 2017 prescribes the refund machinery, including the 2-year limitation period from the relevant date. The second proviso to Rule 89(1) names the supplier of goods (after admission to SEZ) and the supplier of services (with endorsement evidence) as the persons who file the refund. Rule 89(2)(e) prescribes the invoice statement and endorsement evidence to be enclosed; Rule 89(2)(f) prescribes the declaration that the SEZ unit has not availed ITC of the tax paid by the supplier.</p>
                <p><strong>Penalty exposure:</strong> refund rejection plus deficiency memo under Rule 90 where endorsement, declaration, or reconciliation is incomplete. Where IGST has wrongly been collected on a supply that should have been zero-rated, the supplier may be exposed to ITC reversal under Section 17 read with Rule 42, plus interest under Section 50 CGST Act. Recipient SEZ unit's failure to use procured goods or services for authorised operations may invite enforcement under Section 11 SEZ Act 2005 plus refund recovery under Section 73 or Section 74 CGST Act.</p>
                <p><strong>Government references:</strong> <a href="https://cbic-gst.gov.in" target="_blank" rel="noopener">CBIC GST portal</a>, <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">indiacode.nic.in (IGST Act, CGST Act, SEZ Act)</a>, <a href="https://www.sezonline-ndml.com" target="_blank" rel="noopener">SEZ Online (NDML) DSPF portal</a>, and <a href="https://tutorial.gst.gov.in" target="_blank" rel="noopener">GST portal SEZ refund user guide</a>.</p>

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
                    <p class="faq-expanded__lead">Plain-English answers to the most common questions DTA suppliers and SEZ units ask about GST refund - including Hinglish variants for stakeholders comfortable in mixed language.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Refund for SEZ Units',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is zero-rated supply to a SEZ unit?</h3>
                        <div class="faq-expanded__a"><p>Under Section 16 of the IGST Act 2017, supply of goods or services to a Special Economic Zone unit or developer for authorised operations is treated as a zero-rated supply alongside physical exports out of India. The supplier charges no GST when exporting under a Letter of Undertaking, or pays IGST and claims refund. From 1 October 2023, Section 16(1)(b) requires that the supply be for authorised operations as defined under Section 2(c) of the SEZ Act 2005.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who can claim GST refund - the SEZ unit or the DTA supplier?</h3>
                        <div class="faq-expanded__a"><p>Either party can claim under Form GST RFD-01, but never both for the same invoice. Where the supplier files, the second proviso to Rule 89(1) requires endorsement by the specified officer of the SEZ confirming receipt of goods or services for authorised operations. The SEZ unit must also furnish a declaration under Rule 89(2)(f) that it has not availed ITC of the tax paid by the supplier.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">SEZ ka GST refund kaise milega? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Do raaste hain: pehla, LUT file karke bina IGST diye SEZ ko supply karna aur Rule 89 ke under accumulated ITC ka refund Form RFD-01 me Statement 4 ke saath claim karna; doosra, IGST pay karke SEZ ko supply karna aur tax paid ka refund Statement 5 ke saath claim karna. Specified officer ka endorsement aur Rule 89(2)(f) ki declaration dono cases me zaroori hai. GSTR-1 Table 6B me reporting karna hai, Table 6A me nahi.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is endorsement by the specified officer mandatory?</h3>
                        <div class="faq-expanded__a"><p>Yes - the second proviso to Rule 89(1) read with Rule 30 of the SEZ Rules 2006 requires endorsement evidence from the specified officer for both goods and services supplies to a SEZ. For services, the endorsement is operationalised through the DTA Service Procurement Form on the SEZ Online portal from October 2019. Per the Madras High Court ruling, endorsement was not mandated under GST law for goods supplies up to 30 September 2023; it is mandatory thereafter.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is Rule 89(2)(f) of the CGST Rules?</h3>
                        <div class="faq-expanded__a"><p>Rule 89(2)(f) of the CGST Rules 2017 requires the refund applicant who supplies to a SEZ unit or developer to furnish a declaration that the SEZ unit or developer has not availed input tax credit of the tax paid by the supplier. Without this declaration in the prescribed form, the refund application is liable to deficiency memo under Rule 90 of the CGST Rules. The declaration is filed as part of Annexure I of Form GST RFD-01.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a SEZ supplier file refund every month?</h3>
                        <div class="faq-expanded__a"><p>Yes. Form GST RFD-01 can be filed monthly so long as the supplier has filed GSTR-1 and GSTR-3B for the relevant period and possesses specified-officer endorsement and the Rule 89(2)(f) declaration. A monthly cycle is the working-capital optimal route for IT, pharma, and engineering DTA suppliers with high ITC accumulation. From October 2025, CBIC Instruction 6/2025 makes 90 percent provisional refund available within 7 days for eligible SEZ refund claims.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Where in GSTR-1 are SEZ supplies reported?</h3>
                        <div class="faq-expanded__a"><p>SEZ supplies are reported in Table 6B of GSTR-1, separately for 'with payment of IGST' and 'without payment of tax (LUT)' categories. Reporting in Table 6A is reserved for exports outside India and is a common error that causes refund rejection. The amount in Table 6B must match the zero-rated outward supply figure in Table 3.1(b) of GSTR-3B for the same period.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does an SEZ unit need separate GST registration from its DTA operations?</h3>
                        <div class="faq-expanded__a"><p>Yes. Rule 8 of the CGST Rules 2017 read with the proviso to Section 25(2) of the CGST Act mandates that an SEZ unit be treated as a distinct vertical from any DTA unit of the same legal entity in the same state. Two separate GSTINs are therefore required, with separate returns, separate LUTs, and separate refund applications. Failure to register separately causes registration cancellation risk under Section 29 CGST Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">What is the difference between SEZ refund and EOU refund?</h3>
                        <div class="faq-expanded__a"><p>An SEZ is deemed outside customs territory; supplies into an SEZ from DTA are zero-rated under Section 16 IGST Act. An EOU operates within Indian customs territory; supplies from DTA to an EOU are deemed exports under Section 147 CGST Act and Notification 48/2017-CT. SEZ refunds use Statement 4 or Statement 5; EOU deemed-export refunds use Statement 5B with supplier-or-recipient option.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Specified officer endorsement DSPF kya hai aur kaise milta hai? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>DSPF matlab DTA Service Procurement Form, jo October 2019 se SEZ Online (NDML) portal par activate hai. SEZ unit isme service invoices upload karta hai, payment proof aur LUT number lagata hai. Phir Authorised Officer ya Specified Officer review karke approve karta hai aur DTA supplier ko email me acknowledgement bhejta hai jo refund claim ke liye proof ban jaata hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul style="margin-bottom:0;">
                    <li><strong>Which Section makes SEZ supplies zero-rated?</strong> Section 16(1)(b) of the IGST Act 2017.</li>
                    <li><strong>Which form is used for SEZ refund?</strong> Form GST RFD-01 filed online on gst.gov.in.</li>
                    <li><strong>Where do I report SEZ supplies in GSTR-1?</strong> Table 6B (NOT Table 6A which is for exports outside India).</li>
                    <li><strong>What is the time limit for SEZ refund?</strong> 2 years from the relevant date under Section 54(1) CGST Act.</li>
                    <li><strong>Who endorses SEZ supplies?</strong> The Specified Officer or Authorised Officer of the SEZ under Rule 30 of SEZ Rules 2006.</li>
                    <li><strong>From which date is endorsement mandatory for services?</strong> 1 October 2023 (Notification 1/2023-IT dated 31 July 2023).</li>
                    <li><strong>Can refund be filed monthly?</strong> Yes - monthly is the optimal cycle for steady-state SEZ suppliers.</li>
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
                
                <p>Three statutory clocks run together for every SEZ supply:</p>
                <ol>
                    <li><strong>2-year refund limitation</strong> under Section 54(1) of the CGST Act 2017, counted from the relevant date. Once the window closes, your accumulated ITC or IGST paid is gone.</li>
                    <li><strong>Annual LUT validity</strong> under Rule 96A - every financial year. Miss the renewal and the next supply attracts upfront IGST, blocking working capital until the Section 54 route refund processes.</li>
                    <li><strong>45-day endorsement window</strong> under SEZ Rules 2006 read with the second proviso to Rule 89(1). Without specified-officer endorsement, the refund is liable to deficiency memo under Rule 90 and may be rejected outright.</li>
                </ol>
                <p>Past these points, refund eligibility lapses or processing stalls indefinitely. Patron Accounting tracks all three clocks for every retainer client.</p>
                <p><strong>Get your SEZ refund cycle set up today - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20refund%20for%20my%20SEZ%20unit%20or%20DTA%20supply." target="_blank" rel="noopener">WhatsApp us</a>. Free 15-minute eligibility call.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Recover Every Rupee of SEZ Supply ITC</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF;">GST refund for SEZ units is the difference between recovering working capital monthly and watching it pile up across quarters. Section 16 of the IGST Act, Section 26 of the SEZ Act 2005, and Rule 89 of the CGST Rules together set up a zero-rated framework that rewards meticulous reconciliation across GSTR-1 Table 6B, GSTR-3B Table 3.1(b), specified-officer endorsement, and the Rule 89(2)(f) declaration.</p>
                <p style="color:#FFFFFF;">Patron Accounting LLP's CA and CS team handles the end-to-end SEZ refund stack - LUT renewal, DSPF coordination, monthly RFD-01 filing, and RFD-06 follow-up. With offices in Pune, Mumbai, Delhi, and Gurugram and a national client base of 10,000-plus businesses, we are equipped to manage refund cycles for SEZ units and DTA suppliers of every size from single-GSTIN operators to multi-zone enterprises.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20discuss%20SEZ%20GST%20refund%20filing%20with%20Patron%20Accounting." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20GST%20Refund%20for%20SEZ%20Units%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20GST%20Refund%20for%20SEZ%20Units%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Most SEZ units and DTA suppliers run these services in parallel with the monthly refund cycle. End-to-end CA support across all of them.</p>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for SEZ units and DTA suppliers across the GST stack</div>
                <div class="pa-cross-grid">
                    <a href="/gst-refund/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path d="M9 12l2 2 4-4"/></svg></div><div><div class="pa-card-title">GST Refund (General)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-returns-for-sez/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">GST Returns for SEZ</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-registration/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11l3 3L22 4M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-annual-returns/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div><div><div class="pa-card-title">GST Annual Returns</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-audit/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/iec-registration/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gstat-appeal-exporters/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal - Exporters</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-notice/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div><div><div class="pa-card-title">GST Notice Response</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every quarter (Tier 1 freshness - GST keyword class). Review triggers include GST Council decisions, CBIC notifications affecting Rule 89 and Section 54, SEZ Act or SEZ Rules amendments, DSPF workflow changes on SEZ Online, and new High Court rulings on endorsement requirement.</p>
        </div>
    </div>
</section>

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
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}
slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';
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
@endsection

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
