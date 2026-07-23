<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\PostCategory;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Welcome to SequelZone LLP',
                'slug' => 'welcome-to-sequelzone-llp',
                'content' => '<p>Welcome to your new SequelZone-like CMS built with Laravel! This is your first post. You can edit or delete it to get started with your content.</p><p>This CMS provides all the essential features you need:</p><ul><li>Posts and Pages management</li><li>Categories for both posts and pages</li><li>Menu management</li><li>User authentication</li><li>File uploads</li><li>Admin dashboard</li></ul><p>Start creating amazing content!</p>',
                'excerpt' => 'Welcome to your new SequelZone-like CMS built with Laravel framework. Start creating amazing content today!',
                'status' => 'published',
                'published_at' => now(),
            ],
            [
                'title' => 'Getting Started with Laravel',
                'slug' => 'getting-started-with-laravel',
                'content' => '<p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.</p><p>Laravel takes the pain out of development by easing common tasks used in many web projects, such as:</p><ul><li>Simple, fast routing engine</li><li>Powerful dependency injection container</li><li>Multiple back-ends for session and cache storage</li><li>Expressive, intuitive database ORM</li><li>Database agnostic schema migrations</li><li>Robust background job processing</li><li>Real-time event broadcasting</li></ul>',
                'excerpt' => 'Learn the basics of Laravel framework and start building amazing web applications.',
                'status' => 'published',
                'published_at' => now()->subDays(1),
            ],
            [
                'title' => 'Building a CMS with Laravel',
                'slug' => 'building-a-cms-with-laravel',
                'content' => '<p>Creating a content management system with Laravel is straightforward thanks to its powerful features and elegant syntax.</p><p>In this tutorial, we will cover:</p><ol><li>Setting up the database structure</li><li>Creating models and relationships</li><li>Building controllers for CRUD operations</li><li>Creating views with Blade templates</li><li>Implementing authentication</li><li>Adding file upload functionality</li></ol><p>By the end of this tutorial, you will have a fully functional CMS similar to SequelZone.</p>',
                'excerpt' => 'Learn how to build a complete content management system using Laravel framework.',
                'status' => 'published',
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Laravel vs Other PHP Frameworks',
                'slug' => 'laravel-vs-other-php-frameworks',
                'content' => '<p>Laravel has become one of the most popular PHP frameworks. But how does it compare to other frameworks like CodeIgniter, Symfony, or Zend?</p><p>Here are some key advantages of Laravel:</p><ul><li>Elegant syntax and readable code</li><li>Built-in ORM (Eloquent)</li><li>Artisan command line tool</li><li>Comprehensive testing features</li><li>Active community and ecosystem</li><li>Regular updates and LTS versions</li></ul><p>While other frameworks have their strengths, Laravel provides the best balance of features, performance, and developer experience.</p>',
                'excerpt' => 'Compare Laravel with other popular PHP frameworks and understand why Laravel is the preferred choice.',
                'status' => 'draft',
                'published_at' => null,
            ],
            [
                'title' => 'Advanced Laravel Features',
                'slug' => 'advanced-laravel-features',
                'content' => '<p>Laravel offers many advanced features that make it stand out from other frameworks:</p><h3>Eloquent ORM</h3><p>Laravel\'s Eloquent ORM provides a beautiful, simple ActiveRecord implementation for working with your database.</p><h3>Artisan CLI</h3><p>Artisan is the command-line interface included with Laravel. It provides helpful commands for development.</p><h3>Blade Templates</h3><p>Blade is Laravel\'s templating engine that allows you to use plain PHP in your views.</p><h3>Queue System</h3><p>Laravel provides a unified queue API across various queue backends.</p>',
                'excerpt' => 'Explore the advanced features that make Laravel a powerful framework for web development.',
                'status' => 'published',
                'published_at' => now()->subDays(3),
            ]
        ];

        foreach ($posts as $postData) {
            $post = Post::create($postData);
            
            // Attach random categories to each post
            $categories = PostCategory::inRandomOrder()->limit(rand(1, 3))->get();
            $post->categories()->attach($categories);
        }
    }
}