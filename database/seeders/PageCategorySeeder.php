<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PageCategory;

class PageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Main Pages',
                'slug' => 'main-pages',
                'description' => 'Important website pages'
            ],
            [
                'name' => 'Legal',
                'slug' => 'legal',
                'description' => 'Legal pages and policies'
            ],
            [
                'name' => 'Help',
                'slug' => 'help',
                'description' => 'Help and support pages'
            ],
            [
                'name' => 'Company',
                'slug' => 'company',
                'description' => 'Company information pages'
            ]
        ];

        foreach ($categories as $category) {
            PageCategory::create($category);
        }
    }
}