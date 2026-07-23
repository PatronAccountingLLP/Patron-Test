@extends('admin.layouts.app')

@section('title', 'Media Library')

@section('content')
<div class="container">
    <!-- Professional Header -->
    <div class="media-header-pro">
        <div class="container">
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
                        <div class="stat-item d-flex align-item-center gap-2">
                            <span class="stat-number">{{ $media->total() }}</span>
                            <span class="stat-label">Files</span>
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
                                        <button type="button" class="btn btn-success" onclick="viewMedia({{ $item->id }})">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary" onclick="editMedia({{ $item->id }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger" onclick="deleteMedia({{ $item->id }})">
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

@push('styles')
<style>
.container-fluid.px-4 {
    padding-left: 1.5rem !important;
    padding-right: 1.5rem !important;
}

/* Professional Header Styling */
.media-header-pro {
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border-bottom: 1px solid #e2e8f0;
    padding: 1.25rem 0;
    position: sticky;
    top: 0;
    z-index: 100;
    backdrop-filter: blur(8px);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.header-content-pro {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.title-wrapper {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.icon-badge {
    width: 56px;
    height: 56px;
    background: linear-gradient(135deg, #198754 0%, #157347 100%);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
}

.title-content {
    flex: 1;
}

.page-title-pro {
    font-size: 1.875rem;
    font-weight: 700;
    color: #1e293b;
    margin: 0 0 0.25rem 0;
    line-height: 1.2;
}

.page-subtitle-pro {
    color: #64748b;
    font-size: 0.95rem;
    margin: 0;
    font-weight: 500;
}

.header-actions {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 2rem;
}

.stats-quick {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.75rem 1rem;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 10px;
    border: 1px solid rgba(226, 232, 240, 0.6);
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 1.25rem;
    font-weight: 700;
    color: #1e293b;
    line-height: 1;
}

.stat-label {
    display: block;
    font-size: 0.75rem;
    color: #64748b;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-top: 0.25rem;
}

.stat-divider {
    width: 1px;
    height: 28px;
    background: #e2e8f0;
}

.btn-upload-pro {
    background: linear-gradient(135deg, #198754 0%, #157347 100%);
    color: white;
    border: none;
    border-radius: 10px;
    padding: 0;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    display: flex;
    align-items: center;
    overflow: hidden;
    position: relative;
}

.btn-upload-pro:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(59, 130, 246, 0.4);
}

.btn-icon {
    padding: 0.75rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
}

.btn-text {
    padding: 0.75rem 1rem 0.75rem 0;
    font-size: 0.9rem;
}

/* Content Card */
.media-content-card {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
    border: 1px solid rgba(226, 232, 240, 0.5);
    overflow: hidden;
    margin-top: 0.5rem;
}

/* Media Grid Layout */
.media-grid {
    display: grid !important;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 28px;
    padding: 2rem;
    background: #ffffff;
}

/* Hide grid view by default */
#media-grid {
    display: none !important;
    background: linear-gradient(135deg, #fafbfc 0%, #ffffff 100%);
    border-radius: 0 0 20px 20px;
}

/* Show list view by default */
#media-list {
    display: block !important;
}

/* Media Item */
.media-item {
    position: relative;
}

/* Media Card */
.media-card {
    background: #ffffff;
    border-radius: 18px;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    overflow: hidden;
    border: 1px solid rgba(226, 232, 240, 0.6);
    position: relative;
    display: flex;
    flex-direction: column;
    height: 300px;
}

.media-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
}

.media-card:hover .media-overlay {
    opacity: 1;
    visibility: visible;
}

/* Media Preview */
.media-preview {
    position: relative;
    width: 100%;
    height: 200px;
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.media-preview img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.media-card:hover .media-preview img {
    transform: scale(1.05);
}

.media-preview .file-icon {
    font-size: 3rem;
    color: #64748b;
    opacity: 0.6;
}

/* Media Overlay */
.media-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(
        45deg,
        rgba(0, 0, 0, 0.6) 0%,
        rgba(0, 0, 0, 0.4) 50%,
        rgba(0, 0, 0, 0.6) 100%
    );
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    z-index: 10;
}

.media-overlay .btn {
    background: rgba(255, 255, 255, 0.95);
    color: #1e293b;
    border: none;
    border-radius: 8px;
    padding: 0.5rem;
    font-size: 0.9rem;
    font-weight: 500;
    transition: all 0.2s ease;
    backdrop-filter: blur(8px);
}

.media-overlay .btn:hover {
    background: #ffffff;
    transform: scale(1.05);
}

/* Media Info */
.media-info {
    padding: 1.25rem;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.media-title {
    font-size: 1rem;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 0.5rem;
    line-height: 1.3;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.media-meta {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
}

.media-type {
    font-size: 0.75rem;
    color: #64748b;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 0.5px;
}

.media-size {
    font-size: 0.8rem;
    color: #64748b;
    font-weight: 500;
}

.media-date {
    font-size: 0.75rem;
    color: #94a3b8;
    font-weight: 400;
}

/* Media Actions */
.media-actions {
    position: absolute;
    top: 1rem;
    right: 1rem;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 20;
}

.media-card:hover .media-actions {
    opacity: 1;
}

.action-btn {
    background: rgba(255, 255, 255, 0.95);
    border: none;
    border-radius: 6px;
    padding: 0.4rem;
    font-size: 0.9rem;
    color: #64748b;
    transition: all 0.2s ease;
    backdrop-filter: blur(8px);
    margin-left: 0.25rem;
}

.action-btn:hover {
    background: #ffffff;
    color: #1e293b;
    transform: scale(1.05);
}

.action-btn.delete:hover {
    background: #fef2f2;
    color: #dc2626;
}

/* Controls Panel */
.controls-panel-pro {
    padding: 1.75rem 2rem;
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border-bottom: 1px solid rgba(226, 232, 240, 0.8);
    backdrop-filter: blur(10px);
}

.controls-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
}

.search-filters {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex: 1;
}

.search-group {
    position: relative;
    flex: 1;
    max-width: 400px;
}

.search-input {
    width: 100%;
    padding: 0.75rem 1rem 0.75rem 2.75rem;
    border: 1px solid rgba(226, 232, 240, 0.8);
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.8);
    font-size: 0.95rem;
    transition: all 0.3s ease;
    backdrop-filter: blur(8px);
}

.search-input:focus {
    outline: none;
    border-color: #198754;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    background: #ffffff;
}

.search-icon {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: #64748b;
    font-size: 1rem;
    pointer-events: none;
}

.filter-group {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.filter-select {
    padding: 0.75rem 1rem;
    border: 1px solid rgba(226, 232, 240, 0.8);
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.8);
    font-size: 0.9rem;
    color: #1e293b;
    min-width: 140px;
    transition: all 0.3s ease;
    backdrop-filter: blur(8px);
}

.filter-select:focus {
    outline: none;
    border-color: #198754;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    background: #ffffff;
}

.view-controls {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.view-toggle {
    display: flex;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    padding: 0.25rem;
    border: 1px solid rgba(226, 232, 240, 0.8);
    backdrop-filter: blur(8px);
}

.view-btn {
    padding: 0.5rem 0.75rem;
    border: none;
    background: transparent;
    color: #64748b;
    border-radius: 8px;
    font-size: 0.9rem;
    transition: all 0.2s ease;
    cursor: pointer;
}

.view-btn.active {
    background: #198754;
    color: white;
    box-shadow: 0 2px 4px rgba(59, 130, 246, 0.3);
}

.view-btn:hover:not(.active) {
    background: rgba(59, 130, 246, 0.1);
    color: #198754;
}

.bulk-actions {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.btn-bulk {
    padding: 0.6rem 1.25rem;
    border: 1px solid rgba(226, 232, 240, 0.8);
    background: rgba(255, 255, 255, 0.8);
    color: #64748b;
    border-radius: 8px;
    font-size: 0.85rem;
    font-weight: 500;
    transition: all 0.3s ease;
    backdrop-filter: blur(8px);
}

.btn-bulk:hover {
    background: #ffffff;
    border-color: #198754;
    color: #198754;
    transform: translateY(-1px);
}

.btn-bulk.danger:hover {
    border-color: #dc2626;
    color: #dc2626;
}

/* List View Styling */
.media-list {
    background: #ffffff;
}

.list-table {
    margin: 0;
    background: transparent;
}

.list-table thead th {
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    color: #475569;
    font-weight: 600;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 1.25rem 1.5rem;
    border: none;
    border-bottom: 2px solid #e2e8f0;
}

.list-table tbody tr {
    transition: all 0.2s ease;
    border-bottom: 1px solid rgba(226, 232, 240, 0.5);
}

.list-table tbody tr:hover {
    background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
    transform: translateX(2px);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.list-table tbody td {
    padding: 1.25rem 1.5rem;
    vertical-align: middle;
    border: none;
}

.file-preview {
    width: 50px;
    height: 50px;
    border-radius: 8px;
    object-fit: cover;
    background: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
}

.file-icon-list {
    font-size: 1.5rem;
    color: #64748b;
}

.file-info h6 {
    margin: 0 0 0.25rem 0;
    font-size: 0.95rem;
    font-weight: 600;
    color: #1e293b;
}

.file-info .text-muted {
    font-size: 0.8rem;
    color: #64748b;
}

.file-actions {
    display: flex;
    gap: 0.5rem;
    align-items: center;
}

.btn-sm {
    padding: 0.4rem 0.75rem;
    font-size: 0.8rem;
    border-radius: 6px;
    font-weight: 500;
}

/* Upload Modal Professional Styles */
.modal-content-pro {
    border-radius: 16px;
    border: none;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    overflow: hidden;
}

.modal-header-pro {
    background: linear-gradient(135deg, #198754 0%, #157347 100%);
    color: white;
    padding: 1.5rem 2rem;
    border-bottom: none;
}

.modal-header-pro .modal-title {
    font-weight: 700;
    font-size: 1.25rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.modal-header-pro .btn-close {
    filter: brightness(0) invert(1);
    opacity: 0.8;
}

.modal-header-pro .btn-close:hover {
    opacity: 1;
}

.modal-body-pro {
    padding: 2rem;
    background: #ffffff;
}

.upload-area {
    border: 2px dashed #d1d5db;
    border-radius: 12px;
    padding: 3rem 2rem;
    text-align: center;
    background: linear-gradient(135deg, #f9fafb 0%, #ffffff 100%);
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.upload-area:hover {
    border-color: #198754;
    background: linear-gradient(135deg, #eff6ff 0%, #f0f9ff 100%);
    transform: translateY(-2px);
}

.upload-area.dragover {
    border-color: #198754;
    background: linear-gradient(135deg, #dbeafe 0%, #eff6ff 100%);
    transform: scale(1.02);
}

.upload-icon {
    font-size: 3rem;
    color: #9ca3af;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
}

.upload-area:hover .upload-icon {
    color: #198754;
    transform: scale(1.1);
}

.upload-text {
    font-size: 1.1rem;
    font-weight: 600;
    color: #374151;
    margin-bottom: 0.5rem;
}

.upload-subtext {
    color: #6b7280;
    font-size: 0.95rem;
    margin-bottom: 1.5rem;
}

.file-input {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: pointer;
}

.upload-button {
    background: linear-gradient(135deg, #198754 0%, #157347 100%);
    color: white;
    border: none;
    padding: 0.75rem 2rem;
    border-radius: 8px;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
}

.upload-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(59, 130, 246, 0.4);
}

.file-list {
    margin-top: 2rem;
    padding-top: 2rem;
    border-top: 1px solid #e5e7eb;
}

.file-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: #f9fafb;
    border-radius: 8px;
    margin-bottom: 0.75rem;
    transition: all 0.2s ease;
}

.file-item:hover {
    background: #f3f4f6;
}

.file-item-icon {
    font-size: 1.5rem;
    color: #6b7280;
}

.file-item-info {
    flex: 1;
}

.file-item-name {
    font-weight: 600;
    color: #374151;
    margin-bottom: 0.25rem;
}

.file-item-size {
    font-size: 0.85rem;
    color: #6b7280;
}

.file-item-remove {
    background: none;
    border: none;
    color: #ef4444;
    font-size: 1.25rem;
    cursor: pointer;
    padding: 0.25rem;
    border-radius: 4px;
    transition: all 0.2s ease;
}

.file-item-remove:hover {
    background: #fef2f2;
    transform: scale(1.1);
}

.modal-footer-pro {
    padding: 1.5rem 2rem;
    background: #f9fafb;
    border-top: 1px solid #e5e7eb;
    display: flex;
    justify-content: flex-end;
    gap: 1rem;
}

.btn-cancel {
    background: #ffffff;
    color: #6b7280;
    border: 1px solid #d1d5db;
    padding: 0.75rem 1.5rem;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.2s ease;
}

.btn-cancel:hover {
    background: #f9fafb;
    border-color: #9ca3af;
    color: #374151;
}

.btn-upload-submit {
    background: linear-gradient(135deg, #10b981 0%, #047857 100%);
    color: white;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
}

.btn-upload-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(16, 185, 129, 0.4);
}

.btn-upload-submit:disabled {
    background: #d1d5db;
    transform: none;
    box-shadow: none;
    cursor: not-allowed;
}

/* Progress Bar */
.progress-container {
    margin-top: 1rem;
    display: none;
}

.progress {
    height: 8px;
    border-radius: 4px;
    background: #e5e7eb;
    overflow: hidden;
}

.progress-bar {
    background: linear-gradient(90deg, #198754 0%, #157347 100%);
    height: 100%;
    border-radius: 4px;
    transition: width 0.3s ease;
}

/* Empty State */
.empty-state {
    text-align: center;
    padding: 3rem 2rem;
}

.empty-state-grid {
    grid-column: 1 / -1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 4rem 2rem;
    text-align: center;
}

/* Responsive Design */
@media (max-width: 1400px) {
    .media-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 24px;
    }
}

@media (max-width: 1200px) {
    .media-grid {
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 20px;
    }
    
    .controls-row {
        flex-direction: column;
        gap: 1.5rem;
        align-items: stretch;
    }
    
    .search-filters {
        justify-content: space-between;
    }
    
    .header-actions {
        gap: 1rem;
    }
}

@media (max-width: 768px) {
    .media-grid {
        grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
        gap: 16px;
        padding: 1.5rem;
    }
    
    .controls-panel-pro {
        padding: 1.5rem;
    }
    
    .search-filters {
        flex-direction: column;
        gap: 1rem;
    }
    
    .search-group {
        max-width: none;
    }
    
    .filter-group {
        justify-content: space-between;
        width: 100%;
    }
    
    .view-controls {
        justify-content: center;
    }
    
    .bulk-actions {
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .header-content-pro {
        flex-direction: column;
        gap: 1.5rem;
    }
    
    .title-wrapper {
        align-self: flex-start;
    }
    
    .header-actions {
        align-self: stretch;
        justify-content: space-between;
    }
}

@media (max-width: 576px) {
    .media-grid {
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 12px;
        padding: 1rem;
    }
    
    .media-card {
        height: 240px;
    }
    
    .media-preview {
        height: 140px;
    }
    
    .media-info {
        padding: 1rem;
    }
    
    .controls-panel-pro {
        padding: 1rem;
    }
    
    .list-table thead th,
    .list-table tbody td {
        padding: 1rem;
    }
    
    .modal-footer-pro {
        flex-direction: column;
    }
    
    .btn-cancel,
    .btn-upload-submit {
        width: 100%;
        justify-content: center;
    }
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
        mediaGrid.style.display = 'grid';
    });

    // File upload functionality
    const fileInput = document.getElementById('fileInput');
    const fileList = document.querySelector('.file-list');
    const fileItems = document.getElementById('fileItems');
    const uploadSubmitBtn = document.getElementById('uploadSubmitBtn');
    const uploadArea = document.getElementById('uploadArea');

    fileInput.addEventListener('change', handleFiles);
    
    // Drag and drop
    uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        uploadArea.classList.add('dragover');
    });

    uploadArea.addEventListener('dragleave', function() {
        uploadArea.classList.remove('dragover');
    });

    uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        uploadArea.classList.remove('dragover');
        fileInput.files = e.dataTransfer.files;
        handleFiles();
    });

    function handleFiles() {
        const files = fileInput.files;
        if (files.length > 0) {
            fileList.style.display = 'block';
            fileItems.innerHTML = '';
            uploadSubmitBtn.disabled = false;

            Array.from(files).forEach((file, index) => {
                const fileItem = document.createElement('div');
                fileItem.className = 'file-item';
                fileItem.innerHTML = `
                    <div class="file-item-icon">
                        <i class="bi bi-file-earmark"></i>
                    </div>
                    <div class="file-item-info">
                        <div class="file-item-name">${file.name}</div>
                        <div class="file-item-size">${formatFileSize(file.size)}</div>
                    </div>
                    <button type="button" class="file-item-remove" onclick="removeFile(${index})">
                        <i class="bi bi-x"></i>
                    </button>
                `;
                fileItems.appendChild(fileItem);
            });
        } else {
            fileList.style.display = 'none';
            uploadSubmitBtn.disabled = true;
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
        const typeFilterValue = typeFilter.value.toLowerCase();
        const mediaItems = document.querySelectorAll('.media-item');

        mediaItems.forEach(item => {
            const nameElement = item.querySelector('.file-info h6, .media-title');
            const badgeElement = item.querySelector('.badge');
            
            if (nameElement && badgeElement) {
                const name = nameElement.textContent.toLowerCase();
                const type = badgeElement.textContent.toLowerCase();
                
                const matchesSearch = name.includes(searchTerm);
                const matchesType = !typeFilterValue || type.includes(typeFilterValue);

                item.style.display = matchesSearch && matchesType ? '' : 'none';
            }
        });
    }

    // Select all functionality
    const selectAll = document.getElementById('selectAll');
    const mediaCheckboxes = document.querySelectorAll('.media-checkbox');

    if (selectAll) {
        selectAll.addEventListener('change', function() {
            mediaCheckboxes.forEach(checkbox => {
                checkbox.checked = selectAll.checked;
            });
        });
    }

    // Bulk actions
    const bulkActions = document.getElementById('bulk-actions');
    if (bulkActions) {
        bulkActions.addEventListener('change', function() {
            if (this.value === 'delete') {
                const selectedItems = document.querySelectorAll('.media-checkbox:checked');
                if (selectedItems.length === 0) {
                    alert('Please select items to delete.');
                    this.value = '';
                    return;
                }

                if (confirm(`Are you sure you want to delete ${selectedItems.length} selected items?`)) {
                    const selectedIds = Array.from(selectedItems).map(item => item.value);
                    deleteBulkMedia(selectedIds);
                }
                this.value = '';
            }
        });
    }
});

// Bulk delete function
function deleteBulkMedia(ids) {
    fetch('{{ route("admin.media.bulk-delete") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ ids: ids })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Remove deleted items from the view
            ids.forEach(id => {
                const mediaItem = document.querySelector(`.media-checkbox[value="${id}"]`)?.closest('.media-item, .list-item');
                if (mediaItem) {
                    mediaItem.remove();
                }
            });

            // Show success notification
            showNotification('Selected items deleted successfully!', 'success');

            // Uncheck select all
            const selectAll = document.getElementById('select-all');
            if (selectAll) selectAll.checked = false;
        } else {
            showNotification(data.message || 'Error deleting items', 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('Error deleting items', 'error');
    });
}

// Media actions
function viewMedia(id) {
    // Load media details in modal
    fetch(`/admin/media/${id}`)
        .then(response => response.text())
        .then(html => {
            document.getElementById('viewModalContent').innerHTML = html;
            const viewModal = new bootstrap.Modal(document.getElementById('viewModal'));
            viewModal.show();
        })
        .catch(error => {
            console.error('Error loading media:', error);
            showNotification('Error loading media file', 'danger');
        });
}

function editMedia(id) {
    // Redirect to edit page
    window.location.href = `/admin/media/${id}/edit`;
}

function deleteMedia(id) {
    if (confirm('Are you sure you want to delete this file? This action cannot be undone.')) {
        // Create form data for DELETE request
        const formData = new FormData();
        formData.append('_method', 'DELETE');
        formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
        
        fetch(`/admin/media/${id}`, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showNotification(data.message, 'success');
                // Remove the item from the DOM
                const mediaItem = document.querySelector(`[data-id="${id}"]`);
                if (mediaItem) {
                    mediaItem.remove();
                }
                // Reload page to update stats
                setTimeout(() => {
                    location.reload();
                }, 1500);
            } else {
                showNotification('Error deleting media file', 'danger');
            }
        })
        .catch(error => {
            console.error('Error deleting media:', error);
            showNotification('Error deleting media file', 'danger');
        });
    }
}

// Bulk delete functionality
function deleteSelected() {
    const selectedItems = document.querySelectorAll('.media-checkbox:checked');
    if (selectedItems.length === 0) {
        showNotification('Please select items to delete', 'warning');
        return;
    }
    
    if (confirm(`Are you sure you want to delete ${selectedItems.length} selected file(s)? This action cannot be undone.`)) {
        const promises = Array.from(selectedItems).map(checkbox => {
            const id = checkbox.value;
            const formData = new FormData();
            formData.append('_method', 'DELETE');
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            
            return fetch(`/admin/media/${id}`, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
        });
        
        Promise.all(promises)
            .then(responses => Promise.all(responses.map(r => r.json())))
            .then(results => {
                const successCount = results.filter(r => r.success).length;
                showNotification(`${successCount} file(s) deleted successfully`, 'success');
                // Reload page to update content and stats
                setTimeout(() => {
                    location.reload();
                }, 1500);
            })
            .catch(error => {
                console.error('Error deleting files:', error);
                showNotification('Error deleting some files', 'danger');
            });
    }
}

// Copy to clipboard function
function copyToClipboard(selector) {
    const element = document.querySelector(selector);
    element.select();
    element.setSelectionRange(0, 99999);
    document.execCommand('copy');
    showNotification('URL copied to clipboard!', 'success');
}

// Show notification function
function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
    notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(notification);
    
    // Auto dismiss after 3 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 3000);
}

function removeFile(index) {
    const fileInput = document.getElementById('fileInput');
    const dt = new DataTransfer();
    const files = fileInput.files;

    for (let i = 0; i < files.length; i++) {
        if (i !== index) {
            dt.items.add(files[i]);
        }
    }

    fileInput.files = dt.files;
    fileInput.dispatchEvent(new Event('change'));
}
</script>
@endpush
