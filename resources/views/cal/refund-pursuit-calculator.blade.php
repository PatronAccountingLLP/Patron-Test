@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>GST Refund Calculator | Cost-Benefit &amp; ROI Verdict</title>
    <meta name="description" content="GST refund pursuit calculator: weigh CA fees, time and success odds against your expected refund plus Section 56 interest. Should you file? Get an ROI verdict.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/refund-pursuit-calculator/">
    <meta property="og:title" content="Refund Pursuit Calculator — Cost-Benefit of GST Refund 2026">
    <meta property="og:description" content="Decide whether a GST refund is worth pursuing. Computes expected recovery, total costs, time-money loss, ROI & break-even probability. Decision verdict.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/refund-pursuit-calculator">
    <meta property="og:image" content="/tools/og/refund-pursuit-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Refund Pursuit Calculator — Cost-Benefit of GST Refund 2026">
    <meta name="twitter:description" content="Should you pursue this refund? ROI verdict, break-even probability, time-money cost analysis. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/refund-pursuit-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Refund Pursuit Calculator (Cost-Benefit of GST Refund)",
      "description": "Refund Pursuit Calculator computes the cost-benefit of pursuing a Goods and Services Tax refund application before incurring professional fees and internal effort on the filing of Form GST RFD-01 under Section 54 of the Central Goods and Services Tax Act, 2017 read with Rule 89 of the Central Goods and Services Tax Rules, 2017. The tool computes expected recovery as the product of refund amount and probability of sanction, plus the interest entitlement under Section 56 at six per cent per annum for refund delayed beyond sixty days from acknowledgement or nine per cent per annum where the refund arises from an appellate order. The tool computes total pursuit costs including Chartered Accountant or Cost Accountant professional fees, mandatory CA certification under Annexure-2 of Circular No. 125/44/2019-GST for refund claims exceeding two lakh rupees, documentation costs including Bank Realisation Certificate or Foreign Inward Remittance Certificate procurement and statement preparation, internal employee time cost, and expected litigation cost weighted by probability of rejection. The tool computes time-money cost reflecting the opportunity cost of capital blocked during the refund processing cycle. The tool computes the net benefit as expected recovery less total costs less time-money cost, the return on investment as a multiple of direct costs, and the break-even probability above which the pursuit is economically rational. Probability baselines reflect category-specific historical sanction rates across exports under Letter of Undertaking, exports with payment of Integrated Goods and Services Tax, supplies to Special Economic Zone unit or developer with or without payment of tax, accumulated Input Tax Credit due to Inverted Duty Structure under Rule 89(5), deemed exports under Notification No. 48/2017-Central Tax, excess balance in electronic cash ledger, excess tax paid by mistake, refund pursuant to assessment or appellate order, and any other category. The tool reflects the introduction of system-driven ninety per cent provisional refund within seven days for low-risk applications under Notification No. 13/2025-Central Tax effective 1 October 2025 and CBIC Instruction No. 06/2025-GST extending the provisional refund mechanism from zero-rated supplies to Inverted Duty Structure claims as a trade-facilitation measure.",
      "url": "/tools/refund-pursuit-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-08T08:00:00+05:30",
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
        {"@type": "ListItem", "position": 3, "name": "Refund Pursuit Calculator", "item": "/tools/refund-pursuit-calculator"}
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
          "name": "When is a GST refund worth pursuing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A GST refund is worth pursuing when the expected recovery — refund amount multiplied by sanction probability plus Section 56 interest — exceeds total costs by a meaningful margin. The rule of thumb is a minimum 3x return on direct costs for a clean case and 5x for cases requiring litigation defence. Refunds below ₹50,000 typically struggle to meet this threshold once CA fees, documentation costs and internal time are factored in."
          }
        },
        {
          "@type": "Question",
          "name": "What are typical CA fees for GST refund filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CA professional fees for GST refund filing range from ₹5,000 for simple cases like excess cash ledger refunds to ₹50,000 or more for complex Inverted Duty Structure or SEZ refund claims. The fee structure typically includes statement preparation, Annexure-B compilation, RFD-01 filing on the GST portal, deficiency-memo defence and follow-up till credit. CA certification under Annexure-2 of Circular 125 carries a separate fee of ₹3,000 to ₹15,000 depending on refund amount and category."
          }
        },
        {
          "@type": "Question",
          "name": "How is the probability of refund sanction estimated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sanction probability depends on three factors: refund category baseline rate, documentation readiness and risk-flagging by the system. Excess cash ledger refunds have ~95% baseline; export under LUT around 80%; Inverted Duty Structure 70%; deemed exports 65%; any-other-category lowest at 60%. Documentation completeness adjusts the baseline — full readiness preserves the baseline; partial readiness scales it down by 10-30%. From October 2025, system-flagged low-risk cases get 90% provisional sanction within 7 days."
          }
        },
        {
          "@type": "Question",
          "name": "What is the time-money cost of pursuing a refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Time-money cost is the opportunity cost of capital blocked during the refund processing cycle. It equals refund times cost of capital times days till credit divided by 365. For a ₹10 lakh refund taking 90 days at 12% cost of capital, the time-money cost is approximately ₹29,500. The 90% provisional refund mechanism from 1 October 2025 reduces this materially — 90% is unblocked within 7 days, leaving only 10% to bear the full processing time."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 56 interest and does it offset pursuit costs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 56 provides 6% simple interest on refunds delayed beyond 60 days from acknowledgement. For appellate refunds, the rate is 9%. Interest accrues from day 61 till credit date. It partially offsets working capital cost but rarely fully — 6% versus typical cost of capital of 12%. For a ₹10 lakh refund delayed 90 days, interest yields approximately ₹4,932 — enough for modest CA fees but not full pursuit costs."
          }
        },
        {
          "@type": "Question",
          "name": "What costs are typically excluded from pursuit calculations?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Typical pursuit calculations focus on direct costs such as CA fees, CA certification, documentation procurement and internal time. Costs often excluded but worth considering include: opportunity cost of management attention, distraction from core operations, risk of triggering departmental scrutiny on adjacent issues, cost of multi-year follow-up if litigation arises, and reputational cost of a public refund dispute. For high-value refunds these soft costs can exceed direct costs, especially where the refund quantum is contentious."
          }
        },
        {
          "@type": "Question",
          "name": "What is the break-even probability for refund pursuit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Break-even probability is the minimum sanction probability at which expected recovery equals total costs and time-money loss. It is computed as total costs plus time-money cost divided by refund amount plus expected interest. If actual probability exceeds break-even, pursuit is economically rational. For a ₹5 lakh refund with ₹15,000 costs and ₹10,000 time-money cost, break-even probability is around 5% — making pursuit attractive even for moderately uncertain cases. For ₹50,000 refunds the break-even can rise above 50%."
          }
        },
        {
          "@type": "Question",
          "name": "Should I pursue a refund close to the 2-year limitation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A refund close to the two-year Section 54(1) limitation introduces deficiency-memo risk. If the proper officer issues Form RFD-03 within 15 days of filing and the rectified application also has limitation expiry imminent, the entire refund right may be lost. For refunds within 60 days of limitation expiry, pursuit is feasible only with fully ready documentation and a buffer of at least 30 days for one rectification cycle. Engage a CA for rapid filing if pursuit is decided."
          }
        },
        {
          "@type": "Question",
          "name": "How does Aadhaar authentication affect pursuit economics?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "From 1 October 2025 per Notification 14/2025-Central Tax, taxpayers not Aadhaar-authenticated under Rule 10B are excluded from the 90% provisional refund mechanism. The economic impact is significant — a ₹10 lakh refund without Aadhaar takes 60-90 days for full sanction versus 7 days for 90% provisional with Aadhaar. The time-money cost differential alone can exceed ₹15,000-25,000. Complete Aadhaar authentication on the GST portal before filing to capture this benefit."
          }
        },
        {
          "@type": "Question",
          "name": "What if my refund is rejected — how does that affect pursuit ROI?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rejection through Form RFD-06 triggers appeal under Section 107 within three months, with a 10% pre-deposit and additional CA fees of ₹15,000-50,000. Appellate authority orders carry their own appeal cycle to GSTAT under Section 112 from October 2025 onwards. Pursuit ROI for rejected cases turns on appeal success probability. Typical second-level success rates run 40-60% for substantive issues. Litigation cost should be factored as expected appeal cost multiplied by probability of rejection in pre-pursuit calculations."
          }
        },
        {
          "@type": "Question",
          "name": "Can the 90% provisional refund alone justify pursuit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For low-risk Aadhaar-authenticated taxpayers, the 90% provisional refund within 7 days from October 2025 dramatically improves pursuit economics — 90% of refund is realised before the bulk of pursuit costs are even incurred. For ₹10 lakh+ refunds in eligible categories (zero-rated supplies, Inverted Duty Structure), provisional sanction alone covers CA fees within the first week. The remaining 10% follows within 60 days. This makes refunds in the ₹2-5 lakh band economically viable where they were marginal earlier."
          }
        },
        {
          "@type": "Question",
          "name": "What is the minimum refund amount worth pursuing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The minimum economically viable refund amount depends on category. For excess cash ledger refunds with no CA cert and minimal documentation, ₹25,000 can be viable. For export LUT or IGST refunds, ₹50,000 to ₹1 lakh is typically the floor. For Inverted Duty Structure with HSN analysis and Statement-1A complexity, ₹2 lakh is reasonable minimum. For deemed exports requiring recipient declarations, ₹3 lakh or above. These thresholds drop where the 90% provisional refund applies and rise where litigation risk is high."
          }
        },
        {
          "@type": "Question",
          "name": "How do internal employee time costs factor into the calculation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Internal time cost is the opportunity cost of employee hours spent on data preparation, document gathering, statement filling, deficiency response and follow-up. A typical export refund consumes 10-20 hours of accounts team time; an Inverted Duty Structure case 20-40 hours; a deemed export with recipient coordination 30-60 hours. At a blended hourly rate of ₹500-1500 for a finance executive, this translates to ₹5,000 to ₹90,000 in internal cost. Enter custom hours and rates above for accurate computation."
          }
        },
        {
          "@type": "Question",
          "name": "Should small recurring refunds be aggregated for cost efficiency?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes for inverted duty structure and exports, where periods can be clubbed in a single RFD-01 if all relate to the same financial year and the rate-inversion structure is consistent. Clubbing 12 monthly ₹50,000 refunds into one ₹6 lakh refund spreads CA fees across a larger amount, improving ROI. The two-year limitation runs separately for each period — the earliest period in the cluster determines the binding deadline. Clubbing is not permitted across financial years or different categories."
          }
        },
        {
          "@type": "Question",
          "name": "When should I drop pursuit and absorb the cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Drop pursuit when expected recovery is below 1.5x total costs, when the refund category has weak baseline probability under 50%, when documentation gaps cannot be remedied within limitation, or when the underlying transaction is contentious and likely to trigger broader scrutiny. Refunds for restricted goods under Notification 5/2017 or 9/2022, or arising from rate-cut accumulation, should generally not be pursued unless legal precedent supports the claim. Document the decision with internal note for audit trail."
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
        .calc-section-title.cost { color: var(--danger); }
        .calc-section-title.prob { color: var(--info); }
        .calc-section-title.time { color: var(--primary-light); }

        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"], input[type="text"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group input[type="date"] { font-family: var(--font-body); font-size: 15px; font-weight: 500; }
        .form-group input[type="range"] { padding: 0; height: 8px; background: var(--surface-alt); border: none; cursor: pointer; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .form-group .range-meta { display: flex; justify-content: space-between; font-family: var(--font-mono); font-size: 11px; color: var(--text-muted); margin-top: 4px; }

        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; margin-bottom: 8px; }
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
        .verdict-grid-value.pos { color: var(--success); }
        .verdict-grid-value.neg { color: var(--danger); }

        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-card.danger { background: #FEE2E2; border-color: var(--danger); }
        .summary-card.danger .summary-label { color: #991B1B; }
        .summary-card.danger .summary-value { color: var(--danger); }
        .summary-card.success { background: #DCE8F5; border-color: var(--success); }
        .summary-card.success .summary-label { color: #065F46; }
        .summary-card.success .summary-value { color: var(--success); }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }

        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 14px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .info-banner strong { font-weight: 700; }

        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }
        .basis-text strong { color: var(--primary-dark); }

        .breakdown-card { background: linear-gradient(135deg, #EFF6FF, #DBEAFE); border: 2px solid var(--info); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .breakdown-card h4 { font-size: 14px; color: #1E3A8A; margin-bottom: 10px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; }
        .breakdown-row { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid rgba(30,64,175,0.15); font-family: var(--font-mono); font-size: 13px; color: #1E3A8A; }
        .breakdown-row:last-child { border-bottom: none; font-weight: 700; padding-top: 12px; }
        .breakdown-row.pos { color: var(--success); }
        .breakdown-row.neg { color: var(--danger); }
        .breakdown-row.total { background: rgba(255,255,255,0.7); margin-top: 10px; padding: 12px 14px; border-radius: 8px; font-size: 15px; }

        .meter-card { background: var(--card); border: 2px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .meter-card h4 { font-size: 14px; color: var(--primary-dark); margin-bottom: 12px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; }
        .meter-row { display: flex; align-items: center; gap: 12px; margin-bottom: 10px; font-size: 13px; }
        .meter-label { width: 140px; flex-shrink: 0; color: var(--text-secondary); font-weight: 600; }
        .meter-bar { flex: 1; height: 16px; background: var(--surface-alt); border-radius: 8px; overflow: hidden; position: relative; }
        .meter-fill { height: 100%; background: linear-gradient(90deg, var(--primary), var(--primary-light)); border-radius: 8px; transition: width 0.5s; }
        .meter-fill.amber { background: linear-gradient(90deg, var(--accent), var(--accent-light)); }
        .meter-fill.danger { background: linear-gradient(90deg, var(--danger), #F87171); }
        .meter-value { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); width: 60px; text-align: right; flex-shrink: 0; }

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
        <a href="#economics">Refund Economics</a>
        <a href="#probability">Probability Logic</a>
        <a href="#cost-bench">CA Fee Benchmarks</a>
        <a href="#time-money">Time-Money Cost</a>
        <a href="#provisional">90% Provisional Impact</a>
        <a href="#scenarios">Decision Scenarios</a>
        <a href="#aggregation">Aggregation Strategy</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Refund Pursuit Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Refund Pursuit Calculator — <span>Cost-Benefit of GST Refund</span> Decision Tool (FY 2025-26)</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Refund%20Pursuit%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Refund%20Pursuit%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Refund%20Pursuit%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This Refund Pursuit Calculator answers the question every CFO asks before authorising a GST refund filing: <strong>"Is this refund worth chasing?"</strong> The tool computes <strong>Expected Recovery</strong> (refund × probability + Section 56 interest) less <strong>Total Costs</strong> (CA fees + CA certification + documentation + internal time + expected litigation cost) less <strong>Time-Money Cost</strong> (refund × cost of capital × processing days). It outputs <strong>Net Benefit</strong>, <strong>ROI multiple</strong>, <strong>break-even probability</strong> and a clear <strong>Pursue / Marginal / Don't Pursue</strong> verdict. Probability baselines are category-specific — 95% for excess cash ledger, 80% for export-LUT, 70% for Inverted Duty Structure, 60% for any-other — adjusted by readiness and Aadhaar authentication. The 90% provisional refund mechanism (Notification 13/2025-CT + Instruction 06/2025-GST from 1 Oct 2025) materially shifts pursuit economics for low-risk taxpayers. Pair with our <a href="/tools/rfd-01-filing-checklist">RFD-01 Checklist</a> for readiness scoring.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Refund Pursuit Calculator</h2>
            <p class="calc-intro">Enter the refund profile, estimated pursuit costs, sanction probability and timeline. The tool computes net expected benefit, ROI on direct costs, and the minimum probability at which pursuit becomes economically rational. Use the readiness slider if you have completed the RFD-01 Pre-Filing Checklist.</p>

            <noscript><div class="noscript-box">JavaScript is disabled. Please enable JavaScript to use this calculator.</div></noscript>

            <div class="calc-section-title">Refund Profile</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="category">Refund Category</label>
                    <select id="category">
                        <option value="export-lut">Exports under LUT (without IGST)</option>
                        <option value="export-igst">Exports with payment of IGST</option>
                        <option value="sez-lut">SEZ supplies without IGST</option>
                        <option value="sez-igst">SEZ supplies with IGST</option>
                        <option value="ids" selected>Inverted Duty Structure</option>
                        <option value="deemed">Deemed Exports</option>
                        <option value="excess-cash">Excess Cash Ledger</option>
                        <option value="excess-tax">Excess Tax Paid</option>
                        <option value="order">Refund on Order/Appeal</option>
                        <option value="other">Any Other Category</option>
                    </select>
                    <span class="helper">Drives baseline probability and CA fee benchmark.</span>
                </div>
                <div class="form-group">
                    <label for="refund-amt">Estimated Refund Amount (₹)</label>
                    <input type="text" id="refund-amt" value="500000" min="0" step="1000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Net amount per Statement-1A or category-specific computation.</span>
                </div>
            </div>

            <div class="calc-section-title cost">Pursuit Costs (₹)</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="ca-fee">CA / Consultant Filing Fee</label>
                    <input type="text" id="ca-fee" value="15000" min="0" step="500" inputmode="decimal" autocomplete="off">
                    <span class="helper">Statement preparation + RFD-01 filing + follow-up till credit.</span>
                </div>
                <div class="form-group">
                    <label for="ca-cert">CA Certification Fee (Annexure-2)</label>
                    <input type="text" id="ca-cert" value="5000" min="0" step="500" inputmode="decimal" autocomplete="off">
                    <span class="helper">Mandatory if refund &gt; ₹2 lakh (excl. cash ledger / IGST-export).</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="doc-cost">Documentation Cost</label>
                    <input type="text" id="doc-cost" value="3000" min="0" step="500" inputmode="decimal" autocomplete="off">
                    <span class="helper">BRC/FIRC procurement, statement printing, courier, scanning.</span>
                </div>
                <div class="form-group">
                    <label for="lit-cost">Expected Litigation Cost (if rejected)</label>
                    <input type="text" id="lit-cost" value="25000" min="0" step="500" inputmode="decimal" autocomplete="off">
                    <span class="helper">Appeal under Section 107 if refund rejected — pre-deposit + CA.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="time-hours">Internal Time (hours)</label>
                    <input type="text" id="time-hours" value="20" min="0" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Employee hours: data prep, follow-up, deficiency response.</span>
                </div>
                <div class="form-group">
                    <label for="hourly-rate">Internal Hourly Rate (₹)</label>
                    <input type="text" id="hourly-rate" value="800" min="0" step="50" inputmode="decimal" autocomplete="off">
                    <span class="helper">Blended cost — finance executive ₹500-1,500/hour typical.</span>
                </div>
            </div>

            <div class="calc-section-title prob">Probability &amp; Readiness</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="readiness">Documentation Readiness <span style="font-family: var(--font-mono); color: var(--primary); float: right;" id="readiness-val">75%</span></label>
                    <input type="range" id="readiness" min="0" max="100" value="75" step="5">
                    <div class="range-meta"><span>0% (gaps)</span><span>50% (partial)</span><span>100% (ready)</span></div>
                    <span class="helper">From your RFD-01 Pre-Filing Checklist score. Scales the baseline probability.</span>
                </div>
                <div class="form-group">
                    <label for="aadhaar">Aadhaar Authentication (Rule 10B)</label>
                    <select id="aadhaar">
                        <option value="yes" selected>Yes — Authenticated</option>
                        <option value="no">No — Not Authenticated</option>
                    </select>
                    <span class="helper">Required for 90% provisional refund (Notif 14/2025-CT, 1 Oct 2025).</span>
                </div>
            </div>

            <div class="calc-section-title time">Timeline &amp; Cost of Capital</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="proc-days">Days to Refund Credit (Estimated)</label>
                    <input type="text" id="proc-days" value="60" min="7" max="730" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Default 60 (Section 54(7)) — clean cases. Adjust for known delays.</span>
                </div>
                <div class="form-group">
                    <label for="coc">Cost of Capital (% per annum)</label>
                    <input type="text" id="coc" value="12" min="0" max="30" step="0.5" inputmode="decimal" autocomplete="off">
                    <span class="helper">Working capital opportunity cost. Bank rate + spread typical.</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btn-calculate">Compute Pursuit Decision</button>
            <button type="button" class="btn-reset" id="btn-reset">Reset to Default</button>

            <div class="result-section" id="results">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdict">
                    <div class="verdict-label">Pursuit Verdict</div>
                    <div class="verdict-headline" id="verdict-headline">—</div>
                    <div class="verdict-sub" id="verdict-sub">—</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Net Benefit</div>
                            <div class="verdict-grid-value" id="v-net">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">ROI on Costs</div>
                            <div class="verdict-grid-value" id="v-roi">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Break-Even Prob.</div>
                            <div class="verdict-grid-value" id="v-be">—</div>
                        </div>
                    </div>
                </div>

                <div id="alerts"></div>

                <div class="basis-block">
                    <div class="basis-label">Computation Basis</div>
                    <div class="basis-text" id="basis-text">—</div>
                </div>

                <div class="meter-card">
                    <h4>Probability Estimation</h4>
                    <div class="meter-row">
                        <div class="meter-label">Category Baseline</div>
                        <div class="meter-bar"><div class="meter-fill" id="m-base" style="width: 0%;"></div></div>
                        <div class="meter-value" id="m-base-val">—</div>
                    </div>
                    <div class="meter-row">
                        <div class="meter-label">Readiness Adj.</div>
                        <div class="meter-bar"><div class="meter-fill amber" id="m-ready" style="width: 0%;"></div></div>
                        <div class="meter-value" id="m-ready-val">—</div>
                    </div>
                    <div class="meter-row">
                        <div class="meter-label">Final Probability</div>
                        <div class="meter-bar"><div class="meter-fill" id="m-final" style="width: 0%;"></div></div>
                        <div class="meter-value" id="m-final-val">—</div>
                    </div>
                </div>

                <div class="breakdown-card">
                    <h4>Net Benefit Breakdown</h4>
                    <div class="breakdown-row pos"><span>Refund × Probability</span><span id="b-er">—</span></div>
                    <div class="breakdown-row pos"><span>+ Section 56 Interest (delay)</span><span id="b-int">—</span></div>
                    <div class="breakdown-row neg"><span>− CA Filing Fee</span><span id="b-ca">—</span></div>
                    <div class="breakdown-row neg"><span>− CA Certification (if applicable)</span><span id="b-cert">—</span></div>
                    <div class="breakdown-row neg"><span>− Documentation Cost</span><span id="b-doc">—</span></div>
                    <div class="breakdown-row neg"><span>− Internal Time × Rate</span><span id="b-time">—</span></div>
                    <div class="breakdown-row neg"><span>− Expected Litigation (P × Cost)</span><span id="b-lit">—</span></div>
                    <div class="breakdown-row neg"><span>− Time-Money Cost</span><span id="b-tm">—</span></div>
                    <div class="breakdown-row total"><span>= Net Benefit</span><span id="b-total">—</span></div>
                </div>

                <div class="summary-grid">
                    <div class="summary-card">
                        <div class="summary-label">Refund Amount</div>
                        <div class="summary-value" id="s-amt">—</div>
                    </div>
                    <div class="summary-card success">
                        <div class="summary-label">Expected Recovery</div>
                        <div class="summary-value" id="s-er">—</div>
                    </div>
                    <div class="summary-card danger">
                        <div class="summary-label">Total Costs</div>
                        <div class="summary-value" id="s-cost">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Time-Money Cost</div>
                        <div class="summary-value" id="s-tm">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Min Refund (Break-Even)</div>
                        <div class="summary-value" id="s-min">—</div>
                    </div>
                    <div class="summary-card highlight">
                        <div class="summary-label">Decision</div>
                        <div class="summary-value" id="s-dec">—</div>
                    </div>
                </div>

            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Refund Pursuit Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Refund%20Pursuit%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Refund%20Pursuit%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Refund%20Pursuit%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Refund Pursuit Calculator</h2>
            <p>The calculator follows a four-block decision framework: refund profile, pursuit costs, probability and timeline. Each block contributes to the final cost-benefit equation. The recommended workflow is:</p>
            <ol>
                <li><strong>Refund profile</strong> — Pick the correct category from the dropdown. The category drives the baseline probability and the typical CA fee benchmark. Enter the estimated refund amount from your Statement-1A working or category-specific computation. Use our <a href="/tools/inverted-duty-refund-calculator">IDS Calculator</a>, <a href="/tools/export-refund-lut-calculator">LUT Calculator</a> or <a href="/tools/igst-export-refund-calculator">IGST Calculator</a> upstream to compute the refund amount, then file on <a href="https://www.gst.gov.in" rel="noopener" target="_blank">gst.gov.in</a>.</li>
                <li><strong>Pursuit costs</strong> — Enter expected CA filing fees, CA certification fees (auto-applicable above ₹2 lakh except for excess-cash and IGST-export categories), documentation costs (BRC/FIRC, statement preparation, courier), internal time hours and blended hourly rate, and expected litigation cost should the refund be rejected and require appellate defence.</li>
                <li><strong>Probability and readiness</strong> — Set the readiness slider based on your RFD-01 Pre-Filing Checklist score (0% if no documents prepared; 100% if all items verified). Mark Aadhaar authentication status — required for 90% provisional refund eligibility from October 2025.</li>
                <li><strong>Timeline and cost of capital</strong> — Set days to refund credit (default 60 per Section 54(7); use 7 days for low-risk Aadhaar-authenticated cases; longer for high-risk or rejection-prone cases). Cost of capital should reflect your actual working capital cost — prevailing bank rate plus spread is a reasonable proxy.</li>
            </ol>
            <div class="callout">
                <p><strong>Tip:</strong> Run the calculator twice — once with conservative inputs (low readiness, longer timeline, higher litigation cost) and once with optimistic inputs. The range gives you a robust pursuit decision rather than a single point estimate. Pursue if both scenarios show positive net benefit; engage cautiously if only the optimistic scenario does.</p>
            </div>
        </section>

        <section class="content-section" id="economics">
            <h2>Refund Pursuit Economics — The Decision Equation</h2>
            <p>The pursuit decision rests on a single inequality: Expected Recovery must exceed Total Cost of Pursuit by a margin sufficient to compensate for residual risk and management attention. The framework sits within <a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/acts/cgst-act/active/chapter11/section54.html" rel="noopener" target="_blank">Section 54 of the CGST Act</a> read with Rule 89, which establishes the right and the procedure. Breaking the equation into its components:</p>
            <h3>Expected Recovery</h3>
            <div class="formula-box">
                <span class="label">EXPECTED RECOVERY =</span><br>
                Refund Amount × Probability of Sanction<br>
                <span class="label">+</span><br>
                Refund Amount × 6% × max(0, Days − 60) ÷ 365
            </div>
            <p>The probability term captures the chance that the proper officer sanctions the refund as filed. The interest term captures the Section 56 entitlement at 6% per annum (9% for appellate-order refunds) for any delay beyond the statutory 60-day window. Note that interest accrues only on the days exceeding 60 — clean cases sanctioned within 60 days yield no interest top-up.</p>
            <h3>Total Cost of Pursuit</h3>
            <div class="formula-box">
                <span class="label">TOTAL COST =</span><br>
                CA Filing Fee + CA Certification Fee + Documentation Cost<br>
                <span class="label">+</span><br>
                Internal Time × Hourly Rate<br>
                <span class="label">+</span><br>
                Expected Litigation Cost × Probability of Rejection
            </div>
            <p>CA professional fees and CA certification are direct payable costs. Documentation costs cover BRC/FIRC procurement (₹500-2,000 per certificate), statement preparation, courier and scanning. Internal time multiplied by blended hourly rate captures the productive hours diverted from core work. Expected litigation cost is weighted by the probability of rejection (1 minus probability of sanction) — a refund with 70% sanction probability carries a 30% weighted litigation cost.</p>
            <h3>Time-Money Cost</h3>
            <div class="formula-box">
                <span class="label">TIME-MONEY COST =</span><br>
                Refund Amount × Cost of Capital × Days to Credit ÷ 365
            </div>
            <p>The opportunity cost of capital blocked during the refund processing cycle. For a ₹10 lakh refund taking 90 days at a 12% cost of capital, the time-money cost is ₹29,589. The 90% provisional refund mechanism reduces this materially — only 10% of the refund bears the full processing time cost, while 90% is unblocked within 7 days.</p>
            <h3>Net Benefit and Decision Rule</h3>
            <p>Net Benefit equals Expected Recovery less Total Cost less Time-Money Cost. The pursuit decision rules are:</p>
            <ul>
                <li><strong>Net Benefit &gt; 3× Total Cost</strong> — Pursue strongly. ROI is materially positive even under stress scenarios.</li>
                <li><strong>Net Benefit between 1× and 3× Total Cost</strong> — Pursue with caution. Tighten readiness, accelerate filing within limitation.</li>
                <li><strong>Net Benefit positive but &lt; 1× Total Cost</strong> — Marginal. Aggregate with other periods if eligible; otherwise drop unless strategic value.</li>
                <li><strong>Net Benefit negative</strong> — Don't pursue. Document the decision and absorb as cost.</li>
            </ul>
        </section>

        <div class="body-cta">
            <h3>Need a Pre-Filing Pursuit Assessment?</h3>
            <p>Patron Accounting offers a fixed-fee 30-minute call to assess refund pursuit economics — quantum estimation, readiness gap analysis, probability scoring, and a written go/no-go recommendation before you incur full filing costs.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Refund%20Pursuit%20Calculator.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Refund%20Pursuit%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Refund%20Pursuit%20Calculator.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="probability">
            <h2>Probability Logic — Category Baselines &amp; Readiness Adjustment</h2>
            <p>The sanction probability for any GST refund is a function of three independent variables: the category baseline (driven by historical sanction rates and complexity), the readiness multiplier (how well-prepared the application is), and the risk-flagging score (driven by Aadhaar authentication and system-level risk evaluation from October 2025).</p>
            <h3>Category Baseline Probabilities</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Refund Category</th><th>Baseline P(success)</th><th>Why</th></tr>
                </thead>
                <tbody>
                    <tr><td>Excess Cash Ledger</td><td>95%</td><td>Simplest — just cash ledger reconciliation; no scrutiny depth.</td></tr>
                    <tr><td>Excess Tax Paid</td><td>90%</td><td>Self-evident from challan and return reference.</td></tr>
                    <tr><td>Order-based Refund</td><td>85%</td><td>Already adjudicated; pre-deposit reconciliation main gate.</td></tr>
                    <tr><td>Exports under LUT</td><td>80%</td><td>Documentary intensive but standardised; high-volume category.</td></tr>
                    <tr><td>SEZ with IGST</td><td>78%</td><td>Endorsement dependency adds risk.</td></tr>
                    <tr><td>SEZ under LUT</td><td>75%</td><td>Endorsement + ITC computation complexity.</td></tr>
                    <tr><td>Exports with IGST</td><td>75%</td><td>Most via auto-Rule 96; RFD-01 only for stuck cases.</td></tr>
                    <tr><td>Inverted Duty Structure</td><td>70%</td><td>Restricted-goods checks + HSN classification disputes.</td></tr>
                    <tr><td>Deemed Exports</td><td>65%</td><td>Recipient declaration coordination + JTO verification.</td></tr>
                    <tr><td>Any Other Category</td><td>60%</td><td>Open-ended — depends entirely on facts and reasoning.</td></tr>
                </tbody>
            </table>
            <h3>Readiness Multiplier</h3>
            <p>Documentation readiness scales the baseline probability through a linear multiplier. The mapping used in the calculator is: Final Probability = Baseline × (0.5 + Readiness × 0.5). At 100% readiness the baseline is preserved; at 50% readiness the baseline is multiplied by 0.75; at 0% readiness it is halved. The multiplier reflects the empirical observation that incomplete applications either get rejected on substantive grounds or trigger deficiency memos that consume limitation time.</p>
            <h3>Risk Flagging from October 2025</h3>
            <p>Notification 13/2025-CT introduced system-driven risk evaluation for provisional refund. Low-risk applications (Aadhaar authenticated + clean filing history + reconciled GSTR-2B/3B) are eligible for the 7-day 90% provisional sanction. Notification 14/2025-CT explicitly excludes Aadhaar non-authenticated taxpayers and suppliers of high-risk specified goods (areca nuts, pan masala, tobacco, gutkha) from this benefit. The calculator caps Final Probability at 92% for high-readiness Aadhaar-authenticated cases and reduces it by 10 percentage points where Aadhaar is missing.</p>
        </section>

        <section class="content-section" id="cost-bench">
            <h2>CA Fee Benchmarks — Typical Pursuit Cost Bands</h2>
            <p>CA professional fees for GST refund filing vary substantially by category complexity, refund quantum, location and firm tier. The benchmarks below reflect mid-sized practice fees observed across our clients during FY 2025-26. The CA certification component is mandated by Annexure-2 of <a href="https://cbic-gst.gov.in/pdf/Circular-No-125-44-2019-GST.pdf" rel="noopener" target="_blank">Circular 125/44/2019-GST</a> for refunds exceeding ₹2 lakh. Adjust the benchmarks upward by 30-50% for Big-4 firms and downward by 20-30% for independent practitioners.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Category</th><th>CA Filing Fee</th><th>CA Certification</th><th>Documentation</th><th>Total Direct Cost</th></tr>
                </thead>
                <tbody>
                    <tr><td>Excess Cash Ledger</td><td>₹3,000–7,000</td><td>Not required</td><td>₹500–1,000</td><td>₹3,500–8,000</td></tr>
                    <tr><td>Excess Tax Paid</td><td>₹5,000–10,000</td><td>₹3,000–5,000</td><td>₹1,000–2,000</td><td>₹9,000–17,000</td></tr>
                    <tr><td>Exports under LUT</td><td>₹15,000–25,000</td><td>Not required</td><td>₹3,000–7,000</td><td>₹18,000–32,000</td></tr>
                    <tr><td>Exports with IGST (RFD-01)</td><td>₹10,000–20,000</td><td>Not required</td><td>₹2,000–5,000</td><td>₹12,000–25,000</td></tr>
                    <tr><td>SEZ supplies</td><td>₹20,000–35,000</td><td>₹5,000–10,000</td><td>₹3,000–8,000</td><td>₹28,000–53,000</td></tr>
                    <tr><td>Inverted Duty Structure</td><td>₹25,000–50,000</td><td>₹5,000–15,000</td><td>₹3,000–10,000</td><td>₹33,000–75,000</td></tr>
                    <tr><td>Deemed Exports</td><td>₹30,000–60,000</td><td>₹8,000–15,000</td><td>₹5,000–15,000</td><td>₹43,000–90,000</td></tr>
                    <tr><td>Order-based</td><td>₹15,000–30,000</td><td>₹5,000–10,000</td><td>₹2,000–5,000</td><td>₹22,000–45,000</td></tr>
                </tbody>
            </table>
            <p>Documentation costs include BRC/FIRC procurement (₹500-2,000 per certificate from the bank), Statement preparation in Excel templates, scanning, courier of physical documents, and incidental expenses. For high-volume exporters with multiple BRC/FIRC documents, the documentation cost can scale linearly. Internal time costs are not included in the table — typically add 10-40 hours of finance team time at ₹500-1,500/hour blended rate.</p>
            <div class="callout warn">
                <p><strong>Annual retainer arrangement:</strong> For exporters and IDS manufacturers with monthly recurring refund patterns, an annual retainer arrangement reduces per-refund cost by 40-60%. Patron Accounting offers retainers starting ₹5,000/month covering up to 12 monthly refund filings, deficiency response and CA certification for the full FY.</p>
            </div>
        </section>


        <section class="content-section" id="time-money">
            <h2>Time-Money Cost — The Hidden Drag</h2>
            <p>Time-money cost is the most overlooked variable in refund pursuit decisions. While CA fees and CA certification are visible payable amounts, the opportunity cost of capital blocked during refund processing rarely shows up in management dashboards — yet it can exceed direct costs for large refunds taking longer cycles.</p>
            <h3>Computation Logic</h3>
            <p>Time-money cost equals Refund Amount multiplied by Cost of Capital multiplied by Days to Credit divided by 365. The cost of capital should reflect your actual marginal source — for a working-capital-funded business it is the cash-credit rate (typically 9-14% in FY 2025-26); for equity-funded companies it can be the company's WACC (12-18%); for cash-rich businesses the relevant proxy is the deposit yield foregone (6-7%).</p>
            <h3>Sample Time-Money Cost Tables</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Refund Amount</th><th>30 days @ 12%</th><th>60 days @ 12%</th><th>90 days @ 12%</th><th>120 days @ 12%</th></tr>
                </thead>
                <tbody>
                    <tr><td>₹1 lakh</td><td>₹986</td><td>₹1,973</td><td>₹2,959</td><td>₹3,945</td></tr>
                    <tr><td>₹5 lakh</td><td>₹4,932</td><td>₹9,863</td><td>₹14,795</td><td>₹19,726</td></tr>
                    <tr><td>₹10 lakh</td><td>₹9,863</td><td>₹19,726</td><td>₹29,589</td><td>₹39,452</td></tr>
                    <tr><td>₹25 lakh</td><td>₹24,658</td><td>₹49,315</td><td>₹73,973</td><td>₹98,630</td></tr>
                    <tr><td>₹50 lakh</td><td>₹49,315</td><td>₹98,630</td><td>₹1,47,945</td><td>₹1,97,260</td></tr>
                </tbody>
            </table>
            <h3>Section 56 Interest as Partial Offset</h3>
            <p>Section 56 of the CGST Act provides simple interest at 6% per annum on refunds delayed beyond 60 days from acknowledgement (9% for appellate-order refunds). This interest is a partial offset to time-money cost but not a full one because: (a) it accrues only on the days exceeding 60, not the full processing period; (b) it is at 6% versus typical cost of capital of 12%; (c) it is taxable. For a ₹10 lakh refund taking 90 days at 12% cost of capital, the full time-money cost is ₹29,589 while Section 56 interest accrues for 30 days yielding ₹4,932 — net residual cost of ₹24,657.</p>
            <h3>The 90% Provisional Refund Game-Changer</h3>
            <p>The 90% provisional refund mechanism (effective 1 October 2025 per Notification 13/2025-CT) fundamentally restructures time-money economics. For low-risk Aadhaar-authenticated taxpayers, 90% of the refund is credited within 7 days of acknowledgement; only the residual 10% bears the full processing time. For a ₹10 lakh refund at 12% cost of capital taking 90 days for the residual:</p>
            <ul>
                <li><strong>Without provisional refund</strong>: ₹10 lakh × 12% × 90 ÷ 365 = ₹29,589 time-money cost.</li>
                <li><strong>With 90% provisional refund</strong>: ₹9 lakh × 12% × 7 ÷ 365 + ₹1 lakh × 12% × 90 ÷ 365 = ₹2,071 + ₹2,959 = <strong>₹5,030</strong> time-money cost.</li>
                <li><strong>Net saving</strong>: ₹24,559 — equivalent to absorbing additional CA fees with positive ROI still.</li>
            </ul>
            <p>This is why Aadhaar authentication and category eligibility for provisional refund have become first-order pursuit-decision factors.</p>
        </section>

        <section class="content-section" id="provisional">
            <h2>90% Provisional Refund — Pursuit Economics Reset</h2>
            <p>The introduction of system-driven 90% provisional refund through <a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/rules/cgst_rules/active/chapter10/rule91_v1.00.html" rel="noopener" target="_blank">Rule 91(2)</a> as amended by Notification 13/2025-CT effective 1 October 2025, read with CBIC Instruction No. 06/2025-GST, is the most important procedural change for refund pursuit economics in eight years of GST. The reform was recommended at the <a href="https://gstcouncil.gov.in/56th-gst-council-meeting" rel="noopener" target="_blank">56th GST Council meeting</a> on 3 September 2025. Pre-October 2025, only zero-rated supply refunds were eligible for officer-discretionary provisional sanction. Post-October 2025, the system flags low-risk applications across zero-rated and inverted-duty categories for automatic 7-day 90% sanction.</p>
            <h3>Eligibility Filter</h3>
            <ul>
                <li><strong>Aadhaar authenticated</strong> under Rule 10B — non-authenticated taxpayers are excluded per Notification 14/2025-CT.</li>
                <li><strong>Not in restricted goods list</strong> — areca nuts, pan masala, tobacco, gutkha and similar high-risk goods excluded.</li>
                <li><strong>Clean filing history</strong> — no pending GSTR-3B, no recent show-cause notices on similar matters, ITC reconciliation patterns within tolerance.</li>
                <li><strong>Category eligible</strong> — exports (LUT or IGST), SEZ supplies (LUT or IGST), Inverted Duty Structure. Excess cash ledger and excess tax paid categories typically do not need provisional mechanism (full sanction within standard cycle).</li>
            </ul>
            <h3>Economic Impact by Refund Size</h3>
            <p>The economic impact scales with refund quantum. For small refunds under ₹2 lakh, the 90% provisional benefit covers most of the CA fee within the first week — converting marginal cases to clearly viable. For mid-band refunds (₹2-25 lakh), the time-money saving alone justifies pursuit even where direct costs are marginal. For large refunds (above ₹25 lakh), the 90% provisional becomes a working capital lifeline — exporters with monthly accumulated ITC of ₹50 lakh+ now see ₹45 lakh credited within 7 days each month rather than waiting 60-90 days.</p>
            <h3>Watch-Out: 10% Residual Risk</h3>
            <p>The 10% balance is sanctioned only after detailed examination by the proper officer. If post-examination findings reduce the admissible refund, the differential is recovered along with interest under Section 50. For example, a ₹10 lakh provisional refund where final examination admits only ₹8 lakh triggers recovery of ₹1 lakh from the provisional amount plus 18% interest from the date of provisional credit. Pursuit calculations should reserve a small buffer (5-10% of refund amount) for this residual risk where category complexity is high.</p>
        </section>

        <section class="content-section" id="scenarios">
            <h2>Decision Scenarios — Worked Examples</h2>
            <p>Three illustrative scenarios spanning the typical decision space.</p>
            <h3>Scenario A: Small Excess Cash Ledger Refund (₹40,000)</h3>
            <p><strong>Profile:</strong> Excess balance in cash ledger from a wrong-period payment. CA filing fee ₹4,000. No CA certification needed. Documentation cost ₹500. Internal time 5 hours at ₹600/hour = ₹3,000. Cost of capital 11%. Expected processing 30 days.</p>
            <ul>
                <li>Probability of sanction: 95% baseline × 1.0 readiness adjustment = 95%</li>
                <li>Expected recovery: ₹40,000 × 95% = ₹38,000</li>
                <li>Total cost: ₹4,000 + ₹500 + ₹3,000 = ₹7,500</li>
                <li>Time-money cost: ₹40,000 × 11% × 30 ÷ 365 = ₹362</li>
                <li><strong>Net Benefit: ₹38,000 − ₹7,500 − ₹362 = ₹30,138</strong></li>
                <li><strong>ROI: 4.0× direct cost</strong> → <strong>PURSUE</strong></li>
            </ul>
            <h3>Scenario B: Mid-Band IDS Refund (₹3 lakh) — Aadhaar Done</h3>
            <p><strong>Profile:</strong> Inverted Duty Structure refund for a fertiliser manufacturer. CA filing fee ₹35,000. CA certification ₹8,000. Documentation cost ₹4,000. Internal time 25 hours at ₹1,000/hour = ₹25,000. Aadhaar authenticated → 90% provisional eligible. Expected litigation cost ₹30,000 if rejected.</p>
            <ul>
                <li>Probability of sanction: 70% baseline × 1.0 readiness = 70% (Aadhaar done caps at 92%)</li>
                <li>Expected recovery: ₹3,00,000 × 70% = ₹2,10,000</li>
                <li>Total cost: ₹35,000 + ₹8,000 + ₹4,000 + ₹25,000 + ₹30,000 × 30% = ₹81,000</li>
                <li>Time-money cost (with provisional): ₹2,70,000 × 12% × 7 ÷ 365 + ₹30,000 × 12% × 60 ÷ 365 = ₹622 + ₹592 = ₹1,214</li>
                <li><strong>Net Benefit: ₹2,10,000 − ₹81,000 − ₹1,214 = ₹1,27,786</strong></li>
                <li><strong>ROI: 1.6× direct cost</strong> → <strong>PURSUE WITH CAUTION</strong> (consider readiness improvement to push baseline higher)</li>
            </ul>
            <h3>Scenario C: Marginal Other-Category Refund (₹80,000) — Aadhaar Missing</h3>
            <p><strong>Profile:</strong> Any-other-category refund based on a niche legal interpretation. CA filing fee ₹20,000. CA certification ₹5,000. Documentation cost ₹3,000. Internal time 15 hours at ₹800/hour = ₹12,000. Aadhaar not done. Expected processing 90 days. Expected litigation ₹40,000 if rejected.</p>
            <ul>
                <li>Probability of sanction: 60% baseline × 0.875 readiness × 0.9 (Aadhaar penalty) = 47%</li>
                <li>Expected recovery: ₹80,000 × 47% = ₹37,600</li>
                <li>Total cost: ₹20,000 + ₹5,000 + ₹3,000 + ₹12,000 + ₹40,000 × 53% = ₹61,200</li>
                <li>Time-money cost: ₹80,000 × 12% × 90 ÷ 365 = ₹2,367</li>
                <li><strong>Net Benefit: ₹37,600 − ₹61,200 − ₹2,367 = −₹25,967</strong></li>
                <li><strong>ROI: Negative</strong> → <strong>DON'T PURSUE</strong> unless strategic value or aggregation possible</li>
            </ul>
        </section>

        <section class="content-section" id="aggregation">
            <h2>Aggregation Strategy — Improving Pursuit ROI</h2>
            <p>The most effective strategy to improve refund pursuit economics is aggregation of multiple periods into a single application. The CGST Rules permit clubbing of consecutive tax periods within the same financial year for export refunds, SEZ refunds and Inverted Duty Structure refunds, provided the underlying nature of supply remains consistent.</p>
            <h3>How Aggregation Works</h3>
            <p>For monthly filers, twelve consecutive monthly refund applications can be consolidated into one annual RFD-01 if the financial year is the same and the refund category is unchanged. The CA fee is incurred once on the aggregated amount rather than twelve times — typical reduction is 40-50% versus filing each period separately. Documentation costs are similarly amortised. The disadvantage is that the earliest period in the cluster determines the binding two-year limitation, so aggregation must not be deferred to the point where the earliest period is close to expiry.</p>
            <h3>Aggregation Math</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Approach</th><th>Refund/period</th><th>Periods</th><th>CA Fee/file</th><th>Total CA Fee</th><th>Effective ROI</th></tr>
                </thead>
                <tbody>
                    <tr><td>Monthly separate</td><td>₹50,000</td><td>12</td><td>₹15,000</td><td>₹1,80,000</td><td>3.3×</td></tr>
                    <tr><td>Quarterly aggregated</td><td>₹50,000</td><td>4 (3 months each)</td><td>₹25,000</td><td>₹1,00,000</td><td>6.0×</td></tr>
                    <tr><td>Annual aggregated</td><td>₹50,000</td><td>1 (12 months)</td><td>₹50,000</td><td>₹50,000</td><td>12.0×</td></tr>
                </tbody>
            </table>
            <p>Annual aggregation yields the best ROI but requires the underlying nature of supply to remain consistent across the year and the periods to be cleared without rate inversions changing. For dynamic businesses with mid-year HSN or rate changes, quarterly aggregation is the safer middle ground.</p>
            <h3>Aggregation Limits</h3>
            <ul>
                <li><strong>Same financial year only</strong> — periods cannot span across FY boundaries.</li>
                <li><strong>Same category only</strong> — export-LUT periods cannot be clubbed with IDS periods.</li>
                <li><strong>Consistent rate structure for IDS</strong> — input/output HSN and rates must remain unchanged.</li>
                <li><strong>LUT validity through period</strong> — for export and SEZ-LUT, LUT must be active throughout.</li>
                <li><strong>Earliest period drives limitation</strong> — file before the earliest period crosses 22-month mark to allow rectification buffer.</li>
            </ul>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>When is a GST refund worth pursuing?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A GST refund is worth pursuing when the expected recovery — refund amount multiplied by sanction probability plus Section 56 interest — exceeds total costs by a meaningful margin. The rule of thumb is a minimum 3x return on direct costs for a clean case and 5x for cases requiring litigation defence. Refunds below ₹50,000 typically struggle to meet this threshold once CA fees, documentation costs and internal time are factored in.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What are typical CA fees for GST refund filing?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">CA professional fees for GST refund filing range from ₹5,000 for simple cases like excess cash ledger refunds to ₹50,000 or more for complex Inverted Duty Structure or SEZ refund claims. The fee structure typically includes statement preparation, Annexure-B compilation, RFD-01 filing on the GST portal, deficiency-memo defence and follow-up till credit. CA certification under Annexure-2 of Circular 125 carries a separate fee of ₹3,000 to ₹15,000 depending on refund amount and category.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How is the probability of refund sanction estimated?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Sanction probability depends on three factors: refund category baseline rate, documentation readiness and risk-flagging by the system. Excess cash ledger refunds have ~95% baseline; export under LUT around 80%; Inverted Duty Structure 70%; deemed exports 65%; any-other-category lowest at 60%. Documentation completeness adjusts the baseline — full readiness preserves the baseline; partial readiness scales it down by 10-30%. From October 2025, system-flagged low-risk cases get 90% provisional sanction within 7 days.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the time-money cost of pursuing a refund?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Time-money cost is the opportunity cost of capital blocked during the refund processing cycle. It equals refund times cost of capital times days till credit divided by 365. For a ₹10 lakh refund taking 90 days at 12% cost of capital, the time-money cost is approximately ₹29,500. The 90% provisional refund mechanism from 1 October 2025 reduces this materially — 90% is unblocked within 7 days, leaving only 10% to bear the full processing time.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Section 56 interest and does it offset pursuit costs?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 56 provides 6% simple interest on refunds delayed beyond 60 days from acknowledgement. For appellate refunds, the rate is 9%. Interest accrues from day 61 till credit date. It partially offsets working capital cost but rarely fully — 6% versus typical cost of capital of 12%. For a ₹10 lakh refund delayed 90 days, interest yields approximately ₹4,932 — enough for modest CA fees but not full pursuit costs.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What costs are typically excluded from pursuit calculations?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Typical pursuit calculations focus on direct costs such as CA fees, CA certification, documentation procurement and internal time. Costs often excluded but worth considering include: opportunity cost of management attention, distraction from core operations, risk of triggering departmental scrutiny on adjacent issues, cost of multi-year follow-up if litigation arises, and reputational cost of a public refund dispute. For high-value refunds these soft costs can exceed direct costs, especially where the refund quantum is contentious.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the break-even probability for refund pursuit?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Break-even probability is the minimum sanction probability at which expected recovery equals total costs and time-money loss. It is computed as total costs plus time-money cost divided by refund amount plus expected interest. If actual probability exceeds break-even, pursuit is economically rational. For a ₹5 lakh refund with ₹15,000 costs and ₹10,000 time-money cost, break-even probability is around 5% — making pursuit attractive even for moderately uncertain cases. For ₹50,000 refunds the break-even can rise above 50%.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Should I pursue a refund close to the 2-year limitation?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A refund close to the two-year Section 54(1) limitation introduces deficiency-memo risk. If the proper officer issues Form RFD-03 within 15 days of filing and the rectified application also has limitation expiry imminent, the entire refund right may be lost. For refunds within 60 days of limitation expiry, pursuit is feasible only with fully ready documentation and a buffer of at least 30 days for one rectification cycle. Engage a CA for rapid filing if pursuit is decided.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How does Aadhaar authentication affect pursuit economics?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">From 1 October 2025 per Notification 14/2025-Central Tax, taxpayers not Aadhaar-authenticated under Rule 10B are excluded from the 90% provisional refund mechanism. The economic impact is significant — a ₹10 lakh refund without Aadhaar takes 60-90 days for full sanction versus 7 days for 90% provisional with Aadhaar. The time-money cost differential alone can exceed ₹15,000-25,000. Complete Aadhaar authentication on the GST portal before filing to capture this benefit.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What if my refund is rejected — how does that affect pursuit ROI?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Rejection through Form RFD-06 triggers appeal under Section 107 within three months, with a 10% pre-deposit and additional CA fees of ₹15,000-50,000. Appellate authority orders carry their own appeal cycle to GSTAT under Section 112 from October 2025 onwards. Pursuit ROI for rejected cases turns on appeal success probability. Typical second-level success rates run 40-60% for substantive issues. Litigation cost should be factored as expected appeal cost multiplied by probability of rejection in pre-pursuit calculations.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can the 90% provisional refund alone justify pursuit?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For low-risk Aadhaar-authenticated taxpayers, the 90% provisional refund within 7 days from October 2025 dramatically improves pursuit economics — 90% of refund is realised before the bulk of pursuit costs are even incurred. For ₹10 lakh+ refunds in eligible categories (zero-rated supplies, Inverted Duty Structure), provisional sanction alone covers CA fees within the first week. The remaining 10% follows within 60 days. This makes refunds in the ₹2-5 lakh band economically viable where they were marginal earlier.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the minimum refund amount worth pursuing?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The minimum economically viable refund amount depends on category. For excess cash ledger refunds with no CA cert and minimal documentation, ₹25,000 can be viable. For export LUT or IGST refunds, ₹50,000 to ₹1 lakh is typically the floor. For Inverted Duty Structure with HSN analysis and Statement-1A complexity, ₹2 lakh is reasonable minimum. For deemed exports requiring recipient declarations, ₹3 lakh or above. These thresholds drop where the 90% provisional refund applies and rise where litigation risk is high.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How do internal employee time costs factor into the calculation?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Internal time cost is the opportunity cost of employee hours spent on data preparation, document gathering, statement filling, deficiency response and follow-up. A typical export refund consumes 10-20 hours of accounts team time; an Inverted Duty Structure case 20-40 hours; a deemed export with recipient coordination 30-60 hours. At a blended hourly rate of ₹500-1500 for a finance executive, this translates to ₹5,000 to ₹90,000 in internal cost. Enter custom hours and rates above for accurate computation.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Should small recurring refunds be aggregated for cost efficiency?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes for inverted duty structure and exports, where periods can be clubbed in a single RFD-01 if all relate to the same financial year and the rate-inversion structure is consistent. Clubbing 12 monthly ₹50,000 refunds into one ₹6 lakh refund spreads CA fees across a larger amount, improving ROI. The two-year limitation runs separately for each period — the earliest period in the cluster determines the binding deadline. Clubbing is not permitted across financial years or different categories.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>When should I drop pursuit and absorb the cost?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Drop pursuit when expected recovery is below 1.5x total costs, when the refund category has weak baseline probability under 50%, when documentation gaps cannot be remedied within limitation, or when the underlying transaction is contentious and likely to trigger broader scrutiny. Refunds for restricted goods under Notification 5/2017 or 9/2022, or arising from rate-cut accumulation, should generally not be pursued unless legal precedent supports the claim. Document the decision with internal note for audit trail.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need a Pursuit Assessment?</h3>
            <p>Fixed-fee 30-min pre-filing assessment — quantum, readiness, probability and written go/no-go recommendation.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Refund%20Pursuit%20Calculator.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Refund%20Pursuit%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Refund%20Pursuit%20Calculator.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/gst-refund" class="sidebar-link">GST Refund Services<span class="arrow">→</span></a>
            <a href="/gst-returns-for-sez" class="sidebar-link">GST Returns for SEZ<span class="arrow">→</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration<span class="arrow">→</span></a>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing<span class="arrow">→</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit<span class="arrow">→</span></a>
            <a href="/iec-registration" class="sidebar-link">IEC Registration<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Refund Toolkit</h3>
            <a href="/tools/rfd-01-filing-checklist" class="sidebar-link">RFD-01 Pre-Filing Checklist<span class="arrow">→</span></a>
            <a href="/tools/export-refund-lut-calculator" class="sidebar-link">Export Refund (LUT) Calculator<span class="arrow">→</span></a>
            <a href="/tools/igst-export-refund-calculator" class="sidebar-link">IGST Export Refund Calculator<span class="arrow">→</span></a>
            <a href="/tools/inverted-duty-refund-calculator" class="sidebar-link">Inverted Duty Refund Calculator<span class="arrow">→</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee &amp; Interest<span class="arrow">→</span></a>
            <a href="/tools/working-capital-calculator" class="sidebar-link">Working Capital Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/import-export-code-iec-registration-complete-guide-for-indian-businesses" class="sidebar-link">IEC Registration Complete Guide<span class="arrow">→</span></a>
            <a href="/blog/income-tax-refund-issue-understanding-refund-withheld-and-adjustment-cases" class="sidebar-link">Refund Withheld &amp; Adjustment Cases<span class="arrow">→</span></a>
            <a href="/blog/annual-compliance-requirements-for-private-limited-companies-in-india-2025-2026" class="sidebar-link">Annual Compliance Calendar 2025-26<span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune · Mumbai · Delhi · Gurugram</div>
    <div class="trust">250+ refund pursuit assessments delivered</div>
</div>

<footer class="footer">
    <p>© 2026 Patron Accounting LLP. All rights reserved.</p>
</footer>


<script>
(function(){
    'use strict';
    function parseINR(raw){if(raw===undefined||raw===null)return NaN;var c=String(raw).replace(/[,\s₹]/g,'');if(c==='')return NaN;var n=parseFloat(c);return isFinite(n)?n:NaN;}
    function pickPositive(p,f){return (isFinite(p)&&p>0)?p:f;}
    var $ = function(id){ return document.getElementById(id); };

    function fmtINR(n){
        if (n === null || n === undefined || isNaN(n)) return '—';
        var v = Math.round(Number(n));
        var sign = v < 0 ? '−' : '';
        v = Math.abs(v);
        if (v >= 10000000) return sign + '₹' + (v/10000000).toFixed(2) + ' Cr';
        if (v >= 100000)   return sign + '₹' + (v/100000).toFixed(2) + ' L';
        return sign + '₹' + v.toLocaleString('en-IN');
    }
    function fmtINRfull(n){
        if (n === null || n === undefined || isNaN(n)) return '—';
        var v = Math.round(Number(n));
        var sign = v < 0 ? '−' : '';
        return sign + '₹' + Math.abs(v).toLocaleString('en-IN');
    }

    var BASELINES = {
        'excess-cash': 0.95,
        'excess-tax': 0.90,
        'order': 0.85,
        'export-lut': 0.80,
        'sez-igst': 0.78,
        'sez-lut': 0.75,
        'export-igst': 0.75,
        'ids': 0.70,
        'deemed': 0.65,
        'other': 0.60
    };

    var CAT_LABELS = {
        'excess-cash': 'Excess Cash Ledger',
        'excess-tax': 'Excess Tax Paid',
        'order': 'Order/Appeal Refund',
        'export-lut': 'Exports under LUT',
        'sez-igst': 'SEZ with IGST',
        'sez-lut': 'SEZ under LUT',
        'export-igst': 'Exports with IGST',
        'ids': 'Inverted Duty Structure',
        'deemed': 'Deemed Exports',
        'other': 'Any Other Category'
    };

    var PROVISIONAL_ELIGIBLE = ['export-lut', 'export-igst', 'sez-lut', 'sez-igst', 'ids'];
    var CA_CERT_EXEMPT = ['excess-cash', 'export-igst'];

    // Toggle/range listeners
    var readinessSlider = $('readiness');
    readinessSlider.addEventListener('input', function(){
        $('readiness-val').textContent = readinessSlider.value + '%';
    });

    // FAQ accordion
    document.querySelectorAll('.faq-item').forEach(function(item){
        var btn = item.querySelector('.faq-question');
        if (!btn) return;
        btn.addEventListener('click', function(){
            item.classList.toggle('open');
            btn.setAttribute('aria-expanded', item.classList.contains('open') ? 'true' : 'false');
        });
    });

    // TOC active state
    var tocLinks = document.querySelectorAll('.toc-nav a');
    var tocSections = [];
    tocLinks.forEach(function(a){
        var id = a.getAttribute('href').replace('#','');
        var s = document.getElementById(id);
        if (s) tocSections.push({el: s, link: a});
    });
    function updateTocActive(){
        var scrollY = window.scrollY + 100;
        var current = tocSections[0];
        for (var i = 0; i < tocSections.length; i++){
            if (tocSections[i].el.offsetTop <= scrollY) current = tocSections[i];
        }
        tocLinks.forEach(function(l){ l.classList.remove('active'); });
        if (current && current.link) current.link.classList.add('active');
    }
    window.addEventListener('scroll', updateTocActive, {passive: true});
    updateTocActive();

    function compute(){
        var category = $('category').value;
        var refundAmt = parseINR($('refund-amt').value) || 0;
        var caFee = parseINR($('ca-fee').value) || 0;
        var caCert = parseINR($('ca-cert').value) || 0;
        var docCost = parseINR($('doc-cost').value) || 0;
        var litCost = parseINR($('lit-cost').value) || 0;
        var timeHours = parseINR($('time-hours').value) || 0;
        var hourlyRate = parseINR($('hourly-rate').value) || 0;
        var readiness = parseINR($('readiness').value) || 0;
        var aadhaar = $('aadhaar').value;
        var procDays = parseINR($('proc-days').value) || 60;
        var coc = parseINR($('coc').value) || 0;

        if (refundAmt <= 0) {
            alert('Please enter the estimated refund amount.');
            return;
        }
        if (caFee + caCert + docCost + (timeHours * hourlyRate) <= 0) {
            alert('Please enter at least one cost component.');
            return;
        }

        // Probability cascade
        var baseline = BASELINES[category] || 0.60;
        var readinessMul = 0.5 + (readiness / 100) * 0.5; // 0.5 at 0% → 1.0 at 100%
        var aadhaarMul = aadhaar === 'yes' ? 1.0 : 0.9;
        var finalProb = Math.min(0.92, baseline * readinessMul * aadhaarMul);

        // Auto-flag CA certification
        var caRequired = refundAmt > 200000 && CA_CERT_EXEMPT.indexOf(category) < 0;

        // Time-money cost — with provisional discount where applicable
        var provisionalEligible = PROVISIONAL_ELIGIBLE.indexOf(category) >= 0 && aadhaar === 'yes';
        var timeMoneyCost = 0;
        if (provisionalEligible) {
            // 90% credited in 7 days, 10% in proc-days
            timeMoneyCost = (refundAmt * 0.9 * (coc/100) * 7 / 365) + (refundAmt * 0.1 * (coc/100) * procDays / 365);
        } else {
            timeMoneyCost = refundAmt * (coc/100) * procDays / 365;
        }

        // Section 56 interest entitlement (only if delayed beyond 60 days)
        var delayDays = Math.max(0, procDays - 60);
        var section56Interest = refundAmt * 0.06 * delayDays / 365;

        // Expected recovery
        var expectedRefund = refundAmt * finalProb;
        var expectedRecovery = expectedRefund + section56Interest * finalProb;

        // Total costs
        var internalTimeCost = timeHours * hourlyRate;
        var caCertActual = caRequired ? caCert : 0;
        var rejectionProb = 1 - finalProb;
        var expectedLitCost = litCost * rejectionProb;
        var directCost = caFee + caCertActual + docCost + internalTimeCost;
        var totalCost = directCost + expectedLitCost;

        // Net benefit
        var netBenefit = expectedRecovery - totalCost - timeMoneyCost;

        // ROI on direct cost (excluding time-money + lit since those are weighted)
        var roi = directCost > 0 ? (netBenefit / directCost) : 0;

        // Break-even probability: P × Refund + P × Sec56_int = Total Costs (using direct + expected lit) + Time-Money
        // Solve for P:
        // P × (Refund + Sec56_int) - litCost × (1-P) = directCost + timeMoneyCost - 0
        // Wait, simpler model: ignore lit cost in break-even (since lit is weighted by rejection prob itself)
        // P × Refund_Total - directCost - timeMoneyCost - litCost × (1-P) = 0
        // P × Refund_Total + P × litCost = directCost + timeMoneyCost + litCost
        // P × (Refund_Total + litCost) = directCost + timeMoneyCost + litCost
        // P_breakeven = (directCost + timeMoneyCost + litCost) / (Refund + Sec56_int + litCost)
        var totalDenominator = refundAmt + section56Interest + litCost;
        var breakEvenProb = totalDenominator > 0 ? Math.min(1, (directCost + timeMoneyCost + litCost) / totalDenominator) : 0;

        // Min refund amount that breaks even at current probability
        // Solve: Refund × P + interest56 × P - directCost - timeMoneyCost_min - litCost × (1-P) = 0
        // Approximate: ignoring time-money for min refund (since it scales with refund)
        // Refund × P × (1 + tm_factor) ≈ directCost + litCost × (1-P)
        // Refund_min = (directCost + litCost × (1-P)) / (P × (1 - coc * procDays / 365))
        // Simpler: Refund_min where Net Benefit = 0
        var tmFactor = provisionalEligible ? 
            (0.9 * (coc/100) * 7 / 365) + (0.1 * (coc/100) * procDays / 365) :
            (coc/100) * procDays / 365;
        var minRefundDenominator = finalProb - tmFactor;
        var minRefund = minRefundDenominator > 0 ? (directCost + expectedLitCost) / minRefundDenominator : 0;

        // Verdict
        var verdictClass = '';
        var verdictHeadline = '';
        var verdictSub = '';
        var alerts = [];
        var decision = '';

        if (netBenefit > directCost * 3) {
            verdictClass = '';
            verdictHeadline = 'PURSUE STRONGLY — Net Benefit ' + fmtINR(netBenefit);
            verdictSub = 'ROI of ' + roi.toFixed(1) + 'x on direct cost. Pursue with confidence; even adverse scenarios likely positive.';
            decision = 'PURSUE STRONGLY';
        } else if (netBenefit > directCost * 1) {
            verdictClass = 'amber';
            verdictHeadline = 'PURSUE WITH CAUTION — Net ' + fmtINR(netBenefit);
            verdictSub = 'ROI of ' + roi.toFixed(1) + 'x. Tighten readiness, accelerate filing within limitation.';
            decision = 'PURSUE (CAUTIOUS)';
        } else if (netBenefit > 0) {
            verdictClass = 'amber';
            verdictHeadline = 'MARGINAL — Net Benefit Only ' + fmtINR(netBenefit);
            verdictSub = 'ROI of ' + roi.toFixed(1) + 'x is below 1×. Consider aggregation across periods to improve ROI.';
            decision = 'MARGINAL';
        } else {
            verdictClass = 'red';
            verdictHeadline = 'DON\'T PURSUE — Negative Net Benefit ' + fmtINR(netBenefit);
            verdictSub = 'Expected recovery does not cover total costs. Drop unless strategic value or aggregation possible.';
            decision = 'DON\'T PURSUE';
        }

        // Alerts
        if (provisionalEligible) {
            alerts.push({type: 'success', html: '<strong>90% Provisional Refund Eligible:</strong> Per CBIC Instruction 06/2025-GST, this category with Aadhaar authentication qualifies for 90% sanction within 7 days. Time-money cost is reduced by ~80% versus standard cycle. Major boost to pursuit ROI.'});
        }
        if (PROVISIONAL_ELIGIBLE.indexOf(category) >= 0 && aadhaar === 'no') {
            alerts.push({type: 'warn', html: '<strong>Aadhaar authentication missing — provisional refund forfeited:</strong> Per Notification 14/2025-Central Tax, this category supports 90% provisional refund only for Aadhaar-authenticated taxpayers. Complete Aadhaar authentication on the GST portal before filing — the time-money saving alone often exceeds the authentication effort.'});
        }
        if (caRequired && caCert <= 0) {
            alerts.push({type: 'warn', html: '<strong>CA Certification required:</strong> Refund of ' + fmtINR(refundAmt) + ' exceeds ₹2 lakh threshold for ' + CAT_LABELS[category] + '. Per Annexure-2 of Circular 125/44/2019-GST, a CA/CMA certificate is mandatory. Add the certification fee (typically ₹3,000-₹15,000) to your cost calculation.'});
        }
        if (caRequired) {
            alerts.push({type: 'info', html: '<strong>CA Certification mandatory and included:</strong> Refund of ' + fmtINR(refundAmt) + ' triggers Annexure-2 CA certification per Circular 125/2019-GST. The ' + fmtINR(caCert) + ' included in costs covers this requirement.'});
        }
        if (CA_CERT_EXEMPT.indexOf(category) >= 0 && caCert > 0) {
            alerts.push({type: 'info', html: '<strong>CA Certification not required for ' + CAT_LABELS[category] + ':</strong> Per Circular 125/2019-GST, this category is exempt from Annexure-2 certification regardless of refund amount. The CA certification fee of ' + fmtINR(caCert) + ' will not be applied. Consider removing it.'});
        }
        if (refundAmt < minRefund && minRefundDenominator > 0) {
            alerts.push({type: 'warn', html: '<strong>Refund below break-even threshold:</strong> At current probability and cost structure, a refund of at least ' + fmtINR(minRefund) + ' is needed for net positive pursuit. Consider clubbing with other periods within the same FY and category.'});
        }
        if (finalProb < 0.5) {
            alerts.push({type: 'danger', html: '<strong>Low sanction probability (' + (finalProb * 100).toFixed(0) + '%):</strong> Pursuit ROI is fragile. Improve readiness via the <a href="/tools/rfd-01-filing-checklist">RFD-01 Pre-Filing Checklist</a>, complete Aadhaar authentication if missing, and consider aggregating periods. Pursuing with low probability typically leads to deficiency memos and fresh filings — limitation may close before resolution.'});
        }
        if (procDays > 120) {
            alerts.push({type: 'info', html: '<strong>Section 56 interest opportunity:</strong> At ' + procDays + ' days processing, Section 56 interest at 6% accrues for ' + delayDays + ' days, yielding ' + fmtINR(section56Interest) + '. Track the 60-day limit per Section 54(7) — interest is auto-credited if delay is officer-side.'});
        }

        // Render verdict
        $('verdict').className = 'verdict-card' + (verdictClass ? ' ' + verdictClass : '');
        $('verdict-headline').textContent = verdictHeadline;
        $('verdict-sub').textContent = verdictSub;
        $('v-net').textContent = fmtINR(netBenefit);
        $('v-net').className = 'verdict-grid-value' + (netBenefit >= 0 ? ' pos' : ' neg');
        $('v-roi').textContent = roi.toFixed(1) + 'x';
        $('v-roi').className = 'verdict-grid-value' + (roi >= 1 ? ' pos' : ' neg');
        $('v-be').textContent = (breakEvenProb * 100).toFixed(0) + '%';

        // Alerts
        var ah = '';
        for (var a = 0; a < alerts.length; a++) ah += '<div class="info-banner ' + alerts[a].type + '">' + alerts[a].html + '</div>';
        $('alerts').innerHTML = ah;

        // Basis
        var basisHtml = '';
        basisHtml += '<strong>Category:</strong> ' + CAT_LABELS[category] + '. ';
        basisHtml += '<strong>Refund:</strong> ' + fmtINR(refundAmt) + '. ';
        basisHtml += '<strong>Probability cascade:</strong> ' + (baseline * 100).toFixed(0) + '% baseline × ' + readinessMul.toFixed(2) + ' readiness × ' + aadhaarMul.toFixed(2) + ' Aadhaar = <strong>' + (finalProb * 100).toFixed(0) + '%</strong> final probability. ';
        basisHtml += '<strong>Direct cost:</strong> ' + fmtINR(directCost) + ' (CA ' + fmtINR(caFee) + ' + Cert ' + fmtINR(caCertActual) + ' + Doc ' + fmtINR(docCost) + ' + Time ' + fmtINR(internalTimeCost) + '). ';
        basisHtml += '<strong>Expected litigation:</strong> ' + fmtINR(expectedLitCost) + ' (' + fmtINR(litCost) + ' × ' + (rejectionProb * 100).toFixed(0) + '% rejection prob). ';
        basisHtml += '<strong>Time-money cost:</strong> ' + fmtINR(timeMoneyCost);
        basisHtml += provisionalEligible ? ' (90% provisional within 7 days). ' : ' (full ' + procDays + ' days at ' + coc + '%). ';
        basisHtml += '<strong>Section 56 interest:</strong> ' + fmtINR(section56Interest) + ' (' + delayDays + ' days × 6%, weighted by probability).';
        $('basis-text').innerHTML = basisHtml;

        // Probability meter
        $('m-base').style.width = (baseline * 100) + '%';
        $('m-base-val').textContent = (baseline * 100).toFixed(0) + '%';
        $('m-ready').style.width = (readinessMul * 100) + '%';
        $('m-ready-val').textContent = (readinessMul * 100).toFixed(0) + '%';
        var finalPct = finalProb * 100;
        $('m-final').style.width = finalPct + '%';
        $('m-final').className = 'meter-fill' + (finalPct >= 70 ? '' : (finalPct >= 50 ? ' amber' : ' danger'));
        $('m-final-val').textContent = finalPct.toFixed(0) + '%';

        // Breakdown
        $('b-er').textContent = '+ ' + fmtINRfull(expectedRefund);
        $('b-int').textContent = '+ ' + fmtINRfull(section56Interest * finalProb);
        $('b-ca').textContent = '− ' + fmtINRfull(caFee);
        $('b-cert').textContent = '− ' + fmtINRfull(caCertActual);
        $('b-doc').textContent = '− ' + fmtINRfull(docCost);
        $('b-time').textContent = '− ' + fmtINRfull(internalTimeCost);
        $('b-lit').textContent = '− ' + fmtINRfull(expectedLitCost);
        $('b-tm').textContent = '− ' + fmtINRfull(timeMoneyCost);
        $('b-total').innerHTML = (netBenefit >= 0 ? '+ ' : '− ') + fmtINRfull(Math.abs(netBenefit));

        // Summary
        $('s-amt').textContent = fmtINR(refundAmt);
        $('s-er').textContent = fmtINR(expectedRecovery);
        $('s-cost').textContent = fmtINR(totalCost);
        $('s-tm').textContent = fmtINR(timeMoneyCost);
        $('s-min').textContent = minRefundDenominator > 0 ? fmtINR(minRefund) : 'N/A';
        $('s-dec').textContent = decision;

        // Show
        $('results').classList.add('visible');
        $('results').scrollIntoView({behavior: 'smooth', block: 'start'});
    }

    function reset(){
        $('category').value = 'ids';
        $('refund-amt').value = '500000';
        $('ca-fee').value = '15000';
        $('ca-cert').value = '5000';
        $('doc-cost').value = '3000';
        $('lit-cost').value = '25000';
        $('time-hours').value = '20';
        $('hourly-rate').value = '800';
        $('readiness').value = '75';
        $('readiness-val').textContent = '75%';
        $('aadhaar').value = 'yes';
        $('proc-days').value = '60';
        $('coc').value = '12';
        $('results').classList.remove('visible');
    }

    $('btn-calculate').addEventListener('click', compute);
    $('btn-reset').addEventListener('click', reset);
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
@endsection
