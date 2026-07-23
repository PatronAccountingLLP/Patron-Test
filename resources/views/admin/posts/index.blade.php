@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Posts</h1>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary" style="background: #2b8a6a !important;">
                    <i class="bi bi-plus"></i> Add New Post
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">All Posts ({{ $posts->total() }})</h6>
                        </div>
                        <div class="col-md-6">
                            <form method="GET" action="{{ route('admin.posts.index') }}">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" 
                                           placeholder="Search posts..." value="{{ request('search') }}">
                                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Bulk Actions Bar -->
                    <div id="bulk-actions-bar" class="d-none mb-3" style="display: flex; align-items: center; justify-content: space-between; padding: 12px 20px; background-color: #d1ecf1; border: 1px solid #bee5eb; border-radius: 6px;">
                        <span>
                            <strong><span id="selected-count">0</span> post(s) selected</strong>
                        </span>
                        <button type="button" id="bulk-delete-btn" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i> Delete Selected
                        </button>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 40px;">
                                        <input type="checkbox" id="select-all-posts" class="form-check-input" title="Select All">
                                    </th>
                                    <th>Title</th>
                                    <th>Categories</th>
                                    <th>Users</th>
                                    <th>Status</th>
                                    <th>Published</th>
                                    <th>Updated</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($posts as $post)
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input post-checkbox" value="{{ $post->id }}" data-post-id="{{ $post->id }}">
                                        </td>
                                        <td>
                                            <strong>{{ $post->title }}</strong>
                                            @if($post->slug && $post->status === 'published' && $post->published_at && $post->published_at <= now())
                                                <br>
                                                <small class="text-success d-flex align-items-center" style="gap: 6px;">
                                                    <i class="bi bi-link-45deg" style="font-size: 14px;"></i>
                                                    <a href="{{ url('/blog/' . $post->slug) }}" target="_blank" class="text-success text-decoration-none" style="font-size: 12px;">
                                                        {{ url('/blog/' . $post->slug) }}
                                                    </a>
                                                    <button class="btn btn-sm btn-link p-0 copy-url-btn" 
                                                            data-url="{{ url('/blog/' . $post->slug) }}" 
                                                            title="Copy URL"
                                                            style="font-size: 14px; color: #28a745; text-decoration: none;">
                                                        <i class="bi bi-clipboard"></i>
                                                    </button>
                                                </small>
                                            @elseif($post->slug)
                                                <br>
                                                <small class="text-muted d-flex align-items-center" style="gap: 6px; font-size: 12px;">
                                                    <i class="bi bi-link-45deg" style="font-size: 14px;"></i>
                                                    <span>{{ url('/blog/' . $post->slug) }} (not published)</span>
                                                    <button class="btn btn-sm btn-link p-0 copy-url-btn" 
                                                            data-url="{{ url('/blog/' . $post->slug) }}" 
                                                            title="Copy URL"
                                                            style="font-size: 14px; color: #6c757d; text-decoration: none;">
                                                        <i class="bi bi-clipboard"></i>
                                                    </button>
                                                </small>
                                            @endif
                                        </td>
                                        <td>
                                            @foreach($post->categories as $category)
                                                <span class="badge bg-secondary me-1">{{ $category->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($post->users as $user)
                                                <span class="badge bg-success me-1">{{ $user->name }}</span>
                                            @endforeach
                                            @if($post->users->isEmpty())
                                                <span class="text-muted">No users</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $post->status == 'published' ? 'success' : 'warning' }}">
                                                {{ ucfirst($post->status) }}
                                            </span>
                                        </td>
                                        <td style="font-size: 13px;">{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Not published' }}</td>
                                        <td style="font-size: 13px;">{{ $post->updated_at->format('M d, Y') }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                @if($post->status === 'published' && $post->slug && $post->published_at && $post->published_at <= now())
                                                    <a href="{{ url('/blog/' . $post->slug) }}" class="btn btn-sm btn-success" target="_blank" title="View Live Post">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                @elseif($post->status === 'published' && $post->slug)
                                                    <span class="btn btn-sm btn-warning" title="Post scheduled for future">
                                                        <i class="bi bi-clock"></i>
                                                    </span>
                                                @endif
                                                <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-secondary" title="Edit">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete"
                                                            onclick="return confirm('Are you sure?')">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted py-4">
                                            No posts found. <a href="{{ route('admin.posts.create') }}">Create your first post</a>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($posts->hasPages())
                        <div class="professional-pagination-container">
                            <div class="pagination-wrapper d-flex justify-content-center mt-4 gap-2">
                                {{ $posts->appends(request()->query())->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.professional-pagination-container {
    margin-top: 1.5rem;
    padding: 1rem 0;
    border-top: 1px solid #e5e7eb;
}

.pagination-wrapper .pagination {
    margin: 0;
    gap: 0.5rem;
}

.pagination-wrapper .page-link {
    color: #2b8a6a;
    border: 1px solid #d1d5db;
    padding: 6px 12px;
    margin: 0 2px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
    transition: all 0.2s ease;
}

.pagination-wrapper .page-link:hover {
    background-color: #2b8a6a;
    color: white;
    border-color: #2b8a6a;
}

.pagination-wrapper .page-item.active .page-link {
    background-color: #2b8a6a;
    border-color: #2b8a6a;
    color: white;
}

.pagination-wrapper .page-item.disabled .page-link {
    color: #9ca3af;
    background-color: #f9fafb;
    border-color: #d1d5db;
}

/* Fix for pagination arrow icons */
.pagination-wrapper .page-link svg {
    width: 16px;
    height: 16px;
}

.copy-url-btn:hover {
    color: #2b8a6a !important;
}

.copy-url-btn.copied {
    color: #28a745 !important;
}

/* Checkbox styling - Green when checked */
.post-checkbox:checked,
#select-all-posts:checked {
    background-color: #28a745 !important;
    border-color: #28a745 !important;
}

.post-checkbox:indeterminate,
#select-all-posts:indeterminate {
    background-color: #28a745 !important;
    border-color: #28a745 !important;
}

/* Highlight selected rows */
tr.selected-row {
    background-color: #f0f9f4 !important;
}

/* Bulk actions bar styling */
#bulk-actions-bar {
    transition: opacity 0.3s ease;
}

#bulk-actions-bar.d-none {
    display: none !important;
}

