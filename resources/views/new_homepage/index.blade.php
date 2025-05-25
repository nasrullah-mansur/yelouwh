<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="QLSDCBJt20r51A0mEE09dRsvgtwW4cbQk205FSXH" />
        <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut tortor rutrum massa efficitur tincidunt vel nec lacus. Curabitur porta aliquet diam, eu gravida neque lacinia." />
        <meta name="keywords" content="donations,support,creators,sponzy,subscription,content" />
        <meta name="theme-color" content="#ffb200" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Yelouwh - Support Creators Content</title>

        <!-- Performance optimizations -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('public/css/fontawesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{asset('public/new_home_page/slick/slick.css')}}" />
        <link rel="stylesheet" href="{{ asset('public/css/new_home_page.css') }}" />
    </head>
    <body class="new-home-page">
        <header class="modern-header">
            <div class="header-container">
                <!-- Left Section -->
                <div class="header-left">
                    <button class="menu-toggle" id="menu-toggler">
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                    </button>
                    <div class="brand-logo">
                        <a href="{{ url('/') }}" class="logo-link">
                            <img src="{{ asset('public/new_home_page/logo.png') }}" alt="Yelouwh Logo" loading="eager" />
                        </a>
                    </div>
                </div>

                <!-- Center Section - Search -->
                <div class="header-center">
                    <div class="search-container">
                        <div class="search-input-wrapper">
                            <i class="fas fa-search search-icon"></i>
                            <input type="text" class="search-input" placeholder="Search creators, categories..." />
                            <button class="search-filter-btn">
                                <i class="fas fa-sliders-h"></i>
                            </button>
                        </div>
                        <div class="quick-suggestions">
                            <span class="suggestion-tag">Popular</span>
                            <span class="suggestion-tag">Animation</span>
                            <span class="suggestion-tag">Photography</span>
                        </div>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="header-right">
                    <div class="header-actions">
                
                        <!-- Language -->
                        <div class="action-item language">
                            <button class="action-btn">
                                <i class="fas fa-globe"></i>
                            </button>
                        </div>

                        <!-- Auth Buttons -->
                        <div class="auth-buttons">
                            <a href="{{ url('/login') }}" class="btn-signin">
                                <i class="fas fa-sign-in-alt"></i>
                                Sign In
                            </a>
                            <a href="{{ url('/register') }}" class="btn-signup">
                                <i class="fas fa-rocket"></i>
                                Get Started
                            </a>
                        </div>

                        <!-- User Menu (for logged in users) -->
                        <div class="user-menu" style="display: none;">
                            <button class="user-avatar">
                                <img src="{{ asset('public/new_home_page/default-avatar.png') }}" alt="User Avatar" />
                                <span class="status-indicator online"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Search Overlay -->
            <div class="mobile-search-overlay">
                <div class="mobile-search-container">
                    <div class="mobile-search-header">
                        <h3>Search</h3>
                        <button class="close-search">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="mobile-search-input">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search creators, categories..." />
                    </div>
                    <div class="mobile-search-suggestions">
                        <h4>Popular Searches</h4>
                        <div class="suggestion-tags">
                            <span class="tag">Popular Creators</span>
                            <span class="tag">Animation</span>
                            <span class="tag">Photography</span>
                            <span class="tag">Design</span>
                            <span class="tag">Video & Film</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="new-home-page-main">
            <div class="sidebar-area modern-sidebar" id="sidebar-menu">
                <div class="sidebar-header">
                    <h3 class="sidebar-title">
                        <i class="fas fa-compass"></i>
                        Explore
                    </h3>
                </div>

                <!-- Mobile Auth Section -->
                <div class="sidebar-section mobile-auth-section">
                    <div class="mobile-auth-buttons">
                        <a href="{{ url('/login') }}" class="mobile-btn-signin">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>Sign In</span>
                        </a>
                        <a href="{{ url('/register') }}" class="mobile-btn-signup">
                            <i class="fas fa-rocket"></i>
                            <span>Get Started</span>
                        </a>
                    </div>
                </div>
                
                <div class="sidebar-section">
                    <div class="section-label">Popular</div>
                    <ul class="nav-list">
                        <li class="nav-item featured">
                            <a href="{{ url('/creators') }}" class="nav-link">
                                <div class="nav-icon trending">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <span class="nav-text">Popular</span>
                                <div class="nav-badge">Hot</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/creators/featured') }}" class="nav-link">
                                <div class="nav-icon star">
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="nav-text">Featured Creators</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/creators/more-active') }}" class="nav-link">
                                <div class="nav-icon fire">
                                    <i class="fas fa-fire"></i>
                                </div>
                                <span class="nav-text">More Active</span>
                            </a>                 
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/creators/new') }}" class="nav-link">
                                <div class="nav-icon new">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <span class="nav-text">New Creators</span>
                                <div class="nav-badge new">New</div>
                            </a>                 
                        </li>
                        <li class="nav-item">
                            <a href="https://test.divinecoder.com/creators/free" class="nav-link">
                                <div class="nav-icon gift">
                                    <i class="fas fa-gift"></i>
                                </div>
                                <span class="nav-text">Free Subscription</span>
                                <div class="nav-badge free">Free</div>
                            </a>                 
                        </li>
                    </ul>
                </div>

                <div class="sidebar-section">
                    <div class="section-label">Categories</div>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="https://test.divinecoder.com/category/animation" class="nav-link">
                                <div class="nav-icon animation">
                                    <i class="fas fa-magic"></i>
                                </div>
                                <span class="nav-text">Animation</span>
                            </a>                 
                        </li>
                        <li class="nav-item">
                            <a href="https://test.divinecoder.com/category/artist" class="nav-link">
                                <div class="nav-icon artist">
                                    <i class="fas fa-palette"></i>
                                </div>
                                <span class="nav-text">Artist</span>
                            </a>                 
                        </li>
                        <li class="nav-item">
                            <a href="https://test.divinecoder.com/category/designer" class="nav-link">
                                <div class="nav-icon designer">
                                    <i class="fas fa-pencil-ruler"></i>
                                </div>
                                <span class="nav-text">Designer</span>
                            </a>                 
                        </li>
                        <li class="nav-item">
                            <a href="https://test.divinecoder.com/category/developer" class="nav-link">
                                <div class="nav-icon developer">
                                    <i class="fas fa-code"></i>
                                </div>
                                <span class="nav-text">Developer</span>
                            </a>                 
                        </li>
                        <li class="nav-item">
                            <a href="https://test.divinecoder.com/category/drawing-and-painting" class="nav-link">
                                <div class="nav-icon drawing">
                                    <i class="fas fa-pen-fancy"></i>
                                </div>
                                <span class="nav-text">Drawing & Painting</span>
                            </a>                 
                        </li>
                        <li class="nav-item">
                            <a href="https://test.divinecoder.com/category/photography" class="nav-link">
                                <div class="nav-icon photography">
                                    <i class="fas fa-camera"></i>
                                </div>
                                <span class="nav-text">Photography</span>
                            </a>                 
                        </li>
                        <li class="nav-item">
                            <a href="https://test.divinecoder.com/category/podcasts" class="nav-link">
                                <div class="nav-icon podcast">
                                    <i class="fas fa-microphone"></i>
                                </div>
                                <span class="nav-text">Podcast</span>
                            </a>                 
                        </li>
                        <li class="nav-item">
                            <a href="https://test.divinecoder.com/category/video-and-film" class="nav-link">
                                <div class="nav-icon video">
                                    <i class="fas fa-video"></i>
                                </div>
                                <span class="nav-text">Video & Film</span>
                            </a>                 
                        </li>
                        <li class="nav-item">
                            <a href="https://test.divinecoder.com/category/writing" class="nav-link">
                                <div class="nav-icon writing">
                                    <i class="fas fa-pen-nib"></i>
                                </div>
                                <span class="nav-text">Writing</span>
                            </a>                 
                        </li>
                        <li class="nav-item">
                            <a href="https://test.divinecoder.com/category/others" class="nav-link">
                                <div class="nav-icon others">
                                    <i class="fas fa-puzzle-piece"></i>
                                </div>
                                <span class="nav-text">Other</span>
                            </a>                 
                        </li>
                    </ul>
                </div>

                <div class="sidebar-section">
                    <div class="section-label">Tools</div>
                    <ul class="nav-list">
                        <li class="nav-item special">
                            <a href="https://test.divinecoder.com/simulator" class="nav-link">
                                <div class="nav-icon simulator">
                                    <i class="fas fa-calculator"></i>
                                </div>
                                <span class="nav-text">Simulator</span>
                                <div class="nav-badge premium">Pro</div>
                            </a>                 
                        </li>
                    </ul>
                </div>

                <div class="sidebar-footer">
                    <div class="upgrade-card">
                        <div class="upgrade-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                        <h4>Go Premium</h4>
                        <p>Unlock exclusive features and content</p>
                        <button class="upgrade-btn">Upgrade Now</button>
                    </div>
                </div>
            </div>
            <div class="content-area">
                <div class="main-content">
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
                                                        <img src="{{asset('public/new_home_page/3man.png')}}" alt="Creators" class="hero-image" loading="lazy">
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

                    {{-- Wins --}}

                    {{-- Modern Recent Posts Section --}}
                    <div class="modern-posts-section">
                        <div class="container-fluid">
                            <!-- Section Header -->
                            <div class="posts-header">
                                <div class="header-content">
                                    <div class="header-icon">
                                        <i class="fas fa-newspaper"></i>
                                    </div>
                                    <div class="header-text">
                                        <h2 class="section-title">Recent Posts</h2>
                                        <p class="section-subtitle">Latest updates from our creative community</p>
                                    </div>
                                </div>
                                <div class="header-actions">
                                    <div class="filter-tabs">
                                        <button class="filter-tab active" data-filter="all">
                                            <i class="fas fa-th"></i>
                                            All
                                        </button>
                                        <button class="filter-tab" data-filter="featured">
                                            <i class="fas fa-star"></i>
                                            Featured
                                        </button>
                                        <button class="filter-tab" data-filter="trending">
                                            <i class="fas fa-fire"></i>
                                            Trending
                                        </button>
                                    </div>
                                    <button class="view-more-btn">
                                        <span>View All</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Posts Carousel -->
                            <div class="posts-carousel-container">
                                <div class="posts-carousel">
                                    <!-- Post Item 1 -->
                                    <div class="post-card featured" data-category="featured">
                                        <div class="post-image">
                                            <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="Creator Post" />
                                            <div class="post-overlay">
                                                <div class="post-actions">
                                                    <button class="action-btn like-btn">
                                                        <i class="fas fa-heart"></i>
                                                        <span>1.2K</span>
                                                    </button>
                                                    <button class="action-btn share-btn">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="post-badge featured">
                                                <i class="fas fa-crown"></i>
                                                Featured
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-meta">
                                                <div class="creator-info">
                                                    <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="Creator" class="creator-avatar" />
                                                    <div class="creator-details">
                                                        <span class="creator-name">Alex Johnson</span>
                                                        <span class="post-time">2 hours ago</span>
                                                    </div>
                                                </div>
                                                <div class="post-stats">
                                                    <span class="stat-item">
                                                        <i class="fas fa-eye"></i>
                                                        2.5K
                                                    </span>
                                                </div>
                                            </div>
                                            <h3 class="post-title">Amazing Digital Art Creation Process</h3>
                                            <p class="post-excerpt">Behind the scenes of creating stunning digital artwork...</p>
                                            <div class="post-tags">
                                                <span class="tag">Digital Art</span>
                                                <span class="tag">Process</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Post Item 2 -->
                                    <div class="post-card trending" data-category="trending">
                                        <div class="post-image">
                                            <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="Creator Post" />
                                            <div class="post-overlay">
                                                <div class="post-actions">
                                                    <button class="action-btn like-btn">
                                                        <i class="fas fa-heart"></i>
                                                        <span>856</span>
                                                    </button>
                                                    <button class="action-btn share-btn">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="post-badge trending">
                                                <i class="fas fa-fire"></i>
                                                Trending
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-meta">
                                                <div class="creator-info">
                                                    <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="Creator" class="creator-avatar" />
                                                    <div class="creator-details">
                                                        <span class="creator-name">Sarah Chen</span>
                                                        <span class="post-time">4 hours ago</span>
                                                    </div>
                                                </div>
                                                <div class="post-stats">
                                                    <span class="stat-item">
                                                        <i class="fas fa-eye"></i>
                                                        1.8K
                                                    </span>
                                                </div>
                                            </div>
                                            <h3 class="post-title">Photography Tips for Beginners</h3>
                                            <p class="post-excerpt">Essential techniques every photographer should know...</p>
                                            <div class="post-tags">
                                                <span class="tag">Photography</span>
                                                <span class="tag">Tutorial</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Post Item 3 -->
                                    <div class="post-card" data-category="all">
                                        <div class="post-image">
                                            <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="Creator Post" />
                                            <div class="post-overlay">
                                                <div class="post-actions">
                                                    <button class="action-btn like-btn">
                                                        <i class="fas fa-heart"></i>
                                                        <span>642</span>
                                                    </button>
                                                    <button class="action-btn share-btn">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-meta">
                                                <div class="creator-info">
                                                    <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="Creator" class="creator-avatar" />
                                                    <div class="creator-details">
                                                        <span class="creator-name">Mike Rodriguez</span>
                                                        <span class="post-time">6 hours ago</span>
                                                    </div>
                                                </div>
                                                <div class="post-stats">
                                                    <span class="stat-item">
                                                        <i class="fas fa-eye"></i>
                                                        1.2K
                                                    </span>
                                                </div>
                                            </div>
                                            <h3 class="post-title">Web Design Trends 2024</h3>
                                            <p class="post-excerpt">Exploring the latest trends in modern web design...</p>
                                            <div class="post-tags">
                                                <span class="tag">Web Design</span>
                                                <span class="tag">Trends</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Post Item 4 -->
                                    <div class="post-card" data-category="all">
                                        <div class="post-image">
                                            <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="Creator Post" />
                                            <div class="post-overlay">
                                                <div class="post-actions">
                                                    <button class="action-btn like-btn">
                                                        <i class="fas fa-heart"></i>
                                                        <span>423</span>
                                                    </button>
                                                    <button class="action-btn share-btn">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-meta">
                                                <div class="creator-info">
                                                    <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="Creator" class="creator-avatar" />
                                                    <div class="creator-details">
                                                        <span class="creator-name">Emma Wilson</span>
                                                        <span class="post-time">8 hours ago</span>
                                                    </div>
                                                </div>
                                                <div class="post-stats">
                                                    <span class="stat-item">
                                                        <i class="fas fa-eye"></i>
                                                        987
                                                    </span>
                                                </div>
                                            </div>
                                            <h3 class="post-title">Animation Workflow Tips</h3>
                                            <p class="post-excerpt">Streamline your animation process with these tips...</p>
                                            <div class="post-tags">
                                                <span class="tag">Animation</span>
                                                <span class="tag">Workflow</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Post Item 5 -->
                                    <div class="post-card featured" data-category="featured">
                                        <div class="post-image">
                                            <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="Creator Post" />
                                            <div class="post-overlay">
                                                <div class="post-actions">
                                                    <button class="action-btn like-btn">
                                                        <i class="fas fa-heart"></i>
                                                        <span>1.5K</span>
                                                    </button>
                                                    <button class="action-btn share-btn">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="post-badge featured">
                                                <i class="fas fa-crown"></i>
                                                Featured
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-meta">
                                                <div class="creator-info">
                                                    <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="Creator" class="creator-avatar" />
                                                    <div class="creator-details">
                                                        <span class="creator-name">David Kim</span>
                                                        <span class="post-time">12 hours ago</span>
                                                    </div>
                                                </div>
                                                <div class="post-stats">
                                                    <span class="stat-item">
                                                        <i class="fas fa-eye"></i>
                                                        3.2K
                                                    </span>
                                                </div>
                                            </div>
                                            <h3 class="post-title">Music Production Masterclass</h3>
                                            <p class="post-excerpt">Learn professional music production techniques...</p>
                                            <div class="post-tags">
                                                <span class="tag">Music</span>
                                                <span class="tag">Production</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Post Item 6 -->
                                    <div class="post-card trending" data-category="trending">
                                        <div class="post-image">
                                            <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="Creator Post" />
                                            <div class="post-overlay">
                                                <div class="post-actions">
                                                    <button class="action-btn like-btn">
                                                        <i class="fas fa-heart"></i>
                                                        <span>789</span>
                                                    </button>
                                                    <button class="action-btn share-btn">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="post-badge trending">
                                                <i class="fas fa-fire"></i>
                                                Trending
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-meta">
                                                <div class="creator-info">
                                                    <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="Creator" class="creator-avatar" />
                                                    <div class="creator-details">
                                                        <span class="creator-name">Lisa Park</span>
                                                        <span class="post-time">1 day ago</span>
                                                    </div>
                                                </div>
                                                <div class="post-stats">
                                                    <span class="stat-item">
                                                        <i class="fas fa-eye"></i>
                                                        2.1K
                                                    </span>
                                                </div>
                                            </div>
                                            <h3 class="post-title">Creative Writing Workshop</h3>
                                            <p class="post-excerpt">Unlock your storytelling potential with these exercises...</p>
                                            <div class="post-tags">
                                                <span class="tag">Writing</span>
                                                <span class="tag">Creative</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Carousel Navigation -->
                                <div class="carousel-navigation">
                                    <button class="nav-btn prev-btn">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button class="nav-btn next-btn">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modern Category Section --}}
                    <div class="modern-category-section">
                        <div class="container-fluid p-0">
                            <!-- Section Header -->
                            <div class="section-header">
                                <div class="section-title-wrapper">
                                    <h2 class="section-title">
                                        <span class="title-icon">
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
                                <!-- Popular - Large Card -->
                                <a href="{{ url('/creators') }}" class="category-card featured-card" data-category="popular">
                                    <div class="card-background">
                                        <img src="{{ asset('public/new_home_page/sports.jpg') }}" alt="Popular Creators" />
                                        <div class="gradient-overlay"></div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-icon">
                                            <i class="fas fa-fire"></i>
                                        </div>
                                        <div class="card-text">
                                            <h3 class="card-title">Popular</h3>
                                            <p class="card-description">Trending creators with amazing content</p>
                                            <div class="card-stats">
                                                <span class="stat-item">
                                                    <i class="fas fa-users"></i>
                                                    50K+ Creators
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-arrow">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                    <div class="card-glow"></div>
                                </a>

                                <!-- Featured Creators - Large Card -->
                                <a href="{{ url('/creators/featured') }}" class="category-card featured-card" data-category="featured">
                                    <div class="card-background">
                                        <img src="{{ asset('public/new_home_page/sports.jpg') }}" alt="Featured Creators" />
                                        <div class="gradient-overlay"></div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-icon">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="card-text">
                                            <h3 class="card-title">Featured</h3>
                                            <p class="card-description">Hand-picked exceptional creators</p>
                                            <div class="card-stats">
                                                <span class="stat-item">
                                                    <i class="fas fa-crown"></i>
                                                    Premium Content
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-arrow">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                    <div class="card-glow"></div>
                                </a>

                                <!-- More Active -->
                                <a href="{{ url('/creators/more-active') }}" class="category-card" data-category="active">
                                    <div class="card-background">
                                        <img src="{{ asset('public/new_home_page/sports-2.jpg') }}" alt="More Active" />
                                        <div class="gradient-overlay"></div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-icon">
                                            <i class="fas fa-bolt"></i>
                                        </div>
                                        <div class="card-text">
                                            <h3 class="card-title">More Active</h3>
                                            <p class="card-description">Highly engaged creators</p>
                                        </div>
                                        <div class="card-arrow">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                    <div class="card-glow"></div>
                                </a>

                                <!-- New Creators -->
                                <a href="{{ url('/creators/new') }}" class="category-card" data-category="new">
                                    <div class="card-background">
                                        <img src="{{ asset('public/new_home_page/sports-2.jpg') }}" alt="New Creators" />
                                        <div class="gradient-overlay"></div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-icon">
                                            <i class="fas fa-seedling"></i>
                                        </div>
                                        <div class="card-text">
                                            <h3 class="card-title">New Creators</h3>
                                            <p class="card-description">Fresh talent to discover</p>
                                        </div>
                                        <div class="card-badge">New</div>
                                        <div class="card-arrow">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                    <div class="card-glow"></div>
                                </a>

                                <!-- Free Subscriptions -->
                                <a href="{{ url('/creators/free') }}" class="category-card" data-category="free">
                                    <div class="card-background">
                                        <img src="{{ asset('public/new_home_page/sports.jpg') }}" alt="Free Subscriptions" />
                                        <div class="gradient-overlay"></div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-icon">
                                            <i class="fas fa-gift"></i>
                                        </div>
                                        <div class="card-text">
                                            <h3 class="card-title">Free Content</h3>
                                            <p class="card-description">Amazing free subscriptions</p>
                                        </div>
                                        <div class="card-badge free">Free</div>
                                        <div class="card-arrow">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                    <div class="card-glow"></div>
                                </a>

                                <!-- Others -->
                                <a href="{{ url('/category/others') }}" class="category-card" data-category="others">
                                    <div class="card-background">
                                        <img src="{{ asset('public/new_home_page/sports-2.jpg') }}" alt="Other Categories" />
                                        <div class="gradient-overlay"></div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-icon">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <div class="card-text">
                                            <h3 class="card-title">Explore More</h3>
                                            <p class="card-description">Discover other categories</p>
                                        </div>
                                        <div class="card-arrow">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                    <div class="card-glow"></div>
                                </a>
                            </div>
                        </div>
                    </div>

                    

                    {{-- image cart --}}
                    {{-- Modern Creator Showcase - Recently Added --}}
                    <div class="modern-creator-showcase">
                        <div class="container-fluid">
                            <div class="showcase-header">
                                <div class="header-content">
                                    <div class="header-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="header-text">
                                        <h2 class="section-title">Recently Added</h2>
                                        <p class="section-subtitle">Fresh talent joining our creative community</p>
                                    </div>
                                </div>
                                <div class="header-actions">
                                    <div class="view-controls">
                                        <button class="view-btn grid-view active" data-view="grid">
                                            <i class="fas fa-th"></i>
                                        </button>
                                        <button class="view-btn list-view" data-view="list">
                                            <i class="fas fa-list"></i>
                                        </button>
                                    </div>
                                    <a href="#" class="view-all-btn">
                                        <span>View All</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="creators-carousel-container">
                                <div class="creators-carousel">
                                    <div class="creator-card featured">
                                        <div class="creator-image">
                                            <img src="{{ asset('public/new_home_page/cart-image.png') }}" alt="Creator" />
                                            <div class="creator-overlay">
                                                <div class="creator-actions">
                                                    <button class="action-btn follow-btn">
                                                        <i class="fas fa-plus"></i>
                                                        Follow
                                                    </button>
                                                    <button class="action-btn view-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="creator-badge new">
                                                <i class="fas fa-star"></i>
                                                New
                                            </div>
                                            <div class="live-indicator">
                                                <span class="pulse"></span>
                                                Live
                                            </div>
                                        </div>
                                        <div class="creator-info">
                                            <div class="creator-meta">
                                                <h3 class="creator-name">Alex Johnson</h3>
                                                <p class="creator-category">Digital Artist</p>
                                            </div>
                                            <div class="creator-stats">
                                                <div class="stat-item">
                                                    <i class="fas fa-users"></i>
                                                    <span>2.5K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-heart"></i>
                                                    <span>1.2K</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="creator-card">
                                        <div class="creator-image">
                                            <img src="{{ asset('public/new_home_page/cart-image-1.png') }}" alt="Creator" />
                                            <div class="creator-overlay">
                                                <div class="creator-actions">
                                                    <button class="action-btn follow-btn">
                                                        <i class="fas fa-plus"></i>
                                                        Follow
                                                    </button>
                                                    <button class="action-btn view-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="creator-badge trending">
                                                <i class="fas fa-fire"></i>
                                                Hot
                                            </div>
                                        </div>
                                        <div class="creator-info">
                                            <div class="creator-meta">
                                                <h3 class="creator-name">Sarah Chen</h3>
                                                <p class="creator-category">Photographer</p>
                                            </div>
                                            <div class="creator-stats">
                                                <div class="stat-item">
                                                    <i class="fas fa-users"></i>
                                                    <span>1.8K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-heart"></i>
                                                    <span>956</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="creator-card">
                                        <div class="creator-image">
                                            <img src="{{ asset('public/new_home_page/cart-image-2.png') }}" alt="Creator" />
                                            <div class="creator-overlay">
                                                <div class="creator-actions">
                                                    <button class="action-btn follow-btn">
                                                        <i class="fas fa-plus"></i>
                                                        Follow
                                                    </button>
                                                    <button class="action-btn view-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="creator-info">
                                            <div class="creator-meta">
                                                <h3 class="creator-name">Mike Rodriguez</h3>
                                                <p class="creator-category">Video Creator</p>
                                            </div>
                                            <div class="creator-stats">
                                                <div class="stat-item">
                                                    <i class="fas fa-users"></i>
                                                    <span>3.2K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-heart"></i>
                                                    <span>1.5K</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="creator-card">
                                        <div class="creator-image">
                                            <img src="{{ asset('public/new_home_page/cart-image-3.png') }}" alt="Creator" />
                                            <div class="creator-overlay">
                                                <div class="creator-actions">
                                                    <button class="action-btn follow-btn">
                                                        <i class="fas fa-plus"></i>
                                                        Follow
                                                    </button>
                                                    <button class="action-btn view-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="creator-badge premium">
                                                <i class="fas fa-crown"></i>
                                                Pro
                                            </div>
                                        </div>
                                        <div class="creator-info">
                                            <div class="creator-meta">
                                                <h3 class="creator-name">Emma Wilson</h3>
                                                <p class="creator-category">Animator</p>
                                            </div>
                                            <div class="creator-stats">
                                                <div class="stat-item">
                                                    <i class="fas fa-users"></i>
                                                    <span>4.1K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-heart"></i>
                                                    <span>2.3K</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="creator-card">
                                        <div class="creator-image">
                                            <img src="{{ asset('public/new_home_page/cart-image.png') }}" alt="Creator" />
                                            <div class="creator-overlay">
                                                <div class="creator-actions">
                                                    <button class="action-btn follow-btn">
                                                        <i class="fas fa-plus"></i>
                                                        Follow
                                                    </button>
                                                    <button class="action-btn view-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="creator-info">
                                            <div class="creator-meta">
                                                <h3 class="creator-name">David Kim</h3>
                                                <p class="creator-category">Music Producer</p>
                                            </div>
                                            <div class="creator-stats">
                                                <div class="stat-item">
                                                    <i class="fas fa-users"></i>
                                                    <span>1.9K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-heart"></i>
                                                    <span>876</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="creator-card">
                                        <div class="creator-image">
                                            <img src="{{ asset('public/new_home_page/cart-image-1.png') }}" alt="Creator" />
                                            <div class="creator-overlay">
                                                <div class="creator-actions">
                                                    <button class="action-btn follow-btn">
                                                        <i class="fas fa-plus"></i>
                                                        Follow
                                                    </button>
                                                    <button class="action-btn view-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="creator-info">
                                            <div class="creator-meta">
                                                <h3 class="creator-name">Lisa Park</h3>
                                                <p class="creator-category">Writer</p>
                                            </div>
                                            <div class="creator-stats">
                                                <div class="stat-item">
                                                    <i class="fas fa-users"></i>
                                                    <span>2.7K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-heart"></i>
                                                    <span>1.4K</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Carousel Navigation -->
                                <div class="carousel-navigation">
                                    <button class="nav-btn prev-btn">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button class="nav-btn next-btn">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modern Creator Showcase - Featured Creators --}}
                    <div class="modern-creator-showcase featured-showcase">
                        <div class="container-fluid">
                            <div class="showcase-header">
                                <div class="header-content">
                                    <div class="header-icon">
                                        <i class="fas fa-crown"></i>
                                    </div>
                                    <div class="header-text">
                                        <h2 class="section-title">Featured Creators</h2>
                                        <p class="section-subtitle">Handpicked exceptional talent creating amazing content</p>
                                    </div>
                                </div>
                                <div class="header-actions">
                                    <div class="filter-options">
                                        <button class="filter-btn active" data-filter="all">All</button>
                                        <button class="filter-btn" data-filter="trending">Trending</button>
                                        <button class="filter-btn" data-filter="premium">Premium</button>
                                    </div>
                                    <a href="#" class="view-all-btn">
                                        <span>View All</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="creators-carousel-container">
                                <div class="creators-carousel">
                                    <div class="creator-card premium featured">
                                        <div class="creator-image">
                                            <img src="{{ asset('public/new_home_page/cart-image-1.png') }}" alt="Creator" />
                                            <div class="creator-overlay">
                                                <div class="creator-actions">
                                                    <button class="action-btn follow-btn">
                                                        <i class="fas fa-plus"></i>
                                                        Follow
                                                    </button>
                                                    <button class="action-btn view-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="action-btn support-btn">
                                                        <i class="fas fa-heart"></i>
                                                        Support
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="creator-badge featured">
                                                <i class="fas fa-star"></i>
                                                Featured
                                            </div>
                                            <div class="creator-badge premium">
                                                <i class="fas fa-crown"></i>
                                                Pro
                                            </div>
                                        </div>
                                        <div class="creator-info">
                                            <div class="creator-meta">
                                                <h3 class="creator-name">Jessica Martinez</h3>
                                                <p class="creator-category">Digital Artist</p>
                                            </div>
                                            <div class="creator-stats">
                                                <div class="stat-item">
                                                    <i class="fas fa-users"></i>
                                                    <span>15.2K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-heart"></i>
                                                    <span>8.7K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-dollar-sign"></i>
                                                    <span>$2.5K</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="creator-card trending">
                                        <div class="creator-image">
                                            <img src="{{ asset('public/new_home_page/cart-image-2.png') }}" alt="Creator" />
                                            <div class="creator-overlay">
                                                <div class="creator-actions">
                                                    <button class="action-btn follow-btn">
                                                        <i class="fas fa-plus"></i>
                                                        Follow
                                                    </button>
                                                    <button class="action-btn view-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="action-btn support-btn">
                                                        <i class="fas fa-heart"></i>
                                                        Support
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="creator-badge trending">
                                                <i class="fas fa-fire"></i>
                                                Trending
                                            </div>
                                        </div>
                                        <div class="creator-info">
                                            <div class="creator-meta">
                                                <h3 class="creator-name">Ryan Thompson</h3>
                                                <p class="creator-category">Video Producer</p>
                                            </div>
                                            <div class="creator-stats">
                                                <div class="stat-item">
                                                    <i class="fas fa-users"></i>
                                                    <span>12.8K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-heart"></i>
                                                    <span>6.4K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-dollar-sign"></i>
                                                    <span>$1.8K</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="creator-card">
                                        <div class="creator-image">
                                            <img src="{{ asset('public/new_home_page/cart-image.png') }}" alt="Creator" />
                                            <div class="creator-overlay">
                                                <div class="creator-actions">
                                                    <button class="action-btn follow-btn">
                                                        <i class="fas fa-plus"></i>
                                                        Follow
                                                    </button>
                                                    <button class="action-btn view-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="action-btn support-btn">
                                                        <i class="fas fa-heart"></i>
                                                        Support
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="creator-info">
                                            <div class="creator-meta">
                                                <h3 class="creator-name">Maya Patel</h3>
                                                <p class="creator-category">Photographer</p>
                                            </div>
                                            <div class="creator-stats">
                                                <div class="stat-item">
                                                    <i class="fas fa-users"></i>
                                                    <span>9.3K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-heart"></i>
                                                    <span>4.2K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-dollar-sign"></i>
                                                    <span>$1.2K</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="creator-card premium">
                                        <div class="creator-image">
                                            <img src="{{ asset('public/new_home_page/cart-image-3.png') }}" alt="Creator" />
                                            <div class="creator-overlay">
                                                <div class="creator-actions">
                                                    <button class="action-btn follow-btn">
                                                        <i class="fas fa-plus"></i>
                                                        Follow
                                                    </button>
                                                    <button class="action-btn view-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="action-btn support-btn">
                                                        <i class="fas fa-heart"></i>
                                                        Support
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="creator-badge premium">
                                                <i class="fas fa-crown"></i>
                                                Premium
                                            </div>
                                        </div>
                                        <div class="creator-info">
                                            <div class="creator-meta">
                                                <h3 class="creator-name">Carlos Rivera</h3>
                                                <p class="creator-category">Music Composer</p>
                                            </div>
                                            <div class="creator-stats">
                                                <div class="stat-item">
                                                    <i class="fas fa-users"></i>
                                                    <span>11.5K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-heart"></i>
                                                    <span>7.1K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-dollar-sign"></i>
                                                    <span>$3.2K</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="creator-card">
                                        <div class="creator-image">
                                            <img src="{{ asset('public/new_home_page/cart-image-1.png') }}" alt="Creator" />
                                            <div class="creator-overlay">
                                                <div class="creator-actions">
                                                    <button class="action-btn follow-btn">
                                                        <i class="fas fa-plus"></i>
                                                        Follow
                                                    </button>
                                                    <button class="action-btn view-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="action-btn support-btn">
                                                        <i class="fas fa-heart"></i>
                                                        Support
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="creator-info">
                                            <div class="creator-meta">
                                                <h3 class="creator-name">Sophie Anderson</h3>
                                                <p class="creator-category">Illustrator</p>
                                            </div>
                                            <div class="creator-stats">
                                                <div class="stat-item">
                                                    <i class="fas fa-users"></i>
                                                    <span>7.8K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-heart"></i>
                                                    <span>3.9K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-dollar-sign"></i>
                                                    <span>$950</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="creator-card trending">
                                        <div class="creator-image">
                                            <img src="{{ asset('public/new_home_page/cart-image-2.png') }}" alt="Creator" />
                                            <div class="creator-overlay">
                                                <div class="creator-actions">
                                                    <button class="action-btn follow-btn">
                                                        <i class="fas fa-plus"></i>
                                                        Follow
                                                    </button>
                                                    <button class="action-btn view-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="action-btn support-btn">
                                                        <i class="fas fa-heart"></i>
                                                        Support
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="creator-badge trending">
                                                <i class="fas fa-fire"></i>
                                                Hot
                                            </div>
                                        </div>
                                        <div class="creator-info">
                                            <div class="creator-meta">
                                                <h3 class="creator-name">James Wilson</h3>
                                                <p class="creator-category">Game Developer</p>
                                            </div>
                                            <div class="creator-stats">
                                                <div class="stat-item">
                                                    <i class="fas fa-users"></i>
                                                    <span>13.7K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-heart"></i>
                                                    <span>9.2K</span>
                                                </div>
                                                <div class="stat-item">
                                                    <i class="fas fa-dollar-sign"></i>
                                                    <span>$4.1K</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Carousel Navigation -->
                                <div class="carousel-navigation">
                                    <button class="nav-btn prev-btn">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button class="nav-btn next-btn">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- Modern Footer --}}
                    <footer class="modern-footer">
                        <!-- Newsletter Section -->
                        <div class="newsletter-section">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="newsletter-content">
                                            <h3>Stay in the Loop</h3>
                                            <p>Get the latest updates, creator spotlights, and exclusive content delivered to your inbox.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="newsletter-form">
                                            <form class="subscribe-form">
                                                <div class="input-group">
                                                    <input type="email" class="form-control" placeholder="Enter your email address" required>
                                                    <button type="submit" class="subscribe-btn">
                                                        <i class="fas fa-paper-plane"></i>
                                                        Subscribe
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Main Footer Content -->
                        <div class="footer-main">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Brand Section -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="footer-brand">
                                            <div class="brand-logo">
                                                <img src="{{ asset('public/new_home_page/logo.png') }}" alt="Yelouwh Logo" />
                                            </div>
                                            <p class="brand-description">
                                                Empowering creators worldwide with innovative tools and community support. 
                                                Join thousands of creators building their dreams on Yelouwh.
                                            </p>
                                            <div class="social-links">
                                                <a href="#" class="social-link twitter">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                                <a href="#" class="social-link instagram">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                                <a href="#" class="social-link youtube">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                                <a href="#" class="social-link linkedin">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                                <a href="#" class="social-link discord">
                                                    <i class="fab fa-discord"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Quick Links -->
                                    <div class="col-lg-2 col-md-6">
                                        <div class="footer-column">
                                            <h4 class="column-title">
                                                <i class="fas fa-info-circle"></i>
                                                About
                                            </h4>
                                            <ul class="footer-links">
                                                <li><a href="https://test.divinecoder.com/p/about">About Us</a></li>
                                                <li><a href="https://test.divinecoder.com/p/how-it-works">How It Works</a></li>
                                                <li><a href="https://test.divinecoder.com/contact">Contact Us</a></li>
                                                <li><a href="#">Careers</a></li>
                                                <li><a href="#">Press Kit</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Categories -->
                                    <div class="col-lg-2 col-md-6">
                                        <div class="footer-column">
                                            <h4 class="column-title">
                                                <i class="fas fa-th-large"></i>
                                                Categories
                                            </h4>
                                            <ul class="footer-links">
                                                <li><a href="https://test.divinecoder.com/category/animation">Animation</a></li>
                                                <li><a href="https://test.divinecoder.com/category/artist">Artist</a></li>
                                                <li><a href="https://test.divinecoder.com/category/designer">Designer</a></li>
                                                <li><a href="https://test.divinecoder.com/category/developer">Developer</a></li>
                                                <li><a href="https://test.divinecoder.com/category/photography">Photography</a></li>
                                                <li><a href="https://test.divinecoder.com/category/others">View All</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Support -->
                                    <div class="col-lg-2 col-md-6">
                                        <div class="footer-column">
                                            <h4 class="column-title">
                                                <i class="fas fa-headset"></i>
                                                Support
                                            </h4>
                                            <ul class="footer-links">
                                                <li><a href="#">Help Center</a></li>
                                                <li><a href="#">Creator Guide</a></li>
                                                <li><a href="#">Community</a></li>
                                                <li><a href="#">Report Issue</a></li>
                                                <li><a href="#">Safety</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Account -->
                                    <div class="col-lg-2 col-md-6">
                                        <div class="footer-column">
                                            <h4 class="column-title">
                                                <i class="fas fa-user"></i>
                                                Account
                                            </h4>
                                            <ul class="footer-links">
                                                <li><a href="https://test.divinecoder.com/login">Sign In</a></li>
                                                <li><a href="https://test.divinecoder.com/signup">Sign Up</a></li>
                                                <li><a href="#">Creator Dashboard</a></li>
                                                <li><a href="#">Settings</a></li>
                                                <li><a href="#">Billing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Bottom -->
                        <div class="footer-bottom">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="copyright">
                                            <p>&copy; 2025 <span class="brand-highlight">Yelouwh</span>. All rights reserved.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="footer-legal">
                                            <ul>
                                                <li><a href="https://test.divinecoder.com/p/terms-of-service">Terms</a></li>
                                                <li><a href="https://test.divinecoder.com/p/privacy">Privacy</a></li>
                                                <li><a href="https://test.divinecoder.com/p/cookies">Cookies</a></li>
                                                <li>
                                                    <div class="language-selector">
                                                        <i class="fas fa-globe"></i>
                                                        <select>
                                                            <option value="en">English</option>
                                                            <option value="es">Español</option>
                                                        </select>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </main>

        <script>

            function toggleSidebarVisibility() {
            const sidebar = document.querySelector('.sidebar-area');
                if (!sidebar) return;

                if (window.matchMedia("(max-width: 960px)").matches) {
                    sidebar.classList.add("d-none");
                } else {
                    sidebar.classList.remove("d-none");
                }
            }
            document.addEventListener("DOMContentLoaded", function () {
                // Modern sidebar functionality
                const navLinks = document.querySelectorAll('.modern-sidebar .nav-link');
                
                // Add active state functionality
                navLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        // Remove active class from all links
                        navLinks.forEach(l => l.classList.remove('active'));
                        // Add active class to clicked link
                        this.classList.add('active');
                    });
                });

                // Add ripple effect to nav links
                navLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        const ripple = document.createElement('span');
                        const rect = this.getBoundingClientRect();
                        const size = Math.max(rect.width, rect.height);
                        const x = e.clientX - rect.left - size / 2;
                        const y = e.clientY - rect.top - size / 2;
                        
                        ripple.style.width = ripple.style.height = size + 'px';
                        ripple.style.left = x + 'px';
                        ripple.style.top = y + 'px';
                        ripple.classList.add('ripple');
                        
                        this.appendChild(ripple);
                        
                        setTimeout(() => {
                            ripple.remove();
                        }, 600);
                    });
                });

                // Upgrade button functionality
                const upgradeBtn = document.querySelector('.upgrade-btn');
                if (upgradeBtn) {
                    upgradeBtn.addEventListener('click', function() {
                        // Add your upgrade logic here
                        alert('Upgrade functionality coming soon!');
                    });
                }

                toggleSidebarVisibility();
            });

            let tabItems = document.querySelectorAll(".round-race .tab-item");
            let tabList = document.querySelectorAll("#tab_list li");

            tabList.forEach((link) => {
                link.addEventListener("click", function (e) {
                    tabList.forEach((item) => item.classList.remove("active"));

                    this.classList.add("active");

                    let contentClass = this.getAttribute("data-content");

                    tabItems.forEach((item) => item.classList.add("d-none"));

                    console.log(contentClass);

                    let selectedTab = document.querySelector(contentClass);
                    selectedTab.classList.remove("d-none");
                });
            });

            function toggleTab(tabs, element) {
                tabs.forEach((link) => {
                    // link.classList.remove('active')
                    link.addEventListener("click", function (e) {
                        e.target.classList.add("active");
                        e.target.siblings.classList.remove("active");
                    });
                });
            }

            
        </script>

        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('public/new_home_page/slick/slick.min.js')}}"></script>

        <script>

            // Modern Header Functionality
            let menuToggler = $('#menu-toggler');
            let mobileSearchOverlay = $('.mobile-search-overlay');
            let searchInput = $('.search-input');

            // Menu toggle functionality
            menuToggler.on('click', function(e) {
                $('#sidebar-menu').toggleClass('d-none');
                
                // Animate hamburger lines
                $(this).toggleClass('active');
            });

            // Mobile search functionality
            $('.search-btn, .search-icon').on('click', function(e) {
                if ($(window).width() <= 1024) {
                    mobileSearchOverlay.addClass('active');
                    setTimeout(() => {
                        $('.mobile-search-input input').focus();
                    }, 300);
                }
            });

            $('.close-search, .mobile-search-overlay').on('click', function(e) {
                if (e.target === this) {
                    mobileSearchOverlay.removeClass('active');
                }
            });

            // Search suggestions
            searchInput.on('focus', function() {
                $(this).closest('.search-container').find('.quick-suggestions').fadeIn(200);
            });

            $(document).on('click', function(e) {
                if (!$(e.target).closest('.search-container').length) {
                    $('.quick-suggestions').fadeOut(200);
                }
            });

            // Suggestion tag clicks
            $('.suggestion-tag, .tag').on('click', function() {
                let searchTerm = $(this).text();
                searchInput.val(searchTerm);
                $('.quick-suggestions, .mobile-search-overlay').fadeOut(200);
                // Here you would typically trigger a search
                console.log('Searching for:', searchTerm);
            });

            // Header scroll effect
            let lastScrollTop = 0;
            $(window).scroll(function() {
                let scrollTop = $(this).scrollTop();
                let header = $('.modern-header');
                
                if (scrollTop > lastScrollTop && scrollTop > 100) {
                    // Scrolling down
                    header.addClass('header-hidden');
                } else {
                    // Scrolling up
                    header.removeClass('header-hidden');
                }
                
                // Add shadow on scroll
                if (scrollTop > 10) {
                    header.addClass('scrolled');
                } else {
                    header.removeClass('scrolled');
                }
                
                lastScrollTop = scrollTop;
            });

            // Notification click
            $('.notifications .action-btn').on('click', function() {
                // Toggle notification dropdown (you can implement this)
                console.log('Notifications clicked');
            });

            // Live status click
            $('.live-status .action-btn').on('click', function() {
                // Toggle live streams dropdown (you can implement this)
                console.log('Live status clicked');
            });

            // Hero Banner Slider Functionality
            let currentSlide = 0;
            const slides = $('.hero-slide');
            const indicators = $('.indicator');
            const totalSlides = slides.length;
            let slideInterval;
            let progressInterval;

            // Initialize slider
            function initHeroSlider() {
                if (totalSlides === 0) return;
                
                // Set background images
                slides.each(function() {
                    const bgImage = $(this).data('bg');
                    if (bgImage) {
                        $(this).css('background-image', `url(${bgImage})`);
                    }
                });

                startAutoSlide();
            }

            // Show specific slide
            function showSlide(index) {
                slides.removeClass('active');
                indicators.removeClass('active');
                
                slides.eq(index).addClass('active');
                indicators.eq(index).addClass('active');
                
                currentSlide = index;
                resetProgress();
            }

            // Next slide
            function nextSlide() {
                const next = (currentSlide + 1) % totalSlides;
                showSlide(next);
            }

            // Previous slide
            function prevSlide() {
                const prev = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(prev);
            }

            // Start auto slide
            function startAutoSlide() {
                slideInterval = setInterval(nextSlide, 5000);
                startProgress();
            }

            // Stop auto slide
            function stopAutoSlide() {
                clearInterval(slideInterval);
                clearInterval(progressInterval);
            }

            // Start progress bar
            function startProgress() {
                let progress = 0;
                $('.progress-bar').css('width', '0%');
                
                progressInterval = setInterval(() => {
                    progress += 2;
                    $('.progress-bar').css('width', progress + '%');
                    
                    if (progress >= 100) {
                        clearInterval(progressInterval);
                    }
                }, 100);
            }

            // Reset progress bar
            function resetProgress() {
                clearInterval(progressInterval);
                $('.progress-bar').css('width', '0%');
                startProgress();
            }

            // Navigation controls
            $('.hero-next').on('click', function() {
                stopAutoSlide();
                nextSlide();
                startAutoSlide();
            });

            $('.hero-prev').on('click', function() {
                stopAutoSlide();
                prevSlide();
                startAutoSlide();
            });

            // Indicator controls
            $('.indicator').on('click', function() {
                const slideIndex = $(this).data('slide');
                stopAutoSlide();
                showSlide(slideIndex);
                startAutoSlide();
            });

            // Pause on hover
            $('.hero-banner-slider').hover(
                function() {
                    stopAutoSlide();
                },
                function() {
                    startAutoSlide();
                }
            );

            // Initialize hero slider
            initHeroSlider();

            // Modern Category Cards Enhancement
            function initCategoryCards() {
                const categoryCards = document.querySelectorAll('.category-card');
                
                categoryCards.forEach(card => {
                    // Add ripple effect on click
                    card.addEventListener('click', function(e) {
                        const ripple = document.createElement('span');
                        const rect = this.getBoundingClientRect();
                        const size = Math.max(rect.width, rect.height);
                        const x = e.clientX - rect.left - size / 2;
                        const y = e.clientY - rect.top - size / 2;
                        
                        ripple.style.width = ripple.style.height = size + 'px';
                        ripple.style.left = x + 'px';
                        ripple.style.top = y + 'px';
                        ripple.classList.add('card-ripple');
                        
                        this.appendChild(ripple);
                        
                        setTimeout(() => {
                            ripple.remove();
                        }, 600);
                    });

                    // Add parallax effect on mouse move
                    card.addEventListener('mousemove', function(e) {
                        const rect = this.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;
                        
                        const centerX = rect.width / 2;
                        const centerY = rect.height / 2;
                        
                        const rotateX = (y - centerY) / 10;
                        const rotateY = (centerX - x) / 10;
                        
                        this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-8px) scale(1.02)`;
                    });

                    // Reset transform on mouse leave
                    card.addEventListener('mouseleave', function() {
                        this.style.transform = '';
                    });

                    // Add intersection observer for scroll animations
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.style.opacity = '1';
                                entry.target.style.transform = 'translateY(0)';
                            }
                        });
                    }, {
                        threshold: 0.1,
                        rootMargin: '0px 0px -50px 0px'
                    });

                    // Set initial state for animation
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(30px)';
                    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    
                    observer.observe(card);
                });

                // Add stagger animation delay
                categoryCards.forEach((card, index) => {
                    card.style.transitionDelay = `${index * 0.1}s`;
                });
            }

            // Initialize category cards
            initCategoryCards();

            // Modern Posts Section Functionality
            function initModernPosts() {
                const filterTabs = document.querySelectorAll('.filter-tab');
                const postCards = document.querySelectorAll('.post-card');
                const carousel = document.querySelector('.posts-carousel');
                const prevBtn = document.querySelector('.prev-btn');
                const nextBtn = document.querySelector('.next-btn');

                // Filter functionality
                filterTabs.forEach(tab => {
                    tab.addEventListener('click', function() {
                        // Remove active class from all tabs
                        filterTabs.forEach(t => t.classList.remove('active'));
                        // Add active class to clicked tab
                        this.classList.add('active');

                        const filter = this.getAttribute('data-filter');
                        
                        // Filter posts
                        postCards.forEach(card => {
                            if (filter === 'all' || card.getAttribute('data-category') === filter) {
                                card.style.display = 'block';
                                card.style.opacity = '0';
                                setTimeout(() => {
                                    card.style.opacity = '1';
                                }, 100);
                            } else {
                                card.style.opacity = '0';
                                setTimeout(() => {
                                    card.style.display = 'none';
                                }, 300);
                            }
                        });
                    });
                });

                // Carousel navigation
                if (carousel && prevBtn && nextBtn) {
                    const scrollAmount = 340; // Card width + gap

                    prevBtn.addEventListener('click', () => {
                        carousel.scrollBy({
                            left: -scrollAmount,
                            behavior: 'smooth'
                        });
                    });

                    nextBtn.addEventListener('click', () => {
                        carousel.scrollBy({
                            left: scrollAmount,
                            behavior: 'smooth'
                        });
                    });

                    // Update navigation buttons based on scroll position
                    function updateNavButtons() {
                        const scrollLeft = carousel.scrollLeft;
                        const maxScroll = carousel.scrollWidth - carousel.clientWidth;

                        prevBtn.style.opacity = scrollLeft > 0 ? '1' : '0.5';
                        nextBtn.style.opacity = scrollLeft < maxScroll ? '1' : '0.5';
                    }

                    carousel.addEventListener('scroll', updateNavButtons);
                    updateNavButtons(); // Initial state
                }

                // Post card interactions
                postCards.forEach(card => {
                    // Add ripple effect on click
                    card.addEventListener('click', function(e) {
                        if (e.target.closest('.action-btn')) return; // Don't trigger on action buttons

                        const ripple = document.createElement('span');
                        const rect = this.getBoundingClientRect();
                        const size = Math.max(rect.width, rect.height);
                        const x = e.clientX - rect.left - size / 2;
                        const y = e.clientY - rect.top - size / 2;
                        
                        ripple.style.width = ripple.style.height = size + 'px';
                        ripple.style.left = x + 'px';
                        ripple.style.top = y + 'px';
                        ripple.classList.add('post-ripple');
                        
                        this.appendChild(ripple);
                        
                        setTimeout(() => {
                            ripple.remove();
                        }, 600);
                    });

                    // Like button functionality
                    const likeBtn = card.querySelector('.like-btn');
                    if (likeBtn) {
                        likeBtn.addEventListener('click', function(e) {
                            e.stopPropagation();
                            this.classList.toggle('liked');
                            
                            const icon = this.querySelector('i');
                            const count = this.querySelector('span');
                            
                            if (this.classList.contains('liked')) {
                                icon.classList.remove('far');
                                icon.classList.add('fas');
                                this.style.background = 'rgba(255, 107, 107, 0.8)';
                                
                                // Animate count increase
                                let currentCount = parseInt(count.textContent.replace('K', '').replace('.', ''));
                                if (count.textContent.includes('K')) {
                                    currentCount = currentCount * 100 + 1;
                                    count.textContent = (currentCount / 100).toFixed(1) + 'K';
                                } else {
                                    count.textContent = (currentCount + 1).toString();
                                }
                            } else {
                                icon.classList.remove('fas');
                                icon.classList.add('far');
                                this.style.background = 'rgba(255, 255, 255, 0.2)';
                                
                                // Animate count decrease
                                let currentCount = parseInt(count.textContent.replace('K', '').replace('.', ''));
                                if (count.textContent.includes('K')) {
                                    currentCount = currentCount * 100 - 1;
                                    count.textContent = (currentCount / 100).toFixed(1) + 'K';
                                } else {
                                    count.textContent = (currentCount - 1).toString();
                                }
                            }
                        });
                    }

                    // Share button functionality
                    const shareBtn = card.querySelector('.share-btn');
                    if (shareBtn) {
                        shareBtn.addEventListener('click', function(e) {
                            e.stopPropagation();
                            
                            // Simple share functionality (you can enhance this)
                            if (navigator.share) {
                                navigator.share({
                                    title: card.querySelector('.post-title').textContent,
                                    text: card.querySelector('.post-excerpt').textContent,
                                    url: window.location.href
                                });
                            } else {
                                // Fallback: copy to clipboard
                                navigator.clipboard.writeText(window.location.href);
                                
                                // Show feedback
                                const originalText = this.innerHTML;
                                this.innerHTML = '<i class="fas fa-check"></i>';
                                setTimeout(() => {
                                    this.innerHTML = originalText;
                                }, 1000);
                            }
                        });
                    }
                });

                // Intersection Observer for scroll animations
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }
                    });
                }, {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                });

                // Set initial state and observe cards
                postCards.forEach((card, index) => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(30px)';
                    card.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
                    observer.observe(card);
                });
            }

            // Initialize modern posts
            initModernPosts();

            // Modern Creator Showcase Functionality
            function initCreatorShowcase() {
                const showcases = document.querySelectorAll('.modern-creator-showcase');
                
                showcases.forEach(showcase => {
                    const filterBtns = showcase.querySelectorAll('.filter-btn');
                    const viewBtns = showcase.querySelectorAll('.view-btn');
                    const creatorCards = showcase.querySelectorAll('.creator-card');
                    const carousel = showcase.querySelector('.creators-carousel');
                    const prevBtn = showcase.querySelector('.prev-btn');
                    const nextBtn = showcase.querySelector('.next-btn');

                    // Filter functionality
                    filterBtns.forEach(btn => {
                        btn.addEventListener('click', function() {
                            // Remove active class from all filter buttons
                            filterBtns.forEach(b => b.classList.remove('active'));
                            // Add active class to clicked button
                            this.classList.add('active');

                            const filter = this.getAttribute('data-filter');
                            
                            // Filter creator cards
                            creatorCards.forEach(card => {
                                if (filter === 'all' || card.classList.contains(filter)) {
                                    card.style.display = 'block';
                                    card.style.opacity = '0';
                                    setTimeout(() => {
                                        card.style.opacity = '1';
                                    }, 100);
                                } else {
                                    card.style.opacity = '0';
                                    setTimeout(() => {
                                        card.style.display = 'none';
                                    }, 300);
                                }
                            });
                        });
                    });

                    // View toggle functionality
                    viewBtns.forEach(btn => {
                        btn.addEventListener('click', function() {
                            // Remove active class from all view buttons
                            viewBtns.forEach(b => b.classList.remove('active'));
                            // Add active class to clicked button
                            this.classList.add('active');

                            const view = this.getAttribute('data-view');
                            
                            if (view === 'grid') {
                                carousel.style.display = 'flex';
                                // Add grid view logic here if needed
                            } else if (view === 'list') {
                                // Add list view logic here if needed
                                console.log('List view selected');
                            }
                        });
                    });

                    // Carousel navigation
                    if (carousel && prevBtn && nextBtn) {
                        const scrollAmount = 305; // Card width + gap

                        prevBtn.addEventListener('click', () => {
                            carousel.scrollBy({
                                left: -scrollAmount,
                                behavior: 'smooth'
                            });
                        });

                        nextBtn.addEventListener('click', () => {
                            carousel.scrollBy({
                                left: scrollAmount,
                                behavior: 'smooth'
                            });
                        });

                        // Update navigation buttons based on scroll position
                        function updateNavButtons() {
                            const scrollLeft = carousel.scrollLeft;
                            const maxScroll = carousel.scrollWidth - carousel.clientWidth;

                            prevBtn.style.opacity = scrollLeft > 0 ? '1' : '0.5';
                            nextBtn.style.opacity = scrollLeft < maxScroll ? '1' : '0.5';
                        }

                        carousel.addEventListener('scroll', updateNavButtons);
                        updateNavButtons(); // Initial state
                    }

                    // Creator card interactions
                    creatorCards.forEach(card => {
                        // Add ripple effect on click
                        card.addEventListener('click', function(e) {
                            if (e.target.closest('.action-btn')) return; // Don't trigger on action buttons

                            const ripple = document.createElement('span');
                            const rect = this.getBoundingClientRect();
                            const size = Math.max(rect.width, rect.height);
                            const x = e.clientX - rect.left - size / 2;
                            const y = e.clientY - rect.top - size / 2;
                            
                            ripple.style.width = ripple.style.height = size + 'px';
                            ripple.style.left = x + 'px';
                            ripple.style.top = y + 'px';
                            ripple.classList.add('creator-ripple');
                            
                            this.appendChild(ripple);
                            
                            setTimeout(() => {
                                ripple.remove();
                            }, 600);
                        });

                        // Follow button functionality
                        const followBtn = card.querySelector('.follow-btn');
                        if (followBtn) {
                            followBtn.addEventListener('click', function(e) {
                                e.stopPropagation();
                                
                                if (this.classList.contains('following')) {
                                    this.classList.remove('following');
                                    this.innerHTML = '<i class="fas fa-plus"></i> Follow';
                                    this.style.background = 'rgba(255, 255, 255, 0.25)';
                                } else {
                                    this.classList.add('following');
                                    this.innerHTML = '<i class="fas fa-check"></i> Following';
                                    this.style.background = 'rgba(34, 197, 94, 0.9)';
                                }
                            });
                        }

                        // Support button functionality
                        const supportBtn = card.querySelector('.support-btn');
                        if (supportBtn) {
                            supportBtn.addEventListener('click', function(e) {
                                e.stopPropagation();
                                
                                // Add heart animation
                                const icon = this.querySelector('i');
                                icon.classList.add('fas', 'fa-heart');
                                this.style.background = 'rgba(255, 107, 107, 0.9)';
                                
                                // Animate the button
                                this.style.transform = 'scale(1.2)';
                                setTimeout(() => {
                                    this.style.transform = 'scale(1)';
                                }, 200);
                                
                                // Show support modal or redirect (implement as needed)
                                console.log('Support clicked for creator');
                            });
                        }

                        // View button functionality
                        const viewBtn = card.querySelector('.view-btn');
                        if (viewBtn) {
                            viewBtn.addEventListener('click', function(e) {
                                e.stopPropagation();
                                
                                // Navigate to creator profile (implement as needed)
                                const creatorName = card.querySelector('.creator-name').textContent;
                                console.log('Viewing profile for:', creatorName);
                            });
                        }
                    });

                    // Intersection Observer for scroll animations
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.style.opacity = '1';
                                entry.target.style.transform = 'translateY(0)';
                            }
                        });
                    }, {
                        threshold: 0.1,
                        rootMargin: '0px 0px -50px 0px'
                    });

                    // Set initial state and observe cards
                    creatorCards.forEach((card, index) => {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(30px)';
                        card.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
                        observer.observe(card);
                    });
                });
            }

            // Initialize creator showcase
            initCreatorShowcase();


            let prevArrow = `<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>`;
            let nextArrow = `<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>`;

            $(".slide-wins").slick({
                speed: 1000,
                autoplay: true,
                autoplaySpeed: 0,
                cssEase: "linear",
                variableWidth: true,
                infinite: true,
                initialSlide: 1,
                arrows: false,
                buttons: false,
            });
            $(".live-sports-slider").slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow,
                nextArrow,
                responsive: [
                        
                        {
                        breakpoint: 960,
                        settings: {
                            slidesToShow: 2,
                        }
                        },
                        {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                        }
                        }
                        
                    ]
                                });
            $(".cart-items-slider").slick({
                infinite: true,
                slidesToShow: 8,
                slidesToScroll: 1,
                prevArrow,
                nextArrow,
                responsive: [
                        
                        {
                        breakpoint: 960,
                        settings: {
                            slidesToShow: 5,
                        }
                        },
                        {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                        }
                        }
                        
                    ]
            });
            $(".draw-slider").slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                prevArrow,
                nextArrow,
                responsive: [
                        
                        {
                        breakpoint: 960,
                        settings: {
                            slidesToShow: 3,
                        }
                        },
                        {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        }
                        }
                        
                    ]
            });
        </script>
    </body>
</html>
