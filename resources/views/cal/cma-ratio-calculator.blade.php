@extends('layouts.app')

@section('meta')
<title>CMA Ratio Calculator | Bank Loan Ratios, DSCR & MPBF</title>
<meta name="description" content="Free CMA ratio calculator for bank loans: get current ratio, DSCR, TOL/TNW, debt-equity and MPBF, each checked against CMA benchmark norms. Try now!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/cma-ratio-calculator">

<meta property="og:title" content="CMA Ratio Calculator — Bank Loan Ratios & MPBF">
<meta property="og:description" content="Enter your balance sheet and P&L figures to compute the key CMA ratios — current ratio, DSCR, ISCR, TOL/TNW, debt-equity — and MPBF, each benchmarked to bank norms.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/cma-ratio-calculator">
<meta property="og:image" content="/tools/cma-ratio-calculator-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="CMA Ratio Calculator — Bank Loan Ratios & MPBF">
<meta name="twitter:description" content="Compute current ratio, DSCR, ISCR, TOL/TNW, debt-equity and MPBF for your CMA data, each benchmarked to bank norms. Free & instant.">
<meta name="twitter:image" content="/tools/cma-ratio-calculator-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "CMA Ratio Calculator",
  "description": "CMA Ratio Calculator computes the key financial ratios that banks assess in a Credit Monitoring Arrangement (CMA) data report — current ratio, debt-equity ratio, debt service coverage ratio (DSCR), interest service coverage ratio (ISCR) and TOL/TNW — along with the Maximum Permissible Bank Finance (MPBF) under the Tandon Committee second method, and benchmarks each result against standard bank lending norms.",
  "url": "/tools/cma-ratio-calculator",
  "applicationCategory": "BusinessApplication",
  "inLanguage": "en-IN",
  "isAccessibleForFree": true,
  "operatingSystem": "Any",
  "datePublished": "2026-06-05T08:00:00+05:30",
  "dateModified": "2026-06-05T08:00:00+05:30",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "INR"
  },
  "reviewedBy": {
    "@type": "Person",
    "@id": "/#founder",
    "name": "CA Sundram Gupta",
    "jobTitle": "Founder & Chartered Accountant",
    "url": "/contact-page",
    "sameAs": ["https://www.linkedin.com/in/ca-sundram-gupta"],
    "hasCredential": [{
      "@type": "EducationalOccupationalCredential",
      "credentialCategory": "Professional Certification",
      "name": "Chartered Accountant (CA)",
      "recognizedBy": {
        "@type": "Organization",
        "name": "Institute of Chartered Accountants of India",
        "sameAs": "https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"
      }
    }]
  },
  "publisher": { "@id": "/#organization" },
  "provider": {
    "@id": "/#organization"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
    {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
    {"@type": "ListItem", "position": 3, "name": "CMA Ratio Calculator", "item": "/tools/cma-ratio-calculator"}
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is CMA data and why do banks need it?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "CMA stands for Credit Monitoring Arrangement. It is a standardised set of financial statements — operating statement, balance sheet, fund flow, MPBF working and ratio analysis — that banks use to appraise a working capital or term loan. The lender reviews past and projected performance to judge repayment capacity and the maximum it can safely lend. CMA data is typically required for working capital limits and most business loans above a few lakh rupees."
      }
    },
    {
      "@type": "Question",
      "name": "Which ratios matter most in a CMA report?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The ratios banks scrutinise most are the current ratio, debt service coverage ratio (DSCR), interest service coverage ratio (ISCR), total outside liabilities to tangible net worth (TOL/TNW) and the debt-equity ratio. Together they show liquidity, repayment capacity and leverage. This calculator computes each from your figures and flags whether it meets the commonly accepted benchmark a lender looks for."
      }
    },
    {
      "@type": "Question",
      "name": "What is a good current ratio for a bank loan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Under the Tandon Committee norms that banks follow, the benchmark current ratio is 1.33, and ordinarily it should not fall below 1.17. A current ratio of 1.33 means the borrower funds at least 25% of current assets from long-term sources, which lenders view as a sign of healthy liquidity. A figure well below 1.17 usually weakens the loan proposal and may need restructuring before submission."
      }
    },
    {
      "@type": "Question",
      "name": "What DSCR do banks expect in CMA data?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For term loans the benchmark average debt service coverage ratio is around 1.50 and ordinarily not below 1.40, though many lenders accept a DSCR of at least 1.25 for individual years. DSCR measures whether profit plus depreciation and interest can cover loan instalments and interest. A DSCR below 1 means the business cannot service its debt from operations, which is a serious red flag for any lender."
      }
    },
    {
      "@type": "Question",
      "name": "What is the TOL/TNW ratio benchmark?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Total outside liabilities to tangible net worth (TOL/TNW) measures how leveraged the business is against its own funds. The commonly used benchmark is 4.00, and ordinarily it should not exceed 5.00. A lower TOL/TNW means the promoter has more skin in the game and the business relies less on outside borrowing, which strengthens the credit profile in a CMA appraisal."
      }
    },
    {
      "@type": "Question",
      "name": "What is MPBF and how is it calculated?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MPBF stands for Maximum Permissible Bank Finance — the ceiling on working capital a bank can lend under the Tandon Committee norms. Under the widely used second method, MPBF equals 75% of the working capital gap, where the gap is current assets minus current liabilities other than bank borrowing. The borrower must fund the remaining 25% of current assets from long-term sources, which keeps the current ratio at about 1.33."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between CMA data and a project report?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A project report is a broader business document covering the promoters, the project, the market, technical feasibility and financial projections, used mainly for new ventures or capital expenditure. CMA data is the structured financial statement format banks use to monitor and appraise credit, focused on operating statements, balance sheets, fund flow, MPBF and ratios. Many loan files include both — the project report for context and CMA data for the numbers."
      }
    },
    {
      "@type": "Question",
      "name": "What is the debt-equity ratio banks look for?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The debt-equity ratio compares borrowed funds to the promoter's own funds. For most term loans lenders prefer a debt-equity ratio of around 2:1 or lower, though acceptable levels vary by industry and loan type. A high debt-equity ratio signals aggressive leverage and higher risk, so improving promoter contribution before applying often helps the proposal. This calculator shows your ratio against a typical 2:1 reference."
      }
    },
    {
      "@type": "Question",
      "name": "Can I improve my ratios before applying for a loan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Bringing in additional promoter capital, converting short-term borrowing to long-term funds, clearing slow-moving current liabilities and retaining profits all improve the current ratio, TOL/TNW and debt-equity. Structuring repayments to match cash flows improves DSCR. A CA preparing your CMA data can model these adjustments so the projected ratios meet bank norms before the proposal is submitted."
      }
    },
    {
      "@type": "Question",
      "name": "Does this calculator replace a CA-prepared CMA report?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. This tool gives an indicative read on the headline ratios and MPBF so you can sense-check a proposal. A full CMA report requires multi-year operating statements, balance sheet projections, a fund flow statement and assumptions that satisfy the lender's format. A Chartered Accountant should prepare and review the complete CMA data before you submit it to the bank."
      }
    },
    {
      "@type": "Question",
      "name": "Is the CMA Ratio Calculator free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting CMA Ratio Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It computes the current ratio, DSCR, ISCR, TOL/TNW, debt-equity ratio and MPBF from your inputs and benchmarks each against the standard bank lending norms used in CMA appraisals."
      }
    }
  ]
}
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
@endsection
<style>
        :root {
            --primary: #15365f;
            --primary-light: #1f4a7a;
            --primary-dark: #0a2240;
            --accent: #f26522;
            --accent-light: #ff8347;
            --surface: #FAFAF8;
            --surface-alt: #F0EFEB;
            --card: #FFFFFF;
            --text: #414042;
            --text-secondary: #555555;
            --text-muted: #888888;
            --border: #E5E5E0;
            --success: #059669;
            --info: #0EA5E9;
            --danger: #DC2626;
            --radius: 12px;
            --radius-lg: 20px;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.06);
            --shadow-md: 0 4px 16px rgba(0,0,0,0.08);
            --shadow-lg: 0 8px 32px rgba(0,0,0,0.1);
            --font-body: 'DM Sans', sans-serif;
            --font-mono: 'Space Mono', monospace;
        }
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { font-family: var(--font-body); background: var(--surface); color: var(--text); line-height: 1.65; -webkit-font-smoothing: antialiased; }
        .toc-nav { background: var(--primary-dark); position: sticky; top: 0; z-index: 100; overflow-x: auto; white-space: nowrap; -webkit-overflow-scrolling: touch; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
        .toc-nav-inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; gap: 0; }
        .toc-nav a { color: rgba(255,255,255,0.75); text-decoration: none; font-size: 13px; font-weight: 500; padding: 12px 16px; transition: all 0.2s; border-bottom: 2px solid transparent; display: inline-block; }
        .toc-nav a:hover, .toc-nav a.active { color: #fff; border-bottom-color: var(--accent); }
        .breadcrumb { max-width: 1200px; margin: 0 auto; padding: 16px 20px 0; font-size: 13px; color: var(--text-muted); }
        .breadcrumb a { color: var(--primary-light); text-decoration: none; }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb span { margin: 0 6px; }
        .hero { max-width: 1200px; margin: 0 auto; padding: 32px 20px 24px; }
        .hero-meta { display: flex; flex-wrap: wrap; align-items: center; gap: 12px; margin-bottom: 16px; }
        .badge-updated { background: var(--primary); color: #fff; font-size: 12px; font-weight: 600; padding: 4px 12px; border-radius: 20px; letter-spacing: 0.3px; }
        .author-byline { font-size: 13px; color: var(--text-secondary); }
        .author-byline strong { color: var(--primary); font-weight: 600; }
        .hero h1 { font-size: clamp(28px, 5vw, 42px); font-weight: 700; color: var(--primary-dark); line-height: 1.2; margin-bottom: 16px; }
        .hero h1 span { color: var(--accent); display: inline; }
        .tldr { background: var(--card); border-left: 4px solid var(--accent); border-radius: 0 var(--radius) var(--radius) 0; padding: 20px 24px; margin: 0 auto 32px; max-width: 1200px; box-shadow: var(--shadow-sm); }
        .tldr-label { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .tldr p { font-size: 15px; color: var(--text-secondary); line-height: 1.7; }
        .main-layout { max-width: 1200px; margin: 0 auto; padding: 0 20px 40px; display: grid; grid-template-columns: 1fr; gap: 32px; }
        @media (min-width: 768px) { .main-layout { grid-template-columns: 1fr 320px; gap: 40px; } }
        .content-col { min-width: 0; }
        .sidebar-col { min-width: 0; }
        .calc-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 32px; margin-bottom: 40px; border: 1px solid var(--border); }
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 6px; }
        .calc-card .calc-sub { font-size: 14px; color: var(--text-secondary); margin-bottom: 22px; }
        .field-group-title { font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin: 22px 0 12px; font-family: var(--font-mono); }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 18px; margin-bottom: 4px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; }
        .form-group input { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus { border-color: var(--primary); }
        .form-group input[inputmode="decimal"] { font-family: var(--font-mono); font-size: 16px; font-weight: 700; }
        .field-hint { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 22px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .ratio-card { display: flex; align-items: center; justify-content: space-between; gap: 14px; border-radius: var(--radius); padding: 16px 20px; border: 1px solid var(--border); margin-bottom: 12px; background: var(--surface); border-left: 4px solid var(--text-muted); flex-wrap: wrap; }
        .ratio-card.pass { border-left-color: var(--success); background: #F0FDF4; }
        .ratio-card.weak { border-left-color: var(--accent); background: #FFFBEB; }
        .ratio-card.fail { border-left-color: var(--danger); background: #FEF2F2; }
        .ratio-name { font-size: 15px; font-weight: 700; color: var(--primary-dark); }
        .ratio-bench { font-size: 12px; color: var(--text-muted); margin-top: 2px; }
        .ratio-right { text-align: right; }
        .ratio-value { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); }
        .ratio-pill { display: inline-block; font-size: 11px; font-weight: 700; padding: 2px 10px; border-radius: 12px; margin-top: 4px; }
        .ratio-pill.pass { background: #D1FAE5; color: #059669; }
        .ratio-pill.weak { background: #FEF3C7; color: #92400E; }
        .ratio-pill.fail { background: #FEE2E2; color: #DC2626; }
        .mpbf-box { background: var(--primary); color:#fff; border-radius: var(--radius); padding: 20px 24px; margin-top: 6px; margin-bottom: 14px; }
        .mpbf-box .mpbf-label { font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: rgba(255,255,255,0.8); margin-bottom: 4px; }
        .mpbf-box .mpbf-value { font-family: var(--font-mono); font-size: 26px; font-weight: 700; }
        .mpbf-box .mpbf-note { font-size: 12px; color: rgba(255,255,255,0.75); margin-top: 6px; line-height: 1.5; }
        .btn-reset { display: inline-flex; align-items: center; gap: 6px; margin-top: 8px; padding: 8px 16px; border: 1px solid var(--border); border-radius: 8px; background: var(--card); color: var(--text-muted); font-family: var(--font-body); font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s; }
        .btn-reset:hover { border-color: var(--danger); color: var(--danger); }
        .content-section { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 24px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 0 0 14px 20px; color: var(--text-secondary); font-size: 15px; line-height: 1.75; }
        .content-section li { margin-bottom: 6px; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-underline-offset: 2px; }
        .content-section a:hover { color: var(--primary); }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 16px; text-align: left; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }
        .formula-box { background: var(--primary-dark); color: #fff; border-radius: var(--radius); padding: 20px 24px; margin: 16px 0; font-family: var(--font-mono); font-size: 14px; line-height: 1.8; overflow-x: auto; }
        .formula-box .label { color: var(--accent-light); font-weight: 700; }
        .callout { background: #EFF6FF; border-left: 4px solid var(--info); border-radius: 0 var(--radius) var(--radius) 0; padding: 16px 20px; margin: 16px 0; }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }
        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }
        .faq-item { background: var(--surface); border-radius: var(--radius); margin-bottom: 10px; border: 1px solid var(--border); overflow: hidden; transition: box-shadow 0.2s; }
        .faq-item:hover { box-shadow: var(--shadow-sm); }
        .faq-question { display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 16px 20px; border: none; background: none; font-family: var(--font-body); font-size: 15px; font-weight: 600; color: var(--text); cursor: pointer; text-align: left; line-height: 1.4; gap: 12px; -webkit-tap-highlight-color: transparent; }
        .faq-question * { pointer-events: none; }
        .faq-icon { flex-shrink: 0; width: 24px; height: 24px; border-radius: 50%; background: var(--primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 16px; transition: transform 0.3s; }
        .faq-item.open .faq-icon { transform: rotate(45deg); }
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.35s ease, padding 0.35s ease; }
        .faq-item.open .faq-answer { max-height: 600px; }
        .faq-answer-inner { padding: 0 20px 16px; font-size: 14px; color: var(--text-secondary); line-height: 1.75; }
        .sidebar-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 24px; margin-bottom: 24px; border: 1px solid var(--border); }
        .sidebar-card h3 { font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 14px; }
        .sidebar-link { display: block; padding: 10px 14px; border-radius: 8px; font-size: 14px; font-weight: 500; color: var(--text-secondary); text-decoration: none; transition: all 0.2s; margin-bottom: 4px; -webkit-tap-highlight-color: rgba(0,0,0,0.05); touch-action: manipulation; }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }
        .cta-card { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 28px 24px; margin-bottom: 24px; text-align: center; }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: var(--primary-dark); font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.1); touch-action: manipulation; }
        .cta-btn:hover { background: var(--accent-light); }
        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }
        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; margin-bottom: 20px; }
        .inline-cta { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color:#fff; border-radius: var(--radius-lg); padding: 28px; text-align:center; margin: 0 0 32px; }
        .inline-cta h3 { color:#fff; font-size:20px; margin-bottom:10px; }
        .inline-cta p { color:rgba(255,255,255,0.85); font-size:15px; margin-bottom:18px; }
        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
        }

/* ===== UPDATE-TOOLS v1 appended blocks ===== */
/* ============================================================================
   PATRON ACCOUNTING — CTA SYSTEM
   4-placement CTA architecture for tool/calculator pages:
     1. Peach top bar (after H1, before TL;DR)
     2. Post-result CTA (inside result section, only fires after calc)
     3. Mid-body CTA (navy gradient, between content sections)
     4. Sidebar CTA card (vertical 3-button stack, in sidebar column)

   Each CTA uses 3 channels: Call (orange) / WhatsApp (green) / Email (white)

   Drop-in: paste these rules at the end of the page's <style> block, after
   the existing component CSS. Requires brand-tokens.css to be loaded first.
   ============================================================================ */

/* === Peach top bar (image-style, static, full-width) === */
.brand-cta-bar {
    background: #FFEDD5;
    border-top: 1px solid #FED7AA;
    border-bottom: 1px solid #FED7AA;
    padding: 14px 20px;
}
.brand-cta-bar-inner {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
}
.brand-cta-bar-text {
    flex: 1 1 320px;
    font-size: 14px;
    color: var(--text);
    line-height: 1.45;
}
.brand-cta-bar-text strong { color: var(--text); font-weight: 700; }
.brand-cta-bar-actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

/* === Universal CTA button === */
.brand-cta-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 11px 18px;
    border-radius: 8px;
    font-family: var(--font-body);
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
    border: 0;
    cursor: pointer;
    transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.2s ease;
    -webkit-tap-highlight-color: transparent;
    touch-action: manipulation;
    white-space: nowrap;
    line-height: 1.2;
    min-height: 44px;        /* WCAG 2.5.5 tap target */
}
.brand-cta-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.12);
}
.brand-cta-btn:active { transform: translateY(0); }
.brand-cta-btn .ico { width: 16px; height: 16px; flex-shrink: 0; }

/* === Channel variants === */
.brand-cta-btn-call { background: var(--accent); color: #fff; }
.brand-cta-btn-call:hover { background: var(--accent-light); color: #fff; }

.brand-cta-btn-wa { background: #25D366; color: #fff; }   /* Universal WhatsApp green — never change */
.brand-cta-btn-wa:hover { background: #1FB855; color: #fff; }

.brand-cta-btn-email { background: #fff; color: var(--text); border: 1px solid #E5D6C5; }
.brand-cta-btn-email:hover { background: #FAFAF8; color: var(--text); }

/* === Sidebar variant — vertical stack === */
.brand-cta-stack { display: flex; flex-direction: column; gap: 8px; }
.brand-cta-stack .brand-cta-btn { width: 100%; }

/* === Inside dark body-cta — email button gets a contrasting style === */
.body-cta .brand-cta-bar-actions { justify-content: center; margin-top: 4px; }
.body-cta .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.body-cta .brand-cta-btn-email:hover { background: #fff; border-color: #fff; }

/* === Inside dark sidebar cta-card — same email override === */
.cta-card .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.cta-card .brand-cta-btn-email:hover { background: #fff; border-color: #fff; }

/* === Post-result CTA — orange-bordered soft alert (only visible after calc) === */
.post-result-cta {
    background: #FFF7ED;
    border: 1px solid #FED7AA;
    border-left: 4px solid var(--accent);
    border-radius: var(--radius);
    padding: 18px 20px;
    margin: 20px 0 4px;
}
.post-result-cta-head {
    font-size: 15px;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 4px;
    line-height: 1.4;
}
.post-result-cta-sub {
    font-size: 13px;
    color: var(--text-secondary);
    margin-bottom: 14px;
    line-height: 1.55;
}
.post-result-cta .brand-cta-bar-actions { gap: 8px; }

/* === Mobile breakpoint (≤767px): peach bar restructures, body-cta + post-result stack === */
@media (max-width: 767px) {
    .brand-cta-bar { padding: 12px 14px; }
    .brand-cta-bar-text { font-size: 13px; flex-basis: 100%; }
    .brand-cta-bar-actions { width: 100%; gap: 8px; }
    .brand-cta-bar .brand-cta-btn { flex: 1 1 0; padding: 10px 8px; font-size: 12.5px; min-width: 0; min-height: 44px; }
    .brand-cta-bar .brand-cta-btn-call { flex: 1 1 100%; }   /* Call gets its own row */
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta { padding: 16px; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}

/* === Tablet portrait + narrow laptops: 2-col layout makes content column too narrow for 3-button rows === */
@media (min-width: 768px) and (max-width: 950px) {
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}

/* ============================================================================
   PATRON ACCOUNTING — Focus-visible accessibility (WCAG 2.4.7)

   PROBLEM:
     `outline: none` on inputs/buttons removes the keyboard focus indicator.
     Mouse users don't notice. Keyboard users (tabbing through the form)
     can't see where focus lands. WCAG 2.4.7 Focus Visible failure.

   SOLUTION:
     Use :focus-visible (pseudo-class). It only triggers on KEYBOARD focus,
     not mouse-click focus. So mouse users see a clean visual design,
     keyboard users get a clear focus ring.

   Browser support: Chrome 86+, Safari 15.4+, Firefox 85+, Edge 86+ — all
   our target browsers. No fallback needed.
   ============================================================================ */

/* === Form inputs and selects ===
   Replace any `outline: none` with this transparent-outline pattern.
   The transparent outline is always there (no layout shift on focus),
   only its color changes on keyboard focus. */
.form-group input,
.form-group select {
    outline: 2px solid transparent;
    outline-offset: 1px;
}
.form-group input:focus-visible,
.form-group select:focus-visible {
    outline-color: var(--primary);
}

/* === Buttons and links — universal :focus-visible ring === */
button:focus-visible,
a:focus-visible {
    outline: 2px solid var(--accent);
    outline-offset: 2px;
    border-radius: 4px;
}

/* === Toggle buttons get primary-color outline (they live on accent-tinted areas) === */
.toggle-btn:focus-visible {
    outline: 2px solid var(--primary);
    outline-offset: 2px;
}

/* === TOC nav links: outline goes inward (links are flush with sticky bar edge) === */
.toc-nav a:focus-visible {
    outline: 2px solid var(--accent);
    outline-offset: -2px;
}

/* === FAQ accordion buttons: outline goes inward (buttons span full width) === */
.faq-question:focus-visible {
    outline: 2px solid var(--primary);
    outline-offset: -2px;
}

/* ============================================================================
   PATRON ACCOUNTING — Reduced motion (WCAG 2.3.3)

   Some users (vestibular disorders, motion sensitivity) configure their OS
   to request reduced motion. The browser exposes this via the
   prefers-reduced-motion media query.

   This rule blanket-disables animations, transitions, and smooth-scroll
   for those users. Everyone else gets the normal animated experience.

   Paste at the end of your <style> block. Order matters — must come AFTER
   any rule that defines transitions, otherwise the cascade won't override.
   ============================================================================ */

@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}

/* ============================================================================
   PATRON ACCOUNTING — Print stylesheet for /tools/ pages

   AUDIENCE: A user who has run the calculator and now wants to print the
   working paper / memo / output for inclusion in their audit/tax/accounting
   file. They want clean black-on-white output, no chrome, no CTAs, no
   educational content. Just the result.

   This stylesheet:
   - Hides navigation (TOC, breadcrumb, CTAs, sidebar, content sections, footer)
   - Inverts dark code blocks (working-paper text, formula box) to white-on-black
   - Removes background gradients, replaces with simple borders
   - Sets serif-friendly print typography
   - Avoids page-breaks inside result blocks

   Paste at the end of your <style> block.
   ============================================================================ */

@media print {
    @page { margin: 1.5cm; }

    body {
        background: #fff !important;
        color: #000 !important;
        font-size: 10pt;
        line-height: 1.5;
    }

    /* Hide all navigation and chrome */
    .toc-nav,
    .breadcrumb,
    .brand-cta-bar,
    .post-result-cta,
    .body-cta,
    .cta-card,
    .sidebar-card,
    .sidebar-col,
    .office-strip,
    .footer,
    .btn-calculate,
    .btn-reset,
    .calc-section-title,
    .calc-intro,
    .form-group,
    .toggle-group,
    .conditional-row,
    .noscript-box,
    .content-section {
        display: none !important;
    }

    /* Calc card chrome stripped, but keep the wrapper for results */
    .calc-card {
        box-shadow: none !important;
        border: none !important;
        padding: 0 !important;
    }
    .calc-card h2 { display: none; }

    /* Hero compacted */
    .hero { padding: 0 0 12px !important; }
    .hero h1 {
        font-size: 18pt !important;
        color: #000 !important;
    }
    .hero h1 span { color: #000 !important; }
    .hero-meta { font-size: 9pt; }
    .badge-updated {
        background: transparent !important;
        color: #000 !important;
        border: 1px solid #000;
    }
    .author-byline strong { color: #000 !important; }

    /* TL;DR — keep but flatten */
    .tldr {
        box-shadow: none !important;
        border-left: 3px solid #000 !important;
        padding: 8px 12px !important;
        margin: 0 0 12px !important;
    }
    .tldr-label { color: #000 !important; }
    .tldr p { font-size: 9pt; color: #333 !important; }

    /* Layout becomes single-column in print */
    .main-layout {
        display: block !important;
        padding: 0 !important;
    }

    /* Result blocks — keep crisp, avoid page breaks inside */
    .verdict-card {
        background: #fff !important;
        border: 2px solid #000 !important;
        border-left: 6px solid #000 !important;
        page-break-inside: avoid;
    }
    .verdict-headline,
    .verdict-grid-value { color: #000 !important; }
    .verdict-grid-item {
        background: #fff !important;
        border: 1px solid #999;
    }

    .summary-card {
        background: #fff !important;
        border: 1px solid #999 !important;
    }
    .summary-card.highlight { background: #fff !important; }
    .summary-card.highlight .summary-label,
    .summary-card.highlight .summary-value { color: #000 !important; }
    .summary-value { color: #000 !important; }

    .info-banner {
        background: #fff !important;
        color: #000 !important;
        border: 1px solid #000 !important;
    }

    .basis-block {
        background: #fff !important;
        border: 1px solid #000 !important;
        page-break-inside: avoid;
    }
    .basis-label { color: #000 !important; }

    /* Working paper text — invert from dark navy bg to white-on-black */
    .wp-text {
        background: #fff !important;
        color: #000 !important;
        border: 1px solid #000 !important;
        page-break-inside: avoid;
        font-size: 9pt;
    }
    .wp-text .wp-label { color: #000 !important; }

    /* Strip link decoration in print */
    a, a:visited {
        color: #000 !important;
        text-decoration: none !important;
    }
}


        </style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#what-is">What is CMA</a>
        <a href="#ratios">The Ratios</a>
        <a href="#mpbf">MPBF</a>
        <a href="#example">Example</a>
        <a href="#improve">Improve Ratios</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    CMA Ratio Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>CMA Ratio Calculator — <span>Bank Loan Ratios & MPBF</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Preparing a loan file? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20CMA%20Ratio%20Calculator%20and%20need%20help%20preparing%20a%20CMA%20report%20for%20a%20bank%20loan.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=CMA%20report%20/%20bank%20loan%20preparation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20CMA%20Ratio%20Calculator%20and%20would%20like%20help%20preparing%20a%20CMA%20report%20for%20a%20bank%20loan.%0A%0AMy%20details%3A%0A-%20Business%3A%0A-%20Loan%20type%20%28working%20capital%20/%20term%29%3A%0A-%20Loan%20amount%20sought%3A%0A-%20Bank%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Enter your <strong>balance sheet and P&L figures</strong> and this free calculator returns the key ratios a bank checks in a <strong>CMA (Credit Monitoring Arrangement) data report</strong> — <strong>current ratio, DSCR, ISCR, TOL/TNW</strong> and <strong>debt-equity</strong> — plus your <strong>MPBF</strong> (Maximum Permissible Bank Finance) under the Tandon Committee second method. Each ratio is flagged against the standard lending benchmark (e.g. current ratio 1.33, DSCR 1.50, TOL/TNW max 5.00). It is an indicative tool — a CA should prepare the full CMA report.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Your CMA Ratios</h2>
            <p class="calc-sub">Enter figures in ₹ (any consistent unit — actual rupees, thousands or lakhs — as long as you are consistent).</p>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript, or use the ratio formulas given further down this page.
                </div>
            </noscript>

            <div class="field-group-title">Balance Sheet</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="ca">Total Current Assets</label>
                    <input type="text" id="ca" placeholder="e.g. 5000000" inputmode="decimal" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="cl">Total Current Liabilities</label>
                    <input type="text" id="cl" placeholder="e.g. 3500000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Including short-term bank borrowing.</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="bankbor">Short-term Bank Borrowing</label>
                    <input type="text" id="bankbor" placeholder="e.g. 1500000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Part of current liabilities; used for MPBF.</div>
                </div>
                <div class="form-group">
                    <label for="tnw">Tangible Net Worth (Own Funds)</label>
                    <input type="text" id="tnw" placeholder="e.g. 4000000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Capital + reserves − intangibles.</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="tol">Total Outside Liabilities</label>
                    <input type="text" id="tol" placeholder="e.g. 9000000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">All liabilities except own funds.</div>
                </div>
                <div class="form-group">
                    <label for="debt">Total Debt (Term + Working Capital)</label>
                    <input type="text" id="debt" placeholder="e.g. 6000000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">For debt-equity ratio.</div>
                </div>
            </div>

            <div class="field-group-title">Profit & Loss / Debt Servicing</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="pat">Net Profit After Tax (PAT)</label>
                    <input type="text" id="pat" placeholder="e.g. 1200000" inputmode="decimal" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="dep">Depreciation</label>
                    <input type="text" id="dep" placeholder="e.g. 400000" inputmode="decimal" autocomplete="off">
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="interest">Interest on Term Loan</label>
                    <input type="text" id="interest" placeholder="e.g. 500000" inputmode="decimal" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="instal">Annual Loan Instalment (Principal)</label>
                    <input type="text" id="instal" placeholder="e.g. 800000" inputmode="decimal" autocomplete="off">
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Ratios</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div id="ratiosContainer"></div>
                <div id="mpbfContainer"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want these ratios in a bank-ready CMA report?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant prepares lender-format CMA data and projections, tuned so your ratios and MPBF meet bank norms.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20CMA%20Ratio%20Calculator%20and%20need%20help%20preparing%20a%20CMA%20report%20for%20a%20bank%20loan.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=CMA%20report%20/%20bank%20loan%20preparation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20CMA%20Ratio%20Calculator%20and%20would%20like%20help%20preparing%20a%20CMA%20report%20for%20a%20bank%20loan.%0A%0AMy%20details%3A%0A-%20Business%3A%0A-%20Loan%20type%20%28working%20capital%20/%20term%29%3A%0A-%20Loan%20amount%20sought%3A%0A-%20Bank%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the CMA Ratio Calculator</h2>
            <ol>
                <li><strong>Enter your balance-sheet figures</strong> — current assets, current liabilities, short-term bank borrowing, tangible net worth, total outside liabilities and total debt.</li>
                <li><strong>Add the debt-servicing figures</strong> — profit after tax, depreciation, interest on term loan and the annual principal instalment.</li>
                <li><strong>Click Calculate.</strong> The tool returns the current ratio, debt-equity, DSCR, ISCR and TOL/TNW, each colour-coded against the bank benchmark, plus your MPBF under the Tandon second method.</li>
                <li><strong>Read the flags</strong> — green meets the benchmark, amber is borderline, red is below the acceptable floor and likely needs improvement before applying.</li>
            </ol>
            <p>Keep all figures in the same unit. Pair this with the standalone <a href="/tools/dscr-calculator">DSCR calculator</a>, <a href="/tools/current-ratio-calculator">current ratio calculator</a> and <a href="/tools/working-capital-calculator">working capital calculator</a> for deeper drill-downs, or the <a href="/tools/financial-ratios-dashboard">financial ratios dashboard</a> for a full view.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Banks appraise projected CMA figures, not just historicals. Model two to three forward years so the ratios trend towards the benchmark — a improving trajectory reassures the lender even if year one is tight.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>What Is CMA Data?</h2>
            <p>CMA stands for <strong>Credit Monitoring Arrangement</strong>. It is a standardised financial statement format that banks use to appraise and monitor credit — particularly working capital limits and term loans. A complete CMA report covers the operating statement, balance sheet, comparative analysis, fund flow statement, the MPBF working and a ratio analysis, and is commonly prepared in the format associated with the <a href="https://www.iba.org.in/" target="_blank" rel="noopener">Indian Banks' Association</a>.</p>
            <p>The base financials feeding a CMA are drawn from your audited accounts and income-tax filings on the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">income-tax portal</a>, so the numbers must reconcile across documents.</p>
            <p>The lender uses CMA data to judge two things: how much it can safely lend (through MPBF) and whether the business can repay (through the ratios and cash flows). Most working capital facilities and business loans above a few lakh rupees require CMA data, usually prepared by a <a href="/accounting-services">Chartered Accountant or accounting professional</a> following the standards and guidance issued by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>.</p>
            <h3>CMA data vs project report</h3>
            <p>A <strong>project report</strong> is a wider business document — promoters, market, technical feasibility and projections — used mainly for new ventures or capex. <strong>CMA data</strong> is the structured number-focused format banks monitor credit against. Many loan files include both.</p>
        </section>

        <section class="content-section" id="ratios">
            <h2>The Key CMA Ratios & Their Benchmarks</h2>
            <p>Banks following the Tandon Committee norms look for these benchmark levels in CMA appraisals:</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Ratio</th><th>What it measures</th><th>Benchmark</th></tr>
                </thead>
                <tbody>
                    <tr><td>Current Ratio</td><td>Short-term liquidity</td><td>1.33 (floor 1.17)</td></tr>
                    <tr><td>DSCR</td><td>Capacity to service debt</td><td>1.50 avg (floor 1.40; ≥1.25 often accepted)</td></tr>
                    <tr><td>ISCR</td><td>Capacity to pay interest</td><td>2.50 (floor 2.00)</td></tr>
                    <tr><td>TOL/TNW</td><td>Leverage vs own funds</td><td>4.00 (max 5.00)</td></tr>
                    <tr><td>Debt-Equity</td><td>Borrowing vs equity</td><td>~2.00 or lower (varies)</td></tr>
                </tbody>
            </table>
            <h3>How each is calculated</h3>
            <div class="formula-box">
                <span class="label">Current Ratio</span> = Current Assets ÷ Current Liabilities<br>
                <span class="label">DSCR</span> = (PAT + Depreciation + Interest) ÷ (Interest + Instalment)<br>
                <span class="label">ISCR</span> = (PAT + Depreciation + Interest) ÷ Interest<br>
                <span class="label">TOL/TNW</span> = Total Outside Liabilities ÷ Tangible Net Worth<br>
                <span class="label">Debt-Equity</span> = Total Debt ÷ Tangible Net Worth
            </div>
            <p>These benchmark norms trace back to the <strong>Tandon Committee</strong> framework adopted by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a>, which most lenders still apply when appraising working capital and term-loan proposals.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with CMA Data & Bank Loan Preparation?</h3>
            <p>Patron Accounting LLP supports businesses preparing CMA data for working capital and term loans — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20CMA%20Ratio%20Calculator%20and%20need%20help%20preparing%20a%20CMA%20report%20for%20a%20bank%20loan.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=CMA%20report%20/%20bank%20loan%20preparation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20CMA%20Ratio%20Calculator%20and%20would%20like%20help%20preparing%20a%20CMA%20report%20for%20a%20bank%20loan.%0A%0AMy%20details%3A%0A-%20Business%3A%0A-%20Loan%20type%20%28working%20capital%20/%20term%29%3A%0A-%20Loan%20amount%20sought%3A%0A-%20Bank%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="mpbf">
            <h2>MPBF — Maximum Permissible Bank Finance</h2>
            <p>MPBF is the ceiling on working capital a bank can lend under the Tandon Committee norms. The widely used <strong>second method</strong> requires the borrower to fund 25% of current assets from long-term sources, which holds the current ratio at about 1.33.</p>
            <div class="formula-box">
                <span class="label">Working Capital Gap</span> = Current Assets − Current Liabilities (excl. bank borrowing)<br>
                <span class="label">MPBF (Method II)</span> = 75% of (Current Assets) − Current Liabilities (excl. bank borrowing)<br>
                <span class="label">i.e.</span> MPBF = Working Capital Gap − 25% of Current Assets
            </div>
            <p>The calculator computes MPBF as the lower-of-the-two-method-II figure based on what you enter for current assets, current liabilities and short-term bank borrowing. The actual sanction also depends on drawing power, security and the bank's internal policy.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> MPBF sets the maximum; it is not a guaranteed sanction. Lenders also apply drawing-power limits on stock and debtors, margins, and their own credit policy on top of the Tandon calculation.</p>
            </div>
        </section>

        <section class="content-section" id="example">
            <h2>A Worked Example</h2>
            <p>Suppose a trading business has current assets of ₹50,00,000, current liabilities of ₹35,00,000 (of which ₹15,00,000 is short-term bank borrowing), tangible net worth of ₹40,00,000, total outside liabilities of ₹90,00,000 and total debt of ₹60,00,000. Its profit after tax is ₹12,00,000, depreciation ₹4,00,000, term-loan interest ₹5,00,000 and annual principal instalment ₹8,00,000.</p>
            <ul>
                <li><strong>Current ratio</strong> = 50,00,000 ÷ 35,00,000 = <strong>1.43</strong> — comfortably above the 1.33 benchmark.</li>
                <li><strong>Debt-equity</strong> = 60,00,000 ÷ 40,00,000 = <strong>1.50</strong> — within the typical 2:1 reference.</li>
                <li><strong>TOL/TNW</strong> = 90,00,000 ÷ 40,00,000 = <strong>2.25</strong> — well inside the 4.00 benchmark.</li>
                <li><strong>DSCR</strong> = (12,00,000 + 4,00,000 + 5,00,000) ÷ (5,00,000 + 8,00,000) = <strong>1.62</strong> — above the 1.50 norm.</li>
                <li><strong>ISCR</strong> = 21,00,000 ÷ 5,00,000 = <strong>4.20</strong> — above the 2.50 norm.</li>
                <li><strong>MPBF (Method II)</strong> = 75% × 50,00,000 − (35,00,000 − 15,00,000) = 37,50,000 − 20,00,000 = <strong>₹17,50,000</strong>.</li>
            </ul>
            <p>This borrower presents a healthy CMA profile — every ratio clears its benchmark, so the proposal would likely be viewed favourably. The benchmark levels themselves derive from the Tandon Committee framework adopted by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> and remain the working standard most lenders apply.</p>
        </section>

        <section class="content-section" id="improve">
            <h2>How to Improve Your CMA Ratios</h2>
            <p>If a ratio falls short of the benchmark, these adjustments — modelled into projected CMA data — usually help:</p>
            <ul>
                <li><strong>Inject promoter capital</strong> — raises tangible net worth, improving TOL/TNW, debt-equity and the current ratio.</li>
                <li><strong>Convert short-term to long-term funds</strong> — moving working capital off short-term borrowing lifts the current ratio toward 1.33.</li>
                <li><strong>Retain profits</strong> — ploughing back earnings builds net worth and reduces leverage over the projection years.</li>
                <li><strong>Match repayments to cash flow</strong> — structuring instalments to your cash cycle improves DSCR.</li>
                <li><strong>Clear slow current liabilities</strong> — reducing creditors and short-term dues improves liquidity ratios.</li>
            </ul>
            <p>A CA preparing your CMA data can model these so the projected ratios satisfy bank norms. MSME borrowers registered on the <a href="https://udyamregistration.gov.in/" target="_blank" rel="noopener">Udyam portal</a> may also access collateral-free credit schemes that ease the security requirement. For company borrowers, also confirm any term-loan disclosures under <a href="/blog/caro-2020-clause-x-public-issues-term-loans">CARO 2020 Clause (x)</a> where applicable.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions on CMA Ratios</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is CMA data and why do banks need it?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">CMA stands for Credit Monitoring Arrangement. It is a standardised set of financial statements — operating statement, balance sheet, fund flow, MPBF working and ratio analysis — that banks use to appraise a working capital or term loan. The lender reviews past and projected performance to judge repayment capacity and the maximum it can safely lend. CMA data is typically required for working capital limits and most business loans above a few lakh rupees.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Which ratios matter most in a CMA report?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The ratios banks scrutinise most are the current ratio, debt service coverage ratio (DSCR), interest service coverage ratio (ISCR), total outside liabilities to tangible net worth (TOL/TNW) and the debt-equity ratio. Together they show liquidity, repayment capacity and leverage. This calculator computes each from your figures and flags whether it meets the commonly accepted benchmark a lender looks for.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is a good current ratio for a bank loan?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under the Tandon Committee norms that banks follow, the benchmark current ratio is 1.33, and ordinarily it should not fall below 1.17. A current ratio of 1.33 means the borrower funds at least 25% of current assets from long-term sources, which lenders view as a sign of healthy liquidity. A figure well below 1.17 usually weakens the loan proposal and may need restructuring before submission.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What DSCR do banks expect in CMA data?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For term loans the benchmark average debt service coverage ratio is around 1.50 and ordinarily not below 1.40, though many lenders accept a DSCR of at least 1.25 for individual years. DSCR measures whether profit plus depreciation and interest can cover loan instalments and interest. A DSCR below 1 means the business cannot service its debt from operations, which is a serious red flag for any lender.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the TOL/TNW ratio benchmark?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Total outside liabilities to tangible net worth (TOL/TNW) measures how leveraged the business is against its own funds. The commonly used benchmark is 4.00, and ordinarily it should not exceed 5.00. A lower TOL/TNW means the promoter has more skin in the game and the business relies less on outside borrowing, which strengthens the credit profile in a CMA appraisal.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is MPBF and how is it calculated?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">MPBF stands for Maximum Permissible Bank Finance — the ceiling on working capital a bank can lend under the Tandon Committee norms. Under the widely used second method, MPBF equals 75% of the working capital gap, where the gap is current assets minus current liabilities other than bank borrowing. The borrower must fund the remaining 25% of current assets from long-term sources, which keeps the current ratio at about 1.33.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between CMA data and a project report?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A project report is a broader business document covering the promoters, the project, the market, technical feasibility and financial projections, used mainly for new ventures or capital expenditure. CMA data is the structured financial statement format banks use to monitor and appraise credit, focused on operating statements, balance sheets, fund flow, MPBF and ratios. Many loan files include both — the project report for context and CMA data for the numbers.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the debt-equity ratio banks look for?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The debt-equity ratio compares borrowed funds to the promoter's own funds. For most term loans lenders prefer a debt-equity ratio of around 2:1 or lower, though acceptable levels vary by industry and loan type. A high debt-equity ratio signals aggressive leverage and higher risk, so improving promoter contribution before applying often helps the proposal. This calculator shows your ratio against a typical 2:1 reference.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can I improve my ratios before applying for a loan?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Bringing in additional promoter capital, converting short-term borrowing to long-term funds, clearing slow-moving current liabilities and retaining profits all improve the current ratio, TOL/TNW and debt-equity. Structuring repayments to match cash flows improves DSCR. A CA preparing your CMA data can model these adjustments so the projected ratios meet bank norms before the proposal is submitted.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does this calculator replace a CA-prepared CMA report?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. This tool gives an indicative read on the headline ratios and MPBF so you can sense-check a proposal. A full CMA report requires multi-year operating statements, balance sheet projections, a fund flow statement and assumptions that satisfy the lender's format. A Chartered Accountant should prepare and review the complete CMA data before you submit it to the bank.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the CMA Ratio Calculator free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting CMA Ratio Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It computes the current ratio, DSCR, ISCR, TOL/TNW, debt-equity ratio and MPBF from your inputs and benchmarks each against the standard bank lending norms used in CMA appraisals.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Bank-Ready CMA Report</h3>
            <p>Lender-format CMA data and projections tuned to bank norms — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20CMA%20Ratio%20Calculator%20and%20need%20help%20preparing%20a%20CMA%20report%20for%20a%20bank%20loan.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=CMA%20report%20/%20bank%20loan%20preparation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20CMA%20Ratio%20Calculator%20and%20would%20like%20help%20preparing%20a%20CMA%20report%20for%20a%20bank%20loan.%0A%0AMy%20details%3A%0A-%20Business%3A%0A-%20Loan%20type%20%28working%20capital%20/%20term%29%3A%0A-%20Loan%20amount%20sought%3A%0A-%20Bank%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/accounting-services" class="sidebar-link">Accounting Services <span class="arrow">→</span></a>
            <a href="/net-worth-certificate-for-business-loan" class="sidebar-link">NWC for Business Loan <span class="arrow">→</span></a>
            <a href="/udyam-registration" class="sidebar-link">Udyam (MSME) Registration <span class="arrow">→</span></a>
            <a href="/private-limited-company-registration-in-india" class="sidebar-link">Pvt Ltd Registration <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/dscr-calculator" class="sidebar-link">DSCR Calculator <span class="arrow">→</span></a>
            <a href="/tools/current-ratio-calculator" class="sidebar-link">Current Ratio Calculator <span class="arrow">→</span></a>
            <a href="/tools/working-capital-calculator" class="sidebar-link">Working Capital Calculator <span class="arrow">→</span></a>
            <a href="/tools/financial-ratios-dashboard" class="sidebar-link">Financial Ratios Dashboard <span class="arrow">→</span></a>
            <a href="/tools/quick-ratio-calculator" class="sidebar-link">Quick Ratio Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/caro-2020-clause-x-public-issues-term-loans" class="sidebar-link">CARO 2020 — Term Loans <span class="arrow">→</span></a>
        </div>
    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
    // ===== parseINR (UPDATE-TOOLS v1) =====
    function parseINR(raw){ if(raw===undefined||raw===null) return NaN; const c=String(raw).replace(/[,\s\u20B9]/g,''); if(c==='')return NaN; const n=parseFloat(c); return isFinite(n)?n:NaN; }
    function pickPositive(p,fb){ return (isFinite(p)&&p>0)?p:fb; }

    function val(id){ var v = parseINR(document.getElementById(id).value); return isFinite(v) ? v : 0; }
    function fmtINR(n){ return '₹' + Math.round(n).toLocaleString('en-IN'); }
    function fmtRatio(n){ return (isFinite(n) ? n.toFixed(2) : '—'); }

    function ratioCard(name, bench, value, status, statusText){
        var cls = status; // pass | weak | fail
        var html = '<div class="ratio-card '+cls+'">';
        html += '<div><div class="ratio-name">'+name+'</div><div class="ratio-bench">Benchmark: '+bench+'</div></div>';
        html += '<div class="ratio-right"><div class="ratio-value">'+value+'</div><span class="ratio-pill '+cls+'">'+statusText+'</span></div>';
        html += '</div>';
        return html;
    }

    function calculate(){
        var ca = val('ca'), cl = val('cl'), bankbor = val('bankbor');
        var tnw = val('tnw'), tol = val('tol'), debt = val('debt');
        var pat = val('pat'), dep = val('dep'), interest = val('interest'), instal = val('instal');

        if (ca <= 0 || cl <= 0){ alert('Please enter at least Current Assets and Current Liabilities (greater than zero).'); return; }

        var html = '';

        // Current ratio: bench 1.33, floor 1.17
        var cr = ca / cl;
        var crStatus = cr >= 1.33 ? 'pass' : (cr >= 1.17 ? 'weak' : 'fail');
        var crText = cr >= 1.33 ? 'Meets 1.33' : (cr >= 1.17 ? 'Below 1.33' : 'Below floor 1.17');
        html += ratioCard('Current Ratio', '1.33 (floor 1.17)', fmtRatio(cr), crStatus, crText);

        // Debt-equity: bench <=2
        if (tnw > 0){
            var de = debt / tnw;
            var deStatus = de <= 2 ? 'pass' : (de <= 3 ? 'weak' : 'fail');
            var deText = de <= 2 ? 'Within ~2:1' : (de <= 3 ? 'High' : 'Very high');
            html += ratioCard('Debt-Equity', '≤ ~2.00', fmtRatio(de), deStatus, deText);

            // TOL/TNW: bench 4, max 5
            var tt = tol / tnw;
            var ttStatus = tt <= 4 ? 'pass' : (tt <= 5 ? 'weak' : 'fail');
            var ttText = tt <= 4 ? 'Within 4.00' : (tt <= 5 ? 'Near max 5.00' : 'Over max 5.00');
            html += ratioCard('TOL / TNW', '4.00 (max 5.00)', fmtRatio(tt), ttStatus, ttText);
        }

        // DSCR: (PAT+dep+interest)/(interest+instal); bench 1.50 floor 1.40 (1.25 ok)
        var debtService = interest + instal;
        if (debtService > 0){
            var dscr = (pat + dep + interest) / debtService;
            var dscrStatus = dscr >= 1.50 ? 'pass' : (dscr >= 1.25 ? 'weak' : 'fail');
            var dscrText = dscr >= 1.50 ? 'Meets 1.50' : (dscr >= 1.25 ? 'Min acceptable' : 'Below 1.25');
            html += ratioCard('DSCR', '1.50 (≥1.25 often ok)', fmtRatio(dscr), dscrStatus, dscrText);
        }

        // ISCR: (PAT+dep+interest)/interest; bench 2.50 floor 2.00
        if (interest > 0){
            var iscr = (pat + dep + interest) / interest;
            var iscrStatus = iscr >= 2.50 ? 'pass' : (iscr >= 2.00 ? 'weak' : 'fail');
            var iscrText = iscr >= 2.50 ? 'Meets 2.50' : (iscr >= 2.00 ? 'Below 2.50' : 'Below floor 2.00');
            html += ratioCard('ISCR', '2.50 (floor 2.00)', fmtRatio(iscr), iscrStatus, iscrText);
        }

        document.getElementById('ratiosContainer').innerHTML = html;

        // MPBF Method II = 0.75*CA - (CL excluding bank borrowing)
        var clExBank = Math.max(0, cl - bankbor);
        var mpbf = 0.75 * ca - clExBank;
        var mhtml = '<div class="mpbf-box">';
        mhtml += '<div class="mpbf-label">MPBF — Maximum Permissible Bank Finance (Tandon Method II)</div>';
        mhtml += '<div class="mpbf-value">' + (mpbf > 0 ? fmtINR(mpbf) : '₹0') + '</div>';
        if (mpbf <= 0){
            mhtml += '<div class="mpbf-note">With these figures the Method II formula yields nil or negative permissible finance — current liabilities (excl. bank borrowing) already exceed 75% of current assets. Increasing long-term funding would create headroom.</div>';
        } else {
            mhtml += '<div class="mpbf-note">= 75% of Current Assets ('+fmtINR(0.75*ca)+') − Current Liabilities excl. bank borrowing ('+fmtINR(clExBank)+'). This is a ceiling, not a guaranteed sanction; drawing power, margins and bank policy also apply.</div>';
        }
        mhtml += '</div>';
        document.getElementById('mpbfContainer').innerHTML = mhtml;

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        ['ca','cl','bankbor','tnw','tol','debt','pat','dep','interest','instal'].forEach(function(id){ document.getElementById(id).value=''; });
        document.getElementById('resultSection').classList.remove('visible');
    }

    ['ca','cl','bankbor','tnw','tol','debt','pat','dep','interest','instal'].forEach(function(id){
        document.getElementById(id).addEventListener('keydown', function(e){ if (e.key === 'Enter') calculate(); });
    });

    function toggleFaq(e){
        var btn = e.closest ? e.closest('.faq-question') || e : e;
        var item = btn.closest('.faq-item');
        if (!item) return;
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(function(i){ i.classList.remove('open'); });
        if (!isOpen) item.classList.add('open');
    }

    var sections = document.querySelectorAll('section[id], header[id]');
    var navLinks = document.querySelectorAll('.toc-nav a');
    window.addEventListener('scroll', function(){
        var current = '';
        sections.forEach(function(s){ var top = s.offsetTop - 80; if (window.pageYOffset >= top) current = s.getAttribute('id'); });
        navLinks.forEach(function(link){ link.classList.toggle('active', link.getAttribute('href') === '#' + current); });
    });
</script>
@endsection
