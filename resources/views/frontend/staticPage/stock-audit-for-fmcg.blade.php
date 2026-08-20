@extends('layouts.service-app')

@section('meta')
<title>Stock Audit for FMCG Companies: Depot and CF Agent Stock | Patron Accounting</title>
    <meta name="description" content="FMCG stock is audited across depots, C&amp;F agents and distributors. Secondary stock is verified, and damage and expiry claims are tested against evidence.">
    <link rel="canonical" href="https://www.patronaccounting.com/stock-audit-for-fmcg">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Stock Audit for FMCG Companies: Depot and CF Agent Stock | Patron Accounting">
    <meta property="og:description" content="FMCG stock is audited across depots, C&amp;F agents and distributors. Secondary stock is verified, and damage and expiry claims are tested against evidence.">
    <meta property="og:url" content="https://www.patronaccounting.com/stock-audit-for-fmcg">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/stock-audit-for-fmcg-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Stock Audit for FMCG Companies: Depot and CF Agent Stock | Patron Accounting">
    <meta name="twitter:description" content="FMCG stock is audited across depots, C&amp;F agents and distributors. Secondary stock is verified, and damage and expiry claims are tested against evidence.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/stock-audit-for-fmcg-og.webp">


<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    
    
    
    
    
<style>
/* ===== trust / case study / integrations / E-E-A-T ===== */
.why-patron-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px;margin:24px 0}
.why-patron-grid > div{background:#fff;border:1px solid var(--gray-200,#e5e7eb);border-radius:10px;padding:18px}
.why-patron-grid strong{display:block;font-size:22px;line-height:1.2;margin-bottom:6px}
.why-patron-note{font-size:13px;color:var(--text-muted,#6b7280)}
.case-study-block{border-left:4px solid var(--primary,#1f4e79);background:var(--cream,#faf7f2);
  border-radius:0 10px 10px 0;padding:20px 24px;margin:20px 0}
.case-study-meta{font-size:13px;text-transform:uppercase;letter-spacing:.04em;color:var(--text-muted,#6b7280);margin-bottom:10px}
.case-study-block h3{font-size:16px;margin:16px 0 6px}
.case-study-result{font-size:19px;color:var(--primary,#1f4e79);margin:6px 0 10px}
.eeat-block{font-size:13px;color:var(--text-muted,#6b7280);border-top:1px solid var(--gray-200,#e5e7eb);padding-top:18px}
.eeat-block p{margin:4px 0}
.eeat-review{color:var(--text,#111827)}
@media (max-width:640px){.why-patron-grid{grid-template-columns:1fr}}

/* ===== BEGIN faq.css (synced from patronmain/css/faq.css) ===== */
/* ============================================================
   Patron Accounting — Unified Expanded FAQ (two-column)
   ------------------------------------------------------------
   SINGLE SOURCE OF TRUTH for every FAQ section sitewide
   (service pages, city pages, blog posts, tools, calculators).

   Layout: full-width section. LEFT = heading + lead + compact
   enquiry form. RIGHT = always-expanded Q&A cards. Stacks on mobile.
   No accordion, no chevrons, no +/- toggles, no click handlers.

   Class contract (used by partials/faq-section.blade.php AND by
   converted static pages):
     .faq-expanded            grid wrapper
       .faq-expanded__aside     left column
         .faq-expanded__title     h2 heading
         .faq-expanded__lead      supporting line
         .faq-expanded__cta       contact link
       .faq-expanded__list      right column
         .faq-expanded__item      card
           .faq-expanded__q         h3 question
           .faq-expanded__a         answer

   To restyle FAQs anywhere on the site, edit THIS file only.
   ============================================================ */

.faq-expanded {
    max-width: 1320px;       /* full site content width */
    margin: 0 auto;
    display: grid;
    grid-template-columns: minmax(260px, 340px) minmax(0, 1fr);
    gap: 48px;
    align-items: start;
}

/* Let the two-column grid use full width even inside a narrow text column. */
.text-content:has(.faq-expanded),
.column-content:has(.faq-expanded) {
    max-width: none;
}

/* Clear the fixed navbar + sticky TOC bar when the FAQ is reached via its
   anchor (e.g. the "FAQs" pill in the table-of-contents). ID selector so it
   wins over the per-page `.content-section[id]` scroll-margin rule. */
#faq-section {
    scroll-margin-top: 190px;
}

/* ---------- Left column ---------- */
/* Sticky, but offset so it clears the fixed navbar (~100px) AND the sticky
   TOC bar (~80px) instead of pinning behind them. Tunable per template via
   the --faq-aside-top variable if a page's nav stack is a different height. */
.faq-expanded__aside {
    position: sticky;
    top: var(--faq-aside-top, 180px);
    align-self: start;
}

.faq-expanded__title {
    font-size: clamp(26px, 2.4vw, 34px);
    font-weight: 800;
    color: #0F2C5C;          /* Patron navy */
    text-align: left;
    line-height: 1.2;
    margin: 0 0 16px;
}

.faq-expanded__lead {
    font-size: 16px;
    font-weight: 400;
    color: #4B5563;
    line-height: 1.6;
    margin: 0 0 22px;
}

.faq-expanded__cta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 15px;
    font-weight: 600;
    color: #E8712C;          /* Patron orange */
    text-decoration: none;
}

.faq-expanded__cta:hover {
    text-decoration: underline;
}

/* ---------- Compact enquiry form (left column) ---------- */
.faq-enquiry {
    margin-top: 24px;
    background: #FFFFFF;
    border: 1px solid #E5E7EB;
    border-radius: 12px;
    padding: 18px 18px 20px;
    box-shadow: 0 2px 10px rgba(15, 44, 92, 0.06);
}

.faq-enquiry__title {
    font-size: 16px;
    font-weight: 700;
    color: #0F2C5C;
    margin: 0 0 4px;
}

.faq-enquiry__sub {
    font-size: 13px;
    color: #6B7280;
    line-height: 1.5;
    margin: 0 0 14px;
}

.faq-enquiry__input {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 10px;
    font-family: inherit;
    font-size: 14px;
    color: #1F2937;
    background: #F9FAFB;
    border: 1px solid #E5E7EB;
    border-radius: 8px;
    transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
}

.faq-enquiry__input::placeholder { color: #9CA3AF; }

.faq-enquiry__input:focus {
    outline: none;
    background: #FFFFFF;
    border-color: #E8712C;
    box-shadow: 0 0 0 3px rgba(232, 113, 44, 0.12);
}

.faq-enquiry__btn {
    width: 100%;
    padding: 11px 16px;
    margin-top: 2px;
    font-family: inherit;
    font-size: 15px;
    font-weight: 700;
    color: #FFFFFF;
    background: #E8712C;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.2s, transform 0.15s;
}

.faq-enquiry__btn:hover { background: #D4621F; }
.faq-enquiry__btn:active { transform: translateY(1px); }
.faq-enquiry__btn:disabled { opacity: 0.6; cursor: not-allowed; }

.faq-enquiry__msg { font-size: 13px; line-height: 1.5; margin: 10px 0 0; }
.faq-enquiry__msg.is-success { color: #0F9D58; }
.faq-enquiry__msg.is-error { color: #DC2626; }

/* Phone field with +91 prefix */
.faq-enquiry__phone {
    display: flex;
    align-items: stretch;
    margin-bottom: 10px;
}

.faq-enquiry__cc {
    display: inline-flex;
    align-items: center;
    padding: 0 12px;
    font-size: 14px;
    font-weight: 600;
    color: #374151;
    background: #F3F4F6;
    border: 1px solid #E5E7EB;
    border-right: none;
    border-radius: 8px 0 0 8px;
}

.faq-enquiry__input--phone {
    margin-bottom: 0;
    border-radius: 0 8px 8px 0;
}

/* Current-service context line (replaces the service picker) */
.faq-enquiry__context {
    font-size: 12.5px;
    color: #6B7280;
    margin: 0 0 12px;
}
.faq-enquiry__context strong { color: #0F2C5C; font-weight: 600; }

/* Trust badges */
.faq-enquiry__badges {
    display: flex;
    flex-wrap: wrap;
    gap: 10px 14px;
    margin-top: 12px;
}

.faq-enquiry__badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 11.5px;
    font-weight: 600;
    color: #6B7280;
}

.faq-enquiry__badge svg {
    width: 13px;
    height: 13px;
    color: #0F9D58;
}

/* ---------- Right column ---------- */
.faq-expanded__list {
    display: flex;
    flex-direction: column;
    gap: 16px;
    min-width: 0;            /* allow text to wrap inside the grid track */
}

.faq-expanded__item {
    background: #FFFFFF;
    border: 1px solid #E5E7EB;
    border-radius: 12px;
    padding: 20px 24px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.04);
}

.faq-expanded__q {
    font-size: 18px;
    font-weight: 600;
    color: #0F2C5C;
    line-height: 1.4;
    margin: 0 0 10px;
}

.faq-expanded__a {
    font-size: 16px;
    font-weight: 400;
    color: #374151;
    line-height: 1.65;
    margin: 0;
}

.faq-expanded__a p { margin: 0 0 12px; }
.faq-expanded__a p:last-child { margin-bottom: 0; }
.faq-expanded__a a { color: #E8712C; text-decoration: none; }
.faq-expanded__a a:hover { text-decoration: underline; }

/* ---------- Expand / collapse (expanded by default; orange + <-> X) ---------- */
.faq-expanded__q {
    cursor: pointer;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 14px;
    -webkit-tap-highlight-color: transparent;
}

.faq-expanded__q::after {
    content: '';
    flex: 0 0 20px;
    width: 20px;
    height: 20px;
    margin-top: 2px;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23E8712C' stroke-width='2.5' stroke-linecap='round'%3E%3Cpath d='M12 5v14M5 12h14'/%3E%3C/svg%3E") no-repeat center / contain;
    transition: transform 0.3s ease;
    transform: rotate(45deg);   /* expanded (default) = X (a + rotated 45deg) */
}

.faq-expanded__item.is-collapsed .faq-expanded__q::after { transform: rotate(0deg); }   /* collapsed = + */
.faq-expanded__item.is-collapsed .faq-expanded__q { margin-bottom: 0; }
.faq-expanded__item.is-collapsed .faq-expanded__a { display: none; }

.faq-expanded__q:focus-visible {
    outline: 2px solid #E8712C;
    outline-offset: 3px;
    border-radius: 4px;
}

/* "Collapse all / Expand all" control (auto-inserted by faq-toggle.js) */
.faq-expanded__toggle-all {
    align-self: flex-end;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin: 0 2px 2px;
    padding: 7px 14px;
    font-family: inherit;
    font-size: 13px;
    font-weight: 600;
    color: #E8712C;
    background: #FEF4EE;
    border: 1px solid #F4D7C6;
    border-radius: 999px;
    cursor: pointer;
    transition: background 0.15s ease, border-color 0.15s ease;
}

.faq-expanded__toggle-all:hover {
    background: #FCE7DA;
    border-color: #E8712C;
}

.faq-expanded__toggle-all:focus-visible {
    outline: 2px solid #E8712C;
    outline-offset: 2px;
}

/* ---------- Stack on tablet / mobile ---------- */
@media (max-width: 900px) {
    /* Single column. Unwrap the aside (display:contents) so heading / lead /
       form become reorderable siblings of the list — this also stops the
       desktop-sticky aside from overlapping the scrolling list. */
    .faq-expanded {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .faq-expanded__aside { display: contents; }
    .faq-expanded__title { order: 1; }
    .faq-expanded__lead  { order: 2; margin-bottom: 0; }
    .faq-expanded__list  { order: 3; }
    /* Enquiry form: not sticky, moved to the BOTTOM (below the questions) */
    .faq-enquiry { order: 4; margin-top: 0; }
}

/* ---------- Mobile ---------- */
@media (max-width: 640px) {
    .faq-expanded__title { font-size: 24px; }
    .faq-expanded__item  { padding: 16px 18px; }
    .faq-expanded__q     { font-size: 16px; }
    .faq-expanded__a,
    .faq-expanded__a p   { font-size: 15px; }
}
/* ===== END faq.css ===== */

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
        /* Amount column — right-align only on tables with .table-amount class */
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
           EXPERT ATTRIBUTION BOX (E-E-A-T) — Plan 3.1
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
           TOC NAVIGATION — Plan 2.2
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

        /* Process Evidence Screenshot — Plan 3.2 */
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
        .btn-cta svg { width: 16px; height: 16px; }

        /* ============================================
           CUSTOM FAQ ACCORDION (replaces Bootstrap accordion)
           ============================================ */
        /* Static FAQ - direct Q&A, always expanded (no collapse) */
@media (max-width: 640px) {
}

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
        .testimonial-slider .slick-slide { padding: 0 10px; height: auto; }
        .testimonial-slider .slick-list { margin: 0 -10px; overflow: hidden; }
        .testimonial-slider .slick-dots { bottom: -40px; }
        .testimonial-slider .slick-dots li button:before { font-size: 10px; color: var(--gray-300); opacity: 1; }
        .testimonial-slider .slick-dots li.slick-active button:before { color: var(--orange); }
        .testimonial-slider { margin-bottom: 0 !important; padding-bottom: 0 !important; }
        .testimonial-slider .slick-track { display: flex !important; }
        .testimonial-slider .slick-slide > div { height: 100%; }
        /* Fixed uniform height so text + video cards always match (video area 298px + author = ~370px) */
        .testimonial-slider .testimonial-card { height: 370px !important; min-height: 370px !important; overflow: hidden; }
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
</style>
<link rel="stylesheet" href="/css/patron-cluster.css">
<link rel="stylesheet" href="/css/faq.css">
<style>
/* preview only: the estate's «FIELD» convention has no class in the master template, and a
   preview that silently swallowed an unfilled fact would read as finished work */
.pa-open{background:#FDE8D6;color:#9A3412;border:1px solid #F2C09A;border-radius:5px;
  padding:1px 6px;font-weight:700;font-size:.92em;white-space:nowrap}
/* pa-offsite marks a link whose destination is not in this local build. It used to draw a
   dotted underline and an arrow, which is fine on a link-audit view and wrong on the page -
   these are ordinary content links and should read as ordinary links, with the address in the
   href and nothing but the anchor text on screen. The class stays so the links can still be
   found programmatically; it just no longer decorates them. */
a.pa-offsite{border-bottom:0;text-decoration:none}
a.pa-offsite:hover{text-decoration:underline}
.pa-city-prose{margin-top:8px}

/* ---- Stoklenz product tour ---------------------------------------------------------------
   The platform section - the one part of the page selling a product rather than describing a
   procedure. Kept compact: a short cinematic video strip, then the capabilities as a 2x2 grid
   of thumbnail cards rather than full-width alternating rows, which ran to roughly twice the
   height for the same content. Media slots are empty on purpose and print the filename their
   asset should land at, so replacing one is a file drop with no markup change. */
.pa-sl{margin:20px 0 4px;display:grid;grid-template-columns:0.95fr 1.05fr;gap:26px;
  align-items:start}
/* the video pins while the capability cards scroll past it, so it has time to play through
   rather than leaving the viewport after one card */
.pa-sl-col{position:sticky;top:160px}
.pa-modal{position:fixed;inset:0;z-index:9999;display:flex;align-items:center;
  justify-content:center;padding:28px}
.pa-modal[hidden]{display:none}
.pa-modal-backdrop{position:absolute;inset:0;background:rgba(5,14,22,.72);
  backdrop-filter:blur(4px)}
.pa-modal-box{position:relative;z-index:1;width:min(1200px,96vw);height:min(820px,88vh);
  display:flex;flex-direction:column;background:#07121C;border:1px solid #14364A;
  border-radius:16px;overflow:hidden;box-shadow:0 30px 80px rgba(0,0,0,.5)}
.pa-modal-head{flex:0 0 auto;display:flex;align-items:center;gap:12px;padding:12px 14px;
  background:linear-gradient(180deg,#0C1F2E,#09192504);border-bottom:1px solid #14364A}
.pa-modal-mark{width:28px;height:28px;border-radius:8px;background:#14B8A6;color:#07121C;
  display:flex;align-items:center;justify-content:center;font-weight:800;font-size:15px}
.pa-modal-title{color:#fff;font-weight:700;font-size:15px;margin-right:auto}
.pa-modal-out{color:#9FD8CF !important;font-size:13px;font-weight:600;text-decoration:none;
  border:1px solid #1E4A5C;border-radius:50px;padding:6px 14px}
.pa-modal-out:hover{background:#0E2634;text-decoration:none}
.pa-modal-x{background:transparent;border:0;color:#9FB6C4;font-size:26px;line-height:1;
  cursor:pointer;padding:0 6px}
.pa-modal-x:hover{color:#fff}
.pa-modal-body{position:relative;flex:1 1 auto;background:#050E16}
.pa-modal-stand{position:absolute;inset:0;display:flex;flex-direction:column;
  align-items:center;justify-content:center;text-align:center;gap:12px;padding:32px 40px;
  background:radial-gradient(120% 90% at 78% 8%,rgba(20,184,166,.20) 0%,rgba(5,14,22,0) 62%),#050E16}
.pa-modal-badge{font-size:11.5px;font-weight:800;letter-spacing:.09em;text-transform:uppercase;
  color:#14B8A6;border:1px solid #175A54;border-radius:50px;padding:5px 13px}
.pa-modal-stand h3{margin:4px 0 0 !important;color:#fff;font-size:clamp(20px,2.4vw,27px);
  font-weight:700;line-height:1.25}
.pa-modal-stand p{margin:0 !important;color:#9FB6C4;font-size:15px;line-height:1.7;
  max-width:52ch;text-align:center}
.pa-modal-go{margin-top:8px;display:inline-flex;align-items:center;height:48px;padding:0 26px;
  border-radius:50px;background:#14B8A6;color:#04222A !important;font-weight:800;font-size:15px;
  text-decoration:none;box-shadow:0 10px 26px rgba(20,184,166,.34);
  transition:transform .25s ease,background .25s ease}
.pa-modal-go:hover{background:#0FA093;transform:translateY(-2px);text-decoration:none}
.pa-modal-small{color:#6C8598;font-size:12.5px}
.pa-modal-note{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;
  margin:0;padding:0 32px;text-align:center;color:#7E97A8;font-size:14px}
.pa-modal-frame{position:relative;width:100%;height:100%;border:0;display:block;background:#050E16}
@media (max-width:600px){.pa-modal{padding:0}.pa-modal-box{width:100vw;height:100vh;
  border-radius:0}}

.pa-sl-demo{position:relative;display:block;aspect-ratio:16/9;border-radius:14px;
  overflow:hidden;text-decoration:none;border:1px solid #0C2233;
  background-color:#07121C;background-size:cover;background-position:center;
  transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease}
.pa-sl-demo::after{content:"";position:absolute;inset:0;
  background:linear-gradient(160deg,rgba(7,18,28,.72) 0%,rgba(7,18,28,.90) 100%)}
.pa-sl-demo:hover{transform:translateY(-3px);border-color:#14B8A6;
  box-shadow:0 16px 34px rgba(6,20,32,.34)}
.pa-sl-glow{position:absolute;right:-18%;top:-28%;width:62%;aspect-ratio:1;border-radius:50%;
  background:radial-gradient(circle,rgba(20,184,166,.34) 0%,rgba(20,184,166,0) 68%)}
.pa-sl-demo-in{position:absolute;inset:0;z-index:2;display:flex;align-items:center;gap:14px;
  padding:0 24px}
.pa-sl-play{flex:0 0 auto;width:46px;height:46px;border-radius:50%;background:#14B8A6;
  display:flex;align-items:center;justify-content:center;
  box-shadow:0 8px 22px rgba(20,184,166,.42);transition:transform .25s ease}
.pa-sl-play::after{content:"";border-style:solid;border-width:8px 0 8px 14px;
  border-color:transparent transparent transparent #07121C;margin-left:3px}
.pa-sl-demo:hover .pa-sl-play{transform:scale(1.1)}
.pa-sl-demo-t{display:flex;flex-direction:column;gap:3px;min-width:0}
.pa-sl-demo-t strong{color:#fff;font-size:17px;font-weight:700;letter-spacing:.01em}
.pa-sl-demo-t span{color:#9FB6C4;font-size:13.5px}
.pa-sl-steps{display:flex;flex-direction:column;gap:16px}
.pa-sl-aside{margin-top:16px;background:#FCFDFF;border:1px solid var(--gray-200,#E5E7EB);
  border-left:3px solid var(--orange,#E8712C);border-radius:12px;padding:20px 22px}
.pa-sl-aside h3{margin:0 0 8px !important;font-size:17.5px;line-height:1.3;
  color:var(--blue,#14365F);font-weight:700}
.pa-sl-aside p{margin:0 !important;font-size:14.5px;line-height:1.7;text-align:left;
  -webkit-hyphens:manual;hyphens:manual}
.pa-sl-cta{display:flex;gap:10px;flex-wrap:wrap;margin-top:14px}
.pa-sl-btn{display:inline-flex;align-items:center;height:42px;padding:0 20px;border-radius:50px;
  background:var(--orange,#E8712C);color:#fff !important;font-weight:700;font-size:14.5px;
  text-decoration:none;transition:background .25s ease,transform .25s ease}
.pa-sl-btn:hover{background:var(--orange-dark,#C7501B);transform:translateY(-2px);
  text-decoration:none}
.pa-sl-btn--ghost{background:transparent;color:var(--blue,#14365F) !important;
  border:1.5px solid var(--gray-300,#D1D5DB)}
.pa-sl-btn--ghost:hover{background:#F9FAFB;border-color:var(--orange,#E8712C)}
.pa-sl-more{display:inline-block;margin-top:14px;font-size:14.5px;font-weight:700;
  color:var(--orange-dark,#C7501B);text-decoration:none;border-bottom:1px solid currentColor;
  padding-bottom:1px}
.pa-sl-more:hover{color:var(--blue,#14365F)}
.pa-sl-step{background:#fff;border:1px solid var(--gray-200,#E5E7EB);border-radius:12px;
  overflow:hidden;transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease}
.pa-sl-step:hover{transform:translateY(-3px);border-color:var(--orange,#E8712C);
  box-shadow:0 12px 26px rgba(15,54,95,.12)}
/* a real screenshot fills its frame; the step number sits on it */
.pa-sl-ph.is-shot{padding:0;background:#0B1F30;overflow:hidden;position:relative;
  aspect-ratio:16/10;height:auto}
.pa-sl-ph.is-shot img{width:100%;height:100%;object-fit:cover;object-position:top center;
  display:block}
.pa-sl-ph.is-shot .pa-sl-n{position:absolute;left:10px;bottom:10px}

/* thumbnails kept deliberately shallow - they are a visual cue, not the content */
.pa-sl-ph{position:relative;display:flex;align-items:flex-end;justify-content:space-between;
  aspect-ratio:16/9;padding:12px 14px;
  background:linear-gradient(180deg,#F7FAFF,#E9F0F9);border-bottom:1px solid #E5E7EB}
.pa-sl-ph .pa-sl-n{font-size:11px;font-weight:800;letter-spacing:.06em;color:#fff;
  background:var(--orange,#E8712C);border-radius:6px;padding:4px 8px;line-height:1}
.pa-sl-ph .pa-sl-path{color:#7C8DA6;opacity:.9}
.pa-sl-copy{padding:14px 18px 16px}
.pa-sl-copy h3{margin:0 0 6px !important;font-size:16.5px;line-height:1.3;
  color:var(--blue,#14365F);font-weight:700}
.pa-sl-copy p{margin:0 !important;font-size:14.5px;line-height:1.65;text-align:left;
  -webkit-hyphens:manual;hyphens:manual}
@media (max-width:900px){
  .pa-sl{grid-template-columns:1fr;gap:18px}
  .pa-sl-col{position:static}
}
@media (prefers-reduced-motion:reduce){
  .pa-sl-step{transition:none}
  .pa-sl-step:hover{transform:none}
  .pa-sl-vid{display:none}
}

/* WHAT_IS sub-sections: numbered, accented blocks. They are the disambiguation points of the
   page ("stock audit vs statutory audit", "stock taking vs reconciliation"), and as a plain
   H3-plus-paragraph run they read as one straight column with no rhythm. Justification and
   auto-hyphenation are turned off INSIDE the block only - a component style, not a global
   override - so the copy stops breaking mid-word ("owner-ship", "invent-ory"). */
.pa-wi-list{display:flex;flex-direction:column;gap:14px;margin:22px 0 4px}
.pa-wi-item{display:flex;gap:16px;align-items:flex-start;
  background:linear-gradient(180deg,#ffffff,#fafcff);
  border:1px solid var(--gray-200,#E5E7EB);border-left:3px solid var(--orange,#E8712C);
  border-radius:12px;padding:20px 22px;
  transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease}
.pa-wi-item:hover{transform:translateY(-3px);box-shadow:0 12px 26px rgba(15,54,95,.12);
  border-color:var(--orange,#E8712C)}
.pa-wi-n{flex:0 0 auto;font-size:12px;font-weight:800;letter-spacing:.06em;
  color:var(--orange-dark,#C7501B);background:#FEF4EE;border-radius:6px;padding:5px 9px;
  line-height:1;margin-top:3px}
.pa-wi-b{min-width:0}
.pa-wi-b h3{margin:0 0 8px !important;font-size:18px;line-height:1.3;
  color:var(--blue,#14365F);font-weight:700}
.pa-wi-b p{margin:0 !important;font-size:15.5px;line-height:1.75;
  text-align:left;-webkit-hyphens:manual;hyphens:manual}
@media (max-width:560px){.pa-wi-item{flex-direction:column;gap:10px}}
@media (prefers-reduced-motion:reduce){.pa-wi-item{transition:none}
  .pa-wi-item:hover{transform:none}}

/* BENEFITS and WHY PATRON on a 2x2 grid, with the estate's shared lucide icons. The cluster
   CSS runs features-grid at 3 columns and why-patron-grid at auto-fit, which left a lone card
   stranded on the second row. */
/* NOTE: BENEFITS sits on section.why-choose-section, not .content-section, so scoping these
   to .content-section silently missed it. Targeted on the grid class itself.
   BENEFITS carries four cards, so 2x2. WHY PATRON carries three, so one row of three. */
.features-grid,.why-patron-grid{gap:18px !important}
.features-grid.pa-cols-2,.why-patron-grid.pa-cols-2,.pa-ov-grid.pa-cols-2{
  grid-template-columns:repeat(2,1fr) !important}
.features-grid.pa-cols-3,.why-patron-grid.pa-cols-3,.pa-ov-grid.pa-cols-3{
  grid-template-columns:repeat(3,1fr) !important}
/* Three text cards at 3-up get narrow before the page does; drop them to 2 early. */
@media (max-width:1000px){.pa-ov-grid.pa-cols-3{
  grid-template-columns:repeat(2,1fr) !important}}
.feature-icon svg,
.pa-city-card .pa-card-icon svg{width:22px;height:22px;display:block}
.pa-city-card .pa-card-icon{color:var(--orange,#E8712C)}
@media (max-width:1000px){.why-patron-grid{grid-template-columns:repeat(2,1fr) !important}}
@media (max-width:760px){
  .features-grid,
  .why-patron-grid{grid-template-columns:1fr !important}
}

/* DOCUMENTS as points.
   Two things fought us here. patron-cluster.css sets `section ul li:not(.nav-item)` to
   display:flex, which turned each point into two flex items - the bold name in one column,
   the sentence in another - and gave it a 22px bullet of its own that collided with ours.
   Both are overridden. The marker is drawn on ::before/::after so wrapped lines hang under
   the text rather than under the tick. */
/* CASE STUDIES as a roadmap. The four parts the pack separates - challenge, what we did,
   what the count found, what changed - are stages of one engagement, so they run along a
   track rather than stacking as four paragraphs. The finding is the point of the story, so
   its node is filled orange and its copy sits on a tinted panel. */
.pa-case{background:#fff;border:1px solid var(--gray-200,#E5E7EB);
  border-left:3px solid var(--blue,#14365F);border-radius:12px;padding:24px 26px 20px;
  margin-bottom:18px}
.pa-case-h{margin-bottom:22px}
.pa-case-h h3{margin:0 0 6px !important;font-size:19px;line-height:1.3;
  color:var(--blue,#14365F);font-weight:700}
.pa-case-scale{margin:0 !important;font-size:11.5px;font-weight:800;letter-spacing:.07em;
  text-transform:uppercase;color:var(--orange-dark,#C7501B)}
.pa-case-client{margin:6px 0 0 !important;font-size:14px;color:#6B7280;font-style:italic}

/* CASE STUDIES as a straight roadmap: four stages on one line, copy beneath each node, a
   connector running from each node to the next. */
.pa-rm-track{list-style:none;margin:0;padding:0;display:grid;
  grid-template-columns:repeat(4,1fr);gap:0;align-items:start}
.pa-rm-stage{position:relative;padding:0 20px 0 0;display:block !important;margin:0 !important}
.pa-rm-stage + .pa-rm-stage{padding-left:20px}
.pa-rm-stage::before{content:"" !important;position:absolute;top:17px;left:46px;right:0;
  width:auto !important;height:2px !important;background:#DCE5EF;border-radius:0 !important;
  margin:0 !important;display:block !important}
.pa-rm-stage + .pa-rm-stage::before{left:66px}
.pa-rm-stage:last-child::before{display:none !important}
.pa-rm-node{position:relative;z-index:1;display:flex;align-items:center;justify-content:center;
  width:36px;height:36px;border-radius:50%;background:#fff;
  border:2px solid var(--blue,#14365F);color:var(--blue,#14365F);
  font-size:12.5px;font-weight:800}
.pa-rm-stage.is-out .pa-rm-node{background:var(--orange,#E8712C);
  border-color:var(--orange,#E8712C);color:#fff;
  box-shadow:0 0 0 5px rgba(232,113,44,.14)}
.pa-rm-lab{display:block;margin:14px 0 5px;font-size:11px;font-weight:800;letter-spacing:.08em;
  text-transform:uppercase;color:#8B98A8}
.pa-rm-stage.is-out .pa-rm-lab{color:var(--orange-dark,#C7501B)}
.pa-rm-stage p{margin:0 !important;font-size:14px;line-height:1.65;text-align:left;
  -webkit-hyphens:manual;hyphens:manual}
.pa-rm-stage.is-out p{background:#FEF6F1;border:1px solid #F5D2BC;border-radius:10px;
  padding:12px 14px}
@media (max-width:1000px){
  .pa-rm-track{grid-template-columns:repeat(2,1fr);gap:24px 0}
  .pa-rm-stage:nth-child(2n)::before{display:none !important}
}
@media (max-width:640px){
  .pa-rm-track{grid-template-columns:1fr;gap:18px}
  .pa-rm-stage,.pa-rm-stage + .pa-rm-stage{padding:0}
  .pa-rm-stage::before{display:none !important}
}

/* TOOL as a download card, RELATED SERVICES as link cards - both were heading-over-paragraph
   runs, and the tool section additionally left its first sub-heading orphaned above the
   second one with no body under it. */
.pa-tool{display:flex;gap:18px;align-items:flex-start;background:#fff;
  border:1px solid var(--gray-200,#E5E7EB);border-left:3px solid var(--orange,#E8712C);
  border-radius:12px;padding:22px 24px;margin:20px 0 0}
.pa-tool-ic{flex:0 0 auto;width:46px;height:46px;border-radius:12px;background:#FEF4EE;
  color:var(--orange-dark,#C7501B);display:flex;align-items:center;justify-content:center}
.pa-tool-ic svg{width:24px;height:24px}
.pa-tool-b{min-width:0}
.pa-tool-b h3{margin:0 0 6px !important;font-size:18px;line-height:1.3;
  color:var(--blue,#14365F);font-weight:700}
.pa-tool-b p{margin:0 !important;font-size:14.5px;line-height:1.7;text-align:left}
.pa-tool-btn{display:inline-flex;align-items:center;height:42px;padding:0 22px;margin-top:14px;
  border-radius:50px;background:var(--orange,#E8712C);color:#fff !important;font-weight:700;
  font-size:14.5px;text-decoration:none;transition:background .25s ease,transform .25s ease}
.pa-tool-btn:hover{background:var(--orange-dark,#C7501B);transform:translateY(-2px);
  text-decoration:none}
.pa-tool-note{margin-top:14px;font-size:14px;line-height:1.7;color:var(--text-secondary,#4B5563)}
.pa-tool-note strong{color:var(--blue,#14365F)}

.pa-rel-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin:20px 0 4px}
.pa-rel-card{display:flex;flex-direction:column;background:#fff;
  border:1px solid var(--gray-200,#E5E7EB);border-radius:12px;padding:20px 22px;
  text-decoration:none !important;
  transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease}
a.pa-rel-card:hover{transform:translateY(-3px);border-color:var(--orange,#E8712C);
  box-shadow:0 12px 26px rgba(15,54,95,.12);text-decoration:none}
.pa-rel-card h3{margin:0 0 7px !important;font-size:16.5px;line-height:1.35;
  color:var(--blue,#14365F);font-weight:700}
.pa-rel-card p{margin:0 !important;font-size:14.5px;line-height:1.7;text-align:left;
  color:var(--text-secondary,#4B5563);-webkit-hyphens:manual;hyphens:manual}
.pa-rel-go{margin-top:auto;padding-top:12px;font-size:13.5px;font-weight:700;
  color:var(--orange-dark,#C7501B)}
a.pa-rel-card:hover .pa-rel-go{color:var(--blue,#14365F)}
@media (max-width:1000px){.pa-rel-grid{grid-template-columns:repeat(2,1fr)}}
@media (max-width:640px){.pa-rel-grid{grid-template-columns:1fr}.pa-tool{flex-direction:column}}

/* LEGAL FRAMEWORK as citation cards: the provision as a chip, what it says as the heading. */
.pa-law-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:16px;margin:20px 0 4px}
.pa-law{background:#fff;border:1px solid var(--gray-200,#E5E7EB);
  border-left:3px solid var(--blue,#14365F);border-radius:12px;padding:20px 22px;
  transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease}
.pa-law:hover{transform:translateY(-3px);border-color:var(--blue,#14365F);
  box-shadow:0 12px 26px rgba(15,54,95,.12)}
.pa-law.is-note{border-left-color:var(--orange,#E8712C);background:#FEFBF9}
.pa-law-cite{display:inline-block;margin-bottom:9px;padding:5px 11px;border-radius:6px;
  background:#EEF3FA;color:var(--blue,#14365F);
  font-family:ui-monospace,"Cascadia Mono",Consolas,monospace;font-size:11.5px;
  font-weight:700;letter-spacing:.02em}
.pa-law h3{margin:0 0 7px !important;font-size:16.5px;line-height:1.35;
  color:var(--blue,#14365F);font-weight:700}
.pa-law p{margin:0 !important;font-size:14.5px;line-height:1.7;text-align:left;
  -webkit-hyphens:manual;hyphens:manual}
@media (max-width:820px){.pa-law-grid{grid-template-columns:1fr}}
@media (prefers-reduced-motion:reduce){.pa-law{transition:none}.pa-law:hover{transform:none}}

/* The CONCLUSION band flips to navy, and the template turns only its H2 white. Everything
   the cluster puts inside it - the H3 sub-headings and their copy - kept the default navy and
   came out invisible against the background. Inverted here for the whole band. */
.content-section[style*="var(--blue)"] .content-text h3{color:#FFFFFF !important;
  font-size:17.5px;line-height:1.35;margin:22px 0 6px !important;font-weight:700}
.content-section[style*="var(--blue)"] .content-text h3:first-child{margin-top:0 !important}
.content-section[style*="var(--blue)"] .content-text p{color:rgba(255,255,255,.86) !important;
  text-align:left;-webkit-hyphens:manual;hyphens:manual}
.content-section[style*="var(--blue)"] .content-text a{color:#F7A56B !important}
.content-section[style*="var(--blue)"] .content-text strong{color:#FFFFFF !important}

/* Both grids ran 4-up, which left 9 cities as 4+4+1 and 6 services as 4+2 - a row and a half
   of dead space. At 3-up they divide exactly: 3x3 and 2x3.
   patron-cluster.css also caps .pa-cross-grid at max-width:1100px with no auto margins, so
   inside a 1320px container it stopped ~220px short and left the whole gutter empty on one
   side. Released to the container width. */
.pa-cross-grid{max-width:none !important;margin-left:0 !important;margin-right:0 !important}
.pa-city-grid{grid-template-columns:repeat(3,1fr) !important;gap:14px !important}
.pa-cross-grid{grid-template-columns:repeat(3,1fr) !important;gap:14px !important}
@media (max-width:900px){
  .pa-city-grid,.pa-cross-grid{grid-template-columns:repeat(2,1fr) !important}
}
@media (max-width:560px){
  .pa-city-grid,.pa-cross-grid{grid-template-columns:1fr !important}
}

/* Coverage notes under the city grids: a pair of tinted, icon-led asides rather than a third
   run of heading-over-paragraph. */
.pa-note-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:16px;margin-top:8px}
.pa-note{display:flex;gap:14px;align-items:flex-start;background:#F7FAFF;
  border:1px solid #E1E8F2;border-radius:12px;padding:18px 20px}
.pa-note-ic{flex:0 0 auto;width:36px;height:36px;border-radius:10px;background:#fff;
  border:1px solid #E1E8F2;display:flex;align-items:center;justify-content:center}
.pa-note-ic svg{width:19px;height:19px}
.pa-note-b{min-width:0}
.pa-note-b h3{margin:0 0 5px !important;font-size:16px;line-height:1.35;
  color:var(--blue,#14365F);font-weight:700}
.pa-note-b p{margin:0 !important;font-size:14.5px;line-height:1.7;text-align:left;
  -webkit-hyphens:manual;hyphens:manual}
@media (max-width:760px){.pa-note-grid{grid-template-columns:1fr}}

/* Testimonials. The cards are live's own `testi-quote-card`, so live's stylesheet already
   sizes, clamps and rules them off - nothing to restate here. Two things live gets from
   Slick that a static page has to supply itself: the row of four, and the gutters. Applied
   only while the slider is un-initialised, so if Slick does load it takes over untouched. */
.testimonial-slider:not(.slick-initialized){display:grid !important;
  grid-template-columns:repeat(4,minmax(0,1fr));gap:20px;align-items:stretch}
.testimonial-slider:not(.slick-initialized) > div{min-width:0}
.testi-quote-text{-webkit-hyphens:manual;hyphens:manual}
@media (max-width:1200px){.testimonial-slider:not(.slick-initialized){
  grid-template-columns:repeat(3,minmax(0,1fr))}}
@media (max-width:900px){.testimonial-slider:not(.slick-initialized){
  grid-template-columns:repeat(2,minmax(0,1fr))}}
@media (max-width:600px){.testimonial-slider:not(.slick-initialized){
  grid-template-columns:1fr}}

/* WHAT_IS artwork, titled the way the accounting cluster titles it: white card, service name
   in navy with an orange rule under it, illustration beneath. */
.pa-art{margin:0;width:100%;background:#fff;border:1px solid var(--gray-200,#E5E7EB);
  border-radius:16px;padding:22px 24px 24px;box-shadow:0 6px 22px rgba(15,54,95,.07)}
.pa-art-t{position:relative;padding-bottom:14px;margin-bottom:6px;
  font-size:clamp(19px,2.1vw,26px);font-weight:800;line-height:1.18;
  color:var(--blue,#14365F);letter-spacing:-.01em}
.pa-art-t::after{content:"";position:absolute;left:0;bottom:0;width:132px;height:4px;
  border-radius:2px;background:var(--orange,#E8712C)}
.pa-art img{display:block;width:100%;height:auto;border-radius:12px}

/* Stats bar. Live runs four stats and two certifications on one centred row, the
   certifications divided off by a left border. Four stats carrying a description are wider
   than that row can hold, so live's own wrapped state - the one its <=1100px rule defines -
   is applied at every width: certifications centred on their own line under a rule. The row
   above keeps live's centring and spacing untouched. */
.stats-container{align-items:flex-start !important;gap:26px 44px !important}
.stats-container .stat-item{flex:0 1 auto;max-width:300px}
.certifications{padding-left:0 !important;border-left:none !important;width:100% !important;
  justify-content:center !important;gap:34px !important;padding-top:16px !important;
  margin-top:4px;border-top:1px solid var(--gray-200,#E5E7EB) !important}
.cert-item{align-items:flex-start !important;gap:8px !important}

/* Related reading: many short titles, so a wrapping column grid rather than the wide cards
   the sector and city blocks use. */
.pa-read-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:10px 18px}
.pa-read-card{display:flex;align-items:flex-start;justify-content:space-between;gap:10px;
  background:#fff;border:1px solid var(--gray-200,#E5E7EB);border-radius:10px;
  padding:12px 14px;font-size:14px;line-height:1.5;font-weight:600;
  color:var(--blue,#14365F);text-decoration:none;transition:all .25s}
.pa-read-card:hover{border-color:var(--orange,#E8712C);transform:translateY(-2px);
  box-shadow:0 6px 18px rgba(15,54,95,.08)}
.pa-read-go{color:var(--orange,#E8712C);flex:0 0 auto;font-weight:800}
@media (max-width:1000px){.pa-read-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media (max-width:640px){.pa-read-grid{grid-template-columns:1fr}}

.pa-doc-list{list-style:none;padding:0;margin:20px 0 4px;display:flex;flex-direction:column;
  gap:11px}
.pa-doc-list li{display:block !important;position:relative;padding-left:30px !important;
  margin:0 !important;gap:0 !important;font-size:15px;line-height:1.7;
  color:var(--text-secondary,#4B5563);text-align:left;
  -webkit-hyphens:manual;hyphens:manual}
.pa-doc-list li::before{content:"" !important;position:absolute !important;left:0 !important;
  top:.36em !important;width:17px !important;height:17px !important;border-radius:50% !important;
  background:#FEF4EE !important;box-shadow:inset 0 0 0 1.5px rgba(232,113,44,.45) !important;
  margin:0 !important;display:block !important}
.pa-doc-list li::after{content:"";position:absolute;left:5px;top:.66em;width:6px;height:3px;
  border-left:1.8px solid var(--orange-dark,#C7501B);
  border-bottom:1.8px solid var(--orange-dark,#C7501B);transform:rotate(-45deg)}
.pa-doc-list strong{color:var(--blue,#14365F);font-weight:700}

/* OVERVIEW points as cards - each is a discrete "when/why a count is asked for", not prose */
.pa-ov-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:18px;margin:24px 0 4px}
@media (max-width:760px){.pa-ov-grid{grid-template-columns:1fr}}
/* hover follows the house treatment: .feature-card lifts 2px with an orange border and a
   shadow, .pa-city-card grows a left accent bar. Same vocabulary, same 0.25s. */
.pa-ov-card{background:#fff;border:1px solid var(--gray-200,#E5E7EB);border-radius:12px;
  padding:20px 22px;position:relative;overflow:hidden;
  transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease}
.pa-ov-card::before{content:"";position:absolute;left:0;top:0;bottom:0;width:3px;
  background:var(--orange,#E8712C);transform:scaleY(0);transform-origin:top;
  transition:transform .25s ease}
.pa-ov-card:hover{border-color:var(--orange,#E8712C);transform:translateY(-3px);
  box-shadow:0 12px 26px rgba(15,54,95,.12)}
.pa-ov-card:hover::before{transform:scaleY(1)}
.pa-ov-card h3{margin:0 0 8px;font-size:17px;line-height:1.3;color:var(--blue,#14365F);
  font-weight:700;transition:color .25s ease}
.pa-ov-card:hover h3{color:var(--orange-dark,#C7501B)}
.pa-ov-card p{margin:0 !important;font-size:15.5px;line-height:1.7;text-align:left}
@media (prefers-reduced-motion:reduce){
  .pa-ov-card,.pa-ov-card::before,.pa-ov-card h3{transition:none}
  .pa-ov-card:hover{transform:none}
}

/* WHAT_IS on a page with no artwork: one column, not a 1.2fr/0.8fr grid with a hole in it */
.two-column.is-single{grid-template-columns:1fr !important}
/* WHAT_IS artwork: its own ratio, not the SVG slot's square-inside-4:3 frame */
.pa-what-figure{margin:0;width:100%;max-width:460px;display:flex;flex-direction:column;
  align-items:center;gap:14px}
.pa-what-figure img{width:100%;height:auto;display:block;border-radius:14px;
  border:1px solid #E5E7EB}
.pa-what-figure figcaption{align-self:stretch}
</style>
@endsection

@section('schema')
@verbatim
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/stock-audit-for-fmcg/#service",
        "name": "Stock Audit for FMCG Companies in India",
        "description": "FMCG stock is audited across depots, C&amp;F agents and distributors. Secondary stock is verified, and damage and expiry claims are tested against evidence.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/stock-audit-for-fmcg" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Stock Audit for FMCG", "sameAs": "" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Stock Audit for FMCG Service Plans",
            "itemListElement": [
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Channel Stock Position by Depot and Distributor", "description": "An FMCG audit stating stock separately at each depot, agent and distributor point, with ownership marked, so what is owned and what is not are never merged."}},
{"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Damage and Expiry Claim Evidence Pack", "description": "Claimed quantities matched to batch records and physical stock, photographed, so each claim either stands on evidence or is identified as unsupported."}},
{"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Near-Expiry Ageing Schedule", "description": "Finished goods aged against remaining shelf life, which is what turns a quantity into a provisioning conversation rather than a number nobody acts on."}}
            ]
        }
    }
    </script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "@id": "https://www.patronaccounting.com/stock-audit-for-fmcg/#breadcrumb",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://www.patronaccounting.com/"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "PAN India Stock Audit Services",
            "item": "https://www.patronaccounting.com/pan-india-stock-audit-services"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "Inventory Audit / Stock Audit",
            "item": "https://www.patronaccounting.com/stock-audit"
        },
        {
            "@type": "ListItem",
            "position": 4,
            "name": "FMCG",
            "item": "https://www.patronaccounting.com/stock-audit-for-fmcg"
        }
    ]
}
</script><script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/stock-audit-for-fmcg/#faq",
        "datePublished": "2026-08-20T08:00:00+05:30",
        "dateModified": "2026-08-20T08:00:00+05:30",
        "mainEntity": [
            {"@type": "Question", "name": "How does a stock audit help control channel loading?", "acceptedAnswer": {"@type": "Answer", "text": "Counting stock in the channel reveals how much has been pushed to distributors but not sold through. Persistent high channel stock against flat secondary sales is the pattern that precedes returns and claims, and it is only visible if secondary stock is measured."}},
{"@type": "Question", "name": "Is an FMCG stock audit different from a bank stock audit?", "acceptedAnswer": {"@type": "Answer", "text": "The count procedure is similar but the purpose differs. A bank stock audit tests security value for a lender. An FMCG channel audit tests claim validity and channel visibility for management. The same visit can serve both if the scope is written to cover them."}},
{"@type": "Question", "name": "How do you verify distributor stock you do not physically hold?", "acceptedAnswer": {"@type": "Answer", "text": "Secondary stock at distributors is verified by counting at the distributor premises and reconciling to both the distributor records and your dispatch data. Because the stock is not on your books as inventory, the purpose is claim validation and channel visibility rather than balance-sheet verification."}},
{"@type": "Question", "name": "What are primary and secondary sales in FMCG?", "acceptedAnswer": {"@type": "Answer", "text": "Primary sales are movements from the company to the distributor. Secondary sales are movements from the distributor to the retailer. The gap between them sits as stock in the channel, which is what distorts demand signals when it is not measured."}},
{"@type": "Question", "name": "What evidence is needed for a damage or expiry claim?", "acceptedAnswer": {"@type": "Answer", "text": "A defensible claim needs the physical goods available for inspection or documented destruction, batch and expiry details, the original invoice reference, and the claim quantity reconciled to stock records. Claims settled on a declaration alone are the most common source of leakage."}},
{"@type": "Question", "name": "How is depot stock reconciled to head office books?", "acceptedAnswer": {"@type": "Answer", "text": "Each depot is counted and reconciled locally, then depot balances are aggregated and compared with the head office inventory ledger. Differences usually arise from stock in transit between depots and from transfers recorded in one location but not the other."}},
{"@type": "Question", "name": "What is C&F agent stock and who owns it?", "acceptedAnswer": {"@type": "Answer", "text": "Stock held by a clearing and forwarding agent remains the property of the company. The agent holds and dispatches it. It belongs in the company inventory, must be counted at the agent premises, and is a common gap when audits cover only company-owned warehouses."}},
{"@type": "Question", "name": "Which stock is treated as saleable returns?", "acceptedAnswer": {"@type": "Answer", "text": "Returns that are undamaged, within shelf life and in original packaging can normally be returned to saleable stock. Anything outside that is a write-off or a claim. The audit checks that the distinction is being applied consistently rather than case by case."}},
{"@type": "Question", "name": "How is near-expiry FMCG stock valued?", "acceptedAnswer": {"@type": "Answer", "text": "Stock approaching expiry is usually written down to the value it can realistically fetch, which may be a discounted trade price rather than full value. The audit reports remaining shelf life by batch so the provision can be tested against actual realisability."}},
{"@type": "Question", "name": "Why does FMCG stock need batch-level counting?", "acceptedAnswer": {"@type": "Answer", "text": "FMCG stock moves by batch because expiry, recall and claim decisions all operate at batch level. A count that records only total quantity per SKU cannot support an expiry provision or a recall, so batch identity is captured during the count."}}
        ]
    }
    </script><script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/stock-audit-for-fmcg",
        "name": "Stock Audit for FMCG Companies in India",
        "description": "FMCG stock is audited across depots, C&amp;F agents and distributors. Secondary stock is verified, and damage and expiry claims are tested against evidence.",
        "url": "https://www.patronaccounting.com/stock-audit-for-fmcg",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com" },
        "about": { "@id": "https://www.patronaccounting.com/stock-audit-for-fmcg/#service" },
        "datePublished": "2026-08-20T08:00:00+05:30",
        "dateModified": "2026-08-20T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/stock-audit-for-fmcg/#breadcrumb" }
    }
    </script><script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "@id": "https://www.patronaccounting.com/#organization-rating",
        "name": "Patron Accounting LLP",
        "url": "https://www.patronaccounting.com",
        "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "850", "bestRating": "5", "worstRating": "1" }
    }
    </script>
@endverbatim
@endsection

@section('content')
@verbatim
<main>

<!-- BREADCRUMB -->
<nav aria-label="Breadcrumb" style="background:var(--gray-50);border-bottom:1px solid var(--gray-200);padding:10px 16px;">
    <div style="max-width:1320px;margin:0 auto;">
        <ol style="display:flex;align-items:center;gap:8px;list-style:none;padding:0;margin:0;font-size:13px;font-family:'Barlow',sans-serif;">
<li style="display:flex;align-items:center;gap:8px;"><a href="https://www.patronaccounting.com/" style="color:var(--text-muted);text-decoration:none;font-weight:500;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;vertical-align:middle;margin-right:2px;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>Home</a><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg></li>
<li style="display:flex;align-items:center;gap:8px;"><a href="/pan-india-stock-audit-services" style="color:var(--text-muted);text-decoration:none;font-weight:500;">PAN India Stock Audit Services</a><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg></li>
<li style="display:flex;align-items:center;gap:8px;"><a href="/stock-audit" style="color:var(--text-muted);text-decoration:none;font-weight:500;">Inventory Audit / Stock Audit</a><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg></li>
<li><span style="color:var(--orange);font-weight:600;">FMCG</span></li>
</ol>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="py-5" style="background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="pe-lg-5">
                    <div class="hero-badge">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        500+ stock audits completed
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        Stock Audit for FMCG Companies in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: 20 August 2026</span>
                        </span>
                        <a href="https://www.patronaccounting.com/about-us/" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Channel Stock You Can Actually Report:</span> An FMCG audit establishes what is physically sitting at depots, agents and distributors, which is the figure planning and revenue recognition both depend on.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Claims Settled on Evidence Instead of Argument:</span> Damage and expiry claims matched to batch records and photographed, so each one either stands or is identified as unsupported before money moves.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Expiry Exposure Quantified Before It Lands:</span> Near-expiry stock aged across the channel, which turns a future write-off into a number the business can act on while there is still time to move the goods.</p>
                        </div>
                        </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Batch and expiry captured at the point of counting.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Stock Audit for FMCG%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Stock Audit for FMCG%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20quote%20for%20Stock%20Audit%20for%20FMCG." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Stock Audit for FMCG'/>
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
                                <option value='Asset Tagging Services'>Asset Tagging Services</option>
<option value='Fixed Asset Verification'>Fixed Asset Verification</option>
<option value='Mystery Audit Services'>Mystery Audit Services</option>
<option value='Stock Audit'>Stock Audit</option>
<option value='Stock Audit for Auto Components'>Stock Audit for Auto Components</option>
<option value='Stock Audit for Dark Stores'>Stock Audit for Dark Stores</option>
<option value='Stock Audit for Electronics'>Stock Audit for Electronics</option>
<option value='Stock Audit for Machine Tools'>Stock Audit for Machine Tools</option>
<option value='Stock Audit for FMCG' selected>Stock Audit for FMCG</option>
<option value='Stock Audit for Pharma'>Stock Audit for Pharma</option>
<option value='Stock Audit for Retail'>Stock Audit for Retail</option>
<option value='Stock Audit for Agro-Inputs'>Stock Audit for Agro-Inputs</option>
<option value='Stock Audit for Textile'>Stock Audit for Textile</option>
<option value='Stock Audit for Warehousing'>Stock Audit for Warehousing</option>
<option value='Stock Audit in Ahmedabad'>Stock Audit in Ahmedabad</option>
<option value='Stock Audit in Bangalore'>Stock Audit in Bangalore</option>
<option value='Stock Audit in Chennai'>Stock Audit in Chennai</option>
<option value='Stock Audit in Delhi'>Stock Audit in Delhi</option>
<option value='Stock Audit in Gurugram'>Stock Audit in Gurugram</option>
<option value='Stock Audit in Hyderabad'>Stock Audit in Hyderabad</option>
<option value='Stock Audit in Kolkata'>Stock Audit in Kolkata</option>
<option value='Stock Audit in Mumbai'>Stock Audit in Mumbai</option>
<option value='Stock Audit in Pune'>Stock Audit in Pune</option>
<option value='Other'>Other</option>

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
            <h2>What Clients Say</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, & stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        
        <div><div class="testi-video-card"><div class="testi-video-area" onclick="toggleTestiVideo(this)"><video preload="none" playsinline poster="https://www.patronaccounting.com/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"><source src="https://www.patronaccounting.com/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4" type="video/mp4"></video><div class="testi-play-overlay"><div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div><div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div></div><div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;"><div class="testi-avatar"><img src="https://www.patronaccounting.com/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg" alt="Sunny Ashpal" loading="lazy"></div><div><div class="testi-name">Sunny Ashpal</div><div class="testi-role">Director - Demandify Media</div></div></div></div></div>
<div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">I've had an outstanding experience working with Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process smooth and stress-free. Highly recommended for anyone seeking reliable and knowledgeable financial guidance!</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar ">SM</div><div><div class="testi-name">Subhendu Mishra</div><div class="testi-role">Verified Google review</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge" aria-hidden="true"><svg viewBox="0 0 24 24"><path fill="#4285F4" d="M23 12.27c0-.82-.07-1.6-.21-2.36H12v4.47h6.17a5.28 5.28 0 01-2.29 3.46v2.88h3.7C21.73 18.75 23 15.79 23 12.27z"/><path fill="#34A853" d="M12 23.5c3.1 0 5.7-1.03 7.6-2.78l-3.7-2.88c-1.03.69-2.351.1-3.9 1.1-3 0-5.54-2.02-6.45-4.75h-3.8v2.98A11.5 11.5 0 0012 23.5z"/><path fill="#FBBC05" d="M5.55 14.19a6.9 6.9 0 010-4.38V6.83h-3.8a11.5 11.5 0 00010.34l3.8-2.98z"/><path fill="#EA4335" d="M12 5.02c1.69 0 3.2.58 4.4 1.72l3.28-3.28C17.7 1.6 15.1.5 12 .5A11.5 11.5 0 001.75 6.83l3.8 2.98C6.46 7.08 9 5.02 12 5.02z"/></svg></div></div></div></div></div>
<div><div class="testi-video-card"><div class="testi-video-area" onclick="toggleTestiVideo(this)"><video preload="none" playsinline poster="https://www.patronaccounting.com/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"><source src="https://www.patronaccounting.com/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4" type="video/mp4"></video><div class="testi-play-overlay"><div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div><div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div></div><div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;"><div class="testi-avatar"><img src="https://www.patronaccounting.com/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg" alt="Anjanay Srivastava" loading="lazy"></div><div><div class="testi-name">Anjanay Srivastava</div><div class="testi-role">Founder - Hunarsource Consulting</div></div></div></div></div>
<div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really impressed by their acumen. And it's not expensive at all. Good guidance while filling was given as well.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar blue">RD</div><div><div class="testi-name">Rajib Dutta</div><div class="testi-role">Verified Google review</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge" aria-hidden="true"><svg viewBox="0 0 24 24"><path fill="#4285F4" d="M23 12.27c0-.82-.07-1.6-.21-2.36H12v4.47h6.17a5.28 5.28 0 01-2.29 3.46v2.88h3.7C21.73 18.75 23 15.79 23 12.27z"/><path fill="#34A853" d="M12 23.5c3.1 0 5.7-1.03 7.6-2.78l-3.7-2.88c-1.03.69-2.351.1-3.9 1.1-3 0-5.54-2.02-6.45-4.75h-3.8v2.98A11.5 11.5 0 0012 23.5z"/><path fill="#FBBC05" d="M5.55 14.19a6.9 6.9 0 010-4.38V6.83h-3.8a11.5 11.5 0 00010.34l3.8-2.98z"/><path fill="#EA4335" d="M12 5.02c1.69 0 3.2.58 4.4 1.72l3.28-3.28C17.7 1.6 15.1.5 12 .5A11.5 11.5 0 001.75 6.83l3.8 2.98C6.46 7.08 9 5.02 12 5.02z"/></svg></div></div></div></div></div>
<div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge, attention to detail, and a genuine willingness to help. It gave me immense confidence and peace of mind.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar teal">PR</div><div><div class="testi-name">Preeti Singh Rathor</div><div class="testi-role">Verified Google review</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge" aria-hidden="true"><svg viewBox="0 0 24 24"><path fill="#4285F4" d="M23 12.27c0-.82-.07-1.6-.21-2.36H12v4.47h6.17a5.28 5.28 0 01-2.29 3.46v2.88h3.7C21.73 18.75 23 15.79 23 12.27z"/><path fill="#34A853" d="M12 23.5c3.1 0 5.7-1.03 7.6-2.78l-3.7-2.88c-1.03.69-2.351.1-3.9 1.1-3 0-5.54-2.02-6.45-4.75h-3.8v2.98A11.5 11.5 0 0012 23.5z"/><path fill="#FBBC05" d="M5.55 14.19a6.9 6.9 0 010-4.38V6.83h-3.8a11.5 11.5 0 00010.34l3.8-2.98z"/><path fill="#EA4335" d="M12 5.02c1.69 0 3.2.58 4.4 1.72l3.28-3.28C17.7 1.6 15.1.5 12 .5A11.5 11.5 0 001.75 6.83l3.8 2.98C6.46 7.08 9 5.02 12 5.02z"/></svg></div></div></div></div></div>
<div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned Anu to take care of our company's needs. She files all returns timely and is most kind and respectful towards us.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar purple">NN</div><div><div class="testi-name">Nikhil Nimbhorkar</div><div class="testi-role">Verified Google review</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge" aria-hidden="true"><svg viewBox="0 0 24 24"><path fill="#4285F4" d="M23 12.27c0-.82-.07-1.6-.21-2.36H12v4.47h6.17a5.28 5.28 0 01-2.29 3.46v2.88h3.7C21.73 18.75 23 15.79 23 12.27z"/><path fill="#34A853" d="M12 23.5c3.1 0 5.7-1.03 7.6-2.78l-3.7-2.88c-1.03.69-2.351.1-3.9 1.1-3 0-5.54-2.02-6.45-4.75h-3.8v2.98A11.5 11.5 0 0012 23.5z"/><path fill="#FBBC05" d="M5.55 14.19a6.9 6.9 0 010-4.38V6.83h-3.8a11.5 11.5 0 00010.34l3.8-2.98z"/><path fill="#EA4335" d="M12 5.02c1.69 0 3.2.58 4.4 1.72l3.28-3.28C17.7 1.6 15.1.5 12 .5A11.5 11.5 0 001.75 6.83l3.8 2.98C6.46 7.08 9 5.02 12 5.02z"/></svg></div></div></div></div></div>
<div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">I got financial services from them for my private limited company. They are having good and qualified staff to provide services in a professional manner which is beneficial for me.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar ">MS</div><div><div class="testi-name">Monika Sharma</div><div class="testi-role">Verified Google review</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge" aria-hidden="true"><svg viewBox="0 0 24 24"><path fill="#4285F4" d="M23 12.27c0-.82-.07-1.6-.21-2.36H12v4.47h6.17a5.28 5.28 0 01-2.29 3.46v2.88h3.7C21.73 18.75 23 15.79 23 12.27z"/><path fill="#34A853" d="M12 23.5c3.1 0 5.7-1.03 7.6-2.78l-3.7-2.88c-1.03.69-2.351.1-3.9 1.1-3 0-5.54-2.02-6.45-4.75h-3.8v2.98A11.5 11.5 0 0012 23.5z"/><path fill="#FBBC05" d="M5.55 14.19a6.9 6.9 0 010-4.38V6.83h-3.8a11.5 11.5 0 00010.34l3.8-2.98z"/><path fill="#EA4335" d="M12 5.02c1.69 0 3.2.58 4.4 1.72l3.28-3.28C17.7 1.6 15.1.5 12 .5A11.5 11.5 0 001.75 6.83l3.8 2.98C6.46 7.08 9 5.02 12 5.02z"/></svg></div></div></div></div></div>
<div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">I have been taking services of Patron Accounting from 5 years and found them highly professional and the best people for all taxation related work be it individual or company services. Highly recommended.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar blue">AG</div><div><div class="testi-name">Ayushi Garg</div><div class="testi-role">Verified Google review</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge" aria-hidden="true"><svg viewBox="0 0 24 24"><path fill="#4285F4" d="M23 12.27c0-.82-.07-1.6-.21-2.36H12v4.47h6.17a5.28 5.28 0 01-2.29 3.46v2.88h3.7C21.73 18.75 23 15.79 23 12.27z"/><path fill="#34A853" d="M12 23.5c3.1 0 5.7-1.03 7.6-2.78l-3.7-2.88c-1.03.69-2.351.1-3.9 1.1-3 0-5.54-2.02-6.45-4.75h-3.8v2.98A11.5 11.5 0 0012 23.5z"/><path fill="#FBBC05" d="M5.55 14.19a6.9 6.9 0 010-4.38V6.83h-3.8a11.5 11.5 0 00010.34l3.8-2.98z"/><path fill="#EA4335" d="M12 5.02c1.69 0 3.2.58 4.4 1.72l3.28-3.28C17.7 1.6 15.1.5 12 .5A11.5 11.5 0 001.75 6.83l3.8 2.98C6.46 7.08 9 5.02 12 5.02z"/></svg></div></div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">500+ stock audits completed</h3>
                    <p>Rated 4.9 on Google across 13 reviews.</p>
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
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 3h6a1 1 0 011 1v1H8V4a1 1 0 011-1z"/><path d="M8 5H6a2 2 0 00-2 2v13a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><path d="m9.5 13.5 2 2 3.5-3.5"/></svg></div>
            <div class="stat-content"><span class="stat-value">500+</span><span class="stat-label">Stock Audits Completed</span><span class="stat-desc">Counts run across borrower sites and cities.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span><span class="stat-desc">ICAI and ICSI registered, in Indian accounting and certification.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="m8.5 15 2 2 4.5-4.5"/></svg></div>
            <div class="stat-content"><span class="stat-value">CA-Signed</span><span class="stat-label">Audit Reports</span><span class="stat-desc">Signed by a Chartered Accountant in practice, not a checker.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Google Rating</span><span class="stat-desc">Across 13 verified Google reviews.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#14365F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>UDIN on Every Report<span class="cert-desc">Verifiable against the ICAI record before a lender relies on it.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your financial and business data is fully protected.</span></div>
        </div>
    </div>
</div>

<!-- TOC NAVIGATION -->
<div class="toc-section">
    <div class="toc-container">
        <button class="toc-arrow left" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
            
            <a href="#overview-section" class="toc-btn active">Overview</a>
<a href="#what-section" class="toc-btn">What It Is</a>
<a href="#who-section" class="toc-btn">Who It Is For</a>
<a href="#services-section" class="toc-btn">Scope</a>
<a href="#procedure-section" class="toc-btn">Process</a>
<a href="#integrations-section" class="toc-btn">Stoklenz</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Problems</a>
<a href="#fees-section" class="toc-btn">Fees</a>
<a href="#benefits-section" class="toc-btn">Benefits</a>
<a href="#why-patron-section" class="toc-btn">Why Patron</a>
<a href="#case-study-section" class="toc-btn">Case Studies</a>
<a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Makes FMCG Stock Different</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Stock Audit for FMCG Services at a Glance</strong></p>
                    <p>A stock audit for FMCG companies works mostly away from the factory, at depots, carrying and forwarding agents and distributor godowns. Ownership is settled before anything is counted, then primary dispatch is reconciled against reported secondary sales and against damage and expiry claims. Food products sit additionally under the Food Safety and Standards Act 2006, so storage condition and remaining shelf life are recorded. Frequently commissioned when channel stock stops matching head office books.</p>
                </div>
                <p>Most of the effort happens well away from the factory. The stock that decides the balance sheet sits in depots, at carrying and forwarding agents, and on distributor shelves in towns nobody from head office visits. It is owned by the company at some of those points and not at others, and the line between the two is where an FMCG audit either works or falls apart.</p>
                
<div class="pa-ov-grid pa-cols-3"><article class="pa-ov-card"><h3>Stock You Own Sitting in Somebody Else Godown</h3><p><a href="/glossary/stock-audit/cf-agent-stock">cf agent stock</a> is held by an agent but owned by the principal, so it stays on the principal's books and must be counted there. The agent's own trading stock, sitting in the same godown, must not be. Establishing which pallet belongs to whom, before anything is counted, is the step that decides whether the closing figure means anything at all.</p></article>
<article class="pa-ov-card"><h3>Primary Sales Booked, Secondary Sales Unknown</h3><p>Primary sales leave the depot and enter the books. <a href="/glossary/stock-audit/secondary-sales">secondary sales</a> leave the distributor and are reported back, often late and sometimes optimistically. When a quarter closes on primary dispatch alone, stock has been pushed into the channel rather than sold through it, and the position only surfaces when somebody counts what is still sitting at the distributor.</p></article>
<article class="pa-ov-card"><h3>Why Depot Stock and Head Office Books Diverge</h3><p>Three causes account for most of the gap. Goods dispatched and not yet received, sitting in transit across a cut-off. <a href="/glossary/stock-audit/saleable-returns">saleable returns</a> taken back at the depot and credited centrally on a different date. And damage or expiry cleared physically well before the claim is settled in the books. A <a href="/stock-audit">stock audit</a> at the depot reconciles the three rather than treating the difference as a single unexplained variance.</p></article></div>

                
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What an FMCG Stock Audit Covers</h2>
                <div class="content-text what-is-definition">
                    
                    <p>An FMCG audit follows ownership across the distribution chain rather than stopping at the factory gate. The exercise reaches depots, carrying and forwarding agents and, where the arrangement requires it, distributor premises. The boundary is drawn at title. Stock the company still owns is in scope wherever it physically sits; stock already sold to a distributor is outside it, however much the brand would like the number.</p><div class="pa-wi-list"><article class="pa-wi-item"><span class="pa-wi-n">01</span><div class="pa-wi-b"><h3>Depot, C&amp;F and Distributor Stock in One Exercise</h3><p>One engagement, three kinds of premises, one cut-off across all of them. Depots are company-operated and produce the cleanest records. C&amp;F agents hold company stock under an agency arrangement and keep records to their own conventions. Distributor premises are third-party, so access rests on the distribution agreement rather than on any right of the auditor. Running them to a single cut-off is what allows the positions to be added together without double counting goods in transit between them.</p></div></article>
<article class="pa-wi-item"><span class="pa-wi-n">02</span><div class="pa-wi-b"><h3>Batch-Level Counting, Not Case-Level Counting</h3><p>Cases are the handling unit; batches are the accounting unit. Two cases of the same SKU from different batches carry different expiry dates and therefore different remaining value, so a case count that ignores batch produces a quantity nobody can age. Batch capture also makes the damage and expiry claim population visible, since a claim is only verifiable against the batch it names. The extra effort at the count is what makes the provisioning conversation possible afterwards.</p></div></article>
<article class="pa-wi-item"><span class="pa-wi-n">03</span><div class="pa-wi-b"><h3>What an FMCG Count Does Not Settle</h3><p>It does not settle whether a claim will be paid, which is a commercial decision between the parties. It does not verify secondary sales reported by distributors beyond the stock actually seen. It reaches no conclusion on scheme accruals or trade spend. And it is not a food safety inspection: storage condition is observed and recorded, but licensing sits with <a href="https://www.patronaccounting.com/fssai-renewal" class="pa-offsite">FSSAI renewal</a> and with the regulator, not with this exercise.</p></div></article></div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key terms on this page:</strong></p>
                    <div class="key-terms"><ul class="al-list"><li><span class="al-t"><a href="https://www.patronaccounting.com/glossary/stock-audit/cf-agent-stock" class="pa-offsite">CF agent stock</a></span><span class="al-d">Goods held by an agent and owned by the principal, reported on the principal's books.</span></li>
<li><span class="al-t"><a href="https://www.patronaccounting.com/glossary/stock-audit/secondary-sales" class="pa-offsite">Secondary sales</a></span><span class="al-d">Sales from distributor to retailer, reported back rather than invoiced by the brand.</span></li>
<li><span class="al-t"><a href="https://www.patronaccounting.com/glossary/stock-audit/saleable-returns" class="pa-offsite">Saleable returns</a></span><span class="al-d">Goods taken back in resaleable condition, pending credit.</span></li></ul></div>

                </div>
            </div>
            <div class="column-image">
                <figure class="pa-art"><figcaption class="pa-art-t">Stock Audit for FMCG in India</figcaption><img src="/images/stock-audit/stock-audit-for-fmcg/what-is.webp" alt="Counting distributor stock of fast-moving consumer packs, with batch dates checked at the pallet" loading="lazy" width="1200" height="896"></figure>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO CAN FILE -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who This Is For</h2>
            <div class="content-text">
                
                <p>An FMCG audit is read by three parties sitting at three points on the same chain, and each one is reading the count for a different reason: a brand checking what it pushed, an agent proving what it holds, and a distributor borrowing against it.</p><div class="pa-ov-grid pa-cols-3"><article class="pa-ov-card"><h3>Brands Auditing Channel Stock Before a Quarter Close</h3><p>A brand approaching a quarter end wants to know how much of what it dispatched has genuinely sold through rather than moved one step down the channel. This reader is commercial as much as financial, because the answer changes what can be recognised and what should be pushed next quarter. Timing is everything and the window is short.</p></article>
<article class="pa-ov-card"><h3>Depot Operators Reporting to a Principal</h3><p>A depot or carrying and forwarding agent holds stock it does not own and is accountable for every unit. The reader needs an independent confirmation to give the principal, and protection against being charged for differences that arose in transit or in claims. Reconciling to the principal's dispatch record is the part that settles arguments.</p></article>
<article class="pa-ov-card"><h3>Distributors Financed Against Stock</h3><p>A distributor borrowing against inventory carries the bank's requirement directly. Stock is fast-moving, frequently in transit, and mixed across brands, so the reader's difficulty is separating what is financed from what is not. Damage and expiry claims pending settlement are the line this group most often gets wrong in its own statement.</p></article></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Scope and Deliverables for FMCG</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Deliverable</th><th>What It Includes</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Channel Stock Position by Depot and Distributor</strong></td><td>An FMCG audit stating stock separately at each depot, agent and distributor point, with ownership marked, so what is owned and what is not are never merged.</td></tr>
<tr><td><strong>Damage and Expiry Claim Evidence Pack</strong></td><td>Claimed quantities matched to batch records and physical stock, photographed, so each claim either stands on evidence or is identified as unsupported.</td></tr>
<tr><td><strong>Near-Expiry Ageing Schedule</strong></td><td>Finished goods aged against remaining shelf life, which is what turns a quantity into a provisioning conversation rather than a number nobody acts on.</td></tr>

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
            <h2 class="section-title">How the Count Runs in FMCG</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Each phase is fixed before the next begins, so a difference found on site can be traced back to the point it arose.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Counting a Depot Without Stopping Dispatch</h3><p class="step-description">Loading continues while counting proceeds, so vehicles already being loaded are treated as dispatched and documented as such. The alternative, holding trucks for a day, is a commercial cost no depot manager will accept for a stock exercise.</p></div><div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/stock-audit/_library/steps/freeze.webp" alt="Counting a Depot Without Stopping Dispatch" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Batch and Expiry Captured With Every Line</h3><p class="step-description">An FMCG audit records batch number and expiry against every counted line rather than sampling them. Without those, the count produces a quantity that cannot be aged, and ageing is what the provisioning and claims conversation depends on.</p></div><div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/stock-audit/_library/steps/scan-capture.webp" alt="Batch and Expiry Captured With Every Line" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Claim Stock Segregated and Photographed</h3><p class="step-description">Damaged and expired stock awaiting a claim is separated, counted apart and photographed against its batch details. Left mixed with saleable stock it inflates the position, and left unphotographed it cannot support the claim it was set aside for.</p></div><div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/stock-audit/_library/steps/condition-custody.webp" alt="Claim Stock Segregated and Photographed" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div></div>

        </div>
    </div>
</section>
<section class="content-section" id="integrations-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Counting FMCG Stock on Stoklenz</h2>
            
            <div class="pa-sl"><div class="pa-sl-col"><a class="pa-sl-demo" href="https://stocklens.reacttor.in/demo" target="_blank" rel="noopener" style="background-image:url(&quot;/images/stock-audit/stoklenz/01-home/01-page-screen-1.png&quot;)"><span class="pa-sl-glow"></span><span class="pa-sl-demo-in"><span class="pa-sl-play"></span><span class="pa-sl-demo-t"><strong>Play the interactive demo</strong><span>Walk a count through Stoklenz, scan by scan</span></span></span></a><div class="pa-sl-aside"><h3>Run your next count on Stoklenz</h3><p>Barcode counting against live book stock, geo-fenced attendance and a variance schedule that comes out of the captured data. Send your site list and the scope comes back against it.</p><div class="pa-sl-cta"><a class="pa-sl-btn" href="#consultationFormCard">Get a callback</a><a class="pa-sl-btn pa-sl-btn--ghost" href="tel:+919459456700">+91 945 945 6700</a></div><a class="pa-sl-more" href="https://stocklens.reacttor.in/" target="_blank" rel="noopener">Explore Stoklenz &rarr;</a></div></div><div class="pa-sl-steps"><article class="pa-sl-step"><div class="pa-sl-ph is-shot pa-zoom" role="button" tabindex="0" aria-label="Open this screen full size"><img src="/images/stock-audit/stoklenz/20-app/03-pagelive-screen-1.png" alt="Live audit: the count as it happens on the floor, rather than a status typed up afterwards" loading="lazy" width="2880" height="1800"><span class="pa-sl-n">01</span></div><div class="pa-sl-copy"><h3>Batch and Expiry Captured at the Point of Count</h3><p>An FMCG audit records batch and date as each line is scanned, which is what makes the ageing schedule possible instead of requiring a second pass to collect dates.</p></div></article>
<article class="pa-sl-step"><div class="pa-sl-ph is-shot pa-zoom" role="button" tabindex="0" aria-label="Open this screen full size"><img src="/images/stock-audit/stoklenz/20-app/14-pageaudit-reports-screen-1.png" alt="Audit reports: working papers and variance schedules produced from the captured count, not re-keyed from it" loading="lazy" width="2880" height="1800"><span class="pa-sl-n">02</span></div><div class="pa-sl-copy"><h3>Depot Positions Rolled Up for Head Office</h3><p>Each depot and agent position consolidates centrally as it closes, so the channel figure builds during the cycle rather than being assembled afterwards.</p></div></article>
<article class="pa-sl-step"><div class="pa-sl-ph is-shot pa-zoom" role="button" tabindex="0" aria-label="Open this screen full size"><img src="/images/stock-audit/stoklenz/20-app/18-pageaudits-ba10cfc3-77c4-42d1-a304-9c767b81227-screen-1.png" alt="Inside one audit: counted position against book stock, with the differences listed as they are found" loading="lazy" width="2880" height="1800"><span class="pa-sl-n">03</span></div><div class="pa-sl-copy"><h3>Claim Evidence Photographed Against the Line</h3><p>Damaged and expired stock is photographed against its batch as it is counted, so the claim pack is built at the point of observation.</p></div></article></div></div>
            
            
        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Records We Work From</h2>
            <div class="content-text">
                
                <ul class="pa-doc-list"><li><strong>Depot and C&amp;F Stock Statements</strong> — Statements from each depot and carrying and forwarding agent as at the cut-off, prepared on their own records rather than reconstructed centrally afterwards.</li>
<li><strong>Primary Dispatch and Secondary Sales Extracts</strong> — What left the depot and what distributors reported selling on. An FMCG audit reads the two together, because the gap between them is where channel loading shows.</li>
<li><strong>Damage, Expiry and Saleable Return Registers</strong> — Claims raised, credits issued and returns taken back, with dates. Claims settled centrally on a different date from the physical movement are a standard reconciliation item.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Damage, Expiry and Secondary Sales Claims</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Issue</th><th>What It Does to the Count</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Channel Loading Dressed Up as Demand</strong></td><td>Primary dispatch booked as sales while the goods sit at a distributor. An FMCG audit at the distributor point is what separates what sold from what merely moved.</td></tr>
<tr><td><strong>Claims Raised Without Physical Evidence</strong></td><td>A claim form, a credit note and no batch record, no photograph and no destruction certificate behind either of them.</td></tr>
<tr><td><strong>Saleable Returns Counted as Fresh Stock</strong></td><td>Returns accepted into the saleable pool without assessment, so damaged and short-dated units sit at full value alongside fresh stock.</td></tr>
<tr><td><strong>Batches Nobody Can Trace to a Dispatch</strong></td><td>Stock found at a depot carrying batch numbers absent from the dispatch record, which usually means transfers between depots that were never entered.</td></tr>

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
            <h2 class="section-title">What Drives the Fee</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>What Moves the Fee</th><th>Why</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Depots and Distributor Points in Scope</strong></td><td>An FMCG audit prices on how far down the channel it reaches. Depots alone is one exercise; adding carrying agents and distributor premises is another.</td></tr>
<tr><td><strong>Batch Depth per SKU</strong></td><td>Capturing batch and expiry against every line rather than sampling extends counting time, and it is what makes the ageing schedule possible afterwards.</td></tr>
<tr><td><strong>Whether Claim Verification Runs Alongside</strong></td><td>Matching damage and expiry claims to batch records and photographing the stock is additional work performed at the same visit.</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                
                <p style="margin-top:16px;"><strong>Get a free Stock Audit for FMCG consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20would%20like%20to%20book%20Stock%20Audit%20for%20FMCG." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->


<!-- SECTION 12: BENEFITS -->

<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">What the Count Finds</h2>
        </div>
        <div class="features-grid pa-cols-3"><article class="feature-card"><div class="feature-icon feature-icon--navy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" /> <path d="M14 2v5a1 1 0 0 0 1 1h5" /> <path d="M10 9H8" /> <path d="M16 13H8" /> <path d="M16 17H8" /> </svg></div><h3 class="feature-title">Channel Stock You Can Actually Report</h3><p class="feature-text">An FMCG audit establishes what is physically sitting at depots, agents and distributors, which is the figure planning and revenue recognition both depend on.</p></article>
<article class="feature-card"><div class="feature-icon feature-icon--orange"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" /> <path d="M14 2v5a1 1 0 0 0 1 1h5" /> <path d="M10 9H8" /> <path d="M16 13H8" /> <path d="M16 17H8" /> </svg></div><h3 class="feature-title">Claims Settled on Evidence Instead of Argument</h3><p class="feature-text">Damage and expiry claims matched to batch records and photographed, so each one either stands or is identified as unsupported before money moves.</p></article>
<article class="feature-card"><div class="feature-icon feature-icon--navy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z" /> <path d="M12 22V12" /> <polyline points="3.29 7 12 12 20.71 7" /> <path d="m7.5 4.27 9 5.15" /> </svg></div><h3 class="feature-title">Expiry Exposure Quantified Before It Lands</h3><p class="feature-text">Near-expiry stock aged across the channel, which turns a future write-off into a number the business can act on while there is still time to move the goods.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Counts Run in FMCG</h2>
            <div class="content-text">
                
                <p style="font-size:16px"><strong>500+ stock audits completed.</strong></p><ul style="list-style:none;padding:0;margin:0 0 14px"><li style="margin-bottom:10px"><strong>Depots and Distributor Points Counted</strong></li>
<li style="margin-bottom:10px"><strong>Batches Verified</strong></li>
<li style="margin-bottom:10px"><strong>Turnaround for a Regional Sweep</strong></li></ul><p style="font-size:14.5px">Across engagements run by the Patron team. The figure is counted from completed engagements only, and it is restated when it changes rather than rounded up and left. Scope for any one count is still agreed against your own site list.</p>

            </div>
        </div>
    </div>
</section>

<section class="content-section" id="why-patron-section" style="background: var(--cream) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Choose Patron Accounting</h2>
            
            <!-- 5 differentiator cards. Each is a CLAIM + the PROOF for it - never an
                 adjective on its own. Bad: "Experienced team". Good: "14 years, 900+ books
                 closed". Fill from the firm's real numbers, not the template's. -->
            <div class="why-patron-grid pa-cols-3">
                <article class="feature-card"><div class="feature-icon feature-icon--navy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" /> <path d="M16 3.128a4 4 0 0 1 0 7.744" /> <path d="M22 21v-2a4 4 0 0 0-3-3.87" /> <circle cx="9" cy="7" r="4" /> </svg></div><h3 class="feature-title">Counting Teams Familiar With C&amp;F Paperwork</h3><p class="feature-text">An FMCG audit runs on agency records, dispatch documents and claim registers, and crews who read those without instruction spend the day counting rather than learning the filing.</p></article>
<article class="feature-card"><div class="feature-icon feature-icon--orange"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" /> <path d="M14 2v5a1 1 0 0 0 1 1h5" /> <path d="M10 9H8" /> <path d="M16 13H8" /> <path d="M16 17H8" /> </svg></div><h3 class="feature-title">Claim Evidence Built to Survive a Principal Review</h3><p class="feature-text">Damage and expiry claims are matched to batch records and photographed at the point of count, so the evidence pack stands up when the principal questions it.</p></article>
<article class="feature-card"><div class="feature-icon feature-icon--navy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <rect width="8" height="4" x="8" y="2" rx="1" ry="1" /> <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" /> <path d="m9 14 2 2 4-4" /> </svg></div><h3 class="feature-title">One Cycle Across Every Depot in the Region</h3><p class="feature-text">Depots, agents and distributor points are covered against a single cut-off, which is what stops goods in transit being counted at both ends of the channel.</p></article>
            </div>
            <p class="why-patron-note"></p>
        </div>
    </div>
</section>
<section class="content-section" id="case-study-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">An FMCG Count We Have Run</h2>
            
            <article class="pa-case pa-rm"><div class="pa-case-h"><h3>Channel Stock That Was Two Weeks Older Than Reported</h3><p class="pa-case-scale">depots and carrying agents · batch and date captured at the count</p><p class="pa-case-client">A paints manufacturer with depot-held stock</p></div><ol class="pa-rm-track"><li class="pa-rm-stage"><span class="pa-rm-node">01</span><span class="pa-rm-lab">The challenge</span><p>Primary dispatch was booked as sales, so the reported channel position said what had left the depot and nothing about what the channel held or how old it was.</p></li><li class="pa-rm-stage"><span class="pa-rm-node">02</span><span class="pa-rm-lab">What we did</span><p>We counted depot and carrying-agent stock and captured batch and manufacture date against every line at the point of counting rather than reconstructing it from dispatch records.</p></li><li class="pa-rm-stage is-out"><span class="pa-rm-node">03</span><span class="pa-rm-lab">What the count found</span><p>Channel stock ran materially older than the reported position, and a slice of it was already inside its near-expiry window. None of this was visible in the system, because the system had stopped tracking it at dispatch.</p></li><li class="pa-rm-stage"><span class="pa-rm-node">04</span><span class="pa-rm-lab">What changed</span><p>The near-expiry quantity was identified while it could still be moved through trade schemes rather than written off, and channel ageing became a monthly report.</p></li></ol></article>
<article class="pa-case pa-rm"><div class="pa-case-h"><h3>A Claim Position Rebuilt on Photographic Evidence</h3><p class="pa-case-scale">claims register verified alongside the depot count</p><p class="pa-case-client">A paints manufacturer settling damage and expiry claims through its channel</p></div><ol class="pa-rm-track"><li class="pa-rm-stage"><span class="pa-rm-node">01</span><span class="pa-rm-lab">The challenge</span><p>Damage and expiry claims were settled centrally against a form and a credit note. The stock behind each claim was usually gone before anyone independent saw it, and the claims line was growing.</p></li><li class="pa-rm-stage"><span class="pa-rm-node">02</span><span class="pa-rm-lab">What we did</span><p>Claim verification ran alongside the count. Claimed stock was matched to batch records and photographed lot by lot at the point of verification, with destruction certificates traced where destruction had been claimed.</p></li><li class="pa-rm-stage is-out"><span class="pa-rm-node">03</span><span class="pa-rm-lab">What the count found</span><p>A proportion of claims could not be supported at all - no batch record, no photograph, no destruction certificate behind any of them. Others were valid but had been claimed twice under different references.</p></li><li class="pa-rm-stage"><span class="pa-rm-node">04</span><span class="pa-rm-lab">What changed</span><p>The claims register was rebuilt on the lines that could be evidenced, and photographic support at the point of claim became a condition of settlement.</p></li></ol></article></div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->




<!-- SECTION 14: RELATED SERVICES -->


<!-- SECTION 15A: LEGAL FRAMEWORK -->


<!-- FAQ SECTION -->
<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">FMCG Stock Audit: Common Questions</h2>
                    <p class="faq-expanded__lead">Answers written against the position in force on the review date below.</p>
                    <a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact">Still have a question? Talk to a CA &rarr;</a>
                    <div class="faq-enquiry"><h3 class="faq-enquiry__title">Ask about your count</h3><p class="faq-enquiry__sub">Send your site list and the scope comes back against it.</p><p class="faq-enquiry__context">Answered by the <strong>CA &amp; CS team</strong>, usually the same working day.</p><form class="faq-enquiry__form" method="post" action="#consultationFormCard" novalidate><input class="faq-enquiry__input" type="text" name="name" autocomplete="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" autocomplete="email" placeholder="Work email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" autocomplete="tel" inputmode="numeric" placeholder="Phone number" required></div><textarea class="faq-enquiry__input" name="message" rows="3" placeholder="How many sites, and by when?"></textarea><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p></form><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>No spam</span><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Replies from a CA</span></div></div>
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item"><h3 class="faq-expanded__q">How does a stock audit help control channel loading?</h3><div class="faq-expanded__a"><p>Counting stock in the channel reveals how much has been pushed to distributors but not sold through. Persistent high channel stock against flat secondary sales is the pattern that precedes returns and claims, and it is only visible if secondary stock is measured.</p></div></div>
<div class="faq-expanded__item"><h3 class="faq-expanded__q">Is an FMCG stock audit different from a bank stock audit?</h3><div class="faq-expanded__a"><p>The count procedure is similar but the purpose differs. A bank stock audit tests security value for a lender. An FMCG channel audit tests claim validity and channel visibility for management. The same visit can serve both if the scope is written to cover them.</p></div></div>
<div class="faq-expanded__item"><h3 class="faq-expanded__q">How do you verify distributor stock you do not physically hold?</h3><div class="faq-expanded__a"><p>Secondary stock at distributors is verified by counting at the distributor premises and reconciling to both the distributor records and your dispatch data. Because the stock is not on your books as inventory, the purpose is claim validation and channel visibility rather than balance-sheet verification.</p></div></div>
<div class="faq-expanded__item"><h3 class="faq-expanded__q">What are primary and secondary sales in FMCG?</h3><div class="faq-expanded__a"><p>Primary sales are movements from the company to the distributor. Secondary sales are movements from the distributor to the retailer. The gap between them sits as stock in the channel, which is what distorts demand signals when it is not measured.</p></div></div>
<div class="faq-expanded__item"><h3 class="faq-expanded__q">What evidence is needed for a damage or expiry claim?</h3><div class="faq-expanded__a"><p>A defensible claim needs the physical goods available for inspection or documented destruction, batch and expiry details, the original invoice reference, and the claim quantity reconciled to stock records. Claims settled on a declaration alone are the most common source of leakage.</p></div></div>
<div class="faq-expanded__item"><h3 class="faq-expanded__q">How is depot stock reconciled to head office books?</h3><div class="faq-expanded__a"><p>Each depot is counted and reconciled locally, then depot balances are aggregated and compared with the head office inventory ledger. Differences usually arise from stock in transit between depots and from transfers recorded in one location but not the other.</p></div></div>
<div class="faq-expanded__item"><h3 class="faq-expanded__q">What is C&amp;F agent stock and who owns it?</h3><div class="faq-expanded__a"><p>Stock held by a clearing and forwarding agent remains the property of the company. The agent holds and dispatches it. It belongs in the company inventory, must be counted at the agent premises, and is a common gap when audits cover only company-owned warehouses.</p></div></div>
<div class="faq-expanded__item"><h3 class="faq-expanded__q">Which stock is treated as saleable returns?</h3><div class="faq-expanded__a"><p>Returns that are undamaged, within shelf life and in original packaging can normally be returned to saleable stock. Anything outside that is a write-off or a claim. The audit checks that the distinction is being applied consistently rather than case by case.</p></div></div>
<div class="faq-expanded__item"><h3 class="faq-expanded__q">How is near-expiry FMCG stock valued?</h3><div class="faq-expanded__a"><p>Stock approaching expiry is usually written down to the value it can realistically fetch, which may be a discounted trade price rather than full value. The audit reports remaining shelf life by batch so the provision can be tested against actual realisability.</p></div></div>
<div class="faq-expanded__item"><h3 class="faq-expanded__q">Why does FMCG stock need batch-level counting?</h3><div class="faq-expanded__a"><p>FMCG stock moves by batch because expiry, recall and claim decisions all operate at batch level. A count that records only total quantity per SKU cannot support an expiry provision or a recall, so batch identity is captured during the count.</p></div></div>
                </div>
            </div>

            <!-- Quick Answers -->
            
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->


<section class="content-section" style="background:var(--gray-50);"><div class="content-container"><div class="pa-city-block" style="margin-bottom:0;"><div class="pa-block-title">Related Reading</div><div class="pa-read-grid"><a href="https://www.patronaccounting.com/blog/depot-stock-reconciliation" class="pa-read-card">Depot Stock Reconciliation: Matching Depot Records to Head Office Books<span class="pa-read-go">&rarr;</span></a>
<a href="https://www.patronaccounting.com/blog/distributor-stock-verification" class="pa-read-card">Distributor Stock Verification: Auditing Secondary Stock You Do Not Hold<span class="pa-read-go">&rarr;</span></a>
<a href="https://www.patronaccounting.com/blog/fmcg-damage-and-expiry-claims" class="pa-read-card">FMCG Damage and Expiry Claims: What Evidence an Auditor Accepts<span class="pa-read-go">&rarr;</span></a></div></div></div></section>
<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Booking a Count</h2>
            <div class="content-text" style="text-align:left;">
                
                <h3>What We Need per Depot</h3>
<p>The depot stock statement, primary dispatch records and the claims register for the period. An FMCG audit reaching distributor premises also needs the distribution agreement.</p>
<h3>Timing a Count Around a Quarter Close</h3>
<p>Channel counts are most useful just before a quarter closes, which is also when depots are busiest, so the date is agreed against the dispatch calendar.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20would%20like%20to%20book%20Stock%20Audit%20for%20FMCG." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Stock Audit for FMCG%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Stock Audit for FMCG%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->


<!-- CONTENT FRESHNESS FOOTER -->
<div class="eeat-review-wrap"><div class="eeat-review">
<div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div>
<div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; 15+ years in Indian accounting &amp; certification &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div>
<div class="eeat-review__sources"><span>Official sources:</span>
<a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://udin.icai.org" target="_blank" rel="noopener">ICAI UDIN Portal</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a><a href="https://www.rbi.org.in" target="_blank" rel="noopener">RBI</a></div>
</div></div>


<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026-27 ITR filing is live</strong> - get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

</main>
<!-- External JS Dependencies (loaded by master layout in production) -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION — Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '',               // Patron Accounting's Google Place ID
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
                videoUrl: "https://www.patronaccounting.com/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "https://www.patronaccounting.com/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "https://www.patronaccounting.com/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "https://www.patronaccounting.com/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
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
                        <div class="testi-google-badge"><img src="https://www.patronaccounting.com/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
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
        // Static cards already in DOM — just init Slick if not already done
        if (slider.children.length > 0 && !$(slider).hasClass('slick-initialized')) {
            if (loading) loading.style.display = 'none';
            initSlick(slider);
            return;
        }
        let html = '';

        reviews.forEach(function(review, i) {
            if (review.hasVideo && review.videoUrl) {
                html += buildVideoCard(review);
            } else {
                html += buildQuoteCard(review, i);
            }
        });

        slider.innerHTML = html;
        slider.style.display = 'block';
        loading.style.display = 'none';

        // Init Slick
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
            console.log('[Testimonials] No Google API key set — using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API — using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews — using fallback.');
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
        // Static cards already rendered in the desired order - use them as-is and do NOT
        // fetch/regenerate from fallbackReviews or the Google API (that would overwrite the
        // curated order, e.g. video, text, video, then rest).
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
            return; // static cards are authoritative - stop here
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
     CONSULTATION FORM — Country Dropdown + Validation + Bigin Integration
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
        return { valid: false, message: 'Enter a valid phone number (7–15 digits)' };
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
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll
const tocBtns = document.querySelectorAll('.toc-btn');
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', function() {
    let current = '';
    sections.forEach(function(section) {
        const sectionTop = section.offsetTop - 120;
        if (pageYOffset >= sectionTop) { current = section.getAttribute('id'); }
    });
    tocBtns.forEach(function(btn) {
        btn.classList.remove('active');
        if (btn.getAttribute('href') === '#' + current) { btn.classList.add('active'); }
    });
});
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

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');

</script>




<div class="pa-modal" id="paDemoModal" role="dialog" aria-modal="true"
     aria-labelledby="paDemoTitle" hidden>
  <div class="pa-modal-backdrop" data-close></div>
  <div class="pa-modal-box">
    <div class="pa-modal-head">
      <span class="pa-modal-mark">S</span>
      <span class="pa-modal-title" id="paDemoTitle">Stoklenz &mdash; interactive demo</span>
      <a class="pa-modal-out" href="https://stocklens.reacttor.in/demo" target="_blank" rel="noopener">Open in new tab</a>
      <button class="pa-modal-x" type="button" data-close aria-label="Close demo">&times;</button>
    </div>
    <div class="pa-modal-body">
      <div class="pa-modal-stand">
        <span class="pa-modal-badge">Live demo</span>
        <h3>Walk a count through Stoklenz</h3>
        <p>Scan a line, watch it reconcile against book stock, and see the variance and the
           GPS stamp land in the same second. The demo runs the whole loop.</p>
        <a class="pa-modal-go" href="https://stocklens.reacttor.in/demo" target="_blank" rel="noopener">
          Open the demo &rarr;</a>
        <span class="pa-modal-small">Opens in a new tab &mdash; the demo is hosted on
          stocklens.reacttor.in</span>
      </div></div>
  </div>
</div><script>
(function(){
  // ---- TOC: keep the current pill marked AND scrolled into the strip.
  // The template's own scroll-spy marks the pill but never scrolls the strip, so once the
  // reader is past the fifth section the active pill is off-screen to the right and the bar
  // stops telling them anything. It also measures with offsetTop, which is wrong for a
  // section inside a positioned wrapper; getBoundingClientRect is measured against the
  // viewport and stays right.
  var strip = document.getElementById('tocWrapper');
  var pills = [].slice.call(document.querySelectorAll('a.toc-btn'));
  if (strip && pills.length) {
    var targets = pills.map(function(p){
      return document.getElementById((p.getAttribute('href') || '').slice(1));
    });
    var last = -1;
    function sync(){
      var cur = 0;
      for (var i = 0; i < targets.length; i++) {
        if (targets[i] && targets[i].getBoundingClientRect().top <= 170) cur = i;
      }
      if (cur === last) return;                 // only touch the DOM when it changes
      last = cur;
      pills.forEach(function(p, i){ p.classList.toggle('active', i === cur); });
      var a = pills[cur];
      strip.scrollTo({ left: Math.max(0, a.offsetLeft - strip.clientWidth / 2
                                         + a.offsetWidth / 2), behavior: 'smooth' });
    }
    window.addEventListener('scroll', sync, { passive: true });
    window.addEventListener('resize', sync);
    sync();
  }

  // demo modal
  var modal = document.getElementById('paDemoModal');
  var frame = modal && modal.querySelector('.pa-modal-frame');
  var open  = document.querySelectorAll('.pa-sl-demo');
  var lastFocus = null;
  function show(url){
    lastFocus = document.activeElement;
    if (frame && frame.getAttribute('src') !== url) frame.setAttribute('src', url);
    modal.hidden = false;
    document.body.style.overflow = 'hidden';
    var x = modal.querySelector('.pa-modal-x'); if (x) x.focus();
  }
  function hide(){
    modal.hidden = true;
    document.body.style.overflow = '';
    if (frame) frame.removeAttribute('src');
    if (lastFocus && lastFocus.focus) lastFocus.focus();
  }
  if (modal && open.length) {
    open.forEach(function(a){
      a.addEventListener('click', function(e){ e.preventDefault(); show(a.href); });
    });
    modal.addEventListener('click', function(e){
      if (e.target.hasAttribute && e.target.hasAttribute('data-close')) hide();
    });
    document.addEventListener('keydown', function(e){
      if (e.key === 'Escape' && !modal.hidden) hide();
    });
  }

  // FAQ enquiry form - no CRM behind the preview, so say so rather than fake a success state
  document.querySelectorAll('.faq-enquiry__form').forEach(function(f){
    f.addEventListener('submit', function(e){
      e.preventDefault();
      var m = f.querySelector('.faq-enquiry__msg');
      if (m) m.textContent = 'Preview only - not wired to the CRM. On the live page this posts '
                           + 'to the same destination as the consultation form above.';
      var card = document.getElementById('consultationFormCard');
      if (card) card.scrollIntoView({behavior:'smooth', block:'center'});
    });
  });
})();
</script>
<div class="pa-lb" id="paLb" aria-hidden="true" role="dialog" aria-modal="true">
  <button class="pa-lb-x" type="button" aria-label="Close">&times;</button>
  <figure class="pa-lb-fig"><img id="paLbImg" src="" alt=""><figcaption id="paLbCap"></figcaption></figure>
</div>
<style>
.pa-lb{position:fixed;inset:0;z-index:9999;display:none;align-items:center;
  justify-content:center;background:rgba(9,17,28,.92);padding:26px}
.pa-lb.is-open{display:flex}
.pa-lb-fig{margin:0;max-width:min(1500px,96vw);max-height:92vh;display:flex;
  flex-direction:column;gap:12px}
.pa-lb-fig img{max-width:100%;max-height:84vh;object-fit:contain;border-radius:12px;
  box-shadow:0 30px 70px rgba(0,0,0,.5)}
.pa-lb-fig figcaption{color:#E6EDF6;font-size:14px;line-height:1.6;text-align:center;
  max-width:92ch;margin:0 auto}
.pa-lb-x{position:absolute;top:18px;right:22px;width:42px;height:42px;border-radius:50%;
  border:1px solid rgba(255,255,255,.35);background:rgba(255,255,255,.08);color:#fff;
  font-size:26px;line-height:1;cursor:pointer}
.pa-lb-x:hover{background:rgba(255,255,255,.18)}
.pa-zoom{cursor:zoom-in;position:relative}
.pa-zoom::after{content:"922";position:absolute;right:10px;bottom:10px;width:30px;height:30px;
  border-radius:8px;background:rgba(9,17,28,.72);color:#fff;font-size:15px;display:flex;
  align-items:center;justify-content:center;opacity:0;transition:opacity .2s}
.pa-zoom:hover::after{opacity:1}
</style>
<script>
(function(){var lb=document.getElementById('paLb');if(!lb)return;
var img=document.getElementById('paLbImg'),cap=document.getElementById('paLbCap');
function open(el){var i=el.querySelector('img');if(!i)return;
img.src=i.currentSrc||i.src;img.alt=i.alt||'';cap.textContent=i.alt||'';
lb.classList.add('is-open');lb.setAttribute('aria-hidden','false');
document.body.style.overflow='hidden';}
function shut(){lb.classList.remove('is-open');lb.setAttribute('aria-hidden','true');
document.body.style.overflow='';img.removeAttribute('src');}
document.querySelectorAll('.pa-zoom').forEach(function(el){
el.addEventListener('click',function(){open(el);});
el.addEventListener('keydown',function(e){if(e.key==='Enter'||e.key===' '){e.preventDefault();open(el);}});});
lb.addEventListener('click',function(e){if(e.target===lb||e.target.classList.contains('pa-lb-x'))shut();});
document.addEventListener('keydown',function(e){if(e.key==='Escape')shut();});})();
</script>
@endverbatim
@endsection
