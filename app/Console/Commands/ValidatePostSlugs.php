<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Illuminate\Support\Str;

class ValidatePostSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:validate-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Validate that all post slugs match their titles';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Validating post slugs...');

        $posts = Post::all();
        $issues = [];

        foreach ($posts as $post) {
            $expectedSlug = Str::slug($post->title);
            
            if ($post->slug !== $expectedSlug) {
                $issues[] = [
                    'ID' => $post->id,
                    'Title' => $post->title,
                    'Current Slug' => $post->slug,
                    'Expected Slug' => $expectedSlug,
                    'URL' => url('/' . $post->slug)
                ];
            }
        }

        if (empty($issues)) {
            $this->info('✅ All post slugs are valid!');
        } else {
            $this->error("❌ Found {count($issues)} posts with slug issues:");
            $this->table(['ID', 'Title', 'Current Slug', 'Expected Slug', 'URL'], $issues);
            $this->info('Run "php artisan posts:fix-slugs" to fix these issues.');
        }

        return Command::SUCCESS;
    }
}
