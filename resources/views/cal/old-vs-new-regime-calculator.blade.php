
@extends('layouts.app')
@section('meta')
    <title>Old vs New Regime Calculator | Compare FY 2025-26 Tax</title>
    <meta name="description" content="Old vs New Tax Regime Calculator: side-by-side comparison with break-even point for FY 2025-26 (AY 2026-27). Free CA-reviewed tool with savings.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/old-vs-new-regime-calculator">

    <meta property="og:title" content="Old vs New Tax Regime Calculator FY 2025-26 — Compare Side-by-Side">
    <meta property="og:description" content="Compare Old and New tax regimes side-by-side for FY 2025-26 (AY 2026-27) with break-even analysis, deduction-aware savings, and personalised regime recommendation.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/old-vs-new-regime-calculator">
    <meta property="og:image" content="/tools/og/old-vs-new-regime-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Old vs New Tax Regime Calculator FY 2025-26 — Compare Side-by-Side">
    <meta name="twitter:description" content="Side-by-side regime comparison with break-even point for FY 2025-26. Find which regime saves more tax for you.">
    <meta name="twitter:image" content="/tools/og/old-vs-new-regime-calculator.png">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Old vs New Tax Regime Calculator",
      "description": "Old vs New Tax Regime Calculator compares income tax liability side-by-side under both regimes for FY 2025-26 (AY 2026-27). New regime: ₹4L-₹24L slabs (0/5/10/15/20/25/30%), ₹75K standard deduction, ₹60K Section 87A rebate up to ₹12L taxable income, surcharge capped at 25%. Old regime: ₹2.5L/₹3L/₹5L exemption by age, slabs 5/20/30%, ₹50K standard deduction, ₹12.5K Section 87A rebate up to ₹5L, all 80C/80D/HRA/home loan deductions allowed, surcharge up to 37%. Calculator computes tax including 4% cess, applies marginal relief, identifies the better regime, and shows the deduction break-even threshold (~₹3.75L) for personalised regime planning.",
      "url": "/tools/old-vs-new-regime-calculator",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "Any",
      "inLanguage": "en-IN",
      "isAccessibleForFree": true,
      "datePublished": "2026-05-06T08:00:00+05:30",
      "dateModified": "2026-05-08T08:00:00+05:30",
      "offers": {"@type": "Offer", "price": "0", "priceCurrency": "INR"},
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
        {"@type": "ListItem", "position": 3, "name": "Old vs New Regime Calculator", "item": "/tools/old-vs-new-regime-calculator"}
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
          "name": "Which regime is better for FY 2025-26 — old or new?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It depends on your deductions. The new regime has lower slab rates and a ₹60,000 Section 87A rebate making income up to ₹12 lakh effectively tax-free. The old regime allows HRA, 80C up to ₹1.5L, 80D, home loan interest, and other deductions but with higher slab rates. The break-even point is approximately ₹3.75 lakh in total deductions. Below that, new regime usually saves more. Above that, old regime may still win — particularly if you have a large home loan."
          }
        },
        {
          "@type": "Question",
          "name": "What are the new regime tax slabs for FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "New regime slabs for FY 2025-26 (AY 2026-27) under Section 115BAC: 0 to ₹4 lakh — Nil; ₹4 to ₹8 lakh — 5%; ₹8 to ₹12 lakh — 10%; ₹12 to ₹16 lakh — 15%; ₹16 to ₹20 lakh — 20%; ₹20 to ₹24 lakh — 25%; above ₹24 lakh — 30%. Slabs apply uniformly to all individuals regardless of age. Standard deduction ₹75,000 for salaried, plus 4% cess. Surcharge above ₹50L is capped at 25%."
          }
        },
        {
          "@type": "Question",
          "name": "What are the old regime tax slabs for FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Old regime slabs are unchanged for FY 2025-26. For individuals below 60: 0 to ₹2.5L — Nil; ₹2.5 to ₹5L — 5%; ₹5 to ₹10L — 20%; above ₹10L — 30%. Senior citizens (60-80): basic exemption up to ₹3 lakh. Super senior citizens (80+): up to ₹5 lakh. Standard deduction ₹50,000 for salaried, ₹50,000 for pensioners. All Chapter VI-A deductions (80C, 80D, 80E, 80G, etc.), HRA exemption, and home loan interest available. Surcharge up to 37% above ₹5 crore income."
          }
        },
        {
          "@type": "Question",
          "name": "Is the new regime the default for FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The new regime is the default tax regime from FY 2024-25 under Section 115BAC of the Income Tax Act 1961. If you do not actively opt for the old regime, your employer will deduct TDS under the new regime. Salaried individuals can switch between regimes annually at the time of ITR filing. Business and professional income earners must exercise the option carefully using Form 10IEA — once opted in or out, switching back has restrictions."
          }
        },
        {
          "@type": "Question",
          "name": "What deductions are allowed in the new regime?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The new regime allows only a limited set of deductions: standard deduction of ₹75,000 for salaried employees and pensioners, employer NPS contribution under Section 80CCD(2) up to 14% of salary for government and 10% private, transport allowance for specially-abled, conveyance allowance for tour-related travel, and family pension deduction up to ₹25,000. HRA, LTA, Section 80C, 80D, 80E, home loan interest under Section 24(b), and most other deductions are NOT available."
          }
        },
        {
          "@type": "Question",
          "name": "How is Section 87A rebate different between regimes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 87A rebate amounts differ significantly. In the new regime for FY 2025-26: up to ₹60,000 rebate if total taxable income does not exceed ₹12,00,000. Marginal relief applies between ₹12L and ~₹12.7L of taxable income. In the old regime: up to ₹12,500 rebate if total taxable income does not exceed ₹5,00,000. Both rebates apply only to resident individuals. Capital gains taxed at special rates under Sections 111A and 112A do not qualify for the rebate."
          }
        },
        {
          "@type": "Question",
          "name": "What is the break-even deduction point between old and new regime?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The break-even deduction threshold is approximately ₹3.75 lakh for most income levels. Below this, the new regime almost always saves more tax due to its lower slabs and higher rebate. Above ₹3.75L in total deductions (sum of 80C, 80D, HRA exemption, home loan interest, NPS, LTA), the old regime starts saving more. For income above ₹15L with a home loan plus rent paid, the old regime often remains attractive. Use the calculator above for your specific case."
          }
        },
        {
          "@type": "Question",
          "name": "How does surcharge differ between regimes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Surcharge rates apply on tax (before cess) for high-income taxpayers. New regime: 10% above ₹50L, 15% above ₹1cr, 25% above ₹2cr (no further bracket — capped at 25%). Old regime: 10% above ₹50L, 15% above ₹1cr, 25% above ₹2cr, 37% above ₹5cr. The new regime is more attractive for ultra-high-net-worth individuals due to the 25% cap. Marginal relief applies at each surcharge boundary to ensure the increased tax does not exceed the additional income."
          }
        },
        {
          "@type": "Question",
          "name": "Can I switch between regimes every year?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For salaried individuals without business income, yes — you can switch annually at ITR filing. Inform your employer at the start of the financial year for accurate TDS, but change at filing if better. For taxpayers with business or professional income, switching has restrictions under Section 115BAC(6) — once you opt out of the new regime, you can re-enter only once in your lifetime, and Form 10IEA must be filed. Plan carefully if you have business income."
          }
        },
        {
          "@type": "Question",
          "name": "Does the new regime suit senior citizens?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It depends. The new regime does not provide higher basic exemptions for seniors — uniform ₹4L threshold for all. However, the higher standard deduction and ₹60K Section 87A rebate often make it competitive. Old regime gives ₹3L exemption for 60-80 age group and ₹5L for 80+, plus 80TTB ₹50K interest deduction. For seniors with high medical premiums and FD interest, old regime can win. Run both calculations."
          }
        },
        {
          "@type": "Question",
          "name": "Are tax slabs changing for FY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Budget 2026 (presented February 2026) made no changes to slab rates, Section 87A rebate amounts, surcharge rates, or cess. Both the old and new regime slabs continue unchanged for FY 2026-27. The new Income Tax Act 2025 effective 1 April 2026 retains the substantive tax structure with renumbered references — Section 115BAC moves to Section 202, but rates and thresholds remain the same. Your regime decision logic for FY 2025-26 applies equally to FY 2026-27."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim home loan interest in the new regime?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only for let-out (rented) property. Under the new regime, home loan interest under Section 24(b) is fully deductible against rental income from let-out property — no cap. However, for self-occupied property, Section 24(b) deduction up to ₹2 lakh is NOT available in the new regime. The old regime allows up to ₹2 lakh for self-occupied property and unlimited for let-out (with ₹2L house property loss set-off cap). Home loan borrowers with self-occupied property usually prefer old regime."
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
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .recommendation-banner { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 24px 28px; margin-bottom: 24px; text-align: center; }
        .recommendation-banner .rb-label { font-family: var(--font-mono); font-size: 11px; color: var(--accent-light); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .recommendation-banner .rb-regime { font-size: 28px; font-weight: 700; color: #fff; margin-bottom: 6px; line-height: 1.2; }
        .recommendation-banner .rb-savings { font-size: 16px; color: rgba(255,255,255,0.9); }
        .recommendation-banner .rb-savings .amount { color: var(--accent-light); font-weight: 700; font-family: var(--font-mono); font-size: 20px; }
        .compare-grid { display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 24px; }
        @media (min-width: 700px) { .compare-grid { grid-template-columns: 1fr 1fr; gap: 20px; } }
        .regime-card { background: var(--card); border-radius: var(--radius-lg); padding: 24px; border: 2px solid var(--border); transition: border-color 0.2s; }
        .regime-card.winner { border-color: var(--success); background: linear-gradient(135deg, #ECFDF5 0%, #D1FAE5 100%); }
        .regime-card .rc-head { display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid var(--border); }
        .regime-card.winner .rc-head { border-bottom-color: rgba(5,150,105,0.2); }
        .regime-card .rc-name { font-size: 16px; font-weight: 700; color: var(--primary-dark); }
        .regime-card .rc-tag { background: var(--success); color: #fff; font-size: 10px; font-weight: 700; padding: 4px 10px; border-radius: 10px; letter-spacing: 0.5px; }
        .regime-card .rc-row { display: flex; justify-content: space-between; padding: 6px 0; font-size: 13px; color: var(--text-secondary); }
        .regime-card .rc-row .lbl { flex: 1; }
        .regime-card .rc-row .val { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); }
        .regime-card .rc-row.total { font-weight: 700; padding-top: 10px; border-top: 1px solid rgba(0,0,0,0.1); margin-top: 8px; font-size: 14px; }
        .regime-card .rc-row.total .lbl, .regime-card .rc-row.total .val { color: var(--primary-dark); font-size: 15px; }
        .regime-card .rc-final { margin-top: 12px; padding-top: 12px; border-top: 2px solid rgba(0,0,0,0.1); display: flex; justify-content: space-between; align-items: baseline; }
        .regime-card.winner .rc-final { border-top-color: rgba(5,150,105,0.3); }
        .regime-card .rc-final .lbl { font-size: 13px; font-weight: 700; color: var(--text-secondary); text-transform: uppercase; letter-spacing: 0.5px; }
        .regime-card.winner .rc-final .lbl { color: #065F46; }
        .regime-card .rc-final .val { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); }
        .regime-card.winner .rc-final .val { color: #065F46; }
        .breakeven-card { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border-left: 4px solid var(--accent); border-radius: 0 var(--radius) var(--radius) 0; padding: 18px 22px; margin-bottom: 16px; }
        .breakeven-card .be-head { font-family: var(--font-mono); font-size: 11px; color: var(--accent); font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px; }
        .breakeven-card p { font-size: 14px; color: #78350F; line-height: 1.65; margin: 0 0 8px; }
        .breakeven-card p:last-child { margin-bottom: 0; }
        .breakeven-card strong { color: #92400E; }
        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .btn-reset { display: inline-flex; align-items: center; gap: 6px; margin-top: 16px; padding: 8px 16px; border: 1px solid var(--border); border-radius: 8px; background: var(--card); color: var(--text-muted); font-family: var(--font-body); font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s; }
        .btn-reset:hover { border-color: var(--danger); color: var(--danger); }
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
        .rate-table .pct { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); }
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
        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; margin-bottom: 20px; }
        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
            .body-cta { padding: 24px 20px; }
            .body-cta h3 { font-size: 18px; }
            .recommendation-banner .rb-regime { font-size: 22px; }
            .regime-card .rc-final .val { font-size: 18px; }
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
        <a href="#slabs">Slab Comparison</a>
        <a href="#deductions">Allowed Deductions</a>
        <a href="#breakeven">Break-Even Logic</a>
        <a href="#examples">Examples</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Old vs New Regime Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Old vs New Regime Calculator — <span>Side-by-Side Comparison</span> FY 2025-26</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">
            Old or new regime? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.
        </div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Old%20vs%20New%20Regime%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="Chat with us on WhatsApp" rel="noopener">
                <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                WhatsApp
            </a>
            <a href="mailto:sales@patronaccounting.com?subject=Old%20vs%20New%20Regime%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Old%20vs%20New%20Regime%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20old%20vs%20new%20regime%20decision%20for%20FY%202025-26.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email
            </a>
        </div>
    </div>
</div>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Compare both tax regimes side-by-side for FY 2025-26 (AY 2026-27). The <strong>new regime</strong> has lower slabs (0/5/10/15/20/25/30%), ₹75K standard deduction, ₹60K Section 87A rebate up to ₹12L taxable income — making salary up to <strong>₹12.75L effectively tax-free</strong>. The <strong>old regime</strong> retains 80C, 80D, HRA, home loan deductions but with higher slabs (5/20/30%). Break-even point: roughly <strong>₹3.75 lakh in total deductions</strong>. Below that, new regime wins; above that, old regime may win — especially with home loan + rent.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Old vs New Regime Calculator</h2>
            <p class="calc-intro">Enter your income and old-regime deductions. The calculator computes tax under both regimes and recommends the one that saves more for your specific situation.</p>

            <noscript>
                <div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or use the manual formulas in the content below.</div>
            </noscript>

            <div class="calc-section-title">Step 1 — Income Details</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="salaryIncome">Gross Salary (₹) — annual</label>
                    <input type="text" id="salaryIncome" placeholder="e.g. 1500000" autocomplete="off" inputmode="decimal">
                    <span class="helper">Annual gross salary including basic, HRA, allowances, perks (before any deductions)</span>
                </div>
                <div class="form-group">
                    <label for="otherIncome">Other Income (₹) — annual</label>
                    <input type="text" id="otherIncome" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Interest from FD, savings, dividends, rental income (NOT capital gains — those are taxed separately at special rates)</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Age Group</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="below60" onclick="setAge(this)">Below 60</button>
                        <button type="button" class="toggle-btn" data-value="senior" onclick="setAge(this)">60-80<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Senior</small></button>
                        <button type="button" class="toggle-btn" data-value="supersenior" onclick="setAge(this)">80+<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Super Senior</small></button>
                    </div>
                    <span class="helper">Affects old regime exemption limit only (₹2.5L / ₹3L / ₹5L). New regime is age-uniform.</span>
                </div>
                <div class="form-group">
                    <label>Income Type</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="salaried" onclick="setIncomeType(this)">Salaried<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Standard ded. ₹75K/₹50K</small></button>
                        <button type="button" class="toggle-btn" data-value="non_salaried" onclick="setIncomeType(this)">Non-Salaried<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">No std deduction</small></button>
                    </div>
                </div>
            </div>

            <div class="calc-section-title">Step 2 — Old Regime Deductions (Optional)</div>

            <div class="calc-row three-col">
                <div class="form-group">
                    <label for="ded80c">Section 80C (₹)</label>
                    <input type="text" id="ded80c" placeholder="0" value="0" max="150000" autocomplete="off" inputmode="decimal">
                    <span class="helper">PPF, EPF, ELSS, LIC, NSC. Max ₹1.5L</span>
                </div>
                <div class="form-group">
                    <label for="ded80d">Section 80D (₹)</label>
                    <input type="text" id="ded80d" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Health insurance premium</span>
                </div>
                <div class="form-group">
                    <label for="ded80ccd">Section 80CCD(1B) NPS (₹)</label>
                    <input type="text" id="ded80ccd" placeholder="0" value="0" max="50000" autocomplete="off" inputmode="decimal">
                    <span class="helper">Self-NPS contribution. Max ₹50K above 80C</span>
                </div>
            </div>

            <div class="calc-row three-col">
                <div class="form-group">
                    <label for="hraExemption">HRA Exemption (₹)</label>
                    <input type="text" id="hraExemption" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Computed HRA exempt amount under Section 10(13A)</span>
                </div>
                <div class="form-group">
                    <label for="homeLoanInterest">Home Loan Interest (₹)</label>
                    <input type="text" id="homeLoanInterest" placeholder="0" value="0" max="200000" autocomplete="off" inputmode="decimal">
                    <span class="helper">Section 24(b) for self-occupied. Max ₹2L</span>
                </div>
                <div class="form-group">
                    <label for="otherDeductions">Other (80E, 80G, 80TTA, etc.) (₹)</label>
                    <input type="text" id="otherDeductions" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Education loan, donations, savings interest, etc.</span>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Compare Both Regimes</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>

                <div class="recommendation-banner" id="recommendationBanner">
                    <div class="rb-label">Recommended for You</div>
                    <div class="rb-regime" id="rbRegime">—</div>
                    <div class="rb-savings" id="rbSavings">—</div>
                </div>

                <div class="compare-grid">
                    <div class="regime-card" id="oldCard">
                        <div class="rc-head">
                            <span class="rc-name">Old Regime</span>
                            <span class="rc-tag" id="oldTag" style="display:none;">Better</span>
                        </div>
                        <div id="oldRows"></div>
                        <div class="rc-final">
                            <span class="lbl">Total Tax</span>
                            <span class="val" id="oldFinal">—</span>
                        </div>
                    </div>
                    <div class="regime-card" id="newCard">
                        <div class="rc-head">
                            <span class="rc-name">New Regime</span>
                            <span class="rc-tag" id="newTag" style="display:none;">Better</span>
                        </div>
                        <div id="newRows"></div>
                        <div class="rc-final">
                            <span class="lbl">Total Tax</span>
                            <span class="val" id="newFinal">—</span>
                        </div>
                    </div>
                </div>

                <div class="breakeven-card" id="breakevenCard">
                    <div class="be-head">📊 Break-Even Insight</div>
                    <p id="breakevenText"></p>
                </div>

                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            
                <div class="post-result-cta" id="postResultCTA">
    <div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div>
    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Old vs New Regime Calculator validation, professional documentation, no obligation.</div>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Old%20vs%20New%20Regime%20Calculator.%20Please%20review%20my%20comparison%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Old%20vs%20New%20Regime%20Calculator%20%E2%80%94%20Review%20Request&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Old%20vs%20New%20Regime%20Calculator%20and%20would%20like%20a%20Chartered%20Accountant%20to%20review%20my%20output%20before%20I%20act%20on%20it.%0A%0APlease%20advise%20on%20next%20steps%20for%20old%20vs%20new%20regime%20decision%20for%20FY%202025-26.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>
            </div>
        </div>

        <section class="content-section" id="slabs">
            <h2>Slab Rate Comparison FY 2025-26</h2>
            <p>Both regimes apply to FY 2025-26 (AY 2026-27) under the <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Income Tax Act 1961</a>, administered by the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department</a> per <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> standards. The new regime is the default under Section 115BAC, established by the <a href="https://www.finmin.nic.in/" target="_blank" rel="noopener">Ministry of Finance</a> via Finance Act 2020 and substantially revised by Finance Act 2025. <a href="https://www.pib.gov.in/" target="_blank" rel="noopener">PIB notifications</a> confirm slab rates for both regimes are unchanged for FY 2026-27.</p>

            <h3>New Regime Slabs</h3>
            <div class="table-scroll"><table class="rate-table">
                <thead><tr><th>Income Slab</th><th>Tax Rate</th></tr></thead>
                <tbody>
                    <tr><td>Up to ₹4,00,000</td><td class="pct">Nil</td></tr>
                    <tr><td>₹4,00,001 to ₹8,00,000</td><td class="pct">5%</td></tr>
                    <tr><td>₹8,00,001 to ₹12,00,000</td><td class="pct">10%</td></tr>
                    <tr><td>₹12,00,001 to ₹16,00,000</td><td class="pct">15%</td></tr>
                    <tr><td>₹16,00,001 to ₹20,00,000</td><td class="pct">20%</td></tr>
                    <tr><td>₹20,00,001 to ₹24,00,000</td><td class="pct">25%</td></tr>
                    <tr><td>Above ₹24,00,000</td><td class="pct">30%</td></tr>
                </tbody>
            </table></div>

            <h3>Old Regime Slabs</h3>
            <div class="table-scroll"><table class="rate-table">
                <thead><tr><th>Income Slab</th><th>Below 60</th><th>Senior (60-80)</th><th>Super Senior (80+)</th></tr></thead>
                <tbody>
                    <tr><td>Basic Exemption</td><td>Up to ₹2.5L</td><td>Up to ₹3L</td><td>Up to ₹5L</td></tr>
                    <tr><td>5% Slab</td><td>₹2.5L - ₹5L</td><td>₹3L - ₹5L</td><td>—</td></tr>
                    <tr><td>20% Slab</td><td>₹5L - ₹10L</td><td>₹5L - ₹10L</td><td>₹5L - ₹10L</td></tr>
                    <tr><td>30% Slab</td><td>Above ₹10L</td><td>Above ₹10L</td><td>Above ₹10L</td></tr>
                </tbody>
            </table></div>

            <p>Both regimes apply <strong>4% Health and Education Cess</strong> on the tax amount. Surcharge applies above ₹50L taxable income — capped at 25% under new regime, up to 37% under old regime.</p>
        </section>

        <section class="content-section" id="deductions">
            <h2>Allowed Deductions — What Differs</h2>

            <h3>Old Regime — Allows Almost Everything</h3>
            <ul>
                <li><strong>Standard Deduction</strong>: ₹50,000 for salaried/pensioners</li>
                <li><strong>Section 80C</strong>: Up to ₹1,50,000 (PPF, EPF, ELSS, LIC, home loan principal, NSC, etc.)</li>
                <li><strong>Section 80CCD(1B)</strong>: Additional ₹50,000 NPS over 80C</li>
                <li><strong>Section 80D</strong>: Up to ₹25,000 (₹50,000 for senior citizens) for health insurance</li>
                <li><strong>HRA Exemption (Section 10(13A))</strong>: Computed as least of three formulas</li>
                <li><strong>Section 24(b)</strong>: Home loan interest up to ₹2 lakh for self-occupied property</li>
                <li><strong>Section 80E</strong>: Education loan interest (no cap)</li>
                <li><strong>Section 80G</strong>: Donations (50%/100% depending on entity)</li>
                <li><strong>Section 80TTA/TTB</strong>: Savings interest (₹10K / ₹50K for seniors)</li>
                <li><strong>LTA, professional tax, entertainment allowance</strong> for govt employees</li>
            </ul>

            <h3>New Regime — Severely Restricted</h3>
            <ul>
                <li><strong>Standard Deduction</strong>: ₹75,000 for salaried/pensioners — higher than old regime</li>
                <li><strong>Section 80CCD(2)</strong>: Employer NPS contribution up to 14% of salary (govt) / 10% (private)</li>
                <li><strong>Family Pension Deduction</strong>: ₹25,000 or 1/3 of pension, whichever is lower</li>
                <li><strong>Transport Allowance</strong>: For specially-abled employees only</li>
                <li><strong>Conveyance Allowance</strong>: For tour-related travel</li>
                <li><strong>Home loan interest</strong>: Allowed only for <em>let-out</em> property — NOT for self-occupied</li>
                <li><strong>Section 24(b) ₹2L cap</strong>: NOT available in new regime for self-occupied home</li>
            </ul>

            <p>The new regime explicitly prohibits HRA exemption, Section 80C/80D/80E/80G, LTA, and Section 24(b) interest on self-occupied property.</p>
        </section>

        <div class="body-cta">
    <h3>Need Help Deciding the Right Regime?</h3>
    <p>Patron's CAs analyse your salary structure, deductions and long-term financial goals, then file ITR under the regime that saves you the most for FY 2025-26. We support Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Old%20vs%20New%20Regime%20Calculator.%20I%20need%20help%20with%20old%20vs%20new%20regime%20decision%20for%20FY%202025-26.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Old%20vs%20New%20Regime%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Old%20vs%20New%20Regime%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20old%20vs%20new%20regime%20decision%20for%20FY%202025-26.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <section class="content-section" id="breakeven">
            <h2>Break-Even Logic — When Does Old Regime Win?</h2>
            <p>The decision boils down to one question: do your deductions exceed the new regime's slab advantage? At each income level, there's a specific deduction threshold above which old regime saves more tax.</p>

            <div class="formula-box">
                <span class="label">The simple test</span><br>
                If (Old Regime Deductions) &gt; ~₹3,75,000<br>
                AND total income is moderate-to-high<br>
                THEN old regime usually saves more<br>
                ELSE new regime is the better choice
            </div>

            <h3>Common Profiles</h3>
            <div class="table-scroll"><table class="rate-table">
                <thead><tr><th>Profile</th><th>Income</th><th>Typical Deductions</th><th>Better Regime</th></tr></thead>
                <tbody>
                    <tr><td>Junior software engineer, no investments</td><td>₹8 - ₹12L</td><td>~₹50K (PF only)</td><td><strong>New</strong></td></tr>
                    <tr><td>Mid-career, EPF + insurance</td><td>₹12 - ₹18L</td><td>~₹2L (80C + 80D)</td><td><strong>New</strong> (most cases)</td></tr>
                    <tr><td>Mid-career with rent (Bangalore/Mumbai)</td><td>₹18 - ₹25L</td><td>~₹4L (80C + 80D + HRA)</td><td><strong>Borderline</strong></td></tr>
                    <tr><td>Home loan + rent + 80C maxed</td><td>₹15 - ₹30L</td><td>~₹5-6L</td><td><strong>Old</strong></td></tr>
                    <tr><td>Senior with FD interest, medical premium</td><td>₹6 - ₹12L</td><td>₹1.5-2L (80C + 80D + 80TTB)</td><td><strong>New</strong> (87A rebate up to ₹12L)</td></tr>
                    <tr><td>Ultra-HNI (₹5cr+ income)</td><td>₹5cr+</td><td>Variable</td><td><strong>New</strong> (25% surcharge cap)</td></tr>
                </tbody>
            </table></div>

            <div class="callout">
                <p><strong>Why ₹3.75 lakh?</strong> The new regime's tax-saving advantage at ₹15L income is roughly ₹1.5 lakh more than old regime (post-rebate, post-standard-deduction). To match this saving, the old regime needs deductions worth ~₹3.75L (which would save ~₹1.16L at 30% slab + lose access to lower slabs). The exact break-even varies with income — use the calculator above for your specific case.</p>
            </div>

            <div class="callout warn">
                <p><strong>HRA is the swing factor.</strong> Tier-1 city renters paying ₹25-50K/month often have HRA exemption of ₹2-4L, which alone shifts the calculation toward old regime. Conversely, employees living in employer accommodation or owning their home (no HRA) usually land in the new regime camp.</p>
            </div>
        </section>

        <section class="content-section" id="examples">
            <h2>Worked Examples</h2>

            <h3>Example 1 — ₹12L Salary, No Deductions</h3>
            <p>Salaried, age 30, salary ₹12L, no investments or HRA.</p>
            <ul>
                <li><strong>New regime</strong>: Salary ₹12L − ₹75K std ded = ₹11.25L taxable. Slab tax ₹52,500. Section 87A rebate caps it at zero. <strong>Tax = ₹0</strong>.</li>
                <li><strong>Old regime</strong>: Salary ₹12L − ₹50K std ded = ₹11.5L taxable. Slab tax (₹2.5L Nil + ₹2.5L × 5% + ₹5L × 20% + ₹1.5L × 30%) = ₹1,57,500. Cess 4% = ₹6,300. <strong>Tax = ₹1,63,800</strong>.</li>
                <li><strong>Saving with new regime: ₹1,63,800.</strong></li>
            </ul>

            <h3>Example 2 — ₹20L Salary with Maxed Deductions</h3>
            <p>Salaried, age 35, salary ₹20L. Old-regime deductions: 80C ₹1.5L + 80D ₹50K + 80CCD(1B) ₹50K + HRA ₹3L + home loan interest ₹2L = total ₹7.5L.</p>
            <ul>
                <li><strong>New regime</strong>: ₹20L − ₹75K std ded = ₹19.25L taxable. Slab tax = ₹1,85,000. Cess 4% = ₹7,400. <strong>Tax = ₹1,92,400</strong>.</li>
                <li><strong>Old regime</strong>: ₹20L − ₹50K std ded − ₹7.5L deductions = ₹12L taxable. Slab tax = ₹1,72,500. Cess 4% = ₹6,900. <strong>Tax = ₹1,79,400</strong>.</li>
                <li><strong>Saving with old regime: ₹13,000.</strong></li>
            </ul>

            <h3>Example 3 — ₹8L Salary, Low Deductions</h3>
            <p>Salaried, age 28, salary ₹8L. Only EPF ₹50K under 80C.</p>
            <ul>
                <li><strong>New regime</strong>: ₹8L − ₹75K std ded = ₹7.25L taxable. Slab tax = ₹16,250. 87A rebate (income ≤ ₹12L) wipes out tax. <strong>Tax = ₹0</strong>.</li>
                <li><strong>Old regime</strong>: ₹8L − ₹50K std ded − ₹50K 80C = ₹7L taxable. Slab tax = ₹52,500. 87A doesn't apply (income &gt; ₹5L). Cess 4% = ₹2,100. <strong>Tax = ₹54,600</strong>.</li>
                <li><strong>Saving with new regime: ₹54,600.</strong></li>
            </ul>

            <div class="callout">
                <p><strong>The ₹12L sweet spot.</strong> Income up to ₹12.75 lakh (with the ₹75K standard deduction) is effectively tax-free under the new regime. For most salaried professionals in this bracket, the new regime is a clear win unless they have a home loan or pay rent in a high-cost city.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Which regime is better for FY 2025-26 — old or new?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">It depends on your deductions. The new regime has lower slab rates and a ₹60,000 Section 87A rebate making income up to ₹12 lakh effectively tax-free. The old regime allows HRA, 80C up to ₹1.5L, 80D, home loan interest, and other deductions but with higher slab rates. The break-even point is approximately ₹3.75 lakh in total deductions. Below that, new regime usually saves more. Above that, old regime may still win — particularly if you have a large home loan.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are the new regime tax slabs for FY 2025-26?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">New regime slabs for FY 2025-26 (AY 2026-27) under Section 115BAC: 0 to ₹4 lakh — Nil; ₹4 to ₹8 lakh — 5%; ₹8 to ₹12 lakh — 10%; ₹12 to ₹16 lakh — 15%; ₹16 to ₹20 lakh — 20%; ₹20 to ₹24 lakh — 25%; above ₹24 lakh — 30%. Slabs apply uniformly to all individuals regardless of age. Standard deduction ₹75,000 for salaried, plus 4% cess. Surcharge above ₹50L is capped at 25%.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are the old regime tax slabs for FY 2025-26?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Old regime slabs are unchanged for FY 2025-26. For individuals below 60: 0 to ₹2.5L — Nil; ₹2.5 to ₹5L — 5%; ₹5 to ₹10L — 20%; above ₹10L — 30%. Senior citizens (60-80): basic exemption up to ₹3 lakh. Super senior citizens (80+): up to ₹5 lakh. Standard deduction ₹50,000 for salaried, ₹50,000 for pensioners. All Chapter VI-A deductions (80C, 80D, 80E, 80G, etc.), HRA exemption, and home loan interest available. Surcharge up to 37% above ₹5 crore income.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is the new regime the default for FY 2025-26?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. The new regime is the default tax regime from FY 2024-25 under Section 115BAC of the Income Tax Act 1961. If you do not actively opt for the old regime, your employer will deduct TDS under the new regime. Salaried individuals can switch between regimes annually at the time of ITR filing. Business and professional income earners must exercise the option carefully using Form 10IEA — once opted in or out, switching back has restrictions.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What deductions are allowed in the new regime?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The new regime allows only a limited set of deductions: standard deduction of ₹75,000 for salaried employees and pensioners, employer NPS contribution under Section 80CCD(2) up to 14% of salary for government and 10% private, transport allowance for specially-abled, conveyance allowance for tour-related travel, and family pension deduction up to ₹25,000. HRA, LTA, Section 80C, 80D, 80E, home loan interest under Section 24(b), and most other deductions are NOT available.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is Section 87A rebate different between regimes?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 87A rebate amounts differ significantly. In the new regime for FY 2025-26: up to ₹60,000 rebate if total taxable income does not exceed ₹12,00,000. Marginal relief applies between ₹12L and ~₹12.7L of taxable income. In the old regime: up to ₹12,500 rebate if total taxable income does not exceed ₹5,00,000. Both rebates apply only to resident individuals. Capital gains taxed at special rates under Sections 111A and 112A do not qualify for the rebate.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the break-even deduction point between old and new regime?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The break-even deduction threshold is approximately ₹3.75 lakh for most income levels. Below this, the new regime almost always saves more tax due to its lower slabs and higher rebate. Above ₹3.75L in total deductions (sum of 80C, 80D, HRA exemption, home loan interest, NPS, LTA), the old regime starts saving more. For income above ₹15L with a home loan plus rent paid, the old regime often remains attractive. Use the calculator above for your specific case.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How does surcharge differ between regimes?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Surcharge rates apply on tax (before cess) for high-income taxpayers. New regime: 10% above ₹50L, 15% above ₹1cr, 25% above ₹2cr (no further bracket — capped at 25%). Old regime: 10% above ₹50L, 15% above ₹1cr, 25% above ₹2cr, 37% above ₹5cr. The new regime is more attractive for ultra-high-net-worth individuals due to the 25% cap. Marginal relief applies at each surcharge boundary to ensure the increased tax does not exceed the additional income.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can I switch between regimes every year?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For salaried individuals without business income, yes — you can switch annually at ITR filing. Inform your employer at the start of the financial year for accurate TDS, but change at filing if better. For taxpayers with business or professional income, switching has restrictions under Section 115BAC(6) — once you opt out of the new regime, you can re-enter only once in your lifetime, and Form 10IEA must be filed. Plan carefully if you have business income.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Does the new regime suit senior citizens?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">It depends. The new regime does not provide higher basic exemptions for seniors — uniform ₹4L threshold for all. However, the higher standard deduction and ₹60K Section 87A rebate often make it competitive. Old regime gives ₹3L exemption for 60-80 age group and ₹5L for 80+, plus 80TTB ₹50K interest deduction. For seniors with high medical premiums and FD interest, old regime can win. Run both calculations.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Are tax slabs changing for FY 2026-27?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. Budget 2026 (presented February 2026) made no changes to slab rates, Section 87A rebate amounts, surcharge rates, or cess. Both the old and new regime slabs continue unchanged for FY 2026-27. The new Income Tax Act 2025 effective 1 April 2026 retains the substantive tax structure with renumbered references — Section 115BAC moves to Section 202, but rates and thresholds remain the same. Your regime decision logic for FY 2025-26 applies equally to FY 2026-27.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can I claim home loan interest in the new regime?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Only for let-out (rented) property. Under the new regime, home loan interest under Section 24(b) is fully deductible against rental income from let-out property — no cap. However, for self-occupied property, Section 24(b) deduction up to ₹2 lakh is NOT available in the new regime. The old regime allows up to ₹2 lakh for self-occupied property and unlimited for let-out (with ₹2L house property loss set-off cap). Home loan borrowers with self-occupied property usually prefer old regime.</div></div></div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
    <h3>CA-Reviewed Regime Planning</h3>
    <p>Pick the right regime, restructure CTC, file the right ITR — done by a Chartered Accountant, fixed-fee.</p>
    <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Old%20vs%20New%20Regime%20Calculator.%20I%20need%20help%20with%20old%20vs%20new%20regime%20decision%20for%20FY%202025-26.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Old%20vs%20New%20Regime%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Old%20vs%20New%20Regime%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20old%20vs%20new%20regime%20decision%20for%20FY%202025-26.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/itr-filing-for-salary" class="sidebar-link">ITR Filing for Salary <span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
            <a href="/income-tax-notice" class="sidebar-link">Income Tax Notice Help <span class="arrow">→</span></a>
            <a href="/itr-for-capital-gains" class="sidebar-link">ITR for Capital Gains <span class="arrow">→</span></a>
            <a href="/itr-filing-for-freelancers-professionals" class="sidebar-link">ITR for Freelancers / Professionals <span class="arrow">→</span></a>
            <a href="/zoho-books-accounting" class="sidebar-link">Zoho Books Accounting <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/section-87a-rebate-calculator" class="sidebar-link">Section 87A Rebate Calculator <span class="arrow">→</span></a>
            <a href="/tools/hra-exemption-calculator" class="sidebar-link">HRA Exemption Calculator <span class="arrow">→</span></a>
            <a href="/tools/itr-form-selector" class="sidebar-link">ITR Form Selector <span class="arrow">→</span></a>
            <a href="/tools/advance-tax-calculator" class="sidebar-link">Advance Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/capital-gains-calculator" class="sidebar-link">Capital Gains Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/old-regime-vs-regime-ay-2026-27" class="sidebar-link">Old vs New Regime AY 2026-27 <span class="arrow">→</span></a>
            <a href="/blog/income-tax-old-regime-2026-it-rules-changed-math" class="sidebar-link">Old Regime 2026 — Rules Changed Math <span class="arrow">→</span></a>
            <a href="/blog/clubbing-income-vs-old-tax-regime-ay-2026-27" class="sidebar-link">Clubbing Income vs Old Regime <span class="arrow">→</span></a>
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

    let ageGroup = 'below60';
    let incomeType = 'salaried';

    function fmtINR(num) {
        if (!isFinite(num)) return '—';
        return '₹' + Math.round(num).toLocaleString('en-IN');
    }

    function setAge(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        ageGroup = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
    }

    function setIncomeType(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        incomeType = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
    }

    function computeNewRegimeTax(taxableIncome) {
        if (taxableIncome <= 0) return 0;
        const slabs = [[400000, 0], [800000, 0.05], [1200000, 0.10], [1600000, 0.15], [2000000, 0.20], [2400000, 0.25], [Infinity, 0.30]];
        let tax = 0, prev = 0;
        for (const [limit, rate] of slabs) {
            if (taxableIncome <= limit) { tax += (taxableIncome - prev) * rate; break; }
            tax += (limit - prev) * rate;
            prev = limit;
        }
        return tax;
    }

    function computeOldRegimeTax(taxableIncome, ageIn) {
        if (taxableIncome <= 0) return 0;
        let exempt;
        if (ageIn === 'supersenior') exempt = 500000;
        else if (ageIn === 'senior') exempt = 300000;
        else exempt = 250000;
        const slabs = [[exempt, 0], [500000, 0.05], [1000000, 0.20], [Infinity, 0.30]];
        let tax = 0, prev = 0;
        for (const [limit, rate] of slabs) {
            if (limit < prev) continue;
            if (taxableIncome <= limit) {
                tax += Math.max(0, taxableIncome - Math.max(prev, 0)) * rate;
                break;
            }
            tax += Math.max(0, limit - Math.max(prev, 0)) * rate;
            prev = limit;
        }
        return tax;
    }

    function applyRebate87A(income, taxBeforeRebate, regime) {
        if (regime === 'new' && income <= 1200000) {
            return Math.max(0, taxBeforeRebate - Math.min(60000, taxBeforeRebate));
        }
        if (regime === 'old' && income <= 500000) {
            return Math.max(0, taxBeforeRebate - Math.min(12500, taxBeforeRebate));
        }
        // Marginal relief for new regime (12L-12.7L approx)
        if (regime === 'new' && income > 1200000 && income <= 1300000) {
            const excess = income - 1200000;
            if (taxBeforeRebate > excess) return excess;
        }
        return taxBeforeRebate;
    }

    function applySurcharge(tax, income, regime) {
        let rate = 0;
        if (income > 50000000) rate = (regime === 'new') ? 0.25 : 0.37;
        else if (income > 20000000) rate = 0.25;
        else if (income > 10000000) rate = 0.15;
        else if (income > 5000000) rate = 0.10;
        return tax * (1 + rate);
    }

    function calculate() {
        const salaryIncome = parseINR(document.getElementById('salaryIncome').value);
        const otherIncome = parseINR(document.getElementById('otherIncome').value) || 0;
        const ded80c = Math.min(150000, parseINR(document.getElementById('ded80c').value) || 0);
        const ded80d = parseINR(document.getElementById('ded80d').value) || 0;
        const ded80ccd = Math.min(50000, parseINR(document.getElementById('ded80ccd').value) || 0);
        const hra = parseINR(document.getElementById('hraExemption').value) || 0;
        const homeLoan = Math.min(200000, parseINR(document.getElementById('homeLoanInterest').value) || 0);
        const otherDed = parseINR(document.getElementById('otherDeductions').value) || 0;

        if (!isFinite(salaryIncome) || salaryIncome < 0) {
            alert('Please enter a valid salary income.');
            return;
        }

        const totalIncome = salaryIncome + otherIncome;
        const totalOldDeductions = ded80c + ded80d + ded80ccd + hra + homeLoan + otherDed;

        // === NEW REGIME ===
        const newStdDed = (incomeType === 'salaried') ? 75000 : 0;
        const newTaxable = Math.max(0, totalIncome - newStdDed);
        const newBaseTax = computeNewRegimeTax(newTaxable);
        const newAfterRebate = applyRebate87A(newTaxable, newBaseTax, 'new');
        const newAfterSurcharge = applySurcharge(newAfterRebate, newTaxable, 'new');
        const newCess = newAfterSurcharge * 0.04;
        const newTotal = Math.round(newAfterSurcharge + newCess);

        // === OLD REGIME ===
        const oldStdDed = (incomeType === 'salaried') ? 50000 : 0;
        const oldTaxable = Math.max(0, totalIncome - oldStdDed - totalOldDeductions);
        const oldBaseTax = computeOldRegimeTax(oldTaxable, ageGroup);
        const oldAfterRebate = applyRebate87A(oldTaxable, oldBaseTax, 'old');
        const oldAfterSurcharge = applySurcharge(oldAfterRebate, oldTaxable, 'old');
        const oldCess = oldAfterSurcharge * 0.04;
        const oldTotal = Math.round(oldAfterSurcharge + oldCess);

        // === RECOMMENDATION ===
        const winner = (newTotal <= oldTotal) ? 'new' : 'old';
        const savings = Math.abs(oldTotal - newTotal);

        // Render banner
        const banner = document.getElementById('recommendationBanner');
        const rbRegime = document.getElementById('rbRegime');
        const rbSavings = document.getElementById('rbSavings');

        if (savings === 0) {
            rbRegime.textContent = 'Both regimes equal';
            rbSavings.innerHTML = 'Tax payable: <span class="amount">' + fmtINR(newTotal) + '</span> in both regimes';
        } else if (winner === 'new') {
            rbRegime.textContent = '✓ New Regime';
            rbSavings.innerHTML = 'Saves <span class="amount">' + fmtINR(savings) + '</span> compared to old regime';
        } else {
            rbRegime.textContent = '✓ Old Regime';
            rbSavings.innerHTML = 'Saves <span class="amount">' + fmtINR(savings) + '</span> compared to new regime — your deductions of ' + fmtINR(totalOldDeductions) + ' make this the better choice';
        }

        // Render side-by-side cards
        document.getElementById('oldRows').innerHTML = renderRegimeRows({
            grossIncome: totalIncome,
            stdDed: oldStdDed,
            extraDed: totalOldDeductions,
            taxable: oldTaxable,
            baseTax: oldBaseTax,
            afterRebate: oldAfterRebate,
            afterSurcharge: oldAfterSurcharge,
            cess: oldCess,
            totalTax: oldTotal,
            regime: 'old'
        });
        document.getElementById('newRows').innerHTML = renderRegimeRows({
            grossIncome: totalIncome,
            stdDed: newStdDed,
            extraDed: 0,
            taxable: newTaxable,
            baseTax: newBaseTax,
            afterRebate: newAfterRebate,
            afterSurcharge: newAfterSurcharge,
            cess: newCess,
            totalTax: newTotal,
            regime: 'new'
        });
        document.getElementById('oldFinal').textContent = fmtINR(oldTotal);
        document.getElementById('newFinal').textContent = fmtINR(newTotal);

        // Highlight winner card
        const oldCard = document.getElementById('oldCard');
        const newCard = document.getElementById('newCard');
        const oldTag = document.getElementById('oldTag');
        const newTag = document.getElementById('newTag');

        oldCard.classList.remove('winner');
        newCard.classList.remove('winner');
        oldTag.style.display = 'none';
        newTag.style.display = 'none';

        if (winner === 'old' && savings > 0) {
            oldCard.classList.add('winner');
            oldTag.style.display = 'inline-block';
        } else if (winner === 'new' && savings > 0) {
            newCard.classList.add('winner');
            newTag.style.display = 'inline-block';
        }

        // Break-even insight
        const breakevenText = document.getElementById('breakevenText');
        let beMsg = '';
        if (totalOldDeductions === 0) {
            beMsg = 'You entered no old-regime deductions. New regime is almost certainly better unless you actually have unclaimed deductions like HRA, 80C, or home loan interest. <strong>If you pay rent or have a home loan, re-run the calculator with those values to see if old regime wins.</strong>';
        } else if (totalOldDeductions < 200000) {
            beMsg = 'Your total deductions are <strong>' + fmtINR(totalOldDeductions) + '</strong> — well below the ~₹3.75L break-even threshold. New regime almost always wins at this deduction level.';
        } else if (totalOldDeductions < 375000) {
            beMsg = 'Your deductions are <strong>' + fmtINR(totalOldDeductions) + '</strong> — approaching but still below the ~₹3.75L break-even. ' + (winner === 'new' ? 'New regime wins at your specific income level.' : 'Old regime wins despite being below break-even — likely due to senior age exemption or 87A boundaries.');
        } else if (totalOldDeductions < 500000) {
            beMsg = 'Your deductions of <strong>' + fmtINR(totalOldDeductions) + '</strong> are above the ₹3.75L break-even threshold. Old regime starts becoming competitive — your specific result: <strong>' + (winner === 'new' ? 'new regime' : 'old regime') + ' wins by ' + fmtINR(savings) + '</strong>.';
        } else {
            beMsg = 'Your deductions of <strong>' + fmtINR(totalOldDeductions) + '</strong> are well above the ~₹3.75L break-even — old regime usually wins at this level. Your specific result: <strong>' + (winner === 'new' ? 'new regime by ' + fmtINR(savings) : 'old regime by ' + fmtINR(savings)) + '</strong>.';
        }
        breakevenText.innerHTML = beMsg;

        const rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        setTimeout(() => { rs.scrollIntoView({ behavior: 'smooth', block: 'start' }); }, 100);
    }

    function renderRegimeRows(data) {
        let html = '';
        html += '<div class="rc-row"><span class="lbl">Gross Income</span><span class="val">' + fmtINR(data.grossIncome) + '</span></div>';
        if (data.stdDed > 0) {
            html += '<div class="rc-row"><span class="lbl">Less: Standard Deduction</span><span class="val">−' + fmtINR(data.stdDed) + '</span></div>';
        }
        if (data.extraDed > 0) {
            html += '<div class="rc-row"><span class="lbl">Less: Old-Regime Deductions</span><span class="val">−' + fmtINR(data.extraDed) + '</span></div>';
        }
        html += '<div class="rc-row total"><span class="lbl">Taxable Income</span><span class="val">' + fmtINR(data.taxable) + '</span></div>';
        html += '<div class="rc-row"><span class="lbl">Slab Tax</span><span class="val">' + fmtINR(data.baseTax) + '</span></div>';
        const rebateAmount = data.baseTax - data.afterRebate;
        if (rebateAmount > 0) {
            html += '<div class="rc-row"><span class="lbl">Less: Sec 87A Rebate</span><span class="val">−' + fmtINR(rebateAmount) + '</span></div>';
        }
        const surchargeAmount = data.afterSurcharge - data.afterRebate;
        if (surchargeAmount > 0) {
            html += '<div class="rc-row"><span class="lbl">Add: Surcharge</span><span class="val">+' + fmtINR(surchargeAmount) + '</span></div>';
        }
        html += '<div class="rc-row"><span class="lbl">Add: Cess (4%)</span><span class="val">+' + fmtINR(data.cess) + '</span></div>';
        return html;
    }

    function resetCalc() {
        ['salaryIncome', 'otherIncome', 'ded80c', 'ded80d', 'ded80ccd', 'hraExemption', 'homeLoanInterest', 'otherDeductions'].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.value = (id === 'salaryIncome') ? '' : '0';
        });
        ageGroup = 'below60'; incomeType = 'salaried';
        document.querySelectorAll('.toggle-group').forEach(g => {
            const btns = g.querySelectorAll('.toggle-btn');
            btns.forEach(b => b.classList.remove('active'));
            btns[0].classList.add('active');
        });
        document.getElementById('resultSection').classList.remove('visible');
        document.querySelector('.calc-card').scrollIntoView({behavior:'smooth',block:'start'});
    }

    function toggleFaq(e) {
        const btn = e.closest ? (e.closest('.faq-question') || e) : e;
        const item = btn.closest('.faq-item');
        if (!item) return;
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    }

    ['salaryIncome', 'otherIncome', 'ded80c', 'ded80d', 'ded80ccd', 'hraExemption', 'homeLoanInterest', 'otherDeductions'].forEach(id => {
        const el = document.getElementById(id);
        if (el) el.addEventListener('keydown', e => { if (e.key === 'Enter') calculate(); });
    });

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

@endsection
