@extends('layouts.app')

@section('title', $category->name . ' Posts')
@section('meta_description', 'Browse all posts in the ' . $category->name . ' category')

@section('content')
<div class="category-page-wrapper">
    <!-- Hero Section with Gradient -->
    <section class="hero-section">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="row align-items-center min-vh-60">
                    <div class="col-lg-8 mx-auto text-center text-white">
                        <div class="hero-content">
                            <div class="category-badge mb-4">
                                <i class="bi bi-bookmark-star me-2"></i>
                                Category Archive
                            </div>
                            
                            <h1 class="hero-title mb-4">
                                {{ $category->name }}
                            </h1>
                            
                            @if($category->description)
                                <p class="hero-description mb-4">
                                    {{ $category->description }}
                                </p>
                            @endif
                            
                            <div class="hero-stats">
                                <div class="stats-item">
                                    <span class="stats-number">{{ $posts->total() }}</span>
                                    <span class="stats-label">{{ Str::plural('Article', $posts->total()) }}</span>
                                </div>
                                <div class="stats-divider"></div>
                                <div class="stats-item">
                                    <span class="stats-number">{{ $category->name }}</span>
                                    <span class="stats-label">Category</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Bar -->
    <section class="navigation-bar py-3 bg-white shadow-sm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('frontend.index') }}" class="nav-link">
                                    <i class="bi bi-house-door me-1"></i>Home
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('frontend.posts.index') }}" class="nav-link">Blog</a>
                            </li>
                            <li class="breadcrumb-item active">{{ $category->name }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="view-options">
                        <span class="text-muted me-3">{{ $posts->total() }} results</span>
                        <div class="btn-group btn-group-sm" role="group">
                            <button type="button" class="btn btn-outline-secondary active">
                                <i class="bi bi-grid-3x3-gap"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="bi bi-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content py-5">
        <div class="container">
            @if($posts->count() > 0)
                <div class="posts-grid">
                    @foreach($posts as $post)
                        <article class="post-card">
                            <div class="post-image-container">
                                @if($post->featured_image)
                                    <img src="{{ $post->featured_image_url }}" 
                                         class="post-image" 
                                         alt="{{ $post->title }}">
                                @else
                                    <div class="post-image-placeholder">
                                        <i class="bi bi-image"></i>
                                    </div>
                                @endif
                                <div class="post-overlay">
                                    <div class="post-categories">
                                        @foreach($post->categories->take(2) as $cat)
                                            <span class="post-category {{ $cat->id === $category->id ? 'primary' : 'secondary' }}">
                                                {{ $cat->name }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                            <div class="post-content">
                                <div class="post-meta">
                                    <span class="post-date">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        {{ $post->published_at->format('M j, Y') }}
                                    </span>
                                    <span class="reading-time">
                                        <i class="bi bi-clock me-1"></i>
                                        {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read
                                    </span>
                                </div>
                                
                                <h2 class="post-title">
                                    <a href="{{ route('frontend.posts.blog', $post->slug) }}">
                                        {{ $post->title }}
                                    </a>
                                </h2>
                                
                                <p class="post-excerpt">
                                    @if($post->excerpt)
                                        {{ Str::limit($post->excerpt, 150) }}
                                    @else
                                        {{ Str::limit(strip_tags($post->content), 150) }}
                                    @endif
                                </p>
                                
                                <div class="post-footer">
                                    <a href="{{ route('frontend.posts.blog', $post->slug) }}" class="read-more-btn">
                                        <span>Read Full Article</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <div class="post-actions">
                                        <button class="action-btn" title="Like">
                                            <i class="bi bi-heart"></i>
                                        </button>
                                        <button class="action-btn" title="Bookmark">
                                            <i class="bi bi-bookmark"></i>
                                        </button>
                                        <button class="action-btn" title="Share">
                                            <i class="bi bi-share"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @else
                <div class="empty-state">
                    <div class="empty-state-content">
                        <div class="empty-state-icon">
                            <i class="bi bi-journal-x"></i>
                        </div>
                        <h3 class="empty-state-title">No Articles Found</h3>
                        <p class="empty-state-description">
                            We couldn't find any published articles in the "{{ $category->name }}" category yet. 
                            Check back soon for new content!
                        </p>
                        <div class="empty-state-actions">
                            <a href="{{ route('frontend.posts.index') }}" class="btn btn-primary" style="background: #2b8a6a !important;">
                                <i class="bi bi-newspaper me-2"></i>
                                Browse All Articles
                            </a>
                            <a href="{{ route('frontend.index') }}" class="btn btn-outline-primary">
                                <i class="bi bi-house-door me-2"></i>
                                Back to Home
                            </a>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Pagination -->
            @if($posts->hasPages())
                <div class="pagination-wrapper">
                    <div class="custom-pagination">
                        {{ $posts->links() }}
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h3 class="cta-title">Stay Updated with SequelZone Insights</h3>
                        <p class="cta-description">
                            Get the latest articles on accounting, business registration, and financial services delivered to your inbox.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="{{ route('frontend.index') }}#contact" class="btn btn-cta">
                            <i class="bi bi-envelope me-2"></i>
                            Subscribe Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('styles')
<style>
/* Category Page Modern Styles */
.category-page-wrapper {
    background: #f8f9fa;
    min-height: 100vh;
}

/* Hero Section */
.hero-section {
    position: relative;
    overflow: hidden;
}

.hero-background {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.1);
}

.min-vh-60 {
    min-height: 60vh;
}

.hero-content {
    position: relative;
    z-index: 2;
}

.category-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 10px 24px;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    color: white;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 1.5rem;
}

.hero-description {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
}

.hero-stats {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    margin-top: 2rem;
}

.stats-item {
    text-align: center;
}

.stats-number {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    color: white;
}

.stats-label {
    display: block;
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.8);
    margin-top: 0.25rem;
}

.stats-divider {
    width: 1px;
    height: 40px;
    background: rgba(255, 255, 255, 0.3);
}

/* Navigation Bar */
.navigation-bar {
    border-bottom: 1px solid #e9ecef;
}

.breadcrumb {
    background: none;
    padding: 0;
    margin: 0;
}

.breadcrumb .nav-link {
    color: #6c757d;
    text-decoration: none;
    padding: 0;
}

.breadcrumb .nav-link:hover {
    color: #ff6600;
}

.breadcrumb-item.active {
    color: #ff6600;
    font-weight: 600;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "/";
    color: #6c757d;
    padding: 0 0.5rem;
}

.view-options {
    display: flex;
    align-items: center;
    gap: 1rem;
}

/* Posts Grid */
.posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.post-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    position: relative;
}

.post-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.post-image-container {
    position: relative;
    height: 240px;
    overflow: hidden;
}

.post-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.post-card:hover .post-image {
    transform: scale(1.05);
}

.post-image-placeholder {
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #6c757d;
    font-size: 3rem;
}

.post-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.3) 100%);
    display: flex;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 1rem;
}

.post-categories {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.post-category {
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    backdrop-filter: blur(10px);
}

.post-category.primary {
    background: rgba(255, 102, 0, 0.9);
    color: white;
}

.post-category.secondary {
    background: rgba(255, 255, 255, 0.9);
    color: #495057;
}

.post-content {
    padding: 1.5rem;
}

.post-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
    font-size: 0.85rem;
    color: #6c757d;
}

.post-date,
.reading-time {
    display: flex;
    align-items: center;
}

.post-title {
    font-size: 1.25rem;
    font-weight: 700;
    line-height: 1.4;
    margin-bottom: 1rem;
}

.post-title a {
    color: #212529;
    text-decoration: none;
    transition: color 0.3s ease;
}

.post-title a:hover {
    color: #ff6600;
}

.post-excerpt {
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.post-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.read-more-btn {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #ff6600;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.read-more-btn:hover {
    color: #e55a00;
    gap: 0.75rem;
}

.post-actions {
    display: flex;
    gap: 0.5rem;
}

.action-btn {
    width: 36px;
    height: 36px;
    border: none;
    background: #f8f9fa;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #6c757d;
    transition: all 0.3s ease;
    cursor: pointer;
}

.action-btn:hover {
    background: #ff6600;
    color: white;
    transform: translateY(-2px);
}

/* Empty State */
.empty-state {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 400px;
    text-align: center;
}

.empty-state-content {
    max-width: 500px;
}

.empty-state-icon {
    font-size: 4rem;
    color: #6c757d;
    margin-bottom: 1.5rem;
}

.empty-state-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #212529;
    margin-bottom: 1rem;
}

.empty-state-description {
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 2rem;
}

.empty-state-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

/* Pagination */
.pagination-wrapper {
    display: flex;
    justify-content: center;
    margin-top: 3rem;
}

.custom-pagination .page-link {
    border: none;
    color: #6c757d;
    padding: 0.75rem 1rem;
    margin: 0 0.25rem;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.custom-pagination .page-link:hover {
    background: #ff6600;
    color: white;
    transform: translateY(-2px);
}

.custom-pagination .page-item.active .page-link {
    background: #ff6600;
    color: white;
    box-shadow: 0 4px 12px rgba(255, 102, 0, 0.3);
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
    padding: 4rem 0;
    margin-top: 4rem;
}

.cta-content {
    color: white;
}

.cta-title {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.cta-description {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
    margin: 0;
}

.btn-cta {
    background: #ff6600;
    border: none;
    color: white;
    padding: 0.75rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
}

.btn-cta:hover {
    background: #e55a00;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(255, 102, 0, 0.3);
}

/* Responsive Design */
@media (max-width: 992px) {
    .posts-grid {
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 1.5rem;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-stats {
        flex-direction: column;
        gap: 1rem;
    }
    
    .stats-divider {
        width: 40px;
        height: 1px;
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .posts-grid {
        grid-template-columns: 1fr;
    }
    
    .view-options {
        justify-content: center;
        margin-top: 1rem;
    }
    
    .navigation-bar .row {
        text-align: center;
    }
    
    .empty-state-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .empty-state-actions .btn {
        width: 200px;
    }
    
    .cta-section .row {
        text-align: center;
    }
    
    .cta-section .col-lg-4 {
        margin-top: 2rem;
    }
}

@media (max-width: 576px) {
    .hero-content {
        padding: 1rem;
    }
    
    .category-badge {
        padding: 8px 16px;
        font-size: 0.8rem;
    }
    
    .post-content {
        padding: 1rem;
    }
    
    .post-footer {
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
    }
}

/* Loading Animation */
.category-page-wrapper {
    animation: fadeIn 0.8s ease-in-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
@endpush
@endsection