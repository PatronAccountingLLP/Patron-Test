@extends('admin.layouts.app')

@section('title', 'Post Categories')

@section('content')
<div class="d-flex justify-content-between align-items-center mt-2 mb-6 px-4">
    <div>
        <h1 class="h2">Post Categories</h1>
        <p class="text-small">Manage categories for organizing your blog posts</p>
    </div>
    <a href="{{ route('admin.post-categories.create') }}" class="btn-professional btn-professional-primary">
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
        <h3 class="card-professional-title">All Post Categories</h3>
    </div>
    <div class="card-professional-body">
        @if($categories->count() > 0)
            <div class="table-responsive">
                <table class="table-professional">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Posts Count</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td style="padding: 12px 8px;">
                                    <span class="text-small">{{ $loop->iteration }}</span>
                                </td>
                                <td style="padding: 12px 8px;">
                                    <div>
                                        <span class="text-small" style="font-weight: 500;">{{ $category->name }}</span>
                                        <br><code style="background: var(--gray-100); padding: var(--space-1) var(--space-2); border-radius: var(--radius-sm); font-size: var(--text-xs);">{{ $category->slug }}</code>
                                    </div>
                                </td>
                                <td style="padding: 12px 8px;">
                                    <span class="text-small">{{ Str::limit($category->description, 80) ?: 'No description' }}</span>
                                </td>
                                <td style="padding: 12px 8px;">
                                    <span class="badge-professional badge-info">{{ $category->posts_count }} posts</span>
                                </td>
                                <td style="padding: 12px 8px;">
                                    <span class="text-small">{{ $category->created_at->format('M d, Y') }}</span>
                                </td>
                                <td style="padding: 12px 8px;">
                                    <div style="display: flex; gap: 4px;">
                                        <a href="{{ route('admin.post-categories.show', $category) }}" 
                                           class="btn btn-success" 
                                           style="padding: 4px 8px; font-size: 12px;"
                                           title="View">
                                            <i class="bi bi-eye" style="font-size: 12px;"></i>
                                        </a>
                                        <a href="{{ route('admin.post-categories.edit', $category) }}" 
                                           class="btn btn-secondary" 
                                           style="padding: 4px 8px; font-size: 12px;"
                                           title="Edit">
                                            <i class="bi bi-pencil" style="font-size: 12px;"></i>
                                        </a>
                                        <form method="POST" 
                                              action="{{ route('admin.post-categories.destroy', $category) }}" 
                                              style="display: inline;"
                                              onsubmit="return confirm('Are you sure you want to delete this category?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn btn-danger" 
                                                    style="padding: 4px 8px; font-size: 12px;"
                                                    title="Delete">
                                                <i class="bi bi-trash" style="font-size: 12px;"></i>
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
                <i class="bi bi-folder-x" style="font-size: 4rem; color: var(--neutral-gray); margin-bottom: var(--space-4);"></i>
                <h3>No post categories found</h3>
                <p class="text-small">Create your first post category to get started organizing your content.</p>
                <a href="{{ route('admin.post-categories.create') }}" class="btn-professional btn-professional-primary" style="margin-top: var(--space-4);">
                    <i class="bi bi-plus-circle"></i>Add New Category
                </a>
            </div>
        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Auto-hide alerts after 5 seconds
    setTimeout(function() {
        $('.alert').fadeOut();
    }, 5000);
</script>
@endpush