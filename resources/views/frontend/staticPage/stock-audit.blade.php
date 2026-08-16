
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
    <title>Stock Audit Services India - Inventory Verification & Report</title>
    <meta name="description" content="Expert stock audit for bank CC/OD borrowers and businesses. Physical verification, Drawing Power report, AS 2 valuation. Starting at INR 2,499.">
    <link rel="canonical" href="/stock-audit">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Stock Audit Services India - Inventory Verification & Report">
    <meta property="og:description" content="Expert stock audit for bank CC/OD borrowers and businesses. Physical verification, Drawing Power report, AS 2 valuation. Starting at INR 2,499.">
    <meta property="og:url" content="/stock-audit">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/stock-audit-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Stock Audit Services India - Inventory Verification & Report">
    <meta name="twitter:description" content="Expert stock audit for bank CC/OD borrowers and businesses. Physical verification, Drawing Power report, AS 2 valuation. Starting at INR 2,499.">
    <meta name="twitter:image" content="/images/stock-audit-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Stock Audit Services in India Guide",
          "description": "Expert stock audit for bank CC/OD borrowers and businesses. Physical verification, Drawing Power report, AS 2 valuation. Starting at INR 2,499.",
          "url": "https://www.patronaccounting.com/stock-audit",
          "serviceType": "Stock Audit Services in India Guide",
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
              "name": "Stock Audit Services in India Guide",
              "item": "https://www.patronaccounting.com/stock-audit"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is stock audit and why is it required?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Stock Audit - also called Inventory Audit - is the independent physical verification and valuation of a business's inventory by an external Chartered Accountant. It is required for: (1) bank CC/OD borrowers as a mandatory condition of working capital financing to verify Drawing Power; (2) year-end statutory audit to verify closing stock; (3) internal control and fraud prevention; and (4) insurance claims, business transfers, and due diligence. Valuation follows AS 2 or Ind AS 2 (lower of cost or net realisable value)."
              }
            },
            {
              "@type": "Question",
              "name": "Is stock audit mandatory in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Stock Audit is mandatory for: (1) bank CC/OD borrowers per the bank's sanction letter - generally when credit exposure exceeds INR 5 crore, conducted half-yearly or quarterly; (2) all companies for year-end stock verification as part of statutory audit (SA 501 - ICAI). For non-bank, non-listed businesses with smaller inventory, stock audit is not legally mandated but is strongly recommended as best practice for internal control."
              }
            },
            {
              "@type": "Question",
              "name": "Who can conduct a stock audit in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Banks require stock audit reports to be certified by an independent Chartered Accountant (CA) in practice. There is no specific statutory requirement that only a CA can conduct all types of stock audit - but for bank CC/OD accounts and statutory audit purposes, a CA-certified report is required. Patron Accounting's CA team has over 15 years of experience in stock audits for all major Indian banks."
              }
            },
            {
              "@type": "Question",
              "name": "What is Drawing Power in a Cash Credit account?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Drawing Power (DP) is the maximum amount a CC or OD borrower can draw from the bank on a given date. It is computed as: DP = (Eligible Stock Value x (100% - Stock Margin%)) + (Eligible Debtors x (100% - Debtors Margin%)). If stock is INR 50 lakh with 25% margin and debtors are INR 20 lakh with 25% margin: DP = INR 37.5 lakh + INR 15 lakh = INR 52.5 lakh."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if stock audit is not done for CC/OD accounts?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "If stock audit is not conducted per the bank's sanction conditions: (1) the bank may freeze Drawing Power; (2) outstanding beyond DP becomes an irregular drawing; (3) if irregular for 90 continuous days, the account is classified as NPA per RBI IRACP norms [RBI/2024-25/12]; (4) NPA triggers penal interest, credit rating downgrade, and difficulty securing future loans."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between stock audit and stock statement?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Stock Statement (monthly) is a self-certified declaration by the borrower submitted to the bank showing current stock and debtors levels - used for monthly DP computation. A Stock Audit is a formal independent physical verification by a CA that validates actual stock vs. book records, valuation accuracy, and Drawing Power - typically half-yearly or quarterly. Banks use both."
              }
            },
            {
              "@type": "Question",
              "name": "Stock audit ke liye kya kya chahiye?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Bank CC/OD stock audit ke liye chahiye: bank ka sanction letter, latest month ka stock statement, pichle 3 mahine ka bank statement, purchase aur sales ke invoices, stock register ya Tally data updated, debtors ki invoice-wise ageing list, aur insurance policy details. Godaam ya factory tour bhi required hota hai jahan CA physically stock count karta hai. Patron Accounting ki CA team complete guidance deti hai. Quick Answers What is stock audit? Independent physical verification and valuation of inventory by a CA, to confirm physical stock matches book records per AS 2 or Ind AS 2. Most commonly required by banks for CC/OD borrowers. Is stock audit mandatory in India? Yes, for bank CC/OD borrowers (per sanction, generally when exposure exceeds INR 5 crore) and for year-end statutory audit under SA 501 (ICAI). Voluntary for others. How is Drawing Power calculated? DP = (Eligible Stock x (100% - Stock Margin%)) + (Eligible Debtors x (100% - Debtors Margin%)). Typical margins: 25-40% on stock, 25% on debtors. What happens if stock audit report is not submitted to bank? Frozen DP, irregular drawings, and ultimately NPA classification if irregular for 90 continuous days [RBI IRACP, RBI/2024-25/12]. Who performs stock audit for bank? Independent CA appointed separately - either nominated by bank or mutually agreed. CA-certified report submitted directly to bank."
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
                        Stock Audit Services in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Bank CC/OD Stock Audit</strong>:</span> Physical verification and Drawing Power computation for Cash Credit and Overdraft borrowers as per bank sanction terms; CA-certified report submitted to lender.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Annual Physical Verification</strong>:</span> Year-end inventory count for statutory audit, financial reporting, and internal control; valuation as per AS 2 or Ind AS 2 (lower of cost or NRV).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Multi-Location Audit</strong>:</span> Simultaneous or sequential stock audits at multiple warehouses, factories, and distribution points; centralized reconciliation and consolidated reporting.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Reports Accepted by All Major Banks</strong>:</span> 500+ stock audits completed. Reports accepted by SBI, PNB, HDFC, ICICI, Axis Bank, Bank of Baroda, and 20+ other banks across India.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Patron Accounting LLP - CA firm with offices in Pune, Mumbai, Bangalore, Delhi | 500+ Stock Audits | 4.8/5 Rating | Same-Week Site Visit Available</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Stock%20Audit%20Services&body=Hello%2C%0AI%20need%20a%20Stock%20Audit.%0APlease%20contact%20me.%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20Stock%20Audit%20for%20my%20business.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Stock Audit',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'stock-audit', 'label' => 'Stock Audit', 'selected' => true, 'disabled' => false],
                            ['value' => 'internal-audit', 'label' => 'Internal Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'statutory-audit', 'label' => 'Statutory Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-audit', 'label' => 'GST Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'tax-audit', 'label' => 'Tax Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'appointment-of-auditor', 'label' => 'Appointment of Auditor', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's CA team did our SBI stock audit in a single day across two godowns. The report was accepted without a single query from the bank. Exactly what we needed.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajiv Sharma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Manufacturing Unit, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We had an INR 8 crore CC limit and the bank's audit showed a significant shortfall. Patron helped us understand the discrepancies and prepare a proper response before credit review.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Anil Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trading Company, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Year-end stock count across our 6 warehouses in 3 cities - Patron coordinated all teams simultaneously. Clean report filed with our statutory auditors on time.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Menon</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, FMCG Distributor, Bangalore</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Emergency stock audit for our HDFC CC account - bank needed the report in 48 hours. Patron's team visited the next morning and delivered the report that evening. Saved our credit rating.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vijay Gupta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Textile Trader, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's forensic stock investigation exposed inventory manipulation by our warehouse manager. The evidence-based report helped us take appropriate legal action and recover losses.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sanjay Deshpande</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Retail Chain, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get your CA-certified Stock Audit Report - starting at INR 2,499. Physical verification, Drawing Power computation, reports accepted by all major Indian banks.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">When Required</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">7-Step Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">DIY vs CA</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Stock Audit Services in India - Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Stock Audit Services at a Glance</strong></p>
                    <p>Stock Audit (Inventory Audit) is the independent physical verification and valuation of a business's inventory to confirm physical stock matches book records. Most commonly required by banks as a mandatory condition of CC/OD financing, it determines Drawing Power. Valuation follows AS 2 or Ind AS 2 (lower of cost or NRV). Per RBI IRACP norms, drawings based on stock statements older than 3 months are irregular - 90 continuous days of irregular drawings = NPA classification [RBI/2024-25/12]. Patron Accounting delivers CA-certified reports starting at INR 2,499 (Exl GST and Govt. Charges).</p>
                </div>
                <p>Stock Audit directly determines Drawing Power (DP) - the maximum amount a borrower can draw against their CC or OD limit. The bank applies a prescribed margin (typically 25-40% on stock, 25% on debtors) to the verified stock value to arrive at DP. If the stock audit reveals actual stock is lower than reported in monthly stock statements, Drawing Power reduces and the borrower may face a call to repay excess outstanding.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Key Detail</th></tr></thead>
                    <tbody>
                        <tr><td><strong>What Is Verified</strong></td><td>Physical stock count vs. book records; valuation per AS 2 or Ind AS 2 (lower of cost or NRV)</td></tr>
                        <tr><td><strong>Governing Standards</strong></td><td>AS 2 (ICAI) for non-Ind AS companies; Ind AS 2 for listed/large companies; SA 501 (ICAI) for statutory auditors; RBI guidelines for bank borrowers</td></tr>
                        <tr><td><strong>Bank Borrower Trigger</strong></td><td>Generally mandatory when CC/OD exposure exceeds INR 5 crore - per individual bank policy and RBI Working Capital guidelines</td></tr>
                        <tr><td><strong>Frequency</strong></td><td>Half-yearly for most bank borrowers; quarterly for larger accounts; annually for year-end purposes</td></tr>
                        <tr><td><strong>Drawing Power Formula</strong></td><td>DP = (Eligible Stock x (100% - margin%)) + (Eligible Debtors x (100% - margin%)). Typical: 25-40% on stock, 25% on debtors</td></tr>
                        <tr><td><strong>NPA Risk</strong></td><td>Irregular drawings (stock statements over 3 months old) for 90 continuous days = NPA [RBI IRACP, RBI/2024-25/12]</td></tr>
                        <tr><td><strong>Patron Accounting Fee</strong></td><td>Starting at INR 2,499 (Exl GST and Govt. Charges) per location</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>In the banking context, stock audit is not optional - it is a condition of your working capital facility. Stock audit ke liye kya chahiye? Patron Accounting ki CA team aapko complete checklist aur guidance deti hai - bank sanction letter se lekar final report submission tak.</p>
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
                <h2 class="section-title">What is Stock Audit?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Stock Audit</strong> is the independent physical verification and valuation of a company's inventory (raw materials, work-in-progress, finished goods) to confirm that physical stock matches book records and that the stock is correctly valued as per applicable accounting standards.</p>
                    <p>Unlike Statutory Audit (which covers all financial statements) or <a href="/internal-audit">Internal Audit</a> (which covers processes and controls broadly), Stock Audit focuses specifically on inventory - physically counting it, checking condition, verifying ownership, testing valuation methodology, and reconciling book stock with actual stock. For bank borrowers, it goes further to compute Drawing Power under CC/OD facilities.</p>
                    <p>Stock Audit is guided by: Accounting Standard AS 2 (Valuation of Inventories) issued by ICAI for non-Ind AS companies; Ind AS 2 (Inventories) for listed/large companies; SA 501 (Audit Evidence - Specific Considerations for Selected Items) issued by ICAI; and RBI Working Capital Management guidelines for bank borrowers.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Stock Audit:</strong></p>
                    <p><strong>Drawing Power (DP):</strong> Maximum amount a CC/OD borrower can draw, computed by applying bank's prescribed margin to eligible stock and debtors. Revised monthly via stock statements and formally verified via stock audit.</p>
                    <p><strong>AS 2 - Valuation of Inventories:</strong> ICAI standard requiring inventories valued at lower of cost and NRV. Permitted cost methods: FIFO and Weighted Average. LIFO not permitted since 2004.</p>
                    <p><strong>Ind AS 2 - Inventories:</strong> Applicable to listed and large unlisted companies. Same lower of cost or NRV principle. Borrowing costs included in cost only when directly attributable to qualifying assets.</p>
                    <p><strong>NRV (Net Realisable Value):</strong> Estimated selling price less estimated costs of completion and selling expenses. Stock is written down to NRV when cost exceeds NRV (damaged, obsolete, or slow-moving stock).</p>
                    <p><strong>SA 501:</strong> ICAI Standard on Auditing requiring statutory auditors to attend physical inventory count if inventories are material to financial statements.</p>
                    <p><strong>Margin:</strong> Percentage withheld by bank on eligible stock and debtors to arrive at Drawing Power. Typical: 25-40% on stock, 25% on debtors per bank sanction letter.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Warehouse with stock boxes -->
                            <rect x="25" y="30" width="150" height="100" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <path d="M15 32L100 8L185 32" stroke="#14365F" stroke-width="2" fill="#E8EDF4"/>
                            <rect x="40" y="50" width="30" height="25" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <rect x="85" y="50" width="30" height="25" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <rect x="130" y="50" width="30" height="25" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <rect x="60" y="85" width="30" height="25" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/>
                            <rect x="110" y="85" width="30" height="25" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/>
                            <circle cx="170" cy="25" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M163 25l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CA-Verified Stock</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA-Certified</span>
                        <strong>Stock Audit Report</strong>
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
            <h2 class="section-title">When is Stock Audit Required in India?</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Bank CC/OD Borrowers</strong> - mandatory per bank sanction terms when CC or OD facility is secured by hypothecation of stock and debtors. Generally required when exposure exceeds INR 5 crore - frequency (half-yearly/quarterly) specified in sanction letter.</li>
                    <li><strong>Year-End <a href="/statutory-audit">Statutory Audit</a></strong> - as per SA 501 (ICAI), statutory auditors must obtain sufficient evidence regarding existence and condition of inventory. Physical verification is integral to the audit.</li>
                    <li><strong>Annual Internal Control</strong> - best practice for businesses with high-value or fast-moving inventory to identify pilferage, obsolescence, and system gaps.</li>
                    <li><strong>Business Valuation and Transfer</strong> - when a business is sold, merged, or a partner is admitted - independent stock audit establishes actual inventory value at transition date.</li>
                    <li><strong>Insurance Claim Settlement</strong> - after fire, flood, theft, or natural disaster - insurers require CA-certified stock audit to determine verified value of lost or damaged inventory.</li>
                    <li><strong>Fraud Investigation</strong> - when pilferage, stock manipulation, or fraud is suspected - independent audit establishes actual position and quantifies discrepancies.</li>
                    <li><strong>IPO and Due Diligence</strong> - companies preparing for IPO or PE investment require accurate inventory valuation for DRHP and financial diligence.</li>
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
            <h2 class="section-title">Patron Accounting Stock Audit Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Bank CC/OD Stock Audit and Drawing Power Report</strong></td><td>Physical verification of hypothecated stock and eligible debtors. DP computation per bank sanction terms. CA-certified report accepted by SBI, PNB, HDFC, ICICI, Axis, and all leading banks.</td></tr>
                        <tr><td><strong>Year-End Physical Inventory Count</strong></td><td>Systematic count of all inventory categories (raw materials, WIP, finished goods). Valuation review per AS 2 or Ind AS 2. Reconciliation with book records and GL.</td></tr>
                        <tr><td><strong>Multi-Location Warehouse Audit</strong></td><td>Simultaneous or sequential verification across multiple warehouses, factories, depots. Centralized reconciliation and consolidated report.</td></tr>
                        <tr><td><strong>Stocktaking Support and Preparation</strong></td><td>Pre-audit preparation - organizing stock, updating registers, reconciling Tally/ERP, separating damaged items, preparing debtors ageing analysis.</td></tr>
                        <tr><td><strong>Forensic Stock Investigation</strong></td><td>Targeted investigation for pilferage, fraud, or unexplained shortages. Evidence-based quantification. Report suitable for legal, insurance, or regulatory use.</td></tr>
                        <tr><td><strong>Inventory Management Consulting</strong></td><td>Post-audit advisory on improving stock management, reducing discrepancies, implementing ABC analysis, and strengthening internal controls.</td></tr>

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
            <h2 class="section-title">Stock Audit Procedure - 7-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team follows a systematic 7-step process for every stock audit - from engagement setup to bank report submission. Same-week site visits available.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Engagement Setup and Document Review</h3><p class="step-description">We review the bank's sanction letter (for CC/OD audits) to understand scope, eligible security types, margin percentages, stock statement frequency, and reporting format requirements.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Sanction letter reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scope confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="25" height="6" rx="2" fill="#F5A623"/><line x1="30" y1="34" x2="90" y2="34" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="44" x2="85" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="30" y1="54" x2="80" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.2"/></svg></div><span class="illustration-label">Scope Set</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Pre-Audit Preparation</h3><p class="step-description">We issue a preparation checklist: update stock ledger, reconcile Tally/ERP, prepare purchase invoices, debtors ageing list, separately mark damaged/expired/obsolete stock.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Client checklist issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Stock register updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M30 30l5 5 10-10" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><path d="M30 45l5 5 10-10" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><line x1="55" y1="30" x2="90" y2="30" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="55" y1="45" x2="85" y2="45" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><rect x="55" y="55" width="30" height="8" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/></svg></div><span class="illustration-label">Prep Done</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Physical Stock Count and Inspection</h3><p class="step-description">Our CA team conducts systematic physical counting at all locations - bin-by-bin, category-by-category. We verify existence, ownership, condition, and storage compliance.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Physical count completed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Condition verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="5" width="50" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="60" y="15" width="50" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><rect x="18" y="15" width="35" height="8" rx="2" fill="#E8712C" opacity="0.2"/><rect x="18" y="28" width="35" height="8" rx="2" fill="#E8712C" opacity="0.15"/><rect x="18" y="41" width="35" height="8" rx="2" fill="#E8712C" opacity="0.1"/><text x="85" y="38" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">STOCK</text><text x="85" y="50" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">COUNT</text></svg></div><span class="illustration-label">Count Done</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Valuation Review</h3><p class="step-description">We verify that stock valuation complies with AS 2 or Ind AS 2 - lower of cost and NRV. We test cost method consistency, verify NRV for slow-moving stock, and check overhead allocation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AS 2 / Ind AS 2 compliance</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> NRV write-downs verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">COST vs NRV</text><line x1="25" y1="34" x2="95" y2="34" stroke="#14365F" stroke-width="1" opacity="0.3"/><rect x="25" y="40" width="30" height="14" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="40" y="50" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">COST</text><rect x="65" y="40" width="30" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="80" y="50" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">NRV</text><text x="60" y="68" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Lower = Value</text></svg></div><span class="illustration-label">Valued</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Debtors Verification (CC/OD)</h3><p class="step-description">For bank CC/OD accounts, we verify eligible debtors - review ageing, identify overdue/disputed/doubtful debtors excluded from DP, verify sales authenticity, and apply bank margin.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Debtors ageing reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Eligible debtors confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="25" y1="25" x2="95" y2="25" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="40" y="22" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">0-30 days</text><text x="65" y="22" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">31-90</text><text x="88" y="22" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">90+</text><rect x="25" y="30" width="25" height="30" rx="2" fill="#E8F5E9"/><rect x="55" y="40" width="20" height="20" rx="2" fill="#FFF3E0"/><rect x="80" y="50" width="15" height="10" rx="2" fill="#FDE8E8"/></svg></div><span class="illustration-label">Debtors OK</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Drawing Power Computation</h3><p class="step-description">We compute DP using the bank's prescribed margin: DP = (Eligible Stock x (100% - margin)) + (Eligible Debtors x (100% - margin)). We compare DP with current outstanding and flag excess drawing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DP calculated per sanction</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Excess drawing flagged</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">DRAWING POWER</text><line x1="20" y1="34" x2="100" y2="34" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="48" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Stock + Debtors - Margin</text><rect x="25" y="55" width="70" height="14" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><text x="60" y="65" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">DP = INR XX,XX,XXX</text></svg></div><span class="illustration-label">DP Ready</span><span class="step-number-large">06</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Report Preparation and Bank Submission</h3><p class="step-description">CA-signed comprehensive report covering findings, discrepancies, valuations, DP computation, and recommendations. Submitted to bank in prescribed format. Management copy with corrective action advisory.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CA-certified report</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Submitted to bank</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="34" x2="80" y2="34" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="30" y1="44" x2="75" y2="44" stroke="#14365F" stroke-width="1" opacity="0.2"/><circle cx="60" cy="56" r="6" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M57 56l2 2 4-4" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/><circle cx="95" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M91 15l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Report Filed</span><span class="step-number-large">07</span></div></div></div>
            <div class="highlight-box" style="margin-top:32px;"><p><strong>Legal Verification Gate:</strong> AS 2 / Ind AS 2 valuation methodology, RBI IRACP drawing power norms, and NPA classification criteria verified against ICAI and RBI source documents (RBI/2024-25/12).</p></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Stock Audit</h2>
            <div class="content-text">
                
                <p><strong>For Bank CC/OD Audits</strong></p>
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th></tr></thead><tbody>
                        <tr><td>Bank sanction letter</td><td>Specifies CC/OD limit, eligible security, margin %, stock statement frequency, and audit requirements</td></tr>
                        <tr><td>Monthly stock statement (latest)</td><td>Certified by proprietor/director - baseline for verification</td></tr>
                        <tr><td>Bank statement (last 3 months)</td><td>Cross-verify inflows/outflows against purchases and sales</td></tr>
                        <tr><td>Purchase and sales invoices (3-6 months)</td><td>Verify stock movement and cost basis</td></tr>
                        <tr><td>Stock register / Tally / ERP data</td><td>Updated to audit date for reconciliation</td></tr>
                        <tr><td>Debtors list (party-wise, invoice-wise, age-wise)</td><td>For eligible debtors computation and DP calculation</td></tr>
                        <tr><td>Insurance policy details</td><td>Value insured, premium paid, expiry - for hypothecated stock</td></tr>
                        <tr><td>Storage location layouts</td><td>All warehouses, factories, depots with access information</td></tr>
                </tbody></table></div>
                <p style="margin-top:24px;"><strong>For Year-End Physical Count</strong></p>
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th></tr></thead><tbody>
                        <tr><td>Stock ledger / inventory module data</td><td>From accounting system (Tally, SAP) as of count date</td></tr>
                        <tr><td>Inventory categories list</td><td>Raw materials, WIP, finished goods, consumables, spares</td></tr>
                        <tr><td>Opening stock, purchases, production, sales records</td><td>Full-year movement data for reconciliation</td></tr>
                        <tr><td>Valuation workings</td><td>Cost method (FIFO/Weighted Average), overhead allocation rates</td></tr>
                        <tr><td>Previous year's stock audit report</td><td>Year-on-year comparison baseline</td></tr>
                </tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Stock Audit Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Book vs Physical Stock Discrepancies</strong></td><td>Reduced Drawing Power, bank queries</td><td>Systematic root cause investigation for each variance, financial impact quantification, adjustment entry recommendations. Net shortfalls clearly reported for DP.</td></tr>
                        <tr><td><strong>Damaged, Obsolete, or Slow-Moving Stock Valuation</strong></td><td>Overvalued collateral, inflated profits</td><td>Independent NRV assessment per AS 2, write-down recommendations, items flagged for disposal - protecting banks and ensuring accurate financials.</td></tr>
                        <tr><td><strong>Multi-Location Coordination</strong></td><td>Logistical complexity for 10-50 locations</td><td>Simultaneous CA teams deployed, standardized count sheets, centralized data reconciliation - completed within agreed timelines.</td></tr>
                        <tr><td><strong>Banks Rejecting Stock Audit Reports</strong></td><td>Wrong format or missing disclosures</td><td>Our reports follow exact bank-specific format requirements. Accepted by SBI, HDFC, ICICI, PNB, Axis, Bank of Baroda consistently.</td></tr>

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
            <h2 class="section-title">Stock Audit Fees in India - 2026 Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - Bank CC/OD Single Location (city)</td><td class="table-amount">Starting from INR 2,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Bank CC/OD Single Location (outstation, within 100 km)</td><td class="table-amount">Starting at INR 5,999</td></tr>
                        <tr><td>Year-End Physical Inventory Count - Single Location</td><td class="table-amount">Starting at INR 4,999</td></tr>
                        <tr><td>Multi-Location Stock Audit (3-5 locations)</td><td class="table-amount">Starting at INR 14,999 (bundled)</td></tr>
                        <tr><td>Multi-Location (6-10 locations, Pan-India)</td><td class="table-amount">Custom pricing available</td></tr>
                        <tr><td>Emergency/Same-Week Stock Audit</td><td class="table-amount">Starting at INR 6,999 (priority surcharge)</td></tr>
                        <tr><td>Forensic Stock Investigation</td><td class="table-amount">Starting at INR 9,999 (scope-dependent)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Stock Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20Stock%20Audit.%20Please%20call%20me%20to%20discuss." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Stock Audit Timeline - How Long Does It Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Single-location bank CC/OD stock audit (standard)</td><td>Site visit: 1 day. Report: 2-3 working days after site visit.</td></tr>
                        <tr><td>Multi-location audit (3-5 locations, same city)</td><td>2-3 days site visits. Report: 5-7 working days after completion.</td></tr>
                        <tr><td>Large warehouse / manufacturing (50,000+ SKUs)</td><td>2-4 day site visit. Report: 7-10 working days after site visit.</td></tr>
                        <tr><td>Pan-India multi-location (10+ locations)</td><td>Rolling schedule over 2-3 weeks. Consolidated report: 10-15 working days.</td></tr>
                        <tr><td>Emergency / Urgent audit (same day or next day)</td><td>Site visit within 24-48 hours. Report: 1-2 working days after visit.</td></tr>
                        <tr><td>Stock statement due date (bank borrowers)</td><td>Monthly by 7th of following month. Formal audit: half-yearly per sanction letter.</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Bank Deadline Alert:</strong> Banks typically require formal stock audit reports half-yearly (by September 30 and March 31 for April-March FY). Engaging Patron Accounting 2-3 weeks before the due date ensures timely submission and avoids bank queries.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Stock Audit?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Drawing Power Accuracy</h3><p>Correctly computed DP prevents under-drawing (leaving money on the table) and over-drawing (risk of demand notice). Our reports give banks full confidence in stock security value.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>NPA Prevention</h3><p>RBI IRACP norms make drawings on stock statements older than 3 months irregular. 90 days of irregular drawings = NPA. Timely audits keep accounts standard [RBI/2024-25/12].</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></div><h3>Fraud and Pilferage Detection</h3><p>Independent CA verification exposes stock manipulation, fictitious entries, and internal pilferage - which internal staff may overlook or conceal.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><h3>AS 2 / Ind AS 2 Compliance</h3><p>Year-end valuation errors impact gross profit, tax liability, and audit opinion. Professional stock audit ensures correct write-downs and accounting standard compliance.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Insurance Claim Support</h3><p>After fire, flood, or theft, a recent CA-certified stock audit report provides prima facie evidence of inventory value for insurance claim purposes.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Pan-India Multi-Location</h3><p>Offices in Pune, Mumbai, Bangalore, Delhi. CA teams deployed simultaneously for multi-location audits. Centralized reconciliation and consolidated reporting.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">500+ Stock Audit Reports Accepted by All Major Indian Banks</h2>
            <div class="content-text">
                
                <p><strong>Patron Accounting LLP</strong> | 4.8/5 Rating | 200+ Reviews | 500+ Stock Audits | Offices: Pune | Mumbai | Bangalore | Delhi</p>
                <div class="highlight-box" style="margin-top:16px;"><p>"Patron's CA team did our SBI stock audit in a single day across two godowns. The report was accepted without a single query from the bank. Exactly what we needed." - <strong>Proprietor, Manufacturing Unit, Pune</strong></p></div>
                <div class="highlight-box" style="margin-top:12px;"><p>"We had an INR 8 crore CC limit and the bank's stock audit showed a significant shortfall. Patron helped us understand the discrepancies and prepare a proper response before the credit review." - <strong>Director, Trading Company, Mumbai</strong></p></div>
                <div class="highlight-box" style="margin-top:12px;"><p>"Year-end stock count across our 6 warehouses in 3 cities - Patron coordinated all teams simultaneously. Clean report filed with our statutory auditors on time." - <strong>CFO, FMCG Distributor, Bangalore</strong></p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Self-Audit vs Professional CA Stock Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Internal / Self-Audit</th><th>Patron Accounting CA Team</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Banker Acceptance</strong></td><td>Banks do not accept self-certified reports for formal stock audit</td><td>CA-certified report accepted by all major Indian banks</td></tr>
                        <tr><td><strong>AS 2 / Ind AS 2 Compliance</strong></td><td>Staff may not apply correct NRV write-down methodology</td><td>Full AS 2 / Ind AS 2 valuation review with technically accurate write-downs</td></tr>
                        <tr><td><strong>Drawing Power Computation</strong></td><td>Errors can lead to over-drawing and bank demand notices</td><td>Precise DP computation per sanction terms - reviewed for accuracy before submission</td></tr>
                        <tr><td><strong>Fraud Detection</strong></td><td>Internal staff may be complicit or overlook irregularities</td><td>Independent CA has no conflict of interest - objective reporting of discrepancies</td></tr>
                        <tr><td><strong>NPA Risk Management</strong></td><td>Missed deadlines increase NPA risk</td><td>Timely completion to meet bank sanction conditions and RBI norms</td></tr>
                        <tr><td><strong>Cost</strong></td><td>Staff time + management bandwidth + risk of bank rejection</td><td>Starting at INR 2,499 per location - clear ROI from NPA prevention alone</td></tr>

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
            <h2 class="section-title">Related Audit and Compliance Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/internal-audit">Internal Audit Service</a> - process, control, and risk-based internal audit including inventory management process review</li>
                    <li><a href="/statutory-audit">Statutory Audit Services</a> - annual financial statement audit including SA 501 inventory procedures</li>
                    <li><a href="/gst-audit">GST Audit Services</a> - annual GSTR-9C reconciliation including verification of ITC on purchases linked to inventory</li>
                    <li><a href="/tax-audit">Tax Audit Service</a> - Section 44AB Tax Audit including verification of closing stock valuation</li>
                    <li><a href="/appointment-of-auditor">Appointment of Auditor</a> - assistance in appointing CA for bank CC/OD stock audit per sanction requirements</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Regulatory Framework for Stock Audit in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Legal Provision</th><th>Relevance to Stock Audit</th></tr></thead><tbody>
                        <tr><td><strong>AS 2 - Valuation of Inventories (ICAI, Revised 2016)</strong></td><td>Inventories valued at lower of cost and NRV. FIFO or Weighted Average permitted. LIFO not permitted. Applicable to all non-Ind AS companies. Source: <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a></td></tr>
                        <tr><td><strong>Ind AS 2 - Inventories</strong></td><td>Same lower of cost or NRV principle. Applicable to listed companies and companies with net worth INR 500 crore or more. Source: MCA, Companies (Indian Accounting Standards) Rules, 2015.</td></tr>
                        <tr><td><strong>SA 501 - Audit Evidence (ICAI)</strong></td><td>Statutory auditors must attend physical inventory count if inventories are material. Failure may require audit opinion qualification.</td></tr>
                        <tr><td><strong>RBI IRACP Norms (RBI/2024-25/12)</strong></td><td>Stock statements older than 3 months cannot be relied upon for DP computation. 90 continuous days of irregular drawings = NPA classification. Source: <a href="https://www.pdicai.org/Docs/RBI-2024-25-12_842024171758397.pdf" target="_blank" rel="noopener">RBI Circular</a></td></tr>
                        <tr><td><strong>RBI Working Capital Guidelines</strong></td><td>Banks must ensure drawings in working capital accounts are covered by adequate current assets. Stock and debtor hypothecation are primary security for CC/OD.</td></tr>
                        <tr><td><strong>Companies Act, 2013 - Section 128</strong></td><td>Companies must maintain proper books including records of all goods purchased/sold and stock on hand. Physical verification supports accurate books.</td></tr>
                        <tr><td><strong>Income Tax Act, 1961 - Section 145</strong></td><td>Method of accounting and valuation of stock must be applied consistently. Auditors verify under <a href="/tax-audit">Tax Audit (Section 44AB)</a>.</td></tr>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Stock Audit in India</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about stock audit for bank CC/OD borrowers, Drawing Power computation, and inventory verification.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Stock Audit in India'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is stock audit and why is it required?</h3>
                        <div class="faq-expanded__a"><p>Stock Audit - also called Inventory Audit - is the independent physical verification and valuation of a business's inventory by an external Chartered Accountant. It is required for: (1) bank CC/OD borrowers as a mandatory condition of working capital financing to verify Drawing Power; (2) year-end statutory audit to verify closing stock; (3) internal control and fraud prevention; and (4) insurance claims, business transfers, and due diligence. Valuation follows AS 2 or Ind AS 2 (lower of cost or net realisable value).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is stock audit mandatory in India?</h3>
                        <div class="faq-expanded__a"><p>Stock Audit is mandatory for: (1) bank CC/OD borrowers per the bank's sanction letter - generally when credit exposure exceeds INR 5 crore, conducted half-yearly or quarterly; (2) all companies for year-end stock verification as part of statutory audit (SA 501 - ICAI). For non-bank, non-listed businesses with smaller inventory, stock audit is not legally mandated but is strongly recommended as best practice for internal control.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Who can conduct a stock audit in India?</h3>
                        <div class="faq-expanded__a"><p>Banks require stock audit reports to be certified by an independent Chartered Accountant (CA) in practice. There is no specific statutory requirement that only a CA can conduct all types of stock audit - but for bank CC/OD accounts and statutory audit purposes, a CA-certified report is required. Patron Accounting's CA team has over 15 years of experience in stock audits for all major Indian banks.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is Drawing Power in a Cash Credit account?</h3>
                        <div class="faq-expanded__a"><p>Drawing Power (DP) is the maximum amount a CC or OD borrower can draw from the bank on a given date. It is computed as: DP = (Eligible Stock Value x (100% - Stock Margin%)) + (Eligible Debtors x (100% - Debtors Margin%)). If stock is INR 50 lakh with 25% margin and debtors are INR 20 lakh with 25% margin: DP = INR 37.5 lakh + INR 15 lakh = INR 52.5 lakh.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if stock audit is not done for CC/OD accounts?</h3>
                        <div class="faq-expanded__a"><p>If stock audit is not conducted per the bank's sanction conditions: (1) the bank may freeze Drawing Power; (2) outstanding beyond DP becomes an irregular drawing; (3) if irregular for 90 continuous days, the account is classified as NPA per RBI IRACP norms [RBI/2024-25/12]; (4) NPA triggers penal interest, credit rating downgrade, and difficulty securing future loans.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between stock audit and stock statement?</h3>
                        <div class="faq-expanded__a"><p>A Stock Statement (monthly) is a self-certified declaration by the borrower submitted to the bank showing current stock and debtors levels - used for monthly DP computation. A Stock Audit is a formal independent physical verification by a CA that validates actual stock vs. book records, valuation accuracy, and Drawing Power - typically half-yearly or quarterly. Banks use both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Stock audit ke liye kya kya chahiye?</h3>
                        <div class="faq-expanded__a"><p>Bank CC/OD stock audit ke liye chahiye: bank ka sanction letter, latest month ka stock statement, pichle 3 mahine ka bank statement, purchase aur sales ke invoices, stock register ya Tally data updated, debtors ki invoice-wise ageing list, aur insurance policy details. Godaam ya factory tour bhi required hota hai jahan CA physically stock count karta hai. Patron Accounting ki CA team complete guidance deti hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is stock audit?</strong> Independent physical verification and valuation of inventory by a CA, to confirm physical stock matches book records per AS 2 or Ind AS 2. Most commonly required by banks for CC/OD borrowers.</p>
                <p><strong>Is stock audit mandatory in India?</strong> Yes, for bank CC/OD borrowers (per sanction, generally when exposure exceeds INR 5 crore) and for year-end statutory audit under SA 501 (ICAI). Voluntary for others.</p>
                <p><strong>How is Drawing Power calculated?</strong> DP = (Eligible Stock x (100% - Stock Margin%)) + (Eligible Debtors x (100% - Debtors Margin%)). Typical margins: 25-40% on stock, 25% on debtors.</p>
                <p><strong>What happens if stock audit report is not submitted to bank?</strong> Frozen DP, irregular drawings, and ultimately NPA classification if irregular for 90 continuous days [RBI IRACP, RBI/2024-25/12].</p>
                <p><strong>Who performs stock audit for bank?</strong> Independent CA appointed separately - either nominated by bank or mutually agreed. CA-certified report submitted directly to bank.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Critical: Is Your CC/OD Drawing Power Up to Date?</h2>
            <div class="content-text">
                
                <p><strong>If your CC/OD account's Drawing Power has not been updated with a fresh stock audit, you may be drawing against irregular DP. 90 continuous days of irregular drawings = NPA under RBI IRACP norms [RBI/2024-25/12].</strong></p>
                <ul>
                    <li><strong>Half-yearly stock audit due dates:</strong> Typically September 30 and March 31 for April-March FY borrowers - check your sanction letter</li>
                    <li><strong>Stock statements must not be older than 3 months</strong> for DP computation - older statements make drawings irregular</li>
                    <li><strong>Year-end physical count</strong> should be completed before accounts finalization - typically January through March</li>
                    <li><strong>Insurance renewal:</strong> Verify that coverage on hypothecated stock is current - lapsed insurance is a sanction violation</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your CA-Certified Stock Audit Report - Contact Our Team Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Stock Audit is both a regulatory compliance requirement and a critical business risk management tool. For bank CC/OD borrowers, it is the foundation of the entire Drawing Power and working capital mechanism - an incorrect or delayed stock audit can cascade into NPA classification, credit rating downgrade, and permanent damage to banking relationships.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's CA team brings over 15 years of stock audit experience across industries - manufacturing, trading, FMCG distribution, retail, and more. Our reports are consistently accepted by all major Indian banks because we understand what banks look for: accurate counts, honest valuation, clean Drawing Power computation, and complete disclosure.</p>
                <p style="color:rgba(255,255,255,0.9);"><strong>Starting at INR 2,499 (Exl GST and Govt. Charges) | Same-Week Site Visit Available | All Major Banks Accepted</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20Stock%20Audit.%20Please%20call%20me%20to%20discuss." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Stock%20Audit%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20a%20Stock%20Audit%20for%20my%20business.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Stock Audit Services - Available in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-certified Stock Audit services with same-week site visits across major cities in India.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/stock-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/stock-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/stock-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/stock-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/stock-audit/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/stock-audit/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/stock-audit/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/stock-audit/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Audit Services</div><div class="pa-block-sub">End-to-end audit and compliance support for your business</div><div class="pa-cross-grid"><a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit Service</div><div class="pa-card-sub">India</div></div></a><a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit Service</div><div class="pa-card-sub">India</div></div></a><a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit Service</div><div class="pa-card-sub">India</div></div></a><a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit Service</div><div class="pa-card-sub">India</div></div></a><a href="/appointment-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2028 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers CA-certified Stock Audit Services in India for bank CC/OD borrowers and businesses. Content is reviewed biennially. All regulatory references are verified against RBI circulars and ICAI accounting standards.</p>
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
    // CONFIGURATION - Update these values
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
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
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
        // Static cards already rendered - init Slick immediately
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

<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
     ============================================ -->
<script>
// Country Data (46 countries)
var countries = [
    { name: "India", code: "+91", flag: "\u{1F1EE}\u{1F1F3}", iso: "IN" },
    { name: "United States", code: "+1", flag: "\u{1F1FA}\u{1F1F8}", iso: "US" },
    { name: "United Kingdom", code: "+44", flag: "\u{1F1EC}\u{1F1E7}", iso: "GB" },
    { name: "United Arab Emirates", code: "+971", flag: "\u{1F1E6}\u{1F1EA}", iso: "AE" },
    { name: "Saudi Arabia", code: "+966", flag: "\u{1F1F8}\u{1F1E6}", iso: "SA" },
    { name: "Singapore", code: "+65", flag: "\u{1F1F8}\u{1F1EC}", iso: "SG" },
    { name: "Australia", code: "+61", flag: "\u{1F1E6}\u{1F1FA}", iso: "AU" },
    { name: "Canada", code: "+1", flag: "\u{1F1E8}\u{1F1E6}", iso: "CA" },
    { name: "Germany", code: "+49", flag: "\u{1F1E9}\u{1F1EA}", iso: "DE" },
    { name: "France", code: "+33", flag: "\u{1F1EB}\u{1F1F7}", iso: "FR" },
    { name: "Japan", code: "+81", flag: "\u{1F1EF}\u{1F1F5}", iso: "JP" },
    { name: "China", code: "+86", flag: "\u{1F1E8}\u{1F1F3}", iso: "CN" },
    { name: "South Korea", code: "+82", flag: "\u{1F1F0}\u{1F1F7}", iso: "KR" },
    { name: "Brazil", code: "+55", flag: "\u{1F1E7}\u{1F1F7}", iso: "BR" },
    { name: "South Africa", code: "+27", flag: "\u{1F1FF}\u{1F1E6}", iso: "ZA" },
    { name: "Nigeria", code: "+234", flag: "\u{1F1F3}\u{1F1EC}", iso: "NG" },
    { name: "Kenya", code: "+254", flag: "\u{1F1F0}\u{1F1EA}", iso: "KE" },
    { name: "Malaysia", code: "+60", flag: "\u{1F1F2}\u{1F1FE}", iso: "MY" },
    { name: "Indonesia", code: "+62", flag: "\u{1F1EE}\u{1F1E9}", iso: "ID" },
    { name: "Thailand", code: "+66", flag: "\u{1F1F9}\u{1F1ED}", iso: "TH" },
    { name: "Vietnam", code: "+84", flag: "\u{1F1FB}\u{1F1F3}", iso: "VN" },
    { name: "Philippines", code: "+63", flag: "\u{1F1F5}\u{1F1ED}", iso: "PH" },
    { name: "Bangladesh", code: "+880", flag: "\u{1F1E7}\u{1F1E9}", iso: "BD" },
    { name: "Pakistan", code: "+92", flag: "\u{1F1F5}\u{1F1F0}", iso: "PK" },
    { name: "Sri Lanka", code: "+94", flag: "\u{1F1F1}\u{1F1F0}", iso: "LK" },
    { name: "Nepal", code: "+977", flag: "\u{1F1F3}\u{1F1F5}", iso: "NP" },
    { name: "Qatar", code: "+974", flag: "\u{1F1F6}\u{1F1E6}", iso: "QA" },
    { name: "Kuwait", code: "+965", flag: "\u{1F1F0}\u{1F1FC}", iso: "KW" },
    { name: "Bahrain", code: "+973", flag: "\u{1F1E7}\u{1F1ED}", iso: "BH" },
    { name: "Oman", code: "+968", flag: "\u{1F1F4}\u{1F1F2}", iso: "OM" },
    { name: "New Zealand", code: "+64", flag: "\u{1F1F3}\u{1F1FF}", iso: "NZ" },
    { name: "Ireland", code: "+353", flag: "\u{1F1EE}\u{1F1EA}", iso: "IE" },
    { name: "Netherlands", code: "+31", flag: "\u{1F1F3}\u{1F1F1}", iso: "NL" },
    { name: "Italy", code: "+39", flag: "\u{1F1EE}\u{1F1F9}", iso: "IT" },
    { name: "Spain", code: "+34", flag: "\u{1F1EA}\u{1F1F8}", iso: "ES" },
    { name: "Switzerland", code: "+41", flag: "\u{1F1E8}\u{1F1ED}", iso: "CH" },
    { name: "Sweden", code: "+46", flag: "\u{1F1F8}\u{1F1EA}", iso: "SE" },
    { name: "Russia", code: "+7", flag: "\u{1F1F7}\u{1F1FA}", iso: "RU" },
    { name: "Mexico", code: "+52", flag: "\u{1F1F2}\u{1F1FD}", iso: "MX" },
    { name: "Egypt", code: "+20", flag: "\u{1F1EA}\u{1F1EC}", iso: "EG" },
    { name: "Turkey", code: "+90", flag: "\u{1F1F9}\u{1F1F7}", iso: "TR" },
    { name: "Israel", code: "+972", flag: "\u{1F1EE}\u{1F1F1}", iso: "IL" },
    { name: "Hong Kong", code: "+852", flag: "\u{1F1ED}\u{1F1F0}", iso: "HK" },
    { name: "Taiwan", code: "+886", flag: "\u{1F1F9}\u{1F1FC}", iso: "TW" },
    { name: "Myanmar", code: "+95", flag: "\u{1F1F2}\u{1F1F2}", iso: "MM" },
    { name: "Afghanistan", code: "+93", flag: "\u{1F1E6}\u{1F1EB}", iso: "AF" }
];

var selectedCountry = countries[0]; // Default: India

function populateCountries(filter) {
    filter = filter || '';
    var container = document.getElementById('countryOptions');
    if (!container) return;
    container.innerHTML = '';
    var filtered = filter
        ? countries.filter(function(c) { return c.name.toLowerCase().indexOf(filter.toLowerCase()) !== -1 || c.code.indexOf(filter) !== -1; })
        : countries;
    filtered.forEach(function(country) {
        var option = document.createElement('div');
        option.className = 'country-option' + (country.iso === selectedCountry.iso ? ' active' : '');
        option.innerHTML = '<span class="flag-emoji">' + country.flag + '</span><span class="country-name">' + country.name + '</span><span class="dial-code">' + country.code + '</span>';
        option.onclick = function(e) { e.stopPropagation(); selectCountry(country); };
        container.appendChild(option);
    });
}

function selectCountry(country) {
    selectedCountry = country;
    document.getElementById('selectedFlag').textContent = country.flag;
    document.getElementById('selectedCode').textContent = country.code;
    document.getElementById('countryCodeDropdown').classList.remove('open');
    document.getElementById('countrySearchInput').value = '';
    populateCountries();
    document.getElementById('phoneNumberInput').focus();
}

function toggleCountryDropdown(event) {
    event.stopPropagation();
    var dropdown = document.getElementById('countryCodeDropdown');
    var isOpen = dropdown.classList.contains('open');
    if (isOpen) {
        dropdown.classList.remove('open');
    } else {
        dropdown.classList.add('open');
        document.getElementById('countrySearchInput').value = '';
        populateCountries();
        setTimeout(function() { document.getElementById('countrySearchInput').focus(); }, 50);
    }
}

function filterCountries(value) { populateCountries(value); }

// Close dropdown on outside click
document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('countryCodeDropdown');
    if (dropdown && !dropdown.contains(e.target)) { dropdown.classList.remove('open'); }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { document.getElementById('countryCodeDropdown').classList.remove('open'); }
});

