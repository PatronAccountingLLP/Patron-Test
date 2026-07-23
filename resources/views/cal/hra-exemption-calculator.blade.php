@extends('layouts.app')
@section('meta')

    <title>HRA Exemption Calculator | Section 10(13A) FY 2025-26</title>
    <meta name="description" content="HRA exemption calculator computes your tax-free house rent allowance under Section 10(13A) for FY 2025-26 using the 3-condition rule and metro/non-metro logic.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/hra-exemption-calculator">

    <meta property="og:title" content="HRA Exemption Calculator — Section 10(13A) FY 2025-26">
    <meta property="og:description" content="Calculate your tax-free HRA under Section 10(13A) — 3-condition lowest formula, metro vs non-metro rules, FY 2025-26 and FY 2026-27 (8-metro expansion).">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/hra-exemption-calculator">
    <meta property="og:image" content="/tools/og/hra-exemption-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HRA Exemption Calculator — Section 10(13A) FY 2025-26">
    <meta name="twitter:description" content="Calculate tax-free HRA under Section 10(13A) — 3-condition lowest formula, metro vs non-metro rules, FY 2025-26 and FY 2026-27.">
    <meta name="twitter:image" content="/tools/og/hra-exemption-calculator.png">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "HRA Exemption Calculator",
      "description": "HRA Exemption Calculator computes the tax-free House Rent Allowance under Section 10(13A) of the Income Tax Act using the three-condition lowest formula — actual HRA received, 50 percent or 40 percent of salary based on metro classification, and rent paid minus 10 percent of salary. Supports FY 2025-26 (4-metro rule) and FY 2026-27 (8-metro rule).",
      "url": "/tools/hra-exemption-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "HRA Exemption Calculator", "item": "/tools/hra-exemption-calculator"}
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
          "name": "What is HRA exemption under Section 10(13A) of the Income Tax Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 10(13A) of the Income Tax Act 1961 read with Rule 2A allows a salaried employee to claim a portion of House Rent Allowance as tax-free if rent is genuinely paid for residential accommodation. The exemption is available only under the old tax regime and is calculated as the lowest of three conditions involving actual HRA received, percentage of salary, and rent paid minus 10 percent of salary."
          }
        },
        {
          "@type": "Question",
          "name": "How is HRA exemption calculated using the three-condition formula?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "HRA exemption is the lowest of three values. First, the actual HRA received from your employer. Second, 50 percent of basic salary plus DA if you live in a metro city, or 40 percent if non-metro. Third, the actual rent paid minus 10 percent of salary. The minimum of these three is your exempt HRA — the balance is taxed as part of your salary."
          }
        },
        {
          "@type": "Question",
          "name": "Which cities qualify as metros for HRA exemption in FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For FY 2025-26 (AY 2026-27) ITR filing, only four cities qualify as metros under Section 10(13A) — Delhi, Mumbai, Kolkata, and Chennai. Residents of these cities are eligible for the 50 percent of salary cap under condition two. All other cities, including Bengaluru, Pune, Hyderabad, Ahmedabad, Gurgaon, and Noida, are non-metro for FY 2025-26 and are restricted to the 40 percent cap."
          }
        },
        {
          "@type": "Question",
          "name": "Which new cities become metros for HRA from FY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under the Income Tax Rules 2026 effective from 1 April 2026, four cities are added to the metro list — Bengaluru, Hyderabad, Pune, and Ahmedabad. Combined with the original four, eight cities now qualify for the 50 percent salary cap. The 8-metro rule applies only to FY 2026-27 income onwards. Gurgaon, Noida, and Surat are not included despite being major business hubs."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim HRA exemption under the new tax regime?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. HRA exemption under Section 10(13A) is available exclusively under the old tax regime. If you opt for the new tax regime under Section 115BAC, the entire HRA received is fully taxable as salary income. This is one of the most significant trade-offs to consider when choosing between regimes — high-rent metro residents typically save more under the old regime due to HRA."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim HRA if I pay rent to my parents?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, rent paid to parents qualifies for HRA exemption, provided three conditions are met. A formal rent agreement should exist between you and your parent. Rent must be transferred via bank, not cash, with proper receipts. Your parent must declare the rental income in their own ITR under Income from House Property. The arrangement should reflect a genuine landlord-tenant relationship."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need to provide my landlord's PAN to claim HRA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If your annual rent exceeds ₹1,00,000 (₹8,333 per month), CBDT mandates that you obtain and submit your landlord's PAN to your employer for HRA exemption. If the landlord does not have a PAN, a written declaration with their name and address is required. Without this, the employer cannot allow HRA exemption while computing TDS, and you must claim it directly in your ITR."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim HRA exemption and home loan interest deduction simultaneously?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, both can be claimed together if your facts justify it. Common scenario: you own a house in city A but work and pay rent in city B. You claim HRA on the rental in city B and home loan interest under Section 24(b) on the property in city A. Both must be under the old regime. A genuine business or work reason for not living in your owned house is essential to defend the claim."
          }
        },
        {
          "@type": "Question",
          "name": "What if my actual rent is less than 10 percent of my salary?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If rent paid is less than 10 percent of your basic salary plus DA, the third condition (rent minus 10 percent of salary) becomes negative, which is treated as zero. Since exemption is the minimum of three values, your HRA exemption automatically becomes zero. The entire HRA received is then taxable. This often happens for low-rent arrangements such as paying nominal rent to family members."
          }
        },
        {
          "@type": "Question",
          "name": "What does 'salary' mean for HRA calculation under Rule 2A?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Rule 2A of the Income Tax Rules, salary for HRA exemption means basic salary plus dearness allowance (only the portion forming part of retirement benefits) plus commission as a fixed percentage of turnover. It excludes other allowances such as bonus, performance pay, conveyance, and special allowances. Always use this restricted definition; using gross salary will overstate the exemption and trigger reassessment risk."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim HRA without rent receipts or rent agreement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Technically the e-filing portal does not require uploading receipts, but the burden of proof rests on you in case of scrutiny. Maintain rent receipts for every month, a registered rent agreement, bank transfer evidence, and the landlord's PAN if rent exceeds ₹1 lakh annually. Under Income Tax Rules 2026, Form 124 replaces Form 12BB for declarations to employer from April 2026 onwards."
          }
        },
        {
          "@type": "Question",
          "name": "What can I claim if I do not receive HRA from my employer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If you pay rent but receive no HRA, you can claim a deduction under Section 80GG instead. The deduction is the lowest of ₹5,000 per month, 25 percent of adjusted total income, or rent paid minus 10 percent of adjusted total income. You must not own a residential property in your work city, and your spouse and minor child must not own one either. File Form 10BA along with your ITR."
          }
        },
        {
          "@type": "Question",
          "name": "How do I claim HRA exemption while filing my ITR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If your employer has already considered HRA exemption while computing TDS, it appears in Form 16 (Form 130 from FY 2026-27) and the ITR is pre-filled accordingly. If not, claim the exemption directly in the ITR under Income from Salary by reducing the gross salary by the exempt HRA. Maintain rent receipts, agreement, and bank statements as evidence. Choose the old regime; HRA is unavailable under new regime."
          }
        }
      ]
    }
    </script>
@endsection
   
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
        body {
            font-family: var(--font-body); background: var(--surface);
            color: var(--text); line-height: 1.65; -webkit-font-smoothing: antialiased;
        }

        .toc-nav {
            background: var(--primary-dark); position: sticky; top: 0; z-index: 100;
            overflow-x: auto; white-space: nowrap; -webkit-overflow-scrolling: touch;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        .toc-nav-inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; gap: 0; }
        .toc-nav a {
            color: rgba(255,255,255,0.75); text-decoration: none;
            font-size: 13px; font-weight: 500; padding: 12px 16px;
            transition: all 0.2s; border-bottom: 2px solid transparent; display: inline-block;
        }
        .toc-nav a:hover, .toc-nav a.active { color: #fff; border-bottom-color: var(--accent); }

        .breadcrumb {
            max-width: 1200px; margin: 0 auto; padding: 16px 20px 0;
            font-size: 13px; color: var(--text-muted);
        }
        .breadcrumb a { color: var(--primary-light); text-decoration: none; }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb span { margin: 0 6px; }

        .hero { max-width: 1200px; margin: 0 auto; padding: 32px 20px 24px; }
        .hero-meta { display: flex; flex-wrap: wrap; align-items: center; gap: 12px; margin-bottom: 16px; }
        .badge-updated {
            background: var(--primary); color: #fff;
            font-size: 12px; font-weight: 600;
            padding: 4px 12px; border-radius: 20px; letter-spacing: 0.3px;
        }
        .author-byline { font-size: 13px; color: var(--text-secondary); }
        .author-byline strong { color: var(--primary); font-weight: 600; }
        .hero h1 {
            font-size: clamp(28px, 5vw, 42px); font-weight: 700;
            color: var(--primary-dark); line-height: 1.2; margin-bottom: 16px;
        }
        .hero h1 span { color: var(--accent); display: inline; }

        .tldr {
            background: var(--card); border-left: 4px solid var(--accent);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 20px 24px; margin: 0 auto 32px; max-width: 1200px;
            box-shadow: var(--shadow-sm);
        }
        .tldr-label {
            font-family: var(--font-mono); font-size: 12px; font-weight: 700;
            color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;
        }
        .tldr p { font-size: 15px; color: var(--text-secondary); line-height: 1.7; }

        .main-layout {
            max-width: 1200px; margin: 0 auto; padding: 0 20px 40px;
            display: grid; grid-template-columns: 1fr; gap: 32px;
        }
        @media (min-width: 768px) { .main-layout { grid-template-columns: 1fr 320px; gap: 40px; } }
        .content-col, .sidebar-col { min-width: 0; }

        .calc-card {
            background: var(--card); border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg); padding: 32px; margin-bottom: 40px;
            border: 1px solid var(--border);
        }
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 8px; }
        .calc-intro { font-size: 14px; color: var(--text-secondary); margin-bottom: 24px; line-height: 1.65; }

        .calc-row {
            display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px;
        }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }

        .form-group label {
            display: block; font-size: 13px; font-weight: 600;
            color: var(--text-secondary); margin-bottom: 6px;
            text-transform: uppercase; letter-spacing: 0.5px;
        }
        .form-group input, .form-group select {
            width: 100%; padding: 12px 16px;
            border: 2px solid var(--border); border-radius: var(--radius);
            font-family: var(--font-body); font-size: 16px;
            color: var(--text); background: var(--surface);
            transition: border-color 0.2s;
        }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }

        .toggle-group {
            display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px;
        }
        .toggle-btn {
            flex: 1; padding: 10px 16px; border: none; border-radius: 8px;
            font-family: var(--font-body); font-size: 14px; font-weight: 600;
            color: var(--text-muted); background: transparent; cursor: pointer;
            transition: all 0.25s; -webkit-tap-highlight-color: transparent;
        }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active {
            background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm);
        }

        .city-list-display {
            margin-top: 6px;
            font-size: 12px;
            color: var(--text-muted);
            font-style: italic;
            min-height: 18px;
        }

        .btn-calculate {
            width: 100%; padding: 14px; background: var(--primary); color: #fff;
            border: none; border-radius: var(--radius);
            font-family: var(--font-body); font-size: 16px; font-weight: 700;
            cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px;
        }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }

        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        .eligibility-banner {
            padding: 16px 20px; border-radius: var(--radius); margin-bottom: 20px;
            font-weight: 600; font-size: 15px; display: flex; align-items: center; gap: 10px;
        }
        .eligibility-banner.eligible { background: #D1FAE5; color: #065F46; border: 1px solid #6EE7B7; }
        .eligibility-banner.partial { background: #FEF3C7; color: #92400E; border: 1px solid #FCD34D; }
        .eligibility-banner.not-eligible { background: #FEE2E2; color: #991B1B; border: 1px solid #FCA5A5; }
        .eligibility-banner .ico { font-size: 24px; flex-shrink: 0; }

        .conditions-grid {
            display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px;
        }
        @media (min-width: 600px) { .conditions-grid { grid-template-columns: 1fr 1fr 1fr; } }

        .condition-card {
            background: var(--surface); border-radius: var(--radius);
            padding: 18px 20px; border: 2px solid var(--border);
            position: relative; transition: all 0.3s;
        }
        .condition-card.binding {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            border-color: var(--accent);
        }
        .condition-card.binding .cond-num,
        .condition-card.binding .cond-desc,
        .condition-card.binding .cond-val { color: var(--primary-dark); }
        .condition-card.binding::after {
            content: "← LOWEST";
            position: absolute; top: 8px; right: 12px;
            font-size: 10px; font-weight: 700;
            color: var(--primary-dark); letter-spacing: 0.5px;
        }
        .cond-num {
            font-family: var(--font-mono); font-size: 11px; font-weight: 700;
            color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px;
        }
        .cond-desc {
            font-size: 13px; color: var(--text-secondary);
            margin: 6px 0 8px; line-height: 1.4;
        }
        .cond-val {
            font-family: var(--font-mono); font-size: 22px; font-weight: 700;
            color: var(--primary-dark);
        }

        .result-grid {
            display: grid; grid-template-columns: 1fr; gap: 12px;
        }
        @media (min-width: 500px) { .result-grid { grid-template-columns: 1fr 1fr; } }

        .result-card {
            background: var(--surface); border-radius: var(--radius);
            padding: 16px 20px; border: 1px solid var(--border);
        }
        .result-card.highlight { background: var(--primary); border-color: var(--primary); }
        .result-card.highlight .result-label, .result-card.highlight .result-value { color: #fff; }
        .result-label {
            font-size: 12px; font-weight: 600; color: var(--text-muted);
            text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px;
        }
        .result-value {
            font-family: var(--font-mono); font-size: 22px; font-weight: 700;
            color: var(--primary-dark);
        }

        .result-breakdown {
            margin-top: 16px; background: var(--surface-alt);
            border-radius: var(--radius); padding: 16px 20px;
        }
        .result-breakdown h4 {
            font-size: 14px; font-weight: 700; color: var(--primary-dark);
            margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.5px;
        }
        .breakdown-row {
            display: flex; justify-content: space-between; align-items: center;
            padding: 8px 0; font-size: 14px;
        }
        .breakdown-row:not(:last-child) { border-bottom: 1px dashed var(--border); }
        .breakdown-label { color: var(--text-secondary); }
        .breakdown-value { font-family: var(--font-mono); font-weight: 700; color: var(--text); }
        .breakdown-row.total {
            font-weight: 700; font-size: 15px; padding-top: 12px;
            border-top: 2px solid var(--border) !important; margin-top: 4px;
        }
        .breakdown-row.total .breakdown-label,
        .breakdown-row.total .breakdown-value { color: var(--primary-dark); }

        .btn-reset {
            display: inline-flex; align-items: center; gap: 6px;
            margin-top: 16px; padding: 8px 16px;
            border: 1px solid var(--border); border-radius: 8px;
            background: var(--card); color: var(--text-muted);
            font-family: var(--font-body); font-size: 13px; font-weight: 500;
            cursor: pointer; transition: all 0.2s;
        }
        .btn-reset:hover { border-color: var(--danger); color: var(--danger); }

        .content-section {
            background: var(--card); border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm); padding: 32px; margin-bottom: 32px;
            border: 1px solid var(--border);
        }
        .content-section h2 {
            font-size: 24px; font-weight: 700; color: var(--primary-dark);
            margin-bottom: 16px; line-height: 1.3;
        }
        .content-section h3 {
            font-size: 18px; font-weight: 700; color: var(--primary-dark);
            margin: 20px 0 10px;
        }
        .content-section p {
            font-size: 15px; color: var(--text-secondary);
            margin-bottom: 14px; line-height: 1.75;
        }
        .content-section ul, .content-section ol {
            margin: 8px 0 16px 24px; color: var(--text-secondary);
            font-size: 15px; line-height: 1.75;
        }
        .content-section li { margin-bottom: 6px; }
        .content-section a {
            color: var(--primary-light); text-decoration: underline; text-underline-offset: 2px;
        }
        .content-section a:hover { color: var(--primary); }

        .rate-table {
            width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px;
        }
        .rate-table thead th {
            background: var(--primary); color: #fff;
            padding: 12px 16px; text-align: left; font-weight: 600;
            font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px;
        }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td {
            padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary);
        }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }

        .formula-box {
            background: var(--primary-dark); color: #fff;
            border-radius: var(--radius); padding: 20px 24px; margin: 16px 0;
            font-family: var(--font-mono); font-size: 14px; line-height: 1.8; overflow-x: auto;
        }
        .formula-box .label { color: var(--accent-light); font-weight: 700; }

        .callout {
            background: #EFF6FF; border-left: 4px solid var(--info);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 16px 20px; margin: 16px 0;
        }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }
        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }

        .faq-item {
            background: var(--surface); border-radius: var(--radius);
            margin-bottom: 10px; border: 1px solid var(--border);
            overflow: hidden; transition: box-shadow 0.2s;
        }
        .faq-item:hover { box-shadow: var(--shadow-sm); }
        .faq-question {
            display: flex; justify-content: space-between; align-items: center;
            width: 100%; padding: 16px 20px; border: none; background: none;
            font-family: var(--font-body); font-size: 15px; font-weight: 600;
            color: var(--text); cursor: pointer; text-align: left;
            line-height: 1.4; gap: 12px; -webkit-tap-highlight-color: transparent;
        }
        .faq-question * { pointer-events: none; }
        .faq-icon {
            flex-shrink: 0; width: 24px; height: 24px;
            border-radius: 50%; background: var(--primary); color: #fff;
            display: flex; align-items: center; justify-content: center;
            font-size: 16px; transition: transform 0.3s;
        }
        .faq-item.open .faq-icon { transform: rotate(45deg); }
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; }
        .faq-item.open .faq-answer { max-height: 600px; }
        .faq-answer-inner {
            padding: 0 20px 16px; font-size: 14px;
            color: var(--text-secondary); line-height: 1.75;
        }

        .sidebar-card {
            background: var(--card); border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm); padding: 24px;
            margin-bottom: 24px; border: 1px solid var(--border);
        }
        .sidebar-card h3 {
            font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 14px;
        }
        .sidebar-link {
            display: block; padding: 10px 14px; border-radius: 8px;
            font-size: 14px; font-weight: 500; color: var(--text-secondary);
            text-decoration: none; transition: all 0.2s; margin-bottom: 4px;
            -webkit-tap-highlight-color: rgba(0,0,0,0.05); touch-action: manipulation;
        }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }

        .cta-card {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: #fff; border-radius: var(--radius-lg);
            padding: 28px 24px; margin-bottom: 24px; text-align: center;
        }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn {
            display: inline-block; padding: 12px 28px;
            background: var(--accent); color: var(--primary-dark);
            font-weight: 700; font-size: 14px; border-radius: 8px;
            text-decoration: none; transition: background 0.2s;
            -webkit-tap-highlight-color: rgba(0,0,0,0.1); touch-action: manipulation;
        }
        .cta-btn:hover { background: var(--accent-light); }

        .body-cta {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: #fff; border-radius: var(--radius-lg);
            padding: 32px; margin: 28px 0; text-align: center;
        }
        .body-cta h3 { color: #fff; font-size: 22px; margin-bottom: 10px; }
        .body-cta p { font-size: 15px; color: rgba(255,255,255,0.9); margin-bottom: 20px; line-height: 1.65; }

        .office-strip {
            background: var(--primary-dark); text-align: center;
            padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px;
        }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }

        .footer {
            background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center; padding: 16px 20px;
            font-size: 13px; color: rgba(255,255,255,0.5);
        }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }

        .noscript-box {
            background: #FEE2E2; border: 2px solid #DC2626;
            border-radius: var(--radius); padding: 20px;
            text-align: center; color: #991B1B;
            font-weight: 600; margin-bottom: 20px;
        }

        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
            .body-cta { padding: 24px 20px; }
            .body-cta h3 { font-size: 18px; }
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

<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#metro-cities">Metro Cities</a>
        <a href="#examples">Examples</a>
        <a href="#new-regime">Old vs New</a>
        <a href="#documentation">Documentation</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    HRA Exemption Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>HRA Exemption Calculator — <span>Section 10(13A) &amp; Rule 2A</span> for FY 2025-26</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">
            Confused about HRA exemption? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.
        </div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20HRA%20Exemption%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="Chat with us on WhatsApp" rel="noopener">
                <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                WhatsApp
            </a>
            <a href="mailto:sales@patronaccounting.com?subject=HRA%20Exemption%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20HRA%20Exemption%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20HRA%20exemption%20under%20Section%2010%2813A%29.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email
            </a>
        </div>
    </div>
</div>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Calculate your tax-free <strong>House Rent Allowance (HRA)</strong> under Section 10(13A) instantly. Exemption is the lowest of three values — actual HRA received, 50% of basic+DA in metros (40% non-metros), and rent paid minus 10% of basic+DA. <strong>For FY 2025-26 ITR, only Delhi, Mumbai, Kolkata, and Chennai are metros.</strong> From FY 2026-27, Income Tax Rules 2026 add Bengaluru, Hyderabad, Pune, and Ahmedabad to the metro list. HRA exemption is available only under the old regime — the new regime fully taxes your HRA.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Your HRA Exemption</h2>
            <p class="calc-intro">Choose your financial year and city type, enter your salary components, and the tool applies the three-condition lowest formula automatically.</p>

            <noscript>
                <div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or use the manual formula in the content below.</div>
            </noscript>

            <div class="calc-row">
                <div class="form-group">
                    <label>Financial Year</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="2025-26" onclick="setFY(this)">
                            FY 2025-26<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">4-metro rule</small>
                        </button>
                        <button type="button" class="toggle-btn" data-value="2026-27" onclick="setFY(this)">
                            FY 2026-27<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">8-metro rule</small>
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <label>City Type</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="metro" onclick="setCity(this)">
                            Metro<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">50% of salary</small>
                        </button>
                        <button type="button" class="toggle-btn" data-value="nonmetro" onclick="setCity(this)">
                            Non-Metro<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">40% of salary</small>
                        </button>
                    </div>
                    <div class="city-list-display" id="cityList">Metros: Delhi, Mumbai, Kolkata, Chennai</div>
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label>Input Period</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn active" data-value="monthly" onclick="setPeriod(this)">Monthly Inputs</button>
                    <button type="button" class="toggle-btn" data-value="annual" onclick="setPeriod(this)">Annual Inputs</button>
                </div>
            </div>

            <div class="calc-row three-col">
                <div class="form-group">
                    <label for="basic">Basic Salary + DA (₹)</label>
                    <input type="text" id="basic" placeholder="e.g. 50000" autocomplete="off" inputmode="decimal">
                </div>
                <div class="form-group">
                    <label for="hra">HRA Received (₹)</label>
                    <input type="text" id="hra" placeholder="e.g. 20000" autocomplete="off" inputmode="decimal">
                </div>
                <div class="form-group">
                    <label for="rent">Rent Paid (₹)</label>
                    <input type="text" id="rent" placeholder="e.g. 25000" autocomplete="off" inputmode="decimal">
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate HRA Exemption</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>

                <div class="eligibility-banner" id="eligBanner">
                    <span class="ico" id="eligIco">✓</span>
                    <span id="eligText">—</span>
                </div>

                <h4 style="font-size:14px;font-weight:700;color:var(--primary-dark);margin-bottom:10px;text-transform:uppercase;letter-spacing:0.5px;">Three Conditions — Annual Values</h4>
                <div class="conditions-grid" id="condGrid">
                    <div class="condition-card" data-cond="1">
                        <div class="cond-num">Condition 1</div>
                        <div class="cond-desc">Actual HRA Received</div>
                        <div class="cond-val" id="cond1">—</div>
                    </div>
                    <div class="condition-card" data-cond="2">
                        <div class="cond-num">Condition 2</div>
                        <div class="cond-desc" id="cond2desc">% of Basic + DA</div>
                        <div class="cond-val" id="cond2">—</div>
                    </div>
                    <div class="condition-card" data-cond="3">
                        <div class="cond-num">Condition 3</div>
                        <div class="cond-desc">Rent Paid − 10% of Basic + DA</div>
                        <div class="cond-val" id="cond3">—</div>
                    </div>
                </div>

                <div class="result-grid">
                    <div class="result-card highlight" style="grid-column: 1 / -1;">
                        <div class="result-label">HRA Exempt under Section 10(13A) — Annual</div>
                        <div class="result-value" id="resExempt">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Annual HRA Received</div>
                        <div class="result-value" id="resHraTotal">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Taxable HRA (Balance)</div>
                        <div class="result-value" id="resTaxable">—</div>
                    </div>
                </div>

                <div class="result-breakdown">
                    <h4>Calculation Breakdown</h4>
                    <div id="breakdownRows"></div>
                </div>

                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            
                <div class="post-result-cta" id="postResultCTA">
    <div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div>
    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — HRA Exemption Calculator validation, professional documentation, no obligation.</div>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20HRA%20Exemption%20Calculator.%20Please%20review%20my%20exemption%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=HRA%20Exemption%20Calculator%20%E2%80%94%20Review%20Request&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20HRA%20Exemption%20Calculator%20and%20would%20like%20a%20Chartered%20Accountant%20to%20review%20my%20output%20before%20I%20act%20on%20it.%0A%0APlease%20advise%20on%20next%20steps%20for%20HRA%20exemption%20under%20Section%2010%2813A%29.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How HRA Exemption Works Under Section 10(13A)</h2>
            <p>Section 10(13A) of the Income Tax Act 1961 read with Rule 2A of the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Rules</a> grants a tax exemption on House Rent Allowance to salaried employees who genuinely pay rent for residential accommodation. The exemption is calculated using a strict three-condition formula — the lowest of the three values is your tax-free HRA. Anything beyond is added to taxable salary. Patron's Chartered Accountants apply this calculation in line with the audit standards prescribed by the <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India (ICAI)</a>.</p>

            <h3>The Three-Condition Formula</h3>
            <div class="formula-box">
                <span class="label">HRA Exemption</span> = MIN of:<br>
                &nbsp;&nbsp;<span class="label">(1)</span> Actual HRA Received<br>
                &nbsp;&nbsp;<span class="label">(2)</span> 50% of (Basic + DA) — if metro city<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OR 40% of (Basic + DA) — if non-metro<br>
                &nbsp;&nbsp;<span class="label">(3)</span> Actual Rent Paid − 10% of (Basic + DA)
            </div>

            <p>The lowest value among these three becomes your HRA exemption. The "binding constraint" — the condition that produces the lowest value — varies by salary structure. For most metro residents with high rent and modest HRA, condition three (rent minus 10% of salary) is the binding constraint. For employees whose HRA is generously structured, condition one or two often binds.</p>

            <h3>Definition of "Salary" for Rule 2A</h3>
            <p>Critically, "salary" for HRA calculation is not your gross salary. It is restricted to: <strong>Basic Salary + Dearness Allowance</strong> (only the portion forming part of retirement benefits) <strong>+ commission as a fixed percentage of turnover</strong>. It excludes bonus, performance-linked pay, conveyance, special allowance, LTA, and overtime. Using the wrong base inflates the exemption and creates reassessment risk.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> If your salary structure changes mid-year (promotion, increment, city transfer), HRA must be calculated separately for each period and summed. The same applies if you change your rented home — calculate HRA exemption for the period at each rent level. Most calculators (including this one) compute on annual basis assuming stable inputs; for split-year scenarios, run the calculator twice.</p>
            </div>
        </section>

        <section class="content-section" id="metro-cities">
            <h2>Metro vs Non-Metro — The 4-City and 8-City Rules</h2>
            <p>Whether you live in a metro or non-metro city directly determines whether condition two of the formula uses 50% or 40% of your salary. The Income Tax Department's metro list was unchanged for over two decades until <a href="https://www.finmin.nic.in/" target="_blank" rel="noopener">Budget 2025</a> and the subsequent Income Tax Rules 2026 expanded it, with confirming announcements via <a href="https://www.pib.gov.in/" target="_blank" rel="noopener">PIB</a>.</p>

            <h3>For FY 2025-26 (AY 2026-27) — Old 4-Metro Rule</h3>
            <p>For ITR filing for FY 2025-26 — the return you are filing in 2026 with deadline 31 July 2026 — only four cities are metros under Section 10(13A):</p>
            <ul>
                <li><strong>Delhi</strong> (including New Delhi)</li>
                <li><strong>Mumbai</strong></li>
                <li><strong>Kolkata</strong></li>
                <li><strong>Chennai</strong></li>
            </ul>
            <p>Every other city — including Bengaluru, Pune, Hyderabad, Ahmedabad, Gurgaon, Noida, Surat, Jaipur — is non-metro for FY 2025-26 and qualifies only for the 40% cap.</p>

            <h3>From FY 2026-27 — New 8-Metro Rule</h3>
            <p>Under the <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Income Tax Rules 2026</a> notified alongside the Income Tax Act 2025, four additional cities join the metro list effective 1 April 2026 for income earned during Tax Year 2026-27 onwards:</p>
            <ul>
                <li><strong>Bengaluru</strong></li>
                <li><strong>Hyderabad</strong></li>
                <li><strong>Pune</strong></li>
                <li><strong>Ahmedabad</strong></li>
            </ul>
            <p>Combined with the original four, eight cities now enjoy the 50% cap. This is a long-overdue alignment with rental cost reality in India's tech and business hubs. Notably absent from the new list: Gurgaon, Noida, and Surat — these remain non-metro despite high rentals.</p>

            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Period</th><th>Metro Cities (50%)</th><th>Non-Metro (40%)</th></tr>
                </thead>
                <tbody>
                    <tr><td>FY 2025-26 ITR (filing in 2026)</td><td>Delhi, Mumbai, Kolkata, Chennai</td><td>All other cities including Bengaluru, Pune, Hyderabad, Ahmedabad</td></tr>
                    <tr><td>FY 2026-27 onwards (Tax Year 2026-27)</td><td>Delhi, Mumbai, Kolkata, Chennai, Bengaluru, Hyderabad, Pune, Ahmedabad</td><td>All other cities</td></tr>
                </tbody>
            </table></div>

            <div class="callout warn">
                <p><strong>Common error:</strong> Bengaluru-, Pune-, Hyderabad-, and Ahmedabad-based employees often assume metro status based on city size or popular usage. For Section 10(13A), only the official Income Tax classification counts. If you are filing your FY 2025-26 ITR, you must use the 40% non-metro rate even if you live in Bengaluru. Toggle the FY in this calculator carefully.</p>
            </div>
        </section>

        <section class="content-section" id="examples">
            <h2>Worked Examples — Three Common Scenarios</h2>
            <p>The binding constraint changes the answer dramatically. These three examples illustrate the most common patterns we see in practice at Patron Accounting.</p>

            <h3>Example 1 — Metro Resident, Modest Rent (Condition 3 binds)</h3>
            <p>Mumbai-based software engineer; Basic+DA ₹6,00,000/yr; HRA received ₹3,00,000/yr; Rent paid ₹2,40,000/yr.</p>
            <div class="table-scroll"><table class="rate-table">
                <tbody>
                    <tr><td>(1) Actual HRA Received</td><td>₹3,00,000</td></tr>
                    <tr><td>(2) 50% of Basic+DA (Metro)</td><td>₹3,00,000</td></tr>
                    <tr><td>(3) Rent − 10% of Basic+DA = ₹2,40,000 − ₹60,000</td><td><strong>₹1,80,000</strong> ← lowest</td></tr>
                    <tr><td><strong>HRA Exemption</strong></td><td><strong>₹1,80,000</strong></td></tr>
                    <tr><td>Taxable HRA (₹3,00,000 − ₹1,80,000)</td><td>₹1,20,000</td></tr>
                </tbody>
            </table></div>
            <p>Condition 3 binds because rent is too low relative to salary.</p>

            <h3>Example 2 — Metro Resident, High Rent (Condition 2 binds)</h3>
            <p>Delhi-based bank manager; Basic+DA ₹8,00,000/yr; HRA received ₹4,00,000/yr; Rent paid ₹6,00,000/yr.</p>
            <div class="table-scroll"><table class="rate-table">
                <tbody>
                    <tr><td>(1) Actual HRA Received</td><td>₹4,00,000</td></tr>
                    <tr><td>(2) 50% of Basic+DA (Metro)</td><td><strong>₹4,00,000</strong> ← tied lowest</td></tr>
                    <tr><td>(3) Rent − 10% of Basic+DA = ₹6,00,000 − ₹80,000</td><td>₹5,20,000</td></tr>
                    <tr><td><strong>HRA Exemption</strong></td><td><strong>₹4,00,000</strong></td></tr>
                    <tr><td>Taxable HRA</td><td>₹0 (full exemption)</td></tr>
                </tbody>
            </table></div>
            <p>Conditions 1 and 2 tie at ₹4,00,000 because employer matched HRA to the regulatory cap. Condition 3 doesn't bind because high rent comfortably exceeds 10% of salary.</p>

            <h3>Example 3 — Bengaluru: Where the FY 2026-27 Metro Upgrade Actually Helps</h3>
            <p>Bengaluru-based consultant; Basic+DA ₹10,00,000/yr; HRA received ₹6,00,000/yr; Rent paid ₹6,00,000/yr. Compare FY 2025-26 vs FY 2026-27:</p>
            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Condition</th><th>FY 2025-26 (Non-Metro 40%)</th><th>FY 2026-27 (Metro 50%)</th></tr>
                </thead>
                <tbody>
                    <tr><td>(1) Actual HRA Received</td><td>₹6,00,000</td><td>₹6,00,000</td></tr>
                    <tr><td>(2) % of Basic+DA</td><td><strong>₹4,00,000</strong> ← binds</td><td>₹5,00,000</td></tr>
                    <tr><td>(3) Rent − 10% of Basic+DA</td><td>₹5,00,000</td><td><strong>₹5,00,000</strong> ← binds</td></tr>
                    <tr><td><strong>HRA Exemption</strong></td><td><strong>₹4,00,000</strong></td><td><strong>₹5,00,000</strong></td></tr>
                    <tr><td>Taxable HRA</td><td>₹2,00,000</td><td>₹1,00,000</td></tr>
                </tbody>
            </table></div>
            <p>Under FY 2025-26 rules, condition 2 (40% of salary) is the binding constraint at ₹4,00,000. Under FY 2026-27 rules with the metro upgrade, condition 2 rises to ₹5,00,000 and condition 3 becomes binding instead — yielding ₹1,00,000 of additional exemption. At a 30% marginal slab plus 4% cess, that translates to roughly ₹31,200 in additional tax savings annually.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> The 4-to-8 metro expansion is a real saving only for taxpayers where condition 2 was the binding constraint at 40%. If condition 3 (rent minus 10%) was binding at 40%, it remains binding at 50% — the higher cap simply becomes irrelevant. For most renters in Bengaluru, Pune, Hyderabad, and Ahmedabad with realistic rent, the FY 2026-27 reclassification will <em>not</em> increase exemption. Run this calculator at both rates to see whether you actually benefit from the upgrade.</p>
            </div>
        </section>

        <div class="body-cta">
    <h3>Need Help with HRA Claims?</h3>
    <p>Patron's CAs structure your salary for maximum HRA exemption, validate rent receipts, and file ITR with Section 10(13A) claims documented. We support Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20HRA%20Exemption%20Calculator.%20I%20need%20help%20with%20HRA%20exemption%20under%20Section%2010%2813A%29.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=HRA%20Exemption%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20HRA%20Exemption%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20HRA%20exemption%20under%20Section%2010%2813A%29.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <section class="content-section" id="new-regime">
            <h2>HRA Under Old vs New Tax Regime</h2>
            <p>The single most important rule about HRA is this: <strong>HRA exemption is available only under the old tax regime.</strong> If you opt for the new tax regime under Section 115BAC, the entire HRA you receive is added to your taxable salary. Section 10(13A) is one of the deductions explicitly disabled in the new regime.</p>

            <h3>Decision Framework</h3>
            <p>Choose the old regime if your HRA exemption (plus other deductions like 80C, 80D, home loan interest, LTA) reduces your tax more than the new regime's lower slab rates. As a thumb rule:</p>
            <ul>
                <li><strong>Metro renters paying ₹25,000+/month</strong> typically save more under old regime due to HRA alone.</li>
                <li><strong>Non-metro renters or low-rent payers</strong> often find new regime more attractive — especially after Budget 2025 raised the rebate threshold to ₹12 lakh.</li>
                <li><strong>Salaried with home loan and ₹1.5L 80C usage</strong> — old regime usually wins.</li>
                <li><strong>Salaried under ₹12 lakh income with no major deductions</strong> — new regime wins via Section 87A rebate.</li>
            </ul>
            <p>Run both regimes annually using the <a href="/tools/income-tax-calculator">Income Tax Calculator</a> and <a href="/tools/section-87a-rebate-calculator">Section 87A Rebate Calculator</a> before locking in your regime declaration with HR.</p>

            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Aspect</th><th>Old Regime</th><th>New Regime</th></tr>
                </thead>
                <tbody>
                    <tr><td>HRA Section 10(13A)</td><td>Available</td><td>Not available</td></tr>
                    <tr><td>Standard Deduction (salaried)</td><td>₹50,000</td><td>₹75,000</td></tr>
                    <tr><td>80C / 80D / 80E / 80G</td><td>Available</td><td>Not available</td></tr>
                    <tr><td>Home Loan Interest (24b)</td><td>Available</td><td>Available only for let-out property</td></tr>
                    <tr><td>Section 87A Rebate</td><td>₹12,500 (income ≤ ₹5L)</td><td>₹60,000 (income ≤ ₹12L)</td></tr>
                    <tr><td>Default for FY 2025-26</td><td>Optional, opt-in</td><td>Default</td></tr>
                </tbody>
            </table></div>
        </section>

        <section class="content-section" id="documentation">
            <h2>Documentation &amp; Compliance Requirements</h2>
            <p>HRA is one of the most commonly disallowed exemptions during scrutiny because employees frequently lack supporting documents. Keep this checklist current and store records for at least six assessment years.</p>

            <h3>Documents to Maintain</h3>
            <ul>
                <li><strong>Rent agreement</strong> — preferably registered if rent exceeds ₹15,000/month or duration exceeds 11 months. Unregistered agreements are accepted but offer weaker evidence.</li>
                <li><strong>Monthly rent receipts</strong> signed by the landlord. Above ₹5,000/month, affix revenue stamps. Receipts must show period, address, amount, and landlord's signature.</li>
                <li><strong>Bank transfer evidence</strong> — UPI/NEFT/RTGS records. Cash payments above ₹5,000/month are flagged for scrutiny under Section 269ST.</li>
                <li><strong>Landlord's PAN</strong> — mandatory if annual rent exceeds ₹1,00,000. Without PAN, a written declaration with name and address is the minimum evidence.</li>
                <li><strong>Form 12BB / Form 124</strong> — investment declaration submitted to your employer, downloadable from the <a href="https://www.incometax.gov.in/iec/foportal/" target="_blank" rel="noopener">Income Tax e-filing portal</a>. From April 2026, Form 12BB is replaced by Form 124 under the Income Tax Rules 2026.</li>
                <li><strong>TDS by tenant</strong> — if monthly rent exceeds ₹50,000, the tenant (you) must deduct TDS at 5% under Section 194IB and deposit it with PAN of landlord. Annual filing through Form 26QC.</li>
            </ul>

            <h3>If Employer Did Not Allow HRA in Form 16</h3>
            <p>If you did not submit declarations on time and your employer issued Form 16 (Form 130 from FY 2026-27) without HRA exemption, you can still claim it directly in your ITR. Compute the exemption using this tool, reduce your taxable salary by the exempt amount, and file the ITR under old regime. Be ready to support the claim if a Section 143(1) intimation arrives — see our <a href="/tools/ais-reconciliation-tool">AIS Reconciliation Tool</a> for context.</p>

            <div class="callout warn">
                <p><strong>High-risk patterns:</strong> Paying rent to spouse, paying nominal rent (e.g., ₹1,000/month) to parents while claiming inflated HRA, claiming HRA for a property you actually own — these are flagged in CPC's automated scrutiny algorithms. Pay realistic rent via bank, document genuinely, and ensure the recipient declares the rental income in their ITR.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About HRA Exemption</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is HRA exemption under Section 10(13A) of the Income Tax Act?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 10(13A) of the Income Tax Act 1961 read with Rule 2A allows a salaried employee to claim a portion of House Rent Allowance as tax-free if rent is genuinely paid for residential accommodation. The exemption is available only under the old tax regime and is calculated as the lowest of three conditions involving actual HRA received, percentage of salary, and rent paid minus 10 percent of salary.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is HRA exemption calculated using the three-condition formula?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">HRA exemption is the lowest of three values. First, the actual HRA received from your employer. Second, 50 percent of basic salary plus DA if you live in a metro city, or 40 percent if non-metro. Third, the actual rent paid minus 10 percent of salary. The minimum of these three is your exempt HRA — the balance is taxed as part of your salary.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Which cities qualify as metros for HRA exemption in FY 2025-26?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For FY 2025-26 (AY 2026-27) ITR filing, only four cities qualify as metros under Section 10(13A) — Delhi, Mumbai, Kolkata, and Chennai. Residents of these cities are eligible for the 50 percent of salary cap under condition two. All other cities, including Bengaluru, Pune, Hyderabad, Ahmedabad, Gurgaon, and Noida, are non-metro for FY 2025-26 and are restricted to the 40 percent cap.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Which new cities become metros for HRA from FY 2026-27?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under the Income Tax Rules 2026 effective from 1 April 2026, four cities are added to the metro list — Bengaluru, Hyderabad, Pune, and Ahmedabad. Combined with the original four, eight cities now qualify for the 50 percent salary cap. The 8-metro rule applies only to FY 2026-27 income onwards. Gurgaon, Noida, and Surat are not included despite being major business hubs.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can I claim HRA exemption under the new tax regime?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. HRA exemption under Section 10(13A) is available exclusively under the old tax regime. If you opt for the new tax regime under Section 115BAC, the entire HRA received is fully taxable as salary income. This is one of the most significant trade-offs to consider when choosing between regimes — high-rent metro residents typically save more under the old regime due to HRA.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can I claim HRA if I pay rent to my parents?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, rent paid to parents qualifies for HRA exemption, provided three conditions are met. A formal rent agreement should exist between you and your parent. Rent must be transferred via bank, not cash, with proper receipts. Your parent must declare the rental income in their own ITR under Income from House Property. The arrangement should reflect a genuine landlord-tenant relationship.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Do I need to provide my landlord's PAN to claim HRA?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">If your annual rent exceeds ₹1,00,000 (₹8,333 per month), CBDT mandates that you obtain and submit your landlord's PAN to your employer for HRA exemption. If the landlord does not have a PAN, a written declaration with their name and address is required. Without this, the employer cannot allow HRA exemption while computing TDS, and you must claim it directly in your ITR.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can I claim HRA exemption and home loan interest deduction simultaneously?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, both can be claimed together if your facts justify it. Common scenario: you own a house in city A but work and pay rent in city B. You claim HRA on the rental in city B and home loan interest under Section 24(b) on the property in city A. Both must be under the old regime. A genuine business or work reason for not living in your owned house is essential to defend the claim.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What if my actual rent is less than 10 percent of my salary?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">If rent paid is less than 10 percent of your basic salary plus DA, the third condition (rent minus 10 percent of salary) becomes negative, which is treated as zero. Since exemption is the minimum of three values, your HRA exemption automatically becomes zero. The entire HRA received is then taxable. This often happens for low-rent arrangements such as paying nominal rent to family members.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What does 'salary' mean for HRA calculation under Rule 2A?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Rule 2A of the Income Tax Rules, salary for HRA exemption means basic salary plus dearness allowance (only the portion forming part of retirement benefits) plus commission as a fixed percentage of turnover. It excludes other allowances such as bonus, performance pay, conveyance, and special allowances. Always use this restricted definition; using gross salary will overstate the exemption and trigger reassessment risk.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can I claim HRA without rent receipts or rent agreement?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Technically the e-filing portal does not require uploading receipts, but the burden of proof rests on you in case of scrutiny. Maintain rent receipts for every month, a registered rent agreement, bank transfer evidence, and the landlord's PAN if rent exceeds ₹1 lakh annually. Under Income Tax Rules 2026, Form 124 replaces Form 12BB for declarations to employer from April 2026 onwards.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What can I claim if I do not receive HRA from my employer?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">If you pay rent but receive no HRA, you can claim a deduction under Section 80GG instead. The deduction is the lowest of ₹5,000 per month, 25 percent of adjusted total income, or rent paid minus 10 percent of adjusted total income. You must not own a residential property in your work city, and your spouse and minor child must not own one either. File Form 10BA along with your ITR.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How do I claim HRA exemption while filing my ITR?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">If your employer has already considered HRA exemption while computing TDS, it appears in Form 16 (Form 130 from FY 2026-27) and the ITR is pre-filled accordingly. If not, claim the exemption directly in the ITR under Income from Salary by reducing the gross salary by the exempt HRA. Maintain rent receipts, agreement, and bank statements as evidence. Choose the old regime; HRA is unavailable under new regime.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
    <h3>CA-Reviewed HRA Filing</h3>
    <p>Get HRA exemption maximised and ITR-1 filed with full Section 10(13A) documentation — fixed-fee.</p>
    <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20HRA%20Exemption%20Calculator.%20I%20need%20help%20with%20HRA%20exemption%20under%20Section%2010%2813A%29.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=HRA%20Exemption%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20HRA%20Exemption%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20HRA%20exemption%20under%20Section%2010%2813A%29.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
            <a href="/itr-filing-for-salary" class="sidebar-link">ITR Filing for Salary <span class="arrow">→</span></a>
            <a href="/payroll-processing-and-management-services" class="sidebar-link">Payroll Services <span class="arrow">→</span></a>
            <a href="/income-tax-notice" class="sidebar-link">Income Tax Notice Assistance <span class="arrow">→</span></a>
            <a href="/tds-return/" class="sidebar-link">TDS Return Filing <span class="arrow">→</span></a>
            <a href="/itr-filing-for-freelancers-professionals" class="sidebar-link">ITR for Freelancers <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/section-87a-rebate-calculator" class="sidebar-link">Section 87A Rebate Calculator <span class="arrow">→</span></a>
            <a href="/tools/old-vs-new-regime-calculator" class="sidebar-link">Old vs New Regime Calculator <span class="arrow">→</span></a>
            <a href="/tools/tds-on-salary-calculator" class="sidebar-link">TDS on Salary Calculator <span class="arrow">→</span></a>
            <a href="/tools/ctc-to-in-hand-salary-calculator" class="sidebar-link">CTC to In-Hand Calculator <span class="arrow">→</span></a>
            <a href="/tools/ais-reconciliation-tool" class="sidebar-link">AIS Reconciliation Tool <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/hra-exemption-2026-pune-bengaluru-hyderabad-ahmedabad-50-percent" class="sidebar-link">HRA Exemption 2026 — 8 Cities at 50% <span class="arrow">→</span></a>
            <a href="/blog/hra-exemption-rules-2026-documents-pan-landlord" class="sidebar-link">HRA Documentation — PAN &amp; Landlord Rules <span class="arrow">→</span></a>
            <a href="/blog/tax-efficient-salary-structure-india-employers-guide" class="sidebar-link">Tax-Efficient Salary Structure <span class="arrow">→</span></a>
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

    let fy = '2025-26';
    let cityType = 'metro';
    let period = 'monthly';

    function fmtINR(num) {
        if (!isFinite(num)) return '—';
        return '₹' + Math.round(num).toLocaleString('en-IN');
    }

    function metroPercent() {
        return cityType === 'metro' ? 0.50 : 0.40;
    }

    function updateCityList() {
        const el = document.getElementById('cityList');
        if (cityType === 'metro') {
            if (fy === '2025-26') {
                el.textContent = 'Metros (FY 2025-26): Delhi, Mumbai, Kolkata, Chennai';
            } else {
                el.textContent = 'Metros (FY 2026-27 onwards): Delhi, Mumbai, Kolkata, Chennai, Bengaluru, Hyderabad, Pune, Ahmedabad';
            }
        } else {
            if (fy === '2025-26') {
                el.textContent = 'Non-metro: All cities except Delhi, Mumbai, Kolkata, Chennai (incl. Bengaluru, Pune, Hyderabad, Ahmedabad)';
            } else {
                el.textContent = 'Non-metro (FY 2026-27): All cities except the 8 metros';
            }
        }
    }

    function setFY(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        fy = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
        updateCityList();
    }

    function setCity(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        cityType = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
        updateCityList();
    }

    function setPeriod(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        period = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');

        // Update placeholders accordingly
        if (period === 'monthly') {
            document.getElementById('basic').placeholder = 'e.g. 50000';
            document.getElementById('hra').placeholder = 'e.g. 20000';
            document.getElementById('rent').placeholder = 'e.g. 25000';
        } else {
            document.getElementById('basic').placeholder = 'e.g. 600000';
            document.getElementById('hra').placeholder = 'e.g. 240000';
            document.getElementById('rent').placeholder = 'e.g. 300000';
        }
    }

    function calculate() {
        const basicIn = parseINR(document.getElementById('basic').value);
        const hraIn = parseINR(document.getElementById('hra').value);
        const rentIn = parseINR(document.getElementById('rent').value);

        if (!isFinite(basicIn) || basicIn < 0 || !isFinite(hraIn) || hraIn < 0 || !isFinite(rentIn) || rentIn < 0) {
            alert('Please enter valid (non-negative) values for all three fields.');
            return;
        }

        // Convert to annual
        const factor = period === 'monthly' ? 12 : 1;
        const basicA = basicIn * factor;
        const hraA = hraIn * factor;
        const rentA = rentIn * factor;

        const pct = metroPercent();
        const cond1 = hraA;
        const cond2 = basicA * pct;
        const cond3 = Math.max(0, rentA - 0.10 * basicA);

        const conds = [cond1, cond2, cond3];
        const exemption = Math.min(...conds);
        const bindingIdx = conds.indexOf(exemption); // 0, 1, or 2
        const taxable = Math.max(0, hraA - exemption);

        // Update condition cards
        document.getElementById('cond1').textContent = fmtINR(cond1);
        const pctLabel = (pct * 100).toFixed(0) + '%';
        document.getElementById('cond2desc').textContent = pctLabel + ' of Basic + DA (' + (cityType === 'metro' ? 'Metro' : 'Non-Metro') + ')';
        document.getElementById('cond2').textContent = fmtINR(cond2);
        document.getElementById('cond3').textContent = fmtINR(cond3);

        // Highlight binding card
        document.querySelectorAll('.condition-card').forEach((card, i) => {
            card.classList.toggle('binding', i === bindingIdx);
        });

        // Update results
        document.getElementById('resExempt').textContent = fmtINR(exemption);
        document.getElementById('resHraTotal').textContent = fmtINR(hraA);
        document.getElementById('resTaxable').textContent = fmtINR(taxable);

        // Eligibility banner
        const banner = document.getElementById('eligBanner');
        const ico = document.getElementById('eligIco');
        if (exemption === 0) {
            banner.className = 'eligibility-banner not-eligible';
            ico.textContent = '✕';
            let reason = '';
            if (rentA === 0) reason = 'No rent paid — no HRA exemption available.';
            else if (hraA === 0) reason = 'No HRA received — claim Section 80GG instead if you qualify.';
            else if (rentA <= 0.10 * basicA) reason = 'Rent paid is less than 10% of Basic+DA, so condition 3 produces zero. Entire HRA is taxable.';
            else reason = 'No exemption available with given inputs.';
            document.getElementById('eligText').textContent = reason;
        } else if (exemption < hraA) {
            banner.className = 'eligibility-banner partial';
            ico.textContent = '◐';
            const bindingNames = ['Actual HRA Received', '% of Basic+DA', 'Rent − 10% of Basic+DA'];
            document.getElementById('eligText').textContent = 'Partial exemption — binding constraint is Condition ' + (bindingIdx + 1) + ': ' + bindingNames[bindingIdx] + '. The remaining HRA of ' + fmtINR(taxable) + ' is taxable as salary.';
        } else {
            banner.className = 'eligibility-banner eligible';
            ico.textContent = '✓';
            document.getElementById('eligText').textContent = 'Full exemption — your entire HRA of ' + fmtINR(hraA) + ' is tax-free under Section 10(13A) (old regime). Condition 1 (Actual HRA) is the binding constraint.';
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
        r('Annual Basic + DA', fmtINR(basicA));
        r('Annual HRA Received', fmtINR(hraA));
        r('Annual Rent Paid', fmtINR(rentA));
        r('10% of Basic + DA', fmtINR(0.10 * basicA));
        r(pctLabel + ' of Basic + DA (' + (cityType === 'metro' ? 'Metro' : 'Non-Metro') + ')', fmtINR(cond2));
        r('Rent Paid − 10% of Basic + DA', fmtINR(cond3));
        const tot = document.createElement('div');
        tot.className = 'breakdown-row total';
        tot.innerHTML = '<span class="breakdown-label">HRA Exemption (Lowest of 3)</span><span class="breakdown-value">' + fmtINR(exemption) + '</span>';
        rows.appendChild(tot);
        const taxRow = document.createElement('div');
        taxRow.className = 'breakdown-row';
        taxRow.innerHTML = '<span class="breakdown-label">Taxable HRA (Balance to add to salary)</span><span class="breakdown-value">' + fmtINR(taxable) + '</span>';
        rows.appendChild(taxRow);

        // Show + scroll
        const rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        setTimeout(() => { rs.scrollIntoView({ behavior: 'smooth', block: 'start' }); }, 100);
    }

    function resetCalc() {
        document.getElementById('basic').value = '';
        document.getElementById('hra').value = '';
        document.getElementById('rent').value = '';
        document.getElementById('resultSection').classList.remove('visible');
        fy = '2025-26';
        cityType = 'metro';
        period = 'monthly';
        document.querySelectorAll('.toggle-group').forEach(group => {
            const btns = group.querySelectorAll('.toggle-btn');
            btns.forEach(b => b.classList.remove('active'));
            btns[0].classList.add('active');
        });
        // Reset placeholders to monthly defaults
        document.getElementById('basic').placeholder = 'e.g. 50000';
        document.getElementById('hra').placeholder = 'e.g. 20000';
        document.getElementById('rent').placeholder = 'e.g. 25000';
        updateCityList();
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

    ['basic','hra','rent'].forEach(id => {
        document.getElementById(id).addEventListener('keydown', function(e) {
            if (e.key === 'Enter') calculate();
        });
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
