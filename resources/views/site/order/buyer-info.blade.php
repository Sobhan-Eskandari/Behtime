@extends('layouts.main')

@section('content')

    <div class="container">
        <ol class="breadcrumb mt-5">
            <li class="breadcrumb-item"><a href="/">فروشگاه اینترنتی بهتایم</a></li>
            <li class="breadcrumb-item"><a href="/fill-info">تکمیل اطلاعات کاربری</a></li>
            <li class="breadcrumb-item active">اطلاعات سفارش گیرنده</li>
        </ol>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="row text-center">
                    <div class="col-12">
                        <h1 class="hi-fontSize-23 green-text dinar-title">اطلاعات سفارش گیرنده</h1>
                        <hr class="m-fullLine green-line" style="width: 7%">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form>
                            <div class="m-card mt-4">
                                <div class="row mt-5">
                                    <div class="col-lg-5 pull-lg-1">
                                        <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4" for="name">نام تحویل گیرنده</label>
                                        <input id="name" class="m-round-input mt-4 grey lighten-4" type="text">

                                        <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4 mt-5" for="lastname">نام خانوادگی تحویل گیرنده</label>
                                        <input id="lastname" class="m-round-input mt-4 grey lighten-4" type="text">

                                        <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4 mt-5" for="mobile">شماره تماس ضروری (تلفن همراه)</label>
                                        <input id="mobile" class="m-round-input mt-4 grey lighten-4" type="number">

                                        <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4 mt-5" for="tel">شماره تلفن ثابت تحویل گیرنده</label>
                                        <input id="tel" class="m-round-input mt-4 grey lighten-4" type="number">
                                    </div>
                                    <div class="col-lg-5 pull-lg-1">

                                        <div class="row">
                                            <div class="col-12">
                                                <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4 mt-5 mt-lg-0" for="zip">محل سکونت تحویل گیرنده</label>
                                            </div>
                                            <div class="col-md-6 pl-0 mt-4">
                                                <div class="Topbar_dropdown dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        استان
                                                    </button>
                                                    <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item text-right py-1" href="#">گیلان</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-0 mt-4">
                                                <div class="Topbar_dropdown dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        شهر
                                                    </button>
                                                    <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item text-right py-1" href="#">رشت</a>
                                                        <a class="dropdown-item text-right py-1" href="#">انزلی</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4 mt-5" for="zip">کد پستی</label>
                                        <input id="zip" class="m-round-input mt-4 grey lighten-4" type="number">

                                        <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4 mt-5" for="address">آدرس پستی</label>
                                        <textarea id="address" rows="10" class="m-round-input mt-4 grey lighten-4 hi-fontSize-12 p-3"></textarea>
                                    </div>
                                </div>

                                <div class="row justify-content-center mt-5">
                                    <div class="col-auto">
                                        <a href="/factor">
                                            <button class="m-btn-round white-text py-3 indigo">ثبت اطلاعات و ادامه خرید <i class="fa fa-chevron-left"></i> </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection