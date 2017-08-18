@extends('layouts.main')

@section('content')

    {{-- =========[ Profile Section ]======== --}}
    <section class="l-profile">
    <div class="container hi-shadow-1 my-5">
        <div class="row">
            <div class="col-3 grey lighten-3 text-center">

                <h4 class="dinar-title mt-4 hi-fontSize-17">فیهمه رفیعی</h4>
                <p class="tosi-theme frab-title hi-fontSize-14 mt-4 mb-3">fahim@gmail.com</p>

                <button class="m-btn-tranparent dinar-title hi-fontSize-16 py-5">خریدهای من</button>

                <button class="m-btn-tranparent dinar-title hi-fontSize-16 py-5">لیست علاقه مندی‌ها</button>

                <button class="m-btn-tranparent dinar-title hi-fontSize-16 py-5">ویرایش پروفایل</button>

                <button class="m-btn-tranparent dinar-title hi-fontSize-16 py-5">تغییر کلمه عبور</button>

                <button class="m-btn-tranparent dinar-title hi-fontSize-16 py-5">خروج</button>
            </div>

            <div class="col-9 white">

                @yield('profile')

            </div>

        </div>
    </div>
</section>

@endsection
