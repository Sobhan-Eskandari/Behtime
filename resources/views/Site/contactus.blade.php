@extends('layouts.main')

@section('content')

    @component('components.banner')@endcomponent

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="hi-fontSize-29 indigo-text dinar-title"> نظرات خود را برای ما بفرستید</h1>
            </div>
        </div>

        {{--Contact us card--}}
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6 col-xl-5 col-sm-9 col-12">
                <div class="m-card hi-shadow-2 grey lighten-4 px-5">
                    <form>
                        <input class="m-round-input " placeholder="نام و نام خانوادگی">

                        <input class="m-round-input mt-4" type="email" placeholder="پست الکترونیکی خود را وارد کنید">

                        <textarea class="m-round-input mt-4" placeholder="پیغام خود را وارد کنید"></textarea>

                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <button type="button" class="m-btn-round btn-round-filled-theme mt-4 py-3 hi-shadow-1">ارسال پیغام</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection