{{-- ============================================================
     PATRON ACCOUNTING - CUSTOM PAGINATOR VIEW
     Drop-in replacement for Laravel's default paginator markup.

     Place at: resources/views/vendor/pagination/patron.blade.php

     Used by: $posts->links('vendor.pagination.patron')

     This view does NOT require Bootstrap or Tailwind.
     All styling lives in the parent Blade's CSS namespace
     (e.g. .patron-blog .pb-pagination-link), making this fully
     decoupled from any global CSS framework choices.

     Renders: Previous | 1 | 2 | ... | 5 | 6 | 7 | ... | 99 | Next
     - Compact "window" of pages around current (uses onEachSide())
     - Disabled state for unavailable Prev/Next
     - Active state for current page
     - Ellipsis for skipped page ranges
============================================================= --}}

@if ($paginator->hasPages())
    <nav class="pb-pagination-nav" role="navigation" aria-label="Pagination Navigation">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="pb-pagination-disabled pb-pagination-prev" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <svg class="pb-pagination-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"></polyline></svg>
                <span>Previous</span>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pb-pagination-link pb-pagination-prev" aria-label="@lang('pagination.previous')">
                <svg class="pb-pagination-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"></polyline></svg>
                <span>Previous</span>
            </a>
        @endif

        {{-- Page numbers --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="pb-pagination-dots" aria-hidden="true">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="pb-pagination-current" aria-current="page" aria-label="Page {{ $page }}, current page">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="pb-pagination-link" aria-label="Go to page {{ $page }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pb-pagination-link pb-pagination-next" aria-label="@lang('pagination.next')">
                <span>Next</span>
                <svg class="pb-pagination-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
        @else
            <span class="pb-pagination-disabled pb-pagination-next" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span>Next</span>
                <svg class="pb-pagination-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </span>
        @endif

    </nav>
@endif
