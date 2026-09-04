
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Income Tax Notice u/s 143(3) - Scrutiny Assessment & Reply</title>
    <meta name="description" content="Received income tax scrutiny notice u/s 143(3)? Know what it means, how to respond, docs needed, and timeline. Starting at INR 2,999.">
    <link rel="canonical" href="/income-tax-notices-under-section-143-3">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Notice u/s 143(3) - Scrutiny Assessment & Reply">
    <meta property="og:description" content="Received income tax scrutiny notice u/s 143(3)? Know what it means, how to respond, docs needed, and timeline. Starting at INR 2,999.">
    <meta property="og:url" content="/income-tax-notices-under-section-143-3">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Notice u/s 143(3) - Scrutiny Assessment & Reply">
    <meta name="twitter:description" content="Received income tax scrutiny notice u/s 143(3)? Know what it means, how to respond, docs needed, and timeline. Starting at INR 2,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Income Tax Notice Section 143(3) India",
          "description": "Received income tax scrutiny notice u/s 143(3)? Know what it means, how to respond, docs needed, and timeline. Starting at INR 2,999.",
          "url": "https://www.patronaccounting.com/income-tax-notices-under-section-143-3",
          "serviceType": "Income Tax Notice Section 143(3) India",
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
            "url": "https://www.patronaccounting.com/income-tax-notices-under-section-143-3",
            "price": "10000"
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
              "name": "Income Tax Notice Section 143(3) India",
              "item": "https://www.patronaccounting.com/income-tax-notices-under-section-143-3"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is an income tax notice under Section 143(3)?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 143(3) is the scrutiny assessment provision under the Income Tax Act, 1961. The Assessing Officer passes the 143(3) order after conducting a detailed examination of the taxpayer's return, reviewing their documentary submissions, and giving them an opportunity of being heard. The process begins with a 143(2) scrutiny notice and concludes with the 143(3) assessment order."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Section 143(2) and Section 143(3)?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 143(2) is the scrutiny notice - the first step that selects your return for detailed examination and asks for documents/explanations. Section 143(3) is the final assessment order passed after the scrutiny is complete. The 143(2) notice must be issued within 3 months from end of the FY in which the return was filed. The 143(3) order must be passed within 12 months from end of the Assessment Year [Section 153]."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I ignore an income tax scrutiny notice under Section 143(2)?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Ignoring has serious consequences: (1) A penalty of INR 10,000 per failure to comply is leviable under Section 272A(1)(d). (2) The AO can make a Best Judgment Assessment under Section 144 based on available information - typically with high-pitched income additions and a large tax demand. (3) Prolonged non-compliance can lead to prosecution proceedings."
              }
            },
            {
              "@type": "Question",
              "name": "What is CASS in income tax scrutiny?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "CASS stands for Computer-Assisted Scrutiny Selection. It is the automated system used by CBDT to select income tax returns for scrutiny using risk parameters, data analytics, and AI-driven mismatch detection. CASS generates two types of notices - limited scrutiny (specific issue only) and complete scrutiny (entire return). Most Section 143(2) notices in India originate from CASS."
              }
            },
            {
              "@type": "Question",
              "name": "What is the time limit to issue a Section 143(2) scrutiny notice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 143(2) notice can only be issued within 3 months from the end of the financial year in which the income tax return was filed. For example, if you filed your ITR for FY 2024-25 on 31 July 2025, the scrutiny notice u/s 143(2) must be issued by 30 June 2026. A notice issued after this deadline is legally invalid and void."
              }
            },
            {
              "@type": "Question",
              "name": "Scrutiny notice 143 ka reply kaise kare?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Log in to incometaxindia.gov.in with your PAN credentials. Go to 'Pending Actions' and click 'e-Proceedings'. Find your 143(3) assessment case for the relevant Assessment Year. Download the 143(2) notice. Prepare a written response addressing each issue raised with supporting documents. Upload your response via 'Submit Response' button in e-Proceedings. Complex cases mein CA ki madad lena zaroori hai."
              }
            },
            {
              "@type": "Question",
              "name": "Can a CA represent me in a Section 143(3) scrutiny assessment?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under the Income Tax Act, 1961, an authorised representative including a Chartered Accountant (CA) can fully represent the taxpayer in scrutiny assessment proceedings - preparing and submitting responses, attending hearings, and communicating with the AO or NFAC on the taxpayer's behalf. This is especially important under the Faceless Assessment Scheme."
              }
            },
            {
              "@type": "Question",
              "name": "What is a Best Judgment Assessment under Section 144?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Best Judgment Assessment under Section 144 is an ex-parte assessment made by the AO when the taxpayer fails to file a return, does not comply with notices u/s 142(1) or 143(2). The AO estimates income based on available information - often resulting in additions significantly higher than actual income. The only remedy is to file an appeal before CIT(A). Quick Answers What is scrutiny assessment under income tax? Detailed examination of an ITR by the AO under Section 143(3) to verify correctness of income, deductions, and claims. Begins with a 143(2) notice and ends with a formal assessment order. What is the time limit for Section 143(3) assessment? For AY 2022-23 onwards, the order must be passed within 12 months from end of the Assessment Year [Section 153]. For AY 2025-26, this means by 31 March 2027. What penalty applies for not responding? INR 10,000 per failure under Section 272A(1)(d). Plus Best Judgment Assessment u/s 144 with high-pitched additions. How does Faceless Assessment work? Under the Faceless Assessment Scheme 2020, all proceedings are electronic through the NFAC. Notices issued and responses submitted digitally via e-Proceedings. Physical hearings replaced by video-based hearings on request."
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
                        Income Tax Notice under Section 143(3) - Scrutiny Assessment: What It Means and How to Respond
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
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Scrutiny Assessment under IT Act</strong>:</span> Section 143(3) is the scrutiny assessment provision - a detailed examination of your ITR triggered by a prior notice under Section 143(2) of the Income Tax Act, 1961.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>CASS-Based or Manual Selection</strong>:</span> Scrutiny is initiated via Computer-Assisted Scrutiny Selection (CASS) or manual selection by CBDT - it covers limited issues, complete return, or prior years.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Non-Response Risks Are Severe</strong>:</span> Non-response leads to Best Judgment Assessment u/s 144, penalty of INR 10,000 per failure u/s 272A, and potential high-pitched additions to your income.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>End-to-End CA Defence</strong>:</span> Patron Accounting provides complete Section 143(3) scrutiny defence - notice review, e-Proceedings response, documentation, hearing representation, and CIT(A) appeal.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Patron Accounting LLP | 1,400+ Scrutiny Cases | 71% Addition Deletion Rate at CIT(A) | 4.8/5 Rating (320+ Reviews) | Pune, Mumbai, Delhi, Bengaluru</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Section%20143(3)%20Scrutiny%20Help&body=Hello%2C%20I%20just%20visited%20your%20Section%20143%283%29%20Scrutiny%20Defence%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Section%20143%283%29%20Scrutiny%20Defence%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'IT Notice Section 143(3)',
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
    'ctaText'    => 'Don\'t let scrutiny become an addition. Get expert CA representation. Starting at INR 2,999.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is 143(3)</a><a href="#who-section" class="toc-btn">Who Gets It</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">How to Respond</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why CA Help</a><a href="#comparison-section" class="toc-btn">DIY vs CA</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Income Tax Notice under Section 143(3) - Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IT Notice Section 143(3) Services at a Glance</strong></p>
                    <p>A Section 143(3) scrutiny notice means the Income Tax Department is examining your ITR in detail. You must respond via e-Proceedings within the time specified - typically 15 to 30 days. Submit all supporting documents for income, deductions, and claims. Non-response leads to Best Judgment Assessment u/s 144 with high-pitched additions. A CA-led response reduces the risk of additions. Patron Accounting starting at INR 2,999 (Exl GST and Govt. Charges).</p>
                </div>
                <p>An income tax scrutiny notice under Section 143(3) of the Income Tax Act, 1961 signals that the Income Tax Department has selected your return for a detailed examination. The scrutiny process begins with a notice under Section 143(2) and culminates in a formal assessment order under Section 143(3). Under the Faceless Assessment Scheme (Finance Act 2020), all communication happens digitally through the e-filing portal.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Governing Provision</strong></td><td>Income Tax Act, 1961 - Section 143(2) (notice) + Section 143(3) (order)</td></tr>
                        <tr><td><strong>Who Issues It</strong></td><td>Assessing Officer (AO) / National Faceless Assessment Centre (NFAC)</td></tr>
                        <tr><td><strong>Trigger (Notice u/s 143(2))</strong></td><td>Within 3 months from end of FY in which return was filed</td></tr>
                        <tr><td><strong>Assessment Order Deadline</strong></td><td>12 months from end of Assessment Year (AY 2022-23 onwards) [Section 153]</td></tr>
                        <tr><td><strong>Response Mode</strong></td><td>e-Proceedings section of income tax e-filing portal (incometaxindia.gov.in)</td></tr>
                        <tr><td><strong>Penalty for Non-Response</strong></td><td>INR 10,000 per failure under Section 272A(1)(d)</td></tr>
                        <tr><td><strong>Consequence of Non-Response</strong></td><td>Best Judgment Assessment u/s 144 with high-pitched income addition</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Scrutiny notice 143 ka reply kaise kare? Income tax portal par login karein, e-Proceedings mein jaayein, aur apne Assessment Year ka case dhoondh kar jawab upload karein. Complex cases mein CA ki madad lena bahut zaroori hai - Patron Accounting ki team se sampark karein.</p>
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
                <h2 class="section-title">What is an Income Tax Notice under Section 143(3)?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>A Section 143(3) scrutiny assessment</strong> is the detailed examination of a taxpayer's income tax return conducted by the Assessing Officer to verify the correctness of income declared, deductions claimed, exemptions availed, and taxes paid.</p>
                    <p>The process has two stages: (1) A notice under Section 143(2) is issued to the taxpayer, selecting the return for scrutiny. (2) After considering the taxpayer's submissions, the AO passes the final assessment order under Section 143(3) - which either confirms your declared income or makes additions/disallowances that increase the tax demand.</p>
                    <p>Receiving a scrutiny notice does not mean you have done anything wrong. Many notices are routine CASS-based selections. However, every notice requires a timely, professional, and well-documented response. Under the Faceless Assessment Scheme, all communication happens digitally through the <a href="https://www.incometaxindia.gov.in" target="_blank" rel="noopener">e-filing portal</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IT Notice Section 143(3):</strong></p>
                    <p><strong>Scrutiny Assessment:</strong> Detailed examination of ITR under Section 143(3) where the AO verifies income, deductions, and claims beyond the summary processing done under Section 143(1).</p>
                    <p><strong>CASS (Computer-Assisted Scrutiny Selection):</strong> Automated system used by CBDT to select ITRs for scrutiny based on risk parameters, data mismatches, and AI-driven analysis. Most scrutiny cases originate from CASS.</p>
                    <p><strong>Faceless Assessment Scheme:</strong> Electronic, jurisdiction-free assessment system introduced by Finance Act 2020 where assessments are conducted by NFAC without physical interaction between taxpayer and AO.</p>
                    <p><strong>Best Judgment Assessment u/s 144:</strong> If the taxpayer fails to respond to a Section 143(2) notice, the AO makes an ex-parte assessment based on available information, often resulting in inflated income and higher tax demand.</p>
                    <p><strong>Addition / Disallowance:</strong> A specific income item the AO adds to your declared income or a deduction/expense the AO disallows in the scrutiny order, increasing your taxable income and tax liability.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Income Tax scrutiny notice -->
                            <rect x="30" y="15" width="140" height="115" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="22" rx="8" fill="#14365F"/>
                            <rect x="30" y="29" width="140" height="8" fill="#14365F"/>
                            <text x="100" y="30" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SCRUTINY ASSESSMENT</text>
                            <text x="100" y="52" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">e-PROCEEDINGS</text>
                            <line x1="45" y1="58" x2="155" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <path d="M55 70l5 5 10-10" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                            <text x="80" y="73" font-size="6" fill="#14365F" font-weight="500" font-family="Arial,sans-serif">Income verified</text>
                            <path d="M55 85l5 5 10-10" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                            <text x="80" y="88" font-size="6" fill="#14365F" font-weight="500" font-family="Arial,sans-serif">Deductions checked</text>
                            <path d="M55 100l5 5 10-10" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                            <text x="80" y="103" font-size="6" fill="#14365F" font-weight="500" font-family="Arial,sans-serif">Claims verified</text>
                            <rect x="130" y="65" width="30" height="45" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="145" y="82" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">143</text>
                            <text x="145" y="93" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">(3)</text>
                            <circle cx="165" cy="25" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M159 25l4 4 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Professional Defence</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 143(3)</span>
                        <strong>Scrutiny Defence</strong>
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
            <h2 class="section-title">Who Receives a Section 143(3) Scrutiny Notice?</h2>
            <div class="content-text">
                
                <p>A Section 143(2) notice (prerequisite for 143(3) assessment) can be issued to any taxpayer who has filed a return. Common scenarios that trigger scrutiny selection include:</p>
                <ul>
                    <li><strong>High-Value Transactions vs Income Mismatch</strong> - Large bank deposits, property purchases, foreign remittances disproportionate to declared income</li>
                    <li><strong>Significant Deductions or Exemptions</strong> - Claims under Section 80C, 80G, HRA, capital gains exemptions that are unusually high relative to income</li>
                    <li><strong>Income Mismatch Across Sources</strong> - Differences between ITR, TDS returns, Form 26AS, AIS, SFT, or GST returns</li>
                    <li><strong>Business Income with High Expense Claims</strong> - Gross profit ratios below industry average or large cash transactions flagged by CBDT algorithms</li>
                    <li><strong>Capital Gains or Real Estate Transactions</strong> - Property/share sales with valuation disputes, stamp duty differences, or indexation benefit claims</li>
                    <li><strong>Foreign Assets and Overseas Income</strong> - Returns with foreign income, DTAA claims, or foreign asset disclosures requiring treaty verification</li>
                    <li><strong>Previous Year Additions</strong> - Taxpayers with significant additions in prior scrutiny are more likely to be selected again</li>
                    <li><strong>Random CBDT Selection</strong> - A percentage of returns selected randomly as part of annual scrutiny criteria</li>
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
            <h2 class="section-title">Patron Accounting Services for Section 143(3) Scrutiny</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Notice Analysis and Risk Assessment</strong></td><td>Detailed review of the 143(2) notice, identified issues, and preliminary assessment of risk exposure</td></tr>
                        <tr><td><strong>e-Proceedings Response Management</strong></td><td>Professional preparation and submission of all responses, documents, and clarifications on the income tax portal</td></tr>
                        <tr><td><strong>Documentation Strategy and Compilation</strong></td><td>Organising financial statements, Form 16, 26AS, AIS, bank statements, investment proofs into a legally sound submission</td></tr>
                        <tr><td><strong>Faceless Hearing Representation</strong></td><td>Expert CA representation in video-based personal hearings under the Faceless Assessment Scheme when granted by NFAC</td></tr>
                        <tr><td><strong>Assessment Order Review and Challenge</strong></td><td>Analysis of 143(3) order for erroneous additions, and rectification application u/s 154 for apparent mistakes</td></tr>
                        <tr><td><strong>CIT(A) Appeal Filing</strong></td><td>Preparation and filing of appeal under Section 246A against disputed additions in the 143(3) order</td></tr>

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
            <h2 class="section-title">How to Respond to an Income Tax Scrutiny Notice u/s 143(2) / 143(3)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Follow these steps on the income tax e-filing portal (incometaxindia.gov.in) to respond to a scrutiny notice within the time specified.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Log in to the e-Filing Portal</h3><p class="step-description">Visit incometaxindia.gov.in. Log in using your PAN, password, and captcha. Navigate to 'Pending Actions' on the dashboard.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal accessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAN login completed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">PAN LOGIN</text><line x1="30" y1="38" x2="90" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.2"/></svg></div><span class="illustration-label">Logged In</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Access e-Proceedings</h3><p class="step-description">Click on 'Pending Actions' and select 'e-Proceedings'. The e-Proceedings section lists all active assessment and inquiry proceedings linked to your PAN.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> e-Proceedings opened</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Active cases visible</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="10" rx="3" fill="#14365F"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">e-PROCEEDINGS</text><line x1="25" y1="38" x2="85" y2="38" stroke="#14365F" stroke-width="1" opacity="0.3"/><rect x="25" y="42" width="65" height="8" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="25" y="54" width="65" height="8" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/></svg></div><span class="illustration-label">Accessed</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Locate Your Scrutiny Case</h3><p class="step-description">Under e-Proceedings, find 'Assessment Proceeding u/s 143(3)' for the relevant Assessment Year. Click 'View Notices/Orders' to download the Section 143(2) notice PDF.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Case located</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 143(2) notice downloaded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="29" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">143(3) - AY 2024-25</text><line x1="25" y1="40" x2="85" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><rect x="45" y="48" width="40" height="10" rx="3" fill="#14365F"/><text x="65" y="56" font-size="5" fill="#fff" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">DOWNLOAD</text></svg></div><span class="illustration-label">Case Found</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Read and Understand the Notice</h3><p class="step-description">Carefully read the notice for: (a) specific issues identified (limited vs complete scrutiny); (b) documents and information requested; (c) response deadline (typically 15-30 days).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Issues identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Deadline noted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="25" height="6" rx="2" fill="#E8712C"/><text x="42" y="24" font-size="5" fill="#fff" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">143(2)</text><line x1="30" y1="34" x2="90" y2="34" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="44" x2="85" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="30" y1="54" x2="80" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.2"/></svg></div><span class="illustration-label">Notice Read</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Compile Your Response Documents</h3><p class="step-description">Gather all supporting documents: Form 16, Form 26AS, AIS, bank statements, investment certificates (80C/80D), capital gain computation, property documents, business books, GST returns, TDS certificates.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All documents gathered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Organised by issue</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="5" width="45" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="60" y="10" width="50" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="32" y="25" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Form 16</text><text x="32" y="38" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">26AS</text><text x="32" y="51" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">AIS</text><text x="85" y="35" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Bank</text><text x="85" y="48" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Invest</text></svg></div><span class="illustration-label">Compiled</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Draft a Comprehensive Written Response</h3><p class="step-description">Prepare a point-by-point written response addressing each issue. State the factual position clearly, attach supporting documentary evidence, cite relevant provisions, CBDT circulars, or court decisions.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Response drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Evidence attached</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="25" y1="25" x2="95" y2="25" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="25" y1="38" x2="85" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="25" y1="48" x2="80" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><circle cx="60" cy="62" r="6" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M57 62l2 2 4-4" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Drafted</span><span class="step-number-large">06</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Submit Response via e-Proceedings</h3><p class="step-description">Log in to the portal, go to e-Proceedings, click 'Submit Response' for your assessment case. Upload the written response as PDF and attach supporting documents. Note the Acknowledgment/Transaction ID.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Uploaded via portal</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Acknowledgment noted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="22" width="50" height="14" rx="3" fill="#14365F"/><text x="60" y="32" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SUBMIT</text><line x1="30" y1="44" x2="90" y2="44" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="60" cy="55" r="6" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M57 55l2 2 4-4" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">07</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Attend Hearing if Requested</h3><p class="step-description">Under the Faceless Assessment Scheme, hearings are video-based and granted only on specific request. If a personal hearing is allowed, attend through your CA or authorised representative.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Hearing attended via video</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CA represented</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><rect x="35" y="30" width="50" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="40" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">VIDEO HEARING</text><circle cx="95" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M91 15l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">08</span></div></div></div>
            <div class="highlight-box" style="margin-top:32px;"><p><strong>Important:</strong> Always respond within the deadline specified in the notice. Extension requests can be made online, but they are at the AO's discretion and not always granted.</p></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Checklist for Section 143(3) Scrutiny Response</h2>
            <div class="content-text">
                
                <ul>
                    <li>Copy of ITR and ITR-V / acknowledgment for the relevant Assessment Year</li>
                    <li>Form 16 / Form 16A / Form 16B (salary, TDS on professional fees, TDS on property)</li>
                    <li>Form 26AS and Annual Information Statement (AIS) for the relevant year</li>
                    <li>Bank statements for all accounts for the full financial year</li>
                    <li>Investment proofs: Section 80C (LIC, ELSS, PPF, NSC, FD), 80D (health insurance), home loan interest certificates, HRA lease agreements</li>
                    <li>Capital gains: Sale/purchase deeds, broker statements, Demat account statements, indexed cost computation</li>
                    <li>Business/professional income: Audited financial statements, P&L, balance sheet, GST returns, TDS certificates</li>
                    <li>Property transaction documents: Sale agreement, registration documents, stamp duty receipts, valuation reports</li>
                    <li>Foreign income: DTAA claim documents, overseas bank statements, tax residency certificate</li>
                    <li>Previous correspondence with the AO or NFAC in the same assessment proceedings</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Section 143(3) Scrutiny and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Unexplained Bank Deposits Added as Income</strong></td><td>AO adds large deposits as unexplained income</td><td>Detailed bank reconciliation showing source of each deposit - business receipts, loan repayments, inter-account transfers. Systematic CA-structured evidence rebuts the addition.</td></tr>
                        <tr><td><strong>Deduction Disallowance (80C, 80G, Business Expenses)</strong></td><td>Claims without adequate proof disallowed</td><td>Original certificates, receipts, proof of payment for every deduction. Cash expenses above INR 10,000 reviewed under Section 40A(3).</td></tr>
                        <tr><td><strong>High-Pitched Additions in Faceless Assessment</strong></td><td>Inadequately reasoned additions under NFAC</td><td>Detailed evidence-backed written response at first instance. If 143(3) order still makes additions, CIT(A) appeal within 30 days with stay application.</td></tr>
                        <tr><td><strong>Stamp Duty Valuation Dispute in Property Sale</strong></td><td>AO substitutes stamp duty value under Section 50C</td><td>Challenge valuation by requesting reference to DVO under Section 50C(2). Registered valuation report strengthens the case.</td></tr>

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
            <h2 class="section-title">Professional Fees for Section 143(3) Scrutiny Defence</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - Basic Scrutiny Notice Review + Portal Response</td><td class="table-amount">Starting from INR 2,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Complete Scrutiny Defence (Limited Scrutiny)</td><td class="table-amount">Starting at INR 4,999</td></tr>
                        <tr><td>Complete Scrutiny Defence (Complete/Manual Scrutiny)</td><td class="table-amount">Starting at INR 7,999</td></tr>
                        <tr><td>143(3) Order Review + Rectification u/s 154</td><td class="table-amount">Starting at INR 2,999</td></tr>
                        <tr><td>Appeal before CIT(A) against 143(3) Order</td><td class="table-amount">Starting at INR 8,999</td></tr>
                        <tr><td>Comprehensive Package (Scrutiny + Appeal)</td><td class="table-amount">Starting at INR 12,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IT Notice Section 143(3) consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Section%20143%283%29%20Scrutiny%20Defence%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Section 143(3) Scrutiny Resolution</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Notice review and initial consultation</td><td>Same day (24 hours)</td></tr>
                        <tr><td>Document compilation and first e-Proceedings response</td><td>3-7 working days after document collection</td></tr>
                        <tr><td>Assessment unit follow-up queries</td><td>Ongoing - 30-90 days depending on complexity</td></tr>
                        <tr><td>Faceless hearing (if granted by NFAC)</td><td>Scheduled within the assessment period</td></tr>
                        <tr><td>Final assessment order u/s 143(3)</td><td>Within 12 months from end of AY [Section 153]</td></tr>
                        <tr><td>Rectification u/s 154 (if applicable)</td><td>2-3 working days to file; CPC processes in 30-60 days</td></tr>
                        <tr><td>CIT(A) appeal (if order has additions)</td><td>30 days to file; hearing within 2-6 months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Section 143(2) notices specify a response deadline - typically 15 to 30 days. Missing this deadline without extension means the AO proceeds to pass the 143(3) order based on available information, which almost invariably includes additions. Contact us immediately on receipt.</p>

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
            <h2 class="section-title">Why Professional CA Assistance Matters for Section 143(3) Scrutiny</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></div><h3>Risk Assessment Before Response</h3><p>A CA identifies specific risks in your return before the first response, allowing a strategic rather than reactive approach to each scrutiny issue.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><h3>Document Organisation</h3><p>Proper, systematic presentation of evidence significantly reduces additions. Disorganised or incomplete responses invite adverse inferences from the AO.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg></div><h3>Legal and Precedent Knowledge</h3><p>CA teams track CBDT circulars, ITAT precedents, and High Court decisions relevant to your specific scrutiny issues. Citing case law pre-empts additions.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div><h3>Faceless Assessment Expertise</h3><p>Faceless proceedings require precise written communication. An experienced CA drafts responses that anticipate the AO's concerns and proactively address them.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Appeal Readiness</h3><p>A CA builds the appeal record from the first response, ensuring no concession that would prejudice a future CIT(A) appeal if the 143(3) order is adverse.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Cost-Benefit Protection</h3><p>Professional fees are almost always less than the additional tax, interest, and penalty from a high-pitched 143(3) order after an inadequate self-response.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">1,400+ Scrutiny Assessments Handled - 71% Addition Deletion Rate</h2>
            <div class="content-text">
                
                <p><strong>Patron Accounting LLP</strong> | 1,400+ Scrutiny Cases | 71% Addition Deletion at CIT(A) | 4.8/5 Rating (320+ Reviews) | 14 Qualified CA/CS Professionals | Pune, Mumbai, Delhi, Bengaluru</p>
                <div class="highlight-box" style="margin-top:16px;"><p>"My business scrutiny under 143(3) involved multiple additions and a demand of INR 8.4 lakh. Patron's CA team filed a comprehensive response, got 3 additions deleted at the assessment stage itself. Remaining demand reduced to INR 1.1 lakh." - <strong>Rajesh G., Business Owner, Pune</strong></p></div>
                <div class="highlight-box" style="margin-top:12px;"><p>"Faceless assessment is nerve-wracking because you can't meet the officer. Patron Accounting handled the entire e-Proceedings, submitted 200+ pages of evidence, and got a clean 143(3) order with nil additions." - <strong>Swati M., Professional, Mumbai</strong></p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional CA - Section 143(3) Scrutiny Response</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Self-Response (DIY)</th><th>Patron Accounting CA</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Issue Identification</strong></td><td>May miss subtle additions risk</td><td>Comprehensive pre-response risk mapping</td></tr>
                        <tr><td><strong>Document Compilation</strong></td><td>Often incomplete or disorganised</td><td>Systematic, legally structured submission</td></tr>
                        <tr><td><strong>Response Drafting</strong></td><td>Generic, lacks legal citations</td><td>Point-by-point with precedents and circulars</td></tr>
                        <tr><td><strong>Faceless Proceedings</strong></td><td>Unfamiliar with e-Proceedings format</td><td>Experienced in NFAC submission protocols</td></tr>
                        <tr><td><strong>Addition Rate</strong></td><td>High - inadequate responses invite additions</td><td>71% of additions deleted or reduced on appeal</td></tr>
                        <tr><td><strong>Cost</strong></td><td>Time + risk of large addition and demand</td><td>Starting INR 2,999 - fraction of potential demand</td></tr>

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
            <h2 class="section-title">Related Income Tax Services from Patron Accounting</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/income-tax-notice">Income Tax Notice Assistance</a> - comprehensive handling for all IT notice types</li>
                    <li><a href="/income-tax-notices-under-section-142-1">IT Notices under Section 142(1)</a> - preliminary inquiry notices and document requests</li>
                    <li><a href="/income-tax-notices-under-section-147">IT Notices under Section 147</a> - reassessment for income escaped assessment</li>
                    <li><a href="/income-tax-notices-under-section-148">IT Notices under Section 148</a> - reopening notices with Section 148A procedure</li>
                    <li><a href="/income-tax-demand-under-section-156">IT Demand under Section 156</a> - demand notice arising from 143(3) orders</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - accurate filing to minimise future scrutiny risk</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Key Provisions for Section 143(3) Scrutiny</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Section</th><th>Provision</th><th>Relevance</th></tr></thead><tbody>
                        <tr><td><strong>Section 143(2)</strong></td><td>Scrutiny notice issued within 3 months from end of FY in which return filed</td><td>Mandatory prerequisite for 143(3) assessment - notice outside time limit is void</td></tr>
                        <tr><td><strong>Section 143(3)</strong></td><td>Scrutiny assessment order after examining return, documents, submissions</td><td>The final order that determines tax liability post-scrutiny. Source: <a href="https://www.incometaxindia.gov.in" target="_blank" rel="noopener">incometaxindia.gov.in</a></td></tr>
                        <tr><td><strong>Section 153</strong></td><td>Order must be passed within 12 months from end of AY (AY 2022-23 onwards)</td><td>Limitation period - order passed later is barred by limitation. Source: <a href="https://www.indiacode.nic.in/handle/123456789/2435" target="_blank" rel="noopener">India Code</a></td></tr>
                        <tr><td><strong>Section 144</strong></td><td>Best Judgment Assessment - AO assesses based on available material if taxpayer fails to respond</td><td>Consequence of non-response - typically results in high-pitched addition</td></tr>
                        <tr><td><strong>Section 272A(1)(d)</strong></td><td>Penalty of INR 10,000 for each failure to comply with notice u/s 143(2)</td><td>Direct financial penalty for non-response per failure instance</td></tr>
                        <tr><td><strong>Section 246A</strong></td><td>Appeal to CIT(A) against 143(3) assessment order</td><td>Primary appellate remedy - appeal within 30 days of order</td></tr>
                        <tr><td><strong>Faceless Assessment Scheme, 2020</strong></td><td>Electronic, jurisdiction-free assessment - all proceedings via e-filing portal</td><td>Governing framework for how scrutiny is currently conducted</td></tr>
                        <tr><td><strong>Section 154</strong></td><td>Rectification of mistake apparent from record in 143(3) order</td><td>Remedy for arithmetical/obvious errors without filing appeal</td></tr>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Section 143(3) Scrutiny Assessment</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about income tax scrutiny notice, the difference between 143(2) and 143(3), CASS selection, penalties, and how to respond.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'IT Notice Section 143(3)',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is an income tax notice under Section 143(3)?</h3>
                        <div class="faq-expanded__a"><p>Section 143(3) is the scrutiny assessment provision under the Income Tax Act, 1961. The Assessing Officer passes the 143(3) order after conducting a detailed examination of the taxpayer's return, reviewing their documentary submissions, and giving them an opportunity of being heard. The process begins with a 143(2) scrutiny notice and concludes with the 143(3) assessment order.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between Section 143(2) and Section 143(3)?</h3>
                        <div class="faq-expanded__a"><p>Section 143(2) is the scrutiny notice - the first step that selects your return for detailed examination and asks for documents/explanations. Section 143(3) is the final assessment order passed after the scrutiny is complete. The 143(2) notice must be issued within 3 months from end of the FY in which the return was filed. The 143(3) order must be passed within 12 months from end of the Assessment Year [Section 153].</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What happens if I ignore an income tax scrutiny notice under Section 143(2)?</h3>
                        <div class="faq-expanded__a"><p>Ignoring has serious consequences: (1) A penalty of INR 10,000 per failure to comply is leviable under Section 272A(1)(d). (2) The AO can make a Best Judgment Assessment under Section 144 based on available information - typically with high-pitched income additions and a large tax demand. (3) Prolonged non-compliance can lead to prosecution proceedings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is CASS in income tax scrutiny?</h3>
                        <div class="faq-expanded__a"><p>CASS stands for Computer-Assisted Scrutiny Selection. It is the automated system used by CBDT to select income tax returns for scrutiny using risk parameters, data analytics, and AI-driven mismatch detection. CASS generates two types of notices - limited scrutiny (specific issue only) and complete scrutiny (entire return). Most Section 143(2) notices in India originate from CASS.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the time limit to issue a Section 143(2) scrutiny notice?</h3>
                        <div class="faq-expanded__a"><p>Section 143(2) notice can only be issued within 3 months from the end of the financial year in which the income tax return was filed. For example, if you filed your ITR for FY 2024-25 on 31 July 2025, the scrutiny notice u/s 143(2) must be issued by 30 June 2026. A notice issued after this deadline is legally invalid and void.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Scrutiny notice 143 ka reply kaise kare?</h3>
                        <div class="faq-expanded__a"><p>Log in to incometaxindia.gov.in with your PAN credentials. Go to 'Pending Actions' and click 'e-Proceedings'. Find your 143(3) assessment case for the relevant Assessment Year. Download the 143(2) notice. Prepare a written response addressing each issue raised with supporting documents. Upload your response via 'Submit Response' button in e-Proceedings. Complex cases mein CA ki madad lena zaroori hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a CA represent me in a Section 143(3) scrutiny assessment?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under the Income Tax Act, 1961, an authorised representative including a Chartered Accountant (CA) can fully represent the taxpayer in scrutiny assessment proceedings - preparing and submitting responses, attending hearings, and communicating with the AO or NFAC on the taxpayer's behalf. This is especially important under the Faceless Assessment Scheme.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is a Best Judgment Assessment under Section 144?</h3>
                        <div class="faq-expanded__a"><p>A Best Judgment Assessment under Section 144 is an ex-parte assessment made by the AO when the taxpayer fails to file a return, does not comply with notices u/s 142(1) or 143(2). The AO estimates income based on available information - often resulting in additions significantly higher than actual income. The only remedy is to file an appeal before CIT(A).</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is scrutiny assessment under income tax?</strong> Detailed examination of an ITR by the AO under Section 143(3) to verify correctness of income, deductions, and claims. Begins with a 143(2) notice and ends with a formal assessment order.</p>
                <p><strong>What is the time limit for Section 143(3) assessment?</strong> For AY 2022-23 onwards, the order must be passed within 12 months from end of the Assessment Year [Section 153]. For AY 2025-26, this means by 31 March 2027.</p>
                <p><strong>What penalty applies for not responding?</strong> INR 10,000 per failure under Section 272A(1)(d). Plus Best Judgment Assessment u/s 144 with high-pitched additions.</p>
                <p><strong>How does Faceless Assessment work?</strong> Under the Faceless Assessment Scheme 2020, all proceedings are electronic through the NFAC. Notices issued and responses submitted digitally via e-Proceedings. Physical hearings replaced by video-based hearings on request.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Your Scrutiny Notice Has a Deadline - Respond Before It Expires</h2>
            <div class="content-text">
                
                <p><strong>Section 143(2) notices specify a response deadline - typically 15 to 30 days. Missing this deadline does not stop the assessment. The AO proceeds based on available information.</strong></p>
                <ul>
                    <li><strong>For every addition in the 143(3) order:</strong> Tax at applicable slab rate (up to 30% + surcharge + cess) + interest u/s 234B/234C + penalty u/s 270A at 50%-200%</li>
                    <li><strong>An INR 5 lakh addition</strong> can become an INR 3-4 lakh demand with interest and penalty</li>
                    <li><strong>Best Judgment Assessment u/s 144</strong> if you fail to respond - high-pitched additions with limited remedy</li>
                    <li><strong>Penalty of INR 10,000 per failure</strong> to comply under Section 272A(1)(d)</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert CA Representation for Your Scrutiny Notice - Starting at INR 2,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">An income tax scrutiny notice under Section 143(3) requires a timely, evidence-based, and professionally crafted response. Whether your return was selected by CASS for a limited issue or a complete scrutiny, the quality of your response determines whether the 143(3) order is clean or laden with additions.</p>
                <p style="color:rgba(255,255,255,0.9);">With Patron Accounting's experienced CA team, you get comprehensive scrutiny defence - from the first e-Proceedings submission to hearing representation and CIT(A) appeal if needed. Our 71% addition deletion rate demonstrates the value of professional representation.</p>
                <p style="color:rgba(255,255,255,0.9);"><strong>Starting at INR 2,999 (Exl GST and Govt. Charges) | 1,400+ Scrutiny Cases | 71% Additions Deleted | Free 30-Min Review</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Section%20143%283%29%20Scrutiny%20Defence%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Section%20143(3)%20Scrutiny%20Defence&body=Hello%2C%20I%20just%20visited%20your%20Section%20143%283%29%20Scrutiny%20Defence%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Section 143(3) Scrutiny Defence - Available in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides expert CA representation for income tax scrutiny assessments across major cities in India.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/income-tax-notices-under-section-143-3/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/income-tax-notices-under-section-143-3/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/income-tax-notices-under-section-143-3/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/income-tax-notices-under-section-143-3/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Income Tax Services</div><div class="pa-block-sub">Complete income tax notice defence and compliance support</div><div class="pa-cross-grid"><a href="/income-tax-notices-under-section-142-1" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IT Notice Section 142(1)</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-notices-under-section-147" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IT Notice Section 147</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-notices-under-section-148" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IT Notice Section 148</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-demand-under-section-156" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IT Demand Section 156</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Notice Hub</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers Income Tax Notice under Section 143(3) (Scrutiny Assessment). Content is reviewed annually. CBDT scrutiny selection criteria change each year. All statutory references verified against Income Tax Act, 1961 and Faceless Assessment Scheme 2020 as of March 2026.</p>
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
