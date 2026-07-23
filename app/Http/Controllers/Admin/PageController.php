<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageCategory;
use App\Services\TemplateService;
use App\Services\SeoMetaService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    protected $seoService;

    public function __construct(SeoMetaService $seoService)
    {
        $this->seoService = $seoService;
    }
    /**
     * Display a listing of the pages.
     */
    public function index(Request $request)
    {
        $query = Page::with('categories')->latest();
        
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        
        if ($request->filled('category')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('page_categories.id', $request->category);
            });
        }
        
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('content', 'like', '%' . $request->search . '%');
            });
        }
        
        $pages = $query->paginate(15);
        
        
        $categories = PageCategory::all();
        
        return view('admin.pages.index', compact('pages', 'categories'));
    }

    /**
     * Show the form for creating a new page.
     */
    public function create()
    {
        $categories = PageCategory::all();
        return view('admin.pages.create', compact('categories'));
    }

    /**
     * Store a newly created page in storage.
     */
    public function store(Request $request)
    {
        // Convert checkbox values to boolean before validation
        $checkboxFields = [
            'intro_enabled',
            'what_enabled',
            'applicability_enabled',
            'services_enabled',
            'report_components_enabled',
            'procedure_steps_enabled',
            'checklist_enabled',
            'challenges_enabled',
            'fees_enabled',
            'time_taken_enabled',
            'benefits_enabled',
            'partner_services_enabled',
            'conclusion_enabled',
            'partnership_enabled',
            'company_registration_enabled',
            'video_enabled',
            'faq_enabled'
        ];

        foreach ($checkboxFields as $field) {
            if ($request->has($field)) {
                $request->merge([$field => $request->input($field) ? true : false]);
            }
        }

        // Make fields optional for non-default templates (default and background-map use all sections)
        $templatesWithSections = ['default', 'background-map'];
        $isDefaultTemplate = !$request->template || in_array($request->template, $templatesWithSections);
        $titleRequired = $isDefaultTemplate ? 'required' : 'nullable';
        $contentRequired = $isDefaultTemplate ? 'required' : 'nullable';
        
        $request->validate([
            'directry_label'=>'nullable|string',
            'title' => $titleRequired . '|string|max:255',
            // 'slug' => 'nullable|string|max:255',
            'slug' => ['required',Rule::unique('pages')->where('directry_label', $request->directry_label)->whereNull('deleted_at'),],
            'content' => $contentRequired . '|string',
            'excerpt' => 'nullable|string',
            'template' => TemplateService::getValidationRule(),
            'sort_order' => 'nullable|integer|min:0',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
            'intro_enabled' => 'nullable|boolean',
            'intro_title' => 'nullable|string|max:255',
            'intro_content' => 'nullable|string',
            'services_enabled' => 'nullable|boolean',
            'services_items' => 'nullable|array',
            'services_items.*.title' => 'nullable|string|max:255',
            'services_items.*.description' => 'nullable|string',
            'services_items.*.image' => 'nullable|string|max:255',
            'services_note' => 'nullable|string',
            'service_content' => 'nullable|string',
            'report_components_enabled' => 'nullable|boolean',
            'report_components_items' => 'nullable|array',
            'report_components_items.*.title' => 'nullable|string|max:255',
            'report_components_items.*.description' => 'nullable|string',
            'report_components_items.*.image' => 'nullable|string|max:255',
            'report_components_content' => 'nullable|string',
            'procedure_steps_enabled' => 'nullable|boolean',
            'procedure_steps_items' => 'nullable|array',
            'procedure_steps_items.*.step_number' => 'nullable|string|max:50',
            'procedure_steps_items.*.title' => 'nullable|string|max:255',
            'procedure_steps_items.*.description' => 'nullable|string',
            'procedure_steps_items.*.image' => 'nullable|string|max:255',
            'procedure_steps_items.*.alignment' => 'nullable|string|in:left,right',
            'procedure_steps_content' => 'nullable|string',
            'checklist_enabled' => 'nullable|boolean',
            'checklist_items' => 'nullable|array',
            'checklist_items.*.text' => 'nullable|string|max:500',
            'benefits_enabled' => 'nullable|boolean',
            'benefits_items' => 'nullable|array',
            'benefits_items.*.icon' => 'nullable|string|max:255',
            'benefits_items.*.title' => 'nullable|string|max:255',
            'benefits_items.*.description' => 'nullable|string|max:500',
            'benefits_content' => 'nullable|string',
            'partner_services_enabled' => 'nullable|boolean',
            'partner_services_items' => 'nullable|array',
            'partner_services_items.*.icon' => 'nullable|string|max:255',
            'partner_services_items.*.title' => 'nullable|string|max:255',
            'partner_services_items.*.description' => 'nullable|string|max:500',
            'video_enabled' => 'nullable|boolean',
            'video_title' => 'nullable|string|max:255',
            'video_description' => 'nullable|string',
            'video_file' => 'nullable|file|mimes:mp4,webm,ogg|max:51200',
            'faq_enabled' => 'nullable|boolean',
            'faq_title' => 'nullable|string|max:255',
            'faq_subtitle' => 'nullable|string',
            'faq_items' => 'nullable|array',
            'faq_items.*.question' => 'nullable|string|max:500',
            'faq_items.*.answer' => 'nullable|string',
            'company_registration_enabled' => 'nullable|boolean',
            'company_registration_items' => 'nullable|array',
            'company_registration_items.*.title' => 'nullable|string|max:255',
            'company_registration_content' => 'nullable|string',
            'fees_content' => 'nullable|string',
            'partnership_content' => 'nullable|string',
            // Background image fields
            'hero_background_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'hero_background_overlay_color' => 'nullable|string|max:30',
            'hero_background_overlay_opacity' => 'nullable|integer|min:0|max:100',
            // Map section fields
            'map_enabled' => 'nullable|boolean',
            'map_title' => 'nullable|string|max:100',
            'map_description' => 'nullable|string',
            'map_type' => 'nullable|in:google,openstreetmap,iframe',
            'map_embed_code' => 'nullable|string',
            'map_latitude' => 'nullable|string|max:20',
            'map_longitude' => 'nullable|string|max:20',
            'map_zoom_level' => 'nullable|integer|min:1|max:20',
            'map_marker_title' => 'nullable|string|max:100',
            'map_marker_description' => 'nullable|string'
        ]);

        $data = $request->all();
        
        // Handle action button (draft/publish override)
        if ($request->has('action')) {
            if ($request->action === 'draft') {
                $data['status'] = 'draft';
            } elseif ($request->action === 'publish') {
                $data['status'] = 'published';
            }
        }
        
        // Clean and validate slug
        $slug = trim($data['slug'] ?? '');
        
        // If slug is empty, contains invalid characters, or looks like Lorem ipsum
        if (empty($slug) || $this->isLoremIpsumSlug($slug) || $this->hasInvalidSlugCharacters($slug)) {
            // For non-default templates, generate slug from template name if title is empty
            if (!$isDefaultTemplate && empty($data['title'])) {
                $data['slug'] = Page::generateUniqueSlug($data['template'] . '-page');
            } else {
                // Let the model's boot method handle slug generation
                unset($data['slug']);
            }
        } else {
            // Clean the provided slug
            $data['slug'] = Str::slug($slug);
            
            // Ensure it's unique
            $data['slug'] = Page::generateUniqueSlug($data['slug']);
        }
        
        // Set default title for non-default templates if empty
        if (!$isDefaultTemplate && empty($data['title'])) {
            $data['title'] = ucfirst($data['template']) . ' Page';
        }
        
        // Set published_at if status is published and no date is set
        if ($data['status'] === 'published' && empty($data['published_at'])) {
            $data['published_at'] = now();
        }
        
        // Set default template if not provided
        if (empty($data['template'])) {
            $data['template'] = 'default';
        }

        // Process Intro Section data
        $data['intro_enabled'] = $request->has('intro_enabled') ? true : false;
        if (!$data['intro_enabled']) {
            $data['intro_title'] = null;
            $data['intro_content'] = null;
        }

        // Process What Section data
        $data['what_enabled'] = $request->has('what_enabled') ? true : false;
        if (!$data['what_enabled']) {
            $data['what_title'] = null;
            $data['what_content'] = null;
            $data['what_image'] = null;
            $data['what_additional_content'] = null;
        } else {
            // Handle What Section image upload
            if ($request->hasFile('what_image_file')) {
                $image = $request->file('what_image_file');
                $imageName = time() . '_what_' . Str::slug($request->title ?? 'image') . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('images/what-section', $imageName, 'public');
                $data['what_image'] = $imagePath;
            }
        }

        // Process Applicability Section data
        $data['applicability_enabled'] = $request->has('applicability_enabled') ? true : false;
        if (!$data['applicability_enabled']) {
            $data['applicability_title'] = null;
            $data['applicability_content'] = null;
        }

        // Process Services Section data
        $data['services_enabled'] = $request->has('services_enabled') ? true : false;
        
        if ($data['services_enabled'] && $request->has('services_items') && is_array($request->services_items)) {
            $servicesItems = [];
            
            foreach ($request->services_items as $index => $item) {
                if (!empty($item['title']) && !empty($item['description'])) {
                    $serviceData = [
                        'title' => $item['title'],
                        'description' => $item['description'],
                        'image' => $item['image'] ?? ''
                    ];
                    
                    // Handle image upload for this service item
                    if ($request->hasFile("service_image_$index")) {
                        $image = $request->file("service_image_$index");
                        $imageName = time() . '_' . $index . '_' . Str::slug($item['title']) . '.' . $image->getClientOriginalExtension();
                        $imagePath = $image->storeAs('images/services', $imageName, 'public');
                        $serviceData['image'] = $imagePath;
                    }
                    
                    $servicesItems[] = $serviceData;
                    
                    // Limit to 6 items
                    if (count($servicesItems) >= 6) {
                        break;
                    }
                }
            }
            
            $data['services_items'] = $servicesItems;
        } else {
            $data['services_items'] = null;
        }

        // Process Services Section Note
        if (!$data['services_enabled']) {
            $data['services_note'] = null;
            $data['service_content'] = null;
        }

        // Process Report Format Header Section data
        if (!$request->has('report_components_enabled') || !$request->report_components_enabled) {
            $data['report_format_header_title'] = null;
            $data['report_format_header_description'] = null;
            $data['report_format_header_button1_text'] = null;
            $data['report_format_header_button1_link'] = null;
            $data['report_format_header_button2_text'] = null;
            $data['report_format_header_button2_link'] = null;
        }

        // Process Report Components Section data
        $data['report_components_enabled'] = $request->has('report_components_enabled') ? true : false;
        
        if ($data['report_components_enabled'] && $request->has('report_components_items') && is_array($request->report_components_items)) {
            $reportItems = [];
            
            foreach ($request->report_components_items as $index => $item) {
                if (!empty($item['title']) && !empty($item['description'])) {
                    $reportData = [
                        'title' => $item['title'],
                        'description' => $item['description'],
                        'image' => $item['image'] ?? ''
                    ];
                    
                    // Handle image upload for this report component item
                    if ($request->hasFile("report_component_image_$index")) {
                        $image = $request->file("report_component_image_$index");
                        $imageName = time() . '_' . $index . '_' . Str::slug($item['title']) . '.' . $image->getClientOriginalExtension();
                        $imagePath = $image->storeAs('images/report-components', $imageName, 'public');
                        $reportData['image'] = $imagePath;
                    }
                    
                    $reportItems[] = $reportData;
                    
                    // Limit to 6 items
                    if (count($reportItems) >= 6) {
                        break;
                    }
                }
            }
            
            $data['report_components_items'] = $reportItems;
        } else {
            $data['report_components_items'] = null;
        }

        // Nullify report components content when disabled
        if (!$data['report_components_enabled']) {
            $data['report_components_content'] = null;
        }

        // Process Procedure Steps Section data
        $data['procedure_steps_enabled'] = $request->has('procedure_steps_enabled') ? true : false;
        
        if ($data['procedure_steps_enabled'] && $request->has('procedure_steps_items') && is_array($request->procedure_steps_items)) {
            $procedureItems = [];
            
            foreach ($request->procedure_steps_items as $index => $item) {
                if (!empty($item['title']) && !empty($item['description'])) {
                    $procedureData = [
                        'step_number' => $item['step_number'] ?? 'STEP ' . ($index + 1),
                        'title' => $item['title'],
                        'description' => $item['description'],
                        'image' => $item['image'] ?? '',
                        'alignment' => $item['alignment'] ?? ($index % 2 == 0 ? 'left' : 'right')
                    ];
                    
                    // Handle image upload for this procedure step item
                    if ($request->hasFile("procedure_step_image_$index")) {
                        $image = $request->file("procedure_step_image_$index");
                        $imageName = time() . '_' . $index . '_' . Str::slug($item['title']) . '.' . $image->getClientOriginalExtension();
                        $imagePath = $image->storeAs('images/procedure-steps', $imageName, 'public');
                        $procedureData['image'] = $imagePath;
                    }
                    
                    $procedureItems[] = $procedureData;
                }
            }
            
            $data['procedure_steps_items'] = $procedureItems;
        } else {
            $data['procedure_steps_items'] = null;
        }

        // Nullify procedure steps content when disabled
        if (!$data['procedure_steps_enabled']) {
            $data['procedure_steps_content'] = null;
        }

        // Process Checklist items
        $data['checklist_enabled'] = $request->has('checklist_enabled') ? true : false;
        
        if ($data['checklist_enabled'] && $request->has('checklist_items') && is_array($request->checklist_items)) {
            // Filter out empty checklist items
            $checklistItems = array_filter($request->checklist_items, function ($item) {
                return !empty($item['text']);
            });
            
            // Re-index the array to ensure proper numbering
            $data['checklist_items'] = array_values($checklistItems);
        } else {
            $data['checklist_items'] = null;
        }

        // Process Benefits items
        $data['benefits_enabled'] = $request->has('benefits_enabled') ? true : false;
        
        if ($data['benefits_enabled'] && $request->has('benefits_items') && is_array($request->benefits_items)) {
            $benefitsItems = [];
            
            foreach ($request->benefits_items as $index => $item) {
                if (!empty($item['title']) || !empty($item['description'])) {
                    $benefitData = [
                        'title' => $item['title'] ?? '',
                        'description' => $item['description'] ?? '',
                        'icon' => $item['icon'] ?? null
                    ];
                    
                    // Handle image upload for this benefit
                    if ($request->hasFile("benefit_icon_$index")) {
                        $image = $request->file("benefit_icon_$index");
                        $imageName = time() . '_' . $index . '_' . Str::slug($item['title']) . '.' . $image->getClientOriginalExtension();
                        $imagePath = $image->storeAs('images/benefits', $imageName, 'public');
                        $benefitData['icon'] = $imagePath;
                    }
                    
                    $benefitsItems[] = $benefitData;
                }
            }
            
            $data['benefits_items'] = $benefitsItems;
        } else {
            $data['benefits_items'] = null;
        }

        // Nullify benefits content when disabled
        if (!$data['benefits_enabled']) {
            $data['benefits_content'] = null;
        }

        // Process Partner Services items
        $data['partner_services_enabled'] = $request->has('partner_services_enabled') ? true : false;
        
        if ($data['partner_services_enabled'] && $request->has('partner_services_items') && is_array($request->partner_services_items)) {
            $partnerServicesItems = [];
            
            foreach ($request->partner_services_items as $index => $item) {
                if (!empty($item['title']) || !empty($item['description'])) {
                    $serviceData = [
                        'title' => $item['title'] ?? '',
                        'description' => $item['description'] ?? '',
                        'icon' => $item['icon'] ?? null
                    ];
                    
                    // Handle image upload for this partner service
                    if ($request->hasFile("partner_service_icon_$index")) {
                        $image = $request->file("partner_service_icon_$index");
                        $imageName = time() . '_' . $index . '_' . Str::slug($item['title']) . '.' . $image->getClientOriginalExtension();
                        $imagePath = $image->storeAs('images/partner-services', $imageName, 'public');
                        $serviceData['icon'] = $imagePath;
                    }
                    
                    $partnerServicesItems[] = $serviceData;
                }
            }
            
            $data['partner_services_items'] = $partnerServicesItems;
        } else {
            $data['partner_services_items'] = null;
        }

        // Nullify partner services fields when disabled
        if (!$data['partner_services_enabled']) {
            $data['partner_services_title'] = null;
            $data['partner_services_description'] = null;
            $data['partner_services_items'] = null;
            $data['partner_services_note'] = null;
        }

        // Process Challenges Section data
        $data['challenges_enabled'] = $request->has('challenges_enabled') ? true : false;
        
        if ($data['challenges_enabled'] && $request->has('challenges_items') && is_array($request->challenges_items)) {
            // Filter out empty challenge items
            $challengesItems = array_filter($request->challenges_items, function ($item) {
                return !empty($item['challenge']) || !empty($item['solution']);
            });
            
            // Re-index the array
            $data['challenges_items'] = array_values($challengesItems);
        } else {
            $data['challenges_items'] = null;
        }

        // Process Challenges Note
        if (!$data['challenges_enabled']) {
            $data['challenges_note'] = null;
        }

        // Process Fees Section data
        $data['fees_enabled'] = $request->has('fees_enabled') ? true : false;
        
        if ($data['fees_enabled'] && $request->has('fees_items') && is_array($request->fees_items)) {
            // Filter out empty fee items
            $feesItems = array_filter($request->fees_items, function ($item) {
                return !empty($item['item']) || !empty($item['cost']);
            });
            
            // Re-index the array
            $data['fees_items'] = array_values($feesItems);
        } else {
            $data['fees_items'] = null;
        }

        // Process Fees Note and Content
        if (!$data['fees_enabled']) {
            $data['fees_note'] = null;
            $data['fees_content'] = null;
        }

        // Process Time Taken Section data
        $data['time_taken_enabled'] = $request->has('time_taken_enabled') ? true : false;
        if (!$data['time_taken_enabled']) {
            $data['time_taken_title'] = null;
            $data['time_taken_content'] = null;
        }

        // Process Benefits Header Image
        if ($request->hasFile('benefits_header_image_file')) {
            $image = $request->file('benefits_header_image_file');
            $imageName = time() . '_benefits_header_' . Str::slug($request->title ?? 'image') . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images/benefits-header', $imageName, 'public');
            $data['benefits_header_image'] = $imagePath;
        }

        // Process Conclusion Section
        $data['conclusion_enabled'] = $request->has('conclusion_enabled') ? true : false;
        if (!$data['conclusion_enabled']) {
            $data['conclusion_title'] = null;
            $data['conclusion_content'] = null;
        }

        // Process Partnership Section
        $data['partnership_enabled'] = $request->has('partnership_enabled') ? true : false;
        
        // Handle partnership image upload
        if ($request->hasFile('partnership_image_file')) {
            $image = $request->file('partnership_image_file');
            $imageName = time() . '_partnership_' . Str::slug($request->title ?? 'image') . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images/partnership', $imageName, 'public');
            $data['partnership_image'] = $imagePath;
        }

        if (!$data['partnership_enabled']) {
            $data['partnership_image'] = null;
            $data['partnership_title'] = null;
            $data['partnership_services'] = null;
            $data['partnership_button_text'] = null;
            $data['partnership_button_link'] = null;
            $data['partnership_content'] = null;
        }

        // Process Company Registration Section
        $data['company_registration_enabled'] = $request->has('company_registration_enabled') ? true : false;
        
        if ($data['company_registration_enabled'] && $request->has('company_registration_items') && is_array($request->company_registration_items)) {
            // Filter out empty items
            $companyRegItems = array_filter($request->company_registration_items, function ($item) {
                return !empty($item['title']);
            });
            
            // Re-index the array
            $data['company_registration_items'] = array_values($companyRegItems);
        } else {
            $data['company_registration_items'] = null;
        }

        if (!$data['company_registration_enabled']) {
            $data['company_registration_title'] = null;
            $data['company_registration_items'] = null;
        }

        // Process Video Section data
        $data['video_enabled'] = $request->has('video_enabled') ? true : false;
        
        if ($data['video_enabled'] && $request->hasFile('video_file')) {
            $video = $request->file('video_file');
            $videoName = time() . '_video_' . Str::slug($request->title ?? 'video') . '.' . $video->getClientOriginalExtension();
            $videoPath = $video->storeAs('videos', $videoName, 'public');
            $data['video_file'] = $videoPath;
        }
        
        if (!$data['video_enabled']) {
            $data['video_title'] = null;
            $data['video_description'] = null;
            $data['video_file'] = null;
        }

        // Process FAQ data
        $data['faq_enabled'] = $request->has('faq_enabled') ? true : false;
        
        if ($data['faq_enabled'] && $request->has('faq_items') && is_array($request->faq_items)) {
            // Filter out empty FAQ items
            $faqItems = array_filter($request->faq_items, function ($item) {
                return !empty($item['question']) && !empty($item['answer']);
            });
            
            // Re-index the array to ensure proper numbering
            $data['faq_items'] = array_values($faqItems);
        } else {
            $data['faq_items'] = null;
        }

        // Handle hero background image upload (for background-map template)
        if ($request->hasFile('hero_background_image')) {
            $image = $request->file('hero_background_image');
            $imageName = time() . '_hero_bg_' . Str::slug($request->title ?? 'background') . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images/hero-backgrounds', $imageName, 'public');
            $data['hero_background_image'] = $imagePath;
        }

        // Process map section data
        $data['map_enabled'] = $request->has('map_enabled') ? true : false;
        if (!$data['map_enabled']) {
            $data['map_title'] = null;
            $data['map_description'] = null;
            $data['map_type'] = 'google';
            $data['map_embed_code'] = null;
            $data['map_latitude'] = null;
            $data['map_longitude'] = null;
            $data['map_zoom_level'] = 15;
            $data['map_marker_title'] = null;
            $data['map_marker_description'] = null;
        }

        $page = Page::create($data);

        // Handle SEO Meta
        if ($request->has('seo')) {
            $this->seoService->updateOrCreate($page, $request->input('seo'));
        }

        return redirect()->route('admin.pages.index')
                        ->with('success', 'Page created successfully.');
    }

    /**
     * Display the specified page.
     */
    public function show(Page $page)
    {
        $page->load('categories');
        return view('admin.pages.show', compact('page'));
    }


    /**
     * Show the form for editing the specified page.
     */
    public function edit(Page $page)
    {
        $categories = PageCategory::all();
        $page->load('categories');
        return view('admin.pages.edit', compact('page', 'categories'));
    }

    /**
     * Update the specified page in storage.
     */
    public function update(Request $request, Page $page)
    {
        // Convert checkbox values to boolean before validation
        $checkboxFields = [
            'intro_enabled',
            'services_enabled',
            'report_components_enabled',
            'procedure_steps_enabled',
            'checklist_enabled',
            'benefits_enabled',
            'fees_comparison_enabled',
            'partner_services_enabled',
            'video_enabled',
            'faq_enabled',
            'remove_image'
        ];

        foreach ($checkboxFields as $field) {
            if ($request->has($field)) {
                $request->merge([$field => $request->input($field) ? true : false]);
            }
        }

        // Make fields optional for non-default templates (default and background-map use all sections)
        $templatesWithSections = ['default', 'background-map'];
        $isDefaultTemplate = !$request->template || in_array($request->template, $templatesWithSections);
        $titleRequired = $isDefaultTemplate ? 'required' : 'nullable';
        $contentRequired = $isDefaultTemplate ? 'required' : 'nullable';
        // |unique:pages,slug,
        $request->validate([
            'title' => $titleRequired . '|string|max:255',
            // 'slug' => 'nullable|string|max:255',
            'slug' => ['required',Rule::unique('pages')->where('directry_label', $request->directry_label)->whereNull('deleted_at')->ignore($page->id),],
       
            'content' => $contentRequired . '|string',
            'excerpt' => 'nullable|string',
            'template' => TemplateService::getValidationRule(),
            'featured_image' => 'nullable|image|max:2048',
            'sort_order' => 'nullable|integer|min:0',
            'remove_image' => 'nullable|boolean',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
            'categories' => 'array',
            'categories.*' => 'exists:page_categories,id',
            'intro_enabled' => 'nullable|boolean',
            'intro_title' => 'nullable|string|max:255',
            'intro_content' => 'nullable|string',
            'services_enabled' => 'nullable|boolean',
            'services_items' => 'nullable|array',
            'services_items.*.title' => 'nullable|string|max:255',
            'services_items.*.description' => 'nullable|string',
            'services_items.*.image' => 'nullable|string|max:255',
            'services_note' => 'nullable|string',
            'service_content' => 'nullable|string',
            'report_components_enabled' => 'nullable|boolean',
            'report_components_items' => 'nullable|array',
            'report_components_items.*.title' => 'nullable|string|max:255',
            'report_components_items.*.description' => 'nullable|string',
            'report_components_items.*.image' => 'nullable|string|max:255',
            'procedure_steps_enabled' => 'nullable|boolean',
            'procedure_steps_items' => 'nullable|array',
            'procedure_steps_items.*.step_number' => 'nullable|string|max:50',
            'procedure_steps_items.*.title' => 'nullable|string|max:255',
            'procedure_steps_items.*.description' => 'nullable|string',
            'procedure_steps_items.*.image' => 'nullable|string|max:255',
            'procedure_steps_items.*.alignment' => 'nullable|string|in:left,right',
            'checklist_enabled' => 'nullable|boolean',
            'checklist_items' => 'nullable|array',
            'checklist_items.*.text' => 'nullable|string|max:500',
            'benefits_enabled' => 'nullable|boolean',
            'benefits_items' => 'nullable|array',
            'benefits_items.*.icon' => 'nullable|string|max:255',
            'benefits_items.*.title' => 'nullable|string|max:255',
            'benefits_items.*.description' => 'nullable|string|max:500',
            'fees_comparison_enabled' => 'nullable|boolean',
            'fees_comparison_title' => 'nullable|string|max:255',
            'fees_comparison_subtitle' => 'nullable|string',
            'fees_comparison_rows' => 'nullable|array',
            'fees_comparison_rows.*.feature' => 'nullable|string|max:255',
            'fees_comparison_rows.*.stock_audit' => 'nullable|string',
            'fees_comparison_rows.*.internal_control' => 'nullable|string',
            'fees_comparison_note' => 'nullable|string',
            'partner_services_enabled' => 'nullable|boolean',
            'partner_services_items' => 'nullable|array',
            'partner_services_items.*.icon' => 'nullable|string|max:255',
            'partner_services_items.*.title' => 'nullable|string|max:255',
            'partner_services_items.*.description' => 'nullable|string|max:500',
            'video_enabled' => 'nullable|boolean',
            'video_title' => 'nullable|string|max:255',
            'video_description' => 'nullable|string',
            'video_file' => 'nullable|file|mimes:mp4,webm,ogg|max:51200',
            'remove_video' => 'nullable|boolean',
            'faq_enabled' => 'nullable|boolean',
            'faq_title' => 'nullable|string|max:255',
            'faq_subtitle' => 'nullable|string',
            'faq_items' => 'nullable|array',
            'faq_items.*.question' => 'nullable|string|max:500',
            'faq_items.*.answer' => 'nullable|string',
            'report_components_content' => 'nullable|string',
            'procedure_steps_content' => 'nullable|string',
            'benefits_content' => 'nullable|string',
            'company_registration_content' => 'nullable|string',
            'fees_content' => 'nullable|string'
        ]);

        $data = $request->all();
        
        // Handle action button (draft/publish override)
        if ($request->has('action')) {
            if ($request->action === 'draft') {
                $data['status'] = 'draft';
            } elseif ($request->action === 'publish') {
                $data['status'] = 'published';
            }
        }
        
        // Set default title for non-default templates if empty
        if (!$isDefaultTemplate && empty($data['title'])) {
            $data['title'] = ucfirst($data['template']) . ' Page';
        }
        
        // Clean and validate slug
        $slug = trim($data['slug'] ?? '');
        
        // If slug is empty, contains invalid characters, or looks like Lorem ipsum
        if (empty($slug) || $this->isLoremIpsumSlug($slug) || $this->hasInvalidSlugCharacters($slug)) {
            // For non-default templates, generate slug from template name if title is default
            if (!$isDefaultTemplate && empty($request->title)) {
                $data['slug'] = Page::generateUniqueSlug($data['template'] . '-page', $page->id);
            } else {
                // Generate a new slug from title
                $data['slug'] = Page::generateUniqueSlug($data['title'], $page->id);
            }
        } else {
            // Clean the provided slug
            $data['slug'] = Str::slug($slug);
            
            // Ensure it's unique
            $data['slug'] = Page::generateUniqueSlug($data['slug'], $page->id);
        }
        
        // Set published_at if status is published and no date is set
        if ($data['status'] === 'published' && empty($data['published_at'])) {
            $data['published_at'] = now();
        }
        
        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($page->featured_image && \Storage::disk('public')->exists($page->featured_image)) {
                \Storage::disk('public')->delete($page->featured_image);
            }
            
            $image = $request->file('featured_image');
            $imageName = time() . '_' . Str::slug($data['title']) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images/pages', $imageName, 'public');
            $data['featured_image'] = $imagePath;
        }
        
        // Handle image removal
        if ($request->has('remove_image') && $request->remove_image) {
            if ($page->featured_image && \Storage::disk('public')->exists($page->featured_image)) {
                \Storage::disk('public')->delete($page->featured_image);
            }
            $data['featured_image'] = null;
        }
        
        // Handle hero background image upload (for background-map template)
        if ($request->hasFile('hero_background_image')) {
            // Delete old background image if exists
            if ($page->hero_background_image && \Storage::disk('public')->exists($page->hero_background_image)) {
                \Storage::disk('public')->delete($page->hero_background_image);
            }
            
            $image = $request->file('hero_background_image');
            $imageName = time() . '_hero_bg_' . Str::slug($data['title'] ?? 'background') . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images/hero-backgrounds', $imageName, 'public');
            $data['hero_background_image'] = $imagePath;
        }
        
        // Process Map Section data (for background-map template)
        $data['map_enabled'] = $request->has('map_enabled') ? true : false;
        if (!$data['map_enabled']) {
            // Clear all map-related fields when map is disabled
            $data['map_title'] = null;
            $data['map_description'] = null;
            $data['map_type'] = 'google';
            $data['map_embed_code'] = null;
            $data['map_latitude'] = null;
            $data['map_longitude'] = null;
            $data['map_zoom_level'] = 15;
            $data['map_marker_title'] = null;
            $data['map_marker_description'] = null;
        }
        
        // Set default template if not provided
        if (empty($data['template'])) {
            $data['template'] = 'default';
        }

        // Process Intro Section data
        $data['intro_enabled'] = $request->has('intro_enabled') ? true : false;
        if (!$data['intro_enabled']) {
            $data['intro_title'] = null;
            $data['intro_content'] = null;
        }

        // Process What Section data
        $data['what_enabled'] = $request->has('what_enabled') ? true : false;
        if (!$data['what_enabled']) {
            $data['what_title'] = null;
            $data['what_content'] = null;
            $data['what_image'] = null;
        } else {
            // Handle What Section image upload
            if ($request->hasFile('what_image_file')) {
                // Delete old image if exists
                if ($page->what_image && \Storage::disk('public')->exists($page->what_image)) {
                    \Storage::disk('public')->delete($page->what_image);
                }
                
                $image = $request->file('what_image_file');
                $imageName = time() . '_what_' . Str::slug($request->title ?? 'image') . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('images/what-section', $imageName, 'public');
                $data['what_image'] = $imagePath;
            }
        }

        // Process Services Section data
        $data['services_enabled'] = $request->has('services_enabled') ? true : false;
        
        if ($data['services_enabled'] && $request->has('services_items') && is_array($request->services_items)) {
            $servicesItems = [];
            
            foreach ($request->services_items as $index => $item) {
                if (!empty($item['title']) && !empty($item['description'])) {
                    $serviceData = [
                        'title' => $item['title'],
                        'description' => $item['description'],
                        'image' => $item['image'] ?? ''
                    ];
                    
                    // Handle image removal
                    if (isset($item['remove_image']) && $item['remove_image'] == '1') {
                        if (!empty($serviceData['image']) && \Storage::disk('public')->exists($serviceData['image'])) {
                            \Storage::disk('public')->delete($serviceData['image']);
                        }
                        $serviceData['image'] = '';
                    }
                    
                    // Handle new image upload for this service item
                    if ($request->hasFile("service_image_$index")) {
                        // Delete old image if exists
                        if (!empty($serviceData['image']) && \Storage::disk('public')->exists($serviceData['image'])) {
                            \Storage::disk('public')->delete($serviceData['image']);
                        }
                        
                        $image = $request->file("service_image_$index");
                        $imageName = time() . '_' . $index . '_' . Str::slug($item['title']) . '.' . $image->getClientOriginalExtension();
                        $imagePath = $image->storeAs('images/services', $imageName, 'public');
                        $serviceData['image'] = $imagePath;
                    }
                    
                    $servicesItems[] = $serviceData;
                    
                    // Limit to 6 items
                    if (count($servicesItems) >= 6) {
                        break;
                    }
                }
            }
            
            $data['services_items'] = $servicesItems;
        } else {
            $data['services_items'] = null;
        }

        // Process Services Section Note and Content
        if (!$data['services_enabled']) {
            $data['services_note'] = null;
            $data['service_content'] = null;
        }

        // Process Report Components Section data
        $data['report_components_enabled'] = $request->has('report_components_enabled') ? true : false;
        
        if ($data['report_components_enabled'] && $request->has('report_components_items') && is_array($request->report_components_items)) {
            $reportItems = [];
            
            foreach ($request->report_components_items as $index => $item) {
                if (!empty($item['title']) && !empty($item['description'])) {
                    $reportData = [
                        'title' => $item['title'],
                        'description' => $item['description'],
                        'image' => $item['image'] ?? ''
                    ];
                    
                    // Handle image removal
                    if (isset($item['remove_image']) && $item['remove_image'] == '1') {
                        if (!empty($reportData['image']) && \Storage::disk('public')->exists($reportData['image'])) {
                            \Storage::disk('public')->delete($reportData['image']);
                        }
                        $reportData['image'] = '';
                    }
                    
                    // Handle new image upload for this report component item
                    if ($request->hasFile("report_component_image_$index")) {
                        // Delete old image if exists
                        if (!empty($reportData['image']) && \Storage::disk('public')->exists($reportData['image'])) {
                            \Storage::disk('public')->delete($reportData['image']);
                        }
                        
                        $image = $request->file("report_component_image_$index");
                        $imageName = time() . '_' . $index . '_' . Str::slug($item['title']) . '.' . $image->getClientOriginalExtension();
                        $imagePath = $image->storeAs('images/report-components', $imageName, 'public');
                        $reportData['image'] = $imagePath;
                    }
                    
                    $reportItems[] = $reportData;
                    
                    // Limit to 6 items
                    if (count($reportItems) >= 6) {
                        break;
                    }
                }
            }
            
            $data['report_components_items'] = $reportItems;
        } else {
            $data['report_components_items'] = null;
        }

        // Process Procedure Steps Section data
        $data['procedure_steps_enabled'] = $request->has('procedure_steps_enabled') ? true : false;
        
        if ($data['procedure_steps_enabled'] && $request->has('procedure_steps_items') && is_array($request->procedure_steps_items)) {
            $procedureItems = [];
            
            foreach ($request->procedure_steps_items as $index => $item) {
                if (!empty($item['title']) && !empty($item['description'])) {
                    $procedureData = [
                        'step_number' => $item['step_number'] ?? 'STEP ' . ($index + 1),
                        'title' => $item['title'],
                        'description' => $item['description'],
                        'image' => $item['image'] ?? '',
                        'alignment' => $item['alignment'] ?? ($index % 2 == 0 ? 'left' : 'right')
                    ];
                    
                    // Handle image removal
                    if (isset($item['remove_image']) && $item['remove_image'] == '1') {
                        if (!empty($procedureData['image']) && \Storage::disk('public')->exists($procedureData['image'])) {
                            \Storage::disk('public')->delete($procedureData['image']);
                        }
                        $procedureData['image'] = '';
                    }
                    
                    // Handle new image upload for this procedure step item
                    if ($request->hasFile("procedure_step_image_$index")) {
                        // Delete old image if exists
                        if (!empty($procedureData['image']) && \Storage::disk('public')->exists($procedureData['image'])) {
                            \Storage::disk('public')->delete($procedureData['image']);
                        }
                        
                        $image = $request->file("procedure_step_image_$index");
                        $imageName = time() . '_' . $index . '_' . Str::slug($item['title']) . '.' . $image->getClientOriginalExtension();
                        $imagePath = $image->storeAs('images/procedure-steps', $imageName, 'public');
                        $procedureData['image'] = $imagePath;
                    }
                    
                    $procedureItems[] = $procedureData;
                }
            }
            
            $data['procedure_steps_items'] = $procedureItems;
        } else {
            $data['procedure_steps_items'] = null;
        }

        // Process Checklist items
        $data['checklist_enabled'] = $request->has('checklist_enabled') ? true : false;
        
        if ($data['checklist_enabled'] && $request->has('checklist_items') && is_array($request->checklist_items)) {
            // Filter out empty checklist items
            $checklistItems = array_filter($request->checklist_items, function ($item) {
                return !empty($item['text']);
            });
            
            // Re-index the array to ensure proper numbering
            $data['checklist_items'] = array_values($checklistItems);
        } else {
            $data['checklist_items'] = null;
        }

        // Process Benefits items
        $data['benefits_enabled'] = $request->has('benefits_enabled') ? true : false;
        
        if ($data['benefits_enabled'] && $request->has('benefits_items') && is_array($request->benefits_items)) {
            $benefitsItems = [];
            
            foreach ($request->benefits_items as $index => $item) {
                if (!empty($item['title']) || !empty($item['description'])) {
                    $benefitData = [
                        'title' => $item['title'] ?? '',
                        'description' => $item['description'] ?? '',
                        'icon' => $item['icon'] ?? null
                    ];
                    
                    // Handle image upload
                    if ($request->hasFile("benefit_icon_$index")) {
                        $image = $request->file("benefit_icon_$index");
                        $imageName = time() . '_' . $index . '_' . Str::slug($item['title']) . '.' . $image->getClientOriginalExtension();
                        $imagePath = $image->storeAs('images/benefits', $imageName, 'public');
                        $benefitData['icon'] = $imagePath;
                    }
                    
                    $benefitsItems[] = $benefitData;
                }
            }
            
            $data['benefits_items'] = $benefitsItems;
        } else {
            $data['benefits_items'] = null;
        }

        // Process Partner Services items
        $data['partner_services_enabled'] = $request->has('partner_services_enabled') ? true : false;
        
        if ($data['partner_services_enabled'] && $request->has('partner_services_items') && is_array($request->partner_services_items)) {
            $partnerServicesItems = [];
            
            foreach ($request->partner_services_items as $index => $item) {
                if (!empty($item['title']) || !empty($item['description'])) {
                    $serviceData = [
                        'title' => $item['title'] ?? '',
                        'description' => $item['description'] ?? '',
                        'icon' => $item['icon'] ?? null
                    ];
                    
                    // Handle image upload
                    if ($request->hasFile("partner_service_icon_$index")) {
                        $image = $request->file("partner_service_icon_$index");
                        $imageName = time() . '_' . $index . '_' . Str::slug($item['title']) . '.' . $image->getClientOriginalExtension();
                        $imagePath = $image->storeAs('images/partner-services', $imageName, 'public');
                        $serviceData['icon'] = $imagePath;
                    }
                    
                    $partnerServicesItems[] = $serviceData;
                }
            }
            
            $data['partner_services_items'] = $partnerServicesItems;
        } else {
            $data['partner_services_items'] = null;
        }

        // Nullify partner services fields when disabled
        if (!$data['partner_services_enabled']) {
            $data['partner_services_title'] = null;
            $data['partner_services_description'] = null;
            $data['partner_services_items'] = null;
            $data['partner_services_note'] = null;
        }

        // Process Challenges Section data
        $data['challenges_enabled'] = $request->has('challenges_enabled') ? true : false;
        
        if ($data['challenges_enabled'] && $request->has('challenges_items') && is_array($request->challenges_items)) {
            // Filter out empty challenge items
            $challengesItems = array_filter($request->challenges_items, function ($item) {
                return !empty($item['challenge']) || !empty($item['solution']);
            });
            
            // Re-index the array
            $data['challenges_items'] = array_values($challengesItems);
        } else {
            $data['challenges_items'] = null;
        }

        // Process Challenges Note
        if (!$data['challenges_enabled']) {
            $data['challenges_note'] = null;
        }

        // Process Fees Section data
        $data['fees_enabled'] = $request->has('fees_enabled') ? true : false;
        
        if ($data['fees_enabled'] && $request->has('fees_items') && is_array($request->fees_items)) {
            // Filter out empty fee items
            $feesItems = array_filter($request->fees_items, function ($item) {
                return !empty($item['item']) || !empty($item['cost']);
            });
            
            // Re-index the array
            $data['fees_items'] = array_values($feesItems);
        } else {
            $data['fees_items'] = null;
        }

        // Process Fees Note
        if (!$data['fees_enabled']) {
            $data['fees_note'] = null;
        }

        // Process Time Taken Section data
        $data['time_taken_enabled'] = $request->has('time_taken_enabled') ? true : false;
        if (!$data['time_taken_enabled']) {
            $data['time_taken_title'] = null;
            $data['time_taken_content'] = null;
        }

        // Process Benefits Header Image
        if ($request->hasFile('benefits_header_image_file')) {
            // Delete old image if exists
            if ($page->benefits_header_image && \Storage::disk('public')->exists($page->benefits_header_image)) {
                \Storage::disk('public')->delete($page->benefits_header_image);
            }
            
            $image = $request->file('benefits_header_image_file');
            $imageName = time() . '_benefits_header_' . Str::slug($request->title ?? 'image') . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images/benefits-header', $imageName, 'public');
            $data['benefits_header_image'] = $imagePath;
        }

        // Handle benefits header image removal
        if ($request->has('remove_benefits_header_image') && $request->remove_benefits_header_image) {
            if ($page->benefits_header_image && \Storage::disk('public')->exists($page->benefits_header_image)) {
                \Storage::disk('public')->delete($page->benefits_header_image);
            }
            $data['benefits_header_image'] = null;
        }

        // Process Fees Comparison Section data
        $data['fees_comparison_enabled'] = $request->has('fees_comparison_enabled') ? true : false;
        
        if ($data['fees_comparison_enabled'] && $request->has('fees_comparison_rows') && is_array($request->fees_comparison_rows)) {
            // Filter out empty comparison rows
            $comparisonRows = array_filter($request->fees_comparison_rows, function ($row) {
                return !empty($row['feature']) || !empty($row['stock_audit']) || !empty($row['internal_control']);
            });
            
            // Re-index the array
            $data['fees_comparison_rows'] = array_values($comparisonRows);
        } else {
            $data['fees_comparison_rows'] = null;
        }

        // Process Fees Comparison Note
        if (!$data['fees_comparison_enabled']) {
            $data['fees_comparison_title'] = null;
            $data['fees_comparison_subtitle'] = null;
            $data['fees_comparison_note'] = null;
        }

        // Process Conclusion Section
        $data['conclusion_enabled'] = $request->has('conclusion_enabled') ? true : false;
        if (!$data['conclusion_enabled']) {
            $data['conclusion_title'] = null;
            $data['conclusion_content'] = null;
        }

        // Process Partnership Section
        $data['partnership_enabled'] = $request->has('partnership_enabled') ? true : false;
        
        // Handle partnership image upload
        if ($request->hasFile('partnership_image_file')) {
            // Delete old image if exists
            if ($page->partnership_image && \Storage::disk('public')->exists($page->partnership_image)) {
                \Storage::disk('public')->delete($page->partnership_image);
            }
            
            $image = $request->file('partnership_image_file');
            $imageName = time() . '_partnership_' . Str::slug($request->title ?? 'image') . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images/partnership', $imageName, 'public');
            $data['partnership_image'] = $imagePath;
        }

        // Handle partnership image removal
        if ($request->has('remove_partnership_image') && $request->remove_partnership_image) {
            if ($page->partnership_image && \Storage::disk('public')->exists($page->partnership_image)) {
                \Storage::disk('public')->delete($page->partnership_image);
            }
            $data['partnership_image'] = null;
        }

        if (!$data['partnership_enabled']) {
            $data['partnership_image'] = null;
            $data['partnership_title'] = null;
            $data['partnership_services'] = null;
            $data['partnership_button_text'] = null;
            $data['partnership_button_link'] = null;
            $data['partnership_content'] = null;
        }

        // Process Company Registration Section
        $data['company_registration_enabled'] = $request->has('company_registration_enabled') ? true : false;
        
        if ($data['company_registration_enabled'] && $request->has('company_registration_items') && is_array($request->company_registration_items)) {
            // Filter out empty items
            $companyRegItems = array_filter($request->company_registration_items, function ($item) {
                return !empty($item['title']);
            });
            
            // Re-index the array
            $data['company_registration_items'] = array_values($companyRegItems);
        } else {
            $data['company_registration_items'] = null;
        }

        if (!$data['company_registration_enabled']) {
            $data['company_registration_title'] = null;
            $data['company_registration_items'] = null;
        }

        // Process Video Section data
        $data['video_enabled'] = $request->has('video_enabled') ? true : false;
        
        if ($data['video_enabled'] && $request->hasFile('video_file')) {
            // Delete old video if exists
            if ($page->video_file && \Storage::disk('public')->exists($page->video_file)) {
                \Storage::disk('public')->delete($page->video_file);
            }
            
            $video = $request->file('video_file');
            $videoName = time() . '_video_' . Str::slug($request->title ?? 'video') . '.' . $video->getClientOriginalExtension();
            $videoPath = $video->storeAs('videos', $videoName, 'public');
            $data['video_file'] = $videoPath;
        }
        
        // Handle video removal
        if ($request->has('remove_video') && $request->remove_video) {
            if ($page->video_file && \Storage::disk('public')->exists($page->video_file)) {
                \Storage::disk('public')->delete($page->video_file);
            }
            $data['video_file'] = null;
        }
        
        if (!$data['video_enabled']) {
            $data['video_title'] = null;
            $data['video_description'] = null;
            $data['video_file'] = null;
        }

        // Process FAQ data
        $data['faq_enabled'] = $request->has('faq_enabled') ? true : false;
        
        if ($data['faq_enabled'] && $request->has('faq_items') && is_array($request->faq_items)) {
            // Filter out empty FAQ items
            $faqItems = array_filter($request->faq_items, function ($item) {
                return !empty($item['question']) && !empty($item['answer']);
            });
            
            // Re-index the array to ensure proper numbering
            $data['faq_items'] = array_values($faqItems);
        } else {
            $data['faq_items'] = null;
        }

        $page->update($data);
        
        // Sync categories
        if ($request->has('categories')) {
            $page->categories()->sync($request->categories);
        } else {
            $page->categories()->detach();
        }

        // Handle SEO Meta
        if ($request->has('seo')) {
            $this->seoService->updateOrCreate($page, $request->input('seo'));
        }

        return redirect()->route('admin.pages.edit', $page->id)
                        ->with('success', 'Page updated successfully.');
    }

    /**
     * Remove the specified page from storage.
     */
    public function destroy(Page $page)
    {
        // $page->delete();
        $page->forceDelete();

        return redirect()->route('admin.pages.index')
                        ->with('success', 'Page deleted successfully.');
    }

    /**
     * Bulk delete pages
     */
    public function bulkDelete(Request $request)
    {
        $request->validate([
            'page_ids' => 'required|array',
            'page_ids.*' => 'exists:pages,id'
        ]);

        $count = Page::whereIn('id', $request->page_ids)->delete();

        return redirect()->route('admin.pages.index')
                        ->with('success', "{$count} page(s) deleted successfully.");
    }

    /**
     * Check if slug contains invalid characters
     */
    private function hasInvalidSlugCharacters($slug)
    {
        // Check for spaces, special characters that shouldn't be in slugs
        return preg_match('/[^a-zA-Z0-9\-_]/', $slug) || 
               strlen($slug) < 2 || 
               preg_match('/^[^a-zA-Z]/', $slug); // Must start with letter
    }

    /**
     * Check if a slug looks like Lorem ipsum text
     */
    private function isLoremIpsumSlug($slug)
    {
        // Common Lorem ipsum patterns
        $loremPatterns = [
            'lorem', 'ipsum', 'dolor', 'sit', 'amet', 'consectetur', 'adipiscing', 'elit',
            'sed', 'eiusmod', 'tempor', 'incididunt', 'labore', 'dolore', 'magna', 'aliqua',
            'enim', 'minim', 'veniam', 'quis', 'nostrud', 'exercitation', 'ullamco',
            'laboris', 'nisi', 'aliquip', 'commodo', 'consequat', 'duis', 'aute', 'irure',
            'reprehenderit', 'voluptate', 'velit', 'esse', 'cillum', 'fugiat', 'nulla',
            'pariatur', 'excepteur', 'sint', 'occaecat', 'cupidatat', 'proident', 'sunt',
            'culpa', 'qui', 'officia', 'deserunt', 'mollit', 'anim', 'laborum',
            'molestiae', 'repellendus', 'doloribus', 'aliquip', 'ipsa', 'magna', 'nulla'
        ];

        $slug = strtolower($slug);
        
        // Check if slug contains multiple Lorem ipsum words
        $matchCount = 0;
        foreach ($loremPatterns as $pattern) {
            if (strpos($slug, $pattern) !== false) {
                $matchCount++;
            }
        }
        
        // If it contains 2 or more Lorem ipsum words, consider it problematic
        return $matchCount >= 2;
    }
}




