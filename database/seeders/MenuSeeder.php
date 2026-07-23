<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Post;
use App\Models\Page;
use App\Models\PostCategory;
use App\Models\PageCategory;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Main Menu
        $mainMenu = Menu::create([
            'name' => 'Main Navigation',
            'slug' => 'main-navigation',
            'description' => 'Primary navigation menu for the website',
        ]);

        // Add menu items to Main Navigation
        MenuItem::create([
            'menu_id' => $mainMenu->id,
            'title' => 'Home',
            'type' => 'custom',
            'url' => '/',
            'sort_order' => 1,
        ]);

        MenuItem::create([
            'menu_id' => $mainMenu->id,
            'title' => 'Posts',
            'type' => 'custom',
            'url' => '/posts',
            'sort_order' => 2,
        ]);

        MenuItem::create([
            'menu_id' => $mainMenu->id,
            'title' => 'Pages',
            'type' => 'custom',
            'url' => '/pages',
            'sort_order' => 3,
        ]);

        // Add About Us page to menu
        $aboutPage = Page::where('slug', 'about-us')->first();
        if ($aboutPage) {
            MenuItem::create([
                'menu_id' => $mainMenu->id,
                'title' => 'About Us',
                'type' => 'page',
                'object_id' => $aboutPage->id,
                'object_type' => 'page',
                'sort_order' => 4,
            ]);
        }

        // Add Contact Us page to menu
        $contactPage = Page::where('slug', 'contact-us')->first();
        if ($contactPage) {
            MenuItem::create([
                'menu_id' => $mainMenu->id,
                'title' => 'Contact',
                'type' => 'page',
                'object_id' => $contactPage->id,
                'object_type' => 'page',
                'sort_order' => 5,
            ]);
        }

        // Create Footer Menu
        $footerMenu = Menu::create([
            'name' => 'Footer Menu',
            'slug' => 'footer-menu',
            'description' => 'Menu for footer links',
        ]);

        // Add Privacy Policy to footer menu
        $privacyPage = Page::where('slug', 'privacy-policy')->first();
        if ($privacyPage) {
            MenuItem::create([
                'menu_id' => $footerMenu->id,
                'title' => 'Privacy Policy',
                'type' => 'page',
                'object_id' => $privacyPage->id,
                'object_type' => 'page',
                'sort_order' => 1,
            ]);
        }

        // Add Terms of Service to footer menu
        $termsPage = Page::where('slug', 'terms-of-service')->first();
        if ($termsPage) {
            MenuItem::create([
                'menu_id' => $footerMenu->id,
                'title' => 'Terms of Service',
                'type' => 'page',
                'object_id' => $termsPage->id,
                'object_type' => 'page',
                'sort_order' => 2,
            ]);
        }

        // Add FAQ to footer menu
        $faqPage = Page::where('slug', 'faq')->first();
        if ($faqPage) {
            MenuItem::create([
                'menu_id' => $footerMenu->id,
                'title' => 'FAQ',
                'type' => 'page',
                'object_id' => $faqPage->id,
                'object_type' => 'page',
                'sort_order' => 3,
            ]);
        }

        // Create Categories Menu
        $categoriesMenu = Menu::create([
            'name' => 'Categories Menu',
            'slug' => 'categories-menu',
            'description' => 'Menu showing post categories',
        ]);

        // Add post categories to categories menu
        $categories = PostCategory::orderBy('name')->get();
        $sortOrder = 1;
        foreach ($categories as $category) {
            MenuItem::create([
                'menu_id' => $categoriesMenu->id,
                'title' => $category->name,
                'type' => 'post_category',
                'object_id' => $category->id,
                'object_type' => 'post_category',
                'sort_order' => $sortOrder++,
            ]);
        }
    }
}