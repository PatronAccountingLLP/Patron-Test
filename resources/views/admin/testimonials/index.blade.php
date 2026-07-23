@extends('admin.layouts.app')

@section('title', 'Testimonials')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Testimonials</h1>
                <div>
                    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary" style="background: #2b8a6a !important; border-color: #2b8a6a !important;">
                        <i class="bi bi-plus-circle"></i> Add New Testimonial
                    </a>
                </div>
            </div>

            <!-- Bulk Actions Bar -->
            <div id="bulk-actions-bar" class="d-none mb-3" style="display: flex; align-items: center; justify-content: space-between; padding: 12px 20px; background-color: #d1ecf1; border: 1px solid #bee5eb; border-radius: 6px;">
                <span>
                    <strong><span id="selected-count">0</span> testimonial(s) selected</strong>
                </span>
                <button type="button" id="bulk-delete-btn" class="btn btn-danger btn-sm">
                    <i class="bi bi-trash"></i> Delete Selected
                </button>
            </div>

            <div class="card">
                    <div class="card-body p-0">
                        @if($testimonials->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width: 40px;">
                                                <input type="checkbox" id="select-all-testimonials" class="form-check-input" title="Select All">
                                            </th>
                                            <th style="width: 80px;">Image</th>
                                            <th>Name</th>
                                            <th>Position/Company</th>
                                            <th>Rating</th>
                                            <th>Status</th>
                                            <th>Sort Order</th>
                                            <th>Date</th>
                                            <th style="width: 150px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($testimonials as $testimonial)
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input testimonial-checkbox" value="{{ $testimonial->id }}" data-testimonial-id="{{ $testimonial->id }}">
                                                </td>
                                                <td>
                                                    @if($testimonial->image)
                                                        <img src="{{ asset('storage/' . $testimonial->image) }}" 
                                                             alt="{{ $testimonial->name }}" 
                                                             class="img-thumbnail" 
                                                             style="width: 50px; height: 50px; object-fit: cover;">
                                                    @elseif($testimonial->video)
                                                        <div class="bg-secondary text-white d-flex align-items-center justify-content-center rounded" 
                                                             style="width: 50px; height: 50px;">
                                                            <i class="bi bi-camera-video" style="font-size: 20px;"></i>
                                                        </div>
                                                    @else
                                                        <div class="bg-secondary text-white d-flex align-items-center justify-content-center rounded" 
                                                             style="width: 50px; height: 50px;">
                                                            <i class="bi bi-person" style="font-size: 24px;"></i>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <strong>{{ $testimonial->name }}</strong>
                                                </td>
                                                <td>
                                                    @if($testimonial->position)
                                                        {{ $testimonial->position }}
                                                    @endif
                                                    @if($testimonial->position && $testimonial->company)
                                                        <br>
                                                    @endif
                                                    @if($testimonial->company)
                                                        <span class="text-muted">{{ $testimonial->company }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {!! $testimonial->stars_html !!}
                                                </td>
                                                <td>
                                                    @if($testimonial->status === 'published')
                                                        <span class="badge bg-success">Published</span>
                                                    @else
                                                        <span class="badge bg-secondary">Draft</span>
                                                    @endif
                                                </td>
                                                <td>{{ $testimonial->sort_order }}</td>
                                                <td>{{ $testimonial->created_at->format('M d, Y') }}</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('admin.testimonials.edit', $testimonial) }}" 
                                                           class="btn btn-sm btn-secondary" title="Edit">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        <form method="POST" 
                                                              action="{{ route('admin.testimonials.destroy', $testimonial) }}" 
                                                              class="d-inline">
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
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center py-5">
                                <i class="bi bi-chat-quote text-muted" style="font-size: 3rem;"></i>
                                <p class="text-muted mt-3">No testimonials found.</p>
                                <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary" style="background: #2b8a6a !important; border-color: #2b8a6a !important;">
                                    <i class="bi bi-plus-circle"></i> Add Your First Testimonial
                                </a>
                            </div>
                        @endif
                    </div>
                    @if($testimonials->hasPages())
                        <div class="card-footer">
                            {{ $testimonials->links() }}
                        </div>
                    @endif
                </div>
        </div>
    </div>
</div>

@push('styles')
<style>
/* Checkbox styling - Green when checked */
.testimonial-checkbox:checked,
#select-all-testimonials:checked {
    background-color: #28a745 !important;
    border-color: #28a745 !important;
}

.testimonial-checkbox:indeterminate,
#select-all-testimonials:indeterminate {
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
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Bulk Delete Functionality
    const selectAllCheckbox = document.getElementById('select-all-testimonials');
    const testimonialCheckboxes = document.querySelectorAll('.testimonial-checkbox');
    const bulkActionsBar = document.getElementById('bulk-actions-bar');
    const selectedCountSpan = document.getElementById('selected-count');
    const bulkDeleteBtn = document.getElementById('bulk-delete-btn');

    // Select/Deselect All
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            const isChecked = this.checked;
            testimonialCheckboxes.forEach(checkbox => {
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
    testimonialCheckboxes.forEach(checkbox => {
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
        const totalCheckboxes = testimonialCheckboxes.length;
        const checkedCheckboxes = document.querySelectorAll('.testimonial-checkbox:checked').length;
        
        if (selectAllCheckbox) {
            selectAllCheckbox.checked = totalCheckboxes > 0 && checkedCheckboxes === totalCheckboxes;
            selectAllCheckbox.indeterminate = checkedCheckboxes > 0 && checkedCheckboxes < totalCheckboxes;
        }
    }

    // Update bulk actions bar visibility and count
    function updateBulkActionsBar() {
        const checkedCheckboxes = document.querySelectorAll('.testimonial-checkbox:checked');
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
            const checkedCheckboxes = document.querySelectorAll('.testimonial-checkbox:checked');
            const testimonialIds = Array.from(checkedCheckboxes).map(cb => cb.value);
            
            if (testimonialIds.length === 0) {
                alert('Please select at least one testimonial to delete.');
                return;
            }

            const confirmMessage = `Are you sure you want to delete ${testimonialIds.length} testimonial(s)? This action cannot be undone.`;
            
            if (confirm(confirmMessage)) {
                // Create a form and submit
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ route("admin.testimonials.bulk-delete") }}';
                
                // CSRF Token
                const csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = '{{ csrf_token() }}';
                form.appendChild(csrfInput);
                
                // Testimonial IDs
                testimonialIds.forEach(id => {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'testimonial_ids[]';
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
@endpush
@endsection
