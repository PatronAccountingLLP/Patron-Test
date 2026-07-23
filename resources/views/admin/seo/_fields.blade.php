<div class="card mt-4">
    <div class="card-header text-white" style="background-color: #343a40;">
        <h5 class="mb-0">
            <i class="bi bi-search me-2"></i>SEO Settings
        </h5>
    </div>
    <div class="card-body">
        <!-- Meta Title -->
        <div class="mb-3">
            <label for="seo_meta_title" class="form-label">
                Meta Title
                <span class="text-muted">(Recommended: 50-60 characters)</span>
            </label>
            <input type="text" 
                   class="form-control @error('seo.meta_title') is-invalid @enderror" 
                   id="seo_meta_title" 
                   name="seo[meta_title]" 
                   value="{{ old('seo.meta_title', $page->seoMeta->meta_title ?? '') }}"
                   maxlength="255"
                   placeholder="Enter SEO meta title">
            <div class="form-text">
                <span id="meta_title_counter">0</span> / 255 characters
            </div>
            @error('seo.meta_title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Meta Description -->
        <div class="mb-3">
            <label for="seo_meta_description" class="form-label">
                Meta Description
                <span class="text-muted">(Recommended: 150-160 characters)</span>
            </label>
            <textarea class="form-control @error('seo.meta_description') is-invalid @enderror" 
                      id="seo_meta_description" 
                      name="seo[meta_description]" 
                      rows="3"
                      maxlength="500"
                      placeholder="Enter SEO meta description">{{ old('seo.meta_description', $page->seoMeta->meta_description ?? '') }}</textarea>
            <div class="form-text">
                <span id="meta_description_counter">0</span> / 500 characters
            </div>
            @error('seo.meta_description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Canonical URL -->
        <div class="mb-3">
            <label for="seo_canonical_url" class="form-label">
                Canonical URL
                <span class="text-muted">(Optional)</span>
            </label>
            <input type="url" 
                   class="form-control @error('seo.canonical_url') is-invalid @enderror" 
                   id="seo_canonical_url" 
                   name="seo[canonical_url]" 
                   value="{{ old('seo.canonical_url', $page->seoMeta->canonical_url ?? '') }}"
                   placeholder="https://example.com/page">
            <div class="form-text">
                Leave empty to auto-generate from current page URL
            </div>
            @error('seo.canonical_url')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Meta Keywords -->
        <div class="mb-3">
            <label for="seo_meta_keywords" class="form-label">
                Meta Keywords
                <span class="text-muted">(Comma-separated)</span>
            </label>
            <input type="text" 
                   class="form-control @error('seo.meta_keywords') is-invalid @enderror" 
                   id="seo_meta_keywords" 
                   name="seo[meta_keywords]" 
                   value="{{ old('seo.meta_keywords', $page->seoMeta->meta_keywords ?? '') }}"
                   placeholder="keyword1, keyword2, keyword3">
            <div class="form-text">
                Separate keywords with commas
            </div>
            @error('seo.meta_keywords')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Header Scripts -->
        <div class="mb-3">
            <label for="seo_header_scripts" class="form-label">
                Header Scripts
                <span class="text-muted">(Injected in &lt;head&gt;)</span>
            </label>
            <textarea class="form-control @error('seo.header_scripts') is-invalid @enderror" 
                      id="seo_header_scripts" 
                      name="seo[header_scripts]" 
                      rows="5"
                      placeholder="<script>// Custom header scripts</script>">{{ old('seo.header_scripts', $page->seoMeta->header_scripts ?? '') }}</textarea>
            <div class="form-text">
                Add custom scripts, meta tags, or tracking codes for the &lt;head&gt; section
            </div>
            @error('seo.header_scripts')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Footer Scripts -->
        <div class="mb-3">
            <label for="seo_footer_scripts" class="form-label">
                Footer Scripts
                <span class="text-muted">(Injected before &lt;/body&gt;)</span>
            </label>
            <textarea class="form-control @error('seo.footer_scripts') is-invalid @enderror" 
                      id="seo_footer_scripts" 
                      name="seo[footer_scripts]" 
                      rows="5"
                      placeholder="<script>// Custom footer scripts</script>">{{ old('seo.footer_scripts', $page->seoMeta->footer_scripts ?? '') }}</textarea>
            <div class="form-text">
                Add custom scripts or tracking codes before the closing &lt;/body&gt; tag
            </div>
            @error('seo.footer_scripts')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- SEO Preview -->
        <div class="alert alert-info">
            <strong><i class="bi bi-info-circle me-2"></i>SEO Preview</strong>
            <div class="mt-2" id="seo_preview">
                <div class="text-primary fw-bold" id="preview_title">{{ $page->title ?? 'Page Title' }}</div>
                <div class="text-success small" id="preview_url">{{ url()->current() }}</div>
                <div class="text-muted small" id="preview_description">Meta description will appear here...</div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Character counters
    const metaTitleInput = document.getElementById('seo_meta_title');
    const metaDescriptionInput = document.getElementById('seo_meta_description');
    const metaTitleCounter = document.getElementById('meta_title_counter');
    const metaDescriptionCounter = document.getElementById('meta_description_counter');
    
    // Preview elements
    const previewTitle = document.getElementById('preview_title');
    const previewDescription = document.getElementById('preview_description');
    const previewUrl = document.getElementById('preview_url');
    
    // Update counters
    function updateCounter(input, counter) {
        counter.textContent = input.value.length;
        
        // Warning color if exceeding recommended length
        if (input === metaTitleInput && input.value.length > 60) {
            counter.classList.add('text-warning');
            counter.classList.remove('text-success');
        } else if (input === metaDescriptionInput && input.value.length > 160) {
            counter.classList.add('text-warning');
            counter.classList.remove('text-success');
        } else {
            counter.classList.remove('text-warning');
            counter.classList.add('text-success');
        }
    }
    
    // Update preview
    function updatePreview() {
        if (metaTitleInput && metaTitleInput.value) {
            previewTitle.textContent = metaTitleInput.value;
        }
        
        if (metaDescriptionInput && metaDescriptionInput.value) {
            previewDescription.textContent = metaDescriptionInput.value;
        }
        
        const canonicalInput = document.getElementById('seo_canonical_url');
        if (canonicalInput && canonicalInput.value) {
            previewUrl.textContent = canonicalInput.value;
        }
    }
    
    // Initialize counters
    if (metaTitleInput) {
        updateCounter(metaTitleInput, metaTitleCounter);
        metaTitleInput.addEventListener('input', function() {
            updateCounter(this, metaTitleCounter);
            updatePreview();
        });
    }
    
    if (metaDescriptionInput) {
        updateCounter(metaDescriptionInput, metaDescriptionCounter);
        metaDescriptionInput.addEventListener('input', function() {
            updateCounter(this, metaDescriptionCounter);
            updatePreview();
        });
    }
    
    // Update canonical URL preview
    const canonicalInput = document.getElementById('seo_canonical_url');
    if (canonicalInput) {
        canonicalInput.addEventListener('input', updatePreview);
    }
    
    // Initial preview update
    updatePreview();
});
</script>
@endpush
