@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Cash Conversion Cycle Calculator | CCC, DIO, DSO, DPO</title>
    <meta name="description" content="Cash conversion cycle calculator: compute CCC, DIO, DSO and DPO per ICAI Schedule III with industry benchmarks and MSMED Act 45-day check. Free CA tool.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/cash-conversion-cycle-calculator/">
    <meta property="og:title" content="Cash Conversion Cycle Calculator — Schedule III FY 2025-26">
    <meta property="og:description" content="Compute CCC, DIO, DSO, DPO per ICAI Schedule III. Industry benchmarks, MSMED Act 45-day rule check, working capital impact. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/cash-conversion-cycle-calculator">
    <meta property="og:image" content="/tools/og/cash-conversion-cycle-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cash Conversion Cycle Calculator — Schedule III FY 2025-26">
    <meta name="twitter:description" content="CCC = DIO + DSO − DPO with Schedule III ratios, MSMED Act check, working capital impact. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/cash-conversion-cycle-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Cash Conversion Cycle Calculator",
      "description": "Cash Conversion Cycle Calculator computes the CCC of an Indian company per Schedule III to the Companies Act, 2013 and the ICAI Guidance Note. The tool accepts opening and closing trade receivables, inventory and trade payables, annual revenue and annual cost of goods sold, and produces Days Inventory Outstanding (DIO), Days Sales Outstanding (DSO), Days Payable Outstanding (DPO), the headline CCC in days, the operating cycle, working capital tied up at current sales run-rate, three Schedule III mandatory ratios (Inventory Turnover, Trade Receivables Turnover, Trade Payables Turnover) computed from the same inputs, color-coded leverage verdict against six industry benchmarks, MSMED Act Section 15 forty-five day payment rule check on the DPO, year-over-year variance flagged against the 25 per cent Schedule III explanation threshold, and a sample disclosure format ready for the notes to accounts.",
      "url": "/tools/cash-conversion-cycle-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-19T08:00:00+05:30",
      "offers": {"@type": "Offer", "price": "0", "priceCurrency": "INR"},
      "author": {
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
      "provider": {"@id": "/#organization"}
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
        {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
        {"@type": "ListItem", "position": 3, "name": "Cash Conversion Cycle Calculator", "item": "/tools/cash-conversion-cycle-calculator"}
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
          "name": "What is the Cash Conversion Cycle (CCC)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Cash Conversion Cycle is a working-capital efficiency metric showing the number of days between paying suppliers and collecting cash from customers. It combines Days Inventory Outstanding, Days Sales Outstanding and Days Payable Outstanding into a single measure. A shorter CCC means cash is tied up for fewer days; a negative CCC means the company collects from customers before it pays suppliers, which is a powerful working-capital advantage seen in retail giants and asset-light tech firms."
          }
        },
        {
          "@type": "Question",
          "name": "What is the formula for Cash Conversion Cycle?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CCC = DIO + DSO − DPO. Days Inventory Outstanding equals Average Inventory divided by COGS multiplied by 365. Days Sales Outstanding equals Average Trade Receivables divided by Revenue multiplied by 365. Days Payable Outstanding equals Average Trade Payables divided by COGS multiplied by 365. Average balances use the simple mean of opening and closing balances. The first two components together (DIO plus DSO) are called the Operating Cycle. CCC equals Operating Cycle minus DPO."
          }
        },
        {
          "@type": "Question",
          "name": "Are CCC components disclosed in Schedule III financial statements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Three of the eleven mandatory Schedule III analytical ratios are direct components of CCC — Inventory Turnover Ratio, Trade Receivables Turnover Ratio and Trade Payables Turnover Ratio. Each one converts to days as DIO, DSO and DPO respectively (Days = 365 / Turnover). Schedule III mandates disclosure of these three ratios from FY 2021-22 onwards under MCA notification dated 24 March 2021, with explanation required for any change exceeding 25 per cent year-on-year."
          }
        },
        {
          "@type": "Question",
          "name": "What is a good Cash Conversion Cycle in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "There is no single ideal CCC because it varies by industry. IT services and software firms often run CCC of 60 to 90 days driven entirely by DSO. Manufacturing companies typically operate 60 to 120 days CCC. Retail and FMCG aim for 30 to 60 days, while modern retail with strong supplier leverage targets near-zero or negative CCC. A negative CCC means the company is being financed by suppliers — strongest working-capital position. Always benchmark against same-industry Indian peers."
          }
        },
        {
          "@type": "Question",
          "name": "How does MSMED Act 2006 affect Days Payable Outstanding?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 15 of the MSMED Act 2006 caps payment to MSE suppliers at 45 days from acceptance (or 15 days if no written agreement). Section 16 imposes compound interest at three times the RBI bank rate for delays. Finance Act 2023 inserted Section 43B(h) of Income Tax Act disallowing deduction for late MSE payments until actually paid. A high DPO above 45 days driven by MSE dues triggers all three consequences."
          }
        },
        {
          "@type": "Question",
          "name": "What is a negative Cash Conversion Cycle and is it always good?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A negative CCC means DPO exceeds DIO plus DSO — the company pays suppliers after collecting from customers, effectively using supplier credit as free working capital. Examples include modern retail and e-commerce platforms. While generally desirable, an extremely negative CCC achieved by stretching payables to MSE suppliers can trigger MSMED Act penalties, Section 43B(h) disallowance and supplier relationship damage. Sustainable negative CCC comes from speed and scale, not from delay tactics."
          }
        },
        {
          "@type": "Question",
          "name": "How is Days Sales Outstanding (DSO) calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DSO equals Average Trade Receivables divided by Revenue multiplied by the number of days in the period (365 for annual). Average Trade Receivables is the simple mean of opening and closing trade receivables, sourced from the balance sheet. Revenue uses Revenue from Operations from the Statement of Profit and Loss. Some analysts use Credit Sales only instead of total Revenue if cash sales are material. Lower DSO means faster collection; higher DSO indicates slower collection or longer credit terms."
          }
        },
        {
          "@type": "Question",
          "name": "How is Days Inventory Outstanding (DIO) calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DIO equals Average Inventory divided by Cost of Goods Sold multiplied by 365. Average Inventory is the mean of opening and closing inventory, including raw materials, work-in-progress and finished goods. COGS is derived from the P&L as Cost of Materials Consumed plus Changes in Inventory plus Manufacturing Expenses, or directly from the cost-of-goods-sold note. Lower DIO indicates faster inventory turns; higher DIO signals stocking issues, slow-moving inventory or extended production cycles requiring management review."
          }
        },
        {
          "@type": "Question",
          "name": "How is Days Payable Outstanding (DPO) calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DPO equals Average Trade Payables divided by Purchases or COGS multiplied by 365. Average Trade Payables is the mean of opening and closing balances. The denominator should ideally be Purchases for the year, but COGS is commonly used as an approximation when Purchases are not separately disclosed. Higher DPO means longer credit periods from suppliers — beneficial for cash flow but capped at 45 days for MSE suppliers under Section 15 of the MSMED Act, with penalty interest for breach."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need to explain a CCC change of more than 25 per cent?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CCC itself is not a Schedule III ratio, but its three components — Inventory Turnover, Trade Receivables Turnover and Trade Payables Turnover — are mandatory ratios. If any component changes by more than 25 per cent compared to the preceding year, the company must provide a written explanation in the notes to accounts under Schedule III. Common explanations include extended credit to drive sales, supply-chain disruption holding inventory, demand contraction, change in payment terms, or accounting reclassification."
          }
        },
        {
          "@type": "Question",
          "name": "What is TReDS and how does it affect DSO?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TReDS (Trade Receivables Discounting System) is an RBI-regulated electronic platform launched in 2018 enabling MSME suppliers to discount their invoices through banks and NBFCs at competitive rates. For the supplier, accepted invoices reduce DSO sharply because cash is realised within days of upload rather than waiting for buyer payment. For corporate buyers, TReDS strengthens supplier relationships and reduces the risk of MSMED Act delayed-payment interest. Three platforms are operational: RXIL, Mynd and Invoicemart."
          }
        },
        {
          "@type": "Question",
          "name": "How does Cash Conversion Cycle affect bank working capital lending?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Banks size working-capital limits using the Tandon Committee framework or the Maximum Permissible Bank Finance (MPBF) method, both of which depend directly on inventory and receivables holding periods. A higher CCC translates into higher gross working capital and a larger eligible bank limit. Banks require quarterly stock and book debt statements to monitor that actual DIO and DSO match the sanctioned levels — drawings beyond CCC-implied requirements trigger irregularity charges, additional interest, or facility recall."
          }
        },
        {
          "@type": "Question",
          "name": "Where on the balance sheet do I find figures for CCC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Ind AS Schedule III Division II, Inventory is reported under Current Assets — Inventories, with detailed sub-classification in the inventory note. Trade Receivables sit under Current Financial Assets, with ageing disclosed by current and beyond categories. Trade Payables appear under Current Financial Liabilities, with separate disclosure for MSE versus non-MSE suppliers. Revenue from Operations is the top line of the P&L; COGS appears as Cost of Materials Consumed plus Purchases plus Changes in Inventory plus Manufacturing Expenses."
          }
        }
      ]
    }
    </script>
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
        .content-col, .sidebar-col { min-width: 0; }

        .calc-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 32px; margin-bottom: 40px; border: 1px solid var(--border); }
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 8px; }
        .calc-intro { font-size: 14px; color: var(--text-secondary); margin-bottom: 24px; line-height: 1.65; }
        .calc-section-title { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin: 24px 0 12px; padding-top: 16px; border-top: 1px solid var(--border); }
        .calc-section-title:first-of-type { margin-top: 0; padding-top: 0; border-top: none; }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"], input[type="text"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }

        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }

        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }

        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        .verdict-card { border-radius: var(--radius); padding: 24px; margin-bottom: 20px; border-left: 6px solid var(--primary); background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); }
        .verdict-card.amber { border-left-color: var(--accent); background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); }
        .verdict-card.red { border-left-color: var(--danger); background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); }
        .verdict-card.blue { border-left-color: var(--info); background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .verdict-sub { font-size: 14px; color: var(--text-secondary); margin-bottom: 8px; }
        .verdict-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 14px; margin-top: 14px; }
        @media (max-width: 600px) { .verdict-grid { grid-template-columns: 1fr; } }
        .verdict-grid-item { background: rgba(255,255,255,0.65); border-radius: 8px; padding: 14px 16px; }
        .verdict-grid-label { font-size: 11px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .verdict-grid-value { font-family: var(--font-mono); font-size: 20px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }

        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }

        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .info-banner strong { font-weight: 700; }

        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }
        .basis-text strong { color: var(--primary-dark); }

        .ccc-bars { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .ccc-bar-row { display: grid; grid-template-columns: 80px 1fr 70px; gap: 12px; align-items: center; margin-bottom: 10px; font-size: 13px; }
        .ccc-bar-row:last-child { margin-bottom: 0; }
        .ccc-bar-label { font-weight: 600; color: var(--text-secondary); }
        .ccc-bar-track { height: 16px; background: var(--surface-alt); border-radius: 8px; position: relative; overflow: hidden; }
        .ccc-bar-fill { height: 100%; border-radius: 8px; transition: width 0.5s ease; }
        .ccc-bar-fill.dio { background: linear-gradient(90deg, #3B82F6, #60A5FA); }
        .ccc-bar-fill.dso { background: linear-gradient(90deg, #f26522, #ff8347); }
        .ccc-bar-fill.dpo { background: linear-gradient(90deg, #059669, #10B981); }
        .ccc-bar-fill.ccc { background: linear-gradient(90deg, var(--primary-dark), var(--primary)); }
        .ccc-bar-value { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); text-align: right; font-size: 13px; }

        .disclosure-block { background: var(--primary-dark); color: #E8EEF5; padding: 20px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 13px; line-height: 1.7; margin: 14px 0; overflow-x: auto; }
        .disclosure-block .dl-label { color: var(--accent-light); font-weight: 700; display: block; margin-bottom: 8px; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .disclosure-block table { width: 100%; border-collapse: collapse; font-size: 12px; margin-top: 8px; }
        .disclosure-block th, .disclosure-block td { padding: 8px 6px; text-align: left; border-bottom: 1px solid rgba(224,242,241,0.2); }
        .disclosure-block th { color: var(--accent-light); font-weight: 700; text-transform: uppercase; font-size: 10px; letter-spacing: 0.5px; }
        .disclosure-block td.num { text-align: right; }
        @media (max-width: 600px) { .disclosure-block { font-size: 11px; padding: 14px 16px; } .disclosure-block table { font-size: 10px; } }

        .body-cta { background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color: #fff; border-radius: var(--radius-lg); padding: 28px 32px; margin: 32px 0; }
        .body-cta h3 { color: #fff; font-size: 20px; margin-bottom: 8px; }
        .body-cta p { color: rgba(255,255,255,0.88); margin-bottom: 16px; font-size: 15px; }
        .body-cta .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; }
        .body-cta .cta-btn:hover { background: var(--accent-light); }

        .content-section { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 24px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 14px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); margin-bottom: 8px; line-height: 1.7; }
        .content-section li strong { color: var(--primary-dark); }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-underline-offset: 2px; }
        .content-section a:hover { color: var(--primary); }

        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 16px; text-align: left; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }
        @media (max-width: 600px) { .rate-table { font-size: 12px; } .rate-table thead th, .rate-table tbody td { padding: 8px 10px; } }

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
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.45s ease; }
        .faq-item.open .faq-answer { max-height: 800px; }
        .faq-answer-inner { padding: 0 20px 16px; font-size: 14px; color: var(--text-secondary); line-height: 1.75; }

        .sidebar-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 24px; margin-bottom: 24px; border: 1px solid var(--border); }
        .sidebar-card h3 { font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 14px; }
        .sidebar-link { display: block; padding: 10px 14px; border-radius: 8px; font-size: 14px; font-weight: 500; color: var(--text-secondary); text-decoration: none; transition: all 0.2s; margin-bottom: 4px; }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }
        .cta-card { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 28px 24px; margin-bottom: 24px; text-align: center; }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; }
        .cta-btn:hover { background: var(--accent-light); }

        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }

        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; }

        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .body-cta { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
        }
    
/* Fix: align ragged reference lists — fixed term column + description column */
section .content-text ul li:not(.nav-item){align-items:flex-start;}
section .content-text ul li:not(.nav-item) > strong:first-child{
  flex:0 0 300px;max-width:300px;display:inline-block;
}
@media (max-width:768px){
  section .content-text ul li:not(.nav-item){flex-wrap:wrap;}
  section .content-text ul li:not(.nav-item) > strong:first-child{flex:1 1 100%;max-width:100%;margin-bottom:2px;}
}

/* ===== Patron CTA system v1 (4 placements x 3 channels) ===== */
.brand-cta-bar{background:#FFEDD5;border-top:1px solid #FED7AA;border-bottom:1px solid #FED7AA;padding:14px 20px;}
.brand-cta-bar-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;gap:16px;flex-wrap:wrap;}
.brand-cta-bar-text{flex:1 1 320px;font-size:14px;color:var(--text);line-height:1.45;}
.brand-cta-bar-text strong{color:var(--text);font-weight:700;}
.brand-cta-bar-actions{display:flex;gap:10px;flex-wrap:wrap;}
.brand-cta-btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:11px 18px;border-radius:8px;font-family:var(--font-body);font-size:14px;font-weight:700;text-decoration:none;border:0;cursor:pointer;transition:transform .15s ease,box-shadow .15s ease,background .2s ease;-webkit-tap-highlight-color:transparent;touch-action:manipulation;white-space:nowrap;line-height:1.2;min-height:44px;}
.brand-cta-btn:hover{transform:translateY(-1px);box-shadow:0 4px 12px rgba(0,0,0,.12);}
.brand-cta-btn:active{transform:translateY(0);}
.brand-cta-btn .ico{width:16px;height:16px;flex-shrink:0;}
.brand-cta-btn-call{background:var(--accent);color:#fff;}
.brand-cta-btn-call:hover{background:var(--accent-light);color:#fff;}
.brand-cta-btn-wa{background:#25D366;color:#fff;}
.brand-cta-btn-wa:hover{background:#1FB855;color:#fff;}
.brand-cta-btn-email{background:#fff;color:var(--text);border:1px solid #E5D6C5;}
.brand-cta-btn-email:hover{background:#FAFAF8;color:var(--text);}
.brand-cta-stack{display:flex;flex-direction:column;gap:8px;}
.brand-cta-stack .brand-cta-btn{width:100%;}
.body-cta .brand-cta-bar-actions{justify-content:center;margin-top:4px;}
.body-cta .brand-cta-btn-email{background:rgba(255,255,255,.95);border-color:rgba(255,255,255,.95);}
.body-cta .brand-cta-btn-email:hover{background:#fff;border-color:#fff;}
.cta-card .brand-cta-btn-email{background:rgba(255,255,255,.95);border-color:rgba(255,255,255,.95);}
.cta-card .brand-cta-btn-email:hover{background:#fff;border-color:#fff;}
.post-result-cta{background:#FFF7ED;border:1px solid #FED7AA;border-left:4px solid var(--accent);border-radius:var(--radius);padding:18px 20px;margin:20px 0 4px;}
.post-result-cta-head{font-size:15px;font-weight:700;color:var(--text);margin-bottom:4px;line-height:1.4;}
.post-result-cta-sub{font-size:13px;color:var(--text-secondary);margin-bottom:14px;line-height:1.55;}
.post-result-cta .brand-cta-bar-actions{gap:8px;}
@media (max-width:767px){
 .brand-cta-bar{padding:12px 14px;}
 .brand-cta-bar-text{font-size:13px;flex-basis:100%;}
 .brand-cta-bar-actions{width:100%;gap:8px;}
 .brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0;min-height:44px;}
 .brand-cta-bar .brand-cta-btn-call{flex:1 1 100%;}
 .body-cta .brand-cta-bar-actions{flex-direction:column;}
 .body-cta .brand-cta-btn{width:100%;}
 .post-result-cta{padding:16px;}
 .post-result-cta .brand-cta-bar-actions{flex-direction:column;}
 .post-result-cta .brand-cta-btn{width:100%;}
}
@media (min-width:768px) and (max-width:950px){
 .body-cta .brand-cta-bar-actions{flex-direction:column;}
 .body-cta .brand-cta-btn{width:100%;}
 .post-result-cta .brand-cta-bar-actions{flex-direction:column;}
 .post-result-cta .brand-cta-btn{width:100%;}
}
/* ===== A11y: focus-visible (WCAG 2.4.7) ===== */
.form-group input,.form-group select{outline:2px solid transparent;outline-offset:2px;}
.form-group input:focus-visible,.form-group select:focus-visible{outline:2px solid var(--accent);outline-offset:2px;}
a:focus-visible,button:focus-visible,.toggle-btn:focus-visible,.brand-cta-btn:focus-visible,.faq-question:focus-visible,.cta-btn:focus-visible{outline:2px solid var(--accent);outline-offset:2px;border-radius:4px;}
/* ===== Reduced motion (WCAG 2.3.3) ===== */
@media (prefers-reduced-motion:reduce){
 *,*::before,*::after{animation-duration:.001ms!important;animation-iteration-count:1!important;transition-duration:.001ms!important;scroll-behavior:auto!important;}
}
/* ===== Print stylesheet (working-paper output) ===== */
@media print{
 .toc-nav,.brand-cta-bar,.body-cta,.cta-card,.post-result-cta,.wa-sticky-bar,.sidebar-col,.faq-section{display:none!important;}
 body{background:#fff;color:#000;}
 a[href]::after{content:"";}
 .container,.main-col{max-width:100%!important;width:100%!important;}
}

</style>

@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#formula">Formula</a>
        <a href="#schedule-iii">Schedule III</a>
        <a href="#benchmarks">Benchmarks</a>
        <a href="#interpretation">Interpretation</a>
        <a href="#msmed">MSMED Act</a>
        <a href="#bank-lending">Bank Lending</a>
        <a href="#optimisation">Optimise CCC</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Cash Conversion Cycle Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Cash Conversion Cycle Calculator — <span>Schedule III & MSMED Act</span> Compliant for FY 2025-26</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Cash%20Conversion%20Cycle%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Cash%20Conversion%20Cycle%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Cash%20Conversion%20Cycle%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This Cash Conversion Cycle Calculator computes CCC, DIO, DSO and DPO using the standard average-balance method aligned with the <strong>ICAI Guidance Note on Schedule III</strong>. It produces three Schedule III mandatory ratios (Inventory Turnover, Trade Receivables Turnover, Trade Payables Turnover) from the same inputs, working capital tied up at current sales run-rate, sector benchmark comparison, and an automatic <strong>MSMED Act 45-day rule check</strong> on DPO — flagging Section 15 / 16 / 43B(h) exposure when DPO exceeds 45 days. Year-over-year variance is checked against the 25 per cent Schedule III explanation threshold.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Your Cash Conversion Cycle</h2>
            <p class="calc-intro">Enter opening and closing balances from your audited balance sheet plus revenue and COGS from the P&L. The calculator uses the simple-average balance method aligned with ICAI Guidance Note. All amounts in ₹ rupees.</p>
            <noscript>
                <div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or refer to the formula in the section below.</div>
            </noscript>

            <div class="calc-section-title">Inventory (DIO Inputs)</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="invOpening">Opening Inventory (₹)</label>
                    <input type="text" id="invOpening" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">From last year's closing balance sheet. Includes RM, WIP, FG.</span>
                </div>
                <div class="form-group">
                    <label for="invClosing">Closing Inventory (₹)</label>
                    <input type="text" id="invClosing" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">From this year's closing balance sheet.</span>
                </div>
            </div>

            <div class="calc-section-title">Trade Receivables (DSO Inputs)</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="arOpening">Opening Trade Receivables (₹)</label>
                    <input type="text" id="arOpening" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Net of provision for doubtful debts.</span>
                </div>
                <div class="form-group">
                    <label for="arClosing">Closing Trade Receivables (₹)</label>
                    <input type="text" id="arClosing" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Net of provision for doubtful debts.</span>
                </div>
            </div>

            <div class="calc-section-title">Trade Payables (DPO Inputs)</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="apOpening">Opening Trade Payables (₹)</label>
                    <input type="text" id="apOpening" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Sum of MSE and non-MSE trade payables (Schedule III split).</span>
                </div>
                <div class="form-group">
                    <label for="apClosing">Closing Trade Payables (₹)</label>
                    <input type="text" id="apClosing" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Sum of MSE and non-MSE trade payables.</span>
                </div>
            </div>

            <div class="calc-section-title">Income Statement Inputs</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="revenue">Revenue from Operations (₹)</label>
                    <input type="text" id="revenue" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Top line of P&L. Use net sales after returns and discounts.</span>
                </div>
                <div class="form-group">
                    <label for="cogs">Cost of Goods Sold / Purchases (₹)</label>
                    <input type="text" id="cogs" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">COGS = Cost of Materials Consumed + Changes in Inventory + Mfg Expenses.</span>
                </div>
            </div>

            <div class="calc-section-title">Period & Context</div>
            <div class="form-group" style="margin-bottom: 18px;">
                <label>Period</label>
                <div class="toggle-group" id="periodGroup" role="tablist" aria-label="Period">
                    <button type="button" class="toggle-btn active" data-value="365" role="tab" aria-selected="true">Annual<small style="display:block;font-weight:400;font-size:11px;opacity:0.75;">365 days</small></button>
                    <button type="button" class="toggle-btn" data-value="180" role="tab" aria-selected="false">Half-Yearly<small style="display:block;font-weight:400;font-size:11px;opacity:0.75;">180 days</small></button>
                    <button type="button" class="toggle-btn" data-value="90" role="tab" aria-selected="false">Quarterly<small style="display:block;font-weight:400;font-size:11px;opacity:0.75;">90 days</small></button>
                </div>
                <span class="helper" style="display:block;margin-top:6px;font-size:11px;color:var(--text-muted);">Use Annual (365) for Schedule III statutory disclosure. Half-yearly aligns with SEBI LODR Reg 52.</span>
            </div>

            <div class="form-group" style="margin-bottom: 18px;">
                <label>Industry / Sector</label>
                <div class="toggle-group" id="industryGroup" role="tablist" aria-label="Industry">
                    <button type="button" class="toggle-btn active" data-value="manufacturing" role="tab" aria-selected="true">Manufacturing</button>
                    <button type="button" class="toggle-btn" data-value="retail" role="tab" aria-selected="false">Retail / FMCG</button>
                    <button type="button" class="toggle-btn" data-value="it" role="tab" aria-selected="false">IT / Software</button>
                    <button type="button" class="toggle-btn" data-value="services" role="tab" aria-selected="false">Services</button>
                    <button type="button" class="toggle-btn" data-value="trading" role="tab" aria-selected="false">Trading</button>
                    <button type="button" class="toggle-btn" data-value="pharma" role="tab" aria-selected="false">Pharma</button>
                </div>
                <span class="helper" style="display:block;margin-top:6px;font-size:11px;color:var(--text-muted);">Used for sector benchmark comparison.</span>
            </div>

            <div class="form-group" style="margin-bottom: 8px;">
                <label for="prevCCC">Previous Year CCC in Days (Optional)</label>
                <input type="text" id="prevCCC" step="0.1" placeholder="0" inputmode="decimal" autocomplete="off">
                <span class="helper">Enter last year's CCC to flag the 25% Schedule III variance threshold (component ratios).</span>
            </div>

            <button type="button" class="btn-calculate" id="btnCalculate">Calculate CCC</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label">Cash Conversion Cycle</div>
                    <div class="verdict-headline" id="verdictHeadline">CCC = 0 days</div>
                    <div class="verdict-sub" id="verdictSub">Verdict</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">DIO (Inventory)</div>
                            <div class="verdict-grid-value" id="dioVal">0 days</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">DSO (Receivables)</div>
                            <div class="verdict-grid-value" id="dsoVal">0 days</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">DPO (Payables)</div>
                            <div class="verdict-grid-value" id="dpoVal">0 days</div>
                        </div>
                    </div>
                </div>

                <div class="ccc-bars">
                    <div class="basis-label" style="margin-bottom: 14px;">CCC Composition (Days)</div>
                    <div id="cccBarsContainer"></div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner" id="benchmarkBanner"></div>
                <div class="info-banner" id="msmedBanner" style="display:none;"></div>
                <div class="info-banner" id="varianceBanner" style="display:none;"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis (per ICAI Schedule III Guidance)</div>
                    <div class="basis-text" id="basisText"></div>
                </div>

                <div class="basis-label" style="margin: 24px 0 8px;">Schedule III Sample Disclosure — 3 Mandatory Ratios from CCC Components</div>
                <div class="disclosure-block" id="disclosureBlock">
                    <span class="dl-label">Note X — Analytical Ratios (extract)</span>
                    <table>
                        <thead>
                            <tr><th>Ratio</th><th>Numerator</th><th>Denominator</th><th>Current Year</th><th>Previous Year</th></tr>
                        </thead>
                        <tbody id="disclosureRows"></tbody>
                    </table>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Cash Conversion Cycle Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Cash%20Conversion%20Cycle%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Cash%20Conversion%20Cycle%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Cash%20Conversion%20Cycle%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>


        <section class="content-section" id="how-to-use">
            <h2>How to Use This Cash Conversion Cycle Calculator</h2>
            <p>The Cash Conversion Cycle is a single number that captures three working-capital dimensions — how long inventory sits, how long customers take to pay, and how long suppliers wait for payment. The calculator computes all three sub-metrics (DIO, DSO, DPO) and the netted CCC using the simple-average balance method preferred by the <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a> for Schedule III disclosure.</p>

            <h3>Step 1 — Gather Six Balance Sheet Numbers</h3>
            <p>Open your audited balance sheet for the current year and the previous year. From the Inventory note, take the closing balance for both years. From the Trade Receivables note, take the closing net balance (after provision for doubtful debts) for both years. From the Trade Payables note, take the closing balance for both years — Schedule III now requires you to disclose MSE versus non-MSE payables separately, but the total goes into the CCC formula. The opening balance of the current year is the closing balance of the previous year — pull both into the calculator.</p>

            <h3>Step 2 — Pick Two P&L Numbers</h3>
            <p>Revenue from Operations is the top line of the Statement of Profit and Loss after netting GST and discounts. Cost of Goods Sold is computed as Cost of Materials Consumed plus Purchases of Stock-in-Trade plus Changes in Inventory plus Manufacturing Expenses. For pure trading and services companies, COGS may equal Purchases of Stock-in-Trade or Cost of Services Rendered. The denominator for DPO ideally uses Purchases for the year, but COGS is a reasonable approximation and is what most practitioners use for the Schedule III disclosure.</p>

            <h3>Step 3 — Choose the Period</h3>
            <p>For the statutory Schedule III disclosure, always use 365 days (Annual). The calculator also supports 180 days (Half-yearly, for SEBI LODR Reg 52 listed-debt entities) and 90 days (Quarterly, for internal management reporting). Match the period to your input data — if you enter half-yearly revenue and COGS, set the period to 180 days; otherwise the days will not normalise correctly.</p>

            <h3>Step 4 — Read the Output Panel</h3>
            <p>The output shows your headline CCC in days, plus DIO, DSO and DPO individually. A horizontal bar chart visualises the composition. Three Schedule III mandatory ratios — Inventory Turnover, Trade Receivables Turnover and Trade Payables Turnover — are auto-derived and presented in the Schedule III disclosure block. If your DPO crosses the 45-day MSMED Act threshold, a warning banner highlights Section 15, 16 and 43B(h) exposures. Sector benchmark comparison and 25 per cent variance flag are shown when relevant inputs are provided.</p>
        </section>

        <section class="content-section" id="formula">
            <h2>Cash Conversion Cycle Formula</h2>
            <p>The formula was popularised by Verlyn Richards and Eugene Laughlin in 1980 and is now the global standard for working-capital efficiency measurement. The Indian application uses the Schedule III Guidance Note components.</p>

            <div class="formula-box">
<span class="label">Cash Conversion Cycle (CCC)</span> = DIO + DSO − DPO<br>
<br>
<span class="label">DIO</span> (Days Inventory Outstanding) = (Average Inventory ÷ COGS) × 365<br>
<span class="label">DSO</span> (Days Sales Outstanding) = (Average Trade Receivables ÷ Revenue) × 365<br>
<span class="label">DPO</span> (Days Payable Outstanding) = (Average Trade Payables ÷ COGS) × 365<br>
<br>
<span class="label">Average Balance</span> = (Opening + Closing) ÷ 2<br>
<span class="label">Operating Cycle</span> = DIO + DSO
            </div>

            <h3>What Goes into Each Component</h3>
            <p><strong>Inventory</strong>: total inventory under Schedule III Division II — raw materials, work-in-progress, finished goods, stock-in-trade, stores and spares. Excludes capital work-in-progress and intangibles. Average is computed as simple mean of opening and closing.</p>
            <p><strong>Trade Receivables</strong>: net of provision for doubtful debts under Ind AS 109 expected credit loss model. Includes current and non-current trade receivables. Excludes other receivables, capital advances, deposits, statutory dues recoverable.</p>
            <p><strong>Trade Payables</strong>: total of MSE and non-MSE payables disclosed under Schedule III Division II. Includes accrued purchase liabilities. Excludes accrued employee costs, statutory dues payable, capital expenditure payables, derivative liabilities.</p>
            <p><strong>Revenue</strong>: Revenue from Operations only. Excludes Other Income (interest, dividend, foreign exchange gain).</p>
            <p><strong>COGS</strong>: Cost of Materials Consumed plus Purchases of Stock-in-Trade plus Changes in Inventory plus Manufacturing Expenses. Used as the denominator for DIO and DPO.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> If you want a stricter DPO computation, replace COGS with Purchases for the year in the denominator. Purchases excludes manufacturing expenses and inventory adjustments, giving a cleaner trade-credit picture. Disclose your choice in the basis-of-preparation section of your management report.</p>
            </div>

            <h3>Worked Example with Numbers</h3>
            <p>A mid-sized Indian manufacturer reports the following extracts (₹ in lakhs):</p>
            <table class="rate-table">
                <thead><tr><th>Item</th><th>Opening (₹ Lakhs)</th><th>Closing (₹ Lakhs)</th><th>Average</th></tr></thead>
                <tbody>
                    <tr><td>Inventory</td><td>800</td><td>1,200</td><td>1,000</td></tr>
                    <tr><td>Trade Receivables</td><td>900</td><td>1,100</td><td>1,000</td></tr>
                    <tr><td>Trade Payables</td><td>500</td><td>700</td><td>600</td></tr>
                </tbody>
            </table>
            <table class="rate-table">
                <thead><tr><th>P&L Item</th><th>Annual Amount (₹ Lakhs)</th></tr></thead>
                <tbody>
                    <tr><td>Revenue from Operations</td><td>10,000</td></tr>
                    <tr><td>Cost of Goods Sold</td><td>7,300</td></tr>
                </tbody>
            </table>
            <p>Computation: <strong>DIO</strong> = (1,000 / 7,300) × 365 = 50 days. <strong>DSO</strong> = (1,000 / 10,000) × 365 = 37 days. <strong>DPO</strong> = (600 / 7,300) × 365 = 30 days. <strong>CCC</strong> = 50 + 37 − 30 = <strong>57 days</strong>. Operating Cycle = 50 + 37 = 87 days. The company's working capital is tied up for 57 days on average — at ₹10,000 lakh annual sales, this represents roughly ₹1,562 lakh of working-capital funding requirement (₹10,000 × 57 ÷ 365).</p>
        </section>

        <section class="content-section" id="schedule-iii">
            <h2>Schedule III Disclosure — Three CCC Components are Mandatory Ratios</h2>
            <p>The <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> Schedule III was amended via <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> notification G.S.R. 207(E) dated 24 March 2021, effective from FY 2021-22. The amendment introduced eleven mandatory analytical ratios. Three of those eleven are direct components of the Cash Conversion Cycle: Inventory Turnover Ratio, Trade Receivables Turnover Ratio and Trade Payables Turnover Ratio.</p>

            <h3>The Three CCC Ratios in Schedule III</h3>
            <table class="rate-table">
                <thead><tr><th>Schedule III Ratio</th><th>Formula</th><th>CCC Equivalent</th></tr></thead>
                <tbody>
                    <tr><td><strong>Inventory Turnover Ratio</strong></td><td>COGS ÷ Average Inventory</td><td>DIO = 365 ÷ Inventory Turnover</td></tr>
                    <tr><td><strong>Trade Receivables Turnover Ratio</strong></td><td>Revenue ÷ Average Trade Receivables</td><td>DSO = 365 ÷ TR Turnover</td></tr>
                    <tr><td><strong>Trade Payables Turnover Ratio</strong></td><td>COGS or Purchases ÷ Average Trade Payables</td><td>DPO = 365 ÷ TP Turnover</td></tr>
                </tbody>
            </table>
            <p>Both formats are mathematically equivalent — turnover ratios in times, days outstanding in days. Schedule III prescribes the ratio format, but the calculator presents both for completeness.</p>

            <h3>The 25% Variance Explanation Rule</h3>
            <p>If any of the three component ratios changes by more than 25% compared to the preceding year, the company must provide a written explanation in the notes to accounts under Schedule III. Statutory auditors verify the explanation. Common explanations include: extended credit terms to drive sales (increases DSO), supply-chain disruption holding inventory (increases DIO), demand contraction (reduces both DIO and DSO indirectly via lower turnover), MSE supplier base change (affects DPO), and reclassification of items between trade payables and other current liabilities.</p>

            <div class="callout warn">
                <p><strong>Note:</strong> The 25% threshold applies to each component independently. CCC itself is not directly disclosed under Schedule III, but a material change in CCC will almost always be driven by a 25%+ change in at least one of the three component ratios — which then triggers the explanation requirement.</p>
            </div>

            <h3>Format of Disclosure</h3>
            <p>The ICAI Guidance Note recommends a tabular format with columns for Ratio Name, Numerator, Denominator, Current Period, Previous Period, % Variance and Reason for Variance (if &gt;25%). The numerator and denominator must be defined in the note narrative. Listed companies should ensure consistency between this Schedule III disclosure, the SEBI LODR Reg 34(3) MDA disclosure and any working-capital commentary in the directors' report.</p>
        </section>

        <section class="content-section" id="benchmarks">
            <h2>Industry Benchmarks for CCC in India</h2>
            <p>CCC varies dramatically by industry — comparing across sectors is meaningless. The bands below reflect typical Indian listed-peer ranges. Use them as a starting point and refine with two or three direct competitor data points for precise benchmarking.</p>

            <table class="rate-table">
                <thead><tr><th>Industry</th><th>Typical CCC Band (Days)</th><th>Driver</th></tr></thead>
                <tbody>
                    <tr><td><strong>Modern Retail / Quick-Commerce</strong></td><td>−30 to +20</td><td>Fast inventory turns, instant payment, extended supplier credit</td></tr>
                    <tr><td><strong>FMCG / Consumer Goods</strong></td><td>30 – 60</td><td>Brand strength compresses DSO; distribution networks support DPO</td></tr>
                    <tr><td><strong>IT Services / Software</strong></td><td>60 – 90</td><td>No inventory; DSO dominates due to invoice-after-delivery cycles</td></tr>
                    <tr><td><strong>Services / Professional</strong></td><td>40 – 80</td><td>WIP inventory minimal; DSO from corporate clients with long payment cycles</td></tr>
                    <tr><td><strong>Manufacturing</strong></td><td>60 – 120</td><td>Long production cycles, RM stocking, B2B credit terms</td></tr>
                    <tr><td><strong>Pharma</strong></td><td>120 – 180</td><td>Distribution chain credit, generic export receivables, regulatory inventory</td></tr>
                    <tr><td><strong>Trading / Distribution</strong></td><td>40 – 80</td><td>Inventory and AR balanced by supplier credit</td></tr>
                    <tr><td><strong>Real Estate Developer</strong></td><td>200+ (project-specific)</td><td>WIP inventory dominates — RERA escrow modifies dynamics</td></tr>
                    <tr><td><strong>Capital Goods / Engineering</strong></td><td>100 – 200</td><td>Long-cycle projects, milestone billing, large WIP</td></tr>
                </tbody>
            </table>

            <h3>What "Negative CCC" Means</h3>
            <p>A negative CCC means the company collects from customers and turns over inventory faster than it pays suppliers — supplier credit funds operations. Modern retail (DMart, Reliance Retail, Trent) and quick-commerce (Zepto, Blinkit) routinely report negative CCC. Globally, Apple, Amazon and Costco are the textbook examples. Negative CCC is structurally desirable but achievable only through scale, brand power and supply-chain dominance.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> When benchmarking against listed peers, pull data from the latest annual report's Schedule III note disclosure rather than from secondary sources — secondary sources often use different numerator-denominator definitions, leading to apples-to-oranges comparisons.</p>
            </div>
        </section>

        <section class="content-section" id="interpretation">
            <h2>How to Interpret Your CCC Result</h2>
            <p>The headline CCC tells you the duration; the components tell you the cause. Always read the three components individually before forming a judgement.</p>

            <h3>If DIO is High</h3>
            <p>Inventory is sitting longer than peers. Possible causes: slow-moving or obsolete stock, demand contraction, supply-chain over-stocking, seasonal inventory build-up, or production cycle inefficiency. Action items: ABC analysis, ageing review, slow-moving provision under Ind AS 2, supplier consignment arrangements, just-in-time replenishment.</p>

            <h3>If DSO is High</h3>
            <p>Customers are taking longer to pay. Possible causes: extended credit terms to win business, customer financial stress, billing cycle inefficiency, dispute resolution delays, large project-based billing milestones. Action items: ageing of receivables review, expected credit loss provision under Ind AS 109, factoring or TReDS for accelerated collection, tighter credit-control policies, early payment discounts.</p>

            <h3>If DPO is Low</h3>
            <p>Suppliers are being paid faster than necessary. This may reflect cash surplus, supplier early-payment discount programs, or aggressive working-capital deployment. Lengthening DPO can free up cash but must respect MSMED Act 45-day limits and supplier relationships. Negotiate longer payment terms during contract renewals rather than unilaterally delaying payments.</p>

            <h3>If DPO is High</h3>
            <p>Trade credit is being maximised — generally favourable for cash flow. However, watch for: MSMED Act Section 15 breach (45-day limit for MSE suppliers), Section 16 interest exposure, Section 43B(h) Income Tax disallowance, and supplier relationship degradation. A high DPO that is concentrated in MSE suppliers triggers all four risks simultaneously.</p>

            <h3>If CCC is Trending Up</h3>
            <p>Working capital is becoming less efficient. Often the leading indicator of operational stress before earnings deterioration shows in the P&L. Investigate which component is driving the trend, run a 12-quarter rolling analysis, and brief the audit committee. Listed companies with rising CCC face analyst questions on every quarterly earnings call.</p>

            <h3>If CCC is Trending Down</h3>
            <p>Working capital efficiency improving — generally positive. Confirm the improvement is sustainable: faster collections from genuine credit-policy changes, not from deferred provisioning; lower inventory from genuine demand sensing, not from understocking; longer DPO from contractual renegotiation, not from delayed payments to MSE suppliers.</p>
        </section>


        <div class="body-cta">
            <h3>Need Help with Working Capital Optimisation?</h3>
            <p>Patron Accounting LLP supports CFO offices with Schedule III ratio disclosure, MSMED Act compliance reporting, working capital optimisation studies and bank facility renewal documentation — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Cash%20Conversion%20Cycle%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Cash%20Conversion%20Cycle%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Cash%20Conversion%20Cycle%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="msmed">
            <h2>MSMED Act 2006 — The 45-Day DPO Ceiling</h2>
            <p>The Micro, Small and Medium Enterprises Development Act, 2006 places a hard regulatory cap on how long buyers can take to pay MSE (Micro and Small Enterprise) suppliers. Pushing DPO past this threshold creates three distinct exposures — interest, tax disallowance and disclosure — that materially affect financial statements and tax outflows.</p>

            <h3>Section 15 — The 45-Day Rule</h3>
            <p>Section 15 of the MSMED Act mandates that buyers pay MSE suppliers within the period specified in a written agreement, capped at 45 days from the day of acceptance or deemed acceptance. If there is no written agreement, the period is 15 days. The 45-day ceiling cannot be contracted away — any clause specifying a longer period is void as a matter of public policy.</p>

            <h3>Section 16 — Penalty Interest at 3× RBI Bank Rate, Compounded Monthly</h3>
            <p>Section 16 imposes compound interest with monthly rests at three times the bank rate notified by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a>. With the bank rate currently around 6.50%, the effective penalty rate is approximately 19.5% with monthly compounding — equivalent to ~21% effective annual rate. Interest accrues from the appointed day until actual payment, with no cap.</p>

            <h3>Section 43B(h) — Income Tax Disallowance</h3>
            <p>Finance Act 2023 inserted Section 43B(h) of the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Act</a>, effective from AY 2024-25, disallowing deduction for any sum payable to MSE suppliers beyond the Section 15 time limit unless actually paid. This means delayed MSE dues are added back to taxable income in the year of accrual and only allowed as deduction in the year of actual payment — creating timing differences and cash tax outflow.</p>

            <h3>MCA Half-Yearly Reporting — Form MSME-1 and Updates</h3>
            <p>All companies receiving supplies from MSEs and making payments beyond 45 days must file half-yearly returns to the Ministry of Corporate Affairs in Form MSME-1, disclosing outstanding dues and reasons for delay. From April 2025, MCA notification SO-1376(E) dated 25 March 2025 enhanced the disclosure requirements. Auditors verify MSME-1 filing as part of statutory audit completion procedures.</p>

            <h3>How DPO Should Be Read Against Section 15</h3>
            <table class="rate-table">
                <thead><tr><th>DPO (Days)</th><th>MSE Supplier Implication</th><th>Action</th></tr></thead>
                <tbody>
                    <tr><td>≤ 15</td><td>Compliant even without written agreement</td><td>None — well within statutory limit</td></tr>
                    <tr><td>16 – 45</td><td>Compliant only with written agreement</td><td>Document agreed terms in purchase orders</td></tr>
                    <tr><td>46 – 60</td><td>Section 15 breach for MSE dues</td><td>Section 16 interest accrues + Section 43B(h) tax disallowance</td></tr>
                    <tr><td>&gt; 60</td><td>Significant exposure</td><td>Form MSME-1 filing + MCA disclosure + ICDS Section 43B(h) impact</td></tr>
                </tbody>
            </table>

            <div class="callout warn">
                <p><strong>Note:</strong> The 45-day rule applies only to MSE suppliers (Micro and Small Enterprises). Medium Enterprises were originally covered but were removed by the 2023 amendment. Your DPO is a blended average — to assess MSMED exposure, separately compute DPO on MSE payables only, using the disaggregated trade payables note required by Schedule III.</p>
            </div>

            <h3>MSME Samadhaan Portal</h3>
            <p>The <a href="https://samadhaan.msme.gov.in/" target="_blank" rel="noopener">MSME Samadhaan Portal</a> operated by the Ministry of MSME is the official dispute resolution mechanism. Aggrieved MSE suppliers file complaints electronically; State-level Micro and Small Enterprise Facilitation Councils (MSEFCs) adjudicate within 90 days. Once an award is issued, any appeal by the buyer requires a 75% pre-deposit, making contesting the order commercially difficult.</p>
        </section>

        <section class="content-section" id="bank-lending">
            <h2>How CCC Drives Bank Working Capital Lending</h2>
            <p>Indian banks size working-capital limits using two broad frameworks — the Tandon Committee Method and the Maximum Permissible Bank Finance (MPBF) method. Both methods derive directly from CCC components. A higher CCC means a higher gross working capital requirement and a larger eligible bank limit.</p>

            <h3>Tandon Committee First and Second Method</h3>
            <p>Under the First Method, the bank funds 75% of working capital gap (Current Assets minus Current Liabilities other than bank borrowings). Under the Second Method (more conservative), the bank funds 75% of (Current Assets minus 25% of Current Assets minus Current Liabilities other than bank borrowings). The CCC governs the level of Current Assets — particularly inventory and receivables — feeding directly into the eligible limit.</p>

            <h3>MPBF Method</h3>
            <p>For larger borrowers, the Maximum Permissible Bank Finance (MPBF) is computed as Working Capital Gap less 25% margin from net working capital. CCC drives the size of inventory and receivables, which determine MPBF. Banks require quarterly stock and book debt statements to monitor that actual DIO and DSO match the sanctioned levels — drawings beyond CCC-implied requirements trigger irregularity charges.</p>

            <h3>Cash Credit Limit Sizing — Practical Example</h3>
            <table class="rate-table">
                <thead><tr><th>Component</th><th>Calculation</th><th>₹ Lakhs</th></tr></thead>
                <tbody>
                    <tr><td>Annual Sales</td><td>Given</td><td>10,000</td></tr>
                    <tr><td>CCC</td><td>From this calculator</td><td>57 days</td></tr>
                    <tr><td>Working Capital Required</td><td>Sales × CCC ÷ 365</td><td>1,562</td></tr>
                    <tr><td>Less: Margin (25%)</td><td>WC × 25%</td><td>(391)</td></tr>
                    <tr><td><strong>MPBF (Eligible Bank Limit)</strong></td><td><strong>WC − Margin</strong></td><td><strong>1,171</strong></td></tr>
                </tbody>
            </table>

            <div class="callout">
                <p><strong>CA Tip:</strong> When CCC trends down due to operational improvement, consider voluntarily reducing your CC limit during the next renewal — most banks charge a non-utilisation commitment fee (typically 0.25% to 0.50% per annum) on the unutilised portion of sanctioned limits, which can add up over a full year on a large facility.</p>
            </div>
        </section>

        <section class="content-section" id="optimisation">
            <h2>How to Optimise Your Cash Conversion Cycle</h2>
            <p>CCC reduction releases trapped cash without external borrowing. A 10-day reduction on a ₹100 crore revenue base unlocks roughly ₹2.7 crore of working capital. The three components admit different optimisation playbooks.</p>

            <h3>Reducing DIO (Inventory Days)</h3>
            <ul>
                <li><strong>ABC and FSN analysis</strong> — categorise SKUs by value and movement; reduce slow-moving inventory ageing</li>
                <li><strong>Vendor managed inventory (VMI)</strong> — supplier holds stock until consumed; balance sheet stays light</li>
                <li><strong>Just-in-time replenishment</strong> — synchronise with production schedule</li>
                <li><strong>Demand sensing and forecasting</strong> — replace static safety-stock formulas with dynamic models</li>
                <li><strong>SKU rationalisation</strong> — fewer SKUs, deeper inventory per SKU, lower total holding</li>
            </ul>

            <h3>Reducing DSO (Receivable Days)</h3>
            <ul>
                <li><strong>Tighter credit policy</strong> — credit-scoring at customer onboarding, lower limits for new buyers</li>
                <li><strong>Early payment discounts</strong> — typical 1-2% for 7-10 day payment</li>
                <li><strong>TReDS</strong> — Trade Receivables Discounting System; immediate liquidity at competitive rates</li>
                <li><strong>Invoice automation</strong> — same-day invoicing, electronic delivery, OCR-based receipt confirmation</li>
                <li><strong>Dunning automation</strong> — graduated reminder sequence escalating to credit-control intervention</li>
                <li><strong>Letter of Credit / Bank Guarantee</strong> for export and large project receivables</li>
            </ul>

            <h3>Extending DPO (Payable Days) — Carefully</h3>
            <ul>
                <li><strong>Renegotiate terms at contract renewal</strong> — push from 30 days to 60 days or 60 to 90 with non-MSE suppliers</li>
                <li><strong>Supply chain finance</strong> — bank pays supplier early; buyer pays bank later</li>
                <li><strong>Procurement consolidation</strong> — fewer suppliers with negotiating leverage</li>
                <li><strong>Avoid stretching MSE payables</strong> — Section 15/16/43B(h) penalties exceed the working-capital benefit</li>
                <li><strong>Avoid foregoing early payment discounts</strong> if discount value exceeds borrowing cost</li>
            </ul>

            <h3>The Compounding Effect</h3>
            <p>A 5-day improvement in each of DIO, DSO and DPO compounds to a 15-day reduction in CCC, releasing roughly 4% of annual revenue as working capital. For a ₹100 crore revenue company, that is ₹4 crore — enough to fund a meaningful capex without taking on new debt or to repay existing debt and improve interest coverage.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> Set CCC improvement as a board-level KPI for the CFO and supply-chain head. Track it monthly using flash data, with quarterly audited validation. Compare against three benchmark sets: own historical 12-quarter trend, top three Indian listed peers, and top three global peers in the same sector.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About Cash Conversion Cycle</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the Cash Conversion Cycle (CCC)?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Cash Conversion Cycle is a working-capital efficiency metric showing the number of days between paying suppliers and collecting cash from customers. It combines Days Inventory Outstanding, Days Sales Outstanding and Days Payable Outstanding into a single measure. A shorter CCC means cash is tied up for fewer days; a negative CCC means the company collects from customers before it pays suppliers, which is a powerful working-capital advantage seen in retail giants and asset-light tech firms.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the formula for Cash Conversion Cycle?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">CCC = DIO + DSO − DPO. Days Inventory Outstanding equals Average Inventory divided by COGS multiplied by 365. Days Sales Outstanding equals Average Trade Receivables divided by Revenue multiplied by 365. Days Payable Outstanding equals Average Trade Payables divided by COGS multiplied by 365. Average balances use the simple mean of opening and closing balances. The first two components together (DIO plus DSO) are called the Operating Cycle. CCC equals Operating Cycle minus DPO.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Are CCC components disclosed in Schedule III financial statements?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Three of the eleven mandatory Schedule III analytical ratios are direct components of CCC — Inventory Turnover Ratio, Trade Receivables Turnover Ratio and Trade Payables Turnover Ratio. Each one converts to days as DIO, DSO and DPO respectively (Days = 365 / Turnover). Schedule III mandates disclosure of these three ratios from FY 2021-22 onwards under MCA notification dated 24 March 2021, with explanation required for any change exceeding 25 per cent year-on-year.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is a good Cash Conversion Cycle in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">There is no single ideal CCC because it varies by industry. IT services and software firms often run CCC of 60 to 90 days driven entirely by DSO. Manufacturing companies typically operate 60 to 120 days CCC. Retail and FMCG aim for 30 to 60 days, while modern retail with strong supplier leverage targets near-zero or negative CCC. A negative CCC means the company is being financed by suppliers — strongest working-capital position. Always benchmark against same-industry Indian peers.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How does MSMED Act 2006 affect Days Payable Outstanding?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 15 of the MSMED Act 2006 caps payment to MSE suppliers at 45 days from acceptance (or 15 days if no written agreement). Section 16 imposes compound interest at three times the RBI bank rate for delays. Finance Act 2023 inserted Section 43B(h) of Income Tax Act disallowing tax deduction for late MSE payments until actually paid. A high DPO above 45 days that is driven by MSE supplier dues triggers all three consequences and must be reviewed alongside the CCC.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is a negative Cash Conversion Cycle and is it always good?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A negative CCC means DPO exceeds DIO plus DSO — the company pays suppliers after collecting from customers, effectively using supplier credit as free working capital. Examples include modern retail and e-commerce platforms. While generally desirable, an extremely negative CCC achieved by stretching payables to MSE suppliers can trigger MSMED Act penalties, Section 43B(h) disallowance and supplier relationship damage. Sustainable negative CCC comes from speed and scale, not from delay tactics.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How is Days Sales Outstanding (DSO) calculated?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">DSO equals Average Trade Receivables divided by Revenue multiplied by the number of days in the period (365 for annual). Average Trade Receivables is the simple mean of opening and closing trade receivables, sourced from the balance sheet. Revenue uses Revenue from Operations from the Statement of Profit and Loss. Some analysts use Credit Sales only instead of total Revenue if cash sales are material. Lower DSO means faster collection; higher DSO indicates slower collection or longer credit terms.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How is Days Inventory Outstanding (DIO) calculated?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">DIO equals Average Inventory divided by Cost of Goods Sold multiplied by 365. Average Inventory is the mean of opening and closing inventory, including raw materials, work-in-progress and finished goods. COGS is derived from the P&L as Cost of Materials Consumed plus Changes in Inventory plus Manufacturing Expenses, or directly from the cost-of-goods-sold note. Lower DIO indicates faster inventory turns; higher DIO signals stocking issues, slow-moving inventory or extended production cycles requiring management review.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How is Days Payable Outstanding (DPO) calculated?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">DPO equals Average Trade Payables divided by Purchases or COGS multiplied by 365. Average Trade Payables is the mean of opening and closing balances. The denominator should ideally be Purchases for the year, but COGS is commonly used as an approximation when Purchases are not separately disclosed. Higher DPO means longer credit periods from suppliers — beneficial for cash flow but capped at 45 days for MSE suppliers under Section 15 of the MSMED Act, with penalty interest for breach.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Do I need to explain a CCC change of more than 25 per cent?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">CCC itself is not a Schedule III ratio, but its three components — Inventory Turnover, Trade Receivables Turnover and Trade Payables Turnover — are mandatory ratios. If any component changes by more than 25 per cent compared to the preceding year, the company must provide a written explanation in the notes to accounts under Schedule III. Common explanations include extended credit to drive sales, supply-chain disruption holding inventory, demand contraction, change in payment terms, or accounting reclassification.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is TReDS and how does it affect DSO?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">TReDS (Trade Receivables Discounting System) is an RBI-regulated electronic platform launched in 2018 enabling MSME suppliers to discount their invoices through banks and NBFCs at competitive rates. For the supplier, accepted invoices reduce DSO sharply because cash is realised within days of upload rather than waiting for buyer payment. For corporate buyers, TReDS strengthens supplier relationships and reduces the risk of MSMED Act delayed-payment interest. Three platforms are operational: RXIL, Mynd and Invoicemart.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How does Cash Conversion Cycle affect bank working capital lending?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Banks size working-capital limits using the Tandon Committee framework or the Maximum Permissible Bank Finance (MPBF) method, both of which depend directly on inventory and receivables holding periods. A higher CCC translates into higher gross working capital and a larger eligible bank limit. Banks require quarterly stock and book debt statements to monitor that actual DIO and DSO match the sanctioned levels — drawings beyond CCC-implied requirements trigger irregularity charges, additional interest, or facility recall.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Where on the balance sheet do I find figures for CCC?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Ind AS Schedule III Division II, Inventory is reported under Current Assets — Inventories, with detailed sub-classification in the inventory note. Trade Receivables sit under Current Financial Assets, with ageing disclosed by current and beyond categories. Trade Payables appear under Current Financial Liabilities, with separate disclosure for MSE versus non-MSE suppliers. Revenue from Operations is the top line of the P&L; COGS appears as Cost of Materials Consumed plus Purchases plus Changes in Inventory plus Manufacturing Expenses.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need Working Capital Optimisation?</h3>
            <p>Get a CA-led CCC review with Schedule III compliance, MSMED Act check, working capital forecasting and bank facility renewal documentation — fixed-fee.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Cash%20Conversion%20Cycle%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Cash%20Conversion%20Cycle%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Cash%20Conversion%20Cycle%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/accounting-services" class="sidebar-link">Accounting & Bookkeeping<span class="arrow">→</span></a>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/stock-audit" class="sidebar-link">Stock Audit<span class="arrow">→</span></a>
            <a href="/msme-registration" class="sidebar-link">MSME Registration<span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/debt-to-equity-calculator" class="sidebar-link">Debt to Equity Calculator<span class="arrow">→</span></a>
            <a href="/tools/dscr-calculator" class="sidebar-link">DSCR Calculator<span class="arrow">→</span></a>
            <a href="/tools/balance-sheet-generator" class="sidebar-link">Balance Sheet Generator<span class="arrow">→</span></a>
            <a href="/tools/cash-flow-calculator" class="sidebar-link">Cash Flow Statement<span class="arrow">→</span></a>
            <a href="/tools/profit-loss-generator" class="sidebar-link">Profit & Loss Generator<span class="arrow">→</span></a>
            <a href="/tools/lease-accounting-calculator-ind-as-116" class="sidebar-link">Lease Accounting (Ind AS 116)<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements<span class="arrow">→</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements<span class="arrow">→</span></a>
            <a href="/blog/authorized-capital-vs-paid-up-capital-meaning-differences-and-share-capital-structure-explained" class="sidebar-link">Authorized vs Paid-Up Capital<span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>

<footer class="footer">
    <p>© 2026 Patron Accounting LLP. All rights reserved.</p>
</footer>


<script>
(function() {
    'use strict';
    function parseINR(raw){if(raw===undefined||raw===null)return NaN;var c=String(raw).replace(/[,\s₹]/g,'');if(c==='')return NaN;var n=parseFloat(c);return isFinite(n)?n:NaN;}
    function pickPositive(p,f){return (isFinite(p)&&p>0)?p:f;}

    function setupToggleGroup(id) {
        const group = document.getElementById(id);
        if (!group) return;
        group.addEventListener('click', function(e) {
            const btn = e.target.closest('.toggle-btn');
            if (!btn || !group.contains(btn)) return;
            group.querySelectorAll('.toggle-btn').forEach(b => {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });
            btn.classList.add('active');
            btn.setAttribute('aria-selected', 'true');
        });
    }
    function getActive(groupId) {
        const group = document.getElementById(groupId);
        if (!group) return null;
        const active = group.querySelector('.toggle-btn.active');
        return active ? active.dataset.value : null;
    }
    setupToggleGroup('periodGroup');
    setupToggleGroup('industryGroup');

    function fmtINR(num) {
        if (num === undefined || num === null || isNaN(num)) return '₹0';
        const sign = num < 0 ? '-' : '';
        const abs = Math.abs(num);
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function fmtDays(n) {
        if (!isFinite(n)) return '—';
        const sign = n < 0 ? '−' : '';
        return sign + Math.abs(n).toFixed(1) + ' days';
    }
    function fmtRatio(n) {
        if (!isFinite(n)) return '—';
        return n.toFixed(2);
    }
    function fmtPct(n) {
        if (!isFinite(n)) return '—';
        const sign = n > 0 ? '+' : '';
        return sign + n.toFixed(1) + '%';
    }
    function num(id) { return parseINR(document.getElementById(id).value) || 0; }

    const benchmarks = {
        manufacturing: { low: 60, high: 120, label: 'Manufacturing', note: 'Indian manufacturing peers typically run CCC of 60 to 120 days, with capex-cycle peaks pushing the upper end.' },
        retail: { low: -30, high: 60, label: 'Retail / FMCG', note: 'Indian retail and FMCG peers run CCC from negative 30 to 60 days. Modern retail (DMart, Reliance Retail) targets near-zero or negative CCC.' },
        it: { low: 60, high: 90, label: 'IT / Software', note: 'Indian IT services majors typically run CCC of 60 to 90 days, dominated entirely by DSO from corporate clients.' },
        services: { low: 40, high: 80, label: 'Services / Professional', note: 'Indian service-sector peers run CCC of 40 to 80 days, mostly DSO-driven from corporate billing cycles.' },
        trading: { low: 40, high: 80, label: 'Trading / Distribution', note: 'Indian trading and distribution peers typically run CCC of 40 to 80 days.' },
        pharma: { low: 120, high: 180, label: 'Pharma', note: 'Indian pharma peers typically run CCC of 120 to 180 days due to long distribution chains and regulatory inventory.' }
    };

    function readInputs() {
        return {
            invO: num('invOpening'),
            invC: num('invClosing'),
            arO: num('arOpening'),
            arC: num('arClosing'),
            apO: num('apOpening'),
            apC: num('apClosing'),
            rev: num('revenue'),
            cogs: num('cogs'),
            period: parseInt(getActive('periodGroup'), 10) || 365,
            industry: getActive('industryGroup') || 'manufacturing',
            prevCCC: parseINR(document.getElementById('prevCCC').value) // can be negative
        };
    }

    function validate(inp) {
        if (inp.rev <= 0) return 'Please enter Revenue from Operations (must be greater than zero).';
        if (inp.cogs <= 0) return 'Please enter Cost of Goods Sold (must be greater than zero).';
        if (inp.invO + inp.invC === 0 && inp.arO + inp.arC === 0 && inp.apO + inp.apC === 0) {
            return 'Please enter at least one balance — inventory, receivables, or payables.';
        }
        return null;
    }

    function compute(inp) {
        const avgInv = (inp.invO + inp.invC) / 2;
        const avgAR = (inp.arO + inp.arC) / 2;
        const avgAP = (inp.apO + inp.apC) / 2;
        const dio = inp.cogs > 0 ? (avgInv / inp.cogs) * inp.period : 0;
        const dso = inp.rev > 0 ? (avgAR / inp.rev) * inp.period : 0;
        const dpo = inp.cogs > 0 ? (avgAP / inp.cogs) * inp.period : 0;
        const ccc = dio + dso - dpo;
        const operatingCycle = dio + dso;

        // Schedule III turnover ratios (times)
        const invTurnover = avgInv > 0 ? inp.cogs / avgInv : 0;
        const arTurnover = avgAR > 0 ? inp.rev / avgAR : 0;
        const apTurnover = avgAP > 0 ? inp.cogs / avgAP : 0;

        // Working capital tied up
        const wcDays = ccc;
        const annualisedRev = inp.rev * (365 / inp.period);
        const wcTiedUp = (annualisedRev * wcDays) / 365;

        // YoY variance check
        let yoyVar = null, exceeds25 = false;
        // Use !isNaN since prevCCC can legitimately be 0 or negative
        if (!isNaN(inp.prevCCC) && document.getElementById('prevCCC').value !== '' && Math.abs(inp.prevCCC) > 0.01) {
            yoyVar = ((ccc - inp.prevCCC) / Math.abs(inp.prevCCC)) * 100;
            exceeds25 = Math.abs(yoyVar) > 25;
        }

        return { avgInv, avgAR, avgAP, dio, dso, dpo, ccc, operatingCycle, invTurnover, arTurnover, apTurnover, wcTiedUp, yoyVar, exceeds25 };
    }

    function getVerdict(ccc, dpo) {
        if (ccc < 0) return { headline: 'Negative CCC — Excellent', sub: 'Suppliers fund your working capital. Watch MSE supplier dues for MSMED Act exposure.', cls: 'verdict' };
        if (ccc < 30) return { headline: 'Strong Working Capital Position', sub: 'Cash cycle compressed. Best-in-class for non-financial businesses.', cls: 'verdict' };
        if (ccc < 60) return { headline: 'Healthy / Efficient', sub: 'Reasonable working-capital efficiency. Look for optimisation in the highest of the three components.', cls: 'blue' };
        if (ccc < 90) return { headline: 'Moderate', sub: 'Within typical manufacturing/service ranges. Investigate which component drives the cycle.', cls: 'amber' };
        if (ccc < 150) return { headline: 'Elevated — Working Capital Stretched', sub: 'Cash tied up for extended period. Bank limits and CCC drivers need review.', cls: 'amber' };
        return { headline: 'Stressed — High Working Capital Burden', sub: 'Cash conversion is slow. Likely funding stress, inventory issues, or collection delays. Engage CA review.', cls: 'red' };
    }

    function getBenchmarkBanner(ccc, industry) {
        const b = benchmarks[industry];
        if (!b) return null;
        let cls, msg;
        if (ccc >= b.low && ccc <= b.high) {
            cls = 'success';
            msg = '<strong>✓ In line with industry.</strong> Your CCC of <strong>' + fmtDays(ccc) + '</strong> sits within the typical ' + b.label + ' band of ' + b.low + ' to ' + b.high + ' days. ' + b.note;
        } else if (ccc < b.low) {
            cls = 'info';
            msg = '<strong>✓ Better than industry.</strong> Your CCC of <strong>' + fmtDays(ccc) + '</strong> is below the typical ' + b.label + ' band of ' + b.low + ' to ' + b.high + ' days. Strong working-capital position relative to peers.';
        } else {
            cls = 'warn';
            msg = '<strong>⚠ Above industry band.</strong> Your CCC of <strong>' + fmtDays(ccc) + '</strong> exceeds the typical ' + b.label + ' band of ' + b.low + ' to ' + b.high + ' days. Investigate which component is driving the gap.';
        }
        return { cls: cls, html: msg };
    }

    function getMSMEDBanner(dpo) {
        if (dpo <= 15) {
            return { cls: 'success', html: '<strong>✓ MSMED Act Compliant.</strong> DPO of ' + fmtDays(dpo) + ' is within the 15-day default limit (Section 15) — compliant even without written agreement.' };
        }
        if (dpo <= 45) {
            return { cls: 'info', html: '<strong>ℹ MSMED Act — Review Written Agreements.</strong> DPO of ' + fmtDays(dpo) + ' is within 45-day Section 15 limit only if a written agreement is in place. Without written agreement, the cap is 15 days. Audit purchase orders and master supply agreements.' };
        }
        if (dpo <= 60) {
            return { cls: 'warn', html: '<strong>⚠ MSMED Act Section 15 — Likely Breach.</strong> DPO of ' + fmtDays(dpo) + ' exceeds the 45-day ceiling. For MSE supplier dues, Section 16 compound interest at 3× RBI bank rate accrues monthly, and Section 43B(h) of Income Tax Act disallows tax deduction until actually paid. File Form MSME-1 with MCA. <a href="#msmed" style="color:#78350F;text-decoration:underline;">Read more →</a>' };
        }
        return { cls: 'danger', html: '<strong>✗ MSMED Act — Significant Exposure.</strong> DPO of ' + fmtDays(dpo) + ' materially exceeds the 45-day ceiling. Compound interest under Section 16, Section 43B(h) tax disallowance, and Form MSME-1 disclosure all apply. Possible MSEFC reference under Section 18 by aggrieved suppliers. <strong>Engage a CA review urgently.</strong>' };
    }

    function buildCCCBars(r) {
        const maxAbs = Math.max(Math.abs(r.dio), Math.abs(r.dso), Math.abs(r.dpo), Math.abs(r.ccc), 1);
        function barWidth(val) {
            return (Math.abs(val) / maxAbs) * 100;
        }
        return [
            '<div class="ccc-bar-row"><div class="ccc-bar-label">DIO (+)</div><div class="ccc-bar-track"><div class="ccc-bar-fill dio" style="width: ' + barWidth(r.dio) + '%;"></div></div><div class="ccc-bar-value">' + fmtDays(r.dio) + '</div></div>',
            '<div class="ccc-bar-row"><div class="ccc-bar-label">DSO (+)</div><div class="ccc-bar-track"><div class="ccc-bar-fill dso" style="width: ' + barWidth(r.dso) + '%;"></div></div><div class="ccc-bar-value">' + fmtDays(r.dso) + '</div></div>',
            '<div class="ccc-bar-row"><div class="ccc-bar-label">DPO (−)</div><div class="ccc-bar-track"><div class="ccc-bar-fill dpo" style="width: ' + barWidth(r.dpo) + '%;"></div></div><div class="ccc-bar-value">' + fmtDays(r.dpo) + '</div></div>',
            '<div class="ccc-bar-row" style="border-top:1px solid var(--border);padding-top:10px;margin-top:4px;"><div class="ccc-bar-label">CCC</div><div class="ccc-bar-track"><div class="ccc-bar-fill ccc" style="width: ' + barWidth(r.ccc) + '%;"></div></div><div class="ccc-bar-value">' + fmtDays(r.ccc) + '</div></div>'
        ].join('');
    }

    function buildSummaryGrid(r, inp) {
        return [
            { label: 'Operating Cycle', value: fmtDays(r.operatingCycle) },
            { label: 'Avg Inventory', value: fmtINR(r.avgInv) },
            { label: 'Avg Trade Receivables', value: fmtINR(r.avgAR) },
            { label: 'Avg Trade Payables', value: fmtINR(r.avgAP) },
            { label: 'Working Capital Tied Up', value: fmtINR(r.wcTiedUp), highlight: true },
            { label: 'Period Used', value: inp.period + ' days' }
        ].map(c => '<div class="summary-card' + (c.highlight ? ' highlight' : '') + '"><div class="summary-label">' + c.label + '</div><div class="summary-value">' + c.value + '</div></div>').join('');
    }

    function buildBasisText(inp, r) {
        return 'Computed using the <strong>simple-average balance method</strong> aligned with the ICAI Guidance Note on Schedule III. <strong>DIO</strong> = Avg Inventory ' + fmtINR(r.avgInv) + ' ÷ COGS ' + fmtINR(inp.cogs) + ' × ' + inp.period + ' = <strong>' + fmtDays(r.dio) + '</strong>. <strong>DSO</strong> = Avg Trade Receivables ' + fmtINR(r.avgAR) + ' ÷ Revenue ' + fmtINR(inp.rev) + ' × ' + inp.period + ' = <strong>' + fmtDays(r.dso) + '</strong>. <strong>DPO</strong> = Avg Trade Payables ' + fmtINR(r.avgAP) + ' ÷ COGS ' + fmtINR(inp.cogs) + ' × ' + inp.period + ' = <strong>' + fmtDays(r.dpo) + '</strong>. <strong>CCC = DIO + DSO − DPO = ' + fmtDays(r.ccc) + '</strong>. Working capital tied up at current sales run-rate is approximately <strong>' + fmtINR(r.wcTiedUp) + '</strong>.';
    }

    function buildDisclosureRows(r, inp) {
        return [
            '<tr><td>Inventory Turnover Ratio</td><td>COGS</td><td>Avg Inventory</td><td class="num">' + fmtRatio(r.invTurnover) + ' times</td><td class="num">— </td></tr>',
            '<tr><td>Trade Receivables Turnover Ratio</td><td>Revenue</td><td>Avg Trade Receivables</td><td class="num">' + fmtRatio(r.arTurnover) + ' times</td><td class="num">—</td></tr>',
            '<tr><td>Trade Payables Turnover Ratio</td><td>COGS / Purchases</td><td>Avg Trade Payables</td><td class="num">' + fmtRatio(r.apTurnover) + ' times</td><td class="num">—</td></tr>'
        ].join('');
    }

    function calculate() {
        const inp = readInputs();
        const err = validate(inp);
        const result = document.getElementById('resultSection');
        if (err) {
            alert(err);
            result.classList.remove('visible');
            return;
        }
        const r = compute(inp);

        // Verdict
        const v = getVerdict(r.ccc, r.dpo);
        const vc = document.getElementById('verdictCard');
        vc.className = 'verdict-card' + (v.cls && v.cls !== 'verdict' ? ' ' + v.cls : '');
        document.getElementById('verdictHeadline').textContent = 'CCC = ' + fmtDays(r.ccc) + ' — ' + v.headline;
        document.getElementById('verdictSub').textContent = v.sub;
        document.getElementById('dioVal').textContent = fmtDays(r.dio);
        document.getElementById('dsoVal').textContent = fmtDays(r.dso);
        document.getElementById('dpoVal').textContent = fmtDays(r.dpo);

        // Bars
        document.getElementById('cccBarsContainer').innerHTML = buildCCCBars(r);

        // Summary
        document.getElementById('summaryGrid').innerHTML = buildSummaryGrid(r, inp);

        // Benchmark
        const bb = getBenchmarkBanner(r.ccc, inp.industry);
        const bbEl = document.getElementById('benchmarkBanner');
        if (bb) {
            bbEl.className = 'info-banner ' + bb.cls;
            bbEl.innerHTML = bb.html;
            bbEl.style.display = 'block';
        } else {
            bbEl.style.display = 'none';
        }

        // MSMED Act check (always show)
        const ms = getMSMEDBanner(r.dpo);
        const msEl = document.getElementById('msmedBanner');
        msEl.className = 'info-banner ' + ms.cls;
        msEl.innerHTML = ms.html;
        msEl.style.display = 'block';

        // YoY variance
        const vbEl = document.getElementById('varianceBanner');
        if (r.yoyVar !== null) {
            const cls = r.exceeds25 ? 'warn' : 'info';
            const msg = r.exceeds25
                ? '<strong>⚠ 25% threshold likely breached.</strong> CCC moved from ' + fmtDays(inp.prevCCC) + ' to ' + fmtDays(r.ccc) + ' (' + fmtPct(r.yoyVar) + '). At least one of the three Schedule III component ratios (Inventory / TR / TP Turnover) is likely to require an explanation in the notes to accounts.'
                : '<strong>Within 25% threshold.</strong> CCC moved from ' + fmtDays(inp.prevCCC) + ' to ' + fmtDays(r.ccc) + ' (' + fmtPct(r.yoyVar) + '). No mandatory explanation required, but check the three component ratios independently.';
            vbEl.className = 'info-banner ' + cls;
            vbEl.innerHTML = msg;
            vbEl.style.display = 'block';
        } else {
            vbEl.style.display = 'none';
        }

        // Basis
        document.getElementById('basisText').innerHTML = buildBasisText(inp, r);

        // Disclosure
        document.getElementById('disclosureRows').innerHTML = buildDisclosureRows(r, inp);

        result.classList.add('visible');
        setTimeout(function() { result.scrollIntoView({behavior: 'smooth', block: 'start'}); }, 80);
    }

    function reset() {
        ['invOpening', 'invClosing', 'arOpening', 'arClosing', 'apOpening', 'apClosing', 'revenue', 'cogs', 'prevCCC'].forEach(id => {
            document.getElementById(id).value = '';
        });
        document.querySelectorAll('#periodGroup .toggle-btn').forEach(b => {
            const isFirst = b.dataset.value === '365';
            b.classList.toggle('active', isFirst);
            b.setAttribute('aria-selected', isFirst ? 'true' : 'false');
        });
        document.querySelectorAll('#industryGroup .toggle-btn').forEach(b => {
            const isFirst = b.dataset.value === 'manufacturing';
            b.classList.toggle('active', isFirst);
            b.setAttribute('aria-selected', isFirst ? 'true' : 'false');
        });
        document.getElementById('resultSection').classList.remove('visible');
    }

    document.getElementById('btnCalculate').addEventListener('click', calculate);
    document.getElementById('btnReset').addEventListener('click', reset);

    document.querySelectorAll('input[type="number"], input[type="text"]').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                calculate();
            }
        });
    });

    document.querySelectorAll('.faq-question').forEach(function(q) {
        q.addEventListener('click', function() {
            const item = q.parentElement;
            const isOpen = item.classList.contains('open');
            item.classList.toggle('open');
            q.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
        });
    });

    const sections = document.querySelectorAll('section[id], header[id]');
    const tocLinks = document.querySelectorAll('.toc-nav a');
    function updateActive() {
        const scrollPos = window.scrollY + 80;
        let active = '';
        sections.forEach(function(s) {
            if (s.offsetTop <= scrollPos) active = s.id;
        });
        tocLinks.forEach(function(l) {
            l.classList.toggle('active', l.getAttribute('href') === '#' + active);
        });
    }
    window.addEventListener('scroll', updateActive, {passive: true});
    updateActive();
})();
</script>


<style>
/* ============================================
       STICKY WHATSAPP BAR
       ============================================ */
    .wa-sticky-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #0F6E56;
        z-index: 9999;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        box-shadow: 0 -4px 20px rgba(0,0,0,0.15);
        transition: transform 0.35s ease;
    }
    .wa-sticky-bar.hidden { transform: translateY(100%); }
    .wa-sticky-bar-content {
        display: flex;
        align-items: center;
        gap: 12px;
        max-width: 1320px;
        width: 100%;
        justify-content: center;
    }
    .wa-sticky-bar-icon {
        width: 36px; height: 36px; flex-shrink: 0;
        display: flex; align-items: center; justify-content: center;
        background: rgba(255,255,255,0.2); border-radius: 50%;
    }
    .wa-sticky-bar-icon svg { width: 20px; height: 20px; color: #fff; fill: #fff; }
    .wa-sticky-bar-text {
        font-family: 'Barlow', sans-serif;
        font-size: 15px; color: #fff; font-weight: 500;
    }
    .wa-sticky-bar-text strong { font-weight: 700; }
    .wa-sticky-bar-btn {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 8px 22px; background: #fff; color: #0F6E56;
        font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
        border: none; border-radius: 50px; cursor: pointer;
        text-decoration: none; transition: all 0.2s ease; flex-shrink: 0;
    }
    .wa-sticky-bar-btn:hover { background: #E1F5EE; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
    .wa-sticky-bar-close {
        background: none; border: none; cursor: pointer;
        color: rgba(255,255,255,0.7); font-size: 22px; line-height: 1;
        padding: 4px 8px; transition: color 0.2s; flex-shrink: 0;
        font-family: 'Barlow', sans-serif; font-weight: 300;
    }
    .wa-sticky-bar-close:hover { color: #fff; }
    @media (max-width: 768px) {
        .wa-sticky-bar { padding: 8px 12px; gap: 8px; }
        .wa-sticky-bar-text { font-size: 13px; }
        .wa-sticky-bar-btn { padding: 7px 16px; font-size: 13px; }
        .wa-sticky-bar-icon { width: 30px; height: 30px; }
        .wa-sticky-bar-icon svg { width: 16px; height: 16px; }
    }
    @media (max-width: 480px) {
        .wa-sticky-bar-text { display: none; }
        .wa-sticky-bar-btn { font-size: 14px; padding: 10px 24px; }
        .wa-sticky-bar-btn::before { content: 'CA-Assisted ITR Filing Open'; }
        .wa-sticky-bar-btn span { display: none; }
    }
</style>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026&ndash;27 ITR filing is live</strong> — get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

<!-- WhatsApp Sticky Bar Script -->
<script>
(function() {
    var waBar = document.getElementById('waBar');
    var waClose = document.getElementById('waBarClose');
    var dismissed = false;

    // Initially hidden, show after scrolling 300px
    waBar.classList.add('hidden');

    window.addEventListener('scroll', function() {
        if (dismissed) return;
        if (window.scrollY > 300) {
            waBar.classList.remove('hidden');
        } else {
            waBar.classList.add('hidden');
        }
    });

    // Close button
    waClose.addEventListener('click', function() {
        dismissed = true;
        waBar.classList.add('hidden');
        // Remember dismissal for this session
        try { sessionStorage.setItem('wa_bar_dismissed', '1'); } catch(e) {}
    });

    // Check if already dismissed this session
    try {
        if (sessionStorage.getItem('wa_bar_dismissed') === '1') {
            dismissed = true;
            waBar.classList.add('hidden');
            waBar.style.display = 'none';
        }
    } catch(e) {}
})();
</script>
@endsection
