{{-- Modern Footer --}}
<footer class="modern-footer">
    <!-- Newsletter Section -->
    <div class="newsletter-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="newsletter-content">
                        <h3>Stay in the Loop</h3>
                        <p>Get the latest updates, creator spotlights, and exclusive content delivered to your inbox.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="newsletter-form">
                        <form class="subscribe-form">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your email address" required>
                                <button type="submit" class="subscribe-btn">
                                    <i class="fas fa-paper-plane"></i>
                                    Subscribe
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
                            Empowering creators worldwide with innovative tools and community support. 
                            Join thousands of creators building their dreams on Yelouwh.
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
                            About
                        </h4>
                        <ul class="footer-links">
                            <li><a href="{{ url('/p/about') }}">About Us</a></li>
                            <li><a href="{{ url('/p/how-it-works') }}">How It Works</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Press Kit</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Categories -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-column">
                        <h4 class="column-title">
                            <i class="fas fa-th-large"></i>
                            Categories
                        </h4>
                        <ul class="footer-links">
                            <li><a href="{{ url('/category/animation') }}">Animation</a></li>
                            <li><a href="{{ url('/category/artist') }}">Artist</a></li>
                            <li><a href="{{ url('/category/designer') }}">Designer</a></li>
                            <li><a href="{{ url('/category/developer') }}">Developer</a></li>
                            <li><a href="{{ url('/category/photography') }}">Photography</a></li>
                            <li><a href="{{ url('/category/others') }}">View All</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Support -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-column">
                        <h4 class="column-title">
                            <i class="fas fa-headset"></i>
                            Support
                        </h4>
                        <ul class="footer-links">
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Creator Guide</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Report Issue</a></li>
                            <li><a href="#">Safety</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Account -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-column">
                        <h4 class="column-title">
                            <i class="fas fa-user"></i>
                            Account
                        </h4>
                        <ul class="footer-links">
                            <li><a href="{{ url('/login') }}">Sign In</a></li>
                            <li><a href="{{ url('/register') }}">Sign Up</a></li>
                            <li><a href="#">Creator Dashboard</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Billing</a></li>
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
                        <p>&copy; 2025 <span class="brand-highlight">Yelouwh</span>. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-legal">
                        <ul>
                            <li><a href="{{ url('/p/terms-of-service') }}">Terms</a></li>
                            <li><a href="{{ url('/p/privacy') }}">Privacy</a></li>
                            <li><a href="{{ url('/p/cookies') }}">Cookies</a></li>
                            <li>
                                <div class="language-selector">
                                    <i class="fas fa-globe"></i>
                                    <select>
                                        <option value="en">English</option>
                                        <option value="es">Español</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> 