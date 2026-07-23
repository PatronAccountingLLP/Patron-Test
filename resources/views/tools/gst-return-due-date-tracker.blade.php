@extends('layouts.app')
@section('meta')
    <title>GST Return Due Date Tracker &mdash; Filing Calendar 2026</title>
    <meta name="description" content="GST return due dates for FY 2025-26 &mdash; GSTR-1, 3B, 4, 9 filing calendar with late fee alerts. Track monthly and quarterly deadlines. Check now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gst-return-due-date-tracker">
    <meta property="og:title" content="GST Return Due Date Tracker &mdash; Filing Calendar 2026">
    <meta property="og:description" content="GST return due dates for FY 2025-26. Track GSTR-1, 3B, 4, 9 filing deadlines with late fee alerts.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/gst-return-due-date-tracker">
    <meta property="og:image" content="/tools/og-gst-return-due-date-tracker.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Return Due Date Tracker &mdash; Filing Calendar 2026">
    <meta name="twitter:description" content="Track GSTR-1, 3B, 4, 9 due dates for FY 2025-26 with late fee calculator.">
    <meta name="twitter:image" content="/tools/og-gst-return-due-date-tracker.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"GST Return Due Date Tracker FY 2025-26","description":"GST Return Due Date Tracker displays month-wise filing deadlines for GSTR-1, GSTR-3B, GSTR-4, GSTR-9, GSTR-9C, CMP-08, and IFF for FY 2025-26. Covers monthly, quarterly QRMP, and composition scheme taxpayers with late fee and interest penalty details.","url":"/tools/gst-return-due-date-tracker","applicationCategory":"UtilityApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","sameAs":["https://www.linkedin.com/company/patron-accounting"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"GST Return Due Date Tracker","item":"/tools/gst-return-due-date-tracker"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is the due date for filing GSTR-1 every month?","acceptedAnswer":{"@type":"Answer","text":"GSTR-1 must be filed by the 11th of the following month for taxpayers with annual turnover exceeding \u20B95 crore who file monthly. Taxpayers under the QRMP scheme with turnover up to \u20B95 crore file GSTR-1 quarterly by the 13th of the month following the quarter end. Late filing attracts a fee of \u20B950 per day capped at \u20B910,000."}},{"@type":"Question","name":"What is the due date for GSTR-3B filing?","acceptedAnswer":{"@type":"Answer","text":"GSTR-3B is due by the 20th of the following month for monthly filers. For quarterly filers under the QRMP scheme, the due date is the 22nd or 24th of the month following the quarter depending on the state. Category A states file by the 22nd while Category B states file by the 24th of the month after the quarter ends."}},{"@type":"Question","name":"What is the QRMP scheme and who is eligible?","acceptedAnswer":{"@type":"Answer","text":"The Quarterly Return Monthly Payment scheme allows taxpayers with aggregate turnover up to \u20B95 crore in the previous financial year to file GSTR-1 and GSTR-3B quarterly instead of monthly. Tax payments are still made monthly using PMT-06 challan by the 25th of the following month. The scheme reduces filing burden from 24 returns to just 8 per year."}},{"@type":"Question","name":"What is the late fee for missing GST return due dates?","acceptedAnswer":{"@type":"Answer","text":"The late fee for GSTR-3B and GSTR-1 is \u20B950 per day of delay &mdash; \u20B925 under CGST and \u20B925 under SGST. For nil returns the late fee is \u20B920 per day. The maximum late fee is capped at \u20B910,000 per return. Additionally interest at 18 percent per annum is charged on the outstanding tax amount from the due date until the date of payment."}},{"@type":"Question","name":"When is GSTR-9 annual return due for FY 2025-26?","acceptedAnswer":{"@type":"Answer","text":"The GSTR-9 annual return for FY 2025-26 is due by 31st December 2026. This applies to all regular taxpayers. Businesses with aggregate turnover exceeding \u20B95 crore must also file GSTR-9C reconciliation statement by the same date. Filing GSTR-9 is optional for taxpayers with turnover up to \u20B92 crore as per the latest CBIC notification."}},{"@type":"Question","name":"What is GSTR-4 and when is it due?","acceptedAnswer":{"@type":"Answer","text":"GSTR-4 is the annual return filed by taxpayers registered under the GST composition scheme. For FY 2025-26 the due date is 30th April 2027. Composition dealers must also pay tax quarterly using Form CMP-08 by the 18th of the month following each quarter. The composition scheme is available for businesses with turnover up to \u20B91.5 crore."}},{"@type":"Question","name":"What happens if GST registration is cancelled for non-filing?","acceptedAnswer":{"@type":"Answer","text":"If a taxpayer fails to file GST returns for a continuous period of six months, the GST officer may initiate suo motu cancellation of registration under Section 29 of the CGST Act. Before cancellation a show cause notice in Form REG-17 is issued. The taxpayer can apply for revocation within 30 days of the cancellation order by filing Form REG-21."}},{"@type":"Question","name":"What is PMT-06 challan used for under QRMP?","acceptedAnswer":{"@type":"Answer","text":"PMT-06 is the challan used by QRMP scheme taxpayers to make monthly tax payments during the first two months of each quarter. The payment is due by the 25th of the following month. Taxpayers can use either the fixed sum method based on previous quarter liability divided by three or the self-assessment method based on actual monthly liability."}},{"@type":"Question","name":"Is GSTR-9C mandatory for all businesses?","acceptedAnswer":{"@type":"Answer","text":"No, GSTR-9C is mandatory only for businesses with aggregate annual turnover exceeding \u20B95 crore in the relevant financial year. It is a self-certified reconciliation statement that reconciles the values in GSTR-9 with the audited financial statements. From FY 2020-21 onwards, GSTR-9C is self-certified by the taxpayer and no longer requires CA certification."}},{"@type":"Question","name":"Can I file GST returns after the due date?","acceptedAnswer":{"@type":"Answer","text":"Yes, GST returns can be filed after the due date but with late fees and interest. GSTR-1 and GSTR-3B can be filed late with applicable penalties. However, returns cannot be filed after three years from the due date as per recent amendments introduced from FY 2024-25 onwards. This three year window applies to all return types under the CGST Act."}},{"@type":"Question","name":"What is IFF and when should it be filed?","acceptedAnswer":{"@type":"Answer","text":"The Invoice Furnishing Facility allows QRMP scheme taxpayers to upload B2B invoices in the first two months of each quarter. IFF is due by the 13th of the following month. It helps recipients claim timely Input Tax Credit without waiting for the quarterly GSTR-1. IFF is optional and covers only B2B invoices up to \u20B950 lakh per month."}},{"@type":"Question","name":"How do I check my GST filing status online?","acceptedAnswer":{"@type":"Answer","text":"Log in to the GST portal at gst.gov.in with your credentials and navigate to Services then Returns then Track Return Status. Select the financial year and return period to view the filing status of each return type. You can also check the return filing status from the Returns Dashboard which shows pending and filed returns for each tax period."}},{"@type":"Question","name":"What are the consequences of blocking E-Way Bill generation?","acceptedAnswer":{"@type":"Answer","text":"If a taxpayer fails to file GSTR-3B for two or more consecutive months, their E-Way Bill generation facility gets blocked automatically on the GST portal. This means the business cannot transport goods until the pending returns are filed. The blocking applies to both inward and outward E-Way Bills and affects regular business operations significantly."}}]}
</script>
@endsection

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
:root{--primary:#1B4D3E;--primary-light:#2A7A5F;--primary-dark:#0F2E25;--accent:#F59E0B;--accent-light:#FCD34D;--surface:#FAFAF8;--surface-alt:#F0EFEB;--card:#FFFFFF;--text:#1A1A1A;--text-secondary:#555555;--text-muted:#888888;--border:#E5E5E0;--success:#059669;--info:#0EA5E9;--danger:#DC2626;--radius:12px;--radius-lg:20px;--shadow-sm:0 1px 3px rgba(0,0,0,0.06);--shadow-md:0 4px 16px rgba(0,0,0,0.08);--shadow-lg:0 8px 32px rgba(0,0,0,0.1);--font-body:'DM Sans',sans-serif;--font-mono:'Space Mono',monospace}
.toc-nav{background:var(--primary-dark);position:sticky;top:100px;z-index:100;overflow-x:auto;white-space:nowrap;-webkit-overflow-scrolling:touch;box-shadow:0 2px 8px rgba(0,0,0,0.15)}
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
</style>

@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#tracker">Tracker</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#calendar">Full Calendar</a>
        <a href="#late-fees">Late Fees</a>
        <a href="#qrmp">QRMP Scheme</a>
        <a href="#compliance">Compliance</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>
{{-- 
<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>&rsaquo;</span>
    <a href="/tools/">Free Tools</a>
    <span>&rsaquo;</span>
    GST Return Due Date Tracker
</nav> --}}

<header class="hero" id="tracker">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> · Patron Accounting LLP</span>
    </div>
    <h1>GST Return Due Date Tracker &mdash; <span>Filing Calendar</span> FY 2025&ndash;26</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Track every GST return filing deadline for FY 2025-26 in one place. This tool shows month-wise due dates for GSTR-1, GSTR-3B, GSTR-4, GSTR-9, CMP-08, IFF, and more &mdash; with colour-coded status indicators showing overdue, upcoming, and future deadlines. Filter by taxpayer type (Regular Monthly, QRMP Quarterly, Composition). Built by practising Chartered Accountants handling GST compliance for 25,000+ businesses.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>GST Return Due Dates &mdash; FY 2025-26</h2>
            <noscript><div class="noscript-box">This tracker requires JavaScript. Refer to the full calendar table below for due dates.</div></noscript>

            <div class="form-group" style="margin-bottom:16px;">
                <label>Taxpayer Type</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn active" data-value="monthly" onclick="setType(this)">Monthly Filer<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Turnover &gt; &#8377;5 Cr</small></button>
                    <button type="button" class="toggle-btn" data-value="qrmp" onclick="setType(this)">QRMP Quarterly<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Turnover &le; &#8377;5 Cr</small></button>
                    <button type="button" class="toggle-btn" data-value="composition" onclick="setType(this)">Composition<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Turnover &le; &#8377;1.5 Cr</small></button>
                </div>
            </div>

            <div class="legend">
                <div class="legend-item"><span class="legend-dot" style="background:#DC2626"></span> Overdue</div>
                <div class="legend-item"><span class="legend-dot" style="background:#F59E0B"></span> Due Soon (7 days)</div>
                <div class="legend-item"><span class="legend-dot" style="background:#059669"></span> Filed / Past</div>
                <div class="legend-item"><span class="legend-dot" style="background:#9CA3AF"></span> Future</div>
            </div>

            <div class="month-tabs" id="monthTabs"></div>
            <div id="dueCards"></div>

            <button class="btn-reset" onclick="resetTracker()" style="margin-top:12px;">&#8634; Reset to Current Month</button>
        </div>

        <!-- How to Use -->
        <section class="content-section" id="how-to-use">
            <h2>How to Use the GST Return Due Date Tracker</h2>
            <p>This tool helps you stay on top of every GST filing deadline for FY 2025-26. Here is how to use it effectively:</p>
            <h3>Step 1 &mdash; Select Your Taxpayer Type</h3>
            <p>Choose between Monthly Filer (turnover above &#8377;5 crore, files GSTR-1 and GSTR-3B monthly), QRMP Quarterly (turnover up to &#8377;5 crore, files quarterly with monthly tax payments), or Composition (turnover up to &#8377;1.5 crore, files CMP-08 quarterly and GSTR-4 annually).</p>
            <h3>Step 2 &mdash; Browse by Month</h3>
            <p>Click on any month tab to see all returns due in that month. Each card shows the return form, filing period, due date, and a colour-coded status &mdash; red for overdue, amber for due within 7 days, green for past/filed, and grey for future deadlines.</p>
            <h3>Step 3 &mdash; Plan Ahead</h3>
            <p>Use this tracker alongside the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal</a> returns dashboard. If a return shows as overdue, file it immediately to minimise late fees (&#8377;50/day) and interest (18% p.a.). The <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a> occasionally extends deadlines &mdash; check their notifications page for the latest updates.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Set calendar reminders 5 days before each due date. GSTR-1 is due on the 11th and GSTR-3B on the 20th &mdash; file GSTR-1 first since GSTR-3B auto-populates from it. For QRMP taxpayers, use IFF to upload B2B invoices monthly so your buyers can claim ITC without waiting for your quarterly GSTR-1.</p>
            </div>
        </section>

        <!-- Full Calendar Table -->
        <section class="content-section" id="calendar">
            <h2>Complete GST Return Filing Calendar FY 2025-26</h2>
            <p>Below is the complete month-wise due date calendar for all major GST return forms as notified by the <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">Central Board of Indirect Taxes and Customs (CBIC)</a>. Due dates are subject to change via notifications &mdash; always verify on the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">official GST portal</a>.</p>

            <h3>Monthly Returns &mdash; GSTR-1 &amp; GSTR-3B</h3>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Tax Period</th><th>GSTR-1 Due Date</th><th>GSTR-3B Due Date</th></tr></thead>
                <tbody>
                    <tr><td>April 2025</td><td>11 May 2025</td><td>20 May 2025</td></tr>
                    <tr><td>May 2025</td><td>11 Jun 2025</td><td>20 Jun 2025</td></tr>
                    <tr><td>June 2025</td><td>11 Jul 2025</td><td>20 Jul 2025</td></tr>
                    <tr><td>July 2025</td><td>11 Aug 2025</td><td>20 Aug 2025</td></tr>
                    <tr><td>August 2025</td><td>11 Sep 2025</td><td>20 Sep 2025</td></tr>
                    <tr><td>September 2025</td><td>11 Oct 2025</td><td>20 Oct 2025</td></tr>
                    <tr><td>October 2025</td><td>11 Nov 2025</td><td>20 Nov 2025</td></tr>
                    <tr><td>November 2025</td><td>11 Dec 2025</td><td>20 Dec 2025</td></tr>
                    <tr><td>December 2025</td><td>11 Jan 2026</td><td>20 Jan 2026</td></tr>
                    <tr><td>January 2026</td><td>11 Feb 2026</td><td>20 Feb 2026</td></tr>
                    <tr><td>February 2026</td><td>11 Mar 2026</td><td>20 Mar 2026</td></tr>
                    <tr><td>March 2026</td><td>11 Apr 2026</td><td>20 Apr 2026</td></tr>
                </tbody>
            </table>
            </div>

            <h3>Quarterly Returns &mdash; QRMP Scheme (GSTR-1 &amp; GSTR-3B)</h3>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Quarter</th><th>GSTR-1 Due</th><th>GSTR-3B Due (Cat A)</th><th>GSTR-3B Due (Cat B)</th><th>PMT-06 Monthly</th></tr></thead>
                <tbody>
                    <tr><td>Q1: Apr&ndash;Jun 2025</td><td>13 Jul 2025</td><td>22 Jul 2025</td><td>24 Jul 2025</td><td>25th of following month</td></tr>
                    <tr><td>Q2: Jul&ndash;Sep 2025</td><td>13 Oct 2025</td><td>22 Oct 2025</td><td>24 Oct 2025</td><td>25th of following month</td></tr>
                    <tr><td>Q3: Oct&ndash;Dec 2025</td><td>13 Jan 2026</td><td>22 Jan 2026</td><td>24 Jan 2026</td><td>25th of following month</td></tr>
                    <tr><td>Q4: Jan&ndash;Mar 2026</td><td>13 Apr 2026</td><td>22 Apr 2026</td><td>24 Apr 2026</td><td>25th of following month</td></tr>
                </tbody>
            </table>
            </div>
            <p>Category A states include Chhattisgarh, MP, Gujarat, Maharashtra, Karnataka, Goa, Kerala, TN, Telangana, AP, Daman &amp; Diu, Dadra &amp; Nagar Haveli, Puducherry, Andaman &amp; Nicobar, Lakshadweep. Category B covers all remaining states and union territories.</p>

            <h3>Annual &amp; Other Returns</h3>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Return</th><th>Applicable To</th><th>Due Date (FY 2025-26)</th></tr></thead>
                <tbody>
                    <tr><td><strong>GSTR-9</strong></td><td>Regular taxpayers (turnover &gt; &#8377;2 Cr)</td><td>31 Dec 2026</td></tr>
                    <tr><td><strong>GSTR-9C</strong></td><td>Taxpayers with turnover &gt; &#8377;5 Cr</td><td>31 Dec 2026</td></tr>
                    <tr><td><strong>GSTR-4</strong></td><td>Composition dealers</td><td>30 Apr 2027</td></tr>
                    <tr><td><strong>CMP-08</strong></td><td>Composition &mdash; quarterly tax</td><td>18th of month after quarter</td></tr>
                    <tr><td><strong>GSTR-6</strong></td><td>Input Service Distributors</td><td>13th of following month</td></tr>
                    <tr><td><strong>GSTR-7</strong></td><td>TDS deductors under GST</td><td>10th of following month</td></tr>
                    <tr><td><strong>GSTR-8</strong></td><td>E-commerce operators (TCS)</td><td>10th of following month</td></tr>
                    <tr><td><strong>IFF</strong></td><td>QRMP &mdash; B2B invoices (optional)</td><td>13th of following month</td></tr>
                    <tr><td><strong>RFD-11 (LUT)</strong></td><td>Exporters</td><td>31 Mar 2026 (for FY 2026-27)</td></tr>
                </tbody>
            </table>
            </div>
        </section>

        <!-- Late Fees -->
        <section class="content-section" id="late-fees">
            <h2>GST Late Fee and Interest for Delayed Filing</h2>
            <p>Missing GST return due dates triggers automatic penalties under the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act, 2017</a>. Here are the current late fee and interest provisions:</p>

            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Return Type</th><th>Late Fee (per day)</th><th>Maximum Cap</th><th>Nil Return</th></tr></thead>
                <tbody>
                    <tr><td>GSTR-1</td><td>&#8377;50 (&#8377;25 CGST + &#8377;25 SGST)</td><td>&#8377;10,000</td><td>&#8377;20/day</td></tr>
                    <tr><td>GSTR-3B</td><td>&#8377;50 (&#8377;25 CGST + &#8377;25 SGST)</td><td>&#8377;10,000</td><td>&#8377;20/day</td></tr>
                    <tr><td>GSTR-4</td><td>&#8377;50 (&#8377;25 CGST + &#8377;25 SGST)</td><td>&#8377;2,000</td><td>&#8377;20/day</td></tr>
                    <tr><td>GSTR-9</td><td>&#8377;200 (&#8377;100 CGST + &#8377;100 SGST)</td><td>0.5% of turnover in state</td><td>&mdash;</td></tr>
                    <tr><td>CMP-08</td><td>&#8377;50 (&#8377;25 CGST + &#8377;25 SGST)</td><td>&#8377;10,000</td><td>&#8377;20/day</td></tr>
                </tbody>
            </table>
            </div>

            <div class="formula-box">
                <span class="label">Interest on Late Payment:</span> 18% per annum on outstanding tax<br>
                <span class="label">Formula:</span> Interest = Tax Amount &times; 18% &times; (Days of Delay &divide; 365)<br>
                <span class="label">Example:</span> &#8377;1,00,000 tax paid 30 days late &rarr; &#8377;1,00,000 &times; 0.18 &times; (30/365) = <span class="label">&#8377;1,479</span>
            </div>

            <div class="callout warn">
                <p><strong>Critical Warning:</strong> If you fail to file GSTR-3B for two or more consecutive months, your E-Way Bill generation gets blocked automatically. Additionally, non-filing for six continuous months can trigger suo motu cancellation of your GST registration under Section 29 of the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act</a>. File pending returns immediately to avoid business disruption.</p>
            </div>
        </section>

        <!-- QRMP Scheme -->
        <section class="content-section" id="qrmp">
            <h2>QRMP Scheme &mdash; Quarterly Return Monthly Payment</h2>
            <p>The QRMP scheme, introduced by the <a href="https://gstcouncil.gov.in/" target="_blank" rel="noopener">GST Council</a>, allows eligible taxpayers to file GSTR-1 and GSTR-3B quarterly instead of monthly, significantly reducing compliance burden. Here is how it works:</p>

            <h3>Eligibility</h3>
            <p>Taxpayers with aggregate turnover up to &#8377;5 crore in the previous financial year can opt for QRMP. The option must be selected on the GST portal before the start of the quarter. New registrations are automatically placed under QRMP if turnover is within the limit.</p>

            <h3>Monthly Tax Payment via PMT-06</h3>
            <p>While returns are filed quarterly, tax must be paid monthly by the 25th of the following month using challan PMT-06. Taxpayers can choose between the fixed sum method (35% of previous quarter's liability for first two months) or the self-assessment method (actual tax computed for each month).</p>

            <h3>Invoice Furnishing Facility (IFF)</h3>
            <p>QRMP taxpayers can optionally upload B2B invoices for the first two months of each quarter using IFF, due by the 13th of the following month. This helps recipients claim timely Input Tax Credit. IFF is capped at &#8377;50 lakh of invoices per month.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> Always use IFF to upload B2B invoices monthly &mdash; even though it is optional. Your business customers depend on timely ITC claims, and delayed visibility of invoices in their GSTR-2B can strain commercial relationships. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends regular IFF usage for all QRMP taxpayers supplying to registered businesses.</p>
            </div>
        </section>

        <!-- Compliance -->
        <section class="content-section" id="compliance">
            <h2>GST Return Filing &mdash; Compliance Best Practices</h2>
            <p>Maintaining a clean GST compliance record is essential for businesses operating in India. The <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal</a> tracks your filing history and assigns a compliance rating that impacts your business credibility. Here are key practices recommended by the <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>:</p>

            <h3>Reconcile Before Filing</h3>
            <p>Before filing GSTR-3B, reconcile your books with GSTR-2B (auto-generated from suppliers' GSTR-1). Mismatches in Input Tax Credit claimed versus available can trigger notices under Section 73 or 74 of the CGST Act. Use the reconciliation tool on the GST portal or third-party software to identify discrepancies.</p>

            <h3>File GSTR-1 Before GSTR-3B</h3>
            <p>Always file GSTR-1 (outward supplies) before GSTR-3B (summary return) for the same period. From July 2025, GSTR-3B auto-locks once system-populated data is finalised, reducing scope for post-filing corrections. Filing GSTR-1 first ensures accurate auto-population of GSTR-3B liability figures.</p>

            <h3>Maintain Digital Records</h3>
            <p>Section 35 of the CGST Act requires every registered person to maintain books of account at their principal place of business. Digital records in GST-compliant accounting software like Zoho Books or Tally meet this requirement. Ensure all invoices carry valid GSTIN, HSN/SAC codes, and correct tax rates as per <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a> notifications.</p>

            <div class="callout warn">
                <p><strong>Compliance Alert:</strong> From FY 2024-25 onwards, GST returns cannot be filed after three years from the due date. This three-year window applies to GSTR-1, GSTR-3B, and all other return types. Ensure all past-due returns are filed within this window to avoid permanent non-compliance status.</p>
            </div>
        </section>

        <!-- CTA -->
        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need help with GST return filing?</strong> Our Chartered Accountants handle GSTR-1, GSTR-3B, GSTR-9, and all GST compliance for businesses across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Return%20Due%20Date%20Tracker%20tool.%20I%20need%20help%20with%20GST%20return%20filing.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <!-- GST Return Types -->
        <section class="content-section" id="return-types">
            <h2>Understanding Different GST Return Types</h2>
            <p>The GST framework under the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act, 2017</a> prescribes multiple return forms for different categories of taxpayers. Understanding which returns apply to your business is the first step towards maintaining clean compliance.</p>

            <h3>GSTR-1 &mdash; Outward Supplies</h3>
            <p>GSTR-1 captures all outward supplies (sales) made during a tax period. It includes B2B invoices with recipient GSTIN, B2C large invoices (above &#8377;2.5 lakh), exports, credit and debit notes, and advances received. GSTR-1 data flows into the recipient's GSTR-2B for ITC matching. Accurate and timely GSTR-1 filing is critical because errors directly affect your buyers' Input Tax Credit claims. Businesses with turnover above &#8377;5 crore must file monthly by the 11th, while QRMP taxpayers file quarterly by the 13th.</p>

            <h3>GSTR-3B &mdash; Summary Return</h3>
            <p>GSTR-3B is the summary return where taxpayers declare their total outward supplies, inward supplies liable to reverse charge, eligible ITC, and compute the net tax payable. This is the primary return for tax payment. From July 2025, GSTR-3B auto-locks once system-populated data is finalised, which means taxpayers must ensure GSTR-1 is filed correctly before GSTR-3B. The return is due on the 20th of the following month for monthly filers and the 22nd or 24th for quarterly QRMP filers depending on the state category.</p>

            <h3>GSTR-9 &mdash; Annual Return</h3>
            <p>GSTR-9 is the annual consolidation of all monthly or quarterly returns filed during the financial year. It requires reconciliation of outward supplies, inward supplies, ITC claimed, and tax paid across all return periods. Filing is mandatory for taxpayers with turnover above &#8377;2 crore and optional for those below this threshold as per the latest <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC notification</a>. The due date is 31st December following the end of the financial year. For FY 2025-26, this means 31st December 2026.</p>

            <h3>GSTR-9C &mdash; Reconciliation Statement</h3>
            <p>GSTR-9C is required for businesses with aggregate annual turnover exceeding &#8377;5 crore. It reconciles the figures reported in GSTR-9 with the audited financial statements. From FY 2020-21 onwards, GSTR-9C is self-certified by the taxpayer and no longer requires certification from a Chartered Accountant. However, engaging a CA for preparation is strongly recommended given the complexity of reconciling multiple data points across an entire financial year.</p>

            <h3>CMP-08 &mdash; Composition Quarterly Payment</h3>
            <p>Composition scheme dealers (turnover up to &#8377;1.5 crore for goods, &#8377;50 lakh for services) file CMP-08 quarterly to declare their turnover and pay tax at the applicable composition rate &mdash; 1% for manufacturers, 1% for traders, and 6% for restaurants. CMP-08 is due by the 18th of the month following the quarter. The annual return GSTR-4 is filed once a year by 30th April following the financial year end.</p>

            <h3>Other Specialised Returns</h3>
            <p>GSTR-5 is filed by non-resident taxable persons doing business in India. GSTR-6 is filed by Input Service Distributors to report credit distribution. GSTR-7 is for TDS deductors under GST (government departments and specified entities). GSTR-8 is filed by e-commerce operators who collect TCS. GSTR-10 is the final return filed within three months of GST registration cancellation or cancellation order date, whichever is later.</p>
        </section>

        <!-- FAQs -->
        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About GST Return Due Dates</h2>
            <div id="faqList"></div>
        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Need GST Filing Help?</h3>
            <p>Our CAs handle GSTR-1, 3B, 9, and all GST compliance for businesses across India &mdash; on time, every time.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Return%20Due%20Date%20Tracker.%20I%20need%20help%20with%20GST%20return%20filing.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>GST Services</h3>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit <span class="arrow">&rarr;</span></a>
            <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
            <a href="/gst-returns-for-e-commerce-operator" class="sidebar-link">E-Commerce GST Returns <span class="arrow">&rarr;</span></a>
            <a href="/gst-return-filing-for-freelancers" class="sidebar-link">GST for Freelancers <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/hsn-sac-code-finder" class="sidebar-link">HSN/SAC Code Finder <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-rate-finder" class="sidebar-link">GST Rate Finder <span class="arrow">&rarr;</span></a>
            <a href="/tools/invoice-generator" class="sidebar-link">GST Invoice Generator <span class="arrow">&rarr;</span></a>
            <a href="/tools/e-way-bill-calculator" class="sidebar-link">E-Way Bill Calculator <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
        </div>
    </aside>
</div>

<script>
let taxpayerType='monthly';
const TODAY=new Date();
const MONTHS=['Apr 2025','May 2025','Jun 2025','Jul 2025','Aug 2025','Sep 2025','Oct 2025','Nov 2025','Dec 2025','Jan 2026','Feb 2026','Mar 2026'];
const MONTH_NUMS=[{y:2025,m:4},{y:2025,m:5},{y:2025,m:6},{y:2025,m:7},{y:2025,m:8},{y:2025,m:9},{y:2025,m:10},{y:2025,m:11},{y:2025,m:12},{y:2026,m:1},{y:2026,m:2},{y:2026,m:3}];

function d(y,m,day){return new Date(y,m-1,day)}
function fmtD(dt){const mo=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];return dt.getDate()+' '+mo[dt.getMonth()]+' '+dt.getFullYear();}
function status(dt){const diff=Math.ceil((dt-TODAY)/(1000*60*60*24));if(diff<0)return{cls:'overdue',label:'Overdue',badge:'status-overdue'};if(diff<=7)return{cls:'upcoming',label:'Due Soon',badge:'status-upcoming'};if(diff<=60)return{cls:'',label:'Upcoming',badge:'status-future'};return{cls:'',label:'Future',badge:'status-future'};}

function getMonthlyDueDates(mi){const p=MONTH_NUMS[mi];const nm=mi<11?MONTH_NUMS[mi+1]:{y:mi===11?2026:2026,m:mi===11?4:4};const nxY=mi<11?nm.y:2026;const nxM=mi<11?nm.m:4;
const items=[];
items.push({form:'GSTR-1',desc:'Outward supplies for '+MONTHS[mi],date:d(nxY,nxM,11)});
items.push({form:'GSTR-3B',desc:'Summary return for '+MONTHS[mi],date:d(nxY,nxM,20)});
items.push({form:'GSTR-6',desc:'ISD return for '+MONTHS[mi],date:d(nxY,nxM,13)});
items.push({form:'GSTR-7',desc:'TDS return for '+MONTHS[mi],date:d(nxY,nxM,10)});
items.push({form:'GSTR-8',desc:'TCS return for '+MONTHS[mi],date:d(nxY,nxM,10)});
return items;}

function getQRMPDueDates(mi){const p=MONTH_NUMS[mi];const items=[];
const qEnd=[2,5,8,11];
const isQEnd=qEnd.includes(mi);
const nm=mi<11?MONTH_NUMS[mi+1]:{y:2026,m:4};const nxY=mi<11?nm.y:2026;const nxM=mi<11?nm.m:4;
if(isQEnd){
items.push({form:'GSTR-1',desc:'Quarterly outward supplies (QRMP)',date:d(nxY,nxM,13)});
items.push({form:'GSTR-3B',desc:'Quarterly summary &mdash; Cat A states',date:d(nxY,nxM,22)});
items.push({form:'GSTR-3B',desc:'Quarterly summary &mdash; Cat B states',date:d(nxY,nxM,24)});
}else{
items.push({form:'IFF',desc:'B2B invoice upload (optional) for '+MONTHS[mi],date:d(nxY,nxM,13)});
items.push({form:'PMT-06',desc:'Monthly tax payment for '+MONTHS[mi],date:d(nxY,nxM,25)});
}
return items;}

function getCompositionDueDates(mi){const items=[];
const qEnd=[2,5,8,11];
if(qEnd.includes(mi)){
const nm=mi<11?MONTH_NUMS[mi+1]:{y:2026,m:4};const nxY=mi<11?nm.y:2026;const nxM=mi<11?nm.m:4;
items.push({form:'CMP-08',desc:'Composition quarterly tax payment',date:d(nxY,nxM,18)});
}
if(mi===11){items.push({form:'GSTR-4',desc:'Composition annual return FY 2025-26',date:d(2027,4,30)});}
if(items.length===0){items.push({form:'\u2014',desc:'No filings due this month for composition dealers. Tax payment only in quarter-end months via CMP-08.',date:null});}
return items;}

function getDueDates(mi){
if(taxpayerType==='monthly')return getMonthlyDueDates(mi);
if(taxpayerType==='qrmp')return getQRMPDueDates(mi);
return getCompositionDueDates(mi);
}

// Add annual returns for specific months
function addAnnualReturns(items,mi){
if(mi===8){// Dec 2025
items.push({form:'GSTR-9',desc:'Annual return FY 2024-25',date:d(2025,12,31)});
items.push({form:'GSTR-9C',desc:'Reconciliation FY 2024-25 (turnover>\u20B95Cr)',date:d(2025,12,31)});
}
return items;
}

let selectedMonth=0;
function initMonthTabs(){
const now=TODAY;
let closest=0;
MONTH_NUMS.forEach((m,i)=>{if(now>=d(m.y,m.m,1))closest=i;});
selectedMonth=closest;
const tabs=document.getElementById('monthTabs');
tabs.innerHTML='';
MONTHS.forEach((m,i)=>{
const tab=document.createElement('button');
tab.className='month-tab'+(i===selectedMonth?' active':'');
tab.textContent=m;
tab.onclick=()=>{selectedMonth=i;document.querySelectorAll('.month-tab').forEach(t=>t.classList.remove('active'));tab.classList.add('active');renderCards();};
tabs.appendChild(tab);
});
}

function renderCards(){
let items=getDueDates(selectedMonth);
items=addAnnualReturns(items,selectedMonth);
const container=document.getElementById('dueCards');
if(items.length===0||(!items[0].date&&items.length===1&&items[0].form==='\u2014')){
container.innerHTML='<div style="text-align:center;padding:32px;color:var(--text-muted);font-size:14px;">'+items[0].desc+'</div>';
return;
}
let html='';
items.forEach(item=>{
if(!item.date){html+='<div class="due-card"><div class="due-left"><span class="due-form">'+item.form+'</span><div class="due-desc">'+item.desc+'</div></div></div>';return;}
const s=status(item.date);
html+='<div class="due-card '+s.cls+'"><div class="due-left"><span class="due-form">'+item.form+'</span><div class="due-desc">'+item.desc+'</div></div><div class="due-right"><div class="due-date">'+fmtD(item.date)+'</div><span class="due-status '+s.badge+'">'+s.label+'</span></div></div>';
});
container.innerHTML=html;
}

function setType(btn){
const el=btn.closest('.toggle-btn')||btn;
taxpayerType=el.dataset.value;
el.parentElement.querySelectorAll('.toggle-btn').forEach(b=>b.classList.remove('active'));
el.classList.add('active');
renderCards();
}

function resetTracker(){
taxpayerType='monthly';
document.querySelectorAll('.toggle-btn').forEach((b,i)=>b.classList.toggle('active',i===0));
initMonthTabs();
renderCards();
}

const FAQS=[
{q:"What is the due date for filing GSTR-1 every month?",a:"GSTR-1 must be filed by the 11th of the following month for monthly filers (turnover above \u20B95 crore). For QRMP scheme taxpayers (turnover up to \u20B95 crore), GSTR-1 is filed quarterly by the 13th of the month following the quarter. Late filing attracts \u20B950 per day (\u20B925 CGST + \u20B925 SGST), capped at \u20B910,000 per return. Nil returns attract \u20B920 per day."},
{q:"What is the due date for GSTR-3B filing?",a:"GSTR-3B is due by the 20th of the following month for monthly filers. QRMP quarterly filers in Category A states file by the 22nd, and Category B states by the 24th of the month after the quarter ends. Interest at 18% per annum applies on any outstanding tax from the due date until actual payment."},
{q:"What is the QRMP scheme and who is eligible?",a:"The QRMP (Quarterly Return Monthly Payment) scheme is available to taxpayers with turnover up to \u20B95 crore. It allows quarterly filing of GSTR-1 and GSTR-3B while paying tax monthly via PMT-06 challan by the 25th. This reduces annual return filings from 24 to just 8. Opt-in on the GST portal before the quarter starts."},
{q:"What is the late fee for missing GST return due dates?",a:"Late fee is \u20B950 per day (\u20B925 CGST + \u20B925 SGST) for GSTR-1 and GSTR-3B, capped at \u20B910,000 per return. Nil returns attract \u20B920 per day. GSTR-9 late fee is \u20B9200 per day (\u20B9100 CGST + \u20B9100 SGST), capped at 0.5% of turnover in the state. Interest at 18% per annum applies on outstanding tax amount separately."},
{q:"When is GSTR-9 annual return due for FY 2025-26?",a:"GSTR-9 for FY 2025-26 is due by 31st December 2026. Businesses with turnover above \u20B95 crore must also file GSTR-9C reconciliation by the same date. GSTR-9 is optional for taxpayers with turnover up to \u20B92 crore. Filing is done on the GST portal and requires reconciliation of all monthly/quarterly returns filed during the year."},
{q:"What is GSTR-4 and when is it due?",a:"GSTR-4 is the annual return for composition scheme taxpayers (turnover up to \u20B91.5 crore). For FY 2025-26, it is due by 30th April 2027. Composition dealers must also pay tax quarterly via CMP-08 by the 18th of the month following each quarter. The composition scheme offers simplified compliance at a flat tax rate."},
{q:"What happens if GST registration is cancelled for non-filing?",a:"If you fail to file returns for six continuous months, the GST officer may cancel your registration under Section 29 of the CGST Act. A show cause notice (REG-17) is issued first. You can apply for revocation via REG-21 within 30 days. Cancellation blocks E-Way Bill generation and affects your ability to issue tax invoices."},
{q:"What is PMT-06 challan used for under QRMP?",a:"PMT-06 is the monthly tax payment challan for QRMP taxpayers during the first two months of each quarter. Due by the 25th of the following month. Taxpayers choose between fixed sum method (35% of previous quarter liability) or self-assessment method (actual monthly liability). Third month's tax is paid with the quarterly GSTR-3B."},
{q:"Is GSTR-9C mandatory for all businesses?",a:"No &mdash; GSTR-9C is required only for businesses with turnover exceeding \u20B95 crore. It is a self-certified reconciliation statement matching GSTR-9 values with audited financials. From FY 2020-21 onwards, CA certification is no longer required &mdash; the taxpayer self-certifies. Due date is 31st December following the financial year."},
{q:"Can I file GST returns after the due date?",a:"Yes, but with late fees and interest. GSTR-1 and GSTR-3B can be filed late with penalties of \u20B950/day. However, from FY 2024-25 onwards, returns cannot be filed more than three years after the due date. This hard limit means unresolved past returns must be addressed within the window to avoid permanent non-compliance."},
{q:"What is IFF and when should it be filed?",a:"IFF (Invoice Furnishing Facility) lets QRMP taxpayers upload B2B invoices monthly in the first two months of each quarter. Due by the 13th of the following month. It helps buyers claim timely ITC. IFF is optional and capped at \u20B950 lakh per month. Use it if your customers are registered businesses who need regular ITC visibility."},
{q:"How do I check my GST filing status online?",a:"Log in to gst.gov.in, navigate to Services &rarr; Returns &rarr; Track Return Status. Select the financial year and period to view filing status for each return type. The Returns Dashboard shows pending and filed returns at a glance. You can also check Form 26AS on the income tax portal for GST data reconciliation."},
{q:"What are the consequences of E-Way Bill blocking?",a:"If GSTR-3B is not filed for two or more consecutive months, E-Way Bill generation is blocked automatically. This prevents movement of goods and can halt business operations. The block applies to both inward and outward E-Way Bills. Filing all pending GSTR-3B returns is the only way to restore E-Way Bill generation."}
];

function buildFAQ(){
const list=document.getElementById('faqList');
FAQS.forEach(faq=>{
const item=document.createElement('div');
item.className='faq-item';
item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';
list.appendChild(item);
});
}

function toggleFaq(btn){
const item=btn.closest('.faq-item');
const isOpen=item.classList.contains('open');
document.querySelectorAll('.faq-item').forEach(i=>i.classList.remove('open'));
if(!isOpen)item.classList.add('open');
}

const navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',()=>{
let current='';
document.querySelectorAll('[id]').forEach(s=>{if(pageYOffset>=s.offsetTop-80)current=s.getAttribute('id');});
navLinks.forEach(l=>l.classList.toggle('active',l.getAttribute('href')==='#'+current));
});

document.addEventListener('DOMContentLoaded',()=>{initMonthTabs();renderCards();buildFAQ();});
</script>
@endsection