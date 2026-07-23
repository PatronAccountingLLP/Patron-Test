<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the posts.
     */
    public function index(Request $request)
    {
        $query = Post::with(['categories', 'users'])->latest();
        
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        
        if ($request->filled('category')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('post_categories.id', $request->category);
            });
        }
        
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('content', 'like', '%' . $request->search . '%');
            });
        }
        
        $posts = $query->paginate(15);
        $categories = PostCategory::all();
        
        return view('admin.posts.index', compact('posts', 'categories'));
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        $categories = PostCategory::all();
        $users = \App\Models\User::orderBy('name', 'asc')->get();
        return view('admin.posts.create', compact('categories', 'users'));
    }

    /**
     * Store a newly created post in storage.
     */
    public function store(Request $request)
    {
        // Build validation rules
        // return "hello";
        $rules = [
            'title' => 'required|string|max:255',
            'meta_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
            'seo_canonical_url' => 'nullable|url|max:255',
            'seo_header_scripts' => 'nullable|string',
            'seo_footer_scripts' => 'nullable|string',
            'trending_badge' => 'nullable|string|max:50',
            'slug' => 'nullable|string|max:255|unique:posts,slug',
            'content' => 'required|string',
            'key_points' => 'nullable|string',
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'custom_field_1' => 'nullable|string|max:255',
            'custom_field_2' => 'nullable|string|max:255',
            'custom_field_3' => 'nullable|string|max:255',
            'custom_field_4' => 'nullable|string|max:255',
            'custom_field_5' => 'nullable|string|max:255',
            'faq_enabled' => 'nullable|boolean',
            'faq_title' => 'nullable|string|max:255',
            'faq_subtitle' => 'nullable|string',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
            'categories' => 'array',
            'categories.*' => 'exists:post_categories,id',
            'user_id' => 'nullable|exists:users,id',
            'action' => 'nullable|in:draft,publish',
        ];

        // Only validate FAQ items if FAQ is enabled
        if ($request->has('faq_enabled') && $request->input('faq_enabled')) {
            $rules['faq_items'] = 'required|array|min:1';
            $rules['faq_items.*.question'] = 'required|string|max:500';
            $rules['faq_items.*.answer'] = 'required|string';
        } else {
            $rules['faq_items'] = 'nullable|array';
            $rules['faq_items.*.question'] = 'nullable|string|max:500';
            $rules['faq_items.*.answer'] = 'nullable|string';
        }

        $request->validate($rules);

        $data = $request->all();
        
        // Handle FAQ enabled checkbox (it won't be in request if unchecked)
        $data['faq_enabled'] = $request->has('faq_enabled') ? true : false;
        
        // Clear FAQ data if FAQ is disabled
        if (!$data['faq_enabled']) {
            $data['faq_items'] = null;
            $data['faq_title'] = null;
            $data['faq_subtitle'] = null;
        }
        
        // Handle publishing action and status
        if ($request->has('action')) {
            if ($request->input('action') === 'publish') {
                $data['status'] = 'published';
                // Ensure published_at is set for published posts
                if (empty($data['published_at'])) {
                    $data['published_at'] = now();
                }
            } elseif ($request->input('action') === 'draft') {
                $data['status'] = 'draft';
                $data['published_at'] = null; // Clear published_at for drafts
            }
        }
        
        // Generate slug if not provided or if invalid
        if (empty($data['slug']) || !$this->isValidSlug($data['slug'])) {
            $data['slug'] = $this->generateUniqueSlug($data['title']);
        }
        
        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            
            // Create descriptive filename: post-title-original-name-timestamp.ext
            $postSlug = \Str::slug($data['title']);
            $originalSlug = \Str::slug($originalName);
            $timestamp = now()->format('Y-m-d-H-i-s');
            $filename = $postSlug . '-' . $originalSlug . '-' . $timestamp . '.' . $extension;
            
            // Store file with descriptive name in posts folder
            $data['featured_image'] = $file->storeAs('posts', $filename, 'public');
        }
        
        // Handle published_at field
        if ($data['status'] === 'published') {
            if (empty($data['published_at'])) {
                // No date provided, use current time in user's timezone
                $data['published_at'] = now();
            } else {
                // Parse the provided date
                $providedDate = \Carbon\Carbon::parse($data['published_at']);
                
                // If date is in future (beyond 1 minute buffer), use current time
                if ($providedDate->isFuture() && $providedDate > now()->addMinute()) {
                    $data['published_at'] = now();
                } else {
                    $data['published_at'] = $providedDate;
                }
            }
        } else {
            // If not published, clear the published_at date
            $data['published_at'] = null;
        }

        $post = Post::create($data);
        
        // Sync categories
        if ($request->has('categories')) {
            $post->categories()->sync($request->categories);
        }

        // Sync user
        if ($request->has('user_id') && $request->user_id) {
            $post->users()->sync([$request->user_id]);
        } else {
            $post->users()->sync([]);
        }

        return redirect()->route('admin.posts.index')
                        ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified post.
     */
    public function show(Post $post)
    {
        $post->load(['categories', 'users']);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit(Post $post)
    {
        $categories = PostCategory::all();
        $users = \App\Models\User::orderBy('name', 'asc')->get();
        $post->load('categories', 'users');
        return view('admin.posts.edit', compact('post', 'categories', 'users'));
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, Post $post)
    {
        
        // Build validation rules
        $rules = [
            'title' => 'required|string|max:255',
            'meta_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
            'seo_canonical_url' => 'nullable|url|max:255',
            'seo_header_scripts' => 'nullable|string',
            'seo_footer_scripts' => 'nullable|string',
            'trending_badge' => 'nullable|string|max:50',
            'slug' => 'nullable|string|max:255|unique:posts,slug,' . $post->id,
            'content' => 'required|string',
            'key_points' => 'nullable|string',
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'custom_field_1' => 'nullable|string|max:255',
            'custom_field_2' => 'nullable|string|max:255',
            'custom_field_3' => 'nullable|string|max:255',
            'custom_field_4' => 'nullable|string|max:255',
            'custom_field_5' => 'nullable|string|max:255',
            'faq_enabled' => 'nullable|boolean',
            'faq_title' => 'nullable|string|max:255',
            'faq_subtitle' => 'nullable|string',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
            'categories' => 'array',
            'categories.*' => 'exists:post_categories,id',
            'user_id' => 'nullable|exists:users,id',
            'action' => 'nullable|in:draft,publish',
        ];


        // Only validate FAQ items if FAQ is enabled
        if ($request->has('faq_enabled') && $request->input('faq_enabled')) {
            $rules['faq_items'] = 'required|array|min:1';
            $rules['faq_items.*.question'] = 'required|string|max:500';
            $rules['faq_items.*.answer'] = 'required|string';
        } else {
            $rules['faq_items'] = 'nullable|array';
            $rules['faq_items.*.question'] = 'nullable|string|max:500';
            $rules['faq_items.*.answer'] = 'nullable|string';
        }

        $request->validate($rules);

        $data = $request->all();
        
        // Handle FAQ enabled checkbox (it won't be in request if unchecked)
        $data['faq_enabled'] = $request->has('faq_enabled') ? true : false;
        
        // Clear FAQ data if FAQ is disabled
        if (!$data['faq_enabled']) {
            $data['faq_items'] = null;
            $data['faq_title'] = null;
            $data['faq_subtitle'] = null;
        }
        
        // Handle publishing action and status
        if ($request->has('action')) {
            if ($request->input('action') === 'publish') {
                $data['status'] = 'published';
                // Ensure published_at is set for published posts
                if (empty($data['published_at'])) {
                    $data['published_at'] = now();
                }
            } elseif ($request->input('action') === 'draft') {
                $data['status'] = 'draft';
                $data['published_at'] = null; // Clear published_at for drafts
            }
        }
        
        // Generate slug if not provided or if invalid
        if (empty($data['slug']) || !$this->isValidSlug($data['slug'])) {
            $data['slug'] = $this->generateUniqueSlug($data['title'], $post->id);
        }
        
        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }
            
            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            
            // Create descriptive filename: post-title-original-name-timestamp.ext
            $postSlug = \Str::slug($data['title']);
            $originalSlug = \Str::slug($originalName);
            $timestamp = now()->format('Y-m-d-H-i-s');
            $filename = $postSlug . '-' . $originalSlug . '-' . $timestamp . '.' . $extension;
            
            // Store file with descriptive name in posts folder
            $data['featured_image'] = $file->storeAs('posts', $filename, 'public');
        }
        
        // Handle published_at field
        if ($data['status'] === 'published') {
            if (empty($data['published_at'])) {
                // No date provided, use current time in user's timezone
                $data['published_at'] = now();
            } else {
                // Parse the provided date
                $providedDate = \Carbon\Carbon::parse($data['published_at']);
                
                // If date is in future (beyond 1 minute buffer), use current time
                if ($providedDate->isFuture() && $providedDate > now()->addMinute()) {
                    $data['published_at'] = now();
                } else {
                    $data['published_at'] = $providedDate;
                }
            }
        } else {
            // If not published, clear the published_at date
            $data['published_at'] = null;
        }

        $post->update($data);
        
        // Sync categories
        if ($request->has('categories')) {
            $post->categories()->sync($request->categories);
        } else {
            $post->categories()->detach();
        }

        // Sync user
        if ($request->has('user_id') && $request->user_id) {
            $post->users()->sync([$request->user_id]);
        } else {
            $post->users()->sync([]);
        }

        return redirect()->route('admin.posts.index')
                        ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified post from storage.
     */
    public function destroy(Post $post)
    {
        // Delete featured image
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }
        
        $post->delete();

        return redirect()->route('admin.posts.index')
                        ->with('success', 'Post deleted successfully.');
    }

    /**
     * Bulk delete posts
     */
    public function bulkDelete(Request $request)
    {
        $request->validate([
            'post_ids' => 'required|array',
            'post_ids.*' => 'exists:posts,id'
        ]);

        // Get all posts to delete their images
        $posts = Post::whereIn('id', $request->post_ids)->get();
        
        foreach ($posts as $post) {
            // Delete featured image
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }
        }

        $count = Post::whereIn('id', $request->post_ids)->delete();

        return redirect()->route('admin.posts.index')
                        ->with('success', "{$count} post(s) deleted successfully.");
    }

    /**
     * Generate a unique slug for the post.
     */
    private function generateUniqueSlug($title, $excludeId = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (true) {
            $query = Post::where('slug', $slug);
            
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

    /**
     * Check if a slug is valid (URL-friendly).
     */
    private function isValidSlug($slug)
    {
        // Check if slug contains only lowercase letters, numbers, and hyphens
        // No spaces, uppercase letters, or special characters
        return preg_match('/^[a-z0-9\-]+$/', $slug) && !preg_match('/--+/', $slug);
    }
}