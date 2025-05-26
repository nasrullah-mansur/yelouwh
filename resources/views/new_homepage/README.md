# New Homepage Modular Structure

This directory contains the modular structure for the new homepage, organized for better maintainability and development efficiency.

## Directory Structure

```
new_homepage/
├── layouts/
│   └── main.blade.php          # Main layout template
├── components/
│   ├── header.blade.php        # Header with navigation and search
│   ├── sidebar.blade.php       # Navigation sidebar
│   └── footer.blade.php        # Footer with links and newsletter
├── sections/
│   ├── hero.blade.php          # Hero banner slider
│   ├── posts.blade.php         # Recent posts section
│   ├── categories.blade.php    # Categories grid section
│   └── creators.blade.php      # Creator showcase sections
├── scripts/
│   └── main.blade.php          # JavaScript functionality
├── home.blade.php              # Main homepage template
├── index.blade.php             # Entry point (includes home.blade.php)
└── README.md                   # This documentation
```

## Components Overview

### Layouts

-   **main.blade.php**: Base layout with head, meta tags, CSS/JS includes, and main structure

### Components

-   **header.blade.php**: Modern header with logo, search, navigation, and mobile menu
-   **sidebar.blade.php**: Collapsible sidebar with categories and navigation links
-   **footer.blade.php**: Footer with newsletter signup, links, and social media

### Sections

-   **hero.blade.php**: Interactive banner slider with multiple slides and controls
-   **posts.blade.php**: Recent posts carousel with filtering and interactions
-   **categories.blade.php**: Category grid with hover effects and animations
-   **creators.blade.php**: Creator showcase with recently added and featured creators

### Scripts

-   **main.blade.php**: All JavaScript functionality including:
    -   Header interactions and mobile menu
    -   Hero slider functionality
    -   Category card animations
    -   Posts and creator carousels
    -   Search functionality
    -   Responsive behavior

## Usage

### Main Entry Point

The homepage is accessed through `index.blade.php` which includes `home.blade.php`.

### Extending the Layout

To create new pages using the same layout:

```blade
@extends('new_homepage.layouts.main')

@section('title', 'Your Page Title')

@section('content')
    <!-- Your content here -->
@endsection

@push('styles')
    <!-- Additional CSS -->
@endpush

@push('scripts')
    <!-- Additional JavaScript -->
@endpush
```

### Adding New Sections

1. Create a new file in `sections/` directory
2. Include it in `home.blade.php` using `@include('new_homepage.sections.your_section')`

### Customizing Components

Each component is self-contained and can be modified independently:

-   Edit component files directly
-   Add new components in the `components/` directory
-   Include them in layouts or sections as needed

## Features

### Responsive Design

-   Mobile-first approach
-   Collapsible sidebar on mobile
-   Responsive navigation and search
-   Adaptive carousels and grids

### Interactive Elements

-   Hero slider with auto-play and manual controls
-   Hover effects on category cards
-   Interactive creator and post cards
-   Search functionality with suggestions
-   Mobile search overlay

### Performance Optimizations

-   Modular loading of components
-   Intersection Observer for scroll animations
-   Optimized image loading
-   Efficient carousel implementations

### Accessibility

-   Semantic HTML structure
-   Keyboard navigation support
-   Screen reader friendly
-   Focus management

## Maintenance

### Adding New Features

1. Identify the appropriate component or section
2. Create new files if needed
3. Update the main layout or home template
4. Test across different screen sizes

### Updating Styles

-   CSS is loaded in the main layout
-   Component-specific styles should be organized in the main CSS file
-   Use CSS custom properties for theming

### JavaScript Modifications

-   All functionality is in `scripts/main.blade.php`
-   Functions are organized by component/section
-   Use modern JavaScript features with fallbacks

## Best Practices

1. **Keep components focused**: Each component should have a single responsibility
2. **Use consistent naming**: Follow Laravel and Blade conventions
3. **Document changes**: Update this README when adding new components
4. **Test responsiveness**: Ensure all components work on different screen sizes
5. **Optimize performance**: Minimize HTTP requests and optimize images

## Dependencies

-   jQuery (for some legacy functionality)
-   Slick Carousel (for specific sliders)
-   FontAwesome (for icons)
-   Bootstrap (for grid system)
-   Custom CSS (new_home_page.css)

## Browser Support

-   Modern browsers (Chrome, Firefox, Safari, Edge)
-   Mobile browsers (iOS Safari, Chrome Mobile)
-   Progressive enhancement for older browsers
