
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>Trademark Rectification Mumbai - TM-O, Grounds & Process</title>
    <meta name="description" content="Trademark rectification in Mumbai. S.57 cancellation, S.47 non-use removal, rectification petition, Trademark Registry Antop Hill, Bombay HC. CA-led. Call +91 945 945 6700.">
    <link rel="canonical" href="/trademark-rectification/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trademark Rectification Mumbai - TM-O, Grounds & Process">
    <meta property="og:description" content="Trademark rectification in Mumbai. S.57 cancellation, S.47 non-use removal, rectification petition, Trademark Registry Antop Hill, Bombay HC. CA-led. Call +91 945 945 6700.">
    <meta property="og:url" content="/trademark-rectification/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trademark Rectification Mumbai - TM-O, Grounds & Process">
    <meta name="twitter:description" content="Trademark rectification in Mumbai. S.57 cancellation, S.47 non-use removal, rectification petition, Trademark Registry Antop Hill, Bombay HC. CA-led. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Trademark Rectification in Mumbai",
      "description": "Trademark rectification in Mumbai. S.57 cancellation, S.47 non-use removal, rectification petition, Trademark Registry Antop Hill, Bombay HC. CA-led. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/trademark-rectification/mumbai",
      "serviceType": "Trademark Rectification in Mumbai",
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
          "name": "Trademark Rectification: Process & Grounds",
          "item": "https://www.patronaccounting.com/trademark-rectification"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Trademark Rectification in Mumbai",
          "item": "https://www.patronaccounting.com/trademark-rectification/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is trademark rectification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trademark rectification is the legal process under Sections 47 and 57 of Trade Marks Act 1999 to cancel vary or correct entries in the Register of Trademarks. S.47 specifically addresses removal for non-use with no bona fide use for 5 continuous years. S.57 broadly covers contravention of Act provisions absence or omission from Register error in registration and wrongful retention. Filed via Form TM-O with statement of case before Trademark Registry Antop Hill for Mumbai jurisdiction or Bombay HC IP Division. Any person aggrieved whose legal or commercial rights are affected can file."
          }
        },
        {
          "@type": "Question",
          "name": "What are the grounds for trademark rectification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Multiple grounds: non-use under S.47 with no bona fide use for 5 plus continuous years and burden on proprietor to prove use. Contravention of conditions under S.57(1). Wrongful registration under S.57(2) where mark should never have been registered because it is descriptive generic deceptive or similar to prior mark. Bad faith registration with knowledge of petitioner prior use. Fraud or misrepresentation in obtaining registration. Error or omission as clerical or substantive error. Public interest where mark causes consumer confusion. Multiple grounds can be combined in one petition."
          }
        },
        {
          "@type": "Question",
          "name": "Who can file a rectification petition?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Any person aggrieved which is broadly interpreted by courts. Includes registered trademark owners whose marks conflict with the target entry, applicants whose applications are blocked by target registration, prior users of same or similar mark who never registered but have common law rights, competitors whose business is affected by wrongful entry, consumers or public interest parties, and the Registrar or HC suo motu under S.57(4). You do NOT need to be registered proprietor. Unregistered prior users and pending applicants can file."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between S.47 and S.57?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "S.47 is narrow and specifically for non-use. Mark not used in bona fide trade for 5 continuous years. Burden of proving use is on registered proprietor. S.57 is broad and covers ALL types of Register correction including contravention of conditions, absence omission error wrongful retention, and incidental matters. Both can be invoked in same petition with S.47 for non-use plus S.57 for additional grounds like mark being descriptive deceptive or registered in bad faith. Most Mumbai petitions cite both sections to maximise success chances."
          }
        },
        {
          "@type": "Question",
          "name": "Where to file a rectification petition?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Two forums: Trademark Registry filed at registry where mark was registered which for Mumbai jurisdiction is Antop Hill Wadala Mumbai 400037 suitable for straightforward non-use matters. High Court for Mumbai matters is Bombay HC Original Side IP Division Fort suitable for complex high-value urgent matters and cases with S.124 infringement interplay. Since IPAB abolition 2021 all trademark appeals go directly to High Court making Mumbai uniquely advantageous with direct Bombay HC access. Patron advises on optimal forum based on complexity urgency and cost."
          }
        },
        {
          "@type": "Question",
          "name": "Can rectification be used as a defence in an infringement suit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes and it is a powerful counter-attack. If sued for infringement and believe plaintiff mark is invalid you can raise plea of invalidity in the suit. Court frames the issue and stays suit for 3 months under S.124 for you to file rectification petition. If rectification succeeds plaintiff mark removed and infringement suit fails. Patel Field Marshal 2021 SC clarified this procedure must be followed precisely. If you abandon invalidity plea the right to rectification is lost FOREVER. Patron manages S.124 interplay meticulously. Quick Answers Trademark rectification kya hota hai? Register mein kisi mark ko cancel, change, ya correct karna. S.47: 5 saal se use nahi kiya = hatao. S.57: galat tarike se registered, generic, bad faith = hatao. Form TM-O file karo Antop Hill Registry ya Bombay HC mein. Aapke rights affected hone chahiye. BANDOOK 2026: agar proprietor use prove nahi karta toh mark hat jaata hai. S.47 non-use kaise kaam karti hai? 5 saal continuous use nahi = mark hatao. SABSE IMPORTANT: use PROVE karna PROPRIETOR KI zimmedari hai, aapki nahi! Agar proprietor appear nahi karta ya evidence nahi deta = mark hat jaata hai. Registrar ya Bombay HC? Dono option. Antop Hill: simple matters, kam cost. Bombay HC Fort: complex, urgent, experienced IP judges. IPAB 2021 mein abolish hua toh ab appeals directly HC jaati hain. Patron dono se 10-15 minute pe hai."
          }
        }
      ]
    }
  ]
}</script>
@endsection

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
                        Trademark Rectification in Mumbai: Cancellation, Removal, and Correction of the Trademark Register Under Sections 47 and 57 of the Trade Marks Act 1999
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>What:</span> Legal process to cancel, vary, or correct entries in the Register - removing marks that should not be there, correcting errors, clearing dead/unused/squatted registrations</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Two Sections:</span> S.57 (rectification - cancel/vary/correct for contravention, error, wrongful retention) | S.47 (removal for non-use - no use for 5 continuous years)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Who Can File:</span> 'Person aggrieved' - brand owner blocked, competitor, prior user. Filed at Trademark Registry Antop Hill OR Bombay HC IP Division. Form TM-O</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Key Ruling:</span> BANDOOK 2026 DHC: unrebutted non-use = deemed admission = removal. Burden of proving use on registered proprietor. Since IPAB abolition: appeals directly to HC</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=TM%20Rectification%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Trademark%20Rectification%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Rectification%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Trademark Rectification',
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
    'ctaText'    => 'From BKC corporate brand clearance to Powai startup squatter removal to Andheri pharma Class 5 congestion - Mumbai\'s brand owners trust Patron for trademark rectification.',
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
            <a href="#comparison-section" class="toc-btn">S.47 vs S.57</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Rectification in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trademark Rectification Services at a Glance</strong></p>
                    <p>S.47: non-use removal (5 years, burden on proprietor). S.57: rectification (cancel/vary/correct for contravention, error, wrongful retention, bad faith). Form TM-O at Antop Hill Registry or Bombay HC. 'Person aggrieved' standing. BANDOOK 2026: unrebutted non-use = removal. Since IPAB abolition: HC directly. Mumbai = highest Register congestion. Dead/squatted/erroneous marks blocking legitimate businesses.</p>
                </div>
                <p>Mumbai's trademark Register is one of India's most congested - thousands of dead, squatted, and erroneous marks blocking legitimate brand expansion. Rectification is the legal tool to clean it. Learn more about <a href="/trademark-rectification">trademark rectification across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>S.47 (Non-Use)</td><td>No bona fide use for 5 continuous years. Burden on proprietor. BANDOOK 2026: unrebutted = removal</td></tr>
                        <tr><td>S.57 (Rectification)</td><td>Contravention, error, omission, wrongful retention, bad faith, generic/descriptive marks</td></tr>
                        <tr><td>Form + Filing</td><td>Form TM-O + statement of case. Antop Hill Registry (straightforward) or Bombay HC (complex)</td></tr>
                        <tr><td>Standing</td><td>'Person aggrieved' - brand owner blocked, competitor, prior user, pending applicant</td></tr>
                        <tr><td>S.124 Interplay</td><td>If infringement suit pending: 3-month window to file. Miss = right lost forever (Patel Field Marshal 2021)</td></tr>
                        <tr><td>Post-IPAB (2021)</td><td>All appeals directly to Bombay HC. Faster, experienced IP Division</td></tr>
                        <tr><td>Post-Rectification</td><td>Blocking mark removed = file own application immediately. Complete brand clearance</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Rectification is part of complete brand clearance. Patron integrates with <a href="/trademark-registration/mumbai">trademark registration</a>, <a href="/trademark-opposition/mumbai">opposition</a>, <a href="/trademark-infringement/mumbai">infringement enforcement</a>, <a href="#">objection handling</a>, and <a href="/trademark-hearing/mumbai">hearing</a>.</p>
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
                <h2 class="section-title">What Is Trademark Rectification?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Trademark rectification is the legal process under Sections 47 and 57 to cancel, vary, or correct entries in the Register - ensuring it accurately reflects legitimate trademark rights and removing marks that should not be there.</p>
                    <p>S.57 is BROAD (all types of correction). S.47 is SPECIFIC (non-use for 5+ years). Most petitions invoke BOTH. If you missed the opposition window, rectification is your remaining remedy.</p>
                    <p>Filed at Trademark Registry (<a href="https://ipindia.gov.in" target="_blank" rel="noopener">ipindia.gov.in</a>) Antop Hill or Bombay HC. Since IPAB abolition (2021), appeals directly to HC. Learn more at <a href="/trademark-rectification">our national rectification practice</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trademark Rectification:</strong></p>
                    <ul>
                        <li><strong>S.47 Non-Use (5 Years):</strong> No bona fide use for 5 continuous years. BURDEN on proprietor to prove use. BANDOOK 2026: unrebutted = deemed admitted = removed.</li>
                        <li><strong>S.57 Rectification (Broad):</strong> Contravention, error, omission, wrongful retention, descriptive/generic marks, bad faith. Suo motu power S.57(4).</li>
                        <li><strong>S.124 Interplay:</strong> If infringement suit pending: 3-month window. Miss or abandon = right lost FOREVER (Patel Field Marshal 2021 SC).</li>
                        <li><strong>'Person Aggrieved':</strong> Broad standing. Brand owner blocked, competitor, prior user, pending applicant. Courts interpret liberally.</li>
                        <li><strong>Two Forums:</strong> Registrar (Antop Hill - straightforward, lower cost) or Bombay HC (Fort - complex, faster, experienced IP judges).</li>
                        <li><strong>Post-Rectification:</strong> Blocking mark removed = file own application IMMEDIATELY. Secure cleared Register space. Complete brand clearance.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trademark Rectification</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Register</span>
                        <strong>Cleared</strong>
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
            <h2 class="section-title">Who Needs Trademark Rectification in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Corporates (BKC, Nariman Point):</strong> Dead marks blocking brand expansion into new product lines. Register clearance for portfolio growth. <a href="/trademark-registration/mumbai">Trademark registration</a>.</p>
                <p><strong>Startups (Powai, BKC):</strong> Squatters registered brand name in bad faith. Need rectification to reclaim and register. <a href="/trademark-opposition/mumbai">Opposition</a> for new conflicts.</p>
                <p><strong>Pharma (Andheri MIDC, Thane):</strong> Class 5 congestion with thousands of unused drug names blocking new drug launches. <a href="/trademark-hearing/mumbai">Hearing</a> support.</p>
                <p><strong>Restaurants (Bandra, Andheri):</strong> Dormant Class 43 registrations blocking restaurant names. Defunct entities holding marks. <a href="#">Objection handling</a>.</p>
                <p><strong>Infringement Defendants:</strong> Counter-attack against plaintiff's invalid mark via S.124 procedure. If plaintiff's mark removed, infringement claim fails. <a href="/trademark-infringement/mumbai">Infringement</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Rectification Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Petition Analysis</td><td>Register search on ipindia.gov.in. Grounds assessment (S.47 non-use / S.57 contravention/error/bad faith). 'Person aggrieved' standing verification. Forum selection (Registrar vs HC). Cost-benefit analysis</td></tr>
                        <tr><td>Form TM-O + Statement of Case</td><td>Rectification petition: petitioner details, target mark, detailed grounds (S.47/S.57), chronological facts with evidence references, case law (Patel Field Marshal, BANDOOK), prayer for cancellation/removal/correction</td></tr>
                        <tr><td>Evidence Compilation</td><td>S.47 non-use: market surveys, trade directories, investigator reports, online searches showing no activity. S.57: dictionary definitions (generic), confusion evidence, bad faith proof. Notarised affidavits with exhibits</td></tr>
                        <tr><td>Hearing Preparation + Representation</td><td>Written submissions + oral arguments. Before Registrar at Antop Hill or Bombay HC at Fort. Challenge token use evidence. Present case law. Respond to questions. VC or physical</td></tr>
                        <tr><td>S.124 Interplay Management</td><td>For infringement defendants: invalidity plea > court frames issue > 3-month rectification filing > suit stayed. Precise sequence critical per Patel Field Marshal 2021 SC. Miss = right lost forever</td></tr>
                        <tr><td>Defence Against Rectification</td><td>Counter-statement + evidence of bona fide use (invoices, advertising, revenue, market presence). Legal arguments defending registration validity. Hearing representation</td></tr>
                        <tr><td>Post-Rectification Brand Clearance</td><td>Blocking mark removed = immediately file own trademark application. Secure cleared Register space before another party files. Complete clearance: rectification > removal > own filing > registration</td></tr>
                        <tr><td>Integrated Brand Protection</td><td><a href="/trademark-registration/mumbai">Registration</a> + <a href="/trademark-opposition/mumbai">opposition</a> + rectification + <a href="/trademark-infringement/mumbai">infringement</a>. Complete brand defence from one firm</td></tr>

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
            <h2 class="section-title">How Trademark Rectification Works in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 7-step process covers complete rectification - from pre-petition analysis through Form TM-O drafting, filing, evidence stages, hearing, decision, to post-rectification brand clearance with immediate own filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Pre-Petition Analysis</h3>
        <p class="step-description">Register search on ipindia.gov.in - verify target mark details. Grounds assessment: S.47 non-use (5+ years?), S.57 contravention/error/bad faith/generic/descriptive. 'Person aggrieved' standing verification. Forum selection: Registrar (Antop Hill) or Bombay HC (Fort). Cost-benefit analysis.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grounds identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Standing verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Forum selected</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ANALYSE</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Grounds Assessed</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Forum Selected</text></svg></div>
            <span class="illustration-label">Analysis Complete</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Form TM-O + Statement of Case</h3>
        <p class="step-description">Draft rectification petition: petitioner details and standing, target mark (registration number, class, proprietor), detailed grounds (S.47 + S.57), chronological facts with evidence references, case law citations (BANDOOK, Patel Field Marshal), prayer for cancellation/removal. Filed in duplicate.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Petition drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grounds detailed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Case law cited</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TM-O DRAFT</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">S.47 + S.57</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Case Law Cited</text></svg></div>
            <span class="illustration-label">Petition Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Service on Registered Proprietor</h3>
        <p class="step-description">Registry serves petition on registered proprietor. Proprietor has prescribed time to file counter-statement defending their registration. If proprietor doesn't respond: default strengthens petitioner's case (BANDOOK 2026 - unrebutted = deemed admitted).</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Petition served</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deadline set</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Response awaited</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SERVE</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Proprietor Notified</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Counter-Statement</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">or Default</text></svg></div>
            <span class="illustration-label">Proprietor Notified</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Evidence Stages</h3>
        <p class="step-description">Petitioner's evidence: affidavits proving non-use (market surveys, trade directories, investigator reports) or error (dictionary definitions, confusion evidence, bad faith proof). Proprietor's evidence: proving use/validity. Reply evidence. All properly notarised and indexed.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Non-use proved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Affidavits filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Exhibits documented</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EVIDENCE</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Non-Use Proved</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Affidavits Filed</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Exhibits Indexed</text></svg></div>
            <span class="illustration-label">Evidence Complete</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Hearing</h3>
        <p class="step-description">Before Registrar (Antop Hill) or Bombay HC (Fort). Written submissions + oral arguments. Both parties heard. Patron challenges token use, presents BANDOOK precedent, demonstrates grounds. Physical or VC. Coordination with IP counsel for HC matters.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Arguments presented</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Token use challenged</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Case law applied</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">HEARING</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Antop Hill / HC</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Arguments</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Both Parties Heard</text></svg></div>
            <span class="illustration-label">Hearing Done</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Decision</h3>
        <p class="step-description">Registrar or HC decides: cancel mark, vary registration, correct entry, or dismiss petition. Written order communicated to both parties. Register updated accordingly. If dismissed: appeal to Bombay HC (from Registrar) or Supreme Court (from HC).</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Decision received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Register updated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mark removed/varied</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">CANCELLED</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Register Cleared</text></svg></div>
            <span class="illustration-label">Register Cleared</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Post-Rectification Brand Clearance</h3>
        <p class="step-description">Blocking mark removed from Register. Patron IMMEDIATELY files client's own trademark application - securing the cleared space before another party files. Complete clearance: rectification > removal > own filing > registration. Brand fully protected.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cleared space secured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Own application filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Brand registered</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OWN FILING</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Space Cleared</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">Application Filed</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Brand Secured</text></svg></div>
            <span class="illustration-label">Brand Secured</span>
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
            <h2 class="section-title">Documents Required for Trademark Rectification</h2>
            <div class="content-text">
                
                <ul><li><strong>Form TM-O + Statement of Case:</strong> Rectification petition with grounds, facts, relief sought. Filed in duplicate.</li><li><strong>Petitioner's TM Registration (if any):</strong> Own registration in same/similar class proving 'person aggrieved' standing.</li><li><strong>Evidence of Prior Use:</strong> Invoices, ads, packaging, website since first use date. Proves aggrievement and own rights.</li><li><strong>Target Mark Registration Details:</strong> Registration number, class, proprietor from ipindia.gov.in.</li><li><strong>Evidence of Non-Use (S.47):</strong> Market surveys, trade directories, investigator reports, online searches showing no commercial activity.</li><li><strong>Evidence of Error/Contravention (S.57):</strong> Dictionary definitions (generic), confusion evidence (deceptive), bad faith evidence.</li><li><strong>Affidavits:</strong> Notarised sworn statements from petitioner, investigators, industry experts.</li><li><strong>Case Law Compilation:</strong> Patel Field Marshal, BANDOOK, analogous rectification precedents.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>BANDOOK 2026 - Key Precedent:</strong> Delhi HC ruled that unrebutted non-use allegation = deemed admission = mark removed. Registered proprietor who fails to appear or deny has ALL allegations admitted. The Register must be kept free of dead/unused marks. This ruling significantly strengthens rectification petitioners - especially in Mumbai where thousands of marks sit on the Register without any commercial use.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Trademark Rectification Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>'Person Aggrieved' Standing</td><td>Must demonstrate legal/commercial interest. Not just anyone can file. BKC company blocked by dead mark, Powai startup squatted</td><td>Documentary evidence of standing: own registration, pending application blocked, prior use, commercial prejudice. Patron establishes standing before filing</td></tr>
                        <tr><td>Token Use Defence</td><td>Proprietor produces few recent invoices suggesting token use to defeat S.47 petition. Not genuine commercial activity</td><td>Challenge authenticity, question commercial scale, demonstrate recent use was manufactured. BANDOOK 2026: unrebutted non-use = removal. Courts increasingly sceptical</td></tr>
                        <tr><td>S.124 Timing</td><td>Infringement defendant has exactly 3 months to file rectification after court frames issue. Miss = right lost FOREVER</td><td>Precise S.124 sequence managed: invalidity plea > issue framing > 3-month filing > suit stayed. Patron navigates this regularly from Marine Lines</td></tr>
                        <tr><td>Proceedings Length</td><td>Registrar: 12-36+ months. HC may be faster but higher cost. Commercial urgency vs procedural timeline</td><td>Forum selection optimised: Registrar for straightforward, HC for urgent/complex. Parallel strategies: coexistence negotiation while rectification pending</td></tr>
                        <tr><td>Multiple Blocking Marks</td><td>Not one but MULTIPLE dead marks blocking in congested classes (Class 5 pharma, Class 43 restaurant, Class 42 IT)</td><td>Comprehensive Register clearance: identify ALL blocking marks, assess vulnerability, file strategic petitions. Complete path clearance for client registration</td></tr>

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
            <h2 class="section-title">Trademark Rectification Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Form TM-O (Registrar, e-filing)</td><td>Rs 2,700/class (individual/MSME)</td></tr>
                        <tr><td>Form TM-O (Bombay HC)</td><td>HC court fees apply</td></tr>
                        <tr><td>Patron: Pre-Petition Analysis</td><td>Rs 5,000 - Rs 15,000</td></tr>
                        <tr><td>Patron: Petition + Filing (Registrar)</td><td>Rs 20,000 - Rs 50,000</td></tr>
                        <tr><td>Patron: Petition + Filing (Bombay HC)</td><td>Rs 50,000 - Rs 1,50,000</td></tr>
                        <tr><td>Patron: Defence Against Rectification</td><td>Rs 20,000 - Rs 60,000</td></tr>
                        <tr><td>Patron: Register Clearance (Multiple)</td><td>Rs 50,000 - Rs 2,00,000+</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trademark Rectification consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Rectification%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Rectification Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Petition Analysis</td><td>3-7 days</td></tr>
                        <tr><td>Petition Drafting</td><td>5-10 days</td></tr>
                        <tr><td>Service on Proprietor</td><td>1-3 months</td></tr>
                        <tr><td>Evidence Stages</td><td>3-6 months</td></tr>
                        <tr><td>Hearing</td><td>3-12 months after evidence</td></tr>
                        <tr><td>Total (Registrar)</td><td>12-36+ months</td></tr>
                        <tr><td>Total (Bombay HC)</td><td>6-24 months (often faster)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Walk-in at Patron's Marine Lines, Mumbai office. Trademark Registry: Antop Hill (15 min). Bombay HC: Fort (10 min). Forum selection matters: Registrar for straightforward non-use matters (lower cost, longer timeline). Bombay HC for complex/urgent matters (higher cost, often faster, experienced IP judges). S.124 matters: exactly 3-month window - no flexibility. Patron drafts and files within 2-3 weeks of engagement.</p>

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
            <h2 class="section-title">Why Choose Patron for Trademark Rectification in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Grounds-Specific Expertise</h3><p>S.47 non-use + S.57 contravention + wrongful retention + genericness + bad faith. Multiple overlapping grounds for comprehensive pleading. BANDOOK 2026 precedent application.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Evidence-First Approach</h3><p>Non-use investigation (market surveys, trade directories, online searches). Error evidence (dictionary definitions, confusion proof). Compiled BEFORE filing. Comprehensive affidavits with exhibits.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Forum Selection Expertise</h3><p>Registrar (Antop Hill, 15 min) for straightforward. Bombay HC (Fort, 10 min) for complex/urgent. S.124 infringement interplay managed precisely. Optimal cost-timeline-outcome.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Post-Rectification Clearance</h3><p>Blocking mark removed = immediately file own application. Secure cleared space. Complete: rectification > removal > own filing > registration. Both sides: filing + defending. 10,000+ businesses, 4.9 rating.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Brand Owners Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Four offices: Pune, Mumbai, Delhi, Gurugram. Filing and defending rectification petitions for corporates, startups, pharma, restaurants, and trading companies across Mumbai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">S.47 vs S.57 Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>S.47 (Non-Use Removal)</th><th>S.57 (Rectification)</th></tr></thead>
                    <tbody>
                        <tr><td>Focus</td><td>Specifically: NON-USE of registered mark</td><td>Broadly: any error, contravention, wrongful entry</td></tr>
                        <tr><td>Grounds</td><td>No bona fide use for 5 continuous years</td><td>Contravention, error, omission, wrongful retention, bad faith</td></tr>
                        <tr><td>Burden of Proof</td><td>On REGISTERED PROPRIETOR to prove use</td><td>On PETITIONER (but less onerous for non-use element)</td></tr>
                        <tr><td>Typical Use</td><td>Clearing dead/unused marks</td><td>Removing wrongly registered, generic, bad faith marks</td></tr>
                        <tr><td>Filed Together?</td><td>Often combined with S.57</td><td>Can be alone or with S.47</td></tr>
                        <tr><td>BANDOOK 2026</td><td>Unrebutted non-use = deemed admitted = removed</td><td>Applies when combined with S.57 grounds</td></tr>
                        <tr><td>Mumbai Application</td><td>Class 5 pharma / Class 43 restaurant congestion</td><td>Generic/descriptive marks, bad faith squatters</td></tr>

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
            <h2 class="section-title">Related Services for Mumbai Brand Clearance</h2>
            <div class="content-text">
                
                <p>Mumbai businesses clearing the Register often need:</p>
                <ul><li><a href="/trademark-rectification">Trademark Rectification (India)</a> - National overview.</li>
                    <li><a href="/trademark-registration/mumbai">Trademark Registration in Mumbai</a> - Post-clearance filing.</li>
                    <li><a href="/trademark-opposition/mumbai">Trademark Opposition in Mumbai</a> - Pre-registration challenge.</li>
                    <li><a href="/trademark-infringement/mumbai">Trademark Infringement in Mumbai</a> - Enforcement.</li>
                    <li><a href="#">Trademark Objection in Mumbai</a> - Examination reply.</li>
                    <li><a href="/trademark-hearing/mumbai">Trademark Hearing in Mumbai</a> - Registry hearing.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Trademark Rectification</h2>
            <div class="content-text">
                
                <p><strong>S.47 - Non-Use Removal:</strong></p>
                <ul><li>S.47(1)(a): no bona fide intention + no use within 5 years. S.47(1)(b): no use for 5 continuous years + 3 months. Burden on proprietor.</li></ul>
                <p style="margin-top:16px;"><strong>S.57 - Rectification:</strong></p>
                <ul><li>S.57(1): contravention. S.57(2): absence, omission, error, wrongful retention. S.57(3): incidental. S.57(4): suo motu.</li></ul>
                <p style="margin-top:16px;"><strong>S.124 - Infringement Interplay:</strong></p>
                <ul><li>Patel Field Marshal (2021 SC): 3-month window when invalidity raised in suit. BANDOOK (2026 DHC): unrebutted non-use = removal.</li></ul>
                <p style="margin-top:16px;"><strong>Since IPAB Abolition (2021):</strong> All appeals directly to HC. Bombay HC IP Division for Mumbai matters.</p>
                <p style="margin-top:16px;"><strong>Portals:</strong> <a href="https://ipindia.gov.in" target="_blank" rel="noopener">IP India</a> | <a href="https://indiacode.nic.in" target="_blank" rel="noopener">India Code</a> | <a href="https://bombayhighcourt.nic.in" target="_blank" rel="noopener">Bombay HC</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: Trademark Rectification in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about trademark rectification, grounds, who can file, S.47 vs S.57 difference, where to file, and using rectification as an infringement defence.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Trademark Rectification',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is trademark rectification?</h3>
                        <div class="faq-expanded__a"><p>Trademark rectification is the legal process under Sections 47 and 57 of Trade Marks Act 1999 to cancel vary or correct entries in the Register of Trademarks. S.47 specifically addresses removal for non-use with no bona fide use for 5 continuous years. S.57 broadly covers contravention of Act provisions absence or omission from Register error in registration and wrongful retention. Filed via Form TM-O with statement of case before Trademark Registry Antop Hill for Mumbai jurisdiction or Bombay HC IP Division. Any person aggrieved whose legal or commercial rights are affected can file.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the grounds for trademark rectification?</h3>
                        <div class="faq-expanded__a"><p>Multiple grounds: non-use under S.47 with no bona fide use for 5 plus continuous years and burden on proprietor to prove use. Contravention of conditions under S.57(1). Wrongful registration under S.57(2) where mark should never have been registered because it is descriptive generic deceptive or similar to prior mark. Bad faith registration with knowledge of petitioner prior use. Fraud or misrepresentation in obtaining registration. Error or omission as clerical or substantive error. Public interest where mark causes consumer confusion. Multiple grounds can be combined in one petition.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Who can file a rectification petition?</h3>
                        <div class="faq-expanded__a"><p>Any person aggrieved which is broadly interpreted by courts. Includes registered trademark owners whose marks conflict with the target entry, applicants whose applications are blocked by target registration, prior users of same or similar mark who never registered but have common law rights, competitors whose business is affected by wrongful entry, consumers or public interest parties, and the Registrar or HC suo motu under S.57(4). You do NOT need to be registered proprietor. Unregistered prior users and pending applicants can file.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between S.47 and S.57?</h3>
                        <div class="faq-expanded__a"><p>S.47 is narrow and specifically for non-use. Mark not used in bona fide trade for 5 continuous years. Burden of proving use is on registered proprietor. S.57 is broad and covers ALL types of Register correction including contravention of conditions, absence omission error wrongful retention, and incidental matters. Both can be invoked in same petition with S.47 for non-use plus S.57 for additional grounds like mark being descriptive deceptive or registered in bad faith. Most Mumbai petitions cite both sections to maximise success chances.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Where to file a rectification petition?</h3>
                        <div class="faq-expanded__a"><p>Two forums: Trademark Registry filed at registry where mark was registered which for Mumbai jurisdiction is Antop Hill Wadala Mumbai 400037 suitable for straightforward non-use matters. High Court for Mumbai matters is Bombay HC Original Side IP Division Fort suitable for complex high-value urgent matters and cases with S.124 infringement interplay. Since IPAB abolition 2021 all trademark appeals go directly to High Court making Mumbai uniquely advantageous with direct Bombay HC access. Patron advises on optimal forum based on complexity urgency and cost.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can rectification be used as a defence in an infringement suit?</h3>
                        <div class="faq-expanded__a"><p>Yes and it is a powerful counter-attack. If sued for infringement and believe plaintiff mark is invalid you can raise plea of invalidity in the suit. Court frames the issue and stays suit for 3 months under S.124 for you to file rectification petition. If rectification succeeds plaintiff mark removed and infringement suit fails. Patel Field Marshal 2021 SC clarified this procedure must be followed precisely. If you abandon invalidity plea the right to rectification is lost FOREVER. Patron manages S.124 interplay meticulously.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Trademark rectification kya hota hai?</strong> Register mein kisi mark ko cancel, change, ya correct karna. S.47: 5 saal se use nahi kiya = hatao. S.57: galat tarike se registered, generic, bad faith = hatao. Form TM-O file karo Antop Hill Registry ya Bombay HC mein. Aapke rights affected hone chahiye. BANDOOK 2026: agar proprietor use prove nahi karta toh mark hat jaata hai.</p>
                <p><strong>S.47 non-use kaise kaam karti hai?</strong> 5 saal continuous use nahi = mark hatao. SABSE IMPORTANT: use PROVE karna PROPRIETOR KI zimmedari hai, aapki nahi! Agar proprietor appear nahi karta ya evidence nahi deta = mark hat jaata hai.</p>
                <p><strong>Registrar ya Bombay HC?</strong> Dono option. Antop Hill: simple matters, kam cost. Bombay HC Fort: complex, urgent, experienced IP judges. IPAB 2021 mein abolish hua toh ab appeals directly HC jaati hain. Patron dono se 10-15 minute pe hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Clear the Register - Secure Your Brand</h2>
            <div class="content-text">
                
                <p>Every day a dead/squatted/erroneous mark stays on the Register: your brand expansion is blocked, your application is stuck, your competitor benefits from a mark they don't use. For S.124 infringement defence: exactly 3 months - miss it and the right is lost FOREVER. Rectification takes months - the sooner you file, the sooner the Register is cleared and your brand is protected.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Rectification%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Remove Blocking Marks - Register Your Brand</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Trademark rectification under S.47/S.57 is the essential Register-cleaning tool. Non-use (5 years, burden on proprietor), contravention, error, wrongful retention, bad faith, generic marks. BANDOOK 2026: unrebutted non-use = removal. Form TM-O at Antop Hill or Bombay HC.</p>
                <p style="color:rgba(255,255,255,0.9);">Mumbai's Register is India's most congested. Dead marks blocking BKC corporates, squatted marks blocking Powai startups, unused drug names blocking Andheri pharma, dormant registrations blocking Bandra restaurants. Since IPAB abolition: Bombay HC directly.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron delivers pre-petition analysis, Form TM-O drafting, evidence compilation, hearing representation, S.124 management, defence against rectification, and post-rectification clearance from Marine Lines (15 min from Antop Hill, 10 min from Bombay HC). 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Rectification%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Trademark%20Rectification%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Trademark%20Rectification%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trademark Rectification Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides trademark rectification and Register clearance services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">Trademark rectification and Register clearance</div>
                <div class="pa-city-grid">
                    <a href="/trademark-rectification/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/trademark-rectification/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/trademark-rectification/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">Complete brand clearance and protection</div>
                <div class="pa-cross-grid">
                    <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-opposition/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Opposition</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-infringement/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Infringement</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Objection</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-hearing/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Hearing</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/copyright-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers trademark rectification in Mumbai. Content reviewed half-yearly (Freshness Tier 2) reflecting judicial developments, HC rulings, and procedural updates.</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
