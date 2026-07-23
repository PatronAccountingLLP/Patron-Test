@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Page: {{ $page->title }}</h1>
                <div>
                    <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-primary" style="background: #2b8a6a !important;">
                        <i class="bi bi-pencil"></i> Edit Page
                    </a>
                    <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Pages
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Page Content</h5>
                        </div>
                        <div class="card-body">
                            @if($page->featured_image)
                                <div class="mb-4 text-center">
                                    <img src="{{ $page->featured_image_url }}" alt="{{ $page->title }}" 
                                         class="img-fluid rounded shadow-sm" style="max-height: 300px;">
                                </div>
                            @endif

                            @if($page->excerpt)
                                <div class="alert alert-light border">
                                    <strong>Excerpt:</strong>
                                    <p class="mb-0">{{ $page->excerpt }}</p>
                                </div>
                            @endif

                            <div class="page-content">
                                {!! nl2br(e($page->content)) !!}
                            </div>
                        </div>
                    </div>

                    @if($page->categories->count() > 0)
                        <div class="card mt-4">
                            <div class="card-header">
                                <h6 class="mb-0">Categories</h6>
                            </div>
                            <div class="card-body">
                                @foreach($page->categories as $category)
                                    <span class="badge bg-secondary me-2 mb-2">{{ $category->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">Page Details</h6>
                        </div>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-4">Title:</dt>
                                <dd class="col-sm-8">{{ $page->title }}</dd>
                                
                                <dt class="col-sm-4">Slug:</dt>
                                <dd class="col-sm-8">
                                    <code>{{ $page->slug }}</code>
                                </dd>
                                
                                <dt class="col-sm-4">Status:</dt>
                                <dd class="col-sm-8">
                                    <span class="badge bg-{{ $page->status == 'published' ? 'success' : 'warning' }}">
                                        {{ ucfirst($page->status) }}
                                    </span>
                                </dd>
                                
                                <dt class="col-sm-4">Template:</dt>
                                <dd class="col-sm-8">{{ ucfirst(str_replace('-', ' ', $page->template ?? 'default')) }}</dd>
                                
                                <dt class="col-sm-4">Sort Order:</dt>
                                <dd class="col-sm-8">{{ $page->sort_order ?? 0 }}</dd>
                                
                                <dt class="col-sm-4">Published:</dt>
                                <dd class="col-sm-8">
                                    {{ $page->published_at ? $page->published_at->format('M d, Y H:i') : 'Not published' }}
                                </dd>
                                
                                <dt class="col-sm-4">Created:</dt>
                                <dd class="col-sm-8">{{ $page->created_at->format('M d, Y H:i') }}</dd>
                                
                                <dt class="col-sm-4">Updated:</dt>
                                <dd class="col-sm-8">{{ $page->updated_at->format('M d, Y H:i') }}</dd>
                            </dl>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header">
                            <h6 class="mb-0">Actions</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-primary" style="background: #2b8a6a !important;">
                                    <i class="bi bi-pencil"></i> Edit Page
                                </a>
                                
                                @if($page->status == 'published' )
                                  @if(!empty($page->directry_label))
                                    <a href="{{ route('directryWithSlug.show', ['directry_label'=>$page->directry_label,'slug'=> $page->slug]) }}" class="btn btn-success" target="_blank">
                                        <i class="bi bi-eye"></i> View Live Page
                                    </a>
                                    @else
                                        <a href="{{ route('frontend.pages.show', $page->slug) }}" class="btn btn-success" target="_blank">
                                            <i class="bi bi-eye"></i> View Live Page
                                        </a>
                                     @endif
                                    
                                @endif
                                
                                <hr>
                                
                                <form method="POST" action="{{ route('admin.pages.destroy', $page) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100" 
                                            onclick="return confirm('Are you sure you want to delete this page? This action cannot be undone.')">
                                        <i class="bi bi-trash"></i> Delete Page
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    @if($page->featured_image)
                        <div class="card mt-3">
                            <div class="card-header">
                                <h6 class="mb-0">Featured Image</h6>
                            </div>
                            <div class="card-body text-center">
                                <img src="{{ $page->featured_image_url }}" alt="{{ $page->title }}" 
                                     class="img-fluid rounded">
                                <div class="mt-2">
                                    <small class="text-muted">{{ basename($page->featured_image) }}</small>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.page-content {
    line-height: 1.6;
    font-size: 1.1rem;
}

.page-content h1, .page-content h2, .page-content h3, 
.page-content h4, .page-content h5, .page-content h6 {
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.page-content p {
    margin-bottom: 1rem;
}

.page-content ul, .page-content ol {
    margin-bottom: 1rem;
    padding-left: 2rem;
}

.page-content blockquote {
    border-left: 4px solid #007bff;
    padding-left: 1rem;
    margin-left: 0;
    font-style: italic;
    color: #6c757d;
}
</style>
@endsection