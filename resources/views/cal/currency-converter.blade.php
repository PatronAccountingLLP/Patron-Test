@extends('layouts.app')
@section('meta')
    <title>Currency Converter INR | USD, EUR, GBP Exchange Rates</title>
    <meta name="description" content="Free INR currency converter: convert Indian Rupee to USD, EUR, GBP, AED and 15+ currencies at indicative rates, with LRS limits and TCS rules. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/currency-converter">
    <meta property="og:title" content="Currency Converter INR — Free 2026 | Patron Accounting"><meta property="og:description" content="Convert INR to USD, EUR, GBP, AED. Exchange rates with LRS and TCS info.">
    <meta property="og:type" content="website"><meta property="og:locale" content="en_IN"><meta property="og:url" content="/tools/currency-converter">
    <meta property="og:image" content="/tools/og-currency-converter.png"><meta property="og:image:width" content="1200"><meta property="og:image:height" content="630"><meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Currency Converter INR — Free 2026"><meta name="twitter:description" content="Convert INR to 15+ world currencies instantly.">
@endsection
@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"Currency Converter INR India 2026","description":"Free online currency converter for Indian Rupee. Convert INR to and from USD EUR GBP AED JPY AUD CAD SGD and 15 plus currencies with indicative exchange rates. Includes LRS remittance limit info, TCS on foreign payments, and Form 15CA 15CB guidance for overseas remittances.","url":"/tools/currency-converter","applicationCategory":"FinanceApplication","operatingSystem":"Any","datePublished":"2026-03-07","dateModified":"2026-03-07","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Currency Converter","item":"/tools/currency-converter"}]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How does the currency converter work?","acceptedAnswer":{"@type":"Answer","text":"This converter uses indicative exchange rates to convert between Indian Rupee and major world currencies. Enter an amount in one currency, select the target currency, and get instant conversion. Rates are approximate mid-market rates for reference. For actual transaction rates check with your bank or the RBI reference rate."}},{"@type":"Question","name":"What is the RBI reference rate?","acceptedAnswer":{"@type":"Answer","text":"The Reserve Bank of India publishes daily reference rates for USD, EUR, GBP, and JPY against INR at 1:30 PM on every working day. These rates are derived from the spot market and serve as a benchmark. Banks add their own margin of 0.5 to 2 percent above the RBI rate for actual foreign exchange transactions."}},{"@type":"Question","name":"Are these rates live or approximate?","acceptedAnswer":{"@type":"Answer","text":"These are indicative mid-market rates for quick reference and planning purposes. They are not live trading rates. Actual bank rates include a spread or margin. For remittances and forex transactions always check the rate offered by your bank, authorised dealer, or the FBIL published rates on the RBI website."}},{"@type":"Question","name":"How much can I send abroad from India?","acceptedAnswer":{"@type":"Answer","text":"Under RBI Liberalised Remittance Scheme (LRS) resident individuals can remit up to 2.5 lakh US dollars per financial year for permissible capital and current account transactions. This covers education fees, travel, gifts, investments abroad, and maintenance of relatives. TCS of 5 percent applies above 7 lakh rupees per year."}},{"@type":"Question","name":"What is TCS on foreign remittance?","acceptedAnswer":{"@type":"Answer","text":"Tax Collected at Source on foreign remittances under LRS is 5 percent above 7 lakh rupees per financial year and 20 percent for non-education non-medical purposes above 7 lakh. For education funded by loan TCS is 0.5 percent above 7 lakh. TCS is adjustable against your income tax liability when filing ITR."}},{"@type":"Question","name":"What is the best time to convert currency?","acceptedAnswer":{"@type":"Answer","text":"Currency markets operate 24 hours on weekdays. INR rates are most actively traded during Indian banking hours 9 AM to 5 PM IST. Rates tend to be most competitive mid-week Tuesday to Thursday. Avoid converting on weekends or bank holidays when spreads are wider and rates less favourable."}},{"@type":"Question","name":"How to convert foreign income to INR for tax?","acceptedAnswer":{"@type":"Answer","text":"Foreign income must be reported in INR in your income tax return. Use the SBI TT buying rate on the last day of the month in which income was earned or the RBI reference rate. For salary received abroad use the rate on the date of credit. Consistent method should be followed each year."}},{"@type":"Question","name":"What is FCNR and NRE deposit?","acceptedAnswer":{"@type":"Answer","text":"FCNR Fixed Deposit is held in foreign currency like USD GBP or EUR by NRIs in Indian banks. NRE account is in INR with full repatriability. FCNR protects against INR depreciation but offers lower interest rates of 3 to 5 percent. NRE offers higher rates of 6 to 7 percent but carries exchange rate risk."}},{"@type":"Question","name":"What fees do banks charge for forex?","acceptedAnswer":{"@type":"Answer","text":"Banks charge a spread or margin of 0.5 to 3 percent on the mid-market rate. Additionally there may be transaction fees of 200 to 500 rupees, GST at 18 percent on fees, and correspondent bank charges for wire transfers. Total cost of a typical remittance is 1 to 3 percent of the amount converted."}},{"@type":"Question","name":"Is forex trading legal in India?","acceptedAnswer":{"@type":"Answer","text":"Forex trading in INR pairs like USD INR, EUR INR, GBP INR, and JPY INR is legal on recognised exchanges like NSE and BSE through SEBI registered brokers. Trading in non-INR pairs like EUR USD is not permitted for Indian residents. Violations attract penalties under FEMA administered by RBI."}},{"@type":"Question","name":"What is the USD to INR trend?","acceptedAnswer":{"@type":"Answer","text":"The Indian Rupee has generally depreciated against the US Dollar over the long term at approximately 3 to 5 percent per year. In 2024-25 the rate ranged between 83 to 87 rupees per dollar. RBI intervenes in the forex market to prevent excessive volatility. Long-term trend is driven by inflation differential and trade balance."}},{"@type":"Question","name":"How to get the best exchange rate?","acceptedAnswer":{"@type":"Answer","text":"Compare rates from multiple banks and authorised money changers. Online forex platforms like BookMyForex and Thomas Cook often offer better rates than bank branches. For large amounts above 5 lakh rupees negotiate directly with your bank relationship manager. Avoid airport money changers as they charge the highest margins."}},{"@type":"Question","name":"What is Form 15CA and 15CB for foreign payments?","acceptedAnswer":{"@type":"Answer","text":"Form 15CA is an online declaration required for most foreign remittances. Form 15CB is a CA certificate required when remittance exceeds 5 lakh rupees and is for payments that are taxable. The CA certifies the appropriate TDS has been deducted. Both must be filed on the income tax portal before the bank processes the remittance."}}]}</script>
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


.tool-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.tool-box{border-radius:var(--radius);padding:20px;text-align:center}
.tool-box .tb-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.tool-box .tb-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.tool-box .tb-sub{font-size:11px;opacity:.8;margin-top:2px}
.tool-box.b1{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.tool-box.b2{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.tool-box.b3{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.conv-row{display:grid;grid-template-columns:1fr auto 1fr;gap:16px;align-items:end;margin:20px 0}
.conv-col label{display:block;font-size:13px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:.5px}
.conv-col select,.conv-col input{width:100%;padding:12px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:16px;color:var(--text);background:var(--card);outline:none;transition:border-color 0.2s}
.conv-col select:focus,.conv-col input:focus{border-color:var(--primary)}
.swap-btn{width:48px;height:48px;border-radius:50%;border:2px solid var(--border);background:var(--card);display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:22px;transition:all 0.2s;margin-bottom:8px;color:var(--primary)}
.swap-btn:hover{border-color:var(--primary);background:var(--surface);transform:rotate(180deg)}
.rate-note{font-size:12px;color:var(--text-muted);text-align:center;margin-top:8px;font-style:italic}
.slider-group{margin-bottom:20px}
.slider-group label{display:block;font-size:13px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:.5px}
.slider-row{display:flex;align-items:center;gap:12px}
.slider-row input[type="range"]{flex:1;-webkit-appearance:none;height:6px;border-radius:3px;background:var(--border);outline:none}
.slider-row input[type="range"]::-webkit-slider-thumb{-webkit-appearance:none;width:20px;height:20px;border-radius:50%;background:var(--primary);cursor:pointer;border:3px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,0.2)}
.slider-row .slider-val{min-width:120px;padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--card);text-align:right;outline:none;transition:border-color 0.2s}
.slider-row .slider-val:focus{border-color:var(--primary)}
.gen-output{background:var(--surface);border:2px solid var(--border);border-radius:var(--radius);padding:24px;font-size:13px;line-height:1.9;margin:16px 0;max-height:600px;overflow-y:auto;white-space:pre-wrap;font-family:var(--font-body)}
@media(max-width:600px){.tool-hero{grid-template-columns:1fr}.conv-row{grid-template-columns:1fr;gap:8px}.swap-btn{margin:0 auto;transform:rotate(90deg)}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#converter">Converter</a><a href="#how-to-use">How to Use</a><a href="#rates">Rate Table</a><a href="#lrs">LRS & TCS</a><a href="#tips">Tips</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>Currency Converter</nav> --}}
<header class="hero" id="converter"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA & CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>Currency Converter — <span>INR</span> to USD, EUR, GBP & More</h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Convert between Indian Rupee and 15+ world currencies using indicative mid-market rates. Enter amount, select currencies, get instant conversion. Also covers RBI LRS limits ($250K/year), TCS on foreign remittances (5%/20% above &#8377;7L), and Form 15CA/15CB requirements. Rates are approximate — check <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> for official reference rates.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>Convert Currency</h2>
    <noscript><div class="noscript-box">This tool requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="conv-row"><div class="conv-col"><label>From</label><select id="fromCur"><option value="INR" selected>&#8377; INR - Indian Rupee</option><option value="USD">$ USD - US Dollar</option><option value="EUR">&euro; EUR - Euro</option><option value="GBP">&pound; GBP - British Pound</option><option value="AED">AED - UAE Dirham</option><option value="JPY">&yen; JPY - Japanese Yen</option><option value="AUD">A$ AUD - Australian Dollar</option><option value="CAD">C$ CAD - Canadian Dollar</option><option value="SGD">S$ SGD - Singapore Dollar</option><option value="CHF">CHF - Swiss Franc</option><option value="SAR">SAR - Saudi Riyal</option><option value="CNY">&yen; CNY - Chinese Yuan</option><option value="THB">THB - Thai Baht</option><option value="MYR">MYR - Malaysian Ringgit</option><option value="NZD">NZ$ NZD - New Zealand Dollar</option><option value="KWD">KWD - Kuwaiti Dinar</option></select><input type="number" id="fromAmt" value="100000" style="margin-top:8px" oninput="convert('from')"></div><div style="display:flex;align-items:center;justify-content:center"><button class="swap-btn" onclick="swapCur()">&#8644;</button></div><div class="conv-col"><label>To</label><select id="toCur"><option value="USD" selected>$ USD - US Dollar</option><option value="INR">&#8377; INR - Indian Rupee</option><option value="EUR">&euro; EUR - Euro</option><option value="GBP">&pound; GBP - British Pound</option><option value="AED">AED - UAE Dirham</option><option value="JPY">&yen; JPY - Japanese Yen</option><option value="AUD">A$ AUD - Australian Dollar</option><option value="CAD">C$ CAD - Canadian Dollar</option><option value="SGD">S$ SGD - Singapore Dollar</option><option value="CHF">CHF - Swiss Franc</option><option value="SAR">SAR - Saudi Riyal</option><option value="CNY">&yen; CNY - Chinese Yuan</option><option value="THB">THB - Thai Baht</option><option value="MYR">MYR - Malaysian Ringgit</option><option value="NZD">NZ$ NZD - New Zealand Dollar</option><option value="KWD">KWD - Kuwaiti Dinar</option></select><input type="number" id="toAmt" readonly style="margin-top:8px;background:var(--surface)"></div></div>
    <div class="rate-note" id="rateNote"></div>
    <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use</h2><p>Select currencies and enter an amount. Conversion updates instantly. Click the swap button to reverse direction. Rates are indicative mid-market approximations — actual bank rates include a margin of 0.5&ndash;3%. For official rates check the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI reference rates</a> published daily or the <a href="https://www.fbil.org.in/" target="_blank" rel="noopener">FBIL</a> benchmark rates.</p><div class="callout"><p><strong>CA Tip:</strong> For income tax purposes, convert foreign income using SBI TT buying rate on the last day of the month of earning. For foreign remittances above &#8377;5L, Form 15CB (CA certificate) and Form 15CA are mandatory before the bank processes the transfer. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> provides detailed guidance on forex accounting under AS-11.</p></div></section>

<section class="content-section" id="rates"><h2>Indicative Exchange Rates — INR</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Currency</th><th>Code</th><th>1 Unit = INR (approx)</th></tr></thead><tbody>
<tr><td>US Dollar</td><td>USD</td><td>&#8377;85.50</td></tr><tr><td>Euro</td><td>EUR</td><td>&#8377;92.80</td></tr><tr><td>British Pound</td><td>GBP</td><td>&#8377;108.50</td></tr><tr><td>UAE Dirham</td><td>AED</td><td>&#8377;23.30</td></tr><tr><td>Japanese Yen</td><td>JPY</td><td>&#8377;0.57</td></tr><tr><td>Australian Dollar</td><td>AUD</td><td>&#8377;55.20</td></tr><tr><td>Canadian Dollar</td><td>CAD</td><td>&#8377;62.10</td></tr><tr><td>Singapore Dollar</td><td>SGD</td><td>&#8377;64.80</td></tr><tr><td>Swiss Franc</td><td>CHF</td><td>&#8377;97.50</td></tr><tr><td>Saudi Riyal</td><td>SAR</td><td>&#8377;22.80</td></tr><tr><td>Chinese Yuan</td><td>CNY</td><td>&#8377;11.80</td></tr><tr><td>Kuwaiti Dinar</td><td>KWD</td><td>&#8377;278.50</td></tr>
</tbody></table></div><p style="font-size:12px;color:var(--text-muted)">Rates are approximate mid-market values for reference only. Updated periodically.</p></section>

<section class="content-section" id="lrs"><h2>RBI LRS Limits & TCS on Foreign Remittances</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Purpose</th><th>LRS Limit</th><th>TCS Rate</th><th>Threshold</th></tr></thead><tbody>
<tr><td>Education (self-funded)</td><td>$250,000/FY</td><td>5%</td><td>Above &#8377;7L/FY</td></tr>
<tr><td>Education (loan funded)</td><td>$250,000/FY</td><td>0.5%</td><td>Above &#8377;7L/FY</td></tr>
<tr><td>Medical treatment</td><td>$250,000/FY</td><td>5%</td><td>Above &#8377;7L/FY</td></tr>
<tr><td>Travel / Tourism</td><td>$250,000/FY</td><td>20%</td><td>Above &#8377;7L/FY</td></tr>
<tr><td>Investment abroad</td><td>$250,000/FY</td><td>20%</td><td>Above &#8377;7L/FY</td></tr>
<tr><td>Gift / Maintenance</td><td>$250,000/FY</td><td>20%</td><td>Above &#8377;7L/FY</td></tr>
</tbody></table></div><p>TCS is adjustable against your total income tax liability when filing ITR. Ensure you claim credit in your return to avoid double taxation.</p></section>

<section class="content-section" id="tips"><h2>Tips for Better Exchange Rates</h2><ul><li><strong>Compare platforms:</strong> Online forex services often beat bank branch rates by 1&ndash;2%. Compare BookMyForex, Thomas Cook, and your bank before converting.</li><li><strong>Avoid airports:</strong> Airport money changers charge 3&ndash;5% margins. Convert before travelling or use international debit/credit cards.</li><li><strong>Negotiate for large amounts:</strong> For conversions above &#8377;5 lakh, negotiate directly with your bank RM for better rates.</li><li><strong>Mid-week is best:</strong> Tuesday to Thursday typically offers more competitive rates than Monday or Friday.</li><li><strong>Form 15CA/15CB:</strong> For remittances above &#8377;5L, get CA certificate (15CB) before bank transfer to avoid delays.</li></ul></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need forex compliance help?</strong> Our CAs handle Form 15CA/15CB, LRS compliance, TCS on remittances, and NRI taxation. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20forex%20and%20remittance%20compliance%20help." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p></div>
<section class="content-section" id="faqs"><h2>Frequently Asked Questions</h2><div id="faqList"></div></section>
</div><aside class="sidebar-col"><div class="cta-card"><h3>Need Forex Help?</h3><p>Our CAs handle Form 15CA/15CB, LRS compliance, TCS on remittances & NRI taxation.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20forex%20and%20remittance%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div><div class="sidebar-card"><h3>Services</h3><a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a><a href="/tax-planning-and-advisory" class="sidebar-link">Tax Planning <span class="arrow">&rarr;</span></a><a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting <span class="arrow">&rarr;</span></a><a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">&rarr;</span></a></div><div class="sidebar-card"><h3>Related Tools</h3><a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a><a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a><a href="/tools/import-duty-calculator" class="sidebar-link">Import Duty Calculator <span class="arrow">&rarr;</span></a><a href="/tools/percentage-calculator" class="sidebar-link">Percentage Calculator <span class="arrow">&rarr;</span></a></div><div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div></aside></div>
<script>
var RATES={INR:1,USD:85.50,EUR:92.80,GBP:108.50,AED:23.30,JPY:0.57,AUD:55.20,CAD:62.10,SGD:64.80,CHF:97.50,SAR:22.80,CNY:11.80,THB:2.42,MYR:19.50,NZD:50.80,KWD:278.50};
function convert(){
var from=document.getElementById('fromCur').value,to=document.getElementById('toCur').value;
var amt=parseFloat(document.getElementById('fromAmt').value)||0;
var inrAmt=amt*RATES[from];
var result=inrAmt/RATES[to];
document.getElementById('toAmt').value=result.toFixed(2);
var rate=RATES[from]/RATES[to];
document.getElementById('rateNote').textContent='1 '+from+' = '+(RATES[from]/RATES[to]).toFixed(4)+' '+to+' (indicative mid-market rate)';
if(amt>0){showResult(from,to,amt,result,inrAmt);}
}
function swapCur(){var f=document.getElementById('fromCur'),t=document.getElementById('toCur');var tmp=f.value;f.value=t.value;t.value=tmp;convert();}
function showResult(from,to,amt,result,inr){
var lrsCheck=from==='INR'&&to!=='INR'?inr:0;
var h='<div class="tool-hero"><div class="tool-box b1"><div class="tb-label">Converted Amount</div><div class="tb-value">'+to+' '+result.toLocaleString('en-IN',{maximumFractionDigits:2})+'</div><div class="tb-sub">From '+from+' '+amt.toLocaleString('en-IN')+'</div></div><div class="tool-box b2"><div class="tb-label">Exchange Rate</div><div class="tb-value">'+(RATES[from]/RATES[to]).toFixed(4)+'</div><div class="tb-sub">1 '+from+' = '+to+'</div></div><div class="tool-box b3"><div class="tb-label">INR Equivalent</div><div class="tb-value">₹'+Math.round(inr).toLocaleString('en-IN')+'</div><div class="tb-sub">For LRS/TCS reference</div></div></div>';
if(lrsCheck>700000){var tcs=lrsCheck>700000?Math.round((lrsCheck-700000)*0.05):0;h+='<div class="callout warn"><p><strong>TCS Alert:</strong> Remittance of ₹'+Math.round(lrsCheck).toLocaleString('en-IN')+' exceeds ₹7L threshold. Estimated TCS at 5%: ₹'+tcs.toLocaleString('en-IN')+' (on amount above ₹7L). TCS is adjustable against your ITR tax liability.</p></div>';}
document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');
}
document.getElementById('fromCur').addEventListener('change',convert);
document.getElementById('toCur').addEventListener('change',convert);
document.addEventListener('DOMContentLoaded',function(){convert();});
var FAQS=[
{q:"How does the currency converter work?",a:"This converter uses indicative exchange rates to convert between Indian Rupee and major world currencies. Enter an amount in one currency, select the target currency, and get instant conversion. Rates are approximate mid-market rates for reference. For actual transaction rates check with your bank or the RBI reference rate."},
{q:"What is the RBI reference rate?",a:"The Reserve Bank of India publishes daily reference rates for USD, EUR, GBP, and JPY against INR at 1:30 PM on every working day. These rates are derived from the spot market and serve as a benchmark. Banks add their own margin of 0.5 to 2 percent above the RBI rate for actual foreign exchange transactions."},
{q:"Are these rates live or approximate?",a:"These are indicative mid-market rates for quick reference and planning purposes. They are not live trading rates. Actual bank rates include a spread or margin. For remittances and forex transactions always check the rate offered by your bank, authorised dealer, or the FBIL published rates on the RBI website."},
{q:"How much can I send abroad from India?",a:"Under RBI Liberalised Remittance Scheme (LRS) resident individuals can remit up to 2.5 lakh US dollars per financial year for permissible capital and current account transactions. This covers education fees, travel, gifts, investments abroad, and maintenance of relatives. TCS of 5 percent applies above 7 lakh rupees per year."},
{q:"What is TCS on foreign remittance?",a:"Tax Collected at Source on foreign remittances under LRS is 5 percent above 7 lakh rupees per financial year and 20 percent for non-education non-medical purposes above 7 lakh. For education funded by loan TCS is 0.5 percent above 7 lakh. TCS is adjustable against your income tax liability when filing ITR."},
{q:"What is the best time to convert currency?",a:"Currency markets operate 24 hours on weekdays. INR rates are most actively traded during Indian banking hours 9 AM to 5 PM IST. Rates tend to be most competitive mid-week Tuesday to Thursday. Avoid converting on weekends or bank holidays when spreads are wider and rates less favourable."},
{q:"How to convert foreign income to INR for tax?",a:"Foreign income must be reported in INR in your income tax return. Use the SBI TT buying rate on the last day of the month in which income was earned or the RBI reference rate. For salary received abroad use the rate on the date of credit. Consistent method should be followed each year."},
{q:"What is FCNR and NRE deposit?",a:"FCNR Fixed Deposit is held in foreign currency like USD GBP or EUR by NRIs in Indian banks. NRE account is in INR with full repatriability. FCNR protects against INR depreciation but offers lower interest rates of 3 to 5 percent. NRE offers higher rates of 6 to 7 percent but carries exchange rate risk."},
{q:"What fees do banks charge for forex?",a:"Banks charge a spread or margin of 0.5 to 3 percent on the mid-market rate. Additionally there may be transaction fees of 200 to 500 rupees, GST at 18 percent on fees, and correspondent bank charges for wire transfers. Total cost of a typical remittance is 1 to 3 percent of the amount converted."},
{q:"Is forex trading legal in India?",a:"Forex trading in INR pairs like USD INR, EUR INR, GBP INR, and JPY INR is legal on recognised exchanges like NSE and BSE through SEBI registered brokers. Trading in non-INR pairs like EUR USD is not permitted for Indian residents. Violations attract penalties under FEMA administered by RBI."},
{q:"What is the USD to INR trend?",a:"The Indian Rupee has generally depreciated against the US Dollar over the long term at approximately 3 to 5 percent per year. In 2024-25 the rate ranged between 83 to 87 rupees per dollar. RBI intervenes in the forex market to prevent excessive volatility. Long-term trend is driven by inflation differential and trade balance."},
{q:"How to get the best exchange rate?",a:"Compare rates from multiple banks and authorised money changers. Online forex platforms like BookMyForex and Thomas Cook often offer better rates than bank branches. For large amounts above 5 lakh rupees negotiate directly with your bank relationship manager. Avoid airport money changers as they charge the highest margins."},
{q:"What is Form 15CA and 15CB for foreign payments?",a:"Form 15CA is an online declaration required for most foreign remittances. Form 15CB is a CA certificate required when remittance exceeds 5 lakh rupees and is for payments that are taxable. The CA certifies the appropriate TDS has been deducted. Both must be filed on the income tax portal before the bank processes the remittance."}
];

function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});

</script>
@endsection