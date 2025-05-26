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
                <a href="{{ url('/creators/new') }}" class="view-all-btn">
                    <span>View All</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <!-- Carousel Navigation -->
                <div class="carousel-navigation">
                    <button class="nav-btn prev-btn" data-carousel="recently-added">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="nav-btn next-btn" data-carousel="recently-added">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="creators-carousel-container">
            <div class="creators-carousel" id="recently-added-carousel">
                @if(isset($recentlyAddedCreators) && $recentlyAddedCreators->count() > 0)
                    @foreach($recentlyAddedCreators as $creator)
                        <!-- Recently Added Creator Card -->
                        <div class="creator-card recently-added">
                            <div class="creator-image-container">
                                @php
                                    $avatarPath = config('path.avatar').$creator->avatar;
                                    // Check both nested and regular directory structure
                                    $nestedPath = public_path('public/' . $avatarPath);
                                    $regularPath = public_path($avatarPath);
                                    $avatarExists = file_exists($nestedPath) || file_exists($regularPath);
                                    $avatarUrl = $avatarExists ? Helper::getFile($avatarPath) : asset('public/img/user.png');
                                @endphp
                                <img src="{{ $avatarUrl }}" alt="{{ $creator->hide_name == 'yes' ? $creator->username : $creator->name }}" class="creator-image" />
                                
                                <!-- Hover Overlay -->
                                <div class="creator-hover-overlay">
                                    <div class="overlay-content">
                                        <div class="creator-info-hover">
                                            <h4 class="creator-name">{{ $creator->hide_name == 'yes' ? $creator->username : $creator->name }}</h4>
                                            <p class="creator-category">{{ $creator->profession ?: '@' . $creator->username }}</p>
                                        </div>
                                        
                                        <div class="quick-actions">
                                            <button class="quick-action-btn view-btn" onclick="window.location.href='{{ url($creator->username) }}'">
                                                <i class="fas fa-eye"></i>
                                                <span>View Profile</span>
                                            </button>
                                            @if($creator->free_subscription == 'no')
                                                <button class="quick-action-btn support-btn premium">
                                                    <i class="fas fa-heart"></i>
                                                    <span>Support</span>
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Creator Badge -->
                                <div class="creator-badge new">
                                    @if($creator->verified_id == 'yes')
                                        <i class="fas fa-check-circle"></i>
                                        Verified
                                    @elseif($creator->featured == 'yes')
                                        <i class="fas fa-star"></i>
                                        Featured
                                    @else
                                        <i class="fas fa-sparkles"></i>
                                        New
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Fallback when no recently added creators are available -->
                    <div class="no-creators-message">
                        <div class="message-content">
                            <i class="fas fa-clock"></i>
                            <h3>No Recently Added Creators</h3>
                            <p>Check back soon for new creators joining our platform!</p>
                            <a href="{{ url('/creators') }}" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                                Explore All Creators
                            </a>
                        </div>
                    </div>
                @endif
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
                <a href="{{ url('/creators/featured') }}" class="view-all-btn">
                    <span>View All</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <!-- Carousel Navigation -->
                <div class="carousel-navigation">
                    <button class="nav-btn prev-btn" data-carousel="featured">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="nav-btn next-btn" data-carousel="featured">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="creators-carousel-container">
            <div class="creators-carousel" id="featured-carousel">
                @if(isset($featuredCreators) && $featuredCreators->count() > 0)
                    @foreach($featuredCreators as $creator)
                        <!-- Featured Creator Card -->
                        <div class="creator-card featured">
                            <div class="creator-image-container">
                                @php
                                    $avatarPath = config('path.avatar').$creator->avatar;
                                    // Check both nested and regular directory structure
                                    $nestedPath = public_path('public/' . $avatarPath);
                                    $regularPath = public_path($avatarPath);
                                    $avatarExists = file_exists($nestedPath) || file_exists($regularPath);
                                    $avatarUrl = $avatarExists ? Helper::getFile($avatarPath) : asset('public/img/user.png');
                                @endphp
                                <img src="{{ $avatarUrl }}" alt="{{ $creator->hide_name == 'yes' ? $creator->username : $creator->name }}" class="creator-image" />
                                
                                <!-- Hover Overlay -->
                                <div class="creator-hover-overlay">
                                    <div class="overlay-content">
                                        <div class="creator-info-hover">
                                            <h4 class="creator-name">{{ $creator->hide_name == 'yes' ? $creator->username : $creator->name }}</h4>
                                            <p class="creator-category">{{ $creator->profession ?: '@' . $creator->username }}</p>
                                        </div>
                                        
                                        <div class="quick-actions">
                                            <button class="quick-action-btn view-btn" onclick="window.location.href='{{ url($creator->username) }}'">
                                                <i class="fas fa-eye"></i>
                                                <span>View Profile</span>
                                            </button>
                                            @if($creator->free_subscription == 'no')
                                                <button class="quick-action-btn support-btn premium">
                                                    <i class="fas fa-heart"></i>
                                                    <span>Support</span>
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Fallback when no featured creators are available -->
                    <div class="no-creators-message">
                        <div class="message-content">
                            <i class="fas fa-users"></i>
                            <h3>No Featured Creators Available</h3>
                            <p>Check back soon for amazing featured creators!</p>
                            <a href="{{ url('/creators') }}" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                                Explore All Creators
                            </a>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div> 