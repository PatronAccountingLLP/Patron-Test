@extends('layouts.app')
@section('title', $page->title ?? 'GST Registration in India | Expert CA Assistance — Patron Accounting')
   
    <meta name="description" content="GST Registration in India from ₹999. Get your GSTIN in 3 working days with expert CA assistance. 10,000+ businesses served. 4.9★ Google Rating.">
@push('styles')
 
    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <style>
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
        body { font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif; font-size: 16px; line-height: 1.6; color: var(--text-primary); background: var(--white); }

        h2 { font-size: clamp(26px, 3vw, 32px); font-weight: 800; color: var(--blue); margin-bottom: 24px; line-height: 1.25; }
        h3 { color: var(--blue); font-size: 1.5rem; }
        p { font-family: 'Barlow', sans-serif; color: var(--text-secondary); }
        section a { color: var(--orange); text-decoration: none; font-weight: 500; transition: color 0.2s; }
        section a:hover { color: var(--orange-dark); text-decoration: underline; }

        /* Custom list styling */
        main section ul { list-style: none; padding-left: 0; margin: 0; }
        main section ul li { display: flex; align-items: flex-start; gap: 12px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 10px; }
        main section ul li::before {
            content: ""; width: 22px; height: 22px; background: var(--orange-light); border-radius: 50%; flex-shrink: 0; margin-top: 1px;
            display: flex; align-items: center; justify-content: center;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' stroke='%23ff6600' stroke-width='3' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5 13l4 4L19 7'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: center; background-size: 12px;
        }

        /* Table styling */
        main section tr, main section td { border: 1px solid #E8712C !important; padding: 20px; font-size: 16px; }
        main section table { width: 100% !important; font-family: 'Barlow', sans-serif; }
        table thead tr th, table tr:first-child { border: 1px solid #E8712C !important; color: #fff !important; font-size: 20px; font-weight: 700; background-color: #14365F !important; }
        table thead tr th { border: 1px solid #E8712C !important; }

        /* ===== HERO SECTION ===== */
        .hero-section { position: relative; background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%); overflow: hidden; }
        .hero-badge { display: inline-flex; align-items: center; gap: 8px; background: var(--orange-light); padding: 8px 16px; border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--orange); margin-bottom: 20px; }
        .hero-badge svg { width: 14px; height: 14px; }
        .private-registration-heading { font-weight: 700 !important; font-size: 48px !important; line-height: 110% !important; color: #14365F !important; margin-bottom: 1.5rem !important; }
        @media (max-width: 768px) { .private-registration-heading { font-size: 32px !important; } }

        .benefit-paragraph { font-weight: 400; margin-top: 5px; font-size: 1rem; line-height: 1.6; }
        .benefit-paragraph span { font-weight: 700; }

        .check-icon { width: 20px; height: 20px; display: flex; align-items: center; justify-content: center; background: rgba(16, 185, 129, 0.12); border-radius: 50%; flex-shrink: 0; }
        .check-icon svg { width: 12px; height: 12px; color: var(--green); }

        /* Hero CTA Buttons */
        .hero-cta { display: flex; gap: 14px; margin-bottom: 36px; flex-wrap: wrap; }
        .btn-video { display: inline-flex; align-items: center; gap: 10px; padding: 12px 20px; background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md); font-size: 14px; font-weight: 600; color: var(--text-primary); cursor: pointer; transition: all 0.25s ease; text-decoration: none; }
        .btn-video:hover { border-color: var(--orange); background: var(--orange-lighter); color: var(--orange); }
        .btn-video .play-circle { width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; background: var(--orange); border-radius: 50%; }
        .btn-video .play-circle svg { width: 10px; height: 10px; color: var(--white); margin-left: 1px; }
        .btn-sample { display: inline-flex; align-items: center; gap: 8px; padding: 12px 20px; background: transparent; border: 1.5px solid var(--gray-200); border-radius: var(--radius-md); font-size: 14px; font-weight: 600; color: var(--text-secondary); cursor: pointer; transition: all 0.25s ease; text-decoration: none; }
        .btn-sample:hover { border-color: var(--blue); background: var(--blue-lighter); color: var(--blue); }
        .btn-sample svg { width: 16px; height: 16px; }

        /* Trust Section */
        .trust-section { display: flex; flex-direction: column; gap: 20px; }
        .trust-row { display: flex; flex-wrap: wrap; gap: 28px; }
        .trust-item { display: flex; align-items: center; gap: 10px; }
        .trust-icon { width: 38px; height: 38px; display: flex; align-items: center; justify-content: center; background: var(--gray-50); border-radius: var(--radius-sm); }
        .trust-icon svg { width: 18px; height: 18px; color: var(--blue); }
        .trust-text { font-size: 12px; color: var(--text-muted); line-height: 1.3; }
        .trust-text strong { display: block; font-size: 14px; font-weight: 700; color: var(--text-primary); }

        /* Google Rating */
        .google-rating { display: inline-flex; align-items: center; gap: 12px; background: var(--white); border: 1px solid var(--gray-200); padding: 10px 16px; border-radius: var(--radius-md); }
        .rating-content { display: flex; flex-direction: column; gap: 2px; }
        .rating-stars { display: flex; align-items: center; gap: 2px; }
        .rating-stars svg { width: 14px; height: 14px; color: var(--gold); fill: var(--gold); }
        .rating-score { font-size: 13px; font-weight: 700; color: var(--text-primary); margin-left: 4px; }
        .rating-count { font-size: 11px; color: var(--text-muted); }

        /* ===== FORM CARD ===== */
        .form-card { background: var(--white); border-radius: var(--radius-xl); padding: 32px; box-shadow: var(--shadow-lg); border: 1px solid var(--gray-100); position: relative; }
        .form-card::before { content: ''; position: absolute; top: 0; left: 28px; right: 28px; height: 3px; background: linear-gradient(90deg, var(--orange), var(--blue)); border-radius: 0 0 3px 3px; }
        .form-header { text-align: center; margin-bottom: 24px; }
        .form-title { font-size: 20px; font-weight: 700; color: var(--blue); margin-bottom: 4px; }
        .form-subtitle { font-size: 13px; color: var(--text-muted); }
        .form-input { width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px; color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent; border-radius: var(--radius-md); transition: all 0.2s ease; }
        .form-input::placeholder { color: var(--gray-400); }
        .form-input:focus { outline: none; background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232, 113, 44, 0.08); }
        .phone-group { display: flex; background: var(--gray-50); border-radius: var(--radius-md); border: 1.5px solid transparent; overflow: hidden; transition: all 0.2s ease; }
        .phone-group:focus-within { background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232, 113, 44, 0.08); }
        .country-code { display: flex; align-items: center; gap: 6px; padding: 13px 12px; font-size: 14px; font-weight: 500; color: var(--text-secondary); border-right: 1px solid var(--gray-200); background: transparent; }
        .phone-group .form-input { background: transparent; border: none; box-shadow: none; }
        .btn-submit { width: 100%; padding: 14px 24px; font-family: 'Barlow', sans-serif; font-size: 15px; font-weight: 700; color: var(--white); background: var(--orange); border: none; border-radius: var(--radius-md); cursor: pointer; transition: all 0.25s ease; display: flex; align-items: center; justify-content: center; gap: 8px; }
        .btn-submit:hover { background: var(--orange-dark); transform: translateY(-1px); box-shadow: 0 6px 20px rgba(232, 113, 44, 0.3); }
        .form-footer { display: flex; justify-content: center; gap: 16px; margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--gray-100); }
        .form-footer-item { display: flex; align-items: center; gap: 5px; font-size: 11px; color: var(--text-muted); }
        .form-footer-item svg { width: 14px; height: 14px; color: var(--green); }

        /* ===== STATS BAR ===== */
        .stats-bar { background: var(--white); border-top: 1px solid var(--gray-100); border-bottom: 1px solid var(--gray-100); padding: 24px 0; }
        .stats-container { max-width: 1320px; margin: 0 auto; display: flex; justify-content: center; align-items: center; gap: 48px; flex-wrap: wrap; padding: 0 32px; }
        .stat-item { display: flex; align-items: center; gap: 12px; }
        .stat-icon { width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; background: var(--orange-light); border-radius: var(--radius-md); }
        .stat-icon svg { width: 20px; height: 20px; color: var(--orange); }
        .stat-content { display: flex; flex-direction: column; }
        .stat-value { font-size: 20px; font-weight: 800; color: var(--blue); line-height: 1.2; }
        .stat-label { font-size: 12px; color: var(--text-muted); }
        .certifications { display: flex; gap: 16px; padding-left: 32px; border-left: 1px solid var(--gray-200); }
        .cert-item { display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--text-muted); font-weight: 500; }
        .cert-item svg { width: 18px; height: 18px; }

        /* ===== TOC SECTION ===== */
        .toc-section { background: var(--gray-50); border-bottom: 1px solid var(--gray-200); padding: 20px 0; position: sticky; top: 0; z-index: 50; }
        .toc-container { max-width: 1320px; margin: 0 auto; padding: 0 32px; display: flex; align-items: center; }
        .toc-wrapper { display: flex; align-items: center; gap: 10px; overflow-x: auto; scrollbar-width: none; scroll-behavior: smooth; padding-bottom: 4px; }
        .toc-wrapper::-webkit-scrollbar { display: none; }
        .toc-btn { display: inline-flex; align-items: center; gap: 6px; padding: 10px 18px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 600; color: var(--text-secondary); background: var(--white); border: 1.5px solid var(--gray-200); border-radius: 50px; cursor: pointer; transition: all 0.25s ease; white-space: nowrap; text-decoration: none; }
        .toc-btn:hover { border-color: var(--orange); color: var(--orange); background: var(--orange-lighter); }
        .toc-btn.active { background: var(--orange); border-color: var(--orange); color: var(--white); }
        .toc-arrow { border: none; cursor: pointer; font-size: 22px; width: 45px; height: 45px; border-radius: 50%; background: transparent; }
        .toc-arrow.left { margin-right: 8px; }
        .toc-arrow.right { margin-left: 8px; }

        /* ===== CONTENT SECTIONS ===== */
        .content-section { padding: 64px 32px; background: var(--white); }
        .content-section:nth-child(even) { background: var(--gray-50); }
        .content-container { max-width: 1320px; margin: 0 auto; }
        .section-container { max-width: 1320px; margin: 0 auto; }
        .section-container-wide { max-width: 1200px; margin: 0 auto; }
        .text-content { max-width: 900px; }
        .section-title { font-size: clamp(26px, 3vw, 32px); font-weight: 800; color: var(--blue); margin-bottom: 24px; line-height: 1.25; }
        .content-text { font-size: 15px; line-height: 1.8; color: var(--text-secondary); }
        .content-text p { margin-bottom: 16px; }
        .content-text strong { color: var(--text-primary); font-weight: 600; }
        .content-text a { color: var(--orange); text-decoration: none; font-weight: 500; }

        .section-eyebrow { display: inline-flex; align-items: center; gap: 8px; font-size: 13px; font-weight: 600; color: var(--orange); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px; }
        .section-eyebrow svg { width: 18px; height: 18px; }
        .section-subtitle { font-size: 15px; color: var(--text-muted); max-width: 600px; }
        .section-header { margin-bottom: 40px; }

        /* Two Column Layout */
        .two-column { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
        .column-content { max-width: 560px; }
        .column-image { display: flex; justify-content: center; align-items: center; }
        .image-wrapper { position: relative; width: 100%; max-width: 480px; }
        .image-wrapper img { width: 100%; height: auto; border-radius: var(--radius-lg); }
        @media (max-width: 1024px) { .two-column { grid-template-columns: 1fr; gap: 40px; } .column-content { max-width: 100%; } }

        /* Highlight Box */
        .highlight-box { background: var(--orange-lighter); border-left: 4px solid var(--orange); padding: 16px 20px; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: 20px 0; }
        .highlight-box p { margin: 0; font-size: 14px; color: var(--text-secondary); }

        /* Illustration Placeholder */
        .illustration-placeholder { width: 100%; max-width: 420px; aspect-ratio: 4/3; background: linear-gradient(135deg, var(--blue-lighter) 0%, var(--orange-lighter) 100%); border-radius: var(--radius-xl); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 40px; position: relative; overflow: hidden; }
        .illustration-icon { width: 80px; height: 80px; background: var(--white); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: var(--shadow-md); }
        .illustration-icon svg { width: 40px; height: 40px; color: var(--blue); }
        .illustration-badge { background: var(--white); padding: 12px 20px; border-radius: var(--radius-md); box-shadow: var(--shadow-md); text-align: center; }
        .illustration-badge span { display: block; font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; }
        .illustration-badge strong { font-size: 14px; font-weight: 700; color: var(--blue); }

        /* ===== CARDS GRID ===== */
        .cards-section { margin-top: 48px; }
        .cards-header { margin-bottom: 32px; }
        .cards-title { font-size: clamp(22px, 2.5vw, 28px); font-weight: 800; color: var(--blue); margin-bottom: 8px; }
        .cards-subtitle { font-size: 14px; color: var(--text-muted); }
        .cards-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .content-card { background: var(--white); border: 1px solid var(--gray-200); border-radius: var(--radius-lg); padding: 28px; transition: all 0.25s ease; position: relative; }
        .content-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); transform: translateY(-2px); }
        .content-card::before { content: ''; position: absolute; top: 0; left: 24px; right: 24px; height: 3px; background: var(--orange); border-radius: 0 0 3px 3px; opacity: 0; transition: opacity 0.25s ease; }
        .content-card:hover::before { opacity: 1; }
        .card-icon { width: 48px; height: 48px; background: var(--blue-lighter); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 18px; }
        .card-icon svg { width: 24px; height: 24px; color: var(--blue); }
        .card-number { position: absolute; top: 20px; right: 20px; width: 28px; height: 28px; background: var(--gray-100); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 700; color: var(--text-muted); }
        .content-card:hover .card-number { background: var(--orange-light); color: var(--orange); }
        .card-title { font-size: 16px; font-weight: 700; color: var(--blue); margin-bottom: 12px; line-height: 1.3; }
        .card-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }
        @media (max-width: 1024px) { .cards-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 768px) { .cards-grid { grid-template-columns: 1fr; } }

        /* ===== ELIGIBILITY / CRITERIA ===== */
        .eligibility-section { padding: 72px 32px; background: var(--blue-lighter); position: relative; }
        .eligibility-section::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, var(--orange), var(--blue)); }
        .criteria-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .criteria-card { background: var(--white); border-radius: var(--radius-lg); padding: 28px; border: 1px solid var(--gray-200); border-left: 4px solid var(--orange); transition: all 0.25s ease; }
        .criteria-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-3px); border-left-color: var(--blue); }
        @media (max-width: 1024px) { .criteria-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 768px) { .criteria-grid { grid-template-columns: 1fr; } .eligibility-section { padding: 56px 20px; } }

        /* ===== STEPS SECTION ===== */
        .steps-section { padding: 72px 32px; background: var(--gray-50); }
        .steps-container { display: flex; flex-direction: column; gap: 32px; }
        .step-card { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; background: var(--white); border-radius: var(--radius-xl); padding: 40px; border: 1px solid var(--gray-200); transition: all 0.3s ease; }
        .step-card:hover { box-shadow: var(--shadow-lg); }
        .step-card:nth-child(even) { direction: rtl; }
        .step-card:nth-child(even) > * { direction: ltr; }
        .step-badge { display: inline-flex; align-items: center; gap: 6px; background: var(--orange); color: var(--white); padding: 6px 14px; border-radius: 50px; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 16px; width: fit-content; }
        .step-title { font-size: clamp(20px, 2.5vw, 24px); font-weight: 800; color: var(--blue); margin-bottom: 14px; line-height: 1.3; }
        .step-description { font-size: 15px; color: var(--text-secondary); line-height: 1.75; }
        .step-highlights { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 18px; }
        .highlight-tag { display: inline-flex; align-items: center; gap: 6px; padding: 6px 12px; background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 50px; font-size: 12px; font-weight: 600; color: var(--text-muted); }
        .highlight-tag svg { width: 12px; height: 12px; color: var(--green); }
        .step-illustration { width: 100%; max-width: 280px; aspect-ratio: 1; background: linear-gradient(135deg, var(--orange-lighter) 0%, var(--blue-lighter) 100%); border-radius: var(--radius-xl); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 32px; position: relative; overflow: hidden; }
        .step-number-large { position: absolute; bottom: 16px; right: 20px; font-size: 64px; font-weight: 800; color: rgba(27, 54, 93, 0.06); line-height: 1; }
        .illustration-label { font-size: 13px; font-weight: 600; color: var(--text-muted); text-align: center; }
        @media (max-width: 900px) { .step-card { grid-template-columns: 1fr; gap: 32px; padding: 32px; } .step-card:nth-child(even) { direction: ltr; } .step-visual { order: -1; } .step-illustration { max-width: 240px; } }

        /* ===== CHECKLIST SECTION ===== */
        .checklist-section { padding: 72px 32px; background: var(--white); }
        .checklist-content { max-width: 800px; }
        .checklist-paragraphs p { font-size: 15px; color: var(--text-secondary); line-height: 1.8; margin-bottom: 16px; }
        .checklist-items { background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: var(--radius-lg); padding: 28px; }
        .checklist-items-title { font-size: 16px; font-weight: 700; color: var(--blue); margin-bottom: 18px; display: flex; align-items: center; gap: 10px; }
        .checklist-items-title svg { width: 20px; height: 20px; color: var(--orange); }
        .checklist-list { list-style: none; display: flex; flex-direction: column; gap: 12px; }
        .checklist-item { display: flex; align-items: flex-start; gap: 12px; font-size: 14px; color: var(--text-secondary); line-height: 1.6; }

        /* ===== WHY CHOOSE SECTION ===== */
        .why-choose-section { padding: 72px 32px; background: var(--gray-50); }
        .why-choose-header { text-align: center; margin-bottom: 48px; }
        .features-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .feature-card { background: var(--white); border: 1px solid var(--gray-200); border-radius: var(--radius-lg); padding: 28px; transition: all 0.25s ease; }
        .feature-card:hover { box-shadow: var(--shadow-md); border-color: var(--orange); transform: translateY(-2px); }
        .feature-icon { width: 52px; height: 52px; background: var(--orange-light); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 18px; }
        .feature-icon svg { width: 26px; height: 26px; color: var(--orange); }
        .feature-title { font-size: 17px; font-weight: 700; color: var(--blue); margin-bottom: 10px; }
        .feature-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }
        @media (max-width: 1024px) { .features-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 768px) { .features-grid { grid-template-columns: 1fr; } }

        /* ===== FEES SECTION ===== */
        .fee-structure-card { background: white; border: 1px solid #E4E5EA; }
        .fee-item, .cost-item { padding: 1rem 0; margin-bottom: 1rem; border-bottom: 1px solid var(--gray-100); }

        /* ===== REVIEWS CTA ===== */
        .reviews-cta { padding: 28px 32px; background: var(--blue); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px; }
        .reviews-cta-content { display: flex; align-items: center; gap: 16px; }
        .reviews-cta-icon { width: 48px; height: 48px; background: rgba(255,255,255,0.1); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; }
        .reviews-cta-icon svg { width: 24px; height: 24px; color: var(--white); }
        .reviews-cta-text h3 { font-size: 18px; font-weight: 700; color: var(--white); margin-bottom: 2px; }
        .reviews-cta-text p { font-size: 13px; color: rgba(255,255,255,0.7); margin: 0; }
        .btn-cta { display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700; color: var(--blue); background: var(--white); border: none; border-radius: var(--radius-md); cursor: pointer; transition: all 0.25s ease; text-decoration: none; }
        .btn-cta:hover { background: var(--orange-light); color: var(--orange); }

        /* ===== CTA BANNER ===== */
        .cta-banner-section { padding: 56px 32px; background: var(--gray-50); }
        .cta-banner { max-width: 700px; margin: 0 auto; text-align: center; }
        .cta-title { font-size: clamp(22px, 2.5vw, 28px); font-weight: 800; color: var(--blue); margin-bottom: 12px; }
        .btn-cta-primary { display: inline-flex; align-items: center; gap: 10px; padding: 14px 32px; font-family: 'Barlow', sans-serif; font-size: 15px; font-weight: 700; color: var(--white); background: var(--orange); border: none; border-radius: 50px; cursor: pointer; transition: all 0.25s ease; text-decoration: none; }
        .btn-cta-primary:hover { background: var(--orange-dark); transform: translateY(-2px); box-shadow: 0 8px 24px rgba(232, 113, 44, 0.35); color: white; }

        /* ===== ADDITIONAL BENEFIT CARD ===== */
        .additional-benefit-card { background: var(--white); border: 1px solid var(--gray-200); border-radius: var(--radius-lg); padding: 28px; transition: all 0.25s ease; }
        .additional-benefit-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); }

        /* ===== LOCATIONS ===== */
        .locations-section { padding: 72px 32px; background: var(--white); border-top: 1px solid var(--gray-200); }
        .locations-header { margin-bottom: 36px; }
        .locations-title { font-size: clamp(22px, 2.5vw, 28px); font-weight: 800; color: var(--blue); }
        .locations-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
        .location-card { display: flex; align-items: center; gap: 12px; padding: 16px; background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: var(--radius-md); text-decoration: none; transition: all 0.25s ease; }
        .location-card:hover { background: var(--orange-lighter); border-color: var(--orange); }
        .location-icon { width: 40px; height: 40px; background: var(--white); border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: var(--shadow-sm); }
        .location-icon svg { width: 20px; height: 20px; color: var(--orange); }
        .location-text { font-size: 13px; font-weight: 600; color: var(--text-primary); line-height: 1.4; }
        .location-card:hover .location-text { color: var(--orange); }
        @media (max-width: 1024px) { .locations-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 768px) { .locations-grid { grid-template-columns: 1fr; } }

        /* ===== FAQ ===== */
        .accordion-button:not(.collapsed)::after, .accordion-button::after { display: none !important; }
        .accordion-button:focus { border-color: transparent !important; box-shadow: none !important; }
        .accordion-button:not(.collapsed) { background-color: transparent !important; color: #14365F !important; }
        .accordion-button:not(.collapsed) .accordion-icon { transform: rotate(45deg); }

        /* ===== SCROLL MARGIN ===== */
        .content-section[id], section[id] { scroll-margin-top: 80px; }

        /* ===== ANIMATIONS ===== */
        @keyframes fadeIn { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        .hero-content > * { animation: fadeIn 0.5s ease forwards; }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .content-section { padding: 48px 20px; }
            .stats-container { flex-direction: column; gap: 20px; }
            .certifications { padding-left: 0; border-left: none; width: 100%; justify-content: center; padding-top: 16px; border-top: 1px solid var(--gray-200); }
            .reviews-cta { flex-direction: column; text-align: center; }
            .reviews-cta-content { flex-direction: column; }
            .hero-cta { flex-direction: column; }
        }

        @media (max-width: 576px) {
            .form-footer { flex-wrap: wrap; gap: 10px; }
        }

        /* Comparison table */
        .comparison-table th, .comparison-table td { padding: 16px; vertical-align: middle; }
    </style>
@endpush


@section('content')

<main>

<!-- ============================================
     HERO SECTION
     ============================================ -->
<section class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="hero-content pe-lg-5">
                    <div class="hero-badge">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Trusted by 10,000+ Businesses
                    </div>

                    <h1 class="display-5 fw-bold private-registration-heading">
                        GST Registration in India: Expert CA Assistance
                    </h1>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTIN in 3 Working Days</span> for Aadhaar-authenticated applicants</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting at just ₹999</span> — No hidden charges</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>98% First-Submission Approval Rate</span> — No REG-03 delays</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>4.9★ Google Rating</span> | 50,000+ Filings Completed | 15+ Years</p>
                        </div>
                    </div>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-cta-primary" style="text-decoration:none;">
                            📞 Call Now: +91 945 945 6700
                        </a>
                        <a href="#" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            Download GST Checklist
                        </a>
                    </div>

                    <!-- Trust Section -->
                    <div class="trust-section">
                        <div class="trust-row">
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div>
                                <div class="trust-text"><strong>15+ Years</strong>Industry Experience</div>
                            </div>
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                                <div class="trust-text"><strong>CA &amp; CS</strong>Certified Experts</div>
                            </div>
                        </div>
                        <div class="google-rating">
                            <div class="google-logo">
                                <svg viewBox="0 0 74 24" height="20"><path fill="#4285F4" d="M9.24 8.19v2.46h5.88c-.18 1.38-.64 2.39-1.34 3.1-.86.86-2.2 1.8-4.54 1.8-3.62 0-6.45-2.92-6.45-6.54s2.83-6.54 6.45-6.54c1.95 0 3.38.77 4.43 1.76L15.4 2.5C13.94 1.08 11.98 0 9.24 0 4.28 0 .11 4.04.11 9s4.17 9 9.13 9c2.68 0 4.7-.88 6.28-2.52 1.62-1.62 2.13-3.91 2.13-5.75 0-.57-.04-1.1-.13-1.54H9.24z"/><path fill="#EA4335" d="M25 6.19c-3.21 0-5.83 2.44-5.83 5.81 0 3.34 2.62 5.81 5.83 5.81s5.83-2.46 5.83-5.81c0-3.37-2.62-5.81-5.83-5.81zm0 9.33c-1.76 0-3.28-1.45-3.28-3.52 0-2.09 1.52-3.52 3.28-3.52s3.28 1.43 3.28 3.52c0 2.07-1.52 3.52-3.28 3.52z"/><path fill="#FBBC05" d="M53.58 7.49h-.09c-.57-.68-1.67-1.3-3.06-1.3C47.53 6.19 45 8.72 45 12c0 3.26 2.53 5.81 5.43 5.81 1.39 0 2.49-.62 3.06-1.32h.09v.81c0 2.22-1.19 3.41-3.1 3.41-1.56 0-2.53-1.12-2.93-2.07l-2.22.92c.64 1.54 2.33 3.43 5.15 3.43 2.99 0 5.52-1.76 5.52-6.05V6.49h-2.42v1zm-2.93 8.03c-1.76 0-3.1-1.5-3.1-3.52 0-2.05 1.34-3.52 3.1-3.52 1.74 0 3.1 1.5 3.1 3.54.01 2.03-1.36 3.5-3.1 3.5z"/><path fill="#4285F4" d="M58 .24h2.51v17.57H58z"/><path fill="#34A853" d="M68.26 15.52c-1.3 0-2.22-.59-2.82-1.76l7.77-3.21-.26-.66c-.48-1.3-1.96-3.7-4.97-3.7-2.99 0-5.48 2.35-5.48 5.81 0 3.26 2.46 5.81 5.76 5.81 2.66 0 4.2-1.63 4.84-2.57l-1.98-1.32c-.66.96-1.56 1.6-2.86 1.6zm-.18-7.15c1.03 0 1.91.53 2.2 1.28l-5.25 2.17c0-2.44 1.73-3.45 3.05-3.45z"/><path fill="#EA4335" d="M40.75 6.19c-3.21 0-5.83 2.44-5.83 5.81 0 3.34 2.62 5.81 5.83 5.81s5.83-2.46 5.83-5.81c0-3.37-2.62-5.81-5.83-5.81zm0 9.33c-1.76 0-3.28-1.45-3.28-3.52 0-2.09 1.52-3.52 3.28-3.52s3.28 1.43 3.28 3.52c0 2.07-1.52 3.52-3.28 3.52z"/></svg>
                            </div>
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

            <!-- Form Card -->
            <div class="col-lg-4">
                <div class="form-card">
                    <div class="form-header">
                        <h2 class="form-title">Request a Call Back</h2>
                        <p class="form-subtitle">Get expert advice within 30 minutes</p>
                    </div>
                    <div class='wf-parent row'  id='BiginWebToRecordFormParent208810000000579045' >
	           <div class='wf-wrapper ' id='BiginWebToRecordFormDiv208810000000579045'>
                    <form id='BiginWebToRecordForm208810000000579045' name='BiginWebToRecordForm208810000000579045' class='wf-form-component registration-form' data-ux-form-alignment='top' method='POST' enctype='multipart/form-data' target='hidden208810000000579045Frame' onSubmit='javascript:document.charset="UTF-8"; return validateForm208810000000579045()' accept-charset='UTF-8' >

                    <input type='text' style='display:none;' name='xnQsjsdp' value='795ef8f70f1c54b1a9e83bcfd6fafa58a8d2b1c9dce286f0029e1130b56a6785'/>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                    <input type='text' style='display:none;' name='xmIwtLD' value='68068a589747e0631f4703c9e56d44219029e87402543e29b2dba1288ae50f8da36096355314aa3e546c881e9b066143'/>
                    <input type='text' style='display:none;' name='actionType' value='UG90ZW50aWFscw=='/>
                    <input type='hidden' name='rmsg' id='rmsg' value='true'/>
                    <input type='text' style='display:none;' name='returnURL' value='null' />
                    <div id='elementDiv208810000000579045' class='wf-form-wrapper'>
                        <div class="mb-3"><input name='Contacts.Last Name' type='text' value='' class='wf-field-item wf-field-input form-input' oninput='removeError(this)' placeholder='Your Name'  required/></div>
                        <div class="mb-3"> <input fvalidate='true' ftype='email' name='Contacts.Email' type='text' value='' class='wf-field-item form-input wf-field-input' oninput='removeError(this)' placeholder='Your Email'  required /></div>   
                        <div class="mb-3">
                              <div class="phone-group">
                                 <span class="country-code">🇮🇳 +91</span>
                                  <input fvalidate='true' ftype='mobile' name='Contacts.Mobile'  class='wf-field-item wf-field-input form-input @error('mobile') is-invalid @enderror' maxlength='30' type='text' value='' pattern='[0-9]{10}' maxlength='10'  oninput='this.value = this.value.replace(/[^0-9]/g, "")'
                                            title='Please enter a valid 10-digit mobile number'  placeholder="Mobile Number" required />
                              </div>
                        </div>
                        <div class='wf-field-inner mb-3'>
                            <input name='Contacts.Mailing City' type='text' value='' class='wf-field-item wf-field-input form-input' oninput='removeError(this)' placeholder='City/Pincode' style='border-radius: 10px; border: 1px solid #ddd; padding: 15px;' required/>
                        </div>
                        <div class='wf-row' style='display:none;';>  
 	 	 	<div class='wf-label'>Sub-Pipeline</div>
 	 	 	<div class='wf-field'>
 	 	 	 	<div class='wf-field-inner dropdown-contents'>
 	 	 	 	<select name='Pipeline' class='wf-field-item wf-field-dropdown' data-wform-field='select' onchange='removeError(this);'>
 	 	 	 	 	<option selected value='Standard'>Standard</option>
 	 	 	 	</select>
 	 	 	 	</div>
 	 	 	</div>
 	 	</div>
 	 	<div class='wf-row' style='display:none;';>  
 	 	 	<div class='wf-label'>Stage</div>
 	 	 	<div class='wf-field'>
 	 	 	 	<div class='wf-field-inner dropdown-contents'>
 	 	 	 	<select name='Stage' class='wf-field-item wf-field-dropdown' data-wform-field='select' onchange='removeError(this);'>
 	 	 	 	 	<option selected value='Qualification'>Qualification</option>

 	 	 	 	</select>
 	 	 	 	</div>
 	 	 	</div>
 	 	</div>
 	 	<div class='wf-row' style='display:none;';>  
 	 	 	<div class='wf-label'>Deal Name</div>
 	 	 	<div class='wf-field'>
 	 	 	 	<div class='wf-field-inner'>
 	 	 	 	<input name='Potential Name' maxlength='120' type='text' value='New Lead' class='wf-field-item wf-field-input' oninput='removeError(this)'/>
 	 	 	 	</div>
 	 	 	</div>
 	 	</div>
 	 	<div class='wform-btn-wrap' data-ux-pos='left'>
 	 	 	<input id='formsubmit' type='submit' class='wf-btn w-100' data-ux-btn-type='default' style="background-color: #F26522; color: white; font-family: 'DM Sans', sans-serif; font-weight: 600; font-size: 16px; padding: 15px; border-radius: 10px; border: none; transition: all 0.3s ease;" value='Get Started Now →'/>
 	 	</div>
                    </div>      
                    </form>

               </div>
                </div>
                    <div class="form-footer">
                        <span class="form-footer-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg> 100% Secure</span>
                        <span class="form-footer-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"></path></svg> No Spam</span>
                        <span class="form-footer-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg> Quick Response</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     STATS BAR
     ============================================ -->
<div class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Happy Clients</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Documents Filed</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9★</span><span class="stat-label">Client Rating</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> ISO Certified</div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg> SSL Secure</div>
        </div>
    </div>
</div>

<!-- ============================================
     TABLE OF CONTENTS (Sticky Nav)
     ============================================ -->
<nav class="toc-section" aria-label="Table of Contents">
    <div class="toc-container">
        <button class="toc-arrow left" type="button" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
            <a href="#intro-section" class="toc-btn active">TL;DR</a>
            <a href="#what-section" class="toc-btn">What is GST?</a>
            <a href="#who-section" class="toc-btn">Who Must Register</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#steps-section" class="toc-btn">Step-by-Step</a>
            <a href="#docs-section" class="toc-btn">Documents Required</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#why-choose-section" class="toc-btn">Why Choose CA</a>
            <a href="#comparison-section" class="toc-btn">DIY vs Pro</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" type="button" id="tocRight">&#10095;</button>
    </div>
</nav>

<!-- ============================================
     SECTION: INTRO / TL;DR
     ============================================ -->
<section class="content-section" id="intro-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration in India — Quick Summary</h2>
            <div class="content-text">
                <p><strong>GST Registration</strong> is mandatory for businesses with annual turnover exceeding <strong>₹40 lakhs (goods)</strong> or <strong>₹20 lakhs (services)</strong> under Section 22 of the CGST Act, 2017. E-commerce sellers and inter-state suppliers must register regardless of turnover.</p>
                <p>Every business crossing the GST turnover threshold must register under the Central Goods and Services Tax Act, 2017 — or face penalties of up to ₹10,000 under Section 122(1). Yet thousands of business owners delay registration because the process feels complex: Aadhaar authentication, document uploads, DSC requirements, and CBIC scrutiny all create bottlenecks.</p>
                <p>Patron Accounting, rated <strong>4.9★ by 500+ clients</strong>, handles your GST registration end-to-end. Our team of qualified CAs and CSs eliminates errors, responds to CBIC queries, and delivers your <strong>GSTIN within 3 working days</strong> for Aadhaar-authenticated applicants.</p>
            </div>
            <div class="highlight-box">
                <p><strong>Need GST registration today?</strong> Call us at <a href="tel:+919459456700">+91 945 945 6700</a> or message us on WhatsApp for a free consultation.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION: WHAT IS GST REGISTRATION
     ============================================ -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What is GST Registration?</h2>
                <div class="content-text">
                    <p><strong>GST Registration</strong> is the process by which a taxable person obtains a <strong>Goods and Services Tax Identification Number (GSTIN)</strong> under Section 25 of the CGST Act, 2017, enabling them to legally collect tax, claim input tax credit, and file GST returns with the CBIC.</p>
                    <p>A GSTIN is a <strong>15-digit alphanumeric number</strong> assigned to every registered taxpayer. The first two digits represent the state code, digits 3–12 are the PAN, digit 13 is the entity number, digit 14 is a default "Z", and digit 15 is a check digit.</p>
                    <p>Under Section 22(1) of the CGST Act, 2017, every supplier whose aggregate turnover exceeds the prescribed threshold in a financial year is required to obtain registration within <strong>30 days</strong> of becoming liable.</p>
                </div>
                <div class="highlight-box">
                    <p><strong>Key Terms:</strong> <strong>GSTIN</strong> — 15-digit unique ID. <strong>Aggregate Turnover</strong> — all taxable, exempt, and zero-rated supplies under same PAN. <strong>ITC</strong> — Input Tax Credit available only to registered taxpayers. <strong>EVC</strong> — Electronic Verification Code for filing without DSC.</p>
                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div class="illustration-badge"><span>GSTIN Format</span><strong>15-Digit Unique ID</strong></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION: WHO MUST REGISTER
     ============================================ -->
<section class="eligibility-section" id="who-section">
    <div class="section-container">
        <header class="section-header">
            <span class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Eligibility</span>
            <h2 class="section-title">Who Must Register for GST?</h2>
            <p class="section-subtitle">Under the CGST Act, 2017, both threshold-based and mandatory categories exist.</p>
        </header>
        <div class="criteria-grid">
            <article class="criteria-card">
                <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div>
                <h3 class="card-title">Goods Suppliers — ₹40 Lakhs</h3>
                <p class="card-text">Suppliers of goods with aggregate turnover exceeding ₹40 lakhs in normal category states under Section 22 CGST Act.</p>
            </article>
            <article class="criteria-card">
                <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
                <h3 class="card-title">Service Providers — ₹20 Lakhs</h3>
                <p class="card-text">Suppliers of services with aggregate turnover exceeding ₹20 lakhs in normal category states.</p>
            </article>
            <article class="criteria-card">
                <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg></div>
                <h3 class="card-title">E-Commerce Sellers</h3>
                <p class="card-text">E-commerce operators and sellers on Amazon, Flipkart, Meesho — mandatory under Section 24 regardless of turnover.</p>
            </article>
            <article class="criteria-card">
                <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3 class="card-title">Inter-State Suppliers</h3>
                <p class="card-text">Businesses making inter-state supplies of taxable goods or services must register regardless of turnover.</p>
            </article>
            <article class="criteria-card">
                <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div>
                <h3 class="card-title">Reverse Charge / TDS</h3>
                <p class="card-text">Persons required to pay tax under reverse charge mechanism (Section 9(3)) or deduct TDS under Section 51.</p>
            </article>
            <article class="criteria-card">
                <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
                <h3 class="card-title">Special Category States</h3>
                <p class="card-text">Lower thresholds of ₹20 lakhs (goods) and ₹10 lakhs (services) for Arunachal Pradesh, Assam, Meghalaya, Manipur, Mizoram, Nagaland, Sikkim, Tripura, and others.</p>
            </article>
        </div>
        <div class="highlight-box mt-4">
            <p><strong>Registration Deadline:</strong> Must be obtained within 30 days of becoming liable. Missing this triggers penalty under Section 122(1): ₹10,000 or the amount of tax involved, whichever is higher.</p>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION: OUR SERVICES
     ============================================ -->
<section class="content-section" id="services-section" style="background: var(--white);">
    <div class="content-container">
        <div class="cards-section">
            <header class="cards-header">
                <h2 class="cards-title">GST Registration Services by Patron Accounting</h2>
                <p class="cards-subtitle">Our qualified CA team manages every aspect from document collection to GSTIN issuance.</p>
            </header>
            <div class="cards-grid">
                <article class="content-card">
                    <span class="card-number">01</span>
                    <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg></div>
                    <h3 class="card-title">Eligibility Assessment &amp; Business Classification</h3>
                    <p class="card-text">We determine the correct GST registration type (Regular, Composition, Casual, OIDAR) and advise on the optimal structure to maximise input tax credit eligibility.</p>
                </article>
                <article class="content-card">
                    <span class="card-number">02</span>
                    <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
                    <h3 class="card-title">Document Verification &amp; Compilation</h3>
                    <p class="card-text">We review all documents before submission to eliminate CBIC rejection. 15+ years experience means our team knows exactly what officers look for during scrutiny.</p>
                </article>
                <article class="content-card">
                    <span class="card-number">03</span>
                    <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
                    <h3 class="card-title">GST Portal Application Filing</h3>
                    <p class="card-text">We file Form GST REG-01 on gst.gov.in, coordinate Aadhaar authentication (biometric or OTP-based), and submit DSC or EVC authentication on your behalf.</p>
                </article>
                <article class="content-card">
                    <span class="card-number">04</span>
                    <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg></div>
                    <h3 class="card-title">CBIC Query Response (REG-03)</h3>
                    <p class="card-text">If CBIC raises a query via Form GST REG-03, we respond within the 7-working-day window to prevent deemed rejection.</p>
                </article>
                <article class="content-card">
                    <span class="card-number">05</span>
                    <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div>
                    <h3 class="card-title">GSTIN Certificate &amp; Compliance Setup</h3>
                    <p class="card-text">We obtain your Form GST REG-06 certificate, set up your GST return filing calendar, and brief your accounts team on input tax credit tracking.</p>
                </article>
                <article class="content-card">
                    <span class="card-number">06</span>
                    <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div>
                    <h3 class="card-title">Post-Registration Compliance Handover</h3>
                    <p class="card-text">Complete compliance checklist covering GSTR-1, GSTR-3B filing deadlines and ITC reconciliation requirements.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION: STEP-BY-STEP PROCESS
     ============================================ -->
<section class="steps-section" id="steps-section">
    <div class="section-container">
        <header class="section-header">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">How to Apply for GST Registration: Step-by-Step</h2>
        </header>
        <div class="steps-container">
            <article class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Determine Registration Type</h3>
                    <p class="step-description">Identify whether you need Regular Taxpayer, Composition Scheme, Casual Taxable Person, or Non-Resident registration under Section 22 or Section 24 of the CGST Act, 2017.</p>
                </div>
                <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div><span class="illustration-label">Registration Type</span><span class="step-number-large">1</span></div></div>
            </article>
            <article class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Gather Required Documents</h3>
                    <p class="step-description">Collect PAN card, Aadhaar card, business incorporation certificate, bank account details, address proof for principal place of business, and passport photograph of the authorised signatory.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg> PAN &amp; Aadhaar</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg> Bank Proof</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg> Address Proof</span>
                    </div>
                </div>
                <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><span class="illustration-label">Documents</span><span class="step-number-large">2</span></div></div>
            </article>
            <article class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3–4</span>
                    <h3 class="step-title">Initiate Application &amp; Get TRN</h3>
                    <p class="step-description">Visit gst.gov.in → Services → Registration → New Registration. Enter PAN, mobile, email for OTP verification. After OTP verification, a TRN is generated. Log in with TRN and complete Part-B of Form GST REG-01.</p>
                </div>
                <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div><span class="illustration-label">GST Portal</span><span class="step-number-large">3</span></div></div>
            </article>
            <article class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5–6</span>
                    <h3 class="step-title">Aadhaar Authentication &amp; Document Upload</h3>
                    <p class="step-description">Complete Aadhaar OTP or biometric authentication at GST Suvidha Kendra (for flagged applicants). Upload scanned copies of all documents in JPG/PDF format. Address proof mismatch is the most common rejection reason.</p>
                </div>
                <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"/></svg></div><span class="illustration-label">Aadhaar Auth</span><span class="step-number-large">5</span></div></div>
            </article>
            <article class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7–9</span>
                    <h3 class="step-title">Submit, Track &amp; Receive GSTIN</h3>
                    <p class="step-description">Sign with DSC (companies/LLPs) or EVC (proprietorships/partnerships). ARN generated via Form GST REG-02. For Aadhaar-authenticated applicants, GSTIN issued within 3 working days via Form GST REG-06.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg> 3 Working Days</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg> Track via ARN</span>
                    </div>
                </div>
                <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><span class="illustration-label">GSTIN Issued</span><span class="step-number-large">9</span></div></div>
            </article>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION: DOCUMENTS REQUIRED
     ============================================ -->
<section class="checklist-section" id="docs-section">
    <div class="section-container">
        <div class="checklist-content">
            <h2 class="section-title">Documents Required for GST Registration</h2>
            <div class="checklist-items mb-4">
                <h3 class="checklist-items-title"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg> For All Business Types</h3>
                <ul class="checklist-list">
                    <li class="checklist-item">PAN card of the applicant or entity</li>
                    <li class="checklist-item">Aadhaar card of the authorised signatory</li>
                    <li class="checklist-item">Proof of principal place of business (rent agreement + electricity bill, or owned property documents)</li>
                    <li class="checklist-item">Bank account proof — cancelled cheque or bank statement (with IFSC code visible)</li>
                    <li class="checklist-item">Photograph of the authorised signatory (JPEG, max 100 KB)</li>
                    <li class="checklist-item">DSC (for companies &amp; LLPs) or EVC (for proprietorship, partnership)</li>
                </ul>
            </div>
            <div class="checklist-items">
                <h3 class="checklist-items-title"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg> Additional by Entity Type</h3>
                <ul class="checklist-list">
                    <li class="checklist-item"><strong>Proprietorship:</strong> PAN of proprietor, Aadhaar, address proof</li>
                    <li class="checklist-item"><strong>Partnership Firm:</strong> Partnership deed, PAN and Aadhaar of all partners, authorisation letter</li>
                    <li class="checklist-item"><strong>Private Limited Company:</strong> Certificate of incorporation, MoA/AoA, board resolution, PAN of company</li>
                    <li class="checklist-item"><strong>LLP:</strong> LLP agreement, Certificate of Incorporation from MCA portal, PAN of LLP</li>
                    <li class="checklist-item"><strong>Trust/NGO:</strong> Trust deed or registration certificate, authorisation letter</li>
                    <li class="checklist-item"><strong>HUF:</strong> Karta's PAN and Aadhaar, HUF declaration</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION: CHALLENGES & SOLUTIONS
     ============================================ -->
<section class="content-section" id="challenges-section" style="background: var(--gray-50);">
    <div class="content-container">
        <h2 class="section-title">Common GST Registration Challenges &amp; Our Solutions</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr><th>Common Challenge</th><th>Patron Accounting Solution</th></tr>
                </thead>
                <tbody>
                    <tr><td>Aadhaar Authentication Failure — biometric mismatch or OTP delays</td><td>Pre-verify Aadhaar linking to mobile number; coordinate with GST Suvidha Kendra for biometric authentication</td></tr>
                    <tr><td>CBIC Show Cause Notice (REG-03) — 7-day response window</td><td>Monitor all client applications and respond to REG-03 notices on the same day</td></tr>
                    <tr><td>Address Proof Mismatch — most common rejection reason</td><td>Review all address documents before submission — backed by 10,000+ registration filings</td></tr>
                    <tr><td>Multi-State Registration — separate registration per state</td><td>Manage multi-state registrations under a single engagement with unified compliance calendar</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION: FEES
     ============================================ -->
<section class="content-section" id="fees-section" style="background: var(--white);">
    <div class="content-container">
        <h2 class="section-title">GST Registration Fees &amp; Professional Charges</h2>
        <p class="content-text mb-4"><strong>Government Fee:</strong> ₹0. GST registration on gst.gov.in is free of charge for all standard applicants.</p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr><th>Business Type</th><th>Our Fee (Starting From)</th></tr>
                </thead>
                <tbody>
                    <tr><td>Sole Proprietorship / Individual</td><td>₹999</td></tr>
                    <tr><td>Partnership Firm</td><td>₹1,499</td></tr>
                    <tr><td>Private Limited Company / LLP</td><td>₹1,999</td></tr>
                    <tr><td>E-commerce Seller (Amazon/Flipkart)</td><td>₹1,499</td></tr>
                    <tr><td>Multi-State Registration (per state)</td><td>₹999 per state</td></tr>
                </tbody>
            </table>
        </div>
        <div class="highlight-box">
            <p>Our fee includes document verification, GST portal filing, Aadhaar authentication coordination, REG-03 response (if raised), and GSTIN certificate delivery. <strong>No hidden charges.</strong></p>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION: TIMELINE
     ============================================ -->
<section class="content-section" id="timeline-section" style="background: var(--gray-50);">
    <div class="content-container">
        <h2 class="section-title">GST Registration Timeline</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr><th>Stage</th><th>Time Taken</th></tr>
                </thead>
                <tbody>
                    <tr><td>Document collection and verification</td><td>1 business day</td></tr>
                    <tr><td>Application filing on gst.gov.in</td><td>Same day</td></tr>
                    <tr><td>Aadhaar OTP authentication</td><td>Immediate (OTP-based)</td></tr>
                    <tr><td>GSTIN issuance (Aadhaar-authenticated)</td><td>3 working days</td></tr>
                    <tr><td>GSTIN issuance (non-authenticated)</td><td>7–21 working days</td></tr>
                    <tr><td>REG-03 response window (if raised)</td><td>Within 7 working days</td></tr>
                </tbody>
            </table>
        </div>
        <div class="highlight-box">
            <p><strong>Registration Deadline:</strong> Under Section 25(1) of the CGST Act, registration must be completed within 30 days of crossing the threshold. Late registration attracts a penalty of ₹10,000 under Section 122(1). Do not wait until you receive a CBIC notice — register proactively.</p>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION: WHY CHOOSE A CA
     ============================================ -->
<section class="why-choose-section" id="why-choose-section">
    <div class="section-container-wide">
        <header class="why-choose-header">
            <span class="section-eyebrow">Why Patron Accounting</span>
            <h2 class="section-title">Why Choose a CA for GST Registration?</h2>
            <p class="section-subtitle">Registering without professional help risks rejection, DSC errors, and delays.</p>
        </header>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                <h3 class="feature-title">Right Category Selection</h3>
                <p class="feature-text">Our CAs ensure the correct registration type is selected to maximize your ITC eligibility and compliance structure.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
                <h3 class="feature-title">Pre-Verified Documents</h3>
                <p class="feature-text">Documents verified before upload — our 98% first-submission approval rate means no REG-03 notices, no delays.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
                <h3 class="feature-title">Immediate CBIC Query Handling</h3>
                <p class="feature-text">Any CBIC query is handled the same day within the 7-working-day window, preventing deemed rejection.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg></div>
                <h3 class="feature-title">Multi-State Expertise</h3>
                <p class="feature-text">Registrations across 15+ states, multi-state businesses with complex supply chains — all managed under one engagement.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">Post-Registration Compliance</h3>
                <p class="feature-text">Accounting and bookkeeping compliance managed by our team — your books match your GST returns from day one.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg></div>
                <h3 class="feature-title">10,000+ Businesses Served</h3>
                <p class="feature-text">2,000+ GST registrations last year alone. Trusted by Hyundai, Asian Paints, Bridgestone and businesses across India.</p>
            </article>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION: DIY vs PROFESSIONAL
     ============================================ -->
<section class="content-section" id="comparison-section" style="background: var(--white);">
    <div class="content-container">
        <h2 class="section-title">DIY vs Professional GST Registration</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr><th>Factor</th><th>DIY (Self-Registration)</th><th>Patron Accounting</th></tr>
                </thead>
                <tbody>
                    <tr><td>Government fee</td><td>₹0</td><td>₹0</td></tr>
                    <tr><td>Professional fee</td><td>₹0</td><td>From ₹999</td></tr>
                    <tr><td>Average time to GSTIN</td><td>7–21 days (errors common)</td><td>3 working days</td></tr>
                    <tr><td>REG-03 handling</td><td>Self (7-day window)</td><td>Handled by CA team</td></tr>
                    <tr><td>Risk of rejection</td><td>High (document mismatch)</td><td>Low (pre-verified)</td></tr>
                    <tr><td>Post-registration setup</td><td>Self</td><td>Included</td></tr>
                    <tr><td>Multi-state registration</td><td>Complex</td><td>Single engagement</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION: RELATED SERVICES
     ============================================ -->
<section class="content-section" style="background: var(--gray-50);">
    <div class="content-container">
        <h2 class="section-title">Related Compliance Services</h2>
        <div class="content-text mb-4">
            <p>Once registered under GST, your business has ongoing monthly and quarterly compliance obligations.</p>
        </div>
        <div class="features-grid" style="grid-template-columns: repeat(2, 1fr);">
            <article class="feature-card">
                <h3 class="feature-title">GST Return Filing</h3>
                <p class="feature-text">GSTR-1, GSTR-3B, GSTR-9 — monthly and annual returns filed on time with ITC reconciliation.</p>
            </article>
            <article class="feature-card">
                <h3 class="feature-title">Company / LLP Annual Compliance</h3>
                <p class="feature-text">ROC filings, director KYC, annual returns, and all statutory filings managed.</p>
            </article>
            <article class="feature-card">
                <h3 class="feature-title">Income Tax Return Filing</h3>
                <p class="feature-text">For businesses and individuals — ITR filing with tax planning and TDS compliance.</p>
            </article>
            <article class="feature-card">
                <h3 class="feature-title">Payroll, TDS &amp; PF/ESI</h3>
                <p class="feature-text">Complete payroll processing with TDS deduction, PF &amp; ESI compliance management.</p>
            </article>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION: LEGAL FRAMEWORK
     ============================================ -->
<section class="content-section" style="background: var(--white);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal &amp; Compliance Framework</h2>
            <div class="content-text">
                <p><strong>Governing Act:</strong> Central Goods and Services Tax Act, 2017 (CGST Act) and Integrated Goods and Services Tax Act, 2017 (IGST Act). Available at: indiacode.nic.in</p>
                <p><strong>Key Sections:</strong> Section 22 (persons liable), Section 23 (persons exempt), Section 24 (mandatory registration for 11 categories), Section 25 (procedure), Section 27 (casual/non-resident), Section 29 (cancellation), Section 122(1) (penalty).</p>
                <p><strong>Key Forms:</strong> REG-01 (new registration), REG-03 (clarification notice), REG-06 (GSTIN certificate), REG-16 (cancellation application).</p>
                <p><strong>Penalty Provisions:</strong> ₹10,000 or tax evaded (whichever higher) under Section 122(1). Up to ₹25,000 under Section 125 for other contraventions. Prosecution under Section 132 for evasion exceeding ₹5 crore.</p>
            </div>
            <div class="highlight-box">
                <p><strong>2024 Changes:</strong> Mandatory biometric Aadhaar authentication for high-risk applicants at GST Suvidha Kendras. Simplified 3-working-day GSTIN issuance for Aadhaar-authenticated applicants.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION: FAQ (unified expanded)
     ============================================ -->
@php
    $gstFaqs = [
        ['question' => 'Who is eligible for GST registration in India?', 'answer' => 'Every supplier with aggregate turnover exceeding ₹40 lakhs (goods) or ₹20 lakhs (services) in a financial year must register under Section 22 of the CGST Act, 2017. Special category states have lower thresholds. E-commerce sellers and inter-state suppliers must register regardless of turnover under Section 24.'],
        ['question' => 'Is the GST registration limit 20 lakhs or 40 lakhs?', 'answer' => '₹40 lakhs for suppliers of goods in normal category states and ₹20 lakhs for service providers or businesses in special category states, effective from 01 April 2019. The two thresholds apply to different business types.'],
        ['question' => 'How do I register for GST in India?', 'answer' => 'Register by filing Form GST REG-01 on gst.gov.in. The process involves OTP verification, Aadhaar authentication, document upload, and DSC/EVC submission. For Aadhaar-authenticated applicants, GSTIN is issued within 3 working days.'],
        ['question' => 'How much does GST registration cost?', 'answer' => 'Government registration fee is ₹0. Professional CA fees start at ₹999 for sole proprietors and ₹1,999 for private limited companies. Patron Accounting charges no hidden fees.'],
        ['question' => 'What documents are required for GST registration?', 'answer' => 'PAN card, Aadhaar card, proof of principal place of business (rent agreement or electricity bill), bank account proof (cancelled cheque), business incorporation documents, and passport photograph. Companies and LLPs additionally require DSC.'],
        ['question' => 'What is the penalty for not registering under GST?', 'answer' => '₹10,000 or the amount of tax evaded, whichever is higher, under Section 122(1). CBIC can also conduct an audit, deny input tax credit to your buyers, and in severe cases prosecute for tax evasion under Section 132.'],
        ['question' => 'Can I register for GST voluntarily?', 'answer' => 'Yes. Section 25(3) of the CGST Act permits voluntary registration even if turnover is below the threshold. It gives access to input tax credit, enables inter-state supplies, and makes your business eligible to supply to GST-registered buyers.'],
        ['question' => 'How long does GST registration take in 2026?', 'answer' => 'For Aadhaar-authenticated applicants, GSTIN is issued within 3 working days. Non-authenticated applicants may wait 7 to 21 working days and may require field verification under Rule 9 of the CGST Rules, 2017.']
    ];
@endphp
@include('partials.faq-section', ['faqs' => $gstFaqs, 'heading' => 'Frequently Asked Questions', 'includeSchema' => true, 'enquiryService' => 'GST Registration'])

<!-- ============================================
     SECTION: CONCLUSION + FINAL CTA
     ============================================ -->
<section class="content-section" style="background: var(--white);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Conclusion</h2>
            <div class="content-text">
                <p>GST Registration in India is a statutory requirement that unlocks your ability to collect tax, claim input tax credit, and operate legally across state borders. The process — governed by Sections 22–30 of the CGST Act, 2017 — requires precise documentation, Aadhaar authentication, and timely CBIC responses to avoid penalties and registration delays.</p>
                <p>Patron Accounting, rated 4.9★ by 500+ clients, completes GST registration in 3 working days with zero document rejection. Our CA team manages everything from document verification to GSTIN issuance and post-registration compliance setup.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     CTA BANNER (Final)
     ============================================ -->
<section class="cta-banner-section">
    <div class="cta-banner">
        <h2 class="cta-title">Get Expert GST Registration Help Today</h2>
        <p class="mb-4" style="color: var(--text-muted);">GST Registration from ₹999. GSTIN in 3 Working Days.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="tel:+919459456700" class="btn-cta-primary">📞 Call: +91 945 945 6700</a>
            <a href="https://wa.me/919459456700" class="btn-cta-primary" style="background: #25D366;">💬 WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com" class="btn-cta-primary" style="background: var(--blue);">📧 Email Us</a>
        </div>
        <p style="font-size: 13px; color: var(--text-muted);">We respond within 2 hours. Book a free 15-minute consultation with our GST expert team.</p>
    </div>
</section>

<!-- Reviews CTA -->
<div class="container mb-5">
    <div class="reviews-cta">
        <div class="reviews-cta-content">
            <div class="reviews-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
            <div class="reviews-cta-text">
                <h3 class="text-white">Join 10,000+ Satisfied Businesses</h3>
                <p>Get expert assistance for all your business registration needs</p>
            </div>
        </div>
        <a href="tel:+919459456700" class="btn-cta" style="text-decoration: none;">
            Talk to an Expert
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
</div>

</main>

@push('scripts')

<script>
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', () => tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }));
document.getElementById('tocRight').addEventListener('click', () => tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }));

