@extends('layouts.app')
@section('meta')
    <title>RD Calculator | Recurring Deposit Maturity &amp; Interest</title>
    <meta name="description" content="RD Calculator: find your recurring deposit maturity value, interest earned and TDS for bank and post office RDs, with a quarter-wise growth table. Free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/rd-calculator">
    <meta property="og:title" content="RD Calculator &mdash; Recurring Deposit Interest 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate RD maturity value and interest earned. Bank and post office RD with quarter-wise growth.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/rd-calculator">
    <meta property="og:image" content="/tools/og-rd-calculator.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="RD Calculator &mdash; Free Recurring Deposit Interest 2026">
    <meta name="twitter:description" content="Calculate RD maturity and interest. Bank and post office RD with growth table.">
    <meta name="twitter:image" content="/tools/og-rd-calculator.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"RD Calculator - Recurring Deposit Maturity Calculator India 2026","description":"Free online recurring deposit calculator to compute maturity value and interest earned for bank and post office RD. Enter monthly deposit, interest rate, and tenure to get total deposits, interest earned, maturity value, TDS impact, and quarter-wise growth table. Supports quarterly compounding as used by Indian banks.","url":"/tools/rd-calculator","applicationCategory":"FinanceApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"RD Calculator","item":"/tools/rd-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is a Recurring Deposit?","acceptedAnswer":{"@type":"Answer","text":"A Recurring Deposit is a savings scheme where you deposit a fixed amount every month for a predetermined period. At maturity you receive the total deposits plus compound interest. RD is offered by banks and post offices in India with tenures from 6 months to 10 years. Interest is compounded quarterly in most banks."}},{"@type":"Question","name":"How is RD interest calculated?","acceptedAnswer":{"@type":"Answer","text":"RD interest is calculated using quarterly compounding. Each monthly deposit earns compound interest from the date of deposit to maturity. Formula for each instalment: P times (1 plus r/4) raised to 4 times remaining months divided by 12. The sum of all instalments with interest gives the maturity value."}},{"@type":"Question","name":"What is the current RD interest rate?","acceptedAnswer":{"@type":"Answer","text":"RD rates in India range from 6.5 to 7.5 percent for general citizens and 7 to 8 percent for senior citizens as of 2026. Post office RD offers 6.7 percent for 5 year tenure. Small finance banks offer up to 8.5 percent. Senior citizens get 0.25 to 0.5 percent extra at most banks."}},{"@type":"Question","name":"Is TDS deducted on RD interest?","acceptedAnswer":{"@type":"Answer","text":"Yes TDS at 10 percent is deducted if total interest from all deposits including FD and RD at a bank exceeds 40000 per year or 50000 for senior citizens. TDS is deducted at maturity or when interest is credited. Submit Form 15G or 15H to avoid TDS if your total income is below the taxable limit."}},{"@type":"Question","name":"What is the minimum RD amount?","acceptedAnswer":{"@type":"Answer","text":"Minimum monthly RD deposit varies by bank. Most banks accept 100 to 1000 rupees minimum. Post office RD minimum is 100 rupees with no maximum limit. Some banks have RD in multiples of 100 or 500. There is typically no maximum limit for bank RD though post office has specific limits for different schemes."}},{"@type":"Question","name":"Can I miss an RD instalment?","acceptedAnswer":{"@type":"Answer","text":"Missing an RD instalment attracts a penalty of typically 1 to 2 percent per month of the instalment amount. If you miss 3 or more consecutive instalments the RD may be prematurely closed by the bank. Post office allows a default fee of 1 rupee per 100 per month. Set auto-debit to avoid missing payments."}},{"@type":"Question","name":"RD vs SIP - which is better?","acceptedAnswer":{"@type":"Answer","text":"RD offers guaranteed returns of 6.5 to 7.5 percent with zero risk. SIP in equity mutual funds offers potentially higher returns of 12 to 15 percent but with market risk. RD is better for short-term goals under 3 years and risk-averse investors. SIP is better for long-term goals above 5 years with higher growth potential."}},{"@type":"Question","name":"Is RD interest taxable?","acceptedAnswer":{"@type":"Answer","text":"Yes RD interest is fully taxable under Income from Other Sources at your slab rate. TDS is deducted at 10 percent above the threshold. The interest is added to your total income for the year in which RD matures. Senior citizens can claim up to 50000 deduction under Section 80TTB on interest income."}},{"@type":"Question","name":"What is post office RD?","acceptedAnswer":{"@type":"Answer","text":"Post office RD is a 5 year recurring deposit scheme backed by the Government of India offering 6.7 percent interest as of 2026. Minimum deposit is 100 rupees. Interest is compounded quarterly. It can be opened at any post office with KYC. Not eligible for 80C deduction but offers sovereign guarantee on returns."}},{"@type":"Question","name":"Can I close RD before maturity?","acceptedAnswer":{"@type":"Answer","text":"Yes premature closure is allowed at most banks after a minimum period usually 3 to 6 months. Interest is recalculated at the rate applicable for the actual period minus a penalty of 0.5 to 1 percent. Post office RD can be closed after 3 years. Some banks may not allow premature closure for very short tenures."}},{"@type":"Question","name":"RD vs FD - which gives more interest?","acceptedAnswer":{"@type":"Answer","text":"FD typically offers slightly higher interest rates than RD at the same bank because the full amount earns interest from day one. In RD only deposited amounts earn interest. However RD is better for monthly savings discipline. For the same total investment FD earns about 10 to 15 percent more interest than RD over the same tenure."}},{"@type":"Question","name":"Can senior citizens get higher RD rates?","acceptedAnswer":{"@type":"Answer","text":"Yes most banks offer 0.25 to 0.5 percent higher RD rates for senior citizens aged 60 and above. The TDS threshold is also higher at 50000 versus 40000. Section 80TTB allows seniors to claim up to 50000 deduction on interest income from deposits. This makes RD more attractive for senior citizen monthly savings."}},{"@type":"Question","name":"What happens to RD if I die before maturity?","acceptedAnswer":{"@type":"Answer","text":"The nominee or legal heir can claim the RD maturity value with interest up to the date of death or choose premature closure. If nominee is registered the claim process is straightforward. Without nominee a succession certificate or legal heir certificate is required. Interest is calculated up to the date of death."}}]}
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


/* Tool-specific: RD Calculator */
.rd-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.rd-box{border-radius:var(--radius);padding:20px;text-align:center}
.rd-box.maturity{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.rd-box.interest{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.rd-box.invested{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.rd-box .rb-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.rd-box .rb-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.rd-box .rb-sub{font-size:11px;opacity:.8;margin-top:2px}
.growth-bar{display:flex;height:36px;border-radius:10px;overflow:hidden;margin:16px 0}
.growth-bar .seg{display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;color:#fff;transition:width 0.5s}
.seg-inv{background:#4f46e5}
.seg-int{background:#059669}
.qr-table{max-height:400px;overflow-y:auto;margin-top:12px;border:1px solid var(--border);border-radius:var(--radius)}
.qr-table table{width:100%;border-collapse:collapse;font-size:12px}
.qr-table th{background:var(--primary-dark);color:#fff;padding:8px 10px;text-align:right;font-weight:600;font-size:10px;text-transform:uppercase;letter-spacing:.3px;position:sticky;top:0}
.qr-table th:first-child{text-align:center}
.qr-table td{padding:7px 10px;border-bottom:1px solid var(--border);text-align:right;font-family:var(--font-mono);font-size:11px}
.qr-table td:first-child{text-align:center;font-family:var(--font-body);font-weight:600}
.qr-table tr:nth-child(even){background:var(--surface)}
.slider-group{margin-bottom:20px}
.slider-group label{display:block;font-size:13px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:.5px}
.slider-row{display:flex;align-items:center;gap:12px}
.slider-row input[type="range"]{flex:1;-webkit-appearance:none;height:6px;border-radius:3px;background:var(--border);outline:none}
.slider-row input[type="range"]::-webkit-slider-thumb{-webkit-appearance:none;width:20px;height:20px;border-radius:50%;background:var(--primary);cursor:pointer;border:3px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,0.2)}
.slider-row .slider-val{min-width:110px;padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--card);text-align:right;outline:none;transition:border-color 0.2s}
.slider-row .slider-val:focus{border-color:var(--primary)}
@media(max-width:600px){.rd-hero{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#calculator">RD Calculator</a><a href="#how-to-use">How to Use</a><a href="#formula">RD Formula</a><a href="#rates">RD Rates</a><a href="#tips">Tips</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>RD Calculator</nav> --}}
<header class="hero" id="calculator"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>RD Calculator &mdash; <span>Recurring Deposit</span> Maturity &amp; Interest</h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Calculate your recurring deposit maturity value, total interest earned, and TDS impact. Enter monthly deposit, interest rate, and tenure. RD interest is compounded quarterly by most Indian banks. Get total deposits, interest earned, maturity amount, effective yield, TDS calculation, and a quarter-wise growth table showing how each instalment compounds over time.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>Calculate RD Maturity</h2>
    <noscript><div class="noscript-box">This calculator requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="slider-group"><label>Monthly Deposit (&#8377;)</label><div class="slider-row"><input type="range" id="sliderAmt" min="100" max="500000" step="100" value="10000" oninput="syncS('amt')"><input type="text" class="slider-val" id="valAmt" value="10,000" oninput="syncI('amt')"></div></div>
    <div class="slider-group"><label>Interest Rate (% p.a.)</label><div class="slider-row"><input type="range" id="sliderRate" min="4" max="10" step="0.1" value="7" oninput="syncS('rate')"><input type="text" class="slider-val" id="valRate" value="7" style="min-width:80px" oninput="syncI('rate')"></div></div>
    <div class="slider-group"><label>Tenure (Months)</label><div class="slider-row"><input type="range" id="sliderTenure" min="6" max="120" step="6" value="60" oninput="syncS('tenure')"><input type="text" class="slider-val" id="valTenure" value="60" style="min-width:80px" oninput="syncI('tenure')"><span style="font-size:13px;color:var(--text-muted);white-space:nowrap" id="tenLabel">5 yrs</span></div></div>
    <div class="form-group"><label>Depositor</label><div class="toggle-group" id="depositor"><button type="button" class="toggle-btn active" data-val="general" onclick="setTg('depositor',this)">General<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">TDS &gt; &#8377;40K</small></button><button type="button" class="toggle-btn" data-val="senior" onclick="setTg('depositor',this)">Senior 60+<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">TDS &gt; &#8377;50K</small></button></div></div>
    <button class="btn-calculate" onclick="calcRD()">Calculate RD Maturity</button>
    <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>
    <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use the RD Calculator</h2><p>This tool calculates recurring deposit maturity using quarterly compounding as used by banks regulated by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a>.</p><h3>Step 1 &mdash; Enter Monthly Deposit</h3><p>Set your monthly RD instalment amount. Minimum varies by bank (&#8377;100&ndash;1,000). No maximum limit at most banks.</p><h3>Step 2 &mdash; Set Rate and Tenure</h3><p>Enter the RD interest rate (typically 6.5&ndash;7.5% for banks, higher for small finance banks) and tenure (6&ndash;120 months).</p><h3>Step 3 &mdash; View Results</h3><p>Get maturity value, total deposits, interest earned, TDS impact, and quarter-wise growth table.</p><div class="callout"><p><strong>CA Tip:</strong> RD interest is taxable as Income from Other Sources. TDS is deducted at 10% if combined FD+RD interest at a bank exceeds &#8377;40K/year (&#8377;50K for seniors). Submit Form 15G/15H if income is below taxable limit. As per <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Section 194A of the IT Act</a>, banks must deduct TDS on interest exceeding the threshold. <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends including RD interest in ITR even if below TDS threshold.</p></div></section>

<section class="content-section" id="formula"><h2>RD Interest Calculation</h2><div class="formula-box"><span class="label">RD Maturity Formula (Quarterly Compounding):</span><br>M = P &times; [(1+r/4)<sup>4t</sup> &minus; 1] &divide; [1 &minus; (1+r/4)<sup>&minus;1/3</sup>]<br><br><span class="label">Simplified approach:</span> Each monthly deposit compounds at quarterly rate for remaining tenure.<br>Maturity = Sum of [P &times; (1+r/4)<sup>4&times;(remaining months/12)</sup>] for each instalment<br><br><span class="label">Example (&#8377;10K/month, 7%, 5 years):</span><br>Total Deposits = 10,000 &times; 60 = &#8377;6,00,000<br>Maturity &asymp; <span class="label">&#8377;7,19,770</span> | Interest &asymp; <span class="label">&#8377;1,19,770</span></div></section>

<section class="content-section" id="rates"><h2>RD Interest Rates in India &mdash; 2026</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Provider</th><th>1 Year</th><th>3 Years</th><th>5 Years</th><th>Senior Extra</th></tr></thead><tbody>
<tr><td>SBI</td><td>6.80%</td><td>7.00%</td><td>6.50%</td><td>+0.50%</td></tr>
<tr><td>HDFC Bank</td><td>6.60%</td><td>7.10%</td><td>7.00%</td><td>+0.50%</td></tr>
<tr><td>ICICI Bank</td><td>6.70%</td><td>7.10%</td><td>7.00%</td><td>+0.50%</td></tr>
<tr><td><a href="https://www.indiapost.gov.in/" target="_blank" rel="noopener">Post Office</a></td><td>&mdash;</td><td>&mdash;</td><td>6.70%</td><td>N/A</td></tr>
<tr><td>Small Finance Banks</td><td>7.50%</td><td>8.00%</td><td>8.25%</td><td>+0.50%</td></tr>
</tbody></table></div><p style="font-size:13px;color:var(--text-muted);">Post Office RD is only for 5-year tenure. Rates indicative as of March 2026. Check <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> and bank websites.</p></section>

<section class="content-section" id="tips"><h2>RD Tips for Maximum Returns</h2><ul><li><strong>Set auto-debit:</strong> Missing instalments attracts 1&ndash;2% penalty. Auto-debit ensures discipline.</li><li><strong>Compare banks:</strong> Small finance banks offer 0.5&ndash;1.5% higher rates than large banks. For amounts under &#8377;5L per bank, the DICGC guarantee covers you.</li><li><strong>Senior citizen advantage:</strong> 0.5% extra rate + higher TDS threshold + 80TTB deduction. RD is especially beneficial for seniors building monthly income discipline.</li><li><strong>Consider step-up:</strong> Many banks allow increasing RD instalment annually. Start lower, increase with income growth. Similar to step-up SIP concept.</li><li><strong>Tax planning:</strong> Spread RD across banks to keep interest below &#8377;40K per bank/year for TDS minimisation. Or submit Form 15G/15H if eligible.</li></ul><div class="callout green"><p><strong>Expert Tip:</strong> For goals beyond 5 years, consider SIP in balanced mutual funds instead of RD &mdash; historically 3&ndash;5% higher returns. Use RD for short-term goals (1&ndash;3 years) where capital safety matters. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20savings%20and%20investment%20planning." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to our CA team &rarr;</a></p></div></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need savings advice?</strong> Our CAs help with RD tax planning, investment comparison, and ITR filing for deposit holders. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20RD%20Calculator.%20I%20need%20tax%20planning%20help." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p></div>

<section class="content-section" id="faqs"><h2>Frequently Asked Questions &mdash; Recurring Deposit</h2><div id="faqList"></div></section>
</div>
<aside class="sidebar-col">
    <div class="cta-card"><h3>Need Tax Help?</h3><p>Our CAs handle RD tax planning, deposit comparison &amp; ITR filing for individuals.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20RD%20tax%20planning%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div>
    <div class="sidebar-card"><h3>Services</h3><a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a><a href="/tax-planning-and-advisory" class="sidebar-link">Tax Planning <span class="arrow">&rarr;</span></a><a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">&rarr;</span></a><a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>Related Tools</h3><a href="/tools/fd-calculator" class="sidebar-link">FD Calculator <span class="arrow">&rarr;</span></a><a href="/tools/sip-calculator" class="sidebar-link">SIP Calculator <span class="arrow">&rarr;</span></a><a href="/tools/ppf-calculator" class="sidebar-link">PPF Calculator <span class="arrow">&rarr;</span></a><a href="/tools/compound-interest-calculator" class="sidebar-link">Compound Interest <span class="arrow">&rarr;</span></a><a href="/tools/nps-calculator" class="sidebar-link">NPS Calculator <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div>
</aside>
</div>

<script>
function getVal(id){var g=document.getElementById(id);var a=g.querySelector('.toggle-btn.active');return a?a.getAttribute('data-val'):'';}
function setTg(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');}
function syncS(t){if(t==='amt'){document.getElementById('valAmt').value=parseInt(document.getElementById('sliderAmt').value).toLocaleString('en-IN');}else if(t==='rate'){document.getElementById('valRate').value=document.getElementById('sliderRate').value;}else{var m=parseInt(document.getElementById('sliderTenure').value);document.getElementById('valTenure').value=m;var y=Math.floor(m/12),mo=m%12;document.getElementById('tenLabel').textContent=y?y+' yr'+(y>1?'s':'')+(mo?' '+mo+' mo':''):(mo+' mo');}}
function syncI(t){if(t==='amt'){var v=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;document.getElementById('sliderAmt').value=v;document.getElementById('valAmt').value=v?v.toLocaleString('en-IN'):'';}else if(t==='rate'){document.getElementById('sliderRate').value=parseFloat(document.getElementById('valRate').value)||0;}else{var m=parseInt(document.getElementById('valTenure').value)||0;document.getElementById('sliderTenure').value=m;var y=Math.floor(m/12),mo=m%12;document.getElementById('tenLabel').textContent=y?y+' yr'+(y>1?'s':'')+(mo?' '+mo+' mo':''):(mo+' mo');}}
function fmt(n){return'\u20B9'+Math.round(n).toLocaleString('en-IN');}
function fmtL(n){if(n>=10000000)return'\u20B9'+(n/10000000).toFixed(2)+' Cr';if(n>=100000)return'\u20B9'+(n/100000).toFixed(2)+' L';return fmt(n);}
function resetForm(){document.getElementById('sliderAmt').value=10000;document.getElementById('valAmt').value='10,000';document.getElementById('sliderRate').value=7;document.getElementById('valRate').value='7';document.getElementById('sliderTenure').value=60;document.getElementById('valTenure').value='60';document.getElementById('tenLabel').textContent='5 yrs';document.getElementById('depositor').querySelectorAll('.toggle-btn').forEach(function(b,i){b.classList.toggle('active',i===0);});document.getElementById('resPanel').classList.remove('visible');}

function calcRD(){
var P=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;
var rate=parseFloat(document.getElementById('valRate').value)||0;
var months=parseInt(document.getElementById('valTenure').value)||0;
var isSenior=getVal('depositor')==='senior';
if(!P||!rate||!months){alert('Please enter deposit amount, rate, and tenure.');return;}
var r=rate/100;
var totalDeposits=P*months;

// Calculate maturity using quarterly compounding for each instalment
var maturity=0;
for(var m=1;m<=months;m++){
var remainingMonths=months-m+1;
var remainingYears=remainingMonths/12;
maturity+=P*Math.pow(1+r/4,4*remainingYears);
}
maturity=Math.round(maturity);
var interest=maturity-totalDeposits;
var intPct=maturity>0?Math.round(interest/maturity*100):0;
var invPct=100-intPct;

// TDS
var annualInt=interest/(months/12);
var tdsThreshold=isSenior?50000:40000;
var totalTDS=annualInt>tdsThreshold?Math.round(interest*0.10):0;
var netInterest=interest-totalTDS;

var h='';
h+='<div class="rd-hero"><div class="rd-box maturity"><div class="rb-label">Maturity Value</div><div class="rb-value">'+fmtL(maturity)+'</div><div class="rb-sub">After '+months+' months</div></div>';
h+='<div class="rd-box interest"><div class="rb-label">Interest Earned</div><div class="rb-value">'+fmtL(interest)+'</div><div class="rb-sub">'+intPct+'% of maturity</div></div>';
h+='<div class="rd-box invested"><div class="rb-label">Total Deposits</div><div class="rb-value">'+fmtL(totalDeposits)+'</div><div class="rb-sub">'+invPct+'% of maturity</div></div></div>';

h+='<div class="growth-bar"><div class="seg seg-inv" style="width:'+invPct+'%">Deposits '+invPct+'%</div><div class="seg seg-int" style="width:'+intPct+'%">Interest '+intPct+'%</div></div>';

// Summary
h+='<div class="res-card"><div class="res-card-hd"><h3>RD Summary</h3><span class="res-badge info">Quarterly Compounding</span></div><div class="res-card-bd"><table class="cmp-table">';
h+='<tr><td>Monthly Deposit</td><td><strong>'+fmt(P)+'</strong></td></tr>';
h+='<tr><td>Interest Rate</td><td><strong>'+rate+'% p.a.</strong></td></tr>';
h+='<tr><td>Tenure</td><td><strong>'+months+' months ('+Math.floor(months/12)+' yrs'+(months%12?' '+months%12+' mo':'')+')</strong></td></tr>';
h+='<tr><td>Total Deposits</td><td>'+fmt(totalDeposits)+'</td></tr>';
h+='<tr><td>Interest Earned (gross)</td><td class="hi">'+fmt(interest)+'</td></tr>';
h+='<tr><td>TDS (10%)</td><td class="neg">'+(totalTDS>0?fmt(totalTDS):'Nil (below '+fmt(tdsThreshold)+' threshold)')+'</td></tr>';
h+='<tr><td>Net Interest After TDS</td><td>'+fmt(netInterest)+'</td></tr>';
h+='<tr style="background:var(--surface-alt)"><td><strong>Maturity Value</strong></td><td style="font-size:18px;color:var(--primary)"><strong>'+fmtL(maturity)+'</strong></td></tr>';
h+='<tr><td>Wealth Multiplier</td><td><strong>'+(maturity/totalDeposits).toFixed(2)+'x</strong></td></tr>';
h+='</table></div></div>';

// Quarter-wise table
var quarters=Math.ceil(months/3);
h+='<div class="res-card"><div class="res-card-hd"><h3>Quarter-Wise Growth</h3><span class="res-badge teal">Schedule</span></div><div class="res-card-bd"><div class="qr-table"><table><thead><tr><th>Qtr</th><th>Deposits This Qtr</th><th>Cumulative Deposits</th><th>Interest Earned</th><th>Balance</th></tr></thead><tbody>';
for(var q=1;q<=quarters;q++){
var qMonths=Math.min(3,months-(q-1)*3);
var cumDeposits=Math.min(q*3,months)*P;
var qBalance=0;
for(var m=1;m<=Math.min(q*3,months);m++){var rem=months-m+1;qBalance+=P*Math.pow(1+r/4,4*rem/12);}
qBalance=Math.round(qBalance);
var qInterest=qBalance-cumDeposits;
h+='<tr><td>Q'+q+'</td><td>'+fmt(qMonths*P)+'</td><td>'+fmt(cumDeposits)+'</td><td class="hi">'+fmt(qInterest)+'</td><td style="color:var(--primary);font-weight:700">'+fmtL(qBalance)+'</td></tr>';
}
h+='</tbody></table></div></div></div>';

if(totalTDS>0){h+='<div class="callout warn"><p><strong>TDS Note:</strong> '+fmt(totalTDS)+' TDS will be deducted. Submit Form '+(isSenior?'15H':'15G')+' if income is below taxable limit. Include RD interest in ITR under Income from Other Sources.</p></div>';}
else{h+='<div class="callout green"><p><strong>No TDS:</strong> Annual interest of '+fmt(Math.round(annualInt))+' is below '+fmt(tdsThreshold)+' threshold. Still include in ITR as it is taxable.</p></div>';}

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20RD%20Calculator.%20I%20need%20help%20with%20savings%20planning." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/fd-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg> FD Calculator</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What is a Recurring Deposit?",a:"Fixed monthly deposit for a set period. At maturity: total deposits + compound interest. Offered by banks and post offices. Tenure: 6 months to 10 years. Interest compounded quarterly by most banks."},
{q:"How is RD interest calculated?",a:"Quarterly compounding on each monthly instalment. Each deposit earns CI from deposit date to maturity. Sum of all compound instalments = maturity. Formula uses (1+r/4)^(4\u00D7remaining years) per instalment."},
{q:"Current RD interest rate?",a:"Banks: 6.5\u20137.5% general, 7\u20138% seniors (March 2026). Post office: 6.7% (5-year). Small finance banks: up to 8.5%. Seniors get 0.25\u20130.5% extra at most banks."},
{q:"Is TDS deducted on RD?",a:"Yes, 10% if total FD+RD interest at a bank > \u20B940K/year (\u20B950K seniors). TDS at maturity or credit. Submit Form 15G/15H if income below taxable limit to avoid TDS."},
{q:"What is minimum RD amount?",a:"Most banks: \u20B9100\u20131,000 minimum. Post office: \u20B9100. No maximum at most banks. Deposits usually in multiples of \u20B9100 or \u20B9500."},
{q:"What if I miss an instalment?",a:"Penalty of 1\u20132% of instalment per month. 3+ consecutive misses may cause premature closure. Post office charges \u20B91 per \u20B9100 per month. Set auto-debit to avoid."},
{q:"RD vs SIP \u2014 which is better?",a:"RD: guaranteed 6.5\u20137.5%, zero risk. SIP: potentially 12\u201315% but market risk. RD for short-term (<3 yrs) and risk-averse. SIP for long-term (>5 yrs) and growth."},
{q:"Is RD interest taxable?",a:"Yes, fully taxable at slab rate under Income from Other Sources. TDS is advance tax, not final. Seniors get 80TTB deduction up to \u20B950K on interest income."},
{q:"What is post office RD?",a:"5-year scheme, 6.7% rate, \u20B9100 min, quarterly compounding. Govt of India backed. No 80C benefit. Open at any post office with KYC. Sovereign guarantee on returns."},
{q:"Can I close RD early?",a:"Yes, after 3\u20136 months at most banks. Interest recalculated at applicable rate minus 0.5\u20131% penalty. Post office RD: after 3 years. Very short tenures may not allow."},
{q:"RD vs FD \u2014 more interest?",a:"FD earns more (full amount compounding from day 1). RD interest is 10\u201315% less for same total investment. But RD builds savings discipline. FD needs lump sum upfront."},
{q:"Senior citizen RD benefits?",a:"0.25\u20130.5% extra rate. TDS threshold \u20B950K vs \u20B940K. Section 80TTB \u20B950K deduction. Makes RD attractive for monthly savings habit with guaranteed returns."},
{q:"What if RD holder dies?",a:"Nominee/legal heir claims maturity with interest up to death date. Or premature closure. Registered nominee = straightforward. Without nominee = succession certificate needed."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcRD();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection