@extends('layouts.app')

@section('title', $page->title)

@push('styles')
<style>
    .page-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 6rem 0;
        margin-bottom: 0;
    }
    
    .page-content {
        font-size: 1.1rem;
        line-height: 1.8;
    }
    
    .full-width-content {
        max-width: 100%;
        padding: 0;
    }
    
    .content-section {
        padding: 4rem 0;
    }
    
    .content-section:nth-child(even) {
        background-color: #f8f9fa;
    }
</style>
@endpush

@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-3 mb-4">{{ $page->title }}</h1>
                @if($page->excerpt)
                    <p class="lead mb-0">{{ $page->excerpt }}</p>
                @endif
                <div class="mt-4">
                    <small class="opacity-75">
                        <i class="bi bi-calendar3"></i>
                        {{ $page->published_at->format('F j, Y') }}
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Featured Image Full Width -->
@if($page->featured_image)
    <div class="w-100 position-relative">
        <img src="{{ $page->featured_image_url }}" alt="{{ $page->title }}" 
             class="w-100" style="height: 400px; object-fit: cover;">
        <div class="position-absolute bottom-0 start-0 w-100 bg-gradient-to-top from-dark to-transparent p-4">
            <div class="container">
                <p class="text-white mb-0">{{ $page->title }}</p>
            </div>
        </div>
    </div>
@endif

<div class="full-width-content">
    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Categories Full Width -->
@if($page->categories->count() > 0)
    <div class="content-section bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="mb-4">Related Topics</h4>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        @foreach($page->categories as $category)
                            <a href="{{ url('/page-categories/' . $category->slug) }}" 
                               class="btn btn-outline-light">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<!-- Call to Action Section -->
<div class="content-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h3 class="mb-4">Ready to Get Started?</h3>
                <p class="lead text-muted mb-4">
                    Have questions or need more information? We're here to help!
                </p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="/contact-us" class="btn btn-primary btn-lg">
                        <i class="bi bi-envelope"></i> Contact Us
                    </a>
                    <a href="{{ route('frontend.pages.index') }}" class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-collection"></i> More Pages
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Meta Footer -->
<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center border-top pt-4">
                    <div>
                        <small class="text-muted">
                            <i class="bi bi-clock"></i>
                            Last updated {{ $page->updated_at->format('F j, Y') }}
                        </small>
                    </div>
                    <div>
                        <a href="{{ route('frontend.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-house"></i> Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection