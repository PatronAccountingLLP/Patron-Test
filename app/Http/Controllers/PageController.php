<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageCategory;
use App\Services\TemplateService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of pages.
     */
    public function index(Request $request)
    {
        $query = Page::published()->with('categories')->latest('published_at');
        
        if ($request->has('category')) {
            $category = PageCategory::where('slug', $request->category)->first();
            if ($category) {
                $query->whereHas('categories', function ($q) use ($category) {
                    $q->where('page_categories.id', $category->id);
                });
            }
        }
        
        $pages = $query->paginate(10);
        
        return view('frontend.pages.index', compact('pages'));
    }

    /**
     * Display the specified page.
     */
    public function show(Page $page)
    {
        // return $page;
        if (!$page->isPublished() && !empty($page->$directry_label)) {
            abort(404);
        }

        // Determine which template to use
        $template = $page->template ?? 'default';
        
        // Check if the template exists using TemplateService
        if (!TemplateService::templateExists($template)) {
            $template = 'default';
        }
        
        // Check if the template view file exists
        $templateView = "frontend.pages.templates.{$template}";
        if (!view()->exists($templateView)) {
            $templateView = 'frontend.pages.templates.default';
        }

        return view($templateView, compact('page'));
    }
    
      public function directryPageContent($directry_label,$slug)
    {
        // if ($directry_label === 'society-registration') {
        //     abort(410);
        // }


        if ($slug) {
        $fullSlug = $directry_label . '-' . $slug;
                // 👉 1️⃣ Handle 410 (drug-license URLs)
       if (
       preg_match('/^drug[- ]?licen[cs]e/i', $slug) ||
    preg_match('/^drug[- ]?licen[cs]e/i', $fullSlug) ||

    preg_match('/^society[- ]?registration/i', $slug) ||
    preg_match('/^society[- ]?registration/i', $fullSlug) ||

    preg_match('/llp-registration/i', $slug) ||
    preg_match('/llp-registration/i', $fullSlug) ||

    preg_match('/registration-for-12a-80g-certificate/i', $slug) ||
    preg_match('/registration-for-12a-80g-certificate/i', $fullSlug) ||

    $directry_label === 'trade-license' ||

   (
        preg_match('/^udyam-registration$/i', $directry_label) &&
        in_array(strtolower($slug), ['amritsar', 'patna'])
    ) 
    ) {
        abort(410, 'This page has been permanently removed');
    }

        if (view()->exists('frontend.staticPage.' . $fullSlug)) {
            return view('frontend.staticPage.' . $fullSlug);
        }
        if (view()->exists('frontend.cityPages.' . $fullSlug)) {
            return view('frontend.cityPages.' . $fullSlug);
        }
         }

        $page=Page::whereNotNull('directry_label')->where(['slug'=>$slug,'directry_label'=>$directry_label])->first();
        
        if(!$page){
            abort(404);
        }
        
        if (!$page->isPublished()) {
            abort(404);
        }

        // Determine which template to use
        $template = $page->template ?? 'default';
        
        // Check if the template exists using TemplateService
        if (!TemplateService::templateExists($template)) {
            $template = 'default';
        }
        
        // Check if the template view file exists
        $templateView = "frontend.pages.templates.{$template}";
        if (!view()->exists($templateView)) {
            $templateView = 'frontend.pages.templates.default';
        }

        return view($templateView, compact('page'));
    }

    /**
     * Display pages by category.
     */
    public function pagesByCategory(PageCategory $category)
    {
        $pages = $category->publishedPages()
                         ->with('categories')
                         ->latest('published_at')
                         ->paginate(10);
        
        return view('frontend.pages.category', compact('pages', 'category'));
    }

      /**
     * Display the privacy policy page.
     */
    public function privacyPolicy()
    {
        return view('frontend.pages.privacy-policy');
    }

    public function hello()
    {
        return view('frontend.pages.hello');
    }

    /**
     * Display the terms-condition page.
     */
    public function termsCondition()
    {
        return view('frontend.pages.terms-and-conditions');
    }
}