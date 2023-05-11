<!DOCTYPE html>
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
    <link rel="stylesheet" href="node_modules/onsenui/css/onsenui-core.min.css">
    <link rel="stylesheet" href="node_modules/onsenui/css/onsen-css-components.min.css">
    <script src="node_modules/onsenui/js/onsenui.min.js"></script>
    <style>
        .back-button__icon {
            fill: #ec4d37 !important;
        }

        .page__background {
            background: transparent !important;
        }

        .page__content {
            background: rgba(236, 76, 55, 0.5) !important;
        }

        .bg-orange {
            background: rgba(236, 76, 55, 1) !important;
            color: white;
        }

        a {
            text-decoration: none !important;
        }
    </style>
    @livewireStyles
</head>

<body>
    <ons-if platform="ios android">
        <ons-splitter>
            <ons-splitter-side id="menu" side="left" class="w-75" collapse swipeable>
                <ons-page>
                    <ons-toolbar class="bg-orange">
                        <div class="center">
                            <span class="text-white">{{__('MENU')}}</span>
                        </div>
                    </ons-toolbar>
                    <ons-list>
                        <a href="{{route('welcome')}}">
                            <ons-list-item ripple tappable>
                                Home
                            </ons-list-item>
                        </a>
                        <ons-list-item tappable>
                            Settings
                        </ons-list-item>
                        <ons-list-item tappable>
                            About
                        </ons-list-item>
                    </ons-list>
                </ons-page>
            </ons-splitter-side>
            <ons-page id="app">
                <ons-toolbar class="bg-white">
                    <div class="left">
                        <ons-toolbar-button onclick="fn.open()">
                            <ons-icon size="32px" style="color:#ec4d37" icon="md-sort-amount-desc"></ons-icon>
                        </ons-toolbar-button>
                    </div>
                    <div class="center">
                        {{config('app.name')}}
                    </div>
                    <div class="right">
                        <ons-toolbar-button onclick="createAccountDialog()">
                            <ons-icon size="32px" style="color:#ec4d37" icon="md-account-circle"></ons-icon>
                        </ons-toolbar-button>
                    </div>
                </ons-toolbar>
                <ons-page>
                    <ons-carousel fullscreen swipeable auto-scroll overscrollable id="carousel" style="background-image:url('/public/images/mainbg-mobile.png');background-size:cover;">
                        <ons-carousel-item>
                            <ons-card class="p-0 bg-transparent border-0 text-white">
                                <ons-row>
                                    <ons-col class="col-sm-4 p-0">
                                        <img src="https://monaca.io/img/logos/download_image_onsenui_01.png" alt="Onsen UI" class="img-fluid rounded-start">
                                    </ons-col>
                                    <ons-col class="col-sm-8 px-1">
                                        <div class="card-title">PROMO 1</div>
                                        <p class="card-text">{{__('Deskripsi promo 1')}}</p>
                                    </ons-col>
                                </ons-row>
                            </ons-card>
                        </ons-carousel-item>
                        <ons-carousel-item>
                            <ons-card class="p-0 bg-transparent border-0 text-white">
                                <ons-row>
                                    <ons-col class="col-sm-4 p-0">
                                        <img src="https://monaca.io/img/logos/download_image_onsenui_01.png" alt="Onsen UI" class="img-fluid rounded-start">
                                    </ons-col>
                                    <ons-col class="col-sm-8 px-1">
                                        <div class="card-title">PROMO 2</div>
                                        <p class="card-text">{{__('Deskripsi promo 2')}}</p>
                                    </ons-col>
                                </ons-row>
                            </ons-card>
                        </ons-carousel-item>
                        <ons-carousel-item>
                            <ons-card class="p-0 bg-transparent border-0 text-white">
                                <ons-row>
                                    <ons-col class="col-sm-4 p-0">
                                        <img src="https://monaca.io/img/logos/download_image_onsenui_01.png" alt="Onsen UI" class="img-fluid rounded-start">
                                    </ons-col>
                                    <ons-col class="col-sm-8 px-1">
                                        <div class="card-title">PROMO 3</div>
                                        <p class="card-text">{{__('Deskripsi promo 3')}}</p>
                                    </ons-col>
                                </ons-row>
                            </ons-card>
                        </ons-carousel-item>
                    </ons-carousel>
                    <ons-bottom-toolbar style="height:5rem;">
                        <ons-row class="h-50 px-1 justify-content-between align-items-center bg-orange">
                            <div class="title fw-bold fs-5 me-2">{{__('PESAN SEKARANG')}}</div>
                            <ons-icon class="animate__animated animate__pulse  animate__infinite" size="18px" icon="md-caret-up-circle"></ons-icon>
                        </ons-row>
                        <ons-row class="h-50 justify-content-start align-items-center px-1 bg-orange">
                            <ons-col class="w-50">
                                <small class="card-text text-wrap">{{__('Jl. Babakan Koda No.66, Majalengka 45411')}}</small>
                            </ons-col>
                            <ons-col class="w-50 text-center">
                                <ons-icon icon="md-whatsapp"></ons-icon>
                                <small>0811219666</small>
                            </ons-col>
                        </ons-row>
                    </ons-bottom-toolbar>
                </ons-page>
            </ons-page>
        </ons-splitter>
    </ons-if>
    <ons-if platform="windows other">
        <ons-splitter>
            <ons-splitter-side id="menu" side="left" class="w-25" collapse swipeable>
                <ons-page>
                    <ons-toolbar class="bg-orange">
                        <div class="left">
                            <img src="{{asset('images/logo/logo-white.png')}}" style="height:36px;width:36px;" class="rounded-circle" />
                        </div>
                        <div class="center">
                            <span class="text-white">{{__('Halo Sobat GG!')}}</span>
                        </div>
                    </ons-toolbar>
                    <ons-list>

                        <a href="{{route('welcome')}}">
                            <ons-list-item ripple tappable>
                                Home
                            </ons-list-item>
                        </a>
                        <ons-list-item tappable>
                            Settings
                        </ons-list-item>
                        <ons-list-item tappable>
                            About
                        </ons-list-item>
                    </ons-list>
                    <ons-bottom-toolbar modifier="transparent">
                        <a href="{{route('register')}}">
                            <ons-button class="w-50 text-center bg-orange">
                                {{__('Daftar')}}
                            </ons-button>
                        </a>
                        <a href="{{route('login')}}">
                            <ons-button class="w-50 text-center bg-orange">
                                {{__('Masuk')}}
                            </ons-button>
                        </a>
                    </ons-bottom-toolbar>
                </ons-page>
            </ons-splitter-side>
            <ons-page id="app">
                <ons-toolbar class="bg-white">
                    <div class="left">
                        <ons-toolbar-button onclick="fn.open()">
                            <ons-icon size="32px" style="color:#ec4d37" icon="md-sort-amount-desc"></ons-icon>
                        </ons-toolbar-button>
                    </div>
                    <div class="center">
                        {{config('app.name')}}
                    </div>
                    <div class="right">
                        <ons-toolbar-button onclick="createAccountDialog()">
                            <ons-icon size="32px" style="color:#ec4d37" icon="md-account-circle"></ons-icon>
                        </ons-toolbar-button>
                    </div>
                </ons-toolbar>
                <ons-page>
                    <ons-carousel direction="horizontal" fullscreen swipeable auto-scroll overscrollable id="carousel" style="background-image:url('/public/images/mainbg.png');background-size:cover;">
                        <ons-carousel-item>
                            <ons-card class="p-0 bg-transparent border-0 text-white">
                                <ons-row>
                                    <ons-col class="col-sm-4 p-0">
                                        <img src="https://monaca.io/img/logos/download_image_onsenui_01.png" alt="Onsen UI" class="img-fluid rounded-start">
                                    </ons-col>
                                    <ons-col class="col-sm-8 px-1">
                                        <div class="card-title">PROMO 1</div>
                                        <p class="card-text">{{__('Deskripsi promo 1')}}</p>
                                    </ons-col>
                                </ons-row>
                            </ons-card>
                        </ons-carousel-item>
                        <ons-carousel-item>
                            <ons-card class="p-0 bg-transparent border-0 text-white">
                                <ons-row>
                                    <ons-col class="col-sm-4 p-0">
                                        <img src="https://monaca.io/img/logos/download_image_onsenui_01.png" alt="Onsen UI" class="img-fluid rounded-start">
                                    </ons-col>
                                    <ons-col class="col-sm-8 px-1">
                                        <div class="card-title">PROMO 2</div>
                                        <p class="card-text">{{__('Deskripsi promo 2')}}</p>
                                    </ons-col>
                                </ons-row>
                            </ons-card>
                        </ons-carousel-item>
                        <ons-carousel-item>
                            <ons-card class="p-0 bg-transparent border-0 text-white">
                                <ons-row>
                                    <ons-col class="col-sm-4 p-0">
                                        <img src="https://monaca.io/img/logos/download_image_onsenui_01.png" alt="Onsen UI" class="img-fluid rounded-start">
                                    </ons-col>
                                    <ons-col class="col-sm-8 px-1">
                                        <div class="card-title">PROMO 3</div>
                                        <p class="card-text">{{__('Deskripsi promo 3')}}</p>
                                    </ons-col>
                                </ons-row>
                            </ons-card>
                        </ons-carousel-item>
                    </ons-carousel>
                    <ons-bottom-toolbar style="height:5rem;">
                        <ons-row class="h-50 px-1 justify-content-between align-items-center bg-orange">
                            <div class="title fw-bold fs-5 me-2">{{__('PESAN SEKARANG')}}</div>
                            <ons-icon class="animate__animated animate__pulse  animate__infinite" size="18px" icon="md-caret-up-circle"></ons-icon>
                        </ons-row>
                        <ons-row class="h-50 justify-content-start align-items-center px-1 bg-orange">
                            <ons-col class="w-50">
                                <small class="card-text text-wrap">{{__('Jl. Babakan Koda No.66, Majalengka 45411')}}</small>
                            </ons-col>
                            <ons-col class="w-50 text-center">
                                <ons-icon icon="md-whatsapp"></ons-icon>
                                <small>0811219666</small>
                            </ons-col>
                        </ons-row>
                    </ons-bottom-toolbar>
                </ons-page>
            </ons-page>
        </ons-splitter>
    </ons-if>
    <template id="account-action">
        <ons-alert-dialog id="my-account-dialog" modifier="rowfooter">
            <div class="alert-dialog-title">Akun</div>
            <div class="alert-dialog-content">
                {{__('Silahkan Login atau Register jika belum memiliki akun.')}}
            </div>
            <div class="alert-dialog-footer">
                <ons-alert-dialog-button class="text-danger" onclick="hideAlertDialog()">
                    {{__('Cancel')}}
                </ons-alert-dialog-button>
                <ons-alert-dialog-button>
                    <a href="{{ route('login') }}" style="color:#ec4d37" class="text-decoration-none">
                        {{__('Login')}}
                    </a>
                </ons-alert-dialog-button>
                <ons-alert-dialog-button>
                    <a href="{{ route('register') }}" style="color:#ec4d37" class="text-decoration-none">
                        {{__('Register')}}
                    </a>
                </ons-alert-dialog-button>
            </div>
        </ons-alert-dialog>
    </template>
    @livewireScripts
    @stack('scripts')
    <script>
        var createAccountDialog = function() {
            var dialog = document.getElementById('my-account-dialog');

            if (dialog) {
                dialog.show();
            } else {
                ons.createElement('account-action', {
                        append: true
                    })
                    .then(function(dialog) {
                        dialog.show();
                    });
            }
        };
        var hideAlertDialog = function() {
            document
                .getElementById('my-account-dialog')
                .hide();
        };

        // Carousel
        var prev = function() {
            var carousel = document.getElementById('carousel');
            carousel.prev();
        };

        var next = function() {
            var carousel = document.getElementById('carousel');
            carousel.next();
        };

        ons.ready(function() {
            var carousel = document.addEventListener('postchange', function(event) {
                console.log('Changed to ' + event.activeIndex)
            });
        });

        setInterval(function() {
            var carousel = document.getElementById('carousel');
            if (carousel.getActiveIndex() === carousel.itemCount - 1)
                carousel.first();
            else
                carousel.next();
        }, 5000);

        setInterval(function() {
            var carousel = document.getElementById('carousel');
            if (carousel.getActiveIndex() === carousel.itemCount - 1)
                carousel.first();
            else
                carousel.next();
        }, 5000);

        window.fn = {};

        window.fn.open = function() {
            var menu = document.getElementById('menu');
            menu.open();
        };
    </script>
</body>

</html>