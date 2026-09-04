
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
    <title>Copyright for Sound Recording in Delhi - Podcast & Audio</title>
    <meta name="description" content="CA-assisted Copyright for Sound Recording in Delhi. Songs, podcasts, audio tracks registered online. Serving Saket, Karol Bagh, Okhla. Call +91 945 945 6700.">
    <link rel="canonical" href="/copyright-registration-for-sound-recording/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Copyright for Sound Recording in Delhi - Podcast & Audio">
    <meta property="og:description" content="CA-assisted Copyright for Sound Recording in Delhi. Songs, podcasts, audio tracks registered online. Serving Saket, Karol Bagh, Okhla. Call +91 945 945 6700.">
    <meta property="og:url" content="/copyright-registration-for-sound-recording/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copyright for Sound Recording in Delhi - Podcast & Audio">
    <meta name="twitter:description" content="CA-assisted Copyright for Sound Recording in Delhi. Songs, podcasts, audio tracks registered online. Serving Saket, Karol Bagh, Okhla. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Copyright for Sound Recording in Delhi",
      "description": "CA-assisted Copyright for Sound Recording in Delhi. Songs, podcasts, audio tracks registered online. Serving Saket, Karol Bagh, Okhla. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/copyright-registration-for-sound-recording/delhi",
      "serviceType": "Copyright for Sound Recording in Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi",
        "containedInPlace": {
          "@type": "State",
          "name": "Delhi"
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
        "url": "https://www.patronaccounting.com/copyright-registration-for-sound-recording/delhi",
        "price": "2000"
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
          "name": "Copyright Registration For Sound Recording",
          "item": "https://www.patronaccounting.com/copyright-registration-for-sound-recording"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Copyright for Sound Recording in Delhi",
          "item": "https://www.patronaccounting.com/copyright-registration-for-sound-recording/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles Copyright for Sound Recording registration in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Copyright Office, Boudhik Sampada Bhawan, Plot No. 32, Sector 14, Dwarka, New Delhi 110075 (Phone: 011-28032496, Email: copyright@nic.in). India's sole Copyright Office. Delhi music producers, podcast studios, and voice-over companies can file Form XIV in-person at the counter (2:30 PM onwards) for same-day diary number, or online via copyright.gov.in. Patron's Rohini office coordinates all interactions."
          }
        },
        {
          "@type": "Question",
          "name": "Can I register Copyright for Sound Recording online from Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The e-filing portal at copyright.gov.in allows Delhi producers to submit Form XIV, upload the audio file (MP3/WAV), and pay Rs 2,000 per track online. Delhi producers additionally have same-day in-person batch diary number collection at Boudhik Sampada Bhawan - critical for album registrations with 10+ tracks. Patron handles complete e-filing and batch in-person coordination from Rohini."
          }
        },
        {
          "@type": "Question",
          "name": "What is the government fee for sound recording copyright in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 2,000 per work under the Second Schedule, Copyright Rules 2013 - ONE track per application. An album of 12 tracks requires 12 separate applications totalling Rs 24,000. Musical work (composition) requires separate Rs 500 application. Lyrics require separate Rs 500 application. Patron's professional fee starts from INR 3,999 per track with batch pricing."
          }
        },
        {
          "@type": "Question",
          "name": "How long does sound recording copyright registration take in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NOC collection takes 3-7 days. After filing, mandatory 30-day waiting period. Copyright Examiner review: 1-3 months. Total: 3-6 months for straightforward applications. Where NOC discrepancies arise, 12 months possible. Delhi producers can attend in-person hearings at Boudhik Sampada Bhawan, Dwarka to accelerate resolution."
          }
        },
        {
          "@type": "Question",
          "name": "Who is the author of a sound recording under the Copyright Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 2(d)(v), the producer is the author. Section 2(uu) defines producer as the person who takes initiative and responsibility for making the work. In Form XIV Column 7, the producer's name must appear as author. For Delhi record labels, the company is the author. Performers and composers are rights holders in underlying works, not the sound recording itself."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed for sound recording copyright in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form XIV with SOP and SoFP; digital audio file (one track per application); NOC from composer, lyricist, singer/performer, and music director; assignment deed if applicable; proof of identity; Incorporation Certificate for companies. Section 52A requires all recordings to display producer name, copyright owner, and year of publication. Quick Answers Section 2(xx) mein sound recording kya hai? Recording of sounds from which sounds may be produced - covers songs, podcasts, voice-overs, jingles, audiobooks in any format. Sound recording copyright kitne saal ka hai? 60 years from year of first publication (Section 27) - NOT lifetime + 60 years. PPL kya Copyright Office registration ka substitute hai? No. PPL membership facilitates licensing. Copyright registration at Dwarka is the legal ownership evidence. April 2025 Delhi HC ruling limits PPL's authority."
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
                        Copyright for Sound Recording in Delhi
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
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Songs, Podcasts & Audio Tracks</strong>:</span> All audio recordings protected under Section 2(xx) of the Copyright Act, 1957 - songs, podcasts, voice-overs, jingles, audiobooks</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Rs 2,000 Per Track</strong>:</span> ONE track per application under Copyright Rules 2013. An album of 10 tracks requires 10 separate applications</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Producer = Author</strong>:</span> Section 2(d)(v) - the producer who takes initiative and responsibility is the first owner of sound recording copyright</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>60 Years From Publication</strong>:</span> Section 27 - sound recording copyright runs 60 years from year of first publication, NOT lifetime + 60 years</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Expert Sound Recording Copyright in Delhi</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Copyright%20for%20Sound%20Recording%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20Copyright%20for%20Sound%20Recording%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20for%20Sound%20Recording%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Copyright for Sound Recording in Delhi',
                                            'city'     => 'Delhi',
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
    'ctaText'    => 'Expert sound recording copyright in Delhi - songs, podcasts, and audio productions.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright for Sound Recording in Delhi - At a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Copyright for Sound Recording in Delhi Services at a Glance</strong></p>
                    <p>Copyright for Sound Recording in Delhi is the exclusive legal protection for producers of original audio recordings - songs, podcasts, albums, jingles, voice-overs - under Section 2(xx) of the Copyright Act, 1957. Producer is the author (Section 2(d)(v)). Government fee: Rs 2,000 per track. Duration: 60 years from publication (Section 27). ONE track per application. <a href="/copyright-registration-for-sound-recording">Learn more about Copyright for Sound Recording across India</a>.</p>
                </div>
                <p>Delhi is home to India's most commercially active sound recording ecosystem: Fresh Lime Studios in Saket (Dolby Atmos certified), Katharas Studios in central New Delhi, Euphonious Studios in Karol Bagh, and Awaaz Studios in South Extension. The April 2025 Delhi HC Azure Hospitality v. PPL ruling makes registered ownership more important than ever.</p>
                <p>All copyright registration is processed at India's only Copyright Office at Boudhik Sampada Bhawan, Dwarka, New Delhi - giving Delhi producers a direct filing advantage. For the underlying musical composition, <a href="/copyright-registration-for-musical-work">Copyright for Musical Work</a> covers the melody and score separately. <a href="/trademark-registration">Trademark Registration</a> can protect record label identities.</p>
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
                <h2 class="section-title">What Is Copyright for a Sound Recording?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Copyright for Sound Recording in Delhi is the exclusive legal right granted to the producer of an original audio recording under Section 13 of the Copyright Act, 1957. Under Section 2(xx), a 'sound recording' means a recording of sounds from which such sounds may be produced regardless of the medium or method - covering every audio format from Bollywood songs at Fresh Lime Studios to podcasts at Awaaz Studios.</p>
                    <p>The producer - defined under Section 2(d)(v) as the author, and under Section 2(uu) as the person who takes initiative and responsibility - is the first owner. A song involves three separate copyrights: the musical composition (Rs 500), the lyrics (Rs 500), and the sound recording (Rs 2,000) - each filed as a separate Form XIV.</p>
                    <p>In April 2025, the Delhi HC ruled in Azure Hospitality v. PPL (2025:DHC:2561-DB) that PPL cannot issue licences without copyright society registration. This makes registered copyright ownership the most reliable basis for enforceable rights. For underlying composition protection, <a href="/copyright-registration-for-musical-work">Copyright for Musical Work</a> should be filed separately.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Copyright for Sound Recording in Delhi:</strong></p>
                    <p><strong>Section 2(xx) - Sound Recording:</strong> Recording of sounds from which such sounds may be produced regardless of medium or method. Covers MP3, WAV, CD, vinyl, digital stream, and any future format.</p>
                    <p><strong>Section 2(d)(v) - Author:</strong> The producer of the sound recording is the author. Section 2(uu): producer = person who takes initiative and responsibility.</p>
                    <p><strong>Section 14(e) - Rights:</strong> Exclusive right to make other sound recordings embodying it, sell/rent copies, and communicate to public.</p>
                    <p><strong>Section 27 - Duration:</strong> 60 years from publication - NOT lifetime + 60 years. Different from literary/musical works.</p>
                    <p><strong>Section 52A - Labelling:</strong> Mandatory display of producer name, copyright owner, and year of first publication on all sound recordings.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Copyright for Sound Recording in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Copyright Office</span>
                        <strong>Dwarka, New Delhi</strong>
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
            <h2 class="section-title">Who Needs Copyright for Sound Recording in Delhi?</h2>
            <div class="content-text">
                
                <p>Music producers and record labels at Delhi's premier studios - Fresh Lime Studios in Saket (Dolby Atmos certified), Katharas Studios in central New Delhi, and Euphonious Studios in Karol Bagh - produce commercial recordings requiring registration for royalty collection, licensing, and infringement litigation before the Delhi HC IP Division.</p>
                <p>Podcast creators at studios including Awaaz Studios in South Extension and VoiceMonk in Noida Sector 62 produce spoken-word recordings qualifying under Section 2(xx). Delhi's growing podcast industry benefits from the city's concentration of media companies and corporate headquarters.</p>
                <p>Voice-over and dubbing studios in Janakpuri, Uttam Nagar, and Lajpat Nagar produce sound recordings for advertising, e-learning, and OTT dubbing. Advertising jingle producers at Connaught Place and Aerocity need sound recording copyright for royalty claims when jingles are used across TV, radio, and digital platforms.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Is Included in Patron's Copyright for Sound Recording Service in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>One-Track-Per-Application Advisory</td><td>Confirm correct track-level filing per Copyright Office Practice Manual. Prevent multi-track application discrepancy notices</td></tr>
                        <tr><td>NOC Collection Coordination</td><td>Structured NOC checklist for composer, lyricist, singer, music director. Template agreements for pre-production NOC capture</td></tr>
                        <tr><td>Form XIV Preparation</td><td>Complete SOP and SoFP with producer as author (Column 7). Sound Recording category selection</td></tr>
                        <tr><td>Batch Album Registration</td><td>Production-line filing workflows for 10+ track albums. Coordinated diary number management at Dwarka counter</td></tr>
                        <tr><td>Section 52A Compliance Advisory</td><td>Mandatory labelling requirement: producer name, copyright owner, year of first publication on all releases</td></tr>
                        <tr><td>Triple Copyright Advisory</td><td>Sound recording (Rs 2,000) + musical work (Rs 500) + lyrics (Rs 500) - all three registered for complete protection</td></tr>
                        <tr><td>PPL vs Copyright Guidance</td><td>Clear advisory on PPL membership vs Copyright Office registration post-April 2025 Delhi HC ruling</td></tr>

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
            <h2 class="section-title">How to Register Copyright for Sound Recording in Delhi - 7 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Expert sound recording copyright from Patron's Rohini office - NOC coordination, Form XIV filing, batch album registration at Copyright Office Dwarka.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Confirm One Track Per Application</h3><p class="step-description">Under the Copyright Office Practice Manual, exactly ONE track can be registered per application and per Rs 2,000 fee. Prepare the specific track in digital format (MP3/WAV). Verify the title matches the CD cover or recording.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>One Track Per Application</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Title Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="25" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M50 45l5 8 15-15" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="82" font-size="8" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">1 TRACK</text></svg></div><span class="illustration-label">Track Prepared</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Collect NOC from All Rights Holders</h3><p class="step-description">Obtain NOC from: composer, lyricist, singer/performer (Section 38A), and music director. Structure NOC collection through pre-production agreements before studio sessions begin. This is the most common cause of delays.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Complete NOC Bundle</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pre-Production Agreements</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="40" height="30" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="70" y="10" width="40" height="30" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="10" y="55" width="40" height="30" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="70" y="55" width="40" height="30" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><path d="M26 25l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><path d="M86 25l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><path d="M26 70l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><path d="M86 70l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">NOCs Collected</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Complete Form XIV - Sound Recording Category</h3><p class="step-description">Fill Form XIV with SOP and SoFP. Column 7: producer as author (Section 2(d)(v)). Column 11: all rights holders. Select "Sound Recording" category. One application per track.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Producer as Author</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SOP/SoFP Complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="30" y="50" width="50" height="12" rx="3" fill="#E8712C" opacity="0.15"/><text x="55" y="59" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">FORM XIV</text></svg></div><span class="illustration-label">Form Ready</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Pay Rs 2,000 Government Fee and Submit</h3><p class="step-description">Submit at Boudhik Sampada Bhawan counter (2:30 PM onwards) for same-day diary number, or via copyright.gov.in. For album batch filing, in-person submission at Dwarka is significantly more efficient.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 2,000 Per Track</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Batch Filing Available</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="30" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="42" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 2,000</text><text x="60" y="56" font-size="7" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">PER TRACK</text></svg></div><span class="illustration-label">Fee Paid</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive Diary Number - 30-Day Waiting Period</h3><p class="step-description">Copyright Office issues a diary number. Mandatory 30-day waiting period under Section 45. Delhi producers can track status and attend follow-up meetings in person at Dwarka.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Diary Number Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>30-Day Objection Window</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="8" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">DIARY NO.</text><rect x="35" y="42" width="50" height="16" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="54" font-size="10" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">30 DAYS</text></svg></div><span class="illustration-label">Waiting Period</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Respond to Copyright Examiner</h3><p class="step-description">If the Examiner raises NOC discrepancy or title mismatch queries, reply within 30 days. Delhi applicants can attend in-person hearings at Boudhik Sampada Bhawan.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NOC Discrepancy Response</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>In-Person Hearings</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="40" cy="40" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M35 40h10M40 35v10" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><circle cx="80" cy="40" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M74 40l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Query Resolved</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Receive Registration Certificate</h3><p class="step-description">Registrar at Dwarka issues Extract from Register of Copyrights. Protection: 60 years from beginning of calendar year following year of first publication (Section 27).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>60 Years Protection</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="20" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M50 42l7 7 14-14" stroke="#10B981" stroke-width="3" stroke-linecap="round"/><rect x="35" y="80" width="50" height="10" rx="5" fill="#F5A623" opacity="0.3"/><text x="60" y="88" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGISTERED</text></svg></div><span class="illustration-label">Copyright Secured</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Sound Recording Copyright in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Form XIV</strong> - SOP and SoFP per Copyright Rules 2013</li>
                    <li><strong>Digital audio file</strong> - MP3, WAV, or equivalent. ONE track per application</li>
                    <li><strong>NOC from composer</strong> of the musical work embodied in the recording</li>
                    <li><strong>NOC from lyricist</strong> (author of lyrics embodied in the recording)</li>
                    <li><strong>NOC from singer/performer</strong> (Section 38A performers' rights)</li>
                    <li><strong>NOC from music director</strong> or co-producer if applicable</li>
                    <li><strong>Assignment Agreement</strong> if work created under employment or contract</li>
                    <li><strong>Proof of identity</strong> of producer (Aadhaar, PAN, Passport)</li>
                    <li><strong>Incorporation Certificate + Board Resolution</strong> for company applicants</li>
                    <li><strong>Power of Attorney</strong> if filing through Patron Accounting LLP</li>
                    <li><strong>Section 52A compliance:</strong> Recording must display producer name, copyright owner, year of first publication</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges for Delhi Sound Recording Producers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>One Track Per Application Rule</td><td>Multi-track applications returned with discrepancy notice. An album of 12 tracks requires 12 separate applications and Rs 24,000 in govt fees</td><td>Correctly structured from first filing. Batch filing workflows for albums with coordinated diary number management</td></tr>
                        <tr><td>NOC Collection Complexity</td><td>Standard Bollywood-style song involves 5+ rights holders. Missing any NOC causes Copyright Examiner discrepancy</td><td>Structured pre-production NOC checklist with template agreements. All NOCs collected before studio sessions begin</td></tr>
                        <tr><td>PPL Licensing Post-April 2025 Delhi HC Ruling</td><td>PPL cannot grant licences without copyright society registration (Azure Hospitality v. PPL). Delhi venues affected</td><td>Registered copyright ownership is the most reliable basis for enforceable rights. Direct licensing advisory for producers</td></tr>
                        <tr><td>Triple Copyright Not Registered</td><td>Producers register only sound recording (Rs 2,000) without underlying musical work (Rs 500) or lyrics (Rs 500). Composition left unprotected</td><td>Complete triple-registration advisory: sound recording + musical work + lyrics for all original productions</td></tr>

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
            <h2 class="section-title">Fees for Copyright for Sound Recording in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee - Sound Recording (one track)</td><td>Rs 2,000 per work</td></tr>
                        <tr><td>Government Fee - Musical Work (composition - separate)</td><td>Rs 500 per work</td></tr>
                        <tr><td>Government Fee - Literary Work (lyrics - separate)</td><td>Rs 500 per work</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 3,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Copyright for Sound Recording in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20for%20Sound%20Recording%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Sound Recording Copyright Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>NOC collection and document preparation</td><td>3-7 days</td></tr>
                        <tr><td>Form XIV filing and diary number receipt</td><td>1 day (e-filing) / same day (in-person Dwarka counter)</td></tr>
                        <tr><td>Mandatory 30-day waiting period</td><td>30 days</td></tr>
                        <tr><td>Copyright Examiner review</td><td>1-3 months post waiting period</td></tr>
                        <tr><td>Examiner query response (if raised)</td><td>Within 30 days of notice</td></tr>
                        <tr><td>Registration certificate issuance</td><td>Total 3-12 months from diary number</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Delhi advantage:</strong> In-person filing at Boudhik Sampada Bhawan gives Delhi producers same-day diary number collection. For high-volume producers filing 10+ tracks simultaneously, in-person batch filing at the Dwarka counter is significantly more efficient than e-filing.</p>

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
            <h2 class="section-title">Why Choose Patron for Sound Recording Copyright in Delhi</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Rohini to Saket Sound Belt</h3><p class="feature-text">Delhi office covers the full sound recording geography - Fresh Lime Studios Saket to Euphonious Studios Karol Bagh to Copyright Office Dwarka.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">NOC Expertise</h3><p class="feature-text">Structured pre-production NOC agreements for composer, lyricist, singer, and music director - preventing the most common cause of registration delays.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">April 2025 PPL Ruling Awareness</h3><p class="feature-text">Monitors Delhi HC evolving approach to PPL licensing and Section 38A performers' rights. Translates developments into practical guidance.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Batch Album Registration</h3><p class="feature-text">Production-line filing workflows for 10+ track albums. Coordinated diary numbers through in-person batch filing at Dwarka counter.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3 class="feature-title">Triple Copyright Advisory</h3><p class="feature-text">Sound recording + musical work + lyrics - all three registered. Prevents the common gap where only the recording is protected.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Section 52A Compliance</h3><p class="feature-text">Mandatory labelling advisory - producer name, copyright owner, year of publication on all Delhi studio releases.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>With offices in Pune, Mumbai, Delhi (Rohini), and Gurugram, Patron serves Delhi sound recording producers with in-person presence and pan-India process rigour. Trusted by Hyundai, Asian Paints, Bridgestone, and thousands of SMEs.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional Filing - Sound Recording Copyright in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>DIY Filing</th><th>Patron Accounting, Delhi</th></tr></thead>
                    <tbody>
                        <tr><td>One track per application rule</td><td>Often violated - multi-track applications returned</td><td>Correctly structured; no wasted diary numbers</td></tr>
                        <tr><td>NOC collection</td><td>Frequently incomplete at filing</td><td>Pre-production NOC checklist; all collected before filing</td></tr>
                        <tr><td>Column 7 author identification</td><td>Producer often misidentified</td><td>Correctly identifies producer per Section 2(d)(v)</td></tr>
                        <tr><td>Section 52A advisory</td><td>Not covered</td><td>Labelling obligation flagged at onboarding</td></tr>
                        <tr><td>Copyright Office follow-up</td><td>In-person visit required</td><td>Patron handles all Dwarka interactions</td></tr>
                        <tr><td>Total cost</td><td>Rs 2,000 govt fee per track</td><td>From INR 3,999 all-inclusive</td></tr>

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
            <h2 class="section-title">Related Services for Delhi Sound Recording Producers</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/copyright-registration-for-sound-recording">Copyright for Sound Recording (India page)</a> - National overview</li>
                    <li><a href="/copyright-registration-for-musical-work">Copyright for Musical Work</a> - Composition copyright (separate from sound recording)</li>
                    <li><a href="/copyright-registration-for-broadcast">Copyright for Broadcast</a> - Broadcast rights for Delhi TV/radio/OTT</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Protect record label and band names</li>
                    <li><a href="/copyright-registration">Copyright Registration</a> - General copyright across all categories</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Sound Recording Copyright in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 2(xx) - Sound Recording:</strong> Recording of sounds from which sounds may be produced regardless of medium or method. Covers all audio formats.</li>
                    <li><strong>Section 2(d)(v) - Author:</strong> Producer of the sound recording is the author. Section 2(uu): producer = person who takes initiative and responsibility.</li>
                    <li><strong>Section 14(e) - Rights:</strong> Exclusive rights to make other recordings embodying it, sell/rent copies, and communicate to public.</li>
                    <li><strong>Section 27 - Duration:</strong> 60 years from beginning of calendar year following year of first publication. NOT lifetime + 60 years.</li>
                    <li><strong>Section 52A - Labelling:</strong> Mandatory display of producer name, copyright owner, year of first publication on all sound recordings.</li>
                    <li><strong>Section 38A - Performers' Rights:</strong> Performers retain right to equal share of royalties from commercial use. <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office - copyright.gov.in</a></li>
                    <li><strong>Section 63 - Penalties:</strong> Minimum 6 months + Rs 50,000 fine for first offence. Delhi HC actively grants injunctions.</li>
                    <li><strong>Delhi HC: Azure Hospitality v. PPL (2025:DHC:2561-DB):</strong> PPL cannot issue sound recording licences without copyright society registration. Reshapes Delhi licensing landscape.</li>
                </ul>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Copyright for Sound Recording in Delhi</h2>
                    <p class="faq-expanded__lead">Expert answers to common questions about registering copyright for songs, podcasts, and audio tracks in Delhi.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Copyright for Sound Recording in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles Copyright for Sound Recording registration in Delhi?</h3>
                        <div class="faq-expanded__a"><p>The Copyright Office, Boudhik Sampada Bhawan, Plot No. 32, Sector 14, Dwarka, New Delhi 110075 (Phone: 011-28032496, Email: copyright@nic.in). India's sole Copyright Office. Delhi music producers, podcast studios, and voice-over companies can file Form XIV in-person at the counter (2:30 PM onwards) for same-day diary number, or online via copyright.gov.in. Patron's Rohini office coordinates all interactions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I register Copyright for Sound Recording online from Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. The e-filing portal at copyright.gov.in allows Delhi producers to submit Form XIV, upload the audio file (MP3/WAV), and pay Rs 2,000 per track online. Delhi producers additionally have same-day in-person batch diary number collection at Boudhik Sampada Bhawan - critical for album registrations with 10+ tracks. Patron handles complete e-filing and batch in-person coordination from Rohini.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the government fee for sound recording copyright in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Rs 2,000 per work under the Second Schedule, Copyright Rules 2013 - ONE track per application. An album of 12 tracks requires 12 separate applications totalling Rs 24,000. Musical work (composition) requires separate Rs 500 application. Lyrics require separate Rs 500 application. Patron's professional fee starts from INR 3,999 per track with batch pricing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does sound recording copyright registration take in Delhi?</h3>
                        <div class="faq-expanded__a"><p>NOC collection takes 3-7 days. After filing, mandatory 30-day waiting period. Copyright Examiner review: 1-3 months. Total: 3-6 months for straightforward applications. Where NOC discrepancies arise, 12 months possible. Delhi producers can attend in-person hearings at Boudhik Sampada Bhawan, Dwarka to accelerate resolution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Who is the author of a sound recording under the Copyright Act?</h3>
                        <div class="faq-expanded__a"><p>Under Section 2(d)(v), the producer is the author. Section 2(uu) defines producer as the person who takes initiative and responsibility for making the work. In Form XIV Column 7, the producer's name must appear as author. For Delhi record labels, the company is the author. Performers and composers are rights holders in underlying works, not the sound recording itself.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What documents are needed for sound recording copyright in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Form XIV with SOP and SoFP; digital audio file (one track per application); NOC from composer, lyricist, singer/performer, and music director; assignment deed if applicable; proof of identity; Incorporation Certificate for companies. Section 52A requires all recordings to display producer name, copyright owner, and year of publication.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Section 2(xx) mein sound recording kya hai?</strong> Recording of sounds from which sounds may be produced - covers songs, podcasts, voice-overs, jingles, audiobooks in any format.</p>
                <p><strong>Sound recording copyright kitne saal ka hai?</strong> 60 years from year of first publication (Section 27) - NOT lifetime + 60 years.</p>
                <p><strong>PPL kya Copyright Office registration ka substitute hai?</strong> No. PPL membership facilitates licensing. Copyright registration at Dwarka is the legal ownership evidence. April 2025 Delhi HC ruling limits PPL's authority.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why You Should Register Sound Recording Copyright Now</h2>
            <div class="content-text">
                
                <p><strong>April 2025 Delhi HC PPL ruling</strong> has reshuffled the licensing landscape. Registered copyright is the most reliable basis for enforceable rights.</p>
                <p><strong>Section 63 enforcement</strong> requires ownership evidence through registration. Minimum 6 months imprisonment + Rs 50,000 fine for first offence.</p>
                <p><strong>60-year protection term</strong> starts from year of publication. Early registration establishes the start date conclusively.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Copyright for Sound Recording in Delhi - Partner with Patron</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Copyright for Sound Recording in Delhi is foundational for music producers, record labels, podcast creators, and voice-over studios in India's most commercially active sound recording market. The April 2025 Delhi HC PPL ruling makes registered ownership more strategically important than ever.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting LLP's Rohini office provides end-to-end registration - Form XIV preparation, NOC coordination, Section 52A advisory, batch album workflows, and in-person Copyright Office filing at Dwarka. 15+ years of compliance experience serving Delhi NCR's creative sector.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20for%20Sound%20Recording%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Copyright%20for%20Sound%20Recording%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20Copyright%20for%20Sound%20Recording%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Copyright for Sound Recording - Available in 4 Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert sound recording copyright registration across India's major cities.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
                        <a href="/copyright-registration-for-sound-recording/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <a href="/copyright-registration-for-sound-recording/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
                        <a href="/copyright-registration-for-sound-recording/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    </div></div>
                <div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for Copyright for Sound Recording in Delhi</div><div class="pa-cross-grid">
                        <a href="/copyright-registration-for-musical-work/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright for Musical Work</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/copyright-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/copyright-registration-for-broadcast/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright for Broadcast</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/copyright-registration-for-literary-work/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright for Literary Work</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/brand-copyright-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Brand Copyright Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Monitor: PPL copyright society registration status, Delhi HC IP Division sound recording orders, Section 38A royalty developments. Reviewed by CA & CS Team, Patron Accounting LLP.</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
