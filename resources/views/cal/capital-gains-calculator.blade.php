@extends('layouts.app')
@section('meta')
    <title>Capital Gains Tax Calculator | STCG & LTCG FY 2025-26</title>
    <meta name="description" content="Capital gains tax calculator FY 2025-26: compute STCG & LTCG on equity, property, gold and debt MF with Section 54/54F/54EC reinvestment exemption. Free.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/capital-gains-calculator">

    <meta property="og:title" content="Capital Gains Tax Calculator — STCG & LTCG FY 2025-26">
    <meta property="og:description" content="Compute STCG and LTCG under post-23-July-2024 rates — Section 111A 20%, Section 112A 12.5% above ₹1.25L, property grandfathering option. Free tool for FY 2025-26.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/capital-gains-calculator">
    <meta property="og:image" content="/tools/og/capital-gains-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Capital Gains Tax Calculator — STCG & LTCG FY 2025-26">
    <meta name="twitter:description" content="Compute STCG and LTCG under post-23-July-2024 rates — Section 111A 20%, Section 112A 12.5%, property grandfathering option.">
    <meta name="twitter:image" content="/tools/og/capital-gains-calculator.png">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Capital Gains Tax Calculator",
      "description": "Capital Gains Tax Calculator computes Short-Term and Long-Term Capital Gains tax for FY 2025-26 (AY 2026-27) under the post-23-July-2024 framework — Section 111A at 20 percent for equity STCG, Section 112A at 12.5 percent above ₹1.25 lakh for equity LTCG, and Section 112 at 12.5 percent without indexation for property, gold, and other assets, with property grandfathering option for pre-23-July-2024 acquisitions.",
      "url": "/tools/capital-gains-calculator",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "Any",
      "inLanguage": "en-IN",
      "isAccessibleForFree": true,
      "datePublished": "2026-05-06T08:00:00+05:30",
      "dateModified": "2026-05-08T08:00:00+05:30",
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
        {"@type": "ListItem", "position": 3, "name": "Capital Gains Calculator", "item": "/tools/capital-gains-calculator"}
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
          "name": "What changed in capital gains tax from 23 July 2024?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Finance (No. 2) Act 2024 introduced major changes effective 23 July 2024. STCG on listed equity and equity mutual funds rose from 15 percent to 20 percent under Section 111A. LTCG on listed equity rose from 10 percent to 12.5 percent above ₹1.25 lakh under Section 112A. Indexation benefit was removed for most assets, with the LTCG rate harmonised at 12.5 percent without indexation."
          }
        },
        {
          "@type": "Question",
          "name": "What are the STCG and LTCG rates for equity in FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For listed equity shares and equity-oriented mutual funds in FY 2025-26, STCG (held 12 months or less) is taxed at 20 percent under Section 111A provided STT was paid. LTCG (held more than 12 months) is taxed at 12.5 percent on gains above ₹1.25 lakh under Section 112A. Both rates apply only when STT is paid on the transaction."
          }
        },
        {
          "@type": "Question",
          "name": "What is the property grandfathering option for capital gains?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For residential property and land acquired before 23 July 2024 and sold on or after that date, resident individuals and HUFs can choose between two methods: 12.5 percent without indexation, or 20 percent with cost inflation index (CII) indexation. The lower tax option applies. This grandfathering is unavailable for property acquired on or after 23 July 2024 — only the 12.5 percent without indexation rate applies."
          }
        },
        {
          "@type": "Question",
          "name": "How are debt mutual funds taxed for capital gains?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Debt mutual funds purchased on or after 1 April 2023 are taxed under Section 50AA — gains are added to your income and taxed at your slab rate, regardless of holding period. Indexation and concessional LTCG rates do not apply. Debt mutual funds purchased before 1 April 2023 follow legacy rules: STCG at slab rates if held up to 24 months, LTCG at 12.5 percent without indexation if held longer."
          }
        },
        {
          "@type": "Question",
          "name": "What are the holding period thresholds after the Finance Act 2024?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Holding periods are simplified into two buckets effective 23 July 2024. Listed securities — including equity shares, equity mutual funds, listed bonds, and units of business trusts (REITs, InvITs) — qualify as long-term after 12 months. All other assets — property, gold, unlisted shares, gold mutual funds, and debt mutual funds — require 24 months for long-term classification. The earlier 36-month threshold is removed."
          }
        },
        {
          "@type": "Question",
          "name": "How is gold taxed for capital gains in FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Physical gold, digital gold, and gold mutual funds held more than 24 months attract LTCG at 12.5 percent without indexation. STCG (held 24 months or less) is added to income and taxed at slab rates. Listed Gold ETFs follow listed-security rules — 12-month threshold, LTCG at 12.5 percent. Sovereign Gold Bonds redeemed at 8-year maturity through RBI are fully exempt from capital gains tax."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim Section 87A rebate against capital gains tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Section 87A rebate applies only to tax computed at slab rates. Capital gains taxed at special rates — Section 111A, Section 112, Section 112A — are excluded from the rebate. Even if your total income falls within the ₹12 lakh new regime threshold or ₹5 lakh old regime threshold, the portion of tax arising from special-rate gains must be paid in full plus 4 percent cess."
          }
        },
        {
          "@type": "Question",
          "name": "What is the LTCG exemption limit on equity for FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 112A, the first ₹1,25,000 of LTCG on listed equity shares and equity-oriented mutual funds in a financial year is exempt from tax. This was raised from ₹1,00,000 by the Finance (No. 2) Act 2024. Only LTCG above this threshold is taxed at 12.5 percent. The exemption is per assessee per financial year and applies across all eligible equity holdings combined."
          }
        },
        {
          "@type": "Question",
          "name": "What is grandfathering for equity acquired before 1 February 2018?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For listed equity shares and equity mutual funds acquired before 1 February 2018 and sold on or after 1 April 2018, gains accrued up to 31 January 2018 are grandfathered. The cost of acquisition is the higher of actual cost or fair market value on 31 January 2018, capped at sale price. This protects pre-LTCG-tax era gains. Use the highest quoted price on 31 January 2018 as FMV."
          }
        },
        {
          "@type": "Question",
          "name": "Which exemptions are available to save LTCG tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54 exempts LTCG on residential property if reinvested in another residential property within 2 years (purchase) or 3 years (construction), capped at ₹10 crore. Section 54F provides similar relief for any LTCG reinvested in residential property. Section 54EC allows up to ₹50 lakh investment in NHAI or REC bonds within 6 months of sale, with a 5-year lock-in. Each has specific eligibility conditions."
          }
        },
        {
          "@type": "Question",
          "name": "How do I report capital gains in my ITR for FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Capital gains are reported in Schedule CG of ITR-2 (for individuals or HUF without business income) or ITR-3 (with business income). Each asset class — equity, property, gold, debt — has separate rows. Reconcile against AIS using our AIS Reconciliation Tool before filing. Broker contract notes, sale deeds, and purchase invoices must be retained for 6 assessment years to defend any Section 143 scrutiny."
          }
        },
        {
          "@type": "Question",
          "name": "Will capital gains rules change under the Income Tax Act 2025?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Income Tax Act 2025, effective from 1 April 2026, retains the substance of the post-23-July-2024 capital gains framework with renumbered sections. For FY 2025-26 returns filed in 2026, current Sections 111A, 112, and 112A under the 1961 Act apply. Tax Year 2026-27 onwards (FY 2026-27 income) will reference the corresponding sections under the 2025 Act. Rates and holding periods are unchanged in the transition."
          }
        }
      ]
    }
    </script>
