
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Auditor Rotation India: Sec 139</title>
    <meta name="description" content="Audit rotation guide under Sec 139(2) - applicability thresholds, cooling-off period, network firm restrictions, transition process, Patron's rotation playbook.">
    <link rel="canonical" href="/audit-rotation-transition-india">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Auditor Rotation India 2026: Sec 139 | Patron Accounting">
    <meta property="og:description" content="Audit rotation guide under Sec 139(2) - applicability thresholds, cooling-off period, network firm restrictions, transition process, Patron's rotation playbook.">
    <meta property="og:url" content="/audit-rotation-transition-india">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Auditor Rotation India 2026: Sec 139 | Patron Accounting">
    <meta name="twitter:description" content="Audit rotation guide under Sec 139(2) - applicability thresholds, cooling-off period, network firm restrictions, transition process, Patron's rotation playbook.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/audit-rotation-transition-india#breadcrumb",
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
          "name": "Statutory Audit",
          "item": "https://www.patronaccounting.com/statutory-audit"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Audit Rotation Transition India",
          "item": "https://www.patronaccounting.com/audit-rotation-transition-india"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/audit-rotation-transition-india#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is auditor rotation under Section 139(2)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Auditor rotation under Section 139(2) of the Companies Act, 2013 is the MANDATORY change of statutory auditor required for listed companies and prescribed classes of companies after a fixed term - one term of 5 consecutive years for an individual auditor, two terms of 5 consecutive years (10 years total) for an audit firm. The outgoing auditor must complete a 5-year cooling-off period before being re-appointed in the same company. The categories of companies covered are prescribed under Rule 5 of the Companies (Audit and Auditors) Rules, 2014 - listed companies, unlisted public (Rs 10 crore plus paid-up), Pvt Ltd (Rs 20 crore plus paid-up), and companies with Rs 50 crore plus borrowings or public deposits."
          }
        },
        {
          "@type": "Question",
          "name": "Which companies are required to rotate auditors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Rule 5 of the Companies (Audit and Auditors) Rules, 2014, the following classes of companies are required to rotate auditors under Section 139(2) - (a) all listed companies (no threshold); (b) all unlisted public companies with paid-up share capital of Rs 10 crore or more; (c) all private limited companies with paid-up share capital of Rs 20 crore or more; (d) all companies (other than the foregoing) with public borrowings from financial institutions or banks, or public deposits of Rs 50 crore or more. One Person Company (OPC) under Section 2(62) and Small Company under Section 2(85) are EXEMPT from Section 139(2) rotation."
          }
        },
        {
          "@type": "Question",
          "name": "What is the rotation period for individual vs firm auditors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The rotation periods are different - an individual auditor can be appointed or re-appointed for a maximum of ONE term of 5 consecutive years under Section 139(2)(a); an audit firm can be appointed or re-appointed for a maximum of TWO terms of 5 consecutive years (i.e. 10 years total) under Section 139(2)(b). The difference reflects the fact that an audit firm has multiple partners who can be rotated within the firm, providing partial freshness even when the firm continues - whereas an individual auditor has no such partner rotation option."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cooling-off period for auditors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under the First Proviso to Section 139(2), the outgoing auditor (individual or firm) cannot be re-appointed in the SAME company for 5 years from completion of the maximum term (5 years for individual; 10 years for firm). The cooling-off applies even where the auditor resigned mid-term if cumulative service approached or completed 5 / 10 years. The cooling-off restriction is company-specific - the outgoing auditor can audit other companies (including other group companies) during the cooling-off period; only the specific company where the term was completed is restricted. Internal audit, tax audit, or other non-statutory engagements with the same company are NOT prohibited during cooling-off per ICAI guidance."
          }
        },
        {
          "@type": "Question",
          "name": "What is the network firm restriction?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Second Proviso to Section 139(2) and Rule 6(3) provide that the incoming audit firm cannot share name, trademark, or brand with the outgoing audit firm; cannot have a common partner with the outgoing firm; and a partner of the outgoing firm who certified the financial statements moving to another firm makes that other firm ineligible for 5 years. ICAI Code of Ethics interprets network firms broadly - firms under common control, common framework, or shared resources may be considered networked. For Big-Four global affiliations, member firms (KPMG India, Deloitte India, EY India, PwC India) are member firms of separate global networks - cross-rotation between Big-Four firms requires specific independence assessment."
          }
        },
        {
          "@type": "Question",
          "name": "What is the process for auditor transition?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The process is multi-stage. Six months before year-end - rotation applicability test under Rule 5; Audit Committee briefing under Section 177(4)(vii); candidate auditor identification (3-5 firms). Five to four months before year-end - candidate evaluation (independence, network firm test, common partner test, fee proposals); Audit Committee recommendation to Board; Board approval. AGM (within 9 months of year-end) - shareholders appoint incoming auditor by ordinary resolution under Section 139(1) for 5-year term. Within 15 days of AGM - ADT-1 filed by company. Within 30 days of cessation (if outgoing auditor resigned) - Section 140(2) statement filed in Form ADT-3. Engagement letter under SA 210; SA 510 onboarding fieldwork begins."
          }
        },
        {
          "@type": "Question",
          "name": "What is SA 510 opening balance verification by new auditor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard on Auditing 510 Initial Audit Engagements - Opening Balances applies to the incoming auditor in a rotation transition. Since the prior period was audited by the predecessor auditor, the engagement is a Type (b) initial audit engagement. Procedures - read the predecessor's audit report (opinion type, modifications, KAM if any, EoM); confirm opening balances correctly brought forward from predecessor's closing balances; evaluate consistency of accounting policies; coordinate with predecessor for working file access where granted under ICAI inter-firm guidance. Where SAAE on opening balances cannot be obtained, the incoming auditor may need to modify the audit opinion (qualified if not pervasive, disclaimer if pervasive)."
          }
        },
        {
          "@type": "Question",
          "name": "What should companies look for when selecting a new auditor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's six-point evaluation framework - (1) ICAI registration and peer review status; partner CoP status; NFRA registration for listed entities; Section 141 disqualification check; (2) Industry and size match - audit firm's experience in the company's industry and the firm's size match for the company's audit complexity; (3) Network firm and common partner test - no shared name / trademark / brand with outgoing firm; no common partner in past 5 years; (4) Section 144 prohibited services - candidate firm not providing accounting / internal audit / IS design / actuarial / investment advisory / management services; (5) Partner engagement continuity - same audit partner across the 5-year term subject to ICAI partner-rotation interpretation; (6) Fee proposal and scope clarity - transparent Year-1 onboarding premium and Year-2-onwards steady-state."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/audit-rotation-transition-india#service",
      "name": "Audit Rotation Transition Onboarding Under Section 139(2)",
      "description": "Rotation transition onboarding service for listed companies and prescribed classes of unlisted public, private limited, and large-borrowing companies completing the 5-year (individual) or 10-year (firm) auditor term under Section 139(2) of the Companies Act, 2013. Patron's seven-step playbook covers Rule 5 applicability testing, Audit Committee Section 177(4)(vii) recommendation drafting, candidate evaluation with Section 141 independence and network firm/common partner checks, AGM appointment with ADT-1 filing, Section 140(2) outgoing auditor coordination with ADT-3, SA 510 Type (b) opening balance procedures, and the first-year audit with CARO Clause 3(xviii) substantive reporting.",
      "serviceType": "Audit Rotation Transition and First-Year-of-Engagement Onboarding",
      "provider": {
        "@id": "https://www.patronaccounting.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "India",
        "sameAs": "https://en.wikipedia.org/wiki/India"
      },
      "about": [
        {
          "@type": "Thing",
          "name": "Auditor independence",
          "sameAs": "https://en.wikipedia.org/wiki/Auditor_independence"
        },
        {
          "@type": "Thing",
          "name": "Companies Act 2013",
          "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
        },
        {
          "@type": "Thing",
          "name": "Audit committee",
          "sameAs": "https://en.wikipedia.org/wiki/Audit_committee"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Rotation Transition Engagement Plans (India)",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "Listed Entity Year-1 Rotation (Section 139(2) Primary)",
            "price": "3000000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "https://www.patronaccounting.com/audit-rotation-transition-india"
          },
          {
            "@type": "Offer",
            "name": "Unlisted Public Rs 10 cr+ Year-1 Rotation",
            "price": "550000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "https://www.patronaccounting.com/audit-rotation-transition-india"
          },
          {
            "@type": "Offer",
            "name": "Pvt Ltd Rs 20 cr+ Year-1 Rotation",
            "price": "450000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "https://www.patronaccounting.com/audit-rotation-transition-india"
          },
          {
            "@type": "Offer",
            "name": "NBFC Year-1 Rotation Under Section 139(2)",
            "price": "750000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "https://www.patronaccounting.com/audit-rotation-transition-india"
          }
        ]
      }
    }
  ]
}
</script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-4.css') }}?v=1">
@endpush
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
                        Audit Rotation and Transition Under Section 139(2) for 2026
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Authority:</span> Section 139(2) Companies Act 2013 + Rule 5 and Rule 6 Companies (Audit and Auditors) Rules 2014</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Term Limits:</span> Individual auditor 1 term (5 years); Audit firm 2 terms (10 years total); 5-year cooling-off</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applicability:</span> Listed (no threshold), unlisted public Rs 10 cr+, Pvt Ltd Rs 20 cr+, Rs 50 cr+ borrowings; OPC and Small Co EXEMPT</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Coverage:</span> Rotation process, SA 510 onboarding, Section 140(2) outgoing exit, ADT-1/ADT-3 filings</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Section%20139%282%29%20Rotation%20Onboarding&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AOur%20auditor%27s%20term%20is%20ending%20under%20Section%20139%282%29%20and%20we%20need%20a%20rotation%20transition%20engagement.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Audit%20Rotation%20Transition%20India%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Audit Rotation Transition India',
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
    'ctaText'    => 'Free initial consultation on rotation applicability and timeline - in-person at any Patron office, by phone or video.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is Rotation</a>
            <a href="#who-section" class="toc-btn">Who Should Reference</a>
            <a href="#services-section" class="toc-btn">Patron Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documentation</a>
            <a href="#challenges-section" class="toc-btn">Cooling-Off Cases</a>
            <a href="#fees-section" class="toc-btn">Engagement Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Big-4/Mid-Tier/Patron</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Audit Rotation Under Section 139(2) - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Audit Rotation Transition India Services at a Glance</strong></p>
                    <p>Audit rotation under Section 139(2) of the Companies Act, 2013 is the MANDATORY change of auditor required for listed companies and prescribed classes of companies after a fixed term - one term of 5 consecutive years for individual auditors, two terms of 5 consecutive years (i.e. 10 years total) for audit firms. The categories prescribed under Rule 5 of the Companies (Audit and Auditors) Rules, 2014: all listed companies; unlisted public companies with paid-up Rs 10 crore or more; private limited companies with paid-up Rs 20 crore or more; all other companies with public borrowings or public deposits of Rs 50 crore or more. OPC and small companies are exempt. A 5-year cooling-off period applies before re-appointment. Network firm restriction - incoming firm cannot share name, trademark, or brand with outgoing firm. Common partner restriction - 5 years ineligibility.</p>
                </div>
                <p>Section 139(2) was one of the most significant innovations of the Companies Act, 2013 - introducing mandatory auditor rotation for the first time in Indian corporate law. The Companies Act, 1956 had no equivalent provision - auditors were appointed annually at each AGM with no fixed-term concept. The 5-year fixed term under Section 139(1) and the rotation requirement under Section 139(2) together address two long-standing concerns about auditor independence - the annual-appointment dependency (which gave management leverage over the auditor) and the long-tenure familiarity threat (which eroded professional skepticism over time).</p>
                <div class="table-responsive-wrapper" style="margin-top:24px;margin-bottom:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Individual Auditor Term Limit</td><td>One term of 5 consecutive years (Section 139(2)(a))</td></tr>
                        <tr><td>Audit Firm Term Limit</td><td>Two terms of 5 consecutive years - 10 years total (Section 139(2)(b))</td></tr>
                        <tr><td>Cooling-Off Period</td><td>5 years from end of term before re-appointment in same company (First Proviso to Section 139(2))</td></tr>
                        <tr><td>Network Firm Restriction</td><td>Incoming firm cannot share name, trademark, or brand with outgoing firm (Rule 6(3) Note 1; ICAI Code of Ethics)</td></tr>
                        <tr><td>Common Partner Restriction</td><td>Audit firm with common partners as outgoing firm ineligible for 5 years (Second Proviso to Section 139(2))</td></tr>
                        <tr><td>Rotation Applicability</td><td>Listed + unlisted public (Rs 10 cr+ paid-up) + Pvt Ltd (Rs 20 cr+ paid-up) + all companies (Rs 50 cr+ borrowings / public deposits); OPC and Small Company EXEMPT</td></tr>
                        <tr><td>Audit Committee Role</td><td>Section 177(4)(vii) - rotation recommendation; Board reviews; AGM shareholders approve</td></tr>
                        <tr><td>Outgoing Auditor Filing</td><td>Section 140(2) statement to ROC within 30 days of cessation (where resignation); Form ADT-3</td></tr>
                    </tbody>
                </table>
                </div>
                <p>For companies in the rotation cycle, the transition is operationally significant - the incoming auditor must perform SA 510 Initial Audit Engagement procedures on opening balances; the outgoing auditor must file Section 140(2) statement to ROC within 30 days of cessation; the Audit Committee under Section 177(4)(vii) must recommend the new auditor; the Board must approve; the AGM must appoint.</p>
                <p>The first wave of mandatory rotation under Section 139(2) was at the 2017 AGM (for companies that had completed the moratorium period of 3 years from 1 April 2014 commencement); subsequent waves are now ongoing as companies cross successive 5-year and 10-year boundaries. The cooling-off period of 5 years and the network firm restrictions (shared name / trademark / brand; common partner in past 5 years) constrain the universe of available auditors - making advance planning essential. The first year of incoming engagement typically requires 25 to 40 percent more time than a steady-state audit due to SA 510 Initial Audit Engagement procedures, SA 315 knowledge build-up, control environment understanding, and CARO 2020 Clause 3(xviii) coordination with the outgoing auditor.</p>
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
                <h2 class="section-title">What Is Audit Rotation Under Section 139(2)?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Audit rotation under Section 139(2)</strong> of the Companies Act, 2013 is the MANDATORY change of statutory auditor required for listed companies and prescribed classes of companies after a fixed term - <strong>one term of 5 consecutive years for an individual auditor</strong> and <strong>two terms of 5 consecutive years (10 years total) for an audit firm.</strong> The outgoing auditor must complete the cooling-off period of 5 years before being re-appointed in the same company.</p>
<p>The categories of companies covered are prescribed under <strong>Rule 5 of the Companies (Audit and Auditors) Rules, 2014:</strong> all listed companies (no threshold), all unlisted public companies with paid-up share capital of Rs 10 crore or more, all private limited companies with paid-up share capital of Rs 20 crore or more, and all companies with public borrowings from financial institutions or banks, or public deposits of Rs 50 crore or more. <strong>OPC under Section 2(62) and Small Company under Section 2(85) are exempt</strong> from Section 139(2) rotation - the requirement focuses on companies of significant economic size where auditor independence is a public-interest concern.</p>
<p>Section 139(2) is distinct from Section 139(1) (regular 5-year appointment for all companies) and from Section 140 (voluntary removal or resignation of auditor). Section 139(1) requires every company (with limited exceptions) to appoint its auditor at the AGM for a fixed 5-year term; Section 139(2) ADDS the rotation requirement on top of Section 139(1) for specified categories. Section 140 is a different procedure entirely - voluntary removal during the term requires Central Government approval and special resolution; voluntary resignation by the auditor requires Section 140(2) statement to ROC.</p>
<p>Mandatory rotation under Section 139(2) is <strong>automatic at the end of the term</strong> - no Central Government approval; no special resolution; just the natural completion of the term with the incoming auditor appointed at the AGM.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Audit Rotation Transition India:</strong></p>
                    <p><strong>Term (Section 139(2)):</strong> A period of 5 consecutive years for which an auditor is appointed under Section 139(1). One term applies to an individual auditor; two terms (10 years) apply to an audit firm.</p>
<p><strong>Cooling-Off Period:</strong> 5 years from the completion of the term during which the outgoing auditor (individual or firm) cannot be re-appointed in the same company. First Proviso to Section 139(2).</p>
<p><strong>Network Firm:</strong> Audit firms that share name, trademark, or brand; or are under common control; or have a common partner; or are managed under a common framework. Rule 6(3) Note 1 and ICAI Code of Ethics interpretation.</p>
<p><strong>Common Partner Restriction:</strong> Where the incoming and outgoing audit firms share a common partner, the incoming firm is ineligible for appointment for 5 years from the end of the outgoing firm's term. Second Proviso to Section 139(2).</p>
<p><strong>Audit Committee (Section 177(4)(vii)):</strong> For companies required to constitute an Audit Committee under Section 177, the Committee recommends the appointment, removal, or rotation of statutory auditors to the Board.</p>
<p><strong>Section 140(2) Statement:</strong> The outgoing auditor's mandatory written statement to the Registrar of Companies within 30 days of cessation - stating the reasons and any other facts relating to the resignation. Filed in Form ADT-3.</p>
<p><strong>SA 510 (Incoming Auditor):</strong> Standard on Auditing 510 Initial Audit Engagements - Opening Balances. The incoming auditor must obtain sufficient appropriate audit evidence on opening balances; rotation engagements are Type (b) initial engagements (prior period audited by predecessor).</p>
<p><strong>Pre-Commencement Period (Rule 6(3)):</strong> The period for which an individual auditor or audit firm held office BEFORE the commencement of Section 139 (i.e. before 1 April 2014) shall be taken into account for calculating the 5-year or 10-year term limit.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Audit Rotation Transition India</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 139(2)</span>
                        <strong>Auditor Rotation Authority</strong>
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
            <h2 class="section-title">Who Should Reference This Authority Page?</h2>
            <div class="content-text">
                
                <p>This operational authority page on audit rotation under Section 139(2) is the practitioner reference for the following readers:</p>
<ul>
    <li><strong>Listed-entity CFOs and Audit Committee Chairs</strong> managing Section 139(2) primary applicability and Audit Committee Section 177(4)(vii) recommendation drafting</li>
    <li><strong>Large unlisted public company CFOs</strong> (paid-up Rs 10 crore or more) crossing the rotation threshold for the first time</li>
    <li><strong>Large private limited company CFOs</strong> (paid-up Rs 20 crore or more, or with Rs 50 crore+ borrowings/public deposits) preparing for first mandatory rotation</li>
    <li><strong>NBFC CFOs</strong> preparing for first rotation cycle with additional RBI scrutiny on auditor changes</li>
    <li><strong>Family-business-group CFOs</strong> planning auditor rotation across multiple group entities sequentially to avoid auditor pipeline shortage</li>
    <li><strong>Company secretaries</strong> managing the rotation timeline - 6-month-ahead planning, ADT-1 filing within 15 days, ADT-3 filing within 30 days</li>
    <li><strong>Audit Committee members</strong> reviewing candidate auditor independence under Section 141 and network firm restrictions</li>
    <li><strong>Incoming auditor partners</strong> reviewing potential first-year engagement under SA 510 Initial Audit Engagement procedures</li>
    <li>Anyone needing the <strong>Rule 5 applicability decision tree</strong> and term-counting under Rule 6(3) pre-commencement counting</li>
    <li>Anyone managing <strong>predecessor coordination under ICAI inter-firm guidance</strong> and CARO 2020 Clause 3(xviii) reporting on auditor resignation</li>
</ul>
<h3 style="margin-top:24px;">Statutory Snapshot for Section 139(2) Rotation</h3>
<ul>
    <li><strong>Section 139(2)(a):</strong> Individual auditor - max 1 term of 5 consecutive years</li>
    <li><strong>Section 139(2)(b):</strong> Audit firm - max 2 terms of 5 consecutive years (10 years total)</li>
    <li><strong>First Proviso to Section 139(2):</strong> 5-year cooling-off period before re-appointment in same company</li>
    <li><strong>Second Proviso to Section 139(2):</strong> Common partner restriction - 5 years ineligibility</li>
    <li><strong>Third Proviso to Section 139(2):</strong> 3-year moratorium for companies existing on 1 April 2014 commencement</li>
    <li><strong>Section 140(2):</strong> Outgoing auditor's statement to ROC within 30 days of cessation - Form ADT-3</li>
    <li><strong>Section 147 Penalty:</strong> Rs 25,000 to Rs 5,00,000 on company; Rs 10,000 to Rs 1,00,000 on officer in default for contravention</li>
    <li><strong>SA 510:</strong> Initial Audit Engagement opening balance procedures by incoming auditor</li>
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
            <h2 class="section-title">Patron's Rotation Transition Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Rotation Applicability Assessment</td><td>Patron evaluates whether Section 139(2) rotation applies to the company - tested at each year-end. For companies near threshold (paid-up moving from Rs 18 cr to Rs 22 cr; or borrowings moving from Rs 45 cr to Rs 55 cr), Patron flags upcoming rotation applicability with advance planning window. Many companies miss the rotation applicability test when newly crossing thresholds - Patron's annual compliance dashboard catches this.</td></tr>
<tr><td>Pre-Rotation Planning Six Months Before Year-End</td><td>Patron initiates rotation planning 6 months before year-end - Audit Committee briefing on the rotation requirement, candidate auditor identification, candidate evaluation framework (independence test under Section 141, capability assessment, fee proposal, references), short-list to the Board, recommendation to AGM. Adequate planning prevents the last-minute rotation that frequently triggers SA 510 quality issues.</td></tr>
<tr><td>Audit Committee Section 177(4)(vii) Recommendation Drafting</td><td>For companies required to constitute Audit Committee, Patron supports the Section 177(4)(vii) recommendation - drafting Audit Committee minutes recording the rotation requirement, candidate evaluation, and recommendation to the Board with specific reasons. The recommendation must be substantive (not boilerplate) to withstand NFRA review and lender / investor diligence.</td></tr>
<tr><td>Outgoing Auditor Coordination Under Section 140(2)</td><td>Where Patron is the incoming auditor, Patron requests outgoing auditor's cooperation - access to predecessor working files (under ICAI inter-firm guidance), Section 140(2) statement copy, exit findings, identified material weaknesses, ongoing CARO clauses, IFC deficiencies. Where Patron is the outgoing auditor, Patron files Section 140(2) statement with substantive content.</td></tr>
<tr><td>Incoming Auditor SA 510 Opening Balance Procedures</td><td>Patron applies SA 510 Type (b) procedures - prior period audited by predecessor. Read predecessor's audit report (opinion type, modifications, KAM, EoM); confirm opening balances correctly brought forward; evaluate accounting policy consistency; coordinate with predecessor for working file access where granted; document the SA 510 working paper before substantive testing begins.</td></tr>
<tr><td>Independence Verification Under Section 141 and 144</td><td>Patron confirms independence at engagement letter stage - no Section 141 disqualification (officer/employee, indebtedness, business relationship, security holding, conviction for fraud); no network firm restriction; no common partner in past 5 years; Section 144 prohibited services not provided.</td></tr>
<tr><td>First Year of Incoming Engagement - Full Audit Cycle</td><td>The first year requires approximately 25 to 40 percent more time than a steady-state audit due to SA 510 procedures, knowledge build-up under SA 315, control environment understanding, related party identification under SA 550, and CARO/IFC walkthrough. Patron's first-year-of-rotation fee structure reflects this complexity transparently.</td></tr>
<tr><td>CARO Clause 3(xviii) Reporting Coordination</td><td>CARO 2020 Clause 3(xviii) requires reporting whether there has been any resignation of statutory auditors during the year, AND whether the auditor has taken into consideration the issues, objections or concerns raised by the outgoing auditors. Where Patron is incoming, this clause is engaged in the first year - Patron coordinates with the outgoing auditor's Section 140(2) statement.</td></tr>
<tr><td>ADT-1 and ADT-3 Filing Coordination</td><td>ADT-1 filed by company within 15 days of incoming auditor's appointment under Rule 4 of the Companies (Audit and Auditors) Rules 2014; ADT-3 filed by outgoing auditor within 30 days of cessation where resignation occurred. Patron coordinates both filings with the company secretary.</td></tr>

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
            <h2 class="section-title">Patron's 7-Step Rotation Transition Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From rotation applicability test (six months before year-end) through AGM appointment, Section 140(2) outgoing exit, and SA 510 incoming auditor onboarding. Six-month-ahead planning prevents last-minute SA 510 quality issues.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Rotation Applicability Test (Six Months Before Year-End)</h3>
        <p class="step-description">Patron tests Rule 5 applicability: is the company listed; is it unlisted public with paid-up Rs 10 cr+; is it Pvt Ltd with paid-up Rs 20 cr+; or does it have borrowings/public deposits Rs 50 cr+? Tests count of consecutive years for incumbent auditor including pre-1 April 2014 service under Rule 6(3). Conclusion: does rotation apply; if yes, when does the term expire; what is the cooling-off implication for outgoing auditor.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 5 thresholds</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 6(3) pre-2014 counting</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Term-end calculation</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="30" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RULE 5 TEST</text>
<rect x="25" y="40" width="30" height="14" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="40" y="50" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">LISTED</text>
<rect x="65" y="40" width="30" height="14" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="80" y="50" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Rs10cr+</text>
<rect x="25" y="60" width="30" height="14" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="40" y="70" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Rs20cr+</text>
<rect x="65" y="60" width="30" height="14" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="80" y="70" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Rs50cr+</text>
                </svg>
            </div>
            <span class="illustration-label">Applicability Tested</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Audit Committee Briefing and Candidate Identification</h3>
        <p class="step-description">Audit Committee under Section 177(4)(vii) is briefed on the rotation requirement. Candidate auditor identification: 3 to 5 candidate firms identified based on capability match (industry experience, audit team size, ICAI peer-review status, NFRA registration where applicable, listed-entity audit experience). Network firm and common partner checks performed at this stage.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 177(4)(vii) briefing</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3-5 candidate firms</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Network firm screen</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="90" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<rect x="25" y="30" width="70" height="6" rx="2" fill="#F5A623"/>
<line x1="25" y1="42" x2="85" y2="42" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<line x1="25" y1="50" x2="80" y2="50" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<line x1="25" y1="58" x2="83" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<line x1="25" y1="66" x2="75" y2="66" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<circle cx="30" cy="85" r="5" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<circle cx="46" cy="85" r="5" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<circle cx="62" cy="85" r="5" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<circle cx="78" cy="85" r="5" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
                </svg>
            </div>
            <span class="illustration-label">Candidates Identified</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Candidate Evaluation and Section 141 Independence Verification</h3>
        <p class="step-description">Each candidate is evaluated: independence under Section 141 (no officer/employee, no indebtedness above prescribed limit, no business relationship); no Section 144 prohibited services; no network firm restriction with outgoing firm; no common partner in past 5 years. Engagement letter, fee proposal, scope discussion, references from comparable engagements.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 141 disqualification check</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 144 prohibited services</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Common partner 5-year test</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="40" height="55" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
<text x="35" y="33" font-size="8" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">CAND A</text>
<line x1="20" y1="43" x2="50" y2="43" stroke="#10B981" stroke-width="0.8" opacity="0.5"/>
<line x1="20" y1="51" x2="48" y2="51" stroke="#10B981" stroke-width="0.8" opacity="0.5"/>
<line x1="20" y1="59" x2="46" y2="59" stroke="#10B981" stroke-width="0.8" opacity="0.5"/>
<rect x="65" y="20" width="40" height="55" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
<text x="85" y="33" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">CAND B</text>
<line x1="70" y1="43" x2="100" y2="43" stroke="#E8712C" stroke-width="0.8" opacity="0.5"/>
<line x1="70" y1="51" x2="98" y2="51" stroke="#E8712C" stroke-width="0.8" opacity="0.5"/>
<line x1="70" y1="59" x2="96" y2="59" stroke="#E8712C" stroke-width="0.8" opacity="0.5"/>
<path d="M55 50 L65 50" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Candidates Evaluated</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Audit Committee Recommendation to Board</h3>
        <p class="step-description">Audit Committee Section 177(4)(vii) recommendation to Board - substantive minutes recording the rotation requirement, candidate evaluation, recommendation with specific reasons. Board considers; if Board disagrees, refers back to Audit Committee with reasons; if Audit Committee maintains its recommendation and Board still disagrees, the matter goes to the AGM with both views for shareholder decision.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Substantive AC minutes</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board approval path</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Disagreement escalation</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="18" y="15" width="84" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="32" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AC MINUTES</text>
<line x1="28" y1="42" x2="92" y2="42" stroke="#F5A623" stroke-width="2"/>
<line x1="28" y1="52" x2="88" y2="52" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<line x1="28" y1="60" x2="85" y2="60" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<line x1="28" y1="68" x2="90" y2="68" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<rect x="28" y="78" width="64" height="12" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="60" y="86" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SEC 177(4)(vii)</text>
                </svg>
            </div>
            <span class="illustration-label">AC Recommendation</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">AGM Appointment and ADT-1 Filing</h3>
        <p class="step-description">Shareholders appoint the incoming auditor at the AGM under Section 139(1) for a 5-year term by ordinary resolution. The incoming auditor's consent letter, independence certificate under Section 141, and eligibility certificate are placed before the AGM. ADT-1 is filed with ROC within 15 days of appointment by the company under Rule 4 of the Companies (Audit and Auditors) Rules 2014.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 139(1) 5-year term</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 141 certificate</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ADT-1 within 15 days</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="90" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="34" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AGM</text>
<circle cx="35" cy="55" r="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<circle cx="48" cy="55" r="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<circle cx="61" cy="55" r="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<circle cx="74" cy="55" r="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<circle cx="87" cy="55" r="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<rect x="40" y="84" width="40" height="10" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
<text x="60" y="91" font-size="7" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">ADT-1 FILED</text>
                </svg>
            </div>
            <span class="illustration-label">AGM + ADT-1</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Outgoing Auditor Exit Under Section 140</h3>
        <p class="step-description">Outgoing auditor's term ends at conclusion of AGM at which incoming auditor is appointed. Where the outgoing auditor's term expired naturally (rotation at end of 5/10 years), no formal resignation is required. Where the outgoing auditor resigned before term completion to enable rotation timing, Section 140(2) statement is filed with ROC within 30 days in Form ADT-3 with substantive reasons.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Natural term-end exit</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ADT-3 within 30 days</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 140(2) statement</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="40" height="70" rx="4" fill="#FFE0E0" stroke="#FD6B6D" stroke-width="1.5"/>
<text x="35" y="32" font-size="8" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">OUTGOING</text>
<line x1="22" y1="40" x2="48" y2="40" stroke="#FD6B6D" stroke-width="0.8" opacity="0.5"/>
<line x1="22" y1="48" x2="46" y2="48" stroke="#FD6B6D" stroke-width="0.8" opacity="0.5"/>
<line x1="22" y1="56" x2="44" y2="56" stroke="#FD6B6D" stroke-width="0.8" opacity="0.5"/>
<rect x="22" y="68" width="26" height="10" rx="2" fill="#FFFFFF" stroke="#FD6B6D" stroke-width="0.8"/>
<text x="35" y="75" font-size="6" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">ADT-3</text>
<path d="M58 50 L70 50 M65 45 L70 50 L65 55" stroke="#14365F" stroke-width="2" fill="none" stroke-linecap="round"/>
<rect x="73" y="15" width="32" height="70" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
<text x="89" y="32" font-size="8" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">INCOMING</text>
<line x1="78" y1="40" x2="100" y2="40" stroke="#10B981" stroke-width="0.8" opacity="0.5"/>
<line x1="78" y1="48" x2="98" y2="48" stroke="#10B981" stroke-width="0.8" opacity="0.5"/>
                </svg>
            </div>
            <span class="illustration-label">Outgoing Exit</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Incoming Auditor SA 510 Onboarding and First-Year Audit</h3>
        <p class="step-description">Incoming auditor performs SA 510 Type (b) procedures: read predecessor's audit report; confirm opening balances correctly brought forward; evaluate accounting policy consistency; coordinate with predecessor for working file access; document SA 510 working paper. First-year audit includes additional SA 315 understanding, SA 550 related party identification, SA 600 component coordination for groups - front-loaded due to incoming auditor's first exposure.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 510 Type (b) procedures</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Predecessor coordination</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CARO 3(xviii) reporting</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="32" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SA 510</text>
<line x1="25" y1="42" x2="95" y2="42" stroke="#F5A623" stroke-width="2"/>
<rect x="28" y="52" width="30" height="10" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="43" y="59" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">OPENING</text>
<rect x="62" y="52" width="30" height="10" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="77" y="59" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">BALANCES</text>
<rect x="28" y="66" width="30" height="10" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
<text x="43" y="73" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">POLICIES</text>
<rect x="62" y="66" width="30" height="10" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
<text x="77" y="73" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">WP DOC</text>
<rect x="28" y="80" width="64" height="10" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
<text x="60" y="87" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">YEAR 1 AUDIT</text>
                </svg>
            </div>
            <span class="illustration-label">SA 510 Onboarding</span>
            <span class="step-number-large">07</span>
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
            <h2 class="section-title">Rotation Transition Documents Checklist</h2>
            <div class="content-text">
                
                <p>The rotation transition documents fall into four sections - outgoing auditor documents, Audit Committee and Board documents, incoming auditor documents, and group/listed entity specific documents:</p>
<h3 style="margin-top:24px;">Outgoing Auditor Documents</h3>
<ul>
    <li><strong>Section 140(2) Statement:</strong> Where outgoing auditor resigns; filed with ROC within 30 days; reasons stated</li>
    <li><strong>Form ADT-3:</strong> Notification of resignation to ROC</li>
    <li><strong>Outgoing Auditor's Final Audit Report:</strong> Last year's audit report with main report, CARO Annexure A, IFC Annexure B; UDIN reference</li>
    <li><strong>Audit Working Files Transition:</strong> Working files made available to incoming auditor per ICAI inter-firm guidance</li>
    <li><strong>Outgoing Auditor's Communication to Incoming:</strong> Letter regarding any issues, objections, or concerns - for CARO Clause 3(xviii)</li>
</ul>
<h3 style="margin-top:24px;">Audit Committee and Board Documents</h3>
<ul>
    <li><strong>Audit Committee Section 177(4)(vii) Recommendation:</strong> Minutes recording rotation requirement, candidate evaluation, recommendation with reasons</li>
    <li><strong>Candidate Independence Declarations:</strong> Section 141 disqualification check; network firm certificate; common partner certificate</li>
    <li><strong>Board Resolution:</strong> Board approval of Audit Committee recommendation; resolution recording rotation reasoning</li>
    <li><strong>AGM Notice and Resolution:</strong> Section 139(1) appointment resolution for 5-year term; ordinary resolution at AGM</li>
</ul>
<h3 style="margin-top:24px;">Incoming Auditor Documents</h3>
<ul>
    <li><strong>Consent Letter Under Section 141:</strong> Incoming auditor's consent to act as auditor</li>
    <li><strong>Section 141 Independence Certificate:</strong> No disqualification under any sub-clause</li>
    <li><strong>Eligibility Certificate Under Section 139:</strong> Eligibility for appointment</li>
    <li><strong>ICAI Peer Review and NFRA Registration:</strong> Where applicable (listed entities, NFRA-monitored)</li>
    <li><strong>ADT-1 Filing:</strong> Filed by company within 15 days of appointment</li>
    <li><strong>SA 210 Engagement Letter:</strong> Scope, fee, deliverables, timeline</li>
    <li><strong>SA 510 Working Paper:</strong> Opening balance verification procedures and conclusion</li>
</ul>
<h3 style="margin-top:24px;">Group / Listed Entity Specific</h3>
<ul>
    <li><strong>Stock Exchange Notification:</strong> Listed entities - intimation to stock exchange under SEBI LODR</li>
    <li><strong>SA 600 Component Auditor Coordination (Group Audits):</strong> Group-level rotation coordination across components</li>
    <li><strong>Parent Auditor Communication (Subsidiary Audits):</strong> Where the company is a subsidiary and the parent has its own auditor</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Cooling-Off Period and Re-Appointment Scenarios</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Individual Auditor Completed 1 Term (5 Years)</td><td>An individual chartered accountant served as statutory auditor for the maximum 5 consecutive years allowed under Section 139(2)(a). Term concludes naturally at the AGM at which the successor is appointed.</td><td>Cooling-off: 5 years from end of term. Re-appointment eligibility: eligible for re-appointment in the SAME company after 5-year cooling-off period. Outgoing auditor can audit OTHER companies (including other group entities) during cooling-off.</td></tr>
<tr><td>Audit Firm Completed 2 Terms (10 Years)</td><td>An audit firm (partnership or LLP) served as statutory auditor for the maximum 10 consecutive years (two 5-year terms) under Section 139(2)(b). Most common rotation pattern.</td><td>Cooling-off: 5 years from end of second term. Re-appointment eligibility: eligible for re-appointment in the same company after 5-year cooling-off. Network firm restriction blocks any firm sharing name/trademark/brand with outgoing firm.</td></tr>
<tr><td>Auditor Resigned Mid-Term But Cumulative Service Approached 5/10 Years</td><td>Auditor or audit firm resigned before formal term end but had served close to the 5-year (individual) or 10-year (firm) limit at the time of resignation.</td><td>Cooling-off: 5 years from date of resignation. Re-appointment eligibility: cooling-off applies even though formal term did not expire. Substance-over-form principle prevents tactical resignation to avoid rotation rules.</td></tr>
<tr><td>Auditor Resigned Mid-Term With Limited Cumulative Service</td><td>Auditor served only 2-3 years before resignation due to fee dispute, capability mismatch, or other operational reason. Cumulative service well below the 5/10-year limit.</td><td>Cooling-off: No cooling-off applies if cumulative service is well below the limit. Re-appointment eligibility: can return to same company. Cumulative term cannot exceed 5 years (individual) or 10 years (firm).</td></tr>
<tr><td>Outgoing Auditor as Internal Auditor or Tax Auditor During Cooling-Off</td><td>Outgoing statutory auditor wishes to continue some advisory role with the company (internal audit, tax audit, non-statutory engagements) during the 5-year cooling-off period.</td><td>Not prohibited per ICAI guidance - internal audit, tax audit, or other non-statutory engagements with the same company are allowed during cooling-off. However, independence threats under SA 220 and ICAI Code of Ethics (self-review, familiarity) require careful judgment.</td></tr>
<tr><td>Outgoing Auditor of One Group Entity, Auditor of Other Group Entity</td><td>Audit firm completed rotation for one group entity (e.g. listed parent) and continues to audit OTHER group entities (subsidiaries, associates) where rotation has not yet been triggered.</td><td>Not prohibited - cooling-off applies only to the SPECIFIC company where the term was completed. Outgoing auditor can continue auditing other group entities, but Section 144 prohibited services and independence threats are evaluated per engagement.</td></tr>

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
            <h2 class="section-title">Patron Rotation Onboarding Engagement Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - Listed Entity Year-1 Rotation (Section 139(2) Primary Applicability)</td><td>Starting from Rs 30,00,000 (Exl GST and Govt. Charges) - Timeline 11 to 14 weeks. Steady-state Year-2+ from Rs 25,00,000. Includes mandatory KAM under SA 701 and SEBI LODR compliance integration.</td></tr>
<tr><td>Unlisted Public Company Rs 10 Crore+ Paid-Up (Year-1 Rotation)</td><td>Rs 5,50,000 to Rs 12,00,000 (Exl GST and Govt. Charges) - Timeline 8 to 10 weeks. Steady-state Year-2+: Rs 4,50,000 to Rs 10,00,000. Includes full SA 510 onboarding.</td></tr>
<tr><td>Private Limited Company Rs 20 Crore+ Paid-Up (Year-1 Rotation)</td><td>Rs 4,50,000 to Rs 10,00,000 (Exl GST and Govt. Charges) - Timeline 7 to 9 weeks. Steady-state Year-2+: Rs 3,75,000 to Rs 8,50,000.</td></tr>
<tr><td>Companies With Rs 50 Crore+ Borrowings or Public Deposits (Year-1 Rotation)</td><td>Rs 3,50,000 to Rs 8,00,000 (Exl GST and Govt. Charges) - Timeline 7 to 9 weeks. Steady-state Year-2+: Rs 3,00,000 to Rs 6,50,000.</td></tr>
<tr><td>NBFC Under Section 139(2) Rotation (Year-1)</td><td>Starting from Rs 7,50,000 (Exl GST and Govt. Charges) - Timeline 9 to 12 weeks. Steady-state Year-2+: from Rs 6,00,000. Additional RBI scrutiny on auditor changes.</td></tr>
<tr><td>Group Audit With SA 600 Component Coordination (Add-On)</td><td>Add Rs 1,00,000 to Rs 3,00,000 per component (Exl GST and Govt. Charges). Steady-state Year-2+: Add Rs 75,000 to Rs 2,50,000 per component. Same audit window.</td></tr>
<tr><td>Initial Rotation Planning Consultation (30-min on applicability and timeline)</td><td>Free (no obligation)</td></tr>
<tr><td>Year-1 Onboarding Premium Over Steady-State Fee</td><td>15 to 25 percent typical premium for Year-1 rotation engagement due to additional SA 510 procedures, SA 315 knowledge build-up, control environment understanding, SA 550 related party identification, predecessor working file review</td></tr>
<tr><td>Government Filing Fee - ADT-1 (Incoming Auditor Notification)</td><td>Per Companies (Registration Offices and Fees) Rules - based on authorised capital; standard small-fee filing within 15 days of appointment</td></tr>
<tr><td>Section 147 Penalty for Rotation Non-Compliance</td><td>Rs 25,000 to Rs 5,00,000 on company; Rs 10,000 to Rs 1,00,000 on officer in default; potential auditor disqualification under Section 141</td></tr>
<tr><td>Outgoing Auditor Section 140(2) Statement Drafting (Add-On Where Patron Is Outgoing)</td><td>Rs 25,000 to Rs 75,000 (Exl GST and Govt. Charges) - substantive ADT-3 statement with reasons and other facts</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Audit Rotation Transition India consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Audit%20Rotation%20Transition%20India%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Rotation Transition Cycle Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Rotation Applicability Test (Six Months Before Year-End)</td><td>Rule 5 test; consecutive years count under Rule 6(3); rotation timing determination - October for March year-end</td></tr>
<tr><td>Audit Committee Briefing (Five to Six Months Before Year-End)</td><td>Section 177(4)(vii) briefing; candidate auditor identification (3-5 firms); preliminary network firm and common partner screen</td></tr>
<tr><td>Candidate Evaluation (Four to Five Months Before Year-End)</td><td>Section 141 independence checks; Section 144 prohibited services check; network firm test; common partner test in past 5 years; fee proposals; references</td></tr>
<tr><td>Audit Committee Recommendation to Board (Four Months Before Year-End)</td><td>Section 177(4)(vii) substantive recommendation with reasons; Board considers</td></tr>
<tr><td>Board Approval (Three to Four Months Before Year-End)</td><td>Board considers Audit Committee recommendation; resolves to recommend to AGM</td></tr>
<tr><td>AGM Notice (21 Clear Days Before AGM)</td><td>Section 101 notice; auditor's consent and Section 141 certificate attached; ordinary resolution for 5-year appointment</td></tr>
<tr><td>AGM Appointment (Within 6 Months of Year-End)</td><td>Section 139(1) ordinary resolution; outgoing auditor's term ends at AGM conclusion</td></tr>
<tr><td>ADT-1 Filing (Within 15 Days of AGM)</td><td>Notification to ROC of incoming auditor appointment under Rule 4</td></tr>
<tr><td>Outgoing Auditor Section 140(2) ADT-3 Filing (Within 30 Days of Cessation If Resignation)</td><td>Statement to ROC with reasons; Form ADT-3 - only where resignation occurred before natural term-end</td></tr>
<tr><td>SA 510 Onboarding Fieldwork (Months 2 to 4 of Incoming Engagement)</td><td>Predecessor working file review; opening balance verification; SA 315 risk assessment</td></tr>
<tr><td>Year-1 Audit Sign-Off (Months 8 to 10 of Incoming Engagement)</td><td>First audit report under SA 700; CARO Clause 3(xviii) reporting on predecessor; UDIN generated; AOC-4 filing within 30 days of next AGM</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical planning window:</strong> The 6-month-ahead planning window is essential because last-minute rotations frequently result in (a) inadequate Section 141 independence verification, (b) network firm restriction violations discovered after appointment, (c) SA 510 opening balance qualifications in the first year because of inadequate predecessor coordination, and (d) CARO Clause 3(xviii) reporting gaps. <strong>Listed entities additionally face SEBI LODR notification requirements; NBFCs face RBI scrutiny on auditor changes.</strong> Section 147 penalty for rotation non-compliance: Rs 25,000 to Rs 5,00,000 on the company plus Rs 10,000 to Rs 1,00,000 on the officer in default.</p>

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
            <h2 class="section-title">Why Patron's Rotation Onboarding Approach Differs</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <h3>Six-Month-Ahead Rotation Planning</h3>
        <p>Patron initiates rotation planning a full 6 months before year-end with Audit Committee briefing, candidate evaluation, and Section 141 independence verification complete before the AGM agenda is drafted.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <h3>Predecessor Coordination Protocol</h3>
        <p>Patron uses ICAI inter-firm guidance to formally request predecessor working file access, exit findings, and Section 140(2) statement copy; cooperation documented; SA 510 procedures designed to use predecessor evidence where available.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
        <h3>Transparent Year-1 vs Year-2+ Fee Disclosure</h3>
        <p>Patron quotes Year-1 onboarding premium and Year-2-onwards steady-state separately; companies see the rotation fee cycle clearly without hidden cost surprises in subsequent years.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
        <h3>Substantive Audit Committee Recommendation</h3>
        <p>Section 177(4)(vii) recommendation minutes with substantive content - not boilerplate. Withstands NFRA review and lender/investor diligence. Records rotation requirement, candidate evaluation, recommendation with specific reasons.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 11l3 3L22 4"/></svg></div>
        <h3>SA 510 Type (b) Procedures Discipline</h3>
        <p>Type (b) procedures (prior period audited by predecessor) executed end-to-end: predecessor report read; opening balances verified; accounting policy consistency evaluated; SA 510 working paper documented before substantive testing.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3>Network Firm and Common Partner Screen</h3>
        <p>ICAI member directory cross-check; Big-Four global affiliation case-by-case evaluation; Section 139(2) Second Proviso common-partner-in-past-5-years test documented in engagement letter.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
        <h3>CARO 3(xviii) Substantive Reporting</h3>
        <p>Year-1 of incoming engagement engages CARO 2020 Clause 3(xviii) - Patron coordinates with the outgoing auditor's Section 140(2) statement and prepares substantive CARO reporting on issues, objections, or concerns.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <h3>Group Audit Rotation Coordination</h3>
        <p>For groups - SA 600 component auditor coordination across rotation cycles; family-business-groups planned sequentially to avoid auditor pipeline shortage; parent auditor communication for subsidiary audits.</p>
    </article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted Rotation Onboarding Practice</h2>
            <div class="content-text">
                
                <div style="background:var(--blue-lighter);padding:24px;border-radius:12px;margin-bottom:24px;">
    <p style="font-weight:700;color:var(--blue);font-size:18px;margin-bottom:8px;">10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
</div>
<h3 style="margin-top:24px;">Practitioner Authority Signal</h3>
<p><em>"The statutory audit was clean and completed well before deadline. No last-minute rush." - MD, Trading Firm, Mumbai (Google Review)</em></p>
<p><em>"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team." - Startup Founder, Pune (Google Review)</em></p>
<h3 style="margin-top:24px;">Client Coverage</h3>
<p>Trusted by <strong>Hyundai, Asian Paints, Bridgestone and a growing roster of listed entities, large unlisted public companies, and large Pvt Ltd companies in their rotation cycles.</strong> Patron's rotation onboarding practice spans listed-entity first-time Section 139(2) compliance, large-unlisted-public crossing-threshold rotations, NBFC rotation cycles with RBI scrutiny, and family-business-group sequential rotations across multiple group entities.</p>
<h3 style="margin-top:24px;">4-Office Signal</h3>
<p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron services rotation onboarding across listed entities, family-business-group rotations, and multi-component group audits</strong> with SA 600 component auditor coordination. Peer-reviewed ICAI workpapers; substantive Section 177(4)(vii) recommendations; documented SA 510 Type (b) procedures.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Big-Four vs Generic Mid-Tier vs Patron Rotation Onboarding</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Big-Four (BSR / Deloitte / SRBC / Walker)</th><th>Generic Mid-Tier</th><th>Patron-Led</th></tr></thead>
                    <tbody>
                        <tr><td>Six-month-ahead rotation planning</td><td>Rare - typically Q4 engagement</td><td>Variable</td><td>Standard procedure</td></tr>
<tr><td>Predecessor coordination protocol</td><td>Centralised</td><td>Variable - often ad-hoc</td><td>Documented ICAI inter-firm protocol</td></tr>
<tr><td>SA 510 opening balance verification depth</td><td>Standard procedure</td><td>Variable</td><td>Type (b) procedures with working paper documentation</td></tr>
<tr><td>Section 141 independence verification documentation</td><td>Standard procedure</td><td>Often boilerplate</td><td>Substantive certificate with cross-checks</td></tr>
<tr><td>Transparent Year-1 vs Year-2-onwards fee disclosure</td><td>Often bundled</td><td>Often bundled</td><td>Separate Y1 onboarding premium disclosed</td></tr>
<tr><td>CARO Clause 3(xviii) substantive reporting</td><td>Standard procedure</td><td>Variable</td><td>Substantive coordination with predecessor</td></tr>
<tr><td>Cost - mid-size Pvt Ltd Rs 50 crore revenue Y1 rotation</td><td>Rs 18 to 35 lakh</td><td>Rs 8 to 18 lakh</td><td>Rs 4.5 to 10 lakh</td></tr>
<tr><td>Partner engagement continuity across 5-year term</td><td>Subject to internal partner rotation policies</td><td>Variable</td><td>Same engagement partner subject to ICAI partner-rotation guidance</td></tr>

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
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                <p>This operational authority page on audit rotation sits within Patron's broader audit cluster. Related authority pages and service pages:</p>
<ul>
    <li><strong><a href="/statutory-audit">Statutory Audit in India (Parent)</a>:</strong> The complete Section 143 statutory audit engagement - this rotation page covers the Section 139(2) transition mechanics within that engagement framework.</li>
    <li><strong><a href="/appointment-of-auditor">Appointment of Auditor (Section 139(1) AGM)</a>:</strong> 5-year term appointment at AGM; ADT-1 filing within 15 days of appointment.</li>
    <li><strong><a href="/change-of-auditor">Change of Auditor (Section 140 Voluntary)</a>:</strong> Voluntary removal during term (Central Government approval + special resolution) or resignation (Section 140(2) statement; ADT-3 within 30 days).</li>
    <li><strong><a href="/audit-report-types-india">Audit Report Types in India</a>:</strong> Opinion type framework (Unmodified, Qualified, Adverse, Disclaimer) under SA 700-706 - relevant for first-year-of-rotation qualification risk.</li>
    <li><strong><a href="/caro-2020-reporting">CARO 2020 Reporting</a>:</strong> Clause 3(xviii) reporting on auditor resignation during the year; incoming auditor's coordination with outgoing.</li>
    <li><strong><a href="/internal-financial-controls-audit">Internal Financial Controls Audit</a>:</strong> First-year-of-rotation IFC scoping under Section 143(3)(i); Annexure B carry-through analysis.</li>
    <li><strong><a href="/schedule-iii-compliance-companies-act">Schedule III Compliance</a>:</strong> Schedule III format consistency check across the rotation transition.</li>
    <li><strong><a href="/tax-audit">Tax Audit (Section 44AB)</a>:</strong> Form 3CB tax audit - rotation of tax auditor follows different rules but coordination useful.</li>
    <li><strong><a href="/private-limited-company-compliance">Private Limited Company Compliance</a>:</strong> AOC-4 filing with complete audit report package; MGT-7 annual return cross-references ADT-1.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Rule 5 Decision Tree, Network Firm Detail and Legal Framework</h2>
            <div class="content-text">
                
                <p>Section 139(2) applicability is tested via the Rule 5 decision tree. The rotation is administered by the Audit Committee under Section 177(4)(vii). Primary regulator: <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India (ICAI)</a>. Filing portal: <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA21 V3</a>. Independent regulator for listed and prescribed unlisted: <a href="https://www.nfra.gov.in" target="_blank" rel="noopener">NFRA (National Financial Reporting Authority)</a>.</p>
<h3 style="margin-top:24px;">Rule 5 Applicability Decision Tree</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Step</th><th>Question</th><th>Yes Outcome</th><th>No Outcome</th></tr></thead>
    <tbody>
        <tr><td>1</td><td>Is the company OPC or Small Company?</td><td>EXEMPT from Section 139(2) - no rotation required</td><td>Continue to Step 2</td></tr>
        <tr><td>2</td><td>Is the company listed (NSE / BSE / other recognised exchange)?</td><td>SECTION 139(2) APPLIES - no further threshold test</td><td>Continue to Step 3</td></tr>
        <tr><td>3</td><td>Is the company an unlisted public company?</td><td>Check paid-up share capital - Rs 10 crore or more triggers Section 139(2)</td><td>Continue to Step 4</td></tr>
        <tr><td>4</td><td>Is the company a private limited company?</td><td>Check paid-up share capital - Rs 20 crore or more triggers Section 139(2)</td><td>Continue to Step 5</td></tr>
        <tr><td>5</td><td>Does the company have public borrowings from FIs/banks OR public deposits Rs 50 crore or more?</td><td>SECTION 139(2) APPLIES</td><td>Section 139(2) does NOT apply - regular Section 139(1) appointment without mandatory rotation</td></tr>
    </tbody>
</table>
</div>
<h3 style="margin-top:24px;">Network Firm Restriction Detail</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Network Element</th><th>Restriction</th></tr></thead>
    <tbody>
        <tr><td>Shared name / trademark / brand</td><td>Incoming firm sharing name, trademark, or brand with outgoing firm is ineligible (Rule 6(3) Note 1)</td></tr>
        <tr><td>Common control / common framework</td><td>Firms under common control or managed under common framework - ICAI Code of Ethics interpretation</td></tr>
        <tr><td>Common partner currently</td><td>Audit firm with common partner as outgoing firm is ineligible for 5 years (Second Proviso to Section 139(2))</td></tr>
        <tr><td>Common partner moving to another firm</td><td>A partner of outgoing firm who certified financial statements moves to another firm - that other firm is ineligible for 5 years (Explanation to Rule 6)</td></tr>
        <tr><td>Big-Four global affiliation</td><td>Member firms of Big-Four global networks (KPMG India / Deloitte India / EY India / PwC India) are member firms of separate global networks - ICAI evaluates global affiliations case-by-case</td></tr>
    </tbody>
</table>
</div>
<h3 style="margin-top:24px;">Section 139 and Section 140 Statutory Provisions</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Reference</th><th>What It Governs</th></tr></thead>
    <tbody>
        <tr><td>Section 139(1) Companies Act 2013</td><td>Every company shall appoint auditor at first AGM holding office till conclusion of sixth AGM - i.e. 5-year term</td></tr>
        <tr><td>Section 139(2)(a)</td><td>Mandatory rotation - individual auditor cannot be appointed for more than ONE term of 5 consecutive years</td></tr>
        <tr><td>Section 139(2)(b)</td><td>Mandatory rotation - audit firm cannot be appointed for more than TWO terms of 5 consecutive years (10 years total)</td></tr>
        <tr><td>First Proviso to Section 139(2)</td><td>Cooling-off period - outgoing auditor cannot be re-appointed in same company for 5 years from completion of term</td></tr>
        <tr><td>Second Proviso to Section 139(2)</td><td>Common partner restriction - audit firm with common partners as outgoing firm whose tenure has expired is ineligible for 5 years</td></tr>
        <tr><td>Third Proviso to Section 139(2)</td><td>Transition - companies existing on commencement of the Act (1 April 2014) had moratorium of 3 years to comply</td></tr>
        <tr><td>Section 139(3) - Joint Auditors</td><td>Joint auditors - rotation rules apply individually; companies may rotate joint auditors at different times</td></tr>
        <tr><td>Section 139(4)</td><td>Audit Committee role - where required under Section 177, Committee recommends; otherwise Board recommends to AGM</td></tr>
        <tr><td>Section 139(8) - Casual Vacancy</td><td>Casual vacancy filled by Board within 30 days; if vacancy due to resignation, also approved by company in general meeting within 3 months</td></tr>
        <tr><td>Section 139(9) - AGM Re-appointment</td><td>Retiring auditor may be re-appointed if not disqualified and no notice of unwillingness or special resolution against</td></tr>
        <tr><td>Section 139(11)</td><td>Audit Committee recommendation requirement for all auditor appointments including casual vacancy</td></tr>
        <tr><td>Section 140 - Removal / Resignation</td><td>Procedure for voluntary removal (Central Government approval + special resolution) and resignation (Section 140(2) statement)</td></tr>
        <tr><td>Section 140(2)</td><td>Outgoing auditor's mandatory written statement to ROC within 30 days of cessation - reasons and other facts; Form ADT-3</td></tr>
        <tr><td>Section 141 - Qualifications and Disqualifications</td><td>Eligibility of auditor - specific disqualifications: body corporate; officer or employee; indebtedness above prescribed limit; security holding; conviction for fraud</td></tr>
        <tr><td>Section 144 - Prohibited Services</td><td>Auditor cannot render accounting/book keeping, internal audit, IS design, actuarial services, investment advisory, investment banking, management services</td></tr>
        <tr><td>Section 147 Companies Act 2013</td><td>Penalty Rs 25,000 to Rs 5,00,000 on company; Rs 10,000 to Rs 1,00,000 on officer in default for rotation contravention</td></tr>
        <tr><td>Section 177(4)(vii) - Audit Committee</td><td>Audit Committee terms of reference include recommendation for appointment, removal, and rotation of statutory auditors</td></tr>
        <tr><td>Rule 5 Companies (Audit and Auditors) Rules 2014</td><td>Classes of companies subject to Section 139(2) rotation - listed, unlisted public (Rs 10 cr+ paid-up), Pvt Ltd (Rs 20 cr+ paid-up), all companies with Rs 50 cr+ borrowings; OPC and Small Company EXEMPT</td></tr>
        <tr><td>Rule 6(3) Companies (Audit and Auditors) Rules</td><td>Period before commencement of Act counted; network firm restriction; common partner moving to another firm makes that firm ineligible for 5 years</td></tr>
        <tr><td>SA 510 - Initial Audit Engagements</td><td>Opening balance procedures for incoming auditor; Type (b) - prior period audited by predecessor (typical case for rotation)</td></tr>
        <tr><td>SA 315 - Risk Assessment</td><td>Understanding the entity and its environment - more demanding in Year-1 of incoming engagement</td></tr>
        <tr><td>SA 550 - Related Parties</td><td>Identification of related parties; first-time mapping in Year-1 of incoming engagement</td></tr>
        <tr><td>SA 600 - Component Auditors</td><td>Group audit coordination - rotation can affect group audit timeline</td></tr>
        <tr><td>CARO 2020 Clause 3(xviii)</td><td>Auditor reporting on resignation of statutory auditors during the year AND whether the auditor has taken into consideration the issues, objections or concerns raised by the outgoing auditors</td></tr>
        <tr><td>Form ADT-1</td><td>Notification to ROC of incoming auditor appointment - filed by company within 15 days of appointment under Rule 4</td></tr>
        <tr><td>Form ADT-3</td><td>Notification of resignation by auditor to ROC under Section 140(2) - filed within 30 days of cessation</td></tr>
    </tbody>
</table>
</div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Audit Rotation Under Section 139(2)</h2>
                    <p class="faq-expanded__lead">Practitioner-level Q&A on Section 139(2) applicability, term limits, cooling-off period, network firm restrictions, transition process, and SA 510 incoming auditor procedures.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Audit Rotation Transition India',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is auditor rotation under Section 139(2)?</h3>
                        <div class="faq-expanded__a"><p>Auditor rotation under Section 139(2) of the Companies Act, 2013 is the MANDATORY change of statutory auditor required for listed companies and prescribed classes of companies after a fixed term - one term of 5 consecutive years for an individual auditor, two terms of 5 consecutive years (10 years total) for an audit firm. The outgoing auditor must complete a 5-year cooling-off period before being re-appointed in the same company. The categories of companies covered are prescribed under Rule 5 of the Companies (Audit and Auditors) Rules, 2014 - listed companies, unlisted public (Rs 10 crore plus paid-up), Pvt Ltd (Rs 20 crore plus paid-up), and companies with Rs 50 crore plus borrowings or public deposits.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which companies are required to rotate auditors?</h3>
                        <div class="faq-expanded__a"><p>Under Rule 5 of the Companies (Audit and Auditors) Rules, 2014, the following classes of companies are required to rotate auditors under Section 139(2) - (a) all listed companies (no threshold); (b) all unlisted public companies with paid-up share capital of Rs 10 crore or more; (c) all private limited companies with paid-up share capital of Rs 20 crore or more; (d) all companies (other than the foregoing) with public borrowings from financial institutions or banks, or public deposits of Rs 50 crore or more. One Person Company (OPC) under Section 2(62) and Small Company under Section 2(85) are EXEMPT from Section 139(2) rotation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the rotation period for individual vs firm auditors?</h3>
                        <div class="faq-expanded__a"><p>The rotation periods are different - an individual auditor can be appointed or re-appointed for a maximum of ONE term of 5 consecutive years under Section 139(2)(a); an audit firm can be appointed or re-appointed for a maximum of TWO terms of 5 consecutive years (i.e. 10 years total) under Section 139(2)(b). The difference reflects the fact that an audit firm has multiple partners who can be rotated within the firm, providing partial freshness even when the firm continues - whereas an individual auditor has no such partner rotation option.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the cooling-off period for auditors?</h3>
                        <div class="faq-expanded__a"><p>Under the First Proviso to Section 139(2), the outgoing auditor (individual or firm) cannot be re-appointed in the SAME company for 5 years from completion of the maximum term (5 years for individual; 10 years for firm). The cooling-off applies even where the auditor resigned mid-term if cumulative service approached or completed 5 / 10 years. The cooling-off restriction is company-specific - the outgoing auditor can audit other companies (including other group companies) during the cooling-off period; only the specific company where the term was completed is restricted. Internal audit, tax audit, or other non-statutory engagements with the same company are NOT prohibited during cooling-off per ICAI guidance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the network firm restriction?</h3>
                        <div class="faq-expanded__a"><p>The Second Proviso to Section 139(2) and Rule 6(3) provide that the incoming audit firm cannot share name, trademark, or brand with the outgoing audit firm; cannot have a common partner with the outgoing firm; and a partner of the outgoing firm who certified the financial statements moving to another firm makes that other firm ineligible for 5 years. ICAI Code of Ethics interprets network firms broadly - firms under common control, common framework, or shared resources may be considered networked. For Big-Four global affiliations, member firms (KPMG India, Deloitte India, EY India, PwC India) are member firms of separate global networks - cross-rotation between Big-Four firms requires specific independence assessment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the process for auditor transition?</h3>
                        <div class="faq-expanded__a"><p>The process is multi-stage. Six months before year-end - rotation applicability test under Rule 5; Audit Committee briefing under Section 177(4)(vii); candidate auditor identification (3-5 firms). Five to four months before year-end - candidate evaluation (independence, network firm test, common partner test, fee proposals); Audit Committee recommendation to Board; Board approval. AGM (within 9 months of year-end) - shareholders appoint incoming auditor by ordinary resolution under Section 139(1) for 5-year term. Within 15 days of AGM - ADT-1 filed by company. Within 30 days of cessation (if outgoing auditor resigned) - Section 140(2) statement filed in Form ADT-3. Engagement letter under SA 210; SA 510 onboarding fieldwork begins.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is SA 510 opening balance verification by new auditor?</h3>
                        <div class="faq-expanded__a"><p>Standard on Auditing 510 Initial Audit Engagements - Opening Balances applies to the incoming auditor in a rotation transition. Since the prior period was audited by the predecessor auditor, the engagement is a Type (b) initial audit engagement. Procedures - read the predecessor's audit report (opinion type, modifications, KAM if any, EoM); confirm opening balances correctly brought forward from predecessor's closing balances; evaluate consistency of accounting policies; coordinate with predecessor for working file access where granted under ICAI inter-firm guidance. Where SAAE on opening balances cannot be obtained, the incoming auditor may need to modify the audit opinion (qualified if not pervasive, disclaimer if pervasive).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What should companies look for when selecting a new auditor?</h3>
                        <div class="faq-expanded__a"><p>Patron's six-point evaluation framework - (1) ICAI registration and peer review status; partner CoP status; NFRA registration for listed entities; Section 141 disqualification check; (2) Industry and size match - audit firm's experience in the company's industry and the firm's size match for the company's audit complexity; (3) Network firm and common partner test - no shared name / trademark / brand with outgoing firm; no common partner in past 5 years; (4) Section 144 prohibited services - candidate firm not providing accounting / internal audit / IS design / actuarial / investment advisory / management services; (5) Partner engagement continuity - same audit partner across the 5-year term subject to ICAI partner-rotation interpretation; (6) Fee proposal and scope clarity - transparent Year-1 onboarding premium and Year-2-onwards steady-state.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Auditor rotation kya hai Section 139(2) ke under?</strong> Mandatory auditor change - Individual auditor max 5 saal; Audit firm max 10 saal (2 terms of 5 each). Listed entities, large unlisted, large Pvt Ltd, aur Rs 50 cr+ borrowings vali companies pe applicable. OPC aur Small Company exempt hain.</p>
<p><strong>Cooling-off period kya hota hai?</strong> 5 saal - outgoing auditor 5 saal tak same company mein re-appoint nahi ho sakta. Mid-term resignation mein bhi apply hota hai agar cumulative service 5/10 saal ke kareeb hai.</p>
<p><strong>Network firm restriction kya hai?</strong> Incoming firm aur outgoing firm same naam, trademark, ya brand share nahi kar sakte. Common partner bhi nahi ho sakta past 5 saal mein. Big-Four global affiliations case-by-case evaluate hote hain.</p>
<p><strong>Rotation process kaise hota hai?</strong> 6 months pehle Audit Committee briefing; candidate evaluation; AGM mein ordinary resolution se appointment; ADT-1 15 din mein file; outgoing auditor agar resign hua to Section 140(2) ADT-3 30 din mein file.</p>
<p><strong>Naye auditor ne kya karna padta hai?</strong> SA 510 Type (b) procedures - predecessor ka audit report padhna, opening balances verify karna, accounting policies consistency check karna, predecessor ke saath coordinate karna. CARO 3(xviii) mein bhi report karna padta hai.</p>
<p><strong>Naye auditor select karte time kya dhyaan dein?</strong> ICAI registration aur peer review status; industry match; network firm aur common partner test; Section 144 prohibited services; partner continuity; transparent fee structure Y1 onboarding aur Y2+ steady-state.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Urgency - Rotation Compliance Stakes</h2>
            <div class="content-text">
                
                <p>Section 139(2) rotation compliance is <strong>non-negotiable for listed entities and prescribed classes</strong> - missing the rotation creates Section 147 penalty exposure (Rs 25,000 to Rs 5,00,000 on company; Rs 10,000 to Rs 1,00,000 on officer in default) and potential auditor disqualification under Section 141. The Audit Committee Section 177(4)(vii) recommendation must be substantive - boilerplate recommendations are scrutinised in NFRA inspections and audit committee reviews.</p>
<p>The rotation timeline is unforgiving - <strong>6 months ahead planning is essential</strong> because last-minute rotations frequently result in (a) inadequate Section 141 independence verification, (b) network firm restriction violations discovered after appointment, (c) SA 510 opening balance qualifications in the first year because of inadequate predecessor coordination, and (d) CARO Clause 3(xviii) reporting gaps.</p>
<p>The 5-year cooling-off period and network firm restrictions together <strong>compress the universe of available auditors</strong> - large groups must plan rotations across multiple group entities sequentially to avoid auditor pipeline shortage. Listed entities additionally face SEBI LODR notification requirements on auditor changes and quarterly KAM reporting under SA 701 that may need explanation when KAM patterns shift post-rotation. For NBFCs, additional RBI scrutiny may apply on auditor changes.</p>
<p><strong>Action now:</strong> Engage Patron as your incoming auditor under Section 139(2) rotation - <a href="tel:+919459456700">+91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Audit%20Rotation%20Transition%20India%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp</a>. Free initial consultation on rotation applicability and timeline.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Engage Patron for Structured Rotation Onboarding</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>Audit rotation and transition under Section 139(2) of the Companies Act, 2013 is one of the most consequential operational transitions in Indian corporate audit - moving from one auditor relationship that has accumulated 5 to 10 years of company-specific knowledge to a fresh auditor relationship requiring SA 510 Initial Audit Engagement procedures, knowledge build-up under SA 315, related party identification under SA 550, and full CARO/IFC walkthrough. The applicability test under Rule 5 covers listed entities (no threshold), unlisted public (Rs 10 cr+ paid-up), Pvt Ltd (Rs 20 cr+ paid-up), and all companies with Rs 50 cr+ borrowings or public deposits - with OPC and Small Company exempt.</p>
<p>The cooling-off period of 5 years and the network firm restrictions (shared name / trademark / brand; common partner in past 5 years) constrain the universe of available auditors - making advance planning essential. The Audit Committee under Section 177(4)(vii) plays a central role in recommending the incoming auditor; the Board approves; shareholders appoint at the AGM. Patron's seven-step rotation onboarding playbook begins six months before year-end with the Rule 5 applicability test, continues through Audit Committee Section 177(4)(vii) recommendation, AGM appointment with ADT-1 filing, and Section 140(2) outgoing auditor coordination, and concludes with SA 510 Type (b) opening balance procedures and the first-year audit. The first year of incoming engagement typically requires 25 to 40 percent more time than a steady-state audit - Patron's transparent first-year-of-rotation fee disclosure separates Year-1 onboarding premium from Year-2-onwards steady-state. Our 15+ years of practice, peer-reviewed ICAI workpapers, and four-office network across Pune, Mumbai, Delhi and Gurugram bring rotation onboarding depth to listed entities, large unlisted public companies, large Pvt Ltd companies, NBFCs, and family-business-group rotations.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Audit%20Rotation%20Transition%20India%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Section%20139%282%29%20Rotation%20Onboarding&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AWe%20need%20a%20rotation%20transition%20engagement.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- AUDIT CLUSTER AUTHORITY PAGES GRID -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Patron's Statutory Audit Cluster</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">This Audit Rotation operational authority page sits alongside Patron's framework authority pages (audit report types, CARO 2020, IFC, Schedule III). Together they form the complete statutory audit cluster covering Section 143 reporting and Section 139 appointment/rotation.</p>
        
            <div class="pa-city-block">
    <div class="pa-block-title">Audit Cluster Authority Pages</div>
    <div class="pa-block-sub">Section 143 reporting and Section 139 appointment/rotation - complete cluster</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit (Parent)</div><div class="pa-card-sub">Section 143 engagement</div></div></a>
        <a href="/audit-report-types-india" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Audit Report Types</div><div class="pa-card-sub">SA 700 to 706</div></div></a>
        <a href="/appointment-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">Section 139(1) - ADT-1</div></div></a>
        <a href="/change-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change of Auditor</div><div class="pa-card-sub">Section 140 - ADT-3</div></div></a>
        <a href="/caro-2020-reporting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">CARO 2020</div><div class="pa-card-sub">Section 143(11)</div></div></a>
        <a href="/internal-financial-controls-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IFC Audit</div><div class="pa-card-sub">Section 143(3)(i)</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 14 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">14 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 14 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Content refreshed quarterly (Tier 1) or whenever MCA notifies Section 139 amendments, Rule 5 threshold revisions, ICAI issues guidance on network firm interpretation, NFRA issues disciplinary orders citing rotation non-compliance, or significant court judgments on auditor independence and Section 139(2) cooling-off emerge.</p>
        </div>
    </div>
</section>



</main>






<!-- ============================================
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
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
