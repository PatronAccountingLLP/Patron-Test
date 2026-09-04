
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
    <title>Copyright for Musical Work in Delhi - Lyrics & Composition</title>
    <meta name="description" content="CA-assisted Copyright for Musical Work in Delhi. Compositions, lyrics, jingles registered online. Serving Saket, Connaught Place, Okhla. Call +91 945 945 6700.">
    <link rel="canonical" href="/copyright-registration-for-musical-work/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Copyright for Musical Work in Delhi - Lyrics & Composition">
    <meta property="og:description" content="CA-assisted Copyright for Musical Work in Delhi. Compositions, lyrics, jingles registered online. Serving Saket, Connaught Place, Okhla. Call +91 945 945 6700.">
    <meta property="og:url" content="/copyright-registration-for-musical-work/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copyright for Musical Work in Delhi - Lyrics & Composition">
    <meta name="twitter:description" content="CA-assisted Copyright for Musical Work in Delhi. Compositions, lyrics, jingles registered online. Serving Saket, Connaught Place, Okhla. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Copyright for Musical Work in Delhi",
      "description": "CA-assisted Copyright for Musical Work in Delhi. Compositions, lyrics, jingles registered online. Serving Saket, Connaught Place, Okhla. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/copyright-registration-for-musical-work/delhi",
      "serviceType": "Copyright for Musical Work in Delhi",
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
        "url": "https://www.patronaccounting.com/copyright-registration-for-musical-work/delhi",
        "price": "500"
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
          "name": "Copyright for Musical Work: Registration Guide",
          "item": "https://www.patronaccounting.com/copyright-registration-for-musical-work"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Copyright for Musical Work in Delhi",
          "item": "https://www.patronaccounting.com/copyright-registration-for-musical-work/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles Copyright for Musical Work registration in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Copyright Office, Boudhik Sampada Bhawan, Plot No. 32, Sector 14, Dwarka, New Delhi 110075 - under DPIIT, Ministry of Commerce and Industry (Phone: 011-28032496, Email: copyright@nic.in). It is India's sole Copyright Office. Delhi composers can file Form XIV in-person at the counter (2:30 PM onwards) for same-day diary number, or online via copyright.gov.in. Patron Accounting's Rohini office handles all coordination."
          }
        },
        {
          "@type": "Question",
          "name": "Can I register Copyright for Musical Work online from Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The e-filing portal at copyright.gov.in allows Delhi composers to submit Form XIV, upload a PDF of the graphical notation or score (under 10 MB), and pay Rs 500 online. E-filed applications generate diary numbers within 1-3 working days. Delhi applicants additionally have same-day in-person diary number collection at Boudhik Sampada Bhawan counter - an advantage unavailable elsewhere."
          }
        },
        {
          "@type": "Question",
          "name": "What is the fee for Copyright for Musical Work registration in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government fee is Rs 500 per musical work under Second Schedule, Copyright Rules 2013. Lyrics require separate literary work registration at Rs 500. Sound recordings require separate registration at Rs 2,000. Patron Accounting's professional fee starts from INR 3,999, covering Form XIV preparation, classification advisory, e-filing, and examiner query handling."
          }
        },
        {
          "@type": "Question",
          "name": "How long does Copyright for Musical Work registration take in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A mandatory 30-day waiting period follows diary number receipt under Section 45. After Copyright Examiner review (1-3 months), registration typically completes within 3-6 months. Where originality queries arise, processing may extend to 12 months. Delhi applicants can attend in-person hearings at Boudhik Sampada Bhawan, Dwarka to expedite resolution."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between musical work copyright and sound recording copyright?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Musical work copyright (Section 2(p)) protects the composition - melody, harmony, and notation. Sound recording copyright (Section 2(xx)) protects the specific recorded performance. Both are independent copyrights requiring separate Form XIV applications. The 2012 Amendment ensures composers retain non-waivable royalty rights even after assigning sound recording rights."
          }
        },
        {
          "@type": "Question",
          "name": "Is IPRS membership the same as copyright registration for musical work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. IPRS (Indian Performing Right Society, Delhi branch) collects performing right royalties under Section 33 but does NOT create prima facie legal evidence of copyright ownership or Section 63 criminal enforcement rights. Delhi composers must register at the Copyright Office, Boudhik Sampada Bhawan, Dwarka for complete legal protection alongside IPRS membership. Quick Answers Section 2(p) mein musical work kya hai? Musical work = work consisting of music + graphical notation. Excludes words/actions for singing (those are literary work). Lyrics register separately under Section 2(o). Copyright in musical work kitne saal ka hai? Author's lifetime + 60 years from beginning of year following year of death - under Section 22. IPRS registration kya copyright registration se alag hai? Yes. IPRS (Section 33 society) enables royalty collection. Copyright Office registration (Section 45) creates prima facie legal ownership evidence. Both are needed. Can lyrics and music have separate copyrights? Yes. Lyrics = literary work (Section 2(o)). Music = musical work (Section 2(p)). Both require separate Form XIV at Rs 500 each."
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
                        Copyright for Musical Work in Delhi
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
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Compositions, Scores & Notation</strong>:</span> Melodies, harmonies, scores, and graphical notation protected as musical work under Section 2(p) of the Copyright Act, 1957</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Rs 500 Government Fee</strong>:</span> Per work under Second Schedule, Copyright Rules 2013. Lyrics require separate literary work registration at Rs 500</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Lifetime + 60 Years Protection</strong>:</span> Section 22 - copyright in musical works lasts for the author's lifetime plus 60 years</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>IPRS is Not Copyright</strong>:</span> IPRS membership collects royalties but does NOT replace Copyright Office registration at Boudhik Sampada Bhawan, Dwarka</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Expert Musical Work Copyright in Delhi</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Copyright%20for%20Musical%20Work%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20Copyright%20for%20Musical%20Work%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20for%20Musical%20Work%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Copyright for Musical Work in Delhi',
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
    'ctaText'    => 'Get expert musical work copyright registration in Delhi - compositions, lyrics, and jingles.',
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
            <h2 class="section-title">Copyright for Musical Work in Delhi - At a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Copyright for Musical Work in Delhi Services at a Glance</strong></p>
                    <p>Copyright for Musical Work in Delhi is the exclusive legal protection for original musical compositions - melodies, harmonies, scores, and graphical notation - under Section 2(p) of the Copyright Act, 1957. Government fee: Rs 500 per work. Lyrics are a separate literary work requiring independent registration. IPRS membership does NOT replace Copyright Office registration. <a href="/copyright-registration-for-musical-work">Learn more about Copyright for Musical Work across India</a>.</p>
                </div>
                <p>Delhi is a thriving hub of musical creativity, home to premier recording studios including Fresh Lime Studios in Saket (Dolby Atmos certified), Katharas Studios in central New Delhi, and IRIS Studio at Model Town. The city's 500+ active composers, lyricists, jingle creators, and music producers feed Delhi's advertising, OTT, and film music ecosystem.</p>
                <p>The Indian Performing Right Society (IPRS) - registered under Section 33 of the Copyright Act - collects performing right royalties for composers and lyricists. However, IPRS membership is NOT a substitute for copyright registration at the Copyright Office, Dwarka. For broader IP protection, <a href="/trademark-registration">Trademark Registration</a> can protect band names and music label identities.</p>
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
                <h2 class="section-title">What Is Copyright for a Musical Work?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Copyright for Musical Work in Delhi is the exclusive legal right granted to the creator of an original musical composition under Section 13 of the Copyright Act, 1957. Under Section 2(p), a 'musical work' means a work consisting of music and includes any graphical notation - but expressly excludes any words or actions intended to be sung, spoken, or performed with the music. Lyrics constitute a separate literary work.</p>
                    <p>Delhi's composers must understand the dual-copyright structure: the musical composition (Section 2(p)) and the sound recording (Section 2(xx)) attract separate and independent copyrights. A composer who registers musical work copyright retains performing rights and mechanical rights even after assigning sound recording rights to a label.</p>
                    <p>A critical distinction: IPRS (Indian Performing Right Society, Delhi branch) collects performing right royalties under Section 33 but does NOT replace copyright registration at the Copyright Office, Boudhik Sampada Bhawan, Dwarka. In IPRS v. Hello FM, the Delhi HC granted an injunction against an FM radio station - but enforceability begins with registered copyright. For additional IP protection, <a href="/copyright-registration">Copyright Registration</a> services cover all work categories.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Copyright for Musical Work in Delhi:</strong></p>
                    <p><strong>Section 2(p) - Musical Work:</strong> Work consisting of music and includes graphical notation. Excludes words/actions sung, spoken, or performed with the music.</p>
                    <p><strong>Section 14(a) - Rights:</strong> Exclusive right to reproduce, perform in public, communicate, make sound recording, translate, and make any adaptation.</p>
                    <p><strong>Section 22 - Duration:</strong> Author's lifetime + 60 years from beginning of year following death.</p>
                    <p><strong>Sections 18/19 - Royalty Rights:</strong> Post-2012 Amendment, composers cannot waive right to equal share of royalties from film/sound recording exploitation.</p>
                    <p><strong>IPRS (Section 33):</strong> Copyright society collecting performing rights royalties. NOT a substitute for Copyright Office registration.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Copyright for Musical Work in Delhi</text>
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
            <h2 class="section-title">Who Needs Copyright for Musical Work Registration in Delhi?</h2>
            <div class="content-text">
                
                <p>Independent composers and music producers at Delhi's premier studios - Fresh Lime Studios (Saket, Dolby Atmos certified), Katharas Studios (central New Delhi), and IRIS Studio (Model Town and Rajouri Garden) - create original compositions requiring registration to assert authorship against unauthorised sampling or reproduction.</p>
                <p>Lyricists and composers in Delhi's advertising and jingle production sector centred at Connaught Place, Aerocity, and Okhla face regular unauthorised reuse of compositions in ad campaigns and digital media. The Sangeet Natak Akademi at Firozabad Chowk promotes classical and folk music traditions generating original compositions requiring protection.</p>
                <p>Independent/indie musicians recording at studios in South Delhi and Noida corridor who distribute music digitally on streaming platforms need registered copyright to enforce rights against unauthorised sampling. Music instructors and classical composers creating original arrangements and graphical notations also qualify under Section 2(p).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Is Included in Patron's Copyright for Musical Work Service in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Musical Work Classification Advisory</td><td>Confirm the work qualifies as musical work vs sound recording under Section 2(p). Critical for Delhi producers with dual-copyright works</td></tr>
                        <tr><td>Form XIV Preparation</td><td>Complete SOP and SoFP per First Schedule, Copyright Rules 2013. Separate applications for music and lyrics</td></tr>
                        <tr><td>E-Filing or In-Person Filing</td><td>Submit at copyright.gov.in or physically at Boudhik Sampada Bhawan, Dwarka for same-day diary number</td></tr>
                        <tr><td>IPRS vs Copyright Advisory</td><td>Clear guidance on IPRS membership vs Copyright Office registration distinction for Delhi composers</td></tr>
                        <tr><td>Lyrics Separate Registration</td><td>Advise and file separate literary work copyright for lyrics under Section 2(o) at Rs 500</td></tr>
                        <tr><td>Copyright Examiner Response</td><td>Handle originality and classification queries at Boudhik Sampada Bhawan, Dwarka on behalf of Delhi composers</td></tr>
                        <tr><td>Section 18/19 Royalty Advisory</td><td>Advise on non-waivable royalty rights under 2012 Amendment for composers contributing to films and sound recordings</td></tr>

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
            <h2 class="section-title">How to Register Copyright for Musical Work in Delhi - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Expert musical work copyright registration from Patron's Rohini, Delhi office - covering classification advisory, Form XIV filing at Copyright Office Dwarka, and IPRS vs copyright clarity.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Prepare the Musical Work in Fixed Form</h3><p class="step-description">Fix the composition in graphical notation (staff notation, sargam, tablature), printed score, or audio recording. PDF format under 10 MB for e-filing. Delhi applicants may visit Copyright Office at Dwarka for pre-filing classification advice.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notation/Score Ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 2(p) Compliant</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="45" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M42 40l3 8 8-3" stroke="#14365F" stroke-width="1.5" fill="none"/><line x1="65" y1="35" x2="90" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="65" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="65" y1="60" x2="80" y2="60" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Work Prepared</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Complete Form XIV - Select Musical Work Category</h3><p class="step-description">Fill Form XIV from copyright.gov.in including SOP and SoFP per Copyright Rules 2013. Select "Musical Work" as category. If registering both music and lyrics, two separate applications are required.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SOP/SoFP Complete</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Music + Lyrics Separate</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="36" x2="80" y2="36" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="48" x2="75" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="30" y="58" width="50" height="10" rx="3" fill="#E8712C" opacity="0.15"/><text x="55" y="66" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">FORM XIV</text></svg></div><span class="illustration-label">Form Ready</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Pay Rs 500 Government Fee and Submit</h3><p class="step-description">Submit at Boudhik Sampada Bhawan counter (2:30 PM onwards) for same-day diary number, or online via copyright.gov.in. Fee: Rs 500 per work, payable by demand draft, postal order, or online.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 500 Per Work</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Same-Day Diary Number</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="30" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="42" font-size="14" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 500</text><text x="60" y="56" font-size="8" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">PER WORK</text></svg></div><span class="illustration-label">Fee Paid</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Receive Diary Number - 30-Day Waiting Period</h3><p class="step-description">Copyright Office issues a diary number. Mandatory 30-day waiting period under Section 45 begins. Third parties may file objections at Boudhik Sampada Bhawan, Dwarka. Delhi applicants can track status in person.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Diary Number Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>30-Day Objection Window</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="8" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">DIARY NO.</text><rect x="35" y="42" width="50" height="16" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="54" font-size="10" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">30 DAYS</text></svg></div><span class="illustration-label">Waiting Period</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Respond to Copyright Examiner Queries</h3><p class="step-description">If the Examiner raises queries on originality or classification (musical work vs sound recording), reply within 30 days. Delhi applicants can attend in-person hearings at Boudhik Sampada Bhawan, Dwarka.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Classification Advisory</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>In-Person Hearings</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="40" cy="40" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M35 40h10M40 35v10" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><circle cx="80" cy="40" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M74 40l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><path d="M58 40h4" stroke="#14365F" stroke-width="1.5" stroke-dasharray="3 2"/></svg></div><span class="illustration-label">Query Resolved</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Receive Registration Certificate</h3><p class="step-description">After clearance, the Registrar at Dwarka issues the Extract from the Register of Copyrights. Total timeline: 3-12 months. Copyright under Section 22 runs for author's lifetime plus 60 years.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Lifetime + 60 Years</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="20" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M50 42l7 7 14-14" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="80" width="50" height="10" rx="5" fill="#F5A623" opacity="0.3"/><text x="60" y="88" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGISTERED</text></svg></div><span class="illustration-label">Copyright Secured</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Copyright for Musical Work in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Form XIV</strong> (copyright.gov.in) - Statement of Particulars and Statement of Further Particulars per Copyright Rules 2013</li>
                    <li><strong>Two soft copies of the musical work</strong> in PDF format (graphical notation, score) under 10 MB</li>
                    <li><strong>Proof of identity and address</strong> (Aadhaar, PAN, or Passport)</li>
                    <li><strong>Power of Attorney</strong> - if filing through Patron Accounting LLP</li>
                    <li><strong>NOC from author</strong> if applicant is not the original composer</li>
                    <li><strong>NOC from publisher</strong> if published and publisher differs from applicant</li>
                    <li><strong>For joint compositions:</strong> written consent or NOC from all co-composers</li>
                    <li><strong>Incorporation Certificate and Board Resolution</strong> - for music production companies and labels</li>
                    <li><strong>Assignment Deed</strong> - if composed under employment contract</li>
                    <li><strong>Note:</strong> Lyrics require separate Form XIV under "Literary Work" (Rs 500); Sound recordings require separate Form XIV under "Sound Recording" (Rs 2,000)</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges for Delhi Musical Work Creators</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>IPRS Membership vs Copyright Registration Confusion</td><td>Delhi composers believe IPRS membership constitutes copyright registration - it does NOT create Section 63 enforcement rights</td><td>Proactive advisory before filing - IPRS collects royalties, Copyright Office creates legal ownership evidence. Both needed for full protection</td></tr>
                        <tr><td>Musical Work vs Sound Recording Dual Copyright</td><td>Many Delhi composers register only the sound recording (Rs 2,000) and neglect the underlying musical work (Rs 500)</td><td>Both identified and filed - complete IP coverage for the composition and the recording</td></tr>
                        <tr><td>Lyrics and Music as Separate Registrations</td><td>Delhi HC has handled cases where plaintiffs could not enforce lyric rights because only the musical composition was registered</td><td>Two separate Form XIV applications prepared - musical work + literary work for lyrics</td></tr>
                        <tr><td>Section 18/19 Royalty Rights - Film Music Assignments</td><td>Delhi ad/OTT music producers use assignment agreements attempting to extinguish non-waivable royalty rights under 2012 Amendment</td><td>CA/CS team with 2012 Amendment knowledge ensures composers' non-waivable royalty rights are preserved</td></tr>

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
            <h2 class="section-title">Fees for Copyright for Musical Work in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee - Musical Work (composition, score, notation)</td><td>Rs 500 per work</td></tr>
                        <tr><td>Government Fee - Literary Work (lyrics - separate)</td><td>Rs 500 per work</td></tr>
                        <tr><td>Government Fee - Sound Recording (separate copyright)</td><td>Rs 2,000 per work</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 3,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Musical/Literary Work used with goods (jingles on products)</td><td>Rs 1,000 per work</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Copyright for Musical Work in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20for%20Musical%20Work%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Copyright for Musical Work Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document preparation and Form XIV completion</td><td>2-3 days</td></tr>
                        <tr><td>Filing and diary number receipt</td><td>1 day (e-filing) / same day (in-person Dwarka counter)</td></tr>
                        <tr><td>Mandatory 30-day waiting period</td><td>30 days</td></tr>
                        <tr><td>Copyright Examiner review</td><td>1-3 months post waiting period</td></tr>
                        <tr><td>Examiner query response (if raised)</td><td>Within 30 days of notice</td></tr>
                        <tr><td>Registration certificate issuance</td><td>Total 3-12 months from diary number</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Delhi advantage:</strong> In-person filing at Boudhik Sampada Bhawan gives Delhi composers same-day diary numbers. For compositions involving classical raga structures, in-person pre-filing consultation with Copyright Office staff can prevent formal examiner objections.</p>

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
            <h2 class="section-title">Why Choose Patron for Copyright for Musical Work in Delhi</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Rohini to Saket Music Corridor</h3><p class="feature-text">Delhi office covers the full arc from Saket (Fresh Lime Studios) to Dwarka (Copyright Office) - in-person filings, same-day diary numbers, and examiner hearings.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">IPRS vs Copyright Clarity</h3><p class="feature-text">Proactive advisory on IPRS membership vs Copyright Office registration distinction - ensuring Delhi composers get both royalty collection AND legal ownership evidence.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Music/Lyrics/Recording Triple Layer</h3><p class="feature-text">Pre-emptive advisory on the triple-layer copyright structure - musical work, literary work for lyrics, and sound recording - before filing to avoid costly reclassifications.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Delhi HC IP Division Expertise</h3><p class="feature-text">Familiar with Delhi HC jurisprudence on IPRS royalty enforcement (IPRS v. Hello FM) and Section 31D statutory licence rate-setting framework.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3 class="feature-title">Section 18/19 Royalty Advisory</h3><p class="feature-text">CA/CS team with 2012 Amendment knowledge ensures composers' non-waivable royalty rights are preserved when contributing to films and sound recordings.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">3-Day Filing Turnaround</h3><p class="feature-text">Form XIV filing within 3 working days of complete documentation. Pre-emptive classification query handling for Delhi's music community.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
                <p>With offices in Pune, Mumbai, Delhi (Rohini), and Gurugram, Patron serves Delhi composers with the in-person presence of a local CA firm and pan-India process rigour. Trusted by Hyundai, Asian Paints, Bridgestone, and thousands of SMEs across Delhi NCR.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional Filing - Copyright for Musical Work in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>DIY Filing</th><th>Patron Accounting, Delhi</th></tr></thead>
                    <tbody>
                        <tr><td>Music/lyrics classification</td><td>Often filed as single application - examiner may reclassify</td><td>Two separate Form XIV applications prepared correctly</td></tr>
                        <tr><td>Musical work vs sound recording</td><td>Frequently confused; sound recording registered, musical work missed</td><td>Both identified and filed - complete IP coverage</td></tr>
                        <tr><td>IPRS distinction</td><td>Rarely understood without professional guidance</td><td>Patron clarifies IPRS vs Copyright Office before filing</td></tr>
                        <tr><td>Form XIV preparation</td><td>SOP/SoFP errors common for musical works</td><td>CA/CS prepared, verified, and optimised</td></tr>
                        <tr><td>Copyright Office follow-up</td><td>In-person visit required; counter timing constraints</td><td>Patron handles all interactions at Dwarka</td></tr>
                        <tr><td>Total cost</td><td>Rs 500 govt fee only (one work)</td><td>From INR 3,999 all-inclusive</td></tr>

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
            <h2 class="section-title">Related Services for Delhi Musical Work Creators</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/copyright-registration-for-musical-work">Copyright for Musical Work (India page)</a> - National overview</li>
                    <li><a href="/copyright-registration">Copyright Registration</a> - General copyright registration across all categories</li>
                    <li><a href="/copyright-registration-for-broadcast">Copyright for Broadcast</a> - Broadcast rights for Delhi TV channels and OTT platforms</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Protect band names and music label identities</li>
                    <li><a href="/copyright-registration-for-sound-recording">Copyright for Sound Recording</a> - Separate sound recording copyright at Rs 2,000</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Musical Work Copyright in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 2(p) - Musical Work:</strong> Work consisting of music and includes graphical notation - expressly excludes words/actions sung, spoken, or performed with the music (those are separate literary/dramatic works).</li>
                    <li><strong>Section 13 - Copyright Subsistence:</strong> Copyright subsists in original musical works. Section 13(4) confirms copyright in a sound recording does not affect the separate copyright in any musical work.</li>
                    <li><strong>Section 14(a) - Rights:</strong> Exclusive rights to: reproduce; perform in public; communicate to public; make sound recording; translate; make any adaptation or arrangement.</li>
                    <li><strong>Sections 18/19 - Royalty Rights (2012 Amendment):</strong> Composers who assign copyright to film producers retain an EQUAL share of royalties. This right CANNOT be assigned away or waived.</li>
                    <li><strong>Section 22 - Duration:</strong> Author's lifetime + 60 years from the year following death.</li>
                    <li><strong>Section 57 - Moral Rights:</strong> Right to claim authorship and restrain distortion/mutilation of the musical work.</li>
                    <li><strong>Section 63 - Penalties:</strong> Minimum 6 months + Rs 50,000 fine for first offence. Delhi HC granted injunction in IPRS v. Hello FM. <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office - copyright.gov.in</a></li>
                    <li><strong>IPRS - Section 33 Copyright Society:</strong> IPRS collects performing right royalties. Central Government renewed IPRS registration on 21 January 2025. IPRS membership does NOT replace Copyright Office registration.</li>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Copyright for Musical Work in Delhi</h2>
                    <p class="faq-expanded__lead">Expert answers to common questions about registering copyright for musical compositions, lyrics, and jingles in Delhi.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Copyright for Musical Work in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles Copyright for Musical Work registration in Delhi?</h3>
                        <div class="faq-expanded__a"><p>The Copyright Office, Boudhik Sampada Bhawan, Plot No. 32, Sector 14, Dwarka, New Delhi 110075 - under DPIIT, Ministry of Commerce and Industry (Phone: 011-28032496, Email: copyright@nic.in). It is India's sole Copyright Office. Delhi composers can file Form XIV in-person at the counter (2:30 PM onwards) for same-day diary number, or online via copyright.gov.in. Patron Accounting's Rohini office handles all coordination.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I register Copyright for Musical Work online from Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. The e-filing portal at copyright.gov.in allows Delhi composers to submit Form XIV, upload a PDF of the graphical notation or score (under 10 MB), and pay Rs 500 online. E-filed applications generate diary numbers within 1-3 working days. Delhi applicants additionally have same-day in-person diary number collection at Boudhik Sampada Bhawan counter - an advantage unavailable elsewhere.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the fee for Copyright for Musical Work registration in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Government fee is Rs 500 per musical work under Second Schedule, Copyright Rules 2013. Lyrics require separate literary work registration at Rs 500. Sound recordings require separate registration at Rs 2,000. Patron Accounting's professional fee starts from INR 3,999, covering Form XIV preparation, classification advisory, e-filing, and examiner query handling.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does Copyright for Musical Work registration take in Delhi?</h3>
                        <div class="faq-expanded__a"><p>A mandatory 30-day waiting period follows diary number receipt under Section 45. After Copyright Examiner review (1-3 months), registration typically completes within 3-6 months. Where originality queries arise, processing may extend to 12 months. Delhi applicants can attend in-person hearings at Boudhik Sampada Bhawan, Dwarka to expedite resolution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between musical work copyright and sound recording copyright?</h3>
                        <div class="faq-expanded__a"><p>Musical work copyright (Section 2(p)) protects the composition - melody, harmony, and notation. Sound recording copyright (Section 2(xx)) protects the specific recorded performance. Both are independent copyrights requiring separate Form XIV applications. The 2012 Amendment ensures composers retain non-waivable royalty rights even after assigning sound recording rights.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is IPRS membership the same as copyright registration for musical work?</h3>
                        <div class="faq-expanded__a"><p>No. IPRS (Indian Performing Right Society, Delhi branch) collects performing right royalties under Section 33 but does NOT create prima facie legal evidence of copyright ownership or Section 63 criminal enforcement rights. Delhi composers must register at the Copyright Office, Boudhik Sampada Bhawan, Dwarka for complete legal protection alongside IPRS membership.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Section 2(p) mein musical work kya hai?</strong> Musical work = work consisting of music + graphical notation. Excludes words/actions for singing (those are literary work). Lyrics register separately under Section 2(o).</p>
                <p><strong>Copyright in musical work kitne saal ka hai?</strong> Author's lifetime + 60 years from beginning of year following year of death - under Section 22.</p>
                <p><strong>IPRS registration kya copyright registration se alag hai?</strong> Yes. IPRS (Section 33 society) enables royalty collection. Copyright Office registration (Section 45) creates prima facie legal ownership evidence. Both are needed.</p>
                <p><strong>Can lyrics and music have separate copyrights?</strong> Yes. Lyrics = literary work (Section 2(o)). Music = musical work (Section 2(p)). Both require separate Form XIV at Rs 500 each.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why You Should Register Musical Work Copyright Now</h2>
            <div class="content-text">
                
                <p><strong>Unregistered compositions face systematic infringement</strong> - from unauthorised sampling to jingle reuse by Delhi ad agencies without royalty payment. Section 63 carries minimum 6 months imprisonment and Rs 50,000 fine - but requires ownership evidence through registration.</p>
                <p><strong>The 2012 Amendment's non-waivable royalty rights</strong> under Sections 18 and 19 are most effectively enforced when copyright registration exists as prima facie evidence before the Delhi HC IP Division.</p>
                <p><strong>Delhi composers who delay registration</strong> risk losing the evidentiary foundation for royalty claims against film producers and music labels.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Copyright for Musical Work in Delhi - Partner with Patron</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Copyright for Musical Work in Delhi is foundational for composers, lyricists, music producers, jingle creators, and recording studios in India's most commercially active musical creation hub. The Copyright Act, 1957 - through Sections 2(p), 13, 14, 18, 19, 22, 57, and 63 - provides comprehensive protection for Delhi's creative community.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting LLP's Delhi office in Rohini provides end-to-end registration - Form XIV preparation, IPRS vs copyright advisory, music/lyrics/sound-recording triple-layer classification, and in-person Copyright Office coordination at Dwarka. Our CA and CS team serves Delhi NCR's creative sector with 15+ years of experience.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20for%20Musical%20Work%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Copyright%20for%20Musical%20Work%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20Copyright%20for%20Musical%20Work%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Copyright for Musical Work - Available in 4 Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert musical work copyright registration across India's major cities.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
                        <a href="/copyright-registration-for-musical-work/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <a href="/copyright-registration-for-musical-work/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                        <a href="/copyright-registration-for-musical-work/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    </div></div>
                <div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for Copyright for Musical Work in Delhi</div><div class="pa-cross-grid">
                        <a href="/copyright-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/copyright-registration-for-sound-recording/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright for Sound Recording</div><div class="pa-card-sub">Delhi</div></div></a>
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
            <p>This page is reviewed annually. Monitor: IPRS registration renewal, Delhi HC IP Division Section 31D royalty orders, Copyright Amendment developments. Reviewed by CA & CS Team, Patron Accounting LLP.</p>
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
