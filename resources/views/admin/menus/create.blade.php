@extends('admin.layouts.app')

@section('page-title', 'Create Menu')

@push('styles')
<style>
    /* Page Background */
    body {
        background-color: #f8f9fa;
    }
    
    .main-content {
        background-color: #f8f9fa;
    }
    
    .menu-builder-container {
        display: flex;
        gap: 1.5rem;
        margin-top: 0;
    }
    
    .menu-items-panel {
        flex: 0 0 380px;
        min-height: 500px;
    }
    
    .menu-structure-panel {
        flex: 1;
        min-height: 500px;
    }
    
    .content-section {
        margin-bottom: 0;
        border-bottom: 1px solid #e9ecef;
    }
    
    .content-section:last-child {
        border-bottom: none;
    }
    
    .section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 0;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .section-header:hover {
        background: rgba(0, 123, 255, 0.05);
        margin: 0 -1rem;
        padding: 1rem;
        border-radius: 0.5rem;
    }
    
    .section-title {
        font-weight: 600;
        color: #495057;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 1rem;
        margin: 0;
    }
    
    .toggle-section {
        background: none;
        border: none;
        color: #6c757d;
        font-size: 0.875rem;
        cursor: pointer;
        padding: 0.25rem 0.5rem;
        border-radius: 4px;
        transition: all 0.2s ease;
    }
    
    .toggle-section:hover {
        background: rgba(0, 123, 255, 0.1);
        color: #007bff;
    }
    
    .section-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        padding: 0 1rem;
    }
    
    .section-content.open {
        max-height: 500px;
        overflow-y: auto;
        padding: 1rem;
        background: #f8f9fa;
        margin: 0 -1.5rem;
        border-radius: 0;
    }
    
    .selected-items-preview {
        margin-top: 1rem;
        max-height: 150px;
        overflow-y: auto;
    }
    
    .selected-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.75rem;
        background: linear-gradient(135deg, #e3f2fd 0%, #f3e5f5 100%);
        border: 1px solid #bbdefb;
        border-radius: 0.5rem;
        margin-bottom: 0.75rem;
        font-size: 0.875rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        transition: all 0.2s ease;
    }
    
    .selected-item:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .selected-item-info {
        flex: 1;
        color: #1976d2;
        font-weight: 500;
    }
    
    .remove-selected {
        background: none;
        border: none;
        color: #dc3545;
        cursor: pointer;
        padding: 0.25rem;
        border-radius: 0.25rem;
        transition: background 0.2s ease;
    }
    
    .remove-selected:hover {
        background: rgba(220, 53, 69, 0.1);
    }
    
    .add-to-menu-btn {
        width: 100%;
        margin-top: 0.75rem;
    }
    
    .menu-structure {
        min-height: 200px;
        border: 2px dashed #dee2e6;
        border-radius: 0.5rem;
        padding: 1.5rem;
    }
    
    .menu-structure.has-items {
        border-style: solid;
        border-color: #e9ecef;
    }
    
    .menu-structure-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 0.375rem;
        padding: 0.75rem;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        transition: all 0.2s ease;
    }
    
    .menu-structure-item:hover {
        background: #ffffff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    
    .menu-structure-item-info {
        flex: 1;
    }
    
    .menu-structure-item-title {
        font-weight: 500;
        color: #212529;
        font-size: 0.875rem;
    }
    
    .menu-structure-item-url {
        font-size: 0.75rem;
        color: #6c757d;
        margin-top: 0.25rem;
    }
    
    .menu-structure-item-actions {
        display: flex;
        gap: 0.5rem;
    }
    
    .menu-structure-item-actions button {
        background: transparent;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        padding: 0.25rem 0.5rem;
        cursor: pointer;
        font-size: 0.75rem;
        color: #6c757d;
        transition: all 0.2s ease;
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .menu-structure-item-actions button:hover {
        background: #f8f9fa;
        border-color: #adb5bd;
        color: #212529;
    }
    
    .empty-menu-message {
        text-align: center;
        color: #6c757d;
        padding: 3rem 2rem;
        font-size: 1rem;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 1rem;
        border: 2px dashed #dee2e6;
    }
    
    .empty-menu-message i {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        display: block;
        color: #adb5bd;
    }
    
    .menu-structure {
        min-height: 200px;
        border: 2px dashed #dee2e6;
        border-radius: 8px;
        padding: 1rem;
    }
    
    .menu-structure.has-items {
        border-style: solid;
    }
    
    .menu-structure-item {
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: between;
    }
    
    .menu-structure-item-info {
        flex: 1;
    }
    
    .menu-structure-item-title {
        font-weight: 500;
        color: #212529;
    }
    
    .menu-structure-item-url {
        font-size: 0.875rem;
        color: #6c757d;
        margin-top: 0.25rem;
    }
    
    .menu-structure-item-actions {
        display: flex;
        gap: 0.5rem;
    }
    
    .menu-structure-item-actions button {
        background: transparent;
        border: 1px solid #dee2e6;
        border-radius: 4px;
        padding: 0.25rem 0.5rem;
        cursor: pointer;
        font-size: 0.875rem;
        transition: all 0.2s ease;
    }
    
    .menu-structure-item-actions button:hover {
        background: #f8f9fa;
    }
    
    .custom-link-form {
        border: 1px solid #e9ecef;
        border-radius: 0.75rem;
        padding: 1.5rem;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }
    
    .form-group {
        margin-bottom: 1.25rem;
    }
    
    .form-group:last-child {
        margin-bottom: 0;
    }
    
    .form-label {
        display: block;
        margin-bottom: 0.75rem;
        font-weight: 600;
        color: #495057;
        font-size: 0.875rem;
    }
    
    .form-input {
        width: 100%;
        padding: 0.875rem 1rem;
        border: 2px solid #e9ecef;
        border-radius: 0.5rem;
        font-size: 0.875rem;
        transition: all 0.3s ease;
    }
    
    .form-input:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
        transform: translateY(-1px);
    }
    
    /* Button Improvements */
    .btn {
        border-radius: 0.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
    
    .btn-primary {
        background: #007bff;
        border: 1px solid #007bff;
        color: white;
        font-weight: 500;
        padding: 0.75rem 1.5rem;
    }
    
    .btn-primary:hover {
        background: #0056b3;
        border-color: #0056b3;
    }
    
    .btn-outline-secondary {
        border: 1px solid #dadce0;
        color: #3c4043;
        background: white;
        font-weight: 500;
    }
    
    .btn-outline-secondary:hover {
        background: #f8f9fa;
        border-color: #bdc1c6;
        color: #3c4043;
    }
    
    /* Card Improvements */
    .card {
        border: none;
        border-radius: 0.75rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
        overflow: hidden;
        background: white;
    }
    
    .card-header {
        background: white;
        border-bottom: 1px solid #f1f3f4;
        padding: 1.5rem 1.5rem 1rem 1.5rem;
    }
    
    .card-body {
        padding: 0 1.5rem 1.5rem 1.5rem;
    }
    
    .card-title {
        color: #3c4043;
        font-size: 1rem;
    }
    
    /* Form Select Improvements */
    .form-select, .form-control {
        border: 1px solid #dadce0;
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        font-size: 0.875rem;
        transition: all 0.2s ease;
        background-color: white;
    }
    
    .form-select:focus, .form-control:focus {
        border-color: #4285f4;
        box-shadow: 0 0 0 2px rgba(66, 133, 244, 0.2);
        outline: none;
    }
    
    .form-label {
        color: #3c4043;
        font-weight: 500;
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
    }
    
    /* Multiple Select Improvements */
    select[multiple] {
        min-height: 200px;
        background: white;
        border: 2px solid #e9ecef;
        border-radius: 0.5rem;
        padding: 0.5rem;
    }
    
    select[multiple] option {
        padding: 0.5rem 0.75rem;
        border-radius: 0.25rem;
        margin-bottom: 2px;
    }
    
    select[multiple] option:checked {
        background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
        color: white;
    }
    
    /* Responsive Design */
    @media (max-width: 992px) {
        .menu-builder-container {
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .menu-items-panel {
            flex: none;
        }
        
        .menu-structure-panel {
            order: 2;
        }
    }
    
    @media (max-width: 768px) {
        .menu-builder-container {
            margin-top: 1rem;
        }
        
        .card-body {
            padding: 1rem;
        }
        
        .section-content.open {
            padding: 0.75rem;
        }
        
        .btn-lg {
            font-size: 1rem;
            padding: 0.75rem 1.5rem;
        }
        
        .d-flex.gap-2 {
            gap: 0.5rem !important;
        }
    }
    
    /* Loading Animation */
    .btn-loading {
        position: relative;
        color: transparent !important;
    }
    
    .btn-loading::after {
        content: "";
        position: absolute;
        width: 16px;
        height: 16px;
        top: 50%;
        left: 50%;
        margin-left: -8px;
        margin-top: -8px;
        border: 2px solid transparent;
        border-top-color: #ffffff;
        border-radius: 50%;
        animation: spin 1s ease-in-out infinite;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
    /* Drag and Drop Styling */
    .sortable-ghost {
        opacity: 0.4;
    }
    
    .sortable-chosen {
        transform: scale(1.02);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h2 mb-1 text-dark fw-bold">Create Menu</h1>
                    <p class="text-muted mb-0 fs-6">Build your site navigation by adding pages, posts, categories, and custom links</p>
                </div>
                <div>
                    <a href="{{ route('admin.menus.index') }}" class="btn btn-outline-secondary btn-lg">
                        <i class="bi bi-arrow-left me-2"></i> Back to Menus
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <form method="POST" action="{{ route('admin.menus.store') }}" id="menuForm">
        @csrf
        
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white border-0 pb-0">
                        <h5 class="card-title mb-0 text-dark fw-semibold">
                            <i class="bi bi-gear me-2 text-primary"></i>
                            Menu Details
                        </h5>
                    </div>
                    <div class="card-body pt-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Menu Name *</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" 
                               value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="location" class="form-label">Menu Location</label>
                        <select id="location" name="location" class="form-select">
                            <option value="">Select Location</option>
                            <option value="primary" {{ old('location') == 'primary' ? 'selected' : '' }}>Primary Navigation</option>
                            <option value="footer" {{ old('location') == 'footer' ? 'selected' : '' }}>Footer Menu</option>
                            <option value="sidebar" {{ old('location') == 'sidebar' ? 'selected' : '' }}>Sidebar Menu</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" rows="3" 
                          placeholder="Optional description for this menu">{{ old('description') }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="menu-builder-container">
                    <!-- Menu Items Panel (Left Side) -->
                    <div class="menu-items-panel">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white border-0">
                                <h6 class="card-title mb-0 text-dark fw-semibold">
                                    <i class="bi bi-plus-circle me-2 text-primary"></i>
                                    Add Menu Items
                                </h6>
                            </div>
                            <div class="card-body">
            
            <!-- Pages Section -->
            <div class="content-section">
                <div class="section-header" onclick="toggleSection('pages')">
                    <h6 class="section-title">
                        <i class="bi bi-file-earmark-text text-primary"></i>
                        Pages
                    </h6>
                    <button type="button" class="toggle-section">
                        <i class="bi bi-chevron-down" id="pages-icon"></i>
                    </button>
                </div>
                <div class="section-content open" id="pages-content">
                    <div class="mb-3">
                        <select class="form-select" id="pages-select" multiple size="6">
                            @forelse($pages as $page)
                                <option value="page-{{ $page->id }}" 
                                        data-type="page" 
                                        data-id="{{ $page->id }}"
                                        data-title="{{ $page->title }}"
                                        data-url="/{{ $page->slug }}">
                                    {{ $page->title }}
                                </option>
                            @empty
                                <option disabled>No published pages found</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="selected-items-preview" id="pages-selected"></div>
                    <button type="button" class="btn btn-primary w-100" onclick="addSelectedItems('pages')" id="pages-add-btn" disabled>
                        <i class="bi bi-plus"></i>
                        Add Selected Pages
                    </button>
                </div>
            </div>

            <!-- Posts Section -->
            <div class="content-section">
                <div class="section-header" onclick="toggleSection('posts')">
                    <h6 class="section-title">
                        <i class="bi bi-newspaper text-primary"></i>
                        Posts
                    </h6>
                    <button type="button" class="toggle-section">
                        <i class="bi bi-chevron-down" id="posts-icon"></i>
                    </button>
                </div>
                <div class="section-content" id="posts-content">
                    <div class="mb-3">
                        <select class="form-select" id="posts-select" multiple size="6">
                            @forelse($posts as $post)
                                <option value="post-{{ $post->id }}" 
                                        data-type="post" 
                                        data-id="{{ $post->id }}"
                                        data-title="{{ $post->title }}"
                                        data-url="/posts/{{ $post->slug }}">
                                    {{ $post->title }}
                                </option>
                            @empty
                                <option disabled>No published posts found</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="selected-items-preview" id="posts-selected"></div>
                    <button type="button" class="btn btn-primary w-100" onclick="addSelectedItems('posts')" id="posts-add-btn" disabled>
                        <i class="bi bi-plus"></i>
                        Add Selected Posts
                    </button>
                </div>
            </div>

            <!-- Categories Section -->
            <div class="content-section">
                <div class="section-header" onclick="toggleSection('categories')">
                    <h6 class="section-title">
                        <i class="bi bi-tags text-primary"></i>
                        Categories
                    </h6>
                    <button type="button" class="toggle-section">
                        <i class="bi bi-chevron-down" id="categories-icon"></i>
                    </button>
                </div>
                <div class="section-content" id="categories-content">
                    <div class="mb-3">
                        <label class="form-label small text-muted">Post Categories</label>
                        <select class="form-select" id="post-categories-select" multiple size="4">
                            @forelse($postCategories as $category)
                                <option value="post-category-{{ $category->id }}" 
                                        data-type="post-category" 
                                        data-id="{{ $category->id }}"
                                        data-title="{{ $category->name }}"
                                        data-url="/post-categories/{{ $category->slug }}">
                                    {{ $category->name }}
                                </option>
                            @empty
                                <option disabled>No post categories found</option>
                            @endforelse
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label small text-muted">Page Categories</label>
                        <select class="form-select" id="page-categories-select" multiple size="4">
                            @forelse($pageCategories as $category)
                                <option value="page-category-{{ $category->id }}" 
                                        data-type="page-category" 
                                        data-id="{{ $category->id }}"
                                        data-title="{{ $category->name }}"
                                        data-url="/page-categories/{{ $category->slug }}">
                                    {{ $category->name }}
                                </option>
                            @empty
                                <option disabled>No page categories found</option>
                            @endforelse
                        </select>
                    </div>
                    
                    <div class="selected-items-preview" id="categories-selected"></div>
                    <button type="button" class="btn btn-primary w-100" onclick="addSelectedItems('categories')" id="categories-add-btn" disabled>
                        <i class="bi bi-plus"></i>
                        Add Selected Categories
                    </button>
                </div>
            </div>

            <!-- Custom Links Section -->
            <div class="content-section">
                <div class="section-header" onclick="toggleSection('custom')">
                    <h6 class="section-title">
                        <i class="bi bi-link-45deg text-primary"></i>
                        Custom Links
                    </h6>
                    <button type="button" class="toggle-section">
                        <i class="bi bi-chevron-down" id="custom-icon"></i>
                    </button>
                </div>
                <div class="section-content" id="custom-content">
                    <div class="bg-light p-3 rounded mb-3">
                        <div class="mb-3">
                            <label class="form-label">Link Text</label>
                            <input type="text" id="custom-title" class="form-control" placeholder="Enter link text">
                        </div>
                        <div class="mb-0">
                            <label class="form-label">URL</label>
                            <input type="url" id="custom-url" class="form-control" placeholder="https://example.com">
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary w-100" onclick="addCustomLink()">
                        <i class="bi bi-plus"></i>
                        Add Custom Link
                    </button>
                </div>
                </div>
            </div>
        </div>
        
                    <!-- Menu Structure Panel (Right Side) -->
                    <div class="menu-structure-panel">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white border-0">
                                <h6 class="card-title mb-0 text-dark fw-semibold">
                                    <i class="bi bi-list-ul me-2 text-primary"></i>
                                    Menu Structure
                                </h6>
                            </div>
                            <div class="card-body">
            
                <div class="menu-structure" id="menu-structure">
                    <div class="empty-menu-message">
                        <i class="bi bi-plus-circle"></i>
                        <p>Add items from the left panel to build your menu</p>
                    </div>
                </div>
                
                            <!-- Hidden input to store menu items -->
                            <input type="hidden" name="menu_items" id="menu-items-input" value="[]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm mt-4">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-md-row gap-3 justify-content-between align-items-md-center">
                            <div class="text-muted">
                                <i class="bi bi-info-circle me-2 text-primary"></i>
                                <small>Make sure to save your menu after adding all items</small>
                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary btn-lg px-4">
                                    <i class="bi bi-check-circle me-2"></i>
                                    Create Menu
                                </button>
                                <a href="{{ route('admin.menus.index') }}" class="btn btn-outline-secondary btn-lg px-4">
                                    <i class="bi bi-x-circle me-2"></i>
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
let menuItems = [];
let selectedItems = {
    pages: [],
    posts: [],
    categories: []
};

document.addEventListener('DOMContentLoaded', function() {
    // Initialize dropdown change handlers
    setupDropdownHandlers();
});

function setupDropdownHandlers() {
    // Pages dropdown
    const pagesSelect = document.getElementById('pages-select');
    if (pagesSelect) {
        pagesSelect.addEventListener('change', function() {
            updateSelectedItems('pages', this);
        });
    }
    
    // Posts dropdown
    const postsSelect = document.getElementById('posts-select');
    if (postsSelect) {
        postsSelect.addEventListener('change', function() {
            updateSelectedItems('posts', this);
        });
    }
    
    // Post categories dropdown
    const postCategoriesSelect = document.getElementById('post-categories-select');
    if (postCategoriesSelect) {
        postCategoriesSelect.addEventListener('change', function() {
            updateSelectedItems('categories', this, 'post-categories');
        });
    }
    
    // Page categories dropdown  
    const pageCategoriesSelect = document.getElementById('page-categories-select');
    if (pageCategoriesSelect) {
        pageCategoriesSelect.addEventListener('change', function() {
            updateSelectedItems('categories', this, 'page-categories');
        });
    }
}

function toggleSection(section) {
    const content = document.getElementById(section + '-content');
    const icon = document.getElementById(section + '-icon');
    
    if (content.classList.contains('open')) {
        content.classList.remove('open');
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-right');
    } else {
        content.classList.add('open');
        icon.classList.remove('fa-chevron-right');
        icon.classList.add('fa-chevron-down');
    }
}

function updateSelectedItems(section, selectElement, subsection = null) {
    const selectedOptions = Array.from(selectElement.selectedOptions);
    const previewContainer = document.getElementById(section + '-selected');
    const addButton = document.getElementById(section + '-add-btn');
    
    // Clear current selection for this section/subsection
    if (subsection) {
        selectedItems[section] = selectedItems[section].filter(item => 
            !item.selectId.includes(subsection)
        );
    } else {
        selectedItems[section] = [];
    }
    
    // Add new selections
    selectedOptions.forEach(option => {
        if (!option.disabled) {
            selectedItems[section].push({
                value: option.value,
                type: option.getAttribute('data-type'),
                id: option.getAttribute('data-id'),
                title: option.getAttribute('data-title'),
                url: option.getAttribute('data-url'),
                selectId: selectElement.id
            });
        }
    });
    
    // Update preview
    updatePreview(section, previewContainer);
    
    // Update button state
    const totalSelected = selectedItems.pages.length + selectedItems.posts.length + selectedItems.categories.length;
    addButton.disabled = selectedItems[section].length === 0;
}

function updatePreview(section, container) {
    container.innerHTML = '';
    
    selectedItems[section].forEach((item, index) => {
        const itemElement = document.createElement('div');
        itemElement.className = 'selected-item';
        itemElement.innerHTML = `
            <div class="selected-item-info">${item.title}</div>
            <button type="button" class="remove-selected" onclick="removeSelectedItem('${section}', ${index})">
                <i class="fas fa-times"></i>
            </button>
        `;
        container.appendChild(itemElement);
    });
}

function removeSelectedItem(section, index) {
    const item = selectedItems[section][index];
    
    // Unselect from dropdown
    const selectElement = document.getElementById(item.selectId);
    const option = selectElement.querySelector(`option[value="${item.value}"]`);
    if (option) {
        option.selected = false;
    }
    
    // Remove from selection
    selectedItems[section].splice(index, 1);
    
    // Update preview
    const previewContainer = document.getElementById(section + '-selected');
    updatePreview(section, previewContainer);
    
    // Update button state
    const addButton = document.getElementById(section + '-add-btn');
    addButton.disabled = selectedItems[section].length === 0;
}

function addSelectedItems(section) {
    selectedItems[section].forEach(selectedItem => {
        const item = {
            id: Date.now() + Math.random(), // Unique ID
            type: selectedItem.type,
            object_id: selectedItem.id,
            title: selectedItem.title,
            url: selectedItem.url,
            order: menuItems.length
        };
        
        menuItems.push(item);
        addItemToStructure(item);
    });
    
    // Clear selections
    selectedItems[section] = [];
    
    // Clear dropdowns based on section
    if (section === 'pages') {
        document.getElementById('pages-select').selectedIndex = -1;
    } else if (section === 'posts') {
        document.getElementById('posts-select').selectedIndex = -1;
    } else if (section === 'categories') {
        document.getElementById('post-categories-select').selectedIndex = -1;
        document.getElementById('page-categories-select').selectedIndex = -1;
    }
    
    // Clear preview and disable button
    const previewContainer = document.getElementById(section + '-selected');
    previewContainer.innerHTML = '';
    document.getElementById(section + '-add-btn').disabled = true;
    
    updateMenuItemsInput();
}

function addCustomLink() {
    const title = document.getElementById('custom-title').value.trim();
    const url = document.getElementById('custom-url').value.trim();
    
    if (!title || !url) {
        alert('Please enter both link text and URL');
        return;
    }
    
    const item = {
        id: Date.now() + Math.random(),
        type: 'custom',
        object_id: null,
        title: title,
        url: url,
        order: menuItems.length
    };
    
    menuItems.push(item);
    addItemToStructure(item);
    
    // Clear form
    document.getElementById('custom-title').value = '';
    document.getElementById('custom-url').value = '';
    
    updateMenuItemsInput();
}

function addItemToStructure(item) {
    const structure = document.getElementById('menu-structure');
    
    // Remove empty message if this is the first item
    if (menuItems.length === 1) {
        structure.innerHTML = '';
        structure.classList.add('has-items');
    }
    
    const itemElement = document.createElement('div');
    itemElement.className = 'menu-structure-item';
    itemElement.setAttribute('data-id', item.id);
    
    itemElement.innerHTML = `
        <div class="menu-structure-item-info">
            <div class="menu-structure-item-title">${item.title}</div>
            <div class="menu-structure-item-url">${item.url}</div>
        </div>
        <div class="menu-structure-item-actions">
            <button type="button" onclick="moveItemUp(${item.id})">↑</button>
            <button type="button" onclick="moveItemDown(${item.id})">↓</button>
            <button type="button" onclick="removeItem(${item.id})" style="color: #dc3545;">×</button>
        </div>
    `;
    
    structure.appendChild(itemElement);
}

function removeItem(itemId) {
    // Remove from array
    menuItems = menuItems.filter(item => item.id !== itemId);
    
    // Remove from DOM
    const element = document.querySelector(`[data-id="${itemId}"]`);
    if (element) {
        element.remove();
    }
    
    // Show empty message if no items left
    const structure = document.getElementById('menu-structure');
    if (menuItems.length === 0) {
        structure.classList.remove('has-items');
        structure.innerHTML = `
            <div class="empty-menu-message">
                <i class="fas fa-plus-circle" style="font-size: 2rem; color: #6c757d; margin-bottom: 0.5rem;"></i>
                <p>Add items from the left panel to build your menu</p>
            </div>
        `;
    }
    
    // Update order values
    menuItems.forEach((item, index) => {
        item.order = index;
    });
    
    updateMenuItemsInput();
}

function moveItemUp(itemId) {
    const itemIndex = menuItems.findIndex(item => item.id === itemId);
    if (itemIndex > 0) {
        [menuItems[itemIndex], menuItems[itemIndex - 1]] = [menuItems[itemIndex - 1], menuItems[itemIndex]];
        refreshStructureDisplay();
        updateMenuItemsInput();
    }
}

function moveItemDown(itemId) {
    const itemIndex = menuItems.findIndex(item => item.id === itemId);
    if (itemIndex < menuItems.length - 1) {
        [menuItems[itemIndex], menuItems[itemIndex + 1]] = [menuItems[itemIndex + 1], menuItems[itemIndex]];
        refreshStructureDisplay();
        updateMenuItemsInput();
    }
}

function refreshStructureDisplay() {
    const structure = document.getElementById('menu-structure');
    structure.innerHTML = '';
    
    if (menuItems.length === 0) {
        structure.classList.remove('has-items');
        structure.innerHTML = `
            <div class="empty-menu-message">
                <i class="fas fa-plus-circle" style="font-size: 2rem; color: #6c757d; margin-bottom: 0.5rem;"></i>
                <p>Add items from the left panel to build your menu</p>
            </div>
        `;
        return;
    }
    
    structure.classList.add('has-items');
    menuItems.forEach((item, index) => {
        item.order = index;
        addItemToStructure(item);
    });
}

function updateMenuItemsInput() {
    document.getElementById('menu-items-input').value = JSON.stringify(menuItems);
}

// Form validation
document.getElementById('menuForm').addEventListener('submit', function(e) {
    const menuName = document.getElementById('name').value.trim();
    
    if (!menuName) {
        e.preventDefault();
        alert('Please enter a menu name');
        return;
    }
    
    if (menuItems.length === 0) {
        if (!confirm('You are creating an empty menu. Are you sure you want to continue?')) {
            e.preventDefault();
            return;
        }
    }
});
</script>
@endsection