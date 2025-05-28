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
        // Add CSS animations for creator cards
        const style = document.createElement('style');
        style.textContent = `
            @keyframes floatHeart {
                0% {
                    transform: translate(-50%, -50%) scale(0);
                    opacity: 1;
                }
                50% {
                    transform: translate(-50%, -70px) scale(1.2);
                    opacity: 0.8;
                }
                100% {
                    transform: translate(-50%, -100px) scale(0.8);
                    opacity: 0;
                }
            }
            
            .creator-hover-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: linear-gradient(135deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.6) 100%);
                opacity: 0;
                visibility: hidden;
                transform: translateY(10px);
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 12px;
                backdrop-filter: blur(10px);
            }
            
            .creator-image {
                transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                border-radius: 12px;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            
            .creator-image-container {
                position: relative;
                overflow: hidden;
                border-radius: 12px;
                height: 260px;
                width: 100%;
            }
            
            .overlay-content {
                text-align: center;
                color: white;
                padding: 16px;
                transform: translateY(0);
                transition: transform 0.3s ease;
                display: flex;
                flex-direction: column;
                justify-content: center;
                height: 100%;
                gap: 12px;
            }
            
            .creator-info-hover {
                margin-bottom: 0;
            }
            
            .creator-avatar {
                font-size: 40px;
                margin-bottom: 10px;
                position: relative;
                display: inline-block;
            }
            
            .creator-avatar.premium {
                color: #ffd700;
            }
            
            .premium-badge {
                position: absolute;
                top: -5px;
                right: -5px;
                background: linear-gradient(45deg, #ffd700, #ffed4e);
                border-radius: 50%;
                width: 20px;
                height: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 10px;
                color: #000;
            }
            
            .creator-name {
                font-size: 16px;
                font-weight: 600;
                margin: 4px 0 2px 0;
                color: #fff;
                line-height: 1.2;
            }
            
            .creator-category {
                font-size: 12px;
                color: #ccc;
                margin: 0;
                line-height: 1.2;
            }
            

            
            .quick-actions {
                display: flex;
                gap: 8px;
                justify-content: center;
                flex-wrap: wrap;
                margin-top: 0;
            }
            
            .quick-action-btn {
                background: rgba(255, 255, 255, 0.2);
                border: none;
                border-radius: 20px;
                padding: 8px 16px;
                color: #fff;
                font-size: 11px;
                font-weight: 500;
                cursor: pointer;
                transition: all 0.2s ease;
                display: flex;
                align-items: center;
                gap: 6px;
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.3);
            }
            
            .quick-action-btn:hover {
                background: rgba(255, 255, 255, 0.3);
                transform: translateY(-2px);
            }
            
            .quick-action-btn.premium {
                background: linear-gradient(45deg, #ffd700, #ffed4e);
                color: #000;
            }
            
            .quick-action-btn.premium:hover {
                background: linear-gradient(45deg, #ffed4e, #ffd700);
            }
            

            
            .creator-badge {
                position: absolute;
                top: 12px;
                right: 12px;
                background: linear-gradient(45deg, #4ade80, #22c55e);
                color: white;
                padding: 4px 8px;
                border-radius: 12px;
                font-size: 10px;
                font-weight: 600;
                display: flex;
                align-items: center;
                gap: 4px;
                z-index: 10;
            }
            
            .creator-badge.featured {
                background: linear-gradient(45deg, #ffd700, #ffed4e);
                color: #000;
            }
            
            .creator-badge.verified {
                background: linear-gradient(45deg, #3b82f6, #1d4ed8);
                color: #fff;
            }
            
            .creator-badge.premium {
                background: linear-gradient(45deg, #8b5cf6, #a855f7);
            }
            
            .creator-badge.trending {
                background: linear-gradient(45deg, #f59e0b, #d97706);
            }
            
            .creator-badge.live {
                background: linear-gradient(45deg, #ef4444, #dc2626);
                animation: pulse 2s infinite;
            }
            
            .creator-card {
                background: transparent;
                border-radius: 12px;
                padding: 0;
                margin: 0 4px;
                transition: all 0.3s ease;
                overflow: hidden;
                border: none;
                width: calc(12.5% - 8px);
                flex: 0 0 calc(12.5% - 8px);
            }
            
            .creators-carousel {
                display: flex !important;
                gap: 0;
                overflow-x: auto;
                scroll-behavior: smooth;
                padding: 0 10px;
            }
            
            .creators-carousel::-webkit-scrollbar {
                height: 6px;
            }
            
            .creators-carousel::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.1);
                border-radius: 3px;
            }
            
            .creators-carousel::-webkit-scrollbar-thumb {
                background: rgba(255, 255, 255, 0.3);
                border-radius: 3px;
            }
            
            .creators-carousel::-webkit-scrollbar-thumb:hover {
                background: rgba(255, 255, 255, 0.5);
            }
            
            /* Responsive Design */
            @media (max-width: 1400px) {
                .creator-card {
                    width: calc(14.28% - 8px);
                    flex: 0 0 calc(14.28% - 8px);
                }
            }
            
            @media (max-width: 1200px) {
                .creator-card {
                    width: calc(16.66% - 8px);
                    flex: 0 0 calc(16.66% - 8px);
                }
            }
            
            @media (max-width: 992px) {
                .creator-card {
                    width: calc(20% - 8px);
                    flex: 0 0 calc(20% - 8px);
                }
            }
            
            @media (max-width: 768px) {
                .creator-card {
                    width: calc(25% - 8px);
                    flex: 0 0 calc(25% - 8px);
                }
                
                .creator-image-container {
                    height: 220px;
                }
            }
            
            @media (max-width: 576px) {
                .creator-card {
                    width: calc(33.33% - 8px);
                    flex: 0 0 calc(33.33% - 8px);
                }
                
                .creator-image-container {
                    height: 200px;
                }
                
                .overlay-content {
                    padding: 12px;
                    gap: 10px;
                }
                
                .creator-name {
                    font-size: 14px;
                }
                
                .creator-category {
                    font-size: 11px;
                }
                
                .quick-actions {
                    flex-direction: column;
                    gap: 6px;
                }
                
                .quick-action-btn {
                    padding: 6px 12px;
                    font-size: 10px;
                }
            }
            
            .creator-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            }
            
            @keyframes pulse {
                0%, 100% { opacity: 1; }
                50% { opacity: 0.7; }
            }
            
            .no-creators-message {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 260px;
                width: 100%;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
                border-radius: 12px;
                border: 2px dashed rgba(255, 255, 255, 0.3);
                backdrop-filter: blur(10px);
            }
            
            .message-content {
                text-align: center;
                color: #fff;
                padding: 40px 20px;
            }
            
            .message-content i {
                font-size: 48px;
                color: #4ade80;
                margin-bottom: 20px;
                opacity: 0.8;
            }
            
            .message-content h3 {
                font-size: 24px;
                font-weight: 600;
                margin-bottom: 10px;
                color: #fff;
            }
            
            .message-content p {
                font-size: 16px;
                color: #ccc;
                margin-bottom: 25px;
                line-height: 1.5;
            }
            
            .message-content .btn {
                background: linear-gradient(45deg, #4ade80, #22c55e);
                color: #fff;
                border: none;
                padding: 12px 24px;
                border-radius: 25px;
                font-weight: 600;
                text-decoration: none;
                display: inline-flex;
                align-items: center;
                gap: 8px;
                transition: all 0.3s ease;
            }
            
            .message-content .btn:hover {
                background: linear-gradient(45deg, #22c55e, #16a34a);
                transform: translateY(-2px);
                box-shadow: 0 10px 25px rgba(34, 197, 94, 0.3);
                color: #fff;
                text-decoration: none;
            }
            
            /* Compact Posts Styles - 12 cards in a row */
            .compact-post-card {
                background: rgba(255, 255, 255, 0.1);
                border-radius: 8px;
                overflow: hidden;
                transition: all 0.3s ease;
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                margin: 0 3px;
            }
            
            .compact-post-card:hover {
                border-color: rgba(255, 255, 255, 0.4);
            }
            
            .placeholder-card {
                opacity: 0.5;
                cursor: default;
                pointer-events: none;
            }
            
            .placeholder-card .post-image {
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
            }
            
            .placeholder-content {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100%;
                color: rgba(255, 255, 255, 0.3);
                font-size: 20px;
            }
            
            .placeholder-card .post-title {
                color: rgba(255, 255, 255, 0.4);
                font-style: italic;
            }
            
            .placeholder-card .likes {
                color: rgba(255, 255, 255, 0.2);
            }
            
            .post-link {
                text-decoration: none;
                color: inherit;
                display: block;
            }
            
            .post-link:hover {
                text-decoration: none;
                color: inherit;
            }
            
            .post-image {
                position: relative;
                height: 80px;
                overflow: hidden;
            }
            
            .post-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.3s ease;
            }
            
            .media-type-icon {
                position: absolute;
                top: 4px;
                left: 4px;
                background: rgba(0, 0, 0, 0.7);
                border-radius: 50%;
                width: 20px;
                height: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                font-size: 8px;
            }
            
            .post-badge {
                position: absolute;
                top: 4px;
                right: 4px;
                background: linear-gradient(45deg, #ffd700, #ffed4e);
                color: #000;
                border-radius: 50%;
                width: 16px;
                height: 16px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 8px;
            }
            
            .post-info {
                padding: 6px;
                color: #fff;
            }
            
            .post-title {
                font-size: 10px;
                font-weight: 500;
                color: #fff;
                margin: 0 0 4px 0;
                line-height: 1.2;
                height: 24px;
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
            }
            
            .post-stats {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .likes {
                font-size: 9px;
                color: #9ca3af;
                display: flex;
                align-items: center;
                gap: 2px;
            }
            
            .likes:before {
                content: "♥";
                color: #ff6b6b;
                font-size: 8px;
            }
            
            .posts-carousel {
                display: flex !important;
                gap: 0;
                overflow-x: auto;
                scroll-behavior: smooth;
                padding: 0 10px;
            }
            
            .posts-carousel::-webkit-scrollbar {
                height: 4px;
            }
            
            .posts-carousel::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.1);
                border-radius: 2px;
            }
            
            .posts-carousel::-webkit-scrollbar-thumb {
                background: rgba(255, 255, 255, 0.3);
                border-radius: 2px;
            }
            
            .posts-carousel::-webkit-scrollbar-thumb:hover {
                background: rgba(255, 255, 255, 0.5);
            }
            
            .no-posts-message {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 120px;
                width: 100%;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
                border-radius: 8px;
                border: 2px dashed rgba(255, 255, 255, 0.3);
                backdrop-filter: blur(10px);
            }
            
            @media (max-width: 768px) {
                
                .post-image {
                    height: 70px;
                }
                
                .post-info {
                    padding: 4px;
                }
                
                .post-title {
                    font-size: 9px;
                    height: 20px;
                }
            }
            
            @media (max-width: 576px) {
                
                .post-image {
                    height: 60px;
                }
                
                .post-title {
                    font-size: 8px;
                    height: 18px;
                }
                
                .likes {
                    font-size: 8px;
                }
            }
            
            /* Header Actions Layout */
            .header-actions {
                display: flex;
                align-items: center;
                gap: 20px;
            }
            
            .header-actions .carousel-navigation {
                display: flex;
                gap: 8px;
            }
            
            .header-actions .nav-btn {
                background: rgba(255, 255, 255, 0.1);
                border: 1px solid rgba(255, 255, 255, 0.2);
                border-radius: 50%;
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                cursor: pointer;
                transition: all 0.3s ease;
                backdrop-filter: blur(10px);
            }
            
            .header-actions .nav-btn:hover {
                background: rgba(255, 255, 255, 0.2);
                border-color: rgba(255, 255, 255, 0.4);
                transform: translateY(-2px);
            }
            
            .header-actions .nav-btn:active {
                transform: translateY(0);
            }
            
            .header-actions .nav-btn i {
                font-size: 14px;
            }
            
            .view-all-btn {
                color: #fff;
                background: linear-gradient(135deg, #ffb200, #ff8c00) !important;
                text-decoration: none;
                padding: 10px 20px;
                border-radius: 25px;
                display: flex;
                align-items: center;
                gap: 8px;
                font-weight: 600;
                transition: all 0.3s ease;
                border: none;
                cursor: pointer;
            }
            
            .view-all-btn:hover {
                background: linear-gradient(45deg, #22c55e, #16a34a);
                transform: translateY(-2px);
                box-shadow: 0 10px 25px rgba(34, 197, 94, 0.3);
                color: #fff;
                text-decoration: none;
            }
            
            .view-all-btn i {
                font-size: 12px;
                transition: transform 0.3s ease;
            }
            
            .view-all-btn:hover i {
                transform: translateX(3px);
            }
            
            /* Responsive Header Actions */
            @media (max-width: 768px) {
                .header-actions {
                    flex-direction: column;
                    gap: 15px;
                    align-items: stretch;
                }
                
                .header-actions .carousel-navigation {
                    justify-content: center;
                }
                
                .view-all-btn {
                    justify-content: center;
                }
            }
        `;
        document.head.appendChild(style);

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

    // Language Dropdown Functionality
    const languageToggle = document.getElementById('language-toggle');
    const languageDropdown = document.getElementById('language-dropdown');
    const languageOptions = document.querySelectorAll('.language-option');
    const currentLangSpan = document.querySelector('.current-lang');

    // Toggle dropdown
    if (languageToggle && languageDropdown) {
        languageToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Toggle dropdown visibility
            languageDropdown.classList.toggle('active');
            languageToggle.classList.toggle('active');
        });

        // Handle language selection
        languageOptions.forEach(option => {
            option.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Get selected language
                const selectedLang = this.getAttribute('data-lang');
                const currentLang = '{{ config("app.locale") }}';
                
                // Only redirect if different language is selected
                if (selectedLang !== currentLang) {
                    // Show loading state
                    languageToggle.classList.add('loading');
                    if (currentLangSpan) {
                        currentLangSpan.textContent = '...';
                    }
                    
                    // Redirect to language change URL
                    window.location.href = '{{ url("change/lang") }}/' + selectedLang;
                } else {
                    // Close dropdown if same language is selected
                    languageDropdown.classList.remove('active');
                    languageToggle.classList.remove('active');
                }
            });
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!languageToggle.contains(e.target) && !languageDropdown.contains(e.target)) {
                languageDropdown.classList.remove('active');
                languageToggle.classList.remove('active');
            }
        });

        // Close dropdown on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                languageDropdown.classList.remove('active');
                languageToggle.classList.remove('active');
            }
        });
    }

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

        // Carousel navigation with auto-scroll
        if (carousel && prevBtn && nextBtn) {
            const scrollAmount = 340; // Card width + gap
            let autoScrollInterval;
            let isUserInteracting = false;

            // Auto-scroll functionality
            function startAutoScroll() {
                autoScrollInterval = setInterval(() => {
                    if (!isUserInteracting) {
                        const maxScroll = carousel.scrollWidth - carousel.clientWidth;
                        const currentScroll = carousel.scrollLeft;
                        
                        if (currentScroll >= maxScroll) {
                            // Reset to beginning
                            carousel.scrollTo({
                                left: 0,
                                behavior: 'smooth'
                            });
                        } else {
                            // Scroll to next
                            carousel.scrollBy({
                                left: scrollAmount,
                                behavior: 'smooth'
                            });
                        }
                    }
                }, 4000); // Auto-scroll every 4 seconds
            }

            function stopAutoScroll() {
                if (autoScrollInterval) {
                    clearInterval(autoScrollInterval);
                }
            }

            function resetAutoScroll() {
                stopAutoScroll();
                setTimeout(() => {
                    if (!isUserInteracting) {
                        startAutoScroll();
                    }
                }, 2000); // Resume auto-scroll after 2 seconds of no interaction
            }

            // Manual navigation
            prevBtn.addEventListener('click', () => {
                isUserInteracting = true;
                carousel.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
                resetAutoScroll();
                setTimeout(() => { isUserInteracting = false; }, 1000);
            });

            nextBtn.addEventListener('click', () => {
                isUserInteracting = true;
                carousel.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
                resetAutoScroll();
                setTimeout(() => { isUserInteracting = false; }, 1000);
            });

            // Pause auto-scroll on hover
            carousel.addEventListener('mouseenter', () => {
                isUserInteracting = true;
                stopAutoScroll();
            });

            carousel.addEventListener('mouseleave', () => {
                isUserInteracting = false;
                resetAutoScroll();
            });

            // Pause auto-scroll on manual scroll
            carousel.addEventListener('scroll', () => {
                if (!isUserInteracting) {
                    isUserInteracting = true;
                    resetAutoScroll();
                    setTimeout(() => { isUserInteracting = false; }, 1000);
                }
                updateNavButtons();
            });

            // Update navigation buttons based on scroll position
            function updateNavButtons() {
                const scrollLeft = carousel.scrollLeft;
                const maxScroll = carousel.scrollWidth - carousel.clientWidth;

                prevBtn.style.opacity = scrollLeft > 0 ? '1' : '0.5';
                nextBtn.style.opacity = scrollLeft < maxScroll ? '1' : '0.5';
            }

            updateNavButtons(); // Initial state
            startAutoScroll(); // Start auto-scroll
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

    // Initialize timeAgo for dynamic content
    function initTimeAgo() {
        if (typeof jQuery !== 'undefined' && jQuery.fn.timeago) {
            jQuery(".timeAgo").timeago();
        }
    }
    
    // Initialize timeAgo immediately and after any dynamic content loads
    initTimeAgo();
    
    // Re-initialize timeAgo when new content is loaded dynamically
    $(document).on('DOMNodeInserted', function() {
        setTimeout(initTimeAgo, 100);
    });

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

            // Carousel navigation - Updated for header navigation
            const navBtns = showcase.querySelectorAll('.nav-btn');
            
            navBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const carouselType = btn.getAttribute('data-carousel');
                    let targetCarousel;
                    
                    if (carouselType === 'recently-added') {
                        targetCarousel = document.getElementById('recently-added-carousel');
                    } else if (carouselType === 'featured') {
                        targetCarousel = document.getElementById('featured-carousel');
                    } else {
                        targetCarousel = carousel; // fallback to local carousel
                    }
                    
                    if (targetCarousel) {
                        const scrollAmount = targetCarousel.clientWidth * 0.8;
                        const isNext = btn.classList.contains('next-btn');
                        
                        targetCarousel.scrollBy({
                            left: isNext ? scrollAmount : -scrollAmount,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Global carousel navigation for posts with auto-scroll
            const globalNavBtns = document.querySelectorAll('.nav-btn[data-carousel="recent-posts"]');
            const targetCarousel = document.getElementById('recent-posts-carousel');
            let globalAutoScrollInterval;
            let globalIsUserInteracting = false;

            // Global auto-scroll functionality
            function startGlobalAutoScroll() {
                if (targetCarousel) {
                    globalAutoScrollInterval = setInterval(() => {
                        if (!globalIsUserInteracting) {
                            const containerWidth = targetCarousel.clientWidth;
                            const scrollAmount = containerWidth * 0.8;
                            const maxScroll = targetCarousel.scrollWidth - targetCarousel.clientWidth;
                            const currentScroll = targetCarousel.scrollLeft;
                            
                            if (currentScroll >= maxScroll) {
                                // Reset to beginning
                                targetCarousel.scrollTo({
                                    left: 0,
                                    behavior: 'smooth'
                                });
                            } else {
                                // Scroll to next
                                targetCarousel.scrollBy({
                                    left: scrollAmount,
                                    behavior: 'smooth'
                                });
                            }
                        }
                    }, 4000); // Auto-scroll every 4 seconds
                }
            }

            function stopGlobalAutoScroll() {
                if (globalAutoScrollInterval) {
                    clearInterval(globalAutoScrollInterval);
                }
            }

            function resetGlobalAutoScroll() {
                stopGlobalAutoScroll();
                setTimeout(() => {
                    if (!globalIsUserInteracting) {
                        startGlobalAutoScroll();
                    }
                }, 2000); // Resume auto-scroll after 2 seconds of no interaction
            }

            globalNavBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    if (targetCarousel) {
                        globalIsUserInteracting = true;
                        // Calculate scroll amount based on container width and number of visible cards
                        const containerWidth = targetCarousel.clientWidth;
                        const scrollAmount = containerWidth * 0.8; // Scroll 80% of container width
                        const isNext = btn.classList.contains('next-btn');
                        
                        targetCarousel.scrollBy({
                            left: isNext ? scrollAmount : -scrollAmount,
                            behavior: 'smooth'
                        });
                        
                        resetGlobalAutoScroll();
                        setTimeout(() => { globalIsUserInteracting = false; }, 1000);
                    }
                });
            });

            // Pause global auto-scroll on hover
            if (targetCarousel) {
                targetCarousel.addEventListener('mouseenter', () => {
                    globalIsUserInteracting = true;
                    stopGlobalAutoScroll();
                });

                targetCarousel.addEventListener('mouseleave', () => {
                    globalIsUserInteracting = false;
                    resetGlobalAutoScroll();
                });

                // Pause global auto-scroll on manual scroll
                targetCarousel.addEventListener('scroll', () => {
                    if (!globalIsUserInteracting) {
                        globalIsUserInteracting = true;
                        resetGlobalAutoScroll();
                        setTimeout(() => { globalIsUserInteracting = false; }, 1000);
                    }
                });

                // Start global auto-scroll
                startGlobalAutoScroll();
            }

            // Update navigation buttons based on scroll position
            function updateNavButtons(carousel, showcase) {
                const scrollLeft = carousel.scrollLeft;
                const maxScroll = carousel.scrollWidth - carousel.clientWidth;
                const prevBtn = showcase.querySelector('.prev-btn');
                const nextBtn = showcase.querySelector('.next-btn');

                if (prevBtn && nextBtn) {
                    prevBtn.style.opacity = scrollLeft > 0 ? '1' : '0.5';
                    nextBtn.style.opacity = scrollLeft < maxScroll ? '1' : '0.5';
                }
            }

            if (carousel) {
                carousel.addEventListener('scroll', () => updateNavButtons(carousel, showcase));
                updateNavButtons(carousel, showcase); // Initial state
            }

            // Creator card interactions
            creatorCards.forEach(card => {
                const imageContainer = card.querySelector('.creator-image-container');
                const hoverOverlay = card.querySelector('.creator-hover-overlay');
                
                // Smooth hover animations
                if (imageContainer && hoverOverlay) {
                    imageContainer.addEventListener('mouseenter', function() {
                        hoverOverlay.style.opacity = '1';
                        hoverOverlay.style.visibility = 'visible';
                        hoverOverlay.style.transform = 'translateY(0)';
                        
                        // Add scale effect to image
                        const image = this.querySelector('.creator-image');
                        if (image) {
                            image.style.transform = 'scale(1.1)';
                        }
                    });

                    imageContainer.addEventListener('mouseleave', function() {
                        hoverOverlay.style.opacity = '0';
                        hoverOverlay.style.visibility = 'hidden';
                        hoverOverlay.style.transform = 'translateY(10px)';
                        
                        // Reset image scale
                        const image = this.querySelector('.creator-image');
                        if (image) {
                            image.style.transform = 'scale(1)';
                        }
                    });
                }

                // Add ripple effect on card click
                card.addEventListener('click', function(e) {
                    if (e.target.closest('.quick-action-btn')) return; // Don't trigger on action buttons

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
                            this.innerHTML = '<i class="fas fa-user-plus"></i><span>Follow</span>';
                            this.style.background = 'rgba(255, 255, 255, 0.2)';
                            this.style.color = '#fff';
                        } else {
                            this.classList.add('following');
                            this.innerHTML = '<i class="fas fa-check"></i><span>Following</span>';
                            this.style.background = 'rgba(34, 197, 94, 0.9)';
                            this.style.color = '#fff';
                        }
                        
                        // Add button animation
                        this.style.transform = 'scale(0.95)';
                        setTimeout(() => {
                            this.style.transform = 'scale(1)';
                        }, 150);
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
                        this.style.color = '#fff';
                        
                        // Animate the button
                        this.style.transform = 'scale(1.1)';
                        setTimeout(() => {
                            this.style.transform = 'scale(1)';
                        }, 200);
                        
                        // Create floating heart effect
                        const heart = document.createElement('div');
                        heart.innerHTML = '<i class="fas fa-heart"></i>';
                        heart.style.cssText = `
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            color: #ff6b6b;
                            font-size: 20px;
                            pointer-events: none;
                            animation: floatHeart 1s ease-out forwards;
                            z-index: 1000;
                        `;
                        
                        this.style.position = 'relative';
                        this.appendChild(heart);
                        
                        setTimeout(() => {
                            heart.remove();
                        }, 1000);
                        
                        console.log('Support clicked for creator');
                    });
                }

                // View button functionality
                const viewBtn = card.querySelector('.view-btn');
                if (viewBtn) {
                    viewBtn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        
                        // Add view animation
                        this.style.transform = 'scale(0.95)';
                        setTimeout(() => {
                            this.style.transform = 'scale(1)';
                        }, 150);
                        
                        // Navigate to creator profile (implement as needed)
                        const creatorName = card.querySelector('.creator-name').textContent;
                        console.log('Viewing profile for:', creatorName);
                    });
                }

                // Content preview click functionality
                const contentPreview = card.querySelector('.content-preview');
                if (contentPreview) {
                    contentPreview.addEventListener('click', function(e) {
                        e.stopPropagation();
                        
                        // Add pulse animation to content icon
                        const icon = this.querySelector('.content-icon');
                        if (icon) {
                            icon.style.transform = 'scale(1.2)';
                            setTimeout(() => {
                                icon.style.transform = 'scale(1)';
                            }, 200);
                        }
                        
                        console.log('Content preview clicked');
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

    // Initialize posts interactions
    initPostsInteractions();

    // Compact Posts Interactions Function
    function initPostsInteractions() {
        const postCards = document.querySelectorAll('.compact-post-card');
        
        postCards.forEach(card => {
            // Add click animation for compact cards
            card.addEventListener('click', function(e) {
                // Add ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('compact-post-ripple');
                ripple.style.cssText += `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.3);
                    transform: scale(0);
                    animation: ripple 0.6s linear;
                    pointer-events: none;
                `;
                
                this.style.position = 'relative';
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });

            // Add hover effects for compact post cards
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
        
        // Add ripple animation keyframes
        if (!document.querySelector('#compact-post-animations')) {
            const style = document.createElement('style');
            style.id = 'compact-post-animations';
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
        }
    }

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