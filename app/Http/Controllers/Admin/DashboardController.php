<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Page;
use App\Models\PostCategory;
// use App\Models\PageCategory; // Removed from admin
use App\Models\Menu;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        $stats = [
            'posts' => Post::count(),
            'pages' => Page::count(),
            'post_categories' => PostCategory::count(),
            // 'page_categories' => PageCategory::count(), // Removed from admin
            'menus' => Menu::count(),
            'users' => User::count(),
            'published_posts' => Post::published()->count(),
            'draft_posts' => Post::draft()->count(),
            'published_pages' => Page::published()->count(),
            'draft_pages' => Page::draft()->count(),
        ];

        $recent_posts = Post::with('categories')->latest()->limit(5)->get();
        $recent_pages = Page::latest()->limit(5)->get(); // Removed categories relationship

        return view('admin.dashboard', compact('stats', 'recent_posts', 'recent_pages'));
    }
}