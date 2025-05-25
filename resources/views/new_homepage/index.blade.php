<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="QLSDCBJt20r51A0mEE09dRsvgtwW4cbQk205FSXH" />
        <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut tortor rutrum massa efficitur tincidunt vel nec lacus. Curabitur porta aliquet diam, eu gravida neque lacinia." />
        <meta name="keywords" content="donations,support,creators,sponzy,subscription,content" />
        <meta name="theme-color" content="#ffb200" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Yelouwh - Support Creators Content</title>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('public/css/fontawesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{asset('public/new_home_page/slick/slick.css')}}" />
        <link rel="stylesheet" href="{{ asset('public/css/new_home_page.css') }}" />
    </head>
    <body class="new-home-page">
        <header class="header">
            <div class="logo-area">
                <div>
                    <button class="common-btn" id="menu-toggler">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('public/new_home_page/logo.png') }}" alt="Yelouwh Logo" />
                    </a>
                </div>
            </div>
            <div class="action-area">
                <div class="actions">
                    <div class="search-btn">
                        <button class="common-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="login-btn">
                        <a href="{{ url('/login') }}">Sign In</a>
                    </div>
                    <div class="signup-btn ml-2">
                        <a class="gradient-btn" href="{{ url('/register') }}">Sign Up</a>
                    </div>
                    <div class="live-btn">
                        <button class="common-btn ml-1">
                            <i class="fas fa-caret-square-down"></i>
                        </button>
                    </div>
                    <div class="global">
                        <button class="common-btn ml-2">
                            <i class="fas fa-globe"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <main class="new-home-page-main">
            <div class="sidebar-area" id="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{ url('/creators') }}">
                            <i class="fas fa-heart"></i>
                            <span>Popular</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/creators/featured') }}">
                            <i class="fas fa-star"></i>
                            <span>Featured Creators</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/creators/more-active') }}">
                            <i class="fas fa-fire"></i>
                            <span>More Active</span>
                        </a>                 
                    </li>
                    <li>
                        <a href="{{ url('/creators/new') }}">
                            <i class="fas fa-user-plus"></i>
                            <span>New Creators</span>
                        </a>                 
                    </li>
                    <li>
                        <a href="https://test.divinecoder.com/creators/free">
                            <i class="fas fa-gift"></i>
                            <span>Free Subscription</span>
                        </a>                 
                    </li>
                    <li>
                        <a href="https://test.divinecoder.com/category/animation">
                            <i class="fas fa-magic"></i>
                            <span>Animation</span>
                        </a>                 
                    </li>
                    <li>
                        <a href="https://test.divinecoder.com/category/artist">
                            <i class="fas fa-palette"></i>
                            <span>Artist</span>
                        </a>                 
                    </li>
                    <li>
                        <a href="https://test.divinecoder.com/category/designer">
                            <i class="fas fa-pencil-ruler"></i>
                            <span>Designer</span>
                        </a>                 
                    </li>
                    <li>
                        <a href="https://test.divinecoder.com/category/developer">
                            <i class="fas fa-code"></i>
                            <span>Developer</span>
                        </a>                 
                    </li>
                    <li>
                        <a href="https://test.divinecoder.com/category/drawing-and-painting">
                            <i class="fas fa-pen-fancy"></i>
                            <span>Drawing & Printing</span>
                        </a>                 
                    </li>
                    <li>
                        <a href="https://test.divinecoder.com/category/photography">
                            <i class="fas fa-camera"></i>
                            <span>Photography</span>
                        </a>                 
                    </li>
                    <li>
                        <a href="https://test.divinecoder.com/category/podcasts">
                            <i class="fas fa-microphone"></i>
                            <span>Podcast</span>
                        </a>                 
                    </li>
                    <li>
                        <a href="https://test.divinecoder.com/category/video-and-film">
                            <i class="fas fa-video"></i>
                            <span>Video & Film</span>
                        </a>                 
                    </li>
                    <li>
                        <a href="https://test.divinecoder.com/category/writing">
                            <i class="fas fa-pen-nib"></i>
                            <span>Writing</span>
                        </a>                 
                    </li>
                    <li>
                        <a href="https://test.divinecoder.com/category/others">
                            <i class="fas fa-puzzle-piece"></i>
                            <span>Other</span>
                        </a>                 
                    </li>
                    <li>
                        <a href="https://test.divinecoder.com/simulator">
                            <i class="fas fa-calculator"></i>
                            <span>Simulator</span>
                        </a>                 
                    </li>
                </ul>

            </div>
            <div class="content-area">
                <div class="main-content">
                    {{-- Banner Section --}}
                    <div class="banner" style="background-image: url({{asset('public/new_home_page/banner.jpg') }})">
                        <img class="bg-img" src="{{asset('public/new_home_page/3man.png')}}" alt="">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 text-center">
                                    <div class="banner-content">
                                        <h1>YE Simulator</h1>
                                        
                                        <div class="blur-bg">
                                            <span>Sign Up & Get</span>
                                            <p>UP TO <span>$20,000.00</span></p>
                                            <span>in Casino or Sports</span>
                                            <br />
                                        </div>
                                        <a href="#">Join Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Wins --}}

                    <div class="wins">
                        <div class="section-title">
                            <h4>Recent Big Wins</h4>
                            <ul>
                                <li><a class="active" href="#">All</a></li>
                                <li><a href="#">BC Original</a></li>
                                <li><a href="#">Slot</a></li>
                                <li><a href="#">Live</a></li>
                            </ul>
                        </div>
                        <div class="wins-content">
                            <div class="slide-wins-wrapper">
                                <div class="slide-wins">
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wins-item">
                                        <a href="#">
                                            <div class="img">
                                                <img src="{{asset('public/new_home_page/wing-cart.png')}}" alt="" />
                                            </div>
                                            <div class="cart-title">
                                                <img src="{{ asset('public/new_home_page/dimond.png') }}" alt="" />
                                                <span>Lorem ...</span>
                                            </div>
                                            <div class="wins-footer">
                                                <span>2,000 ETS</span>
                                            </div>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Category --}}
                    <div class="category">
                        <div class="container-fluid p-0">
                            <div class="category-grid">
                                <a href="#" class="category-item large-item">
                                    <img src="{{ asset('public/new_home_page/sports.jpg') }}" alt="" />
                                    <div class="overlay">
                                        <h5>Popular</h5>
                                        <p class="pt-0">Click here to visit popular creators</p>
                                    </div>
                                </a>
                                <a href="#" class="category-item large-item">
                                    <img src="{{ asset('public/new_home_page/sports.jpg') }}" alt="" />
                                    <div class="overlay">
                                        <h5>Featured Creators</h5>
                                        <p class="pt-0">Click here to visit Featured Creators</p>
                                    </div>

                                </a>
                                <a href="#" class="category-item">
                                    <img src="{{ asset('public/new_home_page/sports-2.jpg') }}" alt="" />
                                    <div class="overlay">
                                        <h5>More Action</h5>
                                        <p class="pt-0">Lorem ipsum dolor sit amet.</p>
                                    </div>

                                </a>
                                <a href="#" class="category-item">
                                    <img src="{{ asset('public/new_home_page/sports-2.jpg') }}" alt="" />
                                    <div class="overlay">
                                        <h5>New Creators</h5>
                                        <p class="pt-0">Lorem ipsum dolor sit amet.</p>
                                    </div>

                                </a>
                                <a href="#" class="category-item">
                                    <img src="{{ asset('public/new_home_page/sports.jpg') }}" alt="" />
                                    <div class="overlay">
                                        <h5>Free Subscriptions</h5>
                                        <p class="pt-0">Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    
                                </a>
                                <a href="#" class="category-item">
                                    <img src="{{ asset('public/new_home_page/sports-2.jpg') }}" alt="" />
                                    <div class="overlay">
                                        <h5>Others</h5>
                                        <p class="pt-0">Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    
                                </a>
                            </div>
                        </div>
                    </div>

                    

                    {{-- image cart --}}
                    <div class="image-cart">
                        <div class="section-title-with-arrows">
                            <h4>Recently Added</h4>
                            <a href="#">All <i class="fas fa-chevron-right"></i></a>
                        </div>
                        <div class="cart-items-slider right-arrows">
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image-1.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image-2.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image-3.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image-3.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image-1.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image-2.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image-3.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>

                    {{-- image cart (slots) --}}
                    <div class="image-cart">
                        <div class="section-title-with-arrows">
                            <h4>Features Created</h4>
                            <a href="#">All <i class="fas fa-chevron-right"></i></a>
                        </div>
                        <div class="cart-items-slider right-arrows">
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image-1.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image-2.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image-2.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image-1.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image-2.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image-1.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="cart-item">
                                <img src="{{ asset('public/new_home_page/cart-image.png') }}" alt="" />
                                <div class="overlay">
                                    <p>Yukoing</p>
                                    <span class="play">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>



                    {{-- Footer --}}
                    <footer class="footer">
                        <div class="container-fluid px-0">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="footer-content">
                                        <h3>About</h3>
                                        <ul>
                                            <li><a href="https://test.divinecoder.com/p/terms-of-service">Terms of Service</a></li>
                                            <li><a href="https://test.divinecoder.com/p/privacy">Privacy</a></li>
                                            <li><a href="https://test.divinecoder.com/p/about">About us</a></li>
                                            <li><a href="https://test.divinecoder.com/p/how-it-works">How it works</a></li>
                                            <li><a href="https://test.divinecoder.com/p/cookies">Cookies Policy</a></li>
                                            <li><a href="https://test.divinecoder.com/contact">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="footer-content">
                                        <h3>Categories</h3>
                                        <ul>
                                            <li><a href="https://test.divinecoder.com/category/animation">Animation</a></li>
                                            <li><a href="https://test.divinecoder.com/category/artist">Artist</a></li>
                                            <li><a href="https://test.divinecoder.com/category/designer">Designer</a></li>
                                            <li><a href="https://test.divinecoder.com/category/developer">Developer</a></li>
                                            <li><a href="https://test.divinecoder.com/category/drawing-and-painting">Drawing and Painting</a></li>
                                            <li><a href="https://test.divinecoder.com/category/others">Others</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="footer-content">
                                        <h3>Links</h3>
                                        <ul>
                                            <li><a href="https://test.divinecoder.com/login">Lgoin</a></li>
                                            <li><a href="https://test.divinecoder.com/signup">Sign Up</a></li>
                                            <li><a href="https://test.divinecoder.com/change/lang/en">English</a></li>
                                            <li><a href="https://test.divinecoder.com/change/lang/es">Español</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="footer-content">
                                        <h3>Social Links</h3>
                                        <ul class="socials">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>

                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="text-center text-sm mt-3 pt-3 border-top">&copy; 2025 Yelouwh, All rights reserved.</p>
                    </footer>
                </div>
            </div>
        </main>

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
                const dropdowns = document.querySelectorAll(".sidebar-area > ul > li");

                dropdowns.forEach((dropdown) => {
                    const button = dropdown.querySelector(".dropdown-btn button");
                    const submenu = dropdown.querySelector("ul");

                    if (button && submenu) {
                        submenu.style.display = "none"; // Initially hide all submenus

                        button.addEventListener("click", function (e) {
                            e.preventDefault();

                            const icon = button.querySelector("i");

                            // Close all other submenus
                            dropdowns.forEach((otherDropdown) => {
                                if (otherDropdown !== dropdown) {
                                    const otherSubmenu = otherDropdown.querySelector("ul");
                                    const otherIcon = otherDropdown.querySelector(".dropdown-btn i");
                                    if (otherSubmenu) otherSubmenu.style.display = "none";
                                    if (otherIcon) {
                                        otherIcon.classList.remove("fa-chevron-up");
                                        otherIcon.classList.add("fa-chevron-down");
                                    }
                                }
                            });

                            // Toggle current submenu
                            const isOpen = submenu.style.display === "block";
                            submenu.style.display = isOpen ? "none" : "block";

                            // Toggle icon
                            if (icon) {
                                icon.classList.toggle("fa-chevron-down", isOpen);
                                icon.classList.toggle("fa-chevron-up", !isOpen);
                            }
                        });
                    }
                });

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

            
        </script>

        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('public/new_home_page/slick/slick.min.js')}}"></script>

        <script>

            let menuToggler = $('#menu-toggler');

            menuToggler.on('click', function(e) {
                $('#sidebar-menu').toggleClass('d-none');
            })


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
    </body>
</html>
