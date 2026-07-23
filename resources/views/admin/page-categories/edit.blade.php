@extends('admin.layouts.app')

@section('title', 'Edit Category: ' . $category->name)

@section('content')
<div class="d-flex justify-content-between align-items-center mb-6">
    <div>
        <h1 class="h1">Edit Category: {{ $category->name }}</h1>
        <p class="text-small">Update category information and settings</p>
    </div>
    <div style="display: flex; gap: var(--space-3);">
        <a href="{{ route('admin.page-categories.show', $category) }}" class="btn-professional btn-professional-teal">
            <i class="bi bi-eye"></i>View Category
        </a>
        <a href="{{ route('admin.page-categories.index') }}" class="btn-professional btn-professional-outline">
            <i class="bi bi-arrow-left"></i>Back to Categories
        </a>
    </div>
</div>

<div class="card-professional">
    <div class="card-professional-header">
        <h3 class="card-professional-title">Category Information</h3>
    </div>
    <div class="card-professional-body">
        <form method="POST" action="{{ route('admin.page-categories.update', $category) }}">
            @csrf
            @method('PUT')
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-6); margin-bottom: var(--space-6);">
                <div class="form-professional">
                    <label for="name" class="form-label-professional">Category Name <span style="color: var(--red-alert);">*</span></label>
                    <input type="text" 
                           class="form-input-professional @error('name') is-invalid @enderror" 
                           id="name" 
                           name="name" 
                           value="{{ old('name', $category->name) }}" 
                           required 
                           maxlength="255">
                    @error('name')
                        <div style="color: var(--red-alert); font-size: var(--text-xs); margin-top: var(--space-1);">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-professional">
                    <label for="slug" class="form-label-professional">Slug</label>
                    <input type="text" 
                           class="form-input-professional @error('slug') is-invalid @enderror" 
                           id="slug" 
                           name="slug" 
                           value="{{ old('slug', $category->slug) }}" 
                           maxlength="255">
                    <div class="text-small" style="color: var(--neutral-gray); margin-top: var(--space-1);">URL-friendly version of the name. Leave empty to auto-generate.</div>
                    @error('slug')
                        <div style="color: var(--red-alert); font-size: var(--text-xs); margin-top: var(--space-1);">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-professional">
                <label for="description" class="form-label-professional">Description</label>
                <textarea class="form-input-professional @error('description') is-invalid @enderror" 
                          id="description" 
                          name="description" 
                          rows="4"
                          style="resize: vertical;"
                          placeholder="Optional description for this category">{{ old('description', $category->description) }}</textarea>
                @error('description')
                    <div style="color: var(--red-alert); font-size: var(--text-xs); margin-top: var(--space-1);">{{ $message }}</div>
                @enderror
            </div>

            <div style="background: var(--gray-50); padding: var(--space-4); border-radius: var(--radius-md); margin: var(--space-6) 0;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-6);">
                    <div>
                        <strong>Pages in this category:</strong> 
                        <span class="badge-professional badge-primary">{{ $category->pages()->count() }} pages</span>
                    </div>
                    <div>
                        <strong>Created:</strong> 
                        <span class="text-small">{{ $category->created_at->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>

            <div style="display: flex; justify-content: flex-end; gap: var(--space-3);">
                <a href="{{ route('admin.page-categories.show', $category) }}" class="btn-professional btn-professional-outline">Cancel</a>
                <button type="submit" class="btn-professional btn-professional-primary">
                    <i class="bi bi-check-circle"></i>Update Category
                </button>
            </div>
        </form>
    </div>
</div>

<div class="card-professional" style="margin-top: var(--space-6);">
    <div class="card-professional-header">
        <h3 class="card-professional-title" style="color: var(--red-alert);">Danger Zone</h3>
    </div>
    <div class="card-professional-body">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                <h5>Delete Category</h5>
                <p class="text-small" style="color: var(--neutral-gray);">
                    Permanently delete this category. This will remove it from all associated pages.
                </p>
            </div>
            <form method="POST" 
                  action="{{ route('admin.page-categories.destroy', $category) }}"
                  onsubmit="return confirm('Are you sure you want to delete this category? This will remove it from all associated pages.')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-professional btn-professional-danger">
                    <i class="bi bi-trash"></i>Delete Category
                </button>
            </form>
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
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .trim('-');
            slugField.value = slug;
            slugField.dataset.autoGenerated = 'true';
        }
    });

    // Mark slug as manually edited when user types in it
    document.getElementById('slug').addEventListener('input', function() {
        this.dataset.autoGenerated = 'false';
    });
</script>
@endpush