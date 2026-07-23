<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PostCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            if (empty($category->slug)) {
                $category->slug = self::generateUniqueSlug($category->name);
            }
        });

        static::updating(function ($category) {
            if ($category->isDirty('name') && empty($category->slug)) {
                $category->slug = self::generateUniqueSlug($category->name, $category->id);
            }
        });
    }

    /**
     * Generate a unique slug for the category with timestamp.
     */
    public static function generateUniqueSlug($name, $excludeId = null)
    {
        $baseSlug = Str::slug($name);
        $timestamp = now()->format('Y-m-d-His'); // Format: 2025-09-30-053928
        $slug = $baseSlug . '-' . $timestamp;

        // Check if this exact slug exists (very unlikely with timestamp, but just in case)
        $counter = 1;
        $originalSlug = $slug;
        
        while (self::where('slug', $slug)
                   ->when($excludeId, function ($query) use ($excludeId) {
                       return $query->where('id', '!=', $excludeId);
                   })
                   ->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

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
     * Get the posts for the category.
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_category_post');
    }

    /**
     * Get published posts for the category.
     */
    public function publishedPosts()
    {
        return $this->posts()->published();
    }
}