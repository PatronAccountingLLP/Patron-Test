<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'location',
        'description',
        'status',
    ];

    /**
     * Get the is_active attribute based on status.
     */
    public function getIsActiveAttribute()
    {
        return $this->status === 'active';
    }

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($menu) {
            if (empty($menu->slug)) {
                $menu->slug = self::generateUniqueSlug($menu->name);
            }
        });

        static::updating(function ($menu) {
            if ($menu->isDirty('name') && empty($menu->slug)) {
                $menu->slug = self::generateUniqueSlug($menu->name, $menu->id);
            }
        });
    }

    /**
     * Generate a unique slug for the menu.
     */
    public static function generateUniqueSlug($name, $excludeId = null)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $counter = 1;

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
     * Get the menu items for the menu.
     */
    public function items()
    {
        return $this->hasMany(MenuItem::class)->whereNull('parent_id')->orderBy('sort_order');
    }

    /**
     * Get all menu items (including nested) for the menu.
     */
    public function allItems()
    {
        return $this->hasMany(MenuItem::class)->orderBy('sort_order');
    }
}