@endsection
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #15365f; --primary-light: #1f4a7a; --primary-dark: #0a2240;
            --accent: #f26522; --accent-light: #ff8347;
            --surface: #FAFAF8; --surface-alt: #F0EFEB; --card: #FFFFFF;
            --text: #414042; --text-secondary: #555555; --text-muted: #888888;
            --border: #E5E5E0;
            --success: #059669; --info: #0EA5E9; --danger: #DC2626;
            --radius: 12px; --radius-lg: 20px;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.06); --shadow-md: 0 4px 16px rgba(0,0,0,0.08); --shadow-lg: 0 8px 32px rgba(0,0,0,0.1);
            --font-body: 'DM Sans', sans-serif; --font-mono: 'Space Mono', monospace;
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
        .post-pivot-note { background: #EFF6FF; border-left: 4px solid #0EA5E9; border-radius: 0 var(--radius) var(--radius) 0; padding: 14px 18px; margin-bottom: 24px; font-size: 13px; color: #1E40AF; line-height: 1.65; }
        .post-pivot-note strong { color: #1E3A8A; }

        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }

        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group input[type="date"] { font-family: var(--font-body); font-size: 15px; }
        .form-group .helper {
            display: block;
            font-size: 11px;
            color: var(--text-muted);
            font-weight: 400;
            margin-top: 4px;
            line-height: 1.4;
            text-transform: none;
            letter-spacing: 0;
        }

        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }

        .asset-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 4px;
        }
        @media (min-width: 600px) { .asset-grid { grid-template-columns: repeat(5, 1fr); } }
        .asset-btn {
            padding: 10px 8px;
            border: none;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
            background: transparent;
            cursor: pointer;
            transition: all 0.25s;
            text-align: center;
            -webkit-tap-highlight-color: transparent;
        }
        .asset-btn * { pointer-events: none; }
        .asset-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }

        .conditional-row { display: none; }
        .conditional-row.visible { display: grid; }

        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }

        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        .classification-banner {
            padding: 16px 20px;
            border-radius: var(--radius);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 14px;
            background: var(--surface-alt);
            border: 1px solid var(--border);
        }
        .classification-banner .clf-tag {
            font-family: var(--font-mono);
            font-size: 14px;
            font-weight: 700;
            padding: 6px 14px;
            border-radius: 20px;
            letter-spacing: 0.5px;
            flex-shrink: 0;
        }
        .clf-tag.stcg { background: #FEF3C7; color: #92400E; }
        .clf-tag.ltcg { background: #D1FAE5; color: #065F46; }
        .classification-banner .clf-detail {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.5;
        }
        .classification-banner .clf-detail strong { color: var(--primary-dark); }

        .result-grid { display: grid; grid-template-columns: 1fr; gap: 12px; }
        @media (min-width: 500px) { .result-grid { grid-template-columns: 1fr 1fr; } }

        .result-card { background: var(--surface); border-radius: var(--radius); padding: 16px 20px; border: 1px solid var(--border); }
        .result-card.highlight { background: var(--primary); border-color: var(--primary); }
        .result-card.highlight .result-label, .result-card.highlight .result-value { color: #fff; }
        .result-label { font-size: 12px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .result-value { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); }

        .grandfather-compare {
            margin-top: 16px;
            background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%);
            border-radius: var(--radius);
            padding: 18px 20px;
            border: 1px solid #BFDBFE;
        }
        .grandfather-compare h4 {
            font-size: 13px;
            font-weight: 700;
            color: #1E40AF;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .gf-row {
            display: grid;
            grid-template-columns: 1fr auto auto;
            gap: 16px;
            padding: 8px 0;
            font-size: 14px;
            color: var(--text-secondary);
            border-bottom: 1px dashed #BFDBFE;
            align-items: center;
        }
        .gf-row:last-child { border-bottom: none; }
        .gf-row.winner { font-weight: 700; color: #065F46; }
        .gf-row.winner::before { content: "✓ "; color: var(--success); }

        .result-breakdown { margin-top: 16px; background: var(--surface-alt); border-radius: var(--radius); padding: 16px 20px; }
        .result-breakdown h4 { font-size: 14px; font-weight: 700; color: var(--primary-dark); margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.5px; }
        .breakdown-row { display: flex; justify-content: space-between; align-items: center; padding: 8px 0; font-size: 14px; }
        .breakdown-row:not(:last-child) { border-bottom: 1px dashed var(--border); }
        .breakdown-label { color: var(--text-secondary); }
        .breakdown-value { font-family: var(--font-mono); font-weight: 700; color: var(--text); }
        .breakdown-row.total { font-weight: 700; font-size: 15px; padding-top: 12px; border-top: 2px solid var(--border) !important; margin-top: 4px; }
        .breakdown-row.total .breakdown-label, .breakdown-row.total .breakdown-value { color: var(--primary-dark); }
        .breakdown-row.deduction .breakdown-value { color: var(--success); }

        .btn-reset { display: inline-flex; align-items: center; gap: 6px; margin-top: 16px; padding: 8px 16px; border: 1px solid var(--border); border-radius: 8px; background: var(--card); color: var(--text-muted); font-family: var(--font-body); font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s; }
        .btn-reset:hover { border-color: var(--danger); color: var(--danger); }

        .reinvest-wizard {
            margin-top: 16px;
            border: 2px solid var(--accent);
            border-radius: var(--radius);
            overflow: hidden;
            background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%);
        }
        .reinvest-details summary {
            list-style: none;
            cursor: pointer;
            padding: 16px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            color: var(--primary-dark);
            user-select: none;
        }
        .reinvest-details summary::-webkit-details-marker { display: none; }
        .reinvest-details[open] summary { border-bottom: 1px solid #FDE68A; }
        .rw-icon { font-size: 22px; flex-shrink: 0; }
        .rw-title { flex: 1; font-size: 15px; }
        .rw-arrow { font-size: 14px; color: var(--accent); transition: transform 0.2s; }
        .reinvest-details[open] .rw-arrow { transform: rotate(180deg); }
        .reinvest-body { padding: 20px; background: var(--card); }
        .reinvest-intro { font-size: 13px; color: var(--text-secondary); margin-bottom: 18px; line-height: 1.6; }
        .rw-section {
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 14px 16px;
            margin-bottom: 12px;
            background: var(--surface);
        }
        .rw-section-head { display: flex; align-items: center; gap: 10px; margin-bottom: 8px; flex-wrap: wrap; }
        .rw-tag {
            background: var(--primary);
            color: #fff;
            font-family: var(--font-mono);
            font-size: 11px;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 12px;
            letter-spacing: 0.5px;
        }
        .rw-section-title { font-size: 13px; font-weight: 600; color: var(--primary-dark); }
        .rw-help {
            font-size: 12px;
            color: var(--text-secondary);
            margin-bottom: 10px;
            line-height: 1.6;
        }
        .rw-help code {
            background: var(--surface-alt);
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 11px;
            color: var(--primary-dark);
        }
        .rw-input-row label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 4px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        .rw-input-row input {
            width: 100%;
            padding: 10px 14px;
            border: 1.5px solid var(--border);
            border-radius: 8px;
            font-family: var(--font-mono);
            font-size: 16px;
            font-weight: 700;
            color: var(--text);
            background: var(--card);
            transition: border-color 0.2s;
        }
        .rw-input-row input:focus { border-color: var(--primary); }
        .btn-recompute {
            display: block;
            width: 100%;
            padding: 12px;
            background: var(--accent);
            color: var(--primary-dark);
            border: none;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            margin-top: 12px;
            transition: background 0.2s;
        }
        .btn-recompute:hover { background: var(--accent-light); }
        .rw-result {
            margin-top: 16px;
            background: linear-gradient(135deg, #D1FAE5 0%, #A7F3D0 100%);
            border-radius: var(--radius);
            padding: 16px 20px;
        }
        .rw-result-head {
            font-family: var(--font-mono);
            font-size: 11px;
            font-weight: 700;
            color: #065F46;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
        }
        .rw-result-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 6px;
        }
        @media (min-width: 500px) { .rw-result-grid { grid-template-columns: 1fr 1fr; } }
        .rw-result-row {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            padding: 4px 0;
        }
        .rw-result-row .lbl { color: #047857; }
        .rw-result-row .val { font-family: var(--font-mono); font-weight: 700; color: #064E3B; }
        .rw-savings {
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #6EE7B7;
            font-size: 14px;
            font-weight: 700;
            color: #064E3B;
            text-align: center;
        }
        .rw-savings .amount { color: var(--primary-dark); font-family: var(--font-mono); font-size: 17px; }

        .content-section { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 24px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 8px 0 16px 24px; color: var(--text-secondary); font-size: 15px; line-height: 1.75; }
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
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; }
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

        .body-cta { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 32px; margin: 28px 0; text-align: center; }
        .body-cta h3 { color: #fff; font-size: 22px; margin-bottom: 10px; }
        .body-cta p { font-size: 15px; color: rgba(255,255,255,0.9); margin-bottom: 20px; line-height: 1.65; }

        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }

        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }

        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; margin-bottom: 20px; }

        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
            .body-cta { padding: 24px 20px; }
            .body-cta h3 { font-size: 18px; }
            .gf-row { grid-template-columns: 1fr; gap: 4px; }
        }
    
/* === PATRON CTA SYSTEM (4-placement architecture) === */
.brand-cta-bar { background: #FFEDD5; border-top: 1px solid #FED7AA; border-bottom: 1px solid #FED7AA; padding: 14px 20px; }
.brand-cta-bar-inner { max-width: 1200px; margin: 0 auto; display: flex; align-items: center; gap: 16px; flex-wrap: wrap; }
.brand-cta-bar-text { flex: 1 1 320px; font-size: 14px; color: var(--text); line-height: 1.45; }
.brand-cta-bar-text strong { color: var(--text); font-weight: 700; }
.brand-cta-bar-actions { display: flex; gap: 10px; flex-wrap: wrap; }
.brand-cta-btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 11px 18px; border-radius: 8px; font-family: var(--font-body); font-size: 14px; font-weight: 700; text-decoration: none; border: 0; cursor: pointer; transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.2s ease; -webkit-tap-highlight-color: transparent; touch-action: manipulation; white-space: nowrap; line-height: 1.2; min-height: 44px; }
.brand-cta-btn:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.12); }
.brand-cta-btn:active { transform: translateY(0); }
.brand-cta-btn .ico { width: 16px; height: 16px; flex-shrink: 0; }
.brand-cta-btn-call { background: var(--accent); color: #fff; }
.brand-cta-btn-call:hover { background: var(--accent-light); color: #fff; }
.brand-cta-btn-wa { background: #25D366; color: #fff; }
.brand-cta-btn-wa:hover { background: #1FB855; color: #fff; }
.brand-cta-btn-email { background: #fff; color: var(--text); border: 1px solid #E5D6C5; }
.brand-cta-btn-email:hover { background: #FAFAF8; color: var(--text); }
.brand-cta-stack { display: flex; flex-direction: column; gap: 8px; }
.brand-cta-stack .brand-cta-btn { width: 100%; }
.body-cta .brand-cta-bar-actions { justify-content: center; margin-top: 4px; }
.body-cta .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.body-cta .brand-cta-btn-email:hover { background: #fff; border-color: #fff; }
.cta-card .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.cta-card .brand-cta-btn-email:hover { background: #fff; border-color: #fff; }
.post-result-cta { background: #FFF7ED; border: 1px solid #FED7AA; border-left: 4px solid var(--accent); border-radius: var(--radius); padding: 18px 20px; margin: 20px 0 4px; }
.post-result-cta-head { font-size: 15px; font-weight: 700; color: var(--text); margin-bottom: 4px; line-height: 1.4; }
.post-result-cta-sub { font-size: 13px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.55; }
.post-result-cta .brand-cta-bar-actions { gap: 8px; }

@media (max-width: 767px) {
    .brand-cta-bar { padding: 12px 14px; }
    .brand-cta-bar-text { font-size: 13px; flex-basis: 100%; }
    .brand-cta-bar-actions { width: 100%; gap: 8px; }
    .brand-cta-bar .brand-cta-btn { flex: 1 1 0; padding: 10px 8px; font-size: 12.5px; min-width: 0; min-height: 44px; }
    .brand-cta-bar .brand-cta-btn-call { flex: 1 1 100%; }
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta { padding: 16px; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}
@media (min-width: 768px) and (max-width: 950px) {
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}

/* === A11y: visible keyboard focus rings (WCAG 2.4.7) — replaces removed focus-suppression === */
.form-group input:focus-visible, .form-group select:focus-visible { outline: 2px solid var(--primary-light); outline-offset: 2px; border-color: var(--primary-light); }
.brand-cta-btn:focus-visible, .cta-btn:focus-visible, button.faq-question:focus-visible, .toc-nav a:focus-visible, .sidebar-link:focus-visible, .breadcrumb a:focus-visible { outline: 2px solid var(--accent); outline-offset: 2px; }

/* === A11y: reduced-motion (WCAG 2.3.3) === */
@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after { animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; transition-duration: 0.01ms !important; scroll-behavior: auto !important; }
}

/* === Print stylesheet (calculator working-paper output) === */
@media print {
    .toc-nav, .breadcrumb, .brand-cta-bar, .post-result-cta, .body-cta, .cta-card, .sidebar-card, .sidebar-col, .office-strip, .footer { display: none !important; }
    body { background: #fff !important; color: #000 !important; }
    .main-layout { display: block !important; }
    .content-col { width: 100% !important; max-width: none !important; }
    a { color: #000 !important; text-decoration: underline; }
    .calc-card, .result-section, .result-card, .working-paper, .formula-box { box-shadow: none !important; border: 1px solid #ccc !important; page-break-inside: avoid; }
}

/* === Office strip (Phase 5 — was missing from all 10 tools) === */
.office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
.office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
.office-strip .trust { color: var(--accent); font-weight: 600; }

/* === Mobile tap reliability — addresses keyboard-open + tap quirks on iOS Quick Look + reduces 300ms tap-delay === */
button, .toggle-btn, .toggle-btn.active, .faq-question, .sidebar-link, .toc-nav a, .breadcrumb a,
.cta-btn, .brand-cta-btn, .btn-calculate, .btn-recompute, .btn-reset, .btn-restart, .btn-back, .btn-next,
.option-btn, .next-btn, .reset-btn { touch-action: manipulation; -webkit-tap-highlight-color: rgba(0,0,0,0.05); }
/* Ensure no accidental ancestor blocks pointer events on toggle/faq containers */
.toggle-group, .toggle-btn, .faq-item, .faq-question { pointer-events: auto; }

/* === Responsive table wrapper (fix mobile horizontal overflow on schedule/rate/recon tables) === */
.table-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; max-width: 100%; margin: 16px 0; border-radius: var(--radius); }
.table-scroll > table { margin: 0; }
@media (max-width: 767px) {
    .table-scroll { box-shadow: inset -10px 0 8px -10px rgba(0,0,0,0.15); border: 1px solid var(--border); }
    .schedule-table, .rate-table, .recon-table { font-size: 12px; min-width: 480px; }
    .schedule-table thead th, .rate-table thead th, .recon-table thead th,
    .schedule-table tbody td, .rate-table tbody td, .recon-table tbody td { padding: 8px 10px; }
}
    </style>
@section('content')

<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#post-july-2024">Post-July-2024 Changes</a>
        <a href="#asset-rates">Asset Rates</a>
        <a href="#exemptions">Exemptions</a>
        <a href="#examples">Examples</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Capital Gains Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Capital Gains Tax Calculator — <span>STCG & LTCG Post-July-2024 Rates</span> for FY 2025-26</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">
            Sold shares or property? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.
        </div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Capital%20Gains%20Tax%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="Chat with us on WhatsApp" rel="noopener">
                <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                WhatsApp
            </a>
            <a href="mailto:sales@patronaccounting.com?subject=Capital%20Gains%20Tax%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Capital%20Gains%20Tax%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20capital%20gains%20tax%20%28STCG%2FLTCG%29.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email
            </a>
        </div>
    </div>
</div>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Compute Short-Term and Long-Term Capital Gains tax for FY 2025-26 (AY 2026-27) under the post-23-July-2024 framework. <strong>Equity STCG</strong> at 20% (Section 111A) and <strong>LTCG</strong> at 12.5% above ₹1.25 lakh (Section 112A). <strong>Property, gold, and other LTCG</strong> at 12.5% without indexation (Section 112). For property acquired before 23 July 2024 sold thereafter, the calculator computes both 12.5% no-indexation and 20% with-indexation methods and recommends whichever produces lower tax. Section 87A rebate does not apply to capital gains taxed at special rates.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Your Capital Gains Tax</h2>
            <p class="calc-intro">Pick your asset type, enter purchase and sale details. The tool auto-classifies STCG/LTCG, applies the right section, and shows tax including 4% cess.</p>

            <div class="post-pivot-note" role="note">
                <strong>Applies to sales on or after 23 July 2024.</strong> The calculator uses the Finance Act 2024 regime — 12.5% LTCG on equity above ₹1.25L (was ₹1L), 20% STCG on equity (was 15%), 12.5% no-indexation default for property/gold/debt. For property purchased before 23 July 2024, the calculator automatically compares 20%-with-indexation vs 12.5%-without and picks the lower.
            </div>

            <noscript>
                <div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or use the formulas below.</div>
            </noscript>

            <div class="calc-row" style="grid-template-columns: 1fr;">
                <div class="form-group">
                    <label>Asset Type</label>
                    <div class="asset-grid">
                        <button type="button" class="asset-btn active" data-value="equity" onclick="setAsset(this)">Listed Equity / MF</button>
                        <button type="button" class="asset-btn" data-value="property" onclick="setAsset(this)">Property</button>
                        <button type="button" class="asset-btn" data-value="gold" onclick="setAsset(this)">Gold</button>
                        <button type="button" class="asset-btn" data-value="debt_mf" onclick="setAsset(this)">Debt MF</button>
                        <button type="button" class="asset-btn" data-value="other" onclick="setAsset(this)">Unlisted / Other</button>
                    </div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="purchaseDate">Purchase Date</label>
                    <input type="date" id="purchaseDate" autocomplete="off">
                    <span class="helper">Date you acquired the asset</span>
                </div>
                <div class="form-group">
                    <label for="saleDate">Sale Date</label>
                    <input type="date" id="saleDate" autocomplete="off">
                    <span class="helper">Date of transfer / sale</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="purchasePrice">Purchase Price (₹)</label>
                    <input type="text" id="purchasePrice" placeholder="e.g. 500000" autocomplete="off" inputmode="decimal">
                    <span class="helper">Cost of acquisition + improvement, excluding brokerage on purchase</span>
                </div>
                <div class="form-group">
                    <label for="salePrice">Sale Price (₹)</label>
                    <input type="text" id="salePrice" placeholder="e.g. 800000" autocomplete="off" inputmode="decimal">
                    <span class="helper">Net consideration after transfer expenses</span>
                </div>
            </div>

            <div class="calc-row" id="slabRateRow" style="display:none;">
                <div class="form-group" style="grid-column: 1 / -1;">
                    <label for="slabRate">Your Marginal Slab Rate (%)</label>
                    <input type="text" inputmode="decimal" id="slabRate" placeholder="30" value="30" max="30" autocomplete="off">
                    <span class="helper">For STCG on non-equity / debt MF — gain is added to your income and taxed at slab. Default 30%.</span>
                </div>
            </div>

            <div class="calc-row" id="equityGrandfatherRow" style="display:none;">
                <div class="form-group" style="grid-column: 1 / -1;">
                    <label for="fmvJan2018">FMV on 31 January 2018 per unit (₹) — optional</label>
                    <input type="text" inputmode="decimal" id="fmvJan2018" placeholder="e.g. 250" autocomplete="off">
                    <span class="helper">Only for equity/MF acquired before 1 February 2018. Highest quoted price on 31 Jan 2018. Leave blank if not applicable.</span>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Capital Gains Tax</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>

                <div class="classification-banner">
                    <span class="clf-tag" id="clfTag">—</span>
                    <span class="clf-detail" id="clfDetail">—</span>
                </div>

                <div class="result-grid">
                    <div class="result-card">
                        <div class="result-label">Holding Period</div>
                        <div class="result-value" id="resHolding">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Capital Gain</div>
                        <div class="result-value" id="resGain">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Tax Rate Applied</div>
                        <div class="result-value" id="resRate">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Tax (Before Cess)</div>
                        <div class="result-value" id="resTax">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Health & Education Cess (4%)</div>
                        <div class="result-value" id="resCess">—</div>
                    </div>
                    <div class="result-card highlight">
                        <div class="result-label">Total Tax Payable</div>
                        <div class="result-value" id="resTotal">—</div>
                    </div>
                </div>

                <div class="grandfather-compare" id="gfCompare" style="display:none;">
                    <h4>Property Grandfathering — Both Methods Compared</h4>
                    <div id="gfRows"></div>
                </div>

                <div class="result-breakdown">
                    <h4>Calculation Breakdown</h4>
                    <div id="breakdownRows"></div>
                </div>

                <div class="reinvest-wizard" id="reinvestWizard" style="display:none;">
                    <details class="reinvest-details">
                        <summary>
                            <span class="rw-icon">💰</span>
                            <span class="rw-title">Save Tax via Reinvestment — Section 54 / 54F / 54EC</span>
                            <span class="rw-arrow">▾</span>
                        </summary>
                        <div class="reinvest-body">
                            <p class="reinvest-intro">If you reinvest your LTCG within prescribed timelines, you can claim exemption under one or more sections. Only sections relevant to your asset type are shown. Caps and time limits apply — consult a CA to defend the claim if needed.</p>

                            <div class="rw-section" id="rwSec54" style="display:none;">
                                <div class="rw-section-head">
                                    <span class="rw-tag">Section 54</span>
                                    <span class="rw-section-title">Sale of Residential Property → New Residential Property</span>
                                </div>
                                <p class="rw-help">Reinvest LTCG in another residential house in India. Time limit: 1 year before sale to 2 years after (purchase) OR 3 years after (construction). Cap: ₹10 crore. Hold the new house for 3 years or exemption reverses.</p>
                                <div class="rw-input-row">
                                    <label for="reinv54">Amount reinvested in new residential house (₹)</label>
                                    <input type="text" id="reinv54" placeholder="0" inputmode="decimal" autocomplete="off">
                                </div>
                            </div>

                            <div class="rw-section" id="rwSec54F" style="display:none;">
                                <div class="rw-section-head">
                                    <span class="rw-tag">Section 54F</span>
                                    <span class="rw-section-title">Sale of Other LTCG Asset → New Residential Property</span>
                                </div>
                                <p class="rw-help">Reinvest the <em>net consideration</em> (full sale value, not just gain) in a residential house for full exemption. Partial reinvestment gives pro-rata exemption: <code>Exemption = LTCG × (Reinvested ÷ Net Consideration)</code>. You must not own more than 1 residential house at the time of sale. Cap: ₹10 crore.</p>
                                <div class="rw-input-row">
                                    <label for="reinv54F">Amount of net consideration reinvested in residential property (₹)</label>
                                    <input type="text" id="reinv54F" placeholder="0" inputmode="decimal" autocomplete="off">
                                </div>
                            </div>

                            <div class="rw-section" id="rwSec54EC" style="display:none;">
                                <div class="rw-section-head">
                                    <span class="rw-tag">Section 54EC</span>
                                    <span class="rw-section-title">Sale of Land/Building → 54EC Bonds (NHAI / REC / PFC / IRFC)</span>
                                </div>
                                <p class="rw-help">Invest LTCG in specified bonds within 6 months of sale. Maximum ₹50 lakh per FY (and ₹50 lakh per asset transferred across two FYs combined). 5-year lock-in. Bond interest (~5.25%) is taxable. Can be combined with Section 54 / 54F.</p>
                                <div class="rw-input-row">
                                    <label for="reinv54EC">Amount invested in 54EC bonds (₹)</label>
                                    <input type="text" id="reinv54EC" placeholder="0" inputmode="decimal" autocomplete="off">
                                </div>
                            </div>

                            <button class="btn-recompute" onclick="computeReinvestment()">Recalculate with Exemption</button>

                            <div class="rw-result" id="rwResult" style="display:none;">
                                <div class="rw-result-head">After Reinvestment Exemption</div>
                                <div class="rw-result-grid" id="rwResultGrid"></div>
                                <div class="rw-savings" id="rwSavings"></div>
                            </div>
                        </div>
                    </details>
                </div>

                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            
                <div class="post-result-cta" id="postResultCTA">
    <div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div>
    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Capital Gains Tax Calculator validation, professional documentation, no obligation.</div>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Capital%20Gains%20Tax%20Calculator.%20Please%20review%20my%20STCG%2FLTCG%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Capital%20Gains%20Tax%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Capital%20Gains%20Tax%20Calculator%20and%20would%20like%20a%20Chartered%20Accountant%20to%20review%20my%20output%20before%20I%20act%20on%20it.%0A%0APlease%20advise%20on%20next%20steps%20for%20capital%20gains%20tax%20%28STCG%2FLTCG%29.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How Capital Gains Tax Works in India</h2>
            <p>Capital gains arise when you sell a capital asset for more than its cost. The tax depends on three things: the asset type, how long you held it (short-term vs long-term), and whether the transfer happened before or after 23 July 2024 — the date the Finance (No. 2) Act 2024 changes took effect. The framework is governed by the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department</a> and applied in line with the audit standards of the <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>.</p>
            <div class="formula-box">
                <span class="label">Capital Gain</span> = Sale Consideration − Cost of Acquisition − Cost of Improvement − Transfer Expenses<br>
                <span class="label">Tax</span> = Capital Gain × Applicable Rate<br>
                <span class="label">Total Payable</span> = Tax + 4% Health & Education Cess
            </div>
            <p>Whether your gain is short-term (STCG) or long-term (LTCG) depends on the holding period for that asset class. The thresholds were simplified into two buckets by the <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Finance (No. 2) Act 2024</a>: 12 months for listed securities and 24 months for everything else.</p>
            <h3>Section 87A Rebate Does Not Apply</h3>
            <p>A common misconception: capital gains taxed at special rates (Section 111A, Section 112, Section 112A) are excluded from the Section 87A rebate. Even if your total income is within the ₹12 lakh new regime threshold or ₹5 lakh old regime threshold, the tax on capital gains must be paid in full. Use our <a href="/tools/section-87a-rebate-calculator">Section 87A Rebate Calculator</a> to compute the rebate available on slab-rate income only.</p>
        </section>

        <section class="content-section" id="post-july-2024">
            <h2>What Changed on 23 July 2024 — The Pivot Date</h2>
            <p>The Finance (No. 2) Act 2024 introduced the most significant capital gains overhaul since 2018. Three structural changes apply to all transfers on or after <strong>23 July 2024</strong>, as announced by the <a href="https://www.finmin.nic.in/" target="_blank" rel="noopener">Ministry of Finance</a> in Budget 2024:</p>

            <h3>1. Holding Periods Simplified</h3>
            <p>The earlier 12-month, 24-month, and 36-month thresholds were collapsed into two: <strong>12 months for listed securities</strong> (equity, equity mutual funds, listed bonds, REITs, InvITs) and <strong>24 months for all other assets</strong> (property, gold, unlisted shares, gold MFs, debt MFs). The 36-month bucket is removed entirely.</p>

            <h3>2. Equity Rates Raised</h3>
            <p>STCG on listed equity and equity-oriented mutual funds rose from 15% to <strong>20%</strong> under Section 111A. LTCG rose from 10% to <strong>12.5%</strong> under Section 112A, with the per-year exemption threshold raised from ₹1 lakh to ₹1.25 lakh.</p>

            <h3>3. Indexation Removed (Mostly)</h3>
            <p>Indexation benefit under Section 48(2) — which adjusted cost of acquisition for inflation using the Cost Inflation Index (CII) — was removed for transfers from 23 July 2024. The replacement is a flat <strong>12.5% without indexation</strong> rate under Section 112 for all non-equity LTCG. The one exception: <strong>residential property and land acquired before 23 July 2024</strong>, where resident individuals and HUFs can choose between 12.5% no-indexation OR 20% with indexation, whichever produces lower tax. This grandfathering is the single most valuable optimisation for legacy property owners.</p>

            <div class="callout">
                <p><strong>For FY 2024-25 returns:</strong> The split-year rule applies — gains realised before 23 July 2024 follow the old framework (15% STCG, 10% LTCG, indexation available); gains from 23 July 2024 onwards follow the new framework. For FY 2025-26 ITR (the return most users are filing in 2026), the new framework applies throughout — no split-year complexity. <a href="https://www.pib.gov.in/PressReleasePage.aspx?PRID=2036604" target="_blank" rel="noopener">CBDT FAQs</a> on the Budget 2024 changes confirm the effective date.</p>
            </div>
        </section>

        <section class="content-section" id="asset-rates">
            <h2>FY 2025-26 Capital Gains Rates by Asset Class</h2>
            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Asset</th><th>Holding for LTCG</th><th>STCG Rate</th><th>LTCG Rate</th><th>Section</th></tr>
                </thead>
                <tbody>
                    <tr><td>Listed Equity / Equity MF (STT paid)</td><td>&gt; 12 months</td><td>20%</td><td>12.5% above ₹1.25L</td><td>111A / 112A</td></tr>
                    <tr><td>Listed Bonds / REITs / InvITs</td><td>&gt; 12 months</td><td>Slab rate</td><td>12.5%</td><td>112</td></tr>
                    <tr><td>Residential Property / Land</td><td>&gt; 24 months</td><td>Slab rate</td><td>12.5% (no index) <em>or</em> 20% with index*</td><td>112</td></tr>
                    <tr><td>Gold (physical / digital / MF)</td><td>&gt; 24 months</td><td>Slab rate</td><td>12.5% (no indexation)</td><td>112</td></tr>
                    <tr><td>Gold ETF (listed)</td><td>&gt; 12 months</td><td>Slab rate</td><td>12.5% (no indexation)</td><td>112</td></tr>
                    <tr><td>Unlisted Shares</td><td>&gt; 24 months</td><td>Slab rate</td><td>12.5% (no indexation)</td><td>112</td></tr>
                    <tr><td>Debt MF (purchased ≥ 1 Apr 2023)</td><td>N/A — always slab</td><td>Slab rate</td><td>Slab rate</td><td>50AA</td></tr>
                    <tr><td>Debt MF (purchased &lt; 1 Apr 2023)</td><td>&gt; 24 months</td><td>Slab rate</td><td>12.5% (no indexation)</td><td>112</td></tr>
                </tbody>
            </table></div>
            <p><em>*Property grandfathering: applies only to residential property and land acquired before 23 July 2024 and sold from 23 July 2024 onwards. Resident individuals and HUFs only — not companies, firms, or non-residents.</em></p>

            <div class="callout warn">
                <p><strong>Sovereign Gold Bonds:</strong> If held until the 8-year maturity and redeemed via RBI, capital gains are <em>fully exempt</em> under Section 47(viic). If sold on the exchange before maturity, treated as gold ETF rules. Consider this before exiting prematurely.</p>
            </div>
        </section>

        <div class="body-cta">
    <h3>Need Help with Capital Gains Tax?</h3>
    <p>Patron's CAs compute your STCG/LTCG, apply indexation correctly, claim Section 54/54F/54EC exemptions, and file ITR-2/ITR-3. We support Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Capital%20Gains%20Tax%20Calculator.%20I%20need%20help%20with%20capital%20gains%20tax%20%28STCG%2FLTCG%29.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Capital%20Gains%20Tax%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Capital%20Gains%20Tax%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20capital%20gains%20tax%20%28STCG%2FLTCG%29.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <section class="content-section" id="exemptions">
            <h2>LTCG Exemptions — Section 54, 54F, 54EC</h2>
            <p>Three reinvestment-based exemptions can substantially reduce or eliminate LTCG tax. Each has tight eligibility conditions and time limits — getting these wrong loses the exemption.</p>

            <h3>Section 54 — Sale of Residential Property → New Residential Property</h3>
            <p>If you sell a long-term residential house and reinvest the LTCG amount in another residential house in India within 2 years (purchase) or 3 years (construction), the LTCG is exempt up to the amount reinvested. Cap of <strong>₹10 crore</strong> on the exemption amount from FY 2023-24 onwards. You can hold a maximum of two residential houses at the time of sale to claim. From AY 2024-25, the option to reinvest in two new houses is restricted to gains up to ₹2 crore, used once in a lifetime.</p>

            <h3>Section 54F — Sale of Any LTCG Asset → Residential Property</h3>
            <p>For LTCG on assets <em>other than</em> residential property (e.g., gold, bonds, unlisted shares), reinvest the entire <em>net consideration</em> (not just the gain) in a residential house to claim full exemption. Same time limits as Section 54. Same ₹10 crore cap. You must not own more than one residential house at the time of sale.</p>

            <h3>Section 54EC — Sale of Land/Building → Specified Bonds</h3>
            <p>Invest LTCG from sale of land, building, or both in NHAI or REC bonds (or other specified bonds) within 6 months of sale. Maximum investment ₹50 lakh per financial year and ₹50 lakh per transferred asset across two FYs. 5-year lock-in, interest taxable. Useful for property sellers with LTCG up to ₹50 lakh who want a guaranteed return.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> Section 54EC bonds are issued by limited issuers (NHAI, REC, PFC, IRFC). The 6-month window from sale date is strict — buying bonds in the 7th month disqualifies the exemption entirely. Plan ahead and pre-fund the Capital Gains Account Scheme (CGAS) in a public-sector bank if you can't deploy within 6 months.</p>
            </div>
        </section>

        <section class="content-section" id="examples">
            <h2>Worked Examples — Common Scenarios</h2>

            <h3>Example 1 — Equity LTCG (Most Common)</h3>
            <p>Purchased 100 shares of Reliance Industries on 5 April 2023 at ₹2,400/share = ₹2,40,000. Sold 100 shares on 10 May 2025 at ₹3,000/share = ₹3,00,000. Holding period: 25 months → LTCG.</p>
            <div class="formula-box">
                Sale: ₹3,00,000<br>
                Cost: ₹2,40,000<br>
                LTCG: ₹60,000 — <span class="label">below ₹1.25L exemption</span> → Tax: ₹0
            </div>
            <p>If LTCG had been ₹2,00,000, the taxable portion would be ₹2,00,000 − ₹1,25,000 = ₹75,000 × 12.5% = ₹9,375 tax + 4% cess = ₹9,750 total payable.</p>

            <h3>Example 2 — Property Sale with Grandfathering</h3>
            <p>Property bought on 15 March 2010 for ₹40 lakh. Sold on 20 June 2025 for ₹1.50 crore. Holding period: 15 years → LTCG. CII for FY 2009-10 = 148; CII for FY 2025-26 = 376.</p>
            <div class="table-scroll"><table class="rate-table">
                <thead><tr><th>Method</th><th>Computation</th><th>Tax</th></tr></thead>
                <tbody>
                    <tr><td><strong>12.5% No Indexation</strong></td><td>LTCG = ₹1,50,00,000 − ₹40,00,000 = ₹1,10,00,000<br>Tax = 12.5% × ₹1,10,00,000</td><td>₹13,75,000</td></tr>
                    <tr><td><strong>20% With Indexation</strong></td><td>Indexed Cost = ₹40,00,000 × 376/148 = ₹1,01,62,162<br>LTCG = ₹1,50,00,000 − ₹1,01,62,162 = ₹48,37,838<br>Tax = 20% × ₹48,37,838</td><td>₹9,67,568</td></tr>
                </tbody>
            </table></div>
            <p>The 20% with-indexation method saves ₹4,07,432 (before cess). Choose this method. The grandfathering option exists because the property was acquired before 23 July 2024.</p>

            <h3>Example 3 — Property Bought After 23 July 2024 (No Grandfathering)</h3>
            <p>Property bought on 15 August 2024 for ₹80 lakh. Sold on 20 December 2026 for ₹1.20 crore (after meeting 24-month holding). Holding period: 28 months → LTCG.</p>
            <div class="formula-box">
                Sale: ₹1,20,00,000<br>
                Cost: ₹80,00,000<br>
                LTCG: ₹40,00,000<br>
                Tax: 12.5% × ₹40,00,000 = ₹5,00,000<br>
                Cess (4%): ₹20,000<br>
                <span class="label">Total Payable: ₹5,20,000</span>
            </div>
            <p>Indexation is unavailable because the property was acquired on or after 23 July 2024.</p>

            <h3>Example 4 — Debt Mutual Fund (Post-1-April-2023)</h3>
            <p>Invested ₹5 lakh in a debt mutual fund on 10 May 2023. Sold on 15 June 2026 for ₹6 lakh. Holding: 37 months. Despite long holding, Section 50AA treats this as slab-rate income (Budget 2023 change).</p>
            <div class="formula-box">
                Gain: ₹1,00,000<br>
                Added to taxable income at slab rate (e.g., 30% slab) → Tax: ₹30,000<br>
                Cess (4%): ₹1,200<br>
                <span class="label">Total Payable: ₹31,200</span>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About Capital Gains Tax</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What changed in capital gains tax from 23 July 2024?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Finance (No. 2) Act 2024 introduced major changes effective 23 July 2024. STCG on listed equity and equity mutual funds rose from 15 percent to 20 percent under Section 111A. LTCG on listed equity rose from 10 percent to 12.5 percent above ₹1.25 lakh under Section 112A. Indexation benefit was removed for most assets, with the LTCG rate harmonised at 12.5 percent without indexation.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What are the STCG and LTCG rates for equity in FY 2025-26?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For listed equity shares and equity-oriented mutual funds in FY 2025-26, STCG (held 12 months or less) is taxed at 20 percent under Section 111A provided STT was paid. LTCG (held more than 12 months) is taxed at 12.5 percent on gains above ₹1.25 lakh under Section 112A. Both rates apply only when STT is paid on the transaction.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the property grandfathering option for capital gains?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For residential property and land acquired before 23 July 2024 and sold on or after that date, resident individuals and HUFs can choose between two methods: 12.5 percent without indexation, or 20 percent with cost inflation index (CII) indexation. The lower tax option applies. This grandfathering is unavailable for property acquired on or after 23 July 2024 — only the 12.5 percent without indexation rate applies.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How are debt mutual funds taxed for capital gains?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Debt mutual funds purchased on or after 1 April 2023 are taxed under Section 50AA — gains are added to your income and taxed at your slab rate, regardless of holding period. Indexation and concessional LTCG rates do not apply. Debt mutual funds purchased before 1 April 2023 follow legacy rules: STCG at slab rates if held up to 24 months, LTCG at 12.5 percent without indexation if held longer.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What are the holding period thresholds after the Finance Act 2024?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Holding periods are simplified into two buckets effective 23 July 2024. Listed securities — including equity shares, equity mutual funds, listed bonds, and units of business trusts (REITs, InvITs) — qualify as long-term after 12 months. All other assets — property, gold, unlisted shares, gold mutual funds, and debt mutual funds — require 24 months for long-term classification. The earlier 36-month threshold is removed.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is gold taxed for capital gains in FY 2025-26?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Physical gold, digital gold, and gold mutual funds held more than 24 months attract LTCG at 12.5 percent without indexation. STCG (held 24 months or less) is added to income and taxed at slab rates. Listed Gold ETFs follow listed-security rules — 12-month threshold, LTCG at 12.5 percent. Sovereign Gold Bonds redeemed at 8-year maturity through RBI are fully exempt from capital gains tax.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can I claim Section 87A rebate against capital gains tax?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. Section 87A rebate applies only to tax computed at slab rates. Capital gains taxed at special rates — Section 111A, Section 112, Section 112A — are excluded from the rebate. Even if your total income falls within the ₹12 lakh new regime threshold or ₹5 lakh old regime threshold, the portion of tax arising from special-rate gains must be paid in full plus 4 percent cess.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the LTCG exemption limit on equity for FY 2025-26?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Section 112A, the first ₹1,25,000 of LTCG on listed equity shares and equity-oriented mutual funds in a financial year is exempt from tax. This was raised from ₹1,00,000 by the Finance (No. 2) Act 2024. Only LTCG above this threshold is taxed at 12.5 percent. The exemption is per assessee per financial year and applies across all eligible equity holdings combined.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is grandfathering for equity acquired before 1 February 2018?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For listed equity shares and equity mutual funds acquired before 1 February 2018 and sold on or after 1 April 2018, gains accrued up to 31 January 2018 are grandfathered. The cost of acquisition is the higher of actual cost or fair market value on 31 January 2018, capped at sale price. This protects pre-LTCG-tax era gains. Use the highest quoted price on 31 January 2018 as FMV.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Which exemptions are available to save LTCG tax?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 54 exempts LTCG on residential property if reinvested in another residential property within 2 years (purchase) or 3 years (construction), capped at ₹10 crore. Section 54F provides similar relief for any LTCG reinvested in residential property. Section 54EC allows up to ₹50 lakh investment in NHAI or REC bonds within 6 months of sale, with a 5-year lock-in. Each has specific eligibility conditions.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How do I report capital gains in my ITR for FY 2025-26?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Capital gains are reported in Schedule CG of ITR-2 (for individuals or HUF without business income) or ITR-3 (with business income). Each asset class — equity, property, gold, debt — has separate rows. Reconcile against AIS using our AIS Reconciliation Tool before filing. Broker contract notes, sale deeds, and purchase invoices must be retained for 6 assessment years to defend any Section 143 scrutiny.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Will capital gains rules change under the Income Tax Act 2025?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Income Tax Act 2025, effective from 1 April 2026, retains the substance of the post-23-July-2024 capital gains framework with renumbered sections. For FY 2025-26 returns filed in 2026, current Sections 111A, 112, and 112A under the 1961 Act apply. Tax Year 2026-27 onwards (FY 2026-27 income) will reference the corresponding sections under the 2025 Act. Rates and holding periods are unchanged in the transition.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
    <h3>CA-Filed Capital Gains ITR</h3>
    <p>Get STCG/LTCG, indexation and Section 54 exemptions handled by a Chartered Accountant — fixed-fee.</p>
    <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Capital%20Gains%20Tax%20Calculator.%20I%20need%20help%20with%20capital%20gains%20tax%20%28STCG%2FLTCG%29.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Capital%20Gains%20Tax%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Capital%20Gains%20Tax%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20capital%20gains%20tax%20%28STCG%2FLTCG%29.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/itr-for-capital-gains" class="sidebar-link">ITR for Capital Gains <span class="arrow">→</span></a>
            <a href="/itr-for-property-sale" class="sidebar-link">ITR for Property Sale <span class="arrow">→</span></a>
            <a href="/itr-for-fno-traders" class="sidebar-link">ITR for F&O Traders <span class="arrow">→</span></a>
            <a href="/itr-for-crypto-traders" class="sidebar-link">ITR for Crypto Traders <span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
            <a href="/income-tax-notice" class="sidebar-link">Income Tax Notice Help <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/section-87a-rebate-calculator" class="sidebar-link">Section 87A Rebate Calculator <span class="arrow">→</span></a>
            <a href="/tools/old-vs-new-regime-calculator" class="sidebar-link">Old vs New Regime Calculator <span class="arrow">→</span></a>
            <a href="/tools/ais-reconciliation-tool" class="sidebar-link">AIS Reconciliation Tool <span class="arrow">→</span></a>
            <a href="/tools/hra-exemption-calculator" class="sidebar-link">HRA Exemption Calculator <span class="arrow">→</span></a>
            <a href="/tools/advance-tax-calculator" class="sidebar-link">Advance Tax Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/capital-gains-rules-2026-fmv-holding-period" class="sidebar-link">Capital Gains Rules 2026 — FMV & Holding <span class="arrow">→</span></a>
            <a href="/blog/capital-gains-exemption-section-54-54ec-54f" class="sidebar-link">Section 54 / 54F / 54EC Exemption Guide <span class="arrow">→</span></a>
            <a href="/blog/cost-inflation-index-2026-cii-table" class="sidebar-link">CII Table 2026 — Cost Inflation Index <span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>

<footer class="footer">
    © 2026 Patron Accounting LLP. All rights reserved.
</footer>

<script>
/* === PATRON tolerant numeric parser (handles Indian comma format, ₹ symbol, whitespace) === */
function parseINR(raw) {
    if (raw === undefined || raw === null) return NaN;
    var cleaned = String(raw).replace(/[,\s\u20B9]/g, '');
    if (cleaned === '') return NaN;
    var n = parseFloat(cleaned);
    return isFinite(n) ? n : NaN;
}
function pickPositive(parsed, fallback) {
    return (isFinite(parsed) && parsed > 0) ? parsed : fallback;
}

    // ========== STATE ==========
    let asset = 'equity';
    const PIVOT_DATE = new Date('2024-07-23'); // Finance Act 2024 effective date
    const FEB_2018 = new Date('2018-02-01');   // Equity grandfathering pivot
    const APR_2023 = new Date('2023-04-01');   // Debt MF Section 50AA pivot

    // CII (Cost Inflation Index) — base year 2001-02 = 100
    const CII = {
        2001: 100, 2002: 105, 2003: 109, 2004: 113, 2005: 117,
        2006: 122, 2007: 129, 2008: 137, 2009: 148, 2010: 167,
        2011: 184, 2012: 200, 2013: 220, 2014: 240, 2015: 254,
        2016: 264, 2017: 272, 2018: 280, 2019: 289, 2020: 301,
        2021: 317, 2022: 331, 2023: 348, 2024: 363, 2025: 376
    };

    // Holding period threshold (months) for LTCG by asset
    const LTCG_THRESHOLD = {
        equity: 12,
        property: 24,
        gold: 24,
        debt_mf: 24,    // applies only to pre-Apr-2023 purchases; post is always slab
        other: 24
    };

    // ========== UTILITIES ==========
    function fmtINR(num) {
        if (!isFinite(num)) return '—';
        return '₹' + Math.round(num).toLocaleString('en-IN');
    }
    function fmtPct(num) { return num + '%'; }

    function getFYStartYear(date) {
        const month = date.getMonth(); // 0-11; April = 3
        const year = date.getFullYear();
        return month < 3 ? year - 1 : year;
    }

    function holdingMonths(purchase, sale) {
        // Calendar-month difference (NOT days/30.4375).
        // Matches IT Act treatment of holding period and Excel DATEDIF semantics.
        // Returns a fractional months value where the integer part is the count of
        // FULL calendar months held and the fractional part represents partial month days.
        let years = sale.getFullYear() - purchase.getFullYear();
        let months = sale.getMonth() - purchase.getMonth();
        let days = sale.getDate() - purchase.getDate();
        let totalMonths = years * 12 + months;
        let denomMonth, denomYear;
        if (days < 0) {
            // Sale day-of-month earlier than purchase day-of-month → back off one full month.
            // The remaining "days" are reckoned against the month preceding sale.
            totalMonths -= 1;
            const prevMonthLastDay = new Date(sale.getFullYear(), sale.getMonth(), 0);
            days += prevMonthLastDay.getDate();
            // Denominator for fractional = days in that previous month
            denomYear = prevMonthLastDay.getFullYear();
            denomMonth = prevMonthLastDay.getMonth();
        } else {
            // Days are reckoned within the sale's own month.
            denomYear = sale.getFullYear();
            denomMonth = sale.getMonth();
        }
        // Days in the relevant month
        const daysInDenomMonth = new Date(denomYear, denomMonth + 1, 0).getDate();
        return totalMonths + (days / daysInDenomMonth);
    }

    function holdingDays(purchase, sale) {
        // Useful for short-term cases where days matter
        const ms = sale - purchase;
        return Math.floor(ms / (1000 * 60 * 60 * 24));
    }

    function holdingPeriodLabel(months) {
        // months can be fractional. Integer part = full calendar months held.
        const fullMonths = Math.floor(months);
        if (fullMonths < 12) {
            // Show months + days remainder
            // Approx fractional days using avg month length 30.4375 — fine for short label use
            const d = Math.round((months - fullMonths) * 30.4375);
            return fullMonths + 'm ' + d + 'd';
        }
        const y = Math.floor(fullMonths / 12);
        const remM = fullMonths - y * 12;
        return y + 'y ' + remM + 'm';
    }

    // ========== UI HANDLERS ==========
    function setAsset(btn) {
        const el = btn.closest('.asset-btn') || btn;
        asset = el.dataset.value;
        el.parentElement.querySelectorAll('.asset-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
        // Show/hide conditional inputs
        document.getElementById('equityGrandfatherRow').style.display = (asset === 'equity') ? 'grid' : 'none';
    }

    // ========== CORE CALCULATION ==========
    function calculate() {
        const purchaseStr = document.getElementById('purchaseDate').value;
        const saleStr = document.getElementById('saleDate').value;
        const purchasePrice = parseINR(document.getElementById('purchasePrice').value);
        const salePrice = parseINR(document.getElementById('salePrice').value);

        if (!purchaseStr || !saleStr) {
            alert('Please enter both purchase and sale dates.');
            return;
        }
        if (!isFinite(purchasePrice) || purchasePrice < 0 || !isFinite(salePrice) || salePrice < 0) {
            alert('Please enter valid (non-negative) purchase and sale prices.');
            return;
        }
        const purchaseDate = new Date(purchaseStr);
        const saleDate = new Date(saleStr);
        if (saleDate < purchaseDate) {
            alert('Sale date must be on or after the purchase date.');
            return;
        }

        const months = holdingMonths(purchaseDate, saleDate);
        const isPostPivot = saleDate >= PIVOT_DATE;
        const isLTCG = months > LTCG_THRESHOLD[asset];

        // Apply equity grandfathering if applicable (pre-Feb-2018 acquisition)
        let effectiveCost = purchasePrice;
        let grandfatheringNote = '';
        if (asset === 'equity' && isLTCG && purchaseDate < FEB_2018) {
            const fmv = parseINR(document.getElementById('fmvJan2018').value);
            if (isFinite(fmv) && fmv > 0) {
                // Multiply by units... but we only have total purchase price. Treat fmv as TOTAL FMV input.
                // Simpler model: ask user for total purchase, total sale, and total FMV on 31 Jan 2018
                // Cost of acquisition = MAX(actual cost, MIN(FMV, sale price))
                const grandfatheredCost = Math.max(purchasePrice, Math.min(fmv, salePrice));
                if (grandfatheredCost > purchasePrice) {
                    effectiveCost = grandfatheredCost;
                    grandfatheringNote = ' Grandfathering applied — cost stepped up from ' + fmtINR(purchasePrice) + ' to ' + fmtINR(effectiveCost) + ' (FMV on 31 Jan 2018 capped at sale price).';
                }
            }
        }

        // Asset-specific tax computation
        const result = computeTax(asset, isLTCG, isPostPivot, effectiveCost, salePrice, purchaseDate, saleDate);

        // Render
        renderResults(result, asset, isLTCG, months, grandfatheringNote, purchasePrice, effectiveCost, salePrice);
    }

    function computeTax(asset, isLTCG, isPostPivot, cost, sale, purchaseDate, saleDate) {
        const result = {
            asset, isLTCG, isPostPivot,
            gain: 0, taxableGain: 0,
            rate: 0, rateLabel: '', section: '',
            tax: 0, cess: 0, total: 0,
            indexedCost: null, withIndexTax: null, withoutIndexTax: null,
            grandfatherCompare: null,
            slabBased: false,
            note: ''
        };
        const slabRate = parseINR(document.getElementById('slabRate').value) || 30;

        const grossGain = sale - cost;

        // ---- Equity / Equity MF ----
        if (asset === 'equity') {
            if (isLTCG) {
                // LTCG: 12.5% above ₹1.25L (Sec 112A) — assumes post-23-July-2024 sale
                if (isPostPivot) {
                    result.rate = 12.5;
                    result.rateLabel = '12.5% above ₹1.25L exemption';
                    result.section = 'Section 112A';
                    result.gain = grossGain;
                    result.taxableGain = Math.max(0, grossGain - 125000);
                    result.tax = result.taxableGain * 0.125;
                    result.note = grossGain <= 125000 ? 'Entire LTCG within ₹1.25L exemption — no tax.' : 'First ₹1,25,000 of LTCG is exempt under Section 112A; balance taxed at 12.5%.';
                } else {
                    // Pre-23-July-2024 sale: old rate 10% above ₹1L
                    result.rate = 10;
                    result.rateLabel = '10% above ₹1L (pre-23-July-2024)';
                    result.section = 'Section 112A (old rate)';
                    result.gain = grossGain;
                    result.taxableGain = Math.max(0, grossGain - 100000);
                    result.tax = result.taxableGain * 0.10;
                    result.note = 'Pre-23-July-2024 LTCG: 10% on gains above ₹1L exemption.';
                }
            } else {
                // STCG
                if (isPostPivot) {
                    result.rate = 20;
                    result.rateLabel = '20% (post-23-July-2024)';
                    result.section = 'Section 111A';
                    result.gain = grossGain;
                    result.taxableGain = grossGain;
                    result.tax = result.taxableGain * 0.20;
                    result.note = 'STCG on listed equity at 20% — STT must have been paid.';
                } else {
                    result.rate = 15;
                    result.rateLabel = '15% (pre-23-July-2024)';
                    result.section = 'Section 111A (old rate)';
                    result.gain = grossGain;
                    result.taxableGain = grossGain;
                    result.tax = result.taxableGain * 0.15;
                    result.note = 'Pre-23-July-2024 STCG: 15%.';
                }
            }
        }
        // ---- Property ----
        else if (asset === 'property') {
            result.gain = grossGain;
            if (isLTCG) {
                if (isPostPivot && purchaseDate < PIVOT_DATE) {
                    // Grandfathering: choose between 12.5% no-index and 20% with-index
                    const purchaseFY = getFYStartYear(purchaseDate);
                    const saleFY = getFYStartYear(saleDate);
                    let indexedCost = cost;
                    let withIndexAvailable = false;
                    if (CII[purchaseFY] && CII[saleFY]) {
                        indexedCost = cost * CII[saleFY] / CII[purchaseFY];
                        withIndexAvailable = true;
                    }
                    const withoutIndexGain = Math.max(0, sale - cost);
                    const withoutIndexTax = withoutIndexGain * 0.125;
                    const withIndexGain = Math.max(0, sale - indexedCost);
                    const withIndexTax = withIndexGain * 0.20;

                    result.indexedCost = indexedCost;
                    result.withoutIndexTax = withoutIndexTax;
                    result.withIndexTax = withIndexAvailable ? withIndexTax : null;

                    if (withIndexAvailable && withIndexTax < withoutIndexTax) {
                        result.rate = 20;
                        result.rateLabel = '20% with indexation (grandfathering)';
                        result.section = 'Section 112 (with indexation)';
                        result.taxableGain = withIndexGain;
                        result.tax = withIndexTax;
                        result.grandfatherCompare = {
                            withIndex: withIndexTax,
                            withoutIndex: withoutIndexTax,
                            winner: 'withIndex',
                            indexedCost: indexedCost,
                            ciiPurchase: CII[purchaseFY],
                            ciiSale: CII[saleFY]
                        };
                        result.note = 'Property grandfathering — 20% with indexation produces lower tax than 12.5% no-indexation.';
                    } else {
                        result.rate = 12.5;
                        result.rateLabel = '12.5% without indexation';
                        result.section = 'Section 112';
                        result.taxableGain = withoutIndexGain;
                        result.tax = withoutIndexTax;
                        if (withIndexAvailable) {
                            result.grandfatherCompare = {
                                withIndex: withIndexTax,
                                withoutIndex: withoutIndexTax,
                                winner: 'withoutIndex',
                                indexedCost: indexedCost,
                                ciiPurchase: CII[purchaseFY],
                                ciiSale: CII[saleFY]
                            };
                            result.note = 'Property grandfathering applied — 12.5% no-indexation is the lower-tax option.';
                        } else {
                            result.note = 'Indexation table unavailable for the purchase year. Showing 12.5% no-indexation default.';
                        }
                    }
                } else if (isPostPivot) {
                    // Property bought after 23 July 2024 — only 12.5% no-indexation
                    result.rate = 12.5;
                    result.rateLabel = '12.5% without indexation (no grandfathering)';
                    result.section = 'Section 112';
                    result.taxableGain = grossGain;
                    result.tax = grossGain * 0.125;
                    result.note = 'Indexation unavailable — property acquired on or after 23 July 2024.';
                } else {
                    // Pre-23-July-2024 sale: old rule 20% with indexation
                    const purchaseFY = getFYStartYear(purchaseDate);
                    const saleFY = getFYStartYear(saleDate);
                    if (CII[purchaseFY] && CII[saleFY]) {
                        const indexedCost = cost * CII[saleFY] / CII[purchaseFY];
                        result.indexedCost = indexedCost;
                        result.taxableGain = Math.max(0, sale - indexedCost);
                        result.tax = result.taxableGain * 0.20;
                    } else {
                        result.taxableGain = grossGain;
                        result.tax = grossGain * 0.20;
                    }
                    result.rate = 20;
                    result.rateLabel = '20% with indexation (pre-23-July-2024)';
                    result.section = 'Section 112 (old rate)';
                    result.note = 'Pre-23-July-2024 sale: 20% with indexation under Section 48(2).';
                }
            } else {
                // STCG on property: slab rate
                result.rate = slabRate;
                result.rateLabel = slabRate + '% (slab rate)';
                result.section = 'Slab Rate';
                result.taxableGain = grossGain;
                result.tax = grossGain * (slabRate / 100);
                result.slabBased = true;
                result.note = 'STCG on property is added to your income and taxed at marginal slab rate.';
            }
        }
        // ---- Gold ----
        else if (asset === 'gold') {
            result.gain = grossGain;
            if (isLTCG) {
                result.rate = 12.5;
                result.rateLabel = isPostPivot ? '12.5% without indexation' : '20% with indexation (pre-23-July-2024)';
                result.section = 'Section 112';
                if (!isPostPivot) {
                    // Pre-pivot: 20% with indexation
                    const purchaseFY = getFYStartYear(purchaseDate);
                    const saleFY = getFYStartYear(saleDate);
                    if (CII[purchaseFY] && CII[saleFY]) {
                        const indexedCost = cost * CII[saleFY] / CII[purchaseFY];
                        result.indexedCost = indexedCost;
                        result.taxableGain = Math.max(0, sale - indexedCost);
                        result.tax = result.taxableGain * 0.20;
                        result.rate = 20;
                    } else {
                        result.taxableGain = grossGain;
                        result.tax = grossGain * 0.20;
                        result.rate = 20;
                    }
                } else {
                    result.taxableGain = grossGain;
                    result.tax = grossGain * 0.125;
                }
                result.note = isPostPivot ? 'Gold LTCG at 12.5% without indexation post-23-July-2024.' : 'Pre-pivot gold LTCG at 20% with indexation.';
            } else {
                result.rate = slabRate;
                result.rateLabel = slabRate + '% (slab rate)';
                result.section = 'Slab Rate';
                result.taxableGain = grossGain;
                result.tax = grossGain * (slabRate / 100);
                result.slabBased = true;
                result.note = 'STCG on gold is taxed at slab rate.';
            }
        }
        // ---- Debt MF ----
        else if (asset === 'debt_mf') {
            result.gain = grossGain;
            if (purchaseDate >= APR_2023) {
                // Section 50AA — always slab regardless of holding
                result.rate = slabRate;
                result.rateLabel = slabRate + '% (slab rate, Section 50AA)';
                result.section = 'Section 50AA';
                result.taxableGain = grossGain;
                result.tax = grossGain * (slabRate / 100);
                result.slabBased = true;
                result.isLTCG = false; // Override - always slab for post-Apr-2023
                result.note = 'Debt MF purchased on or after 1 April 2023 — Section 50AA treats all gains as slab-rate income, regardless of holding period.';
            } else if (isLTCG) {
                // Pre-Apr-2023 + held >24m → 12.5% no indexation (post-pivot) or 20% with indexation (pre-pivot)
                if (isPostPivot) {
                    result.rate = 12.5;
                    result.rateLabel = '12.5% without indexation';
                    result.section = 'Section 112';
                    result.taxableGain = grossGain;
                    result.tax = grossGain * 0.125;
                } else {
                    const purchaseFY = getFYStartYear(purchaseDate);
                    const saleFY = getFYStartYear(saleDate);
                    if (CII[purchaseFY] && CII[saleFY]) {
                        const indexedCost = cost * CII[saleFY] / CII[purchaseFY];
                        result.indexedCost = indexedCost;
                        result.taxableGain = Math.max(0, sale - indexedCost);
                    } else {
                        result.taxableGain = grossGain;
                    }
                    result.tax = result.taxableGain * 0.20;
                    result.rate = 20;
                    result.rateLabel = '20% with indexation (pre-23-July-2024)';
                    result.section = 'Section 112 (old rate)';
                }
                result.note = 'Pre-1-April-2023 debt MF held over 24 months — concessional LTCG applies.';
            } else {
                result.rate = slabRate;
                result.rateLabel = slabRate + '% (slab rate)';
                result.section = 'Slab Rate';
                result.taxableGain = grossGain;
                result.tax = grossGain * (slabRate / 100);
                result.slabBased = true;
                result.note = 'Pre-1-April-2023 debt MF held 24 months or less — STCG at slab rate.';
            }
        }
        // ---- Other (Unlisted Shares / Bonds) ----
        else if (asset === 'other') {
            result.gain = grossGain;
            if (isLTCG) {
                if (isPostPivot) {
                    result.rate = 12.5;
                    result.rateLabel = '12.5% without indexation';
                    result.section = 'Section 112';
                    result.taxableGain = grossGain;
                    result.tax = grossGain * 0.125;
                } else {
                    const purchaseFY = getFYStartYear(purchaseDate);
                    const saleFY = getFYStartYear(saleDate);
                    if (CII[purchaseFY] && CII[saleFY]) {
                        const indexedCost = cost * CII[saleFY] / CII[purchaseFY];
                        result.indexedCost = indexedCost;
                        result.taxableGain = Math.max(0, sale - indexedCost);
                    } else {
                        result.taxableGain = grossGain;
                    }
                    result.tax = result.taxableGain * 0.20;
                    result.rate = 20;
                    result.rateLabel = '20% with indexation (pre-23-July-2024)';
                    result.section = 'Section 112 (old rate)';
                }
                result.note = 'Unlisted shares / other LTCG.';
            } else {
                result.rate = slabRate;
                result.rateLabel = slabRate + '% (slab rate)';
                result.section = 'Slab Rate';
                result.taxableGain = grossGain;
                result.tax = grossGain * (slabRate / 100);
                result.slabBased = true;
                result.note = 'STCG on unlisted shares / bonds — slab rate.';
            }
        }

        result.tax = Math.round(result.tax);
        result.cess = Math.round(result.tax * 0.04);
        result.total = result.tax + result.cess;
        return result;
    }

    function renderResults(result, asset, isLTCG, months, grandfatheringNote, purchasePrice, effectiveCost, salePrice) {
        // Show slab rate row if applicable
        document.getElementById('slabRateRow').style.display = result.slabBased ? 'block' : 'none';

        // Classification banner
        const tag = document.getElementById('clfTag');
        const classification = result.isLTCG ? 'LTCG' : 'STCG';
        tag.className = 'clf-tag ' + classification.toLowerCase();
        tag.textContent = classification;
        document.getElementById('clfDetail').innerHTML =
            '<strong>' + classification + ' under ' + result.section + '.</strong> ' + result.note + grandfatheringNote;

        // Result cards
        document.getElementById('resHolding').textContent = holdingPeriodLabel(months);
        document.getElementById('resGain').textContent = fmtINR(result.gain);
        document.getElementById('resRate').textContent = result.rateLabel;
        document.getElementById('resTax').textContent = fmtINR(result.tax);
        document.getElementById('resCess').textContent = fmtINR(result.cess);
        document.getElementById('resTotal').textContent = fmtINR(result.total);

        // Grandfather compare (property only)
        const gfCompare = document.getElementById('gfCompare');
        const gfRows = document.getElementById('gfRows');
        if (result.grandfatherCompare) {
            gfCompare.style.display = 'block';
            const gc = result.grandfatherCompare;
            gfRows.innerHTML = '';

            // Row 1: 12.5% no indexation
            const row1 = document.createElement('div');
            row1.className = 'gf-row' + (gc.winner === 'withoutIndex' ? ' winner' : '');
            row1.innerHTML = '<span>12.5% without indexation</span><span>Gain: ' + fmtINR(salePrice - effectiveCost) + '</span><span>' + fmtINR(gc.withoutIndex) + '</span>';
            gfRows.appendChild(row1);

            // Row 2: 20% with indexation
            const row2 = document.createElement('div');
            row2.className = 'gf-row' + (gc.winner === 'withIndex' ? ' winner' : '');
            row2.innerHTML = '<span>20% with indexation (Indexed cost: ' + fmtINR(gc.indexedCost) + ', CII ' + gc.ciiPurchase + '→' + gc.ciiSale + ')</span><span>Gain: ' + fmtINR(Math.max(0, salePrice - gc.indexedCost)) + '</span><span>' + fmtINR(gc.withIndex) + '</span>';
            gfRows.appendChild(row2);
        } else {
            gfCompare.style.display = 'none';
        }

        // Breakdown
        const rows = document.getElementById('breakdownRows');
        rows.innerHTML = '';
        const r = (lbl, val) => {
            const d = document.createElement('div');
            d.className = 'breakdown-row';
            d.innerHTML = '<span class="breakdown-label">' + lbl + '</span><span class="breakdown-value">' + val + '</span>';
            rows.appendChild(d);
        };
        r('Sale Consideration', fmtINR(salePrice));
        r('Cost of Acquisition' + (effectiveCost !== purchasePrice ? ' (after grandfathering)' : ''), fmtINR(effectiveCost));
        if (result.indexedCost) {
            r('Indexed Cost', fmtINR(result.indexedCost));
        }
        r('Capital Gain', fmtINR(result.gain));
        if (result.taxableGain !== result.gain) {
            r('Taxable Gain (after exemption / indexation)', fmtINR(result.taxableGain));
        }
        r('Tax Rate', result.rateLabel);
        const trow = document.createElement('div');
        trow.className = 'breakdown-row total';
        trow.innerHTML = '<span class="breakdown-label">Tax Before Cess</span><span class="breakdown-value">' + fmtINR(result.tax) + '</span>';
        rows.appendChild(trow);
        r('Add: Health & Education Cess (4%)', fmtINR(result.cess));
        const final = document.createElement('div');
        final.className = 'breakdown-row total';
        final.innerHTML = '<span class="breakdown-label">Total Tax Payable</span><span class="breakdown-value">' + fmtINR(result.total) + '</span>';
        rows.appendChild(final);

        // ===== Reinvestment wizard =====
        configureReinvestWizard(result, asset, salePrice);

        const rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        setTimeout(() => { rs.scrollIntoView({ behavior: 'smooth', block: 'start' }); }, 100);
    }

    // Cache last result for wizard recomputation
    let lastResult = null;
    let lastSalePrice = 0;
    let lastAsset = 'equity';

    function configureReinvestWizard(result, asset, salePrice) {
        const wizard = document.getElementById('reinvestWizard');
        const sec54 = document.getElementById('rwSec54');
        const sec54F = document.getElementById('rwSec54F');
        const sec54EC = document.getElementById('rwSec54EC');
        const rwResult = document.getElementById('rwResult');

        // Reset wizard inputs and result on every fresh calc
        document.getElementById('reinv54').value = '';
        document.getElementById('reinv54F').value = '';
        document.getElementById('reinv54EC').value = '';
        rwResult.style.display = 'none';

        // Only show wizard if LTCG with positive taxable gain
        if (!result.isLTCG || !result.taxableGain || result.taxableGain <= 0) {
            wizard.style.display = 'none';
            return;
        }

        // Cache for recompute
        lastResult = result;
        lastSalePrice = salePrice;
        lastAsset = asset;

        // Configure which sections appear based on asset
        // 54: residential property reinvested in residential property (we don't ask res vs land — show for property)
        // 54F: any other long-term asset (non-property) reinvested in residential property
        // 54EC: land/building → bonds — show for property
        if (asset === 'property') {
            sec54.style.display = 'block';
            sec54F.style.display = 'block'; // shown for property too (in case it was land/non-residential)
            sec54EC.style.display = 'block';
        } else {
            sec54.style.display = 'none';
            sec54F.style.display = 'block';
            sec54EC.style.display = 'none';
        }
        wizard.style.display = 'block';
    }

    function computeReinvestment() {
        if (!lastResult) return;
        const ltcg = lastResult.taxableGain;
        const grossLtcg = lastResult.gain;
        const isProperty = (lastAsset === 'property');

        const reinv54 = parseINR(document.getElementById('reinv54').value) || 0;
        const reinv54F = parseINR(document.getElementById('reinv54F').value) || 0;
        const reinv54EC = parseINR(document.getElementById('reinv54EC').value) || 0;

        // Compute exemptions
        const TEN_CR = 100000000;
        const FIFTY_L = 5000000;

        // Section 54: min(reinvested, LTCG, ₹10cr) — only for property
        const exempt54 = isProperty ? Math.min(reinv54, ltcg, TEN_CR) : 0;

        // Section 54F: pro-rata
        // Exemption = LTCG × (Reinvested / Net Consideration)
        // Capped at LTCG and ₹10cr
        let exempt54F = 0;
        if (reinv54F > 0 && lastSalePrice > 0) {
            exempt54F = Math.min(ltcg * (reinv54F / lastSalePrice), ltcg, TEN_CR);
        }

        // Section 54EC: min(invested, LTCG, ₹50L) — only for property
        const exempt54EC = isProperty ? Math.min(reinv54EC, ltcg, FIFTY_L) : 0;

        let totalExemption = exempt54 + exempt54F + exempt54EC;
        // Cap total at LTCG (can't exempt more than the gain)
        if (totalExemption > ltcg) totalExemption = ltcg;

        const netLtcg = Math.max(0, ltcg - totalExemption);

        // Recompute tax on netLtcg using same rate that applied originally
        const newTax = Math.round(netLtcg * (lastResult.rate / 100));
        const newCess = Math.round(newTax * 0.04);
        const newTotal = newTax + newCess;

        const originalTotal = lastResult.total;
        const savings = originalTotal - newTotal;

        // Render
        const grid = document.getElementById('rwResultGrid');
        const rows = [];
        if (exempt54 > 0) rows.push(['Section 54 Exemption', fmtINR(exempt54)]);
        if (exempt54F > 0) rows.push(['Section 54F Exemption', fmtINR(exempt54F)]);
        if (exempt54EC > 0) rows.push(['Section 54EC Exemption', fmtINR(exempt54EC)]);
        rows.push(['Total Exemption', fmtINR(totalExemption)]);
        rows.push(['Original Taxable LTCG', fmtINR(ltcg)]);
        rows.push(['Net Taxable LTCG (after exemption)', fmtINR(netLtcg)]);
        rows.push(['Tax @ ' + lastResult.rate + '%', fmtINR(newTax)]);
        rows.push(['Cess (4%)', fmtINR(newCess)]);
        rows.push(['New Total Tax Payable', fmtINR(newTotal)]);
        grid.innerHTML = rows.map(r => '<div class="rw-result-row"><span class="lbl">' + r[0] + '</span><span class="val">' + r[1] + '</span></div>').join('');

        const sav = document.getElementById('rwSavings');
        if (savings > 0) {
            sav.innerHTML = 'Tax saved via reinvestment: <span class="amount">' + fmtINR(savings) + '</span>';
        } else if (savings === 0 && totalExemption === 0) {
            sav.innerHTML = 'Enter reinvestment amounts above to see exemption.';
        } else {
            sav.innerHTML = 'Reinvestment fully eliminates LTCG tax.';
        }

        document.getElementById('rwResult').style.display = 'block';
    }

    function resetCalc() {
        document.getElementById('purchaseDate').value = '';
        document.getElementById('saleDate').value = '';
        document.getElementById('purchasePrice').value = '';
        document.getElementById('salePrice').value = '';
        document.getElementById('slabRate').value = 30;
        document.getElementById('fmvJan2018').value = '';
        // Clear wizard inputs
        document.getElementById('reinv54').value = '';
        document.getElementById('reinv54F').value = '';
        document.getElementById('reinv54EC').value = '';
        const rwResult = document.getElementById('rwResult');
        if (rwResult) rwResult.style.display = 'none';
        const wizard = document.getElementById('reinvestWizard');
        if (wizard) wizard.style.display = 'none';
        lastResult = null;
        document.getElementById('resultSection').classList.remove('visible');
        asset = 'equity';
        document.querySelectorAll('.asset-btn').forEach((b, i) => {
            b.classList.toggle('active', i === 0);
        });
        document.getElementById('equityGrandfatherRow').style.display = 'grid';
        document.getElementById('slabRateRow').style.display = 'none';
        document.querySelector('.calc-card').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function toggleFaq(e) {
        const btn = e.closest ? (e.closest('.faq-question') || e) : e;
        const item = btn.closest('.faq-item');
        if (!item) return;
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    }

    ['purchasePrice','salePrice','slabRate','fmvJan2018'].forEach(id => {
        const el = document.getElementById(id);
        if (el) el.addEventListener('keydown', e => { if (e.key === 'Enter') calculate(); });
    });

    // Show equity grandfathering by default (asset is equity)
    document.getElementById('equityGrandfatherRow').style.display = 'grid';

    // Sticky nav active state
    const sections = document.querySelectorAll('[id]');
    const navLinks = document.querySelectorAll('.toc-nav a');
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(s => {
            const top = s.offsetTop - 100;
            if (window.pageYOffset >= top) current = s.getAttribute('id');
        });
        navLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === '#' + current);
        });
    });
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

