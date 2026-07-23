@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>EOR India for AI Companies: Research + GPU</title>
    <meta name="description" content="AI/ML hiring in India - research engineers, GPU cluster setup, foundation model IP assignment. Patron Accounting LLP CA-led service for AI companies.">
    <link rel="canonical" href="/eor-india-for-ai-companies">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="EOR India for AI Companies 2026: Research + GPU | Patron">
    <meta property="og:description" content="AI/ML hiring in India - research engineers, GPU cluster setup, foundation model IP assignment. Patron Accounting LLP CA-led service for AI companies.">
    <meta property="og:url" content="/eor-india-for-ai-companies">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/eor-india-for-ai-companies-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="EOR India for AI Companies 2026: Research + GPU | Patron">
    <meta name="twitter:description" content="AI/ML hiring in India - research engineers, GPU cluster setup, foundation model IP assignment. Patron Accounting LLP CA-led service for AI companies.">
    <meta name="twitter:image" content="/images/eor-india-for-ai-companies-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/eor-india-for-ai-companies#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
            { "@type": "ListItem", "position": 2, "name": "Services", "item": "/services" },
            { "@type": "ListItem", "position": 3, "name": "EOR India for AI Companies", "item": "/eor-india-for-ai-companies" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/eor-india-for-ai-companies#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the best EOR for AI/ML hiring in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "It depends on AI scope and seniority. For pilot or early hiring (1-5 ML engineers) with no foundation model work or ESOP advisory needed, India-only EOR specialists deliver fastest entry. For Series A-D AI-first companies with research engineers, foundation model work, or frontier-lab valuation ESOPs, Patron Accounting LLP's CA-led path delivers AI-specific compliance - foundation model IP framework, DPIIT Section 80-IAC eligibility, ESOP exercise-cliff structuring, GPU customs, DPDP Rule 13 - that EOR-only models cannot."
              }
            },
            {
              "@type": "Question",
              "name": "How much do research engineers cost in Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Bangalore research engineer CTC ranges as of May 2026: junior (0-2 yr post-PhD) Rs 22-40 LPA, mid (3-7 yr) Rs 50-100 LPA, senior (7-12 yr) Rs 100-200 LPA, staff/principal at frontier labs Rs 200-400+ LPA. Statutory loading adds 15-20 percent. For a Rs 75 LPA mid-research-engineer, fully-loaded annual cost is approximately USD 100,000-110,000 vs USD 300,000-500,000 at a US frontier lab."
              }
            },
            {
              "@type": "Question",
              "name": "Can my Indian engineers work on foundation model training?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, with appropriate IP framework and DPDP scope. Foundation model work creates novel IP territory under Indian law. Copyright Act 1957 Section 17(c) default plus Section 19 written assignment cover code, fine-tune derivatives, research artefacts. Trade secret NDAs cover model architectures, training procedures, hyperparameters. Patents Act 1970 Section 3(k) limits patent route. Indian engineers can train, fine-tune, evaluate, and deploy foundation models with proper assignment chain. DPDP Rule 13 transparency applies to training data containing personal information."
              }
            },
            {
              "@type": "Question",
              "name": "How is IP assigned for AI model weights in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Through a multi-instrument framework. Code is protected under Copyright Act 1957 Section 14 as computer program; ownership transfers to employer by default under Section 17(c); written assignment under Section 19 covers transfer to foreign parent. Model weights are typically treated as derivative works of code or as trade secrets. Patents Act 1970 Section 3(k) excludes algorithms; hardware-coupled inventions may still qualify. Patron combines all four protection routes."
              }
            },
            {
              "@type": "Question",
              "name": "GPU cluster setup in India - what are the import duties?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "On-prem GPU procurement attracts approximately 30 percent loaded customs cost. Classification under HSN 8473 (parts of automatic data processing machines) or HSN 8542 (electronic integrated circuits) determines basic customs duty (typically 5-10 percent). IGST under Section 16 IGST Act 2017 adds 18 percent on landed value. Social welfare surcharge adds 10 percent of basic customs duty. SEZ units can import duty-free for export work. The IndiaAI Mission provides subsidised cloud GPU access for DPIIT-recognised eligible Indian AI startups."
              }
            },
            {
              "@type": "Question",
              "name": "Does DPDP Act 2023 affect AI training data in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, materially. DPDP Act 2023 with DPDP Rules 2025 (notified 13 November 2025) governs personal data processing including AI training and inference. Rule 13 covers transparency requirements for AI/ML processing - automated decision-making notices, AI-driven output transparency, profiling disclosures. Rule 8 covers reasonable security safeguards. Rule 15 governs cross-border transfers via negative-list approach. Penalties up to Rs 250 crore per serious violation. Indian subsidiary typically operates as processor under foreign parent's Data Fiduciary role."
              }
            },
            {
              "@type": "Question",
              "name": "When should an AI startup set up an Indian subsidiary?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Several signals push toward Pvt Ltd subsidiary setup. Headcount above 10-15 - AI engineering scales fast and cost crossover from EOR makes entity overhead worthwhile. DPIIT Section 80-IAC eligibility - subsidiary required for IMB Certificate filing and tax holiday claim. Foreign parent ESOPs at frontier-lab valuations need cleaner administration. Series B-D fundraising approach requires CA-signed certifications. SOC 2 / ISO 42001 audit requires entity counterparty. GPU procurement on-prem benefits from SEZ structuring."
              }
            },
            {
              "@type": "Question",
              "name": "Indian AI talent vs hiring in San Francisco - what is the cost arbitrage?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Indian AI engineers cost 14-25 percent of US frontier-lab fully-loaded equivalents. A mid-level applied ML engineer in Bangalore costs approximately USD 65,000-78,000 fully loaded; the same role at a US frontier lab costs USD 250,000-400,000. A senior research engineer in Bangalore costs USD 215,000-230,000 fully loaded; the same role at a US frontier lab tier costs USD 700,000-1,200,000+. At 25 Indian AI engineers, total annual savings vs US-equivalent hiring is approximately USD 4-6 million."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/eor-india-for-ai-companies#service",
          "name": "EOR India for AI Companies",
          "description": "Patron Accounting LLP provides CA-led India hiring and compliance service for foreign AI-first companies hiring research engineers, applied ML engineers, and AI infrastructure talent. Coverage includes foundation model IP assignment under Copyright Act 1957 Sections 17 and 19, DPIIT Section 80-IAC ESOP deferral, GPU customs and IndiaAI Mission compute access, DPDP Rule 13 AI/ML processing compliance, and cost-plus transfer pricing for parent-funded AI research.",
          "serviceType": "Employer of Record and Compliance Service for AI Companies",
          "provider": { "@id": "/#organization" },
          "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
          "about": [
            { "@type": "Thing", "name": "Artificial Intelligence", "sameAs": "https://en.wikipedia.org/wiki/Artificial_intelligence" },
            { "@type": "Thing", "name": "Machine Learning", "sameAs": "https://en.wikipedia.org/wiki/Machine_learning" },
            { "@type": "Thing", "name": "Foundation Model", "sameAs": "https://en.wikipedia.org/wiki/Foundation_model" },
            { "@type": "Thing", "name": "Employer of Record", "sameAs": "https://en.wikipedia.org/wiki/Employer_of_record" }
          ],
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "/eor-india-for-ai-companies",
            "datePublished": "2026-05-07T08:00:00+05:30"
           
          }
        }
      ]
    }
    </script>
@endsection

