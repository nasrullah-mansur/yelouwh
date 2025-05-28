{{-- Modern Recent Posts Section --}}
<div class="modern-posts-section" style="padding: 0;">
    <div class="container-fluid">
        <!-- Section Header -->
        <div class="posts-header">
            <div class="header-content">
                <div class="header-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <div class="header-text">
                    <h2 class="section-title">{{ __('sections.recent_posts') }}</h2>
                    <p class="section-subtitle">{{ __('sections.latest_updates') }}</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="{{ url('/explore') }}" class="view-all-btn">
                    <span>{{ __('sections.view_all_posts') }}</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <!-- Carousel Navigation -->
                <div class="carousel-navigation">
                    <button class="nav-btn prev-btn" style="border:2px solid gray; border-radius: 50%; color: gray; background-color: white;" data-carousel="recent-posts">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="nav-btn next-btn" style="border:2px solid gray; border-radius: 50%; color: gray; background-color: white;" data-carousel="recent-posts" >
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
                                            @if($media->type == 'image' && !empty($media->image))
                                                <img src="{{ Helper::getFile(config('path.images').$media->image) }}" alt="{{ $post->title ?: 'Post Image' }}" />
                                            @elseif($media->type == 'video' && !empty($media->video_poster))
                                                <img src="{{ Helper::getFile(config('path.videos').$media->video_poster) }}" alt="{{ $post->title ?: 'Video Thumbnail' }}" />
                                            @elseif($media->type == 'video' && !empty($media->video_embed))
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
                                            @elseif($media->type == 'video' && !empty($media->video))
                                                <!-- For uploaded video files, try to show first frame or use default -->
                                                @php
                                                    $videoPath = Helper::getFile(config('path.videos').$media->video);
                                                    // For now, show default video thumbnail - could be enhanced to show video first frame
                                                @endphp
                                                <img src="{{ asset('public/new_home_page/default-video.jpg') }}" alt="{{ $post->title ?: 'Video Thumbnail' }}" />
                                            @elseif($media->type == 'music' && !empty($media->music))
                                                <!-- For music files, show default music thumbnail -->
                                                <img src="{{ asset('public/new_home_page/default-music.jpg') }}" alt="{{ $post->title ?: 'Music Track' }}" />
                                            @elseif($media->type == 'file' && !empty($media->file))
                                                <!-- For file uploads, show default file thumbnail -->
                                                <img src="{{ asset('public/new_home_page/default-post.jpg') }}" alt="{{ $post->title ?: 'File Content' }}" />
                                            @else
                                                <!-- Fallback: show post description as text overlay on default background -->
                                                @if(!empty($post->description))
                                                    <div class="text-post-preview">
                                                        <div class="text-content">
                                                            {{ Str::limit(strip_tags($post->description), 100) }}
                                                        </div>
                                                    </div>
                                                @else
                                                    <img src="{{ asset('public/new_home_page/default-post.jpg') }}" alt="{{ $post->title ?: 'Post Content' }}" />
                                                @endif
                                            @endif
                                        @else
                                            <!-- No media available, show post description as text or default image -->
                                            @if(!empty($post->description))
                                                <div class="text-post-preview">
                                                    <div class="text-content">
                                                        {{ Str::limit(strip_tags($post->description), 100) }}
                                                    </div>
                                                </div>
                                            @else
                                                <img src="{{ asset('public/new_home_page/default-post.jpg') }}" alt="{{ $post->title ?: 'Post Content' }}" />
                                            @endif
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
                            <h3>{{ __('sections.no_recent_posts') }}</h3>
                            <p>{{ __('sections.check_back_soon') }}</p>
                            <a href="{{ url('/creators') }}" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                                {{ __('sections.explore_creators') }}
                            </a>
                        </div>
                    </div>
                @endif
            </div>


        </div>
    </div>
</div> 