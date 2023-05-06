@extends('layouts.app')

@section('content')
<ons-carousel swipeable auto-scroll overscrollable id="carousel" class="h-50">
    <ons-carousel-item style="background-color: #085078;">
        <div style=" text-align: center; font-size: 30px; margin-top: 20px; color: #fff;">
            BLUE
        </div>
    </ons-carousel-item>
    <ons-carousel-item style="background-color: #373B44;">
        <div style="text-align: center; font-size: 30px; margin-top: 20px; color: #fff;">
            DARK
        </div>
    </ons-carousel-item>
    <ons-carousel-item style="background-color: #D38312;">
        <div style="text-align: center; font-size: 30px; margin-top: 20px; color: #fff;">
            ORANGE
        </div>
    </ons-carousel-item>
</ons-carousel>
<ons-row>
    <ons-col>
        <ons-card class="shadow-sm">
            <img src="https://monaca.io/img/logos/download_image_onsenui_01.png" alt="Onsen UI" style="width: 100%">
            <div class="title">
                Awesome framework
            </div>
            <div class="content">
                <div>
                    <ons-button><ons-icon icon="ion-ios-thumbs-up"></ons-icon></ons-button>
                    <ons-button><ons-icon icon="ion-ios-share"></ons-icon></ons-button>
                </div>
                <ons-list>
                    <ons-list-header>Bindings</ons-list-header>
                    <ons-list-item>Vue</ons-list-item>
                    <ons-list-item>Angular</ons-list-item>
                    <ons-list-item>React</ons-list-item>
                </ons-list>
            </div>
        </ons-card>
    </ons-col>
    <ons-col>
        <ons-card class="shadow-sm">
            <img src="https://monaca.io/img/logos/download_image_onsenui_01.png" alt="Onsen UI" style="width: 100%">
            <div class="title">
                Awesome framework
            </div>
            <div class="content">
                <div>
                    <ons-button><ons-icon icon="ion-ios-thumbs-up"></ons-icon></ons-button>
                    <ons-button><ons-icon icon="ion-ios-share"></ons-icon></ons-button>
                </div>
                <ons-list>
                    <ons-list-header>Bindings</ons-list-header>
                    <ons-list-item>Vue</ons-list-item>
                    <ons-list-item>Angular</ons-list-item>
                    <ons-list-item>React</ons-list-item>
                </ons-list>
            </div>
        </ons-card>
    </ons-col>
    <ons-col>
        <ons-card class="shadow-sm">
            <img src="https://monaca.io/img/logos/download_image_onsenui_01.png" alt="Onsen UI" style="width: 100%">
            <div class="title">
                Awesome framework
            </div>
            <div class="content">
                <div>
                    <ons-button><ons-icon icon="ion-ios-thumbs-up"></ons-icon></ons-button>
                    <ons-button><ons-icon icon="ion-ios-share"></ons-icon></ons-button>
                </div>
                <ons-list>
                    <ons-list-header>Bindings</ons-list-header>
                    <ons-list-item>Vue</ons-list-item>
                    <ons-list-item>Angular</ons-list-item>
                    <ons-list-item>React</ons-list-item>
                </ons-list>
            </div>
        </ons-card>
    </ons-col>
    <ons-col>
        <ons-card class="shadow-sm">
            <img src="https://monaca.io/img/logos/download_image_onsenui_01.png" alt="Onsen UI" style="width: 100%">
            <div class="title">
                Awesome framework
            </div>
            <div class="content">
                <div>
                    <ons-button><ons-icon icon="ion-ios-thumbs-up"></ons-icon></ons-button>
                    <ons-button><ons-icon icon="ion-ios-share"></ons-icon></ons-button>
                </div>
                <ons-list>
                    <ons-list-header>Bindings</ons-list-header>
                    <ons-list-item>Vue</ons-list-item>
                    <ons-list-item>Angular</ons-list-item>
                    <ons-list-item>React</ons-list-item>
                </ons-list>
            </div>
        </ons-card>
    </ons-col>
</ons-row>
@endsection
@push('scripts')
<script>
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
    }, 10000);

    setInterval(function() {
        var carousel = document.getElementById('carousel');
        if (carousel.getActiveIndex() === carousel.itemCount - 1)
            carousel.first();
        else
            carousel.next();
    }, 10000);
</script>
@endpush