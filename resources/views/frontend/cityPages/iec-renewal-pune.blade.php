
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>IEC Code Renewal in Pune - DGFT Process, Fees & Deadline</title>
    <meta name="description" content="CA-assisted IEC renewal and annual updation in Pune on DGFT portal. April-June deadline compliance, IEC reactivation, modification. Serving Pune exporters. Call +91 945 945 6700.">
    <link rel="canonical" href="/iec-renewal/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IEC Code Renewal in Pune - DGFT Process, Fees & Deadline">
    <meta property="og:description" content="CA-assisted IEC renewal and annual updation in Pune on DGFT portal. April-June deadline compliance, IEC reactivation, modification. Serving Pune exporters. Call +91 945 945 6700.">
    <meta property="og:url" content="/iec-renewal/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IEC Code Renewal in Pune - DGFT Process, Fees & Deadline">
    <meta name="twitter:description" content="CA-assisted IEC renewal and annual updation in Pune on DGFT portal. April-June deadline compliance, IEC reactivation, modification. Serving Pune exporters. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "IEC Renewal in Pune",
      "description": "CA-assisted IEC renewal and annual updation in Pune on DGFT portal. April-June deadline compliance, IEC reactivation, modification. Serving Pune exporters. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/iec-renewal/pune",
      "serviceType": "IEC Renewal in Pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
        }
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
        "url": "https://www.patronaccounting.com/iec-renewal/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "200",
          "maxPrice": "1999",
          "priceCurrency": "INR"
        }
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
          "name": "IEC Renewal: Deadline and Process",
          "item": "https://www.patronaccounting.com/iec-renewal"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "IEC Renewal in Pune",
          "item": "https://www.patronaccounting.com/iec-renewal/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is IEC renewal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IEC renewal is the mandatory annual updation or confirmation of IEC details on the DGFT portal between April 1 and June 30 per DGFT Notification 58/2015-20. The IEC has lifetime validity but its active status depends on completing this annual exercise. Non-updation by June 30 leads to automatic deactivation from July 1."
          }
        },
        {
          "@type": "Question",
          "name": "How to renew IEC in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Log into DGFT portal dgft.gov.in, navigate to Update Modify IEC, review each section, confirm or modify as needed, authenticate using DSC or Aadhaar eSign, and submit. No government fee for simple confirmation. Rs 200 for modifications. Patron handles complete process from Pune office."
          }
        },
        {
          "@type": "Question",
          "name": "What is the deadline for IEC renewal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Annual updation window is April 1 to June 30 every year. If not completed by June 30, DGFT automatically deactivates the IEC from July 1. No import or export possible until reactivated. Patron recommends starting in April and not waiting until last week of June."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if IEC is not renewed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IEC automatically deactivated from July 1. Customs blocks import and export, shipping bills cannot be generated on ICEGATE, goods held at ICD Dighi or Talegaon with demurrage, banks may refuse foreign exchange, and export incentives like RoDTEP and SEIS cannot be claimed."
          }
        },
        {
          "@type": "Question",
          "name": "How to reactivate a deactivated IEC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Complete the updation process on DGFT portal. Log in, update or confirm details, authenticate with DSC or Aadhaar eSign, pay Rs 200 if modifications made, and submit. Status changes to Valid and transmits to customs system within 1 to 3 working days."
          }
        },
        {
          "@type": "Question",
          "name": "Is IEC renewal free?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If no changes are made and you are simply confirming existing details there is no government fee. If modifying details such as address directors or bank accounts Rs 200 government fee applies. Professional service fees start from Rs 1,999 for end-to-end renewal."
          }
        },
        {
          "@type": "Question",
          "name": "What details can be updated during IEC renewal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Registered address, branch addresses, contact information, bank account details, directors or partners addition or removal, and nature of business. Changes must be consistent with GST certificate, PAN, and bank records. Patron cross-verifies all data."
          }
        },
        {
          "@type": "Question",
          "name": "Do IT services companies need IEC renewal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. IT services companies in Hinjewadi and Kharadi holding IEC for software exports must complete annual updation. Active IEC needed for FIRC issuance and eBRC. Deactivated IEC creates remittance complications and blocks SEIS incentive claims. Quick Answers IEC renewal kaise hota hai Pune mein? DGFT portal pe login karo, 'Update/Modify IEC' pe jao, har section check aur save karo, DSC ya Aadhaar se authenticate karo, submit karo. Koi change nahi to free hai. Change hai to Rs 200. Patron Pune se handle karta hai. IEC deactivate ho gaya to kya kare? DGFT portal pe login karo aur IEC update/confirm karo. Submit hone ke baad automatically reactivate ho jayega. 1-3 din mein customs system update. Patron reactivation handle karta hai. IT company ko bhi IEC update karna padta hai? Haan! Software export karne wali companies ko bhi annually update zaroori. FIRC aur eBRC ke liye active IEC chahiye. SEIS benefits bhi deactivated IEC pe nahi milte."
          }
        }
      ]
    }
  ]
}</script>
@endsection

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

@section('content')
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
                        IEC Renewal in Pune: CA-Assisted Annual Updation and Reactivation
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">18 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Requirement:</span> All IEC holders must update/confirm details annually on DGFT portal between April 1 and June 30 - even if no changes (DGFT Notification 58/2015-20)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Consequence:</span> Non-compliance leads to automatic IEC deactivation from July 1 - shipments blocked at customs, export incentives lost</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fee:</span> No government fee for annual confirmation (no changes); Rs 200 for modifications; professional fees from Rs 1,999</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Same-day to 24 hours for annual updation; 1-3 days for reactivation of deactivated IEC</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Pune office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20IEC%20Renewal%20in%20Pune&body=Hello%20Patron%2C%0A%0AI%20need%20IEC%20renewal.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IEC%20renewal%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'IEC Renewal',
                                            'city'     => 'Pune',
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
    'ctaText'    => 'From auto exporters in Chakan to pharma in MIDC to IT services in Hinjewadi - Pune exporters trust Patron for IEC renewal.',
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
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Renewal vs Mod vs New</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC Renewal in Pune: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IEC Renewal Services at a Glance</strong></p>
                    <p>The IEC has lifetime validity but requires mandatory annual updation on the DGFT portal between April 1 and June 30 (DGFT Notification 58/2015-20). If not updated by June 30, it is automatically deactivated from July 1 - customs blocks shipments, export incentives lost. Deactivated IEC can be reactivated by completing the updation. Pune's exporters across auto (Chakan), pharma (MIDC Bhosari), IT (Hinjewadi), and agriculture all require annual IEC updation to maintain uninterrupted trade via ICD Dighi, ICD Talegaon, and JNPT.</p>
                </div>
                <p>Pune's export ecosystem generates significant IEC renewal demand every April-June cycle. Auto component manufacturers in Chakan, pharma exporters in MIDC Bhosari, IT services companies in Hinjewadi/Kharadi, and agricultural exporters all hold IECs needing annual updation. A deactivated IEC blocks shipments at ICD Dighi and ICD Talegaon. Learn more about <a href="/iec-renewal">IEC renewal across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Legal Basis</td><td>DGFT Notification 58/2015-20 (12 Feb 2021); Trade Notice 31/2021-22; FT(D&R) Act 1992</td></tr>
                        <tr><td>Updation Window</td><td>April 1 to June 30 every year</td></tr>
                        <tr><td>Deactivation Date</td><td>July 1 (automatic if not updated by June 30)</td></tr>
                        <tr><td>Portal</td><td>dgft.gov.in - 'Update/Modify IEC'</td></tr>
                        <tr><td>Fee (No Changes)</td><td>Free - no government fee for annual confirmation</td></tr>
                        <tr><td>Fee (Modifications)</td><td>Rs 200 government fee</td></tr>
                        <tr><td>Reactivation</td><td>Complete updation on DGFT portal - auto-approved upon submission</td></tr>
                        <tr><td>Applies To</td><td>All IEC holders - whether actively trading or not</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>The most common issue: businesses obtain IEC, start trading, then forget the annual updation because IEC has 'lifetime validity'. The lifetime validity refers to the code not expiring - but DGFT requires annual confirmation. Patron provides IEC renewal alongside <a href="#">new IEC registration</a>, <a href="/ad-code-registration">AD code registration</a>, and <a href="/gst-registration">GST compliance for exporters</a>.</p>
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
                <h2 class="section-title">What Is IEC Renewal?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>IEC renewal (formally 'IEC updation' or 'annual confirmation') is the mandatory process of confirming or updating IEC details on the DGFT portal between April 1 and June 30 every year, per DGFT Notification 58/2015-20 dated 12 February 2021. The IEC itself does not expire - it has lifetime validity. What expires is its 'active' status if the annual updation is not completed.</p>
                    <p>During updation, the IEC holder reviews all business details, confirms or modifies, authenticates via DSC or Aadhaar eSign, and submits. No government fee for simple confirmation; Rs 200 for modifications. Non-compliance leads to automatic deactivation from July 1 - customs rejects shipping bills, goods cannot clear, export incentives blocked.</p>
                    <p>All IECs not updated since before 2014 are already deactivated and need reactivation through the updation process. Patron provides <a href="/iec-renewal">IEC renewal</a> with proactive April-June compliance calendar and AD code reconciliation for Pune exporters.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IEC Renewal:</strong></p>
                    <ul>
                        <li><strong>IEC Annual Updation:</strong> Mandatory April 1 - June 30 confirmation on DGFT portal. Non-compliance = deactivation from July 1.</li>
                        <li><strong>Deactivation:</strong> Automatic IEC suspension from July 1. Blocks all import/export, shipping bills, incentives, and forex transactions.</li>
                        <li><strong>Reactivation:</strong> Complete updation on DGFT portal. Auto-approved upon submission. Status changes to 'Valid' within 1-3 days.</li>
                        <li><strong>DGFT Portal:</strong> dgft.gov.in - 'Update/Modify IEC' section for annual confirmation and modifications.</li>
                        <li><strong>AD Code:</strong> Authorised Dealer Code on ICEGATE must match updated IEC. Bank/IEC changes need both updated.</li>
                        <li><strong>ICD Dighi (INDIG6):</strong> Pune's major inland container depot requiring active IEC for customs clearance.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IEC Renewal</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>IEC</span>
                        <strong>Pune Export</strong>
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
            <h2 class="section-title">Who Needs IEC Renewal in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Auto Component Manufacturers (Chakan, PCMC):</strong> Exporting to global OEMs via Bajaj Auto, VW, Force Motors supply chains. Active IEC essential for customs clearance at ICD Dighi and ICD Talegaon. Annual updation mandatory even during quiet trade periods.</p>
                <p><strong>Pharmaceutical Exporters (MIDC Bhosari, Ranjangaon):</strong> APIs and formulations export. Active IEC needed for shipping bills, RoDTEP claims, and international tender participation. <a href="/fssai-central-license">FSSAI central license</a> alongside IEC for food-pharma exporters.</p>
                <p><strong>IT Services Companies (Hinjewadi, Kharadi):</strong> Software services exports require active IEC for FIRC/eBRC processing and SEIS claims. Even without physical goods, deactivated IEC creates remittance complications. <a href="/private-limited-company-registration/pune">Company registration</a> with IEC from Day 1.</p>
                <p><strong>Agricultural and Food Exporters:</strong> Purandar grapes, processed foods, spices. Active IEC + APEDA registration + FSSAI needed for customs clearance. E-commerce exporters on Amazon Global/eBay need active IEC for courier shipping bills.</p>
                <p><strong>All IEC Holders - Active or Dormant:</strong> Even businesses that obtained IEC 'just in case' but haven't traded must complete annual updation to prevent deactivation. The requirement applies to ALL IEC holders regardless of trade activity.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC Renewal Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>IEC Status Check</td><td>Verification of current IEC status (active/deactivated) on DGFT portal before initiating renewal. PAN/detail match verified</td></tr>
                        <tr><td>Annual Confirmation (No Changes)</td><td>Login, section-by-section review, confirmation, DSC/Aadhaar authentication, submission. IEC remains active past July 1. Free govt fee</td></tr>
                        <tr><td>IEC Modification (Changes Required)</td><td>Update address, bank accounts, directors/partners, nature of business. Rs 200 govt fee. Supporting documents prepared</td></tr>
                        <tr><td>IEC Reactivation</td><td>Deactivated IEC updation to trigger automatic reactivation. PAN validation resolution. Customs system propagation verified</td></tr>
                        <tr><td>DSC/Aadhaar eSign Coordination</td><td>DSC linked to DGFT profile. Expired DSC renewed. Aadhaar eSign enabled for proprietors</td></tr>
                        <tr><td>AD Code Reconciliation</td><td>Updated IEC matched with ICEGATE AD code records. Bank/IEC changes reflected in both systems simultaneously</td></tr>
                        <tr><td>Proactive Compliance Calendar</td><td>April 1 reminders integrated with GST return, ITR filing, and other export compliance deadlines. Never miss June 30</td></tr>
                        <tr><td>Complete Export Compliance</td><td>IEC renewal + <a href="/ad-code-registration">AD code</a> + <a href="/gst-registration">GST LUT</a> + RoDTEP guidance + <a href="/zoho-books-accounting">Zoho Books</a> export accounting</td></tr>

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
            <h2 class="section-title">How to Renew IEC from Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers complete IEC renewal - from status check through profile verification, detail confirmation, authentication, customs propagation, and compliance integration.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Check IEC Status on DGFT Portal</h3>
        <p class="step-description">Patron logs into the DGFT portal (dgft.gov.in) and checks current status. If 'Valid/Active', annual confirmation can proceed. If 'Deactivated', reactivation is initiated. Patron also verifies whether IEC details (PAN, name, address) match other compliance documents (GST, bank records).</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Status verified on DGFT</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN/GST details matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Active or deactivated confirmed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">STATUS</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="6" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Active?</text><text x="60" y="65" font-size="5" fill="#E8712C" font-weight="500" text-anchor="middle" font-family="Arial">Deactivated?</text></svg></div>
            <span class="illustration-label">Status Checked</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Link IEC and Verify DGFT Profile</h3>
        <p class="step-description">If IEC is not yet linked to DGFT portal account, Patron completes linking using OTP authentication. DGFT profile reviewed to ensure DSC is registered (required for companies/LLPs) or Aadhaar eSign enabled (for proprietors). Any profile discrepancies resolved before proceeding.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IEC linked to DGFT account</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC registered and valid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Profile discrepancies resolved</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PROFILE</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="6" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">DSC Linked</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">IEC + DGFT OK</text></svg></div>
            <span class="illustration-label">Profile Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Review and Confirm/Modify IEC Details</h3>
        <p class="step-description">Patron navigates to 'Update/Modify IEC' and reviews each section: entity details, registered address, branch addresses, contact info, bank accounts, directors/partners, nature of business. If no changes needed, each section confirmed by clicking 'Save'. If modifications required, changes entered with supporting documentation.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Each section reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Changes entered (if needed)</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data consistency verified</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REVIEW</text><rect x="25" y="32" width="28" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="57" y="32" width="28" height="12" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><text x="39" y="41" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Confirm</text><text x="71" y="41" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Modify</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Section by Section</text></svg></div>
            <span class="illustration-label">Details Confirmed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Authenticate and Submit</h3>
        <p class="step-description">IEC updation authenticated using DSC (mandatory for companies/LLPs) or Aadhaar eSign OTP (proprietors). Government fee of Rs 200 paid online if modifications made (free for simple confirmation). The updation is submitted. Patron ensures correct authentication method used.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC/eSign authenticated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fee paid (if applicable)</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Updation submitted</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SUBMIT</text><text x="60" y="48" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">DSC / eSign</text><text x="60" y="62" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Free or Rs 200</text></svg></div>
            <span class="illustration-label">Submission Complete</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Confirmation and Status Verification</h3>
        <p class="step-description">Upon successful submission, DGFT generates confirmation. IEC status updates to 'Valid' immediately (for active IECs) or triggers reactivation (for deactivated). Patron verifies updated status on DGFT portal and confirms transmission to customs system for seamless operations at ICD Dighi, ICD Talegaon, and JNPT.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Status shows 'Valid'</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Customs system propagated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ICD Dighi/Talegaon ready</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="16" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="68" font-size="7" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">VALID</text></svg></div>
            <span class="illustration-label">IEC Active</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Post-Renewal Compliance Integration</h3>
        <p class="step-description">Patron verifies updated IEC matches AD code on ICEGATE (bank/IEC changes must be reflected in both). Annual updation date added to compliance calendar for next financial year (April 1-June 30). IEC renewal integrated with GST return filing, ITR, and export accounting via Zoho Books.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AD code reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Next year calendar set</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST/ITR integrated</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">INTEGRATE</text><text x="38" y="48" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">AD Code</text><text x="60" y="48" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">GST</text><text x="82" y="48" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">LUT</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Calendar Set</text></svg></div>
            <span class="illustration-label">Compliance Complete</span>
            <span class="step-number-large">06</span>
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
            <h2 class="section-title">Documents Required for IEC Renewal in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>IEC Number:</strong> 10-digit code.</li><li><strong>DGFT Portal Credentials:</strong> Login access.</li><li><strong>PAN Card:</strong> Of business/proprietor (must match DGFT records).</li><li><strong>DSC:</strong> Class 2/3 Digital Signature Certificate linked to DGFT profile (required for companies, LLPs, firms).</li><li><strong>Aadhaar Card:</strong> Of proprietor (for Aadhaar eSign - proprietors only).</li><li><strong>Updated Address Proof:</strong> If address changed.</li><li><strong>Updated Bank Details:</strong> And cancelled cheque (if bank changed).</li><li><strong>Board Resolution:</strong> Appointing new directors (if director/partner changes).</li><li><strong>New Director's ID and PAN:</strong> If added.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Pune Exporter Tip:</strong> Start IEC updation in April - do not wait until June. DGFT portal traffic increases dramatically in the last week of June, leading to server slowdowns, OTP delays, and payment errors. Patron initiates renewal for all clients in the first week of April.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common IEC Renewal Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Missing April 1-June 30 Deadline</td><td>Pune businesses forget annual updation; IEC auto-deactivated July 1; shipments blocked at ICD Dighi/Talegaon; demurrage accumulates</td><td>Proactive compliance calendar with April 1 reminders. Patron initiates renewal for all exporter clients immediately</td></tr>
                        <tr><td>Thinking Lifetime = No Action</td><td>IEC code doesn't expire but active status does; many businesses haven't updated since before 2021; already deactivated</td><td>Status checked and reactivation initiated. Education on annual updation requirement provided to all IEC holder clients</td></tr>
                        <tr><td>PAN Mismatch Blocking Update</td><td>Name format differences, recent PAN corrections, entity type changes cause DGFT validation failure</td><td>PAN validation resolution coordinated with ITD and DGFT. Discrepancies resolved before updation attempt</td></tr>
                        <tr><td>DSC Not Linked or Expired</td><td>Companies/LLPs need DSC for authentication; expired or unlinked DSC blocks the updation process</td><td>DSC renewal and DGFT profile linking completed before initiating IEC updation</td></tr>
                        <tr><td>Bank Changes Not Reflected in AD Code</td><td>Updated bank in IEC but not in AD code on ICEGATE; mismatch blocks customs clearance and forex</td><td>Both IEC and AD code updated simultaneously during annual renewal cycle. Cross-verified for consistency</td></tr>

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
            <h2 class="section-title">IEC Renewal Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Annual Confirmation (No Changes)</td><td>Free govt + Rs 1,999-2,999 professional</td></tr>
                        <tr><td>IEC Modification (Changes)</td><td>Rs 200 govt + Rs 2,999-4,999 professional</td></tr>
                        <tr><td>IEC Reactivation</td><td>Rs 200 govt + Rs 3,999-5,999 professional</td></tr>
                        <tr><td>DSC Procurement (Add-On)</td><td>Rs 1,500-2,500</td></tr>
                        <tr><td>IEC Renewal + AD Code Reconciliation</td><td>Rs 3,999-6,999</td></tr>
                        <tr><td>Complete Export Compliance Package</td><td>Rs 7,999-12,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IEC Renewal consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20IEC%20renewal%20in%20Pune.%20Please%20share%20pricing." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC Renewal Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>IEC Status Check</td><td>30 minutes</td></tr>
                        <tr><td>Profile Verification</td><td>30 minutes</td></tr>
                        <tr><td>Updation/Confirmation</td><td>1-2 hours</td></tr>
                        <tr><td>Submission and Status Update</td><td>Immediate</td></tr>
                        <tr><td>Customs System Propagation</td><td>1-2 working days</td></tr>
                        <tr><td>Total (standard confirmation)</td><td>Same day to 24 hours</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> IEC renewal is entirely online on dgft.gov.in. For straightforward annual confirmation, the process is same-day. For reactivation or PAN validation issues, allow 1-3 additional working days. Patron's Pune office at Wagholi handles all filings and verifies customs system propagation for ICD Dighi and ICD Talegaon before your next shipment.</p>

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
            <h2 class="section-title">Why Choose Patron for IEC Renewal in Pune</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office Presence</h3><p>RTC Silver, Wagholi - walk-in for auto exporters from Chakan, pharma from MIDC Bhosari, IT services from Hinjewadi, and agricultural exporters across Pune.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Proactive April-June Calendar</h3><p>Reminders from April 1. Never miss the June 30 deadline. PAN validation resolution. AD code reconciliation. No generic platform offers this proactive approach.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Full Export Compliance</h3><p>IEC renewal bundled with <a href="/ad-code-registration">AD code</a>, <a href="/gst-registration">GST LUT</a>, RoDTEP/SEIS guidance, and <a href="/zoho-books-accounting">Zoho Books</a> export accounting.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>10,000+ Businesses Served</h3><p>15+ years, 50,000+ documents, 4.9 Google rating. IEC renewal from Rs 1,999. Same-day processing for annual confirmation.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves exporters and importers with CA expertise in trade compliance, tax, and accounting.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC Renewal vs Modification vs New IEC</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Annual Renewal (Updation)</th><th>IEC Modification</th><th>New IEC Registration</th></tr></thead>
                    <tbody>
                        <tr><td>When</td><td>Every year April 1-June 30</td><td>When business details change</td><td>First time starting import/export</td></tr>
                        <tr><td>What</td><td>Confirm or update existing details</td><td>Specific changes: address, directors, bank</td><td>New 10-digit IEC issued by DGFT</td></tr>
                        <tr><td>Govt Fee</td><td>Free (confirm) / Rs 200 (changes)</td><td>Rs 200</td><td>Rs 500</td></tr>
                        <tr><td>Portal</td><td>dgft.gov.in - Update/Modify IEC</td><td>dgft.gov.in - Update/Modify IEC</td><td>dgft.gov.in - Apply for IEC</td></tr>
                        <tr><td>Timeline</td><td>Same day to 24 hours</td><td>1-3 working days</td><td>1-3 working days</td></tr>
                        <tr><td>Consequence</td><td>Deactivation July 1 if missed</td><td>Outdated info; compliance issues</td><td>Cannot import or export legally</td></tr>

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
            <h2 class="section-title">Related Services for Pune Exporters</h2>
            <div class="content-text">
                
                <p>Pune exporters completing IEC renewal often need complementary services:</p>
                <ul><li><a href="/iec-renewal">IEC Renewal (India)</a> - National overview.</li>
                    <li><a href="#">Import Export Code</a> - New IEC registration.</li>
                    <li><a href="/ad-code-registration">AD Code Registration</a> - Bank authorisation for trade.</li>
                    <li><a href="/fssai-central-license">FSSAI Central License</a> - For food exporters.</li>
                    <li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a> - Company incorporation.</li>
                    <li><a href="/gst-registration">GST Registration</a> - LUT for zero-rated exports.</li>
                    <li><a href="/zoho-books-accounting">Zoho Books Accounting</a> - Export accounting.</li>
                    <li><a href="/posh-compliance-services">Compliance Services</a> - Annual business compliance.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for IEC Renewal</h2>
            <div class="content-text">
                
                <p><strong>Core Legislation:</strong></p>
                <ul><li><strong>FT(D&R) Act 1992:</strong> Governs foreign trade policy, IEC issuance, and DGFT authority.</li>
                    <li><strong>DGFT Notification 58/2015-20 (12 Feb 2021):</strong> Mandates annual IEC updation between <strong>April 1 and June 30</strong>.</li>
                    <li><strong>Trade Notice 31/2021-22:</strong> Detailed guidelines on annual updation, authentication, and deactivation.</li>
                    <li><strong>FTP 2023:</strong> Current framework for import-export licensing and incentives.</li></ul>
                <p style="margin-top:16px;"><strong>Deactivation and Reactivation:</strong></p>
                <ul><li>Automatic deactivation from <strong>July 1</strong> if not updated by June 30</li>
                    <li>All IECs not updated since <strong>before 2014</strong> are already deactivated</li>
                    <li>Reactivation: complete updation on DGFT portal - <strong>auto-approved</strong> upon submission</li></ul>
                <p style="margin-top:16px;"><strong>Consequences of Deactivation:</strong></p>
                <ul><li>Customs <strong>rejects shipping bills</strong> at ICD Dighi, ICD Talegaon, JNPT</li>
                    <li>Export incentives (<strong>RoDTEP, SEIS, duty drawback</strong>) blocked</li>
                    <li>Banks may refuse <strong>foreign exchange transactions</strong></li>
                    <li><strong>Demurrage and detention charges</strong> on held goods</li></ul>
                <p style="margin-top:16px;"><strong>External Authorities:</strong> <a href="https://dgft.gov.in" target="_blank" rel="noopener">DGFT</a> | <a href="https://icegate.gov.in" target="_blank" rel="noopener">ICEGATE</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: IEC Renewal in Pune</h2>
                    <p class="faq-expanded__lead">Get answers about IEC renewal deadline, process, fees, reactivation, consequences, IT company requirements, and modification for Pune exporters and importers.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'IEC Renewal',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is IEC renewal?</h3>
                        <div class="faq-expanded__a"><p>IEC renewal is the mandatory annual updation or confirmation of IEC details on the DGFT portal between April 1 and June 30 per DGFT Notification 58/2015-20. The IEC has lifetime validity but its active status depends on completing this annual exercise. Non-updation by June 30 leads to automatic deactivation from July 1.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to renew IEC in Pune?</h3>
                        <div class="faq-expanded__a"><p>Log into DGFT portal dgft.gov.in, navigate to Update Modify IEC, review each section, confirm or modify as needed, authenticate using DSC or Aadhaar eSign, and submit. No government fee for simple confirmation. Rs 200 for modifications. Patron handles complete process from Pune office.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the deadline for IEC renewal?</h3>
                        <div class="faq-expanded__a"><p>Annual updation window is April 1 to June 30 every year. If not completed by June 30, DGFT automatically deactivates the IEC from July 1. No import or export possible until reactivated. Patron recommends starting in April and not waiting until last week of June.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens if IEC is not renewed?</h3>
                        <div class="faq-expanded__a"><p>IEC automatically deactivated from July 1. Customs blocks import and export, shipping bills cannot be generated on ICEGATE, goods held at ICD Dighi or Talegaon with demurrage, banks may refuse foreign exchange, and export incentives like RoDTEP and SEIS cannot be claimed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How to reactivate a deactivated IEC?</h3>
                        <div class="faq-expanded__a"><p>Complete the updation process on DGFT portal. Log in, update or confirm details, authenticate with DSC or Aadhaar eSign, pay Rs 200 if modifications made, and submit. Status changes to Valid and transmits to customs system within 1 to 3 working days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is IEC renewal free?</h3>
                        <div class="faq-expanded__a"><p>If no changes are made and you are simply confirming existing details there is no government fee. If modifying details such as address directors or bank accounts Rs 200 government fee applies. Professional service fees start from Rs 1,999 for end-to-end renewal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What details can be updated during IEC renewal?</h3>
                        <div class="faq-expanded__a"><p>Registered address, branch addresses, contact information, bank account details, directors or partners addition or removal, and nature of business. Changes must be consistent with GST certificate, PAN, and bank records. Patron cross-verifies all data.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do IT services companies need IEC renewal?</h3>
                        <div class="faq-expanded__a"><p>Yes. IT services companies in Hinjewadi and Kharadi holding IEC for software exports must complete annual updation. Active IEC needed for FIRC issuance and eBRC. Deactivated IEC creates remittance complications and blocks SEIS incentive claims.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>IEC renewal kaise hota hai Pune mein?</strong> DGFT portal pe login karo, 'Update/Modify IEC' pe jao, har section check aur save karo, DSC ya Aadhaar se authenticate karo, submit karo. Koi change nahi to free hai. Change hai to Rs 200. Patron Pune se handle karta hai.</p>
                <p><strong>IEC deactivate ho gaya to kya kare?</strong> DGFT portal pe login karo aur IEC update/confirm karo. Submit hone ke baad automatically reactivate ho jayega. 1-3 din mein customs system update. Patron reactivation handle karta hai.</p>
                <p><strong>IT company ko bhi IEC update karna padta hai?</strong> Haan! Software export karne wali companies ko bhi annually update zaroori. FIRC aur eBRC ke liye active IEC chahiye. SEIS benefits bhi deactivated IEC pe nahi milte.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deactivated IEC = Shipments Blocked. Update Before June 30</h2>
            <div class="content-text">
                
                <p>IEC annual updation window is April 1 to June 30. If not completed by June 30, IEC auto-deactivated July 1 - shipments blocked at ICD Dighi and Talegaon, demurrage accumulates, export orders lost, and RoDTEP/SEIS claims rejected. If your IEC is already deactivated, complete updation immediately to trigger reactivation. Don't wait for the next April window.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IEC%20renewal%20in%20Pune.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your IEC Renewed in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">IEC renewal is mandatory annual compliance for every exporter and importer in Pune - from Chakan auto components to MIDC pharmaceuticals to Hinjewadi IT services. The 'lifetime validity' of IEC refers to the code not expiring, but active status depends on annual updation between April 1 and June 30 on the DGFT portal.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Pune office provides proactive annual IEC updation starting April 1, reactivation for deactivated codes, modification for changed details, and seamless integration with AD code, GST LUT, and export accounting.</p>
                <p style="color:rgba(255,255,255,0.9);">With 15+ years, 10,000+ businesses, and 4.9 Google rating, Patron is the only CA firm in Pune bundling IEC renewal with proactive compliance calendar, PAN validation, AD code reconciliation, GST LUT, export incentive advisory, and annual export accounting.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20IEC%20renewal%20in%20Pune.%20Please%20share%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20IEC%20Renewal%20in%20Pune&body=Hello%20Patron%2C%0A%0AI%20need%20IEC%20renewal%20in%20Pune.%0A%0APlease%20share%20details.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">IEC Renewal Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides IEC renewal and export compliance services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">IEC renewal and export compliance</div>
                <div class="pa-city-grid">
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/iec-renewal/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/iec-renewal/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/iec-renewal/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Pune</div>
                <div class="pa-block-sub">End-to-end export compliance</div>
                <div class="pa-cross-grid">
                    <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/statutory-audit/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers IEC renewal in Pune. Content reviewed quarterly (Freshness Tier 1) reflecting DGFT notification updates, FTP amendments, and annual updation deadline changes.</p>
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
