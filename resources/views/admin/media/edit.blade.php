@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Edit Media File</h4>
                    <a href="{{ route('admin.media.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Media Library
                    </a>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="{{ route('admin.media.update', $media) }}" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                           id="title" name="title" value="{{ old('title', $media->title) }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="alt_text" class="form-label">Alt Text</label>
                                    <input type="text" class="form-control @error('alt_text') is-invalid @enderror" 
                                           id="alt_text" name="alt_text" value="{{ old('alt_text', $media->alt_text ?? '') }}">
                                    <div class="form-text">Alternative text for accessibility and SEO (recommended for images)</div>
                                    @error('alt_text')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                              id="description" name="description" rows="3">{{ old('description', $media->description ?? '') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="caption" class="form-label">Caption</label>
                                    <input type="text" class="form-control @error('caption') is-invalid @enderror" 
                                           id="caption" name="caption" value="{{ old('caption', $media->caption ?? '') }}">
                                    <div class="form-text">Brief caption to be displayed with the media</div>
                                    @error('caption')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary" style="background: #2b8a6a !important;">
                                        <i class="bi bi-check-circle"></i> Update Media
                                    </button>
                                    <a href="{{ route('admin.media.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-4">
                            <!-- Media Preview -->
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Media Preview</h6>
                                </div>
                                <div class="card-body text-center">
                                    @if($media->isImage())
                                        <img src="{{ $media->file_url }}" class="img-fluid rounded mb-3" 
                                             style="max-height: 250px;" alt="{{ $media->title }}">
                                    @elseif($media->isVideo())
                                        <video controls class="w-100 rounded mb-3" style="max-height: 250px;">
                                            <source src="{{ $media->file_url }}" type="{{ $media->mime_type }}">
                                            Your browser does not support the video tag.
                                        </video>
                                    @elseif($media->isDocument())
                                        <div class="d-flex flex-column align-items-center justify-content-center bg-light rounded p-4 mb-3" style="min-height: 150px;">
                                            <i class="bi bi-file-earmark-text fa-4x text-info mb-2"></i>
                                            <p class="mb-0 text-muted">{{ $media->filename }}</p>
                                        </div>
                                    @else
                                        <div class="d-flex flex-column align-items-center justify-content-center bg-light rounded p-4 mb-3" style="min-height: 150px;">
                                            <i class="bi bi-file-earmark fa-4x text-secondary mb-2"></i>
                                            <p class="mb-0 text-muted">{{ $media->filename }}</p>
                                        </div>
                                    @endif

                                    <div class="text-start">
                                        <h6 class="fw-bold">File Information</h6>
                                        
                                        <div class="mb-2">
                                            <small class="text-muted">Filename:</small><br>
                                            <span class="fw-medium">{{ $media->filename }}</span>
                                        </div>

                                        <div class="mb-2">
                                            <small class="text-muted">File Type:</small><br>
                                            <span class="badge bg-secondary">{{ strtoupper($media->file_type) }}</span>
                                        </div>

                                        <div class="mb-2">
                                            <small class="text-muted">File Size:</small><br>
                                            <span class="fw-medium">{{ $media->formatted_size }}</span>
                                        </div>

                                        @if($media->metadata)
                                            @php $metadata = $media->metadata ?? [] @endphp
                                            @if(isset($metadata['width']) && isset($metadata['height']))
                                                <div class="mb-2">
                                                    <small class="text-muted">Dimensions:</small><br>
                                                    <span class="fw-medium">{{ $metadata['width'] }} × {{ $metadata['height'] }} px</span>
                                                </div>
                                            @endif
                                            
                                            @if(isset($metadata['duration']))
                                                <div class="mb-2">
                                                    <small class="text-muted">Duration:</small><br>
                                                    <span class="fw-medium">{{ gmdate('H:i:s', $metadata['duration']) }}</span>
                                                </div>
                                            @endif
                                        @endif

                                        <div class="mb-2">
                                            <small class="text-muted">Uploaded:</small><br>
                                            <span class="fw-medium">{{ $media->created_at->format('M j, Y') }}</span>
                                        </div>

                                        @if($media->uploader)
                                            <div class="mb-2">
                                                <small class="text-muted">Uploaded by:</small><br>
                                                <span class="fw-medium">{{ $media->uploader->name }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- File URL -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h6 class="mb-0">File URL</h6>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" 
                                               id="file-url" value="{{ $media->file_url }}" readonly>
                                        <button class="btn btn-outline-secondary btn-sm" type="button" 
                                                onclick="copyToClipboard('#file-url')">
                                            <i class="bi bi-clipboard"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h6 class="mb-0">Actions</h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        <a href="{{ $media->file_url }}" class="btn btn-success btn-sm" target="_blank">
                                            <i class="bi bi-box-arrow-up-right"></i> View Original
                                        </a>
                                        <a href="{{ $media->file_url }}" class="btn btn-info btn-sm" download="{{ $media->filename }}">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteMedia({{ $media->id }})">
                                            <i class="bi bi-trash"></i> Delete File
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function copyToClipboard(element) {
    const input = document.querySelector(element);
    input.select();
    input.setSelectionRange(0, 99999);
    document.execCommand('copy');
    
    toastr.success('URL copied to clipboard!');
}

function deleteMedia(id) {
    if (confirm('Are you sure you want to delete this file? This action cannot be undone.')) {
        $.ajax({
            url: `/admin/media/${id}`,
            type: 'DELETE',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response.success) {
                    toastr.success('File deleted successfully');
                    window.location.href = '{{ route("admin.media.index") }}';
                } else {
                    toastr.error(response.message || 'Delete failed');
                }
            },
            error: function() {
                toastr.error('Delete failed');
            }
        });
    }
}
</script>
@endpush