@extends('admin.layouts.app')

@section('title', $category->name)

@section('content')
<div class="d-flex justify-content-between align-items-center mb-6">
    <div>
        <h1 class="h1">{{ $category->name }}</h1>
        <p class="text-small">Page category details and associated content</p>
    </div>
    <div style="display: flex; gap: var(--space-3);">
        <a href="{{ route('admin.page-categories.edit', $category) }}" class="btn-professional btn-professional-primary">
            <i class="bi bi-pencil"></i>Edit Category
        </a>
        <a href="{{ route('admin.page-categories.index') }}" class="btn-professional btn-professional-outline">
            <i class="bi bi-arrow-left"></i>Back to Categories
        </a>
    </div>
</div>

<div style="display: grid; grid-template-columns: 2fr 1fr; gap: var(--space-6);">
    <div>
        <div class="card-professional" style="margin-bottom: var(--space-6);">
            <div class="card-professional-header">
                <h3 class="card-professional-title">Category Information</h3>
            </div>
            <div class="card-professional-body">
                <div style="display: grid; gap: var(--space-4);">
                    <div style="display: grid; grid-template-columns: 120px 1fr; align-items: center;">
                        <strong>Name:</strong>
                        <span>{{ $category->name }}</span>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 120px 1fr; align-items: center;">
                        <strong>Slug:</strong>
                        <code style="background: var(--gray-100); padding: var(--space-1) var(--space-2); border-radius: var(--radius-sm);">{{ $category->slug }}</code>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 120px 1fr; align-items: start;">
                        <strong>Description:</strong>
                        <span>{{ $category->description ?: 'No description provided' }}</span>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 120px 1fr; align-items: center;">
                        <strong>Pages Count:</strong>
                        <span class="badge-professional badge-primary">{{ $category->pages()->count() }} pages</span>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 120px 1fr; align-items: center;">
                        <strong>Created:</strong>
                        <span class="text-small">{{ $category->created_at->format('F d, Y \a\t g:i A') }}</span>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 120px 1fr; align-items: center;">
                        <strong>Last Updated:</strong>
                        <span class="text-small">{{ $category->updated_at->format('F d, Y \a\t g:i A') }}</span>
                    </div>
                </div>
            </div>
        </div>

        @if($category->pages()->count() > 0)
            <div class="card-professional">
                <div class="card-professional-header">
                    <h3 class="card-professional-title">Pages in this Category</h3>
                </div>
                <div class="card-professional-body">
                    <div class="table-responsive">
                        <table class="table-professional">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Published</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category->pages()->latest()->limit(10)->get() as $page)
                                    <tr>
                                        <td>
                                            <div>
                                                <h5>{{ $page->title }}</h5>
                                                <span class="text-small">{{ Str::limit($page->content, 80) }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            @if($page->status === 'published')
                                                <span class="badge-professional badge-success">Published</span>
                                            @else
                                                <span class="badge-professional badge-warning">Draft</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="text-small">{{ $page->published_at ? $page->published_at->format('M d, Y') : '-' }}</span>
                                        </td>
                                        <td>
                                            <div style="display: flex; gap: var(--space-2);">
                                                <a href="{{ route('admin.pages.show', $page) }}" 
                                                   class="btn-professional btn-professional-sm btn-professional-outline" 
                                                   title="View Page">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.pages.edit', $page) }}" 
                                                   class="btn-professional btn-professional-sm btn-professional-primary" 
                                                   title="Edit Page">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    @if($category->pages()->count() > 10)
                        <div style="text-align: center; margin-top: var(--space-4);">
                            <a href="{{ route('admin.pages.index', ['category' => $category->slug]) }}" class="btn-professional btn-professional-outline">
                                View All {{ $category->pages()->count() }} Pages
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>

    <div>
        <div class="card-professional">
            <div class="card-professional-header">
                <h3 class="card-professional-title">Quick Actions</h3>
            </div>
            <div class="card-professional-body">
                <div style="display: grid; gap: var(--space-3);">
                    <a href="{{ route('admin.page-categories.edit', $category) }}" class="btn-professional btn-professional-primary">
                        <i class="bi bi-pencil"></i>Edit Category
                    </a>
                    
                    <a href="{{ route('admin.pages.create', ['category' => $category->slug]) }}" class="btn-professional btn-professional-teal">
                        <i class="bi bi-plus-circle"></i>Add Page to Category
                    </a>
                    
                    <hr style="border: none; border-top: 1px solid var(--gray-200); margin: var(--space-2) 0;">
                    
                    <div>
                        <h6 style="color: var(--red-alert); margin-bottom: var(--space-3);">Danger Zone</h6>
                        <form method="POST" 
                              action="{{ route('admin.page-categories.destroy', $category) }}"
                              onsubmit="return confirm('Are you sure you want to delete this category? This action cannot be undone.')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-professional btn-professional-danger" style="width: 100%;">
                                <i class="bi bi-trash"></i>Delete Category
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection