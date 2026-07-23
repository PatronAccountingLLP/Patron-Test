@extends('layouts.app')

@section('title', 'All Pages')

@push('styles')
<style>
    .pages-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 3rem 0;
        margin-bottom: 2rem;
    }
    
    .page-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .page-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
    .page-card .card-title {
        color: #333;
        font-weight: 600;
    }
    
    .page-excerpt {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
    }
    
    .page-meta {
        font-size: 0.875rem;
        color: #888;
    }
    
    .category-badge {
        background: #e3f2fd;
        color: #1976d2;
        padding: 0.15rem 0.5rem;
        border-radius: 0.75rem;
        font-size: 0.75rem;
        margin-right: 0.25rem;
    }
    
    .search-box {
        background: white;
        border-radius: 0.5rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
    }
</style>
@endpush

@section('content')
<div class="pages-header">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-3">All Pages</h1>
                <p class="lead">Explore our collection of informational pages</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Search and Filter -->
    <div class="search-box p-4 mb-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <form method="GET" action="{{ route('frontend.pages.index') }}">
                    <div class="input-group">
                        <input type="text" 
                               class="form-control" 
                               name="search" 
                               value="{{ request('search') }}" 
                               placeholder="Search pages...">
                        <button class="btn btn-primary" style="background: #2b8a6a !important;" type="submit">
                            <i class="bi bi-search"></i> Search
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 text-md-end">
                <div class="page-meta">
                    <i class="bi bi-file-text"></i>
                    {{ $pages->total() }} {{ Str::plural('page', $pages->total()) }} found
                </div>
            </div>
        </div>
    </div>

    <!-- Pages Grid -->
    @if($pages->count() > 0)
        <div class="row">
            @foreach($pages as $page)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card page-card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ url('/' . $page->slug) }}" class="text-decoration-none">
                                    {{ $page->title }}
                                </a>
                            </h5>
                            
                            <div class="page-meta mb-3">
                                <i class="bi bi-calendar3"></i>
                                {{ $page->published_at->format('M j, Y') }}
                                @if($page->categories->count() > 0)
                                    <div class="mt-2">
                                        @foreach($page->categories->take(2) as $category)
                                            <span class="category-badge">{{ $category->name }}</span>
                                        @endforeach
                                        @if($page->categories->count() > 2)
                                            <span class="category-badge">+{{ $page->categories->count() - 2 }} more</span>
                                        @endif
                                    </div>
                                @endif
                            </div>
                            
                            <div class="page-excerpt mb-3">
                                {{ Str::limit(strip_tags($page->content), 150) }}
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ url('/' . $page->slug) }}" class="btn btn-primary btn-sm">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                                <small class="page-meta">
                                    <i class="bi bi-clock"></i>
                                    {{ $page->updated_at->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $pages->links() }}
        </div>
    @else
        <div class="text-center py-5">
            <i class="bi bi-file-text display-1 text-muted mb-3"></i>
            <h3>No Pages Found</h3>
            <p class="text-muted">
                @if(request('search'))
                    No pages match your search criteria.
                    <a href="{{ route('frontend.pages.index') }}" class="btn btn-outline-primary mt-2">
                        <i class="bi bi-arrow-left"></i> View All Pages
                    </a>
                @else
                    There are no pages to display at the moment.
                @endif
            </p>
        </div>
    @endif
</div>
@endsection