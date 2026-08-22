<?php
/**
 * PDF Parser Autoloader
 * Simple PSR-4 autoloader for Smalot PdfParser
 */

spl_autoload_register(function ($class) {
    // Only handle Smalot\PdfParser namespace
    $prefix = 'Smalot\\PdfParser\\';
    $len = strlen($prefix);
    
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    
    // Get relative class name
    $relativeClass = substr($class, $len);
    
    // Try multiple base directories
    $baseDirs = [
        __DIR__ . '/smalot/pdfparser/src/Smalot/PdfParser/',
        dirname(__DIR__) . '/src/Smalot/PdfParser/',
    ];
    
    foreach ($baseDirs as $baseDir) {
        $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';
        if (file_exists($file)) {
            require $file;
            return;
        }
    }
});
