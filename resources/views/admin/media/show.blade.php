<div class="modal-header">
    <h5 class="modal-title">{{ $media->title }}</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
    <div class="row">
        <div class="col-md-8">
            <!-- Media Preview -->
            <div class="text-center mb-3">
                @if($media->isImage())
                    <img src="{{ $media->file_url }}" class="img-fluid rounded" style="max-height: 400px;" alt="{{ $media->title }}">
                @elseif($media->isVideo())
                    <video controls class="w-100 rounded" style="max-height: 400px;">
                        <source src="{{ $media->file_url }}" type="{{ $media->mime_type }}">
                        Your browser does not support the video tag.
                    </video>
                @elseif($media->isDocument())
                    <div class="d-flex flex-column align-items-center justify-content-center bg-light rounded p-5" style="min-height: 200px;">
                        <i class="bi bi-file-earmark-text fa-5x text-info mb-3"></i>
                        <h5>{{ $media->filename }}</h5>
                        <p class="text-muted">{{ $media->mime_type }}</p>
                        <a href="{{ $media->file_url }}" class="btn btn-primary" style="background: #2b8a6a !important;" target="_blank">
                            <i class="bi bi-download"></i> Download
                        </a>
                    </div>
                @else
                    <div class="d-flex flex-column align-items-center justify-content-center bg-light rounded p-5" style="min-height: 200px;">
                        <i class="bi bi-file-earmark fa-5x text-secondary mb-3"></i>
                        <h5>{{ $media->filename }}</h5>
                        <p class="text-muted">{{ $media->mime_type }}</p>
                        <a href="{{ $media->file_url }}" class="btn btn-primary" style="background: #2b8a6a !important;" target="_blank">
                            <i class="bi bi-download"></i> Download
                        </a>
                    </div>
                @endif
            </div>

            <!-- File URL for copying -->
            <div class="mb-3">
                <label class="form-label fw-bold">File URL:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="file-url" value="{{ $media->file_url }}" readonly>
                    <button class="btn btn-outline-secondary" type="button" onclick="copyToClipboard('#file-url')">
                        <i class="bi bi-clipboard"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <!-- File Details -->
            <h6 class="fw-bold mb-3">File Details</h6>
            
            <div class="mb-3">
                <label class="form-label text-muted">Filename:</label>
                <p class="mb-1">{{ $media->filename }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted">File Type:</label>
                <p class="mb-1">
                    <span class="badge bg-secondary">{{ strtoupper($media->file_type) }}</span>
                </p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted">MIME Type:</label>
                <p class="mb-1">{{ $media->mime_type }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted">File Size:</label>
                <p class="mb-1">{{ $media->formatted_size }}</p>
            </div>

            @if($media->metadata)
                @php $metadata = $media->metadata ?? [] @endphp
                @if(isset($metadata['width']) && isset($metadata['height']))
                    <div class="mb-3">
                        <label class="form-label text-muted">Dimensions:</label>
                        <p class="mb-1">{{ $metadata['width'] }} × {{ $metadata['height'] }} pixels</p>
                    </div>
                @endif
                
                @if(isset($metadata['duration']))
                    <div class="mb-3">
                        <label class="form-label text-muted">Duration:</label>
                        <p class="mb-1">{{ gmdate('H:i:s', $metadata['duration']) }}</p>
                    </div>
                @endif
            @endif

            <div class="mb-3">
                <label class="form-label text-muted">Uploaded:</label>
                <p class="mb-1">{{ $media->created_at->format('M j, Y g:i A') }}</p>
            </div>

            @if($media->uploader)
                <div class="mb-3">
                    <label class="form-label text-muted">Uploaded by:</label>
                    <p class="mb-1">{{ $media->uploader->name }}</p>
                </div>
            @endif

            <!-- Actions -->
            <div class="d-grid gap-2 mt-4">
                <a href="{{ route('admin.media.edit', $media) }}" class="btn btn-primary" style="background: #2b8a6a !important;">
                    <i class="bi bi-pencil"></i> Edit Details
                </a>
                <a href="{{ $media->file_url }}" class="btn btn-success" target="_blank">
                    <i class="bi bi-box-arrow-up-right"></i> Open Original
                </a>
                <a href="{{ $media->file_url }}" class="btn btn-info" download="{{ $media->filename }}">
                    <i class="bi bi-download"></i> Download
                </a>
                <button type="button" class="btn btn-danger" onclick="deleteMediaConfirm({{ $media->id }})">
                    <i class="bi bi-trash"></i> Delete
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function copyToClipboard(element) {
    const input = document.querySelector(element);
    input.select();
    input.setSelectionRange(0, 99999);
    document.execCommand('copy');
    
    toastr.success('URL copied to clipboard!');
}

function deleteMediaConfirm(id) {
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
                    $('#mediaDetailModal').modal('hide');
                    // Remove from grid if it exists
                    $(`.media-item[data-id="${id}"]`).fadeOut(function() {
                        $(this).remove();
                    });
                    // Reload page if no items left
                    setTimeout(function() {
                        if ($('.media-item').length === 0) {
                            location.reload();
                        }
                    }, 500);
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