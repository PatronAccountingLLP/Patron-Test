@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Edit Post: {{ $post->title }}</h1>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to Posts
                </a>
            </div>

            <form method="POST" action="{{ route('admin.posts.update', $post) }}" enctype="multipart/form-data">
                    {{-- Show validation errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Show success message --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Post Title *</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                           id="title" name="title" value="{{ old('title', $post->title) }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="slug" class="form-label">Post Slug</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                                           id="slug" name="slug" value="{{ old('slug', $post->slug) }}">
                                    <div class="form-text">URL-friendly version of the title (auto-generated if empty)</div>
                                    @error('slug')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Trending Badge Section -->
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h6 class="mb-0">Trending Badge</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="trending_badge" class="form-label">Badge Text</label>
                                            <input type="text" class="form-control @error('trending_badge') is-invalid @enderror" 
                                                   id="trending_badge" name="trending_badge" value="{{ old('trending_badge', $post->trending_badge) }}"
                                                   placeholder="e.g., HSN CODE, CDSCO, TRENDING, NEW">
                                            <div class="form-text">
                                                <small>Enter a badge text to display on the post card (e.g., "HSN CODE", "CDSCO", "TRENDING"). Leave empty to hide the badge.</small>
                                            </div>
                                            @error('trending_badge')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="alert alert-info mb-0">
                                            <i class="bi bi-info-circle me-2"></i>
                                            <strong>Preview:</strong> This badge will appear at the top of the post card in the posts listing page.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ Section -->
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0">FAQ Section</h6>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="faq_enabled" name="faq_enabled" value="1" {{ old('faq_enabled', $post->faq_enabled) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="faq_enabled">Enable FAQ Section</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="faq-content" style="display: {{ old('faq_enabled', $post->faq_enabled) ? 'block' : 'none' }};">
                                            <div class="mb-3">
                                                <label for="faq_title" class="form-label">FAQ Section Title</label>
                                                <input type="text" class="form-control @error('faq_title') is-invalid @enderror" 
                                                       id="faq_title" name="faq_title" 
                                                       value="{{ old('faq_title', $post->faq_title ?: 'Frequently Asked Questions') }}">
                                                @error('faq_title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="faq_subtitle" class="form-label">FAQ Section Subtitle</label>
                                                <textarea class="form-control @error('faq_subtitle') is-invalid @enderror" 
                                                          id="faq_subtitle" name="faq_subtitle" rows="2">{{ old('faq_subtitle', $post->faq_subtitle ?: 'Have a look at the answers to the most asked questions.') }}</textarea>
                                                @error('faq_subtitle')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <label class="form-label mb-0">FAQ Items</label>
                                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="addFAQItem()">
                                                        <i class="bi bi-plus-circle"></i> Add FAQ Item
                                                    </button>
                                                </div>

                                                <div id="faq-items-container">
                                                    @php
                                                        $faqItems = old('faq_items', $post->faq_items ?: []);
                                                        if (empty($faqItems)) {
                                                            $faqItems = [['question' => '', 'answer' => '']];
                                                        }
                                                    @endphp
                                                    @foreach($faqItems as $index => $faq_item)
                                                        <div class="faq-item border rounded p-3 mb-3" data-index="{{ $index }}">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="mb-0">FAQ Item #<span class="faq-number">{{ $index + 1 }}</span></h6>
                                                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeFAQItem(this)" {{ $index === 0 ? 'disabled' : '' }}>
                                                                    <i class="bi bi-trash"></i> Remove
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 mb-2">
                                                                    <label class="form-label">Question</label>
                                                                    <input type="text" class="form-control faq-question-input" name="faq_items[{{ $index }}][question]" value="{{ $faq_item['question'] ?? '' }}" placeholder="Enter your question here...">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Answer</label>
                                                                    <textarea class="form-control faq-answer-input" name="faq_items[{{ $index }}][answer]" rows="3" placeholder="Enter the answer here...">{{ $faq_item['answer'] ?? '' }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <div class="alert alert-info">
                                                    <i class="bi bi-info-circle"></i>
                                                    <strong>Note:</strong> FAQ items will be stored as JSON data and displayed in the post. At least one FAQ item is required when FAQ section is enabled.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="content" class="form-label">Content *</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" 
                                              id="content" name="content" rows="15">{{ old('content', $post->content) }}</textarea>
                                    @error('content')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">Use the rich text editor above to format your content with headings, links, images, and more.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="key_points" class="form-label">Key Points *</label>
                                    <textarea class="form-control @error('key_points') is-invalid @enderror" 
                                              id="key_points" name="key_points" rows="15">{{ old('key_points', $post->key_points) }}</textarea>
                                    @error('key_points')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">Use the rich text editor above to format your content with headings, links, images, and more.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h6 class="mb-0">Publish</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control @error('status') is-invalid @enderror" 
                                            id="status" name="status">
                                        <option value="draft" {{ old('status', 'draft') == 'draft' ? 'selected' : '' }}>Draft</option>
                                        <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>Published</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="published_at" class="form-label">Publish Date</label>
                                    <input type="datetime-local" class="form-control @error('published_at') is-invalid @enderror" 
                                           id="published_at" name="published_at" 
                                           value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}">
                                    @error('published_at')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-end gap-2">
                                    <button type="submit" name="action" value="draft" class="btn btn-secondary">Save Draft</button>
                                    <button type="submit" name="action" value="publish" class="btn btn-primary" style="background: #2b8a6a !important;">Update</button>
                                </div>
                            </div>
                        </div>

                        <!-- SEO Settings -->
                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">
                                    <i class="bi bi-search me-2"></i>SEO Settings
                                </h6>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="seo_enabled" checked>
                                    <label class="form-check-label" for="seo_enabled">
                                        <small>Enable SEO</small>
                                    </label>
                                </div>
                            </div>
                            <div class="card-body" id="seo-content">
                                <div class="alert alert-info mb-3">
                                    <i class="bi bi-info-circle me-2"></i>
                                    <strong>SEO Best Practices:</strong> Optimize your content for search engines by filling out these fields.
                                </div>

                                <div class="mb-3">
                                    <label for="meta_title" class="form-label">
                                        <i class="bi bi-type me-1"></i>Meta Title
                                    </label>
                                    <input type="text" class="form-control @error('meta_title') is-invalid @enderror" 
                                           id="meta_title" name="meta_title" value="{{ old('meta_title', $post->meta_title) }}"
                                           maxlength="60" placeholder="SEO title (50-60 chars)">
                                    <div class="form-text">
                                        <span id="meta-title-counter" class="badge bg-secondary">0</span>/60
                                        <span id="meta-title-status" class="badge bg-warning ms-1">Too short</span>
                                    </div>
                                    @error('meta_title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="meta_description" class="form-label">
                                        <i class="bi bi-text-paragraph me-1"></i>Meta Description
                                    </label>
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror" 
                                              id="meta_description" name="meta_description" rows="3" 
                                              maxlength="160" placeholder="SEO description (120-160 chars)">{{ old('meta_description', $post->meta_description) }}</textarea>
                                    <div class="form-text">
                                        <span id="meta-description-counter" class="badge bg-secondary">0</span>/160
                                        <span id="meta-description-status" class="badge bg-warning ms-1">Too short</span>
                                    </div>
                                    @error('meta_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="seo_canonical_url" class="form-label">
                                        <i class="bi bi-link-45deg me-1"></i>Canonical URL
                                    </label>
                                    <input type="url" class="form-control @error('seo_canonical_url') is-invalid @enderror" 
                                           id="seo_canonical_url" name="seo_canonical_url" value="{{ old('seo_canonical_url', $post->seo_canonical_url) }}"
                                           placeholder="https://example.com/page">
                                    <small class="form-text text-muted">Leave empty to auto-generate</small>
                                    @error('seo_canonical_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="meta_keywords" class="form-label">
                                        <i class="bi bi-tags me-1"></i>Meta Keywords
                                    </label>
                                    <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" 
                                           id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords', $post->meta_keywords) }}"
                                           placeholder="keyword1, keyword2, keyword3">
                                    <div id="keywords-preview" class="mt-2"></div>
                                    @error('meta_keywords')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="seo_header_scripts" class="form-label">
                                        <i class="bi bi-code-slash me-1"></i>Header Scripts
                                    </label>
                                    <textarea class="form-control @error('seo_header_scripts') is-invalid @enderror" 
                                              id="seo_header_scripts" name="seo_header_scripts" rows="4"
                                              placeholder="<script>// Custom header scripts</script>">{{ old('seo_header_scripts', $post->seo_header_scripts) }}</textarea>
                                    <small class="form-text text-muted">Injected in &lt;head&gt; section</small>
                                    @error('seo_header_scripts')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="seo_footer_scripts" class="form-label">
                                        <i class="bi bi-code-slash me-1"></i>Footer Scripts
                                    </label>
                                    <textarea class="form-control @error('seo_footer_scripts') is-invalid @enderror" 
                                              id="seo_footer_scripts" name="seo_footer_scripts" rows="4"
                                              placeholder="<script>// Custom footer scripts</script>">{{ old('seo_footer_scripts', $post->seo_footer_scripts) }}</textarea>
                                    <small class="form-text text-muted">Injected before &lt;/body&gt; tag</small>
                                    @error('seo_footer_scripts')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="card bg-light border-0">
                                    <div class="card-header bg-transparent">
                                        <h6 class="mb-0 small"><i class="bi bi-eye me-1"></i>Search Engine Preview</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="seo-preview">
                                            <div class="seo-preview-title text-primary small" id="seo-preview-title">Your Post Title</div>
                                            <div class="seo-preview-url text-success small" id="seo-preview-url">https://example.com/post-slug</div>
                                            <div class="seo-preview-description text-muted small" id="seo-preview-description">Your meta description will appear here...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header">
                                <h6 class="mb-0">Categories</h6>
                            </div>
                            <div class="card-body">
                                @foreach($categories as $category)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" 
                                               id="category_{{ $category->id }}" 
                                               name="categories[]" value="{{ $category->id }}"
                                               {{ in_array($category->id, old('categories', $post->categories->pluck('id')->toArray())) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="category_{{ $category->id }}">
                                            {{ $category->name }}
                                        </label>
                                    </div>
                                @endforeach

                                @if($categories->isEmpty())
                                    <p class="text-muted">No categories available. 
                                        <a href="{{ route('admin.post-categories.create') }}">Create one</a>
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header">
                                <h6 class="mb-0">Associated Users</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="user-search" class="form-label">Search Users</label>
                                    <input type="text" class="form-control" id="user-search" placeholder="Type to search users...">
                                </div>
                                
                                <div class="users-dropdown" style="max-height: 200px; overflow-y: auto; border: 1px solid #dee2e6; border-radius: 0.375rem; padding: 0.5rem;">
                                    @foreach($users as $user)
                                        <div class="form-check user-item" data-user-name="{{ strtolower($user->name) }}" data-user-email="{{ strtolower($user->email) }}">
                                            <input class="form-check-input user-radio" type="radio" 
                                                   id="user_{{ $user->id }}" 
                                                   name="user_id" 
                                                   value="{{ $user->id }}"
                                                   {{ $post->users->contains($user->id) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="user_{{ $user->id }}">
                                                <div>
                                                    <strong>{{ $user->name }}</strong>
                                                    <br><small class="text-muted">{{ $user->email }}</small>
                                                    @if($user->role)
                                                        <span class="badge bg-secondary ms-1">{{ ucfirst($user->role) }}</span>
                                                    @endif
                                                </div>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                                @if($users->isEmpty())
                                    <p class="text-muted">No users available.</p>
                                @else
                                    <div class="mt-2">
                                        <small class="text-muted">{{ $users->count() }} users available</small>
                                    </div>
                                @endif

                                <!-- Selected User Display -->
                                <div class="mt-3">
                                    <h6 class="mb-2">Selected User:</h6>
                                    <div id="selected-user" class="d-flex flex-wrap gap-1">
                                        @if($post->users->count() > 0)
                                            <span class="badge bg-primary user-badge" data-user-id="{{ $post->users->first()->id }}">
                                                {{ $post->users->first()->name }} <i class="bi bi-x ms-1" style="cursor: pointer;" onclick="removeUser({{ $post->users->first()->id }})"></i>
                                            </span>
                                        @endif
                                    </div>
                                    <div id="no-user-selected" class="text-muted" style="{{ $post->users->count() > 0 ? 'display: none;' : '' }}">
                                        <small>No user selected</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0">Featured Image</h6>
                            </div>
                            <div class="card-body">
                                @if($post->featured_image)
                                    <div class="current-image mb-3 text-center">
                                        <img src="{{ $post->featured_image_url }}" alt="Current featured image" 
                                             class="img-fluid rounded" style="max-height: 150px;">
                                        <div class="mt-2">
                                            <small class="text-muted">Current Image</small>
                                        </div>
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <input type="file" class="form-control @error('featured_image') is-invalid @enderror" 
                                           id="featured_image" name="featured_image" accept="image/*">
                                    @error('featured_image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    @if($post->featured_image)
                                        <div class="form-text">Select a new image to replace the current one</div>
                                    @endif
                                </div>

                                <div id="image-preview" class="text-center" style="display: none;">
                                    <img id="preview-img" src="" alt="Preview" class="img-fluid rounded" style="max-height: 200px;">
                                    <button type="button" class="btn btn-sm btn-outline-danger mt-2" onclick="removePreview()">Remove</button>
                                </div>

                                @if($post->featured_image)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" 
                                               id="remove_image" name="remove_image" value="1">
                                        <label class="form-check-label" for="remove_image">
                                            Remove current image
                                        </label>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Auto-generate slug from title
document.getElementById('title').addEventListener('input', function() {
    const title = this.value;
    const slug = title.toLowerCase()
        .replace(/[^\w\s-]/g, '') // Remove special characters
        .replace(/[\s_-]+/g, '-') // Replace spaces and underscores with hyphens
        .replace(/^-+|-+$/g, ''); // Remove leading/trailing hyphens
    document.getElementById('slug').value = slug;
});

// Also validate slug field manually if user types in it
document.getElementById('slug').addEventListener('input', function() {
    let slug = this.value.toLowerCase()
        .replace(/[^\w\s-]/g, '')
        .replace(/[\s_-]+/g, '-')
        .replace(/^-+|-+$/g, '');
    this.value = slug;
});

// Image preview
document.getElementById('featured_image').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview-img').src = e.target.result;
            document.getElementById('image-preview').style.display = 'block';
            // Hide current image and remove checkbox when new image is selected
            const currentImage = document.querySelector('.current-image');
            const removeCheckbox = document.getElementById('remove_image');
            if (currentImage) currentImage.style.display = 'none';
            if (removeCheckbox) removeCheckbox.checked = false;
        };
        reader.readAsDataURL(file);
    }
});

function removePreview() {
    document.getElementById('featured_image').value = '';
    document.getElementById('image-preview').style.display = 'none';
    // Show current image again if it exists
    const currentImage = document.querySelector('.current-image');
    if (currentImage) currentImage.style.display = 'block';
}

// Auto-set publish date when status changes to published
document.getElementById('status').addEventListener('change', function() {
    if (this.value === 'published' && !document.getElementById('published_at').value) {
        const now = new Date();
        // Format for datetime-local input (YYYY-MM-DDTHH:MM)
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0');
        const day = String(now.getDate()).padStart(2, '0');
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        document.getElementById('published_at').value = `${year}-${month}-${day}T${hours}:${minutes}`;
    }
});

// Handle remove image checkbox
document.getElementById('remove_image')?.addEventListener('change', function() {
    if (this.checked) {
        // Clear file input and hide preview
        document.getElementById('featured_image').value = '';
        document.getElementById('image-preview').style.display = 'none';
    }
});

// SEO Settings Toggle
document.getElementById('seo_enabled').addEventListener('change', function() {
    const seoContent = document.getElementById('seo-content');
    seoContent.style.display = this.checked ? 'block' : 'none';
});

// SEO Character Counters and Status
const metaTitleInput = document.getElementById('meta_title');
const metaDescInput = document.getElementById('meta_description');
const metaKeywordsInput = document.getElementById('meta_keywords');
const titleInput = document.getElementById('title');
const slugInput = document.getElementById('slug');

// Meta Title Counter and Status
metaTitleInput.addEventListener('input', function() {
    const length = this.value.length;
    const counter = document.getElementById('meta-title-counter');
    const status = document.getElementById('meta-title-status');
    
    counter.textContent = length;
    counter.className = 'badge bg-secondary';
    
    if (length === 0) {
        status.textContent = 'Empty';
        status.className = 'badge bg-secondary';
    } else if (length < 30) {
        status.textContent = 'Too short';
        status.className = 'badge bg-warning';
    } else if (length >= 30 && length <= 60) {
        status.textContent = 'Good';
        status.className = 'badge bg-success';
    } else {
        status.textContent = 'Too long';
        status.className = 'badge bg-danger';
    }
    
    updateSEOPreview();
});

// Meta Description Counter and Status
metaDescInput.addEventListener('input', function() {
    const length = this.value.length;
    const counter = document.getElementById('meta-description-counter');
    const status = document.getElementById('meta-description-status');
    
    counter.textContent = length;
    counter.className = 'badge bg-secondary';
    
    if (length === 0) {
        status.textContent = 'Empty';
        status.className = 'badge bg-secondary';
    } else if (length < 70) {
        status.textContent = 'Too short';
        status.className = 'badge bg-warning';
    } else if (length >= 70 && length <= 160) {
        status.textContent = 'Good';
        status.className = 'badge bg-success';
    } else {
        status.textContent = 'Too long';
        status.className = 'badge bg-danger';
    }
    
    updateSEOPreview();
});

// Meta Keywords Preview
metaKeywordsInput.addEventListener('input', function() {
    const keywords = this.value.split(',').map(k => k.trim()).filter(k => k.length > 0);
    const preview = document.getElementById('keywords-preview');
    
    if (keywords.length > 0) {
        preview.innerHTML = keywords.map(k => `<span class="badge bg-primary me-1 mb-1">${k}</span>`).join('');
    } else {
        preview.innerHTML = '';
    }
});

// SEO Preview Update
function updateSEOPreview() {
    const titlePreview = document.getElementById('seo-preview-title');
    const urlPreview = document.getElementById('seo-preview-url');
    const descPreview = document.getElementById('seo-preview-description');
    
    // Title
    const title = metaTitleInput.value || titleInput.value || 'Your Post Title Will Appear Here';
    titlePreview.textContent = title.length > 60 ? title.substring(0, 60) + '...' : title;
    
    // URL
    const slug = slugInput.value || 'post-slug';
    urlPreview.textContent = `/blog/${slug}`;
    
    // Description
    const desc = metaDescInput.value || 'Your meta description will appear here. Make it compelling to encourage clicks from search results.';
    descPreview.textContent = desc.length > 160 ? desc.substring(0, 160) + '...' : desc;
}

// Update preview when title or slug changes
titleInput.addEventListener('input', updateSEOPreview);
slugInput.addEventListener('input', updateSEOPreview);

// Initialize counters on page load
document.addEventListener('DOMContentLoaded', function() {
    metaTitleInput.dispatchEvent(new Event('input'));
    metaDescInput.dispatchEvent(new Event('input'));
    metaKeywordsInput.dispatchEvent(new Event('input'));
    updateSEOPreview();
});

// User search functionality
document.getElementById('user-search').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const userItems = document.querySelectorAll('.user-item');
    
    userItems.forEach(function(item) {
        const userName = item.getAttribute('data-user-name');
        const userEmail = item.getAttribute('data-user-email');
        
        if (userName.includes(searchTerm) || userEmail.includes(searchTerm)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
});

// Handle user radio button changes
document.querySelectorAll('input[name="user_id"]').forEach(function(radio) {
    radio.addEventListener('change', function() {
        updateSelectedUser();
    });
});

function updateSelectedUser() {
    const selectedUserContainer = document.getElementById('selected-user');
    const noUserSelected = document.getElementById('no-user-selected');
    const selectedRadio = document.querySelector('input[name="user_id"]:checked');
    
    selectedUserContainer.innerHTML = '';
    
    if (!selectedRadio) {
        noUserSelected.style.display = 'block';
    } else {
        noUserSelected.style.display = 'none';
        
        const userId = selectedRadio.value;
        const userLabel = selectedRadio.closest('.form-check').querySelector('label strong').textContent;
        
        const badge = document.createElement('span');
        badge.className = 'badge bg-primary user-badge';
        badge.setAttribute('data-user-id', userId);
        badge.innerHTML = `${userLabel} <i class="bi bi-x ms-1" style="cursor: pointer;" onclick="removeUser(${userId})"></i>`;
        
        selectedUserContainer.appendChild(badge);
    }
}

function removeUser(userId) {
    // Uncheck the corresponding radio button
    const radio = document.getElementById(`user_${userId}`);
    if (radio) {
        radio.checked = false;
        updateSelectedUser();
    }
}

// FAQ Toggle Functionality
document.getElementById('faq_enabled').addEventListener('change', function() {
    const faqContent = document.getElementById('faq-content');
    
    if (this.checked) {
        faqContent.style.display = 'block';
        // Enable all FAQ inputs
        faqContent.querySelectorAll('input, textarea').forEach(input => {
            input.disabled = false;
        });
    } else {
        faqContent.style.display = 'none';
        // Disable all FAQ inputs so they won't be submitted
        faqContent.querySelectorAll('input, textarea').forEach(input => {
            input.disabled = true;
        });
    }
});

// Initialize required attribute based on initial state
document.addEventListener('DOMContentLoaded', function() {
    const faqEnabled = document.getElementById('faq_enabled').checked;
    const faqQuestionInputs = document.querySelectorAll('.faq-question-input');
    const faqAnswerInputs = document.querySelectorAll('.faq-answer-input');
    
    if (faqEnabled) {
        faqQuestionInputs.forEach(input => input.setAttribute('required', 'required'));
        faqAnswerInputs.forEach(input => input.setAttribute('required', 'required'));
    } else {
        faqQuestionInputs.forEach(input => input.removeAttribute('required'));
        faqAnswerInputs.forEach(input => input.removeAttribute('required'));
    }
});

// FAQ Management Functions
let faqItemIndex = {{ $post->faq_items ? count($post->faq_items) : 1 }};

function addFAQItem() {
    const container = document.getElementById('faq-items-container');
    const newItem = document.createElement('div');
    newItem.className = 'faq-item border rounded p-3 mb-3';
    newItem.setAttribute('data-index', faqItemIndex);
    
    const faqEnabled = document.getElementById('faq_enabled').checked;
    const requiredAttr = faqEnabled ? 'required' : '';
    
    newItem.innerHTML = `
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h6 class="mb-0">FAQ Item #<span class="faq-number">${faqItemIndex + 1}</span></h6>
            <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeFAQItem(this)">
                <i class="bi bi-trash"></i> Remove
            </button>
        </div>
        <div class="row">
            <div class="col-12 mb-2">
                <label class="form-label">Question</label>
                <input type="text" class="form-control faq-question-input" name="faq_items[${faqItemIndex}][question]" placeholder="Enter your question here..." ${requiredAttr}>
            </div>
            <div class="col-12">
                <label class="form-label">Answer</label>
                <textarea class="form-control faq-answer-input" name="faq_items[${faqItemIndex}][answer]" rows="3" placeholder="Enter the answer here..." ${requiredAttr}></textarea>
            </div>
        </div>
    `;
    
    container.appendChild(newItem);
    faqItemIndex++;
    updateFAQNumbers();
}

function removeFAQItem(button) {
    const faqItem = button.closest('.faq-item');
    const container = document.getElementById('faq-items-container');
    
    // Don't allow removing if it's the only item
    if (container.children.length > 1) {
        faqItem.remove();
        updateFAQNumbers();
    }
}

function updateFAQNumbers() {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach((item, index) => {
        const numberSpan = item.querySelector('.faq-number');
        const removeButton = item.querySelector('.btn-outline-danger');
        
        numberSpan.textContent = index + 1;
        
        // Disable remove button for first item
        if (index === 0) {
            removeButton.disabled = true;
        } else {
            removeButton.disabled = false;
        }
    });
}
</script>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
/* CKEditor Custom Styling */
.ck-editor__editable {
    min-height: 500px;
    max-height: 800px;
}

.ck.ck-editor {
    width: 100%;
}

.ck.ck-editor__main>.ck-editor__editable {
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: 0 0 0.375rem 0.375rem;
}

.ck.ck-toolbar {
    border: 1px solid #dee2e6;
    border-radius: 0.375rem 0.375rem 0 0;
    background: #f8f9fa;
}

/* Content styling within editor */
.ck-content h1 { font-size: 2em; }
.ck-content h2 { font-size: 1.5em; }
.ck-content h3 { font-size: 1.3em; }
.ck-content h4 { font-size: 1.1em; }
.ck-content h5 { font-size: 1em; }
.ck-content h6 { font-size: 0.9em; }

.ck-content table {
    border-collapse: collapse;
    margin: 1em 0;
}

.ck-content table td,
.ck-content table th {
    border: 1px solid #ddd;
    padding: 0.4em 0.8em;
}

.ck-content blockquote {
    border-left: 4px solid #ccc;
    padding-left: 1em;
    margin: 1em 0;
    font-style: italic;
}

.ck-content code {
    background-color: #f4f4f4;
    padding: 0.2em 0.4em;
    border-radius: 3px;
    font-family: monospace;
}

.ck-content pre {
    background-color: #f4f4f4;
    padding: 1em;
    border-radius: 4px;
    overflow-x: auto;
}

.ck-content img {
    max-width: 100%;
    height: auto;
}
</style>

<script>
// // Register table module if available
// if (window.QuillTable) {
//     Quill.register('modules/table', QuillTable.TableModule);
// }

// // Hide the original textarea
// document.getElementById('content').style.display = 'none';

// // Create editor container wrapper
// const editorWrapper = document.createElement('div');
// editorWrapper.className = 'editor-wrapper';

// // Create toggle buttons
// const toggleButtons = document.createElement('div');
// toggleButtons.className = 'editor-toggle-buttons';
// toggleButtons.innerHTML = `
//     <button type="button" class="toggle-btn active" id="visual-toggle">
//         <i class="bi bi-eye"></i> Visual Editor
//     </button>
//     <button type="button" class="toggle-btn" id="html-toggle">
//         <i class="bi bi-code-slash"></i> HTML/CSS Code
//     </button>
// `;

// // Create Quill editor container
// const editorContainer = document.createElement('div');
// editorContainer.id = 'quill-editor';

// // Create HTML code editor
// const htmlCodeEditor = document.createElement('textarea');
// htmlCodeEditor.className = 'html-code-editor';
// htmlCodeEditor.id = 'html-code-editor';
// htmlCodeEditor.placeholder = 'Write your HTML and CSS code here...\n\nExample:\n<div style="background: #f0f0f0; padding: 20px; border-radius: 8px;">\n  <h2 style="color: #333;">Hello World</h2>\n  <p style="color: #666;">This is styled content.</p>\n</div>';

// // Append elements to wrapper
// editorWrapper.appendChild(toggleButtons);
// editorWrapper.appendChild(editorContainer);
// editorWrapper.appendChild(htmlCodeEditor);

// // Insert wrapper before original textarea
// document.getElementById('content').parentNode.insertBefore(editorWrapper, document.getElementById('content'));

// // Register custom fonts
// var Font = Quill.import('formats/font');
// Font.whitelist = ['dm-sans', 'barlow', 'serif', 'monospace'];
// Quill.register(Font, true);

// // Initialize Quill
// const quill = new Quill('#quill-editor', {
//     theme: 'snow',
//     modules: {
//         toolbar: {
//             container: [
//                 [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
//                 [{ 'font': ['dm-sans', 'barlow', 'serif', 'monospace'] }],
//                 [{ 'size': ['small', false, 'large', 'huge'] }],
//                 ['bold', 'italic', 'underline', 'strike'],
//                 [{ 'color': [] }, { 'background': [] }],
//                 [{ 'script': 'sub'}, { 'script': 'super' }],
//                 [{ 'list': 'ordered'}, { 'list': 'bullet' }],
//                 [{ 'indent': '-1'}, { 'indent': '+1' }],
//                 [{ 'direction': 'rtl' }],
//                 [{ 'align': [] }],
//                 ['link', 'image', 'video'],
//                 ['blockquote', 'code-block'],
//                 ['clean']
//             ]
//         }
//     },
//     placeholder: 'Write your post content here...',
//     formats: [
//         'header', 'font', 'size',
//         'bold', 'italic', 'underline', 'strike',
//         'color', 'background',
//         'script',
//         'list', 'bullet', 'indent',
//         'direction', 'align',
//         'link', 'image', 'video',
//         'blockquote', 'code-block'
//     ]
// });

// // Variables to track current mode
// let isHtmlMode = false;
// let lastHtmlContent = '';
// let lastVisualContent = '';

// // Toggle functionality
// document.getElementById('visual-toggle').addEventListener('click', function() {
//     if (!isHtmlMode) return; // Already in visual mode
    
//     switchToVisualMode();
// });

// document.getElementById('html-toggle').addEventListener('click', function() {
//     if (isHtmlMode) return; // Already in HTML mode
    
//     switchToHtmlMode();
// });

// function switchToVisualMode() {
//     // Get HTML content from code editor
//     const htmlContent = htmlCodeEditor.value;
    
//     // Convert HTML to visual format in Quill
//     quill.root.innerHTML = htmlContent;
    
//     // Show visual editor, hide code editor
//     editorContainer.style.display = 'block';
//     htmlCodeEditor.style.display = 'none';
    
//     // Update button states
//     document.getElementById('visual-toggle').classList.add('active');
//     document.getElementById('html-toggle').classList.remove('active');
    
//     isHtmlMode = false;
    
//     // Update hidden textarea
//     document.getElementById('content').value = htmlContent;
// }

// function switchToHtmlMode() {
//     // Get current visual content as HTML
//     const visualContent = quill.root.innerHTML;
    
//     // Set HTML content in code editor
//     htmlCodeEditor.value = visualContent;
    
//     // Show code editor, hide visual editor
//     editorContainer.style.display = 'none';
//     htmlCodeEditor.style.display = 'block';
    
//     // Update button states
//     document.getElementById('visual-toggle').classList.remove('active');
//     document.getElementById('html-toggle').classList.add('active');
    
//     isHtmlMode = true;
    
//     // Focus on code editor
//     htmlCodeEditor.focus();
// }

// // Set initial content if editing
// const initialContent = document.getElementById('content').value;
// if (initialContent) {
//     // Use Quill's clipboard to properly convert HTML to visual format
//     setTimeout(function() {
//         quill.clipboard.dangerouslyPasteHTML(initialContent);
//         // Also set the HTML code editor content
//         htmlCodeEditor.value = initialContent;
//     }, 100);
// }

// // Update hidden textarea when content changes in visual mode
// quill.on('text-change', function() {
//     if (!isHtmlMode) {
//         document.getElementById('content').value = quill.root.innerHTML;
//     }
// });

// // Update hidden textarea when content changes in HTML mode
// htmlCodeEditor.addEventListener('input', function() {
//     if (isHtmlMode) {
//         document.getElementById('content').value = htmlCodeEditor.value;
//     }
// });

// // Handle image uploads
// quill.getModule('toolbar').addHandler('image', function() {
//     const input = document.createElement('input');
//     input.setAttribute('type', 'file');
//     input.setAttribute('accept', 'image/*');
//     input.click();

//     input.onchange = function() {
//         const file = input.files[0];
//         if (file) {
//             const reader = new FileReader();
//             reader.onload = function(e) {
//                 const range = quill.getSelection();
//                 quill.insertEmbed(range.index, 'image', e.target.result);
//             };
//             reader.readAsDataURL(file);
//         }
//     };
// });

// // Ensure content is saved before form submission
// document.querySelector('form').addEventListener('submit', function() {
//     if (isHtmlMode) {
//         document.getElementById('content').value = htmlCodeEditor.value;
//     } else {
//         document.getElementById('content').value = quill.root.innerHTML;
//     }
// });
</script>

<!-- CKEditor 5 (Free, No API Key Required) -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

<script>
// Initialize CKEditor 5 for Content field
let contentEditor;

ClassicEditor
    .create(document.querySelector('#content'), {
        licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NjI0NzM1OTksImp0aSI6IjU0ZDA1MThjLTQ2ZWMtNDJlNS05ODQ4LWVlNjY4NWY3NmRlNSIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6IjIxNmY5ZDZkIn0.W__fFylLXUJ1KQE63DOLJa-cLw77Z_CEYYLeLyLAmQaO0J1wq-5cQjhNOqBCake80nnjBj4regY8Ghw7GBSbvw',
        toolbar: {
            items: [
                'heading', '|',
                'fontSize', 'fontFamily', '|',
                'bold', 'italic', 'underline', 'strikethrough', '|',
                'link', 'uploadImage', 'insertTable', 'blockQuote', '|',
                'alignment', '|',
                'bulletedList', 'numberedList', '|',
                'indent', 'outdent', '|',
                'undo', 'redo'
            ],
            shouldNotGroupWhenFull: true
        },
        htmlSupport: {
            allow: [
                {
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }
            ]
        },
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
            ]
        },
        fontSize: {
            options: [
                'tiny',
                'small',
                'default',
                'big',
                'huge'
            ]
        },
        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif',
                'DM Sans, sans-serif',
                'Barlow, sans-serif'
            ]
        },
        image: {
            toolbar: [
                'imageStyle:inline',
                'imageStyle:block',
                'imageStyle:side',
                '|',
                'toggleImageCaption',
                'imageTextAlternative',
                '|',
                'linkImage'
            ],
            upload: {
                types: ['jpeg', 'png', 'gif', 'bmp', 'webp', 'svg+xml']
            }
        },
        table: {
            contentToolbar: [
                'tableColumn',
                'tableRow',
                'mergeTableCells',
                'tableProperties',
                'tableCellProperties'
            ]
        },
        link: {
            decorators: {
                openInNewTab: {
                    mode: 'manual',
                    label: 'Open in a new tab',
                    attributes: {
                        target: '_blank',
                        rel: 'noopener noreferrer'
                    }
                }
            }
        },
        placeholder: 'Write your post content here... Use the toolbar above to format text, add images, tables, and more.'
    })
    .then(editor => {
        contentEditor = editor;
        console.log('CKEditor initialized successfully');
        
        // Sync editor content with hidden textarea on change
        editor.model.document.on('change:data', () => {
            const content = editor.getData();
            document.querySelector('#content').value = content;
            
            // Remove validation error when user starts typing
            if (content.trim() !== '') {
                const contentField = document.querySelector('#content');
                contentField.classList.remove('is-invalid');
                
                const errorDiv = contentField.parentElement.querySelector('.invalid-feedback');
                if (errorDiv) {
                    errorDiv.style.display = 'none';
                }
                
                // Remove red border from CKEditor
                const ckEditor = document.querySelector('.ck-editor');
                if (ckEditor) {
                    ckEditor.style.border = '';
                    ckEditor.style.borderRadius = '';
                }
            }
        });
    })
    .catch(error => {
        console.error('CKEditor initialization error:', error);
    });


let keyPointsEditor;

ClassicEditor
    .create(document.querySelector('#key_points'), {
        licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NjI0NzM1OTksImp0aSI6IjU0ZDA1MThjLTQ2ZWMtNDJlNS05ODQ4LWVlNjY4NWY3NmRlNSIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6IjIxNmY5ZDZkIn0.W__fFylLXUJ1KQE63DOLJa-cLw77Z_CEYYLeLyLAmQaO0J1wq-5cQjhNOqBCake80nnjBj4regY8Ghw7GBSbvw',
        toolbar: {
            items: [
                'heading', '|',
                'fontSize', 'fontFamily', '|',
                'bold', 'italic', 'underline', 'strikethrough', '|',
                'link', 'uploadImage', 'insertTable', 'blockQuote', '|',
                'alignment', '|',
                'bulletedList', 'numberedList', '|',
                'indent', 'outdent', '|',
                'undo', 'redo'
            ],
            shouldNotGroupWhenFull: true
        },
        htmlSupport: {
            allow: [
                {
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }
            ]
        },
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
            ]
        },
        fontSize: {
            options: [
                'tiny',
                'small',
                'default',
                'big',
                'huge'
            ]
        },
        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif',
                'DM Sans, sans-serif',
                'Barlow, sans-serif'
            ]
        },
        image: {
            toolbar: [
                'imageStyle:inline',
                'imageStyle:block',
                'imageStyle:side',
                '|',
                'toggleImageCaption',
                'imageTextAlternative',
                '|',
                'linkImage'
            ],
            upload: {
                types: ['jpeg', 'png', 'gif', 'bmp', 'webp', 'svg+xml']
            }
        },
        table: {
            contentToolbar: [
                'tableColumn',
                'tableRow',
                'mergeTableCells',
                'tableProperties',
                'tableCellProperties'
            ]
        },
        link: {
            decorators: {
                openInNewTab: {
                    mode: 'manual',
                    label: 'Open in a new tab',
                    attributes: {
                        target: '_blank',
                        rel: 'noopener noreferrer'
                    }
                }
            }
        },
        placeholder: 'Write your key points here...'
    })
    .then(editor => {
        keyPointsEditor = editor;
        console.log('Key Points CKEditor initialized successfully');

        editor.model.document.on('change:data', () => {
            const keyPoints = editor.getData();
            document.querySelector('#key_points').value = keyPoints;

            if (keyPoints.trim() !== '') {
                const field = document.querySelector('#key_points');
                field.classList.remove('is-invalid');

                const errorDiv = field.parentElement.querySelector('.invalid-feedback');
                if (errorDiv) {
                    errorDiv.style.display = 'none';
                }

                const ckEditor = document.querySelector('.ck-editor');
                if (ckEditor) {
                    ckEditor.style.border = '';
                    ckEditor.style.borderRadius = '';
                }
            }
        });
    })
    .catch(error => {
        console.error('CKEditor initialization error:', error);
    });

// Ensure content is saved before form submission
document.querySelector('form').addEventListener('submit', function(e) {
    if (contentEditor) {
        const content = contentEditor.getData();
        document.querySelector('#content').value = content;
        
        // Get which button was clicked
        const clickedButton = e.submitter;
        const actionValue = clickedButton ? clickedButton.value : null;
        
        // Only validate content if "Update/Publish" button was clicked (not "Save Draft")
        if (actionValue === 'publish') {
            // Client-side validation for publish action
            if (!content || content.trim() === '' || content.trim() === '<p>&nbsp;</p>' || content.trim() === '<p></p>') {
                e.preventDefault();
                
                // Show validation error
                const contentField = document.querySelector('#content');
                contentField.classList.add('is-invalid');
                
                // Create or show error message
                let errorDiv = contentField.parentElement.querySelector('.invalid-feedback');
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'invalid-feedback d-block';
                    errorDiv.style.color = '#dc3545';
                    errorDiv.style.fontSize = '0.875em';
                    errorDiv.style.marginTop = '0.25rem';
                    errorDiv.innerHTML = '<strong>The content field is required when publishing.</strong>';
                    contentField.parentElement.insertBefore(errorDiv, contentField.nextSibling);
                } else {
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = '<strong>The content field is required when publishing.</strong>';
                }
                
                // Add red border to CKEditor
                const ckEditor = document.querySelector('.ck-editor');
                if (ckEditor) {
                    ckEditor.style.border = '2px solid #dc3545';
                    ckEditor.style.borderRadius = '0.375rem';
                }
                
                // Scroll to the content field
                contentField.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                // Show alert
                alert('⚠️ Content is required when publishing a post.\n\nPlease add content to your post before updating, or save it as a draft instead.');
                
                return false;
            }
        }
    }
});
</script>

<style>
.seo-preview {
    padding: 15px;
    background: white;
    border-radius: 8px;
}

.seo-preview-title {
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 5px;
    line-height: 1.3;
}

.seo-preview-url {
    font-size: 14px;
    margin-bottom: 8px;
}

.seo-preview-description {
    font-size: 13px;
    line-height: 1.5;
}
</style>
@endsection