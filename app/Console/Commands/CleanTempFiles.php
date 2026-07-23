<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CleanTempFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'temp:clean {--hours=24 : Delete files older than this many hours}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean up temporary PDF files older than specified hours (default: 24 hours)';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $hours = $this->option('hours');
        $tempPath = storage_path('app/public/temp');
        
        if (!file_exists($tempPath)) {
            $this->info('No temp directory found. Nothing to clean.');
            return 0;
        }

        $this->info("Cleaning files older than {$hours} hours...");
        
        $files = glob($tempPath . '/*.pdf');
        $deletedCount = 0;
        $cutoffTime = time() - ($hours * 3600);

        foreach ($files as $file) {
            if (is_file($file) && filemtime($file) < $cutoffTime) {
                unlink($file);
                $deletedCount++;
                $this->line('Deleted: ' . basename($file));
            }
        }

        if ($deletedCount > 0) {
            $this->info("✅ Successfully deleted {$deletedCount} temporary file(s).");
        } else {
            $this->info('No old files to delete.');
        }

        return 0;
    }
}
