@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Pages</h1>
                <a href="{{ route('admin.pages.create') }}" class="btn btn-primary" style="background: #2b8a6a !important;">
                    <i class="bi bi-plus"></i> Add New Page
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
                            <h6 class="mb-0">All Pages ({{ $pages->total() }})</h6>
                        </div>
                        <div class="col-md-6">
                            <form method="GET" action="{{ route('admin.pages.index') }}">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" 
                                           placeholder="Search pages..." value="{{ request('search') }}">
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
                            <strong><span id="selected-count">0</span> page(s) selected</strong>
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
                                        <input type="checkbox" id="select-all-pages" class="form-check-input" title="Select All">
                                    </th>
                                    <th>Title</th>
                                    <th>Template</th>
                                    <th>Status</th>
                                    <th>Published</th>
                                    <th>Updated</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pages as $page)
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input page-checkbox" value="{{ $page->id }}" data-page-id="{{ $page->id }}">
                                        </td>
                                        <td>
                                            <strong>{{ $page->title }}</strong>
                                            @if($page->slug)
                                                <br>
                                                <small class="text-muted d-flex align-items-center" style="gap: 6px;">
                                                    <i class="bi bi-link-45deg" style="font-size: 14px;"></i>
                                                    <span class="page-url">{{!empty($page->directry_label)? url('/'.$page->directry_label.'/'.$page->slug) : url('/' . $page->slug)}}
                                                                            </span>
                                                    <button class="btn btn-sm btn-link p-0 copy-url-btn" 
                                                            data-url="{{!empty($page->directry_label)? url('/'.$page->directry_label.'/'.$page->slug) : url('/' . $page->slug)}}" 
                                                            title="Copy URL"
                                                            style="font-size: 14px; color: #6c757d; text-decoration: none;">
                                                        <i class="bi bi-clipboard"></i>
                                                    </button>
                                                </small>
                                            @endif
                                        </td>
                                        <td>
                                            @php
                                                $templates = \App\Services\TemplateService::getAvailableTemplates();
                                                $templateKey = $page->template ?? 'default';
                                                $templateName = $templates[$templateKey]['name'] ?? ucfirst(str_replace(['-', '_'], ' ', $templateKey));
                                            @endphp
                                            <span class="badge bg-secondary text-light">
                                                {{ $templateName }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $page->status == 'published' ? 'success' : 'warning' }}">
                                                {{ ucfirst($page->status) }}
                                            </span>
                                        </td>
                                        <td style="font-size: 13px;">{{ $page->published_at ? $page->published_at->format('M d, Y') : 'Not published' }}</td>
                                        <td style="font-size: 13px;">{{ $page->updated_at->format('M d, Y') }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.pages.show', $page->id) }}" class="btn btn-sm btn-success" title="View">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-sm btn-secondary" title="Edit">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <form method="POST" action="{{ route('admin.pages.destroy', $page) }}" class="d-inline">
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
                                        <td colspan="7" class="text-center text-muted py-4">
                                            No pages found. <a href="{{ route('admin.pages.create') }}">Create your first page</a>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($pages->hasPages())
                        <div class="professional-pagination-container">
                            <div class="pagination-wrapper d-flex justify-content-center mt-4 gap-2">
                                {{ $pages->appends(request()->query())->links('pagination::bootstrap-4') }}
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
.page-checkbox:checked,
#select-all-pages:checked {
    background-color: #28a745 !important;
    border-color: #28a745 !important;
}

.page-checkbox:indeterminate,
#select-all-pages:indeterminate {
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
    const selectAllCheckbox = document.getElementById('select-all-pages');
    const pageCheckboxes = document.querySelectorAll('.page-checkbox');
    const bulkActionsBar = document.getElementById('bulk-actions-bar');
    const selectedCountSpan = document.getElementById('selected-count');
    const bulkDeleteBtn = document.getElementById('bulk-delete-btn');

    // Select/Deselect All
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            const isChecked = this.checked;
            pageCheckboxes.forEach(checkbox => {
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
    pageCheckboxes.forEach(checkbox => {
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
        const totalCheckboxes = pageCheckboxes.length;
        const checkedCheckboxes = document.querySelectorAll('.page-checkbox:checked').length;
        
        if (selectAllCheckbox) {
            selectAllCheckbox.checked = totalCheckboxes > 0 && checkedCheckboxes === totalCheckboxes;
            selectAllCheckbox.indeterminate = checkedCheckboxes > 0 && checkedCheckboxes < totalCheckboxes;
        }
    }

    // Update bulk actions bar visibility and count
    function updateBulkActionsBar() {
        const checkedCheckboxes = document.querySelectorAll('.page-checkbox:checked');
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
            const checkedCheckboxes = document.querySelectorAll('.page-checkbox:checked');
            const pageIds = Array.from(checkedCheckboxes).map(cb => cb.value);
            
            if (pageIds.length === 0) {
                alert('Please select at least one page to delete.');
                return;
            }

            const confirmMessage = `Are you sure you want to delete ${pageIds.length} page(s)? This action cannot be undone.`;
            
            if (confirm(confirmMessage)) {
                // Create a form and submit
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ route("admin.pages.bulk-delete") }}';
                
                // CSRF Token
                const csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = '{{ csrf_token() }}';
                form.appendChild(csrfInput);
                
                // Page IDs
                pageIds.forEach(id => {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'page_ids[]';
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