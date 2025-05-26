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
                                    <span>Featured Platform</span>
                                </div>
                                <h1 class="hero-title">
                                    Support Your Favorite
                                    <span class="gradient-text">Creators</span>
                                </h1>
                                <p class="hero-description">
                                    Join thousands of creators and supporters in the ultimate content creation platform. 
                                    Discover amazing content, support creators, and build your community.
                                </p>
                                <div class="hero-stats">
                                    <div class="stat-item">
                                        <span class="stat-number">50K+</span>
                                        <span class="stat-label">Creators</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-number">1M+</span>
                                        <span class="stat-label">Supporters</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-number">$10M+</span>
                                        <span class="stat-label">Earned</span>
                                    </div>
                                </div>
                                <div class="hero-actions">
                                    <a href="{{ url('/register') }}" class="btn-hero-primary">
                                        <i class="fas fa-rocket"></i>
                                        Start Creating
                                    </a>
                                    <a href="{{ url('/creators') }}" class="btn-hero-secondary">
                                        <i class="fas fa-play"></i>
                                        Explore Creators
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-visual">
                                <div class="hero-image-container">
                                    <img src="{{asset('public/new_home_page/3man.png')}}" alt="Creators" class="hero-image">
                                    <div class="floating-cards">
                                        <div class="floating-card card-1">
                                            <i class="fas fa-heart"></i>
                                            <span>1.2K Likes</span>
                                        </div>
                                        <div class="floating-card card-2">
                                            <i class="fas fa-dollar-sign"></i>
                                            <span>$2,500</span>
                                        </div>
                                        <div class="floating-card card-3">
                                            <i class="fas fa-users"></i>
                                            <span>850 Fans</span>
                                        </div>
                                    </div>
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
                                    <span>Premium Experience</span>
                                </div>
                                <h1 class="hero-title">
                                    Monetize Your
                                    <span class="gradient-text">Passion</span>
                                </h1>
                                <p class="hero-description">
                                    Turn your creativity into income. Our platform provides all the tools you need 
                                    to build, grow, and monetize your audience effectively.
                                </p>
                                <div class="hero-features">
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Multiple Revenue Streams</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Advanced Analytics</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>24/7 Support</span>
                                    </div>
                                </div>
                                <div class="hero-actions">
                                    <a href="{{ url('/register') }}" class="btn-hero-primary">
                                        <i class="fas fa-crown"></i>
                                        Go Premium
                                    </a>
                                    <a href="#" class="btn-hero-secondary">
                                        <i class="fas fa-info-circle"></i>
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-visual">
                                <div class="hero-image-container">
                                    <img src="{{asset('public/new_home_page/3man.png')}}" alt="Premium Features" class="hero-image">
                                    <div class="floating-cards">
                                        <div class="floating-card card-1">
                                            <i class="fas fa-chart-line"></i>
                                            <span>+125% Growth</span>
                                        </div>
                                        <div class="floating-card card-2">
                                            <i class="fas fa-crown"></i>
                                            <span>Premium</span>
                                        </div>
                                        <div class="floating-card card-3">
                                            <i class="fas fa-shield-alt"></i>
                                            <span>Secure</span>
                                        </div>
                                    </div>
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
                                    <span>Global Community</span>
                                </div>
                                <h1 class="hero-title">
                                    Join the
                                    <span class="gradient-text">Revolution</span>
                                </h1>
                                <div class="hero-testimonial">
                                    <div class="testimonial-content">
                                        <p>"This platform changed my life. I went from hobby creator to full-time entrepreneur!"</p>
                                        <div class="testimonial-author">
                                            <img src="{{asset('public/new_home_page/3man.png')}}" alt="Creator">
                                            <div>
                                                <span class="author-name">Sarah Johnson</span>
                                                <span class="author-title">Top Creator</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-actions">
                                    <a href="{{ url('/register') }}" class="btn-hero-primary">
                                        <i class="fas fa-users"></i>
                                        Join Community
                                    </a>
                                    <a href="{{ url('/creators') }}" class="btn-hero-secondary">
                                        <i class="fas fa-eye"></i>
                                        Watch Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-visual">
                                <div class="hero-image-container">
                                    <img src="{{asset('public/new_home_page/3man.png')}}" alt="Community" class="hero-image">
                                    <div class="floating-cards">
                                        <div class="floating-card card-1">
                                            <i class="fas fa-globe-americas"></i>
                                            <span>150+ Countries</span>
                                        </div>
                                        <div class="floating-card card-2">
                                            <i class="fas fa-comments"></i>
                                            <span>Live Chat</span>
                                        </div>
                                        <div class="floating-card card-3">
                                            <i class="fas fa-handshake"></i>
                                            <span>Partnerships</span>
                                        </div>
                                    </div>
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

    <!-- Progress Bar -->
    <div class="hero-progress">
        <div class="progress-bar"></div>
    </div>
</div> 