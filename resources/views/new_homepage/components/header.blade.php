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
                    <input type="text" class="search-input" placeholder="{{ __('general.search') }}..." />
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
                @if ($languages->count() > 1)
                <div class="action-item language">
                    <button class="action-btn language-toggle" id="language-toggle">
                        <i class="fas fa-globe"></i>
                        <span class="current-lang">
                            @foreach ($languages as $language)
                                @if ($language->abbreviation == config('app.locale'))
                                    {{ strtoupper($language->abbreviation) }}
                                @endif
                            @endforeach
                        </span>
                        <i class="fas fa-chevron-down dropdown-arrow"></i>
                    </button>
                    <div class="language-dropdown" id="language-dropdown">
                        @foreach ($languages as $language)
                        <div class="language-option @if ($language->abbreviation == config('app.locale')) active @endif" data-lang="{{ $language->abbreviation }}">
                            <span class="flag">
                                @if ($language->abbreviation == 'en')
                                    🇺🇸
                                @elseif ($language->abbreviation == 'es')
                                    🇪🇸
                                @elseif ($language->abbreviation == 'fr')
                                    🇫🇷
                                @elseif ($language->abbreviation == 'de')
                                    🇩🇪
                                @elseif ($language->abbreviation == 'it')
                                    🇮🇹
                                @elseif ($language->abbreviation == 'pt')
                                    🇵🇹
                                @elseif ($language->abbreviation == 'ru')
                                    🇷🇺
                                @elseif ($language->abbreviation == 'ja')
                                    🇯🇵
                                @elseif ($language->abbreviation == 'ko')
                                    🇰🇷
                                @elseif ($language->abbreviation == 'zh')
                                    🇨🇳
                                @elseif ($language->abbreviation == 'ar')
                                    🇸🇦
                                @elseif ($language->abbreviation == 'hi')
                                    🇮🇳
                                @elseif ($language->abbreviation == 'nl')
                                    🇳🇱
                                @elseif ($language->abbreviation == 'sv')
                                    🇸🇪
                                @elseif ($language->abbreviation == 'da')
                                    🇩🇰
                                @elseif ($language->abbreviation == 'no')
                                    🇳🇴
                                @elseif ($language->abbreviation == 'fi')
                                    🇫🇮
                                @elseif ($language->abbreviation == 'pl')
                                    🇵🇱
                                @elseif ($language->abbreviation == 'tr')
                                    🇹🇷
                                @elseif ($language->abbreviation == 'el')
                                    🇬🇷
                                @elseif ($language->abbreviation == 'he')
                                    🇮🇱
                                @elseif ($language->abbreviation == 'th')
                                    🇹🇭
                                @elseif ($language->abbreviation == 'vi')
                                    🇻🇳
                                @elseif ($language->abbreviation == 'id')
                                    🇮🇩
                                @elseif ($language->abbreviation == 'ms')
                                    🇲🇾
                                @elseif ($language->abbreviation == 'tl')
                                    🇵🇭
                                @elseif ($language->abbreviation == 'uk')
                                    🇺🇦
                                @elseif ($language->abbreviation == 'cs')
                                    🇨🇿
                                @elseif ($language->abbreviation == 'sk')
                                    🇸🇰
                                @elseif ($language->abbreviation == 'hu')
                                    🇭🇺
                                @elseif ($language->abbreviation == 'ro')
                                    🇷🇴
                                @elseif ($language->abbreviation == 'bg')
                                    🇧🇬
                                @elseif ($language->abbreviation == 'hr')
                                    🇭🇷
                                @elseif ($language->abbreviation == 'sr')
                                    🇷🇸
                                @elseif ($language->abbreviation == 'sl')
                                    🇸🇮
                                @elseif ($language->abbreviation == 'et')
                                    🇪🇪
                                @elseif ($language->abbreviation == 'lv')
                                    🇱🇻
                                @elseif ($language->abbreviation == 'lt')
                                    🇱🇹
                                @else
                                    🌐
                                @endif
                            </span>
                            <span class="lang-name">{{ $language->name }}</span>
                            <span class="lang-code">{{ strtoupper($language->abbreviation) }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Auth Buttons -->
                <div class="auth-buttons">
                    <a href="{{ url('/login') }}" class="btn-signin">
                        <i class="fas fa-sign-in-alt"></i>
                        {{ __('auth.login') }}
                    </a>
                    <a href="{{ url('/register') }}" class="btn-signup">
                        <i class="fas fa-rocket"></i>
                        {{ __('auth.sign_up') }}
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
                <h3>{{ __('general.search') }}</h3>
                <button class="close-search">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="mobile-search-input">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="{{ __('general.search') }}..." />
            </div>
            <div class="mobile-search-suggestions">
                <h4>{{ __('general.popular') }} {{ __('general.search') }}</h4>
                <div class="suggestion-tags">
                    <span class="tag">{{ __('general.popular') }} {{ __('general.creators') }}</span>
                    <span class="tag">Animation</span>
                    <span class="tag">Photography</span>
                    <span class="tag">Design</span>
                    <span class="tag">Video & Film</span>
                </div>
            </div>
        </div>
    </div>
</header> 