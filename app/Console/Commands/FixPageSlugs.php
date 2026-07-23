<?php

namespace App\Console\Commands;

use App\Models\Page;
use Illuminate\Console\Command;

class FixPageSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pages:fix-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix page slugs that contain Lorem ipsum text';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting to fix page slugs...');
        
        $pages = Page::all();
        $fixed = 0;
        
        foreach ($pages as $page) {
            if ($this->isLoremIpsumSlug($page->slug)) {
                $oldSlug = $page->slug;
                $newSlug = Page::generateUniqueSlug($page->title, $page->id);
                
                $page->slug = $newSlug;
                $page->save();
                
                $this->line("Fixed: '{$page->title}' - Changed slug from '{$oldSlug}' to '{$newSlug}'");
                $fixed++;
            }
        }
        
        if ($fixed > 0) {
            $this->info("Fixed {$fixed} page slugs successfully!");
        } else {
            $this->info('No problematic slugs found. All page slugs are already correct.');
        }
        
        return 0;
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
            'molestiae', 'repellendus', 'doloribus', 'aliquip', 'ipsa', 'magna', 'nulla'
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