// Form Validation
function clearFieldError(fieldObj) {
    fieldObj.classList.remove('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent) { var errMsg = parent.querySelector('.field-error-msg'); if (errMsg) errMsg.remove(); }
}

function setFieldError(fieldObj, message) {
    fieldObj.classList.add('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent && !parent.querySelector('.field-error-msg')) {
        var errDiv = document.createElement('div');
        errDiv.className = 'field-error-msg';
        errDiv.textContent = message;
        parent.appendChild(errDiv);
    }
}

// ── Phone Validation ──────────────────────────────────────────
function validatePhone(val, dialCode) {
    val = val.replace(/[\s\-().]/g, '');
    if (!val) {
        return { valid: false, message: 'Phone number is required' };
    }
    if (dialCode === '+91') {
        if (!/^[6-9][0-9]{9}$/.test(val)) {
            if (val.length !== 10) {
                return { valid: false, message: 'Enter a valid 10-digit Indian mobile number' };
            }
            return { valid: false, message: 'Indian mobile numbers must start with 6, 7, 8, or 9' };
        }
        return { valid: true };
    }
    if (!/^[0-9]{7,15}$/.test(val)) {
        return { valid: false, message: 'Enter a valid phone number (7-15 digits)' };
    }
    return { valid: true };
}

function validatePhoneOnBlur(input) {
    var val = input.value.trim();
    var dialCode = (selectedCountry && selectedCountry.code) ? selectedCountry.code : '+91';
    var result = validatePhone(val, dialCode);
    var errorEl = document.getElementById('phoneError');
    var groupEl = document.getElementById('phoneGroup');
    if (val === '') return;
    if (!result.valid) {
        groupEl.classList.add('input-error');
        errorEl.textContent = result.message;
        errorEl.style.display = 'block';
    } else {
        groupEl.classList.remove('input-error');
        errorEl.style.display = 'none';
    }
}
// ─────────────────────────────────────────────────────────────

function validateConsultationForm() {
    var isValid = true;

    var nameField = document.getElementById('consultFullName');
    if (!nameField.value.trim()) { setFieldError(nameField, 'Full name is required'); isValid = false; }

    var phoneInput = document.getElementById('phoneNumberInput');
    var phoneVal = phoneInput.value.trim();
    var phoneResult = validatePhone(phoneInput.value.trim(), selectedCountry ? selectedCountry.code : '+91');
    if (!phoneResult.valid) {
        setFieldError(phoneInput, phoneResult.message);
        document.getElementById('phoneGroup').classList.add('input-error');
        document.getElementById('phoneError').textContent = phoneResult.message;
        document.getElementById('phoneError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('phoneGroup').classList.remove('input-error');
        document.getElementById('phoneError').style.display = 'none';
    }

    var cityField = document.getElementById('consultCity');
    if (!cityField.value.trim()) { setFieldError(cityField, 'City is required'); isValid = false; }

    var serviceField = document.getElementById('consultService');
    if (!serviceField.value) { setFieldError(serviceField, 'Please select a service'); isValid = false; }

    if (isValid) {
        document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal.replace(/[\s\-().]/g, '');
        var serviceName = serviceField.options[serviceField.selectedIndex].text;
        document.getElementById('dealNameField').value = 'Website Enquiry - ' + serviceName;
        document.getElementById('pageSourceField').value = window.location.href;
        var btn = document.getElementById('formSubmitBtn');
        btn.disabled = true;
        btn.textContent = 'Submitting...';
        setTimeout(function() { btn.disabled = false; btn.innerHTML = 'Get Free Quote \u2192'; }, 6000);
    }
    return isValid;
}

// Success state handler (Bigin iframe load)
window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
    // Auto-embed page URL in form
    var pageSourceField = document.getElementById('pageSourceField');
    if (pageSourceField) { pageSourceField.value = window.location.href; }
    var iframe = document.getElementById('hidden208810000001209168Frame');
    if (iframe) {
        iframe.addEventListener('load', function() {
            try {
                var iframeDoc = this.contentWindow.document;
                if (iframeDoc.body && iframeDoc.body.childElementCount !== 0) { showSuccessState(); }
            } catch (error) { showSuccessState(); }
        });
    }
});

function showSuccessState() {
    var formCard = document.getElementById('consultationFormCard');
    if (formCard) {
        formCard.innerHTML =
            '<div class="form-success">' +
                '<div class="form-success-icon">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg>' +
                '</div>' +
                '<h3>Thank You!</h3>' +
                '<p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p>' +
            '</div>';
    }
}
</script>

<script>
// Bigin Mandatory Fields Validation (from Bigin source code)
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');

function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                isReturn = false;
            }
        }
    }
    if(isReturn) {
        document.getElementById('formSubmitBtn').disabled = true;
    }
    return isReturn;
}

// Bigin iframe success handler (overrides our custom one above via event delegation)
document.getElementById('hidden208810000001209168Frame').addEventListener('load', function () {
    try {
        var doc = arguments[0].currentTarget.contentWindow.document;
        if(doc.body && doc.body.childElementCount !== 0) {
            showSuccessState();
        }
    } catch (error) {
        showSuccessState();
    }
});
</script>

<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->
<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

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
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
