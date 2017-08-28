@extends('layouts.main')

@section('content')

    <!-- BreadCrumbs -->
    <div class="container">
        <ol class="breadcrumb mt-5">
            <li class="breadcrumb-item"><a href="#">فروشگاه اینترنتی بهتایم</a></li>
            <li class="breadcrumb-item active"><a href="#">پاسخ به پرسش های متداول</a></li>
        </ol>
    </div>

    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-12">
                <div class="m-card">
                    <h2 class="dinar-title hi-fontSize-25 mt-5 green-text">پاسخ به پرسش های متداول</h2>
                    <hr class="m-halfLine green-line" style="width: 10%">

                    <div class="px-5">
                        <!-- ْQuestion -->
                        <p class="text-justify mt-5 hi-lineHeight-35 hi-fontSize-16 green-text">
                            آیا امکان ویرایش مشخصات کاربری وجود دارد؟
                        </p>
                        <!-- Answer -->
                        <p class="text-justify mt-2 hi-lineHeight-35 hi-fontSize-14">
                            پاسخ:  شما می‏‌توانید مشخصات کاربری خود را ویرایش کنید. برای این کار باید با وارد کردن پست الکترونیکی و کلمه عبور، وارد حساب کاربری خود بشوید، سپس با کلیک روی گزینه "پروفایل من" به صفحه‏‌ای منتقل می‏‌شوید که در بخش "اطلاعات کاربر" امکان "ویرایش اطلاعات" وجود دارد.
                            در انتهای هر ایمیل درج شده " چنانچه تمایل به دریافت ایمیل از طرف ما ندارید، بر روی لغو اشتراک کلیک کنید " شما می توانید پس از دریافت اولین ایمیل ، عضویت خبرنامه را لغو کنید.
                            برای تغییر ایمیل یا اصلاح کد ملی با همان ایمیلی که ثبت نام کرده‏‌اید به info@digikala.com  ایمیل بزنید.
                            اگر به ایمیل خود دسترسی ندارید متاسفانه به دلایل حفظ امنیت کاربری، هیچ راهی برای تغییر ایمیل خود به عنوان نام کاربری نخواهید داشت و فقط می‌توانید مجدداً با ایمیل جدید خود ثبت نام کنید.
                        </p>

                        <p class="text-justify mt-5 hi-lineHeight-35 hi-fontSize-16 green-text">
                            2- چرا با وجود درخواست من برای تغییر رمز حساب کاربری، لینک آن برای من ایمیل نشده است؟؟
                        </p>

                        <!-- Answer -->
                        <p class="text-justify mt-2 hi-lineHeight-35 hi-fontSize-14">
                            پاسخ:  لطفاً ایمیل‌های اسپم(spam) خود را چک کنید. به ویژه ایمیل‌های ارسال شده به حساب‏‌های کاربری gmail گاهی spam می‌شوند. توجه داشته باشید که link تغییر رمز برای شما ارسال می‏‌شود نه خود رمز.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid grey lighten-3 py-5 mt-5">
        <div class="row">
            <div class="col-md-4 text-left">
                <p class="hi-fontSize-20"> behtime@ <i class="fa blue-text fa-2x fa-telegram"></i> </p>
            </div>
            <div class="col-md-4 text-center">
                <p class="hi-fontSize-20"> behtime@ <i class="fa blue-text fa-2x fa-twitter"></i> </p>
            </div>
            <div class="col-md-4 text-right">
                <p class="hi-fontSize-20"> ۳۳۲۲۹۹۹۹ <i class="fa blue-text fa-2x fa-phone"></i> </p>
            </div>
        </div>
    </div>

@endsection