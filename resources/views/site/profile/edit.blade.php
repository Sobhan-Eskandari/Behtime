@extends('layouts.profile')

@section('profile')

    <h4 class="sormeie-theme dinar-title mt-5 text-center hi-fontSize-19">اطلاعات خود را ویرایش کنید</h4>

    <div class="row py-5">
        <div class="col-12">
            <form>
                <div class="mt-4">
                    <!-- Login Fileds -->
                    <div class="row mt-5">
                        <div class="col-lg-5 pull-lg-1">
                            <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4" for="name">نام</label>
                            <input id="name" class="m-round-input mt-4 grey lighten-4" type="text">

                            <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4 mt-5" for="lastname">نام خانوادگی</label>
                            <input id="lastname" class="m-round-input mt-4 grey lighten-4" type="text">

                            <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4 mt-5" for="mobile">کد ملی</label>
                            <input id="mobile" class="m-round-input mt-4 grey lighten-4" type="number">

                            <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4 mt-5" for="tel">شماره تلفن ثابت</label>
                            <input id="tel" class="m-round-input mt-4 grey lighten-4" type="number">
                        </div>
                        <div class="col-lg-5 pull-lg-1">

                            <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4 mt-5 mt-lg-0" for="mobile">شماره تلفن همراه</label>
                            <input id="mobile" class="m-round-input mt-4 grey lighten-4" type="number">

                            <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4 mt-5" for="birth">تاریخ تولد</label>
                            <input id="birth" class="m-round-input mt-4 grey lighten-4" type="number">

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

                            <div class="row">
                                <div class="col-12">
                                    <label class="pull-right hi-fontSize-14 grey-text text-darken-2 mr-4 mt-5" for="zip">محل سکونت</label>
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
                        </div>
                    </div>

                    <div class="row justify-content-center mt-5">
                        <div class="col-auto">
                            <button type="submit" class="m-btn-round white-text py-3 px-5 indigo">ثبت اطلاعات</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection