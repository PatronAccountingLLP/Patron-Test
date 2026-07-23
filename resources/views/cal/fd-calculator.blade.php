@extends('layouts.app')
@section('meta')
    <title>FD Calculator | Fixed Deposit Maturity &amp; Interest</title>
    <meta name="description" content="FD calculator: find your fixed deposit maturity value, interest earned and TDS impact, with simple &amp; compound interest and a year-wise breakup. Calculate free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/fd-calculator">
    <meta property="og:title" content="FD Calculator &mdash; Fixed Deposit Interest Calculator 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate FD maturity value, interest earned, TDS impact. Simple and compound interest with year-wise breakup.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/fd-calculator">
    <meta property="og:image" content="/tools/og-fd-calculator.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FD Calculator &mdash; Fixed Deposit Interest 2026">
    <meta name="twitter:description" content="Calculate FD maturity and interest. Free tool with TDS impact.">
    <meta name="twitter:image" content="/tools/og-fd-calculator.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"FD Interest Calculator - Fixed Deposit Maturity Calculator India 2026","description":"Free online fixed deposit calculator to compute maturity value, interest earned, and TDS impact for FY 2025-26. Supports both simple and compound interest with quarterly, monthly, and annual compounding options. Shows year-wise interest breakup and effective yield after TDS.","url":"/tools/fd-calculator","applicationCategory":"FinanceApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"FD Calculator","item":"/tools/fd-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How is FD interest calculated?","acceptedAnswer":{"@type":"Answer","text":"FD interest is calculated using compound interest formula A equals P times (1 plus r/n) to the power of n times t, where P is principal, r is annual rate, n is compounding frequency, and t is years. Most banks compound quarterly. Simple interest formula is P times r times t. The calculator supports both methods."}},{"@type":"Question","name":"What is the current FD interest rate in India?","acceptedAnswer":{"@type":"Answer","text":"FD rates in India range from 6.5 to 8 percent for general citizens and 7 to 8.5 percent for senior citizens as of 2026. Rates vary by bank tenure and deposit amount. SBI offers 6.5 to 7.1 percent while small finance banks offer up to 8.5 percent. Senior citizens typically get 0.25 to 0.5 percent extra."}},{"@type":"Question","name":"Is TDS deducted on FD interest?","acceptedAnswer":{"@type":"Answer","text":"Yes TDS at 10 percent is deducted if total FD interest from a bank exceeds 40000 per year or 50000 for senior citizens. If PAN is not provided TDS is deducted at 20 percent. You can submit Form 15G or 15H to avoid TDS if your total income is below the taxable limit."}},{"@type":"Question","name":"What is the difference between cumulative and non-cumulative FD?","acceptedAnswer":{"@type":"Answer","text":"Cumulative FD reinvests interest and pays the total at maturity giving higher effective returns due to compounding. Non-cumulative FD pays interest periodically monthly quarterly or annually providing regular income. Cumulative gives higher maturity value while non-cumulative suits those needing regular cash flow."}},{"@type":"Question","name":"Is FD interest taxable?","acceptedAnswer":{"@type":"Answer","text":"Yes FD interest is fully taxable and added to your total income. It is taxed at your income tax slab rate under Income from Other Sources. TDS is deducted at 10 percent but actual tax depends on your slab. Tax-saving FDs under Section 80C have a 5 year lock-in and qualify for deduction up to 1.5 lakh."}},{"@type":"Question","name":"What is the 80C tax benefit on FD?","acceptedAnswer":{"@type":"Answer","text":"Tax-saving fixed deposits with 5 year lock-in qualify for deduction under Section 80C up to 1.5 lakh per year under old tax regime. The interest earned is still taxable. This benefit is not available under the new tax regime. Maximum deposit eligible is 1.5 lakh and premature withdrawal is not allowed during lock-in."}},{"@type":"Question","name":"Can senior citizens get higher FD rates?","acceptedAnswer":{"@type":"Answer","text":"Yes most banks offer 0.25 to 0.5 percent higher FD rates for senior citizens aged 60 plus. Some banks offer up to 0.75 percent extra for super senior citizens aged 80 plus. The TDS threshold is also higher at 50000 versus 40000 for general citizens. Section 80TTB allows deduction of up to 50000 on interest income for seniors."}},{"@type":"Question","name":"What is the penalty for premature FD withdrawal?","acceptedAnswer":{"@type":"Answer","text":"Premature withdrawal typically attracts a penalty of 0.5 to 1 percent reduction from the applicable interest rate. The interest is recalculated at the rate applicable for the actual holding period minus the penalty. Some banks do not charge penalty for small deposits. Tax-saving 5 year FDs cannot be withdrawn prematurely."}},{"@type":"Question","name":"How does compounding frequency affect FD returns?","acceptedAnswer":{"@type":"Answer","text":"Higher compounding frequency gives slightly higher effective returns. Monthly compounding yields more than quarterly which yields more than annual. For example 1 lakh at 7 percent for 5 years: annual compounding gives 40255 interest while quarterly compounding gives 41478. Most banks use quarterly compounding for cumulative FDs."}},{"@type":"Question","name":"What is Form 15G and Form 15H?","acceptedAnswer":{"@type":"Answer","text":"Form 15G is a self-declaration for individuals below 60 whose total income is below the taxable limit to request the bank not to deduct TDS on FD interest. Form 15H is the same declaration for senior citizens aged 60 and above. These forms must be submitted at the beginning of each financial year to each bank where you hold FDs."}},{"@type":"Question","name":"Is FD safer than mutual funds?","acceptedAnswer":{"@type":"Answer","text":"FDs offer guaranteed returns and principal protection making them safer than mutual funds which are subject to market risk. However FD returns often barely beat inflation after tax. A balanced approach is recommended: FDs for emergency funds and short-term goals, mutual fund SIPs for long-term wealth creation beyond 5 years."}},{"@type":"Question","name":"What is the minimum and maximum FD tenure?","acceptedAnswer":{"@type":"Answer","text":"Minimum FD tenure is typically 7 days and maximum is 10 years at most banks. The highest interest rates are usually offered for 1 to 3 year tenures. Tax-saving FDs have a mandatory 5 year lock-in. Shorter tenures of 7 days to 6 months have lower rates while medium tenures of 1 to 5 years offer the best rates."}},{"@type":"Question","name":"Can NRIs invest in FD in India?","acceptedAnswer":{"@type":"Answer","text":"Yes NRIs can invest in NRE and NRO fixed deposits in India. NRE FD interest is tax-free in India and fully repatriable. NRO FD interest is taxable in India at 30 percent plus cess with TDS deducted. NRE FDs offer slightly lower rates than domestic FDs. Tenure ranges from 1 to 10 years for both types."}}]}
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


/* Tool-specific: FD Calculator */
.fd-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.fd-box{border-radius:var(--radius);padding:20px;text-align:center}
.fd-box.maturity{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.fd-box.interest{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.fd-box.tds{background:linear-gradient(135deg,#dc2626,#ef4444);color:#fff}
.fd-box .fb-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.fd-box .fb-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.fd-box .fb-sub{font-size:11px;opacity:.8;margin-top:2px}
.slider-group{margin-bottom:20px}
.slider-group label{display:block;font-size:13px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:.5px}
.slider-row{display:flex;align-items:center;gap:12px}
.slider-row input[type="range"]{flex:1;-webkit-appearance:none;height:6px;border-radius:3px;background:var(--border);outline:none}
.slider-row input[type="range"]::-webkit-slider-thumb{-webkit-appearance:none;width:20px;height:20px;border-radius:50%;background:var(--primary);cursor:pointer;border:3px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,0.2)}
.slider-row .slider-val{min-width:110px;padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--card);text-align:right;outline:none;transition:border-color 0.2s}
.slider-row .slider-val:focus{border-color:var(--primary)}
@media(max-width:600px){.fd-hero{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">FD Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#formula">FD Formula</a>
        <a href="#rates">FD Rates</a>
        <a href="#tax">Tax &amp; TDS</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>
{{-- 
<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>&rsaquo;</span>
    <a href="/tools/">Free Tools</a><span>&rsaquo;</span>
    FD Calculator
</nav> --}}

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>FD Interest Calculator &mdash; <span>Fixed Deposit Returns</span> with TDS Impact</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Calculate your fixed deposit maturity value, total interest earned, and TDS impact instantly. Enter deposit amount, interest rate, tenure, and compounding frequency. Choose between simple and compound interest. The calculator shows maturity value, gross interest, TDS deduction (10% above &#8377;40K/&#8377;50K for seniors), net interest after TDS, effective yield, and a year-wise interest breakup.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate FD Maturity &amp; Interest</h2>
            <noscript><div class="noscript-box">This calculator requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>

            <div class="slider-group">
                <label>Deposit Amount (&#8377;)</label>
                <div class="slider-row">
                    <input type="range" id="sliderAmt" min="10000" max="50000000" step="10000" value="500000" oninput="syncS('amt')">
                    <input type="text" class="slider-val" id="valAmt" value="5,00,000" oninput="syncI('amt')">
                </div>
            </div>

            <div class="slider-group">
                <label>Annual Interest Rate (%)</label>
                <div class="slider-row">
                    <input type="range" id="sliderRate" min="3" max="10" step="0.1" value="7" oninput="syncS('rate')">
                    <input type="text" class="slider-val" id="valRate" value="7" style="min-width:80px" oninput="syncI('rate')">
                </div>
            </div>

            <div class="slider-group">
                <label>Tenure (Months)</label>
                <div class="slider-row">
                    <input type="range" id="sliderTenure" min="1" max="120" step="1" value="60" oninput="syncS('tenure')">
                    <input type="text" class="slider-val" id="valTenure" value="60" style="min-width:80px" oninput="syncI('tenure')">
                    <span style="font-size:13px;color:var(--text-muted);white-space:nowrap" id="tenLabel">5 yrs</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Compounding Frequency</label>
                    <div class="toggle-group" id="compFreq">
                        <button type="button" class="toggle-btn" data-val="monthly" onclick="setTg('compFreq',this)">Monthly</button>
                        <button type="button" class="toggle-btn active" data-val="quarterly" onclick="setTg('compFreq',this)">Quarterly</button>
                        <button type="button" class="toggle-btn" data-val="yearly" onclick="setTg('compFreq',this)">Yearly</button>
                        <button type="button" class="toggle-btn" data-val="simple" onclick="setTg('compFreq',this)">Simple</button>
                    </div>
                </div>
                <div class="form-group">
                    <label>Depositor Category</label>
                    <div class="toggle-group" id="depositor">
                        <button type="button" class="toggle-btn active" data-val="general" onclick="setTg('depositor',this)">General<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">TDS &gt; &#8377;40K</small></button>
                        <button type="button" class="toggle-btn" data-val="senior" onclick="setTg('depositor',this)">Senior 60+<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">TDS &gt; &#8377;50K</small></button>
                    </div>
                </div>
            </div>

            <button class="btn-calculate" onclick="calcFD()">Calculate FD Maturity</button>
            <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>

            <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the FD Calculator</h2>
            <p>This calculator computes fixed deposit maturity value using the standard formulas used by banks regulated by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a>.</p>
            <h3>Step 1 &mdash; Enter Deposit Details</h3>
            <p>Set deposit amount (up to &#8377;5 crore), interest rate, and tenure using sliders or input fields.</p>
            <h3>Step 2 &mdash; Choose Compounding and Category</h3>
            <p>Select compounding frequency: Monthly, Quarterly (most common for banks), Yearly, or Simple interest. Choose General or Senior Citizen for correct TDS threshold.</p>
            <h3>Step 3 &mdash; View Results</h3>
            <p>Get maturity value, gross interest, TDS impact, net interest, effective yield, and year-wise breakup.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> FD interest is taxable as &ldquo;Income from Other Sources&rdquo; at your slab rate. If total FD interest across all branches of a bank exceeds &#8377;40K (&#8377;50K for seniors), TDS is deducted at 10%. Submit Form 15G/15H if income is below taxable limit. <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends tax-saving FDs only if you exhaust other 80C options first.</p>
            </div>
        </section>

        <section class="content-section" id="formula">
            <h2>FD Interest Calculation Formulas</h2>
            <div class="formula-box">
                <span class="label">Compound Interest:</span><br>
                A = P &times; (1 + r/n)<sup>n&times;t</sup><br>
                Interest = A &minus; P<br><br>
                <span class="label">Simple Interest:</span><br>
                Interest = P &times; r &times; t<br>
                A = P + Interest<br><br>
                <span class="label">Where:</span> P = Principal, r = Annual rate, n = Compounding per year, t = Years<br><br>
                <span class="label">Example (&#8377;5L, 7%, 5 yrs, quarterly):</span><br>
                A = 5,00,000 &times; (1 + 0.07/4)<sup>4&times;5</sup> = 5,00,000 &times; 1.4148<br>
                A = <span class="label">&#8377;7,07,393</span> | Interest = <span class="label">&#8377;2,07,393</span>
            </div>
        </section>

        <section class="content-section" id="rates">
            <h2>FD Interest Rates in India &mdash; 2026</h2>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Bank</th><th>1 Year</th><th>3 Years</th><th>5 Years</th><th>Senior Citizen Extra</th></tr></thead>
                <tbody>
                    <tr><td>SBI</td><td>6.80%</td><td>7.00%</td><td>6.50%</td><td>+0.50%</td></tr>
                    <tr><td>HDFC Bank</td><td>6.60%</td><td>7.10%</td><td>7.00%</td><td>+0.50%</td></tr>
                    <tr><td>ICICI Bank</td><td>6.70%</td><td>7.10%</td><td>7.00%</td><td>+0.50%</td></tr>
                    <tr><td>Post Office</td><td>6.90%</td><td>7.10%</td><td>7.50%</td><td>N/A</td></tr>
                    <tr><td>Small Finance Banks</td><td>7.50%</td><td>8.00%</td><td>8.25%</td><td>+0.50&ndash;0.75%</td></tr>
                </tbody>
            </table>
            </div>
            <p style="font-size:13px;color:var(--text-muted);">Rates are indicative as of March 2026. Check <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> and bank websites for latest rates. Post Office FDs are backed by Government of India.</p>
        </section>

        <section class="content-section" id="tax">
            <h2>Tax and TDS on Fixed Deposit Interest</h2>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Parameter</th><th>General Citizen</th><th>Senior Citizen (60+)</th></tr></thead>
                <tbody>
                    <tr><td>TDS Threshold (per bank/year)</td><td>&#8377;40,000</td><td>&#8377;50,000</td></tr>
                    <tr><td>TDS Rate (with PAN)</td><td>10%</td><td>10%</td></tr>
                    <tr><td>TDS Rate (without PAN)</td><td>20%</td><td>20%</td></tr>
                    <tr><td>Sec 80TTB Deduction</td><td>N/A</td><td>Up to &#8377;50,000</td></tr>
                    <tr><td>Tax-Saving FD (80C)</td><td>&#8377;1.5L, 5-year lock-in</td><td>&#8377;1.5L, 5-year lock-in</td></tr>
                    <tr><td>TDS Avoidance</td><td>Form 15G</td><td>Form 15H</td></tr>
                </tbody>
            </table>
            </div>
            <div class="callout warn">
                <p><strong>Important:</strong> TDS is just advance tax &mdash; not final tax. Actual tax on FD interest depends on your income tax slab. If you are in the 30% bracket, you owe 20% more beyond the 10% TDS. Include FD interest in your <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">ITR</a> under Income from Other Sources.</p>
            </div>
            <div class="callout green">
                <p><strong>Expert Tip:</strong> Spread FDs across multiple banks keeping interest below &#8377;40K per bank to legally minimise TDS. Or submit Form 15G/15H if total income is below taxable limit. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20FD%20tax%20planning." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to our CA team &rarr;</a></p>
            </div>
        </section>

        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need tax planning help?</strong> Our CAs handle FD tax optimization, TDS compliance, ITR filing, and investment planning. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20FD%20Calculator.%20I%20need%20tax%20planning%20help." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions &mdash; Fixed Deposits</h2>
            <div id="faqList"></div>
        </section>
    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Need Tax Help?</h3>
            <p>Our CAs handle FD tax planning, TDS compliance &amp; ITR filing for individuals across India.</p>
            <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20FD%20tax%20planning%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>Services</h3>
            <a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a>
            <a href="/tax-planning-and-advisory" class="sidebar-link">Tax Planning <span class="arrow">&rarr;</span></a>
            <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">&rarr;</span></a>
            <a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/sip-calculator" class="sidebar-link">SIP Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/emi-calculator" class="sidebar-link">EMI Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/ppf-calculator" class="sidebar-link">PPF Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
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
function syncS(t){
if(t==='amt'){var v=parseInt(document.getElementById('sliderAmt').value);document.getElementById('valAmt').value=v.toLocaleString('en-IN');}
else if(t==='rate'){document.getElementById('valRate').value=document.getElementById('sliderRate').value;}
else{var m=parseInt(document.getElementById('sliderTenure').value);document.getElementById('valTenure').value=m;var y=Math.floor(m/12),mo=m%12;document.getElementById('tenLabel').textContent=y?y+' yr'+(y>1?'s':'')+(mo?' '+mo+' mo':''):(mo+' mo');}
}
function syncI(t){
if(t==='amt'){var v=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;document.getElementById('sliderAmt').value=v;document.getElementById('valAmt').value=v?v.toLocaleString('en-IN'):'';}
else if(t==='rate'){var r=parseFloat(document.getElementById('valRate').value)||0;document.getElementById('sliderRate').value=r;}
else{var m=parseInt(document.getElementById('valTenure').value)||0;document.getElementById('sliderTenure').value=m;var y=Math.floor(m/12),mo=m%12;document.getElementById('tenLabel').textContent=y?y+' yr'+(y>1?'s':'')+(mo?' '+mo+' mo':''):(mo+' mo');}
}
function fmt(n){return'\u20B9'+Math.round(n).toLocaleString('en-IN');}
function fmtL(n){if(n>=10000000)return'\u20B9'+(n/10000000).toFixed(2)+' Cr';if(n>=100000)return'\u20B9'+(n/100000).toFixed(2)+' L';return fmt(n);}

function resetForm(){
document.getElementById('sliderAmt').value=500000;document.getElementById('valAmt').value='5,00,000';
document.getElementById('sliderRate').value=7;document.getElementById('valRate').value='7';
document.getElementById('sliderTenure').value=60;document.getElementById('valTenure').value='60';document.getElementById('tenLabel').textContent='5 yrs';
['compFreq','depositor'].forEach(function(g){var el=document.getElementById(g);el.querySelectorAll('.toggle-btn').forEach(function(b,i){b.classList.toggle('active',g==='compFreq'?i===1:i===0);});});
document.getElementById('resPanel').classList.remove('visible');
}

function calcFD(){
var P=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;
var rate=parseFloat(document.getElementById('valRate').value)||0;
var months=parseInt(document.getElementById('valTenure').value)||0;
if(!P||!rate||!months){alert('Please enter deposit amount, rate, and tenure.');return;}
var freq=getVal('compFreq');
var isSenior=getVal('depositor')==='senior';
var r=rate/100;
var t=months/12;
var n=freq==='monthly'?12:freq==='quarterly'?4:freq==='yearly'?1:0;

var maturity,interest;
if(freq==='simple'){
interest=Math.round(P*r*t);
maturity=P+interest;
}else{
maturity=Math.round(P*Math.pow(1+r/n,n*t));
interest=maturity-P;
}

// TDS calculation
var tdsThreshold=isSenior?50000:40000;
var annualInterest=interest/t;
var tdsPerYear=annualInterest>tdsThreshold?Math.round(annualInterest*0.10):0;
var totalTDS=Math.round(tdsPerYear*t);
var netInterest=interest-totalTDS;
var effectiveRate=P>0&&t>0?((netInterest/(P*t))*100).toFixed(2):'0';

var h='';
// Hero
h+='<div class="fd-hero">';
h+='<div class="fd-box maturity"><div class="fb-label">Maturity Value</div><div class="fb-value">'+fmtL(maturity)+'</div><div class="fb-sub">After '+months+' months</div></div>';
h+='<div class="fd-box interest"><div class="fb-label">Total Interest</div><div class="fb-value">'+fmtL(interest)+'</div><div class="fb-sub">Gross (before TDS)</div></div>';
h+='<div class="fd-box tds"><div class="fb-label">TDS Deducted</div><div class="fb-value">'+fmt(totalTDS)+'</div><div class="fb-sub">'+(totalTDS>0?'10% on interest above '+fmt(tdsThreshold)+'/yr':'Below TDS threshold')+'</div></div>';
h+='</div>';

// Summary table
h+='<div class="res-card"><div class="res-card-hd"><h3>FD Summary</h3><span class="res-badge info">Details</span></div><div class="res-card-bd"><table class="cmp-table">';
h+='<tr><td>Deposit Amount</td><td><strong>'+fmt(P)+'</strong></td></tr>';
h+='<tr><td>Interest Rate</td><td><strong>'+rate+'% p.a.</strong></td></tr>';
h+='<tr><td>Tenure</td><td><strong>'+months+' months ('+Math.floor(months/12)+' yrs'+(months%12?' '+months%12+' mo':'')+')</strong></td></tr>';
h+='<tr><td>Compounding</td><td><strong>'+(freq==='simple'?'Simple Interest':freq.charAt(0).toUpperCase()+freq.slice(1))+'</strong></td></tr>';
h+='<tr><td>Gross Interest Earned</td><td class="hi">'+fmt(interest)+'</td></tr>';
h+='<tr><td>TDS Deducted (10%)</td><td class="neg">'+(totalTDS>0?'-'+fmt(totalTDS):'Nil (below '+fmt(tdsThreshold)+' threshold)')+'</td></tr>';
h+='<tr><td>Net Interest After TDS</td><td><strong>'+fmt(netInterest)+'</strong></td></tr>';
h+='<tr><td>Effective Yield After TDS</td><td><strong>'+effectiveRate+'% p.a.</strong></td></tr>';
h+='<tr style="background:var(--surface-alt)"><td><strong>Maturity Value</strong></td><td style="font-size:18px;color:var(--primary)"><strong>'+fmtL(maturity)+'</strong></td></tr>';
h+='</table></div></div>';

// Year-wise breakup
var years=Math.ceil(t);
if(years>0){
h+='<div class="res-card"><div class="res-card-hd"><h3>Year-Wise Interest Breakup</h3><span class="res-badge teal">Schedule</span></div><div class="res-card-bd">';
h+='<div class="yr-table" style="max-height:300px"><table><thead><tr><th>Year</th><th>Opening Balance</th><th>Interest Earned</th><th>TDS</th><th>Closing Balance</th></tr></thead><tbody>';
var bal=P;
for(var y=1;y<=years;y++){
var yrMonths=y===years&&months%12!==0?months%12:12;
var yrT=yrMonths/12;
var yrBal;
if(freq==='simple'){yrBal=bal+Math.round(P*r*yrT);}
else{yrBal=Math.round(bal*Math.pow(1+r/n,n*yrT));}
var yrInt=yrBal-bal;
var yrTDS=yrInt>tdsThreshold?Math.round(yrInt*0.10):0;
h+='<tr><td>'+y+'</td><td>'+fmt(bal)+'</td><td class="hi">'+fmt(yrInt)+'</td><td class="neg">'+(yrTDS>0?fmt(yrTDS):'\u2014')+'</td><td>'+fmt(yrBal)+'</td></tr>';
bal=yrBal;
}
h+='</tbody></table></div></div></div>';
}

// TDS advice
if(totalTDS>0){
h+='<div class="callout warn"><p><strong>TDS Note:</strong> '+fmt(totalTDS)+' TDS will be deducted by the bank. This is adjustable against your final income tax liability. If your total income is below taxable limit, submit Form '+(isSenior?'15H':'15G')+' to the bank to avoid TDS. Include this FD interest in your ITR under Income from Other Sources.</p></div>';
}else{
h+='<div class="callout green"><p><strong>No TDS:</strong> Annual interest of '+fmt(Math.round(annualInterest))+' is below the '+fmt(tdsThreshold)+' threshold. No TDS will be deducted. However, the interest is still taxable &mdash; include it in your ITR.</p></div>';
}

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20FD%20Calculator.%20I%20need%20help%20with%20FD%20tax%20planning." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/sip-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg> SIP Calculator</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"How is FD interest calculated?",a:"Compound: A = P \u00D7 (1+r/n)^(n\u00D7t). Simple: I = P\u00D7r\u00D7t. P = principal, r = annual rate, n = compounding frequency (4 for quarterly), t = years. Most banks use quarterly compounding for cumulative FDs."},
{q:"What is the current FD rate in India?",a:"6.5\u20138% for general citizens, 7\u20138.5% for seniors (March 2026). SBI: 6.5\u20137.1%. Small finance banks offer up to 8.5%. Senior citizens get 0.25\u20130.5% extra. Rates vary by tenure and bank."},
{q:"Is TDS deducted on FD interest?",a:"Yes, 10% TDS if total FD interest from a bank exceeds \u20B940K/year (\u20B950K for seniors). 20% if PAN not provided. Submit Form 15G/15H if income is below taxable limit to avoid TDS."},
{q:"Cumulative vs non-cumulative FD?",a:"Cumulative reinvests interest, pays total at maturity \u2014 higher effective return. Non-cumulative pays interest periodically (monthly/quarterly) \u2014 regular income. Cumulative is better for wealth creation; non-cumulative for cash flow."},
{q:"Is FD interest taxable?",a:"Fully taxable at your slab rate under Income from Other Sources. TDS is just advance tax. If you\u2019re in 30% bracket, you owe 20% more beyond 10% TDS. Include in ITR."},
{q:"What is 80C tax benefit on FD?",a:"Tax-saving FD: 5-year lock-in, up to \u20B91.5L deduction under 80C (old regime only). Interest is still taxable. No premature withdrawal. Available at most banks and post offices."},
{q:"Do seniors get higher FD rates?",a:"Yes, 0.25\u20130.5% extra (some banks 0.75% for 80+). TDS threshold is \u20B950K vs \u20B940K. Section 80TTB allows \u20B950K deduction on interest income for seniors. Very beneficial."},
{q:"What is the penalty for premature withdrawal?",a:"0.5\u20131% reduction from applicable rate. Interest recalculated at rate for actual holding period minus penalty. Tax-saving 5-year FDs cannot be withdrawn prematurely."},
{q:"How does compounding frequency affect returns?",a:"Higher frequency = slightly more interest. \u20B91L at 7% for 5 years: annual = \u20B940,255 interest, quarterly = \u20B941,478. Most banks compound quarterly. Monthly gives marginally more."},
{q:"What is Form 15G and 15H?",a:"15G: declaration by under-60 individuals with income below taxable limit to avoid TDS. 15H: same for 60+ seniors. Submit to each bank at start of each financial year. PAN mandatory."},
{q:"Is FD safer than mutual funds?",a:"FDs offer guaranteed returns and principal protection. But returns barely beat inflation after tax. Use FDs for emergency fund and short-term goals. SIPs in mutual funds for long-term (5+ years)."},
{q:"What is minimum and maximum FD tenure?",a:"Minimum: 7 days. Maximum: 10 years. Best rates usually at 1\u20133 year tenures. Tax-saving FDs: mandatory 5-year lock-in. Short tenures (7 days\u20136 months) have lower rates."},
{q:"Can NRIs invest in FD in India?",a:"Yes \u2014 NRE FD (tax-free in India, repatriable) and NRO FD (taxable at 30%+cess, TDS deducted). NRE rates slightly lower. Tenure 1\u201310 years. Contact bank\u2019s NRI desk for current rates."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcFD();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection