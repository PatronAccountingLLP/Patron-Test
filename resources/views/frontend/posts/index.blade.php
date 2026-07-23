@extends('layouts.app-blog')
@section(
    'title',
    (request('category')
        ? ucfirst(str_replace('-', ' ', request('category'))) . ' Articles & Guides'
        : 'Articles & Guides')
    . (request('page', 1) > 1 ? ' - Blog Page ' . request('page') : '')
    . ' | Patron Accounting'
)

@section(
    'meta_description',
    request('category')
        ? 'Explore practical ' . ucfirst(str_replace('-', ' ', request('category'))) . ' articles, guides, compliance updates, filing tips, and expert insights from Patron Accounting.'
            . (request('page', 1) > 1 ? ' Browse page ' . request('page') . ' for more articles and resources.' : '')
        : 'Practical compliance guides on GST, Income Tax, ROC, Payroll & Trademark — written by practising CAs. Updated weekly.'
            . (request('page', 1) > 1 ? ' Browse page ' . request('page') . ' for more articles and resources.' : '')
)


{{-- ============ JSON-LD SCHEMA ============ --}}
@push('meta-content')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "@id": "{{ url('/') }}#website",
  "url": "{{ url('/') }}",
  "name": "Patron Accounting",
  "description": "Practical compliance guides and CA services for Indian businesses. GST, Income Tax, Company Registration, and more.",
  "publisher": { "@id": "{{ url('/') }}#organization" },
  "potentialAction": {
    "@type": "SearchAction",
    "target": {
      "@type": "EntryPoint",
      "urlTemplate": "{{ url('/blog') }}?search={search_term_string}"
    },
    "query-input": "required name=search_term_string"
  },
  "inLanguage": "en-IN"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "@id": "{{ url('/') }}#organization",
  "name": "Patron Accounting",
  "alternateName": "Patron Accounting LLP",
  "url": "{{ url('/') }}",
  "logo": {
    "@type": "ImageObject",
    "@id": "{{ url('/') }}#logo",
    "url": "{{ asset('images/logo.png') }}",
    "caption": "Patron Accounting"
  },
  "image": { "@id": "{{ url('/') }}#logo" },
  "description": "Chartered accountancy practice serving Indian businesses with GST, Income Tax, Company Registration, and compliance services.",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91-945-945-6700",
    "contactType": "customer service",
    "areaServed": "IN",
    "availableLanguage": ["en", "hi"]
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ route('frontend.index') }}" },
    { "@type": "ListItem", "position": 2, "name": "Blog", "item": "{{ route('frontend.posts.index') }}" }
  ]
}
</script>
@endpush

@push('styles')
<style>
  /* ============ DESIGN TOKENS ============ */
  .patron-blog {
    --p-navy: #15365F;
    --p-navy-hover: #0E2546;
    --p-orange: #F26522;
    --p-orange-hover: #D9551B;
    --p-charcoal: #414042;
    --p-whatsapp: #25D366;
    --p-whatsapp-hover: #1EBE5A;
    --p-bg-page: #F7F8FA;
    --p-bg-surface: #FFFFFF;
    --p-bg-alt: #F1F5F9;
    --p-border: #E5E7EB;
    --p-border-strong: #CBD5E1;
    --p-text-muted: #6B7280;
    --p-amber-bg: #FFEDD5;
    --p-amber-text: #9A3412;
    --p-radius-sm: 6px;
    --p-radius-md: 8px;
    --p-radius-lg: 12px;
    --p-radius-pill: 999px;
    --p-t-fast: 120ms ease;
    --p-t-base: 200ms ease;

    background: var(--p-bg-page);
    color: var(--p-charcoal);
    font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
    line-height: 1.6;
    overflow-x: hidden;
  }
  .patron-blog *, .patron-blog *::before, .patron-blog *::after { box-sizing: border-box; }
  .patron-blog a { color: var(--p-navy); text-decoration: none; }
  .patron-blog a:hover { color: var(--p-navy-hover); }
  .patron-blog button { font: inherit; cursor: pointer; }

  /* ============ BREADCRUMB ============ */
  .patron-blog .pb-breadcrumb {
    padding: 20px 0 8px;
    font-size: 13px;
    color: var(--p-text-muted);
  }
  .patron-blog .pb-breadcrumb a { color: var(--p-text-muted); }
  .patron-blog .pb-breadcrumb a:hover { color: var(--p-navy); }
  .patron-blog .pb-breadcrumb-sep { margin: 0 8px; color: var(--p-border-strong); }
  .patron-blog .pb-breadcrumb [aria-current] { color: var(--p-charcoal); font-weight: 500; }

  /* ============ HERO ============ */
  .patron-blog .pb-hero {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 24px;
    padding: 16px 0 32px;
  }
  .patron-blog .pb-hero-left {
    background: var(--p-bg-surface);
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-lg);
    padding: 28px;
    min-width: 0;
  }
  .patron-blog .pb-hero h1 {
    margin: 0 0 8px;
    font-family: 'Barlow', sans-serif;
    font-size: 36px;
    font-weight: 700;
    color: var(--p-navy);
    line-height: 1.15;
    letter-spacing: -0.02em;
    overflow-wrap: break-word;
    word-break: break-word;
  }

  /* Author stat row */
  .patron-blog .pb-hero-stat {
    display: flex;
    align-items: center;
    gap: 12px;
    margin: 14px 0 16px;
  }
  .patron-blog .pb-hero-stat-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    flex-shrink: 0;
    border: 2px solid var(--p-bg-surface);
    box-shadow: 0 0 0 1px var(--p-border);
  }
  .patron-blog .pb-hero-stat-text { display: flex; flex-direction: column; gap: 2px; }
  .patron-blog .pb-hero-stat-name { font-size: 14px; font-weight: 500; color: var(--p-navy); line-height: 1.3; }
  .patron-blog .pb-hero-stat-meta { font-size: 12px; color: var(--p-text-muted); line-height: 1.3; }

  /* Trust badge pills */
  .patron-blog .pb-trust-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    margin: 0 0 18px;
  }
  .patron-blog .pb-trust-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 5px 11px;
    background: rgba(21, 54, 95, 0.04);
    border: 1px solid rgba(21, 54, 95, 0.12);
    border-radius: 999px;
    font-size: 12px;
    font-weight: 500;
    color: var(--p-navy);
    line-height: 1;
  }
  .patron-blog .pb-trust-badge svg {
    width: 12px; height: 12px;
    color: var(--p-orange);
    flex-shrink: 0;
  }

  /* Trending search chips */
  .patron-blog .pb-trending-chips {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 8px;
    margin: -8px 0 22px;
  }
  .patron-blog .pb-trending-chips-label {
    font-size: 12px;
    font-weight: 500;
    color: var(--p-text-muted);
    flex-shrink: 0;
  }
  .patron-blog .pb-trending-chip {
    display: inline-flex;
    align-items: center;
    padding: 5px 12px;
    background: var(--p-bg-surface);
    border: 1px solid var(--p-border);
    border-radius: 999px;
    font-size: 12px;
    color: var(--p-charcoal);
    cursor: pointer;
    font-family: inherit;
    transition: background var(--p-t-fast), border-color var(--p-t-fast), color var(--p-t-fast);
  }
  .patron-blog .pb-trending-chip:hover {
    background: var(--p-bg-alt);
    border-color: var(--p-navy);
    color: var(--p-navy);
  }

  /* Search */
  .patron-blog .pb-search-wrap {
    position: relative;
    margin-bottom: 20px;
    max-width: 100%;
  }
  .patron-blog .pb-search-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--p-text-muted);
    pointer-events: none;
    width: 20px;
    height: 20px;
  }
  .patron-blog .pb-search-input {
    width: 100%;
    max-width: 100%;
    box-sizing: border-box;
    padding: 14px 70px 14px 44px;
    border: 1px solid var(--p-navy);
    border-radius: var(--p-radius-md);
    font-family: inherit;
    font-size: 16px;
    color: var(--p-charcoal);
    background: var(--p-bg-surface);
    transition: box-shadow var(--p-t-base);
  }
  .patron-blog .pb-search-input:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(21, 54, 95, 0.15);
  }
  .patron-blog .pb-search-kbd {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    background: var(--p-bg-alt);
    border: 1px solid var(--p-border);
    border-radius: 4px;
    padding: 3px 6px;
    font-size: 11px;
    font-weight: 500;
    color: var(--p-text-muted);
    pointer-events: none;
    line-height: 1;
  }

  /* Search suggestions (preserved from existing implementation) */
  .patron-blog .posts-search-suggestions {
    position: absolute;
    top: calc(100% + 4px);
    left: 0;
    right: 0;
    background: white;
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-md);
    max-height: 400px;
    overflow-y: auto;
    display: none;
    z-index: 1000;
    box-shadow: 0 8px 24px rgba(11, 46, 79, 0.08);
  }
  .patron-blog .posts-search-suggestions.show { display: block; }
  .patron-blog .posts-suggestion-item {
    padding: 12px 16px;
    cursor: pointer;
    border-bottom: 1px solid var(--p-border);
    text-decoration: none;
    color: inherit;
    display: block;
    transition: background var(--p-t-fast);
  }
  .patron-blog .posts-suggestion-item:last-child { border-bottom: none; }
  .patron-blog .posts-suggestion-item:hover { background: var(--p-bg-alt); }
  .patron-blog .posts-suggestion-title {
    font-weight: 600;
    color: var(--p-navy);
    font-size: 14px;
    margin-bottom: 4px;
  }
  .patron-blog .posts-suggestion-excerpt { font-size: 12px; color: var(--p-text-muted); line-height: 1.4; }
  .patron-blog .posts-no-results { padding: 20px; text-align: center; color: var(--p-text-muted); font-size: 14px; }
  .patron-blog .posts-search-spinner { position: absolute; right: 50px; top: 50%; transform: translateY(-50%); z-index: 10; }

  /* Seasonal picks */
  .patron-blog .pb-picks {
    margin-top: 0;
    padding-top: 18px;
    border-top: 1px solid var(--p-border);
  }
  .patron-blog .pb-picks-eyebrow {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 0 0 14px;
    font-size: 11px;
    font-weight: 600;
    color: var(--p-orange);
    text-transform: uppercase;
    letter-spacing: 0.08em;
  }
  .patron-blog .pb-picks-dot { display: inline-block; width: 6px; height: 6px; background: var(--p-orange); border-radius: 50%; }
  .patron-blog .pb-pick {
    display: grid;
    grid-template-columns: 32px 1fr;
    gap: 14px;
    padding: 11px 18px 11px 0;
    border-top: 1px solid var(--p-border);
    text-decoration: none;
    color: inherit;
    position: relative;
  }
  .patron-blog .pb-pick:first-child { border-top: none; padding-top: 2px; }
  .patron-blog .pb-pick:hover .pb-pick-title { color: var(--p-orange); }
  .patron-blog .pb-pick:hover .pb-pick-arrow { opacity: 1; transform: translateY(-50%) translateX(0); }
  .patron-blog .pb-pick-arrow {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%) translateX(-6px);
    color: var(--p-orange);
    opacity: 0;
    width: 16px;
    height: 16px;
    transition: opacity var(--p-t-fast), transform var(--p-t-fast);
  }
  .patron-blog .pb-pick-num {
    font-family: 'Barlow', sans-serif;
    font-size: 22px;
    font-weight: 700;
    color: var(--p-orange);
    line-height: 1;
    letter-spacing: -0.02em;
  }
  .patron-blog .pb-pick-content { display: flex; flex-direction: column; gap: 3px; min-width: 0; }
  .patron-blog .pb-pick-cat {
    font-size: 10px;
    font-weight: 600;
    color: var(--p-orange);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    line-height: 1;
  }
  .patron-blog .pb-pick-title {
    font-size: 14px;
    font-weight: 600;
    color: var(--p-navy);
    line-height: 1.35;
    transition: color var(--p-t-fast);
    overflow-wrap: break-word;
    word-break: break-word;
    hyphens: auto;
  }
  .patron-blog .pb-pick-preview {
    font-size: 12px;
    color: var(--p-charcoal);
    line-height: 1.4;
    opacity: 0.85;
    overflow-wrap: break-word;
    word-break: break-word;
  }
  .patron-blog .pb-pick-meta { font-size: 11px; color: var(--p-text-muted); margin-top: 2px; }

  /* Spotlight (right of hero) */
  .patron-blog .pb-spotlight {
    background: var(--p-navy);
    border: 1px solid var(--p-navy);
    border-radius: var(--p-radius-lg);
    padding: 28px;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
    transition: transform var(--p-t-base), box-shadow var(--p-t-base);
  }
  .patron-blog .pb-spotlight::before {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: var(--p-orange);
    border-radius: var(--p-radius-lg) var(--p-radius-lg) 0 0;
  }
  .patron-blog .pb-spotlight:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 36px rgba(11, 46, 79, 0.22);
  }
  .patron-blog .pb-spotlight-eyebrow {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 0 0 12px;
    font-size: 11px;
    font-weight: 600;
    color: var(--p-orange);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    position: relative;
  }
  .patron-blog .pb-spotlight-dot { display: inline-block; width: 6px; height: 6px; background: var(--p-orange); border-radius: 50%; }
  .patron-blog .pb-spotlight-title {
    margin: 0 0 8px;
    font-family: 'Barlow', sans-serif;
    font-size: 24px;
    font-weight: 700;
    color: #fff;
    line-height: 1.25;
    letter-spacing: -0.015em;
    position: relative;
  }
  .patron-blog .pb-spotlight-meta {
    margin: 0 0 18px;
    font-size: 12px;
    color: rgba(255, 255, 255, 0.65);
    display: flex;
    align-items: center;
    gap: 8px;
    position: relative;
  }
  .patron-blog .pb-spotlight-meta-divider { color: rgba(255, 255, 255, 0.3); }
  .patron-blog .pb-spotlight-lede {
    margin: 0 0 22px;
    font-size: 15px;
    line-height: 1.5;
    color: rgba(255, 255, 255, 0.9);
    flex: 1;
    position: relative;
  }
  .patron-blog .pb-spotlight-cta {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    align-self: flex-start;
    padding: 11px 22px;
    background: var(--p-orange);
    color: #fff;
    border-radius: 999px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    border: 1px solid var(--p-orange);
    transition: background var(--p-t-fast), border-color var(--p-t-fast), gap var(--p-t-fast);
    position: relative;
  }
  .patron-blog .pb-spotlight-cta-arrow { transition: transform var(--p-t-fast); }
  .patron-blog .pb-spotlight-cta:hover {
    background: var(--p-orange-hover);
    border-color: var(--p-orange-hover);
    color: #fff;
    gap: 10px;
  }
  .patron-blog .pb-spotlight-cta:hover .pb-spotlight-cta-arrow { transform: translateX(2px); }

  /* ============ HERO RIGHT COLUMN (wraps spotlight + latest card) ============ */
  .patron-blog .pb-hero-right {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  /* ============ HERO LATEST CARD ============ */
  .patron-blog .pb-hero-latest {
    background: var(--p-bg-surface);
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-lg);
    padding: 22px 24px;
  }
  .patron-blog .pb-hero-latest-heading {
    margin: 0 0 16px;
    font-family: 'DM Sans', sans-serif;
    font-size: 11px;
    font-weight: 600;
    color: var(--p-navy);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .patron-blog .pb-hero-latest-heading::before {
    content: "";
    display: inline-block;
    width: 6px;
    height: 6px;
    background: var(--p-orange);
    border-radius: 50%;
    flex-shrink: 0;
  }
  .patron-blog .pb-hero-latest-list { list-style: none; margin: 0; padding: 0; }
  .patron-blog .pb-hero-latest-item {
    border-top: 1px solid var(--p-border);
    padding: 12px 0;
  }
  .patron-blog .pb-hero-latest-item:first-child { border-top: none; padding-top: 0; }
  .patron-blog .pb-hero-latest-item:last-child { padding-bottom: 0; }
  .patron-blog .pb-hero-latest-item a { display: block; color: inherit; text-decoration: none; }
  .patron-blog .pb-hero-latest-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 5px;
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 0.06em;
  }
  .patron-blog .pb-hero-latest-cat { color: var(--p-orange); font-weight: 600; }
  .patron-blog .pb-hero-latest-date { color: var(--p-text-muted); font-weight: 500; letter-spacing: 0.04em; }
  .patron-blog .pb-hero-latest-title {
    margin: 0;
    font-family: 'Barlow', sans-serif;
    font-size: 14px;
    font-weight: 600;
    color: var(--p-navy);
    line-height: 1.4;
    transition: color var(--p-t-fast);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  .patron-blog .pb-hero-latest-item a:hover .pb-hero-latest-title { color: var(--p-orange); }

  /* Trust strip */
  /* .patron-blog .pb-trust {
    background: var(--p-navy);
    color: #fff;
    border-radius: var(--p-radius-md);
    padding: 14px 24px;
    text-align: center;
    font-size: 13px;
    margin-bottom: 16px;
    line-height: 1.4;
  }
  .patron-blog .pb-trust strong { font-weight: 600; }
  .patron-blog .pb-trust-divider { margin: 0 16px; opacity: 0.4; } */
  .patron-blog .pb-trust {
  background: var(--p-navy);
  color: #fff;
  border-radius: var(--p-radius-md);
  padding: 14px 24px;
  text-align: center;
  font-size: 13px;
  margin-bottom: 16px;
  line-height: 1.4;

  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
}

.patron-blog .pb-trust strong {
  font-weight: 600;
}

.patron-blog .pb-trust-divider {
  opacity: 0.4;
}

  /* Seasonal deadlines (amber) */
  .patron-blog .pb-deadlines {
    display: flex;
    align-items: center;
    gap: 12px;
    background: var(--p-amber-bg);
    border-left: 3px solid var(--p-orange);
    border-radius: var(--p-radius-md);
    padding: 12px 20px;
    margin-bottom: 24px;
    font-size: 13px;
    color: var(--p-amber-text);
  }
  .patron-blog .pb-deadlines svg { flex-shrink: 0; width: 18px; height: 18px; }
  .patron-blog .pb-deadlines p { margin: 0; flex: 1; }
  .patron-blog .pb-deadlines strong { font-weight: 600; margin-right: 8px; }
  .patron-blog .pb-deadlines a { color: var(--p-amber-text); text-decoration: underline; text-underline-offset: 2px; }
  .patron-blog .pb-deadlines a:hover { color: var(--p-orange); }
  .patron-blog .pb-deadlines-divider { margin: 0 8px; opacity: 0.5; }
  .patron-blog .pb-deadlines-cta { font-weight: 500; text-decoration: none !important; }

  /* Category chips */
  .patron-blog .pb-chips {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    margin-bottom: 28px;
  }
  .patron-blog .pb-chip {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 7px 16px;
    border-radius: var(--p-radius-pill);
    background: var(--p-bg-surface);
    border: 1px solid var(--p-navy);
    color: var(--p-navy);
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    transition: background var(--p-t-fast), color var(--p-t-fast);
    white-space: nowrap;
  }
  .patron-blog .pb-chip:hover { background: rgba(21, 54, 95, 0.05); color: var(--p-navy); }
  .patron-blog .pb-chip.is-active {
    background: var(--p-navy);
    color: #fff;
  }
  .patron-blog .pb-chip-clear {
    background: transparent;
    border: 1px solid transparent;
    color: var(--p-charcoal);
    padding-left: 6px;
    padding-right: 12px;
  }
  .patron-blog .pb-chip-clear::before { content: "×"; margin-right: 4px; font-size: 16px; line-height: 1; }
  .patron-blog .pb-chip-clear:hover { background: var(--p-bg-alt); color: var(--p-navy); }

  .patron-blog .pb-all-categories {
    display: none;
    background: var(--p-bg-surface);
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-lg);
    padding: 20px 24px;
    margin: -16px 0 28px;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px 24px;
  }
  .patron-blog .pb-all-categories.is-open { display: grid; }
  .patron-blog .pb-all-categories a {
    color: var(--p-charcoal);
    font-size: 13px;
    padding: 4px 0;
    display: flex;
    justify-content: space-between;
  }
  .patron-blog .pb-all-categories a:hover { color: var(--p-navy); }
  .patron-blog .pb-all-categories .count { color: var(--p-text-muted); }

  /* Layout: articles + sticky sidebar */
  .patron-blog .pb-layout {
    display: grid;
    grid-template-columns: 1fr 340px;
    gap: 32px;
    margin-bottom: 48px;
  }
  .patron-blog .pb-layout-sidebar { display: flex; flex-direction: column; gap: 20px; }
  .patron-blog .pb-layout-sidebar > * { position: sticky; top: 24px; }

  /* Article grid */
  .patron-blog .pb-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }
  .patron-blog .pb-grid + .pb-grid { margin-top: 24px; }

  /* Article card */
  .patron-blog .pb-card {
    background: var(--p-bg-surface);
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-lg);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform var(--p-t-base), box-shadow var(--p-t-base), border-color var(--p-t-base);
  }
  .patron-blog .pb-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(11, 46, 79, 0.06);
    border-color: var(--p-border-strong);
  }
  .patron-blog .pb-card a { color: inherit; display: block; }
  .patron-blog .pb-card-image {
    width: 100%;
    aspect-ratio: 16 / 9;
    object-fit: cover;
    background: var(--p-bg-alt);
  }
  .patron-blog .pb-card-image-placeholder {
    width: 100%; aspect-ratio: 16 / 9;
    background: var(--p-bg-alt);
    display: flex; align-items: center; justify-content: center;
    color: var(--p-text-muted);
  }
  .patron-blog .pb-card-body { padding: 16px; flex: 1; display: flex; flex-direction: column; }
  .patron-blog .pb-card-meta {
    display: flex; align-items: center; gap: 8px;
    margin-bottom: 10px;
    font-size: 12px;
    color: var(--p-text-muted);
  }
  .patron-blog .pb-badge-navy {
    display: inline-block;
    padding: 3px 10px;
    border-radius: var(--p-radius-sm);
    background: var(--p-navy);
    color: #fff;
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 0.02em;
  }
  .patron-blog .pb-meta-divider { color: var(--p-border-strong); }
  .patron-blog .pb-card-title {
    margin: 0 0 12px;
    font-family: 'Barlow', sans-serif;
    font-size: 18px;
    font-weight: 600;
    color: var(--p-navy);
    line-height: 1.35;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    overflow-wrap: break-word;
    word-break: break-word;
  }
  .patron-blog .pb-card-excerpt {
    margin: 0 0 16px;
    font-size: 13px;
    color: var(--p-charcoal);
    line-height: 1.5;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  .patron-blog .pb-card-author {
    margin-top: auto;
    display: flex; align-items: center; gap: 10px;
    font-size: 12px;
    color: var(--p-text-muted);
    padding-top: 12px;
    border-top: 1px solid var(--p-border);
  }
  .patron-blog .pb-card-author img {
    width: 24px; height: 24px;
    border-radius: 50%;
    object-fit: cover;
  }
  .patron-blog .pb-ca-badge {
    display: inline-block;
    background: var(--p-navy);
    color: #fff;
    font-size: 9px;
    font-weight: 600;
    padding: 1px 5px;
    border-radius: 3px;
    letter-spacing: 0.04em;
    margin-right: 4px;
  }

  /* Sidebar cards */
  .patron-blog .pb-contact-card {
    background: var(--p-navy);
    color: #fff;
    border-radius: var(--p-radius-lg);
    padding: 24px;
  }
  .patron-blog .pb-contact-card h3 { margin: 0 0 6px; font-family: 'Barlow', sans-serif; font-size: 18px; font-weight: 600; color: #fff; }
  .patron-blog .pb-contact-card > p { margin: 0 0 18px; font-size: 13px; color: rgba(255,255,255,0.78); }
  .patron-blog .pb-contact-buttons { display: flex; flex-direction: column; gap: 10px; }

  .patron-blog .pb-lead-magnet {
    background: var(--p-bg-surface);
    border: 1px solid var(--p-border);
    border-top: 3px solid var(--p-orange);
    border-radius: var(--p-radius-lg);
    padding: 24px;
  }
  .patron-blog .pb-lead-magnet .pb-label {
    font-size: 11px;
    font-weight: 600;
    color: var(--p-navy);
    text-transform: uppercase;
    letter-spacing: 0.06em;
    margin: 0 0 6px;
  }
  .patron-blog .pb-lead-magnet h3 { margin: 0 0 4px; font-family: 'Barlow', sans-serif; font-size: 18px; font-weight: 600; color: var(--p-navy); }
  .patron-blog .pb-lead-magnet .pb-desc { margin: 0 0 16px; font-size: 13px; color: var(--p-text-muted); }

  /* Sidebar trending card (driven by trending_badge field) */
  .patron-blog .pb-trending-card {
    background: var(--p-bg-surface);
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-lg);
    padding: 22px 24px;
  }
  .patron-blog .pb-trending-card-heading {
    margin: 0 0 16px;
    font-family: 'DM Sans', sans-serif;
    font-size: 11px;
    font-weight: 600;
    color: var(--p-navy);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .patron-blog .pb-trending-card-heading::before {
    content: "";
    display: inline-block;
    width: 6px;
    height: 6px;
    background: var(--p-orange);
    border-radius: 50%;
    flex-shrink: 0;
  }
  .patron-blog .pb-trending-card-list { list-style: none; margin: 0; padding: 0; }
  .patron-blog .pb-trending-card-item {
    border-top: 1px solid var(--p-border);
    padding: 12px 0;
  }
  .patron-blog .pb-trending-card-item:first-child { border-top: none; padding-top: 0; }
  .patron-blog .pb-trending-card-item:last-child { padding-bottom: 0; }
  .patron-blog .pb-trending-card-item a { display: block; color: inherit; text-decoration: none; }
  .patron-blog .pb-trending-card-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 5px;
    gap: 8px;
  }
  .patron-blog .pb-trending-card-cat {
    font-size: 10px;
    font-weight: 600;
    color: var(--p-orange);
    text-transform: uppercase;
    letter-spacing: 0.06em;
  }
  .patron-blog .pb-trending-card-badge {
    display: inline-block;
    padding: 2px 8px;
    background: rgba(242, 101, 34, 0.10);
    color: var(--p-orange);
    border-radius: 999px;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 0.04em;
    line-height: 1.2;
  }
  .patron-blog .pb-trending-card-title {
    margin: 0;
    font-family: 'Barlow', sans-serif;
    font-size: 14px;
    font-weight: 600;
    color: var(--p-navy);
    line-height: 1.4;
    transition: color var(--p-t-fast);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  .patron-blog .pb-trending-card-item a:hover .pb-trending-card-title { color: var(--p-orange); }

  /* Buttons */
  .patron-blog .pb-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px 24px;
    border-radius: var(--p-radius-pill);
    font-size: 13px;
    font-weight: 500;
    border: 1px solid transparent;
    transition: background var(--p-t-fast), color var(--p-t-fast), border-color var(--p-t-fast), transform var(--p-t-fast);
    text-decoration: none;
    line-height: 1;
  }
  .patron-blog .pb-btn:active { transform: scale(0.98); }
  .patron-blog .pb-btn-block { width: 100%; }
  .patron-blog .pb-btn-orange { background: var(--p-orange); color: #fff; border-color: var(--p-orange); }
  .patron-blog .pb-btn-orange:hover { background: var(--p-orange-hover); border-color: var(--p-orange-hover); color: #fff; }
  .patron-blog .pb-btn-whatsapp { background: var(--p-whatsapp); color: #fff; border-color: var(--p-whatsapp); }
  .patron-blog .pb-btn-whatsapp:hover { background: var(--p-whatsapp-hover); border-color: var(--p-whatsapp-hover); color: #fff; }
  .patron-blog .pb-btn-outlined-white { background: transparent; color: #fff; border-color: rgba(255,255,255,0.4); }
  .patron-blog .pb-btn-outlined-white:hover { background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.7); color: #fff; }
  .patron-blog .pb-btn-icon { width: 16px; height: 16px; flex-shrink: 0; }

  /* Pagination */
  .patron-blog .pb-pagination {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 16px;
    padding: 24px 0 8px;
    margin-bottom: 24px;
  }
  .patron-blog .pb-pagination-summary { font-size: 13px; color: var(--p-text-muted); }
  .patron-blog .pb-pagination-nav {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
  }
  .patron-blog .pb-pagination-link,
  .patron-blog .pb-pagination-current,
  .patron-blog .pb-pagination-disabled,
  .patron-blog .pb-pagination-dots {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 38px;
    height: 38px;
    padding: 0 12px;
    border-radius: var(--p-radius-md);
    font-size: 13px;
    font-weight: 500;
    line-height: 1;
    border: 1px solid var(--p-border);
    background: var(--p-bg-surface);
    color: var(--p-navy);
    transition: background var(--p-t-fast), border-color var(--p-t-fast), color var(--p-t-fast);
  }
  .patron-blog .pb-pagination-link {
    text-decoration: none;
  }
  .patron-blog .pb-pagination-link:hover {
    background: var(--p-bg-alt);
    border-color: var(--p-border-strong);
    color: var(--p-navy);
  }
  .patron-blog .pb-pagination-current {
    background: var(--p-navy);
    border-color: var(--p-navy);
    color: #fff;
    cursor: default;
  }
  .patron-blog .pb-pagination-disabled {
    color: var(--p-border-strong);
    cursor: not-allowed;
    opacity: 0.6;
  }
  .patron-blog .pb-pagination-dots {
    border: none;
    background: transparent;
    color: var(--p-text-muted);
    min-width: 24px;
  }
  .patron-blog .pb-pagination-icon {
    width: 14px;
    height: 14px;
  }
  .patron-blog .pb-pagination-prev,
  .patron-blog .pb-pagination-next {
    gap: 6px;
    padding: 0 14px;
  }

  /* Mobile sticky search (appears when main search scrolls out of view) */
  .patron-blog-mobile-sticky-search { display: none; }
  @media (max-width: 768px) {
    .patron-blog-mobile-sticky-search {
      display: flex;
      align-items: center;
      gap: 10px;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 90;
      padding: 10px 16px;
      background: var(--p-bg-surface);
      border-bottom: 1px solid var(--p-border);
      box-shadow: 0 2px 8px rgba(11, 46, 79, 0.06);
      transform: translateY(-110%);
      transition: transform 220ms ease;
      font-family: 'DM Sans', sans-serif;
    }
    .patron-blog-mobile-sticky-search.is-visible { transform: translateY(0); }
    .patron-blog-mobile-sticky-search-btn {
      display: flex;
      align-items: center;
      gap: 10px;
      flex: 1;
      padding: 10px 14px;
      background: var(--p-bg-alt);
      border: 1px solid var(--p-border);
      border-radius: 999px;
      color: var(--p-text-muted);
      font-size: 13px;
      font-family: inherit;
      cursor: pointer;
      text-align: left;
    }
    .patron-blog-mobile-sticky-search-btn svg { width: 16px; height: 16px; flex-shrink: 0; }
  }

  /* Bottom WhatsApp strip */
  .patron-blog-wa-strip {
    position: fixed;
    bottom: 0; left: 0; right: 0;
    background: #25D366;
    color: #fff;
    z-index: 1050;
    padding: 12px 24px;
    transition: transform 300ms ease;
  }
  .patron-blog-wa-strip.is-dismissed { transform: translateY(100%); }
  .patron-blog-wa-strip-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 14px;
    font-size: 13px;
    font-family: 'DM Sans', sans-serif;
  }
  .patron-blog-wa-strip .pb-wa-icon-wrap {
    width: 24px; height: 24px;
    background: #fff;
    border-radius: 50%;
    flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
  }
  .patron-blog-wa-strip .pb-wa-icon-wrap svg { color: #25D366; width: 14px; height: 14px; }
  .patron-blog-wa-strip .pb-wa-text { flex: 1; }
  .patron-blog-wa-strip .pb-wa-text strong { font-weight: 600; }
  .patron-blog-wa-strip .pb-wa-cta {
    background: #fff;
    color: #25D366;
    padding: 7px 18px;
    border-radius: var(--p-radius-pill);
    font-weight: 600;
    font-size: 13px;
    text-decoration: none;
    flex-shrink: 0;
  }
  .patron-blog-wa-strip .pb-wa-cta:hover { background: rgba(255,255,255,0.92); color: #25D366; }
  .patron-blog-wa-strip .pb-wa-close {
    background: none;
    border: none;
    color: rgba(255,255,255,0.85);
    font-size: 22px;
    line-height: 1;
    padding: 4px 8px;
    flex-shrink: 0;
  }
  .patron-blog-wa-strip .pb-wa-close:hover { color: #fff; }
  body.has-pb-wa-strip { padding-bottom: 56px; }

  /* ============ RESPONSIVE ============ */
  @media (max-width: 1024px) {
    .patron-blog .pb-hero h1 { font-size: 30px; }
    .patron-blog .pb-spotlight-title { font-size: 22px; }
    .patron-blog .pb-layout { grid-template-columns: 1fr; }
    .patron-blog .pb-layout-sidebar > * { position: static; }
    .patron-blog .pb-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 768px) {
    .patron-blog .pb-hero { grid-template-columns: 1fr; }
    .patron-blog .pb-hero-left { padding: 20px; order: 2; }
    .patron-blog .pb-hero-right { order: 1; gap: 12px; }
    .patron-blog .pb-spotlight { padding: 20px; }
    .patron-blog .pb-hero-latest { padding: 18px 20px; }
    .patron-blog .pb-hero h1 { font-size: 26px; }
    .patron-blog .pb-grid { grid-template-columns: 1fr; gap: 16px; }
    /* .patron-blog .pb-trust { font-size: 11px; padding: 12px 16px; } */
      .patron-blog .pb-trust {
    font-size: 11px;
    padding: 12px 16px;

    flex-wrap: wrap;  
    row-gap: 10px;
  }
    .patron-blog .pb-deadlines { flex-wrap: wrap; }
    .patron-blog .pb-deadlines-cta { width: 100%; padding-top: 8px; border-top: 1px solid rgba(154, 52, 18, 0.15); margin-top: 4px; }
    .patron-blog .pb-search-kbd { display: none; }
    .patron-blog .pb-search-input { padding: 12px 14px 12px 40px; font-size: 14px; }
    .patron-blog .pb-search-icon { left: 12px; width: 18px; height: 18px; }
    .patron-blog .pb-chips { flex-wrap: nowrap; overflow-x: auto; -webkit-overflow-scrolling: touch; padding-bottom: 8px; }
    .patron-blog .pb-all-categories { grid-template-columns: 1fr; }

    /* Trust badges & trending chips on mobile */
    .patron-blog .pb-trust-badges { gap: 5px; margin-bottom: 20px; }
    .patron-blog .pb-trust-badge { padding: 4px 9px; font-size: 11px; }
    .patron-blog .pb-trending-chips {
      flex-wrap: nowrap;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      margin-left: -24px;
      margin-right: -24px;
      padding: 0 24px 8px;
      scrollbar-width: none;
    }
    .patron-blog .pb-trending-chips::-webkit-scrollbar { display: none; }
    .patron-blog .pb-spotlight-cta { padding: 11px 18px; font-size: 13px; }

    .patron-blog-wa-strip-content { gap: 10px; flex-wrap: wrap; }
    .patron-blog-wa-strip .pb-wa-text { width: 100%; order: 2; }
    .patron-blog-wa-strip .pb-wa-cta { order: 3; }
    .patron-blog-wa-strip .pb-wa-close { order: 4; margin-left: auto; }
  }
  @media (max-width: 480px) {
    .patron-blog .pb-hero-left { padding: 16px; }
    .patron-blog .pb-spotlight { padding: 16px; }
    .patron-blog .pb-hero-latest { padding: 14px 16px; }
    .patron-blog .pb-hero h1 { font-size: 22px; }
    .patron-blog .pb-pick-title { font-size: 13px; }
    .patron-blog .pb-pick-preview { font-size: 11px; }
    .patron-blog .pb-search-input { padding: 11px 12px 11px 36px; font-size: 14px; }
    .patron-blog .pb-search-icon { left: 10px; width: 16px; height: 16px; }
    .patron-blog .pb-trust-badges { gap: 4px; }
    .patron-blog .pb-trust-badge { padding: 3px 8px; font-size: 10px; }
  }
</style>
@endpush

@section('content')

@php
    // ============================================================
    // DATA SETUP — uses controller-provided $posts.
    // The rest is queried inline (matching the existing pattern in
    // the previous show.blade.php).
    // ============================================================

    // Categories ordered by post count (most active first)
    $categories = \App\Models\PostCategory::withCount('posts')
        ->whereHas('posts')
        ->orderByDesc('posts_count')
        ->get();

    // Top 6 categories shown as chips; rest go into "All ↓" panel
    $topCategories = $categories->take(6);
    $remainingCategories = $categories->slice(6);

    $totalGuides = \App\Models\Post::where('status', 'published')->count();

    // Active filter from query string
    $activeCategorySlug = request('category');

    // ------------------------------------------------------------
    // SEASONAL PICKS (the curated "Start here" trio)
    // ------------------------------------------------------------
    // Phase 1 (now): hardcoded slugs — easy to swap in admin.
    // Phase 2 (later): add a `pin_to_start_here` boolean on posts
    // table and replace this query.
    //   Migration sketch:
    //     Schema::table('posts', fn($t) => $t->boolean('pin_to_start_here')->default(false));
    //   Replacement query:
    //     $seasonalPicks = \App\Models\Post::where('status','published')
    //         ->where('pin_to_start_here', true)
    //         ->orderByDesc('updated_at')
    //         ->take(3)->with('categories')->get();
    // ------------------------------------------------------------
    $seasonalPickSlugs = [
        'itr-forms-income-tax-rules-2026-which-form-to-file-itr-1-to-itr-7',
        'how-to-file-itr-online',
        'new-income-tax-forms-2026-full-list',
    ];
    // Curated 1-line previews keyed by slug (falls back to post excerpt if missing)
    $seasonalPickPreviews = [
        'itr-forms-income-tax-rules-2026-which-form-to-file-itr-1-to-itr-7' => 'Decision tree for ITR-1 through ITR-7 — find yours in 60 seconds.',
        'how-to-file-itr-online' => 'Step-by-step from login to acknowledgment, with 2026 changes flagged.',
        'new-income-tax-forms-2026-full-list' => 'Quick reference: every new form, what it replaces, and when to use it.',
    ];
    $seasonalPicks = \App\Models\Post::where('status', 'published')
        ->whereIn('slug', $seasonalPickSlugs)
        ->with('categories')
        ->get()
        ->sortBy(fn($p) => array_search($p->slug, $seasonalPickSlugs))
        ->values();

    // ------------------------------------------------------------
    // SEASONAL SPOTLIGHT (right of hero)
    // ------------------------------------------------------------
    // Phase 1: hardcoded copy + linked post slug.
    // Phase 2: move to a `seasonal_spotlights` table with
    //   start_date, end_date, eyebrow, headline, body, linked_post_id.
    // ------------------------------------------------------------
    $spotlight = (object) [
        'eyebrow'      => 'Seasonal Spotlight · New IT Rules 2026',
        'headline'     => '511 rules became 333. What actually changes for you.',
        'read_minutes' => 8,
        'updated_on'   => 'Apr 8, 2026',
        'lede'         => 'What changed under the new IT Rules 2026 — explained in 8 minutes by CA Sundram Gupta.',
        'link_text'    => 'Read the 8-min breakdown',
        'link_slug'    => 'income-tax-rules-2026-changes-simplified',
    ];

    // ------------------------------------------------------------
    // LEAD AUTHOR (for hero stat row)
    // ------------------------------------------------------------
    $heroAuthor = \App\Models\User::where('name', 'like', '%Sundram%')->first();
    $heroAuthorImage = ($heroAuthor && $heroAuthor->profile_image)
        ? Storage::url($heroAuthor->profile_image)
        : asset('storage/users/ca-sundaram-gupta-profile-sir-image-1-1-2026-03-13-07-31-54.png');

    // ------------------------------------------------------------
    // THIS MONTH'S DEADLINES (amber strip)
    // ------------------------------------------------------------
    // Phase 1: hardcoded.
    // Phase 2: pull from /compliance-calendar data source.
    // ------------------------------------------------------------
    $deadlines = [
        ['label' => 'GSTR-1 · Apr 11',                'slug' => 'gstr1-gstr3b-zoho-books-filing'],
        ['label' => 'TDS Q4 · Apr 30',                'slug' => null],
        ['label' => 'Form 26AS reconciliation',       'slug' => null],
    ];

    // ------------------------------------------------------------
    // LATEST FROM BLOG (hero-right card, sits below spotlight)
    // ------------------------------------------------------------
    $latestPosts = \App\Models\Post::where('status', 'published')
        ->latest('published_at')
        ->take(3)
        ->with('categories')
        ->get();

    // ------------------------------------------------------------
    // TRENDING NOW (sidebar) — driven by manual `trending_badge` field
    // Editor sets `trending_badge` text in CMS (e.g., "Hot", "Popular").
    // The badge string itself becomes the visible label on each card.
    // Falls back to next-3-most-recent (skipping hero's 3) if nothing flagged.
    // ------------------------------------------------------------
    $trendingPosts = \App\Models\Post::published()
        ->whereNotNull('trending_badge')
        ->where('trending_badge', '!=', '')
        ->latest('updated_at')
        ->take(3)
        ->with('categories')
        ->get();

    if ($trendingPosts->isEmpty() && isset($latestPosts)) {
        $heroLatestIds = $latestPosts->pluck('id')->toArray();
        $trendingPosts = \App\Models\Post::published()
            ->whereNotIn('id', $heroLatestIds)
            ->latest('updated_at')
            ->take(3)
            ->with('categories')
            ->get();
    }

    // Trending search chips (most-searched terms — manual for now)
    // Phase 2: pull from search analytics or Google Search Console API
    $trendingSearches = ['GSTR-3B', 'ITR filing', 'Net worth certificate', 'Section 8', 'TDS rates'];
@endphp

<div class="patron-blog">
  <div class="container py-3">

    {{-- ============ BREADCRUMB ============ --}}
    <nav class="pb-breadcrumb" aria-label="Breadcrumb">
      <a href="{{ route('frontend.index') }}">Home</a>
      <span class="pb-breadcrumb-sep">›</span>
      <a href="{{ route('frontend.posts.index') }}">Resources</a>
      <span class="pb-breadcrumb-sep">›</span>
      <span aria-current="page">Blog</span>
    </nav>

    {{-- ============ HERO ============ --}}
    <section class="pb-hero">
      <div class="pb-hero-left">
        <h1>Practical compliance guides</h1>

        <div class="pb-hero-stat">
          <img class="pb-hero-stat-avatar" src="{{ $heroAuthorImage }}" alt="" loading="eager">
          <div class="pb-hero-stat-text">
            <span class="pb-hero-stat-name">Written by CA Sundram Gupta</span>
            <span class="pb-hero-stat-meta">Trusted by 25,000+ professionals across India</span>
          </div>
        </div>

        <div class="pb-trust-badges">
          <span class="pb-trust-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>{{ number_format(floor($totalGuides / 100) * 100) }}+ Guides</span>
          <span class="pb-trust-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Updated Weekly</span>
        </div>

        <div class="pb-search-wrap posts-search-wrapper">
          <form method="GET" action="{{ route('frontend.posts.index') }}">
            <svg class="pb-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.35-4.35"></path></svg>
            <input
              type="search"
              id="posts-search-input"
              name="search"
              class="pb-search-input"
              placeholder='Search {{ number_format(floor($totalGuides / 100) * 100) }}+ guides — try "GSTR-3B" or "net worth certificate"'
              value="{{ request('search') }}"
              aria-label="Search articles"
              autocomplete="off">
            <span class="pb-search-kbd" aria-hidden="true">⌘ K</span>
          </form>
          <div class="posts-search-spinner" id="postsSearchSpinner" style="display: none;">
            <div class="spinner-border spinner-border-sm text-primary" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
          </div>
          <div class="posts-search-suggestions" id="postsSearchSuggestions"></div>
        </div>

        @if(!empty($trendingSearches))
          <div class="pb-trending-chips">
            <span class="pb-trending-chips-label">Trending:</span>
            @foreach($trendingSearches as $term)
              <button class="pb-trending-chip" type="button" data-trending="{{ $term }}">{{ $term }}</button>
            @endforeach
          </div>
        @endif

        @if($seasonalPicks->isNotEmpty())
          <div class="pb-picks">
            <p class="pb-picks-eyebrow">
              <span class="pb-picks-dot" aria-hidden="true"></span>
              Seasonal Picks · ITR Season 2026
            </p>
            <div>
              @foreach($seasonalPicks as $idx => $pick)
                @php
                  $cat = $pick->categories->first();
                  $readTime = ceil(str_word_count(strip_tags($pick->content)) / 200);
                  $preview = $seasonalPickPreviews[$pick->slug] ?? Str::limit(strip_tags($pick->description ?? $pick->content), 90);
                @endphp
                <a class="pb-pick" href="{{ route('frontend.posts.blog', $pick->slug) }}">
                  <span class="pb-pick-num">{{ str_pad($idx + 1, 2, '0', STR_PAD_LEFT) }}</span>
                  <span class="pb-pick-content">
                    <span class="pb-pick-cat">{{ $cat ? $cat->name : 'Guide' }}</span>
                    <span class="pb-pick-title">{{ $pick->title }}</span>
                    <span class="pb-pick-preview">{{ $preview }}</span>
                    <span class="pb-pick-meta">Updated {{ $pick->updated_at->format('M Y') }} · {{ $readTime }} min read</span>
                  </span>
                  <svg class="pb-pick-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
              @endforeach
            </div>
          </div>
        @endif
      </div>

      <div class="pb-hero-right">
        <aside class="pb-spotlight" aria-labelledby="spotlightTitle">
          <p class="pb-spotlight-eyebrow">
            <span class="pb-spotlight-dot" aria-hidden="true"></span>
            {{ $spotlight->eyebrow }}
          </p>
          <h2 class="pb-spotlight-title" id="spotlightTitle">{{ $spotlight->headline }}</h2>
          <p class="pb-spotlight-meta">
            <span>{{ $spotlight->read_minutes }} min read</span>
            <span class="pb-spotlight-meta-divider">·</span>
            <span>Updated {{ $spotlight->updated_on }}</span>
          </p>
          <p class="pb-spotlight-lede">{{ $spotlight->lede }}</p>
          <a href="{{ route('frontend.posts.blog', $spotlight->link_slug) }}" class="pb-spotlight-cta">
            {{ $spotlight->link_text }}
            <svg class="pb-spotlight-cta-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </aside>

        @if($latestPosts->isNotEmpty())
          <aside class="pb-hero-latest" aria-labelledby="latestHeading">
            <h2 class="pb-hero-latest-heading" id="latestHeading">Latest from the blog</h2>
            <ul class="pb-hero-latest-list">
              @foreach($latestPosts as $latest)
                @php $latestCat = $latest->categories->first(); @endphp
                <li class="pb-hero-latest-item">
                  <a href="{{ route('frontend.posts.blog', $latest->slug) }}">
                    <div class="pb-hero-latest-meta">
                      <span class="pb-hero-latest-cat">{{ $latestCat ? $latestCat->name : 'Guide' }}</span>
                      <span class="pb-hero-latest-date">{{ $latest->published_at->format('M j') }}</span>
                    </div>
                    <h3 class="pb-hero-latest-title">{{ $latest->title }}</h3>
                  </a>
                </li>
              @endforeach
            </ul>
          </aside>
        @endif
      </div>
    </section>

    {{-- ============ TRUST STRIP ============ --}}
    <div class="pb-trust">
      <strong>10,000+</strong> clients
      <span class="pb-trust-divider">·</span>
      <strong>50,000+</strong> filings
      <span class="pb-trust-divider">·</span>
      <strong>4.9★</strong> Google
      <span class="pb-trust-divider">·</span>
      ISO certified
      <span class="pb-trust-divider">·</span>
      4 offices
    </div>

    {{-- ============ DEADLINES STRIP ============ --}}
    @if(count($deadlines) && !$activeCategorySlug)
      <div class="pb-deadlines" role="region" aria-label="Upcoming compliance deadlines">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
        <p>
          <strong>Due this month:</strong>
          @foreach($deadlines as $i => $d)
            @if($d['slug'])
              <a href="{{ route('frontend.posts.blog', $d['slug']) }}">{{ $d['label'] }}</a>
            @else
              {{ $d['label'] }}
            @endif
            @if($i < count($deadlines) - 1)<span class="pb-deadlines-divider">·</span>@endif
          @endforeach
        </p>
        <a href="{{ url('/compliance-calendar') }}" class="pb-deadlines-cta">View full calendar →</a>
      </div>
    @endif

    {{-- ============ CATEGORY CHIPS ============ --}}
    <nav class="pb-chips" aria-label="Filter articles by category">
      @if($activeCategorySlug)
        <a href="{{ route('frontend.posts.index') }}" class="pb-chip pb-chip-clear">Clear filter</a>
      @endif
      @foreach($topCategories as $cat)
        <a
          href="{{ route('frontend.posts.index', ['category' => $cat->slug]) }}"
          class="pb-chip {{ $activeCategorySlug === $cat->slug ? 'is-active' : '' }}"
          aria-pressed="{{ $activeCategorySlug === $cat->slug ? 'true' : 'false' }}">
          {{ $cat->name }} · {{ $cat->posts_count }}
        </a>
      @endforeach
      @if($remainingCategories->isNotEmpty())
        <button class="pb-chip" type="button" id="pbAllCategoriesToggle" aria-expanded="false" aria-controls="pbAllCategories">
          All categories ↓
        </button>
      @endif
    </nav>

    @if($remainingCategories->isNotEmpty())
      <div class="pb-all-categories" id="pbAllCategories" role="region" aria-label="All categories">
        @foreach($remainingCategories as $cat)
          <a href="{{ route('frontend.posts.index', ['category' => $cat->slug]) }}">
            {{ $cat->name }} <span class="count">{{ $cat->posts_count }}</span>
          </a>
        @endforeach
      </div>
    @endif

    {{-- ============ MAIN GRID + SIDEBAR ============ --}}
    <div class="pb-layout">

      <div class="pb-layout-main">
        @if($posts->count() > 0)
          <div class="pb-grid">
            @foreach($posts as $idx => $post)
              @php
                $cat = $post->categories->first();
                $author = $post->users->first();
                $readTime = ceil(str_word_count(strip_tags($post->content)) / 200);
              @endphp

              <article class="pb-card">
                <a href="{{ route('frontend.posts.blog', $post->slug) }}">
                  @if($post->featured_image)
                    <img class="pb-card-image" src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" loading="{{ $idx < 3 ? 'eager' : 'lazy' }}">
                  @else
                    <div class="pb-card-image-placeholder">
                      <i class="bi bi-image" style="font-size: 2rem;"></i>
                    </div>
                  @endif

                  <div class="pb-card-body">
                    <div class="pb-card-meta">
                      @if($cat)
                        <span class="pb-badge-navy">{{ $cat->name }}</span>
                        <span class="pb-meta-divider">·</span>
                      @endif
                      <span>{{ $readTime }} min read</span>
                    </div>

                    <h3 class="pb-card-title">{{ $post->title }}</h3>

                    @if($post->description || $post->content)
                      <p class="pb-card-excerpt">{{ $post->description ?: Str::limit(strip_tags($post->content), 140) }}</p>
                    @endif

                    @if($author)
                      <div class="pb-card-author">
                        @if($author->profile_image)
                          <img src="{{ Storage::url($author->profile_image) }}" alt="{{ $author->name }}">
                        @endif
                        <span><span class="pb-ca-badge">CA</span><strong>{{ $author->name }}</strong> · {{ $post->published_at->format('M j') }}</span>
                      </div>
                    @endif
                  </div>
                </a>
              </article>
            @endforeach
          </div>

          {{-- Pagination - uses custom paginator view to avoid Bootstrap/Tailwind dependency --}}
          @if(method_exists($posts, 'hasPages') && $posts->hasPages())
            <div class="pb-pagination">
              <p class="pb-pagination-summary">
                Showing {{ $posts->firstItem() }}–{{ $posts->lastItem() }} of {{ $posts->total() }} guides
                @if($activeCategorySlug)
                  in {{ optional($categories->firstWhere('slug', $activeCategorySlug))->name }}
                @endif
              </p>
              {{ $posts->onEachSide(1)->links('vendor.pagination.patron') }}
            </div>
          @endif

        @else
          <div class="text-center py-5">
            <p class="text-muted">No articles match the current filter. <a href="{{ route('frontend.posts.index') }}">Clear filter</a> to see all guides.</p>
          </div>
        @endif
      </div>

      {{-- Sticky sidebar --}}
      <aside class="pb-layout-sidebar">

        <div class="pb-contact-card">
          <h3>Stuck on something specific?</h3>
          <p>Free 15-min consultation with a partner CA.</p>
          <div class="pb-contact-buttons">
            <a href="tel:+919459456700" class="pb-btn pb-btn-orange pb-btn-block">
              <svg class="pb-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
              Call +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20have%20a%20question%20I%20read%20on%20your%20blog." class="pb-btn pb-btn-whatsapp pb-btn-block" target="_blank" rel="noopener">
              <svg class="pb-btn-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              WhatsApp Us
            </a>
            <a href="mailto:sales@patronaccounting.com?subject=Question%20from%20Patron%20Accounting%20blog" class="pb-btn pb-btn-outlined-white pb-btn-block">
              <svg class="pb-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              Email Us
            </a>
          </div>
        </div>

        <div class="pb-lead-magnet">
          <p class="pb-label">Free download</p>
          <h3>2026 compliance calendar</h3>
          <p class="pb-desc">PDF · all GST, ITR, ROC, TDS dates for the financial year.</p>
          <a href="{{ url('/compliance-calendar') }}" class="pb-btn pb-btn-orange pb-btn-block">Download free →</a>
        </div>

        @if($trendingPosts->isNotEmpty())
          <div class="pb-trending-card" aria-labelledby="sidebarTrendingHeading">
            <h3 class="pb-trending-card-heading" id="sidebarTrendingHeading">Trending now</h3>
            <ul class="pb-trending-card-list">
              @foreach($trendingPosts as $tp)
                @php
                  $tpCat = $tp->categories->first();
                  $tpBadge = !empty($tp->trending_badge) ? $tp->trending_badge : null;
                @endphp
                <li class="pb-trending-card-item">
                  <a href="{{ route('frontend.posts.blog', $tp->slug) }}">
                    <div class="pb-trending-card-meta">
                      <span class="pb-trending-card-cat">{{ $tpCat ? $tpCat->name : 'Guide' }}</span>
                      @if($tpBadge)
                        <span class="pb-trending-card-badge">{{ $tpBadge }}</span>
                      @endif
                    </div>
                    <h4 class="pb-trending-card-title">{{ $tp->title }}</h4>
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
        @endif

      </aside>
    </div>

  </div>
</div>

{{-- ============ MOBILE STICKY SEARCH (appears when main search scrolls out of view) ============ --}}
<div class="patron-blog-mobile-sticky-search" id="pbMobileStickySearch" aria-hidden="true">
  <button class="patron-blog-mobile-sticky-search-btn" type="button" id="pbMobileStickySearchBtn">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.35-4.35"></path></svg>
    <span>Search guides</span>
  </button>
</div>



@endsection

@push('scripts')
<script>
  document.body.classList.add('has-pb-wa-strip');

  // ============ Search suggestions (existing endpoint, preserved) ============
  (function(){
    const searchInput = document.getElementById('posts-search-input');
    const searchSuggestions = document.getElementById('postsSearchSuggestions');
    const searchSpinner = document.getElementById('postsSearchSpinner');
    if (!searchInput) return;
    let searchTimeout;

    searchInput.addEventListener('input', function() {
      const query = this.value.trim();
      clearTimeout(searchTimeout);
      if (query.length === 0) {
        searchSuggestions.classList.remove('show');
        searchSpinner.style.display = 'none';
        return;
      }
      searchSpinner.style.display = 'block';
      searchTimeout = setTimeout(() => performSearch(query), 300);
    });

    function performSearch(query) {
      fetch(`/api/search-posts?q=${encodeURIComponent(query)}`, {
        method: 'GET',
        headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }
      })
      .then(r => r.json())
      .then(data => { displayResults(data); searchSpinner.style.display = 'none'; })
      .catch(() => {
        searchSpinner.style.display = 'none';
        searchSuggestions.innerHTML = '<div class="posts-no-results">Error loading results</div>';
        searchSuggestions.classList.add('show');
      });
    }

    function displayResults(posts) {
      if (!posts || posts.length === 0) {
        searchSuggestions.innerHTML = '<div class="posts-no-results">No results found</div>';
        searchSuggestions.classList.add('show');
        return;
      }
      const html = posts.map(post => {
        const excerpt = post.excerpt || (post.content ? post.content.substring(0, 100) : '');
        return `<a href="/${post.slug}" class="posts-suggestion-item">
          <div class="posts-suggestion-title">${escapeHtml(post.title)}</div>
          <div class="posts-suggestion-excerpt">${escapeHtml(excerpt)}${excerpt.length > 0 ? '...' : ''}</div>
        </a>`;
      }).join('');
      searchSuggestions.innerHTML = html;
      searchSuggestions.classList.add('show');
    }

    function escapeHtml(t) { const d = document.createElement('div'); d.textContent = t; return d.innerHTML; }

    document.addEventListener('click', e => {
      if (!searchInput.contains(e.target) && !searchSuggestions.contains(e.target)) {
        searchSuggestions.classList.remove('show');
      }
    });
    searchInput.addEventListener('focus', function() {
      if (this.value.trim().length > 0 && searchSuggestions.innerHTML !== '') {
        searchSuggestions.classList.add('show');
      }
    });
    searchInput.addEventListener('keydown', e => {
      if (e.key === 'Enter') {
        const first = searchSuggestions.querySelector('.posts-suggestion-item');
        if (first) { e.preventDefault(); window.location.href = first.href; }
      }
    });
  })();

  // ============ Mobile sticky search (appears when main search scrolls out) ============
  (function(){
    const mainSearch = document.getElementById('posts-search-input');
    const stickyBar = document.getElementById('pbMobileStickySearch');
    const stickyBtn = document.getElementById('pbMobileStickySearchBtn');
    if (!mainSearch || !stickyBar || !('IntersectionObserver' in window)) return;

    const observer = new IntersectionObserver(
      ([entry]) => {
        const visible = !entry.isIntersecting && entry.boundingClientRect.top < 0;
        stickyBar.classList.toggle('is-visible', visible);
        stickyBar.setAttribute('aria-hidden', visible ? 'false' : 'true');
      },
      { threshold: 0, rootMargin: '0px' }
    );
    observer.observe(mainSearch);

    stickyBtn.addEventListener('click', () => {
      mainSearch.scrollIntoView({ behavior: 'smooth', block: 'center' });
      setTimeout(() => mainSearch.focus(), 350);
    });
  })();

  // ============ Trending search chips → populate search ============
  (function(){
    const search = document.getElementById('posts-search-input');
    const chips = document.querySelectorAll('[data-trending]');
    if (!search || !chips.length) return;
    chips.forEach(chip => {
      chip.addEventListener('click', () => {
        search.value = chip.dataset.trending;
        search.focus();
        search.dispatchEvent(new Event('input', { bubbles: true }));
        search.scrollIntoView({ behavior: 'smooth', block: 'center' });
      });
    });
  })();

  // ============ ⌘K / Ctrl+K to focus search ============
  (function(){
    const search = document.getElementById('posts-search-input');
    if (!search) return;
    document.addEventListener('keydown', e => {
      if ((e.metaKey || e.ctrlKey) && e.key.toLowerCase() === 'k') {
        e.preventDefault();
        search.focus();
        search.select();
      }
    });
  })();

  // ============ All-categories panel toggle ============
  (function(){
    const toggle = document.getElementById('pbAllCategoriesToggle');
    const panel = document.getElementById('pbAllCategories');
    if (!toggle || !panel) return;
    toggle.addEventListener('click', () => {
      const open = panel.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      toggle.textContent = open ? 'All categories ↑' : 'All categories ↓';
    });
  })();

  // ============ WhatsApp strip dismiss (30-day persistence) ============
  (function(){
    const strip = document.getElementById('pbWaStrip');
    const dismiss = document.getElementById('pbWaDismiss');
    if (!strip || !dismiss) return;
    const KEY = 'patron_wa_strip_dismissed_until';

    const dismissedUntil = localStorage.getItem(KEY);
    if (dismissedUntil && Date.now() < parseInt(dismissedUntil, 10)) {
      strip.classList.add('is-dismissed');
      document.body.classList.remove('has-pb-wa-strip');
      return;
    }

    dismiss.addEventListener('click', () => {
      strip.classList.add('is-dismissed');
      document.body.classList.remove('has-pb-wa-strip');
      const until = Date.now() + 30 * 24 * 60 * 60 * 1000;
      try { localStorage.setItem(KEY, String(until)); } catch(e) {}
    });
  })();
</script>
@endpush