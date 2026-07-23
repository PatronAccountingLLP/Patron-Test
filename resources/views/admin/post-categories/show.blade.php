@extends('admin.layouts.app')

@section('title', $category->name)

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ $category->name }}</h1>
                <div>
                    <a href="{{ route('admin.post-categories.edit', $category) }}" class="btn btn-primary" style="background: #2b8a6a !important;">
                        <i class="bi bi-pencil me-2"></i>Edit Category
                    </a>
                    <a href="{{ route('admin.post-categories.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left me-2"></i>Back to Categories
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Category Information</h6>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <strong>Name:</strong>
                                </div>
                                <div class="col-sm-9">
                                    {{ $category->name }}
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <strong>Slug:</strong>
                                </div>
                                <div class="col-sm-9">
                                    <code>{{ $category->slug }}</code>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <strong>Description:</strong>
                                </div>
                                <div class="col-sm-9">
                                    {{ $category->description ?: 'No description provided' }}
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <strong>Posts Count:</strong>
                                </div>
                                <div class="col-sm-9">
                                    <span class="badge bg-info">{{ $category->posts()->count() }} posts</span>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <strong>Created:</strong>
                                </div>
                                <div class="col-sm-9">
                                    {{ $category->created_at->format('F d, Y \a\t g:i A') }}
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <strong>Last Updated:</strong>
                                </div>
                                <div class="col-sm-9">
                                    {{ $category->updated_at->format('F d, Y \a\t g:i A') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($category->posts()->count() > 0)
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Posts in this Category</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Published</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($category->posts()->latest()->limit(10)->get() as $post)
                                                <tr>
                                                    <td>
                                                        <strong>{{ $post->title }}</strong>
                                                        <br>
                                                        <small class="text-muted">{{ Str::limit($post->excerpt, 80) }}</small>
                                                    </td>
                                                    <td>
                                                        @if($post->status === 'published')
                                                            <span class="badge bg-success">Published</span>
                                                        @else
                                                            <span class="badge bg-warning text-dark">Draft</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ $post->published_at ? $post->published_at->format('M d, Y') : '-' }}
                                                    </td>
                                                    <td>
                                                        <div class="btn-group btn-group-sm">
                                                            <a href="{{ route('admin.posts.show', $post) }}" 
                                                               class="btn btn-outline-info" title="View Post">
                                                                <i class="bi bi-eye"></i>
                                                            </a>
                                                            <a href="{{ route('admin.posts.edit', $post) }}" 
                                                               class="btn btn-outline-primary" title="Edit Post">
                                                                <i class="bi bi-pencil"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                
                                @if($category->posts()->count() > 10)
                                    <div class="text-center mt-3">
                                        <a href="{{ route('admin.posts.index', ['category' => $category->slug]) }}" class="btn btn-outline-primary">
                                            View All {{ $category->posts()->count() }} Posts
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Actions</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <a href="{{ route('admin.post-categories.edit', $category) }}" class="btn btn-primary" style="background: #2b8a6a !important;">
                                    <i class="bi bi-pencil me-2"></i>Edit Category
                                </a>
                                
                                <a href="{{ route('admin.posts.create', ['category' => $category->slug]) }}" class="btn btn-success">
                                    <i class="bi bi-plus-circle me-2"></i>Add Post to Category
                                </a>
                                
                                <hr>
                                
                                <form method="POST" 
                                      action="{{ route('admin.post-categories.destroy', $category) }}"
                                      onsubmit="return confirm('Are you sure you want to delete this category? This action cannot be undone.')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">
                                        <i class="bi bi-trash me-2"></i>Delete Category
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection