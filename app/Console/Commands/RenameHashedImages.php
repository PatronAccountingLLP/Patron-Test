<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\User;
use App\Models\Media;
use App\Models\Page;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RenameHashedImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'images:rename-hashed {--dry-run : Show what would be renamed without actually renaming}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rename hash-named images to descriptive names based on their associated content';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $dryRun = $this->option('dry-run');
        
        if ($dryRun) {
            $this->info('🔍 DRY RUN MODE: Showing what would be renamed without making changes');
            $this->newLine();
        }

        $renamedCount = 0;
        $errors = [];

        // Rename post featured images
        $this->info('📝 Processing Post Featured Images...');
        $posts = Post::whereNotNull('featured_image')->get();
        
        foreach ($posts as $post) {
            try {
                if ($this->isHashedFilename($post->featured_image)) {
                    $newPath = $this->renamePostImage($post, $dryRun);
                    if ($newPath) {
                        $renamedCount++;
                        $this->line("  ✅ Post: {$post->title} → " . basename($newPath));
                    }
                }
            } catch (\Exception $e) {
                $errors[] = "Post {$post->id}: " . $e->getMessage();
                $this->error("  ❌ Error with post {$post->id}: " . $e->getMessage());
            }
        }

        // Rename page featured images
        $this->info('📄 Processing Page Featured Images...');
        $pages = Page::whereNotNull('featured_image')->get();
        
        foreach ($pages as $page) {
            try {
                if ($this->isHashedFilename($page->featured_image)) {
                    $newPath = $this->renamePageImage($page, $dryRun);
                    if ($newPath) {
                        $renamedCount++;
                        $this->line("  ✅ Page: {$page->title} → " . basename($newPath));
                    }
                }
            } catch (\Exception $e) {
                $errors[] = "Page {$page->id}: " . $e->getMessage();
                $this->error("  ❌ Error with page {$page->id}: " . $e->getMessage());
            }
        }

        // Rename user profile images
        $this->info('👤 Processing User Profile Images...');
        $users = User::whereNotNull('profile_image')->get();
        
        foreach ($users as $user) {
            try {
                if ($this->isHashedFilename($user->profile_image)) {
                    $newPath = $this->renameUserImage($user, $dryRun);
                    if ($newPath) {
                        $renamedCount++;
                        $this->line("  ✅ User: {$user->name} → " . basename($newPath));
                    }
                }
            } catch (\Exception $e) {
                $errors[] = "User {$user->id}: " . $e->getMessage();
                $this->error("  ❌ Error with user {$user->id}: " . $e->getMessage());
            }
        }

        // Rename media files
        $this->info('📁 Processing Media Files...');
        $mediaFiles = Media::all();
        
        foreach ($mediaFiles as $media) {
            try {
                if ($this->isHashedFilename($media->file_path)) {
                    $newPath = $this->renameMediaFile($media, $dryRun);
                    if ($newPath) {
                        $renamedCount++;
                        $this->line("  ✅ Media: {$media->filename} → " . basename($newPath));
                    }
                }
            } catch (\Exception $e) {
                $errors[] = "Media {$media->id}: " . $e->getMessage();
                $this->error("  ❌ Error with media {$media->id}: " . $e->getMessage());
            }
        }

        $this->newLine();
        if ($dryRun) {
            $this->info("🔍 DRY RUN COMPLETE: {$renamedCount} files would be renamed");
        } else {
            $this->info("✨ COMPLETED: {$renamedCount} files renamed successfully");
        }

        if (!empty($errors)) {
            $this->newLine();
            $this->error("❌ Errors encountered:");
            foreach ($errors as $error) {
                $this->line("  • {$error}");
            }
        }

        return 0;
    }

    /**
     * Check if filename appears to be a hash (40+ alphanumeric characters)
     */
    private function isHashedFilename($filePath)
    {
        if (empty($filePath)) {
            return false;
        }

        $filename = basename($filePath);
        $nameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);
        
        // Check if it looks like a hash (long alphanumeric string)
        return strlen($nameWithoutExt) >= 20 && ctype_alnum(str_replace(['-', '_'], '', $nameWithoutExt));
    }

    /**
     * Rename a post featured image
     */
    private function renamePostImage(Post $post, $dryRun = false)
    {
        if (!Storage::disk('public')->exists($post->featured_image)) {
            throw new \Exception("File not found: {$post->featured_image}");
        }

        $extension = pathinfo($post->featured_image, PATHINFO_EXTENSION);
        $postSlug = Str::slug($post->title);
        $timestamp = $post->created_at->format('Y-m-d-H-i-s');
        $newFilename = $postSlug . '-featured-' . $timestamp . '.' . $extension;
        $newPath = 'posts/' . $newFilename;

        if (!$dryRun) {
            // Move the file
            $oldFullPath = Storage::disk('public')->path($post->featured_image);
            $newFullPath = Storage::disk('public')->path($newPath);
            
            // Create directory if it doesn't exist
            $newDir = dirname($newFullPath);
            if (!is_dir($newDir)) {
                mkdir($newDir, 0755, true);
            }
            
            if (rename($oldFullPath, $newFullPath)) {
                $post->update(['featured_image' => $newPath]);
                return $newPath;
            } else {
                throw new \Exception("Failed to rename file");
            }
        }

        return $newPath; // For dry run
    }

    /**
     * Rename a page featured image
     */
    private function renamePageImage(Page $page, $dryRun = false)
    {
        if (!Storage::disk('public')->exists($page->featured_image)) {
            throw new \Exception("File not found: {$page->featured_image}");
        }

        $extension = pathinfo($page->featured_image, PATHINFO_EXTENSION);
        $pageSlug = Str::slug($page->title);
        $timestamp = $page->created_at->format('Y-m-d-H-i-s');
        $newFilename = $pageSlug . '-featured-' . $timestamp . '.' . $extension;
        $newPath = 'images/pages/' . $newFilename;

        if (!$dryRun) {
            // Move the file
            $oldFullPath = Storage::disk('public')->path($page->featured_image);
            $newFullPath = Storage::disk('public')->path($newPath);
            
            // Create directory if it doesn't exist
            $newDir = dirname($newFullPath);
            if (!is_dir($newDir)) {
                mkdir($newDir, 0755, true);
            }
            
            if (rename($oldFullPath, $newFullPath)) {
                $page->update(['featured_image' => $newPath]);
                return $newPath;
            } else {
                throw new \Exception("Failed to rename file");
            }
        }

        return $newPath; // For dry run
    }

    /**
     * Rename a user profile image
     */
    private function renameUserImage(User $user, $dryRun = false)
    {
        if (!Storage::disk('public')->exists($user->profile_image)) {
            throw new \Exception("File not found: {$user->profile_image}");
        }

        $extension = pathinfo($user->profile_image, PATHINFO_EXTENSION);
        $userSlug = Str::slug($user->name);
        $timestamp = $user->created_at->format('Y-m-d-H-i-s');
        $newFilename = $userSlug . '-profile-' . $timestamp . '.' . $extension;
        $newPath = 'users/' . $newFilename;

        if (!$dryRun) {
            // Move the file
            $oldFullPath = Storage::disk('public')->path($user->profile_image);
            $newFullPath = Storage::disk('public')->path($newPath);
            
            // Create directory if it doesn't exist
            $newDir = dirname($newFullPath);
            if (!is_dir($newDir)) {
                mkdir($newDir, 0755, true);
            }
            
            if (rename($oldFullPath, $newFullPath)) {
                $user->update(['profile_image' => $newPath]);
                return $newPath;
            } else {
                throw new \Exception("Failed to rename file");
            }
        }

        return $newPath; // For dry run
    }

    /**
     * Rename a media file
     */
    private function renameMediaFile(Media $media, $dryRun = false)
    {
        if (!Storage::disk('public')->exists($media->file_path)) {
            throw new \Exception("File not found: {$media->file_path}");
        }

        $extension = pathinfo($media->file_path, PATHINFO_EXTENSION);
        $originalSlug = Str::slug(pathinfo($media->filename, PATHINFO_FILENAME));
        $timestamp = $media->created_at->format('Y-m-d-H-i-s');
        $newFilename = $originalSlug . '-' . $timestamp . '.' . $extension;
        
        // Keep the same directory structure but update filename
        $directory = dirname($media->file_path);
        $newPath = $directory . '/' . $newFilename;

        if (!$dryRun) {
            // Move the file
            $oldFullPath = Storage::disk('public')->path($media->file_path);
            $newFullPath = Storage::disk('public')->path($newPath);
            
            if (rename($oldFullPath, $newFullPath)) {
                $media->update([
                    'file_path' => $newPath,
                    'file_url' => Storage::disk('public')->url($newPath)
                ]);
                return $newPath;
            } else {
                throw new \Exception("Failed to rename file");
            }
        }

        return $newPath; // For dry run
    }
}
