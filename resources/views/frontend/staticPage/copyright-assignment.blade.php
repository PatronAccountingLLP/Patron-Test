

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>Copyright Assignment in India - Process, Deed & Documents</title>
    <meta name="description" content="Transfer copyright ownership under Sections 18 and 19 of the Copyright Act, 1957. Complete, partial, and territorial assignment. Expert agreement drafting by CA/CS team.">
    <link rel="canonical" href="/copyright-assignment">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Copyright Assignment in India - Process, Deed & Documents">
    <meta property="og:description" content="Transfer copyright ownership under Sections 18 and 19 of the Copyright Act, 1957. Complete, partial, and territorial assignment. Expert agreement drafting by CA/CS team.">
    <meta property="og:url" content="/copyright-assignment">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copyright Assignment in India - Process, Deed & Documents">
    <meta name="twitter:description" content="Transfer copyright ownership under Sections 18 and 19 of the Copyright Act, 1957. Complete, partial, and territorial assignment. Expert agreement drafting by CA/CS team.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Copyright Assignment in India: Process, Fees and Agreement",
          "description": "Transfer copyright ownership under Sections 18 and 19 of the Copyright Act, 1957. Complete, partial, and territorial assignment. Expert agreement drafting by CA/CS team.",
          "url": "https://www.patronaccounting.com/copyright-assignment",
          "serviceType": "Copyright Assignment in India: Process, Fees and Agreement",
          "areaServed": {
            "@type": "Country",
            "name": "India"
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
              "name": "Copyright Assignment in India: Process, Fees and Agreement",
              "item": "https://www.patronaccounting.com/copyright-assignment"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is copyright assignment?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Copyright assignment is the legal transfer of copyright ownership from the original owner (assignor) to another person or entity (assignee) under Section 18 of the Copyright Act, 1957. Unlike licensing, which grants temporary permission to use a work, assignment transfers ownership rights - the assignee becomes the new copyright owner and can exercise all exclusive rights under Section 14 including reproduction, distribution, and adaptation."
              }
            },
            {
              "@type": "Question",
              "name": "What are the mandatory requirements for a valid assignment?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 19, a valid copyright assignment must be in writing and signed by the assignor or their authorised agent. The agreement must identify the work, specify the rights being assigned, state the duration and territorial extent of the assignment, and specify the royalty or other consideration payable. If duration is not stated, it defaults to 5 years. If territory is not stated, it is presumed to extend within India only."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if the assignee does not use the rights?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 19(4), if the assignee does not exercise the rights assigned within a period of 1 year from the date of assignment, the assignment is deemed to have lapsed unless the agreement provides otherwise. Additionally, under Section 19A, if the assignee fails to make sufficient exercise of the assigned rights, the assignor can approach the Commercial Court or High Court for revocation."
              }
            },
            {
              "@type": "Question",
              "name": "Can copyright in a future work be assigned?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 18(1) of the Copyright Act, the prospective owner of copyright in a future work may assign the copyright. However, the assignment takes effect only when the work comes into existence. This is commonly used in publishing contracts where authors assign rights to works not yet written."
              }
            },
            {
              "@type": "Question",
              "name": "Is registration of the assignment deed mandatory?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Registration of the assignment deed with the Copyright Office is not mandatory for the assignment to be legally valid. The assignment is valid as long as it meets Section 19 requirements (written, signed, with specified terms). However, filing Form XV to update the Register of Copyrights is strongly recommended as it creates a public record and strengthens enforcement."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between complete and partial assignment?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "In a complete assignment, the assignor transfers all copyright rights making the assignee the sole owner with full rights. In a partial assignment, only specific rights are transferred - for example, translation rights in a particular language, or distribution rights in a specific territory - while the assignor retains all other rights. Both types must comply with Section 19."
              }
            },
            {
              "@type": "Question",
              "name": "Does copyright assignment affect moral rights?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Moral rights (right of authorship and right against distortion under Section 57) are independent of copyright assignment and remain with the author even after assignment. The author retains the right to claim authorship and to restrain distortion or modification that would be prejudicial to their honour or reputation."
              }
            },
            {
              "@type": "Question",
              "name": "Can an assignment cover digital and online mediums?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, but only if specifically mentioned in the agreement. The 2012 Amendment to Section 18(1) prevents assignments from covering mediums not existing at the time of assignment unless explicitly stated. Our agreements include forward-looking clauses listing known and foreseeable mediums of exploitation. Quick Answers Can an assignment cover digital/online mediums? Yes, but only if specifically mentioned in the agreement. The 2012 Amendment prevents coverage of mediums not existing at the time of assignment unless explicitly stated. Is stamp duty applicable? Yes, stamp duty may apply depending on the state and the consideration amount. Rates vary by state. Can a minor assign copyright? No. A minor cannot enter into a valid contract. A legal guardian can act on behalf of a minor. Does assignment affect moral rights? No. Moral rights under Section 57 remain with the author even after assignment. Can assignment be made orally? No. Section 19(1) mandates that the assignment must be in writing and signed by the assignor."
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
                        Copyright Assignment in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Types:</span> Complete, Partial, Territorial, and Time-Limited Assignment under Section 18 of the Copyright Act, 1957</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Governing Law:</span> Sections 18 and 19 of the Copyright Act, 1957 - mandatory written agreement with specified rights, duration, territory, and royalty</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Default Rules:</span> 5-year duration if unspecified (Section 19(5)); India-only territory if unspecified (Section 19(6)); 1-year lapse if rights not exercised (Section 19(4))</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Agreement drafting: 3-5 days; Registration with Copyright Office: 2-4 months for Form XV processing</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses for copyright and IP services across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Copyright%20Assignment%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20help%20with%20Copyright%20Assignment.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20Copyright%20Assignment.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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

                                        @include('partials.lead-form', [
                        'deal' => 'Website Enquiry - Copyright Assignment',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'copyright-assignment', 'label' => 'Copyright Assignment', 'selected' => true, 'disabled' => false],
                            ['value' => 'copyright-registration', 'label' => 'Copyright Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'logo-copyright-registration', 'label' => 'Logo Copyright Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'brand-copyright-registration', 'label' => 'Brand Copyright Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'copyright-objection', 'label' => 'Copyright Objection', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-assignment', 'label' => 'Trademark Assignment', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-registration', 'label' => 'Trademark Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'other', 'label' => 'Other', 'selected' => false, 'disabled' => false],
                        ],
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
<section class="testimonials-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, & stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <!-- POPULATE: Replace these with real testimonial-card divs.
             Each card follows this structure (quote card):
             <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                 <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                 <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">REVIEW TEXT</div>
                 <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                     <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                     <div>
                         <div style="font-weight:700;font-size:13px;color:var(--blue);">Author Name</div>
                         <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Role / Company</div>
                         <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                     </div>
                     <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                 </div>
             </div>
             For video card pattern, refer to section8-company-registration.html
        -->
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting drafted our software copyright assignment agreement for a multi-module ERP system we acquired. Their Section 19 compliance review and future-medium clauses gave us complete confidence in the transfer.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VP</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Patel</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CTO, DataBridge Solutions</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We needed to assign publishing rights for 12 titles simultaneously. Patron handled the bulk assignment with proper cataloguing, Form XV filing, and royalty schedules for each title. Excellent service.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MI</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Meera Iyer</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Sahitya Publications</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a freelance designer, I needed proper copyright assignment deeds for client work. Patron's team created a template that I now use for every project. The 1-year exercise clause was something I never knew about.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AD</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arjun Desai</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, CreativeEdge Design Studio</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We acquired a content library of 500+ articles and needed comprehensive assignment documentation. Patron handled everything including ownership verification, agreement drafting, and Copyright Office registration.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NK</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Nisha Kapoor</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">VP Content, MediaStack India</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our film production company regularly acquires script rights. Patron ensures our assignment agreements comply with the 2012 Amendment protecting authors' royalty rights. They understand the nuances of copyright in cinematograph films.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rohit Sharma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Producer, Cinecraft Productions</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>

    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Expert copyright assignment services - agreement drafting, Form XV filing, and dispute resolution under the Copyright Act, 1957.</p>
                </div>
            </div>
            <a href="tel:+919459456700" class="btn-cta">
                Talk to an Expert
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

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
            <a class="toc-btn" href="#overview-section">Overview</a>
            <a class="toc-btn" href="#what-section">What Is It</a>
            <a class="toc-btn" href="#who-section">Who Needs It</a>
            <a class="toc-btn" href="#services-section">Our Services</a>
            <a class="toc-btn" href="#procedure-section">6-Step Process</a>
            <a class="toc-btn" href="#documents-section">Documents</a>
            <a class="toc-btn" href="#challenges-section">Challenges</a>
            <a class="toc-btn" href="#fees-section">Fees</a>
            <a class="toc-btn" href="#timeline-section">Timeline</a>
            <a class="toc-btn" href="#benefits-section">Benefits</a>
            <a class="toc-btn" href="#comparison-section">Assignment vs Licensing</a>
            <a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright Assignment - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Copyright Assignment Services at a Glance</strong></p>
                    <p>Copyright assignment is the legal transfer of copyright ownership from the assignor (original owner) to the assignee (new owner) under Section 18 of the Copyright Act, 1957. The assignment must be in writing, signed by the assignor, and must specify the rights transferred, duration, territory, and royalty. If duration is not stated, it defaults to 5 years. If territory is not stated, it is presumed to be India only.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Sections</td><td>Section 18 (Assignment), Section 19 (Mode of Assignment), Section 19A (Disputes)</td></tr>
                        <tr><td>Assignment Must Be</td><td>In writing, signed by assignor or authorised agent (Section 19(1))</td></tr>
                        <tr><td>Default Duration</td><td>5 years from date of assignment if not specified (Section 19(5))</td></tr>
                        <tr><td>Default Territory</td><td>India only if territorial extent not specified (Section 19(6))</td></tr>
                        <tr><td>Lapse Rule</td><td>If assignee does not exercise rights within 1 year, assignment lapses (Section 19(4))</td></tr>
                        <tr><td>Registration Form</td><td>Form XV (change in particulars of copyright) with Copyright Office</td></tr>
                        <tr><td>Disputes</td><td>Commercial Court / High Court under Section 19A (post-2021 amendment)</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:0;</p>
                </div>
                <p>Copyright assignment in India is the legal mechanism through which creators, authors, and copyright owners transfer their exclusive rights - partially or completely - to another person or entity. Governed by Sections 18 and 19 of the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Copyright Act, 1957</a>, copyright assignment is commonly used by authors selling publishing rights, software developers transferring code ownership, designers assigning artwork to clients, and film producers acquiring script rights.</p>
                <p>Unlike licensing (which grants temporary permission to use a work), assignment is a permanent or time-bound transfer of ownership rights. The assignee becomes the new owner of the assigned rights for the specified duration and territory. Patron Accounting's team drafts legally robust assignment agreements, handles registration with the <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office</a>, and advises on royalty structuring and dispute resolution.</p>
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
                <h2 class="section-title">What Is Copyright Assignment?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Copyright assignment is the transfer of copyright ownership from one person (the assignor) to another (the assignee) under Section 18 of the Copyright Act, 1957. The assignor may transfer copyright wholly or partially, generally or subject to limitations, and for the whole term of the copyright or any part thereof. Upon assignment, the assignee becomes the owner of the assigned rights and can exercise all exclusive rights under Section 14 including reproduction, distribution, public performance, adaptation, and translation.</p>
                    <p>For a copyright assignment to be legally valid under Section 19, it must be in writing signed by the assignor, identify the work being assigned, specify the rights transferred, state the duration and territorial extent, and specify the royalty or other consideration payable. If the duration is not stated, the assignment is deemed to be for 5 years under Section 19(5). If the territorial extent is not specified, it is presumed to extend within India only under Section 19(6).</p>
                    <p>If the assignee does not exercise the assigned rights within 1 year of assignment, the assignment lapses under Section 19(4). The 2012 Amendment to the Copyright Act strengthened author protection by ensuring that assignments cannot extend to mediums or modes of exploitation that did not exist at the time of assignment, unless specifically mentioned.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Copyright Assignment:</strong></p>
                    <p><strong>Assignment (Section 18)</strong> - The transfer of copyright ownership from the assignor to the assignee, either wholly or partially, for the whole or part of the copyright term.</p>
                    <p><strong>Mode of Assignment (Section 19)</strong> - The legal requirements for a valid assignment: must be in writing, signed, with specified rights, duration, territory, and consideration.</p>
                    <p><strong>Section 19A (Disputes)</strong> - If an assignee fails to exercise rights within a reasonable period, the aggrieved party can approach the Commercial Court or High Court for revocation or relief.</p>
                    <p><strong>Form XV</strong> - Application form for recording changes in copyright particulars in the Register of Copyrights, filed when recording an assignment with the Copyright Office.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Copyright Symbol -->
                            <circle cx="100" cy="70" r="55" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <circle cx="100" cy="70" r="40" fill="none" stroke="#14365F" stroke-width="2"/>
                            <text x="100" y="82" font-size="40" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">C</text>
                            <!-- Arrow transfer -->
                            <path d="M130 70 L160 70" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                            <path d="M155 63 L162 70 L155 77" stroke="#F5A623" stroke-width="3" stroke-linecap="round" fill="none"/>
                            <!-- New owner badge -->
                            <circle cx="175" cy="70" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M169 70l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Section tag -->
                            <rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="52" y="142.5" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 18/19</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Copyright Assignment</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 18/19 Compliant</span>
                        <strong>Copyright Ownership Transfer</strong>
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
            <h2 class="section-title">Who Needs Copyright Assignment?</h2>
            <div class="content-text">
                
                <p>Copyright assignment is required by a wide range of creators, businesses, and intermediaries involved in the transfer of intellectual property rights:</p>
                <ul>
                    <li><strong>Authors and Writers:</strong> Authors selling book rights, publishing rights, or translation rights to publishers. Assignment ensures clear ownership transfer and royalty terms.</li>
                    <li><strong>Software Companies:</strong> Businesses acquiring software code, applications, or digital products from developers or freelancers. Assignment transfers all modification and distribution rights.</li>
                    <li><strong>Film and Music Producers:</strong> Producers acquiring script, screenplay, or music composition rights from authors. The 2012 Amendment protects the author's right to equal royalty for literary/musical work in cinematograph films.</li>
                    <li><strong>Design and Creative Agencies:</strong> Agencies that create logos, artwork, or brand designs for clients and need to formally assign copyright to the commissioning business.</li>
                    <li><strong>Businesses Acquiring IP:</strong> Companies purchasing copyrighted content, databases, creative assets, or digital products as part of business acquisitions or asset purchases.</li>
                    <li><strong>E-commerce and Content Platforms:</strong> Platforms commissioning original content (articles, videos, photographs) from freelancers and needing clear copyright ownership for commercial use.</li>
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
            <h2 class="section-title">Our Copyright Assignment Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Assignment Agreement Drafting</td><td>We draft comprehensive copyright assignment agreements specifying the work, rights transferred, duration, territory, royalty/consideration, and all mandatory clauses under Section 19</td></tr>
                        <tr><td>Due Diligence on Ownership</td><td>Before drafting, we verify the assignor's ownership through copyright search, registration records, and chain of title analysis to ensure the assignment is legally valid</td></tr>
                        <tr><td>Registration with Copyright Office</td><td>For assignments subsequent to initial registration, we file Form XV with the Copyright Office to record the change in ownership in the Register of Copyrights</td></tr>
                        <tr><td>Royalty and Consideration Structuring</td><td>We advise on royalty structures - lump sum, percentage-based, milestone-based - ensuring compliance with Section 19(3) and protecting the author's right to revision</td></tr>
                        <tr><td>Dispute Resolution Advisory</td><td>In case of assignment disputes (non-exercise of rights, royalty non-payment, revocation claims), we provide representation before the Commercial Court or High Court under Section 19A</td></tr>
                        <tr><td>Multi-Work and Portfolio Assignment</td><td>For businesses acquiring multiple copyrighted works (content libraries, software portfolios, design archives), we handle bulk assignment with proper cataloguing and documentation</td></tr>

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
            <h2 class="section-title">6-Step Copyright Assignment Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting follows a structured 6-step process for copyright assignment - from ownership verification to Form XV registration, ensuring compliance with Sections 18 and 19 of the Copyright Act, 1957.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Identify the Work and Verify Ownership</h3>
        <p class="step-description">Clearly identify the copyrighted work (literary, artistic, musical, dramatic, software, film) and verify the assignor's ownership through copyright registration certificate, creation records, or prior assignment chain.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Ownership verified</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Chain of title confirmed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M42 35l3 3 6-6" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="65" y1="28" x2="95" y2="28" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="65" y1="40" x2="90" y2="40" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Ownership Clear</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Determine Assignment Type</h3>
        <p class="step-description">Decide the scope: Complete Assignment (all rights), Partial Assignment (specific rights only, e.g., translation or adaptation), Territorial Assignment (specific geography), or Time-Limited Assignment (specific duration).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scope defined</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Clause structure set</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="15" width="50" height="55" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="30" y="38" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FULL</text><rect x="65" y="15" width="50" height="55" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="90" y="38" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PARTIAL</text><text x="30" y="52" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">100%</text><text x="90" y="52" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">Specific</text></svg></div>
            <span class="illustration-label">Type Selected</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Draft Assignment Agreement</h3>
        <p class="step-description">The agreement must comply with Section 19 and include: identification of the work, specific rights assigned, duration (default: 5 years if not stated), territorial extent (default: India if not stated), royalty/consideration terms, and signatures of both parties.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 19 compliant</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All clauses included</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="28" y1="22" x2="92" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="28" y1="34" x2="85" y2="34" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="28" y1="44" x2="78" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="28" y1="54" x2="82" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="28" y1="64" x2="70" y2="64" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Agreement Drafted</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Execute the Agreement</h3>
        <p class="step-description">The agreement must be in writing and signed by the assignor or their duly authorised agent under Section 19(1). Execution in the presence of two witnesses is recommended. Stamp duty may apply depending on the state.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Signed and witnessed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Stamp duty applied</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M40 55 Q55 30 70 55 Q80 65 90 50" stroke="#14365F" stroke-width="2" fill="none" stroke-linecap="round"/><line x1="35" y1="60" x2="85" y2="60" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="90" cy="20" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M85 20l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Agreement Executed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Register with Copyright Office (Form XV)</h3>
        <p class="step-description">If the copyright was previously registered, file Form XV with the Copyright Office along with: notarised copy of the assignment deed, affidavit confirming no pending litigation, Power of Attorney (if filing through agent), and prescribed fees.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form XV filed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Public record created</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="10" width="80" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FORM XV</text><line x1="30" y1="38" x2="90" y2="38" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="50" x2="80" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="60" x2="70" y2="60" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Registration Filed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Record and Monitor</h3>
        <p class="step-description">Maintain records of the executed agreement, registration acknowledgement, and payment receipts. The assignee should exercise the assigned rights within 1 year to prevent lapse under Section 19(4). Set up royalty payment schedules.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rights exercised</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Royalty tracked</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 10L20 30V65C20 85 60 95 60 95C60 95 100 85 100 65V30L60 10Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="50" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 50l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Assignment Complete</span>
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
            <h2 class="section-title">Documents Required for Copyright Assignment</h2>
            <div class="content-text">
                
                <p>The following documents are required for a complete copyright assignment process:</p>
                <ul>
                    <li><strong>Original Copyright Registration Certificate:</strong> If the work is registered, the original certificate establishes the assignor's ownership</li>
                    <li><strong>Identity Proof of Assignor and Assignee:</strong> PAN, Aadhaar, or Passport of both parties</li>
                    <li><strong>Assignment Agreement (Deed):</strong> Written agreement complying with Section 19, signed by the assignor</li>
                    <li><strong>NOC from Author:</strong> No Objection Certificate from the original author if the assignor acquired rights through a prior assignment or licensing</li>
                    <li><strong>Power of Attorney:</strong> If filing through an advocate or agent - original, signed, and accepted by the attorney</li>
                    <li><strong>Affidavit:</strong> For Form XV filing - attesting that no case is pending in any court regarding the copyright or the assignment</li>
                    <li><strong>Death Certificate (if applicable):</strong> If the original copyright holder is deceased and the legal heir is assigning</li>
                    <li><strong>Work Copies:</strong> Two copies of the copyrighted work being assigned for reference</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Copyright Assignment Challenges and Our Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Missing Mandatory Clauses</td><td>Many agreements omit duration, territory, or royalty terms, triggering default rules (5-year/India-only) that may not reflect the parties' intent</td><td>Patron Accounting ensures every Section 19 mandatory clause is explicitly included in the agreement with custom terms matching the parties' commercial intent</td></tr>
                        <tr><td>Freelancer IP Ownership Disputes</td><td>When businesses commission work from freelancers without formal assignment, both parties may claim ownership - creating costly litigation risk</td><td>We draft assignment agreements at the project stage itself, ensuring the commissioning business holds clear copyright upon delivery</td></tr>
                        <tr><td>1-Year Lapse Risk</td><td>Under Section 19(4), if the assignee does not exercise assigned rights within 1 year, the assignment lapses - a commonly overlooked provision</td><td>We structure agreements with exercise timelines and advise assignees on immediate commercial use documentation to preserve rights</td></tr>
                        <tr><td>Future Medium Exploitation Gaps</td><td>The 2012 Amendment prevents assignments from covering mediums that did not exist at the time of assignment unless specifically stated</td><td>Our agreements include forward-looking clauses explicitly listing known and foreseeable mediums of exploitation including digital and emerging platforms</td></tr>

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
            <h2 class="section-title">Copyright Assignment Fees and Costs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Agreement Drafting (Professional)</td><td>Rs 3,000 - Rs 15,000 (depends on complexity and work type)</td></tr>
                        <tr><td>Form XV Filing (Govt Fee)</td><td>Rs 500 - Rs 2,000 per work, per class</td></tr>
                        <tr><td>Stamp Duty on Assignment Deed</td><td>Varies by state based on consideration amount</td></tr>
                        <tr><td>Notarisation</td><td>Rs 200 - Rs 500 per document</td></tr>
                        <tr><td>Due Diligence / Copyright Search</td><td>Rs 1,000 - Rs 3,000 for ownership verification</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Copyright Assignment consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20Copyright%20Assignment.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright Assignment Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Ownership Verification</td><td>1-3 days</td></tr>
                        <tr><td>Agreement Drafting</td><td>3-5 days</td></tr>
                        <tr><td>Execution and Stamping</td><td>1-2 days</td></tr>
                        <tr><td>Form XV Filing (if applicable)</td><td>1-2 days</td></tr>
                        <tr><td>Copyright Office Processing</td><td>2-4 months</td></tr>
                        <tr><td>Total (Agreement to Registration)</td><td>2-5 months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> The assignment agreement is legally effective from the date of execution, even before Form XV registration is completed. Form XV registration creates a public record and is strongly recommended but is not a prerequisite for validity. Assignees should exercise rights within 1 year of assignment to prevent lapse under Section 19(4).</p>

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
            <h2 class="section-title">Why Choose Professional Copyright Assignment Services</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Section 19 Compliant Agreements</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Every mandatory clause included - rights, duration, territory, royalty - preventing default rules from undermining the parties' intent</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Ownership Verification</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Thorough due diligence before drafting to ensure the assignor has valid, unencumbered ownership of the copyright being transferred</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Future-Proof Clauses</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Explicit medium and exploitation clauses complying with the 2012 Amendment, protecting the assignee's rights in digital and emerging platforms</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Royalty Structuring</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Fair consideration terms that comply with Section 19(3), protect the author's right to revision, and create clear payment schedules</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Registration and Enforcement</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Form XV filing for public record, plus enforcement support including cease-and-desist and litigation guidance for copyright infringement</p>
            </article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ businesses</strong> trust Patron Accounting for IP, copyright, and compliance services. With <strong>15+ years of experience</strong>, a <strong>4.9-star Google rating</strong> from 500+ verified reviews, and <strong>50,000+ documents filed</strong>, our CA, CS, and IP team ensures your copyright transfers are legally sound and commercially effective.</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, we serve clients across India - both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright Assignment vs Licensing - Key Differences</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Assignment (Sec 18)</th><th>Licensing (Sec 30)</th></tr></thead>
                    <tbody>
                        <tr><td>Nature</td><td>Transfer of ownership - assignee becomes new owner</td><td>Permission to use - licensor retains ownership</td></tr>
                        <tr><td>Duration</td><td>Permanent or time-bound (default: 5 years)</td><td>As per licence agreement</td></tr>
                        <tr><td>Rights</td><td>Assignee can sub-license, enforce, and sue</td><td>Licensee can use as permitted; cannot sub-license unless exclusive</td></tr>
                        <tr><td>Revocation</td><td>Court can revoke if rights not exercised (Sec 19A)</td><td>As per licence terms or breach</td></tr>
                        <tr><td>Form Requirement</td><td>Must be in writing, signed by assignor (Sec 19(1))</td><td>Must be in writing for exclusive licence</td></tr>
                        <tr><td>Best For</td><td>Permanent ownership transfer, business acquisitions, full IP sales</td><td>Temporary use rights, multiple licensees, royalty income</td></tr>

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
            <h2 class="section-title">Related Copyright and IP Services</h2>
            <div class="content-text">
                
                <p>Patron Accounting offers a comprehensive suite of copyright and intellectual property services:</p>
                <ul>
                    <li><a href="/copyright-registration">Copyright Registration</a> - Register your original work with the Copyright Office for statutory protection</li>
                    <li><a href="/logo-copyright-registration">Logo Copyright Registration</a> - Protect your logo design with copyright registration</li>
                    <li><a href="/brand-copyright-registration">Brand Copyright Registration</a> - Comprehensive brand protection through copyright</li>
                    <li><a href="/copyright-objection">Copyright Objection</a> - Respond to or file objections against copyright claims</li>
                    <li><a href="/trademark-assignment">Trademark Assignment</a> - Transfer trademark ownership with expert documentation</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Copyright Assignment in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Section / Regulation</th><th>Key Provision</th></tr></thead>
                    <tbody>
                        <tr><td><a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Section 18 - Assignment of Copyright</a></td><td>Owner may assign copyright wholly or partially, for whole term or part. Future work assignment takes effect when work is created. 2012 Amendment: no assignment to mediums not existing at time unless specified</td></tr>
                        <tr><td>Section 19 - Mode of Assignment</td><td>(1) Must be in writing signed by assignor. (2) Must identify work, specify rights, duration, territory. (3) Must specify royalty/consideration. (4) 1-year lapse if rights not exercised. (5) Default 5-year duration. (6) Default India territory</td></tr>
                        <tr><td>Section 19A - Disputes</td><td>Commercial Court or High Court (post-2021) may revoke assignment if assignee fails to exercise rights, or pass orders for royalty recovery</td></tr>
                        <tr><td>Form XV</td><td>Application for recording changes in copyright particulars in the Register of Copyrights - filed when recording an assignment after initial registration</td></tr>
                        <tr><td>Section 63 - Penalties</td><td>Copyright infringement: imprisonment 6 months to 3 years + fine Rs 50,000 to Rs 2 lakh (first offence). Section 63A: enhanced penalty for repeat offences</td></tr>
                        <tr><td><a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Rules, 2013</a></td><td>Schedule 2 prescribes fees for Form XV filing and other copyright office applications</td></tr>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Copyright Assignment</h2>
                    <p class="faq-expanded__lead">Expert answers to the most common questions about copyright assignment under the Copyright Act, 1957.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Copyright Assignment'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is copyright assignment?</h3>
                        <div class="faq-expanded__a"><p>Copyright assignment is the legal transfer of copyright ownership from the original owner (assignor) to another person or entity (assignee) under Section 18 of the Copyright Act, 1957. Unlike licensing, which grants temporary permission to use a work, assignment transfers ownership rights - the assignee becomes the new copyright owner and can exercise all exclusive rights under Section 14 including reproduction, distribution, and adaptation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the mandatory requirements for a valid assignment?</h3>
                        <div class="faq-expanded__a"><p>Under Section 19, a valid copyright assignment must be in writing and signed by the assignor or their authorised agent. The agreement must identify the work, specify the rights being assigned, state the duration and territorial extent of the assignment, and specify the royalty or other consideration payable. If duration is not stated, it defaults to 5 years. If territory is not stated, it is presumed to extend within India only.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What happens if the assignee does not use the rights?</h3>
                        <div class="faq-expanded__a"><p>Under Section 19(4), if the assignee does not exercise the rights assigned within a period of 1 year from the date of assignment, the assignment is deemed to have lapsed unless the agreement provides otherwise. Additionally, under Section 19A, if the assignee fails to make sufficient exercise of the assigned rights, the assignor can approach the Commercial Court or High Court for revocation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can copyright in a future work be assigned?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 18(1) of the Copyright Act, the prospective owner of copyright in a future work may assign the copyright. However, the assignment takes effect only when the work comes into existence. This is commonly used in publishing contracts where authors assign rights to works not yet written.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is registration of the assignment deed mandatory?</h3>
                        <div class="faq-expanded__a"><p>No. Registration of the assignment deed with the Copyright Office is not mandatory for the assignment to be legally valid. The assignment is valid as long as it meets Section 19 requirements (written, signed, with specified terms). However, filing Form XV to update the Register of Copyrights is strongly recommended as it creates a public record and strengthens enforcement.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between complete and partial assignment?</h3>
                        <div class="faq-expanded__a"><p>In a complete assignment, the assignor transfers all copyright rights making the assignee the sole owner with full rights. In a partial assignment, only specific rights are transferred - for example, translation rights in a particular language, or distribution rights in a specific territory - while the assignor retains all other rights. Both types must comply with Section 19.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Does copyright assignment affect moral rights?</h3>
                        <div class="faq-expanded__a"><p>No. Moral rights (right of authorship and right against distortion under Section 57) are independent of copyright assignment and remain with the author even after assignment. The author retains the right to claim authorship and to restrain distortion or modification that would be prejudicial to their honour or reputation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can an assignment cover digital and online mediums?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only if specifically mentioned in the agreement. The 2012 Amendment to Section 18(1) prevents assignments from covering mediums not existing at the time of assignment unless explicitly stated. Our agreements include forward-looking clauses listing known and foreseeable mediums of exploitation.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Can an assignment cover digital/online mediums?</strong> Yes, but only if specifically mentioned in the agreement. The 2012 Amendment prevents coverage of mediums not existing at the time of assignment unless explicitly stated.</p>
                <p><strong>Is stamp duty applicable?</strong> Yes, stamp duty may apply depending on the state and the consideration amount. Rates vary by state.</p>
                <p><strong>Can a minor assign copyright?</strong> No. A minor cannot enter into a valid contract. A legal guardian can act on behalf of a minor.</p>
                <p><strong>Does assignment affect moral rights?</strong> No. Moral rights under Section 57 remain with the author even after assignment.</p>
                <p><strong>Can assignment be made orally?</strong> No. Section 19(1) mandates that the assignment must be in writing and signed by the assignor.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Act Now - Protect Your Copyright Transfer</h2>
            <div class="content-text">
                
                <p>Copyright assignment without proper documentation exposes both parties to significant risks. Without a written agreement meeting Section 19 requirements, the assignment may be void. Without specifying duration, the assignment defaults to only 5 years under Section 19(5). Without specifying territory, rights are limited to India under Section 19(6). If the assignee fails to exercise rights within 1 year, the assignment lapses under Section 19(4).</p>
                <p><strong>Every day without a properly documented assignment is a day of legal vulnerability.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20Copyright%20Assignment.%20Please%20call%20me." target="_blank">WhatsApp us</a> to draft a compliant agreement today.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Copyright Assignment Done Right</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Copyright assignment in India is a powerful legal tool for transferring intellectual property ownership, governed by Sections 18, 19, and 19A of the Copyright Act, 1957. Whether you are an author selling publishing rights, a business acquiring software IP, or a producer securing creative rights, a properly drafted and executed assignment agreement is essential for legal certainty and commercial protection.</p>
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting's team of CA, CS, and IP professionals drafts compliant assignment agreements, handles Copyright Office registration, and provides ongoing advisory on royalty structuring and dispute resolution. With 15+ years of experience serving 10,000+ businesses across India, we ensure your copyright transfers are legally sound and commercially effective.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20Copyright%20Assignment.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Copyright%20Assignment%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20help%20with%20Copyright%20Assignment.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Copyright Assignment Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides expert copyright assignment services in major cities with CA, CS, and IP team support.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;">
                <p class="pa-block-title">Copyright Assignment by City</p>
                <p class="pa-block-sub">Expert agreement drafting and Copyright Office registration support</p>
                <div class="pa-city-grid">
                    <a href="/copyright-assignment/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/copyright-assignment/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/copyright-assignment/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/copyright-assignment/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <p class="pa-block-title">Related Copyright and IP Services</p>
                <p class="pa-block-sub">Comprehensive intellectual property protection services</p>
                <div class="pa-cross-grid">
                    <a href="/copyright-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/logo-copyright-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Logo Copyright</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/brand-copyright-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Brand Copyright</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/copyright-objection" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Copyright Objection</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/trademark-assignment" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Trademark Assignment</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/trademark-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually - aligned to Copyright Act amendments, Copyright Rules updates, and judicial developments on assignment disputes. Next review: March 2027.</p>
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


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION  -  Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '{{ env("GOOGLE_PLACES_API_KEY") }}',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '{{ env("PATRON_GOOGLE_PLACE_ID") }}',               // Patron Accounting's Google Place ID
        // Fallback static reviews (shown if API fails or key not set)
        fallbackReviews: [
            {
                author_name: "Subhendu Mishra",
                profile_photo_url: "",
                rating: 5,
                text: "I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Rajib Dutta",
                profile_photo_url: "",
                rating: 5,
                text: "I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Nishikant Gurav",
                profile_photo_url: "",
                rating: 5,
                text: "Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Nikhil Nimbhorkar",
                profile_photo_url: "",
                rating: 5,
                text: "Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.",
                relative_time_description: "4 months ago"
            },
            {
                author_name: "Sameer Mehta",
                profile_photo_url: "",
                rating: 5,
                text: "I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Preeti Singh Rathor",
                profile_photo_url: "",
                rating: 5,
                text: "From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Anita Gaur",
                profile_photo_url: "",
                rating: 5,
                text: "Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.",
                relative_time_description: "5 months ago"
            },
            {
                author_name: "Pankaj Arvikar",
                profile_photo_url: "",
                rating: 5,
                text: "I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Sunny Ashpal",
                profile_photo_url: "",
                rating: 5,
                text: "Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.",
                relative_time_description: "6 months ago",
                role: "Director - Demandify Media",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
            }
        ]
    };

    // ============================================
    // HELPER: Generate star SVGs
    // ============================================
    function starsHTML(rating) {
        let s = '';
        for (let i = 0; i < 5; i++) {
            s += i < rating
                ? '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>'
                : '<svg viewBox="0 0 24 24" style="opacity:0.2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
        }
        return s;
    }

    // ============================================
    // HELPER: Avatar color based on name
    // ============================================
    const avatarColors = ['', 'blue', 'teal', 'purple'];
    function avatarClass(index) {
        return avatarColors[index % avatarColors.length];
    }

    // ============================================
    // RENDER: Build card HTML for a review
    // ============================================
    function buildVideoCard(review) {
        return `
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="${review.photoUrl || ''}">
                        <source src="${review.videoUrl}" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="testi-star-badge">${starsHTML(review.rating)}</div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar">
                        ${review.photoUrl ? `<img src="${review.photoUrl}" alt="${review.author_name}">` : review.author_name.charAt(0)}
                    </div>
                    <div>
                        <div class="testi-name">${review.author_name}</div>
                        ${review.role ? `<div class="testi-role">${review.role}</div>` : ''}
                    </div>
                </div>
            </div>
        </div>`;
    }

    function buildQuoteCard(review, index) {
        const hasPhoto = review.profile_photo_url && review.profile_photo_url !== '';
        const initial = review.author_name ? review.author_name.charAt(0).toUpperCase() : '?';
        const colorClass = avatarClass(index);

        return `
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <p class="testi-quote-text">${review.text || ''}</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ${colorClass}">
                            ${hasPhoto ? `<img src="${review.profile_photo_url}" alt="${review.author_name}">` : initial}
                        </div>
                        <div>
                            <div class="testi-name">${review.author_name}</div>
                            ${review.role ? `<div class="testi-role">${review.role}</div>` : (review.relative_time_description ? `<div class="testi-role">${review.relative_time_description}</div>` : '')}
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars">${starsHTML(review.rating)}</div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>`;
    }

    // ============================================
    // RENDER: Populate slider with reviews
    // ============================================
     function renderReviews(reviews) {
const slider = document.getElementById('testimonialSlider');
const loading = document.getElementById('testiLoading');

let html = '';

reviews.forEach(function(review, i) {
    if (review.hasVideo && review.videoUrl) {
        html += buildVideoCard(review);
    } else {
        html += buildQuoteCard(review, i);
    }
});

// If slider already initialized destroy first
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}

slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';

// Re-initialize slick
initSlick(slider);


}

    function initSlick(slider) {
        if ($(slider).hasClass('slick-initialized')) return;
        $(slider).slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 900, settings: { slidesToShow: 2 } },
                { breakpoint: 600, settings: { slidesToShow: 1, autoplaySpeed: 3000 } }
            ]
        });
    }

    // ============================================
    // FETCH: Google Places API Reviews
    // ============================================
    function fetchGMBReviews() {
        // If API key not set, use fallback
        if (!CONFIG.googleApiKey || CONFIG.googleApiKey === '') {
            console.log('[Testimonials] No Google API key set  -  using fallback reviews.');
            renderReviews(CONFIG.fallbackReviews);
            return;
        }

        // Google Places API requires server-side proxy due to CORS
        // Option 1: Use Google Maps JS API (requires loading Maps library)
        // Option 2: Use a server-side proxy endpoint
        // Below is the Google Maps JS API approach:

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${CONFIG.googleApiKey}&libraries=places&callback=initGMBReviews`;
        script.async = true;
        script.defer = true;
        script.onerror = function() {
            console.log('[Testimonials] Failed to load Google Maps API  -  using fallback.');
            renderReviews(CONFIG.fallbackReviews);
        };
        document.head.appendChild(script);
    }

    // Global callback for Google Maps JS API
    window.initGMBReviews = function() {
        try {
            const service = new google.maps.places.PlacesService(document.createElement('div'));
            service.getDetails({
                placeId: CONFIG.placeId,
                fields: ['name', 'rating', 'reviews', 'user_ratings_total']
            }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews && place.reviews.length > 0) {
                    console.log(`[Testimonials] Fetched ${place.reviews.length} GMB reviews for ${place.name} (${place.rating}★, ${place.user_ratings_total} total)`);

                    // Merge: video testimonials first, then GMB reviews
                    const videoTestimonials = CONFIG.fallbackReviews.filter(r => r.hasVideo);
                    const gmbReviews = place.reviews.map(function(r) {
                        return {
                            author_name: r.author_name,
                            profile_photo_url: r.profile_photo_url,
                            rating: r.rating,
                            text: r.text,
                            relative_time_description: r.relative_time_description
                        };
                    });

                    renderReviews([...videoTestimonials, ...gmbReviews]);
                } else {
                    console.log('[Testimonials] Google Places returned no reviews  -  using fallback.');
                    renderReviews(CONFIG.fallbackReviews);
                }
            });
        } catch (e) {
            console.log('[Testimonials] Error:', e);
            renderReviews(CONFIG.fallbackReviews);
        }
    };

    // ============================================
    // INIT
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        // Static cards already rendered  -  init Slick immediately
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
        }
        fetchGMBReviews();
    });
})();

// Video play/pause toggle for testimonial cards
function toggleTestiVideo(area) {
    const video = area.querySelector('video');
    if (!video) return;
    if (video.paused) {
        // Pause all other videos first
        document.querySelectorAll('.testi-video-area video').forEach(function(v) { v.pause(); v.closest('.testi-video-area').classList.remove('playing'); });
        video.play();
        area.classList.add('playing');
    } else {
        video.pause();
        area.classList.remove('playing');
    }
}

</script>

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
