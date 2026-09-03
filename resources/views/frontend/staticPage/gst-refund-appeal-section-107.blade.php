@extends('layouts.service-app')
<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Refund Appeal Under Section 107 — APL-01 Filing</title>
    <meta name="description" content="Section 107 first appeal in Form APL-01 against RFD-06 refund rejection. 3-month limit, 10 percent pre-deposit, GSTAT bridge. Rs 25,000+. Patron CA-led.">
    <link rel="canonical" href="/gst-refund-appeal-section-107">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Refund Appeal Under Section 107 — APL-01 Filing">
    <meta property="og:description" content="Section 107 first appeal in Form APL-01 against RFD-06 refund rejection. 3-month limit, 10 percent pre-deposit, GSTAT bridge. Rs 25,000+. Patron CA-led.">
    <meta property="og:url" content="/gst-refund-appeal-section-107/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund Appeal Under Section 107 — APL-01 Filing">
    <meta name="twitter:description" content="Section 107 first appeal in Form APL-01 against RFD-06 refund rejection. 3-month limit, 10 percent pre-deposit, GSTAT bridge. Rs 25,000+. Patron CA-led.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/gst-refund-appeal-section-107/#breadcrumb",
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
          "name": "Section 107 Appeal",
          "item": "https://www.patronaccounting.com/gst-refund-appeal-section-107/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/gst-refund-appeal-section-107/#faq",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Section 107 appeal and when can I file it against refund rejection?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 107 of the CGST Act 2017 is the first appellate remedy against any adverse order passed by an adjudicating authority - including Form GST RFD-06 refund rejection. Appeal must be filed in Form GST APL-01 within 3 months from the date of communication of RFD-06; +1 month condonable under Section 107(4) with sufficient cause. The appellate forum is the Appellate Authority - typically Commissioner (Appeals) or designated officer under Rule 109A. Mandatory pre-deposit of 10 percent of disputed tax via Form PMT-06 from Electronic Cash Ledger."
          }
        },
        {
          "@type": "Question",
          "name": "How do I file Form GST APL-01 step-by-step on the portal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "8-step procedure - Login to gst.gov.in; Navigate Services > User Services > My Applications > Appeal to Appellate Authority > NEW APPLICATION; Select Order Type as Refund Order; Enter Order Number and Date; Verify period and category; Download Annexure to APL-01 template; Populate with statement of facts and grounds; Upload Annexure as PDF (max 5 MB); Enter disputed amount and pre-deposit; Generate PMT-06 challan; Pay from Cash Ledger (NOT Credit Ledger); Submit with DSC or EVC; Capture provisional APL-02; Submit certified copy within 7 days for final APL-02."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 10 percent pre-deposit and can I use Credit Ledger?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 107(6) mandates pre-deposit of 10 percent of remaining disputed tax (after admitted portion paid in full). Maximum cap historically Rs 25 crore - 53rd GST Council recommended reduction. Pre-deposit MUST be paid from Electronic Cash Ledger via PMT-06 challan; Electronic Credit Ledger CANNOT be used. This is the single most common DIY procedural error - using Credit Ledger results in the appeal being treated as not-admitted. Pre-deposit is refundable with Section 115 interest at 6 percent per annum if appeal succeeds."
          }
        },
        {
          "@type": "Question",
          "name": "When does the Appellate Authority issue final APL-02 acknowledgement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Provisional APL-02 acknowledgement is issued immediately on online APL-01 filing. Final APL-02 with appeal number is issued only after the appellant submits self-certified copy of RFD-06 within 7 days of online filing - per Rule 108(3). Where RFD-06 is portal-uploaded by the Department, no separate certified copy is needed - portal copy suffices for final APL-02 issuance. If certified copy is submitted after 7 days, the date of filing of the appeal shifts to the date of submission of certified copy - potentially pushing limitation."
          }
        },
        {
          "@type": "Question",
          "name": "Can I withdraw a Section 107 appeal after filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Per GSTN advisory dated 14 May 2025 and Rule 109C, an appeal can be withdrawn using Form GST APL-01W. Pre-final-APL-02 withdrawal is self-service via portal. Post-final-APL-02 withdrawal requires Appellate Authority approval within 7 days of withdrawal application. Status changes from Appeal submitted to Appeal withdrawn. Maximum two withdrawals per appeal cycle. Re-filing is permitted within Section 107 limitation. Section 128A waiver scheme requires appeal withdrawal first as a precondition."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Appellate Authority order timeline under Section 107(13)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 107(13) prescribes an aspirational 1-year disposal - the Appellate Authority shall, where it is possible, decide every appeal within 1 year from filing. In practice, processing typically takes 6 to 18 months depending on case complexity, hearing availability, and backlog. Patron's discipline includes periodic written reminders to the Appellate Authority for delayed appeals; for systemic delays beyond 18 months, an Article 226 writ for direction to dispose within fixed timeframe is considered (Tata Steel Jharkhand HC framework)."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Section 112 GSTAT bridge and when do I use it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 112 of CGST Act 2017 provides second appeal to the GST Appellate Tribunal (GSTAT) against adverse APL-04 Order-in-Appeal under Section 107 (or revision order under Section 108). Filing is in Form GST APL-05 within 3 months of APL-04 communication; +3 months condonable. Per Notification S.O. 4220(E) dated 17.09.2025 issued under Section 112(1), for orders communicated before 01.04.2026, appeal may be filed up to 30.06.2026 - the backlog window. Additional 10 percent pre-deposit under Section 112(8); cumulative 20 percent. Maximum Rs 20 crore."
          }
        },
        {
          "@type": "Question",
          "name": "Can I produce new evidence at the Section 107 appeal stage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Generally NO. Per Rule 112 of CGST Rules 2017, the appellant shall not produce any new evidence (oral or documentary) before the Appellate Authority other than evidence already produced before the adjudicating authority - except in specific circumstances. Where new evidence is sought, the Appellate Authority must record reasons in writing for admission. The adjudicating authority must be given reasonable opportunity to examine the new evidence. Patron's strategy is to gather all evidence at the RFD-09 reply stage to RFD-08 SCN; rely on existing record at appeal stage."
          }
        },
        {
          "@type": "Question",
          "name": "Section 107 appeal kaise file karein - kya documents lagte hain aur pre-deposit kitna hai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 107 appeal RFD-06 rejection ke against 3 mahine ke andar Form GST APL-01 me file karna hota hai. Documents - RFD-06 PDF, Annexure with statement of facts and grounds (max 5 MB PDF), certified copy of RFD-06 (within 7 days), PMT-06 challan for pre-deposit. Pre-deposit 10 percent of disputed tax hota hai - sirf Electronic Cash Ledger se pay karna hai (Credit Ledger se nahi). Filing portal pe Services > User Services > My Applications > Appeal to Appellate Authority se hota hai. Provisional APL-02 turant milti hai; final APL-02 with appeal number 7-day certified copy submission ke baad."
          }
        },
        {
          "@type": "Question",
          "name": "What if my appeal is rejected at admission stage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Where APL-01 is rejected at admission stage (typically due to procedural defects - wrong Order Type selected, wrong pre-deposit, missing certified copy beyond 7 days), the appeal can be re-filed. To re-file - navigate to New Application page; select Order Type and enter Order ID of original application; fill form correctly; submit. Whatever amount was paid (admitted plus pre-deposit) is set off against the demand ID and not lost. Patron's discipline - identify rejection reason from system message; cure procedural defect; re-file within original Section 107 limitation if available."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/gst-refund-appeal-section-107/#service",
      "name": "GST Refund Appeal Filing Under Section 107 of CGST Act 2017",
      "description": "Patron Accounting LLP provides end-to-end Section 107 first appeal services against adverse Form GST RFD-06 refund rejection orders. Services include appeal viability assessment, Form GST APL-01 memorandum and Annexure drafting with judicial precedent integration, 8-step GST portal filing procedure, mandatory 10 percent pre-deposit coordination via Form PMT-06 from Electronic Cash Ledger, APL-02 acknowledgement tracking with 7-day certified copy discipline under Rule 108(3), hearing representation under Power of Attorney with Section 107(8) adjournment management, APL-04 Order-in-Appeal recovery, and Section 112 GSTAT bridge in Form APL-05 with Notification S.O. 4220(E) backlog window discipline.",
      "serviceType": "GST Refund Litigation Service",
      "url": "https://www.patronaccounting.com/gst-refund-appeal-section-107/",
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
                        GST Refund Appeal Under Section 107 - Form APL-01 Filing and Pre-Deposit
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Original RFD-01 ARN, RFD-06 PDF, RFD-08 SCN if any, RFD-09 reply if any, statement of facts and grounds of appeal annexure</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Section 107 appeal starts at Rs 25,000 plus 18 percent GST plus 10 percent statutory pre-deposit</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any GST taxpayer aggrieved by adverse RFD-06; appeal within 3 months of communication; +1 month condonable under Section 107(4)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> APL-01 filing 7 to 14 days; APL-04 Order-in-Appeal aspirational 1 year under Section 107(13); Section 112 GSTAT route +3 months thereafter</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years of GST Compliance Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20Appeal%20Section%20107%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Section 107 Appeal',
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
    'ctaText'    => 'From RFD-06 receipt to APL-04 Order-in-Appeal - Patron handles the full Section 107 first appeal pipeline with CA-led drafting and hearing representation.',
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
                <a href="#what-section" class="toc-pill">What Is Section 107</a>
                <a href="#who-section" class="toc-pill">Who Can File</a>
                <a href="#services-section" class="toc-pill">What We Deliver</a>
                <a href="#procedure-section" class="toc-pill">8-Step Filing Flow</a>
                <a href="#documents-section" class="toc-pill">Documents Required</a>
                <a href="#challenges-section" class="toc-pill">Challenges and Solutions</a>
                <a href="#fees-section" class="toc-pill">Fees and Pricing</a>
                <a href="#timeline-section" class="toc-pill">Timeline</a>
                <a href="#benefits-section" class="toc-pill">Why CA-Led</a>
                <a href="#comparison-section" class="toc-pill">S107 vs S112 vs Writ</a>
                <a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 107 Appeal Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Section 107 Appeal Services at a Glance</strong></p>
                    <p>Section 107 of the CGST Act 2017 is the first appellate remedy against an adverse Form GST RFD-06 refund rejection order. The appeal lies before the Commissioner (Appeals) or designated Appellate Authority. Filing is in Form GST APL-01 with Annexure (statement of facts and grounds of appeal) within 3 months of RFD-06 communication; +1 month condonable under Section 107(4). Mandatory pre-deposit of 10 percent of disputed tax via Form PMT-06 - paid only from Electronic Cash Ledger (Credit Ledger NOT permitted for pre-deposit). Provisional APL-02 acknowledgement issued immediately on online filing; final APL-02 with appeal number issued only after self-certified copy of RFD-06 is submitted within 7 days. The Appellate Authority can confirm, modify, or annul the order under Section 107(11) - importantly cannot remand back to original. APL-04 summary of Order-in-Appeal issues with aspirational 1-year disposal under Section 107(13). Where APL-04 is also adverse, Section 112 second appeal lies before GSTAT in Form APL-05.</p>
                </div>
                <p>Section 107 of the Central Goods and Services Tax Act 2017 is the foundational appellate remedy under the GST regime. Any person aggrieved by any decision or order passed against him by an adjudicating authority - including Form GST RFD-06 refund rejection - may appeal to the Appellate Authority within 3 months from the date on which the said decision or order is communicated. The Appellate Authority is typically the Commissioner (Appeals) or such other officer as designated by the Commissioner under Rule 109A. Per CBIC Circular 250/07/2025-GST dated 24 June 2025, the Principal Commissioner or Commissioner of Central Tax acts as the Reviewing Authority under Section 107 for orders passed by Common Adjudicating Authorities.</p>
                <p>Filing is in Form GST APL-01 along with the Annexure containing the statement of facts and grounds of appeal. The form is filed electronically on the GST common portal under Services > User Services > My Applications > Appeal to Appellate Authority. Mandatory pre-deposit under Section 107(6) is 10 percent of the remaining amount of tax in dispute - paid via Form PMT-06 challan from the Electronic Cash Ledger; the Electronic Credit Ledger cannot be used and is the single most common DIY procedural error. Provisional APL-02 acknowledgement is issued immediately on online filing; final APL-02 with appeal number is issued only after self-certified copy of RFD-06 is submitted within 7 days per Rule 108(3). The Appellate Authority can confirm, modify, or annul the order under Section 107(11) - notably GST law does NOT permit remand back to the original adjudicator (unlike Income Tax Act). The order is summarised in Form APL-04 with an aspirational 1-year disposal under Section 107(13). Where APL-04 is also adverse, Section 112 second appeal lies before the GST Appellate Tribunal in Form APL-05 within 3 months; for backlog matters where APL-04 was communicated before 01.04.2026, Notification S.O. 4220(E) dated 17.09.2025 extends the filing window to 30.06.2026.<div class="table-responsive-wrapper" style="margin-top:24px;">
                    <table>
                        <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                        <tbody>
                            <tr><td>Governing Provision</td><td>Section 107 of CGST Act 2017 read with Rule 108 of CGST Rules 2017</td></tr>
                            <tr><td>Form Number</td><td>Form GST APL-01 (memorandum) plus Annexure (statement of facts and grounds)</td></tr>
                            <tr><td>Limitation</td><td>3 months from communication of RFD-06; +1 month condonable under Section 107(4)</td></tr>
                            <tr><td>Pre-Deposit</td><td>10 percent of disputed tax via Form PMT-06 from Electronic Cash Ledger only</td></tr>
                            <tr><td>Pre-Deposit Cap</td><td>Historically Rs 25 crore; 53rd GST Council recommended reduction</td></tr>
                            <tr><td>Acknowledgement</td><td>Provisional APL-02 immediately; final APL-02 after 7-day certified copy submission</td></tr>
                            <tr><td>Output</td><td>Order-in-Appeal in Form APL-04; aspirational 1-year disposal under Section 107(13)</td></tr>
                        </tbody>
                    </table>
                </div></p>
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
                <h2 class="section-title">What Is Section 107 Appeal Against RFD-06</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Section 107 of the CGST Act 2017 provides the first appellate remedy against any decision or order passed by an adjudicating authority. In the refund context, the order in question is Form GST RFD-06 - the Refund Sanction or Rejection Order issued under Rule 92. Where RFD-06 rejects the refund in full, sanctions only in part with rejection of the balance, sanctions with adjustment under RFD-07A against pending demand of doubtful legitimacy, or sanctions with withholding under RFD-07B - the aggrieved taxpayer's primary remedy is Section 107 first appeal.</p>
                    <p>The appellate forum is the Appellate Authority - typically Commissioner (Appeals) or an officer designated by the Commissioner under Rule 109A. The Appellate Authority operates as the original-jurisdiction reviewing forum within the Department; it is institutionally distinct from the GST Appellate Tribunal (GSTAT) which is the Tier 2 appellate body under Section 112. CBIC Circular 250/07/2025-GST dated 24 June 2025 clarified that the Principal Commissioner or Commissioner of Central Tax acts as the Reviewing Authority under Section 107 for orders passed by Common Adjudicating Authorities (CAA).</p>
                    <p>For deeper background on the order being appealed, see the official <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a> and reference materials at <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code</a> and <a href="https://cbic-gst.gov.in" target="_blank" rel="noopener">CBIC</a>.</p>
                    <h3 style="margin-top:24px;">Section 107 Appeal Architecture</h3>
                    <div class="table-responsive-wrapper">
                        <table>
                            <thead><tr><th>Party / Forum</th><th>Role</th><th>Function</th></tr></thead>
                            <tbody>
                                <tr><td>Appellant</td><td>Aggrieved person - taxpayer or unregistered person</td><td>Files Form APL-01 within 3 months under Section 107(1)</td></tr>
                                <tr><td>Respondent</td><td>Adjudicating Authority who passed RFD-06</td><td>Department represented by Departmental Representative</td></tr>
                                <tr><td>Appellate Authority</td><td>Commissioner (Appeals) or designated officer under Rule 109A</td><td>Hears appeal; passes Order-in-Appeal in Form APL-04</td></tr>
                                <tr><td>Reviewing Authority</td><td>Principal Commissioner or Commissioner of Central Tax per Circular 250/07/2025-GST</td><td>Examines Department-side orders; can authorise appeal under Section 107(2) in Form APL-03</td></tr>
                                <tr><td>Authorised Representative</td><td>CA, CS, advocate, or qualified relative under Section 116</td><td>Appears on behalf of appellant under Power of Attorney</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Section 107 Appeal:</strong></p>
                    <div class="table-responsive-wrapper" style="margin-top:12px;">
                        <table>
                            <thead><tr><th>Term</th><th>Plain Meaning</th></tr></thead>
                            <tbody>
                                <tr><td>Form GST APL-01</td><td>First Appeal Memorandum filed by appellant under Section 107(1)</td></tr>
                                <tr><td>Annexure to APL-01</td><td>PDF annexure with detailed statement of facts and grounds of appeal; max 5 MB</td></tr>
                                <tr><td>Form GST APL-01W</td><td>Withdrawal of APL-01 appeal - introduced by GSTN advisory 14 May 2025</td></tr>
                                <tr><td>Form GST APL-02</td><td>Acknowledgement of appeal - provisional on filing; final on certified copy submission</td></tr>
                                <tr><td>Form GST APL-03</td><td>Application by Department under Section 107(2) directing appeal</td></tr>
                                <tr><td>Form GST APL-04</td><td>Summary of Order-in-Appeal issued under Section 107(11)</td></tr>
                                <tr><td>Form GST APL-05</td><td>Second Appeal Memorandum to GSTAT under Section 112(1)</td></tr>
                                <tr><td>Form PMT-06</td><td>Challan for payment of pre-deposit from Electronic Cash Ledger</td></tr>
                                <tr><td>Section 107(6)</td><td>10 percent mandatory pre-deposit of disputed tax</td></tr>
                                <tr><td>Section 107(11)</td><td>Powers - confirm, modify, annul; NO remand</td></tr>
                                <tr><td>Section 107(13)</td><td>Aspirational 1-year disposal</td></tr>
                                <tr><td>Rule 108(3)</td><td>7-day certified copy rule for date of filing</td></tr>
                                <tr><td>Cash Ledger vs Credit Ledger</td><td>Pre-deposit can ONLY be paid from Electronic Cash Ledger; Credit Ledger cannot be used</td></tr>
                            </tbody>
                        </table>
                    </div>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Section 107 Appeal</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Form</span>
                        <strong>GST APL-01</strong>
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
            <h2 class="section-title">Who Can File Section 107 Appeal</h2>
            <div class="content-text">
                
                <p>Any person aggrieved by an adverse Form GST RFD-06 refund rejection order can file a Section 107 first appeal. Patron Accounting handles Section 107 filings for the following appellant categories:</p>
                <ul>
                    <li><strong>Exporters facing RFD-06 rejection on inverted duty refund (Section 54(3)(ii)) or zero-rated supply refund (Section 54(3)(i)) grounds</strong> - service exporters disputed on Section 2(6) IGST conditions; goods exporters on shipping bill or LUT mismatches</li>
                    <li><strong>SEZ and EOU units</strong> with refund rejection on zero-rated supplies, ITC accumulation, or NoC and endorsement gaps</li>
                    <li><strong>Inverted duty structure manufacturers</strong> - textiles, footwear, fertilisers, pharma APIs - facing rejection on Rule 89(5) formula application or input-output classification</li>
                    <li><strong>E-commerce operators and aggregators</strong> with TCS, marketplace, and place-of-supply disputes leading to RFD-06 rejection</li>
                    <li><strong>Sole proprietorships, partnerships, LLPs, private limited companies, and OPC structures</strong> with refund rejection on documentary or quantum grounds</li>
                    <li><strong>Importers</strong> facing IGST refund disputes under Section 54(8) and Section 16(3) of IGST Act</li>
                    <li><strong>NRTPs, casual taxable persons, and registered non-resident taxpayers</strong> with one-off refund disputes</li>
                </ul>
                <p>Patron's Section 107 filings have been done for clients in pharma, IT services, engineering, textile, electronics, and chemical sectors - 200+ refund litigation matters handled.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Patron Accounting Delivers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Section 107 Appeal Viability Assessment</td><td>Free 30-minute review of RFD-06 PDF and supporting documents. Identifies appeal grounds with citation framework, computes pre-deposit amount, scores appeal viability (high/medium/low), and recommends Section 107 vs Article 226 writ vs settlement based on case posture.</td></tr>
                        <tr><td>APL-01 Memorandum and Annexure Drafting</td><td>Senior CA-led drafting team prepares the APL-01 form on portal and the Annexure PDF with statement of facts, grounds of appeal (point-by-point rebuttal of every RFD-06 ground), judicial precedent integration (HC and SC rulings), and prayer formulation. Internal partner sign-off before filing.</td></tr>
                        <tr><td>Pre-Deposit Computation and PMT-06 Coordination</td><td>Pre-deposit worksheet covering admitted amount, disputed amount, 10 percent statutory rate, cap check, Cash Ledger pre-funding if needed, PMT-06 challan generation, payment coordination, and set-off via UTILIZE CASH. Avoids the single most common DIY error of using Credit Ledger for pre-deposit.</td></tr>
                        <tr><td>APL-02 Acknowledgement Tracking and 7-Day Certified Copy Discipline</td><td>Patron's tracking dashboard captures provisional APL-02 immediately on filing; certified copy of RFD-06 submitted within 7 days; final APL-02 with appeal number captured as official filing date. Where Department's RFD-06 is portal-uploaded, no separate certified copy is required.</td></tr>
                        <tr><td>Hearing Representation Under Power of Attorney</td><td>Patron's CA team attends Section 107 hearing under POA. Up to 3 adjournments under Section 107(8). Written submissions, oral arguments, judicial precedent invocation. Where new evidence is sought to be introduced, Rule 112 reasons-in-writing requirement managed.</td></tr>
                        <tr><td>APL-04 Order-in-Appeal Recovery and Section 112 Bridge</td><td>On favourable APL-04 - coordinate with original adjudicating authority for fresh RFD-06 sanctioning the appealed amount; Section 56 interest computation if delay; bank credit follow-up. On adverse APL-04 - Section 112 GSTAT appeal preparation in Form APL-05 with additional 10 percent pre-deposit; backlog matters under Notification S.O. 4220(E) up to 30.06.2026.</td></tr>

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
            <h2 class="section-title">8-Step APL-01 Filing Flow on GST Portal</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's Section 107 appeal pipeline runs the 8-step GST portal filing procedure below. Each step has portal-specific nuances that DIY appellants frequently miss.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Login and Navigate to Appeal Module</h3>
                    <p class="step-description">Login to https://www.gst.gov.in with GSTIN credentials. Navigate to Services > User Services > My Applications. Select Appeal to Appellate Authority from Application Type drop-down. Click NEW APPLICATION button. Patron verifies all credentials, DSC validity, and Aadhaar authentication status before commencing.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC validity confirmed</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal credentials verified</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Authentication ready</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><line x1="35" y1="55" x2="85" y2="55" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="65" x2="70" y2="65" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg>
                        </div>
                        <span class="illustration-label">Portal Login</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Select Order Type and Enter RFD-06 Details</h3>
                    <p class="step-description">From Order Type drop-down, select Refund Order. Enter Order Number (RFD-06 reference) and Order Date. Confirm if Order was uploaded on portal (Yes/No). Patron records both portal-uploaded RFD-06 ARN and certified copy procurement timeline.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-06 ARN captured</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal upload status checked</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Order date confirmed</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="28" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><polyline points="80 32 86 32 90 36" stroke="#F5A623" stroke-width="2" fill="none"/><line x1="30" y1="48" x2="70" y2="48" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="58" x2="80" y2="58" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg>
                        </div>
                        <span class="illustration-label">Order Type</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Verify Order Details and Tax Period</h3>
                    <p class="step-description">Date of Communication and Period of Dispute auto-populate from original RFD-06; can be edited if incorrect. Select Category of case under dispute from drop-down. Add multiple line items if needed. Communication date is critical for limitation; period must match underlying refund tax periods.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Communication date verified</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax period reconciled</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Category selected</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="48" cy="40" r="18" fill="none" stroke="#14365F" stroke-width="2"/><line x1="62" y1="54" x2="80" y2="72" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="40" y1="40" x2="56" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="40" y1="46" x2="50" y2="46" stroke="#14365F" stroke-width="2" stroke-linecap="round"/></svg>
                        </div>
                        <span class="illustration-label">Period Check</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Download and Populate Annexure to APL-01</h3>
                    <p class="step-description">Click the link to download Annexure to GST APL-01 Template (Word/PDF). Open downloaded template. Populate with statement of facts, grounds of appeal, judicial precedents, and prayer. Save as PDF (max 5 MB). Patron drafts point-by-point rebuttal of each RFD-06 ground; case law integration; clear prayer formulation.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Statement of facts drafted</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Judicial precedents integrated</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Prayer formulated</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><polyline points="60 30 60 55" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><polyline points="50 45 60 55 70 45" stroke="#F5A623" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/><line x1="35" y1="65" x2="85" y2="65" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg>
                        </div>
                        <span class="illustration-label">Annexure Draft</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Upload Annexure as PDF on Portal</h3>
                    <p class="step-description">Upload the populated Annexure PDF to the portal. Maximum size 5 MB. Re-upload allowed before submission. Patron re-reads the final PDF on portal; confirms formatting integrity; bookmarks sections for officer ease of navigation.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PDF under 5 MB</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Formatting integrity confirmed</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bookmarks added</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><polyline points="60 65 60 35" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><polyline points="50 45 60 35 70 45" stroke="#F5A623" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/><circle cx="60" cy="20" r="3" fill="#25D366"/></svg>
                        </div>
                        <span class="illustration-label">PDF Upload</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Compute Disputed Amount and Pre-Deposit</h3>
                    <p class="step-description">Click Disputed Amount/Payment Details. Enter amount under dispute by tax head (IGST, CGST, SGST, Cess) and minor head (tax, interest, penalty, fee). Demand admitted equals Demand created minus Amount disputed (auto-computed). Pre-deposit defaults to 10 percent of disputed tax. Tax-head and minor-head split must reconcile to RFD-06.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax-head split verified</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Minor-head allocation correct</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10 percent computed</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="44" font-size="14" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Rs</text><line x1="30" y1="55" x2="90" y2="55" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><circle cx="38" cy="35" r="4" fill="#F5A623"/><circle cx="82" cy="35" r="4" fill="#F5A623"/></svg>
                        </div>
                        <span class="illustration-label">Pre-Deposit</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Pre-Deposit Payment via PMT-06 from Cash Ledger</h3>
                    <p class="step-description">Generate PMT-06 challan for pre-deposit amount. Pay via NEFT/RTGS/Debit Card. Pre-deposit MUST be from Electronic Cash Ledger - NOT Electronic Credit Ledger. Click UTILIZE CASH button to set off pre-deposit amount. Single most common procedural error among DIY appellants is using Credit Ledger.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cash Ledger pre-funded</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PMT-06 challan generated</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UTILIZE CASH executed</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="18" width="70" height="55" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="44" font-size="10" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">PMT</text><line x1="35" y1="60" x2="85" y2="60" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg>
                        </div>
                        <span class="illustration-label">PMT-06 Paid</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Submit and Capture APL-02 Acknowledgement</h3>
                    <p class="step-description">Verify all entries in preview. Sign with DSC (companies/LLPs) or EVC (proprietorships). Submit. Provisional APL-02 acknowledgement issued immediately. Submit self-certified copy of RFD-06 within 7 days for final APL-02 with appeal number. 7-day certified copy upload monitored; final APL-02 captured as official date of filing.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Provisional APL-02 captured</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>7-day certified copy tracked</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Final APL-02 secured</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="22" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M48 45l10 10 18-18" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/><rect x="22" y="78" width="76" height="14" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="89" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">APL-02</text></svg>
                        </div>
                        <span class="illustration-label">APL-02 Issued</span>
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
            <h2 class="section-title">Documents Required for Section 107 Appeal</h2>
            <div class="content-text">
                
                <p>Patron Accounting prepares the Section 107 appeal documentation pack from the following source documents shared by the client at engagement:</p>
                <ul>
                    <li><strong>Original Form GST RFD-01 ARN</strong> - acknowledgement reference of the underlying refund application</li>
                    <li><strong>Form GST RFD-06 PDF</strong> - the Refund Sanction or Rejection Order being appealed against; both portal-uploaded and any physical certified copy</li>
                    <li><strong>Form GST RFD-08 SCN</strong> - Show Cause Notice issued before RFD-06 (if any) and Patron's RFD-09 reply with annexures</li>
                    <li><strong>Statement of facts and grounds of appeal (Annexure to APL-01)</strong> - drafted by Patron; client provides factual narrative and supporting evidence</li>
                    <li><strong>Underlying refund supporting documents</strong> - export invoices, shipping bills with EGM, FIRC/BRC, LUT, GSTR-1 and GSTR-3B reconciliation, GSTR-2B vs ITC ledger, RFD-01 statements as applicable</li>
                    <li><strong>Judicial precedent set</strong> - HC and SC rulings relevant to grounds; integrated by Patron from internal precedent library</li>
                    <li><strong>Power of Attorney for Authorised Representative</strong> - executed under Section 116 of CGST Act 2017 for Patron's CA team to appear at hearing</li>
                    <li><strong>Digital Signature Certificate (DSC)</strong> - for companies/LLPs; Electronic Verification Code (EVC) for proprietorships</li>
                    <li><strong>Electronic Cash Ledger balance proof</strong> - sufficient for pre-deposit; pre-funding via direct deposit if needed</li>
                    <li><strong>Form GST PMT-06 challan</strong> - generated and paid before APL-01 final submission</li>
                    <li><strong>Form GST DRC-03 challan</strong> - for admitted amount payment (if any portion admitted)</li>
                </ul>
                <p>Patron's documentation checklist is signed off by the senior CA before APL-01 portal submission. The checklist also includes 7-day certified copy reminder, final APL-02 monitoring, and hearing brief preparation triggers.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Section 107 Appeal Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-deposit paid from Credit Ledger instead of Cash Ledger</td><td>Appeal treated as not-admitted because Section 107(6) requires Cash Ledger payment; provisional APL-02 issued but final not granted; limitation may lapse before remedy</td><td>Patron's cure - immediate fresh PMT-06 from Cash Ledger; UTILIZE CASH set-off; new APL-02 reflecting correct payment; Appellate Authority indulgence sought for filing-date reset where original Cash Ledger payment was within limitation</td></tr>
                        <tr><td>Certified copy of RFD-06 not submitted within 7 days</td><td>Final APL-02 not issued; date of filing shifts to certified copy submission date; may push limitation under Section 107(1) past the 3-month window</td><td>Patron's discipline - 7-day reminder built into tracking; where order is portal-uploaded by Department, no separate certified copy needed; where 7-day window missed, immediate upload with explanation note</td></tr>
                        <tr><td>Annexure to APL-01 exceeds 5 MB portal limit</td><td>Upload fails; appeal cannot be submitted on the portal until file size is reduced; risk of last-minute filing delays</td><td>Patron's cure - PDF compression; consolidation of related exhibits; strategic exhibit selection; supplementary submissions during hearing; Rule 112 application with reasons-in-writing for new evidence</td></tr>
                        <tr><td>Limitation about to lapse - Day 88 engagement</td><td>Only 2 days left in the 3-month Section 107(1) window when client engages; risk of statutory bar and forced reliance on Article 226 writ</td><td>Patron's expedited filing - same-day grounds analysis; 24-hour APL-01 drafting; pre-deposit funded same day; portal filing within Day 90; condonation under Section 107(4) if Day 90 already crossed</td></tr>
                        <tr><td>Hearing adjournments exhausted under Section 107(8)</td><td>Three adjournments used; further adjournments denied; risk of ex-parte hearing without proper presentation</td><td>Patron's playbook - written submissions in lieu of oral hearing; representation by senior partner with full case mastery; emphasis on specific judicial precedents; ex-parte hearing managed if necessary</td></tr>
                        <tr><td>APL-04 Order-in-Appeal pending beyond 1 year</td><td>Section 107(13) aspires to 1-year disposal but actual processing extends to 18+ months; refund capital remains locked</td><td>Patron's escalation - periodic written reminders to Appellate Authority; representation through Bar Association if delay is systemic; Article 226 writ for direction to dispose in specific timeframe (Tata Steel Jharkhand HC framework)</td></tr>

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
            <h2 class="section-title">Section 107 Appeal Fees and Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Section 107 Appeal Viability Assessment</td><td class="table-amount">Rs 8,000 standalone (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Patron Accounting Professional Fees (Section 107 Appeal Filing Standard - No Hearing)</td><td class="table-amount">Starting from Rs 25,000 per appeal (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Section 107 Appeal With Hearing Representation</td><td class="table-amount">Rs 35,000 per appeal (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Annexure Drafting Standalone (For Self-Filing)</td><td class="table-amount">Rs 12,000 standalone (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Pre-Deposit Coordination Standalone</td><td class="table-amount">Rs 4,000 standalone (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>APL-01W Withdrawal Coordination</td><td class="table-amount">Rs 6,000 standalone (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>APL-04 Recovery and Bank Credit Follow-Up</td><td class="table-amount">Rs 8,000 add-on (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Section 112 GSTAT Bridge Filing (Form APL-05)</td><td class="table-amount">Rs 55,000 per appeal (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>End-to-End Section 107 Bundle (Viability + APL-01 + Annexure + Pre-Deposit + Hearing + APL-04 Recovery)</td><td class="table-amount">Rs 50,000 bundle (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Multi-Period Bulk Section 107 Filing (3 appeals bundle)</td><td class="table-amount">Rs 75,000 bundle (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Statutory Pre-Deposit (Client Paid Directly)</td><td class="table-amount">10 percent of disputed tax via PMT-06 from Cash Ledger</td></tr>
                        <tr><td>Government / Statutory Fees</td><td class="table-amount">No separate government fee for Section 107 appeal filing on portal</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Section 107 Appeal consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20Appeal%20Section%20107%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 107 Appeal Lifecycle Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>RFD-06 grounds analysis</td><td>Same day from data share</td></tr>
                        <tr><td>Pre-deposit computation and PMT-06 generation</td><td>1 to 2 working days</td></tr>
                        <tr><td>Pre-deposit payment from Cash Ledger</td><td>Same day; bank credit timing 1 to 3 working days</td></tr>
                        <tr><td>Annexure to APL-01 drafting</td><td>5 to 10 working days standard</td></tr>
                        <tr><td>APL-01 online filing on GST portal</td><td>Same day once draft and pre-deposit ready</td></tr>
                        <tr><td>Provisional APL-02 acknowledgement</td><td>Immediate on filing</td></tr>
                        <tr><td>Self-certified copy submission window</td><td>Within 7 days of online filing</td></tr>
                        <tr><td>Final APL-02 with appeal number</td><td>Within few days of certified copy submission</td></tr>
                        <tr><td>Hearing scheduling by Appellate Authority</td><td>3 to 9 months from filing typical</td></tr>
                        <tr><td>Hearing completion (with up to 3 adjournments)</td><td>1 to 4 hearings over 2 to 6 months</td></tr>
                        <tr><td>APL-04 Order-in-Appeal disposal</td><td>Aspirational 1 year under Section 107(13); actual 6 to 18 months typical</td></tr>
                        <tr><td>Post-APL-04 fresh RFD-06 sanction (favourable)</td><td>30 to 60 days</td></tr>
                        <tr><td>Section 112 GSTAT filing (post adverse APL-04)</td><td>Within 3 months; Notification S.O. 4220(E) extended to 30.06.2026 for backlog</td></tr>
                        <tr><td>End-to-end (RFD-06 receipt to bank credit on success)</td><td>8 to 18 months typical for Section 107 path</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note on Section 107(13) aspirational disposal:</strong> The 1-year disposal under Section 107(13) is aspirational - the statute uses the phrase "where it is possible". Actual processing depends on bench backlog, hearing availability, and case complexity. Patron's tracking discipline includes periodic written reminders to the Appellate Authority for appeals pending beyond 12 months; for systemic delays beyond 18 months, an Article 226 writ for direction to dispose in fixed timeframe is considered (Tata Steel Jharkhand HC framework).</p>

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
            <h2 class="section-title">Why CA-Led Section 107 Appeal Beats DIY</h2>
        </div>
        <div class="features-grid">
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path d="M12 8v4M12 16h0"/></svg>
                    </div>
                    <h3>Cash Ledger vs Credit Ledger Pre-Deposit Discipline</h3>
                    <p>DIY appellants frequently use Credit Ledger for pre-deposit, causing appeal to be treated as not-admitted. Patron's pre-funding discipline ensures Cash Ledger has sufficient balance and PMT-06 set-off is correctly executed. Single fix prevents 95 percent of admission-stage rejections.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg>
                    </div>
                    <h3>Annexure Drafting with Judicial Precedent Integration</h3>
                    <p>DIY appellants draft Annexure generically without judicial precedent backbone. Patron's drafting integrates HC and SC rulings (Mavenir Karnataka HC, VKC Footsteps SC, Jian International Delhi HC, K Line India Bombay HC) giving Appellate Authority concrete legal basis to reverse RFD-06.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    </div>
                    <h3>7-Day Certified Copy Discipline Preserving Date of Filing</h3>
                    <p>DIY appellants miss the 7-day certified copy window, causing date of filing to shift to certified copy submission date and potentially pushing limitation past Section 107(1). Patron's tracking enforces 7-day discipline for non-portal-uploaded RFD-06.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                    </div>
                    <h3>Hearing Representation with Section 107(8) Adjournment Management</h3>
                    <p>DIY appellants either attend hearings under-prepared or exhaust 3 adjournments without strategic basis. Patron's CA-led hearing representation under POA ensures all 3 adjournments are used strategically, oral arguments are integrated with written submissions, and judicial precedents are invoked specifically.</p>
                </article>
            </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Indian Businesses</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of GST Compliance</strong></p>
                <h3>Trusted By</h3>
                <p>Hyundai, Asian Paints, Bridgestone, and 200+ Indian businesses including pharma, IT services, engineering, textile, electronics, and chemical exporters with active Section 107 appeals handled by Patron.</p>
                <h3>Outcome Proof</h3>
                <p>A Delhi engineering exporter recovered Rs 35 lakh refund plus Rs 1.6 lakh Section 56 interest through Section 107 first appeal in February 2026. Original RFD-06 from August 2025 had rejected Rs 35 lakh of Rs 50 lakh claim citing service-not-export under Section 2(6) of IGST Act. Patron's APL-01 with Annexure integrating Mavenir Karnataka HC 2025 and Gujarat HC December 2025 rulings, pre-deposit Rs 3.5 lakh from Cash Ledger, hearing representation in January 2026 - APL-04 in February 2026 set aside RFD-06; Rs 36.6 lakh disbursed within 35 days.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 107 vs Section 112 GSTAT vs Article 226 Writ</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Section 107</th><th>Section 112 GSTAT</th><th>Article 226 Writ</th></tr></thead>
                    <tbody>
                        <tr><td>Statutory provision</td><td>Section 107 of CGST Act 2017</td><td>Section 112 of CGST Act 2017</td><td>Article 226 of Constitution</td></tr>
                        <tr><td>Forum</td><td>Appellate Authority - Commissioner (Appeals)</td><td>GST Appellate Tribunal (GSTAT)</td><td>High Court</td></tr>
                        <tr><td>Form</td><td>Form GST APL-01 plus Annexure</td><td>Form GST APL-05 plus APL-06 cross-objections</td><td>Writ petition</td></tr>
                        <tr><td>Limitation</td><td>3 months from RFD-06 communication; +1 month condonable</td><td>3 months from APL-04; +3 months condonable</td><td>Reasonable time post adverse order</td></tr>
                        <tr><td>Pre-deposit</td><td>10 percent of disputed tax under Section 107(6)</td><td>Additional 10 percent under Section 112(8); cumulative 20 percent</td><td>Court fee per HC Rules; no statutory pre-deposit</td></tr>
                        <tr><td>Maximum cap</td><td>Rs 25 crore historically; 53rd GST Council recommended reduction</td><td>Rs 20 crore</td><td>Court fee structure</td></tr>
                        <tr><td>Powers of forum</td><td>Confirm, modify, annul - NO remand under Section 107(11)</td><td>Substantial questions; can remand</td><td>Constitutional review including void ab initio orders</td></tr>
                        <tr><td>Aspirational disposal</td><td>1 year under Section 107(13)</td><td>No statutory aspirational period</td><td>Variable - HC roster dependent</td></tr>
                        <tr><td>Common usage</td><td>Standard first appeal against RFD-06</td><td>Second appeal post adverse APL-04</td><td>Procedural defect cases per K Line India Bombay HC framework</td></tr>
                        <tr><td>Patron strategy</td><td>Default first remedy for refund rejection</td><td>Tier 2 escalation post adverse APL-04</td><td>Parallel track for procedural defect or high-pendency cases</td></tr>

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
            <h2 class="section-title">Related GST and Litigation Services</h2>
            <div class="content-text">
                
                <p>Section 107 appeal integrates with Patron's broader GST refund and litigation stack. Explore related services below:</p>
                <ul>
                    <li><a href="/gst-refund">GST Refund</a> - parent practice covering the full Section 54 refund spectrum, RFD-01 filing, RFD-06 sanction or rejection, and refund category mechanics</li>
                    <li><a href="/gstat-appeal-filing">GSTAT Appeal Filing</a> - the Tier 2 second appeal under Section 112 in Form APL-05; used when Section 107 APL-04 is adverse</li>
                    <li><a href="/gstat-pre-deposit-calculation">GSTAT Pre-Deposit Calculation</a> - Section 112(8) cumulative 20 percent pre-deposit advisory; coordinated with Section 107(6) discipline</li>
                    <li><a href="/gst-notice">GST Notice</a> - covers Section 73, 74, and 74A demand notices and RFD-08 SCN replies before they crystallise into RFD-06</li>
                    <li><a href="/gst-audit">GST Audit</a> - Section 65 departmental audit and forensic-style internal audit support for refund-eligible taxpayers</li>
                    <li><a href="/gst-annual-returns">GST Annual Returns</a> - GSTR-9 and GSTR-9C compliance feeding into refund reconciliation</li>
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
                
                <h3>Section 107(1) of CGST Act 2017</h3>
                <p>Any person aggrieved by any decision or order passed under this Act or the State Goods and Services Tax Act or the Union Territory Goods and Services Tax Act by an adjudicating authority may appeal to such Appellate Authority as may be prescribed within three months from the date on which the said decision or order is communicated to such person. Refund rejection in Form GST RFD-06 is a decision passed by an adjudicating authority and is therefore appealable under this provision.</p>
                <h3>Section 107(6) of CGST Act 2017 - Pre-Deposit</h3>
                <p>No appeal shall be filed under sub-section (1), unless the appellant has paid (a) in full, such part of the amount of tax, interest, fine, fee and penalty arising from the impugned order, as is admitted by him; and (b) a sum equal to ten per cent of the remaining amount of tax in dispute arising from the said order, subject to a maximum of twenty-five crore rupees, in relation to which the appeal has been filed. Where any order is challenged demanding penalty without involving demand of any tax, no appeal shall be filed unless ten per cent of the said penalty has been paid.</p>
                <h3>Section 107(11) of CGST Act 2017 - Powers of Appellate Authority</h3>
                <p>The Appellate Authority shall, after making such further inquiry as may be necessary, pass such order, as it thinks just and proper, confirming, modifying or annulling the decision or order appealed against but shall not refer the case back to the adjudicating authority that passed the said decision or order. Critically, GST law does NOT permit remand back to the original adjudicator - this is structurally different from the Income Tax Act framework.</p>
                <h3>Rule 108 of CGST Rules 2017 - Filing Procedure</h3>
                <p>(1) An appeal to the Appellate Authority under sub-section (1) of section 107 shall be filed in FORM GST APL-01, along with the relevant documents, either electronically or otherwise as may be notified by the Commissioner, and a provisional acknowledgement shall be issued to the appellant immediately. (2) The grounds of appeal and the form of verification as contained in FORM GST APL-01 shall be signed in the manner specified in rule 26. (3) The certified copy of the decision or order appealed against shall be submitted within seven days of filing the appeal under sub-rule (1) and a final acknowledgement, indicating appeal number shall be issued thereafter in FORM GST APL-02. Where the certified copy is submitted within seven days of online filing, the date of filing of the appeal shall be the date of issue of the provisional acknowledgement; where submitted after seven days, the date of filing shall be the date of submission of certified copy.</p>
                <h3>Rule 112 of CGST Rules 2017 - Restriction on New Evidence</h3>
                <p>The appellant shall not be allowed to produce before the Appellate Authority or the Appellate Tribunal any evidence, whether oral or documentary, other than the evidence produced by him during the course of the proceedings before the adjudicating authority except in specific circumstances. No evidence shall be admitted unless the Appellate Authority or the Appellate Tribunal records in writing the reasons for its admission. The Appellate Authority or the Appellate Tribunal shall not take any evidence produced under this rule unless the adjudicating authority has been allowed a reasonable opportunity to examine the evidence.</p>
                <h3>CBIC Circular 250/07/2025-GST dated 24 June 2025</h3>
                <p>Specifies the procedure related to review, revision, and appeals for orders passed by the Common Adjudicating Authority (CAA). Clarifies that the Principal Commissioner or Commissioner of Central Tax shall be the Reviewing Authority under Section 107 and the Revisional Authority under Section 108 of the CGST Act 2017. The Circular harmonises Department-side appeal directions across CGST and SGST jurisdictions where common adjudication is involved.</p>
                <h3>Notification S.O. 4220(E) dated 17 September 2025</h3>
                <p>Issued under Section 112(1) of the CGST Act 2017. Specifies the date up to which appeal may be filed before the GST Appellate Tribunal (GSTAT). For orders communicated before 01.04.2026, the appeal may be filed up to 30.06.2026. For orders communicated on or after 01.04.2026, the appeal must be filed within three months from the date of communication of the order. This notification operationalises the GSTAT bridge for backlog matters and is critical for taxpayers with adverse APL-04 Order-in-Appeal received before 01.04.2026.</p>

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
                    <p class="faq-expanded__lead">Common questions about filing Section 107 first appeal against RFD-06 refund rejection - covering procedure, pre-deposit, acknowledgement, hearing, and GSTAT bridge.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Section 107 Appeal',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Section 107 appeal and when can I file it against refund rejection?</h3>
                        <div class="faq-expanded__a"><p>Section 107 of the CGST Act 2017 is the first appellate remedy against any adverse order passed by an adjudicating authority - including Form GST RFD-06 refund rejection. Appeal must be filed in Form GST APL-01 within 3 months from the date of communication of RFD-06; +1 month condonable under Section 107(4) with sufficient cause. The appellate forum is the Appellate Authority - typically Commissioner (Appeals) or designated officer under Rule 109A. Mandatory pre-deposit of 10 percent of disputed tax via Form PMT-06 from Electronic Cash Ledger.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How do I file Form GST APL-01 step-by-step on the portal?</h3>
                        <div class="faq-expanded__a"><p>8-step procedure - Login to gst.gov.in; Navigate Services > User Services > My Applications > Appeal to Appellate Authority > NEW APPLICATION; Select Order Type as Refund Order; Enter Order Number and Date; Verify period and category; Download Annexure to APL-01 template; Populate with statement of facts and grounds; Upload Annexure as PDF (max 5 MB); Enter disputed amount and pre-deposit; Generate PMT-06 challan; Pay from Cash Ledger (NOT Credit Ledger); Submit with DSC or EVC; Capture provisional APL-02; Submit certified copy within 7 days for final APL-02.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the 10 percent pre-deposit and can I use Credit Ledger?</h3>
                        <div class="faq-expanded__a"><p>Section 107(6) mandates pre-deposit of 10 percent of remaining disputed tax (after admitted portion paid in full). Maximum cap historically Rs 25 crore - 53rd GST Council recommended reduction. Pre-deposit MUST be paid from Electronic Cash Ledger via PMT-06 challan; Electronic Credit Ledger CANNOT be used. This is the single most common DIY procedural error - using Credit Ledger results in the appeal being treated as not-admitted. Pre-deposit is refundable with Section 115 interest at 6 percent per annum if appeal succeeds.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">When does the Appellate Authority issue final APL-02 acknowledgement?</h3>
                        <div class="faq-expanded__a"><p>Provisional APL-02 acknowledgement is issued immediately on online APL-01 filing. Final APL-02 with appeal number is issued only after the appellant submits self-certified copy of RFD-06 within 7 days of online filing - per Rule 108(3). Where RFD-06 is portal-uploaded by the Department, no separate certified copy is needed - portal copy suffices for final APL-02 issuance. If certified copy is submitted after 7 days, the date of filing of the appeal shifts to the date of submission of certified copy - potentially pushing limitation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can I withdraw a Section 107 appeal after filing?</h3>
                        <div class="faq-expanded__a"><p>Yes. Per GSTN advisory dated 14 May 2025 and Rule 109C, an appeal can be withdrawn using Form GST APL-01W. Pre-final-APL-02 withdrawal is self-service via portal. Post-final-APL-02 withdrawal requires Appellate Authority approval within 7 days of withdrawal application. Status changes from Appeal submitted to Appeal withdrawn. Maximum two withdrawals per appeal cycle. Re-filing is permitted within Section 107 limitation. Section 128A waiver scheme requires appeal withdrawal first as a precondition.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the Appellate Authority order timeline under Section 107(13)?</h3>
                        <div class="faq-expanded__a"><p>Section 107(13) prescribes an aspirational 1-year disposal - the Appellate Authority shall, where it is possible, decide every appeal within 1 year from filing. In practice, processing typically takes 6 to 18 months depending on case complexity, hearing availability, and backlog. Patron's discipline includes periodic written reminders to the Appellate Authority for delayed appeals; for systemic delays beyond 18 months, an Article 226 writ for direction to dispose within fixed timeframe is considered (Tata Steel Jharkhand HC framework).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the Section 112 GSTAT bridge and when do I use it?</h3>
                        <div class="faq-expanded__a"><p>Section 112 of CGST Act 2017 provides second appeal to the GST Appellate Tribunal (GSTAT) against adverse APL-04 Order-in-Appeal under Section 107 (or revision order under Section 108). Filing is in Form GST APL-05 within 3 months of APL-04 communication; +3 months condonable. Per Notification S.O. 4220(E) dated 17.09.2025 issued under Section 112(1), for orders communicated before 01.04.2026, appeal may be filed up to 30.06.2026 - the backlog window. Additional 10 percent pre-deposit under Section 112(8); cumulative 20 percent. Maximum Rs 20 crore.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I produce new evidence at the Section 107 appeal stage?</h3>
                        <div class="faq-expanded__a"><p>Generally NO. Per Rule 112 of CGST Rules 2017, the appellant shall not produce any new evidence (oral or documentary) before the Appellate Authority other than evidence already produced before the adjudicating authority - except in specific circumstances. Where new evidence is sought, the Appellate Authority must record reasons in writing for admission. The adjudicating authority must be given reasonable opportunity to examine the new evidence. Patron's strategy is to gather all evidence at the RFD-09 reply stage to RFD-08 SCN; rely on existing record at appeal stage.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">Section 107 appeal kaise file karein - kya documents lagte hain aur pre-deposit kitna hai?</h3>
                        <div class="faq-expanded__a"><p>Section 107 appeal RFD-06 rejection ke against 3 mahine ke andar Form GST APL-01 me file karna hota hai. Documents - RFD-06 PDF, Annexure with statement of facts and grounds (max 5 MB PDF), certified copy of RFD-06 (within 7 days), PMT-06 challan for pre-deposit. Pre-deposit 10 percent of disputed tax hota hai - sirf Electronic Cash Ledger se pay karna hai (Credit Ledger se nahi). Filing portal pe Services > User Services > My Applications > Appeal to Appellate Authority se hota hai. Provisional APL-02 turant milti hai; final APL-02 with appeal number 7-day certified copy submission ke baad.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">What if my appeal is rejected at admission stage?</h3>
                        <div class="faq-expanded__a"><p>Where APL-01 is rejected at admission stage (typically due to procedural defects - wrong Order Type selected, wrong pre-deposit, missing certified copy beyond 7 days), the appeal can be re-filed. To re-file - navigate to New Application page; select Order Type and enter Order ID of original application; fill form correctly; submit. Whatever amount was paid (admitted plus pre-deposit) is set off against the demand ID and not lost. Patron's discipline - identify rejection reason from system message; cure procedural defect; re-file within original Section 107 limitation if available.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Statutory provision?</strong> Section 107 of CGST Act 2017 read with Rule 108 of CGST Rules 2017.</li>
                    <li><strong>Form?</strong> Form GST APL-01 plus Annexure with statement of facts and grounds.</li>
                    <li><strong>Limitation?</strong> 3 months from RFD-06 communication; +1 month condonable under Section 107(4).</li>
                    <li><strong>Pre-deposit?</strong> 10 percent of disputed tax via PMT-06 from Cash Ledger only.</li>
                    <li><strong>Acknowledgement?</strong> Provisional APL-02 immediately; final APL-02 after 7-day certified copy submission.</li>
                    <li><strong>Order-in-Appeal?</strong> Form APL-04; aspirational 1 year under Section 107(13).</li>
                    <li><strong>Bridge to GSTAT?</strong> Section 112 in Form APL-05; backlog window 30.06.2026 per Notification S.O. 4220(E).</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 107 Statutory Deadlines You Cannot Miss</h2>
            <div class="content-text">
                
                <p>Section 107-related deadlines run off the RFD-06 communication clock. Missing any of the following deadlines can permanently extinguish your refund recovery rights:</p>
                <ul>
                    <li><strong>Section 107(1) appeal limitation</strong> - within 3 months of RFD-06 communication; statutory bar after lapse; +1 month condonable under Section 107(4)</li>
                    <li><strong>Section 107(4) condonation window</strong> - beyond 3 months with sufficient cause; +1 month maximum; beyond 4 months only Article 226 writ remedy survives</li>
                    <li><strong>Pre-deposit payment</strong> - must be paid before APL-01 submission; APL-02 will not issue without pre-deposit</li>
                    <li><strong>7-day certified copy submission</strong> - within 7 days of online APL-01 filing; date of filing shifts if missed and potentially affects limitation</li>
                    <li><strong>APL-01W withdrawal post final APL-02</strong> - withdrawal application within 7 days of decision; Appellate Authority approval required</li>
                    <li><strong>Section 112 GSTAT appeal</strong> - within 3 months of APL-04 communication; +3 months condonable; backlog window 30.06.2026 for pre-01.04.2026 orders per Notification S.O. 4220(E)</li>
                    <li><strong>Section 128A waiver scheme</strong> - requires appeal withdrawal first as precondition; withdrawal status screenshot needed for waiver application</li>
                </ul>
                <p><strong>Engage Patron Accounting within 7 days of RFD-06 receipt for full buffer on grounds analysis, pre-deposit funding, Annexure drafting, and 7-day certified copy discipline. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20Appeal%20Section%20107%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us now</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron's Section 107 Appeal Team</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">Section 107 of the Central Goods and Services Tax Act 2017 is the foundational appellate remedy against an adverse Form GST RFD-06 refund rejection order. The appeal lies before the Appellate Authority - typically Commissioner (Appeals) or designated officer under Rule 109A - and must be filed in Form GST APL-01 with Annexure within 3 months of RFD-06 communication, condonable by +1 month under Section 107(4) with sufficient cause. Mandatory pre-deposit of 10 percent of remaining disputed tax under Section 107(6) is paid via Form PMT-06 challan from the Electronic Cash Ledger only - the Electronic Credit Ledger cannot be used and is the single most common DIY procedural error.</p>
                <p style="color:rgba(255,255,255,0.92);">Filing follows an 8-step GST portal procedure with provisional APL-02 acknowledgement issued immediately and final APL-02 issued only after self-certified copy of RFD-06 is submitted within 7 days per Rule 108(3). The hearing is conducted with up to 3 adjournments under Section 107(8), with restriction on production of new evidence under Rule 112. The Appellate Authority has powers under Section 107(11) to confirm, modify, or annul the order - critically, GST law does not permit remand back to the original adjudicator. The order is summarised in Form APL-04 with an aspirational 1-year disposal under Section 107(13). Where APL-04 is also adverse, Section 112 second appeal lies before GSTAT in Form APL-05; for backlog matters Notification S.O. 4220(E) dated 17.09.2025 extends the filing window to 30.06.2026.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP brings 15+ years of GST refund litigation experience with 200+ refund litigation matters handled across pharma, IT services, engineering, textile, electronics, and chemical sectors with four physical offices in Pune, Mumbai, Delhi, and Gurugram. Aggrieved taxpayers gain CA-led same-day appeal viability assessment, 8-step APL-01 portal filing with first-time admission rate above 95 percent, Cash Ledger pre-deposit discipline preventing the most common DIY error, hearing representation with Section 107(8) adjournment management, and end-to-end APL-04 to bank credit recovery including Section 56 interest where adjudication delay occurred.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20Appeal%20Section%20107%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Section%20107%20Appeal%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Section%20107%20appeal%20services%20against%20Form%20GST%20RFD-06%20refund%20rejection%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Related GST Litigation and Appeal Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end GST refund litigation support - from RFD-06 first appeal through to GSTAT Section 112 bridge.</p>
            <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for GST Refund Appeal Section 107</div>
                    <div class="pa-cross-grid">
                        <a href="/gst-refund" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Refund</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gstat-appeal-filing" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal Filing</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gstat-pre-deposit-calculation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Pre-Deposit Calculation</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gstat-cross-objection-filing" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Cross Objection Filing</div><div class="pa-card-sub">India</div></div></a>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 8 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team · Patron Accounting LLP</p>
            <p>Reviewed every 6 months under Tier 2 freshness cycle. Triggers for earlier review: any new HC or SC ruling on Section 107 procedure, pre-deposit cap changes per 53rd GST Council recommendation, GSTAT operationalisation milestones, APL-01W procedural updates, and CBIC circulars on Reviewing Authority designation.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
@include('layouts.itr-season-strip')


</main>




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


<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