// Active TOC on scroll
const tocBtns = document.querySelectorAll('.toc-btn');
const sections = [];
tocBtns.forEach(btn => {
    const target = document.querySelector(btn.getAttribute('href'));
    if (target) sections.push({ btn, target });
});

window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY + 150;
    sections.forEach(({ btn, target }) => {
        if (target.offsetTop <= scrollPos && target.offsetTop + target.offsetHeight > scrollPos) {
            tocBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        }
    });
});

// Smooth scroll for TOC links
tocBtns.forEach(btn => {
    btn.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(btn.getAttribute('href'));
        if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
</script>
<script>
 	  var mndFields208810000000579045=new Array('Contacts.Last\x20Name','Contacts.Mailing\x20City');
 	  var fldLangVal208810000000579045=new Array('Name','City');
        // console.log('Rohit Maurya');
        // console.log(mndFields208810000000579045);
        // console.log(fldLangVal208810000000579045);
 	 var wfInnerWidth = window.innerWidth;
 	 if(wfInnerWidth <= 768){
 	 	 document.forms['BiginWebToRecordForm208810000000579045'].setAttribute('data-ux-form-alignment', 'top');
 	 }
 	function removeError(fieldObj) {
 	 	var parentElement = fieldObj.closest('.wf-field'),
 	 	 	childEle = parentElement.getElementsByClassName('wf-error-parent-ele')[0];
 	 	if(childEle) {
 	 	 	parentElement.classList.remove('wf-field-error-active');
 	 	 	parentElement.removeChild(parentElement.getElementsByClassName('wf-error-parent-ele')[0]);
 	 	}
 	}
 	function setError(fieldObj, label) {
 	 	var parentElement = fieldObj.closest('.wf-field'),
 	 		childEle = parentElement.getElementsByClassName('wf-error-parent-ele')[0];
 	 	if(!childEle) {
 	 	 	var errorParentEle = document.createElement('DIV'),
 	 	 	spanEle = document.createElement('SPAN'),
 	 	 	viewMoreEle = document.createElement('SPAN');
 	 	 	spanEle.setAttribute('class', 'wf-field-error wf-field-error-long');
 	 	 	spanEle.innerHTML = label;
 	 	 	errorParentEle.classList.add('wf-error-parent-ele');
 	 	 	errorParentEle.appendChild(spanEle);
 	 	 	parentElement.append(errorParentEle);
 	 	 	parentElement.classList.add('wf-field-error-active');
 	 	 	if(spanEle.scrollWidth > parentElement.offsetWidth) {
 	 	 	 	viewMoreEle.innerHTML = 'View More';
 	 	 	 	viewMoreEle.classList.add('wf-error-view-more');
 	 	 	 	errorParentEle.append(viewMoreEle);
 	 	 	 	viewMoreEle.addEventListener('click', function() {
 	 	 	 	errorParentEle.removeChild(viewMoreEle);
 	 	 	 	spanEle.classList.remove('wf-field-error-long');
 	 	 	 	});
 	 	 	} else {
 	 	 	 	spanEle.classList.remove('wf-field-error-long')
 	 	 	}
 	 	}
 	}
 	function validateFields208810000000579045() {
 	 	var isReturn = true;
 	 	var form = document.forms['BiginWebToRecordForm208810000000579045'];
 	 	var validateFld = form.querySelectorAll('[fvalidate=true]');
 	 	var i;
 	 	for (i = 0; i < validateFld.length; i++)
 	 	{
 	 	 	var validateFldVal = validateFld[i].value;
 	 	 	var fType = validateFld[i].getAttribute('ftype');
 	 	 	if(validateFldVal !== '' || (validateFldVal === '' && fType.indexOf('date') !== -1)) {
 	 	 	 	var wfLabel = validateFld[i].parentElement.parentElement.parentElement.getElementsByClassName('wf-label')[0];
 	 	 	 	var fLabel = wfLabel ? wfLabel.innerHTML: '';
 	 	 	 	switch(validateFld[i].getAttribute('ftype')) {
 	 	 	 	case 'string_rest_number':
 	 	 	 	case 'string':
 	 	 	 	 	var isError = false,
 	 	 	 	 	errorKey = 'Only letters are allowed.';
 	 	 	 	 	if(validateFld[i].getAttribute('ftype') === 'string_rest_number' && validateFldVal.match((/\d/g)) !== null) {	
 	 	 	 	 	 	isError = true;
 	 	 	 	 	}else if(validateFld[i].hasAttribute('fmin')){
 	 	 	 	 	 	if(validateFldVal.length < parseInt(validateFld[i].getAttribute('fmin'))) {
 	 	 	 	 	 	 	errorKey = 'Your input must be at least ' +validateFld[i].getAttribute('fmin') + ' character(s).';
 	 	 	 	 	 	 	isError = true;
 	 	 	 	 	 	} else if(validateFldVal.length > parseInt(validateFld[i].getAttribute('fmax'))) {
 	 	 	 	 	 	 	errorKey = 'Your input should not exceed ' +validateFld[i].getAttribute('fmax') + ' character(s).';
 	 	 	 	 	 	 	isError = true;
 	 	 	 	 	 	}
 	 	 	 	 	}
 	 	 	 	 	if(isError){
 	 	 	 	 	 	setError(validateFld[i], errorKey);
 	 	 	 	 	 	isReturn = false;
 	 	 	 	 	}
 	 	 	 	 	break;
 	 	 	 	case 'email':
 	 	 	 	 	if(validateFldVal.match(/^([A-Za-z0-9-._%'+/]+@[A-Za-z0-9.-]+.[a-zA-Z]{2,22})$/) === null) {
 	 	 	 	 	 	setError(validateFld[i], 'Enter valid ' + fLabel);
 	 	 	 	 	 	isReturn = false;
 	 	 	 	 	}
 	 	 	 	 	break;
 	 	 	 	case 'number':
 	 	 	 	case 'double':
 	 	 	 	 	var isError = false,
 	 	 	 	 	errorKey = 'Enter valid ' + fLabel;
 	 	 	 	 	if((validateFld[i].getAttribute('ftype') === 'number' && validateFldVal.match(/^[0-9]+$/) === null)
 	 	 	 	 			|| (validateFld[i].getAttribute('ftype') === 'double' && validateFldVal.match(/^[0-9]*(\.[0-9]{0,2})?$/) === null)) {
 	 	 	 	 	 	isError = true;
 	 	 	 	 	}else if(validateFld[i].hasAttribute('fmin')){
 	 	 	 	 	 	if(validateFldVal < parseInt(validateFld[i].getAttribute('fmin'))) {
 	 	 	 	 	 	 	errorKey = 'Enter a number greater than or equal to ' +validateFld[i].getAttribute('fmin');
 	 	 	 	 	 	 	isError = true;
 	 	 	 	 	 	} else if(validateFldVal > parseInt(validateFld[i].getAttribute('fmax'))) {
 	 	 	 	 	 	 	errorKey = 'Enter a number less than or equal to ' +validateFld[i].getAttribute('fmax');
 	 	 	 	 	 	 	isError = true;
 	 	 	 	 	 	}
 	 	 	 	 	}
 	 	 	 	 	if(isError){
 	 	 	 	 	 	setError(validateFld[i], errorKey);
 	 	 	 	 	 	isReturn = false;
 	 	 	 	 	}
 	 	 	 	 	break;
 	 	 	 	case 'mobile':
 	 	 	 	 	 if(validateFldVal.match(/^[0-9a-zA-Z+.()\-;\s]+$/) === null) {
 	 	 	 	 	 	setError(validateFld[i], 'Enter valid ' + fLabel);
 	 	 	 	 	 	isReturn = false;
 	 	 	 	 	 }
 	 	 	 	 	break;
 	 	 	 	 }
 	 	 	}
 	 	}
 	 	return isReturn;
 	}

		function checkMandatory208810000000579045() {
		var isReturn = true;
		var isNotCaptcha = false;
		for(i=0;i<mndFields208810000000579045.length;i++) {
		  var fieldObj=document.forms['BiginWebToRecordForm208810000000579045'][mndFields208810000000579045[i]];
		  if(fieldObj) {
			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
				if(fieldObj.type =='file'){
					setError(fieldObj, 'Please select a file to upload.'); 
					isReturn = false;
				}
				else {
					setError(fieldObj, fldLangVal208810000000579045[i] + ' cannot be empty');
				isReturn= false;
				}
			}  else if(fieldObj.nodeName=='SELECT') {
				if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
				setError(fieldObj, fldLangVal208810000000579045[i] +' cannot be none.');
				isReturn = false;
			   }
			} else if(fieldObj.type =='checkbox'){
 	 	 	 if(fieldObj.checked == false){
				setError(fieldObj, 'Please accept  '+fldLangVal208810000000579045[i]);
				isReturn= false;
				} 
			 }
		    }
		}
		 isNotCaptcha = true;
		if(!validateFields208810000000579045()){isReturn = false;}
		if(!isReturn){
			var errEle = document.getElementsByClassName('wf-field-error');
			if(errEle && errEle.length >0){
				var inputEle = errEle[0].closest('.wf-field').getElementsByTagName('input');
				if(inputEle && inputEle.length == 0) {
					inputEle = errEle[0].closest('.wf-field').getElementsByTagName('select');
				}
				if(inputEle && inputEle.length > 0) {
					inputEle[0].focus();
				}
			}
		}else if(isNotCaptcha){
			document.getElementById('formsubmit').disabled = true;
		}
		return isReturn; 
		}
	   
		document.getElementById('hidden208810000000579045Frame').addEventListener('load', function () {
			try {
				var doc = arguments[0].currentTarget.contentWindow.document;
				if(doc.body.childElementCount !== 0) {
					arguments[0].currentTarget.style.display = 'block';
					document.getElementById('BiginWebToRecordFormParent208810000000579045').style.display = 'none';
				}
			} catch (error) {
				arguments[0].currentTarget.style.display = 'block';
				document.getElementById('BiginWebToRecordFormParent208810000000579045').style.display = 'none'
			}
		});
</script>
 	 <script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=f26c7ff799b3eaf0c3606838e88b274be7c9911af160c3db82aa11f7d01dca343d6bb7afabda191c26b8dcf1a273e9cfgidb215ea2680256b8fe2d35a432e6cb566a42a8aae3149a75892a75de20a91bd11'></script>

@endpush
@endsection
