@extends('layouts.app')
@section('meta')
    <title>GSTR-2A vs 3B Reconciliation | ITC Mismatch Tool</title>
    <meta name="description" content="GSTR-2A vs 3B reconciliation tool: compare ITC claimed in GSTR-3B against GSTR-2A/2B to spot mismatches, excess claims and penalty risk before filing. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gstr-2a-vs-3b-reconciliation">
    <meta property="og:title" content="GSTR-2A vs 3B Reconciliation Tool 2026 | Patron Accounting">
    <meta property="og:description" content="Compare ITC in GSTR-2A/2B with GSTR-3B. Spot mismatches, excess claims, and penalty risk instantly.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/gstr-2a-vs-3b-reconciliation">
    <meta property="og:image" content="/tools/og-gstr-2a-vs-3b-reconciliation.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GSTR-2A vs 3B Reconciliation Tool 2026">
    <meta name="twitter:description" content="Compare ITC in GSTR-2A/2B with GSTR-3B. Free mismatch finder tool.">
    <meta name="twitter:image" content="/tools/og-gstr-2a-vs-3b-reconciliation.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"GSTR-2A vs GSTR-3B Reconciliation Tool FY 2025-26","description":"Free online tool to compare Input Tax Credit claimed in GSTR-3B with ITC available in GSTR-2A and GSTR-2B auto-drafted statements. Identifies excess ITC claims, shortfall in claims, and calculates interest and penalty risk under Section 73 and 74 of CGST Act.","url":"/tools/gstr-2a-vs-3b-reconciliation","applicationCategory":"UtilityApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","sameAs":["https://www.linkedin.com/company/patron-accounting"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"GSTR-2A vs 3B Reconciliation","item":"/tools/gstr-2a-vs-3b-reconciliation"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is GSTR-2A vs GSTR-3B reconciliation?","acceptedAnswer":{"@type":"Answer","text":"GSTR-2A vs GSTR-3B reconciliation is the process of comparing Input Tax Credit available in the auto-generated GSTR-2A statement with the ITC actually claimed by the taxpayer in their filed GSTR-3B return. This comparison helps identify excess claims, missed credits, and mismatches that could trigger notices from GST authorities under Section 73 or 74 of CGST Act."}},{"@type":"Question","name":"Why is GSTR-2A vs 3B reconciliation important?","acceptedAnswer":{"@type":"Answer","text":"Reconciliation is critical because GST authorities regularly issue notices under Form ASMT-10 when ITC claimed in GSTR-3B exceeds the ITC reflected in GSTR-2A or GSTR-2B. Excess claims attract interest at 18 percent per annum and penalties. Regular reconciliation helps detect supplier defaults, avoid demand notices, and ensures accurate ITC claims within statutory limits."}},{"@type":"Question","name":"What is the difference between GSTR-2A and GSTR-2B?","acceptedAnswer":{"@type":"Answer","text":"GSTR-2A is a dynamic auto-populated statement that changes whenever a supplier files or amends their GSTR-1. GSTR-2B is a static statement generated on the 14th of each month and does not change after generation. From August 2020 onwards, GSTR-2B is the primary reference for ITC claims. GSTR-2A remains useful for annual reconciliation in GSTR-9."}},{"@type":"Question","name":"What happens if ITC in GSTR-3B exceeds GSTR-2A?","acceptedAnswer":{"@type":"Answer","text":"If ITC claimed in GSTR-3B exceeds the ITC available in GSTR-2A or GSTR-2B, the excess amount must be reversed with interest at 18 percent per annum from the date of claim. The GST officer may issue a notice under Section 73 for genuine errors or Section 74 for deliberate fraud. Penalties range from 10 percent to 100 percent of the tax amount."}},{"@type":"Question","name":"How often should I reconcile GSTR-2A with GSTR-3B?","acceptedAnswer":{"@type":"Answer","text":"You should reconcile every month before filing GSTR-3B. Monthly reconciliation ensures timely detection of supplier defaults and prevents accumulation of excess ITC claims. Additionally, perform annual reconciliation while preparing GSTR-9 annual return where Table 6 and Table 8 require detailed ITC comparison across months and supplier categories."}},{"@type":"Question","name":"What are common reasons for mismatch between GSTR-2A and GSTR-3B?","acceptedAnswer":{"@type":"Answer","text":"Common reasons include suppliers not filing GSTR-1 on time, invoices reported as B2C instead of B2B by suppliers, GSTIN errors in supplier filings, wrong tax period reporting, credit notes not reflected, reverse charge not separately identified, ITC claimed on ineligible items, and timing differences between invoice booking and supplier GSTR-1 filing dates."}},{"@type":"Question","name":"Can I claim ITC not appearing in GSTR-2A?","acceptedAnswer":{"@type":"Answer","text":"From January 2022 onwards, ITC can only be claimed if it appears in GSTR-2B as per Rule 36(4) of CGST Rules. Earlier, taxpayers could claim provisional ITC up to 5 percent over the GSTR-2A amount. Now the restriction is 100 percent linked to GSTR-2B. For invoices missing in GSTR-2B, you must follow up with suppliers to file their GSTR-1 correctly."}},{"@type":"Question","name":"What is Form ASMT-10 in GST?","acceptedAnswer":{"@type":"Answer","text":"Form GST ASMT-10 is a scrutiny notice issued by the GST officer when discrepancies are found between GSTR-3B and GSTR-2A or GSTR-2B. The taxpayer must reply within 30 days explaining the mismatch or paying the differential amount with interest. Failure to respond may lead to assessment proceedings under Section 73 or 74 of the CGST Act."}},{"@type":"Question","name":"How to check GSTR-2A vs 3B on GST portal?","acceptedAnswer":{"@type":"Answer","text":"Log in to gst.gov.in and go to Services then Returns then GSTR-2A vs GSTR-3B comparison. Select your GSTIN and financial year. The portal generates a month-wise report comparing ITC claimed in GSTR-3B Table 4A with ITC available in GSTR-2A at both GSTIN and PAN level. Download the report in Excel format for detailed analysis."}},{"@type":"Question","name":"What is the penalty for excess ITC claim in GSTR-3B?","acceptedAnswer":{"@type":"Answer","text":"Under Section 73 of CGST Act for genuine mistakes, the penalty is 10 percent of the tax amount or ten thousand rupees whichever is higher. Under Section 74 for fraud or deliberate evasion, the penalty is 100 percent of the tax amount. Additionally, interest at 18 percent per annum applies from the date of wrong claim until the date of reversal or payment."}},{"@type":"Question","name":"Should I use GSTR-2A or GSTR-2B for monthly reconciliation?","acceptedAnswer":{"@type":"Answer","text":"Use GSTR-2B for monthly reconciliation as it is the static reference document for ITC claims since August 2020. GSTR-2A being dynamic can change after your filing date creating confusion. However, use GSTR-2A for annual reconciliation while filing GSTR-9 as Table 8 specifically requires GSTR-2A data comparison across the full financial year."}},{"@type":"Question","name":"What is the time limit to claim ITC under GST?","acceptedAnswer":{"@type":"Answer","text":"ITC for any financial year must be claimed by the due date of filing GSTR-3B for September of the following financial year or the date of filing the annual return GSTR-9 whichever is earlier. For example, ITC for FY 2025-26 must be claimed by the September 2026 GSTR-3B due date. Missing this deadline means the ITC is permanently lost."}},{"@type":"Question","name":"What is Rule 36(4) and how does it limit ITC claims?","acceptedAnswer":{"@type":"Answer","text":"Rule 36(4) of CGST Rules restricts ITC claims to only those invoices that appear in the recipients GSTR-2B statement. From January 2022 no provisional ITC is allowed beyond what is reflected in GSTR-2B. Earlier taxpayers could claim up to 5 percent additional ITC over GSTR-2A but this relaxation has been fully removed making GSTR-2B the sole basis for ITC eligibility."}}]}
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


/* Tool-specific: Reconciliation */
.reco-grid{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:20px}
.reco-card{background:var(--surface);border:2px solid var(--border);border-radius:var(--radius);padding:20px}
.reco-card h3{font-size:15px;font-weight:700;color:var(--primary-dark);margin-bottom:16px;display:flex;align-items:center;gap:8px}
.reco-card h3 .dot{width:10px;height:10px;border-radius:50%;flex-shrink:0}
.reco-card.card-2a h3 .dot{background:var(--info)}
.reco-card.card-3b h3 .dot{background:var(--accent)}
.fg-sm{margin-bottom:14px}
.fg-sm label{display:block;font-size:12px;font-weight:600;color:var(--text-secondary);margin-bottom:4px}
.fg-sm input{width:100%;padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--card);transition:border-color 0.2s;outline:none}
.fg-sm input:focus{border-color:var(--primary)}
.fg-sm .hint{font-size:11px;color:var(--text-muted);margin-top:2px}
.mismatch-bar{display:flex;height:32px;border-radius:8px;overflow:hidden;margin:16px 0}
.mismatch-bar .seg{display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;color:#fff;transition:width 0.5s}
.seg-match{background:var(--success)}
.seg-excess{background:var(--danger)}
.seg-short{background:var(--accent)}
@media(max-width:600px){.reco-grid{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#tool">Reconciliation Tool</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#about">About Reconciliation</a>
        <a href="#reasons">Mismatch Reasons</a>
        <a href="#penalties">Penalties</a>
        <a href="#compliance">Compliance</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<header class="hero" id="tool">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>GSTR-2A vs GSTR-3B <span>Reconciliation Tool</span> &mdash; ITC Mismatch Finder</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This free tool compares your ITC claimed in GSTR-3B with ITC available in GSTR-2A/2B across CGST, SGST, IGST, and Cess. It instantly flags excess claims, shortfalls, interest liability at 18% p.a., and penalty risk under Section 73/74 of the CGST Act. Use it monthly before filing GSTR-3B and annually while preparing GSTR-9. Mismatches trigger ASMT-10 scrutiny notices &mdash; reconcile proactively to avoid demand proceedings.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Reconcile GSTR-2A/2B vs GSTR-3B</h2>
            <noscript><div class="noscript-box">This tool requires JavaScript. Please enable JavaScript or <a href="https://wa.me/919459456700">contact our CA team</a> for manual reconciliation help.</div></noscript>

            <div class="calc-row">
                <div class="form-group">
                    <label>Tax Period</label>
                    <select id="inMonth">
                        <option value="Apr 2025">April 2025</option><option value="May 2025">May 2025</option><option value="Jun 2025">June 2025</option><option value="Jul 2025">July 2025</option><option value="Aug 2025">August 2025</option><option value="Sep 2025">September 2025</option><option value="Oct 2025">October 2025</option><option value="Nov 2025">November 2025</option><option value="Dec 2025">December 2025</option><option value="Jan 2026">January 2026</option><option value="Feb 2026" selected>February 2026</option><option value="Mar 2026">March 2026</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Reference Statement</label>
                    <div class="toggle-group" id="refType">
                        <button type="button" class="toggle-btn" data-val="2a" onclick="setTg('refType',this)">GSTR-2A<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Dynamic</small></button>
                        <button type="button" class="toggle-btn active" data-val="2b" onclick="setTg('refType',this)">GSTR-2B<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Static (recommended)</small></button>
                    </div>
                </div>
            </div>

            <div class="reco-grid">
                <div class="reco-card card-2a">
                    <h3><span class="dot"></span> ITC as per GSTR-2A/2B (&#8377;)</h3>
                    <div class="fg-sm"><label>IGST</label><input type="text" id="r2aIgst" placeholder="0" oninput="fmtNum(this)"></div>
                    <div class="fg-sm"><label>CGST</label><input type="text" id="r2aCgst" placeholder="0" oninput="fmtNum(this)"></div>
                    <div class="fg-sm"><label>SGST</label><input type="text" id="r2aSgst" placeholder="0" oninput="fmtNum(this)"></div>
                    <div class="fg-sm"><label>Cess</label><input type="text" id="r2aCess" placeholder="0" oninput="fmtNum(this)"></div>
                    <div class="fg-sm"><label>Total ITC Available</label><input type="text" id="r2aTotal" readonly style="background:var(--surface-alt);font-weight:700;color:var(--primary)"></div>
                </div>
                <div class="reco-card card-3b">
                    <h3><span class="dot" style="background:var(--accent)"></span> ITC Claimed in GSTR-3B (&#8377;)</h3>
                    <div class="fg-sm"><label>IGST</label><input type="text" id="r3bIgst" placeholder="0" oninput="fmtNum(this)"></div>
                    <div class="fg-sm"><label>CGST</label><input type="text" id="r3bCgst" placeholder="0" oninput="fmtNum(this)"></div>
                    <div class="fg-sm"><label>SGST</label><input type="text" id="r3bSgst" placeholder="0" oninput="fmtNum(this)"></div>
                    <div class="fg-sm"><label>Cess</label><input type="text" id="r3bCess" placeholder="0" oninput="fmtNum(this)"></div>
                    <div class="fg-sm"><label>Total ITC Claimed</label><input type="text" id="r3bTotal" readonly style="background:var(--surface-alt);font-weight:700;color:var(--accent)"></div>
                </div>
            </div>

            <div class="form-group">
                <label>Days Since Due Date (for interest calculation)</label>
                <input type="number" id="inDays" value="30" min="0" max="1095" style="max-width:200px">
                <div style="font-size:12px;color:var(--text-muted);margin-top:4px">Number of days the excess ITC has been outstanding</div>
            </div>

            <button class="btn-calculate" onclick="reconcile()">Reconcile &amp; Find Mismatches</button>
            <button class="btn-reset" onclick="resetForm()">&#8634; Reset All</button>

            <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the GSTR-2A vs 3B Reconciliation Tool</h2>
            <p>This free tool helps you compare the ITC available in your auto-drafted statements (GSTR-2A or GSTR-2B) with the ITC you have actually claimed in your filed GSTR-3B return. Follow these steps:</p>
            <h3>Step 1 &mdash; Select Period and Reference</h3>
            <p>Choose the tax period (month) and whether you want to compare against GSTR-2A (dynamic, changes as suppliers file) or GSTR-2B (static, generated on 14th of each month). The <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a> recommends GSTR-2B as the primary reference for monthly ITC claims since August 2020.</p>
            <h3>Step 2 &mdash; Enter ITC from GSTR-2A/2B</h3>
            <p>Download your GSTR-2A or GSTR-2B from the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal</a> and enter the total eligible ITC amounts for IGST, CGST, SGST, and Cess. You can find these in the summary section of your GSTR-2B statement.</p>
            <h3>Step 3 &mdash; Enter ITC from GSTR-3B</h3>
            <p>Enter the ITC amounts you claimed in Table 4A of your filed GSTR-3B for the same period. These figures represent what you have actually reported to the government as your input tax credit for the month.</p>
            <h3>Step 4 &mdash; View Reconciliation Results</h3>
            <p>The tool instantly shows component-wise mismatches, whether you have excess claims (risk of notice) or unclaimed credits (opportunity to claim in subsequent months), interest liability at 18% p.a., and the penalty exposure under Section 73/74 of the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act</a>.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Always reconcile BEFORE filing your GSTR-3B. Download the GSTR-2B statement immediately after it is generated on the 14th and compare it with your books of accounts. This gives you 5&ndash;6 days to follow up with suppliers for any missing invoices before the GSTR-3B due date on the 20th. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends maintaining a monthly reconciliation register.</p>
            </div>
        </section>

        <section class="content-section" id="about">
            <h2>What Is GSTR-2A vs GSTR-3B Reconciliation?</h2>
            <p>GSTR-2A vs GSTR-3B reconciliation is the process of comparing the Input Tax Credit (ITC) available as per auto-generated statements from the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal</a> with the ITC actually claimed by the taxpayer in their filed GSTR-3B returns. This comparison is essential for ensuring that businesses do not over-claim or under-claim ITC, both of which have serious financial and legal consequences.</p>
            <p><strong>GSTR-2A</strong> is a dynamic auto-populated statement that reflects all inward supplies reported by your suppliers in their GSTR-1 returns. It changes whenever a supplier files or amends their return. <strong>GSTR-2B</strong>, introduced in August 2020, is a static statement generated on the 14th of each month that provides a fixed reference point for ITC claims. <strong>GSTR-3B</strong> is the monthly self-declared summary return where you report your outward supplies, ITC claims, and compute net tax payable.</p>
            <p>The GST authorities have been actively issuing scrutiny notices in Form <strong>ASMT-10</strong> to taxpayers where ITC claimed in GSTR-3B exceeds the ITC reflected in GSTR-2A/2B. According to the <a href="https://gstcouncil.gov.in/" target="_blank" rel="noopener">GST Council</a>, such mismatches are flagged automatically by the system and can trigger assessment proceedings if not resolved within 30 days.</p>
            <h3>GSTR-2A vs GSTR-2B &mdash; Key Difference</h3>
            <p>GSTR-2A is dynamic and keeps changing as suppliers file their GSTR-1. GSTR-2B is static and generated once on the 14th of each month. For monthly ITC claims in GSTR-3B, use GSTR-2B as the reference (as per Rule 36(4) of CGST Rules). For annual reconciliation in GSTR-9, use GSTR-2A as Table 8 specifically requires GSTR-2A data comparison.</p>
        </section>

        <section class="content-section" id="reasons">
            <h2>Common Reasons for ITC Mismatch Between GSTR-2A and GSTR-3B</h2>
            <p>Understanding why mismatches occur is the first step toward preventing them. Here are the most common reasons identified by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> and GST authorities:</p>
            <ul>
                <li><strong>Supplier not filing GSTR-1:</strong> If your supplier has not filed their GSTR-1 for the period, the invoice will not appear in your GSTR-2A/2B, but you may have already claimed ITC in GSTR-3B based on your books</li>
                <li><strong>B2C vs B2B misclassification:</strong> Supplier reports the transaction as B2C (consumer) instead of B2B (business), so the invoice does not appear in your GSTR-2A</li>
                <li><strong>Wrong GSTIN:</strong> Supplier enters an incorrect GSTIN, causing the invoice to appear in another taxpayer's GSTR-2A instead of yours</li>
                <li><strong>Timing differences:</strong> Invoice booked in your books in one month but supplier files GSTR-1 for a different month</li>
                <li><strong>Credit notes not reflected:</strong> Supplier issues credit notes that reduce ITC, but these may not appear immediately in GSTR-2A</li>
                <li><strong>Reverse charge ITC:</strong> ITC on reverse charge supplies does not appear in GSTR-2A as there is no corresponding supplier GSTR-1</li>
                <li><strong>ITC on ineligible items:</strong> ITC claimed on blocked items under Section 17(5) like motor vehicles, food, personal use items</li>
                <li><strong>Import duties:</strong> IGST on imports appears in GSTR-2A under IMPG section with different timing than bill of entry date</li>
            </ul>
            <div class="callout warn">
                <p><strong>Critical Warning:</strong> From January 2022 onwards, ITC claims are 100% linked to GSTR-2B as per <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a> notification. No provisional ITC is allowed. If an invoice does not appear in GSTR-2B, you cannot claim it in GSTR-3B regardless of having the physical invoice. Follow up with suppliers immediately to file their GSTR-1.</p>
            </div>
        </section>

        <section class="content-section" id="penalties">
            <h2>Penalties and Interest for ITC Mismatches</h2>
            <p>Excess ITC claims detected during reconciliation or by GST authorities attract both interest and penalties under the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act, 2017</a>:</p>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Scenario</th><th>Section</th><th>Interest</th><th>Penalty</th></tr></thead>
                <tbody>
                    <tr><td>Genuine error / non-fraud</td><td>Section 73</td><td>18% p.a.</td><td>10% of tax or &#8377;10,000 (higher)</td></tr>
                    <tr><td>Fraud / wilful misstatement</td><td>Section 74</td><td>24% p.a.</td><td>100% of tax amount</td></tr>
                    <tr><td>Voluntary reversal before notice</td><td>Section 73(5)</td><td>18% p.a.</td><td>No penalty</td></tr>
                    <tr><td>Payment within 30 days of notice</td><td>Section 73(8)</td><td>18% p.a.</td><td>No penalty</td></tr>
                </tbody>
            </table>
            </div>
            <div class="formula-box">
                <span class="label">Interest Calculation:</span><br>
                Interest = Excess ITC &times; 18% &times; (Days / 365)<br><br>
                <span class="label">Example:</span><br>
                Excess ITC = &#8377;50,000 | Days outstanding = 90<br>
                Interest = 50,000 &times; 0.18 &times; (90/365) = <span class="label">&#8377;2,219</span>
            </div>
            <div class="callout green">
                <p><strong>Expert Tip:</strong> If you discover excess ITC during reconciliation, reverse it voluntarily in your next GSTR-3B before receiving a notice. Under Section 73(5), voluntary reversal with interest means no penalty. This proactive approach saves significant money and avoids the stress of demand proceedings.</p>
            </div>
        </section>

        <section class="content-section" id="compliance">
            <h2>Reconciliation Best Practices for GST Compliance</h2>
            <p>Maintaining a systematic reconciliation process is key to clean GST compliance. Here are practices recommended by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>:</p>
            <h3>Monthly Process</h3>
            <p>Download GSTR-2B on the 14th &rarr; compare with books &rarr; identify mismatches &rarr; follow up with suppliers for missing invoices &rarr; file GSTR-3B by 20th with reconciled ITC. Maintain a monthly reconciliation register documenting all mismatches and resolutions.</p>
            <h3>Quarterly Review</h3>
            <p>Every quarter, review cumulative mismatches across 3 months. Identify chronic defaulter suppliers who consistently fail to file GSTR-1 on time. Consider switching to suppliers with better compliance records or negotiating compliance clauses in contracts.</p>
            <h3>Annual Reconciliation for GSTR-9</h3>
            <p>While preparing the annual return GSTR-9, Table 6 requires ITC as per GSTR-3B and Table 8 requires ITC as per GSTR-2A for the full year. Cross-reconcile both at the annual level and disclose all adjustments. This is mandatory for taxpayers with turnover above &#8377;2 crore.</p>
            <p>For businesses with turnover above &#8377;5 crore, the GSTR-9C reconciliation statement requires further matching of these figures with audited financial statements. Engage a Chartered Accountant to ensure all three data points (books, GSTR-3B, GSTR-2A) are consistent.</p>
        </section>

        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need help with GST reconciliation?</strong> Our CAs handle GSTR-2A/2B vs 3B reconciliation, GSTR-9 preparation, and respond to ASMT-10 scrutiny notices for businesses across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GSTR-2A%20vs%203B%20Reconciliation%20tool.%20I%20need%20help%20with%20GST%20reconciliation.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions &mdash; GSTR-2A vs 3B Reconciliation</h2>
            <div id="faqList"></div>
        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Need Reconciliation Help?</h3>
            <p>Our CAs handle GSTR-2A/2B vs 3B reconciliation, GSTR-9 preparation, and ASMT-10 notice replies across India.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20GST%20reconciliation.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>GST Services</h3>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a>
            <a href="/gst-annual-return-filing" class="sidebar-link">GST Annual Return (GSTR-9) <span class="arrow">&rarr;</span></a>
            <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit <span class="arrow">&rarr;</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
            <a href="/gst-returns-for-e-commerce-operator" class="sidebar-link">E-Commerce GST Returns <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-return-due-date-tracker" class="sidebar-link">GST Due Date Tracker <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-composition-scheme-eligibility" class="sidebar-link">Composition Eligibility <span class="arrow">&rarr;</span></a>
            <a href="/tools/hsn-sac-code-finder" class="sidebar-link">HSN/SAC Code Finder <span class="arrow">&rarr;</span></a>
            <a href="/tools/invoice-generator" class="sidebar-link">GST Invoice Generator <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
        </div>
    </aside>
</div>

<script>
function getVal(id){var g=document.getElementById(id);if(!g)return'';var a=g.querySelector('.toggle-btn.active');return a?a.getAttribute('data-val'):'';}
function setTg(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');}
function pn(id){var el=document.getElementById(id);return el?parseInt(el.value.replace(/[^0-9]/g,''))||0:0;}
function fmtNum(el){var v=el.value.replace(/[^0-9]/g,'');if(v)el.value=parseInt(v).toLocaleString('en-IN');updateTotals();}
function fmt(n){return'\u20B9'+Math.abs(n).toLocaleString('en-IN');}

function updateTotals(){
var t2a=pn('r2aIgst')+pn('r2aCgst')+pn('r2aSgst')+pn('r2aCess');
var t3b=pn('r3bIgst')+pn('r3bCgst')+pn('r3bSgst')+pn('r3bCess');
document.getElementById('r2aTotal').value=t2a?parseInt(t2a).toLocaleString('en-IN'):'';
document.getElementById('r3bTotal').value=t3b?parseInt(t3b).toLocaleString('en-IN'):'';
}

function resetForm(){
['r2aIgst','r2aCgst','r2aSgst','r2aCess','r3bIgst','r3bCgst','r3bSgst','r3bCess','r2aTotal','r3bTotal'].forEach(function(id){document.getElementById(id).value='';});
document.getElementById('inDays').value='30';
document.getElementById('resPanel').classList.remove('visible');
}

function reconcile(){
var igst2a=pn('r2aIgst'),cgst2a=pn('r2aCgst'),sgst2a=pn('r2aSgst'),cess2a=pn('r2aCess');
var igst3b=pn('r3bIgst'),cgst3b=pn('r3bCgst'),sgst3b=pn('r3bSgst'),cess3b=pn('r3bCess');
var t2a=igst2a+cgst2a+sgst2a+cess2a,t3b=igst3b+cgst3b+sgst3b+cess3b;
if(!t2a&&!t3b){alert('Please enter ITC amounts in at least one column.');return;}
var days=parseInt(document.getElementById('inDays').value)||30;
var period=document.getElementById('inMonth').value;
var ref=getVal('refType')==='2a'?'GSTR-2A':'GSTR-2B';

var diff=t3b-t2a;
var isExcess=diff>0;
var isShort=diff<0;
var isMatch=diff===0;

var h='';

// Hero boxes
if(isMatch){
h+='<div class="res-hero"><div class="res-box eligible"><div class="rb-label">Reconciliation Status</div><div class="rb-value">\u2714 MATCHED</div><div class="rb-sub">No mismatch found for '+period+'</div></div><div class="res-box rate"><div class="rb-label">Net Difference</div><div class="rb-value">\u20B90</div><div class="rb-sub">ITC perfectly reconciled</div></div></div>';
}else if(isExcess){
h+='<div class="res-hero"><div class="res-box ineligible"><div class="rb-label">Reconciliation Status</div><div class="rb-value">\u26A0 EXCESS CLAIM</div><div class="rb-sub">ITC in 3B exceeds '+ref+'</div></div><div class="res-box savings" style="background:linear-gradient(135deg,#dc2626,#ef4444)"><div class="rb-label">Excess ITC Claimed</div><div class="rb-value">'+fmt(diff)+'</div><div class="rb-sub">Must be reversed with interest</div></div></div>';
}else{
h+='<div class="res-hero"><div class="res-box rate"><div class="rb-label">Reconciliation Status</div><div class="rb-value">\u2139 SHORT CLAIM</div><div class="rb-sub">ITC in 3B is less than '+ref+'</div></div><div class="res-box eligible"><div class="rb-label">Unclaimed ITC</div><div class="rb-value">'+fmt(diff)+'</div><div class="rb-sub">Can be claimed in future GSTR-3B</div></div></div>';
}

// Mismatch bar
if(!isMatch){
var matchPct=t2a>0&&t3b>0?Math.round(Math.min(t2a,t3b)/Math.max(t2a,t3b)*100):0;
var diffPct=100-matchPct;
h+='<div class="res-card"><div class="res-card-hd"><h3>ITC Match Ratio</h3><span class="res-badge '+(matchPct>=95?'pass':matchPct>=80?'teal':'fail')+'">'+matchPct+'% Match</span></div><div class="res-card-bd">';
h+='<div class="mismatch-bar"><div class="seg seg-match" style="width:'+matchPct+'%">'+matchPct+'%</div><div class="seg '+(isExcess?'seg-excess':'seg-short')+'" style="width:'+diffPct+'%">'+diffPct+'%</div></div>';
h+='<div style="display:flex;justify-content:space-between;font-size:12px;color:var(--text-muted)"><span>\u2714 Matched</span><span>'+(isExcess?'\u2718 Excess in 3B':'\u25B2 Unclaimed')+'</span></div>';
h+='</div></div>';
}

// Component-wise table
h+='<div class="res-card"><div class="res-card-hd"><h3>Component-Wise Breakdown &mdash; '+period+'</h3><span class="res-badge info">'+ref+'</span></div>';
h+='<div class="res-card-bd"><table class="cmp-table">';
h+='<tr><th>Component</th><th>'+ref+'</th><th>GSTR-3B</th><th>Difference</th><th>Status</th></tr>';
var comps=[{n:'IGST',a:igst2a,b:igst3b},{n:'CGST',a:cgst2a,b:cgst3b},{n:'SGST',a:sgst2a,b:sgst3b},{n:'Cess',a:cess2a,b:cess3b}];
comps.forEach(function(c){
var d=c.b-c.a;var st=d===0?'<span style="color:var(--success)">\u2714 Match</span>':d>0?'<span style="color:var(--danger)">\u26A0 Excess</span>':'<span style="color:var(--info)">\u25B2 Short</span>';
h+='<tr><td><strong>'+c.n+'</strong></td><td>'+fmt(c.a)+'</td><td>'+fmt(c.b)+'</td><td style="font-weight:700;color:'+(d>0?'var(--danger)':d<0?'var(--info)':'var(--success)')+'">'+( d>0?'+':'')+fmt(d).replace('\u20B9',d<0?'-\u20B9':'\u20B9')+'</td><td>'+st+'</td></tr>';
});
h+='<tr style="background:var(--surface-alt);font-weight:700"><td>TOTAL</td><td>'+fmt(t2a)+'</td><td>'+fmt(t3b)+'</td><td style="color:'+(diff>0?'var(--danger)':diff<0?'var(--info)':'var(--success)')+'">'+(diff>0?'+':'')+fmt(diff).replace('\u20B9',diff<0?'-\u20B9':'\u20B9')+'</td><td>'+(isMatch?'<span style="color:var(--success)">\u2714</span>':isExcess?'<span style="color:var(--danger)">\u26A0</span>':'<span style="color:var(--info)">\u25B2</span>')+'</td></tr>';
h+='</table></div></div>';

// Interest & penalty (only if excess)
if(isExcess){
var interest=Math.round(diff*0.18*days/365);
var penalty73=Math.max(Math.round(diff*0.1),10000);
h+='<div class="res-card"><div class="res-card-hd"><h3>Interest &amp; Penalty Exposure</h3><span class="res-badge fail">Risk</span></div>';
h+='<div class="res-card-bd"><table class="cmp-table">';
h+='<tr><th>Item</th><th>Amount</th><th>Basis</th></tr>';
h+='<tr><td>Excess ITC to Reverse</td><td class="neg" style="font-size:16px">'+fmt(diff)+'</td><td>3B claimed minus '+ref+' available</td></tr>';
h+='<tr><td>Interest @ 18% p.a.</td><td class="neg">'+fmt(interest)+'</td><td>'+days+' days outstanding</td></tr>';
h+='<tr><td>Penalty (Sec 73 \u2014 genuine error)</td><td class="neg">'+fmt(penalty73)+'</td><td>10% of tax or \u20B910,000</td></tr>';
h+='<tr><td>Penalty (Sec 74 \u2014 fraud)</td><td class="neg">'+fmt(diff)+'</td><td>100% of tax amount</td></tr>';
h+='<tr style="background:var(--surface-alt)"><td><strong>Total Exposure (Sec 73)</strong></td><td class="neg" style="font-size:16px"><strong>'+fmt(diff+interest+penalty73)+'</strong></td><td>Reversal + Interest + Penalty</td></tr>';
h+='</table></div></div>';
}

// Recommendation
if(isExcess){
h+='<div class="callout warn"><p><strong>Action Required:</strong> You have claimed \u20B9'+Math.abs(diff).toLocaleString('en-IN')+' more ITC in GSTR-3B than available in '+ref+'. Reverse the excess in your next GSTR-3B filing with interest at 18% p.a. to avoid penalty. Verify if suppliers have filed their GSTR-1 for the period. If the mismatch is due to supplier default, follow up immediately.</p></div>';
}else if(isShort){
h+='<div class="callout"><p><strong>Opportunity:</strong> You have \u20B9'+Math.abs(diff).toLocaleString('en-IN')+' of eligible ITC in '+ref+' that you have not claimed in GSTR-3B. You can claim this in a subsequent GSTR-3B filing before the deadline (GSTR-3B of September following the financial year or GSTR-9 filing date, whichever is earlier). Do not let eligible ITC lapse.</p></div>';
}else{
h+='<div class="callout green"><p><strong>All Clear:</strong> Your ITC in GSTR-3B perfectly matches '+ref+' for '+period+'. No action needed. Continue maintaining this discipline monthly to avoid scrutiny notices.</p></div>';
}

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20GSTR-2A%20vs%203B%20reconciliation%20tool%20and%20found%20mismatches.%20Please%20help%20me%20with%20GST%20reconciliation." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/gst-late-fee-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg> Late Fee Calculator</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What is GSTR-2A vs GSTR-3B reconciliation?",a:"It is the process of comparing ITC available in the auto-generated GSTR-2A/2B statement with ITC claimed in filed GSTR-3B returns. This identifies excess claims, missed credits, and mismatches that could trigger ASMT-10 scrutiny notices from GST authorities under Section 73 or 74 of the CGST Act."},
{q:"Why is GSTR-2A vs 3B reconciliation important?",a:"GST authorities issue notices under Form ASMT-10 when ITC in GSTR-3B exceeds GSTR-2A/2B. Excess claims attract 18% interest and penalties. Regular reconciliation detects supplier defaults, avoids demand notices, and ensures accurate ITC claims within statutory limits set by Rule 36(4)."},
{q:"What is the difference between GSTR-2A and GSTR-2B?",a:"GSTR-2A is dynamic \u2014 it changes whenever a supplier files or amends GSTR-1. GSTR-2B is static, generated on the 14th of each month. Since August 2020, GSTR-2B is the primary ITC reference. Use GSTR-2B for monthly claims and GSTR-2A for annual reconciliation in GSTR-9."},
{q:"What happens if ITC in GSTR-3B exceeds GSTR-2A?",a:"Excess ITC must be reversed with 18% interest from the claim date. The GST officer may issue notice under Section 73 (genuine error \u2014 10% penalty) or Section 74 (fraud \u2014 100% penalty). Voluntary reversal before notice avoids penalty entirely under Section 73(5)."},
{q:"How often should I reconcile GSTR-2A with GSTR-3B?",a:"Monthly, before filing GSTR-3B. Download GSTR-2B on the 14th, compare with books, resolve mismatches, then file by the 20th. Also do annual reconciliation for GSTR-9 where Table 6 and Table 8 require full-year ITC comparison across months."},
{q:"What are common reasons for ITC mismatch?",a:"Suppliers not filing GSTR-1, B2C vs B2B misclassification, wrong GSTIN entry, timing differences between invoice booking and supplier filing, credit notes not reflected, reverse charge ITC not in 2A, and claims on ineligible items under Section 17(5)."},
{q:"Can I claim ITC not appearing in GSTR-2A?",a:"From January 2022, ITC can only be claimed if it appears in GSTR-2B per Rule 36(4). No provisional ITC is allowed. For missing invoices, follow up with suppliers to file GSTR-1 correctly. The invoice will then appear in the next GSTR-2B cycle."},
{q:"What is Form ASMT-10 in GST?",a:"Form GST ASMT-10 is a scrutiny notice issued when discrepancies are found between GSTR-3B and GSTR-2A/2B. You must reply within 30 days explaining the mismatch or paying the differential with interest. Non-response leads to assessment under Section 73 or 74."},
{q:"How to check GSTR-2A vs 3B on GST portal?",a:"Log in to gst.gov.in \u2192 Services \u2192 Returns \u2192 GSTR-2A vs GSTR-3B. Select GSTIN and financial year. The portal generates month-wise comparison at GSTIN and PAN level. Download Excel report for detailed analysis of ITC mismatches across components."},
{q:"What is the penalty for excess ITC in GSTR-3B?",a:"Section 73: 10% of tax or \u20B910,000 (whichever is higher) for genuine errors. Section 74: 100% of tax amount for fraud. Interest at 18% applies in both cases. Voluntary reversal with interest before notice avoids all penalties under Section 73(5)."},
{q:"Should I use GSTR-2A or GSTR-2B for reconciliation?",a:"Use GSTR-2B for monthly reconciliation as it is the static reference since August 2020. GSTR-2A being dynamic can confuse. However, use GSTR-2A for annual reconciliation in GSTR-9 as Table 8 specifically requires GSTR-2A data."},
{q:"What is the time limit to claim ITC under GST?",a:"ITC must be claimed by the GSTR-3B due date for September of the following financial year or the GSTR-9 filing date, whichever is earlier. For FY 2025-26, claim by September 2026 GSTR-3B. Missing this deadline means permanent loss of that ITC."},
{q:"What is Rule 36(4) and how does it limit ITC claims?",a:"Rule 36(4) of CGST Rules restricts ITC to invoices appearing in GSTR-2B only. From January 2022, no provisional ITC beyond GSTR-2B is allowed. Earlier, 5% additional ITC over GSTR-2A was permitted, but this relaxation is fully removed. GSTR-2B is now the sole basis for ITC eligibility each month."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))reconcile();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>

@endsection