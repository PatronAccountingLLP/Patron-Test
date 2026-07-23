<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostCategory;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'description' => 'Latest technology news and trends'
            ],
            [
                'name' => 'Programming',
                'slug' => 'programming',
                'description' => 'Programming tutorials and tips'
            ],
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'description' => 'Web development articles and guides'
            ],
            [
                'name' => 'Laravel',
                'slug' => 'laravel',
                'description' => 'Laravel framework tutorials and news'
            ],
            [
                'name' => 'News',
                'slug' => 'news',
                'description' => 'General news and updates'
            ],
            [
                'name' => 'Tutorial',
                'slug' => 'tutorial',
                'description' => 'Step-by-step tutorials'
            ]
        ];

        foreach ($categories as $category) {
            PostCategory::create($category);
        }
    }
}