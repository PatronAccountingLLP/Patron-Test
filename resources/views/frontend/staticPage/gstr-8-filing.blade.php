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
    <title>GSTR-8 Filing in 2026: E-Commerce TCS | Patron Accounting</title>
    <meta name="description" content="GSTR-8 is the monthly TCS return for e-commerce operators under Section 52 CGST Act. 0.5% TCS, due 10th. Patron starts at Rs 2,499/mo (Exl GST).">
    <link rel="canonical" href="/gstr-8-filing">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GSTR-8 Filing in 2026: E-Commerce TCS | Patron Accounting">
    <meta property="og:description" content="GSTR-8 is the monthly TCS return for e-commerce operators under Section 52 CGST Act. 0.5% TCS, due 10th. Patron starts at Rs 2,499/mo (Exl GST).">
    <meta property="og:url" content="/gstr-8-filing">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GSTR-8 Filing in 2026: E-Commerce TCS | Patron Accounting">
    <meta name="twitter:description" content="GSTR-8 is the monthly TCS return for e-commerce operators under Section 52 CGST Act. 0.5% TCS, due 10th. Patron starts at Rs 2,499/mo (Exl GST).">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/gstr-8-filing/#service",
        "name": "GSTR-8 Filing for E-Commerce Operators in India",
        "description": "GSTR-8 filing service for e-commerce operators required to collect tax at source under Section 52 of the CGST Act 2017 and Rule 67 of the CGST Rules. Monthly return preparation, net value reconciliation, Section 9(5) carve-out, supplier amendment handling, and challan-to-credit verification starting from INR 2,499 per month for marketplaces, aggregators, and digital platforms.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/gstr-8-filing" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [
            { "@type": "Thing", "name": "Goods and Services Tax (India)", "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)" },
            { "@type": "Thing", "name": "E-commerce", "sameAs": "https://en.wikipedia.org/wiki/E-commerce" }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "GSTR-8 Filing Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "Standard Monthly GSTR-8 Filing",
                    "priceCurrency": "INR",
                    "price": "2499",
                    "description": "Up to 100 supplier entries, net value reconciliation, challan, and filing per state"
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/gstr-8-filing/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "GST Services", "item": "https://www.patronaccounting.com/gst-services" },
            { "@type": "ListItem", "position": 3, "name": "GSTR-8 Filing", "item": "https://www.patronaccounting.com/gstr-8-filing" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/gstr-8-filing/#faq",
        "datePublished": "2026-05-27T08:00:00+05:30",
        "dateModified": "2026-06-01T08:00:00+05:30",
        "mainEntity": [

            {
                "@type": "Question",
                "name": "What is GSTR-8 and who must file it?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "GSTR-8 is the monthly GST return prescribed under Rule 67 of the CGST Rules 2017 for every e-commerce operator required to collect tax at source under Section 52 of the CGST Act. It applies to platforms like Amazon, Flipkart, Meesho, Swiggy, and any marketplace that collects consideration from buyers on behalf of sellers. The return reports supplier-wise net taxable supplies and TCS collected at 0.5 percent."
                }
            },
            {
                "@type": "Question",
                "name": "What is the GSTR-8 due date and late fee?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "GSTR-8 is due on the 10th day of the calendar month following the tax period under Rule 67 CGST Rules. The late fee is Rs 200 per day (Rs 100 CGST plus Rs 100 SGST), capped at Rs 5,000 per return under Section 47 - no late fee applies on IGST component. Unpaid TCS attracts 18 percent annual interest under Section 50 from the 11th onwards."
                }
            },
            {
                "@type": "Question",
                "name": "What is the current GST TCS rate for e-commerce operators?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The current GST TCS rate is 0.5 percent of the net taxable value, effective from 10 July 2024 per Notification 15/2024-Central Tax. For intra-state supplies the split is 0.25 percent CGST plus 0.25 percent SGST. For inter-state supplies it is 0.5 percent IGST. This is a reduction from the earlier 1 percent rate. TCS is computed on net value (gross supplies minus returns), not gross sales."
                }
            },
            {
                "@type": "Question",
                "name": "Do food delivery and cab aggregators collect TCS under GSTR-8?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Food delivery aggregators and cab aggregators collect TCS only on supplies outside Section 9(5). For Section 9(5) notified services such as cloud kitchen restaurant supplies, motor cab aggregation, and accommodation services, the ECO is the deemed supplier and pays GST directly through GSTR-1 and GSTR-3B, with no TCS collection. The two regimes operate side by side on the same platform."
                }
            },
            {
                "@type": "Question",
                "name": "Can GSTR-8 be revised after filing?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No. GSTR-8 cannot be revised once filed. Any errors or supplier disputes must be corrected through Table 4 of the next month return, where amendment entries are auto-populated based on supplier rejections from their TDS and TCS credit received dashboard. The amendment facility supports multiple revisions over time per the Notification 14/2022 framework."
                }
            },
            {
                "@type": "Question",
                "name": "Is GSTR-8 mandatory in a month with no TCS collection?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No. GSTR-8 is not mandatory for a tax period when the ECO has collected no TCS and there are no auto-populated rejection entries in Table 4 from previous periods. However, the moment any TCS is collected or any rejection flows into Table 4, the return becomes mandatory. Most active marketplaces file every month given the rejection cascade alone."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between GSTR-7 and GSTR-8?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "GSTR-7 is the monthly TDS return filed under Section 51 CGST Act by government, PSU, and notified deductors at 2 percent on contracts above Rs 2.5 lakh. GSTR-8 is the monthly TCS return filed under Section 52 CGST Act by e-commerce operators at 0.5 percent on supplier net taxable supplies. Both are due on the 10th of the next month but operate under different sections, taxpayer universes, and tax mechanics."
                }
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
                        GSTR-8 Filing for E-Commerce Operators in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="https://www.patronaccounting.com/about-us" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> ECO GSTIN, supplier-wise sales register, returns ledger, TCS challan, and settlement data.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from INR 2,499/mo (Exl GST and Govt. Charges) - includes net value reconciliation.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> E-commerce operators collecting consideration from supplier sales on their platform.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Return due by the 10th of next month; supplier credit reflects in the deductee GSTR-2A.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 80+ E-Commerce Operators Managed | 100% On-Time Filing Rate</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GSTR-8 Filing%20Services&body=Hello%2C%20I%20just%20visited%20your%20GSTR-8%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GSTR-8%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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


                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'GSTR-8 Filing',
                                        ])

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
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, &amp; stay in control.',
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
            <!-- TOC_NAVIGATION_ITEMS PATTERN - use class "toc-btn" (NOT "toc-pill"); the CSS (.toc-btn) and scroll-spy JS (querySelectorAll('.toc-btn')) both target this exact class. First item gets "toc-btn active". One button per content section, in document order. Pattern:
                <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
                <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is It</button>
                (repeat for who-section, services-section, procedure-section, documents-section, challenges-section, fees-section, timeline-section, benefits-section, comparison-section, faq-section)
            -->
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What It Is</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Applicability</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">8 vs ECO Returns</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GSTR-8 Filing at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GSTR-8 Filing Services at a Glance</strong></p>
                    <p>GSTR-8 is the monthly GST return filed by e-commerce operators (ECOs) under Section 52 of the CGST Act 2017 read with Rule 67 of the CGST Rules. The return is due on the 10th of the next month and reports supplier-wise net taxable supplies and TCS collected at 0.5 percent (reduced from 1 percent effective 10 July 2024 vide Notification 15/2024-Central Tax). Late filing attracts Rs 200 per day (capped Rs 5,000) under Section 47 plus 18 percent interest under Section 50.</p>
                </div>
                <p>GSTR-8 filing is the operational TCS return for every e-commerce operator running an Amazon, Flipkart, Meesho, or Swiggy-type marketplace in India. The return is filed under Section 52 of the CGST Act and Rule 67 of the CGST Rules, and the post-July 2024 rate cut to 0.5 percent does not soften the reconciliation workload - if anything, the supplier-wise net-value computation has become more granular.</p>
                <p>With 10,000+ Indian businesses served and 15+ years of indirect tax practice, Patron Accounting LLP files 950+ GSTR-8 returns annually across 80+ e-commerce operators - settlement-to-portal in five business days, every month.</p>
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
                <h2 class="section-title">What Is GSTR-8?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GSTR-8 is the monthly GST return prescribed under Rule 67 of the CGST Rules 2017 for e-commerce operators required to collect tax at source under Section 52 of the CGST Act 2017. The return reports supplier-wise gross taxable supplies, returns, net taxable supplies, and TCS collected at 0.5 percent of the net value.</p>
                    <p>The deadline is the 10th day of the next month, and once filed the system credits the TCS amount to the supplier electronic cash ledger and reflects it in their GSTR-2A.</p>
                    <p>The return cannot be revised once filed - corrections flow through Table 4 of the next month return.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GSTR-8 Filing:</strong></p>
                    <ul>
                        <li><strong>E-Commerce Operator (ECO):</strong> Any person who owns, operates, or manages a digital platform for electronic commerce - Amazon, Flipkart, Meesho, Swiggy, Zomato, Urban Company, and similar marketplaces, as defined under Section 2(45) of the CGST Act 2017.</li>
                        <li><strong>TCS (Tax Collected at Source - GST):</strong> Tax collected by the ECO at 0.5 percent of the net taxable value of supplies made by sellers through the platform, under Section 52 CGST Act - separate from Income Tax TCS under Section 206C.</li>
                        <li><strong>Net Taxable Value:</strong> Gross taxable supplies through the platform minus returns - the base on which TCS is computed. Exempt and non-taxable supplies are excluded.</li>
                        <li><strong>Section 9(5) Notified Services:</strong> Restaurant services through cloud kitchens, motor cab aggregation, and accommodation services - the ECO is the deemed supplier and pays GST directly, with no TCS collection on these supplies.</li>
                        <li><strong>Supplier (Deductee):</strong> The seller using the ECO platform - receives TCS credit in their electronic cash ledger after the ECO files GSTR-8, visible in Part C of their GSTR-2A.</li>
                        <li><strong>Table 4 (Amendments):</strong> The section of GSTR-8 used to amend supplier-wise details from earlier statements - amendments can be revisited multiple times per the Notification 14/2022 framework.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GSTR-8 Filing</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>TCS Rate / Due</span>
                        <strong>0.5% / 10th</strong>
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
            <h2 class="section-title">Applicability of GSTR-8</h2>
            <div class="content-text">
                
                <p>GSTR-8 applies to every e-commerce operator registered under Section 24(x) of the CGST Act 2017 who collects consideration from buyers on behalf of sellers using the platform. ECOs must obtain a separate GST registration as TCS Collector in every state where they have registered sellers, in addition to any regular GSTIN. The filing requirement is conditional - GSTR-8 must be filed only when TCS is collected during the period or amendment entries exist in Table 4. A pure zero-supply month with no auto-populated rejections does not trigger mandatory filing.</p>
                <h3 style="margin-top:20px;">Who Must File GSTR-8</h3>
                <ul>
                    <li>Online marketplaces facilitating B2C product sales - Amazon, Flipkart, Meesho, JioMart, Snapdeal</li>
                    <li>Food delivery aggregators where the platform collects consideration - Swiggy, Zomato (for non-9(5) supplies)</li>
                    <li>Service marketplaces collecting consideration - Urban Company, FreshMenu, Justdial Storefront</li>
                    <li>Cab aggregators for non-9(5) inter-state supplies - certain Ola, Uber transactions outside Section 9(5)</li>
                    <li>Travel aggregators collecting hotel and tour consideration - MakeMyTrip, Yatra (for non-9(5) supplies)</li>
                    <li>Any digital marketplace where the operator collects payment from buyers and remits to sellers</li>
                </ul>
                <h3 style="margin-top:20px;">Statutory Deadline</h3>
                <p>GSTR-8 for any tax period is due on the 10th day of the next month under Rule 67 of the CGST Rules 2017. For example, the April 2026 return is due by 10 May 2026. The portal counts late fees from the 11th onwards and follows sequential filing - the prior month return must be closed before the current month can be filed. The 3-year filing bar introduced in July 2025 by GSTN means missed returns become permanently unfiled after 36 months.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Services for GSTR-8 Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly GSTR-8 Preparation and Filing</td><td>End-to-end return preparation - settlement-file import, supplier-wise net value computation, TCS at 0.5 percent, challan funding, and final filing with DSC or EVC by the 10th.</td></tr>
                        <tr><td>Net Value Reconciliation (Gross less Returns)</td><td>Three-way reconciliation between marketplace gross sales, the returns and refunds register, and the settlement statement - eliminates the supplier-side TCS dispute that triggers most ECO notices.</td></tr>
                        <tr><td>ECO Registration as TCS Collector (Section 24(x))</td><td>State-by-state registration as TCS Collector through Form REG-07 - a separate GSTIN per state where sellers are registered, with proper officer follow-up.</td></tr>
                        <tr><td>Section 9(5) Deemed-Supplier Carve-Out</td><td>For ECOs with cloud-kitchen restaurant, motor cab, or accommodation supplies, we segregate Section 9(5) supplies (no TCS, ECO pays GST as deemed supplier) from Section 52 supplies (TCS-applicable).</td></tr>
                        <tr><td>Table 4 Amendment Filing and Supplier Reconciliation</td><td>GSTR-8 cannot be revised once filed - we route corrections through Table 4 of the next return and reconcile supplier acceptance via the TDS and TCS credit received dashboard.</td></tr>
                        <tr><td>Pre-Filing Rate Window Management</td><td>For carry-forward TCS collected before 10 July 2024 at the legacy 1 percent rate, we maintain rate-specific ledgers and ensure correct reporting in transition month returns.</td></tr>

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
            <h2 class="section-title">How GSTR-8 Filing Works - Step by Step</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From portal login through supplier-wise net value entry, Table 4 amendments, challan payment, and supplier credit verification, here is exactly how Patron Accounting files a monthly TCS return.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Log In to the GST Portal</h3>
                    <p class="step-description">Access www.gst.gov.in using the TCS Collector GSTIN, then navigate to Services > Returns > Returns Dashboard.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TCS GSTIN</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Dashboard</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="40" y="30" width="40" height="44" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M50 30v-6a10 10 0 0120 0v6" stroke="#E8712C" stroke-width="2" fill="none"/><circle cx="60" cy="50" r="4" fill="#E8712C"/><path d="M60 54v8" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Portal Login</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Select Period and Open GSTR-8 Tile</h3>
                    <p class="step-description">Choose the Financial Year and Return Filing Period (month), click Search, then click Prepare Online on the GSTR-8 tile.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FY + month</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Prepare Online</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="40" y="30" width="40" height="40" rx="4" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.6"/><text x="60" y="55" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">8</text></svg></div>
                        <span class="illustration-label">Open 8</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Enter Table 3 - Supplies Attracting TCS</h3>
                    <p class="step-description">Add supplier-wise GSTIN, gross taxable supplies, value of returns, net taxable value, and the TCS amount split into CGST/SGST or IGST. Use the offline utility for high-volume marketplaces.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Net value</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CGST/SGST/IGST</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="28" width="60" height="44" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M30 40h60M52 28v44M72 28v44" stroke="#14365F" stroke-width="1.2" opacity="0.5"/><text x="41" y="37" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">T3</text></svg></div>
                        <span class="illustration-label">Table 3</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Review Table 4 - Supplier Amendments</h3>
                    <p class="step-description">Auto-populated entries from supplier rejections in their TDS and TCS credit received table appear here. Edit each entry to match the corrected position and save.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auto-populated</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Close rejects</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="24" width="44" height="56" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M58 60l16-16 6 6-16 16-8 2z" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5" stroke-linejoin="round"/><text x="50" y="44" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">T4</text></svg></div>
                        <span class="illustration-label">Table 4</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Enter Table 5 - Interest Payable</h3>
                    <p class="step-description">Compute interest at 18 percent per annum under Section 50 on any delayed TCS deposit, plus any late fee accrued for the period.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 50</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>18% p.a.</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M40 60L80 40" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><circle cx="44" cy="46" r="6" fill="none" stroke="#E8712C" stroke-width="2"/><circle cx="76" cy="56" r="6" fill="none" stroke="#E8712C" stroke-width="2"/></svg></div>
                        <span class="illustration-label">Table 5</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Generate PMT-06 Challan and Deposit TCS</h3>
                    <p class="step-description">Calculate total TCS liability plus interest, generate the PMT-06 challan, pay through net banking or RTGS, and confirm the credit reflects in the Electronic Cash Ledger.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PMT-06 challan</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cash ledger</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="34" width="60" height="38" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M30 46h60" stroke="#14365F" stroke-width="1.2"/><circle cx="44" cy="60" r="4" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.2"/><text x="74" y="64" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PMT</text></svg></div>
                        <span class="illustration-label">Deposit TCS</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Use Table 6 and Table 7 - Payment of Tax</h3>
                    <p class="step-description">Once the cash ledger is funded, debit the TCS liability through Table 6 (payment of tax) and Table 7 (debit entries) - the portal validates against the ledger balance.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Debit ledger</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Validated</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="30" width="52" height="40" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M44 50h20M44 58h14" stroke="#14365F" stroke-width="1.6" opacity="0.5" stroke-linecap="round"/><text x="60" y="44" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">T6/T7</text></svg></div>
                        <span class="illustration-label">Pay Tax</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Preview Draft GSTR-8</h3>
                    <p class="step-description">Click Preview GSTR-8 to download the draft PDF, and verify supplier names, GSTINs, net values, and tax split against the settlement file.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Verify draft</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Settlement match</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="54" cy="46" r="18" fill="#F0F4F8" stroke="#14365F" stroke-width="1.6"/><circle cx="54" cy="46" r="6" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5"/><path d="M67 59l14 14" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Preview</span>
                        <span class="step-number-large">08</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 9</span>
                    <h3 class="step-title">File the Return with DSC or EVC</h3>
                    <p class="step-description">Companies and LLPs must sign with a valid Digital Signature Certificate. Other ECOs can use the Electronic Verification Code sent to the registered email and mobile.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC / EVC</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ARN issued</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="24" fill="#F0F4F8" stroke="#14365F" stroke-width="1.6"/><path d="M49 50l8 8 16-18" stroke="#E8712C" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <span class="illustration-label">File</span>
                        <span class="step-number-large">09</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 10</span>
                    <h3 class="step-title">Verify Supplier Credit Flow</h3>
                    <p class="step-description">After filing, monitor that each supplier sees the TCS amount in Part C of their GSTR-2A and that the credit reaches their electronic cash ledger.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Part C visible</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Credit flows</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="34" width="40" height="32" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M70 50h16M80 44l6 6-6 6" stroke="#E8712C" stroke-width="2.2" fill="none" stroke-linecap="round" stroke-linejoin="round"/><circle cx="50" cy="50" r="6" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.4"/></svg></div>
                        <span class="illustration-label">Verify</span>
                        <span class="step-number-large">10</span>
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
            <h2 class="section-title">Documents and Data Checklist</h2>
            <div class="content-text">
                
                <ul>
                    <li>Active TCS Collector GSTIN (state-wise) registered via Form REG-07</li>
                    <li>GST portal login credentials and registered email and mobile</li>
                    <li>Valid DSC for the authorised signatory (mandatory for companies and LLPs)</li>
                    <li>Marketplace settlement file for the tax period (gross sales, returns, payouts)</li>
                    <li>Supplier GSTIN master with current validation (cross-checked against the GST portal)</li>
                    <li>Returns and refunds ledger for the tax period</li>
                    <li>Section 9(5) supply segregation report (cloud kitchen, cab, accommodation)</li>
                    <li>PMT-06 challan acknowledgement and cash ledger balance proof</li>
                    <li>Previous month GSTR-8 ARN (the current month requires prior closure under sequential filing)</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Gross vs Net Value TCS Computation Errors</td><td>TCS must be computed on net taxable value (gross minus returns), not gross sales; computing on gross over-collects TCS and triggers supplier disputes that flow into refund claims under Section 54.</td><td>We deploy a three-way reconciliation engine that maps gross sales, returns ledger, and settlement statement - net value is computed once, auditable, and locked.</td></tr>
                        <tr><td>Rate Transition (1% to 0.5%) Carry-Forward</td><td>Some marketplaces still have unresolved TCS positions from before 10 July 2024 at the legacy 1 percent rate, and reporting at the new 0.5 percent rate in transition periods causes mismatches.</td><td>We maintain rate-specific ledgers so pre-10 July 2024 invoices are reported at 1 percent and post-10 July 2024 invoices use 0.5 percent, per CBIC clarification.</td></tr>
                        <tr><td>Section 9(5) Carve-Out for Restaurant and Cab Aggregators</td><td>ECOs with cloud kitchen restaurant supplies or motor cab aggregation must NOT collect TCS on Section 9(5) supplies - the ECO is the deemed supplier and pays GST directly via GSTR-1 and GSTR-3B.</td><td>We segregate platform supplies into Section 52 (TCS-applicable, GSTR-8) and Section 9(5) (deemed-supplier, GSTR-3B) using SKU and merchant-category mapping at source.</td></tr>
                        <tr><td>Supplier Rejection Cascade in Table 4</td><td>When a supplier rejects an ECO TCS entry in their TDS and TCS credit received dashboard, the entry auto-populates in Table 4 of the next GSTR-8; ignoring rejections causes recurring portal flags and delayed filings.</td><td>We run a weekly supplier-rejection sweep and close Table 4 entries within the same return cycle, preventing rejection backlog.</td></tr>

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
            <h2 class="section-title">GSTR-8 Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 2,499/mo (Exl GST and Govt. Charges) - includes net value reconciliation</td></tr>
                        <tr><td>Standard Monthly</td><td>Up to 100 supplier entries, net value reconciliation, challan, GSTR-8 filing per state - INR 2,499/mo</td></tr>
                        <tr><td>Growth Monthly</td><td>Up to 500 supplier entries, Section 9(5) carve-out, Table 4 amendments, supplier reconciliation - INR 4,499/mo</td></tr>
                        <tr><td>Enterprise Marketplace</td><td>500+ suppliers, multi-state TCS GSTINs, settlement file ETL, weekly rejection sweep - On request</td></tr>
                        <tr><td>ECO Registration (Form REG-07 per state)</td><td>One-time TCS Collector registration per state with proper officer follow-up - INR 4,999 per state (one-time)</td></tr>
                        <tr><td>Government Late Fee, Interest and TCS</td><td>Government late fees, interest on delayed TCS, and the TCS amount itself are billed separately at actuals; fees are exclusive of GST</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GSTR-8 Filing consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GSTR-8%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken for GSTR-8 Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Settlement file capture and net value computation (done by 4th)</td><td>2 to 3 working days</td></tr>
                        <tr><td>Supplier GSTIN validation pass (completed by 5th)</td><td>1 working day</td></tr>
                        <tr><td>Challan generation and cash ledger funding (credit by 7th)</td><td>1 to 2 working days</td></tr>
                        <tr><td>Table 3 / 4 data entry and draft preview (reviewed by 8th)</td><td>2 working days</td></tr>
                        <tr><td>Final filing with DSC/EVC (on or before 10th)</td><td>Same day</td></tr>
                        <tr><td>Supplier credit verification (GSTR-2A check)</td><td>2 to 3 days post-filing</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Statutory deadline:</strong> the due date for every monthly GSTR-8 is the 10th of the next month under Rule 67 CGST Rules. Patron freezes the settlement data by the 4th so the challan is funded and the return is filed on or before the 10th, every month.</p>

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
            <h2 class="section-title">Benefits of Professional GSTR-8 Filing Support</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
                <h3 class="feature-title">Section 52 CGST Exposure Handled</h3>
                <p class="feature-desc">By a team that reads Rule 67 and every CBIC notification (15/2024, transition advisories).</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 3H5a2 2 0 00-2 2v4M21 9V5a2 2 0 00-2-2h-4M3 15v4a2 2 0 002 2h4M15 21h4a2 2 0 002-2v-4"/></svg></div>
                <h3 class="feature-title">Net Value Computation Locked</h3>
                <p class="feature-desc">Three-way reconciliation prevents supplier-side TCS disputes.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3v12M6 21a3 3 0 100-6 3 3 0 000 6zM18 9a3 3 0 100-6 3 3 0 000 6zM18 9v3a6 6 0 01-6 6H6"/></svg></div>
                <h3 class="feature-title">Section 9(5) Cleanly Segregated</h3>
                <p class="feature-desc">Deemed-supplier supplies separated from Section 52 TCS supplies at source.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.12 2.12 0 013 3L12 15l-4 1 1-4z"/></svg></div>
                <h3 class="feature-title">Table 4 Amendments Closed</h3>
                <p class="feature-desc">Within the next return cycle - no rejection backlog.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
                <h3 class="feature-title">Late Fee and Interest Avoided</h3>
                <p class="feature-desc">Rs 200 per day late fee and 18% interest avoided across 950+ filings annually.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l2.4 7.4H22l-6 4.5 2.3 7.1-6.3-4.6L5.7 21 8 13.9 2 9.4h7.6z"/></svg></div>
                <h3 class="feature-title">15+ Years of Indirect Tax Practice</h3>
                <p class="feature-desc">The same team handles your scrutiny and personal hearing if a notice ever lands.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</strong></p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ Indian e-commerce and marketplace operators.</p>
                <p>Patron has filed 950+ monthly GSTR-8 returns across 80+ e-commerce operators - from D2C platforms to multi-state marketplaces - with a 100 percent on-time filing record post the July 2024 rate transition.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</strong> See our <a href="https://www.patronaccounting.com/gst-returns-for-e-commerce-operator/mumbai">e-commerce GST support in Mumbai</a> for local assistance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GSTR-8 vs Other ECO Returns</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>GSTR-8 (TCS Return)</th><th>GSTR-1 + 3B (Regular ECO Returns)</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Section</td><td>Section 52 CGST Act</td><td>Sections 37, 39 CGST Act</td></tr>
                        <tr><td>Purpose</td><td>Report TCS collected from supplier sales</td><td>Report ECO own outward supplies and tax liability</td></tr>
                        <tr><td>GSTIN Used</td><td>Separate TCS Collector GSTIN (REG-07)</td><td>Regular GSTIN of the ECO</td></tr>
                        <tr><td>Filing Frequency</td><td>Monthly</td><td>Monthly (GSTR-3B) + monthly/quarterly (GSTR-1)</td></tr>
                        <tr><td>Due Date</td><td>10th of next month</td><td>11th (GSTR-1) and 20th (GSTR-3B)</td></tr>
                        <tr><td>Rate</td><td>0.5% TCS on net value</td><td>Standard GST rates on own supplies</td></tr>
                        <tr><td>Section 9(5) Treatment</td><td>Excluded - ECO is deemed supplier for these</td><td>Reported under GSTR-1/3B as deemed supplier</td></tr>

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
            <h2 class="section-title">Related Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="https://www.patronaccounting.com/gst-services">GST Services</a> - the complete GST services hub covering registration, returns, ITC, refunds, notices and audits.</li>
                    <li><a href="https://www.patronaccounting.com/gst-returns-for-e-commerce-operator">GST Returns for E-Commerce Operator</a> - the parent cluster for broader ECO compliance including GSTR-1, 3B, 9, and Section 9(5).</li>
                    <li><a href="https://www.patronaccounting.com/gst-returns">GST Returns</a> - the parent cluster for all GST monthly returns.</li>
                    <li><a href="https://www.patronaccounting.com/gst-registration">GST Registration</a> - TCS Collector REG-07 registration per state.</li>
                    <li><a href="https://www.patronaccounting.com/gst-returns-for-freelancers">GST Returns for Freelancers</a> - for sellers using marketplaces.</li>
                    <li><a href="https://www.patronaccounting.com/gst-returns-for-sez">GST Returns for SEZ</a> - zero-rated supplies for ECO sellers.</li>
                    <li><a href="https://www.patronaccounting.com/private-limited-company-compliance">Private Limited Company Compliance</a> - annual filing for ECO entities.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Element</th><th>Provision</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>Central Goods and Services Tax Act 2017</td></tr>
                        <tr><td>Primary Section</td><td>Section 52 CGST Act - TCS by electronic commerce operator</td></tr>
                        <tr><td>Linked Section</td><td>Section 9(5) CGST Act - notified services where ECO is deemed supplier</td></tr>
                        <tr><td>Linked Section</td><td>Section 39(3) CGST Act - return filing by TCS collector</td></tr>
                        <tr><td>Operating Rule</td><td>Rule 67, Central Goods and Services Tax Rules 2017</td></tr>
                        <tr><td>Registration Provision</td><td>Section 24(x) CGST Act - mandatory registration as TCS Collector via Form REG-07</td></tr>
                        <tr><td>Threshold</td><td>No threshold - applies to every ECO collecting consideration on the platform</td></tr>
                        <tr><td>Rate</td><td>0.5% of net taxable value (0.25% CGST + 0.25% SGST or 0.5% IGST) per Notification 15/2024-Central Tax</td></tr>
                        <tr><td>Form</td><td>Form GSTR-8</td></tr>
                        <tr><td>Authority</td><td>Central Board of Indirect Taxes and Customs (CBIC) and GST Network (GSTN)</td></tr>
                        <tr><td>Late Fee</td><td>Rs 200/day (Rs 100 CGST + Rs 100 SGST), maximum Rs 5,000 per return under Section 47 - no fee on IGST</td></tr>
                        <tr><td>Interest on Delayed TCS</td><td>18% per annum under Section 50 CGST Act</td></tr>
                        <tr><td>Rate Transition</td><td>Rate reduced from 1% to 0.5% effective 10 July 2024 per Notification 15/2024-Central Tax and IGST Notification 01/2024</td></tr>
                        <tr><td>Section 9(5) Notified Services</td><td>Restaurant (cloud kitchens, Notification 17/2017), motor cab (Notification 17/2017), accommodation (Notification 12/2018)</td></tr>
                        <tr><td>3-Year Filing Bar</td><td>GSTN advisory dated July 2025 - returns older than 3 years cannot be filed</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;"><strong>Penalty for failure to collect or remit GST TCS</strong> by an e-commerce operator: Rs 10,000 or the TCS amount, whichever is higher, under Section 122(1) of the CGST Act 2017. <strong>Late fee for delayed GSTR-8 filing:</strong> Rs 200 per day (Rs 100 CGST + Rs 100 SGST), capped at Rs 5,000 per return under Section 47 - no late fee on the IGST component. <strong>Interest on delayed payment of TCS:</strong> 18 percent per annum from the day after the due date until payment, under Section 50 of the CGST Act 2017.</p>
                <p style="margin-top:12px;">Authoritative references: the <a href="https://tutorial.gst.gov.in/userguide/returns/FAQs_GSTR-8.htm" target="_blank" rel="noopener">GST portal GSTR-8 user manual and FAQ</a>, <a href="https://www.indiacode.nic.in/handle/123456789/2104" target="_blank" rel="noopener">Section 52 of the CGST Act 2017 (India Code)</a>, <a href="https://cbic-gst.gov.in/CGST-bill-e.html" target="_blank" rel="noopener">Rule 67 of the CGST Rules 2017 (CBIC)</a>, and <a href="https://cbic-gst.gov.in/notifications.html" target="_blank" rel="noopener">Notification 15/2024-Central Tax (CBIC)</a>.</p>

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
                    <p class="faq-expanded__lead">Common questions on what GSTR-8 is, the 10th-of-month due date and late fee, the 0.5% TCS rate, Section 9(5) carve-outs, revision via Table 4, conditional filing, and the GSTR-7 vs GSTR-8 difference.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GSTR-8 Filing',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is GSTR-8 and who must file it?</h3>
                        <div class="faq-expanded__a"><p>GSTR-8 is the monthly GST return prescribed under Rule 67 of the CGST Rules 2017 for every e-commerce operator required to collect tax at source under Section 52 of the CGST Act. It applies to platforms like Amazon, Flipkart, Meesho, Swiggy, and any marketplace that collects consideration from buyers on behalf of sellers. The return reports supplier-wise net taxable supplies and TCS collected at 0.5 percent.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the GSTR-8 due date and late fee?</h3>
                        <div class="faq-expanded__a"><p>GSTR-8 is due on the 10th day of the calendar month following the tax period under Rule 67 CGST Rules. The late fee is Rs 200 per day (Rs 100 CGST plus Rs 100 SGST), capped at Rs 5,000 per return under Section 47 - no late fee applies on IGST component. Unpaid TCS attracts 18 percent annual interest under Section 50 from the 11th onwards.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the current GST TCS rate for e-commerce operators?</h3>
                        <div class="faq-expanded__a"><p>The current GST TCS rate is 0.5 percent of the net taxable value, effective from 10 July 2024 per Notification 15/2024-Central Tax. For intra-state supplies the split is 0.25 percent CGST plus 0.25 percent SGST. For inter-state supplies it is 0.5 percent IGST. This is a reduction from the earlier 1 percent rate. TCS is computed on net value (gross supplies minus returns), not gross sales.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Do food delivery and cab aggregators collect TCS under GSTR-8?</h3>
                        <div class="faq-expanded__a"><p>Food delivery aggregators and cab aggregators collect TCS only on supplies outside Section 9(5). For Section 9(5) notified services - cloud kitchen restaurant supplies, motor cab aggregation, and accommodation services - the ECO is the deemed supplier and pays GST directly through GSTR-1 and GSTR-3B, with no TCS collection. The two regimes operate side by side on the same platform.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can GSTR-8 be revised after filing?</h3>
                        <div class="faq-expanded__a"><p>No. GSTR-8 cannot be revised once filed. Any errors or supplier disputes must be corrected through Table 4 of the next month return, where amendment entries are auto-populated based on supplier rejections from their TDS and TCS credit received dashboard. The amendment facility supports multiple revisions over time per the Notification 14/2022 framework.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is GSTR-8 mandatory in a month with no TCS collection?</h3>
                        <div class="faq-expanded__a"><p>No. GSTR-8 is not mandatory for a tax period when the ECO has collected no TCS and there are no auto-populated rejection entries in Table 4 from previous periods. However, the moment any TCS is collected or any rejection flows into Table 4, the return becomes mandatory. Most active marketplaces file every month given the rejection cascade alone.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the difference between GSTR-7 and GSTR-8?</h3>
                        <div class="faq-expanded__a"><p>GSTR-7 is the monthly TDS return filed under Section 51 CGST Act by government, PSU, and notified deductors at 2 percent on contracts above Rs 2.5 lakh. GSTR-8 is the monthly TCS return filed under Section 52 CGST Act by e-commerce operators at 0.5 percent on supplier net taxable supplies. Both are due on the 10th of the next month but operate under different sections, taxpayer universes, and tax mechanics.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">GSTR 8 kaise file kare?</h3>
                        <div class="faq-expanded__a"><p>GSTR-8 file karne ke liye GST portal (gst.gov.in) par TCS Collector GSTIN se login karein, Services se Returns Dashboard kholein, sahi month select karein aur Prepare Online par click karein. Table 3 mein supplier-wise gross supplies, returns, net taxable value, aur TCS amount (0.5%) enter karein. Table 4 mein supplier rejections close karein, Table 5 mein interest declare karein. PMT-06 challan se TCS deposit karein aur 10 tareekh tak DSC ya EVC se file kar dein.</p></div>
                    </div>
                </div>
            </div>

            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Due date:</strong> GSTR-8 is due by the 10th of the next month under Rule 67 CGST Rules.</li>
                    <li><strong>TCS rate:</strong> 0.5% of net taxable value (0.25% CGST + 0.25% SGST or 0.5% IGST) since 10 July 2024.</li>
                    <li><strong>Late fee:</strong> Rs 200/day (Rs 100 CGST + Rs 100 SGST), capped Rs 5,000. No fee on IGST.</li>
                    <li><strong>Computation base:</strong> Net taxable value = gross supplies minus returns.</li>
                    <li><strong>Registration:</strong> Form REG-07 - TCS Collector per state where sellers are registered.</li>
                    <li><strong>Revision:</strong> GSTR-8 cannot be revised - corrections via Table 4 of the next return.</li>
                    <li><strong>Section 9(5):</strong> Restaurant, cab, accommodation - ECO is deemed supplier, no TCS.</li>
                    <li><strong>Filing bar:</strong> 3 years from due date (GSTN advisory July 2025).</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Every Day Past the 10th Costs</h2>
            <div class="content-text">
                
                <p>Every GSTR-8 filed after the 10th attracts a Rs 200 per day late fee (Rs 100 CGST plus Rs 100 SGST) capped at Rs 5,000 per return, plus 18 percent annual interest on the unpaid TCS under Section 50 CGST Act.</p>
                <p>A missed return cascades into supplier disputes - sellers cannot see TCS credit in Part C of GSTR-2A until the operator files - which leads to mass refund-claim requests under Section 54. Sequential filing under Notification 17/2024 means the next month's return cannot be filed until the current one is closed, and the 3-year filing bar (GSTN July 2025) freezes missed returns permanently.</p>
                <p>File the current month's return on or before the 10th and protect both the marketplace GSTIN and the seller ecosystem.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">The TCS-Reporting Cornerstone for E-Commerce</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">GSTR-8 filing is the TCS-reporting cornerstone of every e-commerce operator under Section 52 of the CGST Act. The post-July 2024 rate cut to 0.5 percent has not simplified the workload - net value reconciliation, Section 9(5) carve-outs, and Table 4 amendment cycles still demand specialist hands.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, with 15+ years of indirect tax practice and 80+ active e-commerce clients across marketplaces and aggregators, runs the entire monthly cycle - settlement file ingestion, three-way reconciliation, challan, filing, and supplier credit verification - for a predictable monthly fee. The return is technical, but the process is solvable with the right hands on the portal.</p>
                <p style="color:rgba(255,255,255,0.92);">Explore the parent <a href="https://www.patronaccounting.com/gst-returns-for-e-commerce-operator" style="color:#fff;text-decoration:underline;">GST Returns for E-Commerce Operator</a> cluster, register as a TCS Collector via <a href="https://www.patronaccounting.com/gst-registration" style="color:#fff;text-decoration:underline;">GST Registration</a> (REG-07), or review our broader <a href="https://www.patronaccounting.com/gst-returns" style="color:#fff;text-decoration:underline;">GST Returns</a> service.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GSTR-8%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GSTR-8 Filing%20Services&body=Hello%2C%20I%20just%20visited%20your%20GSTR-8%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support across the e-commerce GST lifecycle</div>
                <div class="pa-cross-grid">
                    <a href="https://www.patronaccounting.com/gst-returns-for-e-commerce-operator" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">E-Commerce GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-returns-for-freelancers" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST for Freelancers</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 27 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 1 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Tier 1 cadence) and on any CBIC notification on Rule 67 or a Section 52 CGST amendment, a GST Council recommendation impacting the TCS rate or Section 9(5) scope, or a change in the Form GSTR-8 tables.</p>
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
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GSTR-8%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
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
<script>
// BF-1: Last Updated mirrors schema dateModified (frozen, NOT live new Date())
(function() {
    var dateStr = '1 June 2026';
    var el1 = document.getElementById('lastUpdated');
    if (el1) { el1.textContent = dateStr; }
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) { el2.textContent = dateStr; }
})();
</script>
@endsection











<!-- WhatsApp Sticky Bar Script -->




