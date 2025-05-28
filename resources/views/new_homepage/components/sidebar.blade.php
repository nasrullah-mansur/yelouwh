<div class="sidebar-area modern-sidebar" id="sidebar-menu">
    <div class="sidebar-header">
        <h3 class="sidebar-title">
            <i class="fas fa-compass"></i>
            {{ __('general.explore') }}
        </h3>
    </div>
    
    <div class="sidebar-section">
        <div class="section-label">{{ __('general.popular') }}</div>
        <ul class="nav-list">
            <li class="nav-item featured">
                <a href="{{ url('/creators') }}" class="nav-link">
                    <div class="nav-icon trending">
                        <i class="fas fa-heart"></i>
                    </div>
                    <span class="nav-text">{{ __('general.popular') }}</span>
                    <div class="nav-badge">{{ __('general.hot') }}</div>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/creators/featured') }}" class="nav-link">
                    <div class="nav-icon star">
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="nav-text">{{ __('general.featured') }} {{ __('general.creators') }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/creators/more-active') }}" class="nav-link">
                    <div class="nav-icon fire">
                        <i class="fas fa-fire"></i>
                    </div>
                    <span class="nav-text">{{ __('general.more_active') }}</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/creators/new') }}" class="nav-link">
                    <div class="nav-icon new">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <span class="nav-text">{{ __('general.new') }} {{ __('general.creators') }}</span>
                    <div class="nav-badge new">{{ __('general.new') }}</div>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/creators/free') }}" class="nav-link">
                    <div class="nav-icon gift">
                        <i class="fas fa-gift"></i>
                    </div>
                    <span class="nav-text">{{ __('general.free_subscription') }}</span>
                    <div class="nav-badge free">{{ __('general.free') }}</div>
                </a>                 
            </li>
        </ul>
    </div>

    <div class="sidebar-section">
        <div class="section-label">{{ __('general.categories') }}</div>
        <ul class="nav-list">
            <li class="nav-item">
                <a href="{{ url('/category/animation') }}" class="nav-link">
                    <div class="nav-icon animation">
                        <i class="fas fa-magic"></i>
                    </div>
                    <span class="nav-text">{{ __('categories.animation') }}</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/artist') }}" class="nav-link">
                    <div class="nav-icon artist">
                        <i class="fas fa-palette"></i>
                    </div>
                    <span class="nav-text">{{ __('categories.artist') }}</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/designer') }}" class="nav-link">
                    <div class="nav-icon designer">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <span class="nav-text">{{ __('categories.designer') }}</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/developer') }}" class="nav-link">
                    <div class="nav-icon developer">
                        <i class="fas fa-code"></i>
                    </div>
                    <span class="nav-text">{{ __('categories.developer') }}</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/drawing-and-painting') }}" class="nav-link">
                    <div class="nav-icon drawing">
                        <i class="fas fa-pen-fancy"></i>
                    </div>
                    <span class="nav-text">{{ __('categories.drawing_painting') }}</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/photography') }}" class="nav-link">
                    <div class="nav-icon photography">
                        <i class="fas fa-camera"></i>
                    </div>
                    <span class="nav-text">{{ __('categories.photography') }}</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/podcasts') }}" class="nav-link">
                    <div class="nav-icon podcast">
                        <i class="fas fa-microphone"></i>
                    </div>
                    <span class="nav-text">{{ __('categories.podcast') }}</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/video-and-film') }}" class="nav-link">
                    <div class="nav-icon video">
                        <i class="fas fa-video"></i>
                    </div>
                    <span class="nav-text">{{ __('categories.video_film') }}</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/writing') }}" class="nav-link">
                    <div class="nav-icon writing">
                        <i class="fas fa-pen-nib"></i>
                    </div>
                    <span class="nav-text">{{ __('categories.writing') }}</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/others') }}" class="nav-link">
                    <div class="nav-icon others">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <span class="nav-text">{{ __('categories.others') }}</span>
                </a>                 
            </li>
        </ul>
    </div>

    <div class="sidebar-section">
        <div class="section-label">{{ __('general.tools') }}</div>
        <ul class="nav-list">
            <li class="nav-item special">
                <a href="{{ url('/simulator') }}" class="nav-link">
                    <div class="nav-icon simulator">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <span class="nav-text">{{ __('general.simulator') }}</span>
                    <div class="nav-badge premium">{{ __('general.pro') }}</div>
                </a>                 
            </li>
        </ul>
    </div>

    <div class="sidebar-footer">
        <div class="upgrade-card">
            <div class="upgrade-icon">
                <i class="fas fa-crown"></i>
            </div>
            <h4>{{ __('general.go_premium') }}</h4>
            <p>{{ __('general.unlock_exclusive_features') }}</p>
            <button class="upgrade-btn">{{ __('general.upgrade_now') }}</button>
        </div>
    </div>
</div> 