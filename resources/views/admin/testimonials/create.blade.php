@extends('admin.layouts.app')

@section('title', 'Add New Testimonial')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Add New Testimonial</h1>
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to Testimonials
                </a>
            </div>

            <form method="POST" action="{{ route('admin.testimonials.store') }}" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" class="form-control @error('position') is-invalid @enderror" 
                                           id="position" name="position" value="{{ old('position') }}" 
                                           placeholder="e.g., CEO">
                                    @error('position')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="content" class="form-label">Testimonial Content <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" 
                                              id="content" name="content" rows="6" required>{{ old('content') }}</textarea>
                                    <div class="form-text">The testimonial text from the client.</div>
                                    @error('content')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="rating" class="form-label">Rating <span class="text-danger">*</span></label>
                                    <select class="form-control @error('rating') is-invalid @enderror" 
                                            id="rating" name="rating" required>
                                        <option value="5" {{ old('rating', 5) == 5 ? 'selected' : '' }}>
                                            ⭐⭐⭐⭐⭐ (5 Stars)
                                        </option>
                                        <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>
                                            ⭐⭐⭐⭐ (4 Stars)
                                        </option>
                                        <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>
                                            ⭐⭐⭐ (3 Stars)
                                        </option>
                                        <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>
                                            ⭐⭐ (2 Stars)
                                        </option>
                                        <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>
                                            ⭐ (1 Star)
                                        </option>
                                    </select>
                                    @error('rating')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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
                                        <option value="published" {{ old('status', 'published') == 'published' ? 'selected' : '' }}>Published</option>
                                        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="sort_order" class="form-label">Sort Order</label>
                                    <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                           id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" min="0">
                                    <div class="form-text">Lower numbers appear first.</div>
                                    @error('sort_order')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" style="background: #2b8a6a !important;">
                                        <i class="bi bi-check-circle"></i> Publish Testimonial
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header">
                                <h6 class="mb-0">Profile Image</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Upload Image</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                           id="image" name="image" accept="image/*" onchange="previewImage(this)">
                                    <div class="form-text">Recommended: Square image (200x200px)</div>
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div id="image-preview" class="mt-3" style="display: none;">
                                    <img id="preview" src="" alt="Preview" class="img-fluid rounded" style="max-height: 200px;">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0">Testimonial Video</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="video" class="form-label">Upload Video (Optional)</label>
                                    <input type="file" class="form-control @error('video') is-invalid @enderror" 
                                           id="video" name="video" accept="video/mp4,video/mov,video/avi,video/wmv" onchange="previewVideo(this)">
                                    <div class="form-text">Max size: 10MB | Formats: MP4, MOV, AVI, WMV</div>
                                    @error('video')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div id="video-preview" class="mt-3" style="display: none;">
                                    <video id="video-preview-player" controls class="img-fluid rounded" style="max-height: 300px; width: 100%;">
                                        <source id="video-preview-source" src="" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="mt-2">
                                        <small class="text-muted">File: <span id="video-file-name"></span></small><br>
                                        <small class="text-muted">Size: <span id="video-file-size"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
function previewImage(input) {
    const preview = document.getElementById('preview');
    const previewContainer = document.getElementById('image-preview');
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            previewContainer.style.display = 'block';
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}

function previewVideo(input) {
    const videoPreviewContainer = document.getElementById('video-preview');
    const videoPreviewPlayer = document.getElementById('video-preview-player');
    const videoPreviewSource = document.getElementById('video-preview-source');
    const videoFileName = document.getElementById('video-file-name');
    const videoFileSize = document.getElementById('video-file-size');
    
    if (input.files && input.files[0]) {
        const file = input.files[0];
        
        // Check file size (10MB = 10485760 bytes)
        if (file.size > 10485760) {
            alert('Video file size must be less than 10MB');
            input.value = '';
            videoPreviewContainer.style.display = 'none';
            return;
        }
        
        // Display file info
        videoFileName.textContent = file.name;
        videoFileSize.textContent = (file.size / 1024 / 1024).toFixed(2) + ' MB';
        
        // Create preview
        const reader = new FileReader();
        reader.onload = function(e) {
            videoPreviewSource.src = e.target.result;
            videoPreviewPlayer.load();
            videoPreviewContainer.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
}
</script>
@endpush
@endsection
