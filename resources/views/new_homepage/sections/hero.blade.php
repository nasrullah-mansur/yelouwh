{{-- Modern Hero Banner Slider --}}
<div class="hero-banner-slider">
    <div class="hero-slides">
        <!-- Slide 1 -->
        <div class="hero-slide active" data-bg="{{asset('public/new_home_page/banner.jpg')}}">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container-fluid">
                    <div class="row align-items-center min-vh-60">
                        <div class="col-lg-6">
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
                                <div class="hero-stats">
                                    <div class="stat-item">
                                        <span class="stat-number">50K+</span>
                                        <span class="stat-label">{{ __('hero.creators') }}</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-number">1M+</span>
                                        <span class="stat-label">{{ __('hero.supporters') }}</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-number">$10M+</span>
                                        <span class="stat-label">{{ __('hero.earned') }}</span>
                                    </div>
                                </div>
                                <div class="hero-actions">
                                    <a href="{{ url('/register') }}" class="btn-hero-primary">
                                        <i class="fas fa-rocket"></i>
                                        {{ __('hero.start_creating') }}
                                    </a>
                                    <a href="{{ url('/creators') }}" class="btn-hero-secondary">
                                        <i class="fas fa-play"></i>
                                        {{ __('hero.explore_creators') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-visual">
                                <div class="hero-image-container">
                                    <img src="{{asset('public/new_home_page/3man.png')}}" alt="{{ __('hero.creators') }}" class="hero-image">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide" data-bg="{{asset('public/new_home_page/banner.jpg')}}">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container-fluid">
                    <div class="row align-items-center min-vh-60">
                        <div class="col-lg-6">
                            <div class="hero-text">
                                <div class="hero-badge">
                                    <i class="fas fa-trophy"></i>
                                    <span>{{ __('hero.premium_experience') }}</span>
                                </div>
                                <h1 class="hero-title">
                                    {{ __('hero.monetize_your') }}
                                    <span class="gradient-text">{{ __('hero.passion') }}</span>
                                </h1>
                                <p class="hero-description">
                                    {{ __('hero.monetize_description') }}
                                </p>
                                <div class="hero-features">
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>{{ __('hero.multiple_revenue') }}</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>{{ __('hero.advanced_analytics') }}</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>{{ __('hero.support_24_7') }}</span>
                                    </div>
                                </div>
                                <div class="hero-actions">
                                    <a href="{{ url('/register') }}" class="btn-hero-primary">
                                        <i class="fas fa-crown"></i>
                                        {{ __('hero.go_premium') }}
                                    </a>
                                    <a href="#" class="btn-hero-secondary">
                                        <i class="fas fa-info-circle"></i>
                                        {{ __('hero.learn_more') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-visual">
                                <div class="hero-image-container">
                                    <img src="{{asset('public/new_home_page/3man.png')}}" alt="{{ __('hero.premium_features') }}" class="hero-image">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="hero-slide" data-bg="{{asset('public/new_home_page/banner.jpg')}}">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container-fluid">
                    <div class="row align-items-center min-vh-60">
                        <div class="col-lg-6">
                            <div class="hero-text">
                                <div class="hero-badge">
                                    <i class="fas fa-globe"></i>
                                    <span>{{ __('hero.global_community') }}</span>
                                </div>
                                <h1 class="hero-title">
                                    {{ __('hero.join_the') }}
                                    <span class="gradient-text">{{ __('hero.revolution') }}</span>
                                </h1>
                                <div class="hero-testimonial">
                                    <div class="testimonial-content">
                                        <p>"{{ __('hero.testimonial_text') }}"</p>
                                        <div class="testimonial-author">
                                            <img src="{{asset('public/new_home_page/3man.png')}}" alt="{{ __('hero.creator') }}">
                                            <div>
                                                <span class="author-name">{{ __('hero.testimonial_author') }}</span>
                                                <span class="author-title">{{ __('hero.top_creator') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-actions">
                                    <a href="{{ url('/register') }}" class="btn-hero-primary">
                                        <i class="fas fa-users"></i>
                                        {{ __('hero.join_community') }}
                                    </a>
                                    <a href="{{ url('/creators') }}" class="btn-hero-secondary">
                                        <i class="fas fa-eye"></i>
                                        {{ __('hero.watch_demo') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-visual">
                                <div class="hero-image-container">
                                    <img src="{{asset('public/new_home_page/3man.png')}}" alt="{{ __('hero.community') }}" class="hero-image">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        <button class="indicator active" data-slide="0"></button>
        <button class="indicator" data-slide="1"></button>
        <button class="indicator" data-slide="2"></button>
    </div>
</div> 