<?php

namespace App\Console\Commands;

use App\Models\Page;
use Illuminate\Console\Command;

class ConvertPageSlugsToSimple extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pages:convert-to-simple-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert page slugs from timestamp format to simple title-based format';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Converting page slugs to simple format...');
        
        $pages = Page::all();
        $converted = 0;
        
        foreach ($pages as $page) {
            // Check if slug contains timestamp pattern (YYYY-MM-DD-HHMMSS)
            if (preg_match('/-\d{4}-\d{2}-\d{2}-\d{6}$/', $page->slug)) {
                $oldSlug = $page->slug;
                $newSlug = Page::generateUniqueSlug($page->title, $page->id);
                
                $page->slug = $newSlug;
                $page->save();
                
                $this->line("Converted: '{$page->title}' - Changed slug from '{$oldSlug}' to '{$newSlug}'");
                $converted++;
            }
        }
        
        if ($converted > 0) {
            $this->info("Converted {$converted} page slugs to simple format successfully!");
        } else {
            $this->info('No timestamp-based slugs found. All page slugs are already in simple format.');
        }
        
        return 0;
    }
}
