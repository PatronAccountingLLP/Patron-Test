# Dynamic Menu Integration Guide

This guide shows how to integrate your database menus dynamically into your website templates.

## 🎯 Available Components

### 1. Header Navigation Menu
**Usage in header.blade.php:**
```blade
<ul class="navbar-nav ms-auto">
    {{-- Display header location menus --}}
    <x-dynamic-menu location="header" />
    
    {{-- Display primary location menus --}}
    <x-dynamic-menu location="primary" />
</ul>
```

### 2. Footer Menu Lists
**Usage in footer.blade.php:**
```blade
{{-- Display footer menus with custom title --}}
<x-dynamic-footer-menu location="footer" title="Quick Links" />

{{-- Display with fallback content --}}
<x-dynamic-footer-menu location="footer" title="Our Services">
    {{-- Fallback static links if no menu found --}}
    <div class="col-lg-3 col-md-6 mb-4">
        <h6 class="text-white mb-3 fw-bold">Our Services</h6>
        <ul class="list-unstyled">
            <li class="mb-2"><a href="#" class="text-light">Service 1</a></li>
            <li class="mb-2"><a href="#" class="text-light">Service 2</a></li>
        </ul>
    </div>
</x-dynamic-footer-menu>
```

## 📋 Menu Management Workflow

### 1. Create Menu in Admin Panel
1. Go to **Admin Dashboard** → **Menus** → **Add New Menu**
2. Enter menu details:
   - **Name**: "Main Navigation" 
   - **Location**: "header" or "primary" or "footer"
   - **Status**: ✅ Active

### 2. Add Menu Items
1. Click **View** on your created menu
2. Click **Add Menu Item** button
3. Fill in details:
   - **Title**: "Home"
   - **URL**: "/"
   - **Sort Order**: 0 (lower numbers appear first)

### 3. Create Nested Menus (Dropdowns)
1. Create parent item: "Services"
2. Create child items with **Parent Item** = "Services"
3. Child items will appear as dropdown items

## 🎨 Current Menu Locations

Based on your menu screenshot, you have these locations:

| Menu Name | Location | Items | Status |
|-----------|----------|-------|---------|
| Quinlan Quinn | header | 0 | Active |
| Graham Leach | Moana Gordon | 0 | Active |
| Maia Hunt | Stacy Walton | 0 | Active |
| Genevieve Vazquez | primary | 1 | Active |
| Zenia Lyons | footer | 0 | Active |
| Candice Schultz | primary | 0 | Active |
| Unity Powell | primary | 0 | Active |

## 💡 Usage Examples

### Header with Multiple Menu Locations
```blade
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
        {{-- This will show all header + primary menus --}}
        <x-dynamic-menu location="header" />
        <x-dynamic-menu location="primary" />
    </ul>
</div>
```

### Footer with Dynamic Sections
```blade
<div class="row">
    <!-- Company Info (Static) -->
    <div class="col-lg-3">
        <!-- Your company info here -->
    </div>
    
    <!-- Dynamic Footer Menus -->
    <x-dynamic-footer-menu location="footer" title="Quick Links" />
    
    <!-- Contact Info (Static) -->
    <div class="col-lg-3">
        <!-- Your contact info here -->
    </div>
</div>
```

## ⚙️ Component Properties

### `<x-dynamic-menu>` Properties:
- **location**: Menu location to fetch ('header', 'primary', 'footer')
- **fallback**: Show fallback content if no menus found (default: true)

### `<x-dynamic-footer-menu>` Properties:
- **location**: Menu location to fetch (default: 'footer')
- **title**: Override menu name with custom title
- **fallback**: Show fallback content if no menus found (default: true)

## 🔧 How It Works

1. **Database Query**: Components query `menus` table for active menus by location
2. **Menu Items**: Loads related `menu_items` for each menu
3. **Hierarchy**: Handles parent/child relationships for dropdowns
4. **Fallback**: Shows static content if no dynamic menus found
5. **Styling**: Uses your existing CSS classes and Bootstrap structure

## 📝 Adding More Menu Items

To populate your menus with actual content:

1. **Edit existing menu** (like "Genevieve Vazquez" which has 1 item)
2. **Add menu items** for each page/section you want
3. **Set proper URLs** like:
   - `/` for Home
   - `/posts` for Blog/Posts
   - `/pages` for Pages
   - `/about` for About page
   - Custom URLs for external links

Your menus will automatically appear in the header and footer based on their location setting!