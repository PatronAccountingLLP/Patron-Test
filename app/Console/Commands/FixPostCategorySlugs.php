<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PostCategory;
use Illuminate\Support\Str;

class FixPostCategorySlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'categories:fix-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix post category slugs that are incorrectly generated';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting to fix post category slugs...');
        
        $categories = PostCategory::all();
        $fixed = 0;
        
        foreach ($categories as $category) {
            $oldSlug = $category->slug;
            
            // Check if slug is problematic (contains lorem ipsum-like text or is too long)
            if (strlen($oldSlug) > 50 || 
                str_contains(strtolower($oldSlug), 'lorem') ||
                str_contains(strtolower($oldSlug), 'ipsum') ||
                str_contains(strtolower($oldSlug), 'dolor') ||
                str_contains(strtolower($oldSlug), 'adipisicing') ||
                str_contains(strtolower($oldSlug), 'consectetur') ||
                preg_match('/[^\w\-]/', $oldSlug)) {
                
                // Generate new slug from name
                $newSlug = PostCategory::generateUniqueSlug($category->name, $category->id);
                
                $category->slug = $newSlug;
                $category->save();
                
                $this->line("Fixed: '{$category->name}' - Changed slug from '{$oldSlug}' to '{$newSlug}'");
                $fixed++;
            }
        }
        
        if ($fixed > 0) {
            $this->info("Fixed {$fixed} post category slugs successfully!");
        } else {
            $this->info('No problematic slugs found. All category slugs are already correct.');
        }
        
        return 0;
    }
}
