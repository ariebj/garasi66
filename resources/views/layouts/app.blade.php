<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/cdda5b48e5.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
    <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
    <script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
    <style>
        .back-button__icon {
            fill: #ec4d37 !important;
        }
    </style>
    @livewireStyles
</head>

<body>
    <ons-page id="app">
        @auth
        <ons-toolbar>
            <div class="left">
                <ons-toolbar-button>
                    <ons-icon size="32px" style="color:#ec4d37" icon="md-shopping-cart"></ons-icon>
                </ons-toolbar-button>
            </div>
            <div class="center">
                {{config('app.name')}}
            </div>
            <div class="right">
                <ons-toolbar-button href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-front').submit();">
                    <ons-icon size="32px" style="color:#ec4d37" icon="md-square-right"></ons-icon>
                    <form id="logout-front" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ons-toolbar-button>
            </div>
        </ons-toolbar>
        @endauth
        <ons-page>
            @yield('content')
        </ons-page>
        @auth
        <ons-fab style="background-color:white;" position="bottom center" ripple>
            <ons-icon size="32px" style="color:#ec4d37" icon="md-store"></ons-icon>
        </ons-fab>
        <ons-bottom-toolbar modifier="transparent aligned" class="justify-content-between align-items-center pt-2">
            <a class="btn" href="{{ route('welcome') }}" ripple active>
                <ons-icon size="32px" style="color:#ec4d37" icon="md-home"></ons-icon>
            </a>
            <ons-toolbar-button ripple>
                <ons-icon size="32px" style="color:#ec4d37" icon="md-receipt"></ons-icon>
            </ons-toolbar-button>

            <ons-toolbar-button ripple>
                <span class="notification position-absolute">1</span>
                <ons-icon size="32px" style="color:#ec4d37" icon="md-notifications">
                </ons-icon>
            </ons-toolbar-button>
            <ons-toolbar-button ripple>
                <ons-icon size="32px" style="color:#ec4d37" icon="md-menu"></ons-icon>
            </ons-toolbar-button>
        </ons-bottom-toolbar>
        @endauth
    </ons-page>
    @livewireScripts
    @stack('scripts')
    <script>
        //    
    </script>
</body>

</html>