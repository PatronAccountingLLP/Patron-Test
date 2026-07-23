<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TemplateService
{
    /**
     * Get available page templates by scanning the templates directory.
     */
    public static function getAvailableTemplates(): array
    {
        $templatesPath = resource_path('views/frontend/pages/templates');
        $templates = [];

        if (!File::exists($templatesPath)) {
            return self::getFallbackTemplates();
        }

        $files = File::files($templatesPath);

        foreach ($files as $file) {
            // Skip if it's not a valid template file
            if (!self::isValidTemplateFile($file)) {
                continue;
            }

            $filename = self::getTemplateKey($file);

            $templates[$filename] = [
                'name' => self::formatTemplateName($filename),
                'description' => self::getTemplateDescription($filename),
                'preview' => self::getTemplatePreview($filename),
                'file' => $file->getFilename()
            ];
        }

        // Ensure default template is always available
        if (!isset($templates['default'])) {
            $templates['default'] = [
                'name' => 'Default Template',
                'description' => 'Standard page layout',
                'preview' => '/images/templates/default.png',
                'file' => 'default.blade.php'
            ];
        }

        // Sort templates with default first
        uksort($templates, function($a, $b) {
            if ($a === 'default') return -1;
            if ($b === 'default') return 1;
            return strcasecmp($a, $b);
        });

        return $templates;
    }

    /**
     * Check if a file is a valid template file.
     */
    private static function isValidTemplateFile($file): bool
    {
        $extension = $file->getExtension();
        $allowedExtensions = ['php'];
        
        return in_array($extension, $allowedExtensions) || 
               str_ends_with($file->getFilename(), '.blade.php');
    }

    /**
     * Get the template key from filename.
     */
    private static function getTemplateKey($file): string
    {
        $filename = $file->getFilename();
        
        // Remove .blade.php extension
        if (str_ends_with($filename, '.blade.php')) {
            return str_replace('.blade.php', '', $filename);
        }
        
        // Remove .php extension
        if (str_ends_with($filename, '.php')) {
            return str_replace('.php', '', $filename);
        }
        
        return $file->getFilenameWithoutExtension();
    }

    /**
     * Format template name from filename.
     */
    private static function formatTemplateName(string $filename): string
    {
        // Convert kebab-case or snake_case to Title Case
        return Str::title(str_replace(['-', '_'], ' ', $filename));
    }

    /**
     * Get template description based on filename.
     */
    private static function getTemplateDescription(string $filename): string
    {
        $descriptions = [
            'default' => 'Standard page layout with sidebar',
            'full-width' => 'Full width layout without sidebar',
            'landing' => 'Hero section with call-to-action',
            'contact' => 'Contact form with map integration',
            'portfolio' => 'Gallery layout for showcasing work',
            'about' => 'Team and company information layout',
            'test' => 'Test template for development purposes',
        ];

        return $descriptions[$filename] ?? 'Custom page template';
    }

    /**
     * Get template preview image path.
     */
    private static function getTemplatePreview(string $filename): string
    {
        $previewPath = "/images/templates/{$filename}.png";
        
        // Check if preview image exists in public directory
        if (file_exists(public_path($previewPath))) {
            return $previewPath;
        }

        // Return default preview image
        return '/images/templates/default.png';
    }

    /**
     * Get fallback templates if directory doesn't exist.
     */
    private static function getFallbackTemplates(): array
    {
        return [
            'default' => [
                'name' => 'Default Template',
                'description' => 'Standard page layout',
                'preview' => '/images/templates/default.png',
                'file' => 'default.blade.php'
            ]
        ];
    }

    /**
     * Check if a specific template exists.
     */
    public static function templateExists(string $templateName): bool
    {
        $templates = self::getAvailableTemplates();
        return array_key_exists($templateName, $templates);
    }

    /**
     * Get template validation rules for form requests.
     */
    public static function getValidationRule(): string
    {
        $templates = self::getAvailableTemplates();
        $templateNames = array_keys($templates);
        
        return 'nullable|string|in:' . implode(',', $templateNames);
    }
}