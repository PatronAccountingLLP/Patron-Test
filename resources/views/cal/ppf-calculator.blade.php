@extends('layouts.app')
@section('meta')
    <title>PPF Calculator | Maturity, Interest &amp; 80C Benefit 2026</title>
    <meta name="description" content="PPF Calculator: estimate Public Provident Fund maturity value and interest at 7.1% with year-wise growth. EEE tax-free, Section 80C benefit. Calculate free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/ppf-calculator">
    <meta property="og:title" content="PPF Calculator &mdash; Public Provident Fund Returns 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate PPF maturity with year-wise growth. EEE tax-free returns. Section 80C benefit up to 1.5 lakh.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/ppf-calculator">
    <meta property="og:image" content="/tools/og-ppf-calculator.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PPF Calculator &mdash; Free PPF Maturity Calculator 2026">
    <meta name="twitter:description" content="Calculate PPF maturity value with year-wise growth. Tax-free EEE returns.">
    <meta name="twitter:image" content="/tools/og-ppf-calculator.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"PPF Calculator - Public Provident Fund Maturity Calculator India 2026","description":"Free online PPF calculator to estimate Public Provident Fund maturity value for 15 year tenure with optional extensions. Enter annual deposit and current PPF interest rate to get total invested amount, interest earned, and maturity value with year-wise balance growth table. PPF enjoys EEE tax status with Section 80C benefit.","url":"/tools/ppf-calculator","applicationCategory":"FinanceApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"PPF Calculator","item":"/tools/ppf-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is PPF and what is the current interest rate?","acceptedAnswer":{"@type":"Answer","text":"PPF is a government-backed long-term savings scheme with 15 year lock-in. The current PPF interest rate is 7.1 percent per annum for the quarter January to March 2026 as notified by the Ministry of Finance. Interest is compounded annually and credited on 31st March each year. The rate is revised quarterly."}},{"@type":"Question","name":"What is the maximum annual PPF deposit limit?","acceptedAnswer":{"@type":"Answer","text":"The maximum annual PPF deposit is 1.5 lakh rupees and the minimum is 500 rupees per year. Deposits can be made in lump sum or up to 12 instalments per year. Deposits above 1.5 lakh earn no interest and are not eligible for 80C deduction. The limit applies per person not per account."}},{"@type":"Question","name":"Is PPF completely tax-free?","acceptedAnswer":{"@type":"Answer","text":"Yes PPF enjoys EEE or Exempt Exempt Exempt tax status. Deposits up to 1.5 lakh qualify for Section 80C deduction under old tax regime. Interest earned is completely tax-free. Maturity amount is fully exempt from income tax. This makes PPF one of the most tax-efficient investment options in India."}},{"@type":"Question","name":"Can PPF be extended beyond 15 years?","acceptedAnswer":{"@type":"Answer","text":"Yes PPF can be extended in blocks of 5 years each after the initial 15 year maturity. Extension can be with or without further contributions. With contributions you continue depositing and earning interest. Without contributions the balance earns interest but no new deposits are made. Request extension within 1 year of maturity."}},{"@type":"Question","name":"When should I deposit in PPF to maximise interest?","acceptedAnswer":{"@type":"Answer","text":"Deposit before the 5th of every month to maximise interest. PPF interest is calculated on the minimum balance between the 5th and last day of each month. A lump sum deposit before 5th April earns interest for the entire year. Depositing on the 6th means you lose one month of interest calculation."}},{"@type":"Question","name":"Can I withdraw from PPF before maturity?","acceptedAnswer":{"@type":"Answer","text":"Partial withdrawal is allowed from the 7th financial year onwards. Maximum withdrawal is 50 percent of the balance at the end of the 4th preceding year or the preceding year whichever is lower. Only one withdrawal per year is allowed. For premature closure, the account must have completed 5 years with specific conditions."}},{"@type":"Question","name":"Can I take a loan against PPF?","acceptedAnswer":{"@type":"Answer","text":"Yes loans against PPF are available from the 3rd to 6th financial year. Maximum loan is 25 percent of the balance at the end of the 2nd preceding year. Interest on the loan is 1 percent above the PPF interest rate. Loan must be repaid within 36 months. Second loan available after first is fully repaid."}},{"@type":"Question","name":"What happens if I miss a yearly PPF deposit?","acceptedAnswer":{"@type":"Answer","text":"If you do not deposit the minimum 500 rupees in a year the account becomes inactive or discontinued. To revive it you must pay 500 per year of default plus a penalty of 50 rupees per year. The account remains valid but partial withdrawal and loan facilities are suspended until revival."}},{"@type":"Question","name":"Can NRIs open a PPF account?","acceptedAnswer":{"@type":"Answer","text":"NRIs cannot open new PPF accounts. However if a resident Indian who already has PPF becomes NRI they can continue the account until maturity without extension. No new deposits can be made after becoming NRI. The account earns interest at the prevailing rate until the 15 year maturity date."}},{"@type":"Question","name":"PPF vs ELSS vs FD - which is better for tax saving?","acceptedAnswer":{"@type":"Answer","text":"PPF: guaranteed 7.1 percent, completely tax-free, 15 year lock-in. ELSS: market-linked returns of 12 to 15 percent historically, shortest lock-in of 3 years, gains above 1.25 lakh taxed at 12.5 percent. FD: guaranteed 6.5 to 7 percent, 5 year lock-in, interest fully taxable. Choose based on risk appetite and liquidity needs."}},{"@type":"Question","name":"How is PPF interest calculated?","acceptedAnswer":{"@type":"Answer","text":"PPF interest is calculated monthly on the minimum balance between 5th and last day of the month. Interest is compounded annually and credited on 31st March. Annual interest equals sum of monthly interest calculations. This is why depositing before the 5th of each month maximises returns."}},{"@type":"Question","name":"Can a minor have a PPF account?","acceptedAnswer":{"@type":"Answer","text":"Yes a parent or guardian can open PPF for a minor child. Only one account per child is allowed. The 1.5 lakh deposit limit is combined for parent and minor accounts together not separate. Minor PPF matures when the child turns 18 or after 15 years whichever is later."}},{"@type":"Question","name":"Is PPF a good investment in 2026?","acceptedAnswer":{"@type":"Answer","text":"PPF remains excellent for risk-averse investors seeking guaranteed tax-free returns. At 7.1 percent with EEE status the effective pre-tax yield is about 10 percent for someone in the 30 percent bracket. Best used alongside equity SIP for a balanced portfolio. Ideal for retirement planning and long-term goals."}}]}
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


