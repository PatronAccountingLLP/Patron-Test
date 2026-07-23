@extends('layouts.app')
@section('meta')
    <title>Compound Interest Calculator | Monthly to Yearly CI</title>
    <meta name="description" content="Free compound interest calculator: compute CI with monthly, quarterly or yearly compounding, with a year-wise growth table and simple vs compound view. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/compound-interest-calculator">
    <meta property="og:title" content="Compound Interest Calculator — Free Tool 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate compound interest with multiple compounding frequencies. Year-wise growth and simple vs compound comparison.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/compound-interest-calculator">
    <meta property="og:image" content="/tools/og-compound-interest-calculator.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Compound Interest Calculator — Free Tool 2026">
    <meta name="twitter:description" content="Calculate compound interest. Multiple compounding frequencies with year-wise growth.">
    <meta name="twitter:image" content="/tools/og-compound-interest-calculator.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"Compound Interest Calculator India 2026","description":"Free online compound interest calculator with monthly, quarterly, half-yearly, and annual compounding options. Compare compound vs simple interest, view year-wise growth table, and calculate effective annual rate. Works for FDs, PPF, loans, and investments.","url":"/tools/compound-interest-calculator","applicationCategory":"FinanceApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Compound Interest Calculator","item":"/tools/compound-interest-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is compound interest?","acceptedAnswer":{"@type":"Answer","text":"Compound interest is interest calculated on both the initial principal and the accumulated interest from previous periods. Unlike simple interest which is only on principal, compound interest grows exponentially. This is why it is called interest on interest and is the fundamental principle behind wealth creation through long-term investing."}},{"@type":"Question","name":"What is the compound interest formula?","acceptedAnswer":{"@type":"Answer","text":"A equals P times (1 plus r divided by n) raised to the power of n times t. Where A is the final amount, P is principal, r is annual interest rate as decimal, n is number of times interest compounds per year, and t is the number of years. Compound interest equals A minus P."}},{"@type":"Question","name":"How does compounding frequency affect returns?","acceptedAnswer":{"@type":"Answer","text":"Higher compounding frequency gives slightly higher returns. For 1 lakh at 8 percent for 5 years: annual compounding gives 46933 interest, quarterly gives 48595, monthly gives 48985. The difference increases with higher rates and longer periods. Banks typically use quarterly compounding for FDs."}},{"@type":"Question","name":"What is the difference between simple and compound interest?","acceptedAnswer":{"@type":"Answer","text":"Simple interest is calculated only on the original principal amount. Compound interest is calculated on principal plus accumulated interest. Over time the gap grows dramatically. For 1 lakh at 10 percent over 20 years: simple interest gives 2 lakh total while compound interest gives 6.73 lakh. The 4.73 lakh difference is the power of compounding."}},{"@type":"Question","name":"What is effective annual rate?","acceptedAnswer":{"@type":"Answer","text":"Effective Annual Rate or EAR is the actual annual return after accounting for compounding frequency. An 8 percent nominal rate compounded quarterly gives an EAR of 8.24 percent. Formula: EAR equals (1 plus r/n) raised to n minus 1. EAR is always higher than nominal rate when compounding is more than annual."}},{"@type":"Question","name":"Where is compound interest used in India?","acceptedAnswer":{"@type":"Answer","text":"Fixed deposits use quarterly compounding. PPF uses annual compounding. Mutual fund NAVs compound daily. Home and personal loans use monthly compounding on reducing balance. Savings accounts compound quarterly or daily. Post office schemes use annual or quarterly compounding depending on the scheme."}},{"@type":"Question","name":"What is the Rule of 72?","acceptedAnswer":{"@type":"Answer","text":"The Rule of 72 is a quick way to estimate how long it takes to double your money. Divide 72 by the annual interest rate to get approximate years. At 8 percent it takes about 9 years to double. At 12 percent about 6 years. At 15 percent about 4.8 years. This is an approximation that works well for rates between 6 and 15 percent."}},{"@type":"Question","name":"How to calculate compound interest for FD?","acceptedAnswer":{"@type":"Answer","text":"Most banks compound FD interest quarterly. Use A equals P times (1 plus r/4) raised to 4t. For a 5 lakh FD at 7 percent for 3 years: A equals 500000 times (1.0175) raised to 12 equals 615791. Interest earned is 115791. Compare this with simple interest of 105000 for the same period."}},{"@type":"Question","name":"Is compound interest taxable in India?","acceptedAnswer":{"@type":"Answer","text":"Interest earned from FDs, savings accounts, and bonds is fully taxable under Income from Other Sources at your slab rate. TDS is deducted at 10 percent if interest exceeds 40000 per year from a bank. PPF interest is completely tax-free. Mutual fund gains have separate LTCG and STCG tax rates depending on fund type and holding period."}},{"@type":"Question","name":"How does compounding work in mutual funds?","acceptedAnswer":{"@type":"Answer","text":"Mutual fund NAV compounds daily as returns are automatically reinvested. In growth option no dividends are paid and all gains compound within the fund. This is more efficient than FD compounding because the frequency is daily and returns are market-linked. Over 10 plus years equity mutual fund compounding significantly outperforms fixed-income compounding."}},{"@type":"Question","name":"What is continuous compounding?","acceptedAnswer":{"@type":"Answer","text":"Continuous compounding assumes interest is compounded infinitely often. Formula: A equals P times e raised to rt where e is 2.71828. For 1 lakh at 8 percent for 5 years: continuous gives 49182 interest versus 46933 for annual. The practical difference is small but it represents the theoretical maximum return from compounding."}},{"@type":"Question","name":"How much will 1 lakh grow in 10 years?","acceptedAnswer":{"@type":"Answer","text":"At 7 percent annual compounding: 1 lakh grows to 1.97 lakh in 10 years. At 10 percent: 2.59 lakh. At 12 percent: 3.11 lakh. At 15 percent: 4.05 lakh. The rate makes a massive difference over long periods. Even 2 to 3 percent higher return doubles the wealth difference over 20 to 30 year investment horizons."}},{"@type":"Question","name":"What is the power of compounding over 20 to 30 years?","acceptedAnswer":{"@type":"Answer","text":"Compounding growth is exponential. 1 lakh at 12 percent becomes 9.65 lakh in 20 years and 29.96 lakh in 30 years. The last 10 years add 20.31 lakh versus only 2.11 lakh in the first 10 years. This is why starting early even with small amounts is far more powerful than starting late with larger amounts."}}]}
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
/* ====== RESPONSIVE — TABLET (768-1024px) ====== */
@media(max-width:1024px){
.main-layout{padding:0 16px 32px}
.hero{padding:28px 16px 20px}
.tldr{margin-left:16px;margin-right:16px}
.calc-card{padding:28px}
.content-section{padding:28px}
}

/* ====== RESPONSIVE — SMALL TABLET / LARGE PHONE (481-767px) ====== */
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

/* ====== RESPONSIVE — MOBILE (max 480px) ====== */
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

/* ====== RESPONSIVE — VERY SMALL (max 360px) ====== */
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


/* Tool-specific: Compound Interest */
.ci-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.ci-box{border-radius:var(--radius);padding:20px;text-align:center}
.ci-box.maturity{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.ci-box.interest{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.ci-box.invested{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.ci-box .cb-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.ci-box .cb-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.ci-box .cb-sub{font-size:11px;opacity:.8;margin-top:2px}
.growth-bar{display:flex;height:36px;border-radius:10px;overflow:hidden;margin:16px 0}
.growth-bar .seg{display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;color:#fff;transition:width 0.5s}
.seg-pri{background:#4f46e5}
.seg-int{background:#059669}
.yr-table{max-height:400px;overflow-y:auto;margin-top:12px;border:1px solid var(--border);border-radius:var(--radius)}
.yr-table table{width:100%;border-collapse:collapse;font-size:13px}
.yr-table th{background:var(--primary-dark);color:#fff;padding:10px 12px;text-align:right;font-weight:600;font-size:11px;text-transform:uppercase;letter-spacing:.3px;position:sticky;top:0}
.yr-table th:first-child{text-align:center}
.yr-table td{padding:8px 12px;border-bottom:1px solid var(--border);text-align:right;font-family:var(--font-mono);font-size:12px}
.yr-table td:first-child{text-align:center;font-family:var(--font-body);font-weight:600}
.yr-table tr:nth-child(even){background:var(--surface)}
.slider-group{margin-bottom:20px}
.slider-group label{display:block;font-size:13px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:.5px}
.slider-row{display:flex;align-items:center;gap:12px}
.slider-row input[type="range"]{flex:1;-webkit-appearance:none;height:6px;border-radius:3px;background:var(--border);outline:none}
.slider-row input[type="range"]::-webkit-slider-thumb{-webkit-appearance:none;width:20px;height:20px;border-radius:50%;background:var(--primary);cursor:pointer;border:3px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,0.2)}
.slider-row .slider-val{min-width:120px;padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--card);text-align:right;outline:none;transition:border-color 0.2s}
.slider-row .slider-val:focus{border-color:var(--primary)}
@media(max-width:600px){.ci-hero{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#calculator">Calculator</a><a href="#how-to-use">How to Use</a><a href="#formula">Formulas</a><a href="#comparison">CI vs SI</a><a href="#tips">Tips</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>Compound Interest Calculator</nav> --}}
<header class="hero" id="calculator"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA & CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>Compound Interest Calculator — <span>CI with Year-Wise Growth</span></h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Calculate compound interest on any principal with monthly, quarterly, half-yearly, or annual compounding. Enter your amount, rate, tenure, and frequency to get total amount, interest earned, effective annual rate, and a year-wise growth table. Also shows simple vs compound interest comparison to visualise the power of compounding. Works for FDs, PPF, loans, and investments.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>Calculate Compound Interest</h2>
    <noscript><div class="noscript-box">This calculator requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="slider-group"><label>Principal Amount (&#8377;)</label><div class="slider-row"><input type="range" id="sliderP" min="1000" max="100000000" step="1000" value="1000000" oninput="syncS('p')"><input type="text" class="slider-val" id="valP" value="10,00,000" oninput="syncI('p')"></div></div>
    <div class="slider-group"><label>Annual Interest Rate (%)</label><div class="slider-row"><input type="range" id="sliderR" min="1" max="30" step="0.1" value="8" oninput="syncS('r')"><input type="text" class="slider-val" id="valR" value="8" style="min-width:80px" oninput="syncI('r')"></div></div>
    <div class="slider-group"><label>Time Period (Years)</label><div class="slider-row"><input type="range" id="sliderT" min="1" max="30" step="1" value="5" oninput="syncS('t')"><input type="text" class="slider-val" id="valT" value="5" style="min-width:80px" oninput="syncI('t')"></div></div>
    <div class="form-group"><label>Compounding Frequency</label><div class="toggle-group" id="compFreq">
        <button type="button" class="toggle-btn" data-val="12" onclick="setTg('compFreq',this)">Monthly</button>
        <button type="button" class="toggle-btn active" data-val="4" onclick="setTg('compFreq',this)">Quarterly</button>
        <button type="button" class="toggle-btn" data-val="2" onclick="setTg('compFreq',this)">Half-Yearly</button>
        <button type="button" class="toggle-btn" data-val="1" onclick="setTg('compFreq',this)">Yearly</button>
    </div></div>
    <button class="btn-calculate" onclick="calcCI()">Calculate Compound Interest</button>
    <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>
    <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use the Compound Interest Calculator</h2><p>This tool calculates compound interest using the standard formula used by banks, NBFCs, and financial institutions regulated by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a>.</p><h3>Step 1 — Enter Principal, Rate, and Period</h3><p>Set your investment amount, annual interest rate, and number of years using sliders or direct input.</p><h3>Step 2 — Select Compounding Frequency</h3><p>Choose Monthly (12x/year), Quarterly (4x — most FDs), Half-Yearly (2x), or Yearly (1x — PPF). Higher frequency = slightly more interest.</p><h3>Step 3 — View Results</h3><p>Get maturity amount, total interest, effective annual rate, visual principal-vs-interest bar, year-wise growth table, and simple vs compound interest comparison.</p><div class="callout"><p><strong>CA Tip:</strong> The Rule of 72 is a quick estimate: divide 72 by the interest rate to get doubling time. At 8% it takes ~9 years to double. At 12% about 6 years. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends understanding compounding for accurate financial planning and tax computation on accrued interest.</p></div></section>

<section class="content-section" id="formula"><h2>Compound Interest Formulas</h2><div class="formula-box"><span class="label">Compound Interest Formula:</span><br>A = P &times; (1 + r/n)<sup>n&times;t</sup><br>CI = A &minus; P<br><br><span class="label">Simple Interest Formula:</span><br>SI = P &times; r &times; t<br><br><span class="label">Effective Annual Rate:</span><br>EAR = (1 + r/n)<sup>n</sup> &minus; 1<br><br><span class="label">Where:</span> P = Principal, r = Annual rate (decimal), n = Compounding frequency/year, t = Years<br><br><span class="label">Example (&#8377;10L, 8%, 5 yrs, quarterly):</span><br>A = 10,00,000 &times; (1 + 0.08/4)<sup>4&times;5</sup> = 10,00,000 &times; 1.4859<br>A = <span class="label">&#8377;14,85,947</span> | CI = <span class="label">&#8377;4,85,947</span><br>EAR = (1.02)<sup>4</sup> &minus; 1 = <span class="label">8.24%</span></div></section>

<section class="content-section" id="comparison"><h2>Compound vs Simple Interest — The Power of Compounding</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Years</th><th>Simple Interest (8%)</th><th>Compound Interest (8% Quarterly)</th><th>Difference</th></tr></thead><tbody>
<tr><td>5</td><td>&#8377;4,00,000</td><td>&#8377;4,85,947</td><td>&#8377;85,947</td></tr>
<tr><td>10</td><td>&#8377;8,00,000</td><td>&#8377;12,20,794</td><td>&#8377;4,20,794</td></tr>
<tr><td>15</td><td>&#8377;12,00,000</td><td>&#8377;22,79,609</td><td>&#8377;10,79,609</td></tr>
<tr><td>20</td><td>&#8377;16,00,000</td><td>&#8377;38,50,727</td><td>&#8377;22,50,727</td></tr>
<tr><td>30</td><td>&#8377;24,00,000</td><td>&#8377;98,70,640</td><td>&#8377;74,70,640</td></tr>
</tbody></table></div><p>On &#8377;10 lakh at 8%, the difference between SI and CI grows from &#8377;86K in 5 years to a staggering &#8377;74.7 lakh in 30 years. This exponential growth is why starting early is the single most important financial decision.</p></section>

<section class="content-section" id="tips"><h2>Maximise the Power of Compounding</h2><ul><li><strong>Start early:</strong> 10 extra years of compounding can triple your wealth. A 25-year-old investing &#8377;5K/month will have far more at 60 than a 35-year-old investing &#8377;15K/month.</li><li><strong>Choose higher frequency:</strong> Monthly &gt; Quarterly &gt; Annual. The difference is small per year but adds up over decades.</li><li><strong>Reinvest returns:</strong> Choose growth/cumulative options over payout. Withdrawing interest breaks the compounding chain.</li><li><strong>Don&rsquo;t interrupt:</strong> Breaking FDs or exiting investments mid-term resets compounding. Let time work for you.</li><li><strong>Use tax-free instruments:</strong> PPF at 7.1% tax-free compounds better than an 8% FD taxed at 30% (effective ~5.6%).</li></ul><div class="callout green"><p><strong>Expert Tip:</strong> The &ldquo;real&rdquo; power of compounding shows after year 10. In the first decade, most of your corpus is your own money. After that, your returns start generating more returns than your contributions. Be patient. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20investment%20planning." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to our CA team &rarr;</a></p></div></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need financial planning help?</strong> Our CAs assist with investment planning, FD tax optimization, and long-term wealth creation strategies. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Compound%20Interest%20Calculator.%20I%20need%20financial%20planning%20help." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p></div>

<section class="content-section" id="faqs"><h2>Frequently Asked Questions — Compound Interest</h2><div id="faqList"></div></section>
</div>
<aside class="sidebar-col">
    <div class="cta-card"><h3>Need Financial Help?</h3><p>Our CAs help with FD tax planning, investment strategy & long-term wealth creation.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20financial%20planning%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div>
    <div class="sidebar-card"><h3>Services</h3><a href="/tax-planning-and-advisory" class="sidebar-link">Tax Planning <span class="arrow">&rarr;</span></a><a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a><a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>Related Tools</h3><a href="/tools/fd-calculator" class="sidebar-link">FD Calculator <span class="arrow">&rarr;</span></a><a href="/tools/sip-calculator" class="sidebar-link">SIP Calculator <span class="arrow">&rarr;</span></a><a href="/tools/ppf-calculator" class="sidebar-link">PPF Calculator <span class="arrow">&rarr;</span></a><a href="/tools/emi-calculator" class="sidebar-link">EMI Calculator <span class="arrow">&rarr;</span></a><a href="/tools/roi-calculator" class="sidebar-link">ROI Calculator <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div>
</aside>
</div>

<script>
function getVal(id){var g=document.getElementById(id);var a=g.querySelector('.toggle-btn.active');return a?a.getAttribute('data-val'):'';}
function setTg(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');}
function syncS(t){if(t==='p'){document.getElementById('valP').value=parseInt(document.getElementById('sliderP').value).toLocaleString('en-IN');}else if(t==='r'){document.getElementById('valR').value=document.getElementById('sliderR').value;}else{document.getElementById('valT').value=document.getElementById('sliderT').value;}}
function syncI(t){if(t==='p'){var v=parseInt(document.getElementById('valP').value.replace(/[^0-9]/g,''))||0;document.getElementById('sliderP').value=v;document.getElementById('valP').value=v?v.toLocaleString('en-IN'):'';}else if(t==='r'){document.getElementById('sliderR').value=parseFloat(document.getElementById('valR').value)||0;}else{document.getElementById('sliderT').value=parseInt(document.getElementById('valT').value)||0;}}
function fmt(n){return'\u20B9'+Math.round(n).toLocaleString('en-IN');}
function fmtL(n){if(n>=10000000)return'\u20B9'+(n/10000000).toFixed(2)+' Cr';if(n>=100000)return'\u20B9'+(n/100000).toFixed(2)+' L';return fmt(n);}
function resetForm(){document.getElementById('sliderP').value=1000000;document.getElementById('valP').value='10,00,000';document.getElementById('sliderR').value=8;document.getElementById('valR').value='8';document.getElementById('sliderT').value=5;document.getElementById('valT').value='5';document.getElementById('compFreq').querySelectorAll('.toggle-btn').forEach(function(b,i){b.classList.toggle('active',i===1);});document.getElementById('resPanel').classList.remove('visible');}

function calcCI(){
var P=parseInt(document.getElementById('valP').value.replace(/[^0-9]/g,''))||0;
var rate=parseFloat(document.getElementById('valR').value)||0;
var t=parseInt(document.getElementById('valT').value)||0;
var n=parseInt(getVal('compFreq'))||4;
if(!P||!rate||!t){alert('Please enter principal, rate, and time period.');return;}
var r=rate/100;

var A=Math.round(P*Math.pow(1+r/n,n*t));
var CI=A-P;
var SI=Math.round(P*r*t);
var EAR=((Math.pow(1+r/n,n)-1)*100);
var intPct=A>0?Math.round(CI/A*100):0;
var priPct=100-intPct;
var freqLabel=n===12?'Monthly':n===4?'Quarterly':n===2?'Half-Yearly':'Yearly';
var doubleYrs=(72/rate).toFixed(1);

var h='';
h+='<div class="ci-hero"><div class="ci-box maturity"><div class="cb-label">Maturity Amount</div><div class="cb-value">'+fmtL(A)+'</div><div class="cb-sub">After '+t+' years</div></div>';
h+='<div class="ci-box interest"><div class="cb-label">Compound Interest</div><div class="cb-value">'+fmtL(CI)+'</div><div class="cb-sub">'+intPct+'% of maturity</div></div>';
h+='<div class="ci-box invested"><div class="cb-label">Principal</div><div class="cb-value">'+fmtL(P)+'</div><div class="cb-sub">'+priPct+'% of maturity</div></div></div>';

h+='<div class="growth-bar"><div class="seg seg-pri" style="width:'+priPct+'%">Principal '+priPct+'%</div><div class="seg seg-int" style="width:'+intPct+'%">Interest '+intPct+'%</div></div>';

// Summary
h+='<div class="res-card"><div class="res-card-hd"><h3>Interest Summary</h3><span class="res-badge info">'+freqLabel+'</span></div><div class="res-card-bd"><table class="cmp-table">';
h+='<tr><td>Principal</td><td><strong>'+fmt(P)+'</strong></td></tr>';
h+='<tr><td>Rate</td><td><strong>'+rate+'% p.a.</strong></td></tr>';
h+='<tr><td>Period</td><td><strong>'+t+' years</strong></td></tr>';
h+='<tr><td>Compounding</td><td><strong>'+freqLabel+' ('+n+'x/year)</strong></td></tr>';
h+='<tr><td>Effective Annual Rate (EAR)</td><td><strong>'+EAR.toFixed(2)+'%</strong></td></tr>';
h+='<tr><td>Compound Interest</td><td class="hi">'+fmtL(CI)+'</td></tr>';
h+='<tr><td>Simple Interest (comparison)</td><td>'+fmt(SI)+'</td></tr>';
h+='<tr><td>Extra from Compounding</td><td class="hi">'+fmt(CI-SI)+'</td></tr>';
h+='<tr style="background:var(--surface-alt)"><td><strong>Maturity Amount</strong></td><td style="font-size:18px;color:var(--primary)"><strong>'+fmtL(A)+'</strong></td></tr>';
h+='<tr><td>Wealth Multiplier</td><td><strong>'+(A/P).toFixed(2)+'x</strong></td></tr>';
h+='<tr><td>Doubling Time (Rule of 72)</td><td><strong>~'+doubleYrs+' years</strong></td></tr>';
h+='</table></div></div>';

// Year-wise table
h+='<div class="res-card"><div class="res-card-hd"><h3>Year-Wise Growth</h3><span class="res-badge teal">Schedule</span></div><div class="res-card-bd"><div class="yr-table"><table><thead><tr><th>Year</th><th>Opening</th><th>Interest</th><th>Closing</th><th>CI vs SI Diff</th></tr></thead><tbody>';
var bal=P;
for(var y=1;y<=t;y++){
var closing=Math.round(P*Math.pow(1+r/n,n*y));
var yrInt=closing-bal;
var siTotal=Math.round(P*r*y);
var diff=closing-P-siTotal;
h+='<tr><td>'+y+'</td><td>'+fmt(bal)+'</td><td class="hi">'+fmt(yrInt)+'</td><td style="color:var(--primary);font-weight:700">'+fmtL(closing)+'</td><td>+'+fmt(diff)+'</td></tr>';
bal=closing;
}
h+='</tbody></table></div></div></div>';

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20Compound%20Interest%20Calculator.%20I%20need%20help%20with%20investment%20planning." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/fd-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg> FD Calculator</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What is compound interest?",a:"Interest on both principal AND accumulated interest. Unlike simple interest (only on principal), CI grows exponentially. This \u201Cinterest on interest\u201D is the core principle of wealth creation through long-term investing."},
{q:"What is the CI formula?",a:"A = P \u00D7 (1 + r/n)^(n\u00D7t). P = principal, r = annual rate (decimal), n = compounding frequency per year, t = years. CI = A \u2212 P. Each compounding period adds interest to the growing balance."},
{q:"How does compounding frequency affect returns?",a:"\u20B910L at 8% for 5 years: annual CI = \u20B94,69,328. Quarterly = \u20B94,85,947. Monthly = \u20B94,89,846. Difference grows with higher rates and longer periods. Most FDs use quarterly."},
{q:"Simple vs compound interest?",a:"SI only on original principal. CI on principal + accumulated interest. \u20B910L at 10% over 20 years: SI = \u20B920L total. CI = \u20B967.3L total. The \u20B947.3L gap is the power of compounding."},
{q:"What is Effective Annual Rate?",a:"EAR = actual annual return after compounding. 8% quarterly = 8.24% EAR. Formula: (1+r/n)^n \u2212 1. EAR > nominal rate when compounding > annual. Use EAR to compare investments."},
{q:"Where is CI used in India?",a:"FDs: quarterly. PPF: annual. Mutual fund NAV: daily. Loans: monthly reducing balance. Savings accounts: quarterly/daily. Post office schemes: annual/quarterly per scheme."},
{q:"What is the Rule of 72?",a:"Divide 72 by rate to get doubling time. At 8%: ~9 years. At 12%: ~6 years. At 15%: ~4.8 years. Quick approximation for 6\u201315% rates. Simple but powerful planning tool."},
{q:"How to calculate CI on FD?",a:"Most banks: quarterly. A = P \u00D7 (1+r/4)^(4t). \u20B95L FD at 7% for 3 years: A = \u20B96,15,791. CI = \u20B91,15,791 vs SI of \u20B91,05,000. Quarterly adds ~\u20B910,791 extra."},
{q:"Is compound interest taxable?",a:"FD/savings interest: taxable at slab rate. TDS 10% if > \u20B940K/bank/year. PPF interest: tax-free. MF gains: separate LTCG/STCG rates. Include accrued interest in ITR."},
{q:"How does compounding work in mutual funds?",a:"MF NAV compounds daily. Growth option reinvests all gains within fund. More efficient than FD quarterly compounding. Over 10+ years, equity MF compounding significantly outperforms fixed-income."},
{q:"What is continuous compounding?",a:"Interest compounded infinitely. A = P \u00D7 e^(rt). \u20B910L at 8% for 5 yrs: continuous = \u20B94,91,825 interest vs annual \u20B94,69,328. Small practical difference but theoretical maximum."},
{q:"How much will \u20B91L grow in 10 years?",a:"At 7%: \u20B91.97L. At 10%: \u20B92.59L. At 12%: \u20B93.11L. At 15%: \u20B94.05L. Rate makes massive difference long-term. Even 2\u20133% higher return doubles the wealth gap over 20\u201330 years."},
{q:"Power of compounding over 20\u201330 years?",a:"\u20B91L at 12%: \u20B99.65L in 20 years, \u20B929.96L in 30 years. Last 10 years add \u20B920.31L vs only \u20B92.11L in first 10. Start early \u2014 time is the biggest multiplier, not amount."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcCI();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection
