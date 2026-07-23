<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageCategoryController extends Controller
{
    /**
     * Display a listing of the page categories.
     */
    public function index()
    {
        $categories = PageCategory::withCount('pages')->latest()->paginate(15);
        return view('admin.page-categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new page category.
     */
    public function create()
    {
        return view('admin.page-categories.create');
    }

    /**
     * Store a newly created page category in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:page_categories,slug',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();
        
        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        PageCategory::create($data);

        return redirect()->route('admin.page-categories.index')
                        ->with('success', 'Page category created successfully.');
    }

    /**
     * Display the specified page category.
     */
    public function show(PageCategory $pageCategory)
    {
        $pageCategory->load('pages');
        $category = $pageCategory;
        return view('admin.page-categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified page category.
     */
    public function edit(PageCategory $pageCategory)
    {
        $category = $pageCategory;
        return view('admin.page-categories.edit', compact('category'));
    }

    /**
     * Update the specified page category in storage.
     */
    public function update(Request $request, PageCategory $pageCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:page_categories,slug,' . $pageCategory->id,
            'description' => 'nullable|string',
        ]);

        $data = $request->all();
        
        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        $pageCategory->update($data);

        return redirect()->route('admin.page-categories.show', $pageCategory)
                        ->with('success', 'Page category updated successfully.');
    }

    /**
     * Remove the specified page category from storage.
     */
    public function destroy(PageCategory $pageCategory)
    {
        $pageCategory->delete();

        return redirect()->route('admin.page-categories.index')
                        ->with('success', 'Page category deleted successfully.');
    }
}