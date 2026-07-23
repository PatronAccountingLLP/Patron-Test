@extends('layouts.app')

@section('meta')
<title>Accounting Ratio Calculator | Liquidity, DSCR & ROCE</title>
<meta name="description" content="Free accounting ratio calculator: compute liquidity, solvency, profitability and activity ratios including current ratio, DSCR, ROCE and debt-equity. Try now!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/accounting-ratio-calculator">

<meta property="og:title" content="Accounting Ratios Calculator — Liquidity, DSCR & ROCE">
<meta property="og:description" content="Compute current, quick, debt-to-equity, ROE, net margin, inventory turnover and more in one calculator, with India benchmarks. Free, no signup.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/accounting-ratio-calculator">
<meta property="og:image" content="/tools/accounting-ratio-calculator-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Accounting Ratios Calculator — Liquidity, DSCR & ROCE">
<meta name="twitter:description" content="Liquidity, solvency, profitability and activity ratios in one free calculator, with India benchmarks. Instant results.">
<meta name="twitter:image" content="/tools/accounting-ratio-calculator-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Accounting Ratio Calculator",
  "description": "Accounting Ratio Calculator computes the core liquidity, solvency, profitability and activity ratios — including current ratio, quick ratio, debt-to-equity, net profit margin, return on equity and inventory turnover — from a single set of financial statement inputs, with results benchmarked for Indian businesses.",
  "url": "/tools/accounting-ratio-calculator",
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
    {"@type": "ListItem", "position": 3, "name": "Accounting Ratio Calculator", "item": "/tools/accounting-ratio-calculator"}
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
      "name": "What is an accounting ratio?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An accounting ratio expresses the relationship between two figures from the financial statements, such as current assets to current liabilities. Ratios turn raw numbers into comparable measures of liquidity, solvency, profitability and efficiency. They let owners, lenders and investors judge performance over time and against peers, and they form the backbone of financial statement analysis used in audits and credit decisions."
      }
    },
    {
      "@type": "Question",
      "name": "What are the main types of accounting ratios?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Accounting ratios are usually grouped into four families. Liquidity ratios such as current and quick ratio measure short-term solvency. Solvency or leverage ratios such as debt-to-equity assess long-term stability. Profitability ratios such as net margin and ROE measure returns. Activity or turnover ratios such as inventory turnover measure how efficiently assets are used. This calculator covers all four groups."
      }
    },
    {
      "@type": "Question",
      "name": "How is the current ratio calculated?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Current ratio equals current assets divided by current liabilities. It measures whether a business can meet short-term obligations from short-term assets. A ratio around 1.5 to 2 is generally considered comfortable for most businesses, though the ideal varies by industry. A figure below 1 signals possible liquidity strain, while a very high ratio may mean idle assets that are not being used productively."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between current ratio and quick ratio?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Both measure short-term liquidity, but the quick ratio is stricter. The current ratio includes all current assets, whereas the quick or acid-test ratio excludes inventory, which can be slow to convert into cash. Quick ratio equals current assets minus inventory, divided by current liabilities. A quick ratio above 1 suggests a business can cover its immediate liabilities without relying on selling stock."
      }
    },
    {
      "@type": "Question",
      "name": "What is a good debt-to-equity ratio?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Debt-to-equity equals total debt divided by shareholders' equity, showing how much a business is financed by borrowing versus owners' funds. A ratio around 1 to 2 is common for many Indian companies, but capital-intensive sectors run higher and asset-light businesses lower. A high ratio increases financial risk and interest burden, so lenders and investors read it alongside interest coverage and cash flow."
      }
    },
    {
      "@type": "Question",
      "name": "How do you calculate net profit margin?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Net profit margin equals net profit divided by revenue, expressed as a percentage. It shows how many rupees of profit remain from every rupee of sales after all expenses, interest and tax. Margins vary widely by sector, so compare against industry peers rather than a universal target. Rising margins usually indicate better cost control or pricing power, while falling margins warrant investigation."
      }
    },
    {
      "@type": "Question",
      "name": "What does return on equity (ROE) tell you?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Return on equity equals net profit divided by shareholders' equity, expressed as a percentage. It measures how efficiently a company generates profit from the funds owners have invested. A higher ROE generally signals effective use of capital, but it can be inflated by heavy borrowing. The DuPont method breaks ROE into margin, asset turnover and leverage to reveal what is really driving the return."
      }
    },
    {
      "@type": "Question",
      "name": "Why are accounting ratios important for a business?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ratios convert financial statements into actionable insight. They help spot liquidity gaps, excessive leverage, margin erosion and operational inefficiency before they become crises. Banks use them to set lending terms, investors to value businesses, and management to set budgets and track trends. For Indian companies, ratios also support audit analysis and disclosures prepared under accounting standards issued by the ICAI."
      }
    },
    {
      "@type": "Question",
      "name": "Should I compare ratios to industry benchmarks?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. A ratio is only meaningful in context. A current ratio of 1.2 may be healthy for fast-moving retail but weak for manufacturing, and margins differ sharply across sectors. Always benchmark against your own industry and your own past trend rather than a single universal figure. Comparing year on year reveals direction, which is often more useful than any one snapshot."
      }
    },
    {
      "@type": "Question",
      "name": "What is the inventory turnover ratio?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Inventory turnover is an activity ratio equal to cost of goods sold divided by average inventory. It shows how many times stock is sold and replaced in a period. A higher ratio indicates fast-moving inventory and efficient working capital, while a low ratio suggests overstocking or slow sales. Dividing 365 by the ratio gives days inventory outstanding, the average days stock is held before sale."
      }
    },
    {
      "@type": "Question",
      "name": "Can ratios be misleading?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, if read in isolation. Ratios depend on the quality of the underlying accounts, so inconsistent valuation, one-off items or seasonal timing can distort them. A single ratio rarely tells the full story; analysts read several together and across periods. They are a diagnostic starting point, not a verdict, and should be interpreted alongside cash flows, business context and professional judgement."
      }
    },
    {
      "@type": "Question",
      "name": "Is this accounting ratio calculator free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting Ratio Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. Enter your balance sheet and profit and loss figures once and it computes liquidity, solvency, profitability and activity ratios together, in rupees, with plain-language interpretation for each result to help you act on the numbers."
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
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 8px; }
        .calc-card .group-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin: 24px 0 12px; padding-top:16px; border-top:1px dashed var(--border); }
        .calc-card .group-label:first-of-type { border-top:none; padding-top:0; }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[inputmode="decimal"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .field-hint { font-size: 11px; color: var(--text-muted); margin-top: 4px; text-transform: none; letter-spacing: 0; font-weight: 400; }
        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1; padding: 10px 16px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 14px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .ratio-group-title { font-family: var(--font-mono); font-size: 12px; font-weight:700; color: var(--primary-dark); text-transform: uppercase; letter-spacing: 1px; margin: 22px 0 10px; }
        .result-grid { display: grid; grid-template-columns: 1fr; gap: 12px; }
        @media (min-width: 500px) { .result-grid { grid-template-columns: 1fr 1fr; } }
        .result-card { background: var(--surface); border-radius: var(--radius); padding: 16px 20px; border: 1px solid var(--border); }
        .result-card.highlight { background: var(--primary); border-color: var(--primary); }
        .result-card.highlight .result-label, .result-card.highlight .result-value { color: #fff; }
        .result-label { font-size: 12px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .result-value { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); }
        .result-note { font-size: 12px; color: var(--text-secondary); margin-top: 6px; line-height: 1.5; }
        .result-note .tag { font-weight:700; }
        .tag-good { color: var(--success); }
        .tag-ok { color: #B45309; }
        .tag-bad { color: var(--danger); }
        .btn-reset { display: inline-flex; align-items: center; gap: 6px; margin-top: 16px; padding: 8px 16px; border: 1px solid var(--border); border-radius: 8px; background: var(--card); color: var(--text-muted); font-family: var(--font-body); font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s; }
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
        .rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
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
        <a href="#what-is">What They Are</a>
        <a href="#categories">Ratio Categories</a>
        <a href="#formulas">Formulas</a>
        <a href="#interpret">Interpretation</a>
        <a href="#india">India & Audit Notes</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Accounting Ratio Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Accounting Ratio Calculator — <span>Liquidity</span> DSCR & ROCE</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Need help reading your numbers? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Accounting%20Ratio%20Calculator%20and%20need%20help%20with%20financial%20statement%20analysis%20and%20ratio%20benchmarking.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Accounting%20ratio%20analysis%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Accounting%20Ratio%20Calculator%20and%20would%20like%20help%20with%20financial%20statement%20analysis%20and%20ratio%20benchmarking.%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This free Accounting Ratio Calculator turns your balance sheet and profit & loss figures into the core financial ratios in one go — <strong>liquidity</strong> (current, quick), <strong>solvency</strong> (debt-to-equity, interest coverage), <strong>profitability</strong> (gross, net margin, ROE, ROA) and <strong>activity</strong> (inventory and asset turnover). Enter each figure once, switch between rupees, lakh or crore, and get every ratio with a plain-language reading of whether it looks strong, average or weak. All maths runs in your browser; nothing is stored.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Your Accounting Ratios</h2>
            <p style="font-size:13px;color:var(--text-muted);margin-bottom:18px;">Fill in whatever you have — the tool computes every ratio it has enough inputs for and skips the rest.</p>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript, or use the formulas in the "Formulas" section below to calculate each ratio manually.
                </div>
            </noscript>

            <div class="form-group" style="margin-bottom:8px;">
                <label>Amounts entered in</label>
                <div class="toggle-group" id="unitToggle">
                    <button type="button" class="toggle-btn active" data-value="rupees" onclick="setUnit(this)">₹ Rupees</button>
                    <button type="button" class="toggle-btn" data-value="lakh" onclick="setUnit(this)">₹ Lakh</button>
                    <button type="button" class="toggle-btn" data-value="crore" onclick="setUnit(this)">₹ Crore</button>
                </div>
            </div>

            <div class="group-label">Balance Sheet</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="ca">Current Assets</label>
                    <input type="text" id="ca" placeholder="e.g. 40" inputmode="decimal" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="cl">Current Liabilities</label>
                    <input type="text" id="cl" placeholder="e.g. 20" inputmode="decimal" autocomplete="off">
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="inv">Inventory</label>
                    <input type="text" id="inv" placeholder="e.g. 12" inputmode="decimal" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="debt">Total Debt</label>
                    <input type="text" id="debt" placeholder="e.g. 30" inputmode="decimal" autocomplete="off">
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="equity">Shareholders' Equity</label>
                    <input type="text" id="equity" placeholder="e.g. 50" inputmode="decimal" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="assets">Total Assets</label>
                    <input type="text" id="assets" placeholder="e.g. 90" inputmode="decimal" autocomplete="off">
                </div>
            </div>

            <div class="group-label">Profit & Loss</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="revenue">Revenue (Net Sales)</label>
                    <input type="text" id="revenue" placeholder="e.g. 100" inputmode="decimal" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="cogs">Cost of Goods Sold</label>
                    <input type="text" id="cogs" placeholder="e.g. 60" inputmode="decimal" autocomplete="off">
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="ebit">Operating Profit (EBIT)</label>
                    <input type="text" id="ebit" placeholder="e.g. 18" inputmode="decimal" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="netprofit">Net Profit (after tax)</label>
                    <input type="text" id="netprofit" placeholder="e.g. 10" inputmode="decimal" autocomplete="off">
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="interest">Interest Expense</label>
                    <input type="text" id="interest" placeholder="e.g. 3" inputmode="decimal" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="avginv">Average Inventory (optional)</label>
                    <input type="text" id="avginv" placeholder="leave blank to use Inventory" inputmode="decimal" autocomplete="off">
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Ratios</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div id="resultsContainer"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want a CA to review this before you act on it?</div>
                    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Accounting Ratio Calculator output validation, no obligation.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Accounting%20Ratio%20Calculator%20and%20need%20help%20with%20financial%20statement%20analysis%20and%20ratio%20benchmarking.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Accounting%20ratio%20analysis%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Accounting%20Ratio%20Calculator%20and%20would%20like%20help%20with%20financial%20statement%20analysis%20and%20ratio%20benchmarking.%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use This Accounting Ratio Calculator</h2>
            <ol>
                <li><strong>Pick your unit</strong> — enter figures in rupees, lakh or crore; the toggle scales everything for you.</li>
                <li><strong>Enter balance sheet figures</strong> — current assets, current liabilities, inventory, total debt, shareholders' equity and total assets.</li>
                <li><strong>Enter profit & loss figures</strong> — revenue, cost of goods sold, operating profit (EBIT), net profit, and interest expense.</li>
                <li><strong>Add average inventory if you have it</strong> — otherwise the tool uses the closing inventory figure for turnover.</li>
                <li><strong>Click Calculate Ratios</strong> — you instantly get liquidity, solvency, profitability and activity ratios, each with a short interpretation.</li>
            </ol>
            <p>You don't need every field. The calculator computes each ratio for which it has the required inputs and quietly skips the others, so it works whether you have a full set of statements or just a few figures.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> For ratios that use a balance like equity, inventory or assets, analysts often use the average of opening and closing values for a more accurate result. For a single-period snapshot, the closing figures used here are a reasonable approximation. For the full picture, try our <a href="/tools/financial-ratios-dashboard">financial ratios dashboard</a>.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>What Are Accounting Ratios?</h2>
            <p>An accounting ratio expresses the relationship between two figures drawn from the financial statements — for example, current assets compared with current liabilities. On their own, the numbers in a balance sheet or profit & loss account are hard to judge. Ratios convert them into standardised measures that can be tracked over time and compared against competitors and industry norms.</p>
            <p>Ratio analysis is the backbone of financial statement analysis. A stakeholder deciding whether to invest, lend, supply or restructure operations relies on ratios to examine trends, set benchmarks, frame budget expectations and compare peers. They are equally central to audit procedures, where unexpected movements in key ratios flag areas needing deeper testing.</p>
            <h3>Who uses them</h3>
            <ul>
                <li><strong>Owners and management</strong> — to monitor performance and set targets.</li>
                <li><strong>Banks and lenders</strong> — to set credit limits and loan covenants.</li>
                <li><strong>Investors</strong> — to value a business and assess risk before funding.</li>
                <li><strong>Auditors</strong> — to perform analytical review and spot anomalies.</li>
            </ul>
        </section>

        <section class="content-section" id="categories">
            <h2>The Four Categories of Accounting Ratios</h2>
            <p>Most accounting ratios fall into four families. This calculator covers the most widely used ratio in each group.</p>
            <h3>1. Liquidity Ratios</h3>
            <p>These measure short-term solvency — whether a business can meet obligations due within a year. The <a href="/blog/current-ratio">current ratio</a> and the stricter <a href="/blog/quick-ratio-acid-test">quick (acid-test) ratio</a> are the headline measures. A quick ratio above 1 suggests a firm can cover immediate liabilities without selling stock.</p>
            <h3>2. Solvency & Leverage Ratios</h3>
            <p>These assess long-term stability and reliance on borrowing. The <a href="/blog/debt-to-equity-ratio">debt-to-equity ratio</a> compares borrowed funds with owners' funds, while the <a href="/blog/interest-coverage-ratio">interest coverage ratio</a> checks whether operating profit comfortably covers interest. Higher leverage means higher financial risk.</p>
            <h3>3. Profitability Ratios</h3>
            <p>These measure the ability to generate profit. Gross and <a href="/blog/net-profit-margin">net profit margins</a> express profit as a percentage of sales, while <a href="/blog/return-on-equity-roe">return on equity</a> and return on assets measure profit relative to the capital and assets deployed.</p>
            <h3>4. Activity / Turnover Ratios</h3>
            <p>These show how efficiently assets are used. Inventory turnover measures how fast stock is sold and replaced; asset turnover measures revenue generated per rupee of assets. Faster turnover usually means tighter working capital and stronger cash flow.</p>
        </section>

        <section class="content-section" id="formulas">
            <h2>Accounting Ratio Formulas</h2>
            <div class="formula-box">
                <span class="label">Current Ratio</span> = Current Assets ÷ Current Liabilities<br>
                <span class="label">Quick Ratio</span> = (Current Assets − Inventory) ÷ Current Liabilities<br>
                <span class="label">Debt-to-Equity</span> = Total Debt ÷ Shareholders' Equity<br>
                <span class="label">Interest Coverage</span> = EBIT ÷ Interest Expense<br>
                <span class="label">Gross Margin %</span> = (Revenue − COGS) ÷ Revenue × 100<br>
                <span class="label">Net Margin %</span> = Net Profit ÷ Revenue × 100<br>
                <span class="label">Return on Equity %</span> = Net Profit ÷ Equity × 100<br>
                <span class="label">Return on Assets %</span> = Net Profit ÷ Total Assets × 100<br>
                <span class="label">Inventory Turnover</span> = COGS ÷ Average Inventory<br>
                <span class="label">Asset Turnover</span> = Revenue ÷ Total Assets
            </div>
            <h3>Worked Example</h3>
            <p>A company has current assets of ₹40 lakh, current liabilities ₹20 lakh, inventory ₹12 lakh, total debt ₹30 lakh, equity ₹50 lakh, revenue ₹100 lakh, COGS ₹60 lakh and net profit ₹10 lakh.</p>
            <div class="formula-box">
                Current Ratio = 40 ÷ 20 = <span class="label">2.0</span><br>
                Quick Ratio = (40 − 12) ÷ 20 = <span class="label">1.4</span><br>
                Debt-to-Equity = 30 ÷ 50 = <span class="label">0.6</span><br>
                Net Margin = 10 ÷ 100 = <span class="label">10%</span><br>
                Return on Equity = 10 ÷ 50 = <span class="label">20%</span>
            </div>
            <p>These results point to a comfortably liquid, modestly leveraged and profitable business — but every figure should still be read against its own industry, as the interpretation section explains.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Financial Statement Analysis?</h3>
            <p>Patron Accounting LLP supports businesses analysing liquidity, solvency, profitability and efficiency — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Accounting%20Ratio%20Calculator%20and%20need%20help%20with%20financial%20statement%20analysis%20and%20ratio%20benchmarking.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Accounting%20ratio%20analysis%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Accounting%20Ratio%20Calculator%20and%20would%20like%20help%20with%20financial%20statement%20analysis%20and%20ratio%20benchmarking.%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="interpret">
            <h2>How to Interpret Accounting Ratios</h2>
            <p>A ratio is only meaningful in context. The same figure can be healthy in one industry and alarming in another, so always benchmark against your own sector and your own past trend. The general guides below are starting points, not absolute rules.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Ratio</th><th>Comfortable Range*</th><th>What a weak reading suggests</th></tr>
                </thead>
                <tbody>
                    <tr><td>Current Ratio</td><td>1.5 – 2.0</td><td>Below 1: short-term liquidity strain</td></tr>
                    <tr><td>Quick Ratio</td><td>≥ 1.0</td><td>Below 1: reliant on selling stock to pay dues</td></tr>
                    <tr><td>Debt-to-Equity</td><td>≤ 1 – 2</td><td>High: heavy leverage, interest burden, risk</td></tr>
                    <tr><td>Interest Coverage</td><td>≥ 2 – 3×</td><td>Below 1.5: profits barely cover interest</td></tr>
                    <tr><td>Net Profit Margin</td><td>Sector-specific</td><td>Falling: cost or pricing pressure</td></tr>
                    <tr><td>Return on Equity</td><td>Sector-specific</td><td>Low: weak returns on owners' funds</td></tr>
                </tbody>
            </table>
            <p style="font-size:13px;color:var(--text-muted);">*Indicative general ranges. Capital-intensive sectors, financial firms and early-stage startups can sit well outside these and still be healthy.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> Never judge a business on one ratio. Read several together and across years. A strong current ratio paired with falling margins and rising debt tells a very different story than the current ratio alone.</p>
            </div>
        </section>

        <section class="content-section" id="india">
            <h2>Accounting Ratios, Standards & Audit in India</h2>
            <p>For Indian businesses, ratios are not just an internal tool — they connect directly to statutory reporting and credit.</p>
            <h3>Accounting standards drive the inputs</h3>
            <p>The figures you feed into these ratios depend on how items are recognised and valued under the accounting standards issued by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>. Consistent application is what makes ratios comparable year on year and against audited peers, which is why valuation policies matter as much as the arithmetic.</p>
            <h3>Mandatory ratio disclosures</h3>
            <p>Companies preparing accounts under the Schedule III format set out in the Companies Act, administered by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a>, are required to disclose key ratios such as current ratio, debt-to-equity and return on equity in the notes, along with explanations for significant year-on-year changes. The statute itself is published on <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">India Code</a>.</p>
            <h3>Ratios in lending and tax</h3>
            <p>Banks use liquidity and leverage ratios to set working-capital limits under lending norms framed by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a>, while large swings in profitability or turnover can attract scrutiny from the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department</a> during assessment. Clean, audit-ready books are what let you present ratios with confidence to any of these stakeholders.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> This tool gives estimates for analysis only. It is not accounting, tax or investment advice. Consult a qualified Chartered Accountant for ratio analysis and disclosures specific to your business.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About Accounting Ratios</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is an accounting ratio?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">An accounting ratio expresses the relationship between two figures from the financial statements, such as current assets to current liabilities. Ratios turn raw numbers into comparable measures of liquidity, solvency, profitability and efficiency. They let owners, lenders and investors judge performance over time and against peers, and they form the backbone of financial statement analysis used in audits and credit decisions.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What are the main types of accounting ratios?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Accounting ratios are usually grouped into four families. Liquidity ratios such as current and quick ratio measure short-term solvency. Solvency or leverage ratios such as debt-to-equity assess long-term stability. Profitability ratios such as net margin and ROE measure returns. Activity or turnover ratios such as inventory turnover measure how efficiently assets are used. This calculator covers all four groups.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is the current ratio calculated?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Current ratio equals current assets divided by current liabilities. It measures whether a business can meet short-term obligations from short-term assets. A ratio around 1.5 to 2 is generally considered comfortable for most businesses, though the ideal varies by industry. A figure below 1 signals possible liquidity strain, while a very high ratio may mean idle assets that are not being used productively.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between current ratio and quick ratio?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Both measure short-term liquidity, but the quick ratio is stricter. The current ratio includes all current assets, whereas the quick or acid-test ratio excludes inventory, which can be slow to convert into cash. Quick ratio equals current assets minus inventory, divided by current liabilities. A quick ratio above 1 suggests a business can cover its immediate liabilities without relying on selling stock.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is a good debt-to-equity ratio?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Debt-to-equity equals total debt divided by shareholders' equity, showing how much a business is financed by borrowing versus owners' funds. A ratio around 1 to 2 is common for many Indian companies, but capital-intensive sectors run higher and asset-light businesses lower. A high ratio increases financial risk and interest burden, so lenders and investors read it alongside interest coverage and cash flow.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How do you calculate net profit margin?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Net profit margin equals net profit divided by revenue, expressed as a percentage. It shows how many rupees of profit remain from every rupee of sales after all expenses, interest and tax. Margins vary widely by sector, so compare against industry peers rather than a universal target. Rising margins usually indicate better cost control or pricing power, while falling margins warrant investigation.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What does return on equity (ROE) tell you?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Return on equity equals net profit divided by shareholders' equity, expressed as a percentage. It measures how efficiently a company generates profit from the funds owners have invested. A higher ROE generally signals effective use of capital, but it can be inflated by heavy borrowing. The DuPont method breaks ROE into margin, asset turnover and leverage to reveal what is really driving the return.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Why are accounting ratios important for a business?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Ratios convert financial statements into actionable insight. They help spot liquidity gaps, excessive leverage, margin erosion and operational inefficiency before they become crises. Banks use them to set lending terms, investors to value businesses, and management to set budgets and track trends. For Indian companies, ratios also support audit analysis and disclosures prepared under accounting standards issued by the ICAI.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Should I compare ratios to industry benchmarks?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. A ratio is only meaningful in context. A current ratio of 1.2 may be healthy for fast-moving retail but weak for manufacturing, and margins differ sharply across sectors. Always benchmark against your own industry and your own past trend rather than a single universal figure. Comparing year on year reveals direction, which is often more useful than any one snapshot.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the inventory turnover ratio?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Inventory turnover is an activity ratio equal to cost of goods sold divided by average inventory. It shows how many times stock is sold and replaced in a period. A higher ratio indicates fast-moving inventory and efficient working capital, while a low ratio suggests overstocking or slow sales. Dividing 365 by the ratio gives days inventory outstanding, the average days stock is held before sale.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can ratios be misleading?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, if read in isolation. Ratios depend on the quality of the underlying accounts, so inconsistent valuation, one-off items or seasonal timing can distort them. A single ratio rarely tells the full story; analysts read several together and across periods. They are a diagnostic starting point, not a verdict, and should be interpreted alongside cash flows, business context and professional judgement.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is this accounting ratio calculator free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting Ratio Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. Enter your balance sheet and profit and loss figures once and it computes liquidity, solvency, profitability and activity ratios together, in rupees, with plain-language interpretation for each result to help you act on the numbers.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Financial Analysis Help</h3>
            <p>CA-led ratio analysis, MIS reporting and audit-ready books — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Accounting%20Ratio%20Calculator%20and%20need%20help%20with%20financial%20statement%20analysis%20and%20ratio%20benchmarking.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Accounting%20ratio%20analysis%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Accounting%20Ratio%20Calculator%20and%20would%20like%20help%20with%20financial%20statement%20analysis%20and%20ratio%20benchmarking.%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/accounting-services" class="sidebar-link">Online Accounting Service <span class="arrow">→</span></a>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit <span class="arrow">→</span></a>
            <a href="/accounting-services-for-trading-industry" class="sidebar-link">Accounting for Trading Industry <span class="arrow">→</span></a>
            <a href="/startup-registration" class="sidebar-link">Startup Registration <span class="arrow">→</span></a>
            <a href="/gst-returns" class="sidebar-link">GST Returns Filing <span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/financial-ratios-dashboard" class="sidebar-link">Financial Ratios Dashboard <span class="arrow">→</span></a>
            <a href="/tools/current-ratio-calculator" class="sidebar-link">Current Ratio Calculator <span class="arrow">→</span></a>
            <a href="/tools/quick-ratio-calculator" class="sidebar-link">Quick Ratio Calculator <span class="arrow">→</span></a>
            <a href="/tools/debt-to-equity-calculator" class="sidebar-link">Debt-to-Equity Calculator <span class="arrow">→</span></a>
            <a href="/tools/roe-roce-calculator" class="sidebar-link">ROE / ROCE / ROA Calculator <span class="arrow">→</span></a>
            <a href="/tools/inventory-turnover-calculator" class="sidebar-link">Inventory Turnover Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/liquidity-ratios-complete-guide" class="sidebar-link">Liquidity Ratios: Complete Guide <span class="arrow">→</span></a>
            <a href="/blog/profitability-ratios-complete-guide" class="sidebar-link">Profitability Ratios Guide <span class="arrow">→</span></a>
            <a href="/blog/solvency-leverage-ratios-complete-guide" class="sidebar-link">Solvency & Leverage Ratios Guide <span class="arrow">→</span></a>
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

    var unit = 'rupees';
    function multiplier() { return unit === 'crore' ? 1e7 : unit === 'lakh' ? 1e5 : 1; }
    function setUnit(btn) {
        unit = btn.dataset.value;
        btn.parentElement.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
    }
    function val(id) {
        var v = parseINR(document.getElementById(id).value);
        return isNaN(v) ? null : v;
    }
    function fmtRatio(x) { return x.toFixed(2); }
    function fmtPct(x) { return x.toFixed(1) + '%'; }
    function fmtTimes(x) { return x.toFixed(2) + '×'; }

    function tag(cls, label) { return '<span class="tag ' + cls + '">' + label + '</span>'; }

    function calculate() {
        var ca = val('ca'), cl = val('cl'), inv = val('inv'), debt = val('debt'),
            equity = val('equity'), assets = val('assets'),
            revenue = val('revenue'), cogs = val('cogs'), ebit = val('ebit'),
            netprofit = val('netprofit'), interest = val('interest'), avginv = val('avginv');

        var groups = [
            { title: 'Liquidity', items: [] },
            { title: 'Solvency & Leverage', items: [] },
            { title: 'Profitability', items: [] },
            { title: 'Activity / Turnover', items: [] }
        ];

        // Liquidity
        if (ca !== null && cl && cl > 0) {
            var cr = ca / cl;
            var t = cr >= 1.5 ? tag('tag-good','Healthy') : cr >= 1 ? tag('tag-ok','Adequate') : tag('tag-bad','Tight');
            groups[0].items.push({ label: 'Current Ratio', value: fmtRatio(cr), note: t + ' — ₹' + fmtRatio(cr) + ' of current assets per ₹1 of current liabilities.' });
        }
        if (ca !== null && inv !== null && cl && cl > 0) {
            var qr = (ca - inv) / cl;
            var t2 = qr >= 1 ? tag('tag-good','Healthy') : qr >= 0.7 ? tag('tag-ok','Adequate') : tag('tag-bad','Tight');
            groups[0].items.push({ label: 'Quick Ratio', value: fmtRatio(qr), note: t2 + ' — liquidity excluding inventory.' });
        }

        // Solvency
        if (debt !== null && equity && equity > 0) {
            var de = debt / equity;
            var t3 = de <= 1 ? tag('tag-good','Conservative') : de <= 2 ? tag('tag-ok','Moderate') : tag('tag-bad','High leverage');
            groups[1].items.push({ label: 'Debt-to-Equity', value: fmtRatio(de), note: t3 + ' — ₹' + fmtRatio(de) + ' of debt per ₹1 of equity.' });
        }
        if (ebit !== null && interest && interest > 0) {
            var ic = ebit / interest;
            var t4 = ic >= 3 ? tag('tag-good','Comfortable') : ic >= 1.5 ? tag('tag-ok','Adequate') : tag('tag-bad','Strained');
            groups[1].items.push({ label: 'Interest Coverage', value: fmtTimes(ic), note: t4 + ' — operating profit covers interest ' + fmtRatio(ic) + ' times.' });
        }

        // Profitability
        if (revenue && revenue > 0 && cogs !== null) {
            var gm = (revenue - cogs) / revenue * 100;
            groups[2].items.push({ label: 'Gross Margin', value: fmtPct(gm), note: 'Profit after direct costs, before overheads.' });
        }
        if (revenue && revenue > 0 && netprofit !== null) {
            var nm = netprofit / revenue * 100;
            var t5 = nm >= 10 ? tag('tag-good','Strong') : nm >= 3 ? tag('tag-ok','Modest') : tag('tag-bad','Thin');
            groups[2].items.push({ label: 'Net Profit Margin', value: fmtPct(nm), note: t5 + ' — profit per ₹100 of sales (benchmark to your sector).' });
        }
        if (netprofit !== null && equity && equity > 0) {
            var roe = netprofit / equity * 100;
            var t6 = roe >= 15 ? tag('tag-good','Strong') : roe >= 8 ? tag('tag-ok','Moderate') : tag('tag-bad','Low');
            groups[2].items.push({ label: 'Return on Equity', value: fmtPct(roe), note: t6 + ' — return on owners\' funds.' });
        }
        if (netprofit !== null && assets && assets > 0) {
            var roa = netprofit / assets * 100;
            groups[2].items.push({ label: 'Return on Assets', value: fmtPct(roa), note: 'Profit generated per rupee of total assets.' });
        }

        // Activity
        var invForTurnover = (avginv !== null && avginv > 0) ? avginv : inv;
        if (cogs !== null && invForTurnover && invForTurnover > 0) {
            var it = cogs / invForTurnover;
            var dio = 365 / it;
            groups[3].items.push({ label: 'Inventory Turnover', value: fmtTimes(it), note: 'About ' + dio.toFixed(0) + ' days inventory outstanding (DIO).' });
        }
        if (revenue && revenue > 0 && assets && assets > 0) {
            var at = revenue / assets;
            groups[3].items.push({ label: 'Asset Turnover', value: fmtTimes(at), note: '₹' + fmtRatio(at) + ' of revenue per ₹1 of assets.' });
        }

        var html = '';
        var any = false;
        groups.forEach(function(g){
            if (g.items.length === 0) return;
            any = true;
            html += '<div class="ratio-group-title">' + g.title + '</div><div class="result-grid">';
            g.items.forEach(function(it, idx){
                var highlight = (g.title === 'Liquidity' && idx === 0) ? ' highlight' : '';
                html += '<div class="result-card' + highlight + '">' +
                        '<div class="result-label">' + it.label + '</div>' +
                        '<div class="result-value">' + it.value + '</div>' +
                        '<div class="result-note">' + it.note + '</div></div>';
            });
            html += '</div>';
        });
        if (!any) {
            html = '<div class="result-note" style="font-size:14px;">Please enter at least one valid pair of figures (e.g. current assets and current liabilities) to compute a ratio.</div>';
        }
        document.getElementById('resultsContainer').innerHTML = html;
        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc() {
        ['ca','cl','inv','debt','equity','assets','revenue','cogs','ebit','netprofit','interest','avginv'].forEach(function(id){ document.getElementById(id).value = ''; });
        document.getElementById('resultSection').classList.remove('visible');
        document.getElementById('resultsContainer').innerHTML = '';
    }

    ['ca','cl','inv','debt','equity','assets','revenue','cogs','ebit','netprofit','interest','avginv'].forEach(function(id){
        document.getElementById(id).addEventListener('keydown', function(e){ if (e.key === 'Enter') calculate(); });
    });

    function toggleFaq(e) {
        var btn = e.closest ? e.closest('.faq-question') || e : e;
        var item = btn.closest('.faq-item');
        if (!item) return;
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(function(i){ i.classList.remove('open'); });
        if (!isOpen) item.classList.add('open');
    }

    var sections = document.querySelectorAll('section[id], header[id]');
    var navLinks = document.querySelectorAll('.toc-nav a');
    window.addEventListener('scroll', function() {
        var current = '';
        sections.forEach(function(s){
            var top = s.offsetTop - 80;
            if (window.pageYOffset >= top) current = s.getAttribute('id');
        });
        navLinks.forEach(function(link){
            link.classList.toggle('active', link.getAttribute('href') === '#' + current);
        });
    });
</script>
@endsection
