@extends('layouts.main')

@section('content')

    <!-- BreadCrumbs -->
    <div class="container">
        <ol class="breadcrumb mt-5">
            <li class="breadcrumb-item"><a href="/">فروشگاه اینترنتی بهتایم</a></li>
            <li class="breadcrumb-item active"><a href="/cart">سبد خرید</a></li>
        </ol>
    </div>

    <!-- Info Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="row text-center">
                    <div class="col-12">
                        <h1 class="hi-fontSize-23 green-text dinar-title">سبد خرید شما در بهتایم</h1>
                        <hr class="m-fullLine green-line" style="width: 7%">
                    </div>
                </div>

                <div class="row justify-content-center mt-4">
                    <div class="col-12 text-center">
                        <p class="hi-fontSize-14">افزودن کالاها به سبد خرید به معنی رزرو کالا برای شما نیست برای ثبت سفارش مراحل بعدی را تکمیل کنید</p>
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-auto">
                        <a href="/fill-info">
                            <button class="m-btn-round white-text py-3 indigo">ادامه و ثبت سفارش <i class="fa fa-chevron-left"></i> </button>
                        </a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12">
                        <div class="table-responsive">
                            <table class="behtime-table" style="width:100%">
                            <tr>
                                <th>حذف</th>
                                <th>عکس محصول</th>
                                <th>شرح محصول</th>
                                <th>فروشگاه</th>
                                <th>تعداد</th>
                                <th>قیمت واحد</th>
                                <th class="borderLeft-theme">قیمت کل</th>
                            </tr>

                            <!-- Har Product -->
                            <tr class="borderBottom-theme">
                                <td>
                                    <button class="hi-button-btn1 green l-autoMargin">
                                        <i class="fa fa-2x white-text fa-trash"></i>
                                    </button>
                                </td>
                                <td><img class="hi-size-5p" src="{{asset('images/ps.png')}}"> </td>
                                <td>
                                    <p class="indigo-text hi-lineHeight-25">درایو DVD اکسترنال لنوو مدل DB65</p>
                                </td>
                                <td>غلامی</td>
                                <td width="100px"><input style="width: 80%" type="number" min="0"></td>
                                <td>۱.۲۰۰.۰۰۰ تومان</td>
                                <td class="borderLeft-theme green-text"> ۱.۲۰۰.۰۰۰ تومان</td>
                            </tr>
                            </tr>

                            <!-- Har Product -->
                            <tr class="borderBottom-theme">
                                <td>
                                    <button class="hi-button-btn1 green l-autoMargin">
                                        <i class="fa fa-2x white-text fa-trash"></i>
                                    </button>
                                </td>
                                <td><img class="hi-size-5p" src="{{asset('images/ps.png')}}"> </td>
                                <td>
                                    <p class="indigo-text hi-lineHeight-25">درایو DVD اکسترنال لنوو مدل DB65</p>
                                </td>
                                <td>غلامی</td>
                                <td width="100px"><input style="width: 80%" type="number" min="0"></td>
                                <td>۱.۲۰۰.۰۰۰ تومان</td>
                                <td class="borderLeft-theme green-text"> ۱.۲۰۰.۰۰۰ تومان</td>
                            </tr>
                            </tr>

                            <!-- Har Product -->
                            <tr class="borderBottom-theme">
                                <td>
                                    <button class="hi-button-btn1 green l-autoMargin">
                                        <i class="fa fa-2x white-text fa-trash"></i>
                                    </button>
                                </td>
                                <td><img class="hi-size-5p" src="{{asset('images/ps.png')}}"> </td>
                                <td>
                                    <p class="indigo-text hi-lineHeight-25">درایو DVD اکسترنال لنوو مدل DB65</p>
                                </td>
                                <td>غلامی</td>
                                <td width="100px"><input style="width: 80%" type="number" min="0"></td>
                                <td>۱.۲۰۰.۰۰۰ تومان</td>
                                <td class="borderLeft-theme green-text"> ۱.۲۰۰.۰۰۰ تومان</td>
                            </tr>

                        </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6 col-xl-5">
                {{----------- [ Cost Info ] -----------}}
                <div class="m-card mt-4">
                    {{----------- [ Full Cost Info ] -----------}}
                    <div class="row mt-2 hi-fontSize-14">

                        <div class="col-4 text-center">
                            <p class="sormeie-theme"><b>مبلغ کل</b></p>
                            <p class="sormeie-theme mt-4">۴۵۰۰۰ تومان</p>
                        </div>

                        <div class="col-3 text-center m-doubleSideBorder">
                            <p class="sormeie-theme"><b>تخفیف</b></p>
                            <p class="red-text mt-4">۴۵۰۰۰ تومان</p>
                        </div>

                        <div class="col-4 text-center">
                            <p class="sormeie-theme"><b>مبلغ قابل پرداخت</b></p>
                            <p class="green-text mt-4">۴۵۰۰۰ تومان</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                <p class="hi-fontSize-14">کالاهای موجود در سبد شما ثبت و رزرو نشده اند برای ثبت سفارش مراحل بعدی را تکمیل کنید</p>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-3">
                <a href="/fill-info">
                    <button class="m-btn-round white-text py-3 indigo">ادامه و ثبت سفارش <i class="fa fa-chevron-left"></i> </button>
                </a>

                <a href="/">
                    <button class="m-btn-round btn-round-filled-theme py-3 mt-5">بازگشت به صفحه اصلی</button>
                </a>
            </div>
        </div>

    </div>


@endsection