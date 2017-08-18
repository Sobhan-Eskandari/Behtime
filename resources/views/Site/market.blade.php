@extends('layouts.main')

@section('css_resources')
    <link rel="stylesheet" href="{{asset('js/Tag/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('js/Tag/css/selectize.default.css')}}">
    <link rel="stylesheet" href="{{ asset('Hi_Framework/components/Slider/Other Libraries/noUI/nouislider.min.css') }}">
@endsection

@section('content')

    <div class="container mb-5">
        <div class="row">
            <div class="col-12 text-center mt-5">
               <img class="marketImage" src="{{asset('images/sony.jpg')}}">

                <div class="container-fluid l-absolute" style="bottom: -80px">
                    <div class="row">
                        <div class="col-lg-2">
                            <img class="rounded-circle hi-size-13 store-logo" src="{{asset('images/market2.jpg')}}">
                        </div>
                        <div class="col-lg-10 text-right align-self-end">
                            <h1 class="hi-fontSize-15"><b>فروشگاه سونی</b><span class="indigo white-text mr-4 p-2 m-round hi-shadow-1"><i class="fa fa-star"></i> ۴ از ۵ </span></h1>
                            <p class="hi-fontSize-14 my-4"><i class="fa fa-map-marker"></i> رشت سبزه میدان خیابان بیستون</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 mt-5">
                <div class="m-card mt-5 p-0 pb-5">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs hi-fontSize-17 grey lighten-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link py-4" data-toggle="tab" href="#products" role="tab">محصولات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  py-4" data-toggle="tab" href="#storeInfo" role="tab">اطلاعات فروشگاه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active py-4" data-toggle="tab" href="#comments" role="tab">نظرات کاربران</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane" id="products" role="tabpanel">
                            <div class="container-fluid mt-5">
                                <div class="row">
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="m-card">
                                            <!-- Search tags section -->
                                            <p class="hi-fontSize-14">جست و جو</p>
                                            <div class="dekmo">
                                                <div class="control-group">
                                                    <select id="select-state" name="state[]" multiple class="demo-default" style="width:100%" placeholder="Select a state...">
                                                        <option value="">Select a state...</option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="CA" selected>California</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="DC">District of Columbia</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="m-fullLine">
                                            <!-- Selected Filters Section -->
                                            <p class="hi-fontSize-14">انتخاب شما</p>
                                            <div class="tag tag_darkMode">
                                                <p class="tag__text">کالای دیجیتال</p>
                                                <button class="hi-button-btn1 green-text fa hi-fontSize-14 fa-times" aria-hidden="true" id="deleteTag" data-id="i-1"></button>
                                            </div>
                                            <!-- Taggging -->
                                            <div class="tag tag_darkMode">
                                                <p class="tag__text"> بازی</p>
                                                <button class="hi-button-btn1 green-text fa hi-fontSize-14 fa-times" aria-hidden="true" id="deleteTag" data-id="i-1"></button>
                                            </div>
                                            <div class="categories_dropdownBtn mt-3">
                                                <hr class="m-fullLine">
                                                <p class="hi-fontSize-14 text-center">دسته بندی محصولات <i class="fa fa-chevron-down"></i> </p>
                                                <hr class="m-fullLine">
                                            </div>
                                            <!-- Tree view of filters -->
                                            <div id="treeview-checkable" class="treeview"></div>
                                        </div>

                                        <!-- Cost Section -->
                                        <div class="row mt-4">
                                            <div class="col-12">
                                                <div class="m-card">
                                                    <p class="hi-fontSize-14">بازه ی قیمت را مشخص کنید</p>
                                                    <div id="cost-slider" class="noUi-target noUi-ltr noUi-horizontal my-5"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Products Section -->
                                    <div class="col-12 col-md-8 col-lg-9">
                                        <!-- Products -->
                                        <div class="row" id="row1">
                                            <div class="col-xl-4 col-md-6 px-sm-2 px-lg-4 my-3 text-center">
                                                @component('components.product-card')@endcomponent
                                            </div>
                                            <div class="col-xl-4 col-md-6 px-sm-2 px-lg-4 my-3 text-center">
                                                @component('components.product-card')@endcomponent
                                            </div>
                                            <div class="col-xl-4 col-md-6 px-sm-2 px-lg-4 my-3 text-center lastCard">
                                                @component('components.product-card')@endcomponent
                                            </div>
                                        </div>
                                        <!-- Products -->
                                        <div class="row" id="row2">
                                            <div class="col-xl-4 col-md-6 px-sm-2 px-lg-4 my-3 text-center">
                                                @component('components.product-card')@endcomponent
                                            </div>
                                            <div class="col-xl-4 col-md-6 px-sm-2 px-lg-4 my-3 text-center">
                                                @component('components.product-card')@endcomponent
                                            </div>
                                            <div class="col-xl-4 col-md-6 px-sm-2 px-lg-4 my-3 text-center" >
                                                @component('components.product-card')@endcomponent
                                            </div>
                                        </div>
                                        <!-- Products -->
                                        <div class="row" id="row3">
                                            <div class="col-xl-4 col-md-6 px-sm-2 px-lg-4 my-3 text-center">
                                                @component('components.product-card')@endcomponent
                                            </div>
                                            <div class="col-xl-4 col-md-6 px-sm-2 px-lg-4 my-3 text-center">
                                                @component('components.product-card')@endcomponent
                                            </div>
                                            <div class="col-xl-4 col-md-6 px-sm-2 px-lg-4 my-3 text-center lastCard">
                                                @component('components.product-card')@endcomponent
                                            </div>
                                        </div>
                                        <!-- Products -->
                                        <div class="row" id="row4">
                                            <div class="col-xl-4 col-md-6 px-sm-2 px-lg-4 my-3 text-center">
                                                @component('components.product-card')@endcomponent
                                            </div>
                                            <div class="col-xl-4 col-md-6 px-sm-2 px-lg-4 my-3 text-center">
                                                @component('components.product-card')@endcomponent
                                            </div>
                                            <div class="col-xl-4 col-md-6 px-sm-2 px-lg-4 my-3 text-center" >
                                                @component('components.product-card')@endcomponent
                                            </div>
                                        </div>

                                        {{--============[ Pagination of Page ]===========--}}
                                        <div class="row mt-5 justify-content-center">
                                            <div class="col-auto">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item"><a class="page-link nextBtn" href="#">بعدی</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">۱</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">۲</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">۳</a></li>
                                                        <li class="page-item"><a class="page-link prevBtn" href="#">قبلی</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="storeInfo" role="tabpanel">
                            <div class="container-fluid mt-5">

                                {{--============[ Store Info Section ]===========--}}
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col">
                                                <h1 class="hi-fontSize-18">فروشگاه سونی شعبه یک رشت</h1>
                                            </div>
                                            <div class="col text-left">
                                                <p class="hi-fontSize-14">پروانه کسب : ۳۲۴۵۵</p>
                                            </div>
                                        </div>
                                        <p class="mt-5 hi-fontSize-16 mb-5">به مدریریت : علیرضا رفیعی</p>
                                        <div class="m-card grey lighten-4 py-3">
                                            <p class="hi-fontSize-15"><i class="fa fa-2x ml-3 fa-map-marker indigo-text"></i> رشت - بیستون خیابان معلم</p>
                                        </div>
                                        <div class="m-card grey lighten-4 mt-5">
                                            <h2 class="hi-fontSize-17 indigo-text">توضیحات</h2>
                                            <p class="hi-fontSize-14 hi-lineHeight-35 mt-4">یکی از منابع آگاه صنعت تکنولوژی گزارش داده که کریستیانو رونالدو، فوتبالیست مشهور به تازگی با خرید یکی از کمپانی های مطرح پرتغالی در حوزه تبلیغات دیجیتال به نام Thing Pink، تصمیم گرفته که اولین سری از محصولات جدید خود در حوزه تکنولوژی با برند 7EGEND را روانه بازار کند. Thing Pink یکی از بزرگترین شرکت های</p>
                                        </div>

                                        <div class="container-fluid mt-5">
                                            <div class="row">
                                                <div class="col-md-4 text-left">
                                                    <p class="hi-fontSize-20"> sony@ <i class="fa indigo-text fa-2x fa-telegram"></i> </p>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <p class="hi-fontSize-20"> sony@ <i class="fa indigo-text fa-2x fa-twitter"></i> </p>
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <p class="hi-fontSize-20"> ۳۳۲۲۹۹۹۹ <i class="fa indigo-text fa-2x fa-phone"></i> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--============[ Google Map ]===========--}}
                                    <div class="col-lg-4">
                                        <div id="google-map" class="google-map mt-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" id="comments" role="tabpanel">

                            <div class="cd-main-content mt-5">

                                <div class="row">
                                    <div class="col">
                                        <p class="hi-fontSize-14">شما هم میتوانید در مورد این فروشگاه نظر بدهید.</p>
                                        <p class="hi-fontSize-14 mt-4">برای ثبت نظر ابتدا باید وارد حساب کاربری خود شوید.</p>
                                    </div>
                                    <div class="col-md-3">
                                        <button id="writeComment" class="m-btn-round btn-round-filled-theme hi-shadow-1">  نظر خود را بنویسید <i class="fa fa-chevron-down"></i> </button>
                                    </div>
                                </div>

                                <div id="sendCommentSection">
                                    <div class="row mt-4">
                                        <div class="col">
                                            <p class="green-text hi-fontSize-14">تا چه اندازه از این فروشگاه و کیفیت کالا و سرعت انتقال آن راضی هستید؟ <span class="indigo white-text mr-4 p-2 m-round hi-shadow-1"><i class="fa fa-star"></i> <span id="star"></span> از ۵ </span></p>
                                        </div>
                                        <div class="col-4">
                                            <div id="slider-step" class="noUi-target noUi-ltr noUi-horizontal"></div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <textarea class="m-round-input hi-shadow-1 grey lighten-4" placeholder="متن نطر" rows="8"></textarea>
                                            <div class="container-fluid">
                                                <div class="row mt-4 justify-content-between">
                                                    <div class="col-auto">
                                                        <button id="writeComment" class="m-btn-round btn-round-filled-theme px-5 hi-shadow-1">ارسال</button>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button id="writeComment" class="m-btn-round indigo white-text px-5 hi-shadow-1">انصراف</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="hi-fontSize-20 mt-5">تعداد نظرات کاربران (۲۰)</p>

                                {{--============[ Comment Section ]===========--}}
                                <div class="row mt-5">
                                    <div class="col-12">
                                        <div class="m-card p-0">
                                            <div class="container-fluid">
                                                {{--============[ Comment Title ]===========--}}
                                                <div class="row grey lighten-4 py-3 px-5">
                                                    <div class="col">
                                                        <span class="indigo-text hi-fontSize-16">فهیمه رفیعی<b></b></span>
                                                    </div>
                                                    <div class="col text-left">
                                                        <span class="grey-text text-darken-2 hi-fontSize-16">۲۹ تیر ۱۳۹۶<b></b></span>
                                                    </div>
                                                </div>

                                                {{--============[ Comment Body ]===========--}}
                                                <div class="row">
                                                    <div class="col-12 p-5">
                                                        <p class="green-text hi-fontSize-12">تا چه اندازه از این فروشگاه و کیفیت کالا و سرعت انتقال آن راضی هستید؟ <span class="indigo white-text mr-4 p-2 m-round hi-shadow-1"><i class="fa fa-star"></i> <span id="star"></span> از ۵ </span></p>
                                                        <p class="hi-fontSize-14 grey-text text-darken-2 hi-lineHeight-38">
                                                            سیستم خوب وجمع وجوریه عالیه اما قیمتش بالاست وساخت مالزیه قدرت دستگاه دویست وبیست وات پی ام پی او یا به عبارتی د قیق تر بیست وات ار ام اس،،،جنس بلندگوها از چوب(فیبر) جلوی بلندگوها قسمت حفاظ پارچه ای وسیاه رنگ،،، بدنه دستگاه پلاستیکیه جلو دستگاه نقره ای رنگ وقسمت پشت سیاه رنگ فلش وسی دی را سریع لود میکنه
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--============[ Comment Section ]===========--}}
                                <div class="row mt-5">
                                    <div class="col-12">
                                        <div class="m-card p-0">
                                            <div class="container-fluid">
                                                {{--============[ Comment Title ]===========--}}
                                                <div class="row grey lighten-4 py-3 px-5">
                                                    <div class="col">
                                                        <span class="indigo-text hi-fontSize-16">فهیمه رفیعی<b></b></span>
                                                    </div>
                                                    <div class="col text-left">
                                                        <span class="grey-text text-darken-2 hi-fontSize-16">۲۹ تیر ۱۳۹۶<b></b></span>
                                                    </div>
                                                </div>

                                                {{--============[ Comment Body ]===========--}}
                                                <div class="row">
                                                    <div class="col-12 p-5">
                                                        <p class="green-text hi-fontSize-12">تا چه اندازه از این فروشگاه و کیفیت کالا و سرعت انتقال آن راضی هستید؟ <span class="indigo white-text mr-4 p-2 m-round hi-shadow-1"><i class="fa fa-star"></i> ۴ از ۵ </span></p>
                                                        <p class="hi-fontSize-14 grey-text text-darken-2 hi-lineHeight-38">
                                                            سیستم خوب وجمع وجوریه عالیه اما قیمتش بالاست وساخت مالزیه قدرت دستگاه دویست وبیست وات پی ام پی او یا به عبارتی د قیق تر بیست وات ار ام اس،،،جنس بلندگوها از چوب(فیبر) جلوی بلندگوها قسمت حفاظ پارچه ای وسیاه رنگ،،، بدنه دستگاه پلاستیکیه جلو دستگاه نقره ای رنگ وقسمت پشت سیاه رنگ فلش وسی دی را سریع لود میکنه
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--============[ Comment Section ]===========--}}
                                <div class="row mt-5">
                                    <div class="col-12">
                                        <div class="m-card p-0">
                                            <div class="container-fluid">
                                                {{--============[ Comment Title ]===========--}}
                                                <div class="row grey lighten-4 py-3 px-5">
                                                    <div class="col">
                                                        <span class="indigo-text hi-fontSize-16">فهیمه رفیعی<b></b></span>
                                                    </div>
                                                    <div class="col text-left">
                                                        <span class="grey-text text-darken-2 hi-fontSize-16">۲۹ تیر ۱۳۹۶<b></b></span>
                                                    </div>
                                                </div>

                                                {{--============[ Comment Body ]===========--}}
                                                <div class="row">
                                                    <div class="col-12 p-5">
                                                        <p class="green-text hi-fontSize-12">تا چه اندازه از این فروشگاه و کیفیت کالا و سرعت انتقال آن راضی هستید؟ <span class="indigo white-text mr-4 p-2 m-round hi-shadow-1"><i class="fa fa-star"></i> ۴ از ۵ </span></p>
                                                        <p class="hi-fontSize-14 grey-text text-darken-2 hi-lineHeight-38">
                                                            سیستم خوب وجمع وجوریه عالیه اما قیمتش بالاست وساخت مالزیه قدرت دستگاه دویست وبیست وات پی ام پی او یا به عبارتی د قیق تر بیست وات ار ام اس،،،جنس بلندگوها از چوب(فیبر) جلوی بلندگوها قسمت حفاظ پارچه ای وسیاه رنگ،،، بدنه دستگاه پلاستیکیه جلو دستگاه نقره ای رنگ وقسمت پشت سیاه رنگ فلش وسی دی را سریع لود میکنه
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

@section('js_resources')
    <script src="{{ asset('js/Tag/js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/Tag/js/selectize.js') }}"></script>
    <script src="{{ asset('js/bootstrap-treeview.min.js') }}"></script>
    <script src="{{ asset('js/responsive.js') }}"></script>
    <script src="{{ asset('js/wNumb.js') }}"></script>
    <script src="{{ asset('Hi_Framework/components/Slider/Other Libraries/noUI/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/all-products.js') }}"></script>

    <script>
        // ============[ Translate English digits to farsi ]===========
        var translate = function (englishNumber) {
            var chars = englishNumber.split('');
            var arabicNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
            for (var i = 0; i < chars.length; i++) {
                if (/\d/.test(chars[i])) {
                    chars[i] = arabicNumbers[chars[i]];
                }
            }
            return chars.join('');
        };


        function initMap() {
            var uluru = {lat: 48.8583739, lng: 2.2924872};
            var map = new google.maps.Map(document.getElementById('google-map'), {
                zoom: 14,
                center: uluru,
                scrollwheel: false
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }

        var stepSlider = document.getElementById('slider-step');

        noUiSlider.create(stepSlider, {
            start: [ 1 ],
            step: 1,
            direction: 'rtl',
            range: {
                'min': [  0 ],
                'max': [ 5 ]
            }
        });
        stepSlider.noUiSlider.on('update', function( values, handle ){
            var number = parseFloat(values[handle]);
            var farsiNum = translate(number.toString());
            console.log(number);
            $("#star").text(farsiNum);
        });

        var openedCmnt = true;
        $("#writeComment").on('click',function () {
            if(openedCmnt){
                openedCmnt = false;
                $("#sendCommentSection").slideUp();
                $("#writeComment i").css({'transform' : 'rotate('+ 180 +'deg)'});
            }else{
                openedCmnt = true;
                $("#sendCommentSection").slideDown();
                $("#writeComment i").css({'transform' : 'rotate('+ 360 +'deg)'});
            }

        });

    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaKuMOTrKgymjzEvHe_Rz7SDzUIZnvNrQ&callback=initMap">
    </script>

@endsection