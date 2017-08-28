@extends('layouts.main')

@section('css_resources')
    <link rel="stylesheet" href="{{asset('js/Tag/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('js/Tag/css/selectize.default.css')}}">
    <link rel="stylesheet" href="{{ asset('Hi_Framework/components/Slider/Other Libraries/noUI/nouislider.min.css') }}">
@endsection

@section('content')

    <div class="cd-main-content mt-5">
        <div class="container-fluid">
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

@endsection

@section('js_resources')
    <script src="{{ asset('js/Tag/js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/Tag/js/selectize.js') }}"></script>
    <script src="{{ asset('js/bootstrap-treeview.min.js') }}"></script>
    <script src="{{ asset('js/responsive.js') }}"></script>
    <script src="{{ asset('js/wNumb.js') }}"></script>
    <script src="{{ asset('Hi_Framework/components/Slider/Other Libraries/noUI/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/all-products.js') }}"></script>

@endsection