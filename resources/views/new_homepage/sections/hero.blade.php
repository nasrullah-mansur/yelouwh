{{-- Modern Hero Banner Slider --}}
@php
    $heroSlides = app(\App\Http\Controllers\HeroSlideController::class)->getHeroSlides();
@endphp

<div class="hero-banner-slider">
    <div class="hero-slides">
        @forelse($heroSlides as $index => $slide)
            <!-- Slide {{ $index + 1 }} -->
            <div class="hero-slide {{ $index === 0 ? 'active' : '' }}" data-bg="{{ $slide->background_image_url }}">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <div class="container-fluid">
                        <div class="row align-items-center min-vh-60">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="hero-text">
                                    <div class="hero-badge">
                                        <i class="{{ $slide->badge_icon }}"></i>
                                        <span>{{ $slide->badge_text }}</span>
                                    </div>
                                    <h1 class="hero-title">
                                        @if($slide->subtitle)
                                            {{ $slide->subtitle }}
                                            <span class="gradient-text">{{ $slide->title }}</span>
                                        @else
                                            {{ $slide->title }}
                                        @endif
                                    </h1>
                                    <p class="hero-description">
                                        {{ $slide->description }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="display: flex; align-items: center; justify-content: center;">
                                <div class="hero-visual">
                                    <div class="hero-image-container">
                                        <img src="{{ $slide->hero_image_url }}" 
                                             alt="{{ $slide->title }}" 
                                             class="hero-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <!-- Fallback slide if no slides exist -->
            <div class="hero-slide active" data-bg="{{asset('public/new_home_page/banner.jpg')}}">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <div class="container-fluid">
                        <div class="row align-items-center min-vh-60">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="hero-text">
                                    <div class="hero-badge">
                                        <i class="fas fa-star"></i>
                                        <span>{{ __('hero.featured_platform') }}</span>
                                    </div>
                                    <h1 class="hero-title">
                                        {{ __('hero.support_favorite') }}
                                        <span class="gradient-text">{{ __('hero.creators') }}</span>
                                    </h1>
                                    <p class="hero-description">
                                        {{ __('hero.join_description') }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="hero-visual">
                                    <div class="hero-image-container">
                                        <img src="{{asset('public/new_home_page/3man.png')}}" 
                                             alt="{{ __('hero.creators') }}" 
                                             class="hero-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse
    </div>

    @if($heroSlides->count() > 1)
        <!-- Slider Controls -->
        <div class="hero-controls">
            <button class="hero-nav hero-prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="hero-nav hero-next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <!-- Slider Indicators -->
        <div class="hero-indicators">
            @foreach($heroSlides as $index => $slide)
                <button class="indicator {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}"></button>
            @endforeach
        </div>
    @endif
</div>

<style>
/* Enhanced Responsive Hero Styles - Full Image Display */
.hero-image-container {
    position: relative;
    width: 100%;
    height: 400px;
    overflow: hidden;
}

.hero-image {
    position: absolute;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: right bottom;
    border-radius: 8px;
    transition: transform 0.3s ease;
}

.hero-image:hover {
    transform: scale(1.02);
}

.hero-text {
    padding: 0.75rem 0;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.hero-title {
    margin-bottom: 1rem;
}

.hero-description {
    margin-bottom: 0;
}

/* Tablet Responsive Adjustments */
@media (max-width: 991.98px) {
    .hero-image-container {
        height: 300px;
    }
    
    .hero-image {
        width: 100%;
        height: 100%;
    }
    
    .hero-title {
        font-size: 1.8rem;
        line-height: 1.2;
        margin-bottom: 0.75rem;
    }
    
    .hero-description {
        font-size: 0.95rem;
        line-height: 1.4;
    }
}

/* Mobile Responsive Adjustments */
@media (max-width: 767.98px) {
    .hero-image-container {
        height: 200px;
        min-height: 200px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .hero-image {
        width: 100%;
        height: 100%;
        border-radius: 6px;
        position: absolute;
        object-fit: cover;
        object-position: center center;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
    .hero-title {
        font-size: 1.4rem !important;
        line-height: 1.2;
        margin-bottom: 0.5rem;
    }
    
    .hero-description {
        font-size: 0.8rem;
        line-height: 1.3;
    }
    
    .hero-badge {
        font-size: 0.7rem;
        margin-bottom: 0.75rem;
    }
    
    .hero-text {
        padding: 0.5rem 0;
    }
}

/* Extra Small Mobile */
@media (max-width: 575.98px) {
    .hero-image-container {
        height: 150px;
        min-height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .hero-image {
        width: 100%;
        height: 100%;
        border-radius: 4px;
        position: absolute;
        object-fit: cover;
        object-position: center center;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
    .hero-title {
        font-size: 1.1rem !important;
        margin-bottom: 0.4rem;
    }
    
    .hero-description {
        font-size: 0.7rem;
        line-height: 1.2;
    }
    
    .hero-badge {
        font-size: 0.6rem;
        margin-bottom: 0.5rem;
    }
    
    .hero-text {
        padding: 0.3rem 0;
    }
    
    .container-fluid {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }
}

/* Large Desktop */
@media (min-width: 1400px) {
    .hero-image-container {
        height: 500px;
    }
    
    .hero-image {
        width: 75%;
        height: 75%;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-description {
        font-size: 1.1rem;
    }
}

/* Ensure proper spacing and alignment */
.hero-visual {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 100%;
}

/* Maintain existing hover effects and animations */
.hero-slide {
    transition: all 0.5s ease-in-out;
}

/* Compact adjustments */
.min-vh-60 {
    min-height: 60vh;
}

@media (max-width: 767.98px) {
    .min-vh-60 {
        min-height: 40vh;
        padding: 1rem 0;
    }
}

@media (max-width: 575.98px) {
    .min-vh-60 {
        min-height: 30vh;
        padding: 0.5rem 0;
    }
}

/* Additional styling for better image presentation */
.hero-image-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, transparent 50%);
    z-index: 1;
    pointer-events: none;
    border-radius: 8px;
}

@media (max-width: 767.98px) {
    .hero-image-container::before {
        border-radius: 6px;
    }
}

@media (max-width: 575.98px) {
    .hero-image-container::before {
        border-radius: 4px;
    }
}

/* Force hero image to display on mobile - Override any conflicting CSS */
.hero-image {
    display: block !important;
    visibility: visible !important;
    opacity: 1 !important;
}

@media (max-width: 768px) {
    .hero-image {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
        scale: 1 !important;
        filter: none !important;
    }
    
    .hero-image-container {
        display: flex !important;
        visibility: visible !important;
        opacity: 1 !important;
    }
    
    .hero-visual {
        display: flex !important;
        visibility: visible !important;
        opacity: 1 !important;
    }
}

/* Specific overrides for the main CSS file conflicts */
.new-home-page .main-content .hero-banner-slider .hero-visual .hero-image-container .hero-image {
    display: block !important;
    visibility: visible !important;
    opacity: 1 !important;
    scale: 1 !important;
    filter: none !important;
}

/* Additional mobile-specific overrides */
@media (max-width: 768px) {
    .hero-banner-slider .hero-slide .hero-content .container-fluid .row .col-lg-6:last-child .hero-visual .hero-image-container .hero-image {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        transform: translate(-50%, -50%) !important;
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        object-position: center center !important;
        z-index: 10 !important;
    }
    
    .hero-banner-slider .hero-slide .hero-content .container-fluid .row .col-lg-6:last-child .hero-visual .hero-image-container {
        display: flex !important;
        visibility: visible !important;
        opacity: 1 !important;
        height: 200px !important;
        position: relative !important;
        width: 100% !important;
        overflow: hidden !important;
        align-items: center !important;
        justify-content: center !important;
    }
    
    .hero-banner-slider .hero-slide .hero-content .container-fluid .row .col-lg-6:last-child .hero-visual {
        display: flex !important;
        visibility: visible !important;
        opacity: 1 !important;
        width: 100% !important;
        height: 100% !important;
        align-items: center !important;
        justify-content: center !important;
    }
    
    .hero-banner-slider .hero-slide .hero-content .container-fluid .row .col-lg-6:last-child {
        display: flex !important;
        visibility: visible !important;
        opacity: 1 !important;
        align-items: center !important;
        justify-content: center !important;
    }
}
</style>