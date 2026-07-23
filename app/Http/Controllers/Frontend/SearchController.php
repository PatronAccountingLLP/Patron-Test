<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Page;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Search posts by title
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchPosts(Request $request)
    {
        $query = $request->input('q', '');
        
        if (empty($query)) {
            return response()->json([]);
        }
        
        // Search posts by title with a limit of 10 results
        $posts = Post::where('status', 'published')
            ->where('title', 'LIKE', '%' . $query . '%')
            ->select('id', 'title', 'slug', 'excerpt', 'content')
            ->limit(10)
            ->get()
            ->map(function ($post) {
                return [
                    'id' => $post->id,
                    'title' => $post->title,
                    'slug' => $post->slug,
                    'excerpt' => $post->excerpt ?? strip_tags(substr($post->content, 0, 150)),
                    'content' => strip_tags(substr($post->content, 0, 150))
                ];
            });
        
        return response()->json($posts);
    }

    /**
     * Search pages by title
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchPages(Request $request)
    {
        $query = $request->input('q', '');
        
        if (empty($query)) {
            return response()->json([]);
        }
        
        // Search pages by title with a limit of 10 results
        $pages = Page::where('status', 'published')
            ->where('title', 'LIKE', '%' . $query . '%')
            ->select('id', 'title', 'slug', 'excerpt', 'content')
            ->limit(10)
            ->get()
            ->map(function ($page) {
                return [
                    'id' => $page->id,
                    'title' => $page->title,
                    'slug' => $page->slug,
                    'excerpt' => $page->excerpt ?? strip_tags(substr($page->content, 0, 150)),
                    'content' => strip_tags(substr($page->content, 0, 150))
                ];
            });
        
        return response()->json($pages);
    }
}
