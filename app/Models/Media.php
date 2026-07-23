<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename',
        'title',
        'description',
        'file_path',
        'file_url',
        'mime_type',
        'file_type',
        'file_size',
        'metadata',
        'alt_text',
        'uploaded_by',
        'is_public',
    ];

    protected $casts = [
        'metadata' => 'array',
        'is_public' => 'boolean',
        'file_size' => 'integer',
    ];

    /**
     * Get the user who uploaded this media
     */
    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    /**
     * Get formatted file size
     */
    public function getFormattedSizeAttribute()
    {
        $bytes = $this->file_size;
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        
        for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
            $bytes /= 1024;
        }
        
        return round($bytes, 2) . ' ' . $units[$i];
    }

    /**
     * Check if file is an image
     */
    public function isImage()
    {
        return $this->file_type === 'image';
    }

    /**
     * Check if file is a video
     */
    public function isVideo()
    {
        return $this->file_type === 'video';
    }

    /**
     * Check if file is a document
     */
    public function isDocument()
    {
        return $this->file_type === 'document';
    }

    /**
     * Get file extension
     */
    public function getExtensionAttribute()
    {
        return pathinfo($this->filename, PATHINFO_EXTENSION);
    }

    /**
     * Get thumbnail URL for images
     */
    public function getThumbnailAttribute()
    {
        if ($this->isImage()) {
            return $this->file_url;
        }
        
        // Return default icons for different file types
        $icons = [
            'video' => '/images/icons/video-icon.png',
            'document' => '/images/icons/document-icon.png',
            'audio' => '/images/icons/audio-icon.png',
        ];
        
        return $icons[$this->file_type] ?? '/images/icons/file-icon.png';
    }

    /**
     * Scope for public files
     */
    public function scopePublic($query)
    {
        return $query->where('is_public', true);
    }

    /**
     * Scope for specific file type
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('file_type', $type);
    }

    /**
     * Scope for images only
     */
    public function scopeImages($query)
    {
        return $query->where('file_type', 'image');
    }

    /**
     * Scope for videos only
     */
    public function scopeVideos($query)
    {
        return $query->where('file_type', 'video');
    }

    /**
     * Scope for documents only
     */
    public function scopeDocuments($query)
    {
        return $query->where('file_type', 'document');
    }
}
