@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Lease Accounting Calculator | Ind AS 116 ROU &amp; Liability</title>
    <meta name="description" content="Ind AS 116 lease accounting calculator: compute ROU asset, lease liability, year-wise amortization &amp; journal entries with a full schedule. Free CA tool now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/lease-accounting-calculator-ind-as-116/">
    <meta property="og:title" content="Lease Accounting Calculator (Ind AS 116 ROU) — FY 2025-26">
    <meta property="og:description" content="Calculate ROU asset &amp; lease liability under Ind AS 116. Year-wise schedule, journal entries, vs old AS 17 comparison. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/lease-accounting-calculator-ind-as-116">
    <meta property="og:image" content="/tools/og/lease-accounting-calculator-ind-as-116.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Lease Accounting Calculator (Ind AS 116 ROU) — FY 2025-26">
    <meta name="twitter:description" content="ROU asset + lease liability + year-wise schedule + journal entries. Free CA-reviewed tool.">
    <meta name="twitter:image" content="/tools/og/lease-accounting-calculator-ind-as-116.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Lease Accounting Calculator (Ind AS 116 ROU)",
      "description": "Lease Accounting Calculator (Ind AS 116) computes Right-of-Use (ROU) asset and lease liability for Indian companies under Ind AS 116 Leases (effective 1 April 2019). The tool supports lease terms up to 30 years, monthly/quarterly/half-yearly/annual payment frequencies, advance and arrears timing, annual escalation, initial direct costs, lease incentives, restoration costs and advance payments. Output includes initial recognition values, year-wise amortization schedule with interest expense, principal repayment, ROU depreciation and closing balances, total finance cost and depreciation, journal entries at commencement and during the year, and comparison with old AS 17 / Ind AS 17 operating lease straight-line treatment showing the front-loaded expense pattern impact on EBITDA, profit before tax and key financial ratios.",
      "url": "/tools/lease-accounting-calculator-ind-as-116",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-07T08:00:00+05:30",
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
        {"@type": "ListItem", "position": 3, "name": "Lease Accounting Calculator (Ind AS 116)", "item": "/tools/lease-accounting-calculator-ind-as-116"}
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
          "name": "What is Ind AS 116 and from when is it effective?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ind AS 116 Leases is the Indian Accounting Standard converged with IFRS 16, notified by MCA effective for annual reporting periods commencing on or after 1 April 2019. It supersedes Ind AS 17 and introduces a single lessee accounting model that requires recognition of a Right-of-Use asset and lease liability for virtually all leases on the balance sheet, eliminating the previous distinction between operating leases and finance leases for lessees."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Ind AS 116 and Ind AS 17?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Ind AS 17, lessees classified leases as operating or finance — operating leases stayed off-balance sheet with rent expensed straight-line, finance leases were capitalised. Ind AS 116 abolishes this distinction for lessees: all leases over 12 months and not low-value must be recognised on balance sheet as ROU asset and lease liability. P&L impact shifts from straight-line rent to depreciation plus front-loaded interest, increasing reported assets, debt and EBITDA."
          }
        },
        {
          "@type": "Question",
          "name": "How is the Right-of-Use (ROU) asset calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Ind AS 116 Para 24, the ROU asset at commencement equals the initial lease liability plus any lease payments made at or before commencement date (advance payments), plus initial direct costs incurred by the lessee, plus the present value of estimated dismantling, removal and restoration costs, less any lease incentives received from the lessor. The ROU asset is then depreciated systematically over the lease term or useful life, whichever is shorter."
          }
        },
        {
          "@type": "Question",
          "name": "How is the lease liability calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Ind AS 116 Para 26, the lease liability at commencement is measured at the present value of the lease payments not yet paid at that date, discounted using the interest rate implicit in the lease if readily determinable, otherwise the lessee's incremental borrowing rate (IBR). Lease payments include fixed payments, in-substance fixed payments, variable payments based on an index or rate, residual value guarantees, and reasonably certain purchase or termination penalties."
          }
        },
        {
          "@type": "Question",
          "name": "What discount rate should be used — IBR or implicit rate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ind AS 116 requires the interest rate implicit in the lease to be used if readily determinable. In most operating-type leases the implicit rate is not readily determinable, so the lessee's Incremental Borrowing Rate (IBR) is used. The IBR is the rate the lessee would have to pay to borrow, over a similar term and with similar security, the funds necessary to obtain an asset of similar value to the right-of-use asset in a similar economic environment."
          }
        },
        {
          "@type": "Question",
          "name": "Are short-term leases exempt from Ind AS 116?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Ind AS 116 Para 5, a lessee may elect not to apply the recognition requirements to short-term leases — defined as leases with a lease term of 12 months or less and no purchase option. Lease payments for such short-term leases are expensed on a straight-line basis or another systematic basis in the profit and loss account. The election is made by class of underlying asset and disclosed."
          }
        },
        {
          "@type": "Question",
          "name": "What are low-value asset leases?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ind AS 116 permits an exemption for leases of low-value underlying assets. The IASB intent in IFRS 16 indicates a threshold of approximately USD 5,000 (around ₹4 lakh) when new — covering items such as laptops, mobile phones, small office equipment and tablets. The assessment is made on absolute terms regardless of the lessee's size. The election can be made on a lease-by-lease basis, unlike short-term leases which are by class."
          }
        },
        {
          "@type": "Question",
          "name": "How is the lease term determined for renewal options?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The lease term under Ind AS 116 Para 18 is the non-cancellable period plus periods covered by extension options reasonably certain to be exercised by the lessee, less periods covered by termination options reasonably certain to be exercised. Reasonable certainty is assessed considering economic incentives — significant leasehold improvements, business importance of the asset, costs of relocation, and the consistency of past renewal behaviour. The assessment is reassessed when significant events or circumstances change."
          }
        },
        {
          "@type": "Question",
          "name": "How are variable lease payments treated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Variable lease payments that depend on an index or rate (such as CPI-linked rent or interest-rate linked rent) are included in the lease liability measured using the index or rate at commencement, and remeasured when actual changes take effect. Variable payments based on usage, sales or performance (such as kilometres driven or turnover percentage) are excluded from the lease liability and expensed in profit or loss in the period they are incurred."
          }
        },
        {
          "@type": "Question",
          "name": "How does lessor accounting differ under Ind AS 116?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Lessor accounting under Ind AS 116 largely retains the Ind AS 17 model with operating versus finance lease classification based on whether substantially all risks and rewards incidental to ownership transfer to the lessee. Finance leases are recognised as a net investment in the lease (receivable); operating leases continue with the asset on lessor's books and lease income recognised on a straight-line basis. Enhanced disclosures and sale-leaseback rules are the main lessor changes."
          }
        },
        {
          "@type": "Question",
          "name": "What is the tax impact of Ind AS 116 versus the Income Tax Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Income Tax Act, 1961 does not recognise ROU asset and lease liability — it allows deduction of lease rentals paid as revenue expense in the year of payment (consistent with old Ind AS 17 treatment). This creates a timing difference between book treatment under Ind AS 116 (depreciation plus front-loaded interest) and tax treatment (straight-line rentals), giving rise to deferred tax assets or liabilities under Ind AS 12 in early and later years."
          }
        },
        {
          "@type": "Question",
          "name": "What disclosures are required under Ind AS 116?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ind AS 116 Para 51-60 prescribes extensive disclosures including ROU carrying amount by class of underlying asset, additions during the year, depreciation charge, interest expense on lease liability, expense for short-term and low-value leases, expense for variable lease payments, total cash outflow for leases, lease commitments maturity analysis, gains or losses on sale-leaseback transactions, and key judgements on lease term, discount rate and embedded leases. Tabular presentation is preferred."
          }
        },
        {
          "@type": "Question",
          "name": "How are foreign currency leases treated under Ind AS 116?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Ind AS 116 read with Ind AS 21 The Effects of Changes in Foreign Exchange Rates, the ROU asset is a non-monetary item carried at historical cost (commencement date exchange rate), while the lease liability is a monetary item retranslated at the closing exchange rate at each reporting date. The resulting foreign exchange differences on the lease liability are recognised in profit and loss, similar to other monetary liabilities, creating P&L volatility for foreign currency leases."
          }
        }
      ]
    }
    </script>
@endsection

<style>
        :root {
            --primary: #1B4D3E;
            --primary-light: #2A7A5F;
            --primary-dark: #0F2E25;
            --accent: #F59E0B;
            --accent-light: #FCD34D;
            --surface: #FAFAF8;
            --surface-alt: #F0EFEB;
            --card: #FFFFFF;
            --text: #1A1A1A;
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
        .toc-nav-inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; }
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
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .toggle-group.stacked-mobile { flex-direction: column; }
        @media (min-width: 600px) { .toggle-group.stacked-mobile { flex-direction: row; } }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict-card { border-radius: var(--radius); padding: 24px; margin-bottom: 20px; border-left: 6px solid var(--primary); background: linear-gradient(135deg, #ECFDF5 0%, #D1FAE5 100%); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .verdict-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-top: 14px; }
        @media (max-width: 500px) { .verdict-grid { grid-template-columns: 1fr; } }
        .verdict-grid-item { background: rgba(255,255,255,0.65); border-radius: 8px; padding: 14px 16px; }
        .verdict-grid-label { font-size: 11px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .verdict-grid-value { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }
        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }
        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #D1FAE5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }

        .schedule-table { width: 100%; border-collapse: collapse; margin: 8px 0; font-size: 12px; }
        .schedule-table thead th { background: var(--primary); color: #fff; padding: 10px 8px; text-align: right; font-weight: 600; font-size: 10px; text-transform: uppercase; letter-spacing: 0.5px; }
        .schedule-table thead th:first-child { text-align: left; border-radius: 6px 0 0 0; }
        .schedule-table thead th:last-child { border-radius: 0 6px 0 0; }
        .schedule-table tbody td { padding: 8px; border-bottom: 1px solid var(--border); color: var(--text-secondary); font-size: 12px; text-align: right; font-family: var(--font-mono); }
        .schedule-table tbody td:first-child { text-align: left; font-family: var(--font-body); font-weight: 600; color: var(--primary-dark); }
        .schedule-table tbody tr:nth-child(even) { background: var(--surface); }
        .schedule-table tfoot td { padding: 10px 8px; background: var(--surface-alt); font-weight: 700; color: var(--primary-dark); border-top: 2px solid var(--primary); font-size: 12px; text-align: right; font-family: var(--font-mono); }
        .schedule-table tfoot td:first-child { text-align: left; font-family: var(--font-body); }
        @media (max-width: 600px) {
            .schedule-table { font-size: 10px; }
            .schedule-table thead th, .schedule-table tbody td, .schedule-table tfoot td { padding: 6px 4px; }
            .schedule-table thead th:nth-child(4), .schedule-table tbody td:nth-child(4) { display: none; }
        }

        .journal-entry { background: var(--primary-dark); color: #E0F2F1; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 13px; line-height: 1.9; margin: 14px 0; overflow-x: auto; }
        .journal-entry .je-label { color: var(--accent-light); font-weight: 700; display: block; margin-bottom: 6px; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .journal-entry .je-row { display: grid; grid-template-columns: 1fr 90px 90px; gap: 8px; }
        .journal-entry .je-amt { text-align: right; }
        @media (max-width: 600px) {
            .journal-entry { font-size: 11px; padding: 14px 16px; }
            .journal-entry .je-row { grid-template-columns: 1fr 70px 70px; }
        }

        .compare-grid { display: grid; grid-template-columns: 1fr; gap: 14px; margin: 14px 0; }
        @media (min-width: 600px) { .compare-grid { grid-template-columns: 1fr 1fr; } }
        .compare-card { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 16px 18px; }
        .compare-card.indas { border-left: 4px solid var(--primary); }
        .compare-card.oldas { border-left: 4px solid var(--text-muted); }
        .compare-card h4 { font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px; font-family: var(--font-mono); }
        .compare-card .ttl-label { font-size: 11px; color: var(--text-muted); margin: 6px 0 2px; }
        .compare-card .ttl-value { font-family: var(--font-mono); font-size: 18px; font-weight: 700; color: var(--primary-dark); }

        .content-section { background: var(--card); border-radius: var(--radius-lg); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 26px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 16px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); padding: 4px 0; line-height: 1.7; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-decoration-color: rgba(42,122,95,0.3); text-underline-offset: 2px; }
        .content-section a:hover { text-decoration-color: var(--primary-light); }
        .content-section strong { color: var(--text); font-weight: 600; }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 14px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody td strong { color: var(--primary-dark); }
        .formula-box { background: var(--primary-dark); color: #E0F2F1; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 14px; line-height: 1.8; margin: 14px 0; overflow-x: auto; }
        .formula-box .label { color: var(--accent-light); font-weight: 700; }
        .callout { background: #EFF6FF; border-left: 4px solid var(--info); border-radius: 0 var(--radius) var(--radius) 0; padding: 16px 20px; margin: 16px 0; }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }
        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }
        .callout.danger { background: #FEF2F2; border-left-color: var(--danger); }
        .callout.danger p { color: #991B1B; }
        .callout.danger strong { color: #7F1D1D; }
        .faq-item { background: var(--surface); border-radius: var(--radius); margin-bottom: 10px; border: 1px solid var(--border); overflow: hidden; transition: box-shadow 0.2s; }
        .faq-item:hover { box-shadow: var(--shadow-sm); }
        .faq-question { display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 16px 20px; border: none; background: none; font-family: var(--font-body); font-size: 15px; font-weight: 600; color: var(--text); cursor: pointer; text-align: left; line-height: 1.4; gap: 12px; -webkit-tap-highlight-color: transparent; }
        .faq-question * { pointer-events: none; }
        .faq-icon { flex-shrink: 0; width: 24px; height: 24px; border-radius: 50%; background: var(--primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 16px; transition: transform 0.3s; }
        .faq-item.open .faq-icon { transform: rotate(45deg); }
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; }
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
        .body-cta { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 32px; margin: 28px 0; text-align: center; }
        .body-cta h3 { color: #fff; font-size: 22px; margin-bottom: 10px; }
        .body-cta p { font-size: 15px; color: rgba(255,255,255,0.9); margin-bottom: 20px; line-height: 1.65; }
        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; margin-bottom: 20px; }
        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
            .body-cta { padding: 24px 20px; }
            .body-cta h3 { font-size: 18px; }
            .rate-table { font-size: 12px; }
            .rate-table tbody td, .rate-table thead th { padding: 8px 10px; }
            .verdict-headline { font-size: 18px; }
            .verdict-grid-value { font-size: 18px; }
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
</style>

@section('content')
<style>
/* Embed mode (?embed=1): show ONLY the calculator widget, recoloured to the
   service page's palette, when iframed into a cluster page. */
body.is-embed .toc-nav,
body.is-embed .breadcrumb,
body.is-embed .hero,
body.is-embed .tldr,
body.is-embed .content-section,
body.is-embed .sidebar-col,
body.is-embed .wa-sticky-bar,
body.is-embed .body-cta,
body.is-embed .cta-card { display: none !important; }
body.is-embed { background: transparent !important; }
body.is-embed main { padding: 0 !important; }
body.is-embed .main-layout { grid-template-columns: 1fr !important; max-width: 820px !important; margin: 0 auto !important; padding: 0 !important; gap: 0 !important; }
body.is-embed .calc-card { margin: 0 !important; box-shadow: none !important; }
/* match the cluster service-page palette (blue + orange), not the tool's own green/amber */
body.is-embed {
    --primary: #1B365D;
    --primary-light: #2A4A7A;
    --primary-dark: #12294A;
    --accent: #E8712C;
    --accent-light: #F4A15E;
}
</style>
<nav class="toc-nav" aria-label="Tool navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#exemptions">Exemptions</a>
        <a href="#discount-rate">Discount Rate</a>
        <a href="#impact">P&amp;L Impact</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    Lease Accounting Calculator (Ind AS 116)
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 7 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Lease Accounting Calculator <span>(Ind AS 116 ROU)</span></h1>
</header>

<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Ind AS 116 Leases (effective 1 April 2019) requires lessees to recognise a Right-of-Use asset and lease liability for virtually all leases over 12 months on the balance sheet, eliminating the old operating-finance lease distinction. This calculator computes initial ROU asset and lease liability using the present value method with your incremental borrowing rate, generates a year-wise amortization schedule with interest and depreciation, and shows journal entries — plus a side-by-side comparison with old AS 17 / Ind AS 17 operating lease treatment.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Compute ROU Asset &amp; Lease Liability</h2>
            <p class="calc-intro">Enter your lease terms below. The calculator builds the present value of lease payments at your discount rate (IBR), constructs the amortization schedule period-by-period, and aggregates to year-wise output with journal entries.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to run this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Lease Terms</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="leaseTermYears">Lease Term (Years)</label>
                    <input type="number" id="leaseTermYears" min="1" max="30" step="1" placeholder="5" inputmode="numeric">
                    <span class="helper">Whole years from 1 to 30. For periods less than 12 months, see exemption below.</span>
                </div>
                <div class="form-group">
                    <label for="discountRate">Discount Rate (Annual %)</label>
                    <input type="number" id="discountRate" min="0" max="50" step="0.01" placeholder="9" inputmode="decimal">
                    <span class="helper">Lessee's Incremental Borrowing Rate (IBR) — e.g., 8-12% for Indian corporates.</span>
                </div>
            </div>

            <div class="form-group" style="margin-bottom:16px;">
                <label>Payment Frequency</label>
                <div class="toggle-group" id="frequencyGroup" role="tablist" aria-label="Payment frequency">
                    <button type="button" class="toggle-btn" data-value="12" data-label="Monthly" role="tab" aria-selected="false">Monthly</button>
                    <button type="button" class="toggle-btn" data-value="4" data-label="Quarterly" role="tab" aria-selected="false">Quarterly</button>
                    <button type="button" class="toggle-btn" data-value="2" data-label="Half-Yearly" role="tab" aria-selected="false">Half-Yearly</button>
                    <button type="button" class="toggle-btn active" data-value="1" data-label="Annual" role="tab" aria-selected="true">Annual</button>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="paymentAmount">Lease Payment per Period (₹)</label>
                    <input type="number" id="paymentAmount" min="0" step="any" placeholder="100000" inputmode="decimal">
                    <span class="helper">Fixed payment amount in ₹ for the chosen frequency.</span>
                </div>
                <div class="form-group">
                    <label>Payment Timing</label>
                    <div class="toggle-group stacked-mobile" id="timingGroup" role="tablist">
                        <button type="button" class="toggle-btn active" data-value="arrears" role="tab" aria-selected="true">In Arrears (End)</button>
                        <button type="button" class="toggle-btn" data-value="advance" role="tab" aria-selected="false">In Advance (Start)</button>
                    </div>
                    <span class="helper">Most operating leases are in arrears (rent at end of month).</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="escalation">Annual Escalation (%) <span style="color:var(--text-muted);font-weight:400;">— Optional</span></label>
                    <input type="number" id="escalation" min="0" max="50" step="0.01" placeholder="0" inputmode="decimal">
                    <span class="helper">Compound % increase applied each year (e.g., 5% step-up). Leave 0 if fixed.</span>
                </div>
                <div class="form-group">
                    <label for="advancePayment">Advance Payment / Prepayment (₹) <span style="color:var(--text-muted);font-weight:400;">— Optional</span></label>
                    <input type="number" id="advancePayment" min="0" step="any" placeholder="0" inputmode="decimal">
                    <span class="helper">Non-refundable lease payments before commencement (capitalised in ROU).</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="initialDirectCost">Initial Direct Costs (₹) <span style="color:var(--text-muted);font-weight:400;">— Optional</span></label>
                    <input type="number" id="initialDirectCost" min="0" step="any" placeholder="0" inputmode="decimal">
                    <span class="helper">Brokerage, legal fees, registration directly attributable to the lease.</span>
                </div>
                <div class="form-group">
                    <label for="leaseIncentive">Lease Incentives Received (₹) <span style="color:var(--text-muted);font-weight:400;">— Optional</span></label>
                    <input type="number" id="leaseIncentive" min="0" step="any" placeholder="0" inputmode="decimal">
                    <span class="helper">Cash or rent-free period value received from lessor (reduces ROU).</span>
                </div>
            </div>

            <div class="form-group" style="margin-bottom:8px;">
                <label for="restorationCost">Restoration / Dismantling Cost — PV (₹) <span style="color:var(--text-muted);font-weight:400;">— Optional</span></label>
                <input type="number" id="restorationCost" min="0" step="any" placeholder="0" inputmode="decimal">
                <span class="helper">Present value of estimated end-of-lease restoration obligation under Ind AS 37.</span>
            </div>

            <button type="button" class="btn-calculate" id="btnCalculate">Calculate ROU &amp; Schedule</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>
                <div class="verdict-card">
                    <div class="verdict-label">Initial Recognition (Day 1)</div>
                    <div class="verdict-headline">Right-of-Use Asset &amp; Lease Liability</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Lease Liability</div>
                            <div class="verdict-grid-value" id="initLiability">₹0</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">ROU Asset</div>
                            <div class="verdict-grid-value" id="initRou">₹0</div>
                        </div>
                    </div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner info" id="advisoryBanner"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis</div>
                    <div class="basis-text" id="basisText"></div>
                </div>

                <h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;">Year-wise Amortization Schedule</h3>
                <p style="font-size:13px;color:var(--text-secondary);margin-bottom:8px;">Aggregated annual view. Period-level computation uses your selected frequency internally.</p>
                <div style="overflow-x:auto;">
                    <table class="schedule-table" id="scheduleTable">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Op. Liability</th>
                                <th>Lease Payment</th>
                                <th>Interest</th>
                                <th>Cl. Liability</th>
                                <th>ROU Dep.</th>
                                <th>Cl. ROU</th>
                            </tr>
                        </thead>
                        <tbody id="scheduleBody"></tbody>
                        <tfoot id="scheduleFoot"></tfoot>
                    </table>
                </div>

                <h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;">Ind AS 116 vs Old AS 17 (Operating Lease)</h3>
                <p style="font-size:13px;color:var(--text-secondary);margin-bottom:8px;">Total cash outflow is identical. The expense pattern differs significantly — Ind AS 116 is front-loaded due to constant interest on a reducing liability.</p>
                <div class="compare-grid" id="compareGrid"></div>

                <h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;">Journal Entry — At Commencement</h3>
                <div class="journal-entry" id="journalEntryInit"></div>

                <h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;">Journal Entry — Year 1 End</h3>
                <div class="journal-entry" id="journalEntryY1"></div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How This Calculator Works</h2>
            <p>The calculator follows the textbook Ind AS 116 lessee accounting model, computing the lease liability as the present value of future lease payments and the ROU asset as the lease liability adjusted for advance payments, initial direct costs, lease incentives and restoration costs.</p>

            <h3>Step 1 — Build the Lease Payment Stream</h3>
            <p>The tool constructs each future period's nominal payment based on your chosen frequency (monthly, quarterly, half-yearly or annual) and applies any annual compound escalation. Period payments arrive either in arrears (end of period — typical for rent) or in advance (start of period). Total periods equal lease term × frequency factor.</p>

            <h3>Step 2 — Discount to Present Value</h3>
            <p>The annual discount rate is converted to a periodic rate using the formula r_period = r_annual / frequency. Each future payment is discounted to the commencement date using the appropriate factor. The sum of all discounted payments gives the initial lease liability under Para 26 of Ind AS 116.</p>

            <div class="formula-box">
<span class="label">Lease Liability</span> = Σ Payment_t / (1 + r_period)^t  [arrears]
<span class="label">Lease Liability</span> = Σ Payment_t / (1 + r_period)^(t-1)  [advance]
<span class="label">ROU Asset</span> = Lease Liability + Advance Payments + IDC + PV Restoration − Lease Incentives
            </div>

            <h3>Step 3 — Period-Wise Amortization</h3>
            <p>Each period: Interest = Opening Lease Liability × period rate. Principal Paid = Lease Payment − Interest. Closing Liability = Opening − Principal. ROU is depreciated straight-line over the lease term: Annual Depreciation = ROU at Commencement / Lease Term in years. Accumulated period output is aggregated year-wise for the schedule display.</p>

            <h3>Step 4 — Comparison with Operating Lease Treatment</h3>
            <p>Old Ind AS 17 / AS 19 operating lease treatment is straight-line: total lease payments / lease term = constant annual rent expense. Ind AS 116 produces higher expense in early years (interest is high when liability is high) and lower in later years, while total expense over the lease life equals total cash outflow. EBITDA increases under Ind AS 116 because interest sits below EBITDA, but profit before tax is unchanged in aggregate.</p>
        </section>

        <section class="content-section" id="exemptions">
            <h2>Recognition Exemptions</h2>
            <p>Ind AS 116 Para 5 permits a lessee to elect not to recognise ROU and lease liability for two categories of leases. Election is made by class of underlying asset for short-term, lease-by-lease for low-value.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Exemption</th><th>Threshold</th><th>Treatment</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Short-Term Leases</strong></td><td>Lease term ≤ 12 months AND no purchase option</td><td>Expense lease payments straight-line in P&amp;L</td></tr>
                    <tr><td><strong>Low-Value Asset Leases</strong></td><td>Underlying asset value ≤ approximately ₹4 lakh when new (≈ USD 5,000 per IASB intent)</td><td>Expense lease payments straight-line in P&amp;L</td></tr>
                </tbody>
            </table>

            <h3>What Counts as Low-Value?</h3>
            <p>The IASB designed the low-value exemption for items like laptops, mobile phones, tablets, small office equipment and printers. The assessment is on the absolute value when new, regardless of materiality to the lessee. A lease of office cars at ₹15 lakh each does NOT qualify even if the lessee operates a fleet worth crores.</p>

            <h3>Sub-leases Don't Qualify</h3>
            <p>If a head lease has been recognised, a sub-lease of that ROU asset cannot be claimed as a low-value lease — the test applies to the underlying asset, not to the right-of-use asset. Similarly, a lease that is part of a larger arrangement (such as a tyre embedded in a vehicle lease) is not separately assessed.</p>

            <div class="callout warn">
                <p><strong>Disclosure even on exemption:</strong> Even when exemption is elected, Ind AS 116 Para 53(c) and (e) requires disclosure of the expense recognised for short-term leases and for low-value leases (not already in short-term). Material short-term lease commitments at year-end must also be disclosed under Para 55.</p>
            </div>
        </section>

        <section class="content-section" id="discount-rate">
            <h2>Choosing the Discount Rate</h2>
            <p>Ind AS 116 Para 26 requires the lessee to use the interest rate implicit in the lease if readily determinable. In most operating-type leases (office space, equipment without purchase option, fleet vehicles) the lessor's residual value assumption and direct costs are not disclosed, so the implicit rate is not readily determinable. The lessee then uses the Incremental Borrowing Rate (IBR).</p>

            <h3>Defining the IBR</h3>
            <p>Per Ind AS 116 Appendix A, the IBR is "the rate of interest that a lessee would have to pay to borrow over a similar term, and with a similar security, the funds necessary to obtain an asset of a similar value to the right-of-use asset in a similar economic environment." Three elements drive the IBR: <strong>credit standing of the lessee</strong>, <strong>lease term and security</strong>, and <strong>economic environment</strong>.</p>

            <h3>Practical Approach to IBR Determination</h3>
            <ol>
                <li>Start with a reference rate — government securities or RBI repo rate for the matching tenor</li>
                <li>Add a credit spread reflecting the lessee's credit risk (use existing bank borrowing rates or rated debt yields)</li>
                <li>Adjust for security — leased asset typically provides recovery in default, so spread is lower than unsecured</li>
                <li>Adjust for asset-specific risk and country risk (already in INR-denominated leases)</li>
            </ol>

            <p>For Indian listed corporates with strong credit, IBRs typically fall in the <strong>8% to 12%</strong> range. Smaller private companies or those with weaker credit may have IBRs of 12% to 16% or higher.</p>

            <div class="callout">
                <p><strong>Sensitivity:</strong> The discount rate has a material impact on ROU and lease liability. A 1% change in IBR on a 10-year ₹1 lakh annual lease changes the lease liability by approximately 4-5%. Document IBR derivation with reference rate, credit spread justification, and any adjustments — this is one of the most frequently questioned areas in <a href="https://www.nfra.gov.in/" target="_blank" rel="noopener">NFRA</a> inspections of listed company audits.</p>
            </div>

            <p>Refer to the <a href="https://kb.icai.org/" target="_blank" rel="noopener">ICAI Educational Material on Ind AS 116</a> and <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA notification</a> on Indian Accounting Standards for the official text of the standard. The underlying Companies Act provisions on accounting standards are codified at <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">India Code</a>.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Ind AS 116 Implementation?</h3>
            <p>Patron Accounting LLP supports CFO offices with Ind AS 116 transition impact assessment, IBR determination, lease database setup, period close working papers and audit defence — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Lease%20Accounting%20Calculator.%20I%20need%20help%20with%20Ind%20AS%20116%20implementation%20and%20audit.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">Talk to a CA on WhatsApp</a>
        </div>

        <section class="content-section" id="impact">
            <h2>Financial Statement Impact of Ind AS 116</h2>
            <p>The transition from Ind AS 17 (operating lease) to Ind AS 116 (single lessee model) re-shapes the balance sheet, profit and loss account and cash flow statement. Understanding the directional impact helps CFOs anticipate ratio movements and explain results to stakeholders.</p>

            <h3>Balance Sheet</h3>
            <ul>
                <li><strong>Total assets increase</strong> — ROU asset newly recognised (was off-balance sheet)</li>
                <li><strong>Total liabilities increase</strong> — Lease liability newly recognised</li>
                <li><strong>Net debt increases</strong> — Lease liability is debt-like</li>
                <li><strong>Net worth roughly unchanged</strong> at commencement, but reduces over the lease life due to front-loading</li>
            </ul>

            <h3>Profit and Loss Account</h3>
            <ul>
                <li><strong>Operating expenses fall</strong> — Old rent expense (operating lease) goes away</li>
                <li><strong>Depreciation increases</strong> — ROU depreciation added (above EBITDA → no impact on EBITDA)</li>
                <li><strong>Finance cost increases</strong> — Interest on lease liability (below EBITDA)</li>
                <li><strong>EBITDA increases</strong> — Because interest moves below EBITDA line</li>
                <li><strong>Profit before tax</strong> is lower in early years (front-loaded), higher in later years; total over lease life is identical to old AS 17</li>
            </ul>

            <h3>Cash Flow Statement</h3>
            <ul>
                <li><strong>Operating cash outflow falls</strong> — Lease principal repayment moves to financing</li>
                <li><strong>Financing cash outflow rises</strong> — Principal portion of lease liability shown here</li>
                <li><strong>Total cash outflow unchanged</strong> — Just reclassification</li>
            </ul>

            <h3>Key Ratios Affected</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Ratio</th><th>Direction</th><th>Reason</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Debt-Equity</strong></td><td>↑ Up</td><td>Lease liability adds to debt</td></tr>
                    <tr><td><strong>Return on Assets (ROA)</strong></td><td>↓ Down</td><td>Asset base expands</td></tr>
                    <tr><td><strong>Asset Turnover</strong></td><td>↓ Down</td><td>Asset base expands</td></tr>
                    <tr><td><strong>EBITDA Margin</strong></td><td>↑ Up</td><td>Interest moves below EBITDA</td></tr>
                    <tr><td><strong>Interest Coverage</strong></td><td>↓ Down</td><td>Finance cost increases</td></tr>
                </tbody>
            </table>

            <p>For listed companies, alternative performance measures (APMs) like adjusted EBITDA may need to be redefined to maintain comparability with pre-Ind AS 116 numbers. Schedule III Division II disclosures and <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> Listing Regulations require comparable disclosure of APM definitions.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is Ind AS 116 and from when is it effective?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Ind AS 116 Leases is the Indian Accounting Standard converged with IFRS 16, notified by MCA effective for annual reporting periods commencing on or after 1 April 2019. It supersedes Ind AS 17 and introduces a single lessee accounting model that requires recognition of a Right-of-Use asset and lease liability for virtually all leases on the balance sheet, eliminating the previous distinction between operating leases and finance leases for lessees.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between Ind AS 116 and Ind AS 17?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Ind AS 17, lessees classified leases as operating or finance — operating leases stayed off-balance sheet with rent expensed straight-line, finance leases were capitalised. Ind AS 116 abolishes this distinction for lessees: all leases over 12 months and not low-value must be recognised on balance sheet as ROU asset and lease liability. P&amp;L impact shifts from straight-line rent to depreciation plus front-loaded interest, increasing reported assets, debt and EBITDA.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is the Right-of-Use (ROU) asset calculated?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Ind AS 116 Para 24, the ROU asset at commencement equals the initial lease liability plus any lease payments made at or before commencement date (advance payments), plus initial direct costs incurred by the lessee, plus the present value of estimated dismantling, removal and restoration costs, less any lease incentives received from the lessor. The ROU asset is then depreciated systematically over the lease term or useful life, whichever is shorter.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is the lease liability calculated?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Ind AS 116 Para 26, the lease liability at commencement is measured at the present value of the lease payments not yet paid at that date, discounted using the interest rate implicit in the lease if readily determinable, otherwise the lessee's incremental borrowing rate (IBR). Lease payments include fixed payments, in-substance fixed payments, variable payments based on an index or rate, residual value guarantees, and reasonably certain purchase or termination penalties.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What discount rate should be used — IBR or implicit rate?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Ind AS 116 requires the interest rate implicit in the lease to be used if readily determinable. In most operating-type leases the implicit rate is not readily determinable, so the lessee's Incremental Borrowing Rate (IBR) is used. The IBR is the rate the lessee would have to pay to borrow, over a similar term and with similar security, the funds necessary to obtain an asset of similar value to the right-of-use asset in a similar economic environment.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Are short-term leases exempt from Ind AS 116?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Under Ind AS 116 Para 5, a lessee may elect not to apply the recognition requirements to short-term leases — defined as leases with a lease term of 12 months or less and no purchase option. Lease payments for such short-term leases are expensed on a straight-line basis or another systematic basis in the profit and loss account. The election is made by class of underlying asset and disclosed.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are low-value asset leases?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Ind AS 116 permits an exemption for leases of low-value underlying assets. The IASB intent in IFRS 16 indicates a threshold of approximately USD 5,000 (around ₹4 lakh) when new — covering items such as laptops, mobile phones, small office equipment and tablets. The assessment is made on absolute terms regardless of the lessee's size. The election can be made on a lease-by-lease basis, unlike short-term leases which are by class.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is the lease term determined for renewal options?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The lease term under Ind AS 116 Para 18 is the non-cancellable period plus periods covered by extension options reasonably certain to be exercised by the lessee, less periods covered by termination options reasonably certain to be exercised. Reasonable certainty is assessed considering economic incentives — significant leasehold improvements, business importance of the asset, costs of relocation, and the consistency of past renewal behaviour. The assessment is reassessed when significant events or circumstances change.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How are variable lease payments treated?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Variable lease payments that depend on an index or rate (such as CPI-linked rent or interest-rate linked rent) are included in the lease liability measured using the index or rate at commencement, and remeasured when actual changes take effect. Variable payments based on usage, sales or performance (such as kilometres driven or turnover percentage) are excluded from the lease liability and expensed in profit or loss in the period they are incurred.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How does lessor accounting differ under Ind AS 116?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Lessor accounting under Ind AS 116 largely retains the Ind AS 17 model with operating versus finance lease classification based on whether substantially all risks and rewards incidental to ownership transfer to the lessee. Finance leases are recognised as a net investment in the lease (receivable); operating leases continue with the asset on lessor's books and lease income recognised on a straight-line basis. Enhanced disclosures and sale-leaseback rules are the main lessor changes.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the tax impact of Ind AS 116 versus the Income Tax Act?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Income Tax Act, 1961 does not recognise ROU asset and lease liability — it allows deduction of lease rentals paid as revenue expense in the year of payment (consistent with old Ind AS 17 treatment). This creates a timing difference between book treatment under Ind AS 116 (depreciation plus front-loaded interest) and tax treatment (straight-line rentals), giving rise to deferred tax assets or liabilities under Ind AS 12 in early and later years.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What disclosures are required under Ind AS 116?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Ind AS 116 Para 51-60 prescribes extensive disclosures including ROU carrying amount by class of underlying asset, additions during the year, depreciation charge, interest expense on lease liability, expense for short-term and low-value leases, expense for variable lease payments, total cash outflow for leases, lease commitments maturity analysis, gains or losses on sale-leaseback transactions, and key judgements on lease term, discount rate and embedded leases. Tabular presentation is preferred.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How are foreign currency leases treated under Ind AS 116?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Ind AS 116 read with Ind AS 21 The Effects of Changes in Foreign Exchange Rates, the ROU asset is a non-monetary item carried at historical cost (commencement date exchange rate), while the lease liability is a monetary item retranslated at the closing exchange rate at each reporting date. The resulting foreign exchange differences on the lease liability are recognised in profit and loss, similar to other monetary liabilities, creating P&amp;L volatility for foreign currency leases.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need Ind AS 116 Audit Sign-off?</h3>
            <p>Get a CA-led Ind AS 116 implementation review with IBR derivation, lease database, audit working papers — fixed-fee.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Lease%20Accounting%20Calculator.%20I%20need%20help%20with%20Ind%20AS%20116%20implementation%20and%20audit.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">WhatsApp a CA</a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Accounting Services<span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing<span class="arrow">→</span></a>
            <a href="/actuarial-valuation-services-for-employee-benefits" class="sidebar-link">Actuarial Valuation<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/ind-as-applicability-checker" class="sidebar-link">Ind AS Applicability Checker<span class="arrow">→</span></a>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/caro-2020-checklist-generator" class="sidebar-link">CARO 2020 Checklist<span class="arrow">→</span></a>
            <a href="/tools/ifc-testing-checklist" class="sidebar-link">IFC Testing Checklist<span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator<span class="arrow">→</span></a>
            <a href="/tools/emi-calculator" class="sidebar-link">EMI Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements<span class="arrow">→</span></a>
            <a href="/blog/what-is-a-small-company-under-the-companies-act-2013" class="sidebar-link">Small Company Definition<span class="arrow">→</span></a>
            <a href="/blog/loan-to-directors-rules-under-companies-act-2013" class="sidebar-link">Loans to Directors — Sec 185<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

<div class="office-strip">
    <div class="offices">Pune | Mumbai | Delhi | Gurugram</div>
    <div class="trust">25,000+ Businesses Trust Us</div>
</div>

<footer class="footer">
    © 2026 Patron Accounting LLP. All rights reserved.
</footer>

<script>
(function(){
    'use strict';

    // ===== TOGGLE GROUP HELPER =====
    function setupToggleGroup(id, onChange) {
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
            if (onChange) onChange();
        });
    }
    function getActiveValue(groupId) {
        const group = document.getElementById(groupId);
        if (!group) return null;
        const active = group.querySelector('.toggle-btn.active');
        return active ? active.dataset.value : null;
    }
    function getActiveLabel(groupId) {
        const group = document.getElementById(groupId);
        if (!group) return '';
        const active = group.querySelector('.toggle-btn.active');
        return active ? (active.dataset.label || active.textContent) : '';
    }

    setupToggleGroup('frequencyGroup');
    setupToggleGroup('timingGroup');

    // ===== FORMATTING =====
    function fmtINR(num) {
        if (num === undefined || num === null || isNaN(num)) return '₹0';
        const sign = num < 0 ? '-' : '';
        const abs = Math.abs(num);
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }

    function fmtINRDecimal(num) {
        return num.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }

    // ===== READ INPUTS =====
    function readInputs() {
        return {
            termYears: parseInt(document.getElementById('leaseTermYears').value, 10) || 0,
            discountRate: parseFloat(document.getElementById('discountRate').value) || 0,
            frequency: parseInt(getActiveValue('frequencyGroup'), 10) || 1,
            frequencyLabel: getActiveLabel('frequencyGroup'),
            payment: parseFloat(document.getElementById('paymentAmount').value) || 0,
            timing: getActiveValue('timingGroup') || 'arrears',
            escalation: parseFloat(document.getElementById('escalation').value) || 0,
            advancePayment: parseFloat(document.getElementById('advancePayment').value) || 0,
            initialDirectCost: parseFloat(document.getElementById('initialDirectCost').value) || 0,
            leaseIncentive: parseFloat(document.getElementById('leaseIncentive').value) || 0,
            restorationCost: parseFloat(document.getElementById('restorationCost').value) || 0
        };
    }

    function validateInputs(inp) {
        if (!inp.termYears || inp.termYears < 1 || inp.termYears > 30) return 'Lease term must be between 1 and 30 years.';
        if (!inp.discountRate || inp.discountRate <= 0) return 'Please enter a positive discount rate (annual %).';
        if (!inp.payment || inp.payment <= 0) return 'Please enter a positive lease payment per period.';
        return null;
    }

    // ===== CORE COMPUTATION =====
    function computeLease(inp) {
        const periodsPerYear = inp.frequency;
        const totalPeriods = inp.termYears * periodsPerYear;
        const periodRate = (inp.discountRate / 100) / periodsPerYear;

        // Build payment array — escalation is annual compound
        const payments = [];
        for (let i = 0; i < totalPeriods; i++) {
            const yearIndex = Math.floor(i / periodsPerYear);
            const escFactor = Math.pow(1 + inp.escalation / 100, yearIndex);
            payments.push(inp.payment * escFactor);
        }

        // Compute PV at commencement
        let pv = 0;
        for (let i = 0; i < totalPeriods; i++) {
            const t = (inp.timing === 'advance') ? i : (i + 1);
            pv += payments[i] / Math.pow(1 + periodRate, t);
        }
        const initLiability = pv;
        const initRou = pv + inp.advancePayment + inp.initialDirectCost + inp.restorationCost - inp.leaseIncentive;

        // Period-wise schedule
        let liability = initLiability;
        const periodRows = [];

        for (let i = 0; i < totalPeriods; i++) {
            const opening = liability;
            const payment = payments[i];
            let interest, principal;

            if (inp.timing === 'advance') {
                // Payment first, then interest on remaining balance
                principal = payment; // payment reduces principal first
                let afterPayment = opening - payment;
                if (afterPayment < 0) afterPayment = 0;
                interest = afterPayment * periodRate;
                liability = afterPayment + interest;
            } else {
                // Arrears: interest accrues then payment
                interest = opening * periodRate;
                principal = payment - interest;
                liability = opening + interest - payment;
            }
            if (liability < 0.01 && liability > -0.01) liability = 0;

            periodRows.push({
                period: i + 1,
                yearIndex: Math.floor(i / periodsPerYear) + 1,
                opening: opening,
                payment: payment,
                interest: interest,
                principal: principal,
                closing: liability
            });
        }

        // Aggregate to year-wise
        const annualDep = initRou / inp.termYears;
        const yearRows = [];
        let cumDep = 0;
        for (let y = 1; y <= inp.termYears; y++) {
            const yearPeriods = periodRows.filter(r => r.yearIndex === y);
            const opening = yearPeriods[0].opening;
            const closing = yearPeriods[yearPeriods.length - 1].closing;
            const totalPayment = yearPeriods.reduce((s, r) => s + r.payment, 0);
            const totalInterest = yearPeriods.reduce((s, r) => s + r.interest, 0);
            cumDep += annualDep;
            const closingRou = Math.max(0, initRou - cumDep);
            yearRows.push({
                year: y,
                opening: opening,
                payment: totalPayment,
                interest: totalInterest,
                closing: closing,
                depreciation: annualDep,
                closingRou: closingRou
            });
        }

        // Totals
        const totalCash = yearRows.reduce((s, r) => s + r.payment, 0);
        const totalInterest = yearRows.reduce((s, r) => s + r.interest, 0);
        const totalDepreciation = yearRows.reduce((s, r) => s + r.depreciation, 0);
        const totalIndASExpense = totalInterest + totalDepreciation;

        // Old AS 17 operating lease — straight-line rent
        const totalNominalRent = payments.reduce((s, p) => s + p, 0); // total nominal rent over lease
        const annualOpLease = totalNominalRent / inp.termYears;

        return {
            inp: inp,
            initLiability: initLiability,
            initRou: initRou,
            annualDep: annualDep,
            yearRows: yearRows,
            totalCash: totalCash,
            totalInterest: totalInterest,
            totalDepreciation: totalDepreciation,
            totalIndASExpense: totalIndASExpense,
            totalNominalRent: totalNominalRent,
            annualOpLease: annualOpLease,
            periodicRate: periodRate * 100
        };
    }

    // ===== RENDER =====
    function renderResult(r) {
        // Initial recognition
        document.getElementById('initLiability').textContent = fmtINR(r.initLiability);
        document.getElementById('initRou').textContent = fmtINR(r.initRou);

        // Summary grid
        const grid = document.getElementById('summaryGrid');
        grid.innerHTML = '';
        const summary = [
            {label: 'Total Cash Outflow', value: fmtINR(r.totalCash), highlight: true},
            {label: 'Total Interest', value: fmtINR(r.totalInterest)},
            {label: 'Total Depreciation', value: fmtINR(r.totalDepreciation)},
            {label: 'Effective Period Rate', value: r.periodicRate.toFixed(3) + '%'},
            {label: 'Lease Term', value: r.inp.termYears + ' years (' + (r.inp.termYears * r.inp.frequency) + ' periods)'},
            {label: 'Frequency', value: r.inp.frequencyLabel + ' / ' + (r.inp.timing === 'advance' ? 'Advance' : 'Arrears')}
        ];
        summary.forEach(function(s, idx) {
            const c = document.createElement('div');
            c.className = 'summary-card' + (s.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div>';
            grid.appendChild(c);
        });

        // Advisory banner
        const advisory = document.getElementById('advisoryBanner');
        let advHtml = '<strong>Recognition:</strong> ROU asset and lease liability are recognised on Day 1 at the values above. ROU is depreciated straight-line over ' + r.inp.termYears + ' years (₹' + fmtINRDecimal(r.annualDep) + ' per year). Interest accrues on the lease liability at ' + r.periodicRate.toFixed(3) + '% per ' + r.inp.frequencyLabel.toLowerCase() + ' period.';
        if (r.inp.termYears <= 1) {
            advHtml += '<br><br><strong>Short-term lease alert:</strong> Lease term ≤ 12 months. You may elect the short-term exemption under Para 5(a) and expense lease payments straight-line in P&L instead.';
        }
        advisory.innerHTML = advHtml;

        // Basis text
        document.getElementById('basisText').innerHTML = 'Lease Liability = PV of ' + (r.inp.termYears * r.inp.frequency) + ' lease payments at ' + r.inp.discountRate + '% IBR (' + r.periodicRate.toFixed(3) + '% per period). ROU Asset = Lease Liability + Advance Payments (₹' + fmtINRDecimal(r.inp.advancePayment) + ') + Initial Direct Costs (₹' + fmtINRDecimal(r.inp.initialDirectCost) + ') + PV Restoration (₹' + fmtINRDecimal(r.inp.restorationCost) + ') − Lease Incentives (₹' + fmtINRDecimal(r.inp.leaseIncentive) + '). Computation per Ind AS 116 Para 23-26.';

        // Schedule table
        const tbody = document.getElementById('scheduleBody');
        const tfoot = document.getElementById('scheduleFoot');
        tbody.innerHTML = '';
        r.yearRows.forEach(function(row) {
            const tr = document.createElement('tr');
            tr.innerHTML =
                '<td>Y' + row.year + '</td>' +
                '<td>' + fmtINRDecimal(row.opening) + '</td>' +
                '<td>' + fmtINRDecimal(row.payment) + '</td>' +
                '<td>' + fmtINRDecimal(row.interest) + '</td>' +
                '<td>' + fmtINRDecimal(row.closing) + '</td>' +
                '<td>' + fmtINRDecimal(row.depreciation) + '</td>' +
                '<td>' + fmtINRDecimal(row.closingRou) + '</td>';
            tbody.appendChild(tr);
        });
        tfoot.innerHTML =
            '<tr><td>Total</td><td>—</td>' +
            '<td>' + fmtINRDecimal(r.totalCash) + '</td>' +
            '<td>' + fmtINRDecimal(r.totalInterest) + '</td>' +
            '<td>—</td>' +
            '<td>' + fmtINRDecimal(r.totalDepreciation) + '</td>' +
            '<td>—</td></tr>';

        // Compare grid
        const compareGrid = document.getElementById('compareGrid');
        compareGrid.innerHTML =
            '<div class="compare-card indas">' +
            '<h4>Ind AS 116 (ROU Model)</h4>' +
            '<div class="ttl-label">Total P&amp;L Expense (over lease life)</div>' +
            '<div class="ttl-value">' + fmtINR(r.totalIndASExpense) + '</div>' +
            '<div class="ttl-label">Avg Annual: Dep</div>' +
            '<div class="ttl-value">' + fmtINR(r.totalDepreciation / r.inp.termYears) + '</div>' +
            '<div class="ttl-label">Avg Annual: Interest</div>' +
            '<div class="ttl-value">' + fmtINR(r.totalInterest / r.inp.termYears) + '</div>' +
            '<div style="font-size:11px;color:var(--text-muted);margin-top:8px;line-height:1.5;">Front-loaded — interest is high in early years. Total = depreciation + interest over lease life.</div>' +
            '</div>' +
            '<div class="compare-card oldas">' +
            '<h4>Old AS 17 / Ind AS 17 (Op. Lease)</h4>' +
            '<div class="ttl-label">Total P&amp;L Expense (over lease life)</div>' +
            '<div class="ttl-value">' + fmtINR(r.totalNominalRent) + '</div>' +
            '<div class="ttl-label">Annual Rent Expense</div>' +
            '<div class="ttl-value">' + fmtINR(r.annualOpLease) + '</div>' +
            '<div class="ttl-label">EBITDA Impact</div>' +
            '<div class="ttl-value">Reduces by full rent</div>' +
            '<div style="font-size:11px;color:var(--text-muted);margin-top:8px;line-height:1.5;">Straight-line — equal annual rent. EBITDA is lower than under Ind AS 116 by the rent amount.</div>' +
            '</div>';

        // Journal entry — at commencement
        const jeInit = document.getElementById('journalEntryInit');
        let jeHtml = '<span class="je-label">Initial Recognition (Commencement Date)</span>';
        jeHtml += '<div class="je-row"><span>Right-of-Use Asset A/c &nbsp;Dr.</span><span class="je-amt">' + fmtINRDecimal(r.initRou) + '</span><span></span></div>';
        jeHtml += '<div class="je-row"><span>&nbsp;&nbsp;&nbsp;&nbsp;To Lease Liability A/c</span><span></span><span class="je-amt">' + fmtINRDecimal(r.initLiability) + '</span></div>';
        if (r.inp.advancePayment > 0) {
            jeHtml += '<div class="je-row"><span>&nbsp;&nbsp;&nbsp;&nbsp;To Bank A/c (advance payment)</span><span></span><span class="je-amt">' + fmtINRDecimal(r.inp.advancePayment) + '</span></div>';
        }
        if (r.inp.initialDirectCost > 0) {
            jeHtml += '<div class="je-row"><span>&nbsp;&nbsp;&nbsp;&nbsp;To Bank A/c (initial direct costs)</span><span></span><span class="je-amt">' + fmtINRDecimal(r.inp.initialDirectCost) + '</span></div>';
        }
        if (r.inp.restorationCost > 0) {
            jeHtml += '<div class="je-row"><span>&nbsp;&nbsp;&nbsp;&nbsp;To Restoration Provision A/c</span><span></span><span class="je-amt">' + fmtINRDecimal(r.inp.restorationCost) + '</span></div>';
        }
        if (r.inp.leaseIncentive > 0) {
            jeHtml += '<div class="je-row"><span>Lease Incentive Receivable / Bank A/c &nbsp;Dr.</span><span class="je-amt">' + fmtINRDecimal(r.inp.leaseIncentive) + '</span><span></span></div>';
            jeHtml += '<div class="je-row"><span>&nbsp;&nbsp;&nbsp;&nbsp;To Right-of-Use Asset A/c</span><span></span><span class="je-amt">' + fmtINRDecimal(r.inp.leaseIncentive) + '</span></div>';
        }
        jeHtml += '<div class="je-row" style="opacity:0.7;"><span>(Being initial recognition of ROU and lease liability per Ind AS 116)</span><span></span><span></span></div>';
        jeInit.innerHTML = jeHtml;

        // Journal entry — Year 1
        const jeY1 = document.getElementById('journalEntryY1');
        const y1 = r.yearRows[0];
        let jeY1Html = '<span class="je-label">During Year 1 (Aggregate)</span>';
        jeY1Html += '<div class="je-row"><span>Finance Cost A/c &nbsp;Dr.</span><span class="je-amt">' + fmtINRDecimal(y1.interest) + '</span><span></span></div>';
        jeY1Html += '<div class="je-row"><span>Lease Liability A/c &nbsp;Dr.</span><span class="je-amt">' + fmtINRDecimal(y1.payment - y1.interest) + '</span><span></span></div>';
        jeY1Html += '<div class="je-row"><span>&nbsp;&nbsp;&nbsp;&nbsp;To Bank A/c (lease payments)</span><span></span><span class="je-amt">' + fmtINRDecimal(y1.payment) + '</span></div>';
        jeY1Html += '<div class="je-row" style="opacity:0.7;"><span>(Being lease payments split into interest and principal)</span><span></span><span></span></div>';
        jeY1Html += '<div class="je-row" style="margin-top:12px;"><span>Depreciation A/c &nbsp;Dr.</span><span class="je-amt">' + fmtINRDecimal(y1.depreciation) + '</span><span></span></div>';
        jeY1Html += '<div class="je-row"><span>&nbsp;&nbsp;&nbsp;&nbsp;To Accumulated Depreciation — ROU A/c</span><span></span><span class="je-amt">' + fmtINRDecimal(y1.depreciation) + '</span></div>';
        jeY1Html += '<div class="je-row" style="opacity:0.7;"><span>(Being ROU asset depreciated over lease term)</span><span></span><span></span></div>';
        jeY1.innerHTML = jeY1Html;

        // Show
        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        setTimeout(function() {
            section.scrollIntoView({behavior: 'smooth', block: 'start'});
        }, 100);
    }

    // ===== EVENT HANDLERS =====
    document.getElementById('btnCalculate').addEventListener('click', function() {
        const inp = readInputs();
        const err = validateInputs(inp);
        if (err) { alert(err); return; }
        const r = computeLease(inp);
        renderResult(r);
    });

    document.getElementById('btnReset').addEventListener('click', function() {
        ['leaseTermYears', 'discountRate', 'paymentAmount', 'escalation', 'advancePayment', 'initialDirectCost', 'leaseIncentive', 'restorationCost'].forEach(function(id) {
            document.getElementById(id).value = '';
        });
        const defaults = {frequencyGroup: '1', timingGroup: 'arrears'};
        Object.keys(defaults).forEach(function(gid) {
            const g = document.getElementById(gid);
            if (!g) return;
            g.querySelectorAll('.toggle-btn').forEach(function(b) {
                const isDefault = b.dataset.value === defaults[gid];
                b.classList.toggle('active', isDefault);
                b.setAttribute('aria-selected', isDefault ? 'true' : 'false');
            });
        });
        document.getElementById('resultSection').classList.remove('visible');
    });

    // Enter key support
    document.querySelectorAll('input[type="number"]').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('btnCalculate').click();
            }
        });
    });

    // FAQ accordion
    document.querySelectorAll('.faq-question').forEach(function(q) {
        q.addEventListener('click', function() {
            const item = q.parentElement;
            const isOpen = item.classList.contains('open');
            item.classList.toggle('open');
            q.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
        });
    });

    // TOC active link
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
        <span class="wa-sticky-bar-text"><strong>AY 2026&ndash;27 ITR filing is live</strong> &mdash; get your taxes filed accurately by CAs.</span>
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
<script>
/* Embed auto-resize: when iframed via ?embed=1, report height to the parent service page */
(function(){
  if (!document.body.classList.contains('is-embed')) return;
  function postHeight(){
    var el = document.querySelector('.main-layout') || document.body;
    var h = Math.ceil(el.getBoundingClientRect().height) + 24;
    parent.postMessage({ patronTool: 'lease-accounting-calculator-ind-as-116', height: h }, '*');
  }
  window.addEventListener('load', postHeight);
  window.addEventListener('resize', postHeight);
  document.addEventListener('click', function(){ setTimeout(postHeight, 80); });
  setTimeout(postHeight, 400);
})();
</script>
@endsection
