@extends('layouts.main')

@section('content')

    <div class="cd-main-content">
        <!-- Gallery of Images -->
        <div class="carousel" data-flickity='{ "rightToLeft": true,"adaptiveHeight": true }'>
            <div class="carousel-cell"><img src="{{asset('images/shop3.jpg')}}"></div>
            <div class="carousel-cell"><img src="{{asset('images/shop1.png')}}"></div>
            <div class="carousel-cell"><img src="{{asset('images/shop2.gif')}}"></div>
            <div class="carousel-cell"><img src="{{asset('images/shop4.gif')}}"></div>
        </div>
    </div>

    <!-- Gallery of Top Stores -->
    <div class="container-fluid indigo my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <!-- Stores List Title -->
                <h2 class="dinar-title hi-fontSize-25 mt-5 white-text">فروشگاه های برتر</h2>
                <hr class="m-halfLine my-3" style="width: 8%">

                <!-- Stores List -->
                <div class="cd-main-content">
                    <!-- Gallery of Images -->
                    <div class="carousel" data-flickity='{ "contain": true,"pageDots": false,"cellAlign": "left"}'>
                        @for($i=0; $i < 10; $i++)
                            <div class="topStores-carousel-cell">
                                <a href="/shop">
                                    <div class="topSore-card">
                                        <img class="l-fullPage" src="{{asset('images/mark-1.jpeg')}}">
                                        <div class="container-fluid">
                                            <div class="row justify-content-between align-items-center topSore-card-name px-3">
                                                <div class="col-auto">
                                                    <h2 class="">نام فروشگاه</h2>
                                                </div>
                                                <div class="col-auto">
                                                    <p class="yellow-text text-darken-2 hi-fontSize-14">
                                                        <i class="fa fa-star"></i>
                                                        ۳.۹
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>

                    <div class="row justify-content-center mt-4">
                        <div class="col-auto">
                            <a href="/stores">
                                <button class="m-btn-round btn-round-filled-theme hi-shadow-1 hi-fontSize-14">فروشگاه های بیشتر</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Gallery of Top Products -->
    <div class="container-fluid white">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <!-- Stores List Title -->
                <h2 class="dinar-title hi-fontSize-28 mt-5 black-text">محصولات پرفروش</h2>
                <hr class="m-fullLine my-3" style="width: 8%">

                <!-- Products List -->
                <div class="cd-main-content">
                    <!-- Gallery of Products -->
                    <div class="carousel" data-flickity='{ "contain": true,"pageDots": false,"cellAlign": "left"}'>

                        @for($i = 0; $i < 6; $i++)
                            <div class="topStores-carousel-cell pt-0" style="height: 400px;">
                                @component('components.product-card')@endcomponent
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seprator image -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <img class="img-fluid" src="{{asset('images/seprator.png')}}">
            </div>
        </div>
    </div>

    <!-- Gallery of Top Visited Products -->
    <div class="container-fluid grey lighten-3">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <!-- Stores List Title -->
                <h2 class="dinar-title hi-fontSize-28 mt-5 black-text">پربازدیدترین محصولات</h2>
                <hr class="m-fullLine my-3" style="width: 8%">
                <!-- Products List -->
                <div class="cd-main-content">
                    <!-- Gallery of Products -->
                    <div class="carousel" data-flickity='{ "contain": true,"pageDots": false,"cellAlign": "left"}'>

                        @for($i = 0; $i < 6; $i++)
                            <div class="topStores-carousel-cell pt-0" style="height: 400px;">
                                @component('components.product-card')@endcomponent
                            </div>
                        @endfor

                    </div>

                    <div class="row justify-content-center mt-4 mt-md-0">
                        <div class="col-auto">
                            <a href="/products">
                                <button class="m-btn-round filled-Indigo hi-shadow-1">محصولات بیشتر</button>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection