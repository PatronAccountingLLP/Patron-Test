
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Returns for E-Commerce Operators - GSTR-8, TCS & Filing</title>
    <meta name="description" content="File GSTR-8, GSTR-1, GSTR-3B for e-commerce operators. TCS at 0.5% under Section 52 CGST Act. Expert filing from Rs 3,999 per month per GSTIN.">
    <link rel="canonical" href="/gst-returns-for-e-commerce-operator">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Returns for E-Commerce Operators - GSTR-8, TCS & Filing">
    <meta property="og:description" content="File GSTR-8, GSTR-1, GSTR-3B for e-commerce operators. TCS at 0.5% under Section 52 CGST Act. Expert filing from Rs 3,999 per month per GSTIN.">
    <meta property="og:url" content="/gst-returns-for-e-commerce-operator">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Returns for E-Commerce Operators - GSTR-8, TCS & Filing">
    <meta name="twitter:description" content="File GSTR-8, GSTR-1, GSTR-3B for e-commerce operators. TCS at 0.5% under Section 52 CGST Act. Expert filing from Rs 3,999 per month per GSTIN.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "E-commerce GST Returns: GSTR-8 TCS",
          "description": "File GSTR-8, GSTR-1, GSTR-3B for e-commerce operators. TCS at 0.5% under Section 52 CGST Act. Expert filing from Rs 3,999 per month per GSTIN.",
          "url": "https://www.patronaccounting.com/gst-returns-for-e-commerce-operator",
          "serviceType": "E-commerce GST Returns: GSTR-8 TCS",
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
            "url": "https://www.patronaccounting.com/gst-returns-for-e-commerce-operator",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "100",
              "maxPrice": "5000",
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
              "name": "E-commerce GST Returns: GSTR-8 TCS",
              "item": "https://www.patronaccounting.com/gst-returns-for-e-commerce-operator"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the current TCS rate for e-commerce operators under GST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The TCS rate is 0.5% on net taxable supplies. For intra-state supplies: 0.25% CGST + 0.25% SGST. For inter-state: 0.5% IGST. This rate was reduced from 1% effective 10 July 2024 through CGST Notification No. 15/2024 and IGST Notification No. 01/2024. TCS is computed on net value (total taxable supplies minus returns)."
              }
            },
            {
              "@type": "Question",
              "name": "What is the due date for filing GSTR-8?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GSTR-8 must be filed by the 10th of the month following the tax period. For example, GSTR-8 for January 2026 is due on 10 February 2026. The TCS amount must be deposited via challan before the return can be filed on the GST portal. Late filing attracts Rs 200/day (max Rs 5,000) plus 18% interest."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Section 52 and Section 9(5)?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 52, the e-commerce operator collects TCS from supplier payments and deposits to government - the operator is not the supplier. Under Section 9(5), the operator is deemed the supplier and must pay GST directly for notified services: restaurant (including cloud kitchens), accommodation, and motor cab services. Two separate compliance obligations."
              }
            },
            {
              "@type": "Question",
              "name": "Is GST registration mandatory for e-commerce operators even with zero turnover?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 24 of the CGST Act, e-commerce operators must register for GST regardless of aggregate turnover. There is no threshold exemption. This applies to both domestic and foreign operators providing services in India. Registration is required in every state of operation."
              }
            },
            {
              "@type": "Question",
              "name": "E-commerce operator ko GST mein kya kya file karna hota hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "E-commerce operator ko har mahine GSTR-8 (TCS return), GSTR-1 (outward supplies), aur GSTR-3B (summary return) file karna padta hai. Saal mein ek baar GSTR-9 (annual return) bhi file karna hota hai. Agar operator Section 9(5) ke under notified services provide karta hai (jaise food delivery, cab service), toh usse directly GST bhi pay karna padta hai. Patron Accounting - +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "Can GSTR-8 be revised after filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. GSTR-8 cannot be revised once filed. Any errors must be corrected through amendments in the subsequent month's GSTR-8 filing (Table 4). Discrepancies found during reconciliation with suppliers' GSTR-2A are communicated to both parties for resolution. This makes pre-filing validation critical."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if an e-commerce operator does not collect TCS?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Failure to collect TCS attracts a penalty equal to the TCS amount not collected under Section 52. Additionally: late fee Rs 200/day for delayed GSTR-8 filing (max Rs 5,000), interest at 18% p.a. on unpaid TCS, and potential show cause notices under Section 73 or 74. Section 122(1B) applies specifically to TCS operators."
              }
            },
            {
              "@type": "Question",
              "name": "How does TCS collected benefit the supplier?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "TCS collected is credited to the supplier's electronic cash ledger on the GST portal after GSTR-8 is filed. The supplier can use this credit to offset their GST liability when filing GSTR-3B. It is not an additional tax but a pre-collection mechanism ensuring compliance. Late or incorrect GSTR-8 delays this credit for suppliers. Quick Answers Q: TCS rate? A: 0.5% (0.25% CGST + 0.25% SGST or 0.5% IGST) effective 10 July 2024. Q: GSTR-8 due date? A: 10th of the month following the tax period. Q: NIL GSTR-8 required? A: Only when TCS was collected or amendments are needed during the period. Q: Section 9(5) services? A: Restaurant including cloud kitchens, passenger transportation (cabs), and accommodation/housekeeping."
              }
            }
          ]
        }
      ]
    }
    </script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "Mayur from Bijasini Traders — E-commerce Seller Testimonial for Patron Accounting",
  "description": "Mayur, founder of Bijasini Traders (brands Sanchaya and Bijasini; Amazon seller and Shopify store at sanchaya.com), explains why he shortlisted 10+ CAs and chose Patron Accounting for GST filing, GST compliance, tax filing, accounting, and marketplace reconciliation.",
  "thumbnailUrl": [
    "/storage/testimonials/posters/mayur-bijasini-720x1280.jpg",
    "/storage/testimonials/posters/mayur-bijasini-720x1280.webp"
  ],
  "uploadDate": "2026-06-17T10:30:00+05:30",
  "duration": "PT1M22S",
  "contentUrl": "https://www.patronaccounting.com/storage/testimonials/videos/mayur-bijasini-patron-testimonial-720x1280.mp4",
  "embedUrl": "/storage/testimonials/videos/mayur-bijasini-patron-testimonial-720x1280.mp4",
  "inLanguage": "en-IN",
  "isFamilyFriendly": true,
  "transcript": "Hey, I'm Mayur from Bijasini Traders. So, we have two brands, Sanchaya and Bijasini. We sell on Amazon, and also we have a Shopify brand store named Sanchaya.com. So, we recently came across some issues in our GST filing. So, we shortlisted more than 10 CAs and accounting firms, and we selected Patron in that. I want to say that, as a business owner and as a solo founder, we have to focus 100% on business growth. So, all the GST compliances and all that tax filing and accounting, and I would say marketplace reconciliation, must be handled by a specialized team. So, we can trust that team 100%. So, as per my experience, in the two to three months, Patron has a knowledgeable team, has e-commerce expertise in all. So, I say go with the Patron team. They will handle all your compliances, all your tax filing, and all your reconciliation, all that things, so you can focus on your business growth. So my suggestion is go with Patron. Thank you.",
  "publisher": {
    "@type": "Organization",
    "name": "Patron Accounting LLP",
    "url": "https://www.patronaccounting.com/",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.patronaccounting.com/images/site-logo.svg"
    }
  },
  "review": {
    "@type": "Review",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": "5",
      "bestRating": "5"
    },
    "author": {
      "@type": "Person",
      "name": "Mayur",
      "jobTitle": "Founder",
      "worksFor": {
        "@type": "Organization",
        "name": "Bijasini Traders"
      }
    },
    "itemReviewed": {
      "@type": "Organization",
      "name": "Patron Accounting LLP"
    }
  }
}
</script>
@endsection

