@extends('layouts.main')

@section('content')

    <!-- BreadCrumbs -->
    <div class="container">
        <ol class="breadcrumb mt-5">
            <li class="breadcrumb-item"><a href="#">فروشگاه اینترنتی بهتایم</a></li>
            <li class="breadcrumb-item active"><a href="#">لیست علاقه مندی ها</a></li>
        </ol>
    </div>

    <!-- Info Section -->
    <div class="cd-main-content mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 text-center">
                <div class="row text-center">
                    <div class="col-12">
                        <h1 class="hi-fontSize-23 green-text dinar-title">لیست علاقه مندی ها</h1>
                        <hr class="m-fullLine green-line" style="width: 7%">
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
                                <th>قیمت کل</th>
                                <th class="borderLeft-theme">مشاهده</th>
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
                                <td class="green-text"> ۱.۲۰۰.۰۰۰ تومان</td>
                                <td class="borderLeft-theme"><button class="m-btn-round indigo white-text">مشاهده مغازه</button> </td>
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
                                <td class="green-text"> ۱.۲۰۰.۰۰۰ تومان</td>
                                <td class="borderLeft-theme"><button class="m-btn-round indigo white-text">مشاهده مغازه</button> </td>
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
                                <td class="green-text"> ۱.۲۰۰.۰۰۰ تومان</td>
                                <td class="borderLeft-theme"><button class="m-btn-round indigo white-text">مشاهده مغازه</button> </td>
                            </tr>

                        </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="row justify-content-center mt-5">
            <div class="col-lg-3">
                <button class="m-btn-round btn-round-filled-theme py-3 mt-5">بازگشت به صفحه اصلی</button>
            </div>
        </div>

    </div>


@endsection