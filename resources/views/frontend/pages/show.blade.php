@extends('layouts.app')

@section('title', $page->title)

@push('styles')
<style>
    .page-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 4rem 0;
        margin-bottom: 2rem;
    }
    
    .page-content {
        font-size: 1.1rem;
        line-height: 1.8;
    }
    
    .page-meta {
        background: #f8f9fa;
        padding: 1rem;
        border-radius: 0.5rem;
        margin-bottom: 2rem;
    }
    
    .page-categories {
        margin-top: 2rem;
    }
    
    .category-badge {
        background: #e3f2fd;
        color: #1976d2;
        padding: 0.25rem 0.75rem;
        border-radius: 1rem;
        text-decoration: none;
        font-size: 0.875rem;
        margin-right: 0.5rem;
        display: inline-block;
        margin-bottom: 0.5rem;
    }
    
    .category-badge:hover {
        background: #bbdefb;
        color: #1565c0;
    }
</style>
@endpush

@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-4 mb-3">{{ $page->title }}</h1>
                <p class="lead mb-0">
                    <i class="bi bi-calendar3"></i>
                    Published on {{ $page->published_at->format('F j, Y') }}
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- Page Meta Information -->
            <div class="page-meta">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <small class="text-muted">
                            <i class="bi bi-clock"></i>
                            Last updated {{ $page->updated_at->format('F j, Y \a\t g:i A') }}
                        </small>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <small class="text-muted">
                            <i class="bi bi-eye"></i>
                            Page ID: {{ $page->id }}
                        </small>
                    </div>
                </div>
            </div>
            
            <!-- Page Content -->
            <div class="page-content">
                {!! $page->content !!}
            </div>
            
            <!-- Page Categories -->
            @if($page->categories->count() > 0)
                <div class="page-categories">
                    <h5><i class="bi bi-tags"></i> Categories</h5>
                    @foreach($page->categories as $category)
                        <a href="{{ url('/page-categories/' . $category->slug) }}" class="category-badge">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            @endif
            
            <!-- Navigation -->
            <div class="row mt-5 pt-4 border-top">
                <div class="col-md-6">
                    <a href="{{ route('frontend.pages.index') }}" class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left"></i> Back to Pages
                    </a>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="{{ route('frontend.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-house"></i> Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection