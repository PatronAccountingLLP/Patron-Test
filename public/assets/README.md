# Asset Directory Structure

## Created Directories:

### `/public/images/`
- General images for the website
- Product images, banners, etc.

### `/public/assets/`
- Organized assets directory

### `/public/assets/images/`
- Logo, icons, and UI images
- Recommended for branding assets

### `/public/assets/css/`
- Custom CSS files
- Theme files

### `/public/assets/js/`
- Custom JavaScript files
- Application scripts

## Logo Usage:

### Current Implementation:
The navbar in `layouts/app.blade.php` now includes:
- Primary: `logo.png` (place your PNG logo here)
- Fallback: `logo.svg` (SVG version available)
- Default: Icon + text fallback if no logo found

### Recommended Logo Specifications:
- **PNG Format**: 200x40px or 400x80px for retina
- **SVG Format**: Scalable vector format (preferred)
- **File Location**: `/public/logo.png` or `/public/assets/images/logo.png`

### File Formats Supported:
- PNG (recommended for photos/complex images)
- SVG (recommended for logos/icons)
- JPG (for photographs)
- WebP (modern format for web optimization)

## Usage Examples:

### In Blade Templates:
```php
<!-- Direct asset -->
<img src="{{ asset('logo.png') }}" alt="Logo">

<!-- From assets directory -->
<img src="{{ asset('assets/images/logo.png') }}" alt="Logo">

<!-- With conditional check -->
@if(file_exists(public_path('logo.png')))
    <img src="{{ asset('logo.png') }}" alt="Logo">
@endif
```

### In CSS:
```css
.logo {
    background-image: url('/assets/images/logo.png');
}
```

## Next Steps:
1. Replace `/public/logo.png` with your actual logo
2. Ensure logo dimensions work well at 40px height
3. Test logo visibility on both light and dark backgrounds
4. Consider creating a favicon using your logo