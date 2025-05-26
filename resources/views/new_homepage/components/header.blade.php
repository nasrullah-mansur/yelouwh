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
                    <img src="{{ asset('public/new_home_page/logo.png') }}" alt="Yelouwh Logo" />
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