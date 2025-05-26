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