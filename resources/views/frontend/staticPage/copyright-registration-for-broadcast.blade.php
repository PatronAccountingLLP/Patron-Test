
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Copyright for Broadcast Rights - TV, Radio & Streaming</title>
    <meta name="description" content="Copyright registration for broadcast under Section 37, Copyright Act 1957. 25-year protection. Broadcast reproduction right. Expert CA and CS team.">
    <link rel="canonical" href="/copyright-registration-for-broadcast">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Copyright for Broadcast Rights - TV, Radio & Streaming">
    <meta property="og:description" content="Copyright registration for broadcast under Section 37, Copyright Act 1957. 25-year protection. Broadcast reproduction right. Expert CA and CS team.">
    <meta property="og:url" content="/copyright-registration-for-broadcast">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copyright for Broadcast Rights - TV, Radio & Streaming">
    <meta name="twitter:description" content="Copyright registration for broadcast under Section 37, Copyright Act 1957. 25-year protection. Broadcast reproduction right. Expert CA and CS team.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Copyright for Broadcast: Section 37 Guide",
          "description": "Copyright registration for broadcast under Section 37, Copyright Act 1957. 25-year protection. Broadcast reproduction right. Expert CA and CS team.",
          "url": "https://www.patronaccounting.com/copyright-registration-for-broadcast",
          "serviceType": "Copyright for Broadcast: Section 37 Guide",
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
            "url": "https://www.patronaccounting.com/copyright-registration-for-broadcast",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "2",
              "maxPrice": "50000",
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
              "name": "Copyright for Broadcast: Section 37 Guide",
              "item": "https://www.patronaccounting.com/copyright-registration-for-broadcast"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the broadcast reproduction right under Indian law?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The broadcast reproduction right is a special right granted to every broadcasting organization under Section 37(1) of the Copyright Act, 1957. It gives the broadcaster exclusive control over re-broadcasting, recording, reproduction, sale and rental of broadcasts. This right is independent of the copyright in the underlying content and lasts for 25 years from the calendar year following the broadcast."
              }
            },
            {
              "@type": "Question",
              "name": "How long does broadcast copyright protection last?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 37(2), broadcast reproduction rights subsist for 25 years from the beginning of the calendar year next following the year of broadcast. For example, a broadcast made in 2026 is protected until 31 December 2051. This is shorter than content copyright (lifetime + 60 years) but provides specific protection for the transmission itself."
              }
            },
            {
              "@type": "Question",
              "name": "Can OTT platforms and digital broadcasters register broadcast copyright?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. OTT platforms and digital broadcasters qualify as broadcasting organizations under Section 2(dd) of the Copyright Act, 1957, which defines broadcast broadly as communication to the public by any means of wireless diffusion or by wire. This includes internet streaming, mobile broadcasting, and IPTV. Digital broadcasters can register their broadcast reproduction rights with the Copyright Office."
              }
            },
            {
              "@type": "Question",
              "name": "Broadcast ka copyright kaise le?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Broadcast ka copyright lene ke liye Copyright Office ki website copyright.gov.in par application file karo. Broadcast ki details, transmission log, aur supporting documents submit karo. 30 din ka notice period hota hai, uske baad Registrar certificate issue karta hai. Patron Accounting pura process handle karta hai - call karo +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "What acts constitute infringement of broadcast reproduction rights?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 37(3), the following acts without license constitute infringement: re-broadcasting, causing the broadcast to be heard or seen publicly on payment, making sound or visual recordings, reproducing recordings beyond their licensed purpose, and selling, renting, or offering recordings for sale/rental. Infringement is punishable under Section 63 with imprisonment and fine."
              }
            },
            {
              "@type": "Question",
              "name": "What are the exceptions to broadcast reproduction rights?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 39 provides that private use, fair dealing for review or teaching or research, reporting current events, and other acts consistent with Section 52 do not infringe broadcast reproduction rights. These exceptions balance broadcaster protection with public interest in education and information."
              }
            },
            {
              "@type": "Question",
              "name": "Broadcast reproduction right kya hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Broadcast reproduction right ek special right hai jo har broadcasting organization ko Section 37 ke under milta hai Copyright Act, 1957 mein. Yeh right 25 saal tak rehta hai aur broadcaster ko exclusive control deta hai re-broadcasting, recording, aur sale par. Bina permission ke ye sab karna illegal hai aur Section 63 ke under punishable hai."
              }
            },
            {
              "@type": "Question",
              "name": "Is broadcast copyright different from content copyright?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Broadcast reproduction right (Section 37) protects the transmission itself - the act of broadcasting. Content copyright (Section 14) protects the creative work (script, music, performance). A broadcaster may hold broadcast rights without owning the content copyright and vice versa. Complete legal coverage requires both the content license and broadcast protection. Quick Answers Q: Does Doordarshan have broadcast rights? A: Yes. Section 37 grants broadcast reproduction rights to every broadcasting organisation, including government broadcasters like Doordarshan and AIR. Q: Can I claim broadcast rights over a podcast? A: If the podcast constitutes a broadcast (communication to the public), broadcast reproduction rights may apply. The podcast content itself can also be registered as a sound recording. Q: What is the piracy penalty? A: 6 months to 3 years imprisonment + Rs 50,000 to Rs 2 lakh fine under Section 63. Enhanced penalties under Section 63A for repeat offenders. Q: Has India signed the Rome Convention? A: No, but the Copyright Act, 1957 provides comparable protection through Section 37. Q: Can police seize pirated recordings? A: Yes, under Section 64 - police can seize infringing copies without a warrant."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-2.css') }}?v=1">
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
                        Copyright Registration for Broadcast in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">10 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Broadcast Protection:</span> Broadcast Reproduction Right under Section 37 of the Copyright Act, 1957 - exclusive control over re-broadcast, recording, reproduction, sale, and rental.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>25-Year Duration:</span> Protection lasts 25 years from the beginning of the calendar year following the broadcast under Section 37(2).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Coverage:</span> TV channels, radio stations, OTT platforms, digital broadcasters, sports broadcasting organizations, and podcast networks.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Enforcement:</span> Criminal prosecution under Section 63 - imprisonment 6 months to 3 years + fine Rs 50,000 to Rs 2 lakh. Police seizure under Section 64.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ businesses served. 50,000+ documents filed. 4.9 Google Rating. 15+ years of practice.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Broadcast%20Copyright&body=Hello%2C%20I%20just%20visited%20your%20Broadcast%20Copyright%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Broadcast%20Copyright%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Broadcast Copyright',
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
    'ctaText'    => 'Protect your broadcast content with expert copyright registration - TV, radio, OTT, sports, and digital media.',
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
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">6-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Broadcast vs Content vs Performer</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright Registration for Broadcast - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Broadcast Copyright Services at a Glance</strong></p>
                    <p>Copyright registration for broadcast protects broadcasting organizations' exclusive rights over their broadcasts under Chapter VIII (Sections 37-39A) of the Copyright Act, 1957. The broadcast reproduction right gives broadcasters exclusive control over re-broadcasting, recording, reproduction, sale, and rental. This right lasts 25 years from the beginning of the calendar year following the broadcast. Registration with the Copyright Office strengthens legal enforcement.</p>
                </div>
                <p>Copyright registration for broadcast is essential for television channels, radio stations, OTT platforms, podcast networks, and digital media companies seeking to protect their broadcast content from unauthorized re-broadcasting, recording, or commercial exploitation. Under Chapter VIII of the Copyright Act, 1957, broadcasting organizations are granted a special 'broadcast reproduction right' - a neighboring right that exists independently of the copyright in the underlying content.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Governing Law</td><td>Copyright Act, 1957 - Chapter VIII (Sections 37, 38, 39, 39A)</td></tr>
<tr><td>Right Granted</td><td>Broadcast Reproduction Right - exclusive control over broadcast content</td></tr>
<tr><td>Duration</td><td>25 years from beginning of calendar year next following broadcast (Section 37(2))</td></tr>
<tr><td>Who Can Register</td><td>TV channels, radio stations, OTT platforms, digital broadcasters</td></tr>
<tr><td>Authority</td><td>Registrar of Copyrights, Copyright Office (<a href="https://copyright.gov.in" target="_blank" rel="noopener">copyright.gov.in</a>)</td></tr>
<tr><td>Infringement Penalty</td><td>Imprisonment 6 months to 3 years + fine Rs 50,000 to Rs 2 lakh (Section 63)</td></tr>
<tr><td>International Framework</td><td>Aligned with Rome Convention principles and WIPO Broadcasting Treaty</td></tr>
</tbody></table></div></p>
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
                <h2 class="section-title">What Is Copyright for Broadcast?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Copyright for broadcast refers to the <strong>broadcast reproduction right</strong> granted to every broadcasting organization under <strong>Section 37(1) of the Copyright Act, 1957</strong> - a special right that protects the broadcast itself, independent of the copyright in the underlying literary, dramatic, musical, or artistic work.</p>
<p>Under Section 2(dd), 'broadcast' means communication to the public by any means of wireless diffusion (signs, sounds, or visual images) or by wire, including a re-broadcast. The broadcast reproduction right is categorized as a 'neighboring right' or 'related right' - it protects the broadcaster's investment in transmitting content, separate from the author's copyright in the content itself.</p>
<p>This means a TV channel broadcasting a cricket match holds broadcast reproduction rights over the telecast, while the underlying rights in the commentary, graphics, and music remain with their respective creators. The right lasts for <strong>25 years</strong> from the beginning of the calendar year following the year of broadcast under Section 37(2). Registration with the <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office</a> creates prima facie evidence of ownership under Section 48.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Broadcast Copyright:</strong></p>
                    <p><strong>Broadcast Reproduction Right:</strong> Special right under Section 37(1) giving broadcasting organizations exclusive control over re-broadcasting, recording, reproduction, sale, and rental of broadcasts for 25 years.</p>
<p><strong>Broadcasting Organization:</strong> Any entity communicating to the public by wireless diffusion or wire under Section 2(dd) - includes TV channels, radio stations, OTT platforms, and digital broadcasters.</p>
<p><strong>Neighboring Rights / Related Rights:</strong> Rights granted to entities that make works available to the public but are not the original authors - broadcasters, performers, and producers of sound recordings.</p>
<p><strong>Section 39 Fair Dealing:</strong> Exceptions for private use, teaching, research, judicial proceedings, and fair dealing for review or news reporting that do not infringe broadcast rights.</p>
<p><strong>Section 63 Penalty:</strong> Infringement punishable with 6 months to 3 years imprisonment and Rs 50,000 to Rs 2 lakh fine. Enhanced penalties under Section 63A for repeat offenders.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Broadcast Copyright -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Broadcast Copyright</text>
                            <!-- Broadcast tower -->
                            <line x1="100" y1="50" x2="100" y2="95" stroke="#14365F" stroke-width="2.5"/>
                            <line x1="85" y1="95" x2="115" y2="95" stroke="#14365F" stroke-width="2"/>
                            <line x1="90" y1="80" x2="110" y2="80" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Signal waves -->
                            <path d="M80 52 Q75 45 80 38" stroke="#F5A623" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                            <path d="M72 55 Q65 45 72 35" stroke="#F5A623" stroke-width="1.2" fill="none" stroke-linecap="round" opacity="0.6"/>
                            <path d="M120 52 Q125 45 120 38" stroke="#F5A623" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                            <path d="M128 55 Q135 45 128 35" stroke="#F5A623" stroke-width="1.2" fill="none" stroke-linecap="round" opacity="0.6"/>
                            <!-- 25 years badge -->
                            <rect x="50" y="102" width="45" height="16" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="72" y="113" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">25 Yrs</text>
                            <rect x="105" y="102" width="45" height="16" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="127" y="113" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 37</text>
                            <!-- Check badge -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Broadcast Copyright</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Broadcast Copyright</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Copyright Act, 1957</span>
                        <strong>Section 37 - Broadcast Rights</strong>
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
            <h2 class="section-title">Who Needs Copyright Registration for Broadcast?</h2>
            <div class="content-text">
                
                <p>Broadcast copyright registration is essential for any organization communicating content to the public:</p>
<ul>
<li><strong>Television Channels:</strong> News, entertainment, sports, and regional channels broadcasting original programming, live events, and curated content.</li>
<li><strong>Radio Stations:</strong> FM, AM, community, and internet radio transmitting audio content to the public.</li>
<li><strong>OTT Platforms:</strong> Streaming services delivering original content, live sports, or licensed broadcasts over the internet.</li>
<li><strong>Sports Broadcasting Organizations:</strong> Entities holding exclusive rights to telecast cricket, football, kabaddi, and other sporting events.</li>
<li><strong>Digital Media Companies and Podcast Networks:</strong> Producing and distributing audio-visual content online to public audiences.</li>
<li><strong>Production Houses:</strong> Whose content is broadcast by third-party channels and who want protection against unauthorized re-broadcasts.</li>
<li><strong>Educational and Government Broadcasters:</strong> Doordarshan, AIR, SWAYAM, and similar bodies producing and transmitting educational content.</li>
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
            <h2 class="section-title">6 Broadcast Copyright Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Broadcast Copyright Registration</td><td>Complete registration of broadcast reproduction rights with the Registrar of Copyrights at copyright.gov.in - application preparation, documentation, and filing under Section 37.</td></tr>
<tr><td>Rights Assessment and Advisory</td><td>Analysis to identify all applicable rights - broadcast reproduction right (Section 37), performer's right (Section 38), and underlying content copyright (Section 14).</td></tr>
<tr><td>Infringement Documentation and Enforcement</td><td>Evidence compilation against unauthorized re-broadcasting, illegal streaming, or piracy. Cease-and-desist notices and coordination for Section 63 prosecution.</td></tr>
<tr><td>Licensing Agreement Drafting</td><td>Broadcast licensing agreements for sub-licensing, syndication, or distribution to cable operators, DTH platforms, OTT services, and international distributors.</td></tr>
<tr><td>Copyright Assignment for Broadcasts</td><td>Transfer of broadcast reproduction rights between organizations with assignment deeds and regulatory filings. See <a href="/copyright-assignment">copyright assignment</a>.</td></tr>
<tr><td>Annual Compliance and Renewal Advisory</td><td>Monitoring of 25-year broadcast right duration, renewal strategy for underlying content copyrights, and compliance with Copyright Rules, 2013.</td></tr>

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
            <h2 class="section-title">6-Step Broadcast Copyright Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles the complete registration process - from content identification and documentation through filing, objection handling, and certificate issuance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Identify Broadcast Content and Rights</h3><p class="step-description">Catalogue the specific broadcasts to be registered - date of first broadcast, broadcasting organization, nature of content (live event, pre-recorded, news bulletin), and rights claimed under Section 37(3).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Content catalogued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 37(3) rights mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="22" width="70" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="30" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BROADCAST</text><rect x="25" y="38" width="70" height="5" rx="1" fill="#14365F" opacity="0.15"/><rect x="25" y="48" width="55" height="5" rx="1" fill="#14365F" opacity="0.15"/><rect x="25" y="58" width="60" height="5" rx="1" fill="#14365F" opacity="0.15"/><path d="M88 62l-5 8 15-12" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Content Identified</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Prepare Documentation and Evidence</h3><p class="step-description">Compile transmission logs, playout records, scheduling documentation to establish exact first broadcast date. Gather content licenses, authorization from underlying content owners, and organization details.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Transmission logs</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Evidence compiled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Application with Registrar</h3><p class="step-description">Submit copyright registration application on copyright.gov.in in Form XIV format under Copyright Rules, 2013. Include broadcast details, applicant information, nature of rights claimed, and pay prescribed fee.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form XIV filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fee paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="19" r="2" fill="#FF5F56"/><circle cx="31" cy="19" r="2" fill="#FFBD2E"/><circle cx="37" cy="19" r="2" fill="#27C93F"/><rect x="25" y="30" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="55" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">copyright.gov.in</text><rect x="55" y="52" width="30" height="12" rx="3" fill="#F5A623" opacity="0.6"/><text x="70" y="61" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">XIV</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">30-Day Notice Period</h3><p class="step-description">Application published in the Copyright Journal. Third parties may file objections during this mandatory period under Rule 70 of the Copyright Rules, 2013. If no objections, proceeds to examination.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 30-day wait</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Journal published</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="60" y="36" font-size="12" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">30</text><text x="60" y="48" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">DAYS</text></svg></div><span class="illustration-label">Notice Complete</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Address Objections (If Any)</h3><p class="step-description">If the Registrar raises a discrepancy or a third party files an objection, respond within 30 days with detailed reply. Patron Accounting handles objection replies with legal arguments and evidence.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Objections resolved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Legal defence ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="70" height="5" rx="1" fill="#F5A623" opacity="0.4"/><rect x="25" y="35" width="50" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="25" y="45" width="60" height="5" rx="1" fill="#14365F" opacity="0.1"/><circle cx="90" cy="60" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M85 60l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Resolved</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Registration Certificate Issued</h3><p class="step-description">Registrar enters the broadcast in the Register of Copyrights under Section 44 and issues the Copyright Registration Certificate. This serves as prima facie evidence under Section 48 for enforcement under Sections 63-65.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 44 recorded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="32" r="15" fill="#25D366" opacity="0.2"/><path d="M52 32l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="60" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Registered</text></svg></div><span class="illustration-label">Certificate Ready</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Broadcast Copyright Registration</h2>
            <div class="content-text">
                
                <p>Prepare the following documents before filing:</p>
<ul>
<li>Application form (Form XIV under Copyright Rules, 2013)</li>
<li>Proof of identity of the broadcasting organization (certificate of incorporation, PAN, GST certificate)</li>
<li>Details of the broadcast: date, time, channel/platform, content description</li>
<li>Transmission log or playout record as proof of first broadcast</li>
<li>Copy or recording of the broadcast content (audio/video sample)</li>
<li>License or authorization from underlying content owners (if applicable)</li>
<li>NOC from content creators (if broadcast includes third-party copyrighted material)</li>
<li>Affidavit affirming originality and ownership of the broadcast</li>
<li>Power of Attorney (if filing through an authorized representative)</li>
<li>Registration fee as prescribed under Copyright Rules, 2013</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common Broadcast Copyright Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Distinguishing Broadcast Right from Content Copyright</td><td>Many broadcasters confuse Section 37 broadcast reproduction right with Section 14 content copyright</td><td>Our IP team clearly identifies and registers each layer of rights - the broadcast right for transmission and content copyright for underlying works.</td></tr>
<tr><td>Proving First Broadcast Date</td><td>The 25-year protection starts from the calendar year following first broadcast - exact date is critical</td><td>We assist in compiling transmission logs, playout records, and scheduling documentation to establish the exact first broadcast date.</td></tr>
<tr><td>Digital Piracy and Unauthorized Streaming</td><td>Live sports and entertainment being illegally streamed on websites and social media</td><td>Comprehensive infringement documentation packages for cease-and-desist notices and criminal prosecution under Section 63.</td></tr>
<tr><td>Multi-Platform Rights Management</td><td>Modern broadcasters distribute across TV, OTT, mobile apps, and social media simultaneously</td><td>Rights structuring across platforms, multi-platform licensing agreements, and comprehensive registration coverage.</td></tr>

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
            <h2 class="section-title">Broadcast Copyright Registration Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Copyright Registration Fee (per work)</td><td class="table-amount">Rs 500 - Rs 5,000 (as per Copyright Rules, 2013)</td></tr>
<tr><td>Application Processing</td><td class="table-amount">As prescribed by Copyright Office</td></tr>
<tr><td>Objection Reply (if applicable)</td><td class="table-amount">Additional charges based on complexity</td></tr>
<tr><td>Licensing Agreement Drafting</td><td class="table-amount">Custom pricing based on scope</td></tr>
<tr><td>Infringement Documentation Package</td><td class="table-amount">Custom pricing based on evidence needs</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">INR 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Broadcast Copyright consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Broadcast%20Copyright%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does Broadcast Copyright Registration Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Content Identification and Documentation</td><td>3-5 days</td></tr>
<tr><td>Application Preparation</td><td>2-3 days</td></tr>
<tr><td>Filing with Copyright Office</td><td>1-2 days</td></tr>
<tr><td>Copyright Journal Publication (Notice Period)</td><td>30 days (mandatory)</td></tr>
<tr><td>Registrar Examination and Approval</td><td>30-90 days post notice period</td></tr>
<tr><td><strong>Total Timeline</strong></td><td><strong>2-4 months</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> The 30-day notice period is mandatory under Rule 70 of the Copyright Rules, 2013. For urgent matters involving active piracy, Patron Accounting assists with interim injunction applications through the courts while registration is pending.</p>

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
            <h2 class="section-title">5 Benefits of Broadcast Copyright Registration</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">25-Year Exclusive Protection</h3><p class="feature-text">Section 37(2) grants broadcast reproduction rights for 25 years from the calendar year following the first broadcast - protecting your investment in content transmission.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Criminal Enforcement Power</h3><p class="feature-text">Prosecution under Section 63 - imprisonment 6 months to 3 years + fine Rs 50,000 to Rs 2 lakh. Enhanced penalties for repeat offenders under Section 63A.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Prima Facie Evidence</h3><p class="feature-text">Registration Certificate serves as prima facie evidence under Section 48, significantly strengthening your position in infringement lawsuits and licensing disputes.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Revenue Through Licensing</h3><p class="feature-text">Licensed broadcast rights create ongoing revenue from syndication and sub-licensing to cable operators, DTH platforms, OTT services, and international distributors.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Digital Anti-Piracy Foundation</h3><p class="feature-text">Legal basis for takedown notices to websites, social media platforms, and ISPs hosting pirated broadcast content, and for court injunctions against unauthorized streaming.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">Multi-Platform Coverage</h3><p class="feature-text">Comprehensive registration covering TV, OTT, mobile, and social media distribution. Multi-platform licensing agreements for complete broadcast rights management.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served</strong> across India with IP, copyright, and compliance services.</p>
<p><strong>50,000+ Documents Filed</strong> on government portals including copyright.gov.in, MCA, Income Tax, and GST.</p>
<p><strong>4.9 Google Rating</strong> based on verified client reviews for professional service quality.</p>
<p><strong>15+ Years of Practice</strong> with deep expertise in copyright, trademark, and IP law for media companies.</p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram - serving broadcasters and media companies across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Broadcast Right vs Content Copyright vs Performer's Right</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Broadcast Reproduction Right</th><th>Content Copyright</th><th>Performer's Right</th></tr></thead>
                    <tbody>
                        <tr><td>Section</td><td>Section 37</td><td>Section 14</td><td>Section 38/38A</td></tr>
<tr><td>Who Holds It</td><td>Broadcasting organization</td><td>Author/creator of the work</td><td>Performer of the performance</td></tr>
<tr><td>What It Protects</td><td>The transmission/broadcast itself</td><td>The underlying creative work</td><td>The live performance</td></tr>
<tr><td>Duration</td><td>25 years from year following broadcast</td><td>Lifetime + 60 years</td><td>50 years from year following performance</td></tr>
<tr><td>Key Rights</td><td>Re-broadcast, record, reproduce, sell/rent</td><td>Reproduce, distribute, perform, adapt</td><td>Record, reproduce, broadcast, communicate</td></tr>
<tr><td>Registration</td><td>Copyright Office (copyright.gov.in)</td><td>Copyright Office</td><td>Copyright Office</td></tr>

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
            <h2 class="section-title">Related Copyright and Media Services</h2>
            <div class="content-text">
                
                <p>Broadcast copyright works best as part of a comprehensive media rights strategy:</p>
<ul>
<li><strong><a href="/copyright-registration">Copyright Registration</a></strong> - Register underlying content copyright for literary, artistic, musical, and dramatic works.</li>
<li><strong><a href="/copyright-registration-for-sound-recording">Copyright for Sound Recording</a></strong> - Protect audio content, music recordings, podcasts, and audiobooks.</li>
<li><strong><a href="/copyright-registration-for-cinematographic-film">Copyright for Cinematographic Film</a></strong> - Film and video content protection for movies, web series, and documentaries.</li>
<li><strong><a href="/copyright-objection">Copyright Objection</a></strong> - Handle Registrar objections and third-party opposition during the 30-day notice period.</li>
<li><strong><a href="/copyright-assignment">Copyright Assignment</a></strong> - Transfer broadcast reproduction rights between organizations with proper documentation.</li>
<li><strong><a href="/trademark-registration">Trademark Registration</a></strong> - Protect your channel or network brand name and logo as commercial identifiers.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Broadcast Copyright in India</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> Copyright Act, 1957 (as amended up to Act 7 of 2017) - <strong>Chapter VIII:</strong> Rights of Broadcasting Organisation and of Performers (Sections 37-39A).</p>
<p><strong>Key Sections:</strong></p>
<ul>
<li><strong>Section 2(dd):</strong> Defines 'broadcast' as communication to the public by wireless diffusion or wire, including re-broadcast.</li>
<li><strong>Section 37(1):</strong> Grants every broadcasting organisation a broadcast reproduction right.</li>
<li><strong>Section 37(2):</strong> Right subsists for 25 years from beginning of calendar year following the broadcast.</li>
<li><strong>Section 37(3):</strong> Lists exclusive rights - re-broadcast, public performance for payment, sound/visual recording, reproduction, and sale/rental.</li>
<li><strong>Section 38:</strong> Performer's right (related but separate from broadcast right).</li>
<li><strong>Section 39:</strong> Acts not infringing broadcast reproduction right - private use, teaching, research, judicial proceedings.</li>
<li><strong>Section 39A:</strong> Certain provisions apply to broadcast rights with necessary adaptations.</li>
</ul>
<p><strong>Penalties:</strong></p>
<ul>
<li><strong>Section 63:</strong> Infringement - 6 months to 3 years imprisonment + Rs 50,000 to Rs 2 lakh fine.</li>
<li><strong>Section 63A:</strong> Repeat offence - enhanced penalties. <strong>Section 64:</strong> Police seizure of infringing copies without warrant.</li>
</ul>
<p><strong>International:</strong> India's broadcast rights align with Rome Convention principles. The Copyright (Amendment) Act, 2012 aligned provisions with <a href="https://www.wipo.int" target="_blank" rel="noopener">WIPO</a> treaties. Key case: <em>Star India v various websites</em> (Delhi HC) - injunctions against unauthorized IPL streaming.</p>
<p><strong>Regulatory:</strong> <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office, DPIIT</a>, Ministry of Commerce and Industry.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Broadcast Copyright</h2>
                    <p class="faq-expanded__lead">Answers about broadcast reproduction rights, Section 37, 25-year protection, OTT eligibility, infringement penalties, and fair dealing exceptions.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Broadcast Copyright',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the broadcast reproduction right under Indian law?</h3>
                        <div class="faq-expanded__a"><p>The broadcast reproduction right is a special right granted to every broadcasting organization under Section 37(1) of the Copyright Act, 1957. It gives the broadcaster exclusive control over re-broadcasting, recording, reproduction, sale and rental of broadcasts. This right is independent of the copyright in the underlying content and lasts for 25 years from the calendar year following the broadcast.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How long does broadcast copyright protection last?</h3>
                        <div class="faq-expanded__a"><p>Under Section 37(2), broadcast reproduction rights subsist for 25 years from the beginning of the calendar year next following the year of broadcast. For example, a broadcast made in 2026 is protected until 31 December 2051. This is shorter than content copyright (lifetime + 60 years) but provides specific protection for the transmission itself.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can OTT platforms and digital broadcasters register broadcast copyright?</h3>
                        <div class="faq-expanded__a"><p>Yes. OTT platforms and digital broadcasters qualify as broadcasting organizations under Section 2(dd) of the Copyright Act, 1957, which defines broadcast broadly as communication to the public by any means of wireless diffusion or by wire. This includes internet streaming, mobile broadcasting, and IPTV. Digital broadcasters can register their broadcast reproduction rights with the Copyright Office.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Broadcast ka copyright kaise le?</h3>
                        <div class="faq-expanded__a"><p>Broadcast ka copyright lene ke liye Copyright Office ki website copyright.gov.in par application file karo. Broadcast ki details, transmission log, aur supporting documents submit karo. 30 din ka notice period hota hai, uske baad Registrar certificate issue karta hai. Patron Accounting pura process handle karta hai - call karo +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What acts constitute infringement of broadcast reproduction rights?</h3>
                        <div class="faq-expanded__a"><p>Under Section 37(3), the following acts without license constitute infringement: re-broadcasting, causing the broadcast to be heard or seen publicly on payment, making sound or visual recordings, reproducing recordings beyond their licensed purpose, and selling, renting, or offering recordings for sale/rental. Infringement is punishable under Section 63 with imprisonment and fine.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are the exceptions to broadcast reproduction rights?</h3>
                        <div class="faq-expanded__a"><p>Section 39 provides that private use, fair dealing for review or teaching or research, reporting current events, and other acts consistent with Section 52 do not infringe broadcast reproduction rights. These exceptions balance broadcaster protection with public interest in education and information.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Broadcast reproduction right kya hai?</h3>
                        <div class="faq-expanded__a"><p>Broadcast reproduction right ek special right hai jo har broadcasting organization ko Section 37 ke under milta hai Copyright Act, 1957 mein. Yeh right 25 saal tak rehta hai aur broadcaster ko exclusive control deta hai re-broadcasting, recording, aur sale par. Bina permission ke ye sab karna illegal hai aur Section 63 ke under punishable hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is broadcast copyright different from content copyright?</h3>
                        <div class="faq-expanded__a"><p>Yes. Broadcast reproduction right (Section 37) protects the transmission itself - the act of broadcasting. Content copyright (Section 14) protects the creative work (script, music, performance). A broadcaster may hold broadcast rights without owning the content copyright and vice versa. Complete legal coverage requires both the content license and broadcast protection.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Does Doordarshan have broadcast rights?</strong> A: Yes. Section 37 grants broadcast reproduction rights to every broadcasting organisation, including government broadcasters like Doordarshan and AIR.</p>
<p><strong>Q: Can I claim broadcast rights over a podcast?</strong> A: If the podcast constitutes a broadcast (communication to the public), broadcast reproduction rights may apply. The podcast content itself can also be registered as a sound recording.</p>
<p><strong>Q: What is the piracy penalty?</strong> A: 6 months to 3 years imprisonment + Rs 50,000 to Rs 2 lakh fine under Section 63. Enhanced penalties under Section 63A for repeat offenders.</p>
<p><strong>Q: Has India signed the Rome Convention?</strong> A: No, but the Copyright Act, 1957 provides comparable protection through Section 37.</p>
<p><strong>Q: Can police seize pirated recordings?</strong> A: Yes, under Section 64 - police can seize infringing copies without a warrant.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Digital Piracy Is Costing Broadcasters Crores - Protect Your Content Now</h2>
            <div class="content-text">
                
                <p>With live sports and entertainment being illegally streamed on websites and social media, the cost of not registering broadcast rights is measured in lost revenue and weakened legal position. Registration provides the legal foundation for takedown notices, court injunctions, and criminal prosecution.</p>
<p>Copyright infringement under Section 63 is a cognizable offence. Police can seize infringing copies under Section 64 without a warrant. But registration under Section 48 provides the strongest prima facie evidence of ownership for enforcement.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Broadcast%20Copyright%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation with our IP team.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your Broadcast Copyright with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Copyright registration for broadcast under Section 37 of the Copyright Act, 1957 is a critical legal tool for broadcasting organizations to protect their investment in content transmission. With 25-year protection, exclusive rights, and criminal enforcement penalties, broadcast copyright provides robust legal protection in an era of increasing digital piracy.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's IP and CA team handles the complete registration process - from content identification and documentation to filing, objection handling, and certificate issuance. We also assist with licensing agreements, enforcement actions, and multi-platform rights management.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">15+ years of practice. 10,000+ businesses served. Offices in Pune, Mumbai, Delhi, and Gurugram. Starting from Rs 4,999. Contact us for a free consultation.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Broadcast%20Copyright%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Broadcast%20Copyright%20Registration&body=Hello%2C%20I%20just%20visited%20your%20Broadcast%20Copyright%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Broadcast Copyright Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert broadcast copyright registration with local support from our CA and CS team.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/copyright-registration-for-broadcast/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/copyright-registration-for-broadcast/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/copyright-registration-for-broadcast/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/copyright-registration-for-broadcast/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete copyright and media rights protection</div><div class="pa-cross-grid"><a href="/copyright-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">India</div></div></a><a href="/copyright-registration-for-sound-recording" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Sound Recording Copyright</div><div class="pa-card-sub">India</div></div></a><a href="/copyright-registration-for-cinematographic-film" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Cinematographic Film</div><div class="pa-card-sub">India</div></div></a><a href="/copyright-objection" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Objection</div><div class="pa-card-sub">India</div></div></a><a href="/copyright-assignment" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Assignment</div><div class="pa-card-sub">India</div></div></a><a href="/trademark-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 December 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 9 months. Content aligned with the Copyright Act, 1957 (Chapter VIII, Sections 37-39A), Copyright Rules, 2013, and current Copyright Office procedures. Next review: December 2026.</p>
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
