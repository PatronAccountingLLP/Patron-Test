@extends('admin.layouts.app')

@section('title', 'Media Library')

@section('content')
<div class="container-fluid px-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-1">Media Library</h1>
            <p class="text-muted mb-0">Manage your files and media assets</p>
        </div>
        <button type="button" class="btn btn-primary" style="background: #2b8a6a !important;" data-bs-toggle="modal" data-bs-target="#uploadModal">
            <i class="bi bi-cloud-upload me-2"></i>Upload Files
        </button>
    </div>

    <!-- Controls -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search media files..." id="searchInput">
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-select" id="typeFilter">
                        <option value="">All Types</option>
                        <option value="image">Images</option>
                        <option value="video">Videos</option>
                        <option value="audio">Audio</option>
                        <option value="document">Documents</option>
                    </select>
                </div>
                <div class="col-md-3 text-end">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-secondary active" id="listViewBtn">
                            <i class="bi bi-list"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary" id="gridViewBtn">
                            <i class="bi bi-grid-3x3"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Media Content -->
    <div class="card">
        <div class="card-body p-0">
            <!-- List View -->
            <div id="media-list" class="media-list-view">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th><input type="checkbox" class="form-check-input" id="selectAll"></th>
                                <th>Preview</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Size</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($media as $item)
                                <tr class="media-item" data-id="{{ $item->id }}">
                                    <td>
                                        <input type="checkbox" class="form-check-input media-checkbox" value="{{ $item->id }}">
                                    </td>
                                    <td>
                                        <div class="file-preview">
                                            @if($item->type === 'image')
                                                <img src="{{ asset('storage/' . $item->path) }}" alt="{{ $item->filename }}" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                                            @else
                                                <div class="d-flex align-items-center justify-content-center bg-light rounded" style="width: 50px; height: 50px;">
                                                    <i class="bi bi-file-earmark fs-4 text-muted"></i>
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="mb-1">{{ $item->filename }}</h6>
                                            <small class="text-muted">{{ $item->original_filename }}</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary">{{ strtoupper($item->type) }}</span>
                                    </td>
                                    <td>{{ $item->formatted_size }}</td>
                                    <td>{{ $item->created_at->format('M j, Y') }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-outline-primary" onclick="viewMedia({{ $item->id }})">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary" onclick="editMedia({{ $item->id }})">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-danger" onclick="deleteMedia({{ $item->id }})">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4">
                                        <div class="text-muted">
                                            <i class="bi bi-folder2-open display-4 d-block mb-3"></i>
                                            <p class="mb-0">No media files found</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Grid View -->
            <div id="media-grid" class="media-grid-view p-4">
                <div class="row g-4">
                    @forelse($media as $item)
                        <div class="col-md-3 col-sm-6">
                            <div class="card media-card h-100" data-id="{{ $item->id }}">
                                <div class="card-body p-0">
                                    <div class="media-preview position-relative" style="height: 200px;">
                                        @if($item->type === 'image')
                                            <img src="{{ asset('storage/' . $item->path) }}" alt="{{ $item->filename }}" class="w-100 h-100" style="object-fit: cover;">
                                        @else
                                            <div class="d-flex align-items-center justify-content-center h-100 bg-light">
                                                <i class="bi bi-file-earmark display-3 text-muted"></i>
                                            </div>
                                        @endif
                                        
                                        <div class="media-actions position-absolute top-0 end-0 m-2 opacity-0">
                                            <div class="btn-group-vertical btn-group-sm">
                                                <button type="button" class="btn btn-light" onclick="viewMedia({{ $item->id }})">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light" onclick="editMedia({{ $item->id }})">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-light text-danger" onclick="deleteMedia({{ $item->id }})">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-3">
                                        <h6 class="card-title mb-2 text-truncate">{{ $item->filename }}</h6>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-secondary">{{ strtoupper($item->type) }}</span>
                                            <small class="text-muted">{{ $item->formatted_size }}</small>
                                        </div>
                                        <small class="text-muted">{{ $item->created_at->format('M j, Y') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5">
                            <div class="text-muted">
                                <i class="bi bi-folder2-open display-1 d-block mb-3"></i>
                                <p class="mb-0">No media files found</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    @if($media->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $media->links() }}
        </div>
    @endif
</div>

<!-- Upload Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-cloud-upload me-2"></i>Upload Files
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('admin.media.store') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
                @csrf
                <div class="modal-body">
                    <div class="upload-area border-2 border-dashed rounded p-4 text-center mb-3" style="border-color: #dee2e6 !important;">
                        <i class="bi bi-cloud-upload display-4 text-muted mb-3"></i>
                        <h5>Drag & drop files here</h5>
                        <p class="text-muted mb-3">or click to browse</p>
                        <button type="button" class="btn btn-primary" style="background: #2b8a6a !important;" onclick="document.getElementById('fileInput').click()">
                            Choose Files
                        </button>
                        <input type="file" id="fileInput" name="files[]" multiple class="d-none" accept="image/*,video/*,audio/*,.pdf,.doc,.docx,.txt">
                    </div>
                    <div id="fileList" class="d-none">
                        <h6>Selected Files:</h6>
                        <div id="fileItems"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" style="background: #2b8a6a !important;" disabled id="uploadBtn">Upload Files</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
/* Clean Media Library Styles */
.media-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    cursor: pointer;
}

.media-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.media-card:hover .media-actions {
    opacity: 1 !important;
}

.media-actions {
    transition: opacity 0.2s ease;
}

/* Grid view toggle */
.media-grid-view {
    display: none;
}

.media-list-view {
    display: block;
}

.upload-area {
    cursor: pointer;
    transition: all 0.2s ease;
}

.upload-area:hover {
    background-color: #f8f9fa !important;
    border-color: #0d6efd !important;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // View toggle functionality
    const listViewBtn = document.getElementById('listViewBtn');
    const gridViewBtn = document.getElementById('gridViewBtn');
    const mediaList = document.getElementById('media-list');
    const mediaGrid = document.getElementById('media-grid');

    listViewBtn.addEventListener('click', function() {
        listViewBtn.classList.add('active');
        gridViewBtn.classList.remove('active');
        mediaList.style.display = 'block';
        mediaGrid.style.display = 'none';
    });

    gridViewBtn.addEventListener('click', function() {
        gridViewBtn.classList.add('active');
        listViewBtn.classList.remove('active');
        mediaList.style.display = 'none';
        mediaGrid.style.display = 'block';
    });

    // File upload functionality
    const fileInput = document.getElementById('fileInput');
    const fileList = document.getElementById('fileList');
    const fileItems = document.getElementById('fileItems');
    const uploadBtn = document.getElementById('uploadBtn');
    const uploadArea = document.querySelector('.upload-area');

    fileInput.addEventListener('change', handleFiles);
    
    uploadArea.addEventListener('click', function() {
        fileInput.click();
    });

    // Drag and drop
    uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        uploadArea.classList.add('border-primary');
    });

    uploadArea.addEventListener('dragleave', function() {
        uploadArea.classList.remove('border-primary');
    });

    uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        uploadArea.classList.remove('border-primary');
        fileInput.files = e.dataTransfer.files;
        handleFiles();
    });

    function handleFiles() {
        const files = fileInput.files;
        if (files.length > 0) {
            fileList.classList.remove('d-none');
            fileItems.innerHTML = '';
            uploadBtn.disabled = false;

            Array.from(files).forEach(file => {
                const fileItem = document.createElement('div');
                fileItem.className = 'border rounded p-2 mb-2 d-flex justify-content-between align-items-center';
                fileItem.innerHTML = `
                    <div>
                        <strong>${file.name}</strong>
                        <small class="text-muted d-block">${formatFileSize(file.size)}</small>
                    </div>
                    <i class="bi bi-file-earmark text-muted"></i>
                `;
                fileItems.appendChild(fileItem);
            });
        } else {
            fileList.classList.add('d-none');
            uploadBtn.disabled = true;
        }
    }

    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

    // Search functionality
    const searchInput = document.getElementById('searchInput');
    const typeFilter = document.getElementById('typeFilter');

    searchInput.addEventListener('input', filterMedia);
    typeFilter.addEventListener('change', filterMedia);

    function filterMedia() {
        const searchTerm = searchInput.value.toLowerCase();
        const typeFilter = document.getElementById('typeFilter').value;
        const mediaItems = document.querySelectorAll('.media-item');

        mediaItems.forEach(item => {
            const name = item.querySelector('h6').textContent.toLowerCase();
            const type = item.querySelector('.badge').textContent.toLowerCase();
            
            const matchesSearch = name.includes(searchTerm);
            const matchesType = !typeFilter || type.includes(typeFilter);

            item.style.display = matchesSearch && matchesType ? '' : 'none';
        });
    }

    // Select all functionality
    const selectAll = document.getElementById('selectAll');
    const mediaCheckboxes = document.querySelectorAll('.media-checkbox');

    selectAll.addEventListener('change', function() {
        mediaCheckboxes.forEach(checkbox => {
            checkbox.checked = selectAll.checked;
        });
    });
});

// Media actions
function viewMedia(id) {
    // Implementation for viewing media
    console.log('View media:', id);
}

function editMedia(id) {
    // Implementation for editing media
    console.log('Edit media:', id);
}

function deleteMedia(id) {
    if (confirm('Are you sure you want to delete this file?')) {
        // Implementation for deleting media
        console.log('Delete media:', id);
    }
}
</script>
@endpush