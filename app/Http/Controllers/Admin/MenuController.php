<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Post;
use App\Models\Page;
use App\Models\PostCategory;
use App\Models\PageCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * Display a listing of the menus.
     */
    public function index()
    {
        $menus = Menu::withCount('allItems')->latest()->paginate(15);
        return view('admin.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new menu.
     */
    public function create()
    {
        $pages = \App\Models\Page::where('status', 'published')->orderBy('title')->get();
        $posts = \App\Models\Post::where('status', 'published')->orderBy('title')->get();
        $postCategories = \App\Models\PostCategory::orderBy('name')->get();
        $pageCategories = \App\Models\PageCategory::orderBy('name')->get();
        
        return view('admin.menus.create', compact('pages', 'posts', 'postCategories', 'pageCategories'));
    }

    /**
     * Store a newly created menu in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'menu_items' => 'nullable|json',
        ]);

        $data = $request->only(['name', 'location', 'description']);
        $data['status'] = 'active';
        
        // Generate unique slug - let the model handle it
        // The model's boot method will automatically generate the slug
        
        // Create the menu
        $menu = Menu::create($data);

        // Process menu items if provided
        if ($request->menu_items && $request->menu_items !== '[]') {
            $menuItems = json_decode($request->menu_items, true);
            
            foreach ($menuItems as $itemData) {
                \App\Models\MenuItem::create([
                    'menu_id' => $menu->id,
                    'title' => $itemData['title'],
                    'url' => $itemData['url'],
                    'type' => $itemData['type'],
                    'object_id' => $itemData['object_id'],
                    'parent_id' => null, // For future nested menu support
                    'order' => $itemData['order'],
                    'status' => 'active',
                ]);
            }
        }

        return redirect()->route('admin.menus.index')
                        ->with('success', 'Menu created successfully with ' . count(json_decode($request->menu_items ?: '[]', true)) . ' items.');
    }

    /**
     * Display the specified menu.
     */
    public function show(Menu $menu)
    {
        $menu->load('items.children');
        return view('admin.menus.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified menu.
     */
    public function edit(Menu $menu)
    {
        $menu->load('allItems');
        $posts = Post::published()->select('id', 'title')->get();
        $pages = Page::published()->select('id', 'title')->get();
        $postCategories = PostCategory::select('id', 'name')->get();
        $pageCategories = PageCategory::select('id', 'name')->get();
        
        return view('admin.menus.edit', compact('menu', 'posts', 'pages', 'postCategories', 'pageCategories'));
    }

    /**
     * Update the specified menu in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:menus,slug,' . $menu->id,
            'description' => 'nullable|string',
            'status' => 'nullable',
        ]);

        $data = $request->only(['name', 'slug', 'description']);
        
        // Handle status checkbox - if checked it's 'active', otherwise 'inactive'
        $data['status'] = $request->has('status') && $request->status === 'active' ? 'active' : 'inactive';
        
        // Generate unique slug if not provided or if it looks like Lorem ipsum
        $slug = trim($data['slug'] ?? '');
        if (empty($slug) || $this->isLoremIpsumSlug($slug)) {
            $data['slug'] = Menu::generateUniqueSlug($data['name'], $menu->id);
        }

        $menu->update($data);

        return redirect()->route('admin.menus.index')
                        ->with('success', 'Menu updated successfully.');
    }

    /**
     * Remove the specified menu from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('admin.menus.index')
                        ->with('success', 'Menu deleted successfully.');
    }

    /**
     * Add a menu item to the menu.
     */
    public function addItem(Request $request, Menu $menu)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:post,page,post_category,page_category,custom',
            'url' => 'required_if:type,custom|nullable|string',
            'object_id' => 'required_unless:type,custom|nullable|integer',
            'parent_id' => 'nullable|exists:menu_items,id',
            'sort_order' => 'nullable|integer',
        ]);

        $data = $request->all();
        $data['menu_id'] = $menu->id;
        $data['object_type'] = $request->type !== 'custom' ? $request->type : null;
        $data['sort_order'] = $data['sort_order'] ?? 0;

        MenuItem::create($data);

        return redirect()->route('admin.menus.edit', $menu)
                        ->with('success', 'Menu item added successfully.');
    }

    /**
     * Update a menu item.
     */
    public function updateItem(Request $request, Menu $menu, MenuItem $item)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:post,page,post_category,page_category,custom',
            'url' => 'required_if:type,custom|nullable|string',
            'object_id' => 'required_unless:type,custom|nullable|integer',
            'parent_id' => 'nullable|exists:menu_items,id',
            'sort_order' => 'nullable|integer',
        ]);

        $data = $request->all();
        $data['object_type'] = $request->type !== 'custom' ? $request->type : null;

        $item->update($data);

        return redirect()->route('admin.menus.edit', $menu)
                        ->with('success', 'Menu item updated successfully.');
    }

    /**
     * Remove a menu item.
     */
    public function deleteItem(Menu $menu, MenuItem $item)
    {
        $item->delete();

        return redirect()->route('admin.menus.edit', $menu)
                        ->with('success', 'Menu item deleted successfully.');
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
            'molestiae', 'repellendus', 'doloribus', 'aliquip', 'ipsa', 'magna', 'nulla',
            'illo', 'error'
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