<?php

namespace App\Console\Commands;

use App\Models\Menu;
use Illuminate\Console\Command;

class FixMenuSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'menus:fix-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix menu slugs that contain Lorem ipsum text';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting to fix menu slugs...');
        
        $menus = Menu::all();
        $fixed = 0;
        
        foreach ($menus as $menu) {
            if ($this->isLoremIpsumSlug($menu->slug) || $this->isLoremIpsumText($menu->description)) {
                $oldSlug = $menu->slug;
                $newSlug = Menu::generateUniqueSlug($menu->name, $menu->id);
                
                $menu->slug = $newSlug;
                
                // Also clean up description if it has Lorem ipsum
                if ($this->isLoremIpsumText($menu->description)) {
                    $menu->description = 'Menu for ' . $menu->name;
                }
                
                $menu->save();
                
                $this->line("Fixed: '{$menu->name}' - Changed slug from '{$oldSlug}' to '{$newSlug}'");
                $fixed++;
            }
        }
        
        if ($fixed > 0) {
            $this->info("Fixed {$fixed} menu slugs successfully!");
        } else {
            $this->info('No problematic slugs found. All menu slugs are already correct.');
        }
        
        return 0;
    }

    /**
     * Check if a slug looks like Lorem ipsum text
     */
    private function isLoremIpsumSlug($slug)
    {
        return $this->isLoremIpsumText($slug);
    }

    /**
     * Check if text contains Lorem ipsum patterns
     */
    private function isLoremIpsumText($text)
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
            'molestiae', 'repellendus', 'doloribus', 'aliquip', 'ipsa', 'magna', 'nulla',
            'illo', 'error'
        ];

        $text = strtolower($text);
        
        // Check if text contains multiple Lorem ipsum words
        $matchCount = 0;
        foreach ($loremPatterns as $pattern) {
            if (strpos($text, $pattern) !== false) {
                $matchCount++;
            }
        }
        
        // If it contains 2 or more Lorem ipsum words, consider it problematic
        return $matchCount >= 2;
    }
}
