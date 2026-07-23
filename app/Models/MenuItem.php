<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'title',
        'type',
        'url',
        'object_id',
        'object_type',
        'parent_id',
        'sort_order',
    ];

    /**
     * Get the menu that owns the menu item.
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    /**
     * Get the parent menu item.
     */
    public function parent()
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

    /**
     * Get the children menu items.
     */
    public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id')->orderBy('sort_order');
    }

    /**
     * Get the linked object (post, page, or category).
     */
    public function linkedObject()
    {
        if ($this->object_type && $this->object_id) {
            switch ($this->object_type) {
                case 'post':
                    return $this->belongsTo(Post::class, 'object_id');
                case 'page':
                    return $this->belongsTo(Page::class, 'object_id');
                case 'post_category':
                    return $this->belongsTo(PostCategory::class, 'object_id');
                case 'page_category':
                    return $this->belongsTo(PageCategory::class, 'object_id');
            }
        }
        
        return null;
    }

    /**
     * Get the URL for the menu item.
     */
    public function getUrlAttribute($value): string
    {
        if ($this->type === 'custom') {
            return $value ?: '#';
        }

        // Generate URLs based on type and object_id
        switch ($this->type) {
            case 'post':
                $post = Post::find($this->object_id);
                return $post ? route('frontend.posts.show', $post->slug) : '#';
                
            case 'page':
                $page = Page::find($this->object_id);
                return $page ? route('frontend.pages.show', $page->slug) : '#';
                
            case 'post_category':
                $category = PostCategory::find($this->object_id);
                return $category ? route('frontend.post-categories.show', $category->slug) : '#';
                
            case 'page_category':
                $category = PageCategory::find($this->object_id);
                return $category ? route('frontend.page-categories.show', $category->slug) : '#';
                
            default:
                return $value ?: '#';
        }
    }

    /**
     * Check if the menu item has children.
     */
    public function hasChildren(): bool
    {
        return $this->children()->exists();
    }
}