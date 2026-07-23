@extends('layouts.app')
@section('meta')
    <title>GST Composition Scheme Eligibility Checker | Sec 10</title>
    <meta name="description" content="GST composition scheme eligibility checker: see if you qualify under Section 10, with turnover limits, composition tax rates and likely savings. Check free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gst-composition-scheme-eligibility">
    <meta property="og:title" content="GST Composition Scheme Eligibility Checker 2026 | Patron Accounting">
    <meta property="og:description" content="Check if your business qualifies for GST Composition Scheme. Turnover limits, tax rates, savings comparison.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/gst-composition-scheme-eligibility">
    <meta property="og:image" content="/tools/og-gst-composition-scheme-eligibility.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Composition Scheme Eligibility Checker 2026">
    <meta name="twitter:description" content="Check if your business qualifies for GST Composition Scheme. Free tool with savings calculator.">
    <meta name="twitter:image" content="/tools/og-gst-composition-scheme-eligibility.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"GST Composition Scheme Eligibility Checker FY 2025-26","description":"Free online tool to check GST Composition Scheme eligibility under Section 10 of CGST Act. Verifies turnover limits, business type restrictions, and calculates tax savings comparison between composition and regular scheme for FY 2025-26.","url":"/tools/gst-composition-scheme-eligibility","applicationCategory":"UtilityApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","sameAs":["https://www.linkedin.com/company/patron-accounting"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"GST Composition Scheme Eligibility","item":"/tools/gst-composition-scheme-eligibility"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is the turnover limit for GST Composition Scheme in 2026?","acceptedAnswer":{"@type":"Answer","text":"The GST Composition Scheme turnover limit for FY 2025-26 is \u20B91.5 crore for manufacturers and traders of goods. For special category states including North-Eastern states and Himachal Pradesh, the limit is \u20B975 lakh. Service providers can opt under Section 10(2A) if turnover is below \u20B950 lakh. Turnover is calculated PAN-wise, not GSTIN-wise."}},{"@type":"Question","name":"Who is not eligible for GST Composition Scheme?","acceptedAnswer":{"@type":"Answer","text":"Businesses making interstate outward supplies, suppliers through e-commerce operators, manufacturers of ice cream pan masala or tobacco, casual taxable persons, non-resident taxable persons, and businesses supplying non-taxable goods like alcohol are not eligible. If multiple GSTINs exist under one PAN all must opt for composition collectively."}},{"@type":"Question","name":"What are the GST rates under Composition Scheme?","acceptedAnswer":{"@type":"Answer","text":"Traders and manufacturers of goods pay 1% GST split as 0.5% CGST plus 0.5% SGST. Restaurants not serving alcohol pay 5% GST split as 2.5% each. Service providers under Section 10(2A) pay 6% GST split as 3% each. These rates are significantly lower than standard GST rates of 5% to 28%."}},{"@type":"Question","name":"Can service providers opt for GST Composition Scheme?","acceptedAnswer":{"@type":"Answer","text":"Yes service providers with aggregate turnover up to \u20B950 lakh can opt under Section 10(2A) of CGST Act at 6% GST rate. Additionally goods suppliers under regular composition can supply services up to 10% of turnover or \u20B95 lakh whichever is higher. Restaurant services excluding alcohol are eligible at 5% rate."}},{"@type":"Question","name":"Can a composition dealer claim Input Tax Credit?","acceptedAnswer":{"@type":"Answer","text":"No a composition dealer cannot claim Input Tax Credit on purchases. Tax must be paid from the cash ledger only. This is a key disadvantage for businesses with high input costs. When switching from composition to regular scheme ITC on closing stock can be claimed by filing Form GST ITC-01 within 30 days."}},{"@type":"Question","name":"What returns does a composition dealer need to file?","acceptedAnswer":{"@type":"Answer","text":"Composition dealers file quarterly statement CMP-08 by the 18th of the month following each quarter for self-assessed tax payment. They also file annual return GSTR-4 by 30th April of the next financial year. No monthly GSTR-1 or GSTR-3B filing is required reducing compliance burden significantly."}},{"@type":"Question","name":"How to opt for Composition Scheme on GST Portal?","acceptedAnswer":{"@type":"Answer","text":"Existing taxpayers file Form GST CMP-02 on the GST portal before 31st March of the financial year. New registrations can opt during registration via Form GST REG-01. After opting in file stock intimation within 30 days. The application is auto-approved and no manual approval from tax authorities is needed."}},{"@type":"Question","name":"Can a composition dealer make interstate supplies?","acceptedAnswer":{"@type":"Answer","text":"No composition dealers cannot make interstate outward supplies of goods or services. Business operations are restricted to intra-state supplies only. Supplies to SEZ units are treated as interstate supplies and are therefore not allowed. If interstate business is required the dealer must switch to regular GST registration."}},{"@type":"Question","name":"What is the difference between composition scheme and regular GST?","acceptedAnswer":{"@type":"Answer","text":"Composition scheme offers lower tax rates of 1% to 6% versus standard 5% to 28%. It requires quarterly returns instead of monthly filing. However composition dealers cannot claim ITC cannot issue tax invoices cannot make interstate supplies and their buyers cannot claim ITC on purchases from them."}},{"@type":"Question","name":"What happens if turnover exceeds composition scheme limit?","acceptedAnswer":{"@type":"Answer","text":"If aggregate turnover exceeds \u20B91.5 crore during a financial year the taxpayer must immediately opt out by filing Form GST CMP-04 within 7 days. They must register as regular taxpayer and can claim ITC on closing stock by filing Form GST ITC-01 within 30 days of transition."}},{"@type":"Question","name":"Can a composition dealer issue a tax invoice?","acceptedAnswer":{"@type":"Answer","text":"No composition dealers cannot issue tax invoices as they cannot charge GST separately from customers. They must issue a Bill of Supply instead. The bill must display the words Composition Taxable Person Not Eligible to Collect Tax on Supplies prominently. Buyers cannot claim ITC on these purchases."}},{"@type":"Question","name":"Is reverse charge applicable to composition dealers?","acceptedAnswer":{"@type":"Answer","text":"Yes composition dealers are liable to pay GST under reverse charge mechanism at applicable standard rates for specified supplies received from unregistered persons or specified categories. However the composition dealer cannot claim ITC on the reverse charge tax paid. This amount is paid through the cash ledger only."}}]}
</script>
@endsection

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
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

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#checker">Eligibility Checker</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#about">About Scheme</a>
        <a href="#rates">Tax Rates</a>
        <a href="#eligible-not">Who Can Opt</a>
        <a href="#compliance">Compliance</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<header class="hero" id="checker">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>GST Composition Scheme <span>Eligibility Checker</span> &mdash; Section 10 CGST Act</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>The GST Composition Scheme under Section 10 of CGST Act lets small businesses with turnover up to &#8377;1.5 crore (&#8377;75 lakh for special states) pay GST at just 1&ndash;6% instead of standard 5&ndash;28% rates. You file quarterly returns instead of monthly. But you can&rsquo;t claim ITC, make interstate supplies, or sell on e-commerce platforms. Use this free tool to check your eligibility and see how much tax you save.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Check Your Eligibility &amp; Tax Savings</h2>
            <noscript><div class="noscript-box">This tool requires JavaScript. Please enable JavaScript or <a href="https://wa.me/919459456700">contact our CA team</a> for a manual eligibility check.</div></noscript>

            <div class="calc-row">
                <div class="form-group">
                    <label>Business Type</label>
                    <div class="toggle-group" id="bizType">
                        <button type="button" class="toggle-btn active" data-val="trader" onclick="setTg('bizType',this)">Trader<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">1% GST</small></button>
                        <button type="button" class="toggle-btn" data-val="manufacturer" onclick="setTg('bizType',this)">Manufacturer<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">1% GST</small></button>
                        <button type="button" class="toggle-btn" data-val="restaurant" onclick="setTg('bizType',this)">Restaurant<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">5% GST</small></button>
                        <button type="button" class="toggle-btn" data-val="service" onclick="setTg('bizType',this)">Service Provider<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">6% GST</small></button>
                    </div>
                </div>
                <div class="form-group">
                    <label>State Category</label>
                    <div class="toggle-group" id="stateType">
                        <button type="button" class="toggle-btn active" data-val="general" onclick="setTg('stateType',this)">General State<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">&#8377;1.5 Cr limit</small></button>
                        <button type="button" class="toggle-btn" data-val="special" onclick="setTg('stateType',this)">Special Category<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">&#8377;75 L limit</small></button>
                    </div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:4px">Special: Arunachal Pradesh, Assam, Manipur, Meghalaya, Mizoram, Nagaland, Sikkim, Tripura, HP, Uttarakhand</div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Annual Aggregate Turnover (&#8377;)</label>
                    <input type="text" id="inTurnover" placeholder="e.g. 80,00,000" oninput="fmtNum(this)">
                    <div class="hint" style="font-size:12px;color:var(--text-muted);margin-top:4px">PAN-wise total turnover across all GSTINs</div>
                </div>
                <div class="form-group">
                    <label>Est. Quarterly Turnover (&#8377;)</label>
                    <input type="text" id="inQtrTurnover" placeholder="e.g. 20,00,000" oninput="fmtNum(this)">
                    <div class="hint" style="font-size:12px;color:var(--text-muted);margin-top:4px">For tax savings estimation</div>
                </div>
            </div>

            <div class="form-group">
                <label>Average Regular GST Rate</label>
                <select id="inRegRate">
                    <option value="5">5% GST</option>
                    <option value="12">12% GST</option>
                    <option value="18" selected>18% GST</option>
                    <option value="28">28% GST</option>
                </select>
                <div class="hint" style="font-size:12px;color:var(--text-muted);margin-top:4px">Standard GST rate if you were a regular taxpayer</div>
            </div>

            <div class="form-group"><label>Business Activity Checks</label></div>
            <div class="check-row"><span class="check-label">Do you make interstate outward supplies?</span><div class="yn-group" id="chkInterstate"><button type="button" class="yn-btn active sel-no" data-val="no" onclick="setYn('chkInterstate',this)">No</button><button type="button" class="yn-btn" data-val="yes" onclick="setYn('chkInterstate',this)">Yes</button></div></div>
            <div class="check-row"><span class="check-label">Do you sell through e-commerce operators?</span><div class="yn-group" id="chkEcom"><button type="button" class="yn-btn active sel-no" data-val="no" onclick="setYn('chkEcom',this)">No</button><button type="button" class="yn-btn" data-val="yes" onclick="setYn('chkEcom',this)">Yes</button></div></div>
            <div class="check-row"><span class="check-label">Do you manufacture ice cream, pan masala, or tobacco?</span><div class="yn-group" id="chkExcluded"><button type="button" class="yn-btn active sel-no" data-val="no" onclick="setYn('chkExcluded',this)">No</button><button type="button" class="yn-btn" data-val="yes" onclick="setYn('chkExcluded',this)">Yes</button></div></div>
            <div class="check-row"><span class="check-label">Are you a casual or non-resident taxable person?</span><div class="yn-group" id="chkCasual"><button type="button" class="yn-btn active sel-no" data-val="no" onclick="setYn('chkCasual',this)">No</button><button type="button" class="yn-btn" data-val="yes" onclick="setYn('chkCasual',this)">Yes</button></div></div>
            <div class="check-row" id="alcoholWrap" style="display:none"><span class="check-label">Does your restaurant serve alcohol?</span><div class="yn-group" id="chkAlcohol"><button type="button" class="yn-btn active sel-no" data-val="no" onclick="setYn('chkAlcohol',this)">No</button><button type="button" class="yn-btn" data-val="yes" onclick="setYn('chkAlcohol',this)">Yes</button></div></div>

            <button class="btn-calculate" onclick="checkEligibility()">Check Eligibility &amp; Calculate Savings</button>
            <button class="btn-reset" onclick="resetForm()">&#8634; Reset All</button>

            <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the GST Composition Scheme Eligibility Checker</h2>
            <p>This free tool performs a comprehensive 7-point eligibility check and calculates your potential tax savings under the composition scheme. Follow these steps:</p>
            <h3>Step 1 &mdash; Select Your Business Type</h3>
            <p>Choose whether you are a trader, manufacturer, restaurant, or service provider. This determines the applicable composition levy rate and specific eligibility rules. Restaurants have a separate category because they attract a different tax rate of 5% under the scheme.</p>
            <h3>Step 2 &mdash; Choose Your State Category</h3>
            <p>Select whether your business is registered in a general state or a special category state (North-Eastern states, Himachal Pradesh, Uttarakhand). Special category states have lower turnover limits of &#8377;75 lakh versus &#8377;1.5 crore for general states.</p>
            <h3>Step 3 &mdash; Enter Turnover Details</h3>
            <p>Provide your aggregate annual turnover (calculated PAN-wise, not GSTIN-wise) and estimated quarterly turnover for the savings comparison. The tool checks your turnover against the applicable limit automatically.</p>
            <h3>Step 4 &mdash; Answer Restriction Checks</h3>
            <p>The tool verifies whether your business activities fall within composition scheme rules &mdash; interstate supplies, e-commerce sales, excluded goods (ice cream, pan masala, tobacco), and casual/non-resident status. Each check maps directly to Section 10 restrictions under the <a href="https://cbic-gst.gov.in/pdf/cgst-act.pdf" target="_blank" rel="noopener">CGST Act</a>.</p>
            <h3>Step 5 &mdash; View Results</h3>
            <p>Get an instant eligibility verdict with a detailed checklist, applicable composition tax rate, and a side-by-side comparison showing quarterly and annual tax savings versus regular GST filing.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Before opting for composition, assess whether your buyers are mostly registered businesses (B2B) or end consumers (B2C). B2B buyers cannot claim ITC on purchases from composition dealers, which may make your products less attractive. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends composition primarily if 80%+ of your sales are B2C.</p>
            </div>
        </section>

        <section class="content-section" id="about">
            <h2>What Is the GST Composition Scheme Under Section 10?</h2>
            <p>The GST Composition Scheme is a simplified taxation scheme introduced under <a href="https://cbic-gst.gov.in/pdf/cgst-act.pdf" target="_blank" rel="noopener">Section 10 of the Central Goods and Services Tax (CGST) Act, 2017</a> for small taxpayers. It allows eligible businesses to pay GST at a flat percentage of their turnover instead of the item-wise GST rates (5%, 12%, 18%, or 28%) that apply under the regular scheme.</p>
            <p>The primary objective is to reduce the compliance burden for micro and small enterprises by offering lower tax rates, fewer return filings, and simpler record-keeping. Instead of filing monthly GSTR-1 and GSTR-3B returns, composition dealers only file a quarterly CMP-08 statement and an annual GSTR-4 return.</p>
            <p>According to the <a href="https://msme.gov.in/" target="_blank" rel="noopener">Ministry of MSME</a>, over 6.3 crore MSMEs operate in India, and a majority have turnover below &#8377;1.5 crore. The Composition Scheme allows these businesses to focus on operations rather than spending disproportionate resources on GST compliance.</p>
            <h3>Section 10(1) vs Section 10(2A) &mdash; Two Tracks</h3>
            <p>Under Section 10(1), manufacturers and traders with aggregate turnover up to &#8377;1.5 crore can opt at 1% GST. Restaurants not serving alcohol can opt at 5%. Under Section 10(2A), introduced via the <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CGST Amendment Act 2018</a>, service providers with turnover up to &#8377;50 lakh can opt at 6% GST rate.</p>
            <p>Additionally, businesses under Section 10(1) can supply services up to 10% of their turnover in the preceding year or &#8377;5 lakh, whichever is higher. This provides flexibility for ancillary services without losing composition eligibility.</p>
            <h3>Key Advantages</h3>
            <p>Lower tax rates (1&ndash;6% vs 5&ndash;28%), quarterly filing instead of monthly (5 filings/year vs 25+), simpler record-keeping, no requirement for detailed HSN-wise reporting, and better cash flow management. The scheme is voluntary and can be opted in or out at the beginning of each financial year.</p>
            <h3>Key Disadvantages</h3>
            <p>No ITC on purchases, cannot issue tax invoices (only Bill of Supply), restricted to intra-state supplies, buyers cannot claim ITC on purchases from composition dealers, cannot sell through e-commerce operators, and tax must be paid from own pocket. These restrictions make the scheme unsuitable for businesses with significant B2B operations or high input costs.</p>
        </section>

        <section class="content-section" id="rates">
            <h2>GST Composition Scheme Tax Rates &mdash; FY 2025-26</h2>
            <p>The composition levy rates are split equally between CGST and SGST/UTGST. Here is the complete rate table as per <a href="https://cbic-gst.gov.in/rules.html" target="_blank" rel="noopener">Rule 7 of the CGST Rules</a>:</p>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Business Category</th><th>CGST</th><th>SGST/UTGST</th><th>Total GST</th><th>Turnover Limit</th></tr></thead>
                <tbody>
                    <tr><td>Traders (goods)</td><td style="font-weight:700;color:var(--primary);font-family:var(--font-mono)">0.5%</td><td style="font-weight:700;color:var(--primary);font-family:var(--font-mono)">0.5%</td><td style="font-weight:700;color:var(--primary);font-family:var(--font-mono)">1%</td><td>&#8377;1.5 Cr / &#8377;75 L*</td></tr>
                    <tr><td>Manufacturers (goods)</td><td style="font-weight:700;color:var(--primary);font-family:var(--font-mono)">0.5%</td><td style="font-weight:700;color:var(--primary);font-family:var(--font-mono)">0.5%</td><td style="font-weight:700;color:var(--primary);font-family:var(--font-mono)">1%</td><td>&#8377;1.5 Cr / &#8377;75 L*</td></tr>
                    <tr><td>Restaurants (no alcohol)</td><td style="font-weight:700;color:var(--primary);font-family:var(--font-mono)">2.5%</td><td style="font-weight:700;color:var(--primary);font-family:var(--font-mono)">2.5%</td><td style="font-weight:700;color:var(--primary);font-family:var(--font-mono)">5%</td><td>&#8377;1.5 Cr / &#8377;75 L*</td></tr>
                    <tr><td>Service Providers &mdash; Sec 10(2A)</td><td style="font-weight:700;color:var(--primary);font-family:var(--font-mono)">3%</td><td style="font-weight:700;color:var(--primary);font-family:var(--font-mono)">3%</td><td style="font-weight:700;color:var(--primary);font-family:var(--font-mono)">6%</td><td>&#8377;50 Lakh</td></tr>
                </tbody>
            </table>
            </div>
            <p style="font-size:13px;color:var(--text-muted);">* &#8377;75 lakh for special category states (NE states, Himachal Pradesh, Uttarakhand)</p>
            <div class="formula-box">
                <span class="label">Composition Tax Calculation:</span><br>
                Quarterly Tax = Taxable Turnover &times; Composition Rate<br>
                Annual Tax = Sum of 4 Quarterly Payments<br><br>
                <span class="label">Example (Trader, &#8377;1 Cr turnover):</span><br>
                Quarterly Tax = &#8377;25,00,000 &times; 1% = &#8377;25,000<br>
                Annual Tax = &#8377;25,000 &times; 4 = <span class="label">&#8377;1,00,000</span><br>
                vs Regular @ 18% = &#8377;18,00,000 &rarr; <span class="label">&#8377;17 lakh savings!</span>
            </div>
        </section>

        <section class="content-section" id="eligible-not">
            <h2>Who Can and Cannot Opt for Composition Scheme?</h2>
            <h3>Eligible Businesses</h3>
            <ul>
                <li><strong>Traders of goods</strong> with aggregate annual turnover up to &#8377;1.5 crore (&#8377;75 lakh in special category states)</li>
                <li><strong>Manufacturers of goods</strong> (excluding ice cream, pan masala, tobacco, aerated water) within the same turnover limits</li>
                <li><strong>Restaurants</strong> not serving alcohol, within the same turnover limits</li>
                <li><strong>Service providers</strong> with turnover up to &#8377;50 lakh under Section 10(2A)</li>
                <li><strong>Mixed suppliers</strong> where services do not exceed 10% of turnover or &#8377;5 lakh</li>
            </ul>
            <h3>Ineligible Businesses &mdash; Section 10(2)</h3>
            <ul>
                <li>Businesses making <strong>interstate outward supplies</strong></li>
                <li>Suppliers via <strong>e-commerce operators</strong> (TCS under Section 52)</li>
                <li>Manufacturers of <strong>ice cream, pan masala, tobacco, aerated water, fly ash bricks</strong></li>
                <li><strong>Casual taxable persons</strong> and <strong>non-resident taxable persons</strong></li>
                <li>Suppliers of <strong>non-taxable goods</strong> like alcohol for human consumption</li>
                <li>Businesses where <strong>multiple GSTINs under same PAN</strong> don&rsquo;t all opt together</li>
            </ul>
            <div class="callout warn">
                <p><strong>PAN-Level Rule:</strong> If a business has multiple GST registrations under the same PAN, ALL must collectively opt for composition. You cannot mix composition and regular under one PAN. This is per the proviso to Section 10(2) of the <a href="https://cbic-gst.gov.in/pdf/cgst-act.pdf" target="_blank" rel="noopener">CGST Act</a>.</p>
            </div>
        </section>

        <section class="content-section" id="compliance">
            <h2>Compliance Requirements for Composition Dealers</h2>
            <p>While the scheme reduces compliance burden, dealers must fulfil key obligations under <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST law</a>:</p>
            <h3>CMP-08 &mdash; Quarterly Statement</h3>
            <p>File Form GST CMP-08 for each quarter by the 18th of the following month. This declares taxable turnover and tax payable. Example: April&ndash;June quarter is due by 18th July.</p>
            <h3>GSTR-4 &mdash; Annual Return</h3>
            <p>File by 30th April of the next financial year. Consolidates the full year&rsquo;s data including inward supplies under reverse charge and purchases from unregistered persons.</p>
            <h3>Bill of Supply</h3>
            <p>Must display: <em>&ldquo;Composition Taxable Person, Not Eligible to Collect Tax on Supplies.&rdquo;</em> This notice must also appear on all signboards at business premises.</p>
            <h3>Opting In and Out</h3>
            <p>Opt in: File <strong>GST CMP-02</strong> before 31st March. New registrations select composition in Form GST REG-01. Stock intimation within 30 days. Opt out: File <strong>GST CMP-04</strong> within 7 days, then <strong>GST ITC-01</strong> within 30 days to claim ITC on closing stock.</p>
            <div class="callout green">
                <p><strong>Expert Tip:</strong> If approaching the &#8377;1.5 crore limit mid-year, plan your transition proactively. Maintain detailed stock records for maximum ITC recovery via ITC-01. Our CA team can help &mdash; <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20transitioning%20from%20composition%20to%20regular%20GST%20scheme." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">talk to a CA now</a>.</p>
            </div>
        </section>

        <section class="content-section">
            <h2>Composition Scheme vs Regular GST &mdash; Comparison</h2>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Parameter</th><th>Composition</th><th>Regular GST</th></tr></thead>
                <tbody>
                    <tr><td>Tax Rate</td><td>1% &ndash; 6% on turnover</td><td>5% &ndash; 28% on supply value</td></tr>
                    <tr><td>Input Tax Credit</td><td>Not available</td><td>Available</td></tr>
                    <tr><td>Invoice Type</td><td>Bill of Supply only</td><td>Tax Invoice with GST</td></tr>
                    <tr><td>Return Filing</td><td>Quarterly CMP-08 + Annual GSTR-4</td><td>Monthly GSTR-1 + 3B + Annual GSTR-9</td></tr>
                    <tr><td>Interstate Supply</td><td>Not allowed</td><td>Allowed</td></tr>
                    <tr><td>E-commerce Sales</td><td>Not allowed</td><td>Allowed</td></tr>
                    <tr><td>Filings Per Year</td><td>5</td><td>25+</td></tr>
                    <tr><td>Buyer ITC</td><td>Buyer cannot claim</td><td>Buyer can claim</td></tr>
                </tbody>
            </table>
            </div>
        </section>

        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need help with GST compliance?</strong> Our CAs handle GST registration, composition migration, return filing &amp; compliance across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Composition%20Eligibility%20tool.%20I%20need%20help%20with%20GST%20compliance.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions &mdash; GST Composition Scheme</h2>
            <div id="faqList"></div>
        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Need GST Help?</h3>
            <p>Our CAs handle GST registration, composition migration, return filing &amp; compliance for businesses across India.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Composition%20Eligibility%20tool.%20I%20need%20help%20with%20GST%20compliance." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>GST Services</h3>
            <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a>
            <a href="/gst-annual-return-filing" class="sidebar-link">GST Annual Return (GSTR-9) <span class="arrow">&rarr;</span></a>
            <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit <span class="arrow">&rarr;</span></a>
            <a href="/gst-cancellation" class="sidebar-link">GST Cancellation <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/hsn-sac-code-finder" class="sidebar-link">HSN/SAC Code Finder <span class="arrow">&rarr;</span></a>
            <a href="/tools/invoice-generator" class="sidebar-link">GST Invoice Generator <span class="arrow">&rarr;</span></a>
            <a href="/tools/e-way-bill-calculator" class="sidebar-link">E-Way Bill Calculator <span class="arrow">&rarr;</span></a>
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
function getVal(id){var g=document.getElementById(id);if(!g)return'';var a=g.querySelector('.toggle-btn.active,.yn-btn.active');return a?a.getAttribute('data-val'):'';}
function setTg(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');if(gid==='bizType')document.getElementById('alcoholWrap').style.display=btn.getAttribute('data-val')==='restaurant'?'flex':'none';}
function setYn(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.yn-btn').forEach(function(b){b.classList.remove('active','sel-yes','sel-no');});btn.classList.add('active');btn.classList.add(btn.getAttribute('data-val')==='yes'?'sel-yes':'sel-no');}
function parseNum(id){var el=document.getElementById(id);return el?parseInt(el.value.replace(/[^0-9]/g,''))||0:0;}
function fmtNum(el){var v=el.value.replace(/[^0-9]/g,'');if(v)el.value=parseInt(v).toLocaleString('en-IN');}
function fmt(n){return'\u20B9'+n.toLocaleString('en-IN');}

function resetForm(){
document.getElementById('inTurnover').value='';document.getElementById('inQtrTurnover').value='';document.getElementById('inRegRate').value='18';
['bizType','stateType'].forEach(function(g){var el=document.getElementById(g);el.querySelectorAll('.toggle-btn').forEach(function(b,i){b.classList.toggle('active',i===0);});});
['chkInterstate','chkEcom','chkExcluded','chkCasual','chkAlcohol'].forEach(function(g){var el=document.getElementById(g);if(el){el.querySelectorAll('.yn-btn').forEach(function(b,i){b.classList.remove('active','sel-yes','sel-no');if(i===0){b.classList.add('active','sel-no');}});}});
document.getElementById('alcoholWrap').style.display='none';document.getElementById('resPanel').classList.remove('visible');}

function checkEligibility(){
var biz=getVal('bizType'),state=getVal('stateType'),turnover=parseNum('inTurnover'),qtr=parseNum('inQtrTurnover'),regRate=parseFloat(document.getElementById('inRegRate').value);
var interstate=getVal('chkInterstate')==='yes',ecom=getVal('chkEcom')==='yes',excluded=getVal('chkExcluded')==='yes',casual=getVal('chkCasual')==='yes',alcohol=getVal('chkAlcohol')==='yes';
if(!turnover){alert('Please enter your annual aggregate turnover.');return;}
var limit,compRate,compLabel;
if(biz==='service'){limit=5000000;compRate=6;compLabel='6% (3% CGST + 3% SGST) \u2014 Sec 10(2A)';}
else if(biz==='restaurant'){limit=state==='special'?7500000:15000000;compRate=5;compLabel='5% (2.5% CGST + 2.5% SGST)';}
else{limit=state==='special'?7500000:15000000;compRate=1;compLabel='1% (0.5% CGST + 0.5% SGST)';}
var checks=[],eligible=true;
var tp=turnover<=limit;checks.push({l:'Turnover \u2264 '+fmt(limit),p:tp,d:'Your turnover: '+fmt(turnover)+(tp?' \u2714 Within limit':' \u2718 Exceeds limit')});if(!tp)eligible=false;
checks.push({l:'No interstate outward supplies',p:!interstate,d:interstate?'Interstate supplies disqualify eligibility':'Intra-state only \u2014 meets requirement'});if(interstate)eligible=false;
checks.push({l:'No e-commerce operator sales',p:!ecom,d:ecom?'E-commerce sales under Sec 52 TCS disqualify':'No e-commerce sales \u2014 meets requirement'});if(ecom)eligible=false;
checks.push({l:'No excluded goods (ice cream, pan masala, tobacco)',p:!excluded,d:excluded?'Manufacturing excluded goods bars eligibility':'No excluded manufacturing \u2014 meets requirement'});if(excluded)eligible=false;
checks.push({l:'Not a casual/non-resident taxable person',p:!casual,d:casual?'Casual and non-resident persons cannot opt':'Regular registered person \u2014 meets requirement'});if(casual)eligible=false;
if(biz==='restaurant'){checks.push({l:'Restaurant does not serve alcohol',p:!alcohol,d:alcohol?'Restaurants serving alcohol are excluded':'No alcohol \u2014 meets requirement'});if(alcohol)eligible=false;}
checks.push({l:'Business type eligible for composition',p:true,d:biz.charAt(0).toUpperCase()+biz.slice(1)+' \u2014 eligible category under Section 10'});
var h='';
if(eligible){h+='<div class="res-hero"><div class="res-box eligible"><div class="rb-label">Eligibility</div><div class="rb-value">\u2714 ELIGIBLE</div><div class="rb-sub">Qualifies for Composition Scheme</div></div><div class="res-box rate"><div class="rb-label">Applicable Rate</div><div class="rb-value">'+compRate+'% GST</div><div class="rb-sub">'+compLabel+'</div></div></div>';}
else{h+='<div class="res-hero"><div class="res-box ineligible"><div class="rb-label">Eligibility</div><div class="rb-value">\u2718 NOT ELIGIBLE</div><div class="rb-sub">Does not qualify</div></div><div class="res-box rate"><div class="rb-label">Recommendation</div><div class="rb-value">Regular GST</div><div class="rb-sub">File under regular scheme</div></div></div>';}
h+='<div class="res-card"><div class="res-card-hd"><h3>7-Point Eligibility Checklist</h3><span class="res-badge '+(eligible?'pass':'fail')+'">'+(eligible?'All Passed':'Failed')+'</span></div><div class="res-card-bd"><ul class="chk-list">';
checks.forEach(function(c){h+='<li><span class="chk-icon '+(c.p?'pass':'fail')+'">'+(c.p?'\u2714':'\u2718')+'</span><div><strong>'+c.l+'</strong><br><span style="font-size:13px;color:var(--text-muted)">'+c.d+'</span></div></li>';});
h+='</ul></div></div>';
if(eligible&&qtr>0){var qC=Math.round(qtr*compRate/100),qR=Math.round(qtr*regRate/100),qS=qR-qC,aC=qC*4,aR=qR*4,aS=qS*4,pct=regRate>0?Math.round((1-compRate/regRate)*100):0;
h+='<div class="res-hero"><div class="res-box savings"><div class="rb-label">Annual Savings</div><div class="rb-value">'+fmt(aS)+'</div><div class="rb-sub">'+pct+'% lower than regular GST</div></div><div class="res-box rate"><div class="rb-label">Annual Composition Tax</div><div class="rb-value">'+fmt(aC)+'</div><div class="rb-sub">vs '+fmt(aR)+' under regular</div></div></div>';
h+='<div class="res-card"><div class="res-card-hd"><h3>Tax Comparison</h3><span class="res-badge teal">Savings</span></div><div class="res-card-bd"><table class="cmp-table"><tr><th>Parameter</th><th>Composition ('+compRate+'%)</th><th>Regular ('+regRate+'%)</th></tr><tr><td>Quarterly Tax</td><td class="hi">'+fmt(qC)+'</td><td>'+fmt(qR)+'</td></tr><tr><td>Annual Tax</td><td class="hi">'+fmt(aC)+'</td><td>'+fmt(aR)+'</td></tr><tr><td>Annual Savings</td><td colspan="2" class="hi" style="font-size:16px">'+fmt(aS)+' saved per year</td></tr><tr><td>Returns/Year</td><td class="hi">5</td><td>25+</td></tr><tr><td>ITC</td><td class="neg">No</td><td class="hi">Yes</td></tr></table></div></div>';}
if(eligible){h+='<div class="res-card"><div class="res-card-hd"><h3>Filing Calendar FY 2025-26</h3><span class="res-badge info">CMP-08</span></div><div class="res-card-bd"><table class="cmp-table"><tr><th>Quarter</th><th>Period</th><th>Due Date</th></tr><tr><td>Q1</td><td>Apr\u2013Jun 2025</td><td>18 Jul 2025</td></tr><tr><td>Q2</td><td>Jul\u2013Sep 2025</td><td>18 Oct 2025</td></tr><tr><td>Q3</td><td>Oct\u2013Dec 2025</td><td>18 Jan 2026</td></tr><tr><td>Q4</td><td>Jan\u2013Mar 2026</td><td>18 Apr 2026</td></tr><tr><td>Annual</td><td>Full Year</td><td>30 Apr 2026 (GSTR-4)</td></tr></table></div></div>';}
h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20checked%20GST%20Composition%20eligibility%20on%20your%20tool.%20Please%20connect%20me%20with%20a%20CA." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/gst-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg> GST Calculator</a></div>';
document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});}

var FAQS=[
{q:"What is the turnover limit for GST Composition Scheme in 2026?",a:"The turnover limit for FY 2025-26 is \u20B91.5 crore for manufacturers and traders in general states. For special category states (NE states, Sikkim, HP, Uttarakhand), it is \u20B975 lakh. Service providers under Section 10(2A) have a \u20B950 lakh limit. Turnover is calculated PAN-wise across all GST registrations."},
{q:"Who is not eligible for GST Composition Scheme?",a:"Businesses making interstate supplies, selling via e-commerce operators (TCS under Sec 52), manufacturing ice cream/pan masala/tobacco/aerated water, casual taxable persons, non-resident taxable persons, and suppliers of non-taxable goods like alcohol. Multiple GSTINs under one PAN must all opt collectively."},
{q:"What are the GST rates under Composition Scheme?",a:"Traders and manufacturers pay 1% (0.5% CGST + 0.5% SGST). Restaurants without alcohol pay 5% (2.5% + 2.5%). Service providers under Sec 10(2A) pay 6% (3% + 3%). These rates apply on turnover and are much lower than standard 5\u201328% GST rates."},
{q:"Can service providers opt for Composition Scheme?",a:"Yes. Since the 32nd GST Council meeting, service providers with turnover up to \u20B950 lakh can opt under Section 10(2A) at 6% GST. Goods suppliers under regular composition can also provide services up to 10% of turnover or \u20B95 lakh whichever is higher. Restaurants (excluding alcohol) have a 5% rate."},
{q:"Can a composition dealer claim Input Tax Credit?",a:"No. Composition dealers cannot claim ITC and must pay all tax through the cash ledger only. This is a major disadvantage for high-input-cost businesses. When transitioning to regular scheme, ITC on closing stock can be claimed via Form GST ITC-01 within 30 days."},
{q:"What returns does a composition dealer file?",a:"Two returns: Form GST CMP-08 quarterly (due 18th of month after quarter) for self-assessed tax, and Form GSTR-4 annually (due 30th April of next FY). No GSTR-1, GSTR-3B, or monthly returns are required \u2014 reducing filings from 25+ to just 5 per year."},
{q:"How to opt for Composition Scheme on GST Portal?",a:"Existing taxpayers file Form GST CMP-02 on gst.gov.in before 31st March. New registrations select composition in Form GST REG-01. File stock intimation within 30 days. The application is auto-approved with no manual approval needed from tax authorities."},
{q:"Can a composition dealer make interstate supplies?",a:"No. Composition dealers are restricted to intra-state supplies only. Supplies to SEZ units are treated as interstate and not allowed. To make interstate supplies, opt out by filing Form GST CMP-04 and register as a regular taxpayer."},
{q:"What is the difference between composition and regular GST?",a:"Composition offers lower rates (1\u20136% vs 5\u201328%), quarterly filing instead of monthly, and simpler compliance. But composition dealers cannot claim ITC, issue tax invoices, make interstate supplies, or sell on e-commerce. Their buyers also cannot claim ITC."},
{q:"What happens if turnover exceeds the limit?",a:"File Form GST CMP-04 within 7 days of exceeding \u20B91.5 crore (or \u20B975 lakh). Transition to regular scheme and start filing GSTR-1 and GSTR-3B. Claim ITC on closing stock via Form GST ITC-01 within 30 days of transition."},
{q:"Can a composition dealer issue a tax invoice?",a:"No. They must issue a Bill of Supply stating: \u201CComposition Taxable Person, Not Eligible to Collect Tax on Supplies.\u201D This must also appear on signboards. Buyers cannot claim ITC since GST is not charged separately."},
{q:"Is reverse charge applicable to composition dealers?",a:"Yes. Composition dealers must pay GST under reverse charge at standard rates for specified inward supplies (e.g. from unregistered persons, legal services, GTA). However, ITC on reverse charge paid cannot be claimed \u2014 it is discharged through the cash ledger only."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var isOpen=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!isOpen)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var current='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)current=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+current);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))checkEligibility();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>

@endsection