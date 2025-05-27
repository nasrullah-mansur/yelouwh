# Homepage Gallery Management System

This system allows you to manage the category cards displayed on your homepage through an admin interface.

## Quick Setup

1. **Run Migration and Seeder:**
    ```bash
    php artisan migrate
    php artisan db:seed --class=HomepageGallerySeeder
    php artisan storage:link
    ```

## System Overview

### Database

-   **Table:** `homepage_galleries`
-   **Model:** `App\Models\HomepageGallery`
-   **Seeder:** `HomepageGallerySeeder` (creates 6 sample galleries)

### Controllers

-   **Frontend:** `HomepageGalleryController` - Handles public gallery display
-   **Admin:** `Admin\HomepageGalleryController` - Handles CRUD operations

### Routes

-   **Frontend:**

    -   `/homepage-gallery/{slug}` - Individual gallery page
    -   `/api/homepage-galleries` - JSON API endpoint

-   **Admin:**
    -   `/admin/homepage-galleries` - Gallery management interface
    -   `/admin/homepage-galleries/create` - Create new gallery
    -   `/admin/homepage-galleries/{id}/edit` - Edit gallery
    -   `/admin/homepage-galleries/{id}/toggle-status` - Toggle active status
    -   `/admin/homepage-galleries/update-order` - Drag & drop reordering

## Features

### Gallery Management

-   **CRUD Operations:** Create, read, update, delete galleries
-   **Image Upload:** Background images with 2MB limit (jpeg, png, jpg, gif, webp)
-   **Icon Management:** FontAwesome icon selection
-   **Status Toggle:** Enable/disable galleries
-   **Drag & Drop Sorting:** Reorder galleries with AJAX

### Gallery Properties

-   **Name:** Gallery title
-   **Slug:** URL-friendly identifier (auto-generated)
-   **Description:** Gallery description text
-   **Icon:** FontAwesome icon class
-   **Image:** Background image file
-   **URL:** Custom destination URL
-   **Badge:** Optional badge with text and type
-   **Category Type:** Regular or Featured
-   **Color Scheme:** Predefined color combinations
-   **Sort Order:** Display order
-   **Stats:** JSON array of statistics with icons

### Color Schemes

-   **Popular:** Purple gradient
-   **Featured:** Pink gradient
-   **Active:** Blue gradient
-   **New:** Green gradient
-   **Free:** Pink-yellow gradient
-   **Others:** Light gradient
-   **Default:** Soft gradient

### Badge Types

-   **Default:** Standard badge
-   **New:** Green "New" badge
-   **Free:** Blue "Free" badge
-   **Premium:** Gold "Premium" badge
-   **Hot:** Red "Hot" badge

## File Structure

```
app/
├── Models/
│   └── HomepageGallery.php
├── Http/Controllers/
│   ├── HomepageGalleryController.php
│   └── Admin/
│       └── HomepageGalleryController.php
database/
├── migrations/
│   └── 2025_05_27_121810_create_homepage_galleries_table.php
└── seeders/
    └── HomepageGallerySeeder.php
resources/views/
├── homepage-gallery/
│   └── show.blade.php
└── admin/homepage-galleries/
    ├── index.blade.php
    ├── create.blade.php
    ├── edit.blade.php
    └── show.blade.php
storage/app/public/
└── homepage_galleries/
routes/
└── web.php
```

## Usage

### Frontend Integration

The homepage categories section automatically loads galleries from the database:

```php
@php
    $categories = app(\App\Http\Controllers\HomepageGalleryController::class)->getHomepageGalleries();
@endphp
```

### Admin Access

Access the gallery management interface at:

```
/admin/homepage-galleries
```

### API Usage

Get galleries as JSON:

```
GET /api/homepage-galleries
```

Response format:

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "Popular",
            "slug": "popular",
            "description": "Trending creators with amazing content",
            "icon": "fas fa-fire",
            "image_url": "http://domain.com/storage/homepage_galleries/image.jpg",
            "full_url": "/creators",
            "badge_text": null,
            "badge_class": "badge-default",
            "category_type": "featured",
            "color_scheme": "popular",
            "stats": [{ "icon": "fas fa-users", "text": "50K+ Creators" }]
        }
    ]
}
```

## Customization

### Adding New Color Schemes

Edit the `getColorSchemeDataAttribute()` method in `HomepageGallery.php`:

```php
$schemes = [
    'custom' => ['bg' => 'linear-gradient(135deg, #color1 0%, #color2 100%)', 'text' => '#ffffff'],
    // ... existing schemes
];
```

### Adding New Badge Types

Update the enum in the migration and the `getBadgeClassAttribute()` method:

```php
$classes = [
    'custom' => 'badge-custom',
    // ... existing classes
];
```

### Custom Statistics

Statistics are stored as JSON arrays:

```php
'stats' => [
    ['icon' => 'fas fa-icon', 'text' => 'Display Text'],
    ['icon' => 'fas fa-another', 'text' => 'Another Stat']
]
```

## Troubleshooting

### Images Not Displaying

1. Ensure storage link exists: `php artisan storage:link`
2. Check file permissions on `storage/app/public/homepage_galleries/`
3. Verify image files exist in the storage directory

### Admin Interface Not Accessible

1. Ensure you have proper admin authentication middleware
2. Check route definitions in `routes/web.php`
3. Verify controller namespace imports

### Database Issues

1. Run migrations: `php artisan migrate`
2. Check database connection in `.env`
3. Ensure table exists: `SHOW TABLES LIKE 'homepage_galleries'`

## Sample Data

The seeder creates 6 sample galleries:

1. **Popular** (Featured) - Fire icon, purple scheme
2. **Featured** (Featured) - Star icon, pink scheme, premium badge
3. **More Active** (Regular) - Bolt icon, blue scheme, hot badge
4. **New Creators** (Regular) - Seedling icon, green scheme, new badge
5. **Free Content** (Regular) - Gift icon, pink-yellow scheme, free badge
6. **Explore More** (Regular) - Compass icon, light scheme

## Security Notes

-   Image uploads are validated for type and size
-   File names are randomized to prevent conflicts
-   Old images are automatically deleted when updated
-   CSRF protection is enabled on all forms

## Performance

-   Galleries are cached using Laravel's query builder
-   Images are served through Laravel's storage system
-   AJAX is used for status toggles and reordering
-   Pagination is implemented for large gallery lists