@section('content')
@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column  -  right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T)  -  Plan 3.1
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
           TOC NAVIGATION  -  Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
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
                        GST Returns for E-commerce Operators - GSTR-8 TCS Filing
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">11 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>TCS Rate:</span> 0.5% (0.25% CGST + 0.25% SGST or 0.5% IGST) effective 10 July 2024 (Notification No. 15/2024-Central Tax). Reduced from 1%.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-8 Due Date:</span> 10th of the month following the collection month. TCS must be deposited via challan before GSTR-8 can be filed on the portal.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Registration:</span> Compulsory GST registration for all e-commerce operators - no threshold exemption (Section 24, CGST Act). Every state of operation.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Late Fee:</span> Rs 200/day (Rs 100 CGST + Rs 100 SGST), max Rs 5,000 per return + 18% interest on delayed TCS deposits. Cannot be revised after filing.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ GSTR-8 returns filed. 200+ e-commerce clients. 99%+ on-time filing rate. 4.9 Google Rating.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=E-commerce%20GST%20Return%20Enquiry&body=Hello%2C%0A%0AI%20need%20GSTR-8%20filing%20for%20my%20e-commerce%20platform.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20E-commerce%20GST%20Return%20Filing.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'E-commerce GST Returns',
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
    'ctaText'    => 'Simplify your e-commerce GST compliance. GSTR-8 TCS, GSTR-1, GSTR-3B, and Section 9(5) filing from Rs 3,999/month per GSTIN.',
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
            <a href="#what-section" class="toc-btn">What Are These Returns</a>
            <a href="#who-section" class="toc-btn">Who Must File</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step GSTR-8 Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">DIY vs Professional</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">E-commerce GST Returns - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - E-commerce GST Returns Services at a Glance</strong></p>
                    <p>E-commerce operators must file GSTR-8 monthly (TCS return), GSTR-1 (outward supplies), GSTR-3B (summary), and GSTR-9 (annual). TCS rate is 0.5% on net taxable supplies since July 2024. GSTR-8 is due by the 10th of the next month. GST registration is mandatory with no threshold exemption. Section 9(5) operators must also pay GST directly for notified services.</p>
                </div>
                <p>E-commerce operators have an additional compliance layer - GSTR-8 captures TCS collected from suppliers selling through their platform. The data filed directly impacts suppliers' GSTR-2A and electronic cash ledgers, making accuracy non-negotiable. Errors cascade across the entire supply chain, causing ITC mismatches for thousands of sellers. Add Section 9(5) liability for notified services (restaurant, cab, accommodation), and the compliance burden becomes one of the most complex under GST.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Returns Required</td><td>GSTR-8 (TCS), GSTR-1, GSTR-3B, GSTR-9 (Annual)</td></tr>
