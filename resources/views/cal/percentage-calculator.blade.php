@extends('layouts.app')
@section('meta')
    <title>Percentage Calculator | Increase, Decrease &amp; Reverse</title>
    <meta name="description" content="Free percentage calculator: find the percentage of a number, percentage increase or decrease, reverse percentage and X is what % of Y. All in one. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/percentage-calculator">
    <meta property="og:title" content="Percentage Calculator &mdash; Free 2026 | Patron Accounting"><meta property="og:description" content="All percentage calculations in one tool. Increase, decrease, reverse.">
    <meta property="og:type" content="website"><meta property="og:locale" content="en_IN"><meta property="og:url" content="/tools/percentage-calculator">
    <meta property="og:image" content="/tools/og-percentage-calculator.png"><meta property="og:image:width" content="1200"><meta property="og:image:height" content="630"><meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Percentage Calculator &mdash; Free 2026"><meta name="twitter:description" content="All percentage operations in one free tool.">
@endsection
@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"Percentage Calculator Online Free 2026","description":"Free online percentage calculator with 4 modes: find X percent of a number, what percent X is of Y, percentage increase or decrease between two values, and reverse percentage to find original from final. Instant results with formula shown for each calculation.","url":"/tools/percentage-calculator","applicationCategory":"UtilityApplication","operatingSystem":"Any","datePublished":"2026-03-07","dateModified":"2026-03-07","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Percentage Calculator","item":"/tools/percentage-calculator"}]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How to calculate percentage of a number?","acceptedAnswer":{"@type":"Answer","text":"Percentage of a number equals the percentage divided by 100 multiplied by the number. For example 18 percent of 5000 equals 18 divided by 100 times 5000 which is 900. This is commonly used for GST calculation where 18 percent GST on 5000 rupees equals 900 rupees tax."}},{"@type":"Question","name":"How to calculate percentage increase?","acceptedAnswer":{"@type":"Answer","text":"Percentage increase equals new value minus old value divided by old value multiplied by 100. For example salary increased from 50000 to 60000. Increase equals 60000 minus 50000 divided by 50000 times 100 equals 20 percent. This formula works for salary hikes price changes and growth rates."}},{"@type":"Question","name":"How to calculate percentage decrease?","acceptedAnswer":{"@type":"Answer","text":"Percentage decrease equals old value minus new value divided by old value times 100. For example stock dropped from 1000 to 800. Decrease equals 1000 minus 800 divided by 1000 times 100 equals 20 percent decrease. Used for discounts depreciation and decline analysis in financial statements."}},{"@type":"Question","name":"What percent is X of Y?","acceptedAnswer":{"@type":"Answer","text":"To find what percentage X is of Y divide X by Y and multiply by 100. For example 420 marks out of 500 total equals 420 divided by 500 times 100 equals 84 percent. This calculation is used for exam scores conversion rates profit margins and performance metrics in business and education."}},{"@type":"Question","name":"What is reverse percentage calculation?","acceptedAnswer":{"@type":"Answer","text":"Reverse percentage finds the original amount before a percentage was applied. Formula: original equals final amount divided by 1 plus percentage divided by 100. For example if price after 18 percent GST is 5900 rupees then original equals 5900 divided by 1.18 equals 5000 rupees. Useful for extracting base price from GST-inclusive amounts."}},{"@type":"Question","name":"How to convert fraction to percentage?","acceptedAnswer":{"@type":"Answer","text":"Divide the numerator by denominator and multiply by 100. For example 3 divided by 8 equals 0.375 times 100 equals 37.5 percent. Common fractions in Indian context: one quarter equals 25 percent, one third equals 33.33 percent, half equals 50 percent, three quarters equals 75 percent."}},{"@type":"Question","name":"How to calculate GST percentage?","acceptedAnswer":{"@type":"Answer","text":"GST is calculated as percentage of the taxable value. For 18 percent GST on 10000 rupees: CGST 9 percent equals 900 plus SGST 9 percent equals 900 total GST 1800 rupees. For interstate supply IGST 18 percent equals 1800 rupees. Use our GST Calculator for detailed GST breakups with CGST SGST and IGST split."}},{"@type":"Question","name":"What is percentage error?","acceptedAnswer":{"@type":"Answer","text":"Percentage error equals the absolute difference between measured value and actual value divided by actual value times 100. Used in science engineering and quality control to measure accuracy. In accounting percentage variance between budget and actual is calculated similarly to track financial performance deviations."}},{"@type":"Question","name":"How to calculate profit percentage?","acceptedAnswer":{"@type":"Answer","text":"Profit percentage equals profit divided by cost price times 100. For example bought at 800 sold at 1000. Profit is 200. Percentage equals 200 divided by 800 times 100 equals 25 percent profit. Note this differs from margin percentage which uses selling price as base: 200 divided by 1000 equals 20 percent margin."}},{"@type":"Question","name":"What is basis points vs percentage?","acceptedAnswer":{"@type":"Answer","text":"One basis point equals 0.01 percent or one hundredth of a percent. 100 basis points equal 1 percent. Used in banking and finance for precision. When RBI cuts repo rate by 25 basis points it means 0.25 percent reduction. Home loan rate change of 50 basis points means 0.50 percent change in your EMI interest rate."}},{"@type":"Question","name":"How to calculate marks percentage for CGPA?","acceptedAnswer":{"@type":"Answer","text":"For CGPA to percentage conversion the general formula used by most Indian universities is CGPA multiplied by 9.5. For example CGPA 8.2 times 9.5 equals 77.9 percent. Some universities use different multipliers. For raw marks percentage divide total marks obtained by maximum marks and multiply by 100."}},{"@type":"Question","name":"How to calculate discount percentage?","acceptedAnswer":{"@type":"Answer","text":"Discount percentage equals discount amount divided by original price times 100. For example item originally 2000 rupees selling at 1500. Discount is 500. Percentage equals 500 divided by 2000 times 100 equals 25 percent off. During sales always verify if the discount is on MRP or selling price."}},{"@type":"Question","name":"What is compound percentage change?","acceptedAnswer":{"@type":"Answer","text":"When percentages are applied sequentially the effect compounds and is not simply additive. A 10 percent increase followed by 10 percent decrease does NOT return to original. Starting from 100: plus 10 percent gives 110, then minus 10 percent gives 99. Net result is minus 1 percent. This matters for investment return calculations."}}]}</script>
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
.pct-section{background:var(--surface);border-radius:var(--radius);padding:20px;margin-bottom:16px;border:1px solid var(--border)}
.pct-section label{font-size:14px;font-weight:600;color:var(--text-secondary);display:block;margin-bottom:10px}
.pct-input{padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:16px;width:100px;text-align:center;outline:none;transition:border-color 0.2s;color:var(--text);background:var(--card)}
.pct-input:focus{border-color:var(--primary)}
.pct-result{margin-top:10px;font-size:17px;font-weight:700;color:var(--primary);min-height:28px}
.pct-formula{font-size:12px;color:var(--text-muted);margin-top:4px;font-family:var(--font-mono)}
.pct-calc-btn{padding:8px 20px;font-size:14px;margin-top:8px}
@media(max-width:600px){.tool-hero{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#calculator">Calculator</a><a href="#how-to-use">How to Use</a><a href="#formulas">Formulas</a><a href="#gst-pct">GST Percentages</a><a href="#common">Common Values</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>Percentage Calculator</nav> --}}
<header class="hero" id="calculator"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>Percentage Calculator &mdash; <span>All Operations</span> in One Tool</h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Four percentage calculations in one tool: find X% of a number, what percent X is of Y, percentage increase/decrease between two values, and reverse percentage (find original from GST-inclusive or marked-up price). Instant results with formula shown. Works for GST, salary hikes, exam scores, discounts, profit margins, and financial analysis.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>Calculate Percentage</h2>
    <noscript><div class="noscript-box">This tool requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="pct-section"><label>1. What is <input type="number" class="pct-input" id="p1a" placeholder="18"> % of <input type="number" class="pct-input" id="p1b" placeholder="5000" style="width:130px"> ?</label><button class="btn-calculate pct-calc-btn" onclick="c1()">Calculate</button><div class="pct-result" id="r1"></div></div>
    <div class="pct-section"><label>2. <input type="number" class="pct-input" id="p2a" placeholder="420" style="width:130px"> is what % of <input type="number" class="pct-input" id="p2b" placeholder="500" style="width:130px"> ?</label><button class="btn-calculate pct-calc-btn" onclick="c2()">Calculate</button><div class="pct-result" id="r2"></div></div>
    <div class="pct-section"><label>3. Percentage change from <input type="number" class="pct-input" id="p3a" placeholder="50000" style="width:130px"> to <input type="number" class="pct-input" id="p3b" placeholder="60000" style="width:130px"></label><button class="btn-calculate pct-calc-btn" onclick="c3()">Calculate</button><div class="pct-result" id="r3"></div></div>
    <div class="pct-section"><label>4. <input type="number" class="pct-input" id="p4a" placeholder="5900" style="width:130px"> is the amount after <input type="number" class="pct-input" id="p4b" placeholder="18"> % increase. Original?</label><button class="btn-calculate pct-calc-btn" onclick="c4()">Calculate</button><div class="pct-result" id="r4"></div></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use</h2><p>Four percentage operations in one tool. Enter values in any section and click Calculate. Results show the answer with the formula used. Useful for GST calculations, salary hikes, exam scores, discounts, and business math. Percentage calculations are fundamental to <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">income tax</a> slab computation, TDS rates, and depreciation under the IT Act.</p><div class="callout"><p><strong>CA Tip:</strong> Use section 4 (reverse percentage) to extract the base price from a GST-inclusive amount. For example if a bill shows &#8377;11,800 inclusive of 18% GST, the base price is &#8377;11,800 &divide; 1.18 = &#8377;10,000. This is essential for correct <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST</a> input tax credit calculations.</p></div></section>

<section class="content-section" id="formulas"><h2>Percentage Formulas</h2><div class="formula-box"><span class="label">X% of Y:</span> Answer = (X &divide; 100) &times; Y<br><br><span class="label">X is what % of Y:</span> Answer = (X &divide; Y) &times; 100<br><br><span class="label">% Change:</span> ((New &minus; Old) &divide; Old) &times; 100<br><br><span class="label">Reverse %:</span> Original = Final &divide; (1 + % &divide; 100)<br><br><span class="label">Margin vs Markup:</span><br>Markup % = Profit &divide; Cost Price &times; 100<br>Margin % = Profit &divide; Selling Price &times; 100</div></section>

<section class="content-section" id="gst-pct"><h2>GST Rate Percentages in India</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>GST Rate</th><th>CGST</th><th>SGST</th><th>Common Items</th></tr></thead><tbody>
<tr><td>5%</td><td>2.5%</td><td>2.5%</td><td>Packaged food, economy hotels, transport</td></tr>
<tr><td>12%</td><td>6%</td><td>6%</td><td>Processed food, business class hotels, IT services</td></tr>
<tr><td>18%</td><td>9%</td><td>9%</td><td>Most services, electronics, restaurants</td></tr>
<tr><td>28%</td><td>14%</td><td>14%</td><td>Luxury goods, cars, tobacco, aerated drinks</td></tr>
</tbody></table></div></section>

<section class="content-section" id="common"><h2>Common Percentage Conversions</h2><p>These conversions are useful across finance, banking, and everyday math. The <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> publishes interest rates in percentage and basis points &mdash; knowing conversions helps interpret rate changes quickly.</p><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Fraction</th><th>Decimal</th><th>Percentage</th></tr></thead><tbody>
<tr><td>1/4</td><td>0.25</td><td>25%</td></tr><tr><td>1/3</td><td>0.333</td><td>33.33%</td></tr><tr><td>1/2</td><td>0.50</td><td>50%</td></tr><tr><td>2/3</td><td>0.667</td><td>66.67%</td></tr><tr><td>3/4</td><td>0.75</td><td>75%</td></tr><tr><td>1/5</td><td>0.20</td><td>20%</td></tr><tr><td>1/8</td><td>0.125</td><td>12.5%</td></tr>
</tbody></table></div></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need accounting help?</strong> Our CAs handle GST, income tax, profit calculations, and financial reporting. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20accounting%20help." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA &rarr;</a></p></div>
<section class="content-section" id="faqs"><h2>Frequently Asked Questions</h2><div id="faqList"></div></section>
</div><aside class="sidebar-col">
    <div class="cta-card"><h3>Need Tax Help?</h3><p>Our CAs help with tax planning, ITR filing &amp; compliance across India.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20tax%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div>
    <div class="sidebar-card"><h3>Popular Tools</h3><a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a><a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a><a href="/tools/age-calculator" class="sidebar-link">Age Calculator <span class="arrow">&rarr;</span></a><a href="/tools/date-difference-calculator" class="sidebar-link">Date Difference <span class="arrow">&rarr;</span></a><a href="/tools/emi-calculator" class="sidebar-link">EMI Calculator <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div>
</aside></div>
<script>
function n(id){return parseFloat(document.getElementById(id).value);}
function c1(){var a=n('p1a'),b=n('p1b');if(isNaN(a)||isNaN(b))return;var r=(a/100)*b;document.getElementById('r1').innerHTML=a+'% of '+b.toLocaleString('en-IN')+' = <strong>'+r.toLocaleString('en-IN',{maximumFractionDigits:2})+'</strong><div class="pct-formula">('+a+' ÷ 100) × '+b+' = '+r.toFixed(2)+'</div>';}
function c2(){var a=n('p2a'),b=n('p2b');if(isNaN(a)||isNaN(b)||b===0)return;var r=(a/b)*100;document.getElementById('r2').innerHTML=a.toLocaleString('en-IN')+' is <strong>'+r.toFixed(2)+'%</strong> of '+b.toLocaleString('en-IN')+'<div class="pct-formula">('+a+' ÷ '+b+') × 100 = '+r.toFixed(2)+'%</div>';}
function c3(){var a=n('p3a'),b=n('p3b');if(isNaN(a)||isNaN(b)||a===0)return;var r=((b-a)/a)*100;var d=r>=0?'increase':'decrease';document.getElementById('r3').innerHTML='<strong style="color:'+(r>=0?'var(--success)':'var(--danger)')+'">'+Math.abs(r).toFixed(2)+'% '+d+'</strong><div class="pct-formula">(('+b.toLocaleString('en-IN')+' − '+a.toLocaleString('en-IN')+') ÷ '+a.toLocaleString('en-IN')+') × 100</div>';}
function c4(){var a=n('p4a'),b=n('p4b');if(isNaN(a)||isNaN(b))return;var r=a/(1+b/100);document.getElementById('r4').innerHTML='Original = <strong>₹'+r.toLocaleString('en-IN',{maximumFractionDigits:2})+'</strong><div class="pct-formula">'+a.toLocaleString('en-IN')+' ÷ '+(1+b/100).toFixed(4)+' = '+r.toFixed(2)+'</div>';}
var FAQS=[
{q:"How to calculate percentage of a number?",a:"Percentage of a number equals the percentage divided by 100 multiplied by the number. For example 18 percent of 5000 equals 18 divided by 100 times 5000 which is 900. This is commonly used for GST calculation where 18 percent GST on 5000 rupees equals 900 rupees tax."},
{q:"How to calculate percentage increase?",a:"Percentage increase equals new value minus old value divided by old value multiplied by 100. For example salary increased from 50000 to 60000. Increase equals 60000 minus 50000 divided by 50000 times 100 equals 20 percent. This formula works for salary hikes price changes and growth rates."},
{q:"How to calculate percentage decrease?",a:"Percentage decrease equals old value minus new value divided by old value times 100. For example stock dropped from 1000 to 800. Decrease equals 1000 minus 800 divided by 1000 times 100 equals 20 percent decrease. Used for discounts depreciation and decline analysis in financial statements."},
{q:"What percent is X of Y?",a:"To find what percentage X is of Y divide X by Y and multiply by 100. For example 420 marks out of 500 total equals 420 divided by 500 times 100 equals 84 percent. This calculation is used for exam scores conversion rates profit margins and performance metrics in business and education."},
{q:"What is reverse percentage calculation?",a:"Reverse percentage finds the original amount before a percentage was applied. Formula: original equals final amount divided by 1 plus percentage divided by 100. For example if price after 18 percent GST is 5900 rupees then original equals 5900 divided by 1.18 equals 5000 rupees. Useful for extracting base price from GST-inclusive amounts."},
{q:"How to convert fraction to percentage?",a:"Divide the numerator by denominator and multiply by 100. For example 3 divided by 8 equals 0.375 times 100 equals 37.5 percent. Common fractions in Indian context: one quarter equals 25 percent, one third equals 33.33 percent, half equals 50 percent, three quarters equals 75 percent."},
{q:"How to calculate GST percentage?",a:"GST is calculated as percentage of the taxable value. For 18 percent GST on 10000 rupees: CGST 9 percent equals 900 plus SGST 9 percent equals 900 total GST 1800 rupees. For interstate supply IGST 18 percent equals 1800 rupees. Use our GST Calculator for detailed GST breakups with CGST SGST and IGST split."},
{q:"What is percentage error?",a:"Percentage error equals the absolute difference between measured value and actual value divided by actual value times 100. Used in science engineering and quality control to measure accuracy. In accounting percentage variance between budget and actual is calculated similarly to track financial performance deviations."},
{q:"How to calculate profit percentage?",a:"Profit percentage equals profit divided by cost price times 100. For example bought at 800 sold at 1000. Profit is 200. Percentage equals 200 divided by 800 times 100 equals 25 percent profit. Note this differs from margin percentage which uses selling price as base: 200 divided by 1000 equals 20 percent margin."},
{q:"What is basis points vs percentage?",a:"One basis point equals 0.01 percent or one hundredth of a percent. 100 basis points equal 1 percent. Used in banking and finance for precision. When RBI cuts repo rate by 25 basis points it means 0.25 percent reduction. Home loan rate change of 50 basis points means 0.50 percent change in your EMI interest rate."},
{q:"How to calculate marks percentage for CGPA?",a:"For CGPA to percentage conversion the general formula used by most Indian universities is CGPA multiplied by 9.5. For example CGPA 8.2 times 9.5 equals 77.9 percent. Some universities use different multipliers. For raw marks percentage divide total marks obtained by maximum marks and multiply by 100."},
{q:"How to calculate discount percentage?",a:"Discount percentage equals discount amount divided by original price times 100. For example item originally 2000 rupees selling at 1500. Discount is 500. Percentage equals 500 divided by 2000 times 100 equals 25 percent off. During sales always verify if the discount is on MRP or selling price."},
{q:"What is compound percentage change?",a:"When percentages are applied sequentially the effect compounds and is not simply additive. A 10 percent increase followed by 10 percent decrease does NOT return to original. Starting from 100: plus 10 percent gives 110, then minus 10 percent gives 99. Net result is minus 1 percent. This matters for investment return calculations."}
];

function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});

</script>
@endsection