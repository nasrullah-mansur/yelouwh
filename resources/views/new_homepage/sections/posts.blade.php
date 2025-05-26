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
                <a href="{{ url('/explore') }}" class="view-all-btn">
                    <span>View All Posts</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <!-- Carousel Navigation -->
                <div class="carousel-navigation">
                    <button class="nav-btn prev-btn" data-carousel="recent-posts">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="nav-btn next-btn" data-carousel="recent-posts">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Posts Carousel -->
        <div class="posts-carousel-container">
            <div class="posts-carousel" id="recent-posts-carousel">
                @if(isset($recentPosts) && $recentPosts->count() > 0)
                    @foreach($recentPosts as $post)
                        <!-- Compact Post Item -->
                        <div class="compact-post-card {{ $post->locked == 'yes' ? 'premium' : 'public' }}" data-category="{{ $post->locked == 'yes' ? 'premium' : 'public' }}">
                            <a href="{{ url($post->creator->username.'/post/'.$post->id) }}" class="post-link">
                                <div class="post-image-container">
                                    <div class="post-image {{ $post->locked == 'yes' ? 'blurred' : '' }}">
                                        @if($post->media->isNotEmpty() && $post->media->first())
                                            @php $media = $post->media->first(); @endphp
                                            @if($media->type == 'image' && $media->image)
                                                <img src="{{ Helper::getFile(config('path.images').$media->image) }}" alt="{{ $post->title ?: 'Post Image' }}" />
                                            @elseif($media->type == 'video' && $media->video_poster)
                                                <img src="{{ Helper::getFile(config('path.videos').$media->video_poster) }}" alt="{{ $post->title ?: 'Video Thumbnail' }}" />
                                            @elseif($media->type == 'video' && $media->video_embed)
                                                @php
                                                    $videoId = '';
                                                    if (strpos($media->video_embed, 'youtube.com') !== false || strpos($media->video_embed, 'youtu.be') !== false) {
                                                        preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $media->video_embed, $matches);
                                                        $videoId = $matches[1] ?? '';
                                                        $thumbnailUrl = "https://img.youtube.com/vi/{$videoId}/maxresdefault.jpg";
                                                    } elseif (strpos($media->video_embed, 'vimeo.com') !== false) {
                                                        preg_match('/vimeo\.com\/(\d+)/', $media->video_embed, $matches);
                                                        $videoId = $matches[1] ?? '';
                                                        $thumbnailUrl = "https://vumbnail.com/{$videoId}.jpg";
                                                    } else {
                                                        $thumbnailUrl = asset('public/new_home_page/default-video.jpg');
                                                    }
                                                @endphp
                                                <img src="{{ $thumbnailUrl }}" alt="{{ $post->title ?: 'Video Thumbnail' }}" />
                                            @else
                                                @php
                                                    $avatarPath = config('path.avatar').$post->creator->avatar;
                                                    // Check both nested and regular directory structure
                                                    $nestedPath = public_path('public/' . $avatarPath);
                                                    $regularPath = public_path($avatarPath);
                                                    $avatarExists = file_exists($nestedPath) || file_exists($regularPath);
                                                    $avatarUrl = $avatarExists ? Helper::getFile($avatarPath) : asset('public/img/user.png');
                                                @endphp
                                                <img src="{{ $avatarUrl }}" alt="{{ $post->creator->hide_name == 'yes' ? $post->creator->username : $post->creator->name }}" />
                                            @endif
                                        @else
                                            @php
                                                $avatarPath = config('path.avatar').$post->creator->avatar;
                                                // Check both nested and regular directory structure
                                                $nestedPath = public_path('public/' . $avatarPath);
                                                $regularPath = public_path($avatarPath);
                                                $avatarExists = file_exists($nestedPath) || file_exists($regularPath);
                                                $avatarUrl = $avatarExists ? Helper::getFile($avatarPath) : asset('public/img/user.png');
                                            @endphp
                                            <img src="{{ $avatarUrl }}" alt="{{ $post->creator->hide_name == 'yes' ? $post->creator->username : $post->creator->name }}" />
                                        @endif
                                    </div>
                                    
                                    <!-- Media Type Icon (only for non-premium posts) -->
                                    @if($post->media->isNotEmpty() && $post->locked != 'yes')
                                        @php $mediaType = $post->media->first()->type; @endphp
                                        <div class="media-type-icon">
                                            @if($mediaType == 'image')
                                                <i class="fas fa-image"></i>
                                            @elseif($mediaType == 'video')
                                                <i class="fas fa-play"></i>
                                            @elseif($mediaType == 'music')
                                                <i class="fas fa-music"></i>
                                            @else
                                                <i class="fas fa-file"></i>
                                            @endif
                                        </div>
                                    @endif
                                    
                                    <!-- Premium Lock Icon (centered) -->
                                    @if($post->locked == 'yes')
                                        <div class="premium-lock-overlay">
                                            <div class="lock-icon">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                
                                <!-- Post Title at Bottom -->
                                <div class="post-content">
                                    <div class="post-title">{{ Str::limit($post->title ?: strip_tags($post->description), 30) }}</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <!-- Fallback when no posts are available -->
                    <div class="no-posts-message">
                        <div class="message-content">
                            <i class="fas fa-newspaper"></i>
                            <h3>No Recent Posts</h3>
                            <p>Check back soon for amazing content from our creators!</p>
                            <a href="{{ url('/creators') }}" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                                Explore Creators
                            </a>
                        </div>
                    </div>
                @endif
            </div>


        </div>
    </div>
</div> 