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
    <title>GST Refund on Wrong Tax Head — Section 77 and Section 19</title>
    <meta name="description" content="Refund tax paid in wrong head under Section 77 CGST and Section 19 IGST. Circular 162/2021 plus Rule 89(1A). 2-year limit from correct tax. Rs 8,000+.">
    <link rel="canonical" href="/gst-refund-wrong-tax-head">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Refund on Wrong Tax Head — Section 77 and Section 19">
    <meta property="og:description" content="Refund tax paid in wrong head under Section 77 CGST and Section 19 IGST. Circular 162/2021 plus Rule 89(1A). 2-year limit from correct tax. Rs 8,000+.">
    <meta property="og:url" content="/gst-refund-wrong-tax-head/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund on Wrong Tax Head — Section 77 and Section 19">
    <meta name="twitter:description" content="Refund tax paid in wrong head under Section 77 CGST and Section 19 IGST. Circular 162/2021 plus Rule 89(1A). 2-year limit from correct tax. Rs 8,000+.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/gst-refund-wrong-tax-head/#breadcrumb",
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
          "name": "Wrong Tax Head",
          "item": "https://www.patronaccounting.com/gst-refund-wrong-tax-head/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/gst-refund-wrong-tax-head/#faq",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is GST refund under Section 77 CGST and Section 19 IGST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 77(1) of CGST Act 2017 allows refund of CGST + SGST/UTGST paid on a supply that is later held to be inter-state, after the taxpayer has discharged IGST. Section 19(1) of IGST Act 2017 mirrors this for the reverse case - refund of IGST paid on a supply later held to be intra-state, after CGST + SGST/UTGST has been discharged. The refund is filed in Form GST RFD-01 under reason 'Tax paid which is subsequently held as the converse'. Per Rule 89(1A), the 2-year limitation runs from the date of payment of the correct tax."
          }
        },
        {
          "@type": "Question",
          "name": "What does 'subsequently held' mean in Section 77 - self-discovery or officer-discovery?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Both. CBIC Circular 162/18/2021-GST dated 25 September 2021 at Para 3 clarifies that the term 'subsequently held' covers (a) cases where the taxpayer himself subsequently finds the misclassification during reconciliation, and (b) cases where the tax officer finds or holds the misclassification in any proceeding such as audit, assessment, or scrutiny. Refund under Section 77 / 19 is available in both situations, provided the correct tax is first paid."
          }
        },
        {
          "@type": "Question",
          "name": "Galat tax head se kaise refund mile - Section 77 ya 19 ka procedure kya hai? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Pehle correct tax pay karo - DRC-03 voluntary payment ke through. Agar pehle CGST + SGST diya tha aur supply inter-state thi, to ab IGST bharo. Agar pehle IGST diya tha aur supply intra-state thi, to ab CGST + SGST bharo. Section 77(2) ya Section 19(2) ke under correct tax par koi interest nahi lagega. Phir GST portal par Form RFD-01 file karo - reason me 'Tax paid as intrastate / interstate which is subsequently held as the converse' select karo. 2 saal ka limit correct tax pay karne ki date se start hota hai (Rule 89(1A)). Agar Section 34 credit note jaari kiya tha to refund nahi milega."
          }
        },
        {
          "@type": "Question",
          "name": "What is the relevant date for refund - wrong tax payment date or correct tax payment date?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The relevant date is the date of payment of the CORRECT tax, not the original wrong payment. Rule 89(1A) of CGST Rules 2017 (inserted by Notification 35/2021-CT) and Circular 162/18/2021-GST Para 4.2 establish this. The Patna High Court 2025 ruling reinforced it - holding that the relevant date is the date of correct-tax payment, and any other reading would render Sections 77 and 19 nugatory. The court awarded 6 percent simple interest from 3 months post application till actual refund."
          }
        },
        {
          "@type": "Question",
          "name": "Is interest payable on the correct tax now due under Section 77(2) and Section 19(2)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Section 77(2) of CGST Act expressly states that no interest is payable on the correct tax now due. Section 19(2) of IGST Act mirrors this for the reverse direction. The legislative rationale is that the wrong tax was already with the consolidated revenue, just in the wrong pocket - so there is no actual loss to government revenue. Where officer demands Section 50 interest, Patron's reply cites Sections 77(2) / 19(2) directly."
          }
        },
        {
          "@type": "Question",
          "name": "Can refund be claimed if I adjusted the wrong tax via credit note under Section 34?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Where the taxpayer has made tax adjustment through issuance of a credit note under Section 34 of CGST Act in respect of the said transaction, refund under Section 77 / 19 is NOT available. This is the express bar in CBIC Circular 162/18/2021-GST Para 4.4. The alternative path is voluntary correction via DRC-03 with a parallel Section 49(6) excess cash ledger refund pathway, depending on facts."
          }
        },
        {
          "@type": "Question",
          "name": "What is Rule 89(1A) of CGST Rules and Notification 35/2021-CT?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Notification 35/2021-Central Tax dated 24 September 2021 inserted sub-rule (1A) into Rule 89 of CGST Rules 2017. Rule 89(1A) prescribes that any person claiming refund under Section 77 may file Form GST RFD-01 within 2 years from the date of payment of tax on the inter-state supply. Pre-Notification payments get 2 years from 24.09.2021. Per Circular 162/18/2021 Para 4.3, Rule 89(1A) also applies to Section 19 IGST cases."
          }
        },
        {
          "@type": "Question",
          "name": "How does Section 65(6) audit drive a wrong-head refund claim?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 65(6) of CGST Act 2017 governs departmental audits. Where the audit observation in Form GST ADT-02 notes that supplies were misclassified between intra-state and inter-state, the taxpayer discharges the correct tax pursuant to ADT-02 (often via DRC-03), and then files RFD-01 referencing ADT-02 as proof of officer-discovery covered by Circular 162/18/2021 Para 3. This is one of the most common Section 77 / 19 refund triggers in FY 2017-18 to FY 2019-20 cases."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Patna HC 2025 ruling on Section 77 relevant date?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Patna High Court ruled in 2025 that the relevant date for Section 77 refund is the date of payment of correct tax (IGST), not the date of original wrong payment (CGST + SGST). The petitioner had filed all returns for FY 2017-18, the audit found inter-state supplies wrongly treated as intra-state, IGST was paid in March 2024, and the refund application filed 17.01.2024 was rejected by the department citing Section 54(1) limitation from January 2018. The court allowed the petition holding any contrary reading would render Sections 77 and 19 nugatory."
          }
        },
        {
          "@type": "Question",
          "name": "Pre-September 2021 wrong payment ka refund mil sakta hai kya? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Haan, Notification 35/2021-CT 24 September 2021 effective hua, par Circular 162/18/2021 Para 4.2 ke under aur Rule 89(1A) ke proviso ke under pre-Notification payments ke liye bhi 2 saal ka time milta hai - 24.09.2021 se. Agar pre-September 2021 correct tax pay kiya tha to bhi 24.09.2023 tak window thi. Aur Patna HC 2025 ruling ke under FY 2017-18 ke purane cases bhi cover ho jaate hain agar correct tax recently pay kiya hai. Patron ka full reply pack Rule 89(1A), Circular 162, aur Patna HC ruling teeno cite karta hai aged claims ke liye."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/gst-refund-wrong-tax-head/#service",
      "name": "GST Refund - Wrong Tax Head (Section 77 CGST + Section 19 IGST)",
      "description": "Patron Accounting LLP files GST refund of tax paid in wrong head under Section 77(1) of CGST Act 2017 and Section 19(1) of IGST Act 2017 read with Rule 89(1A) of CGST Rules 2017. Services include Place of Supply diagnostic under Sections 10 to 13 IGST, Section 34 credit note bar pre-clearance, DRC-03 correct-tax discharge, Form GST RFD-01 filing, no-interest defence under Section 77(2)/19(2), Section 65(6) audit-driven correction with Form GST ADT-02, and Patna HC 2025 limitation defence pack on aged claims.",
      "serviceType": "GST Refund Filing Service",
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
            <li><span style="color:var(--orange);font-weight:600;">Wrong Tax Head Services</span></li>
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
                        GST Refund on Wrong Tax Head (Section 77 CGST + Section 19 IGST)
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Tax invoice, GSTR-1, GSTR-3B, correct-tax payment challan, Form GST ADT-02 if audit-driven.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starts at Rs 8,000 per RFD-01 cycle plus 18 percent GST; success fee 1 to 3 percent on recovery.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any GST-registered taxpayer who paid CGST + SGST on later-held inter-state, or IGST on later-held intra-state.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 30 to 60 days for RFD-01 sanction; no interest payable on correct tax under Section 77(2) and Section 19(2).</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20paid%20GST%20in%20wrong%20tax%20head.%20Please%20share%20a%20free%20Section%2077%20review." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Wrong Tax Head',
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
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">FY 2018-19 supplies wrongly treated as intra-state. Karnataka HC 2024 ruling on Section 13(8) IGST said intermediary services to foreign clients are inter-state. Patron's RFD-01 pack invoking Rule 89(1A), Circular 162/18/2021 Para 4.2, and Patna HC 2025 ruling secured Rs 18.5 lakh refund with 6 percent interest from 3 months post application date.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MP</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Madhav Pillai</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Bengaluru Industrial Buying Agent</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Officer raised Section 50 interest demand of Rs 1.4 lakh on the IGST we now had to pay. Patron's reply citing Section 77(2) of CGST Act and Section 19(2) of IGST Act got the interest waived in full. Rs 9 lakh CGST + SGST refund credited within 70 days. Their citation depth saved us substantial cash.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PA</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Pankaj Arora</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Pune Industrial Supplier</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Audit observation in ADT-02 flagged Rs 28 lakh of misclassified supplies. Patron coordinated DRC-03 discharge with audit closure, then filed RFD-01 referencing ADT-02 under Circular 162 Para 3 officer-discovery. RFD-06 sanctioned within 45 days. Self-discovery vs officer-discovery clarity made the difference.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RV</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Rohit Venkatesh</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Hyderabad E-commerce Seller</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We had issued a credit note in 2022 thinking it would fix the wrong-head. Patron's Section 34 credit note bar diagnostic caught the trap before filing - saved us from a wasted RFD-01 cycle. They pivoted to Section 73 voluntary correction with parallel Section 49(6) excess cash ledger refund - Rs 12 lakh recovered through the alternative path.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NS</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Nikhil Saraf</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Head, Mumbai DTA Supplier</div>
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
                    <p>From industrial suppliers, buying agents, intermediaries serving foreign clients, e-commerce sellers, to DTA suppliers operating across state lines - we handle 200+ wrong-tax-head refund cycles annually with Patna HC 2025 limitation defence and Section 77(2)/19(2) interest waiver discipline.</p>
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
            <a href="#what-section" class="toc-pill">What Is Wrong-Head Refund</a>
            <a href="#who-section" class="toc-pill">5 Trigger Scenarios</a>
            <a href="#services-section" class="toc-pill">Our Services</a>
            <a href="#procedure-section" class="toc-pill">8-Step Pipeline</a>
            <a href="#documents-section" class="toc-pill">Documents</a>
            <a href="#fees-section" class="toc-pill">Fees</a>
            <a href="#timeline-section" class="toc-pill">Timeline</a>
            <a href="#benefits-section" class="toc-pill">Benefits</a>
            <a href="#comparison-section" class="toc-pill">vs Other Refunds</a>
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
                    <p><strong>&#128204; TL;DR - Wrong Tax Head Services at a Glance</strong></p>
                    <p>Where a taxpayer paid CGST plus SGST on a supply later held to be inter-state, or IGST on a supply later held to be intra-state, refund of the wrong tax is available under Section 77(1) of the CGST Act 2017 read with Section 19(1) of the IGST Act 2017, provided the correct tax is first discharged and no Section 34 credit note was issued. Per Rule 89(1A) and Circular 162/18/2021-GST, the 2-year limitation runs from the date of payment of the CORRECT tax, not the original wrong payment.</p>
                    <div class="table-responsive-wrapper" style="margin-top:16px;">
                    <table>
                        <thead><tr><th>Quick Reference</th><th>Details</th></tr></thead>
                        <tbody>
                            <tr><td><strong>Governing Provision</strong></td><td>Section 77(1) of CGST Act 2017 read with Section 19(1) of IGST Act 2017 plus Rule 89(1A) of CGST Rules 2017</td></tr>
                            <tr><td><strong>Direction 1</strong></td><td>Paid CGST + SGST, supply later held inter-state - refund CGST + SGST after paying IGST</td></tr>
                            <tr><td><strong>Direction 2</strong></td><td>Paid IGST, supply later held intra-state - refund IGST after paying CGST + SGST</td></tr>
                            <tr><td><strong>Filing Form</strong></td><td>Form GST RFD-01, reason "Tax paid which is subsequently held as the converse"</td></tr>
                            <tr><td><strong>Time Limit (Rule 89(1A))</strong></td><td>2 years from date of payment of CORRECT tax (not original wrong payment) - Patna HC 2025</td></tr>
                            <tr><td><strong>Interest on Correct Tax</strong></td><td>NIL - waived under Section 77(2) and Section 19(2) (no loss to revenue rationale)</td></tr>
                            <tr><td><strong>Disqualifier</strong></td><td>Section 34 credit note adjustment makes refund unavailable per Circular 162 Para 4.4</td></tr>
                        </tbody>
                    </table>
                    </div>
                    <p style="display:none;"></p>
                </div>
                <p>GST classification errors between intra-state and inter-state supply are among the most common compliance failures - particularly in scenarios involving buying agents and intermediaries with foreign clients, e-commerce sellers operating across multiple states, billing-vs-shipping address mismatches, and complex Place of Supply rules under Sections 10 to 13 of the IGST Act 2017. The financial cost of getting it wrong is high - the wrong tax sits paid with one government, while the correct tax is now due to another. Section 77(1) of the CGST Act 2017 and Section 19(1) of the IGST Act 2017 together provide the symmetric refund mechanism that prevents this from becoming a permanent leakage.</p>
                <p>The legislative architecture became clear only after the 45th GST Council recommendations led to Notification 35/2021-CT dated 24 September 2021 (inserting Rule 89(1A) of CGST Rules 2017) and Circular 162/18/2021-GST dated 25 September 2021. The circular settled the three biggest open questions - (1) the term 'subsequently held' covers both self-discovery by the taxpayer and officer-discovery in proceedings, (2) Rule 89(1A) applies equally to Section 19 IGST cases even though only Section 77 was textually mentioned, and (3) the 2-year limitation under Section 54(1) starts from the date of payment of correct tax, not the original wrong payment. The Patna High Court 2025 ruling reinforced this position - holding that to read the limitation otherwise would render Sections 77 and 19 nugatory. Patron Accounting LLP files, defends, and recovers wrong-tax-head refunds for 200+ Indian businesses.</p>
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
                <h2 class="section-title">What Is GST Refund of Tax Paid in Wrong Head?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Refund of tax paid in wrong head is the GST refund mechanism by which a registered person recovers tax paid under the incorrect tax head when a supply was misclassified between intra-state and inter-state. The mechanism operates symmetrically through two parallel provisions - <strong>Section 77(1) of the CGST Act 2017</strong> covers the case where CGST plus SGST/UTGST was paid on what is later held to be inter-state, and <strong>Section 19(1) of the IGST Act 2017</strong> covers the reverse case where IGST was paid on what is later held to be intra-state.</p>
                    <p>The substantive condition is identical in both directions - the correct tax must first be discharged. The taxpayer cannot ask for refund of CGST plus SGST without first paying IGST (or vice versa). Once the correct tax is paid, the wrongly paid tax becomes refundable. Section 77(2) of CGST Act and Section 19(2) of IGST Act explicitly waive interest on the correct tax now due, recognising that there was no actual loss to the consolidated revenue (because the wrong tax was already with the government, just in the wrong pocket).</p>
                    <p><strong>Bidirectional refund matrix:</strong></p>
                    <div class="table-responsive-wrapper" style="margin-top:12px;margin-bottom:16px;">
                    <table>
                        <thead><tr><th>Provision</th><th>Original Wrong Payment</th><th>Subsequently Held</th><th>Correct Tax Discharge</th><th>Refund Right</th></tr></thead>
                        <tbody>
                            <tr><td><strong>Section 77(1) CGST Act</strong></td><td>Paid CGST + SGST/UTGST on supply</td><td>Supply later held INTER-STATE</td><td>Pay IGST under correct head</td><td>Refund CGST + SGST/UTGST</td></tr>
                            <tr><td><strong>Section 19(1) IGST Act</strong></td><td>Paid IGST on supply</td><td>Supply later held INTRA-STATE</td><td>Pay CGST + SGST/UTGST under correct heads</td><td>Refund IGST</td></tr>
                        </tbody>
                    </table>
                    </div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Wrong Tax Head:</strong></p>
                    <ul style="margin-bottom:0;">
                        <li><strong>Intra-State Supply (Section 8 IGST Act):</strong> Supply where supplier location and place of supply are in the same state or union territory; attracts CGST + SGST or CGST + UTGST.</li>
                        <li><strong>Inter-State Supply (Section 7 IGST Act):</strong> Supply where supplier location and place of supply are in different states or union territories, or import/export; attracts IGST.</li>
                        <li><strong>Place of Supply (Sections 10 to 13 IGST Act):</strong> Statutory rules determining whether a supply is intra-state or inter-state; most common source of classification errors.</li>
                        <li><strong>Subsequently Held (Circular 162/18/2021):</strong> Includes both (a) self-discovery by taxpayer and (b) discovery by tax officer in any proceeding (audit, assessment, scrutiny).</li>
                        <li><strong>Section 77(1) CGST Act:</strong> Refund right where CGST + SGST/UTGST was paid but supply is later held inter-state.</li>
                        <li><strong>Section 77(2) CGST Act:</strong> No interest on the correct tax (IGST) now due.</li>
                        <li><strong>Section 19(1) IGST Act:</strong> Refund right where IGST was paid but supply is later held intra-state.</li>
                        <li><strong>Section 19(2) IGST Act:</strong> No interest on the correct tax (CGST + SGST/UTGST) now due.</li>
                        <li><strong>Rule 89(1A) CGST Rules 2017:</strong> 2-year limitation runs from date of payment of CORRECT tax; effective 24.09.2021 via Notification 35/2021-CT.</li>
                        <li><strong>Circular 162/18/2021-GST:</strong> Dated 25.09.2021; foundational clarification on Section 77 plus Section 19 refund procedure.</li>
                        <li><strong>Form GST ADT-02:</strong> Audit observation issued under Section 65(6) of CGST Act; common trigger for officer-discovery wrong-head correction.</li>
                        <li><strong>Section 34 Credit Note Bar:</strong> Where the taxpayer adjusted the wrong tax via credit note under Section 34, refund under Section 77 / 19 is NOT available per Circular 162 Para 4.4.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Wrong Tax Head</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 77 + 19</span>
                        <strong>Bidirectional Refund</strong>
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
            <h2 class="section-title">Five Trigger Scenarios for Wrong-Tax-Head Refund</h2>
            <div class="content-text">
                
                <p>Wrong-tax-head correction is triggered in five recurring patterns. Patron's pipeline handles each with a specific evidentiary and procedural approach.</p>
                <div class="table-responsive-wrapper" style="margin-top:12px;margin-bottom:16px;">
                <table>
                    <thead><tr><th>Trigger Scenario</th><th>How It Arises</th><th>Patron Action</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Self-Discovery During Reconciliation</strong></td><td>Taxpayer identifies the misclassification during quarterly or annual reconciliation - typically when matching GSTR-1 invoices with shipping addresses, e-way bills, or buyer GSTIN state codes</td><td>Immediately discharge correct tax via DRC-03 voluntary payment; file RFD-01 under Section 77 / 19; Rule 89(1A) limitation runs from this discharge date</td></tr>
                        <tr><td><strong>Section 65(6) Audit Finding (Form ADT-02)</strong></td><td>Tax officer issues Form GST ADT-02 audit observation noting that intra-state supplies were wrongly treated as inter-state (or vice versa); common in FY 2017-18 to FY 2019-20 cases</td><td>Discharge correct tax pursuant to ADT-02; file RFD-01; reference ADT-02 as proof of officer-discovery covered by Circular 162/18/2021 Para 3</td></tr>
                        <tr><td><strong>Show Cause Notice in DRC-01</strong></td><td>Officer issues SCN under Section 73 / 74 alleging wrong-head payment; typically for high-value supplies or suspected evasion</td><td>Pay correct tax pursuant to SCN reply or order; refund of original wrong tax flows automatically once SCN closure</td></tr>
                        <tr><td><strong>Adjudication Order Holding Misclassification</strong></td><td>Adjudicating Authority order following SCN proceedings holds the supply intra-state or inter-state contrary to original treatment</td><td>Pay correct tax per order; refund right under Section 77 / 19 attaches; 2-year limit from date of correct payment</td></tr>
                        <tr><td><strong>Place of Supply Dispute Resolution</strong></td><td>Place of Supply ambiguity (especially in buying-agent / intermediary cases under Section 13(8) IGST and import-export edge cases) resolved through Advance Ruling, High Court ruling, or settled jurisprudence</td><td>On resolution clarifying correct head, discharge correct tax and file RFD-01; reference the ruling in covering letter</td></tr>
                    </tbody>
                </table>
                </div>
                <p><strong>Three structural features unique to wrong-tax-head refund:</strong> (1) No interest on correct tax under Section 77(2) / 19(2) - statutory waiver because the wrong tax was already with consolidated revenue; (2) Relevant date is correct-tax payment date per Rule 89(1A) and Patna HC 2025 - not original wrong payment; (3) "Subsequently held" includes both self-discovery and officer-discovery per Circular 162 Para 3 - dramatically widening practical use.</p>
                <p>For the upstream RFD-01 filing mechanics, see <a href="/gst-refund-rfd-01-filing/">GST RFD-01 filing step-by-step</a> covering the 11-Statement matrix. For pre-processing deficiency memos, see <a href="/gst-refund-rfd-03-deficiency-response/">GST RFD-03 deficiency response</a>. For inverted duty structure refund (a different Section 54 category), see <a href="/gst-refund-inverted-duty-structure/">GST refund inverted duty structure</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Services for Wrong-Tax-Head Refund</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Place of Supply Diagnostic + Classification Audit</strong></td><td>Free 30-minute review of last 12 months GSTR-1 invoices against shipping address, e-way bill destination, buyer GSTIN state code, and Section 10 to 13 IGST Place of Supply rules. Flags every potential intra-vs-inter-state classification mismatch with refund quantum estimate. <span class="badge-included">Free</span></td></tr>
                        <tr><td><strong>Correct-Tax Discharge via DRC-03</strong></td><td>End-to-end DRC-03 voluntary payment for the correct tax head. This is the procedural prerequisite for Section 77 / 19 refund. Patron prepares the DRC-03, computes correct tax with evidence trail, files via portal, captures ARN. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Form GST RFD-01 Filing Under Section 77 / 19</strong></td><td>Online RFD-01 filing under reason "Tax paid which is subsequently held as the converse". Statement of invoices, head-wise mapping, original payment evidence, correct payment evidence (DRC-03 ARN), CA certificate above Rs 2 lakh, Rule 89(2)(l) and (m) declarations. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Section 34 Credit Note Bar Defence</strong></td><td>Pre-filing audit to confirm no Section 34 credit note was issued against the original transaction. Where a credit note exists, refund is barred under Circular 162 Para 4.4 - Patron analyses whether the credit note can be voided or whether an alternative recovery path exists. <span class="badge-included">Diagnostic</span></td></tr>
                        <tr><td><strong>Audit-Driven Correction (ADT-02 to RFD-01)</strong></td><td>Where Section 65(6) audit observation in Form GST ADT-02 triggered the wrong-head correction, Patron coordinates DRC-03 discharge with audit closure, files RFD-01 referencing ADT-02 as officer-discovery proof under Circular 162 Para 3. <span class="badge-addon">Add-on</span></td></tr>
                        <tr><td><strong>Patna HC 2025 Limitation Defence Pack</strong></td><td>For aged claims where officer raises Section 54(1) limitation objection citing original wrong payment date, comprehensive reply pack citing (a) Rule 89(1A) text, (b) Circular 162 Para 4.2, and (c) Patna HC 2025 ruling - secures sanction with 6 percent interest from 3 months post application. <span class="badge-addon">Strategic</span></td></tr>
                        <tr><td><strong>No-Interest Defence Under Section 77(2) / 19(2)</strong></td><td>Where officer demands Section 50 interest on correct tax now due, reply citing express statutory waiver in Section 77(2) of CGST Act and Section 19(2) of IGST Act. <span class="badge-included">Strategic</span></td></tr>
                        <tr><td><strong>Section 107 Appeal Filing</strong></td><td>Where officer persists with limitation or interest demand, 10 percent pre-deposit calculation, Form APL-01 with detailed grounds, hearing representation, APL-04 recovery. <span class="badge-addon">Litigation</span></td></tr>

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
            <h2 class="section-title">8-Step Wrong-Tax-Head Refund Pipeline</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's wrong-tax-head refund pipeline runs the eight sequential stages below. Each step cites the relevant Act, Section, Rule, Form, or Circular for traceability.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Place of Supply Diagnosis and Tax-Head Determination</h3>
                    <p class="step-description">Apply Sections 10 to 13 of IGST Act 2017 to confirm the correct head. For goods (Section 10), focus on location of buyer or delivery. For services (Section 12 for domestic, Section 13 for international), apply default rule and exceptions. Document the diagnosis in a memo.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sections 10-13 IGST applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Memo documented</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="35" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><path d="M30 45 Q60 30 90 45" stroke="#14365F" stroke-width="1" fill="none" opacity="0.3"/><path d="M30 55 Q60 70 90 55" stroke="#14365F" stroke-width="1" fill="none" opacity="0.3"/><text x="60" y="42" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Section 10-13</text><text x="60" y="54" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PoS Diagnosis</text><text x="60" y="64" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">CGST/SGST vs IGST</text></svg></div>
                        <span class="illustration-label">PoS Diagnosed</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Section 34 Credit Note Bar Check</h3>
                    <p class="step-description">Critical pre-filing check - if any Section 34 credit note was issued against the original transaction, refund is BARRED per Circular 162/18/2021 Para 4.4. Pull GSTR-1 amendment history; confirm no credit note. If credit note exists, evaluate whether it can be voided or use alternative recovery path.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Circular 162 Para 4.4 cleared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-1 history pulled</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="25" width="80" height="50" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="42" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Credit Note?</text><circle cx="40" cy="58" r="9" fill="#FFF" stroke="#25D366" stroke-width="1.5"/><text x="40" y="61" font-size="9" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">NO</text><circle cx="80" cy="58" r="9" fill="#FFE0DD" stroke="#E8712C" stroke-width="1.5"/><line x1="76" y1="54" x2="84" y2="62" stroke="#E8712C" stroke-width="2"/><line x1="84" y1="54" x2="76" y2="62" stroke="#E8712C" stroke-width="2"/><text x="60" y="92" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Circular 162 Para 4.4</text></svg></div>
                        <span class="illustration-label">Bar Cleared</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Discharge of Correct Tax via DRC-03</h3>
                    <p class="step-description">Pay the correct tax (IGST if supply is inter-state; CGST + SGST if intra-state) via Form GST DRC-03 voluntary payment. Capture the DRC-03 ARN and challan reference. This is the substantive precondition for Section 77 / 19 refund.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DRC-03 ARN captured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Substantive precondition met</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="32" font-size="10" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">DRC-03</text><text x="60" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Voluntary Payment</text><rect x="30" y="56" width="60" height="20" rx="3" fill="#FFF" stroke="#F5A623"/><text x="60" y="64" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Correct Tax</text><text x="60" y="72" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CGST/SGST or IGST</text></svg></div>
                        <span class="illustration-label">Correct Tax Paid</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">No-Interest Confirmation Under Section 77(2) / 19(2)</h3>
                    <p class="step-description">Compute correct tax WITHOUT Section 50 interest. If officer raises interest demand, cite Section 77(2) of CGST Act or Section 19(2) of IGST Act in reply - both expressly waive interest on the correct tax now due. No actual revenue loss rationale.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 77(2)/19(2) cited</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Zero Section 50 interest</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="60" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="34" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Section 77(2) / 19(2)</text><circle cx="60" cy="56" r="12" fill="#FFF" stroke="#25D366" stroke-width="1.5"/><text x="60" y="60" font-size="11" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">0%</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">No Interest on Correct Tax</text></svg></div>
                        <span class="illustration-label">Interest Waived</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">GSTR-1 Amendment for Original Period</h3>
                    <p class="step-description">Amend GSTR-1 of the original period to reflect correct head treatment. Update Table 4 (B2B), Table 5 (Inter-state large supplies), or Table 7 (Intra-state) as applicable. This synchronises books, GSTR, and refund claim.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tables 4/5/7 updated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Books-GSTR-refund synced</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-1 Amend</text><line x1="28" y1="34" x2="92" y2="34" stroke="#14365F" stroke-width="1" opacity="0.4"/><rect x="28" y="42" width="64" height="5" rx="1" fill="#FFE0DD" stroke="#E8712C" stroke-width="0.5" stroke-dasharray="2,1"/><text x="60" y="46" font-size="4" fill="#E8712C" text-anchor="middle" font-family="Arial">Old: Table 7</text><path d="M58 53 L62 53 L60 56 Z" fill="#14365F"/><rect x="28" y="60" width="64" height="5" rx="1" fill="#E8F5E9" stroke="#25D366" stroke-width="0.5"/><text x="60" y="64" font-size="4" fill="#25D366" text-anchor="middle" font-family="Arial">New: Table 5</text><text x="60" y="78" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Inter-state mapped</text></svg></div>
                        <span class="illustration-label">Amended</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Form GST RFD-01 Filing Under Section 77 / 19</h3>
                    <p class="step-description">Login to GST portal. Services > Refunds > Application for Refund. Reason - 'Tax paid which is subsequently held as the converse'. Upload statement of invoices, original payment evidence, DRC-03 ARN, CA certificate above Rs 2 lakh, Rule 89(2)(l) and (m) declarations. Sign with DSC or EVC.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Subsequently held reason</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All declarations attached</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="14" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="60" y="25" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">RFD-01</text><rect x="30" y="36" width="60" height="6" rx="1" fill="#FFF3E0"/><text x="60" y="41" font-size="4" fill="#E8712C" text-anchor="middle" font-family="Arial">Subsequently held as converse</text><rect x="30" y="46" width="60" height="5" rx="1" fill="#F0F4F8"/><rect x="30" y="54" width="60" height="5" rx="1" fill="#F0F4F8"/><rect x="38" y="65" width="44" height="13" rx="3" fill="#E8712C"/><text x="60" y="74" font-size="7" fill="#FFF" font-weight="700" text-anchor="middle" font-family="Arial">SUBMIT</text></svg></div>
                        <span class="illustration-label">ARN Generated</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">RFD-02 Acknowledgement and RFD-08 Defence</h3>
                    <p class="step-description">RFD-02 within 15 days under Rule 90(2). Where officer raises (a) Section 54(1) limitation, (b) Section 50 interest, or (c) Section 34 credit note adjudication, RFD-09 reply within 15 days cites Rule 89(1A), Circular 162/18/2021, Section 77(2) / 19(2), and Patna HC 2025 ruling as applicable.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-09 citation pack</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Patna HC 2025 invoked</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 15 L92 28 L92 56 Q92 75 60 88 Q28 75 28 56 L28 28 Z" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">RFD-09 Reply</text><text x="60" y="52" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">Rule 89(1A)</text><text x="60" y="60" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">Circular 162</text><text x="60" y="68" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">Patna HC 2025</text><text x="60" y="76" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">S 77(2) / 19(2)</text></svg></div>
                        <span class="illustration-label">Defence Pack</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">RFD-06 Final Sanction and PFMS Disbursement</h3>
                    <p class="step-description">RFD-06 final sanction within 60 days of RFD-02 under Section 54(7). Where 90 percent provisional path is open under amended Rule 91(2) and CGST Instruction 6/2025, RFD-04 in 7 days. PFMS bank credit 1 to 3 working days after sanction. Section 56 interest at 6 percent per annum if delayed beyond 60 days.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-04 90% in 7 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-06 final in 60 days</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="25" width="90" height="50" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="40" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RFD-04 + RFD-06</text><circle cx="40" cy="58" r="8" fill="#FFF" stroke="#25D366" stroke-width="1.5"/><text x="40" y="62" font-size="8" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">90%</text><circle cx="80" cy="58" r="8" fill="#FFF" stroke="#E8712C" stroke-width="1.5"/><text x="80" y="62" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">10%</text><text x="60" y="92" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">7 + 60 Days</text></svg></div>
                        <span class="illustration-label">Refund Credited</span>
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
            <h2 class="section-title">Document Checklist for Wrong-Tax-Head Refund</h2>
            <div class="content-text">
                
                <p>Keep the following documents ready before filing the wrong-tax-head refund. Patron maintains a digital document vault per matter tracking the wrong-head correction chain from original invoice to RFD-06 sanction.</p>
                <p><strong>Mandatory documents:</strong></p>
                <ul>
                    <li>Tax invoice (original) showing wrong-head tax.</li>
                    <li>GSTR-1 of original period showing the supply.</li>
                    <li>GSTR-3B of original period showing tax paid under wrong head.</li>
                    <li>Form GST DRC-03 ARN for correct-tax discharge with challan reference.</li>
                    <li>GSTR-1 amendment of original period reflecting correct head treatment.</li>
                    <li>Statement of invoices in RFD-01 prescribed format.</li>
                    <li>Bank statement evidencing the original wrong-head payment.</li>
                    <li>Self-declaration that no Section 34 credit note was issued for this transaction.</li>
                    <li>Declaration under Rule 89(2)(l) - non-prosecution.</li>
                    <li>Declaration under Rule 89(2)(m) - tax incidence not passed on (CA certificate above Rs 2 lakh).</li>
                </ul>
                <p><strong>Conditional documents:</strong></p>
                <ul>
                    <li>Form GST ADT-02 (audit observation) if officer-driven correction.</li>
                    <li>DRC-01 SCN copy if SCN-driven correction.</li>
                    <li>Adjudication order if order-driven correction.</li>
                    <li>Advance Ruling or High Court ruling if Place of Supply dispute resolution drove correction.</li>
                    <li>Place of Supply analysis memo (Sections 10 to 13 IGST) for evidentiary trail.</li>
                </ul>
                <p><strong>For aged claims (pre-September 2021 wrong payment):</strong></p>
                <ul>
                    <li>Patna HC 2025 ruling citation pack.</li>
                    <li>Circular 162/18/2021 Para 4.2 transition rule confirmation - 2 years from 24.09.2021 for older payments.</li>
                    <li>Officer reply to RFD-08 limitation objection.</li>
                    <li>Section 107 appeal pre-deposit calculation if first sanction declined.</li>
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
                                                <tr><td><strong>Section 54(1) Limitation Objection on Original Wrong Payment Date</strong></td><td>Most common rejection ground. Officer reads Section 54(1) as running from original wrong payment, ignoring Rule 89(1A). Patron's RFD-09 reply cites (a) Rule 89(1A) text expressly stating 2 years from date of payment of correct tax, (b) Circular 162/18/2021 Para 4.2 and 4.3 reinforcing this, and (c) Patna HC 2025 ruling that holding otherwise would render Sections 77 and 19 nugatory. Almost always reverses on first reply.</td></tr>
                        <tr><td><strong>Section 34 Credit Note Was Issued - Refund Barred</strong></td><td>Where the taxpayer attempted to fix the wrong head by issuing a credit note under Section 34 instead of paying correct tax separately, Section 77 / 19 refund is BARRED per Circular 162/18/2021 Para 4.4. Patron evaluates whether the credit note can be voided via further amendment (rare and risky), or whether recovery must pursue via Section 73 / 74 voluntary correction with separate Section 49(6) excess cash ledger refund pathway.</td></tr>
                        <tr><td><strong>Section 50 Interest Demand on Correct Tax</strong></td><td>Officer adds Section 50 interest on the IGST or CGST + SGST now due, ignoring Section 77(2) / 19(2). Patron's reply cites the statutory text directly - Section 77(2) of CGST Act expressly states no interest on correct tax payable; Section 19(2) of IGST Act mirrors this. Where officer persists, Section 107 appeal lies.</td></tr>
                        <tr><td><strong>Place of Supply Dispute - Officer Disagrees with Correct-Head Determination</strong></td><td>Officer disputes the taxpayer's reclassification - supply was already correctly inter-state, no wrong head exists. Patron prepares a Place of Supply analysis memo citing Sections 10 to 13 IGST, applies the relevant rule, and supports with shipping evidence (e-way bill, lorry receipt, delivery acknowledgement). Where ambiguity persists, Advance Ruling under Section 97 may be warranted.</td></tr>
                        <tr><td><strong>Self-Discovery vs Officer-Discovery Confusion</strong></td><td>Some officers wrongly hold that Section 77 / 19 only applies where officer holds the misclassification, not self-discovery. Patron's reply cites Circular 162/18/2021 Para 3 directly - the term "subsequently held" covers both self-discovery and officer-discovery. This was the foundational clarification in the circular.</td></tr>
                        <tr><td><strong>Buying Agent / Intermediary Section 13(8) Edge Cases</strong></td><td>Buying agents and intermediaries serving foreign clients face chronic ambiguity on intra-state vs inter-state under Section 13(8) IGST. Contradictory Advance Rulings exist. Patron applies the latest jurisprudence, secures Advance Ruling where high-value, and uses Section 77 / 19 refund as the protective net for past misclassification.</td></tr>

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
            <h2 class="section-title">Fees for Wrong-Tax-Head Refund Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Government Fee (RFD-01 filing)</strong></td><td class="table-amount">Nil (no statutory portal fee)</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees - GST Refund Cluster</strong></td><td class="table-amount">Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td><strong>Standard Wrong-Tax-Head Refund (single transaction)</strong></td><td class="table-amount">Rs 8,000 per filing plus GST</td></tr>
                        <tr><td><strong>Multi-Invoice / Multi-Period Refund</strong></td><td class="table-amount">Rs 18,000 per filing plus GST</td></tr>
                        <tr><td><strong>High-Value Wrong-Head Refund (above Rs 25 lakh)</strong></td><td class="table-amount">Rs 35,000 per filing plus GST</td></tr>
                        <tr><td><strong>Audit-Driven Correction (ADT-02 to RFD-01 bundle)</strong></td><td class="table-amount">Rs 25,000 per filing plus GST</td></tr>
                        <tr><td><strong>Section 34 Credit Note Bar Defence + Alternative Recovery</strong></td><td class="table-amount">Rs 30,000 per case plus GST</td></tr>
                        <tr><td><strong>Aged Claim with Patna HC 2025 Limitation Defence</strong></td><td class="table-amount">Rs 25,000 per filing plus GST</td></tr>
                        <tr><td><strong>RFD-08 Reply on Limitation / Interest / Credit Note</strong></td><td class="table-amount">Rs 18,000 per response plus GST</td></tr>
                        <tr><td><strong>Section 107 Appeal</strong></td><td class="table-amount">Rs 50,000 plus success fee plus GST</td></tr>
                        <tr><td><strong>Success Fee on Refund Recovery</strong></td><td class="table-amount">1 to 3 percent of refund sanctioned</td></tr>
                        <tr><td colspan="2" style="background:var(--orange-lighter);font-size:13px;color:var(--text-muted);"><em>All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. Government fees are payable separately at actuals.</em></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Wrong Tax Head consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20discuss%20wrong-tax-head%20refund%20with%20Patron%20Accounting." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Wrong-Tax-Head Refund Takes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Place of Supply diagnostic + tax-head determination</strong></td><td>1 to 2 working days</td><td>Sections 10-13 IGST applied</td></tr>
                        <tr><td><strong>Section 34 credit note bar check</strong></td><td>1 working day</td><td>Circular 162 Para 4.4</td></tr>
                        <tr><td><strong>DRC-03 correct-tax discharge</strong></td><td>Same day after sign-off</td><td>Procedural precondition</td></tr>
                        <tr><td><strong>GSTR-1 amendment of original period</strong></td><td>1 to 2 working days</td><td>Tables 4/5/7 synced</td></tr>
                        <tr><td><strong>RFD-01 filing</strong></td><td>Same day after sign-off</td><td>System-driven</td></tr>
                        <tr><td><strong>RFD-02 acknowledgement</strong></td><td>Within 15 days of RFD-01</td><td>Rule 90(2) CGST Rules</td></tr>
                        <tr><td><strong>RFD-04 90% provisional (low-risk)</strong></td><td>Within 7 days of RFD-02</td><td>CGST Instruction 6/2025</td></tr>
                        <tr><td><strong>RFD-06 final sanction</strong></td><td>Within 60 days of RFD-02</td><td>Section 54(7) statutory</td></tr>
                        <tr><td><strong>Time limit under Rule 89(1A)</strong></td><td>2 years from CORRECT-tax payment date</td><td>Not original wrong payment</td></tr>
                        <tr><td><strong>Pre-Notification 35/2021 transition rule</strong></td><td>2 years from 24.09.2021</td><td>For pre-September 2021 payments</td></tr>
                        <tr><td><strong>Interest if refund delayed beyond 60 days</strong></td><td>6 percent per annum under Section 56</td><td>9 percent for appellate orders</td></tr>
                        <tr><td><strong>Patna HC 2025 interest award</strong></td><td>6 percent from 3 months post application</td><td>Till actual refund</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Patna HC 2025 is the limitation defence anchor:</strong> Most field-level rejections cite Section 54(1) limitation from the original wrong payment date - rendering Sections 77 and 19 effectively nugatory for aged claims. The Patna High Court 2025 ruling is decisive on this point. The petitioner had filed all returns for FY 2017-18; the audit found inter-state supplies wrongly treated as intra-state; IGST was paid in March 2024; refund application 17.01.2024 was rejected citing Section 54(1) limitation from January 2018 original payment. Patna HC held the relevant date is the date of correct-tax (IGST) payment, awarded 6 percent simple interest from 3 months after application date till actual refund. Patron's reply pack invokes Rule 89(1A), Circular 162 Para 4.2, and this ruling - reversing most rejections on first reply.

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
            <h2 class="section-title">Why CA-Led Wrong-Tax-Head Refund Beats DIY</h2>
        </div>
                <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">Place of Supply Diagnostic Discipline</h3>
                <p class="feature-description">DIY filers misread Place of Supply rules - particularly Section 13(8) intermediary cases, Section 12(8) transportation, Section 12(11) telecom, and Section 10(1)(a) goods delivery rules. Patron's CAs apply each rule precisely with documentary trail.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3 class="feature-title">Section 34 Credit Note Bar Pre-Clearance</h3>
                <p class="feature-description">DIY filers often miss that issuing a Section 34 credit note instead of paying correct tax separately disqualifies the refund. Patron's first diagnostic is the credit note bar check - prevents wasted RFD-01 filings and pivots to alternative Section 49(6) excess cash ledger pathway where credit note was issued.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">Patna HC 2025 Limitation Leverage</h3>
                <p class="feature-description">Officers routinely raise Section 54(1) limitation objection on aged wrong-payment claims. The Patna HC 2025 ruling is decisive but not yet widely cited in field-level orders. Patron's reply pack invokes the ruling alongside Rule 89(1A) and Circular 162 Para 4.2 - reversing most rejections on first reply with 6 percent interest from 3 months post application.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3 class="feature-title">No-Interest Defence Under Section 77(2) / 19(2)</h3>
                <p class="feature-description">Officers often try to charge Section 50 interest on the correct tax due. Patron's reply cites the express statutory waiver in Section 77(2) of CGST Act and Section 19(2) of IGST Act - a defence many DIY filers do not know exists. Saves substantial cash on high-value supplies where interest at 18% per annum can run into lakhs.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                <h3 class="feature-title">Self-Discovery vs Officer-Discovery Clarity</h3>
                <p class="feature-description">Some officers wrongly hold that Section 77 / 19 only applies where officer holds the misclassification, not self-discovery. Patron cites Circular 162/18/2021 Para 3 directly - "subsequently held" covers both self-discovery and officer-discovery. This dramatically widens practical use including voluntary reconciliation corrections.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="8.5" cy="7" r="4"/><polyline points="17 11 19 13 23 9"/></svg></div>
                <h3 class="feature-title">Audit-Driven Correction Coordination</h3>
                <p class="feature-description">Where Section 65(6) audit observation in Form GST ADT-02 triggered the wrong-head correction, Patron coordinates DRC-03 discharge with audit closure, files RFD-01 referencing ADT-02 as officer-discovery proof. Most common Section 77 / 19 refund trigger in FY 2017-18 to FY 2019-20 legacy cases.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Indian Businesses for Wrong-Tax-Head Recovery</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years of GST Compliance</strong></p>
                <p><strong>Outcome proof:</strong> A Bengaluru-based industrial buying agent recovered Rs 18,50,000 in wrongly paid CGST + SGST for FY 2018-19 supplies in February 2026. The 2024 Karnataka HC ruling on Section 13(8) IGST held intermediary services to foreign clients as inter-state, triggering the wrong-head claim. Patron's reply pack invoking Rule 89(1A), Circular 162/18/2021 Para 4.2, and Patna HC 2025 ruling secured RFD-06 sanction with 6 percent interest from 3 months post application date.</p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and 200+ Indian businesses including industrial suppliers, buying agents, intermediaries serving foreign clients, e-commerce sellers, and DTA suppliers operating across state lines. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Wrong-Tax-Head Refund vs Other GST Refund Categories</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Wrong Tax Head</th><th>Inverted Duty Structure</th><th>Service Export</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Statutory basis</strong></td><td>Section 77 CGST + Section 19 IGST + Rule 89(1A)</td><td>Section 54(3)(ii) + Rule 89(5)</td><td>Section 16 IGST + Rule 89(2) + Section 2(6) IGST</td></tr>
                        <tr><td><strong>Time limit</strong></td><td>2 years from CORRECT-tax payment date</td><td>2 years from end of FY</td><td>2 years from FX receipt or invoice date</td></tr>
                        <tr><td><strong>Interest waiver on correct tax</strong></td><td>YES - Section 77(2) / 19(2)</td><td>Not applicable</td><td>Not applicable</td></tr>
                        <tr><td><strong>Disqualifier</strong></td><td>Section 34 credit note adjustment (Circular 162 Para 4.4)</td><td>Capital goods ITC; specific notified items</td><td>Distinct person under Section 8 IGST Explanation 1</td></tr>
                        <tr><td><strong>Trigger pattern</strong></td><td>Self-discovery OR officer-discovery (Circular 162 Para 3)</td><td>Inverted rate structure persistent over FY</td><td>Service export with FX receipt + 5-condition test</td></tr>
                        <tr><td><strong>Common rejection trigger</strong></td><td>Section 54(1) limitation citing original wrong payment</td><td>Notification 14/2022 formula misapplied</td><td>Section 2(6) intermediary disqualification; FIRC missing</td></tr>
                        <tr><td><strong>Filing reason category</strong></td><td>Tax paid subsequently held as the converse</td><td>Refund of unutilized ITC due to inverted tax structure</td><td>Refund of ITC on Export of Services Without Payment of Tax</td></tr>

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
            <h2 class="section-title">Partner Services for Wrong-Tax-Head Recovery</h2>
            <div class="content-text">
                
                <p>Wrong-tax-head refund work integrates with Patron Accounting's broader GST refund stack. Common bundles below:</p>
                <ul>
                    <li><a href="/gst-refund/">GST refund (general)</a> - the parent practice covering Section 54 refund spectrum across all 8 refund categories.</li>
                    <li><a href="/gst-refund-rfd-01-filing/">GST RFD-01 filing step-by-step</a> - the form whose mechanics underpin every Section 77 / 19 refund claim.</li>
                    <li><a href="/gst-refund-rfd-03-deficiency-response/">GST RFD-03 deficiency response</a> - for pre-processing deficiency memos on filed RFD-01.</li>
                    <li><a href="/gst-refund-rfd-06-order-analysis/">GST RFD-06 order analysis</a> - for adverse rejection orders and Section 107 appeal pathway.</li>
                    <li><a href="/gst-refund-inverted-duty-structure/">GST refund inverted duty structure</a> - accumulated ITC refund under Section 54(3)(ii) for manufacturing sectors.</li>
                    <li><a href="/gst-refund-service-exports/">GST refund service exports</a> - for service exporters under Section 2(6) IGST (where intermediary disputes often trigger wrong-head reclassification).</li>
                    <li><a href="/gst-refund-sez-supplies/">GST refund SEZ supplies</a> - for DTA suppliers feeding SEZ units under Section 16(1)(b).</li>
                    <li><a href="/gst-notice/">GST notice response</a> - for upstream RFD-08 SCN and DRC-01 SCN drafting.</li>
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
                
                <p><strong>Section 77(1) of CGST Act 2017:</strong> A registered person who has paid the central tax and state tax or, as the case may be, the central tax and the union territory tax on a transaction considered by him to be an intra-state supply, but which is subsequently held to be an inter-state supply, shall be refunded the amount of taxes so paid in such manner and subject to such conditions as may be prescribed.</p>
                <p><strong>Section 77(2) of CGST Act 2017:</strong> A registered person who has paid integrated tax on a transaction considered by him to be an inter-state supply, but which is subsequently held to be an intra-state supply, shall not be required to pay any interest on the amount of central tax and state tax or, as the case may be, the central tax and the union territory tax payable.</p>
                <p><strong>Section 19(1) of IGST Act 2017:</strong> Mirror of Section 77(1) for the reverse direction - registered person who paid IGST on what is later held intra-state is entitled to refund of IGST after paying correct CGST + SGST/UTGST.</p>
                <p><strong>Section 19(2) of IGST Act 2017:</strong> Mirror of Section 77(2) - no interest payable on the correct CGST + SGST/UTGST now due.</p>
                <p><strong>Rule 89(1A) of CGST Rules 2017:</strong> Any person, claiming refund under Section 77 of any tax paid by him, in respect of a transaction considered by him to be an intra-state supply, which is subsequently held to be an inter-state supply, may, before the expiry of a period of two years from the date of payment of the tax on the inter-state supply, file an application electronically in Form GST RFD-01 through the common portal. Proviso allows pre-Notification payments to file 2 years from 24.09.2021.</p>
                <p><strong>Notification 35/2021-Central Tax dated 24 September 2021:</strong> Inserted Rule 89(1A) into CGST Rules 2017 - the procedural enabler for Section 77 / 19 refund.</p>
                <p><strong>Circular 162/18/2021-GST dated 25 September 2021:</strong> Foundational clarification issued under Section 168(1). Para 3 - "subsequently held" includes self-discovery and officer-discovery. Para 4.2 - relevant date is correct-tax payment date. Para 4.3 - Rule 89(1A) applies to Section 19 IGST cases too. Para 4.4 - Section 34 credit note bar.</p>
                <p><strong>Patna High Court 2025 ruling:</strong> Petitioner had filed all returns for FY 2017-18; during Section 65(6) audit (Form GST ADT-02) certain transactions were found inter-state but treated as intra-state. Petitioner discharged IGST liability subsequently. Refund application 17.01.2024 was rejected by department citing Section 54(1) limitation from January 2018 original payment. Patna HC held - relevant date is correct-tax (IGST) payment date, not original wrong payment. Holding otherwise renders Sections 77 and 19 nugatory. Awarded 6 percent simple interest from 3 months after refund application date till actual refund.</p>
                <p><strong>Section 34 of CGST Act 2017 - Credit Note Bar:</strong> Where the taxpayer has made tax adjustment through issuance of credit note under Section 34 in respect of the said transaction, refund under Section 77 / 19 is NOT available - per Circular 162/18/2021 Para 4.4.</p>
                <p><strong>Section 65(6) of CGST Act 2017:</strong> Audit observations in Form GST ADT-02 - common officer-discovery trigger for wrong-head correction.</p>
                <p><strong>Form GST DRC-03:</strong> Voluntary tax payment instrument - the procedural vehicle to discharge correct tax before filing Section 77 / 19 refund application.</p>
                <p><strong>Government references:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a>, <a href="https://cbic-gst.gov.in" target="_blank" rel="noopener">CBIC GST circulars and instructions</a>, and <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">indiacode.nic.in (CGST Act 2017 and IGST Act 2017)</a>.</p>

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
                    <p class="faq-expanded__lead">Plain-English answers to the questions taxpayers most often ask about wrong-tax-head refund under Section 77 CGST and Section 19 IGST - including Hinglish variants for stakeholders comfortable in mixed language.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Wrong Tax Head',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is GST refund under Section 77 CGST and Section 19 IGST?</h3>
                        <div class="faq-expanded__a"><p>Section 77(1) of CGST Act 2017 allows refund of CGST + SGST/UTGST paid on a supply that is later held to be inter-state, after the taxpayer has discharged IGST. Section 19(1) of IGST Act 2017 mirrors this for the reverse case - refund of IGST paid on a supply later held to be intra-state, after CGST + SGST/UTGST has been discharged. The refund is filed in Form GST RFD-01 under reason 'Tax paid which is subsequently held as the converse'. Per Rule 89(1A), the 2-year limitation runs from the date of payment of the correct tax.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What does 'subsequently held' mean in Section 77 - self-discovery or officer-discovery?</h3>
                        <div class="faq-expanded__a"><p>Both. CBIC Circular 162/18/2021-GST dated 25 September 2021 at Para 3 clarifies that the term 'subsequently held' covers (a) cases where the taxpayer himself subsequently finds the misclassification during reconciliation, and (b) cases where the tax officer finds or holds the misclassification in any proceeding such as audit, assessment, or scrutiny. Refund under Section 77 / 19 is available in both situations, provided the correct tax is first paid.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Galat tax head se kaise refund mile - Section 77 ya 19 ka procedure kya hai? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Pehle correct tax pay karo - DRC-03 voluntary payment ke through. Agar pehle CGST + SGST diya tha aur supply inter-state thi, to ab IGST bharo. Agar pehle IGST diya tha aur supply intra-state thi, to ab CGST + SGST bharo. Section 77(2) ya Section 19(2) ke under correct tax par koi interest nahi lagega. Phir GST portal par Form RFD-01 file karo - reason me 'Tax paid as intrastate / interstate which is subsequently held as the converse' select karo. 2 saal ka limit correct tax pay karne ki date se start hota hai (Rule 89(1A)). Agar Section 34 credit note jaari kiya tha to refund nahi milega.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the relevant date for refund - wrong tax payment date or correct tax payment date?</h3>
                        <div class="faq-expanded__a"><p>The relevant date is the date of payment of the CORRECT tax, not the original wrong payment. Rule 89(1A) of CGST Rules 2017 (inserted by Notification 35/2021-CT) and Circular 162/18/2021-GST Para 4.2 establish this. The Patna High Court 2025 ruling reinforced it - holding that the relevant date is the date of correct-tax payment, and any other reading would render Sections 77 and 19 nugatory. The court awarded 6 percent simple interest from 3 months post application till actual refund.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is interest payable on the correct tax now due under Section 77(2) and Section 19(2)?</h3>
                        <div class="faq-expanded__a"><p>No. Section 77(2) of CGST Act expressly states that no interest is payable on the correct tax now due. Section 19(2) of IGST Act mirrors this for the reverse direction. The legislative rationale is that the wrong tax was already with the consolidated revenue, just in the wrong pocket - so there is no actual loss to government revenue. Where officer demands Section 50 interest, Patron's reply cites Sections 77(2) / 19(2) directly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can refund be claimed if I adjusted the wrong tax via credit note under Section 34?</h3>
                        <div class="faq-expanded__a"><p>No. Where the taxpayer has made tax adjustment through issuance of a credit note under Section 34 of CGST Act in respect of the said transaction, refund under Section 77 / 19 is NOT available. This is the express bar in CBIC Circular 162/18/2021-GST Para 4.4. The alternative path is voluntary correction via DRC-03 with a parallel Section 49(6) excess cash ledger refund pathway, depending on facts.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is Rule 89(1A) of CGST Rules and Notification 35/2021-CT?</h3>
                        <div class="faq-expanded__a"><p>Notification 35/2021-Central Tax dated 24 September 2021 inserted sub-rule (1A) into Rule 89 of CGST Rules 2017. Rule 89(1A) prescribes that any person claiming refund under Section 77 may file Form GST RFD-01 within 2 years from the date of payment of tax on the inter-state supply. Pre-Notification payments get 2 years from 24.09.2021. Per Circular 162/18/2021 Para 4.3, Rule 89(1A) also applies to Section 19 IGST cases.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How does Section 65(6) audit drive a wrong-head refund claim?</h3>
                        <div class="faq-expanded__a"><p>Section 65(6) of CGST Act 2017 governs departmental audits. Where the audit observation in Form GST ADT-02 notes that supplies were misclassified between intra-state and inter-state, the taxpayer discharges the correct tax pursuant to ADT-02 (often via DRC-03), and then files RFD-01 referencing ADT-02 as proof of officer-discovery covered by Circular 162/18/2021 Para 3. This is one of the most common Section 77 / 19 refund triggers in FY 2017-18 to FY 2019-20 cases.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">What is the Patna HC 2025 ruling on Section 77 relevant date?</h3>
                        <div class="faq-expanded__a"><p>The Patna High Court ruled in 2025 that the relevant date for Section 77 refund is the date of payment of correct tax (IGST), not the date of original wrong payment (CGST + SGST). The petitioner had filed all returns for FY 2017-18, the audit found inter-state supplies wrongly treated as intra-state, IGST was paid in March 2024, and the refund application filed 17.01.2024 was rejected by the department citing Section 54(1) limitation from January 2018. The court allowed the petition holding any contrary reading would render Sections 77 and 19 nugatory.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Pre-September 2021 wrong payment ka refund mil sakta hai kya? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Haan, Notification 35/2021-CT 24 September 2021 effective hua, par Circular 162/18/2021 Para 4.2 ke under aur Rule 89(1A) ke proviso ke under pre-Notification payments ke liye bhi 2 saal ka time milta hai - 24.09.2021 se. Agar pre-September 2021 correct tax pay kiya tha to bhi 24.09.2023 tak window thi. Aur Patna HC 2025 ruling ke under FY 2017-18 ke purane cases bhi cover ho jaate hain agar correct tax recently pay kiya hai. Patron ka full reply pack Rule 89(1A), Circular 162, aur Patna HC ruling teeno cite karta hai aged claims ke liye.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul style="margin-bottom:0;">
                    <li><strong>Statutory provisions?</strong> Section 77 CGST Act 2017 + Section 19 IGST Act 2017 + Rule 89(1A) of CGST Rules.</li>
                    <li><strong>Filing form?</strong> Form GST RFD-01, reason "Tax paid on intrastate / interstate which is subsequently held as the converse".</li>
                    <li><strong>Time limit?</strong> 2 years from date of payment of CORRECT tax (not original wrong payment) per Rule 89(1A).</li>
                    <li><strong>Interest on correct tax?</strong> NIL - waived under Section 77(2) and Section 19(2).</li>
                    <li><strong>Disqualifier?</strong> Section 34 credit note adjustment (Circular 162 Para 4.4).</li>
                    <li><strong>Foundational circular?</strong> Circular 162/18/2021-GST dated 25 September 2021.</li>
                    <li><strong>Key recent ruling?</strong> Patna HC 2025 - relevant date is correct-tax payment date; 6 percent interest awarded.</li>
                    <li><strong>Procedural precondition?</strong> Discharge correct tax via Form GST DRC-03 voluntary payment before RFD-01.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Deadlines That Determine Your Refund</h2>
            <div class="content-text">
                
                <p>Wrong-tax-head refund deadlines run off Rule 89(1A) and the correct-tax discharge timing. Patron tracks each milestone:</p>
                <ol>
                    <li><strong>Refund time limit under Rule 89(1A)</strong> - 2 years from date of payment of correct tax. Permanent loss of refund right if missed.</li>
                    <li><strong>Pre-Notification 35/2021 transition rule</strong> - 2 years from 24.09.2021 for correct payments made before that date.</li>
                    <li><strong>RFD-02 acknowledgement</strong> - within 15 days of RFD-01 (Rule 90(2)). Escalate via grievance if delayed.</li>
                    <li><strong>RFD-04 provisional sanction</strong> - within 7 days of RFD-02 (low-risk path).</li>
                    <li><strong>RFD-06 final sanction</strong> - within 60 days of RFD-02 (Section 54(7)). 6 percent interest under Section 56 if delayed.</li>
                    <li><strong>Section 107 appeal</strong> - within 3 months of adverse RFD-06. Pre-deposit 10 percent of disputed tax.</li>
                    <li><strong>Patna HC 2025 interest award</strong> - 6 percent simple interest from 3 months post application till actual refund (for limitation-defended claims).</li>
                </ol>
                <p><strong>Get your free wrong-tax-head eligibility check now. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20paid%20GST%20in%20wrong%20tax%20head." target="_blank" rel="noopener">WhatsApp us</a>. Place of Supply diagnosis, refund quantum, and Section 34 credit note bar check within 4 business hours.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Recover Wrong-Tax-Head GST With Section 77 + Section 19 Discipline</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF;">GST classification errors between intra-state and inter-state supply are among the most common compliance failures. Section 77(1) of the CGST Act 2017 and Section 19(1) of the IGST Act 2017 together provide the symmetric refund mechanism - the DTA supplier discharges the correct tax via DRC-03 voluntary payment, then files Form GST RFD-01 to recover the wrongly paid tax. Section 77(2) and Section 19(2) expressly waive interest on the correct tax now due. Rule 89(1A) of CGST Rules 2017 (inserted by Notification 35/2021-CT) prescribes that the 2-year limitation runs from the date of payment of the correct tax, not the original wrong payment.</p>
                <p style="color:#FFFFFF;">CBIC Circular 162/18/2021-GST dated 25 September 2021 settled three foundational questions - "subsequently held" includes both self-discovery and officer-discovery (Para 3), Rule 89(1A) applies to Section 19 IGST cases too (Para 4.3), and Section 34 credit note adjustment bars the refund (Para 4.4). The Patna High Court 2025 ruling further reinforced that holding the relevant date as the original wrong payment date would render Sections 77 and 19 nugatory - and awarded 6 percent simple interest from 3 months post application. Patron Accounting LLP brings 15+ years of GST classification, Place of Supply analysis, Section 77 + 19 refund, audit-driven correction, and litigation defence experience for 200+ Indian businesses including buying agents, intermediaries serving foreign clients, e-commerce sellers, and DTA suppliers operating across state lines.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20discuss%20wrong-tax-head%20refund%20with%20Patron%20Accounting." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Wrong%20Tax%20Head%20Refund&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20paid%20GST%20in%20the%20wrong%20tax%20head%20and%20would%20like%20your%20help%20with%20Section%2077%20%2F%2019%20refund.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Adjacent Services for Wrong-Tax-Head Recovery</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Wrong-tax-head refund integrates with the broader GST refund and litigation stack. Most clients run these services in parallel for end-to-end compliance.</p>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end GST refund support across all 8 refund categories</div>
                <div class="pa-cross-grid">
                    <a href="/gst-refund/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path d="M9 12l2 2 4-4"/></svg></div><div><div class="pa-card-title">GST Refund (General)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-rfd-01-filing/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">GST RFD-01 Filing</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-rfd-03-deficiency-response/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/></svg></div><div><div class="pa-card-title">RFD-03 Deficiency Response</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-rfd-06-order-analysis/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">RFD-06 Order Analysis</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-inverted-duty-structure/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg></div><div><div class="pa-card-title">Inverted Duty Refund</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-service-exports/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/></svg></div><div><div class="pa-card-title">Service Exports Refund</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-sez-supplies/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><div><div class="pa-card-title">SEZ Supplies Refund</div><div class="pa-card-sub">India</div></div></a>
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
            <p><strong>Content Created:</strong> 7 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 7 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team · Patron Accounting LLP</p>
            <p>This page is reviewed every 3 months (Tier 1 freshness - Patna HC 2025 ruling recent, Place of Supply jurisprudence evolving, Rule 89(1A) successor pending). Review triggers include any High Court ruling on Section 77, CBIC clarification under Section 168, or amendment to Rule 89.</p>
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
