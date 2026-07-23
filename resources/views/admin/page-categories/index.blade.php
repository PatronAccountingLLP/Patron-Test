@extends('admin.layouts.app')

@section('title', 'Page Categories')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-6">
    <div>
        <h1 class="h1">Page Categories</h1>
        <p class="text-small">Manage categories for organizing your website pages</p>
    </div>
    <a href="{{ route('admin.page-categories.create') }}" class="btn-professional btn-professional-primary">
        <i class="bi bi-plus-circle"></i>Add New Category
    </a>
</div>

@if(session('success'))
    <div class="alert-professional alert-success">
        <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
    </div>
@endif

<div class="card-professional">
    <div class="card-professional-header">
        <h3 class="card-professional-title">All Page Categories</h3>
    </div>
    <div class="card-professional-body">
        @if($categories->count() > 0)
            <div class="table-responsive">
                <table class="table-professional">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Pages Count</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <div>
                                        <h5>{{ $category->name }}</h5>
                                    </div>
                                </td>
                                <td>
                                    <code style="background: var(--gray-100); padding: var(--space-1) var(--space-2); border-radius: var(--radius-sm); font-size: var(--text-xs);">{{ $category->slug }}</code>
                                </td>
                                <td>
                                    <span class="text-small">{{ Str::limit($category->description, 80) ?: 'No description' }}</span>
                                </td>
                                <td>
                                    <span class="badge-professional badge-primary">{{ $category->pages_count }} pages</span>
                                </td>
                                <td>
                                    <span class="text-small">{{ $category->created_at->format('M d, Y') }}</span>
                                </td>
                                <td>
                                    <div style="display: flex; gap: var(--space-2);">
                                        <a href="{{ route('admin.page-categories.show', $category) }}" 
                                           class="btn-professional btn-professional-sm btn-professional-outline" 
                                           title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.page-categories.edit', $category) }}" 
                                           class="btn-professional btn-professional-sm btn-professional-teal" 
                                           title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form method="POST" 
                                              action="{{ route('admin.page-categories.destroy', $category) }}" 
                                              style="display: inline;"
                                              onsubmit="return confirm('Are you sure you want to delete this category?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn-professional btn-professional-sm btn-professional-danger" 
                                                    title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div style="display: flex; justify-content: center; margin-top: var(--space-6);">
                {{ $categories->links() }}
            </div>
        @else
            <div style="text-align: center; padding: var(--space-12) var(--space-4);">
                <i class="bi bi-bookmark-x" style="font-size: 4rem; color: var(--neutral-gray); margin-bottom: var(--space-4);"></i>
                <h3>No page categories found</h3>
                <p class="text-small">Create your first page category to get started organizing your pages.</p>
                <a href="{{ route('admin.page-categories.create') }}" class="btn-professional btn-professional-primary" style="margin-top: var(--space-4);">
                    <i class="bi bi-plus-circle"></i>Add New Category
                </a>
            </div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Auto-hide alerts after 5 seconds
    setTimeout(function() {
        $('.alert-professional').fadeOut();
    }, 5000);
</script>
@endpush