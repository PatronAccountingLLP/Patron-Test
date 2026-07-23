@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Error Message -->
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Validation Errors -->
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h6 class="alert-heading"><i class="bi bi-exclamation-triangle me-2"></i>Please fix the following errors:</h6>
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Create New Page</h1>
                <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to Pages
                </a>
            </div>

            <form method="POST" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Page Title <span class="text-danger" id="title-required">*</span></label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                           id="title" name="title" value="{{ old('title') }}">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="directry-label" class="form-label">Directry Name<span class="text-danger" id="title-required">*</span></label>
                                  <select class="form-control" id="directry-label" name="directry_label">
                                    <option value="">None</option>
                                
                                    <option value="fssai-registration"
                                        {{ old('directry_label') == 'fssai-registration' ? 'selected' : '' }}>
                                        Fssai Registration
                                    </option>
                                
                                    <option value="ngo-registration"
                                        {{ old('directry_label') == 'ngo-registration' ? 'selected' : '' }}>
                                        NGO Registration
                                    </option>
                                
                                    <option value="trade-license"
                                        {{ old('directry_label') == 'trade-license' ? 'selected' : '' }}>
                                        Trade License
                                    </option>
                                
                                    <option value="drug-license"
                                        {{ old('directry_label') == 'drug-license' ? 'selected' : '' }}>
                                        Drug License
                                    </option>
                                
                                    <option value="llp-registration"
                                        {{ old('directry_label') == 'llp-registration' ? 'selected' : '' }}>
                                        LLP Registration
                                    </option>
                                
                                    <option value="private-limited-company-registration"
                                        {{ old('directry_label') == 'private-limited-company-registration' ? 'selected' : '' }}>
                                        Private Limited Company Registration
                                    </option>
                                                                        <option value="udyam-registration"
                                        {{ old('directry_label') == 'udyam-registration' ? 'selected' : '' }}>
                                        Udyam Registration
                                    </option>
                                                                    <option value="msme-registration"
                                        {{ old('directry_label') == 'msme-registration' ? 'selected' : '' }}>
                                        MSME Registration
                                    </option>
                                    <option value="startup-registration"
                                        {{ old('directry_label') == 'startup-registration' ? 'selected' : '' }}>
                                        Startup Registration
                                    </option>
                                    <option value="iec-registration"
                                        {{ old('directry_label') == 'iec-registration' ? 'selected' : '' }}>
                                        IEC Registration
                                    </option>
                                    <option value="registration-for-12a-80g-certificate"
                                        {{ old('directry_label') == 'registration-for-12a-80g-certificate' ? 'selected' : '' }}>
                                        Registration For 12a 80g Certificate
                                    </option>
                                     <option value="society-registration"
                                        {{ old('directry_label') == 'society-registration' ? 'selected' : '' }}>
                                        Society Registration
                                    </option>
                                    <option value="stock-audit"
                                        {{ old('directry_label') == 'stock-audit' ? 'selected' : '' }}>
                                        Stock Audit
                                    </option>
                                    <!--itr-filling-services-->
                                     <option value="itr-filling-services"
                                        {{ old('directry_label') == 'itr-filling-services' ? 'selected' : '' }}>
                                        ITR Filling Services
                                    </option>
                                     <option value="trademark"
                                        {{ old('directry_label') == 'trademark' ? 'selected' : '' }}>
                                        Trademark
                                    </option>
                                     <option value="gst"
                                        {{ old('directry_label') == 'gst' ? 'selected' : '' }}>
                                        GST
                                    </option>
                                     <option value="section-8-company-registration"
                                        {{ old('directry_label') == 'section-8-company-registration' ? 'selected' : '' }}>
                                        Section-8 Company Registration
                                    </option>
                                </select>

                                    @error('directry-label')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                

                                <div class="mb-3">
                                    <label for="slug" class="form-label">
                                        Page Slug 
                                        <span class="badge bg-info ms-1" id="slug-status" style="display: none;">Auto-generated</span>
                                    </label>
                                    
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                                           id="slug" name="slug" value="{{ old('slug') }}" 
                                           placeholder="Leave empty to auto-generate">
                                    <div class="form-text" id="slug-help">URL-friendly version of the title. Leave empty to auto-generate from page title.</div>
                                    @error('slug')
                                        <div class="invalid-feedback">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="excerpt" class="form-label">Excerpt</label>
                                    <textarea class="form-control @error('excerpt') is-invalid @enderror" 
                                              id="excerpt" name="excerpt" rows="3" 
                                              placeholder="Brief description of the page (optional)">{{ old('excerpt') }}</textarea>
                                    @error('excerpt')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 d-none">
                                    <label for="meta_title" class="form-label">META Title</label>
                                    <input type="text" class="form-control @error('meta_title') is-invalid @enderror" 
                                           id="meta_title" name="meta_title" value="{{ old('meta_title') }}"
                                           placeholder="SEO title for search engines (optional)">
                                    <div class="form-text">Recommended length: 50-60 characters. If left empty, page title will be used.</div>
                                    @error('meta_title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 d-none">
                                    <label for="meta_description" class="form-label">META Description</label>
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror" 
                                              id="meta_description" name="meta_description" rows="3" 
                                              placeholder="SEO description for search engines (optional)">{{ old('meta_description') }}</textarea>
                                    <div class="form-text">Recommended length: 150-160 characters. This text appears in search engine results.</div>
                                    @error('meta_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <label for="content" class="form-label mb-0">Content <span class="text-danger" id="content-required">*</span></label>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <button type="button" class="btn btn-outline-secondary" onclick="insertImage()" title="Insert Image">
                                                <i class="bi bi-image"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary" onclick="insertSection()" title="Insert Section">
                                                <i class="bi bi-layout-text-sidebar"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary" onclick="insertColumns()" title="Insert Columns">
                                                <i class="bi bi-columns"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary" onclick="insertButton()" title="Insert Button">
                                                <i class="bi bi-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary" onclick="insertList()" title="Insert List">
                                                <i class="bi bi-list-ul"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary" onclick="insertCard()" title="Insert Card">
                                                <i class="bi bi-card-text"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <textarea class="form-control @error('content') is-invalid @enderror" 
                                              id="content" name="content" rows="15">{{ old('content') }}</textarea>
                                    <div class="form-text">You can use HTML tags for formatting. Use the toolbar above to insert common elements.</div>
                                    @error('content')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Template-Specific Sections (Hidden for Registration template) -->
                                <div id="template-specific-sections">
                                <!-- Hero Section -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label mb-0">Hero Section</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="hero_enabled" name="hero_enabled" value="1" {{ old('hero_enabled') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="hero_enabled">Enable Hero Section</label>
                                        </div>
                                    </div>

                                    <div id="hero-content" style="display: {{ old('hero_enabled') ? 'block' : 'none' }};">
                                        <div class="mb-3">
                                            <label for="hero_title" class="form-label">Hero Title</label>
                                            <input type="text" class="form-control @error('hero_title') is-invalid @enderror" 
                                                   id="hero_title" name="hero_title" value="{{ old('hero_title') }}"
                                                   placeholder="e.g., Private Limited Company registration in India -Starting @ ₹999">
                                            @error('hero_title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="fw-bold mb-2">Benefits (Max 3)</label>
                                            <div id="hero-benefits-container">
                                                <div class="hero-benefit-item mb-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="hero_benefits[]" 
                                                               placeholder="Enter benefit text" value="{{ old('hero_benefits.0') }}">
                                                        <button type="button" class="btn btn-danger remove-hero-benefit" style="display: none;">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-hero-benefit">
                                                <i class="bi bi-plus-circle"></i> Add Benefit
                                            </button>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="hero_button_text" class="form-label">Button Text</label>
                                                <input type="text" class="form-control" id="hero_button_text" name="hero_button_text" 
                                                       value="{{ old('hero_button_text') }}" placeholder="e.g., Explore our services">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="hero_button_link" class="form-label">Button Link</label>
                                                <input type="text" class="form-control" id="hero_button_link" name="hero_button_link" 
                                                       value="{{ old('hero_button_link') }}" placeholder="e.g., #services">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="hero_video_text" class="form-label">Video Link Text</label>
                                                <input type="text" class="form-control" id="hero_video_text" name="hero_video_text" 
                                                       value="{{ old('hero_video_text') }}" placeholder="e.g., Know about PVT in 60 seconds.">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="hero_video_link" class="form-label">Video URL</label>
                                                <input type="text" class="form-control" id="hero_video_link" name="hero_video_link" 
                                                       value="{{ old('hero_video_link') }}" placeholder="e.g., https://youtube.com/...">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="hero_document_text" class="form-label">Document Link Text</label>
                                                <input type="text" class="form-control" id="hero_document_text" name="hero_document_text" 
                                                       value="{{ old('hero_document_text') }}" placeholder="e.g., View Sample document">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="hero_document_link" class="form-label">Document URL</label>
                                                <input type="text" class="form-control" id="hero_document_link" name="hero_document_link" 
                                                       value="{{ old('hero_document_link') }}" placeholder="e.g., /documents/sample.pdf">
                                            </div>
                                        </div>

                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle"></i>
                                            <strong>Note:</strong> The hero section appears at the top of the page with the title, benefits list, and action buttons.
                                        </div>
                                    </div>
                                </div>

                                <!-- Intro Section -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label mb-0">Intro Section</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="intro_enabled" name="intro_enabled" value="1" {{ old('intro_enabled') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="intro_enabled">Enable Intro Section</label>
                                        </div>
                                    </div>

                                    <div id="intro-content" style="display: {{ old('intro_enabled') ? 'block' : 'none' }};">
                                        <div class="mb-3">
                                            <label for="intro_title" class="form-label">Intro Section Title</label>
                                            <input type="text" class="form-control @error('intro_title') is-invalid @enderror" 
                                                   id="intro_title" name="intro_title" value="{{ old('intro_title') }}"
                                                   placeholder="e.g., Stock Audit Consulting Services in India">
                                            @error('intro_title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="intro_content" class="form-label">Intro Section Content</label>
                                            <textarea class="form-control @error('intro_content') is-invalid @enderror" 
                                                      id="intro_content" name="intro_content" rows="5"
                                                      placeholder="Enter the introductory content here...">{{ old('intro_content') }}</textarea>
                                            <div class="form-text">This content will be displayed before the FAQ section with styled formatting.</div>
                                            @error('intro_content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle"></i>
                                            <strong>Note:</strong> The intro section will be displayed prominently on the page with custom styling. It's perfect for highlighting key information or providing context before your main content.
                                        </div>
                                    </div>
                                </div>

                                <!-- What Section -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label mb-0">What Section</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="what_enabled" name="what_enabled" value="1" {{ old('what_enabled') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="what_enabled">Enable What Section</label>
                                        </div>
                                    </div>

                                    <div id="what-content" style="display: {{ old('what_enabled') ? 'block' : 'none' }};">
                                        <div class="mb-3">
                                            <label for="what_title" class="form-label">Section Title</label>
                                            <input type="text" class="form-control @error('what_title') is-invalid @enderror" 
                                                   id="what_title" name="what_title" value="{{ old('what_title') }}"
                                                   placeholder="e.g., What is a Stock Audit?">
                                            @error('what_title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="what_content" class="form-label">Section Content</label>
                                            <textarea class="form-control @error('what_content') is-invalid @enderror" 
                                                      id="what_content" name="what_content" rows="6"
                                                      placeholder="Enter the content explaining what this topic is about...">{{ old('what_content') }}</textarea>
                                            <div class="form-text">Use paragraphs to separate different points. Each paragraph will be displayed with proper spacing.</div>
                                            @error('what_content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="what_image" class="form-label">Section Image</label>
                                            <input type="file" class="form-control what-image-input @error('what_image') is-invalid @enderror" 
                                                   id="what_image_file" accept="image/*">
                                            <input type="hidden" name="what_image" id="what_image" value="{{ old('what_image') }}">
                                            @if(old('what_image'))
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . old('what_image')) }}" 
                                                     class="img-thumbnail what-image-preview" 
                                                     style="max-height: 150px;">
                                            </div>
                                            @endif
                                            <small class="text-muted">Upload an image (PNG, JPG, SVG - Max 2MB)</small>
                                            @error('what_image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="what_additional_content" class="form-label">Additional Content (After Image)</label>
                                            <textarea class="form-control @error('what_additional_content') is-invalid @enderror" 
                                                      id="what_additional_content" name="what_additional_content" rows="4"
                                                      placeholder="Enter additional content that will appear after the image...">{{ old('what_additional_content') }}</textarea>
                                            <div class="form-text">This text will appear below the image as shown in the screenshot.</div>
                                            @error('what_additional_content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle"></i>
                                            <strong>Note:</strong> This section displays an informative content block with an image, perfect for explaining "What is..." type content.
                                        </div>
                                    </div>
                                </div>

                                <!-- Applicability Section -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label mb-0">Applicability Section</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="applicability_enabled" name="applicability_enabled" value="1" {{ old('applicability_enabled') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="applicability_enabled">Enable Applicability Section</label>
                                        </div>
                                    </div>

                                    <div id="applicability-content" style="display: {{ old('applicability_enabled') ? 'block' : 'none' }};">
                                        <div class="mb-3">
                                            <label for="applicability_title" class="form-label">Section Title</label>
                                            <input type="text" class="form-control @error('applicability_title') is-invalid @enderror" 
                                                   id="applicability_title" name="applicability_title" value="{{ old('applicability_title') }}"
                                                   placeholder="e.g., Stock Audit Applicability & Limit">
                                            @error('applicability_title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="applicability_content" class="form-label">Section Content</label>
                                            <textarea class="form-control @error('applicability_content') is-invalid @enderror" 
                                                      id="applicability_content" name="applicability_content" rows="8"
                                                      placeholder="Enter the applicability content with multiple paragraphs...">{{ old('applicability_content') }}</textarea>
                                            <div class="form-text">Use double line breaks to separate paragraphs. Each paragraph will be displayed with proper spacing.</div>
                                            @error('applicability_content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle"></i>
                                            <strong>Note:</strong> This section displays applicability rules and limits information.
                                        </div>
                                    </div>
                                </div>

                                <!-- Services Section -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label mb-0">Services Section (Max 12 items)</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="services_enabled" name="services_enabled" value="1" {{ old('services_enabled') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="services_enabled">Enable Services Section</label>
                                        </div>
                                    </div>

                                    <div id="services-content" style="display: {{ old('services_enabled') ? 'block' : 'none' }};">
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <label class="form-label mb-0">Service Items (Maximum 6)</label>
                                                <button type="button" class="btn btn-outline-primary btn-sm" onclick="addServiceItem()">
                                                    <i class="bi bi-plus-circle"></i> Add Service Item
                                                </button>
                                            </div>

                                            <div id="services-items-container">
                                                @if(old('services_items'))
                                                    @foreach(old('services_items') as $index => $service_item)
                                                        <div class="service-item border rounded p-3 mb-3" data-index="{{ $index }}">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="mb-0">Service Item #<span class="service-number">{{ $index + 1 }}</span></h6>
                                                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeServiceItem(this)">
                                                                    <i class="bi bi-trash"></i> Remove
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 mb-2">
                                                                    <label class="fw-bold d-block mb-1">Service Title</label>
                                                                    <input type="text" class="form-control" name="services_items[{{ $index }}][title]" value="{{ $service_item['title'] ?? '' }}" placeholder="e.g., Opening & Closing Stock Verification">
                                                                </div>
                                                                <div class="col-12 mb-2">
                                                                    <label class="fw-bold d-block mb-1">Service Description</label>
                                                                    <textarea class="form-control" name="services_items[{{ $index }}][description]" rows="2" placeholder="Brief description of the service...">{{ $service_item['description'] ?? '' }}</textarea>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="fw-bold d-block mb-1">Service Image</label>
                                                                    <input type="file" class="form-control service-image-input" 
                                                                           data-index="{{ $index }}" 
                                                                           accept="image/*">
                                                                    <input type="hidden" name="services_items[{{ $index }}][image]" value="{{ $service_item['image'] ?? '' }}">
                                                                    @if(!empty($service_item['image']))
                                                                    <div class="mt-2">
                                                                        <img src="{{ asset('storage/' . $service_item['image']) }}" 
                                                                             class="img-thumbnail service-image-preview" 
                                                                             style="max-height: 100px;">
                                                                    </div>
                                                                    @endif
                                                                    <small class="text-muted">Upload an image (PNG, JPG, SVG - Max 2MB)</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <!-- Default first service item -->
                                                    <div class="service-item border rounded p-3 mb-3" data-index="0">
                                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                                            <h6 class="mb-0">Service Item #<span class="service-number">1</span></h6>
                                                            <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeServiceItem(this)">
                                                                <i class="bi bi-trash"></i> Remove
                                                            </button>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 mb-2">
                                                                <label class="fw-bold d-block mb-1">Service Title</label>
                                                                <input type="text" class="form-control" name="services_items[0][title]" placeholder="e.g., Opening & Closing Stock Verification">
                                                            </div>
                                                            <div class="col-12 mb-2">
                                                                <label class="fw-bold d-block mb-1">Service Description</label>
                                                                <textarea class="form-control" name="services_items[0][description]" rows="2" placeholder="Brief description of the service..."></textarea>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="fw-bold d-block mb-1">Service Image</label>
                                                                <input type="file" class="form-control service-image-input" 
                                                                       data-index="0" 
                                                                       accept="image/*">
                                                                <input type="hidden" name="services_items[0][image]" value="">
                                                                <small class="text-muted">Upload an image (PNG, JPG, SVG - Max 2MB)</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="services_note" class="form-label">Services Note (Optional)</label>
                                            <textarea class="form-control @error('services_note') is-invalid @enderror" 
                                                      id="services_note" name="services_note" rows="2"
                                                      placeholder="e.g., Such reports not only enhance internal control but also provide valuable insights for decision-making, financial reporting, and stakeholder assurance.">{{ old('services_note') }}</textarea>
                                            <div class="form-text">This note will appear at the bottom of the services section in a styled "Please Note" box.</div>
                                            @error('services_note')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Service Content Section -->
                                        <div class="mb-3">
                                            <label for="service_content" class="form-label">Service Content (Optional)</label>
                                            <textarea class="form-control @error('service_content') is-invalid @enderror" 
                                                      id="service_content" name="service_content" rows="10"
                                                      placeholder="Write your content here... Use the editor toolbar above to format text, add images, tables, and more.">{{ old('service_content') }}</textarea>
                                            <div class="form-text">Use the rich editor toolbar to format your content with text styling, links, images, tables, and more.</div>
                                            @error('service_content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle"></i>
                                            <strong>Note:</strong> You can add up to 6 service items. Each service will be displayed in a card with an icon, title, and description.
                                        </div>
                                    </div>
                                </div>

                                <!-- Report Components Section -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label mb-0">Report Components Section (Max 12 items)</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="report_components_enabled" name="report_components_enabled" value="1" {{ old('report_components_enabled') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="report_components_enabled">Enable Report Components Section</label>
                                        </div>
                                    </div>

                                    <div id="report-components-content" style="display: {{ old('report_components_enabled') ? 'block' : 'none' }};">
                                        <!-- Report Format Header -->
                                        <div class="card mb-3 bg-light">
                                            <div class="card-header">
                                                <h6 class="mb-0">Report Format Header Section</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="report_format_title" class="form-label">Header Title</label>
                                                    <input type="text" class="form-control @error('report_format_title') is-invalid @enderror" 
                                                           id="report_format_title" name="report_format_title" 
                                                           value="{{ old('report_format_title') }}"
                                                           placeholder="e.g., Stock Audit Report Format">
                                                    @error('report_format_title')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="report_format_description" class="form-label">Header Description</label>
                                                    <textarea class="form-control @error('report_format_description') is-invalid @enderror" 
                                                              id="report_format_description" name="report_format_description" rows="3"
                                                              placeholder="A report is presented in a structured format...">{{ old('report_format_description') }}</textarea>
                                                    @error('report_format_description')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="report_format_button1_text" class="form-label">Button 1 Text</label>
                                                        <input type="text" class="form-control @error('report_format_button1_text') is-invalid @enderror" 
                                                               id="report_format_button1_text" name="report_format_button1_text" 
                                                               value="{{ old('report_format_button1_text') }}"
                                                               placeholder="e.g., Explore more">
                                                        @error('report_format_button1_text')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="report_format_button1_link" class="form-label">Button 1 Link</label>
                                                        <input type="text" class="form-control @error('report_format_button1_link') is-invalid @enderror" 
                                                               id="report_format_button1_link" name="report_format_button1_link" 
                                                               value="{{ old('report_format_button1_link') }}"
                                                               placeholder="e.g., #contact">
                                                        @error('report_format_button1_link')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="report_format_button2_text" class="form-label">Button 2 Text</label>
                                                        <input type="text" class="form-control @error('report_format_button2_text') is-invalid @enderror" 
                                                               id="report_format_button2_text" name="report_format_button2_text" 
                                                               value="{{ old('report_format_button2_text') }}"
                                                               placeholder="e.g., Get in touch">
                                                        @error('report_format_button2_text')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="report_format_button2_link" class="form-label">Button 2 Link</label>
                                                        <input type="text" class="form-control @error('report_format_button2_link') is-invalid @enderror" 
                                                               id="report_format_button2_link" name="report_format_button2_link" 
                                                               value="{{ old('report_format_button2_link') }}"
                                                               placeholder="e.g., #contact">
                                                        @error('report_format_button2_link')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <label class="form-label mb-0">Report Component Items</label>
                                                <button type="button" class="btn btn-outline-primary btn-sm" id="add-report-component-btn">
                                                    <i class="bi bi-plus-circle"></i> Add Report Component
                                                </button>
                                            </div>

                                            <div id="report-components-items-container">
                                                @if(old('report_components_items'))
                                                    @foreach(old('report_components_items') as $index => $component)
                                                        <div class="report-component-item border rounded p-3 mb-3" data-index="{{ $index }}">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="mb-0">Report Component #<span class="report-component-number">{{ $index + 1 }}</span></h6>
                                                                <button type="button" class="btn btn-outline-danger btn-sm remove-report-component-btn">
                                                                    <i class="bi bi-trash"></i> Remove
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-2">
                                                                    <label class="fw-bold d-block mb-1">Component Title</label>
                                                                    <input type="text" class="form-control" name="report_components_items[{{ $index }}][title]" value="{{ $component['title'] ?? '' }}">
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label class="fw-bold d-block mb-1">Component Image</label>
                                                                    <input type="file" class="form-control report-component-image-input" 
                                                                           data-index="{{ $index }}" 
                                                                           accept="image/*">
                                                                    <input type="hidden" name="report_components_items[{{ $index }}][image]" value="{{ $component['image'] ?? '' }}">
                                                                    <small class="text-muted">Upload an image (PNG, JPG, SVG - Max 2MB)</small>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="fw-bold d-block mb-1">Component Description</label>
                                                                    <textarea class="form-control" name="report_components_items[{{ $index }}][description]" rows="3">{{ $component['description'] ?? '' }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <!-- Default first report component item -->
                                                    <div class="report-component-item border rounded p-3 mb-3" data-index="0">
                                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                                            <h6 class="mb-0">Report Component #<span class="report-component-number">1</span></h6>
                                                            <button type="button" class="btn btn-outline-danger btn-sm remove-report-component-btn">
                                                                <i class="bi bi-trash"></i> Remove
                                                            </button>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-2">
                                                                <label class="fw-bold d-block mb-1">Component Title</label>
                                                                <input type="text" class="form-control" name="report_components_items[0][title]" placeholder="e.g., Executive Summary">
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <label class="fw-bold d-block mb-1">Component Image</label>
                                                                <input type="file" class="form-control report-component-image-input" 
                                                                       data-index="0" 
                                                                       accept="image/*">
                                                                <input type="hidden" name="report_components_items[0][image]" value="">
                                                                <small class="text-muted">Upload an image (PNG, JPG, SVG - Max 2MB)</small>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="fw-bold d-block mb-1">Component Description</label>
                                                                <textarea class="form-control" name="report_components_items[0][description]" rows="3" placeholder="Enter component description..."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="report_components_note" class="form-label">Report Components Note (Optional)</label>
                                            <textarea class="form-control @error('report_components_note') is-invalid @enderror" 
                                                      id="report_components_note" name="report_components_note" rows="2"
                                                      placeholder="e.g., Such reports not only enhance internal control but also provide valuable insights for decision-making, financial reporting, and stakeholder assurance.">{{ old('report_components_note') }}</textarea>
                                            <div class="form-text">This note will appear at the bottom of the report components section in a styled "Please Note" box.</div>
                                            @error('report_components_note')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Report Components Content -->
                                        <div class="mb-3">
                                            <label for="report_components_content" class="form-label">Report Components Content (Optional)</label>
                                            <textarea class="form-control @error('report_components_content') is-invalid @enderror" 
                                                      id="report_components_content" name="report_components_content" rows="10"
                                                      placeholder="Write your content here... Use the editor toolbar above to format text, add images, tables, and more.">{{ old('report_components_content') }}</textarea>
                                            <div class="form-text">Use the rich editor toolbar to format your content with text styling, links, images, tables, and more.</div>
                                            @error('report_components_content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle"></i>
                                            <strong>Note:</strong> You can add up to 6 report component items. Each component will be displayed in a card with an icon, title, and description.
                                        </div>
                                    </div>
                                </div>

                                <!-- Procedure Steps Section -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label mb-0">Procedure Steps Section</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="procedure_steps_enabled" name="procedure_steps_enabled" value="1" {{ old('procedure_steps_enabled') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="procedure_steps_enabled">Enable Procedure Steps Section</label>
                                        </div>
                                    </div>

                                    <div id="procedure-steps-content" style="display: {{ old('procedure_steps_enabled') ? 'block' : 'none' }};">
                                        <!-- Procedure Header -->
                                        <div class="card mb-3 bg-light">
                                            <div class="card-header">
                                                <h6 class="mb-0">Procedure Header Section</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="procedure_header_title" class="form-label">Header Title</label>
                                                    <input type="text" class="form-control @error('procedure_header_title') is-invalid @enderror" 
                                                           id="procedure_header_title" name="procedure_header_title" 
                                                           value="{{ old('procedure_header_title') }}"
                                                           placeholder="e.g., Stock Audit Procedure">
                                                    @error('procedure_header_title')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="procedure_header_description" class="form-label">Header Description</label>
                                                    <textarea class="form-control @error('procedure_header_description') is-invalid @enderror" 
                                                              id="procedure_header_description" name="procedure_header_description" rows="4"
                                                              placeholder="The procedure is a systematic process...">{{ old('procedure_header_description') }}</textarea>
                                                    @error('procedure_header_description')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="procedure_header_button1_text" class="form-label">Button 1 Text</label>
                                                        <input type="text" class="form-control @error('procedure_header_button1_text') is-invalid @enderror" 
                                                               id="procedure_header_button1_text" name="procedure_header_button1_text" 
                                                               value="{{ old('procedure_header_button1_text') }}"
                                                               placeholder="e.g., Explore more">
                                                        @error('procedure_header_button1_text')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="procedure_header_button1_link" class="form-label">Button 1 Link</label>
                                                        <input type="text" class="form-control @error('procedure_header_button1_link') is-invalid @enderror" 
                                                               id="procedure_header_button1_link" name="procedure_header_button1_link" 
                                                               value="{{ old('procedure_header_button1_link') }}"
                                                               placeholder="e.g., #contact">
                                                        @error('procedure_header_button1_link')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="procedure_header_button2_text" class="form-label">Button 2 Text</label>
                                                        <input type="text" class="form-control @error('procedure_header_button2_text') is-invalid @enderror" 
                                                               id="procedure_header_button2_text" name="procedure_header_button2_text" 
                                                               value="{{ old('procedure_header_button2_text') }}"
                                                               placeholder="e.g., Get in touch">
                                                        @error('procedure_header_button2_text')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="procedure_header_button2_link" class="form-label">Button 2 Link</label>
                                                        <input type="text" class="form-control @error('procedure_header_button2_link') is-invalid @enderror" 
                                                               id="procedure_header_button2_link" name="procedure_header_button2_link" 
                                                               value="{{ old('procedure_header_button2_link') }}"
                                                               placeholder="e.g., #contact">
                                                        @error('procedure_header_button2_link')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <label class="form-label mb-0">Procedure Step Items</label>
                                                <button type="button" class="btn btn-outline-primary btn-sm" id="add-procedure-step-btn">
                                                    <i class="bi bi-plus-circle"></i> Add Procedure Step
                                                </button>
                                            </div>

                                            <div id="procedure-steps-items-container">
                                                @if(old('procedure_steps_items'))
                                                    @foreach(old('procedure_steps_items') as $index => $step)
                                                        <div class="procedure-step-item border rounded p-3 mb-3" data-index="{{ $index }}">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="mb-0">Procedure Step #<span class="procedure-step-number">{{ $index + 1 }}</span></h6>
                                                                <button type="button" class="btn btn-outline-danger btn-sm remove-procedure-step-btn">
                                                                    <i class="bi bi-trash"></i> Remove
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-2">
                                                                    <label class="fw-bold d-block mb-1">Step Number</label>
                                                                    <input type="text" class="form-control" name="procedure_steps_items[{{ $index }}][step_number]" value="{{ $step['step_number'] ?? 'STEP ' . ($index + 1) }}" placeholder="e.g., STEP 1">
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label class="fw-bold d-block mb-1">Alignment</label>
                                                                    <select class="form-control" name="procedure_steps_items[{{ $index }}][alignment]">
                                                                        <option value="left" {{ (($step['alignment'] ?? ($index % 2 == 0 ? 'left' : 'right')) == 'left') ? 'selected' : '' }}>Left (Content Left, Image Right)</option>
                                                                        <option value="right" {{ (($step['alignment'] ?? ($index % 2 == 0 ? 'left' : 'right')) == 'right') ? 'selected' : '' }}>Right (Image Left, Content Right)</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 mb-2">
                                                                    <label class="fw-bold d-block mb-1">Step Title</label>
                                                                    <input type="text" class="form-control" name="procedure_steps_items[{{ $index }}][title]" value="{{ $step['title'] ?? '' }}" placeholder="e.g., Audit Planning">
                                                                </div>
                                                                <div class="col-12 mb-2">
                                                                    <label class="fw-bold d-block mb-1">Step Description</label>
                                                                    <textarea class="form-control" name="procedure_steps_items[{{ $index }}][description]" rows="3" placeholder="Detailed description of this step...">{{ $step['description'] ?? '' }}</textarea>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="fw-bold d-block mb-1">Step Image</label>
                                                                    <input type="file" class="form-control procedure-step-image-input" 
                                                                           data-index="{{ $index }}" 
                                                                           accept="image/*">
                                                                    <input type="hidden" name="procedure_steps_items[{{ $index }}][image]" value="{{ $step['image'] ?? '' }}">
                                                                    @if(!empty($step['image']))
                                                                    <div class="mt-2">
                                                                        <img src="{{ asset('storage/' . $step['image']) }}" 
                                                                             class="img-thumbnail procedure-step-image-preview" 
                                                                             style="max-height: 100px;">
                                                                    </div>
                                                                    @endif
                                                                    <small class="text-muted">Upload an image (PNG, JPG, SVG - Max 2MB)</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <!-- Default first procedure step item -->
                                                    <div class="procedure-step-item border rounded p-3 mb-3" data-index="0">
                                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                                            <h6 class="mb-0">Procedure Step #<span class="procedure-step-number">1</span></h6>
                                                            <button type="button" class="btn btn-outline-danger btn-sm remove-procedure-step-btn">
                                                                <i class="bi bi-trash"></i> Remove
                                                            </button>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-2">
                                                                <label class="fw-bold d-block mb-1">Step Number</label>
                                                                <input type="text" class="form-control" name="procedure_steps_items[0][step_number]" value="STEP 1" placeholder="e.g., STEP 1">
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <label class="fw-bold d-block mb-1">Alignment</label>
                                                                <select class="form-control" name="procedure_steps_items[0][alignment]">
                                                                    <option value="left" selected>Left (Content Left, Image Right)</option>
                                                                    <option value="right">Right (Image Left, Content Right)</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12 mb-2">
                                                                <label class="fw-bold d-block mb-1">Step Title</label>
                                                                <input type="text" class="form-control" name="procedure_steps_items[0][title]" placeholder="e.g., Audit Planning">
                                                            </div>
                                                            <div class="col-12 mb-2">
                                                                <label class="fw-bold d-block mb-1">Step Description</label>
                                                                <textarea class="form-control" name="procedure_steps_items[0][description]" rows="3" placeholder="Detailed description of this step..."></textarea>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="fw-bold d-block mb-1">Step Image</label>
                                                                <input type="file" class="form-control procedure-step-image-input" 
                                                                       data-index="0" 
                                                                       accept="image/*">
                                                                <input type="hidden" name="procedure_steps_items[0][image]" value="">
                                                                <small class="text-muted">Upload an image (PNG, JPG, SVG - Max 2MB)</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Procedure Steps Content -->
                                        <div class="mb-3">
                                            <label for="procedure_steps_content" class="form-label">Procedure Steps Content (Optional)</label>
                                            <textarea class="form-control @error('procedure_steps_content') is-invalid @enderror" 
                                                      id="procedure_steps_content" name="procedure_steps_content" rows="10"
                                                      placeholder="Write your content here... Use the editor toolbar above to format text, add images, tables, and more.">{{ old('procedure_steps_content') }}</textarea>
                                            <div class="form-text">Use the rich editor toolbar to format your content with text styling, links, images, tables, and more.</div>
                                            @error('procedure_steps_content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle"></i>
                                            <strong>Note:</strong> You can add unlimited procedure steps. Each step will alternate between left and right layout automatically for visual variety, with smooth scroll animations.
                                        </div>
                                    </div>
                                </div>

                                <!-- Checklist Section -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label mb-0">Checklist Section</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="checklist_enabled" name="checklist_enabled" value="1" {{ old('checklist_enabled') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="checklist_enabled">Enable Checklist Section</label>
                                        </div>
                                    </div>

                                    <div id="checklist-content" style="display: {{ old('checklist_enabled') ? 'block' : 'none' }};">
                                        <!-- Checklist Header Section -->
                                        <div class="card mb-3 bg-light">
                                            <div class="card-header">
                                                <h6 class="mb-0">Checklist Header Section</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="checklist_header_title" class="form-label">Header Title</label>
                                                    <input type="text" class="form-control @error('checklist_header_title') is-invalid @enderror" 
                                                           id="checklist_header_title" name="checklist_header_title" 
                                                           value="{{ old('checklist_header_title') }}" 
                                                           placeholder="Stock Audit Checklist">
                                                    @error('checklist_header_title')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="checklist_header_description" class="form-label">Header Description</label>
                                                    <textarea class="form-control @error('checklist_header_description') is-invalid @enderror" 
                                                              id="checklist_header_description" name="checklist_header_description" 
                                                              rows="4" 
                                                              placeholder="An effective audit requires careful preparation and the availability of relevant records...">{{ old('checklist_header_description') }}</textarea>
                                                    @error('checklist_header_description')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="checklist_header_button1_text" class="form-label">Button 1 Text</label>
                                                        <input type="text" class="form-control @error('checklist_header_button1_text') is-invalid @enderror" 
                                                               id="checklist_header_button1_text" name="checklist_header_button1_text" 
                                                               value="{{ old('checklist_header_button1_text') }}" 
                                                               placeholder="Explore more">
                                                        @error('checklist_header_button1_text')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="checklist_header_button1_link" class="form-label">Button 1 Link</label>
                                                        <input type="text" class="form-control @error('checklist_header_button1_link') is-invalid @enderror" 
                                                               id="checklist_header_button1_link" name="checklist_header_button1_link" 
                                                               value="{{ old('checklist_header_button1_link') }}" 
                                                               placeholder="#contact">
                                                        @error('checklist_header_button1_link')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="checklist_header_button2_text" class="form-label">Button 2 Text</label>
                                                        <input type="text" class="form-control @error('checklist_header_button2_text') is-invalid @enderror" 
                                                               id="checklist_header_button2_text" name="checklist_header_button2_text" 
                                                               value="{{ old('checklist_header_button2_text') }}" 
                                                               placeholder="Get in touch">
                                                        @error('checklist_header_button2_text')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="checklist_header_button2_link" class="form-label">Button 2 Link</label>
                                                        <input type="text" class="form-control @error('checklist_header_button2_link') is-invalid @enderror" 
                                                               id="checklist_header_button2_link" name="checklist_header_button2_link" 
                                                               value="{{ old('checklist_header_button2_link') }}" 
                                                               placeholder="#contact">
                                                        @error('checklist_header_button2_link')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <label class="form-label mb-0">Checklist Items</label>
                                                <button type="button" class="btn btn-outline-primary btn-sm" id="add-checklist-btn">
                                                    <i class="bi bi-plus-circle"></i> Add Checklist Item
                                                </button>
                                            </div>

                                            <div id="checklist-items-container">
                                                @if(old('checklist_items'))
                                                    @foreach(old('checklist_items') as $index => $item)
                                                        <div class="checklist-item border rounded p-3 mb-3" data-index="{{ $index }}">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="mb-0">Checklist Item #<span class="checklist-number">{{ $index + 1 }}</span></h6>
                                                                <button type="button" class="btn btn-outline-danger btn-sm remove-checklist-btn">
                                                                    <i class="bi bi-trash"></i> Remove
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <label class="fw-bold d-block mb-1">Checklist Text</label>
                                                                    <textarea class="form-control" name="checklist_items[{{ $index }}][text]" rows="2" placeholder="Enter checklist item text...">{{ $item['text'] ?? '' }}</textarea>
                                                                    <small class="text-muted">You can use HTML tags like &lt;span class="fw-semibold" style="color: #ff6600;"&gt;highlighted text&lt;/span&gt; to highlight important words.</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <!-- Default first checklist item -->
                                                    <div class="checklist-item border rounded p-3 mb-3" data-index="0">
                                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                                            <h6 class="mb-0">Checklist Item #<span class="checklist-number">1</span></h6>
                                                            <button type="button" class="btn btn-outline-danger btn-sm remove-checklist-btn">
                                                                <i class="bi bi-trash"></i> Remove
                                                            </button>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="fw-bold d-block mb-1">Checklist Text</label>
                                                                <textarea class="form-control" name="checklist_items[0][text]" rows="2" placeholder="Enter checklist item text..."></textarea>
                                                                <small class="text-muted">You can use HTML tags like &lt;span class="fw-semibold" style="color: #ff6600;"&gt;highlighted text&lt;/span&gt; to highlight important words.</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="checklist_note" class="form-label">Please Note (Optional)</label>
                                            <textarea class="form-control @error('checklist_note') is-invalid @enderror" 
                                                      id="checklist_note" name="checklist_note" 
                                                      rows="3" 
                                                      placeholder="Having these documents in place ensures that the audit is conducted smoothly...">{{ old('checklist_note') }}</textarea>
                                            <small class="text-muted">This note will be displayed at the bottom of the checklist section.</small>
                                            @error('checklist_note')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle"></i>
                                            <strong>Note:</strong> You can add unlimited checklist items. Each item will be displayed with a checkmark icon.
                                        </div>
                                    </div>
                                </div>

                                <!-- Challenges & Solutions Section -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label mb-0">Challenges & Solutions Section</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="challenges_enabled" name="challenges_enabled" value="1" {{ old('challenges_enabled') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="challenges_enabled">Enable Challenges & Solutions Section</label>
                                        </div>
                                    </div>

                                    <div id="challenges-content" style="display: {{ old('challenges_enabled') ? 'block' : 'none' }};">
                                        <div class="card mb-3 bg-light">
                                            <div class="card-header">
                                                <h6 class="mb-0">Section Header</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="challenges_title" class="form-label">Section Title</label>
                                                    <input type="text" class="form-control @error('challenges_title') is-invalid @enderror" 
                                                           id="challenges_title" name="challenges_title" 
                                                           value="{{ old('challenges_title') }}" 
                                                           placeholder="Challenges & Solutions">
                                                    @error('challenges_title')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="challenges_description" class="form-label">Section Description</label>
                                                    <textarea class="form-control @error('challenges_description') is-invalid @enderror" 
                                                              id="challenges_description" name="challenges_description" 
                                                              rows="3" 
                                                              placeholder="Stock audits often face operational and management challenges...">{{ old('challenges_description') }}</textarea>
                                                    @error('challenges_description')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <label class="form-label mb-0">Challenge & Solution Pairs (Max 4)</label>
                                                <button type="button" class="btn btn-outline-primary btn-sm" id="add-challenge-btn">
                                                    <i class="bi bi-plus-circle"></i> Add Challenge
                                                </button>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="challenges_column_heading" class="form-label">Common Challenge Heading</label>
                                                    <input type="text" class="form-control @error('challenges_column_heading') is-invalid @enderror" 
                                                           id="challenges_column_heading" name="challenges_column_heading" 
                                                           value="{{ old('challenges_column_heading', 'Common Challenge') }}" 
                                                           placeholder="Common Challenge">
                                                    @error('challenges_column_heading')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="solutions_column_heading" class="form-label">Patron Accounting Solution Heading</label>
                                                    <input type="text" class="form-control @error('solutions_column_heading') is-invalid @enderror" 
                                                           id="solutions_column_heading" name="solutions_column_heading" 
                                                           value="{{ old('solutions_column_heading', 'Patron Accounting Solution') }}" 
                                                           placeholder="Patron Accounting Solution">
                                                    @error('solutions_column_heading')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div id="challenges-items-container">
                                                @if(old('challenges_items'))
                                                    @foreach(old('challenges_items') as $index => $item)
                                                        <div class="challenge-item border rounded p-3 mb-3" data-index="{{ $index }}">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="mb-0">Challenge & Solution #<span class="challenge-number">{{ $index + 1 }}</span></h6>
                                                                <button type="button" class="btn btn-outline-danger btn-sm remove-challenge-btn">
                                                                    <i class="bi bi-trash"></i> Remove
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="fw-bold d-block mb-1">Common Challenge</label>
                                                                    <textarea class="form-control" name="challenges_items[{{ $index }}][challenge]" rows="2" placeholder="Enter challenge text...">{{ $item['challenge'] ?? '' }}</textarea>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="fw-bold d-block mb-1">Patron Accounting Solution</label>
                                                                    <textarea class="form-control" name="challenges_items[{{ $index }}][solution]" rows="2" placeholder="Enter solution text...">{{ $item['solution'] ?? '' }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <!-- Default first challenge -->
                                                    <div class="challenge-item border rounded p-3 mb-3" data-index="0">
                                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                                            <h6 class="mb-0">Challenge & Solution #<span class="challenge-number">1</span></h6>
                                                            <button type="button" class="btn btn-outline-danger btn-sm remove-challenge-btn">
                                                                <i class="bi bi-trash"></i> Remove
                                                            </button>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <label class="fw-bold d-block mb-1">Common Challenge</label>
                                                                <textarea class="form-control" name="challenges_items[0][challenge]" rows="2" placeholder="Enter challenge text..."></textarea>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label class="fw-bold d-block mb-1">Patron Accounting Solution</label>
                                                                <textarea class="form-control" name="challenges_items[0][solution]" rows="2" placeholder="Enter solution text..."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="challenges_note" class="form-label">Please Note (Optional)</label>
                                            <textarea class="form-control @error('challenges_note') is-invalid @enderror" 
                                                      id="challenges_note" name="challenges_note" 
                                                      rows="3" 
                                                      placeholder="Addressing these challenges systematically ensures precise inventory records...">{{ old('challenges_note') }}</textarea>
                                            <small class="text-muted">This note will be displayed at the bottom of the challenges section.</small>
                                            @error('challenges_note')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle"></i>
                                            <strong>Note:</strong> You can add up to 4 challenge and solution pairs. Each pair will be displayed side by side.
                                        </div>
                                    </div>
                                </div>

                                <!-- Stock Audit Fee Section -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label mb-0">Stock Audit Fee in India Section</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="fees_enabled" name="fees_enabled" value="1" {{ old('fees_enabled') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="fees_enabled">Enable Fees Section</label>
                                        </div>
                                    </div>

                                    <div id="fees-content" style="display: {{ old('fees_enabled') ? 'block' : 'none' }};">
                                        <div class="card mb-3 bg-light">
                                            <div class="card-header">
                                                <h6 class="mb-0">Section Header</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="fees_title" class="form-label">Section Title</label>
                                                    <input type="text" class="form-control @error('fees_title') is-invalid @enderror" 
                                                           id="fees_title" name="fees_title" 
                                                           value="{{ old('fees_title') }}" 
                                                           placeholder="Stock Audit Fee in India">
                                                    @error('fees_title')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="fees_description" class="form-label">Section Description</label>
                                                    <textarea class="form-control @error('fees_description') is-invalid @enderror" 
                                                              id="fees_description" name="fees_description" 
                                                              rows="3" 
                                                              placeholder="Fees vary based on business size, number of locations, and scope...">{{ old('fees_description') }}</textarea>
                                                    @error('fees_description')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <label class="form-label mb-0">Fee Items (Max 4)</label>
                                                <button type="button" class="btn btn-outline-primary btn-sm" id="add-fee-btn">
                                                    <i class="bi bi-plus-circle"></i> Add Fee Item
                                                </button>
                                            </div>

                                            <div id="fees-items-container">
                                                @if(old('fees_items'))
                                                    @foreach(old('fees_items') as $index => $item)
                                                        <div class="fee-item border rounded p-3 mb-3" data-index="{{ $index }}">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="mb-0">Fee Item #<span class="fee-number">{{ $index + 1 }}</span></h6>
                                                                <button type="button" class="btn btn-outline-danger btn-sm remove-fee-btn">
                                                                    <i class="bi bi-trash"></i> Remove
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="fw-bold d-block mb-1">Fee Component</label>
                                                                    <input type="text" class="form-control" name="fees_items[{{ $index }}][component]" placeholder="Professional Charges (per audit cycle)" value="{{ $item['component'] ?? '' }}">
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="fw-bold d-block mb-1">Cost (Approx.)</label>
                                                                    <input type="text" class="form-control" name="fees_items[{{ $index }}][cost]" placeholder="₹30,000 – ₹75,000" value="{{ $item['cost'] ?? '' }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <!-- Default first fee item -->
                                                    <div class="fee-item border rounded p-3 mb-3" data-index="0">
                                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                                            <h6 class="mb-0">Fee Item #<span class="fee-number">1</span></h6>
                                                            <button type="button" class="btn btn-outline-danger btn-sm remove-fee-btn">
                                                                <i class="bi bi-trash"></i> Remove
                                                            </button>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <label class="fw-bold d-block mb-1">Fee Component</label>
                                                                <input type="text" class="form-control" name="fees_items[0][component]" placeholder="Professional Charges (per audit cycle)">
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label class="fw-bold d-block mb-1">Cost (Approx.)</label>
                                                                <input type="text" class="form-control" name="fees_items[0][cost]" placeholder="₹30,000 – ₹75,000">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="fees_note" class="form-label">Please Note (Optional)</label>
                                            <textarea class="form-control @error('fees_note') is-invalid @enderror" 
                                                      id="fees_note" name="fees_note" 
                                                      rows="3" 
                                                      placeholder="Actual fees depend on audit complexity and industry requirements.">{{ old('fees_note'),' ' }}</textarea>
                                            <small class="text-muted">This note will be displayed at the bottom of the fees section.</small>
                                            @error('fees_note')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Fees Content -->
                                        <div class="mb-3">
                                            <label for="fees_content" class="form-label">Fees Content (Optional)</label>
                                            <textarea class="form-control @error('fees_content') is-invalid @enderror" 
                                                      id="fees_content" name="fees_content" rows="10"
                                                      placeholder="Write your content here... Use the editor toolbar above to format text, add images, tables, and more.">{{ old('fees_content') }}</textarea>
                                            <div class="form-text">Use the rich editor toolbar to format your content with text styling, links, images, tables, and more.</div>
                                            @error('fees_content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle"></i>
                                            <strong>Note:</strong> You can add up to 4 fee items. Each item will be displayed in a table format.
                                        </div>
                                    </div>
                                </div>

                                <!-- Time Taken for Stock Audit Section -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label mb-0">Time Taken for Stock Audit Section</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="time_taken_enabled" name="time_taken_enabled" value="1" {{ old('time_taken_enabled') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="time_taken_enabled">Enable Time Taken Section</label>
                                        </div>
                                    </div>

                                    <div id="time-taken-content" style="display: {{ old('time_taken_enabled') ? 'block' : 'none' }};">
                                        <div class="mb-3">
                                            <label for="time_taken_title" class="form-label">Section Title</label>
                                            <input type="text" class="form-control @error('time_taken_title') is-invalid @enderror" 
                                                   id="time_taken_title" name="time_taken_title" 
                                                   value="{{ old('time_taken_title') }}" 
                                                   placeholder="Time Taken for Stock Audit">
                                            @error('time_taken_title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="time_taken_content" class="form-label">Content</label>
                                            <textarea class="form-control @error('time_taken_content') is-invalid @enderror" 
                                                      id="time_taken_content" name="time_taken_content" 
                                                      rows="6" 
                                                      placeholder="The duration of an audit depends on the scale and complexity of operations...">{{ old('time_taken_content') }}</textarea>
                                            <small class="text-muted">You can use <strong>bold text</strong> to highlight important information like "7-15 working days" or "4-6 weeks".</small>
                                            @error('time_taken_content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle"></i>
                                            <strong>Tip:</strong> Use <code>&lt;strong&gt;text&lt;/strong&gt;</code> to make specific parts bold in the content.
                                        </div>
                                    </div>
                                </div>

                                <!-- Benefits Section -->
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Benefits Section</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="benefits_enabled" name="benefits_enabled" value="1" {{ old('benefits_enabled') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="benefits_enabled">
                                                    Enable Benefits Section
                                                </label>
                                            </div>
                                        </div>
                                        <div id="benefits-content" style="display: {{ old('benefits_enabled') ? 'block' : 'none' }};">
                                            <!-- Benefits Header Section -->
                                            <div class="card mb-3 bg-light">
                                                <div class="card-header">
                                                    <h6 class="mb-0">Benefits Header Section</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label for="benefits_header_title" class="form-label">Header Title</label>
                                                        <input type="text" class="form-control @error('benefits_header_title') is-invalid @enderror" 
                                                               id="benefits_header_title" name="benefits_header_title" 
                                                               value="{{ old('benefits_header_title') }}" 
                                                               placeholder="Benefits of Stock Audit">
                                                        @error('benefits_header_title')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="benefits_header_description" class="form-label">Header Description</label>
                                                        <textarea class="form-control @error('benefits_header_description') is-invalid @enderror" 
                                                                  id="benefits_header_description" name="benefits_header_description" 
                                                                  rows="3" 
                                                                  placeholder="A stock audit provides organizations with a comprehensive evaluation...">{{ old('benefits_header_description') }}</textarea>
                                                        @error('benefits_header_description')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="benefits_header_button1_text" class="form-label">Button 1 Text</label>
                                                            <input type="text" class="form-control @error('benefits_header_button1_text') is-invalid @enderror" 
                                                                   id="benefits_header_button1_text" name="benefits_header_button1_text" 
                                                                   value="{{ old('benefits_header_button1_text') }}" 
                                                                   placeholder="Explore more">
                                                            @error('benefits_header_button1_text')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label for="benefits_header_button1_link" class="form-label">Button 1 Link</label>
                                                            <input type="text" class="form-control @error('benefits_header_button1_link') is-invalid @enderror" 
                                                                   id="benefits_header_button1_link" name="benefits_header_button1_link" 
                                                                   value="{{ old('benefits_header_button1_link') }}" 
                                                                   placeholder="#contact">
                                                            @error('benefits_header_button1_link')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="benefits_header_button2_text" class="form-label">Button 2 Text</label>
                                                            <input type="text" class="form-control @error('benefits_header_button2_text') is-invalid @enderror" 
                                                                   id="benefits_header_button2_text" name="benefits_header_button2_text" 
                                                                   value="{{ old('benefits_header_button2_text') }}" 
                                                                   placeholder="Get in touch">
                                                            @error('benefits_header_button2_text')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label for="benefits_header_button2_link" class="form-label">Button 2 Link</label>
                                                            <input type="text" class="form-control @error('benefits_header_button2_link') is-invalid @enderror" 
                                                                   id="benefits_header_button2_link" name="benefits_header_button2_link" 
                                                                   value="{{ old('benefits_header_button2_link') }}" 
                                                                   placeholder="#contact">
                                                            @error('benefits_header_button2_link')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Benefits Header Image Upload -->
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <label for="benefits_header_image" class="form-label">Header Section Image</label>
                                                            <input type="file" class="form-control @error('benefits_header_image') is-invalid @enderror" 
                                                                   id="benefits_header_image" name="benefits_header_image_file" 
                                                                   accept="image/*" onchange="previewBenefitsHeaderImage(this)">
                                                            <small class="text-muted">Upload an image for the benefits header section (optional)</small>
                                                            @error('benefits_header_image')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                            
                                                            <!-- Image Preview -->
                                                            <div class="mt-2" id="benefits_header_image_preview_container" style="display:none;">
                                                                <img id="benefits_header_image_preview" src="" alt="Preview" style="max-width: 200px; max-height: 200px;" class="img-thumbnail">
                                                                <button type="button" class="btn btn-sm btn-danger ms-2" onclick="removeBenefitsHeaderImage()">Remove Image</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="text-muted">Manage your benefit items below</span>
                                                <button type="button" class="btn btn-sm btn-primary" id="add-benefit-btn">
                                                    <i class="bi bi-plus"></i> Add Benefit
                                                </button>
                                            </div>
                                            <div id="benefits-items-container">
                                                <div class="benefit-item border rounded p-3 mb-3" data-index="0">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <h6 class="mb-0">Benefit #<span class="benefit-number">1</span></h6>
                                                        <button type="button" class="btn btn-outline-danger btn-sm remove-benefit-btn">
                                                            <i class="bi bi-trash"></i> Remove
                                                        </button>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3">
                                                            <label class="fw-bold d-block mb-1">Icon Image</label>
                                                            <input type="file" class="form-control" name="benefit_icon_0" accept="image/*" onchange="previewBenefitImage(this, 0)">
                                                            <input type="hidden" name="benefits_items[0][icon]" class="benefit-icon-path">
                                                            <small class="text-muted">Upload an icon image for this benefit</small>
                                                            <div class="mt-2 benefit-image-preview" id="benefit_preview_container_0" style="display:none;">
                                                                <img id="benefit_preview_0" src="" alt="Preview" style="max-width: 100px; max-height: 100px;" class="img-thumbnail">
                                                                <button type="button" class="btn btn-sm btn-danger ms-2" onclick="removeBenefitImage(0)">Remove Image</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label class="fw-bold d-block mb-1">Benefit Title</label>
                                                            <input type="text" class="form-control" name="benefits_items[0][title]" placeholder="Enter benefit title">
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="fw-bold d-block mb-1">Description</label>
                                                            <textarea class="form-control" name="benefits_items[0][description]" rows="2" placeholder="Enter benefit description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="benefits_note" class="form-label">Please Note (Optional)</label>
                                            <textarea class="form-control @error('benefits_note') is-invalid @enderror" 
                                                      id="benefits_note" name="benefits_note" 
                                                      rows="3" 
                                                      placeholder="Please Note: Additional important information about benefits...">{{ old('benefits_note') }}</textarea>
                                            <small class="text-muted">This will be displayed as a highlighted note below the benefits section.</small>
                                            @error('benefits_note')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Benefits Content -->
                                        <div class="mb-3">
                                            <label for="benefits_content" class="form-label">Benefits Content (Optional)</label>
                                            <textarea class="form-control @error('benefits_content') is-invalid @enderror" 
                                                      id="benefits_content" name="benefits_content" rows="10"
                                                      placeholder="Write your content here... Use the editor toolbar above to format text, add images, tables, and more.">{{ old('benefits_content') }}</textarea>
                                            <div class="form-text">Use the rich editor toolbar to format your content with text styling, links, images, tables, and more.</div>
                                            @error('benefits_content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="alert alert-info mt-3">
                                            <i class="bi bi-info-circle"></i> Add multiple benefit items. Each benefit will be displayed in a grid layout with icon, title, and description.
                                        </div>
                                    </div>
                                </div>

                                <!-- Fees Comparison Section (Part 2) -->
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Stock Audit Fee Comparison Section</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="fees_comparison_enabled" name="fees_comparison_enabled" value="1" {{ old('fees_comparison_enabled') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="fees_comparison_enabled">
                                                    Enable Fees Comparison Section
                                                </label>
                                            </div>
                                        </div>
                                        <div id="fees-comparison-content" style="display: {{ old('fees_comparison_enabled') ? 'block' : 'none' }};">
                                            <div class="mb-3">
                                                <label for="fees_comparison_title" class="form-label">Section Title</label>
                                                <input type="text" class="form-control @error('fees_comparison_title') is-invalid @enderror" 
                                                       id="fees_comparison_title" name="fees_comparison_title" 
                                                       value="{{ old('fees_comparison_title') }}" 
                                                       placeholder="Stock Audit Fee in India">
                                                @error('fees_comparison_title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="fees_comparison_header_col1" class="form-label">Column 1 Header</label>
                                                    <input type="text" class="form-control @error('fees_comparison_header_col1') is-invalid @enderror" 
                                                           id="fees_comparison_header_col1" name="fees_comparison_header_col1" 
                                                           value="{{ old('fees_comparison_header_col1', '') }}" 
                                                           placeholder="Feature">
                                                    @error('fees_comparison_header_col1')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="fees_comparison_header_col2" class="form-label">Column 2 Header</label>
                                                    <input type="text" class="form-control @error('fees_comparison_header_col2') is-invalid @enderror" 
                                                           id="fees_comparison_header_col2" name="fees_comparison_header_col2" 
                                                           value="{{ old('fees_comparison_header_col2', '') }}" 
                                                           placeholder="Stock Audit">
                                                    @error('fees_comparison_header_col2')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="fees_comparison_header_col3" class="form-label">Column 3 Header</label>
                                                    <input type="text" class="form-control @error('fees_comparison_header_col3') is-invalid @enderror" 
                                                           id="fees_comparison_header_col3" name="fees_comparison_header_col3" 
                                                           value="{{ old('fees_comparison_header_col3', '') }}" 
                                                           placeholder="Internal Inventory Control">
                                                    @error('fees_comparison_header_col3')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="fees_comparison_subtitle" class="form-label">Section Subtitle</label>
                                                <textarea class="form-control @error('fees_comparison_subtitle') is-invalid @enderror" 
                                                          id="fees_comparison_subtitle" name="fees_comparison_subtitle" 
                                                          rows="2" 
                                                          placeholder="Understanding the key differences between external stock audit and internal inventory management systems">{{ old('fees_comparison_subtitle') }}</textarea>
                                                @error('fees_comparison_subtitle')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="text-muted">Manage comparison table rows</span>
                                                <button type="button" class="btn btn-sm btn-primary" id="add-comparison-row-btn">
                                                    <i class="bi bi-plus"></i> Add Row
                                                </button>
                                            </div>

                                            <div id="comparison-rows-container">
                                                <div class="comparison-row-item border rounded p-3 mb-3" data-index="0">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <h6 class="mb-0">Row #<span class="row-number">1</span></h6>
                                                        <button type="button" class="btn btn-outline-danger btn-sm remove-comparison-row-btn">
                                                            <i class="bi bi-trash"></i> Remove
                                                        </button>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 mb-3">
                                                            <label class="fw-bold d-block mb-1">Feature</label>
                                                            <input type="text" class="form-control" name="fees_comparison_rows[0][feature]" placeholder="e.g., Objective">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="fw-bold d-block mb-1">Stock Audit</label>
                                                            <input type="text" class="form-control" name="fees_comparison_rows[0][stock_audit]" placeholder="e.g., Independent verification">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="fw-bold d-block mb-1">Internal Inventory Control</label>
                                                            <input type="text" class="form-control" name="fees_comparison_rows[0][internal_control]" placeholder="e.g., Day-to-day management">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="fees_comparison_note" class="form-label">Note/Highlight Text (Optional)</label>
                                                <textarea class="form-control @error('fees_comparison_note') is-invalid @enderror" 
                                                          id="fees_comparison_note" name="fees_comparison_note" 
                                                          rows="2" 
                                                          placeholder="Please Note: With Patron Accounting, clients receive more than just compliance...">{{ old('fees_comparison_note') }}</textarea>
                                                <small class="text-muted">This will be displayed as a highlighted note below the comparison table.</small>
                                                @error('fees_comparison_note')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="alert alert-info mt-3">
                                            <i class="bi bi-info-circle"></i> Create a comparison table with features and their differences between Stock Audit and Internal Inventory Control.
                                        </div>
                                    </div>
                                </div>

                                <!-- Partner Services Section -->
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Partner Services Section</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="partner_services_enabled" name="partner_services_enabled" value="1" {{ old('partner_services_enabled') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="partner_services_enabled">
                                                    Enable Partner Services Section
                                                </label>
                                            </div>
                                        </div>
                                        <div id="partner-services-content" style="display: {{ old('partner_services_enabled') ? 'block' : 'none' }};">
                                            <div class="mb-3">
                                                <label for="partner_services_title" class="form-label">Section Title</label>
                                                <input type="text" class="form-control @error('partner_services_title') is-invalid @enderror" 
                                                       id="partner_services_title" name="partner_services_title" 
                                                       value="{{ old('partner_services_title', 'Patron Accounting: Your Stock Audit Partner in India') }}"
                                                       placeholder="Enter section title">
                                                @error('partner_services_title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="partner_services_description" class="form-label">Section Description</label>
                                                <textarea class="form-control @error('partner_services_description') is-invalid @enderror" 
                                                          id="partner_services_description" name="partner_services_description" 
                                                          rows="3"
                                                          placeholder="Enter section description">{{ old('partner_services_description', 'Patron Accounting offers specialized stock audit services across India, leveraging years of experience in statutory, internal, and sector-specific audits. Our team provides:') }}</textarea>
                                                @error('partner_services_description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="text-muted">Manage your partner service items below</span>
                                                <button type="button" class="btn btn-sm btn-primary" id="add-partner-service-btn">
                                                    <i class="bi bi-plus"></i> Add Partner Service
                                                </button>
                                            </div>
                                            <div id="partner-services-items-container">
                                                <div class="partner-service-item border rounded p-3 mb-3" data-index="0">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <h6 class="mb-0">Partner Service #<span class="partner-service-number">1</span></h6>
                                                        <button type="button" class="btn btn-outline-danger btn-sm remove-partner-service-btn">
                                                            <i class="bi bi-trash"></i> Remove
                                                        </button>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3">
                                                            <label class="fw-bold d-block mb-1">Icon Image</label>
                                                            <input type="file" class="form-control" name="partner_service_icon_0" accept="image/*" onchange="previewPartnerServiceImage(this, 0)">
                                                            <input type="hidden" name="partner_services_items[0][icon]" class="partner-service-icon-path">
                                                            <small class="text-muted">Upload an icon image for this partner service</small>
                                                            <div class="mt-2 partner-service-image-preview" id="partner_service_preview_container_0" style="display:none;">
                                                                <img id="partner_service_preview_0" src="" alt="Preview" style="max-width: 100px; max-height: 100px;" class="img-thumbnail">
                                                                <button type="button" class="btn btn-sm btn-danger ms-2" onclick="removePartnerServiceImage(0)">Remove Image</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label class="fw-bold d-block mb-1">Service Title</label>
                                                            <input type="text" class="form-control" name="partner_services_items[0][title]" placeholder="Enter service title">
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="fw-bold d-block mb-1">Description</label>
                                                            <textarea class="form-control" name="partner_services_items[0][description]" rows="2" placeholder="Enter service description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="alert alert-info mt-3">
                                            <i class="bi bi-info-circle"></i> Add multiple partner service items. Each service will be displayed in a grid layout with icon, title, and description.
                                        </div>

                                        <div class="mb-3">
                                            <label for="partner_services_note" class="form-label">Please Note (Optional)</label>
                                            <textarea class="form-control @error('partner_services_note') is-invalid @enderror" 
                                                      id="partner_services_note" name="partner_services_note" 
                                                      rows="3"
                                                      placeholder="Enter important note about partner services...">{{ old('partner_services_note', 'With Patron Accounting, clients receive more than just compliance; they gain actionable insights to optimize inventory management, enhance profitability, and strengthen corporate governance.') }}</textarea>
                                            <small class="text-muted">This will be displayed as a highlighted note below the partner services section.</small>
                                            @error('partner_services_note')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- License Types Table Section -->
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">License Types Table Section</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="license_types_enabled" name="license_types_enabled" value="1" {{ old('license_types_enabled') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="license_types_enabled">
                                                    Enable License Types Table Section
                                                </label>
                                            </div>
                                        </div>
                                        <div id="license-types-content" style="display: {{ old('license_types_enabled') ? 'block' : 'none' }};">
                                            <div class="mb-3">
                                                <label for="license_types_title" class="form-label">Section Title</label>
                                                <input type="text" class="form-control @error('license_types_title') is-invalid @enderror" 
                                                       id="license_types_title" name="license_types_title" 
                                                       value="{{ old('license_types_title', 'Types of FSSAI Licenses') }}"
                                                       placeholder="Enter section title">
                                                @error('license_types_title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="license_types_description" class="form-label">Section Description</label>
                                                <textarea class="form-control @error('license_types_description') is-invalid @enderror" 
                                                          id="license_types_description" name="license_types_description" 
                                                          rows="3"
                                                          placeholder="Enter section description...">{{ old('license_types_description') }}</textarea>
                                                @error('license_types_description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <label class="form-label mb-0">License Type Rows (Max 30)</label>
                                                    <button type="button" class="btn btn-outline-primary btn-sm" id="add-license-type-btn">
                                                        <i class="bi bi-plus-circle"></i> Add License Type Row
                                                    </button>
                                                </div>

                                                <div id="license-types-items-container">
                                                    @if(old('license_types_rows'))
                                                        @foreach(old('license_types_rows') as $index => $row)
                                                            <div class="license-type-item border rounded p-3 mb-3" data-index="{{ $index }}">
                                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                                    <h6 class="mb-0">License Type #<span class="license-type-number">{{ $index + 1 }}</span></h6>
                                                                    <button type="button" class="btn btn-outline-danger btn-sm remove-license-type-btn">
                                                                        <i class="bi bi-trash"></i> Remove
                                                                    </button>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4 mb-2">
                                                                        <label class="fw-bold d-block mb-1">License Type</label>
                                                                        <input type="text" class="form-control" name="license_types_rows[{{ $index }}][license_type]" value="{{ $row['license_type'] ?? '' }}" placeholder="e.g., Basic Registration">
                                                                    </div>
                                                                    <div class="col-md-4 mb-2">
                                                                        <label class="fw-bold d-block mb-1">Business Scale</label>
                                                                        <input type="text" class="form-control" name="license_types_rows[{{ $index }}][business_scale]" value="{{ $row['business_scale'] ?? '' }}" placeholder="e.g., Small or emerging food setups">
                                                                    </div>
                                                                    <div class="col-md-4 mb-2">
                                                                        <label class="fw-bold d-block mb-1">Jurisdiction</label>
                                                                        <textarea class="form-control" name="license_types_rows[{{ $index }}][jurisdiction]" rows="2" placeholder="e.g., Single location within a state">{{ $row['jurisdiction'] ?? '' }}</textarea>
                                                                    </div>
                                                                    <div class="col-md-3 mb-2">
                                                                        <label class="fw-bold d-block mb-1">Validity</label>
                                                                        <input type="text" class="form-control" name="license_types_rows[{{ $index }}][validity]" value="{{ $row['validity'] ?? '' }}" placeholder="e.g., 1-5 years">
                                                                    </div>
                                                                    <div class="col-md-9 mb-2">
                                                                        <label class="fw-bold d-block mb-1">Suitable For</label>
                                                                        <textarea class="form-control" name="license_types_rows[{{ $index }}][suitable_for]" rows="2" placeholder="e.g., Local vendors, street food stalls">{{ $row['suitable_for'] ?? '' }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <!-- Default first license type row -->
                                                        <div class="license-type-item border rounded p-3 mb-3" data-index="0">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="mb-0">License Type #<span class="license-type-number">1</span></h6>
                                                                <button type="button" class="btn btn-outline-danger btn-sm remove-license-type-btn">
                                                                    <i class="bi bi-trash"></i> Remove
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 mb-2">
                                                                    <label class="fw-bold d-block mb-1">License Type</label>
                                                                    <input type="text" class="form-control" name="license_types_rows[0][license_type]" placeholder="e.g., Basic Registration">
                                                                </div>
                                                                <div class="col-md-4 mb-2">
                                                                    <label class="fw-bold d-block mb-1">Business Scale</label>
                                                                    <input type="text" class="form-control" name="license_types_rows[0][business_scale]" placeholder="e.g., Small or emerging food setups">
                                                                </div>
                                                                <div class="col-md-4 mb-2">
                                                                    <label class="fw-bold d-block mb-1">Jurisdiction</label>
                                                                    <textarea class="form-control" name="license_types_rows[0][jurisdiction]" rows="2" placeholder="e.g., Single location within a state"></textarea>
                                                                </div>
                                                                <div class="col-md-3 mb-2">
                                                                    <label class="fw-bold d-block mb-1">Validity</label>
                                                                    <input type="text" class="form-control" name="license_types_rows[0][validity]" placeholder="e.g., 1-5 years">
                                                                </div>
                                                                <div class="col-md-9 mb-2">
                                                                    <label class="fw-bold d-block mb-1">Suitable For</label>
                                                                    <textarea class="form-control" name="license_types_rows[0][suitable_for]" rows="2" placeholder="e.g., Local vendors, street food stalls"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="alert alert-info">
                                                <i class="bi bi-info-circle"></i>
                                                <strong>Note:</strong> You can add up to 10 license type rows. Each row will be displayed in a table format with License Type, Business Scale, Jurisdiction, Validity, and Suitable For columns.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Conclusion Section -->
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Conclusion Section</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="conclusion_enabled" name="conclusion_enabled" value="1" {{ old('conclusion_enabled') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="conclusion_enabled">
                                                    Enable Conclusion Section
                                                </label>
                                            </div>
                                        </div>
                                        <div id="conclusion-content" style="display: {{ old('conclusion_enabled') ? 'block' : 'none' }};">
                                            <div class="mb-3">
                                                <label for="conclusion_title" class="form-label">Section Title</label>
                                                <input type="text" class="form-control @error('conclusion_title') is-invalid @enderror" 
                                                       id="conclusion_title" name="conclusion_title" 
                                                       value="{{ old('conclusion_title', 'Conclusion') }}"
                                                       placeholder="Enter conclusion title">
                                                @error('conclusion_title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="conclusion_content" class="form-label">Conclusion Content</label>
                                                <textarea class="form-control @error('conclusion_content') is-invalid @enderror" 
                                                          id="conclusion_content" name="conclusion_content" 
                                                          rows="5"
                                                          placeholder="Enter conclusion content...">{{ old('conclusion_content', 'Stock Audit is more than a compliance exercise — it is a strategic tool for reducing losses, improving efficiency, and building trust with regulators and lenders. Whether you are a retail store, manufacturer, or borrower with bank exposure, timely audits can protect and grow your business. Partner with Patron Accounting today to schedule your professional stock audit.') }}</textarea>
                                                <small class="text-muted">You can use <strong>bold text</strong> to highlight important parts.</small>
                                                @error('conclusion_content')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Partnership Section -->
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Partnership Section</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="partnership_enabled" name="partnership_enabled" value="1" {{ old('partnership_enabled') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="partnership_enabled">
                                                    Enable Partnership Section
                                                </label>
                                            </div>
                                        </div>
                                        <div id="partnership-content" style="display: {{ old('partnership_enabled') ? 'block' : 'none' }};">
                                            <div class="mb-3">
                                                <label for="partnership_image_file" class="form-label">Partnership Image</label>
                                                <input type="file" class="form-control @error('partnership_image_file') is-invalid @enderror" 
                                                       id="partnership_image_file" name="partnership_image_file" accept="image/*">
                                                <small class="text-muted">Upload an illustration image for the partnership section</small>
                                                @error('partnership_image_file')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="partnership_title" class="form-label">Partnership Title</label>
                                                <input type="text" class="form-control @error('partnership_title') is-invalid @enderror" 
                                                       id="partnership_title" name="partnership_title" 
                                                       value="{{ old('partnership_title', 'Your one-stop partner for Business Registration') }}"
                                                       placeholder="Enter partnership title">
                                                @error('partnership_title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="partnership_services" class="form-label">Services Text</label>
                                                <input type="text" class="form-control @error('partnership_services') is-invalid @enderror" 
                                                       id="partnership_services" name="partnership_services" 
                                                       value="{{ old('partnership_services', 'Accounting • Tax • Audit • Compliance') }}"
                                                       placeholder="Enter services text (e.g., Accounting • Tax • Audit • Compliance)">
                                                <small class="text-muted">Separate services with • symbol</small>
                                                @error('partnership_services')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="partnership_button_text" class="form-label">Button Text</label>
                                                <input type="text" class="form-control @error('partnership_button_text') is-invalid @enderror" 
                                                       id="partnership_button_text" name="partnership_button_text" 
                                                       value="{{ old('partnership_button_text', 'Let\'s grow together!') }}"
                                                       placeholder="Enter button text">
                                                @error('partnership_button_text')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="partnership_button_link" class="form-label">Button Link</label>
                                                <input type="text" class="form-control @error('partnership_button_link') is-invalid @enderror" 
                                                       id="partnership_button_link" name="partnership_button_link" 
                                                       value="{{ old('partnership_button_link', '#contact') }}"
                                                       placeholder="Enter button link (e.g., #contact or /contact-us)">
                                                @error('partnership_button_link')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="partnership_content" class="form-label">Partnership Content (Optional)</label>
                                                <textarea class="form-control @error('partnership_content') is-invalid @enderror" 
                                                          id="partnership_content" name="partnership_content" rows="6"
                                                          placeholder="Enter partnership content with rich text">{{ old('partnership_content', '') }}</textarea>
                                                <small class="text-muted d-block mt-2">Add detailed information about the partnership with formatting support</small>
                                                @error('partnership_content')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Company Registration Section -->
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Company Registration Section</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="company_registration_enabled" name="company_registration_enabled" value="1" {{ old('company_registration_enabled') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="company_registration_enabled">
                                                    Enable Company Registration Section
                                                </label>
                                            </div>
                                        </div>
                                        <div id="company-registration-content" style="display: {{ old('company_registration_enabled') ? 'block' : 'none' }};">
                                            <div class="mb-3">
                                                <label for="company_registration_title" class="form-label">Section Title</label>
                                                <input type="text" class="form-control @error('company_registration_title') is-invalid @enderror" 
                                                       id="company_registration_title" name="company_registration_title" 
                                                       value="{{ old('company_registration_title', 'Company Registration Customised by States and Cities') }}"
                                                       placeholder="Enter section title">
                                                @error('company_registration_title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="text-muted">Manage company registration items below</span>
                                                <button type="button" class="btn btn-sm btn-primary" id="add-company-registration-btn">
                                                    <i class="bi bi-plus"></i> Add Registration Item
                                                </button>
                                            </div>

                                            <div id="company-registration-items-container">
                                                <div class="company-registration-item border rounded p-3 mb-3" data-index="0">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <h6 class="mb-0">Registration Item #<span class="company-registration-number">1</span></h6>
                                                        <button type="button" class="btn btn-outline-danger btn-sm remove-company-registration-btn">
                                                            <i class="bi bi-trash"></i> Remove
                                                        </button>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3">
                                                            <label class="fw-bold d-block mb-1">Registration Title</label>
                                                            <input type="text" class="form-control" name="company_registration_items[0][title]" placeholder="e.g., Private Limited Company Registration in Assam">
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="fw-bold d-block mb-1">Link (Optional)</label>
                                                            <input type="text" class="form-control" name="company_registration_items[0][link]" placeholder="Enter URL (e.g., /company-registration-assam)">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Company Registration Content -->
                                            <div class="mb-3">
                                                <label for="company_registration_content" class="form-label">Company Registration Content (Optional)</label>
                                                <textarea class="form-control @error('company_registration_content') is-invalid @enderror" 
                                                          id="company_registration_content" name="company_registration_content" rows="10"
                                                          placeholder="Write your content here... Use the editor toolbar above to format text, add images, tables, and more.">{{ old('company_registration_content') }}</textarea>
                                                <div class="form-text">Use the rich editor toolbar to format your content with text styling, links, images, tables, and more.</div>
                                                @error('company_registration_content')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="alert alert-info mt-3">
                                                <i class="bi bi-info-circle"></i> Add multiple company registration items. Each item will be displayed in a grid layout with icon and title.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Video Section -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label mb-0">Video Section</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="video_enabled" name="video_enabled" value="1" {{ old('video_enabled') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="video_enabled">Enable Video Section</label>
                                        </div>
                                    </div>

                                    <div id="video-content" style="display: {{ old('video_enabled') ? 'block' : 'none' }};">
                                        <div class="mb-3">
                                            <label for="video_file" class="form-label">Upload Video File</label>
                                            <input type="file" class="form-control @error('video_file') is-invalid @enderror" 
                                                   id="video_file" name="video_file" accept="video/mp4,video/webm,video/ogg">
                                            <small class="text-muted">Supported formats: MP4, WebM, OGG (Max size: 50MB)</small>
                                            @error('video_file')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <div id="video-preview-container" class="mt-2" style="display: none;">
                                                <video id="video-preview" controls style="max-width: 100%; max-height: 300px;" class="rounded"></video>
                                                <button type="button" class="btn btn-sm btn-danger mt-2" onclick="removeVideoFile()">
                                                    <i class="bi bi-trash"></i> Remove Video
                                                </button>
                                            </div>
                                        </div>

                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle"></i>
                                            <strong>Note:</strong> Upload a video file to display in the video section. The video will be displayed before FAQ section on the page.
                                        </div>
                                    </div>
                                </div>

                                <!-- Background Image Section (for background-map template) -->
                                <div class="mb-3" id="background-image-section" style="display: none;">
                                    <div class="card">
                                        <div class="card-header" style="background-color: #007bff; color: white;">
                                            <h6 class="mb-0"><i class="bi bi-image"></i> Page Image</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="hero_background_image" class="form-label">Upload Image</label>
                                                <input type="file" class="form-control @error('hero_background_image') is-invalid @enderror" 
                                                       id="hero_background_image" name="hero_background_image" accept="image/*">
                                                <div class="form-text">Upload an image to display on the page (recommended: 1200x600px or larger)</div>
                                                @error('hero_background_image')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                
                                                <div id="hero_background_preview" class="mt-3" style="display: none;">
                                                    <img src="" alt="Preview" class="img-fluid rounded" style="max-height: 200px;">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Map Section (for background-map template) -->
                                <div class="mb-3" id="map-section" style="display: none;">
                                    <div class="card">
                                        <div class="card-header" style="background-color: #17a2b8; color: white;">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="mb-0"><i class="bi bi-geo-alt-fill"></i> Map Section</h6>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="map_enabled" name="map_enabled" value="1" {{ old('map_enabled') ? 'checked' : '' }}>
                                                    <label class="form-check-label text-white" for="map_enabled">Enable</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body" id="map-content" style="display: {{ old('map_enabled') ? 'block' : 'none' }};">
                                            <div class="mb-3">
                                                <label for="map_title" class="form-label">Map Section Title</label>
                                                <input type="text" class="form-control" id="map_title" name="map_title" value="{{ old('map_title') }}" 
                                                       placeholder="e.g., Find Us Here">
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="map_description" class="form-label">Description</label>
                                                <textarea class="form-control" id="map_description" name="map_description" rows="2" 
                                                          placeholder="Optional description above the map">{{ old('map_description') }}</textarea>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="map_type" class="form-label">Map Type</label>
                                                <select class="form-control" id="map_type" name="map_type" onchange="toggleMapOptions()">
                                                    <option value="google" {{ old('map_type') == 'google' ? 'selected' : '' }}>Google Maps</option>
                                                    <option value="openstreetmap" {{ old('map_type') == 'openstreetmap' ? 'selected' : '' }}>OpenStreetMap</option>
                                                    <option value="iframe" {{ old('map_type') == 'iframe' ? 'selected' : '' }}>Custom Iframe Embed</option>
                                                </select>
                                            </div>
                                            
                                            <!-- Coordinates Option (for Google & OpenStreetMap) -->
                                            <div id="coordinates-option" style="display: {{ old('map_type') != 'iframe' ? 'block' : 'none' }};">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="map_latitude" class="form-label">Latitude</label>
                                                        <input type="text" class="form-control" id="map_latitude" name="map_latitude" 
                                                               value="{{ old('map_latitude') }}" placeholder="e.g., 19.0760">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="map_longitude" class="form-label">Longitude</label>
                                                        <input type="text" class="form-control" id="map_longitude" name="map_longitude" 
                                                               value="{{ old('map_longitude') }}" placeholder="e.g., 72.8777">
                                                    </div>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="map_zoom_level" class="form-label">Zoom Level: <span id="zoom-value">15</span></label>
                                                    <input type="range" class="form-range" id="map_zoom_level" name="map_zoom_level" 
                                                           min="1" max="20" value="{{ old('map_zoom_level', 15) }}" 
                                                           oninput="document.getElementById('zoom-value').textContent = this.value">
                                                    <div class="form-text">1 = World view, 20 = Street level</div>
                                                </div>
                                            </div>
                                            
                                            <!-- Iframe Option (for custom embeds) -->
                                            <div id="iframe-option" style="display: {{ old('map_type') == 'iframe' ? 'block' : 'none' }};">
                                                <div class="mb-3">
                                                    <label for="map_embed_code" class="form-label">Map Embed Code</label>
                                                    <textarea class="form-control" id="map_embed_code" name="map_embed_code" rows="4" 
                                                              placeholder="Paste your map iframe embed code here">{{ old('map_embed_code') }}</textarea>
                                                    <div class="form-text">Get iframe code from Google Maps, Mapbox, or any map service</div>
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="map_marker_title" class="form-label">Location Title</label>
                                                <input type="text" class="form-control" id="map_marker_title" name="map_marker_title" 
                                                       value="{{ old('map_marker_title') }}" placeholder="e.g., Patron Accounting Office">
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="map_marker_description" class="form-label">Location Description</label>
                                                <textarea class="form-control" id="map_marker_description" name="map_marker_description" rows="3" 
                                                          placeholder="Address, contact info, or directions">{{ old('map_marker_description') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ Section -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label mb-0">FAQ Section</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="faq_enabled" name="faq_enabled" value="1" {{ old('faq_enabled') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="faq_enabled">Enable FAQ Section</label>
                                        </div>
                                    </div>

                                    <div id="faq-content" style="display: {{ old('faq_enabled') ? 'block' : 'none' }};">
                                        <div class="mb-3">
                                            <label for="faq_title" class="form-label">FAQ Section Title</label>
                                            <input type="text" class="form-control @error('faq_title') is-invalid @enderror" 
                                                   id="faq_title" name="faq_title" value="{{ old('faq_title', 'Frequently Asked Questions') }}">
                                            @error('faq_title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="faq_subtitle" class="form-label">FAQ Section Subtitle</label>
                                            <textarea class="form-control @error('faq_subtitle') is-invalid @enderror" 
                                                      id="faq_subtitle" name="faq_subtitle" rows="2">{{ old('faq_subtitle', 'Have a look at the answers to the most asked questions.') }}</textarea>
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
                                                @if(old('faq_items'))
                                                    @foreach(old('faq_items') as $index => $faq_item)
                                                        <div class="faq-item border rounded p-3 mb-3" data-index="{{ $index }}">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="mb-0">FAQ Item #<span class="faq-number">{{ $index + 1 }}</span></h6>
                                                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeFAQItem(this)" {{ $index === 0 ? 'disabled' : '' }}>
                                                                    <i class="bi bi-trash"></i> Remove
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 mb-2">
                                                                    <label class="fw-bold d-block mb-1">Question</label>
                                                                    <input type="text" class="form-control" name="faq_items[{{ $index }}][question]" value="{{ $faq_item['question'] ?? '' }}">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="fw-bold d-block mb-1">Answer</label>
                                                                    <textarea class="form-control" name="faq_items[{{ $index }}][answer]" rows="3">{{ $faq_item['answer'] ?? '' }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <!-- Default first FAQ item -->
                                                    <div class="faq-item border rounded p-3 mb-3" data-index="0">
                                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                                            <h6 class="mb-0">FAQ Item #<span class="faq-number">1</span></h6>
                                                            <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeFAQItem(this)" disabled>
                                                                <i class="bi bi-trash"></i> Remove
                                                            </button>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 mb-2">
                                                                <label class="fw-bold d-block mb-1">Question</label>
                                                                <input type="text" class="form-control" name="faq_items[0][question]" placeholder="Enter your question here...">
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="fw-bold d-block mb-1">Answer</label>
                                                                <textarea class="form-control" name="faq_items[0][answer]" rows="3" placeholder="Enter the answer here..."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="alert alert-info">
                                                <i class="bi bi-info-circle"></i>
                                                <strong>Note:</strong> FAQ items will be stored as JSON data and can be displayed using the FAQ template. At least one FAQ item is when FAQ section is enabled.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div><!-- End template-specific-sections -->
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
                                        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                        <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="published_at" class="form-label">Publish Date</label>
                                    <input type="datetime-local" class="form-control @error('published_at') is-invalid @enderror" 
                                           id="published_at" name="published_at" value="{{ old('published_at', now()->format('Y-m-d\TH:i')) }}">
                                    @error('published_at')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-end gap-2">
                                    <button type="submit" name="action" value="draft" class="btn btn-secondary">Save Draft</button>
                                    <button type="submit" name="action" value="publish" class="btn btn-primary" style="background: #2b8a6a !important;">Publish</button>
                                </div>
                            </div>
                        </div>

                        <!-- Include SEO Fields -->
                        @include('admin.seo._fields', ['page' => new \App\Models\Page()])

                        <div class="card mb-3">
                            <div class="card-header">
                                <h6 class="mb-0">Page Attributes</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="template" class="form-label">Page Template</label>
                                    <select class="form-control @error('template') is-invalid @enderror" 
                                            id="template" name="template" onchange="updateTemplatePreview()">
                                        @foreach(\App\Models\Page::getAvailableTemplates() as $key => $template)
                                            <option value="{{ $key }}" 
                                                {{ old('template', 'default') == $key ? 'selected' : '' }}>
                                                {{ $template['name'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('template')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    
                                    <!-- Template Preview -->
                                    <div id="template-preview" class="mt-3 p-3 bg-light rounded">
                                        <div id="template-info">
                                            <!-- Will be populated by JavaScript -->
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="sort_order" class="form-label">Sort Order</label>
                                    <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                           id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" min="0">
                                    @error('sort_order')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
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
        .replace(/[^\w\s-]/g, '')
        .replace(/[\s_-]+/g, '-')
        .replace(/^-+|-+$/g, '');
    document.getElementById('slug').value = slug;
});

// Auto-set publish date when status changes to published
document.getElementById('status').addEventListener('change', function() {
    if (this.value === 'published' && !document.getElementById('published_at').value) {
        const now = new Date();
        now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
        document.getElementById('published_at').value = now.toISOString().slice(0, 16);
    }
});

// Hero Toggle Functionality
document.getElementById('hero_enabled').addEventListener('change', function() {
    const heroContent = document.getElementById('hero-content');
    if (this.checked) {
        heroContent.style.display = 'block';
    } else {
        heroContent.style.display = 'none';
    }
});

// Hero Benefits Management
let heroBenefitCount = 1;
document.getElementById('add-hero-benefit').addEventListener('click', function() {
    if (heroBenefitCount >= 3) {
        alert('Maximum 3 benefits allowed');
        return;
    }
    
    heroBenefitCount++;
    const container = document.getElementById('hero-benefits-container');
    const newItem = document.createElement('div');
    newItem.className = 'hero-benefit-item mb-2';
    newItem.innerHTML = `
        <div class="input-group">
            <input type="text" class="form-control" name="hero_benefits[]" placeholder="Enter benefit text">
            <button type="button" class="btn btn-danger remove-hero-benefit">
                <i class="bi bi-trash"></i>
            </button>
        </div>
    `;
    container.appendChild(newItem);
    updateHeroBenefitButtons();
});

document.getElementById('hero-benefits-container').addEventListener('click', function(e) {
    if (e.target.closest('.remove-hero-benefit')) {
        e.target.closest('.hero-benefit-item').remove();
        heroBenefitCount--;
        updateHeroBenefitButtons();
    }
});

function updateHeroBenefitButtons() {
    const items = document.querySelectorAll('.hero-benefit-item');
    items.forEach((item, index) => {
        const removeBtn = item.querySelector('.remove-hero-benefit');
        if (items.length > 1) {
            removeBtn.style.display = 'block';
        } else {
            removeBtn.style.display = 'none';
        }
    });
}

// Intro Toggle Functionality
document.getElementById('intro_enabled').addEventListener('change', function() {
    const introContent = document.getElementById('intro-content');
    if (this.checked) {
        introContent.style.display = 'block';
    } else {
        introContent.style.display = 'none';
    }
});

// What Toggle Functionality
document.getElementById('what_enabled').addEventListener('change', function() {
    const whatContent = document.getElementById('what-content');
    if (this.checked) {
        whatContent.style.display = 'block';
    } else {
        whatContent.style.display = 'none';
    }
});

// Applicability Toggle Functionality
document.getElementById('applicability_enabled').addEventListener('change', function() {
    const applicabilityContent = document.getElementById('applicability-content');
    if (this.checked) {
        applicabilityContent.style.display = 'block';
    } else {
        applicabilityContent.style.display = 'none';
    }
});

// FAQ Toggle Functionality
document.getElementById('faq_enabled').addEventListener('change', function() {
    const faqContent = document.getElementById('faq-content');
    if (this.checked) {
        faqContent.style.display = 'block';
    } else {
        faqContent.style.display = 'none';
    }
});

// Services Toggle Functionality
document.getElementById('services_enabled').addEventListener('change', function() {
    const servicesContent = document.getElementById('services-content');
    if (this.checked) {
        servicesContent.style.display = 'block';
    } else {
        servicesContent.style.display = 'none';
    }
});

// Services Management Functions
function addServiceItem() {
    const container = document.getElementById('services-items-container');
    const items = container.querySelectorAll('.service-item');
    
    // Limit to 12 items
    if (items.length >= 12) {
        alert('Maximum 12 service items allowed.');
        return;
    }
    
    const newIndex = items.length;

    const serviceItemHtml = `
        <div class="service-item border rounded p-3 mb-3" data-index="${newIndex}">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0">Service Item #<span class="service-number">${newIndex + 1}</span></h6>
                <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeServiceItem(this)">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row">
                <div class="col-12 mb-2">
                    <label class="fw-bold d-block mb-1">Service Title</label>
                    <input type="text" class="form-control" name="services_items[${newIndex}][title]" placeholder="e.g., Opening & Closing Stock Verification">
                </div>
                <div class="col-12 mb-2">
                    <label class="fw-bold d-block mb-1">Service Description</label>
                    <textarea class="form-control" name="services_items[${newIndex}][description]" rows="2" placeholder="Brief description of the service..."></textarea>
                </div>
                <div class="col-12">
                    <label class="fw-bold d-block mb-1">Service Image</label>
                    <input type="file" class="form-control service-image-input" data-index="${newIndex}" accept="image/*">
                    <input type="hidden" name="services_items[${newIndex}][image]" value="">
                    <small class="text-muted">Upload an image (PNG, JPG, SVG - Max 2MB)</small>
                </div>
            </div>
        </div>
    `;

    container.insertAdjacentHTML('beforeend', serviceItemHtml);
    updateServiceNumbers();
}

function removeServiceItem(button) {
    const serviceItem = button.closest('.service-item');
    serviceItem.remove();
    updateServiceNumbers();
}

function updateServiceNumbers() {
    const container = document.getElementById('services-items-container');
    const items = container.querySelectorAll('.service-item');
    
    items.forEach((item, index) => {
        // Update the display number
        const numberSpan = item.querySelector('.service-number');
        if (numberSpan) {
            numberSpan.textContent = index + 1;
        }

        // Update the data-index attribute
        item.dataset.index = index;

        // Update input names to maintain proper array indexing
        const titleInput = item.querySelector('input[name*="[title]"]');
        const descriptionTextarea = item.querySelector('textarea[name*="[description]"]');
        const imageInput = item.querySelector('input[type="hidden"][name*="[image]"]');
        const fileInput = item.querySelector('.service-image-input');
        
        if (titleInput) {
            titleInput.name = `services_items[${index}][title]`;
        }
        if (descriptionTextarea) {
            descriptionTextarea.name = `services_items[${index}][description]`;
        }
        if (imageInput) {
            imageInput.name = `services_items[${index}][image]`;
        }
        if (fileInput) {
            fileInput.setAttribute('data-index', index);
        }
    });
}

// Handle service image uploads with preview
document.addEventListener('change', function(e) {
    if (e.target.classList.contains('service-image-input')) {
        const file = e.target.files[0];
        const index = e.target.getAttribute('data-index');
        
        if (file) {
            // Validate file size (2MB max)
            if (file.size > 2 * 1024 * 1024) {
                alert('File size must be less than 2MB');
                e.target.value = '';
                return;
            }
            
            // Validate file type
            if (!file.type.match('image.*')) {
                alert('Please select an image file');
                e.target.value = '';
                return;
            }
            
            // Update the file input name to match controller expectations
            e.target.name = `service_image_${index}`;
            
            // Create preview
            const reader = new FileReader();
            reader.onload = function(event) {
                const serviceItem = e.target.closest('.service-item');
                let preview = serviceItem.querySelector('.service-image-preview');
                
                if (!preview) {
                    const previewContainer = document.createElement('div');
                    previewContainer.className = 'mt-2';
                    previewContainer.innerHTML = '<img class="img-thumbnail service-image-preview" style="max-height: 100px;">';
                    e.target.parentElement.insertBefore(previewContainer, e.target.nextElementSibling);
                    preview = previewContainer.querySelector('.service-image-preview');
                }
                
                preview.src = event.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
    
    // Handle What Section image upload with preview
    if (e.target.classList.contains('what-image-input')) {
        const file = e.target.files[0];
        
        if (file) {
            // Validate file size (2MB max)
            if (file.size > 2 * 1024 * 1024) {
                alert('File size must be less than 2MB');
                e.target.value = '';
                return;
            }
            
            // Validate file type
            if (!file.type.match('image.*')) {
                alert('Please select an image file');
                e.target.value = '';
                return;
            }
            
            // Update the file input name to match controller expectations
            e.target.name = 'what_image_file';
            
            // Create preview
            const reader = new FileReader();
            reader.onload = function(event) {
                let preview = document.querySelector('.what-image-preview');
                
                if (!preview) {
                    const previewContainer = document.createElement('div');
                    previewContainer.className = 'mt-2';
                    previewContainer.innerHTML = '<img class="img-thumbnail what-image-preview" style="max-height: 150px;">';
                    e.target.parentElement.insertBefore(previewContainer, e.target.nextElementSibling);
                    preview = previewContainer.querySelector('.what-image-preview');
                }
                
                preview.src = event.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
});

// Report Components Management Functions
function addReportComponentItem() {
    const container = document.getElementById('report-components-items-container');
    const items = container.querySelectorAll('.report-component-item');
    
    // Limit to 12 items
    if (items.length >= 12) {
        alert('Maximum 12 report component items allowed.');
        return;
    }
    
    const newIndex = items.length;

    const componentItemHtml = `
        <div class="report-component-item border rounded p-3 mb-3" data-index="${newIndex}">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0">Report Component #<span class="report-component-number">${newIndex + 1}</span></h6>
                <button type="button" class="btn btn-outline-danger btn-sm remove-report-component-btn">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label class="fw-bold d-block mb-1">Component Title</label>
                    <input type="text" class="form-control" name="report_components_items[${newIndex}][title]" placeholder="e.g., Executive Summary">
                </div>
                <div class="col-md-6 mb-2">
                    <label class="fw-bold d-block mb-1">Component Image</label>
                    <input type="file" class="form-control report-component-image-input" data-index="${newIndex}" accept="image/*">
                    <input type="hidden" name="report_components_items[${newIndex}][image]" value="">
                    <small class="text-muted">Upload an image (PNG, JPG, SVG - Max 2MB)</small>
                </div>
                <div class="col-12">
                    <label class="fw-bold d-block mb-1">Component Description</label>
                    <textarea class="form-control" name="report_components_items[${newIndex}][description]" rows="3" placeholder="Enter component description..."></textarea>
                </div>
            </div>
        </div>
    `;

    container.insertAdjacentHTML('beforeend', componentItemHtml);
    updateReportComponentNumbers();
}

function removeReportComponentItem(button) {
    const componentItem = button.closest('.report-component-item');
    componentItem.remove();
    updateReportComponentNumbers();
}

function updateReportComponentNumbers() {
    const container = document.getElementById('report-components-items-container');
    const items = container.querySelectorAll('.report-component-item');
    
    items.forEach((item, index) => {
        // Update the display number
        const numberSpan = item.querySelector('.report-component-number');
        if (numberSpan) {
            numberSpan.textContent = index + 1;
        }

        // Update the data-index attribute
        item.dataset.index = index;

        // Update input names to maintain proper array indexing
        const titleInput = item.querySelector('input[name*="[title]"]');
        const descriptionTextarea = item.querySelector('textarea[name*="[description]"]');
        const imageInput = item.querySelector('input[type="hidden"][name*="[image]"]');
        const fileInput = item.querySelector('.report-component-image-input');
        
        if (titleInput) {
            titleInput.name = `report_components_items[${index}][title]`;
        }
        if (descriptionTextarea) {
            descriptionTextarea.name = `report_components_items[${index}][description]`;
        }
        if (imageInput) {
            imageInput.name = `report_components_items[${index}][image]`;
        }
        if (fileInput) {
            fileInput.setAttribute('data-index', index);
        }
    });
}

// Handle report component image uploads with preview
document.addEventListener('change', function(e) {
    if (e.target.classList.contains('report-component-image-input')) {
        const file = e.target.files[0];
        const index = e.target.getAttribute('data-index');
        
        if (file) {
            // Validate file size (2MB max)
            if (file.size > 2 * 1024 * 1024) {
                alert('File size must be less than 2MB');
                e.target.value = '';
                return;
            }
            
            // Validate file type
            if (!file.type.match('image.*')) {
                alert('Please select an image file');
                e.target.value = '';
                return;
            }
            
            // Update the file input name to match controller expectations
            e.target.name = `report_component_image_${index}`;
            
            // Create preview
            const reader = new FileReader();
            reader.onload = function(event) {
                const componentItem = e.target.closest('.report-component-item');
                let preview = componentItem.querySelector('.report-component-image-preview');
                
                if (!preview) {
                    const previewContainer = document.createElement('div');
                    previewContainer.className = 'mt-2';
                    previewContainer.innerHTML = '<img class="img-thumbnail report-component-image-preview" style="max-height: 100px;">';
                    e.target.parentElement.insertBefore(previewContainer, e.target.nextElementSibling);
                    preview = previewContainer.querySelector('.report-component-image-preview');
                }
                
                preview.src = event.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
});

// Report Components Event Listeners
document.addEventListener('DOMContentLoaded', function() {
    // Add report component button
    const addReportComponentBtn = document.getElementById('add-report-component-btn');
    if (addReportComponentBtn) {
        addReportComponentBtn.addEventListener('click', addReportComponentItem);
    }
    
    // Remove report component buttons (delegated)
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-report-component-btn') || e.target.closest('.remove-report-component-btn')) {
            const button = e.target.classList.contains('remove-report-component-btn') ? e.target : e.target.closest('.remove-report-component-btn');
            removeReportComponentItem(button);
        }
    });
    
    // Report Components toggle
    const reportComponentsToggle = document.getElementById('report_components_enabled');
    const reportComponentsContent = document.getElementById('report-components-content');
    if (reportComponentsToggle && reportComponentsContent) {
        reportComponentsToggle.addEventListener('change', function() {
            reportComponentsContent.style.display = this.checked ? 'block' : 'none';
        });
    }
});

// Procedure Steps Management Functions
function addProcedureStepItem() {
    const container = document.getElementById('procedure-steps-items-container');
    const items = container.querySelectorAll('.procedure-step-item');
    const newIndex = items.length;
    
    const stepHtml = `
        <div class="procedure-step-item border rounded p-3 mb-3" data-index="${newIndex}">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0">Procedure Step #<span class="procedure-step-number">${newIndex + 1}</span></h6>
                <button type="button" class="btn btn-outline-danger btn-sm remove-procedure-step-btn">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label class="fw-bold d-block mb-1">Step Number</label>
                    <input type="text" class="form-control" name="procedure_steps_items[${newIndex}][step_number]" value="STEP ${newIndex + 1}" placeholder="e.g., STEP ${newIndex + 1}">
                </div>
                <div class="col-md-6 mb-2">
                    <label class="fw-bold d-block mb-1">Alignment</label>
                    <select class="form-control" name="procedure_steps_items[${newIndex}][alignment]">
                        <option value="left" ${newIndex % 2 == 0 ? 'selected' : ''}>Left (Content Left, Image Right)</option>
                        <option value="right" ${newIndex % 2 != 0 ? 'selected' : ''}>Right (Image Left, Content Right)</option>
                    </select>
                </div>
                <div class="col-12 mb-2">
                    <label class="fw-bold d-block mb-1">Step Title</label>
                    <input type="text" class="form-control" name="procedure_steps_items[${newIndex}][title]" placeholder="e.g., Audit Planning">
                </div>
                <div class="col-12 mb-2">
                    <label class="fw-bold d-block mb-1">Step Description</label>
                    <textarea class="form-control" name="procedure_steps_items[${newIndex}][description]" rows="3" placeholder="Detailed description of this step..."></textarea>
                </div>
                <div class="col-12">
                    <label class="fw-bold d-block mb-1">Step Image</label>
                    <input type="file" class="form-control procedure-step-image-input" data-index="${newIndex}" accept="image/*">
                    <input type="hidden" name="procedure_steps_items[${newIndex}][image]" value="">
                    <small class="text-muted">Upload an image (PNG, JPG, SVG - Max 2MB)</small>
                </div>
            </div>
        </div>
    `;
    
    container.insertAdjacentHTML('beforeend', stepHtml);
    updateProcedureStepNumbers();
}

function removeProcedureStepItem(button) {
    const stepItem = button.closest('.procedure-step-item');
    stepItem.remove();
    updateProcedureStepNumbers();
}

function updateProcedureStepNumbers() {
    const items = document.querySelectorAll('.procedure-step-item');
    items.forEach((item, index) => {
        item.dataset.index = index;
        const numberSpan = item.querySelector('.procedure-step-number');
        if (numberSpan) {
            numberSpan.textContent = index + 1;
        }
        
        // Update input names
        const stepNumberInput = item.querySelector('input[name*="[step_number]"]');
        const titleInput = item.querySelector('input[name*="[title]"]');
        const descriptionTextarea = item.querySelector('textarea[name*="[description]"]');
        const alignmentSelect = item.querySelector('select[name*="[alignment]"]');
        const imageInput = item.querySelector('input[type="hidden"][name*="[image]"]');
        const fileInput = item.querySelector('.procedure-step-image-input');
        
        if (stepNumberInput) {
            stepNumberInput.name = `procedure_steps_items[${index}][step_number]`;
            if (!stepNumberInput.value || stepNumberInput.value.match(/^STEP \d+$/)) {
                stepNumberInput.value = `STEP ${index + 1}`;
            }
        }
        if (titleInput) titleInput.name = `procedure_steps_items[${index}][title]`;
        if (descriptionTextarea) descriptionTextarea.name = `procedure_steps_items[${index}][description]`;
        if (alignmentSelect) {
            alignmentSelect.name = `procedure_steps_items[${index}][alignment]`;
            // Auto-alternate alignment
            const leftOption = alignmentSelect.querySelector('option[value="left"]');
            const rightOption = alignmentSelect.querySelector('option[value="right"]');
            if (leftOption && rightOption) {
                leftOption.selected = (index % 2 == 0);
                rightOption.selected = (index % 2 != 0);
            }
        }
        if (imageInput) imageInput.name = `procedure_steps_items[${index}][image]`;
        if (fileInput) fileInput.setAttribute('data-index', index);
    });
}

// Handle procedure step image uploads with preview
document.addEventListener('change', function(e) {
    if (e.target.classList.contains('procedure-step-image-input')) {
        const file = e.target.files[0];
        const index = e.target.getAttribute('data-index');
        
        if (file) {
            if (file.size > 2 * 1024 * 1024) {
                alert('File size must be less than 2MB');
                e.target.value = '';
                return;
            }
            
            if (!file.type.match('image.*')) {
                alert('Please select an image file');
                e.target.value = '';
                return;
            }
            
            e.target.name = `procedure_step_image_${index}`;
            
            const reader = new FileReader();
            reader.onload = function(event) {
                const stepItem = e.target.closest('.procedure-step-item');
                let preview = stepItem.querySelector('.procedure-step-image-preview');
                
                if (!preview) {
                    const previewContainer = document.createElement('div');
                    previewContainer.className = 'mt-2';
                    previewContainer.innerHTML = '<img class="img-thumbnail procedure-step-image-preview" style="max-height: 100px;">';
                    e.target.parentElement.insertBefore(previewContainer, e.target.nextElementSibling);
                    preview = previewContainer.querySelector('.procedure-step-image-preview');
                }
                
                preview.src = event.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
});

// Procedure Steps Event Listeners
document.addEventListener('DOMContentLoaded', function() {
    const addProcedureStepBtn = document.getElementById('add-procedure-step-btn');
    if (addProcedureStepBtn) {
        addProcedureStepBtn.addEventListener('click', addProcedureStepItem);
    }
    
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-procedure-step-btn') || e.target.closest('.remove-procedure-step-btn')) {
            const button = e.target.classList.contains('remove-procedure-step-btn') ? e.target : e.target.closest('.remove-procedure-step-btn');
            removeProcedureStepItem(button);
        }
    });
    
    const procedureStepsToggle = document.getElementById('procedure_steps_enabled');
    const procedureStepsContent = document.getElementById('procedure-steps-content');
    if (procedureStepsToggle && procedureStepsContent) {
        procedureStepsToggle.addEventListener('change', function() {
            procedureStepsContent.style.display = this.checked ? 'block' : 'none';
        });
    }
});

// Checklist Management Functions
function addChecklistItem() {
    const container = document.getElementById('checklist-items-container');
    const items = container.querySelectorAll('.checklist-item');
    const newIndex = items.length;
    
    const itemHtml = `
        <div class="checklist-item border rounded p-3 mb-3" data-index="${newIndex}">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0">Checklist Item #<span class="checklist-number">${newIndex + 1}</span></h6>
                <button type="button" class="btn btn-outline-danger btn-sm remove-checklist-btn">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row">
                <div class="col-12">
                    <label class="fw-bold d-block mb-1">Checklist Text</label>
                    <textarea class="form-control" name="checklist_items[${newIndex}][text]" rows="2" placeholder="Enter checklist item text..."></textarea>
                    <small class="text-muted">You can use HTML tags like &lt;span class="fw-semibold" style="color: #ff6600;"&gt;highlighted text&lt;/span&gt; to highlight important words.</small>
                </div>
            </div>
        </div>
    `;
    
    container.insertAdjacentHTML('beforeend', itemHtml);
    updateChecklistNumbers();
}

function removeChecklistItem(button) {
    const checklistItem = button.closest('.checklist-item');
    checklistItem.remove();
    updateChecklistNumbers();
}

function updateChecklistNumbers() {
    const items = document.querySelectorAll('.checklist-item');
    items.forEach((item, index) => {
        item.dataset.index = index;
        const numberSpan = item.querySelector('.checklist-number');
        if (numberSpan) {
            numberSpan.textContent = index + 1;
        }
        
        // Update input name
        const textarea = item.querySelector('textarea[name*="[text]"]');
        if (textarea) {
            textarea.name = `checklist_items[${index}][text]`;
        }
    });
}

// Checklist Event Listeners
document.addEventListener('DOMContentLoaded', function() {
    const addChecklistBtn = document.getElementById('add-checklist-btn');
    if (addChecklistBtn) {
        addChecklistBtn.addEventListener('click', addChecklistItem);
    }
    
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-checklist-btn') || e.target.closest('.remove-checklist-btn')) {
            const button = e.target.classList.contains('remove-checklist-btn') ? e.target : e.target.closest('.remove-checklist-btn');
            removeChecklistItem(button);
        }
    });
    
    const checklistToggle = document.getElementById('checklist_enabled');
    const checklistContent = document.getElementById('checklist-content');
    if (checklistToggle && checklistContent) {
        checklistToggle.addEventListener('change', function() {
            checklistContent.style.display = this.checked ? 'block' : 'none';
        });
    }
});

// Benefits Management Functions
function addBenefitItem() {
    const container = document.getElementById('benefits-items-container');
    const items = container.querySelectorAll('.benefit-item');
    const newIndex = items.length;
    
    const itemHtml = `
        <div class="benefit-item border rounded p-3 mb-3" data-index="${newIndex}">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0">Benefit #<span class="benefit-number">${newIndex + 1}</span></h6>
                <button type="button" class="btn btn-outline-danger btn-sm remove-benefit-btn">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="fw-bold d-block mb-1">Icon Image</label>
                    <input type="file" class="form-control" name="benefit_icon_${newIndex}" accept="image/*" onchange="previewBenefitImage(this, ${newIndex})">
                    <input type="hidden" name="benefits_items[${newIndex}][icon]" class="benefit-icon-path">
                    <small class="text-muted">Upload an icon image for this benefit</small>
                    <div class="mt-2 benefit-image-preview" id="benefit_preview_container_${newIndex}" style="display:none;">
                        <img id="benefit_preview_${newIndex}" src="" alt="Preview" style="max-width: 100px; max-height: 100px;" class="img-thumbnail">
                        <button type="button" class="btn btn-sm btn-danger ms-2" onclick="removeBenefitImage(${newIndex})">Remove Image</button>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="fw-bold d-block mb-1">Benefit Title</label>
                    <input type="text" class="form-control" name="benefits_items[${newIndex}][title]" placeholder="Enter benefit title">
                </div>
                <div class="col-12">
                    <label class="fw-bold d-block mb-1">Description</label>
                    <textarea class="form-control" name="benefits_items[${newIndex}][description]" rows="2" placeholder="Enter benefit description"></textarea>
                </div>
            </div>
        </div>
    `;
    
    container.insertAdjacentHTML('beforeend', itemHtml);
    updateBenefitNumbers();
}

function previewBenefitImage(input, index) {
    const previewContainer = document.getElementById(`benefit_preview_container_${index}`);
    const preview = document.getElementById(`benefit_preview_${index}`);
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            previewContainer.style.display = 'block';
        };
        
        reader.readAsDataURL(input.files[0]);
    }
}

function removeBenefitImage(index) {
    const fileInput = document.querySelector(`input[name="benefit_icon_${index}"]`);
    const previewContainer = document.getElementById(`benefit_preview_container_${index}`);
    const preview = document.getElementById(`benefit_preview_${index}`);
    const hiddenInput = document.querySelector(`.benefit-item[data-index="${index}"] .benefit-icon-path`);
    
    if (fileInput) fileInput.value = '';
    if (preview) preview.src = '';
    if (previewContainer) previewContainer.style.display = 'none';
    if (hiddenInput) hiddenInput.value = '';
}

// Benefits Header Image Preview
function previewBenefitsHeaderImage(input) {
    const previewContainer = document.getElementById('benefits_header_image_preview_container');
    const preview = document.getElementById('benefits_header_image_preview');
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            previewContainer.style.display = 'block';
        };
        
        reader.readAsDataURL(input.files[0]);
    }
}

function removeBenefitsHeaderImage() {
    const fileInput = document.getElementById('benefits_header_image');
    const previewContainer = document.getElementById('benefits_header_image_preview_container');
    const preview = document.getElementById('benefits_header_image_preview');
    
    if (fileInput) fileInput.value = '';
    if (preview) preview.src = '';
    if (previewContainer) previewContainer.style.display = 'none';
}

function removeBenefitItem(button) {
    const benefitItem = button.closest('.benefit-item');
    benefitItem.remove();
    updateBenefitNumbers();
}

function updateBenefitNumbers() {
    const items = document.querySelectorAll('.benefit-item');
    items.forEach((item, index) => {
        item.dataset.index = index;
        const numberSpan = item.querySelector('.benefit-number');
        if (numberSpan) {
            numberSpan.textContent = index + 1;
        }
        
        // Update input names
        const fileInput = item.querySelector('input[type="file"][name*="benefit_icon_"]');
        const iconInput = item.querySelector('input[name*="[icon]"]');
        const titleInput = item.querySelector('input[name*="[title]"]');
        const descTextarea = item.querySelector('textarea[name*="[description]"]');
        const previewContainer = item.querySelector('.benefit-image-preview');
        const preview = item.querySelector('img[id*="benefit_preview_"]');
        
        if (fileInput) fileInput.name = `benefit_icon_${index}`;
        if (iconInput) iconInput.name = `benefits_items[${index}][icon]`;
        if (titleInput) titleInput.name = `benefits_items[${index}][title]`;
        if (descTextarea) descTextarea.name = `benefits_items[${index}][description]`;
        if (previewContainer) previewContainer.id = `benefit_preview_container_${index}`;
        if (preview) preview.id = `benefit_preview_${index}`;
        
        // Update onclick handlers
        const removeImgBtn = item.querySelector('button[onclick*="removeBenefitImage"]');
        if (removeImgBtn) removeImgBtn.setAttribute('onclick', `removeBenefitImage(${index})`);
        
        const fileInputWithOnchange = item.querySelector('input[type="file"][onchange*="previewBenefitImage"]');
        if (fileInputWithOnchange) fileInputWithOnchange.setAttribute('onchange', `previewBenefitImage(this, ${index})`);
    });
}

// Benefits Event Listeners
document.addEventListener('DOMContentLoaded', function() {
    const addBenefitBtn = document.getElementById('add-benefit-btn');
    if (addBenefitBtn) {
        addBenefitBtn.addEventListener('click', addBenefitItem);
    }
    
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-benefit-btn') || e.target.closest('.remove-benefit-btn')) {
            const button = e.target.classList.contains('remove-benefit-btn') ? e.target : e.target.closest('.remove-benefit-btn');
            removeBenefitItem(button);
        }
    });
    
    const benefitsToggle = document.getElementById('benefits_enabled');
    const benefitsContent = document.getElementById('benefits-content');
    if (benefitsToggle && benefitsContent) {
        benefitsToggle.addEventListener('change', function() {
            benefitsContent.style.display = this.checked ? 'block' : 'none';
        });
    }

    // Fees Comparison Toggle
    const feesComparisonToggle = document.getElementById('fees_comparison_enabled');
    const feesComparisonContent = document.getElementById('fees-comparison-content');
    if (feesComparisonToggle && feesComparisonContent) {
        feesComparisonToggle.addEventListener('change', function() {
            feesComparisonContent.style.display = this.checked ? 'block' : 'none';
        });
    }

    // Add Comparison Row Button
    const addComparisonRowBtn = document.getElementById('add-comparison-row-btn');
    if (addComparisonRowBtn) {
        addComparisonRowBtn.addEventListener('click', addComparisonRow);
    }

    // Remove Comparison Row Event Delegation
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-comparison-row-btn') || e.target.closest('.remove-comparison-row-btn')) {
            const button = e.target.classList.contains('remove-comparison-row-btn') ? e.target : e.target.closest('.remove-comparison-row-btn');
            removeComparisonRow(button);
        }
    });
});

// Fees Comparison Management Functions
function addComparisonRow() {
    const container = document.getElementById('comparison-rows-container');
    const items = container.querySelectorAll('.comparison-row-item');
    const newIndex = items.length;
    
    const rowHtml = `
        <div class="comparison-row-item border rounded p-3 mb-3" data-index="${newIndex}">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0">Row #<span class="row-number">${newIndex + 1}</span></h6>
                <button type="button" class="btn btn-outline-danger btn-sm remove-comparison-row-btn">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="fw-bold d-block mb-1">Feature</label>
                    <input type="text" class="form-control" name="fees_comparison_rows[${newIndex}][feature]" placeholder="e.g., Objective">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="fw-bold d-block mb-1">Stock Audit</label>
                    <input type="text" class="form-control" name="fees_comparison_rows[${newIndex}][stock_audit]" placeholder="e.g., Independent verification">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="fw-bold d-block mb-1">Internal Inventory Control</label>
                    <input type="text" class="form-control" name="fees_comparison_rows[${newIndex}][internal_control]" placeholder="e.g., Day-to-day management">
                </div>
            </div>
        </div>
    `;
    
    container.insertAdjacentHTML('beforeend', rowHtml);
    updateComparisonRowNumbers();
}

function removeComparisonRow(button) {
    const rowItem = button.closest('.comparison-row-item');
    const container = document.getElementById('comparison-rows-container');
    const items = container.querySelectorAll('.comparison-row-item');
    
    if (items.length <= 1) {
        alert('You must have at least one comparison row.');
        return;
    }
    
    rowItem.remove();
    updateComparisonRowNumbers();
}

function updateComparisonRowNumbers() {
    const container = document.getElementById('comparison-rows-container');
    const items = container.querySelectorAll('.comparison-row-item');
    
    items.forEach((item, index) => {
        item.setAttribute('data-index', index);
        const numberSpan = item.querySelector('.row-number');
        if (numberSpan) {
            numberSpan.textContent = index + 1;
        }
        
        // Update input names
        const inputs = item.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            const name = input.getAttribute('name');
            if (name) {
                const newName = name.replace(/\[\d+\]/, `[${index}]`);
                input.setAttribute('name', newName);
            }
        });
    });
}

// Challenges & Solutions Management Functions
function addChallengeItem() {
    const container = document.getElementById('challenges-items-container');
    const items = container.querySelectorAll('.challenge-item');
    const newIndex = items.length;
    
    if (newIndex >= 20) {
        alert('You can add a maximum of 20 challenge & solution pairs.');
        return;
    }
    
    const itemHtml = `
        <div class="challenge-item border rounded p-3 mb-3" data-index="${newIndex}">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0">Challenge & Solution #<span class="challenge-number">${newIndex + 1}</span></h6>
                <button type="button" class="btn btn-outline-danger btn-sm remove-challenge-btn">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="fw-bold d-block mb-1">Common Challenge</label>
                    <textarea class="form-control" name="challenges_items[${newIndex}][challenge]" rows="2" placeholder="Enter challenge text..."></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-bold d-block mb-1">Patron Accounting Solution</label>
                    <textarea class="form-control" name="challenges_items[${newIndex}][solution]" rows="2" placeholder="Enter solution text..."></textarea>
                </div>
            </div>
        </div>
    `;
    
    container.insertAdjacentHTML('beforeend', itemHtml);
    updateChallengeNumbers();
}

function removeChallengeItem(button) {
    const challengeItem = button.closest('.challenge-item');
    challengeItem.remove();
    updateChallengeNumbers();
}

function updateChallengeNumbers() {
    const items = document.querySelectorAll('.challenge-item');
    items.forEach((item, index) => {
        item.dataset.index = index;
        const numberSpan = item.querySelector('.challenge-number');
        if (numberSpan) {
            numberSpan.textContent = index + 1;
        }
        
        // Update input names
        const challengeTextarea = item.querySelector('textarea[name*="[challenge]"]');
        const solutionTextarea = item.querySelector('textarea[name*="[solution]"]');
        
        if (challengeTextarea) challengeTextarea.name = `challenges_items[${index}][challenge]`;
        if (solutionTextarea) solutionTextarea.name = `challenges_items[${index}][solution]`;
    });
}

// Challenges Event Listeners
document.addEventListener('DOMContentLoaded', function() {
    const addChallengeBtn = document.getElementById('add-challenge-btn');
    if (addChallengeBtn) {
        addChallengeBtn.addEventListener('click', addChallengeItem);
    }
    
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-challenge-btn') || e.target.closest('.remove-challenge-btn')) {
            const button = e.target.classList.contains('remove-challenge-btn') ? e.target : e.target.closest('.remove-challenge-btn');
            removeChallengeItem(button);
        }
    });
    
    const challengesToggle = document.getElementById('challenges_enabled');
    const challengesContent = document.getElementById('challenges-content');
    if (challengesToggle && challengesContent) {
        challengesToggle.addEventListener('change', function() {
            challengesContent.style.display = this.checked ? 'block' : 'none';
        });
    }
});

// Fees Management Functions
function addFeeItem() {
    const container = document.getElementById('fees-items-container');
    const items = container.querySelectorAll('.fee-item');
    const newIndex = items.length;
    
    if (newIndex >= 20) {
        alert('You can add a maximum of 20 fee items.');
        return;
    }
    
    const itemHtml = `
        <div class="fee-item border rounded p-3 mb-3" data-index="${newIndex}">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0">Fee Item #<span class="fee-number">${newIndex + 1}</span></h6>
                <button type="button" class="btn btn-outline-danger btn-sm remove-fee-btn">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="fw-bold d-block mb-1">Fee Component</label>
                    <input type="text" class="form-control" name="fees_items[${newIndex}][component]" placeholder="Professional Charges (per audit cycle)">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-bold d-block mb-1">Cost (Approx.)</label>
                    <input type="text" class="form-control" name="fees_items[${newIndex}][cost]" placeholder="₹30,000 – ₹75,000">
                </div>
            </div>
        </div>
    `;
    
    container.insertAdjacentHTML('beforeend', itemHtml);
    updateFeeNumbers();
}

function removeFeeItem(button) {
    const feeItem = button.closest('.fee-item');
    feeItem.remove();
    updateFeeNumbers();
}

function updateFeeNumbers() {
    const items = document.querySelectorAll('.fee-item');
    items.forEach((item, index) => {
        item.dataset.index = index;
        const numberSpan = item.querySelector('.fee-number');
        if (numberSpan) {
            numberSpan.textContent = index + 1;
        }
        
        // Update input names
        const componentInput = item.querySelector('input[name*="[component]"]');
        const costInput = item.querySelector('input[name*="[cost]"]');
        
        if (componentInput) componentInput.name = `fees_items[${index}][component]`;
        if (costInput) costInput.name = `fees_items[${index}][cost]`;
    });
}

// Fees Event Listeners
document.addEventListener('DOMContentLoaded', function() {
    const addFeeBtn = document.getElementById('add-fee-btn');
    if (addFeeBtn) {
        addFeeBtn.addEventListener('click', addFeeItem);
    }
    
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-fee-btn') || e.target.closest('.remove-fee-btn')) {
            const button = e.target.classList.contains('remove-fee-btn') ? e.target : e.target.closest('.remove-fee-btn');
            removeFeeItem(button);
        }
    });
    
    const feesToggle = document.getElementById('fees_enabled');
    const feesContent = document.getElementById('fees-content');
    if (feesToggle && feesContent) {
        feesToggle.addEventListener('change', function() {
            feesContent.style.display = this.checked ? 'block' : 'none';
        });
    }
    
    const timeTakenToggle = document.getElementById('time_taken_enabled');
    const timeTakenContent = document.getElementById('time-taken-content');
    if (timeTakenToggle && timeTakenContent) {
        timeTakenToggle.addEventListener('change', function() {
            timeTakenContent.style.display = this.checked ? 'block' : 'none';
        });
    }
});

// Partner Services Management Functions
function addPartnerServiceItem() {
    const container = document.getElementById('partner-services-items-container');
    const items = container.querySelectorAll('.partner-service-item');
    const newIndex = items.length;
    
    const itemHtml = `
        <div class="partner-service-item border rounded p-3 mb-3" data-index="${newIndex}">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0">Partner Service #<span class="partner-service-number">${newIndex + 1}</span></h6>
                <button type="button" class="btn btn-outline-danger btn-sm remove-partner-service-btn">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="fw-bold d-block mb-1">Icon Image</label>
                    <input type="file" class="form-control" name="partner_service_icon_${newIndex}" accept="image/*" onchange="previewPartnerServiceImage(this, ${newIndex})">
                    <input type="hidden" name="partner_services_items[${newIndex}][icon]" class="partner-service-icon-path">
                    <small class="text-muted">Upload an icon image for this partner service</small>
                    <div class="mt-2 partner-service-image-preview" id="partner_service_preview_container_${newIndex}" style="display:none;">
                        <img id="partner_service_preview_${newIndex}" src="" alt="Preview" style="max-width: 100px; max-height: 100px;" class="img-thumbnail">
                        <button type="button" class="btn btn-sm btn-danger ms-2" onclick="removePartnerServiceImage(${newIndex})">Remove Image</button>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="fw-bold d-block mb-1">Service Title</label>
                    <input type="text" class="form-control" name="partner_services_items[${newIndex}][title]" placeholder="Enter service title">
                </div>
                <div class="col-12">
                    <label class="fw-bold d-block mb-1">Description</label>
                    <textarea class="form-control" name="partner_services_items[${newIndex}][description]" rows="2" placeholder="Enter service description"></textarea>
                </div>
            </div>
        </div>
    `;
    
    container.insertAdjacentHTML('beforeend', itemHtml);
    updatePartnerServiceNumbers();
}

function previewPartnerServiceImage(input, index) {
    const previewContainer = document.getElementById(`partner_service_preview_container_${index}`);
    const preview = document.getElementById(`partner_service_preview_${index}`);
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            previewContainer.style.display = 'block';
        };
        
        reader.readAsDataURL(input.files[0]);
    }
}

function removePartnerServiceImage(index) {
    const fileInput = document.querySelector(`input[name="partner_service_icon_${index}"]`);
    const previewContainer = document.getElementById(`partner_service_preview_container_${index}`);
    const preview = document.getElementById(`partner_service_preview_${index}`);
    const hiddenInput = document.querySelector(`.partner-service-item[data-index="${index}"] .partner-service-icon-path`);
    
    if (fileInput) fileInput.value = '';
    if (preview) preview.src = '';
    if (previewContainer) previewContainer.style.display = 'none';
    if (hiddenInput) hiddenInput.value = '';
}

function removePartnerServiceItem(button) {
    const serviceItem = button.closest('.partner-service-item');
    serviceItem.remove();
    updatePartnerServiceNumbers();
}

function updatePartnerServiceNumbers() {
    const items = document.querySelectorAll('.partner-service-item');
    items.forEach((item, index) => {
        item.dataset.index = index;
        const numberSpan = item.querySelector('.partner-service-number');
        if (numberSpan) {
            numberSpan.textContent = index + 1;
        }
        
        // Update input names
        const fileInput = item.querySelector('input[type="file"][name*="partner_service_icon_"]');
        const iconInput = item.querySelector('input[name*="[icon]"]');
        const titleInput = item.querySelector('input[name*="[title]"]');
        const descTextarea = item.querySelector('textarea[name*="[description]"]');
        const previewContainer = item.querySelector('.partner-service-image-preview');
        const preview = item.querySelector('img[id*="partner_service_preview_"]');
        
        if (fileInput) fileInput.name = `partner_service_icon_${index}`;
        if (iconInput) iconInput.name = `partner_services_items[${index}][icon]`;
        if (titleInput) titleInput.name = `partner_services_items[${index}][title]`;
        if (descTextarea) descTextarea.name = `partner_services_items[${index}][description]`;
        if (previewContainer) previewContainer.id = `partner_service_preview_container_${index}`;
        if (preview) preview.id = `partner_service_preview_${index}`;
        
        // Update onclick handlers
        const removeImgBtn = item.querySelector('button[onclick*="removePartnerServiceImage"]');
        if (removeImgBtn) removeImgBtn.setAttribute('onclick', `removePartnerServiceImage(${index})`);
        
        const fileInputWithOnchange = item.querySelector('input[type="file"][onchange*="previewPartnerServiceImage"]');
        if (fileInputWithOnchange) fileInputWithOnchange.setAttribute('onchange', `previewPartnerServiceImage(this, ${index})`);
    });
}

// License Types Table Management Functions
function addLicenseTypeRow() {
    const container = document.getElementById('license-types-items-container');
    const items = container.querySelectorAll('.license-type-item');
    const newIndex = items.length;
    
    if (newIndex >= 30) {
        alert('You can add a maximum of 30 license type rows.');
        return;
    }
    
    const rowHtml = `
        <div class="license-type-item border rounded p-3 mb-3" data-index="${newIndex}">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0">License Type #<span class="license-type-number">${newIndex + 1}</span></h6>
                <button type="button" class="btn btn-outline-danger btn-sm remove-license-type-btn">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row">
                <div class="col-md-4 mb-2">
                    <label class="fw-bold d-block mb-1">License Type</label>
                    <input type="text" class="form-control" name="license_types_rows[${newIndex}][license_type]" placeholder="e.g., Basic Registration">
                </div>
                <div class="col-md-4 mb-2">
                    <label class="fw-bold d-block mb-1">Business Scale</label>
                    <input type="text" class="form-control" name="license_types_rows[${newIndex}][business_scale]" placeholder="e.g., Small or emerging food setups">
                </div>
                <div class="col-md-4 mb-2">
                    <label class="fw-bold d-block mb-1">Jurisdiction</label>
                    <textarea class="form-control" name="license_types_rows[${newIndex}][jurisdiction]" rows="2" placeholder="e.g., Single location within a state"></textarea>
                </div>
                <div class="col-md-3 mb-2">
                    <label class="fw-bold d-block mb-1">Validity</label>
                    <input type="text" class="form-control" name="license_types_rows[${newIndex}][validity]" placeholder="e.g., 1-5 years">
                </div>
                <div class="col-md-9 mb-2">
                    <label class="fw-bold d-block mb-1">Suitable For</label>
                    <textarea class="form-control" name="license_types_rows[${newIndex}][suitable_for]" rows="2" placeholder="e.g., Local vendors, street food stalls"></textarea>
                </div>
            </div>
        </div>
    `;
    
    container.insertAdjacentHTML('beforeend', rowHtml);
    updateLicenseTypeNumbers();
}

function removeLicenseTypeRow(button) {
    const row = button.closest('.license-type-item');
    row.remove();
    updateLicenseTypeNumbers();
}

function updateLicenseTypeNumbers() {
    const items = document.querySelectorAll('.license-type-item');
    items.forEach((item, index) => {
        item.dataset.index = index;
        const numberSpan = item.querySelector('.license-type-number');
        if (numberSpan) {
            numberSpan.textContent = index + 1;
        }
        
        // Update input names
        const licenseTypeInput = item.querySelector('input[name*="[license_type]"]');
        const businessScaleInput = item.querySelector('input[name*="[business_scale]"]');
        const jurisdictionTextarea = item.querySelector('textarea[name*="[jurisdiction]"]');
        const validityInput = item.querySelector('input[name*="[validity]"]');
        const suitableForTextarea = item.querySelector('textarea[name*="[suitable_for]"]');
        
        if (licenseTypeInput) licenseTypeInput.name = `license_types_rows[${index}][license_type]`;
        if (businessScaleInput) businessScaleInput.name = `license_types_rows[${index}][business_scale]`;
        if (jurisdictionTextarea) jurisdictionTextarea.name = `license_types_rows[${index}][jurisdiction]`;
        if (validityInput) validityInput.name = `license_types_rows[${index}][validity]`;
        if (suitableForTextarea) suitableForTextarea.name = `license_types_rows[${index}][suitable_for]`;
    });
}

// Partner Services Event Listeners
document.addEventListener('DOMContentLoaded', function() {
    const addPartnerServiceBtn = document.getElementById('add-partner-service-btn');
    if (addPartnerServiceBtn) {
        addPartnerServiceBtn.addEventListener('click', addPartnerServiceItem);
    }
    
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-partner-service-btn') || e.target.closest('.remove-partner-service-btn')) {
            const button = e.target.classList.contains('remove-partner-service-btn') ? e.target : e.target.closest('.remove-partner-service-btn');
            removePartnerServiceItem(button);
        }
    });
    
    const partnerServicesToggle = document.getElementById('partner_services_enabled');
    const partnerServicesContent = document.getElementById('partner-services-content');
    if (partnerServicesToggle && partnerServicesContent) {
        partnerServicesToggle.addEventListener('change', function() {
            partnerServicesContent.style.display = this.checked ? 'block' : 'none';
        });
    }

    // Conclusion Section Toggle
    // License Types Table Management
    const addLicenseTypeBtn = document.getElementById('add-license-type-btn');
    if (addLicenseTypeBtn) {
        addLicenseTypeBtn.addEventListener('click', addLicenseTypeRow);
    }

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-license-type-btn') || e.target.closest('.remove-license-type-btn')) {
            const button = e.target.classList.contains('remove-license-type-btn') ? e.target : e.target.closest('.remove-license-type-btn');
            removeLicenseTypeRow(button);
        }
    });

    const licenseTypesToggle = document.getElementById('license_types_enabled');
    const licenseTypesContent = document.getElementById('license-types-content');
    if (licenseTypesToggle && licenseTypesContent) {
        licenseTypesToggle.addEventListener('change', function() {
            licenseTypesContent.style.display = this.checked ? 'block' : 'none';
        });
    }

    const conclusionToggle = document.getElementById('conclusion_enabled');
    const conclusionContent = document.getElementById('conclusion-content');
    if (conclusionToggle && conclusionContent) {
        conclusionToggle.addEventListener('change', function() {
            conclusionContent.style.display = this.checked ? 'block' : 'none';
        });
    }

    // Partnership Section Toggle
    const partnershipToggle = document.getElementById('partnership_enabled');
    const partnershipContent = document.getElementById('partnership-content');
    if (partnershipToggle && partnershipContent) {
        partnershipToggle.addEventListener('change', function() {
            partnershipContent.style.display = this.checked ? 'block' : 'none';
        });
    }

    // Company Registration Section Toggle
    const companyRegistrationToggle = document.getElementById('company_registration_enabled');
    const companyRegistrationContent = document.getElementById('company-registration-content');
    if (companyRegistrationToggle && companyRegistrationContent) {
        companyRegistrationToggle.addEventListener('change', function() {
            companyRegistrationContent.style.display = this.checked ? 'block' : 'none';
        });
    }

    // Company Registration Items Management
    const addCompanyRegistrationBtn = document.getElementById('add-company-registration-btn');
    if (addCompanyRegistrationBtn) {
        addCompanyRegistrationBtn.addEventListener('click', addCompanyRegistrationItem);
    }

    document.addEventListener('click', function(e) {
        if (e.target.closest('.remove-company-registration-btn')) {
            removeCompanyRegistrationItem(e.target.closest('.company-registration-item'));
        }
    });
});

// Company Registration Management Functions
function addCompanyRegistrationItem() {
    const container = document.getElementById('company-registration-items-container');
    const items = container.querySelectorAll('.company-registration-item');
    const newIndex = items.length;

    const itemHtml = `
        <div class="company-registration-item border rounded p-3 mb-3" data-index="${newIndex}">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0">Registration Item #<span class="company-registration-number">${newIndex + 1}</span></h6>
                <button type="button" class="btn btn-outline-danger btn-sm remove-company-registration-btn">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="fw-bold d-block mb-1">Registration Title</label>
                    <input type="text" class="form-control" name="company_registration_items[${newIndex}][title]" placeholder="e.g., Private Limited Company Registration in Assam">
                </div>
                <div class="col-12">
                    <label class="fw-bold d-block mb-1">Link (Optional)</label>
                    <input type="text" class="form-control" name="company_registration_items[${newIndex}][link]" placeholder="Enter URL (e.g., /company-registration-assam)">
                </div>
            </div>
        </div>
    `;

    container.insertAdjacentHTML('beforeend', itemHtml);
    updateCompanyRegistrationRowNumbers();
}

function removeCompanyRegistrationItem(item) {
    item.remove();
    updateCompanyRegistrationRowNumbers();
}

function updateCompanyRegistrationRowNumbers() {
    const items = document.querySelectorAll('.company-registration-item');
    items.forEach((item, index) => {
        item.setAttribute('data-index', index);
        const numberSpan = item.querySelector('.company-registration-number');
        if (numberSpan) numberSpan.textContent = index + 1;
        
        const titleInput = item.querySelector('input[name*="[title]"]');
        const linkInput = item.querySelector('input[name*="[link]"]');
        
        if (titleInput) titleInput.name = `company_registration_items[${index}][title]`;
        if (linkInput) linkInput.name = `company_registration_items[${index}][link]`;
    });
}

// FAQ Management Functions
function addFAQItem() {
    const container = document.getElementById('faq-items-container');
    const items = container.querySelectorAll('.faq-item');
    const newIndex = items.length;

    const faqItemHtml = `
        <div class="faq-item border rounded p-3 mb-3" data-index="${newIndex}">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0">FAQ Item #<span class="faq-number">${newIndex + 1}</span></h6>
                <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeFAQItem(this)">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row">
                <div class="col-12 mb-2">
                    <label class="fw-bold d-block mb-1">Question</label>
                    <input type="text" class="form-control" name="faq_items[${newIndex}][question]" placeholder="Enter your question here...">
                </div>
                <div class="col-12">
                    <label class="fw-bold d-block mb-1">Answer</label>
                    <textarea class="form-control" name="faq_items[${newIndex}][answer]" rows="3" placeholder="Enter the answer here..."></textarea>
                </div>
            </div>
        </div>
    `;

    container.insertAdjacentHTML('beforeend', faqItemHtml);
    updateFAQNumbers();
}

function removeFAQItem(button) {
    const faqItem = button.closest('.faq-item');
    const container = document.getElementById('faq-items-container');
    const items = container.querySelectorAll('.faq-item');

    // Don't allow removing the last item
    if (items.length <= 1) {
        alert('At least one FAQ item is.');
        return;
    }

    faqItem.remove();
    updateFAQNumbers();
}

function updateFAQNumbers() {
    const container = document.getElementById('faq-items-container');
    const items = container.querySelectorAll('.faq-item');
    
    items.forEach((item, index) => {
        // Update the display number
        const numberSpan = item.querySelector('.faq-number');
        if (numberSpan) {
            numberSpan.textContent = index + 1;
        }

        // Update the data-index attribute
        item.dataset.index = index;

        // Update input names to maintain proper array indexing
        const questionInput = item.querySelector('input[name*="[question]"]');
        const answerTextarea = item.querySelector('textarea[name*="[answer]"]');
        
        if (questionInput) {
            questionInput.name = `faq_items[${index}][question]`;
        }
        if (answerTextarea) {
            answerTextarea.name = `faq_items[${index}][answer]`;
        }

        // Update remove button state (disable for first item only)
        const removeButton = item.querySelector('.btn-outline-danger');
        if (removeButton) {
            removeButton.disabled = index === 0 && items.length === 1;
        }
    });
}

// Template preview data (dynamically generated from available templates)
const templateData = @json(\App\Models\Page::getAvailableTemplates());

function updateTemplatePreview() {
    const selectedTemplate = document.getElementById('template').value;
    const template = templateData[selectedTemplate];
    
    // Show/hide template-specific sections based on selected template
    const templateSpecificSections = document.getElementById('template-specific-sections');
    if (templateSpecificSections) {
        // Show template-specific sections for default and background-map templates
        if (selectedTemplate === 'default' || selectedTemplate === 'background-map') {
            templateSpecificSections.style.display = 'block';
            templateSpecificSections.removeAttribute('aria-hidden');
            // Re-enable all form fields
            const formFields = templateSpecificSections.querySelectorAll('input:not([type="checkbox"]), textarea, select');
            formFields.forEach(field => {
                field.disabled = false;
            });
        } else {
            templateSpecificSections.style.display = 'none';
            templateSpecificSections.setAttribute('aria-hidden', 'true');
            // Disable all form fields inside to prevent validation (except checkboxes for section toggles)
            const formFields = templateSpecificSections.querySelectorAll('input:not([type="checkbox"]), textarea, select');
            formFields.forEach(field => {
                field.disabled = true;
            });
        }
    }
    
    // Remove attribute for title and content when non-default template is selected
    const titleField = document.getElementById('title');
    const contentField = document.getElementById('content');
    const titleRequired = document.getElementById('title-required');
    const contentRequired = document.getElementById('content-required');
    const isDefaultTemplate = !selectedTemplate || selectedTemplate === 'default' || selectedTemplate === 'background-map';
    
    if (titleField) {
        if (isDefaultTemplate) {
            titleField.setAttribute('required', 'required');
            if (titleRequired) titleRequired.style.display = 'inline';
        } else {
            titleField.removeAttribute('required');
            if (titleRequired) titleRequired.style.display = 'none';
        }
    }
    
    if (contentField) {
        if (isDefaultTemplate) {
            contentField.setAttribute('required', 'required');
            if (contentRequired) contentRequired.style.display = 'inline';
        } else {
            contentField.removeAttribute('required');
            if (contentRequired) contentRequired.style.display = 'none';
        }
    }
    
    if (template) {
        const previewHtml = `
            <div class="d-flex align-items-start">
                <div class="me-3">
                    <div class="bg-primary text-white rounded p-2">
                        <i class="bi bi-layout-text-window"></i>
                    </div>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-2 text-primary">${template.name}</h6>
                    <p class="mb-2 text-muted small">${template.description}</p>
                    <div class="mb-0">
                        <strong class="small text-info">Template File:</strong>
                        <span class="small text-muted">${template.file || selectedTemplate + '.blade.php'}</span>
                    </div>
                </div>
            </div>
        `;
        
        document.getElementById('template-info').innerHTML = previewHtml;
    }
    
    // Update template-specific cards visibility
    updateTemplateCards();
}

// Initialize template preview on page load
document.addEventListener('DOMContentLoaded', function() {
    updateTemplatePreview();
    initializeSlugGeneration();
    
    // Initialize FAQ functionality
    const faqToggle = document.getElementById('faq_enabled');
    if (faqToggle) {
        // Set initial state
        const faqContent = document.getElementById('faq-content');
        if (faqContent) {
            faqContent.style.display = faqToggle.checked ? 'block' : 'none';
        }
        
        // Update FAQ numbers on load
        updateFAQNumbers();
    }
});

// Content Helper Functions
function insertAtCursor(textarea, text) {
    const startPos = textarea.selectionStart;
    const endPos = textarea.selectionEnd;
    textarea.value = textarea.value.substring(0, startPos) + text + textarea.value.substring(endPos, textarea.value.length);
    textarea.selectionStart = textarea.selectionEnd = startPos + text.length;
    textarea.focus();
}

function insertImage() {
    const imageHtml = `<div class="text-center my-4">
    <img src="/storage/images/your-image.jpg" alt="Image description" class="img-fluid rounded shadow">
    <p class="mt-2 text-muted small">Image caption here</p>
</div>`;
    insertAtCursor(document.getElementById('content'), imageHtml);
}

function insertSection() {
    const sectionHtml = `<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-center mb-4">Section Title</h2>
                <p class="lead text-center">Section description or introduction text goes here.</p>
                <p>Your section content...</p>
            </div>
        </div>
    </div>
</section>`;
    insertAtCursor(document.getElementById('content'), sectionHtml);
}

function insertColumns() {
    const columnsHtml = `<div class="row my-4">
    <div class="col-md-6">
        <h4>Left Column Title</h4>
        <p>Left column content goes here. You can add text, images, or any HTML content.</p>
    </div>
    <div class="col-md-6">
        <h4>Right Column Title</h4>
        <p>Right column content goes here. Perfect for side-by-side comparisons or information.</p>
    </div>
</div>`;
    insertAtCursor(document.getElementById('content'), columnsHtml);
}

function insertButton() {
    const buttonHtml = `<div class="text-center my-4">
    <a href="#" class="btn btn-primary btn-lg">
        <i class="bi bi-arrow-right"></i> Call to Action
    </a>
</div>`;
    insertAtCursor(document.getElementById('content'), buttonHtml);
}

function insertList() {
    const listHtml = `<div class="my-4">
    <h4>List Title</h4>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><i class="bi bi-check-circle text-success me-2"></i>First item</li>
        <li class="list-group-item"><i class="bi bi-check-circle text-success me-2"></i>Second item</li>
        <li class="list-group-item"><i class="bi bi-check-circle text-success me-2"></i>Third item</li>
    </ul>
</div>`;
    insertAtCursor(document.getElementById('content'), listHtml);
}

function insertCard() {
    const cardHtml = `<div class="card my-4 shadow">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0"><i class="bi bi-info-circle"></i> Card Title</h5>
    </div>
    <div class="card-body">
        <p class="card-text">Card content goes here. Perfect for highlighting important information, testimonials, or call-out boxes.</p>
        <a href="#" class="btn btn-outline-primary">Learn More</a>
    </div>
</div>`;
    insertAtCursor(document.getElementById('content'), cardHtml);
}

// Slug generation functionality
function initializeSlugGeneration() {
    const slugField = document.getElementById('slug');
    const slugStatus = document.getElementById('slug-status');
    const slugHelp = document.getElementById('slug-help');
    const titleField = document.getElementById('title');

    if (!titleField || !slugField) return;

    // Initialize as auto-generated mode
    slugField.dataset.autoGenerated = 'true';

    // Auto-generate slug from title
    titleField.addEventListener('input', function() {
        // Only auto-generate if in auto-generated mode
        if (slugField.dataset.autoGenerated !== 'false') {
            let baseSlug = this.value
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '') // Remove special characters except words, spaces, and hyphens
                .replace(/[\s_-]+/g, '-') // Replace spaces, underscores, and multiple hyphens with single hyphen
                .replace(/^-+|-+$/g, ''); // Remove leading/trailing hyphens
            
            // Generate slug if we have valid content
            if (baseSlug && baseSlug.length >= 2) {
                // Ensure slug starts with a letter
                if (!/^[a-zA-Z]/.test(baseSlug)) {
                    baseSlug = 'page-' + baseSlug;
                }
                
                // Set the actual slug value (not just placeholder)
                slugField.value = baseSlug;
                
                // Update visual feedback
                slugStatus.style.display = 'inline';
                slugStatus.textContent = 'Auto-generated';
                slugStatus.className = 'badge bg-success ms-1';
                slugHelp.innerHTML = `URL: <code>/${baseSlug}</code><br>Auto-generated from title. You can edit it if needed.`;
            } else {
                // Clear the field if we don't have enough content
                slugField.value = '';
                slugField.placeholder = 'Leave empty to auto-generate';
                slugStatus.style.display = 'none';
                slugHelp.innerHTML = 'URL-friendly version of the title. Leave empty to auto-generate from page title.';
            }
        }
    });

    // Detect when user starts manually editing the slug
    slugField.addEventListener('focus', function() {
        // Store the original value when focused
        this.dataset.originalValue = this.value;
    });

    // Mark slug as manually edited when user types in it
    slugField.addEventListener('input', function() {
        // If user typed something, mark as custom
        this.dataset.autoGenerated = 'false';
        slugStatus.style.display = 'inline';
        slugStatus.textContent = 'Custom';
        slugStatus.className = 'badge bg-warning ms-1';
        slugHelp.innerHTML = 'Using custom slug. Clear field to auto-generate from title.';
    });

    // Reset to auto-generation when field is cleared
    slugField.addEventListener('blur', function() {
        if (!this.value.trim()) {
            this.dataset.autoGenerated = 'true';
            slugStatus.style.display = 'none';
            slugHelp.innerHTML = 'URL-friendly version of the title. Leave empty to auto-generate from page title.';
            
            // Trigger title input to regenerate slug from current title
            if (titleField.value.trim()) {
                const event = new Event('input');
                titleField.dispatchEvent(event);
            }
        }
    });
}

// Video Section Toggle and Preview
document.addEventListener('DOMContentLoaded', function() {
    const videoToggle = document.getElementById('video_enabled');
    const videoContent = document.getElementById('video-content');
    const videoFileInput = document.getElementById('video_file');
    const videoPreviewContainer = document.getElementById('video-preview-container');
    const videoPreview = document.getElementById('video-preview');
    
    if (videoToggle && videoContent) {
        videoToggle.addEventListener('change', function() {
            videoContent.style.display = this.checked ? 'block' : 'none';
        });
    }
    
    if (videoFileInput) {
        videoFileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                // Validate file size (50MB max)
                const maxSize = 50 * 1024 * 1024; // 50MB in bytes
                if (file.size > maxSize) {
                    alert('Video file size must be less than 50MB');
                    this.value = '';
                    return;
                }
                
                // Validate file type
                const validTypes = ['video/mp4', 'video/webm', 'video/ogg'];
                if (!validTypes.includes(file.type)) {
                    alert('Please select a valid video file (MP4, WebM, or OGG)');
                    this.value = '';
                    return;
                }
                
                // Show preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    videoPreview.src = e.target.result;
                    videoPreviewContainer.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    }
});

function removeVideoFile() {
    const videoFileInput = document.getElementById('video_file');
    const videoPreviewContainer = document.getElementById('video-preview-container');
    const videoPreview = document.getElementById('video-preview');
    
    if (videoFileInput) {
        videoFileInput.value = '';
    }
    if (videoPreview) {
        videoPreview.src = '';
    }
    if (videoPreviewContainer) {
        videoPreviewContainer.style.display = 'none';
    }
}

</script>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- CKEditor 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

<style>
/* CKEditor Custom Styling */
.ck-editor__editable {
    min-height: 300px;
    max-height: 600px;
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
// Initialize CKEditor 5 for multiple content fields
const editors = {};
const editorFields = [
    'intro_content',
    'what_content',
    'what_additional_content',
    'applicability_content',
    'service_content',
    'report_components_header_description',
    'report_components_content',
    'procedure_steps_header_description',
    'procedure_steps_content',
    'checklist_header_description',
    'challenges_description',
    'challenges_header_description',
    'fees_header_description',
    'fees_content',
    'time_taken_content',
    'fees_comparison_subtitle',
    'benefits_content',
    'partner_services_description',
    'partnership_content',
    'company_registration_content',
    'license_types_description',
    'conclusion_content'
];

const editorConfig = {
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
    placeholder: 'Write your content here... Use the toolbar above to format text, add images, tables, and more.'
};

// Function to initialize CKEditor
function initializeCKEditors() {
    editorFields.forEach(fieldId => {
        const element = document.querySelector(`#${fieldId}`);
        if (element && !editors[fieldId]) {
            // Check if element is not already initialized
            ClassicEditor
                .create(element, editorConfig)
                .then(editor => {
                    editors[fieldId] = editor;
                    console.log(`CKEditor initialized successfully for ${fieldId}`);
                    
                    // Sync editor content with textarea on change
                    editor.model.document.on('change:data', () => {
                        const content = editor.getData();
                        element.value = content;
                    });
                })
                .catch(error => {
                    console.error(`CKEditor initialization error for ${fieldId}:`, error);
                });
        }
    });
}

// Initialize editors when page is fully loaded
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(initializeCKEditors, 1000);
    });
} else {
    // DOM already loaded
    setTimeout(initializeCKEditors, 1000);
}

// Ensure all editor content is saved before form submission
document.addEventListener('DOMContentLoaded', function() {
    const pageForm = document.querySelector('form');
    if (pageForm) {
        pageForm.addEventListener('submit', function(e) {
            editorFields.forEach(fieldId => {
                if (editors[fieldId]) {
                    const content = editors[fieldId].getData();
                    const element = document.querySelector(`#${fieldId}`);
                    if (element) {
                        element.value = content;
                    }
                }
            });
        });
    }
    
    // Initialize template-specific cards visibility
    updateTemplateCards();
});

// Toggle map section visibility
document.getElementById('map_enabled').addEventListener('change', function() {
    const mapContent = document.getElementById('map-content');
    if (this.checked) {
        mapContent.style.display = 'block';
    } else {
        mapContent.style.display = 'none';
    }
});

// Toggle map type options
function toggleMapOptions() {
    const mapType = document.getElementById('map_type').value;
    const coordinatesOption = document.getElementById('coordinates-option');
    const iframeOption = document.getElementById('iframe-option');
    
    if (mapType === 'iframe') {
        coordinatesOption.style.display = 'none';
        iframeOption.style.display = 'block';
    } else {
        coordinatesOption.style.display = 'block';
        iframeOption.style.display = 'none';
    }
}

// Show/hide background image and map sections based on selected template
function updateTemplateCards() {
    const template = document.getElementById('template').value;
    const backgroundImageSection = document.getElementById('background-image-section');
    const mapSection = document.getElementById('map-section');
    
    if (template === 'background-map') {
        backgroundImageSection.style.display = 'block';
        mapSection.style.display = 'block';
    } else {
        backgroundImageSection.style.display = 'none';
        mapSection.style.display = 'none';
    }
}

// Preview background image
document.getElementById('hero_background_image').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('hero_background_preview');
            const img = preview.querySelector('img');
            img.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});
</script>

@endsection

