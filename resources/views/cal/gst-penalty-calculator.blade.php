@extends('layouts.app')
@section('meta')
    <title>GST Penalty Calculator | Late Fee &amp; Interest FY 25-26</title>
    <meta name="description" content="GST penalty calculator: late fee and interest for GSTR-1, 3B, 4, 9 and CMP-08, with turnover-based caps and the CGST/SGST split for FY 2025-26. Try free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gst-penalty-calculator">
    <meta property="og:title" content="GST Penalty Calculator &mdash; Late Fee &amp; Interest 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate GST late fee and interest for all return types. Turnover-based caps with CGST/SGST split.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/gst-penalty-calculator">
    <meta property="og:image" content="/tools/og-gst-penalty-calculator.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Penalty Calculator &mdash; Late Fee &amp; Interest 2026">
    <meta name="twitter:description" content="Calculate GST late fee and interest for delayed filings. Free online tool.">
    <meta name="twitter:image" content="/tools/og-gst-penalty-calculator.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"GST Penalty Calculator - Late Fee and Interest FY 2025-26","description":"Free online tool to calculate GST late filing fees and interest on delayed payment for GSTR-1, GSTR-3B, GSTR-4, GSTR-9, and CMP-08. Supports turnover-based late fee caps, nil return rates, and 18 percent interest calculation with CGST and SGST split.","url":"/tools/gst-penalty-calculator","applicationCategory":"UtilityApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"GST Penalty Calculator","item":"/tools/gst-penalty-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is the late fee for delayed GSTR-3B filing?","acceptedAnswer":{"@type":"Answer","text":"Late fee for GSTR-3B is 50 rupees per day split as 25 CGST plus 25 SGST for returns with tax liability. For nil returns the fee is 20 rupees per day split as 10 plus 10. Maximum cap depends on turnover: 2000 for up to 1.5 crore, 5000 for 1.5 to 5 crore, and 10000 for above 5 crore turnover."}},{"@type":"Question","name":"What is the interest rate on late GST payment?","acceptedAnswer":{"@type":"Answer","text":"Interest on late GST payment is charged at 18 percent per annum under Section 50 of CGST Act calculated on the outstanding net tax liability from the due date until the actual date of payment. For excess ITC claims the interest rate is 24 percent per annum. Interest is calculated on a daily basis."}},{"@type":"Question","name":"What is the late fee for delayed GSTR-1 filing?","acceptedAnswer":{"@type":"Answer","text":"Late fee for GSTR-1 is 50 rupees per day split as 25 CGST plus 25 SGST for returns with outward supplies. For nil GSTR-1 the fee is 20 rupees per day. The maximum late fee cap for GSTR-1 is 5000 rupees per return. GSTR-1 must be filed before GSTR-3B can be filed for the same period."}},{"@type":"Question","name":"What is the late fee for GSTR-9 annual return?","acceptedAnswer":{"@type":"Answer","text":"Late fee for GSTR-9 is 200 rupees per day split as 100 CGST plus 100 SGST. The maximum cap is 0.5 percent of turnover in the state or union territory. For a business with 5 crore turnover the cap would be 2.5 lakh rupees. GSTR-9 is due by 31st December of the following financial year."}},{"@type":"Question","name":"Can GST late fee be paid using Input Tax Credit?","acceptedAnswer":{"@type":"Answer","text":"No GST late fees must be paid in cash through the electronic cash ledger only. Input Tax Credit cannot be used to pay late fees or interest or penalties. This is a separate cash outflow that businesses must account for in their working capital planning alongside the actual tax liability payment."}},{"@type":"Question","name":"What is the late fee for nil GST returns?","acceptedAnswer":{"@type":"Answer","text":"For nil returns where there are no transactions during the period the late fee is reduced to 20 rupees per day split as 10 CGST plus 10 SGST. The maximum cap for nil returns is 500 rupees per return for GSTR-3B. A nil return includes periods with purchases but no sales."}},{"@type":"Question","name":"How is interest calculated on delayed GST payment?","acceptedAnswer":{"@type":"Answer","text":"Interest is calculated as outstanding tax liability multiplied by 18 percent divided by 365 multiplied by the number of days of delay. Interest applies on net cash tax liability after adjusting ITC. For example 1 lakh tax delayed by 30 days results in interest of approximately 1479 rupees."}},{"@type":"Question","name":"What is the maximum late fee cap for GSTR-3B?","acceptedAnswer":{"@type":"Answer","text":"Maximum late fee cap for GSTR-3B depends on aggregate turnover. For businesses up to 1.5 crore turnover the cap is 2000 per return. For 1.5 to 5 crore it is 5000. For above 5 crore the cap is 10000 per return. For nil returns the cap is 500 regardless of turnover."}},{"@type":"Question","name":"Can I file a new GST return without paying previous late fees?","acceptedAnswer":{"@type":"Answer","text":"No you cannot file a subsequent period return without first clearing the late fee liability of the previous period. GST returns must be filed sequentially and all outstanding late fees must be paid before the portal allows filing of new returns. This makes timely filing even more critical."}},{"@type":"Question","name":"What is the late fee for CMP-08 composition quarterly statement?","acceptedAnswer":{"@type":"Answer","text":"Late fee for CMP-08 quarterly statement is 50 rupees per day split as 25 CGST plus 25 SGST for returns with tax liability. For nil CMP-08 the fee is 20 rupees per day. The maximum cap is 10000 per return. CMP-08 is due by the 18th of the month following the quarter end."}},{"@type":"Question","name":"Is there any waiver of GST late fees?","acceptedAnswer":{"@type":"Answer","text":"The government has periodically announced late fee waivers and amnesty schemes through CBIC notifications. These are typically limited time offers for specific return types and periods. Businesses should monitor the CBIC notification page and GST Council meeting outcomes for any new amnesty or waiver announcements."}},{"@type":"Question","name":"What happens if E-Way Bill is blocked due to non-filing?","acceptedAnswer":{"@type":"Answer","text":"If GSTR-3B is not filed for two or more consecutive months the E-Way Bill generation facility is blocked automatically on the GST portal. This prevents the business from transporting goods and can halt operations entirely. Filing all pending returns with applicable late fees restores the E-Way Bill facility."}},{"@type":"Question","name":"Can GST registration be cancelled for non-filing of returns?","acceptedAnswer":{"@type":"Answer","text":"Yes if a taxpayer fails to file returns for six continuous months the GST officer may initiate suo motu cancellation under Section 29 of CGST Act. A show cause notice in Form REG-17 is issued first. The taxpayer can apply for revocation within 30 days via Form REG-21 after filing all pending returns and paying dues."}}]}
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


/* Tool-specific: GST Penalty Calculator */
.date-row{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:18px}
.date-row .form-group input[type="date"]{font-family:var(--font-body);font-size:15px}
.penalty-split{display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px;margin:16px 0}
.pen-box{background:var(--surface);border-radius:var(--radius);padding:16px;text-align:center;border:1px solid var(--border)}
.pen-box .pb-label{font-size:11px;font-weight:600;color:var(--text-muted);text-transform:uppercase;letter-spacing:.5px}
.pen-box .pb-val{font-size:22px;font-weight:800;color:var(--primary-dark);margin-top:4px;font-family:var(--font-mono)}
.pen-box.late-fee{border-color:var(--accent);background:#FFFBEB}
.pen-box.late-fee .pb-val{color:#B45309}
.pen-box.interest{border-color:var(--danger);background:#FEF2F2}
.pen-box.interest .pb-val{color:var(--danger)}
.pen-box.total{border-color:var(--primary);background:rgba(27,77,62,0.04)}
.pen-box.total .pb-val{color:var(--primary)}
.days-badge{display:inline-flex;align-items:center;gap:6px;font-family:var(--font-mono);font-size:28px;font-weight:800;color:var(--danger);margin:8px 0}
@media(max-width:600px){.date-row{grid-template-columns:1fr}.penalty-split{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Penalty Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#late-fees">Late Fee Rates</a>
        <a href="#interest">Interest Rules</a>
        <a href="#compliance">Compliance</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>



<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>GST Penalty Calculator &mdash; <span>Late Fee &amp; Interest</span> on Delayed Filing</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This calculator computes GST late fee and interest for delayed filing of GSTR-1, GSTR-3B, GSTR-4, GSTR-9, and CMP-08. Late fee ranges from &#8377;20/day (nil returns) to &#8377;200/day (GSTR-9), with turnover-based caps. Interest is 18% p.a. on outstanding tax. Enter your return type, due date, filing date, turnover, and tax liability &mdash; get instant penalty breakup with CGST/SGST split.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate GST Late Fee &amp; Interest</h2>
            <noscript><div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or <a href="https://wa.me/919459456700">contact our CA team</a>.</div></noscript>

            <div class="calc-row">
                <div class="form-group">
                    <label>Return Type</label>
                    <select id="inReturn" onchange="onReturnChange()">
                        <option value="3b">GSTR-3B (Monthly/Quarterly)</option>
                        <option value="1">GSTR-1 (Outward Supplies)</option>
                        <option value="4">GSTR-4 (Composition Annual)</option>
                        <option value="cmp08">CMP-08 (Composition Quarterly)</option>
                        <option value="9">GSTR-9 (Annual Return)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Aggregate Turnover</label>
                    <div class="toggle-group" id="turnoverCat">
                        <button type="button" class="toggle-btn active" data-val="low" onclick="setTg('turnoverCat',this)">&#8377;1.5 Cr<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">or below</small></button>
                        <button type="button" class="toggle-btn" data-val="mid" onclick="setTg('turnoverCat',this)">&#8377;1.5&ndash;5 Cr<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Mid range</small></button>
                        <button type="button" class="toggle-btn" data-val="high" onclick="setTg('turnoverCat',this)">&gt; &#8377;5 Cr<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Large</small></button>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Return Type</label>
                <div class="toggle-group" id="nilType">
                    <button type="button" class="toggle-btn" data-val="nil" onclick="setTg('nilType',this)">Nil Return<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">No tax liability</small></button>
                    <button type="button" class="toggle-btn active" data-val="normal" onclick="setTg('nilType',this)">Regular Return<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Has tax liability</small></button>
                </div>
            </div>

            <div class="date-row">
                <div class="form-group">
                    <label>Due Date of Filing</label>
                    <input type="date" id="inDueDate">
                </div>
                <div class="form-group">
                    <label>Actual / Expected Filing Date</label>
                    <input type="date" id="inFileDate">
                </div>
            </div>

            <div class="calc-row" id="taxRow">
                <div class="form-group">
                    <label>Net Tax Liability (&#8377;)</label>
                    <input type="text" id="inTax" placeholder="e.g. 50,000" oninput="fmtNum(this)">
                    <div style="font-size:12px;color:var(--text-muted);margin-top:4px">Outstanding tax after adjusting ITC (for interest calculation)</div>
                </div>
                <div class="form-group" id="turnoverValWrap" style="display:none">
                    <label>Turnover in State (&#8377;) &mdash; for GSTR-9 cap</label>
                    <input type="text" id="inTurnoverVal" placeholder="e.g. 3,00,00,000" oninput="fmtNum(this)">
                    <div style="font-size:12px;color:var(--text-muted);margin-top:4px">For calculating 0.5% cap on GSTR-9 late fee</div>
                </div>
            </div>

            <button class="btn-calculate" onclick="calcPenalty()">Calculate Late Fee &amp; Interest</button>
            <button class="btn-reset" onclick="resetForm()">&#8634; Reset All</button>

            <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the GST Penalty Calculator</h2>
            <p>This free tool calculates the exact late fee and interest payable for delayed GST return filing. It covers all major return types with turnover-based caps as per the latest <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a> notifications.</p>
            <h3>Step 1 &mdash; Select Return Type and Turnover</h3>
            <p>Choose the GST return type (GSTR-1, 3B, 4, 9, or CMP-08) and your aggregate turnover category. Turnover determines the maximum late fee cap applicable to your business.</p>
            <h3>Step 2 &mdash; Choose Nil or Regular</h3>
            <p>Nil returns (no sales/tax liability) attract lower late fees of &#8377;20/day compared to &#8377;50/day for regular returns. A return with purchases but no sales is still considered a nil return for late fee purposes.</p>
            <h3>Step 3 &mdash; Enter Dates</h3>
            <p>Enter the original due date and the actual or expected filing date. The tool calculates the exact number of days of delay. For GSTR-3B, the due date is typically the 20th of the following month (or 22nd/24th for QRMP). Check the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal</a> for your specific due dates.</p>
            <h3>Step 4 &mdash; Enter Tax Liability</h3>
            <p>Enter the net tax liability (after adjusting ITC) for interest calculation. Interest at 18% p.a. under <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">Section 50 of the CGST Act</a> is charged on the outstanding tax amount from the due date until payment.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Always file returns sequentially &mdash; you cannot file a new period&rsquo;s return without clearing late fees for previous periods. If you have multiple pending returns, calculate penalties for each period separately and plan cash flow accordingly. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends filing the oldest pending return first.</p>
            </div>
        </section>

        <section class="content-section" id="late-fees">
            <h2>GST Late Fee Rates &mdash; All Return Types</h2>
            <p>Late fees are charged under <a href="https://cbic-gst.gov.in/pdf/cgst-act.pdf" target="_blank" rel="noopener">Section 47 of the CGST Act</a>. The rates and caps vary by return type and taxpayer turnover:</p>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Return</th><th>Regular (per day)</th><th>Nil (per day)</th><th>Max Cap</th></tr></thead>
                <tbody>
                    <tr><td><strong>GSTR-3B</strong></td><td>&#8377;50 (&#8377;25+&#8377;25)</td><td>&#8377;20 (&#8377;10+&#8377;10)</td><td>&#8377;2K / &#8377;5K / &#8377;10K*</td></tr>
                    <tr><td><strong>GSTR-1</strong></td><td>&#8377;50 (&#8377;25+&#8377;25)</td><td>&#8377;20 (&#8377;10+&#8377;10)</td><td>&#8377;5,000</td></tr>
                    <tr><td><strong>GSTR-4</strong></td><td>&#8377;50 (&#8377;25+&#8377;25)</td><td>&#8377;20 (&#8377;10+&#8377;10)</td><td>&#8377;2,000</td></tr>
                    <tr><td><strong>CMP-08</strong></td><td>&#8377;50 (&#8377;25+&#8377;25)</td><td>&#8377;20 (&#8377;10+&#8377;10)</td><td>&#8377;10,000</td></tr>
                    <tr><td><strong>GSTR-9</strong></td><td>&#8377;200 (&#8377;100+&#8377;100)</td><td>&mdash;</td><td>0.5% of turnover</td></tr>
                </tbody>
            </table>
            </div>
            <p style="font-size:13px;color:var(--text-muted);">* GSTR-3B cap: &#8377;2,000 (turnover &le; &#8377;1.5 Cr), &#8377;5,000 (&#8377;1.5&ndash;5 Cr), &#8377;10,000 (&gt; &#8377;5 Cr). Nil cap: &#8377;500.</p>
        </section>

        <section class="content-section" id="interest">
            <h2>Interest on Late GST Payment &mdash; Section 50</h2>
            <p>Interest under <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">Section 50 of the CGST Act</a> is charged on the net cash tax liability (after ITC adjustment) for the number of days of delay:</p>
            <div class="formula-box">
                <span class="label">Interest Formula:</span><br>
                Interest = Net Tax Liability &times; 18% &times; (Days of Delay &divide; 365)<br><br>
                <span class="label">Example:</span><br>
                Tax = &#8377;1,00,000 | Delay = 45 days<br>
                Interest = 1,00,000 &times; 0.18 &times; (45/365) = <span class="label">&#8377;2,219</span>
            </div>
            <p>For <strong>excess ITC claims</strong>, interest is charged at <strong>24% p.a.</strong> under Section 50(3). This higher rate applies when a taxpayer claims more ITC than entitled and later reverses it.</p>
            <div class="callout warn">
                <p><strong>Critical:</strong> Interest is calculated on net cash tax liability, not gross tax. If your total tax is &#8377;5 lakh but you have &#8377;4 lakh ITC, interest applies only on the &#8377;1 lakh cash component. However, if ITC is disallowed later, interest applies on the disallowed amount from the original due date at 24%.</p>
            </div>
        </section>

        <section class="content-section" id="compliance">
            <h2>Consequences of Non-Filing and How to Avoid Penalties</h2>
            <p>Beyond late fees and interest, non-filing of GST returns triggers several adverse consequences:</p>
            <ul>
                <li><strong>E-Way Bill blocking:</strong> After 2 consecutive months of GSTR-3B non-filing, E-Way Bill generation is blocked &mdash; halting goods transportation</li>
                <li><strong>Suo motu cancellation:</strong> 6 months of continuous non-filing can trigger cancellation under Section 29 via REG-17 notice</li>
                <li><strong>Best judgment assessment:</strong> Under Section 62, the officer can assess tax liability if returns are not filed after notice under Section 46</li>
                <li><strong>Sequential filing block:</strong> New returns cannot be filed until all prior periods&rsquo; returns and late fees are cleared</li>
                <li><strong>ITC blocking:</strong> Your buyers cannot claim ITC on purchases from you if your GSTR-1 is not filed</li>
            </ul>
            <h3>How to Minimise Penalties</h3>
            <p>File returns on time &mdash; set reminders 5 days before due dates. Use the <a href="/tools/gst-return-due-date-tracker" target="_blank">GST Due Date Tracker</a> to stay on top of deadlines. If filing is delayed, pay tax liability by the due date even if the return is filed later &mdash; this reduces the interest component. For nil returns, file on time to avoid the &#8377;20/day fee that adds up quickly.</p>
            <div class="callout green">
                <p><strong>Expert Tip:</strong> Monitor <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC notifications</a> for amnesty schemes and late fee waivers. The government periodically offers reduced late fee windows. Our CA team can help you file pending returns and minimise penalties. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20filing%20pending%20GST%20returns%20and%20minimising%20penalties." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to a CA now &rarr;</a></p>
            </div>
        </section>

        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Pending GST returns?</strong> Our CAs handle bulk return filing, penalty calculation, and compliance restoration for businesses across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Penalty%20Calculator.%20I%20need%20help%20with%20pending%20returns.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions &mdash; GST Penalties</h2>
            <div id="faqList"></div>
        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Pending Returns?</h3>
            <p>Our CAs handle bulk filing, penalty calculation &amp; compliance restoration for businesses across India.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20pending%20GST%20returns." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>GST Services</h3>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
            <a href="/gst-annual-return-filing" class="sidebar-link">GST Annual Return <span class="arrow">&rarr;</span></a>
            <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit <span class="arrow">&rarr;</span></a>
            <a href="/gst-cancellation" class="sidebar-link">GST Cancellation <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-return-due-date-tracker" class="sidebar-link">GST Due Date Tracker <span class="arrow">&rarr;</span></a>
            <a href="/tools/gstr-2a-vs-3b-reconciliation" class="sidebar-link">GSTR-2A vs 3B Reconciliation <span class="arrow">&rarr;</span></a>
            <a href="/tools/gstr-9-annual-return-checklist" class="sidebar-link">GSTR-9 Checklist <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/rcm-calculator" class="sidebar-link">RCM Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-composition-scheme-eligibility" class="sidebar-link">Composition Eligibility <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
        </div>
    </aside>
</div>

<script>
function getVal(id){var g=document.getElementById(id);var a=g.querySelector('.toggle-btn.active');return a?a.getAttribute('data-val'):'';}
function setTg(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');}
function pn(id){var el=document.getElementById(id);return el?parseInt(el.value.replace(/[^0-9]/g,''))||0:0;}
function fmtNum(el){var v=el.value.replace(/[^0-9]/g,'');if(v)el.value=parseInt(v).toLocaleString('en-IN');}
function fmt(n){return'\u20B9'+n.toLocaleString('en-IN');}

function onReturnChange(){
var r=document.getElementById('inReturn').value;
document.getElementById('turnoverValWrap').style.display=r==='9'?'block':'none';
}

function resetForm(){
document.getElementById('inReturn').value='3b';
document.getElementById('inDueDate').value='';
document.getElementById('inFileDate').value='';
document.getElementById('inTax').value='';
document.getElementById('inTurnoverVal').value='';
['turnoverCat','nilType'].forEach(function(g){var el=document.getElementById(g);el.querySelectorAll('.toggle-btn').forEach(function(b,i){b.classList.toggle('active',i===0);});});
document.getElementById('turnoverValWrap').style.display='none';
document.getElementById('resPanel').classList.remove('visible');
}

function calcPenalty(){
var retType=document.getElementById('inReturn').value;
var tCat=getVal('turnoverCat');
var isNil=getVal('nilType')==='nil';
var dueDate=document.getElementById('inDueDate').value;
var fileDate=document.getElementById('inFileDate').value;
var tax=pn('inTax');
var turnoverVal=pn('inTurnoverVal');

if(!dueDate||!fileDate){alert('Please enter both due date and filing date.');return;}
var d1=new Date(dueDate),d2=new Date(fileDate);
var days=Math.max(0,Math.ceil((d2-d1)/(1000*60*60*24)));
if(days===0){alert('No delay \u2014 filing is on or before the due date. No penalty applies!');return;}

// Late fee rates
var feePerDay,maxCap,retName;
if(retType==='3b'){
retName='GSTR-3B';feePerDay=isNil?20:50;
if(isNil){maxCap=500;}
else{maxCap=tCat==='low'?2000:tCat==='mid'?5000:10000;}
}else if(retType==='1'){
retName='GSTR-1';feePerDay=isNil?20:50;maxCap=5000;
}else if(retType==='4'){
retName='GSTR-4';feePerDay=isNil?20:50;maxCap=2000;
}else if(retType==='cmp08'){
retName='CMP-08';feePerDay=isNil?20:50;maxCap=10000;
}else{
retName='GSTR-9';feePerDay=200;isNil=false;maxCap=turnoverVal>0?Math.round(turnoverVal*0.005):250000;
}

var grossFee=feePerDay*days;
var lateFee=Math.min(grossFee,maxCap);
var cgstFee=Math.round(lateFee/2);
var sgstFee=lateFee-cgstFee;

var interest=0;
if(tax>0&&days>0){interest=Math.round(tax*0.18*days/365);}
var cgstInt=Math.round(interest/2);
var sgstInt=interest-cgstInt;

var total=lateFee+interest;

var h='';
// Days badge
h+='<div style="text-align:center;margin-bottom:16px"><div style="font-size:13px;color:var(--text-muted);font-weight:600;text-transform:uppercase;letter-spacing:.5px">Days of Delay</div><div class="days-badge">'+days+' days</div><div style="font-size:13px;color:var(--text-muted)">'+retName+' \u2014 Due: '+dueDate+' | Filed: '+fileDate+'</div></div>';

// Hero boxes
h+='<div class="res-hero"><div class="res-box" style="background:linear-gradient(135deg,#dc2626,#ef4444);color:#fff"><div class="rb-label">Total Penalty</div><div class="rb-value">'+fmt(total)+'</div><div class="rb-sub">Late Fee + Interest</div></div>';
h+='<div class="res-box rate"><div class="rb-label">Return Type</div><div class="rb-value">'+retName+'</div><div class="rb-sub">'+(isNil?'Nil return':'Regular return')+' \u2014 '+tCat+' turnover</div></div></div>';

// Split boxes
h+='<div class="penalty-split"><div class="pen-box late-fee"><div class="pb-label">Late Fee</div><div class="pb-val">'+fmt(lateFee)+'</div></div><div class="pen-box interest"><div class="pb-label">Interest (18%)</div><div class="pb-val">'+fmt(interest)+'</div></div><div class="pen-box total"><div class="pb-label">Total Payable</div><div class="pb-val">'+fmt(total)+'</div></div></div>';

// Detail table
h+='<div class="res-card"><div class="res-card-hd"><h3>Detailed Breakup</h3><span class="res-badge fail">Penalty</span></div>';
h+='<div class="res-card-bd"><table class="cmp-table">';
h+='<tr><th>Component</th><th>CGST</th><th>SGST</th><th>Total</th></tr>';
h+='<tr><td>Late Fee ('+feePerDay+'/day &times; '+days+' days'+(grossFee>maxCap?', capped':'')+')</td><td>'+fmt(cgstFee)+'</td><td>'+fmt(sgstFee)+'</td><td><strong>'+fmt(lateFee)+'</strong></td></tr>';
if(tax>0){h+='<tr><td>Interest (18% on '+fmt(tax)+' for '+days+' days)</td><td>'+fmt(cgstInt)+'</td><td>'+fmt(sgstInt)+'</td><td><strong>'+fmt(interest)+'</strong></td></tr>';}
h+='<tr style="background:var(--surface-alt)"><td><strong>Total Penalty Payable</strong></td><td><strong>'+fmt(cgstFee+cgstInt)+'</strong></td><td><strong>'+fmt(sgstFee+sgstInt)+'</strong></td><td style="font-size:18px;color:var(--danger)"><strong>'+fmt(total)+'</strong></td></tr>';
h+='</table>';
if(grossFee>maxCap){h+='<div style="margin-top:10px;font-size:13px;color:var(--text-muted)">\u2139 Gross late fee of '+fmt(grossFee)+' capped at '+fmt(maxCap)+' (saving '+fmt(grossFee-maxCap)+')</div>';}
h+='</div></div>';

// Recommendation
if(total>0){
h+='<div class="callout warn"><p><strong>Action Required:</strong> Pay '+fmt(total)+' ('+fmt(lateFee)+' late fee + '+fmt(interest)+' interest) through the Electronic Cash Ledger on the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener" style="color:inherit;font-weight:700;">GST portal</a>. Late fee and interest cannot be paid using ITC. File the pending '+retName+' immediately to prevent further accumulation and avoid E-Way Bill blocking (after 2 months) or registration cancellation (after 6 months).</p></div>';
}

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20GST%20Penalty%20Calculator.%20I%20have%20pending%20returns%20and%20need%20help%20filing.%20Please%20connect%20me%20with%20a%20CA." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/gst-return-due-date-tracker" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg> Due Date Tracker</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What is the late fee for delayed GSTR-3B filing?",a:"\u20B950/day (\u20B925 CGST + \u20B925 SGST) for regular returns. \u20B920/day for nil returns. Max cap: \u20B92,000 (turnover \u2264\u20B91.5 Cr), \u20B95,000 (\u20B91.5\u20135 Cr), \u20B910,000 (>\u20B95 Cr). Nil return cap: \u20B9500."},
{q:"What is the interest rate on late GST payment?",a:"18% p.a. under Section 50 on net cash tax liability from due date until payment. For excess ITC claims, 24% p.a. Interest is calculated daily: Tax \u00D7 18% \u00D7 (days/365)."},
{q:"What is the late fee for delayed GSTR-1?",a:"\u20B950/day (\u20B925+\u20B925) for regular, \u20B920/day for nil. Max cap \u20B95,000 per return. GSTR-1 must be filed before GSTR-3B for the same period can be submitted."},
{q:"What is the late fee for GSTR-9 annual return?",a:"\u20B9200/day (\u20B9100 CGST + \u20B9100 SGST). Cap: 0.5% of turnover in state. For \u20B95 Cr turnover, cap = \u20B92.5 lakh. Due 31 Dec of following financial year."},
{q:"Can GST late fee be paid using ITC?",a:"No. Late fees must be paid in cash through the electronic cash ledger only. ITC cannot be used for late fees, interest, or penalties. This is a separate cash outflow beyond your tax liability."},
{q:"What is the late fee for nil GST returns?",a:"\u20B920/day (\u20B910 CGST + \u20B910 SGST). Nil return cap for GSTR-3B is \u20B9500. A period with purchases but no sales is still considered nil for late fee purposes."},
{q:"How is interest calculated on delayed GST payment?",a:"Interest = Tax \u00D7 18% \u00D7 (Days/365). Applies on net cash liability after ITC. Example: \u20B91 lakh tax, 30 days late = \u20B91,00,000 \u00D7 0.18 \u00D7 30/365 = \u20B91,479."},
{q:"What is the maximum late fee cap for GSTR-3B?",a:"Depends on turnover: \u20B92,000 (\u2264\u20B91.5 Cr), \u20B95,000 (\u20B91.5\u20135 Cr), \u20B910,000 (>\u20B95 Cr). For nil returns: \u20B9500 regardless of turnover."},
{q:"Can I file new returns without paying previous late fees?",a:"No. Returns must be filed sequentially. All prior late fees must be cleared before the portal allows filing new returns. File the oldest pending return first."},
{q:"What is the late fee for CMP-08?",a:"\u20B950/day (\u20B925+\u20B925) for regular, \u20B920/day for nil. Max cap \u20B910,000. Due 18th of month after quarter end. Composition dealers file CMP-08 quarterly."},
{q:"Is there any waiver of GST late fees?",a:"The government periodically announces amnesty schemes via CBIC notifications. These are time-limited. Monitor CBIC and GST Council updates for new waivers."},
{q:"What happens if E-Way Bill is blocked?",a:"After 2 consecutive months of GSTR-3B non-filing, E-Way Bill generation is blocked. This halts goods transport. Filing all pending returns restores the facility."},
{q:"Can GST registration be cancelled for non-filing?",a:"Yes. 6 months continuous non-filing triggers suo motu cancellation under Section 29 via REG-17 notice. Revocation possible within 30 days via REG-21 after filing all pending returns."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcPenalty();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();onReturnChange();});
</script>

@endsection