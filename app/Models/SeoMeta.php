<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoMeta extends Model
{
    use HasFactory;

    protected $table = 'seo_meta';

    protected $fillable = [
        'page_id',
        'page_type',
        'meta_title',
        'meta_description',
        'canonical_url',
        'meta_keywords',
        'header_scripts',
        'footer_scripts',
    ];

    /**
     * Get the parent model (Page, Post, etc.)
     */
    public function page()
    {
        return $this->morphTo(__FUNCTION__, 'page_type', 'page_id');
    }

    /**
     * Get formatted meta keywords as array
     */
    public function getKeywordsArrayAttribute()
    {
        if (empty($this->meta_keywords)) {
            return [];
        }
        
        return array_map('trim', explode(',', $this->meta_keywords));
    }

    /**
     * Get safe header scripts (already sanitized)
     */
    public function getSafeHeaderScriptsAttribute()
    {
        return $this->header_scripts;
    }

    /**
     * Get safe footer scripts (already sanitized)
     */
    public function getSafeFooterScriptsAttribute()
    {
        return $this->footer_scripts;
    }
}
