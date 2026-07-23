# SequelZone Laravel CMS

A powerful SequelZone-like Content Management System built with Laravel framework.

## Features

- **Posts Management**: Create, edit, and manage blog posts with categories
- **Pages Management**: Static pages with category organization
- **Menu System**: Dynamic menu management with nested items
- **User Authentication**: Role-based access control (Admin, Editor, User)
- **File Uploads**: Featured image support for posts
- **Admin Dashboard**: Clean and intuitive admin interface
- **Frontend**: Responsive Bootstrap 5 based frontend
- **SEO Friendly**: Custom slugs and clean URLs

## Requirements

- PHP 8.1 or higher
- Composer
- MySQL/MariaDB
- Node.js (for asset compilation, optional)

## Installation

1. **Clone or download** this project to your desired directory
2. **Navigate** to the project directory
3. **Install dependencies**:
   ```bash
   composer install
   ```

4. **Set up environment**:
   - Copy `.env.example` to `.env` (if not already done)
   - Update the database configuration in `.env`:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=wplaravel
     DB_USERNAME=root
     DB_PASSWORD=
     ```

5. **Generate application key**:
   ```bash
   php artisan key:generate
   ```

6. **Create the database**:
   - Create a MySQL database named `wplaravel`
   - Or use phpMyAdmin at `localhost/phpmyadmin`

7. **Run migrations and seeders**:
   ```bash
   php artisan migrate --seed
   ```

8. **Create storage symlink**:
   ```bash
   php artisan storage:link
   ```

9. **Start the development server**:
   ```bash
   php artisan serve
   ```

## Default Login Credentials

After running the seeders, you can log in with these accounts:

**Admin User:**
- Email: `admin@wplaravel.com`
- Password: `password`

**Editor User:**
- Email: `editor@wplaravel.com`  
- Password: `password`

## Usage

### Frontend
- Visit `http://localhost:8000` to view the frontend
- Browse posts, pages, and categories
- Responsive design works on all devices

### Admin Panel
- Visit `http://localhost:8000/admin` to access the admin panel
- Log in with admin or editor credentials
- Manage posts, pages, categories, and menus

### Creating Content

1. **Posts**: Go to Admin > Posts > Add New Post
2. **Pages**: Go to Admin > Pages > Add New Page  
3. **Categories**: Manage categories for both posts and pages
4. **Menus**: Create and manage navigation menus

## Project Structure

```
wplaravel/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/          # Admin panel controllers
│   │   │   ├── Auth/           # Authentication controllers
│   │   │   ├── FrontendController.php
│   │   │   └── PageController.php
│   │   └── Middleware/         # Custom middleware
│   ├── Models/                 # Eloquent models
│   └── Providers/              # Service providers
├── database/
│   ├── migrations/             # Database migrations
│   └── seeders/               # Database seeders
├── resources/
│   └── views/
│       ├── admin/             # Admin panel views
│       ├── auth/              # Authentication views
│       ├── frontend/          # Frontend views
│       └── layouts/           # Layout templates
├── routes/
│   ├── web.php               # Web routes
│   └── api.php               # API routes
└── storage/
    └── app/
        └── public/           # File uploads
```

## Key Features Explained

### Posts & Categories
- Full CRUD operations for posts
- Rich text content with excerpts
- Featured image support
- Multiple categories per post
- Published/Draft status
- SEO-friendly slugs

### Pages & Categories  
- Static page management
- Category organization
- Published/Draft status
- Clean URLs

### Menu Management
- Dynamic menu creation
- Link to posts, pages, categories
- Custom URL support
- Nested menu items
- Easy drag-and-drop ordering (via admin interface)

### User Roles
- **Admin**: Full access to everything
- **Editor**: Can manage content but not users
- **User**: Basic registered user (frontend only)

### File Uploads
- Featured images for posts
- Secure file storage
- Image optimization ready
- Storage symlink for public access

## Customization

### Adding Custom Fields
1. Create new migration for additional columns
2. Update models with new fillable fields
3. Modify controllers to handle new fields
4. Update views to display/edit new fields

### Styling
- Bootstrap 5 is included via CDN
- Custom CSS can be added to layout files
- Views are fully customizable

### Extending Functionality
- Add new post types by creating new models
- Implement custom user roles and permissions
- Add API endpoints for mobile apps
- Integrate with external services

## Database Schema

### Main Tables
- `users` - User accounts and roles
- `posts` - Blog posts
- `post_categories` - Post categories  
- `post_category_post` - Pivot table for post-category relationships
- `pages` - Static pages
- `page_categories` - Page categories
- `page_category_page` - Pivot table for page-category relationships
- `menus` - Navigation menus
- `menu_items` - Individual menu items with hierarchy

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For support and questions:
- Check the documentation above
- Review the code comments
- Create an issue in the repository

## Changelog

### Version 1.0.0
- Initial release
- Full SequelZone-like CMS functionality
- Admin panel with Bootstrap 5
- User authentication and roles
- Posts, pages, categories, and menus
- File upload support
- Responsive frontend
- Database seeders with sample content