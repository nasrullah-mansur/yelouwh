<div class="sidebar-area modern-sidebar" id="sidebar-menu">
    <div class="sidebar-header">
        <h3 class="sidebar-title">
            <i class="fas fa-compass"></i>
            Explore
        </h3>
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
                <a href="{{ url('/creators/free') }}" class="nav-link">
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
                <a href="{{ url('/category/animation') }}" class="nav-link">
                    <div class="nav-icon animation">
                        <i class="fas fa-magic"></i>
                    </div>
                    <span class="nav-text">Animation</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/artist') }}" class="nav-link">
                    <div class="nav-icon artist">
                        <i class="fas fa-palette"></i>
                    </div>
                    <span class="nav-text">Artist</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/designer') }}" class="nav-link">
                    <div class="nav-icon designer">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <span class="nav-text">Designer</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/developer') }}" class="nav-link">
                    <div class="nav-icon developer">
                        <i class="fas fa-code"></i>
                    </div>
                    <span class="nav-text">Developer</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/drawing-and-painting') }}" class="nav-link">
                    <div class="nav-icon drawing">
                        <i class="fas fa-pen-fancy"></i>
                    </div>
                    <span class="nav-text">Drawing & Painting</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/photography') }}" class="nav-link">
                    <div class="nav-icon photography">
                        <i class="fas fa-camera"></i>
                    </div>
                    <span class="nav-text">Photography</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/podcasts') }}" class="nav-link">
                    <div class="nav-icon podcast">
                        <i class="fas fa-microphone"></i>
                    </div>
                    <span class="nav-text">Podcast</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/video-and-film') }}" class="nav-link">
                    <div class="nav-icon video">
                        <i class="fas fa-video"></i>
                    </div>
                    <span class="nav-text">Video & Film</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/writing') }}" class="nav-link">
                    <div class="nav-icon writing">
                        <i class="fas fa-pen-nib"></i>
                    </div>
                    <span class="nav-text">Writing</span>
                </a>                 
            </li>
            <li class="nav-item">
                <a href="{{ url('/category/others') }}" class="nav-link">
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
                <a href="{{ url('/simulator') }}" class="nav-link">
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