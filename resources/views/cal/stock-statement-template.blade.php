@extends('layouts.app')

@section('meta')
<title>Stock Statement Template &amp; Drawing Power Calculator</title>
<meta name="description" content="Free stock statement template and drawing power calculator: enter stock, creditors, debtors and margins to get DP, CC headroom and a copy-ready bank format.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/stock-statement-template">

<meta property="og:title" content="Stock Statement Template & Drawing Power Calculator">
<meta property="og:description" content="Enter stock, creditors, debtors and margins to compute drawing power and CC headroom, and copy a bank-ready stock statement format (Parts A–E).">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/stock-statement-template">
<meta property="og:image" content="/tools/stock-statement-template-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Stock Statement Template & Drawing Power Calculator">
<meta name="twitter:description" content="Compute drawing power and CC headroom from stock, creditors and debtors, and copy a bank-ready stock statement format. Free & instant.">
<meta name="twitter:image" content="/tools/stock-statement-template-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Stock Statement Template & Drawing Power Calculator",
  "description": "Stock Statement Template and Drawing Power Calculator computes the drawing power on a cash credit or working capital facility from eligible stock, creditors for purchases, eligible book debts and the bank margins, shows the available headroom against the sanctioned limit and whether the account is in order, and produces a copy-ready bank stock statement format covering stock, debtor ageing, creditors, insurance and certification.",
  "url": "/tools/stock-statement-template",
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
    {"@type": "ListItem", "position": 3, "name": "Stock Statement Template & Drawing Power Calculator", "item": "/tools/stock-statement-template"}
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
      "name": "What is a stock statement for a bank?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A stock statement is a periodic statement a borrower submits to its bank against a cash credit or working capital limit, declaring the value of stock (inventory), book debts (receivables) and creditors as on a date. The bank uses it to compute the drawing power — the amount the borrower may actually withdraw. It is usually a monthly or quarterly condition of the sanction and typically covers stock by category, debtor ageing, creditors, insurance and a borrower certification."
      }
    },
    {
      "@type": "Question",
      "name": "What is drawing power (DP)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Drawing power is the maximum amount a borrower can withdraw from a sanctioned cash credit or overdraft limit at a given time, based on current eligible assets after deducting the bank's margin. The borrower may draw the lower of the drawing power or the sanctioned limit. Because DP is recalculated from each stock statement, it moves with the value of paid stock and eligible debtors, keeping the borrowing backed by real assets."
      }
    },
    {
      "@type": "Question",
      "name": "How is drawing power calculated from a stock statement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Drawing power equals the net value of stock plus the net value of debtors. Net value of stock is paid stock — that is total eligible stock less creditors for purchases — multiplied by one minus the stock margin. Net value of debtors is eligible book debts within the ageing limit multiplied by one minus the debtor margin. The two nets are added to give DP, which is then compared with the sanctioned limit; the borrower can use whichever is lower."
      }
    },
    {
      "@type": "Question",
      "name": "What margins do banks apply on stock and debtors?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The margin is the borrower's own contribution that the bank does not finance. In most cases the margin on stock is around 25 per cent, so the borrower gets credit for 75 per cent of paid stock, and the margin on book debts is around 40 per cent, so the borrower gets credit for 60 per cent of eligible debtors. The exact percentages are specified in the sanction letter and vary by bank and industry."
      }
    },
    {
      "@type": "Question",
      "name": "What is paid stock and why are creditors deducted?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Paid stock is the stock for which the borrower has actually paid the supplier — total stock less the creditors for purchases. Banks finance only paid stock, because stock still owed to suppliers is effectively financed by those creditors, not by the borrower's own funds. Deducting creditors prevents double financing of the same inventory and ensures the drawing power reflects assets genuinely backed by the borrower."
      }
    },
    {
      "@type": "Question",
      "name": "Which stock and debtors are eligible for drawing power?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Only paid and insured stock counts, and obsolete or slow-moving items and stock beyond the ageing limit are excluded. Book debts are usually eligible only up to a specified age — commonly 90 days, though some sanctions allow longer. Stock lying at third-party locations, goods in transit and ineligible categories may be excluded depending on the sanction terms. Always apply the eligibility rules in your own sanction letter before computing DP."
      }
    },
    {
      "@type": "Question",
      "name": "What happens if the CC outstanding exceeds the drawing power?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "If the cash credit outstanding is higher than the drawing power, the account is treated as irregular or out of order. The bank may ask the borrower to deposit the excess, reduce drawings, or provide additional security. Persistent irregularity can affect the account classification and the borrower's credit standing, so the stock statement should be prepared accurately and the drawings kept within the computed DP."
      }
    },
    {
      "@type": "Question",
      "name": "How often must a stock statement be submitted?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most cash credit sanctions require a monthly stock statement, due shortly after each month end, while some facilities accept quarterly statements. The frequency and due date are set in the sanction letter. A drawing power computed from a statement older than three months is generally treated as outdated, and the outstanding based on such a stale statement can be considered irregular, so timely submission matters."
      }
    },
    {
      "@type": "Question",
      "name": "What sections does a stock statement contain?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A typical bank stock statement has five parts: Part A lists stock by category such as raw material, work in progress, finished goods and stores or spares; Part B is the book-debt ageing analysis; Part C lists creditors for purchases; Part D records insurance details of the stock; and Part E is the borrower's certification. The copy-ready template in this tool follows this Part A to E structure so you can adapt it to your bank's format."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Stock Statement Template tool free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting Stock Statement Template and Drawing Power Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It computes paid stock, net stock and net debtor values, drawing power and headroom against the sanctioned limit, flags whether the account is in order, and gives a copy-ready stock statement format you can finalise for your bank."
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
        .dp-box { border-radius: var(--radius); padding: 22px 24px; margin-bottom: 16px; border: 1px solid var(--border); border-left: 4px solid var(--primary); background: var(--surface); }
        .dp-box.ok { border-left-color: var(--success); background: #F0FDF4; }
        .dp-box.over { border-left-color: var(--danger); background: #FEF2F2; }
        .dp-label { font-family: var(--font-mono); font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: var(--text-muted); margin-bottom: 6px; }
        .dp-value { font-family: var(--font-mono); font-size: 30px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; word-break: break-word; }
        .dp-status { display: inline-block; font-size: 12px; font-weight: 700; padding: 3px 12px; border-radius: 12px; margin-top: 10px; }
        .dp-status.ok { background: #D1FAE5; color: #059669; }
        .dp-status.over { background: #FEE2E2; color: #DC2626; }
        .dp-sub { font-size: 13px; color: var(--text-secondary); margin-top: 10px; line-height: 1.6; }
        .result-breakdown { margin-top: 4px; background: var(--surface-alt); border-radius: var(--radius); padding: 16px 20px; margin-bottom: 14px; }
        .breakdown-row { display: flex; justify-content: space-between; align-items: center; padding: 6px 0; font-size: 14px; gap: 12px; }
        .breakdown-row:not(:last-child) { border-bottom: 1px dashed var(--border); }
        .breakdown-row.total { border-top: 2px solid var(--border); margin-top: 4px; padding-top: 10px; font-weight: 700; }
        .breakdown-label { color: var(--text-secondary); }
        .breakdown-value { font-family: var(--font-mono); font-weight: 700; color: var(--text); text-align: right; word-break: break-word; }
        .template-box { background: #fff; border: 1px solid var(--border); border-radius: var(--radius); overflow: hidden; margin-bottom: 14px; }
        .template-head { background: var(--primary-dark); color:#fff; padding: 10px 16px; font-size: 12px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; display:flex; justify-content:space-between; align-items:center; }
        .copy-btn { background: var(--accent); color: var(--primary-dark); border:none; border-radius: 6px; padding: 5px 12px; font-family: var(--font-body); font-size:12px; font-weight:700; cursor:pointer; }
        .copy-btn:active { transform: scale(0.97); }
        .template-body { padding: 18px 20px; font-family: var(--font-mono); font-size: 12.5px; line-height: 1.85; color: var(--text); white-space: pre-wrap; word-break: break-word; max-height: 460px; overflow-y: auto; }
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
        .faq-item.open .faq-answer { max-height: 700px; }
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
        <a href="#what-is">What It Is</a>
        <a href="#formula">DP Formula</a>
        <a href="#example">Example</a>
        <a href="#sections">Statement Parts</a>
        <a href="#mistakes">Avoid Mistakes</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Stock Statement Template & Drawing Power Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Stock Statement Template & <span>Drawing Power Calculator</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">CC account out of order? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Stock%20Statement%20Template%20tool%20and%20need%20help%20with%20bank%20stock%20statements%20and%20drawing%20power.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Bank%20stock%20statement%20/%20drawing%20power%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Stock%20Statement%20Template%20tool%20and%20would%20like%20help%20with%20bank%20stock%20statements%20and%20drawing%20power.%0A%0AMy%20details%3A%0A-%20Business%3A%0A-%20Bank%20%26%20CC/WC%20limit%3A%0A-%20Stock%20statement%20frequency%20%28monthly/quarterly%29%3A%0A-%20Current%20issue%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Enter your <strong>eligible stock, creditors, eligible debtors</strong> and the <strong>bank margins</strong> and this free tool computes your <strong>drawing power (DP)</strong> on a cash-credit / working-capital limit, the <strong>headroom against your sanctioned limit</strong>, and whether the account is <strong>in order</strong>. It also gives a <strong>copy-ready stock statement format</strong> (Parts A–E: stock, debtors, creditors, insurance, certification). DP = paid stock × (1 − stock margin) + eligible debtors × (1 − debtor margin); margins are typically 25% on stock and 40% on debtors, per your sanction letter.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Drawing Power</h2>
            <p class="calc-sub">Enter amounts in ₹ as on your statement date. Use only paid & insured stock and eligible (within-ageing) debtors.</p>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript, or apply the formula DP = (Stock − Creditors) × (1 − stock margin) + Debtors × (1 − debtor margin) manually.
                </div>
            </noscript>

            <div class="field-group-title">Assets & Creditors</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="stock">Eligible Stock (Inventory)</label>
                    <input type="text" id="stock" placeholder="e.g. 1500000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Paid & insured; exclude obsolete / over-age stock.</div>
                </div>
                <div class="form-group">
                    <label for="creditors">Creditors for Purchases</label>
                    <input type="text" id="creditors" placeholder="e.g. 300000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Deducted from stock to get paid stock.</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="debtors">Eligible Book Debts (Debtors)</label>
                    <input type="text" id="debtors" placeholder="e.g. 500000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Within ageing limit (e.g. ≤ 90 days).</div>
                </div>
                <div class="form-group">
                    <label for="cclimit">Sanctioned CC / WC Limit</label>
                    <input type="text" id="cclimit" placeholder="e.g. 1200000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Drawing is the lower of DP or this limit.</div>
                </div>
            </div>

            <div class="field-group-title">Margins (from sanction letter)</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="stockMargin">Stock Margin %</label>
                    <input type="text" id="stockMargin" placeholder="25" inputmode="decimal" autocomplete="off" value="25">
                    <div class="field-hint">Typical 25% (borrower gets 75%).</div>
                </div>
                <div class="form-group">
                    <label for="debtorMargin">Debtor Margin %</label>
                    <input type="text" id="debtorMargin" placeholder="40" inputmode="decimal" autocomplete="off" value="40">
                    <div class="field-hint">Typical 40% (borrower gets 60%).</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="ccOutstanding">CC Outstanding <span style="font-weight:400;">(optional)</span></label>
                    <input type="text" id="ccOutstanding" placeholder="current utilisation" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">To check if the account is in order.</div>
                </div>
                <div class="form-group"></div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Drawing Power</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="dp-box" id="dpBox">
                    <div class="dp-label">Drawing Power (DP)</div>
                    <div class="dp-value" id="dpValue">—</div>
                    <div class="dp-sub" id="dpSub"></div>
                </div>
                <div class="result-breakdown" id="breakdownSection"></div>
                <div class="template-box">
                    <div class="template-head"><span>Copy-ready stock statement (Parts A–E)</span><button type="button" class="copy-btn" onclick="copyTemplate()">Copy</button></div>
                    <div class="template-body" id="templateBody"></div>
                </div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want this filed and reconciled every month?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant prepares your monthly stock statement, reconciles it to your books, and keeps your drawing power optimised so the CC account stays in order.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Stock%20Statement%20Template%20tool%20and%20need%20help%20with%20bank%20stock%20statements%20and%20drawing%20power.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Bank%20stock%20statement%20/%20drawing%20power%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Stock%20Statement%20Template%20tool%20and%20would%20like%20help%20with%20bank%20stock%20statements%20and%20drawing%20power.%0A%0AMy%20details%3A%0A-%20Business%3A%0A-%20Bank%20%26%20CC/WC%20limit%3A%0A-%20Stock%20statement%20frequency%20%28monthly/quarterly%29%3A%0A-%20Current%20issue%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Stock Statement Tool</h2>
            <ol>
                <li><strong>Enter eligible stock and creditors</strong> — only paid, insured, within-ageing stock; creditors for purchases are deducted to get paid stock.</li>
                <li><strong>Enter eligible book debts</strong> — receivables within the sanction's ageing limit (commonly 90 days).</li>
                <li><strong>Enter the margins from your sanction letter</strong> — defaults are 25% on stock and 40% on debtors; change them to match your terms.</li>
                <li><strong>Add the sanctioned limit (and optionally the CC outstanding).</strong> The tool returns DP, the headroom, an in-order / out-of-order flag, and a copy-ready statement.</li>
            </ol>
            <p>Pair this with the <a href="/tools/working-capital-calculator">working capital calculator</a> and the <a href="/tools/cash-conversion-cycle-calculator">cash conversion cycle calculator</a> to see how inventory and receivables drive your funding need.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> The margins and the debtor ageing limit are bank-specific — always read them off your sanction letter rather than assuming the 25%/40% defaults. The wrong margin changes DP materially.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>What Is a Stock Statement?</h2>
            <p>A <strong>stock statement</strong> is the periodic declaration a borrower files with its bank against a <strong>cash credit (CC)</strong> or working-capital limit, showing the value of stock, book debts and creditors as on a date. The bank uses it to set the <strong>drawing power</strong> — the amount actually available to draw, which can be less than the sanctioned limit.</p>
            <p>It is a post-sanction <strong>credit-monitoring</strong> tool: by updating DP from each statement, the bank keeps the borrowing backed by current, eligible assets. It is usually a monthly (sometimes quarterly) condition of the sanction, and for companies it connects to the auditor's checks under <a href="/blog/caro-2020-clause-ii-inventories">CARO 2020 Clause (ii)</a> on inventory and bank stock statements — a reporting requirement framed by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>.</p>
        </section>

        <section class="content-section" id="formula">
            <h2>The Drawing Power Formula</h2>
            <div class="formula-box">
                <span class="label">Paid Stock</span> = Eligible Stock − Creditors for purchases<br>
                <span class="label">Net Stock</span> = Paid Stock × (1 − Stock Margin)<br>
                <span class="label">Net Debtors</span> = Eligible Debtors × (1 − Debtor Margin)<br><br>
                <span class="label">Drawing Power</span> = Net Stock + Net Debtors<br>
                <span class="label">Available to draw</span> = lower of (DP, Sanctioned Limit)
            </div>
            <p>Margins are the borrower's own contribution that the bank does not finance — typically <strong>25% on stock</strong> (so 75% is funded) and <strong>40% on debtors</strong> (60% funded), as specified in the sanction letter. If the CC outstanding exceeds DP, the account is treated as irregular or <strong>out of order</strong>. The drawing-power discipline traces back to the Tandon and Chore committee framework adopted by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a>.</p>
        </section>

        <section class="content-section" id="example">
            <h2>A Worked Example</h2>
            <p>Suppose a trading firm has a sanctioned cash credit limit of ₹12,00,000. Its month-end stock statement shows eligible stock of ₹15,00,000, creditors for purchases of ₹3,00,000, and eligible book debts (within 90 days) of ₹5,00,000. The sanction letter sets a 25% margin on stock and 40% on debtors.</p>
            <ul>
                <li><strong>Paid stock</strong> = 15,00,000 − 3,00,000 = <strong>₹12,00,000</strong>.</li>
                <li><strong>Net stock</strong> = 12,00,000 × (1 − 25%) = <strong>₹9,00,000</strong>.</li>
                <li><strong>Net debtors</strong> = 5,00,000 × (1 − 40%) = <strong>₹3,00,000</strong>.</li>
                <li><strong>Drawing power</strong> = 9,00,000 + 3,00,000 = <strong>₹12,00,000</strong>.</li>
                <li><strong>Available to draw</strong> = lower of DP (₹12,00,000) and limit (₹12,00,000) = <strong>₹12,00,000</strong>.</li>
            </ul>
            <p>Here the firm can use its full limit. If creditors had been higher — say ₹6,00,000 — paid stock would fall to ₹9,00,000, net stock to ₹6,75,000, DP to ₹9,75,000, and only that lower figure could be drawn even though the sanctioned limit is unchanged. That sensitivity is exactly why banks recompute DP from every statement, and why MSME borrowers registered on the <a href="https://udyamregistration.gov.in/" target="_blank" rel="noopener">Udyam portal</a> are encouraged to keep clean, current stock records.</p>
        </section>

        <section class="content-section" id="sections">
            <h2>The Five Parts of a Stock Statement</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Part</th><th>Contents</th></tr>
                </thead>
                <tbody>
                    <tr><td>Part A — Stock</td><td>Stock by category: raw material, work in progress, finished goods, stores/spares (paid & insured).</td></tr>
                    <tr><td>Part B — Book debts</td><td>Debtor ageing analysis; only debts within the eligible age count for DP.</td></tr>
                    <tr><td>Part C — Creditors</td><td>Creditors for purchases, deducted from stock to arrive at paid stock.</td></tr>
                    <tr><td>Part D — Insurance</td><td>Insurance policy details covering the hypothecated stock.</td></tr>
                    <tr><td>Part E — Certification</td><td>Borrower's declaration that the statement is true and the stock is owned, paid and insured.</td></tr>
                </tbody>
            </table>
            <p>The copy-ready template generated above follows this Part A–E structure. For the underlying inventory metrics, see the blogs on <a href="/blog/inventory-turnover-ratio">inventory turnover</a> and <a href="/blog/days-inventory-outstanding-dio">days inventory outstanding</a>.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Bank Stock Statements & Drawing Power?</h3>
            <p>Patron Accounting LLP supports CC/OD borrowers who must file monthly stock statements — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Stock%20Statement%20Template%20tool%20and%20need%20help%20with%20bank%20stock%20statements%20and%20drawing%20power.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Bank%20stock%20statement%20/%20drawing%20power%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Stock%20Statement%20Template%20tool%20and%20would%20like%20help%20with%20bank%20stock%20statements%20and%20drawing%20power.%0A%0AMy%20details%3A%0A-%20Business%3A%0A-%20Bank%20%26%20CC/WC%20limit%3A%0A-%20Stock%20statement%20frequency%20%28monthly/quarterly%29%3A%0A-%20Current%20issue%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="mistakes">
            <h2>Common Stock Statement Mistakes</h2>
            <ul>
                <li><strong>Inflating stock values</strong> — banks reconcile with purchase/sales records and physical verification; overstatement is a serious red flag.</li>
                <li><strong>Including ineligible stock</strong> — obsolete, slow-moving, uninsured, or over-age stock should be excluded.</li>
                <li><strong>Not deducting creditors</strong> — DP is on paid stock; forgetting to remove creditors overstates DP.</li>
                <li><strong>Counting old debtors</strong> — only debts within the ageing limit (often 90 days) are eligible.</li>
                <li><strong>Ignoring third-party stock</strong> — stock at job-workers or in transit may be excluded per sanction terms.</li>
                <li><strong>Late or wrong-format submission</strong> — a DP from a statement older than three months is treated as stale.</li>
            </ul>
            <p>For a deeper checklist, see Patron's <a href="/blog/quarterly-inventory-statement-bank-msme-borrower-guide">MSME stock statement guide</a> and the <a href="/net-worth-certificate-for-business-loan">net worth certificate for business loan</a> service for the wider loan file. MSME borrowers can also explore working-capital schemes via <a href="https://www.sidbi.in/" target="_blank" rel="noopener">SIDBI</a>, and the stock-statement format itself broadly follows the practice standardised by the <a href="https://www.iba.org.in/" target="_blank" rel="noopener">Indian Banks' Association</a>.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is a stock statement for a bank?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A stock statement is a periodic statement a borrower submits to its bank against a cash credit or working capital limit, declaring the value of stock (inventory), book debts (receivables) and creditors as on a date. The bank uses it to compute the drawing power — the amount the borrower may actually withdraw. It is usually a monthly or quarterly condition of the sanction and typically covers stock by category, debtor ageing, creditors, insurance and a borrower certification.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is drawing power (DP)?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Drawing power is the maximum amount a borrower can withdraw from a sanctioned cash credit or overdraft limit at a given time, based on current eligible assets after deducting the bank's margin. The borrower may draw the lower of the drawing power or the sanctioned limit. Because DP is recalculated from each stock statement, it moves with the value of paid stock and eligible debtors, keeping the borrowing backed by real assets.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is drawing power calculated from a stock statement?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Drawing power equals the net value of stock plus the net value of debtors. Net value of stock is paid stock — that is total eligible stock less creditors for purchases — multiplied by one minus the stock margin. Net value of debtors is eligible book debts within the ageing limit multiplied by one minus the debtor margin. The two nets are added to give DP, which is then compared with the sanctioned limit; the borrower can use whichever is lower.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What margins do banks apply on stock and debtors?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The margin is the borrower's own contribution that the bank does not finance. In most cases the margin on stock is around 25 per cent, so the borrower gets credit for 75 per cent of paid stock, and the margin on book debts is around 40 per cent, so the borrower gets credit for 60 per cent of eligible debtors. The exact percentages are specified in the sanction letter and vary by bank and industry.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is paid stock and why are creditors deducted?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Paid stock is the stock for which the borrower has actually paid the supplier — total stock less the creditors for purchases. Banks finance only paid stock, because stock still owed to suppliers is effectively financed by those creditors, not by the borrower's own funds. Deducting creditors prevents double financing of the same inventory and ensures the drawing power reflects assets genuinely backed by the borrower.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Which stock and debtors are eligible for drawing power?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Only paid and insured stock counts, and obsolete or slow-moving items and stock beyond the ageing limit are excluded. Book debts are usually eligible only up to a specified age — commonly 90 days, though some sanctions allow longer. Stock lying at third-party locations, goods in transit and ineligible categories may be excluded depending on the sanction terms. Always apply the eligibility rules in your own sanction letter before computing DP.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What happens if the CC outstanding exceeds the drawing power?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">If the cash credit outstanding is higher than the drawing power, the account is treated as irregular or out of order. The bank may ask the borrower to deposit the excess, reduce drawings, or provide additional security. Persistent irregularity can affect the account classification and the borrower's credit standing, so the stock statement should be prepared accurately and the drawings kept within the computed DP.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How often must a stock statement be submitted?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Most cash credit sanctions require a monthly stock statement, due shortly after each month end, while some facilities accept quarterly statements. The frequency and due date are set in the sanction letter. A drawing power computed from a statement older than three months is generally treated as outdated, and the outstanding based on such a stale statement can be considered irregular, so timely submission matters.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What sections does a stock statement contain?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A typical bank stock statement has five parts: Part A lists stock by category such as raw material, work in progress, finished goods and stores or spares; Part B is the book-debt ageing analysis; Part C lists creditors for purchases; Part D records insurance details of the stock; and Part E is the borrower's certification. The copy-ready template in this tool follows this Part A to E structure so you can adapt it to your bank's format.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the Stock Statement Template tool free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting Stock Statement Template and Drawing Power Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It computes paid stock, net stock and net debtor values, drawing power and headroom against the sanctioned limit, flags whether the account is in order, and gives a copy-ready stock statement format you can finalise for your bank.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Stock Statement & CC Compliance</h3>
            <p>Monthly stock statements, DP optimisation and CC/OD reconciliation — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Stock%20Statement%20Template%20tool%20and%20need%20help%20with%20bank%20stock%20statements%20and%20drawing%20power.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Bank%20stock%20statement%20/%20drawing%20power%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Stock%20Statement%20Template%20tool%20and%20would%20like%20help%20with%20bank%20stock%20statements%20and%20drawing%20power.%0A%0AMy%20details%3A%0A-%20Business%3A%0A-%20Bank%20%26%20CC/WC%20limit%3A%0A-%20Stock%20statement%20frequency%20%28monthly/quarterly%29%3A%0A-%20Current%20issue%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/working-capital-calculator" class="sidebar-link">Working Capital Calculator <span class="arrow">→</span></a>
            <a href="/tools/cash-conversion-cycle-calculator" class="sidebar-link">Cash Conversion Cycle <span class="arrow">→</span></a>
            <a href="/tools/current-ratio-calculator" class="sidebar-link">Current Ratio Calculator <span class="arrow">→</span></a>
            <a href="/tools/dscr-calculator" class="sidebar-link">DSCR Calculator <span class="arrow">→</span></a>
            <a href="/tools/financial-ratios-dashboard" class="sidebar-link">Financial Ratios Dashboard <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/net-worth-certificate-for-business-loan" class="sidebar-link">NWC for Business Loan <span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Accounting Services <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/quarterly-inventory-statement-bank-msme-borrower-guide" class="sidebar-link">MSME Stock Statement Guide <span class="arrow">→</span></a>
            <a href="/blog/caro-2020-clause-ii-inventories" class="sidebar-link">CARO 2020 — Inventories <span class="arrow">→</span></a>
            <a href="/blog/inventory-turnover-ratio" class="sidebar-link">Inventory Turnover Ratio <span class="arrow">→</span></a>
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

    var lastTemplate = '';

    function buildTemplate(d){
        var L = [];
        L.push('STOCK & BOOK DEBT STATEMENT');
        L.push('Borrower: __________________   A/c No: __________');
        L.push('Bank / Branch: __________________');
        L.push('Statement as on: [Date]   CC/WC Limit: ' + fmtINR(d.limit));
        L.push('');
        L.push('PART A - STOCK (paid & insured)            Amount (INR)');
        L.push('  Raw material                              ____________');
        L.push('  Work in progress                          ____________');
        L.push('  Finished goods                            ____________');
        L.push('  Stores & spares                           ____________');
        L.push('  Total eligible stock                      ' + pad(d.stock));
        L.push('  Less: Creditors for purchases             ' + pad(d.creditors));
        L.push('  Paid stock                                ' + pad(d.paidStock));
        L.push('');
        L.push('PART B - BOOK DEBTS (ageing)               Amount (INR)');
        L.push('  Within ' + d.ageNote + ' (eligible)              ' + pad(d.debtors));
        L.push('  Over age limit (ineligible)               ____________');
        L.push('');
        L.push('PART C - CREDITORS FOR PURCHASES           Amount (INR)');
        L.push('  Sundry creditors (goods)                  ' + pad(d.creditors));
        L.push('');
        L.push('PART D - INSURANCE');
        L.push('  Policy no.: __________  Insurer: __________');
        L.push('  Sum insured: __________  Valid up to: __________');
        L.push('');
        L.push('DRAWING POWER WORKING');
        L.push('  Net stock  = Paid stock x (1 - ' + d.sm + '%)   ' + pad(d.netStock));
        L.push('  Net debtors= Debtors x (1 - ' + d.dm + '%)      ' + pad(d.netDebtors));
        L.push('  Drawing Power (DP)                        ' + pad(d.dp));
        L.push('  Available to draw (lower of DP, limit)    ' + pad(d.available));
        L.push('');
        L.push('PART E - CERTIFICATION');
        L.push('  We certify that the above stock is owned by us, is paid for');
        L.push('  and insured, and the book debts are correct and within the');
        L.push('  eligible age. The statement is true to the best of our knowledge.');
        L.push('');
        L.push('  Signature: __________   Name: __________');
        L.push('  Designation: __________   Date: __________');
        return L.join('\n');
    }
    function pad(n){ return fmtINR(n); }

    function calculate(){
        var stock = val('stock'), creditors = val('creditors'), debtors = val('debtors');
        var limit = val('cclimit'), sm = val('stockMargin'), dm = val('debtorMargin');
        var ccOut = val('ccOutstanding');

        if (stock <= 0 && debtors <= 0){ alert('Please enter at least eligible stock or eligible debtors.'); return; }
        if (sm < 0 || sm > 100 || dm < 0 || dm > 100){ alert('Margins must be between 0 and 100.'); return; }

        var paidStock = Math.max(0, stock - creditors);
        var netStock = paidStock * (1 - sm/100);
        var netDebtors = debtors * (1 - dm/100);
        var dp = netStock + netDebtors;
        var available = (limit > 0) ? Math.min(dp, limit) : dp;

        // DP box + status
        var box = document.getElementById('dpBox');
        var sub = '';
        box.className = 'dp-box';
        if (ccOut > 0){
            if (ccOut > dp){
                box.classList.add('over');
                sub = '<span class="dp-status over">Out of order</span><br>CC outstanding (' + fmtINR(ccOut) + ') exceeds DP by ' + fmtINR(ccOut - dp) + '. Reduce drawings or deposit the excess.';
            } else {
                box.classList.add('ok');
                sub = '<span class="dp-status ok">In order</span><br>CC outstanding (' + fmtINR(ccOut) + ') is within DP. Headroom: ' + fmtINR(dp - ccOut) + '.';
            }
        } else if (limit > 0){
            if (dp >= limit){
                box.classList.add('ok');
                sub = '<span class="dp-status ok">Full limit available</span><br>DP covers the entire sanctioned limit of ' + fmtINR(limit) + '.';
            } else {
                box.classList.add('over');
                sub = '<span class="dp-status over">DP below limit</span><br>DP is ' + fmtINR(limit - dp) + ' short of the sanctioned limit; only ' + fmtINR(dp) + ' can be drawn.';
            }
        }
        document.getElementById('dpValue').textContent = fmtINR(dp);
        document.getElementById('dpSub').innerHTML = sub;

        var rows = '';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Eligible stock</span><span class="breakdown-value">' + fmtINR(stock) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Less: creditors for purchases</span><span class="breakdown-value">− ' + fmtINR(creditors) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Paid stock</span><span class="breakdown-value">' + fmtINR(paidStock) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Net stock (after ' + sm + '% margin)</span><span class="breakdown-value">' + fmtINR(netStock) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Net debtors (after ' + dm + '% margin)</span><span class="breakdown-value">' + fmtINR(netDebtors) + '</span></div>';
        rows += '<div class="breakdown-row total"><span class="breakdown-label">Drawing Power (DP)</span><span class="breakdown-value">' + fmtINR(dp) + '</span></div>';
        if (limit > 0){
            rows += '<div class="breakdown-row"><span class="breakdown-label">Sanctioned limit</span><span class="breakdown-value">' + fmtINR(limit) + '</span></div>';
            rows += '<div class="breakdown-row"><span class="breakdown-label">Available to draw (lower of DP, limit)</span><span class="breakdown-value">' + fmtINR(available) + '</span></div>';
        }
        document.getElementById('breakdownSection').innerHTML = rows;

        lastTemplate = buildTemplate({ stock:stock, creditors:creditors, debtors:debtors, limit:limit,
            paidStock:paidStock, netStock:netStock, netDebtors:netDebtors, dp:dp, available:available,
            sm:sm, dm:dm, ageNote:'ageing limit' });
        document.getElementById('templateBody').textContent = lastTemplate;

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function copyTemplate(){
        var txt = document.getElementById('templateBody').textContent;
        if (navigator.clipboard && navigator.clipboard.writeText){
            navigator.clipboard.writeText(txt).then(flashCopied, function(){ legacyCopy(txt); });
        } else { legacyCopy(txt); }
    }
    function legacyCopy(txt){
        var ta = document.createElement('textarea');
        ta.value = txt; ta.style.position='fixed'; ta.style.opacity='0';
        document.body.appendChild(ta); ta.select();
        try { document.execCommand('copy'); flashCopied(); } catch(e) {}
        document.body.removeChild(ta);
    }
    function flashCopied(){
        var b = document.querySelector('.copy-btn'); if (!b) return;
        var old = b.textContent; b.textContent = 'Copied ✓';
        setTimeout(function(){ b.textContent = old; }, 1600);
    }

    function resetCalc(){
        ['stock','creditors','debtors','cclimit','ccOutstanding'].forEach(function(id){ document.getElementById(id).value=''; });
        document.getElementById('stockMargin').value = '25';
        document.getElementById('debtorMargin').value = '40';
        document.getElementById('resultSection').classList.remove('visible');
    }

    ['stock','creditors','debtors','cclimit','stockMargin','debtorMargin','ccOutstanding'].forEach(function(id){
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
