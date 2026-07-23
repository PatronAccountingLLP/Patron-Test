@extends('layouts.app')
@section('meta')
    <title>LLP Annual Compliance Checklist | Form 8 &amp; 11</title>
    <meta name="description" content="Free LLP annual compliance checklist: track Form 8, Form 11, DIR-3 KYC, ITR &amp; GST filings with due dates, penalties and a progress tracker. Stay compliant!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/llp-compliance-checklist">
    <meta property="og:title" content="LLP Annual Compliance Checklist &mdash; Free 2026 | Patron Accounting">
    <meta property="og:description" content="LLP compliance checklist. Form 8, Form 11, DIR-3 KYC, ITR, GST with due dates and penalties.">
    <meta property="og:type" content="website"><meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/llp-compliance-checklist">
    <meta property="og:image" content="/tools/og-llp-compliance.png">
    <meta property="og:image:width" content="1200"><meta property="og:image:height" content="630"><meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="LLP Compliance Checklist &mdash; Free 2026">
    <meta name="twitter:description" content="Track all LLP compliance filings with progress.">
@endsection

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"LLP Annual Compliance Checklist India 2026","description":"Free interactive checklist to track all annual compliance requirements for LLPs in India. Covers Form 8 Statement of Account, Form 11 Annual Return, DIR-3 KYC, income tax return, GST returns, TDS returns, and audit requirements with due dates, penalties, and real-time progress tracking.","url":"/tools/llp-compliance-checklist","applicationCategory":"BusinessApplication","operatingSystem":"Any","datePublished":"2026-03-07","dateModified":"2026-03-07","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"LLP Compliance Checklist","item":"/tools/llp-compliance-checklist"}]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What annual filings are required for LLP?","acceptedAnswer":{"@type":"Answer","text":"LLPs must file Form 8 Statement of Account and Solvency within 30 days from end of 6 months of financial year typically by October 30. Form 11 Annual Return is due within 60 days of financial year end by May 30. DIR-3 KYC for all designated partners by September 30. Income tax return ITR-5 by July 31 or September 30 if audit applicable."}},{"@type":"Question","name":"What is LLP Form 8?","acceptedAnswer":{"@type":"Answer","text":"Form 8 is the Statement of Account and Solvency that every LLP must file with ROC. It contains a statement of assets and liabilities and a statement of income and expenditure for the financial year. It must be certified by a practicing Chartered Accountant if the LLP contribution exceeds 25 lakh or turnover exceeds 40 lakh."}},{"@type":"Question","name":"What is LLP Form 11?","acceptedAnswer":{"@type":"Answer","text":"Form 11 is the Annual Return filed by every LLP with MCA. It contains details of partners, contribution received, body corporate as partners, and a summary of partners. It is due within 60 days of financial year end by May 30. Digital signature of a designated partner is required for filing."}},{"@type":"Question","name":"Is audit mandatory for LLP?","acceptedAnswer":{"@type":"Answer","text":"Audit is mandatory for LLPs with turnover exceeding 40 lakh rupees or contribution exceeding 25 lakh rupees in a financial year. LLPs below both thresholds are exempt from statutory audit but must still file Form 8 and Form 11. Tax audit under Section 44AB is required if turnover exceeds 1 crore rupees."}},{"@type":"Question","name":"What is the penalty for late filing of LLP forms?","acceptedAnswer":{"@type":"Answer","text":"Late filing of Form 8 and Form 11 attracts a penalty of 100 rupees per day of delay with no maximum cap. For an LLP delayed by 6 months the penalty can reach 18000 rupees per form. Additionally MCA may initiate strike-off proceedings for LLPs that do not file for 2 or more consecutive years."}},{"@type":"Question","name":"Does LLP need to hold partners meeting?","acceptedAnswer":{"@type":"Answer","text":"There is no mandatory requirement for LLP to hold formal meetings like companies. However the LLP Agreement may specify meeting requirements. Partners should meet at least once a year to review accounts and approve Form 8. Minutes of any meetings held should be documented and maintained for record."}},{"@type":"Question","name":"What is DIR-3 KYC for LLP partners?","acceptedAnswer":{"@type":"Answer","text":"All designated partners holding DPIN must file DIR-3 KYC annually by September 30. First-time filing requires full DIR-3 KYC form with documents and DSC. Subsequent years use simplified DIR-3 KYC-WEB with OTP only. Penalty for non-filing is 5000 rupees and DPIN gets deactivated preventing any MCA filings."}},{"@type":"Question","name":"What GST compliance is needed for LLP?","acceptedAnswer":{"@type":"Answer","text":"GST-registered LLPs must file GSTR-1 monthly or quarterly and GSTR-3B monthly or quarterly depending on turnover. GSTR-9 annual return is due by December 31 if turnover exceeds 2 crore. Composition scheme LLPs file CMP-08 quarterly. TDS on GST applies if turnover exceeds 2.5 crore for B2B transactions."}},{"@type":"Question","name":"Does LLP need to maintain books of accounts?","acceptedAnswer":{"@type":"Answer","text":"Yes under Section 34 of the LLP Act 2008 every LLP must maintain proper books of account on double entry system at the registered office. Books must be maintained for 8 years from the date they are made. Financial statements must follow accrual basis and follow applicable accounting standards."}},{"@type":"Question","name":"What is the cost of LLP annual compliance?","acceptedAnswer":{"@type":"Answer","text":"Typical annual compliance cost: Form 8 and Form 11 filing professional fees 3000 to 8000 rupees, MCA filing fees 200 to 600, audit fees 5000 to 20000 if applicable, ITR filing 3000 to 10000, GST return filing 12000 to 24000 annually. Total: 20000 to 60000 per year depending on turnover and audit applicability."}},{"@type":"Question","name":"Can LLP be struck off for non-compliance?","acceptedAnswer":{"@type":"Answer","text":"Yes MCA can initiate strike-off proceedings under Section 75 of the LLP Act if an LLP fails to file Form 8 and Form 11 for 2 or more consecutive years. Designated partners of struck-off LLPs can be disqualified from being partners in any other LLP. Restoration requires NCLT application with significant legal costs."}},{"@type":"Question","name":"What happens if LLP partner changes during the year?","acceptedAnswer":{"@type":"Answer","text":"Any change in partners must be filed with ROC using Form 4 within 30 days of the change. Incoming partner details, outgoing partner details, and revised contribution must be updated. Form 3 for LLP Agreement amendment is also required if the agreement is modified. Late filing attracts 100 rupees per day penalty."}},{"@type":"Question","name":"Does LLP need to file ITR even with no income?","acceptedAnswer":{"@type":"Answer","text":"Yes every LLP must file income tax return ITR-5 regardless of income or loss. Nil return must be filed by the due date. Non-filing attracts 5000 or 10000 rupee penalty under Section 234F plus interest under Section 234A. Loss carry-forward is only allowed if ITR is filed before the due date."}}]}</script>
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


.tool-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.tool-box{border-radius:var(--radius);padding:20px;text-align:center}
.tool-box .tb-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.tool-box .tb-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.tool-box .tb-sub{font-size:11px;opacity:.8;margin-top:2px}
.tool-box.b1{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.tool-box.b2{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.tool-box.b3{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.progress-bar{width:100%;background:var(--surface-alt);border-radius:20px;height:14px;overflow:hidden;margin:16px 0}
.progress-bar .fill{height:100%;border-radius:20px;transition:width 0.5s;background:linear-gradient(90deg,var(--primary),var(--success))}
.cat-card{background:var(--card);border:2px solid var(--border);border-radius:var(--radius);margin-bottom:12px;overflow:hidden}
.cat-hd{display:flex;align-items:center;justify-content:space-between;padding:14px 18px;cursor:pointer;transition:background 0.15s}
.cat-hd:hover{background:var(--surface)}
.cat-hd .cat-title{font-size:15px;font-weight:700;color:var(--primary-dark)}
.cat-hd .cat-count{font-size:12px;font-weight:600;color:var(--text-muted);background:var(--surface-alt);padding:2px 10px;border-radius:12px}
.cat-hd .cat-icon{font-size:18px;transition:transform 0.3s}
.cat-card.open .cat-icon{transform:rotate(45deg)}
.cat-body{max-height:0;overflow:hidden;transition:max-height 0.4s ease}
.cat-card.open .cat-body{max-height:2000px}
.chk-item{display:flex;align-items:flex-start;gap:12px;padding:12px 18px;border-top:1px solid var(--border);cursor:pointer;transition:background 0.15s}
.chk-item:hover{background:var(--surface)}
.chk-item.checked{background:#F0FDF4}
.chk-box{width:24px;height:24px;border:2px solid var(--border);border-radius:6px;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all 0.2s;font-size:14px;color:transparent}
.chk-item.checked .chk-box{background:var(--success);border-color:var(--success);color:#fff}
.chk-text{flex:1}
.chk-text .ct-title{font-size:14px;font-weight:600;color:var(--text)}
.chk-text .ct-desc{font-size:12px;color:var(--text-muted);margin-top:2px;line-height:1.4}
.chk-text .ct-due{font-size:11px;font-weight:600;color:var(--accent);margin-top:3px;font-family:var(--font-mono)}
.chk-item.checked .ct-title{text-decoration:line-through;color:var(--text-muted)}
@media(max-width:600px){.tool-hero{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#checklist">Checklist</a><a href="#how-to-use">How to Use</a><a href="#penalties">Penalties</a><a href="#audit">Audit Rules</a><a href="#costs">Costs</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>LLP Compliance Checklist</nav> --}}
<header class="hero" id="checklist"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>LLP Annual Compliance <span>Checklist</span> &mdash; FY 2025-26</h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Track all annual compliance filings for your LLP in one place. Interactive checklist covers ROC filings (Form 8, Form 11), DIR-3 KYC, income tax (ITR-5), GST returns, TDS returns, and audit requirements. Tick items as completed to track progress. Each item shows due date and penalty for late filing under the <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">LLP Act 2008</a>.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>LLP Compliance Tracker</h2>
    <noscript><div class="noscript-box">This tool requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="tool-hero" id="scoreArea"></div>
    <div class="progress-bar"><div class="fill" id="progressFill" style="width:0%"></div></div>
    <p style="text-align:center;font-size:13px;color:var(--text-muted)" id="progressLabel">0 of 0 items completed</p>
    <div id="checklistArea"></div>
    <button class="btn-reset" onclick="resetAll()" style="margin-top:16px">&#8634; Reset All</button>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use This Checklist</h2><p>Click on any item to mark it as completed. Progress bar updates in real-time. The checklist covers all filings required under the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">LLP Act 2008</a> and Income Tax Act. Items are grouped by category with due dates for FY 2025-26.</p><div class="callout"><p><strong>CA Tip:</strong> LLPs with turnover below &#8377;40L and contribution below &#8377;25L are exempt from statutory audit but must still file Form 8 and Form 11. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends maintaining proper books even for exempt LLPs to avoid issues during tax assessment.</p></div></section>

<section class="content-section" id="penalties"><h2>LLP Late Filing Penalties</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Filing</th><th>Penalty</th><th>Additional Risk</th></tr></thead><tbody>
<tr><td>Form 8 (late)</td><td>&#8377;100/day (no cap)</td><td>Strike-off after 2 years non-filing</td></tr>
<tr><td>Form 11 (late)</td><td>&#8377;100/day (no cap)</td><td>Strike-off after 2 years non-filing</td></tr>
<tr><td>DIR-3 KYC (late)</td><td>&#8377;5,000 per DPIN</td><td>DPIN deactivation</td></tr>
<tr><td>ITR-5 (late)</td><td>&#8377;5,000 or &#8377;10,000</td><td>Loss carry-forward denied</td></tr>
<tr><td>GSTR-3B (late)</td><td>&#8377;50/day (max &#8377;10,000)</td><td>ITC blocked + interest 18%</td></tr>
<tr><td>TDS Return (late)</td><td>&#8377;200/day under Sec 234E</td><td>Penalty up to TDS amount</td></tr>
</tbody></table></div></section>

<section class="content-section" id="audit"><h2>LLP Audit Requirements</h2><p>Statutory audit under LLP Act is mandatory if <strong>contribution exceeds &#8377;25 lakh</strong> OR <strong>turnover exceeds &#8377;40 lakh</strong> in any financial year. Tax audit under Section 44AB of the Income Tax Act is separately required if turnover exceeds &#8377;1 crore (&#8377;10 crore if 95%+ digital transactions).</p><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Type</th><th>Threshold</th><th>Due Date</th><th>Form</th></tr></thead><tbody>
<tr><td>LLP Statutory Audit</td><td>Contribution &gt; &#8377;25L OR TO &gt; &#8377;40L</td><td>Before Form 8 filing</td><td>Form 8 (certified by CA)</td></tr>
<tr><td>Tax Audit (44AB)</td><td>TO &gt; &#8377;1 Cr (&#8377;10 Cr digital)</td><td>September 30</td><td>Form 3CD</td></tr>
</tbody></table></div></section>

<section class="content-section" id="costs"><h2>Typical Annual Compliance Costs</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Item</th><th>MCA/Govt Fee</th><th>Professional Fee</th></tr></thead><tbody>
<tr><td>Form 8 filing</td><td>&#8377;50&ndash;200</td><td>&#8377;1,500&ndash;4,000</td></tr>
<tr><td>Form 11 filing</td><td>&#8377;50&ndash;200</td><td>&#8377;1,500&ndash;3,000</td></tr>
<tr><td>DIR-3 KYC (per partner)</td><td>Free (if on time)</td><td>&#8377;500&ndash;1,500</td></tr>
<tr><td>Statutory Audit (if applicable)</td><td>N/A</td><td>&#8377;5,000&ndash;20,000</td></tr>
<tr><td>ITR-5 filing</td><td>N/A</td><td>&#8377;3,000&ndash;10,000</td></tr>
<tr><td>GST Returns (12 months)</td><td>N/A</td><td>&#8377;12,000&ndash;24,000</td></tr>
<tr style="background:var(--surface-alt)"><td><strong>Total Annual</strong></td><td><strong>&#8377;100&ndash;600</strong></td><td><strong>&#8377;20,000&ndash;60,000</strong></td></tr>
</tbody></table></div></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need LLP compliance help?</strong> Our CAs handle complete annual compliance for LLPs &mdash; Form 8, Form 11, DIR-3 KYC, audit, ITR, GST. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20LLP%20annual%20compliance%20help." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p></div>

<section class="content-section" id="faqs"><h2>Frequently Asked Questions</h2><div id="faqList"></div></section>
</div>
<aside class="sidebar-col">
    <div class="cta-card"><h3>Need LLP Help?</h3><p>Our CAs handle complete LLP annual compliance across India.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20compliance%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div>
    <div class="sidebar-card"><h3>Services</h3><a href="/llp-incorporation" class="sidebar-link">LLP Incorporation <span class="arrow">&rarr;</span></a><a href="/annual-roc-filing" class="sidebar-link">Annual ROC Filing <span class="arrow">&rarr;</span></a><a href="/statutory-audit" class="sidebar-link">Statutory Audit <span class="arrow">&rarr;</span></a><a href="/gst-return-filing" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>Related Tools</h3><a href="/tools/roc-filing-due-date-calendar" class="sidebar-link">ROC Filing Calendar <span class="arrow">&rarr;</span></a><a href="/tools/dir3-kyc-reminder" class="sidebar-link">DIR-3 KYC Reminder <span class="arrow">&rarr;</span></a><a href="/tools/company-registration-cost-calculator" class="sidebar-link">Registration Cost Calculator <span class="arrow">&rarr;</span></a><a href="/tools/gst-return-due-date-tracker" class="sidebar-link">GST Due Date Tracker <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div>
</aside>
</div>

<script>
var CATEGORIES=[
{title:'ROC Filings',items:[
{name:'Form 11 \u2014 Annual Return',desc:'File within 60 days of FY end. Contains partner details and contribution summary.',due:'May 30, 2026',penalty:'\u20B9100/day (no cap)'},
{name:'Form 8 \u2014 Statement of Account & Solvency',desc:'File within 30 days from 6 months of FY end. Certified by CA if contribution > \u20B925L or TO > \u20B940L.',due:'Oct 30, 2026',penalty:'\u20B9100/day (no cap)'},
{name:'DIR-3 KYC for all Designated Partners',desc:'Annual KYC for each DPIN holder. First time: full form + DSC. Subsequent: KYC-WEB with OTP.',due:'Sep 30, 2026',penalty:'\u20B95,000 + DPIN deactivation'},
{name:'Form 4 \u2014 Partner Changes (if any)',desc:'File within 30 days of any change in partners, contribution, or LLP Agreement.',due:'Within 30 days of change',penalty:'\u20B9100/day'}
]},
{title:'Income Tax',items:[
{name:'Advance Tax Q1 (Jun 15)',desc:'Pay 15% of estimated annual tax liability if tax > \u20B910,000.',due:'Jun 15, 2026',penalty:'Interest u/s 234C at 1%/month'},
{name:'Advance Tax Q2 (Sep 15)',desc:'Pay 45% cumulative of estimated annual tax liability.',due:'Sep 15, 2026',penalty:'Interest u/s 234C'},
{name:'Tax Audit Report (if applicable)',desc:'Required if turnover > \u20B91 Cr (\u20B910 Cr with 95% digital). Form 3CD filed by CA.',due:'Sep 30, 2026',penalty:'\u20B91.5L or 0.5% of TO'},
{name:'ITR-5 Filing',desc:'Income tax return for LLP. Due Sep 30 if audit, Jul 31 otherwise.',due:'Sep 30, 2026',penalty:'\u20B95,000 / \u20B910,000 + interest'},
{name:'Advance Tax Q3 (Dec 15)',desc:'Pay 75% cumulative of estimated annual tax.',due:'Dec 15, 2026',penalty:'Interest u/s 234C'},
{name:'Advance Tax Q4 (Mar 15)',desc:'Pay 100% of estimated annual tax.',due:'Mar 15, 2027',penalty:'Interest u/s 234C'}
]},
{title:'GST Returns',items:[
{name:'GSTR-1 / IFF (Monthly/Quarterly)',desc:'Outward supply details. Monthly if TO > \u20B95 Cr, quarterly (QRMP) if < \u20B95 Cr.',due:'11th/13th of following month/quarter',penalty:'\u20B950/day (max \u20B910,000)'},
{name:'GSTR-3B (Monthly/Quarterly)',desc:'Summary return with tax payment. Monthly or quarterly under QRMP scheme.',due:'20th of following month/quarter',penalty:'\u20B950/day + 18% interest on tax'},
{name:'GSTR-9 Annual Return',desc:'Annual return for FY 2025-26. Required if TO > \u20B92 Cr.',due:'Dec 31, 2026',penalty:'\u20B9200/day (max 0.5% of TO)'}
]},
{title:'TDS Returns',items:[
{name:'TDS Return Q1 (Apr\u2013Jun)',desc:'Form 24Q (salary) and 26Q (non-salary) for April to June quarter.',due:'Jul 31, 2026',penalty:'\u20B9200/day u/s 234E'},
{name:'TDS Return Q2 (Jul\u2013Sep)',desc:'Form 24Q and 26Q for July to September quarter.',due:'Oct 31, 2026',penalty:'\u20B9200/day u/s 234E'},
{name:'TDS Return Q3 (Oct\u2013Dec)',desc:'Form 24Q and 26Q for October to December quarter.',due:'Jan 31, 2027',penalty:'\u20B9200/day u/s 234E'},
{name:'TDS Return Q4 (Jan\u2013Mar)',desc:'Form 24Q and 26Q for January to March quarter.',due:'May 31, 2027',penalty:'\u20B9200/day u/s 234E'}
]}
];

function buildChecklist(){
var area=document.getElementById('checklistArea');
var html='';
CATEGORIES.forEach(function(cat,ci){
html+='<div class="cat-card" id="cat'+ci+'"><div class="cat-hd" onclick="toggleCat('+ci+')"><span class="cat-title">'+cat.title+'</span><span class="cat-count" id="catCount'+ci+'">0/'+cat.items.length+'</span><span class="cat-icon">+</span></div><div class="cat-body">';
cat.items.forEach(function(item,ii){
html+='<div class="chk-item" id="chk'+ci+'_'+ii+'" onclick="toggleCheck('+ci+','+ii+')"><div class="chk-box">\u2714</div><div class="chk-text"><div class="ct-title">'+item.name+'</div><div class="ct-desc">'+item.desc+'</div><div class="ct-due">\uD83D\uDCC5 Due: '+item.due+' &nbsp;|\u26A0 '+item.penalty+'</div></div></div>';
});
html+='</div></div>';
});
area.innerHTML=html;
updateProgress();
}

function toggleCat(ci){
var card=document.getElementById('cat'+ci);
card.classList.toggle('open');
}

function toggleCheck(ci,ii){
var chk=document.getElementById('chk'+ci+'_'+ii);
chk.classList.toggle('checked');
updateProgress();
}

function updateProgress(){
var total=0,done=0;
CATEGORIES.forEach(function(cat,ci){
var catDone=0;
cat.items.forEach(function(item,ii){
total++;
if(document.getElementById('chk'+ci+'_'+ii).classList.contains('checked')){done++;catDone++;}
});
var countEl=document.getElementById('catCount'+ci);
if(countEl)countEl.textContent=catDone+'/'+cat.items.length;
});
var pct=total>0?Math.round(done/total*100):0;
document.getElementById('progressFill').style.width=pct+'%';
document.getElementById('progressLabel').textContent=done+' of '+total+' items completed ('+pct+'%)';
var scoreArea=document.getElementById('scoreArea');
var color=pct>=80?'b3':pct>=40?'b2':'b1';
scoreArea.innerHTML='<div class="tool-box '+color+'"><div class="tb-label">Progress</div><div class="tb-value">'+pct+'%</div><div class="tb-sub">'+done+'/'+total+' completed</div></div><div class="tool-box b2"><div class="tb-label">Pending</div><div class="tb-value">'+(total-done)+'</div><div class="tb-sub">items remaining</div></div><div class="tool-box b1"><div class="tb-label">Categories</div><div class="tb-value">'+CATEGORIES.length+'</div><div class="tb-sub">'+total+' total items</div></div>';
}

function resetAll(){
document.querySelectorAll('.chk-item').forEach(function(c){c.classList.remove('checked');});
document.querySelectorAll('.cat-card').forEach(function(c){c.classList.remove('open');});
updateProgress();
}

var FAQS=[
{q:"What annual filings are required for LLP?",a:"LLPs must file Form 8 Statement of Account and Solvency within 30 days from end of 6 months of financial year typically by October 30. Form 11 Annual Return is due within 60 days of financial year end by May 30. DIR-3 KYC for all designated partners by September 30. Income tax return ITR-5 by July 31 or September 30 if audit applicable."},
{q:"What is LLP Form 8?",a:"Form 8 is the Statement of Account and Solvency that every LLP must file with ROC. It contains a statement of assets and liabilities and a statement of income and expenditure for the financial year. It must be certified by a practicing Chartered Accountant if the LLP contribution exceeds 25 lakh or turnover exceeds 40 lakh."},
{q:"What is LLP Form 11?",a:"Form 11 is the Annual Return filed by every LLP with MCA. It contains details of partners, contribution received, body corporate as partners, and a summary of partners. It is due within 60 days of financial year end by May 30. Digital signature of a designated partner is required for filing."},
{q:"Is audit mandatory for LLP?",a:"Audit is mandatory for LLPs with turnover exceeding 40 lakh rupees or contribution exceeding 25 lakh rupees in a financial year. LLPs below both thresholds are exempt from statutory audit but must still file Form 8 and Form 11. Tax audit under Section 44AB is required if turnover exceeds 1 crore rupees."},
{q:"What is the penalty for late filing of LLP forms?",a:"Late filing of Form 8 and Form 11 attracts a penalty of 100 rupees per day of delay with no maximum cap. For an LLP delayed by 6 months the penalty can reach 18000 rupees per form. Additionally MCA may initiate strike-off proceedings for LLPs that do not file for 2 or more consecutive years."},
{q:"Does LLP need to hold partners meeting?",a:"There is no mandatory requirement for LLP to hold formal meetings like companies. However the LLP Agreement may specify meeting requirements. Partners should meet at least once a year to review accounts and approve Form 8. Minutes of any meetings held should be documented and maintained for record."},
{q:"What is DIR-3 KYC for LLP partners?",a:"All designated partners holding DPIN must file DIR-3 KYC annually by September 30. First-time filing requires full DIR-3 KYC form with documents and DSC. Subsequent years use simplified DIR-3 KYC-WEB with OTP only. Penalty for non-filing is 5000 rupees and DPIN gets deactivated preventing any MCA filings."},
{q:"What GST compliance is needed for LLP?",a:"GST-registered LLPs must file GSTR-1 monthly or quarterly and GSTR-3B monthly or quarterly depending on turnover. GSTR-9 annual return is due by December 31 if turnover exceeds 2 crore. Composition scheme LLPs file CMP-08 quarterly. TDS on GST applies if turnover exceeds 2.5 crore for B2B transactions."},
{q:"Does LLP need to maintain books of accounts?",a:"Yes under Section 34 of the LLP Act 2008 every LLP must maintain proper books of account on double entry system at the registered office. Books must be maintained for 8 years from the date they are made. Financial statements must follow accrual basis and follow applicable accounting standards."},
{q:"What is the cost of LLP annual compliance?",a:"Typical annual compliance cost: Form 8 and Form 11 filing professional fees 3000 to 8000 rupees, MCA filing fees 200 to 600, audit fees 5000 to 20000 if applicable, ITR filing 3000 to 10000, GST return filing 12000 to 24000 annually. Total: 20000 to 60000 per year depending on turnover and audit applicability."},
{q:"Can LLP be struck off for non-compliance?",a:"Yes MCA can initiate strike-off proceedings under Section 75 of the LLP Act if an LLP fails to file Form 8 and Form 11 for 2 or more consecutive years. Designated partners of struck-off LLPs can be disqualified from being partners in any other LLP. Restoration requires NCLT application with significant legal costs."},
{q:"What happens if LLP partner changes during the year?",a:"Any change in partners must be filed with ROC using Form 4 within 30 days of the change. Incoming partner details, outgoing partner details, and revised contribution must be updated. Form 3 for LLP Agreement amendment is also required if the agreement is modified. Late filing attracts 100 rupees per day penalty."},
{q:"Does LLP need to file ITR even with no income?",a:"Yes every LLP must file income tax return ITR-5 regardless of income or loss. Nil return must be filed by the due date. Non-filing attracts 5000 or 10000 rupee penalty under Section 234F plus interest under Section 234A. Loss carry-forward is only allowed if ITR is filed before the due date."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();buildChecklist();});
</script>
@endsection