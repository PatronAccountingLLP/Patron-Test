@extends('layouts.app')



@php
    // Reading time (words / 200 wpm) — same pattern as listing
    $readingMinutes = max(1, ceil(str_word_count(strip_tags($post->content)) / 200));
    $primaryCategory = $post->categories->first();
    $primaryAuthor = $post->users->first();

    // Sidebar trending — same query as listing (manual `trending_badge`)
    $sidebarTrending = \App\Models\Post::published()
        ->where('id', '!=', $post->id)
        ->whereNotNull('trending_badge')
        ->where('trending_badge', '!=', '')
        ->latest('updated_at')
        ->take(3)
        ->with('categories')
        ->get();

    // Fallback if nothing flagged
    if ($sidebarTrending->isEmpty()) {
        $sidebarTrending = \App\Models\Post::published()
            ->where('id', '!=', $post->id)
            ->latest('updated_at')
            ->take(3)
            ->with('categories')
            ->get();
    }

    // Related posts — same category, latest 3, fallback to recent
    $relatedPosts = collect();
    if ($post->categories->count() > 0) {
        $categoryIds = $post->categories->pluck('id');
        $relatedPosts = \App\Models\Post::published()
            ->where('id', '!=', $post->id)
            ->whereHas('categories', function ($q) use ($categoryIds) {
                $q->whereIn('post_categories.id', $categoryIds);
            })
            ->latest('published_at')
            ->take(3)
            ->with(['categories', 'users'])
            ->get();
    }
    if ($relatedPosts->count() < 3) {
        $remaining = \App\Models\Post::published()
            ->where('id', '!=', $post->id)
            ->whereNotIn('id', $relatedPosts->pluck('id'))
            ->latest('published_at')
            ->take(3 - $relatedPosts->count())
            ->with(['categories', 'users'])
            ->get();
        $relatedPosts = $relatedPosts->concat($remaining);
    }
@endphp

{{-- ============ JSON-LD SCHEMA ============ --}}
@push('meta-content')
@php
    // JSON-LD — BlogPosting + BreadcrumbList + FAQPage only
    $schemaWordCount = str_word_count(strip_tags($post->content));
    $schemaDescription = $post->meta_description
        ?: ($post->key_points ? Str::limit(strip_tags($post->key_points), 160) : null)
        ?: ($post->excerpt ?: Str::limit(strip_tags($post->content), 160));
    $schemaAuthorUrl = $primaryAuthor
        ? url('/authorhub/' . \Str::slug($primaryAuthor->name))
        : null;
    $schemaUrl = $post->seo_canonical_url ?: url()->current();
@endphp
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "{{ $schemaUrl }}#article",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ $schemaUrl }}"
      },
      "headline": @json($post->title),
      "description": @json($schemaDescription),
      @if($post->featured_image)
      "image": {
        "@type": "ImageObject",
        "url": @json($post->featured_image_url)
      },
      @endif
      @if($primaryAuthor)
      "author": {
        "@type": "Person",
        "name": @json($primaryAuthor->name),
        "url": @json($schemaAuthorUrl)
      },
      @endif
      "datePublished": "{{ ($post->published_at ?? $post->created_at)?->toIso8601String() }}",
      "dateModified": "{{ ($post->updated_at ?? $post->published_at ?? $post->created_at)?->toIso8601String() }}",
      @if($primaryCategory)
      "articleSection": @json($primaryCategory->name),
      @endif
      "wordCount": {{ $schemaWordCount }},
      "inLanguage": "en-IN"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "{{ $schemaUrl }}#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ route('frontend.index') }}" },
        { "@type": "ListItem", "position": 2, "name": "Blog", "item": "{{ route('frontend.posts.index') }}" },
        { "@type": "ListItem", "position": 3, "name": @json($post->title), "item": "{{ $schemaUrl }}" }
      ]
    }@if($post->faq_enabled && !empty($post->faq_items) && is_array($post->faq_items) && count($post->faq_items) > 0),
    {
      "@type": "FAQPage",
      "@id": "{{ $schemaUrl }}#faq",
      "mainEntity": [
        @foreach($post->faq_items as $faq)
        {
          "@type": "Question",
          "name": @json($faq['question'] ?? ''),
          "acceptedAnswer": {
            "@type": "Answer",
            "text": @json(strip_tags($faq['answer'] ?? ''))
          }
        }@if(!$loop->last),@endif
        @endforeach
      ]
    }@endif
  ]
}
</script>
@endpush

@push('styles')
<style>
  /* ============ DESIGN TOKENS (mirrors listing) ============ */
  .patron-blog-detail {
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
    --p-radius-lg: 14px;
    --p-radius-pill: 999px;
    --p-t-fast: 120ms ease;
    --p-t-base: 200ms ease;

    background: var(--p-bg-page);
    color: var(--p-charcoal);
    font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
    line-height: 1.7;
  }
  .patron-blog-detail *, .patron-blog-detail *::before, .patron-blog-detail *::after { box-sizing: border-box; }
  .patron-blog-detail a { color: var(--p-navy); text-decoration: none; }
  .patron-blog-detail a:hover { color: var(--p-navy-hover); }
  .patron-blog-detail button { font: inherit; cursor: pointer; }
  .patron-blog-detail img { max-width: 100%; height: auto; }

  /* ============ READING PROGRESS BAR ============ */
  .pbd-progress-bar {
    position: fixed;
    top: 0;
    left: 0;
    height: 3px;
    background: var(--p-orange);
    z-index: 1100;
    transition: width 100ms linear;
    width: 0%;
  }

  /* ============ BREADCRUMB ============ */
  .patron-blog-detail .pbd-breadcrumb {
    padding: 20px 0 8px;
    font-size: 13px;
    color: var(--p-text-muted);
  }
  .patron-blog-detail .pbd-breadcrumb a { color: var(--p-text-muted); }
  .patron-blog-detail .pbd-breadcrumb a:hover { color: var(--p-navy); }
  .patron-blog-detail .pbd-breadcrumb-sep { margin: 0 8px; color: var(--p-border-strong); }
  .patron-blog-detail .pbd-breadcrumb [aria-current] { color: var(--p-charcoal); font-weight: 500; }

  /* ============ ARTICLE HERO ============ */
  .patron-blog-detail .pbd-hero {
    padding: 24px 0 32px;
  }
  .patron-blog-detail .pbd-hero-meta {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 16px;
    font-size: 13px;
    color: var(--p-text-muted);
  }
  .patron-blog-detail .pbd-hero-cat {
    display: inline-block;
    padding: 4px 12px;
    background: rgba(21, 54, 95, 0.06);
    border: 1px solid rgba(21, 54, 95, 0.12);
    color: var(--p-navy);
    border-radius: 999px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.02em;
  }
  .patron-blog-detail .pbd-hero-meta-divider { color: var(--p-border-strong); }
  .patron-blog-detail .pbd-hero h1 {
    margin: 0 0 16px;
    font-family: 'Barlow', sans-serif;
    font-size: 40px;
    font-weight: 700;
    color: var(--p-navy);
    line-height: 1.18;
    letter-spacing: -0.02em;
  }
  .patron-blog-detail .pbd-hero-excerpt {
    margin: 0 0 24px;
    font-size: 18px;
    color: var(--p-charcoal);
    line-height: 1.6;
    max-width: 720px;
  }
  .patron-blog-detail .pbd-hero-author {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 16px 18px;
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-lg);
    background: var(--p-bg-surface);
    margin-bottom: 28px;
    text-decoration: none;
    transition: border-color var(--p-t-fast), background var(--p-t-fast), transform var(--p-t-fast);
  }
  .patron-blog-detail .pbd-hero-author:hover {
    border-color: var(--p-border-strong);
    background: var(--p-bg-alt);
  }
  .patron-blog-detail .pbd-hero-author:hover .pbd-hero-author-arrow {
    transform: translateX(2px);
    color: var(--p-orange);
  }
  .patron-blog-detail .pbd-hero-author:hover .pbd-hero-author-cta {
    color: var(--p-orange);
  }
  .patron-blog-detail .pbd-hero-author-avatar-wrap {
    flex-shrink: 0;
    display: flex;
  }
  .patron-blog-detail .pbd-hero-author-avatar {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    object-fit: cover;
    flex-shrink: 0;
    background: var(--p-bg-alt);
    border: 2px solid var(--p-bg-surface);
    box-shadow: 0 0 0 1px var(--p-border);
    align-items: center;
    justify-content: center;
    font-weight: 600;
    color: var(--p-navy);
    font-size: 18px;
    font-family: 'Barlow', sans-serif;
  }
  .patron-blog-detail .pbd-hero-author-avatar-img { display: block; }
  .patron-blog-detail .pbd-hero-author-avatar-fallback { display: flex; }
  .patron-blog-detail .pbd-hero-author-text { flex: 1; min-width: 0; }
  .patron-blog-detail .pbd-hero-author-name {
    font-size: 15px;
    font-weight: 600;
    color: var(--p-navy);
    margin: 0;
    font-family: 'Barlow', sans-serif;
  }
  .patron-blog-detail .pbd-hero-author-byline {
    font-size: 12px;
    color: var(--p-text-muted);
    margin: 3px 0 0;
  }
  .patron-blog-detail .pbd-hero-author-cta {
    color: var(--p-navy);
    font-weight: 500;
    transition: color var(--p-t-fast);
  }
  .patron-blog-detail .pbd-hero-author-arrow {
    flex-shrink: 0;
    width: 18px;
    height: 18px;
    color: var(--p-text-muted);
    transition: transform var(--p-t-fast), color var(--p-t-fast);
  }
  .patron-blog-detail .pbd-hero-image {
    width: 100%;
    aspect-ratio: 16 / 9;
    border-radius: var(--p-radius-lg);
    object-fit: cover;
    background: var(--p-bg-alt);
    margin-bottom: 8px;
  }
  .patron-blog-detail .pbd-hero-image-caption {
    font-size: 12px;
    color: var(--p-text-muted);
    text-align: center;
    margin: 0 0 20px;
  }

  /* ============ MAIN LAYOUT (article + sidebar) ============ */
  .patron-blog-detail .pbd-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 320px;
    gap: 48px;
    margin-bottom: 64px;
  }

  /* ============ QUICK ANSWER BOX (AEO/GEO citation target) ============ */
  .patron-blog-detail .pbd-quick-answer {
    background: linear-gradient(180deg, rgba(21, 54, 95, 0.04), rgba(21, 54, 95, 0.02));
    border: 1px solid var(--p-border);
    border-left: 4px solid var(--p-orange);
    border-radius: 0 var(--p-radius-lg) var(--p-radius-lg) 0;
    padding: 22px 26px;
    margin: 0 0 32px;
  }
  .patron-blog-detail .pbd-quick-answer-eyebrow {
    margin: 0 0 10px;
    font-size: 11px;
    font-weight: 600;
    color: var(--p-orange);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    display: flex;
    align-items: center;
    gap: 6px;
  }
  .patron-blog-detail .pbd-quick-answer-eyebrow svg {
    width: 14px;
    height: 14px;
  }
  .patron-blog-detail .pbd-quick-answer-body {
    font-family: 'Barlow', sans-serif;
    font-size: 17px;
    font-weight: 500;
    color: var(--p-navy);
    line-height: 1.55;
  }
  .patron-blog-detail .pbd-quick-answer-body p:last-child { margin-bottom: 0; }

  /* ============ ARTICLE BODY TYPOGRAPHY ============ */
  .patron-blog-detail .pbd-article {
    font-size: 17px;
    line-height: 1.7;
    color: var(--p-charcoal);
    max-width: 720px;
  }
  .patron-blog-detail .pbd-article h2 {
    font-family: 'Barlow', sans-serif;
    font-size: 28px;
    font-weight: 700;
    color: var(--p-navy);
    margin: 48px 0 16px;
    line-height: 1.3;
    letter-spacing: -0.015em;
    scroll-margin-top: 100px;
  }
  .patron-blog-detail .pbd-article h3 {
    font-family: 'Barlow', sans-serif;
    font-size: 22px;
    font-weight: 600;
    color: var(--p-navy);
    margin: 36px 0 12px;
    line-height: 1.35;
    scroll-margin-top: 100px;
  }
  .patron-blog-detail .pbd-article h4 {
    font-family: 'Barlow', sans-serif;
    font-size: 18px;
    font-weight: 600;
    color: var(--p-navy);
    margin: 28px 0 8px;
    line-height: 1.4;
  }
  .patron-blog-detail .pbd-article p { margin: 0 0 20px; }
  .patron-blog-detail .pbd-article ul,
  .patron-blog-detail .pbd-article ol {
    margin: 0 0 20px;
    padding-left: 24px;
  }
  .patron-blog-detail .pbd-article li { margin-bottom: 8px; }
  .patron-blog-detail .pbd-article li::marker { color: var(--p-orange); }
  .patron-blog-detail .pbd-article a {
    color: var(--p-navy);
    text-decoration: underline;
    text-decoration-color: rgba(21, 54, 95, 0.3);
    text-underline-offset: 3px;
    text-decoration-thickness: 1.5px;
    transition: text-decoration-color var(--p-t-fast);
  }
  .patron-blog-detail .pbd-article a:hover {
    color: var(--p-orange);
    text-decoration-color: var(--p-orange);
  }
  .patron-blog-detail .pbd-article blockquote {
    border-left: 3px solid var(--p-orange);
    padding: 4px 0 4px 20px;
    margin: 24px 0;
    font-style: italic;
    color: var(--p-charcoal);
    background: rgba(242, 101, 34, 0.04);
    padding: 16px 20px;
    border-radius: 0 var(--p-radius-md) var(--p-radius-md) 0;
  }
  .patron-blog-detail .pbd-article blockquote p:last-child { margin-bottom: 0; }
  .patron-blog-detail .pbd-article img {
    border-radius: var(--p-radius-md);
    margin: 24px 0;
    width: 100%;
  }
  .patron-blog-detail .pbd-article table {
    width: 100%;
    border-collapse: collapse;
    margin: 24px 0;
    font-size: 15px;
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-md);
    overflow: hidden;
  }
  /* Wide-table horizontal scroll: at narrow viewports, allow tables to scroll horizontally
     within the article column instead of overflowing the page. The faded right edge
     hints to the user that more content exists offscreen. */
  @media (max-width: 768px) {
    .patron-blog-detail .pbd-article table {
      display: block;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      max-width: 100%;
      white-space: nowrap;
      background:
        linear-gradient(to right, var(--p-bg-surface) 30%, rgba(255,255,255,0)) left center,
        linear-gradient(to left, var(--p-bg-surface) 30%, rgba(255,255,255,0)) right center,
        radial-gradient(farthest-side at 0% 50%, rgba(0,0,0,0.08), rgba(0,0,0,0)) left center,
        radial-gradient(farthest-side at 100% 50%, rgba(0,0,0,0.08), rgba(0,0,0,0)) right center;
      background-repeat: no-repeat;
      background-size: 30px 100%, 30px 100%, 14px 100%, 14px 100%;
      background-attachment: local, local, scroll, scroll;
    }
    .patron-blog-detail .pbd-article table thead,
    .patron-blog-detail .pbd-article table tbody,
    .patron-blog-detail .pbd-article table tr {
      white-space: normal;
    }
  }
  .patron-blog-detail .pbd-article th {
    background: var(--p-bg-alt);
    padding: 12px 16px;
    text-align: left;
    font-weight: 600;
    color: var(--p-navy);
    border-bottom: 1px solid var(--p-border);
  }
  .patron-blog-detail .pbd-article td {
    padding: 12px 16px;
    border-bottom: 1px solid var(--p-border);
  }
  .patron-blog-detail .pbd-article tr:last-child td { border-bottom: none; }
  .patron-blog-detail .pbd-article code {
    background: var(--p-bg-alt);
    padding: 2px 6px;
    border-radius: 4px;
    font-size: 0.9em;
    font-family: ui-monospace, SFMono-Regular, Menlo, monospace;
    color: var(--p-amber-text);
  }
  .patron-blog-detail .pbd-article pre {
    background: var(--p-navy);
    color: #fff;
    padding: 20px;
    border-radius: var(--p-radius-md);
    overflow-x: auto;
    margin: 24px 0;
    font-size: 14px;
  }
  .patron-blog-detail .pbd-article pre code {
    background: transparent;
    color: inherit;
    padding: 0;
  }
  .patron-blog-detail .pbd-article hr {
    border: 0;
    border-top: 1px solid var(--p-border);
    margin: 40px 0;
  }

  /* ============ SHARE STRIP ============ */
  .patron-blog-detail .pbd-share {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 20px 0;
    margin: 32px 0;
    border-top: 1px solid var(--p-border);
    border-bottom: 1px solid var(--p-border);
  }
  .patron-blog-detail .pbd-share-label {
    font-size: 13px;
    font-weight: 600;
    color: var(--p-charcoal);
    margin-right: 4px;
  }
  .patron-blog-detail .pbd-share-btn {
    width: 36px;
    height: 36px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: var(--p-bg-surface);
    border: 1px solid var(--p-border);
    border-radius: 50%;
    color: var(--p-charcoal);
    transition: background var(--p-t-fast), color var(--p-t-fast), border-color var(--p-t-fast);
  }
  .patron-blog-detail .pbd-share-btn svg { width: 16px; height: 16px; }
  .patron-blog-detail .pbd-share-btn:hover {
    background: var(--p-navy);
    color: #fff;
    border-color: var(--p-navy);
  }
  .patron-blog-detail .pbd-share-btn-wa:hover { background: var(--p-whatsapp); border-color: var(--p-whatsapp); }
  .patron-blog-detail .pbd-share-feedback {
    margin-left: auto;
    font-size: 12px;
    color: var(--p-orange);
    opacity: 0;
    transition: opacity var(--p-t-base);
  }
  .patron-blog-detail .pbd-share-feedback.is-visible { opacity: 1; }

  /* ============ FAQ SECTION ============ */
  .patron-blog-detail .pbd-faq {
    margin: 56px 0 48px;
    padding: 32px;
    background: var(--p-bg-surface);
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-lg);
  }
  .patron-blog-detail .pbd-faq-eyebrow {
    margin: 0 0 8px;
    font-size: 11px;
    font-weight: 600;
    color: var(--p-orange);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .patron-blog-detail .pbd-faq-eyebrow::before {
    content: "";
    display: inline-block;
    width: 6px;
    height: 6px;
    background: var(--p-orange);
    border-radius: 50%;
  }
  .patron-blog-detail .pbd-faq h2 {
    margin: 0 0 8px;
    font-family: 'Barlow', sans-serif;
    font-size: 26px;
    font-weight: 700;
    color: var(--p-navy);
    line-height: 1.25;
  }
  .patron-blog-detail .pbd-faq-subtitle {
    margin: 0 0 24px;
    font-size: 15px;
    color: var(--p-text-muted);
  }
  .patron-blog-detail .pbd-faq-list { display: flex; flex-direction: column; gap: 12px; }
  .patron-blog-detail .pbd-faq-item {
    background: var(--p-bg-alt);
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-md);
    overflow: hidden;
    transition: border-color var(--p-t-fast), box-shadow var(--p-t-fast);
  }
  .patron-blog-detail .pbd-faq-item[open] {
    border-color: var(--p-navy);
    box-shadow: 0 4px 16px rgba(11, 46, 79, 0.06);
  }
  .patron-blog-detail .pbd-faq-summary {
    padding: 16px 20px;
    list-style: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    font-size: 15px;
    font-weight: 600;
    color: var(--p-navy);
    line-height: 1.4;
    user-select: none;
  }
  .patron-blog-detail .pbd-faq-summary::-webkit-details-marker { display: none; }
  .patron-blog-detail .pbd-faq-icon {
    flex-shrink: 0;
    width: 20px;
    height: 20px;
    color: var(--p-orange);
    transition: transform var(--p-t-base);
  }
  .patron-blog-detail .pbd-faq-item[open] .pbd-faq-icon { transform: rotate(45deg); }
  .patron-blog-detail .pbd-faq-content {
    padding: 0 20px 18px;
    font-size: 15px;
    line-height: 1.65;
    color: var(--p-charcoal);
  }
  .patron-blog-detail .pbd-faq-content p { margin: 0 0 12px; }
  .patron-blog-detail .pbd-faq-content p:last-child { margin-bottom: 0; }

  /* ============ STICKY SIDEBAR ============ */
  .patron-blog-detail .pbd-sidebar {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }
  .patron-blog-detail .pbd-sidebar-sticky {
    position: sticky;
    top: 24px;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  /* TOC card */
  .patron-blog-detail .pbd-toc {
    background: var(--p-bg-surface);
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-lg);
    padding: 22px 24px;
  }
  .patron-blog-detail .pbd-toc-heading {
    margin: 0 0 14px;
    font-size: 11px;
    font-weight: 600;
    color: var(--p-navy);
    text-transform: uppercase;
    letter-spacing: 0.08em;
  }
  .patron-blog-detail .pbd-toc-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 2px;
    border-left: 2px solid var(--p-border);
  }
  .patron-blog-detail .pbd-toc-list a {
    display: block;
    padding: 6px 0 6px 14px;
    margin-left: -2px;
    border-left: 2px solid transparent;
    font-size: 13px;
    color: var(--p-text-muted);
    line-height: 1.4;
    transition: color var(--p-t-fast), border-color var(--p-t-fast);
  }
  .patron-blog-detail .pbd-toc-list a:hover { color: var(--p-navy); }
  .patron-blog-detail .pbd-toc-list a.is-active {
    color: var(--p-orange);
    border-left-color: var(--p-orange);
    font-weight: 500;
  }
  .patron-blog-detail .pbd-toc-list .pbd-toc-h3 a {
    padding-left: 28px;
    font-size: 12px;
  }
  .patron-blog-detail .pbd-toc-list .pbd-toc-h3 a.is-active {
    border-left-color: var(--p-orange);
  }

  /* Sidebar contact card (matches listing) */
  .patron-blog-detail .pbd-contact-card {
    background: var(--p-navy);
    color: #fff;
    border-radius: var(--p-radius-lg);
    padding: 24px;
  }
  .patron-blog-detail .pbd-contact-card h3 {
    margin: 0 0 6px;
    font-family: 'Barlow', sans-serif;
    font-size: 18px;
    font-weight: 600;
    color: #fff;
  }
  .patron-blog-detail .pbd-contact-card > p {
    margin: 0 0 18px;
    font-size: 13px;
    color: rgba(255,255,255,0.78);
  }
  .patron-blog-detail .pbd-contact-buttons { display: flex; flex-direction: column; gap: 10px; }

  /* Sidebar trending card (matches listing) */
  .patron-blog-detail .pbd-trending-card {
    background: var(--p-bg-surface);
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-lg);
    padding: 22px 24px;
  }
  .patron-blog-detail .pbd-trending-card-heading {
    margin: 0 0 16px;
    font-size: 11px;
    font-weight: 600;
    color: var(--p-navy);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .patron-blog-detail .pbd-trending-card-heading::before {
    content: "";
    display: inline-block;
    width: 6px;
    height: 6px;
    background: var(--p-orange);
    border-radius: 50%;
    flex-shrink: 0;
  }
  .patron-blog-detail .pbd-trending-card-list { list-style: none; margin: 0; padding: 0; }
  .patron-blog-detail .pbd-trending-card-item {
    border-top: 1px solid var(--p-border);
    padding: 12px 0;
  }
  .patron-blog-detail .pbd-trending-card-item:first-child { border-top: none; padding-top: 0; }
  .patron-blog-detail .pbd-trending-card-item:last-child { padding-bottom: 0; }
  .patron-blog-detail .pbd-trending-card-item a { display: block; color: inherit; }
  .patron-blog-detail .pbd-trending-card-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 5px;
    gap: 8px;
  }
  .patron-blog-detail .pbd-trending-card-cat {
    font-size: 10px;
    font-weight: 600;
    color: var(--p-orange);
    text-transform: uppercase;
    letter-spacing: 0.06em;
  }
  .patron-blog-detail .pbd-trending-card-badge {
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
  .patron-blog-detail .pbd-trending-card-title {
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
  .patron-blog-detail .pbd-trending-card-item a:hover .pbd-trending-card-title { color: var(--p-orange); }

  /* ============ BUTTONS ============ */
  .patron-blog-detail .pbd-btn {
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
  .patron-blog-detail .pbd-btn:active { transform: scale(0.98); }
  .patron-blog-detail .pbd-btn-block { width: 100%; }
  .patron-blog-detail .pbd-btn-orange { background: var(--p-orange); color: #fff; border-color: var(--p-orange); }
  .patron-blog-detail .pbd-btn-orange:hover { background: var(--p-orange-hover); border-color: var(--p-orange-hover); color: #fff; }
  .patron-blog-detail .pbd-btn-whatsapp { background: var(--p-whatsapp); color: #fff; border-color: var(--p-whatsapp); }
  .patron-blog-detail .pbd-btn-whatsapp:hover { background: var(--p-whatsapp-hover); border-color: var(--p-whatsapp-hover); color: #fff; }
  .patron-blog-detail .pbd-btn-outlined-white { background: transparent; color: #fff; border-color: rgba(255,255,255,0.4); }
  .patron-blog-detail .pbd-btn-outlined-white:hover { background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.7); color: #fff; }
  .patron-blog-detail .pbd-btn-icon { width: 16px; height: 16px; flex-shrink: 0; }

  /* ============ RELATED POSTS ============ */
  .patron-blog-detail .pbd-related {
    margin: 64px 0 48px;
  }
  .patron-blog-detail .pbd-related-heading {
    font-family: 'Barlow', sans-serif;
    font-size: 24px;
    font-weight: 700;
    color: var(--p-navy);
    margin: 0 0 24px;
    letter-spacing: -0.015em;
  }
  .patron-blog-detail .pbd-related-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }
  .patron-blog-detail .pbd-related-card {
    background: var(--p-bg-surface);
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-lg);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform var(--p-t-base), box-shadow var(--p-t-base), border-color var(--p-t-base);
  }
  .patron-blog-detail .pbd-related-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(11, 46, 79, 0.06);
    border-color: var(--p-border-strong);
  }
  .patron-blog-detail .pbd-related-card a { color: inherit; display: block; }
  .patron-blog-detail .pbd-related-image {
    width: 100%;
    aspect-ratio: 16 / 9;
    object-fit: cover;
    background: var(--p-bg-alt);
  }
  .patron-blog-detail .pbd-related-body { padding: 16px; flex: 1; display: flex; flex-direction: column; }
  .patron-blog-detail .pbd-related-meta {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 10px;
    font-size: 12px;
    color: var(--p-text-muted);
  }
  .patron-blog-detail .pbd-related-cat-badge {
    display: inline-block;
    padding: 3px 10px;
    border-radius: var(--p-radius-sm);
    background: var(--p-navy);
    color: #fff;
    font-size: 11px;
    font-weight: 500;
  }
  .patron-blog-detail .pbd-related-title {
    margin: 0 0 8px;
    font-family: 'Barlow', sans-serif;
    font-size: 17px;
    font-weight: 600;
    color: var(--p-navy);
    line-height: 1.35;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  .patron-blog-detail .pbd-related-excerpt {
    margin: 0;
    font-size: 13px;
    color: var(--p-charcoal);
    line-height: 1.5;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  /* ============ INLINE COLLAPSIBLE TOC CARD (mobile-only) ============
     Replaces the old FAB+drawer pattern. Visible inline above article body
     on mobile, hidden on desktop where the sticky right-rail TOC takes over. */
  .patron-blog-detail .pbd-toc-inline {
    display: none; /* Desktop: hide. Mobile media query enables. */
    background: var(--p-bg-surface);
    border: 1px solid var(--p-border);
    border-radius: var(--p-radius-lg);
    margin: 0 0 24px;
    overflow: hidden;
    transition: box-shadow var(--p-t-base);
  }
  .patron-blog-detail .pbd-toc-inline[open] {
    box-shadow: 0 4px 12px rgba(11, 46, 79, 0.04);
    border-color: var(--p-border-strong);
  }
  .patron-blog-detail .pbd-toc-inline-summary {
    padding: 14px 18px;
    list-style: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
  }
  .patron-blog-detail .pbd-toc-inline-summary::-webkit-details-marker { display: none; }
  .patron-blog-detail .pbd-toc-inline-label {
    flex: 1;
    font-family: 'Barlow', sans-serif;
    font-size: 15px;
    font-weight: 600;
    color: var(--p-navy);
  }
  .patron-blog-detail .pbd-toc-inline-count {
    font-size: 12px;
    color: var(--p-text-muted);
    font-weight: 500;
  }
  .patron-blog-detail .pbd-toc-inline-icon {
    width: 18px;
    height: 18px;
    color: var(--p-text-muted);
    transition: transform var(--p-t-base);
    flex-shrink: 0;
  }
  .patron-blog-detail .pbd-toc-inline[open] .pbd-toc-inline-icon {
    transform: rotate(180deg);
    color: var(--p-orange);
  }
  .patron-blog-detail .pbd-toc-inline-list {
    list-style: none;
    margin: 0;
    padding: 4px 18px 16px;
    border-top: 1px solid var(--p-border);
  }
  .patron-blog-detail .pbd-toc-inline-list li { margin: 0; }
  .patron-blog-detail .pbd-toc-inline-list a {
    display: block;
    padding: 9px 0;
    color: var(--p-charcoal);
    font-size: 14px;
    line-height: 1.4;
    border-bottom: 1px solid var(--p-bg-alt);
    transition: color var(--p-t-fast);
  }
  .patron-blog-detail .pbd-toc-inline-list li:last-child a { border-bottom: none; }
  .patron-blog-detail .pbd-toc-inline-list a:hover { color: var(--p-navy); }
  .patron-blog-detail .pbd-toc-inline-list a.is-active {
    color: var(--p-orange);
    font-weight: 500;
  }
  .patron-blog-detail .pbd-toc-inline-list .pbd-toc-h3 a {
    padding-left: 16px;
    font-size: 13px;
    color: var(--p-text-muted);
  }

  /* ============ RESPONSIVE ============ */
  @media (max-width: 1024px) {
    .patron-blog-detail .pbd-layout {
      grid-template-columns: minmax(0, 1fr);
      gap: 32px;
    }
    .patron-blog-detail .pbd-sidebar-sticky { position: static; }
    .patron-blog-detail .pbd-toc { display: none; }
    .patron-blog-detail .pbd-toc-inline { display: block; }
    .patron-blog-detail .pbd-related-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 768px) {
    .patron-blog-detail .pbd-hero h1 { font-size: 28px; }
    .patron-blog-detail .pbd-hero-excerpt { font-size: 16px; }
    .patron-blog-detail .pbd-article { font-size: 16px; }
    .patron-blog-detail .pbd-article h2 { font-size: 24px; margin: 36px 0 12px; }
    .patron-blog-detail .pbd-article h3 { font-size: 19px; margin: 28px 0 10px; }
    .patron-blog-detail .pbd-faq { padding: 24px; }
    .patron-blog-detail .pbd-faq h2 { font-size: 22px; }
    .patron-blog-detail .pbd-related-grid { grid-template-columns: 1fr; gap: 16px; }
    .patron-blog-detail .pbd-share { flex-wrap: wrap; }
    .patron-blog-detail .pbd-share-feedback { width: 100%; margin: 8px 0 0; }
  }
</style>
@endpush

@section('content')
<div class="patron-blog-detail">
  <div class="pbd-progress-bar" id="pbdProgressBar"></div>

  <div class="container">

    {{-- ============ BREADCRUMB ============ --}}
    <nav class="pbd-breadcrumb" aria-label="Breadcrumb">
      <a href="{{ route('frontend.index') }}">Home</a>
      <span class="pbd-breadcrumb-sep">›</span>
      <a href="{{ route('frontend.posts.index') }}">Blog</a>
      <span class="pbd-breadcrumb-sep">›</span>
      <span aria-current="page">{{ Str::limit($post->title, 60) }}</span>
    </nav>

    {{-- ============ ARTICLE HERO ============ --}}
    <header class="pbd-hero">
      <div class="pbd-hero-meta">
        @if($primaryCategory)
          <a href="{{ route('frontend.posts.index', ['category' => $primaryCategory->slug]) }}" class="pbd-hero-cat">{{ $primaryCategory->name }}</a>
          <span class="pbd-hero-meta-divider">·</span>
        @endif
        <span>{{ $readingMinutes }} min read</span>
        <span class="pbd-hero-meta-divider">·</span>
        <span>{{ ($post->published_at ?? $post->updated_at)->format('M j, Y') }}</span>
        @if($post->updated_at && $post->published_at && $post->updated_at->gt($post->published_at->addDays(7)))
          <span class="pbd-hero-meta-divider">·</span>
          <span>Updated {{ $post->updated_at->format('M j, Y') }}</span>
        @endif
      </div>

      <h1>{{ $post->title }}</h1>

      {{-- @if($post->excerpt || $post->description)
        <p class="pbd-hero-excerpt">{{ $post->excerpt ?: $post->description }}</p>
      @endif --}}

      @if($primaryAuthor)
        @php
          $authorSlug = Str::slug($primaryAuthor->name);
          $authorUrl = url('/authorhub/' . $authorSlug);
        @endphp
        <a class="pbd-hero-author" href="{{ $authorUrl }}" aria-label="View author profile: {{ $primaryAuthor->name }}">
          <div class="pbd-hero-author-avatar-wrap" aria-hidden="true">
            @if($primaryAuthor->profile_image)
              <img class="pbd-hero-author-avatar pbd-hero-author-avatar-img" src="{{ Storage::url($primaryAuthor->profile_image) }}" alt="" loading="eager" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
              <div class="pbd-hero-author-avatar pbd-hero-author-avatar-fallback" style="display:none;">{{ strtoupper(substr($primaryAuthor->name, 0, 1)) }}</div>
            @else
              <div class="pbd-hero-author-avatar pbd-hero-author-avatar-fallback">{{ strtoupper(substr($primaryAuthor->name, 0, 1)) }}</div>
            @endif
          </div>
          <div class="pbd-hero-author-text">
            <p class="pbd-hero-author-name">{{ $primaryAuthor->name }}</p>
            <p class="pbd-hero-author-byline">Chartered Accountant · <span class="pbd-hero-author-cta">View profile</span></p>
          </div>
          <svg class="pbd-hero-author-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </a>
      @endif

      @if($post->featured_image)
        <img class="pbd-hero-image" src="{{ $post->featured_image_url }}" alt="{{ $post->featured_image_alt ?? $post->title }}" loading="eager">
      @endif
    </header>

    {{-- ============ MAIN LAYOUT ============ --}}
    <div class="pbd-layout">

      {{-- Article body + FAQ --}}
      <article class="pbd-article-wrap">

        {{-- Inline collapsible TOC (mobile-only). Desktop uses sticky right-rail TOC instead.
             Auto-populated by JS by parsing H2/H3 from article body. --}}
        <details class="pbd-toc-inline" id="pbdTocInline">
          <summary class="pbd-toc-inline-summary">
            <span class="pbd-toc-inline-label">In this guide</span>
            <span class="pbd-toc-inline-count" id="pbdTocInlineCount" aria-hidden="true"></span>
            <svg class="pbd-toc-inline-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </summary>
          <ul class="pbd-toc-inline-list" id="pbdTocInlineList"></ul>
        </details>

        {{-- Quick answer box - high-value AEO/GEO element. Editor populates `key_points` in CMS. --}}
        @if(!empty($post->key_points))
                @php
                            // Fix heading hierarchy in content
                            // Convert H3 tags to H2 if they appear before any H2 tag
                            $key_points = $post->key_points;
                            
                            // Check if there's any H2 tag in the content
                            $hasH2 = preg_match('/<h2[^>]*>/', $key_points);
                            
                            if (!$hasH2) {
                                // If no H2 exists, convert all H3 to H2
                                $key_points = preg_replace('/<h3([^>]*)>/', '<h2$1>', $key_points);
                                $key_points = preg_replace('/<\/h3>/', '</h2>', $key_points);
                            } else {
                                // Convert H3 to H2 only before the first H2
                                $parts = preg_split('/(<h2[^>]*>)/', $key_points, 2, PREG_SPLIT_DELIM_CAPTURE);
                                if (count($parts) > 1) {
                                    $parts[0] = preg_replace('/<h3([^>]*)>/', '<h2$1>', $parts[0]);
                                    $parts[0] = preg_replace('/<\/h3>/', '</h2>', $parts[0]);
                                    $content = implode('', $parts);
                                }
                            }
                        @endphp 
                                           
          <aside class="pbd-quick-answer" aria-labelledby="pbdQuickAnswerHeading">
            <p class="pbd-quick-answer-eyebrow" id="pbdQuickAnswerHeading">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
              Quick answer
            </p>
            <div class="pbd-quick-answer-body"> {!! $key_points !!}</div>
          </aside>
        @endif

        <div class="pbd-article" id="pbdArticleBody">
          {!! $post->content !!}
        </div>

        {{-- Share strip --}}
        <div class="pbd-share">
          <span class="pbd-share-label">Share this guide:</span>
          <a href="https://wa.me/?text={{ urlencode($post->title . ' — ' . url()->current()) }}" target="_blank" rel="noopener" class="pbd-share-btn pbd-share-btn-wa" aria-label="Share on WhatsApp" title="WhatsApp">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          </a>
          <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener" class="pbd-share-btn" aria-label="Share on LinkedIn" title="LinkedIn">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.063 2.063 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
          <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" target="_blank" rel="noopener" class="pbd-share-btn" aria-label="Share on X" title="X (Twitter)">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <button type="button" class="pbd-share-btn" id="pbdCopyLinkBtn" aria-label="Copy link" title="Copy link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
          </button>
          <span class="pbd-share-feedback" id="pbdShareFeedback">Link copied!</span>
        </div>

        {{-- FAQ Section --}}
        @if($post->faq_enabled && !empty($post->faq_items) && is_array($post->faq_items) && count($post->faq_items) > 0)
          <section class="pbd-faq" aria-labelledby="pbdFaqHeading">
            <p class="pbd-faq-eyebrow">Common Questions</p>
            <h2 id="pbdFaqHeading">{{ $post->faq_title ?: 'Frequently asked questions' }}</h2>
            @if($post->faq_subtitle)
              <p class="pbd-faq-subtitle">{{ $post->faq_subtitle }}</p>
            @endif
            <div class="pbd-faq-list">
              @foreach($post->faq_items as $faq)
                @if(!empty($faq['question']) && !empty($faq['answer']))
                  <details class="pbd-faq-item">
                    <summary class="pbd-faq-summary">
                      <span>{{ $faq['question'] }}</span>
                      <svg class="pbd-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </summary>
                    <div class="pbd-faq-content">{!! $faq['answer'] !!}</div>
                  </details>
                @endif
              @endforeach
            </div>
          </section>
        @endif
      </article>

      {{-- Sidebar --}}
      <aside class="pbd-sidebar">
        <div class="pbd-sidebar-sticky">

          {{-- TOC (auto-generated by JS) --}}
          <nav class="pbd-toc" id="pbdToc" aria-label="Table of contents">
            <h3 class="pbd-toc-heading">In this guide</h3>
            <ul class="pbd-toc-list" id="pbdTocList">
              <li><a href="#" style="color: var(--p-text-muted); font-style: italic;">Loading...</a></li>
            </ul>
          </nav>

          {{-- Contact card --}}
          <div class="pbd-contact-card">
            <h3>Stuck on something specific?</h3>
            <p>Free 15-min consultation with a partner CA.</p>
            <div class="pbd-contact-buttons">
              <a href="tel:+919459456700" class="pbd-btn pbd-btn-orange pbd-btn-block">
                <svg class="pbd-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call +91 945 945 6700
              </a>
              <a href="https://wa.me/919459456700?text={{ urlencode('Hi Patron Accounting, I have a question about your guide: ' . $post->title) }}" class="pbd-btn pbd-btn-whatsapp pbd-btn-block" target="_blank" rel="noopener">
                <svg class="pbd-btn-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                WhatsApp Us
              </a>
              <a href="mailto:sales@patronaccounting.com?subject={{ urlencode('Question about: ' . $post->title) }}" class="pbd-btn pbd-btn-outlined-white pbd-btn-block">
                <svg class="pbd-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                Email Us
              </a>
            </div>
          </div>

          {{-- Trending sidebar --}}
          @if($sidebarTrending->isNotEmpty())
            <div class="pbd-trending-card" aria-labelledby="pbdSidebarTrendingHeading">
              <h3 class="pbd-trending-card-heading" id="pbdSidebarTrendingHeading">Trending now</h3>
              <ul class="pbd-trending-card-list">
                @foreach($sidebarTrending as $tp)
                  @php
                    $tpCat = $tp->categories->first();
                    $tpBadge = !empty($tp->trending_badge) ? $tp->trending_badge : null;
                  @endphp
                  <li class="pbd-trending-card-item">
                    <a href="{{ route('frontend.posts.blog', $tp->slug) }}">
                      <div class="pbd-trending-card-meta">
                        <span class="pbd-trending-card-cat">{{ $tpCat ? $tpCat->name : 'Guide' }}</span>
                        @if($tpBadge)
                          <span class="pbd-trending-card-badge">{{ $tpBadge }}</span>
                        @endif
                      </div>
                      <h4 class="pbd-trending-card-title">{{ $tp->title }}</h4>
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          @endif

        </div>
      </aside>

    </div>

    {{-- ============ RELATED POSTS ============ --}}
    @if($relatedPosts->isNotEmpty())
      <section class="pbd-related" aria-labelledby="pbdRelatedHeading">
        <h2 class="pbd-related-heading" id="pbdRelatedHeading">Read next</h2>
        <div class="pbd-related-grid">
          @foreach($relatedPosts as $rp)
            @php
              $rpCat = $rp->categories->first();
              $rpReading = max(1, ceil(str_word_count(strip_tags($rp->content)) / 200));
            @endphp
            <article class="pbd-related-card">
              <a href="{{ route('frontend.posts.blog', $rp->slug) }}">
                @if($rp->featured_image)
                  <img class="pbd-related-image" src="{{ $rp->featured_image_url }}" alt="{{ $rp->title }}" loading="lazy">
                @else
                  <div class="pbd-related-image" style="display: flex; align-items: center; justify-content: center; color: var(--p-text-muted);"><i class="bi bi-image" style="font-size: 2rem;"></i></div>
                @endif
                <div class="pbd-related-body">
                  <div class="pbd-related-meta">
                    @if($rpCat)
                      <span class="pbd-related-cat-badge">{{ $rpCat->name }}</span>
                      <span style="color: var(--p-border-strong);">·</span>
                    @endif
                    <span>{{ $rpReading }} min read</span>
                  </div>
                  <h3 class="pbd-related-title">{{ $rp->title }}</h3>
                  @if($rp->excerpt || $rp->description)
                    <p class="pbd-related-excerpt">{{ Str::limit(strip_tags($rp->excerpt ?: $rp->description), 110) }}</p>
                  @endif
                </div>
              </a>
            </article>
          @endforeach
        </div>
      </section>
    @endif

  </div>
</div>

@endsection

@push('scripts')
<script>
  // ============ READING PROGRESS BAR ============
  (function(){
    const bar = document.getElementById('pbdProgressBar');
    const article = document.getElementById('pbdArticleBody');
    if (!bar || !article) return;
    function update() {
      const rect = article.getBoundingClientRect();
      const total = article.offsetHeight - window.innerHeight;
      const scrolled = -rect.top;
      const pct = total > 0 ? Math.max(0, Math.min(100, (scrolled / total) * 100)) : 0;
      bar.style.width = pct + '%';
    }
    window.addEventListener('scroll', update, { passive: true });
    update();
  })();

  // ============ AUTO-GENERATED TABLE OF CONTENTS ============
  (function(){
    const article = document.getElementById('pbdArticleBody');
    const tocList = document.getElementById('pbdTocList');
    const inlineTocList = document.getElementById('pbdTocInlineList');
    const inlineTocCount = document.getElementById('pbdTocInlineCount');
    const inlineTocCard = document.getElementById('pbdTocInline');
    if (!article || !tocList) return;

    const headings = article.querySelectorAll('h2, h3');
    if (headings.length < 2) {
      tocList.innerHTML = '';
      const tocCard = document.getElementById('pbdToc');
      if (tocCard) tocCard.style.display = 'none';
      if (inlineTocCard) inlineTocCard.style.display = 'none';
      return;
    }

    let html = '';
    const items = [];
    headings.forEach((h, i) => {
      const id = h.id || 'pbd-section-' + i;
      h.id = id;
      const isH3 = h.tagName === 'H3';
      const liClass = isH3 ? 'pbd-toc-h3' : '';
      html += `<li class="${liClass}"><a href="#${id}" data-toc-id="${id}">${h.textContent.trim()}</a></li>`;
      items.push({ id, el: h });
    });
    tocList.innerHTML = html;
    if (inlineTocList) inlineTocList.innerHTML = html;
    if (inlineTocCount) inlineTocCount.textContent = `(${items.length})`;

    // Smooth scroll. On mobile, close the inline TOC after clicking so the user lands at the section.
    document.querySelectorAll('[data-toc-id]').forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        const target = document.getElementById(link.dataset.tocId);
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          // Close inline TOC card after navigation (mobile only)
          if (inlineTocCard && inlineTocCard.open && window.matchMedia('(max-width: 1024px)').matches) {
            setTimeout(() => { inlineTocCard.open = false; }, 300);
          }
        }
      });
    });

    // Active section highlighting via IntersectionObserver
    if ('IntersectionObserver' in window) {
      const links = document.querySelectorAll('[data-toc-id]');
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const id = entry.target.id;
            links.forEach(l => {
              l.classList.toggle('is-active', l.dataset.tocId === id);
            });
          }
        });
      }, { rootMargin: '-100px 0px -70% 0px', threshold: 0 });
      items.forEach(item => observer.observe(item.el));
    }
  })();

  // ============ COPY LINK BUTTON ============
  (function(){
    const btn = document.getElementById('pbdCopyLinkBtn');
    const feedback = document.getElementById('pbdShareFeedback');
    if (!btn || !feedback) return;
    btn.addEventListener('click', async () => {
      const url = window.location.href;
      try {
        if (navigator.clipboard && window.isSecureContext) {
          await navigator.clipboard.writeText(url);
        } else {
          const ta = document.createElement('textarea');
          ta.value = url;
          ta.style.position = 'fixed';
          ta.style.opacity = '0';
          document.body.appendChild(ta);
          ta.select();
          document.execCommand('copy');
          document.body.removeChild(ta);
        }
        feedback.classList.add('is-visible');
        setTimeout(() => feedback.classList.remove('is-visible'), 2000);
      } catch (err) {
        feedback.textContent = 'Copy failed';
        feedback.classList.add('is-visible');
      }
    });
  })();
</script>
@endpush