#bulk-actions-bar:not(.d-none) {
    display: flex !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Copy URL functionality
    document.querySelectorAll('.copy-url-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.getAttribute('data-url');
            const icon = this.querySelector('i');
            
            // Copy to clipboard
            navigator.clipboard.writeText(url).then(() => {
                // Change icon to checkmark
                icon.classList.remove('bi-clipboard');
                icon.classList.add('bi-check2');
                this.classList.add('copied');
                
                // Reset after 2 seconds
                setTimeout(() => {
                    icon.classList.remove('bi-check2');
                    icon.classList.add('bi-clipboard');
                    this.classList.remove('copied');
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy:', err);
            });
        });
    });

    // Bulk Delete Functionality
    const selectAllCheckbox = document.getElementById('select-all-posts');
    const postCheckboxes = document.querySelectorAll('.post-checkbox');
    const bulkActionsBar = document.getElementById('bulk-actions-bar');
    const selectedCountSpan = document.getElementById('selected-count');
    const bulkDeleteBtn = document.getElementById('bulk-delete-btn');

    // Select/Deselect All
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            const isChecked = this.checked;
            postCheckboxes.forEach(checkbox => {
                checkbox.checked = isChecked;
                
                // Toggle row highlight
                const row = checkbox.closest('tr');
                if (isChecked) {
                    row.classList.add('selected-row');
                } else {
                    row.classList.remove('selected-row');
                }
            });
            updateBulkActionsBar();
        });
    }

    // Individual checkbox change
    postCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // Toggle row highlight
            const row = this.closest('tr');
            if (this.checked) {
                row.classList.add('selected-row');
            } else {
                row.classList.remove('selected-row');
            }
            
            updateSelectAllState();
            updateBulkActionsBar();
        });
    });

    // Update "Select All" checkbox state
    function updateSelectAllState() {
        const totalCheckboxes = postCheckboxes.length;
        const checkedCheckboxes = document.querySelectorAll('.post-checkbox:checked').length;
        
        if (selectAllCheckbox) {
            selectAllCheckbox.checked = totalCheckboxes > 0 && checkedCheckboxes === totalCheckboxes;
            selectAllCheckbox.indeterminate = checkedCheckboxes > 0 && checkedCheckboxes < totalCheckboxes;
        }
    }

    // Update bulk actions bar visibility and count
    function updateBulkActionsBar() {
        const checkedCheckboxes = document.querySelectorAll('.post-checkbox:checked');
        const count = checkedCheckboxes.length;
        
        if (count > 0) {
            bulkActionsBar.classList.remove('d-none');
            selectedCountSpan.textContent = count;
        } else {
            bulkActionsBar.classList.add('d-none');
        }
    }

    // Bulk Delete
    if (bulkDeleteBtn) {
        bulkDeleteBtn.addEventListener('click', function() {
            const checkedCheckboxes = document.querySelectorAll('.post-checkbox:checked');
            const postIds = Array.from(checkedCheckboxes).map(cb => cb.value);
            
            if (postIds.length === 0) {
                alert('Please select at least one post to delete.');
                return;
            }

            const confirmMessage = `Are you sure you want to delete ${postIds.length} post(s)? This action cannot be undone.`;
            
            if (confirm(confirmMessage)) {
                // Create a form and submit
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ route("admin.posts.bulk-delete") }}';
                
                // CSRF Token
                const csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = '{{ csrf_token() }}';
                form.appendChild(csrfInput);
                
                // Post IDs
                postIds.forEach(id => {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'post_ids[]';
                    input.value = id;
                    form.appendChild(input);
                });
                
                document.body.appendChild(form);
                form.submit();
            }
        });
    }
});
</script>
@endsection