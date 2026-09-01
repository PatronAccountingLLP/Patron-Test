@extends('layouts.service-app')
<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Refund for Engineering Exporters — LUT, IDS, EPCG</title>
    <meta name="description" content="GST refund for Indian engineering exporters via Section 16 IGST Act, Rule 89 ITC, Rule 89(5) IDS formula. Ludhiana, Rajkot, Coimbatore. Rs 11,999.">
    <link rel="canonical" href="/gst-refund-for-engineering-exporters">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Refund for Engineering Exporters — LUT, IDS, EPCG">
    <meta property="og:description" content="GST refund for Indian engineering exporters via Section 16 IGST Act, Rule 89 ITC, Rule 89(5) IDS formula. Ludhiana, Rajkot, Coimbatore. Rs 11,999.">
    <meta property="og:url" content="/gst-refund-for-engineering-exporters/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund for Engineering Exporters — LUT, IDS, EPCG">
    <meta name="twitter:description" content="GST refund for Indian engineering exporters via Section 16 IGST Act, Rule 89 ITC, Rule 89(5) IDS formula. Ludhiana, Rajkot, Coimbatore. Rs 11,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/gst-refund-for-engineering-exporters/#breadcrumb",
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
          "name": "GST Refund for Engineering Exporters",
          "item": "https://www.patronaccounting.com/gst-refund-for-engineering-exporters/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/gst-refund-for-engineering-exporters/#faq",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How does an Indian engineering exporter claim GST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Three parallel routes apply. Route A: zero-rated export under Section 16 IGST Act with two sub-options - IGST paid (auto-refund through ICEGATE under Rule 96) or under LUT (accumulated ITC refund under Rule 89(4) via RFD-01). Route B: inverted duty structure refund under Section 54(3)(ii) and Rule 89(5) where output GST rate is lower than input GST rate. Route C: deemed-export refund under Section 147 for supplies against EPCG and Advance Authorisation. Most engineering exporters use Route A with selective Route B and C overlay."
          }
        },
        {
          "@type": "Question",
          "name": "What is inverted duty structure and how is it computed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Inverted duty structure (IDS) arises when the GST rate on inputs is higher than the GST rate on outputs, resulting in accumulated unutilised ITC. Refund is computed under Rule 89(5) using the post-July 2022 amended formula: Maximum Refund = (Turnover of inverted rated supply x Net ITC / Adjusted Total Turnover) minus (Tax payable on inverted rated supply x Net ITC / ITC availed on inputs and input services). Net ITC for this purpose is limited to ITC on input goods only - input services and capital goods are excluded."
          }
        },
        {
          "@type": "Question",
          "name": "Engineering exporter ka GST refund kaise milega?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Teen tarike hain: pehla, regular export under Section 16 IGST Act - IGST pay karke shipping bill auto-refund application bann jaata hai ya LUT route me Form RFD-01 me accumulated ITC refund. Doosra, agar input GST rate output rate se zyada hai (inverted duty), to Rule 89(5) ke under Statement 1A me refund. Teesra, EPCG ya Advance Authorisation holders ko supply ki to Section 147 ke under deemed export refund. Capital goods ITC dono routes me refund nahi milta - EPCG scheme se hi handle karna hota hai."
          }
        },
        {
          "@type": "Question",
          "name": "Can engineering exporters claim refund of capital goods ITC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not directly under Rule 89(4) zero-rated formula nor Rule 89(5) IDS formula - both exclude capital goods from Net ITC. The Supreme Court ruling in Union of India v VKC Footsteps India Pvt Ltd (2021) confirmed this restriction. The two practical recovery routes are: (a) the Export Promotion Capital Goods (EPCG) scheme under FTP 2023 Chapter 5, which exempts IGST on capital goods import against export obligation of 6 times duty saved over 6 years, and (b) utilisation against output GST on domestic sales where the exporter has a mixed domestic and export portfolio."
          }
        },
        {
          "@type": "Question",
          "name": "Are forgings, castings, and brass parts under inverted duty structure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mostly no. Forgings (Ludhiana), castings (Coimbatore, Belgaum, Kolhapur), and brass parts (Jamnagar, Rajkot) are typically taxed at 18 percent GST on output, with most input materials (steel, brass scrap, copper) also at 18 percent GST - no rate inversion. Specific subsectors with historical IDS exposure include bicycle parts (was 5 percent output) and certain agricultural implements (12 percent output). Post the September 2025 GST 2.0 rate rationalisation, IDS in engineering has reduced further; legacy claims for past periods continue under the 2-year Section 54(1) window."
          }
        },
        {
          "@type": "Question",
          "name": "What is a project export under RBI rules and how does GST refund apply?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Project export is defined under the RBI Master Direction on Project and Service Exports (PEM 2014) as export of engineering goods on deferred payment terms plus turnkey projects plus civil construction abroad. Indian exporters must obtain post-award approval from AD Bank Category I or Exim Bank before commencement. GST refund applies through the standard zero-rated mechanism (Section 16 IGST Act) but documentation tracks mobilisation advance, retention, multi-year shipping bills, and FIRC realisation across the contract life. Patron Accounting structures the refund cycle to align with each shipping milestone."
          }
        },
        {
          "@type": "Question",
          "name": "Is RoDTEP available for engineering exports and how does it interact with GST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. RoDTEP (Remission of Duties and Taxes on Exported Products) is administered by DGFT separately from GST refund and remits embedded central, state, and local levies not refunded under GST. Engineering goods rates under Appendix 4R range from 0.3 percent to 4.3 percent of FOB value; e-scrips are issued on ICEGATE and used to pay basic customs duty. RoDTEP and GST refund are non-overlapping benefits - both claimable on the same shipment. From 1 June 2025, EOU and SEZ exports were also brought under Appendix 4RE."
          }
        },
        {
          "@type": "Question",
          "name": "Inverted duty refund kya hota hai engineering exporters ke liye?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Agar input ka GST rate output ke rate se zyada hai, to ITC accumulate hota rehta hai. Section 54(3)(ii) ke under aur Rule 89(5) ke formula se refund mil sakta hai. Net ITC sirf input goods ka counted hota hai - input services aur capital goods exclude hote hain. Engineering me kuch specific subsectors me apply hota hai jaise bicycle parts ya agricultural implements; wider engineering goods (forgings, castings, brass parts) me usually rate parity hai."
          }
        },
        {
          "@type": "Question",
          "name": "How do EPCG and deemed exports interact for engineering exporters?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EPCG (Export Promotion Capital Goods) scheme under FTP 2023 Chapter 5 lets engineering exporters import capital goods at 0 percent customs duty plus IGST exemption against export obligation of 6 times duty saved over 6 years. Domestic supply against an EPCG holder is a deemed export under Section 147 read with Notification 48/2017-Central Tax, with refund of supplier-paid GST claimable in Form GST RFD-01 with Statement 5B. Either the supplier or the EPCG-holder recipient can claim refund (not both for the same invoice)."
          }
        },
        {
          "@type": "Question",
          "name": "Which engineering clusters does Patron Accounting actively serve?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron Accounting LLP serves engineering exporters across all major Indian clusters - Ludhiana (hand tools, forgings, bicycle parts), Rajkot (auto components, diesel engines, brass parts), Coimbatore (pumps, motors, foundry castings), Faridabad and Gurugram (auto OEM components), Pune and Aurangabad (auto components, valves), Belgaum and Kolhapur (foundry), Bengaluru and Hosur (machine tools, gears), Jamnagar (brass parts), and Howrah. We have offices in Pune, Mumbai, Delhi, and Gurugram with pan-India remote support."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/gst-refund-for-engineering-exporters/#service",
      "name": "GST Refund for Engineering Exporters",
      "description": "Patron Accounting LLP handles GST refund for Indian engineering goods exporters in HS Chapters 72 to 90 across three parallel routes - zero-rated supply under Section 16 IGST Act with LUT or IGST-paid options under Rule 89(4) and Rule 96, inverted duty structure refund under Section 54(3)(ii) with Rule 89(5) formula amended by Notification 14/2022-CT, and deemed-export refund under Section 147 read with Notification 48/2017-CT for EPCG and Advance Authorisation supplies. Coverage across Ludhiana, Rajkot, Coimbatore, Faridabad, Pune, and Aurangabad clusters.",
      "serviceType": "GST Refund Filing Service",
      "url": "https://www.patronaccounting.com/gst-refund-for-engineering-exporters/",
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
                        GST Refund for Engineering Exporters
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> GSTIN, IEC, AD code, shipping bill, GSTR-1 Table 6A, GSTR-3B, BRC, purchase register, ITC ledger</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Refund filing starts at Rs 11,999 plus GST per claim cycle (LUT at Rs 4,999)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Indian engineering goods exporter (Chapters 72 to 90) with zero-rated or inverted-duty profile</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> IGST auto-refund within 7 to 15 days; LUT-route ITC and IDS refund within 30 to 60 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years of Engineering Exporter and GST Compliance Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20for%20Engineering%20Exporters%20-%20zero-rated%2C%20IDS%2C%20or%20deemed%20export%20routes." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Engineering Exporter Refund',
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
    'ctaText'    => 'From AD code registration through to Rule 89(5) IDS Statement 1A computation and EPCG deemed-export structuring - Patron handles the full three-mechanism engineering refund pipeline with CA-led cluster-specific knowledge and PFMS disbursal tracking.',
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
                <a href="#what-section" class="toc-pill">What Is Engineering Refund</a>
                <a href="#who-section" class="toc-pill">Who Needs This</a>
                <a href="#services-section" class="toc-pill">What We Deliver</a>
                <a href="#procedure-section" class="toc-pill">8 Sequential Steps</a>
                <a href="#documents-section" class="toc-pill">Documents Required</a>
                <a href="#challenges-section" class="toc-pill">Challenges and Solutions</a>
                <a href="#fees-section" class="toc-pill">Fees and Pricing</a>
                <a href="#timeline-section" class="toc-pill">Timeline</a>
                <a href="#benefits-section" class="toc-pill">Why CA-Led</a>
                <a href="#comparison-section" class="toc-pill">3 Refund Mechanisms</a>
                <a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Engineering Exporter GST Refund Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Engineering Exporter Refund Services at a Glance</strong></p>
                    <p>Indian engineering exporters recover GST through up to three parallel routes: zero-rated export refund under Section 16 of the IGST Act (LUT or IGST-paid), inverted duty structure refund under Section 54(3)(ii) and Rule 89(5) where input GST exceeds output GST, and deemed-export refund under Section 147 for supplies against EPCG and Advance Authorisation. Capital goods ITC is excluded from refund formulas under both Rule 89(4) and Rule 89(5) - making the EPCG scheme the primary lever for capital-intensive exporters.</p>
                </div>
                <p>GST refund for engineering exporters is the recovery of integrated tax paid or accumulated input tax credit by an Indian manufacturer or merchant exporter dealing in iron, steel, brass, copper, machinery, hand tools, auto components, forgings, castings, pumps, motors, or related engineering goods. The framework spans three parallel mechanisms: zero-rated supply under Section 16 of the IGST Act 2017, inverted duty structure (IDS) refund under Section 54(3)(ii) of the CGST Act, and deemed-export refund under Section 147.</p>
                <p>Engineering clusters in Ludhiana (hand tools, bicycle parts, forgings), Rajkot (auto components, diesel engines, brass parts), Coimbatore (pumps, motors, foundry castings), Faridabad and Pune (auto OEMs and components) drive bulk of India's engineering export value. Patron Accounting LLP has filed engineering export refund cycles for SMEs, MSMEs, and Tier-1 auto suppliers from FY 2017-18 onwards across all major engineering clusters. With Notification 14/2022-CT amending the Rule 89(5) IDS formula and CBIC Instruction 6/2025 extending 90 percent provisional refund to broader categories, the refund landscape has materially improved.<div class="table-responsive-wrapper" style="margin-top:24px;">
                    <table>
                        <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                        <tbody>
                            <tr><td>Governing Acts</td><td>IGST Act 2017 (Section 16), CGST Act 2017 (Sections 54 and 147), CGST Rules 2017 (Rules 89, 96), Customs Act 1962, FTP 2023</td></tr>
                            <tr><td>Applicable To</td><td>Indian engineering goods exporters in HS Chapters 72 to 90 - forgings, castings, brass parts, hand tools, machinery, auto components</td></tr>
                            <tr><td>Refund Routes</td><td>Zero-rated (LUT or IGST), Inverted Duty Structure (Rule 89(5)), Deemed Exports (Section 147)</td></tr>
                            <tr><td>Cost</td><td>Patron Accounting fees from Rs 11,999 per refund cycle; govt fee nil</td></tr>
                            <tr><td>Penalty for Capital Goods Misclassification</td><td>ITC reversal under Section 17 and Rule 42 plus interest under Section 50; refund rejection if claimed under wrong head</td></tr>
                            <tr><td>Form / Portal</td><td>Form GST RFD-01 on gst.gov.in for LUT, IDS, deemed export; shipping bill auto-application for IGST paid</td></tr>
                            <tr><td>Authority</td><td>Jurisdictional GST Refund Officer plus Customs at gateway port plus PFMS for IGST disbursal</td></tr>
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
                <h2 class="section-title">What Is GST Refund for Engineering Exporters</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST refund for engineering exporters is the statutory recovery of unutilised input tax credit or integrated tax paid by an Indian manufacturer or merchant exporter of engineering goods classified under HS Chapters 72 (iron and steel), 73 (iron and steel articles), 74 (copper and brass), 84 (machinery and mechanical appliances), 85 (electrical machinery), 87 (vehicles and parts), and 90 (instruments).</p>
                    <p>The legal basis spans Section 16 of the IGST Act 2017 for zero-rated supply, Section 54(3)(ii) of the CGST Act for inverted duty structure refund, and Section 147 read with Notification 48/2017-Central Tax for deemed-export supplies to EPCG and Advance Authorisation holders. Procedural mechanics flow from Rule 89 (LUT and IDS routes) and Rule 96 (auto-refund route) of the CGST Rules 2017.</p>
                    <p>For primary source materials see the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a>, <a href="https://www.icegate.gov.in" target="_blank" rel="noopener">ICEGATE Customs portal</a>, <a href="https://taxinformation.cbic.gov.in" target="_blank" rel="noopener">CBIC notifications and circulars</a>, <a href="https://www.rbi.org.in" target="_blank" rel="noopener">RBI PEM 2014</a>, <a href="https://www.eepcindia.org" target="_blank" rel="noopener">EEPC India</a>, and <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code</a>.</p>
                    <h3 style="margin-top:24px;">3 Refund Mechanisms at a Glance</h3>
                    <div class="table-responsive-wrapper">
                        <table>
                            <thead><tr><th>Route</th><th>Trigger</th><th>Statement</th><th>Typical Turnaround</th></tr></thead>
                            <tbody>
                                <tr><td>Route A - Zero-Rated (Section 16 IGST)</td><td>Physical export of engineering goods</td><td>Shipping Bill auto (IGST) or Statement 3A (LUT)</td><td>7 to 15 days (IGST); 30 to 60 days (LUT)</td></tr>
                                <tr><td>Route B - Inverted Duty (Rule 89(5))</td><td>Input GST rate higher than output GST rate</td><td>Statement 1A under Rule 89(5)</td><td>30 to 60 days end-to-end</td></tr>
                                <tr><td>Route C - Deemed Export (Section 147)</td><td>Domestic supply to EPCG or AA holder</td><td>Statement 5B under Notification 48/2017-CT</td><td>30 to 60 days end-to-end</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Engineering Exporter Refund:</strong></p>
                    <div class="table-responsive-wrapper" style="margin-top:12px;">
                        <table>
                            <thead><tr><th>Term</th><th>Plain Meaning</th></tr></thead>
                            <tbody>
                                <tr><td>Engineering Goods Export</td><td>Outbound shipment of goods classified under HS Chapters 72 to 90 by an Indian manufacturer or merchant exporter</td></tr>
                                <tr><td>Zero-Rated Supply</td><td>Supply on which GST is charged at 0 percent but full ITC remains available, defined under Section 16(1) IGST Act</td></tr>
                                <tr><td>Inverted Duty Structure (IDS)</td><td>Situation where the GST rate on inputs exceeds the GST rate on outputs; Section 54(3)(ii) permits ITC refund</td></tr>
                                <tr><td>Rule 89(5) Formula</td><td>Refund formula for IDS: maximum refund equals (Turnover of inverted-rated supply x Net ITC / Adjusted Total Turnover) minus (Tax payable on inverted-rated supply x Net ITC / ITC availed on inputs and input services)</td></tr>
                                <tr><td>Net ITC (under Rule 89(5))</td><td>ITC availed on inputs (input goods) only, excluding input services and capital goods - confirmed by Supreme Court in Union of India v VKC Footsteps India Pvt Ltd (2021)</td></tr>
                                <tr><td>Capital Goods ITC</td><td>Not refundable under Rule 89(4) zero-rated formula nor Rule 89(5) IDS formula; recoverable only via output GST utilisation or EPCG scheme</td></tr>
                                <tr><td>EPCG</td><td>Export Promotion Capital Goods scheme under FTP 2023 Chapter 5 - concessional 0 percent customs duty plus IGST exemption on capital goods import against export obligation of 6 times duty saved over 6 years</td></tr>
                                <tr><td>Project Export</td><td>Export of engineering goods on deferred payment terms plus turnkey projects plus civil construction abroad - governed by RBI Master Direction on Project and Service Exports (PEM 2014)</td></tr>
                                <tr><td>EEPC India</td><td>Engineering Export Promotion Council of India - apex industry body recognised by Ministry of Commerce for sectoral incentives and RCMC</td></tr>
                                <tr><td>RoDTEP (Appendix 4R)</td><td>Remission of Duties and Taxes on Exported Products - separate non-overlapping benefit at 0.3 to 4.3 percent of FOB for engineering goods</td></tr>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Engineering Exporter Refund</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Routes</span>
                        <strong>Zero-Rated + IDS + Deemed Export</strong>
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
            <h2 class="section-title">Who Needs This Service - 6 Cluster Profiles</h2>
            <div class="content-text">
                
                <p>The service applies to engineering manufacturers and merchant exporters across India's principal clusters, each with distinct refund profiles based on input rates, output rates, and capital intensity.</p>
                <ul>
                    <li><strong>Ludhiana, Punjab</strong> - hand tools, bicycle parts, sewing machine parts, forgings, hosiery machinery; mixed zero-rated plus IDS exposure on bicycle parts</li>
                    <li><strong>Rajkot, Gujarat</strong> - auto components, diesel engines, machine tools, forgings; primarily zero-rated with capital goods ITC build-up</li>
                    <li><strong>Coimbatore, Tamil Nadu</strong> - pumps, motors, foundry castings, textile machinery; zero-rated route dominates</li>
                    <li><strong>Faridabad and Gurugram, Haryana</strong> - auto OEM components, machine tools; high-volume zero-rated exporters</li>
                    <li><strong>Pune and Aurangabad, Maharashtra</strong> - auto components, valves, sub-assemblies; large Tier-1 supplier base</li>
                    <li><strong>Other clusters</strong> - Belgaum and Kolhapur (foundry castings), Hosur and Bengaluru (machine tools, gears), Jamnagar (brass parts), Howrah (engineering goods)</li>
                </ul>
                <p style="margin-top:16px;"><strong>Threshold and pre-condition:</strong> GSTIN registration is mandatory once aggregate turnover crosses Rs 40 lakh for goods under Section 22 CGST Act. If the engineering exporter is not registered, complete <a href="/gst-registration/">GST registration</a> before the first export. IEC code is mandatory; AD code registration with ICEGATE is a one-time pre-condition for IGST refund disbursal via PFMS. Membership of Engineering Export Promotion Council of India (EEPC India) is needed for sectoral incentives and RoDTEP scrip operations.</p>

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
                        <tr><td>Three-Mechanism Strategy Mapping</td><td>Decide refund mix - zero-rated (LUT or IGST), IDS, or deemed-export - based on input-output rate profile, HS code, and capital intensity per cluster. Documented decision memo per refund cycle.</td></tr>
                        <tr><td>LUT Filing (Form GST RFD-11)</td><td>Annual LUT preparation, witness arrangement, online furnishing on gst.gov.in, ARN tracking, and Notification 37/2017-CT prosecution eligibility check.</td></tr>
                        <tr><td>Zero-Rated Export Refund (Rule 89 / Rule 96)</td><td>Statement 3A LUT-route ITC refund or IGST auto-refund through ICEGATE-PFMS; GSTR-1 Table 6A reconciliation with EDI SB; EGM follow-up.</td></tr>
                        <tr><td>Inverted Duty Refund (Rule 89(5))</td><td>Statement 1A computation under post-Notification 14/2022-CT amended formula, Net-ITC restriction to input goods only, working sheet with input and output rate differential.</td></tr>
                        <tr><td>Deemed-Export Refund (Section 147)</td><td>Statement 5B for supplies against EPCG and Advance Authorisation; supplier or recipient option under Notification 49/2017-CT undertaking; Notification 48/2017-CT eligibility check.</td></tr>
                        <tr><td>Capital Goods ITC Strategy</td><td>EPCG planning under FTP 2023 Chapter 5, deemed-export structuring for EPCG holders, and output GST utilisation roadmap for high-CapEx engineering exporters.</td></tr>
                        <tr><td>Project-Export Documentation (RBI PEM 2014)</td><td>Post-award approval coordination with AD Bank Category I or Exim Bank, mobilisation advance vs retention mapping, multi-year refund cycle for turnkey contracts.</td></tr>

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
            <h2 class="section-title">Refund Procedure (8 Sequential Steps)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The engineering-export refund cycle runs through 8 sequential steps. Each step is anchored to a specific section, rule, or notification under Indian law so finance and tax teams can audit each handoff.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Confirm GSTIN, IEC, AD-Code, and EEPC Membership</h3>
                    <p class="step-description">Confirm GSTIN under Section 22 CGST Act (mandatory above Rs 40 lakh turnover for goods). Confirm IEC from DGFT. Confirm AD code one-time ICEGATE linkage between exporter bank account and Customs for PFMS-based IGST refund disbursal. EEPC India RCMC for sectoral incentives. (3 to 7 days.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTIN above Rs 40L threshold</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IEC + AD Code</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EEPC RCMC for incentives</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="48" height="32" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="34" y="30" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">GSTIN</text><text x="34" y="40" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Sec 22</text><rect x="62" y="15" width="48" height="32" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="86" y="30" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">IEC</text><text x="86" y="40" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">DGFT</text><rect x="10" y="50" width="48" height="32" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="34" y="65" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">AD Code</text><text x="34" y="75" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">ICEGATE</text><rect x="62" y="50" width="48" height="32" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="86" y="65" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">EEPC</text><text x="86" y="75" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">RCMC</text></svg>
                        </div>
                        <span class="illustration-label">Pre-Conditions</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Map Refund Profile per HS Code and Cluster</h3>
                    <p class="step-description">Map the refund profile per HS code and per cluster: zero-rated (most engineering exports in Chapters 72 to 90), inverted duty (specific subsectors with output rate lower than input - bicycle parts, certain implements), or deemed export (supplies against EPCG/AA holders). Rate profile review is invoice-by-invoice. (Ongoing.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HS Chapters 72 to 90</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Output vs input rate check</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cluster IDS exposure map</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="32" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="26" y="30" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Ch 72</text><text x="26" y="44" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Iron/Steel</text><text x="26" y="56" font-size="6" font-weight="700" fill="#F5A623" text-anchor="middle" font-family="Arial">Zero-Rated</text><rect x="46" y="15" width="32" height="55" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="62" y="30" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Ch 84</text><text x="62" y="44" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Machinery</text><text x="62" y="56" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">IDS check</text><rect x="82" y="15" width="32" height="55" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="98" y="30" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Ch 87</text><text x="98" y="44" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Auto Parts</text><text x="98" y="56" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">Deemed</text><text x="60" y="90" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">HS Code Map</text></svg>
                        </div>
                        <span class="illustration-label">HS Code Mapping</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">For Zero-Rated - Choose IGST-Paid or LUT Route</h3>
                    <p class="step-description">For zero-rated supply, choose tax mode: pay IGST upfront and receive auto-refund via ICEGATE-PFMS under Rule 96, or export under LUT (Form RFD-11) without IGST and claim accumulated ITC under Rule 89(4) via Form RFD-01. Section 16(3) IGST Act gives both options. (Per refund cycle.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IGST paid auto-refund</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LUT route Rule 89(4)</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 16(3) IGST</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="20" width="48" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="34" y="38" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">IGST Paid</text><text x="34" y="52" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Auto-refund</text><text x="34" y="62" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">Rule 96</text><rect x="62" y="20" width="48" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="86" y="38" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">LUT Route</text><text x="86" y="52" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">RFD-01</text><text x="86" y="62" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Rule 89(4)</text></svg>
                        </div>
                        <span class="illustration-label">Tax Mode Choice</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">For IDS - Compute Rule 89(5) Post-July 2022 Formula</h3>
                    <p class="step-description">For inverted duty structure, file Form GST RFD-01 with Statement 1A using Rule 89(5) formula post Notification 14/2022-CT amendment (5 July 2022). Net ITC includes input goods ITC only - capital goods and input services excluded per Supreme Court VKC Footsteps ruling (2021). (Per refund cycle.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notif 14/2022-CT amended formula</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Net ITC = input goods only</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>VKC Footsteps 2021 SC</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="80" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="25" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Rule 89(5) IDS Formula</text><text x="60" y="40" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Max Refund =</text><text x="60" y="52" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">(T_inv x Net ITC / Adj T)</text><text x="60" y="62" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">- Tax_inv x Net ITC / ITC_all</text><text x="60" y="78" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">Notif 14/2022-CT</text></svg>
                        </div>
                        <span class="illustration-label">Rule 89(5) Compute</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Issue Tax Invoice With HSN and Export Declaration</h3>
                    <p class="step-description">Issue tax invoice with HSN code (Chapters 72 to 90), IEC, AD code, and applicable export declaration per Rule 46 CGST Rules. For deemed-export supplies, declare 'SUPPLY MEANT FOR EXPORT AGAINST ADVANCE AUTHORISATION' or 'EPCG' as applicable. (Per invoice.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HSN + IEC + AD code</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 46 export declaration</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EPCG / AA declaration</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Tax Invoice</text><line x1="25" y1="38" x2="95" y2="38" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">HSN + IEC + AD Code</text><text x="60" y="60" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">FX Value</text><text x="60" y="72" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">EPCG/AA decl.</text></svg>
                        </div>
                        <span class="illustration-label">Invoice Issued</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">File Regular EDI Shipping Bill at Port or ICD</h3>
                    <p class="step-description">File regular EDI shipping bill at port or ICD via ICEGATE. For larger machinery and project-export shipments, ensure correct port code and EGM filing by the carrier. Project exports follow PEM 2014 post-award approval framework. (Same day as export.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EDI SB on ICEGATE</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Port code + EGM</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Project export PEM 2014</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="20" width="48" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="34" y="35" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">ICEGATE</text><text x="34" y="50" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Regular SB</text><text x="34" y="62" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">EDI port</text><rect x="62" y="20" width="48" height="55" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="86" y="35" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">EGM</text><text x="86" y="50" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Carrier filing</text><text x="86" y="62" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">Auto refund</text></svg>
                        </div>
                        <span class="illustration-label">SB Filed</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">File GSTR-1 Table 6A and RFD-01 for IDS/Deemed</h3>
                    <p class="step-description">File GSTR-1 with exports in Table 6A (mirrored in Table 3.1(b) of GSTR-3B). For IDS refund, file Form GST RFD-01 with Statement 1A. For deemed-export refund, file Form GST RFD-01 with Statement 5B. All within 2 years from the relevant date under Section 54(1). (Monthly cycle.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Table 6A + 3.1(b)</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-01 Statement 1A / 5B</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2-yr Section 54(1) limit</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="48" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="34" y="30" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">GSTR-1</text><text x="34" y="44" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Table 6A/6C</text><text x="34" y="58" font-size="6" font-weight="700" fill="#F5A623" text-anchor="middle" font-family="Arial">Exports</text><rect x="62" y="15" width="48" height="60" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="86" y="30" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">RFD-01</text><text x="86" y="44" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">IDS/Deemed</text><text x="86" y="58" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">2-yr limit</text></svg>
                        </div>
                        <span class="illustration-label">Returns + RFD-01 Filed</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Receive Refund Disbursal via PFMS / RFD-06</h3>
                    <p class="step-description">Receive refund disbursal: IGST auto-refund credited to bank account through PFMS within 7 to 15 days for regular SB exports. IDS and LUT-route refunds within 30 to 60 days subject to scrutiny. From October 2025, CBIC Instruction 6/2025 extended 90 percent provisional refund within 7 days to all eligible categories. (7 to 60 days.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PFMS bank credit</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IGST 7-15 days; IDS 30-60</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CBIC Instr 6/2025 - 90% in 7d</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><text x="60" y="32" font-size="11" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">PFMS</text><text x="60" y="48" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Bank Credit</text><circle cx="60" cy="58" r="5" fill="#25D366"/><path d="M57 58l2 2 4-4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" fill="none"/><text x="60" y="88" font-size="8" font-weight="700" fill="#F5A623" text-anchor="middle" font-family="Arial">Instr 6/2025 - 90% in 7d</text></svg>
                        </div>
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
            <h2 class="section-title">Documents Required for Engineering Exporter Refund</h2>
            <div class="content-text">
                
                <ul>
                    <li>GSTIN certificate of the engineering exporter</li>
                    <li>Importer-Exporter Code certificate from DGFT (new exporters can complete IEC registration before the first commercial shipment)</li>
                    <li>AD code registration with ICEGATE (one-time submission linking bank account to Customs for PFMS)</li>
                    <li>Active LUT acknowledgement in Form GST RFD-11 if exporting without IGST payment</li>
                    <li>Tax invoice with HSN (Chapters 72 to 90), IEC, AD code, and FX value (Rule 46 CGST Rules)</li>
                    <li>Regular EDI shipping bill plus Export General Manifest (EGM) for goods exports</li>
                    <li>Bank Realisation Certificate (BRC) or e-BRC for proceeds realised within the 9-month FEMA window</li>
                    <li>GSTR-1 (Table 6A for exports, Table 6C for deemed exports) plus GSTR-3B (Table 3.1(b))</li>
                    <li>For IDS - Statement 1A under Rule 89(5) plus purchase register plus ITC ledger plus working sheet showing input and output rate differential</li>
                    <li>For deemed export - Statement 5B plus Notification 48/2017-CT eligibility check, and recipient declaration of non-availment</li>
                    <li>EEPC India RCMC certificate where sectoral incentives are claimed</li>
                    <li>CA certificate in Annexure 2 of RFD-01 where the refund exceeds Rs 2 lakh</li>
                </ul>
                <h3 style="margin-top:24px;">Worked Example - Rajkot Auto-Component Exporter</h3>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead><tr><th>Stage</th><th>Amount / Detail</th></tr></thead>
                        <tbody>
                            <tr><td>Refund period</td><td>FY 2024-25 and FY 2025-26 (12 quarterly cycles)</td></tr>
                            <tr><td>Refund mix</td><td>Zero-rated LUT Rule 89(4) 70 percent, Deemed export Section 147 (EPCG supply) 30 percent</td></tr>
                            <tr><td>Total recovered across 12 cycles</td><td>Rs 1,70,00,000</td></tr>
                            <tr><td>HS codes covered</td><td>Chapters 72, 73, 84, 87 (iron and steel, machinery, vehicles)</td></tr>
                            <tr><td>Average RFD-04 provisional 90 percent sanction</td><td>9 days from RFD-02 (within Section 54(6) 7-day target)</td></tr>
                            <tr><td>Average RFD-06 final sanction time</td><td>52 days (well within Section 54(7) 60-day ceiling)</td></tr>
                            <tr><td>Working capital lock-in reduction</td><td>38 percent vs prior consultant baseline</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Engineering Refund Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>IDS refund rejected for incorrect Rule 89(5) formula application</td><td>Statement 1A computation either omitted the post-July 2022 subtraction term or wrongly included input services and capital goods in Net ITC; rejection under Rule 90</td><td>Patron recomputes the maximum refund using the Notification 14/2022-CT amended formula, separating input goods ITC from input services and capital goods ITC per Supreme Court VKC Footsteps ruling, and refiles with Statement 1A within the Section 54(1) 2-year window</td></tr>
                        <tr><td>Capital goods ITC accumulated with no refund route</td><td>Engineering exporter has high CapEx (CNC machines, foundry plant, forging presses) with capital goods ITC stuck - both Rule 89(4) and Rule 89(5) formulas exclude it from Net ITC</td><td>Patron maps EPCG eligibility under FTP 2023 Chapter 5 (0 percent customs + IGST exemption against 6x export obligation over 6 years) and structures deemed-export supplies to EPCG holders for refund through the supplier-or-recipient option under Section 147 and Notification 48/2017-CT</td></tr>
                        <tr><td>ICEGATE refund stuck at SB001 / SB003 / SB005 / SB006 errors</td><td>SB number mismatch, GSTIN mismatch, invalid invoice details, or EGM not filed at gateway port; refund scroll blocked under Rule 96</td><td>Patron pulls invoice-SB pairings from GSTR-1 and ICEGATE, files Table 9A amendment in next GSTR-1 to correct invoice number, GSTIN, port code, or pursues gateway EGM filing with the carrier and proper officer</td></tr>
                        <tr><td>Project-export refund stalled due to multi-year contract structure</td><td>Mobilisation advance, retention, and multi-year shipping bills under turnkey contract make refund cycle hard to map to a single tax period</td><td>Patron coordinates with AD Bank Category I or Exim Bank for PEM 2014 post-award approval, maps mobilisation advance versus retention for each shipping cycle, and staggers refund filings aligned to each shipping milestone</td></tr>
                        <tr><td>Bicycle parts and agricultural implement IDS legacy claims</td><td>Pre-September-2025 GST 2.0 rate rationalisation, bicycle parts had 5 percent output vs 18 percent input; IDS claims for past periods may still be open under 2-year Section 54(1) window</td><td>Patron identifies all eligible past IDS periods within the 2-year window from each GSTR-3B due date, files fresh Form GST RFD-01 with Statement 1A using amended Rule 89(5) formula for the relevant tax periods, recovers legacy refunds</td></tr>
                        <tr><td>RoDTEP and GST refund double-claim flag</td><td>RoDTEP claim on shipping bill from Appendix 4R sometimes flagged as overlapping with GST refund on the same SB; both refunds frozen pending clarification</td><td>Patron prepares RoDTEP-vs-GST reconciliation map - RoDTEP refunds embedded central, state, and local levies not refunded under GST, while GST refund is on input GST - submits clarification with both worksheets; both are non-overlapping benefits</td></tr>

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
            <h2 class="section-title">Engineering Exporter Refund Fees and Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (LUT Filing - Annual)</td><td class="table-amount">Starting from Rs 4,999 per LUT (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Single Export Refund Cycle (RFD-01, up to 50 invoices, single tax period)</td><td class="table-amount">Rs 11,999 per filing (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Inverted Duty Refund (Statement 1A under Rule 89(5))</td><td class="table-amount">Rs 17,999 per refund cycle (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Deemed-Export Refund (Statement 5B - EPCG / AA Supplies)</td><td class="table-amount">Rs 16,999 per refund cycle (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Monthly Retainer (All 3 Mechanisms Covered)</td><td class="table-amount">Rs 24,999 per month (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Annual Engineering Refund Retainer (12-Month End-to-End)</td><td class="table-amount">Rs 1,99,999 per annum (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>EPCG Planning and Capital Goods ITC Strategy</td><td class="table-amount">Rs 49,999 per engagement (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Project-Export PEM 2014 Coordination</td><td class="table-amount">Rs 75,000 per contract (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Section 107 Appeal (Refund Rejection)</td><td class="table-amount">Rs 60,000 plus success fee (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Success Fee (Discretionary on Recovery)</td><td class="table-amount">1 to 3 percent of refund recovered (on actual recovery)</td></tr>
                        <tr><td>Government / Statutory Fees</td><td class="table-amount">No separate government fee for RFD-11 or RFD-01 filing</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Engineering Exporter Refund consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20for%20Engineering%20Exporters.%20Please%20contact%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Engineering Refund Timeline by Stage</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>GSTIN, IEC, AD-code, EEPC RCMC setup (one-time)</td><td>5 to 10 working days</td></tr>
                        <tr><td>LUT filing (Form RFD-11) and ARN generation</td><td>Same day after sign-off</td></tr>
                        <tr><td>Regular SB filing on ICEGATE</td><td>Same day as export</td></tr>
                        <tr><td>GSTR-1 Table 6A filing</td><td>By 11th of following month (monthly filers)</td></tr>
                        <tr><td>GSTR-3B Table 3.1(b) filing</td><td>By 20th of following month (monthly filers)</td></tr>
                        <tr><td>IGST auto-refund (regular SB via ICEGATE-PFMS)</td><td>7 to 15 days from EGM filing (Rule 96 + Section 54(6))</td></tr>
                        <tr><td>LUT route provisional 90 percent refund</td><td>Within 7 days of RFD-02 (Section 54(6) + Rule 91)</td></tr>
                        <tr><td>LUT route final RFD-06 sanction</td><td>Within 60 days of RFD-01 (Section 54(7))</td></tr>
                        <tr><td>Inverted duty refund cycle</td><td>30 to 60 days end-to-end (Section 54(7) + Rule 89(5) scrutiny)</td></tr>
                        <tr><td>Deemed-export refund cycle</td><td>30 to 60 days (Section 147 + Notification 48/2017-CT)</td></tr>
                        <tr><td>Project-export refund (multi-year)</td><td>Per shipping cycle plus year-end FIRC reconciliation</td></tr>
                        <tr><td>Interest if refund delayed beyond 60 days</td><td>6 percent per annum (Section 56); 9 percent for appellate orders</td></tr>
                        <tr><td>Statutory time limit (Section 54(1))</td><td>2 years from relevant date</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note on the parallel statutory clocks:</strong> Section 54(6) of the CGST Act 2017 read with Rule 91 of CGST Rules 2017 mandates 90 percent provisional refund within 7 days of RFD-02 for zero-rated supplies (Route A). From October 2025, CBIC Instruction 6/2025 extended this mechanism to broader eligible categories including inverted duty. Three statutory clocks run together: 9-month FEMA window for export-proceeds realisation, 2-year refund limitation under Section 54(1), and LUT validity under Rule 96A for each financial year. For EPCG holders, the 6-year export obligation period under FTP 2023 Chapter 5 runs in parallel - missing it triggers full duty recovery with interest.</p>

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
            <h2 class="section-title">4 Reasons Why CA-Led Engineering Refund Filing Beats DIY or Software-Only</h2>
        </div>
        <div class="features-grid">
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M2 12h20"/></svg>
                    </div>
                    <h3>Three-Mechanism Mapping Per HS Code and Cluster</h3>
                    <p>Software defaults engineering exporters into the zero-rated route only. Patron maps each transaction to Route A (zero-rated under Section 16 IGST), Route B (inverted duty under Rule 89(5) for bicycle parts and specific implements), or Route C (deemed export under Section 147 for EPCG/AA supplies). The mix unlocks Rs 15 to Rs 40 lakh of incremental refund per year for typical Tier-1 auto suppliers.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg>
                    </div>
                    <h3>Rule 89(5) Formula Post-Notification 14/2022 Compliance</h3>
                    <p>Most rejected IDS refunds stem from incorrect Rule 89(5) formula application - missing the subtraction term added by Notification 14/2022-CT dated 5 July 2022 or wrongly including input services and capital goods in Net ITC. Patron's Statement 1A worksheet implements the amended formula with Supreme Court VKC Footsteps (2021) restrictions baked in, dropping rejection rate to under 5 percent.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                    </div>
                    <h3>Capital Goods ITC Recovery via EPCG and Deemed Exports</h3>
                    <p>Rule 89(4) and Rule 89(5) both exclude capital goods ITC from refund. For capital-intensive engineering exporters (CNC machines, foundry plant, forging presses), this would be permanently locked - except Patron structures EPCG planning under FTP 2023 Chapter 5 plus deemed-export supplies to EPCG holders under Section 147 to recover what is otherwise stuck.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3>Cluster-Specific Operational Knowledge</h3>
                    <p>Ludhiana hand tools, Rajkot auto components, Coimbatore pumps and motors, Faridabad OEM components, Pune Tier-1 supply, Jamnagar brass parts - each cluster has distinct HS codes, input-output rate profiles, and EPCG patterns. Patron's cluster playbooks reduce onboarding time by 60 percent versus generalist consultants.</p>
                </article>
            </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Indian Engineering Exporters</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Engineering Exporter and GST Compliance</strong></p>
                <h3>Trusted By</h3>
                <p>Hyundai, Asian Paints, Bridgestone, and 200+ Indian engineering exporters across Ludhiana hand tools, Rajkot auto components, Coimbatore pumps and motors, Faridabad OEM components, Pune Tier-1 suppliers, Jamnagar brass parts, Belgaum and Kolhapur foundry, Bengaluru and Hosur machine tools, and Howrah engineering goods.</p>
                <h3>Outcome Proof</h3>
                <p>A Rajkot-based auto-component exporter recovered Rs 1.7 crore across 12 quarterly cycles between FY 2024-25 and FY 2025-26 through a mix of zero-rated LUT refund and EPCG-driven deemed-export refund - cutting working capital lock-in by 38 percent versus prior consultant baseline. RFD-04 provisional 90 percent averaged 9 days from RFD-02; RFD-06 final within 52 days.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves engineering exporters across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">3 Refund Mechanisms for Engineering Exporters - Comparison Matrix</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Route A: Zero-Rated</th><th>Route B: IDS Refund</th><th>Route C: Deemed Export</th></tr></thead>
                    <tbody>
                        <tr><td>Statutory Anchor</td><td>Section 16 IGST Act 2017 plus Rule 89(4) or Rule 96 CGST Rules</td><td>Section 54(3)(ii) CGST Act plus Rule 89(5) CGST Rules</td><td>Section 147 CGST Act plus Notification 48/2017-CT</td></tr>
                        <tr><td>Trigger Condition</td><td>Physical export of engineering goods out of India</td><td>Output GST rate lower than input GST rate on engineering goods</td><td>Domestic supply against EPCG or Advance Authorisation holder</td></tr>
                        <tr><td>Form / Statement</td><td>Shipping Bill (auto) for IGST or RFD-01 with Statement 3A for LUT</td><td>Form RFD-01 with Statement 1A</td><td>Form RFD-01 with Statement 5B</td></tr>
                        <tr><td>Refund Quantum</td><td>IGST paid (auto) or accumulated ITC under Rule 89(4) formula</td><td>Maximum refund per Rule 89(5) post-July 2022 amended formula</td><td>Tax paid by supplier on deemed-export invoice</td></tr>
                        <tr><td>Capital Goods ITC</td><td>Excluded - not refundable</td><td>Excluded - not refundable</td><td>Tax paid component refundable; CapEx flow via EPCG separate</td></tr>
                        <tr><td>Input Services ITC</td><td>Refundable under Rule 89(4) formula</td><td>Excluded - per Supreme Court VKC Footsteps ruling (2021)</td><td>Refundable on supplier's invoice tax</td></tr>
                        <tr><td>Typical Timeline</td><td>IGST 7 to 15 days; LUT 30 to 60 days</td><td>30 to 60 days end-to-end</td><td>30 to 60 days end-to-end</td></tr>
                        <tr><td>Provisional 90 Percent (CBIC Instr 6/2025)</td><td>Yes - within 7 days under Section 54(6)</td><td>Yes from October 2025 - within 7 days</td><td>Yes where applicable</td></tr>
                        <tr><td>Best For</td><td>Most engineering exporters with input-output rate parity</td><td>Bicycle parts, agricultural implements, specific hand tools</td><td>EPCG and AA holders, capital-intensive engineering exporters</td></tr>

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
            <h2 class="section-title">Related GST and Engineering Compliance Services</h2>
            <div class="content-text">
                
                <p>Engineering export refund work rarely sits in isolation. Most exporters need adjacent compliance running in parallel:</p>
                <ul>
                    <li><a href="/gst-refund/">GST Refund</a> - parent practice covering all Section 54 refund categories beyond engineering exports such as excess balance, tax paid in error, or appeal-related refunds</li>
                    <li><a href="/gst-returns/">GST Returns</a> - monthly GSTR-1 (Tables 6A for exports and 6C for deemed exports) and GSTR-3B Table 3.1(b) that anchor every refund claim</li>
                    <li><a href="/gst-annual-returns/">GST Annual Returns</a> - GSTR-9 and GSTR-9C reconciliation that ties together all refund cycles in a financial year</li>
                    <li><a href="/gst-audit/">GST Audit</a> - for engineering exporters above the prescribed turnover threshold; departmental GSTR-9C reconciliation; pre-audit documentation</li>
                    <li><a href="/gst-registration/">GST Registration</a> - mandatory under Section 22 CGST Act once aggregate turnover crosses Rs 40 lakh for goods</li>
                    <li><a href="/gstat-appeal-exporters/">GSTAT Appeal - Exporters</a> - escalation route when an IDS computation, deemed-export refund order, or capital goods classification is rejected</li>
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
                
                <h3>Section 16 of IGST Act 2017</h3>
                <p>Defines zero-rated supply (exports + SEZ). Section 16(3) provides two refund routes for engineering exports: LUT/bond without IGST payment with refund of accumulated ITC under Rule 89(4), or IGST-paid with refund of IGST under Rule 96. Capital goods ITC is excluded from the Rule 89(4) formula, recoverable only via EPCG planning or output-tax utilisation.</p>
                <h3>Section 54 of CGST Act 2017</h3>
                <p>Section 54(1) - 2-year limitation from relevant date. Section 54(3)(ii) - substantive right to refund of unutilised ITC where input GST rate exceeds output GST rate. Section 54(6) - provisional 90 percent refund for zero-rated supplies. Section 54(7) - final refund within 60 days. Section 56 - 6 percent interest if delayed beyond 60 days; 9 percent for appellate orders.</p>
                <h3>Section 147 of CGST Act 2017</h3>
                <p>Empowers the Central Government to notify deemed exports. Operationalised by Notification 48/2017-Central Tax dated 18 October 2017 listing four categories: supplies against Advance Authorisation, capital goods against EPCG Authorisation, supplies to EOUs, and gold against Advance Authorisation by banks or notified PSUs.</p>
                <h3>Rule 89(4) of CGST Rules 2017</h3>
                <p>Refund formula for accumulated ITC on zero-rated supply: Refund Amount = (Turnover of zero-rated supply of goods plus services) x Net ITC / Adjusted Total Turnover. Capital goods ITC is excluded from Net ITC.</p>
                <h3>Rule 89(5) of CGST Rules 2017 (Amended by Notification 14/2022-CT)</h3>
                <p>Refund formula for inverted duty structure. Notification 14/2022-Central Tax dated 5 July 2022 amended the formula to introduce a subtraction term linked to input services and capital goods ITC, applicable prospectively per CBIC Circular 181/13/2022-GST dated 10 November 2022. Net ITC limited to input goods only - Supreme Court in Union of India v VKC Footsteps India Pvt Ltd (2021) upheld this restriction.</p>
                <h3>Rule 96 of CGST Rules 2017</h3>
                <p>IGST-paid auto-refund route. Shipping bill is deemed application; ICES validates against GSTN; PFMS disburses to exporter bank account. SB000-SB006 response codes track status. Rule 96(10) omitted from 8 October 2024 by Notification 20/2024-CT - removing earlier restriction on combining concessional supply benefits with IGST refund.</p>
                <h3>Rule 96A of CGST Rules 2017</h3>
                <p>LUT mechanism in Form GST RFD-11. Valid for one financial year. Subject to Notification 37/2017-CT prosecution eligibility test (no prosecution for tax evasion above Rs 2.5 crore).</p>
                <h3>Notification 48/2017-Central Tax (18.10.2017) and Notification 49/2017-CT</h3>
                <p>48/2017-CT lists supplies against EPCG and Advance Authorisation as deemed exports under Section 147. 49/2017-CT prescribes evidence requirements - undertaking from the non-claiming party that they will not claim refund on the same invoice.</p>
                <h3>Notification 14/2022-Central Tax (5 July 2022)</h3>
                <p>Amended Rule 89(5) IDS formula to introduce subtraction term. The intent was to ensure refund does not exceed unutilised ITC actually attributable to input goods on inverted-rated supplies. Operationalised prospectively from notification date per Circular 181/13/2022-GST.</p>
                <h3>Supreme Court - Union of India v VKC Footsteps India Pvt Ltd (2021)</h3>
                <p>Supreme Court upheld validity of Rule 89(5) restriction limiting Net ITC to ITC on input goods only - excluding both input services and capital goods. This is now the settled position binding all High Courts and tribunals.</p>
                <h3>Circular 181/13/2022-GST (10 November 2022) and CBIC Instruction 6/2025</h3>
                <p>Circular 181/13/2022-GST clarifies prospective applicability of the amended Rule 89(5) formula from 5 July 2022. CBIC Instruction 6/2025 from October 2025 extended the 90 percent provisional refund mechanism within 7 days to broader eligible categories including inverted duty.</p>
                <h3>FTP 2023 Chapter 5 (EPCG) and RBI PEM 2014</h3>
                <p>EPCG scheme allows import of capital goods at 0 percent customs duty plus IGST exemption against export obligation of 6 times duty saved over 6 years. RBI Master Direction on Project and Service Exports (PEM 2014) defines project exports and prescribes post-award approval from AD Bank Category I or Exim Bank before commencement.</p>

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
                    <p class="faq-expanded__lead">Common questions about GST refund for Indian engineering exporters - covering three refund mechanisms (zero-rated, IDS, deemed export), Rule 89(5) post-July 2022 amended formula, capital goods ITC exclusion and EPCG recovery, project exports under RBI PEM 2014, RoDTEP interaction, and cluster-specific patterns across Ludhiana, Rajkot, Coimbatore.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Engineering Exporter Refund',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How does an Indian engineering exporter claim GST refund?</h3>
                        <div class="faq-expanded__a"><p>Three parallel routes apply. Route A: zero-rated export under Section 16 IGST Act with two sub-options - IGST paid (auto-refund through ICEGATE under Rule 96) or under LUT (accumulated ITC refund under Rule 89(4) via RFD-01). Route B: inverted duty structure refund under Section 54(3)(ii) and Rule 89(5) where output GST rate is lower than input GST rate. Route C: deemed-export refund under Section 147 for supplies against EPCG and Advance Authorisation. Most engineering exporters use Route A with selective Route B and C overlay.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is inverted duty structure and how is it computed?</h3>
                        <div class="faq-expanded__a"><p>Inverted duty structure (IDS) arises when the GST rate on inputs is higher than the GST rate on outputs, resulting in accumulated unutilised ITC. Refund is computed under Rule 89(5) using the post-July 2022 amended formula: Maximum Refund = (Turnover of inverted rated supply x Net ITC / Adjusted Total Turnover) minus (Tax payable on inverted rated supply x Net ITC / ITC availed on inputs and input services). Net ITC for this purpose is limited to ITC on input goods only - input services and capital goods are excluded.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Engineering exporter ka GST refund kaise milega?</h3>
                        <div class="faq-expanded__a"><p>Teen tarike hain: pehla, regular export under Section 16 IGST Act - IGST pay karke shipping bill auto-refund application bann jaata hai ya LUT route me Form RFD-01 me accumulated ITC refund. Doosra, agar input GST rate output rate se zyada hai (inverted duty), to Rule 89(5) ke under Statement 1A me refund. Teesra, EPCG ya Advance Authorisation holders ko supply ki to Section 147 ke under deemed export refund. Capital goods ITC dono routes me refund nahi milta - EPCG scheme se hi handle karna hota hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can engineering exporters claim refund of capital goods ITC?</h3>
                        <div class="faq-expanded__a"><p>Not directly under Rule 89(4) zero-rated formula nor Rule 89(5) IDS formula - both exclude capital goods from Net ITC. The Supreme Court ruling in Union of India v VKC Footsteps India Pvt Ltd (2021) confirmed this restriction. The two practical recovery routes are: (a) the Export Promotion Capital Goods (EPCG) scheme under FTP 2023 Chapter 5, which exempts IGST on capital goods import against export obligation of 6 times duty saved over 6 years, and (b) utilisation against output GST on domestic sales where the exporter has a mixed domestic and export portfolio.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Are forgings, castings, and brass parts under inverted duty structure?</h3>
                        <div class="faq-expanded__a"><p>Mostly no. Forgings (Ludhiana), castings (Coimbatore, Belgaum, Kolhapur), and brass parts (Jamnagar, Rajkot) are typically taxed at 18 percent GST on output, with most input materials (steel, brass scrap, copper) also at 18 percent GST - no rate inversion. Specific subsectors with historical IDS exposure include bicycle parts (was 5 percent output) and certain agricultural implements (12 percent output). Post the September 2025 GST 2.0 rate rationalisation, IDS in engineering has reduced further; legacy claims for past periods continue under the 2-year Section 54(1) window.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is a project export under RBI rules and how does GST refund apply?</h3>
                        <div class="faq-expanded__a"><p>Project export is defined under the RBI Master Direction on Project and Service Exports (PEM 2014) as export of engineering goods on deferred payment terms plus turnkey projects plus civil construction abroad. Indian exporters must obtain post-award approval from AD Bank Category I or Exim Bank before commencement. GST refund applies through the standard zero-rated mechanism (Section 16 IGST Act) but documentation tracks mobilisation advance, retention, multi-year shipping bills, and FIRC realisation across the contract life. Patron Accounting structures the refund cycle to align with each shipping milestone.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is RoDTEP available for engineering exports and how does it interact with GST refund?</h3>
                        <div class="faq-expanded__a"><p>Yes. RoDTEP (Remission of Duties and Taxes on Exported Products) is administered by DGFT separately from GST refund and remits embedded central, state, and local levies not refunded under GST. Engineering goods rates under Appendix 4R range from 0.3 percent to 4.3 percent of FOB value; e-scrips are issued on ICEGATE and used to pay basic customs duty. RoDTEP and GST refund are non-overlapping benefits - both claimable on the same shipment. From 1 June 2025, EOU and SEZ exports were also brought under Appendix 4RE.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Inverted duty refund kya hota hai engineering exporters ke liye?</h3>
                        <div class="faq-expanded__a"><p>Agar input ka GST rate output ke rate se zyada hai, to ITC accumulate hota rehta hai. Section 54(3)(ii) ke under aur Rule 89(5) ke formula se refund mil sakta hai. Net ITC sirf input goods ka counted hota hai - input services aur capital goods exclude hote hain. Engineering me kuch specific subsectors me apply hota hai jaise bicycle parts ya agricultural implements; wider engineering goods (forgings, castings, brass parts) me usually rate parity hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">How do EPCG and deemed exports interact for engineering exporters?</h3>
                        <div class="faq-expanded__a"><p>EPCG (Export Promotion Capital Goods) scheme under FTP 2023 Chapter 5 lets engineering exporters import capital goods at 0 percent customs duty plus IGST exemption against export obligation of 6 times duty saved over 6 years. Domestic supply against an EPCG holder is a deemed export under Section 147 read with Notification 48/2017-Central Tax, with refund of supplier-paid GST claimable in Form GST RFD-01 with Statement 5B. Either the supplier or the EPCG-holder recipient can claim refund (not both for the same invoice).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Which engineering clusters does Patron Accounting actively serve?</h3>
                        <div class="faq-expanded__a"><p>Patron Accounting LLP serves engineering exporters across all major Indian clusters - Ludhiana (hand tools, forgings, bicycle parts), Rajkot (auto components, diesel engines, brass parts), Coimbatore (pumps, motors, foundry castings), Faridabad and Gurugram (auto OEM components), Pune and Aurangabad (auto components, valves), Belgaum and Kolhapur (foundry), Bengaluru and Hosur (machine tools, gears), Jamnagar (brass parts), and Howrah. We have offices in Pune, Mumbai, Delhi, and Gurugram with pan-India remote support.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Which Section permits IDS refund?</strong> Section 54(3)(ii) of the CGST Act 2017.</li>
                    <li><strong>Which Rule prescribes the IDS formula?</strong> Rule 89(5) of the CGST Rules 2017 (amended 5 July 2022 by Notification 14/2022-CT).</li>
                    <li><strong>Is capital goods ITC refundable?</strong> No - excluded under both Rule 89(4) and Rule 89(5).</li>
                    <li><strong>Are input services refundable in IDS?</strong> No - excluded per Rule 89(5) and Supreme Court VKC Footsteps ruling (2021).</li>
                    <li><strong>Where do engineering exports report in GSTR-1?</strong> Table 6A; mirrored in Table 3.1(b) of GSTR-3B.</li>
                    <li><strong>Time limit for IDS refund?</strong> 2 years from the relevant date (GSTR-3B due date for the period) under Section 54(1).</li>
                    <li><strong>Statement number for IDS refund?</strong> Statement 1A under Rule 89(5).</li>
                    <li><strong>Statement number for deemed-export refund?</strong> Statement 5B under Section 147.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Engineering Refund Statutory Deadlines and 4 Parallel Clocks</h2>
            <div class="content-text">
                
                <p>Four statutory clocks run together for an engineering exporter. Miss any one and the consequences differ but each is material:</p>
                <ul>
                    <li><strong>9-month FX realisation window</strong> - RBI Master Direction on Export of Goods and Services; without timely realisation or RBI extension, refund eligibility lapses and Rule 96B-style ITC reversal triggers for IGST-paid route</li>
                    <li><strong>2-year refund limitation under Section 54(1)</strong> - counted from relevant date; permanent loss of right; no condonation under Section 54 itself</li>
                    <li><strong>LUT FY 2026-27 filing</strong> - before 31 March 2026 (or first export of FY 2026-27); every export from 1 April 2026 attracts IGST upfront if LUT not on record under Rule 96A</li>
                    <li><strong>EPCG 6-year export obligation</strong> - FTP 2023 Chapter 5; falling short triggers full duty recovery plus 18 percent interest under Customs Act 1962</li>
                    <li><strong>RFD-02 acknowledgement</strong> - within 15 days of RFD-01 (Rule 90(2)); escalate via grievance under Rule 90 if officer fails</li>
                    <li><strong>RFD-04 provisional 90 percent</strong> - within 7 days of RFD-02 (Section 54(6) for zero-rated; CBIC Instruction 6/2025 from Oct 2025 for IDS)</li>
                    <li><strong>RFD-06 final sanction</strong> - within 60 days of RFD-01 (Section 54(7)); 6 percent Section 56 interest if delayed; 9 percent for appellate orders</li>
                    <li><strong>Section 107 appeal</strong> - within 3 months of refund rejection; 10 percent pre-deposit</li>
                    <li><strong>Section 112 GSTAT appeal</strong> - within 3 months of Appellate Authority order; additional 10 percent pre-deposit</li>
                </ul>
                <p><strong>Engage Patron Accounting for engineering exporter compliance retainer - share GSTIN, IEC, AD code status, cluster, HS-code mix, EPCG status, and last 12 months GSTR-1 / GSTR-3B. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20engineering%20exporter%20GST%20refund%20help%20-%20zero-rated%2C%20IDS%2C%20or%20deemed%20export%20routes." target="_blank">WhatsApp us now</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron's Engineering Refund Team</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">GST refund for engineering exporters is the difference between recovering working capital every month versus watching it pile up across quarters of shipments and CapEx. Section 16 of the IGST Act, Rule 89(4) and Rule 89(5) of the CGST Rules, Section 147 read with Notification 48/2017-CT, and the RBI PEM 2014 framework together set up a three-mechanism refund landscape that rewards correct route choice between zero-rated, IDS, and deemed-export plus meticulous reconciliation across GSTR-1, ICEGATE, and EPCG documentation.</p>
                <p style="color:rgba(255,255,255,0.92);">Notification 14/2022-CT dated 5 July 2022 amended the Rule 89(5) IDS formula introducing the subtraction term, with prospective applicability clarified by Circular 181/13/2022-GST. The Supreme Court in Union of India v VKC Footsteps India Pvt Ltd (2021) upheld Rule 89(5) restriction limiting Net ITC to input goods only. CBIC Instruction 6/2025 from October 2025 extends 90 percent provisional refund within 7 days to broader eligible categories. Engineering exporters who structure their refund mix across all three mechanisms recover materially more cash, materially faster.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP's CA and CS team handles the end-to-end engineering refund stack - LUT renewal, AD-code registration, ICEGATE error remediation, IDS Rule 89(5) computation, EPCG planning, and project-export multi-year coordination. With offices in Pune, Mumbai, Delhi, and Gurugram and a national client base of 10,000+ businesses, we are equipped to manage refund cycles for engineering exporters across all major clusters - Ludhiana, Rajkot, Coimbatore, Faridabad, Pune, Aurangabad, Belgaum, Bengaluru, Jamnagar, and Howrah.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20for%20Engineering%20Exporters.%20Please%20contact%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20GST%20Refund%20for%20Engineering%20Exporters&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20GST%20refund%20services%20for%20engineering%20exporters%20-%20zero-rated%20route%2C%20inverted%20duty%20structure%20under%20Rule%2089(5)%2C%20or%20deemed%20exports%20to%20EPCG%2FAA%20holders.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Related GST and Engineering Compliance Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end GST refund and engineering exporter compliance coverage - from LUT filing through to GSTAT Section 112 escalation for refund rejection appeals.</p>
            <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for GST Refund for Engineering Exporters</div>
                    <div class="pa-cross-grid">
                        <a href="/gst-refund/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Refund</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gstat-appeal-exporters/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal - Exporters</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gstat-appeal-filing/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal Filing</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-registration/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-returns/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-annual-returns/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Annual Returns</div><div class="pa-card-sub">India</div></div></a>
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
            <p>Reviewed every 3 months under Tier 1 freshness cycle. Triggers for earlier review: any GST Council notification on Rule 89(5) IDS formula or Rule 96 auto-refund, CBIC circular on engineering or EPCG procedure, DGFT notification on FTP Chapter 5 EPCG or RoDTEP Appendix 4R, RBI master direction on FEMA or PEM 2014, or Supreme Court / High Court ruling on capital goods ITC.</p>
        </div>
    </div>
</section>

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