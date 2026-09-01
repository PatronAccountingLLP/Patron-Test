<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'company',
        'content',
        'rating',
        'image',
        'video',
        'status',
        'sort_order',
        'google_review_id',
        'source',
        'location_id',
        'city',
        'service_tags',
        'google_create_time',
        'google_update_time',
        'reply',
        'profile_photo_url',
    ];

    protected $casts = [
        'rating' => 'integer',
        'sort_order' => 'integer',
        'service_tags' => 'array',
        'google_create_time' => 'datetime',
        'google_update_time' => 'datetime',
    ];

    /**
     * Scope to get only published testimonials
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Scope to get testimonials ordered by sort order
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('created_at', 'desc');
    }

    /**
     * Reviews left on a particular city's Google listing.
     */
    public function scopeForCity($query, ?string $city)
    {
        return $city ? $query->where('city', $city) : $query;
    }

    /**
     * Reviews tagged for a service. Google does not tag reviews by service, so
     * this reads the tags added in the admin, not anything Google supplied.
     */
    public function scopeForService($query, ?string $service)
    {
        if (!$service) {
            return $query;
        }

        return $query->whereJsonContains('service_tags', $service);
    }

    /**
     * Get the full URL for the testimonial image
     */
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return null;
    }

    /**
     * Get the full URL for the testimonial video
     */
    public function getVideoUrlAttribute()
    {
        if ($this->video) {
            return asset('storage/' . $this->video);
        }
        return null;
    }

    /**
     * Get the rating as stars HTML
     */
    public function getStarsHtmlAttribute()
    {
        $stars = '';
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $this->rating) {
                $stars .= '<i class="bi bi-star-fill text-warning"></i>';
            } else {
                $stars .= '<i class="bi bi-star text-muted"></i>';
            }
        }
        return $stars;
    }
}
