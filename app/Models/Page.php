<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Services\TemplateService;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'directry_label',
        'title',
        'slug',
        'content',
        'excerpt',
        'template',
        'featured_image',
        'sort_order',
        'status',
        'published_at',
        // Intro Section
        'intro_enabled',
        'intro_title',
        'intro_content',
        // Hero Section
        'hero_enabled',
        'hero_title',
        'hero_benefits',
        'hero_button_text',
        'hero_button_link',
        'hero_video_text',
        'hero_video_link',
        'hero_document_text',
        'hero_document_link',
        // What Section
        'what_enabled',
        'what_title',
        'what_content',
        'what_image',
        'what_additional_content',
        // Applicability Section
        'applicability_enabled',
        'applicability_title',
        'applicability_content',
        // Services Section
        'services_enabled',
        'services_items',
        'services_note',
        'service_content',
        // Report Format Header
        'report_format_title',
        'report_format_description',
        'report_format_button1_text',
        'report_format_button1_link',
        'report_format_button2_text',
        'report_format_button2_link',
        // Report Components Section
        'report_components_enabled',
        'report_components_items',
        'report_components_note',
        'report_components_content',
        // Procedure Header
        'procedure_header_title',
        'procedure_header_description',
        'procedure_header_button1_text',
        'procedure_header_button1_link',
        'procedure_header_button2_text',
        'procedure_header_button2_link',
        // Procedure Steps Section
        'procedure_steps_enabled',
        'procedure_steps_items',
        'procedure_steps_content',
        // Checklist Header
        'checklist_header_title',
        'checklist_header_description',
        'checklist_header_button1_text',
        'checklist_header_button1_link',
        'checklist_header_button2_text',
        'checklist_header_button2_link',
        // Checklist Section
        'checklist_enabled',
        'checklist_items',
        'checklist_note',
        // Challenges Section
        'challenges_enabled',
        'challenges_title',
        'challenges_description',
        'challenges_column_heading',
        'solutions_column_heading',
        'challenges_items',
        'challenges_note',
        // Fees Section
        'fees_enabled',
        'fees_title',
        'fees_description',
        'fees_items',
        'fees_note',
        'fees_content',
        // Time Taken Section
        'time_taken_enabled',
        'time_taken_title',
        'time_taken_content',
        // Benefits Header
        'benefits_header_title',
        'benefits_header_description',
        'benefits_header_button1_text',
        'benefits_header_button1_link',
        'benefits_header_button2_text',
        'benefits_header_button2_link',
        'benefits_header_image',
        // Benefits Section
        'benefits_enabled',
        'benefits_items',
        'benefits_note',
        'benefits_content',
        // Fees Comparison Section (Part 2)
        'fees_comparison_enabled',
        'fees_comparison_title',
        'fees_comparison_subtitle',
        'fees_comparison_header_col1',
        'fees_comparison_header_col2',
        'fees_comparison_header_col3',
        'fees_comparison_rows',
        'fees_comparison_note',
        // Partner Services Section
        'partner_services_enabled',
        'partner_services_title',
        'partner_services_description',
        'partner_services_items',
        'partner_services_note',
        // License Types Table Section
        'license_types_enabled',
        'license_types_title',
        'license_types_description',
        'license_types_rows',
        // Conclusion Section
        'conclusion_enabled',
        'conclusion_title',
        'conclusion_content',
        // Partnership Section
        'partnership_enabled',
        'partnership_image',
        'partnership_title',
        'partnership_services',
        'partnership_button_text',
        'partnership_button_link',
        'partnership_content',
        // Company Registration Section
        'company_registration_enabled',
        'company_registration_title',
        'company_registration_items',
        'company_registration_content',
        // FAQ Section
        'faq_enabled',
        'faq_title',
        'faq_subtitle',
        'faq_items',
        // Background Image Fields
        'hero_background_image',
        'hero_background_overlay_color',
        'hero_background_overlay_opacity',
        // Map Section Fields
        'map_enabled',
        'map_title',
        'map_description',
        'map_type',
        'map_embed_code',
        'map_latitude',
        'map_longitude',
        'map_zoom_level',
        'map_marker_title',
        'map_marker_description',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        // Boolean fields
        'intro_enabled' => 'boolean',
        'hero_enabled' => 'boolean',
        'what_enabled' => 'boolean',
        'applicability_enabled' => 'boolean',
        'services_enabled' => 'boolean',
        'report_components_enabled' => 'boolean',
        'procedure_steps_enabled' => 'boolean',
        'checklist_enabled' => 'boolean',
        'challenges_enabled' => 'boolean',
        'fees_enabled' => 'boolean',
        'time_taken_enabled' => 'boolean',
        'benefits_enabled' => 'boolean',
        'fees_comparison_enabled' => 'boolean',
        'partner_services_enabled' => 'boolean',
        'license_types_enabled' => 'boolean',
        'conclusion_enabled' => 'boolean',
        'partnership_enabled' => 'boolean',
        'company_registration_enabled' => 'boolean',
        'faq_enabled' => 'boolean',
        'map_enabled' => 'boolean',
        // JSON fields
        'hero_benefits' => 'json',
        'services_items' => 'json',
        'report_components_items' => 'json',
        'procedure_steps_items' => 'json',
        'checklist_items' => 'json',
        'challenges_items' => 'json',
        'fees_items' => 'json',
        'benefits_items' => 'json',
        'fees_comparison_rows' => 'json',
        'partner_services_items' => 'json',
        'license_types_rows' => 'json',
        'company_registration_items' => 'json',
        'faq_items' => 'json',
    ];

    /**
     * Get the SEO meta data for this page
     */
    public function seoMeta()
    {
        return $this->morphOne(SeoMeta::class, 'page', 'page_type', 'page_id');
    }

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($page) {
            if (empty($page->slug)) {
                $page->slug = self::generateUniqueSlug($page->title);
            }
        });

        static::updating(function ($page) {
            if ($page->isDirty('title') && empty($page->slug)) {
                $page->slug = self::generateUniqueSlug($page->title, $page->id);
            }
        });

        // When a page is deleted, delete its SEO meta
        static::deleting(function ($page) {
            $page->seoMeta()->delete();
        });
    }

    /**
     * Generate a unique slug for the page.
     */
    public static function generateUniqueSlug($title, $excludeId = null)
    {
        // Clean and create base slug
        $slug = Str::slug($title);
        
        // Handle empty or very short slugs
        if (empty($slug) || strlen($slug) < 2) {
            $slug = 'page-' . time();
        }
        
        // Ensure slug starts with a letter
        if (!preg_match('/^[a-zA-Z]/', $slug)) {
            $slug = 'page-' . $slug;
        }
        
        $originalSlug = $slug;
        $counter = 1;

        // Check for uniqueness
        // while (self::where('slug', $slug)
        //           ->when($excludeId, function ($query) use ($excludeId) {
        //               return $query->where('id', '!=', $excludeId);
        //           })
        //           ->exists()) {
        //     $slug = $originalSlug . '-' . $counter;
        //     $counter++;
        // }

        return $slug;
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Retrieve the model for a bound value.
     */
    public function resolveRouteBinding($value, $field = null)
    {
        // First try to find by slug
        $page = $this->where('slug', $value)->first();
        
        // If not found by slug, try by ID (fallback)
        if (!$page && is_numeric($value)) {
            $page = $this->where('id', $value)->first();
        }
        
        // If still not found and value looks like a title, try to find by title and fix slug
        if (!$page) {
            $possibleTitle = str_replace(['%20', '+', '-'], ' ', urldecode($value));
            $page = $this->where('title', 'like', '%' . $possibleTitle . '%')->first();
            
            // If found by title, update the slug
            if ($page && (empty($page->slug) || $page->slug !== Str::slug($page->title))) {
                $page->slug = self::generateUniqueSlug($page->title, $page->id);
                $page->save();
            }
        }
        
        return $page;
    }

    /**
     * Scope a query to only include published pages.
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                    ->where('published_at', '<=', now());
    }

    /**
     * Scope a query to only include draft pages.
     */
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    /**
     * Get the categories for the page.
     */
    public function categories()
    {
        return $this->belongsToMany(PageCategory::class, 'page_category_page');
    }

    /**
     * Check if the page is published.
     */
    public function isPublished(): bool
    {
        return $this->status === 'published' && 
               $this->published_at && 
               $this->published_at <= now();
    }

    /**
     * Get the featured image URL.
     */
    public function getFeaturedImageUrlAttribute(): ?string
    {
        if (!$this->featured_image) {
            return null;
        }

        return asset('storage/' . $this->featured_image);
    }

    /**
     * Get available page templates.
     */
    public static function getAvailableTemplates(): array
    {
        return TemplateService::getAvailableTemplates();
    }
}