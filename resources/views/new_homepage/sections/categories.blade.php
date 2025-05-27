{{-- Modern Category Section --}}
@php
    $categories = app(\App\Http\Controllers\HomepageGalleryController::class)->getHomepageGalleries();
@endphp

<div class="modern-category-section">
    <div class="container-fluid">
        <!-- Section Header -->
        <div class="section-header ">
            <div class="section-title-wrapper">
                <h2 class="section-title">
                    <span class="title-icon" style="width: 60px; height: 60px;">
                        <i class="fas fa-compass"></i>
                    </span>
                    Explore Categories
                    <span class="title-accent"></span>
                </h2>
                <p class="section-subtitle">Discover amazing content across different creative categories</p>
            </div>
            <div class="section-actions">
                <button class="view-all-btn">
                    <span>View All</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- Category Grid -->
        <div class="modern-category-grid">
            @forelse($categories as $category)
                <a href="{{ $category->full_url }}" 
                   class="category-card {{ $category->category_type === 'featured' ? 'featured-card' : '' }}" 
                   data-category="{{ $category->color_scheme }}">
                    <div class="card-background">
                        <img src="{{ $category->image_url }}" alt="{{ $category->name }}" />
                        <div class="gradient-overlay"></div>
                    </div>
                    <div class="card-hover-overlay"></div>
                    <div class="card-content">
                        <div class="card-icon">
                            <i class="{{ $category->icon }}"></i>
                        </div>
                        <div class="card-text">
                            <h3 class="card-title">{{ $category->name }}</h3>
                            @if($category->description)
                                <p class="card-description">{{ $category->description }}</p>
                            @endif
                            @if($category->stats && count($category->stats) > 0)
                                <div class="card-stats">
                                    @foreach($category->stats as $stat)
                                        <span class="stat-item">
                                            @if(isset($stat['icon']))
                                                <i class="{{ $stat['icon'] }}"></i>
                                            @endif
                                            {{ $stat['text'] ?? '' }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        @if($category->badge_text)
                            <div class="card-badge {{ $category->badge_class }}">{{ $category->badge_text }}</div>
                        @endif
                        <div class="card-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="card-glow"></div>
                </a>
            @empty
                <!-- Fallback content if no categories exist -->
                <div class="col-12 text-center py-5">
                    <div class="text-muted">
                        <i class="fas fa-inbox fa-3x mb-3"></i>
                        <p>No categories available at the moment.</p>
                        <p><small>Please check back later or contact support.</small></p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div> 