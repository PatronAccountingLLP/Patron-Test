@extends('layouts.app')
@section('meta')
    <title>SIP Calculator | Mutual Fund SIP Returns &amp; Step-Up</title>
    <meta name="description" content="Free SIP calculator: estimate mutual fund SIP returns and maturity value with annual step-up, year-wise growth table and invested-vs-returns breakup. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/sip-calculator">
    <meta property="og:title" content="SIP Calculator &mdash; Free Mutual Fund SIP Returns 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate mutual fund SIP returns. Step-up SIP, year-wise growth, invested vs returns breakup.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/sip-calculator">
    <meta property="og:image" content="/tools/og-sip-calculator.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SIP Calculator &mdash; Free Mutual Fund SIP Returns 2026">
    <meta name="twitter:description" content="Calculate SIP returns for mutual funds. Free tool with step-up option.">
    <meta name="twitter:image" content="/tools/og-sip-calculator.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"SIP Calculator - Mutual Fund SIP Returns Calculator India 2026","description":"Free online SIP calculator to estimate mutual fund returns through Systematic Investment Plan. Enter monthly SIP amount, expected return rate, and investment period to get total invested amount, estimated returns, and maturity value with year-wise growth table and optional annual step-up.","url":"/tools/sip-calculator","applicationCategory":"FinanceApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"SIP Calculator","item":"/tools/sip-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is SIP and how does it work?","acceptedAnswer":{"@type":"Answer","text":"SIP or Systematic Investment Plan is a method of investing a fixed amount regularly in mutual funds, typically monthly. Each SIP instalment buys units at the current NAV. Over time, this averages out the purchase cost through rupee cost averaging and benefits from compounding. SIP can be started with as little as 500 rupees per month."}},{"@type":"Question","name":"How is SIP return calculated?","acceptedAnswer":{"@type":"Answer","text":"SIP returns are calculated using the compound interest formula for each monthly instalment. Each SIP is treated as a separate investment that grows at the expected annual rate. The future value of all instalments is summed to get the maturity value. The formula accounts for monthly compounding and the reducing time horizon for each instalment."}},{"@type":"Question","name":"What is step-up SIP?","acceptedAnswer":{"@type":"Answer","text":"Step-up SIP increases the monthly investment amount by a fixed percentage each year, typically 5 to 15 percent. For example, starting with 10000 monthly and 10 percent step-up means year 2 SIP becomes 11000 and year 3 becomes 12100. This aligns investments with income growth and significantly boosts the final corpus due to compounding."}},{"@type":"Question","name":"What is the difference between SIP and lump sum investing?","acceptedAnswer":{"@type":"Answer","text":"SIP invests a fixed amount regularly over time, reducing market timing risk through rupee cost averaging. Lump sum invests the entire amount at once, which can yield higher returns in a rising market but carries higher risk. SIP is better for salaried investors with regular income while lump sum suits windfalls or bonus investments."}},{"@type":"Question","name":"What is a realistic expected return for SIP?","acceptedAnswer":{"@type":"Answer","text":"Historically Indian equity mutual funds have delivered 12 to 15 percent annualized returns over 10 plus year periods. Large cap funds average 10 to 13 percent, mid cap 13 to 16 percent, and small cap 14 to 18 percent. Debt funds return 6 to 8 percent. These are historical averages and actual returns may vary. Past performance does not guarantee future results."}},{"@type":"Question","name":"Is SIP tax-free?","acceptedAnswer":{"@type":"Answer","text":"SIP investments in ELSS mutual funds qualify for Section 80C deduction up to 1.5 lakh under old tax regime with a 3 year lock-in. Equity fund gains above 1.25 lakh per year attract 12.5 percent long-term capital gains tax after 1 year holding. Short-term gains within 1 year are taxed at 20 percent. Debt fund gains are taxed at slab rates."}},{"@type":"Question","name":"Can I stop SIP anytime?","acceptedAnswer":{"@type":"Answer","text":"Yes, SIP can be stopped anytime by submitting a cancellation request to the AMC or through your investment platform. There is no penalty for stopping SIP except in ELSS funds during the 3 year lock-in period. Existing units remain invested and continue to grow. You can also pause SIP temporarily and resume later."}},{"@type":"Question","name":"What is the power of compounding in SIP?","acceptedAnswer":{"@type":"Answer","text":"Compounding means earning returns on returns. In SIP each monthly investment earns returns and those returns also earn returns over time. For example 10000 monthly SIP at 12 percent for 20 years invests 24 lakh but grows to approximately 1 crore. The 76 lakh extra comes from compounding. Starting early maximizes this effect dramatically."}},{"@type":"Question","name":"How much should I invest in SIP monthly?","acceptedAnswer":{"@type":"Answer","text":"A common guideline is to invest 20 to 30 percent of monthly income in SIP. Use the goal-based approach: determine your target corpus and years, then work backward to find the monthly SIP needed. For example, to build 1 crore in 15 years at 12 percent returns you need approximately 10000 monthly SIP. Start with what is comfortable and increase annually."}},{"@type":"Question","name":"What is rupee cost averaging in SIP?","acceptedAnswer":{"@type":"Answer","text":"Rupee cost averaging means buying more units when markets are low and fewer when markets are high, since SIP invests a fixed amount each month regardless of market conditions. Over time this averages out the cost per unit reducing the impact of market volatility. This makes SIP less risky than lump sum investing in volatile markets."}},{"@type":"Question","name":"Which mutual fund is best for SIP?","acceptedAnswer":{"@type":"Answer","text":"The best fund depends on your goals and risk tolerance. For long-term wealth creation, diversified equity funds like large cap index funds or flexi cap funds are popular. For tax saving, ELSS funds with 3 year lock-in. For conservative investors, balanced advantage or hybrid funds. Always check the fund track record, expense ratio, and fund manager history."}},{"@type":"Question","name":"How does SIP perform during market crashes?","acceptedAnswer":{"@type":"Answer","text":"SIP actually benefits from market crashes because you buy more units at lower NAV. When markets recover those additional units generate higher returns. Historical data shows that investors who continued SIP during the 2008 and 2020 crashes earned significantly higher returns than those who stopped. Consistency is key to SIP success."}},{"@type":"Question","name":"Can SIP make me a crorepati?","acceptedAnswer":{"@type":"Answer","text":"Yes with discipline and time. Investing 10000 monthly at 12 percent for 20 years gives approximately 1 crore. With 10 percent annual step-up the same period gives about 1.9 crore. Starting at 15000 monthly at 12 percent for 25 years gives approximately 3.2 crore. The key factors are starting early, investing consistently, and increasing SIP annually."}}]}
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


/* Tool-specific: SIP Calculator */
.sip-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.sip-box{border-radius:var(--radius);padding:20px;text-align:center}
.sip-box.invested{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.sip-box.returns{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.sip-box.total{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.sip-box .sb-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.sip-box .sb-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.sip-box .sb-sub{font-size:11px;opacity:.8;margin-top:2px}
.growth-bar{display:flex;height:36px;border-radius:10px;overflow:hidden;margin:16px 0}
.growth-bar .seg{display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;color:#fff;transition:width 0.5s}
.seg-inv{background:var(--primary)}
.seg-ret{background:#059669}
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
.slider-row .slider-val{min-width:100px;padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--card);text-align:right;outline:none;transition:border-color 0.2s}
.slider-row .slider-val:focus{border-color:var(--primary)}
@media(max-width:600px){.sip-hero{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">SIP Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#formula">SIP Formula</a>
        <a href="#benefits">Benefits</a>
        <a href="#tips">Tips</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

{{-- <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>&rsaquo;</span>
    <a href="/tools/">Free Tools</a><span>&rsaquo;</span>
    SIP Calculator
</nav> --}}

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>SIP Calculator &mdash; <span>Mutual Fund Returns</span> with Step-Up Option</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Calculate how much your monthly SIP investment will grow over time. Enter your SIP amount, expected annual return, and investment period. Optionally add an annual step-up percentage to increase SIP each year. Get total invested amount, estimated returns, maturity value, invested-vs-returns visual breakup, and a year-wise growth table showing the power of compounding.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate SIP Returns</h2>
            <noscript><div class="noscript-box">This calculator requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a> for help.</div></noscript>

            <div class="slider-group">
                <label>Monthly SIP Amount (&#8377;)</label>
                <div class="slider-row">
                    <input type="range" id="sliderAmt" min="500" max="500000" step="500" value="10000" oninput="syncS('amt')">
                    <input type="text" class="slider-val" id="valAmt" value="10,000" oninput="syncI('amt')">
                </div>
            </div>

            <div class="slider-group">
                <label>Expected Annual Return (%)</label>
                <div class="slider-row">
                    <input type="range" id="sliderRate" min="1" max="30" step="0.5" value="12" oninput="syncS('rate')">
                    <input type="text" class="slider-val" id="valRate" value="12" style="min-width:70px" oninput="syncI('rate')">
                </div>
            </div>

            <div class="slider-group">
                <label>Investment Period (Years)</label>
                <div class="slider-row">
                    <input type="range" id="sliderYears" min="1" max="40" step="1" value="15" oninput="syncS('years')">
                    <input type="text" class="slider-val" id="valYears" value="15" style="min-width:70px" oninput="syncI('years')">
                </div>
            </div>

            <div class="slider-group">
                <label>Annual Step-Up (%) &mdash; Optional</label>
                <div class="slider-row">
                    <input type="range" id="sliderStep" min="0" max="25" step="1" value="0" oninput="syncS('step')">
                    <input type="text" class="slider-val" id="valStep" value="0" style="min-width:70px" oninput="syncI('step')">
                </div>
                <div style="font-size:12px;color:var(--text-muted);margin-top:4px">Increase SIP by this % every year (e.g., 10% step-up on &#8377;10K = &#8377;11K in year 2)</div>
            </div>

            <button class="btn-calculate" onclick="calcSIP()">Calculate SIP Returns</button>
            <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>

            <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the SIP Calculator</h2>
            <p>This tool estimates the future value of your Systematic Investment Plan (SIP) in mutual funds based on the power of compounding. It is regulated by <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> and distributed through AMFI-registered distributors.</p>
            <h3>Step 1 &mdash; Set Monthly SIP Amount</h3>
            <p>Enter the amount you plan to invest every month. You can start with as little as &#8377;500. A typical SIP for wealth creation ranges from &#8377;5,000 to &#8377;50,000 per month.</p>
            <h3>Step 2 &mdash; Set Expected Return Rate</h3>
            <p>Equity mutual funds have historically returned 12&ndash;15% annually over 10+ years. Large cap: 10&ndash;13%, mid cap: 13&ndash;16%, small cap: 14&ndash;18%. Debt funds: 6&ndash;8%. Use conservative estimates for planning.</p>
            <h3>Step 3 &mdash; Set Period and Step-Up</h3>
            <p>Choose how many years you plan to invest. Longer periods dramatically increase returns due to compounding. Optionally set an annual step-up (5&ndash;15%) to increase SIP each year with income growth.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> ELSS mutual fund SIPs qualify for <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Section 80C</a> deduction up to &#8377;1.5 lakh under the old tax regime with just a 3-year lock-in &mdash; the shortest among all 80C instruments. This makes ELSS SIP a dual-benefit investment: tax saving + wealth creation.</p>
            </div>
        </section>

        <section class="content-section" id="formula">
            <h2>SIP Return Calculation Formula</h2>
            <div class="formula-box">
                <span class="label">SIP Future Value Formula:</span><br>
                FV = P &times; [((1+r)<sup>n</sup> &minus; 1) &divide; r] &times; (1+r)<br><br>
                <span class="label">Where:</span><br>
                P = Monthly SIP amount<br>
                r = Monthly return rate (annual rate &divide; 12 &divide; 100)<br>
                n = Total number of months<br><br>
                <span class="label">Example (&#8377;10K/month, 12%, 15 years):</span><br>
                r = 12 &divide; 12 &divide; 100 = 0.01<br>
                n = 15 &times; 12 = 180 months<br>
                FV = 10,000 &times; [((1.01)<sup>180</sup> &minus; 1) &divide; 0.01] &times; 1.01<br>
                FV = <span class="label">&#8377;50.46 Lakh</span> (invested &#8377;18L, returns &#8377;32.46L)
            </div>
            <p>With a 10% annual step-up, the same scenario gives ~&#8377;79.4 lakh &mdash; nearly 58% more corpus. This demonstrates the enormous impact of increasing SIP annually even by a small percentage.</p>
        </section>

        <section class="content-section" id="benefits">
            <h2>Benefits of SIP Investing</h2>
            <ul>
                <li><strong>Rupee cost averaging:</strong> Buy more units when markets are low, fewer when high &mdash; reduces average cost</li>
                <li><strong>Power of compounding:</strong> Returns earn returns. &#8377;10K/month for 20 years at 12% grows to &#8377;1 crore (invested only &#8377;24L)</li>
                <li><strong>Disciplined investing:</strong> Auto-debit ensures regular investing without market timing stress</li>
                <li><strong>Flexibility:</strong> Start with &#8377;500, increase anytime, pause or stop without penalty (except ELSS lock-in)</li>
                <li><strong>Tax efficiency:</strong> ELSS SIP gets 80C benefit. Equity gains above &#8377;1.25L/year taxed at 12.5% LTCG after 1 year</li>
            </ul>
            <h3>SIP Taxation Rules (FY 2025-26)</h3>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Fund Type</th><th>Holding Period</th><th>LTCG Tax</th><th>STCG Tax</th><th>80C Benefit</th></tr></thead>
                <tbody>
                    <tr><td>Equity / ELSS</td><td>&gt; 1 year</td><td>12.5% above &#8377;1.25L</td><td>20%</td><td>ELSS: Yes (&#8377;1.5L)</td></tr>
                    <tr><td>Debt Funds</td><td>&gt; 2 years</td><td>At slab rate</td><td>At slab rate</td><td>No</td></tr>
                    <tr><td>Hybrid Funds</td><td>&gt; 1 year (equity &gt;65%)</td><td>12.5% above &#8377;1.25L</td><td>20%</td><td>No</td></tr>
                </tbody>
            </table>
            </div>
        </section>

        <section class="content-section" id="tips">
            <h2>SIP Investment Tips from Our CAs</h2>
            <ul>
                <li><strong>Start early:</strong> 10 extra years of compounding can double or triple your corpus. A 25-year-old investing &#8377;5K/month beats a 35-year-old investing &#8377;15K/month by retirement.</li>
                <li><strong>Use step-up SIP:</strong> Increase SIP by 10% every year. This alone can boost your final corpus by 50&ndash;80% over a plain SIP.</li>
                <li><strong>Don&rsquo;t stop during crashes:</strong> SIP thrives in volatility. Investors who continued through 2008 and 2020 crashes earned significantly higher returns.</li>
                <li><strong>Diversify:</strong> Split SIP across large cap (stability), mid cap (growth), and debt (safety) based on your risk profile.</li>
                <li><strong>Review annually:</strong> Check fund performance vs benchmark. Switch underperformers after 2&ndash;3 years of consistent underperformance.</li>
            </ul>
            <div class="callout green">
                <p><strong>Expert Tip:</strong> Use the &ldquo;15-15-15 rule&rdquo; &mdash; invest &#8377;15,000/month for 15 years at 15% return = approximately &#8377;1 crore. With 10% step-up, you reach &#8377;1.8 crore. Start today. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20mutual%20fund%20SIP%20planning%20and%20tax%20optimization." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to our CA team &rarr;</a></p>
            </div>
        </section>

        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need investment planning help?</strong> Our CAs assist with SIP planning, ELSS tax savings, capital gains tax optimization, and ITR filing for mutual fund investors. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20SIP%20Calculator.%20I%20need%20investment%20planning%20help." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions &mdash; SIP &amp; Mutual Funds</h2>
            <div id="faqList"></div>
        </section>
    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Need Investment Help?</h3>
            <p>Our CAs help with SIP planning, ELSS tax savings, capital gains &amp; ITR filing for MF investors.</p>
            <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20SIP%20and%20investment%20planning%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>Services</h3>
            <a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a>
            <a href="/tax-planning-and-advisory" class="sidebar-link">Tax Planning <span class="arrow">&rarr;</span></a>
            <a href="/capital-gains-tax-advisory" class="sidebar-link">Capital Gains Tax <span class="arrow">&rarr;</span></a>
            <a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/emi-calculator" class="sidebar-link">EMI Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/fd-calculator" class="sidebar-link">FD Calculator <span class="arrow">&rarr;</span></a>
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
function syncS(t){
if(t==='amt'){var v=parseInt(document.getElementById('sliderAmt').value);document.getElementById('valAmt').value=v.toLocaleString('en-IN');}
else if(t==='rate'){document.getElementById('valRate').value=document.getElementById('sliderRate').value;}
else if(t==='years'){document.getElementById('valYears').value=document.getElementById('sliderYears').value;}
else{document.getElementById('valStep').value=document.getElementById('sliderStep').value;}
}
function syncI(t){
if(t==='amt'){var v=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;document.getElementById('sliderAmt').value=v;document.getElementById('valAmt').value=v?v.toLocaleString('en-IN'):'';}
else if(t==='rate'){var r=parseFloat(document.getElementById('valRate').value)||0;document.getElementById('sliderRate').value=r;}
else if(t==='years'){var y=parseInt(document.getElementById('valYears').value)||0;document.getElementById('sliderYears').value=y;}
else{var s=parseInt(document.getElementById('valStep').value)||0;document.getElementById('sliderStep').value=s;}
}
function fmt(n){return'\u20B9'+Math.round(n).toLocaleString('en-IN');}
function fmtL(n){if(n>=10000000)return'\u20B9'+(n/10000000).toFixed(2)+' Cr';if(n>=100000)return'\u20B9'+(n/100000).toFixed(2)+' L';return fmt(n);}

function resetForm(){
document.getElementById('sliderAmt').value=10000;document.getElementById('valAmt').value='10,000';
document.getElementById('sliderRate').value=12;document.getElementById('valRate').value='12';
document.getElementById('sliderYears').value=15;document.getElementById('valYears').value='15';
document.getElementById('sliderStep').value=0;document.getElementById('valStep').value='0';
document.getElementById('resPanel').classList.remove('visible');
}

function calcSIP(){
var monthly=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;
var annRate=parseFloat(document.getElementById('valRate').value)||0;
var years=parseInt(document.getElementById('valYears').value)||0;
var stepUp=parseInt(document.getElementById('valStep').value)||0;
if(!monthly||!annRate||!years){alert('Please enter SIP amount, return rate, and period.');return;}
var r=annRate/12/100;

// Year-wise calculation with step-up
var totalInvested=0,totalValue=0;
var yearData=[];
var currentSIP=monthly;

for(var y=1;y<=years;y++){
var yrInv=0,yrVal=0;
for(var m=0;m<12;m++){
totalInvested+=currentSIP;
yrInv+=currentSIP;
}
// Calculate FV of this year's SIPs at end of all years
// Each month's SIP grows for remaining months
var monthsLeft=(years-y)*12;
for(var m=0;m<12;m++){
var monthsToGrow=monthsLeft+(12-m);
totalValue+=currentSIP*Math.pow(1+r,monthsToGrow);
}
yearData.push({year:y,sip:currentSIP,invested:yrInv,cumInvested:totalInvested,value:0});
if(stepUp>0)currentSIP=Math.round(currentSIP*(1+stepUp/100));
}

// Recalculate cumulative value per year properly
totalValue=0;totalInvested=0;currentSIP=monthly;
for(var y=1;y<=years;y++){
for(var m=0;m<12;m++){
totalInvested+=currentSIP;
var monthsToGrow=(years*12)-((y-1)*12+m);
totalValue+=currentSIP*Math.pow(1+r,monthsToGrow);
}
yearData[y-1].cumInvested=totalInvested;
yearData[y-1].value=Math.round(totalValue);
if(stepUp>0)currentSIP=Math.round(currentSIP*(1+stepUp/100));
}

var maturity=Math.round(totalValue);
var returns=maturity-totalInvested;
var retPct=totalInvested>0?Math.round(returns/maturity*100):0;
var invPct=100-retPct;

var h='';
// Hero boxes
h+='<div class="sip-hero">';
h+='<div class="sip-box invested"><div class="sb-label">Total Invested</div><div class="sb-value">'+fmtL(totalInvested)+'</div><div class="sb-sub">'+invPct+'% of corpus</div></div>';
h+='<div class="sip-box returns"><div class="sb-label">Estimated Returns</div><div class="sb-value">'+fmtL(returns)+'</div><div class="sb-sub">'+retPct+'% of corpus</div></div>';
h+='<div class="sip-box total"><div class="sb-label">Maturity Value</div><div class="sb-value">'+fmtL(maturity)+'</div><div class="sb-sub">After '+years+' years</div></div>';
h+='</div>';

// Visual bar
h+='<div class="growth-bar"><div class="seg seg-inv" style="width:'+invPct+'%">Invested '+invPct+'%</div><div class="seg seg-ret" style="width:'+retPct+'%">Returns '+retPct+'%</div></div>';

// Wealth multiplier
var multiplier=(totalInvested>0?(maturity/totalInvested).toFixed(1):'0');
h+='<div class="callout green" style="margin-top:0"><p style="color:#166534"><strong>Wealth Multiplier: '+multiplier+'x</strong> &mdash; Your '+fmtL(totalInvested)+' investment grew to '+fmtL(maturity)+' through the power of compounding'+(stepUp>0?' and '+stepUp+'% annual step-up':'')+'. '+(returns>totalInvested?'Your returns exceed your investment!':'')+'</p></div>';

// Summary card
h+='<div class="res-card"><div class="res-card-hd"><h3>SIP Summary</h3><span class="res-badge info">Details</span></div><div class="res-card-bd"><table class="cmp-table">';
h+='<tr><td>Starting Monthly SIP</td><td><strong>'+fmt(monthly)+'</strong></td></tr>';
if(stepUp>0)h+='<tr><td>Annual Step-Up</td><td><strong>'+stepUp+'% per year</strong></td></tr>';
if(stepUp>0)h+='<tr><td>Final Year Monthly SIP</td><td><strong>'+fmt(yearData[years-1].sip)+'</strong></td></tr>';
h+='<tr><td>Expected Return Rate</td><td><strong>'+annRate+'% p.a.</strong></td></tr>';
h+='<tr><td>Investment Period</td><td><strong>'+years+' years</strong></td></tr>';
h+='<tr><td>Total Amount Invested</td><td>'+fmt(totalInvested)+'</td></tr>';
h+='<tr><td>Estimated Returns</td><td class="hi">'+fmt(returns)+'</td></tr>';
h+='<tr><td>Maturity Value</td><td style="font-size:18px;color:var(--primary)"><strong>'+fmtL(maturity)+'</strong></td></tr>';
h+='</table></div></div>';

// Year-wise table
h+='<div class="res-card"><div class="res-card-hd"><h3>Year-Wise Growth</h3><span class="res-badge teal">Schedule</span></div><div class="res-card-bd">';
h+='<div class="yr-table"><table><thead><tr><th>Year</th><th>Monthly SIP</th><th>Yearly Investment</th><th>Cumulative Invested</th><th>Corpus Value</th></tr></thead><tbody>';
for(var y=0;y<years;y++){
var d=yearData[y];
h+='<tr><td>'+d.year+'</td><td>'+fmt(d.sip)+'</td><td>'+fmt(d.invested)+'</td><td>'+fmt(d.cumInvested)+'</td><td style="color:var(--primary);font-weight:700">'+fmtL(d.value)+'</td></tr>';
}
h+='</tbody></table></div></div></div>';

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20SIP%20Calculator.%20I%20need%20help%20with%20mutual%20fund%20planning.%20Please%20connect%20me%20with%20a%20CA." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/emi-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg> EMI Calculator</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What is SIP and how does it work?",a:"SIP (Systematic Investment Plan) invests a fixed amount monthly in mutual funds. Each SIP buys units at current NAV. Over time, rupee cost averaging reduces risk and compounding grows wealth. Start with as little as \u20B9500/month."},
{q:"How is SIP return calculated?",a:"Each monthly SIP is treated as separate investment growing at the expected rate. FV = P \u00D7 [((1+r)^n \u2212 1) / r] \u00D7 (1+r). All future values are summed for total maturity. Accounts for monthly compounding."},
{q:"What is step-up SIP?",a:"Increases SIP by a fixed % each year (e.g., 10% step-up on \u20B910K = \u20B911K in year 2, \u20B912.1K in year 3). Aligns with income growth. Can boost final corpus by 50\u201380% over plain SIP."},
{q:"SIP vs lump sum \u2014 which is better?",a:"SIP reduces market timing risk via rupee cost averaging. Lump sum can earn more in rising markets but carries higher risk. SIP suits salaried investors; lump sum suits windfalls. Both benefit from compounding."},
{q:"What is a realistic SIP return?",a:"Historically: large cap 10\u201313%, mid cap 13\u201316%, small cap 14\u201318% over 10+ years. Debt funds 6\u20138%. Use 12% as moderate equity assumption. Past performance doesn\u2019t guarantee future results."},
{q:"Is SIP tax-free?",a:"ELSS SIP gets 80C deduction up to \u20B91.5L (3-year lock-in). Equity LTCG above \u20B91.25L/year taxed at 12.5% after 1 year. STCG at 20%. Debt fund gains taxed at slab rates."},
{q:"Can I stop SIP anytime?",a:"Yes. No penalty except ELSS during 3-year lock-in. Existing units remain invested. Can also pause and resume. Auto-debit mandate can be cancelled through bank or platform."},
{q:"What is the power of compounding?",a:"\u20B910K/month at 12% for 20 years: invested \u20B924L, grows to ~\u20B91 crore. The \u20B976L extra = compounding. Returns earn returns. Starting early maximizes this effect dramatically."},
{q:"How much should I invest in SIP?",a:"Guideline: 20\u201330% of monthly income. Goal-based: for \u20B91 crore in 15 years at 12% you need ~\u20B910K/month. Start comfortable, step-up annually. Consistency matters more than amount."},
{q:"What is rupee cost averaging?",a:"Fixed SIP buys more units when NAV is low, fewer when high. Averages cost over time, reducing volatility impact. Makes SIP safer than lump sum in choppy markets."},
{q:"Which mutual fund is best for SIP?",a:"Depends on goals: large cap index funds for stability, flexi cap for growth, ELSS for tax saving, balanced advantage for conservative. Check fund track record, expense ratio, AUM, and fund manager."},
{q:"How does SIP perform in crashes?",a:"SIP benefits from crashes \u2014 you buy more units at lower NAV. When markets recover, those extra units generate higher returns. 2008 and 2020 crash survivors earned significantly higher returns. Don\u2019t stop SIP in downturns."},
{q:"Can SIP make me a crorepati?",a:"\u20B910K/month at 12% for 20 years = ~\u20B91 crore. With 10% step-up: ~\u20B91.9 crore. \u20B915K at 12% for 25 years = ~\u20B93.2 crore. Start early, be consistent, step-up annually. The math works."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcSIP();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection