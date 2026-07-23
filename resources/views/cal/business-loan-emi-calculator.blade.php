@extends('layouts.app')
@section('meta')
    <title>Business Loan EMI Calculator | MSME &amp; Term Loan</title>
    <meta name="description" content="Free business loan EMI calculator: get EMI, total interest and cost for MSME, term, Mudra and working capital loans, plus year-wise amortization. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/business-loan-emi-calculator">
    <meta property="og:title" content="Business Loan EMI Calculator — Free Tool 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate business loan EMI. MSME, term, working capital loans. Amortization schedule and interest breakup.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/business-loan-emi-calculator">
    <meta property="og:image" content="/tools/og-business-loan-emi-calculator.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Business Loan EMI Calculator — Free Tool 2026">
    <meta name="twitter:description" content="Calculate business loan EMI with amortization. MSME, term, working capital loans.">
    <meta name="twitter:image" content="/tools/og-business-loan-emi-calculator.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"Business Loan EMI Calculator India 2026","description":"Free online business loan EMI calculator for MSME term loans, working capital loans, Mudra loans, and equipment financing. Enter loan amount, interest rate, tenure, and optional processing fee to get monthly EMI, total interest, total cost, year-wise amortization, and tax deduction guidance for business loan interest.","url":"/tools/business-loan-emi-calculator","applicationCategory":"FinanceApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Business Loan EMI Calculator","item":"/tools/business-loan-emi-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is the interest rate on business loans in India?","acceptedAnswer":{"@type":"Answer","text":"Business loan interest rates in India range from 10 to 24 percent per annum depending on the lender, loan type, business vintage, turnover, credit score, and collateral. Banks offer 10 to 18 percent while NBFCs charge 14 to 24 percent. MUDRA loans under PMMY are available at 8 to 12 percent. MSME loans from PSU banks start from 9.5 percent."}},{"@type":"Question","name":"Can business loan interest be claimed as tax deduction?","acceptedAnswer":{"@type":"Answer","text":"Yes business loan interest is fully deductible as a business expense under Section 36(1)(iii) of the Income Tax Act. There is no upper limit on the deduction. The interest must be on a loan used wholly for business purposes. Processing fees and other loan charges are also deductible. This reduces your taxable business income by the full interest amount."}},{"@type":"Question","name":"What is the maximum tenure for business loans?","acceptedAnswer":{"@type":"Answer","text":"Maximum tenure varies by loan type. Term loans offer 1 to 7 years. Working capital loans are typically 1 to 3 years with annual renewal. MUDRA loans under Shishu Kishor and Tarun categories have tenure up to 5 years. Equipment and machinery loans go up to 7 years. Longer tenure reduces EMI but increases total interest cost."}},{"@type":"Question","name":"What is MUDRA loan and its EMI?","acceptedAnswer":{"@type":"Answer","text":"MUDRA Pradhan Mantri Mudra Yojana loans are available in three categories: Shishu up to 50000 rupees, Kishor 50001 to 5 lakh, and Tarun 5 lakh to 10 lakh. Interest rates range from 8 to 12 percent with tenure up to 5 years. No collateral required. For a 10 lakh Tarun loan at 10 percent for 5 years the EMI is approximately 21247 rupees."}},{"@type":"Question","name":"What documents are needed for business loan?","acceptedAnswer":{"@type":"Answer","text":"Typical documents include: business registration certificate or Udyam registration, last 2 to 3 years ITR and financials, 6 to 12 months bank statements, GST returns, KYC of proprietor or directors, business plan for new ventures, collateral documents if applicable, and CIBIL score report. Requirements vary by lender and loan amount."}},{"@type":"Question","name":"How to reduce business loan EMI?","acceptedAnswer":{"@type":"Answer","text":"Options include: negotiating a lower interest rate citing good repayment history, opting for longer tenure to spread payments, making partial prepayments to reduce principal, switching to a lender offering lower rates via balance transfer, and providing collateral for secured loan at lower rate. Also maintain CIBIL score above 750 for best rates."}},{"@type":"Question","name":"What is the difference between term loan and working capital loan?","acceptedAnswer":{"@type":"Answer","text":"Term loan provides a lump sum for specific purposes like equipment purchase or expansion with fixed EMI repayment over 1 to 7 years. Working capital loan funds day-to-day operations like inventory and receivables with flexible repayment often as overdraft or cash credit facility with annual renewal and interest-only payments."}},{"@type":"Question","name":"Is processing fee charged on business loans?","acceptedAnswer":{"@type":"Answer","text":"Yes most lenders charge a processing fee of 1 to 3 percent of the loan amount. This is a one-time upfront charge deducted from the loan disbursement. Some lenders waive processing fees during promotional periods. The fee is tax-deductible as a business expense. Factor it into total loan cost calculation for accurate comparison."}},{"@type":"Question","name":"Can I prepay a business loan without penalty?","acceptedAnswer":{"@type":"Answer","text":"Prepayment charges vary by lender. Many banks allow prepayment of floating rate business loans without penalty as per RBI guidelines. Fixed rate loans may attract 2 to 5 percent prepayment penalty on the outstanding amount. NBFCs often charge 2 to 4 percent foreclosure charges. Check loan agreement terms before prepaying."}},{"@type":"Question","name":"What is the EMI for a 50 lakh business loan?","acceptedAnswer":{"@type":"Answer","text":"For a 50 lakh business loan at 12 percent for 5 years the monthly EMI is approximately 1 lakh 11 thousand rupees. Total interest over 5 years is about 16.7 lakh making total repayment 66.7 lakh. At 15 percent for the same tenure EMI rises to about 1 lakh 19 thousand with 21.3 lakh total interest."}},{"@type":"Question","name":"What is CGTMSE scheme for business loans?","acceptedAnswer":{"@type":"Answer","text":"CGTMSE or Credit Guarantee Fund Trust for Micro and Small Enterprises provides collateral-free credit guarantee to lenders for loans up to 5 crore to MSMEs. The borrower pays a guarantee fee of 1 to 2 percent. This enables small businesses without collateral to access bank loans. Available through all scheduled commercial banks and select NBFCs."}},{"@type":"Question","name":"Is GST applicable on business loan interest?","acceptedAnswer":{"@type":"Answer","text":"No GST is not applicable on interest charged on business loans. Loan interest is an exempt financial service under GST. However GST at 18 percent applies on processing fees, documentation charges, and other service charges levied by the lender. The GST on processing fee is claimable as Input Tax Credit by GST-registered businesses."}},{"@type":"Question","name":"How does business vintage affect loan eligibility?","acceptedAnswer":{"@type":"Answer","text":"Most banks require minimum 2 to 3 years of business vintage for unsecured business loans. Startups under 2 years may qualify for MUDRA loans or startup-specific schemes. NBFCs may consider 1 year vintage. Longer vintage improves loan amount and reduces interest rate. Vintage is verified through ITR filing history and GST registration date."}}]}
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


/* Tool-specific: Business Loan EMI */
.biz-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.biz-box{border-radius:var(--radius);padding:20px;text-align:center}
.biz-box.monthly{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.biz-box.interest{background:linear-gradient(135deg,#dc2626,#ef4444);color:#fff}
.biz-box.total{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.biz-box .bb-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.biz-box .bb-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.biz-box .bb-sub{font-size:11px;opacity:.8;margin-top:2px}
.pie-wrap{display:flex;align-items:center;justify-content:center;gap:24px;margin:20px 0;flex-wrap:wrap}
.pie-chart{width:170px;height:170px;border-radius:50%}
.pie-legend{display:flex;flex-direction:column;gap:10px}
.pie-legend-item{display:flex;align-items:center;gap:8px;font-size:14px;font-weight:500}
.pie-legend-item .dot{width:14px;height:14px;border-radius:4px;flex-shrink:0}
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
@media(max-width:600px){.biz-hero{grid-template-columns:1fr}.pie-wrap{flex-direction:column}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">EMI Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#loan-types">Loan Types</a>
        <a href="#tax-benefit">Tax Benefit</a>
        <a href="#tips">Tips</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>Business Loan EMI Calculator</nav> --}}
<header class="hero" id="calculator">
    <div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA & CS Team</strong> &middot; Patron Accounting LLP</span></div>
    <h1>Business Loan EMI Calculator — <span>MSME, Term & Working Capital</span></h1>
</header>
<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Calculate monthly EMI for business loans — MSME term loans, MUDRA loans, equipment financing, and working capital. Enter loan amount (up to &#8377;10 Cr), interest rate, tenure, and optional processing fee. Get monthly EMI, total interest, total cost including fees, pie chart breakup, year-wise amortization, and tax deduction guidance. Business loan interest is 100% deductible as a business expense under Section 36(1)(iii).</p>
</div>
<div class="main-layout">
    <div class="content-col">
        <div class="calc-card">
            <h2>Calculate Business Loan EMI</h2>
            <noscript><div class="noscript-box">This calculator requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
            <div class="form-group">
                <label>Loan Type</label>
                <div class="toggle-group" id="loanType">
                    <button type="button" class="toggle-btn active" data-val="term" onclick="setBizLoan(this)">Term Loan<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">10&ndash;18%</small></button>
                    <button type="button" class="toggle-btn" data-val="mudra" onclick="setBizLoan(this)">MUDRA<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">8&ndash;12%</small></button>
                    <button type="button" class="toggle-btn" data-val="equip" onclick="setBizLoan(this)">Equipment<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">9&ndash;15%</small></button>
                    <button type="button" class="toggle-btn" data-val="nbfc" onclick="setBizLoan(this)">NBFC / Unsecured<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">14&ndash;24%</small></button>
                </div>
            </div>
            <div class="slider-group"><label>Loan Amount (&#8377;)</label><div class="slider-row"><input type="range" id="sliderAmt" min="50000" max="100000000" step="50000" value="2500000" oninput="syncS('amt')"><input type="text" class="slider-val" id="valAmt" value="25,00,000" oninput="syncI('amt')"></div></div>
            <div class="slider-group"><label>Interest Rate (% p.a.)</label><div class="slider-row"><input type="range" id="sliderRate" min="6" max="30" step="0.25" value="12" oninput="syncS('rate')"><input type="text" class="slider-val" id="valRate" value="12" style="min-width:80px" oninput="syncI('rate')"></div></div>
            <div class="slider-group"><label>Tenure (Months)</label><div class="slider-row"><input type="range" id="sliderTenure" min="6" max="84" step="6" value="60" oninput="syncS('tenure')"><input type="text" class="slider-val" id="valTenure" value="60" style="min-width:80px" oninput="syncI('tenure')"><span style="font-size:13px;color:var(--text-muted);white-space:nowrap" id="tenLabel">5 yrs</span></div></div>
            <div class="form-group"><label>Processing Fee (%)</label><input type="number" id="inFee" value="2" min="0" max="5" step="0.25" style="max-width:120px"><div style="font-size:12px;color:var(--text-muted);margin-top:4px">Typically 1&ndash;3%. Deducted upfront from disbursement.</div></div>
            <button class="btn-calculate" onclick="calcBizEMI()">Calculate EMI</button>
            <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>
            <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Business Loan EMI Calculator</h2>
            <p>This tool calculates EMI for all types of business loans using the reducing balance method as per <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> lending norms.</p>
            <h3>Step 1 — Select Loan Type</h3>
            <p>Choose from Term Loan, MUDRA (PMMY), Equipment/Machinery, or NBFC/Unsecured. This auto-sets a typical rate which you can adjust.</p>
            <h3>Step 2 — Set Parameters</h3>
            <p>Adjust loan amount (up to &#8377;10 Cr), interest rate, and tenure (6&ndash;84 months). Add optional processing fee percentage.</p>
            <h3>Step 3 — View Results</h3>
            <p>Get monthly EMI, total interest, total cost (including processing fee), principal vs interest pie chart, year-wise amortization, and tax deduction summary.</p>
            <div class="callout"><p><strong>CA Tip:</strong> Business loan interest is fully deductible as a business expense under Section 36(1)(iii) of the <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Act</a>. Processing fees are also deductible. At 30% tax bracket, &#8377;1 lakh interest saves &#8377;30K in tax. Always get a proper interest certificate from the lender for ITR filing. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends separating business and personal loan accounts for clean compliance.</p></div>
        </section>

        <section class="content-section" id="loan-types">
            <h2>Business Loan Types & Rates in India</h2>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Loan Type</th><th>Rate Range</th><th>Amount</th><th>Max Tenure</th><th>Collateral</th></tr></thead>
                <tbody>
                    <tr><td>MSME Term Loan (PSU Bank)</td><td>9.5&ndash;14%</td><td>Up to &#8377;5 Cr</td><td>7 years</td><td>Often required</td></tr>
                    <tr><td>MUDRA — Shishu</td><td>8&ndash;10%</td><td>Up to &#8377;50K</td><td>5 years</td><td>No</td></tr>
                    <tr><td>MUDRA — Kishor</td><td>9&ndash;11%</td><td>&#8377;50K&ndash;5L</td><td>5 years</td><td>No</td></tr>
                    <tr><td>MUDRA — Tarun</td><td>10&ndash;12%</td><td>&#8377;5L&ndash;10L</td><td>5 years</td><td>No</td></tr>
                    <tr><td>Equipment / Machinery</td><td>9&ndash;15%</td><td>Up to &#8377;10 Cr</td><td>7 years</td><td>Equipment as security</td></tr>
                    <tr><td>NBFC / Unsecured</td><td>14&ndash;24%</td><td>Up to &#8377;50L</td><td>5 years</td><td>No</td></tr>
                    <tr><td>CGTMSE Covered</td><td>9.5&ndash;14%</td><td>Up to &#8377;5 Cr</td><td>7 years</td><td>No (govt guarantee)</td></tr>
                </tbody>
            </table>
            </div>
            <p style="font-size:13px;color:var(--text-muted);">Rates are indicative as of March 2026. Check <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a>, bank, and <a href="https://msme.gov.in/" target="_blank" rel="noopener">MSME Ministry</a> websites for current rates and schemes.</p>
        </section>

        <section class="content-section" id="tax-benefit">
            <h2>Tax Benefits on Business Loan Interest</h2>
            <p>Business loan interest enjoys full tax deductibility unlike personal or home loans which have caps:</p>
            <div class="formula-box">
                <span class="label">Tax Saving Formula:</span><br>
                Annual Tax Saving = Annual Interest Paid &times; Tax Rate<br><br>
                <span class="label">Example (&#8377;25L loan, 12%, 5 yrs):</span><br>
                Year 1 Interest &asymp; &#8377;2,80,000<br>
                Tax Saving at 30% = &#8377;2,80,000 &times; 0.30 = <span class="label">&#8377;84,000 saved</span><br>
                Effective Interest Rate = 12% &times; (1 &minus; 0.30) = <span class="label">8.4%</span>
            </div>
            <ul>
                <li><strong>Interest:</strong> 100% deductible under Sec 36(1)(iii) — no upper limit</li>
                <li><strong>Processing fee:</strong> Deductible as business expense in the year paid</li>
                <li><strong>GST on processing fee:</strong> 18% GST charged; claimable as ITC by GST-registered businesses</li>
                <li><strong>Loan principal:</strong> Not tax-deductible (capital repayment, not expense)</li>
            </ul>
        </section>

        <section class="content-section" id="tips">
            <h2>Smart Business Loan Tips</h2>
            <ul>
                <li><strong>Compare across lenders:</strong> A 2% rate difference on &#8377;25L over 5 years saves ~&#8377;1.5L in interest. Always get quotes from 3&ndash;4 lenders.</li>
                <li><strong>Consider CGTMSE:</strong> Collateral-free loans up to &#8377;5 Cr with govt guarantee. Pay 1&ndash;2% guarantee fee vs providing property as collateral.</li>
                <li><strong>Maintain good CIBIL:</strong> Business and personal CIBIL above 700 gets better rates. Pay all existing EMIs on time, keep credit utilisation low.</li>
                <li><strong>Use Udyam Registration:</strong> <a href="https://msme.gov.in/" target="_blank" rel="noopener">MSME registration</a> opens access to priority sector lending, lower rates, and government subsidies like CLCSS.</li>
                <li><strong>Prepay when possible:</strong> Even &#8377;1&ndash;2L annual prepayment saves significant interest. Check prepayment penalty terms before committing.</li>
            </ul>
            <div class="callout green"><p><strong>Expert Tip:</strong> For working capital needs, consider CC/OD facility instead of term loan — you pay interest only on the drawn amount, not the entire sanctioned limit. Our CAs help structure the right loan mix for your business. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20business%20loan%20planning." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to a CA &rarr;</a></p></div>
        </section>

        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need business finance help?</strong> Our CAs assist with loan structuring, tax-efficient borrowing, MSME registration, and financial statement preparation for loan applications. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Business%20Loan%20EMI%20Calculator.%20I%20need%20help%20with%20business%20finance." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <section class="content-section" id="faqs"><h2>Frequently Asked Questions — Business Loans</h2><div id="faqList"></div></section>
    </div>

    <aside class="sidebar-col">
        <div class="cta-card"><h3>Need Loan Help?</h3><p>Our CAs help with loan structuring, MSME registration & financial statements for applications.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20business%20loan%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div>
        <div class="sidebar-card"><h3>Services</h3>
            <a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting & Bookkeeping <span class="arrow">&rarr;</span></a>
            <a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a>
            <a href="/startup-registration" class="sidebar-link">Startup Registration <span class="arrow">&rarr;</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
            <a href="/udyam-registration" class="sidebar-link">Udyam (MSME) Registration <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card"><h3>Related Tools</h3>
            <a href="/tools/emi-calculator" class="sidebar-link">EMI Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/roi-calculator" class="sidebar-link">ROI Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/tds-rate-finder" class="sidebar-link">TDS Rate Finder <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card"><h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
        </div>
    </aside>
</div>

<script>
var DEFAULTS={term:{amt:2500000,rate:12,tenure:60},mudra:{amt:500000,rate:10,tenure:36},equip:{amt:1500000,rate:11,tenure:60},nbfc:{amt:1000000,rate:18,tenure:36}};
function setBizLoan(btn){var g=document.getElementById('loanType');g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');var v=btn.getAttribute('data-val'),d=DEFAULTS[v];document.getElementById('sliderAmt').value=d.amt;document.getElementById('valAmt').value=d.amt.toLocaleString('en-IN');document.getElementById('sliderRate').value=d.rate;document.getElementById('valRate').value=d.rate;document.getElementById('sliderTenure').value=d.tenure;document.getElementById('valTenure').value=d.tenure;var y=Math.floor(d.tenure/12),mo=d.tenure%12;document.getElementById('tenLabel').textContent=y?y+' yr'+(y>1?'s':'')+(mo?' '+mo+' mo':''):(mo+' mo');}
function syncS(t){if(t==='amt'){var v=parseInt(document.getElementById('sliderAmt').value);document.getElementById('valAmt').value=v.toLocaleString('en-IN');}else if(t==='rate'){document.getElementById('valRate').value=document.getElementById('sliderRate').value;}else{var m=parseInt(document.getElementById('sliderTenure').value);document.getElementById('valTenure').value=m;var y=Math.floor(m/12),mo=m%12;document.getElementById('tenLabel').textContent=y?y+' yr'+(y>1?'s':'')+(mo?' '+mo+' mo':''):(mo+' mo');}}
function syncI(t){if(t==='amt'){var v=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;document.getElementById('sliderAmt').value=v;document.getElementById('valAmt').value=v?v.toLocaleString('en-IN'):'';}else if(t==='rate'){document.getElementById('sliderRate').value=parseFloat(document.getElementById('valRate').value)||0;}else{var m=parseInt(document.getElementById('valTenure').value)||0;document.getElementById('sliderTenure').value=m;var y=Math.floor(m/12),mo=m%12;document.getElementById('tenLabel').textContent=y?y+' yr'+(y>1?'s':'')+(mo?' '+mo+' mo':''):(mo+' mo');}}
function fmt(n){return'\u20B9'+Math.round(n).toLocaleString('en-IN');}
function fmtL(n){if(n>=10000000)return'\u20B9'+(n/10000000).toFixed(2)+' Cr';if(n>=100000)return'\u20B9'+(n/100000).toFixed(2)+' L';return fmt(n);}
function resetForm(){setBizLoan(document.querySelector('#loanType .toggle-btn'));document.getElementById('inFee').value=2;document.getElementById('resPanel').classList.remove('visible');}

function calcBizEMI(){
var P=parseInt(document.getElementById('valAmt').value.replace(/[^0-9]/g,''))||0;
var annRate=parseFloat(document.getElementById('valRate').value)||0;
var n=parseInt(document.getElementById('valTenure').value)||0;
var feePct=parseFloat(document.getElementById('inFee').value)||0;
if(!P||!annRate||!n){alert('Please enter loan amount, rate, and tenure.');return;}
var r=annRate/12/100;
var emi=Math.round(P*r*Math.pow(1+r,n)/(Math.pow(1+r,n)-1));
var totalPay=emi*n;
var totalInt=totalPay-P;
var procFee=Math.round(P*feePct/100);
var gstOnFee=Math.round(procFee*0.18);
var totalCost=totalPay+procFee+gstOnFee;
var intPct=Math.round(totalInt/totalPay*100);
var priPct=100-intPct;

var h='';
h+='<div class="biz-hero"><div class="biz-box monthly"><div class="bb-label">Monthly EMI</div><div class="bb-value">'+fmt(emi)+'</div><div class="bb-sub">per month</div></div><div class="biz-box interest"><div class="bb-label">Total Interest</div><div class="bb-value">'+fmtL(totalInt)+'</div><div class="bb-sub">'+intPct+'% of repayment</div></div><div class="biz-box total"><div class="bb-label">Total Cost</div><div class="bb-value">'+fmtL(totalCost)+'</div><div class="bb-sub">EMI + Fee + GST</div></div></div>';

// Pie
h+='<div class="pie-wrap"><div class="pie-chart" style="background:conic-gradient(var(--primary) 0deg '+Math.round(priPct*3.6)+'deg, #dc2626 '+Math.round(priPct*3.6)+'deg 360deg)"></div><div class="pie-legend"><div class="pie-legend-item"><span class="dot" style="background:var(--primary)"></span> Principal: '+fmtL(P)+' ('+priPct+'%)</div><div class="pie-legend-item"><span class="dot" style="background:#dc2626"></span> Interest: '+fmtL(totalInt)+' ('+intPct+'%)</div></div></div>';

// Summary
h+='<div class="res-card"><div class="res-card-hd"><h3>Loan Summary</h3><span class="res-badge info">Details</span></div><div class="res-card-bd"><table class="cmp-table">';
h+='<tr><td>Loan Amount</td><td><strong>'+fmt(P)+'</strong></td></tr>';
h+='<tr><td>Interest Rate</td><td><strong>'+annRate+'% p.a.</strong></td></tr>';
h+='<tr><td>Tenure</td><td><strong>'+n+' months</strong></td></tr>';
h+='<tr><td>Monthly EMI</td><td style="font-size:18px;color:var(--primary)"><strong>'+fmt(emi)+'</strong></td></tr>';
h+='<tr><td>Total Interest</td><td class="neg">'+fmt(totalInt)+'</td></tr>';
h+='<tr><td>Processing Fee ('+feePct+'%)</td><td>'+fmt(procFee)+'</td></tr>';
h+='<tr><td>GST on Processing Fee (18%)</td><td>'+fmt(gstOnFee)+'</td></tr>';
h+='<tr><td>Net Disbursement (after fee deduction)</td><td>'+fmt(P-procFee-gstOnFee)+'</td></tr>';
h+='<tr style="background:var(--surface-alt)"><td><strong>Total Cost of Loan</strong></td><td><strong>'+fmtL(totalCost)+'</strong></td></tr>';
h+='</table></div></div>';

// Tax saving
var yr1Int=0,bal=P;for(var m=0;m<Math.min(12,n);m++){var mInt=bal*r;yr1Int+=mInt;bal-=(emi-mInt);}
yr1Int=Math.round(yr1Int);
var taxSave30=Math.round(yr1Int*0.30);
var effRate=(annRate*(1-0.30)).toFixed(1);
h+='<div class="res-card"><div class="res-card-hd"><h3>Tax Deduction Benefit</h3><span class="res-badge pass">Sec 36(1)(iii)</span></div><div class="res-card-bd"><table class="cmp-table">';
h+='<tr><td>Year 1 Interest (deductible)</td><td class="hi">'+fmt(yr1Int)+'</td></tr>';
h+='<tr><td>Tax Saving at 30% bracket</td><td class="hi">'+fmt(taxSave30)+'</td></tr>';
h+='<tr><td>Processing Fee (deductible)</td><td class="hi">'+fmt(procFee)+'</td></tr>';
h+='<tr><td>GST on Fee (ITC claimable)</td><td class="hi">'+fmt(gstOnFee)+'</td></tr>';
h+='<tr><td>Effective Interest Rate (after tax)</td><td><strong>'+effRate+'% p.a.</strong></td></tr>';
h+='</table></div></div>';

// Amortization
var years=Math.ceil(n/12);bal=P;
h+='<div class="res-card"><div class="res-card-hd"><h3>Year-Wise Amortization</h3><span class="res-badge teal">Schedule</span></div><div class="res-card-bd"><div class="yr-table"><table><thead><tr><th>Year</th><th>Principal</th><th>Interest</th><th>Total Paid</th><th>Balance</th></tr></thead><tbody>';
for(var y=1;y<=years;y++){var yPri=0,yInt=0,months=y===years?(n-(years-1)*12):12;for(var m=0;m<months;m++){var mInt=bal*r;var mPri=emi-mInt;if(mPri>bal){mPri=bal;mInt=emi-mPri;}yPri+=mPri;yInt+=mInt;bal-=mPri;if(bal<0)bal=0;}h+='<tr><td>'+y+'</td><td>'+fmt(yPri)+'</td><td>'+fmt(yInt)+'</td><td>'+fmt(yPri+yInt)+'</td><td>'+fmt(bal)+'</td></tr>';}
h+='</tbody></table></div></div></div>';

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20Business%20Loan%20EMI%20Calculator.%20I%20need%20help%20with%20business%20finance." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/emi-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg> EMI Calculator</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What is the business loan interest rate in India?",a:"10\u201324% p.a. depending on lender, type, vintage, and collateral. Banks: 10\u201318%. NBFCs: 14\u201324%. MUDRA: 8\u201312%. MSME from PSU banks: 9.5%+. CGTMSE covered loans get competitive rates."},
{q:"Is business loan interest tax-deductible?",a:"Yes, 100% deductible under Sec 36(1)(iii) with no upper limit. Processing fees also deductible. At 30% bracket, \u20B91L interest saves \u20B930K tax. Effective rate drops by 30%. Get interest certificate for ITR."},
{q:"What is max business loan tenure?",a:"Term loans: 1\u20137 years. Working capital: 1\u20133 years (annual renewal). MUDRA: up to 5 years. Equipment loans: up to 7 years. Longer tenure = lower EMI but more total interest."},
{q:"What is MUDRA loan and its EMI?",a:"PMMY scheme: Shishu (\u20B950K), Kishor (\u20B95L), Tarun (\u20B910L). Rates 8\u201312%, no collateral, 5-year tenure. \u20B910L at 10% for 5 years = ~\u20B921,247/month EMI."},
{q:"What documents needed for business loan?",a:"Business registration/Udyam, 2\u20133 years ITR + financials, bank statements, GST returns, KYC, business plan (new ventures), collateral docs if applicable, CIBIL report."},
{q:"How to reduce business loan EMI?",a:"Negotiate lower rate, extend tenure, make prepayments, balance transfer to lower-rate lender, provide collateral for secured rate. Maintain CIBIL 750+."},
{q:"Term loan vs working capital loan?",a:"Term loan: lump sum for expansion/equipment, fixed EMI, 1\u20137 years. Working capital: fund operations, flexible CC/OD facility, interest on drawn amount only, annual renewal."},
{q:"Is processing fee charged?",a:"Yes, 1\u20133% upfront, deducted from disbursement. 18% GST applies on fee. Both fee and GST are tax-deductible. Some lenders waive during promotions. Factor into total cost."},
{q:"Can I prepay without penalty?",a:"Floating rate: often no penalty (RBI norm). Fixed rate: may have 2\u20135% penalty. NBFCs: 2\u20134% foreclosure charges. Always check loan agreement before prepaying."},
{q:"EMI for \u20B950L business loan?",a:"\u20B950L at 12% for 5 years = ~\u20B91,11,122/month. Total interest: ~\u20B916.7L. At 15%: ~\u20B91,18,952/month, interest \u20B921.3L. Use calculator above for exact numbers."},
{q:"What is CGTMSE scheme?",a:"Govt guarantee for collateral-free MSME loans up to \u20B95 Cr. Borrower pays 1\u20132% guarantee fee. Available at all scheduled banks and select NBFCs. Enables access without property collateral."},
{q:"Is GST on loan interest?",a:"No GST on loan interest (exempt financial service). But 18% GST on processing fee, documentation charges. GST on fee is claimable as ITC by GST-registered businesses."},
{q:"How does business vintage affect eligibility?",a:"Most banks need 2\u20133 years vintage for unsecured loans. Startups < 2 years: MUDRA or startup schemes. NBFCs may accept 1 year. Longer vintage = higher amount, lower rate. Verified via ITR history and GST date."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcBizEMI();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection
