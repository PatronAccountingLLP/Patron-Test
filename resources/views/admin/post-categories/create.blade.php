@extends('admin.layouts.app')

@section('title', 'Create Post Category')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0 text-gray-800">Create Post Category</h1>
                <a href="{{ route('admin.post-categories.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left me-2"></i>Back to Categories
                </a>
            </div>

            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Category Information</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.post-categories.store') }}">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Category Name <span class="text-danger">*</span></label>
                                    <input type="text" 
                                           class="form-control @error('name') is-invalid @enderror" 
                                           id="name" 
                                           name="name" 
                                           value="{{ old('name') }}" 
                                           required 
                                           maxlength="255">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="slug" class="form-label">
                                        Slug 
                                        <span class="badge bg-info ms-1" id="slug-status" style="display: none;">Auto-generated</span>
                                    </label>
                                    <input type="text" 
                                           class="form-control @error('slug') is-invalid @enderror" 
                                           id="slug" 
                                           name="slug" 
                                           value="{{ old('slug') }}" 
                                           maxlength="255"
                                           placeholder="Leave empty to auto-generate">
                                    <div class="form-text" id="slug-help">URL-friendly version of the name. Leave empty to auto-generate with timestamp (format: category-name-YYYY-MM-DD-HHMMSS).</div>
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
                                      placeholder="Optional description for this category">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.post-categories.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary" style="background: #2b8a6a !important;">
                                <i class="bi bi-check-circle me-2"></i>Create Category
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const slugField = document.getElementById('slug');
    const slugStatus = document.getElementById('slug-status');
    const slugHelp = document.getElementById('slug-help');

    // Auto-generate slug preview from name
    document.getElementById('name').addEventListener('input', function() {
        if (!slugField.value || slugField.dataset.autoGenerated === 'true') {
            const baseSlug = this.value
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '') // Remove special characters except words, spaces, and hyphens
                .replace(/[\s_-]+/g, '-') // Replace spaces, underscores, and multiple hyphens with single hyphen
                .replace(/^-+|-+$/g, ''); // Remove leading/trailing hyphens
            
            // Show preview with timestamp format but leave field empty for backend generation
            if (baseSlug && baseSlug.length >= 2 && !isLoremIpsumLike(baseSlug)) {
                const now = new Date();
                const timestamp = now.getFullYear() + '-' + 
                    String(now.getMonth() + 1).padStart(2, '0') + '-' + 
                    String(now.getDate()).padStart(2, '0') + '-' + 
                    String(now.getHours()).padStart(2, '0') + 
                    String(now.getMinutes()).padStart(2, '0') + 
                    String(now.getSeconds()).padStart(2, '0');
                
                const previewSlug = baseSlug + '-' + timestamp;
                
                // Show preview but keep field empty for backend generation
                slugField.value = '';
                slugField.placeholder = previewSlug;
                slugField.dataset.autoGenerated = 'true';
                
                // Update visual feedback
                slugStatus.style.display = 'inline';
                slugStatus.textContent = 'Will be generated';
                slugStatus.className = 'badge bg-info ms-1';
                slugHelp.innerHTML = `Preview: <code>${previewSlug}</code><br>Actual slug will be generated on save with current timestamp.`;
            } else {
                // Clear the field if the generated slug looks problematic
                slugField.value = '';
                slugField.placeholder = 'Leave empty to auto-generate';
                slugField.dataset.autoGenerated = 'true';
                slugStatus.style.display = 'none';
                slugHelp.innerHTML = 'Backend will generate slug with timestamp from category name.';
            }
        }
    });

    // Helper function to detect Lorem ipsum-like text
    function isLoremIpsumLike(text) {
        const loremWords = ['lorem', 'ipsum', 'dolor', 'sit', 'amet', 'consectetur', 'adipiscing', 
                           'elit', 'sed', 'eiusmod', 'tempor', 'incididunt', 'labore', 'dolore', 
                           'magna', 'aliqua', 'molestiae', 'repellendus', 'doloribus', 'aliquip'];
        
        const lowerText = text.toLowerCase();
        let matchCount = 0;
        
        for (const word of loremWords) {
            if (lowerText.includes(word)) {
                matchCount++;
            }
        }
        
        return matchCount >= 2;
    }

    // Mark slug as manually edited when user types in it
    slugField.addEventListener('input', function() {
        this.dataset.autoGenerated = 'false';
        slugStatus.style.display = 'inline';
        slugStatus.textContent = 'Custom';
        slugStatus.className = 'badge bg-warning ms-1';
        slugHelp.innerHTML = 'Using custom slug. Clear field to auto-generate from name.';
    });

    // Reset to auto-generation when field is cleared
    slugField.addEventListener('blur', function() {
        if (!this.value.trim()) {
            this.dataset.autoGenerated = 'true';
            slugStatus.style.display = 'none';
            slugHelp.innerHTML = 'URL-friendly version of the name. Leave empty to auto-generate.';
            slugHelp.className = 'form-text text-muted';
        }
    });
</script>
@endpush