<tr><td>TCS Rate</td><td>0.5% (0.25% CGST + 0.25% SGST or 0.5% IGST) w.e.f. 10 July 2024</td></tr>
<tr><td>GSTR-8 Due Date</td><td>10th of the month following the tax period</td></tr>
<tr><td>Registration</td><td>Compulsory under Section 24 - no threshold exemption</td></tr>
<tr><td>Governing Law</td><td>Section 52 (TCS), Section 9(5) (notified services), Rule 67 (GSTR-8)</td></tr>
<tr><td>Late Fee</td><td>Rs 200/day (max Rs 5,000) + 18% interest on delayed TCS</td></tr>
<tr><td>Starting Price</td><td>Rs 3,999/month per GSTIN (Patron Accounting)</td></tr>
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
                <h2 class="section-title">What Are GST Returns for E-commerce Operators?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST returns for e-commerce operators are periodic statements filed on the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a> reporting TCS collected, outward/inward supplies, tax liability, and ITC, as mandated under <strong>Sections 37, 39, 44, and 52 of the CGST Act, 2017</strong>.</p>
<p><strong>GSTR-8</strong> captures TCS collected from suppliers under Section 52. <strong>GSTR-1</strong> reports outward supply details. <strong>GSTR-3B</strong> is the monthly summary for computing and paying GST liability. <strong>GSTR-9</strong> is the annual return. Operators covered under <strong>Section 9(5)</strong> for notified services (restaurant delivery, cab aggregation, accommodation) must also report and pay GST as the deemed supplier.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for E-commerce GST Returns:</strong></p>
                    <p><strong>TCS (Tax Collected at Source):</strong> Tax collected at 0.5% of net taxable supplies (0.25% CGST + 0.25% SGST intra-state, 0.5% IGST inter-state), deposited to government and reported in GSTR-8.</p>
<p><strong>GSTR-8:</strong> Monthly return under Rule 67 capturing TCS details, supplier-wise supply values, and amendments. Due by 10th of following month.</p>
<p><strong>Section 52, CGST Act:</strong> Mandates TCS collection by e-commerce operators on net value of taxable supplies made through their platform by other suppliers.</p>
<p><strong>Section 9(5):</strong> E-commerce operator is deemed the supplier and must pay GST directly for notified services - restaurant (including cloud kitchens), accommodation, and passenger transportation.</p>
<p><strong>Net Value of Taxable Supplies:</strong> Total taxable supplies through the operator minus returns to suppliers during the month. TCS is computed on this net value.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- E-commerce GST Returns -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="8" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">E-com GST</text>
                            <!-- Shopping cart icon -->
                            <rect x="45" y="50" width="45" height="35" rx="5" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <circle cx="55" cy="88" r="4" fill="#F5A623" opacity="0.6"/>
                            <circle cx="80" cy="88" r="4" fill="#F5A623" opacity="0.6"/>
                            <text x="67" y="65" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">GSTR-8</text>
                            <text x="67" y="78" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">TCS 0.5%</text>
                            <!-- Supplier arrow -->
                            <rect x="105" y="50" width="50" height="35" rx="5" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/>
                            <text x="130" y="65" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Supplier</text>
                            <text x="130" y="78" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">GSTR-2A</text>
                            <!-- Labels -->
                            <rect x="35" y="100" width="55" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="62" y="110" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Section 52</text>
                            <rect x="100" y="100" width="60" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="130" y="110" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Sec 9(5)</text>
                            <!-- Check -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CGST Act, 2017</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">E-commerce GST Returns</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CGST Act, 2017</span>
                        <strong>Section 52 | GSTR-8 TCS</strong>
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
            <h2 class="section-title">Who Must File E-commerce GST Returns?</h2>
            <div class="content-text">
                
                <p><strong>Mandatory for:</strong></p>
<ul>
<li>All e-commerce operators who own, operate, or manage a digital platform for e-commerce (Section 2(45))</li>
<li>Operators who collect consideration on behalf of suppliers selling through their platform</li>
<li>Both domestic and foreign operators registered under GST in India</li>
<li>Operators liable under Section 9(5) for notified services (food delivery, cab aggregators, accommodation)</li>
</ul>
<p><strong>Key Registration Rules:</strong> GST registration is compulsory under Section 24 - no threshold exemption. Must register in every state of operation. Suppliers selling through platforms also must register.</p>
<p><strong>Exemptions from TCS (Section 52):</strong> Operators selling own goods/services through own platform (no TCS on self-supplies). Section 9(5) services where operator pays GST directly. Agents acting on behalf of suppliers.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 E-commerce GST Return Filing Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-8 Preparation and Filing</td><td>TCS computation at 0.5% on net taxable supplies, supplier-wise GSTIN matching, amendments handling, and monthly filing by the 10th deadline.</td></tr>
<tr><td>GSTR-1 and GSTR-3B Filing</td><td>Complete outward supply reporting and summary return filing including Section 9(5) notified service transactions (restaurant, cab, accommodation).</td></tr>
<tr><td>Reconciliation Services</td><td>Matching GSTR-8 data with suppliers' GSTR-1 and GSTR-2A to identify and resolve discrepancies before they trigger notices.</td></tr>
<tr><td>Section 9(5) Compliance</td><td>Identification and reporting of notified services where the operator is the deemed supplier liable to pay GST directly.</td></tr>
<tr><td>GSTR-9 Annual Return</td><td>Annual return preparation consolidating all monthly filings including TCS data for the financial year.</td></tr>
<tr><td>Notice Response and Advisory</td><td>Handling TCS mismatch notices, demand orders, and ongoing advisory on GST compliance changes affecting e-commerce operators.</td></tr>

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
            <h2 class="section-title">7-Step GSTR-8 Filing Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles GSTR-8 filing across multiple GSTINs with automated reconciliation and pre-filing validation for zero-mismatch submissions.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Collect TCS at 0.5%</h3><p class="step-description">Deduct TCS at 0.5% (0.25% CGST + 0.25% SGST for intra-state or 0.5% IGST for inter-state) on net taxable supplies made through the platform during the month. Net value = Total taxable supplies minus returns (Section 52(1)).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TCS computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Net value calculated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="22" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">0.25%</text><text x="55" y="31" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">+</text><rect x="62" y="22" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="77" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">0.25%</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">TCS Collected</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Deposit TCS to Government</h3><p class="step-description">Deposit the TCS amount by the 10th of the following month using GST challan. TCS must be deposited before GSTR-8 can be filed on the portal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TCS deposited</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Challan paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CHALLAN</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Deposited</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Login to GST Portal</h3><p class="step-description">Access www.gst.gov.in, navigate to Services > Returns > Returns Dashboard. Select the relevant financial year and month for GSTR-8 filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal accessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Month selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="19" r="2" fill="#FF5F56"/><circle cx="31" cy="19" r="2" fill="#FFBD2E"/><circle cx="37" cy="19" r="2" fill="#27C93F"/><rect x="25" y="30" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="55" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">gst.gov.in</text><rect x="30" y="50" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.6"/><text x="55" y="59" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-8</text></svg></div><span class="illustration-label">Logged In</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Prepare GSTR-8 Online</h3><p class="step-description">Click 'Prepare Online'. Enter supplier-wise details including GSTIN, taxable value, and TCS amounts in Table 3. Review auto-populated data in Table 4 for amendments to prior periods.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Data entered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Amendments reviewed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Prepared</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Verify and File with DSC/EVC</h3><p class="step-description">Review all entries, compute liabilities, and file using DSC or EVC. Generate ARN for tracking. GSTR-8 cannot be revised after filing - accuracy at this stage is critical.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ARN generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed on time</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">ARN</text><rect x="35" y="45" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="54" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">No Revision</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Supplier Credit Reflection</h3><p class="step-description">Once GSTR-8 is filed, TCS amounts are reflected in the suppliers' GSTR-2A and credited to their electronic cash ledger. Suppliers can use this credit to offset their GST liability.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Credits reflected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTR-2A updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="33" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-2A</text><rect x="35" y="45" width="50" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="56" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Cash Ledger</text></svg></div><span class="illustration-label">Credited</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Monthly Reconciliation</h3><p class="step-description">Match GSTR-8 filed data with suppliers' GSTR-1 returns. Resolve discrepancies within the communication window to prevent amounts being added to suppliers' output tax liability.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Mismatches resolved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">MATCHED</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">ZERO GAP</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents and Checklist for E-commerce GST Filing</h2>
            <div class="content-text">
                
                <ul>
<li><strong>GST Registration Certificate</strong> and GSTIN for each state of operation</li>
<li><strong>Transaction-level data:</strong> Supplier GSTIN, invoice details, taxable values, TCS amounts</li>
<li><strong>Prior month returns:</strong> GSTR-8, GSTR-1, GSTR-3B for all prior months</li>
<li><strong>Sales and commission reports</strong> from the e-commerce platform</li>
<li><strong>Returns/refunds processed</strong> during the month (for net value calculation)</li>
<li><strong>Section 9(5) breakup:</strong> Service-wise data for notified services (restaurant, cab, accommodation)</li>
<li><strong>Bank statements</strong> showing TCS deposits via GST challan</li>
<li><strong>DSC or EVC access</strong> for filing</li>
<li><strong>Amendment details</strong> for corrections to prior period GSTR-8 filings (Table 4)</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common E-commerce GST Filing Challenges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>High-Volume Supplier Reconciliation</td><td>Platforms process thousands of supplier transactions monthly. Manual reconciliation of TCS with each supplier's GSTR-1 is impractical</td><td>Automated reconciliation tools matching GSTR-8 with GSTR-2A, flagging mismatches before filing. Zero-mismatch target.</td></tr>
<tr><td>TCS Rate Transition (July 2024)</td><td>Rate changed from 1% to 0.5% on 10 July 2024, requiring split calculation within the same month</td><td>Period-wise TCS computation: transactions before 10 July at 1%, from 10 July at 0.5%, per Notification No. 15/2024.</td></tr>
<tr><td>Section 9(5) Classification</td><td>Determining which services fall under Section 9(5) and correctly reporting in GSTR-1/3B (not GSTR-8) creates confusion</td><td>Separate ledgers for Section 52 (TCS) and Section 9(5) (direct GST liability) transactions with clear classification rules.</td></tr>
<tr><td>GSTR-8 Non-Revisable</td><td>Unlike some returns, GSTR-8 cannot be revised after filing. Errors must be corrected through amendments in subsequent months</td><td>Rigorous pre-filing validation with automated checks. Every data point verified before submission to minimize amendment needs.</td></tr>

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
            <h2 class="section-title">E-commerce GST Return Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-8 Filing Only</td><td class="table-amount">Rs 1,999/month per GSTIN</td></tr>
<tr><td>GSTR-8 + GSTR-1 + GSTR-3B (Complete Monthly)</td><td class="table-amount">Rs 3,999/month per GSTIN</td></tr>
<tr><td>Section 9(5) Compliance Add-on</td><td class="table-amount">Rs 1,999/month</td></tr>
<tr><td>GSTR-9 Annual Return</td><td class="table-amount">Rs 4,999 per GSTIN</td></tr>
<tr><td>Reconciliation and Mismatch Resolution</td><td class="table-amount">Rs 2,999/month</td></tr>
<tr><td>Multi-GSTIN Discount (5+ GSTINs)</td><td class="table-amount">20% discount on package</td></tr>
<tr><td>Complete Annual Compliance (all returns + advisory)</td><td class="table-amount">Rs 39,999/year per GSTIN</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free E-commerce GST Returns consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GSTR-8%20filing%20for%20my%20e-commerce%20platform.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">E-commerce GST Filing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Data collection from platform</td><td>1-3 days post month-end</td></tr>
<tr><td>TCS computation and validation</td><td>1-2 working days</td></tr>
<tr><td>TCS deposit via challan</td><td>By 10th of next month</td></tr>
<tr><td><strong>GSTR-8 filing</strong></td><td><strong>By 10th of next month</strong></td></tr>
<tr><td>GSTR-1 filing</td><td>By 11th of next month</td></tr>
<tr><td>GSTR-3B filing and tax payment</td><td>By 20th of next month</td></tr>
<tr><td>Reconciliation with suppliers</td><td>Ongoing (monthly)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> The 10th deadline for GSTR-8 is strict. Late filing attracts Rs 200/day (max Rs 5,000) plus 18% interest on delayed TCS deposits. GSTR-8 cannot be revised - file right the first time. Late or incorrect GSTR-8 blocks suppliers' ITC claims and creates mismatch notices across the supply chain.</p>

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
            <h2 class="section-title">Benefits of Professional E-commerce GST Filing</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Accuracy at Scale</h3><p class="feature-text">Handle thousands of supplier transactions with automated tools ensuring zero TCS computation errors and clean GSTR-8 filings across all GSTINs.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Mismatch Prevention</h3><p class="feature-text">Pre-filing reconciliation with GSTR-2A prevents cascading errors that affect suppliers' ITC claims and trigger notices across the seller ecosystem.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Section 9(5) Clarity</h3><p class="feature-text">Expert classification of notified services (restaurant, cab, accommodation) ensures correct tax discharge without double-reporting between GSTR-8 and GSTR-3B.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Penalty Avoidance</h3><p class="feature-text">Timely filing by the 10th deadline prevents Rs 200/day late fees and 18% interest on delayed TCS deposits. 99%+ on-time filing rate.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">Compliance Advisory</h3><p class="feature-text">Stay ahead of frequent GST changes affecting e-commerce - rate revisions, portal updates, new CBIC circulars, and Section 9(5) amendments.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why E-commerce Operators Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ GSTR-8 Returns Filed</strong> across multiple platforms and categories.</p>
<p><strong>200+ E-commerce Clients</strong> from D2C startups to multi-state marketplace operators.</p>
<p><strong>99%+ On-Time Filing Rate</strong> across all GSTINs.</p>
<p><strong>4.9 Google Rating</strong> based on verified reviews.</p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional E-commerce GST Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Filing</th><th>Professional (Patron Accounting)</th></tr></thead>
                    <tbody>
                        <tr><td>TCS Computation</td><td>Manual calculation risk</td><td>Automated 0.5% with split-period handling</td></tr>
<tr><td>Supplier Reconciliation</td><td>Time-consuming, error-prone</td><td>Automated GSTR-2A matching across all suppliers</td></tr>
<tr><td>Section 9(5) Compliance</td><td>Confusion between TCS and direct liability</td><td>Clear segregation and correct reporting</td></tr>
<tr><td>Mismatch Risk</td><td>High - cascades to supplier returns</td><td>Near-zero with pre-filing validation</td></tr>
<tr><td>Filing Timeliness</td><td>Often delayed under pressure</td><td>99%+ on-time filing record</td></tr>
<tr><td>Cost</td><td>Free (significant internal time)</td><td>Rs 3,999/month per GSTIN</td></tr>
<tr><td>Multi-GSTIN Handling</td><td>Complex state-wise management</td><td>Centralized dashboard across all GSTINs</td></tr>

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
            <h2 class="section-title">Related E-commerce and GST Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/gst-registration">GST Registration</a></strong> - State-wise registration for e-commerce operators.</li>
<li><strong><a href="/gst-returns">GST Returns (General)</a></strong> - Regular GSTR-1 and GSTR-3B filing.</li>
<li><strong><a href="/accounting-services-for-e-commerce-industry">E-commerce Accounting</a></strong> - Complete accounting for e-commerce businesses.</li>
<li><strong><a href="/e-commerce-sector-payroll-processing-services">E-commerce Payroll</a></strong> - Payroll processing for e-commerce teams.</li>
<li><strong><a href="/gst-notice">GST Notice Handling</a></strong> - TCS mismatch notices and demand response.</li>
<li><strong><a href="/tds-return-filing-24q">TDS Return Filing</a></strong> - TDS compliance for vendor payments.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for E-commerce GST Returns</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> CGST Act, 2017; CGST Rules, 2017; IGST Act, 2017.</p>
<p><strong>Key Provisions:</strong></p>
<ul>
<li><strong>Section 52:</strong> TCS collection by e-commerce operators on net taxable supplies.</li>
<li><strong>Section 9(5):</strong> E-commerce operator as deemed supplier for notified services (restaurant, cab, accommodation).</li>
<li><strong>Section 24:</strong> Compulsory GST registration - no threshold exemption.</li>
<li><strong>Rule 67:</strong> Form GSTR-8 and filing procedure.</li>
<li><strong>Notification 15/2024-CT (10 July 2024):</strong> TCS rate reduced from 1% to 0.5%.</li>
<li><strong>Notification 17/2017-CT (Rate):</strong> Notified services under Section 9(5).</li>
</ul>
<p><strong>Penalties:</strong> Late fee Rs 200/day (max Rs 5,000). Interest 18% p.a. on delayed TCS. Penalty equal to uncollected TCS. Section 73/74 show cause notices. Section 122(1B) specific penalty.</p>
<p><strong>Portal:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> | <a href="https://gstcouncil.gov.in/sites/default/files/2024-02/faq-e-commerc.pdf" target="_blank" rel="noopener">GST Council E-commerce FAQ</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - E-commerce GST Returns</h2>
                    <p class="faq-expanded__lead">Answers about GSTR-8, TCS rates, Section 52 vs 9(5), registration, filing deadlines, penalties, and supplier credits.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'E-commerce GST Returns',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the current TCS rate for e-commerce operators under GST?</h3>
                        <div class="faq-expanded__a"><p>The TCS rate is 0.5% on net taxable supplies. For intra-state supplies: 0.25% CGST + 0.25% SGST. For inter-state: 0.5% IGST. This rate was reduced from 1% effective 10 July 2024 through CGST Notification No. 15/2024 and IGST Notification No. 01/2024. TCS is computed on net value (total taxable supplies minus returns).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for filing GSTR-8?</h3>
                        <div class="faq-expanded__a"><p>GSTR-8 must be filed by the 10th of the month following the tax period. For example, GSTR-8 for January 2026 is due on 10 February 2026. The TCS amount must be deposited via challan before the return can be filed on the GST portal. Late filing attracts Rs 200/day (max Rs 5,000) plus 18% interest.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between Section 52 and Section 9(5)?</h3>
                        <div class="faq-expanded__a"><p>Under Section 52, the e-commerce operator collects TCS from supplier payments and deposits to government - the operator is not the supplier. Under Section 9(5), the operator is deemed the supplier and must pay GST directly for notified services: restaurant (including cloud kitchens), accommodation, and motor cab services. Two separate compliance obligations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is GST registration mandatory for e-commerce operators even with zero turnover?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 24 of the CGST Act, e-commerce operators must register for GST regardless of aggregate turnover. There is no threshold exemption. This applies to both domestic and foreign operators providing services in India. Registration is required in every state of operation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">E-commerce operator ko GST mein kya kya file karna hota hai?</h3>
                        <div class="faq-expanded__a"><p>E-commerce operator ko har mahine GSTR-8 (TCS return), GSTR-1 (outward supplies), aur GSTR-3B (summary return) file karna padta hai. Saal mein ek baar GSTR-9 (annual return) bhi file karna hota hai. Agar operator Section 9(5) ke under notified services provide karta hai (jaise food delivery, cab service), toh usse directly GST bhi pay karna padta hai. Patron Accounting - +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can GSTR-8 be revised after filing?</h3>
                        <div class="faq-expanded__a"><p>No. GSTR-8 cannot be revised once filed. Any errors must be corrected through amendments in the subsequent month's GSTR-8 filing (Table 4). Discrepancies found during reconciliation with suppliers' GSTR-2A are communicated to both parties for resolution. This makes pre-filing validation critical.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What happens if an e-commerce operator does not collect TCS?</h3>
                        <div class="faq-expanded__a"><p>Failure to collect TCS attracts a penalty equal to the TCS amount not collected under Section 52. Additionally: late fee Rs 200/day for delayed GSTR-8 filing (max Rs 5,000), interest at 18% p.a. on unpaid TCS, and potential show cause notices under Section 73 or 74. Section 122(1B) applies specifically to TCS operators.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How does TCS collected benefit the supplier?</h3>
                        <div class="faq-expanded__a"><p>TCS collected is credited to the supplier's electronic cash ledger on the GST portal after GSTR-8 is filed. The supplier can use this credit to offset their GST liability when filing GSTR-3B. It is not an additional tax but a pre-collection mechanism ensuring compliance. Late or incorrect GSTR-8 delays this credit for suppliers.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: TCS rate?</strong> A: 0.5% (0.25% CGST + 0.25% SGST or 0.5% IGST) effective 10 July 2024.</p>
<p><strong>Q: GSTR-8 due date?</strong> A: 10th of the month following the tax period.</p>
<p><strong>Q: NIL GSTR-8 required?</strong> A: Only when TCS was collected or amendments are needed during the period.</p>
<p><strong>Q: Section 9(5) services?</strong> A: Restaurant including cloud kitchens, passenger transportation (cabs), and accommodation/housekeeping.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The 10th is Non-Negotiable - File GSTR-8 On Time</h2>
            <div class="content-text">
                
                <p>Miss the 10th and face Rs 200/day late fee plus 18% interest on delayed TCS deposits. GSTR-8 cannot be revised - errors carry forward as amendments. Late or incorrect filing blocks suppliers' ITC claims across your entire seller ecosystem.</p>
<p>With thousands of supplier transactions monthly, automated reconciliation and pre-filing validation are not optional - they are essential for zero-mismatch compliance.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20E-commerce%20GST%20filing.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Simplify Your E-commerce GST Compliance</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">E-commerce GST compliance is among the most complex in indirect tax. The dual obligation of TCS under Section 52 and direct GST under Section 9(5), combined with monthly GSTR-8, GSTR-1, and GSTR-3B filings, demands precision and deep understanding of evolving regulations.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">With the TCS rate reduction to 0.5% from July 2024 and ongoing portal changes, operators need a compliance partner who stays current. Professional assistance ensures accurate TCS computation, clean reconciliation, and timely filing across all GSTINs.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting: 10,000+ GSTR-8 returns filed. 200+ e-commerce clients. 99%+ on-time. Starting from Rs 3,999/month per GSTIN.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GSTR-8%20filing%20for%20my%20e-commerce%20platform.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20E-commerce%20GST%20Returns&body=Hello%2C%0A%0AI%20need%20GSTR-8%20and%20GST%20return%20filing%20for%20e-commerce.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">E-commerce GST Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert GSTR-8 TCS filing and complete GST return services for e-commerce operators, marketplace platforms, and aggregators.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/gst-returns-for-e-commerce-operator/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-returns-for-e-commerce-operator/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-returns-for-e-commerce-operator/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/gst-returns-for-e-commerce-operator/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete e-commerce and GST compliance</div><div class="pa-cross-grid"><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="/accounting-services-for-e-commerce-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">E-com Accounting</div><div class="pa-card-sub">India</div></div></a><a href="/e-commerce-sector-payroll-processing-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">E-com Payroll</div><div class="pa-card-sub">India</div></div></a><a href="/gst-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">India</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Returns</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Content aligned with CGST Act 2017, Notification 15/2024, and current GST portal procedures. Next review: June 2026.</p>
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