@section('content')
<style>
        /* ============================================
           CSS VARIABLES
           ============================================ */
        :root {
            --orange: #E8712C;
            --orange-dark: #D4621F;
            --orange-light: #FEF4EE;
            --orange-lighter: #FFF9F5;
            --blue: #1B365D;
            --blue-light: #2A4A7A;
            --blue-lighter: #F4F7FB;
            --white: #FFFFFF;
            --cream: #FDFCFB;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --text-primary: #1F2937;
            --text-secondary: #4B5563;
            --text-muted: #6B7280;
            --green: #10B981;
            --gold: #F59E0B;
            --shadow-sm: 0 1px 2px rgba(0,0,0,0.04);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.06);
            --shadow-lg: 0 12px 32px rgba(0,0,0,0.08);
            --shadow-xl: 0 20px 48px rgba(0,0,0,0.1);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; -webkit-font-smoothing: antialiased; }

        body {
            font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--white);
        }

        h2 {
            font-size: clamp(26px, 3vw, 32px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 24px;
            line-height: 1.25;
        }
        h3 { color: var(--blue); font-size: 1.5rem; }
        p { color: var(--text-secondary); }
        section a { color: var(--orange); text-decoration: none; font-weight: 500; transition: color 0.2s; }
        section a:hover { color: var(--orange-dark); }

        section ul { list-style: none; padding-left: 0; margin: 0; }
        section ul li:not(.nav-item) {
            display: flex; align-items: flex-start; gap: 12px;
            color: var(--text-secondary); line-height: 1.6; margin-bottom: 10px;
        }
        section ul li:not(.nav-item)::before {
            content: ""; width: 22px; height: 22px;
            background: var(--orange-light); border-radius: 50%; flex-shrink: 0; margin-top: 1px;
            display: flex; align-items: center; justify-content: center;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' stroke='%23ff6600' stroke-width='3' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5 13l4 4L19 7'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: center; background-size: 12px;
        }
        main section h3 { color: #14365F !important; }
        main section table { width: 100% !important; font-family: 'Barlow', sans-serif; border-collapse: collapse; border-spacing: 0; }
        main section table thead tr th {
            border: none !important; color: #fff !important; font-size: 14px; font-weight: 700;
            background-color: #14365F !important; padding: 14px 18px; text-align: left;
        }
        main section table thead tr th:first-child { border-radius: 10px 0 0 0; }
        main section table thead tr th:last-child  { border-radius: 0 10px 0 0; }
        main section table tbody tr td {
            padding: 12px 18px; font-size: 14px;
            color: var(--text-secondary);
            background: var(--white);
            border: none !important;
            border-bottom: 1px solid var(--gray-200) !important;
            vertical-align: top;
        }
        main section table tbody tr:nth-child(even) td { background: #F9FAFB; }
        main section table tbody tr:hover td { background: var(--orange-lighter); transition: background 0.15s; }
        main section table tbody tr:last-child td { border-bottom: none !important; }
        main section table tbody tr td:first-child {
            font-weight: 700; color: var(--text-primary);
            min-width: 160px;
        }
        /* Amount column - right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
        /* Section 8 / primary entity highlight column in comparison tables */
        .table-comparison td:nth-child(2),
        .table-comparison th:nth-child(2) {
            background: rgba(20,54,95,0.04);
            border-left: 2px solid var(--blue) !important;
        }
        .table-comparison td:nth-child(2) { font-weight: 600; color: var(--blue); }
        /* Badge pills for service status cells */
        td .badge-included { display:inline-block; padding:2px 10px; background:#E8F5E9; color:#1B7A3A; border-radius:20px; font-size:12px; font-weight:700; }
        td .badge-addon    { display:inline-block; padding:2px 10px; background:#FFF3E0; color:#C05E10; border-radius:20px; font-size:12px; font-weight:700; }
        .table-responsive-wrapper { width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; margin: 20px 0; border-radius: var(--radius-md); border: 1px solid var(--gray-200); }
        .table-responsive-wrapper table { margin: 0; border: none; }
        .table-responsive-wrapper table thead tr th:first-child { border-top-left-radius: 0; }
        .table-responsive-wrapper table thead tr th:last-child { border-top-right-radius: 0; }
        .table-responsive-wrapper table td, .table-responsive-wrapper table th { border-left: none !important; border-right: none !important; }
        .table-responsive-wrapper table td { border-top: none !important; border-bottom: 1px solid var(--gray-200) !important; }
        .table-responsive-wrapper table tbody tr:last-child td { border-bottom: none !important; }

        /* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) - Plan 3.1
           ============================================ */
        .expert-attribution-box {
            background: #F9F9F9;
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-md);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
        .expert-attribution-box .eab-check { color: var(--green); font-size: 16px; flex-shrink: 0; }
        .expert-attribution-box .eab-title { font-size: 13px; font-weight: 700; color: var(--text-primary); }
        .expert-attribution-box .eab-meta {
            font-size: 12px; color: var(--text-muted);
            display: flex; align-items: center; gap: 8px; flex-wrap: wrap;
        }
        .expert-attribution-box .eab-meta .eab-sep { color: var(--gray-300); }
        .expert-attribution-box .eab-link {
            font-size: 12px; color: var(--orange); text-decoration: none;
            font-weight: 600; transition: color 0.2s;
        }
        .expert-attribution-box .eab-link:hover { color: var(--orange-dark); text-decoration: underline; }

        /* ============================================
           HERO SECTION
           ============================================ */
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--orange-light); padding: 8px 16px;
            border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--orange); margin-bottom: 20px;
        }
        .hero-badge svg { width: 14px; height: 14px; }

        .private-registration-heading {
            font-family: 'Barlow', sans-serif !important;
            font-weight: 700 !important;
            font-size: 48px !important;
            line-height: 100% !important;
            color: #14365F !important;
            margin-bottom: 1.5rem !important;
        }
        @media (max-width: 768px) { .private-registration-heading { font-size: 32px !important; line-height: 110% !important; } }
        @media (max-width: 480px) { .private-registration-heading { font-size: 28px !important; } }

        .check-icon {
            width: 20px; height: 20px; display: flex; align-items: center; justify-content: center;
            background: rgba(16, 185, 129, 0.12); border-radius: 50%; flex-shrink: 0;
        }
        .check-icon svg { width: 12px; height: 12px; color: var(--green); }

        .benefit-paragraph { font-weight: 400; margin-top: 5px; font-size: 1rem; line-height: 100%; }
        .benefit-paragraph span { font-weight: 700; }

        /* Hero CTA Buttons */
        .hero-cta { display: flex; gap: 14px; margin-bottom: 36px; flex-wrap: wrap; }

        .btn-video {
            display: inline-flex; align-items: center; gap: 10px;
            padding: 12px 20px; background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600;
            color: var(--text-primary); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-video:hover { border-color: var(--orange); background: var(--orange-lighter); color: var(--orange); }
        .btn-video .play-circle {
            width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;
            background: var(--orange); border-radius: 50%; transition: transform 0.25s ease;
        }
        .btn-video:hover .play-circle { transform: scale(1.08); }
        .btn-video .play-circle svg { width: 10px; height: 10px; color: var(--white); margin-left: 1px; }

        .btn-sample {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 20px; background: transparent;
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600;
            color: var(--text-secondary); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-sample:hover { border-color: var(--blue); background: var(--blue-lighter); color: var(--blue); }
        .btn-sample svg { width: 16px; height: 16px; }

        /* Trust Section */
        .trust-section { display: flex; flex-direction: column; gap: 20px; }
        .trust-row { display: flex; flex-wrap: wrap; gap: 28px; }
        .trust-item { display: flex; align-items: center; gap: 10px; }
        .trust-icon {
            width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;
            background: var(--gray-50); border-radius: var(--radius-sm);
        }
        .trust-icon svg { width: 18px; height: 18px; color: var(--blue); }
        .trust-text { font-size: 12px; color: var(--text-muted); line-height: 1.3; }
        .trust-text strong { display: block; font-size: 14px; font-weight: 700; color: var(--text-primary); }

        .google-rating {
            display: inline-flex; align-items: center; gap: 12px;
            background: var(--white); border: 1px solid var(--gray-200);
            padding: 10px 16px; border-radius: var(--radius-md);
        }
        .rating-content { display: flex; flex-direction: column; gap: 2px; }
        .rating-stars { display: flex; align-items: center; gap: 2px; }
        .rating-stars svg { width: 14px; height: 14px; color: var(--gold); fill: var(--gold); }
        .rating-score { font-size: 13px; font-weight: 700; color: var(--text-primary); margin-left: 4px; }
        .rating-count { font-size: 11px; color: var(--text-muted); }

        /* ============================================
           FORM CARD
           ============================================ */
        .form-card {
            background: var(--white); border-radius: var(--radius-xl);
            padding: 32px; box-shadow: var(--shadow-lg); border: 1px solid var(--gray-100); position: relative;
            max-width: 420px; width: 100%;
            animation: fadeInForm 0.5s ease 0.2s forwards; opacity: 0;
            margin: 0 auto;
        }
        @keyframes fadeInForm { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        .form-card::before {
            content: ''; position: absolute; top: 0; left: 28px; right: 28px; height: 3px;
            background: linear-gradient(90deg, var(--orange), var(--blue)); border-radius: 0 0 3px 3px;
        }
        .form-header { margin-bottom: 24px; }
        .form-title { font-size: 22px; font-weight: 800; color: var(--blue); margin-bottom: 4px; }
        .form-subtitle { font-size: 13px; color: var(--text-muted); }
        .form-group { margin-bottom: 16px; }
        .form-label {
            display: block; font-family: 'Barlow', sans-serif; font-size: 11px; font-weight: 700;
            color: var(--blue); text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 6px;
        }
        .form-input {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); transition: all 0.2s ease;
        }
        .form-input::placeholder { color: var(--gray-400); }
        .form-input:hover { background: var(--gray-100); }
        .form-input:focus { outline: none; background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        /* Select */
        .form-select {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); cursor: pointer; appearance: none; -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 14px center; transition: all 0.2s ease;
        }
        .form-select:hover { background-color: var(--gray-100); }
        .form-select:focus { outline: none; background-color: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        /* Phone Group + Country Dropdown */
        .phone-group {
            min-height: 50px;
            display: flex; align-items: center; background: var(--gray-50); border-radius: var(--radius-md);
            border: 1.5px solid transparent; overflow: visible; transition: all 0.2s ease; position: relative;
        }
        .phone-group:hover { background: var(--gray-100); }
        .phone-group:focus-within { background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        .country-code-dropdown {
            display: flex; align-items: center; justify-content: flex-start; gap: 6px;
            padding: 13px 10px 13px 14px; cursor: pointer;
            border-right: 1px solid var(--gray-200); background: transparent; position: relative;
            min-width: 80px; user-select: none; flex-shrink: 0; transition: background 0.15s;
            box-sizing: border-box;
        }
        .country-code-dropdown:hover { background: rgba(0,0,0,0.03); }
        .selected-flag {
            font-size: 20px; line-height: 1; display:flex; align-items:center;
            width: 26px; overflow: hidden; flex-shrink: 0;
            /* On browsers where flag emoji renders as "IN" text, clip it */
            font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji",sans-serif;
        }
        .selected-code { font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600; color: var(--text-secondary); white-space: nowrap; }
        .dropdown-arrow { transition: transform 0.25s ease; color: var(--gray-400); flex-shrink: 0; width: 12px; height: 12px; }
        .country-code-dropdown.open .dropdown-arrow { transform: rotate(180deg); }

        /* Country Dropdown List */
        .country-dropdown-list {
            display: none; position: absolute; top: calc(100% + 6px); left: 0; width: 300px; max-height: 320px;
            background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            box-shadow: var(--shadow-xl); z-index: 9999; overflow: hidden; flex-direction: column;
        }
        .country-code-dropdown.open .country-dropdown-list { display: flex; }
        .country-search-input {
            width: 100%; padding: 11px 14px; border: none; border-bottom: 1px solid var(--gray-200);
            font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--text-primary);
            background: var(--gray-50); outline: none;
        }
        .country-search-input::placeholder { color: var(--gray-400); }
        .country-options { overflow-y: auto; max-height: 260px; scrollbar-width: thin; }
        .country-options::-webkit-scrollbar { width: 5px; }
        .country-options::-webkit-scrollbar-track { background: transparent; }
        .country-options::-webkit-scrollbar-thumb { background: var(--gray-300); border-radius: 10px; }
        .country-option {
            display: flex; align-items: center; gap: 10px; padding: 10px 14px; cursor: pointer;
            transition: background 0.12s ease; font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--text-primary);
        }
        .country-option:hover, .country-option.active { background: var(--orange-lighter); }
        .country-option .flag-emoji { font-size: 18px; line-height: 1; width: 24px; text-align: center; }
        .country-option .country-name { flex: 1; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: 500; }
        .country-option .dial-code { color: var(--text-muted); font-weight: 600; font-size: 12px; flex-shrink: 0; }

        /* Phone Input Override */
        .phone-input { border: none !important; background: transparent !important; box-shadow: none !important; flex: 1; min-width: 0; padding-left: 12px !important; align-self: center; }
        .phone-input:focus { box-shadow: none !important; border: none !important; }

        /* Submit Button */
        .btn-submit {
            width: 100%; padding: 15px 24px; font-family: 'Barlow', sans-serif;
            font-size: 17px; font-weight: 700; color: var(--white); background: var(--orange);
            border: none; border-radius: 50px; cursor: pointer; transition: all 0.25s ease;
            display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 6px;
        }
        .btn-submit:hover { background: var(--orange-dark); transform: translateY(-2px); box-shadow: 0 10px 28px rgba(232,113,44,0.35); }
        .btn-submit:active { transform: translateY(0); }
        .btn-submit:disabled { opacity: 0.7; cursor: not-allowed; transform: none; box-shadow: none; }

        /* Form Footer */
        .form-response-note { text-align: center; font-size: 12px; color: var(--text-muted); margin-top: 14px; margin-bottom: 0; }
        .form-footer {
            display: flex; justify-content: center; gap: 16px; margin-top: 16px;
            padding-top: 16px; border-top: 1px solid var(--gray-100);
        }
        .form-footer-item { display: flex; align-items: center; gap: 5px; font-size: 11px; color: var(--text-muted); }
        .form-footer-item svg { width: 14px; height: 14px; color: var(--green); }

        /* Error States */
        .form-input.input-error, .form-select.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .phone-group.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .field-error-msg { font-size: 12px; color: #FD6B6D; margin-top: 4px; font-weight: 500; }

        /* Success State */
        .form-success { text-align: center; padding: 40px 20px; }
        .form-success-icon { width: 64px; height: 64px; background: rgba(16,185,129,0.12); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; }
        .form-success h3 { font-size: 22px; font-weight: 700; color: var(--blue); margin-bottom: 8px; }
        .form-success p { font-size: 14px; color: var(--text-muted); line-height: 1.6; }

        @media (max-width: 480px) {
            .form-card { padding: 24px 16px; border-radius: var(--radius-lg); max-width: 100%; }
            .form-title { font-size: 20px; }
            .country-dropdown-list { width: 260px; }
            .form-footer { flex-wrap: wrap; gap: 10px; }
            .btn-submit { font-size: 16px; padding: 14px 20px; }
        }

        /* ============================================
           STATS BAR
           ============================================ */
        .stats-bar { background: var(--white); border-top: 1px solid var(--gray-100); border-bottom: 1px solid var(--gray-100); padding: 24px 32px; }
        .stats-container {
            max-width: 1320px; margin: 0 auto;
            display: flex; justify-content: center; align-items: center; gap: 48px; flex-wrap: wrap;
        }
        .stat-item { display: flex; align-items: center; gap: 12px; }
        .stat-icon {
            width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;
            background: var(--orange-light); border-radius: var(--radius-md);
        }
        .stat-icon svg { width: 20px; height: 20px; color: var(--orange); }
        .stat-content { display: flex; flex-direction: column; }
        .stat-value { font-size: 20px; font-weight: 800; color: var(--blue); line-height: 1.2; }
        .stat-label { font-size: 12px; color: var(--text-muted); }
        .certifications {
            display: flex; gap: 16px; padding-left: 32px; border-left: 1px solid var(--gray-200);
        }
        .cert-item { display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--text-muted); font-weight: 500; }
        .cert-item svg { width: 18px; height: 18px; }

        /* ============================================
           TOC NAVIGATION - Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 0; z-index: 50;
        }
        .toc-container {
            max-width: 1320px; margin: 0 auto; padding: 0 32px;
            display: flex; align-items: center;
        }
        .toc-wrapper {
            display: flex; align-items: center; gap: 10px;
            overflow-x: auto; scrollbar-width: none; scroll-behavior: smooth; padding-bottom: 4px;
        }
        .toc-wrapper::-webkit-scrollbar { display: none; }
        .toc-btn {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 10px 18px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 600;
            color: var(--text-secondary); background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: 50px;
            cursor: pointer; transition: all 0.25s ease; white-space: nowrap; text-decoration: none;
        }
        .toc-btn:hover { border-color: var(--orange); color: var(--orange); background: var(--orange-lighter); }
        .toc-btn.active { background: var(--orange); border-color: var(--orange); color: var(--white); }
        .toc-btn.active:hover { background: var(--orange-dark); border-color: var(--orange-dark); }
        .toc-arrow {
            border: none; cursor: pointer; font-size: 22px;
            width: 45px; height: 45px; border-radius: 50%; background: transparent;
        }
        .toc-arrow.left { margin-right: 8px; }
        .toc-arrow.right { margin-left: 8px; }

        /* ============================================
           CONTENT SECTIONS
           ============================================ */
        .content-section { padding: 64px 32px; background: var(--white); }
        .content-section:nth-child(even) { background: var(--gray-50); }
        .content-container { max-width: 1320px; margin: 0 auto; }
        .section-container { max-width: 1320px; margin: 0 auto; }
        .text-content { max-width: 100%; }

        .section-title {
            font-size: clamp(26px, 3vw, 32px); font-weight: 800;
            color: var(--blue); margin-bottom: 24px; line-height: 1.25;
        }
        .content-text { font-size: 15px; line-height: 1.8; color: var(--text-secondary); text-align: left; }
        .content-text p { margin-bottom: 16px; text-align: left; }
        .content-text strong { color: var(--text-primary); font-weight: 600; }
        .content-text a { color: var(--orange); text-decoration: none; font-weight: 500; }

        .two-column { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 48px; align-items: start; }
        .column-content { max-width: 100%; }
        .column-image { display: flex; justify-content: center; align-items: flex-start; position: sticky; top: 24px; }

        .highlight-box {
            background: var(--orange-lighter); border-left: 4px solid var(--orange);
            padding: 16px 20px; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: 20px 0;
        }
        .highlight-box p { margin: 0 0 8px 0; font-size: 14px; color: var(--text-secondary); text-align: left; }
        .highlight-box p:last-child { margin-bottom: 0; }

        .illustration-placeholder {
            width: 100%; max-width: 420px; aspect-ratio: 4/3;
            background: linear-gradient(135deg, var(--blue-lighter) 0%, var(--orange-lighter) 100%);
            border-radius: var(--radius-xl); display: flex; flex-direction: column;
            align-items: center; justify-content: center; padding: 24px; position: relative; overflow: hidden;
        }
        .illustration-icon {
            width: 100%; max-width: 280px; aspect-ratio: 1;
            display: flex; align-items: center; justify-content: center; margin-bottom: 16px;
        }
        .illustration-icon svg { width: 100%; height: 100%; color: var(--blue); }
        .illustration-badge {
            background: var(--white); padding: 12px 20px; border-radius: var(--radius-md);
            box-shadow: var(--shadow-md); text-align: center;
        }
        .illustration-badge span { display: block; font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; }
        .illustration-badge strong { font-size: 14px; font-weight: 700; color: var(--blue); }

        /* Section Eyebrow */
        .section-eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 13px; font-weight: 600; color: var(--orange);
            text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;
        }
        .section-eyebrow svg { width: 18px; height: 18px; }
        .section-subtitle { font-size: 15px; color: var(--text-muted); max-width: 600px; }

        /* Steps Section */
        .steps-section { padding: 72px 32px; background: var(--gray-50); }
        .steps-container { display: flex; flex-direction: column; gap: 32px; }
        .step-card {
            display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center;
            background: var(--white); border-radius: var(--radius-xl); padding: 40px;
            border: 1px solid var(--gray-200); transition: all 0.3s ease;
        }
        .step-card:hover { box-shadow: var(--shadow-lg); border-color: var(--gray-300); }
        .step-card:nth-child(even) { direction: rtl; }
        .step-card:nth-child(even) > * { direction: ltr; }
        .step-content { display: flex; flex-direction: column; }
        .step-badge {
            display: inline-flex; align-items: center; gap: 6px;
            background: var(--orange); color: var(--white);
            padding: 6px 14px; border-radius: 50px; font-size: 12px; font-weight: 700;
            text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 16px; width: fit-content;
        }
        .step-title { font-size: clamp(20px, 2.5vw, 24px); font-weight: 800; color: var(--blue); margin-bottom: 14px; line-height: 1.3; }
        .step-description { font-size: 15px; color: var(--text-secondary); line-height: 1.75; text-align: left; }
        .step-highlights { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 18px; }
        .highlight-tag {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 6px 12px; background: var(--gray-50); border: 1px solid var(--gray-200);
            border-radius: 50px; font-size: 12px; font-weight: 600; color: var(--text-muted);
        }
        .highlight-tag svg { width: 12px; height: 12px; color: var(--green); }
        .step-visual { display: flex; justify-content: center; align-items: center; }
        .step-illustration {
            width: 100%; max-width: 280px; aspect-ratio: 1;
            background: linear-gradient(135deg, var(--orange-lighter) 0%, var(--blue-lighter) 100%);
            border-radius: var(--radius-xl); display: flex; flex-direction: column;
            align-items: center; justify-content: center; padding: 20px; position: relative; overflow: hidden;
        }
        .step-illustration .illustration-icon {
            width: 100%; max-width: 180px; aspect-ratio: 1; margin-bottom: 8px;
            background: none; box-shadow: none;
        }
        .step-illustration .illustration-icon svg { width: 100%; height: 100%; }
        .illustration-label { font-size: 13px; font-weight: 600; color: var(--text-muted); text-align: center; }
        .step-number-large {
            position: absolute; bottom: 16px; right: 20px;
            font-size: 64px; font-weight: 800; color: rgba(27,54,93,0.06); line-height: 1;
        }

        /* Process Evidence Screenshot - Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
        .process-screenshot-details summary {
            font-size: 13px; font-weight: 600; color: var(--orange); cursor: pointer;
            display: inline-flex; align-items: center; gap: 6px;
        }
        .process-screenshot-details summary:hover { color: var(--orange-dark); }
        .process-screenshot-details .screenshot-img {
            max-width: 100%; border-radius: 8px; border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-sm); margin-top: 10px;
        }
        .process-screenshot-details .screenshot-note {
            font-size: 11px; color: var(--text-muted); margin-top: 6px;
        }

        /* Why Choose Section */
        .why-choose-section { padding: 72px 32px; background: var(--gray-50); }
        .why-choose-header { text-align: center; margin-bottom: 48px; }
        .features-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .feature-card {
            background: var(--white); border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg); padding: 28px; transition: all 0.25s ease;
        }
        .feature-card:hover { box-shadow: var(--shadow-md); border-color: var(--orange); transform: translateY(-2px); }
        .feature-icon {
            width: 52px; height: 52px; background: var(--orange-light); border-radius: var(--radius-md);
            display: flex; align-items: center; justify-content: center; margin-bottom: 18px;
        }
        .feature-icon svg { width: 26px; height: 26px; color: var(--orange); }
        .feature-title { font-size: 17px; font-weight: 700; color: var(--blue); margin-bottom: 10px; }
        .feature-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; text-align: left; }

        /* Reviews CTA */
        .reviews-cta {
            margin-top: 40px; padding: 28px 32px; background: var(--blue);
            border-radius: var(--radius-lg); display: flex;
            align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;
        }
        .reviews-cta-content { display: flex; align-items: center; gap: 16px; }
        .reviews-cta-icon {
            width: 48px; height: 48px; background: rgba(255,255,255,0.1);
            border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;
        }
        .reviews-cta-icon svg { width: 24px; height: 24px; color: var(--white); }
        .reviews-cta-text h3 { font-size: 18px; font-weight: 700; color: #FFFFFF !important; margin-bottom: 2px; margin-top: 0; }
        .reviews-cta-text p { font-size: 13px; color: rgba(255,255,255,0.7); margin: 0; }
        .btn-cta {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px; font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            color: var(--blue); background: var(--white); border: none;
            border-radius: var(--radius-md); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-cta:hover { background: var(--orange-light); color: var(--orange); }
        .btn-cta svg { width: 16px; height: 16px; }        @media (max-width: 640px) {        }

        /* ============================================
           CITY & CROSS-SELL GRID CARDS
           ============================================ */
        .pa-city-block { }
        .pa-block-title { font-size: 18px; font-weight: 700; color: var(--blue); margin-bottom: 6px; }
        .pa-block-sub   { font-size: 14px; color: var(--text-muted); margin-bottom: 16px; }
        .pa-city-grid, .pa-cross-grid { display: grid; gap: 12px; max-width: 1100px; }
        .pa-city-grid  { grid-template-columns: repeat(4, 1fr); }
        .pa-cross-grid { grid-template-columns: repeat(3, 1fr); }
        .pa-city-card, .pa-cross-card {
            display: flex; align-items: center; gap: 10px;
            padding: 14px 16px; background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            text-decoration: none; transition: all 0.25s ease;
        }
        .pa-city-card:hover, .pa-cross-card:hover { border-color: var(--orange); box-shadow: 0 4px 16px rgba(232,113,44,0.12); transform: translateY(-2px); }
        .pa-card-icon {
            width: 32px; height: 32px; background: var(--orange-light);
            border-radius: var(--radius-sm); display: flex; align-items: center;
            justify-content: center; flex-shrink: 0;
        }
        .pa-card-title  { font-size: 14px; font-weight: 700; color: var(--blue); }
        .pa-card-sub    { font-size: 11px; color: var(--text-muted); }
        @media (max-width: 768px) {
            .pa-city-grid  { grid-template-columns: repeat(2, 1fr); }
            .pa-cross-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 480px) {
            .pa-city-grid  { grid-template-columns: 1fr; }
            .pa-cross-grid { grid-template-columns: 1fr; }
        }
        .testimonials-section {
            padding: 24px 32px 0 32px;
            background: var(--white);
            overflow: hidden;
        }
        .testimonials-section .section-container {
            max-width: 1320px;
            margin: 0 auto;
        }
        .testimonials-section .section-header {
            text-align: center;
            margin-bottom: 16px;
        }
        .testimonials-section .section-header h2 {
            font-size: clamp(26px, 3.5vw, 34px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 10px;
        }
        .testimonials-section .section-header p {
            font-size: 15px;
            color: var(--text-muted);
        }

        /* Slick overrides */
        .testimonial-slider .slick-slide { padding: 0 10px; }
        .testimonial-slider .slick-list { margin: 0 -10px; overflow: hidden; }
        .testimonial-slider .slick-dots { bottom: -40px; }
        .testimonial-slider .slick-dots li button:before { font-size: 10px; color: var(--gray-300); opacity: 1; }
        .testimonial-slider .slick-dots li.slick-active button:before { color: var(--orange); }
        .testimonial-slider { margin-bottom: 0 !important; padding-bottom: 0 !important; }
        .testimonial-slider .slick-track { display: flex !important; }
        .testimonial-slider.slick-initialized { margin-bottom: 0; }

        /* Video Testimonial Card */
        .testi-video-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            overflow: hidden;
            height: 340px;
            display: flex;
            flex-direction: column;
            transition: all 0.25s ease;
        }
        .testi-video-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); }
        .testi-video-area {
            position: relative;
            height: 230px;
            overflow: hidden;
            cursor: pointer;
            flex-shrink: 0;
        }
        .testi-video-area video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .testi-play-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0,0,0,0.25);
            transition: opacity 0.3s;
            pointer-events: none;
        }
        .testi-video-area.playing .testi-play-overlay { opacity: 0; }
        .testi-play-btn {
            width: 56px;
            height: 56px;
            background: rgba(232,113,44,0.85);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        .testi-play-btn svg { width: 22px; height: 22px; color: white; margin-left: 3px; }
        .testi-star-badge {
            position: absolute;
            bottom: 12px;
            left: 12px;
            display: flex;
            gap: 2px;
        }
        .testi-star-badge svg { width: 16px; height: 16px; fill: #FFC107; color: #FFC107; }

        /* Quote Testimonial Card */
        .testi-quote-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 24px;
            height: 340px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.25s ease;
        }
        .testi-quote-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); }
        .testi-quote-icon { color: var(--orange); opacity: 0.25; margin-bottom: 8px; }
        .testi-quote-icon svg { width: 24px; height: 24px; }
        .testi-quote-text {
            font-size: 14px;
            line-height: 1.65;
            color: var(--text-secondary);
            flex: 1;
            display: -webkit-box;
            -webkit-line-clamp: 6;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .testi-footer {
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding-top: 16px;
            border-top: 1px solid var(--gray-100);
        }
        .testi-author {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .testi-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 700;
            color: var(--white);
            flex-shrink: 0;
            overflow: hidden;
            background: var(--orange);
        }
        .testi-avatar img { width: 100%; height: 100%; object-fit: cover; }
        .testi-avatar.blue { background: var(--blue); }
        .testi-avatar.teal { background: #0D9488; }
        .testi-avatar.purple { background: #7C3AED; }
        .testi-name { font-size: 14px; font-weight: 700; color: var(--text-primary); line-height: 1.2; }
        .testi-role { font-size: 12px; color: var(--text-muted); }
        .testi-rating-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .testi-stars { display: flex; gap: 1px; }
        .testi-stars svg { width: 12px; height: 12px; fill: var(--gold); color: var(--gold); }
        .testi-google-badge { width: 22px; height: 22px; }
        .testi-google-badge img { width: 100%; height: 100%; }

        /* Loading state */
        .testi-loading {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 0;
            color: var(--text-muted);
            font-size: 14px;
        }
        .testi-loading .spinner {
            width: 32px;
            height: 32px;
            border: 3px solid var(--gray-200);
            border-top-color: var(--orange);
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin-right: 12px;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        @media (max-width: 768px) {
            .testimonials-section { padding: 16px 20px 0 20px; }
        }
        @media (max-width: 576px) {

        }

        

        @media (max-width: 1024px) {
        }
        @media (max-width: 768px) {

        }
        @media (max-width: 480px) {


        }
        @media (max-width: 768px) {

        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1024px) {
            .two-column { grid-template-columns: 1fr; gap: 40px; }
            .features-grid { grid-template-columns: repeat(2, 1fr); }
            .stats-container { gap: 32px; }
            .certifications { padding-left: 0; border-left: none; width: 100%; justify-content: center; padding-top: 16px; border-top: 1px solid var(--gray-200); }
        }
        @media (max-width: 900px) {
            .step-card { grid-template-columns: 1fr; gap: 32px; padding: 32px; }
            .step-card:nth-child(even) { direction: ltr; }
            .step-visual { order: -1; }
        }
        @media (max-width: 768px) {
            .content-section { padding: 40px 16px; }
            .hero-cta { flex-direction: column; }
            .btn-video, .btn-sample { width: 100%; justify-content: center; }
            .stats-container { flex-direction: column; gap: 20px; align-items: flex-start; padding: 0 16px; }
            .stat-item { width: 100%; }
            .features-grid { grid-template-columns: 1fr; gap: 16px; }
            .reviews-cta { flex-direction: column; text-align: center; }
            .reviews-cta-content { flex-direction: column; }
            .content-text { font-size: 14px; }
            .accordion-body { text-align: left; }
            main section table thead tr th { font-size: 13px !important; padding: 10px 12px !important; }
            main section table tbody tr td { padding: 10px 12px !important; font-size: 13px !important; }
            .table-responsive-wrapper { margin: 16px 0; border-radius: var(--radius-sm); }
            .col-lg-4 { margin-top: 24px; }
            .form-card { max-width: 100%; }
            .private-registration-heading { margin-bottom: 1rem !important; }
            .benefit-paragraph { font-size: 0.9rem; }
            .hero-badge { font-size: 12px; padding: 6px 12px; }
            .expert-attribution-box { padding: 10px 14px; }
            .expert-attribution-box .eab-title { font-size: 12px; }
            .expert-attribution-box .eab-meta { font-size: 11px; }
            .trust-section { gap: 12px; }
            .trust-row { gap: 16px; }
            .google-rating { width: 100%; }
            section ul li:not(.nav-item) { font-size: 14px; }
        }

        /* Smooth scroll offset */
        .content-section[id] { scroll-margin-top: 80px; }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
    
        /* Trust Badge Descriptions */
        .stat-desc { display: block; font-size: 11px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; font-weight: 400; }
        .cert-desc { display: block; font-size: 10px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; }

        /* City Interlinking Grid */
        @media (max-width: 768px) {
            .content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 12px !important;
            }
        }
        @media (max-width: 480px) {
            .content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: 1fr !important;
            }
        }

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

/* Fix: dark CTA block body text -> white (low-contrast on navy #1B365D) */
section[style*="background: var(--blue)"] .content-text,
section[style*="background: var(--blue)"] .content-text p,
section[style*="background: var(--blue)"] .content-text li,
section[style*="background: var(--blue)"] .content-text strong{color:#FFFFFF !important;}
</style>
<main>



<!-- HERO SECTION -->
<section class="py-5" style="background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="pe-lg-5">
                    <div class="hero-badge">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Trusted by 10,000+ Businesses
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        EOR India for AI Companies - CA-Led Hiring with Foundation Model IP and GPU Awareness
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="/authorhub/ca-sundaram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Cost Arbitrage:</span> Indian ML engineers cost 14-20 percent of US equivalents fully loaded. Senior ML in India tops near Rs 2 Cr</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Three Talent Profiles:</span> Research (Rs 22-200+ LPA), Applied ML (Rs 10-300+ LPA), AI Infrastructure / MLOps (Rs 10-200 LPA)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>IP-Aware Compliance:</span> Copyright Act 1957 Sec 17(c) + Sec 19 deeds; Patents Act 1970 Sec 3(k) navigation; trade secret NDAs</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GPU + DPDP Ready:</span> GPU customs (HSN 8473/8542), IndiaAI Mission compute, DPDP Rule 13 AI/ML processing - all under one engagement</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Offices in Pune, Mumbai, Delhi, Gurugram | Patron Accounting LLP since 2019</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%27m%20interested%20in%20EOR%20India%20for%20AI%20Companies.%20Please%20share%20a%20discovery%20call%20slot." target="_blank" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px;height:18px;color:#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                            WhatsApp Us
                        </a>
                    </div>

                    <div class="trust-section">
                        <div class="trust-row">
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div>
                                <div class="trust-text"><strong>15+ Years</strong>Industry Experience</div>
                            </div>
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                                <div class="trust-text"><strong>CA & CS</strong>Certified Experts</div>
                            </div>
                        </div>
                        <div class="google-rating">
                            <div class="rating-content">
                                <div class="rating-stars">
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <span class="rating-score">4.9</span>
                                </div>
                                <span class="rating-count">Based on 500+ reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-card" id="consultationFormCard">
                    <div class="form-header">
                        <h2 class="form-title">Get Free Consultation</h2>
                        <p class="form-subtitle">Talk to a CA/CS expert today</p>
                    </div>

                    <iframe name='hidden208810000001209168Frame' id='hidden208810000001209168Frame' style='display:none;' src='about:blank'></iframe>

                    <form id='BiginWebToRecordForm208810000001209168'
                          name='BiginWebToRecordForm208810000001209168'
                          action='https://bigin.zoho.in/crm/WebToRecordForm'
                          method='POST'
                          enctype='multipart/form-data'
                          target='hidden208810000001209168Frame'
                          onSubmit='javascript:document.charset="UTF-8"; return validateConsultationForm() && checkMandatory208810000001209168()'
                          accept-charset='UTF-8'>

                        <input type='text' style='display:none;' name='xnQsjsdp' value='e400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'/>
                        <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                        <input type='text' style='display:none;' name='xmIwtLD' value='2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843'/>
                        <input type='text' style='display:none;' name='actionType' value='UG90ZW50aWFscw=='/>
                        <input type='hidden' name='rmsg' id='rmsg' value='true'/>
                        <input type='text' style='display:none;' name='returnURL' value='null' />
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - EOR India for AI Companies'/>
                        <input type='hidden' name='Pipeline' value='Sales Pipeline Standard'/>
                        <input type='hidden' name='Stage' value='Qualification'/>
                        <input type='hidden' name='Contacts.Lead Source' id='pageSourceField' value=''/>

                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input name='Contacts.Last Name' id='consultFullName' type='text' maxlength='80'
                                   class='form-input' placeholder='Your name' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <div class="phone-group" id="phoneGroup">
                                <div class="country-code-dropdown" id="countryCodeDropdown" onclick="toggleCountryDropdown(event)">
                                    <span class="selected-flag" id="selectedFlag">&#127470;&#127475;</span>
                                    <span class="selected-code" id="selectedCode">+91</span>
                                    <svg class="dropdown-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                                    <div class="country-dropdown-list" id="countryDropdownList">
                                        <input type="text" class="country-search-input" id="countrySearchInput"
                                               placeholder="Search country..." onclick="event.stopPropagation()" oninput="filterCountries(this.value)"/>
                                        <div class="country-options" id="countryOptions"></div>
                                    </div>
                                </div>
                                <input type='text' class='form-input phone-input' id='phoneNumberInput' maxlength='15'
                                       placeholder='Enter phone number'
                                       oninput='this.value = this.value.replace(/[^0-9]/g, ""); clearFieldError(this); document.getElementById("phoneGroup").classList.remove("input-error"); document.getElementById("phoneError").style.display="none";'
                                       onblur='validatePhoneOnBlur(this)'/>
                                <div id="phoneError" style="display:none;font-size:12px;color:#FD6B6D;margin-top:4px;padding-left:2px;"></div>
                            </div>
                            <input type='hidden' name='Contacts.Mobile' id='combinedMobileField' value=''/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">City</label>
                            <input name='Contacts.Mailing City' id='consultCity' type='text' maxlength='100'
                                   class='form-input' placeholder='Enter your city' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Service Needed</label>
                            <select name='Contacts.Description' id='consultService' class='form-select' onchange='clearFieldError(this)'>
                                <option value='' disabled selected>Select a service</option>
                                <option value="eor-india-for-ai-companies" selected>EOR India for AI Companies</option>
                                <option value="eor-india-engineering-team">EOR India Engineering Team</option>
                                <option value="eor-india-for-fintechs">EOR India for Fintech</option>
                                <option value="eor-india-customer-support-team">EOR India Customer Support Team</option>
                                <option value="private-limited-company-registration">Private Limited Company Registration</option>
                                <option value="payroll-services">Payroll Services</option>
                                <option value="fdi-compliance">FDI Compliance</option>
                                <option value="tds-return-filing-24q">TDS Return Filing 24Q</option>
                                <option value="other">Other</option>

                            </select>
                        </div>

                        <button type='submit' class='btn-submit' id='formSubmitBtn'>Get Free Quote &rarr;</button>
                    </form>

                    <p class="form-response-note">Our team will get back to you shortly. No spam.</p>

                    <div class="form-footer">
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            100% Secure
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"></path></svg>
                            No Spam
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                            Quick Response
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, & stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <!-- POPULATE: Replace these with real testimonial-card divs.
             Each card follows this structure (quote card):
             <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                 <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                 <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">REVIEW TEXT</div>
                 <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                     <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                     <div>
                         <div style="font-weight:700;font-size:13px;color:var(--blue);">Author Name</div>
                         <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Role / Company</div>
                         <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                     </div>
                     <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                 </div>
             </div>
             For video card pattern, refer to section8-company-registration.html
        -->
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We needed to hire eight research engineers in Bangalore at Series B. Section 80-IAC deferral saved one researcher Rs 1.4 crore in tax that would have hit at exercise. The IP deeds covered the full foundation model scope including fine-tune derivatives. Now at twenty-one engineers.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VR</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">VP Research</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Series B AI-first SaaS (anonymised)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron diagnosed our DPIIT Section 80-IAC eligibility on day one. IMB Certificate filing went through cleanly. Our staff research engineer's ESOP exercise event would have generated Rs 5 crore tax cliff - Sec 80-IAC deferral pushed it 48 months out. Worth every rupee.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CT</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">CTO</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Series B Generative AI Startup</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">IP framework was the deciding factor. Copyright Act Sec 17/19 deeds covering code, weights, fine-tune derivatives, and research artefacts - plus a trade secret NDA framework for architectures and training procedures. Generic EOR vendors had nothing comparable.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VE</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">VP Engineering</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">EU Foundation Model Lab</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron mapped our GPU plan: cloud (DPDP Rule 15 monitoring) for training jobs, IndiaAI Mission for subsidised compute, on-prem H100 cluster with SEZ structuring for export work. All three options costed and decided in one engagement.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FC</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Founder CEO</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Singapore AI Infrastructure Startup</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Annual run-rate compliance cost dropped 55 percent vs the EOR-only model. Cost-plus transfer pricing with Form 3CEB went through cleanly. DPDP processor agreement with Rule 13 transparency provisions handled in week three. Smooth handoff.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">OL</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Operations Lead</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">US Series C AI-first Product Company</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
            </div>
        </div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Trusted by Series B-D AI-first founders, CTOs, and VPs of Research across the US, UK, EU, Singapore, and Australia for India-side foundation model IP, ESOP, and DPDP-aware engagements.</p>
                </div>
            </div>
            <a href="tel:+919459456700" class="btn-cta">
                Talk to an Expert
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- STATS BAR -->
<div class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">GST compliance and litigation support across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span><span class="stat-desc">Deep expertise in IP registration, GST &amp; business compliance.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Documents Filed</span><span class="stat-desc">Returns, appeals, and filings handled accurately.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by entrepreneurs, startups, and growing businesses.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>ISO Certified<span class="cert-desc">Professional standards and documented processes.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your financial and business data is fully protected.</span></div>
        </div>
    </div>
</div>

<!-- TOC NAVIGATION -->
<div class="toc-section">
    <div class="toc-container">
        <button class="toc-arrow left" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is EOR for AI</a>
            <a href="#who-section" class="toc-btn">Talent Profiles</a>
            <a href="#services-section" class="toc-btn">What We Deliver</a>
            <a href="#procedure-section" class="toc-btn">Onboarding Process</a>
            <a href="#documents-section" class="toc-btn">Documents Checklist</a>
            <a href="#challenges-section" class="toc-btn">AI Challenges</a>
            <a href="#fees-section" class="toc-btn">Cost Comparison</a>
            <a href="#timeline-section" class="toc-btn">Time Taken</a>
            <a href="#benefits-section" class="toc-btn">Why CA-Led</a>
            <a href="#comparison-section" class="toc-btn">Generic EOR vs Patron</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">EOR India for AI Companies: CA-Led Hiring With Foundation Model Awareness</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - EOR India for AI Companies Services at a Glance</strong></p>
                    <p>AI companies hiring in India access world-class research and applied ML talent at 14-20 percent of US fully-loaded cost. Three talent profiles (research, applied ML, AI infrastructure) drive different salary bands and compliance footprints. Foundation model work creates IP assignment complexity that generic EOR vendors do not handle. GPU infrastructure decisions interact with subsidiary structuring. DPDP Rule 13 governs AI/ML processing transparency. Patron Accounting LLP runs the path with all four compliance layers integrated under one CA-led engagement.</p>
                </div>
                <p>This page is for AI founders, CTOs, VPs of Research, and operations leads at AI-first companies thinking through India hiring strategy with awareness of foundation model work, GPU infrastructure, and IP assignment complexity. The honest CA-led answer is rarely 'pick a generic EOR'; it is 'design the engagement around your AI scope and IP framework, then execute'. Patron Accounting LLP runs that engagement under one team.</p>
                <p>Patron Accounting LLP brings CA-led India compliance with offices in Pune, Mumbai, Delhi, and Gurugram. Foreign AI-first companies headquartered in the United States, the United Kingdom, the European Union, Singapore, and Australia rely on us for integrated foundation model IP framework, DPIIT Section 80-IAC eligibility, GPU customs and IndiaAI Mission advisory, DPDP Rule 13 processor agreements, ESOP exercise-cliff structuring at frontier-lab valuations, and ongoing compliance.</p>
                <p>Content is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is EOR India for AI Companies?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>EOR India for AI companies is the use of an Employer of Record - or a CA-led equivalent service - by US, UK, EU, Singapore, or Australia-based AI-first companies hiring research engineers, applied ML engineers, AI infrastructure engineers, and adjacent roles in India tuned to AI-specific concerns: foundation model IP assignment, GPU cluster decisions, DPDP Rule 13 AI/ML processing requirements, and cross-border model access patterns.</p>
<p>AI companies have distinct compliance considerations that distinguish them from generic foreign-employer hiring: novel IP territory for model weights and training data under Copyright Act 1957 and Patents Act 1970 Section 3(k); GPU import customs and IndiaAI Mission compute access; DPDP Rule 13 transparency requirements for AI/ML processing; transfer pricing for cost-plus AI R+D services.</p>
<p>Patron Accounting LLP positions itself as the CA-led alternative to traditional EOR vendors for this audience - earning revenue across partnership, subsidiary setup, IP-assignment deeds, GPU customs advisory, DPDP processor agreements, and ongoing compliance.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for EOR India for AI Companies:</strong></p>
                    <ul>
  <li><strong>Foundation Model:</strong> Large-scale AI model trained on broad data, adaptable to many downstream tasks. Examples: large language models, image generation models, multi-modal models. IP scope includes weights, training data, fine-tune derivatives, and model architectures.</li>
  <li><strong>Research Engineer:</strong> PhD-track or research-oriented role focused on novel ML methods, foundation model development, or applied research. Compensation typically Rs 22-200+ LPA at frontier labs in India.</li>
  <li><strong>Applied ML Engineer:</strong> Production ML role focused on deploying, scaling, and operating ML systems. Compensation typically Rs 10-300+ LPA depending on specialisation (LLM serving, RecSys, RL, computer vision).</li>
  <li><strong>AI Infrastructure / MLOps:</strong> Engineers building model training, serving, and observability infrastructure. Compensation typically Rs 10-200 LPA. Often command shift differentials for follow-the-sun production support.</li>
  <li><strong>Section 3(k) Patents Act:</strong> Indian provision excluding mathematical methods, business methods, computer programs per se, and algorithms from patentability. Creates challenges for AI patent filings; pushes IP protection to copyright and trade secret routes.</li>
  <li><strong>Rule 13 DPDP Rules 2025:</strong> Transparency requirements for AI/ML processing of personal data. Covers automated decision-making, profiling, and AI-driven outputs that affect data principals.</li>
  <li><strong>IndiaAI Mission:</strong> Government of India initiative announced 2024 building national AI compute capacity (10,000+ GPUs) with subsidised access for Indian AI startups. Open to DPIIT-recognised eligible startups.</li>
</ul>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="40" y="50" width="120" height="100" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Roof / Pediment -->
                            <path d="M30 52L100 15L170 52" stroke="#14365F" stroke-width="2" fill="#E8EDF4"/>
                            <!-- Columns -->
                            <rect x="55" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="80" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="112" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="137" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <!-- Door -->
                            <rect x="88" y="105" width="24" height="35" rx="12" fill="#14365F" opacity="0.15" stroke="#14365F" stroke-width="1"/>
                            <!-- Scale of Justice icon -->
                            <circle cx="100" cy="78" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <line x1="100" y1="70" x2="100" y2="86" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="90" y1="76" x2="110" y2="76" stroke="#14365F" stroke-width="1.5"/>
                            <path d="M90 76L87 83H93Z" fill="#E8712C" opacity="0.6"/>
                            <path d="M110 76L107 83H113Z" fill="#E8712C" opacity="0.6"/>
                            <!-- Green check badge -->
                            <circle cx="152" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M144 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- APL-05 tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">APL-05</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">EOR India for AI Companies</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>AI Compliance Stack</span>
                        <strong>Copyright Sec 17/19 + Patents 3(k) + DPDP Rule 13 + IndiaAI</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO CAN FILE -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Three AI Talent Profile Categories</h2>
            <div class="content-text">
                
                <p>AI companies hiring in India fall into three talent profile categories. Each carries distinct salary bands, compensation structures, and compliance footprints.</p>
<h3 style="color:var(--blue);margin-top:24px;">Category 1 - Research Engineers and Scientists</h3>
<p><strong>What they do:</strong> Foundation model architecture design, pre-training and post-training research (RLHF, DPO, supervised fine-tuning), publishing at top venues (NeurIPS, ICML, ICLR, ACL), novel ML method development. Often hold PhD or have equivalent research experience.</p>
<p><strong>Salary by tier (Bangalore CTC, May 2026):</strong> Junior (0-2 yr post-PhD) Rs 22-40 LPA. Mid (3-7 yr) Rs 50-100 LPA. Senior (7-12 yr) Rs 100-200 LPA. Staff/Principal Rs 200-400+ LPA at top frontier labs.</p>
<div class="table-responsive-wrapper">
<table class="table-comparison">
  <thead><tr><th>Tier</th><th>Bangalore</th><th>Hyderabad</th><th>Pune</th><th>Delhi-NCR</th></tr></thead>
  <tbody>
    <tr><td>Junior research (0-2)</td><td>Rs 22-40 LPA</td><td>Rs 20-36 LPA</td><td>Rs 18-32 LPA</td><td>Rs 22-40 LPA</td></tr>
    <tr><td>Mid research (3-7)</td><td>Rs 50-100 LPA</td><td>Rs 45-90 LPA</td><td>Rs 40-80 LPA</td><td>Rs 48-95 LPA</td></tr>
    <tr><td>Senior research (7-12)</td><td>Rs 100-200 LPA</td><td>Rs 90-170 LPA</td><td>Rs 80-150 LPA</td><td>Rs 95-180 LPA</td></tr>
    <tr><td>Staff / Principal</td><td>Rs 200-400+ LPA</td><td>Rs 180-350 LPA</td><td>Rs 160-300 LPA</td><td>Rs 180-350 LPA</td></tr>
  </tbody>
</table>
</div>
<p><strong>Compliance notes:</strong> Research engineers create the most novel IP - foundation model architectures, pre-training research, fine-tune derivatives. IP assignment under Copyright Act 1957 Section 17/19 is critical from Day 1. Patents Act Section 3(k) limits patent route, pushing protection to copyright and trade secret framework. ESOPs typical at all tiers - Section 17(2)(vi) IT Act perquisite tax, FMV documentation, Schedule FA disclosure. Top employers: Microsoft Research India, Google DeepMind India, Sarvam AI, Krutrim, Adobe Research, IBM Research India, Amazon AGI.</p>
<h3 style="color:var(--blue);margin-top:24px;">Category 2 - Applied ML Engineers</h3>
<p><strong>What they do:</strong> Production ML systems, model deployment, LLM serving (vLLM, TGI, Triton, KV-cache optimisation), RAG pipelines, RecSys, RL agents, computer vision at scale, NLP applications. Bridge between research output and customer-facing product.</p>
<p><strong>Salary by tier (Bangalore CTC, May 2026):</strong> Junior Rs 10-20 LPA. Mid (3-7 yr) Rs 35-65 LPA. Senior Rs 65-150 LPA. Staff/Principal Rs 150-300+ LPA.</p>
<div class="table-responsive-wrapper">
<table class="table-comparison">
  <thead><tr><th>Tier</th><th>Bangalore</th><th>Hyderabad</th><th>Pune</th><th>Delhi-NCR</th></tr></thead>
  <tbody>
    <tr><td>Junior ML (0-2)</td><td>Rs 10-20 LPA</td><td>Rs 9-18 LPA</td><td>Rs 8-16 LPA</td><td>Rs 10-19 LPA</td></tr>
    <tr><td>Mid ML (3-7)</td><td>Rs 35-65 LPA</td><td>Rs 32-58 LPA</td><td>Rs 28-52 LPA</td><td>Rs 33-62 LPA</td></tr>
    <tr><td>Senior ML (7-12)</td><td>Rs 65-150 LPA</td><td>Rs 58-130 LPA</td><td>Rs 52-115 LPA</td><td>Rs 62-140 LPA</td></tr>
    <tr><td>Staff / Principal</td><td>Rs 150-300+ LPA</td><td>Rs 130-260 LPA</td><td>Rs 115-230 LPA</td><td>Rs 140-280 LPA</td></tr>
  </tbody>
</table>
</div>
<p><strong>Compliance notes:</strong> Applied ML engineers commonly access customer data for model training and inference - DPDP Act 2023 with Rule 13 transparency requirements applies. Indian subsidiary typically operates as processor under foreign parent's Data Fiduciary role. ESOP grants common at mid-level and above. Cost-plus markup of 12-18 percent typical for AI R+D services under transfer pricing benchmarks.</p>
<h3 style="color:var(--blue);margin-top:24px;">Category 3 - AI Infrastructure and MLOps</h3>
<p><strong>What they do:</strong> Model training infrastructure, serving infrastructure (vLLM, Triton, TGI), MLOps platforms (MLflow, Kubeflow, SageMaker Pipelines), GPU cluster operation, observability for AI systems, distributed training. Often combine SRE skills with ML domain knowledge.</p>
<p><strong>Salary by tier (Bangalore CTC, May 2026):</strong> Junior Rs 10-18 LPA. Mid Rs 30-55 LPA. Senior Rs 55-100 LPA. Staff Rs 100-200 LPA. On-call retainers add 10-25 percent.</p>
<div class="table-responsive-wrapper">
<table class="table-comparison">
  <thead><tr><th>Tier</th><th>Bangalore</th><th>Hyderabad</th><th>Pune</th><th>Delhi-NCR</th></tr></thead>
  <tbody>
    <tr><td>Junior MLOps (0-2)</td><td>Rs 10-18 LPA</td><td>Rs 9-16 LPA</td><td>Rs 8-15 LPA</td><td>Rs 10-17 LPA</td></tr>
    <tr><td>Mid MLOps (3-7)</td><td>Rs 30-55 LPA</td><td>Rs 27-50 LPA</td><td>Rs 24-45 LPA</td><td>Rs 28-52 LPA</td></tr>
    <tr><td>Senior MLOps (7-12)</td><td>Rs 55-100 LPA</td><td>Rs 50-90 LPA</td><td>Rs 45-80 LPA</td><td>Rs 52-95 LPA</td></tr>
    <tr><td>Staff MLOps</td><td>Rs 100-200 LPA</td><td>Rs 90-180 LPA</td><td>Rs 80-160 LPA</td><td>Rs 95-185 LPA</td></tr>
  </tbody>
</table>
</div>
<p><strong>Compliance notes:</strong> AI infrastructure roles often run 24/7 GPU clusters with on-call rotations. Time-zone allowance and on-call retainer structuring under Section 17(2) IT Act. State Shops and Establishments compliance for night shifts. ICC under POSH Act 2013 mandatory at 10+ employees. Cross-border GPU cluster access (foreign cloud regions) falls under DPDP Rule 15 negative list monitoring.</p>
<p style="margin-top:20px;"><strong>Why talent profile framing matters:</strong> A generic EOR onboards an AI hire with a standard offer letter. The hire's profile - research, applied ML, infrastructure - determines which Indian compliance layers actually apply: IP framework intensity, ESOP perquisite tax structuring, on-call compensation, DPDP scope. Patron's discovery call maps your roles against the three profiles and structures the engagement accordingly.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron's AI-Specific Deliverables</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Talent-Profile Aware Engagement</td><td>Discovery call maps your team into research / applied ML / infrastructure profiles or hybrid. Engagement letter scopes Patron's compliance work to your specific AI footprint - rather than applying generic EOR scope.</td></tr>
                        <tr><td>Foundation Model IP Assignment Framework</td><td>Copyright Act 1957 Section 17(c) default plus Section 19 written assignment deeds covering code, model weights, fine-tune derivatives, training data preparation, and research outputs. Trade secret NDA framework for non-patentable AI methods. Coordination with parent IP team on global IP harmonisation.</td></tr>
                        <tr><td>GPU Procurement and IndiaAI Mission Advisory</td><td>Customs duty advisory under HSN 8473/8542 (GPU classification), 18 percent IGST plus basic customs duty calculation, SEZ structuring for export-oriented AI work, IndiaAI Mission compute access support for DPIIT-recognised eligible startups.</td></tr>
                        <tr><td>DPDP Rule 13 AI/ML Processing Compliance</td><td>Transparency requirements for AI/ML processing under Rule 13 DPDP Rules 2025. Processor agreement covering AI training data scope. Security safeguards under Rule 8 with encryption, access controls, and audit logging.</td></tr>
                        <tr><td>ESOP Advisory at Frontier-Lab Valuations</td><td>Foreign parent ESOPs at AI-frontier-lab valuations create acute exercise-event tax cliffs. Section 17(2)(vi) perquisite calculation, FMV documentation by SEBI Cat I merchant banker, Section 80-IAC deferral up to 48 months for DPIIT-recognised startups, Schedule FA disclosure framework.</td></tr>
                        <tr><td>Cost-Plus Transfer Pricing for AI R+D</td><td>Markup benchmarking for AI research and development services (typically 12-18 percent), Form 3CEB transfer pricing report under Section 92E IT Act, intercompany agreement drafting for parent-funded research, OECD-aligned documentation for fundraising and audit purposes.</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: 7-STEP PROCESS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">How Patron Onboards an AI Company (6 Sequential Steps)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's AI onboarding is talent-profile aware. Every step cites the relevant Act or Section so finance and legal teams can audit each handoff. Legal verification: Income Tax Act 1961 (Sections 9, 17, 80-IAC, 92, 192, 195), Copyright Act 1957 (Sections 14, 17, 19), Patents Act 1970 (Section 3(k)), DPDP Act 2023 and DPDP Rules 2025 (Rules 8, 13, 15), Customs Act 1962 with Customs Tariff (HSN 8473/8542), IGST Act 2017 (Section 16), Companies Act 2013, EPF Act 1952, and POSH Act 2013.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Discovery Call (Free 30 minutes)</h3>
        <p class="step-description">Map your AI scope (foundation model work, applied ML, infrastructure). Identify customer data access patterns. Confirm DPDP Rule 13 applicability. Review GPU infrastructure decisions (cloud vs on-prem, foreign vs Indian). Assess ESOP structure if foreign parent grants apply.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Talent profiles</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AI scope</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GPU plan</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="100" height="70" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="32" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="32" y="44" font-size="8" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">RES</text><circle cx="60" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="44" font-size="8" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">ML</text><circle cx="88" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="88" y="44" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">OPS</text><line x1="20" y1="60" x2="100" y2="60" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="20" y1="72" x2="92" y2="72" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Scope Mapped</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Diagnostic Memo</h3>
        <p class="step-description">Patron issues a written assessment - talent profile footprint, IP gap analysis, GPU customs and IndiaAI Mission opportunity, DPDP scope, ESOP cliff projections, transfer pricing structure.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Written memo</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IP gap analysis</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ESOP cliff</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="5" width="80" height="90" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="20" x2="90" y2="20" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="61" x2="75" y2="61" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="74" x2="80" y2="74" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Memo Issued</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Engagement Letter</h3>
        <p class="step-description">Fixed-scope engagement letter signed by a Chartered Accountant. Pricing itemised by service line. Migration paths defined upfront (e.g. EOR partnership for 6 months while subsidiary setup runs in parallel).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA signed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Itemised price</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Migration path</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="32" font-size="10" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">ENGAGEMENT</text><line x1="22" y1="42" x2="98" y2="42" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="52" x2="92" y2="52" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="62" x2="85" y2="62" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="92" cy="78" r="8" fill="#25D366"/><path d="M88 78 L91 81 L96 75" stroke="#fff" stroke-width="2" stroke-linecap="round" fill="none"/></svg>
            </div>
            <span class="illustration-label">Letter Signed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Execution: Path A or Path B</h3>
        <p class="step-description">Path A partnership begins in 1-2 weeks; Path B subsidiary incorporation begins within 7 days of engagement-letter signing via MCA SPICe+ form (4-6 weeks to certificate). DPIIT registration runs parallel where Section 80-IAC eligibility applies.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Path A or B</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SPICe+ form</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DPIIT parallel</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="35" y="42" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Path A</text><rect x="65" y="20" width="40" height="55" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="42" font-size="8" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">Path B</text><line x1="20" y1="55" x2="50" y2="55" stroke="#14365F" stroke-width="1.5"/><line x1="70" y1="55" x2="100" y2="55" stroke="#E8712C" stroke-width="1.5"/></svg>
            </div>
            <span class="illustration-label">Execution Live</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Compliance Steady State</h3>
        <p class="step-description">Monthly TDS by 7th, PF/ESI by 15th, GSTR by 11th/20th. Quarterly Form 24Q. Annual Form 16, Form 3CEB, statutory audit, ICC report. ESOP exercise events handled per occurrence.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Monthly filings</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual audit</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ESOP per event</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="35" y="39" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">PF</text><circle cx="60" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="39" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">TDS</text><circle cx="85" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="39" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">GST</text><line x1="22" y1="58" x2="98" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="68" x2="92" y2="68" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="78" x2="85" y2="78" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Steady State</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Quarterly Review</h3>
        <p class="step-description">Re-evaluate AI scope and compliance footprint. New foundation model release, customer data access change, or fundraising round triggers re-assessment. Same Patron team handles transitions.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Quarterly check</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scope change</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Re-assessment</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="32" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="50" r="22" fill="none" stroke="#E8712C" stroke-width="1.5" stroke-dasharray="3 2"/><line x1="60" y1="40" x2="60" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="60" y1="50" x2="70" y2="56" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><circle cx="60" cy="50" r="2" fill="#14365F"/></svg>
            </div>
            <span class="illustration-label">Review Done</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents and Information Checklist</h2>
            <div class="content-text">
                
                <h3 style="color:var(--blue);margin-top:8px;">For Discovery Call</h3>
<ul>
  <li>AI company stage and funding round - pre-seed / seed / Series A-D, lead investors.</li>
  <li>Talent profile mix - research / applied ML / infrastructure split with 12-month projection.</li>
  <li>Foundation model scope - pre-training, post-training, fine-tuning, applied research, agent systems.</li>
  <li>Customer data access - whether Indian engineers will access customer data for training or inference.</li>
  <li>GPU infrastructure plan - cloud (AWS/GCP/Azure/Oracle/CoreWeave), Indian DC, IndiaAI Mission, on-prem.</li>
  <li>ESOP plan from foreign parent if applicable - vesting schedule, exercise mechanics.</li>
</ul>
<h3 style="color:var(--blue);margin-top:24px;">For IP Framework Setup</h3>
<ul>
  <li>Foreign parent's IP assignment framework and existing employee IP agreements.</li>
  <li>Open source licenses in use (Apache 2.0, MIT, LLaMA license, model card licenses).</li>
  <li>Trade secret framework and confidentiality classification.</li>
  <li>Existing patent filings and patent strategy if applicable.</li>
  <li>Training data sources and licensing - first-party, third-party, scraped, public domain.</li>
</ul>
<h3 style="color:var(--blue);margin-top:24px;">For DPDP and GPU Setup</h3>
<ul>
  <li>Data flow map - which categories of personal data Indian team will access.</li>
  <li>Cloud regions in use and data residency current state.</li>
  <li>Existing data processing agreements with cloud providers.</li>
  <li>GPU procurement plan - on-prem hardware, colocation, or cloud.</li>
  <li>DPIIT recognition status and Section 80-IAC IMB Certificate if eligible.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Four AI-Specific Challenges and Patron's Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Foundation Model IP Assignment</td><td>Foundation model work creates novel IP territory. Model weights are not clearly software, not clearly data, and not clearly inventions under Indian IP law. Patents Act 1970 Section 3(k) excludes mathematical methods, business methods, computer programs per se, and algorithms - making patent route limited or unavailable. Copyright Act 1957 protects code (Section 14) but model weights in trained form sit in unsettled territory.</td><td>Patron's CA team coordinates with parent IP counsel to draft Indian-side IP assignment deeds under Copyright Act 1957 Section 17(c) employer-default rule plus Section 19 written assignment for code, training data preparation, fine-tune derivatives, research artefacts, and ancillary deliverables. Trade secret NDA framework with confidentiality classification covering model architectures, training procedures, hyperparameter selection, and unpublished research.</td></tr>
                        <tr><td>GPU Infrastructure Decisions</td><td>AI companies face three GPU choices: cloud GPU (AWS p4/p5, GCP A3, Azure ND, CoreWeave) which avoids customs but routes data through foreign regions creating DPDP Rule 15 implications; Indian cloud GPU (Yotta, CtrlS, Jio Platforms, Adani Connex); on-prem GPU procurement which incurs customs duty under HSN 8473/8542 plus 18 percent IGST plus social welfare surcharge - approximately 30 percent loaded cost. The IndiaAI Mission provides subsidised compute for DPIIT-recognised eligible startups.</td><td>Patron's CA team advises on the three options based on training scale, data residency requirements, and DPIIT eligibility. Customs duty calculations for on-prem procurement under Customs Tariff Act. SEZ structuring for export-oriented AI work allowing duty-free import. IndiaAI Mission application support for DPIIT-recognised startups under Section 80-IAC. Transfer pricing structuring when Indian subsidiary uses parent-funded foreign GPU clusters.</td></tr>
                        <tr><td>DPDP Rule 13 AI/ML Processing</td><td>AI companies processing personal data for model training, fine-tuning, or inference fall under DPDP Act 2023 and DPDP Rules 2025 Rule 13 (transparency requirements for AI/ML processing). Cross-border data transfers under Rule 15 follow negative-list approach. Security safeguards under Rule 8. Penalties up to Rs 250 crore per serious violation. Significant Data Fiduciary (SDF) designation triggers DPO appointment, annual audit, and additional restrictions on cross-border transfer.</td><td>Patron's CA team drafts DPDP-compliant processor agreement between foreign parent (Data Fiduciary) and Indian subsidiary (processor) covering AI training data scope, automated decision transparency, security responsibilities, breach notification, sub-processor controls, and data deletion. Rule 13 transparency notices for AI-driven outputs. Rule 8 security safeguard documentation. Rule 15 negative list monitoring through Government notifications.</td></tr>
                        <tr><td>ESOP Exercise Cliffs at Frontier-Lab Valuations</td><td>AI engineers at frontier-lab-affiliated Indian subsidiaries hold foreign parent ESOPs with FMV that may have grown 10-100x over vesting period. Section 17(2)(vi) IT Act perquisite tax at exercise can exceed annual cash salary, creating a cash-flow trap when shares are illiquid. An Indian research engineer with USD 2M perquisite value at exercise faces approximately USD 600,000 (Rs 5 crore) tax liability - potentially exceeding their cash salary by multiple times.</td><td>Patron's ESOP advisory covers FMV documentation cycles (max 180 days per Rule 3(8) IT Rules), TDS calculations at each exercise, Section 80-IAC deferral structuring for DPIIT-recognised eligible startups (defers tax up to 48 months), Section 192(1A) employer-pays-tax option with Section 10(10CC) exemption, sell-to-cover frameworks, secondary sale facilitation. Schedule FA disclosure preparation under Black Money Act 2015.</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 10: FEES -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Cost Comparison: India AI Hiring vs US Frontier Labs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Mid Applied ML (3-7 yr) - India fully-loaded</td><td class="text-right">Rs 60-65 LPA (USD 72-78K)</td></tr>
                        <tr><td>Mid Applied ML (3-7 yr) - US frontier lab</td><td class="text-right">USD 250-400K (savings 80-85%)</td></tr>
                        <tr><td>Senior Applied ML (7-12 yr) - India fully-loaded</td><td class="text-right">Rs 120-130 LPA (USD 145-155K)</td></tr>
                        <tr><td>Senior Applied ML (7-12 yr) - US frontier lab</td><td class="text-right">USD 500-800K (savings 80-85%)</td></tr>
                        <tr><td>Mid Research Engineer - India fully-loaded</td><td class="text-right">Rs 90-95 LPA (USD 108-115K)</td></tr>
                        <tr><td>Mid Research Engineer - US frontier lab</td><td class="text-right">USD 300-500K (savings 75-80%)</td></tr>
                        <tr><td>Senior Research Engineer - India fully-loaded</td><td class="text-right">Rs 180-190 LPA (USD 215-230K)</td></tr>
                        <tr><td>Senior Research Engineer - US frontier lab</td><td class="text-right">USD 700K-1.2M+ (savings 75-85%)</td></tr>
                        <tr><td>5 hires (pilot) - Patron Path A</td><td class="text-right">USD 14,000 to 20,000 / year</td></tr>
                        <tr><td>25 hires (full AI lab) - Patron Path B (Yr 1 / Yr 2+)</td><td class="text-right">USD 35,000-45,000 (Yr 1) / USD 16,000 (Yr 2+)</td></tr>
                        <tr><td>50 hires (frontier-lab India) - Patron Path B ongoing</td><td class="text-right">USD 45,000 to 60,000 / year</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td class="text-right"><strong>Path A starting from USD 14,000 per year (Exl GST and Govt. Charges)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free EOR India for AI Companies consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20an%20AI-tuned%20India%20hiring%20cost%20model%20and%20IP%20review." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken at Each Setup Stage</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>AI scope and IP diagnostic</td><td>1 to 2 weeks</td></tr>
                        <tr><td>EOR partnership setup (Path A)</td><td>1 to 2 weeks</td></tr>
                        <tr><td>Pvt Ltd incorporation (Path B)</td><td>4 to 6 weeks</td></tr>
                        <tr><td>DPIIT registration</td><td>4 to 8 weeks</td></tr>
                        <tr><td>IP assignment framework</td><td>2 to 3 weeks</td></tr>
                        <tr><td>Subsidiary fully operational</td><td>60 to 75 days</td></tr>
                        <tr><td>ESOP exercise cycle</td><td>Per-event basis</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Cost takeaway:</strong> AI companies hiring in India access world-class talent at 14-25 percent of US frontier-lab fully-loaded cost. Three Indian senior ML engineers cost the same as one US senior ML engineer. Two Indian senior research engineers cost the same as one US senior research engineer at frontier labs. Five Indian mid-level applied ML engineers cost the same as one US mid-level applied ML engineer. The arbitrage is structurally largest at senior and staff tiers where US frontier-lab compensation has decoupled from broader US tech compensation.</p>
<p style="margin-top:12px;"><strong>Caveats:</strong> Numbers above exclude statutory loading (15-20 percent of gross salary regardless of vendor), IP advisory fees (transactional, billed separately), GPU customs duties for on-prem procurement (~30 percent of landed cost), and ESOP advisory fees (per-exercise event).</p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why a CA-Led Practice Matters for AI Companies</h2>
        </div>
        <div class="features-grid">
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 6v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V6l-8-4z"/><path d="M9 12l2 2 4-4"/></svg></div>
    <h3>Foundation model IP framework</h3>
    <p>Copyright Act 1957 Section 17/19 plus trade secret NDAs plus Patents Act 1970 Section 3(k) navigation. Generic EOR vendors handle a standard offer-letter clause; AI work needs significantly more.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
    <h3>ESOP advisory at frontier-lab valuations</h3>
    <p>AI companies have ESOPs that grow 10-100x over vesting. Exercise-event tax cliffs require sophisticated structuring - DPIIT Section 80-IAC deferral, Section 192(1A) employer-pays-tax, sell-to-cover frameworks.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
    <h3>DPDP Rule 13 AI/ML processing</h3>
    <p>Transparency requirements for automated decision-making and AI-driven outputs that affect data principals. Generic EOR vendors do not draft processor agreements; CA practices do as core scope.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
    <h3>GPU customs and IndiaAI Mission integration</h3>
    <p>Customs Tariff Act classification under HSN 8473/8542, IGST 18 percent, SEZ structuring, IndiaAI Mission application support. Multi-disciplinary work that EOR vendors do not handle.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
    <h3>Cost-plus transfer pricing for AI R+D</h3>
    <p>Indian subsidiary as cost center of foreign parent requires cost-plus markup structuring (typically 12-18 percent), Form 3CEB filing, intercompany agreement drafting, OECD-aligned documentation.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="14 2 14 8 20 8"/><path d="M16 13H8M16 17H8M10 9H8"/><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/></svg></div>
    <h3>ICAI accountability</h3>
    <p>Statutory audit (Sec 143), Form 3CEB transfer pricing, Form 15CB foreign remittance certificates, and Form 3CD tax audit reports all require ICAI member signatures. A unified workforce platform cannot issue these.</p>
  </div>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Social Proof and Trust Signals</h2>
            <div class="content-text">
                
                <p style="font-size:15px;color:var(--blue);font-weight:600;">10,000+ Businesses Served | 4.9 Google Rating | 4 Office Cities | CA-led practice since 2019</p>
<h3 style="color:var(--blue);margin-top:24px;">Outcome Proof</h3>
<p>Anonymised case data: A Series B AI-first SaaS company (Delaware C-Corp parent, India subsidiary planned) approached Patron with eight research and applied ML engineers operating on a third-party EOR. IP assignment framework was generic; foundation model work was not specifically covered. Two engineers had foreign parent ESOPs with FMV growth that would create exercise-event perquisite tax exceeding cash salary multiple times. DPIIT Section 80-IAC eligibility had not been filed. DPDP processor agreement was missing. Patron executed in 13 weeks: Pvt Ltd subsidiary setup, DPIIT recognition with IMB Certificate, Section 80-IAC deferral framework, IP assignment deeds for foundation model scope, DPDP processor agreement with Rule 13 transparency provisions, cost-plus transfer pricing setup for parent-funded research with Form 3CEB. Annual run-rate compliance cost reduced approximately 55 percent vs the EOR-only model; Section 80-IAC deferral generated approximately USD 170,000 in deferred tax for the engineering team.</p>
<h3 style="color:var(--blue);margin-top:24px;">Client Logos</h3>
<p>Hyundai | Asian Paints | Bridgestone | (subset of clients across foreign and domestic engagements)</p>
<p style="margin-top:16px;font-size:14px;color:var(--text-muted);"><em>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting LLP serves businesses across India - both in-person and remotely.</em></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AI Need vs Generic EOR vs Patron</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>AI Compliance Need</th><th>Generic EOR</th><th>Patron Accounting LLP</th></tr></thead>
                    <tbody>
                        <tr><td>Foundation model IP assignment</td><td>Standard offer-letter clause</td><td><span class="badge-included">Copyright Act Sec 17/19 deeds for code, weights, fine-tune derivatives, research artefacts</span></td></tr>
                        <tr><td>Trade secret NDA framework</td><td>Generic NDA</td><td><span class="badge-included">AI-tuned NDA covering architectures, training procedures, hyperparameters, unpublished research</span></td></tr>
                        <tr><td>Patents Act Sec 3(k) navigation</td><td>Out of scope</td><td><span class="badge-included">Hardware-coupled invention identification, signal-processing, defensive disclosure strategy</span></td></tr>
                        <tr><td>DPDP Rule 13 transparency</td><td>Out of scope</td><td><span class="badge-included">Automated decision-making notices, AI-driven output transparency, processor agreement clauses</span></td></tr>
                        <tr><td>DPIIT Sec 80-IAC eligibility</td><td>Out of scope</td><td><span class="badge-included">Filing support, IMB Certificate review, ESOP deferral up to 48 months, tax holiday claim</span></td></tr>
                        <tr><td>ESOP exercise cliff structuring</td><td>Out of scope</td><td><span class="badge-included">Sec 17(2)(vi), Sec 192 TDS, Sec 192(1A) employer-pays, Sec 10(10CC) exemption, sell-to-cover</span></td></tr>
                        <tr><td>GPU customs advisory</td><td>Out of scope</td><td><span class="badge-included">HSN 8473/8542 classification, IGST 18 percent, SEZ structuring for export work</span></td></tr>
                        <tr><td>IndiaAI Mission compute access</td><td>Out of scope</td><td><span class="badge-included">Application support for DPIIT-recognised eligible AI startups</span></td></tr>
                        <tr><td>Cost-plus transfer pricing</td><td>Out of scope</td><td><span class="badge-included">12-18 percent markup benchmarking for AI R+D, Form 3CEB, intercompany agreement</span></td></tr>
                        <tr><td>Cross-border GPU cluster routing</td><td>Standard offer letter</td><td><span class="badge-included">DPDP Rule 15 negative list monitoring, intercompany agreement for foreign-cluster training jobs</span></td></tr>
                        <tr><td>Foreign parent IP harmonisation</td><td>Out of scope</td><td><span class="badge-included">Coordination with parent IP team, global IP framework alignment, assignment chain</span></td></tr>
                        <tr><td>On-call compensation structuring</td><td>Generic offer letter</td><td><span class="badge-included">Time-zone allowance, on-call retainer structuring under Sec 17(2) IT Act</span></td></tr>
                        <tr><td>Statutory audit (Section 143)</td><td>Not available</td><td><span class="badge-included">ICAI member signature; integrated with subsidiary accounting</span></td></tr>
                        <tr><td>Form 3CEB transfer pricing</td><td>Not available</td><td><span class="badge-included">Section 92E filing once Rs 1 crore international RPT threshold crossed</span></td></tr>
                        <tr><td>Best fit</td><td>Pre-Series A speed-to-hire; multi-country footprints with thin AI scope</td><td>Series A-D AI-first companies with foundation model work, frontier-lab ESOPs, or DPIIT Section 80-IAC eligibility</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                <p>If Patron's AI-tuned path fits your scope, these are the underlying services that execute the engagement:</p>
<ul>
  <li>If your engineering footprint is broader than AI/ML, see Patron's <a href="/eor-india-engineering-team">EOR India engineering team</a> service for the generic foreign-employer engineering build-out.</li>
  <li>If you also need 24/7 customer support agents alongside engineering, Patron's <a href="/eor-india-customer-support-team">EOR India customer support team</a> service runs the same compliance backbone with state Shops Act night-shift coverage.</li>
  <li>If your AI scope overlaps with payments or lending, Patron's <a href="/eor-india-for-fintechs">EOR India for Fintech</a> service adds RBI sectoral overlay (PA, NBFC, DLG 2022) on top of AI-specific compliance.</li>
  <li><a href="/payroll-services">Payroll services</a> - End-to-end monthly payroll processing in INR with TDS, PF, ESI, gratuity, ESOP perquisite, and on-call retainer calculations.</li>
  <li><a href="/private-limited-company-registration">Private Limited Company registration</a> - Indian Pvt Ltd subsidiary incorporation under the Companies Act 2013. Path B execution with parallel DPIIT registration.</li>
  <li><a href="/fdi-compliance">FDI compliance</a> - FC-GPR, FC-TRS, ECB-2, and Annual Performance Report filings under FEMA 1999.</li>
  <li><a href="/pf-registration">PF registration</a> - EPFO establishment registration and Universal Account Number setup.</li>
  <li><a href="/tds-return-filing-24q">TDS return filing 24Q</a> - Form 24Q quarterly TDS returns and Form 16 issuance under Section 192 IT Act, including ESOP perquisite reporting.</li>
  <li><a href="/private-limited-company-compliance">Private Limited and LLP compliance</a> - Annual ROC filings, board meetings, statutory registers, and director compliance for the subsidiary.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for AI Companies</h2>
            <div class="content-text">
                
                <p>AI companies hiring in India navigate a denser statutory landscape than generic foreign employers due to IP, data, and GPU infrastructure considerations.</p>
<h3 style="color:var(--blue);margin-top:16px;">Governing Acts and Key Sections for AI</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Statute / Section</th><th>What It Governs</th></tr></thead>
  <tbody>
    <tr><td>Copyright Act 1957 - Section 14</td><td>Exclusive rights in literary works including computer programs (code, source files, model serialisation formats).</td></tr>
    <tr><td>Copyright Act 1957 - Section 17(c)</td><td>Default rule - work made in course of employment is owned by employer.</td></tr>
    <tr><td>Copyright Act 1957 - Section 19</td><td>Assignment of copyright must be in writing - critical for foundation model work transferred to foreign parent.</td></tr>
    <tr><td>Patents Act 1970 - Section 3(k)</td><td>Mathematical methods, business methods, computer programs per se, and algorithms NOT patentable. Limits AI patent route in India.</td></tr>
    <tr><td>DPDP Act 2023</td><td>Consent-centric data protection framework. Penalties up to Rs 250 crore per serious violation.</td></tr>
    <tr><td>DPDP Rules 2025 - Rule 13</td><td>Transparency requirements for AI/ML processing. Automated decision-making notices.</td></tr>
    <tr><td>DPDP Rules 2025 - Rule 8</td><td>Reasonable security safeguards. Encryption, access controls, audit logging.</td></tr>
    <tr><td>DPDP Rules 2025 - Rule 15</td><td>Cross-border transfer rule - negative-list approach.</td></tr>
    <tr><td>Customs Act 1962 + Tariff</td><td>GPU import classification under HSN 8473 (parts of automatic data processing machines) or HSN 8542 (electronic integrated circuits).</td></tr>
    <tr><td>Section 17(2)(vi) IT Act 1961</td><td>ESOP perquisite tax for foreign parent grants to Indian employees.</td></tr>
    <tr><td>Section 80-IAC IT Act 1961</td><td>DPIIT-recognised eligible startups: tax holiday plus ESOP perquisite tax deferral up to 48 months.</td></tr>
    <tr><td>Section 192 IT Act 1961</td><td>TDS on salary including ESOP perquisite at slab rate.</td></tr>
    <tr><td>Section 92 / 92E IT Act 1961</td><td>Transfer pricing for international related-party transactions including AI R+D services.</td></tr>
    <tr><td>Section 16 IGST Act 2017</td><td>Zero-rated supply of services exported outside India - relevant for AI-as-a-service revenue routing.</td></tr>
  </tbody>
</table>
</div>
<h3 style="color:var(--blue);margin-top:24px;">Penalty Snapshot</h3>
<ul>
  <li>DPDP Act violation: Up to Rs 250 crore per serious violation under Schedule to DPDP Act 2023.</li>
  <li>IP assignment gap: Disputed ownership of foundation model deliverables; potential fundraising-diligence kill or valuation discount.</li>
  <li>ESOP TDS shortfall: Interest at 1.5 percent per month under Section 201(1A) IT Act. Failure to deduct can disallow employer expense.</li>
  <li>Schedule FA non-disclosure: Rs 10 lakh per year per asset under Black Money Act 2015 Sections 41 and 43.</li>
  <li>GPU customs misclassification: Differential duty plus penalty under Section 28 Customs Act 1962.</li>
  <li>Transfer pricing non-compliance: 2 percent of value of international transactions under Section 271AA IT Act.</li>
</ul>
<p style="margin-top:16px;">Authoritative reference: Statutory text available at <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">India Code (Ministry of Law and Justice)</a>. EPF compliance reference at <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">EPFO</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Real questions from AI founders, CTOs, and VPs of Research. Drawn from Google PAA, Patron client mandates, and AI ecosystem advisory work.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the best EOR for AI/ML hiring in India?</h3>
                        <div class="faq-expanded__a"><p>It depends on AI scope and seniority. For pilot or early hiring (1-5 ML engineers) with no foundation model work or ESOP advisory needed, India-only specialists like Husys (USD 99 PEPM) or Wisemonk (USD 99-500 PEPM) deliver fastest entry. For Series A-D AI-first companies with research engineers, foundation model work, or frontier-lab valuation ESOPs, Patron Accounting LLP's CA-led path delivers AI-specific compliance - foundation model IP framework, DPIIT Section 80-IAC eligibility, ESOP exercise-cliff structuring, GPU customs, DPDP Rule 13 - that EOR-only models cannot.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much do research engineers cost in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>Bangalore research engineer CTC ranges as of May 2026: junior (0-2 yr post-PhD) Rs 22-40 LPA, mid (3-7 yr) Rs 50-100 LPA, senior (7-12 yr) Rs 100-200 LPA, staff/principal at frontier labs Rs 200-400+ LPA. Statutory loading adds 15-20 percent: PF 12 percent of basic, ESI 3.25 percent where applicable, gratuity 4.81 percent accrual. EOR platform fees range USD 99-1,000+ PEPM. For a Rs 75 LPA mid-research-engineer through a USD 600 PEPM premium EOR, fully-loaded annual cost is approximately USD 100,000-110,000 vs USD 300,000-500,000 fully loaded for the same role at a US frontier lab.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can my Indian engineers work on foundation model training?</h3>
                        <div class="faq-expanded__a"><p>Yes, with appropriate IP framework and DPDP scope. Foundation model work creates novel IP territory under Indian law. Copyright Act 1957 Section 17(c) default plus Section 19 written assignment cover code, fine-tune derivatives, research artefacts, and ancillary deliverables. Trade secret NDAs cover model architectures, training procedures, hyperparameters, unpublished research. Patents Act 1970 Section 3(k) limits patent route. Indian engineers can train, fine-tune, evaluate, and deploy foundation models with proper assignment chain to foreign parent. DPDP Rule 13 transparency applies to training data containing personal information.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is IP assigned for AI model weights in India?</h3>
                        <div class="faq-expanded__a"><p>Through a multi-instrument framework. Code is protected under Copyright Act 1957 Section 14 as computer program; ownership transfers to employer by default under Section 17(c); written assignment under Section 19 covers transfer to foreign parent. Model weights in trained form are typically treated as derivative works of code or as trade secrets. Patents Act 1970 Section 3(k) excludes algorithms; hardware-coupled inventions may still qualify. Patron combines all four protection routes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">GPU cluster setup in India - what are the import duties?</h3>
                        <div class="faq-expanded__a"><p>On-prem GPU procurement attracts approximately 30 percent loaded customs cost. Classification under HSN 8473 (parts of automatic data processing machines) or HSN 8542 (electronic integrated circuits) determines basic customs duty (typically 5-10 percent). IGST under Section 16 IGST Act 2017 adds 18 percent on landed value (CIF + customs duty). Social welfare surcharge adds 10 percent of basic customs duty. SEZ units can import duty-free for export-oriented work. The IndiaAI Mission (announced 2024) provides subsidised cloud GPU access - 10,000+ GPU pool ramping through 2026 for DPIIT-recognised eligible Indian AI startups, which avoids customs entirely.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Does DPDP Act 2023 affect AI training data in India?</h3>
                        <div class="faq-expanded__a"><p>Yes, materially. The DPDP Act 2023 with DPDP Rules 2025 (notified 13 November 2025) governs personal data processing including AI training and inference. Rule 13 specifically covers transparency requirements for AI/ML processing - automated decision-making notices, AI-driven output transparency, profiling disclosures. Rule 8 covers reasonable security safeguards. Rule 15 governs cross-border transfers via negative-list approach. Penalties up to Rs 250 crore per serious violation. Indian subsidiary typically operates as processor under foreign parent's Data Fiduciary role - requiring DPDP-compliant processor agreement.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">When should an AI startup set up an Indian subsidiary?</h3>
                        <div class="faq-expanded__a"><p>Several signals push toward Pvt Ltd subsidiary setup. Headcount above 10-15 - AI engineering scales fast and cost crossover from EOR makes entity overhead worthwhile. DPIIT Section 80-IAC eligibility - subsidiary required for IMB Certificate filing and tax holiday claim. Foreign parent ESOPs at frontier-lab valuations - cleaner administration through subsidiary with deferral structuring. Series B-D fundraising approach - diligence pack requires CA-signed certifications. SOC 2 / ISO 42001 audit - DPDP processor agreement and IP assignment chain typically need entity counterparty. GPU procurement on-prem - SEZ structuring possible via subsidiary.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Indian AI talent vs hiring in San Francisco - what is the cost arbitrage?</h3>
                        <div class="faq-expanded__a"><p>Indian AI engineers cost 14-25 percent of US frontier-lab fully-loaded equivalents. A mid-level applied ML engineer in Bangalore costs approximately USD 65,000-78,000 fully loaded; the same role at a US frontier lab costs USD 250,000-400,000. A senior research engineer in Bangalore costs approximately USD 215,000-230,000 fully loaded; the same role at a US frontier lab tier (Anthropic, Google DeepMind, OpenAI) costs USD 700,000-1,200,000+. The arbitrage is structurally largest at senior and staff tiers where US frontier-lab compensation has decoupled from broader US tech. At 25 Indian AI engineers, total annual savings vs US-equivalent hiring is approximately USD 4-6 million.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">AI company ke liye EOR India ka kaise istemaal kare?</h3>
                        <div class="faq-expanded__a"><p>Sabse pehle Patron Accounting ko +91 945 945 6700 par call kijiye ya WhatsApp message bhejiye. Discovery call free hoti hai (30 minute). Hum AI scope (research, applied ML, infrastructure) determine karte hain, foundation model IP scope, GPU plan, DPDP scope, aur ESOP structure map karte hain. Phir engagement letter sign hone ke baad Path A (1-2 weeks) ya Path B (subsidiary 4-6 weeks plus DPIIT 4-8 weeks parallel) shuru hota hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Does Patron handle full DPIIT Section 80-IAC and IndiaAI Mission applications?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron handles DPIIT recognition filing, IMB Certificate review, Section 80-IAC tax holiday claim, and ESOP perquisite tax deferral up to 48 months for eligible AI startups. IndiaAI Mission compute access application support is included for DPIIT-recognised eligible startups - giving access to subsidised GPU pool. Path B subsidiary setup runs in parallel with DPIIT recognition (4-8 weeks) so that ESOP exercises can route through Section 80-IAC deferral from Day 1. Detailed quote in the discovery call.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Does Patron handle foundation model IP framework?</strong> Yes - Copyright Act Sec 17/19 deeds, trade secret NDA framework, Patents Act Sec 3(k) navigation, parent IP team coordination.</p>
<p><strong>Does Patron support DPIIT Section 80-IAC AI startups?</strong> Yes - eligibility validation, IMB Certificate review, ESOP tax deferral structuring up to 48 months, tax holiday claim.</p>
<p><strong>Can Patron handle GPU customs and IndiaAI Mission applications?</strong> Yes - HSN classification, IGST calculation, SEZ structuring, IndiaAI Mission application support.</p>
<p><strong>Does Patron handle DPDP Rule 13 AI/ML processing requirements?</strong> Yes - processor agreement, transparency notices, security safeguards under Rule 8, cross-border monitoring under Rule 15.</p>
<p><strong>What is the cost of Patron Path A vs Path B for AI companies?</strong> Path A scope-based partnership fee approximately USD 14,000-30,000 per year depending on AI scope and headcount. Path B subsidiary approximately USD 12,000-20,000 setup plus USD 8,000-18,000 annual ongoing depending on IP framework intensity, ESOP volume, and DPDP scope. Detailed quote in discovery call.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Deadlines That Cannot Slip</h2>
            <div class="content-text">
                
                <p>AI compliance runs on hard, recurring deadlines. A single missed filing or unfiled exemption triggers penalty plus interest plus operational risk with the parent's foreign tax authority and the data fiduciary regulator.</p>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Compliance</th><th>Deadline</th><th>Penalty</th></tr></thead>
  <tbody>
    <tr><td>TDS on Salary (incl. ESOP perquisite)</td><td>7th of next month</td><td>1.5 percent monthly interest under Section 201(1A); disallowance under Section 40(a)(ia)</td></tr>
    <tr><td>PF (EPF)</td><td>15th of next month</td><td>12 percent annual interest under Section 7Q; damages 5 to 25 percent under Section 14B EPF Act</td></tr>
    <tr><td>ESI</td><td>15th of next month</td><td>12 percent annual interest; up to 6 months imprisonment under Section 85 ESI Act</td></tr>
    <tr><td>Form 24Q (TDS Return)</td><td>Quarterly: 31 July, 31 Oct, 31 Jan, 31 May</td><td>Late fee Rs 200 per day under Section 234E; penalty up to Rs 1 lakh under Section 271H</td></tr>
    <tr><td>Schedule FA Disclosure (foreign ESOP)</td><td>Annual (with ITR)</td><td>Rs 10 lakh per year per asset under Black Money Act 2015 Sections 41 and 43</td></tr>
    <tr><td>FMV Refresh for ESOP Exercise</td><td>Max 180 days per Rule 3(8) IT Rules</td><td>Disputed perquisite valuation; TDS shortfall exposure</td></tr>
    <tr><td>Form 3CEB Transfer Pricing (AI R+D)</td><td>Annual (with ITR)</td><td>2 percent of international transaction value under Section 271AA IT Act</td></tr>
    <tr><td>DPDP Compliance (Rule 8 / 13)</td><td>Continuous</td><td>Up to Rs 250 crore per serious violation under DPDP Act 2023</td></tr>
  </tbody>
</table>
</div>
<p style="margin-top:16px;"><strong>Talk to Patron's CA-led AI Team:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> | <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20an%20AI-tuned%20India%20hiring%20cost%20model%20and%20IP%20review." target="_blank">WhatsApp +91 945 945 6700</a> | <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20EOR%20India%20for%20AI%20Companies&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20EOR%20India%20for%20AI%20Companies%20services%20and%20would%20like%20a%20discovery%20call%20to%20discuss%20our%20talent%20profile%20mix%2C%20IP%20framework%2C%20and%20ESOP%20structure.%0A%0AThank%20you.">Email contact@patronaccounting.com</a>. Free 30-minute discovery call. We map talent profiles, IP framework, GPU plan, DPDP scope, and ESOP structure.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Map Your AI Scope, Talent Profile, and ESOP Structure. Then Talk to a CA.</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>AI companies hiring in India access world-class talent at structural cost arbitrage that no other geographic move matches in 2026. A senior research engineer costs 20 percent of a US frontier-lab equivalent. A staff applied ML engineer costs 25-30 percent. The math is decisive at the team level: 25 Indian AI engineers cost what 4-5 US frontier-lab engineers cost.</p>
<p>But the savings are conditional on getting the compliance footprint right. Foundation model IP must be assigned cleanly under Copyright Act 1957 Section 17/19. ESOP exercise cliffs at frontier-lab valuations require Section 80-IAC deferral structuring or Section 192(1A) employer-pays mechanisms. DPDP Rule 13 governs AI/ML processing transparency. GPU procurement decisions interact with Customs Act 1962 and SEZ frameworks. DPIIT Section 80-IAC unlocks tax holidays and ESOP deferrals worth crores per researcher. None of this is generic EOR scope.</p>
<p>Patron Accounting LLP is the CA-led alternative built for the AI operational footprint - three talent profiles (research, applied ML, infrastructure) each with their own compliance layer; Path A partnership for early hiring and Path B Pvt Ltd subsidiary for sustained scale.</p>
<p>10,000+ Businesses Served | 4.9 Google Rating | 75-85% Cost vs US Frontier | IP-Aware (Copyright Sec 17/19 + Patents 3(k))</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20an%20AI-tuned%20India%20hiring%20cost%20model%20and%20IP%20review." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20EOR%20India%20for%20AI%20Companies&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20EOR%20India%20for%20AI%20Companies%20services%20and%20would%20like%20a%20discovery%20call%20to%20discuss%20our%20talent%20profile%20mix%2C%20IP%20framework%2C%20and%20ESOP%20structure.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Compliance Services That Pair With EOR India for AI Companies</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Bundle EOR with Pvt Ltd setup, payroll, FDI compliance, and statutory filings from Patron Accounting for an end-to-end India compliance stack.</p>
      
            <div class="pa-city-block">
                    <div class="pa-block-title">Related Services from Patron Accounting</div>
                    <div class="pa-block-sub">End-to-end CA-led backbone for EOR India for AI Companies</div>
                    <div class="pa-cross-grid">
                        <a href="/eor-india-engineering-team" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR Engineering Team</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/eor-india-for-fintechs" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR for Fintech</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/eor-india-customer-support-team" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR Customer Support</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/fdi-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">India</div></div></a>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 07 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 07 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months or whenever AI/ML salary bands shift, DPDP Rule 13 amendments are notified, IndiaAI Mission program changes occur, GPU customs rates revise, Section 80-IAC eligibility updates, ESOP perquisite tax rules amend, Indian Patents Act Section 3(k) judicial interpretation shifts, or Income Tax Act 2025 transitions occur. Last reviewer: CA & CS Team, Patron Accounting LLP.</p>
        </div>
    </div>
</section>



</main>


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION - Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '{{ env("GOOGLE_PLACES_API_KEY") }}',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '{{ env("PATRON_GOOGLE_PLACE_ID") }}',               // Patron Accounting's Google Place ID
        // Fallback static reviews (shown if API fails or key not set)
        fallbackReviews: [
            {
                author_name: "Subhendu Mishra",
                profile_photo_url: "",
                rating: 5,
                text: "I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Rajib Dutta",
                profile_photo_url: "",
                rating: 5,
                text: "I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Nishikant Gurav",
                profile_photo_url: "",
                rating: 5,
                text: "Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Nikhil Nimbhorkar",
                profile_photo_url: "",
                rating: 5,
                text: "Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.",
                relative_time_description: "4 months ago"
            },
            {
                author_name: "Sameer Mehta",
                profile_photo_url: "",
                rating: 5,
                text: "I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Preeti Singh Rathor",
                profile_photo_url: "",
                rating: 5,
                text: "From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Anita Gaur",
                profile_photo_url: "",
                rating: 5,
                text: "Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.",
                relative_time_description: "5 months ago"
            },
            {
                author_name: "Pankaj Arvikar",
                profile_photo_url: "",
                rating: 5,
                text: "I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Sunny Ashpal",
                profile_photo_url: "",
                rating: 5,
                text: "Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.",
                relative_time_description: "6 months ago",
                role: "Director - Demandify Media",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
            }
        ]
    };

    // ============================================
    // HELPER: Generate star SVGs
    // ============================================
    function starsHTML(rating) {
        let s = '';
        for (let i = 0; i < 5; i++) {
            s += i < rating
                ? '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>'
                : '<svg viewBox="0 0 24 24" style="opacity:0.2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
        }
        return s;
    }

    // ============================================
    // HELPER: Avatar color based on name
    // ============================================
    const avatarColors = ['', 'blue', 'teal', 'purple'];
    function avatarClass(index) {
        return avatarColors[index % avatarColors.length];
    }

    // ============================================
    // RENDER: Build card HTML for a review
    // ============================================
    function buildVideoCard(review) {
        return `
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="${review.photoUrl || ''}">
                        <source src="${review.videoUrl}" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="testi-star-badge">${starsHTML(review.rating)}</div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar">
                        ${review.photoUrl ? `<img src="${review.photoUrl}" alt="${review.author_name}">` : review.author_name.charAt(0)}
                    </div>
                    <div>
                        <div class="testi-name">${review.author_name}</div>
                        ${review.role ? `<div class="testi-role">${review.role}</div>` : ''}
                    </div>
                </div>
            </div>
        </div>`;
    }

    function buildQuoteCard(review, index) {
        const hasPhoto = review.profile_photo_url && review.profile_photo_url !== '';
        const initial = review.author_name ? review.author_name.charAt(0).toUpperCase() : '?';
        const colorClass = avatarClass(index);

        return `
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <p class="testi-quote-text">${review.text || ''}</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ${colorClass}">
                            ${hasPhoto ? `<img src="${review.profile_photo_url}" alt="${review.author_name}">` : initial}
                        </div>
                        <div>
                            <div class="testi-name">${review.author_name}</div>
                            ${review.role ? `<div class="testi-role">${review.role}</div>` : (review.relative_time_description ? `<div class="testi-role">${review.relative_time_description}</div>` : '')}
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars">${starsHTML(review.rating)}</div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>`;
    }

    // ============================================
    // RENDER: Populate slider with reviews
    // ============================================
        function renderReviews(reviews) {
const slider = document.getElementById('testimonialSlider');
const loading = document.getElementById('testiLoading');

let html = '';

reviews.forEach(function(review, i) {
    if (review.hasVideo && review.videoUrl) {
        html += buildVideoCard(review);
    } else {
        html += buildQuoteCard(review, i);
    }
});

// If slider already initialized destroy first
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}

slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';

// Re-initialize slick
initSlick(slider);


}

    function initSlick(slider) {
        if ($(slider).hasClass('slick-initialized')) return;
        $(slider).slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 900, settings: { slidesToShow: 2 } },
                { breakpoint: 600, settings: { slidesToShow: 1, autoplaySpeed: 3000 } }
            ]
        });
    }

    // ============================================
    // FETCH: Google Places API Reviews
    // ============================================
    function fetchGMBReviews() {
        // If API key not set, use fallback
        if (!CONFIG.googleApiKey || CONFIG.googleApiKey === '') {
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
            renderReviews(CONFIG.fallbackReviews);
            return;
        }

        // Google Places API requires server-side proxy due to CORS
        // Option 1: Use Google Maps JS API (requires loading Maps library)
        // Option 2: Use a server-side proxy endpoint
        // Below is the Google Maps JS API approach:

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${CONFIG.googleApiKey}&libraries=places&callback=initGMBReviews`;
        script.async = true;
        script.defer = true;
        script.onerror = function() {
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
            renderReviews(CONFIG.fallbackReviews);
        };
        document.head.appendChild(script);
    }

    // Global callback for Google Maps JS API
    window.initGMBReviews = function() {
        try {
            const service = new google.maps.places.PlacesService(document.createElement('div'));
            service.getDetails({
                placeId: CONFIG.placeId,
                fields: ['name', 'rating', 'reviews', 'user_ratings_total']
            }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews && place.reviews.length > 0) {
                    console.log(`[Testimonials] Fetched ${place.reviews.length} GMB reviews for ${place.name} (${place.rating}★, ${place.user_ratings_total} total)`);

                    // Merge: video testimonials first, then GMB reviews
                    const videoTestimonials = CONFIG.fallbackReviews.filter(r => r.hasVideo);
                    const gmbReviews = place.reviews.map(function(r) {
                        return {
                            author_name: r.author_name,
                            profile_photo_url: r.profile_photo_url,
                            rating: r.rating,
                            text: r.text,
                            relative_time_description: r.relative_time_description
                        };
                    });

                    renderReviews([...videoTestimonials, ...gmbReviews]);
                } else {
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
                    renderReviews(CONFIG.fallbackReviews);
                }
            });
        } catch (e) {
            console.log('[Testimonials] Error:', e);
            renderReviews(CONFIG.fallbackReviews);
        }
    };

    // ============================================
    // INIT
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        // Static cards already rendered - init Slick immediately
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
        }
        fetchGMBReviews();
    });
})();

// Video play/pause toggle for testimonial cards
function toggleTestiVideo(area) {
    const video = area.querySelector('video');
    if (!video) return;
    if (video.paused) {
        // Pause all other videos first
        document.querySelectorAll('.testi-video-area video').forEach(function(v) { v.pause(); v.closest('.testi-video-area').classList.remove('playing'); });
        video.play();
        area.classList.add('playing');
    } else {
        video.pause();
        area.classList.remove('playing');
    }
}

</script>

<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
     ============================================ -->
<script>
// Country Data (46 countries)
var countries = [
    { name: "India", code: "+91", flag: "\u{1F1EE}\u{1F1F3}", iso: "IN" },
    { name: "United States", code: "+1", flag: "\u{1F1FA}\u{1F1F8}", iso: "US" },
    { name: "United Kingdom", code: "+44", flag: "\u{1F1EC}\u{1F1E7}", iso: "GB" },
    { name: "United Arab Emirates", code: "+971", flag: "\u{1F1E6}\u{1F1EA}", iso: "AE" },
    { name: "Saudi Arabia", code: "+966", flag: "\u{1F1F8}\u{1F1E6}", iso: "SA" },
    { name: "Singapore", code: "+65", flag: "\u{1F1F8}\u{1F1EC}", iso: "SG" },
    { name: "Australia", code: "+61", flag: "\u{1F1E6}\u{1F1FA}", iso: "AU" },
    { name: "Canada", code: "+1", flag: "\u{1F1E8}\u{1F1E6}", iso: "CA" },
    { name: "Germany", code: "+49", flag: "\u{1F1E9}\u{1F1EA}", iso: "DE" },
    { name: "France", code: "+33", flag: "\u{1F1EB}\u{1F1F7}", iso: "FR" },
    { name: "Japan", code: "+81", flag: "\u{1F1EF}\u{1F1F5}", iso: "JP" },
    { name: "China", code: "+86", flag: "\u{1F1E8}\u{1F1F3}", iso: "CN" },
    { name: "South Korea", code: "+82", flag: "\u{1F1F0}\u{1F1F7}", iso: "KR" },
    { name: "Brazil", code: "+55", flag: "\u{1F1E7}\u{1F1F7}", iso: "BR" },
    { name: "South Africa", code: "+27", flag: "\u{1F1FF}\u{1F1E6}", iso: "ZA" },
    { name: "Nigeria", code: "+234", flag: "\u{1F1F3}\u{1F1EC}", iso: "NG" },
    { name: "Kenya", code: "+254", flag: "\u{1F1F0}\u{1F1EA}", iso: "KE" },
    { name: "Malaysia", code: "+60", flag: "\u{1F1F2}\u{1F1FE}", iso: "MY" },
    { name: "Indonesia", code: "+62", flag: "\u{1F1EE}\u{1F1E9}", iso: "ID" },
    { name: "Thailand", code: "+66", flag: "\u{1F1F9}\u{1F1ED}", iso: "TH" },
    { name: "Vietnam", code: "+84", flag: "\u{1F1FB}\u{1F1F3}", iso: "VN" },
    { name: "Philippines", code: "+63", flag: "\u{1F1F5}\u{1F1ED}", iso: "PH" },
    { name: "Bangladesh", code: "+880", flag: "\u{1F1E7}\u{1F1E9}", iso: "BD" },
    { name: "Pakistan", code: "+92", flag: "\u{1F1F5}\u{1F1F0}", iso: "PK" },
    { name: "Sri Lanka", code: "+94", flag: "\u{1F1F1}\u{1F1F0}", iso: "LK" },
    { name: "Nepal", code: "+977", flag: "\u{1F1F3}\u{1F1F5}", iso: "NP" },
    { name: "Qatar", code: "+974", flag: "\u{1F1F6}\u{1F1E6}", iso: "QA" },
    { name: "Kuwait", code: "+965", flag: "\u{1F1F0}\u{1F1FC}", iso: "KW" },
    { name: "Bahrain", code: "+973", flag: "\u{1F1E7}\u{1F1ED}", iso: "BH" },
    { name: "Oman", code: "+968", flag: "\u{1F1F4}\u{1F1F2}", iso: "OM" },
    { name: "New Zealand", code: "+64", flag: "\u{1F1F3}\u{1F1FF}", iso: "NZ" },
    { name: "Ireland", code: "+353", flag: "\u{1F1EE}\u{1F1EA}", iso: "IE" },
    { name: "Netherlands", code: "+31", flag: "\u{1F1F3}\u{1F1F1}", iso: "NL" },
    { name: "Italy", code: "+39", flag: "\u{1F1EE}\u{1F1F9}", iso: "IT" },
    { name: "Spain", code: "+34", flag: "\u{1F1EA}\u{1F1F8}", iso: "ES" },
    { name: "Switzerland", code: "+41", flag: "\u{1F1E8}\u{1F1ED}", iso: "CH" },
    { name: "Sweden", code: "+46", flag: "\u{1F1F8}\u{1F1EA}", iso: "SE" },
    { name: "Russia", code: "+7", flag: "\u{1F1F7}\u{1F1FA}", iso: "RU" },
    { name: "Mexico", code: "+52", flag: "\u{1F1F2}\u{1F1FD}", iso: "MX" },
    { name: "Egypt", code: "+20", flag: "\u{1F1EA}\u{1F1EC}", iso: "EG" },
    { name: "Turkey", code: "+90", flag: "\u{1F1F9}\u{1F1F7}", iso: "TR" },
    { name: "Israel", code: "+972", flag: "\u{1F1EE}\u{1F1F1}", iso: "IL" },
    { name: "Hong Kong", code: "+852", flag: "\u{1F1ED}\u{1F1F0}", iso: "HK" },
    { name: "Taiwan", code: "+886", flag: "\u{1F1F9}\u{1F1FC}", iso: "TW" },
    { name: "Myanmar", code: "+95", flag: "\u{1F1F2}\u{1F1F2}", iso: "MM" },
    { name: "Afghanistan", code: "+93", flag: "\u{1F1E6}\u{1F1EB}", iso: "AF" }
];

var selectedCountry = countries[0]; // Default: India

function populateCountries(filter) {
    filter = filter || '';
    var container = document.getElementById('countryOptions');
    if (!container) return;
    container.innerHTML = '';
    var filtered = filter
        ? countries.filter(function(c) { return c.name.toLowerCase().indexOf(filter.toLowerCase()) !== -1 || c.code.indexOf(filter) !== -1; })
        : countries;
    filtered.forEach(function(country) {
        var option = document.createElement('div');
        option.className = 'country-option' + (country.iso === selectedCountry.iso ? ' active' : '');
        option.innerHTML = '<span class="flag-emoji">' + country.flag + '</span><span class="country-name">' + country.name + '</span><span class="dial-code">' + country.code + '</span>';
        option.onclick = function(e) { e.stopPropagation(); selectCountry(country); };
        container.appendChild(option);
    });
}

function selectCountry(country) {
    selectedCountry = country;
    document.getElementById('selectedFlag').textContent = country.flag;
    document.getElementById('selectedCode').textContent = country.code;
    document.getElementById('countryCodeDropdown').classList.remove('open');
    document.getElementById('countrySearchInput').value = '';
    populateCountries();
    document.getElementById('phoneNumberInput').focus();
}

function toggleCountryDropdown(event) {
    event.stopPropagation();
    var dropdown = document.getElementById('countryCodeDropdown');
    var isOpen = dropdown.classList.contains('open');
    if (isOpen) {
        dropdown.classList.remove('open');
    } else {
        dropdown.classList.add('open');
        document.getElementById('countrySearchInput').value = '';
        populateCountries();
        setTimeout(function() { document.getElementById('countrySearchInput').focus(); }, 50);
    }
}

function filterCountries(value) { populateCountries(value); }

// Close dropdown on outside click
document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('countryCodeDropdown');
    if (dropdown && !dropdown.contains(e.target)) { dropdown.classList.remove('open'); }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { document.getElementById('countryCodeDropdown').classList.remove('open'); }
});

// Form Validation
function clearFieldError(fieldObj) {
    fieldObj.classList.remove('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent) { var errMsg = parent.querySelector('.field-error-msg'); if (errMsg) errMsg.remove(); }
}

function setFieldError(fieldObj, message) {
    fieldObj.classList.add('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent && !parent.querySelector('.field-error-msg')) {
        var errDiv = document.createElement('div');
        errDiv.className = 'field-error-msg';
        errDiv.textContent = message;
        parent.appendChild(errDiv);
    }
}

// ── Phone Validation ──────────────────────────────────────────
function validatePhone(val, dialCode) {
    val = val.replace(/[\s\-().]/g, '');
    if (!val) {
        return { valid: false, message: 'Phone number is required' };
    }
    if (dialCode === '+91') {
        if (!/^[6-9][0-9]{9}$/.test(val)) {
            if (val.length !== 10) {
                return { valid: false, message: 'Enter a valid 10-digit Indian mobile number' };
            }
            return { valid: false, message: 'Indian mobile numbers must start with 6, 7, 8, or 9' };
        }
        return { valid: true };
    }
    if (!/^[0-9]{7,15}$/.test(val)) {
        return { valid: false, message: 'Enter a valid phone number (7-15 digits)' };
    }
    return { valid: true };
}

function validatePhoneOnBlur(input) {
    var val = input.value.trim();
    var dialCode = (selectedCountry && selectedCountry.code) ? selectedCountry.code : '+91';
    var result = validatePhone(val, dialCode);
    var errorEl = document.getElementById('phoneError');
    var groupEl = document.getElementById('phoneGroup');
    if (val === '') return;
    if (!result.valid) {
        groupEl.classList.add('input-error');
        errorEl.textContent = result.message;
        errorEl.style.display = 'block';
    } else {
        groupEl.classList.remove('input-error');
        errorEl.style.display = 'none';
    }
}
// ─────────────────────────────────────────────────────────────

function validateConsultationForm() {
    var isValid = true;

    var nameField = document.getElementById('consultFullName');
    if (!nameField.value.trim()) { setFieldError(nameField, 'Full name is required'); isValid = false; }

    var phoneInput = document.getElementById('phoneNumberInput');
       var phoneVal = phoneInput.value.trim();
    var phoneResult = validatePhone(phoneInput.value.trim(), selectedCountry ? selectedCountry.code : '+91');
    if (!phoneResult.valid) {
        setFieldError(phoneInput, phoneResult.message);
        document.getElementById('phoneGroup').classList.add('input-error');
        document.getElementById('phoneError').textContent = phoneResult.message;
        document.getElementById('phoneError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('phoneGroup').classList.remove('input-error');
        document.getElementById('phoneError').style.display = 'none';
    }

    var cityField = document.getElementById('consultCity');
    if (!cityField.value.trim()) { setFieldError(cityField, 'City is required'); isValid = false; }

    var serviceField = document.getElementById('consultService');
    if (!serviceField.value) { setFieldError(serviceField, 'Please select a service'); isValid = false; }

    if (isValid) {
        document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal.replace(/[\s\-().]/g, '');
        var serviceName = serviceField.options[serviceField.selectedIndex].text;
        document.getElementById('dealNameField').value = 'Website Enquiry - ' + serviceName;
        document.getElementById('pageSourceField').value = window.location.href;
        var btn = document.getElementById('formSubmitBtn');
        btn.disabled = true;
        btn.textContent = 'Submitting...';
        setTimeout(function() { btn.disabled = false; btn.innerHTML = 'Get Free Quote \u2192'; }, 6000);
    }
    return isValid;
}

// Success state handler (Bigin iframe load)
window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
    // Auto-embed page URL in form
    var pageSourceField = document.getElementById('pageSourceField');
    if (pageSourceField) { pageSourceField.value = window.location.href; }
    var iframe = document.getElementById('hidden208810000001209168Frame');
    if (iframe) {
        iframe.addEventListener('load', function() {
            try {
                var iframeDoc = this.contentWindow.document;
                if (iframeDoc.body && iframeDoc.body.childElementCount !== 0) { showSuccessState(); }
            } catch (error) { showSuccessState(); }
        });
    }
});

function showSuccessState() {
    var formCard = document.getElementById('consultationFormCard');
    if (formCard) {
        formCard.innerHTML =
            '<div class="form-success">' +
                '<div class="form-success-icon">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg>' +
                '</div>' +
                '<h3>Thank You!</h3>' +
                '<p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p>' +
            '</div>';
    }
}
</script>

<script>
// Bigin Mandatory Fields Validation (from Bigin source code)
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');

function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                isReturn = false;
            }
        }
    }
    if(isReturn) {
        document.getElementById('formSubmitBtn').disabled = true;
    }
    return isReturn;
}

// Bigin iframe success handler (overrides our custom one above via event delegation)
document.getElementById('hidden208810000001209168Frame').addEventListener('load', function () {
    try {
        var doc = arguments[0].currentTarget.contentWindow.document;
        if(doc.body && doc.body.childElementCount !== 0) {
            showSuccessState();
        }
    } catch (error) {
        showSuccessState();
    }
});
</script>

<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->
<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

<script>

</script>

<script>
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll — only tracks sections that have a matching TOC
// button, keeps the active pill scrolled into view, and stays correct at the
// very bottom of the page.
(function () {
    var tocBtns = Array.prototype.slice.call(document.querySelectorAll('.toc-btn'));
    var wrapper = document.getElementById('tocWrapper');
    if (!tocBtns.length) return;
    var entries = tocBtns.map(function (btn) {
        var id = (btn.getAttribute('href') || '').replace('#', '');
        return { btn: btn, section: document.getElementById(id) };
    }).filter(function (e) { return e.section; });
    if (!entries.length) return;
    var OFFSET = 200;
    var ticking = false;
    function setActive(entry) {
        tocBtns.forEach(function (b) { b.classList.remove('active'); });
        if (!entry) return;
        entry.btn.classList.add('active');
        if (wrapper) {
            var left = entry.btn.offsetLeft;
            var right = left + entry.btn.offsetWidth;
            if (left < wrapper.scrollLeft) {
                wrapper.scrollTo({ left: left - 16, behavior: 'smooth' });
            } else if (right > wrapper.scrollLeft + wrapper.clientWidth) {
                wrapper.scrollTo({ left: right - wrapper.clientWidth + 16, behavior: 'smooth' });
            }
        }
    }
    function onScroll() {
        ticking = false;
        var y = window.pageYOffset + OFFSET;
        var active = entries[0];
        for (var i = 0; i < entries.length; i++) {
            if (entries[i].section.offsetTop <= y) { active = entries[i]; }
        }
        if ((window.innerHeight + window.pageYOffset) >= (document.documentElement.scrollHeight - 2)) {
            active = entries[entries.length - 1];
        }
        setActive(active);
    }
    window.addEventListener('scroll', function () {
        if (!ticking) { window.requestAnimationFrame(onScroll); ticking = true; }
    }, { passive: true });
    window.addEventListener('resize', onScroll);
    onScroll();
})();
</script>

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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection