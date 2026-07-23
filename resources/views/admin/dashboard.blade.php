@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Dashboard Header -->
<div style="margin-bottom: var(--space-8);">
    <div>
        <h1 class="h1">Dashboard Overview</h1>
        <p class="text-small" style="color: var(--neutral-gray);">Welcome back, {{ Auth::user()->name }}! Here's what's happening with your website.</p>
    </div>
</div>

<!-- Statistics Cards Grid -->
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: var(--space-6); margin-bottom: var(--space-8);">
    <!-- Posts Stats -->
    <div class="stats-card">
        <div style="display: flex; justify-content: space-between; align-items: start;">
            <div>
                <div class="stats-value" style="color: var(--primary-blue);">{{ $stats['posts'] }}</div>
                <div class="stats-label">Total Posts</div>
                <div class="text-small" style="color: var(--success-green); margin-top: var(--space-1);">
                    <i class="bi bi-arrow-up"></i> Published content
                </div>
            </div>
            <div style="width: 48px; height: 48px; background: rgba(30, 58, 138, 0.1); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-file-earmark-text" style="font-size: 24px; color: var(--primary-blue);"></i>
            </div>
        </div>
    </div>

    <!-- Pages Stats -->
    <div class="stats-card">
        <div style="display: flex; justify-content: space-between; align-items: start;">
            <div>
                <div class="stats-value" style="color: var(--primary-teal);">{{ $stats['pages'] }}</div>
                <div class="stats-label">Total Pages</div>
                <div class="text-small" style="color: var(--success-green); margin-top: var(--space-1);">
                    <i class="bi bi-arrow-up"></i> Static content
                </div>
            </div>
            <div style="width: 48px; height: 48px; background: rgba(13, 148, 136, 0.1); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-file-earmark" style="font-size: 24px; color: var(--primary-teal);"></i>
            </div>
        </div>
    </div>

    <!-- Categories Stats -->
    <div class="stats-card">
        <div style="display: flex; justify-content: space-between; align-items: start;">
            <div>
                <div class="stats-value" style="color: var(--accent-orange);">{{ $stats['post_categories'] }}</div>
                <div class="stats-label">Post Categories</div>
                <div class="text-small" style="color: var(--neutral-gray); margin-top: var(--space-1);">
                    <i class="bi bi-tags"></i> Content organization
                </div>
            </div>
            <div style="width: 48px; height: 48px; background: rgba(249, 115, 22, 0.1); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-tags" style="font-size: 24px; color: var(--accent-orange);"></i>
            </div>
        </div>
    </div>

    <!-- Menus Stats -->
    <div class="stats-card">
        <div style="display: flex; justify-content: space-between; align-items: start;">
            <div>
                <div class="stats-value" style="color: var(--accent-yellow);">{{ $stats['menus'] }}</div>
                <div class="stats-label">Navigation Menus</div>
                <div class="text-small" style="color: var(--neutral-gray); margin-top: var(--space-1);">
                    <i class="bi bi-list-ul"></i> Site navigation
                </div>
            </div>
            <div style="width: 48px; height: 48px; background: rgba(251, 191, 36, 0.1); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-list-ul" style="font-size: 24px; color: var(--accent-yellow);"></i>
            </div>
        </div>
    </div>
</div>

<!-- Content Management Section -->
<div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-6); margin-bottom: var(--space-8);">
    <!-- Recent Posts -->
    <div class="card-professional">
        <div class="card-professional-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h3 class="card-professional-title">Recent Posts</h3>
                <a href="{{ route('admin.posts.index') }}" class="btn-professional btn-professional-sm btn-professional-outline">View All</a>
            </div>
        </div>
        <div class="card-professional-body">
            @if($recent_posts->count() > 0)
                @foreach($recent_posts as $post)
                    <div style="display: flex; justify-content: space-between; align-items: center; padding: var(--space-3) 0; border-bottom: 1px solid var(--gray-200);">
                        <div style="flex: 1;">
                            <h5 style="margin: 0 0 var(--space-1) 0;">
                                <a href="{{ route('admin.posts.show', $post->id) }}" 
                                   style="text-decoration: none; color: var(--neutral-dark);">
                                    {{ $post->title }}
                                </a>
                            </h5>
                            <div style="display: flex; align-items: center; gap: var(--space-3);">
                                <span class="badge-professional {{ $post->status == 'published' ? 'badge-success' : 'badge-warning' }}">
                                    {{ ucfirst($post->status) }}
                                </span>
                                <span class="text-small">{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('admin.posts.edit', $post) }}" 
                               class="btn-professional btn-professional-sm btn-professional-teal">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div style="text-align: center; padding: var(--space-8) 0; color: var(--neutral-gray);">
                    <i class="bi bi-file-earmark-text" style="font-size: 2rem; margin-bottom: var(--space-2);"></i>
                    <p>No posts yet. <a href="{{ route('admin.posts.create') }}">Create your first post</a>.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Recent Pages -->
    <div class="card-professional">
        <div class="card-professional-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h3 class="card-professional-title">Recent Pages</h3>
                <a href="{{ route('admin.pages.index') }}" class="btn-professional btn-professional-sm btn-professional-outline">View All</a>
            </div>
        </div>
        <div class="card-professional-body">
            @if($recent_pages->count() > 0)
                @foreach($recent_pages as $page)
                    <div style="display: flex; justify-content: space-between; align-items: center; padding: var(--space-3) 0; border-bottom: 1px solid var(--gray-200);">
                        <div style="flex: 1;">
                            <h5 style="margin: 0 0 var(--space-1) 0;">
                                <a href="{{ route('admin.pages.show', $page->id) }}" 
                                   style="text-decoration: none; color: var(--neutral-dark);">
                                    {{ $page->title }}
                                </a>
                            </h5>
                            <div style="display: flex; align-items: center; gap: var(--space-3);">
                                <span class="badge-professional {{ $page->status == 'published' ? 'badge-success' : 'badge-warning' }}">
                                    {{ ucfirst($page->status) }}
                                </span>
                                <span class="text-small">{{ $page->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('admin.pages.edit', $page) }}" 
                               class="btn-professional btn-professional-sm btn-professional-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div style="text-align: center; padding: var(--space-8) 0; color: var(--neutral-gray);">
                    <i class="bi bi-file-earmark" style="font-size: 2rem; margin-bottom: var(--space-2);"></i>
                    <p>No pages yet. <a href="{{ route('admin.pages.create') }}">Create your first page</a>.</p>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="card-professional">
    <div class="card-professional-header">
        <h3 class="card-professional-title">Quick Actions</h3>
    </div>
    <div class="card-professional-body">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: var(--space-4);">
            <a href="{{ route('admin.posts.create') }}" class="btn-professional btn-professional-primary">
                <i class="bi bi-plus-circle"></i> New Post
            </a>
            <a href="{{ route('admin.pages.create') }}" class="btn-professional btn-professional-teal">
                <i class="bi bi-plus-circle"></i> New Page
            </a>
            <a href="{{ route('admin.post-categories.create') }}" class="btn-professional btn-professional-orange">
                <i class="bi bi-plus-circle"></i> New Category
            </a>
            <a href="{{ route('admin.menus.create') }}" class="btn-professional btn-professional-secondary">
                <i class="bi bi-plus-circle"></i> New Menu
            </a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Add interactive hover effects to stats cards
    document.querySelectorAll('.stats-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
</script>
@endpush