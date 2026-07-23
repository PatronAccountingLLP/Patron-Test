<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'seo_canonical_url',
        'seo_header_scripts',
        'seo_footer_scripts',
        'slug',
        'content',
        'key_points',
        'excerpt',
        'description',
        'featured_image',
        'custom_field_1',
        'custom_field_2',
        'custom_field_3',
        'custom_field_4',
        'custom_field_5',
        'faq_enabled',
        'faq_title',
        'faq_subtitle',
        'faq_items',
        'trending_badge',
        'status',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'faq_enabled' => 'boolean',
        'faq_items' => 'json',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = static::generateUniqueSlug($post->title);
            }
        });

        static::updating(function ($post) {
            // If slug is empty or if title changed, regenerate slug
            if (empty($post->slug) || ($post->isDirty('title') && empty($post->getOriginal('slug')))) {
                $post->slug = static::generateUniqueSlug($post->title, $post->id);
            }
        });
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Scope a query to only include published posts.
     */
    public function scopePublished($query)
    {
        $now = now();
        return $query->where('status', 'published')
                    ->where(function($q) use ($now) {
                        $q->where('published_at', '<=', $now)
                          ->orWhereNull('published_at');
                    });
    }

    /**
     * Scope a query to only include draft posts.
     */
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    /**
     * Get the categories for the post.
     */
    public function categories()
    {
        return $this->belongsToMany(PostCategory::class, 'post_category_post');
    }

    /**
     * Get the users associated with the post.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'post_user');
    }

    /**
     * Check if the post is published.
     */
    public function isPublished(): bool
    {
        if ($this->status !== 'published') {
            return false;
        }

        // If published_at is null or is in the past/present, consider it published
        return !$this->published_at || $this->published_at <= now();
    }

    /**
     * Get the excerpt or truncated content.
     */
    public function getExcerptAttribute($value): string
    {
        if ($value) {
            return $value;
        }
        
        return Str::limit(strip_tags($this->content), 150);
    }

    /**
     * Get the featured image URL.
     */
    public function getFeaturedImageUrlAttribute(): ?string
    {
        if ($this->featured_image) {
            return asset('storage/' . $this->featured_image);
        }
        
        return null;
    }

    /**
     * Get a user-friendly image name.
     */
    public function getFeaturedImageNameAttribute(): ?string
    {
        if ($this->featured_image) {
            // Extract filename without the hash and extension
            $filename = basename($this->featured_image);
            
            // Try to create a friendly name from the post title
            $friendlyName = Str::slug($this->title);
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            
            return $friendlyName . '.' . $extension;
        }
        
        return null;
    }

    /**
     * Get optimized alt text for featured image.
     */
    public function getFeaturedImageAltAttribute(): string
    {
        return $this->title . ' - Featured Image';
    }

    /**
     * Retrieve the model for a bound value.
     */
    public function resolveRouteBinding($value, $field = null)
    {
        // First try to find by ID (most common for admin routes)
        if (is_numeric($value)) {
            return $this->where('id', $value)->first();
        }
        
        // Then try by slug (for frontend routes)
        $post = $this->where('slug', $value)->first();
        if ($post) {
            return $post;
        }
        
        // Finally try by title (URL decoded) as a fallback
        $decodedValue = urldecode($value);
        return $this->where('title', $decodedValue)->first();
    }

    /**
     * Generate a unique slug for the post.
     */
    public static function generateUniqueSlug($title, $excludeId = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (true) {
            $query = static::where('slug', $slug);
            
            if ($excludeId) {
                $query->where('id', '!=', $excludeId);
            }
            
            if (!$query->exists()) {
                break;
            }
            
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}