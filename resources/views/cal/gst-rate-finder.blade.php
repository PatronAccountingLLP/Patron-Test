@extends('layouts.app')
@section('meta')
    <title>GST Rate Finder | HSN/SAC Code GST Rates FY 2025-26</title>
    <meta name="description" content="GST rate finder: search 250+ HSN &amp; SAC codes to get the exact GST rate instantly, with CGST/SGST/IGST split for goods and services. FY 2025-26. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gst-rate-finder">
    <meta property="og:title" content="GST Rate Finder by HSN/SAC &mdash; Free Tool 2026 | Patron Accounting">
    <meta property="og:description" content="Search 250+ HSN/SAC codes to find GST rates. Goods and services with CGST/SGST split.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/gst-rate-finder">
    <meta property="og:image" content="/tools/og-gst-rate-finder.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Rate Finder by HSN/SAC &mdash; Free Tool 2026">
    <meta name="twitter:description" content="Find GST rates for 250+ goods and services by HSN/SAC code.">
    <meta name="twitter:image" content="/tools/og-gst-rate-finder.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"GST Rate Finder by HSN/SAC Code FY 2025-26","description":"Free online tool to find GST rates by searching HSN codes for goods and SAC codes for services. Database of 250 plus items with CGST SGST IGST split, rate slab classification, and chapter-wise browsing. Updated for FY 2025-26 with latest GST Council notifications.","url":"/tools/gst-rate-finder","applicationCategory":"UtilityApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"GST Rate Finder","item":"/tools/gst-rate-finder"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How to find the GST rate for a product or service?","acceptedAnswer":{"@type":"Answer","text":"Use the GST Rate Finder tool by entering the product name, service description, or HSN/SAC code in the search bar. The tool searches through 250 plus items and returns matching results with the applicable GST rate, CGST SGST split, and HSN/SAC code. You can also filter by rate slab or type."}},{"@type":"Question","name":"What is an HSN code and why is it required?","acceptedAnswer":{"@type":"Answer","text":"HSN stands for Harmonized System of Nomenclature, an international 6 to 8 digit classification system for goods. Under GST in India, HSN codes are mandatory on invoices to determine correct tax rates. Businesses with turnover above 5 crore must use 6 digit HSN codes, while those between 1.5 and 5 crore use 4 digit codes."}},{"@type":"Question","name":"What is a SAC code?","acceptedAnswer":{"@type":"Answer","text":"SAC stands for Services Accounting Code, a 6 digit classification system for services under Indian GST. All SAC codes start with 99. For example 9982 covers legal services and 9983 covers accounting and auditing services. SAC codes are mandatory on invoices for service providers registered under GST."}},{"@type":"Question","name":"How many digits of HSN code are required on GST invoices?","acceptedAnswer":{"@type":"Answer","text":"For businesses with aggregate turnover above 5 crore, 6 digit HSN codes are mandatory. For turnover between 1.5 crore and 5 crore, 4 digit codes are required. For turnover below 1.5 crore, HSN codes are optional on invoices but recommended. For imports and exports, all 8 digits are mandatory."}},{"@type":"Question","name":"What are the current GST rate slabs in India?","acceptedAnswer":{"@type":"Answer","text":"India has four main GST rate slabs: 5 percent for essential goods, 12 percent for standard goods, 18 percent for most goods and services, and 28 percent for luxury and sin goods. Additionally there is 0 percent for exempt items like fresh food and healthcare. Some goods also attract compensation cess above 28 percent."}},{"@type":"Question","name":"Where can I find the official HSN code list?","acceptedAnswer":{"@type":"Answer","text":"The official HSN code list is available on the GST portal at services.gst.gov.in under Search HSN Code option. You can also refer to the CBIC website at cbic-gst.gov.in for rate notifications. The Customs Tariff Act 1975 schedule contains the complete 8 digit HSN classification used in India."}},{"@type":"Question","name":"What happens if wrong HSN code is used on invoice?","acceptedAnswer":{"@type":"Answer","text":"Using an incorrect HSN code can result in wrong GST rate application, ITC mismatch between supplier and recipient, rejection of e-invoice on the IRP portal, errors in GSTR-1 HSN summary, and potential notices during GST audit. It may also cause issues with customs clearance for export and import transactions."}},{"@type":"Question","name":"Is HSN code mandatory in GSTR-1?","acceptedAnswer":{"@type":"Answer","text":"Yes HSN code is mandatory in the HSN summary section of GSTR-1 for all taxpayers. The number of digits required follows the same turnover-based rules as invoices. From April 2021, the HSN summary in GSTR-1 must include quantity, taxable value, and tax amounts for each HSN code used during the period."}},{"@type":"Question","name":"How is GST rate determined for a product?","acceptedAnswer":{"@type":"Answer","text":"The GST rate for a product is determined by its HSN classification as notified by the GST Council through CBIC notifications. The rate schedule maps each HSN code to a specific GST rate slab. Some products have different rates based on value, composition, or intended use. Always refer to the latest rate notifications."}},{"@type":"Question","name":"What is the difference between HSN and SAC codes?","acceptedAnswer":{"@type":"Answer","text":"HSN codes classify goods and are based on the international Harmonized System used by 200 plus countries. SAC codes classify services and are specific to Indian GST. HSN codes can be 2 to 8 digits while SAC codes are always 6 digits starting with 99. Both are used to determine applicable GST rates."}},{"@type":"Question","name":"Can the same product have different GST rates?","acceptedAnswer":{"@type":"Answer","text":"Yes some products can have different GST rates based on factors like value per unit, brand status, packaging, or composition. For example footwear below 1000 rupees attracts 5 percent GST while above 1000 rupees attracts 18 percent. Unbranded food items may be exempt while branded versions attract 5 or 12 percent GST."}},{"@type":"Question","name":"How to search HSN code on the GST portal?","acceptedAnswer":{"@type":"Answer","text":"Visit gst.gov.in, navigate to Services then User Services then Search HSN Code. Enter at least 3 characters of the HSN code number or product description. The portal uses AI-powered search matching HSN codes used by other taxpayers in e-invoicing. Results show code, description, chapter, and related codes."}},{"@type":"Question","name":"Are GST rates the same for intra-state and inter-state supplies?","acceptedAnswer":{"@type":"Answer","text":"The total GST rate is the same for both. For intra-state supplies the rate is split equally between CGST and SGST. For inter-state supplies the full rate applies as IGST. For example 18 percent GST means 9 percent CGST plus 9 percent SGST for intra-state or 18 percent IGST for inter-state transactions."}}]}
