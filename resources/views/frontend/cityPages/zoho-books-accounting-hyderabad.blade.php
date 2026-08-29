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
    <title>Zoho Books Accounting in Hyderabad – Setup &amp; Integration</title>
    <meta name="description" content="CA-managed Zoho Books accounting in Hyderabad. GST filing, bank reconciliation, e-invoicing. Serving HITEC City, Gachibowli, Secunderabad. Call +91 945 945 6700.">
    <link rel="canonical" href="/zoho-books-accounting/hyderabad">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Zoho Books Accounting in Hyderabad – Setup &amp; Integration">
    <meta property="og:description" content="CA-managed Zoho Books accounting in Hyderabad. GST filing, bank reconciliation, e-invoicing. Serving HITEC City, Gachibowli, Secunderabad. Call +91 945 945 6700.">
    <meta property="og:url" content="/zoho-books-accounting/hyderabad">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Zoho Books Accounting in Hyderabad – Setup &amp; Integration">
    <meta name="twitter:description" content="CA-managed Zoho Books accounting in Hyderabad. GST filing, bank reconciliation, e-invoicing. Serving HITEC City, Gachibowli, Secunderabad. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Zoho Books Accounting in Hyderabad",
          "description": "CA-managed Zoho Books accounting in Hyderabad. GST filing, bank reconciliation, e-invoicing. Serving HITEC City, Gachibowli, Secunderabad. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/zoho-books-accounting/hyderabad",
          "serviceType": "Zoho Books Accounting in Hyderabad",
          "areaServed": {
            "@type": "City",
            "name": "Hyderabad"
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
            "url": "https://www.patronaccounting.com/zoho-books-accounting/hyderabad",
            "price": "4999"
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
              "name": "Zoho Books Accounting in Hyderabad",
              "item": "https://www.patronaccounting.com/zoho-books-accounting/hyderabad"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is Zoho Books?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Zoho Books is a GSTN-certified cloud accounting software handling invoicing, expense tracking, bank reconciliation, inventory, GST compliance, and financial reporting. Accessible from browser and mobile. Patron CA manages Zoho Books end-to-end for Hyderabad businesses."
              }
            },
            {
              "@type": "Question",
              "name": "Is Zoho Books free for small businesses?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Zoho Books offers a free plan for businesses with annual revenue under Rs 50 lakh including invoicing, expense tracking, bank reconciliation, and basic GST. Standard plan starts at Rs 899 per month for larger businesses."
              }
            },
            {
              "@type": "Question",
              "name": "Can CA manage Zoho Books remotely?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Zoho Books has a built-in accountant portal for real-time CA access. Patron CA records transactions, reconciles bank statements, and files GST returns remotely. No physical visits needed for routine Hyderabad accounting."
              }
            },
            {
              "@type": "Question",
              "name": "How does Zoho Books handle GST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Zoho Books is GSTN-certified with direct return filing. It applies correct tax rates based on place of supply, manages HSN SAC codes, generates e-invoices and e-way bills, reconciles ITC against GSTR-2A/2B, and files GSTR-1/3B/9 via built-in GSTN integration."
              }
            },
            {
              "@type": "Question",
              "name": "Is Zoho Books better than Tally for Hyderabad businesses?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For cloud access, CA collaboration, and direct GST filing, Zoho Books is superior. For complex manufacturing inventory with BOM and cost centres, Tally Prime still has advantages. HITEC City SaaS, D2C brands, freelancers, and startups benefit more from Zoho Books."
              }
            },
            {
              "@type": "Question",
              "name": "Can Zoho Books handle multi-currency for exports?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Zoho Books supports multi-currency invoicing with automatic exchange rate application. HITEC City SaaS companies billing in USD, EUR, and GBP create foreign currency invoices. Unrealised exchange gains/losses are tracked automatically."
              }
            },
            {
              "@type": "Question",
              "name": "How long does Tally-to-Zoho migration take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Migration typically takes 5-10 working days depending on data volume and complexity. Patron exports data from Tally, maps it to Zoho Books chart of accounts, imports with validation, and reconciles to ensure zero data loss."
              }
            },
            {
              "@type": "Question",
              "name": "What reports does Zoho Books generate?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Zoho Books generates Profit and Loss Statement, Balance Sheet, Cash Flow Statement, Trial Balance, General Ledger, Accounts Receivable/Payable Ageing, GST Reports, TDS Reports, Inventory Reports, Project Profitability, and custom dashboards."
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
                        Zoho Books Accounting in Hyderabad: CA-Managed Cloud Bookkeeping and GST
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Platform::</span> Zoho Books (GSTN-certified cloud accounting software)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Includes::</span> Setup, chart of accounts, bank reconciliation, GST filing, e-invoicing, ITR-ready books</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Pricing::</span> Zoho Books free plan (under Rs 50L revenue) | Standard Rs 899/month | Patron CA from Rs 4,999/month</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Best For::</span> SaaS startups, D2C brands, freelancers, traders, pharma, professional services in Hyderabad</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Zoho%20Books%20accounting%20services%20in%20Hyderabad.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                            ['value' => 'zoho-books-accounting/hyderabad', 'label' => 'Zoho Books Accounting in Hyderabad', 'selected' => true, 'disabled' => false],
                            ['value' => 'accounting-services/hyderabad', 'label' => 'Accounting Services in Hyderabad', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration/hyderabad', 'label' => 'GST Registration in Hyderabad', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-returns', 'label' => 'GST Return Filing', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return/hyderabad', 'label' => 'Income Tax Return in Hyderabad', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-registration-in-india/hyderabad', 'label' => 'Private Limited Company Registration in Hyderabad', 'selected' => false, 'disabled' => false],
                            ['value' => 'startup-registration/hyderabad', 'label' => 'Startup Registration in Hyderabad', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-registration/hyderabad', 'label' => 'Trademark Registration in Hyderabad', 'selected' => false, 'disabled' => false],
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Switching from Tally to Zoho Books with Patron managing the books was seamless. Our GST filing is now automated and we get P&amp;L by the 10th of every month. Highly recommended for SaaS companies.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh K.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">SaaS Founder, HITEC City</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our pharma company needed batch tracking with GST compliance. Patron set up Zoho Books perfectly for our Genome Valley operations. Monthly financials are always on time.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#2A4A7A;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Suresh P.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Pharma Company</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Migrated from Tally to Zoho Books with zero data loss. The Patron CA handles everything from bank reconciliation to GSTR filing. Best decision for our trading business in Secunderabad.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AM</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Anil M.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trader, Secunderabad</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a freelance consultant, Zoho Books free plan is perfect. Patron CA manages my books and files GST returns. I focus on clients while they handle all accounting. Great value.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">ND</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Neha D.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">IT Consultant, Banjara Hills</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron set up multi-currency invoicing in Zoho Books for our D2C brand. Marketplace TCS reconciliation and GST filing are now handled automatically. Excellent service quality.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VR</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram R.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">D2C Brand Founder, Madhapur</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
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
                    <p>Hyderabad businesses trust Patron for Zoho Books accounting, GST filing, and ITR-ready financials.</p>
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
            <h2 class="section-title">Zoho Books Accounting in Hyderabad: Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Zoho Books Accounting Services at a Glance</strong></p>
                    <p>Zoho Books accounting in Hyderabad combines India's most popular GST-compliant cloud accounting software with CA-managed bookkeeping. Zoho Books is GSTN-certified, enables direct GSTR-1 and GSTR-3B filing, generates e-invoices and e-way bills, handles multi-currency transactions for export businesses, and provides real-time financial dashboards. Patron's CA team manages your Zoho Books - from initial setup to daily transaction recording, bank reconciliation, GST return filing, and ITR-ready financial statement preparation.</p>
                </div>
                <p>Hyderabad's business landscape demands cloud-first accounting. HITEC City and Gachibowli host thousands of IT and SaaS companies billing in multiple currencies across countries - Zoho Books handles multi-currency invoicing with automatic exchange rate application. Genome Valley's pharma companies need batch-wise inventory tracking alongside GST-compliant invoicing. D2C brands in Madhapur sell on Amazon, Flipkart, and Meesho - Zoho Books integrates with marketplace channels for consolidated revenue tracking. Freelancers and consultants in Banjara Hills and Jubilee Hills use Zoho Books' free plan for invoicing and expense tracking. Traditional traders in Secunderabad and Begum Bazaar are migrating from desktop Tally to cloud-based Zoho Books for anywhere-access and real-time CA collaboration. Learn more about <a href="/zoho-books-accounting">Zoho Books Accounting across India</a>.</p>
                <p>Patron Accounting's CA team manages Zoho Books for Hyderabad businesses end-to-end. The CA sets up your Zoho Books instance with the correct Telangana GSTIN (state code 36), configures GST rates, creates the chart of accounts matching your industry, connects bank feeds for automatic transaction import, records daily transactions, reconciles bank statements, files GSTR-1 and GSTR-3B directly from Zoho Books, generates e-invoices for B2B transactions above Rs 5 crore, and prepares ITR-ready financial statements (P&amp;L, Balance Sheet, Cash Flow) at year-end. After GST registration, you may also need <a href="/gst-returns">GST Return Filing</a> services.</p>
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
                    
                    <p>Zoho Books is a GSTN-certified cloud-based accounting software that enables businesses to manage invoicing, expense tracking, bank reconciliation, inventory, GST compliance, and financial reporting from a single online platform accessible from any device.</p>
<p>Zoho Books automates core accounting workflows: invoices are generated with correct GST rates based on place of supply (CGST+SGST for intra-state, IGST for inter-state), bank transactions are fetched automatically and categorised using AI, expenses are captured with receipt uploads, and GST returns (GSTR-1, GSTR-3B, GSTR-9) are compiled and filed directly from the software without manual data download/upload to the GST portal. E-invoicing (IRN generation) is supported for B2B transactions. The CA access portal allows your accountant to collaborate on your books in real-time.</p>
<p>For Hyderabad businesses, Zoho Books replaces the disconnected workflow of Tally (desktop) + manual GST portal filing + Excel-based MIS with a single cloud platform. HITEC City SaaS companies get multi-currency invoicing for international clients with automatic exchange rate conversion. Secunderabad traders transitioning from desktop Tally get cloud access from mobile, laptop, and tablet - with their CA seeing the same data in real-time. Genome Valley pharma companies get inventory tracking integrated with GST-compliant purchase and sales records. Patron's CA manages the entire Zoho Books ecosystem - the business owner focuses on operations while the CA ensures books are accurate, GST-compliant, and ITR-ready.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Zoho Books Accounting:</strong></p>
                    <ul>
<li><strong>GSTN-Certified:</strong> Software officially certified by the Goods and Services Tax Network for direct GST return filing</li>
<li><strong>GSTR-1:</strong> Monthly/quarterly return for outward supplies (sales) filed under GST</li>
<li><strong>GSTR-3B:</strong> Monthly summary return with self-assessed tax payment</li>
<li><strong>ITC Reconciliation:</strong> Matching Input Tax Credit claimed in books with GSTR-2A/2B data from the GST portal</li>
<li><strong>E-Invoicing:</strong> Electronic invoicing via IRN generation through NIC portal, mandatory for B2B above Rs 5 crore</li>
<li><strong>Bank Reconciliation:</strong> Matching bank statement transactions with recorded entries for accuracy</li>
<li><strong>Multi-Currency:</strong> Recording transactions in multiple currencies with auto exchange rate conversion</li>
<li><strong>Chart of Accounts:</strong> Complete listing of every account categorised by asset, liability, equity, revenue, and expense</li>
</ul>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Cloud/Accounting illustration -->
                            <rect x="30" y="40" width="140" height="90" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Screen -->
                            <rect x="45" y="52" width="110" height="55" rx="4" fill="#fff" stroke="#14365F" stroke-width="1"/>
                            <!-- Chart bars -->
                            <rect x="55" y="85" width="12" height="18" rx="2" fill="#E8712C" opacity="0.7"/>
                            <rect x="72" y="75" width="12" height="28" rx="2" fill="#14365F" opacity="0.5"/>
                            <rect x="89" y="80" width="12" height="23" rx="2" fill="#E8712C" opacity="0.7"/>
                            <rect x="106" y="68" width="12" height="35" rx="2" fill="#14365F" opacity="0.5"/>
                            <rect x="123" y="72" width="12" height="31" rx="2" fill="#E8712C" opacity="0.7"/>
                            <!-- Cloud icon -->
                            <ellipse cx="100" cy="30" rx="30" ry="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M90 30l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- GST badge -->
                            <rect x="140" y="25" width="30" height="16" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="155" y="36" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST</text>
                            <!-- Label -->
                            <text x="100" y="155" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Zoho Books Accounting</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>GSTN-Certified</span>
                        <strong>Cloud Accounting Platform</strong>
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
            <h2 class="section-title">Who Needs Zoho Books Accounting in Hyderabad?</h2>
            <div class="content-text">
                
                <p><strong>SaaS and IT Startups in HITEC City and Gachibowli:</strong> Software companies billing international clients in USD, EUR, and GBP need multi-currency invoicing with automatic exchange rate application. Zoho Books handles foreign currency invoices, tracks unrealised exchange gains/losses, and integrates with Zoho CRM for quote-to-invoice automation. Patron files GST LUT for zero-rated export services.</p>
<p><strong>Pharma and Biotech Companies in Genome Valley:</strong> Drug manufacturers and biotech firms need batch-wise inventory tracking, purchase order management, and GST-compliant invoicing with correct HSN codes for pharmaceutical products. Zoho Books handles batch tracking with expiry dates alongside GST compliance.</p>
<p><strong>D2C and E-Commerce Brands in Madhapur:</strong> Consumer brands selling on Amazon, Flipkart, and Meesho need consolidated revenue tracking across marketplace channels, TCS reconciliation (e-commerce operator TCS under GST), and B2C invoicing. Zoho Books centralises all channel sales into one accounting system.</p>
<p><strong>Freelancers and Consultants in Banjara Hills:</strong> IT consultants, designers, content creators, and management consultants. Zoho Books' free plan (under Rs 50 lakh revenue) provides invoicing, expense tracking, and basic GST compliance at zero software cost. Patron's CA manages the books at an affordable monthly fee.</p>
<p><strong>Traders in Secunderabad and Begum Bazaar:</strong> Textile, electronics, and FMCG traders migrating from desktop Tally to cloud accounting. Zoho Books provides mobile access, real-time CA collaboration, and direct GST filing - eliminating the need for desktop software with manual data exchange to the accountant.</p>
<p><strong>T-Hub Startups and Early-Stage Ventures:</strong> Startups incubated at T-Hub, WE-Hub, and IIIT Hyderabad need investor-ready books from day one. Zoho Books provides the chart of accounts, P&amp;L, and Balance Sheet that angel investors and VCs require during due diligence. Patron's CA maintains books from incorporation. Explore <a href="/startup-registration">Startup Registration</a> and <a href="/private-limited-company-registration/hyderabad">Private Limited Company Registration in Hyderabad</a> for new ventures.</p>

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
                        <tr><td>Zoho Books Setup and Configuration</td><td>Company profile, Telangana GSTIN (state code 36), chart of accounts customised for your Hyderabad business type, GST rate configuration, bank feed connection, opening balances, and user/role setup</td></tr>
<tr><td>Daily Transaction Recording</td><td>Sales invoices, purchase bills, expense entries, journal entries, and receipt/payment recording. For HITEC City businesses with high transaction volume, Patron maintains books on a daily or weekly cycle</td></tr>
<tr><td>Bank Reconciliation</td><td>Bank feeds from SBI, HDFC, ICICI, Kotak, Indian Bank connected to Zoho Books. Transactions auto-imported and matched. CA reconciles weekly/monthly to ensure zero backlog</td></tr>
<tr><td>GST Return Filing from Zoho Books</td><td>GSTR-1 (outward supplies), GSTR-3B (summary return), and GSTR-9 (annual return) compiled directly from Zoho Books transaction data and filed via built-in GST portal integration. ITC reconciliation against GSTR-2A/2B. See <a href="/gst-returns">GST Returns</a> for details</td></tr>
<tr><td>E-Invoicing and E-Way Bills</td><td>For businesses above Rs 5 crore turnover, Zoho Books generates e-invoices (IRN) via NIC integration. E-way bills created for goods movement above Rs 50,000</td></tr>
<tr><td>Multi-Currency Accounting</td><td>For HITEC City SaaS and Genome Valley export businesses, Zoho Books handles invoicing in USD, EUR, GBP with automatic exchange rate conversion and unrealised gain/loss tracking</td></tr>
<tr><td>TDS Tracking and Compliance</td><td>TDS applicable on professional fees, rent, and contractor payments tracked in Zoho Books. TDS returns (24Q/26Q) prepared from Zoho data and filed by Patron's CA</td></tr>
<tr><td>Financial Statements and ITR-Ready Books</td><td>Monthly P&amp;L, Balance Sheet, Cash Flow Statement, and Trial Balance generated from Zoho Books. Year-end books are ITR-ready - Patron files <a href="/income-tax-return/hyderabad">Income Tax Return in Hyderabad</a> directly from Zoho financial data</td></tr>

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
            <h2 class="section-title">Zoho Books Setup and Ongoing Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From Zoho Books plan selection to ongoing CA-managed bookkeeping, GST filing, and ITR-ready financials - here's how Patron sets up and manages your Hyderabad accounting.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Select Zoho Books Plan and Create Account</h3>
        <p class="step-description">Patron's CA recommends the optimal Zoho Books plan based on your Hyderabad business size: free plan for businesses under Rs 50 lakh revenue, Standard (Rs 899/month) for growing businesses, or Professional (Rs 1,499/month) for multi-GSTIN and e-invoicing needs. The Zoho Books account is created with your Telangana GSTIN (state code 36).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Free plan for under Rs 50L</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Telangana GSTIN configured</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <circle cx="60" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                    <path d="M55 35l3 3 7-7" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <line x1="30" y1="55" x2="90" y2="55" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                    <rect x="35" y="75" width="50" height="12" rx="6" fill="#E8712C" opacity="0.15"/>
                    <text x="60" y="83" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SELECT PLAN</text>
                </svg>
            </div>
            <span class="illustration-label">Plan Selected</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Configure Chart of Accounts and GST Settings</h3>
        <p class="step-description">The CA customises the chart of accounts for your industry: IT services (revenue categories by client/project), pharma (inventory accounts by drug category), trading (purchase/sales by product line). GST rates are configured per HSN/SAC code. E-invoicing is enabled for businesses above Rs 5 crore threshold.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Industry-specific setup</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GST rates configured</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/>
                    <line x1="30" y1="35" x2="75" y2="35" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                    <line x1="30" y1="48" x2="80" y2="48" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                    <line x1="30" y1="61" x2="70" y2="61" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                    <circle cx="95" cy="68" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <path d="M89 68l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="illustration-label">Accounts Set</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Connect Bank Feeds and Import Opening Balances</h3>
        <p class="step-description">Patron connects your Hyderabad bank accounts (SBI, HDFC, ICICI, Kotak, Canara Bank) to Zoho Books for automatic transaction feeds. Opening balances from the previous financial year are imported - either from Tally backup, Excel sheets, or the previous accountant's records.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Auto bank feeds</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Opening balances imported</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="10" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="65" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <path d="M55 40L65 40" stroke="#E8712C" stroke-width="3" stroke-linecap="round" marker-end="url(#arrow)"/>
                    <line x1="20" y1="30" x2="45" y2="30" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                    <line x1="20" y1="40" x2="40" y2="40" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/>
                    <line x1="20" y1="50" x2="42" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/>
                    <line x1="75" y1="30" x2="100" y2="30" stroke="#25D366" stroke-width="2" stroke-linecap="round"/>
                    <line x1="75" y1="40" x2="95" y2="40" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/>
                    <line x1="75" y1="50" x2="97" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/>
                    <text x="32" y="75" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">BANK</text>
                    <text x="87" y="75" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">ZOHO</text>
                </svg>
            </div>
            <span class="illustration-label">Bank Connected</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Begin Daily Accounting and Monthly Reconciliation</h3>
        <p class="step-description">Patron's CA begins recording transactions: sales invoices with correct GST, purchase bills with ITC eligibility verified, expenses with receipt attachments, and journal entries for non-routine transactions. Bank reconciliation is performed weekly or monthly. Monthly closing ensures books are accurate by the 10th.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Daily recording</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Monthly closing by 10th</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="20" y="10" width="80" height="16" rx="6" fill="#14365F"/>
                    <text x="60" y="22" font-size="8" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">MONTHLY</text>
                    <line x1="35" y1="38" x2="55" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                    <line x1="35" y1="48" x2="65" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                    <line x1="35" y1="58" x2="50" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                    <circle cx="80" cy="48" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <path d="M75 48l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="illustration-label">Books Closed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">File GST Returns Directly from Zoho Books</h3>
        <p class="step-description">On the 11th of each month, Patron files GSTR-1 (outward supplies) directly from Zoho Books using the built-in GSTN integration. GSTR-3B (summary return with tax payment) is filed by the 20th. ITC is reconciled against GSTR-2A/2B. GSTR-9 (annual return) is compiled from Zoho Books' annual data. All filing happens from within Zoho Books.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Direct GSTN filing</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITC reconciled monthly</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="55" height="65" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <text x="42" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GSTR-1</text>
                    <text x="42" y="45" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GSTR-3B</text>
                    <text x="42" y="62" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GSTR-9</text>
                    <path d="M70 42L85 42" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/>
                    <circle cx="95" cy="42" r="16" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                    <text x="95" y="39" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST</text>
                    <text x="95" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PORTAL</text>
                </svg>
            </div>
            <span class="illustration-label">Returns Filed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Prepare Year-End Financials and ITR</h3>
        <p class="step-description">At financial year-end, Patron's CA finalises the books in Zoho Books: depreciation is computed, prepaid/accrued expenses are adjusted, closing stock is valued, and all provisions are recorded. The P&amp;L, Balance Sheet, and Cash Flow Statement are generated. These ITR-ready financials are used to file the Income Tax Return. Zero year-end rush because books are maintained monthly.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR-ready by April</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Zero year-end scramble</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="35" y1="25" x2="85" y2="25" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/>
                    <line x1="35" y1="38" x2="75" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/>
                    <line x1="35" y1="50" x2="80" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/>
                    <circle cx="85" cy="72" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <text x="85" y="69" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR</text>
                    <text x="85" y="78" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">READY</text>
                </svg>
            </div>
            <span class="illustration-label">Financials Done</span>
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
            <h2 class="section-title">Documents and Access Required</h2>
            <div class="content-text">
                
                <ul>
<li><strong>GSTIN Certificate:</strong> Telangana GSTIN (state code 36) for Zoho Books GST configuration. Need <a href="/gst-registration/hyderabad">GST Registration in Hyderabad</a>? Patron handles it end-to-end.</li>
<li><strong>Bank Account Details:</strong> Bank name, account number, IFSC for bank feed connection. Internet banking login for feed authorisation.</li>
<li><strong>Previous Year's Books:</strong> Tally backup / Excel books / previous CA's trial balance for opening balance import.</li>
<li><strong>PAN Card:</strong> Business PAN for TDS tracking and ITR filing.</li>
<li><strong>HSN/SAC Codes:</strong> Product/service codes for correct GST rate application on invoices.</li>
<li><strong>Zoho Books Login:</strong> Admin access shared with Patron CA via the built-in accountant portal (read-write access).</li>
</ul>
<div class="highlight-box" style="margin-top:16px;">
<p><strong>Hyderabad-Specific Tip:</strong> HITEC City SaaS companies with international clients should provide client-wise currency details and GST LUT (Letter of Undertaking) for zero-rated export invoicing. Patron configures multi-currency settings and GST LUT in Zoho Books for compliant export billing.</p>
</div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Hyderabad</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Tally-to-Zoho Migration for Traditional Businesses</td><td>Secunderabad and Begum Bazaar traders have used desktop Tally for years, making migration complex</td><td>Patron manages the complete migration with data export from Tally, ledger mapping, opening balance verification, and zero data loss</td></tr>
<tr><td>Multi-Currency Invoicing Errors</td><td>HITEC City SaaS companies misapply exchange rates or fail to record unrealised gains/losses</td><td>Patron ensures multi-currency is set up per RBI/FEMA guidelines with automatic exchange rate application</td></tr>
<tr><td>ITC Mismatch Between Books and GSTR-2A</td><td>Hyderabad businesses frequently face ITC mismatches because vendors file late or with errors</td><td>Patron reconciles ITC monthly in Zoho Books and follows up with vendors to resolve mismatches</td></tr>
<tr><td>Multi-GSTIN for Multiple States</td><td>Companies with operations in Telangana, AP, Karnataka, or Maharashtra need separate GSTINs</td><td>Zoho Books Professional supports 3 GSTINs. Patron manages multi-state GST compliance from one instance</td></tr>
<tr><td>Year-End Books Not ITR-Ready</td><td>Many businesses maintain Zoho Books for invoicing but don't close monthly, creating year-end backlog</td><td>Patron's monthly closing discipline ensures books are ITR-ready by April with zero last-minute scramble</td></tr>

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
            <h2 class="section-title">Zoho Books Accounting Fees in Hyderabad</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Zoho Books Free Plan</td><td>FREE (under Rs 50L revenue, 1 user, basic features)</td></tr>
<tr><td>Zoho Books Standard Plan</td><td>Rs 899/month (3 users, 5K invoices, 1 GSTIN, full GST/TDS)</td></tr>
<tr><td>Zoho Books Professional Plan</td><td>Rs 1,499/month (5 users, 10K invoices, 3 GSTINs, e-invoicing)</td></tr>
<tr><td>Patron CA - Starter</td><td>Rs 4,999/month (bookkeeping + bank recon + GSTR filing, under 100 txns/month)</td></tr>
<tr><td>Patron CA - Growth</td><td>Rs 7,999-12,999/month (full accounting + GST + TDS + financials, 100-500 txns)</td></tr>
<tr><td>Patron CA - Enterprise</td><td>Rs 14,999-24,999/month (multi-GSTIN + inventory + multi-currency + audit-ready, 500+ txns)</td></tr>
<tr><td>Tally-to-Zoho Migration (One-time)</td><td>Rs 9,999-19,999 (data migration + setup + training)</td></tr>
<tr><td>Annual ITR Filing (from Zoho Books financials)</td><td>Rs 2,999-9,999 (based on ITR type)</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 2,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Zoho Books Accounting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Zoho%20Books%20accounting%20services%20in%20Hyderabad.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Onboarding Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Zoho Books Setup</td><td>3-5 days (account, GSTIN, chart of accounts, GST rates configured)</td></tr>
<tr><td>Bank Feed Connection</td><td>1-2 days (bank accounts linked, auto-import started)</td></tr>
<tr><td>Data Migration (if from Tally)</td><td>5-10 days (opening balances, customer/vendor masters imported)</td></tr>
<tr><td>First Month Accounting</td><td>Ongoing (transactions recorded, bank reconciled, GST filed)</td></tr>
<tr><td>Monthly Cycle</td><td>Recurring (books closed by 10th, GSTR-1 by 11th, GSTR-3B by 20th)</td></tr>
<tr><td>Year-End Financials</td><td>March-April (P&amp;L, Balance Sheet, Cash Flow ready for ITR filing)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Hyderabad Processing Note (Group B):</strong> The entire Zoho Books accounting process is managed remotely by Patron's CA team. The CA accesses your Zoho Books via the accountant portal. Bank feeds are automatic. GST filing is direct. Monthly reports are shared digitally. No physical visits needed for routine accounting.</p>

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
            <h2 class="section-title">Why Choose Patron for Zoho Books Accounting in Hyderabad?</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <h3>CA + Zoho Books = Complete Solution</h3>
        <p>Zoho Books is software - it needs a qualified CA to operate it correctly. Patron provides the CA who maintains your books, files GST, and prepares ITR. Software without CA = data entry without compliance.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3>Hyderabad Industry Expertise</h3>
        <p>Your file is handled by a CA/expert familiar with HITEC City SaaS (multi-currency, GST LUT), Genome Valley pharma (batch inventory, HSN codes), Secunderabad trading, and T-Hub startup accounting.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
        <h3>4-Office Authority</h3>
        <p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-city businesses with operations in Hyderabad and other states get consistent accounting services in Hyderabad from one Zoho Books instance.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <h3>Monthly Closing Discipline</h3>
        <p>Books are closed by the 10th of each month. GST returns filed by due dates. Year-end financials ready by April. Zero backlog. Zero last-minute scramble.</p>
    </article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Hyderabad Businesses</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;">
<p style="font-style:italic;color:var(--text-primary);margin-bottom:8px;">"Switching from Tally to Zoho Books with Patron managing the books was seamless. Our GST filing is now automated and we get P&amp;L by the 10th of every month."</p>
<p style="font-weight:700;color:var(--blue);margin:0;">- SaaS Founder, HITEC City</p>
</blockquote>
<p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Hyderabad through a digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Zoho Books vs Tally - Hyderabad Business Guide</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Zoho Books</th><th>Tally Prime</th></tr></thead>
                    <tbody>
                        <tr><td>Deployment</td><td>Cloud (browser + mobile app)</td><td>Desktop (local installation)</td></tr>
<tr><td>Access</td><td>Anywhere, any device, real-time</td><td>Only on installed computer</td></tr>
<tr><td>CA Collaboration</td><td>Built-in accountant portal, real-time</td><td>Data needs to be shared via backup file</td></tr>
<tr><td>GST Filing</td><td>Direct GSTN integration from software</td><td>Manual data export + upload to portal</td></tr>
<tr><td>E-Invoicing</td><td>Built-in NIC integration</td><td>Available via add-on</td></tr>
<tr><td>Multi-Currency</td><td>Native support with auto exchange rates</td><td>Limited multi-currency</td></tr>
<tr><td>Pricing</td><td>Free (under Rs 50L) / Rs 899/month</td><td>Rs 18,000/year (Silver) / Rs 54,000/year (Gold)</td></tr>
<tr><td>Best For Hyderabad</td><td>HITEC City SaaS, D2C, freelancers, startups</td><td>Large trading firms, manufacturing with complex inventory</td></tr>

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
<li><a href="/zoho-books-accounting">Zoho Books Accounting in India</a> - National-level Zoho Books accounting services</li>
<li><a href="/gst-registration">GST Registration</a> - Get your Telangana GSTIN for Zoho Books GST configuration</li>
<li><a href="/gst-returns">GST Returns</a> - Ongoing GSTR-1, GSTR-3B, and GSTR-9 filing services</li>
<li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing from Zoho Books financial data</li>
<li><a href="/startup-registration">Startup Registration</a> - DPIIT recognition and compliance for T-Hub ventures</li>
<li><a href="/tds-return">TDS Returns</a> - Quarterly TDS return filing from Zoho Books data</li>
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
<li>GST Act 2017 / Telangana GST Act 2017 (TGST)</li>
<li>Zoho Books: GSTN-certified software for direct return filing (<a href="https://www.zoho.com/in/books" target="_blank" rel="noopener">zoho.com/in/books</a>)</li>
<li>E-Invoicing: Mandatory for B2B transactions above Rs 5 crore turnover</li>
<li>E-Way Bills: Mandatory for goods movement above Rs 50,000</li>
<li>TDS: Sections 194C/194J/194H/194I for applicable payments</li>
<li>Accounting Standards: AS/Ind AS for financial statement preparation</li>
<li>Companies Act 2013: Books of accounts to be maintained per Section 128</li>
</ul>
<p><strong>Zoho Books GST Capabilities:</strong></p>
<ul>
<li>GSTR-1, GSTR-3B, GSTR-9 filing via GSTN integration</li>
<li>ITC reconciliation (GSTR-2A/2B matching)</li>
<li>E-invoicing (IRN generation via NIC)</li>
<li>E-way bill generation</li>
<li>HSN/SAC code management</li>
<li>Place of supply logic (CGST+SGST vs IGST)</li>
</ul>
<p><strong>Authority:</strong> GST Portal - <a href="https://www.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a> | Zoho Books - <a href="https://www.zoho.com/in/books" target="_blank" rel="noopener">zoho.com/in/books</a> | Telangana Commercial Taxes - <a href="https://tgct.gov.in" target="_blank" rel="noopener">tgct.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - Zoho Books Accounting in Hyderabad</h2>
                    <p class="faq-expanded__lead">Common questions about Zoho Books setup, GST filing, pricing, and CA-managed accounting in Hyderabad.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Hyderabad', 'enquiryService' => 'Zoho Books Accounting in Hyderabad'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Zoho Books?</h3>
                        <div class="faq-expanded__a"><p>Zoho Books is a GSTN-certified cloud-based accounting software by Zoho Corporation. It handles invoicing, expense tracking, bank reconciliation, inventory management, GST compliance (direct GSTR-1/3B filing), e-invoicing, multi-currency transactions, and financial reporting. Accessible from browser and mobile app. Patron's CA manages Zoho Books for Hyderabad businesses end-to-end.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is Zoho Books free for small businesses?</h3>
                        <div class="faq-expanded__a"><p>Yes. Zoho Books offers a completely free plan for businesses with annual revenue under Rs 50 lakh. The free plan includes invoicing, expense tracking, bank reconciliation, and basic GST compliance. For businesses above Rs 50 lakh, the Standard plan starts at Rs 899/month. Patron's CA management fee is separate and starts from Rs 4,999/month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can CA manage Zoho Books remotely?</h3>
                        <div class="faq-expanded__a"><p>Yes. Zoho Books has a built-in accountant portal that provides your CA with real-time access to your books. Patron's CA logs into your Zoho Books via this portal, records transactions, reconciles bank statements, and files GST returns - all remotely. No physical visits needed for routine accounting. Hyderabad businesses get the same CA quality as local firms with cloud-first efficiency.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How does Zoho Books handle GST?</h3>
                        <div class="faq-expanded__a"><p>Zoho Books is GSTN-certified and handles GST end-to-end: assigns correct tax rates based on place of supply (CGST+SGST for intra-Telangana, IGST for inter-state), manages HSN/SAC codes, generates e-invoices and e-way bills, compiles GSTR-1/3B/9 return data, reconciles ITC against GSTR-2A/2B, and files returns directly via built-in GSTN integration without manual portal uploads.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is Zoho Books better than Tally for Hyderabad businesses?</h3>
                        <div class="faq-expanded__a"><p>For cloud access, CA collaboration, and direct GST filing, Zoho Books is superior. For complex manufacturing inventory with BOM and cost centres, Tally Prime still has advantages. HITEC City SaaS, D2C brands, freelancers, and startups benefit more from Zoho Books. Large Secunderabad trading firms with complex inventory may prefer Tally. Patron supports both platforms - and manages Tally-to-Zoho migration when businesses are ready.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can Zoho Books handle multi-currency for exports?</h3>
                        <div class="faq-expanded__a"><p>Yes. Zoho Books supports multi-currency invoicing with automatic exchange rate application (or manual rates). HITEC City SaaS companies billing in USD, EUR, and GBP create foreign currency invoices in Zoho Books. Unrealised exchange gains/losses are tracked automatically. Combined with GST LUT filing for zero-rated exports, Patron configures complete export accounting in Zoho Books.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How long does Tally-to-Zoho migration take?</h3>
                        <div class="faq-expanded__a"><p>Migration typically takes 5-10 working days depending on data volume and complexity. Patron exports data from Tally (ledgers, transactions, customer/vendor masters, opening balances), maps it to Zoho Books chart of accounts, imports with validation, and reconciles to ensure zero data loss. Training on Zoho Books usage is included. Many Secunderabad traders complete migration within 2 weeks.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What reports does Zoho Books generate?</h3>
                        <div class="faq-expanded__a"><p>Zoho Books generates: Profit and Loss Statement, Balance Sheet, Cash Flow Statement, Trial Balance, General Ledger, Accounts Receivable/Payable Ageing, GST Reports (GSTR-1, GSTR-3B, GSTR-9 summary), TDS Reports, Inventory Reports, Project Profitability, and custom dashboards. All reports are exportable to PDF and Excel. Patron provides monthly financial summaries to business owners from Zoho Books data.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Zoho Books free hai kya?</strong> Haan. Rs 50 lakh se kam revenue wale businesses ke liye completely free plan available hai. Invoicing, expenses, bank reconciliation, basic GST sab milta hai.</p>
<p><strong>Tally se Zoho Books mein migrate kaise kare?</strong> Patron Tally se data export karke Zoho Books mein import kar deta hai - ledgers, transactions, balances sab. 5-10 din mein complete migration. Zero data loss.</p>
<p><strong>CA remotely manage kar sakta hai kya?</strong> Haan. Zoho Books mein built-in accountant portal hai. Patron ka CA real-time access se books maintain karta hai, GST file karta hai - Hyderabad se baitho, books perfect.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Wait - Start Cloud Accounting Today</h2>
            <div class="content-text">
                
                <p>Every month without proper accounting is a month of unreconciled bank transactions, unclaimed ITC, potential GST notices, and financial statements that are not ITR-ready. Hyderabad businesses using Excel or desktop Tally without regular CA oversight accumulate 12 months of accounting backlog by March - creating a year-end crunch with errors and penalties. Zoho Books with Patron CA management costs Rs 4,999/month - less than the penalty for one late GST return (Rs 50/day CGST + Rs 50/day SGST = Rs 3,000/month). Start now and your books are current from this month.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Zoho Books Accounting in Hyderabad</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Zoho Books accounting in Hyderabad provides cloud-based, GST-compliant bookkeeping for every business type - from HITEC City SaaS startups and Genome Valley pharma companies to Secunderabad traders and Banjara Hills professionals. With a free plan for businesses under Rs 50 lakh, direct GST filing, multi-currency support, and real-time CA collaboration, Zoho Books is the optimal accounting platform for Hyderabad's digital-first economy.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting serves Hyderabad businesses through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA manages Zoho Books setup, daily bookkeeping, bank reconciliation, GST returns, and ITR-ready financials.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Zoho%20Books%20accounting%20services%20in%20Hyderabad.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Zoho%20Books%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Zoho%20Books%20Accounting%20services%20in%20Hyderabad%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">CA-managed Zoho Books accounting available in 8 cities. Select your city for local service details.</p>
         
            <!-- BLOCK 1: City Cards (Zone C) - Hyderabad = current city, NOT interlinked -->
<div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-city-grid">
        <a href="/zoho-books-accounting/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/zoho-books-accounting/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/zoho-books-accounting/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
        <a href="/zoho-books-accounting/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
        <a href="/zoho-books-accounting/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
        <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
        <a href="/zoho-books-accounting/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
        <a href="/zoho-books-accounting/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
    </div>
</div>

<!-- BLOCK 2: Cross-Sell Services (Zone D) - SAME-CITY URLs for Hyderabad -->
<div class="pa-city-block">
    <div class="pa-block-title">Related Services in Hyderabad</div>
    <div class="pa-block-sub">End-to-end accounting and compliance support</div>
    <div class="pa-cross-grid">
        <a href="/gst-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
        <a href="/private-limited-company-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
        <a href="/income-tax-return/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Hyderabad</div></div></a>
        <a href="/trademark-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
        <a href="/startup-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Hyderabad</div></div>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content covers Zoho Books accounting services in Hyderabad including cloud setup, daily bookkeeping, bank reconciliation, GST return filing, e-invoicing, multi-currency accounting, TDS tracking, and ITR-ready financial statement preparation. Content is reviewed semi-annually for accuracy. Freshness Tier 2.</p>
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
