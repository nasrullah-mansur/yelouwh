@php
    $heroSlides = $heroSlides ?? collect();
@endphp

<!-- Ultra Compact Hero Slider -->
<div class="modern-hero-slider">
    <div class="hero-slider-container">
        <!-- Hero Slider Wrapper -->
        <div class="hero-slides" id="hero-carousel">
            
            @if($heroSlides && $heroSlides->count() > 0)
                @foreach($heroSlides as $key => $slide)
                    <div class="hero-slide {{ $key === 0 ? 'active' : '' }}" data-slide="{{ $key + 1 }}">
                        <div class="hero-background">
                            <div class="gradient-overlay"></div>
                        </div>
                        <div class="container-fluid h-100">
                            <div class="row h-100 position-relative">
                                <!-- Hero Content - Left Side -->
                                <div class="col-12">
                                    <div class="hero-content">
                                        <!-- Hero Badge -->
                                        <div class="hero-badge">
                                            <i class="{{ $slide->badge_icon }}"></i>
                                            <span>{{ $slide->badge_text }}</span>
                                        </div>

                                        <!-- Hero Title -->
                                        <h1 class="hero-title">
                                            @if($slide->subtitle)
                                                {{ $slide->subtitle }}
                                            @endif
                                            <span class="gradient-text">{{ $slide->title }}</span>
                                        </h1>

                                        <!-- Hero Description -->
                                        <p class="hero-description">
                                            {{ $slide->description }}
                                        </p>

                                        <!-- Hero Stats -->
                                        @if($slide->hasStats())
                                            <div class="hero-stats">
                                                @foreach($slide->stats as $stat)
                                                    <div class="stat-item">
                                                        <span class="stat-number">{{ $stat['number'] }}</span>
                                                        <span class="stat-label">{{ $stat['label'] }}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif

                                        <!-- Hero Features -->
                                        @if($slide->hasFeatures())
                                            <div class="hero-features">
                                                @foreach($slide->features as $feature)
                                                    <div class="feature-item">
                                                        <div class="feature-icon">
                                                            <i class="{{ $feature['icon'] }}"></i>
                                                        </div>
                                                        <span>{{ $feature['text'] }}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif

                                        <!-- Hero Actions -->
                                        <div class="hero-actions">
                                            <a href="{{ $slide->primary_button_url }}" class="btn btn-hero-primary">
                                                <i class="{{ $slide->primary_button_icon }}"></i>
                                                <span>{{ $slide->primary_button_text }}</span>
                                            </a>
                                            <a href="{{ $slide->secondary_button_url }}" class="btn btn-hero-secondary">
                                                <i class="{{ $slide->secondary_button_icon }}"></i>
                                                <span>{{ $slide->secondary_button_text }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hero Image - Full Width Right -->
                                <div class="hero-image-wrapper">
                                    <img src="{{ $slide->hero_image_url }}" 
                                         alt="{{ $slide->title }}" 
                                         class="hero-image"
                                         onerror="console.log('Failed to load hero image:', this.src); this.style.display='none';">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Fallback slide if no database content -->
                <div class="hero-slide active" data-slide="1">
                    <div class="hero-background">
                        <div class="gradient-overlay"></div>
                    </div>
                    <div class="container-fluid h-100">
                        <div class="row h-100 position-relative">
                            <div class="col-12">
                                <div class="hero-content">
                                    <div class="hero-badge">
                                        <i class="fas fa-star"></i>
                                        <span>Featured Platform</span>
                                    </div>

                                    <h1 class="hero-title">
                                        Support your favorite
                                        <span class="gradient-text">Creators</span>
                                    </h1>

                                    <p class="hero-description">
                                        Join thousands of creators and supporters in the ultimate content creation platform.
                                    </p>

                                    <div class="hero-actions">
                                        <a href="{{ url('/register') }}" class="btn btn-hero-primary">
                                            <i class="fas fa-rocket"></i>
                                            <span>Start Creating</span>
                                        </a>
                                        <a href="{{ url('/creators') }}" class="btn btn-hero-secondary">
                                            <i class="fas fa-play"></i>
                                            <span>Explore Creators</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="hero-image-wrapper">
                                <img src="{{ asset('new_home_page/3man.png') }}" 
                                     alt="Creators" 
                                     class="hero-image"
                                     onerror="console.log('Failed to load fallback hero image:', this.src);">
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <!-- Slider Controls -->
        @if($heroSlides && $heroSlides->count() > 1)
            <div class="hero-controls">
                <!-- Navigation Arrows -->
                <div class="carousel-navigation">
                    <button class="nav-btn prev-btn" data-carousel="hero-slider">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="nav-btn next-btn" data-carousel="hero-slider">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

                <!-- Slide Indicators -->
                <div class="hero-indicators">
                    @foreach($heroSlides as $key => $slide)
                        <div class="indicator {{ $key === 0 ? 'active' : '' }}" data-slide="{{ $key }}"></div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>

<style>
/* Ultra Compact Hero Slider */
.modern-hero-slider {
    position: relative;
    background: linear-gradient(135deg, #ffb200 0%, #ff8c00 100%);
    overflow: hidden;
    height: 300px;
}

.hero-slider-container {
    position: relative;
    width: 100%;
    height: 100%;
}

.hero-slides {
    position: relative;
    width: 100%;
    height: 100%;
}

.hero-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.6s ease-in-out;
    z-index: 1;
}

.hero-slide.active {
    opacity: 1;
    visibility: visible;
    z-index: 2;
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.gradient-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255, 178, 0, 0.95) 0%, rgba(255, 140, 0, 0.95) 100%);
}

.hero-content {
    position: relative;
    z-index: 2;
    color: white;
    padding: 1.5rem 0;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    max-width: 50%;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 0.3rem 0.8rem;
    border-radius: 50px;
    font-size: 0.7rem;
    font-weight: 500;
    margin-bottom: 0.5rem;
    width: fit-content;
}

.hero-title {
    font-size: 1.8rem;
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 0.5rem;
}

.gradient-text {
    background: linear-gradient(45deg, #fff, #ffe066);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-description {
    font-size: 0.85rem;
    line-height: 1.4;
    margin-bottom: 0.8rem;
    opacity: 0.95;
    max-width: 95%;
}

.hero-stats {
    display: flex;
    gap: 1rem;
    margin-bottom: 0.8rem;
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 1.2rem;
    font-weight: 700;
    color: #fff;
    line-height: 1;
}

.stat-label {
    font-size: 0.65rem;
    opacity: 0.9;
}

.hero-features {
    margin-bottom: 0.8rem;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.4rem;
}

.feature-icon {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 0.7rem;
}

.feature-item span {
    font-size: 0.75rem;
}

.hero-testimonial {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 0.8rem;
    margin-bottom: 0.8rem;
    border-left: 3px solid rgba(255, 255, 255, 0.3);
}

.testimonial-text {
    font-size: 0.75rem;
    font-style: italic;
    margin-bottom: 0.5rem;
    opacity: 0.95;
}

.testimonial-author {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.author-avatar {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    overflow: hidden;
}

.author-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.author-name {
    display: block;
    font-weight: 600;
    font-size: 0.7rem;
}

.author-title {
    display: block;
    font-size: 0.6rem;
    opacity: 0.8;
}

.hero-actions {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.btn-hero-primary,
.btn-hero-secondary {
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    padding: 0.5rem 1rem;
    font-weight: 600;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 0.75rem;
}

.btn-hero-primary {
    background: rgba(255, 255, 255, 0.95);
    color: #ff8c00;
    border: 2px solid transparent;
}

.btn-hero-primary:hover {
    background: #fff;
    color: #ff8c00;
    transform: translateY(-1px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    text-decoration: none;
}

.btn-hero-secondary {
    border: 2px solid rgba(255, 255, 255, 0.4);
    color: white;
    background: transparent;
}

.btn-hero-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    transform: translateY(-1px);
    text-decoration: none;
}

/* Hero Image - Full Width Right */
.hero-image-wrapper {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 2;
    width: 50%;
    height: 100%;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    padding: 0 20px 0 20px;
}

.hero-image {
    width: 100%;
    height: auto;
    max-height: 100%;
    object-fit: contain;
    object-position: bottom right;
    border-radius: 10px;
}

/* Slider Controls */
.hero-controls {
    position: absolute;
    bottom: 20px;
    right: 20px;
    z-index: 10;
    display: flex;
    align-items: center;
    gap: 10px;
}

.carousel-navigation {
    position: absolute;
    bottom: 20px;
    right: 80px;
    z-index: 10;
    display: flex;
    gap: 10px;
    pointer-events: all;
}

.nav-btn {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    pointer-events: all;
    font-size: 0.9rem;
}

.nav-btn:hover {
    background: rgba(255, 255, 255, 0.35);
    transform: scale(1.05);
}

.hero-indicators {
    display: flex;
    gap: 6px;
}

.indicator {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.4);
    cursor: pointer;
    transition: all 0.3s ease;
}

.indicator.active {
    background: white;
    transform: scale(1.3);
}

/* Responsive Design */
@media (max-width: 1200px) {
    .hero-image-wrapper {
        width: 45%;
        padding: 15px;
    }
    
    .hero-content {
        max-width: 55%;
    }
    
    .hero-title {
        font-size: 1.6rem;
    }
}

@media (max-width: 992px) {
    .modern-hero-slider {
        height: 350px;
    }
    
    .hero-content {
        max-width: 55%;
        padding: 1.2rem 0;
    }
    
    .hero-title {
        font-size: 1.5rem;
    }
    
    .hero-image-wrapper {
        width: 45%;
        padding: 10px;
    }
}

@media (max-width: 768px) {
    .modern-hero-slider {
        height: 280px;
    }
    
    .hero-content {
        max-width: 50%;
        padding: 1rem 0;
    }
    
    .hero-title {
        font-size: 1.3rem;
    }
    
    .hero-description {
        font-size: 0.8rem;
        margin-bottom: 0.6rem;
    }
    
    .hero-stats {
        gap: 0.8rem;
        margin-bottom: 0.6rem;
    }
    
    .stat-number {
        font-size: 1rem;
    }
    
    .stat-label {
        font-size: 0.6rem;
    }
    
    .hero-image-wrapper {
        width: 50%;
        padding: 5px;
    }
    
    .btn-hero-primary,
    .btn-hero-secondary {
        padding: 0.4rem 0.8rem;
        font-size: 0.7rem;
    }
    
    .nav-btn {
        width: 30px;
        height: 30px;
        font-size: 0.8rem;
    }
    
    .hero-controls {
        bottom: 15px;
        right: 15px;
    }
    
    .carousel-navigation {
        bottom: 15px;
        right: 70px;
    }
}

@media (max-width: 576px) {
    .modern-hero-slider {
        height: 300px;
    }
    
    .hero-content {
        max-width: 100%;
        padding: 0.8rem 1rem;
    }
    
    .hero-title {
        font-size: 1.2rem;
        margin-bottom: 0.4rem;
    }
    
    .hero-description {
        font-size: 0.75rem;
        margin-bottom: 0.5rem;
    }
    
    .hero-stats {
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
    }
    
    .stat-item {
        flex: 1;
        min-width: 60px;
    }
    
    .hero-features .feature-item {
        margin-bottom: 0.3rem;
    }
    
    .hero-testimonial {
        padding: 0.6rem;
        margin-bottom: 0.6rem;
    }
    
    .testimonial-text {
        font-size: 0.7rem;
    }
    
    .hero-image-wrapper {
        display: none;
    }
    
    .hero-controls {
        bottom: 10px;
        left: 50%;
        right: auto;
        transform: translateX(-50%);
    }
    
    .carousel-navigation {
        bottom: 10px;
        left: 50%;
        right: auto;
        transform: translateX(-50%);
        margin-left: 40px;
    }
}

@media (max-width: 480px) {
    .modern-hero-slider {
        height: 280px;
    }
    
    .hero-content {
        padding: 0.6rem 1rem;
        max-width: 100%;
    }
    
    .hero-title {
        font-size: 1.1rem;
        margin-bottom: 0.3rem;
    }
    
    .hero-badge {
        padding: 0.25rem 0.6rem;
        font-size: 0.6rem;
        margin-bottom: 0.4rem;
    }
    
    .hero-description {
        font-size: 0.7rem;
        margin-bottom: 0.4rem;
    }
    
    .hero-actions {
        gap: 0.4rem;
    }
    
    .btn-hero-primary,
    .btn-hero-secondary {
        padding: 0.35rem 0.7rem;
        font-size: 0.65rem;
        flex: 1;
        justify-content: center;
        max-width: 120px;
    }
    
    .hero-image-wrapper {
        display: none;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Hero Slider Functionality
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.indicator');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    
    let currentSlide = 0;
    let slideInterval;
    const slideDuration = 4000; // 4 seconds
    
    function showSlide(index) {
        // Remove active class from all slides and indicators
        slides.forEach(slide => {
            slide.classList.remove('active');
        });
        indicators.forEach(indicator => {
            indicator.classList.remove('active');
        });
        
        // Add active class to current slide and indicator
        slides[index].classList.add('active');
        indicators[index].classList.add('active');
        
        currentSlide = index;
    }
    
    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        showSlide(next);
    }
    
    function prevSlide() {
        const prev = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prev);
    }
    
    function startSlideshow() {
        slideInterval = setInterval(nextSlide, slideDuration);
    }
    
    function stopSlideshow() {
        clearInterval(slideInterval);
    }
    
    // Event listeners
    nextBtn.addEventListener('click', () => {
        stopSlideshow();
        nextSlide();
        setTimeout(startSlideshow, 1000);
    });
    
    prevBtn.addEventListener('click', () => {
        stopSlideshow();
        prevSlide();
        setTimeout(startSlideshow, 1000);
    });
    
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            stopSlideshow();
            showSlide(index);
            setTimeout(startSlideshow, 1000);
        });
    });
    
    // Pause on hover
    const sliderContainer = document.querySelector('.modern-hero-slider');
    sliderContainer.addEventListener('mouseenter', stopSlideshow);
    sliderContainer.addEventListener('mouseleave', startSlideshow);
    
    // Touch/swipe support
    let startX = 0;
    let endX = 0;
    
    sliderContainer.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });
    
    sliderContainer.addEventListener('touchend', (e) => {
        endX = e.changedTouches[0].clientX;
        const diff = startX - endX;
        
        if (Math.abs(diff) > 50) { // Minimum swipe distance
            stopSlideshow();
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
            setTimeout(startSlideshow, 1000);
        }
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            stopSlideshow();
            prevSlide();
            setTimeout(startSlideshow, 1000);
        } else if (e.key === 'ArrowRight') {
            stopSlideshow();
            nextSlide();
            setTimeout(startSlideshow, 1000);
        }
    });
    
    // Initialize
    showSlide(0);
    startSlideshow();
});
</script>