</script>
@endsection

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
body{font-family:'DM Sans',sans-serif;color:#1A1A1A;background:#FAFAF8;line-height:1.7;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
:root{--primary:#1B4D3E;--primary-light:#2A7A5F;--primary-dark:#0F2E25;--accent:#F59E0B;--accent-light:#FCD34D;--surface:#FAFAF8;--surface-alt:#F0EFEB;--card:#FFFFFF;--text:#1A1A1A;--text-secondary:#555555;--text-muted:#888888;--border:#E5E5E0;--success:#059669;--info:#0EA5E9;--danger:#DC2626;--radius:12px;--radius-lg:20px;--shadow-sm:0 1px 3px rgba(0,0,0,0.06);--shadow-md:0 4px 16px rgba(0,0,0,0.08);--shadow-lg:0 8px 32px rgba(0,0,0,0.1);--font-body:'DM Sans',sans-serif;--font-mono:'Space Mono',monospace}
.toc-nav{background:var(--primary-dark);position:sticky;top:0;z-index:100;overflow-x:auto;white-space:nowrap;-webkit-overflow-scrolling:touch;box-shadow:0 2px 8px rgba(0,0,0,0.15)}
.toc-nav-inner{max-width:1200px;margin:0 auto;padding:0 20px;display:flex;gap:0}
.toc-nav a{color:rgba(255,255,255,0.75);text-decoration:none;font-size:13px;font-weight:500;padding:12px 16px;transition:all 0.2s;border-bottom:2px solid transparent;display:inline-block}
.toc-nav a:hover,.toc-nav a.active{color:#fff;border-bottom-color:var(--accent)}
.breadcrumb{max-width:1200px;margin:0 auto;padding:16px 20px 0;font-size:13px;color:var(--text-muted)}
.breadcrumb a{color:var(--primary-light);text-decoration:none}
.breadcrumb a:hover{text-decoration:underline}
.breadcrumb span{margin:0 6px}
.hero{max-width:1200px;margin:0 auto;padding:32px 20px 24px}
.hero-meta{display:flex;flex-wrap:wrap;align-items:center;gap:12px;margin-bottom:16px}
.badge-updated{background:var(--primary);color:#fff;font-size:12px;font-weight:600;padding:4px 12px;border-radius:20px;letter-spacing:0.3px}
.author-byline{font-size:13px;color:var(--text-secondary)}
.author-byline strong{color:var(--primary);font-weight:600}
.hero h1{font-size:clamp(28px,5vw,42px);font-weight:700;color:var(--primary-dark);line-height:1.2;margin-bottom:16px}
.hero h1 span{color:var(--accent);display:inline}
.tldr{background:var(--card);border-left:4px solid var(--accent);border-radius:0 var(--radius) var(--radius) 0;padding:20px 24px;margin:0 auto 32px;max-width:1200px;box-shadow:var(--shadow-sm)}
.tldr-label{font-family:var(--font-mono);font-size:12px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1px;margin-bottom:8px}
.tldr p{font-size:15px;color:var(--text-secondary);line-height:1.7}
.main-layout{max-width:1200px;margin:0 auto;padding:0 20px 40px;display:grid;grid-template-columns:1fr;gap:32px}
@media(min-width:900px){.main-layout{grid-template-columns:1fr 320px;gap:40px}}
.content-col{min-width:0}.sidebar-col{min-width:0}
.calc-card{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);padding:32px;margin-bottom:40px;border:1px solid var(--border)}
.calc-card h2{font-size:22px;font-weight:700;color:var(--primary-dark);margin-bottom:24px}
.calc-row{display:grid;grid-template-columns:1fr;gap:20px;margin-bottom:20px}
@media(min-width:600px){.calc-row{grid-template-columns:1fr 1fr}}
.form-group label{display:block;font-size:13px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:0.5px}
.form-group input,.form-group select{width:100%;padding:12px 16px;border:2px solid var(--border);border-radius:var(--radius);font-family:var(--font-body);font-size:16px;color:var(--text);background:var(--surface);transition:border-color 0.2s;outline:none}
.form-group input:focus,.form-group select:focus{border-color:var(--primary)}
.toggle-group{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:4px;gap:4px}
.toggle-btn{flex:1;padding:10px 16px;border:none;border-radius:8px;font-family:var(--font-body);font-size:14px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.25s;-webkit-tap-highlight-color:transparent}
.toggle-btn *{pointer-events:none}
.toggle-btn.active{background:var(--card);color:var(--primary);box-shadow:var(--shadow-sm)}
.btn-calculate{width:100%;padding:14px;background:var(--primary);color:#fff;border:none;border-radius:var(--radius);font-family:var(--font-body);font-size:16px;font-weight:700;cursor:pointer;transition:background 0.2s,transform 0.1s;margin-top:8px}
.btn-calculate:hover{background:var(--primary-light)}
.btn-calculate:active{transform:scale(0.98)}
.btn-reset{display:inline-flex;align-items:center;gap:6px;margin-top:16px;padding:8px 16px;border:1px solid var(--border);border-radius:8px;background:var(--card);color:var(--text-muted);font-family:var(--font-body);font-size:13px;font-weight:500;cursor:pointer;transition:all 0.2s}
.btn-reset:hover{border-color:var(--danger);color:var(--danger)}
.content-section{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);padding:32px;margin-bottom:32px;border:1px solid var(--border)}
.content-section h2{font-size:24px;font-weight:700;color:var(--primary-dark);margin-bottom:16px;line-height:1.3}
.content-section h3{font-size:18px;font-weight:700;color:var(--primary-dark);margin:20px 0 10px}
.content-section p{font-size:15px;color:var(--text-secondary);margin-bottom:14px;line-height:1.75}
.content-section a{color:var(--primary-light);text-decoration:underline;text-underline-offset:2px}
.content-section a:hover{color:var(--primary)}
.rate-table{width:100%;border-collapse:collapse;margin:16px 0;font-size:14px}
.rate-table thead th{background:var(--primary);color:#fff;padding:12px 16px;text-align:left;font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:0.3px}
.rate-table thead th:first-child{border-radius:var(--radius) 0 0 0}
.rate-table thead th:last-child{border-radius:0 var(--radius) 0 0}
.rate-table tbody td{padding:12px 16px;border-bottom:1px solid var(--border);color:var(--text-secondary)}
.rate-table tbody tr:nth-child(even){background:var(--surface)}
.rate-table tbody tr:hover{background:var(--surface-alt)}
.formula-box{background:var(--primary-dark);color:#fff;border-radius:var(--radius);padding:20px 24px;margin:16px 0;font-family:var(--font-mono);font-size:14px;line-height:1.8;overflow-x:auto}
.formula-box .label{color:var(--accent-light);font-weight:700}
.callout{background:#EFF6FF;border-left:4px solid var(--info);border-radius:0 var(--radius) var(--radius) 0;padding:16px 20px;margin:16px 0}
.callout p{color:#1E40AF;margin-bottom:0;font-size:14px}
.callout strong{color:#1E3A8A}
.callout.warn{background:#FFFBEB;border-left-color:var(--accent)}
.callout.warn p{color:#92400E}
.callout.warn strong{color:#78350F}
.faq-item{background:var(--surface);border-radius:var(--radius);margin-bottom:10px;border:1px solid var(--border);overflow:hidden;transition:box-shadow 0.2s}
.faq-item:hover{box-shadow:var(--shadow-sm)}
.faq-question{display:flex;justify-content:space-between;align-items:center;width:100%;padding:16px 20px;border:none;background:none;font-family:var(--font-body);font-size:15px;font-weight:600;color:var(--text);cursor:pointer;text-align:left;line-height:1.4;gap:12px;-webkit-tap-highlight-color:transparent}
.faq-question *{pointer-events:none}
.faq-icon{flex-shrink:0;width:24px;height:24px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;transition:transform 0.3s}
.faq-item.open .faq-icon{transform:rotate(45deg)}
.faq-answer{max-height:0;overflow:hidden;transition:max-height 0.35s ease}
.faq-item.open .faq-answer{max-height:500px}
.faq-answer-inner{padding:0 20px 16px;font-size:14px;color:var(--text-secondary);line-height:1.75}
.sidebar-card{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);padding:24px;margin-bottom:24px;border:1px solid var(--border)}
.sidebar-card h3{font-size:16px;font-weight:700;color:var(--primary-dark);margin-bottom:14px}
.sidebar-link{display:block;padding:10px 14px;border-radius:8px;font-size:14px;font-weight:500;color:var(--text-secondary);text-decoration:none;transition:all 0.2s;margin-bottom:4px}
.sidebar-link:hover{background:var(--surface-alt);color:var(--primary)}
.sidebar-link .arrow{float:right;color:var(--text-muted)}
.cta-card{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);color:#fff;border-radius:var(--radius-lg);padding:28px 24px;margin-bottom:24px;text-align:center}
.cta-card h3{color:#fff;font-size:18px;margin-bottom:10px}
.cta-card p{font-size:14px;color:rgba(255,255,255,0.85);margin-bottom:16px;line-height:1.6}
.cta-btn{display:inline-block;padding:12px 28px;background:var(--accent);color:var(--primary-dark);font-weight:700;font-size:14px;border-radius:8px;text-decoration:none;transition:background 0.2s}
.cta-btn:hover{background:var(--accent-light)}
.noscript-box{background:#FEE2E2;border:2px solid #DC2626;border-radius:var(--radius);padding:20px;text-align:center;color:#991B1B;font-weight:600}
/* Tool-specific */
.due-card{background:var(--card);border:2px solid var(--border);border-radius:var(--radius);padding:16px 20px;margin-bottom:12px;display:flex;justify-content:space-between;align-items:center;gap:16px;transition:border-color 0.2s}
.due-card:hover{border-color:var(--primary-light)}
.due-card.overdue{border-color:var(--danger);background:#FEF2F2}
.due-card.upcoming{border-color:var(--accent);background:#FFFBEB}
.due-card.done{border-color:var(--success);background:#F0FDF4;opacity:0.7}
.due-left{flex:1;min-width:0}
.due-form{font-family:var(--font-mono);font-size:12px;font-weight:700;color:var(--primary);background:var(--surface-alt);padding:2px 8px;border-radius:4px;display:inline-block;margin-bottom:4px}
.due-desc{font-size:14px;font-weight:600;color:var(--text);margin-bottom:2px}
.due-period{font-size:12px;color:var(--text-muted)}
.due-right{text-align:right;flex-shrink:0}
.due-date{font-family:var(--font-mono);font-size:16px;font-weight:700;color:var(--primary-dark)}
.due-status{font-size:11px;font-weight:700;padding:2px 8px;border-radius:10px;display:inline-block;margin-top:4px}
.status-overdue{background:#FEE2E2;color:#DC2626}
.status-upcoming{background:#FEF3C7;color:#B45309}
.status-filed{background:#D1FAE5;color:#059669}
.status-future{background:#F3F4F6;color:#6B7280}
.month-tabs{display:flex;overflow-x:auto;gap:4px;margin-bottom:20px;padding-bottom:4px;-webkit-overflow-scrolling:touch}
.month-tab{padding:8px 14px;border:2px solid var(--border);border-radius:var(--radius);font-size:13px;font-weight:600;color:var(--text-muted);background:var(--card);cursor:pointer;white-space:nowrap;transition:all 0.2s}
.month-tab.active{border-color:var(--primary);color:var(--primary);background:rgba(27,77,62,0.04)}
.month-tab:hover{border-color:var(--primary-light)}
.filter-bar{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:16px}
.filter-chip{padding:6px 14px;border:1px solid var(--border);border-radius:20px;font-size:12px;font-weight:600;color:var(--text-muted);background:var(--card);cursor:pointer;transition:all 0.2s}
.filter-chip.active{border-color:var(--primary);color:#fff;background:var(--primary)}
.filter-chip:hover{border-color:var(--primary-light)}
.legend{display:flex;flex-wrap:wrap;gap:12px;margin-bottom:16px;font-size:12px}
.legend-item{display:flex;align-items:center;gap:4px}
.legend-dot{width:10px;height:10px;border-radius:50%;flex-shrink:0}
/* ====== RESPONSIVE &mdash; TABLET (768-1024px) ====== */
@media(max-width:1024px){
.main-layout{padding:0 16px 32px}
.hero{padding:28px 16px 20px}
.tldr{margin-left:16px;margin-right:16px}
.calc-card{padding:28px}
.content-section{padding:28px}
}

/* ====== RESPONSIVE &mdash; SMALL TABLET / LARGE PHONE (481-767px) ====== */
@media(max-width:899px){
.hero h1{font-size:26px}
.calc-card{padding:20px}
.content-section{padding:20px}
.toc-nav a{padding:10px 12px;font-size:12px}
.due-card{flex-direction:column;align-items:flex-start;gap:8px}
.due-right{text-align:left}
.toggle-group{flex-wrap:wrap}
.toggle-btn{flex:1 1 auto;min-width:0;padding:10px 12px;font-size:13px}
.toggle-btn small{display:none}
.rate-table thead th{padding:10px 12px;font-size:11px}
.rate-table tbody td{padding:10px 12px;font-size:13px}
.result-value{font-size:18px}
.sidebar-col{order:2}
.formula-box{padding:16px 18px;font-size:13px}
.month-tab{padding:6px 10px;font-size:12px}
}

/* ====== RESPONSIVE &mdash; MOBILE (max 480px) ====== */
@media(max-width:480px){
.hero{padding:20px 14px 16px}
.hero h1{font-size:22px}
.hero-meta{gap:8px}
.badge-updated{font-size:11px;padding:3px 10px}
.author-byline{font-size:12px}
.tldr{padding:16px 18px;margin-left:14px;margin-right:14px}
.tldr p{font-size:14px}
.main-layout{padding:0 14px 24px;gap:24px}
.calc-card{padding:16px;margin-bottom:24px}
.calc-card h2{font-size:19px;margin-bottom:16px}
.content-section{padding:16px;margin-bottom:24px}
.content-section h2{font-size:20px}
.content-section h3{font-size:16px}
.content-section p{font-size:14px}
.toggle-group{flex-direction:column}
.toggle-btn{padding:12px 14px;font-size:14px;text-align:center}
.toggle-btn small{display:inline}
.calc-row{gap:14px;margin-bottom:14px}
.form-group label{font-size:12px}
.form-group input,.form-group select{padding:10px 14px;font-size:15px}
.form-group input[type="number"]{font-size:16px}
.btn-calculate{padding:12px;font-size:15px}
.rate-table{font-size:12px}
.rate-table thead th{padding:8px 10px;font-size:10px;letter-spacing:0}
.rate-table tbody td{padding:8px 10px;font-size:12px}
.formula-box{padding:14px 16px;font-size:12px;line-height:1.7}
.callout{padding:14px 16px}
.callout p{font-size:13px}
.faq-question{padding:14px 16px;font-size:14px}
.faq-answer-inner{padding:0 16px 14px;font-size:13px}
.faq-icon{width:22px;height:22px;font-size:14px}
.sidebar-card{padding:20px}
.sidebar-card h3{font-size:15px}
.sidebar-link{padding:8px 12px;font-size:13px}
.cta-card{padding:22px 20px}
.cta-card h3{font-size:16px}
.cta-card p{font-size:13px}
.cta-btn{padding:10px 24px;font-size:13px}
.due-card{padding:14px 16px}
.due-form{font-size:11px}
.due-desc{font-size:13px}
.due-date{font-size:14px}
.due-status{font-size:10px}
.month-tabs{gap:3px}
.month-tab{padding:5px 8px;font-size:11px;border-width:1.5px}
.legend{gap:8px;font-size:11px}
.breadcrumb{font-size:12px;padding:12px 14px 0}
.toc-nav a{padding:8px 10px;font-size:11px}
}

/* ====== RESPONSIVE &mdash; VERY SMALL (max 360px) ====== */
@media(max-width:360px){
.hero h1{font-size:20px}
.calc-card{padding:14px}
.content-section{padding:14px}
.content-section h2{font-size:18px}
.rate-table thead th{font-size:9px;padding:6px 8px}
.rate-table tbody td{font-size:11px;padding:6px 8px}
.month-tab{padding:4px 6px;font-size:10px}
.toggle-btn{font-size:13px;padding:10px 12px}
}

@media(max-width:899px){.main-layout{grid-template-columns:1fr!important;gap:24px}.sidebar-col{order:2}.content-col{order:1}}

/* Tool-specific: Composition Eligibility */
.yn-group{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:4px;gap:4px;max-width:200px}
.yn-btn{flex:1;padding:8px 16px;border:none;border-radius:8px;font-family:var(--font-body);font-size:13px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.25s}
.yn-btn.active{background:var(--card);color:var(--primary);box-shadow:var(--shadow-sm)}
.yn-btn.active.sel-yes{color:var(--danger)}
.yn-btn.active.sel-no{color:var(--success)}
.check-row{display:flex;align-items:center;justify-content:space-between;gap:16px;padding:14px 0;border-bottom:1px solid var(--border)}
.check-row:last-child{border-bottom:none}
.check-label{font-size:14px;font-weight:500;color:var(--text);flex:1}
.res-panel{display:none;margin-top:24px}
.res-panel.visible{display:block;animation:fadeUp 0.4s ease}
@keyframes fadeUp{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:translateY(0)}}
.res-hero{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:20px}
.res-box{padding:22px;border-radius:var(--radius);text-align:center}
.res-box.eligible{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.res-box.ineligible{background:linear-gradient(135deg,#dc2626,#ef4444);color:#fff}
.res-box.savings{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.res-box.rate{background:linear-gradient(135deg,#0d9488,#06b6d4);color:#fff}
.res-box .rb-label{font-size:12px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.res-box .rb-value{font-size:clamp(1.4rem,3vw,1.8rem);font-weight:800;margin-top:4px}
.res-box .rb-sub{font-size:12px;opacity:.8;margin-top:2px}
.res-card{background:var(--card);border:1px solid var(--border);border-radius:var(--radius);margin-bottom:16px;overflow:hidden}
.res-card-hd{display:flex;align-items:center;justify-content:space-between;padding:14px 20px;border-bottom:1px solid var(--border);background:var(--surface)}
.res-card-hd h3{font-size:15px;font-weight:700;color:var(--primary-dark)}
.res-badge{font-size:11px;font-weight:700;padding:3px 10px;border-radius:20px;text-transform:uppercase;letter-spacing:.5px}
.res-badge.pass{background:#D1FAE5;color:#059669}
.res-badge.fail{background:#FEE2E2;color:#DC2626}
.res-badge.info{background:#DBEAFE;color:#2563EB}
.res-badge.teal{background:#CCFBF1;color:#0D9488}
.res-card-bd{padding:20px}
.chk-list{list-style:none;padding:0;margin:0}
.chk-list li{display:flex;align-items:flex-start;gap:10px;padding:10px 0;border-bottom:1px solid var(--border);font-size:14px;line-height:1.5}
.chk-list li:last-child{border-bottom:none}
.chk-icon{width:22px;height:22px;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;font-size:12px;font-weight:700}
.chk-icon.pass{background:#D1FAE5;color:#059669}
.chk-icon.fail{background:#FEE2E2;color:#DC2626}
.cmp-table{width:100%;border-collapse:collapse;font-size:14px;margin:0}
.cmp-table th{background:var(--primary);color:#fff;padding:12px 16px;text-align:left;font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:.3px}
.cmp-table th:first-child{border-radius:var(--radius) 0 0 0}
.cmp-table th:last-child{border-radius:0 var(--radius) 0 0}
.cmp-table td{padding:10px 16px;border-bottom:1px solid var(--border);color:var(--text-secondary)}
.cmp-table tr:nth-child(even){background:var(--surface)}
.cmp-table .hi{font-weight:700;color:var(--success)}
.cmp-table .neg{color:var(--danger);font-weight:600}
.res-actions{display:flex;gap:12px;margin-top:20px;flex-wrap:wrap}
.ra-btn{display:inline-flex;align-items:center;gap:8px;padding:12px 20px;border-radius:8px;font-size:14px;font-weight:600;text-decoration:none;transition:all 0.2s;border:1.5px solid var(--border);color:var(--text);background:var(--card);font-family:var(--font-body)}
.ra-btn:hover{border-color:var(--primary);color:var(--primary);transform:translateY(-1px)}
.ra-btn svg{width:18px;height:18px}
.callout.green{background:#F0FDF4;border-left-color:var(--success)}
.callout.green p{color:#166534}
.callout.green strong{color:#14532D}
@media(max-width:899px){.res-hero{grid-template-columns:1fr}.check-row{flex-direction:column;align-items:flex-start;gap:8px}.yn-group{max-width:100%}}
@media(max-width:480px){.res-hero{grid-template-columns:1fr}.res-actions{flex-direction:column}.ra-btn{width:100%;justify-content:center}.check-row{flex-direction:column;gap:8px}.yn-group{max-width:100%}}


/* Tool-specific: GST Rate Finder */
.search-wrap{position:relative;margin-bottom:20px}
.search-wrap input{width:100%;padding:14px 18px 14px 48px;border:2px solid var(--border);border-radius:var(--radius);font-family:var(--font-body);font-size:16px;color:var(--text);background:var(--card);transition:border-color 0.2s;outline:none}
.search-wrap input:focus{border-color:var(--primary)}
.search-wrap .search-icon{position:absolute;left:16px;top:50%;transform:translateY(-50%);width:20px;height:20px;color:var(--text-muted)}
.search-wrap .clear-btn{position:absolute;right:14px;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;color:var(--text-muted);font-size:18px;display:none;padding:4px}
.filter-chips{display:flex;gap:6px;flex-wrap:wrap;margin-bottom:16px}
.fc{padding:6px 14px;border:1.5px solid var(--border);border-radius:20px;font-size:12px;font-weight:600;color:var(--text-muted);background:var(--card);cursor:pointer;transition:all 0.2s}
.fc:hover{border-color:var(--primary-light)}
.fc.active{border-color:var(--primary);color:#fff;background:var(--primary)}
.results-count{font-size:13px;color:var(--text-muted);margin-bottom:12px;font-weight:500}
.rate-row{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:14px 18px;border:1.5px solid var(--border);border-radius:var(--radius);margin-bottom:8px;background:var(--card);transition:all 0.2s;cursor:default}
.rate-row:hover{border-color:var(--primary-light);box-shadow:var(--shadow-sm)}
.rate-row .rr-left{flex:1;min-width:0}
.rate-row .rr-code{font-family:var(--font-mono);font-size:13px;font-weight:700;color:var(--primary);background:var(--surface-alt);padding:2px 8px;border-radius:4px;display:inline-block;margin-bottom:4px}
.rate-row .rr-desc{font-size:14px;color:var(--text);font-weight:500;line-height:1.4}
.rate-row .rr-type{font-size:11px;color:var(--text-muted);margin-top:2px}
.rate-row .rr-rate{font-family:var(--font-mono);font-size:18px;font-weight:800;color:var(--primary-dark);white-space:nowrap;min-width:60px;text-align:right}
.rate-row .rr-rate.r0{color:var(--success)}
.rate-row .rr-rate.r5{color:#B45309}
.rate-row .rr-rate.r12{color:var(--info)}
.rate-row .rr-rate.r18{color:var(--primary)}
.rate-row .rr-rate.r28{color:var(--danger)}
.no-results-msg{text-align:center;padding:40px 20px;color:var(--text-muted);font-size:15px}
.load-more{display:block;width:100%;padding:12px;background:var(--surface);border:1.5px solid var(--border);border-radius:var(--radius);font-family:var(--font-body);font-size:14px;font-weight:600;color:var(--primary);cursor:pointer;text-align:center;margin-top:12px;transition:all 0.2s}
.load-more:hover{background:var(--surface-alt);border-color:var(--primary)}
@media(max-width:480px){.rate-row{flex-direction:column;align-items:flex-start;gap:8px}.rate-row .rr-rate{text-align:left}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#finder">Rate Finder</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#about-hsn">About HSN/SAC</a>
        <a href="#requirements">Requirements</a>
        <a href="#rate-slabs">Rate Slabs</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<header class="hero" id="finder">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>GST Rate Finder <span>by HSN/SAC Code</span> &mdash; 250+ Items</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Search through 250+ HSN codes (goods) and SAC codes (services) to find the applicable GST rate instantly. Enter a product name, service description, or HSN/SAC code number. Filter by rate slab (0%, 5%, 12%, 18%, 28%) or type (Goods/Services). Results show the code, description, GST rate, and CGST/SGST/IGST split. Based on the latest <a href="https://cbic-gst.gov.in/gst-goods-services-rates.html" target="_blank" rel="noopener">CBIC rate notifications</a> for FY 2025-26.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Search GST Rates by HSN/SAC Code</h2>
            <noscript><div class="noscript-box">This tool requires JavaScript. Please enable JavaScript or <a href="https://wa.me/919459456700">contact our CA team</a>.</div></noscript>

            <div class="search-wrap">
                <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                <input type="text" id="searchInput" placeholder="Search by product name, service, or HSN/SAC code..." oninput="doSearch()">
                <button class="clear-btn" id="clearBtn" onclick="clearSearch()">&times;</button>
            </div>

            <div class="filter-chips">
                <span class="fc active" data-filter="all" onclick="setFilter('all',this)">All</span>
                <span class="fc" data-filter="goods" onclick="setFilter('goods',this)">Goods</span>
                <span class="fc" data-filter="services" onclick="setFilter('services',this)">Services</span>
                <span class="fc" data-filter="0" onclick="setFilter('0',this)">0% Exempt</span>
                <span class="fc" data-filter="5" onclick="setFilter('5',this)">5%</span>
                <span class="fc" data-filter="12" onclick="setFilter('12',this)">12%</span>
                <span class="fc" data-filter="18" onclick="setFilter('18',this)">18%</span>
                <span class="fc" data-filter="28" onclick="setFilter('28',this)">28%</span>
            </div>

            <div class="results-count" id="resCount">Type to search or click a filter to browse</div>
            <div id="resList"></div>
            <button class="load-more" id="loadMore" style="display:none" onclick="loadMore()">Load More Results</button>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the GST Rate Finder</h2>
            <p>This tool provides instant GST rate lookup for goods and services using HSN and SAC codes. Here is how to find the correct rate for your product or service:</p>
            <h3>Step 1 &mdash; Search by Name or Code</h3>
            <p>Enter a product name (e.g., &ldquo;rice&rdquo;, &ldquo;laptop&rdquo;, &ldquo;accounting&rdquo;), service description, or the numeric HSN/SAC code. Results update as you type with fuzzy matching.</p>
            <h3>Step 2 &mdash; Filter by Category</h3>
            <p>Use the filter chips to narrow results by type (Goods or Services) or by GST rate slab (0%, 5%, 12%, 18%, 28%). This helps browse items within a specific rate bracket.</p>
            <h3>Step 3 &mdash; View Rate Details</h3>
            <p>Each result shows the HSN/SAC code, description, GST rate, and whether it is Goods (HSN) or Services (SAC). The rate applies equally: for intra-state supplies it splits as CGST + SGST, for inter-state as IGST.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Always verify the HSN/SAC code against the official <a href="https://services.gst.gov.in/services/searchhsnsac" target="_blank" rel="noopener">GST portal HSN search</a> before using on invoices. Some products have conditional rates based on value, brand, or composition. When in doubt, consult the relevant <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC notification</a> or your CA.</p>
            </div>
        </section>

        <section class="content-section" id="about-hsn">
            <h2>Understanding HSN and SAC Codes</h2>
            <p><strong>HSN (Harmonized System of Nomenclature)</strong> is an international classification system developed by the <a href="https://www.wcoomd.org/" target="_blank" rel="noopener">World Customs Organization</a>, used by 200+ countries. In India, HSN codes classify goods for GST purposes using up to 8 digits. The structure is hierarchical: first 2 digits = Chapter, next 2 = Heading, next 2 = Sub-heading, last 2 = Tariff item (India-specific).</p>
            <p><strong>SAC (Services Accounting Code)</strong> is India&rsquo;s 6-digit classification for services under GST. All SAC codes start with &ldquo;99&rdquo;. For example, 9982 covers legal services and 9983 covers accounting and auditing. SAC codes are maintained by <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a> and are mandatory on all service invoices.</p>
            <p>Both HSN and SAC codes serve three critical purposes: they determine the applicable GST rate, standardize classification across the country, and facilitate accurate reporting in GSTR-1 HSN summary.</p>
        </section>

        <section class="content-section" id="requirements">
            <h2>HSN Code Requirements on GST Invoices</h2>
            <p>As per <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC Notification No. 78/2020</a> (effective April 2021), HSN/SAC codes are mandatory on invoices based on turnover:</p>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Aggregate Turnover</th><th>HSN Digits Required</th><th>On Invoice</th><th>In GSTR-1</th></tr></thead>
                <tbody>
                    <tr><td>Up to &#8377;1.5 Crore</td><td>Optional</td><td>Optional</td><td>Optional</td></tr>
                    <tr><td>&#8377;1.5 Cr &ndash; &#8377;5 Crore</td><td>4 digits</td><td>Mandatory</td><td>Mandatory</td></tr>
                    <tr><td>Above &#8377;5 Crore</td><td>6 digits</td><td>Mandatory</td><td>Mandatory</td></tr>
                    <tr><td>Imports / Exports</td><td>8 digits</td><td>Mandatory</td><td>Mandatory</td></tr>
                </tbody>
            </table>
            </div>
            <div class="callout warn">
                <p><strong>E-Invoice Requirement:</strong> For businesses generating e-invoices on the IRP portal, accurate HSN/SAC codes are mandatory. Incorrect codes will cause the e-invoice to be rejected. The <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal&rsquo;s</a> AI-powered HSN search tool matches codes against the e-invoice database for validation.</p>
            </div>
        </section>

        <section class="content-section" id="rate-slabs">
            <h2>GST Rate Slabs &mdash; FY 2025-26</h2>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Rate</th><th>CGST</th><th>SGST</th><th>Applicable To</th></tr></thead>
                <tbody>
                    <tr><td><strong>0% (Exempt)</strong></td><td>0%</td><td>0%</td><td>Fresh food, milk, healthcare, education, agricultural produce</td></tr>
                    <tr><td><strong>5%</strong></td><td>2.5%</td><td>2.5%</td><td>Essential goods, packaged food, economy footwear, transport</td></tr>
                    <tr><td><strong>12%</strong></td><td>6%</td><td>6%</td><td>Processed food, computers, mobile phones, business class air</td></tr>
                    <tr><td><strong>18%</strong></td><td>9%</td><td>9%</td><td>Most goods &amp; services, electronics, professional services, software</td></tr>
                    <tr><td><strong>28%</strong></td><td>14%</td><td>14%</td><td>Luxury goods, automobiles, tobacco, aerated beverages, cement</td></tr>
                </tbody>
            </table>
            </div>
            <p style="font-size:13px;color:var(--text-muted);">Some goods attract additional Compensation Cess above 28%. Always verify rates from the latest <a href="https://cbic-gst.gov.in/gst-goods-services-rates.html" target="_blank" rel="noopener">CBIC rate schedule</a>.</p>
        </section>

        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need help with GST classification?</strong> Our CAs help with correct HSN/SAC classification, invoice compliance, and GST return filing. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20HSN%20classification%20and%20GST%20rates.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions &mdash; GST Rates &amp; HSN/SAC</h2>
            <div id="faqList"></div>
        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Need GST Help?</h3>
            <p>Our CAs help with HSN classification, invoicing, return filing &amp; GST compliance across India.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20GST%20rates%20and%20HSN%20codes." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>GST Services</h3>
            <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a>
            <a href="/gst-annual-return-filing" class="sidebar-link">GST Annual Return <span class="arrow">&rarr;</span></a>
            <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit <span class="arrow">&rarr;</span></a>
            <a href="/gst-cancellation" class="sidebar-link">GST Cancellation <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/invoice-generator" class="sidebar-link">GST Invoice Generator <span class="arrow">&rarr;</span></a>
            <a href="/tools/itc-eligibility-checker" class="sidebar-link">ITC Eligibility Checker <span class="arrow">&rarr;</span></a>
            <a href="/tools/rcm-calculator" class="sidebar-link">RCM Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-penalty-calculator" class="sidebar-link">GST Penalty Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-return-due-date-tracker" class="sidebar-link">GST Due Date Tracker <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
        </div>
    </aside>
</div>

<script>
var DB=[
// 0% Exempt
{c:"0401",d:"Fresh milk, pasteurised milk, curd, lassi, buttermilk",r:0,t:"g"},{c:"0701",d:"Fresh potatoes",r:0,t:"g"},{c:"0702",d:"Fresh tomatoes",r:0,t:"g"},{c:"0713",d:"Dried leguminous vegetables (pulses, lentils, chickpeas)",r:0,t:"g"},{c:"1001",d:"Wheat and meslin",r:0,t:"g"},{c:"1006",d:"Rice (other than pre-packaged branded)",r:0,t:"g"},{c:"1101",d:"Wheat or meslin flour (atta, maida, suji)",r:0,t:"g"},{c:"0801",d:"Coconuts, Brazil nuts, cashew nuts (fresh)",r:0,t:"g"},{c:"2201",d:"Water (not aerated, mineral, purified) in 20L+ container",r:0,t:"g"},{c:"4901",d:"Printed books, newspapers, periodicals",r:0,t:"g"},{c:"0803",d:"Bananas and plantains, fresh",r:0,t:"g"},{c:"3006",d:"Contraceptives",r:0,t:"g"},{c:"0511",d:"Human blood and its components",r:0,t:"g"},{c:"0301",d:"Live fish",r:0,t:"g"},{c:"0901",d:"Unprocessed green tea leaves",r:0,t:"g"},{c:"1201",d:"Soya beans",r:0,t:"g"},{c:"2302",d:"Bran, sharps, residues of cereals",r:0,t:"g"},
{c:"9993",d:"Healthcare services (clinical, hospital, paramedical)",r:0,t:"s"},{c:"9992",d:"Educational services (school, college, university)",r:0,t:"s"},{c:"9972",d:"Renting of residential dwelling for personal use",r:0,t:"s"},{c:"9967",d:"Public transport (non-AC bus, metro, local train)",r:0,t:"s"},
// 5%
{c:"0402",d:"Milk powder, condensed milk, UHT milk",r:5,t:"g"},{c:"0901",d:"Tea (branded, packaged)",r:5,t:"g"},{c:"0902",d:"Coffee (branded, packaged)",r:5,t:"g"},{c:"1905",d:"Bread, pizza base, rusks, toasted bread",r:5,t:"g"},{c:"1701",d:"Sugar (cane or beet)",r:5,t:"g"},{c:"3004",d:"Medicines, drugs, pharmaceuticals",r:5,t:"g"},{c:"4802",d:"Exercise books, graph books, laboratory notebooks",r:5,t:"g"},{c:"6401",d:"Footwear with retail price up to Rs 1,000",r:5,t:"g"},{c:"8471",d:"Personal computers, laptops (up to Rs 50,000)",r:5,t:"g"},{c:"6115",d:"Socks, stockings",r:5,t:"g"},{c:"2106",d:"Namkeens, bhujia (branded, packaged)",r:5,t:"g"},{c:"1904",d:"Puffed rice, flattened rice (branded, packaged)",r:5,t:"g"},{c:"2711",d:"LPG for domestic use",r:5,t:"g"},{c:"8414",d:"Hand-operated fans",r:5,t:"g"},{c:"4901",d:"Braille paper, braille watches",r:5,t:"g"},{c:"8713",d:"Wheelchair and invalid carriages",r:5,t:"g"},
{c:"9964",d:"Passenger transport by rail (non-AC, sleeper)",r:5,t:"s"},{c:"9964",d:"Passenger transport by air (economy class)",r:5,t:"s"},{c:"9963",d:"Restaurant services (non-AC, no alcohol)",r:5,t:"s"},{c:"9972",d:"Renting of motor vehicle with fuel to non-body corporate",r:5,t:"s"},
// 12%
{c:"1902",d:"Pasta, noodles, macaroni",r:12,t:"g"},{c:"1704",d:"Sugar confectionery, white chocolate",r:12,t:"g"},{c:"1806",d:"Chocolate and cocoa preparations",r:12,t:"g"},{c:"2009",d:"Fruit juices (branded, packaged)",r:12,t:"g"},{c:"2202",d:"Flavoured water, soft drinks (non-aerated)",r:12,t:"g"},{c:"3926",d:"Plastic articles (buttons, table/kitchenware)",r:12,t:"g"},{c:"4415",d:"Plywood, veneered panels",r:12,t:"g"},{c:"6109",d:"T-shirts, singlets, tank tops",r:12,t:"g"},{c:"6203",d:"Men's suits, jackets, trousers",r:12,t:"g"},{c:"6204",d:"Women's suits, dresses, skirts (above Rs 1,000)",r:12,t:"g"},{c:"7013",d:"Glassware for table, kitchen use",r:12,t:"g"},{c:"7323",d:"Stainless steel utensils, kitchen articles",r:12,t:"g"},{c:"8415",d:"Air conditioning machines (split AC, window AC)",r:12,t:"g"},{c:"8418",d:"Refrigerators, freezers",r:12,t:"g"},{c:"8443",d:"Printers, fax machines, photocopiers",r:12,t:"g"},{c:"8471",d:"Computers, laptops, tablets",r:12,t:"g"},{c:"8517",d:"Mobile phones, smartphones",r:12,t:"g"},{c:"8528",d:"LED/LCD television sets",r:12,t:"g"},
{c:"9964",d:"Passenger transport by air (business class)",r:12,t:"s"},{c:"9954",d:"Construction services (affordable housing, PMAY)",r:12,t:"s"},{c:"9965",d:"Goods transport agency (GTA) with ITC",r:12,t:"s"},
// 18%
{c:"1704",d:"Chewing gum, bubble gum",r:18,t:"g"},{c:"2103",d:"Sauces, ketchup, mustard",r:18,t:"g"},{c:"2106",d:"Protein powders, food supplements",r:18,t:"g"},{c:"3304",d:"Beauty products, cosmetics, skincare",r:18,t:"g"},{c:"3305",d:"Shampoo, hair care products",r:18,t:"g"},{c:"3306",d:"Toothpaste, oral hygiene products",r:18,t:"g"},{c:"3401",d:"Soap, detergent, washing preparations",r:18,t:"g"},{c:"3808",d:"Insecticides, fungicides, herbicides",r:18,t:"g"},{c:"3923",d:"Plastic packaging material, bags",r:18,t:"g"},{c:"3925",d:"Plastic builders' ware (doors, windows, shutters)",r:18,t:"g"},{c:"4011",d:"New pneumatic rubber tyres",r:18,t:"g"},{c:"4819",d:"Cartons, boxes, paper bags",r:18,t:"g"},{c:"6401",d:"Footwear above Rs 1,000",r:18,t:"g"},{c:"6802",d:"Marble, granite, natural stone",r:18,t:"g"},{c:"6910",d:"Ceramic sanitary fixtures",r:18,t:"g"},{c:"7210",d:"Steel products (flat-rolled, coated)",r:18,t:"g"},{c:"7308",d:"Iron/steel structures, parts",r:18,t:"g"},{c:"7615",d:"Aluminium utensils, table articles",r:18,t:"g"},{c:"8414",d:"Fans, blowers (electric)",r:18,t:"g"},{c:"8419",d:"Water heaters, geysers",r:18,t:"g"},{c:"8422",d:"Dish washing machines",r:18,t:"g"},{c:"8450",d:"Washing machines",r:18,t:"g"},{c:"8501",d:"Electric motors, generators",r:18,t:"g"},{c:"8504",d:"Electrical transformers, UPS, inverters",r:18,t:"g"},{c:"8506",d:"Batteries (primary cells)",r:18,t:"g"},{c:"8507",d:"Lithium-ion batteries",r:18,t:"g"},{c:"8516",d:"Electric water heaters, hair dryers, irons",r:18,t:"g"},{c:"8523",d:"Pen drives, memory cards, hard drives",r:18,t:"g"},{c:"8539",d:"LED lamps, bulbs, tube lights",r:18,t:"g"},{c:"8544",d:"Insulated wires, cables",r:18,t:"g"},{c:"9401",d:"Seats, chairs (other than aircraft/motor vehicle)",r:18,t:"g"},{c:"9403",d:"Furniture (tables, desks, cabinets)",r:18,t:"g"},{c:"9404",d:"Mattresses, sleeping bags",r:18,t:"g"},{c:"9405",d:"Lamps, light fittings, chandeliers",r:18,t:"g"},{c:"2523",d:"Portland cement, aluminous cement, slag cement",r:18,t:"g"},
{c:"9971",d:"Financial and insurance services",r:18,t:"s"},{c:"9982",d:"Legal services, arbitration, mediation",r:18,t:"s"},{c:"9983",d:"Accounting, auditing, bookkeeping, CA services",r:18,t:"s"},{c:"9983",d:"Tax consultancy and preparation services",r:18,t:"s"},{c:"9984",d:"Telecommunication services",r:18,t:"s"},{c:"9985",d:"IT services, software development, SaaS",r:18,t:"s"},{c:"9986",d:"Business support services, BPO, KPO",r:18,t:"s"},{c:"9987",d:"Maintenance and repair services",r:18,t:"s"},{c:"9988",d:"Manufacturing services on physical inputs",r:18,t:"s"},{c:"9954",d:"Construction services (commercial, non-PMAY residential)",r:18,t:"s"},{c:"9961",d:"Scientific and technical consulting",r:18,t:"s"},{c:"9962",d:"Architectural and engineering services",r:18,t:"s"},{c:"9963",d:"Restaurant services (AC, alcohol-serving)",r:18,t:"s"},{c:"9964",d:"Courier and postal services",r:18,t:"s"},{c:"9968",d:"Warehousing and storage services",r:18,t:"s"},{c:"9969",d:"Cleaning and housekeeping services",r:18,t:"s"},{c:"9971",d:"Banking and financial intermediation",r:18,t:"s"},{c:"9973",d:"Leasing of machinery, equipment without operator",r:18,t:"s"},{c:"9981",d:"Management consulting services",r:18,t:"s"},{c:"9982",d:"Advocate and legal advisory services",r:18,t:"s"},{c:"9985",d:"Cloud computing, web hosting, data processing",r:18,t:"s"},{c:"9996",d:"Event management, entertainment services",r:18,t:"s"},{c:"9997",d:"Other professional, technical services",r:18,t:"s"},{c:"9995",d:"Security and investigation services",r:18,t:"s"},{c:"9994",d:"Sewage and waste management services",r:18,t:"s"},
// 28%
{c:"2106",d:"Pan masala (containing tobacco)",r:28,t:"g"},{c:"2401",d:"Unmanufactured tobacco, tobacco refuse",r:28,t:"g"},{c:"2402",d:"Cigars, cigarettes, tobacco products",r:28,t:"g"},{c:"2202",d:"Aerated water, carbonated beverages",r:28,t:"g"},{c:"8703",d:"Motor cars, SUVs (petrol/diesel engine > 1200cc/1500cc)",r:28,t:"g"},{c:"8711",d:"Motorcycles with engine > 350cc",r:28,t:"g"},{c:"8802",d:"Aircraft, helicopters (for personal use)",r:28,t:"g"},{c:"8903",d:"Yachts, pleasure boats",r:28,t:"g"},{c:"9504",d:"Video game consoles, gaming machines",r:28,t:"g"},{c:"3303",d:"Perfumes, eau de toilette",r:28,t:"g"},{c:"3304",d:"Sunscreen with SPF (beauty product category)",r:28,t:"g"},{c:"7113",d:"Gold/silver jewellery, imitation jewellery (28% on imported)",r:28,t:"g"},
{c:"9996",d:"Gambling, betting, casinos, race club services",r:28,t:"s"},{c:"9996",d:"Amusement park, theme park services",r:28,t:"s"}
];

var filter='all',page=0,PER=20,filtered=[];
function setFilter(f,el){filter=f;document.querySelectorAll('.fc').forEach(function(c){c.classList.remove('active');});el.classList.add('active');page=0;doSearch();}
function clearSearch(){document.getElementById('searchInput').value='';document.getElementById('clearBtn').style.display='none';page=0;doSearch();}
function loadMore(){page++;render();}

function doSearch(){
var q=document.getElementById('searchInput').value.trim().toLowerCase();
document.getElementById('clearBtn').style.display=q?'block':'none';
filtered=DB.filter(function(item){
var matchFilter=true;
if(filter==='goods')matchFilter=item.t==='g';
else if(filter==='services')matchFilter=item.t==='s';
else if(filter!=='all')matchFilter=item.r===parseInt(filter);
if(!matchFilter)return false;
if(!q)return true;
return item.c.toLowerCase().indexOf(q)!==-1||item.d.toLowerCase().indexOf(q)!==-1;
});
page=0;render();
}

function render(){
var el=document.getElementById('resList');
var count=document.getElementById('resCount');
var more=document.getElementById('loadMore');
var show=(page+1)*PER;
var visible=filtered.slice(0,show);
if(filtered.length===0){
var q=document.getElementById('searchInput').value.trim();
el.innerHTML='<div class="no-results-msg">'+(q?'No matching codes found for "'+q+'". Try a broader term.':'No items match this filter.')+'</div>';
count.textContent='0 results';
more.style.display='none';
return;
}
count.textContent=filtered.length+' result'+(filtered.length!==1?'s':'')+' found';
var h='';
visible.forEach(function(item){
var rc=item.r===0?'r0':item.r===5?'r5':item.r===12?'r12':item.r===18?'r18':'r28';
h+='<div class="rate-row"><div class="rr-left"><span class="rr-code">'+item.c+'</span><div class="rr-desc">'+item.d+'</div><div class="rr-type">'+(item.t==='g'?'Goods (HSN)':'Services (SAC)')+'</div></div><div class="rr-rate '+rc+'">'+item.r+'%</div></div>';
});
el.innerHTML=h;
more.style.display=show<filtered.length?'block':'none';
}

var FAQS=[
{q:"How to find the GST rate for a product or service?",a:"Enter the product name, service description, or HSN/SAC code in the search bar above. Results show matching items with GST rate. You can also filter by rate slab (0%, 5%, 12%, 18%, 28%) or by type (Goods/Services)."},
{q:"What is an HSN code and why is it required?",a:"HSN (Harmonized System of Nomenclature) is an international 6\u20138 digit classification for goods. Under GST, HSN codes are mandatory on invoices to determine correct tax rates. 6 digits for turnover above \u20B95 Cr, 4 digits for \u20B91.5\u20135 Cr."},
{q:"What is a SAC code?",a:"SAC (Services Accounting Code) is India\u2019s 6-digit classification for services under GST. All SAC codes start with 99. Example: 9982 = Legal, 9983 = Accounting/Auditing. Mandatory on all service invoices."},
{q:"How many digits of HSN are required on invoices?",a:"Above \u20B95 Cr: 6 digits. \u20B91.5\u20135 Cr: 4 digits. Below \u20B91.5 Cr: optional. Imports/exports: always 8 digits. Check CBIC Notification 78/2020 for details."},
{q:"What are the current GST rate slabs?",a:"Four main slabs: 5% (essentials), 12% (standard), 18% (most goods/services), 28% (luxury/sin goods). Plus 0% exempt and some items with additional compensation cess."},
{q:"Where can I find the official HSN code list?",a:"Official HSN search is at services.gst.gov.in under Search HSN Code. Also refer to CBIC website (cbic-gst.gov.in) for rate notifications and Customs Tariff Act schedule."},
{q:"What if wrong HSN code is used on invoice?",a:"Wrong HSN can cause incorrect GST rate, ITC mismatch, e-invoice rejection, GSTR-1 errors, and potential audit notices. Always verify against the GST portal before invoicing."},
{q:"Is HSN mandatory in GSTR-1?",a:"Yes. HSN summary in GSTR-1 is mandatory for all taxpayers. It must include quantity, taxable value, and tax amounts per HSN code. Digit requirements follow the same turnover rules as invoices."},
{q:"How is GST rate determined for a product?",a:"By HSN classification as notified by GST Council via CBIC notifications. The rate schedule maps each HSN to a slab. Some products have conditional rates based on value, brand, or composition."},
{q:"What is the difference between HSN and SAC?",a:"HSN classifies goods (international standard, 2\u20138 digits). SAC classifies services (India-specific, 6 digits starting with 99). Both determine applicable GST rates and are mandatory on invoices."},
{q:"Can the same product have different GST rates?",a:"Yes. Some products have rates based on value (footwear below/above \u20B91,000), brand status (unbranded food exempt vs branded at 5%), or packaging. Always check the specific notification."},
{q:"How to search HSN on GST portal?",a:"Visit gst.gov.in \u2192 Services \u2192 User Services \u2192 Search HSN Code. Enter 3+ characters of code or description. The AI-powered search matches against e-invoice database for accuracy."},
{q:"Are GST rates same for intra and inter-state?",a:"Total rate is the same. Intra-state: split as CGST + SGST (e.g., 9% + 9% = 18%). Inter-state: full rate as IGST (18%). Net tax burden is identical regardless of supply type."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();doSearch();});
</script>

@endsection