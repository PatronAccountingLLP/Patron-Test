<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the testimonials.
     */
    public function index()
    {
        $testimonials = Testimonial::ordered()->paginate(20);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new testimonial.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created testimonial in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:10240',
            'status' => 'required|in:published,draft',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonials', 'public');
            $validated['image'] = $imagePath;
        }

        // Handle video upload
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('testimonials/videos', 'public');
            $validated['video'] = $videoPath;
        }

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified testimonial.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified testimonial.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified testimonial in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:10240',
            'status' => 'required|in:published,draft',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        // Handle image removal
        if ($request->input('remove_image') == '1') {
            if ($testimonial->image) {
                Storage::disk('public')->delete($testimonial->image);
                $validated['image'] = null;
            }
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($testimonial->image) {
                Storage::disk('public')->delete($testimonial->image);
            }
            
            $imagePath = $request->file('image')->store('testimonials', 'public');
            $validated['image'] = $imagePath;
        }

        // Handle video removal
        if ($request->input('remove_video') == '1') {
            if ($testimonial->video) {
                Storage::disk('public')->delete($testimonial->video);
                $validated['video'] = null;
            }
        }

        // Handle video upload
        if ($request->hasFile('video')) {
            // Delete old video
            if ($testimonial->video) {
                Storage::disk('public')->delete($testimonial->video);
            }
            
            $videoPath = $request->file('video')->store('testimonials/videos', 'public');
            $validated['video'] = $videoPath;
        }

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified testimonial from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        // Delete image if exists
        if ($testimonial->image) {
            Storage::disk('public')->delete($testimonial->image);
        }

        // Delete video if exists
        if ($testimonial->video) {
            Storage::disk('public')->delete($testimonial->video);
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial deleted successfully.');
    }

    /**
     * Bulk delete testimonials.
     */
    public function bulkDelete(Request $request)
    {
        $request->validate([
            'testimonial_ids' => 'required|array',
            'testimonial_ids.*' => 'exists:testimonials,id',
        ]);

        $testimonials = Testimonial::whereIn('id', $request->testimonial_ids)->get();
        
        foreach ($testimonials as $testimonial) {
            // Delete images
            if ($testimonial->image) {
                Storage::disk('public')->delete($testimonial->image);
            }
            // Delete videos
            if ($testimonial->video) {
                Storage::disk('public')->delete($testimonial->video);
            }
            $testimonial->delete();
        }

        return redirect()->route('admin.testimonials.index')
            ->with('success', count($request->testimonial_ids) . ' testimonials deleted successfully.');
    }
}
