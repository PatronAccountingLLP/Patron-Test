@extends('admin.layouts.app')

@section('title', 'Edit Category: ' . $category->name)

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Category: {{ $category->name }}</h1>
                <div>
                    <a href="{{ route('admin.post-categories.show', $category) }}" class="btn btn-info">
                        <i class="bi bi-eye me-2"></i>View Category
                    </a>
                    <a href="{{ route('admin.post-categories.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left me-2"></i>Back to Categories
                    </a>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Category Information</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.post-categories.update', $category) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Category Name <span class="text-danger">*</span></label>
                                    <input type="text" 
                                           class="form-control @error('name') is-invalid @enderror" 
                                           id="name" 
                                           name="name" 
                                           value="{{ old('name', $category->name) }}" 
                                           required 
                                           maxlength="255">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" 
                                           class="form-control @error('slug') is-invalid @enderror" 
                                           id="slug" 
                                           name="slug" 
                                           value="{{ old('slug', $category->slug) }}" 
                                           maxlength="255">
                                    <div class="form-text">URL-friendly version of the name. Clear field to regenerate with new timestamp.</div>
                                    @error('slug')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" 
                                      name="description" 
                                      rows="4"
                                      placeholder="Optional description for this category">{{ old('description', $category->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Posts in this category:</strong> 
                                    <span class="badge bg-info">{{ $category->posts()->count() }} posts</span>
                                </div>
                                <div class="col-md-6">
                                    <strong>Created:</strong> {{ $category->created_at->format('M d, Y') }}
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.post-categories.show', $category) }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary" style="background: #2b8a6a !important;">
                                <i class="bi bi-check-circle me-2"></i>Update Category
                            </button>
                        </div>
                    </form>

                    <hr class="mt-4">

                    <div class="text-start">
                        <h6 class="text-danger mb-3">Danger Zone</h6>
                        <form method="POST" 
                              action="{{ route('admin.post-categories.destroy', $category) }}"
                              onsubmit="return confirm('Are you sure you want to delete this category? This will remove it from all associated posts.')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash me-2"></i>Delete Category
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Auto-generate slug from name (but only if slug is empty or auto-generated)
    document.getElementById('name').addEventListener('input', function() {
        const slugField = document.getElementById('slug');
        const originalSlug = '{{ $category->slug }}';
        
        // Only auto-update if the slug hasn't been manually changed
        if (slugField.value === originalSlug || slugField.dataset.autoGenerated === 'true') {
            const slug = this.value
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '') // Remove special characters except words, spaces, and hyphens
                .replace(/[\s_-]+/g, '-') // Replace spaces, underscores, and multiple hyphens with single hyphen
                .replace(/^-+|-+$/g, ''); // Remove leading/trailing hyphens
            slugField.value = slug;
            slugField.dataset.autoGenerated = 'true';
        }
    });

    // Mark slug as manually edited when user types in it
    document.getElementById('slug').addEventListener('input', function() {
        this.dataset.autoGenerated = 'false';
    });

    // Add helpful feedback
    document.getElementById('slug').addEventListener('blur', function() {
        if (!this.value.trim()) {
            const helpText = this.parentNode.querySelector('.form-text');
            if (helpText) {
                helpText.innerHTML = 'Leave empty to auto-generate from category name.';
                helpText.className = 'form-text text-muted';
            }
        }
    });
</script>
@endpush