/* Tool-specific: PPF Calculator */
.ppf-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.ppf-box{border-radius:var(--radius);padding:20px;text-align:center}
.ppf-box.maturity{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.ppf-box.interest{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.ppf-box.invested{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.ppf-box .pb-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.ppf-box .pb-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.ppf-box .pb-sub{font-size:11px;opacity:.8;margin-top:2px}
.growth-bar{display:flex;height:36px;border-radius:10px;overflow:hidden;margin:16px 0}
.growth-bar .seg{display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;color:#fff;transition:width 0.5s}
.seg-inv{background:#4f46e5}
.seg-int{background:#059669}
.yr-table{max-height:450px;overflow-y:auto;margin-top:12px;border:1px solid var(--border);border-radius:var(--radius)}
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
.slider-row .slider-val{min-width:110px;padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--card);text-align:right;outline:none;transition:border-color 0.2s}
.slider-row .slider-val:focus{border-color:var(--primary)}
.eee-badge{display:inline-flex;align-items:center;gap:6px;background:#F0FDF4;color:#059669;padding:4px 12px;border-radius:20px;font-size:12px;font-weight:700;margin:8px 0}
@media(max-width:600px){.ppf-hero{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">PPF Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#about">About PPF</a>
        <a href="#rules">PPF Rules</a>
        <a href="#comparison">PPF vs Others</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>&rsaquo;</span>
    <a href="/tools/">Free Tools</a><span>&rsaquo;</span>PPF Calculator
</nav> --}}
<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>PPF Calculator &mdash; <span>Public Provident Fund</span> Maturity &amp; Returns</h1>
</header>
<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Calculate your PPF maturity value over 15&ndash;25 years at the current 7.1% interest rate. PPF enjoys EEE (Exempt-Exempt-Exempt) tax status &mdash; deposits up to &#8377;1.5 lakh qualify for Section 80C, interest is tax-free, and maturity is exempt. Enter your annual deposit, interest rate, and tenure. Get total invested, interest earned, maturity value, and a year-wise balance growth table showing compounding in action.</p>
</div>
<div class="main-layout">
    <div class="content-col">
        <div class="calc-card">
            <h2>Calculate PPF Maturity</h2>
            <noscript><div class="noscript-box">This calculator requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
            <div class="eee-badge">&#9989; EEE Tax Status &mdash; Investment + Interest + Maturity: All Tax-Free</div>
            <div class="slider-group">
                <label>Annual Deposit (&#8377;)</label>
                <div class="slider-row">
                    <input type="range" id="sliderAmt" min="500" max="150000" step="500" value="150000" oninput="syncS('amt')">
                    <input type="text" class="slider-val" id="valAmt" value="1,50,000" oninput="syncI('amt')">
                </div>
                <div style="font-size:12px;color:var(--text-muted);margin-top:4px">Min &#8377;500 &middot; Max &#8377;1,50,000 per year</div>
            </div>
            <div class="slider-group">
                <label>PPF Interest Rate (% p.a.)</label>
                <div class="slider-row">
                    <input type="range" id="sliderRate" min="5" max="10" step="0.1" value="7.1" oninput="syncS('rate')">
                    <input type="text" class="slider-val" id="valRate" value="7.1" style="min-width:80px" oninput="syncI('rate')">
                </div>
                <div style="font-size:12px;color:var(--text-muted);margin-top:4px">Current rate: 7.1% (Jan&ndash;Mar 2026). Revised quarterly by Govt.</div>
            </div>
            <div class="slider-group">
                <label>Tenure (Years)</label>
                <div class="slider-row">
                    <input type="range" id="sliderYears" min="15" max="50" step="5" value="15" oninput="syncS('years')">
                    <input type="text" class="slider-val" id="valYears" value="15" style="min-width:80px" oninput="syncI('years')">
                </div>
                <div style="font-size:12px;color:var(--text-muted);margin-top:4px">15 years (mandatory) + 5-year extensions</div>
            </div>
            <button class="btn-calculate" onclick="calcPPF()">Calculate PPF Maturity</button>
            <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>
            <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the PPF Calculator</h2>
            <p>This calculator estimates your Public Provident Fund maturity value using the annual compounding method as prescribed by the <a href="https://www.finmin.nic.in/" target="_blank" rel="noopener">Ministry of Finance</a>.</p>
            <h3>Step 1 &mdash; Set Annual Deposit</h3>
            <p>Enter your yearly PPF contribution (&#8377;500 to &#8377;1,50,000). Deposits above &#8377;1.5 lakh earn no interest. For maximum benefit, invest the full &#8377;1.5 lakh before 5th April each year.</p>
            <h3>Step 2 &mdash; Set Rate and Tenure</h3>
            <p>PPF rate is currently 7.1% (Q4 FY 2025-26). Tenure starts at 15 years with 5-year extensions. The calculator supports up to 50 years for long-term planning.</p>
            <h3>Step 3 &mdash; View Results</h3>
            <p>Get maturity value, total invested, interest earned, invested-vs-interest visual, and a complete year-wise table showing opening balance, deposit, interest, and closing balance.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Deposit before 5th of every month to maximise interest. PPF interest is calculated on the minimum balance between the 5th and last day of each month. A lump sum before 5th April earns interest for the entire year. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends PPF as a core component of tax-saving strategy under 80C.</p>
            </div>
        </section>

        <section class="content-section" id="about">
            <h2>What Is PPF (Public Provident Fund)?</h2>
            <p>PPF is a government-backed long-term savings scheme established under the <a href="https://www.finmin.nic.in/" target="_blank" rel="noopener">Public Provident Fund Act, 1968</a>. It is administered through post offices and authorised banks across India. PPF offers guaranteed returns backed by the Government of India, making it one of the safest investment options available.</p>
            <p>PPF enjoys <strong>EEE (Exempt-Exempt-Exempt)</strong> tax status &mdash; the only investment category in India with triple tax benefit: deposits qualify for Section 80C deduction up to &#8377;1.5 lakh (Exempt), interest earned is completely tax-free (Exempt), and the maturity amount is fully exempt from income tax (Exempt). This makes PPF the most tax-efficient fixed-income investment in India.</p>
            <h3>Key Features</h3>
            <ul>
                <li>Interest rate: 7.1% p.a. (revised quarterly by government)</li>
                <li>Tenure: 15 years, extendable in 5-year blocks</li>
                <li>Annual deposit: &#8377;500 (min) to &#8377;1,50,000 (max)</li>
                <li>Tax benefit: EEE status + Section 80C deduction</li>
                <li>Loan facility: Available from 3rd to 6th year</li>
                <li>Partial withdrawal: From 7th year onwards</li>
                <li>Backed by Government of India &mdash; zero risk</li>
            </ul>
        </section>

        <section class="content-section" id="rules">
            <h2>PPF Rules &mdash; Deposits, Withdrawal &amp; Closure</h2>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Rule</th><th>Details</th></tr></thead>
                <tbody>
                    <tr><td>Minimum Deposit</td><td>&#8377;500 per year</td></tr>
                    <tr><td>Maximum Deposit</td><td>&#8377;1,50,000 per year</td></tr>
                    <tr><td>Deposit Frequency</td><td>Lump sum or up to 12 instalments/year</td></tr>
                    <tr><td>Interest Rate</td><td>7.1% p.a. (Q4 FY 2025-26)</td></tr>
                    <tr><td>Compounding</td><td>Annually (credited 31st March)</td></tr>
                    <tr><td>Maturity</td><td>15 years from year of opening</td></tr>
                    <tr><td>Extension</td><td>5-year blocks (with or without deposits)</td></tr>
                    <tr><td>Partial Withdrawal</td><td>From 7th year; 50% of balance</td></tr>
                    <tr><td>Loan Against PPF</td><td>3rd to 6th year; 25% of balance</td></tr>
                    <tr><td>Premature Closure</td><td>After 5 years (specific conditions)</td></tr>
                    <tr><td>Tax Benefit</td><td>80C on deposit + Tax-free interest + Tax-free maturity</td></tr>
                </tbody>
            </table>
            </div>
            <div class="callout warn">
                <p><strong>Important:</strong> If you miss the minimum &#8377;500 deposit in any year, the account becomes inactive. Revival requires paying &#8377;500 per default year + &#8377;50 penalty per year. Keep calendar reminders to avoid discontinuation. <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a>-authorised banks and post offices accept PPF deposits.</p>
            </div>
        </section>

        <section class="content-section" id="comparison">
            <h2>PPF vs Other Tax-Saving Investments</h2>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Parameter</th><th>PPF</th><th>ELSS</th><th>Tax-Saving FD</th><th>NPS</th></tr></thead>
                <tbody>
                    <tr><td>Returns</td><td>7.1% (guaranteed)</td><td>12&ndash;15% (market)</td><td>6.5&ndash;7% (guaranteed)</td><td>9&ndash;12% (market)</td></tr>
                    <tr><td>Lock-in</td><td>15 years</td><td>3 years</td><td>5 years</td><td>Till 60 years</td></tr>
                    <tr><td>Tax on Returns</td><td>Tax-free (EEE)</td><td>12.5% LTCG &gt; &#8377;1.25L</td><td>Fully taxable</td><td>Partially taxable</td></tr>
                    <tr><td>80C Limit</td><td>&#8377;1.5L</td><td>&#8377;1.5L</td><td>&#8377;1.5L</td><td>&#8377;1.5L + &#8377;50K extra</td></tr>
                    <tr><td>Risk</td><td>Zero (Govt backed)</td><td>High (equity)</td><td>Low</td><td>Moderate</td></tr>
                </tbody>
            </table>
            </div>
            <div class="callout green">
                <p><strong>Expert Tip:</strong> Combine PPF + ELSS + NPS for optimal tax-saving: PPF for guaranteed base, ELSS for growth, NPS for extra &#8377;50K deduction under 80CCD(1B). This &ldquo;3-pillar strategy&rdquo; maximises both tax savings and wealth creation. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20tax-saving%20investment%20planning." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to our CA team &rarr;</a></p>
            </div>
        </section>

        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need tax-saving advice?</strong> Our CAs help with PPF, 80C planning, ITR filing, and investment strategy. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20PPF%20Calculator.%20I%20need%20tax%20planning%20help." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions &mdash; PPF</h2>
            <div id="faqList"></div>
        </section>
    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Need Tax-Saving Help?</h3>
            <p>Our CAs help with PPF, 80C planning, ITR filing &amp; investment strategy for individuals.</p>
            <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20tax-saving%20investment%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>Services</h3>
            <a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a>
            <a href="/tax-planning-and-advisory" class="sidebar-link">Tax Planning <span class="arrow">&rarr;</span></a>
            <a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting <span class="arrow">&rarr;</span></a>
            <a href="/payroll-management" class="sidebar-link">Payroll Management <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/sip-calculator" class="sidebar-link">SIP Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/fd-calculator" class="sidebar-link">FD Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/emi-calculator" class="sidebar-link">EMI Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/epf-calculator" class="sidebar-link">EPF Calculator <span class="arrow">&rarr;</span></a>
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
else{document.getElementById('valYears').value=document.getElementById('sliderYears').value;}
}
function syncI(t){
if(t==='amt'){var v=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;v=Math.min(v,150000);document.getElementById('sliderAmt').value=v;document.getElementById('valAmt').value=v?v.toLocaleString('en-IN'):'';}
else if(t==='rate'){var r=parseFloat(document.getElementById('valRate').value)||0;document.getElementById('sliderRate').value=r;}
else{var y=parseInt(document.getElementById('valYears').value)||15;document.getElementById('sliderYears').value=y;}
}
function fmt(n){return'\u20B9'+Math.round(n).toLocaleString('en-IN');}
function fmtL(n){if(n>=10000000)return'\u20B9'+(n/10000000).toFixed(2)+' Cr';if(n>=100000)return'\u20B9'+(n/100000).toFixed(2)+' L';return fmt(n);}

function resetForm(){
document.getElementById('sliderAmt').value=150000;document.getElementById('valAmt').value='1,50,000';
document.getElementById('sliderRate').value=7.1;document.getElementById('valRate').value='7.1';
document.getElementById('sliderYears').value=15;document.getElementById('valYears').value='15';
document.getElementById('resPanel').classList.remove('visible');
}

function calcPPF(){
var annual=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;
var rate=parseFloat(document.getElementById('valRate').value)||0;
var years=parseInt(document.getElementById('valYears').value)||15;
if(!annual||!rate){alert('Please enter deposit amount and interest rate.');return;}
annual=Math.min(annual,150000);
var r=rate/100;

var yearData=[];
var balance=0;
var totalInvested=0;
var totalInterest=0;

for(var y=1;y<=years;y++){
var opening=balance;
var deposit=annual;
totalInvested+=deposit;
var yrBalance=opening+deposit;
var interest=Math.round(yrBalance*r);
totalInterest+=interest;
balance=yrBalance+interest;
yearData.push({year:y,opening:Math.round(opening),deposit:deposit,interest:interest,closing:Math.round(balance)});
}

var maturity=Math.round(balance);
var intPct=maturity>0?Math.round(totalInterest/maturity*100):0;
var invPct=100-intPct;

var h='';
// Hero
h+='<div class="ppf-hero">';
h+='<div class="ppf-box invested"><div class="pb-label">Total Invested</div><div class="pb-value">'+fmtL(totalInvested)+'</div><div class="pb-sub">'+invPct+'% of maturity</div></div>';
h+='<div class="ppf-box interest"><div class="pb-label">Interest Earned</div><div class="pb-value">'+fmtL(totalInterest)+'</div><div class="pb-sub">'+intPct+'% &mdash; 100% tax-free</div></div>';
h+='<div class="ppf-box maturity"><div class="pb-label">Maturity Value</div><div class="pb-value">'+fmtL(maturity)+'</div><div class="pb-sub">After '+years+' years</div></div>';
h+='</div>';

// Bar
h+='<div class="growth-bar"><div class="seg seg-inv" style="width:'+invPct+'%">Invested '+invPct+'%</div><div class="seg seg-int" style="width:'+intPct+'%">Interest '+intPct+'%</div></div>';

// Tax savings callout
var taxSaved80C=Math.round(Math.min(annual,150000)*0.3*years);
h+='<div class="callout green" style="margin-top:0"><p style="color:#166534"><strong>Tax Benefit:</strong> At 30% slab, your &#8377;'+annual.toLocaleString('en-IN')+'/year deposit saves ~'+fmt(Math.min(annual,150000)*0.3)+'/year in tax under 80C (old regime). Over '+years+' years = ~'+fmtL(taxSaved80C)+' in tax savings. Plus '+fmtL(totalInterest)+' interest is 100% tax-free!</p></div>';

// Summary
h+='<div class="res-card"><div class="res-card-hd"><h3>PPF Summary</h3><span class="res-badge info">Details</span></div><div class="res-card-bd"><table class="cmp-table">';
h+='<tr><td>Annual Deposit</td><td><strong>'+fmt(annual)+'</strong></td></tr>';
h+='<tr><td>Interest Rate</td><td><strong>'+rate+'% p.a.</strong></td></tr>';
h+='<tr><td>Tenure</td><td><strong>'+years+' years</strong></td></tr>';
h+='<tr><td>Total Invested</td><td>'+fmt(totalInvested)+'</td></tr>';
h+='<tr><td>Total Interest Earned</td><td class="hi">'+fmt(totalInterest)+' (tax-free)</td></tr>';
h+='<tr style="background:var(--surface-alt)"><td><strong>Maturity Value</strong></td><td style="font-size:18px;color:var(--primary)"><strong>'+fmtL(maturity)+'</strong></td></tr>';
h+='<tr><td>Wealth Multiplier</td><td><strong>'+(totalInvested>0?(maturity/totalInvested).toFixed(1):'0')+'x</strong></td></tr>';
h+='</table></div></div>';

// Year-wise table
h+='<div class="res-card"><div class="res-card-hd"><h3>Year-Wise PPF Growth</h3><span class="res-badge teal">Schedule</span></div><div class="res-card-bd">';
h+='<div class="yr-table"><table><thead><tr><th>Year</th><th>Opening Balance</th><th>Deposit</th><th>Interest @'+rate+'%</th><th>Closing Balance</th></tr></thead><tbody>';
yearData.forEach(function(d){
h+='<tr><td>'+d.year+'</td><td>'+fmt(d.opening)+'</td><td>'+fmt(d.deposit)+'</td><td class="hi">'+fmt(d.interest)+'</td><td style="color:var(--primary);font-weight:700">'+fmtL(d.closing)+'</td></tr>';
});
h+='</tbody></table></div></div></div>';

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20PPF%20Calculator.%20I%20need%20help%20with%20tax-saving%20investments." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/fd-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg> FD Calculator</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What is PPF and current interest rate?",a:"Government-backed 15-year savings scheme. Current rate: 7.1% p.a. (Jan\u2013Mar 2026). Revised quarterly by Ministry of Finance. Interest compounded annually, credited 31st March. Zero risk as backed by Govt of India."},
{q:"What is the max annual PPF deposit?",a:"\u20B91,50,000 max, \u20B9500 min per year. Can be lump sum or up to 12 instalments. Deposits above \u20B91.5L earn no interest and don\u2019t get 80C benefit. Limit is per person, not per account."},
{q:"Is PPF completely tax-free?",a:"Yes \u2014 EEE status. Deposits: 80C deduction up to \u20B91.5L (old regime). Interest: 100% tax-free. Maturity: fully exempt. Most tax-efficient fixed-income investment in India."},
{q:"Can PPF be extended beyond 15 years?",a:"Yes, in 5-year blocks. Extension with contributions: continue depositing and earning interest. Without contributions: balance earns interest, no new deposits. Request within 1 year of maturity."},
{q:"When to deposit for max interest?",a:"Before 5th of every month. Interest calculated on minimum balance between 5th and last day. Lump sum before 5th April = interest for entire year. Depositing on 6th loses one month\u2019s interest."},
{q:"Can I withdraw before maturity?",a:"Partial withdrawal from 7th year: 50% of balance at end of 4th preceding year or preceding year (lower). One withdrawal/year. Premature closure after 5 years with specific conditions."},
{q:"Can I take loan against PPF?",a:"Yes, 3rd to 6th year. Max 25% of balance at end of 2nd preceding year. Interest: PPF rate + 1%. Repay within 36 months. Second loan available after first is repaid."},
{q:"What if I miss yearly deposit?",a:"Account becomes inactive. Revival: \u20B9500 per default year + \u20B950 penalty per year. Withdrawal and loan facilities suspended until revival. Set reminders to avoid this."},
{q:"Can NRIs open PPF?",a:"No new accounts. Existing PPF of resident who becomes NRI continues till maturity without extension. No new deposits after NRI status. Interest continues at prevailing rate."},
{q:"PPF vs ELSS vs FD for tax saving?",a:"PPF: 7.1% guaranteed, tax-free, 15-year lock-in. ELSS: 12\u201315% market-linked, 3-year lock-in, LTCG taxed. FD: 6.5\u20137% guaranteed, 5-year, interest taxable. Choose based on risk and liquidity."},
{q:"How is PPF interest calculated?",a:"Monthly: interest on minimum balance between 5th and last day. Annual: sum of monthly interest, compounded annually, credited 31st March. Deposit before 5th = full month\u2019s interest."},
{q:"Can a minor have PPF?",a:"Yes, parent/guardian opens for minor. One account per child. \u20B91.5L limit is combined for parent + minor accounts together. Matures when child turns 18 or after 15 years, whichever is later."},
{q:"Is PPF a good investment in 2026?",a:"Excellent for risk-averse investors. At 7.1% with EEE status, effective pre-tax yield is ~10% for 30% bracket. Combine with equity SIP for balanced portfolio. Ideal for retirement and long-term goals."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcPPF();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection