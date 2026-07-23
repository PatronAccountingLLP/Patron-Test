@extends('layouts.app')
@section('meta')
    <title>NPS Calculator | Pension Corpus, Annuity &amp; 80CCD Tax</title>
    <meta name="description" content="Free NPS calculator: project your pension corpus, monthly annuity pension, 60% lump sum and 80CCD tax savings, with a year-wise growth table. Calculate free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/nps-calculator">
    <meta property="og:title" content="NPS Calculator &mdash; Pension &amp; Tax Savings 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate NPS corpus, pension, lump sum, and tax savings. Year-wise growth with 80CCD deduction.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/nps-calculator">
    <meta property="og:image" content="/tools/og-nps-calculator.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NPS Calculator &mdash; Free Pension &amp; Tax Calculator 2026">
    <meta name="twitter:description" content="Calculate NPS corpus, pension, and tax savings. Year-wise growth with 80CCD.">
    <meta name="twitter:image" content="/tools/og-nps-calculator.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"NPS Calculator - National Pension System Calculator India 2026","description":"Free online NPS calculator to estimate retirement corpus, monthly pension from annuity, tax-free lump sum withdrawal, and tax savings under Section 80CCD(1), 80CCD(1B), and 80CCD(2). Enter monthly contribution, expected return, current age, and retirement age to get detailed projections with year-wise growth table.","url":"/tools/nps-calculator","applicationCategory":"FinanceApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"NPS Calculator","item":"/tools/nps-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is NPS and how does it work?","acceptedAnswer":{"@type":"Answer","text":"NPS is a government-sponsored pension scheme regulated by PFRDA. You contribute monthly or annually until retirement at 60. At maturity, 60 percent can be withdrawn tax-free as lump sum and 40 percent must be used to buy an annuity that provides monthly pension. NPS invests in equity, corporate bonds, and government securities based on your chosen allocation."}},{"@type":"Question","name":"What are the tax benefits of NPS?","acceptedAnswer":{"@type":"Answer","text":"NPS offers triple tax benefit: <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Section 80CCD(1)</a> deduction up to 10 percent of salary within the 80C limit of 1.5 lakh. Additional 50000 deduction under Section 80CCD(1B) over and above 80C. Employer contribution under 80CCD(2) up to 14 percent of basic salary with no upper limit. At maturity 60 percent lump sum is tax-free."}},{"@type":"Question","name":"What is the expected return from NPS?","acceptedAnswer":{"@type":"Answer","text":"NPS returns depend on asset allocation. Historically equity scheme E has delivered 12 to 14 percent, corporate bonds scheme C around 9 to 10 percent, and government securities scheme G around 8 to 9 percent. A balanced allocation of 50 percent equity and 50 percent debt has given approximately 10 to 11 percent over 10 plus year periods."}},{"@type":"Question","name":"What is the minimum NPS contribution?","acceptedAnswer":{"@type":"Answer","text":"Minimum contribution is 1000 rupees per year for Tier 1 account with at least one contribution per year. There is no upper limit on contributions. For Tier 2 there is no minimum. Most financial advisors recommend contributing at least 10 to 15 percent of salary for adequate retirement corpus. Higher contributions maximize tax benefits under 80CCD."}},{"@type":"Question","name":"What is the annuity requirement in NPS?","acceptedAnswer":{"@type":"Answer","text":"At retirement you must use minimum 40 percent of the corpus to purchase an annuity from an empaneled insurance company. This annuity provides monthly pension for life. The remaining 60 percent can be withdrawn as tax-free lump sum. If total corpus is below 5 lakh you can withdraw 100 percent without buying annuity."}},{"@type":"Question","name":"What annuity rates are available in NPS?","acceptedAnswer":{"@type":"Answer","text":"Annuity rates from NPS empaneled insurers like LIC, SBI Life, and HDFC Life range from 5.5 to 7 percent per annum for life annuity without return of purchase price. Rates vary by age, annuity type, and insurer. Joint life annuity rates are slightly lower. Annuity income is taxable at your slab rate as pension income."}},{"@type":"Question","name":"Can I withdraw from NPS before retirement?","acceptedAnswer":{"@type":"Answer","text":"Partial withdrawal is allowed after 3 years of account opening for specific reasons: children education or marriage, home purchase or construction, medical treatment, or skill development. Maximum 25 percent of own contributions can be withdrawn and up to 3 withdrawals allowed during the entire tenure."}},{"@type":"Question","name":"What is NPS Tier 1 vs Tier 2?","acceptedAnswer":{"@type":"Answer","text":"Tier 1 is the mandatory pension account with lock-in till 60, tax benefits under 80CCD, and withdrawal restrictions. Tier 2 is a voluntary savings account with no lock-in, full liquidity, and no special tax benefits except for government employees who get 80C benefit on Tier 2 with 3 year lock-in."}},{"@type":"Question","name":"What is the NPS exit rule at age 60?","acceptedAnswer":{"@type":"Answer","text":"At 60 you can withdraw 60 percent as tax-free lump sum and must use 40 percent to buy annuity. You can also defer withdrawal up to age 75. If you defer the entire corpus continues to grow. You can also withdraw in instalments between 60 and 75 with systematic withdrawal plan option."}},{"@type":"Question","name":"Is NPS better than PPF for retirement?","acceptedAnswer":{"@type":"Answer","text":"NPS offers potentially higher returns due to equity exposure and extra 50000 deduction under 80CCD(1B). PPF gives guaranteed 7.1 percent with full tax-free maturity. NPS has partial taxability of annuity income. Best approach is both: PPF for guaranteed tax-free base and NPS for growth plus extra tax deduction."}},{"@type":"Question","name":"What is the auto choice option in NPS?","acceptedAnswer":{"@type":"Answer","text":"Auto choice automatically adjusts asset allocation based on your age. Aggressive option starts at 75 percent equity for younger subscribers reducing to 15 percent at age 55. Moderate starts at 50 percent equity. Conservative starts at 25 percent. This lifecycle based approach reduces risk as you approach retirement without manual intervention."}},{"@type":"Question","name":"Is employer NPS contribution taxable?","acceptedAnswer":{"@type":"Answer","text":"Employer NPS contribution under Section 80CCD(2) is tax-free for the employee up to 14 percent of basic salary for central government and 10 percent for others. This deduction is over and above the 1.5 lakh limit of 80C. It is one of the most efficient tax-saving instruments especially for high-salary employees."}},{"@type":"Question","name":"How to open an NPS account?","acceptedAnswer":{"@type":"Answer","text":"Open online through eNPS portal at enps.nsdl.com with Aadhaar and PAN. You can also open offline through any Point of Presence like SBI, ICICI, HDFC Bank, and other authorized banks. KYC documents required include Aadhaar, PAN, photograph, and bank details. Minimum first contribution is 500 for Tier 1 account."}}]}
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


/* Tool-specific: NPS Calculator */
.nps-hero{display:grid;grid-template-columns:1fr 1fr 1fr 1fr;gap:14px;margin:20px 0}
.nps-box{border-radius:var(--radius);padding:18px;text-align:center}
.nps-box.corpus{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.nps-box.lumpsum{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.nps-box.annuity{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.nps-box.tax{background:linear-gradient(135deg,#B45309,#F59E0B);color:#fff}
.nps-box .nb-label{font-size:10px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.nps-box .nb-value{font-size:clamp(1rem,2vw,1.5rem);font-weight:800;margin-top:4px}
.nps-box .nb-sub{font-size:10px;opacity:.8;margin-top:2px}
.growth-bar{display:flex;height:36px;border-radius:10px;overflow:hidden;margin:16px 0}
.growth-bar .seg{display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;color:#fff;transition:width 0.5s}
.seg-inv{background:#4f46e5}
.seg-ret{background:#059669}
.yr-table{max-height:400px;overflow-y:auto;margin-top:12px;border:1px solid var(--border);border-radius:var(--radius)}
.yr-table table{width:100%;border-collapse:collapse;font-size:12px}
.yr-table th{background:var(--primary-dark);color:#fff;padding:8px 10px;text-align:right;font-weight:600;font-size:10px;text-transform:uppercase;letter-spacing:.3px;position:sticky;top:0}
.yr-table th:first-child{text-align:center}
.yr-table td{padding:7px 10px;border-bottom:1px solid var(--border);text-align:right;font-family:var(--font-mono);font-size:11px}
.yr-table td:first-child{text-align:center;font-family:var(--font-body);font-weight:600}
.yr-table tr:nth-child(even){background:var(--surface)}
.slider-group{margin-bottom:20px}
.slider-group label{display:block;font-size:13px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:.5px}
.slider-row{display:flex;align-items:center;gap:12px}
.slider-row input[type="range"]{flex:1;-webkit-appearance:none;height:6px;border-radius:3px;background:var(--border);outline:none}
.slider-row input[type="range"]::-webkit-slider-thumb{-webkit-appearance:none;width:20px;height:20px;border-radius:50%;background:var(--primary);cursor:pointer;border:3px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,0.2)}
.slider-row .slider-val{min-width:110px;padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--card);text-align:right;outline:none;transition:border-color 0.2s}
.slider-row .slider-val:focus{border-color:var(--primary)}
@media(max-width:700px){.nps-hero{grid-template-columns:1fr 1fr}}
@media(max-width:480px){.nps-hero{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#calculator">NPS Calculator</a><a href="#how-to-use">How to Use</a><a href="#tax">Tax Benefits</a><a href="#allocation">Asset Allocation</a><a href="#tips">Tips</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>NPS Calculator</nav> --}}
<header class="hero" id="calculator"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>NPS Calculator &mdash; <span>Pension, Lump Sum &amp; Tax Savings</span></h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Estimate your National Pension System retirement corpus, tax-free lump sum (60%), monthly pension from annuity (40%), and tax savings under Sections 80CCD(1), 80CCD(1B), and 80CCD(2). Enter monthly contribution, expected return, current age, and retirement age. NPS offers up to &#8377;2 lakh+ in extra tax deductions beyond 80C. Regulated by <a href="https://www.pfrda.org.in/" target="_blank" rel="noopener">PFRDA</a>.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>Calculate NPS Retirement Corpus</h2>
    <noscript><div class="noscript-box">This calculator requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="slider-group"><label>Monthly Contribution (&#8377;)</label><div class="slider-row"><input type="range" id="sliderAmt" min="500" max="200000" step="500" value="10000" oninput="syncS('amt')"><input type="text" class="slider-val" id="valAmt" value="10,000" oninput="syncI('amt')"></div></div>
    <div class="slider-group"><label>Expected Annual Return (%)</label><div class="slider-row"><input type="range" id="sliderRate" min="6" max="14" step="0.5" value="10" oninput="syncS('rate')"><input type="text" class="slider-val" id="valRate" value="10" style="min-width:80px" oninput="syncI('rate')"></div><div style="font-size:12px;color:var(--text-muted);margin-top:4px">Equity (E): 12&ndash;14% | Corporate Bond (C): 9&ndash;10% | Govt Sec (G): 8&ndash;9%</div></div>
    <div class="calc-row">
        <div class="form-group"><label>Current Age</label><input type="number" id="inAge" value="30" min="18" max="65" style="max-width:100px"></div>
        <div class="form-group"><label>Retirement Age</label><input type="number" id="inRetire" value="60" min="40" max="75" style="max-width:100px"></div>
    </div>
    <div class="form-group"><label>Annuity Rate (% for pension estimate)</label><input type="number" id="inAnnuity" value="6" min="4" max="9" step="0.5" style="max-width:120px"><div style="font-size:12px;color:var(--text-muted);margin-top:4px">Typical life annuity: 5.5&ndash;7%. Used to estimate monthly pension from 40% annuity portion.</div></div>
    <button class="btn-calculate" onclick="calcNPS()">Calculate NPS Corpus</button>
    <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>
    <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use the NPS Calculator</h2><p>This tool estimates your NPS retirement corpus using SIP-style compounding, as the scheme is regulated by <a href="https://www.pfrda.org.in/" target="_blank" rel="noopener">PFRDA</a> and managed by the <a href="https://www.npstrust.org.in/" target="_blank" rel="noopener">NPS Trust</a>, invested through pension fund managers like SBI, LIC, UTI, HDFC, and others.</p><h3>Step 1 &mdash; Set Monthly Contribution</h3><p>Enter your monthly NPS contribution. Minimum is &#8377;500/year but for meaningful corpus, &#8377;5K&ndash;50K/month is recommended. Higher contribution maximises tax benefits.</p><h3>Step 2 &mdash; Set Return and Age</h3><p>Choose expected return based on your asset allocation. Enter current age and desired retirement age (default 60, can defer to 75).</p><h3>Step 3 &mdash; View Projections</h3><p>Get total corpus, 60% lump sum, 40% annuity value, estimated monthly pension, total invested, returns earned, tax savings, and year-wise growth table.</p><div class="callout"><p><strong>CA Tip:</strong> NPS gives up to &#8377;2 lakh+ in deductions: &#8377;1.5L under 80CCD(1) within 80C + &#8377;50K extra under 80CCD(1B). Employer contribution under 80CCD(2) is unlimited (up to 14% of basic). At 30% bracket, &#8377;2L deduction saves &#8377;60K+ in tax annually. <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends NPS as a core retirement tool.</p></div></section>

<section class="content-section" id="tax"><h2>NPS Tax Benefits &mdash; Sections 80CCD</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Section</th><th>Benefit</th><th>Limit</th><th>New Regime?</th></tr></thead><tbody>
<tr><td>80CCD(1)</td><td>Employee contribution</td><td>10% of salary (within 80C &#8377;1.5L)</td><td>No</td></tr>
<tr><td>80CCD(1B)</td><td>Additional self contribution</td><td>&#8377;50,000 (over 80C)</td><td>No</td></tr>
<tr><td>80CCD(2)</td><td>Employer contribution</td><td>14% of basic (no cap)</td><td><strong>Yes</strong></td></tr>
<tr><td>Lump Sum (60%)</td><td>Withdrawal at retirement</td><td>100% tax-free</td><td>Yes</td></tr>
<tr><td>Annuity (40%)</td><td>Monthly pension</td><td>Taxable at slab rate</td><td>Yes</td></tr>
</tbody></table></div><p>The 80CCD(2) employer deduction works in BOTH old and new regime &mdash; making it the single most powerful NPS tax benefit for salaried employees.</p></section>

<section class="content-section" id="allocation"><h2>NPS Asset Allocation Options</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Scheme</th><th>Invests In</th><th>Historical Return</th><th>Risk</th></tr></thead><tbody>
<tr><td>Equity (E)</td><td>Nifty 50, large cap stocks</td><td>12&ndash;14% p.a.</td><td>High</td></tr>
<tr><td>Corporate Bond (C)</td><td>Corporate bonds, debentures</td><td>9&ndash;10% p.a.</td><td>Moderate</td></tr>
<tr><td>Govt Securities (G)</td><td>Government bonds, T-bills</td><td>8&ndash;9% p.a.</td><td>Low</td></tr>
<tr><td>Alternative (A)</td><td>REITs, InvITs, CMBS</td><td>8&ndash;10% p.a.</td><td>Moderate</td></tr>
</tbody></table></div><p><strong>Auto Choice</strong> adjusts allocation by age: Aggressive (75% E at 25, 15% at 55), Moderate (50% E), Conservative (25% E). Good for those who prefer hands-off management.</p></section>

<section class="content-section" id="tips"><h2>NPS Retirement Planning Tips</h2><ul><li><strong>Start early:</strong> Starting NPS at 25 vs 35 with same &#8377;10K/month can double the corpus at 60 due to 10 extra years of compounding.</li><li><strong>Maximise 80CCD(1B):</strong> Always invest &#8377;50K to claim the extra deduction over 80C. At 30% bracket, this saves &#8377;15,600/year (including cess).</li><li><strong>Get employer to contribute:</strong> Employer NPS under 80CCD(2) is the most tax-efficient benefit. Request your employer to restructure CTC to include NPS.</li><li><strong>Choose Active over Auto:</strong> If you're under 40, consider Active choice with 75% equity allocation for maximum growth. Switch to more conservative as you near 55.</li><li><strong>Don't withdraw early:</strong> Partial withdrawals reduce the compounding effect. Use only for genuine needs like home purchase or medical emergency.</li></ul><div class="callout green"><p><strong>Expert Tip:</strong> Combine NPS + PPF + ELSS for a comprehensive retirement strategy. NPS for growth + extra &#8377;50K deduction. PPF for guaranteed tax-free base. ELSS for liquidity (3-year lock-in). Our CAs can design your optimal retirement allocation. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20NPS%20and%20retirement%20planning." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to a CA &rarr;</a></p></div></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need retirement planning help?</strong> Our CAs assist with NPS enrolment, 80CCD tax optimization, retirement corpus planning, and ITR filing. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20NPS%20and%20retirement%20planning." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p></div>

<section class="content-section" id="faqs"><h2>Frequently Asked Questions &mdash; NPS</h2><div id="faqList"></div></section>
</div>
<aside class="sidebar-col">
    <div class="cta-card"><h3>Need Retirement Help?</h3><p>Our CAs help with NPS, 80CCD optimization, retirement planning &amp; ITR filing.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NPS%20and%20retirement%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div>
    <div class="sidebar-card"><h3>Services</h3><a href="/tax-planning-and-advisory" class="sidebar-link">Tax Planning <span class="arrow">&rarr;</span></a><a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a><a href="/payroll-management" class="sidebar-link">Payroll Management <span class="arrow">&rarr;</span></a><a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>Related Tools</h3><a href="/tools/ppf-calculator" class="sidebar-link">PPF Calculator <span class="arrow">&rarr;</span></a><a href="/tools/sip-calculator" class="sidebar-link">SIP Calculator <span class="arrow">&rarr;</span></a><a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a><a href="/tools/epf-calculator" class="sidebar-link">EPF Calculator <span class="arrow">&rarr;</span></a><a href="/tools/gratuity-calculator" class="sidebar-link">Gratuity Calculator <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div>
</aside>
</div>

<script>
function syncS(t){if(t==='amt'){document.getElementById('valAmt').value=parseInt(document.getElementById('sliderAmt').value).toLocaleString('en-IN');}else if(t==='rate'){document.getElementById('valRate').value=document.getElementById('sliderRate').value;}}
function syncI(t){if(t==='amt'){var v=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;document.getElementById('sliderAmt').value=v;document.getElementById('valAmt').value=v?v.toLocaleString('en-IN'):'';}else if(t==='rate'){document.getElementById('sliderRate').value=parseFloat(document.getElementById('valRate').value)||0;}}
function fmt(n){return'\u20B9'+Math.round(n).toLocaleString('en-IN');}
function fmtL(n){if(n>=10000000)return'\u20B9'+(n/10000000).toFixed(2)+' Cr';if(n>=100000)return'\u20B9'+(n/100000).toFixed(2)+' L';return fmt(n);}
function resetForm(){document.getElementById('sliderAmt').value=10000;document.getElementById('valAmt').value='10,000';document.getElementById('sliderRate').value=10;document.getElementById('valRate').value='10';document.getElementById('inAge').value=30;document.getElementById('inRetire').value=60;document.getElementById('inAnnuity').value=6;document.getElementById('resPanel').classList.remove('visible');}

function calcNPS(){
var monthly=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;
var annRate=parseFloat(document.getElementById('valRate').value)||0;
var curAge=parseInt(document.getElementById('inAge').value)||30;
var retAge=parseInt(document.getElementById('inRetire').value)||60;
var annuityRate=parseFloat(document.getElementById('inAnnuity').value)||6;
if(!monthly||!annRate){alert('Please enter contribution and return rate.');return;}
if(curAge>=retAge){alert('Current age must be less than retirement age.');return;}
var years=retAge-curAge;
var r=annRate/12/100;
var n=years*12;

// SIP FV
var corpus=0;
var totalInvested=0;
var yearData=[];
var currentMonthly=monthly;
for(var y=1;y<=years;y++){
for(var m=0;m<12;m++){totalInvested+=currentMonthly;var monthsToGrow=(years*12)-((y-1)*12+m);corpus+=currentMonthly*Math.pow(1+r,monthsToGrow);}
yearData.push({year:y,age:curAge+y,cumInvested:totalInvested,value:Math.round(corpus)});
// Recalc corpus properly up to this year
var tempCorpus=0;var tempInv=0;
for(var yy=1;yy<=y;yy++){for(var mm=0;mm<12;mm++){tempInv+=monthly;var mtg=(y*12)-((yy-1)*12+mm);tempCorpus+=monthly*Math.pow(1+r,mtg);}}
yearData[y-1].value=Math.round(tempCorpus);yearData[y-1].cumInvested=Math.round(tempInv);
}
corpus=Math.round(corpus);
var returns=corpus-totalInvested;
var lumpSum=Math.round(corpus*0.60);
var annuityCorpus=Math.round(corpus*0.40);
var monthlyPension=Math.round(annuityCorpus*annuityRate/100/12);
var annualTaxSave=Math.round(Math.min(monthly*12,200000)*0.312);
var intPct=corpus>0?Math.round(returns/corpus*100):0;
var invPct=100-intPct;

var h='';
h+='<div class="nps-hero"><div class="nps-box corpus"><div class="nb-label">Total Corpus</div><div class="nb-value">'+fmtL(corpus)+'</div><div class="nb-sub">At age '+retAge+'</div></div>';
h+='<div class="nps-box lumpsum"><div class="nb-label">Lump Sum (60%)</div><div class="nb-value">'+fmtL(lumpSum)+'</div><div class="nb-sub">Tax-free</div></div>';
h+='<div class="nps-box annuity"><div class="nb-label">Monthly Pension</div><div class="nb-value">'+fmt(monthlyPension)+'</div><div class="nb-sub">From 40% annuity</div></div>';
h+='<div class="nps-box tax"><div class="nb-label">Annual Tax Saving</div><div class="nb-value">'+fmt(annualTaxSave)+'</div><div class="nb-sub">At 30% + cess</div></div></div>';

h+='<div class="growth-bar"><div class="seg seg-inv" style="width:'+invPct+'%">Invested '+invPct+'%</div><div class="seg seg-ret" style="width:'+intPct+'%">Returns '+intPct+'%</div></div>';

// Summary
h+='<div class="res-card"><div class="res-card-hd"><h3>NPS Retirement Summary</h3><span class="res-badge info">Age '+curAge+'\u2192'+retAge+'</span></div><div class="res-card-bd"><table class="cmp-table">';
h+='<tr><td>Monthly Contribution</td><td><strong>'+fmt(monthly)+'</strong></td></tr>';
h+='<tr><td>Expected Return</td><td><strong>'+annRate+'% p.a.</strong></td></tr>';
h+='<tr><td>Investment Period</td><td><strong>'+years+' years (age '+curAge+' to '+retAge+')</strong></td></tr>';
h+='<tr><td>Total Invested</td><td>'+fmt(totalInvested)+'</td></tr>';
h+='<tr><td>Returns Earned</td><td class="hi">'+fmtL(returns)+'</td></tr>';
h+='<tr style="background:var(--surface-alt)"><td><strong>Total Corpus at '+retAge+'</strong></td><td style="font-size:16px;color:var(--primary)"><strong>'+fmtL(corpus)+'</strong></td></tr>';
h+='<tr><td>Lump Sum (60% \u2014 tax-free)</td><td><strong>'+fmtL(lumpSum)+'</strong></td></tr>';
h+='<tr><td>Annuity Corpus (40%)</td><td>'+fmtL(annuityCorpus)+'</td></tr>';
h+='<tr><td>Est. Monthly Pension ('+annuityRate+'% annuity)</td><td style="color:var(--success)"><strong>'+fmt(monthlyPension)+'/month</strong></td></tr>';
h+='<tr><td>Annual Tax Saving (80CCD at 30%+cess)</td><td class="hi">'+fmt(annualTaxSave)+'/year</td></tr>';
h+='<tr><td>Total Tax Saved over '+years+' years</td><td class="hi">'+fmtL(annualTaxSave*years)+'</td></tr>';
h+='<tr><td>Wealth Multiplier</td><td><strong>'+(corpus/totalInvested).toFixed(1)+'x</strong></td></tr>';
h+='</table></div></div>';

// Year-wise (every 5 years for brevity)
h+='<div class="res-card"><div class="res-card-hd"><h3>Year-Wise NPS Growth</h3><span class="res-badge teal">Projection</span></div><div class="res-card-bd"><div class="yr-table"><table><thead><tr><th>Year</th><th>Age</th><th>Cumulative Invested</th><th>Corpus Value</th></tr></thead><tbody>';
yearData.forEach(function(d,i){
if(i<5||i===years-1||(i+1)%5===0){
h+='<tr><td>'+d.year+'</td><td>'+d.age+'</td><td>'+fmtL(d.cumInvested)+'</td><td style="color:var(--primary);font-weight:700">'+fmtL(d.value)+'</td></tr>';
}});
h+='</tbody></table></div></div></div>';

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20NPS%20Calculator.%20I%20need%20help%20with%20retirement%20planning." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/ppf-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg> PPF Calculator</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What is NPS and how does it work?",a:"Government pension scheme (PFRDA). Contribute monthly till 60. At maturity: 60% tax-free lump sum + 40% annuity for monthly pension. Invests in equity, corporate bonds, govt securities based on your allocation."},
{q:"What are NPS tax benefits?",a:"80CCD(1): 10% of salary within \u20B91.5L 80C. 80CCD(1B): extra \u20B950K over 80C. 80CCD(2): employer contribution up to 14% of basic (no limit, works in both regimes). 60% lump sum tax-free at maturity."},
{q:"What is expected NPS return?",a:"Equity (E): 12\u201314%. Corporate bonds (C): 9\u201310%. Govt securities (G): 8\u20139%. Balanced 50/50 gives ~10\u201311%. Returns are market-linked, not guaranteed. Historical data over 10+ years."},
{q:"What is minimum NPS contribution?",a:"\u20B91,000/year for Tier 1 (at least 1 contribution/year). No upper limit. Recommend 10\u201315% of salary for adequate corpus. Higher = more tax savings under 80CCD."},
{q:"What is the annuity requirement?",a:"Must use min 40% of corpus to buy life annuity (monthly pension). Remaining 60% withdrawn tax-free. If corpus < \u20B95L, can withdraw 100% without annuity. Annuity income taxable at slab."},
{q:"What annuity rates are available?",a:"5.5\u20137% from LIC, SBI Life, HDFC Life etc. Varies by age, type (life, joint, with return of purchase price). Joint life rates slightly lower. Pension income is taxable at your slab rate."},
{q:"Can I withdraw before retirement?",a:"Partial withdrawal after 3 years for: education, home, medical, skill dev. Max 25% of own contributions. Up to 3 withdrawals total during tenure."},
{q:"What is Tier 1 vs Tier 2?",a:"Tier 1: pension account, lock-in till 60, tax benefits, withdrawal restrictions. Tier 2: voluntary savings, no lock-in, full liquidity, no tax benefits (except govt employees with 3-year lock-in)."},
{q:"NPS exit rules at 60?",a:"60% tax-free lump sum + 40% annuity. Can defer to 75. Can use systematic withdrawal between 60\u201375. If deferred, corpus continues to grow. Partial systematic withdrawal also available."},
{q:"NPS vs PPF for retirement?",a:"NPS: higher potential returns (equity), extra \u20B950K deduction, but annuity income taxable. PPF: guaranteed 7.1%, fully tax-free. Best: both \u2014 PPF for guaranteed base, NPS for growth + extra deduction."},
{q:"What is Auto Choice?",a:"Age-based auto allocation. Aggressive: 75% equity at 25, reduces to 15% at 55. Moderate: 50% start. Conservative: 25% start. Hands-off approach, good for most people."},
{q:"Is employer NPS contribution taxable?",a:"No \u2014 80CCD(2) deduction up to 14% of basic (central govt) / 10% (others). Over and above \u20B91.5L 80C limit. Works in BOTH old and new regime. Most efficient NPS tax benefit."},
{q:"How to open NPS account?",a:"Online: enps.nsdl.com with Aadhaar + PAN. Offline: any PoP (SBI, ICICI, HDFC Bank etc). KYC: Aadhaar, PAN, photo, bank details. Min first contribution: \u20B9500 for Tier 1."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcNPS();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection