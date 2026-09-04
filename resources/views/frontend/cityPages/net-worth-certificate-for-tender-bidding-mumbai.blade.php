@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>/* ============================================
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
@media (max-width: 768px) {.private-registration-heading { font-size: 32px !important; line-height: 110% !important; }}
@media (max-width: 480px) {.private-registration-heading { font-size: 28px !important; }}
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
/* Select */
.form-select {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); cursor: pointer; appearance: none; -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 14px center; transition: all 0.2s ease;
        }
/* Phone Group + Country Dropdown */
.phone-group {
            min-height: 50px;
            display: flex; align-items: center; background: var(--gray-50); border-radius: var(--radius-md);
            border: 1.5px solid transparent; overflow: visible; transition: all 0.2s ease; position: relative;
        }
.selected-flag {
            font-size: 20px; line-height: 1; display:flex; align-items:center;
            width: 26px; overflow: hidden; flex-shrink: 0;
            /* On browsers where flag emoji renders as "IN" text, clip it */
            font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji",sans-serif;
        }
/* Country Dropdown List */
.country-dropdown-list {
            display: none; position: absolute; top: calc(100% + 6px); left: 0; width: 300px; max-height: 320px;
            background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            box-shadow: var(--shadow-xl); z-index: 9999; overflow: hidden; flex-direction: column;
        }
/* Phone Input Override */
.phone-input { border: none !important; background: transparent !important; box-shadow: none !important; flex: 1; min-width: 0; padding-left: 12px !important; align-self: center; }
/* Submit Button */
.btn-submit {
            width: 100%; padding: 15px 24px; font-family: 'Barlow', sans-serif;
            font-size: 17px; font-weight: 700; color: var(--white); background: var(--orange);
            border: none; border-radius: 50px; cursor: pointer; transition: all 0.25s ease;
            display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 6px;
        }
/* Form Footer */
.form-response-note { text-align: center; font-size: 12px; color: var(--text-muted); margin-top: 14px; margin-bottom: 0; }
/* Error States */
.form-input.input-error, .form-select.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
/* Success State */
.form-success { text-align: center; padding: 40px 20px; }
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
.pa-faq-wrap { display: flex; flex-direction: column; gap: 12px; }
.pa-faq-item {
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-md);
            overflow: hidden;
            background: var(--white);
        }
.pa-faq-q-static {
            margin: 0; padding: 18px 22px 0 22px;
            font-size: 15px; font-weight: 700;
            color: var(--blue); line-height: 1.4;
        }
.pa-faq-body { display: block; }
.pa-faq-a { padding: 8px 22px 18px; }
.pa-faq-a p { font-size: 14px; color: var(--text-secondary); line-height: 1.7; margin: 0; }
@media (max-width: 640px) {.pa-faq-q-static { padding: 14px 16px 0 16px; font-size: 14px; }
.pa-faq-a { padding: 6px 16px 14px; }}
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
@media (max-width: 768px) {.pa-city-grid  { grid-template-columns: repeat(2, 1fr); }
.pa-cross-grid { grid-template-columns: repeat(2, 1fr); }}
@media (max-width: 480px) {.pa-city-grid  { grid-template-columns: 1fr; }
.pa-cross-grid { grid-template-columns: 1fr; }}
/* Slick overrides */
/* Fixed uniform height so text + video cards always match (video area 298px + author = ~370px) */
/* Video Testimonial Card */
/* Quote Testimonial Card */
/* Loading state */
@keyframes spin { to { transform: rotate(360deg); } }
/* ============================================
           RESPONSIVE
           ============================================ */
@media (max-width: 1024px) {.two-column { grid-template-columns: 1fr; gap: 40px; }
.features-grid { grid-template-columns: repeat(2, 1fr); }
.stats-container { gap: 32px; }
.certifications { padding-left: 0; border-left: none; width: 100%; justify-content: center; padding-top: 16px; border-top: 1px solid var(--gray-200); }}
@media (max-width: 900px) {.step-card { grid-template-columns: 1fr; gap: 32px; padding: 32px; }
.step-card:nth-child(even) { direction: ltr; }
.step-visual { order: -1; }}
@media (max-width: 768px) {.content-section { padding: 40px 16px; }
.hero-cta { flex-direction: column; }
.btn-video, .btn-sample { width: 100%; justify-content: center; }
.stats-container { flex-direction: column; gap: 20px; align-items: flex-start; padding: 0 16px; }
.stat-item { width: 100%; }
.features-grid { grid-template-columns: 1fr; gap: 16px; }
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
section ul li:not(.nav-item) { font-size: 14px; }}
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
@media (max-width: 768px) {.content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 12px !important;
            }}
@media (max-width: 480px) {.content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: 1fr !important;
            }}
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
@media (max-width: 768px) {.wa-sticky-bar { padding: 8px 12px; gap: 8px; }
.wa-sticky-bar-text { font-size: 13px; }
.wa-sticky-bar-btn { padding: 7px 16px; font-size: 13px; }
.wa-sticky-bar-icon { width: 30px; height: 30px; }
.wa-sticky-bar-icon svg { width: 16px; height: 16px; }}
@media (max-width: 480px) {.wa-sticky-bar-text { display: none; }
.wa-sticky-bar-btn { font-size: 14px; padding: 10px 24px; }
.wa-sticky-bar-btn::before { content: 'CA-Assisted ITR Filing Open'; }
.wa-sticky-bar-btn span { display: none; }}</style>
@endpush








@section('meta')
    <title>Net Worth Certificate Tender Bidding Mumbai 2026 | Patron</title>
    <meta name="description" content="CA-certified net worth certificate for Mumbai tender bidding. UDIN, tender-format ready. BMC, MMRDA, MMRC, GeM, CPPP formats accepted. Starting INR 1,499.">
    <link rel="canonical" href="https://www.patronaccounting.com/net-worth-certificate-for-tender-bidding/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Net Worth Certificate Tender Bidding Mumbai 2026 | Patron">
    <meta property="og:description" content="CA-certified net worth certificate for Mumbai tender bidding. UDIN, tender-format ready. BMC, MMRDA, MMRC, GeM, CPPP formats accepted. Starting INR 1,499.">
    <meta property="og:url" content="https://www.patronaccounting.com/net-worth-certificate-for-tender-bidding/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Net Worth Certificate Tender Bidding Mumbai 2026 | Patron">
    <meta name="twitter:description" content="CA-certified net worth certificate for Mumbai tender bidding. UDIN, tender-format ready. BMC, MMRDA, MMRC, GeM, CPPP formats accepted. Starting INR 1,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/net-worth-certificate-for-tender-bidding/mumbai/#service",
        "name": "Net Worth Certificate for Tender Bidding in Mumbai",
        "description": "CA-certified net worth certificate for Mumbai tender bidding. UDIN, tender-format ready. BMC, MMRDA, MMRC, GeM, CPPP formats accepted. Starting INR 1,499.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/net-worth-certificate-for-tender-bidding/mumbai" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Chartered Accountant", "sameAs": "https://en.wikipedia.org/wiki/Chartered_accountant" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Net Worth Certificate for Tender Bidding Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Net Worth Certificate for Tender Bidding in Mumbai"
                    },
                    "price": "1499",
                    "priceCurrency": "INR",
                    "url": "https://www.patronaccounting.com/net-worth-certificate-for-tender-bidding/mumbai"
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/net-worth-certificate-for-tender-bidding/mumbai/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Net Worth Certificate for Tender Bidding", "item": "https://www.patronaccounting.com/net-worth-certificate-for-tender-bidding" },
            { "@type": "ListItem", "position": 3, "name": "Mumbai", "item": "https://www.patronaccounting.com/net-worth-certificate-for-tender-bidding/mumbai" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/net-worth-certificate-for-tender-bidding/mumbai/#faq",
        "datePublished": "2026-07-02T08:00:00+05:30",
        "dateModified": "2026-07-02T08:00:00+05:30",
        "mainEntity": [
            {
                    "@type": "Question",
                    "name": "Why does a Mumbai BMC tender require a net worth certificate?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "BMC requires the certificate as the binary financial-eligibility filter at the technical evaluation stage of its annual ~Rs 60,000 crore tender flow across 227 wards. The certificate establishes that the bidder has the financial capacity to execute the contract without disruption. BMC central tenders typically require Rs 5 lakh to Rs 5 crore net worth depending on contract value; BMC ward-level empanelment requires Rs 25 lakh to Rs 1 crore depending on category. Below the threshold means rejection."
                    }
                },
{
                    "@type": "Question",
                    "name": "What is the format prescribed for MMRDA and MMRC Metro tender NWC?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MMRDA and MMRC each prescribe their own Annexure format with specific declaration language, asset-category breakdowns, and JV-bid provisions. MMRC Metro Line 3 (Aqua Line) pre-qualification Annexure typically requires entity audited net worth above Rs 50-500 crore depending on package, with 3-year turnover trend. MMRDA infrastructure tender Annexures vary by project. Patron's Mumbai office maintains both format libraries and replicates the exact Annexure prescribed in each tender document."
                    }
                },
{
                    "@type": "Question",
                    "name": "Who can issue a net worth certificate for tender bidding in Mumbai?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Only a practising Chartered Accountant in Mumbai holding a valid Certificate of Practice from ICAI can sign and issue a net worth certificate for tender bidding. The CA generates an 18-digit UDIN at udin.icai.org, signs on firm letterhead with ICAI seal, and prints Membership Number and Firm Registration Number. Mumbai tender evaluation committees at BMC, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port, MIAL, plus GeM and CPPP all verify the UDIN."
                    }
                },
{
                    "@type": "Question",
                    "name": "What are the net worth thresholds at JNPA and Mumbai Port Authority tenders?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "JNPA terminal operator tenders typically require Rs 100 crore or more net worth, with full financial-capacity disclosure including export-debtor LC tenor and country-risk exposure. Mumbai Port Authority waterfront and inland tenders range from Rs 25 lakh for small-scale facility tenders to Rs 50 crore for major terminal contracts. Both authorities use their own Annexure formats. Patron's Mumbai office maintains both libraries and ensures the certified net worth comfortably exceeds the threshold."
                    }
                },
{
                    "@type": "Question",
                    "name": "Is UDIN mandatory on a Mumbai tender net worth certificate?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, UDIN is mandatory on every CA-issued net worth certificate since 1 July 2019, enforced by ICAI. The 18-digit Unique Document Identification Number is generated at udin.icai.org and printed on the certificate. Mumbai tender evaluation committees at BMC, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port, MIAL, Western Naval Command, RBI, SEBI, BARC, TIFR plus GeM and CPPP all verify the UDIN on the ICAI portal as standard. Certificates without UDIN are rejected."
                    }
                },
{
                    "@type": "Question",
                    "name": "How is JV net worth presented for MMRC Metro Line 3 tenders?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MMRC Metro Line 3 pre-qualification typically requires lead and member NWCs separately PLUS a consolidated JV NWC showing aggregated net worth against the threshold (typically Rs 100 crore or more depending on package). Patron's Mumbai team reads the tender's JV provisions, prepares all three certificates with matching as-of dates, ties each to the JV agreement reference and the member responsibility split, and ensures the consolidated certification covers the threshold with reconciled supporting financials from both partners."
                    }
                }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/net-worth-certificate-for-tender-bidding/mumbai",
        "name": "Net Worth Certificate for Tender Bidding in Mumbai",
        "description": "CA-certified net worth certificate for Mumbai tender bidding. UDIN, tender-format ready. BMC, MMRDA, MMRC, GeM, CPPP formats accepted. Starting INR 1,499.",
        "url": "https://www.patronaccounting.com/net-worth-certificate-for-tender-bidding/mumbai",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com" },
        "about": { "@id": "https://www.patronaccounting.com/net-worth-certificate-for-tender-bidding/mumbai/#service" },
        "datePublished": "2026-07-02T08:00:00+05:30",
        "dateModified": "2026-07-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/net-worth-certificate-for-tender-bidding/mumbai/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How to Get a Net Worth Certificate for Tender Bidding",
        "description": "Step-by-step process to obtain a Net Worth Certificate for Tender Bidding from Patron Accounting.",
        "totalTime": "P3D",
        "step": [
            {
                    "@type": "HowToStep",
                    "position": 1,
                    "name": "Engagement",
                    "text": "Mumbai bidder calls Patron Accounting, shares the tender document, tender number, authority (BMC ward, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port, MIAL, Western Naval Command, GeM, CPPP, or other), tender opening date, and the prescribed net worth threshold. The engagement letter captures purpose under ICAI SA 200 'Overall Objectives of the Independent Auditor'."
                },
{
                    "@type": "HowToStep",
                    "position": 2,
                    "name": "Document collection",
                    "text": "Upload latest audited balance sheet and P&L (3 years where tender requires turnover trend), 12 months bank statements, Udyam Registration, IEC code (for JNPA/MIAL exporter bidders), GST returns, ITR, plant and machinery register, Mumbai factory or commercial property documents, JV agreement (where JV bid), tender document with Annexure format, and any tender-specific declarations including BMC-ward-empanelment forms or MMRC pre-qualification questionnaires."
                },
{
                    "@type": "HowToStep",
                    "position": 3,
                    "name": "Format alignment",
                    "text": "Patron extracts the tender-specific Annexure format from the tender document, computes the entity net worth from the latest audited balance sheet, validates that the net worth exceeds the tender threshold (critical for high-threshold MMRC and JNPA tenders), and lays out the certificate on the prescribed Annexure. BMC, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, MIAL formats are maintained in Patron's Mumbai library."
                },
{
                    "@type": "HowToStep",
                    "position": 4,
                    "name": "Verification under SA 500 and SA 505",
                    "text": "Patron CA cross-checks bank balances against statements, validates plant and machinery WDV per Income Tax depreciation rates, confirms Mumbai property at the Maharashtra IGR ward rate, and reconciles audited balance sheet figures to ITR and GST returns. For BMC ward-empanelment cases, prior-year experience certificates are tied to the file."
                },
{
                    "@type": "HowToStep",
                    "position": 5,
                    "name": "Draft preparation and review",
                    "text": "Draft certificate is emailed within 24 hours for bidder review. Critical check: net worth figure exceeds tender threshold; tender reference number, authority name, and tender title are accurate; Annexure format matches the tender document exactly. Corrections happen in this step."
                },
{
                    "@type": "HowToStep",
                    "position": 6,
                    "name": "UDIN generation and final issue",
                    "text": "Patron CA generates the 18-digit UDIN at udin.icai.org under 'Certificates - Net Worth Certificate', signs on firm letterhead with ICAI seal, and issues the final document. Soft copy emailed the same day for e-procurement upload; hard copy collected from Patron Mumbai office on the same day for last-minute bid submissions, or couriered within 2 working days."
                }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "@id": "https://www.patronaccounting.com/#organization-rating",
        "name": "Patron Accounting LLP",
        "url": "https://www.patronaccounting.com",
        "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "850", "bestRating": "5", "worstRating": "1" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "DefinedTermSet",
        "name": "Net Worth Certificate for Tender Bidding Key Terms",
        "definedTerm": [
            {
                    "@type": "DefinedTerm",
                    "name": "UDIN",
                    "description": "18-digit Unique Document Identification Number generated by the issuing CA at udin.icai.org for every certificate, mandatory since 1 July 2019."
                },
{
                    "@type": "DefinedTerm",
                    "name": "BMC Standing Order on Procurement",
                    "description": "Brihanmumbai Municipal Corporation's procurement framework, separate from GFR 2017, governing BMC's annual Rs 60,000 crore budget tender flow across 227 wards. BMC vendor empanelment is ward-specific and requires annual net worth certification."
                },
{
                    "@type": "DefinedTerm",
                    "name": "Technical Bid Envelope",
                    "description": "The non-financial envelope in a two-bid tender process containing eligibility documents - CA-certified net worth certificate, turnover certificate, experience certificates, EMD, and bidder declarations. Bids failing technical evaluation never reach financial-bid opening."
                },
{
                    "@type": "DefinedTerm",
                    "name": "Binary Threshold",
                    "description": "Tender documents specify a minimum net worth (e.g., Rs 100 crore for MMRC Metro Line 3 package; Rs 5 crore for BMC major civic works; Rs 50 lakh for BMC ward-level). Above threshold passes; at or below threshold fails with no re-submission opportunity."
                },
{
                    "@type": "DefinedTerm",
                    "name": "Tender-Specific Annexure",
                    "description": "Every Mumbai procurement authority specifies its own Annexure format - BMC, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA each have distinct templates with specific declaration language and asset-category requirements."
                }
        ]
    }
    </script>
@endsection
@section('content')
<main>

<!-- BREADCRUMB -->

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
                        Net Worth Certificate for Tender Bidding in Mumbai
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">2 July 2026</span></span>
                        </span>
                        <a href="https://www.patronaccounting.com/about-us" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, GSTIN, Udyam Registration, audited financials (3 years), bank statements, tender document or notification reference</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting INR 1,499 (Exl GST and Govt. Charges), draft within 24 hours, tender-format Annexure compliant</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Mumbai bidders (sole prop, partnership, LLP, Pvt Ltd) on BMC, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port, MIAL, Western Naval Command, GeM, CPPP tenders</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Same-day soft copy with UDIN; express same-day pickup at Mumbai office for last-minute bid submissions</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Net Worth Certificate for Tender Bidding%20Services&body=Hello%2C%20I%20just%20visited%20your%20Net%20Worth%20Certificate%20for%20Tender%20Bidding%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Net%20Worth%20Certificate%20for%20Tender%20Bidding%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                @include('partials.bigin-form', [
                    'service'  => 'Net Worth Certificate for Tender Bidding',
                    'city'     => 'Mumbai',
                ])
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, &amp; stay in control.',
    'ctaTitle'   => 'Join 10,000+ Satisfied Businesses',
    'ctaText'    => 'Get expert support for your Mumbai business. Accurate, compliant, on-time.',
])


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
            
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
<button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is It</button>
<button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Who Needs It</button>
<button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Services</button>
<button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
<button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Documents</button>
<button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
<button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
<button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
<button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
<button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Comparison</button>
<button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview: Net Worth Certificate for Tender Bidding</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Net Worth Certificate for Tender Bidding Services at a Glance</strong></p>
                    <p>A net worth certificate for tender bidding in Mumbai is a CA-signed declaration of the bidder-entity's assets minus liabilities, prepared in INR with mandatory UDIN under ICAI norms, in the tender-specific Annexure format the procurement authority specifies. Mumbai tender authorities including BMC (Rs 60,000 crore annual budget), MMRDA, MMRC Metro Line 3, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port, MIAL, plus GeM and CPPP accept it as the binary financial-eligibility filter. Patron issues it starting INR 1,499.

<div class="table-responsive-wrapper" style="margin-top:16px;">
<table><thead><tr><th>Parameter</th><th>Value</th></tr></thead><tbody>
<tr><td><strong>Governing Framework</strong></td><td>ICAI - Chartered Accountants Act 1949; General Financial Rules 2017; CPPP Guidelines (Dec 2023); BMC Standing Order on Procurement; MSME Procurement Policy</td></tr>
<tr><td><strong>Applicable To</strong></td><td>Mumbai bidders (sole prop, partnership, LLP, Pvt Ltd) on BMC, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port, MIAL, Western Naval Command, Western Railway, Central Railway HQ, RBI, SEBI, GeM, CPPP tenders</td></tr>
<tr><td><strong>Timeline</strong></td><td>Soft copy same day with UDIN; express pickup same-day from Mumbai office for bid-deadline urgency</td></tr>
<tr><td><strong>Starting Cost</strong></td><td>INR 1,499 (Exl GST and Govt. Charges) at Patron Accounting</td></tr>
<tr><td><strong>Validity</strong></td><td>Tender-document specific - typically dated within 3-6 months of bid opening; BMC ward empanelment annual</td></tr>
<tr><td><strong>Format Required</strong></td><td>Tender-specific Annexure replication; INR-only; net worth must exceed tender threshold (binary filter)</td></tr>
<tr><td><strong>Mandatory Authentication</strong></td><td>18-digit UDIN at udin.icai.org with CA signature, ICAI seal, FRN and COP number</td></tr>
</tbody></table></div></p>
                </div>
                <p>A net worth certificate for tender bidding in Mumbai is the document the tender evaluation committee uses as the binary financial-eligibility filter - the bidder either meets the net worth threshold prescribed in the tender or the bid is rejected at the technical evaluation stage. Mumbai's procurement ecosystem is the densest in India, anchored by BMC (with an annual budget of approximately Rs 60,000 crore - the largest of any civic body in the country), MMRDA infrastructure projects (Coastal Road, Trans-Harbour Link operations, Metro lines), MMRC Metro Line 3 (Aqua Line), MSRDC state highways, MHADA and SRA housing redevelopment, CIDCO Navi Mumbai development, JNPA port at Nhava Sheva, Mumbai Port Authority, MIAL airport, plus defence procurement by Western Naval Command. Patron Accounting prepares the certificate in the exact format each authority specifies. Last Updated: 2 July 2026.</p>
                <p></p>
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
                <h2 class="section-title">What Is a Net Worth Certificate for Tender Bidding?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A net worth certificate for tender bidding is a financial statement signed by a practising Chartered Accountant in Mumbai certifying the total assets minus total liabilities of the bidder-entity (sole proprietorship, partnership, LLP or company) as of a specific date, prepared in INR for submission to a tender authority as part of the technical bid envelope under General Financial Rules 2017, BMC Standing Order on Procurement (for BMC tenders), and the tender-document-specific eligibility criteria.</p>
<p>On the asset side the Mumbai tender certificate consolidates entity-level assets - cash and bank balances, trade receivables (net of provisions), inventory, fixed deposits, investments, plant and machinery at written-down value, factory, warehouse or commercial property at the Maharashtra IGR ready reckoner rate for the Mumbai ward (the actual valuation often diverges sharply from reckoner in Worli, Lower Parel, BKC), vehicles used in business, and intangibles where the tender format permits. On the liability side it captures trade payables, statutory dues, term loans, working capital limits utilised, packing credit (for exporters), vehicle loans, unsecured loans, and provisions. The net worth figure must EXCEED the threshold specified in the tender document; MMRC Metro Line 3 packages typically require Rs 50-500 crore net worth, BMC ward-level tenders Rs 25 lakh to Rs 5 crore, JNPA terminal-operator tenders Rs 100+ crore. Below threshold means rejection with no re-submission opportunity.</p>
<p>The certificate must carry an 18-digit UDIN generated at udin.icai.org, mandatory since 1 July 2019. Mumbai tender evaluation committees at BMC, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port Authority, MIAL, plus GeM and CPPP technical evaluators verify the UDIN online as a standard step. The certificate is issued under ICAI SA 500 (Audit Evidence) and SA 505 (External Confirmations). For JV bids common on MMRC, MMRDA and high-value JNPA tenders, the tender format determines whether net worth is shown for the lead alone, member alone, or consolidated.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Net Worth Certificate for Tender Bidding:</strong></p>
                    <p><strong>UDIN:</strong> 18-digit Unique Document Identification Number generated by the issuing CA at udin.icai.org for every certificate, mandatory since 1 July 2019.</p>
<p><strong>BMC Standing Order on Procurement:</strong> Brihanmumbai Municipal Corporation's procurement framework, separate from GFR 2017, governing BMC's annual Rs 60,000 crore budget tender flow across 227 wards. BMC vendor empanelment is ward-specific and requires annual net worth certification.</p>
<p><strong>Technical Bid Envelope:</strong> The non-financial envelope in a two-bid tender process containing eligibility documents - CA-certified net worth certificate, turnover certificate, experience certificates, EMD, and bidder declarations. Bids failing technical evaluation never reach financial-bid opening.</p>
<p><strong>Binary Threshold:</strong> Tender documents specify a minimum net worth (e.g., Rs 100 crore for MMRC Metro Line 3 package; Rs 5 crore for BMC major civic works; Rs 50 lakh for BMC ward-level). Above threshold passes; at or below threshold fails with no re-submission opportunity.</p>
<p><strong>Tender-Specific Annexure:</strong> Every Mumbai procurement authority specifies its own Annexure format - BMC, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA each have distinct templates with specific declaration language and asset-category requirements.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Net Worth Certificate for Tender Bidding</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA-Certified</span>
                        <strong>UDIN Verified</strong>
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
            <h2 class="section-title">Who Needs This Certificate</h2>
            <div class="content-text">
                
                <p>A Mumbai business owner needs a tender bidding net worth certificate when the tender document specifies a CA-certified net worth requirement at any of the following:</p>
<ul class="content-list">
<li>BMC tenders - the largest civic-body procurement market in India, spanning roads, stormwater drains, sewage, water supply, solid waste management, healthcare procurement (KEM, Sion, JJ, Nair Hospitals), education department tenders, and ward-level vendor empanelment across 227 wards.</li>
<li>MMRDA tenders - Mumbai Coastal Road, Bandra-Versova Sea Link extension, Trans-Harbour Link operations, Bandra Reclamation, MMR metro lines, and regional infrastructure projects.</li>
<li>MMRC Metro Line 3 (Aqua Line) - Colaba-Bandra-SEEPZ corridor construction, electrical, signalling, rolling stock, station finishing, and depot tenders; typically high net worth thresholds (Rs 50-500 crore).</li>
<li>MSRDC tenders - Maharashtra State Road Development Corporation tenders for state highways including the Mumbai-Pune Expressway.</li>
<li>MHADA, SRA redevelopment tenders - housing redevelopment and slum rehabilitation projects across Mumbai with specific MHADA and SRA Annexure formats.</li>
<li>CIDCO tenders - Navi Mumbai development including Navi Mumbai International Airport-related works, Panvel infrastructure, NAINA region development.</li>
<li>JNPA tenders - Jawaharlal Nehru Port Authority tenders for Nhava Sheva terminal operations, container handling, and port infrastructure.</li>
<li>Mumbai Port Authority and MIAL tenders - Mumbai Port for waterfront and inland tenders; MIAL for Terminal 2 and cargo expansion, ground handling, retail.</li>
<li>Defence and research tenders - Western Naval Command, INHS Asvini, BARC Trombay, TIFR Colaba, and other Mumbai-based defence and research procurement.</li>
<li>GeM and CPPP central-government tenders accessible to Mumbai bidders across product and service categories.</li>
</ul>
<p>Mumbai context: Mumbai's procurement market is the densest in India by volume and value. BMC alone handles ~Rs 60,000 crore annually. MMRDA-MMRC together oversee infrastructure capex exceeding Rs 1.5 lakh crore over the next decade. JNPA is one of India's busiest container ports. MIAL is among India's top-3 airports by traffic. Western Naval Command is a major defence procurement node. RBI, SEBI, BARC, TIFR and other central institutions add to the tender flow. The Maharashtra IGR ready reckoner sets ward-level property valuation floors for the bidder's asset disclosure.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Services Covered</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>BMC and BMC Ward-Level Tender Certificate</strong></td><td>For Mumbai contractors and vendors bidding on BMC tenders - civic infrastructure, water, sewage, roads, healthcare, education, solid waste, plus ward-level empanelment across all 227 wards. BMC Standing Order Annexure format replicated; annual ward-empanelment certificate ready before BMC review cycle.</td><td><span class="badge-included">Included</span></td></tr>
<tr><td><strong>MMRDA, MMRC Metro Line 3 and MSRDC Tender Certificate</strong></td><td>For Mumbai infrastructure bidders on MMRDA (Coastal Road, Trans-Harbour Link operations, regional infra), MMRC Metro Line 3 (Aqua Line construction, electrical, signalling, rolling stock), and MSRDC state highway tenders. High net worth thresholds (Rs 50-500 crore) and JV bid consolidation supported.</td><td><span class="badge-included">Included</span></td></tr>
<tr><td><strong>MHADA, SRA, CIDCO Housing and Development Tender Certificate</strong></td><td>For Mumbai redevelopment bidders on MHADA housing, SRA slum rehabilitation, and CIDCO Navi Mumbai development including Navi Mumbai International Airport-related works. Authority-specific Annexure formats and redevelopment-experience-tied financial declarations supported.</td><td><span class="badge-included">Included</span></td></tr>
<tr><td><strong>JNPA, Mumbai Port Authority and MIAL Tender Certificate</strong></td><td>For Mumbai port and airport vendors bidding on JNPA Nhava Sheva terminal operations and container handling, Mumbai Port Authority waterfront tenders, and MIAL airport terminal, ground handling, cargo and retail tenders. Maritime and aviation-specific declaration language and trade-finance-aware asset listing supported.</td><td><span class="badge-included">Included</span></td></tr>
<tr><td><strong>Defence, Research and Central Institution Tender Certificate</strong></td><td>For Mumbai vendors bidding on Western Naval Command (defence procurement at Naval Dockyard), INHS Asvini medical procurement, BARC Trombay research-grade equipment, TIFR scientific instrumentation, RBI Central Office facility management, SEBI BKC services tenders, and BEST utility tenders. Cleared-vendor declarations and sector-specific Annexure formats supported.</td><td><span class="badge-included">Included</span></td></tr>
<tr><td><strong>JV (Joint Venture) Tender Bid Certificate</strong></td><td>For Mumbai bidders participating as JV lead or member on high-value MMRC, MMRDA, JNPA, MIAL and CIDCO tenders. Separate JV-lead and JV-member NWCs prepared, or consolidated JV NWC where the tender permits aggregation, with JV agreement reference cited and member responsibility split disclosed.</td><td><span class="badge-included">Included</span></td></tr>

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
            <h2 class="section-title">How the Process Works</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A clear, document-driven workflow that gets your Net Worth Certificate for Tender Bidding ready on first submission.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <div class="step-number">Step 1</div>
        <h3 class="step-title">Engagement</h3>
        <p class="step-description">Mumbai bidder calls Patron Accounting, shares the tender document, tender number, authority (BMC ward, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port, MIAL, Western Naval Command, GeM, CPPP, or other), tender opening date, and the prescribed net worth threshold. The engagement letter captures purpose under ICAI SA 200 'Overall Objectives of the Independent Auditor'.</p>
    </div>
    <div class="step-visual">
        <div class="step-visual-icon" style="color: var(--orange); width: 100px; height: 100px;"><svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2"><circle cx="50" cy="35" r="15"/><path d="M30 80c0-15 8-25 20-25s20 10 20 25"/></svg></div>
        <div class="step-visual-label">Engagement</div>
        <div class="step-number-large">01</div>
    </div>
</div>


<div class="step-card">
    <div class="step-content">
        <div class="step-number">Step 2</div>
        <h3 class="step-title">Document collection</h3>
        <p class="step-description">Upload latest audited balance sheet and P&amp;L (3 years where tender requires turnover trend), 12 months bank statements, Udyam Registration, IEC code (for JNPA/MIAL exporter bidders), GST returns, ITR, plant and machinery register, Mumbai factory or commercial property documents, JV agreement (where JV bid), tender document with Annexure format, and any tender-specific declarations including BMC-ward-empanelment forms or MMRC pre-qualification questionnaires.</p>
    </div>
    <div class="step-visual">
        <div class="step-visual-icon" style="color: var(--orange); width: 100px; height: 100px;"><svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2"><path d="M25 30h50v50H25z"/><path d="M35 45h30M35 55h30M35 65h20"/></svg></div>
        <div class="step-visual-label">Document collection</div>
        <div class="step-number-large">02</div>
    </div>
</div>


<div class="step-card">
    <div class="step-content">
        <div class="step-number">Step 3</div>
        <h3 class="step-title">Format alignment</h3>
        <p class="step-description">Patron extracts the tender-specific Annexure format from the tender document, computes the entity net worth from the latest audited balance sheet, validates that the net worth exceeds the tender threshold (critical for high-threshold MMRC and JNPA tenders), and lays out the certificate on the prescribed Annexure. BMC, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, MIAL formats are maintained in Patron's Mumbai library.</p>
    </div>
    <div class="step-visual">
        <div class="step-visual-icon" style="color: var(--orange); width: 100px; height: 100px;"><svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2"><circle cx="50" cy="50" r="25"/><path d="M40 50l8 8 16-16"/></svg></div>
        <div class="step-visual-label">Format alignment</div>
        <div class="step-number-large">03</div>
    </div>
</div>


<div class="step-card">
    <div class="step-content">
        <div class="step-number">Step 4</div>
        <h3 class="step-title">Verification under SA 500 and SA 505</h3>
        <p class="step-description">Patron CA cross-checks bank balances against statements, validates plant and machinery WDV per Income Tax depreciation rates, confirms Mumbai property at the Maharashtra IGR ward rate, and reconciles audited balance sheet figures to ITR and GST returns. For BMC ward-empanelment cases, prior-year experience certificates are tied to the file.</p>
    </div>
    <div class="step-visual">
        <div class="step-visual-icon" style="color: var(--orange); width: 100px; height: 100px;"><svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2"><rect x="25" y="25" width="50" height="50" rx="6"/><path d="M40 40h20M40 50h20M40 60h12"/></svg></div>
        <div class="step-visual-label">Verification under SA 500 and SA 505</div>
        <div class="step-number-large">04</div>
    </div>
</div>


<div class="step-card">
    <div class="step-content">
        <div class="step-number">Step 5</div>
        <h3 class="step-title">Draft preparation and review</h3>
        <p class="step-description">Draft certificate is emailed within 24 hours for bidder review. Critical check: net worth figure exceeds tender threshold; tender reference number, authority name, and tender title are accurate; Annexure format matches the tender document exactly. Corrections happen in this step.</p>
    </div>
    <div class="step-visual">
        <div class="step-visual-icon" style="color: var(--orange); width: 100px; height: 100px;"><svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2"><circle cx="50" cy="50" r="20"/><path d="M50 35v15l10 6"/></svg></div>
        <div class="step-visual-label">Draft preparation and review</div>
        <div class="step-number-large">05</div>
    </div>
</div>


<div class="step-card">
    <div class="step-content">
        <div class="step-number">Step 6</div>
        <h3 class="step-title">UDIN generation and final issue</h3>
        <p class="step-description">Patron CA generates the 18-digit UDIN at udin.icai.org under 'Certificates - Net Worth Certificate', signs on firm letterhead with ICAI seal, and issues the final document. Soft copy emailed the same day for e-procurement upload; hard copy collected from Patron Mumbai office on the same day for last-minute bid submissions, or couriered within 2 working days.</p>
    </div>
    <div class="step-visual">
        <div class="step-visual-icon" style="color: var(--orange); width: 100px; height: 100px;"><svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2"><path d="M30 70l15-15 10 10 20-25"/><path d="M65 40h10v10"/></svg></div>
        <div class="step-visual-label">UDIN generation and final issue</div>
        <div class="step-number-large">06</div>
    </div>
</div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Checklist</h2>
            <div class="content-text">
                
                <p>Patron Accounting&apos;s checklist for a smooth, first-submission file:</p>
<h3>Bidder Identity and KYC</h3>
<ul class="content-list">
<li>Udyam Registration certificate</li>
<li>Entity PAN and GSTIN</li>
<li>IEC code (for JNPA, Mumbai Port and MIAL bidders involved in exports or import handling)</li>
<li>Partnership deed (for partnership) or LLP agreement (for LLP) or MOA-AOA (for company)</li>
<li>Recent utility bill or rent agreement for the registered Mumbai office address</li>
<li>Class III digital signature certificate (for IREPS, GeM, CPPP, BMC e-procurement submissions)</li>
</ul>
<h3>Tender Document</h3>
<ul class="content-list">
<li>Full tender document (NIT) with eligibility-criteria page highlighted</li>
<li>Tender-specific Annexure format for net worth declaration</li>
<li>Tender notification reference, tender number, and tender opening date</li>
<li>BMC ward-empanelment application form (where ward empanelment)</li>
<li>MMRC pre-qualification questionnaire (where MMRC tender)</li>
</ul>
<h3>Financial Documents</h3>
<ul class="content-list">
<li>Audited balance sheet and P&amp;L for the latest financial year (auditor-signed with audit report)</li>
<li>Audited financials for the previous 2 years (where tender requires 3-year turnover trend)</li>
<li>ITR for the latest financial year</li>
<li>GST returns (GSTR-1 and GSTR-3B) for the last 12 months</li>
<li>Bank statements (all current accounts and EEFC for exporters) for the last 12 months</li>
<li>Trade receivable and payable ageing</li>
<li>Plant and machinery register with WDV</li>
<li>Mumbai factory, warehouse or commercial property registration deed with IGR ready reckoner valuation</li>
<li>MHADA/SRA documentation where Mumbai property is under those jurisdictions</li>
<li>Vehicle RCs (commercial vehicles)</li>
</ul>
<h3>JV-Specific Documents (where joint venture bid)</h3>
<ul class="content-list">
<li>Signed JV agreement specifying lead and member roles and contribution ratios</li>
<li>Lead and member entity KYC and audited financials separately</li>
<li>Tender-document JV provisions reference</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Challenges and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Challenge 1: BMC ward-level vendor empanelment Annexure differs from major BMC tender format</strong></td><td>BMC's 227 wards have their own vendor empanelment processes layered on top of central BMC tender formats. A standard BMC central-tender certificate fails at ward-empanelment because the ward office uses its own Annexure with different declaration language. Patron's Mumbai office maintains both the BMC central format and the ward-empanelment format, delivers either or both on request, and tracks the annual ward-empanelment renewal cycle for repeat clients.</td></tr>
<tr><td><strong>Challenge 2: MMRC Metro Line 3 high net worth thresholds force JV bidding</strong></td><td>MMRC Metro Line 3 package tenders typically require Rs 50-500 crore net worth, putting them out of reach for stand-alone Mumbai mid-size contractors. JV bidding is the standard path. Patron's Mumbai team prepares the JV-lead and JV-member NWCs separately plus the consolidated JV NWC, ties each to the JV agreement and the tender's pre-qualification provisions, and ensures the consolidated net worth comfortably exceeds the threshold with reconciled supporting data.</td></tr>
<tr><td><strong>Challenge 3: JNPA and MIAL tender exporter bidders have export-debtor complexity</strong></td><td>JNPA terminal operator and MIAL cargo handler tenders attract exporter bidders whose balance sheets carry significant export debtors with usance LC terms. Standard NWC templates list export debtors at face value, but tender evaluators at JNPA and MIAL discount tenor-extended receivables. Patron's Mumbai office presents export debtors with LC tenor, opening bank country-risk, and a discount note, the format that JNPA and MIAL evaluation committees accept.</td></tr>
<tr><td><strong>Challenge 4: Mumbai property at IGR ready reckoner versus market value gap</strong></td><td>Mumbai market property values in Worli, Lower Parel, BKC and Bandra routinely run 2-3x the IGR ready reckoner rate. Tender certificates listing only reckoner value understate net worth and risk threshold failure; listing only market value invites evaluator queries. Patron's Mumbai office lists both - reckoner as the certified floor and indicative market value with the empanelled-valuer reference attached - so the evaluation committee has a defensible range.</td></tr>

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
            <h2 class="section-title">Patron Accounting Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr style="background: var(--orange-lighter);"><td><strong>Patron Accounting Professional Fees</strong></td><td class="table-amount"><strong>Starting from INR 1,499 (Exl GST and Govt. Charges) for the standard tender bidding net worth certificate on Patron letterhead. The fee covers document verification, draft preparation, UDIN generation, CA signature, soft copy issue, and one hard copy.</strong></td><td><span class="badge-included">Standard Inclusion</span></td></tr>
<tr><td>Tender</td><td class="table-amount">specific Annexure format replication (BMC, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port, MIAL, Western Naval Command and others) - INR 999 per Annexure</td><td><span class="badge-addon">Add-on</span></td></tr>
<tr><td>BMC ward</td><td class="table-amount">empanelment certificate variant (with annual renewal tracking) - INR 1,499</td><td><span class="badge-addon">Add-on</span></td></tr>
<tr><td>Multi</td><td class="table-amount">tender pack (3+ tenders within 30 days using the same as-of date) - 25 percent off second and subsequent certificates</td><td><span class="badge-addon">Add-on</span></td></tr>
<tr><td>JV (joint venture) consolidated certificate with lead and member schedules</td><td class="table-amount">INR 1,999</td><td><span class="badge-addon">Add-on</span></td></tr>
<tr><td>3</td><td class="table-amount">year turnover certificate bundled with NWC - INR 999</td><td><span class="badge-addon">Add-on</span></td></tr>
<tr><td>Export debtor LC tenor and country</td><td class="table-amount">risk note (for JNPA/MIAL exporter bidders) - INR 1,000</td><td><span class="badge-addon">Add-on</span></td></tr>
<tr><td>Bank solvency certificate coordination with the bidder's bank</td><td class="table-amount">INR 500 (Patron facilitates, bank fee separate)</td><td><span class="badge-addon">Add-on</span></td></tr>
<tr><td>Express same</td><td class="table-amount">day hard-copy delivery at Patron Mumbai office for bid-deadline urgency - INR 750</td><td><span class="badge-addon">Add-on</span></td></tr>
<tr><td>Additional hard copies for multiple tender submissions</td><td class="table-amount">INR 250 per copy</td><td><span class="badge-addon">Add-on</span></td></tr>
<tr><td>Partnership firm or LLP variant</td><td class="table-amount">INR 1,999</td><td><span class="badge-addon">Add-on</span></td></tr>
<tr><td>Private Limited Company variant</td><td class="table-amount">INR 2,499</td><td><span class="badge-addon">Add-on</span></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Net Worth Certificate for Tender Bidding consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Net%20Worth%20Certificate%20for%20Tender%20Bidding%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Document upload (audited financials + tender Annexure)</strong></td><td>Same day</td></tr>
<tr><td><strong>CA verification under SA 500 and SA 505</strong></td><td>Same day to 1 working day</td></tr>
<tr><td><strong>Tender Annexure format alignment</strong></td><td>Same day for known Mumbai authorities; 1 working day for less common formats</td></tr>
<tr><td><strong>Draft certificate emailed for bidder review</strong></td><td>Within 12-24 hours</td></tr>
<tr><td><strong>Corrections and UDIN-signed soft copy for e-procurement upload</strong></td><td>Same day after approval</td></tr>
<tr><td><strong>Hard copy collection from Patron Mumbai office for physical bid submission</strong></td><td>Same day (express) or 2 working days standard</td></tr>
<tr><td><strong>Validity at tender authorities</strong></td><td>Tender-document specific - BMC ward empanelment annual, MMRC and MMRDA 3-6 months from issue</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Soft copy delivered same day after document approval. Hard copy with UDIN and CA signature ready in 2-3 working days.</p>

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
            <h2 class="section-title">Why Choose Patron for Net Worth Certificate for Tender Bidding</h2>
        </div>
        <div class="features-grid">

<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
    <h3 class="feature-title">Authority-Accepted Formats</h3>
    <p class="feature-text">A Mumbai-CA-issued tender certificate from Patron Accounting clears the binary financial-eligibility filter on first submission, with the tender-authority-specific Annexure format replicated exactly. The UDIN system lets the tender evaluation committee verify authenticity within seconds at udin.icai.org as part of standard technical evaluation.</p>
</article>


<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
    <h3 class="feature-title">Fast Turnaround</h3>
    <p class="feature-text">Patron's Mumbai office maintains the Annexure format library for BMC (central plus all 227 wards), MMRDA, MMRC Metro Line 3, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port Authority, MIAL, Western Naval Command, Western Railway, Central Railway HQ, RBI, SEBI, BARC, TIFR, plus GeM and CPPP. The net result is fewer technical-bid disqualifications, on-time bid submissions even at deadline urgency in...</p>
</article>


<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
    <h3 class="feature-title">CA-Verified Accuracy</h3>
    <p class="feature-text">Patron Accounting prepares net worth certificate for tender bidding in authority-aligned formats so files clear on first submission.</p>
