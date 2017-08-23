<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="محلی برای خرید و فروش آسان محصولات فروشگاه های معتبر">
    <meta name="author" content="به تایم">
    <title>فروشگاه اینترنتی به تایم</title>
{{--<link rel="icon" href="../../favicon.ico">--}}


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Bootstrap/bootstrap.min.css') }}">
    <script src="{{ asset('Resources/js/Jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css_site/application.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Font/font-awesome.min.css') }}">


    <!-- Hi_Frameworkwork Styles -->
    <link rel="stylesheet" href="{{ asset('Hi_Framework/dist/Hi_Framework.css') }}">
    <script src="{{ asset('js/mega-dropdown/modernizr.js') }}"></script>

    @yield('css_resources')

</head>

<body>

<div id="wrapper">
    <div id="info">
        <div id="info-content">

            <div class="container-fluid hi-shadow-1">
                <div class="row justify-content-center grey lighten-3 align-items-center py-4">

                    <div class="col-xl-2 col-lg-3 col-sm-3 col-6 px-5">
                        <div class="m-search">
                            <a href="#">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xl-4 col-4 pl-0 text-left">
                                            <i class="fa fa-3x fa-cart-plus hi-lineHeight-48 green-text"></i>
                                        </div>
                                        <div class="col-xl-5 col-5 py-4 px-0 text-center">
                                            <h2 class="green-text hi-fontSize-16">سبد خرید</h2>
                                        </div>
                                        <div class="col-xl-2 col-2 px-0">
                                            <span class="m-badge badge badge-pill badge-default">۳</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-sm-2 col-6 pr-0 align-items-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button data-toggle="modal" class="hi-button-btn1 hi-fontSize-14" data-target="#loginModal">
                                <b class="m-underLined">ورود</b>
                            </button>
                            <button data-toggle="modal" class="hi-button-btn1 hi-fontSize-14">
                                &nbsp;&nbsp;یا&nbsp;&nbsp;
                            </button>
                            <button data-toggle="modal" class="hi-button-btn1 hi-fontSize-14" data-target="#signupModal">
                                <b class="m-underLined">عضویت</b>
                            </button>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-3 col-6">
                        <img class="hi-size-4p" src="{{asset('images/logo.png')}}">
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 l-ltr">
                        <div class="input-group m-search px-2">
                            <button class="hi-button-btn1"><i class="fa fa-search hi-fontSize-15"></i> </button>
                            <input type="text" class="form-control m-simple-input py-3" placeholder="عبارت مورد نظر را وارد کنید" aria-describedby="btnGroupAddon">
                        </div>
                    </div>
                </div>

                <div class="container" id="Megamenu-nav">
                    <nav>
                        <div class="row l-rtl" id="megaMenu">
                            <div class="col-auto mx-1 l-ltr">
                                <div class="cd-dropdown-wrapper">
                                    <a class="cd-dropdown-trigger" href="#0">خوراک</a>
                                    <nav class="cd-dropdown">
                                        <h2>Title</h2>
                                        <a href="#0" class="cd-close">Close</a>
                                    </nav> <!-- .cd-dropdown -->
                                </div> <!-- .cd-dropdown-wrapper -->
                            </div>
                            <div class="col-auto mx-1 l-ltr">
                                <div class="cd-dropdown-wrapper">
                                    <a class="cd-dropdown-trigger" href="#0">کالای دیجیتال</a>
                                    <nav class="cd-dropdown">
                                        <h2>Title</h2>
                                        <a href="#0" class="cd-close">Close</a>
                                    </nav> <!-- .cd-dropdown -->
                                </div> <!-- .cd-dropdown-wrapper -->
                            </div>
                            <div class="col-auto mx-1 l-ltr">
                                <div class="cd-dropdown-wrapper">
                                    <a class="cd-dropdown-trigger" href="#0">لوازم خانگی</a>
                                    <nav class="cd-dropdown">
                                        <h2>Title</h2>
                                        <a href="#0" class="cd-close">Close</a>
                                    </nav> <!-- .cd-dropdown -->
                                </div> <!-- .cd-dropdown-wrapper -->
                            </div>
                            <div class="col-auto mx-1 l-ltr">
                                <div class="cd-dropdown-wrapper">
                                    <a class="cd-dropdown-trigger" href="#0">زیبایی و سلامت</a>
                                    <nav class="cd-dropdown">
                                        <h2>Title</h2>
                                        <a href="#0" class="cd-close">Close</a>
                                        <ul class="cd-dropdown-content">
                                            <li class="has-children">
                                                <a href="http://codyhouse.co/?p=748">Services</a>
                                                <ul class="cd-dropdown-icons is-hidden">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Services</a></li>
                                                    <li>
                                                        <a class="cd-dropdown-item item-1" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #1</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-2" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #2</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-3" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #3</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-4" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #4</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-5" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #5</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-6" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #6</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-7" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #7</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-8" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #8</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-9" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #9</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-10" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #10</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-11" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #11</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-12" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #12</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                </ul> <!-- .cd-dropdown-icons -->
                                            </li> <!-- .has-children -->
                                        </ul> <!-- .cd-dropdown-content -->
                                    </nav> <!-- .cd-dropdown -->
                                </div> <!-- .cd-dropdown-wrapper -->
                            </div>
                            <div class="col-auto mx-1 l-ltr">
                                <div class="cd-dropdown-wrapper">
                                    <a class="cd-dropdown-trigger" href="#0">فرهنگ و هنر</a>
                                    <nav class="cd-dropdown">
                                        <h2>Title</h2>
                                        <a href="#0" class="cd-close">Close</a>
                                    </nav> <!-- .cd-dropdown -->
                                </div> <!-- .cd-dropdown-wrapper -->
                            </div>
                            <div class="col-auto mx-1 l-ltr">
                                <div class="cd-dropdown-wrapper">
                                    <a class="cd-dropdown-trigger" href="#0">ورزش و سرگرمی</a>
                                    <nav class="cd-dropdown">
                                        <h2>Title</h2>
                                        <a href="#0" class="cd-close">Close</a>
                                </div> <!-- .cd-dropdown-wrapper -->
                            </div>
                            <div class="col-auto mx-1 l-ltr">
                                <div class="cd-dropdown-wrapper">
                                    <a class="cd-dropdown-trigger" href="#0">مادر و کودک</a>
                                    <nav class="cd-dropdown">
                                        <h2>Title</h2>
                                        <a href="#0" class="cd-close">Close</a>
                                    </nav> <!-- .cd-dropdown -->
                                </div> <!-- .cd-dropdown-wrapper -->
                            </div>
                            <div class="col-auto mx-1 l-ltr">
                                <div class="cd-dropdown-wrapper">
                                    <a class="cd-dropdown-trigger" href="#0">ابزار الکترونیک</a>
                                    <nav class="cd-dropdown">
                                        <h2>Title</h2>
                                        <a href="#0" class="cd-close">لوازم خودرو</a>
                                    </nav> <!-- .cd-dropdown -->
                                </div> <!-- .cd-dropdown-wrapper -->
                            </div>
                            <div class="col-12 l-noneDisplayed" id="megaMenu-detail-col">
                                <div class="row" style="height: 300px;" id="megaMenu-detail-row">

                                    <div class="col-3 px-0">
                                        <ul class="cd-dropdown-content">
                                            <li class="has-children">
                                                <a  href="http://codyhouse.co/?p=748" id="menu-products">محصولات</a>
                                            </li> <!-- .has-children -->
                                            <li class="has-children">
                                                <a href="http://codyhouse.co/?p=748" id="menu-stores">فروشگاه ها</a>
                                            </li> <!-- .has-children -->
                                        </ul>
                                    </div>

                                    <div class="col-9 px-0" id="megaMenu-detail">
                                        <ul class="cd-dropdown-content">

                                            <li class="has-children">
                                                <ul class="cd-secondary-dropdown" id="0">
                                                    <li class="go-back"><a href="#0">خوراک</a></li>
                                                    <li class="has-children">
                                                        <a href="http://codyhouse.co/?p=748">خوراک</a>

                                                        <ul class="is-hidden">
                                                            <li class="go-back"><a href="#0">Clothing</a></li>
                                                            <li class="see-all"><a href="http://codyhouse.co/?p=748">All Accessories</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Glasses</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Gloves</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Jewellery</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Scarves</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="has-children">
                                                        <a href="http://codyhouse.co/?p=748">Bottoms</a>

                                                        <ul class="is-hidden">
                                                            <li class="go-back"><a href="#0">Clothing</a></li>
                                                            <li class="see-all"><a href="http://codyhouse.co/?p=748">All Bottoms</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Casual Trousers</a></li>
                                                            <li><a href="#0">Leggings</a></li>
                                                            <li><a href="#0">Shorts</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> <!-- .cd-secondary-dropdown -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-secondary-dropdown" id="1">
                                                    <li class="go-back"><a href="#0">کالای دیجیتال</a></li>
                                                    <li class="has-children">
                                                        <a href="http://codyhouse.co/?p=748">کالای دیجیتال</a>

                                                        <ul class="is-hidden">
                                                            <li class="go-back"><a href="#0">کالای دیجیتال</a></li>
                                                            <li class="see-all"><a href="http://codyhouse.co/?p=748">All Accessories</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Glasses</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Gloves</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Jewellery</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Scarves</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> <!-- .cd-secondary-dropdown -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-secondary-dropdown" id="2">
                                                    <li class="go-back"><a href="#0">لوازم خانگی</a></li>
                                                    <li class="has-children">
                                                        <a href="http://codyhouse.co/?p=748">لوازم خانگی</a>

                                                        <ul class="is-hidden">
                                                            <li class="go-back"><a href="#0">لوازم خانگی</a></li>
                                                            <li class="see-all"><a href="http://codyhouse.co/?p=748">All Accessories</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Glasses</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Gloves</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Jewellery</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Scarves</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> <!-- .cd-secondary-dropdown -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-secondary-dropdown" id="3">
                                                    <li class="go-back"><a href="#0">زیبایی و سلامت</a></li>
                                                    <li class="has-children">
                                                        <a href="http://codyhouse.co/?p=748">زیبایی و سلامت</a>

                                                        <ul class="is-hidden">
                                                            <li class="go-back"><a href="#0">زیبایی و سلامت</a></li>
                                                            <li class="see-all"><a href="http://codyhouse.co/?p=748">All Accessories</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Glasses</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Gloves</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Jewellery</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Scarves</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> <!-- .cd-secondary-dropdown -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-secondary-dropdown" id="4">
                                                    <li class="go-back"><a href="#0">فرهنگ و هنر</a></li>
                                                    <li class="has-children">
                                                        <a href="http://codyhouse.co/?p=748">فرهنگ و هنر</a>

                                                        <ul class="is-hidden">
                                                            <li class="go-back"><a href="#0">فرهنگ و هنر</a></li>
                                                            <li class="see-all"><a href="http://codyhouse.co/?p=748">All Accessories</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Glasses</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Gloves</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Jewellery</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Scarves</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> <!-- .cd-secondary-dropdown -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-secondary-dropdown" id="5">
                                                    <li class="go-back"><a href="#0">ورزش و سرگرمی</a></li>
                                                    <li class="has-children">
                                                        <a href="http://codyhouse.co/?p=748">ورزش و سرگرمی</a>

                                                        <ul class="is-hidden">
                                                            <li class="go-back"><a href="#0">ورزش و سرگرمی</a></li>
                                                            <li class="see-all"><a href="http://codyhouse.co/?p=748">All Accessories</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Glasses</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Gloves</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Jewellery</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Scarves</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> <!-- .cd-secondary-dropdown -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-secondary-dropdown" id="6">
                                                    <li class="go-back"><a href="#0">مادر و کودک</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">مادر و کودک</a></li>
                                                    <li class="has-children">
                                                        <a href="http://codyhouse.co/?p=748">مادر و کودک</a>

                                                        <ul class="is-hidden">
                                                            <li class="go-back"><a href="#0">مادر و کودک</a></li>
                                                            <li class="see-all"><a href="http://codyhouse.co/?p=748">All Accessories</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Glasses</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Gloves</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Jewellery</a></li>
                                                            <li><a href="http://codyhouse.co/?p=748">Scarves</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> <!-- .cd-secondary-dropdown -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-dropdown-icons is-hidden" id="7">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Services</a></li>
                                                    <li>
                                                        <a class="cd-dropdown-item item-1" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #1</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-2" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #2</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-3" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #3</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-4" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #4</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-5" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #5</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-6" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #6</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-7" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #7</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-8" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #8</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-9" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #9</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-10" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #10</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-11" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #11</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-12" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #12</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                </ul> <!-- .cd-dropdown-icons -->
                                            </li> <!-- .has-children -->


                                            {{--===================Forooshgah ha=================--}}

                                            <li class="has-children">
                                                <ul class="cd-dropdown-icons is-hidden" id="8">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Services</a></li>
                                                    <li>
                                                        <a class="cd-dropdown-item item-1" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #1</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-2" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #2</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-3" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #3</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-4" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #4</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-5" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #5</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-6" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #6</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-7" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #7</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-8" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #8</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-9" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #9</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-10" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #10</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-11" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #11</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-12" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #12</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                </ul> <!-- .cd-dropdown-icons -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-dropdown-icons is-hidden" id="9">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Services</a></li>
                                                    <li>
                                                        <a class="cd-dropdown-item item-1" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #1</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-2" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #2</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-3" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #3</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-4" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #4</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-5" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #5</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-6" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #6</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-7" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #7</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-8" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #8</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-9" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #9</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-10" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #10</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-11" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #11</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-12" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #12</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                </ul> <!-- .cd-dropdown-icons -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-dropdown-icons is-hidden" id="10">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Services</a></li>
                                                    <li>
                                                        <a class="cd-dropdown-item item-1" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #1</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-2" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #2</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-3" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #3</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-4" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #4</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-5" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #5</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-6" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #6</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-7" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #7</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-8" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #8</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-9" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #9</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-10" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #10</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-11" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #11</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-12" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #12</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                </ul> <!-- .cd-dropdown-icons -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-dropdown-icons is-hidden" id="11">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Services</a></li>
                                                    <li>
                                                        <a class="cd-dropdown-item item-1" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #1</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-2" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #2</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-3" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #3</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-4" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #4</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-5" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #5</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-6" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #6</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-7" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #7</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-8" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #8</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-9" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #9</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-10" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #10</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-11" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #11</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-12" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #12</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                </ul> <!-- .cd-dropdown-icons -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-dropdown-icons is-hidden" id="12">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Services</a></li>
                                                    <li>
                                                        <a class="cd-dropdown-item item-1" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #1</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-2" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #2</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-3" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #3</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-4" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #4</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-5" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #5</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-6" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #6</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-7" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #7</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-8" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #8</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-9" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #9</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-10" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #10</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-11" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #11</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-12" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #12</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                </ul> <!-- .cd-dropdown-icons -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-dropdown-icons is-hidden" id="13">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Services</a></li>
                                                    <li>
                                                        <a class="cd-dropdown-item item-1" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #1</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-2" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #2</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-3" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #3</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-4" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #4</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-5" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #5</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-6" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #6</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-7" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #7</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-8" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #8</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-9" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #9</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-10" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #10</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-11" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #11</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-12" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #12</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                </ul> <!-- .cd-dropdown-icons -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-dropdown-icons is-hidden" id="14">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Services</a></li>
                                                    <li>
                                                        <a class="cd-dropdown-item item-1" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #1</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-2" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #2</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-3" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #3</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-4" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #4</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-5" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #5</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-6" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #6</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-7" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #7</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-8" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #8</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-9" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #9</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-10" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #10</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-11" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #11</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-12" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #12</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                </ul> <!-- .cd-dropdown-icons -->
                                            </li> <!-- .has-children -->

                                            <li class="has-children">
                                                <ul class="cd-dropdown-icons is-hidden" id="15">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Services</a></li>
                                                    <li>
                                                        <a class="cd-dropdown-item item-1" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #1</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-2" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #2</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-3" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #3</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-4" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #4</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-5" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #5</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-6" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #6</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-7" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #7</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-8" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #8</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-9" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #9</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-10" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #10</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-11" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #11</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="cd-dropdown-item item-12" href="http://codyhouse.co/?p=748">
                                                            <h3>Service #12</h3>
                                                            <p>This is the item description</p>
                                                        </a>
                                                    </li>

                                                </ul> <!-- .cd-dropdown-icons -->
                                            </li> <!-- .has-children -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>

        @yield('content')

        <!-- Social Media Icons -->
            <div class="container-fluid indigo">
                <div class="row justify-content-center py-3">
                    <div class="col-auto mx-4">
                        <button class="hi-button-btn1">
                            <i class="fa fa-4x fa-twitter white-text"></i>
                        </button>
                    </div>
                    <div class="col-auto mx-4">
                        <button class="hi-button-btn1">
                            <i class="fa fa-4x fa-telegram white-text"></i>
                        </button>
                    </div>
                    <div class="col-auto mx-4">
                        <button class="hi-button-btn1">
                            <i class="fa fa-4x fa-instagram white-text"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="container-fluid white black-text py-5">
                <!-- Footer Lists -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="row px-5">

                            <!-- Footer List -->
                            <div class="col-lg-4">
                                <ul class="footer-lists">
                                    <li><a href="#">بهتایم</a></li>
                                    <li><a href="#">درباره ما</a></li>
                                    <li><a href="#">تماس با ما</a></li>
                                    <li><a href="#">همکاری با ما</a></li>
                                    <li><a href="#">قوانین و مقررات</a></li>
                                </ul>
                            </div>

                            <!-- Footer List -->
                            <div class="col-lg-4">
                                <ul class="footer-lists">
                                    <li><a href="#">خدمات مشتریان</a></li>
                                    <li><a href="#">پاسخ به پرسش های متداول</a></li>
                                    <li><a href="#">رویه های بازگرداندن کالا</a></li>
                                    <li><a href="#">شرایط استفاده</a></li>
                                    <li><a href="#">حریم خصوصی</a></li>
                                </ul>
                            </div>

                            <!-- Footer List -->
                            <div class="col-lg-4">
                                <ul class="footer-lists">
                                    <li><a href="#">راهنمای خرید از بهتایم</a></li>
                                    <li><a href="#">ثبت سفارش</a></li>
                                    <li><a href="#">رویه های ارسال سفارش</a></li>
                                    <li><a href="#">شیوه های پرداخت</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- Logos Part -->
                    <div class="col-md-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img class="hi-size-13" src="{{asset('images/enamad.png')}}">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('images/logo.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Footer Section -->
            <footer>
                <div class="container-fluid grey lighten-3">
                    <div class="row px-5 py-5 indigo-text">

                        <!-- Footer List -->
                        <div class="col-lg-2 col-6">
                            <ul class="footer-lists">
                                <li><a href="#">کالای دیجیتال</a></li>
                                <li><a href="#">موبایل</a></li>
                                <li><a href="#">تبلت</a></li>
                                <li><a href="#">کالای دیجیتال</a></li>
                                <li><a href="#">موبایل</a></li>
                                <li><a href="#">تبلت</a></li>
                            </ul>
                        </div>

                        <!-- Footer List -->
                        <div class="col-lg-2 col-6">
                            <ul class="footer-lists">
                                <li><a href="#">کالای دیجیتال</a></li>
                                <li><a href="#">موبایل</a></li>
                                <li><a href="#">تبلت</a></li>
                                <li><a href="#">کالای دیجیتال</a></li>
                                <li><a href="#">موبایل</a></li>
                                <li><a href="#">تبلت</a></li>
                            </ul>
                        </div>

                        <!-- Footer List -->
                        <div class="col-lg-2 col-6">
                            <ul class="footer-lists">
                                <li><a href="#">کالای دیجیتال</a></li>
                                <li><a href="#">موبایل</a></li>
                                <li><a href="#">تبلت</a></li>
                                <li><a href="#">کالای دیجیتال</a></li>
                                <li><a href="#">موبایل</a></li>
                                <li><a href="#">تبلت</a></li>
                            </ul>
                        </div>

                        <!-- Footer List -->
                        <div class="col-lg-2 col-6">
                            <ul class="footer-lists">
                                <li><a href="#">کالای دیجیتال</a></li>
                                <li><a href="#">موبایل</a></li>
                                <li><a href="#">تبلت</a></li>
                                <li><a href="#">کالای دیجیتال</a></li>
                                <li><a href="#">موبایل</a></li>
                                <li><a href="#">تبلت</a></li>
                            </ul>
                        </div>

                        <!-- Footer List -->
                        <div class="col-lg-2 col-6">
                            <ul class="footer-lists">
                                <li><a href="#">کالای دیجیتال</a></li>
                                <li><a href="#">موبایل</a></li>
                                <li><a href="#">تبلت</a></li>
                                <li><a href="#">کالای دیجیتال</a></li>
                                <li><a href="#">موبایل</a></li>
                                <li><a href="#">تبلت</a></li>
                            </ul>
                        </div>

                        <!-- Footer List -->
                        <div class="col-lg-2 col-6">
                            <ul class="footer-lists">
                                <li><a href="#">کالای دیجیتال</a></li>
                                <li><a href="#">موبایل</a></li>
                                <li><a href="#">تبلت</a></li>
                                <li><a href="#">کالای دیجیتال</a></li>
                                <li><a href="#">موبایل</a></li>
                                <li><a href="#">تبلت</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </footer>

            <!-- Copyright -->
            <div class="container-fluid indigo">
                <div class="row justify-content-center py-3">
                    <div class="col-12 text-center">
                        <h2 class="white-text hi-fontSize-13 hi-lineHeight-22">تمامی حقوق مادی و معنوی این سایت متعلق به فروشگاه آنلاین بهتام میباشد - توسعه توسط گروه ایمگنا copyright(c) 2017-2018</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="checkbox" id="menu" name="menu" class="menu-checkbox">
    <div class="menu">
        <label class="menu-toggle" for="menu"><span>Toggle</span></label>
        <ul>
            <li>
                <label for="menu-1">خوراکی</label>
                <input type="checkbox" id="menu-1" name="menu-1" class="menu-checkbox">
                <div class="menu">
                    <label class="menu-toggle" for="menu-1"><span>Toggle</span></label>
                    <ul>
                        <li>
                            <label for="menu-1-2">محصولات</label>
                            <input type="checkbox" id="menu-1-2" name="menu-1-2" class="menu-checkbox">
                            <div class="menu">
                                <label class="menu-toggle" for="menu-1-2"><span>Toggle</span></label>
                                <ul>
                                    <li>
                                        <a href="#">موبایل</a>
                                    </li>
                                    <li>
                                        <a href="#">تبلت</a>
                                    </li>
                                    <li>
                                        <a href="#">لپ تاپ</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <label for="menu-1-3">فروشگاه ها</label>
                            <input type="checkbox" id="menu-1-3" name="menu-1-3" class="menu-checkbox">
                            <div class="menu">
                                <label class="menu-toggle" for="menu-1-3"><span>Toggle</span></label>
                                <ul>
                                    <li>
                                        <a href="#">فروشگاه  واهری</a>
                                    </li>
                                    <li>
                                        <a href="#">فروشگاه سونی</a>
                                    </li>
                                    <li>
                                        <a href="#">فروشگاه سامسونگ</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <label for="menu-2">کالای دیجیتال</label>
                <input type="checkbox" id="menu-2" name="menu-2" class="menu-checkbox">
                <div class="menu">
                    <label class="menu-toggle" for="menu-2"><span>Toggle</span></label>
                    <ul>
                        <li>
                            <label for="menu-2-2">محصولات</label>
                            <input type="checkbox" id="menu-2-2" name="menu-2-2" class="menu-checkbox">
                            <div class="menu">
                                <label class="menu-toggle" for="menu-2-2"><span>Toggle</span></label>
                                <ul>
                                    <li>
                                        <a href="#">موبایل</a>
                                    </li>
                                    <li>
                                        <a href="#">تبلت</a>
                                    </li>
                                    <li>
                                        <a href="#">لپ تاپ</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <label for="menu-2-3">فروشگاه ها</label>
                            <input type="checkbox" id="menu-2-3" name="menu-2-3" class="menu-checkbox">
                            <div class="menu">
                                <label class="menu-toggle" for="menu-2-3"><span>Toggle</span></label>
                                <ul>
                                    <li>
                                        <a href="#">فروشگاه جواهری</a>
                                    </li>
                                    <li>
                                        <a href="#">فروشگاه سونی</a>
                                    </li>
                                    <li>
                                        <a href="#">فروشگاه سامسونگ</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <label for="menu-3">لوازم خانگی</label>
                <input type="checkbox" id="menu-3" name="menu-3" class="menu-checkbox">
                <div class="menu">
                    <label class="menu-toggle" for="menu-3"><span>Toggle</span></label>
                    <ul>
                        <li>
                            <label for="menu-3-2">محصولات</label>
                            <input type="checkbox" id="menu-3-2" name="menu-3-2" class="menu-checkbox">
                            <div class="menu">
                                <label class="menu-toggle" for="menu-3-2"><span>Toggle</span></label>
                                <ul>
                                    <li>
                                        <a href="#">موبایل</a>
                                    </li>
                                    <li>
                                        <a href="#">تبلت</a>
                                    </li>
                                    <li>
                                        <a href="#">لپ تاپ</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <label for="menu-3-3">فروشگاه ها</label>
                            <input type="checkbox" id="menu-3-3" name="menu-3-3" class="menu-checkbox">
                            <div class="menu">
                                <label class="menu-toggle" for="menu-3-3"><span>Toggle</span></label>
                                <ul>
                                    <li>
                                        <a href="#">فروشگاه جواهری</a>
                                    </li>
                                    <li>
                                        <a href="#">فروشگاه سونی</a>
                                    </li>
                                    <li>
                                        <a href="#">فروشگاه سامسونگ</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="table">
            <div class="table-cell">
                <div class="modal-dialog">
                    <div class="modal-content l-modal">
                        <button class="hi-button-btn1 m-closeModal" id="closeLogin"><i class="fa fa-close fa-3x"></i> </button>
                        <h1 class="hi-fontSize-20 indigo-text dinar-title text-center m-5">ورود به بهتایم</h1>
                        <p class="text-center mt-2 hi-fontSize-13">قبلا در بهتایم ثبت نام نگرده‌اید؟ <span class="indigo-text m-underLined"><a href="#"> ثبت نام</a></span> </p>

                        <!-- Login Fileds -->
                        <div class="row justify-content-center mt-3">
                            <div class="col-7">
                                <form>
                                    <input class="m-round-input mt-4 grey lighten-4" type="email" placeholder="پست الکترونیکی خود را وارد کنید">
                                    <input class="m-round-input mt-4 grey lighten-4" type="email" placeholder="کلمه عبور خود را وارد کنید">
                                    <label class="custom-control custom-checkbox mt-4">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description hi-fontSize-12">مرا به خاطر بسپار</span>
                                    </label>
                                    <div class="row justify-content-center">
                                        <div class="col-auto">
                                            <button type="submit" class="m-btn-round btn-round-filled-theme my-5">ورود</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Signup Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="table">
            <div class="table-cell">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content l-modal">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs grey lighten-4 top-round-20" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link top-rightCornered no-border active hi-fontSize-18" data-toggle="tab" href="#user" role="tab">عضویت کاربر عادی</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hi-fontSize-18" data-toggle="tab" href="#seller" role="tab">عضویت فروشنده</a>
                            </li>
                            <li class="nav-item m-closeModal">
                                <button class="hi-button-btn1" id="closeModal"><i class="fa fa-close fa-3x"></i> </button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="user" role="tabpanel">
                                <h1 class="hi-fontSize-20 indigo-text dinar-title text-center m-5">عضویت در بهتایم</h1>
                                <!-- Login Fileds -->
                                <form>
                                    <div class="container-fluid">
                                        <div class="row mt-3 px-5">
                                            <div class="col-lg-5">
                                                <input class="m-round-input mt-4 grey lighten-4" type="text" placeholder="نام و نام خانوادگی خود را وارد کنید">
                                                <input class="m-round-input mt-4 grey lighten-4" type="email" placeholder="پست الکترونیکی خود را وارد کنید">
                                                <input class="m-round-input mt-4 grey lighten-4" type="password" placeholder="کلمه عبور خود را وارد کنید">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="checkbox style-2 mt-3" checked="checked">
                                                        <span class="hi-lineHeight-25"><a href="#">حریم شخصی</a> و شرایط استفاده از سرویس های بهتایم را مطالعه نموده و با کلیه موارد موافقم</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <ul class="hi-fontSize-14">
                                                    <li>
                                                        <p><i class="fa fa-circle indigo-text ml-3 hi-lineHeight-40"></i> سریع تر و ساده تر خرید کنید</p>
                                                    </li>
                                                    <li>
                                                        <p><i class="fa fa-circle indigo-text ml-3 hi-lineHeight-40"></i>به سادگی سوابق خریدتان را بررسی کنید</p>
                                                    </li>
                                                    <li>
                                                        <p><i class="fa fa-circle indigo-text ml-3 hi-lineHeight-40"></i> سریع تر و ساده تر خرید کنید</p>
                                                    </li>
                                                    <li>
                                                        <p><i class="fa fa-circle indigo-text ml-3 hi-lineHeight-40"></i>به سادگی سوابق خریدتان را بررسی کنید</p>
                                                    </li>
                                                    <li>
                                                        <p><i class="fa fa-circle indigo-text ml-3 hi-lineHeight-40"></i> سریع تر و ساده تر خرید کنید</p>
                                                    </li>
                                                    <li>
                                                        <p><i class="fa fa-circle indigo-text ml-3 hi-lineHeight-40"></i>به سادگی سوابق خریدتان را بررسی کنید</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end my-5 px-5">
                                            <div class="col-auto">
                                                <button type="submit" class="m-btn-round btn-round-filled-theme px-5">ثبت نام</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="seller" role="tabpanel">
                                <h1 class="hi-fontSize-20 indigo-text dinar-title text-center m-5">عضویت فروشنده در بهتایم</h1>
                                <div class="row justify-content-center">
                                    <div class="col-lg-5 px-5">
                                        <input class="m-round-input mt-4 grey lighten-4" type="text" placeholder="نام و نام خانوادگی خود را وارد کنید">
                                        <input class="m-round-input mt-4 grey lighten-4" type="number" placeholder="شماره شناسنامه خود را وارد کنید">
                                        <input class="m-round-input mt-4 grey lighten-4" type="number" placeholder="شماره تلفن خود را وارد کنید">
                                        <input class="m-round-input mt-4 grey lighten-4" type="number" placeholder="شماره تلفن ثابت را وارد کنید">
                                        <input class="m-round-input mt-4 grey lighten-4" type="email" placeholder="پست الکترونیکی خود را وارد کنید">
                                        <input class="m-round-input mt-4 grey lighten-4" type="password" placeholder="کلمه عبور خود را وارد کنید">
                                        <input class="m-round-input mt-4 grey lighten-4" type="password" placeholder="کلمه عبور خود را تکرار کنید">
                                        <fieldset class="form-group mr-4 mt-5">
                                            <legend class="text-right hi-fontSize-14 grey-text text-darken-2">جنسیت</legend>
                                            <div class="form-inline mt-4">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input ml-2" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                    <span class="hi-fontSize-14 mr-5 mr-sm-2">مرد</span>
                                                </label>

                                                <label class="form-check-label mr-4 hi-fontSize-12">
                                                    <input type="radio" class="form-check-input ml-2" name="optionsRadios" id="optionsRadios2" value="option2">
                                                    <span class="hi-fontSize-14 mr-5 mr-sm-2">زن</span>
                                                </label>
                                            </div>
                                        </fieldset>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="checkbox style-2 mt-3" checked="checked">
                                                <span class="hi-lineHeight-25 hi-fontSize-13"><a href="#">حریم شخصی</a> و شرایط استفاده از سرویس های بهتایم را مطالعه نموده و با کلیه موارد موافقم</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 px-5">
                                        <input class="m-round-input mt-4 grey lighten-4" type="number" placeholder="کد پستی خود را وارد کنید">
                                        <input class="m-round-input mt-4 grey lighten-4" type="text" placeholder="نام فروشگاه خود را وارد کنید">
                                        <input class="m-round-input mt-4 grey lighten-4" type="number" placeholder="شماره حساب خود را وارد کنید">
                                        <input class="m-round-input mt-4 grey lighten-4" type="number" placeholder="کد شناسه صنفی را وارد کنید">
                                        <textarea id="address" rows="10" class="m-round-input mt-4 grey lighten-4 hi-fontSize-12 p-3" placeholder="آدرس فروشگاه خود را وارد کنید"></textarea>

                                    </div>
                                </div>
                                <div class="row justify-content-center my-5 px-5">
                                    <div class="col-auto">
                                        <button type="submit" class="m-btn-round btn-round-filled-theme px-5">ثبت نام</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #wrapper -->




<script src="{{ asset('Resources/js/Jquery/jquery-3.2.0.min.js') }}"></script>
<script src="{{ asset('Resources/js/Jquery/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/tether.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('Hi_Framework/css/Animation/Other Libraries/Waves/waves.min.js') }}"></script>
<script src="{{ asset('Hi_Framework/javascript/Carousel/Other Libraries/Flicklity/flickity.pkgd.min.js') }}"></script>
@yield('js_resources')
<script src="{{ asset('Hi_Framework/components/Dropdown/Other Libraries/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('js/application.js') }}"></script>
<script src="{{ asset('js/mega-dropdown/jquery.menu-aim.js') }}"></script>
<script src="{{ asset('js/mega-dropdown/main.js') }}"></script>
{{--<script src="{{ asset('js/SizeDetector.js') }}"></script>--}}
</body>

</html>