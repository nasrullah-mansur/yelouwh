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
                        <a href="#">
                            <i class="far fa-heart"></i>
                            <span>Popular</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                            <span>Featured Creators</span>
                        </a>
                        <div class="dropdown-btn">
                            <button><i class="fas fa-chevron-down"></i></button>
                        </div>
                        
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                            <span>Arcade Zone</span>
                        </a>
                        <div class="dropdown-btn">
                            <button><i class="fas fa-chevron-down"></i></button>
                        </div>
                        <ul>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Stage A</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Stage B</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                            <span>Fantasy World</span>
                        </a>
                        <div class="dropdown-btn">
                            <button><i class="fas fa-chevron-down"></i></button>
                        </div>
                        <ul>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Quest 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Quest 2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                            <span>Battle Zone</span>
                        </a>
                        <div class="dropdown-btn">
                            <button><i class="fas fa-chevron-down"></i></button>
                        </div>
                        <ul>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>War Room</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Battlefield</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                            <span>Mini Games</span>
                        </a>
                        <div class="dropdown-btn">
                            <button><i class="fas fa-chevron-down"></i></button>
                        </div>
                        <ul>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Puzzle Mania</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Speed Runner</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                            <span>Space Adventures</span>
                        </a>
                        <div class="dropdown-btn">
                            <button><i class="fas fa-chevron-down"></i></button>
                        </div>
                        <ul>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Galaxy Quest</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Alien Invasion</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                            <span>Racing Arena</span>
                        </a>
                        <div class="dropdown-btn">
                            <button><i class="fas fa-chevron-down"></i></button>
                        </div>
                        <ul>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Drift Kings</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Speed Trials</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                            <span>Zombie Survival</span>
                        </a>
                        <div class="dropdown-btn">
                            <button><i class="fas fa-chevron-down"></i></button>
                        </div>
                        <ul>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Haunted City</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Last Stand</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                            <span>Strategy Games</span>
                        </a>
                        <div class="dropdown-btn">
                            <button><i class="fas fa-chevron-down"></i></button>
                        </div>
                        <ul>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Kingdom Rise</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Castle Siege</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                            <span>Multiplayer Fun</span>
                        </a>
                        <div class="dropdown-btn">
                            <button><i class="fas fa-chevron-down"></i></button>
                        </div>
                        <ul>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Team Battle</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/new_home_page/colour.png') }}" alt="" />
                                    <span>Capture the Flag</span>
                                </a>
                            </li>
                        </ul>
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
                                        <h1>Stay Untamed</h1>
                                        
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
                                        <h5>Animation</h5>
                                        <p class="pt-0">Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </a>
                                <a href="#" class="category-item large-item">
                                    <img src="{{ asset('public/new_home_page/sports.jpg') }}" alt="" />
                                    <div class="overlay">
                                        <h5>Animation</h5>
                                        <p class="pt-0">Lorem ipsum dolor sit amet.</p>
                                    </div>

                                </a>
                                <a href="#" class="category-item">
                                    <img src="{{ asset('public/new_home_page/sports-2.jpg') }}" alt="" />
                                    <div class="overlay">
                                        <h5>Animation</h5>
                                        <p class="pt-0">Lorem ipsum dolor sit amet.</p>
                                    </div>

                                </a>
                                <a href="#" class="category-item">
                                    <img src="{{ asset('public/new_home_page/sports-2.jpg') }}" alt="" />
                                    <div class="overlay">
                                        <h5>Animation</h5>
                                        <p class="pt-0">Lorem ipsum dolor sit amet.</p>
                                    </div>

                                </a>
                                <a href="#" class="category-item">
                                    <img src="{{ asset('public/new_home_page/sports.jpg') }}" alt="" />
                                    <div class="overlay">
                                        <h5>Animation</h5>
                                        <p class="pt-0">Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    
                                </a>
                                <a href="#" class="category-item">
                                    <img src="{{ asset('public/new_home_page/sports-2.jpg') }}" alt="" />
                                    <div class="overlay">
                                        <h5>Animation</h5>
                                        <p class="pt-0">Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Live sports --}}
                    <div class="live-sports">
                        <div class="section-title-with-arrows">
                            <h4>Live Sports</h4>
                            <a href="#">All <i class="fas fa-chevron-right"></i></a>
                        </div>

                        <div class="live-sports-slider right-arrows">
                            <div class="slider-item">
                                <a href="#" class="slider-content">
                                    <div class="title">
                                        <span>Soccer - Leaque 2</span>
                                        <span><i class="fas fa-play"></i> <strong>Live</strong></span>
                                    </div>
                                    <div class="body">
                                        <div>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M11.04 21.3793C12.368 22.0323 13.8288 22.393 15.3425 22.4261L17.8734 19.5272C17.9026 17.8165 17.5076 16.1267 16.7246 14.6139L11.7195 13.4485C10.675 14.4949 9.86495 15.7551 9.35078 17.1439L11.04 21.3793ZM10.7764 22.204L9.08458 23.6141C10.9111 25.274 13.3374 26.2857 16 26.2857C16.511 26.2857 17.0133 26.2485 17.5043 26.1765L15.3359 23.2833C13.7356 23.25 12.1884 22.8783 10.7764 22.204ZM5.7343 16.6469H8.62297C9.20019 15.1755 10.086 13.8441 11.2164 12.7406V9.62205C10.2129 9.37945 9.1786 9.29054 8.14698 9.35692C6.6294 11.1491 5.71429 13.4677 5.71429 16C5.71429 16.2173 5.72102 16.433 5.7343 16.6469ZM22.9116 19.3483C23.8049 18.4384 24.5225 17.3714 25.0254 16.2017L23.6597 11.542C22.5016 10.9523 21.2395 10.587 19.9272 10.4698L17.6048 14.4567C18.3 15.8824 18.6825 17.4437 18.7275 19.033L22.9116 19.3483ZM23.4088 20.0636V23.1348C25.0358 21.4457 26.0906 19.2017 26.2613 16.7145L25.7741 16.6293C25.2096 17.9111 24.4065 19.0765 23.4088 20.0636ZM23.9985 9.53268C22.4866 7.66509 20.3338 6.33759 17.8747 5.88473C17.5281 6.28981 17.2149 6.71981 16.9371 7.17124L19.7454 9.596C21.1338 9.68779 22.4749 10.0354 23.7142 10.6149L23.9985 9.53268ZM16.0845 6.92604C16.3235 6.51838 16.5885 6.12608 16.8785 5.75128C16.5889 5.72678 16.2959 5.71429 16 5.71429C13.2876 5.71429 10.8204 6.76421 8.98261 8.47983C9.78915 8.49238 10.5923 8.59246 11.3784 8.77945C11.4114 8.75319 11.4487 8.73155 11.4894 8.71569L16.0845 6.92604ZM16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16C28 22.6274 22.6274 28 16 28Z"
                                                ></path>
                                            </svg>
                                            <p>FC Dynamo Kirov</p>
                                        </div>
                                        <div class="status">
                                            <p>0 : 0</p>
                                            <span>Halftime</span>
                                        </div>
                                        <div>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M11.04 21.3793C12.368 22.0323 13.8288 22.393 15.3425 22.4261L17.8734 19.5272C17.9026 17.8165 17.5076 16.1267 16.7246 14.6139L11.7195 13.4485C10.675 14.4949 9.86495 15.7551 9.35078 17.1439L11.04 21.3793ZM10.7764 22.204L9.08458 23.6141C10.9111 25.274 13.3374 26.2857 16 26.2857C16.511 26.2857 17.0133 26.2485 17.5043 26.1765L15.3359 23.2833C13.7356 23.25 12.1884 22.8783 10.7764 22.204ZM5.7343 16.6469H8.62297C9.20019 15.1755 10.086 13.8441 11.2164 12.7406V9.62205C10.2129 9.37945 9.1786 9.29054 8.14698 9.35692C6.6294 11.1491 5.71429 13.4677 5.71429 16C5.71429 16.2173 5.72102 16.433 5.7343 16.6469ZM22.9116 19.3483C23.8049 18.4384 24.5225 17.3714 25.0254 16.2017L23.6597 11.542C22.5016 10.9523 21.2395 10.587 19.9272 10.4698L17.6048 14.4567C18.3 15.8824 18.6825 17.4437 18.7275 19.033L22.9116 19.3483ZM23.4088 20.0636V23.1348C25.0358 21.4457 26.0906 19.2017 26.2613 16.7145L25.7741 16.6293C25.2096 17.9111 24.4065 19.0765 23.4088 20.0636ZM23.9985 9.53268C22.4866 7.66509 20.3338 6.33759 17.8747 5.88473C17.5281 6.28981 17.2149 6.71981 16.9371 7.17124L19.7454 9.596C21.1338 9.68779 22.4749 10.0354 23.7142 10.6149L23.9985 9.53268ZM16.0845 6.92604C16.3235 6.51838 16.5885 6.12608 16.8785 5.75128C16.5889 5.72678 16.2959 5.71429 16 5.71429C13.2876 5.71429 10.8204 6.76421 8.98261 8.47983C9.78915 8.49238 10.5923 8.59246 11.3784 8.77945C11.4114 8.75319 11.4487 8.73155 11.4894 8.71569L16.0845 6.92604ZM16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16C28 22.6274 22.6274 28 16 28Z"
                                                ></path>
                                            </svg>
                                            <p>FC Dynamo Kirov</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <ul>
                                            <li>1 <span>3.0</span></li>
                                            <li>draw <span>3.0</span></li>
                                            <li>2 <span>3.0</span></li>
                                            <li>+4</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="slider-item">
                                <a href="#" class="slider-content">
                                    <div class="title">
                                        <span>Soccer - Leaque 2</span>
                                        <span><i class="fas fa-play"></i> <strong>Live</strong></span>
                                    </div>
                                    <div class="body">
                                        <div>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M11.04 21.3793C12.368 22.0323 13.8288 22.393 15.3425 22.4261L17.8734 19.5272C17.9026 17.8165 17.5076 16.1267 16.7246 14.6139L11.7195 13.4485C10.675 14.4949 9.86495 15.7551 9.35078 17.1439L11.04 21.3793ZM10.7764 22.204L9.08458 23.6141C10.9111 25.274 13.3374 26.2857 16 26.2857C16.511 26.2857 17.0133 26.2485 17.5043 26.1765L15.3359 23.2833C13.7356 23.25 12.1884 22.8783 10.7764 22.204ZM5.7343 16.6469H8.62297C9.20019 15.1755 10.086 13.8441 11.2164 12.7406V9.62205C10.2129 9.37945 9.1786 9.29054 8.14698 9.35692C6.6294 11.1491 5.71429 13.4677 5.71429 16C5.71429 16.2173 5.72102 16.433 5.7343 16.6469ZM22.9116 19.3483C23.8049 18.4384 24.5225 17.3714 25.0254 16.2017L23.6597 11.542C22.5016 10.9523 21.2395 10.587 19.9272 10.4698L17.6048 14.4567C18.3 15.8824 18.6825 17.4437 18.7275 19.033L22.9116 19.3483ZM23.4088 20.0636V23.1348C25.0358 21.4457 26.0906 19.2017 26.2613 16.7145L25.7741 16.6293C25.2096 17.9111 24.4065 19.0765 23.4088 20.0636ZM23.9985 9.53268C22.4866 7.66509 20.3338 6.33759 17.8747 5.88473C17.5281 6.28981 17.2149 6.71981 16.9371 7.17124L19.7454 9.596C21.1338 9.68779 22.4749 10.0354 23.7142 10.6149L23.9985 9.53268ZM16.0845 6.92604C16.3235 6.51838 16.5885 6.12608 16.8785 5.75128C16.5889 5.72678 16.2959 5.71429 16 5.71429C13.2876 5.71429 10.8204 6.76421 8.98261 8.47983C9.78915 8.49238 10.5923 8.59246 11.3784 8.77945C11.4114 8.75319 11.4487 8.73155 11.4894 8.71569L16.0845 6.92604ZM16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16C28 22.6274 22.6274 28 16 28Z"
                                                ></path>
                                            </svg>
                                            <p>FC Dynamo Kirov</p>
                                        </div>
                                        <div class="status">
                                            <p>0 : 0</p>
                                            <span>Halftime</span>
                                        </div>
                                        <div>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M11.04 21.3793C12.368 22.0323 13.8288 22.393 15.3425 22.4261L17.8734 19.5272C17.9026 17.8165 17.5076 16.1267 16.7246 14.6139L11.7195 13.4485C10.675 14.4949 9.86495 15.7551 9.35078 17.1439L11.04 21.3793ZM10.7764 22.204L9.08458 23.6141C10.9111 25.274 13.3374 26.2857 16 26.2857C16.511 26.2857 17.0133 26.2485 17.5043 26.1765L15.3359 23.2833C13.7356 23.25 12.1884 22.8783 10.7764 22.204ZM5.7343 16.6469H8.62297C9.20019 15.1755 10.086 13.8441 11.2164 12.7406V9.62205C10.2129 9.37945 9.1786 9.29054 8.14698 9.35692C6.6294 11.1491 5.71429 13.4677 5.71429 16C5.71429 16.2173 5.72102 16.433 5.7343 16.6469ZM22.9116 19.3483C23.8049 18.4384 24.5225 17.3714 25.0254 16.2017L23.6597 11.542C22.5016 10.9523 21.2395 10.587 19.9272 10.4698L17.6048 14.4567C18.3 15.8824 18.6825 17.4437 18.7275 19.033L22.9116 19.3483ZM23.4088 20.0636V23.1348C25.0358 21.4457 26.0906 19.2017 26.2613 16.7145L25.7741 16.6293C25.2096 17.9111 24.4065 19.0765 23.4088 20.0636ZM23.9985 9.53268C22.4866 7.66509 20.3338 6.33759 17.8747 5.88473C17.5281 6.28981 17.2149 6.71981 16.9371 7.17124L19.7454 9.596C21.1338 9.68779 22.4749 10.0354 23.7142 10.6149L23.9985 9.53268ZM16.0845 6.92604C16.3235 6.51838 16.5885 6.12608 16.8785 5.75128C16.5889 5.72678 16.2959 5.71429 16 5.71429C13.2876 5.71429 10.8204 6.76421 8.98261 8.47983C9.78915 8.49238 10.5923 8.59246 11.3784 8.77945C11.4114 8.75319 11.4487 8.73155 11.4894 8.71569L16.0845 6.92604ZM16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16C28 22.6274 22.6274 28 16 28Z"
                                                ></path>
                                            </svg>
                                            <p>FC Dynamo Kirov</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <ul>
                                            <li>1 <span>3.0</span></li>
                                            <li>draw <span>3.0</span></li>
                                            <li>2 <span>3.0</span></li>
                                            <li>+4</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="slider-item">
                                <a href="#" class="slider-content">
                                    <div class="title">
                                        <span>Soccer - Leaque 2</span>
                                        <span><i class="fas fa-play"></i> <strong>Live</strong></span>
                                    </div>
                                    <div class="body">
                                        <div>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M11.04 21.3793C12.368 22.0323 13.8288 22.393 15.3425 22.4261L17.8734 19.5272C17.9026 17.8165 17.5076 16.1267 16.7246 14.6139L11.7195 13.4485C10.675 14.4949 9.86495 15.7551 9.35078 17.1439L11.04 21.3793ZM10.7764 22.204L9.08458 23.6141C10.9111 25.274 13.3374 26.2857 16 26.2857C16.511 26.2857 17.0133 26.2485 17.5043 26.1765L15.3359 23.2833C13.7356 23.25 12.1884 22.8783 10.7764 22.204ZM5.7343 16.6469H8.62297C9.20019 15.1755 10.086 13.8441 11.2164 12.7406V9.62205C10.2129 9.37945 9.1786 9.29054 8.14698 9.35692C6.6294 11.1491 5.71429 13.4677 5.71429 16C5.71429 16.2173 5.72102 16.433 5.7343 16.6469ZM22.9116 19.3483C23.8049 18.4384 24.5225 17.3714 25.0254 16.2017L23.6597 11.542C22.5016 10.9523 21.2395 10.587 19.9272 10.4698L17.6048 14.4567C18.3 15.8824 18.6825 17.4437 18.7275 19.033L22.9116 19.3483ZM23.4088 20.0636V23.1348C25.0358 21.4457 26.0906 19.2017 26.2613 16.7145L25.7741 16.6293C25.2096 17.9111 24.4065 19.0765 23.4088 20.0636ZM23.9985 9.53268C22.4866 7.66509 20.3338 6.33759 17.8747 5.88473C17.5281 6.28981 17.2149 6.71981 16.9371 7.17124L19.7454 9.596C21.1338 9.68779 22.4749 10.0354 23.7142 10.6149L23.9985 9.53268ZM16.0845 6.92604C16.3235 6.51838 16.5885 6.12608 16.8785 5.75128C16.5889 5.72678 16.2959 5.71429 16 5.71429C13.2876 5.71429 10.8204 6.76421 8.98261 8.47983C9.78915 8.49238 10.5923 8.59246 11.3784 8.77945C11.4114 8.75319 11.4487 8.73155 11.4894 8.71569L16.0845 6.92604ZM16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16C28 22.6274 22.6274 28 16 28Z"
                                                ></path>
                                            </svg>
                                            <p>FC Dynamo Kirov</p>
                                        </div>
                                        <div class="status">
                                            <p>0 : 0</p>
                                            <span>Halftime</span>
                                        </div>
                                        <div>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M11.04 21.3793C12.368 22.0323 13.8288 22.393 15.3425 22.4261L17.8734 19.5272C17.9026 17.8165 17.5076 16.1267 16.7246 14.6139L11.7195 13.4485C10.675 14.4949 9.86495 15.7551 9.35078 17.1439L11.04 21.3793ZM10.7764 22.204L9.08458 23.6141C10.9111 25.274 13.3374 26.2857 16 26.2857C16.511 26.2857 17.0133 26.2485 17.5043 26.1765L15.3359 23.2833C13.7356 23.25 12.1884 22.8783 10.7764 22.204ZM5.7343 16.6469H8.62297C9.20019 15.1755 10.086 13.8441 11.2164 12.7406V9.62205C10.2129 9.37945 9.1786 9.29054 8.14698 9.35692C6.6294 11.1491 5.71429 13.4677 5.71429 16C5.71429 16.2173 5.72102 16.433 5.7343 16.6469ZM22.9116 19.3483C23.8049 18.4384 24.5225 17.3714 25.0254 16.2017L23.6597 11.542C22.5016 10.9523 21.2395 10.587 19.9272 10.4698L17.6048 14.4567C18.3 15.8824 18.6825 17.4437 18.7275 19.033L22.9116 19.3483ZM23.4088 20.0636V23.1348C25.0358 21.4457 26.0906 19.2017 26.2613 16.7145L25.7741 16.6293C25.2096 17.9111 24.4065 19.0765 23.4088 20.0636ZM23.9985 9.53268C22.4866 7.66509 20.3338 6.33759 17.8747 5.88473C17.5281 6.28981 17.2149 6.71981 16.9371 7.17124L19.7454 9.596C21.1338 9.68779 22.4749 10.0354 23.7142 10.6149L23.9985 9.53268ZM16.0845 6.92604C16.3235 6.51838 16.5885 6.12608 16.8785 5.75128C16.5889 5.72678 16.2959 5.71429 16 5.71429C13.2876 5.71429 10.8204 6.76421 8.98261 8.47983C9.78915 8.49238 10.5923 8.59246 11.3784 8.77945C11.4114 8.75319 11.4487 8.73155 11.4894 8.71569L16.0845 6.92604ZM16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16C28 22.6274 22.6274 28 16 28Z"
                                                ></path>
                                            </svg>
                                            <p>FC Dynamo Kirov</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <ul>
                                            <li>1 <span>3.0</span></li>
                                            <li>draw <span>3.0</span></li>
                                            <li>2 <span>3.0</span></li>
                                            <li>+4</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="slider-item">
                                <a href="#" class="slider-content">
                                    <div class="title">
                                        <span>Soccer - Leaque 2</span>
                                        <span><i class="fas fa-play"></i> <strong>Live</strong></span>
                                    </div>
                                    <div class="body">
                                        <div>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M11.04 21.3793C12.368 22.0323 13.8288 22.393 15.3425 22.4261L17.8734 19.5272C17.9026 17.8165 17.5076 16.1267 16.7246 14.6139L11.7195 13.4485C10.675 14.4949 9.86495 15.7551 9.35078 17.1439L11.04 21.3793ZM10.7764 22.204L9.08458 23.6141C10.9111 25.274 13.3374 26.2857 16 26.2857C16.511 26.2857 17.0133 26.2485 17.5043 26.1765L15.3359 23.2833C13.7356 23.25 12.1884 22.8783 10.7764 22.204ZM5.7343 16.6469H8.62297C9.20019 15.1755 10.086 13.8441 11.2164 12.7406V9.62205C10.2129 9.37945 9.1786 9.29054 8.14698 9.35692C6.6294 11.1491 5.71429 13.4677 5.71429 16C5.71429 16.2173 5.72102 16.433 5.7343 16.6469ZM22.9116 19.3483C23.8049 18.4384 24.5225 17.3714 25.0254 16.2017L23.6597 11.542C22.5016 10.9523 21.2395 10.587 19.9272 10.4698L17.6048 14.4567C18.3 15.8824 18.6825 17.4437 18.7275 19.033L22.9116 19.3483ZM23.4088 20.0636V23.1348C25.0358 21.4457 26.0906 19.2017 26.2613 16.7145L25.7741 16.6293C25.2096 17.9111 24.4065 19.0765 23.4088 20.0636ZM23.9985 9.53268C22.4866 7.66509 20.3338 6.33759 17.8747 5.88473C17.5281 6.28981 17.2149 6.71981 16.9371 7.17124L19.7454 9.596C21.1338 9.68779 22.4749 10.0354 23.7142 10.6149L23.9985 9.53268ZM16.0845 6.92604C16.3235 6.51838 16.5885 6.12608 16.8785 5.75128C16.5889 5.72678 16.2959 5.71429 16 5.71429C13.2876 5.71429 10.8204 6.76421 8.98261 8.47983C9.78915 8.49238 10.5923 8.59246 11.3784 8.77945C11.4114 8.75319 11.4487 8.73155 11.4894 8.71569L16.0845 6.92604ZM16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16C28 22.6274 22.6274 28 16 28Z"
                                                ></path>
                                            </svg>
                                            <p>FC Dynamo Kirov</p>
                                        </div>
                                        <div class="status">
                                            <p>0 : 0</p>
                                            <span>Halftime</span>
                                        </div>
                                        <div>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M11.04 21.3793C12.368 22.0323 13.8288 22.393 15.3425 22.4261L17.8734 19.5272C17.9026 17.8165 17.5076 16.1267 16.7246 14.6139L11.7195 13.4485C10.675 14.4949 9.86495 15.7551 9.35078 17.1439L11.04 21.3793ZM10.7764 22.204L9.08458 23.6141C10.9111 25.274 13.3374 26.2857 16 26.2857C16.511 26.2857 17.0133 26.2485 17.5043 26.1765L15.3359 23.2833C13.7356 23.25 12.1884 22.8783 10.7764 22.204ZM5.7343 16.6469H8.62297C9.20019 15.1755 10.086 13.8441 11.2164 12.7406V9.62205C10.2129 9.37945 9.1786 9.29054 8.14698 9.35692C6.6294 11.1491 5.71429 13.4677 5.71429 16C5.71429 16.2173 5.72102 16.433 5.7343 16.6469ZM22.9116 19.3483C23.8049 18.4384 24.5225 17.3714 25.0254 16.2017L23.6597 11.542C22.5016 10.9523 21.2395 10.587 19.9272 10.4698L17.6048 14.4567C18.3 15.8824 18.6825 17.4437 18.7275 19.033L22.9116 19.3483ZM23.4088 20.0636V23.1348C25.0358 21.4457 26.0906 19.2017 26.2613 16.7145L25.7741 16.6293C25.2096 17.9111 24.4065 19.0765 23.4088 20.0636ZM23.9985 9.53268C22.4866 7.66509 20.3338 6.33759 17.8747 5.88473C17.5281 6.28981 17.2149 6.71981 16.9371 7.17124L19.7454 9.596C21.1338 9.68779 22.4749 10.0354 23.7142 10.6149L23.9985 9.53268ZM16.0845 6.92604C16.3235 6.51838 16.5885 6.12608 16.8785 5.75128C16.5889 5.72678 16.2959 5.71429 16 5.71429C13.2876 5.71429 10.8204 6.76421 8.98261 8.47983C9.78915 8.49238 10.5923 8.59246 11.3784 8.77945C11.4114 8.75319 11.4487 8.73155 11.4894 8.71569L16.0845 6.92604ZM16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16C28 22.6274 22.6274 28 16 28Z"
                                                ></path>
                                            </svg>
                                            <p>FC Dynamo Kirov</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <ul>
                                            <li>1 <span>3.0</span></li>
                                            <li>draw <span>3.0</span></li>
                                            <li>2 <span>3.0</span></li>
                                            <li>+4</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="slider-item">
                                <a href="#" class="slider-content">
                                    <div class="title">
                                        <span>Soccer - Leaque 2</span>
                                        <span><i class="fas fa-play"></i> <strong>Live</strong></span>
                                    </div>
                                    <div class="body">
                                        <div>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M11.04 21.3793C12.368 22.0323 13.8288 22.393 15.3425 22.4261L17.8734 19.5272C17.9026 17.8165 17.5076 16.1267 16.7246 14.6139L11.7195 13.4485C10.675 14.4949 9.86495 15.7551 9.35078 17.1439L11.04 21.3793ZM10.7764 22.204L9.08458 23.6141C10.9111 25.274 13.3374 26.2857 16 26.2857C16.511 26.2857 17.0133 26.2485 17.5043 26.1765L15.3359 23.2833C13.7356 23.25 12.1884 22.8783 10.7764 22.204ZM5.7343 16.6469H8.62297C9.20019 15.1755 10.086 13.8441 11.2164 12.7406V9.62205C10.2129 9.37945 9.1786 9.29054 8.14698 9.35692C6.6294 11.1491 5.71429 13.4677 5.71429 16C5.71429 16.2173 5.72102 16.433 5.7343 16.6469ZM22.9116 19.3483C23.8049 18.4384 24.5225 17.3714 25.0254 16.2017L23.6597 11.542C22.5016 10.9523 21.2395 10.587 19.9272 10.4698L17.6048 14.4567C18.3 15.8824 18.6825 17.4437 18.7275 19.033L22.9116 19.3483ZM23.4088 20.0636V23.1348C25.0358 21.4457 26.0906 19.2017 26.2613 16.7145L25.7741 16.6293C25.2096 17.9111 24.4065 19.0765 23.4088 20.0636ZM23.9985 9.53268C22.4866 7.66509 20.3338 6.33759 17.8747 5.88473C17.5281 6.28981 17.2149 6.71981 16.9371 7.17124L19.7454 9.596C21.1338 9.68779 22.4749 10.0354 23.7142 10.6149L23.9985 9.53268ZM16.0845 6.92604C16.3235 6.51838 16.5885 6.12608 16.8785 5.75128C16.5889 5.72678 16.2959 5.71429 16 5.71429C13.2876 5.71429 10.8204 6.76421 8.98261 8.47983C9.78915 8.49238 10.5923 8.59246 11.3784 8.77945C11.4114 8.75319 11.4487 8.73155 11.4894 8.71569L16.0845 6.92604ZM16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16C28 22.6274 22.6274 28 16 28Z"
                                                ></path>
                                            </svg>
                                            <p>FC Dynamo Kirov</p>
                                        </div>
                                        <div class="status">
                                            <p>0 : 0</p>
                                            <span>Halftime</span>
                                        </div>
                                        <div>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M11.04 21.3793C12.368 22.0323 13.8288 22.393 15.3425 22.4261L17.8734 19.5272C17.9026 17.8165 17.5076 16.1267 16.7246 14.6139L11.7195 13.4485C10.675 14.4949 9.86495 15.7551 9.35078 17.1439L11.04 21.3793ZM10.7764 22.204L9.08458 23.6141C10.9111 25.274 13.3374 26.2857 16 26.2857C16.511 26.2857 17.0133 26.2485 17.5043 26.1765L15.3359 23.2833C13.7356 23.25 12.1884 22.8783 10.7764 22.204ZM5.7343 16.6469H8.62297C9.20019 15.1755 10.086 13.8441 11.2164 12.7406V9.62205C10.2129 9.37945 9.1786 9.29054 8.14698 9.35692C6.6294 11.1491 5.71429 13.4677 5.71429 16C5.71429 16.2173 5.72102 16.433 5.7343 16.6469ZM22.9116 19.3483C23.8049 18.4384 24.5225 17.3714 25.0254 16.2017L23.6597 11.542C22.5016 10.9523 21.2395 10.587 19.9272 10.4698L17.6048 14.4567C18.3 15.8824 18.6825 17.4437 18.7275 19.033L22.9116 19.3483ZM23.4088 20.0636V23.1348C25.0358 21.4457 26.0906 19.2017 26.2613 16.7145L25.7741 16.6293C25.2096 17.9111 24.4065 19.0765 23.4088 20.0636ZM23.9985 9.53268C22.4866 7.66509 20.3338 6.33759 17.8747 5.88473C17.5281 6.28981 17.2149 6.71981 16.9371 7.17124L19.7454 9.596C21.1338 9.68779 22.4749 10.0354 23.7142 10.6149L23.9985 9.53268ZM16.0845 6.92604C16.3235 6.51838 16.5885 6.12608 16.8785 5.75128C16.5889 5.72678 16.2959 5.71429 16 5.71429C13.2876 5.71429 10.8204 6.76421 8.98261 8.47983C9.78915 8.49238 10.5923 8.59246 11.3784 8.77945C11.4114 8.75319 11.4487 8.73155 11.4894 8.71569L16.0845 6.92604ZM16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16C28 22.6274 22.6274 28 16 28Z"
                                                ></path>
                                            </svg>
                                            <p>FC Dynamo Kirov</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <ul>
                                            <li>1 <span>3.0</span></li>
                                            <li>draw <span>3.0</span></li>
                                            <li>2 <span>3.0</span></li>
                                            <li>+4</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="slider-item">
                                <a href="#" class="slider-content">
                                    <div class="title">
                                        <span>Soccer - Leaque 2</span>
                                        <span><i class="fas fa-play"></i> <strong>Live</strong></span>
                                    </div>
                                    <div class="body">
                                        <div>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M11.04 21.3793C12.368 22.0323 13.8288 22.393 15.3425 22.4261L17.8734 19.5272C17.9026 17.8165 17.5076 16.1267 16.7246 14.6139L11.7195 13.4485C10.675 14.4949 9.86495 15.7551 9.35078 17.1439L11.04 21.3793ZM10.7764 22.204L9.08458 23.6141C10.9111 25.274 13.3374 26.2857 16 26.2857C16.511 26.2857 17.0133 26.2485 17.5043 26.1765L15.3359 23.2833C13.7356 23.25 12.1884 22.8783 10.7764 22.204ZM5.7343 16.6469H8.62297C9.20019 15.1755 10.086 13.8441 11.2164 12.7406V9.62205C10.2129 9.37945 9.1786 9.29054 8.14698 9.35692C6.6294 11.1491 5.71429 13.4677 5.71429 16C5.71429 16.2173 5.72102 16.433 5.7343 16.6469ZM22.9116 19.3483C23.8049 18.4384 24.5225 17.3714 25.0254 16.2017L23.6597 11.542C22.5016 10.9523 21.2395 10.587 19.9272 10.4698L17.6048 14.4567C18.3 15.8824 18.6825 17.4437 18.7275 19.033L22.9116 19.3483ZM23.4088 20.0636V23.1348C25.0358 21.4457 26.0906 19.2017 26.2613 16.7145L25.7741 16.6293C25.2096 17.9111 24.4065 19.0765 23.4088 20.0636ZM23.9985 9.53268C22.4866 7.66509 20.3338 6.33759 17.8747 5.88473C17.5281 6.28981 17.2149 6.71981 16.9371 7.17124L19.7454 9.596C21.1338 9.68779 22.4749 10.0354 23.7142 10.6149L23.9985 9.53268ZM16.0845 6.92604C16.3235 6.51838 16.5885 6.12608 16.8785 5.75128C16.5889 5.72678 16.2959 5.71429 16 5.71429C13.2876 5.71429 10.8204 6.76421 8.98261 8.47983C9.78915 8.49238 10.5923 8.59246 11.3784 8.77945C11.4114 8.75319 11.4487 8.73155 11.4894 8.71569L16.0845 6.92604ZM16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16C28 22.6274 22.6274 28 16 28Z"
                                                ></path>
                                            </svg>
                                            <p>FC Dynamo Kirov</p>
                                        </div>
                                        <div class="status">
                                            <p>0 : 0</p>
                                            <span>Halftime</span>
                                        </div>
                                        <div>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M11.04 21.3793C12.368 22.0323 13.8288 22.393 15.3425 22.4261L17.8734 19.5272C17.9026 17.8165 17.5076 16.1267 16.7246 14.6139L11.7195 13.4485C10.675 14.4949 9.86495 15.7551 9.35078 17.1439L11.04 21.3793ZM10.7764 22.204L9.08458 23.6141C10.9111 25.274 13.3374 26.2857 16 26.2857C16.511 26.2857 17.0133 26.2485 17.5043 26.1765L15.3359 23.2833C13.7356 23.25 12.1884 22.8783 10.7764 22.204ZM5.7343 16.6469H8.62297C9.20019 15.1755 10.086 13.8441 11.2164 12.7406V9.62205C10.2129 9.37945 9.1786 9.29054 8.14698 9.35692C6.6294 11.1491 5.71429 13.4677 5.71429 16C5.71429 16.2173 5.72102 16.433 5.7343 16.6469ZM22.9116 19.3483C23.8049 18.4384 24.5225 17.3714 25.0254 16.2017L23.6597 11.542C22.5016 10.9523 21.2395 10.587 19.9272 10.4698L17.6048 14.4567C18.3 15.8824 18.6825 17.4437 18.7275 19.033L22.9116 19.3483ZM23.4088 20.0636V23.1348C25.0358 21.4457 26.0906 19.2017 26.2613 16.7145L25.7741 16.6293C25.2096 17.9111 24.4065 19.0765 23.4088 20.0636ZM23.9985 9.53268C22.4866 7.66509 20.3338 6.33759 17.8747 5.88473C17.5281 6.28981 17.2149 6.71981 16.9371 7.17124L19.7454 9.596C21.1338 9.68779 22.4749 10.0354 23.7142 10.6149L23.9985 9.53268ZM16.0845 6.92604C16.3235 6.51838 16.5885 6.12608 16.8785 5.75128C16.5889 5.72678 16.2959 5.71429 16 5.71429C13.2876 5.71429 10.8204 6.76421 8.98261 8.47983C9.78915 8.49238 10.5923 8.59246 11.3784 8.77945C11.4114 8.75319 11.4487 8.73155 11.4894 8.71569L16.0845 6.92604ZM16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16C28 22.6274 22.6274 28 16 28Z"
                                                ></path>
                                            </svg>
                                            <p>FC Dynamo Kirov</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <ul>
                                            <li>1 <span>3.0</span></li>
                                            <li>draw <span>3.0</span></li>
                                            <li>2 <span>3.0</span></li>
                                            <li>+4</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- image cart --}}
                    <div class="image-cart">
                        <div class="section-title-with-arrows">
                            <h4>BC Exclusive</h4>
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
                            <h4>Slots</h4>
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

                    {{-- Draw --}}
                    <div class="draw">
                        <div class="section-title-with-arrows">
                            <h4>Upcoming Lottery Draw</h4>
                            <a href="#">All <i class="fas fa-chevron-right"></i></a>
                        </div>

                        <div class="draw-slider right-arrows">
                            <div class="slider-item">
                                <div class="flag">
                                    <img src="{{ asset('public/new_home_page/flag.png') }}" alt="" />
                                </div>
                                <span class="d-block">Poland Keno</span>
                                <span class="d-block">20/27</span>
                                <p>$1000</p>
                                <small>Next Draw Start in</small>
                                <div class="time">
                                    <p>00h</p>
                                    <span>:</span>
                                    <p>00m</p>
                                    <span>:</span>
                                    <p>20s</p>
                                </div>
                                <a href="#">Bet Now</a>
                            </div>
                            <div class="slider-item gradient-1">
                                <div class="flag">
                                    <img src="{{ asset('public/new_home_page/flag.png') }}" alt="" />
                                </div>
                                <span class="d-block">Poland Keno</span>
                                <span class="d-block">20/27</span>
                                <p>$1000</p>
                                <small>Next Draw Start in</small>
                                <div class="time">
                                    <p>00h</p>
                                    <span>:</span>
                                    <p>00m</p>
                                    <span>:</span>
                                    <p>20s</p>
                                </div>
                                <a href="#">Bet Now</a>
                            </div>
                            <div class="slider-item gradient-2">
                                <div class="flag">
                                    <img src="{{ asset('public/new_home_page/flag.png') }}" alt="" />
                                </div>
                                <span class="d-block">Poland Keno</span>
                                <span class="d-block">20/27</span>
                                <p>$1000</p>
                                <small>Next Draw Start in</small>
                                <div class="time">
                                    <p>00h</p>
                                    <span>:</span>
                                    <p>00m</p>
                                    <span>:</span>
                                    <p>20s</p>
                                </div>
                                <a href="#">Bet Now</a>
                            </div>
                            <div class="slider-item gradient-3">
                                <div class="flag">
                                    <img src="{{ asset('public/new_home_page/flag.png') }}" alt="" />
                                </div>
                                <span class="d-block">Poland Keno</span>
                                <span class="d-block">20/27</span>
                                <p>$1000</p>
                                <small>Next Draw Start in</small>
                                <div class="time">
                                    <p>00h</p>
                                    <span>:</span>
                                    <p>00m</p>
                                    <span>:</span>
                                    <p>20s</p>
                                </div>
                                <a href="#">Bet Now</a>
                            </div>
                            <div class="slider-item gradient-2">
                                <div class="flag">
                                    <img src="{{ asset('public/new_home_page/flag.png') }}" alt="" />
                                </div>
                                <span class="d-block">Poland Keno</span>
                                <span class="d-block">20/27</span>
                                <p>$1000</p>
                                <small>Next Draw Start in</small>
                                <div class="time">
                                    <p>00h</p>
                                    <span>:</span>
                                    <p>00m</p>
                                    <span>:</span>
                                    <p>20s</p>
                                </div>
                                <a href="#">Bet Now</a>
                            </div>
                            <div class="slider-item">
                                <div class="flag">
                                    <img src="{{ asset('public/new_home_page/flag.png') }}" alt="" />
                                </div>
                                <span class="d-block">Poland Keno</span>
                                <span class="d-block">20/27</span>
                                <p>$1000</p>
                                <small>Next Draw Start in</small>
                                <div class="time">
                                    <p>00h</p>
                                    <span>:</span>
                                    <p>00m</p>
                                    <span>:</span>
                                    <p>20s</p>
                                </div>
                                <a href="#">Bet Now</a>
                            </div>
                            <div class="slider-item gradient-1">
                                <div class="flag">
                                    <img src="{{ asset('public/new_home_page/flag.png') }}" alt="" />
                                </div>
                                <span class="d-block">Poland Keno</span>
                                <span class="d-block">20/27</span>
                                <p>$1000</p>
                                <small>Next Draw Start in</small>
                                <div class="time">
                                    <p>00h</p>
                                    <span>:</span>
                                    <p>00m</p>
                                    <span>:</span>
                                    <p>20s</p>
                                </div>
                                <a href="#">Bet Now</a>
                            </div>
                        </div>
                    </div>

                    {{-- image cart (live casino) --}}
                    <div class="image-cart">
                        <div class="section-title-with-arrows">
                            <h4>Live Casino</h4>
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

                    {{-- bonus --}}
                    <div class="bonus">
                        <div class="conainer-fluid bonus-content">
                            <div class="row align-items-center">
                                <div class="col-lg-4 my-3 my-lg-0">
                                    <h2 class="text-center text-lg-left mb-0"><span>300%</span> Deposit Bonus</h2>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="brands justify-content-center">
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand.png') }}" alt="" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand.png') }}" alt="" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand.png') }}" alt="" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand.png') }}" alt="" />
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 ">
                                    <ul class="icons justify-content-center justify-content-lg-right">
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand-icon.png') }}" alt="" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand-icon-1.png') }}" alt="" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand-icon.png') }}" alt="" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand-icon-1.png') }}" alt="" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand-icon.png') }}" alt="" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand-icon-1.png') }}" alt="" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand-icon.png') }}" alt="" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand-icon-1.png') }}" alt="" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand-icon.png') }}" alt="" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/new_home_page/brand-icon-1.png') }}" alt="" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- image cart (All Bingo Games) --}}
                    <div class="image-cart">
                        <div class="section-title-with-arrows">
                            <h4>All Bingo Games</h4>
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

                    {{-- round-race --}}
                    <div class="round-race">
                        <div class="section-title-with-arrows">
                            <h4>Latest round & Race</h4>
                            <ul class="tab-list" id="tab_list">
                                <li data-content=".latest" class="active">
                                    Latest Bet
                                </li>
                                <li data-content=".high-roll">High Roller</li>
                                <li data-content=".contest">Wager Contest</li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-item latest">
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Game</th>
                                                <th scope="col">Player</th>
                                                <th scope="col">Bet Amount</th>
                                                <th scope="col">Multiplier</th>
                                                <th scope="col">Profit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Dummy Game</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">John Doe</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>1.234567</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>1.50x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span class="plus-profit">+0.123456</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Example Game</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Jane Smith</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>0.987654</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>3.00x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>-0.987654</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Test Match</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Alice Johnson</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>2.468135</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>0.75x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+0.456789</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Rocket Blitz</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Michael Carter</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>3.141592</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>4.20x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>-1.414213</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Crypto Crash</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Emily Davis</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>0.555000</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>1.25x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+0.694444</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Dice Roll</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Robert Lee</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>0.777777</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>2.75x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+1.234567</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Lucky Spin</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Sophia Martinez</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>1.005432</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>1.80x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+0.809321</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Mega Wheel</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">David Kim</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>2.300100</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>2.00x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+2.300100</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Spin & Win</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Olivia Brown</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>0.625000</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>1.20x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>-0.125000</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-item high-roll d-none">
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Game</th>
                                                <th scope="col">Player</th>
                                                <th scope="col">Bet Amount</th>
                                                <th scope="col">Multiplier</th>
                                                <th scope="col">Profit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Dice Roll</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Robert Lee</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>0.777777</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>2.75x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+1.234567</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Lucky Spin</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Sophia Martinez</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>1.005432</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>1.80x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+0.809321</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Mega Wheel</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">David Kim</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>2.300100</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>2.00x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+2.300100</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Spin & Win</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Olivia Brown</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>0.625000</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>1.20x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>-0.125000</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Dummy Game</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">John Doe</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>1.234567</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>1.50x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span class="plus-profit">+0.123456</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Example Game</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Jane Smith</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>0.987654</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>3.00x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>-0.987654</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Test Match</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Alice Johnson</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>2.468135</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>0.75x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+0.456789</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Rocket Blitz</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Michael Carter</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>3.141592</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>4.20x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>-1.414213</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Crypto Crash</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Emily Davis</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>0.555000</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>1.25x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+0.694444</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-item contest d-none">
                                <div class="overview">
                                    <div class="cup">
                                        <div class="img">
                                            <img src="{{asset('public/new_home_page/cup.png')}}" alt="hello" />
                                        </div>
                                        <div class="text">
                                            <span class="title d-block">Daily Contest</span>

                                            <span class="pool d-block">Contest prize pool</span>

                                            <p class="money">96,066.94 BCD</p>
                                        </div>
                                    </div>

                                    <div class="time">
                                        <span class="title">Time Remaining</span>
                                        <div class="clock">
                                            <p>
                                                <strong>03</strong>
                                                <span>Hour</span>
                                            </p>
                                            <span class="separator">:</span>
                                            <p>
                                                <strong>11</strong>
                                                <span>Minute</span>
                                            </p>
                                            <span class="separator">:</span>
                                            <p>
                                                <strong>40</strong>
                                                <span>Second</span>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="champion">
                                        <span class="title">Last Champion</span>
                                        <div class="content">
                                            <div class="img">
                                                <img src="{{ asset('public/new_home_page/user-profile-1.png') }}" alt="aa" />
                                            </div>
                                            <div class="text">
                                                <span class="d-block">Hidden</span>
                                                <span class="d-block">Profit (50%)</span>
                                                <span class="d-block">49,465.259 BCD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Game</th>
                                                <th scope="col">Player</th>
                                                <th scope="col">Bet Amount</th>
                                                <th scope="col">Multiplier</th>
                                                <th scope="col">Profit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Dummy Game</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">John Doe</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>1.234567</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>1.50x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+0.123456</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Example Game</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Jane Smith</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>0.987654</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>3.00x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>-0.987654</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Test Match</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Alice Johnson</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>2.468135</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>0.75x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+0.456789</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Rocket Blitz</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Michael Carter</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>3.141592</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>4.20x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>-1.414213</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Crypto Crash</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Emily Davis</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>0.555000</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>1.25x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+0.694444</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Dice Roll</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Robert Lee</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>0.777777</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>2.75x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+1.234567</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Lucky Spin</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Sophia Martinez</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>1.005432</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>1.80x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+0.809321</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Mega Wheel</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">David Kim</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>2.300100</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>2.00x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>+2.300100</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="game-name d-flex align-items-center">
                                                        <img src="{{asset('public/new_home_page/colour.png')}}" alt="" />
                                                        <span class="pl-2">Spin & Win</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="player">
                                                        <a href="#">Olivia Brown</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="amount d-flex align-items-center justify-content-center">
                                                        <span>0.625000</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="multipler">
                                                        <span>1.20x</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="profit d-flex align-items-center justify-content-end">
                                                        <span>-0.125000</span>
                                                        <img src="{{asset('public/new_home_page/flag.png')}}" alt="" />
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Hot Games --}}
                    <div class="image-cart">
                        <div class="section-title-with-arrows">
                            <h4>Hot Games</h4>
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

                    {{-- About --}}
                    <div class="about">
                        <div class="container-fluid px-0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="text-area">
                                        <h2 class="about-title">Crypto Online Casino</h2>
                                        <p>Casinos online have not always been around, but we can safely say that online casinos have been used a lot since they came on the market. And it's not in short demand nor options, and now in 2023, we have 1000s and 1000s to pick from – it's just a matter of what you like and what payment options you would like to see at the casino.</p>
                                        <p>Players are always looking for something new, which will help make the gaming experience so much better and more accessible. Allowing the player to focus on the absolute fun of a casino, that's right, the games themselves.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h2 class="about-title">Help us improve your experience</h2>
                                    <p>Get rewarded for your valuable feedback!</p>
                                    <p>Email us: <a href="#">feedback@bcgame.com</a></p>
                                    <p>If you find any vulnerabilities or leaks, please contact us at security@bc.game (security-related issues only; non-related issues will be omitted).</p>
                                    <p>Security email: <a href="#">security@bcgame.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Brands --}}
                    <div class="brands-section brand-bg border-top border-bottom">
                        <ul>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                        </ul>
                    </div>

                    <div class="brands-section border-bottom">
                        <ul>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                            <li>
                                <img src="{{ asset('public/new_home_page/brand-img.png') }}" alt="brand">
                            </li>
                        </ul>
                    </div>

                    {{-- Footer --}}
                    <footer class="footer">
                        <div class="container-fluid px-0">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="footer-content">
                                        <h3>Casino</h3>
                                        <ul>
                                            <li><a href="#">Casino Home</a></li>
                                            <li><a href="#">Slots</a></li>
                                            <li><a href="#">Live Casino</a></li>
                                            <li><a href="#">New Releases</a></li>
                                            <li><a href="#">Recommended</a></li>
                                            <li><a href="#">Table Game</a></li>
                                            <li><a href="#">BlackJack</a></li>
                                            <li><a href="#">Roulette</a></li>
                                            <li><a href="#">Baccarat</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="footer-content">
                                        <h3>Casino</h3>
                                        <ul>
                                            <li><a href="#">Casino Home</a></li>
                                            <li><a href="#">Slots</a></li>
                                            <li><a href="#">Live Casino</a></li>
                                            <li><a href="#">New Releases</a></li>
                                            <li><a href="#">Recommended</a></li>
                                            <li><a href="#">Table Game</a></li>
                                            <li><a href="#">BlackJack</a></li>
                                            <li><a href="#">Roulette</a></li>
                                            <li><a href="#">Baccarat</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="footer-content">
                                        <h3>Casino</h3>
                                        <ul>
                                            <li><a href="#">Casino Home</a></li>
                                            <li><a href="#">Slots</a></li>
                                            <li><a href="#">Live Casino</a></li>
                                            <li><a href="#">New Releases</a></li>
                                            <li><a href="#">Recommended</a></li>
                                            <li><a href="#">Table Game</a></li>
                                            <li><a href="#">BlackJack</a></li>
                                            <li><a href="#">Roulette</a></li>
                                            <li><a href="#">Baccarat</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="footer-content">
                                        <h3>Casino</h3>
                                        <ul class="socials">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        </ul>

                                        <h3>Casino</h3>
                                        <ul class="socials">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="text-center text-sm mt-3 pt-3 border-top">Copyright ©2025 Twocent Technology Limited ALL RIGHTS RESERVED. 1BTC=$110,904.67</p>
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
