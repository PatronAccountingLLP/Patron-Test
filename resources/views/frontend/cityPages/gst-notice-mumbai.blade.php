
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Notice Reply in Mumbai - SCN, ASMT, DRC Forms</title>
    <meta name="description" content="CA-assisted GST notice reply and representation in Mumbai. SCN, scrutiny, demand notices handled. Serving BKC, Andheri MIDC, SEEPZ. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-notice/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Notice Reply in Mumbai - SCN, ASMT, DRC Forms">
    <meta property="og:description" content="CA-assisted GST notice reply and representation in Mumbai. SCN, scrutiny, demand notices handled. Serving BKC, Andheri MIDC, SEEPZ. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-notice/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Notice Reply in Mumbai - SCN, ASMT, DRC Forms">
    <meta name="twitter:description" content="CA-assisted GST notice reply and representation in Mumbai. SCN, scrutiny, demand notices handled. Serving BKC, Andheri MIDC, SEEPZ. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Notice Reply in Mumbai",
      "description": "CA-assisted GST notice reply and representation in Mumbai. SCN, scrutiny, demand notices handled. Serving BKC, Andheri MIDC, SEEPZ. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-notice/mumbai",
      "serviceType": "GST Notice Reply in Mumbai",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai",
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
          "name": "GST Notice: Types, Reply and Penalty",
          "item": "https://www.patronaccounting.com/gst-notice"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Notice Reply in Mumbai",
          "item": "https://www.patronaccounting.com/gst-notice/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which GST office issues notices in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST notices in Mumbai are issued by the jurisdictional Commissionerate East West Central or South based on the taxpayer principal place of business. Both CGST Central and Maharashtra SGST State wings may issue notices. Under the cross-empowerment framework one wing typically handles assessment for a given period. Patron Accounting Marine Lines office handles replies to notices from all four Mumbai zones."
          }
        },
        {
          "@type": "Question",
          "name": "How to check GST notice online from Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Log in to gst.gov.in with your GSTIN credentials. Navigate to Services then User Services then View Additional Notices and Orders. All notices issued to your GSTIN are displayed in descending chronological order. Click View to download the notice PDF. You also receive SMS and email notifications on your registered mobile and email whenever a notice is issued."
          }
        },
        {
          "@type": "Question",
          "name": "What is the time limit to reply to a GST notice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Time limits vary by notice type: GSTR-3A non-filing requires response within 15 days. Section 61 scrutiny typically allows 30 days. Section 73 and 74 show cause notices allow 30 days from the date of SCN. RFD-08 refund notices allow 15 days. Section 29 cancellation notices allow 30 days. Missing the deadline can result in ex parte orders and demand confirmation."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I do not reply to a GST notice in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Non-reply leads to adverse consequences: for GSTR-3A the officer passes a best judgment assessment under Section 62. For Section 73 and 74 the demand is confirmed as an order with full tax interest and penalty. For Section 29 the GSTIN is cancelled suo motu with retrospective effect. Once an order is passed the only recourse is appeal under Section 107 within 3 months."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Section 73 and Section 74?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 73 applies when tax is not paid or short paid without fraud suppression or misstatement. Consequence is tax plus interest with no penalty if paid within 30 days of SCN. Section 74 applies when fraud suppression or wilful misstatement is involved. Consequence is tax plus interest plus 100 percent penalty. Penalty reduces to 50 percent if paid within 30 days of SCN."
          }
        },
        {
          "@type": "Question",
          "name": "Can a CA reply to GST notice on my behalf?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes a practising Chartered Accountant can be authorised to reply to GST notices and represent the taxpayer before the adjudicating authority. The taxpayer issues a Letter of Authorisation or files Form GST PCT-05. Patron Accounting CA team acts as the authorised representative for Mumbai businesses handling both portal replies and in-person hearings at the Commissionerate."
          }
        },
        {
          "@type": "Question",
          "name": "What is DRC-01D and do I need to reply?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DRC-01D is an automated intimation issued by the GST system when it detects ITC differences between GSTR-2B and GSTR-3B. It is not a formal show cause notice and does not legally require a reply. However ignoring DRC-01D can lead to a formal Section 73 or 74 SCN. Mumbai businesses should treat it as an early warning and verify the ITC discrepancy."
          }
        },
        {
          "@type": "Question",
          "name": "Can I pay voluntarily to avoid penalty under Section 73?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes under Section 73(5) if the taxpayer pays tax and interest before SCN issuance no penalty is levied. Under Section 73(8) if paid within 30 days of SCN proceedings are concluded. Payment is made through DRC-03 on the GST portal using electronic cash ledger. Patron computes exact liability and files DRC-03 proactively to close the matter before adjudication. Quick Answers GST notice ka reply kaise kare? GST portal pe login karo, Services > User Services > View Additional Notices/Orders. Notice download karo, reply type karo, documents upload karo, DSC/EVC se submit karo. Deadline mat miss karo. Reply nahi kiya toh kya hoga? S.73/74 mein demand confirm. S.29 mein GSTIN cancel. S.62 mein best judgment assessment. Appeal 3 mahine mein karna padega. Section 73 aur 74 mein fark? 73: fraud nahi, tax + interest, 30 din mein pay = zero penalty. 74: fraud, tax + interest + 100% penalty, 30 din mein = 50% penalty."
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
                        GST Notice Reply in Mumbai: Respond Correctly, Avoid Penalties
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">24 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Types:</span> GSTR-3A (non-filing), Section 61 (scrutiny), Section 73/74 (demand), Section 29 (cancellation), DRC-01/01A/01D</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Reply Mode:</span> Online via gst.gov.in under Services > User Services > View Additional Notices/Orders. DSC or EVC authentication</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Time Limit:</span> 15 to 30 days typically. GSTR-3A: 15 days. Section 61/73/74/29: 30 days. RFD-08: 15 days. Missing = ex parte order</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Consequence:</span> Penalty, interest, demand confirmation, registration cancellation, prosecution. Section 73: tax + interest. Section 74: tax + interest + 100% penalty</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=GST%20Notice%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20GST%20notice%20help.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20a%20GST%20notice%20in%20Mumbai.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'GST Notice',
                                            'city'     => 'Mumbai',
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
    'ctaText'    => 'From BKC BFSI ITC scrutiny to Andheri MIDC RCM demands to SEEPZ export refund SCNs - Mumbai\'s taxpayers trust Patron for GST notice response.',
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
            <a href="#who-section" class="toc-btn">Who Receives</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Costs</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Notice Types</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Notice Reply in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Notice Services at a Glance</strong></p>
                    <p>Formal communication from GST department flagging discrepancies or demanding tax. Reply within 15-30 days via gst.gov.in. Mumbai has 4 Commissionerate zones (East/West/Central/South). Section 73: tax + interest (no penalty if paid in 30 days). Section 74: tax + interest + 100% penalty (fraud). Non-reply = demand confirmed or GSTIN cancelled. DRC-03 voluntary payment to close before adjudication.</p>
                </div>
                <p>Mumbai generates one of the highest volumes of GST notices in India. BKC BFSI ITC scrutiny, Andheri MIDC RCM demands, SEEPZ export refund SCNs, automated DRC-01D intimations across all sectors.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Common Types</td><td>GSTR-3A, Section 61, Section 73/74, Section 29, DRC-01/01A/01D</td></tr>
                        <tr><td>Reply Mode</td><td>Online on gst.gov.in (Services > User Services > Notices/Orders)</td></tr>
                        <tr><td>Time Limit</td><td>15-30 days (varies by type)</td></tr>
                        <tr><td>Section 73</td><td>Tax + interest; no penalty if paid within 30 days of SCN</td></tr>
                        <tr><td>Section 74</td><td>Tax + interest + 100% penalty (50% if paid in 30 days)</td></tr>
                        <tr><td>Jurisdiction</td><td>GST Commissionerate Mumbai East, West, Central, South</td></tr>
                        <tr><td>Non-Reply</td><td>Demand confirmed, GSTIN cancelled, prosecution possible</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Patron's Marine Lines office handles all notice types. Related: <a href="/gst-notice">GST notice (national)</a>, <a href="/gst-returns">GST returns</a>, <a href="/gst-audit">GST audit</a>, <a href="/gst-registration/mumbai">GST registration</a>, <a href="/statutory-audit">statutory audit</a>.</p>
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
                <h2 class="section-title">What Is a GST Notice?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A GST notice is an official communication issued by the GST department to a registered taxpayer under the CGST Act, 2017, requiring the taxpayer to explain discrepancies, pay outstanding tax, or show cause why penalties should not be imposed.</p>
                    <p>Served via Section 169 modes: personally, registered post, email, or GST portal. Portal notices appear under Services > User Services > View Additional Notices/Orders. SMS and email notification sent to registered contacts.</p>
                    <p>Mumbai's 4 Commissionerate zones (East/West/Central/South) issue notices. CGST and MGST wings may issue separately. Filed on <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a>. <a href="/gst-notice">National GST notice guide</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Notice:</strong></p>
                    <ul>
                        <li><strong>Section 73 (Non-Fraud):</strong> Tax + interest. No penalty if paid within 30 days of SCN. DRC-03 voluntary payment before SCN = zero penalty.</li>
                        <li><strong>Section 74 (Fraud):</strong> Tax + interest + 100% penalty. Reduces to 50% if paid within 30 days. Fraud/suppression/wilful misstatement alleged.</li>
                        <li><strong>Section 61 (Scrutiny):</strong> Officer informs of discrepancies. 30-day reply. If unresolved, escalates to Section 73/74.</li>
                        <li><strong>Section 29 (Cancellation):</strong> 6+ months non-filing. 30-day reply. File pending returns + explanation. Non-response = suo motu cancellation.</li>
                        <li><strong>DRC-01D:</strong> Automated ITC mismatch alert. Not formal SCN. No legal reply required. But ignoring can escalate. Treat as early warning.</li>
                        <li><strong>DRC-03:</strong> Voluntary payment form. Pay before SCN = zero penalty under S.73(5). Pay within 30 days of SCN = proceedings concluded.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Notice</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Notice</span>
                        <strong>Replied</strong>
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
            <h2 class="section-title">Who Receives GST Notices in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>BFSI (BKC, Nariman Point):</strong> Section 61 scrutiny for GSTR-1 vs 3B mismatches. ITC reversal queries on input services. High-value transactions flagged. <a href="/gst-returns">GST returns</a>.</p>
                <p><strong>Manufacturers (Andheri MIDC, Thane-Belapur):</strong> RCM non-payment on freight, legal, GTA services. Section 73/74 for under-reported outward supplies. <a href="/gst-audit">GST audit</a>.</p>
                <p><strong>Exporters (SEEPZ, JNPT):</strong> IGST refund SCNs, LUT validity issues, zero-rated supply documentation gaps. RFD-08 with 15-day window. <a href="/gst-registration/mumbai">GST registration</a>.</p>
                <p><strong>IT/ITES (Powai, Andheri):</strong> Place of supply queries for export of services. FIRC documentation. ITC eligibility on mixed supplies. <a href="/statutory-audit">Statutory audit</a>.</p>
                <p><strong>Retail/E-commerce/Real Estate:</strong> GSTR-3A for delayed filing. DRC-01D for ITC mismatches. Rule 42/43 proportional ITC reversal notices. <a href="/accounting-services">Accounting services</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Notice Response Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Notice Analysis and Classification</td><td>Identify type (GSTR-3A, S.61, S.73, S.74, S.29, DRC-01/01A/01D), jurisdiction (CGST or MGST), time limit, potential consequences. Same-day classification for Mumbai clients</td></tr>
                        <tr><td>Technical Reply Drafting</td><td>Legally sound, fact-based reply addressing each ground. Computation verification, ITC reconciliation, RCM analysis, supply classification. CGST Act section references and legal arguments</td></tr>
                        <tr><td>Supporting Document Compilation</td><td>Organisation and digitisation of invoices, challans, GSTR-1/3B/2B data, bank statements, shipping bills, LUT copies. Ground-wise filing for adjudicating officer</td></tr>
                        <tr><td>GST Portal Reply Filing</td><td>Online submission with document uploads, DSC/EVC authentication, confirmation download. Case status monitoring for officer response</td></tr>
                        <tr><td>Personal Hearing Representation</td><td>Representation before all 4 Mumbai Commissionerate zones (East/West/Central/South). GST Bhavan and Commissionerate offices. Written submissions with evidence files</td></tr>
                        <tr><td>DRC-03 Voluntary Payment</td><td>Compute exact liability. File DRC-03 for voluntary payment to avoid or reduce penalties under Section 73/74 before demand order. Cash ledger payment</td></tr>
                        <tr><td>Appeal Filing</td><td>If order adverse: preparation and filing before Appellate Authority within 3 months under Section 107. Grounds of appeal with supporting documents</td></tr>
                        <tr><td>Notice Tracking Calendar</td><td>Systematic tracking across all GSTINs: notice deadlines, hearing dates, order statuses. Multi-GSTIN Mumbai businesses get consolidated compliance dashboard</td></tr>

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
            <h2 class="section-title">GST Notice Reply Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers complete GST notice response from identification through ground analysis, document gathering, reply drafting, portal filing, to hearing and outcome monitoring.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Identify and Classify the Notice</h3>
        <p class="step-description">Log in to gst.gov.in, navigate to Services > User Services > View Additional Notices/Orders. Download notice PDF. Identify type (GSTR-3A, S.61, S.73/74, S.29, DRC-01/01A/01D), issuing authority (CGST zone or Maharashtra SGST), and reply deadline. Patron provides same-day classification at Marine Lines.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notice downloaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Type identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deadline set</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">IDENTIFY</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Notice Type</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Deadline Set</text></svg></div>
            <span class="illustration-label">Classified</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Analyse Grounds and Compute Impact</h3>
        <p class="step-description">Review each ground/discrepancy in the notice. For ITC mismatches: reconcile GSTR-2B with GSTR-3B at invoice level. For turnover discrepancies: compare GSTR-1 with books. For RCM notices (Andheri MIDC): verify liability against freight and GTA invoices. Quantify tax, interest, penalty exposure per ground.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grounds analysed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Exposure quantified</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ANALYSE</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Each Ground</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Exposure Computed</text></svg></div>
            <span class="illustration-label">Impact Assessed</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Gather Supporting Documents</h3>
        <p class="step-description">Compile all evidence: original invoices, debit/credit notes, payment proof, GSTR-1/3B/2B summaries, bank statements, shipping bills (SEEPZ exporters), LUT copies, prior correspondence. Organise ground-wise for easy adjudicating officer reference.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Evidence compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Ground-wise organised</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Export docs included</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DOCUMENTS</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Invoices + Returns</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Bank Statements</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Ground-Wise</text></svg></div>
            <span class="illustration-label">Documents Ready</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Draft Technical Reply</h3>
        <p class="step-description">Structured reply addressing each ground. Reference CGST Act sections, rules, notifications, CBIC circulars. For S.73: demonstrate non-fraud intent (avoid S.74). For BKC BFSI: ITC reconciliation worksheets. For SEEPZ: FIRC certificates + customs documentation.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Legal arguments drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Act sections cited</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Each ground addressed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DRAFT REPLY</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">CGST Act Refs</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">Legal Arguments</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Each Ground</text></svg></div>
            <span class="illustration-label">Reply Ready</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">File Reply on GST Portal</h3>
        <p class="step-description">Navigate to notice on portal, click 'Add Reply'. Enter reply text, upload supporting documents (PDF, within size limits), select authorised signatory, submit using DSC/EVC. Download acknowledgment with Reference Number (RFN). Status changes to 'Reply furnished'.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Reply uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC/EVC authenticated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFN downloaded</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FILE REPLY</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">GST Portal</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">DSC / EVC</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Docs Uploaded</text></svg></div>
            <span class="illustration-label">Filed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Attend Personal Hearing and Monitor Outcome</h3>
        <p class="step-description">If Commissionerate calls hearing: attend or authorise Patron via Form GST PCT-05. Present case with documentary evidence. After hearing, monitor portal for adjudication order. If adverse: evaluate appeal options within 3-month window under Section 107.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Hearing attended</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Evidence presented</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Order monitored</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">RESOLVED</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Order Monitored</text></svg></div>
            <span class="illustration-label">Resolved</span>
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
            <h2 class="section-title">Documents Required for GST Notice Reply</h2>
            <div class="content-text">
                
                <ul><li><strong>Original GST Notice:</strong> Downloaded from portal with reference number, date, and grounds.</li><li><strong>Filed GSTR-1, GSTR-3B, GSTR-2B:</strong> For periods covered. Download summaries and invoice-level data.</li><li><strong>Tax Payment Challans:</strong> Proof of GST payments during notice period via cash/credit ledger.</li><li><strong>Purchase and Sales Invoices:</strong> For ITC verification and turnover reconciliation. Include credit/debit notes.</li><li><strong>Bank Statements:</strong> Corroborate transaction values and payment flows.</li><li><strong>Export Documentation:</strong> Shipping bills, Bills of Lading, LUT, FIRC for SEEPZ/JNPT exporters.</li><li><strong>RCM Computation Worksheets:</strong> For Andheri MIDC manufacturers: RCM on freight, legal, security, GTA.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai Tip:</strong> Businesses receiving notices from both CGST and Maharashtra SGST for the same period should coordinate replies carefully. Under cross-empowerment, one wing typically handles assessment. Patron verifies jurisdictional allocation before drafting to avoid duplicative proceedings.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common GST Notice Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Automated DRC-01D Volume</td><td>High-turnover BKC firms get automated ITC mismatch intimations. Not formal SCN but ignoring escalates to S.73/74. Many Mumbai businesses dismiss these</td><td>Treat as early warning. Verify ITC discrepancy. Pay differential or prepare documentation. Proactive resolution prevents escalation</td></tr>
                        <tr><td>GSTR-1 vs GSTR-3B Scrutiny</td><td>Large transaction volumes: minor timing differences trigger S.61 scrutiny. BKC quarterly GSTR-1 vs monthly GSTR-3B particularly susceptible</td><td>Quarterly vs monthly filing mismatch analysis. Timing difference documentation. Reconciliation worksheets with each reply</td></tr>
                        <tr><td>MIDC RCM Demand Notices</td><td>Manufacturers miss RCM on GTA, security, legal services. Multi-year demands compound exposure. 12% interest from invoice date</td><td>Comprehensive RCM liability audit. Voluntary DRC-03 payment before SCN. Multi-year computation with interest calculation</td></tr>
                        <tr><td>Export Refund SCNs (SEEPZ)</td><td>Missing FIRCs, shipping bill date mismatches, LUT validity lapses. 15-day RFD-08 window tight for multiple refund applications</td><td>Export documentation organised per refund. FIRC tracking system. LUT validity monitored proactively. 15-day response guaranteed</td></tr>
                        <tr><td>Section 29 Cancellation</td><td>6+ months non-filing = cancellation notice. Non-response = suo motu cancellation with retrospective effect. Affects all downstream transactions</td><td>Immediate pending return filing. Explanation with reasons for delay. GSTIN retention secured within 30-day window</td></tr>

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
            <h2 class="section-title">GST Notice - Cost of Non-Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-3A Non-Reply</td><td>Best judgment assessment (S.62): tax + interest + late fee + penalty</td></tr>
                        <tr><td>Section 73 Demand Confirmed</td><td>Tax + interest (no penalty if paid within 30 days of SCN)</td></tr>
                        <tr><td>Section 74 Demand Confirmed</td><td>Tax + interest + 100% penalty</td></tr>
                        <tr><td>Section 29 Cancellation</td><td>GSTIN cancelled suo motu; retrospective effect</td></tr>
                        <tr><td>Patron: Notice Reply (Scrutiny)</td><td>Starting Rs 5,000</td></tr>
                        <tr><td>Patron: Reply (S.73/74 SCN)</td><td>Starting Rs 10,000</td></tr>
                        <tr><td>Patron: Hearing Representation</td><td>Starting Rs 7,500/hearing</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Notice consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20notice%20reply%20help%20in%20Mumbai.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Notice Reply Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-3A (Non-Filing)</td><td>15 days</td></tr>
                        <tr><td>Section 61 (Scrutiny)</td><td>30 days (or as specified)</td></tr>
                        <tr><td>Section 73 SCN (Non-Fraud)</td><td>30 days from SCN date</td></tr>
                        <tr><td>Section 74 SCN (Fraud)</td><td>30 days from SCN date</td></tr>
                        <tr><td>Section 29 (Cancellation)</td><td>30 days from notice date</td></tr>
                        <tr><td>RFD-08 (Refund SCN)</td><td>15 days</td></tr>
                        <tr><td>DRC-01D (Intimation)</td><td>No formal reply; take corrective action</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Every day of delay reduces available response options. Under S.73, paying within 30 days of SCN = zero penalty. Under S.74, paying within 30 days = 50% penalty (vs 100%). Missing deadline = ex parte order. Patron provides same-day classification and begins reply drafting immediately upon notice receipt from Mumbai clients.</p>

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
            <h2 class="section-title">Why Choose Patron for GST Notice Reply in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Same-Day Classification</h3><p>Walk-in at Marine Lines for urgent notice response. Same-day notice type identification, deadline setting, and strategy assessment. Located centrally for all Mumbai business districts.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>All 4 Commissionerate Zones</h3><p>Representation before Mumbai East, West, Central, South. Familiarity with adjudication patterns across all zones. In-person hearings at GST Bhavan and Commissionerate offices.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Section 73/74 Expertise</h3><p>Strategy focused on demonstrating non-fraud intent (keeping matter under S.73). DRC-03 voluntary payment to close before adjudication. Detailed legal arguments with CGST Act citations.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Integrated GST Compliance</h3><p>Notice response coordinated with GSTR-1/3B filing and annual return. No conflicting positions. 10,000+ businesses, 4.9 rating, GST expertise since 2017.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram. Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses for GST compliance and notice response.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common GST Notice Types for Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Notice Type</th><th>CGST Section</th><th>Reply Deadline</th></tr></thead>
                    <tbody>
                        <tr><td>Non-Filing Notice</td><td>GSTR-3A</td><td>15 days</td></tr>
                        <tr><td>Scrutiny Notice</td><td>Section 61</td><td>30 days</td></tr>
                        <tr><td>Demand (Non-Fraud)</td><td>Section 73 / DRC-01</td><td>30 days from SCN</td></tr>
                        <tr><td>Demand (Fraud)</td><td>Section 74 / DRC-01</td><td>30 days from SCN</td></tr>
                        <tr><td>Cancellation</td><td>Section 29</td><td>30 days</td></tr>
                        <tr><td>Refund SCN</td><td>RFD-08</td><td>15 days</td></tr>
                        <tr><td>ITC Intimation</td><td>DRC-01D</td><td>No formal reply</td></tr>

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
            <h2 class="section-title">Related Services</h2>
            <div class="content-text">
                
                <p>Mumbai businesses dealing with GST notices often need:</p>
                <ul><li><a href="/gst-notice">GST Notice (National)</a> - India-wide notice guide.</li>
                    <li><a href="/gst-returns">GST Returns</a> - Monthly/quarterly filing.</li>
                    <li><a href="/gst-audit">GST Audit</a> - Department audit support.</li>
                    <li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a> - New/revoked registration.</li>
                    <li><a href="/statutory-audit">Statutory Audit</a> - Annual audit.</li>
                    <li><a href="/tds-return-filing-24q">TDS Return Filing</a> - TDS compliance.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for GST Notices</h2>
            <div class="content-text">
                
                <p><strong>CGST Act, 2017:</strong></p>
                <ul><li>S.61: Scrutiny. S.73: Non-fraud demand. S.74: Fraud demand. S.29: Cancellation. S.107: Appeal (3 months). S.169: Service of notice.</li></ul>
                <p style="margin-top:16px;"><strong>Forms:</strong></p>
                <ul><li>DRC-01/01A: SCN under S.73/74. DRC-01D: Automated ITC intimation. DRC-03: Voluntary payment. RFD-08: Refund SCN. PCT-05: Representative authorisation.</li></ul>
                <p style="margin-top:16px;"><strong>Penalty:</strong></p>
                <ul><li>S.73: Tax + interest; no penalty if paid in 30 days. S.74: Tax + interest + 100% penalty (50% if paid in 30 days). S.62: Best judgment assessment.</li></ul>
                <p style="margin-top:16px;"><strong>Mumbai:</strong> 4 Commissionerate zones (East/West/Central/South). CGST + MGST wings. <a href="https://gst.gov.in" target="_blank" rel="noopener">GST Portal</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: GST Notice Reply in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about GST office jurisdiction, checking notices online, reply deadlines, consequences of non-reply, Section 73 vs 74, CA representation, DRC-01D, and voluntary payment.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Notice',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST office issues notices in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>GST notices in Mumbai are issued by the jurisdictional Commissionerate East West Central or South based on the taxpayer principal place of business. Both CGST Central and Maharashtra SGST State wings may issue notices. Under the cross-empowerment framework one wing typically handles assessment for a given period. Patron Accounting Marine Lines office handles replies to notices from all four Mumbai zones.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to check GST notice online from Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Log in to gst.gov.in with your GSTIN credentials. Navigate to Services then User Services then View Additional Notices and Orders. All notices issued to your GSTIN are displayed in descending chronological order. Click View to download the notice PDF. You also receive SMS and email notifications on your registered mobile and email whenever a notice is issued.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the time limit to reply to a GST notice?</h3>
                        <div class="faq-expanded__a"><p>Time limits vary by notice type: GSTR-3A non-filing requires response within 15 days. Section 61 scrutiny typically allows 30 days. Section 73 and 74 show cause notices allow 30 days from the date of SCN. RFD-08 refund notices allow 15 days. Section 29 cancellation notices allow 30 days. Missing the deadline can result in ex parte orders and demand confirmation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens if I do not reply to a GST notice in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Non-reply leads to adverse consequences: for GSTR-3A the officer passes a best judgment assessment under Section 62. For Section 73 and 74 the demand is confirmed as an order with full tax interest and penalty. For Section 29 the GSTIN is cancelled suo motu with retrospective effect. Once an order is passed the only recourse is appeal under Section 107 within 3 months.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between Section 73 and Section 74?</h3>
                        <div class="faq-expanded__a"><p>Section 73 applies when tax is not paid or short paid without fraud suppression or misstatement. Consequence is tax plus interest with no penalty if paid within 30 days of SCN. Section 74 applies when fraud suppression or wilful misstatement is involved. Consequence is tax plus interest plus 100 percent penalty. Penalty reduces to 50 percent if paid within 30 days of SCN.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a CA reply to GST notice on my behalf?</h3>
                        <div class="faq-expanded__a"><p>Yes a practising Chartered Accountant can be authorised to reply to GST notices and represent the taxpayer before the adjudicating authority. The taxpayer issues a Letter of Authorisation or files Form GST PCT-05. Patron Accounting CA team acts as the authorised representative for Mumbai businesses handling both portal replies and in-person hearings at the Commissionerate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is DRC-01D and do I need to reply?</h3>
                        <div class="faq-expanded__a"><p>DRC-01D is an automated intimation issued by the GST system when it detects ITC differences between GSTR-2B and GSTR-3B. It is not a formal show cause notice and does not legally require a reply. However ignoring DRC-01D can lead to a formal Section 73 or 74 SCN. Mumbai businesses should treat it as an early warning and verify the ITC discrepancy.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I pay voluntarily to avoid penalty under Section 73?</h3>
                        <div class="faq-expanded__a"><p>Yes under Section 73(5) if the taxpayer pays tax and interest before SCN issuance no penalty is levied. Under Section 73(8) if paid within 30 days of SCN proceedings are concluded. Payment is made through DRC-03 on the GST portal using electronic cash ledger. Patron computes exact liability and files DRC-03 proactively to close the matter before adjudication.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>GST notice ka reply kaise kare?</strong> GST portal pe login karo, Services > User Services > View Additional Notices/Orders. Notice download karo, reply type karo, documents upload karo, DSC/EVC se submit karo. Deadline mat miss karo.</p>
                <p><strong>Reply nahi kiya toh kya hoga?</strong> S.73/74 mein demand confirm. S.29 mein GSTIN cancel. S.62 mein best judgment assessment. Appeal 3 mahine mein karna padega.</p>
                <p><strong>Section 73 aur 74 mein fark?</strong> 73: fraud nahi, tax + interest, 30 din mein pay = zero penalty. 74: fraud, tax + interest + 100% penalty, 30 din mein = 50% penalty.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Respond Within the Deadline - Every Day Counts</h2>
            <div class="content-text">
                
                <p>GST notices carry 15-30 day deadlines. Missing = ex parte order with full demand + penalty. Under S.73, paying within 30 days of SCN eliminates penalty. Under S.74, it reduces penalty from 100% to 50%. S.29 cancellation notice left unanswered = permanent GSTIN loss with retrospective cancellation. Mumbai's 4 Commissionerate zones are actively issuing notices based on data analytics.</p>
                <p style="margin-top:16px;"><strong>Received a notice? <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20a%20GST%20notice%20in%20Mumbai.%20Please%20help." target="_blank">WhatsApp us</a> immediately.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Respond Right - Protect Your Business</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">GST notice response requires prompt action, technical accuracy, and strategic positioning. Whether routine GSTR-3A or Section 73/74 SCN with significant demand. Mumbai's 4 Commissionerate zones actively issue notices to BKC BFSI, MIDC manufacturers, SEEPZ exporters.</p>
                <p style="color:rgba(255,255,255,0.9);">S.73: pay within 30 days = zero penalty. S.74: pay within 30 days = 50% vs 100%. DRC-03 voluntary payment closes matters before adjudication. Every day of delay reduces options.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron provides same-day classification, technical reply, hearing representation at all 4 zones, and appeal filing from Marine Lines. 10,000+ businesses, 4.9 rating, 15+ years, GST expertise since 2017.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20notice%20reply%20help%20in%20Mumbai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=GST%20Notice%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20received%20a%20GST%20notice%20in%20Mumbai.%0A%0APlease%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Notice Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides GST notice reply and representation services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">GST notice reply and representation</div>
                <div class="pa-city-grid">
                    <a href="/gst-notice/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/gst-notice/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/gst-notice/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">GST and tax compliance</div>
                <div class="pa-cross-grid">
                    <a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Monthly/Quarterly</div></div></a>
                    <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers GST notice reply in Mumbai. Content reviewed quarterly (Freshness Tier 1) as CBIC circulars and amnesty schemes change the notice landscape.</p>
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
