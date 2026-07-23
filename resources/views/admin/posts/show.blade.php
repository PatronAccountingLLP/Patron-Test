@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Post: {{ $post->title }}</h1>
                <div>
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary" style="background: #2b8a6a !important;">
                        <i class="bi bi-pencil"></i> Edit Post
                    </a>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Posts
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Post Content</h5>
                        </div>
                        <div class="card-body">
                            @if($post->featured_image)
                                <div class="mb-4 text-center">
                                    <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" 
                                         class="img-fluid rounded shadow-sm" style="max-height: 300px;">
                                </div>
                            @endif

                            @if($post->excerpt)
                                <div class="alert alert-light border">
                                    <strong>Excerpt:</strong>
                                    <p class="mb-0">{{ $post->excerpt }}</p>
                                </div>
                            @endif

                            <div class="post-content">
                                {!! nl2br(e($post->content)) !!}
                            </div>
                        </div>
                    </div>

                    @if($post->categories->count() > 0)
                        <div class="card mt-4">
                            <div class="card-header">
                                <h6 class="mb-0">Categories</h6>
                            </div>
                            <div class="card-body">
                                @foreach($post->categories as $category)
                                    <span class="badge bg-secondary me-2 mb-2">{{ $category->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if($post->users->count() > 0)
                        <div class="card mt-4">
                            <div class="card-header">
                                <h6 class="mb-0">Associated Users</h6>
                            </div>
                            <div class="card-body">
                                @foreach($post->users as $user)
                                    <div class="d-flex align-items-center mb-2">
                                        @if($user->profile_image)
                                            <img src="{{ Storage::url($user->profile_image) }}" alt="{{ $user->name }}" 
                                                 class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
                                        @else
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center me-3" 
                                                 style="width: 40px; height: 40px; color: white; font-weight: bold;">
                                                {{ strtoupper(substr($user->name, 0, 1)) }}
                                            </div>
                                        @endif
                                        <div>
                                            <strong>{{ $user->name }}</strong>
                                            <br><small class="text-muted">{{ $user->email }}</small>
                                            @if($user->role)
                                                <span class="badge bg-info ms-2">{{ ucfirst($user->role) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    @if(!$loop->last)
                                        <hr class="my-2">
                                    @endif
                                @endforeach
                                
                                <div class="mt-3">
                                    <small class="text-muted">{{ $post->users->count() }} {{ Str::plural('user', $post->users->count()) }} associated with this post</small>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">Post Details</h6>
                        </div>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-4">Title:</dt>
                                <dd class="col-sm-8">{{ $post->title }}</dd>
                                
                                <dt class="col-sm-4">Slug:</dt>
                                <dd class="col-sm-8">
                                    <code>{{ $post->slug }}</code>
                                </dd>
                                
                                <dt class="col-sm-4">Status:</dt>
                                <dd class="col-sm-8">
                                    <span class="badge bg-{{ $post->status == 'published' ? 'success' : 'warning' }}">
                                        {{ ucfirst($post->status) }}
                                    </span>
                                </dd>
                                
                                <dt class="col-sm-4">Published:</dt>
                                <dd class="col-sm-8">
                                    {{ $post->published_at ? $post->published_at->format('M d, Y H:i') : 'Not published' }}
                                </dd>
                                
                                <dt class="col-sm-4">Created:</dt>
                                <dd class="col-sm-8">{{ $post->created_at->format('M d, Y H:i') }}</dd>
                                
                                <dt class="col-sm-4">Updated:</dt>
                                <dd class="col-sm-8">{{ $post->updated_at->format('M d, Y H:i') }}</dd>
                                
                                <dt class="col-sm-4">Categories:</dt>
                                <dd class="col-sm-8">{{ $post->categories->count() }}</dd>
                                
                                <dt class="col-sm-4">Users:</dt>
                                <dd class="col-sm-8">{{ $post->users->count() }}</dd>
                            </dl>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header">
                            <h6 class="mb-0">Actions</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary" style="background: #2b8a6a !important;">
                                    <i class="bi bi-pencil"></i> Edit Post
                                </a>
                                
                                @if($post->status == 'published')
                                    <a href="{{ route('frontend.posts.show', $post->slug) }}" class="btn btn-success" target="_blank">
                                        <i class="bi bi-eye"></i> View Live Post
                                    </a>
                                @endif
                                
                                <hr>
                                
                                <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100" 
                                            onclick="return confirm('Are you sure you want to delete this post? This action cannot be undone.')">
                                        <i class="bi bi-trash"></i> Delete Post
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    @if($post->featured_image)
                        <div class="card mt-3">
                            <div class="card-header">
                                <h6 class="mb-0">Featured Image</h6>
                            </div>
                            <div class="card-body text-center">
                                <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" 
                                     class="img-fluid rounded">
                                <div class="mt-2">
                                    <small class="text-muted">{{ basename($post->featured_image) }}</small>
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
.post-content {
    line-height: 1.6;
    font-size: 1.1rem;
}

.post-content h1, .post-content h2, .post-content h3, 
.post-content h4, .post-content h5, .post-content h6 {
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.post-content p {
    margin-bottom: 1rem;
}

.post-content ul, .post-content ol {
    margin-bottom: 1rem;
    padding-left: 2rem;
}

.post-content blockquote {
    border-left: 4px solid #007bff;
    padding-left: 1rem;
    margin-left: 0;
    font-style: italic;
    color: #6c757d;
}
</style>
@endsection