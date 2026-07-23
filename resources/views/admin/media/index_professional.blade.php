@extends('admin.layouts.app')

@section('title', 'Media Library')

@section('content')
<div class="container-fluid px-4">
    <!-- Professional Header -->
    <div class="media-header-pro">
        <div class="container-fluid">
            <div class="header-content-pro">
                <div class="title-wrapper">
                    <div class="icon-badge">
                        <i class="bi bi-images"></i>
                    </div>
                    <div class="title-content">
                        <h1 class="page-title-pro">Media Library</h1>
                        <p class="page-subtitle-pro">Manage your files and media assets with professional tools</p>
                    </div>
                </div>
                
                <div class="header-actions">
                    <div class="stats-quick">
                        <div class="stat-item">
                            <span class="stat-number">{{ $media->total() }}</span>
                            <span class="stat-label">Files</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-number">{{ $media->where('type', 'image')->count() }}</span>
                            <span class="stat-label">Images</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-number">{{ number_format($media->sum('size') / 1024 / 1024, 1) }}MB</span>
                            <span class="stat-label">Storage</span>
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-upload-pro" data-bs-toggle="modal" data-bs-target="#uploadModal">
                        <div class="btn-icon">
                            <i class="bi bi-cloud-upload"></i>
                        </div>
                        <div class="btn-text">Upload Files</div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Professional Content Card -->
    <div class="media-content-card">
        <!-- Controls Panel -->
        <div class="controls-panel-pro">
            <div class="controls-row">
                <div class="search-filters">
                    <div class="search-group">
                        <i class="search-icon bi bi-search"></i>
                        <input type="text" class="search-input" placeholder="Search media files..." id="searchInput">
                    </div>
                    
                    <div class="filter-group">
                        <select class="filter-select" id="typeFilter">
                            <option value="">All Types</option>
                            <option value="image">Images</option>
                            <option value="video">Videos</option>
                            <option value="audio">Audio</option>
                            <option value="document">Documents</option>
                        </select>
                        
                        <select class="filter-select" id="sizeFilter">
                            <option value="">All Sizes</option>
                            <option value="small">Small (&lt; 1MB)</option>
                            <option value="medium">Medium (1-10MB)</option>
                            <option value="large">Large (&gt; 10MB)</option>
                        </select>
                    </div>
                </div>
                
                <div class="view-controls">
                    <div class="view-toggle">
                        <button type="button" class="view-btn active" id="listViewBtn" data-view="list">
                            <i class="bi bi-list"></i>
                        </button>
                        <button type="button" class="view-btn" id="gridViewBtn" data-view="grid">
                            <i class="bi bi-grid-3x3"></i>
                        </button>
                    </div>
                    
                    <div class="bulk-actions">
                        <button type="button" class="btn-bulk" id="selectAllBtn">
                            <i class="bi bi-check-square me-1"></i>Select All
                        </button>
                        <button type="button" class="btn-bulk danger" id="deleteSelectedBtn" disabled>
                            <i class="bi bi-trash me-1"></i>Delete Selected
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Media Content -->
        <!-- List View -->
        <div id="media-list" class="media-list">
            <div class="table-responsive">
                <table class="list-table table mb-0">
                    <thead>
                        <tr>
                            <th width="50">
                                <input type="checkbox" class="form-check-input" id="selectAll">
                            </th>
                            <th width="80">Preview</th>
                            <th>Name</th>
                            <th width="100">Type</th>
                            <th width="100">Size</th>
                            <th width="120">Date</th>
                            <th width="150">Actions</th>
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
                                            <img src="{{ asset('storage/' . $item->path) }}" alt="{{ $item->filename }}" class="img-fluid rounded">
                                        @else
                                            <div class="file-icon-list">
                                                <i class="bi bi-file-earmark"></i>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="file-info">
                                        <h6>{{ $item->filename }}</h6>
                                        <small class="text-muted">{{ $item->original_filename }}</small>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-secondary">{{ strtoupper($item->type) }}</span>
                                </td>
                                <td>{{ $item->formatted_size }}</td>
                                <td>{{ $item->created_at->format('M j, Y') }}</td>
                                <td>
                                    <div class="file-actions">
                                        <button type="button" class="btn btn-primary btn-sm" onclick="viewMedia({{ $item->id }})">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-sm" onclick="editMedia({{ $item->id }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteMedia({{ $item->id }})">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <div class="empty-state">
                                        <i class="bi bi-folder2-open display-1 text-muted mb-3"></i>
                                        <h5 class="text-muted">No media files found</h5>
                                        <p class="text-muted mb-3">Upload your first files to get started</p>
                                        <button type="button" class="btn btn-primary" style="background: #2b8a6a !important;" data-bs-toggle="modal" data-bs-target="#uploadModal">
                                            <i class="bi bi-cloud-upload me-2"></i>Upload Files
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Grid View -->
        <div id="media-grid" class="media-grid">
            @forelse($media as $item)
                <div class="media-item" data-id="{{ $item->id }}">
                    <div class="media-card">
                        <div class="media-preview">
                            @if($item->type === 'image')
                                <img src="{{ asset('storage/' . $item->path) }}" alt="{{ $item->filename }}">
                            @else
                                <div class="file-icon">
                                    <i class="bi bi-file-earmark"></i>
                                </div>
                            @endif
                            
                            <div class="media-overlay">
                                <button type="button" class="btn btn-sm" onclick="viewMedia({{ $item->id }})">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button type="button" class="btn btn-sm" onclick="editMedia({{ $item->id }})">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button type="button" class="btn btn-sm" onclick="deleteMedia({{ $item->id }})">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="media-info">
                            <h6 class="media-title">{{ $item->filename }}</h6>
                            <div class="media-meta">
                                <span class="media-type">{{ $item->type }}</span>
                                <span class="media-size">{{ $item->formatted_size }}</span>
                                <span class="media-date">{{ $item->created_at->format('M j, Y') }}</span>
                            </div>
                        </div>
                        
                        <div class="media-actions">
                            <button type="button" class="action-btn" onclick="viewMedia({{ $item->id }})">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button type="button" class="action-btn" onclick="editMedia({{ $item->id }})">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button type="button" class="action-btn delete" onclick="deleteMedia({{ $item->id }})">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="empty-state-grid">
                    <i class="bi bi-folder2-open display-1 text-muted mb-4"></i>
                    <h3 class="text-muted mb-3">No media files found</h3>
                    <p class="text-muted mb-4">Upload your first files to get started with your media library</p>
                    <button type="button" class="btn btn-upload-pro" data-bs-toggle="modal" data-bs-target="#uploadModal">
                        <div class="btn-icon">
                            <i class="bi bi-cloud-upload"></i>
                        </div>
                        <div class="btn-text">Upload Files</div>
                    </button>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Pagination -->
    @if($media->hasPages())
        <div class="d-flex justify-content-center mt-4">
            <div class="pagination-wrapper">
                {{ $media->links() }}
            </div>
        </div>
    @endif
</div>

<!-- Professional Upload Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content modal-content-pro">
            <div class="modal-header modal-header-pro">
                <h5 class="modal-title">
                    <i class="bi bi-cloud-upload"></i>
                    Upload Files
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('admin.media.store') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
                @csrf
                <div class="modal-body modal-body-pro">
                    <div class="upload-area" id="uploadArea">
                        <div class="upload-icon">
                            <i class="bi bi-cloud-upload"></i>
                        </div>
                        <div class="upload-text">Drag & Drop Files Here</div>
                        <div class="upload-subtext">or click to browse your computer</div>
                        <button type="button" class="upload-button" onclick="document.getElementById('fileInput').click()">
                            Choose Files
                        </button>
                        <input type="file" id="fileInput" name="files[]" multiple class="file-input" accept="image/*,video/*,audio/*,.pdf,.doc,.docx,.txt">
                    </div>
                    
                    <div class="file-list" id="fileList" style="display: none;">
                        <h6>Selected Files:</h6>
                        <div id="fileItems"></div>
                    </div>
                    
                    <div class="progress-container" id="progressContainer">
                        <div class="progress">
                            <div class="progress-bar" id="progressBar"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer modal-footer-pro">
                    <button type="button" class="btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn-upload-submit" disabled id="uploadSubmitBtn">
                        Upload Files
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection