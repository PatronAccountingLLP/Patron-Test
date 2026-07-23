@extends('layouts.app')
@section('meta')
    <title>EMI Calculator | Home, Car, Personal &amp; Education Loan</title>
    <meta name="description" content="Free EMI calculator: find monthly EMI for home, car, personal and education loans with full amortization schedule and interest vs principal breakup. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/emi-calculator">
    <meta property="og:title" content="EMI Calculator &mdash; Free Loan EMI Calculator 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate loan EMI instantly. Home, car, personal loans. Amortization schedule and interest breakup.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/emi-calculator">
    <meta property="og:image" content="/tools/og-emi-calculator.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="EMI Calculator &mdash; Free Loan EMI Calculator 2026">
    <meta name="twitter:description" content="Calculate EMI for any loan. Free tool with amortization schedule.">
    <meta name="twitter:image" content="/tools/og-emi-calculator.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"EMI Calculator - Loan EMI Calculator India 2026","description":"Free online EMI calculator for home loans, car loans, personal loans, and education loans. Enter principal amount, interest rate, and tenure to get monthly EMI, total interest payable, and complete year-wise amortization schedule with principal and interest breakup.","url":"/tools/emi-calculator","applicationCategory":"FinanceApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"EMI Calculator","item":"/tools/emi-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is EMI and how is it calculated?","acceptedAnswer":{"@type":"Answer","text":"EMI stands for Equated Monthly Instalment. It is the fixed monthly payment made to repay a loan. EMI is calculated using the formula: EMI = P times r times (1+r)^n divided by ((1+r)^n minus 1), where P is principal, r is monthly interest rate, and n is number of months. Each EMI includes both principal repayment and interest."}},{"@type":"Question","name":"What factors affect the EMI amount?","acceptedAnswer":{"@type":"Answer","text":"Three factors determine EMI: loan principal amount (higher amount means higher EMI), interest rate (higher rate increases EMI), and loan tenure in months (longer tenure reduces EMI but increases total interest). Even a 0.5 percent rate difference can significantly impact total interest over a 20 year home loan."}},{"@type":"Question","name":"How does loan tenure affect total interest paid?","acceptedAnswer":{"@type":"Answer","text":"Longer tenure reduces monthly EMI but significantly increases total interest paid. For example a 50 lakh home loan at 8.5 percent for 20 years costs about 52.5 lakh in interest while the same loan for 30 years costs about 88 lakh in interest. The extra 10 years add roughly 35 lakh in interest payments."}},{"@type":"Question","name":"What is the current home loan interest rate in India?","acceptedAnswer":{"@type":"Answer","text":"Home loan interest rates in India typically range from 8.25 percent to 9.5 percent per annum as of 2026. Rates vary by lender, loan amount, borrower profile, and whether the rate is fixed or floating. SBI HDFC Bank and ICICI Bank offer competitive rates. RBI repo rate changes directly affect floating rate home loans."}},{"@type":"Question","name":"Can I get tax benefit on EMI payments?","acceptedAnswer":{"@type":"Answer","text":"For home loans: principal repayment qualifies under Section 80C up to 1.5 lakh and interest payment qualifies under Section 24b up to 2 lakh for self-occupied property. Education loan interest is deductible under Section 80E with no upper limit for up to 8 years. Car and personal loan EMIs do not get tax benefits."}},{"@type":"Question","name":"What is an amortization schedule?","acceptedAnswer":{"@type":"Answer","text":"An amortization schedule shows the month-wise or year-wise breakup of each EMI payment into principal and interest components. In initial years a larger portion goes towards interest. As the loan matures more of each EMI goes towards principal repayment. This schedule helps plan prepayments and understand total cost."}},{"@type":"Question","name":"Should I choose a longer or shorter loan tenure?","acceptedAnswer":{"@type":"Answer","text":"Shorter tenure means higher EMI but much less total interest paid. Longer tenure gives lower EMI but significantly higher total cost. Choose based on your monthly cash flow. A good strategy is to take a longer tenure for lower EMI but make partial prepayments whenever possible to reduce both tenure and total interest."}},{"@type":"Question","name":"What is the difference between flat and reducing balance EMI?","acceptedAnswer":{"@type":"Answer","text":"Flat rate calculates interest on the original loan amount throughout the tenure. Reducing balance calculates interest only on the outstanding principal which decreases with each EMI payment. Most banks in India use the reducing balance method which results in lower effective interest. This calculator uses the reducing balance method."}},{"@type":"Question","name":"How does prepayment affect my loan?","acceptedAnswer":{"@type":"Answer","text":"Prepayment reduces the outstanding principal which can either reduce remaining tenure keeping EMI same or reduce EMI keeping tenure same. For home loans, RBI has mandated that floating rate loans should not have prepayment penalties. Even small annual prepayments of 1 to 2 lakh can save several lakh in interest over the loan life."}},{"@type":"Question","name":"What is the EMI for a 50 lakh home loan?","acceptedAnswer":{"@type":"Answer","text":"For a 50 lakh home loan at 8.5 percent for 20 years, the monthly EMI is approximately 43,391 rupees. Total interest paid over 20 years would be about 54.14 lakh making the total repayment around 1.04 crore. The exact EMI varies based on the interest rate and tenure. Use the calculator above for precise computation."}},{"@type":"Question","name":"Can I calculate EMI for different loan types?","acceptedAnswer":{"@type":"Answer","text":"Yes this calculator works for all loan types including home loans, car loans, personal loans, education loans, business loans, and gold loans. The EMI formula is the same regardless of loan type. Simply enter the loan amount, interest rate applicable for that loan type, and the desired tenure to get the EMI."}},{"@type":"Question","name":"What happens if I miss an EMI payment?","acceptedAnswer":{"@type":"Answer","text":"Missing EMI payments attracts late payment charges typically 1 to 2 percent of the overdue amount. It also negatively impacts your CIBIL credit score making future loan approvals difficult. Continuous defaults can lead to the loan being classified as NPA and the lender may initiate recovery proceedings or property auction for secured loans."}},{"@type":"Question","name":"How to reduce EMI on existing loan?","acceptedAnswer":{"@type":"Answer","text":"Options include: refinancing or balance transfer to a lender offering lower interest rate, making partial prepayments to reduce outstanding principal, negotiating with current lender for rate reduction, extending loan tenure to spread payments, and switching from fixed to floating rate if market rates have decreased significantly."}}]}
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


/* Tool-specific: EMI Calculator */
.emi-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.emi-box{border-radius:var(--radius);padding:20px;text-align:center}
.emi-box.monthly{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.emi-box.interest{background:linear-gradient(135deg,#dc2626,#ef4444);color:#fff}
.emi-box.total{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.emi-box .eb-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.emi-box .eb-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.emi-box .eb-sub{font-size:11px;opacity:.8;margin-top:2px}
.pie-wrap{display:flex;align-items:center;justify-content:center;gap:24px;margin:20px 0;flex-wrap:wrap}
.pie-chart{width:180px;height:180px;border-radius:50%;position:relative}
.pie-legend{display:flex;flex-direction:column;gap:10px}
.pie-legend-item{display:flex;align-items:center;gap:8px;font-size:14px;font-weight:500}
.pie-legend-item .dot{width:14px;height:14px;border-radius:4px;flex-shrink:0}
.slider-group{margin-bottom:20px}
.slider-group label{display:block;font-size:13px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:.5px}
.slider-row{display:flex;align-items:center;gap:12px}
.slider-row input[type="range"]{flex:1;-webkit-appearance:none;height:6px;border-radius:3px;background:var(--border);outline:none}
.slider-row input[type="range"]::-webkit-slider-thumb{-webkit-appearance:none;width:20px;height:20px;border-radius:50%;background:var(--primary);cursor:pointer;border:3px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,0.2)}
.slider-row .slider-val{min-width:110px;padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--card);text-align:right;outline:none;transition:border-color 0.2s}
.slider-row .slider-val:focus{border-color:var(--primary)}
.amort-toggle{display:inline-flex;align-items:center;gap:8px;padding:10px 18px;border:1.5px solid var(--border);border-radius:8px;background:var(--card);font-family:var(--font-body);font-size:14px;font-weight:600;color:var(--primary);cursor:pointer;transition:all 0.2s;margin-top:12px}
.amort-toggle:hover{border-color:var(--primary);background:var(--surface)}
.amort-table{max-height:400px;overflow-y:auto;margin-top:12px;border:1px solid var(--border);border-radius:var(--radius)}
.amort-table table{width:100%;border-collapse:collapse;font-size:13px}
.amort-table th{background:var(--primary-dark);color:#fff;padding:10px 12px;text-align:right;font-weight:600;font-size:11px;text-transform:uppercase;letter-spacing:.3px;position:sticky;top:0}
.amort-table th:first-child{text-align:center}
.amort-table td{padding:8px 12px;border-bottom:1px solid var(--border);text-align:right;font-family:var(--font-mono);font-size:12px}
.amort-table td:first-child{text-align:center;font-family:var(--font-body);font-weight:600}
.amort-table tr:nth-child(even){background:var(--surface)}
@media(max-width:600px){.emi-hero{grid-template-columns:1fr}.pie-wrap{flex-direction:column}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">EMI Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#formula">EMI Formula</a>
        <a href="#loan-types">Loan Types</a>
        <a href="#tips">Tips</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

{{-- <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>&rsaquo;</span>
    <a href="/tools/">Free Tools</a><span>&rsaquo;</span>
    EMI Calculator
</nav> --}}

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>EMI Calculator &mdash; <span>Loan EMI</span> for Home, Car &amp; Personal Loans</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Calculate your monthly EMI instantly for any loan &mdash; home, car, personal, or education. Enter the loan amount, interest rate, and tenure using sliders or input fields. Get the monthly EMI, total interest payable, total repayment amount, a visual principal vs interest breakup, and a complete year-wise amortization schedule. Uses the standard reducing balance method used by all Indian banks.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Your Loan EMI</h2>
            <noscript><div class="noscript-box">This calculator requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a> for help.</div></noscript>

            <div class="form-group">
                <label>Loan Type</label>
                <div class="toggle-group" id="loanType">
                    <button type="button" class="toggle-btn active" data-val="home" onclick="setLoan(this)">Home Loan<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">8&ndash;10%</small></button>
                    <button type="button" class="toggle-btn" data-val="car" onclick="setLoan(this)">Car Loan<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">8&ndash;12%</small></button>
                    <button type="button" class="toggle-btn" data-val="personal" onclick="setLoan(this)">Personal<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">10&ndash;18%</small></button>
                    <button type="button" class="toggle-btn" data-val="education" onclick="setLoan(this)">Education<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">8&ndash;12%</small></button>
                </div>
            </div>

            <div class="slider-group">
                <label>Loan Amount (&#8377;)</label>
                <div class="slider-row">
                    <input type="range" id="sliderAmt" min="100000" max="50000000" step="100000" value="5000000" oninput="syncSlider('amt')">
                    <input type="text" class="slider-val" id="valAmt" value="50,00,000" oninput="syncInput('amt')">
                </div>
            </div>

            <div class="slider-group">
                <label>Interest Rate (% per annum)</label>
                <div class="slider-row">
                    <input type="range" id="sliderRate" min="1" max="30" step="0.1" value="8.5" oninput="syncSlider('rate')">
                    <input type="text" class="slider-val" id="valRate" value="8.5" style="min-width:80px" oninput="syncInput('rate')">
                </div>
            </div>

            <div class="slider-group">
                <label>Loan Tenure</label>
                <div class="slider-row">
                    <input type="range" id="sliderTenure" min="6" max="360" step="6" value="240" oninput="syncSlider('tenure')">
                    <input type="text" class="slider-val" id="valTenure" value="240" style="min-width:80px" oninput="syncInput('tenure')">
                    <span style="font-size:13px;color:var(--text-muted);white-space:nowrap" id="tenureYears">20 yrs</span>
                </div>
            </div>

            <button class="btn-calculate" onclick="calcEMI()">Calculate EMI</button>
            <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>

            <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the EMI Calculator</h2>
            <p>This calculator uses the standard reducing balance EMI formula used by all major Indian banks including SBI, HDFC Bank, ICICI Bank, and others as regulated by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a>.</p>
            <h3>Step 1 &mdash; Select Loan Type</h3>
            <p>Choose from Home Loan, Car Loan, Personal Loan, or Education Loan. This auto-sets a typical interest rate, but you can adjust it manually.</p>
            <h3>Step 2 &mdash; Adjust Sliders or Enter Values</h3>
            <p>Use the sliders or type directly to set loan amount (up to &#8377;5 crore), interest rate (1&ndash;30%), and tenure (6&ndash;360 months). Values sync in real-time.</p>
            <h3>Step 3 &mdash; View Results</h3>
            <p>Get monthly EMI, total interest, total repayment, visual pie chart of principal vs interest, and a year-wise amortization schedule showing how each year&rsquo;s payments split between principal repayment and interest.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> For home loans, the interest component of EMI qualifies for tax deduction under <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Section 24(b)</a> up to &#8377;2 lakh for self-occupied property. The principal component qualifies under Section 80C up to &#8377;1.5 lakh. Education loan interest is deductible under Section 80E with no upper limit. Factor these tax savings when comparing loan options.</p>
            </div>
        </section>

        <section class="content-section" id="formula">
            <h2>EMI Calculation Formula</h2>
            <p>The EMI is calculated using the standard reducing balance method:</p>
            <div class="formula-box">
                <span class="label">EMI Formula:</span><br>
                EMI = P &times; r &times; (1+r)<sup>n</sup> &divide; ((1+r)<sup>n</sup> &minus; 1)<br><br>
                <span class="label">Where:</span><br>
                P = Principal loan amount<br>
                r = Monthly interest rate (annual rate &divide; 12 &divide; 100)<br>
                n = Total number of monthly instalments<br><br>
                <span class="label">Example (&#8377;50L, 8.5%, 20 years):</span><br>
                r = 8.5 &divide; 12 &divide; 100 = 0.007083<br>
                n = 20 &times; 12 = 240 months<br>
                EMI = 50,00,000 &times; 0.007083 &times; (1.007083)<sup>240</sup> &divide; ((1.007083)<sup>240</sup> &minus; 1)<br>
                EMI = <span class="label">&#8377;43,391 per month</span>
            </div>
            <p>In the early years, a larger portion of EMI goes towards interest. As the outstanding principal reduces, more of each EMI contributes to principal repayment. This is clearly visible in the amortization schedule generated by the calculator.</p>
        </section>

        <section class="content-section" id="loan-types">
            <h2>Loan Types &amp; Typical Interest Rates in India</h2>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Loan Type</th><th>Rate Range</th><th>Max Tenure</th><th>Tax Benefit</th></tr></thead>
                <tbody>
                    <tr><td>Home Loan</td><td>8.25% &ndash; 9.50%</td><td>30 years</td><td>Sec 24(b) + 80C</td></tr>
                    <tr><td>Car Loan</td><td>8.50% &ndash; 12%</td><td>7 years</td><td>No (business use exception)</td></tr>
                    <tr><td>Personal Loan</td><td>10% &ndash; 18%</td><td>5 years</td><td>No</td></tr>
                    <tr><td>Education Loan</td><td>8% &ndash; 12%</td><td>15 years</td><td>Sec 80E (interest only)</td></tr>
                    <tr><td>Gold Loan</td><td>7% &ndash; 15%</td><td>3 years</td><td>No</td></tr>
                    <tr><td>Business Loan</td><td>10% &ndash; 20%</td><td>5 years</td><td>Business expense deduction</td></tr>
                </tbody>
            </table>
            </div>
            <p>Rates are indicative and vary by lender, credit score, and market conditions. Check the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI website</a> for current repo rate which directly affects floating-rate loans. Rates sourced from major banks as of March 2026.</p>
        </section>

        <section class="content-section" id="tips">
            <h2>Smart Loan Repayment Tips</h2>
            <ul>
                <li><strong>Make partial prepayments:</strong> Even &#8377;50,000&ndash;1 lakh annually can save several lakh in interest and reduce tenure by years. RBI mandates no prepayment penalty on floating-rate home loans.</li>
                <li><strong>Choose shorter tenure:</strong> A 15-year home loan saves ~&#8377;20 lakh in interest vs a 25-year loan on &#8377;50 lakh at 8.5%.</li>
                <li><strong>Compare lenders:</strong> A 0.5% rate difference on a &#8377;50L home loan over 20 years saves ~&#8377;5 lakh. Always negotiate.</li>
                <li><strong>Consider balance transfer:</strong> If another bank offers a significantly lower rate, transfer the loan. Ensure the savings exceed transfer costs.</li>
                <li><strong>Maintain good CIBIL score:</strong> A score above 750 gets you the best rates. Pay all EMIs on time and keep credit utilisation below 30%.</li>
            </ul>
            <div class="callout green">
                <p><strong>Expert Tip:</strong> Use the &ldquo;step-up EMI&rdquo; strategy: start with a longer tenure (lower EMI), then increase EMI by 5&ndash;10% each year as income grows. This naturally reduces tenure and total interest without straining your budget initially. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20loan%20planning%20and%20tax%20optimization." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to our CA team &rarr;</a></p>
            </div>
        </section>

        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need financial planning help?</strong> Our CAs assist with loan structuring, tax-optimized borrowing, and home loan tax benefits under Section 24(b) and 80C. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20EMI%20Calculator.%20I%20need%20financial%20planning%20help." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions &mdash; EMI &amp; Loans</h2>
            <div id="faqList"></div>
        </section>
    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Need Financial Help?</h3>
            <p>Our CAs help with loan tax benefits, financial planning &amp; compliance for individuals and businesses.</p>
            <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20financial%20planning%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>Services</h3>
            <a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a>
            <a href="/tax-planning-and-advisory" class="sidebar-link">Tax Planning <span class="arrow">&rarr;</span></a>
            <a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting &amp; Bookkeeping <span class="arrow">&rarr;</span></a>
            <a href="/payroll-management" class="sidebar-link">Payroll Management <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/sip-calculator" class="sidebar-link">SIP Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/fd-calculator" class="sidebar-link">FD Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/hra-calculator" class="sidebar-link">HRA Calculator <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
        </div>
    </aside>
</div>

<script>
var DEFAULTS={home:{amt:5000000,rate:8.5,tenure:240},car:{amt:800000,rate:9.5,tenure:60},personal:{amt:500000,rate:14,tenure:36},education:{amt:1000000,rate:9,tenure:84}};

function setLoan(btn){
var g=document.getElementById('loanType');g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');
var v=btn.getAttribute('data-val'),d=DEFAULTS[v];
document.getElementById('sliderAmt').value=d.amt;document.getElementById('valAmt').value=d.amt.toLocaleString('en-IN');
document.getElementById('sliderRate').value=d.rate;document.getElementById('valRate').value=d.rate;
document.getElementById('sliderTenure').value=d.tenure;document.getElementById('valTenure').value=d.tenure;
document.getElementById('tenureYears').textContent=Math.floor(d.tenure/12)+' yrs'+(d.tenure%12?' '+d.tenure%12+' mo':'');
}
function setTg(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');}

function syncSlider(type){
if(type==='amt'){var v=parseInt(document.getElementById('sliderAmt').value);document.getElementById('valAmt').value=v.toLocaleString('en-IN');}
else if(type==='rate'){document.getElementById('valRate').value=document.getElementById('sliderRate').value;}
else{var t=parseInt(document.getElementById('sliderTenure').value);document.getElementById('valTenure').value=t;document.getElementById('tenureYears').textContent=Math.floor(t/12)+' yrs'+(t%12?' '+t%12+' mo':'');}
}
function syncInput(type){
if(type==='amt'){var v=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;document.getElementById('sliderAmt').value=v;document.getElementById('valAmt').value=v?v.toLocaleString('en-IN'):'';}
else if(type==='rate'){var r=parseFloat(document.getElementById('valRate').value)||0;document.getElementById('sliderRate').value=r;}
else{var t=parseInt(document.getElementById('valTenure').value)||0;document.getElementById('sliderTenure').value=t;document.getElementById('tenureYears').textContent=Math.floor(t/12)+' yrs'+(t%12?' '+t%12+' mo':'');}
}
function fmt(n){return'\u20B9'+Math.round(n).toLocaleString('en-IN');}

function resetForm(){setLoan(document.querySelector('#loanType .toggle-btn'));document.getElementById('resPanel').classList.remove('visible');}

function calcEMI(){
var P=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;
var annRate=parseFloat(document.getElementById('valRate').value)||0;
var n=parseInt(document.getElementById('valTenure').value)||0;
if(!P||!annRate||!n){alert('Please enter loan amount, interest rate, and tenure.');return;}
var r=annRate/12/100;
var emi=P*r*Math.pow(1+r,n)/(Math.pow(1+r,n)-1);
emi=Math.round(emi);
var totalPay=emi*n;
var totalInt=totalPay-P;
var intPct=Math.round(totalInt/totalPay*100);
var priPct=100-intPct;

var h='';
// Hero boxes
h+='<div class="emi-hero">';
h+='<div class="emi-box monthly"><div class="eb-label">Monthly EMI</div><div class="eb-value">'+fmt(emi)+'</div><div class="eb-sub">per month</div></div>';
h+='<div class="emi-box interest"><div class="eb-label">Total Interest</div><div class="eb-value">'+fmt(totalInt)+'</div><div class="eb-sub">'+intPct+'% of total payment</div></div>';
h+='<div class="emi-box total"><div class="eb-label">Total Payment</div><div class="eb-value">'+fmt(totalPay)+'</div><div class="eb-sub">Principal + Interest</div></div>';
h+='</div>';

// Pie chart (CSS conic-gradient)
h+='<div class="pie-wrap">';
h+='<div class="pie-chart" style="background:conic-gradient(var(--primary) 0deg '+Math.round(priPct*3.6)+'deg, #dc2626 '+Math.round(priPct*3.6)+'deg 360deg)"></div>';
h+='<div class="pie-legend">';
h+='<div class="pie-legend-item"><span class="dot" style="background:var(--primary)"></span> Principal: '+fmt(P)+' ('+priPct+'%)</div>';
h+='<div class="pie-legend-item"><span class="dot" style="background:#dc2626"></span> Interest: '+fmt(totalInt)+' ('+intPct+'%)</div>';
h+='</div></div>';

// Summary card
h+='<div class="res-card"><div class="res-card-hd"><h3>Loan Summary</h3><span class="res-badge info">Details</span></div><div class="res-card-bd"><table class="cmp-table">';
h+='<tr><td>Loan Amount</td><td><strong>'+fmt(P)+'</strong></td></tr>';
h+='<tr><td>Interest Rate</td><td><strong>'+annRate+'% p.a.</strong></td></tr>';
h+='<tr><td>Tenure</td><td><strong>'+n+' months ('+Math.floor(n/12)+' yrs'+(n%12?' '+n%12+' mo':'')+')</strong></td></tr>';
h+='<tr><td>Monthly EMI</td><td style="font-size:18px;color:var(--primary)"><strong>'+fmt(emi)+'</strong></td></tr>';
h+='<tr><td>Total Interest Payable</td><td class="neg">'+fmt(totalInt)+'</td></tr>';
h+='<tr><td>Total Amount Payable</td><td><strong>'+fmt(totalPay)+'</strong></td></tr>';
h+='</table></div></div>';

// Year-wise amortization
var years=Math.ceil(n/12);
h+='<div class="res-card"><div class="res-card-hd"><h3>Year-Wise Amortization</h3><span class="res-badge teal">Schedule</span></div><div class="res-card-bd">';
h+='<div class="amort-table"><table><thead><tr><th>Year</th><th>Principal Paid</th><th>Interest Paid</th><th>Total Paid</th><th>Balance</th></tr></thead><tbody>';

var balance=P;
for(var y=1;y<=years;y++){
var yPri=0,yInt=0,months=y===years?(n-(years-1)*12):12;
for(var m=0;m<months;m++){
var mInt=balance*r;
var mPri=emi-mInt;
if(mPri>balance){mPri=balance;mInt=emi-mPri;}
yPri+=mPri;yInt+=mInt;balance-=mPri;
if(balance<0)balance=0;
}
h+='<tr><td>'+y+'</td><td>'+fmt(yPri)+'</td><td>'+fmt(yInt)+'</td><td>'+fmt(yPri+yInt)+'</td><td>'+fmt(balance)+'</td></tr>';
}
h+='</tbody></table></div></div></div>';

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20EMI%20Calculator.%20I%20need%20help%20with%20loan%20planning.%20Please%20connect%20me%20with%20a%20CA." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/income-tax-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg> Income Tax Calculator</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What is EMI and how is it calculated?",a:"EMI = Equated Monthly Instalment. Formula: P \u00D7 r \u00D7 (1+r)^n \u00F7 ((1+r)^n \u2212 1). P = principal, r = monthly rate (annual/12/100), n = months. Each EMI has principal + interest components. Uses reducing balance method."},
{q:"What factors affect EMI amount?",a:"Three factors: loan amount (higher = higher EMI), interest rate (higher = higher EMI), tenure (longer = lower EMI but more total interest). Even 0.5% rate difference significantly impacts total interest over 20 years."},
{q:"How does tenure affect total interest?",a:"\u20B950L at 8.5% for 20 yrs = ~\u20B952.5L interest. Same for 30 yrs = ~\u20B988L interest. Extra 10 years adds ~\u20B935L in interest. Shorter tenure = higher EMI but much less total cost."},
{q:"What is current home loan rate in India?",a:"Typically 8.25%\u20139.5% p.a. as of 2026. Varies by lender, amount, credit score, and fixed/floating choice. RBI repo rate changes directly affect floating rates. Compare multiple banks."},
{q:"Can I get tax benefit on EMI?",a:"Home loans: principal under 80C (\u20B91.5L) + interest under 24(b) (\u20B92L). Education loan interest under 80E (no limit, 8 years). Car and personal loan EMIs have no tax benefit."},
{q:"What is an amortization schedule?",a:"Month/year-wise breakup of each EMI into principal and interest. Early years: more interest. Later years: more principal. Helps plan prepayments and understand true loan cost."},
{q:"Should I choose longer or shorter tenure?",a:"Shorter = higher EMI, much less total interest. Longer = lower EMI, higher total cost. Strategy: take longer tenure, make voluntary prepayments when possible. Best of both worlds."},
{q:"What is flat vs reducing balance?",a:"Flat: interest on original amount throughout. Reducing: interest on outstanding balance (decreases each month). All Indian banks use reducing balance. This calculator uses reducing balance."},
{q:"How does prepayment help?",a:"Reduces outstanding principal, cutting either tenure or EMI. RBI: no prepayment penalty on floating-rate home loans. Even \u20B91\u20132L annual prepayment saves several lakh over loan life."},
{q:"What is EMI for \u20B950L home loan?",a:"\u20B950L at 8.5% for 20 yrs = ~\u20B943,391/month. Total interest = ~\u20B954.14L. Total repayment = ~\u20B91.04 crore. Use the calculator above for exact numbers at your rate."},
{q:"Can I calculate EMI for different loans?",a:"Yes. Works for home, car, personal, education, business, gold loans. Formula is same. Just enter your specific amount, rate, and tenure. Select loan type for typical defaults."},
{q:"What if I miss an EMI payment?",a:"Late charges of 1\u20132% of overdue amount. Negatively impacts CIBIL score. Continuous defaults = NPA classification, recovery proceedings, property auction for secured loans. Always pay on time."},
{q:"How to reduce EMI on existing loan?",a:"Options: balance transfer to lower-rate lender, partial prepayments, negotiate rate reduction, extend tenure, switch fixed to floating if rates dropped. Compare transfer costs vs savings."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcEMI();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection