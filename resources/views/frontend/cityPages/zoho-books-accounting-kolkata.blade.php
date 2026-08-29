@extends('layouts.service-app')
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
@section('meta')
    <title>Zoho Books Accounting in Kolkata – Setup &amp; Integration</title>
    <meta name="description" content="CA-managed Zoho Books accounting in Kolkata. Cloud bookkeeping, GST filing, WB Professional Tax, bank reconciliation. Salt Lake, Burrabazar. Call +91 945 945 6700.">
    <link rel="canonical" href="/zoho-books-accounting/kolkata">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Zoho Books Accounting in Kolkata – Setup &amp; Integration">
    <meta property="og:description" content="CA-managed Zoho Books in Kolkata. Cloud bookkeeping, GST, WB PT. Call +91 945 945 6700.">
    <meta property="og:url" content="/zoho-books-accounting/kolkata">
    <meta property="og:type" content="website"><meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Zoho Books Accounting in Kolkata – Setup &amp; Integration">
    <meta name="twitter:description" content="Zoho Books Kolkata. Cloud bookkeeping, GST, WB PT. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Zoho Books Accounting in Kolkata",
          "description": "CA-managed Zoho Books accounting in Kolkata. Cloud bookkeeping, GST filing, WB Professional Tax, bank reconciliation. Salt Lake, Burrabazar. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/zoho-books-accounting/kolkata",
          "serviceType": "Zoho Books Accounting in Kolkata",
          "areaServed": {
            "@type": "City",
            "name": "Kolkata"
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
            "url": "https://www.patronaccounting.com/zoho-books-accounting/kolkata",
            "price": "2500"
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
              "name": "Zoho Books Accounting",
              "item": "https://www.patronaccounting.com/zoho-books-accounting"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Zoho Books Kolkata",
              "item": "https://www.patronaccounting.com/zoho-books-accounting/kolkata"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which GST office handles Kolkata filings?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST Commissionerate Kolkata with four divisions: Central North South and Marble Palace. GSTIN determines division."
              }
            },
            {
              "@type": "Question",
              "name": "Can I get Zoho Books done online from Kolkata?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes 100% online. Dedicated CA manages Zoho Books, files GST, delivers reports via portal. No physical visits."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Starting Rs 2,500 per month for up to 200 transactions. Varies by volume GSTINs payroll and complexity."
              }
            },
            {
              "@type": "Question",
              "name": "How long does setup take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "3-5 working days standard. Tally migration with 3 plus years data may take 7-10 days."
              }
            },
            {
              "@type": "Question",
              "name": "Is Zoho Books WB PT compliant?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes integrates with Zoho Payroll. WB PT slabs Rs 110 to Rs 200 per month auto-calculated. Filed via GRIPS."
              }
            },
            {
              "@type": "Question",
              "name": "Can it handle multi-GSTIN?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes supports multiple GSTINs in single organisation. Separate GSTR-1 and 3B per GSTIN with consolidated books."
              }
            },
            {
              "@type": "Question",
              "name": "How does it compare to Tally?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Cloud-based with native GST filing, e-invoicing, bank auto-reconciliation. Tally is desktop-first with limited cloud."
              }
            },
            {
              "@type": "Question",
              "name": "Does Patron do Tally to Zoho migration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes complete migration. Opening balances party ledgers outstanding invoices inventory. Validated against audited financials."
              }
            }
          ]
        }
      ]
    }
</script>

@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column — right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) — Plan 3.1
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
           TOC NAVIGATION — Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot — Plan 3.2 */
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
                        Zoho Books Accounting in Kolkata: CA-Managed Cloud Bookkeeping for Your Business
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">08 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Platform::</span> Zoho Books (cloud-based, GST-compliant) | Managed by dedicated CA</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applicable To::</span> Startups, SMEs, traders, exporters, freelancers in Kolkata</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Compliance::</span> CGST Act 2017, WB PT Act 1979, Companies Act 2013</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting From::</span> Rs 2,500/month | Setup in 3-5 working days | 100% online</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Zoho%20Books%20accounting%20in%20Kolkata.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Zoho Books Accounting',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'zoho-books-accounting/kolkata', 'label' => 'Zoho Books Accounting in Kolkata', 'selected' => true, 'disabled' => false],
                            ['value' => 'gst-registration/kolkata', 'label' => 'GST Registration in Kolkata', 'selected' => false, 'disabled' => false],
                            ['value' => 'payroll-services/kolkata', 'label' => 'Payroll Services in Kolkata', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return/kolkata', 'label' => 'Income Tax Return in Kolkata', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-registration-in-india/kolkata', 'label' => 'Pvt Ltd Registration in Kolkata', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Migrated from Tally to Zoho Books seamlessly. Our 3 GSTINs across Burrabazar branches are managed perfectly. GST filed on time every month. WB PT automated. No more manual errors.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh G.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Wholesale Trader, Burrabazar</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">IT company in Salt Lake. Patron set up Zoho Books with project tracking and recurring invoices. Monthly P&L by 5th, GST before 20th. Real-time dashboards for our investors.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#2A4A7A;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arijit D.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">IT Company, Salt Lake V</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Jute exporter at Netaji Subhas Dock. Multi-currency invoicing and LUT tracking automated in Zoho Books. Forex rates applied in real-time. Complete export accounting managed by Patron.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SB</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Subir B.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Exporter, Kolkata Port</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Manufacturing unit in Taratala. Zoho Books with inventory tracking and BOM. E-invoicing activated above Rs 5 Cr threshold. Bank reconciliation across 4 accounts automated. Very professional.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PC</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Pranab C.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Manufacturer, Taratala</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">New Town startup. Zoho Books from day one. Patron handles monthly bookkeeping, GST, and sends P&L to our investors. WB Professional Tax configured correctly in payroll. Simple and reliable.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">KM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Kaushik M.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Startup, New Town</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Kolkata businesses trust Patron for Zoho Books accounting, GST filing, and WB PT compliance.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
<a href="#what-section" class="toc-btn">What Is Zoho Books</a>
<a href="#who-section" class="toc-btn">Who Needs It</a>
<a href="#services-section" class="toc-btn">Services</a>
<a href="#procedure-section" class="toc-btn">Process</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Challenges</a>
<a href="#fees-section" class="toc-btn">Fees</a>
<a href="#timeline-section" class="toc-btn">Timeline</a>
<a href="#benefits-section" class="toc-btn">Why Patron</a>
<a href="#comparison-section" class="toc-btn">Zoho vs Tally</a>
<a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Zoho Books Accounting in Kolkata: Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Zoho Books Accounting Services at a Glance</strong></p>
                    <p>Zoho Books accounting in Kolkata covers end-to-end cloud bookkeeping, GST return filing, bank reconciliation, and financial reporting managed by a dedicated CA. Businesses across Salt Lake Sector V, New Town, and Dalhousie use this service to replace manual Tally-based workflows with automated, GST-compliant accounting. The GST Commissionerate in Kolkata operates through Central, North, South, and Marble Palace divisions.</p>
                </div>
                <p>Kolkata's business landscape - from Salt Lake Sector V and New Town IT corridors to Burrabazar wholesale markets and Dalhousie Square - demands accounting that handles multi-GSTIN filings, West Bengal Professional Tax, and real-time reporting. Zoho Books managed by Patron's CA replaces error-prone manual bookkeeping. Learn more about <a href="/zoho-books-accounting">Zoho Books Accounting across India</a>.</p>
                <p>The GST Commissionerate in Kolkata requires precise compliance across GSTR-1, GSTR-3B, and annual returns. A CA-managed Zoho Books setup ensures every transaction is tagged, categorised, and reconciled. Same CA handles <a href="/gst-registration/kolkata">GST registration</a>, <a href="/income-tax-return/kolkata">ITR</a>, and <a href="/payroll-services/kolkata">payroll</a>.</p>
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
                <h2 class="section-title">What Is Zoho Books Accounting?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Zoho Books accounting is a CA-managed cloud bookkeeping service using Zoho Books software to automate invoicing, expense tracking, GST compliance, bank reconciliation, and financial reporting.</p>
<p>Operates under CGST Act 2017 for GST, Companies Act 2013 for statutory reporting, and IT Act 1961 for TDS. Supports e-invoicing under Rule 48(4), multi-currency for exporters, and automated GSTR filing.</p>
<p>For Kolkata businesses - IT startups in New Town needing MIS, Burrabazar traders managing multiple GSTINs, jute exporters at Netaji Subhas Dock tracking forex - Zoho Books replaces fragmented Excel and desktop Tally. WB Professional Tax deduction automated through Zoho Payroll integration.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Zoho Books Accounting:</strong></p>
                    <ul>
<li><strong>Zoho Books:</strong> Cloud-based GST-compliant accounting platform</li>
<li><strong>GSTR-1/3B:</strong> Monthly outward supply and summary returns filed via GST portal</li>
<li><strong>WB PT:</strong> West Bengal Professional Tax (Rs 110-200/month per employee)</li>
<li><strong>GST Commissionerate Kolkata:</strong> Four divisions - Central, North, South, Marble Palace</li>
<li><strong>E-Invoicing:</strong> IRN generation under Rule 48(4) for turnover above Rs 5 Cr</li>
<li><strong>Bank Auto-Feed:</strong> Automatic bank statement import and transaction matching</li>
<li><strong>Tally Migration:</strong> Complete data transfer from Tally ERP 9/Prime to Zoho Books</li>
<li><strong>GRIPS:</strong> WB Commercial Taxes e-payment portal for PT filing</li>
</ul>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Cloud/Zoho Books illustration -->
                            <rect x="30" y="35" width="140" height="95" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Cloud shape -->
                            <ellipse cx="100" cy="58" rx="35" ry="18" fill="#fff" stroke="#14365F" stroke-width="1.2"/>
                            <circle cx="78" cy="55" r="14" fill="#fff" stroke="#14365F" stroke-width="1.2"/>
                            <circle cx="115" cy="52" r="12" fill="#fff" stroke="#14365F" stroke-width="1.2"/>
                            <!-- Zoho text -->
                            <text x="100" y="62" font-size="10" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ZOHO</text>
                            <!-- Dashboard lines -->
                            <rect x="55" y="80" width="90" height="25" rx="4" fill="#fff" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="60" y="85" width="20" height="15" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.5"/>
                            <rect x="85" y="88" width="20" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.5"/>
                            <rect x="110" y="86" width="20" height="14" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.5"/>
                            <!-- Tag -->
                            <rect x="30" y="112" width="55" height="14" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="57" y="122" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CLOUD BOOKS</text>
                            <!-- Label -->
                            <text x="100" y="150" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Zoho Books Accounting</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Cloud-Based</span>
                        <strong>Zoho Books</strong>
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
            <h2 class="section-title">Who Needs Zoho Books Accounting in Kolkata?</h2>
            <div class="content-text">
                
                <p><strong>IT Companies (Salt Lake Sector V / New Town):</strong> Turnover above Rs 20L needs GST. Monthly GSTR-3B filing. Recurring invoicing, project billing, TDS compliance. Real-time MIS for investor reporting.</p>
<p><strong>Wholesale Traders (Burrabazar):</strong> High-volume daily transactions. Multi-GSTIN across branches. Multi-godown inventory. ITC reconciliation critical.</p>
<p><strong>Export Firms (Netaji Subhas Dock):</strong> Multi-currency invoicing, forex rate application, LUT tracking under Section 16 IGST Act. Shipping documentation.</p>
<p><strong>Manufacturers (Taratala / Howrah):</strong> Raw material costing, production tracking, BOM, inventory valuation. E-invoicing for turnover above Rs 5 Cr.</p>
<p><strong>Startups (New Town Co-working):</strong> DPIIT registered. Monthly P&L for investors. Zoho Books provides real-time dashboards and automated compliance.</p>
<p><strong>Freelancers and Consultants:</strong> WB Professional Tax from Rs 10,000 salary. Zoho Payroll integration auto-deducts. TDS tracking on receipts.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Zoho Books Accounting Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Zoho Books Setup + Configuration</td><td>Account creation, Chart of Accounts, GSTIN mapping, bank feed, e-invoicing, HSN/SAC codes. 3-5 days</td></tr>
<tr><td>Monthly Bookkeeping</td><td>Sales invoices, purchase bills, expenses, journal entries recorded. Bank reconciliation via auto-import</td></tr>
<tr><td>GST Return Filing</td><td>GSTR-1 (11th), GSTR-3B (20th), annual GSTR-9. ITC verification against GSTR-2B. Multi-GSTIN supported</td></tr>
<tr><td>Tally to Zoho Migration</td><td>Opening balances, party ledgers, outstanding invoices, inventory imported. Validated against audited financials</td></tr>
<tr><td>WB Professional Tax</td><td>Zoho Payroll integration with WB PT slabs (Rs 110-200/month). Annual return via GRIPS portal</td></tr>
<tr><td>E-Invoicing</td><td>Native IRN generation for turnover above Rs 5 Cr. Rule 48(4) CGST Rules compliance</td></tr>
<tr><td>Financial Reporting</td><td>Monthly P&L, Balance Sheet, Cash Flow, Receivables Ageing via Zoho client portal</td></tr>
<tr><td>Audit Support</td><td>Schedule III financial statements for RoC Kolkata companies. Statutory audit-ready books</td></tr>

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
            <h2 class="section-title">How Zoho Books Accounting Works in Kolkata</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From initial assessment to setup, migration, monthly processing, GST filing, and reporting - here's how Patron manages your Kolkata books.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Initial Assessment and Requirement Mapping</h3><p class="step-description">CA reviews current setup (Tally/Excel/manual). Maps Kolkata business structure. Identifies GST Commissionerate division (Central/North/South/Marble Palace). Confirms WB PT obligations. Custom Zoho Books plan in 24 hours.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Kolkata-specific</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> WB PT confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ASSESS</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">KOLKATA</text><text x="60" y="56" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">WB PT + GST</text></svg></div><span class="illustration-label">Assessment Done</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Zoho Books Account Setup and Configuration</h3><p class="step-description">Account created. Chart of Accounts configured. GSTIN mapped to correct Commissionerate. E-invoicing enabled if above Rs 5 Cr. Bank accounts connected for auto-feed. HSN/SAC codes mapped.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTIN configured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bank feed active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ZOHO</text><text x="60" y="42" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">BOOKS</text><circle cx="85" cy="60" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M80 60l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Setup Complete</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Data Migration from Existing System</h3><p class="step-description">Tally ERP 9/Prime data exported: opening balances, party ledgers, outstanding invoices, inventory. Imported to Zoho Books. RoC Kolkata filing history cross-referenced. Validated against last audited Balance Sheet.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Zero data loss</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Audit-validated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TALLY</text><text x="60" y="40" font-size="10" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">→</text><text x="60" y="58" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ZOHO</text></svg></div><span class="illustration-label">Migration Done</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Monthly Transaction Processing</h3><p class="step-description">Sales invoices, purchase bills, expenses, journal entries recorded. Bank statements from Kolkata accounts reconciled via auto-import. ITC eligibility verified against GSTR-2B. Mismatches resolved before GSTR-3B deadline.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Monthly processing</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITC verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="26" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">INVOICES</text><text x="60" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">EXPENSES</text><text x="60" y="50" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">BANK RECON</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITC MATCHED</text></svg></div><span class="illustration-label">Books Updated</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">GST Filing and WB PT Compliance</h3><p class="step-description">GSTR-1, GSTR-3B, GSTR-9 prepared and filed. For turnover above Rs 5 Cr: GSTR-9C reconciliation by CA. WB Professional Tax returns filed via GRIPS portal. Auto-reminders before 11th and 20th.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GST filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> WB PT done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST FILED</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">WB PT</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">COMPLIANT</text></svg></div><span class="illustration-label">Compliance Clear</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Financial Reporting and Audit Support</h3><p class="step-description">Monthly P&L, Balance Sheet, Cash Flow shared via Zoho portal. Schedule III statements for RoC Kolkata companies. Quarterly review calls. Configuration adapts to WB state amendments and GST changes.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Reports delivered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Audit-ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">P&L</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">BALANCE</text><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">AUDIT READY</text></svg></div><span class="illustration-label">Fully Managed</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Zoho Books Setup</h2>
            <div class="content-text">
                
                <ul>
<li><strong>GSTIN Details:</strong> All GSTINs with Commissionerate division information</li>
<li><strong>Bank Statements:</strong> From all Kolkata business accounts for auto-feed setup</li>
<li><strong>Previous Accounting Data:</strong> Tally backup or Excel sheets for migration</li>
<li><strong>Last Audited Financials:</strong> Balance Sheet and P&L for opening balance validation</li>
<li><strong>HSN/SAC Codes:</strong> Product and service catalogue for code mapping</li>
<li><strong>Employee Details:</strong> For WB Professional Tax slab configuration in Zoho Payroll</li>
</ul>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Kolkata-Specific Tip:</strong> Burrabazar traders with 5+ branches should provide all GSTIN details and godown addresses upfront. Multi-GSTIN configuration in Zoho Books requires correct mapping to each GST Commissionerate division for separate return filing.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Tally Dependency and Migration Resistance</td><td>Decades of Tally usage in Burrabazar and Dalhousie</td><td>Patron handles complete migration without data loss. Ledger mapping, balance import, staff training</td></tr>
<tr><td>Multi-GSTIN Compliance</td><td>Traders across 4 GST Commissionerate divisions</td><td>Zoho Books configured for multi-GSTIN with separate GSTR-1/3B per GSTIN and consolidated books</td></tr>
<tr><td>WB Professional Tax Errors</td><td>Incorrect slab (Rs 110-200) leads to penalties</td><td>Zoho Payroll configured with verified WB PT slabs. Filed via GRIPS portal</td></tr>
<tr><td>Bank Reconciliation (Multiple Accounts)</td><td>Salt Lake IT companies with 4-5 separate current accounts</td><td>Zoho Books auto-imports and matches. Correct bank feed activation for each Kolkata branch</td></tr>
<tr><td>E-Invoicing Non-Compliance</td><td>Turnover above Rs 5 Cr without IRN = Rs 25,000/invoice penalty</td><td>Zoho Books native e-invoicing activated with correct GSTIN linkage</td></tr>

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
            <h2 class="section-title">Zoho Books Accounting Fees in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Zoho Books Setup + Configuration</td><td>Rs 5,000-15,000 (one-time) | 3-5 working days</td></tr>
<tr><td>Monthly Bookkeeping (up to 200 transactions)</td><td>Rs 2,500-5,000/month | Ongoing</td></tr>
<tr><td>Monthly Bookkeeping (200-500 transactions)</td><td>Rs 5,000-8,000/month | Ongoing</td></tr>
<tr><td>GST Return Filing (per GSTIN/month)</td><td>Rs 1,500-3,000 | By 11th/20th</td></tr>
<tr><td>Tally to Zoho Migration</td><td>Rs 5,000-20,000 (one-time) | 5-10 working days</td></tr>
<tr><td>Payroll with WB PT</td><td>Rs 1,500-4,000/month</td></tr>
<tr><td>Annual Financial Statements</td><td>Rs 10,000-25,000 | Before AGM</td></tr>
<tr><td>Zoho Books Software (paid to Zoho)</td><td>Rs 749/month (billed annually) | Subscription</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Zoho Books Accounting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Zoho%20Books%20accounting%20in%20Kolkata.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Setup Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Initial Assessment</td><td>Day 1 (CA reviews system, identifies Kolkata compliance needs)</td></tr>
<tr><td>Account Creation + Configuration</td><td>Day 1-2 (GSTIN, Chart of Accounts, bank feed, e-invoicing)</td></tr>
<tr><td>Data Migration (Tally/Excel)</td><td>Day 2-5 (opening balances validated against audited financials)</td></tr>
<tr><td>Testing + Staff Walkthrough</td><td>Day 5-6 (invoice test, GST verification, bank reconciliation trial)</td></tr>
<tr><td>Go-Live</td><td>Day 7 onwards (CA takes over monthly bookkeeping and GST filing)</td></tr>
<tr><td>First Monthly Report</td><td>End of Month 1 (P&L, Balance Sheet, GST filing confirmation)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Kolkata Processing Note:</strong> For businesses migrating from Tally with more than 3 years of historical data, migration may extend to 7-10 working days. 100% online - no physical visits required. Patron handles everything remotely via Zoho Books cloud platform.</p>

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
            <h2 class="section-title">Why Choose Patron for Zoho Books in Kolkata?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Dedicated CA, Not Software Reseller</h3><p>Every Kolkata client gets a dedicated CA who manages Zoho Books end-to-end. Familiar with Salt Lake IT, Burrabazar wholesale, and Dalhousie BFSI compliance.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Kolkata Jurisdictional Expertise</h3><p>Experienced with GST Commissionerate Kolkata (all 4 divisions), RoC Kolkata, and WB PT Act 1979. Local compliance, national platform.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-city businesses get coordinated Zoho Books accounting across all locations.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Reports by 5th, GST Before Deadline</h3><p>Monthly P&L and Balance Sheet by 5th. GST filed before 11th/20th. Zero late filings. Zero penalties.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Kolkata Businesses</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;color:var(--text-primary);margin-bottom:8px;">"Migrated from Tally to Zoho Books through Patron. Our Burrabazar wholesale operations with 3 GSTINs are now managed seamlessly. GST filed on time every month. WB PT automated. Excellent service."</p><p style="font-weight:700;color:var(--blue);margin:0;">- Wholesale Trader, Burrabazar</p></blockquote>
<p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Kolkata through a digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Zoho Books vs Tally vs QuickBooks for Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Zoho Books (CA-Managed)</th><th>Tally Prime</th><th>QuickBooks Online</th></tr></thead>
                    <tbody>
                        <tr><td>Deployment</td><td>Cloud - any device</td><td>Desktop-first, limited cloud</td><td>Cloud-based</td></tr>
<tr><td>GST Compliance</td><td>Native GSTR filing, e-invoicing, ITC reconciliation</td><td>GST module, manual portal export</td><td>Basic GST, limited India features</td></tr>
<tr><td>WB PT</td><td>Automated via Zoho Payroll with correct slabs</td><td>Manual calculation, no native payroll</td><td>Not supported for Indian states</td></tr>
<tr><td>Bank Reconciliation</td><td>Auto-import from Indian banks, real-time</td><td>Manual bank statement import</td><td>Auto-import, fewer Indian banks</td></tr>
<tr><td>Multi-Branch Inventory</td><td>Zoho Inventory integration, multi-warehouse</td><td>Basic stock, limited multi-location</td><td>Add-on required</td></tr>
<tr><td>E-Invoicing</td><td>Native IRN under Rule 48(4)</td><td>Supported in TallyPrime 4.0+</td><td>Not supported for India</td></tr>
<tr><td>CA-Managed</td><td>Yes - dedicated CA through Patron</td><td>No - self-managed</td><td>No - self-managed</td></tr>

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
                
                <ul>
<li><a href="/zoho-books-accounting">Zoho Books Accounting in India</a> - National Zoho Books services</li>
<li><a href="/gst-registration/kolkata">GST Registration in Kolkata</a> - Tax compliance</li>
<li><a href="/payroll-services/kolkata">Payroll Services in Kolkata</a> - Salary + WB PT</li>
<li><a href="/income-tax-return/kolkata">Income Tax Return in Kolkata</a> - ITR filing</li>
<li><a href="/private-limited-company-registration/kolkata">Pvt Ltd Registration in Kolkata</a> - Company formation</li>
<li><a href="/accounting-services">Accounting Services</a> - General bookkeeping</li>
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
                
                <ul>
<li>CGST Act 2017 (GST compliance, e-invoicing Rule 48(4))</li>
<li>WB Professional Tax Act, 1979 (employer PT deduction Rs 110-200/month)</li>
<li>Companies Act 2013 (statutory reporting, Schedule III)</li>
<li>Income Tax Act 1961 (TDS, advance tax tracking)</li>
<li>GST Commissionerate, Kolkata (Central/North/South/Marble Palace)</li>
<li>RoC Kolkata (company filing compliance)</li>
<li>GRIPS Portal (WB Commercial Taxes e-payment)</li>
</ul>
<p><strong>Key Deadlines:</strong> GSTR-1 by 11th | GSTR-3B by 20th | WB PT annual return | E-invoicing mandatory above Rs 5 Cr (Rs 25,000/invoice penalty)</p>
<p><strong>Authority:</strong> GST Commissionerate Kolkata | <a href="https://www.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a> | WB Commercial Taxes | RoC Kolkata</p>

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
                    <h2 class="faq-expanded__title">FAQs - Zoho Books Accounting in Kolkata</h2>
                    <p class="faq-expanded__lead">Common questions about Zoho Books setup, fees, WB PT, GST filing, Tally migration, and multi-GSTIN management for Kolkata businesses.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Kolkata', 'enquiryService' => 'Zoho Books Accounting in Kolkata'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST office handles Kolkata filings?</h3>
                        <div class="faq-expanded__a"><p>GST Commissionerate Kolkata with four divisions: Central, North, South, and Marble Palace. Your GSTIN determines which division processes returns. Patron's CA identifies your division during Zoho Books setup.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get Zoho Books accounting done online from Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Yes. 100% online via Zoho Books cloud platform. Dedicated CA manages account, bookkeeping, GST returns, and reports via Zoho client portal. No physical visits needed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the Zoho Books accounting fee in Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Starting Rs 2,500/month for basic bookkeeping (up to 200 transactions). Varies by volume, GSTINs, payroll, and complexity. Setup one-time Rs 5,000-15,000. Zoho subscription Rs 749/month paid separately.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does Zoho Books setup take?</h3>
                        <div class="faq-expanded__a"><p>3-5 working days standard. Tally migration with 3+ years data may take 7-10 days. Includes account creation, GSTIN mapping, bank feed, e-invoicing, and staff walkthrough.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is Zoho Books compliant with WB Professional Tax?</h3>
                        <div class="faq-expanded__a"><p>Yes. Integrates with Zoho Payroll. WB PT slabs Rs 110-200/month auto-calculated per salary. CA verifies slab accuracy. Annual return filed via GRIPS portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can Zoho Books handle multi-GSTIN filing?</h3>
                        <div class="faq-expanded__a"><p>Yes. Multiple GSTINs in single organisation. Separate GSTR-1 and 3B per GSTIN with consolidated books. Configured during onboarding for Burrabazar traders and multi-branch businesses.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How does Zoho Books compare to Tally?</h3>
                        <div class="faq-expanded__a"><p>Cloud-based with native GST filing, e-invoicing, bank auto-reconciliation, multi-currency. Tally is desktop-first with limited cloud. Zoho Books better for remote access, real-time MIS, and automated compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does Patron do Tally to Zoho migration?</h3>
                        <div class="faq-expanded__a"><p>Yes. Complete migration: opening balances, party ledgers, outstanding invoices, inventory. Validated against last audited financials. Zero data loss. 5-10 working days depending on data volume.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Kolkata mein Zoho Books kaise setup hoga?</strong> Patron ka CA 3-5 din mein setup karta hai. GSTIN, bank feed, Chart of Accounts sab configure. Tally se migration bhi hota hai.</p>
<p><strong>WB Professional Tax Zoho Books mein hota hai?</strong> Haan. Zoho Payroll se automatic deduction. Rs 110 se Rs 200/month slab. GRIPS portal par file hota hai.</p>
<p><strong>Monthly kitna fee lagta hai?</strong> Rs 2,500 se start. Transaction volume, GSTINs, payroll par depend karta hai. Zoho subscription alag se Rs 749/month.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Wait - Start Zoho Books Today</h2>
            <div class="content-text">
                
                <p>GSTR-3B is due by the 20th every month. Late filing attracts Rs 50/day penalty. WB Professional Tax non-registration triggers penalties under WB PT Act 1979. E-invoicing above Rs 5 Cr without IRN = Rs 25,000/invoice. A CA-managed Zoho Books setup ensures all deadlines are tracked and filings completed on time.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Zoho Books Accounting in Kolkata</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Zoho Books accounting in Kolkata provides cloud-based, GST-compliant bookkeeping managed by a dedicated CA. Covers daily transactions, bank reconciliation, GST filing, WB Professional Tax, and audit-ready financial statements for Salt Lake IT, Burrabazar traders, and Kolkata exporters.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting LLP is a multi-office CA firm with 15+ years, 10,000+ businesses, and 4.9 Google rating. Digital-first Zoho Books accounting for Kolkata combining jurisdictional expertise with cloud efficiency.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Zoho%20Books%20accounting%20in%20Kolkata.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Zoho%20Books%20Accounting&body=Hello%20Patron%20Team%2C%0AI%20need%20Zoho%20Books%20accounting%20in%20Kolkata.%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Zoho Books Accounting Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">CA-managed Zoho Books accounting in 8 cities. Select your city.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/zoho-books-accounting/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/zoho-books-accounting/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/zoho-books-accounting/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
<a href="/zoho-books-accounting/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="/zoho-books-accounting/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
<a href="/zoho-books-accounting/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
<a href="/zoho-books-accounting/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services in Kolkata</div><div class="pa-block-sub">End-to-end accounting and compliance</div><div class="pa-cross-grid"><a href="/gst-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/payroll-services/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/income-tax-return/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/private-limited-company-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns Filing</div><div class="pa-card-sub">India</div></div></a>
<a href="/tally-accounting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tally Accounting</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content covers Zoho Books accounting in Kolkata including cloud bookkeeping, GST Commissionerate divisions, WB PT Act 1979, Tally migration, e-invoicing, and multi-GSTIN management. Reviewed semi-annually. Freshness Tier 2.</p>
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
    // CONFIGURATION — Update these values
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
            console.log('[Testimonials] No Google API key set — using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API — using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews — using fallback.');
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
        // Static cards already rendered — init Slick immediately
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
