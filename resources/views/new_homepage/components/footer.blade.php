{{-- Modern Footer --}}
<footer class="modern-footer">
    <!-- Newsletter Section -->
    <div class="newsletter-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="newsletter-content">
                        <h3>{{ __('sections.stay_in_loop') }}</h3>
                        <p>{{ __('sections.newsletter_description') }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="newsletter-form">
                        <form class="subscribe-form">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="{{ __('sections.enter_email') }}" required>
                                <button type="submit" class="subscribe-btn">
                                    <i class="fas fa-paper-plane"></i>
                                    {{ __('sections.subscribe') }}
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
                            {{ __('sections.brand_description') }}
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
                            {{ __('sections.about') }}
                        </h4>
                        <ul class="footer-links">
                            <li><a href="{{ url('/p/about') }}">{{ __('sections.about_us') }}</a></li>
                            <li><a href="{{ url('/p/how-it-works') }}">{{ __('sections.how_it_works') }}</a></li>
                            <li><a href="{{ url('/contact') }}">{{ __('sections.contact_us') }}</a></li>
                            <li><a href="#">{{ __('sections.careers') }}</a></li>
                            <li><a href="#">{{ __('sections.press_kit') }}</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Categories -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-column">
                        <h4 class="column-title">
                            <i class="fas fa-th-large"></i>
                            {{ __('sections.categories') }}
                        </h4>
                        <ul class="footer-links">
                            <li><a href="{{ url('/category/animation') }}">{{ __('sections.animation') }}</a></li>
                            <li><a href="{{ url('/category/artist') }}">{{ __('sections.artist') }}</a></li>
                            <li><a href="{{ url('/category/designer') }}">{{ __('sections.designer') }}</a></li>
                            <li><a href="{{ url('/category/developer') }}">{{ __('sections.developer') }}</a></li>
                            <li><a href="{{ url('/category/photography') }}">{{ __('sections.photography') }}</a></li>
                            <li><a href="{{ url('/category/others') }}">{{ __('sections.view_all') }}</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Support -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-column">
                        <h4 class="column-title">
                            <i class="fas fa-headset"></i>
                            {{ __('sections.support') }}
                        </h4>
                        <ul class="footer-links">
                            <li><a href="#">{{ __('sections.help_center') }}</a></li>
                            <li><a href="#">{{ __('sections.creator_guide') }}</a></li>
                            <li><a href="#">{{ __('sections.community') }}</a></li>
                            <li><a href="#">{{ __('sections.report_issue') }}</a></li>
                            <li><a href="#">{{ __('sections.safety') }}</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Account -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-column">
                        <h4 class="column-title">
                            <i class="fas fa-user"></i>
                            {{ __('sections.account') }}
                        </h4>
                        <ul class="footer-links">
                            <li><a href="{{ url('/login') }}">{{ __('sections.sign_in') }}</a></li>
                            <li><a href="{{ url('/register') }}">{{ __('sections.sign_up') }}</a></li>
                            <li><a href="#">{{ __('sections.creator_dashboard') }}</a></li>
                            <li><a href="#">{{ __('sections.settings') }}</a></li>
                            <li><a href="#">{{ __('sections.billing') }}</a></li>
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
                        <p>&copy; 2025 <span class="brand-highlight">Yelouwh</span>. {{ __('sections.all_rights_reserved') }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-legal">
                        <ul>
                            <li><a href="{{ url('/p/terms-of-service') }}">{{ __('sections.terms') }}</a></li>
                            <li><a href="{{ url('/p/privacy') }}">{{ __('sections.privacy') }}</a></li>
                            <li><a href="{{ url('/p/cookies') }}">{{ __('sections.cookies') }}</a></li>
                            <li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> 