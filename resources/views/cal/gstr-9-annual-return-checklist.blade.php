@extends('layouts.app')
@section('meta')
    <title>GSTR-9 Annual Return Checklist | FY 2025-26 Filing</title>
    <meta name="description" content="GSTR-9 annual return checklist: 30+ items across 7 categories covering outward supplies, ITC, HSN and 9C. Track your FY 2025-26 filing readiness. Free, try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gstr-9-annual-return-checklist">
    <meta property="og:title" content="GSTR-9 Annual Return Checklist &mdash; Free Tool 2026 | Patron Accounting">
    <meta property="og:description" content="Interactive GSTR-9 checklist with 30+ items. Track filing readiness for FY 2025-26 across 7 categories.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/gstr-9-annual-return-checklist">
    <meta property="og:image" content="/tools/og-gstr-9-checklist.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GSTR-9 Annual Return Checklist &mdash; Free Tool 2026">
    <meta name="twitter:description" content="Interactive 30+ item GSTR-9 checklist. Track FY 2025-26 filing readiness.">
    <meta name="twitter:image" content="/tools/og-gstr-9-checklist.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"GSTR-9 Annual Return Checklist FY 2025-26","description":"Free interactive GSTR-9 annual return filing checklist with 30 plus items across 7 categories including pre-filing setup, outward supplies reconciliation, ITC verification, tax payment matching, amendments, HSN summary, and GSTR-9C preparation for businesses with turnover above 2 crore.","url":"/tools/gstr-9-annual-return-checklist","applicationCategory":"UtilityApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","sameAs":["https://www.linkedin.com/company/patron-accounting"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"GSTR-9 Annual Return Checklist","item":"/tools/gstr-9-annual-return-checklist"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Who must file GSTR-9 for FY 2025-26?","acceptedAnswer":{"@type":"Answer","text":"All regular GST-registered taxpayers with aggregate turnover exceeding 2 crore rupees must file GSTR-9. Taxpayers below this threshold are exempt as per Notification 15/2025-Central Tax. Composition dealers file GSTR-4 instead. Non-resident taxable persons, Input Service Distributors, and TDS/TCS deductors are also exempt from GSTR-9 filing."}},{"@type":"Question","name":"What is the due date for GSTR-9 for FY 2025-26?","acceptedAnswer":{"@type":"Answer","text":"The standard due date for GSTR-9 for FY 2025-26 is 31st December 2026. The government may extend this deadline via notification. Late filing attracts a fee of 200 rupees per day split as 100 CGST plus 100 SGST capped at 0.5 percent of turnover in the state. Interest may also apply on any tax shortfall identified."}},{"@type":"Question","name":"What is the late fee for delayed GSTR-9 filing?","acceptedAnswer":{"@type":"Answer","text":"Late fee is 200 rupees per day comprising 100 under CGST and 100 under SGST. The maximum cap is 0.25 percent of turnover under each Act totalling 0.5 percent of turnover in the state or union territory. For example a 10 day delay for a business with 5 crore turnover results in 2000 rupees late fee which is well within the cap."}},{"@type":"Question","name":"Can GSTR-9 be revised after filing?","acceptedAnswer":{"@type":"Answer","text":"No GSTR-9 cannot be revised once filed. This makes accuracy critical before submission. Any errors or discrepancies discovered after filing must be addressed through subsequent year returns or by paying differential tax through Form DRC-03. Use the checklist thoroughly before clicking submit on the GST portal."}},{"@type":"Question","name":"What is GSTR-9C and who must file it?","acceptedAnswer":{"@type":"Answer","text":"GSTR-9C is the reconciliation statement that matches GSTR-9 figures with audited financial statements. It is mandatory for taxpayers with aggregate turnover exceeding 5 crore rupees. From FY 2020-21 onwards it is self-certified by the taxpayer and no longer requires mandatory CA certification though professional assistance is recommended."}},{"@type":"Question","name":"Which tables in GSTR-9 are auto-populated?","acceptedAnswer":{"@type":"Answer","text":"Tables 4 and 5 covering outward supplies are auto-populated from GSTR-1 data. Table 8A showing ITC is auto-populated from GSTR-2A. Other tables including 6 and 7 for ITC details, 9 for tax payments, and 10 to 14 for amendments require manual entry based on books of accounts and reconciliation with filed returns."}},{"@type":"Question","name":"What documents are needed to file GSTR-9?","acceptedAnswer":{"@type":"Answer","text":"Key documents include all 12 monthly GSTR-1 summaries, GSTR-3B summaries, GSTR-2B reports, books of accounts with trial balance and profit and loss statement, bank statements for GST transaction reconciliation, all GST invoices debit notes and credit notes, tax payment challans, and HSN-wise summary of inward and outward supplies."}},{"@type":"Question","name":"How to reconcile ITC for GSTR-9 Tables 6 7 and 8?","acceptedAnswer":{"@type":"Answer","text":"Start by comparing ITC claimed in GSTR-3B Table 4A with GSTR-2A data for the full year. Report eligible ITC in Table 6A and 6A1 for prior year claims. Reversals go in Table 7 split by rule such as Rule 37A for supplier defaults. Table 8A auto-populates from GSTR-2A and mismatches are flagged in Tables 8B through 8D."}},{"@type":"Question","name":"What are Tables 10 to 14 in GSTR-9?","acceptedAnswer":{"@type":"Answer","text":"Tables 10 to 14 capture amendments and adjustments made between April and September of the next financial year relating to the current year. Table 10 covers supply amendments, Table 11 covers ITC amendments, Tables 12 and 13 handle ITC reversals and reclaims across years, and Table 14 captures differential tax paid on account of these amendments."}},{"@type":"Question","name":"What is the HSN summary requirement in GSTR-9?","acceptedAnswer":{"@type":"Answer","text":"Table 17 requires HSN-wise summary of outward supplies and Table 18 covers inward supplies. For turnover above 5 crore 6-digit HSN codes are required. For turnover between 1.5 crore and 5 crore 4-digit codes suffice. Each HSN entry must include taxable value, IGST, CGST, SGST amounts, and quantity with unit of measurement."}},{"@type":"Question","name":"How to handle ITC reversals in GSTR-9?","acceptedAnswer":{"@type":"Answer","text":"Table 7 captures all ITC reversals during the year categorised by rule. Rule 37 covers non-payment within 180 days, Rule 37A covers supplier default in tax payment, Rule 42 covers common credit reversal for exempt supplies, and Rule 43 covers capital goods reversal. Each must be reported separately to ensure accurate ITC reconciliation."}},{"@type":"Question","name":"What is the penalty for not filing GSTR-9?","acceptedAnswer":{"@type":"Answer","text":"Beyond the daily late fee of 200 rupees capped at 0.5 percent of turnover, non-filing may trigger scrutiny under Section 61 of CGST Act. The GST officer can issue a notice requiring filing within 15 days. Continued non-compliance can lead to best judgment assessment under Section 62 where the officer determines liability."}},{"@type":"Question","name":"Should I file GSTR-9 if turnover is below 2 crore?","acceptedAnswer":{"@type":"Answer","text":"Filing is optional for turnover below 2 crore as per Notification 15/2025-Central Tax. However voluntary filing is recommended if you anticipate growth above the threshold or want clean compliance records. It also helps in early detection of ITC mismatches and creates audit-ready documentation for future financial years."}}]}
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


/* Tool-specific: GSTR-9 Checklist */
.progress-ring{width:100%;background:var(--surface-alt);border-radius:20px;height:12px;overflow:hidden;margin:16px 0}
.progress-ring .fill{height:100%;border-radius:20px;transition:width 0.5s ease;background:linear-gradient(90deg,var(--primary),var(--success))}
.cat-card{background:var(--card);border:2px solid var(--border);border-radius:var(--radius);margin-bottom:16px;overflow:hidden;transition:border-color 0.2s}
.cat-card.done{border-color:var(--success)}
.cat-hd{display:flex;align-items:center;justify-content:space-between;padding:16px 20px;cursor:pointer;gap:12px;-webkit-tap-highlight-color:transparent}
.cat-hd:hover{background:var(--surface)}
.cat-title{font-size:15px;font-weight:700;color:var(--primary-dark);display:flex;align-items:center;gap:10px}
.cat-title .cat-num{width:28px;height:28px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;flex-shrink:0}
.cat-card.done .cat-title .cat-num{background:var(--success)}
.cat-count{font-size:12px;font-weight:600;color:var(--text-muted);white-space:nowrap}
.cat-count .done-count{color:var(--success)}
.cat-chevron{width:20px;height:20px;transition:transform 0.3s;color:var(--text-muted)}
.cat-card.open .cat-chevron{transform:rotate(180deg)}
.cat-body{max-height:0;overflow:hidden;transition:max-height 0.35s ease}
.cat-card.open .cat-body{max-height:2000px}
.chk-item{display:flex;align-items:flex-start;gap:12px;padding:12px 20px;border-top:1px solid var(--border);cursor:pointer;transition:background 0.15s}
.chk-item:hover{background:var(--surface)}
.chk-item.checked{background:#F0FDF4}
.chk-box{width:22px;height:22px;border:2px solid var(--border);border-radius:6px;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;transition:all 0.2s;font-size:13px;color:transparent}
.chk-item.checked .chk-box{background:var(--success);border-color:var(--success);color:#fff}
.chk-text{font-size:14px;color:var(--text-secondary);line-height:1.5}
.chk-item.checked .chk-text{color:var(--text-muted);text-decoration:line-through}
.chk-text strong{color:var(--text);font-weight:600}
.chk-text .table-ref{font-family:var(--font-mono);font-size:11px;background:var(--surface-alt);padding:1px 6px;border-radius:4px;color:var(--primary);font-weight:600}
.score-card{background:var(--card);border:2px solid var(--border);border-radius:var(--radius-lg);padding:24px;text-align:center;margin-bottom:20px}
.score-val{font-size:48px;font-weight:800;font-family:var(--font-mono);line-height:1}
.score-label{font-size:13px;font-weight:600;color:var(--text-muted);margin-top:4px;text-transform:uppercase;letter-spacing:.5px}
.score-msg{font-size:14px;color:var(--text-secondary);margin-top:8px;line-height:1.5}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#checklist">Checklist Tool</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#about">About GSTR-9</a>
        <a href="#tables">Key Tables</a>
        <a href="#penalties">Penalties</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<header class="hero" id="checklist">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>GSTR-9 Annual Return <span>Filing Checklist</span> &mdash; FY 2025-26</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>GSTR-9 is the annual GST return consolidating all GSTR-1, 3B, and 2A/2B data for the financial year. It is mandatory for regular taxpayers with turnover above &#8377;2 crore (due 31 Dec 2026 for FY 2025-26). This interactive checklist covers 35 items across 7 categories &mdash; pre-filing setup, outward supplies, ITC reconciliation, tax payments, amendments, HSN summary, and GSTR-9C. GSTR-9 cannot be revised once filed, so use this checklist to verify everything before submission.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>GSTR-9 Filing Readiness Checklist</h2>
            <noscript><div class="noscript-box">This checklist requires JavaScript. Please enable JavaScript or <a href="https://wa.me/919459456700">contact our CA team</a> for filing assistance.</div></noscript>

            <div class="score-card" id="scoreCard">
                <div class="score-val" id="scoreVal" style="color:var(--danger)">0%</div>
                <div class="score-label">Filing Readiness</div>
                <div class="progress-ring"><div class="fill" id="progressFill" style="width:0%"></div></div>
                <div class="score-msg" id="scoreMsg">Start checking off items below to track your GSTR-9 filing readiness.</div>
            </div>

            <div id="checklistContainer"></div>

            <button class="btn-reset" onclick="resetChecklist()" style="margin-top:16px">&#8634; Reset All Items</button>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the GSTR-9 Filing Checklist</h2>
            <p>This interactive checklist helps you systematically prepare for GSTR-9 annual return filing. It covers every critical step from document gathering to final submission.</p>
            <h3>Step 1 &mdash; Work Through Each Category</h3>
            <p>Click on a category to expand it. Check off each item as you complete it. The progress bar and readiness score update in real-time. Each item includes the relevant GSTR-9 table reference where applicable.</p>
            <h3>Step 2 &mdash; Follow the Sequence</h3>
            <p>Start with Pre-Filing Setup (document gathering), then Outward Supplies reconciliation, followed by ITC verification &mdash; which is the most complex and error-prone section. Complete Tax Payments, Amendments, HSN, and finally GSTR-9C if applicable.</p>
            <h3>Step 3 &mdash; Aim for 100%</h3>
            <p>Only submit your GSTR-9 on the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal</a> when you reach 100% readiness. Remember: GSTR-9 cannot be revised once filed. Any errors discovered later must be corrected through DRC-03 or subsequent year returns.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Start GSTR-9 preparation at least 4&ndash;6 weeks before the deadline. Download all GSTR-2A/2B data before October to capture late supplier uploads. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI Technical Guide 2025</a> on GSTR-9 is an excellent reference for table-wise guidance and reconciliation illustrations.</p>
            </div>
        </section>

        <section class="content-section" id="about">
            <h2>What Is GSTR-9 Annual Return?</h2>
            <p>GSTR-9 is the annual GST return that consolidates all monthly or quarterly returns (GSTR-1, GSTR-3B) filed during a financial year into a single comprehensive document. It is filed under <a href="https://cbic-gst.gov.in/pdf/cgst-act.pdf" target="_blank" rel="noopener">Section 44 of the CGST Act</a> and covers outward supplies, inward supplies, ITC claims, tax payments, amendments, and HSN-wise summaries.</p>
            <p>For FY 2025-26, GSTR-9 is mandatory for regular taxpayers with aggregate turnover exceeding &#8377;2 crore as per <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">Notification No. 15/2025-Central Tax</a>. The form is divided into 6 parts and 19 tables. Tables 4, 5, and 8A are auto-populated from GSTR-1 and GSTR-2A data on the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal</a>.</p>
            <p>The 2025 amendments via Notification No. 13/2025-Central Tax introduced enhanced ITC tracking fields, new tables for prior-year ITC (Table 6A1), import ITC reconciliation with ICEGATE (Table 8H1), and mandatory Rule 37A reversal disclosures. These changes significantly increase the granularity of reporting required.</p>
            <h3>GSTR-9 vs GSTR-9C</h3>
            <p>GSTR-9 is the annual return filed by all eligible taxpayers. GSTR-9C is the reconciliation statement required only for businesses with turnover above &#8377;5 crore &mdash; it matches GSTR-9 figures with audited financial statements. From FY 2020-21, GSTR-9C is self-certified (no mandatory CA audit), though professional assistance is strongly recommended by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>.</p>
        </section>

        <section class="content-section" id="tables">
            <h2>Key GSTR-9 Tables &mdash; Quick Reference</h2>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Table</th><th>Description</th><th>Source</th><th>Auto-Populated?</th></tr></thead>
                <tbody>
                    <tr><td><strong>4</strong></td><td>Outward supplies (taxable, exempt, nil, non-GST)</td><td>GSTR-1</td><td>Yes</td></tr>
                    <tr><td><strong>5</strong></td><td>Outward supplies on which tax not payable</td><td>GSTR-1</td><td>Yes</td></tr>
                    <tr><td><strong>6</strong></td><td>ITC availed during the year</td><td>GSTR-3B + Books</td><td>No</td></tr>
                    <tr><td><strong>7</strong></td><td>ITC reversed during the year</td><td>GSTR-3B + Books</td><td>No</td></tr>
                    <tr><td><strong>8</strong></td><td>ITC as per GSTR-2A vs ITC claimed</td><td>GSTR-2A</td><td>8A only</td></tr>
                    <tr><td><strong>9</strong></td><td>Tax paid and tax payable</td><td>GSTR-3B + Challans</td><td>No</td></tr>
                    <tr><td><strong>10&ndash;14</strong></td><td>Amendments &amp; ITC adjustments</td><td>Returns + Books</td><td>No</td></tr>
                    <tr><td><strong>15&ndash;16</strong></td><td>Demands, refunds, outstanding</td><td>Records</td><td>No</td></tr>
                    <tr><td><strong>17&ndash;18</strong></td><td>HSN summary (outward &amp; inward)</td><td>Invoices</td><td>Partial</td></tr>
                </tbody>
            </table>
            </div>
        </section>

        <section class="content-section" id="penalties">
            <h2>Late Fee and Penalties for GSTR-9</h2>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Scenario</th><th>Fee / Penalty</th><th>Cap</th></tr></thead>
                <tbody>
                    <tr><td>Late filing</td><td>&#8377;200/day (&#8377;100 CGST + &#8377;100 SGST)</td><td>0.5% of turnover in state</td></tr>
                    <tr><td>Non-filing (after notice u/s 61)</td><td>Best judgment assessment u/s 62</td><td>As determined by officer</td></tr>
                    <tr><td>Tax shortfall discovered</td><td>Interest 18% p.a. + DRC-03 payment</td><td>No cap on interest</td></tr>
                </tbody>
            </table>
            </div>
            <div class="formula-box">
                <span class="label">Late Fee Example:</span><br>
                Turnover in state = &#8377;3 Cr | Days late = 15<br>
                Fee = 15 &times; &#8377;200 = <span class="label">&#8377;3,000</span><br>
                Cap = 0.5% &times; 3,00,00,000 = &#8377;1,50,000<br>
                <span class="label">Payable: &#8377;3,000</span> (within cap)
            </div>
        </section>

        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need help with GSTR-9 filing?</strong> Our CAs handle complete GSTR-9 and GSTR-9C preparation, reconciliation, and filing for businesses across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GSTR-9%20Checklist%20tool.%20I%20need%20help%20with%20annual%20return%20filing.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions &mdash; GSTR-9 Annual Return</h2>
            <div id="faqList"></div>
        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Need GSTR-9 Help?</h3>
            <p>Our CAs handle GSTR-9, GSTR-9C preparation, reconciliation &amp; filing for businesses across India.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20GSTR-9%20filing." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>GST Services</h3>
            <a href="/gst-annual-return-filing" class="sidebar-link">GST Annual Return Filing <span class="arrow">&rarr;</span></a>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit <span class="arrow">&rarr;</span></a>
            <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
            <a href="/gst-cancellation" class="sidebar-link">GST Cancellation <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gstr-2a-vs-3b-reconciliation" class="sidebar-link">GSTR-2A vs 3B Reconciliation <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-return-due-date-tracker" class="sidebar-link">GST Due Date Tracker <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/hsn-sac-code-finder" class="sidebar-link">HSN/SAC Code Finder <span class="arrow">&rarr;</span></a>
            <a href="/tools/rcm-calculator" class="sidebar-link">RCM Calculator <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
        </div>
    </aside>
</div>

<script>
var CATS=[
{id:'pre',title:'Pre-Filing Setup',items:[
{t:'All GSTR-1 returns filed for 12 months (Apr 2025 \u2013 Mar 2026)',ref:''},
{t:'All GSTR-3B returns filed for 12 months',ref:''},
{t:'Download all 12 GSTR-2B statements from GST portal',ref:'Table 8A'},
{t:'Download GSTR-2A for the full financial year',ref:'Table 8'},
{t:'Books of accounts finalised \u2014 trial balance, P&L, ledgers',ref:''},
{t:'Bank statements reconciled with GST transactions',ref:''},
{t:'All GST invoices, debit notes, credit notes compiled',ref:'Table 4,5'},
{t:'Tax payment challans for all months available',ref:'Table 9'}
]},
{id:'outward',title:'Outward Supplies (Tables 4\u20135)',items:[
{t:'Match Table 4 auto-populated data with GSTR-1 summaries',ref:'Table 4'},
{t:'Verify taxable turnover: B2B + B2C + exports + SEZ supplies',ref:'Table 4A\u2013E'},
{t:'Reconcile exempt, nil-rated, and non-GST supplies',ref:'Table 5A\u2013E'},
{t:'Cross-check credit notes and debit notes (net off correctly)',ref:'Table 4I,4J'},
{t:'Verify advances received and adjusted during the year',ref:'Table 4K,4L'},
{t:'Confirm turnover matches between GSTR-1, GSTR-3B, and books',ref:''}
]},
{id:'itc',title:'Input Tax Credit (Tables 6\u20138)',items:[
{t:'Report ITC availed from GSTR-3B Table 4A \u2014 inputs, input services, capital goods',ref:'Table 6A'},
{t:'Report prior-year ITC claimed in current year (new Table 6A1)',ref:'Table 6A1'},
{t:'Verify ITC reversed under Rule 37 (non-payment within 180 days)',ref:'Table 7A'},
{t:'Verify ITC reversed under Rule 37A (supplier default)',ref:'Table 7'},
{t:'Verify ITC reversed under Rule 42/43 (exempt/capital goods)',ref:'Table 7'},
{t:'Reconcile Table 8A (auto-populated from GSTR-2A) with ITC claimed',ref:'Table 8A'},
{t:'Flag mismatches in Tables 8B\u20138D and document reasons',ref:'Table 8B\u2013D'},
{t:'Verify import ITC matches ICEGATE data (new Table 8H1)',ref:'Table 8H1'},
{t:'Confirm no ITC claimed on blocked items under Section 17(5)',ref:'Table 7H'}
]},
{id:'tax',title:'Tax Paid (Table 9)',items:[
{t:'Reconcile tax paid via cash ledger \u2014 CGST, SGST, IGST, Cess',ref:'Table 9'},
{t:'Reconcile tax paid via ITC utilisation',ref:'Table 9'},
{t:'Verify interest, late fee, and penalty payments',ref:'Table 9'},
{t:'Confirm no outstanding tax liability for any month',ref:'Table 9'}
]},
{id:'amend',title:'Amendments (Tables 10\u201314)',items:[
{t:'Report supply amendments made in Apr\u2013Sep 2026 relating to FY 2025-26',ref:'Table 10'},
{t:'Report ITC amendments (reversals/reclaims across years)',ref:'Table 11\u201313'},
{t:'Compute and report differential tax paid on amendments',ref:'Table 14'}
]},
{id:'hsn',title:'HSN Summary (Tables 17\u201318)',items:[
{t:'Prepare HSN-wise outward supply summary (4-digit or 6-digit based on turnover)',ref:'Table 17'},
{t:'Prepare HSN-wise inward supply summary',ref:'Table 18'},
{t:'Verify quantities, UQC, taxable values, and tax amounts per HSN code',ref:'Table 17\u201318'}
]},
{id:'9c',title:'GSTR-9C (Turnover > \u20B95 Cr)',items:[
{t:'Reconcile turnover as per books vs turnover as per GSTR-9',ref:'Part A'},
{t:'Reconcile tax paid as per books vs tax paid as per GSTR-9',ref:'Part A'},
{t:'Reconcile ITC as per books vs ITC as per GSTR-9',ref:'Part A'},
{t:'Document and explain all reconciliation differences',ref:'Part A'},
{t:'Pay differential tax through DRC-03 if any',ref:''},
{t:'Self-certify GSTR-9C (or engage CA for review)',ref:'Part B'}
]}
];

var checked={};
function buildChecklist(){
var c=document.getElementById('checklistContainer');c.innerHTML='';
CATS.forEach(function(cat,ci){
var card=document.createElement('div');card.className='cat-card'+(ci===0?' open':'');card.id='cat-'+cat.id;
var total=cat.items.length,done=0;
cat.items.forEach(function(_,ii){if(checked[cat.id+'-'+ii])done++;});
if(done===total)card.classList.add('done');
var hd='<div class="cat-hd" onclick="toggleCat(\''+cat.id+'\')"><div class="cat-title"><span class="cat-num">'+(ci+1)+'</span>'+cat.title+'</div><div style="display:flex;align-items:center;gap:10px"><span class="cat-count"><span class="done-count">'+done+'</span>/'+total+'</span><svg class="cat-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></div></div>';
var bd='<div class="cat-body">';
cat.items.forEach(function(item,ii){
var key=cat.id+'-'+ii;
var isChecked=!!checked[key];
bd+='<div class="chk-item'+(isChecked?' checked':'')+'" onclick="toggleItem(\''+cat.id+'\','+ii+')">';
bd+='<div class="chk-box">\u2714</div>';
bd+='<div class="chk-text">'+(item.ref?'<span class="table-ref">'+item.ref+'</span> ':'')+item.t+'</div></div>';
});
bd+='</div>';
card.innerHTML=hd+bd;c.appendChild(card);
});
updateScore();
}

function toggleCat(id){var card=document.getElementById('cat-'+id);card.classList.toggle('open');}
function toggleItem(catId,idx){var key=catId+'-'+idx;checked[key]=!checked[key];buildChecklist();var card=document.getElementById('cat-'+catId);card.classList.add('open');}
function resetChecklist(){checked={};buildChecklist();}

function updateScore(){
var total=0,done=0;
CATS.forEach(function(cat){cat.items.forEach(function(_,ii){total++;if(checked[cat.id+'-'+ii])done++;});});
var pct=total>0?Math.round(done/total*100):0;
document.getElementById('scoreVal').textContent=pct+'%';
document.getElementById('progressFill').style.width=pct+'%';
var el=document.getElementById('scoreVal');
if(pct===100){el.style.color='var(--success)';document.getElementById('scoreMsg').textContent='\u2714 All '+total+' items checked! Your GSTR-9 is ready for submission.';}
else if(pct>=75){el.style.color='var(--primary)';document.getElementById('scoreMsg').textContent=done+' of '+total+' items done. Almost there \u2014 complete the remaining items before filing.';}
else if(pct>=25){el.style.color='var(--accent)';document.getElementById('scoreMsg').textContent=done+' of '+total+' items done. Good progress. Keep checking off items.';}
else{el.style.color='var(--danger)';document.getElementById('scoreMsg').textContent=done>0?done+' of '+total+' items done. Continue working through the checklist.':'Start checking off items below to track your GSTR-9 filing readiness.';}
}

var FAQS=[
{q:"Who must file GSTR-9 for FY 2025-26?",a:"All regular GST-registered taxpayers with aggregate turnover exceeding \u20B92 crore must file GSTR-9 as per Notification 15/2025-Central Tax. Below this threshold, filing is optional. Composition dealers file GSTR-4 instead. Non-resident taxable persons, ISDs, and TDS/TCS deductors are exempt."},
{q:"What is the due date for GSTR-9 for FY 2025-26?",a:"The standard due date is 31st December 2026. The government may extend via notification. Late filing attracts \u20B9200/day (\u20B9100 CGST + \u20B9100 SGST) capped at 0.5% of turnover in the state. Interest may also apply on any tax shortfall."},
{q:"What is the late fee for delayed GSTR-9?",a:"Late fee is \u20B9200 per day (\u20B9100 CGST + \u20B9100 SGST), capped at 0.25% of turnover under each Act (0.5% total). For example, 10-day delay for \u20B95 Cr turnover = \u20B92,000 (well within the \u20B92.5 lakh cap)."},
{q:"Can GSTR-9 be revised after filing?",a:"No. GSTR-9 cannot be revised once filed. Errors must be corrected through DRC-03 payments or subsequent year returns. This makes pre-filing accuracy critical \u2014 use this checklist thoroughly before clicking submit on the GST portal."},
{q:"What is GSTR-9C and who must file it?",a:"GSTR-9C reconciles GSTR-9 with audited financials. Mandatory for turnover above \u20B95 crore. From FY 2020-21, it is self-certified (no mandatory CA audit). It has Part A (reconciliation statement) and Part B (certification). Professional help is recommended."},
{q:"Which GSTR-9 tables are auto-populated?",a:"Tables 4 and 5 (outward supplies) from GSTR-1, and Table 8A (ITC) from GSTR-2A. Other tables including 6, 7, 9, and 10\u201314 require manual entry from books and reconciliation. Verify auto-populated data carefully before filing."},
{q:"What documents are needed for GSTR-9?",a:"12 monthly GSTR-1 and GSTR-3B summaries, GSTR-2B reports, books of accounts (trial balance, P&L), bank statements, all GST invoices/debit/credit notes, tax payment challans, and HSN-wise summary of inward and outward supplies."},
{q:"How to reconcile ITC for Tables 6, 7, and 8?",a:"Compare GSTR-3B Table 4A ITC with GSTR-2A data. Report eligible ITC in Table 6A/6A1. Reversals in Table 7 (split by Rule 37, 37A, 42, 43). Table 8A auto-populates from GSTR-2A; flag mismatches in 8B\u20138D."},
{q:"What are Tables 10 to 14 in GSTR-9?",a:"They capture amendments made in Apr\u2013Sep of the next FY relating to the current year. Table 10: supply amendments. Table 11: ITC amendments. Tables 12\u201313: ITC reversals/reclaims across years. Table 14: differential tax on amendments."},
{q:"What is the HSN summary requirement?",a:"Table 17 (outward) and Table 18 (inward). For turnover above \u20B95 Cr, 6-digit HSN codes. For \u20B91.5\u20135 Cr, 4-digit codes. Each HSN entry needs taxable value, IGST, CGST, SGST amounts, and quantity with UQC."},
{q:"How to handle ITC reversals in GSTR-9?",a:"Table 7 captures all reversals categorised by rule. Rule 37: non-payment within 180 days. Rule 37A: supplier default. Rule 42: exempt supply reversal. Rule 43: capital goods reversal. Each must be reported separately."},
{q:"What is the penalty for not filing GSTR-9?",a:"Beyond \u20B9200/day late fee (capped at 0.5% of turnover), non-filing triggers Section 61 scrutiny notice requiring filing within 15 days. Continued non-compliance leads to best judgment assessment under Section 62."},
{q:"Should I file GSTR-9 if turnover is below \u20B92 crore?",a:"Optional per Notification 15/2025-Central Tax. However, voluntary filing is recommended for businesses expecting growth above the threshold, wanting clean compliance records, or needing audit-ready documentation."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('DOMContentLoaded',function(){buildChecklist();buildFAQ();});
</script>
@endsection