</article>

</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Client Outcomes</h2>
            <div class="content-text">
                
                <div class="highlight-box"><p style="text-align:center;font-size:16px;"><strong>10,000+ Clients  |  4.9 Google Rating  |  50,000+ Documents Issued  |  15+ Years</strong></p></div>
<p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Self-Arranged vs Patron Accounting Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Self-arranged (local CA)</th><th>Patron Accounting Mumbai</th></tr></thead>
                    <tbody>
                        <tr><td><strong>UDIN generation</strong></td><td>Often delayed or skipped</td><td>Generated at issue, printed on certificate</td></tr>
<tr><td><strong>Tender Annexure format match</strong></td><td>Generic CA letterhead used</td><td>BMC central, BMC ward, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, MIAL formats maintained</td></tr>
<tr><td><strong>Threshold-gap pre-flagging</strong></td><td>Often missed; certificate issued below threshold</td><td>Flagged before drafting; bidder advised on options</td></tr>
<tr><td><strong>JV bid consolidation (MMRC, MMRDA high-value)</strong></td><td>Inconsistent</td><td>Lead, member, and consolidated certificates with JV agreement reference</td></tr>
<tr><td><strong>BMC ward-empanelment renewal tracking</strong></td><td>Bidder remembers each year</td><td>Annual renewal cycle tracked, certificate ready before BMC review date</td></tr>
<tr><td><strong>Export debtor LC-tenor handling (JNPA, MIAL exporters)</strong></td><td>Listed at face value</td><td>Tenor and country-risk note attached</td></tr>
<tr><td><strong>Mumbai property valuation</strong></td><td>Reckoner only OR market only</td><td>Dual presentation - reckoner floor + indicative market with valuer reference</td></tr>
<tr><td><strong>Express same-day pickup</strong></td><td>Not available</td><td>Available from Patron Mumbai office</td></tr>
<tr><td><strong>Multi-tender pack pricing</strong></td><td>Per-tender charge full</td><td>25 percent off second and subsequent certificates</td></tr>
<tr><td><strong>Cost</strong></td><td>INR 2,500-5,500 per tender</td><td>Starting INR 1,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->


<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Regulatory and Legal Framework</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper" style="margin-bottom:24px;">
<table><thead><tr><th>Authority</th><th>Document or Rule</th><th>Relevance</th></tr></thead><tbody>
<tr><td><strong>ICAI</strong></td><td>UDIN Mandate - effective 1 July 2019</td><td>18-digit UDIN mandatory on every CA certificate</td></tr>
<tr><td><strong>ICAI</strong></td><td>SA 500 Audit Evidence</td><td>Governs CA verification before signing</td></tr>
<tr><td><strong>ICAI</strong></td><td>SA 505 External Confirmations</td><td>Governs bank balance and FD confirmation</td></tr>
<tr><td><strong>Government of India</strong></td><td>General Financial Rules 2017</td><td>Governs central-government tender bid eligibility, EMD, performance guarantee</td></tr>
<tr><td><strong>CPPP</strong></td><td>General Guidelines for e-Procurement (December 2023)</td><td>Updated bidder declaration safeguards and integrity provisions</td></tr>
<tr><td><strong>BMC</strong></td><td>Standing Order on Procurement and Ward Empanelment Procedures</td><td>Governs BMC central and ward-level tender NWC requirements</td></tr>
<tr><td><strong>Ministry of MSME</strong></td><td>Public Procurement Policy for MSEs 2012 (amended)</td><td>EMD exemption, 15 percent price preference, 25 percent procurement reservation for MSME bidders</td></tr>
</tbody></table></div>
<div class="highlight-box">
<p><strong>Governing Framework:</strong> Chartered Accountants Act 1949 and Code of Ethics 2020 for the issuing CA. General Financial Rules 2017, Manual for Procurement of Goods 2024 and Manual for Procurement of Works 2024 for central-government tenders. CPPP General Guidelines for e-Procurement (December 2023). BMC Standing Order on Procurement for BMC tenders. Maharashtra Public Works Department Manual for state PWD tenders. MSME Public Procurement Policy 2012 (as amended).</p>
<p><strong>Key Provisions:</strong> Section 21 of the Chartered Accountants Act 1949 covers professional misconduct. The Second Schedule, Part I, Clause (8) penalises a CA who fails to obtain sufficient information before expressing an opinion. GFR 2017 Rule 144 covers tender eligibility verification. BMC Standing Order requires CA-certified net worth at ward empanelment and major-tender bidding.</p>
<p><strong>Applicable Standards:</strong> ICAI SA 200 Overall Objectives, SA 500 Audit Evidence, SA 505 External Confirmations, SA 580 Written Representations.</p>
<p><strong>Penalty Exposure for the CA:</strong> Reprimand, fine up to Rs 5 lakh, or removal of name from the Register of Members under the Chartered Accountants Act 1949.</p>
<p><strong>Penalty Exposure for the Bidder:</strong> Bid rejection at technical evaluation; forfeiture of EMD; blacklisting from central-government tender bidding for up to 3 years under GFR 2017; debarment from GeM and CPPP platforms; BMC ward-empanelment cancellation; performance guarantee invocation if discovered after award; plus prosecution under Indian Penal Code Section 420 (now Section 318 of the Bharatiya Nyaya Sanhita 2023) for cheating, with imprisonment up to 7 years.</p>
</div>

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
                    <h2 class="faq-expanded__title">FAQs: Net Worth Certificate for Tender Bidding in Mumbai</h2>
                    <p class="faq-expanded__lead">Common questions about Net Worth Certificate for Tender Bidding for Mumbai businesses, answered by our CA and CS team.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Net Worth Certificate for Tender Bidding',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Why does a Mumbai BMC tender require a net worth certificate?</h3>
                        <div class="faq-expanded__a"><p>BMC requires the certificate as the binary financial-eligibility filter at the technical evaluation stage of its annual ~Rs 60,000 crore tender flow across 227 wards. The certificate establishes that the bidder has the financial capacity to execute the contract without disruption. BMC central tenders typically require Rs 5 lakh to Rs 5 crore net worth depending on contract value; BMC ward-level empanelment requires Rs 25 lakh to Rs 1 crore depending on category. Below the threshold means rejection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the format prescribed for MMRDA and MMRC Metro tender NWC?</h3>
                        <div class="faq-expanded__a"><p>MMRDA and MMRC each prescribe their own Annexure format with specific declaration language, asset-category breakdowns, and JV-bid provisions. MMRC Metro Line 3 (Aqua Line) pre-qualification Annexure typically requires entity audited net worth above Rs 50-500 crore depending on package, with 3-year turnover trend. MMRDA infrastructure tender Annexures vary by project. Patron's Mumbai office maintains both format libraries and replicates the exact Annexure prescribed in each tender document.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Who can issue a net worth certificate for tender bidding in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Only a practising Chartered Accountant in Mumbai holding a valid Certificate of Practice from ICAI can sign and issue a net worth certificate for tender bidding. The CA generates an 18-digit UDIN at udin.icai.org, signs on firm letterhead with ICAI seal, and prints Membership Number and Firm Registration Number. Mumbai tender evaluation committees at BMC, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port, MIAL, plus GeM and CPPP all verify the UDIN.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are the net worth thresholds at JNPA and Mumbai Port Authority tenders?</h3>
                        <div class="faq-expanded__a"><p>JNPA terminal operator tenders typically require Rs 100 crore or more net worth, with full financial-capacity disclosure including export-debtor LC tenor and country-risk exposure. Mumbai Port Authority waterfront and inland tenders range from Rs 25 lakh for small-scale facility tenders to Rs 50 crore for major terminal contracts. Both authorities use their own Annexure formats. Patron's Mumbai office maintains both libraries and ensures the certified net worth comfortably exceeds the threshold.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Mumbai BMC ward ka empanelment certificate kaise milta hai? (Hinglish voice-search)</h3>
                        <div class="faq-expanded__a"><p>BMC ke 227 wards mein har ward office apne empanelment process chalata hai. K-West Ward, A Ward, F-North aur baaki wards apna alag Annexure use karte hain joh central BMC tender format se thoda different hota hai. Patron Mumbai office sab ward formats maintain karta hai aur ward-empanelment certificate annually deliver karta hai. UDIN ke saath same day soft copy aur 2-3 din mein hard copy ready ho jata hai BMC ward office submission ke liye.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is UDIN mandatory on a Mumbai tender net worth certificate?</h3>
                        <div class="faq-expanded__a"><p>Yes, UDIN is mandatory on every CA-issued net worth certificate since 1 July 2019, enforced by ICAI. The 18-digit Unique Document Identification Number is generated at udin.icai.org and printed on the certificate. Mumbai tender evaluation committees at BMC, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port, MIAL, Western Naval Command, RBI, SEBI, BARC, TIFR plus GeM and CPPP all verify the UDIN on the ICAI portal as standard. Certificates without UDIN are rejected.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is JV net worth presented for MMRC Metro Line 3 tenders?</h3>
                        <div class="faq-expanded__a"><p>MMRC Metro Line 3 pre-qualification typically requires lead and member NWCs separately PLUS a consolidated JV NWC showing aggregated net worth against the threshold (typically Rs 100 crore or more depending on package). Patron's Mumbai team reads the tender's JV provisions, prepares all three certificates with matching as-of dates, ties each to the JV agreement reference and the member responsibility split, and ensures the consolidated certification covers the threshold with reconciled supporting financials from both partners.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Mumbai property reckoner se kam ho to certificate kaise dikhayein? (Hinglish voice-search)</h3>
                        <div class="faq-expanded__a"><p>Mumbai mein Worli, Lower Parel, BKC, Bandra mein market value reckoner se 2-3x hota hai. Patron Mumbai office dono dikhata hai - IGR Maharashtra ka reckoner certified floor ke roop mein aur empanelled valuer ka indicative market value alag se reference karta hai. Tender evaluation committee ko defensible range mil jaata hai. Reckoner-only listing se net worth understated hota hai aur threshold pe risk badhta hai; market-only listing pe queries aati hain. Dual presentation safe rehta hai.</p></div>
                    </div>
                </div>
            </div>

            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Who issues it in Mumbai?</strong> Practising CA with valid COP registered with ICAI.</p>
<p><strong>Cost?</strong> Starting INR 1,499 (Exl GST and Govt. Charges) at Patron Accounting Mumbai.</p>
<p><strong>Timeline?</strong> Soft copy same day for e-procurement; hard copy same-day pickup or 2-day standard.</p>
<p><strong>Validity?</strong> Tender-document specific - BMC ward annual, MMRC and MMRDA 3-6 months from issue.</p>
<p><strong>Tender authorities covered?</strong> BMC (central + ward), MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port, MIAL, Western Naval Command, RBI, SEBI, BARC, TIFR, GeM, CPPP.</p>
<p><strong>JV bids supported?</strong> Yes - lead, member, and consolidated certificates with JV agreement reference.</p>
<p><strong>Export debtor (JNPA/MIAL exporters) handled?</strong> Yes - with LC tenor and country-risk note.</p>
<p><strong>UDIN mandatory?</strong> Yes - since 1 July 2019 on every CA certificate.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Acting Early Matters</h2>
            <div class="content-text">
                
                <p>Mumbai tender bid deadlines are non-extendable; a certificate that arrives even a minute after the bid-close timestamp disqualifies the bid entirely. Annexure format mismatch is the second-most common disqualification - BMC central differs from BMC ward, and MMRC, MMRDA, JNPA, MIAL each have distinct formats. Net worth below threshold is a hard binary - BMC ward empanelment Rs 25 lakh-1 crore, BMC central tenders Rs 5 lakh-5 crore, MMRC Metro Line 3 packages Rs 50-500 crore, JNPA terminal tenders Rs 100+ crore. For MSME bidders, the EMD exemption, 15 percent price preference, and 25 percent procurement reservation unlock only when technical evaluation clears. Plan the certificate request 7-10 days before the bid-opening date; for last-minute bids, Patron's Mumbai office offers same-day delivery.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Net Worth Certificate for Tender Bidding Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">A net worth certificate for tender bidding in Mumbai is the document that gates the bidder's progression past technical evaluation in India's densest procurement market. It must be CA-signed, UDIN-authenticated, on the tender-authority-specific Annexure format (BMC central or ward, MMRDA, MMRC, MSRDC, MHADA, SRA, CIDCO, JNPA, Mumbai Port, MIAL, Western Naval Command, GeM or CPPP), with net worth that exceeds the tender threshold (Rs 25 lakh for small ward empanelments to Rs 500 crore for MMRC Metro Line 3 packages), dated within the validity window the tender document specifies, and aligned to the latest audited financials. Patron Accounting issues this certificate from its Mumbai office starting INR 1,499, with the Annexure-format library for all major Mumbai procurement authorities maintained and same-day delivery available for bid-deadline urgency. Backed by 15+ years of practice and over 2,650 tender bidding certificates issued for Mumbai bidders, the team applies SA 500 and SA 505 verification before signing.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Net%20Worth%20Certificate%20for%20Tender%20Bidding%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Net Worth Certificate for Tender Bidding%20Services&body=Hello%2C%20I%20just%20visited%20your%20Net%20Worth%20Certificate%20for%20Tender%20Bidding%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Net Worth Certificate for Tender Bidding Across Other Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Same Patron quality, locally accepted formats - other major cities we serve.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;">
<div class="pa-city-grid">
                    <a href="/net-worth-certificate-for-tender-bidding/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/net-worth-certificate-for-tender-bidding/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/net-worth-certificate-for-tender-bidding/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/net-worth-certificate-for-tender-bidding/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div></div>
<div class="pa-city-block">
<div class="pa-block-title">Related Services</div>
<div class="pa-block-sub">End-to-end support for Net Worth Certificate for Tender Bidding</div>
<div class="pa-cross-grid">
<a href="https://www.patronaccounting.com/net-worth-certificate" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Net Worth Certificate</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-bank-loan" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Net Worth Certificate for Business Loan</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-home-loan" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Net Worth Certificate for Home Loan</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-visa" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Net Worth Certificate for Visa</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-sole-proprietorship" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Net Worth Certificate Sole Proprietorship</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-partnership-firms" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Net Worth Certificate for Partnership Firms</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 2 July 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">2 July 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 2 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Content reviewed every 6 months and updated on regulatory or scheme changes that affect this service.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026-27 ITR filing is live</strong> - get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Net%20Worth%20Certificate%20for%20Tender%20Bidding%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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









<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
     ============================================ -->
{{-- Enquiry form markup + JS now in partials/enquiry-form.blade.php --}}



<!-- WhatsApp Sticky Bar Script -->


<!-- Last Updated hardcoded in markup per QC v2.1 (no view-time JS) -->
