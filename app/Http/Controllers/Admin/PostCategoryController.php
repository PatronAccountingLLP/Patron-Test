<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the post categories.
     */
    public function index()
    {
        $categories = PostCategory::withCount('posts')->latest()->paginate(15);
        return view('admin.post-categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new post category.
     */
    public function create()
    {
        return view('admin.post-categories.create');
    }

    /**
     * Store a newly created post category in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:post_categories,slug',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();
        
        // Generate unique slug if not provided or if it looks like Lorem ipsum
        $slug = trim($data['slug'] ?? '');
        if (empty($slug) || $this->isLoremIpsumSlug($slug)) {
            $data['slug'] = PostCategory::generateUniqueSlug($data['name']);
        }

        PostCategory::create($data);

        return redirect()->route('admin.post-categories.index')
                        ->with('success', 'Post category created successfully.');
    }

    /**
     * Display the specified post category.
     */
    public function show(PostCategory $postCategory)
    {
        $postCategory->load('posts');
        $category = $postCategory;
        return view('admin.post-categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified post category.
     */
    public function edit(PostCategory $postCategory)
    {
        $category = $postCategory;
        return view('admin.post-categories.edit', compact('category'));
    }

    /**
     * Update the specified post category in storage.
     */
    public function update(Request $request, PostCategory $postCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:post_categories,slug,' . $postCategory->id,
            'description' => 'nullable|string',
        ]);

        $data = $request->all();
        
        // Generate unique slug if not provided or if it looks like Lorem ipsum
        $slug = trim($data['slug'] ?? '');
        if (empty($slug) || $this->isLoremIpsumSlug($slug)) {
            $data['slug'] = PostCategory::generateUniqueSlug($data['name'], $postCategory->id);
        }

        $postCategory->update($data);

        return redirect()->route('admin.post-categories.show', $postCategory)
                        ->with('success', 'Post category updated successfully.');
    }

    /**
     * Remove the specified post category from storage.
     */
    public function destroy(PostCategory $postCategory)
    {
        $postCategory->delete();

        return redirect()->route('admin.post-categories.index')
                        ->with('success', 'Post category deleted successfully.');
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
            'molestiae', 'repellendus', 'doloribus', 'aliquip'
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