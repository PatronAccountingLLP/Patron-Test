# SequelZone Laravel CMS - Content & Image Management Guide

## How to Add Images and Custom Content to Pages

### Method 1: Using the Admin Panel (Recommended)

#### Accessing the Page Editor
1. Navigate to your admin dashboard at `http://127.0.0.1:8000/admin`
2. Go to **Pages** > **All Pages**
3. Click **Edit** on the "About Us" page (or any page you want to modify)

#### Adding Images
There are several ways to add images to your pages:

##### A. Featured Image (Main Page Image)
- In the **Featured Image** section on the right sidebar
- Click **Choose File** and select an image from your computer
- The image will be displayed at the top of your page
- Supported formats: JPG, PNG, GIF, WebP

##### B. Images Within Content
Use the **Content Helper Tools** below the content textarea:

1. **Insert Image Button**: Adds a centered image with caption
   ```html
   <div class="text-center my-4">
       <img src="/storage/images/your-image.jpg" alt="Image description" class="img-fluid rounded shadow">
       <p class="mt-2 text-muted small">Image caption here</p>
   </div>
   ```

2. **Manual HTML**: You can also add images directly in the content area:
   ```html
   <img src="/storage/images/your-image.jpg" alt="Description" class="img-fluid">
   ```

#### Using Content Helper Tools

The enhanced page editor includes helper buttons for common content elements:

##### 1. **Insert Image**
- Creates a responsive, centered image with caption
- Perfect for showcasing products, team photos, or illustrations

##### 2. **Add Section** 
- Creates a full-width section with container
- Ideal for organizing content into distinct areas
- Includes title, lead text, and content area

##### 3. **Two Columns**
- Creates side-by-side content layout
- Perfect for comparisons, feature lists, or text + image combinations

##### 4. **Button**
- Adds call-to-action buttons
- Customizable text, links, and styling
- Includes Bootstrap icons

##### 5. **List**
- Creates styled lists with checkmark icons
- Great for features, benefits, or step-by-step instructions

##### 6. **Card**
- Adds highlighted content boxes
- Perfect for testimonials, important notices, or featured content

### Method 2: Direct File Upload

#### Step 1: Upload Images to Storage
```bash
# Create images directory (already done)
php artisan storage:link

# Upload your images to:
public/storage/images/
```

#### Step 2: Reference Images in Content
```html
<!-- Relative path from public directory -->
<img src="/storage/images/about-hero.jpg" alt="About Us Hero Image">

<!-- With responsive classes -->
<img src="/storage/images/team-photo.jpg" alt="Our Team" class="img-fluid rounded shadow">
```

### Method 3: Using External Images

You can also use images from external sources:
```html
<img src="https://via.placeholder.com/600x400/007bff/ffffff?text=Your+Content" alt="Placeholder">
```

### Sample Page Content Structure

Here's a complete example of rich content for the About Us page:

```html
<!-- Hero Section -->
<section class="bg-primary text-white py-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">About Our SequelZone Laravel CMS</h1>
                <p class="lead">We combine the best features of SequelZone with Laravel's power.</p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="/storage/images/cms-dashboard.jpg" alt="CMS Dashboard" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Features Grid -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-speedometer2 fs-4"></i>
                        </div>
                        <h5>Lightning Fast</h5>
                        <p class="text-muted">Built on Laravel for optimal performance.</p>
                    </div>
                </div>
            </div>
            <!-- Repeat for more cards -->
        </div>
    </div>
</section>
```

### Best Practices for Images

#### 1. **Image Optimization**
- Use appropriate file formats (JPG for photos, PNG for graphics)
- Optimize file sizes (recommended: under 500KB for web)
- Use descriptive alt text for accessibility

#### 2. **Responsive Images**
- Always include `class="img-fluid"` for responsive behavior
- Consider different screen sizes in your layout

#### 3. **Image Organization**
```
public/storage/images/
├── pages/
│   ├── about-us/
│   │   ├── hero-image.jpg
│   │   ├── team-photo.jpg
│   │   └── office-photo.jpg
│   └── contact/
└── general/
    ├── logo.png
    └── favicon.ico
```

#### 4. **SEO-Friendly Naming**
- Use descriptive filenames: `team-meeting-2024.jpg` instead of `IMG_001.jpg`
- Include relevant keywords in alt text

### Custom CSS Classes Available

The CMS includes Bootstrap 5 classes and custom utilities:

```html
<!-- Image Styling -->
<img class="img-fluid rounded shadow" src="...">
<img class="img-fluid rounded-circle" src="..."> <!-- Circular images -->

<!-- Layout Classes -->
<div class="text-center">...</div>
<div class="py-5">...</div> <!-- Padding top/bottom -->
<div class="my-4">...</div>  <!-- Margin top/bottom -->

<!-- Background Colors -->
<section class="bg-primary text-white">...</section>
<section class="bg-light">...</section>
<section class="bg-dark text-white">...</section>
```

### Example: Complete About Us Page

I've created a sample content file at:
`/storage/app/sample-about-us-content.html`

This includes:
- ✅ Hero section with image and call-to-action buttons
- ✅ Mission statement
- ✅ Feature cards with icons
- ✅ Technology stack with images
- ✅ Statistics section
- ✅ Call-to-action section

You can copy this content and paste it into your page editor, then customize the images, text, and links as needed.

### Troubleshooting

#### Images Not Loading?
1. Check if `php artisan storage:link` was run
2. Verify images are in `public/storage/images/` directory
3. Check file permissions
4. Verify image paths in HTML

#### Content Not Saving?
1. Check for HTML validation errors
2. Ensure required fields are filled
3. Check browser console for JavaScript errors

### Advanced Tips

1. **Use placeholder services** for testing:
   - `https://via.placeholder.com/600x400/007bff/ffffff?text=Your+Text`
   - `https://picsum.photos/600/400` (random photos)

2. **Bootstrap Icons** are available:
   ```html
   <i class="bi bi-heart"></i>
   <i class="bi bi-star-fill"></i>
   <i class="bi bi-check-circle"></i>
   ```

3. **Custom animations** can be added with CSS:
   ```html
   <div class="fade-in">Content with fade animation</div>
   ```

This guide should help you create rich, engaging pages with images and custom content in your SequelZone Laravel CMS!