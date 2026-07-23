<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Illuminate\Support\Str;

class FixPostSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:fix-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix missing or invalid post slugs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting to fix post slugs...');

        // Find posts with missing, empty, or invalid slugs
        $posts = Post::where(function($query) {
            $query->whereNull('slug')
                  ->orWhere('slug', '')
                  ->orWhere('slug', 'LIKE', '% %') // Contains spaces
                  ->orWhere('slug', 'REGEXP', '[A-Z]') // Contains uppercase
                  ->orWhereRaw("slug != LOWER(REPLACE(REPLACE(REPLACE(title, ' ', '-'), '--', '-'), '\'', ''))"); // Slug doesn't match title
        })->get();

        // Also check for posts where slug doesn't properly represent the title
        $allPosts = Post::all();
        foreach ($allPosts as $post) {
            $expectedSlug = Str::slug($post->title);
            if ($post->slug !== $expectedSlug && !$posts->contains('id', $post->id)) {
                $posts->push($post);
            }
        }

        $this->info("Found {$posts->count()} posts that need slug fixes.");

        $fixed = 0;
        foreach ($posts as $post) {
            $oldSlug = $post->slug;
            $newSlug = Post::generateUniqueSlug($post->title, $post->id);
            
            $post->slug = $newSlug;
            $post->save();
            
            $this->line("Fixed: '{$post->title}'");
            $this->line("  Old slug: '{$oldSlug}'");
            $this->line("  New slug: '{$newSlug}'");
            $this->line('');
            
            $fixed++;
        }

        $this->info("Successfully fixed {$fixed} post slugs!");
        
        return Command::SUCCESS;
    }
}
