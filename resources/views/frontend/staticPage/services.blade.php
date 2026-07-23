@extends('layouts.service-app')

@section('content')
<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Page Title -->
    <title>ITR Services Directory - Find Your Form | Patron LLP</title>
    
    <!-- Meta Description -->
    <meta name="description" content="Browse all ITR filing options - compare forms, cities, and services. Find the right income tax return solution for individuals, businesses, and NRIs.">

    <!-- Template Thumbnail -->
    <template id="__bundler_thumbnail" data-bg-color="#0d2342">
      <svg viewBox="0 0 1200 800" xmlns="http://www.w3.org/2000/svg">
        <rect width="1200" height="800" fill="#0d2342"/>
        <g transform="translate(360 200)">
          <rect x="0" y="0" width="480" height="400" rx="16" fill="#ffffff"/>
          <rect x="36" y="42" width="160" height="14" rx="3" fill="#0d2342"/>
          <rect x="36" y="72" width="320" height="36" rx="4" fill="#15365f"/>
          <rect x="36" y="126" width="260" height="10" rx="3" fill="#d4d8dd"/>
          <rect x="36" y="148" width="220" height="10" rx="3" fill="#d4d8dd"/>
          <rect x="36" y="196" width="140" height="44" rx="6" fill="#f26522"/>
          <rect x="196" y="196" width="110" height="44" rx="6" fill="#ffffff" stroke="#d4d8dd" stroke-width="1.5"/>
          <g transform="translate(36 280)">
            <rect x="0" y="0" width="195" height="80" rx="6" fill="#f6f7f9"/>
            <rect x="213" y="0" width="195" height="80" rx="6" fill="#f6f7f9"/>
            <text x="16" y="38" font-family="Inter, sans-serif" font-size="24" font-weight="700" fill="#0d2342">50K+</text>
            <text x="16" y="62" font-family="Inter, sans-serif" font-size="10" fill="#6b6e72">ITRs FILED</text>
            <text x="229" y="38" font-family="Inter, sans-serif" font-size="24" font-weight="700" fill="#0d2342">4.9</text>
            <text x="272" y="38" font-family="Inter, sans-serif" font-size="22" fill="#f26522">★</text>
            <text x="229" y="62" font-family="Inter, sans-serif" font-size="10" fill="#6b6e72">500+ REVIEWS</text>
          </g>
        </g>
      </svg>
    </template>

    <!-- Minimal Menu Page Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "datePublished": "2026-05-06T08:00:00+05:30",
        "dateModified": "2026-05-06T08:00:00+05:30",
        "mainEntity": {
            "@type": "ItemList"
        },
        "publisher": {
            "@type": ["Organization", "ProfessionalService"]
        },
        "areaServed": [
            {"@type": "State", "name": "Karnataka"},
            {"@type": "State", "name": "Maharashtra"},
            {"@type": "State", "name": "Delhi"},
            {"@type": "State", "name": "Tamil Nadu"},
            {"@type": "State", "name": "Telangana"},
            {"@type": "State", "name": "West Bengal"},
            {"@type": "State", "name": "Haryana"}
        ],
        "breadcrumb": {
            "@type": "BreadcrumbList"
        }
    }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    /* ====================================================
       PATRON ITR HUB — VARIATION C: HUB WITH SIDEBAR FORM
       Hero + Form 2-column layout, services directory focus,
       advisory tone, no reviews section.
       ==================================================== */
    :root {
        --navy: #15365f;
        --navy-deep: #0d2342;
        --navy-soft: #2a4a7a;
        --orange: #f26522;
        --orange-deep: #d9531a;
        --orange-tint: #fef0e8;
        --grey: #414042;
        --grey-2: #6b6e72;
        --grey-3: #a7aaae;
        --grey-light: #d4d8dd;
        --bg: #fefefe;
        --bg-soft: #f6f7f9;
        --line: #e3e7ec;
        --line-strong: #ccd1da;
        --green-wa: #25d366;
        --green-wa-dark: #128c7e;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }

    /* ============ MOBILE OVERFLOW GUARDS ============ */
    /* Prevents any rogue child from forcing horizontal scroll */
    html, body {
        overflow-x: hidden;
        max-width: 100%;
    }
    html { width: 100%; }
    body {
        font-family: 'Inter', sans-serif;
        line-height: 1.5;
        color: var(--grey);
        background: var(--bg);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        width: 100%;
    }
    img, svg, video, iframe, table {
        max-width: 100%;
    }

    .container-cp {
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 20px;
    }
    @media (max-width: 768px) {
        .container-cp { padding: 0 16px; }
    }

    /* Status bar */
    .statbar {
        background: var(--navy-deep);
        color: #fff;
        font-size: 13px;
        font-weight: 500;
        border-bottom: 1px solid rgba(255,255,255,0.08);
    }
    .statbar-inner {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1180px;
        margin: 0 auto;
        padding: 9px 20px;
        flex-wrap: wrap;
        gap: 8px;
    }
    @media (max-width: 768px) {
        .statbar-inner { padding: 9px 16px; font-size: 12px; }
    }
    .statbar-left { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; min-width: 0; }
    .statbar-pulse {
        width: 8px;
        height: 8px;
        background: var(--green-wa);
        border-radius: 50%;
        animation: statbar-pulse 2s infinite;
        flex-shrink: 0;
    }
    @keyframes statbar-pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }
    .statbar-right { display: flex; align-items: center; gap: 10px; color: rgba(255,255,255,0.7); flex-wrap: wrap; min-width: 0; }
    .statbar-right strong { color: #fff; }
    .sep { color: rgba(255,255,255,0.4); }
    @media (max-width: 580px) {
        .statbar-right { gap: 6px; }
        .statbar-inner { font-size: 11px; }
    }

    /* Hero section with 2-column layout */
    .hero-cp {
        padding: 60px 0 80px;
        background: linear-gradient(135deg, var(--bg) 0%, var(--bg-soft) 100%);
        border-bottom: 1px solid var(--line);
        overflow: hidden;
    }
    @media (max-width: 768px) {
        .hero-cp { padding: 36px 0 50px; }
    }

    .hero-cp-grid {
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        gap: 60px;
        align-items: start;
        margin-bottom: 50px;
    }
    /* Critical: allow grid items to shrink below their intrinsic content width */
    .hero-cp-grid > * {
        min-width: 0;
        max-width: 100%;
    }
    @media (max-width: 960px) {
        .hero-cp-grid { grid-template-columns: 1fr; gap: 40px; margin-bottom: 40px; }
    }

    .hero-cp-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        font-weight: 600;
        color: var(--orange);
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 16px;
        flex-wrap: wrap;
    }
    .dot {
        width: 6px;
        height: 6px;
        background: var(--orange);
        border-radius: 50%;
        flex-shrink: 0;
    }

    .hero-cp-h1 {
        font-size: 48px;
        font-weight: 700;
        line-height: 1.1;
        color: var(--navy-deep);
        margin-bottom: 18px;
        word-wrap: break-word;
        overflow-wrap: break-word;
        hyphens: auto;
    }
    @media (max-width: 768px) {
        .hero-cp-h1 { font-size: 36px; }
    }
    @media (max-width: 480px) {
        .hero-cp-h1 { font-size: 28px; }
    }
    @media (max-width: 380px) {
        .hero-cp-h1 { font-size: 24px; line-height: 1.15; }
    }

    .strike-tool {
        position: relative;
        color: var(--grey-3);
        text-decoration: none;
        white-space: nowrap;
    }
    .strike-tool::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        height: 3px;
        background: var(--orange);
        border-radius: 2px;
    }

    .hero-cp-sub {
        font-size: 18px;
        color: var(--grey-2);
        margin-bottom: 32px;
        line-height: 1.6;
        max-width: 540px;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }
    @media (max-width: 768px) {
        .hero-cp-sub { font-size: 16px; margin-bottom: 28px; }
    }

    .hero-cp-cta {
        display: flex;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
        margin-bottom: 24px;
    }
    @media (max-width: 480px) {
        .hero-cp-cta { flex-direction: column; align-items: stretch; gap: 10px; }
        .hero-cp-cta > a { justify-content: center; }
    }

    .btn-cp-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        background: var(--orange);
        color: #fff !important;
        padding: 14px 22px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 14px;
        border: 0;
        cursor: pointer;
        transition: all 0.15s;
        box-shadow: 0 1px 0 rgba(0,0,0,0.04), 0 4px 12px rgba(242,101,34,0.18);
        text-decoration: none !important;
        max-width: 100%;
    }
    .btn-cp-primary:hover {
        background: var(--orange-deep);
        transform: translateY(-1px);
        box-shadow: 0 1px 0 rgba(0,0,0,0.04), 0 8px 18px rgba(242,101,34,0.28);
        color: #fff !important;
    }
    .btn-cp-primary svg { width: 14px; height: 14px; transition: transform 0.15s; flex-shrink: 0; }
    .btn-cp-primary:hover svg { transform: translateX(3px); }

    .btn-cp-secondary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: #fff;
        color: var(--navy) !important;
        padding: 14px 18px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 14px;
        border: 1px solid var(--line-strong);
        cursor: pointer;
        transition: all 0.15s;
        text-decoration: none !important;
        max-width: 100%;
    }
    .btn-cp-secondary:hover { border-color: var(--navy); color: var(--navy) !important; background: var(--bg-soft); }

    .btn-cp-wa {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: var(--green-wa);
        color: #fff !important;
        padding: 14px 18px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 14px;
        border: 0;
        text-decoration: none !important;
        transition: all 0.15s;
        max-width: 100%;
    }
    .btn-cp-wa:hover { background: var(--green-wa-dark); color: #fff !important; }
    .btn-cp-wa svg { width: 14px; height: 14px; flex-shrink: 0; }

    .hero-cp-pricing-row {
        display: flex;
        align-items: center;
        gap: 14px;
        font-size: 13px;
        color: var(--grey-2);
        flex-wrap: wrap;
        padding-top: 16px;
        border-top: 1px dashed var(--line);
        max-width: 540px;
    }
    .hero-cp-pricing-row strong {
        font-family: 'JetBrains Mono', monospace;
        color: var(--navy-deep);
        font-size: 14px;
        font-weight: 600;
    }
    .mono {
        font-family: 'JetBrains Mono', monospace;
    }

    .hero-cp-stats {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        border-radius: 10px;
        overflow: hidden;
        background: linear-gradient(135deg, var(--navy-deep) 0%, var(--navy) 100%);
        margin-top: 32px;
        box-shadow: 0 8px 32px rgba(13,35,66,0.3);
        max-width: 100%;
    }
    .hero-cp-stat {
        padding: 20px 18px;
        background: rgba(255,255,255,0.08);
        border-right: 1px solid rgba(255,255,255,0.1);
        border-bottom: 1px solid rgba(255,255,255,0.1);
        position: relative;
        backdrop-filter: blur(10px);
        min-width: 0;
        overflow: hidden;
    }
    .hero-cp-stat:nth-child(2n) { border-right: 0; }
    .hero-cp-stat:nth-last-child(-n+2) { border-bottom: 0; }
    @media (max-width: 460px) {
        .hero-cp-stats { grid-template-columns: 1fr; }
        .hero-cp-stat { border-right: 0; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .hero-cp-stat:last-child { border-bottom: 0; }
    }
    .hero-cp-stat-num {
        font-size: 28px;
        font-weight: 700;
        color: #fff;
        line-height: 1;
        margin-bottom: 6px;
        display: flex;
        align-items: center;
        gap: 4px;
        flex-wrap: wrap;
    }
    .hero-cp-stat-num .star {
        font-size: 22px;
        color: var(--orange);
        margin-top: -2px;
    }
    .hero-cp-stat-num .plus {
        font-size: 20px;
        color: var(--orange);
        margin-top: -4px;
    }
    .hero-cp-stat-label {
        font-size: 10px;
        font-weight: 600;
        color: rgba(255,255,255,0.8);
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    .tabular {
        font-family: 'JetBrains Mono', monospace;
        font-variant-numeric: tabular-nums;
    }

    /* Sidebar Form (Right Column) */
    .form-sidebar {
        background: #fff;
        border: 1px solid var(--line);
        border-radius: 12px;
        padding: 32px 28px;
        position: sticky;
        top: 20px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        min-width: 0;
        max-width: 100%;
    }
    @media (max-width: 960px) {
        .form-sidebar { position: static; }
    }
    @media (max-width: 480px) {
        .form-sidebar { padding: 24px 20px; }
    }

    .form-header {
        text-align: center;
        margin-bottom: 24px;
    }

    .form-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(242,101,34,0.1);
        color: var(--orange);
        padding: 4px 10px;
        border-radius: 12px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 12px;
        border: 1px solid rgba(242,101,34,0.2);
    }

    .form-title {
        font-size: 22px;
        font-weight: 700;
        color: var(--navy-deep);
        margin: 0 0 8px;
        line-height: 1.2;
    }

    .form-subtitle {
        color: var(--grey-2);
        margin: 0;
        font-size: 14px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        margin-bottom: 16px;
    }
    @media (max-width: 480px) {
        .form-grid { grid-template-columns: 1fr; gap: 0; }
    }

    .form-group {
        margin-bottom: 16px;
        min-width: 0;
    }

    .form-label {
        display: block;
        font-size: 12px;
        font-weight: 600;
        color: var(--navy-deep);
        margin-bottom: 6px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-input {
        width: 100%;
        max-width: 100%;
        padding: 12px;
        border: 1.5px solid var(--line);
        border-radius: 6px;
        font-size: 14px;
        color: var(--grey);
        background: #fff;
        transition: all 0.15s;
        font-family: 'Inter', sans-serif;
    }
    .form-input:focus {
        outline: none;
        border-color: var(--orange);
        box-shadow: 0 0 0 3px rgba(242,101,34,0.1);
    }
    .form-input::placeholder {
        color: var(--grey-3);
    }

    .phone-input-wrapper {
        display: flex;
        gap: 1px;
        border: 1.5px solid var(--line);
        border-radius: 6px;
        overflow: hidden;
        transition: all 0.15s;
        max-width: 100%;
    }
    .phone-input-wrapper:focus-within {
        border-color: var(--orange);
        box-shadow: 0 0 0 3px rgba(242,101,34,0.1);
    }

    .country-code {
        background: var(--bg-soft);
        padding: 12px 8px;
        font-size: 14px;
        font-weight: 600;
        color: var(--grey);
        border: 0;
        display: flex;
        align-items: center;
        gap: 6px;
        cursor: pointer;
        min-width: 70px;
        max-width: 110px;
        flex-shrink: 0;
    }

    .phone-number-input {
        flex: 1 1 0;
        min-width: 0;
        padding: 12px;
        border: 0;
        font-size: 14px;
        color: var(--grey);
        background: #fff;
        font-family: 'Inter', sans-serif;
        width: 100%;
    }
    .phone-number-input:focus {
        outline: none;
    }

    .form-select {
        width: 100%;
        max-width: 100%;
        padding: 12px;
        border: 1.5px solid var(--line);
        border-radius: 6px;
        font-size: 14px;
        color: var(--grey);
        background: #fff;
        cursor: pointer;
        transition: all 0.15s;
        font-family: 'Inter', sans-serif;
    }
    .form-select:focus {
        outline: none;
        border-color: var(--orange);
        box-shadow: 0 0 0 3px rgba(242,101,34,0.1);
    }

    .form-submit-btn {
        width: 100%;
        max-width: 100%;
        background: linear-gradient(135deg, var(--orange) 0%, var(--orange-deep) 100%);
        color: #fff;
        border: 0;
        padding: 14px 20px;
        border-radius: 6px;
        font-weight: 700;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.15s;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        box-shadow: 0 3px 12px rgba(242,101,34,0.3);
    }
    .form-submit-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 20px rgba(242,101,34,0.4);
    }
    .form-submit-btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none;
        box-shadow: 0 3px 12px rgba(242,101,34,0.3);
    }

    .form-note {
        text-align: center;
        font-size: 12px;
        color: var(--grey-2);
        margin-top: 12px;
        line-height: 1.4;
    }

    .form-trust-signals {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid var(--line);
        font-size: 11px;
        color: var(--grey-2);
        flex-wrap: wrap;
        gap: 8px;
    }
    @media (max-width: 480px) {
        .form-trust-signals { justify-content: center; text-align: center; }
    }

    .trust-item {
        display: flex;
        align-items: center;
        gap: 4px;
        font-weight: 500;
    }

    .trust-icon {
        width: 12px;
        height: 12px;
        color: var(--green-wa);
        flex-shrink: 0;
    }

    /* TOC Navigation */
    .hero-cp-toc {
        display: flex;
        gap: 1px;
        background: var(--line);
        border-radius: 8px;
        overflow: hidden;
        padding: 1px;
        flex-wrap: wrap;
        max-width: 100%;
    }
    @media (max-width: 768px) {
        .hero-cp-toc { display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 1px; }
    }
    .toc-item {
        background: #fff;
        padding: 16px 20px;
        text-decoration: none;
        color: var(--grey);
        font-size: 13px;
        font-weight: 600;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 4px;
        transition: all 0.15s;
        border-radius: 6px;
        min-width: 0;
    }
    .toc-item:hover {
        background: var(--bg-soft);
        color: var(--navy-deep);
        text-decoration: none;
    }
    .toc-item-num {
        color: var(--orange);
        font-size: 11px;
        font-weight: 700;
    }
    .toc-item-label {
        color: var(--navy-deep);
        font-weight: 700;
        font-size: 14px;
    }
    .toc-item-count {
        color: var(--grey-3);
        font-size: 11px;
    }

    /* Section styles */
    .sec-cp {
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }
    .sec-cp.is-soft {
        background: var(--bg-soft);
    }
    .sec-cp.is-navy {
        background: var(--navy-deep);
        color: #fff;
    }
    .sec-cp.is-navy .sec-h2 {
        color: #fff;
    }
    .sec-cp.is-navy .sec-sub {
        color: rgba(255,255,255,0.8);
    }
    @media (max-width: 768px) {
        .sec-cp { padding: 50px 0; }
    }

    /* Enhanced section headers */
    .sec-head-cp {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        margin-bottom: 50px;
        gap: 40px;
        position: relative;
        flex-wrap: wrap;
    }
    @media (max-width: 768px) {
        .sec-head-cp { flex-direction: column; align-items: flex-start; gap: 20px; margin-bottom: 40px; }
    }

    .sec-head-cp::before {
        content: '';
        position: absolute;
        top: -20px;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, var(--orange) 0%, var(--orange-deep) 100%);
        border-radius: 2px;
    }
    .sec-head-left { min-width: 0; max-width: 100%; }

    .sec-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 11px;
        font-weight: 700;
        color: var(--orange);
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 12px;
        background: var(--orange-tint);
        padding: 6px 12px;
        border-radius: 20px;
        border: 1px solid rgba(242,101,34,0.2);
    }
    .tag-num {
        background: var(--orange);
        color: #fff;
        padding: 2px 6px;
        border-radius: 3px;
        font-size: 10px;
    }

    .sec-h2 {
        font-size: 36px;
        font-weight: 700;
        color: var(--navy-deep);
        margin-bottom: 12px;
        line-height: 1.2;
        position: relative;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }
    @media (max-width: 768px) {
        .sec-h2 { font-size: 28px; }
    }
    @media (max-width: 380px) {
        .sec-h2 { font-size: 24px; }
    }

    .sec-sub {
        font-size: 16px;
        color: var(--grey-2);
        max-width: 500px;
        line-height: 1.5;
    }

    .sec-counter {
        font-size: 13px;
        color: var(--grey-3);
        font-weight: 600;
        background: linear-gradient(135deg, var(--line) 0%, var(--bg-soft) 100%);
        padding: 8px 16px;
        border-radius: 25px;
        border: 1px solid var(--line);
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        white-space: nowrap;
    }

    /* Grid layouts */
    .grid-cp {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }
    .grid-cp.is-4 {
        grid-template-columns: repeat(4, 1fr);
    }
    .grid-cp.is-5 {
        grid-template-columns: repeat(5, 1fr);
    }
    .grid-cp > * { min-width: 0; }
    @media (max-width: 960px) {
        .grid-cp { grid-template-columns: repeat(2, 1fr); }
        .grid-cp.is-5 { grid-template-columns: repeat(3, 1fr); }
    }
    @media (max-width: 640px) {
        .grid-cp { grid-template-columns: 1fr; }
        .grid-cp.is-4,
        .grid-cp.is-5 { grid-template-columns: 1fr; }
    }

    /* Tile styles */
    .tile-cp {
        background: #fff;
        border: 1px solid var(--line);
        border-radius: 12px;
        padding: 24px;
        text-decoration: none;
        color: var(--grey);
        transition: all 0.15s;
        display: flex;
        flex-direction: column;
        gap: 12px;
        min-width: 0;
        max-width: 100%;
    }
    .tile-cp:hover {
        border-color: var(--orange);
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        transform: translateY(-2px);
        text-decoration: none;
        color: var(--grey);
    }
    .tile-cp.is-city {
        text-align: center;
        padding: 12px 10px;
    }

    .tile-cp.is-city .tile-cp-title {
        font-size: 14px;
        margin-bottom: 4px;
        font-weight: 600;
    }

    .tile-cp.is-city .tile-cp-blurb {
        font-size: 11px;
        opacity: 0.7;
        line-height: 1.3;
    }

    .tile-cp-meta-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 11px;
        color: var(--grey-3);
        font-weight: 600;
        gap: 8px;
        flex-wrap: wrap;
    }

    .tile-cp-form-tag {
        background: var(--orange-tint);
        color: var(--orange);
        padding: 2px 8px;
        border-radius: 4px;
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        white-space: nowrap;
    }

    .tile-cp-title {
        font-size: 18px;
        font-weight: 700;
        color: var(--navy-deep);
        line-height: 1.3;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .tile-cp-blurb {
        color: var(--grey-2);
        font-size: 14px;
        line-height: 1.4;
        flex-grow: 1;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .tile-cp-foot {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 12px;
        font-weight: 600;
        margin-top: auto;
        gap: 8px;
    }

    .arrow {
        color: var(--orange);
        font-weight: 700;
        flex-shrink: 0;
    }

    .badge-new-cp {
        background: var(--orange);
        color: #fff;
        font-size: 9px;
        font-weight: 700;
        padding: 2px 6px;
        border-radius: 4px;
        text-transform: uppercase;
        margin-left: 8px;
    }

    /* CTA strips */
    .cta-strip-cp {
        background: var(--orange-tint);
        border-top: 1px solid rgba(242,101,34,0.2);
        border-bottom: 1px solid rgba(242,101,34,0.2);
    }
    .cta-strip-cp-inner {
        max-width: 1180px;
        margin: 0 auto;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    @media (max-width: 768px) {
        .cta-strip-cp-inner { flex-direction: column; text-align: center; gap: 16px; padding: 20px 16px; }
    }

    .cta-strip-text {
        font-size: 15px;
        color: var(--grey);
        min-width: 0;
    }
    .cta-strip-text em {
        font-style: normal;
        color: var(--grey-2);
    }
    .cta-strip-text strong {
        color: var(--navy-deep);
    }

    .cta-strip-actions {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .btn-strip {
        padding: 10px 16px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.15s;
        white-space: nowrap;
    }
    .btn-strip.is-orange {
        background: var(--orange);
        color: #fff;
    }
    .btn-strip.is-orange:hover {
        background: var(--orange-deep);
        color: #fff;
        text-decoration: none;
    }
    .btn-strip.is-wa {
        background: var(--green-wa);
        color: #fff;
    }
    .btn-strip.is-wa:hover {
        background: var(--green-wa-dark);
        color: #fff;
        text-decoration: none;
    }
    .btn-strip.is-ghost {
        background: #fff;
        color: var(--grey);
        border: 1px solid var(--line-strong);
    }
    .btn-strip.is-ghost:hover {
        border-color: var(--grey);
        color: var(--grey);
        text-decoration: none;
    }
    .btn-strip svg {
        width: 14px;
        height: 14px;
        flex-shrink: 0;
    }

    /* FAQ */
    .faq-grid-cp {
        display: grid;
        gap: 16px;
    }

    .faq-item-cp {
        background: #fff;
        border: 1px solid var(--line);
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.15s;
    }
    .faq-item-cp:hover { border-color: var(--line-strong); }
    .faq-item-cp.is-open { border-color: var(--orange); }

    .faq-q-cp {
        width: 100%;
        background: none;
        border: 0;
        padding: 20px 24px;
        text-align: left;
        font-size: 16px;
        font-weight: 600;
        color: var(--navy-deep);
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 16px;
        line-height: 1.4;
    }
    @media (max-width: 480px) {
        .faq-q-cp { padding: 16px 18px; font-size: 15px; gap: 12px; }
    }
    .faq-q-cp:hover { background: rgba(242,101,34,0.02); }

    .q-num {
        background: var(--bg-soft);
        color: var(--grey-2);
        font-size: 11px;
        font-weight: 700;
        padding: 4px 8px;
        border-radius: 4px;
        flex-shrink: 0;
    }
    .faq-item-cp.is-open .q-num {
        background: var(--orange);
        color: #fff;
    }

    .q-text {
        flex-grow: 1;
        min-width: 0;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .q-icon {
        font-size: 18px;
        color: var(--grey-3);
        font-weight: 400;
        transition: all 0.15s;
        flex-shrink: 0;
    }
    .faq-item-cp.is-open .q-icon {
        transform: rotate(45deg);
        color: var(--orange);
    }

    .faq-a-cp {
        padding: 0 24px 20px;
        font-size: 14px;
        line-height: 1.6;
        color: var(--grey);
        display: none;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }
    @media (max-width: 480px) {
        .faq-a-cp { padding: 0 18px 18px; }
    }
    .faq-item-cp.is-open .faq-a-cp { display: block; }

    .faq-a-cp p { margin-bottom: 12px; }
    .faq-a-cp p:last-child { margin-bottom: 0; }

    /* Footer strip */
    .footer-strip-cp {
        padding: 30px 0;
        background: var(--bg-soft);
        border-top: 1px solid var(--line);
        text-align: center;
        font-size: 13px;
        color: var(--grey-2);
        line-height: 1.5;
    }
    .footer-strip-cp strong {
        color: var(--navy-deep);
    }

    /* WhatsApp sticky bar */
    .wa-sticky-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: var(--green-wa);
        color: #fff;
        padding: 12px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 -2px 12px rgba(0,0,0,0.15);
        z-index: 1000;
        animation: slideUp 0.3s ease;
        font-size: 14px;
        gap: 16px;
        max-width: 100%;
    }
    @keyframes slideUp {
        from { transform: translateY(100%); }
        to { transform: translateY(0); }
    }
    @media (max-width: 768px) {
        .wa-sticky-bar { padding: 12px 16px; gap: 10px; }
    }
    @media (max-width: 480px) {
        .wa-sticky-bar { padding: 10px 12px; font-size: 13px; gap: 8px; }
    }

    .wa-icon {
        width: 20px;
        height: 20px;
        flex-shrink: 0;
    }

    .wa-sticky-text {
        flex-grow: 1;
        font-weight: 500;
        min-width: 0;
        overflow: hidden;
    }
    .wa-sticky-text strong {
        font-weight: 700;
    }

    .wa-sticky-text-short { display: none; }
    .wa-sticky-text-full { display: block; }
    @media (max-width: 640px) {
        .wa-sticky-text-short { display: block; }
        .wa-sticky-text-full { display: none; }
    }

    .wa-sticky-cta {
        background: rgba(255,255,255,0.15);
        color: #fff;
        padding: 8px 16px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.15s;
        border: 1px solid rgba(255,255,255,0.2);
        flex-shrink: 0;
    }
    .wa-sticky-cta:hover {
        background: rgba(255,255,255,0.25);
        color: #fff;
        text-decoration: none;
    }

    .wa-sticky-close {
        background: none;
        border: 0;
        color: rgba(255,255,255,0.8);
        font-size: 18px;
        cursor: pointer;
        padding: 4px;
        margin-left: 8px;
        transition: color 0.15s;
        flex-shrink: 0;
    }
    .wa-sticky-close:hover { color: #fff; }

    /* Form validation styles */
    .form-input:invalid:not(:focus):not(:placeholder-shown),
    .phone-number-input:invalid:not(:focus):not(:placeholder-shown) {
        border-color: #dc3545;
        box-shadow: 0 0 0 3px rgba(220,53,69,0.1);
    }
    
    .form-input:valid:not(:placeholder-shown),
    .phone-number-input:valid:not(:placeholder-shown) {
        border-color: var(--green-wa);
        box-shadow: 0 0 0 3px rgba(37,211,102,0.1);
    }
    </style>
</head>
<body>

<main>

<!-- ============ STATUS BAR ============ -->
<div class="statbar">
    <div class="statbar-inner">
        <div class="statbar-left">
            <span class="statbar-pulse" aria-hidden="true"></span>
            <span><strong>Patron Accounting LLP</strong> · CA-led · Since 2019</span>
        </div>
        <div class="statbar-right">
            <span>FY <strong>2025-26</strong></span>
            <span class="sep">·</span>
            <span>AY <strong>2026-27</strong></span>
            <span class="sep">·</span>
            <span>Updated <strong id="lastUpdated"></strong></span>
        </div>
    </div>
</div>

<!-- ============ HERO + FORM GRID ============ -->
<section class="hero-cp">
    <div class="container-cp">
        <div class="hero-cp-grid">
            <!-- LEFT COLUMN: Hero Content -->
            <div>
                <div class="hero-cp-eyebrow"><span class="dot"></span>ITR Services Hub — India 2026</div>
                <h1 class="hero-cp-h1">
                    File your ITR with a real CA. Not <span class="strike-tool">a tool</span>.
                </h1>
                <p class="hero-cp-sub">34+ specialized ITR filing services across every filer type, profession and industry. From salary ITR-1 to complex F&O, NRI and company filings.</p>
                <div class="hero-cp-cta">
                    <a href="/tools/itr-form-selector" class="btn-cp-primary">
                        Find My ITR Service
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="2" y1="8" x2="13" y2="8"/><polyline points="8 3 13 8 8 13"/></svg>
                    </a>
                    <a href="tel:+919459456700" class="btn-cp-secondary">Talk to a CA</a>
                    <a href="https://wa.me/919459456700?text=Hi%2C%20I%27m%20enquiring%20from%20the%20ITR%20Services%20Hub%20at%20patronaccounting.com/income-tax-return.%20Please%20help%20me%20find%20the%20right%20ITR%20service." class="btn-cp-wa" rel="noopener" target="_blank">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12c0 2.115.555 4.181 1.611 6.001L0 24l6.146-1.611A11.937 11.937 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm5.36 14.477c-.293-.146-1.733-.854-2.001-.952-.268-.098-.464-.146-.659.146-.196.293-.756.952-.927 1.147-.171.196-.342.22-.635.073-.293-.146-1.236-.456-2.354-1.452-.871-.776-1.459-1.736-1.63-2.029-.171-.293-.018-.451.128-.597.131-.131.293-.342.439-.513.146-.171.196-.293.293-.488.098-.196.049-.366-.024-.513-.073-.146-.659-1.59-.903-2.176-.238-.572-.479-.494-.659-.503l-.561-.01c-.196 0-.513.073-.781.366s-1.025 1.001-1.025 2.443c0 1.441 1.05 2.834 1.196 3.029.146.196 2.067 3.157 5.011 4.426.7.302 1.246.483 1.671.618.702.223 1.341.192 1.846.116.563-.084 1.733-.708 1.978-1.392.244-.683.244-1.269.171-1.392-.073-.122-.268-.196-.561-.342z"/></svg>
                        WhatsApp
                    </a>
                </div>
                <div class="hero-cp-pricing-row">
                    <span>Salary ITR from <strong>INR 999</strong></span>
                    <span class="mono" style="opacity:.4">·</span>
                    <span>Business from <strong>INR 2,499</strong></span>
                    <span class="mono" style="opacity:.4">·</span>
                    <span>Complex cases <strong>quoted</strong></span>
                </div>

                <!-- Stats Grid -->
                <div class="hero-cp-stats">
                    <div class="hero-cp-stat">
                        <div class="hero-cp-stat-num tabular">34<span class="plus">+</span></div>
                        <div class="hero-cp-stat-label">Specialized ITR services</div>
                    </div>
                    <div class="hero-cp-stat">
                        <div class="hero-cp-stat-num tabular">4.9<span class="star">★</span></div>
                        <div class="hero-cp-stat-label">500+ Google reviews</div>
                    </div>
                    <div class="hero-cp-stat">
                        <div class="hero-cp-stat-num tabular">50K<span class="plus">+</span></div>
                        <div class="hero-cp-stat-label">ITRs filed pan-India</div>
                    </div>
                    <div class="hero-cp-stat">
                        <div class="hero-cp-stat-num tabular">99.8<span style="font-size:16px;color:var(--grey-2);font-weight:500;">%</span></div>
                        <div class="hero-cp-stat-label">On-time filing record</div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Consultation Form -->
            <div class="form-sidebar">
                <div class="form-header">
                    <div class="form-badge">Service Guidance</div>
                    <h2 class="form-title">Get Personalized Guidance</h2>
                    <p class="form-subtitle">Find the right ITR service for your needs</p>
                </div>
                
                <form action="/submit-itr-enquiry" method="POST" novalidate>
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label" for="name">Full Name</label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                class="form-input" 
                                placeholder="Your name" 
                                required 
                                minlength="2"
                                maxlength="50"
                                pattern="[A-Za-z\s]+"
                                title="Please enter your full name (letters and spaces only)"
                            >
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="city">City</label>
                            <input 
                                type="text" 
                                id="city" 
                                name="city" 
                                class="form-input" 
                                placeholder="Your city"
                                maxlength="50"
                                pattern="[A-Za-z\s]+"
                                title="Please enter your city name (letters and spaces only)"
                            >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="phone">Phone Number</label>
                        <div class="phone-input-wrapper">
                            <select class="country-code" name="country_code" required>
                                <option value="+91">🇮🇳 +91</option>
                                <option value="+1">🇺🇸 +1</option>
                                <option value="+44">🇬🇧 +44</option>
                                <option value="+971">🇦🇪 +971</option>
                                <option value="+65">🇸🇬 +65</option>
                                <option value="+61">🇦🇺 +61</option>
                                <option value="+1">🇨🇦 +1</option>
                                <option value="+49">🇩🇪 +49</option>
                                <option value="+33">🇫🇷 +33</option>
                                <option value="+81">🇯🇵 +81</option>
                                <option value="+966">🇸🇦 +966</option>
                                <option value="+60">🇲🇾 +60</option>
                                <option value="+31">🇳🇱 +31</option>
                                <option value="+41">🇨🇭 +41</option>
                                <option value="+46">🇸🇪 +46</option>
                                <option value="+47">🇳🇴 +47</option>
                                <option value="+64">🇳🇿 +64</option>
                                <option value="+973">🇧🇭 +973</option>
                                <option value="+974">🇶🇦 +974</option>
                                <option value="+965">🇰🇼 +965</option>
                                <option value="+968">🇴🇲 +968</option>
                            </select>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone" 
                                class="phone-number-input" 
                                placeholder="Enter phone number" 
                                required
                                pattern="[0-9]{7,15}"
                                minlength="7"
                                maxlength="15"
                                title="Please enter a valid phone number (7-15 digits)"
                            >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="service">What do you need help with?</label>
                        <select id="service" name="service_needed" class="form-select" required>
                            <option value="">Select your situation</option>
                            <option value="Need help choosing ITR service">Need help choosing ITR service</option>
                            <option value="Salary ITR filing">Salary ITR filing</option>
                            <option value="Business ITR filing">Business ITR filing</option>
                            <option value="Capital gains ITR">Capital gains ITR</option>
                            <option value="NRI tax filing">NRI tax filing</option>
                            <option value="F&O trading ITR">F&O trading ITR</option>
                            <option value="Company ITR filing">Company ITR filing</option>
                            <option value="Complex/multiple income sources">Complex/multiple income sources</option>
                            <option value="Tax planning guidance">Tax planning guidance</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="form-submit-btn" id="submitBtn">Find My ITR Service →</button>
                    
                    <p class="form-note">Get personalized service recommendations. Free consultation, no obligation.</p>
                    
                    <div class="form-trust-signals">
                        <div class="trust-item">
                            <svg class="trust-icon" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            Free Guidance
                        </div>
                        <div class="trust-item">
                            <svg class="trust-icon" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            No Spam
                        </div>
                        <div class="trust-item">
                            <svg class="trust-icon" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            Expert Advice
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- TOC bar -->
        <nav class="hero-cp-toc" aria-label="Page sections">
            <a href="#sec-filer" class="toc-item"><span class="toc-item-num">01</span><span class="toc-item-label">Filer Type</span><span class="toc-item-count">5</span></a>
            <a href="#sec-prof" class="toc-item"><span class="toc-item-num">02</span><span class="toc-item-label">Profession</span><span class="toc-item-count">11</span></a>
            <a href="#sec-ind" class="toc-item"><span class="toc-item-num">03</span><span class="toc-item-label">Industry</span><span class="toc-item-count">8</span></a>
            <a href="#sec-tools" class="toc-item"><span class="toc-item-num">04</span><span class="toc-item-label">Calculators</span><span class="toc-item-count">10</span></a>
            <a href="#sec-cities" class="toc-item"><span class="toc-item-num">05</span><span class="toc-item-label">Cities</span><span class="toc-item-count">8</span></a>
            <a href="#sec-adj" class="toc-item"><span class="toc-item-num">06</span><span class="toc-item-label">Adjacent</span><span class="toc-item-count">6</span></a>
            <a href="#sec-faq" class="toc-item"><span class="toc-item-num">07</span><span class="toc-item-label">FAQ</span><span class="toc-item-count">5</span></a>
        </nav>
    </div>
</section>

<!-- ============ FILER TYPE ============ -->
<section class="sec-cp" id="sec-filer">
    <div class="container-cp">
        <div class="sec-head-cp">
            <div class="sec-head-left">
                <div class="sec-tag"><span class="tag-num">01</span>By Filer Type</div>
                <h2 class="sec-h2">Pick your entity, find your form.</h2>
                <p class="sec-sub">Each page covers the relevant ITR form, applicable sections, and a transparent starting price.</p>
            </div>
            <div class="sec-head-right">
                <span class="sec-counter">5 services · From INR 999</span>
            </div>
        </div>
        <div class="grid-cp">
            <a href="/itr-filing-for-salary" class="tile-cp">
                <div class="tile-cp-meta-row"><span>01.01</span><span class="tile-cp-form-tag">ITR-1 / 2</span></div>
                <h3 class="tile-cp-title">Salaried Individuals</h3>
                <p class="tile-cp-blurb">ITR-1 or ITR-2 with Form 16, HRA, capital gains, multi-employer scenarios.</p>
                <div class="tile-cp-foot"><span>From INR 999</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-filing-for-freelancers-professionals" class="tile-cp">
                <div class="tile-cp-meta-row"><span>01.02</span><span class="tile-cp-form-tag">ITR-3 / 4</span></div>
                <h3 class="tile-cp-title">Professionals & Freelancers</h3>
                <p class="tile-cp-blurb">ITR-3 / ITR-4 with Section 44ADA presumptive option, foreign income, FIRC.</p>
                <div class="tile-cp-foot"><span>From INR 2,499</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-business" class="tile-cp">
                <div class="tile-cp-meta-row"><span>01.03</span><span class="tile-cp-form-tag">ITR-3 / 4</span></div>
                <h3 class="tile-cp-title">Business Owners</h3>
                <p class="tile-cp-blurb">Proprietorship and partnership ITR with Section 44AD presumptive or full books.</p>
                <div class="tile-cp-foot"><span>From INR 2,499</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-companies" class="tile-cp">
                <div class="tile-cp-meta-row"><span>01.04</span><span class="tile-cp-form-tag">ITR-6</span></div>
                <h3 class="tile-cp-title">Private Limited Companies</h3>
                <p class="tile-cp-blurb">ITR-6 with MAT, 115BAA / 115BAB regime selection, tax audit support.</p>
                <div class="tile-cp-foot"><span>From INR 3,499</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-llp-partnership" class="tile-cp">
                <div class="tile-cp-meta-row"><span>01.05</span><span class="tile-cp-form-tag">ITR-5</span></div>
                <h3 class="tile-cp-title">LLPs & Partnership Firms</h3>
                <p class="tile-cp-blurb">ITR-5 with partner remuneration, Section 40(b) limits, Form 11 / Form 8.</p>
                <div class="tile-cp-foot"><span>From INR 2,499</span><span class="arrow">↗</span></div>
            </a>
        </div>
    </div>
</section>

<!-- ============ INTER CTA ============ -->
<div class="cta-strip-cp">
    <div class="cta-strip-cp-inner">
        <div class="cta-strip-text"><em>Need help picking?</em> <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="cta-strip-actions">
            <a href="tel:+919459456700" class="btn-strip is-orange">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19.23 15.26l-2.54-.29a1.5 1.5 0 0 0-1.32.51L13.54 17a16 16 0 0 1-7-7l1.55-1.84a1.5 1.5 0 0 0 .5-1.32L8.31 4.32a1.5 1.5 0 0 0-1.5-1.32H4.18A1.5 1.5 0 0 0 2.67 4.5C2.84 6.69 3.83 12.16 8.61 16.94c4.78 4.78 10.25 5.77 12.44 5.94a1.5 1.5 0 0 0 1.5-1.5v-2.63a1.5 1.5 0 0 0-1.32-1.49z"/></svg>
                +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%2C%20I%27m%20enquiring%20from%20the%20ITR%20Services%20Hub%20at%20patronaccounting.com/income-tax-return.%20Please%20help%20me%20find%20the%20right%20ITR%20service." class="btn-strip is-wa" rel="noopener" target="_blank">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 2H4a2 2 0 0 0-2 2v18l4-4h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"/></svg>
                WhatsApp
            </a>
            <a href="mailto:info@patronaccounting.com" class="btn-strip is-ghost">Email</a>
        </div>
    </div>
</div>

<!-- ============ PROFESSION ============ -->
<section class="sec-cp is-soft" id="sec-prof">
    <div class="container-cp">
        <div class="sec-head-cp">
            <div class="sec-head-left">
                <div class="sec-tag"><span class="tag-num">02</span>By Profession & Complexity</div>
                <h2 class="sec-h2">Where DIY tools struggle, CA expertise pays off.</h2>
                <p class="sec-sub">Profession-specific and high-complexity ITR filing — capital gains, ESOP, F&O, NRI and more.</p>
            </div>
            <div class="sec-head-right"><span class="sec-counter">11 services</span></div>
        </div>
        <div class="grid-cp is-4">
            <a href="/itr-for-doctors" class="tile-cp">
                <div class="tile-cp-meta-row"><span>02.01</span><span class="tile-cp-form-tag">44ADA</span></div>
                <h3 class="tile-cp-title">Doctors <span class="badge-new-cp">New</span></h3>
                <p class="tile-cp-blurb">Section 44ADA presumptive vs regular, clinic and locum income.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-nris" class="tile-cp">
                <div class="tile-cp-meta-row"><span>02.02</span><span class="tile-cp-form-tag">SCH FA</span></div>
                <h3 class="tile-cp-title">NRIs & OCIs <span class="badge-new-cp">New</span></h3>
                <p class="tile-cp-blurb">Residential status (Sec 6), NRO / NRE income, DTAA, Schedule FA.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-capital-gains" class="tile-cp">
                <div class="tile-cp-meta-row"><span>02.03</span><span class="tile-cp-form-tag">STCG / LTCG</span></div>
                <h3 class="tile-cp-title">Capital Gains</h3>
                <p class="tile-cp-blurb">Equity, mutual funds, property, gold under post-July-2024 rates.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-fno-traders" class="tile-cp">
                <div class="tile-cp-meta-row"><span>02.04</span><span class="tile-cp-form-tag">ITR-3 · 44AB</span></div>
                <h3 class="tile-cp-title">F&O / Intraday Traders</h3>
                <p class="tile-cp-blurb">F&O as non-speculative business, ITR-3 mandatory, audit threshold.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-esop-employees" class="tile-cp">
                <div class="tile-cp-meta-row"><span>02.05</span><span class="tile-cp-form-tag">PERQ + CG</span></div>
                <h3 class="tile-cp-title">ESOP Holders <span class="badge-new-cp">New</span></h3>
                <p class="tile-cp-blurb">Two-stage tax: perquisite at exercise + capital gains at sale.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-real-estate-investors" class="tile-cp">
                <div class="tile-cp-meta-row"><span>02.06</span><span class="tile-cp-form-tag">SCH HP</span></div>
                <h3 class="tile-cp-title">Real Estate Investors <span class="badge-new-cp">New</span></h3>
                <p class="tile-cp-blurb">Multiple properties, Schedule HP, Sec 50C, Sec 54 reinvestment.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-foreign-income" class="tile-cp">
                <div class="tile-cp-meta-row"><span>02.07</span><span class="tile-cp-form-tag">FORM 67</span></div>
                <h3 class="tile-cp-title">Foreign Income Earners <span class="badge-new-cp">New</span></h3>
                <p class="tile-cp-blurb">Global income, Schedule FA, Form 67 foreign tax credit, DTAA.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-government-employees" class="tile-cp">
                <div class="tile-cp-meta-row"><span>02.08</span><span class="tile-cp-form-tag">ITR-1 / 2</span></div>
                <h3 class="tile-cp-title">Govt & PSU Employees <span class="badge-new-cp">New</span></h3>
                <p class="tile-cp-blurb">Standardised salary, NPS, pension-relevant ITR-1 / ITR-2.</p>
                <div class="tile-cp-foot"><span>From INR 999</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-crypto-traders" class="tile-cp">
                <div class="tile-cp-meta-row"><span>02.09</span><span class="tile-cp-form-tag">115BBH</span></div>
                <h3 class="tile-cp-title">Crypto & VDA Traders</h3>
                <p class="tile-cp-blurb">Sec 115BBH 30% flat, Sec 194S TDS, Schedule VDA reporting.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-influencers" class="tile-cp">
                <div class="tile-cp-meta-row"><span>02.10</span><span class="tile-cp-form-tag">SEC 56</span></div>
                <h3 class="tile-cp-title">Content Creators & Influencers</h3>
                <p class="tile-cp-blurb">Brand deals, AdSense, gifts in kind (Sec 56), GST cross-link.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-property-sale" class="tile-cp">
                <div class="tile-cp-meta-row"><span>02.11</span><span class="tile-cp-form-tag">SEC 54</span></div>
                <h3 class="tile-cp-title">Property Sellers</h3>
                <p class="tile-cp-blurb">LTCG on property, indexation, Sec 54 / 54F / 54EC exemptions.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
        </div>
    </div>
</section>

<!-- ============ INDUSTRY ============ -->
<section class="sec-cp" id="sec-ind">
    <div class="container-cp">
        <div class="sec-head-cp">
            <div class="sec-head-left">
                <div class="sec-tag"><span class="tag-num">03</span>By Industry</div>
                <h2 class="sec-h2">Industry-specific ITR for SMEs.</h2>
                <p class="sec-sub">Inventory rules, GST integration and sector-specific deductions.</p>
            </div>
            <div class="sec-head-right"><span class="sec-counter">8 industries</span></div>
        </div>
        <div class="grid-cp is-4">
            <a href="/itr-for-textile-manufacturers" class="tile-cp">
                <div class="tile-cp-meta-row"><span>03.01</span><span class="tile-cp-form-tag">INV. DUTY</span></div>
                <h3 class="tile-cp-title">Textile & Garment</h3>
                <p class="tile-cp-blurb">Inventory valuation and inverted duty refund cross-link.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-it-service-firms" class="tile-cp">
                <div class="tile-cp-meta-row"><span>03.02</span><span class="tile-cp-form-tag">SCH FSI</span></div>
                <h3 class="tile-cp-title">IT & Software Services</h3>
                <p class="tile-cp-blurb">Export of services, FIRC, Schedule FSI, Section 44ADA option.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-pharma-businesses" class="tile-cp">
                <div class="tile-cp-meta-row"><span>03.03</span><span class="tile-cp-form-tag">35(2AB)</span></div>
                <h3 class="tile-cp-title">Pharmaceutical</h3>
                <p class="tile-cp-blurb">Inverted duty refund integration, R&D weighted deduction.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-restaurants" class="tile-cp">
                <div class="tile-cp-meta-row"><span>03.04</span><span class="tile-cp-form-tag">SEC 269ST</span></div>
                <h3 class="tile-cp-title">Restaurants & Cloud Kitchens</h3>
                <p class="tile-cp-blurb">Composition scheme cross-link, Section 269ST cash limits.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-ecommerce-sellers" class="tile-cp">
                <div class="tile-cp-meta-row"><span>03.05</span><span class="tile-cp-form-tag">TCS · GST</span></div>
                <h3 class="tile-cp-title">Ecommerce & D2C</h3>
                <p class="tile-cp-blurb">Multi-platform reconciliation, marketplace TCS, cross-state GST.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-real-estate-developers" class="tile-cp">
                <div class="tile-cp-meta-row"><span>03.06</span><span class="tile-cp-form-tag">80-IBA</span></div>
                <h3 class="tile-cp-title">Real Estate Developers</h3>
                <p class="tile-cp-blurb">Project completion method, WIP valuation, Section 80-IBA.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-trading-businesses" class="tile-cp">
                <div class="tile-cp-meta-row"><span>03.07</span><span class="tile-cp-form-tag">44AD</span></div>
                <h3 class="tile-cp-title">Wholesale & Retail Trading</h3>
                <p class="tile-cp-blurb">Section 44AD presumptive eligibility, Section 269ST limits.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/itr-for-construction-firms" class="tile-cp">
                <div class="tile-cp-meta-row"><span>03.08</span><span class="tile-cp-form-tag">194C</span></div>
                <h3 class="tile-cp-title">Construction Contractors</h3>
                <p class="tile-cp-blurb">Project completion accounting, Section 194C TDS handling.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
        </div>
    </div>
</section>

<!-- ============ INTER CTA #2 ============ -->
<div class="cta-strip-cp">
    <div class="cta-strip-cp-inner">
        <div class="cta-strip-text"><em>Industry-specific question?</em> <strong>Our SME-focused CAs respond in minutes.</strong></div>
        <div class="cta-strip-actions">
            <a href="tel:+919459456700" class="btn-strip is-orange">Call</a>
            <a href="https://wa.me/919459456700?text=Hi%2C%20I%27m%20enquiring%20from%20the%20ITR%20Services%20Hub%20at%20patronaccounting.com/income-tax-return.%20Please%20help%20me%20find%20the%20right%20ITR%20service." class="btn-strip is-wa" rel="noopener" target="_blank">WhatsApp</a>
            <a href="mailto:info@patronaccounting.com" class="btn-strip is-ghost">Email</a>
        </div>
    </div>
</div>

<!-- ============ CALCULATORS (NAVY) ============ -->
<section class="sec-cp is-navy" id="sec-tools">
    <div class="container-cp">
        <div class="sec-head-cp">
            <div class="sec-head-left">
                <div class="sec-tag"><span class="tag-num">04</span>Free Tools & Calculators</div>
                <h2 class="sec-h2">10 free calculators. No email, no signup.</h2>
                <p class="sec-sub">Built and reviewed by CAs. Use them before you talk to us.</p>
            </div>
            <div class="sec-head-right"><span class="sec-counter">10 tools · Free</span></div>
        </div>
        <div class="grid-cp is-5">
            <a href="/tools/old-vs-new-regime-calculator" class="tile-cp">
                <div class="tile-cp-meta-row"><span>04.01</span><span class="tile-cp-form-tag">FREE</span></div>
                <h3 class="tile-cp-title">Old vs New Regime</h3>
                <p class="tile-cp-blurb">Compare tax liability under both regimes side by side.</p>
                <div class="tile-cp-foot"><span>Calculator</span><span class="arrow">↗</span></div>
            </a>
            <a href="/tools/income-tax-calculator" class="tile-cp">
                <div class="tile-cp-meta-row"><span>04.02</span><span class="tile-cp-form-tag">FREE</span></div>
                <h3 class="tile-cp-title">Income Tax Calculator</h3>
                <p class="tile-cp-blurb">Slab-wise tax for FY 2025-26 with TDS, refund, advance tax.</p>
                <div class="tile-cp-foot"><span>FY 25-26</span><span class="arrow">↗</span></div>
            </a>
            <a href="/tools/hra-exemption-calculator" class="tile-cp">
                <div class="tile-cp-meta-row"><span>04.03</span><span class="tile-cp-form-tag">FREE</span></div>
                <h3 class="tile-cp-title">HRA Exemption</h3>
                <p class="tile-cp-blurb">Sec 10(13A) three-condition lowest, metro / non-metro splits.</p>
                <div class="tile-cp-foot"><span>10(13A)</span><span class="arrow">↗</span></div>
            </a>
            <a href="/tools/itr-form-selector" class="tile-cp">
                <div class="tile-cp-meta-row"><span>04.04</span><span class="tile-cp-form-tag">FREE</span></div>
                <h3 class="tile-cp-title">ITR Form Selector</h3>
                <p class="tile-cp-blurb">20-question decision tree for ITR-1 to ITR-7.</p>
                <div class="tile-cp-foot"><span>Selector</span><span class="arrow">↗</span></div>
            </a>
            <a href="/tools/capital-gains-calculator" class="tile-cp">
                <div class="tile-cp-meta-row"><span>04.05</span><span class="tile-cp-form-tag">FREE</span></div>
                <h3 class="tile-cp-title">Capital Gains</h3>
                <p class="tile-cp-blurb">STCG / LTCG with post-July-2024 rates, Sec 54 / 54F / 54EC.</p>
                <div class="tile-cp-foot"><span>STCG / LTCG</span><span class="arrow">↗</span></div>
            </a>
            <a href="/tools/section-87a-rebate-calculator" class="tile-cp">
                <div class="tile-cp-meta-row"><span>04.06</span><span class="tile-cp-form-tag">FREE</span></div>
                <h3 class="tile-cp-title">Section 87A Rebate</h3>
                <p class="tile-cp-blurb">Eligibility, both regimes, INR 60,000 (new) / INR 12,500 (old).</p>
                <div class="tile-cp-foot"><span>Sec 87A</span><span class="arrow">↗</span></div>
            </a>
            <a href="/tools/ais-reconciliation-tool" class="tile-cp">
                <div class="tile-cp-meta-row"><span>04.07</span><span class="tile-cp-form-tag">FREE</span></div>
                <h3 class="tile-cp-title">AIS Reconciliation</h3>
                <p class="tile-cp-blurb">AIS, Form 26AS, bank statement matching, mismatch flags.</p>
                <div class="tile-cp-foot"><span>AIS · 26AS</span><span class="arrow">↗</span></div>
            </a>
            <a href="/tools/advance-tax-calculator" class="tile-cp">
                <div class="tile-cp-meta-row"><span>04.08</span><span class="tile-cp-form-tag">FREE</span></div>
                <h3 class="tile-cp-title">Advance Tax</h3>
                <p class="tile-cp-blurb">Quarterly liability with Sec 234B / 234C interest computation.</p>
                <div class="tile-cp-foot"><span>234B · 234C</span><span class="arrow">↗</span></div>
            </a>
            <a href="/tools/esop-tax-calculator" class="tile-cp">
                <div class="tile-cp-meta-row"><span>04.09</span><span class="tile-cp-form-tag">FREE</span></div>
                <h3 class="tile-cp-title">ESOP Tax</h3>
                <p class="tile-cp-blurb">Perquisite at exercise + STCG / LTCG at sale, India / foreign.</p>
                <div class="tile-cp-foot"><span>Perq + CG</span><span class="arrow">↗</span></div>
            </a>
            <a href="/tools/section-44ada-calculator" class="tile-cp">
                <div class="tile-cp-meta-row"><span>04.10</span><span class="tile-cp-form-tag">FREE</span></div>
                <h3 class="tile-cp-title">Section 44ADA</h3>
                <p class="tile-cp-blurb">Presumptive eligibility (INR 50L), presumptive vs books compare.</p>
                <div class="tile-cp-foot"><span>44ADA</span><span class="arrow">↗</span></div>
            </a>
        </div>
    </div>
</section>

<!-- ============ CITIES ============ -->
<section class="sec-cp" id="sec-cities">
    <div class="container-cp">
        <div class="sec-head-cp">
            <div class="sec-head-left">
                <div class="sec-tag"><span class="tag-num">05</span>By City</div>
                <h2 class="sec-h2">ITR filing in your city.</h2>
                <p class="sec-sub">On-ground offices in 4 cities, virtual service across 4 major metros, pan-India coverage.</p>
            </div>
            <div class="sec-head-right"><span class="sec-counter">8 cities</span></div>
        </div>
        <div class="grid-cp is-4">
            <a href="/income-tax-return/pune" class="tile-cp is-city">
                <h3 class="tile-cp-title">Pune</h3>
                <p class="tile-cp-blurb">Maharashtra · HQ Office</p>
            </a>
            <a href="/income-tax-return/mumbai" class="tile-cp is-city">
                <h3 class="tile-cp-title">Mumbai</h3>
                <p class="tile-cp-blurb">Maharashtra · Office</p>
            </a>
            <a href="/income-tax-return/delhi" class="tile-cp is-city">
                <h3 class="tile-cp-title">Delhi</h3>
                <p class="tile-cp-blurb">NCR · Office</p>
            </a>
            {{-- Gurugram: city page pending; fallback to national hub. Change href to /income-tax-return/gurugram once that page is built. --}}
            <a href="/income-tax-return" class="tile-cp is-city">
                <h3 class="tile-cp-title">Gurugram</h3>
                <p class="tile-cp-blurb">Haryana · Office</p>
            </a>
            <a href="/income-tax-return/bangalore" class="tile-cp is-city" title="ITR filing services in Bangalore Bengaluru Karnataka">
                <h3 class="tile-cp-title">Bangalore</h3>
                <p class="tile-cp-blurb">Karnataka · Virtual</p>
            </a>
            <a href="/income-tax-return/hyderabad" class="tile-cp is-city">
                <h3 class="tile-cp-title">Hyderabad</h3>
                <p class="tile-cp-blurb">Telangana · Virtual</p>
            </a>
            <a href="/income-tax-return/chennai" class="tile-cp is-city">
                <h3 class="tile-cp-title">Chennai</h3>
                <p class="tile-cp-blurb">Tamil Nadu · Virtual</p>
            </a>
            <a href="/income-tax-return/kolkata" class="tile-cp is-city">
                <h3 class="tile-cp-title">Kolkata</h3>
                <p class="tile-cp-blurb">West Bengal · Virtual</p>
            </a>
        </div>
    </div>
</section>

<!-- ============ ADJACENT ============ -->
<section class="sec-cp is-soft" id="sec-adj">
    <div class="container-cp">
        <div class="sec-head-cp">
            <div class="sec-head-left">
                <div class="sec-tag"><span class="tag-num">06</span>Adjacent Services</div>
                <h2 class="sec-h2">ITR is rarely the only thing on your plate.</h2>
                <p class="sec-sub">Related compliance services Patron handles for the same client — one team, one invoice.</p>
            </div>
            <div class="sec-head-right"><span class="sec-counter">6 services</span></div>
        </div>
        <div class="grid-cp">
            <a href="/income-tax-notice" class="tile-cp">
                <div class="tile-cp-meta-row"><span>06.01</span><span class="tile-cp-form-tag">142(1) · 148</span></div>
                <h3 class="tile-cp-title">Income Tax Notices</h3>
                <p class="tile-cp-blurb">Sec 142(1) / 143(3) / 147 / 148 response and demand notices.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/tax-audit" class="tile-cp">
                <div class="tile-cp-meta-row"><span>06.02</span><span class="tile-cp-form-tag">SEC 44AB</span></div>
                <h3 class="tile-cp-title">Tax Audit</h3>
                <p class="tile-cp-blurb">Section 44AB tax audit incl. Form 3CD and Form 3CB / 3CA.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/tax-planning-services" class="tile-cp">
                <div class="tile-cp-meta-row"><span>06.03</span><span class="tile-cp-form-tag">STRATEGY</span></div>
                <h3 class="tile-cp-title">Tax Planning</h3>
                <p class="tile-cp-blurb">Forward-looking tax strategy for individuals, HNIs and businesses.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/gst-returns" class="tile-cp">
                <div class="tile-cp-meta-row"><span>06.04</span><span class="tile-cp-form-tag">3B · 9C</span></div>
                <h3 class="tile-cp-title">GST Returns</h3>
                <p class="tile-cp-blurb">Monthly GSTR-1 / GSTR-3B and annual GSTR-9 / GSTR-9C filing.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/private-limited-company-compliance" class="tile-cp">
                <div class="tile-cp-meta-row"><span>06.05</span><span class="tile-cp-form-tag">AOC-4 · MGT-7</span></div>
                <h3 class="tile-cp-title">ROC Compliance</h3>
                <p class="tile-cp-blurb">Annual Pvt Ltd compliance, AOC-4, MGT-7, director KYC.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
            <a href="/accounting-services" class="tile-cp">
                <div class="tile-cp-meta-row"><span>06.06</span><span class="tile-cp-form-tag">TALLY · ZOHO</span></div>
                <h3 class="tile-cp-title">Accounting & Bookkeeping</h3>
                <p class="tile-cp-blurb">CA-led monthly bookkeeping across Tally, Zoho Books, QuickBooks.</p>
                <div class="tile-cp-foot"><span>Quoted</span><span class="arrow">↗</span></div>
            </a>
        </div>
    </div>
</section>

<!-- ============ FAQ ============ -->
<section class="sec-cp" id="sec-faq">
    <div class="container-cp">
        <div class="faq-expanded">
            <aside class="faq-expanded__aside">
                <h2 class="faq-expanded__title">Quick questions, answered.</h2>
                <p class="faq-expanded__lead">Five high-level questions about Patron's ITR services.</p>
                @include('partials.faq-enquiry-form', ['enquiryService' => 'Services'])
            </aside>
            <div class="faq-expanded__list">
                <div class="faq-expanded__item" id="faq-1">
                    <h3 class="faq-expanded__q">What ITR forms does Patron handle?</h3>
                    <div class="faq-expanded__a"><p>We handle all ITR forms from ITR-1 (salaried individuals) to ITR-7 (trusts and institutions). This includes specialized filings like NRI Schedule FA, F&O business income, ESOP perquisite tax, capital gains across asset classes, and business ITR with presumptive income options (Section 44AD, 44ADA). Every return is prepared by a Chartered Accountant.</p></div>
                </div>
                <div class="faq-expanded__item" id="faq-2">
                    <h3 class="faq-expanded__q">How much does Patron charge for ITR filing?</h3>
                    <div class="faq-expanded__a"><p>Plans start at INR 999 for salary ITR (ITR-1 / ITR-2), INR 2,499 for professionals (ITR-3 / ITR-4), and INR 3,499 for private limited companies (ITR-6). Specialised filings — NRI, capital gains, ESOP, F&O — are quoted by complexity. All fees exclusive of GST and government charges.</p></div>
                </div>
                <div class="faq-expanded__item" id="faq-3">
                    <h3 class="faq-expanded__q">Do you serve clients outside Pune, Mumbai, Delhi, Gurugram?</h3>
                    <div class="faq-expanded__a"><p>Yes. On-ground offices in 4 cities. ITR services are delivered virtually across India — we have filed for clients in 50+ cities. Cloud-based document collection and e-verification mean location does not matter for service quality.</p></div>
                </div>
                <div class="faq-expanded__item" id="faq-4">
                    <h3 class="faq-expanded__q">How is Patron different from DIY tools?</h3>
                    <div class="faq-expanded__a"><p>Patron is a CA-led service, not a self-serve product. Every return is prepared and reviewed by a Chartered Accountant before filing. We handle complex scenarios DIY tools struggle with — multi-asset capital gains, ESOP perquisite + sale, F&O business income, NRI Schedule FA, Form 67 FTC, AIS mismatch resolution, and post-filing notice handling.</p></div>
                </div>
                <div class="faq-expanded__item" id="faq-5">
                    <h3 class="faq-expanded__q">Is the ITR filing due date always 31 July?</h3>
                    <div class="faq-expanded__a"><p>No. 31 July applies only to salaried and non-audit individual taxpayers (ITR-1 / ITR-2). For FY 2025-26 this is 31 July 2026. Other categories: 31 August for non-audit business / professionals (FY 2025-26 onwards), 31 October for tax audit cases and companies, 30 November for international transactions. Belated returns until 31 December with Sec 234F late fee. Always verify the current notification on incometax.gov.in.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ FOOTER STRIP ============ -->
<section class="footer-strip-cp">
    <div class="container-cp">
        <p>This page is reviewed quarterly or whenever a major change occurs in income tax law or ITR forms. <strong>Reviewed by CA & CS Team, Patron Accounting LLP.</strong> Last updated: <span class="hub-last-updated"></span></p>
    </div>
</section>

</main>

<script>
(function() {
    var dt = new Date().toLocaleDateString('en-IN', { day: 'numeric', month: 'long', year: 'numeric' });
    var heroEl = document.getElementById('lastUpdated');
    if (heroEl) heroEl.textContent = dt;
    var footerEls = document.getElementsByClassName('hub-last-updated');
    for (var i = 0; i < footerEls.length; i++) footerEls[i].textContent = dt;
})();



// Form validation and submission
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form[action*="submit-itr-enquiry"]');
    const submitBtn = document.getElementById('submitBtn');
    
    if (form && submitBtn) {
        form.addEventListener('submit', function(e) {
            // Disable button to prevent double submission
            submitBtn.disabled = true;
            submitBtn.textContent = 'Submitting...';
            
            // Re-enable after 3 seconds in case of error
            setTimeout(function() {
                if (submitBtn.disabled) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Find My ITR Service →';
                }
            }, 3000);
        });
        
        // Phone number validation
        const phoneInput = document.getElementById('phone');
        if (phoneInput) {
            phoneInput.addEventListener('input', function(e) {
                // Remove non-numeric characters
                let value = e.target.value.replace(/\D/g, '');
                
                // Limit to 15 digits (international standard)
                if (value.length > 15) {
                    value = value.slice(0, 15);
                }
                
                e.target.value = value;
                
                // Basic international phone validation (7-15 digits)
                const isValid = /^[0-9]{7,15}$/.test(value);
                if (value.length > 0 && !isValid) {
                    e.target.setCustomValidity('Please enter a valid phone number (7-15 digits)');
                } else {
                    e.target.setCustomValidity('');
                }
            });
        }
    }
});
</script>

</body>
</html>
@endsection
