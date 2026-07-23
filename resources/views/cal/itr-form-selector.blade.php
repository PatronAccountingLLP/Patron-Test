@extends('layouts.service-app')

@section('meta')

    <title>ITR Form Selector | Which ITR Form FY 2025-26</title>
    <meta name="description" content="ITR form selector: a 7-step wizard picks the right ITR form (ITR-1 to ITR-7) for FY 2025-26 (AY 2026-27), with clear reasoning. Free, CA-reviewed. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/itr-form-selector">

    <meta property="og:title" content="ITR Form Selector — Pick the Right ITR Form FY 2025-26">
    <meta property="og:description" content="Decision wizard for ITR-1 to ITR-7 selection for FY 2025-26 (AY 2026-27) — covers individuals, HUF, firms, companies, trusts with reasoning and alternatives.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/itr-form-selector">
    <meta property="og:image" content="/tools/og/itr-form-selector.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR Form Selector — Pick the Right ITR Form FY 2025-26">
    <meta name="twitter:description" content="7-step wizard picks the right ITR form (1 to 7) for FY 2025-26 with reasoning and alternatives.">
    <meta name="twitter:image" content="/tools/og/itr-form-selector.png">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "ITR Form Selector",
      "description": "ITR Form Selector helps taxpayers pick the right Income Tax Return form (ITR-1 Sahaj, ITR-2, ITR-3, ITR-4 Sugam, ITR-5, ITR-6, or ITR-7) for FY 2025-26 (AY 2026-27) through an adaptive wizard of up to 8 questions for individuals and HUFs, plus a brief reference panel for firms, companies, and trusts. Each recommendation includes reasoning under CBDT eligibility rules, common alternatives, and edge case flags for crypto income, F&O trading, foreign ESOPs, and unlisted shares where CA consultation is recommended.",
      "url": "/tools/itr-form-selector",
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
        {"@type": "ListItem", "position": 3, "name": "ITR Form Selector", "item": "/tools/itr-form-selector"}
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
          "name": "Which ITR form should I file for FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The right ITR form depends on your taxpayer type, total income, and income sources. ITR-1 (Sahaj) is for resident individuals with salary, one or two house properties, and total income below ₹50 lakh. ITR-2 is for individuals with capital gains or foreign assets. ITR-3 is for business or professional income. ITR-4 (Sugam) is for presumptive taxation under Sections 44AD/44ADA/44AE. ITR-5 is for firms, LLPs, BOIs. ITR-6 is for companies. ITR-7 is for trusts and political parties."
          }
        },
        {
          "@type": "Question",
          "name": "Can a salaried person file ITR-1 if they have capital gains?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "From AY 2026-27, ITR-1 allows reporting of long-term capital gains under Section 112A up to ₹1.25 lakh from listed equity. If your LTCG is below ₹1.25 lakh and you have no other capital gains, you can stay in ITR-1. However, if you have STCG, capital gains above ₹1.25 lakh, capital gains from property, debt mutual funds, or unlisted shares, you must file ITR-2. The expansion in AY 2026-27 helps many salaried taxpayers stay in the simpler form."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between ITR-1 and ITR-2?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-1 is for simple cases — resident individuals with salary, pension, one or two house properties, and small LTCG up to ₹1.25 lakh. Total income must be under ₹50 lakh. ITR-2 covers everything ITR-1 does plus capital gains above ₹1.25 lakh, foreign assets or income, RNOR or non-resident status, agricultural income above ₹5,000, directorship in companies, and ownership of unlisted equity shares. Choose ITR-2 whenever any ITR-1 disqualifier applies."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between ITR-3 and ITR-4?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-3 is for individuals and HUFs with income from business or profession under regular accounting — books of accounts and tax audit as required. ITR-4 (Sugam) is for those who opt for presumptive taxation under Section 44AD (small businesses), Section 44ADA (specified professionals), or Section 44AE (transport operators). ITR-4 has simpler disclosures but turnover limits — ₹3 crore for 44AD if cash receipts are below 5%, ₹75 lakh for 44ADA professionals."
          }
        },
        {
          "@type": "Question",
          "name": "Can a freelancer file ITR-4 instead of ITR-3?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes if eligible. A freelancer in a specified profession (legal, medical, engineering, accountancy, technical consultancy, IT, architecture, interior design, or any notified profession) with gross receipts up to ₹75 lakh can opt for Section 44ADA presumptive taxation and file ITR-4. The deemed profit is 50% of gross receipts. If the freelancer wants to claim actual expenses or has receipts above ₹75 lakh, they must file ITR-3 with regular books of accounts."
          }
        },
        {
          "@type": "Question",
          "name": "Which ITR form should I file if I have crypto or VDA income?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Crypto and Virtual Digital Asset (VDA) income is taxed under Section 115BBH at a flat 30% rate plus 4% cess. You must file ITR-2 if you have only personal crypto investments, or ITR-3 if you treat crypto as business income or have other business income alongside. Schedule VDA disclosure is mandatory in both cases. Crypto cases involve complex issues — set-off restrictions, classification disputes, foreign exchange compliance — so CA consultation is strongly recommended."
          }
        },
        {
          "@type": "Question",
          "name": "Which ITR form should I file for F&O or intraday trading?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "F&O (futures and options) trading is treated as non-speculative business income and requires ITR-3, regardless of volume. Intraday equity trading is treated as speculative business income and also requires ITR-3. You cannot file ITR-2 if you have any F&O or intraday turnover, even if it is loss-making. Tax audit under Section 44AB may apply if turnover exceeds ₹10 crore (with digital transactions above 95%) or ₹2 crore otherwise."
          }
        },
        {
          "@type": "Question",
          "name": "Which ITR form should a director file?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If you are a director in any company at any time during FY 2025-26, you cannot file ITR-1. You must file ITR-2 if you have only salary plus directorship, or ITR-3 if you also have business or professional income. The same rule applies if you held unlisted equity shares at any time during the year. Schedule AL (Assets and Liabilities) disclosure becomes mandatory if total income exceeds ₹50 lakh, requiring detailed asset reporting."
          }
        },
        {
          "@type": "Question",
          "name": "Which ITR form is for partnership firms and LLPs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Partnership firms, LLPs, AOPs (Association of Persons), BOIs (Body of Individuals), and local authorities file ITR-5. Companies (private and public) file ITR-6, except those claiming exemption under Section 11. Charitable trusts, political parties, research institutions, and entities claiming exemption under Sections 11/12/13 file ITR-7. Tax audit, transfer pricing audit, and statutory due dates differ from individual filings — engage a CA for these forms."
          }
        },
        {
          "@type": "Question",
          "name": "What if I file the wrong ITR form?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Filing the wrong ITR form leads to a defective return notice under Section 139(9) of the Income Tax Act. You have 15 days from notice to rectify, otherwise the return is treated as invalid. Common errors include filing ITR-1 when you have capital gains over ₹1.25 lakh, filing ITR-2 when you have F&O income, or filing ITR-4 without meeting presumptive taxation conditions. Always cross-check eligibility before submission to avoid scrutiny and refund delays."
          }
        },
        {
          "@type": "Question",
          "name": "Did ITR-1 eligibility change for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. For AY 2026-27, CBDT expanded ITR-1 to allow income from up to two house properties (previously only one). LTCG up to ₹1.25 lakh from listed equity under Section 112A is also allowed in ITR-1, removing the earlier requirement to switch to ITR-2 for small equity gains. New disclosure requirements include granular Section 80C breakdown, HRA component-wise breakdown under Section 10(13A), and TDS section reporting for better Form 26AS reconciliation."
          }
        },
        {
          "@type": "Question",
          "name": "What are the due dates for ITR forms for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For non-audit individuals (ITR-1, ITR-2): 31 July 2026. For ITR-3 non-audit cases: 31 August 2026 (extended by Finance Act 2026). For audit cases (ITR-3 with tax audit, ITR-5, ITR-6): 31 October 2026. For transfer pricing cases: 30 November 2026. ITR-7 follows the audit deadline. Belated and revised returns under the old Income Tax Act 1961 can be filed up to 31 December 2026 for AY 2026-27. ITR-U is allowed up to 31 March 2031."
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
        .progress-bar { display: flex; gap: 4px; margin-bottom: 24px; }
        .progress-step { flex: 1; height: 6px; background: var(--surface-alt); border-radius: 3px; transition: background 0.3s; }
        .progress-step.active { background: var(--primary); }
        .progress-step.complete { background: var(--success); }
        .question-num { font-family: var(--font-mono); font-size: 12px; color: var(--accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .question-text { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin-bottom: 8px; line-height: 1.4; }
        .question-help { font-size: 13px; color: var(--text-muted); margin-bottom: 20px; line-height: 1.6; }
        .option-list { display: flex; flex-direction: column; gap: 10px; margin-bottom: 24px; }
        .option-btn { display: flex; align-items: center; gap: 14px; padding: 14px 18px; background: var(--surface); border: 2px solid var(--border); border-radius: var(--radius); cursor: pointer; transition: all 0.2s; text-align: left; font-family: var(--font-body); font-size: 15px; color: var(--text); -webkit-tap-highlight-color: transparent; }
        .option-btn:hover { border-color: var(--primary-light); background: var(--card); }
        .option-btn.selected { border-color: var(--primary); background: #ECFDF5; }
        .option-btn .opt-letter { width: 28px; height: 28px; min-width: 28px; border-radius: 50%; background: var(--card); border: 1.5px solid var(--border); display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; color: var(--text-muted); font-family: var(--font-mono); }
        .option-btn.selected .opt-letter { background: var(--primary); color: #fff; border-color: var(--primary); }
        .option-btn .opt-text { flex: 1; line-height: 1.4; }
        .option-btn .opt-text small { display: block; font-size: 11px; color: var(--text-muted); margin-top: 3px; font-weight: 400; }
        .option-btn.selected .opt-text small { color: var(--primary-light); }
        .option-btn * { pointer-events: none; }
        .multi-checkbox-list { display: flex; flex-direction: column; gap: 8px; margin-bottom: 16px; padding: 14px 16px; background: var(--surface); border-radius: var(--radius); border: 1.5px solid var(--border); }
        .multi-checkbox-item { display: flex; align-items: flex-start; gap: 10px; padding: 8px 4px; cursor: pointer; -webkit-tap-highlight-color: transparent; }
        .multi-checkbox-item input { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; cursor: pointer; }
        .multi-checkbox-item label { font-size: 14px; color: var(--text); cursor: pointer; line-height: 1.5; flex: 1; }
        .multi-checkbox-item label small { display: block; font-size: 11px; color: var(--text-muted); margin-top: 2px; }
        .nav-buttons { display: flex; justify-content: space-between; align-items: center; gap: 12px; margin-top: 16px; }
        .btn-back, .btn-next { padding: 12px 22px; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 700; cursor: pointer; transition: all 0.2s; -webkit-tap-highlight-color: transparent; }
        .btn-back { background: transparent; color: var(--text-muted); border: 1.5px solid var(--border); }
        .btn-back:hover { border-color: var(--text-muted); color: var(--text); }
        .btn-back:disabled { opacity: 0.4; cursor: not-allowed; }
        .btn-next { background: var(--primary); color: #fff; }
        .btn-next:hover { background: var(--primary-light); }
        .btn-next:disabled { background: var(--border); cursor: not-allowed; }
        .result-box { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 28px; margin-bottom: 20px; }
        .result-box .result-label { font-family: var(--font-mono); font-size: 11px; color: var(--accent-light); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .result-box .result-form { font-size: 32px; font-weight: 700; color: #fff; line-height: 1.1; margin-bottom: 4px; }
        .result-box .result-name { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; }
        .result-reasoning { background: rgba(255,255,255,0.1); border-radius: var(--radius); padding: 14px 18px; margin-top: 12px; }
        .result-reasoning .rs-head { font-family: var(--font-mono); font-size: 11px; color: var(--accent-light); font-weight: 700; text-transform: uppercase; margin-bottom: 6px; }
        .result-reasoning p { font-size: 14px; color: rgba(255,255,255,0.95); line-height: 1.6; margin: 0; }
        .result-alternatives { background: var(--surface); border-radius: var(--radius); padding: 16px 20px; margin-bottom: 16px; border-left: 4px solid var(--accent); }
        .result-alternatives .ra-head { font-family: var(--font-mono); font-size: 11px; color: var(--accent); font-weight: 700; text-transform: uppercase; margin-bottom: 8px; }
        .result-alternatives p { font-size: 13px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 4px; }
        .caution-box { background: linear-gradient(135deg, #FEF3C7 0%, #FDE68A 100%); border-left: 4px solid var(--accent); border-radius: 0 var(--radius) var(--radius) 0; padding: 16px 20px; margin-bottom: 16px; }
        .caution-box .cb-head { font-weight: 700; color: #78350F; margin-bottom: 6px; font-size: 14px; }
        .caution-box p { font-size: 13px; color: #92400E; line-height: 1.6; margin: 0; }
        .next-action { display: flex; flex-direction: column; gap: 10px; margin-top: 20px; }
        .next-btn { display: inline-block; padding: 12px 24px; background: var(--accent); color: var(--primary-dark); font-weight: 700; font-size: 14px; border-radius: var(--radius); text-decoration: none; transition: background 0.2s; text-align: center; -webkit-tap-highlight-color: rgba(0,0,0,0.1); touch-action: manipulation; }
        .next-btn:hover { background: var(--accent-light); }
        .next-btn.outline { background: transparent; color: var(--primary); border: 1.5px solid var(--primary); }
        .next-btn.outline:hover { background: var(--primary); color: #fff; }
        .btn-restart { display: inline-flex; align-items: center; gap: 6px; margin-top: 16px; padding: 8px 16px; border: 1px solid var(--border); border-radius: 8px; background: var(--card); color: var(--text-muted); font-family: var(--font-body); font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s; }
        .btn-restart:hover { border-color: var(--danger); color: var(--danger); }
        .non-individual-panel { background: linear-gradient(135deg, #DBEAFE 0%, #BFDBFE 100%); border-radius: var(--radius-lg); padding: 24px; margin-top: 16px; }
        .non-individual-panel h3 { color: #1E3A8A; font-size: 16px; margin-bottom: 12px; }
        .non-individual-panel .nip-row { display: flex; justify-content: space-between; align-items: flex-start; gap: 12px; padding: 10px 0; border-bottom: 1px solid rgba(30,58,138,0.15); font-size: 14px; }
        .non-individual-panel .nip-row:last-child { border-bottom: none; }
        .non-individual-panel .nip-form { font-weight: 700; color: #1E3A8A; flex: 0 0 60px; }
        .non-individual-panel .nip-desc { flex: 1; color: #1E40AF; }
        .non-individual-panel .nip-cta { margin-top: 14px; padding-top: 14px; border-top: 2px solid rgba(30,58,138,0.2); }
        .non-individual-panel .nip-cta-text { font-size: 13px; color: #1E40AF; margin-bottom: 12px; }
        .non-individual-panel .nip-cta-btn { display: inline-block; padding: 10px 20px; background: #1E3A8A; color: #fff; font-weight: 700; font-size: 13px; border-radius: 8px; text-decoration: none; transition: background 0.2s; }
        .non-individual-panel .nip-cta-btn:hover { background: #1E40AF; }
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
        .rate-table .form-tag { font-weight: 700; color: var(--primary-dark); white-space: nowrap; }
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
            .question-text { font-size: 16px; }
            .result-box .result-form { font-size: 26px; }
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
        <a href="#wizard">Wizard</a>
        <a href="#framework">All Forms</a>
        <a href="#changes">AY 2026-27 Changes</a>
        <a href="#edge-cases">Edge Cases</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    ITR Form Selector
</nav>

<header class="hero" id="wizard">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>ITR Form Selector — <span>Pick the Right ITR Form</span> FY 2025-26</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">
            Not sure which ITR form to file? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.
        </div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20ITR%20Form%20Selector.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="Chat with us on WhatsApp" rel="noopener">
                <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                WhatsApp
            </a>
            <a href="mailto:sales@patronaccounting.com?subject=ITR%20Form%20Selector%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20ITR%20Form%20Selector.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20picking%20the%20right%20ITR%20form.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email
            </a>
        </div>
    </div>
</div>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Pick the correct ITR form for <strong>FY 2025-26 (AY 2026-27)</strong>. <strong>ITR-1 (Sahaj)</strong>: salary + ≤2 house properties + LTCG up to ₹1.25L, total income &lt; ₹50L. <strong>ITR-2</strong>: capital gains, foreign assets, RNOR/NRI, directorship, unlisted shares. <strong>ITR-3</strong>: business or professional income (regular books). <strong>ITR-4 (Sugam)</strong>: presumptive 44AD/44ADA/44AE. <strong>ITR-5</strong>: firms, LLPs, AOPs, BOIs. <strong>ITR-6</strong>: companies. <strong>ITR-7</strong>: trusts, political parties. The wizard below walks you through up to 8 questions for individuals and HUF.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>ITR Form Wizard</h2>
            <p class="calc-intro">Answer up to 8 questions to find the right ITR form. The wizard adapts based on your answers — irrelevant questions are skipped. Designed for individuals and HUFs. For firms, LLPs, companies, or trusts, use the reference panel below.</p>

            <noscript>
                <div class="noscript-box">This wizard requires JavaScript. Please enable JavaScript or use the reference framework below.</div>
            </noscript>

            <div class="progress-bar" id="progressBar"></div>

            <div id="wizardStage"></div>
        </div>

        <section class="content-section" id="framework">
            <h2>All ITR Forms — Quick Reference</h2>
            <p>Complete eligibility framework for all seven ITR forms applicable to AY 2026-27 (FY 2025-26 income), notified by CBDT on 30 March 2026 under the <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Income Tax Act 1961</a>. Sources: <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department</a>, <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> guidance, <a href="https://www.finmin.nic.in/" target="_blank" rel="noopener">Ministry of Finance</a> notifications, and <a href="https://www.pib.gov.in/" target="_blank" rel="noopener">PIB</a> press releases.</p>

            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Form</th><th>Who Files</th><th>Key Conditions</th><th>Common Disqualifiers</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="form-tag">ITR-1<br><small>Sahaj</small></td>
                        <td>Resident individuals</td>
                        <td>Salary, pension, up to 2 house properties, other sources, LTCG ≤ ₹1.25L from listed equity. Total income &lt; ₹50L.</td>
                        <td>NRI, RNOR, capital gains &gt; ₹1.25L, business income, foreign assets, director, unlisted shares</td>
                    </tr>
                    <tr>
                        <td class="form-tag">ITR-2</td>
                        <td>Individuals & HUF</td>
                        <td>Anyone NOT eligible for ITR-1, but with no business or professional income. Includes NRIs, RNOR, capital gains, foreign assets, directors, unlisted shareholders.</td>
                        <td>Any business or professional income (use ITR-3 or ITR-4 instead)</td>
                    </tr>
                    <tr>
                        <td class="form-tag">ITR-3</td>
                        <td>Individuals & HUF</td>
                        <td>Business or professional income with regular books. Includes F&O, intraday, partnership share, crypto as business.</td>
                        <td>Companies, firms, trusts (use ITR-5/6/7)</td>
                    </tr>
                    <tr>
                        <td class="form-tag">ITR-4<br><small>Sugam</small></td>
                        <td>Individuals, HUF<sup>†</sup>, partnership firms (not LLP)</td>
                        <td>Presumptive taxation under Section 44AD (turnover ≤ ₹3 cr if cash ≤ 5%, else ₹2 cr), Section 44ADA (gross receipts ≤ ₹75L specified profession)<sup>†</sup>, or Section 44AE (transport).</td>
                        <td>Income &gt; ₹50L, capital gains, foreign assets, director, more than one house property</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="font-size: 12px; color: var(--text-muted); font-style: italic; padding: 8px 12px; background: #FEF7E0; border-left: 3px solid #D97706;"><strong>† Note on HUF eligibility:</strong> Per Sec 44ADA(1) of the Income Tax Act, HUFs are NOT eligible for Section 44ADA (specified profession) — that section is restricted to Resident Individuals and Partnership Firms (other than LLP). HUFs ARE eligible for Sec 44AD (small business) and Sec 44AE (transport) presumptive schemes via ITR-4.</td>
                    </tr>
                    <tr>
                        <td class="form-tag">ITR-5</td>
                        <td>Firms, LLPs, AOPs, BOIs, local authorities</td>
                        <td>Partnership firms (registered/unregistered), LLPs, association of persons, body of individuals, artificial juridical persons, local authorities, cooperative societies (some).</td>
                        <td>Companies (use ITR-6), trusts (use ITR-7), individuals/HUF</td>
                    </tr>
                    <tr>
                        <td class="form-tag">ITR-6</td>
                        <td>Companies</td>
                        <td>All companies (private, public, OPC) NOT claiming exemption under Section 11. Mandatory audit and electronic filing with digital signature.</td>
                        <td>Companies claiming Section 11 exemption (use ITR-7), individuals, firms</td>
                    </tr>
                    <tr>
                        <td class="form-tag">ITR-7</td>
                        <td>Charitable trusts, political parties, research institutions</td>
                        <td>Entities required to file returns under Sections 139(4A)/(4B)/(4C)/(4D) — charitable trusts under Section 11, political parties under Section 13A, scientific research associations, news agencies.</td>
                        <td>Regular companies, firms, individuals</td>
                    </tr>
                </tbody>
            </table></div>
        </section>

        <section class="content-section" id="changes">
            <h2>Key Changes for AY 2026-27</h2>
            <p>CBDT notified the AY 2026-27 ITR forms on 30 March 2026 under the Income Tax Act 1961. Even though the new Income Tax Act 2025 came into effect on 1 April 2026, FY 2025-26 income continues to be governed by the old Act because the income relates to a tax year beginning before April 2026.</p>

            <h3>ITR-1 Expanded</h3>
            <ul>
                <li><strong>Two house properties allowed</strong> — earlier limited to one. Salaried taxpayers with one self-occupied and one let-out property can now use the simpler ITR-1.</li>
                <li><strong>LTCG up to ₹1.25L</strong> from listed equity (Section 112A) allowed in ITR-1 — earlier forced switch to ITR-2.</li>
            </ul>

            <h3>ITR-2 Simplifications</h3>
            <ul>
                <li><strong>Single-schedule capital gains reporting</strong> — the dual reporting (pre/post 23 July 2024) was a one-time AY 2025-26 requirement. For FY 2025-26 there's no mid-year rate change, so capital gains are reported in a single schedule.</li>
                <li><strong>Granular Section 80C disclosure</strong> — taxpayers must break down which specific 80C investments are claimed.</li>
                <li><strong>HRA component breakdown</strong> under Section 10(13A) for accuracy.</li>
                <li><strong>TDS section reporting</strong> — new field requires specifying the TDS section under which tax was deducted, helping reconciliation with Form 26AS.</li>
            </ul>

            <h3>ITR-3 Deadline Extended</h3>
            <p>Finance Act 2026 extended the ITR-3 deadline for non-audit business and professional income from 31 July to <strong>31 August 2026</strong>. Tax audit cases continue at 31 October 2026.</p>

            <h3>ITR-4 New Disclosures</h3>
            <p>New column under Financial Particulars requires presumptive taxpayers (Section 44AD/44ADA/44AE) to disclose investments made during the year — improving income-investment reconciliation.</p>

            <div class="callout">
                <p><strong>Two-tab portal:</strong> The income tax e-filing portal now shows two tabs — Tab 1 for "Income Tax Act 1961" (use this for AY 2026-27 / FY 2025-26 returns) and Tab 2 for "Income Tax Act 2025 / Tax Year 2026-27" (will be used for FY 2026-27 returns from July 2027 onwards). Always select the right tab.</p>
            </div>
        </section>

        <div class="body-cta">
    <h3>Need Help Picking the Right ITR Form?</h3>
    <p>Patron's CAs assess your sources of income, residential status and special situations, then file the correct ITR form with all schedules. We support Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20ITR%20Form%20Selector.%20I%20need%20help%20picking%20the%20right%20ITR%20form.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=ITR%20Form%20Selector%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20ITR%20Form%20Selector.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20picking%20the%20right%20ITR%20form.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <section class="content-section" id="edge-cases">
            <h2>Edge Cases — When to Get CA Help</h2>
            <p>Several scenarios go beyond automated wizard logic. The wizard above flags these but here's the full list of situations where CA consultation is strongly recommended.</p>

            <h3>Crypto / Virtual Digital Assets (VDA)</h3>
            <p>Crypto income is taxed under Section 115BBH at flat 30% with no set-off of losses. Classification as personal investment vs business income changes the form (ITR-2 vs ITR-3) and affects loss treatment. Schedule VDA disclosure is mandatory. Foreign exchange compliance under FEMA may also apply.</p>

            <h3>F&O and Intraday Trading</h3>
            <p>F&O is non-speculative business income, intraday is speculative business income — both require ITR-3 regardless of profit/loss. Tax audit under Section 44AB may apply if turnover (calculated using ICAI guidelines) exceeds thresholds. Many traders mistakenly file ITR-2 thinking these are capital gains.</p>

            <h3>Foreign Company ESOPs / RSUs</h3>
            <p>Indian employees of MNCs receiving foreign company stock face Schedule FA disclosure under <a href="/itr-for-capital-gains">capital gains rules</a>, plus DTAA foreign tax credit claims via Form 67. Non-disclosure triggers Black Money Act penalties up to ₹10L per year. ITR-2 or ITR-3 with full Schedule FA is mandatory.</p>

            <h3>Director with Multiple Companies</h3>
            <p>Holding directorship in any company at any time during FY 2025-26 disqualifies you from ITR-1. Companies with strike-off, disqualification, or DIN issues add layers of complexity. ITR-2 if salary-only; ITR-3 if combined with business income.</p>

            <h3>RNOR Status Transitions</h3>
            <p>Returning NRIs in their first 2-3 years as RNOR have unique global income exclusions and need careful residency status determination under Section 6. ITR-2 is generally appropriate but the residential status declaration and foreign asset disclosures need expert handling.</p>

            <h3>Partner in Firm + Individual Income</h3>
            <p>If you're a partner receiving share of profit from a firm AND have your own salary or other income, ITR-3 is required. The firm's ITR-5 reports its own profit; your ITR-3 reports your share, salary from firm, interest, and personal income separately.</p>

            <div class="callout warn">
                <p><strong>Common defective return notices:</strong> ITR-1 filed with capital gains &gt; ₹1.25L; ITR-2 filed with F&O turnover; ITR-4 filed with income &gt; ₹50L; missing Schedule FA disclosure for foreign assets; presumptive 44AD without meeting cash-receipt test. Each of these triggers a Section 139(9) notice with 15-day cure window.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Which ITR form should I file for FY 2025-26?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The right ITR form depends on your taxpayer type, total income, and income sources. ITR-1 (Sahaj) is for resident individuals with salary, one or two house properties, and total income below ₹50 lakh. ITR-2 is for individuals with capital gains or foreign assets. ITR-3 is for business or professional income. ITR-4 (Sugam) is for presumptive taxation under Sections 44AD/44ADA/44AE. ITR-5 is for firms, LLPs, BOIs. ITR-6 is for companies. ITR-7 is for trusts and political parties.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a salaried person file ITR-1 if they have capital gains?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">From AY 2026-27, ITR-1 allows reporting of long-term capital gains under Section 112A up to ₹1.25 lakh from listed equity. If your LTCG is below ₹1.25 lakh and you have no other capital gains, you can stay in ITR-1. However, if you have STCG, capital gains above ₹1.25 lakh, capital gains from property, debt mutual funds, or unlisted shares, you must file ITR-2. The expansion in AY 2026-27 helps many salaried taxpayers stay in the simpler form.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between ITR-1 and ITR-2?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">ITR-1 is for simple cases — resident individuals with salary, pension, one or two house properties, and small LTCG up to ₹1.25 lakh. Total income must be under ₹50 lakh. ITR-2 covers everything ITR-1 does plus capital gains above ₹1.25 lakh, foreign assets or income, RNOR or non-resident status, agricultural income above ₹5,000, directorship in companies, and ownership of unlisted equity shares. Choose ITR-2 whenever any ITR-1 disqualifier applies.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between ITR-3 and ITR-4?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">ITR-3 is for individuals and HUFs with income from business or profession under regular accounting — books of accounts and tax audit as required. ITR-4 (Sugam) is for those who opt for presumptive taxation under Section 44AD (small businesses), Section 44ADA (specified professionals), or Section 44AE (transport operators). ITR-4 has simpler disclosures but turnover limits — ₹3 crore for 44AD if cash receipts are below 5%, ₹75 lakh for 44ADA professionals.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a freelancer file ITR-4 instead of ITR-3?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes if eligible. A freelancer in a specified profession (legal, medical, engineering, accountancy, technical consultancy, IT, architecture, interior design, or any notified profession) with gross receipts up to ₹75 lakh can opt for Section 44ADA presumptive taxation and file ITR-4. The deemed profit is 50% of gross receipts. If the freelancer wants to claim actual expenses or has receipts above ₹75 lakh, they must file ITR-3 with regular books of accounts.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Which ITR form should I file if I have crypto or VDA income?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Crypto and Virtual Digital Asset (VDA) income is taxed under Section 115BBH at a flat 30% rate plus 4% cess. You must file ITR-2 if you have only personal crypto investments, or ITR-3 if you treat crypto as business income or have other business income alongside. Schedule VDA disclosure is mandatory in both cases. Crypto cases involve complex issues — set-off restrictions, classification disputes, foreign exchange compliance — so CA consultation is strongly recommended.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Which ITR form should I file for F&O or intraday trading?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">F&O (futures and options) trading is treated as non-speculative business income and requires ITR-3, regardless of volume. Intraday equity trading is treated as speculative business income and also requires ITR-3. You cannot file ITR-2 if you have any F&O or intraday turnover, even if it is loss-making. Tax audit under Section 44AB may apply if turnover exceeds ₹10 crore (with digital transactions above 95%) or ₹2 crore otherwise.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Which ITR form should a director file?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">If you are a director in any company at any time during FY 2025-26, you cannot file ITR-1. You must file ITR-2 if you have only salary plus directorship, or ITR-3 if you also have business or professional income. The same rule applies if you held unlisted equity shares at any time during the year. Schedule AL (Assets and Liabilities) disclosure becomes mandatory if total income exceeds ₹50 lakh, requiring detailed asset reporting.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Which ITR form is for partnership firms and LLPs?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Partnership firms, LLPs, AOPs (Association of Persons), BOIs (Body of Individuals), and local authorities file ITR-5. Companies (private and public) file ITR-6, except those claiming exemption under Section 11. Charitable trusts, political parties, research institutions, and entities claiming exemption under Sections 11/12/13 file ITR-7. Tax audit, transfer pricing audit, and statutory due dates differ from individual filings — engage a CA for these forms.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What if I file the wrong ITR form?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Filing the wrong ITR form leads to a defective return notice under Section 139(9) of the Income Tax Act. You have 15 days from notice to rectify, otherwise the return is treated as invalid. Common errors include filing ITR-1 when you have capital gains over ₹1.25 lakh, filing ITR-2 when you have F&O income, or filing ITR-4 without meeting presumptive taxation conditions. Always cross-check eligibility before submission to avoid scrutiny and refund delays.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Did ITR-1 eligibility change for AY 2026-27?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. For AY 2026-27, CBDT expanded ITR-1 to allow income from up to two house properties (previously only one). LTCG up to ₹1.25 lakh from listed equity under Section 112A is also allowed in ITR-1, removing the earlier requirement to switch to ITR-2 for small equity gains. New disclosure requirements include granular Section 80C breakdown, HRA component-wise breakdown under Section 10(13A), and TDS section reporting for better Form 26AS reconciliation.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are the due dates for ITR forms for AY 2026-27?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For non-audit individuals (ITR-1, ITR-2): 31 July 2026. For ITR-3 non-audit cases: 31 August 2026 (extended by Finance Act 2026). For audit cases (ITR-3 with tax audit, ITR-5, ITR-6): 31 October 2026. For transfer pricing cases: 30 November 2026. ITR-7 follows the audit deadline. Belated and revised returns under the old Income Tax Act 1961 can be filed up to 31 December 2026 for AY 2026-27. ITR-U is allowed up to 31 March 2031.</div></div></div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
    <h3>CA-Picked & Filed ITR</h3>
    <p>Right form, right schedules, no notices. We pick and file the correct ITR for FY 2025-26 — fixed-fee.</p>
    <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20ITR%20Form%20Selector.%20I%20need%20help%20picking%20the%20right%20ITR%20form.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=ITR%20Form%20Selector%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20ITR%20Form%20Selector.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20picking%20the%20right%20ITR%20form.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
            <a href="/itr-filing-for-salary" class="sidebar-link">ITR for Salary <span class="arrow">→</span></a>
            <a href="/itr-for-capital-gains" class="sidebar-link">ITR for Capital Gains <span class="arrow">→</span></a>
            <a href="/itr-filing-for-freelancers-professionals" class="sidebar-link">ITR for Freelancers / Professionals <span class="arrow">→</span></a>
            <a href="/income-tax-notice" class="sidebar-link">Income Tax Notice Help <span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Tax Audit Services <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/section-87a-rebate-calculator" class="sidebar-link">Section 87A Rebate Calculator <span class="arrow">→</span></a>
            <a href="/tools/capital-gains-calculator" class="sidebar-link">Capital Gains Calculator <span class="arrow">→</span></a>
            <a href="/tools/section-44ada-calculator" class="sidebar-link">Section 44ADA Calculator <span class="arrow">→</span></a>
            <a href="/tools/advance-tax-calculator" class="sidebar-link">Advance Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/ais-reconciliation-tool" class="sidebar-link">AIS Reconciliation Tool <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/itr-forms-comparison" class="sidebar-link">ITR Forms Comparison <span class="arrow">→</span></a>
            <a href="/blog/itr-1-vs-itr-2-when-to-use-which-form" class="sidebar-link">ITR-1 vs ITR-2 — When to Use Which <span class="arrow">→</span></a>
            <a href="/blog/itr-3-vs-itr-4" class="sidebar-link">ITR-3 vs ITR-4 — Choosing Right <span class="arrow">→</span></a>
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

    // Wizard state
    const answers = {};
    let currentStep = 1;
    const TOTAL_STEPS = 8;

    // Question flow with adaptive logic
    const questions = [
        {
            id: 'taxpayerType',
            num: 1,
            text: 'What type of taxpayer are you?',
            help: 'Select your legal classification for filing.',
            options: [
                { value: 'individual', label: 'Individual', sub: 'Salaried, freelancer, business owner, pensioner, NRI' },
                { value: 'huf', label: 'HUF (Hindu Undivided Family)', sub: 'HUF taxpayer with Karta filing' },
                { value: 'firm_llp', label: 'Partnership Firm / LLP / AOP / BOI', sub: 'Registered partnerships, LLPs, associations' },
                { value: 'company', label: 'Company (Pvt Ltd, Public Ltd, OPC)', sub: 'Companies under Companies Act 2013' },
                { value: 'trust_other', label: 'Trust / Political Party / Research Institution', sub: 'Section 11 exempt entities, etc.' }
            ]
        },
        {
            id: 'totalIncome',
            num: 2,
            text: 'Is your total income for FY 2025-26 below ₹50 lakh?',
            help: 'Total income from all sources before deductions. ₹50L is a hard cutoff for ITR-1 and ITR-4.',
            options: [
                { value: 'below50', label: 'Yes, below ₹50 lakh', sub: 'ITR-1 or ITR-4 may be options' },
                { value: 'above50', label: 'No, ₹50 lakh or above', sub: 'Schedule AL disclosure mandatory; ITR-2 or ITR-3 likely' }
            ]
        },
        {
            id: 'incomeSources',
            num: 3,
            text: 'What are your sources of income? Select all that apply.',
            help: 'Multi-select. The combination determines the form.',
            type: 'multi',
            options: [
                { value: 'salary', label: 'Salary or pension', sub: '' },
                { value: 'house', label: 'House property income (rent or self-occupied)', sub: '' },
                { value: 'other', label: 'Other sources (interest, dividend, lottery, family pension)', sub: '' },
                { value: 'capital_gains', label: 'Capital gains (equity, property, gold, MF, etc.)', sub: '' },
                { value: 'business', label: 'Business or professional income', sub: 'Including freelance, consulting, F&O, intraday' },
                { value: 'foreign', label: 'Foreign income or foreign assets', sub: 'Including RSU/ESOP from foreign company' }
            ]
        },
        {
            id: 'houseProperties',
            num: 4,
            text: 'How many house properties do you own?',
            help: 'Self-occupied + let-out + deemed let-out, total count.',
            options: [
                { value: 'one_two', label: '0, 1, or 2 properties', sub: 'AY 2026-27 ITR-1 allows up to 2' },
                { value: 'three_plus', label: '3 or more properties', sub: 'ITR-2 or ITR-3 required' }
            ],
            condition: (a) => (a.taxpayerType === 'individual' || a.taxpayerType === 'huf') && (a.incomeSources || []).includes('house')
        },
        {
            id: 'capitalGainsType',
            num: 5,
            text: 'What kind of capital gains do you have?',
            help: 'AY 2026-27 ITR-1 allows only LTCG up to ₹1.25L from listed equity (Sec 112A).',
            options: [
                { value: 'small_listed_ltcg', label: 'Only LTCG ≤ ₹1.25L from listed equity (Sec 112A)', sub: 'ITR-1 still works' },
                { value: 'other_cg', label: 'Anything else (STCG, property, debt MF, bigger gains, unlisted)', sub: 'ITR-2 needed' }
            ],
            condition: (a) => (a.taxpayerType === 'individual' || a.taxpayerType === 'huf') && (a.incomeSources || []).includes('capital_gains')
        },
        {
            id: 'businessType',
            num: 6,
            text: 'What kind of business or professional income do you have?',
            help: 'Determines presumptive eligibility (ITR-4) vs regular books (ITR-3).',
            options: [
                { value: 'presumptive_eligible', label: 'Eligible for presumptive 44AD / 44ADA / 44AE', sub: 'Small business ≤ ₹3 cr, profession ≤ ₹75L, transport — and you want to opt in' },
                { value: 'regular_books', label: 'Regular business with books of accounts', sub: 'Including freelance with actual expense claim' },
                { value: 'fno_intraday', label: 'F&O / intraday / speculation', sub: 'Mandatory ITR-3' },
                { value: 'crypto_vda', label: 'Crypto / VDA as business income', sub: 'Edge case — CA help recommended' }
            ],
            condition: (a) => (a.taxpayerType === 'individual' || a.taxpayerType === 'huf') && (a.incomeSources || []).includes('business')
        },
        {
            id: 'presumptiveSection',
            num: 7,
            text: 'Which presumptive section do you want to opt for?',
            help: 'Each section has different eligibility per the Bare Act. We will validate your choice against your taxpayer type.',
            options: [
                { value: 'sec_44ad', label: 'Section 44AD — Small business', sub: 'Turnover ≤ ₹3 cr (with 95% digital receipts) / ≤ ₹2 cr otherwise. Individual + HUF + Firm-non-LLP eligible.' },
                { value: 'sec_44ada', label: 'Section 44ADA — Specified profession', sub: 'Receipts ≤ ₹75L (95% digital) / ≤ ₹50L otherwise. Individual + Firm-non-LLP only — HUF NOT eligible.' },
                { value: 'sec_44ae', label: 'Section 44AE — Goods carriage transport', sub: 'Owns ≤ 10 vehicles. Broader eligibility — Individual / HUF / Firm / AOP / BOI all allowed.' }
            ],
            condition: (a) => (a.taxpayerType === 'individual' || a.taxpayerType === 'huf') && (a.incomeSources || []).includes('business') && a.businessType === 'presumptive_eligible'
        },
        {
            id: 'specialFlags',
            num: 8,
            text: 'Do any of these special situations apply?',
            help: 'Multi-select. Each affects form choice. Skip if none apply.',
            type: 'multi',
            options: [
                { value: 'director', label: 'I am a director in any company', sub: 'Disqualifies ITR-1' },
                { value: 'unlisted', label: 'I held unlisted equity shares', sub: 'Disqualifies ITR-1' },
                { value: 'rnor_nri', label: 'I am NRI or RNOR', sub: 'Disqualifies ITR-1' },
                { value: 'agri', label: 'Agricultural income above ₹5,000', sub: 'Disqualifies ITR-1' },
                { value: 'crypto_personal', label: 'Crypto / VDA as personal investment', sub: 'Schedule VDA disclosure required' },
                { value: 'foreign_esop', label: 'Foreign company ESOP / RSU', sub: 'Schedule FA disclosure required' },
                { value: 'partner', label: 'Partner in a firm with profit share', sub: 'ITR-3 required' },
                { value: 'none', label: 'None of the above', sub: '' }
            ],
            condition: (a) => (a.taxpayerType === 'individual' || a.taxpayerType === 'huf')
        }
    ];

    function renderProgressBar() {
        const bar = document.getElementById('progressBar');
        let html = '';
        for (let i = 1; i <= TOTAL_STEPS; i++) {
            const cls = i < currentStep ? 'complete' : (i === currentStep ? 'active' : '');
            html += '<div class="progress-step ' + cls + '"></div>';
        }
        bar.innerHTML = html;
    }

    function getNextQuestion(fromStep) {
        for (let i = fromStep; i < questions.length; i++) {
            const q = questions[i];
            if (!q.condition || q.condition(answers)) return { question: q, index: i };
        }
        return null;
    }

    function getPrevQuestion(fromStep) {
        for (let i = fromStep - 2; i >= 0; i--) {
            const q = questions[i];
            if (!q.condition || q.condition(answers)) return { question: q, index: i };
        }
        return null;
    }

    function renderStep() {
        const stage = document.getElementById('wizardStage');

        // If non-individual taxpayer, render the panel directly
        if (answers.taxpayerType && answers.taxpayerType !== 'individual' && answers.taxpayerType !== 'huf') {
            renderNonIndividual();
            return;
        }

        // Find current question (handles skipped conditional questions)
        const next = getNextQuestion(currentStep - 1);
        if (!next) {
            renderResult();
            return;
        }

        const q = next.question;
        currentStep = next.index + 1;
        renderProgressBar();

        let html = '<div class="question-num">Question ' + currentStep + ' of ' + TOTAL_STEPS + '</div>';
        html += '<div class="question-text">' + q.text + '</div>';
        if (q.help) html += '<div class="question-help">' + q.help + '</div>';

        if (q.type === 'multi') {
            html += '<div class="multi-checkbox-list">';
            const current = answers[q.id] || [];
            q.options.forEach((opt, i) => {
                const checked = current.includes(opt.value) ? 'checked' : '';
                html += '<div class="multi-checkbox-item"><input type="checkbox" id="opt_' + i + '" data-value="' + opt.value + '" ' + checked + ' onchange="updateMulti(\'' + q.id + '\', \'' + opt.value + '\', this.checked)"><label for="opt_' + i + '">' + opt.label + (opt.sub ? '<small>' + opt.sub + '</small>' : '') + '</label></div>';
            });
            html += '</div>';
        } else {
            html += '<div class="option-list">';
            q.options.forEach((opt, i) => {
                const sel = answers[q.id] === opt.value ? 'selected' : '';
                const letter = String.fromCharCode(65 + i);
                html += '<button class="option-btn ' + sel + '" onclick="selectOption(\'' + q.id + '\', \'' + opt.value + '\', this)">';
                html += '<span class="opt-letter">' + letter + '</span>';
                html += '<span class="opt-text">' + opt.label + (opt.sub ? '<small>' + opt.sub + '</small>' : '') + '</span>';
                html += '</button>';
            });
            html += '</div>';
        }

        html += '<div class="nav-buttons">';
        const prev = getPrevQuestion(currentStep);
        const canBack = !!prev;
        html += '<button class="btn-back"' + (canBack ? '' : ' disabled') + ' onclick="goBack()">← Back</button>';
        const canForward = answers[q.id] && (q.type !== 'multi' || answers[q.id].length > 0);
        html += '<button class="btn-next"' + (canForward ? '' : ' disabled') + ' onclick="goNext()" id="nextBtn">Next →</button>';
        html += '</div>';

        stage.innerHTML = html;
    }

    function selectOption(qId, value, el) {
        answers[qId] = value;
        document.querySelectorAll('.option-btn').forEach(b => b.classList.remove('selected'));
        el.classList.add('selected');
        const nextBtn = document.getElementById('nextBtn');
        if (nextBtn) nextBtn.disabled = false;
        // For non-individual selection, advance immediately
        if (qId === 'taxpayerType' && value !== 'individual' && value !== 'huf') {
            setTimeout(() => renderStep(), 200);
        }
    }

    function updateMulti(qId, value, checked) {
        if (!answers[qId]) answers[qId] = [];
        if (value === 'none' && checked) {
            answers[qId] = ['none'];
        } else if (value === 'none') {
            answers[qId] = answers[qId].filter(v => v !== 'none');
        } else {
            answers[qId] = answers[qId].filter(v => v !== 'none');
            if (checked) {
                if (!answers[qId].includes(value)) answers[qId].push(value);
            } else {
                answers[qId] = answers[qId].filter(v => v !== value);
            }
        }
        // Re-sync checkboxes for "none" exclusivity
        if (qId === 'specialFlags' || qId === 'incomeSources') {
            document.querySelectorAll('input[type="checkbox"]').forEach(cb => {
                const v = cb.dataset.value;
                if (v) cb.checked = answers[qId].includes(v);
            });
        }
        const nextBtn = document.getElementById('nextBtn');
        if (nextBtn) nextBtn.disabled = answers[qId].length === 0;
    }

    function goNext() {
        const next = getNextQuestion(currentStep);
        if (!next) {
            renderResult();
        } else {
            currentStep = next.index + 1;
            renderStep();
        }
    }

    function goBack() {
        const prev = getPrevQuestion(currentStep);
        if (prev) {
            currentStep = prev.index + 1;
            renderStep();
        }
    }

    // Decision logic
    function determineForm() {
        const a = answers;
        const sources = a.incomeSources || [];
        const flags = a.specialFlags || [];

        // Individual / HUF logic
        const isHuf = a.taxpayerType === 'huf';
        const isIndividual = a.taxpayerType === 'individual';
        const hasBusiness = sources.includes('business');
        const hasCapitalGains = sources.includes('capital_gains');
        const hasForeign = sources.includes('foreign');
        const isAbove50 = a.totalIncome === 'above50';
        const has3PlusHomes = a.houseProperties === 'three_plus';
        const isNriRnor = flags.includes('rnor_nri');
        const isDirector = flags.includes('director');
        const hasUnlisted = flags.includes('unlisted');
        const hasAgri = flags.includes('agri');
        const hasCryptoPersonal = flags.includes('crypto_personal');
        const hasForeignEsop = flags.includes('foreign_esop');
        const isPartner = flags.includes('partner');
        const businessType = a.businessType;
        const presumptiveSection = a.presumptiveSection;

        // Edge case flags for caution box
        const cautions = [];
        if (flags.includes('crypto_personal') || businessType === 'crypto_vda') {
            cautions.push('crypto');
        }
        if (businessType === 'fno_intraday') {
            cautions.push('fno');
        }
        if (hasForeignEsop || hasForeign) {
            cautions.push('foreign');
        }
        if (isNriRnor) {
            cautions.push('residency');
        }

        // === HUF + 44ADA = NOT ELIGIBLE per Sec 44ADA(1)
        if (isHuf && hasBusiness && businessType === 'presumptive_eligible' && presumptiveSection === 'sec_44ada') {
            return {
                form: 'ITR-3',
                name: 'Income from Business or Profession (Regular Books)',
                reasoning: '⚠ HUF is NOT eligible for Section 44ADA per Sec 44ADA(1) of the Income Tax Act — that section is restricted to Individuals and Partnership Firms (other than LLP). Since you indicated business income with a desire to opt for 44ADA presumptive, the only available routes for an HUF are: (1) opt for Sec 44AD (small business) presumptive — file ITR-4, or (2) opt for Sec 44AE (transport) presumptive — file ITR-4, or (3) maintain regular books and file ITR-3.',
                alternatives: 'If your professional receipts are under the threshold, you may still benefit from declaring presumptive 50% under 44AD (if the activity also qualifies as small business) — but you cannot use 44ADA. Consult a CA before opting in: Section 44AD has a 5-year lock-out for opt-out.',
                cautions: cautions
            };
        }

        // === ITR-3 cases (highest specificity)
        if (businessType === 'fno_intraday' || businessType === 'crypto_vda' || isPartner) {
            return {
                form: 'ITR-3',
                name: 'Income from Business or Profession (Regular Books)',
                reasoning: businessType === 'fno_intraday' 
                    ? 'F&O / intraday / speculative trading is non-speculative or speculative business income, which mandates ITR-3 regardless of profit or loss. ITR-2 does not allow this.'
                    : isPartner 
                    ? 'Profit share from a partnership firm requires ITR-3, even if you have only this and salary income.'
                    : 'Crypto/VDA treated as business income requires ITR-3 with Schedule VDA disclosure.',
                alternatives: 'If your only business income is presumptive (44AD/44ADA/44AE) and you have no other disqualifiers, ITR-4 may be simpler — but F&O/intraday/partnership share/crypto-as-business specifically rule out ITR-4.',
                cautions: cautions
            };
        }

        if (hasBusiness && businessType === 'regular_books') {
            return {
                form: 'ITR-3',
                name: 'Income from Business or Profession (Regular Books)',
                reasoning: 'You have business or professional income with regular books of accounts (not presumptive). ITR-3 supports full Profit & Loss statement, Balance Sheet, depreciation schedules, and tax audit if applicable.',
                alternatives: 'If your turnover qualifies and you want simpler filing, consider Section 44AD (business ≤ ₹3 cr) or 44ADA (profession ≤ ₹75L) presumptive — file ITR-4 instead. Switching to presumptive after declaring under regular books has lock-in implications under Section 44AD(4).',
                cautions: cautions
            };
        }

        if (hasBusiness && businessType === 'presumptive_eligible') {
            // Check ITR-4 disqualifiers
            if (isAbove50 || hasCapitalGains || hasForeign || has3PlusHomes || isDirector || hasUnlisted || isNriRnor) {
                return {
                    form: 'ITR-3',
                    name: 'Income from Business or Profession (Regular Books)',
                    reasoning: 'You have business income, but ITR-4 (presumptive) is disqualified due to: ' + 
                        [isAbove50 && 'income > ₹50L', hasCapitalGains && 'capital gains', hasForeign && 'foreign income', has3PlusHomes && 'more than 2 house properties', isDirector && 'directorship', hasUnlisted && 'unlisted shares', isNriRnor && 'NRI/RNOR status'].filter(Boolean).join(', ') + '. ITR-3 is required.',
                    alternatives: 'If only the income > ₹50L disqualifier applies, you can still claim presumptive 50%/8%/6% profit under Section 44AD/44ADA in ITR-3 — you just lose the simpler ITR-4 form.',
                    cautions: cautions
                };
            }
            return {
                form: 'ITR-4',
                name: 'Sugam — Presumptive Income',
                reasoning: 'You qualify for presumptive taxation under Section 44AD (small business), 44ADA (specified profession), or 44AE (transport) with no disqualifying conditions. ITR-4 is the simplest form for your situation.',
                alternatives: 'If you want to claim actual expenses higher than the deemed profit (50% for 44ADA, 8%/6% for 44AD), file ITR-3 with regular books instead. Once you opt out of 44AD, there is a 5-year lock-out before re-entry.',
                cautions: cautions
            };
        }

        // === No business income from here ===
        // ITR-1 eligibility (Resident Individual only — HUF cannot file ITR-1)
        const itr1Eligible = (
            isIndividual &&
            !isAbove50 &&
            !hasForeign &&
            !isNriRnor &&
            !isDirector &&
            !hasUnlisted &&
            !hasAgri &&
            !has3PlusHomes &&
            !hasCryptoPersonal &&
            !hasForeignEsop &&
            (!hasCapitalGains || a.capitalGainsType === 'small_listed_ltcg')
        );

        if (itr1Eligible) {
            return {
                form: 'ITR-1',
                name: 'Sahaj — Resident Individual',
                reasoning: 'You qualify for ITR-1: resident individual, total income ≤ ₹50L, with salary/pension/house property/other sources, and (if any) only LTCG ≤ ₹1.25L from listed equity. AY 2026-27 expanded ITR-1 to allow up to 2 house properties.',
                alternatives: 'You can choose to file ITR-2 voluntarily for fuller schedule disclosure (Schedule AL, FA, etc.), but ITR-1 is simpler and faster. ITR-1 cannot be used by HUF — HUFs must file ITR-2 even if everything else matches ITR-1 criteria.',
                cautions: cautions
            };
        }

        // === ITR-2 cases ===
        // HUF special case: no business income and no other disqualifiers — still ITR-2 (HUF can never use ITR-1)
        if (isHuf && !hasBusiness) {
            const hufNoDisqualifiers = !isAbove50 && !hasForeign && !isNriRnor && !isDirector && !hasUnlisted && !hasAgri && !has3PlusHomes && !hasCryptoPersonal && !hasForeignEsop && (!hasCapitalGains || a.capitalGainsType === 'small_listed_ltcg');
            if (hufNoDisqualifiers) {
                return {
                    form: 'ITR-2',
                    name: 'Individuals & HUF — Non-Business',
                    reasoning: 'HUFs cannot file ITR-1 — that form is restricted to Resident Individuals only. Even with no other disqualifiers, your HUF must file ITR-2.',
                    alternatives: 'No simpler form available for HUF without business income. ITR-2 supports salary, house property, capital gains, and other sources at the HUF level.',
                    cautions: cautions
                };
            }
        }

        // Build the disqualifier list to show what kicked them out of ITR-1
        const itr1Disqualifiers = [];
        if (isHuf) itr1Disqualifiers.push('HUF status (ITR-1 is for Resident Individuals only)');
        if (isAbove50) itr1Disqualifiers.push('income > ₹50L (Schedule AL applies)');
        if (hasForeign) itr1Disqualifiers.push('foreign income/assets (Schedule FA mandatory)');
        if (isNriRnor) itr1Disqualifiers.push('NRI or RNOR status');
        if (isDirector) itr1Disqualifiers.push('directorship in any company');
        if (hasUnlisted) itr1Disqualifiers.push('held unlisted equity shares');
        if (hasAgri) itr1Disqualifiers.push('agricultural income > ₹5,000');
        if (has3PlusHomes) itr1Disqualifiers.push('3+ house properties');
        if (hasCryptoPersonal) itr1Disqualifiers.push('crypto/VDA holdings (Schedule VDA mandatory)');
        if (hasForeignEsop) itr1Disqualifiers.push('foreign company ESOP/RSU (Schedule FA mandatory)');
        if (hasCapitalGains && a.capitalGainsType !== 'small_listed_ltcg') itr1Disqualifiers.push('capital gains beyond Section 112A ₹1.25L exemption');

        return {
            form: 'ITR-2',
            name: 'Individuals & HUF — Non-Business',
            reasoning: 'ITR-1 disqualified due to: ' + itr1Disqualifiers.slice(0, 3).join(', ') + (itr1Disqualifiers.length > 3 ? ', and others' : '') + '. You have no business or professional income, so ITR-2 is the right form. Includes Schedules CG, FA, AL, VDA as applicable.',
            alternatives: 'No simpler form available given the above. If you have small business income (e.g., consulting on the side), the form changes to ITR-3 or ITR-4 depending on whether you opt for presumptive taxation.',
            cautions: cautions
        };
    }

    function renderNonIndividual() {
        const stage = document.getElementById('wizardStage');
        const t = answers.taxpayerType;
        let panel = '';

        if (t === 'firm_llp') {
            panel = '<div class="non-individual-panel"><h3>Partnership Firm / LLP / AOP / BOI → ITR-5</h3>';
            panel += '<div class="nip-row"><div class="nip-form">ITR-5</div><div class="nip-desc">Partnership firms (registered/unregistered), LLPs, AOPs, BOIs, local authorities, cooperative societies (some categories). Tax audit applies if turnover &gt; ₹1 crore for business or ₹50L for profession.</div></div>';
            panel += '<div class="nip-cta"><div class="nip-cta-text">⚠ ITR-5 involves complex schedules — partner remuneration calculations, audit annexures, transfer pricing if applicable. Strongly recommend CA assistance.</div>';
            panel += '<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20filing%20ITR-5%20for%20my%20firm%2FLLP%20for%20FY%202025-26." target="_blank" rel="noopener" class="nip-cta-btn">Talk to a CA →</a></div></div>';
        } else if (t === 'company') {
            panel = '<div class="non-individual-panel"><h3>Company → ITR-6</h3>';
            panel += '<div class="nip-row"><div class="nip-form">ITR-6</div><div class="nip-desc">All companies (private, public, OPC) NOT claiming exemption under Section 11. Mandatory tax audit, electronic filing with digital signature. ROC filings (AOC-4, MGT-7) are separate from ITR-6.</div></div>';
            panel += '<div class="nip-row"><div class="nip-form">ITR-7</div><div class="nip-desc">If your company claims exemption under Section 11 (e.g., Section 8 company / non-profit), use ITR-7 instead.</div></div>';
            panel += '<div class="nip-cta"><div class="nip-cta-text">⚠ ITR-6 requires audited financials, MAT calculation, transfer pricing (if applicable), Schedule FA for foreign assets, and digital signature. CA assistance is essentially mandatory.</div>';
            panel += '<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20filing%20ITR-6%20for%20my%20company%20for%20FY%202025-26." target="_blank" rel="noopener" class="nip-cta-btn">Talk to a CA →</a></div></div>';
        } else if (t === 'trust_other') {
            panel = '<div class="non-individual-panel"><h3>Trust / Political Party / Research Institution → ITR-7</h3>';
            panel += '<div class="nip-row"><div class="nip-form">ITR-7</div><div class="nip-desc">Charitable trusts under Section 11/12, political parties under Section 13A, scientific research associations, news agencies, and other entities required to file under Section 139(4A)/(4B)/(4C)/(4D).</div></div>';
            panel += '<div class="nip-cta"><div class="nip-cta-text">⚠ ITR-7 requires Section 12A/12AB registration, Form 10B audit report, 85% application test, accumulation reporting. Errors trigger loss of exemption status. CA expertise essential.</div>';
            panel += '<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20filing%20ITR-7%20for%20my%20trust%2Forganisation%20for%20FY%202025-26." target="_blank" rel="noopener" class="nip-cta-btn">Talk to a CA →</a></div></div>';
        }

        panel += '<button class="btn-restart" onclick="restartWizard()">↺ Restart Wizard</button>';
        stage.innerHTML = panel;

        // Hide progress bar for non-individual flow
        document.getElementById('progressBar').style.display = 'none';
    }

    function renderResult() {
        const result = determineForm();
        const stage = document.getElementById('wizardStage');

        let html = '<div class="result-box">';
        html += '<div class="result-label">Recommended Form</div>';
        html += '<div class="result-form">' + result.form + '</div>';
        html += '<div class="result-name">' + result.name + '</div>';
        html += '<div class="result-reasoning"><div class="rs-head">Why</div><p>' + result.reasoning + '</p></div>';
        html += '</div>';

        html += '<div class="result-alternatives"><div class="ra-head">Alternative / Note</div><p>' + result.alternatives + '</p></div>';

        // Caution boxes for edge cases
        if (result.cautions.includes('crypto')) {
            html += '<div class="caution-box"><div class="cb-head">⚠ Crypto / VDA Edge Case</div><p>Crypto income is taxed under Section 115BBH at flat 30% with no loss set-off. Schedule VDA disclosure mandatory. Classification (investment vs business), FEMA compliance for foreign exchanges, and gifting rules add complexity. <strong>CA consultation strongly recommended.</strong></p></div>';
        }
        if (result.cautions.includes('fno')) {
            html += '<div class="caution-box"><div class="cb-head">⚠ F&O / Intraday Edge Case</div><p>F&O and intraday are business income, not capital gains. Tax audit under Section 44AB may apply if turnover (calculated per ICAI guidelines) crosses thresholds. Loss treatment and carry-forward rules differ from STCG/LTCG. <strong>CA consultation strongly recommended.</strong></p></div>';
        }
        if (result.cautions.includes('foreign')) {
            html += '<div class="caution-box"><div class="cb-head">⚠ Foreign Asset / ESOP Edge Case</div><p>Foreign assets (ESOPs, RSUs, bank accounts, immovable property) require Schedule FA disclosure. Non-disclosure triggers Black Money Act penalties up to ₹10L per year per asset. Form 67 needed for foreign tax credit under DTAA. <strong>CA consultation strongly recommended.</strong></p></div>';
        }
        if (result.cautions.includes('residency')) {
            html += '<div class="caution-box"><div class="cb-head">⚠ NRI / RNOR Status Edge Case</div><p>Residential status determination under Section 6 has multiple thresholds. RNOR (Resident but Not Ordinarily Resident) gets unique global income exclusions for first 2-3 years. DTAA benefits, FATCA reporting, and Schedule TR (tax relief) add complexity. <strong>CA consultation strongly recommended.</strong></p></div>';
        }

        html += '<div class="next-action">';
        html += '<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20ITR%20Form%20Selector.%20The%20wizard%20suggested%20' + encodeURIComponent(result.form) + '%20for%20FY%202025-26.%20I%20need%20help%20filing." target="_blank" rel="noopener" class="next-btn">File ' + result.form + ' with Patron CAs →</a>';
        html += '<a href="/income-tax-return" class="next-btn outline">Learn About Our ITR Service →</a>';
        html += '</div>';

        html += '<div class="post-result-cta" id="postResultCTA">\n    <div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div>\n    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — ITR Form Selector validation, professional documentation, no obligation.</div>\n    <div class="brand-cta-bar-actions">\n        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">\n            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>\n            +91 945 945 6700\n        </a>\n        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20ITR%20Form%20Selector.%20Please%20review%20my%20recommended%20form%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">\n            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>\n            WhatsApp\n        </a>\n        <a href="mailto:sales@patronaccounting.com?subject=ITR%20Form%20Selector%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20ITR%20Form%20Selector%20and%20would%20like%20a%20Chartered%20Accountant%20to%20review%20my%20output%20before%20I%20act%20on%20it.%0A%0APlease%20advise%20on%20next%20steps%20for%20picking%20the%20right%20ITR%20form.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">\n            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>\n            Email\n        </a>\n    </div>\n</div>';

        html += '<button class="btn-restart" onclick="restartWizard()">↺ Restart Wizard</button>';

        stage.innerHTML = html;

        // Mark all progress steps complete
        document.querySelectorAll('.progress-step').forEach(p => {
            p.classList.remove('active');
            p.classList.add('complete');
        });
        // Scroll to result
        setTimeout(() => stage.scrollIntoView({ behavior: 'smooth', block: 'start' }), 100);
    }

    function restartWizard() {
        for (const k in answers) delete answers[k];
        currentStep = 1;
        document.getElementById('progressBar').style.display = 'flex';
        renderStep();
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

    // Init wizard
    renderProgressBar();
    renderStep();

    // Scrollspy
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

</body>
</html>
@endsection