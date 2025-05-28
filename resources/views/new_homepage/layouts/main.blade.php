<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut tortor rutrum massa efficitur tincidunt vel nec lacus. Curabitur porta aliquet diam, eu gravida neque lacinia." />
        <meta name="keywords" content="donations,support,creators,sponzy,subscription,content" />
        <meta name="theme-color" content="#ffb200" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>@yield('title', 'Yelouwh - Support Creators Content')</title>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('public/css/fontawesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{asset('public/new_home_page/slick/slick.css')}}" />
        <link rel="stylesheet" href="{{ asset('public/css/new_home_page.css') }}" />
        
        @stack('styles')
    </head>
    <body class="new-home-page">
        @include('new_homepage.components.header')

        <main class="new-home-page-main">
            @include('new_homepage.components.sidebar')
            
            <div class="content-area">
                <div class="main-content">
                    @yield('content')
                    @include('new_homepage.components.footer')
                </div>
            </div>
        </main>

      

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="{{ asset('public/js/jqueryTimeago_'.Lang::locale().'.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/new_home_page/slick/slick.min.js')}}"></script>
        
        @include('new_homepage.scripts.main')
        @stack('scripts')
    </body>
</html> 